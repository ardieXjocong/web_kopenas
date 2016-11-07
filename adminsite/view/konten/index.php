<?php
$tt = "view";
require_once("../../library/func_common.php");
require_once("../../model/admin.php");
ini_set('display_errors','off');

global $AdminObj;
if(!$AdminObj->checkAdmin()) { $AdminObj->urlRedirect("../../login.php"); } else {
$title = "Beranda";
$subtitle = "Konten Website";
Admin_Header();
?>
	<section id="main" class="column">
    	<!--<article class="module-menu width_full">
	    	<a id="dialogue" class="menu" href="editContent.php">Insert Web Content</a>
		</article>-->
    	<article class="module width_full">
        	<header><h3>Semua Konten Website</h3></header>
            <?php
			$sql = mysql_query("SELECT * FROM tbl_konten ORDER BY konten_id ASC");
			$num = mysql_num_rows($sql);
			if($_GET['msg']=="sscupd"){
				echo "<h4 class='alert_success'>Konten web berhasil diubah.</h4><br/>";
			}
			?>
            <div class="module_konten">
				<table class="adminlist" width="100%">
					<thead><tr>
						<th class="nowrap" width="5%">No</th>
						<th class="nowrap" width="55%">Judul</th>
						<th class="nowrap" width="30%">Update Terakhir</th>
                        <th class="nowrap" width="10%">Aksi</th>
					</tr></thead>
					<tbody>
                    <?php
					if($num==0){
						echo "<tr class='row'><td align='center' colspan='4'><font color='red'><br>Tidak ada data<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row=mysql_fetch_array($sql)){
							echo "
       		                <tr class='row'>
							<td align='center'>$row[konten_id]</td>
							<td>$row[konten_judul]</td>
							<td align='center'>$row[konten_tgl]</td>
							<td align='center'>
								<a id='dialogue' href='editContent.php?do=update&id=$row[konten_id]' judul='edit konten'>
									<img src='../../images/edit.png 'height='20'/></a>
							</td>
							</tr>"; $no++;
						}
					} ?>
					</tbody>
				</table>
			</div>
        </article>
		<div class="spacer"></div>
	</section>
<?php Admin_Footer(); } ?>