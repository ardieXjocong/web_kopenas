<?php
ini_set('display_errors','Off');
?>

<script type="text/javascript">
	$(document).ready(function() {
		$("a#glow").fancybox({
			'titlePosition'	: 'inside'
		});
	});
</script>
<?php if(isset($_SESSION['anggota'])){ ?>
			<h2>DATA PINJAMAN</h2><br />
			<div id="element-box">
				<?php if($_GET['msg'] == "sscadd"){ ?><p align="center" style="color:#00F">Data pengajuan pinjaman berhasil dikirim.</p><?php } ?>
               	<div class="width-100 fltlft">
                <?php
				$sql1 = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_pinjaman s ON a.anggota_id = s.anggota_id WHERE a.anggota_id= '".$_SESSION['ID']."' and s.pinjaman_ind = 'N'");
				$num = mysql_num_rows($sql1);
				?>
				<table class="adminlist" width="100%">
					<thead>
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
					</tr></thead>
					<tbody>
                    <?php
                   	if ($num==0) {
	                   	echo "<tr class='row'><td align='center' colspan='9'><font color='red'><br>Anda tidak memiliki pinjaman yang belum lunas.<br><br></font></td></tr>";
                   	} else {
						$no=1;
						require_once("adminsite/include/fungsi_rupiah.php");
						
						while($row_d1=mysql_fetch_array($sql1)){
							$pinjaman = $row_d1['pinjaman_id'];
							echo "
       		                <tr class='row'>
							<td align='center'>$row_d1[pinjaman_id]</td>
							<td align='center'>$row_d1[anggota_id]</td>
							<td>$row_d1[anggota_nama]</td>
							<td align='center'>$row_d1[pinjaman_angsuran] x</td>
							<td align='right'>".format_rupiah($row_d1['pinjaman_pokok'])."</td>
							<td align='right'>".format_rupiah($row_d1['pinjaman_jasa'])."</td>
							<td align='right'>".format_rupiah($row_d1['pinjaman_total'])."</td>
							<td align='right'>".format_rupiah($row_d1['pinjaman_angsuran_masuk'])."</td>
							<td align='right'>".format_rupiah($row_d1['pinjaman_angsuran_sisa'])."</td>
							</tr>"; $no++;
						}
					}
					?>
					</tbody>
				</table><p align="right"><a id="glow" href="content/pengajuan.php"><button value="Pengajuan Pinjaman">Pengajuan Pinjaman</button></a></p>
            	<?php 
            	require_once("adminsite/include/paging.php");
				$p      = new PagingUsers;
				$limit  = 12;
				$position = $p->findPosition($limit);
            	$sql = mysql_query("SELECT * FROM tbl_angsuran WHERE pinjaman_id = '".$pinjaman."' ORDER BY angsuran_thn_periode DESC, angsuran_bln_periode DESC, angsuran_id DESC LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead>
					<tr>
						<th class="nowrap" width="10%">Kode</th>
						<th class="nowrap" width="14%">Tanggal</th>
						<th class="nowrap" width="14%">Bulan</th>
						<th class="nowrap" width="10%">Tahun</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="10%">Jasa</th>
						<th class="nowrap" width="10%">Total</th>
						<th class="nowrap" width="10%">Angsuran Ke-</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="8">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_angsuran WHERE pinjaman_id = '".$pinjaman."'"));
											$allPage = $p->sumPage($allData, $limit);
  											$linkPage = $p->navPageView("pinjaman", $_GET['usr_page'], $allPage);

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
						echo "<tr class='row'><td align='center' colspan='8'><font color='red'><br>Tidak ada data pinjaman.<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row_d=mysql_fetch_array($sql)){
							
							echo "
       		                <tr class='row'>
       		                <td align='center'>$row_d[angsuran_id]</td>
							<td align='center'>$row_d[angsuran_tgl]</td>
							<td >".date('F',mktime(0,0,0,$row_d['angsuran_bln_periode']+1,0,0))."</td>
							<td align='center'>$row_d[angsuran_thn_periode]</td>
							<td align='right'>".format_rupiah($row_d['angsuran'])."</td>
							<td align='right'>".format_rupiah($row_d['angsuran_jasa'])."</td>
							<td align='right'>".format_rupiah($row_d['angsuran_total'])."</td>
							<td align='center'>".format_rupiah($row_d['angsuran_ke'])."</td>
							</tr>"; $no++;
						}
					} ?>
					</tbody>
				</table>
				</div>
				<div class="clr"></div>
			</div>
<?php } else echo "<script>window.location=('./?view=relogin&msg=login')</script>"; ?>