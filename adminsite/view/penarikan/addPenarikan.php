<?php
/*
 * HISTORY VERSIONING
 * PROGRAMMER
 * INITIAL              VERSION         DATE(YYYY-MM-DD)        CHANGE LOG
 * ========================================================================================================
 * -ARDIANSYAH           -1.0            -2016-04-05             - Input Manual Tgl Penarikan simpanan
 * -ARDIANSYAH           -1.1            -2016-05-17             - tambah fitur penarikan s.wajib dan s.pokok
*/
?>
<?php
	session_start();
	require_once("../../config/database.inc.php");
	global $db;
	$db->conn();
	ini_set('display_errors','off');
	$penarikan = newcode();
	$tgl = date('Y-m-d');
	$tgl_txt = date('d M Y');
?>
<script type="text/javascript">
$(document).ready(function(){
	$('#user').submit(function(e) {
		cekuser();
		e.preventDefault();
	});
});

function cekuser()
{
	$("#loadgif").show();
	error(0);
	$.ajax({
		type: "POST",
		url: "../../controller/doPenarikan.php",
		data: $('#user').serialize(),
		dataType: "json",
		success: function(msg){
			
			if(parseInt(msg.status)==1)
			{
				window.location=msg.txt;
			}
			else if(parseInt(msg.status)==0)
			{
				error(1,msg.txt);
			}
						
			$("#loadgif").hide();
		}
	});
}
function hideshow(el,act)
{
	if(act) $('#'+el).css('visibility','visible');
	else $('#'+el).css('visibility','hidden');
}
function error(act,txt)
{
	hideshow('error',act);
	if(txt) $('#error').html(txt);
}
</script>

<script type="text/javascript">
	$(function() {
		$( "#tgl_lahir" ).datepicker({
			dateFormat : "yy-mm-dd",
			changeMonth: true,
			changeYear : true
		});
		$( "#tgl_masuk" ).datepicker({
			dateFormat : "yy-mm-dd",
			changeMonth: true,
			changeYear : true
		});
		// V 1.0 [S]
		$( "#tgl" ).datepicker({
			dateFormat : "yy-mm-dd",
			changeMonth: true,
			changeYear : true
		});		
		// V 1.0 [E]
	});
</script>

<script type="text/javascript">
function harusangka(jumlah){
  var karakter = (jumlah.which) ? jumlah.which : event.keyCode
  if (karakter > 32 && (karakter < 48 || karakter > 57))
    return false;

  return true;
}
function harushuruf(huruf){
  var karakter = (huruf.which) ? huruf.which : event.keyCode
  if (karakter > 32 && (karakter < 65 || karakter > 90) && (karakter < 97 || karakter > 122))
    return false;

  return true;
}
</script>

<script>
	function suggestAnggota(inputString){
		if(inputString.length == 0) {
			$('#suggestionsAnggota').fadeOut();
		} else {
		$('#anggota').addClass('load');
			$.post("autosuggest_anggota.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestionsAnggota').fadeIn();
					$('#suggestionsListAnggota').html(data);
					$('#searchAnggota').removeClass('load');
				}
			});
		}
	}

	function fillAnggota(thisValue,nameValue,tipeValue,simpananValue,pokokValue,pokok,wajibValue,sukarelaValue,wajib,sukarela,hariraya,harirayaValue,totalValue) {
		$('#anggota').val(thisValue);
		$('#sanggota').val(thisValue);
		$('#nama').val(nameValue);
		$('#tipe_a').val(tipeValue);
		$('#simpanan').val(simpananValue);
		$('#ssimpanan').val(simpananValue);
		$('#pokok').val(pokok);
		$('#spokok').val(pokokValue);
		$('#swajib').val(wajibValue);
		$('#wajib').val(wajib);
		$('#ssukarela').val(sukarelaValue);
		$('#sukarela').val(sukarela);
		$('#shari_raya').val(harirayaValue);
		$('#hari_raya').val(hariraya);
		$('#stotal').val(totalValue);
		setTimeout("$('#suggestionsAnggota').fadeOut();", 10);
	}
</script>

            <div id="toolbar-box">
				<div class="toolbar-list" id="toolbar">
					<ul>
            			<li class="button" id="toolbar-new"><a onclick="cekuser()" class="toolbar">
							<span class="icon-32-save<?php if (empty($_GET['do'])) { echo "-new"; } ?>"></span>Simpan</a>
						</li>
					</ul>
					<div class="clr"></div>
				</div>
				<div class='pagetitle icon-48-stats'><h2>Data Penarikan</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="user" name="user" action="../../controller/doPenarikan.php" method="post">
                    <table class="adminlist" width="700">
                    <tbody>
	                    <tr>
                        	<td align="right" class="blue">Kode :</td>
                            <td>
                            	<input id="sanggota" name="sanggota" type="text" disabled />
                            	<input id="anggota" name="anggota" type="hidden" />
							</td>
							
							<td align="right" class="blue">Tanggal :</td>
                            <td>
                            	<!-- // V 1.0 [S] -->
                            	<!-- <?php echo $tgl_txt ?> &nbsp; (<?php echo $penarikan ?>) -->
                            	<!-- <input id="tgl" name="tgl" type="hidden" size="15" maxlength="50" 
                                value="<?php echo $tgl ?>" /> -->
								<input id="tgl" name="tgl" type="text" size="15" maxlength="50" 
                                value="<?php echo $tgl ?>" />
                                &nbsp;(<?php echo $penarikan ?>)
                                <!-- // V 1.0 [E] -->
                                <input id="penarikan" name="penarikan" type="hidden" size="15" maxlength="50" 
                                value="<?php echo $penarikan ?>" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Anggota :</td>
                            <td>
                            	<input id="nama" name="nama" type="text" size="20" maxlength="50"
                            	onkeyup="suggestAnggota(this.value);" onblur="fillAnggota();" AUTOCOMPLETE="OFF" />
                            	<div class="suggestionsBox" id="suggestionsAnggota" style="display: none;">
									<img src="../../images/arrow (2).png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
									<div class="suggestionList" id="suggestionsListAnggota"> &nbsp; </div>
								</div>
							</td>
							
							<td align="right" class="blue"><span class="star">&#160;*</span> Jenis Penarikan :</td>
                            <td>
                            	<select id="tipe" name="tipe">
									<option value=""></option>
                                	<!--<option value="1">Wajib</option>-->
                                	<option value="2">Sukarela</option>
                                	<option value="3">Hari Raya</option>
                                	<!-- 1.1 [s] -->
                                	<option value="1">Wajib</option>
                                	<option value="4">Pokok</option>
                                	<!-- 1.1 [e] -->
                                </select>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Tipe :</td>
                            <td>
								<input id="tipe_a" name="tipe_a" type="text" disabled />
							</td>
							
							<td align="right" class="blue"><span class="star">&#160;*</span> Total Penarikan :</td>
                            <td>
                            	<input id="total" name="total" type="text" size="15" maxlength="50" onkeypress="return harusangka(event)" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Simpanan :</td>
                            <td>
                            	<input id="ssimpanan" name="ssimpanan" type="text" disabled />
                            	<input id="simpanan" name="simpanan" type="hidden" />
							</td>
							
							<td align="right" class="blue">Catatan :</td>
                            <td>
                            	<input id="catatan" name="catatan" type="text" size="35" maxlength="100" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">&nbsp;</td>
                            <td colspan="3">
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
										<td align="right"><input id="spokok" name="spokok" type="text" size="10" disabled />
											<input id="pokok" name="pokok" type="hidden" size="10" />
										</td>
										<td align="right"><input id="swajib" name="swajib" type="text" size="10" disabled />
											<input id="wajib" name="wajib" type="hidden" size="10" />
										</td>
										<td align="right"><input id="ssukarela" name="ssukarela" type="text" size="10" disabled />
											<input id="sukarela" name="sukarela" type="hidden" size="10" />
										</td>
										<td align="right"><input id="shari_raya" name="shari_raya" type="text" size="10" disabled />
											<input id="hari_raya" name="hari_raya" type="hidden" size="10" />
										</td>
										<td align="right"><input id="stotal" name="stotal" type="text" size="10" disabled /></td>
									</tr>
									</tbody>
                            	</table>
							</td>
						</tr>
                        <tr>
                        	<td align="center" colspan="4">
                            	<div id="error">&nbsp;</div>
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
<?php
function newcode() {
	$idt = mysql_result(mysql_query("SELECT MAX(SUBSTRING_INDEX(penarikan_id,'-',-1)) FROM tbl_penarikan"), 0) + 1;
	$code = "PN-".str_pad($idt,3,"0",STR_PAD_LEFT);
	return $code;
}
?>