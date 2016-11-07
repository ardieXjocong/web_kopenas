<?php
	session_start();
	require_once("../../config/database.inc.php");
	require_once("../../include/fungsi_rupiah.php");
	global $db;
	$db->conn();
	ini_set('display_errors','off');	
	if (!empty($_GET['id'])) {
		$user = mysql_query("SELECT * FROM tbl_anggota a JOIN tbl_simpanan s ON a.anggota_id = s.anggota_id 
							JOIN tbl_pinjaman p ON a.anggota_id = p.anggota_id
							WHERE p.pinjaman_id = '".$_GET['id']."'");
		$u = mysql_fetch_array($user);
		
		if ($u[anggota_tipe] == "1") {
			$tipe = "PNS";
		} else if ($u[anggota_tipe] == "2") {
			$tipe = "Istri Pegawai";
		} else if ($u[anggota_tipe] == "3") {
			$tipe = "Rekanan";
		} else if ($u[anggota_tipe] == "4") {
			$tipe = "Pensiunan";
    	} else {
			$tipe = "";
		}
		
		$pinjaman = $u[pinjaman_id];
		$tgl = $u[pinjaman_tgl_pinjam];
		$date = explode('-',$u[pinjaman_tgl_pinjam]);
		$tgl_txt = date('d M Y', mktime(0,0,0,$date[1],$date[2],$date[0]));
	} else {
		$pinjaman = newcode();
		$tgl = date('Y-m-d');
		$tgl_txt = date('d M Y');
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
		url: "../../controller/doPinjaman.php",
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
  // if (karakter > 32 && (karakter < 48 || karakter > 57)) // input hanya angka 
  if (karakter !=46 && (karakter < 47 || karakter > 59))
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

<?php if (empty($_GET['do'])) { ?>
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

	function fillAnggota(thisValue,nameValue,tipeValue,simpananValue,pokokValue,wajibValue,sukarelaValue,harirayaValue,totalValue) {
		$('#anggota').val(thisValue);
		$('#sanggota').val(thisValue);
		$('#nama').val(nameValue);
		$('#tipe').val(tipeValue);
		$('#simpanan').val(simpananValue);
		$('#ssimpanan').val(simpananValue);
		$('#pokok').val(pokokValue);
		$('#swajib').val(wajibValue);
		$('#ssukarela').val(sukarelaValue);
		$('#shari_raya').val(harirayaValue);
		$('#total').val(totalValue);
		setTimeout("$('#suggestionsAnggota').fadeOut();", 10);
	}
</script>
<?php } ?>

<script>

	var jasa=1.5;
	document.getElementById("jasa").value=jasa;
	document.getElementById("btn_selesai").disabled=true;

	function ubahjasa(){
		document.getElementById("jasa").readOnly=false;
		document.getElementById("btn_ubah").disabled=true;
		document.getElementById("btn_selesai").disabled=false;
	}

	function selesai(){
		document.getElementById("jasa").readOnly=true;
		document.getElementById("btn_selesai").disabled=true;
		document.getElementById("btn_ubah").disabled=false;
	}

	function hitung() {
		//alert(removeComma($('#jml_pinjam').val()));
		
		$('#provisi').val(removeComma($('#jml_pinjam').val()) / 100);
		$('#diterima').val(parseInt(removeComma($('#jml_pinjam').val())) - parseInt($('#provisi').val()));
		$('#ppokok').val(Math.ceil((removeComma($('#jml_pinjam').val()) / $('#angsuran').val()) / 1000) * 1000);
		// $('#pjasa').val(removeComma($('#jml_pinjam').val()) * 1.5 / 100);
		$('#pjasa').val(removeComma($('#jml_pinjam').val()) * ($('#jasa').val()) / 100);
		$('#ptotal').val(parseInt($('#ppokok').val()) + parseInt($('#pjasa').val()));
		// 2016-09-15 [S] 
		//$('#psisa').val($('#ppokok').val()*($('#angsuran').val()));
		$('#psisa').val($('#jml_pinjam').val());
		// 2016-09-15 [E]		
		$('#sisa').val($('#psisa').val());

		$('#ppokok').val(addCommaStr($('#ppokok').val()));
		$('#pjasa').val(addCommaStr($('#pjasa').val()));
		$('#ptotal').val(addCommaStr($('#ptotal').val()));
		$('#psisa').val(addCommaStr($('#psisa').val()));
		$('#provisi').val(addCommaStr($('#provisi').val()));
		$('#diterima').val(addCommaStr($('#diterima').val()));
	}
	
function addCommaStr(input) {
    var start=0,end=0;
    var result="";
    start=input.length-3;
    end=input.length;
    while (start>0) {
        if (start>0 && input.substring(start-1,start)!=".")
            result="."+input.substring(start,end)+result;
        else
            result=input.substring(start,end)+result;          
        end=start;
        start-=3;
    }
    
    return input.substring(0,end)+result;
}

function removeComma(str){
    var tempstr="";
    var digit=str;
    for (var x=0;x<digit.length;x++)
    {
        if (digit.charAt(x)!=".") tempstr+=digit.charAt(x);
    }
    return tempstr;
}

function addComma(input, idElement) {
	input = removeComma(input);
	
    var start=0,end=0;
    var result="";
    start=input.length-3;
    end=input.length;
    while (start>0) {
        if (start>0 && input.substring(start-1,start)!=".")
            result="."+input.substring(start,end)+result;
        else
            result=input.substring(start,end)+result;          
        end=start;
        start-=3;
    }
    
    document.getElementById(idElement).value = input.substring(0,end)+result;;
}
</script>

            <div id="toolbar-box">
				<div class="toolbar-list" id="toolbar">
					<ul>
            			<li class="button" id="toolbar-new"><a onclick="cekuser()" class="toolbar">
							<span class="icon-32-publish"></span>Setujui</a>
						</li>
					</ul>
					<div class="clr"></div>
				</div>
				<div class='pagetitle icon-48-stats'><h2>Data Pinjaman</h2></div>
				<div class="clr"></div>
			</div>
			<div id="element-box">
               	<div class="width-100 fltlft">
                	<center>
                    <form id="user" name="user" action="../../controller/doPinjaman.php" method="post">
                    	<input id="id" name="id" value="<?php echo $pinjaman ?>" type="hidden" />
                    	<?php if ($_GET['do'] == "update") { ?>
    	                    <input id="do" name="do" type="hidden" value="setujui" />
                        <?php } ?>
                    <table class="adminlist" width="700">
                    <tbody>
                    	<tr>
							<td align="right" class="blue">Jasa </td>
                            <td>
                            	<?php echo $jasa ?> 
                            	<input id="jasa" name="jasa" type="text" size="5" maxlength="3" 
                                value="<?php echo $jasa ?>" readonly onkeypress="return harusangka(event)"/> %

                            	<input id="jasa" name="jasa" type="hidden" size="15" maxlength="50" 
                                value="<?php echo $jasa ?>" />
							</td>
							<td colspan="2">
								<input id="btn_ubah" value="Ubah" name="btn" type="button" onClick="ubahjasa()"/>
								<input id="btn_selesai" value="Selesai" name="btn" type="button" onClick="selesai()"/>
							</td>
                    	</tr>
	                    <tr>
                        	<td align="right" class="blue">Kode :</td>
                            <td>
                            	<input id="sanggota" name="sanggota" value="<?php echo $u[anggota_id] ?>" type="text" disabled />
                            	<input id="anggota" name="anggota" value="<?php echo $u[anggota_id] ?>" type="hidden" />
							</td>
							
							<td align="right" class="blue">Tanggal :</td>
                            <td>
                            	<?php echo $tgl_txt ?>
                            	<input id="tgl" name="tgl" type="hidden" size="15" maxlength="50" 
                                value="<?php echo $tgl ?>" />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Anggota :</td>
                            <td>
                            	<input id="nama" name="nama" type="text" value="<?php echo $u[anggota_nama] ?>" size="25" maxlength="50"
                            	onkeyup="suggestAnggota(this.value);" onblur="fillAnggota();" AUTOCOMPLETE="OFF" />
                            	<div class="suggestionsBox" id="suggestionsAnggota" style="display: none;">
									<img src="../../images/arrow (2).png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
									<div class="suggestionList" id="suggestionsListAnggota"> &nbsp; </div>
								</div>
							</td>
							
							<td align="right" class="blue"><span class="star">&#160;*</span> Jumlah Pinjaman :</td>
                            <td>
                            	<input id="jml_pinjam" name="jml_pinjam" value="<?php echo format_rupiah($u[pinjaman]) ?>" type="text" size="15" maxlength="8" 
                            	onkeypress="return harusangka(event)"  /> <!-- onkeyup="addComma(this.value,'jml_pinjam')" -->
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Tipe :</td>
                            <td>
								<input id="tipe" name="tipe" value="<?php echo $tipe ?>" type="text" disabled />
							</td>
							
							<td align="right" class="blue"><span class="star">&#160;*</span> Lama Anguran :</td>
                            <td>
                            	<select id="angsuran" name="angsuran">
									<option value=""></option>
									<?php for ($i=1; $i <=24; $i++) { ?>
                                	<option value="<?php echo $i ?>" <?php if($u[pinjaman_angsuran] == $i) echo "selected"; ?>><?php echo $i ?> Bulan</option>
                                	<!--<option value="12" <?php if($u[pinjaman_angsuran] == "12") echo "selected"; ?>>12 Bulan</option>
                                	<option value="18" <?php if($u[pinjaman_angsuran] == "18") echo "selected"; ?>>18 Bulan</option>
                                	<option value="24" <?php if($u[pinjaman_angsuran] == "24") echo "selected"; ?>>24 Bulan</option>-->
                                	<?php } ?>
                                </select> &nbsp;
                                <button id="btn" name="btn" type="button" onclick="hitung();">hitung</button>
							</td>
						</tr>
						<tr>
							<td align="right" class="blue">Pinjaman :</td>
							<td>
								<input id="pinjaman" name="pinjaman" value="<?php echo $pinjaman ?>" type="text" size="20" disabled />
							</td>
							
							<td align="right" class="blue">Provisi :</td>
                            <td>
                            	<input id="provisi" name="provisi" value="<?php echo format_rupiah($u[pinjaman_provisi]) ?>" type="text" size="15" maxlength="50" readonly />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Catatan :</td>
                            <td>
                            	<input id="catatan" name="catatan" value="<?php echo $u[pinjaman_catatan] ?>" type="text" size="30" maxlength="100" />
							</td>
							
							<td align="right" class="blue">Diterima :</td>
                            <td>
                            	<input id="diterima" name="diterima" value="<?php echo format_rupiah($u[pinjaman]-$u[pinjaman_provisi]) ?>" type="text" size="15" maxlength="50" readonly />
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue"/>
                            <td colspan="3">
                            	<table class="adminlist" width="100%">
                            		<thead>
                            		<tr>
										<th class="nowrap" width="20%">Pokok</th>
										<th class="nowrap" width="20%">Jasa</th>
										<th class="nowrap" width="20%">Total / Bulan</th>
										<th class="nowrap" width="20%">Masuk</th>
										<th class="nowrap" width="20%">Sisa Angsuran</th>
									</tr>
									</thead>
									<tbody>
                            		<tr>
										<td align="right"><input id="ppokok" name="ppokok" value="<?php echo format_rupiah($u[pinjaman_pokok]) ?>" type="text" size="10" disabled /></td>
										<td align="right"><input id="pjasa" name="pjasa" value="<?php echo format_rupiah($u[pinjaman_jasa]) ?>" type="text" size="10" disabled /></td>
										<td align="right"><input id="ptotal" name="ptotal" value="<?php echo format_rupiah($u[pinjaman_total]) ?>" type="text" size="10" disabled /></td>
										<td align="right"><input id="pmasuk" name="pmasuk" value="<?php echo format_rupiah($u[pinjaman_angsuran_masuk]) ?>" type="text" size="10" disabled />
											<input id="masuk" name="masuk" value="<?php echo $u[pinjaman_angsuran_masuk] ?>" type="hidden" size="10" />
										</td>
										<td align="right"><input id="psisa" name="psisa" value="<?php echo format_rupiah($u[pinjaman_angsuran_sisa]) ?>" type="text" size="10" disabled />
											<input id="sisa" name="sisa" value="<?php echo $u[pinjaman_angsuran_sisa] ?>" type="hidden" size="10" />
										</td>
									</tr>
									</tbody>
                            	</table>
							</td>
						</tr>
						<tr>
                        	<td align="right" class="blue">Simpanan :</td>
                            <td colspan="3">
                            	<input id="ssimpanan" name="ssimpanan" value="<?php echo $u[simpanan_id] ?>" type="text" disabled />
                            	<input id="simpanan" name="simpanan" value="<?php echo $u[simpanan_id] ?>" type="hidden" />
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
										<td align="right"><input id="pokok" name="pokok" value="<?php echo format_rupiah($u[simpanan_pokok]) ?>" type="text" size="10" disabled /></td>
										<td align="right"><input id="swajib" name="swajib" value="<?php echo format_rupiah($u[simpanan_wajib]) ?>" type="text" size="10" disabled /></td>
										<td align="right"><input id="ssukarela" name="ssukarela" value="<?php echo format_rupiah($u[simpanan_sukarela]) ?>" type="text" size="10" disabled /></td>
										<td align="right"><input id="shari_raya" name="shari_raya" value="<?php echo format_rupiah($u[simpanan_hari_raya]) ?>" type="text" size="10" disabled /></td>
										<td align="right"><input id="total" name="total" value="<?php echo format_rupiah($u[simpanan_total]) ?>" type="text" size="10" disabled /></td>
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
	$idt = mysql_result(mysql_query("SELECT MAX(SUBSTRING_INDEX(pinjaman_id,'-',-1)) FROM tbl_pinjaman"), 0) + 1;
	$code = "PJ-".str_pad($idt,3,"0",STR_PAD_LEFT);
	return $code;
}
?>