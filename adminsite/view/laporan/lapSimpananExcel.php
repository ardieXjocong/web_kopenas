<?php
	/***** EDIT BELOW LINES *****/
	require_once("../../config/database.inc.php");
	global $db;
	$db->conn();

	$xls_filename = 'Lap_simpanan_'.date('Y_m_d').'.xls'; // Define Excel (.xls) file name

	$sql = "SELECT s.anggota_id as 'Kode Anggota', 
								a.anggota_nama as 'Nama Anggota', 
								s.simpanan_pokok as 'Simpanan Pokok', 
								s.simpanan_wajib as 'Simpanan Wajib', 
								s.simpanan_sukarela as 'Simpanan Sukarela', 
								s.simpanan_hari_raya as 'Simpanan Hari Raya', 
								s.simpanan_total as 'Total Simpanan' 
								FROM tbl_simpanan s JOIN tbl_anggota a ON s.anggota_id = a.anggota_id";

	$result = mysql_query($sql) or die ("Failed to execute query: </br>".mysql_error()."</br>".mysql_errno());
	// Header info settings
	header("Content-Type: application/vnd.ms-excel");  //vnd.ms-excel
	header("Content-Disposition: attachment; filename=$xls_filename");
	header("Pragma: no-cache");
	header("Expires: 0");
	header('Cache-Control: max-age=0');
 

	/***** Start of Formatting for Excel *****/
	// Define separator (defines columns in excel &amp; tabs in word)
	$sep = "\t"; // tabbed character
 
	// Start of printing column names as names of MySQL fields
	for ($i = 0; $i<mysql_num_fields($result); $i++) {
	  echo mysql_field_name($result, $i) . "\t";
	}
	print("\n");
	// End of printing column names
	
	// Start while loop to get data
	while($row = mysql_fetch_row($result))
	{
	  $schema_insert = "";
	  for($j=0; $j<mysql_num_fields($result); $j++)
	  {
	    if(!isset($row[$j])) {
	      $schema_insert .= "NULL".$sep;
	    }
	    elseif ($row[$j] != "") {
	      $schema_insert .= "$row[$j]".$sep;
	    }
	    else {
	      $schema_insert .= "".$sep;
	    }
	  }
	  $schema_insert = str_replace($sep."$", "", $schema_insert);
	  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
	  $schema_insert .= "\t";
	  print(trim($schema_insert));
	  print "\n";
	}

?>
