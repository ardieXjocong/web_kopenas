<?php
if (empty($_GET['view']) || $_GET['view']=='home'){
	$sql=mysql_fetch_array(mysql_query("SELECT * FROM tbl_konten WHERE konten_id='1'"));
	$deskripsi 	= nl2br($sql['konten_des']);
	echo "
	<h2>$sql[konten_judul]</h2>
    <div style='padding-left:7px;padding-right:7px;'><p>$deskripsi</p></div>";
}

elseif ($_GET['view']=='profil'){
	$sql=mysql_fetch_array(mysql_query("SELECT * FROM tbl_konten WHERE konten_id='2'"));
	$deskripsi 	= nl2br($sql['konten_des']);
	echo "
	<h2>$sql[konten_judul]</h2>
    <div style='padding-left:7px;padding-right:7px;'><p>$deskripsi</p></div>";
}

elseif ($_GET['view']=='konten'){
	$sql=mysql_fetch_array(mysql_query("SELECT * FROM tbl_konten WHERE konten_id='4'"));
	$deskripsi 	= nl2br($sql['konten_des']);
	echo "
	<h2>$sql[konten_judul]</h2>
    <div style='padding-left:7px;padding-right:7px;'><p>$deskripsi</p></div>";
}

elseif ($_GET['view']=='kontak'){
	$sql=mysql_fetch_array(mysql_query("SELECT * FROM tbl_konten WHERE konten_id='3'"));
	$deskripsi 	= nl2br($sql['konten_des']);
	echo "
	<h2>$sql[konten_judul]</h2>
    <div style='padding-left:7px;padding-right:7px;'><p>$deskripsi</p></div>";
}

elseif ($_GET['view']=='relogin'){
	include "content/login.php";
}

elseif ($_GET['view']=='cpass'){
	include "content/cpass.php";
}

elseif ($_GET['view']=='simpanan'){
	include "content/simpanan.php";
}

elseif ($_GET['view']=='pinjaman'){
	include "content/pinjaman.php";
}
?>