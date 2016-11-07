<?php
error_reporting(0);
	session_start();
	
	include "adminsite/config/connection.php";

	$ip = $_SERVER['REMOTE_ADDR'];
	//$date = date('Y-m-d');
	$time = time();
	
	$check = mysql_query("SELECT * FROM tbl_statistic WHERE statistic_ip = '".$ip."' AND statistic_date = '".$date."'");
	if (mysql_num_rows($check) == 0) {
		mysql_query("INSERT INTO tbl_statistic (statistic_ip,statistic_date,statistic_hits,statistic_online) VALUES ('".$ip."','".$date."','1','".$time."') ");
	} else {
		mysql_query("UPDATE tbl_statistic SET statistic_hits = statistic_hits + 1 WHERE statistic_ip = '".$ip."' AND statistic_date = '".$date."'");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Koperasi Pegawai Istana Cipanas</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow">
<meta http-equiv="Copyright" content="media">
<meta name="author" content="Ardie">
<meta http-equiv="imagetoolbar" content="no">
<meta name="language" content="Indonesia">
<meta name="revisit-after" content="7">
<meta name="webcrawlers" content="all">
<meta name="rating" content="general">
<meta name="spiders" content="all">

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/logobaru.png" />

	<script type="text/javascript" src="inc/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="inc/jquery-ui-1.8.12.custom.min.js"></script>
    <script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
    <script type="text/javascript" src="inc/jquery.metadata.js"></script>
	<script type="text/javascript" src="inc/mbMenu.js"></script>
	<script type="text/javascript" src="inc/jquery.hoverIntent.js"></script>
    <script type="text/javascript" src="inc/mbContainer.js"></script>
    <script type="text/javascript" src="inc/mbScrollable.js"></script>
    <script type="text/javascript" src="inc/jquery.tipsy.js"></script>
    <script type="text/javascript" src="js/jquery.faded.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
   
	<link rel="stylesheet" type="text/css" href="css/menu_black.css" title="style"  media="screen" />
    <link rel="stylesheet" type="text/css" href="css/mbContainer.css" title="style"  media="screen"/>
    <link href="css/mb.scrollable.css" rel="stylesheet" type="text/css" />
    <link href="css/fancybox.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="themes/base/jquery.ui.all.css">
    
    <script src="inc/jquery.fancybox.js" type="text/javascript"></script>
	<script src="inc/jquery.mousewheel.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="inc/sliding.form.js"></script>
    <script type="text/javascript" src="inc/register.js"></script>

	<script type="text/javascript">
		$(function(){
			$(".myMenu").buildMenu(
			{
				template:"menuVoices.html",
				additionalData:"pippo=1",
				menuWidth:200,
				openOnRight:false,
				menuSelector: ".menuContainer",
        		containment:"wrapper",
				iconPath:"ico/",
				hasImages:true,
				fadeInTime:100,
				fadeOutTime:300,
				adjustLeft:2,
				minZindex:"auto",
				adjustTop:10,
				opacity:.95,
				shadow:true,
				closeOnMouseOut:true,
				closeAfter:1000
			});

		});


		//this function get the id of the element that fires the context menu.	
		function testForContextMenu(el){
			if (!el) el= $.mbMenu.lastContextMenuEl;
			alert("the ID of the element is:   "+$(el).attr("id"));
		}
	
		function showMessage(msg){
    		var msgBox=$("<div>").addClass("msgBox");
    		$("body").append(msgBox);
    		msgBox.append("<center>Sory, Please click on text ! ^_^</center>");
    		setTimeout(function(){msgBox.fadeOut(500,function(){msgBox.remove();})},3000)
  		}
	</script>
    
    <script type="text/javascript">
    $(function(){

      function initDock(o,docID){
        var opt= o.get(0).options;
        var docEl=$("<span>").attr("id",o.attr("id")+"_dock").css({width:opt.dockedIconDim+5,display:"inline-block"});
        var icon= $("<img>").attr("src",opt.elementsPath+"icons/"+(o.attr("icon")?o.attr("icon"):"restore.png")).css({opacity:.4,width:opt.dockedIconDim,height:opt.dockedIconDim, cursor:"pointer"});
        icon.click(function(){o.mb_iconize()});
        docEl.append(icon);
        $("#"+docID).append(docEl);
        o.attr("dock",o.attr("id")+"_dock");
      }

      function iconize(o){
        $("#"+o.attr("dock")).find("img:first").hide();
      }
      function restore(o){
        $("#"+o.attr("dock")).find("img:first").show();
      }
      function close(o){
        $("#"+o.attr("dock")).find("img:first").hide();
        $("#open").fadeIn();
      }


      $(".containerPlus").buildContainers({
        containment:"document",
        elementsPath:"elements/",
        dockedIconDim:25,
        onCreate:function(o){initDock(o,"dock")},
        onClose:function(o){close(o)},
        onRestore:function(o){restore(o)},
        onIconize:function(o){iconize(o)},
        effectDuration:300
      });
	  
	  $(".containerPlusb").buildContainers({
        containment:"document",
        elementsPath:"elements/",
        onClose:function(o){close(o)},
        onRestore:function(o){restore(o)},
        onIconize:function(o){iconize(o)},
        effectDuration:300
      });
    });
    </script>
    
    <script type="text/javascript"> 
		$(document).ready(function(){
						   
		$(".pane-list li").click(function(){
    		window.location=$(this).find("a").attr("href");return false;
		});
 
	});
		$(document).ready(function(){
						   
		$(".rootVoice").click(function(){
    		window.location=$(this).find("a").attr("href");return false;
		});
 
	});//close doc ready
	</script>
    
    <script type="text/javascript">
		$(document).ready(function() {
	
			$(".signin").click(function(e) {          
				e.preventDefault();
            	$("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
			});
		
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
		
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
		});
	</script>

	<script type='text/javascript'>
		$(function() {
			$('#forgot_username_link').tipsy({gravity: 'w'});   
    	});
	</script>
	
</head>

<body>

<div id="Frame">
	<div id="ContentFrame">
       	<div id="BorderLeft"></div>
		<div id="Header"><table border="0"><tr><td><img src="images/lambang_baru.png" height="150" style="padding:10px;" /></td><td>
        	<strong><font size="+2">KOPERASI PEGAWAI ISTANA CIPANAS</font></strong>
            <br /><br /><font size="2">Istana Kepresidenan Cipanas Jl. Raya Cipanas Cianjur Jawa Barat</font></td></tr></table></div>
        <div id="BorderRight"></div>
            
		<div id="Mainmenu">
        	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
    			<tr>
      				<td align="center" valign="bottom" style="padding-top:10px">
						<table width="685" border="0" cellpadding="0" cellspacing="0" bgcolor="#EDEDED" align="right">
          					<tr>
								<td class="myMenu" align="center">

              <!-- start horizontal menu -->
									
									<table class="rootVoices" cellspacing='0' cellpadding='0' border='0'><tr>
										<td align="center" class="rootVoice {menu: 'empty'}" >
                                        	<a href="./">Beranda</a>
										</td>
										<td align="center" class="rootVoice {menu: 'empty'}" >
                                        	<a href="./?view=profil">Profil</a>
										</td>
										<td align="center" class="rootVoice {menu: 'empty'}" >
                                        	<a href="./?view=konten">Tentang</a>
										</td>
                                        <td align="center" class="rootVoice {menu: 'empty'}" >
                                        	<a href="./?view=kontak">Kontak</a>
										</td>
										<?php
											if (!isset($_SESSION['anggota'])){
										?>
                                        <td align="center" class="rootVoice {menu: 'empty'}" >
                                        	<a href="./?view=relogin">Login</a>
										</td>
										<?php }else{ ?>
										<td align="center" class="rootVoice {menu: 'empty'}" >
											<a href="content/logout.php">Logout</a>
										</td>
										<?php } ?>

									</tr></table>

              <!-- end horizontal menu -->

								</td>
							</tr>
						</table>
					</td>
                    
					<td width="265" align="center"><div id="dock"></div>
						<!--<form id="Searchform" method="post" action="media.php?module=koleksi">
                        <div>
							<input class="searchField" type="text" name="search" maxlength="50" />
                            <input class="searchSubmit" type="submit" value="" />
						</div>
						</form>-->
					</td>
				</tr>
			</table>
        </div>
                        
		<div id="MainContent">
        	<?php include "middle.php" ?>
        </div>
            
		<div id="RightContent">
        	<?php include "right.php" ?>
        </div>
            
		<div id="Footer">
			<div class="foot_l"></div>
			<div class="foot_content">
            	<p style="padding-top:7px; color:#ccc; text-shadow:#333 1px 1px 1px;">
                	Copyright &copy; 2015 by Koperasi Pegawai Istana Cipanas<!-- | Created by:<a href="mailto:ardiansyah.160592@gmail.com"style="color:orange;size:8px;">Ardie</a>-->
            </div>
			<div class="foot_r"></div>
		</div>
	</div>
</div>

<?php include "dock.php"; ?>

</body>
</html>