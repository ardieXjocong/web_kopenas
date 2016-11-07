-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 15. April 2015 jam 06:17
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_kopenas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `admin_username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `admin_password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `admin_privileges` varchar(1) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_privileges`) VALUES
(1, 'Manager USP', 'managerusp', 'dc5f6d9981a3c03a2979a8b4fbce6097', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE IF NOT EXISTS `tbl_anggota` (
  `anggota_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `anggota_nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `anggota_tpt_lahir` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `anggota_tgl_lahir` date NOT NULL,
  `anggota_jk` enum('l','p') COLLATE latin1_general_ci NOT NULL,
  `anggota_alamat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `anggota_telepon` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `anggota_pekerjaan` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `anggota_unit_kerja` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `anggota_tipe` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `anggota_tgl_masuk` date NOT NULL,
  `anggota_password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`anggota_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_angsuran`
--

CREATE TABLE IF NOT EXISTS `tbl_angsuran` (
  `angsuran_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `pinjaman_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `angsuran_tempo` date NOT NULL,
  `angsuran_tgl` date NOT NULL,
  `angsuran_bln_periode` int(2) NOT NULL,
  `angsuran_thn_periode` int(4) NOT NULL,
  `angsuran_ke` int(11) NOT NULL,
  `angsuran` double NOT NULL,
  `angsuran_jasa` double NOT NULL,
  `angsuran_total` double NOT NULL,
  PRIMARY KEY (`angsuran_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konten`
--

CREATE TABLE IF NOT EXISTS `tbl_konten` (
  `konten_id` int(11) NOT NULL AUTO_INCREMENT,
  `konten_judul` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT ' ',
  `konten_des` text COLLATE latin1_general_ci NOT NULL,
  `konten_tgl` varchar(25) COLLATE latin1_general_ci NOT NULL DEFAULT ' ',
  PRIMARY KEY (`konten_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_konten`
--

INSERT INTO `tbl_konten` (`konten_id`, `konten_judul`, `konten_des`, `konten_tgl`) VALUES
(1, 'Selamat Datang', 'Sistem Informasi ini memberikan beberapa layanan kepada para anggotanya.\r\nAnggota koperasi dapat mengakses beberapa informasi meliputi\r\n', '07 Apr 2015'),
(2, 'Profil Kopenas', 'Koperasi Pegawai Istana Cipanas adalah koperasi yang didirikan di lingkungan Istana Cipanas. Pada 22 November 2000 dibentuk Koperasi Pegawai Istana Cipanas yang anggotanya Pegawai Negeri Sipil dan Tenaga Honorer Istana Cipanas dan melalui rapat anggota dibentuk kepengurusan. Koperasi Pegawai Istana Cipanas telah berbadan hukum melalui Dinkop Cianjur No. 141/BH/KDK.107/XI/2000.\r\n\r\nVisi \r\n"Menjadikan Koperasi yang handal dan terpercaya dalam menyiapkan Kader Perkoperasian dan Kewirausahaan dalam menghadapi Persaingan Global"\r\n\r\n', '07 Apr 2015'),
(3, 'Kontak', 'Contact Us :\r\nSilahkan untuk menghubungi kami jika ada kesulitan\r\nkontak kami di <b> kopenas.iscip@gmail.com </b>\r\natau melalui No.Handpone : +6281 1111 2222\r\n', '07 Apr 2015'),
(4, 'Tentang Kopenas', 'Koperasi Pegawai Istana Cipanas (KOPENAS) adalah sebuah Kperasi yang menjalankan aktivitasnya di lingkungan Istana Cipanas. Salah satu usaha yang dijalankannya adalah Usaha Simpan Pinjam\r\n', '07 Apr 2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penarikan`
--

CREATE TABLE IF NOT EXISTS `tbl_penarikan` (
  `penarikan_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `simpanan_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `penarikan_tgl` date NOT NULL,
  `penarikan_total` double NOT NULL,
  `penarikan_tipe` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `penarikan_catatan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`penarikan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjaman`
--

CREATE TABLE IF NOT EXISTS `tbl_pinjaman` (
  `pinjaman_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `anggota_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `pinjaman_tgl_pengajuan` date NOT NULL,
  `pinjaman_tgl_pinjam` date NOT NULL,
  `pinjaman` double NOT NULL,
  `pinjaman_provisi` double NOT NULL,
  `pinjaman_angsuran` int(2) NOT NULL,
  `pinjaman_tempo` int(2) NOT NULL,
  `pinjaman_pokok` double NOT NULL,
  `pinjaman_jasa` double NOT NULL,
  `pinjaman_total` double NOT NULL,
  `pinjaman_angsuran_masuk` double NOT NULL DEFAULT '0',
  `pinjaman_angsuran_sisa` double NOT NULL,
  `pinjaman_catatan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pinjaman_ind` varchar(1) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`pinjaman_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_simpanan`
--

CREATE TABLE IF NOT EXISTS `tbl_simpanan` (
  `simpanan_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `anggota_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `simpanan_pokok` double NOT NULL DEFAULT '0',
  `simpanan_wajib` double NOT NULL DEFAULT '0',
  `simpanan_sukarela` double NOT NULL DEFAULT '0',
  `simpanan_hari_raya` double NOT NULL DEFAULT '0',
  `simpanan_total` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`simpanan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_simpanan_detil`
--

CREATE TABLE IF NOT EXISTS `tbl_simpanan_detil` (
  `simpanan_detil_id` int(5) NOT NULL AUTO_INCREMENT,
  `simpanan_id` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `simpanan_detil_tgl` date NOT NULL,
  `simpanan_detil_bln_periode` int(2) NOT NULL,
  `simpanan_detil_thn_periode` int(4) NOT NULL,
  `simpanan_detil_pokok` double DEFAULT NULL,
  `simpanan_detil_wajib` double NOT NULL,
  `simpanan_detil_sukarela` double NOT NULL,
  `simpanan_detil_hari_raya` double NOT NULL,
  `simpanan_detil_total` double NOT NULL,
  PRIMARY KEY (`simpanan_detil_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_statistic`
--

CREATE TABLE IF NOT EXISTS `tbl_statistic` (
  `statistic_ip` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `statistic_date` date NOT NULL,
  `statistic_hits` int(10) NOT NULL DEFAULT '1',
  `statistic_online` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_statistic`
--

INSERT INTO `tbl_statistic` (`statistic_ip`, `statistic_date`, `statistic_hits`, `statistic_online`) VALUES
('::1', '0000-00-00', 1, '1429071382');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
