-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2018 at 08:17 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penerimaanpegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `atribut`
--

CREATE TABLE IF NOT EXISTS `atribut` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `atribut` varchar(100) NOT NULL,
  `nilai_atribut` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `atribut`
--

INSERT INTO `atribut` (`id`, `atribut`, `nilai_atribut`) VALUES
(1, 'total', 'total'),
(2, 'jenis_kelamin', 'Laki-laki'),
(3, 'jenis_kelamin', 'Perempuan'),
(4, 'nilai_kesehatan', '90'),
(5, 'nilai_kesehatan', '80'),
(6, 'nilai_kesehatan', '75'),
(7, 'nilai_wawancara', '90'),
(8, 'nilai_wawancara', '80'),
(9, 'nilai_wawancara', '75'),
(10, 'nilai_psikologi', '90'),
(11, 'nilai_psikologi', '80'),
(12, 'nilai_psikologi', '75'),
(13, 'kesehatan', 'Sehat'),
(14, 'kesehatan', 'Tidak Sehat'),
(15, 'pendidikan_terakhir', 'SMA'),
(16, 'pendidikan_terakhir', 'D3'),
(17, 'pendidikan_terakhir', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kode_calonpegawai` varchar(100) NOT NULL,
  `nama_calonpegawai` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `usia` varchar(100) NOT NULL,
  `pildep` text NOT NULL,
  `tinggi` text NOT NULL,
  `nilai_cat` varchar(100) NOT NULL,
  `nilai_psikologi` varchar(100) NOT NULL,
  `nilai_kesehatan` varchar(100) NOT NULL,
  `nilai_wawancara` varchar(100) NOT NULL,
  `pengalaman_kerja` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `kesehatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `kode_calonpegawai`, `nama_calonpegawai`, `jenis_kelamin`, `usia`, `pildep`, `tinggi`, `nilai_cat`, `nilai_psikologi`, `nilai_kesehatan`, `nilai_wawancara`, `pengalaman_kerja`, `pendidikan_terakhir`, `kesehatan`, `status`) VALUES
(1, '030', 'Vivi Syahnia', 'Perempuan', '21', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '170', '430', '80', '87', '90', 'Tidak Ada', 'SMA', 'Sehat', 'Layak'),
(2, '029', 'Untung Ari', 'Laki-laki', '27', 'Penjaga Tahanan', '169', '285', '79', '80', '80', 'CV. Indah Sejahtera', 'S1', 'Sehat', 'Tidak Layak'),
(3, '028', 'Unggul Mulia Pratama', 'Laki-laki', '22', 'Penjaga Tahanan', '165', '405', '76', '83', '91', 'Tidak Ada', 'D3', 'Sehat', 'Layak'),
(4, '027', 'Tyas Anisa', 'Perempuan', '20', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '169', '405', '80', '72', '86', 'Tidak Ada', 'SMA', 'Tidak Sehat', 'Tidak Layak'),
(5, '026', 'Trima Subhan', 'Laki-laki', '21', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '170', '410', '87', '79', '85', 'Tidak Ada', 'SMA', 'Sehat', 'Layak'),
(6, '025', 'Sukma Ani', 'Perempuan', '18', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '159', '450', '92', '87', '91', 'Tidak Ada', 'SMA', 'Sehat', 'Layak'),
(7, '024', 'Siska Anggraini', 'Perempuan', '24', 'Penjaga Tahanan', '162', '425', '83', '90', '91', 'Dinas Ketenagakerjaan', 'SMA', 'Sehat', 'Layak'),
(8, '023', 'Setia Nur Amanah', 'Perempuan', '23', 'Penjaga Tahanan', '155', '265', '80', '73', '75', 'PT. Pertamina', 'S1', 'Tidak Sehat', 'Tidak Layak'),
(9, '022', 'Nasya Arifin', 'Perempuan', '28', 'Penjaga Tahanan', '160', '395', '69', '75', '90', 'PT. Kereta Api Indonesia', 'S1', 'Sehat', 'Tidak Layak'),
(10, '021', 'Nandini Syahri', 'Perempuan', '22', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '160', '420', '87', '85', '82', 'CV. Jaya Abadi', 'D3', 'Sehat', 'Layak'),
(11, '020', 'M Hironanda', 'Laki-laki', '21', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '170', '415', '90', '87', '80', 'Tidak Ada', 'SMA', 'Sehat', 'Layak'),
(12, '019', 'M Gunawan Ginting', 'Laki-laki', '19', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '168', '410', '75', '89', '79', 'Tidak Ada', 'SMA', 'Sehat', 'Layak'),
(13, '018', 'M Fajri', 'Laki-laki', '27', 'Penjaga Tahanan', '170', '400', '80', '74', '76', 'Dinas Ketenagakerjaan', 'S1', 'Tidak Sehat', 'Tidak Layak'),
(14, '017', 'M Deni Riswanto', 'Laki-laki', '23', 'Penjaga Tahanan', '167', '395', '75', '72', '80', 'PT. Astra Motorindo', 'S1', 'Tidak Sehat', 'Tidak Layak'),
(15, '016', 'M Arief Badarudin', 'Laki-laki', '26', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '165', '380', '90', '82', '92', 'Dinas Ketenagakerjaan', 'D3', 'Sehat', 'Layak'),
(16, '015', 'Jaka Nuryadi', 'Laki-laki', '21', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '172', '265', '87', '80', '80', 'Tidak Ada', 'SMA', 'Sehat', 'Tidak Layak'),
(17, '014', 'Imam Pratama Riansyah', 'Laki-laki', '21', 'Penjaga Tahanan', '162', '300', '55', '84', '65', 'Tidak Ada', 'SMA', 'Sehat', 'Tidak Layak'),
(18, '013', 'Imam Makmur', 'Laki-laki', '21', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '166', '455', '80', '84', '87', 'Tidak Ada', 'SMA', 'Sehat', 'Layak'),
(19, '012', 'Ifasya Syarif', 'Perempuan', '24', 'Penjaga Tahanan', '165', '400', '81', '83', '92', 'CV. Indah Sejahtera', 'S1', 'Sehat', 'Layak'),
(20, '011', 'Ida Nurhayati', 'Perempuan', '22', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '159', '435', '82', '71', '90', 'Tidak Ada', 'S1', 'Tidak Sehat', 'Tidak Layak'),
(21, '010', 'Hasnur Slamet Riyanto', 'Laki-laki', '31', 'Penjaga Tahanan', '167', '460', '90', '80', '87', 'PT. Bahagia Indah', 'S1', 'Sehat', 'Layak'),
(22, '009', 'Hartati', 'Perempuan', '29', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '162', '415', '75', '79', '91', 'SMP Negeri 9 Palembang', 'S1', 'Sehat', 'Layak'),
(23, '008', 'Hanung Susmanto', 'Laki-laki', '27', 'Penjaga Tahanan', '172', '410', '70', '76', '80', 'PT. Anugerah Makmur', 'S1', 'Sehat', 'Layak'),
(24, '007', 'Hafiz Ahmad Pratama', 'Laki-laki', '30', 'Penjaga Tahanan', '168', '350', '70', '80', '71', 'PT. Anugerah Makmur', 'S1', 'Sehat', 'Layak'),
(25, '006', 'Dini Ajeng Septiani', 'Perempuan', '22', 'Penjaga Tahanan', '172', '435', '87', '66', '80', 'PT. Pertamina', 'SMA', 'Tidak Sehat', 'Tidak Layak'),
(26, '005', 'Denysa Anggraini', 'Perempuan', '21', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '158', '300', '70', '74', '70', 'PT. Kereta Api Indonesia', 'SMA', 'Tidak Sehat', 'Tidak Layak'),
(27, '004', 'Baduri', 'Laki-laki', '21', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '170', '375', '91', '65', '81', 'Tidak Ada', 'SMA', 'Tidak Sehat', 'Tidak Layak'),
(28, '003', 'Budi Listanto', 'Laki-laki', '19', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '166', '300', '75', '71', '80', 'CV. Jaya Abadi', 'SMA', 'Tidak Sehat', 'Tidak Layak'),
(29, '002', 'Arif Setiawan', 'Laki-laki', '21', 'Penjaga Tahanan', '171', '345', '80', '90', '80', 'Tidak Ada', 'D3', 'Sehat', 'Layak'),
(30, '001', 'Ahmad Setyabudi', 'Laki-laki', '25', 'Analisis Keimigrasian dan Pemeriksa Keimigrasian', '172', '295', '80', '90', '80', 'PT. Anugerah Makmur', 'S1', 'Sehat', 'Tidak Layak');

-- --------------------------------------------------------

--
-- Table structure for table `decision_tree`
--

CREATE TABLE IF NOT EXISTS `decision_tree` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `atribut` varchar(100) NOT NULL,
  `nilai_atribut` varchar(100) NOT NULL,
  `id_parent` char(3) DEFAULT NULL,
  `jml_layak` varchar(5) NOT NULL,
  `jml_tidaklayak` varchar(5) NOT NULL,
  `keputusan` varchar(100) NOT NULL,
  `diproses` varchar(10) NOT NULL,
  `kondisi_atribut` varchar(255) NOT NULL,
  `looping_kondisi` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `decision_tree`
--

INSERT INTO `decision_tree` (`id`, `atribut`, `nilai_atribut`, `id_parent`, `jml_layak`, `jml_tidaklayak`, `keputusan`, `diproses`, `kondisi_atribut`, `looping_kondisi`) VALUES
(1, 'kesehatan', 'Sehat', '0', '16', '5', '?', 'Sudah', 'AND kesehatan = ~Sehat~', 'Belum'),
(2, 'kesehatan', 'Tidak Sehat', '0', '0', '9', 'Tidak Layak', 'Belum', 'AND kesehatan = ~Tidak Sehat~', 'Belum'),
(3, 'jenis_kelamin', 'Laki-laki', '0', '10', '8', '?', 'Sudah', 'AND jenis_kelamin = ~Laki-laki~', 'Belum'),
(4, 'jenis_kelamin', 'Perempuan', '0', '6', '6', '?', 'Sudah', 'AND jenis_kelamin = ~Perempuan~', 'Belum'),
(5, 'pendidikan_terakhir', 'S1', '0', '5', '7', '?', 'Sudah', 'AND pendidikan_terakhir = ~S1~', 'Belum'),
(6, 'pendidikan_terakhir', 'SMA', '0', '7', '7', '?', 'Sudah', 'AND pendidikan_terakhir = ~SMA~', 'Belum'),
(7, 'pendidikan_terakhir', 'D3', '0', '4', '0', 'Layak', 'Belum', 'AND pendidikan_terakhir = ~D3~', 'Belum'),
(8, 'nilai_cat', '300', '0', '0', '3', 'Tidak Layak', 'Belum', 'AND nilai_cat = ~300~', 'Belum'),
(9, 'nilai_cat', '400', '0', '1', '1', '?', 'Sudah', 'AND nilai_cat = ~400~', 'Belum'),
(12, 'nilai_psikologi', '90', '0', '3', '0', 'Layak', 'Belum', 'AND nilai_psikologi = ~90~', 'Belum'),
(13, 'nilai_psikologi', '80', '0', '3', '4', '?', 'Sudah', 'AND nilai_psikologi = ~80~', 'Belum'),
(14, 'nilai_psikologi', '75', '0', '2', '2', '?', 'Sudah', 'AND nilai_psikologi = ~75~', 'Belum'),
(15, 'nilai_wawancara', '90', '0', '1', '2', '?', 'Sudah', 'AND nilai_wawancara = ~90~', 'Belum'),
(16, 'nilai_wawancara', '80', '0', '3', '6', '?', 'Sudah', 'AND nilai_wawancara = ~80~', 'Belum'),
(17, 'nilai_wawancara', '75', '0', '0', '1', 'Tidak Layak', 'Belum', 'AND nilai_wawancara = ~75~', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `iterasi_c45`
--

CREATE TABLE IF NOT EXISTS `iterasi_c45` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iterasi` varchar(3) NOT NULL,
  `atribut_gain_ratio_max` varchar(255) NOT NULL,
  `atribut` varchar(100) NOT NULL,
  `nilai_atribut` varchar(100) NOT NULL,
  `jml_kasus_total` varchar(5) NOT NULL,
  `jml_layak` varchar(5) NOT NULL,
  `jml_tdk_layak` varchar(5) NOT NULL,
  `entropy` varchar(10) NOT NULL,
  `inf_gain` varchar(10) NOT NULL,
  `split_info` varchar(10) NOT NULL,
  `gain_ratio` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `iterasi_c45`
--

INSERT INTO `iterasi_c45` (`id`, `iterasi`, `atribut_gain_ratio_max`, `atribut`, `nilai_atribut`, `jml_kasus_total`, `jml_layak`, `jml_tdk_layak`, `entropy`, `inf_gain`, `split_info`, `gain_ratio`) VALUES
(1, '1', 'nilai_kesehatan', 'Total', 'Total', '30', '16', '14', '0.9968', '', '', '0'),
(2, '2', 'nilai_kesehatan', 'jenis_kelamin', 'Laki-laki', '18', '10', '8', '0.9911', '0.0021', '0.971', '0.0022'),
(3, '3', 'nilai_kesehatan', 'jenis_kelamin', 'Perempuan', '12', '6', '6', '1', '0.0021', '0.971', '0.0022'),
(4, '4', 'nilai_kesehatan', 'nilai_kesehatan', '90', '3', '2', '1', '0.9183', '0.7716', '0.8833', '0.8735'),
(5, '5', 'nilai_kesehatan', 'nilai_kesehatan', '80', '4', '2', '2', '1', '0.7716', '0.8833', '0.8735'),
(6, '6', 'nilai_kesehatan', 'nilai_kesehatan', '75', '1', '0', '1', '0', '0.7716', '0.8833', '0.8735'),
(7, '7', 'nilai_kesehatan', 'nilai_wawancara', '90', '3', '1', '2', '0.9183', '0.6295', '1.0168', '0.6191'),
(8, '8', 'nilai_kesehatan', 'nilai_wawancara', '80', '9', '3', '6', '0.9183', '0.6295', '1.0168', '0.6191'),
(9, '9', 'nilai_kesehatan', 'nilai_wawancara', '75', '1', '0', '1', '0', '0.6295', '1.0168', '0.6191'),
(10, '10', 'nilai_kesehatan', 'nilai_psikologi', '90', '3', '3', '0', '0', '0.6336', '1.2097', '0.5238'),
(11, '11', 'nilai_kesehatan', 'nilai_psikologi', '80', '7', '3', '4', '0.9852', '0.6336', '1.2097', '0.5238'),
(12, '12', 'nilai_kesehatan', 'nilai_psikologi', '75', '4', '2', '2', '1', '0.6336', '1.2097', '0.5238'),
(13, '13', 'nilai_kesehatan', 'kesehatan', 'Sehat', '21', '16', '5', '0.7919', '0.4425', '0.8813', '0.5021'),
(14, '14', 'nilai_kesehatan', 'kesehatan', 'Tidak Sehat', '9', '0', '9', '0', '0.4425', '0.8813', '0.5021'),
(15, '15', 'nilai_kesehatan', 'pendidikan_terakhir', 'SMA', '14', '7', '7', '1', '0.1382', '1.4295', '0.0967'),
(16, '16', 'nilai_kesehatan', 'pendidikan_terakhir', 'D3', '4', '4', '0', '0', '0.1382', '1.4295', '0.0967'),
(17, '17', 'nilai_kesehatan', 'pendidikan_terakhir', 'S1', '12', '5', '7', '0.9799', '0.1382', '1.4295', '0.0967'),
(18, '1', 'nilai_wawancara', 'Total', 'Total', '3', '2', '1', '0.9183', '', '', '0'),
(19, '2', 'nilai_wawancara', 'jenis_kelamin', 'Laki-laki', '2', '1', '1', '1', '0.2516', '0.9183', '0.274'),
(20, '3', 'nilai_wawancara', 'jenis_kelamin', 'Perempuan', '1', '1', '0', '0', '0.2516', '0.9183', '0.274'),
(21, '4', 'nilai_wawancara', 'nilai_wawancara', '90', '0', '0', '0', '0', '0.2516', '0.39', '0.6451'),
(22, '5', 'nilai_wawancara', 'nilai_wawancara', '80', '2', '1', '1', '1', '0.2516', '0.39', '0.6451'),
(23, '6', 'nilai_wawancara', 'nilai_wawancara', '75', '0', '0', '0', '0', '0.2516', '0.39', '0.6451'),
(24, '7', 'nilai_wawancara', 'nilai_psikologi', '90', '0', '0', '0', '0', '0.2516', '0.39', '0.6451'),
(25, '8', 'nilai_wawancara', 'nilai_psikologi', '80', '2', '1', '1', '1', '0.2516', '0.39', '0.6451'),
(26, '9', 'nilai_wawancara', 'nilai_psikologi', '75', '0', '0', '0', '0', '0.2516', '0.39', '0.6451'),
(27, '10', 'nilai_wawancara', 'kesehatan', 'Sehat', '3', '2', '1', '0.9183', '0', '0', '0'),
(28, '11', 'nilai_wawancara', 'kesehatan', 'Tidak Sehat', '0', '0', '0', '0', '0', '0', '0'),
(29, '12', 'nilai_wawancara', 'pendidikan_terakhir', 'SMA', '1', '1', '0', '0', '0.9183', '1.585', '0.5794'),
(30, '13', 'nilai_wawancara', 'pendidikan_terakhir', 'D3', '1', '1', '0', '0', '0.9183', '1.585', '0.5794'),
(31, '14', 'nilai_wawancara', 'pendidikan_terakhir', 'S1', '1', '0', '1', '0', '0.9183', '1.585', '0.5794'),
(32, '1', 'nilai_wawancara', 'Total', 'Total', '4', '2', '2', '1', '', '', '0'),
(33, '2', 'nilai_wawancara', 'jenis_kelamin', 'Laki-laki', '4', '2', '2', '1', '0', '0', '0'),
(34, '3', 'nilai_wawancara', 'jenis_kelamin', 'Perempuan', '0', '0', '0', '0', '0', '0', '0'),
(35, '4', 'nilai_wawancara', 'nilai_wawancara', '90', '0', '0', '0', '0', '1', '0.5', '2'),
(36, '5', 'nilai_wawancara', 'nilai_wawancara', '80', '2', '0', '2', '0', '1', '0.5', '2'),
(37, '6', 'nilai_wawancara', 'nilai_wawancara', '75', '0', '0', '0', '0', '1', '0.5', '2'),
(38, '7', 'nilai_wawancara', 'nilai_psikologi', '90', '1', '1', '0', '0', '1', '0.5', '2'),
(39, '8', 'nilai_wawancara', 'nilai_psikologi', '80', '0', '0', '0', '0', '1', '0.5', '2'),
(40, '9', 'nilai_wawancara', 'nilai_psikologi', '75', '0', '0', '0', '0', '1', '0.5', '2'),
(41, '10', 'nilai_wawancara', 'kesehatan', 'Sehat', '4', '2', '2', '1', '0', '0', '0'),
(42, '11', 'nilai_wawancara', 'kesehatan', 'Tidak Sehat', '0', '0', '0', '0', '0', '0', '0'),
(43, '12', 'nilai_wawancara', 'pendidikan_terakhir', 'SMA', '1', '0', '1', '0', '0.3113', '0.8113', '0.3837'),
(44, '13', 'nilai_wawancara', 'pendidikan_terakhir', 'D3', '0', '0', '0', '0', '0.3113', '0.8113', '0.3837'),
(45, '14', 'nilai_wawancara', 'pendidikan_terakhir', 'S1', '3', '2', '1', '0.9183', '0.3113', '0.8113', '0.3837');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`) VALUES
('manager', '1d0258c2440a8d19e716292b231e3190', 'Manager Perusahaan', 'manager.perusahaan@yahoo.com', '081267771344', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `mining_c45`
--

CREATE TABLE IF NOT EXISTS `mining_c45` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atribut` varchar(100) NOT NULL,
  `nilai_atribut` varchar(100) NOT NULL,
  `jml_kasus_total` varchar(5) NOT NULL,
  `jml_layak` varchar(5) NOT NULL,
  `jml_tdk_layak` varchar(5) NOT NULL,
  `entropy` varchar(10) NOT NULL,
  `inf_gain` varchar(10) NOT NULL,
  `inf_gain_temp` varchar(10) NOT NULL,
  `split_info` varchar(10) NOT NULL,
  `split_info_temp` varchar(10) NOT NULL,
  `gain_ratio` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mining_c45`
--

INSERT INTO `mining_c45` (`id`, `atribut`, `nilai_atribut`, `jml_kasus_total`, `jml_layak`, `jml_tdk_layak`, `entropy`, `inf_gain`, `inf_gain_temp`, `split_info`, `split_info_temp`, `gain_ratio`) VALUES
(1, 'Total', 'Total', '4', '2', '2', '1', '', '', '', '', '0'),
(2, 'jenis_kelamin', 'Laki-laki', '4', '2', '2', '1', '0', '-1', '0', '0', '0'),
(3, 'jenis_kelamin', 'Perempuan', '0', '0', '0', '0', '0', '0', '0', '', '0'),
(4, 'nilai_wawancara', '90', '0', '0', '0', '0', '1', '0', '0.5', '', '2'),
(5, 'nilai_wawancara', '80', '2', '0', '2', '0', '1', '0', '0.5', '-0.5', '2'),
(6, 'nilai_wawancara', '75', '0', '0', '0', '0', '1', '0', '0.5', '', '2'),
(7, 'nilai_psikologi', '90', '1', '1', '0', '0', '1', '0', '0.5', '-0.5', '2'),
(8, 'nilai_psikologi', '80', '0', '0', '0', '0', '1', '0', '0.5', '', '2'),
(9, 'nilai_psikologi', '75', '0', '0', '0', '0', '1', '0', '0.5', '', '2'),
(10, 'kesehatan', 'Sehat', '4', '2', '2', '1', '0', '-1', '0', '0', '0'),
(11, 'kesehatan', 'Tidak Sehat', '0', '0', '0', '0', '0', '0', '0', '', '0'),
(12, 'pendidikan_terakhir', 'SMA', '1', '0', '1', '0', '0.3113', '0', '0.8113', '-0.5', '0.3837'),
(13, 'pendidikan_terakhir', 'D3', '0', '0', '0', '0', '0.3113', '0', '0.8113', '', '0.3837'),
(14, 'pendidikan_terakhir', 'S1', '3', '2', '1', '0.9183', '0.3113', '-0.688725', '0.8113', '-0.3112781', '0.3837');

-- --------------------------------------------------------

--
-- Table structure for table `pohon_keputusan_c45`
--

CREATE TABLE IF NOT EXISTS `pohon_keputusan_c45` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `atribut` varchar(100) NOT NULL,
  `nilai_atribut` varchar(100) NOT NULL,
  `id_parent` char(3) DEFAULT NULL,
  `jml_layak` varchar(5) NOT NULL,
  `jml_tidaklayak` varchar(5) NOT NULL,
  `keputusan` varchar(100) NOT NULL,
  `diproses` varchar(10) NOT NULL,
  `kondisi_atribut` varchar(255) NOT NULL,
  `looping_kondisi` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pohon_keputusan_c45`
--

INSERT INTO `pohon_keputusan_c45` (`id`, `atribut`, `nilai_atribut`, `id_parent`, `jml_layak`, `jml_tidaklayak`, `keputusan`, `diproses`, `kondisi_atribut`, `looping_kondisi`) VALUES
(1, 'nilai_kesehatan', '90', '0', '2', '1', '?', 'Sudah', 'AND nilai_kesehatan = ~90~', 'Belum'),
(2, 'nilai_kesehatan', '80', '0', '2', '2', '?', 'Sudah', 'AND nilai_kesehatan = ~80~', 'Belum'),
(3, 'nilai_kesehatan', '75', '0', '0', '1', 'Tidak Layak', 'Belum', 'AND nilai_kesehatan = ~75~', 'Belum');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
