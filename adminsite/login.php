<?php
ini_set('display_errors','off');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Login Administrasi</title>
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/admin.png" />
    <script src="js/jquery/jquery-1.5.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <!-- <script src="js/loginValidate.js" type="text/javascript"></script> -->
    <script src="js/jquery.js" type="text/javascript"></script>
    
<script type="text/javascript">
$(document).ready(function(){
    $('#formlogin').submit(function(e) {
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
        url: "controller/doLogin.php",
        data: $('#formlogin').serialize(),
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
    
</head>
<body>
    <div id="main">
    	<div class="container">
        	<div id="header">
            	<ul id="menu">
                	<li><a href="../" title="Halaman Utama">Beranda</a></li>
                	<li><a href="../?page=about" title="Tentang Website">Profil</a></li>
                </ul>
            	<div id="logo">
                	<h1>Login Page</h1>
                    <small>Login Administrasi</small>
                </div>
            </div>
	    <center>
            <form id="formlogin" name="formlogin" action="controller/doLogin.php" method="post">
				<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="item_bor">
				<tr>
      				<td>
            			<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" background="images/logo.jpg">
						<tr>
                			<td width="15%"><img src="images/admin.png" height="85" style="padding:5px;" /></td>
                    		<td width="85%" align="left"><strong><font color="#666">LOGIN ADMINISTRASI
                    			<br/>Sistem Informasi Koperasi Pegawai Istana Cipanas</font></strong></td>
						</tr>
						</table><hr />
					</td>
    			</tr><tr>
      				<td align="center"><div id="error"></div></td>
    			</tr><tr>
        			<td>
					<center>
            			<table width="400" border="0" align="center" cellpadding="1" cellspacing="5">
						<tr>
        					<td width="30%"><strong>Username</strong></td>
							<td width="70%">: <input id="username" name="username" type="text" size="30" AUTOCOMPLETE=OFF></td>
						</tr><tr>
        					<td><strong>Password</strong></td>
							<td>: <input id="password" name="password" type="password" size="30"></td>
						</tr><tr height="22">
        					<td><strong>Login Sebagai</strong></td>
							<td>: 
                            	<select name="privileges">
									<!--<option value=""></option>-->
                                	<option value="A">Administrator</option>
                                </select><img id="loading" class="loading" src="images/loading.gif" />
                            </td>
						</tr><tr>
        					<td>&nbsp;</td>
							<td class="btn_wrapper"><br />
                            	&nbsp;
            					<button type="submit" name="Submit" value="Login">Login</button>
            					<button type="reset" name="Reset" value="Reset">Reset</button>
							</td>
						</tr>
						</table><br/>
					</center>
					</td>
				</tr>
				</table>
			</form><br/><br/>
			</center>
			
        </div>
    </div>

    <div id="footer">
    	<div class="container">
        <br><br>
			<p align="center"><font size="2">Copyright &copy; 2015 by Koperasi Pegawai Istana Cipanas <!--| Created by:<font size="2px"><a href="mailto:ardiansyah.160592@gmail.com">Ardie</a></font> !--> </p>
        </div>
    </div>
</body>
</html>