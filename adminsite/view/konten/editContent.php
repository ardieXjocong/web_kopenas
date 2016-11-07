<?php
	session_start();
	require_once("../../config/database.inc.php");
	ini_set('display_errors','off');
	global $db;
	$db->conn();
	if (!empty($_GET['id'])) {
		$konten = mysql_query("SELECT * FROM tbl_konten WHERE konten_id = ".$_GET['id']);
		$u = mysql_fetch_array($konten);
	}
?>
<script type="text/javascript">
$(document).ready(function(){
	$('#konten').submit(function(e) {
		cekkonten();
		e.preventDefault();
	});
});

function cekkonten()
{
	$("#loadgif").show();
	error(0);
	$.ajax({
		type: "POST",
		url: "../../controller/doKonten.php",
		data: $('#konten').serialize(),
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
		$( "#tgl" ).datepicker({
			dateFormat : "dd MM yy",
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
            <div id="toolbar-box">
				<div class="toolbar-list" id="toolbar">
					<ul>
            			<li class="button" id="toolbar-new"><a onclick="cekkonten()" class="toolbar">
							<span class="icon-32-save<?php if (empty($_GET['do'])) { echo "-new"; } ?>"></span>Simpan</a>
						</li>
					</ul>
					<div class="clr"></div>
				</div>
				<div class='pagetitle icon-48-article'><h2>Data Konten Web</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="konten" name="konten" action="../../controller/doKonten.php" method="post">
						<input id="id" name="id" type="hidden" value="<?php echo $u[konten_id] ?>" />
                        <?php if ($_GET['do'] == "update") { ?>
                        <input id="do" name="do" type="hidden" value="update" />
                        <?php } ?>
                    <table class="adminlist" width="550">
                    <tbody>
                        <tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Konten Judul :</td>
                            <td colspan="2">
                            	<input id="judul" name="judul" type="text" size="50" maxlength="75" 
                                value="<?php echo $u[konten_judul] ?>" onkeypress="return harushuruf(event)" />
							</td>
						</tr>
                        <tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Konten Deskripsi :</td>
                            <td colspan="2">
                            	<textarea id="des" name="des" cols="80" rows="15"><?php echo $u[konten_des] ?></textarea>
							</td>
						</tr>
                        <tr>
                        	<td align="center" colspan="3">
                            	<div id="error">&nbsp;</div>
							</td>
						</tr>
					</tbody>
                    <tfoot>
                    	<tr>
                        	<td colspan="3"><i><span class="star">&#160;*</span>) Data harus diisi.</i>
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