<?php
// koneksi ke db
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "kopenasc_kopenas";

$conn = mysql_connect($host, $user, $pass);
if ($conn){
	$open = mysql_select_db($dbname);
	if(!$open){
			die("Database tdk dpt dibuka karena".mysql_error());
	}
}else {
		die ("Server MySQL tdk terhubung karena".mysql_error());
}

// akhir koneksi

#ambil data di tabel dan masukkan ke array 
//$query = "SELECT * FROM anggota ORDER BY nama";
$query = "SELECT anggota_id, anggota_nama, anggota_tpt_lahir, anggota_tgl_lahir, anggota_alamat, anggota_telepon FROM tbl_anggota ORDER BY anggota_id";
$sql = mysql_query($query);
$data=array();
while($row=mysql_fetch_assoc($sql)){
		array_push($data,$row);
}

#setting jdul laporan dan header tabel
$judul = "Koperasi Pegawai Istana Cipanas";
$judul2 = "Laporan Anggota";

$header = array (
		array("label"=>"Kode","length"=>20, "align"=>"C"),
		array("label"=>"Nama Lengkap","length"=>35, "align"=>"C"),
		array("label"=>"Tempat Lahir","length"=>25, "align"=>"C"),
		array("label"=>"Tgl Lahir","length"=>20, "align"=>"C"),
		array("label"=>"Alamat","length"=>100, "align"=>"L"),
		array("label"=>"Kontak","length"=>25, "align"=>"C")
);

#sertakan library FPDF dan bentuk objek
require_once("fpdf/fpdf.php");
// $pdf = new FPDF();
$pdf = new FPDF('L','mm','A4');


$pdf->AddPage();

#tampilkan judul laporan 
$pdf->SetFont('Arial','B','10');
$pdf->Cell(0,20,$judul,'0',1,'L');

#buat header tabel 
$pdf->SetFont('Arial','B','10');
$pdf->SetFillColor(217,220,220);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0);
foreach ($header as $kolom){
	$pdf->Cell($kolom['length'], 7,$kolom['label'], 1, '0',$kolom['align'],false);
}
$pdf->Ln();

#tampilkan data tabelnya
$pdf->SetFont('Arial','','8');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0);
$fill=true;

//$tampil_data = []
foreach ($data as $baris) {
	$i = 0;
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0',$kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}
 
#output file PDF
$pdf->Output();
$pdf->Date();
?>