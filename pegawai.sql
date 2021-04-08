-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 06:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `id_bonus` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `total_bonus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bonus`
--

INSERT INTO `bonus` (`id_bonus`, `keterangan`, `total_bonus`) VALUES
('1', 'Bonus Lembur', 500000),
('2', 'Tunjangan Hari Raya', 2000000),
('3', 'Bonus Tahunan', 1000000),
('4', 'Bonus Referal', 100000),
('5', 'Bonus Penjualan', 300000),
('6', 'Bonus Liburan', 100000),
('7', 'Bonus Prestasi', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `gaji_pokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`, `gaji_pokok`) VALUES
('1', 'Sales', 2500000),
('2', 'Admin', 3500000),
('3', 'Kasir', 3000000),
('4', 'Satpam', 3100000);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `kode_staff` varchar(10) NOT NULL,
  `nama_staff` varchar(25) NOT NULL,
  `tanggal_rekrut` date NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kontak` varchar(13) DEFAULT NULL,
  `id_bonus` varchar(10) DEFAULT NULL,
  `id_jabatan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`kode_staff`, `nama_staff`, `tanggal_rekrut`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `kontak`, `id_bonus`, `id_jabatan`) VALUES
('134', 'Abby Hegmann', '2020-08-18', '1037 Jesus Plains', 'New Damion', '2021-07-10', '401-269-1606', '2', '2'),
('272', 'Mallory Lueilwitz', '2022-01-31', '860 Maximus Lodge', 'Wolfborough', '2021-04-23', '657-161-2284', '5', '2'),
('30', 'Jorge Fisher', '2021-11-14', '998 Okuneva Lock', 'West Seanmouth', '2022-02-08', '182-822-0768', '2', '2'),
('422', 'Opal Bayer', '2020-11-23', '68852 Erdman Meadows', 'New Jarrett', '2021-12-20', '936-487-0212', '7', '3'),
('486', 'Fanny Kirlin', '2021-01-30', '3417 Lesch Divide', 'Cyrusville', '2022-02-19', '252-027-4002', '5', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`id_bonus`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`kode_staff`),
  ADD KEY `id_bonus` (`id_bonus`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`id_bonus`) REFERENCES `bonus` (`id_bonus`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
