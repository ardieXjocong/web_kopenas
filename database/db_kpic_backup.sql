-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2014 at 10:07 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_kpic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(3) NOT NULL auto_increment,
  `admin_nama` varchar(50) collate latin1_general_ci NOT NULL,
  `admin_username` varchar(25) collate latin1_general_ci NOT NULL,
  `admin_password` varchar(50) collate latin1_general_ci NOT NULL,
  `admin_privileges` varchar(1) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_privileges`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `anggota_id` varchar(15) collate latin1_general_ci NOT NULL,
  `anggota_nama` varchar(50) collate latin1_general_ci NOT NULL,
  `anggota_tpt_lahir` varchar(50) collate latin1_general_ci NOT NULL,
  `anggota_tgl_lahir` date NOT NULL,
  `anggota_jk` enum('l','p') collate latin1_general_ci NOT NULL,
  `anggota_alamat` varchar(100) collate latin1_general_ci NOT NULL,
  `anggota_telepon` varchar(12) collate latin1_general_ci NOT NULL,
  `anggota_pekerjaan` varchar(25) collate latin1_general_ci NOT NULL,
  `anggota_unit_kerja` varchar(25) collate latin1_general_ci NOT NULL,
  `anggota_tipe` varchar(1) collate latin1_general_ci NOT NULL,
  `anggota_tgl_masuk` date NOT NULL,
  `anggota_password` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`anggota_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`anggota_id`, `anggota_nama`, `anggota_tpt_lahir`, `anggota_tgl_lahir`, `anggota_jk`, `anggota_alamat`, `anggota_telepon`, `anggota_pekerjaan`, `anggota_unit_kerja`, `anggota_tipe`, `anggota_tgl_masuk`, `anggota_password`) VALUES
('AG-001', 'Fahmi Fauzi', 'Tasikmalaya', '1989-09-05', 'l', 'Bandung', '123456', 'Wiraswasta', 'Bandung', '1', '2014-11-02', '827ccb0eea8a706c4c34a16891f84e7b'),
('AG-002', 'Husni', 'Tasikmalaya', '2014-11-04', 'l', 'Bandung', '13245', '23154', '1231', '3', '2014-11-04', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_angsuran`
--

CREATE TABLE `tbl_angsuran` (
  `angsuran_id` varchar(15) collate latin1_general_ci NOT NULL,
  `pinjaman_id` varchar(15) collate latin1_general_ci NOT NULL,
  `angsuran_tempo` date NOT NULL,
  `angsuran_tgl` date NOT NULL,
  `angsuran_bln_periode` int(2) NOT NULL,
  `angsuran_thn_periode` int(4) NOT NULL,
  `angsuran_ke` int(11) NOT NULL,
  `angsuran` double NOT NULL,
  `angsuran_jasa` double NOT NULL,
  `angsuran_total` double NOT NULL,
  PRIMARY KEY  (`angsuran_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_angsuran`
--

INSERT INTO `tbl_angsuran` (`angsuran_id`, `pinjaman_id`, `angsuran_tempo`, `angsuran_tgl`, `angsuran_bln_periode`, `angsuran_thn_periode`, `angsuran_ke`, `angsuran`, `angsuran_jasa`, `angsuran_total`) VALUES
('AS-021', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 20, 625000, 225000, 850000),
('AS-020', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 19, 625000, 225000, 850000),
('AS-019', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 18, 625000, 225000, 850000),
('AS-018', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 17, 625000, 225000, 850000),
('AS-017', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 16, 625000, 225000, 850000),
('AS-016', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 15, 625000, 225000, 850000),
('AS-015', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 14, 625000, 225000, 850000),
('AS-014', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 13, 625000, 225000, 850000),
('AS-013', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 12, 625000, 225000, 850000),
('AS-012', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 11, 625000, 225000, 850000),
('AS-002', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 1, 625000, 225000, 850000),
('AS-003', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 2, 625000, 225000, 850000),
('AS-004', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 3, 625000, 225000, 850000),
('AS-005', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 4, 625000, 225000, 850000),
('AS-006', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 5, 625000, 225000, 850000),
('AS-007', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 6, 625000, 225000, 850000),
('AS-008', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 7, 625000, 225000, 850000),
('AS-009', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 8, 625000, 225000, 850000),
('AS-010', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 9, 625000, 225000, 850000),
('AS-011', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 10, 625000, 225000, 850000),
('AS-022', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 21, 625000, 225000, 850000),
('AS-023', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 22, 625000, 225000, 850000),
('AS-024', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 23, 625000, 225000, 850000),
('AS-025', 'PJ-002', '2014-11-08', '2014-11-08', 11, 2014, 24, 625000, 225000, 850000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konten`
--

CREATE TABLE `tbl_konten` (
  `konten_id` int(11) NOT NULL auto_increment,
  `konten_judul` varchar(100) collate latin1_general_ci NOT NULL default ' ',
  `konten_des` text collate latin1_general_ci NOT NULL,
  `konten_tgl` varchar(25) collate latin1_general_ci NOT NULL default ' ',
  PRIMARY KEY  (`konten_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_konten`
--

INSERT INTO `tbl_konten` (`konten_id`, `konten_judul`, `konten_des`, `konten_tgl`) VALUES
(1, 'Selamat Datang', 'Selamat datang di website Koperasi Pegawai Istana Cipanas\r\n\r\nAlamat Kami :\r\nIstana Kepresidenan Cipanas Jl. Raya Cipanas Cianjur Jawa Barat', '19 Nov 2014'),
(2, 'Profil', 'Koperasi Pegawai Istana Cipanas\r\n\r\nVisi \r\n\r\n- Menjadi penyedia jasa terbaik\r\n- dst\r\n\r\nMisi\r\n\r\n- Berusaha menyediakan kebutuhan pelanggan.\r\n', '19 Nov 2014'),
(3, 'Kontak', 'Koperasi Istana Cipanas\r\n\r\nKontak :\r\n+62 22 5410837\r\n+62 22 91267386\r\n+62 81 22142163\r\n\r\nAlamat :\r\nIstana Kepresidenan Cipanas Jl. Raya Cipanas Cianjur Jawa Barat', '19 Nov 2014'),
(4, 'Tentang Koperasi', 'Koperasi adalah suatu badan usaha . . .', '19 Nov 2014');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `pemasukan_id` varchar(7) collate latin1_general_ci NOT NULL default '',
  `pemasukan_tipe` varchar(50) collate latin1_general_ci NOT NULL,
  `pemasukan_tgl` date NOT NULL,
  `pemasukan_bln_periode` int(2) NOT NULL,
  `pemasukan_thn_periode` int(4) NOT NULL,
  `pemasukan_keterangan` varchar(150) collate latin1_general_ci default NULL,
  `pemasukan_total` double NOT NULL,
  PRIMARY KEY  (`pemasukan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_pemasukan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_penarikan`
--

CREATE TABLE `tbl_penarikan` (
  `penarikan_id` varchar(15) collate latin1_general_ci NOT NULL,
  `simpanan_id` varchar(15) collate latin1_general_ci NOT NULL,
  `penarikan_tgl` date NOT NULL,
  `penarikan_total` double NOT NULL,
  `penarikan_tipe` varchar(1) collate latin1_general_ci NOT NULL,
  `penarikan_catatan` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`penarikan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_penarikan`
--

INSERT INTO `tbl_penarikan` (`penarikan_id`, `simpanan_id`, `penarikan_tgl`, `penarikan_total`, `penarikan_tipe`, `penarikan_catatan`) VALUES
('PN-002', 'SP-001', '2014-11-08', 50000, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran`
--

CREATE TABLE `tbl_pengeluaran` (
  `pengeluaran_id` varchar(7) collate latin1_general_ci NOT NULL default '',
  `pengeluaran_tipe` varchar(50) collate latin1_general_ci NOT NULL,
  `pengeluaran_tgl` date NOT NULL,
  `pengeluaran_bln_periode` int(2) NOT NULL,
  `pengeluaran_thn_periode` int(4) NOT NULL,
  `pengeluaran_keterangan` varchar(150) collate latin1_general_ci default NULL,
  `pengeluaran_total` double NOT NULL,
  PRIMARY KEY  (`pengeluaran_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_pengeluaran`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjaman`
--

CREATE TABLE `tbl_pinjaman` (
  `pinjaman_id` varchar(15) collate latin1_general_ci NOT NULL,
  `anggota_id` varchar(15) collate latin1_general_ci NOT NULL,
  `pinjaman_tgl_pengajuan` date NOT NULL,
  `pinjaman_tgl_pinjam` date NOT NULL,
  `pinjaman_jaminan_ind` varchar(1) collate latin1_general_ci NOT NULL default 'N',
  `pinjaman_jaminan` varchar(100) collate latin1_general_ci NOT NULL,
  `pinjaman_jaminan_jml` double NOT NULL,
  `pinjaman` double NOT NULL,
  `pinjaman_provisi` double NOT NULL,
  `pinjaman_angsuran` int(2) NOT NULL,
  `pinjaman_tempo` int(2) NOT NULL,
  `pinjaman_pokok` double NOT NULL,
  `pinjaman_jasa` double NOT NULL,
  `pinjaman_total` double NOT NULL,
  `pinjaman_angsuran_masuk` double NOT NULL default '0',
  `pinjaman_angsuran_sisa` double NOT NULL,
  `pinjaman_catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `pinjaman_ind` varchar(1) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`pinjaman_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_pinjaman`
--

INSERT INTO `tbl_pinjaman` (`pinjaman_id`, `anggota_id`, `pinjaman_tgl_pengajuan`, `pinjaman_tgl_pinjam`, `pinjaman_jaminan_ind`, `pinjaman_jaminan`, `pinjaman_jaminan_jml`, `pinjaman`, `pinjaman_provisi`, `pinjaman_angsuran`, `pinjaman_tempo`, `pinjaman_pokok`, `pinjaman_jasa`, `pinjaman_total`, `pinjaman_angsuran_masuk`, `pinjaman_angsuran_sisa`, `pinjaman_catatan`, `pinjaman_ind`) VALUES
('PJ-002', 'AG-001', '2014-11-08', '2014-11-08', 'N', '', 0, 15000000, 150000, 24, 8, 625000, 225000, 850000, 20400000, 0, '', 'Y'),
('PJ-004', 'AG-001', '2014-11-19', '2014-11-19', 'N', '', 0, 12000000, 120000, 6, 19, 2000000, 180000, 2180000, 0, 13080000, 'Test Pengajuan', 'T'),
('PJ-003', 'AG-002', '2014-11-19', '2014-11-19', 'N', '', 0, 15000000, 150000, 12, 19, 1250000, 225000, 1475000, 0, 17700000, 'Test Pengajuan', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_simpanan`
--

CREATE TABLE `tbl_simpanan` (
  `simpanan_id` varchar(15) collate latin1_general_ci NOT NULL,
  `anggota_id` varchar(15) collate latin1_general_ci NOT NULL,
  `simpanan_pokok` double NOT NULL default '0',
  `simpanan_wajib` double NOT NULL default '0',
  `simpanan_sukarela` double NOT NULL default '0',
  `simpanan_hari_raya` double NOT NULL default '0',
  `simpanan_total` double NOT NULL default '0',
  PRIMARY KEY  (`simpanan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_simpanan`
--

INSERT INTO `tbl_simpanan` (`simpanan_id`, `anggota_id`, `simpanan_pokok`, `simpanan_wajib`, `simpanan_sukarela`, `simpanan_hari_raya`, `simpanan_total`) VALUES
('SP-001', 'AG-001', 100000, 25000, 100000, 0, 225000),
('SP-002', 'AG-002', 100000, 15000, 0, 0, 115000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_simpanan_detil`
--

CREATE TABLE `tbl_simpanan_detil` (
  `simpanan_detil_id` int(5) NOT NULL auto_increment,
  `simpanan_id` varchar(15) collate latin1_general_ci NOT NULL,
  `simpanan_detil_tgl` date NOT NULL,
  `simpanan_detil_bln_periode` int(2) NOT NULL,
  `simpanan_detil_thn_periode` int(4) NOT NULL,
  `simpanan_detil_pokok` double default NULL,
  `simpanan_detil_wajib` double NOT NULL,
  `simpanan_detil_sukarela` double NOT NULL,
  `simpanan_detil_hari_raya` double NOT NULL,
  `simpanan_detil_total` double NOT NULL,
  PRIMARY KEY  (`simpanan_detil_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_simpanan_detil`
--

INSERT INTO `tbl_simpanan_detil` (`simpanan_detil_id`, `simpanan_id`, `simpanan_detil_tgl`, `simpanan_detil_bln_periode`, `simpanan_detil_thn_periode`, `simpanan_detil_pokok`, `simpanan_detil_wajib`, `simpanan_detil_sukarela`, `simpanan_detil_hari_raya`, `simpanan_detil_total`) VALUES
(10, 'SP-001', '2014-11-07', 11, 2014, 0, 25000, 0, 0, 25000),
(8, 'SP-002', '2014-11-06', 11, 2014, 0, 15000, 0, 0, 15000),
(11, 'SP-001', '2014-11-08', 11, 2014, 0, 0, 150000, 0, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistic`
--

CREATE TABLE `tbl_statistic` (
  `statistic_ip` varchar(20) collate latin1_general_ci NOT NULL default '',
  `statistic_date` date NOT NULL,
  `statistic_hits` int(10) NOT NULL default '1',
  `statistic_online` varchar(255) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_statistic`
--

INSERT INTO `tbl_statistic` (`statistic_ip`, `statistic_date`, `statistic_hits`, `statistic_online`) VALUES
('127.0.0.1', '2014-06-10', 206, '1402351344'),
('127.0.0.1', '2014-06-12', 3, '1402583985'),
('127.0.0.1', '2014-06-13', 92, '1402667673'),
('127.0.0.1', '2014-06-14', 90, '1402694192'),
('127.0.0.1', '2014-06-15', 110, '1402847516'),
('127.0.0.1', '2014-06-16', 28, '1402932556');
