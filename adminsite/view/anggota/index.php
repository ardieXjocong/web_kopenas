<?php
$tt = "view";
require_once("../../library/func_common.php");
require_once("../../model/admin.php");
ini_set('display_errors','off');

global $AdminObj;
if(!$AdminObj->checkAdmin()) { $AdminObj->urlRedirect("../../login.php"); } else {
$title = "Data Koperasi";
$subtitle = "Data Anggota";
Admin_Header();
?>
	<section id="main" class="column">
    	<article class="module-menu width_full">
	    	<a id="dialogue" class="menu" href="addAnggota.php">Tambah Anggota</a>
	    	<!--<a id="dialogue" class="menu" href="cariAnggota.php">Cari Anggota</a>-->
	    	<!--<a class="menu" href="lapAnggota.php" target="_blank">Cetak Laporan</a>-->
		</article>
    	<!--<article class="module width_full">-->
        	<!--<header><h3>Semua Anggota</h3></header>-->
            <?php
			if($_GET['msg']=="sscsave"){
				echo "<h4 class='alert_success'>Data anggota berhasil disimpan.</h4>";
			}
			if($_GET['msg']=="sscdel"){
				echo "<h4 class='alert_success'>Data anggota berhasil dihapus.</h4>";
			}
			if($_GET['msg']=="errdel"){
				echo "<h4 class='alert_error'>Data anggota gagal dihapus. Terjadi kesalahan.</h4>";
			}
			if($_GET['msg']=="errdelp"){
				echo "<h4 class='alert_error'>Data anggota gagal dihapus. Anggota tersebut masih memiliki pinjaman yang belum lunas.</h4>";
			}
			if($_GET['msg']=="errdels"){
				echo "<h4 class='alert_error'>Data anggota gagal dihapus. Anggota tersebut masih memiliki simpanan.</h4>";
			}			
			?>
			<!--DINAS-->
            <div class="module_content">
            	<?php 
            	require_once("../../include/paging.php");
				$p      = new PagingUsers;
				$limit  = 10;
				$position = $p->findPosition($limit);
            	$sql = mysql_query("SELECT * FROM tbl_anggota ORDER BY anggota_id LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead>
					<tr>
						<th class="nowrap" colspan="9">DATA ANGGOTA</th>
					</tr>
					<tr>
						<th class="nowrap" width="10%">Kode Anggota</th>
						<th class="nowrap" width="15%">Nama</th>
						<th class="nowrap" width="20%">Alamat</th>
						<th class="nowrap" width="15%">Telepon</th>
						<th class="nowrap" width="15%">Kategori</th>
						<th class="nowrap" width="15%">Unit Kerja</th>
                        <th class="nowrap" width="10%" colspan="3">#</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="9">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_anggota"));
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
						echo "<tr class='row'><td align='center' colspan='9'><font color='red'><br>Tidak ada data anggota.<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row_d=mysql_fetch_array($sql)){

							if ($row_d['anggota_unit_kerja'] == "") {
								$unit_kerja = "<font color='red'>Bukan Pegawai</font>";
							} else {
								$unit_kerja = $row_d['anggota_unit_kerja'];
							}

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
							<td align='center'>$row_d[anggota_id]</td>
							<td>$row_d[anggota_nama]</td>
							<td>$row_d[anggota_alamat]</td>
							<td align='center'>$row_d[anggota_telepon]</td>
							<td align='center'>$tipe</td>
							<td align='center'>".$unit_kerja."</td>
							<td align='center'>
								<a id='dialogue' href='viewAnggota.php?id=$row_d[anggota_id]' title='lihat data anggota'>
									<img src='../../images/icon-48-search.png 'height='20'/></a>
							</td>
							<td align='center'>
								<a id='dialogue' href='addAnggota.php?do=update&id=$row_d[anggota_id]' title='ubah data anggota'>
									<img src='../../images/edit.png 'height='20'/></a>
							</td>
							<td align='center'>
								<a href='../../controller/doAnggota.php?mod=anggota&id=$row_d[anggota_id]' title='hapus data anggota' 
									onclick=\"return confirm('Anda yakin ingin menghapus data anggota dengan nama $row_d[anggota_nama]');\">
									<img src='../../images/delete.png' height='20'/></a>
							</td>
							</tr>"; 
							$no++;
						}
					} ?>
					</tbody>
				</table>
			</div>
        <!--</article>-->
		<div class="spacer"></div>
	</section>
<?php Admin_Footer(); } ?>