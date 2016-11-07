<?php
	require_once("../../config/setting.inc.php");
	require_once("../../config/config.inc.php");
	require_once("../../include/fungsi_rupiah.php");
	ini_set('display_errors','off');
	$db = new mysqli(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_TABLE);
	
	if(!$db) {
		echo 'Tidak bisa terhubung ke database.';
	} else {
		if(isset($_POST['queryString'])) {
			$queryString = $db->real_escape_string($_POST['queryString']);
			
			if(strlen($queryString) >0) {

				$query = $db->query("SELECT a.anggota_id, s.simpanan_id, a.anggota_nama, a.anggota_tipe,
									s.simpanan_pokok, s.simpanan_wajib, s.simpanan_sukarela, s.simpanan_hari_raya,
									s.simpanan_total FROM tbl_anggota a JOIN tbl_simpanan s
									ON a.anggota_id = s.anggota_id WHERE a.anggota_nama LIKE '%$queryString%' OR a.anggota_id LIKE '%$queryString%'
									OR s.simpanan_id LIKE '%$queryString%' LIMIT 10");
				if($query) {
				echo '<ul>';
					while ($result = $query ->fetch_object()) {
						if ($result->anggota_tipe == "1") {
							$tipe = "PNS";
							$wajib = SIMPANAN_WAJIB_1;
						} else if ($result->anggota_tipe == "2") {
							$tipe = "Istri Pegawai";
							$wajib = SIMPANAN_WAJIB_1;
						} else if ($result->anggota_tipe == "3") {
							$tipe = "Rekanan";
							$wajib = SIMPANAN_WAJIB_2;
						} else if ($result->anggota_tipe == "4") {
							$tipe = "Pensiunan";
							$wajib = SIMPANAN_WAJIB_2;
						} else {
							$tipe = "";
							$wajib = "";
						}
						
						$query2 = $db->query("SELECT simpanan_detil_id FROM tbl_simpanan_detil WHERE simpanan_id = '".$result->simpanan_id."'
												AND simpanan_detil_bln_periode = '".date('m')."' AND simpanan_detil_thn_periode = '".date('Y')."'");
						if (mysqli_num_rows($query2) > 0) {
							$wajib = 0;
						}
						
	         			/*echo '<li onClick="fillAnggota(\''.addslashes($result->anggota_id).'\',
	         			\''.addslashes($result->anggota_nama).'\',\''.addslashes($tipe).'\',
	         			\''.addslashes($result->simpanan_id).'\',\''.addslashes($result->simpanan_pokok).'\',
	         			\''.addslashes($result->simpanan_wajib).'\',\''.addslashes($result->simpanan_sukarela).'\',
	         			\''.addslashes($result->simpanan_hari_raya).'\',\''.addslashes($result->simpanan_total).'\');">'.$result->anggota_id.' - '.$result->anggota_nama.'</li>';*/
	         			echo '<li onClick="fillAnggota(\''.addslashes($result->anggota_id).'\',
	         			\''.addslashes($result->anggota_nama).'\',\''.addslashes($tipe).'\',
	         			\''.addslashes($result->simpanan_id).'\',\''.addslashes(format_rupiah($result->simpanan_pokok)).'\',
	         			\''.addslashes(format_rupiah($result->simpanan_wajib)).'\',\''.addslashes(format_rupiah($result->simpanan_sukarela)).'\',
	         			\''.addslashes(format_rupiah($result->simpanan_hari_raya)).'\',\''.addslashes(format_rupiah($result->simpanan_total)).'\',
	         			\''.addslashes($wajib).'\');">'.$result->anggota_id.' - '.$result->anggota_nama.'</li>';
	         		}
				echo '</ul>';
					
				} else {
					echo 'OOPS maaf, data tidak ada :(';
				}
			} else {
				// do nothing
			}
		} else {
			echo 'There should be no direct access to this script!';
		}
	}
?>