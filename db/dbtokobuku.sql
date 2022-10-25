-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2022 at 05:41 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtokobuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbuku`
--

CREATE TABLE IF NOT EXISTS `tbbuku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(100) NOT NULL,
  `no_isbn` varchar(20) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `stok` int(5) NOT NULL,
  `harga_pokok` int(20) NOT NULL,
  `harga_jual` int(20) NOT NULL,
  `diskon` int(5) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbbuku`
--

INSERT INTO `tbbuku` (`id_buku`, `judul_buku`, `no_isbn`, `penulis`, `penerbit`, `tahun_terbit`, `stok`, `harga_pokok`, `harga_jual`, `diskon`) VALUES
(1, 'aku bodoh', ' 0005600723325173970', 'simba', 'pt.kuroishi', 500, 50, 16000, 18000, 2),
(2, 'si kancil', '04743322782512729163', 'doni', 'pt.jaya maju', 2005, 200, 10000, 12000, 5),
(3, 'timun hitam', '19070734014417209585', 'firman', 'pt.gondala', 2004, 40, 16000, 17000, 1),
(4, 'si kucing', '79182390106312627199', 'kirana', 'pt.kursa', 2005, 30, 26000, 29000, 1),
(5, 'aku bodoh', ' 0005600723325173970', 'simba', 'pt.kuroishi', 500, 50, 16000, 18000, 2),
(6, 'anak emas', '58664956862921547234', 'rahmat', 'pt.perkasa', 2005, 90, 15000, 17000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbdistributor`
--

CREATE TABLE IF NOT EXISTS `tbdistributor` (
  `id_distributor` int(10) NOT NULL AUTO_INCREMENT,
  `nama_distributor` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  PRIMARY KEY (`id_distributor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbdistributor`
--

INSERT INTO `tbdistributor` (`id_distributor`, `nama_distributor`, `alamat`, `telephone`) VALUES
(1, 'perak', ' Jl Kp Baru 55, Dki Jakarta', '0-21-865-0865'),
(2, 'kayak', 'Jl Tenggarang 68281', '0332-424376'),
(3, 'ignas', 'Jl Rajawali Brt 39, Jawa Barat', '0-22-603-3495'),
(4, 'reuben', 'karangmojo', '029384029830592'),
(5, 'dika', 'Lorong 2, Toa Payoh, Singapore', '6-5-6-256-7889'),
(6, 'jenar', 'karangmojo', '0897004859397');

-- --------------------------------------------------------

--
-- Table structure for table `tbpasok`
--

CREATE TABLE IF NOT EXISTS `tbpasok` (
  `id_pemasok` int(10) NOT NULL AUTO_INCREMENT,
  `id_distributor` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pemasok`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbpasok`
--

INSERT INTO `tbpasok` (`id_pemasok`, `id_distributor`, `id_buku`, `jumlah`, `tanggal`) VALUES
(1, 1, 1, 27, '2022-07-20'),
(2, 2, 2, 75, '2022-07-14'),
(3, 3, 3, 37, '2022-07-15'),
(4, 4, 4, 87, '2022-07-10'),
(5, 5, 5, 78, '2022-07-02'),
(6, 6, 6, 234, '2022-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbpenjualan`
--

CREATE TABLE IF NOT EXISTS `tbpenjualan` (
  `id_penjualan` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbpenjualan`
--

INSERT INTO `tbpenjualan` (`id_penjualan`, `id_user`, `id_buku`, `tanggal`, `jumlah`) VALUES
(1, 1, 1, '2022-07-14', 1),
(2, 2, 2, '2022-07-15', 1),
(3, 4, 3, '2022-07-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` enum('admin','kasir','pembeli') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `nama`, `alamat`, `telephone`, `username`, `password`, `hak_akses`) VALUES
(1, 'reuben', 'karangmojo rt 02 trirenggo bantul', '0896007027', 'reuben', 'ikanterbang', 'admin'),
(2, 'rizal', 'Kp Malang 295 RT 005/04, Jawa Tengah  City:   Jawa Tengah', '01245678135', 'rizal', 'rizalpass', 'pembeli'),
(3, 'hilman', 'Jl Danau Sunter Utr Bl G-7/2, Jakarta', '021-65832594', 'hilman', 'hilmanpass', 'pembeli');
