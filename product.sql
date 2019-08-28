-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 12:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(4) NOT NULL,
  `code` varchar(10) COLLATE utf8_thai_520_w2 NOT NULL,
  `name` varchar(150) COLLATE utf8_thai_520_w2 NOT NULL,
  `price` double(6,2) NOT NULL,
  `cid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `code`, `name`, `price`, `cid`) VALUES
(1, 'P001', 'Java', 300.00, 1),
(2, 'P002', 'Swift', 250.00, 1),
(3, 'P003', 'Kotlin', 250.25, 2),
(4, 'P001', 'Java', 300.00, 1),
(5, 'P002', 'Swift', 250.00, 1),
(6, 'P003', 'Kotlin', 250.25, 2),
(7, 'P001', 'Java', 300.00, 1),
(8, 'P002', 'Swift', 250.00, 1),
(9, 'P003', 'Kotlin', 250.25, 2),
(10, 'P001', 'Java', 300.00, 1),
(11, 'P002', 'Swift', 250.00, 1),
(12, 'P003', 'Kotlin', 250.25, 2),
(13, 'P001', 'Java', 300.00, 1),
(14, 'P002', 'Swift', 250.00, 1),
(15, 'P003', 'Kotlin', 250.25, 2),
(16, 'P001', 'Java', 300.00, 1),
(17, 'P002', 'Swift', 250.00, 1),
(18, 'P003', 'Kotlin', 250.25, 2),
(19, 'P001', 'Java', 300.00, 1),
(20, 'P002', 'Swift', 5500.00, 1),
(21, 'P003', 'Kotlin', 250.25, 2),
(22, 'P001', 'Java', 300.00, 1),
(23, 'P002', 'Swift', 250.00, 1),
(24, 'P003', 'Kotlin', 250.25, 2),
(25, 'P001', 'Java', 300.00, 1),
(26, 'P002', 'Swift', 250.00, 1),
(27, 'P003', 'Kotlin', 250.25, 2),
(28, 'P001', 'Java', 300.00, 1),
(29, 'P002', 'Swift', 250.00, 1),
(30, 'P003', 'Kotlin', 250.25, 2),
(31, 'P001', 'Java', 300.00, 1),
(32, 'P002', 'Swift', 250.00, 1),
(33, 'P003', 'Kotlin', 250.25, 2),
(34, 'P001', 'Java', 300.00, 1),
(35, 'P002', 'Swift', 250.00, 1),
(36, 'P003', 'Kotlin', 250.25, 2),
(37, 'P001', 'Java', 300.00, 1),
(38, 'P002', 'Swift', 250.00, 1),
(39, 'P003', 'Kotlin', 250.25, 2),
(40, 'P001', 'Java', 300.00, 1),
(41, 'P002', 'Swift', 250.00, 1),
(42, 'P003', 'Kotlin', 250.25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `bcat_id` int(2) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`bcat_id`, `cat_name`) VALUES
(1, 'Computer'),
(2, 'Networking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`bcat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `bcat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
