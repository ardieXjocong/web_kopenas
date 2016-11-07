<?php
require_once("setting.inc.php");

mysql_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD) or die("Connection failed ...");
mysql_select_db(DATABASE_TABLE) or die("Database can't be opened ...");
?>