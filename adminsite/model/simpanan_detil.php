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
class SimpananDetil extends DataBase {
  public $id;
  public $simpanan;
  public $tgl;
  public $bln_periode;
  public $thn_periode;
  public $pokok;
  public $wajib;
  public $sukarela;
  public $hari_raya;
  public $total;
    
  function addSimpananDetil() {
	$this->conn();
	$sql = "INSERT INTO tbl_simpanan_detil (simpanan_id,simpanan_detil_tgl,simpanan_detil_bln_periode,simpanan_detil_thn_periode,simpanan_detil_pokok,simpanan_detil_wajib,simpanan_detil_sukarela,simpanan_detil_hari_raya,simpanan_detil_total)
			VALUES ('".$this->simpanan."','".$this->tgl."','".$this->bln_periode."','".$this->thn_periode."','".$this->pokok."','".$this->wajib."','".$this->sukarela."','".$this->hari_raya."','".$this->total."')";
	$result = mysql_query($sql);
	if ($result) { 
		mysql_query("UPDATE tbl_simpanan 
			SET simpanan_pokok = simpanan_pokok + ".$this->pokok.",
			simpanan_wajib = simpanan_wajib + ".$this->wajib.",
			simpanan_sukarela = simpanan_sukarela + ".$this->sukarela.",
			simpanan_hari_raya = simpanan_hari_raya + ".$this->hari_raya.",
			simpanan_total = simpanan_total + ".$this->total."
			WHERE simpanan_id = '".$this->simpanan."'");
		return true; 
	} else { return false; }
	
  }
  
  function updateSimpananDetil($id) {
	$this->conn();
	$sql = "UPDATE tbl_simpanan_detil SET simpanan_detil_pokok = '".$this->pokok."',
			simpanan_detil_wajib = '".$this->wajib."', simpanan_detil_sukarela = '".$this->sukarela."', 
			simpanan_detil_hari_raya = '".$this->hari_raya."', simpanan_detil_total = '".$this->total."'
			WHERE simpanan_detil_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function deleteSimpananDetil($id) {
	$this->conn();
	mysql_query("UPDATE tbl_simpanan a JOIN tbl_simpanan_detil b ON a.simpanan_id = b.simpanan_id
			SET a.simpanan_pokok = a.simpanan_pokok - b.simpanan_detil_pokok,
			a.simpanan_wajib = a.simpanan_wajib - b.simpanan_detil_wajib,
			a.simpanan_sukarela = a.simpanan_sukarela - b.simpanan_detil_sukarela,
			a.simpanan_hari_raya = a.simpanan_hari_raya - b.simpanan_detil_hari_raya,
			a.simpanan_total = a.simpanan_total - b.simpanan_detil_total
			WHERE b.simpanan_detil_id = '".$id."'");
	$sql = "DELETE FROM tbl_simpanan_detil WHERE simpanan_detil_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
}

$SimpananDetilObj = new SimpananDetil();
?>