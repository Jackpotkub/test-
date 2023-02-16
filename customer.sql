-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 09:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerld` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `customerAddress` varchar(100) NOT NULL,
  `customerEmail` varchar(20) NOT NULL,
  `customerTelephone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerld`, `customerName`, `customerAddress`, `customerEmail`, `customerTelephone`) VALUES
(1, 'เพราะเป็นวัยรุ่นจึงเจ็บปวด', 'เมืองมาร์เบิ้ล', 'djh@gmail.com', '0231465749'),
(2, 'fffsss', 'dddd', 'skko@gmail.com', '06472644444'),
(3, 'fffsss', 'dddd', 'skko@gmail.com', '06472644444'),
(4, 'fffsss', 'dddd', 'skko@gmail.com', '06472644444'),
(5, 'fffsss', 'dddd', 'skko@gmail.com', '0878785454'),
(6, 'fffsss', 'dddd', 'skko@gmail.com', '0878785454'),
(7, 'fffsss', 'dddd', 'skko@gmail.com', '0878785454'),
(8, 'fffsss', 'dddd', 'skko@gmail.ดกหเดห', '0878785454'),
(9, 'fffsss', 'dddd', 'skko@gmail.ฟแ.ะ้', '0878785454'),
(10, 'fffsss', 'dddd', 'skko@gmail.ac.th', '0878785454'),
(11, 'fffsss', 'dddd', 'skko@gmail.ac.th', '0878785454'),
(12, 'fffsss', 'dddd', 'skko@gmail.ac.th', '0878785454'),
(13, 'fffsss', 'dddd', 'skko@gmail.ac.th', '0878785454'),
(14, 'fffsss', 'dddd', 'skko@gmail.com', '0878785454'),
(15, 'fffsss', 'dad', 'skko@gmail.ac.th', '0878785454'),
(16, 'fffsss', 'dad', 'skko@gmail.ac.th', '0878785454'),
(17, 'fffsss', 'dad', 'skko@gmail.ac.th', '0878785454'),
(18, 'fffsss', 'dad', 'skko@gmail.ac.th', '0878785454'),
(19, 'fffsss', 'dad', 'skko@gmail.ac.th', '0878785454'),
(20, 'fffsss', 'dad', 'skko@gmail.ac.th', '0878785454'),
(21, 'fffsss', 'dad', 'skko@gmail.ac.th', '0878785454'),
(22, 'เด็กชายจุ่น', 'หิวข้าวไม่รู้งง', 'อ่าวเห้ย@gmail.ac.th', '0999975555'),
(23, 'เด็กชายจุ่น', 'หิวข้าวไม่รู้งง', 'lunkg@gmail.ac.th', '0999975555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerld`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerld` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
