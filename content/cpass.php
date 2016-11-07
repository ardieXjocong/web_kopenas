<?php
ini_set('display_errors','off');
?>


<?php if(isset($_SESSION['anggota'])){ ?>
<h2>UBAH PASSWORD</h2><br />

<?php if($_GET['msg'] == "sscupd"){ ?><p align="center" style="color:#00F">Password Anda berhasil diubah.</p><?php } ?>
<div id="error"></div><br/>
<div id="wrapper">
	<div id="steps">
		<form id="cpForm" name="cpForm" action="doAct.php" method="post">
            <input type="hidden" id="mod" name="mod" value="cpass" />
            <fieldset class="step">
            	<br/>
                <p>
                <label for="passwordlm">Password Lama</label>
                <input id="passwordlm" name="passwordlm" type="password" AUTOCOMPLETE=OFF />
                </p>
                <p>
                <label for="passwordbr">Password Baru</label>
                <input id="passwordbr" name="passwordbr" type="password" AUTOCOMPLETE=OFF />
                </p>
                <p>
                <label for="passwordcbr">Konfirmasi Password Baru</label>
                <input id="passwordcbr" name="passwordcbr" type="password" AUTOCOMPLETE=OFF />
                </p>
                <p class="submit">
                	<button id="registerButton" class="submit" type="submit">Login</button>
				</p>
			</fieldset>
		</form>
	</div>
</div><center><img id="loading" src="images/loading.gif" alt="working.." /></center>

<?php } else echo "<script>window.location=('./?view=relogin&msg=login')</script>"; ?>