<?php
	$tt = "controller";
	require_once("../model/konten.php");
	global $KontenObj;
	
	if ($_GET['mod'] == "konten") {
		$result	= $KontenObj->deleteKonten($_GET['id']);
		if ($result) {
			header("location:../view/konten/?msg=sscdel");
		} else {
			header("location:../view/konten/?msg=errdel");
		}
	}
	
	else {
		if (empty($_POST['judul'])) {
			die(msg(0,"Judul konten harus diisi !"));
		} else if (empty($_POST['do'])) {
			if ($KontenObj->checkTitle($_POST['judul'])) {
				die(msg(0,"Judul konten sudah ada !"));
			} else {
				$KontenObj->judul = $_POST['judul'];
			}
		} else if ($_POST['do'] == "update") {
			if ($KontenObj->checkUpdTitle($_POST['judul'], $_POST['id'])) {
				die(msg(0,"Judul konten sudah ada !"));
			} else {
				$KontenObj->judul = $_POST['judul'];
			}
		}
		
		if (empty($_POST['des'])) {
			die(msg(0,"Isi konten harus diisi !"));
		} else {
			$KontenObj->des = $_POST['des'];
		}
	
		if (empty($_POST['do'])) {
			$result = $KontenObj->addKonten();
			if ($result) {
				echo msg(1,"./?msg=sscadd");
			} else {
				die(msg(0,"Data konten gagal disimpan."));
			}
		} else if ($_POST['do'] == "update") {
			$result = $KontenObj->updateKonten($_POST['id']);
			if ($result) {
				echo msg(1,"./?msg=sscupd");
			} else {
				die(msg(0,"Data konten gagal disimpan."));
			}
		}
	}
	
	function msg($status,$txt) {
		return '{"status":'.$status.',"txt":"'.$txt.'"}';
	}
?>
