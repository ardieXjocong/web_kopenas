<?php 
function show_time($a) 
{
  date_default_timezone_set('Asia/Jakarta');
  $t=date("l, d F Y",$a);
  echo $t;
}
?>

<?php
if (!isset($_SESSION['anggota'])){
?>
<h2>Menu Anggota</h2>
<div id="topnav" class="topnav">Silahkan login !! &nbsp; <a href="login" class="signin"><span>Login</span></a> &nbsp; </div>

			<fieldset id="signin_menu">
    			<form method="post" id="signin" action="controller/doLogin.php">
      				<p>
                        <label for="username">Kode Anggota</label>
      					<input id="username" name="username" value="" title="username" tabindex="1" type="text" AUTOCOMPLETE="OFF">
      				</p>
      				<p>
        				<label for="password">Password</label>
        				<input id="password" name="password" value="" title="password" tabindex="2" type="password">
      				</p>
      				<p class="remember">
        				<input id="signin_submit" value="login" tabindex="6" type="submit">
      				</p>
    			</form>
  			</fieldset>
<?php }else{ ?>
<h2>Menu Anggota</h2>
<ul class="pane-list"> 
    <li><a href="./?view=simpanan">Data Simpanan</a></li>
    <li><a href="./?view=pinjaman">Data Pinjaman</a></li>
    <li><a href="./?view=cpass">Ubah Password</a></li>
    <li><a href="content/logout.php">Logout</a></li>
</ul>
<br />
<?php } ?>

<hr />
<center><?php echo show_time(time()); ?></center>
<br />
<script type="text/javascript">
	$(function() {
		$( "#datepicker" ).datepicker();
	});
</script>
<div><div id="datepicker"></div></div>