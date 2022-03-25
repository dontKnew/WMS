-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 01:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_wms`
--

CREATE TABLE `customers_wms` (
  `id` int(11) NOT NULL,
  `work_status` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `purpose` text NOT NULL,
  `charges` int(11) NOT NULL,
  `recieved` int(11) NOT NULL,
  `balanced` int(11) NOT NULL,
  `address` text NOT NULL,
  `registered_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employers_wms`
--

CREATE TABLE `employers_wms` (
  `employer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `employer_image` text NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `address` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `fixed_salary` int(11) NOT NULL,
  `DOJ` text NOT NULL,
  `DOL` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member_wms`
--

CREATE TABLE `member_wms` (
  `member_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_wms`
--

INSERT INTO `member_wms` (`member_id`, `name`, `mobile_number`, `email`, `password`, `registered_date`) VALUES
(1, 'admin', 2147483647, 'admin@gmail.com', 'admin123', '2021-12-24 18:07:17'),
(2, 'sajid ali', 12345, 'sajid123.sa@gmail.com', 'sajid', '2021-12-26 08:05:59'),
(3, 'Rahul@gmail.com', 123, 'rahul@gmail.com', 'sajid', '2021-12-26 08:08:22'),
(4, 'roshan', 1234, 'roshan123.sa@gmail.com', 'sajid', '2021-12-26 08:11:52'),
(5, 'sajid', 123, 'saji123.sa@mgail.com', 'sajid', '2021-12-26 08:12:26'),
(6, 'Kamina', 2147483647, 'kamina@gmail.com', '123', '2022-01-10 06:14:21'),
(7, 'Sajid', 2147483647, 'israfil123.sa@gmail.com', 'admin', '2022-01-13 04:41:50'),
(8, 'sajid', 123456, 'sajid@gmail.com', 'sajid', '2022-01-18 06:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `property_document`
--

CREATE TABLE `property_document` (
  `document_id` int(11) NOT NULL,
  `first_party` varchar(255) NOT NULL,
  `second_party` varchar(255) NOT NULL,
  `area` text NOT NULL,
  `registration_number` int(11) NOT NULL,
  `volume_number` int(11) NOT NULL,
  `book_number` int(11) NOT NULL,
  `date` text NOT NULL,
  `registered_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_wms`
--
ALTER TABLE `customers_wms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers_wms`
--
ALTER TABLE `employers_wms`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `member_wms`
--
ALTER TABLE `member_wms`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `property_document`
--
ALTER TABLE `property_document`
  ADD PRIMARY KEY (`document_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_wms`
--
ALTER TABLE `customers_wms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1133;

--
-- AUTO_INCREMENT for table `employers_wms`
--
ALTER TABLE `employers_wms`
  MODIFY `employer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `member_wms`
--
ALTER TABLE `member_wms`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property_document`
--
ALTER TABLE `property_document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
