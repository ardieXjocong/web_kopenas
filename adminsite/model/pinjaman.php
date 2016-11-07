<?php
session_start();
if ($tt == "index") { 
	require_once("config/database.inc.php"); 
} else if ($tt == "controller") { 
	require_once("../config/database.inc.php"); 
} else if ($tt == "view") { 
	require_once("../../config/database.inc.php"); 
} else if ($tt == "front") { 
	require_once("../adminsite/config/database.inc.php"); 
}
ini_set('display_errors','off');
class Pinjaman extends DataBase {
  public $id;
  public $anggota;
  public $tgl_pengajuan;
  public $tgl_pinjam;
  public $pinjaman;
  public $provisi;
  public $angsuran;
  public $tempo;
  public $pokok;
  public $jasa;
  public $total;
  public $angsuran_masuk;
  public $angsuran_sisa;
  public $catatan;
  public $ind;
   
/*  function checkPinjaman($anggota) {
	  $this->conn();
	  $sql = "SELECT pinjaman_id FROM tbl_pinjaman WHERE anggota_id = '".$anggota."' AND pinjaman_ind = 'N'";
	  $result = mysql_query($sql);
	  $rec = mysql_num_rows($result);
	  if ($rec > 0) { return true; } else { return false; }
  }*/
  
  function checkAnggota($anggota) {
	  $this->conn();
	  $sql = "SELECT anggota_tgl_masuk FROM tbl_anggota WHERE anggota_id = '".$anggota."'";
	  $result = mysql_query($sql);
	  $rec = mysql_fetch_array($result);
	  
	  $date = explode('-',$rec[anggota_tgl_masuk]);
	  $date_compare = date('Ymd', mktime(0,0,0,$date[1],$date[2],$date[0]+1));
	  $date_now = date('Ymd');
	  
	  if ($date_compare >= $date_now) { return true; } else { return false; }
  }
  
  function checkPinjamanApprov($anggota) {
	  $this->conn();
	  $sql = "SELECT pinjaman_id FROM tbl_pinjaman WHERE anggota_id = '".$anggota."' AND pinjaman_ind = 'T'";
	  $result = mysql_query($sql);
	  $rec = mysql_num_rows($result);
	  if ($rec > 0) { return true; } else { return false; }
  }
   
  function addPinjaman() {
	$this->conn();
	$sql = "INSERT INTO tbl_pinjaman (pinjaman_id,anggota_id,pinjaman_tgl_pengajuan,pinjaman_tgl_pinjam,pinjaman,pinjaman_provisi,pinjaman_angsuran,pinjaman_tempo,pinjaman_pokok,pinjaman_jasa,pinjaman_total,pinjaman_angsuran_masuk,pinjaman_angsuran_sisa,pinjaman_catatan,pinjaman_ind)
			VALUES ('".$this->id."','".$this->anggota."','".$this->tgl_pengajuan."','".$this->tgl_pinjam."','".$this->pinjaman."','".$this->provisi."','".$this->angsuran."','".$this->tempo."','".$this->pokok."','".$this->jasa."','".$this->total."','".$this->angsuran_masuk."','".$this->angsuran_sisa."','".$this->catatan."','".$this->ind."')";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
	
  }
  
  function updatePinjaman($id) {
	$this->conn();
	$sql = "UPDATE tbl_pinjaman SET pinjaman = '".$this->pinjaman."',
			pinjaman_provisi = '".$this->provisi."', pinjaman_angsuran = '".$this->angsuran."', 
			pinjaman_pokok = '".$this->pokok."', pinjaman_jasa = '".$this->jasa."', pinjaman_total = '".$this->total."',
			pinjaman_angsuran_masuk = '".$this->angsuran_masuk."', pinjaman_angsuran_sisa = '".$this->angsuran_sisa."',
			pinjaman_catatan = '".$this->catatan."'
			WHERE pinjaman_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function setujuiPinjaman($id) {
	$this->conn();
	$sql = "UPDATE tbl_pinjaman SET pinjaman = '".$this->pinjaman."',
			pinjaman_provisi = '".$this->provisi."', pinjaman_angsuran = '".$this->angsuran."', 
			pinjaman_pokok = '".$this->pokok."', pinjaman_jasa = '".$this->jasa."', pinjaman_total = '".$this->total."',
			pinjaman_angsuran_masuk = '".$this->angsuran_masuk."', pinjaman_angsuran_sisa = '".$this->angsuran_sisa."',
			pinjaman_catatan = '".$this->catatan."', pinjaman_ind = '".$this->ind."'
			WHERE pinjaman_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function deletePinjaman($id) {
	$this->conn();
	$sql = "DELETE FROM tbl_pinjaman WHERE pinjaman_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
}

$PinjamanObj = new Pinjaman();
?>