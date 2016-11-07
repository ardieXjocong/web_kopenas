<?php
/*
 * HISTORY VERSIONING
 * PROGRAMMER
 * INITIAL              VERSION         DATE(YYYY-MM-DD)        CHANGE LOG
 * ========================================================================================================
 * -ARDIANSYAH           -1.0            -2016-05-17             - tambah fungsi penarikan s.wajib dan s.pokok
*/
?>
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
class Penarikan extends DataBase {
  public $id;
  public $simpanan;
  public $tgl;
  public $total;
  public $tipe;
  public $catatan;
    
  function addPenarikan() {
	$this->conn();
	$sql = "INSERT INTO tbl_penarikan (penarikan_id,simpanan_id,penarikan_tgl,penarikan_total,penarikan_tipe,penarikan_catatan)
			VALUES ('".$this->id."','".$this->simpanan."','".$this->tgl."','".$this->total."','".$this->tipe."','".$this->catatan."')";
	$result = mysql_query($sql);
	if ($result) { 
		if ($this->tipe == 1) {
			mysql_query("UPDATE tbl_simpanan 
				SET simpanan_wajib = simpanan_wajib - ".$this->total.",
				simpanan_total = simpanan_total - ".$this->total."
				WHERE simpanan_id = '".$this->simpanan."'");
		} else if ($this->tipe == 2) {
			mysql_query("UPDATE tbl_simpanan 
				SET simpanan_sukarela = simpanan_sukarela - ".$this->total.",
				simpanan_total = simpanan_total - ".$this->total."
				WHERE simpanan_id = '".$this->simpanan."'");
		} else if ($this->tipe == 3) {
			mysql_query("UPDATE tbl_simpanan 
				SET simpanan_hari_raya = simpanan_hari_raya - ".$this->total.",
				simpanan_total = simpanan_total - ".$this->total."
				WHERE simpanan_id = '".$this->simpanan."'");
		} 
		// v 1.0 [s]
		else if ($this->tipe == 4) {
			mysql_query("UPDATE tbl_simpanan 
				SET simpanan_pokok = simpanan_pokok - ".$this->total.", 
				simpanan_total = simpanan_total - ".$this->total."
				WHERE simpanan_id = '".$this->simpanan."'");
		}
		// v 1.0 [e]
		return true; 
	} else { return false; }
	
  }
  
  function updatePenarikan($id) {
	$this->conn();
	$sql = "UPDATE tbl_penarikan SET penarikan_total = '".$this->total."'
			WHERE penarikan_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function deletePenarikan($id,$tipe,$total,$simpanan) {
	$this->conn();
	if ($tipe == 1) {
		mysql_query("UPDATE tbl_simpanan 
			SET simpanan_wajib = simpanan_wajib + ".$total.",
			simpanan_total = simpanan_total + ".$total."
			WHERE simpanan_id = '".$simpanan."'");
	} else if ($tipe == 2) {
		mysql_query("UPDATE tbl_simpanan 
			SET simpanan_sukarela = simpanan_sukarela + ".$total.",
			simpanan_total = simpanan_total + ".$total."
			WHERE simpanan_id = '".$simpanan."'");
	} else if ($tipe == 3) {
		mysql_query("UPDATE tbl_simpanan 
			SET simpanan_hari_raya = simpanan_hari_raya + ".$total.",
			simpanan_total = simpanan_total + ".$total."
			WHERE simpanan_id = '".$simpanan."'");
	}
	// v 1.0 [s]
	else if ($tipe == 4) {
		mysql_query("UPDATE tbl_simpanan 
			SET simpanan_pokok = simpanan_pokok + ".$total.",
			simpanan_total = simpanan_total + ".$total."
			WHERE simpanan_id = '".$simpanan."'");
	}
	// v 1.0 [e]
	$sql = "DELETE FROM tbl_penarikan WHERE penarikan_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function checkPenarikanSukarela($simpanan,$bln,$thn) {
	$this->conn();
	$sql = "SELECT penarikan_id FROM tbl_penarikan WHERE simpanan_id = '".$simpanan."' AND SUBSTRING_INDEX(penarikan_tgl,'-',1) = '".$thn."' 
			AND SUBSTRING_INDEX( SUBSTRING_INDEX( penarikan_tgl,  '-', 2 ) ,  '-', -1 ) = '".$bln."' AND penarikan_tipe = '2'";
	$result = mysql_num_rows(mysql_query($sql));
	if ($result > 0) { 		
		return true; 
	} else { return false; }
  }
  
}

$PenarikanObj = new Penarikan();
?>