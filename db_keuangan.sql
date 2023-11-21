-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 02:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `nama_bank` varchar(32) NOT NULL,
  `kode_bank` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`nama_bank`, `kode_bank`) VALUES
('Bank Negara Indonesia (BNI)', 'KB01'),
('Bank Rakyat Indonesia (BRI)', 'KB02'),
('Bank Syariah Indonesia (BSI)', 'KB03'),
('Bank Mandiri', 'KB04'),
('Bank Central Asia (BCA)', 'KB05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(32) NOT NULL,
  `nim` bigint(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `prodi` varchar(32) NOT NULL,
  `angkatan` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nim`, `nama`, `prodi`, `angkatan`, `email`, `alamat`) VALUES
(0, 123456, 'Zharfan', 'Pendidikan Bahasa Inggris (S1)', '2021', 'fdsafdsa@fdsa', 'Gang Cokro II No. 13, Semarang'),
(0, 4611421001, 'Michael Shane Tegar', 'Sistem Informasi', '2022', 'michael@mail.com', 'Jl. Durian No. 15, Semarang'),
(0, 4611421002, 'Marcelino Jonathan Rakha', 'Teknik Mesin', '2022', 'marcelino@mail.com', 'Jl. Manggis No. 7, Semarang'),
(0, 4611421081, 'Febrian Andi Nugroho', 'Teknik Informatika', '2021', 'febrianandi@mail.com', 'Jl. Mangga No. 21, Semarang'),
(0, 4611421089, 'Norma Zuhrotul Hayati', 'Teknik Informatika', '2021', 'norma@mail.com', 'Jl. Pisang No. 12, Semarang'),
(0, 4611421092, 'Faris Faikar Razannafi', 'Teknik Informatika', '2021', 'farisfaikar@mail.com', 'Gang Cokro II No. 13, Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `no_va` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nim` bigint(16) NOT NULL,
  `kode_bank` varchar(16) NOT NULL,
  `stats` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`no_va`, `tanggal`, `nim`, `kode_bank`, `stats`) VALUES
(1234500001, '2022-12-12', 4611421092, 'KB03', 1),
(1234500002, '2022-12-11', 4611421089, 'KB01', 1),
(1234500003, '2022-12-13', 4611421002, 'KB02', 0),
(1234500004, '2022-12-12', 4611421001, 'KB01', 1),
(1234500005, '2022-12-12', 4611421092, 'KB03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tagihan`
--

CREATE TABLE `tbl_tagihan` (
  `nim` bigint(16) NOT NULL,
  `nominal` int(32) NOT NULL,
  `kode_golongan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tagihan`
--

INSERT INTO `tbl_tagihan` (`nim`, `nominal`, `kode_golongan`) VALUES
(4611421001, 5000000, 'KG05'),
(4611421002, 4000000, 'KG04'),
(4611421081, 5000000, 'KG05'),
(4611421089, 4000000, 'KG04'),
(4611421092, 3000000, 'KG03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`kode_bank`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`no_va`);

--
-- Indexes for table `tbl_tagihan`
--
ALTER TABLE `tbl_tagihan`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
