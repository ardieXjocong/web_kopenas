<?php
$tt = "view";
require_once("../../library/func_common.php");
require_once("../../model/admin.php");
ini_set('display_errors','off');

global $AdminObj;
if(!$AdminObj->checkAdmin()) { $AdminObj->urlRedirect("../../login.php"); } else {
$title = "Data Koperasi";
$subtitle = "Data Pinjaman";
Admin_Header();
?>
	<section id="main" class="column">
    	<!--<article class="module-menu width_full">
	    	<a id="dialogue" class="menu" href="addPinjaman.php">Tambah Pinjaman</a>
		</article>-->
    	<!--<article class="module width_full">-->
        	<!--<header><h3>Semua Pinjaman</h3></header>-->
            <?php
			if($_GET['msg']=="sscsave"){
				echo "<h4 class='alert_success'>Data pinjaman berhasil disimpan.</h4>";
			}
			if($_GET['msg']=="sscdel"){
				echo "<h4 class='alert_success'>Data pinjaman berhasil dihapus.</h4>";
			}
			if($_GET['msg']=="errdel"){
				echo "<h4 class='alert_error'>Data pinjaman gagal dihapus. Terjadi kesalahan.</h4>";
			}
			?>
			<!--DINAS-->
			
            <div class="module_content">
            	<?php 
            	require_once("../../include/fungsi_rupiah.php");
            	require_once("../../include/paging.php");
				$p      = new PagingUsers;
				$limit  = 10;
				$position = $p->findPosition($limit);
            	$sql = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_pinjaman s ON a.anggota_id = s.anggota_id WHERE s.pinjaman_ind = 'T' ORDER BY s.pinjaman_id LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead><tr>
						<th class="nowrap" colspan="11">DATA PENGAJUAN PINJAMAN</th>
					</tr>
					<tr>
						<th class="nowrap" width="10%">Kode Pinjaman</th>
						<th class="nowrap" width="10%">Kode Anggota</th>
						<th class="nowrap" width="15%">Nama</th>
						<th class="nowrap" width="10%">Kategori</th>
						<th class="nowrap" width="15%">Unit Kerja</th>
						<th class="nowrap" width="10%">Pinjaman</th>
						<th class="nowrap" width="10%">Angsuran</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="6%">Jasa</th>
                        <th class="nowrap" width="4%" colspan="2">#</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="11">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_pinjaman s ON a.anggota_id = s.anggota_id WHERE s.pinjaman_ind = 'T'"));
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
						echo "<tr class='row'><td align='center' colspan='11'><font color='red'><br>Tidak ada data pengajuan pinjaman.<br><br></font></td></tr>";
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
							<td align='center'>$row_d[pinjaman_id] ($row_d[pinjaman_ind])</td>
							<td align='center'>$row_d[anggota_id]</td>
							<td>$row_d[anggota_nama]</td>
							<td align='center'>$tipe</td>
							<td align='center'>$row_d[anggota_unit_kerja]</td>
							<td align='right'>".format_rupiah($row_d['pinjaman'])."</td>
							<td align='center'>$row_d[pinjaman_angsuran]</td>
							<td align='right'>".format_rupiah($row_d['pinjaman_pokok'])."</td>
							<td align='right'>".format_rupiah($row_d['pinjaman_jasa'])."</td>
							<td align='center'>
								<a id='dialogue' href='addPinjaman.php?do=update&id=$row_d[pinjaman_id]' title='lihat/ubah/setujui data pinjaman'>
									<img src='../../images/ssc.png 'height='20'/></a>
							</td>
							<td align='center'>
								<a href='../../controller/doPinjaman.php?mod=pengajuan&id=$row_d[pinjaman_id]' title='hapus data pinjaman' 
									onclick=\"return confirm('Anda yakin ingin menghapus data pinjaman ini? $row_d[pinjaman_id]');\">
									<img src='../../images/delete.png' height='20'/></a>
							</td>
							</tr>"; $no++;
						}
					} ?>
					</tbody>
				</table>
			</div>
        <!--</article>-->
		<div class="spacer"></div>
	</section>
<?php Admin_Footer(); } ?>