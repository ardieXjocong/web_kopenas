<?php
	session_start();

	$myfile = fopen("../../config/tanggal.txt", "r") or die ("file konfigurasi tidak bisa dibuka !!");
	$data = fread($myfile, filesize("../../config/tanggal.txt"));
	if (strlen($data) >= 20) {
		$tgl_mulai = substr($data,0,10);
		$tgl_selesai = substr($data,12,10);
	}
	fclose($myfile);
	ini_set('display_errors','off');
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
		$( "#tgl_mulai" ).datepicker({
			dateFormat : "yy-mm-dd",
			changeMonth: true,
			changeYear : true
		});
		$( "#tgl_selesai" ).datepicker({
			dateFormat : "yy-mm-dd",
			changeMonth: true,
			changeYear : true
		});
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

	function fillAnggota(thisValue,nameValue,tipeValue,simpananValue,pokokValue,wajibValue,sukarelaValue,wajib,sukarela,hariraya,harirayaValue,totalValue) {
		$('#anggota').val(thisValue);
		$('#sanggota').val(thisValue);
		$('#nama').val(nameValue);
		$('#tipe_a').val(tipeValue);
		$('#simpanan').val(simpananValue);
		$('#ssimpanan').val(simpananValue);
		$('#pokok').val(pokokValue);
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
				<div class='pagetitle icon-48-stats'><h2>Waktu Penarikan Simpanan Hari Raya</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="user" name="user" action="../../controller/doPenarikan.php" method="post">
                    	<input id="mod" name="mod" value="tanggal" type="hidden" />
                    <table class="adminlist" width="700">
                    <tbody>
	                    <tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Tanggal Mulai :</td>
                            <td>
                            	<input id="tgl_mulai" name="tgl_mulai" value="<?php echo $tgl_mulai ?>" type="text" readonly />
							</td>
							
							<td align="right" class="blue"><span class="star">&#160;*</span> Tanggal Selesai :</td>
							<td>
								<input id="tgl_selesai" name="tgl_selesai" value="<?php echo $tgl_selesai ?>" type="text" readonly />
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