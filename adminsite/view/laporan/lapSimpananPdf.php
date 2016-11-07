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

$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];

$tipe = $_POST['tipe'];

if ($tipe == "rekap") {
	if ($_POST['anggota'] == "") {
		$anggota = "";
	} else {
		$anggota = "WHERE a.anggota_id = '".$_POST['anggota']."'";
	}
	$sql = mysql_query("SELECT * FROM tbl_simpanan s INNER JOIN tbl_anggota a ON (s.anggota_id = a.anggota_id) $anggota ORDER BY a.anggota_id");
	$row = mysql_num_rows($sql);
	if ($row > 0) {
	
		$pdf = new Cezpdf('a4','landscape');
		//Set margin dan font
		$pdf->ezSetCmMargins(4, 2, 2.5, 2);
		$pdf->selectFont('fonts/Times-Roman.afm');
	
		$all = $pdf->openObject();
	
		//Tampilkan logo
		// $pdf->setStrokeColor(0, 0, 0, 1);
		//$pdf->addJpegFromFile('logo.png',20,800,69);

		//Teks di tengah atas untuk judul
		$pdf->addText(50, 550, 14,"<b>Laporan Simpanan Anggota</b>");
		$pdf->addText(50, 530, 14,"<b>Koperasi Pegawai Istana Cipanas</b>");
		//$pdf->addText(50, 760, 12,"Periode  ".$tgl_awal."  s.d.  ".$tgl_tmp);
		//Garis atas untuk header
		$pdf->line(50, 520, 780, 520);
			
		//Garis bawah untuk footer
		$pdf->line(50, 50, 780, 50);
		//Teks kiri bawah
		$pdf->ezStartPageNumbers(780, 34, 10);
		$pdf->addText(50,34,10,'Cetak Pada : ' . date( 'd-m-Y, H:i:s'));
		$pdf->closeObject();
		//Tampilkan object di semua halaman
		$pdf->addObject($all, 'all');
		
		$i = 1;
		$total = 0;
		while($r = mysql_fetch_array($sql)){
			$total += $r['simpanan_total'];
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
			$data[$i]=array('<b>No</b>'=>$i, 
   	              // '<b>ID Simpanan</b>'=>$r['simpanan_id'],
				  '<b>Kode Anggota</b>'=>$r['anggota_id'],
				  '<b>Nama</b>'=>$r['anggota_nama'],
				  '<b>Tipe</b>'=>$tipe,
   	              '<b>Pokok</b>'=>rp($r['simpanan_pokok']), 
   	              '<b>Wajib</b>'=>rp($r['simpanan_wajib']),
   	              '<b>Sukarela</b>'=>rp($r['simpanan_sukarela']),
   	              '<b>Hari Raya</b>'=>rp($r['simpanan_hari_raya']),
   	              '<b>Total</b>'=>rp($r['simpanan_total']));
           	$i++;
		}
	
		$options = array('cols' => array(
						'<b>No</b>' => array('width'=>30, 'justification'=>'center'),
						// '<b>ID Simpanan</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Kode Anggota</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Nama</b>' => array('width'=>150, 'justification'=>'left'),
						'<b>Kategori</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Pokok</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Wajib</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Sukarela</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Hari Raya</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Total</b>' => array('width'=>75, 'justification'=>'right')
					));
	
		$pdf->ezTable($data, '', '', $options);
		$pdf->ezText('','',array('spacing'=>2));
		$pdf->ezText('Total Simpanan  : Rp. '.rp($total));

		$pdf->addText(620, 153, 12,"Cipanas, ".date('d F Y'));
		$pdf->addText(80, 135, 12,"Manager USP");
		$pdf->addText(50, 80, 12,"_____________________");
		
		$pdf->addText(670, 135, 12,"Ketua");
		$pdf->addText(620, 80, 12,"_____________________");

		
		// $pdf->ezStartPageNumbers(780, 34, 10);
		$pdf->ezStream();
		
	} else {
		echo "Laporan tidak tersedia.";
	}
} else if ($tipe == "perbulan") {
	if ($_POST['anggota'] == "") {
		$anggota = "";
	} else {
		$anggota = "AND a.anggota_id = '".$_POST['anggota']."'";
	}
	$sql = mysql_query("SELECT * FROM tbl_simpanan_detil d 
						INNER JOIN tbl_simpanan s ON (d.simpanan_id = s.simpanan_id)
						INNER JOIN tbl_anggota a ON (s.anggota_id = a.anggota_id)
						WHERE d.simpanan_detil_tgl BETWEEN '".$tgl_awal."' AND '".$tgl_akhir."' 
						$anggota ORDER BY a.anggota_id, d.simpanan_detil_tgl");
	$row = mysql_num_rows($sql);
	if ($row > 0) {
	
		$pdf = new Cezpdf('a4','landscape');
		//Set margin dan font
		$pdf->ezSetCmMargins(4, 2, 2.5, 2);
		$pdf->selectFont('fonts/Times-Roman.afm');
	
		$all = $pdf->openObject();
	
		//Tampilkan logo
		$pdf->setStrokeColor(0, 0, 0, 1);
		//$pdf->addJpegFromFile('logo.jpg',20,800,69);
	
		//Teks di tengah atas untuk judul
		$pdf->addText(50, 550, 16,"<b>Laporan Rekapitulasi Simpanan Anggota (Per Bulan)</b>");
		$pdf->addText(50, 530, 12,"Periode  ".$tgl_awal."  s.d.  ".$tgl_akhir);
		//Garis atas untuk header
		$pdf->line(50, 520, 780, 520);
			
		//Garis bawah untuk footer
		$pdf->line(50, 50, 780, 50);
		//Teks kiri bawah
		$pdf->addText(50,34,10,'Print on : ' . date( 'd-m-Y, H:i:s'));
		$pdf->closeObject();
		//Tampilkan object di semua halaman
		$pdf->addObject($all, 'all');
		
		$i = 1;
		$total = 0;
		$grand_total = 0;
		$agt = "";
		$anggota = "";
		$simpanan = "";
		while($r = mysql_fetch_array($sql)){
			if ($agt != $r[anggota_id] && $i > 1) {
				$options = array('cols' => array(
						'<b>No</b>' => array('width'=>30, 'justification'=>'center'),
						'<b>Tanggal</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Pokok</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Wajib</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Sukarela</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Hari Raya</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Total</b>' => array('width'=>75, 'justification'=>'right')
					));
	
				$pdf->ezText('Anggota  : '.$anggota);
				$pdf->ezText('Simpanan : '.$simpanan);$pdf->ezText('');
				$pdf->ezTable($data, '', '', $options);
				
				$pdf->ezText('','',array('spacing'=>1));
				$pdf->ezText('Total Simpanan  :  Rp. '.rp($total),'',array('spacing'=>1.2));
				$pdf->ezText('','',array('spacing'=>2));
			
				$i = 1;
				$total = 0;
				$data = array();
			}
			
			$total += $r['simpanan_detil_total'];
			$grand_total += $r['simpanan_detil_total'];
			
			$data[$i]=array('<b>No</b>'=>$i, 
	              '<b>Tanggal</b>'=>$r['simpanan_detil_tgl'], 
   	              '<b>Pokok</b>'=>rp($r['simpanan_detil_pokok']), 
   	              '<b>Wajib</b>'=>rp($r['simpanan_detil_wajib']),
   	              '<b>Sukarela</b>'=>rp($r['simpanan_detil_sukarela']),
   	              '<b>Hari Raya</b>'=>rp($r['simpanan_detil_hari_raya']),
   	              '<b>Total</b>'=>rp($r['simpanan_detil_total']));
   	              
           	$agt = $r[anggota_id];
           	$anggota = $r[anggota_id].' - '.$r[anggota_nama];
           	$simpanan = $r[simpanan_id];
           	$i++;
		}
	
		$options = array('cols' => array(
						'<b>No</b>' => array('width'=>30, 'justification'=>'center'),
						'<b>Tanggal</b>' => array('width'=>70, 'justification'=>'center'),
						'<b>Pokok</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Wajib</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Sukarela</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Hari Raya</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Total</b>' => array('width'=>75, 'justification'=>'right')
					));
	
		$pdf->ezText('Anggota  : '.$anggota);
		$pdf->ezText('Simpanan : '.$simpanan);$pdf->ezText('');
		$pdf->ezTable($data, '', '', $options);
		
		$pdf->ezText('','',array('spacing'=>1));
		$pdf->ezText('Total Simpanan  : Rp. '.rp($total),'',array('spacing'=>1.2));
		
		$pdf->ezText('','',array('spacing'=>1));
		$pdf->ezText('Grand Total Simpanan  :  Rp. '.rp($grand_total),'',array('spacing'=>1.2));
		$pdf->ezStream();
		
	} else {
		echo "Laporan tidak tersedia.";
	}
}
?>
