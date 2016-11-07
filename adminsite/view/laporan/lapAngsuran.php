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

	$sql = mysql_query("SELECT * FROM tbl_angsuran ag
						INNER JOIN tbl_pinjaman p ON (ag.pinjaman_id = p.pinjaman_id)
						INNER JOIN tbl_anggota a ON (p.anggota_id = a.anggota_id) 
						INNER JOIN tbl_simpanan s ON (a.anggota_id = s.anggota_id) 
						WHERE ag.angsuran_id = '".$_GET['id']."'");
	$row = mysql_num_rows($sql);
	if ($row > 0) {
		

		$r = mysql_fetch_array($sql);
		$total_angsuran = $r['angsuran']+$r['angsuran_jasa'];
		if ($r[penarikan_tipe] == "1") {
			$tipep = "Wajib";
		} else if ($r[penarikan_tipe] == "2") {
			$tipep = "Sukarela";
		} else if ($r[penarikan_tipe] == "3") {
			$tipep = "Hari Raya";
		} else {
			$tipep = "";
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
			$tipe = "";
		}
		$pdf = new Cezpdf('A5','landscape');
		//Set margin dan font
		$pdf->ezSetCmMargins(7.3, 2, 2, 2);
		$pdf->selectFont('fonts/Times-Roman.afm');
	
		$all = $pdf->openObject();
	
		//Tampilkan logo
		$pdf->setStrokeColor(0, 0, 0, 1);
		//$pdf->addJpegFromFile('logo.jpg',20,800,69);
	
		//Teks di tengah atas untuk judul
		$pdf->addText(50, 375, 16,"<b>Bukti Angsuran Pinjaman</b>");
		$pdf->addText(50, 355, 12,"<b>Koperasi Pegawai Istana Cipanas</b>");


		//$pdf->addText(50, 760, 12,"Periode  ".$tgl_awal."  s.d.  ".$tgl_tmp);
		//Garis atas untuk header
		$pdf->line(50, 350, 550, 350);
		
		$pdf->addText(50, 320, 12,"Tanggal Angsuran");
		$pdf->addText(150, 320, 12,": ".$r['angsuran_tgl']);
		
		$pdf->addText(50, 305, 12,"Kode Anggota");
		$pdf->addText(150, 305, 12,": ".$r['anggota_id']);
		
		$pdf->addText(50, 290, 12,"Nama Anggota");
		$pdf->addText(150, 290, 12,": ".$r['anggota_nama'].' ('.$tipe.')');
		
		$pdf->addText(50, 275, 12,"Jumlah Angsuran");
		$pdf->addText(150, 275, 12,": Rp. ".rp($r['angsuran']).' / Jasa : Rp. '.rp($r['angsuran_jasa']));
		
		$pdf->addText(50, 260, 12,"Total Angsuran");
		$pdf->addText(150, 260, 12,": Rp. ".rp($total_angsuran));

		$pdf->addText(50, 245, 12,"Angsuran Ke-");
		$pdf->addText(150, 245, 12,": ".$r['angsuran_ke']);

		#$pdf->addText(50, 245, 12,"ID Simpanan");
		#$pdf->addText(150, 245, 12,": ".$r['simpanan_id']);
		
		$pdf->addText(50, 230, 12,"Kode Pinjaman");
		$pdf->addText(150, 230, 12,": ".$r['pinjaman_id']);
		
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
		
		$data[]=array('<b>Lama Angsuran</b>'=>$r['pinjaman_angsuran'], 
   	              '<b>Pokok</b>'=>'Rp. '.rp($r['pinjaman_pokok']),
   	              '<b>Jasa</b>'=>'Rp. '.rp($r['pinjaman_jasa']),
   	              '<b>Total Masuk</b>'=>'Rp. '.rp($r['pinjaman_angsuran_masuk']),
   	              '<b>Sisa Angsuran</b>'=>'Rp. '.rp($r['pinjaman_angsuran_sisa']));
	
		$options = array('cols' => array(
						'<b>Lama Angsuran</b>' => array('justification'=>'center'),
						'<b>Pokok</b>' => array('justification'=>'center'),
						'<b>Jasa</b>' => array('justification'=>'center'),
						'<b>Total Masuk</b>' => array('justification'=>'center'),
						'<b>Sisa Angsuran</b>' => array('justification'=>'center')
					));
	
		$pdf->ezTable($data, '', '', $options);
		
		$pdf->ezStartPageNumbers(550, 34, 10);
		$pdf->ezStream();
		
	} else {
		echo "Laporan tidak tersedia.";
	}

?>
