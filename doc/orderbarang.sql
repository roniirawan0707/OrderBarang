-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2015 at 01:41 PM
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
  `alamat` varchar(200) NOT NULL,
  `telepon1` varchar(15) NOT NULL,
  `telepon2` varchar(15) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idsupplier`, `nama`, `alamat`, `telepon1`, `telepon2`, `keterangan`) VALUES
(1, 'Aan', 'RANCAMANYAR RT 05 / RW 14 DESA DAYEUH KOLOT (BELAKANG PASAR NUSA)', '085324058987', '', 'Supplier Sandal Wanita dan Anak'),
(2, 'Andri', 'Kp Cilebak Rt 03 / 14 Desa Cangkuang Wetan Kecamatan Dayeuh Kolot Kabupaten Bandung', '082130196188', '', 'Supplier Tas Ransel dan Tas Anak'),
(3, 'Afriani', 'Jl. Sayati Hilir No. 11 RT 01 / 08 Desa Sayati Kecamatan Margahayu Kabupaten Bandung', '082120017982', '', 'Supplier Tas Anak'),
(4, 'Agus Muhamad (GARSEL)', 'Kp. Garogol RT 03 / 06 Desa Margaasih Kecamatan Cicalengka', '081394028638', '087823375716', 'Supplier Tas Ransel dan Tas Anak'),
(5, 'H. Ahid', 'Binong Jati RT 08 / 03 No. 58 Kota Bandung', '082126403468', '', 'Supplier Rajut dan Tas Ransel'),
(6, 'Ajang', 'Blok Lumbung RT 02 / 06 Kelurahan Cibaduyut Kecamatan Bojongloa Kidul', '082115215951', '', 'Supplier Sandal Wanita'),
(7, 'Ajat Munajat', 'GG. MAMAJA RT 03 / RW 05 Kelurahan CIBADUYUT Kecamatan BOJONGLOA KIDUL', '081322035342', '', 'Supplier Sepatu Wanita');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
