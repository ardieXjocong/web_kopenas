<?php
$tt = "view";
require_once("../../library/func_common.php");
require_once("../../model/admin.php");
ini_set('display_errors','off');

global $AdminObj;
if(!$AdminObj->checkAdmin()) { $AdminObj->urlRedirect("../../login.php"); } else {
$title = "Data Pengguna";
$subtitle = "Pengguna";
Admin_Header();
?>
	<section id="main" class="column">
    	<article class="module-menu width_full">
	    	<a id="dialogue" class="menu" href="addUser.php">Tambah Pengguna</a>
		</article>
    	<!--<article class="module width_full">-->
        	<!--<header><h3>Semua Pengguna</h3></header>-->
            <?php
			if($_GET['msg']=="sscsave"){
				echo "<h4 class='alert_success'>Data pengguna berhasil disimpan.</h4>";
			}
			if($_GET['msg']=="sscdel"){
				echo "<h4 class='alert_success'>Data pengguna berhasil dihapus.</h4>";
			}
			if($_GET['msg']=="errdel"){
				echo "<h4 class='alert_error'>Data pengguna gagal dihapus. Terjadi kesalahan.</h4>";
			}
			?>
			<!--DINAS-->
            <div class="module_content">
            	<?php 
            	require_once("../../include/paging.php");
				$p      = new PagingUsers;
				$limit  = 10;
				$position = $p->findPosition($limit);
            	$sql = mysql_query("SELECT * FROM tbl_admin ORDER BY admin_nama LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead><tr>
						<th class="nowrap" colspan="6">DATA PENGGUNA</th>
					</tr>
					<tr>
						<th class="nowrap" width="10%">ID</th>
						<th class="nowrap" width="30%">Nama</th>
						<th class="nowrap" width="30%">Username</th>
						<th class="nowrap" width="15%">Privileges</th>
                        <th class="nowrap" width="15%" colspan="2">Aksi</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="6">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_admin"));
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
						echo "<tr class='row'><td align='center' colspan='6'><font color='red'><br>Tidak ada data pengguna.<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row_d=mysql_fetch_array($sql)){
							echo "
       		                <tr class='row'>
							<td align='center'>$row_d[admin_id]</td>
							<td>$row_d[admin_nama]</td>
							<td>$row_d[admin_username]</td>
							<td align='center'>$row_d[admin_privileges]</td>
							<td align='center'>
								<a id='dialogue' href='addUser.php?do=update&id=$row_d[admin_id]' title='ubah data pengguna'>
									<img src='../../images/edit.png 'height='20'/></a>
							</td>
							<td align='center'>
								<a href='../../controller/doUser.php?mod=user&id=$row_d[admin_id]' title='hapus data pengguna' 
									onclick=\"return confirm('Anda yakin ingin menghapus data pengguna ini? $row_d[admin_nama]');\">
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