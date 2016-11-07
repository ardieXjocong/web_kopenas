<?php
session_start();
error_reporting(0);
ini_set('display_errors','off');
$tt = "view";
require_once("../../library/func_common.php");
require_once("../../model/admin.php");

global $AdminObj;
if(!$AdminObj->checkAdmin()) { $AdminObj->urlRedirect("../../login.php"); } else { 
$title = "Beranda";
$subtitle = "Halaman Utama";
$date = date("d M Y", time());
$today = date("Y-m-d");
$yesterday = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
$min = date('Y-m-d', mktime(0,0,0, date('m'), 0, date('Y')));
$max = date('Y-m-d', mktime(0,0,0, date('m') + 1, 1, date('Y')));
Admin_Header();

	$jml_anggota = mysql_result(mysql_query("SELECT COUNT(anggota_id) FROM tbl_anggota"), 0);
	$pns = mysql_result(mysql_query("SELECT COUNT(anggota_id) FROM tbl_anggota WHERE anggota_tipe = '1'"), 0);
	$istri_pegawai = mysql_result(mysql_query("SELECT COUNT(anggota_id) FROM tbl_anggota WHERE anggota_tipe = '2'"), 0);
	$rekanan = mysql_result(mysql_query("SELECT COUNT(anggota_id) FROM tbl_anggota WHERE anggota_tipe = '3'"), 0);
	$pensiunan = mysql_result(mysql_query("SELECT COUNT(anggota_id) FROM tbl_anggota WHERE anggota_tipe = '4'"), 0);
	$jml_pengajuan = mysql_result(mysql_query("SELECT COUNT(pinjaman_id) FROM tbl_pinjaman WHERE pinjaman_ind = 'T'"), 0);
	$jml_pinjaman = mysql_result(mysql_query("SELECT COUNT(pinjaman_id) FROM tbl_pinjaman WHERE pinjaman_ind = 'N'"), 0);
	
?>
	<section id="main" class="column">
		
		<?php if (isset($_GET['first'])) { ?>
			<h4 class="alert_info">Selamat Datang !! Halaman Administrator untuk mengelola data koperasi.</h4>
		<?php } ?>
		<article class="module width_full">
			<header><h3>Statistik Data</h3></header>
			<div class="module_content">
				<article class="stats_graph">
	                <?php
					
					?>
                    <center>
                	<table class="adminlist" width="100%">
                    <thead>	
                        <tr>
                        	<th align="center" colspan="5">
                            STATISTIK KOPERASI
                            </th>
						</tr>
					</thead>
                    <tbody>
                        <tr>
                        	<td width="40%" align="right" class="blue">Jumlah Anggota</td>
                            <td width="60%" colspan="4"> : <?php echo $jml_anggota ?></td>
						</tr>
                        <tr>
                        	<td align="right">&nbsp;</td>
                            <td width="15%" class="blue">PNS</td>
                            <td width="15%"> : <?php echo $pns ?></td>
                            <td width="15%" class="blue">Istri Pegawai</td>
                            <td width="15%"> : <?php echo $istri_pegawai ?></td>
						</tr>
						<tr>
                        	<td align="right">&nbsp;</td>
                            <td width="15%" class="blue">Rekanan</td>
                            <td width="15%"> : <?php echo $rekanan ?></td>
                            <td width="15%" class="blue">Pensiunan</td>
                            <td width="15%"> : <?php echo $pensiunan ?></td>
						</tr>
						<tr>
                        	<td width="40%" align="right" class="blue">Jumlah Pengajuan Pinjaman</td>
                            <td width="60%" colspan="4"> : <?php echo $jml_pengajuan ?></td>
						</tr>
						<tr>
                        	<td width="40%" align="right" class="blue">Jumlah Pinjaman Belum Lunas</td>
                            <td width="60%" colspan="4"> : <?php echo $jml_pinjaman ?></td>
						</tr>
					</tbody>
                    <tfoot>
                    	<tr><td colspan="5">&nbsp;</td></tr>
					</tfoot>
					</table>
                    </center>
				</article>
                <article class="stats_overview">
                	<table class="adminlist" width="100%">
                    <thead>	
                        <tr>
                        	<th align="center" colspan="3">STATISTIK PENGUNJUNG</th>
						</tr>
					</thead>
                    <tbody>
                        <tr>
                        	<td width="100%">
                            	<?php
								$view_t = mysql_result(mysql_query("SELECT COUNT(statistic_ip) FROM tbl_statistic WHERE statistic_date='$today'"), 0);
								$view_y = mysql_result(mysql_query("SELECT COUNT(statistic_ip) FROM tbl_statistic WHERE statistic_date='$yesterday'"), 0);
								$hit_t = mysql_fetch_assoc(mysql_query("SELECT SUM(statistic_hits) as 'today' FROM tbl_statistic 
																				   WHERE statistic_date='$today' GROUP BY statistic_date"));
								$hit_y = mysql_fetch_assoc(mysql_query("SELECT SUM(statistic_hits) as 'yesterday' FROM tbl_statistic 
																				   WHERE statistic_date='$yesterday' GROUP BY statistic_date"));
								?>
								<div class="overview_today">
									<p class="overview_day">Today</p>
									<p class="overview_count"><?php echo $hit_t[today] ?></p>
									<p class="overview_type">Hits</p>
									<p class="overview_count"><?php echo $view_t ?></p>
									<p class="overview_type">Views</p>
								</div>
								<div class="overview_previous">
									<p class="overview_day">Yesterday</p>
									<p class="overview_count"><?php echo $hit_y[yesterday] ?></p>
									<p class="overview_type">Hits</p>
									<p class="overview_count"><?php echo $view_y ?></p>
									<p class="overview_type">Views</p>
								</div>
                            </td>
						</tr>
					</tbody>
                    <tfoot>
                    	<tr><td colspan="3">&nbsp;</td></tr>
					</tfoot>
					</table>
				</article>
				<div class="clear"></div>
			</div>
		</article><!-- end of stats article -->
		
		<div class="spacer"></div>
	</section>
<?php Admin_Footer(); } ?>