<?php
session_start();

include "../adminsite/config/connection.php";
ini_set('display_errors','off');
if($_POST['mod']=='cpass'){
	if(empty($_POST['passwordlm']) && empty($_POST['passwordbr']) && empty($_POST['passwordcbr']))
		die(msg(0,"Tidak ada data yang disimpan."));
	
	if(empty($_POST['passwordlm']) || empty($_POST['passwordbr']) || empty($_POST['passwordcbr']))
		die(msg(0,"Semua field harus diisi."));
		
	$pass = mysql_query("SELECT anggota_password FROM tbl_anggota WHERE anggota_id='$_SESSION[ID]'");
	$p = mysql_fetch_array($pass);
	$passlm = md5($_POST['passwordlm']);
	
	if($passlm != $p[anggota_password])
		die(msg(0,"Password lama anda salah."));
		
	if($_POST['passwordbr'] != $_POST['passwordcbr'])
		die(msg(0,"Konfirmasi password baru tidak sama."));
		
	$passbr = md5($_POST['passwordbr']);
	mysql_query("UPDATE tbl_anggota SET anggota_password = '$passbr' WHERE anggota_id = '$_SESSION[ID]'");
		
	echo msg(1,"./?view=cpass&msg=sscupd");
}

else if ($_POST['mod']=='pengajuan') {
	
	$tt = "front";
	require_once("../adminsite/model/pinjaman.php");
	global $PinjamanObj;
	
	if (empty($_POST['anggota'])) {
		die(msg(0,"Data Anggota harus diisi !"));
	} else {
		$PinjamanObj->anggota = $_POST['anggota'];
	}
	
	if ($PinjamanObj->checkAnggota($PinjamanObj->anggota)) {
		die(msg(0,"Anda belum satu tahun menjadi anggota !"));
	}
		
	if ($PinjamanObj->checkPinjaman($PinjamanObj->anggota)) {
		die(msg(0,"Anda masih memiliki pinjaman yang belum lunas !"));
	}
	
	if ($PinjamanObj->checkPinjamanApprov($PinjamanObj->anggota)) {
		die(msg(0,"Anda telah mengajukan pinjaman dan masih belum disetujui !"));
	}



	if (empty($_POST['jml_pinjam'])) {
		die(msg(0,"Jumlah Pinjaman harus diisi !"));
	} else if (($_POST['tipe'] == "PNS") AND ($_POST['jml_pinjam'] > 25000000)) {
		die(msg(0,"Jumlah Pinjaman terlalu besar, maksimal pinjam Rp. 25.000.000"));
	} else if (($_POST['tipe'] == "Istri Pegawai") AND ($_POST['jml_pinjam'] > 5000000)) {
		die(msg(0,"Jumlah Pinjaman terlalu besar, maksimal pinjam Rp. 5.000.000"));
	} else if (($_POST['tipe'] == "Rekanan") AND ($_POST['jml_pinjam'] > 5000000)) {
		die(msg(0,"Jumlah Pinjaman terlalu besar, maksimal pinjam Rp. 5.000.000"));
	} else if (($_POST['tipe'] == "Pensiunan") AND ($_POST['jml_pinjam'] > 5000000)) {
		die(msg(0,"Jumlah Pinjaman terlalu besar, maksimal pinjam Rp. 5.000.000"));
	} else {
		$PinjamanObj->pinjaman = str_replace(".","",$_POST['jml_pinjam']);
	}


	/*
	if (empty($_POST['jml_pinjam'])) {
		die(msg(0,"Jumlah Pinjaman harus diisi !"));
	} else if ($_POST['jml_pinjam'] > 15000000) {
		die(msg(0,"Jumlah Pinjaman terlalu besar, maksimal pinjam Rp. 15.000.000 !"));
	} else {
		$PinjamanObj->pinjaman = str_replace(".","",$_POST['jml_pinjam']);
	}
	*/
		
	if (empty($_POST['angsuran'])) {
		die(msg(0,"Lama Angsuran harus diisi !"));
	} else {
		$PinjamanObj->angsuran = $_POST['angsuran'];
	}
	
	$PinjamanObj->id = $_POST['id'];
	
	$PinjamanObj->tgl_pengajuan = $_POST['tgl'];
	$PinjamanObj->tgl_pinjam = $_POST['tgl'];
	$PinjamanObj->tempo = date(d);
	
	$PinjamanObj->provisi = $PinjamanObj->pinjaman / 100;
	$PinjamanObj->pokok = ceil(($PinjamanObj->pinjaman / $PinjamanObj->angsuran)/1000) * 1000;
	$PinjamanObj->jasa = $PinjamanObj->pinjaman * 1.5 / 100;
	$PinjamanObj->total = $PinjamanObj->pokok + $PinjamanObj->jasa;
	$PinjamanObj->angsuran_masuk = $_POST['masuk'];
	$PinjamanObj->angsuran_sisa = $_POST['sisa'];
	$PinjamanObj->catatan = $_POST['catatan'];
	$PinjamanObj->ind = "T";
	
	$result = $PinjamanObj->addPinjaman();
	if ($result) {				
		echo msg(1,"./?view=pinjaman&msg=sscadd");
	} else {
		die(msg(0,"Data pinjaman gagal disimpan. Terjadi kesalahan."));
	}
}

function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}

?>