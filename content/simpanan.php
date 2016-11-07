<?php if(isset($_SESSION['anggota'])){ ?>
			<h2>DATA SIMPANAN</h2><br />
			<div id="element-box">
            	<div class="width-100 fltlft">
                <?php
				$sql1 = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_simpanan s ON a.anggota_id = s.anggota_id WHERE a.anggota_id= '".$_SESSION['ID']."'");
				?>
				<table class="adminlist" width="100%">
					<thead>
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
						require_once("adminsite/include/fungsi_rupiah.php");
						
						while($row_d1=mysql_fetch_array($sql1)){
							$simpanan = $row_d1['simpanan_id'];
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
            	require_once("adminsite/include/paging.php");
				$p      = new PagingUsers;
				$limit  = 12;
				$position = $p->findPosition($limit);
            	$sql = mysql_query("SELECT * FROM tbl_simpanan_detil WHERE simpanan_id = '".$simpanan."' ORDER BY simpanan_detil_thn_periode DESC, simpanan_detil_bln_periode DESC, simpanan_detil_id DESC LIMIT ".$position.",".$limit);
				$num = mysql_num_rows($sql);
				?>
				<table class="adminlist" width="100%">
					<thead>
					<tr>
						<th class="nowrap" width="14%">Tanggal</th>
						<th class="nowrap" width="14%">Bulan</th>
						<th class="nowrap" width="10%">Tahun</th>
						<th class="nowrap" width="10%">Pokok</th>
						<th class="nowrap" width="10%">Wajib</th>
						<th class="nowrap" width="10%">Sukarela</th>
						<th class="nowrap" width="10%">Hari Raya</th>
						<th class="nowrap" width="10%">Total</th>
					</tr></thead>
					<tfoot><tr>
						<td colspan="8">
							<div class="container">
                               	<div class="pagination">
									<div class="limit">
                                        <?php
											$allData = mysql_num_rows(mysql_query("SELECT * FROM tbl_simpanan_detil WHERE simpanan_id = '".$simpanan."'"));
											$allPage = $p->sumPage($allData, $limit);
  											$linkPage = $p->navPageView("simpanan", $_GET['usr_page'], $allPage);

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
                    			date_default_timezone_set('Asia/Jakarta');
					if($num==0){
						echo "<tr class='row'><td align='center' colspan='8'><font color='red'><br>Tidak ada data simpanan.<br><br></font></td></tr>";
					}else{
						$no=1;
						while($row_d=mysql_fetch_array($sql)){
							// V 1.0 [S]
							$date = explode('-',$row_d['simpanan_detil_tgl']);	
							$month = date('F', mktime(0,0,0,$date[1],$date[2],$date[0]));
							$year  = date('Y', mktime(0,0,0,$date[1],$date[2],$date[0]));	
							// <td >".date('F',mktime(0,0,0,$row_d['simpanan_detil_bln_periode']+1,0,0))."</td> // 112 
							// <td align='center'>$row_d[simpanan_detil_thn_periode]</td> // line 113
							// V 1.0 [E]																			
							echo "
       		                <tr class='row'>
							<td align='center'>$row_d[simpanan_detil_tgl]</td>
							<td >".$month."</td>
							<td align='center'>".$year."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_pokok'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_wajib'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_sukarela'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_hari_raya'])."</td>
							<td align='right'>".format_rupiah($row_d['simpanan_detil_total'])."</td>
							</tr>"; $no++;
						}

							



					} ?>
					</tbody>
				</table>
				</div>
				<div class="clr"></div>
			</div>
<?php } else echo "<script>window.location=('./?view=relogin&msg=login')</script>"; ?>