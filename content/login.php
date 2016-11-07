<?php
ini_set('display_errors','off');
if(!empty($_SESSION['ID'])){
	echo "<script>window.location=('./')</script>";
}else{
?>
<h2>LOGIN ANGGOTA</h2><br />
<div id="error">&nbsp;</div>
<div id="wrapper">
	<div id="steps">
		<form id="loginForm" name="loginForm" action="controller/doLogin.php" method="post">
            <fieldset class="step">
            	<?php if ($_GET[msg] == "true") { ?>
            	<legend>
					<center><font size="2" color="red">Kombinasi Antara Kode Anggota dan Password tidak sesuai</font></center>
				</legend>
				<?php } elseif ($_GET[msg] == "login") { ?>
            	<legend>
					<center><font size="2" color="red">Silahkan login !!</font></center>
				</legend>
				<?php } else { echo "<br/>"; } ?>
                <p>
                <label for="username">Kode Anggota</label>
                <input id="username" name="username" />
                </p>
                <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" AUTOCOMPLETE=OFF />
                </p>
                <p class="submit">
                	<button id="registerButton" class="submit" type="submit">Login</button>
				</p>				
			</fieldset>
		</form>
	</div>
</div>
<?php } ?>