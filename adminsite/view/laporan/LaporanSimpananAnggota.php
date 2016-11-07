<?php
require_once("../../config/database.inc.php");
global $db;
$db->conn();
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
date_default_timezone_set('Asia/Jakarta');

require_once 'Classes/PHPExcel.php';
require_once 'db.php';

$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

$query = mysql_query('SELECT s.anggota_id AS id, 
					a.anggota_nama AS nama, 
					s.simpanan_pokok AS pokok, 
					s.simpanan_wajib AS wajib, 
					s.simpanan_sukarela AS sukarela, 
					s.simpanan_hari_raya AS hariraya, 
					s.simpanan_total AS total
					FROM tbl_simpanan s JOIN tbl_anggota a ON s.anggota_id = a.anggota_id');

$styleArray = array(
  'borders' => array(
    'allborders' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);

function cellColor($cells,$color){
    global $objPHPExcel;
    $objPHPExcel->getActiveSheet()->getStyle($cells)->getFill()->applyFromArray(array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array(
             'rgb' => $color
        )
    ));
}

cellColor('B2', 'CCCCFF');
cellColor('C2', 'CCCCFF');
cellColor('D2', 'CCCCFF');
cellColor('E2', 'CCCCFF');
cellColor('F2', 'CCCCFF');
cellColor('G2', 'CCCCFF');
cellColor('H2', 'CCCCFF');
cellColor('I2', 'CCCCFF');

// title 
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B1:I1');
$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true)->setName('Arial')->setSize(16);
$objPHPExcel->getActiveSheet()->setCellValue('B1','Laporan Simpanan Anggota');


//set table header
$objPHPExcel->getActiveSheet()->setCellValue('B2', 'No');
$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Kode Anggota');
$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Nama Anggota');
$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Pokok');
$objPHPExcel->getActiveSheet()->setCellValue('F2', 'Wajib');
$objPHPExcel->getActiveSheet()->setCellValue('G2', 'Sukarela');
$objPHPExcel->getActiveSheet()->setCellValue('H2', 'Hari Raya');
$objPHPExcel->getActiveSheet()->setCellValue('I2', 'Total');

$objPHPExcel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('D2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('E2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('F2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('G2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('H2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('I2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('H2')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('I2')->applyFromArray($styleArray);

$i = 3;
$no= 1;
$totPokok = 0;
$totWajib = 0;
$totSukarela = 0;
$totHariRaya = 0; 
$total = 0;

while($data=mysql_fetch_array($query)){
	$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
	$objPHPExcel->getActiveSheet()->getStyle('F'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
	$objPHPExcel->getActiveSheet()->getStyle('G'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
	$objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
	$objPHPExcel->getActiveSheet()->getStyle('I'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleArray);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleArray);
	$objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleArray);
	$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleArray);
	$objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleArray);
	$objPHPExcel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleArray);	
	$objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($styleArray);	
	$objPHPExcel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($styleArray);	

	$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $no);
	$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $data['id']);
	$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $data['nama']);
	$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $data['pokok']);
	$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $data['wajib']);
	$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $data['sukarela']);
	$objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $data['hariraya']);
	$objPHPExcel->getActiveSheet()->setCellValue('I'.$i, $data['total']);
	$i++;
	$no++;
	
	$totPokok += $data['pokok'];
	$totWajib += $data['wajib'];
	$totSukarela += $data['sukarela'];
	$totHariRaya += $data['hariraya'];
	$total += $data['total'];

}
cellColor('B'.$i.':D'.$i, 'EFEEEE');
cellColor('E'.$i, 'EFEEEE');
cellColor('F'.$i, 'EFEEEE');
cellColor('G'.$i, 'EFEEEE');
cellColor('H'.$i, 'EFEEEE');
cellColor('I'.$i, 'EFEEEE');

$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B'.$i.':D'.$i);
$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, 'Total');

$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $totPokok);

$objPHPExcel->getActiveSheet()->getStyle('F'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
$objPHPExcel->getActiveSheet()->getStyle('F'.$i)->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $totWajib);

$objPHPExcel->getActiveSheet()->getStyle('G'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
$objPHPExcel->getActiveSheet()->getStyle('G'.$i)->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $totSukarela);

$objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
$objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $totHariRaya);

$objPHPExcel->getActiveSheet()->getStyle('I'.$i)->getNumberFormat()->setFormatCode('#,##0.00');
$objPHPExcel->getActiveSheet()->getStyle('I'.$i)->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->setCellValue('I'.$i, $total);

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);

$objPHPExcel->getActiveSheet()->getStyle('B2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('I2')->getFont()->setBold(true);

$objPHPExcel->setActiveSheetIndex(0);

// Add an image to the worksheet
// $objDrawing = new PHPExcel_Worksheet_Drawing();
// $objDrawing->setName('Media Kreatif Indonesia');
// $objDrawing->setDescription('Logo Media Kreatif');
// $objDrawing->setPath('images/logo.jpg');
// $objDrawing->setCoordinates('B2');
// $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

// echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
// echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;


// Echo memory peak usage
// echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
// echo date('H:i:s') , " Done writing file" , EOL;
echo 'File has been created in ' , getcwd() , EOL;
