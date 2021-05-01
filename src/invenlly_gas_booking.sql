-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2021 at 12:41 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invenlly_gas_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_log`
--

CREATE TABLE `booking_log` (
  `time_stamp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `c_id` int(11) NOT NULL,
  `booking_mode` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking_log`
--

INSERT INTO `booking_log` (`time_stamp`, `c_id`, `booking_mode`) VALUES
('2021-04-03 11:15:11 am', 1001, 'Auto'),
('2021-04-03 11:21:47 am', 1001, 'Auto'),
('2021-04-03 11:22:49 am', 1001, 'Auto'),
('2021-04-09 08:54:24 pm', 1001, 'Auto'),
('2021-04-09 09:05:02 pm', 1001, 'Auto'),
('2021-04-09 09:06:43 pm', 1001, 'Auto'),
('2021-04-10 11:45:30 am', 34, 'Manual'),
('2021-04-10 11:45:31 am', 34, 'Manual'),
('2021-04-10 11:48:05 am', 1001, 'Auto'),
('2021-04-10 11:50:51 am', 1001, 'Auto'),
('2021-04-10 11:51:30 am', 78, 'Manual'),
('2021-04-21 03:22:47 pm', 1001, 'Auto'),
('2021-04-21 03:24:54 pm', 1001, 'Auto'),
('2021-04-21 03:29:00 pm', 1001, 'Manual'),
('2021-04-21 03:32:00 pm', 1001, 'Auto'),
('2021-04-21 03:39:34 pm', 1001, 'Manual'),
('2021-04-21 03:43:45 pm', 1001, 'Manual'),
('2021-04-21 03:49:10 pm', 1001, 'Auto'),
('2021-04-24 12:25:31 pm', 1001, 'Auto'),
('2021-04-25 11:52:26 am', 1001, 'Manual'),
('2021-04-25 11:59:20 am', 1001, 'Manual'),
('2021-04-25 12:00:50 pm', 1001, 'Manual'),
('2021-04-25 12:14:48 pm', 1001, 'Manual'),
('2021-04-25 12:20:09 pm', 1001, 'Manual'),
('2021-04-25 12:23:51 pm', 1001, 'Auto'),
('2021-04-25 12:42:28 pm', 1001, 'Manual'),
('2021-04-25 12:43:27 pm', 1001, 'Auto'),
('2021-04-25 12:46:05 pm', 1001, 'Manual'),
('2021-04-25 12:50:21 pm', 1001, 'Auto'),
('2021-04-25 01:00:28 pm', 1001, 'Auto'),
('2021-04-25 01:02:36 pm', 1001, 'Auto'),
('2021-04-25 06:33:55 pm', 1001, 'Auto'),
('2021-04-25 06:35:11 pm', 1001, 'Auto'),
('2021-04-25 06:36:30 pm', 1001, 'Manual'),
('2021-04-25 06:37:55 pm', 1001, 'Auto'),
('2021-04-25 06:39:28 pm', 1001, 'Manual'),
('2021-04-25 06:42:26 pm', 1001, 'Auto'),
('2021-04-25 06:47:18 pm', 1001, 'Auto'),
('2021-04-25 06:52:25 pm', 1001, 'Manual'),
('2021-04-25 06:56:01 pm', 1001, 'Manual'),
('2021-04-25 07:08:39 pm', 1001, 'Manual'),
('2021-05-01 05:20:35 pm', 1001, 'Auto'),
('2021-05-01 05:25:23 pm', 1001, 'Auto'),
('2021-05-01 05:30:21 pm', 1001, 'Auto'),
('2021-05-01 05:33:13 pm', 1001, 'Auto'),
('2021-05-01 05:38:27 pm', 1001, 'Manual'),
('2021-05-01 05:43:28 pm', 1001, 'Auto'),
('2021-05-01 05:46:26 pm', 1001, 'Auto'),
('2021-05-01 05:51:27 pm', 1001, 'Manual'),
('2021-05-01 05:57:04 pm', 1001, 'Manual'),
('2021-05-01 06:01:16 pm', 1001, 'Auto'),
('2021-05-01 06:06:30 pm', 1001, 'Auto'),
('2021-05-01 06:09:18 pm', 1001, 'Manual'),
('2021-05-01 06:10:22 pm', 75, 'Manual'),
('2021-05-01 06:10:50 pm', 1001, 'Manual');

-- --------------------------------------------------------

--
-- Table structure for table `employee_profile`
--

CREATE TABLE `employee_profile` (
  `user_oid` int(11) NOT NULL,
  `display_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modification_time` timestamp NULL DEFAULT NULL,
  `user_group_oid` int(11) NOT NULL DEFAULT '0',
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_profile`
--

INSERT INTO `employee_profile` (`user_oid`, `display_name`, `email`, `password`, `creation_time`, `last_modification_time`, `user_group_oid`, `link`) VALUES
(200, 'user', 'user1@gmail.com', '12345', '2018-05-13 16:31:07', '2021-05-01 09:15:58', 12, '/2019/gas_leakage/sub_pages/user1/u1.php'),
(201, 'booking_user', 'user2@gmail.com', '12345', '2021-03-14 08:23:09', '2021-05-01 11:49:34', 12, '/2019/gas_booking/sub_pages/user1/u1.php');

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE `gas` (
  `id` int(10) NOT NULL,
  `valve_cmd` int(10) NOT NULL,
  `valve_cmd_ack` int(100) NOT NULL,
  `gas_detected` float NOT NULL,
  `gas_level` int(11) NOT NULL,
  `sms` varchar(1000) NOT NULL,
  `booking_mode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas`
--

INSERT INTO `gas` (`id`, `valve_cmd`, `valve_cmd_ack`, `gas_detected`, `gas_level`, `sms`, `booking_mode`) VALUES
(1, 2, 2, 55.092, 0, '', 0),
(1001, 0, 0, 0, 4, 'NA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Log`
--

CREATE TABLE `Log` (
  `time_stamp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gas_in_air` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Log`
--

INSERT INTO `Log` (`time_stamp`, `gas_in_air`) VALUES
('2021-02-28 11:23:00 am', 100),
('2021-02-28 11:33:30 am', 100),
('2021-02-28 11:57:02 am', 100),
('2021-03-28 07:30:35 pm', 100),
('2021-03-28 07:30:38 pm', 100),
('2021-03-28 07:31:20 pm', 100),
('2021-04-19 06:27:54 pm', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_profile`
--
ALTER TABLE `employee_profile`
  ADD PRIMARY KEY (`user_oid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
