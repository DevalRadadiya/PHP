-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 04:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `rollno` int(2) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`rollno`, `fullname`, `email`, `contact`, `address`) VALUES
(1, 'Radadiya Deval Chandubhai', 'devalradadiya@gmail.com', 9574309662, 'prabhatpur, junagadh'),
(2, 'Chudasma Pratik Vijaybhai', 'pratikchudasma@gmail.com', 9876543210, 'rajkot'),
(3, 'Patoliya Nihar Vallabhbhai', 'niharpatoloiya@gmail.com', 9872443222, 'junagadh'),
(4, 'Tank Sayank Jitendr bhai', 'sayanktank@gmail.com', 8796645434, 'Rajkot'),
(5, 'Buha Divesh ', 'divyeshbuha@gmail.com', 8756432972, 'rajkot'),
(6, 'keyur trada', 'keyurtrada@gmail.com', 987654321, 'rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sem4`
--
ALTER TABLE `sem4`
  MODIFY `rollno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
