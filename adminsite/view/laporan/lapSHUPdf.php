<?php
	//error_reporting(0);
	session_start();
	require_once("../../config/database.inc.php");
	global $db;
	$db->conn();

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

	$sql = mysql_query("SELECT a.anggota_id, a.anggota_nama, s.simpanan_pokok, s.simpanan_wajib, s.simpanan_sukarela, s.simpanan_hari_raya, s.simpanan_total,
						COALESCE(SUM(ag.angsuran_jasa),0) as 'jasa', COALESCE(p.pinjaman_angsuran_sisa,0) as 'piutang' FROM tbl_simpanan s 
						JOIN tbl_anggota a ON (s.anggota_id = a.anggota_id) 
						LEFT JOIN tbl_pinjaman p ON (a.anggota_id = p.anggota_id AND p.pinjaman_ind = 'N') 
						LEFT JOIN tbl_angsuran ag ON (p.pinjaman_id = ag.pinjaman_id) 
						WHERE 1
						GROUP BY a.anggota_id
						ORDER BY a.anggota_id");
	$row = mysql_num_rows($sql);
	if ($row > 0) {
	
		$pdf = new Cezpdf('LEGAL','landscape');
		//Set margin dan font
		$pdf->ezSetCmMargins(4, 2, 3, 2);
		$pdf->selectFont('fonts/Times-Roman.afm');
	
		$all = $pdf->openObject();
	
		//Tampilkan logo
		$pdf->setStrokeColor(0, 0, 0, 1);
		//$pdf->addJpegFromFile('logo.jpg',20,800,69);
	
		//Teks di tengah atas untuk judul
		$pdf->addText(50, 550, 16,"<b>Laporan SHU</b>");
		//$pdf->addText(50, 760, 12,"Periode  ".$tgl_awal."  s.d.  ".$tgl_tmp);
		//Garis atas untuk header
		$pdf->line(50, 520, 980, 520);
			
		//Garis bawah untuk footer
		$pdf->line(50, 50, 980, 50);
		//Teks kiri bawah
		$pdf->addText(50,34,10,'Cetak Pada : ' . date( 'd-m-Y, H:i:s'));
		$pdf->closeObject();
		//Tampilkan object di semua halaman
		$pdf->addObject($all, 'all');
		
		$i = 1;
		$total = 0;
		$total_usp = 0;
		while($r = mysql_fetch_array($sql)){
			$total += $r['simpanan_total'];
			$total_usp += $r['jasa'];
			$shu_simpan = 0.045 * $r['simpanan_total'];
			$shu_pinjam = 0.224 * $r['jasa'];
			$shu_total = $shu_simpan + $shu_pinjam;
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
				  '<b>Kode</b>'=>$r['anggota_id'],
				  '<b>Nama</b>'=>$r['anggota_nama'],
   	              '<b>Pokok</b>'=>rp($r['simpanan_pokok']), 
   	              '<b>Wajib</b>'=>rp($r['simpanan_wajib']),
   	              '<b>Sukarela</b>'=>rp($r['simpanan_sukarela']),
   	              '<b>Hari Raya</b>'=>rp($r['simpanan_hari_raya']),
   	              '<b>Jumlah</b>'=>rp($r['simpanan_total']),
   	              '<b>Jasa USP</b>'=>rp($r['jasa']),
   	              '<b>Piutang</b>'=>rp($r['piutang']),
   	              '<b>SHU Simpanan</b>'=>rp($shu_simpan),
   	              '<b>SHU Pinjaman</b>'=>rp($shu_pinjam),
   	              '<b>SHU Diperoleh</b>'=>rp($shu_total));
           	$i++;
		}
	
		$options = array('cols' => array(
						'<b>No</b>' => array('width'=>30, 'justification'=>'center'),
						'<b>Kode</b>' => array('width'=>50, 'justification'=>'center'),
						'<b>Nama</b>' => array('width'=>100, 'justification'=>'left'),
						'<b>Pokok</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Wajib</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Sukarela</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Hari Raya</b>' => array('width'=>70, 'justification'=>'right'),
						'<b>Jumlah</b>' => array('width'=>75, 'justification'=>'right'),
						'<b>Jasa USP</b>' => array('width'=>75, 'justification'=>'right'),
						'<b>Piutang</b>' => array('width'=>75, 'justification'=>'right'),
						'<b>SHU Simpanan</b>' => array('width'=>80, 'justification'=>'right'),
						'<b>SHU Pinjaman</b>' => array('width'=>80, 'justification'=>'right'),
						'<b>SHU Diperoleh</b>' => array('width'=>80, 'justification'=>'right')
					));
	
		$pdf->ezTable($data, '', '', $options);
		
		$pdf->ezText('','',array('spacing'=>2));
		$pdf->ezText('Jumlah Total Simpanan  : Rp. '.rp($total));
		$pdf->ezText('Jumlah Total Jasa USP   : Rp. '.rp($total_usp));
		
		
		$pdf->ezStartPageNumbers(980, 34, 10);
		$pdf->ezStream();
		
	} else {
		echo "Laporan tidak tersedia.";
	}

?>
