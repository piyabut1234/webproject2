-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 05:59 AM
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
-- Database: `regis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `regis_tb`
--

CREATE TABLE `regis_tb` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `regis_tb`
--

INSERT INTO `regis_tb` (`id`, `name`, `surname`, `username`, `password`) VALUES
(1, 'นาย', 'เทศน้อย', 'joeaniruth4', 'db953964e9ffbe70463ebf37a89e48c0809efa1d'),
(2, 'เทศน้อย', 'ชัยวัตน์', '์Nany', 'd219f62cec6e5b7d6113bfa80de8739faac8ffe4'),
(3, 'okp', 'tyu', 'stwet', '49306faca168a4e2b0fdbc4fb9d0c6d5b70d5f54'),
(4, 'rgt', 'wtwew', 'wtfvgdf', 'c4ad24ec87a68bd2d422d55754daf19e379447d5'),
(5, 'sfgzsfg', 'fdszgfg', 'sfdgzdsgf67565685', 'b7f4534c192506d5d3e80e66ee21aaa660ea9640'),
(6, 'sdf', 'sdfsdf', 'wefwf', 'f3fa2b89f83c1ade92453d51ab0919b0c685a9e9'),
(7, 'afsdfs', 'sdfsdf', 'adfdsf', 'a4d408bcaa210455e0f7f144259e998ad3de4c2c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regis_tb`
--
ALTER TABLE `regis_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regis_tb`
--
ALTER TABLE `regis_tb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
