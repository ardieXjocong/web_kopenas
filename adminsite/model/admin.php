<?php
if ($tt == "index") { 
	require_once("config/database.inc.php"); 
} else if ($tt == "controller") { 
	require_once("../config/database.inc.php"); 
} else if ($tt == "view") { 
	require_once("../../config/database.inc.php"); 
}
class Admin extends DataBase {
  public $id;
  public $nama;
  public $username;
  public $password;
  public $privileges;
  
  function isValidLogin($username,$password, $privileges) {
	$this->conn();
	$passMD5 = md5($password);
	
	$sql = "SELECT * FROM tbl_admin WHERE admin_username = '".$username."' AND admin_password = '".$passMD5."' AND admin_privileges = '".$privileges."'";

	$result = mysql_query($sql);
  	$results = mysql_query($sql);
  	$rec = mysql_fetch_row($result);
  	if ($rec[0] > 0) {
  		$row = mysql_fetch_array($results);
		$id = $row["admin_id"];
		$nama = $row["admin_nama"];
		$username = $row["admin_username"];
		$password = $row["admin_password"];
		$privileges = $row["admin_privileges"];
		
		//session_start();
  		//session_register("admin");
		//session_register("admin_nama");
		//session_register("admin_username");
		//session_register("admin_password");
		//session_register("admin_privileges");
  		
		$_SESSION["admin"] = $id;
		$_SESSION["admin_nama"] = $nama;
		$_SESSION["admin_username"] = $username;
		$_SESSION["admin_password"] = $password;
		$_SESSION["admin_privileges"] = $privileges;
  		
  		return true;
  	} else { return false; }
  }
  
  function checkAdmin() {
	$this->conn();
	if (isset($_SESSION['admin']) && isset($_SESSION['admin_privileges'])) {
		$sql = "SELECT * FROM tbl_admin WHERE admin_username = '".$_SESSION['admin_username']."' AND admin_password = '".$_SESSION['admin_password']."' AND admin_privileges = '".$_SESSION['admin_privileges']."'";
		$result = mysql_query($sql);
	  	$rec = mysql_fetch_row($result);
  		if ($rec[0] > 0) { return true; } else { return false; }
	} else { return false; }
  }
  
  function checkUsername($username) {
	  $this->conn();
	  $sql = "SELECT * FROM tbl_admin WHERE admin_username = '".$username."'";
	  $result = mysql_query($sql);
	  $rec = mysql_fetch_row($result);
	  if ($rec[0] > 0) { return true; } else { return false; }
  }
  
  function checkUpdUsername($username, $id) {
	  $this->conn();
	  $sql = "SELECT * FROM tbl_admin WHERE admin_username = '".$username."' AND admin_id <> '".$id."'";
	  $result = mysql_query($sql);
	  $rec = mysql_fetch_row($result);
	  if ($rec[0] > 0) { return true; } else { return false; }
  }
  
  function addUser() {
	$passMD5 = md5($this->password);
	$this->conn();
	$sql = "INSERT INTO tbl_admin (admin_nama,admin_username,admin_password,admin_privileges)
			VALUES ('".$this->nama."','".$this->username."','".$passMD5."','".$this->privileges."')";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
	
  }
  
  function updateUser($id) {
	$passMD5 = md5($this->password);
	$this->conn();
	$sql = "UPDATE tbl_admin SET admin_nama = '".$this->nama."',
			admin_username = '".$this->username."', admin_password = '".$passMD5."', admin_privileges = '".$this->privileges."'
			WHERE admin_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function deleteUser($id) {
	$this->conn();
	$sql = "DELETE FROM tbl_admin WHERE admin_id = '".$id."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
  
  function checkPassword($password) {
	$passMD5 = md5($password);
	$this->conn();
	$sql = "SELECT * FROM tbl_admin WHERE admin_password = '$passMD5' AND admin_id = '".$_SESSION['admin']."'";
	$result = mysql_query($sql);
	$rec = mysql_fetch_row($result);
	if ($rec[0] > 0) { return true; } else { return false; }
  }
  
  function changePassword() {
	$this->conn();
	$passMD5 = md5($this->password);
	$sql = "UPDATE tbl_admin SET admin_password = '".$passMD5."' WHERE admin_id = '".$_SESSION['admin']."'";
	$result = mysql_query($sql);
	if ($result) { return true; } else { return false; }
  }
}

$AdminObj = new Admin();
?>