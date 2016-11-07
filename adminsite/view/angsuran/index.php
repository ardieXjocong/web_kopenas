<?php
/*
 * HISTORY VERSIONING
 * PROGRAMMER
 * INITIAL              VERSION         DATE(YYYY-MM-DD)        CHANGE LOG
 * ========================================================================================================
 * -ARDIANSYAH           -1.0            -2016-04-08             - Perbaiki Bulan & Tahun Periode Detail Angsuran
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
$subtitle = "Angsuran Pinjaman";
Admin_Header();
?>
	<section id="main" class="column">
    	<article class="module-menu width_full">
	    	<a id="dialogue" class="menu" href="addAngsuran.php">Angsuran Pinjaman</a>
		</article>
    	<!--<article class="module width_full">-->
        	<!--<header><h3>Semua Angsuran Pinjaman</h3></header>-->
            <?php
			if($_GET['msg']=="sscsave"){
				echo "<h4 class='alert_success'>Data angsuran pinjaman berhasil disimpan.</h4>";
			}
			if($_GET['msg']=="sscdel"){
				echo "<h4 class='alert_success'>Data angsuran pinjaman berhasil dihapus.</h4>";
			}
			if($_GET['msg']=="errdel"){
				echo "<h4 class='alert_error'>Data angsuran pinjaman gagal dihapus. Terjadi kesalahan.</h4>";
			}
			?>
			<!--DINAS-->
			
		<?php if (!empty($_GET['id']) && $_GET['detil'] == "show") { ?>
			<div class="module_content">
				<?php
				$sql1 = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_pinjaman s ON a.anggota_id = s.anggota_id WHERE s.pinjaman_id= '".$_GET['id']."'");
				?>
				<table class="adminlist" width="100%">
					<thead><tr>
						<th class="nowrap" colspan="10">DATA PINJAMAN</th>
					</tr>
					<tr>
						<th class="nowrap" width="10%">Kode Pinjaman</th>
						<th class="nowrap" width="10%">Kode Anggota</th>
						<th class="nowrap" width="18%">Nama</th>
						<th class="nowrap" width="10%">Angsuran</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="10%">Jasa</th>
						<th class="nowrap" width="10%">Total/Bulan</th>
						<th class="nowrap" width="10%">Masuk</th>
						<th class="nowrap" width="10%">Sisa Angsuran</th>
						<th class="nowrap" width="5%">#</th>
					</tr></thead>
					<tbody>
                    <?php
						$no=1;
						require_once("../../include/fungsi_rupiah.php");
						
						while($row_d1=mysql_fetch_array($sql1)){
							echo "
       		                <tr class='row'>
							<td align='center'>$row_d1[pinjaman_id] ($row_d1[pinjaman_ind])</td>
							<td align='center'>$row_d1[anggota_id]</td>
							<td>$row_d1[anggota_nama]</td>
							<td align='center'>$row_d1[pinjaman_angsuran]</td>
							<td align='right'>".format_rupiah($row_d1[pinjaman_pokok])."</td>
							<td align='right'>".format_rupiah($row_d1[pinjaman_jasa])."</td>
							<td align='right'>".format_rupiah($row_d1[pinjaman_total])."</td>
							<td align='right'>".format_rupiah($row_d1[pinjaman_angsuran_masuk])."</td>
							<td align='right'>".format_rupiah($row_d1[pinjaman_angsuran_sisa])."</td>
							<td align='center'>
								<a target='_blank' href='../laporan/lapPinjaman.php?id=$row_d1[pinjaman_id]' title='cetak data pinjaman'>
									<img src='../../../images/icon-48-print.png' height='20'/></a>
							</td>
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
            	$sql = mysql_query("SELECT * FROM tbl_angsuran WHERE pinjaman_id = '".$_GET['id']."' ORDER BY angsuran_thn_periode DESC, angsuran_bln_periode DESC, angsuran_id DESC LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead>
					<tr>
						<th class="nowrap" width="10%">Kode</th>
						<th class="nowrap" width="10%">Tanggal</th>
						<th class="nowrap" width="18%">Bulan</th>
						<th class="nowrap" width="10%">Tahun</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="10%">Jasa</th>
						<th class="nowrap" width="10%">Total</th>
						<th class="nowrap" width="10%">Angsuran Ke-</th>
						<th class="nowrap" width="7%">#</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="9">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_angsuran WHERE pinjaman_id = '".$_GET['id']."'"));
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
						echo "<tr class='row'><td align='center' colspan='9'><font color='red'><br>Tidak ada data pinjaman.<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row_d=mysql_fetch_array($sql)){
							// V 1.0 [S]
							$date = explode('-',$row_d['angsuran_tgl']);
							$month = date('F', mktime(0,0,0,$date[1],$date[2],$date[0]));
							$year  = date('Y', mktime(0,0,0,$date[1],$date[2],$date[0]));
							// <td >".date('F',mktime(0,0,0,$row_d[angsuran_bln_periode]+1,0,0))."</td>
							// <td align='center'>$row_d[angsuran_thn_periode]</td>
							// V 1.0 [E]
							echo "
       		                <tr class='row'>
       		                <td align='center'>$row_d[angsuran_id]</td>
							<td align='center'>$row_d[angsuran_tgl]</td>
							<td >".$month."</td>
							<td align='center'>".$year."</td>
							<td align='right'>".format_rupiah($row_d[angsuran])."</td>
							<td align='right'>".format_rupiah($row_d[angsuran_jasa])."</td>
							<td align='right'>".format_rupiah($row_d[angsuran_total])."</td>
							<td align='right'>".format_rupiah($row_d[angsuran_ke])."</td>
							<td align='center'>
								<a href='../../controller/doAngsuran.php?mod=angsuran&id=$row_d[angsuran_id]' title='hapus data angsuran pinjaman' 
									onclick=\"return confirm('Anda yakin ingin menghapus data angsuran pinjaman ini? $row_d[angsuran_id]');\">
									<img src='../../images/delete.png' height='20'/></a>
								<a target='_blank' href='../laporan/lapAngsuran.php?id=$row_d[angsuran_id]' title='cetak data angsuran'>
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
            	$sql = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_pinjaman s ON a.anggota_id = s.anggota_id ORDER BY s.pinjaman_id LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead>
					<tr>
						<th class="nowrap" colspan="10">DATA PINJAMAN</th>
					</tr>
					<tr>
						<th class="nowrap" width="10%">Kode Pinjaman</th>
						<th class="nowrap" width="10%">Kode Anggota</th>
						<th class="nowrap" width="13%">Nama</th>
						<th class="nowrap" width="10%">Pinjaman</th>
						<th class="nowrap" width="10%">Angsuran</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="10%">Jasa</th>
						<th class="nowrap" width="10%">Masuk</th>
						<th class="nowrap" width="10%">Sisa Angsuran</th>
                        <th class="nowrap" width="10%">#</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="10">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_pinjaman s ON a.anggota_id = s.anggota_id"));
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
						echo "<tr class='row'><td align='center' colspan='10'><font color='red'><br>Tidak ada data pinjaman.<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row_d=mysql_fetch_array($sql)){
							echo "
       		                <tr class='row'>
							<td align='center'>$row_d[pinjaman_id] ($row_d[pinjaman_ind])</td>
							<td align='center'>$row_d[anggota_id]</td>
							<td>$row_d[anggota_nama]</td>
							<td align='right'>".format_rupiah($row_d[pinjaman])."</td>
							<td align='center'>$row_d[pinjaman_angsuran]</td>
							<td align='right'>".format_rupiah($row_d[pinjaman_pokok])."</td>
							<td align='right'>".format_rupiah($row_d[pinjaman_jasa])."</td>
							<td align='right'>".format_rupiah($row_d[pinjaman_angsuran_masuk])."</td>
							<td align='right'>".format_rupiah($row_d[pinjaman_angsuran_sisa])."</td>
							<td align='center'>
								<a href='?detil=show&id=$row_d[pinjaman_id]' title='lihat data pinjaman'>
									<img src='../../images/icon-48-search.png 'height='18'/></a>
								<a target='_blank' href='../laporan/lapPinjaman.php?id=$row_d[pinjaman_id]' title='cetak data pinjaman'>
									<img src='../../../images/icon-48-print.png' height='20'/></a>
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