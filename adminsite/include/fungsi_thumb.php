<?php
function UploadBerita($fupload_name,$lokasi_file){
  $vdir_upload = "../../berita/";
  $vfile_upload = $vdir_upload . $fupload_name;

  move_uploaded_file($lokasi_file, $vfile_upload);
}
?>
