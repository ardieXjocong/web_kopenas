<?php
	$tt = "controller";
	require_once("../model/angsuran.php");
	global $AngsuranObj;
	
	if ($_GET['mod'] == "angsuran") {
		$result	= $AngsuranObj -> deleteAngsuran($_GET['id']);
		if ($result) {
			header("location:../view/angsuran/?msg=sscdel");
		} else {
			header("location:../view/angsuran/?msg=errdel");
		}
	}
	
	else {
		if (empty($_POST['pinjaman'])) {
			die(msg(0,"Data Anggota dan Data Pinjaman harus diisi !"));
		} else {
			$AngsuranObj->pinjaman = $_POST['pinjaman'];
		}
		
		$AngsuranObj->tempo = $_POST['tgl'];
		$AngsuranObj->tgl = $_POST['tgl'];
		$AngsuranObj->id = $_POST['angsuran'];
		
		$AngsuranObj->bln_periode = date('m');
		$AngsuranObj->thn_periode = date('Y');

		$AngsuranObj->angsuran_ke = $_POST['angsuran_ke'];
		$AngsuranObj->angsuran = $_POST['pokok'];
		$AngsuranObj->angsuran_jasa = $_POST['jasa'];
		$AngsuranObj->angsuran_total = $_POST['total'];

		if ($AngsuranObj->angsuran_ke == $_POST['angsuran_total']) {
			$AngsuranObj->pinjaman_ind = "Y";
		} else {
			$AngsuranObj->pinjaman_ind = "N";
		}
				
		if (empty($_POST['do'])) {
			$result = $AngsuranObj->addAngsuran();
			if ($result) {				
				echo msg(1,"./?msg=sscsave");
			} else {
				die(msg(0,"Data angsuran gagal disimpan. Terjadi kesalahan."));
			}
		}
	}
	
	function msg($status,$txt) {
		return '{"status":'.$status.',"txt":"'.$txt.'"}';
	}
?>
