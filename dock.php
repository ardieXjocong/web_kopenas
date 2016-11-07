<?php $sql3 = mysql_fetch_array(mysql_query("SELECT * FROM tbl_konten WHERE konten_id = '1'")); 
$deskripsi3 = nl2br($sql3['konten_des']);?>
<div id="dciii" class="containerPlus draggable {buttons:'m,i', icon:'info.png', skin:'black', width:'500',iconized:'true', dock:'dock', title:'<?php echo $sql3['konten_judul']; ?>'}" style="position:fixed;top:255px;left:440px">
    <p><?php echo $deskripsi3; ?></p>
</div>
