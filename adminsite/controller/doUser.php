<?php
	$tt = "controller";
	require_once("../model/admin.php");
	global $AdminObj;
	
	if ($_GET['mod'] == "user") {
		$AdminObj->tipe_user = $_GET['tipe_user'];
		$result	= $AdminObj -> deleteUser($_GET['id']);
		if ($result) {
			header("location:../view/pengguna/?msg=sscdel");
		} else {
			header("location:../view/pengguna/?msg=errdel");
		}
	}
	
	else if ($_POST['do'] == "cpass") {
		if (empty($_POST['oldpass']) || empty($_POST['password']) || empty($_POST['cpass'])) {
			die(msg(0,"Semua data harus diisi !"));
		} else {
			if (!$AdminObj->checkPassword($_POST['oldpass'])) {
				die(msg(0,"Password lama Anda salah !"));
			}
			if ($_POST['password'] != $_POST['cpass']) {
				die(msg(0,"Konfirmasi password tidak sama !"));
			} else {
				$AdminObj->password = $_POST['password'];
			}
			if ($AdminObj->changePassword()) {
				echo msg(1,"./");
			} else {
				die(msg(0,"Terjadi kesalahan saat mengubah password !"));
			}
		}
	}
	
	else {
		if (empty($_POST['nama'])) {
			die(msg(0,"Nama harus diisi !"));
		} else {
			$AdminObj->nama = $_POST['nama'];
		}
		
		if (empty($_POST['privileges'])) {
			die(msg(0,"Tipe Pengguna harus diisi !"));
		} else {
			$AdminObj->privileges = $_POST['privileges'];
		}
		
		if (empty($_POST['username'])) {
			die(msg(0,"Username harus diisi !"));
		} else if (empty($_POST['do'])) {
			if ($AdminObj->checkUsername($_POST['username'])) {
				die(msg(0,"Username tidak diizinkan !"));
			} else {
				$AdminObj->username = $_POST['username'];
			}
		} else if ($_POST['do'] == "update") {
			if ($AdminObj->checkUpdUsername($_POST['username'], $_POST['id'])) {
				die(msg(0,"Username tidak diizinkan !"));
			} else {
				$AdminObj->username = $_POST['username'];
			}
		}
	
		if (empty($_POST['password'])) {
			die(msg(0,"Password harus diisi !"));
		} else {
			$AdminObj->password = $_POST['password'];
		}
	
		if (empty($_POST['cpass'])) {
			die(msg(0,"Konfirmasi password harus diisi !"));
		} else if ($AdminObj->password != $_POST['cpass']) {
			die(msg(0,"Konfirmasi password tidak sama !"));			
		}
	
		if (empty($_POST['do'])) {
			$result = $AdminObj->addUser();
			if ($result) {
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data pengguna gagal disimpan. Terjadi kesalahan."));
			}
		} else if ($_POST['do'] == "update") {
			$result = $AdminObj->updateUser($_POST['id']);
			if ($result) {
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data pengguna gagal disimpan. Terjadi kesalahan"));
			}
		}
	}
	
	function msg($status,$txt) {
		return '{"status":'.$status.',"txt":"'.$txt.'"}';
	}
?>
