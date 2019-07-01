-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 09:31 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) DEFAULT NULL,
  `tanggaL_terbit` date DEFAULT NULL,
  `pengarang` varchar(100) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `nama_buku`, `tanggaL_terbit`, `pengarang`, `flag`) VALUES
(1, 'TKJ', '2019-06-01', 'Ahmad', 0),
(2, 'RPL', '2019-06-02', 'Ali', 0),
(4, 'IPA', '2019-06-03', 'Iim', 0),
(6, 'as', '2019-05-29', 'zxc', 0),
(7, 'tkj', '2019-06-28', 'iim', 1),
(8, 'mybook', '2019-07-03', 'septi dan iim', 1),
(9, 'mybook', '2019-07-03', 'septi dan iim', 0),
(10, 'mybook', '2019-07-03', 'septi dan iim', 0),
(11, 'mybook2', '2019-07-17', 'iim', 0),
(12, '\'mybook2\'', '0000-00-00', '\'sdvcd\'', NULL),
(13, '\'mybook2\'', '0000-00-00', '\'septi dan iim\'', NULL),
(14, 's', '2019-07-11', 's', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
