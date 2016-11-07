<?php
/*
 * HISTORY VERSIONING
 * PROGRAMMER
 * INITIAL              VERSION         DATE(YYYY-MM-DD)        CHANGE LOG
 * ========================================================================================================
 * -ARDIANSYAH           -1.0            -2016-04-05             - Input Manual Tgl Angsuran pinjaman
*/
?>
<?php
	session_start();
	require_once("../../config/database.inc.php");
	ini_set('display_errors','off');
	global $db;
	$db->conn();
	date_default_timezone_set('Asia/Jakarta');
	$angsuran = newcode();
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
		url: "../../controller/doAngsuran.php",
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

	function fillAnggota(thisValue,nameValue,tipeValue,pinjamanValue,pokokValue,jasaValue,totalValue,masukVal,sisaVal,pinjamanVal,angsuranVal,pokok,jasa,total,angsuran_ke) {
		$('#anggota').val(thisValue);
		$('#sanggota').val(thisValue);
		$('#nama').val(nameValue);
		$('#tipe_a').val(tipeValue);
		$('#pinjaman').val(pinjamanValue);
		$('#spinjaman').val(pinjamanValue);
		$('#angsuran_ke').val(angsuran_ke);
		$('#pokok').val(pokok);
		$('#jasa').val(jasa);
		$('#total').val(total);
		$('#pinjaman').val(pinjamanValue);
		$('#ppinjaman').val(pinjamanValue);
		$('#total_pinjam').val(pinjamanVal);
		$('#total_angsuran').val(angsuranVal + " x ");
		$('#angsuran_total').val(angsuranVal);
		$('#pmasuk').val(masukVal);
		$('#psisa').val(sisaVal);
		setTimeout("$('#suggestionsAnggota').fadeOut();", 10);
	}
</script>

<script>
function ubah_angsuran_dan_jasa(){
	document.getElementById("pokok").readOnly=false;
	document.getElementById("jasa").readOnly=false;
	$("#pokok").css("background-color","#ffcc33");
	$("#jasa").css("background-color","#ffcc33");
}

$(document).ready(function(){
	function hitung(){
		var pokok = $("#pokok").val();
		var jasa = $("#jasa").val();
		if(pokok>0 || jasa>0){
			var total = parseInt(pokok) + parseInt(jasa);
			$("#total").val(total);
		}else {
			$("#total").val('');
		}
	}

	$("#pokok").keyup(function(){
		hitung();
	});

	$("#jasa").keyup(function(){
		hitung();
	});

});
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
				<div class='pagetitle icon-48-stats'><h2>Data Angsuran</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="user" name="user" action="../../controller/doAngsuran.php" method="post">
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
                            	<!-- <?php echo $tgl_txt ?> &nbsp; (<?php echo $angsuran ?>) -->
                            	<!-- <input id="tgl" name="tgl" type="hidden" size="15" maxlength="50" 
                                value="<?php echo $tgl ?>" /> -->
								<input id="tgl" name="tgl" type="text" size="15" maxlength="50" 
                                value="<?php echo $tgl ?>" />
                                &nbsp; (<?php echo $angsuran ?>)
                                <!-- // V 1.0 [E] -->
                                <input id="angsuran" name="angsuran" type="hidden" size="15" maxlength="50" 
                                value="<?php echo $angsuran ?>" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Anggota :</td>
                            <td>
                            	<input id="nama" name="nama" type="text" size="30" maxlength="50"
                            	onkeyup="suggestAnggota(this.value);" onblur="fillAnggota();" AUTOCOMPLETE="OFF" />
                            	<div class="suggestionsBox" id="suggestionsAnggota" style="display: none;">
									<img src="../../images/arrow (2).png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
									<div class="suggestionList" id="suggestionsListAnggota"> &nbsp; </div>
								</div>
							</td>
							<td align="right" class="blue">Angsuran Ke- :</td>
                            <td>
                            	<input id="angsuran_ke" name="angsuran_ke" type="text" size="15" maxlength="50" onkeypress="return harusangka(event)" readonly />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Tipe :</td>
                            <td>
								<input id="tipe_a" name="tipe_a" type="text" disabled />
							</td>
							
							<td align="right" class="blue">Angsuran :</td>
                            <td>
                            	<input id="pokok" name="pokok" type="text" size="15" maxlength="50" onkeypress="return harusangka(event)" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"></td>
                            <td><input id="btn_ubah" value="Ubah Jumlah Angsuran / Jasa" name="btn" type="button" onClick="ubah_angsuran_dan_jasa()"/></td>
							
							<td align="right" class="blue">Jasa :</td>
                            <td>
                            	<input id="jasa" name="jasa" type="text" size="15" maxlength="50" onkeypress="return harusangka(event)" readonly />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Pinjaman :</td>
                            <td>
                            	<input id="ppinjaman" name="ppinjaman" type="text" disabled />
                            	<input id="pinjaman" name="pinjaman" type="hidden" />
							</td>
							
							<td align="right" class="blue">Total Angsuran :</td>
                            <td>
                            	<input id="total" name="total" type="text" size="15" maxlength="50" onkeypress="return harusangka(event)" readonly />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"></td>
                            <td colspan="3">
                            	<table class="adminlist" width="100%">
                            		<thead>
                            		<tr>
										<th class="nowrap" width="20%">Total Pinjam</th>
										<th class="nowrap" width="20%">Jumlah X Angsuran</th>
										<th class="nowrap" width="20%">Angsuran Masuk</th>
										<th class="nowrap" width="20%">Sisa Angsuran</th>
									</tr>
									</thead>
									<tbody>
                            		<tr>
										<td align="right"><input id="total_pinjam" name="total_pinjam" type="text" size="13" disabled /></td>
										<td align="right"><input id="total_angsuran" name="total_angsuran" type="text" size="13" disabled />
											<input id="angsuran_total" name="angsuran_total" type="hidden" size="13" />
										</td>
										<td align="right"><input id="pmasuk" name="pmasuk" type="text" size="13" disabled /></td>
										<td align="right"><input id="psisa" name="psisa" type="text" size="13" disabled /></td>
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
                        	<td colspan="4">&nbsp;
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
	$idt = mysql_result(mysql_query("SELECT MAX(CAST(SUBSTRING(angsuran_id, 4) AS SIGNED)) from tbl_angsuran"), 0) + 1;
	// $idt = mysql_result(mysql_query("SELECT MAX(SUBSTRING_INDEX(angsuran_id,'-',-1)) FROM tbl_angsuran"), 0) + 1;
	// SELECT MAX(CAST(SUBSTRING(angsuran_id, 4) AS SIGNED)) from tbl_angsuran ;
	$code = "AS-".str_pad($idt,3,"0",STR_PAD_LEFT);
	return $code;
}
?>