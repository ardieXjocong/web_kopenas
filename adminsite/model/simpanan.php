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
class Simpanan extends DataBase {
  public $id;
  public $anggota;
  public $pokok;
  public $wajib;
  public $sukarela;
  public $hari_raya;
  public $total;
    
  function addSimpanan() {
	$this->conn();
	$sql = "INSERT INTO tbl_simpanan (simpanan_id,anggota_id,simpanan_pokok,simpanan_wajib,simpanan_sukarela,simpanan_hari_raya,simpanan_total)
			VALUES ('".$this->id."','".$this->anggota."','".$this->pokok."','".$this->wajib."','".$this->sukarela."','".$this->hari_raya."','".$this->total."')";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
	
  }
  
  function updateSimpanan($id) {
	$this->conn();
	$sql = "UPDATE tbl_simpanan SET simpanan_pokok = '".$this->pokok."',
			simpanan_wajib = '".$this->wajib."', simpanan_sukarela = '".$this->sukarela."', 
			simpanan_hari_raya = '".$this->hari_raya."', simpanan_total = '".$this->total."'
			WHERE simpanan_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function deleteSimpanan($id) {
	$this->conn();
	$sql = "DELETE FROM tbl_simpanan WHERE simpanan_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
}

$SimpananObj = new Simpanan();
?>