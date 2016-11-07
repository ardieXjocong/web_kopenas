<?php
session_start();
if ($tt == "index") { 
	require_once("config/database.inc.php"); 
} else if ($tt == "controller") { 
	require_once("../config/database.inc.php"); 
} else if ($tt == "view") { 
	require_once("../../config/database.inc.php"); 
}
ini_set('display_errors','off');
class Angsuran extends DataBase {
  public $id;
  public $pinjaman;
  public $tempo;
  public $tgl;
  public $bln_periode;
  public $thn_periode;
  public $angsuran_ke;
  public $angsuran;
  public $angsuran_jasa;
  public $angsuran_total;
  public $pinjaman_ind;
    
  function addAngsuran() {
	$this->conn();
	$sql = "INSERT INTO tbl_angsuran (angsuran_id,pinjaman_id,
	 								  angsuran_tempo,
	 								  angsuran_tgl,
	 								  angsuran_bln_periode,
									  angsuran_thn_periode,
									  angsuran_ke,angsuran,
									  angsuran_jasa,
									  angsuran_total)
			VALUES ('".$this->id."','".$this->pinjaman."','".$this->tempo."',
					'".$this->tgl."','".$this->bln_periode."','".$this->thn_periode."',
					'".$this->angsuran_ke."','".$this->angsuran."',
					'".$this->angsuran_jasa."','".$this->angsuran_total."')";
	$result = mysql_query($sql);
	if ($result) { 
		/*
		mysql_query("UPDATE tbl_pinjaman 
			SET pinjaman_angsuran_masuk = pinjaman_angsuran_masuk + ".$this->angsuran_total.",
			pinjaman_angsuran_sisa = pinjaman_angsuran_sisa - ".$this->angsuran_total.",
			pinjaman_ind = '".$this->pinjaman_ind."'
			WHERE pinjaman_id = '".$this->pinjaman."'");
		return true;		
		*/ 
		mysql_query("UPDATE tbl_pinjaman 
			SET pinjaman_angsuran_masuk = pinjaman_angsuran_masuk + ".$this->angsuran.",
			pinjaman_angsuran_sisa = pinjaman_angsuran_sisa - ".$this->angsuran.",
			pinjaman_ind = '".$this->pinjaman_ind."'
			WHERE pinjaman_id = '".$this->pinjaman."'");
		return true;		
	} else { return false; }
  }
  
  function updateAngsuran($id) {
	$this->conn();
	$sql = "UPDATE tbl_angsuran SET angsuran_total = '".$this->total."'
			WHERE angsuran_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function deleteAngsuran($id) {
	$this->conn();
	/*
	mysql_query("UPDATE tbl_pinjaman a JOIN tbl_angsuran b
		ON a.pinjaman_id = b.pinjaman_id
		SET a.pinjaman_angsuran_masuk = a.pinjaman_angsuran_masuk - b.angsuran_total,
		a.pinjaman_angsuran_sisa = a.pinjaman_angsuran_sisa + b.angsuran_total,
		a.pinjaman_ind = 'N'
		WHERE b.angsuran_id = '".$id."'");
	*/
	
	mysql_query("UPDATE tbl_pinjaman a JOIN tbl_angsuran b
		ON a.pinjaman_id = b.pinjaman_id
		SET a.pinjaman_angsuran_masuk = a.pinjaman_angsuran_masuk - b.angsuran,
		a.pinjaman_angsuran_sisa = a.pinjaman_angsuran_sisa + b.angsuran,
		a.pinjaman_ind = 'N'
		WHERE b.angsuran_id = '".$id."'");

	$sql = "DELETE FROM tbl_angsuran WHERE angsuran_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }

  // fungsi untuk menghapus angsuran ketika pinjaman di hapus
  function deleteAngsuranPinjaman($id) {
	$this->conn();

	$sql = "DELETE FROM tbl_angsuran WHERE pinjaman_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }  
  
}

$AngsuranObj = new Angsuran();
?>