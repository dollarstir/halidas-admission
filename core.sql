-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2019 at 06:16 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Halidas College', 'admin@hct.com', 'hct2019');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `nation` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `pob` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `rel` varchar(200) NOT NULL,
  `pic` text NOT NULL,
  `s1` varchar(200) NOT NULL,
  `c1` varchar(200) NOT NULL,
  `start` varchar(200) NOT NULL,
  `end` varchar(200) NOT NULL,
  `programe` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `native` varchar(200) NOT NULL,
  `pcontact` varchar(200) NOT NULL,
  `doa` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `yoa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `fname`, `lname`, `email`, `contact`, `dob`, `gender`, `town`, `nation`, `sex`, `pob`, `position`, `rel`, `pic`, `s1`, `c1`, `start`, `end`, `programe`, `pname`, `native`, `pcontact`, `doa`, `status`, `yoa`) VALUES
(6, 'Frederick', 'Mensah', 'kpin463@gmail.com', '0556676471', '07/03/2019', 'Male', 'Kumasi', 'Ghanaian', 'Single', 'Kumasi', 'Student', 'Christian', 'upload/b18-2_1564176453.jpg', 'ASANTEMAN SHS', 'WASSCE', '2013', '2016', 'Married', 'DollarStir', 'Father', '055667676', '26th July, 2019', 'Approved', '2019'),
(7, 'Kent', 'Baidoo', 'kent@gmail.com', '05555443434', '07/12/2019', 'Male', 'Kumasi', 'Ghanaian', 'Single', 'Kumasi', 'Student', 'Christian', 'upload/_1564321553.', 'ASANTEMAN SHS', 'WASSCE', '2013', '2016', 'Married', 'Mr MensahBonsu', 'father', '03434343434555', '28th July, 2019', 'Pending', '2019'),
(8, 'Kent', 'Baidoo', 'admin@hct.com', '0556676434', '07/09/2019', 'Female', 'Kumasi', 'Ghanaian', 'Married', 'Kumasi', 'Student', 'Christian', 'upload/152436_1564322492.jpg', 'ASANTEMAN SHS', 'WASSCE', '2013', '2016', 'Divorced', 'DollarBonsu', 'Father', '055667676', '28th July, 2019', 'Pending', '2019'),
(9, 'Kent', 'Baidoo', 'admin@hct.com', '055667643454656', '07/09/2019', 'Female', 'Kumasi', 'Ghanaian', 'Married', 'Kumasi', 'Student', 'Christian', 'upload/152436_1564322593.jpg', 'ASANTEMAN SHS', 'WASSCE', '2013', '2016', 'Divorced', 'DollarBonsu', 'Father', '055667676', '28th July, 2019', 'Pending', '2019'),
(14, 'Kent', 'erergrtg', 'salamatudawood98@gmail.com', '05566764713549', '07/10/2019', 'Male', 'Kumasi', 'Ghanaian', 'Divorced', 'Kumasi', 'Student', 'Christian', 'upload/318594_1564329312.jpg', 'ASANTEMAN SHS', 'WASSCE', '2013', '2016', 'Single', 'Mr MensahStir', 'Father', '055667676', '28th July, 2019', 'Pending', '2019'),
(15, 'Kent', 'erergrtg', 'kpin463@gmail.com', '89765', '07/17/2019', 'Male', 'Kumasi', 'Ghanaian', 'Single', 'Kumasi', 'Student', 'Christian', 'upload/_1564329590.', 'ASANTEMAN SHS', 'WASSCE', '2013', '2016', 'Single', 'Mr MensahBonsu', 'Father', '055667676', '28th July, 2019', 'Pending', '2019'),
(19, 'Kent', 'Baidoo', 'salamatudawood98@gmail.com', '43854965849', '07/10/2019', 'Male', 'Kumasi', 'Ghanaian', 'Single', 'Kumasi', 'Student', 'Christian', 'upload/afa1964bd4167381f01f0d1f7f918a76_1564330918.jpg', 'ASANTEMAN SHS', 'WASSCE', '2013', '2016', 'Married', 'Dollar Bonsu', 'Father', '03434343434555', '28th July, 2019', 'Pending', '2019'),
(20, 'ergrtt', 'erergrtg', 'salamatudawood98@gmail.com', '3445', '07/24/2019', 'Female', 'Kumasi', 'Ghanaian', 'Single', 'Kumasi', 'Student', 'Christian', 'upload/N9m4IC_1564331190.jpg', 'ASANTEMAN SHS', 'WASSCE', '2013', '2016', 'Married', 'Mr Mensah Bonsu', 'father', '03434343434555', '28th July, 2019', 'Pending', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `pin` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `batch` varchar(200) NOT NULL,
  `ustatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `serial`, `pin`, `status`, `batch`, `ustatus`) VALUES
(15, 'HCT469795', '944628', 'Sold', '2019', 'Not used'),
(16, 'HCT202386', '353944', 'Sold', '2019', 'Not used'),
(17, 'HCT561029', '666919', 'Sold', '2019', 'Not used'),
(18, 'HCT574754', '568337', 'Available', '2019', 'Not used'),
(19, 'HCT138367', '569105', 'Available', '2019', 'Not used'),
(20, 'HCT694413', '764614', 'Available', '2019', 'Not used'),
(21, 'HCT707003', '989536', 'Available', '2019', 'Not used'),
(22, 'HCT396260', '980201', 'Available', '2019', 'Not used');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
