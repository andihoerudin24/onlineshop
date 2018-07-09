-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 03:44 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'andihoerudin', 'andihoerudin', '22512e58749ffead12e90dbd59eddf24');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `negara` varchar(30) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_lengkap`, `alamat`, `negara`, `kode_pos`, `username`, `password`, `total_harga`) VALUES
(1, 'pembeli', 'di kabupaten bogogr kecamatan cibinong ', 'indonesia', '16918', 'andi', 'ce0e5bf55e4f71749eade7a8b95c4e46', '50000'),
(35, 'hoerudin', 'ciinong bogor', 'indonesia', '16918', 'hoerudin', '62328b88316cee576feb8a6a4e13fce0', '1320000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `harga_barang`, `id_kategori`, `deskripsi`, `foto`, `qty`, `info`) VALUES
(2, 'switer', '50000', 2, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'produk-11.png', 20, 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.\r\n\r\nIa mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.'),
(3, 'kemeja kece', '150.0000', 2, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'produk-2.png', 30, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.'),
(4, 'summer jaket', '250.00000', 2, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.', 'produk-12.png', 50, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.'),
(5, 'kemeja badai', '350.00000', 2, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'produk-21.png', 40, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(6, 'Baju Asmara', '120000', 1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Baju-Wanita-Terbaru-Desain-Modern-ELLA18-1.jpg', 30, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(7, 'Baju Merah', '130000', 1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Baju-Warna-Merah-Hem-Panjang-Wanita-Modis.jpg', 40, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(8, 'Model Hijab', '320000', 1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Model-Baju-Wanita-Terbaru-Desain-Modis-CBWG13-2.jpg', 89, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(9, 'blaster', '150000', 1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'img4833-1449375308.jpg', 78, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(11, 'Model dua', '325000', 1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Baju-wanita-terbaru-desain-keren-kekinian-ELLA25-2.jpg', 20, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(12, 'Model bertiga', '120000', 1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Model-Baju-Wanita-Terbaru-Desain-Modis-ELLA06-2.jpg', 87, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(13, 'warna kuning', '340000', 1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Baju-Wanita-Terbaru-Desain-Modern-ELLA18-11.jpg', 65, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(14, 'bagus', '230000', 1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'baju_muslim_wanita_RND_19_251.jpg', 12, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(15, 'gelang', '50000', 3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Aksesoris-Gelang-Tali-Cantik-Model-Masa-Kini.jpg', 0, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(16, 'Gelang Cinta', '12000', 3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', '140-pengantin-aksesoris-hiasan-kepala-rambut-retro-matte-emas-porselen-bunga-paduan-berlian-imitasi-bridal-aksesoris_jpg_640x640.jpg', 0, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(17, 'Gelang Asmara', '70000', 3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Aksesoris-Gelang-Unik-Dari-Tali-Multicharm-Model-Terbaru.jpg', 0, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(18, 'gelang dua', '30000', 3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'Aksesoris-Gelang-Unik-Dari-Tali-Multicharm-Model-Terbaru1.jpg', 0, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(19, 'Kalung Hati', '120000', 3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'aksesoris_kancing-20140911-editor-001.jpg', 0, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(20, 'Gelang Dilan', '60000', 3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'aksesoris-cewek_20170313_201532.jpg', 78, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(21, 'Gelang oke', '32000', 3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'aksesoris-cewek_20170313_2015321.jpg', 0, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n'),
(22, 'Paket Sayang Istri', '43000', 3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n', 'imagemix-n-match-aksesoris-seragam-kantor-karyawati-56270fd67a099.jpg', 89, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\nLorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak. Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga menarik yak.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'WOMEN'),
(2, 'MAN'),
(3, 'ACCESSORIES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `bukti_pembayaran` text NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pembeli`, `id_barang`, `status`, `bukti_pembayaran`, `qty`, `tanggal`) VALUES
(1, 1, 2, 1, 'rp-2.png', 2, '2018-07-09 11:45:06'),
(6, 35, 2, 1, '135215_sssc1.jpg', 7, '2018-07-09 13:17:02'),
(7, 35, 2, 1, '135215_sssc1.jpg', 3, '2018-07-09 13:25:42');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_chek`
-- (See below for the actual view)
--
CREATE TABLE `v_chek` (
`id_pembeli` int(11)
,`nama_lengkap` varchar(50)
,`alamat` text
,`negara` varchar(30)
,`kode_pos` varchar(20)
,`qty` int(11)
,`harga_barang` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_penjualan`
-- (See below for the actual view)
--
CREATE TABLE `v_penjualan` (
`id_pembeli` int(11)
,`qty` int(11)
,`id_transaksi` int(11)
,`nama_barang` varchar(50)
,`harga_barang` varchar(50)
,`nama_kategori` varchar(50)
,`foto` varchar(200)
,`status` int(11)
,`alamat` text
,`username` varchar(20)
,`password` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_chek`
--
DROP TABLE IF EXISTS `v_chek`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_chek`  AS  select `ts`.`id_pembeli` AS `id_pembeli`,`pm`.`nama_lengkap` AS `nama_lengkap`,`pm`.`alamat` AS `alamat`,`pm`.`negara` AS `negara`,`pm`.`kode_pos` AS `kode_pos`,`ts`.`qty` AS `qty`,`tb`.`harga_barang` AS `harga_barang` from ((`tbl_transaksi` `ts` join `pembeli` `pm`) join `tbl_barang` `tb`) where ((`ts`.`id_pembeli` = `pm`.`id_pembeli`) and (`tb`.`id_barang` = `ts`.`id_barang`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_penjualan`
--
DROP TABLE IF EXISTS `v_penjualan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_penjualan`  AS  select `pm`.`id_pembeli` AS `id_pembeli`,`ts`.`qty` AS `qty`,`ts`.`id_transaksi` AS `id_transaksi`,`tb`.`nama_barang` AS `nama_barang`,`tb`.`harga_barang` AS `harga_barang`,`tk`.`nama_kategori` AS `nama_kategori`,`tb`.`foto` AS `foto`,`ts`.`status` AS `status`,`pm`.`alamat` AS `alamat`,`pm`.`username` AS `username`,`pm`.`password` AS `password` from (((`tbl_transaksi` `ts` join `tbl_barang` `tb`) join `tbl_kategori` `tk`) join `pembeli` `pm`) where ((`ts`.`id_pembeli` = `pm`.`id_pembeli`) and (`tb`.`id_kategori` = `tk`.`id_kategori`) and (`ts`.`id_barang` = `tb`.`id_barang`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
