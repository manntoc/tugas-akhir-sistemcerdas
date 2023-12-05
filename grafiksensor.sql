-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 11:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grafiksensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_sensor`
--

CREATE TABLE `tb_sensor` (
  `ID` int(11) NOT NULL,
  `suhu` decimal(10,2) NOT NULL,
  `ppm` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sensor`
--

INSERT INTO `tb_sensor` (`ID`, `suhu`, `ppm`, `tanggal`) VALUES
(1, 10.00, 30, '2023-11-30 19:28:14'),
(2, 29.00, 30, '2023-11-30 19:28:14'),
(3, 30.00, 24, '2023-11-30 19:28:23'),
(4, 20.00, 17, '2023-11-30 19:28:43'),
(5, 29.00, 30, '2023-11-30 19:29:11'),
(6, 35.00, 200, '2023-11-30 19:29:11'),
(7, 89.00, 34, '2023-12-02 06:42:48'),
(8, 29.00, 13, '2023-12-02 06:42:48'),
(9, 100.00, 100, '2023-12-02 07:06:36'),
(10, 90.00, 90, '2023-12-04 19:27:44'),
(11, 90.00, 90, '2023-12-04 19:27:44'),
(12, 20.00, 401, '2023-12-04 19:58:30'),
(13, 6.00, 400, '2023-12-04 20:10:55'),
(14, 1.00, 300, '2023-12-04 20:14:10'),
(15, 6.00, 400, '2023-12-04 20:18:00'),
(16, 5.00, 500, '2023-12-04 20:19:41'),
(17, 6.00, 400, '2023-12-05 10:13:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
