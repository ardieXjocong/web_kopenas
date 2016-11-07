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
		url: "../../controller/doUser.php",
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
            			<li class="button" id="toolbar-new"><a onclick="cekuser()" class="toolbar">
							<span class="icon-32-save"></span>Simpan</a>
						</li>
					</ul>
					<div class="clr"></div>
				</div>
				<div class='pagetitle icon-48-config'><h2>Ubah Password</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="user" name="user" action="../../controller/doUser.php" method="post">
                        <input id="do" name="do" type="hidden" value="cpass" />
                    <table class="adminlist" width="550">
                    <tbody>
                         <tr>
							<td align="right" class="blue"><span class="star">&#160;*</span> Password Lama :</td>
                            <td colspan="2">
                            	<input id="oldpass" name="oldpass" type="password" size="35" maxlength="25" />
                            </td>
						</tr>
                        <tr>
							<td align="right" class="blue"><span class="star">&#160;*</span> Password Baru :</td>
                            <td colspan="2">
                            	<input id="password" name="password" type="password" size="35" maxlength="25" />
                            </td>
						</tr>
                        <tr>
							<td align="right" class="blue"><span class="star">&#160;*</span> Konfirmasi Password Baru :</td>
                            <td colspan="2">
                            	<input id="cpass" name="cpass" type="password" size="35" maxlength="25" />
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
                        		<img id="loadgif" src="../../images/loading.gif" alt="working.." style="display:none;" /></td>
                        </tr>
					</tfoot>
					</table>
                    </form>
                    </center>
				</div>
				<div class="clr"></div>
			</div>
