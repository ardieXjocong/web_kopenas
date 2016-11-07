<?php
	//error_reporting(0);
	session_start();
	require_once("../../config/database.inc.php");
	global $db;
	$db->conn();
	ini_set('display_errors','off');
	
	header("Content-Type: octet/stream");
  	header("Pragma: private"); 
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Cache-Control: private",false); 
	header("Content-Type: application/pdf");
	
include "class.ezpdf.php";
include "rupiah.php";

	$sql = mysql_query("SELECT * FROM tbl_penarikan p 
						INNER JOIN tbl_simpanan s ON (p.simpanan_id = s.simpanan_id) 
						INNER JOIN tbl_anggota a ON (s.anggota_id = a.anggota_id) 
						WHERE p.penarikan_id = '".$_GET['id']."'");
	$row = mysql_num_rows($sql);
	if ($row > 0) {
		$r = mysql_fetch_array($sql);
		if ($r[penarikan_tipe] == "1") {
			$tipep = "Wajib";
		} else if ($r[penarikan_tipe] == "2") {
			$tipep = "Sukarela";
		} else if ($r[penarikan_tipe] == "3") {
			$tipep = "Hari Raya";
		} else {
			$tipep = "Pokok";
		}
		if ($r[anggota_tipe] == "1") {
			$tipe = "PNS";
		} else if ($r[anggota_tipe] == "2") {
			$tipe = "Istri Pegawai";
		} else if ($r[anggota_tipe] == "3") {
			$tipe = "Rekanan";
		} else if ($r[anggota_tipe] == "4") {
			$tipe = "Pensiunan";
		} else {
			$tipe = "Pokok";
		}
		$pdf = new Cezpdf('A5','landscape');
		//Set margin dan font
		$pdf->ezSetCmMargins(6.5, 2, 2, 2);
		$pdf->selectFont('fonts/Times-Roman.afm');
	
		$all = $pdf->openObject();
	
		//Tampilkan logo
		$pdf->setStrokeColor(0, 0, 0, 1);
		//$pdf->addJpegFromFile('logo.jpg',20,800,69);
	
		//Teks di tengah atas untuk judul
		$pdf->addText(50, 375, 16,"<b>Bukti Penarikan Simpanan</b>");
		$pdf->addText(50, 355, 12,"<b>Koperasi Pegawai Istana Cipanas</b>");


		//$pdf->addText(50, 760, 12,"Periode  ".$tgl_awal."  s.d.  ".$tgl_tmp);
		//Garis atas untuk header
		$pdf->line(50, 350, 550, 350);
		
		$pdf->addText(50, 320, 12,"Tanggal Penarikan");
		$pdf->addText(150, 320, 12,": ".$r['penarikan_tgl']);
		
		$pdf->addText(50, 305, 12,"Kode Anggota");
		$pdf->addText(150, 305, 12,": ".$r['anggota_id']);
		
		$pdf->addText(50, 290, 12,"Nama Anggota");
		$pdf->addText(150, 290, 12,": ".$r['anggota_nama'].' ('.$tipe.')');
		
		$pdf->addText(50, 275, 12,"Jumlah Penarikan");
		$pdf->addText(150, 275, 12,": Rp. ".rp($r['penarikan_total']).' ('.$tipep.')');
		
		$pdf->addText(50, 260, 12,"Kode Simpanan");
		$pdf->addText(150, 260, 12,": ".$r['simpanan_id']);

		$pdf->addText(80, 135, 12,"Anggota");
		$pdf->addText(50, 80, 12,"_____________________");
		
		$pdf->addText(420, 160, 12,"Cipanas, ".date('d F Y'));
		$pdf->addText(445, 135, 12,"Manager USP");
		$pdf->addText(420, 80, 12,"_____________________");

		
		//Garis bawah untuk footer
		$pdf->line(50, 50, 550, 50);
		//Teks kiri bawah
		$pdf->addText(50,34,10,'Cetak Pada : ' . date( 'd-m-Y, H:i:s'));
		$pdf->closeObject();
		//Tampilkan object di semua halaman
		$pdf->addObject($all, 'all');
		
		$data[]=array('<b>Pokok</b>'=>'Rp. '.rp($r['simpanan_pokok']), 
   	              '<b>Wajib</b>'=>'Rp. '.rp($r['simpanan_wajib']),
   	              '<b>Sukarela</b>'=>'Rp. '.rp($r['simpanan_sukarela']),
   	              '<b>Hari Raya</b>'=>'Rp. '.rp($r['simpanan_hari_raya']),
   	              '<b>Jumlah</b>'=>'Rp. '.rp($r['simpanan_total']));
	
		$options = array('cols' => array(
						'<b>Pokok</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Wajib</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Sukarela</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Hari Raya</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Jumlah</b>' => array('width'=>75, 'justification'=>'center')
					));
	
		$pdf->ezTable($data, '', '', $options);
		
		$pdf->ezStartPageNumbers(550, 34, 10);
		$pdf->ezStream();
		
	} else {
		echo "Laporan tidak tersedia.";
	}

?>
