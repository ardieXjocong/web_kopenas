<?php
/*
 * HISTORY VERSIONING
 * PROGRAMMER
 * INITIAL              VERSION         DATE(YYYY-MM-DD)        CHANGE LOG
 * ========================================================================================================
 * -ARDIANSYAH           -1.0            -2016-04-04             - Input Manual Tgl Simpanan
*/
?>
<?php
	session_start();
	ini_set('display_errors','off');
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
		url: "../../controller/doSimpanan.php",
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

	function fillAnggota(thisValue,nameValue,tipeValue,simpananValue,pokokValue,wajibValue,sukarelaValue,harirayaValue,totalValue,wajib) {
		$('#anggota').val(thisValue);
		$('#sanggota').val(thisValue);
		$('#nama').val(nameValue);
		$('#tipe').val(tipeValue);
		$('#simpanan').val(simpananValue);
		$('#ssimpanan').val(simpananValue);
		$('#pokok').val(pokokValue);
		$('#swajib').val(wajibValue);
		$('#wajib').val(wajib);
		$('#ssukarela').val(sukarelaValue);
		$('#shari_raya').val(harirayaValue);
		$('#total').val(totalValue);
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
				<div class='pagetitle icon-48-stats'><h2>Data Simpanan</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="user" name="user" action="../../controller/doSimpanan.php" method="post">
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
                            	<!--<?php echo $tgl_txt ?> -->
                            	<!--<input id="tgl" name="tgl" type="hidden" size="15" maxlength="50" 
                            	value="<?php echo $tgl ?>" />-->
								<input id="tgl" name="tgl" type="text" size="15" maxlength="50" 
								value="<?php echo $tgl ?>" /> 
                                <!-- // V 1.0 [E] -->
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Anggota :</td>
                            <td>
                            	<input id="nama" name="nama" type="text" size="35" maxlength="50"
                            	onkeyup="suggestAnggota(this.value);" onblur="fillAnggota();" AUTOCOMPLETE="OFF" />
                            	<div class="suggestionsBox" id="suggestionsAnggota" style="display: none;">
									<img src="../../images/arrow (2).png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
									<div class="suggestionList" id="suggestionsListAnggota"> &nbsp; </div>
								</div>
							</td>
							
							<td align="right" class="blue">Wajib :</td>
                            <td>
                            	<input id="wajib" name="wajib" type="text" size="15" maxlength="50" onkeypress="return harusangka(event)"/>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Tipe :</td>
                            <td>
								<input id="tipe" name="tipe" type="text" disabled />
							</td>
							
							<td align="right" class="blue">Sukarela :</td>
                            <td>
                            	<input id="sukarela" name="sukarela" type="text" size="15" maxlength="50" onkeypress="return harusangka(event)" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Simpanan :</td>
                            <td>
                            	<input id="ssimpanan" name="ssimpanan" type="text" disabled />
                            	<input id="simpanan" name="simpanan" type="hidden" />
							</td>
							
							<td align="right" class="blue">Hari Raya :</td>
                            <td>
                            	<input id="hari_raya" name="hari_raya" type="text" size="15" maxlength="50" onkeypress="return harusangka(event)" />
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
										<td align="right"><input id="pokok" name="pokok" type="text" size="10" disabled /></td>
										<td align="right"><input id="swajib" name="swajib" type="text" size="10" disabled /></td>
										<td align="right"><input id="ssukarela" name="ssukarela" type="text" size="10" disabled /></td>
										<td align="right"><input id="shari_raya" name="shari_raya" type="text" size="10" disabled /></td>
										<td align="right"><input id="total" name="total" type="text" size="10" disabled /></td>
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