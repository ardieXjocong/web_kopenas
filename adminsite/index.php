<?php
$tt = "index";
require_once("model/admin.php");
//ini_set('display_errors','off');
global $AdminObj;

if($AdminObj->checkAdmin()) { 
	$AdminObj->urlRedirect("view/beranda"); 
} else { 
	$AdminObj->urlRedirect("login.php");
}
?>