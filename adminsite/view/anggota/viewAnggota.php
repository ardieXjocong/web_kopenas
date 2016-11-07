<?php
	session_start();
	require_once("../../config/database.inc.php");
	require_once("../../include/fungsi_rupiah.php");
	global $db;
	$db->conn();
	if (!empty($_GET['id'])) {
		$user = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_simpanan s ON a.anggota_id = s.anggota_id WHERE a.anggota_id = '".$_GET['id']."'");
		$u = mysql_fetch_array($user);
		$anggota_id = $u['anggota_id'];
		$simpanan_id = $u['simpanan_id'];
		$date = explode('-',$u['anggota_tgl_lahir']);
		$tgl_lahir = date('d M Y', mktime(0,0,0,$date[1],$date[2],$date[0]));
	}
?>

            <div id="toolbar-box">
				<div class='pagetitle icon-48-user'><h2>Data Anggota</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <table class="adminlist" width="550">
                    <tbody>
	                    <tr>
                        	<td align="right" class="blue">Kode :</td>
                            <td colspan="2">
                            	<?php echo $anggota_id ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Nama :</td>
                            <td colspan="2">
                            	<?php echo $u['anggota_nama'] ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Tempat / Tgl Lahir :</td>
                            <td>
                            	<?php echo $u['anggota_tpt_lahir'] ?>
							</td>
							<td>
                            	<?php echo $tgl_lahir ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Jenis Kelamin :</td>
                            <td colspan="2">
                            	<?php if($u['anggota_jk'] == "l") echo "Laki-laki"; ?>
								<?php if($u['anggota_jk'] == "p") echo "Perempuan"; ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Alamat :</td>
                            <td colspan="2">
                            	<?php echo $u['anggota_alamat'] ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Telepon :</td>
                            <td colspan="2">
                            	<?php echo $u['anggota_telepon'] ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Pekerjaan :</td>
                            <td colspan="2">
                            	<?php echo $u['anggota_pekerjaan'] ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Tipe Anggota :</td>
                            <td colspan="2">
                               	<?php if($u['anggota_tipe'] == "1") echo "PNS"; ?>
                               	<?php if($u['anggota_tipe'] == "2") echo "Istri Pegawai"; ?>
                               	<?php if($u['anggota_tipe'] == "3") echo "Rekanan"; ?>
                               	<?php if($u['anggota_tipe'] == "4") echo "Pensiunnan"; ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Unit Kerja :</td>
                            <td colspan="2">
                            	<?php echo $u['anggota_unit_kerja'] ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Tanggal Masuk :</td>
                            <td colspan="2">
                            	<?php echo $u['anggota_tgl_masuk'] ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Simpanan :</td>
                            <td colspan="2">
                            	<?php echo $simpanan_id ?>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">&nbsp;</td>
                            <td colspan="2">
                            	<table class="adminlist" width="100%">
                            		<thead>
                            		<tr>
										<th class="nowrap" width="20%">Pokok</th>
										<th class="nowrap" width="20%">Wajib</th>
										<th class="nowrap" width="20%">Sukarela</th>
										<th class="nowrap" width="20%">Hari Raya</th>
										<th class="nowrap" width="20%">Total</th>
									</tr>
									</thead>
									<tbody>
                            		<tr>
										<td align="right"><?php echo format_rupiah($u['simpanan_pokok']); ?></td>
										<td align="right"><?php echo format_rupiah($u['simpanan_wajib']); ?></td>
										<td align="right"><?php echo format_rupiah($u['simpanan_sukarela']); ?></td>
										<td align="right"><?php echo format_rupiah($u['simpanan_hari_raya']); ?></td>
										<td align="right"><?php echo format_rupiah($u['simpanan_total']); ?></td>
									</tr>
									</tbody>
                            	</table>
							</td>
						</tr>
					</tbody>
                    <tfoot>
                    	<tr>
                        	<td colspan="3">&nbsp;
                        		<img id="loadgif" src="../../images/loading.gif" alt="working.." style="display:none;" />
                        	</td>
                        </tr>
					</tfoot>
					</table>
                    </form>
                    </center>
				</div>
				<div class="clr"></div>
			</div>
<?php
function newcode() {
	$idt = mysql_result(mysql_query("SELECT MAX(SUBSTRING_INDEX(anggota_id,'-',-1)) FROM tbl_anggota"), 0) + 1;
	$code = "AG-".str_pad($idt,3,"0",STR_PAD_LEFT);
	return $code;
}
function newcodesp() {
	$idt = mysql_result(mysql_query("SELECT MAX(SUBSTRING_INDEX(simpanan_id,'-',-1)) FROM tbl_simpanan"), 0) + 1;
	$code = "SP-".str_pad($idt,3,"0",STR_PAD_LEFT);
	return $code;
}
?>