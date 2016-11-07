<?php
// session_start();

if(!isset($_SESSION))
{
	session_start();
}


require_once("setting.inc.php");

class DataBase {
  function conn() {
  	mysql_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD) or die("Connection failed ...");
  	mysql_select_db(DATABASE_TABLE) or die("Database can't be opened ...");
  }
  
  function urlRedirect($str) { ?><script type="text/javascript">window.location.href ='<?=$str?>';</script><?php } 
}

$db = new DataBase();
?>