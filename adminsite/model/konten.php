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
class Konten extends DataBase {
  public $id;
  public $judul;
  public $des;
  public $tgl;
  
  function checkTitle($judul) {
	  $this->conn();
	  $sql = "SELECT * FROM tbl_konten WHERE konten_judul = '".$judul."'";
	  $result = mysql_query($sql);
	  $rec = mysql_fetch_row($result);
	  if ($rec[0] > 0) { return true; } else { return false; }
  }
  
  function checkUpdTitle($judul, $id) {
	  $this->conn();
	  $sql = "SELECT * FROM tbl_konten WHERE konten_judul = '".$judul."' AND konten_id <> ".$id;
	  $result = mysql_query($sql);
	  $rec = mysql_fetch_row($result);
	  if ($rec[0] > 0) { return true; } else { return false; }
  }
  
  function addKonten() {
	$this->conn();
	$tgl = date("d M Y", time());
	$sql = "INSERT INTO tbl_konten (konten_judul,konten_des,konten_tgl)
			VALUES ('".$this->judul."','".$this->des."','".$tgl."')";
	$result = mysql_query($sql);
	if ($result) { 
		$this->id = mysql_insert_id();
		return true; 
	} else { return false; }
  }
  
  function updateKonten($id) {
	$this->conn();
	$tgl = date("d M Y", time());
	$sql = "UPDATE tbl_konten SET 
			konten_judul = '".$this->judul."', konten_des = '".$this->des."', konten_tgl = '".$tgl."'
			WHERE konten_id = ".$id;
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function deleteKonten($id) {
	$this->conn();
	$sql = "DELETE FROM tbl_konten WHERE konten_id = ".$id;
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }  
}

$KontenObj = new Konten();
?>