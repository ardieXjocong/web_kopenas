<?php
	session_start();
	require_once("../../config/database.inc.php");
	global $db;
	$db->conn();
	$tgl_awal = date("Y-m-d");
	$tgl_akhir = date("Y-m-d");
?>

<script type="text/javascript">
	$(function() {
		$( "#tgl_awal" ).datepicker({
			dateFormat : "yy-mm-dd",
			changeMonth: true,
			changeYear : true
		});
		$( "#tgl_akhir" ).datepicker({
			dateFormat : "yy-mm-dd",
			changeMonth: true,
			changeYear : true
		});
	});
</script>
            <div id="toolbar-box">
				<div class='pagetitle icon-48-article'><h2>Laporan SHU</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="laporan" name="laporan" action="lapSHUPdf.php" target="_blank" method="post">
                    <table class="adminlist" width="550">
                    <tbody>
	                    <tr>
                        	<td align="right" class="blue">Periode :</td>
                            <td colspan="2">
                            	<input id="tgl_awal" name="tgl_awal" type="text" size="15" maxlength="50" value="<?php echo $tgl_awal ?>" readonly />
                            	&nbsp; Sampai &nbsp;
                            	<input id="tgl_akhir" name="tgl_akhir" type="text" size="15" maxlength="50" value="<?php echo $tgl_awal ?>" readonly />
							</td>
						</tr>
						<!--<tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Jenis Laporan :</td>
                            <td colspan="2">
	                            <input id="tipe" name="tipe" type="radio" value="harian" checked /> Rekap Per Tanggal &nbsp; 
	                            <input id="tipe" name="tipe" type="radio" value="bulanan" /> Rekap Per Bulan &nbsp; 
							</td>
						</tr>-->
                        <tr>
                        	<td align="center" colspan="3">
                        		<button class="menu" type="submit">Cetak Laporan</button>
							</td>
						</tr>
					</tbody>
                    <tfoot>
                    	<tr>
                        	<td colspan="3"><i><span class="star">&#160;*</span>) Data harus diisi.</i>
                        		<img id="loadgif" src="../../images/loading.gif" alt="working.." style="display:none;" /></td>
                        </tr>
					</tfoot>
					</table>
                    </form>
                    </center>
				</div>
				<div class="clr"></div>
			</div>