<?php
	$tt = "controller";
	require_once("../model/anggota.php");
	global $AnggotaObj;
	require_once("../model/simpanan.php");
	global $SimpananObj;
	require_once("../model/penarikan.php");
	global $PenarikanObj;
	
	if ($_GET['mod'] == "penarikan") {
		$result	= $PenarikanObj -> deletePenarikan($_GET['id'],$_GET['tipe'],$_GET['total'],$_GET['simpanan']);
		if ($result) {
			header("location:../view/penarikan/?msg=sscdel");
		} else {
			header("location:../view/penarikan/?msg=errdel");
		}
	}
	else if ($_POST['mod'] == "tanggal") {
		
		if (empty($_POST['tgl_mulai'])) {
			die(msg(0,"Tanggal Mulai harus diisi !"));
		}
		
		if (empty($_POST['tgl_selesai'])) {
			die(msg(0,"Tanggal Selesai harus diisi !"));
		}
		
		$myfile = fopen("../config/tanggal.txt", "w") or die ("file konfigurasi tidak bisa dibuka !!");
		$data = $_POST['tgl_mulai']."  ".$_POST['tgl_selesai'];
		fwrite($myfile,$data);
		fclose($myfile);
		
		echo msg(1,"./?msg=sscconf");
	}
	else {
		$AnggotaObj->id = $_POST['id'];
		
		$PenarikanObj->tgl = $_POST['tgl'];
		$bulan = substr($_POST['tgl'],5,2);
		$tahun = substr($_POST['tgl'],0,4);
		
		if (empty($_POST['simpanan'])) {
			die(msg(0,"Data Anggota / Simpanan harus diisi !"));
		} else {
			$PenarikanObj->simpanan = $_POST['simpanan'];
		}
		
		if (empty($_POST['tipe'])) {
			die(msg(0,"Jenis Penarikan harus diisi !"));
		} else {
			$PenarikanObj->tipe = $_POST['tipe'];
		}
		
		if ($PenarikanObj->tipe == 2) {
			if ($PenarikanObj->checkPenarikanSukarela($PenarikanObj->simpanan,$bulan,$tahun)) {
				die(msg(0,"Anggota tersebut sudah melakukan penarika pada bulan dan tahun ini !"));
			}
		} else if($PenarikanObj->tipe == 3){			
			$myfile = fopen("../config/tanggal.txt", "r") or die ("file konfigurasi tidak bisa dibuka !!");
			$data = fread($myfile, filesize("../config/tanggal.txt"));
			if (strlen($data) >= 20) {
				$tgl_mulai = substr($data,0,10);
				$tgl_selesai = substr($data,12,10);
			}
			fclose($myfile);
			
			if (str_replace("-","",$PenarikanObj->tgl) < str_replace("-","",$tgl_mulai)
				|| str_replace("-","",$PenarikanObj->tgl) > str_replace("-","",$tgl_selesai)) {
				die(msg(0,"Belum saatnya melakukan penarikan simpanan hari raya !"));
			}
		}
		
		if (empty($_POST['total'])) {
			die(msg(0,"Total Penarikan harus diisi !"));
		} else {
			$PenarikanObj->total = $_POST['total'];
		}
		
		if ($PenarikanObj->tipe == 1 && $PenarikanObj->total > $_POST['wajib']) {
			die(msg(0,"Total Penarikan lebih besar dari simpanan wajib !"));
		} else if ($PenarikanObj->tipe == 2 && $PenarikanObj->total > $_POST['sukarela']) {
			die(msg(0,"Total Penarikan lebih besar dari simpanan sukarela !"));
		} else if ($PenarikanObj->tipe == 3 && $PenarikanObj->total > $_POST['hari_raya']) {
			die(msg(0,"Total Penarikan lebih besar dari simpanan hari raya !"));
		} else if ($PenarikanObj->tipe == 4 && $PenarikanObj->total > $_POST['pokok']) {
			die(msg(0,"Total Penarikan lebih besar dari simpanan pokok !"));
		}
		
		$PenarikanObj->tgl = $_POST['tgl'];
		$PenarikanObj->id = $_POST['penarikan'];
		$PenarikanObj->catatan = $_POST['catatan'];
		
		if (empty($_POST['do'])) {
			$result = $PenarikanObj->addPenarikan();
			if ($result) {				
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data penarikan gagal disimpan. Terjadi kesalahan."));
			}
		}
	}
	
	function msg($status,$txt) {
		return '{"status":'.$status.',"txt":"'.$txt.'"}';
	}
?>
