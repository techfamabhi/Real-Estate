-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 10:12 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `details_flat`
--

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE `flat` (
  `id` int(11) NOT NULL,
  `flat_owner` varchar(60) NOT NULL,
  `pincode` int(50) NOT NULL,
  `flat_rate` varchar(100) NOT NULL,
  `sq_ft` varchar(50) NOT NULL,
  `property_type` varchar(30) NOT NULL,
  `flat_img_internal` varchar(100) NOT NULL,
  `flat_img_external` varchar(100) NOT NULL,
  `flat_type` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`id`, `flat_owner`, `pincode`, `flat_rate`, `sq_ft`, `property_type`, `flat_img_internal`, `flat_img_external`, `flat_type`, `status`) VALUES
(20, 'mahesh birajdar', 0, '5lac', '2200sq.ft', 'Individual Houses/Villas', 'k6.jpg', 'subscribe1.jpg', '2BHK', 'active'),
(21, 'pintu birajdar', 0, '80LAC', '2200sq.ft', 'Builder Floor', 'k3.png', 'k3.png', '2BHK', 'active'),
(22, 'mahesh birajdar', 413002, '5lac', '2200sq.ft', 'Builder Floor', 'k2.png', 'k1.png', '2BHK', 'active'),
(23, 'vertex', 413006, '5LAC', '2200sq.ft', ' Residential Plot', 'subscribe.jpg', '', '3BHK', 'active'),
(24, 'vertex', 413217, '10LAC', '2400sq.ft', 'Builder Floor', 'k2.png', '', '1BHK', 'active'),
(25, 'pintu birajdar', 413219, '20LAC', '2000sq.ft', 'Individual Houses/Villas', 'k3.png', '', '3BHK', 'active'),
(26, 'malluraj', 413009, '10LAC', '2000sq.ft', ' Residential Plot', 'k8.png', '', '1BHK', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flat`
--
ALTER TABLE `flat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
