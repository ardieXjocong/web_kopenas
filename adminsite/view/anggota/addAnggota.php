<?php
	session_start();
	require_once("../../config/database.inc.php");
	require_once("../../include/fungsi_rupiah.php");
	ini_set('display_errors','off');
	global $db;
	$db->conn();
	if (!empty($_GET['id'])) {
		$user = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_simpanan s 
							 ON a.anggota_id = s.anggota_id WHERE a.anggota_id = '".$_GET['id']."'");
		$u = mysql_fetch_array($user);
		$anggota_id = $u['anggota_id'];
		$simpanan_id = $u['simpanan_id'];
	} else {
		$anggota_id = newcode();
		$simpanan_id = newcodesp();
	}
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
		url: "../../controller/doAnggota.php",
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
function disableUnitKerja(event){
  var tipe = $('#tipe').val();
  if (tipe == '2' || tipe == '4') {
	$('#unit_kerja').val("");
  	$('#unit_kerja').attr("disabled",true);
  } else {
	// $('#unit_kerja').val("");
  	$('#unit_kerja').attr("disabled",false);
  }
}
</script>
            <div id="toolbar-box">
				<div class="toolbar-list" id="toolbar">
					<ul>
            			<li class="button" id="toolbar-new">
            			<a onclick="cekuser()" class="toolbar">
							<span class="icon-32-save<?php if (empty($_GET['do'])) { echo "-new"; } ?>"></span>Simpan
						</a>
						</li>
					</ul>
					<div class="clr"></div>
				</div>
				<div class='pagetitle icon-48-user-edit'><h2>Data Anggota</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="user" name="user" action="../../controller/doAnggota.php" method="post">
                    	<input id="id" name="id" type="hidden" value="<?php echo $anggota_id ?>" />
						<?php if ($_GET['do'] == "update") { ?>
    	                    <input id="do" name="do" type="hidden" value="update" />
                        <?php } ?>
                    <table class="adminlist" width="550">
                    <tbody>
	                    <tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Kode :</td>
                            <td colspan="2">
                            	<input id="anggota_id" name="anggota_id" type="text" size="15" maxlength="20" 
                                value="<?php echo $anggota_id ?>" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Nama :</td>
                            <td colspan="2">
                            	<input id="nama" name="nama" type="text" size="35" maxlength="50" 
                                value="<?php echo $u['anggota_nama'] ?>" onkeypress="return harushuruf(event)" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Tempat / Tgl Lahir :</td>
                            <td>
                            	<input id="tpt_lahir" name="tpt_lahir" type="text" size="25" maxlength="50" 
                                value="<?php echo $u['anggota_tpt_lahir'] ?>" />
							</td>
							<td>
                            	<input id="tgl_lahir" name="tgl_lahir" type="text" size="15" maxlength="50" 
                                value="<?php echo $u['anggota_tgl_lahir'] ?>" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Jenis Kelamin :</td>
                            <td colspan="2"><input id="jkl" name="jkl" type="radio" value="l" <?php if($u['anggota_jk'] == "l") echo "checked"; ?>>Laki-laki</input>
								<input id="jkl" name="jkl" type="radio" value="p" <?php if($u['anggota_jk'] == "p") echo "checked"; ?>>Perempuan</input>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Alamat :</td>
                            <td colspan="2">
                            	<input id="alamat" name="alamat" type="text" size="50" maxlength="100" 
                                value="<?php echo $u['anggota_alamat'] ?>" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Telepon :</td>
                            <td colspan="2">
                            	<input id="telp" name="telp" type="text" size="15" maxlength="12" 
                                value="<?php echo $u['anggota_telepon'] ?>" onkeypress="return harusangka(event)" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Pekerjaan :</td>
                            <td colspan="2">
                            	<input id="pekerjaan" name="pekerjaan" type="text" size="35" maxlength="25" 
                                value="<?php echo $u['anggota_pekerjaan'] ?>" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Tipe Anggota :</td>
                            <td colspan="2">
                            	<select id="tipe" name="tipe" onchange="disableUnitKerja(event)">
									<option value=""></option>
                                	<option value="1" <?php if($u['anggota_tipe'] == "1") echo "selected"; ?>>PNS</option>
                                	<option value="2" <?php if($u['anggota_tipe'] == "2") echo "selected"; ?>>Istri Pegawai</option>
                                	<option value="3" <?php if($u['anggota_tipe'] == "3") echo "selected"; ?>>Rekanan</option>
                                	<option value="4" <?php if($u['anggota_tipe'] == "4") echo "selected"; ?>>Pensiunnan</option>
                                </select>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Unit Kerja :</td>
                            <td colspan="2">
                            	<input id="unit_kerja" name="unit_kerja" type="text" size="35" maxlength="25" 
                                value="<?php echo $u['anggota_unit_kerja'] ?>" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Tanggal Masuk :</td>
                            <td colspan="2">
                            	<input id="tgl_masuk" name="tgl_masuk" type="text" size="15" maxlength="50" 
                                value="<?php echo $u['anggota_tgl_masuk'] ?>" readonly />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"><span class="star">&#160;*</span> Password  :</td>
                            <td colspan="2">
                            	<input id="password" name="password" type="password" size="15" maxlength="50" 
                                value=""/>
							</td>
						</tr>						
						<tr>
                        	<td align="right" class="blue">Simpanan :</td>
                            <td colspan="2">
                            	<input id="simpanan_id" name="simpanan_id" type="text" size="15" maxlength="20" 
                                value="<?php echo $simpanan_id ?>" />
                                <input id="simpanan" name="simpanan" type="hidden" size="15" maxlength="20" 
                                value="<?php echo $simpanan_id ?>" />
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