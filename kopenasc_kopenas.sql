-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Inang: localhost:3306
-- Waktu pembuatan: 08 Apr 2016 pada 00.17
-- Versi Server: 10.0.24-MariaDB
-- Versi PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `kopenasc_kopenas`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

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

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`anggota_id`, `anggota_nama`, `anggota_tpt_lahir`, `anggota_tgl_lahir`, `anggota_jk`, `anggota_alamat`, `anggota_telepon`, `anggota_pekerjaan`, `anggota_unit_kerja`, `anggota_tipe`, `anggota_tgl_masuk`, `anggota_password`) VALUES
('AG-034', 'Darsono', 'Cianjur', '1962-05-28', 'l', 'Kp. Sukasari Rt 003/014 Sindanglaya Cipanas', '', 'PNS', 'Sekretariat Presiden', '1', '2000-02-01', '9bff4b8d4dcb29e5266df8716ce34ad7'),
('AG-002', 'Suwedi', 'Jakarta', '1958-09-04', 'l', 'Kp. Cibeureum Cianjur', '', 'Pegawai Negeri Sipil', 'Istana Cipanas', '1', '2000-02-01', '6bd06d6c4f57b6b3e1c98f450702db16'),
('AG-003', 'Ahmad Juaeni', 'Cianjur', '1958-04-02', 'l', 'Komp. Pegawai Istana Cipanas', '', 'Pegawai Negeri Sipil', 'Istana Cipanas', '1', '2000-02-01', 'db2488abe918f8d0fc343d8514cf4f1d'),
('AG-004', 'Achmad Firdaus', 'Cianjur', '1965-02-14', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'f7da6674cea27cd772ad0d933ae93103'),
('AG-005', 'Hasan Sasmita', 'Cianjur ', '1961-04-29', 'l', 'Kp. Cibogo Rt 001/003 Ciwalen Sukaresmi ', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'fc3f318fba8b3c1502bece62a27712df'),
('AG-006', 'Cepi Kurniawan', 'Cianjur', '1966-02-07', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '16ca55b4f29157780eabc6244f49d442'),
('AG-007', 'Endang Suwardi', 'Cianjur', '1960-01-06', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '575598a0bc1f38cd56aa2788215ae5e1'),
('AG-008', 'Mamat Akhmad Bariji', 'Cianjur', '1962-04-17', 'l', 'Kp. Ciwalen Pasar Kawungluwuk Sukaresmi', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '24b65fcef95d94b6d41ecaa85a70e46f'),
('AG-009', 'Ade Supriyadi', 'Cianjur', '1961-11-20', 'l', 'Kp. Sindangsari Rt 001/001 Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '06793bc45269379202ab3828603d5b5c'),
('AG-010', 'Ali Sasmita', 'Cianjur', '1965-06-21', 'l', 'Kp. Belakang Kulon Rt 001/005 Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '3ccbda445fcce40d8aa046f393f256e0'),
('AG-011', 'Rodiah', 'Cianjur', '1970-04-02', 'p', 'Kp. Babakan Loji Rt 001/004 Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '3066e10f8507adb150a33725c2d74df5'),
('AG-012', 'Denden', 'Cianjur', '1966-10-01', 'l', 'Kebonjati Rt 001/013 Sukakarya Warudoyong Sukabumi', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '075a79fb221852f46c51b49f9d83204b'),
('AG-013', 'Hambali', 'Banyumas', '1963-03-03', 'l', 'Kp. SUkasari Rt 002/015 Sindanglaya Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'b54bbbb1964ccb776665f6eaf7048e69'),
('AG-014', 'Rohman', 'Sukabumi', '1961-02-04', 'l', 'Kp. Pasir Kampung Rt 006/001 Sukatani Pacet', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '2397977a0e43fb1f5ee26fe993674b5b'),
('AG-015', 'Budi', 'Cianjur', '1974-03-06', 'l', 'Komp. Pegawai Istana Cipanas ', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '00dfc53ee86af02e742515cdcf075ed3'),
('AG-016', 'Ridwan', 'Cianjur', '1976-06-20', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'd584c96e6c1ba3ca448426f66e552e8e'),
('AG-017', 'Jujun Junaedi', 'Cianjur', '1960-07-11', 'l', 'KP. Ciwalen Rt 003/009 Kawungluwuk Sukaresmi', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '3024976f3c7c53c218d415f526ceb0ce'),
('AG-018', 'Ade Casmuri', 'Cianjur', '1963-11-26', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'a6dd0fbcf80a4c66383f0036c7da4270'),
('AG-019', 'Jajat Sudrajat', 'Sukabumi', '1965-08-12', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'f26127ceb0f69dd1c92cca7a621cbba7'),
('AG-020', 'Maman Suratman ', 'Cianjur', '1969-07-03', 'l', 'KP. Babakan Loji Rt 001/014 Cipanas ', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '4828c98a78be9b97ebbd6baa591c675f'),
('AG-021', 'Mita Sudirja', 'Cianjur', '1971-01-02', 'l', 'Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '914c1ebff513143edb6814310554d761'),
('AG-022', 'Wawan Gunawan', 'Garut', '1972-01-18', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'dc96b97c4ffbead46ca25ef5d4b77cbe'),
('AG-023', 'Iwan Rudianto', 'Cianjur', '1974-08-18', 'l', 'Kp. Babakan Cisarua Rt 005/013 Sindanglaya Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '4202250233aa8d29ce9b7b89b1c656d9'),
('AG-024', 'Dedi Sutarman', 'Cianjur', '1964-12-07', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '8d410ac552b55a7ddf020c475f99296d'),
('AG-025', 'Rusmana', 'Cianjur', '1966-12-07', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'eddf5980889cc3b8cf950110c688c4a9'),
('AG-026', 'Sodikin', 'Cianjur', '1966-05-15', 'l', 'Kp. Lanbau Rt 004/008 Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '826e81fc50d0c6a67bfd0d17774366de'),
('AG-027', 'Sugimin', 'Semarang', '1958-04-20', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '5d875439195b0af8a138dbb875ebdb49'),
('AG-028', 'Ade Ruhyat', 'Cianjur', '1963-12-06', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '83d4046ee6b8fd04abbc18081faf3b5d'),
('AG-029', 'Sanusi', 'Cianjru', '1962-05-28', 'l', 'Kp. Sukasari Rt 002/015 Sindanglaya Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'd8420ee1c07a593566004a1dd88dd207'),
('AG-030', 'Badruji', 'Cianjur', '1964-10-25', 'l', 'Kp. Sindangsari Rt 001/010 Cipanas ', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'f2a66d627fed97178c10b520aa7aa833'),
('AG-031', 'Dimas Rama', 'Cianjur', '1968-09-27', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '7d49e40f4b3d8f68c19406a58303f826'),
('AG-032', 'Sri Suwarni Rasman', 'Cianjur', '1971-03-03', 'p', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '85ae124a2bb4205778691cdd08ff6323'),
('AG-033', 'Ajat Sudrajat', 'Cianjur', '1968-06-19', 'l', 'Kp. Tugaran RT 002/012 Sindanglaya Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '8c63db93243d9fdb64ffc91661f3c546'),
('AG-035', 'Endang Komarudin', 'Cianjur', '1973-07-19', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipans', '1', '2000-02-01', 'cf9a49b6e819aec9fef10c1226e22557'),
('AG-036', 'Kindi', 'Cianjur', '1963-11-05', 'l', 'Kp. Sindangsari Rt 003/011 Cipanas', '', 'PNS', 'IStana Cipanas', '1', '2000-02-01', 'cfd42c0474238dc95f5511b0c15a182d'),
('AG-037', 'M Firmansyah', 'Cianjur', '1969-06-24', 'l', 'Kp. Cinangsi Rt 001/006 Gadog Pacet', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '9d4067c68c943499069ce1870e2206aa'),
('AG-038', 'N Sasramdani', 'Cianjur', '1959-08-08', 'l', 'kp. Lanbau Rt 004/008 Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'cc8839950896aa17b3224887089241ba'),
('AG-039', 'Nurjaeni', 'Cianjur', '1966-06-09', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'd853f84ea573ac660882f5dbb16546d7'),
('AG-040', 'Dadang Suhendar', 'Cianjur', '1972-03-19', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '0037bb978d51e84d1ad5478e85430f26'),
('AG-041', 'Djenal Aripin', 'Cianjur', '1969-12-01', 'l', 'Komp. Perum Landbouw Rt 005/015 Sindanglaya Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'b41d59fbf6820910aa4d80e3657b9cd7'),
('AG-042', 'Wawan Suryana', 'Cianjur', '1972-08-05', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '4d09418a5df5af3e8b63375cfbaa2f9d'),
('AG-043', 'Suryadi', 'Cianjur', '1970-05-23', 'l', 'Kp. Cinangsi Rt 001/006 GAdog Pacet', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'b5bc52b16032f3ead952c6e396a2cb57'),
('AG-044', 'Duyeh', 'Cianjur', '1968-03-17', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '5c0baf33098e76f351aaca54116c8b32'),
('AG-045', 'Ujang Suparman', 'Cianjur', '1966-12-21', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'c959810f01adc10791f46e1b3ecab45a'),
('AG-046', 'Saepuloh', 'Cianjur', '1963-05-27', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'a542a35383067bc6fd4191019cd42fb4'),
('AG-047', 'Hedi Suyono', 'Cianjur', '1971-06-10', 'l', 'Kp. Babakan Situ Rt 002/006 Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '021206c966f42c1c4a52471a25bef194'),
('AG-048', 'Supardi', 'Cianjur', '1971-03-06', 'l', 'Komp. Pegawai Istana Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '2fd6a76423492a428c5d4e07fe756137'),
('AG-060', 'Otjah ', 'Bogor', '1932-07-14', 'p', 'Kp.Sukasari rt/rw 003/014 Des.Sindanglaya kec.Cipanas', '', 'Pensiunan', '', '4', '2000-02-01', 'a8a325036ba9be4a7878e184d784184f'),
('AG-050', 'H Udin Ismail', 'Cianjur', '1926-04-20', 'l', 'Kp. Sukasari Rt 001/015 Sindanglaya Cipanas', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', 'f3b32717d5322d7ba7c505c230785468'),
('AG-051', 'Rasyid Ridla', 'Cianjur', '1969-11-06', 'l', 'Kp. Sukasari Rt 002/015 Sindanglaya Cipanas', '', 'Petugas Taman', 'Istana Cipana', '3', '2000-02-01', '9df67b1806c8857bb4db0a63b5ed81d2'),
('AG-052', 'Siti Aminah', 'Garut', '1972-06-06', 'p', 'Komp. Pegawai Istana Cipanas', '', 'Ibu Rumah Tangga', '', '2', '2000-02-01', '90b74c589f46e8f3a484082d659308bd'),
('AG-053', 'Kakang Bahrudin', 'Cianjur', '1963-03-24', 'l', 'Kp. Sindangsari Rt 003/011 Sindanglaya Cipanas', '', 'Petugas Taman', 'Istana Cipanas', '3', '2000-02-01', 'ba07d878074e22e373dc3ad0378b12fb'),
('AG-054', 'Umar Suparman', 'Cianjur', '1939-03-18', 'l', 'Kp. Sukasari Rt 001/015 Sindanglaya Cipanas', '', 'Pensiunan', '', '4', '2000-02-01', 'b83b5b75eaa28e0100a66ebee52e1812'),
('AG-055', 'Kiki M Junaedi', 'Cianjur', '1947-10-06', 'p', 'Kp. Neglasari Rt 01/004 Cipanas', '', 'Ibu Rumah Tangga', '', '4', '2000-02-01', 'add3c3fed578a1c061379e86f14521ae'),
('AG-056', 'Emeh', 'Tasikmalaya', '1939-08-19', 'p', 'Kp. Sukasari Rt 002/014 Sindanglaya Cipanas', '', 'Ibu Rumah Tangga', '', '4', '2000-02-01', '1bbb3149ed30b7026e0f34a037dacfdb'),
('AG-057', 'Suniah Bt Ropai', 'Cianjur', '1948-06-18', 'p', 'Kp. Sukasari Rt 003/015 Sindanglaya Cipanas', '', 'Ibu rumah Tangga', '', '4', '2000-02-01', '1bbb3149ed30b7026e0f34a037dacfdb'),
('AG-058', 'Suhendi', 'Cianjur', '1977-01-10', 'l', 'Kp. Kayumanis Rt 001/006 Sukatani Pacet', '', 'Petugas Taman', 'Istana Cipanas', '3', '2000-02-01', 'f25f7395e3227ac18c5f77443587e131'),
('AG-059', 'Supendi', 'cianjur', '1959-03-29', 'l', 'KP.SINDANGSARI', '', 'cleaning service', 'Istana Cipanas', '3', '2016-02-01', '9075eadb9e6e81a912f97aa873a5deaa'),
('AG-061', 'Yadi Supriadi', 'Cianjur', '1977-10-10', 'l', 'Kp.Sukasari rt/rw 001/014', '', '', 'Istana Cipanas', '3', '2000-02-01', '1ee70f38c49d77b23dd43e990c65eabf'),
('AG-062', 'Jaenudin udin', 'Cianjur', '1979-07-19', 'l', 'Kp.Neglasari rt/rw 002/001', '', 'Outsourcing', 'Istana Cipanas ', '3', '2000-02-01', 'f4be1f3630e12f3199415109eb0214fb'),
('AG-063', 'Agus Junaedi', 'Cianjur', '1970-12-22', 'l', 'Kp.Kayumanis rt/rw 002/006 Des.Sukatani Kec.Pacet', '', 'Pegawai Taman', 'Istana Cipanas ', '3', '2000-02-01', '0eef354a4d14b7277af7d00da81ac750'),
('AG-064', 'Kurniawati Purnama Dewi ', 'Cianjur ', '1984-04-14', 'p', 'JL.Pahlawan Komp.Istana rt/rw 001/001', '', 'PNS', 'Istana Cipanas', '1', '2000-02-01', '9384dde6345533abb0321796f427f96a');

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
(1, 'Sistem Informasi Kopenas', 'Sistem Informasi Koperasi Pegawai Istana Cipanas</b> atau disingkat dengan <b>Sistem Informasi Kopenas</b> merupakan Halaman yang disediakan untuk mengelola data-data transaksi yang dilakukan oleh anggota Koperasi Pegawai Istana Cipanas \r\n\r\nSistem Informasi ini memberikan beberapa layanan kepada para anggotanya.\r\nAnggota koperasi dapat mengakses beberapa informasi meliputi\r\n', '13 Apr 2015'),
(2, 'Profil Kopenas', 'Koperasi Pegawai Istana Cipanas adalah koperasi yang didirikan di lingkungan Istana Cipanas. Pada 22 November 2000 dibentuk Koperasi Pegawai Istana Cipanas yang anggotanya Pegawai Negeri Sipil dan Tenaga Honorer Istana Cipanas dan melalui rapat anggota dibentuk kepengurusan. Koperasi Pegawai Istana Cipanas telah berbadan hukum melalui Dinkop Cianjur No. 141/BH/KDK.107/XI/2000.<br>\r\n\r\n', '13 Apr 2015'),
(3, 'Kontak Kami', 'Contact Us :\r\nSilahkan untuk menghubungi kami jika ada kesulitan\r\nkontak kami di <b> kopenas.iscip@gmail.com \r\natau melalui No.Handpone : +6281 1111 2222\r\n', '13 Apr 2015'),
(4, 'Tentang Kopenas', 'Koperasi Pegawai Istana Cipanas (KOPENAS) adalah sebuah Kperasi yang menjalankan aktivitasnya di lingkungan Istana Cipanas. Salah satu usaha yang dijalankannya adalah Usaha Simpan Pinjam\r\n', '13 Apr 2015');

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

--
-- Dumping data untuk tabel `tbl_simpanan`
--

INSERT INTO `tbl_simpanan` (`simpanan_id`, `anggota_id`, `simpanan_pokok`, `simpanan_wajib`, `simpanan_sukarela`, `simpanan_hari_raya`, `simpanan_total`) VALUES
('SP-034', 'AG-034', 100000, 2753000, 1381000, 0, 4234000),
('SP-002', 'AG-002', 100000, 25000, 10000000, 500000, 10625000),
('SP-003', 'AG-003', 100000, 0, 0, 0, 100000),
('SP-004', 'AG-004', 100000, 0, 0, 0, 100000),
('SP-005', 'AG-005', 100000, 0, 0, 0, 100000),
('SP-006', 'AG-006', 100000, 0, 0, 0, 100000),
('SP-007', 'AG-007', 100000, 0, 0, 0, 100000),
('SP-008', 'AG-008', 100000, 0, 0, 0, 100000),
('SP-009', 'AG-009', 100000, 0, 0, 0, 100000),
('SP-010', 'AG-010', 100000, 0, 0, 0, 100000),
('SP-011', 'AG-011', 100000, 0, 0, 0, 100000),
('SP-012', 'AG-012', 100000, 0, 0, 0, 100000),
('SP-013', 'AG-013', 100000, 0, 0, 0, 100000),
('SP-014', 'AG-014', 100000, 0, 0, 0, 100000),
('SP-015', 'AG-015', 100000, 0, 0, 0, 100000),
('SP-016', 'AG-016', 100000, 0, 0, 0, 100000),
('SP-017', 'AG-017', 100000, 0, 0, 0, 100000),
('SP-018', 'AG-018', 100000, 0, 0, 0, 100000),
('SP-019', 'AG-019', 100000, 0, 0, 0, 100000),
('SP-020', 'AG-020', 100000, 0, 0, 0, 100000),
('SP-021', 'AG-021', 100000, 0, 0, 0, 100000),
('SP-022', 'AG-022', 100000, 0, 0, 0, 100000),
('SP-023', 'AG-023', 100000, 0, 0, 0, 100000),
('SP-024', 'AG-024', 100000, 0, 0, 0, 100000),
('SP-025', 'AG-025', 100000, 0, 0, 0, 100000),
('SP-026', 'AG-026', 100000, 0, 0, 0, 100000),
('SP-027', 'AG-027', 100000, 0, 0, 0, 100000),
('SP-028', 'AG-028', 100000, 0, 0, 0, 100000),
('SP-029', 'AG-029', 100000, 0, 0, 0, 100000),
('SP-030', 'AG-030', 100000, 0, 0, 0, 100000),
('SP-031', 'AG-031', 100000, 0, 0, 0, 100000),
('SP-032', 'AG-032', 100000, 0, 0, 0, 100000),
('SP-033', 'AG-033', 100000, 0, 0, 0, 100000),
('SP-035', 'AG-035', 100000, 0, 0, 0, 100000),
('SP-036', 'AG-036', 100000, 0, 0, 0, 100000),
('SP-037', 'AG-037', 100000, 0, 0, 0, 100000),
('SP-038', 'AG-038', 100000, 0, 0, 0, 100000),
('SP-039', 'AG-039', 100000, 0, 0, 0, 100000),
('SP-040', 'AG-040', 100000, 0, 0, 0, 100000),
('SP-041', 'AG-041', 100000, 0, 0, 0, 100000),
('SP-042', 'AG-042', 100000, 0, 0, 0, 100000),
('SP-043', 'AG-043', 100000, 0, 0, 0, 100000),
('SP-044', 'AG-044', 100000, 0, 0, 0, 100000),
('SP-045', 'AG-045', 100000, 0, 0, 0, 100000),
('SP-046', 'AG-046', 100000, 0, 0, 0, 100000),
('SP-047', 'AG-047', 100000, 0, 0, 0, 100000),
('SP-048', 'AG-048', 100000, 0, 0, 0, 100000),
('SP-060', 'AG-060', 100000, 0, 0, 0, 100000),
('SP-050', 'AG-050', 100000, 0, 0, 0, 100000),
('SP-051', 'AG-051', 100000, 0, 0, 0, 100000),
('SP-052', 'AG-052', 100000, 0, 0, 0, 100000),
('SP-053', 'AG-053', 100000, 0, 0, 0, 100000),
('SP-054', 'AG-054', 100000, 0, 0, 0, 100000),
('SP-055', 'AG-055', 100000, 0, 0, 0, 100000),
('SP-056', 'AG-056', 100000, 0, 0, 0, 100000),
('SP-057', 'AG-057', 100000, 0, 0, 0, 100000),
('SP-058', 'AG-058', 100000, 0, 0, 0, 100000),
('SP-059', 'AG-059', 100000, 0, 0, 0, 100000),
('SP-061', 'AG-061', 100000, 0, 0, 0, 100000),
('SP-062', 'AG-062', 100000, 0, 0, 0, 100000),
('SP-063', 'AG-063', 100000, 0, 0, 0, 100000),
('SP-064', 'AG-064', 100000, 0, 0, 0, 100000);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `tbl_simpanan_detil`
--

INSERT INTO `tbl_simpanan_detil` (`simpanan_detil_id`, `simpanan_id`, `simpanan_detil_tgl`, `simpanan_detil_bln_periode`, `simpanan_detil_thn_periode`, `simpanan_detil_pokok`, `simpanan_detil_wajib`, `simpanan_detil_sukarela`, `simpanan_detil_hari_raya`, `simpanan_detil_total`) VALUES
(3, 'SP-002', '2016-04-03', 4, 2016, 0, 25000, 10000000, 500000, 10525000),
(13, 'SP-034', '2015-12-31', 4, 2016, 0, 2553000, 1281000, 0, 3834000),
(14, 'SP-034', '2016-01-02', 4, 2016, 0, 50000, 25000, 0, 75000),
(16, 'SP-034', '2016-02-02', 4, 2016, 0, 50000, 25000, 0, 75000),
(17, 'SP-034', '2016-03-02', 4, 2016, 0, 50000, 25000, 0, 75000),
(18, 'SP-034', '2016-04-05', 4, 2016, 0, 50000, 25000, 0, 75000);

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
('127.0.0.1', '2014-06-10', 206, '1402351344'),
('127.0.0.1', '2014-06-12', 3, '1402583985'),
('127.0.0.1', '2014-06-13', 92, '1402667673'),
('127.0.0.1', '2014-06-14', 90, '1402694192'),
('127.0.0.1', '2014-06-15', 110, '1402847516'),
('127.0.0.1', '2014-06-16', 28, '1402932556'),
('127.0.0.1', '2014-12-07', 13, '1418022022'),
('127.0.0.1', '2014-12-09', 81, '1418156740'),
('127.0.0.1', '2014-12-10', 86, '1418200338'),
('127.0.0.1', '2014-12-11', 56, '1418291754'),
('127.0.0.1', '2014-12-12', 2, '1418395041'),
('127.0.0.1', '2014-12-13', 8, '1418511105'),
('127.0.0.1', '2014-12-16', 30, '1418753615'),
('127.0.0.1', '2014-12-17', 12, '1418882244'),
('127.0.0.1', '2014-12-18', 16, '1418896949'),
('127.0.0.1', '2014-12-22', 9, '1419243185'),
('127.0.0.1', '2014-12-23', 4, '1419352269'),
('127.0.0.1', '2015-01-08', 44, '1420737075'),
('127.0.0.1', '2014-12-24', 15, '1419449201'),
('127.0.0.1', '2014-12-27', 4, '1419699228'),
('127.0.0.1', '2015-01-01', 6, '1420185310'),
('127.0.0.1', '2015-01-02', 27, '1420186438'),
('127.0.0.1', '2015-01-06', 32, '1420548328'),
('127.0.0.1', '2015-01-07', 5, '1420643231'),
('127.0.0.1', '2015-01-09', 4, '1420872204'),
('127.0.0.1', '2015-01-10', 3, '1420885951'),
('127.0.0.1', '2015-01-11', 10, '1421007065'),
('127.0.0.1', '2015-01-12', 24, '1421113850'),
('127.0.0.1', '2015-01-13', 21, '1421171591'),
('127.0.0.1', '2016-02-13', 9, '1455402105'),
('127.0.0.1', '2015-01-14', 4, '1421249707'),
('127.0.0.1', '2015-01-15', 12, '1421372544'),
('127.0.0.1', '2015-01-16', 23, '1421413476'),
('127.0.0.1', '2015-01-17', 5, '1421507422'),
('127.0.0.1', '2015-01-18', 3, '1421596775'),
('127.0.0.1', '2015-01-19', 10, '1421683142'),
('127.0.0.1', '2015-01-20', 2, '1421764306'),
('127.0.0.1', '2015-01-21', 2, '1421890993'),
('127.0.0.1', '2015-01-22', 4, '1421938785'),
('127.0.0.1', '2015-01-23', 1, '1422083087'),
('127.0.0.1', '2015-01-24', 4, '1422129731'),
('127.0.0.1', '2015-01-25', 3, '1422205736'),
('127.0.0.1', '2015-01-26', 6, '1422292192'),
('127.0.0.1', '2015-01-27', 1, '1422427472'),
('127.0.0.1', '2015-01-29', 2, '1422544696'),
('::1', '2015-02-08', 47, '1423372216'),
('::1', '2015-02-09', 69, '1423496613'),
('::1', '2015-02-14', 4, '1423869099'),
('::1', '2015-02-18', 9, '1424215434'),
('36.72.90.103', '2015-03-29', 15, '1427605392'),
('180.253.108.196', '2015-03-29', 23, '1427605609'),
('168.235.194.128', '2015-03-29', 15, '1427620099'),
('36.72.106.28', '2015-03-29', 1, '1427679681'),
('168.235.194.128', '2015-03-30', 1, '1427697854'),
('112.215.66.68', '2015-03-30', 1, '1427703961'),
('112.215.66.71', '2015-03-30', 2, '1427704155'),
('112.215.66.73', '2015-03-30', 3, '1427704179'),
('112.215.66.74', '2015-03-30', 2, '1427704185'),
('112.215.66.76', '2015-03-30', 2, '1427704201'),
('112.215.66.69', '2015-03-30', 1, '1427704213'),
('66.249.64.169', '2015-03-31', 1, '1427835994'),
('66.249.64.161', '2015-03-31', 2, '1427839749'),
('66.249.64.165', '2015-03-31', 1, '1427839819'),
('199.30.228.159', '2015-04-03', 1, '1428055585'),
('66.249.64.161', '2015-04-03', 1, '1428094331'),
('66.249.64.169', '2015-04-03', 1, '1428095241'),
('112.215.66.68', '2015-04-03', 1, '1428117753'),
('112.215.66.77', '2015-04-03', 1, '1428118296'),
('66.249.64.165', '2015-04-03', 1, '1428122275'),
('66.249.64.169', '2015-04-04', 3, '1428136337'),
('66.249.64.165', '2015-04-04', 1, '1428137863'),
('168.235.194.128', '2015-04-05', 1, '1428235043'),
('112.215.66.75', '2015-04-05', 12, '1428286825'),
('112.215.66.77', '2015-04-05', 8, '1428287147'),
('112.215.66.72', '2015-04-05', 2, '1428289059'),
('112.215.66.79', '2015-04-05', 9, '1428289755'),
('112.215.66.69', '2015-04-05', 12, '1428290215'),
('112.215.66.73', '2015-04-05', 12, '1428290373'),
('112.215.66.76', '2015-04-05', 7, '1428291245'),
('112.215.66.70', '2015-04-05', 9, '1428291446'),
('112.215.66.71', '2015-04-05', 8, '1428291528'),
('112.215.66.78', '2015-04-05', 6, '1428291699'),
('112.215.66.74', '2015-04-05', 7, '1428292340'),
('112.215.66.68', '2015-04-05', 4, '1428293624'),
('222.124.204.66', '2015-04-06', 32, '1428302649'),
('112.215.66.68', '2015-04-06', 1, '1428342737'),
('112.215.66.70', '2015-04-06', 5, '1428342743'),
('112.215.66.73', '2015-04-06', 2, '1428342756'),
('112.215.66.71', '2015-04-06', 4, '1428342924'),
('112.215.66.69', '2015-04-06', 5, '1428342927'),
('112.215.66.75', '2015-04-06', 3, '1428343061'),
('112.215.66.72', '2015-04-06', 2, '1428343064'),
('112.215.66.74', '2015-04-06', 4, '1428343084'),
('112.215.66.76', '2015-04-06', 3, '1428343232'),
('112.215.66.79', '2015-04-06', 3, '1428343264'),
('112.215.66.78', '2015-04-06', 1, '1428345245'),
('112.215.66.77', '2015-04-07', 4, '1428345714'),
('112.215.66.76', '2015-04-07', 3, '1428345727'),
('112.215.66.78', '2015-04-07', 7, '1428345731'),
('112.215.66.75', '2015-04-07', 2, '1428346047'),
('112.215.66.68', '2015-04-07', 3, '1428346126'),
('112.215.66.72', '2015-04-07', 5, '1428346184'),
('112.215.66.70', '2015-04-07', 1, '1428346598'),
('112.215.66.73', '2015-04-07', 1, '1428347019'),
('112.215.66.69', '2015-04-07', 1, '1428347401'),
('112.215.66.71', '2015-04-07', 1, '1428347405'),
('112.215.66.74', '2015-04-07', 1, '1428347454'),
('66.249.65.181', '2015-04-07', 1, '1428354453'),
('222.124.204.66', '2015-04-07', 87, '1428369057'),
('168.235.194.128', '2015-04-07', 2, '1428378282'),
('198.148.15.20', '2015-04-07', 1, '1428394169'),
('36.88.179.19', '2015-04-07', 3, '1428403077'),
('120.173.118.119', '2015-04-08', 4, '1428452977'),
('120.172.138.81', '2015-04-08', 4, '1428466609'),
('222.124.204.66', '2015-04-08', 15, '1428468579'),
('222.124.204.66', '2015-04-09', 1, '1428542198'),
('124.195.115.174', '2015-04-10', 9, '1428607389'),
('66.249.64.161', '2015-04-10', 1, '1428613654'),
('66.249.64.169', '2015-04-13', 1, '1428873099'),
('112.215.66.73', '2015-04-13', 1, '1428890214'),
('112.215.66.69', '2015-04-12', 1, '1428891112'),
('112.215.66.78', '2015-04-12', 1, '1428891189'),
('112.215.66.68', '2015-04-12', 1, '1428891370'),
('112.215.66.74', '2015-04-12', 1, '1428891435'),
('112.215.66.71', '2015-04-12', 1, '1428891472'),
('112.215.66.77', '0000-00-00', 6, '1428891755'),
('112.215.66.68', '0000-00-00', 6, '1428891883'),
('112.215.66.73', '0000-00-00', 8, '1428891887'),
('112.215.66.76', '0000-00-00', 5, '1428891889'),
('112.215.66.68', '0000-00-00', 6, '1428891892'),
('112.215.66.78', '0000-00-00', 4, '1428891895'),
('112.215.66.76', '0000-00-00', 5, '1428891919'),
('112.215.66.76', '0000-00-00', 5, '1428891925'),
('112.215.66.76', '0000-00-00', 5, '1428891932'),
('112.215.66.78', '0000-00-00', 4, '1428891941'),
('112.215.66.76', '0000-00-00', 5, '1428891954'),
('112.215.66.77', '0000-00-00', 6, '1428891956'),
('112.215.66.73', '0000-00-00', 8, '1428892440'),
('112.215.66.79', '0000-00-00', 7, '1428892460'),
('112.215.66.68', '0000-00-00', 6, '1428892465'),
('112.215.66.70', '0000-00-00', 7, '1428892498'),
('112.215.66.79', '0000-00-00', 7, '1428892501'),
('112.215.66.79', '0000-00-00', 7, '1428892504'),
('112.215.66.70', '0000-00-00', 7, '1428892506'),
('112.215.66.72', '0000-00-00', 5, '1428892515'),
('112.215.66.69', '0000-00-00', 8, '1428892517'),
('112.215.66.79', '0000-00-00', 7, '1428892559'),
('112.215.66.68', '0000-00-00', 6, '1428892643'),
('66.249.64.165', '0000-00-00', 1, '1428933498'),
('66.249.65.181', '0000-00-00', 1, '1428952864'),
('66.249.65.185', '0000-00-00', 1, '1428955536'),
('222.124.204.66', '0000-00-00', 1, '1428976124'),
('222.124.204.66', '0000-00-00', 1, '1428978533'),
('222.124.204.66', '0000-00-00', 1, '1428978547'),
('222.124.204.66', '0000-00-00', 1, '1428978587'),
('222.124.204.66', '0000-00-00', 1, '1428978591'),
('222.124.204.66', '0000-00-00', 1, '1428978607'),
('222.124.204.66', '0000-00-00', 1, '1428978608'),
('222.124.204.66', '0000-00-00', 1, '1428978611'),
('222.124.204.66', '0000-00-00', 1, '1428978616'),
('222.124.204.66', '0000-00-00', 1, '1428978619'),
('222.124.204.66', '0000-00-00', 1, '1428978893'),
('168.235.194.128', '0000-00-00', 1, '1428982492'),
('112.215.66.77', '0000-00-00', 6, '1428983148'),
('222.124.204.66', '0000-00-00', 1, '1428987121'),
('222.124.204.66', '0000-00-00', 1, '1428987124'),
('222.124.204.66', '0000-00-00', 1, '1428987127'),
('222.124.204.66', '0000-00-00', 1, '1428987129'),
('222.124.204.66', '0000-00-00', 1, '1428996294'),
('222.124.204.66', '0000-00-00', 1, '1428996309'),
('222.124.204.66', '0000-00-00', 1, '1429054326'),
('222.124.204.66', '0000-00-00', 1, '1429054406'),
('112.215.66.78', '0000-00-00', 4, '1429054639'),
('112.215.66.68', '0000-00-00', 6, '1429054683'),
('112.215.66.75', '0000-00-00', 8, '1429054726'),
('112.215.66.68', '0000-00-00', 6, '1429055005'),
('222.124.204.66', '0000-00-00', 1, '1429061065'),
('112.215.66.70', '0000-00-00', 7, '1429062948'),
('112.215.66.79', '0000-00-00', 7, '1429062983'),
('112.215.66.75', '0000-00-00', 8, '1429063030'),
('112.215.66.76', '0000-00-00', 5, '1429063074'),
('112.215.66.69', '0000-00-00', 8, '1429063132'),
('112.215.66.70', '0000-00-00', 7, '1429063153'),
('112.215.66.75', '0000-00-00', 8, '1429063179'),
('222.124.204.66', '0000-00-00', 1, '1429068123'),
('222.124.204.66', '0000-00-00', 1, '1429068336'),
('222.124.204.66', '0000-00-00', 1, '1429068362'),
('120.161.0.116', '0000-00-00', 1, '1429111763'),
('120.161.0.116', '0000-00-00', 1, '1429111782'),
('120.161.0.116', '0000-00-00', 1, '1429111815'),
('120.161.0.116', '0000-00-00', 1, '1429111827'),
('120.161.0.116', '0000-00-00', 1, '1429111867'),
('120.161.0.116', '0000-00-00', 1, '1429111868'),
('66.249.64.169', '0000-00-00', 1, '1429132304'),
('222.124.204.66', '0000-00-00', 1, '1429184309'),
('222.124.204.66', '0000-00-00', 1, '1429184336'),
('222.124.204.66', '0000-00-00', 1, '1429184493'),
('66.249.64.85', '0000-00-00', 1, '1429212409'),
('222.124.204.66', '0000-00-00', 1, '1429259585'),
('222.124.204.66', '0000-00-00', 1, '1429259666'),
('168.235.195.47', '0000-00-00', 1, '1429259720'),
('66.249.64.83', '0000-00-00', 1, '1429303663'),
('222.124.204.66', '0000-00-00', 1, '1429329757'),
('222.124.204.66', '0000-00-00', 1, '1429329827'),
('222.124.204.66', '0000-00-00', 1, '1429329857'),
('222.124.204.66', '0000-00-00', 1, '1429329931'),
('222.124.204.66', '0000-00-00', 1, '1429329993'),
('66.249.64.85', '0000-00-00', 1, '1429467226'),
('222.124.204.66', '0000-00-00', 1, '1429516841'),
('64.246.165.160', '0000-00-00', 1, '1429521299'),
('66.249.64.83', '0000-00-00', 1, '1429552427'),
('222.124.204.66', '0000-00-00', 1, '1429578891'),
('222.124.204.66', '0000-00-00', 1, '1429578952'),
('222.124.204.66', '0000-00-00', 1, '1429582983'),
('222.124.204.66', '0000-00-00', 1, '1429583006'),
('222.124.204.66', '0000-00-00', 1, '1429587453'),
('222.124.204.66', '0000-00-00', 1, '1429587859'),
('222.124.204.66', '0000-00-00', 1, '1429587872'),
('112.215.66.72', '0000-00-00', 5, '1429637437'),
('112.215.66.76', '0000-00-00', 5, '1429637485'),
('112.215.66.74', '0000-00-00', 5, '1429637491'),
('222.124.204.66', '0000-00-00', 1, '1430099490'),
('222.124.204.66', '0000-00-00', 1, '1430099532'),
('222.124.204.66', '0000-00-00', 1, '1430099535'),
('66.249.67.73', '0000-00-00', 1, '1430170501'),
('36.77.162.92', '0000-00-00', 1, '1430193835'),
('36.77.162.92', '0000-00-00', 1, '1430193872'),
('36.77.162.92', '0000-00-00', 1, '1430193880'),
('36.77.162.92', '0000-00-00', 1, '1430193890'),
('36.77.162.92', '0000-00-00', 1, '1430193919'),
('66.249.67.73', '0000-00-00', 1, '1430196674'),
('66.249.67.73', '0000-00-00', 1, '1430200291'),
('66.249.67.73', '0000-00-00', 1, '1430200961'),
('66.249.67.73', '0000-00-00', 1, '1430228686'),
('66.249.67.73', '0000-00-00', 1, '1430283936'),
('66.249.65.181', '0000-00-00', 1, '1430535092'),
('222.124.204.66', '0000-00-00', 1, '1430539226'),
('222.124.204.66', '0000-00-00', 1, '1430539313'),
('222.124.204.66', '0000-00-00', 1, '1430539389'),
('222.124.204.66', '0000-00-00', 1, '1430539454'),
('64.246.165.140', '0000-00-00', 1, '1430647200'),
('66.249.65.185', '0000-00-00', 1, '1430812809'),
('66.249.65.238', '0000-00-00', 1, '1431113793'),
('66.249.65.238', '0000-00-00', 1, '1431197947'),
('66.249.65.231', '0000-00-00', 1, '1431258910'),
('66.249.79.96', '0000-00-00', 1, '1431347418'),
('66.249.79.122', '0000-00-00', 1, '1431396618'),
('66.249.79.109', '0000-00-00', 1, '1431436157'),
('66.249.64.172', '0000-00-00', 1, '1431566182'),
('66.249.64.167', '0000-00-00', 1, '1431583069'),
('64.246.165.140', '0000-00-00', 1, '1431789371'),
('66.249.64.167', '0000-00-00', 1, '1431931134'),
('66.249.64.172', '0000-00-00', 1, '1432146574'),
('112.215.66.78', '0000-00-00', 4, '1432214547'),
('112.215.66.79', '0000-00-00', 7, '1432214582'),
('112.215.66.69', '0000-00-00', 8, '1432214612'),
('112.215.66.72', '0000-00-00', 5, '1432371260'),
('112.215.66.76', '0000-00-00', 5, '1432371370'),
('112.215.66.72', '0000-00-00', 5, '1432371457'),
('112.215.66.77', '0000-00-00', 6, '1432371493'),
('112.215.66.69', '0000-00-00', 8, '1432371503'),
('112.215.66.73', '0000-00-00', 8, '1432523283'),
('82.145.211.81', '0000-00-00', 1, '1432551035'),
('120.161.1.27', '0000-00-00', 1, '1432623677'),
('66.249.67.122', '0000-00-00', 1, '1432640345'),
('66.249.67.109', '0000-00-00', 1, '1432827292'),
('66.249.67.122', '0000-00-00', 1, '1432827423'),
('66.249.67.96', '0000-00-00', 1, '1432848880'),
('66.249.67.96', '0000-00-00', 1, '1432854193'),
('66.249.67.109', '0000-00-00', 1, '1432861223'),
('216.145.17.190', '0000-00-00', 1, '1432983778'),
('66.249.67.122', '0000-00-00', 1, '1433014425'),
('66.249.67.122', '0000-00-00', 1, '1433416658'),
('66.249.79.96', '0000-00-00', 1, '1433961940'),
('66.249.79.122', '0000-00-00', 1, '1433986425'),
('66.249.79.122', '0000-00-00', 1, '1434040959'),
('216.145.17.190', '0000-00-00', 1, '1434210246'),
('66.249.79.109', '0000-00-00', 1, '1434482826'),
('66.249.67.64', '0000-00-00', 1, '1434760105'),
('66.249.67.52', '0000-00-00', 1, '1434850254'),
('66.249.67.64', '0000-00-00', 1, '1435103451'),
('66.249.64.177', '0000-00-00', 1, '1435505121'),
('64.246.165.160', '0000-00-00', 1, '1435584297'),
('66.249.64.177', '0000-00-00', 1, '1435661891'),
('66.249.64.172', '0000-00-00', 1, '1435861814'),
('66.249.79.109', '0000-00-00', 1, '1436317897'),
('66.249.79.122', '0000-00-00', 1, '1436390746'),
('66.249.79.122', '0000-00-00', 1, '1436402673'),
('66.249.79.96', '0000-00-00', 1, '1436573758'),
('216.145.14.142', '0000-00-00', 2, '1436801894'),
('66.249.79.122', '0000-00-00', 1, '1436942855'),
('66.249.67.52', '0000-00-00', 1, '1437288106'),
('66.249.73.200', '0000-00-00', 1, '1437388494'),
('66.249.64.45', '0000-00-00', 1, '1437857596'),
('66.249.64.40', '0000-00-00', 1, '1437860730'),
('54.80.243.243', '0000-00-00', 1, '1438075722'),
('66.249.67.64', '0000-00-00', 1, '1438492474'),
('66.249.73.184', '0000-00-00', 1, '1438586730'),
('66.249.73.184', '0000-00-00', 1, '1438915009'),
('66.249.67.58', '0000-00-00', 1, '1439003466'),
('66.249.67.52', '0000-00-00', 1, '1439013820'),
('64.246.187.42', '0000-00-00', 1, '1440346999'),
('202.80.212.15', '0000-00-00', 1, '1440748986'),
('202.80.212.15', '0000-00-00', 1, '1440748988'),
('202.80.212.15', '0000-00-00', 1, '1440748999'),
('202.80.212.15', '0000-00-00', 1, '1440749001'),
('202.80.212.15', '0000-00-00', 1, '1440749005'),
('202.80.212.15', '0000-00-00', 1, '1440749008'),
('202.80.212.15', '0000-00-00', 1, '1440749012'),
('202.80.212.15', '0000-00-00', 1, '1440749018'),
('202.80.212.15', '0000-00-00', 1, '1440749019'),
('202.80.212.15', '0000-00-00', 1, '1440749020'),
('202.80.212.15', '0000-00-00', 1, '1440749021'),
('202.80.212.15', '0000-00-00', 1, '1440749025'),
('202.80.212.15', '0000-00-00', 1, '1440749027'),
('202.80.212.15', '0000-00-00', 1, '1440749310'),
('202.80.212.15', '0000-00-00', 1, '1440749314'),
('202.80.212.15', '0000-00-00', 1, '1440749315'),
('202.80.212.15', '0000-00-00', 1, '1440749317'),
('202.80.212.15', '0000-00-00', 1, '1440749320'),
('202.80.212.15', '0000-00-00', 1, '1440749321'),
('202.80.212.15', '0000-00-00', 1, '1440749384'),
('202.80.212.15', '0000-00-00', 1, '1440749387'),
('202.80.212.15', '0000-00-00', 1, '1440749388'),
('202.80.212.15', '0000-00-00', 1, '1440749391'),
('110.136.149.175', '0000-00-00', 23, '1440749412'),
('110.136.149.175', '0000-00-00', 23, '1440749416'),
('202.80.212.15', '0000-00-00', 1, '1440749460'),
('110.136.149.175', '0000-00-00', 23, '1440749460'),
('110.136.149.175', '0000-00-00', 23, '1440749463'),
('110.136.149.175', '0000-00-00', 23, '1440749464'),
('110.136.149.175', '0000-00-00', 23, '1440749467'),
('110.136.149.175', '0000-00-00', 23, '1440749470'),
('110.136.149.175', '0000-00-00', 23, '1440749483'),
('110.136.149.175', '0000-00-00', 23, '1440749485'),
('110.136.149.175', '0000-00-00', 23, '1440749527'),
('110.136.149.175', '0000-00-00', 23, '1440749538'),
('110.136.149.175', '0000-00-00', 23, '1440749543'),
('110.136.149.175', '0000-00-00', 23, '1440749552'),
('110.136.149.175', '0000-00-00', 23, '1440749578'),
('110.136.149.175', '0000-00-00', 23, '1440749588'),
('110.136.149.175', '0000-00-00', 23, '1440749618'),
('110.136.149.175', '0000-00-00', 23, '1440749981'),
('202.162.216.14', '0000-00-00', 1, '1440751823'),
('202.162.216.14', '0000-00-00', 1, '1440751839'),
('202.162.216.14', '0000-00-00', 1, '1440751844'),
('202.162.216.14', '0000-00-00', 1, '1440751847'),
('202.162.216.14', '0000-00-00', 1, '1440751849'),
('202.162.216.14', '0000-00-00', 1, '1440751851'),
('202.162.216.14', '0000-00-00', 1, '1440751853'),
('202.162.216.14', '0000-00-00', 1, '1440751857'),
('202.162.216.14', '0000-00-00', 1, '1440751865'),
('202.162.216.14', '0000-00-00', 1, '1440751867'),
('202.162.216.14', '0000-00-00', 1, '1440751868'),
('202.162.216.14', '0000-00-00', 1, '1440751868'),
('202.80.212.15', '0000-00-00', 1, '1440759260'),
('202.137.14.133', '0000-00-00', 1, '1440993747'),
('202.137.14.133', '0000-00-00', 1, '1440993769'),
('202.137.14.133', '0000-00-00', 1, '1440993777'),
('202.137.14.133', '0000-00-00', 1, '1440993779'),
('202.137.14.133', '0000-00-00', 1, '1440993787'),
('202.80.213.5', '0000-00-00', 1, '1440999580'),
('107.22.88.11', '0000-00-00', 1, '1441119710'),
('180.245.181.150', '0000-00-00', 6, '1452418285'),
('112.215.66.71', '0000-00-00', 5, '1452450000'),
('222.124.204.68', '0000-00-00', 29, '1452569812'),
('180.214.232.4', '0000-00-00', 7, '1452731492'),
('64.246.165.200', '0000-00-00', 1, '1453262990'),
('223.255.230.64', '0000-00-00', 2, '1453297897'),
('64.246.165.210', '0000-00-00', 2, '1454577161'),
('223.255.230.48', '0000-00-00', 1, '1456189460'),
('36.88.168.137', '0000-00-00', 1, '1456488001'),
('114.79.13.34', '0000-00-00', 4, '1456541971'),
('114.79.13.239', '0000-00-00', 1, '1456542085'),
('202.73.225.113', '0000-00-00', 1, '1456888574'),
('36.72.22.106', '0000-00-00', 6, '1459673326'),
('150.70.188.182', '0000-00-00', 1, '1459673406'),
('150.70.173.51', '0000-00-00', 1, '1459673415'),
('36.84.67.215', '0000-00-00', 1, '1459735926'),
('180.245.140.187', '0000-00-00', 1, '1459752605'),
('180.253.216.116', '0000-00-00', 3, '1459763272'),
('112.215.63.20', '0000-00-00', 1, '1459905421'),
('112.215.63.21', '0000-00-00', 1, '1459905446'),
('112.215.63.18', '0000-00-00', 1, '1459905505'),
('112.215.63.13', '0000-00-00', 1, '1459905508');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
