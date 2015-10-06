-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2015 at 05:24 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `orderbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `idsupplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `java` varchar(3) DEFAULT NULL,
  `cbr` varchar(3) DEFAULT NULL,
  `telepon1` varchar(15) NOT NULL,
  `telepon2` varchar(15) DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idsupplier`, `nama`, `java`, `cbr`, `telepon1`, `telepon2`, `alamat`, `keterangan`) VALUES
(1, 'H. Ade', 'HAD', 'AHC', '081322145773', '', 'JL MAHMUD SINDANG PALAY RT 3 / RW 4 DESA RAHAYU KECAMATAN MARGAASIH', 'Produksi Kemeja'),
(2, 'H. Ade Obreh', 'HOB', 'AOC', '081220043808', '', 'SITUTARATE RT 06 / RW 01 DESA CANGKUANG KULON KEC. DAYEUHKOLOT', 'Produksi Sepatu'),
(3, 'Asep Auf Mahruf', '', 'APC', '081320520112', '', 'JL TRUS PASIR KOJA GG. HJ SITI ROKAYAH RT 03/06 KP. BABAKAN KEC. BBK CIPARAY', 'Produksi Koko'),
(4, 'Ayi Dadan', '', 'AYC', '085223248100', '', 'BLOK SAPATU RT 02 / RW 05 KELURAHAN CIBADUYUT KECAMATAN BOJONGLOA KIDUL', 'Produksi Sepatu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
