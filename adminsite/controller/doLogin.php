<?php
	$tt = "controller";
	require_once("../model/admin.php");
	global $AdminObj;
	
	if (empty($_POST["username"]) || empty($_POST["password"]))
		die(msg(0,"Login error !!")); // Username dan Password harus diisi.
		
	if (empty($_POST['privileges']))
		die(msg(0,"Login Sebagai harus diisi."));
	
	$result	= $AdminObj -> isValidLogin($_POST["username"], $_POST["password"], $_POST["privileges"]);

	if ($result) {
		echo msg(1,"view/beranda/?first=welcome");
	} else {
		echo msg(0,"Username atau password Anda tidak sesuai.");
	}

	function msg($status,$txt) {
		return '{"status":'.$status.',"txt":"'.$txt.'"}';
	}
?>