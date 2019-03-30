-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 05:01 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clearancecitywide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE IF NOT EXISTS `admin_account` (
`admin_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password1` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_id`, `username`, `password1`) VALUES
(14, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int(11) NOT NULL,
  `barangay_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`) VALUES
(1, 'Mt. Tonturatoy'),
(2, 'Mobod'),
(3, 'Taboc Norte'),
(4, 'Taboc Sur'),
(5, 'Villaflor');

-- --------------------------------------------------------

--
-- Table structure for table `captain`
--

CREATE TABLE IF NOT EXISTS `captain` (
`captain_id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captain`
--

INSERT INTO `captain` (`captain_id`, `first_name`, `middle_name`, `last_name`, `barangay_id`) VALUES
(1, 'JR ', 'A.', 'Bolleno', 1),
(2, 'Paul', 'Pol', 'Caburnay', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cedula`
--

CREATE TABLE IF NOT EXISTS `cedula` (
  `cedula_number` int(30) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(30,0) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cedula`
--

INSERT INTO `cedula` (`cedula_number`, `date`, `amount`, `staff_id`) VALUES
(1, '2019-03-12', '21', 19);

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE IF NOT EXISTS `clearance` (
`clearance_id` int(30) NOT NULL,
  `person_number` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(30,0) NOT NULL,
  `cedula_number` int(11) NOT NULL,
  `captain_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clearance_id`, `person_number`, `date`, `amount`, `cedula_number`, `captain_id`, `staff_id`, `barangay_id`, `purpose`) VALUES
(12, 12, '2019-03-09', '90', 1, 2, 18, 2, 'Abroad');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
`person_number` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_initial` varchar(30) NOT NULL,
  `status` text NOT NULL,
  `birthday` date NOT NULL,
  `staff_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_number`, `first_name`, `last_name`, `middle_initial`, `status`, `birthday`, `staff_id`, `barangay_id`) VALUES
(11, 'ron', 'cajan', 'm', 'Single', '2001-02-11', 18, 2),
(12, 'ron', 'gagalac', 'm', 'Married', '1212-02-12', 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`staff_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password2` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `middle_name`, `last_name`, `username`, `password2`, `position`, `barangay_id`) VALUES
(18, 'Kelvin', 'Mark', 'Badiang', 'mark', 'mark', 'Secretary', 2),
(19, 'JM', 'Sta', 'Clara', 'jm', 'jm', 'Secretary', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
 ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `captain`
--
ALTER TABLE `captain`
 ADD PRIMARY KEY (`captain_id`);

--
-- Indexes for table `cedula`
--
ALTER TABLE `cedula`
 ADD PRIMARY KEY (`cedula_number`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
 ADD PRIMARY KEY (`clearance_id`), ADD KEY `person_id` (`person_number`), ADD KEY `person_id_2` (`person_number`), ADD KEY `person_number` (`person_number`), ADD KEY `cedula_number` (`cedula_number`), ADD KEY `cedula_number_2` (`cedula_number`), ADD KEY `cedula_number_3` (`cedula_number`), ADD KEY `person_number_2` (`person_number`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`person_number`), ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`staff_id`), ADD KEY `barangay_id` (`barangay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `captain`
--
ALTER TABLE `captain`
MODIFY `captain_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
MODIFY `clearance_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
MODIFY `person_number` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
