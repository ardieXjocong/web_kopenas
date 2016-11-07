<?php
global $title;
global $subtitle;
global $first_bcm;
function show_time($a) 
{
	$t=date("d M Y, H:i:s",$a);
	echo $t;
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Halaman Administrasi</title>
	
	<link rel="stylesheet" href="../../css/layout.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../themes/base/jquery.ui.all.css">
    <link rel="stylesheet" href="../../css/fancybox.css" type="text/css" />
    <link rel="shortcut icon" href="../../images/admin.png" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="../../js/jquery/jquery-1.5.2.min.js" type="text/javascript"></script>
	<!--<script src="../../js/jquery-1.11.1.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="../../js/jquery-ui-1.8.12.custom.min.js"></script>
    <script src="../../ui/jquery.ui.core.js"></script>
	<script src="../../ui/jquery.ui.widget.js"></script>
	<script src="../../ui/jquery.ui.datepicker.js"></script>
    <script src="../../ui/i18n/ui.datepicker-id.js"></script>
	<script src="../../js/hideshow.js" type="text/javascript"></script>
	
	<script src="../../js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
	</script>
	<script type="text/javascript"> 
		$(document).ready(function(){
			$(".pane-list .link").click(function(){
    			window.location=$(this).find("a").attr("href");return false;
			});
		});
	</script>
	<script src="../../js/jquery.fancybox.js" type="text/javascript"></script>
	<script src="../../js/jquery.mousewheel.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("a#dialogue").fancybox({ });
		});
	</script>

</head>

<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"></h1>
			<h2 class="section_title"><?=$title?></h2><div class="btn_view_site"><a href="../../../" target="_blank">lihat situs</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><?=$_SESSION['admin_nama']?> (<?=show_time(time())?>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="./"><?=$title?></a> 
			<div class="breadcrumb_divider"></div> <?=$first_bcm?> <a class="current"><?=$subtitle?></a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<?php if ($_SESSION['admin_privileges'] == "A") { ?>
			<p><strong>ADMINISTRASI KOPERASI </strong></p>
		<h2 class="menu_header">BERANDA</h2>
		<ul class="pane-list <?php if ($title != "Beranda" ) echo "toggle"; ?>" >
			<li class="icn_photo link"><a href="../../view/beranda">Halaman Utama</a></li>
			<li class="icn_video link"><a href="../../view/konten">Konten Website</a></li>
		</ul>
        <h2 class="menu_header">DATA KOPERASI</h2>
		<ul class="pane-list <?php if ($title != "Data Koperasi" ) echo "toggle"; ?>" >
			<li class="icn_profile link"><a href="../../view/anggota">Data Anggota</a></li>
            <li class="icn_folder link"><a href="../../view/simpanan">Data Simpanan</a></li>
            <li class="icn_folder link"><a href="../../view/pinjaman">Data Pinjaman</a></li>
            <li class="icn_folder link"><a href="../../view/pengajuan">Data Pengajuan Pinjaman</a></li>
            <li class="icn_new_article link"><a href="../../view/penarikan">Penarikan Simpanan</a></li>
			<li class="icn_new_article link"><a href="../../view/angsuran">Angsuran Pinjaman</a></li>
			<li class="icn_folder link"><a href="../../view/laporan">Laporan</a></li>
		</ul>
        <h2 class="menu_header">DATA PENGGUNA</h2>
		<ul class="pane-list">
			<li class="icn_view_users link"><a href="../../view/pengguna">Pengguna</a></li>
			<a id="dialogue" href="../../view/pengguna/cpass.php">
				<li class="icn_security"><img src="../../images/icn_security.png" style="float:left; margin-top:5px;"> &nbsp;&nbsp; Ubah Password</li>
			</a>
            <li class="icn_jump_back link"><a href="../../logout.php">Logout</a></li>
		</ul>
		<?php } ?>
		<br/><hr/>
	</aside><!-- end of sidebar -->