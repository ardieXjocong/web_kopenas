<?php
$tt = "view";
require_once("../../library/func_common.php");
require_once("../../model/admin.php");

global $AdminObj;
if(!$AdminObj->checkAdmin()) { $AdminObj->urlRedirect("../../login.php"); } else {
$title = "Data Koperasi";
$subtitle = "Laporan";
Admin_Header();
?>
	<section id="main" class="column">
    	<article class="module-menu width_full">
	    	<a id="dialogue" class="menu" href="lapSimpanan.php">Laporan Simpanan</a>
	    	<!--
                <a class="menu" href="lapSimpananExcel.php" target="_blank">Export to Excel</a>
	    	<a class="menu" href="LaporanSimpananAnggota.php" target="_blank">Export to Excel Fix</a>
                -->
	    	<!--
	    	<a id="dialogue" class="menu" href="lapPenarikan.php">Laporan Penarikan</a>
	    	<a id="dialogue" class="menu" href="lapPinjaman.php">Laporan Pinjaman</a>
	    	<a id="dialogue" class="menu" href="lapAngsuran.php">Laporan Angsuran</a>
	    	-->
	    	<!--<a id="dialogue" class="menu" href="lapSHU.php">Laporan SHU</a> /-->
		</article>
		
		<div class="spacer"></div>
	</section>
<?php Admin_Footer(); } ?>