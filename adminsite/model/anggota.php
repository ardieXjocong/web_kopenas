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
class Anggota extends DataBase {
  public $id;
  public $nama;
  public $tpt_lahir;
  public $tgl_lahir;
  public $jk;
  public $alamat;
  public $telepon;
  public $pekerjaan;
  public $unit_kerja;
  public $tipe;
  public $tgl_masuk;
  public $password;
    
  function addAnggota() {
	$this->conn();
	$sql = "INSERT INTO tbl_anggota (anggota_id,anggota_nama,anggota_tpt_lahir,anggota_tgl_lahir,anggota_jk,anggota_alamat,anggota_telepon,anggota_pekerjaan,anggota_unit_kerja,anggota_tipe,anggota_tgl_masuk, anggota_password)
			VALUES ('".$this->id."','".$this->nama."','".$this->tpt_lahir."','".$this->tgl_lahir."','".$this->jk."','".$this->alamat."','".$this->telepon."','".$this->pekerjaan."','".$this->unit_kerja."','".$this->tipe."','".$this->tgl_masuk."','".$this->password."')";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
	
  }
  
  function updateAnggota($id) {
	$this->conn();
	$sql = "UPDATE tbl_anggota SET anggota_nama = '".$this->nama."',
			anggota_tpt_lahir = '".$this->tpt_lahir."', anggota_tgl_lahir = '".$this->tgl_lahir."', anggota_jk = '".$this->jk."',
			anggota_alamat = '".$this->alamat."', anggota_telepon = '".$this->telepon."', anggota_pekerjaan = '".$this->pekerjaan."',
			anggota_unit_kerja = '".$this->unit_kerja."', anggota_tipe = '".$this->tipe."', anggota_tgl_masuk = '".$this->tgl_masuk."'
			WHERE anggota_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  

  function checkPinjaman($id) {
	$this->conn();
	$row = mysql_num_rows(mysql_query("SELECT * FROM tbl_pinjaman WHERE pinjaman_ind = 'N' AND anggota_id = '".$id."'"));
	if ($row > 0) {
		return false;
	} else {
		return true;
	}
  }


  function deleteSimpanan($id) {
	$this->conn();
	$sql = "DELETE FROM tbl_simpanan WHERE anggota_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }



  function checkSimpanan($id) {
	$this->conn();
	$row = mysql_num_rows(mysql_query("SELECT * FROM tbl_simpanan WHERE anggota_id = '".$id."'"));
	if ($row > 0) {
		return false;
	} else {
		return true;
	}
  }

  function deleteAnggota($id) {
	$this->conn();
	$sql = "DELETE FROM tbl_anggota WHERE anggota_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }

  function cariAnggota($tgl_masuk) {
  	$this->conn();
  	$sql = "SELECT FROM tbl_anggota WHERE anggota_tgl_masuk '".$tgl_masuk."'";
  	$result = mysql_query($sql);
  	if ($result) { return true; } else { return false; }
  }
  
}

$AnggotaObj = new Anggota();
?>