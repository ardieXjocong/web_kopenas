<?php
/*
 * HISTORY VERSIONING
 * PROGRAMMER
 * INITIAL              VERSION         DATE(YYYY-MM-DD)        CHANGE LOG
 * ========================================================================================================
 * -ARDIANSYAH           -1.0            -2016-09-15             - Merubah Angsuran Terakhir menyesuaikan dengan Sisa Angsuran nya.
*/
?>
﻿<?php
	require_once("../../config/setting.inc.php");
	require_once("../../include/fungsi_rupiah.php");
	ini_set('display_errors','off');

	$db = new mysqli(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_TABLE);
	
	if(!$db) {
		echo 'Tidak bisa terhubung ke database.';
	} else {
		if(isset($_POST['queryString'])) {
			$queryString = $db->real_escape_string($_POST['queryString']);
			
			if(strlen($queryString) >0) {

				$query = $db->query("SELECT a.anggota_id, s.pinjaman_id, a.anggota_nama, a.anggota_tipe,
									s.pinjaman_pokok, s.pinjaman_jasa, s.pinjaman_total, s.pinjaman_angsuran_masuk,
									s.pinjaman_angsuran_sisa, s.pinjaman, s.pinjaman_angsuran FROM tbl_anggota a JOIN tbl_pinjaman s
									ON a.anggota_id = s.anggota_id WHERE (a.anggota_nama LIKE '%$queryString%' OR a.anggota_id LIKE '%$queryString%'
									OR s.pinjaman_id LIKE '%$queryString%') AND s.pinjaman_ind = 'N' LIMIT 10");
				if($query) {
				echo '<ul>';
					while ($result = $query ->fetch_object()) {
						if ($result->anggota_tipe == "1") {
							$tipe = "PNS";
							$jasa = $result->pinjaman_jasa;
							$total = $result->pinjaman_pokok + $jasa;
						} else if ($result->anggota_tipe == "2") {
							$tipe = "Istri Pegawai";
							$jasa = $result->pinjaman_jasa;
							$total = $result->pinjaman_pokok + $jasa;
						} else if ($result->anggota_tipe == "3") {
							$tipe = "Rekanan";
							$jasa = $result->pinjaman_jasa;
							$total = $result->pinjaman_pokok + $jasa;
						} else if ($result->anggota_tipe == "4") {
							$tipe = "Pensiunan";
							$jasa = $result->pinjaman_jasa;
							$total = $result->pinjaman_pokok + $jasa;
						} else {
							$tipe = "";
							$jasa = "";
							$total = $result->pinjaman_pokok + $jasa;
						}
						
						$query2 = $db->query("SELECT angsuran_id FROM tbl_angsuran WHERE pinjaman_id = '".$result->pinjaman_id."'");
						$angsuran_ke = mysqli_num_rows($query2) + 1;
						
						$query3 = $db->query("SELECT angsuran_id FROM tbl_angsuran WHERE pinjaman_id = '".$result->pinjaman_id."'
								      AND angsuran_bln_periode = '".date('m')."' AND angsuran_thn_periode = '".date('Y')."'");
						if (mysqli_num_rows($query3) > 0) {
							$jasa = 0;
							$total = $result->pinjaman_pokok + $jasa;
						}						

	         			/*echo '<li onClick="fillAnggota(\''.addslashes($result->anggota_id).'\',
	         			\''.addslashes($result->anggota_nama).'\',\''.addslashes($tipe).'\',
	         			\''.addslashes($result->pinjaman_id).'\',\''.addslashes($result->pinjaman_pokok).'\',
	         			\''.addslashes($result->pinjaman_wajib).'\',\''.addslashes($result->pinjaman_sukarela).'\',
	         			\''.addslashes($result->pinjaman_hari_raya).'\',\''.addslashes($result->pinjaman_total).'\');">'.$result->anggota_id.' - '.$result->anggota_nama.'</li>';*/
	         			
	         			// V 1.0 [S]
	         			/*echo '<li onClick="fillAnggota(\''.addslashes($result->anggota_id).'\',
	         			\''.addslashes($result->anggota_nama).'\',\''.addslashes($tipe).'\',
	         			\''.addslashes($result->pinjaman_id).'\',\''.addslashes(format_rupiah($result->pinjaman_pokok)).'\',
	         			\''.addslashes(format_rupiah($result->pinjaman_jasa)).'\',\''.addslashes(format_rupiah($result->pinjaman_total)).'\',
	         			\''.addslashes(format_rupiah($result->pinjaman_angsuran_masuk)).'\',\''.addslashes(format_rupiah($result->pinjaman_angsuran_sisa)).'\',
	         			\''.addslashes(format_rupiah($result->pinjaman)).'\',\''.addslashes(format_rupiah($result->pinjaman_angsuran)).'\',
	         			\''.addslashes($result->pinjaman_pokok).'\',\''.addslashes($jasa).'\',
	         			\''.addslashes($total).'\',\''.addslashes($angsuran_ke).'\');">'.$result->pinjaman_id.' - '.$result->anggota_id.' - '.$result->anggota_nama.'</li>';
	         			*/

	         			if($angsuran_ke == $result->pinjaman_angsuran) {
							$jasa = $result->pinjaman_jasa;
							$total = $result->pinjaman_angsuran_sisa + $jasa;

							$query3 = $db->query("SELECT angsuran_id FROM tbl_angsuran WHERE pinjaman_id = '".$result->pinjaman_id."'
									      AND angsuran_bln_periode = '".date('m')."' AND angsuran_thn_periode = '".date('Y')."'");
							if (mysqli_num_rows($query3) > 0) {
								$jasa = 0;
								$total = $result->pinjaman_angsuran_sisa + $jasa;
							}
		         			echo '<li onClick="fillAnggota(\''.addslashes($result->anggota_id).'\',
		         			\''.addslashes($result->anggota_nama).'\',\''.addslashes($tipe).'\',
		         			\''.addslashes($result->pinjaman_id).'\',\''.addslashes(format_rupiah($result->pinjaman_pokok)).'\',
		         			\''.addslashes(format_rupiah($result->pinjaman_jasa)).'\',\''.addslashes(format_rupiah($result->pinjaman_total)).'\',
		         			\''.addslashes(format_rupiah($result->pinjaman_angsuran_masuk)).'\',\''.addslashes(format_rupiah($result->pinjaman_angsuran_sisa)).'\',
		         			\''.addslashes(format_rupiah($result->pinjaman)).'\',\''.addslashes(format_rupiah($result->pinjaman_angsuran)).'\',
		         			\''.addslashes($result->pinjaman_angsuran_sisa).'\',\''.addslashes($jasa).'\',
		         			\''.addslashes($total).'\',\''.addslashes($angsuran_ke).'\');">'.$result->pinjaman_id.' - '.$result->anggota_id.' - '.$result->anggota_nama.'</li>';
	         			} else {
		         			echo '<li onClick="fillAnggota(\''.addslashes($result->anggota_id).'\',
		         			\''.addslashes($result->anggota_nama).'\',\''.addslashes($tipe).'\',
		         			\''.addslashes($result->pinjaman_id).'\',\''.addslashes(format_rupiah($result->pinjaman_pokok)).'\',
		         			\''.addslashes(format_rupiah($result->pinjaman_jasa)).'\',\''.addslashes(format_rupiah($result->pinjaman_total)).'\',
		         			\''.addslashes(format_rupiah($result->pinjaman_angsuran_masuk)).'\',\''.addslashes(format_rupiah($result->pinjaman_angsuran_sisa)).'\',
		         			\''.addslashes(format_rupiah($result->pinjaman)).'\',\''.addslashes(format_rupiah($result->pinjaman_angsuran)).'\',
		         			\''.addslashes($result->pinjaman_pokok).'\',\''.addslashes($jasa).'\',
		         			\''.addslashes($total).'\',\''.addslashes($angsuran_ke).'\');">'.$result->pinjaman_id.' - '.$result->anggota_id.' - '.$result->anggota_nama.'</li>';
	         			}
	         			// V 1.0 [E]
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