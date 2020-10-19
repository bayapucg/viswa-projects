-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2020 at 04:32 PM
-- Server version: 10.3.23-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rfidattendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(80) NOT NULL,
  `admin_pwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_pwd`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$89uX3LBy4mlU/DcBveQ1l.32nSianDP/E1MfUh.Z.6B4Z0ql3y7PK');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogins`
--

CREATE TABLE `adminlogins` (
  `uid` int(11) NOT NULL,
  `uname` varchar(200) DEFAULT NULL,
  `uemail` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` smallint(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `athomreports`
--

CREATE TABLE `athomreports` (
  `id` int(11) NOT NULL,
  `custid` varchar(200) DEFAULT NULL,
  `reportertype` varchar(100) DEFAULT NULL COMMENT 'Visitor/Employer',
  `employee_rfid` varchar(200) DEFAULT 'NULL',
  `username` varchar(200) NOT NULL,
  `card_uid` varchar(200) NOT NULL,
  `photoimge` varchar(200) DEFAULT NULL,
  `mobilenumber` varchar(200) DEFAULT NULL,
  `temp` varchar(30) DEFAULT NULL,
  `spo2` varchar(30) DEFAULT NULL,
  `bpm` varchar(30) DEFAULT NULL,
  `status` smallint(2) DEFAULT 1,
  `createdat` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `athomreports`
--

INSERT INTO `athomreports` (`id`, `custid`, `reportertype`, `employee_rfid`, `username`, `card_uid`, `photoimge`, `mobilenumber`, `temp`, `spo2`, `bpm`, `status`, `createdat`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', '', '248', '100', '93.25', NULL, NULL, '93.25', '100', '136', 1, '2020-10-17 14:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `device_dep` varchar(20) NOT NULL,
  `device_uid` text NOT NULL,
  `device_date` date NOT NULL,
  `device_mode` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_name`, `device_dep`, `device_uid`, `device_date`, `device_mode`) VALUES
(1, 'atohm', 'safety', '6c44f208be5e86da', '2020-10-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `facerec`
--

CREATE TABLE `facerec` (
  `id` int(11) NOT NULL,
  `Empname` varchar(30) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facerec`
--

INSERT INTO `facerec` (`id`, `Empname`, `time`) VALUES
(1, 'nitesh', 'Fri Oct  2 16:49:14 2020'),
(2, 'nitesh', 'Fri Oct  2 17:28:45 2020'),
(3, 'shyam', 'Fri Oct  2 17:28:54 2020'),
(4, 'shyam', 'Fri Oct  2 17:42:06 2020'),
(5, 'nitesh', 'Fri Oct  2 17:42:11 2020'),
(6, 'shyam', 'Fri Oct  2 17:46:41 2020'),
(7, 'nitesh', 'Fri Oct  2 17:52:26 2020');

-- --------------------------------------------------------

--
-- Table structure for table `pulseox`
--

CREATE TABLE `pulseox` (
  `id` int(11) NOT NULL,
  `temp` varchar(20) NOT NULL,
  `spo2` varchar(20) NOT NULL,
  `bpm` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `statusflag` smallint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pulseox`
--

INSERT INTO `pulseox` (`id`, `temp`, `spo2`, `bpm`, `datetime`, `statusflag`) VALUES
(239, '91.68', '100', '136', '2020-10-17 13:19:05', 1),
(240, '92.12', '100', '136', '2020-10-17 13:19:05', 1),
(241, '92.24', '100', '136', '2020-10-17 13:19:06', 1),
(242, '92.46', '100', '136', '2020-10-17 13:19:08', 1),
(243, '92.69', '99', '100', '2020-10-17 13:19:11', 1),
(244, '92.46', '100', '125', '2020-10-17 13:19:11', 1),
(245, '92.69', '100', '125', '2020-10-17 13:19:12', 1),
(246, '92.91', '100', '166', '2020-10-17 13:19:13', 1),
(247, '93.02', '100', '125', '2020-10-17 13:19:15', 1),
(248, '93.25', '100', '136', '2020-10-17 13:19:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT 'None',
  `serialnumber` double NOT NULL DEFAULT 0,
  `gender` varchar(10) NOT NULL DEFAULT 'None',
  `email` varchar(50) NOT NULL DEFAULT 'None',
  `card_uid` varchar(30) NOT NULL,
  `card_select` tinyint(1) NOT NULL DEFAULT 0,
  `user_date` date NOT NULL,
  `device_uid` varchar(20) NOT NULL DEFAULT '0',
  `device_dep` varchar(20) NOT NULL DEFAULT '0',
  `add_card` tinyint(1) NOT NULL DEFAULT 0,
  `lastidenityflag` smallint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `serialnumber`, `gender`, `email`, `card_uid`, `card_select`, `user_date`, `device_uid`, `device_dep`, `add_card`, `lastidenityflag`) VALUES
(8, 'shyam', 34, 'Male', 'surya@gmail.com', '2133516545', 1, '2020-10-17', '6c44f208be5e86da', 'safety', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE `users_logs` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `serialnumber` double NOT NULL,
  `card_uid` varchar(30) NOT NULL,
  `device_uid` varchar(20) NOT NULL,
  `device_dep` varchar(20) NOT NULL,
  `checkindate` date NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `card_out` tinyint(1) NOT NULL DEFAULT 0,
  `lastidenityflag` smallint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogins`
--
ALTER TABLE `adminlogins`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `athomreports`
--
ALTER TABLE `athomreports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facerec`
--
ALTER TABLE `facerec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pulseox`
--
ALTER TABLE `pulseox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_logs`
--
ALTER TABLE `users_logs`
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
-- AUTO_INCREMENT for table `adminlogins`
--
ALTER TABLE `adminlogins`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `athomreports`
--
ALTER TABLE `athomreports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `facerec`
--
ALTER TABLE `facerec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pulseox`
--
ALTER TABLE `pulseox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
