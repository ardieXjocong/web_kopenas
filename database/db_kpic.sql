--
-- Database: `db_kpic`
--

-- CREATE DATABASE `db_kpic`;
-- USE `db_kpic`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(3) NOT NULL auto_increment,
  `admin_nama` varchar(50) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_privileges` varchar(1) NOT NULL,
  PRIMARY KEY  (`admin_id`)
);

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_privileges`) VALUES
(1, 'Administrator', 'admin', md5('admin'), 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `anggota_id` varchar(15) NOT NULL,
  `anggota_nama` varchar(50) NOT NULL,
  `anggota_tpt_lahir` varchar(50) NOT NULL,
  `anggota_tgl_lahir` date NOT NULL,
  `anggota_jk` enum('l','p') NOT NULL,
  `anggota_alamat` varchar(100) NOT NULL,
  `anggota_telepon` varchar(12) NOT NULL,
  `anggota_pekerjaan` varchar(25) NOT NULL,
  `anggota_unit_kerja` varchar(25) NOT NULL,
  `anggota_tgl_masuk` date NOT NULL,
  `anggota_password` varchar(50) NOT NULL,
  PRIMARY KEY  (`anggota_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_simpanan`
--

CREATE TABLE `tbl_simpanan` (
  `simpanan_id` varchar(15) NOT NULL,
  `anggota_id` varchar(15) NOT NULL,
  `simpanan_pokok` double NOT NULL default '0',
  `simpanan_wajib` double NOT NULL default '0',
  `simpanan_sukarela` double NOT NULL default '0',
  `simpanan_hari_raya` double NOT NULL default '0',
  `simpanan_total` double NOT NULL default '0',
  PRIMARY KEY  (`simpanan_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detil_simpanan`
--

CREATE TABLE `tbl_simpanan_detil` (
  `simpanan_detil_id` int(5) NOT NULL auto_increment,
  `simpanan_id` varchar(15) NOT NULL,
  `simpanan_detil_tgl` date NOT NULL,
  `simpanan_detil_bln_periode` int(2) NOT NULL,
  `simpanan_detil_thn_periode` int(4) NOT NULL,
  `simpanan_detil_pokok` double default NULL,
  `simpanan_detil_wajib` double NOT NULL,
  `simpanan_detil_sukarela` double NOT NULL,
  `simpanan_detil_hari_raya` double NOT NULL,
  `simpanan_detil_total` double NOT NULL,
  PRIMARY KEY  (`simpanan_detil_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penarikan`
--

CREATE TABLE `tbl_penarikan` (
  `penarikan_id` varchar(15) NOT NULL,
  `simpanan_id` varchar(15) NOT NULL,
  `penarikan_tgl` date NOT NULL,
  `penarikan_total` double NOT NULL,
  `penarikan_tipe` varchar(1) NOT NULL,
  `penarikan_catatan` varchar(100) NOT NULL,
  PRIMARY KEY  (`penarikan_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjaman`
--

CREATE TABLE `tbl_pinjaman` (
  `pinjaman_id` varchar(15) NOT NULL,
  `anggota_id` varchar(15) NOT NULL,
  `pinjaman_tgl_pengajuan` date NOT NULL,
  `pinjaman_tgl_pinjam` date NOT NULL,
  `pinjaman_jaminan_ind` varchar(1) NOT NULL default 'N',
  `pinjaman_jaminan` varchar(100) NOT NULL,
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
  `pinjaman_catatan` varchar(100) NOT NULL,
  `pinjaman_ind` varchar(1) NOT NULL,
  PRIMARY KEY  (`pinjaman_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_angsuran`
--

CREATE TABLE `tbl_angsuran` (
  `angsuran_id` varchar(15) NOT NULL,
  `pinjaman_id` varchar(15) NOT NULL,
  `angsuran_tempo` date NOT NULL,
  `angsuran_tgl` date NOT NULL,
  `angsuran_bln_periode` int(2) NOT NULL,
  `angsuran_thn_periode` int(4) NOT NULL,
  `angsuran_ke` int(11) NOT NULL,
  `angsuran` double NOT NULL,
  `angsuran_denda` double NOT NULL,
  `angsuran_total` double NOT NULL,
  PRIMARY KEY  (`angsuran_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `pemasukan_id` varchar(7) NOT NULL default '',
  `pemasukan_tipe` varchar(50) NOT NULL,
  `pemasukan_tgl` date NOT NULL,
  `pemasukan_bln_periode` int(2) NOT NULL,
  `pemasukan_thn_periode` int(4) NOT NULL,
  `pemasukan_keterangan` varchar(150) default NULL,
  `pemasukan_total` double NOT NULL,
  PRIMARY KEY  (`pemasukan_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran`
--

CREATE TABLE `tbl_pengeluaran` (
  `pengeluaran_id` varchar(7) NOT NULL default '',
  `pengeluaran_tipe` varchar(50) NOT NULL,
  `pengeluaran_tgl` date NOT NULL,
  `pengeluaran_bln_periode` int(2) NOT NULL,
  `pengeluaran_thn_periode` int(4) NOT NULL,
  `pengeluaran_keterangan` varchar(150) default NULL,
  `pengeluaran_total` double NOT NULL,
  PRIMARY KEY  (`pengeluaran_id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konten`
--

CREATE TABLE `tbl_konten` (
  `konten_id` int(11) NOT NULL auto_increment,
  `konten_judul` varchar(100) NOT NULL,
  `konten_des` text NOT NULL,
  `konten_tgl` varchar(25) NOT NULL,
  PRIMARY KEY  (`konten_id`)
);

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
-- Table structure for table `tbl_statistic`
--

CREATE TABLE `tbl_statistic` (
  `statistic_ip` varchar(20) NOT NULL default '',
  `statistic_date` date NOT NULL,
  `statistic_hits` int(10) NOT NULL default '1',
  `statistic_online` varchar(255) NOT NULL
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