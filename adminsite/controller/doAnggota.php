<?php
/*
 * HISTORY VERSIONING
 * PROGRAMMER
 * INITIAL              VERSION         DATE(YYYY-MM-DD)        CHANGE LOG
 * ========================================================================================================
 * -ARDIANSYAH           -1.0            -2016-04-17             - Kode Simpanan dimanualkan
*/
?>
<?php
	$tt = "controller";
	require_once("../model/anggota.php");
	global $AnggotaObj;
	require_once("../model/simpanan.php");
	global $SimpananObj;
	ini_set('display_errors','off');
	
	/*
	if ($_GET['mod'] == "anggota") {
		$result	= $AnggotaObj -> deleteAnggota($_GET['id']);
		if ($result) {
			header("location:../view/anggota/?msg=sscdel");
		} else {
			header("location:../view/anggota/?msg=errdel");
		}
	}
	*/

	#$result = $AnggotaObj->cariAnggota($_GET['anggota_tgl_masuk']);

	if ($_GET['mod'] == "anggota") {
		$pinjaman = $AnggotaObj -> checkPinjaman($_GET['id']);
		if ($pinjaman) {
			$result	= $AnggotaObj -> deleteAnggota($_GET['id']) && $AnggotaObj->deleteSimpanan($_GET['id']);
			if ($result) {
				header("location:../view/anggota/?msg=sscdel");
			} else {
				header("location:../view/anggota/?msg=errdel");
			}
		} else {
			header("location:../view/anggota/?msg=errdelp");
		}
	}
	
	else {
		// V 1.1 [S]
		// $AnggotaObj->id = $_POST['id'];
		$AnggotaObj->id = $_POST['anggota_id'];
		// V 1.1 [E]
		if (empty($_POST['nama'])) {
			die(msg(0,"Nama harus diisi !"));
		} else {
			$AnggotaObj->nama = $_POST['nama'];
		}
		
		if (empty($_POST['tpt_lahir'])) {
			die(msg(0,"Tempat Lahir harus diisi !"));
		} else {
			$AnggotaObj->tpt_lahir = $_POST['tpt_lahir'];
		}

		if (empty($_POST['tgl_lahir'])) {
			die(msg(0,"Tanggal Lahir harus diisi !"));
		} else {
			$AnggotaObj->tgl_lahir = $_POST['tgl_lahir'];
		}
		
		if (empty($_POST['jkl'])) {
			die(msg(0,"Jenis Kelamin harus diisi !"));
		} else {
			$AnggotaObj->jk = $_POST['jkl'];
		}

		/*if (empty($_POST['alamat'])) {
			die(msg(0,"Alamat harus diisi !"));
		} else {
			$AnggotaObj->alamat = $_POST['alamat'];
		}*/
		$AnggotaObj->alamat = $_POST['alamat'];
		
		/*if (empty($_POST['telp'])) {
			die(msg(0,"Telepon harus diisi !"));
		} else {
			$AnggotaObj->telepon = $_POST['telp'];
		}*/
		$AnggotaObj->telepon = $_POST['telp'];
		
		/*if (empty($_POST['pekerjaan'])) {
			die(msg(0,"Pekerjaan harus diisi !"));
		} else {
			$AnggotaObj->pekerjaan = $_POST['pekerjaan'];
		}*/
		$AnggotaObj->pekerjaan = $_POST['pekerjaan'];
		
		if (empty($_POST['tipe'])) {
			die(msg(0,"Tipe harus diisi !"));
		} else {
			$AnggotaObj->tipe = $_POST['tipe'];
		}
		
		if ($AnggotaObj->tipe == 1 || $AnggotaObj->tipe == 3) {
			if (empty($_POST['unit_kerja'])) {
				die(msg(0,"Unit Kerja harus diisi !"));
			} else {
				$AnggotaObj->unit_kerja = $_POST['unit_kerja'];
			}
		}
		
		if (empty($_POST['tgl_masuk'])) {
			die(msg(0,"Tanggal Masuk harus diisi !"));
		} else {
			$AnggotaObj->tgl_masuk = $_POST['tgl_masuk'];
		}
		
		// $AnggotaObj->password = md5($AnggotaObj->id);
		if (empty($_POST['password'])) {
			die(msg(0,"Password harus diisi !"));
		} else {
			$AnggotaObj->password = md5($_POST['password']);
		}



		if (empty($_POST['do'])) {
			$result = $AnggotaObj->addAnggota();
			if ($result) {
				
				require_once("../config/config.inc.php");
				// V 1.1 [S]
				// $SimpananObj->id = $_POST['simpanan'];
				$SimpananObj->id = $_POST['simpanan_id'];
				// V 1.1 [E]
				// V 1.1 [S]
				// $SimpananObj->anggota = $_POST['id'];
				$SimpananObj->anggota = $_POST['anggota_id'];
				// V 1.1 [E]
				$SimpananObj->pokok = SIMPANAN_POKOK;
				$SimpananObj->wajib = 0;
				$SimpananObj->sukarela = 0;
				$SimpananObj->hari_raya = 0;
				$SimpananObj->total = $SimpananObj->pokok + $SimpananObj->wajib + $SimpananObj->sukarela + $SimpananObj->hari_raya;
				$SimpananObj->addSimpanan();
				
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data pengguna gagal disimpan. Terjadi kesalahan."));
			}
		} else if ($_POST['do'] == "update") {
			$result = $AnggotaObj->updateAnggota($_POST['id']);
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
