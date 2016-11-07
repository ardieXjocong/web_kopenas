<?php
/*
 * HISTORY VERSIONING
 * PROGRAMMER
 * INITIAL              VERSION         DATE(YYYY-MM-DD)        CHANGE LOG
 * ========================================================================================================
 * -ARDIANSYAH           -1.0            -2016-04-08             - Perbaiki Bulan & Tahun Perioder Detail Simpanan
*/
?>
<?php
$tt = "view";
require_once("../../library/func_common.php");
require_once("../../model/admin.php");
ini_set('display_errors','off');

global $AdminObj;
if(!$AdminObj->checkAdmin()) { $AdminObj->urlRedirect("../../login.php"); } else {
$title = "Data Koperasi";
$subtitle = "Data Simpanan";
Admin_Header();
?>
	<section id="main" class="column">
    	<article class="module-menu width_full">
	    	<a id="dialogue" class="menu" href="addSimpanan.php">Tambah Simpanan</a>
	    	<!--<a id="dialogue" class="menu" href="laporan/lapSimpanan.php">Laporan Simpanan</a>/-->
		</article>
    	<!--<article class="module width_full">-->
        	<!--<header><h3>Semua Simpanan</h3></header>-->
            <?php
			if($_GET['msg']=="sscsave"){
				echo "<h4 class='alert_success'>Data simpanan berhasil disimpan.</h4>";
			}
			if($_GET['msg']=="sscdel"){
				echo "<h4 class='alert_success'>Data simpanan berhasil dihapus.</h4>";
			}
			if($_GET['msg']=="errdel"){
				echo "<h4 class='alert_error'>Data simpanan gagal dihapus. Terjadi kesalahan.</h4>";
			}
			?>
			<!--DINAS-->
			
		<?php if (!empty($_GET['id']) && $_GET['detil'] == "show") { ?>
			<div class="module_content">
				<?php
				$sql1 = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_simpanan s ON a.anggota_id = s.anggota_id WHERE s.simpanan_id= '".$_GET['id']."'");
				?>
				<table class="adminlist" width="100%">
					<thead><tr>
						<th class="nowrap" colspan="9">DATA SIMPANAN</th>
					</tr>
					<tr>
						<th class="nowrap" width="10%">Kode Simpanan</th>
						<th class="nowrap" width="10%">Kode Anggota</th>
						<th class="nowrap" width="18%">Nama</th>
						<th class="nowrap" width="10%">Kategori</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="10%">Wajib</th>
						<th class="nowrap" width="10%">Sukarela</th>
						<th class="nowrap" width="10%">Hari Raya</th>
						<th class="nowrap" width="10%">Total</th>
					</tr></thead>
					<tbody>
                    <?php
						$no=1;
						require_once("../../include/fungsi_rupiah.php");
						
						while($row_d1=mysql_fetch_array($sql1)){
							if ($row_d1['anggota_tipe'] == "1") {
								$tipe = "PNS";
							} else if ($row_d1['anggota_tipe'] == "2") {
								$tipe = "Istri Pegawai";
							} else if ($row_d1['anggota_tipe'] == "3") {
								$tipe = "Rekanan";
							} else if ($row_d1['anggota_tipe'] == "4") {
								$tipe = "Pensiunan";
							} else {
								$tipe = "";
							}
							echo "
       		                <tr class='row'>
							<td align='center'>$row_d1[simpanan_id]</td>
							<td align='center'>$row_d1[anggota_id]</td>
							<td>$row_d1[anggota_nama]</td>
							<td align='center'>$tipe</td>
							<td align='right'>".format_rupiah($row_d1['simpanan_pokok'])."</td>
							<td align='right'>".format_rupiah($row_d1['simpanan_wajib'])."</td>
							<td align='right'>".format_rupiah($row_d1['simpanan_sukarela'])."</td>
							<td align='right'>".format_rupiah($row_d1['simpanan_hari_raya'])."</td>
							<td align='right'>".format_rupiah($row_d1['simpanan_total'])."</td>
							</tr>"; $no++;
						}
					?>
					</tbody>
				</table>
				<br/>
            	<?php 
            	require_once("../../include/paging.php");
				$p      = new PagingUsers;
				$limit  = 12;
				$position = $p->findPosition($limit);
            	$sql = mysql_query("SELECT * FROM tbl_simpanan_detil WHERE simpanan_id = '".$_GET['id']."' ORDER BY simpanan_detil_thn_periode DESC, simpanan_detil_bln_periode DESC, simpanan_detil_id DESC LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead>
					<tr>
						<th class="nowrap" width="10%">Tanggal</th>
						<th class="nowrap" width="18%">Bulan</th>
						<th class="nowrap" width="10%">Tahun</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="10%">Wajib</th>
						<th class="nowrap" width="10%">Sukarela</th>
						<th class="nowrap" width="10%">Hari Raya</th>
						<th class="nowrap" width="10%">Total</th>
                        <th class="nowrap" width="7%">#</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="9">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_simpanan_detil WHERE simpanan_id = '".$_GET['id']."'"));
											$allPage = $p->sumPage($allData, $limit);
  											$linkPage = $p->navPageDetil($_GET['id'], $_GET['usr_page'], $allPage);

											echo "Hal: $linkPage";
										?>
										&nbsp; (Total : <?php echo $allData ?>)
									</div>
								</div>
							</div>
						</td>
					</tr></tfoot>
					<tbody>
                    <?php
					if($num==0){
						echo "<tr class='row'><td align='center' colspan='9'><font color='red'><br>Tidak ada data simpanan.<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row_d=mysql_fetch_array($sql)){
							// V 1.0 [S]
							$date = explode('-',$row_d['simpanan_detil_tgl']);
							$month = date('F', mktime(0,0,0,$date[1],$date[2],$date[0]));
							$year  = date('Y', mktime(0,0,0,$date[1],$date[2],$date[0]));
							// <td >".date('F',mktime(0,0,0,$row_d['simpanan_detil_bln_periode']+1,0,0))."</td> // line 152
							// <td align='center'>$row_d[simpanan_detil_thn_periode]</td> // line 153
							// V 1.0 [E]
							echo "
       		                <tr class='row'>
							<td align='center' width='14%'>$row_d[simpanan_detil_tgl]</td>
							<td align='center'>".$month."</td>
							<td align='center'>".$year."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_pokok'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_wajib'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_sukarela'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_hari_raya'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_total'])."</td>
							<td align='center'>
								<a href='../../controller/doSimpanan.php?mod=simpanan&id=$row_d[simpanan_detil_id]' title='hapus data simpanan' 
									onclick=\"return confirm('Anda yakin ingin menghapus data simpanan ini?');\">
									<img src='../../images/delete.png' height='20'/></a>
								<a target='_blank' href='../laporan/buktiSimpanan.php?id=$row_d[simpanan_detil_id]' title='cetak bukti setoran simpanan'>
									<img src='../../../images/icon-48-print.png' height='20'/></a>								
							</td>
							</tr>"; $no++;
						}
					} ?>
					</tbody>
				</table>
			</div>
		<?php } else { ?>
			
            <div class="module_content">
            	<?php 
            	require_once("../../include/fungsi_rupiah.php");
            	require_once("../../include/paging.php");
				$p      = new PagingUsers;
				$limit  = 10;
				$position = $p->findPosition($limit);
            	$sql = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_simpanan s ON a.anggota_id = s.anggota_id ORDER BY a.anggota_id LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead><tr>
						<th class="nowrap" colspan="10">DATA SIMPANAN</th>
					</tr>
					<tr>
						<th class="nowrap" width="10%">Kode Simpanan</th>
						<th class="nowrap" width="10%">Kode Anggota</th>
						<th class="nowrap" width="18%">Nama</th>
						<th class="nowrap" width="10%">Kategori</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="10%">Wajib</th>
						<th class="nowrap" width="10%">Sukarela</th>
						<th class="nowrap" width="10%">Hari Raya</th>
						<th class="nowrap" width="10%">Total</th>
                        <th class="nowrap" width="7%">#</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="10">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_simpanan s ON a.anggota_id = s.anggota_id"));
											$allPage = $p->sumPage($allData, $limit);
  											$linkPage = $p->navPage($_GET['usr_page'], $allPage);

											echo "Hal: $linkPage";
										?>
										&nbsp; (Total : <?php echo $allData ?>)
									</div>
								</div>
							</div>
						</td>
					</tr></tfoot>
					<tbody>
                    <?php
					if($num==0){
						echo "<tr class='row'><td align='center' colspan='10'><font color='red'><br>Tidak ada data simpanan.<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row_d=mysql_fetch_array($sql)){
							if ($row_d['anggota_tipe'] == "1") {
								$tipe = "PNS";
							} else if ($row_d['anggota_tipe'] == "2") {
								$tipe = "Istri Pegawai";
							} else if ($row_d['anggota_tipe'] == "3") {
								$tipe = "Rekanan";
							} else if ($row_d['anggota_tipe'] == "4") {
								$tipe = "Pensiunan";
							} else {
								$tipe = "";
							}
							echo "
       		                <tr class='row'>
							<td align='center'>$row_d[simpanan_id]</td>
							<td align='center'>$row_d[anggota_id]</td>
							<td>$row_d[anggota_nama]</td>
							<td align='center'>$tipe</td>
							<td align='right'>".format_rupiah($row_d['simpanan_pokok'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_wajib'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_sukarela'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_hari_raya'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_total'])."</td>
							<td align='center'>
								<a href='?detil=show&id=$row_d[simpanan_id]' title='lihat data simpanan'>
									<img src='../../images/icon-48-search.png 'height='18'/></a>
							</td>
							</tr>"; $no++;
						}
					} ?>
					</tbody>
				</table>
			</div>
		<?php } ?>
        <!--</article>-->
		<div class="spacer"></div>
	</section>
<?php Admin_Footer(); } ?>