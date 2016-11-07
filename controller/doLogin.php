<?php
	include "../adminsite/config/connection.php";
	ini_set('display_errors','off');
	function antiinjection($data){
  		$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  		return $filter_sql;
	}

	$username = antiinjection($_POST[username]);
	$pass     = antiinjection(md5($_POST[password]));

	$login = mysql_query("SELECT * FROM tbl_anggota WHERE anggota_id = '$username' AND anggota_password = '$pass'");
	$rows = mysql_num_rows($login);
	$result = mysql_fetch_array($login);

	if ($rows > 0){
  		session_start();
  		//session_register("ID");
  		//session_register("anggota");
		//session_register("password");

  		$_SESSION[ID]     	= $result[anggota_id];
  		$_SESSION[anggota]  = $result[anggota_nama];
		$_SESSION[password] = $result[anggota_password];
		
  		header('location:../?view=simpanan');
	}
	else{
  		header('location:../?view=relogin&msg=true');
	}
?>
