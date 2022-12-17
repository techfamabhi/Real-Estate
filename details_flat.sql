-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 07:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `a_id1` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `a_image` varchar(50) NOT NULL,
  `about_me` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`a_id1`, `name`, `mobile`, `email`, `a_image`, `about_me`) VALUES
(1, 'Abhi', 9373960367, 'abhishekgouda882@gmail.com', 'staff-1.jpg', ''),
(3, 'Aarti', 8793743871, 'aarti@gmail.com', 'staff-2.jpg', ''),
(4, 'jaana', 9373960367, 'jaana@gmail.com', 'staff-4.jpg', ''),
(5, 'akash birajdar', 2147483647, 'pintu@gmail.com', 'staff-3.jpg', ''),
(6, 'mona', 9373960367, 'mona@gmail.com', 'staff-6.jpg', ''),
(8, 'jaana vasal', 9373960367, 'jaana@gmail.com', 'staff-6.jpg', ''),
(9, 'pintu dada', 8793743871, 'pintu@gmail.com', 'staff-3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pincode` int(10) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `name`, `pincode`, `full_address`, `status`) VALUES
(1, 'balives', 413002, 'balives', 'inactive'),
(2, 'wit', 413006, 'solapur', 'active'),
(4, 'karnik nagar', 413009, 'near wit college, solapur', 'active'),
(5, 'nilam nagar', 413008, 'solapur', 'active'),
(6, 'akkalkot road', 413219, 'akkalkot', 'active'),
(7, 'ashok chowk', 413217, 'solapur', 'active'),
(8, 'shivaji nagar', 412000, 'solapur', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `subject`, `comment`) VALUES
(1, 'abhishek', 9373960367, 'i want mat finish home', '3BHK'),
(2, 'aarti bangaram', 9373960367, 'i want this flat', 'hey dear');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `descriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `client_name`, `email`, `country`, `mobile`, `descriptions`) VALUES
(1, 'mahalingappa birajdar', 'mahabhimde@gmail.com', 'india', 8788289736, 'dsaf'),
(2, 'pintu birajdar', 'pintu@gmail.com', 'india', 8788289736, 'sdd'),
(3, 'abhi', 'abhishekgouda882@gmail.com', 'india', 8788289736, 'something'),
(4, 'oo', 'oo@gmail.com', 'india', 9999999, 'dfg'),
(5, 'abhishek', 'abhishekgouda882@gmail.com', 'india', 9373960367, 'i want 3 BHK flat in ashok chowk'),
(6, 'abhishek', 'abhishekgouda882@gmail.com', 'india', 9373960367, 'i want 3 BHK flat in ashok chowk'),
(7, 'teju', 'teju@gmail.com', 'india', 8793743871, 'i want this flat'),
(15, 'Aarti bangaram', 'aarti@gmail.com', 'india', 9373960367, 'Hey bangaram');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_details`
--

CREATE TABLE `feedback_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_details`
--

INSERT INTO `feedback_details` (`id`, `name`, `email`, `phone`, `remark`, `date`, `status`) VALUES
(6, 'abhishek', 'abhishekgouda882@gmail.com', 9373960367, 'walchand college', '2020-01-23', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE `flat` (
  `id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `flat_owner` varchar(60) NOT NULL,
  `pincode` int(50) NOT NULL,
  `flat_rate` varchar(100) NOT NULL,
  `sq_ft` varchar(50) NOT NULL,
  `property_type` varchar(30) NOT NULL,
  `flat_img_internal` varchar(100) NOT NULL,
  `flat_type` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`id`, `a_id`, `flat_owner`, `pincode`, `flat_rate`, `sq_ft`, `property_type`, `flat_img_internal`, `flat_type`, `status`) VALUES
(20, 1, 'mahesh patil', 413006, '5lac', '2200sq.ft', 'Individual Houses/Villas', '2bef61f99b70415e214756a6c8ca6b5d.jpg', '3BHK', 'inactive'),
(21, 1, 'pintu birajdar', 413002, '80LAC', '2200sq.ft', 'Builder Floor', '2bhk-flats-in-sodepur-at-umic-nihar-500x500.jpg', '2BHK', 'active'),
(22, 4, 'mahesh birajdar', 413002, '5lac', '2200sq.ft', 'Builder Floor', 'gokulam-flats-in-thiruninravur-2ro.jpg', '2BHK', 'active'),
(23, 4, 'vertex', 413002, '5LAC', '2200sq.ft', '', 'gokulam-flats-in-thiruninravur-2ro.jpg', '3BHK', 'active'),
(24, 1, 'vertex', 413002, '10LAC', '2400sq.ft', 'Builder Floor', 's1.jpg', '1BHK', 'active'),
(25, 1, 'pintu birajdar', 413217, '20LAC', '2000sq.ft', 'Individual Houses/Villas', 'ff80818163f29c9e0163f367fc41184b_52572_large.jpg', '3BHK', 'active'),
(26, 5, 'malluraj', 413009, '10LAC', '2000sq.ft', '', '4c57573a8bd9195bec8e86297e18c1e3.jpg', '1BHK', 'active'),
(27, 1, 'pintu', 413006, '10LAC', '2500sq', 'Builder Floor', '3975Modern_triple_store_house_elevation_design_L.jpg', '1BHK', 'active'),
(28, 4, 'pintu', 413006, '10LAC', '2500sq', 'Builder Floor', '5 copy.jpg', '1BHK', 'active'),
(29, 4, 'pintu', 413006, '10LAC', '2500sq', 'Builder Floor', '-projectimagelogo_20181012090602696878.jpg', '1BHK', 'active'),
(31, 4, 'pintu Birajdar', 413002, '10LAC', '2000sq.ft', 'Builder Floor', 'sai-kalyan-apartments-ev.jpg', '3BHK', 'active'),
(32, 6, 'vertex', 413002, '10LAC', '2400sq.ft', 'Flats & Apartments', 'unnamed.jpg', '3BHK', 'active'),
(51, 3, 'p', 413006, 'p', '20000', '', '2bhk-flats-in-sodepur-at-umic-nihar-500x500.jpg', '1BHK', 'active'),
(53, 8, 'abhishek ', 413006, '12', '25', 'Flats & Apartments', 'architecture-768432.jpg', '1BHK', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `regdashboard`
--

CREATE TABLE `regdashboard` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdashboard`
--

INSERT INTO `regdashboard` (`id`, `name`, `email`, `password`, `address`) VALUES
(1, 'abhishek gouda', 'abhishekgouda882@gmail.com', 'abhi123', 'solapur'),
(2, 'teju', 'teju@gmail.com', 'teju', 'solapur'),
(3, 'Abhishek Gouda', 'abhishekgou@gmail.com', 'sss', 'akkashwani solapur'),
(4, 'p', 'p@gmail.com', 'p', 'p'),
(5, 'aarti', 'aarti@gmail.com', 'aarti123', 'solapur'),
(6, 'oo', 'oo@gmail.com', 'oo', 'oo');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `adhar_number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `full_name`, `mobile`, `email`, `username`, `password`, `status`, `adhar_number`) VALUES
(4, 'mona', 88885757555, 'mona@gmail.com', 'mona', 'admin', 'active', 345676543),
(5, 'jaana', 34567, 'tt@gmail.com', 'rty', 'tt', 'active', 4567),
(6, 'abhishek gouda', 9373960367, 'abhishekgouda882@gmail.com', 'abhi', 'admin', 'active', 123456789),
(7, 'Amruta', 9373960367, 'jaana@gmail.com', 'jaana', 'admin', 'active', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `phone`, `email`, `password`, `address`) VALUES
(1, 'abhishek gouda', 9373960367, 'abhishekgouda882@gmail.com', 'abhi123', 'solapur'),
(2, 'teju', 8793743871, 'teju@gmail.com', 'teju123', 'solapur'),
(3, 'shreya', 8793743871, 'shreya@gmail.com', 'shreya123', 'solapur'),
(4, 'Abhishek Gouda', 9373960367, 'abhishekgo82@gmail.com', 'sss', 'akkashwani solapur'),
(5, 'p', 0, 'p@gmail.com', 'p', 'p'),
(6, 'b', 545454545454, 'b@gmail.com', 'bb', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`a_id1`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_details`
--
ALTER TABLE `feedback_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regdashboard`
--
ALTER TABLE `regdashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `a_id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback_details`
--
ALTER TABLE `feedback_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flat`
--
ALTER TABLE `flat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regdashboard`
--
ALTER TABLE `regdashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
