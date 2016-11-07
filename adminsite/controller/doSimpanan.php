<?php
	$tt = "controller";
	require_once("../model/anggota.php");
	global $AnggotaObj;
	require_once("../model/simpanan.php");
	global $SimpananObj;
	require_once("../model/simpanan_detil.php");
	global $SimpananDetilObj;
	
	if ($_GET['mod'] == "simpanan") {
		$result	= $SimpananDetilObj -> deleteSimpananDetil($_GET['id']);
		if ($result) {
			header("location:../view/simpanan/?msg=sscdel");
		} else {
			header("location:../view/simpanan/?msg=errdel");
		}
	}
	
	else {
		$AnggotaObj->id = $_POST['id'];
		
		if (empty($_POST['simpanan'])) {
			die(msg(0,"Data Anggota / Simpanan harus diisi !"));
		} else {
			$SimpananDetilObj->simpanan = $_POST['simpanan'];
		}
		
		if (empty($_POST['wajib']) && empty($_POST['sukarela']) && empty($_POST['hari_raya'])) {
			die(msg(0,"Simpanan harus diisi !"));
		} 
		
		if (empty($_POST['wajib'])) {
			$SimpananDetilObj->wajib = 0;
		} else {
			$SimpananDetilObj->wajib = $_POST['wajib'];
		}
		
		if (empty($_POST['sukarela'])) {
			$SimpananDetilObj->sukarela = 0;
		} else {
			$SimpananDetilObj->sukarela = $_POST['sukarela'];
		}
		
		if (empty($_POST['hari_raya'])) {
			$SimpananDetilObj->hari_raya = 0;
		} else {
			$SimpananDetilObj->hari_raya = $_POST['hari_raya'];
		}
			
		$SimpananDetilObj->bln_periode = date(m);
		$SimpananDetilObj->thn_periode = date(Y);
		$SimpananDetilObj->tgl = $_POST['tgl'];
		$SimpananDetilObj->pokok = 0;
		$SimpananDetilObj->total = $SimpananDetilObj->pokok + $SimpananDetilObj->wajib + $SimpananDetilObj->sukarela + $SimpananDetilObj->hari_raya;
		
		if (empty($_POST['do'])) {
			$result = $SimpananDetilObj->addSimpananDetil();
			if ($result) {				
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data simpanan gagal disimpan. Terjadi kesalahan."));
			}
		}
	}
	
	function msg($status,$txt) {
		return '{"status":'.$status.',"txt":"'.$txt.'"}';
	}
?>
