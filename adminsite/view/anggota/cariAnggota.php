
<?php
ini_set('display_errors','off');
?>
<script type="text/javascript">
    $(function() {
        $( "#anggota_tgl_masuk" ).datepicker({
            dateFormat : "yy-mm-dd",
            changeMonth: true,
            changeYear : true
        });
    });
</script>

			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="user" name="user" action="../../controller/cariAnggota.php" method="post">
                    	<input id="mod" name="mod" value="tanggal" type="hidden" />
                    <table class="adminlist" width="700">
                    <tbody>
	                    <tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Cari Berdasarkan Tanggal Masuk :</td>
                            <td>
                            	<input id="anggota_tgl_masuk" name="anggota_tgl_masuk" value="<?php echo $tgl_masuk ?>" type="text" readonly />
							</td>
						</tr>
					</tbody>
                    <tfoot>
                    	<tr>
                        	<td colspan="4"><i><span class="star">&#160;*</span>) Data harus diisi.</i>
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