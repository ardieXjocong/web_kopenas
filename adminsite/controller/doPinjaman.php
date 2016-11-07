<?php
	$tt = "controller";
	require_once("../model/pinjaman.php");
	global $PinjamanObj;

	require_once("../model/angsuran.php");
	global $AngsuranObj;

	require_once("../model/anggota.php");
	global $AnggotaObj;	
	
	if ($_GET['mod'] == "pinjaman") {
		$result	= $PinjamanObj -> deletePinjaman($_GET['id']) && $AngsuranObj -> deleteAngsuranPinjaman($_GET['id']);

		if ($result) {
			header("location:../view/pinjaman/?msg=sscdel");
		} else {
			header("location:../view/pinjaman/?msg=errdel");
		}
	}
	
	else if ($_GET['mod'] == "pengajuan") {
		$result	= $PinjamanObj -> deletePinjaman($_GET['id']);
		if ($result) {
			header("location:../view/pengajuan/?msg=sscdel");
		} else {
			header("location:../view/pengajuan/?msg=errdel");
		}
	}
	
	else {
		if (empty($_POST['anggota'])) {
			die(msg(0,"Data Anggota harus diisi !"));
		} else {
			$PinjamanObj->anggota = $_POST['anggota'];
		}
		
		if (empty($_POST['do']) && $PinjamanObj->checkAnggota($PinjamanObj->anggota)) {
			die(msg(0,"Anggota tersebut belum satu tahun menjadi anggota !"));
		}
		
/*		if (empty($_POST['do']) && $PinjamanObj->checkPinjaman($PinjamanObj->anggota)) {
			die(msg(0,"Anggota tersebut masih memiliki pinjaman yang belum lunas !"));
		}*/
		
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
		} else if ($_POST['jml_pinjam'] > 25000000) {
			die(msg(0,"Jumlah Pinjaman terlalu besar, maksimal pinjam Rp. 25.000.000"));
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
		$PinjamanObj->ind = "N";
		
		if (empty($_POST['do'])) {
			$result = $PinjamanObj->addPinjaman();
			if ($result) {				
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data pinjaman gagal disimpan. Terjadi kesalahan."));
			}
		} 
		else if ($_POST['do'] == "setujui") {
			$result = $PinjamanObj->setujuiPinjaman($_POST['id']);
			if ($result) {				
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data pinjaman gagal disimpan. Terjadi kesalahan."));
			}
		}
		else {
			$result = $PinjamanObj->updatePinjaman($_POST['id']);
			if ($result) {				
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data pinjaman gagal disimpan. Terjadi kesalahan."));
			}
		}
	}
	
	function msg($status,$txt) {
		return '{"status":'.$status.',"txt":"'.$txt.'"}';
	}
?>
