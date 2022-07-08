-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2022 at 02:54 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u934528785_rcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activate_ac`
--

CREATE TABLE `activate_ac` (
  `id` int(20) UNSIGNED NOT NULL,
  `uid` int(16) NOT NULL,
  `email` varchar(69) NOT NULL,
  `activate` varchar(16) NOT NULL,
  `token` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(33) NOT NULL,
  `last_name` varchar(33) NOT NULL,
  `username` varchar(44) NOT NULL,
  `password` varchar(96) NOT NULL,
  `role` varchar(33) NOT NULL,
  `doj` varchar(55) NOT NULL,
  `last_login` varchar(55) NOT NULL,
  `last_logout` varchar(55) NOT NULL,
  `login_attempt` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `username`, `password`, `role`, `doj`, `last_login`, `last_logout`, `login_attempt`) VALUES
(1, 'Tony', 'Thomas', 'tony', '$2y$10$XjsS8IHHWadmVYw3pvIaE.F3Nu.jZqaEDgbFIoFinnYTg7EPBEyTO', 'Admin', '1996-07-27', '24-10-2019 (Thu) 21:58:49', '22-10-2019 (Tue) 13:49:20', '0');

-- --------------------------------------------------------

--
-- Table structure for table `apply_request`
--

CREATE TABLE `apply_request` (
  `id` int(11) NOT NULL,
  `rid` varchar(22) NOT NULL,
  `uid` int(22) NOT NULL,
  `fname` varchar(69) NOT NULL,
  `lname` varchar(69) NOT NULL,
  `year` varchar(40) NOT NULL,
  `prn` int(10) DEFAULT NULL,
  `receipt` varchar(40) NOT NULL,
  `cast` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `age` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `station` varchar(22) NOT NULL,
  `via` varchar(69) NOT NULL,
  `class` varchar(22) NOT NULL,
  `period` varchar(33) NOT NULL,
  `time_stamp` varchar(25) NOT NULL,
  `frmfill` tinyint(4) NOT NULL DEFAULT 0,
  `receipt_doc` varchar(60) NOT NULL DEFAULT '0',
  `clgid` varchar(60) NOT NULL DEFAULT '0',
  `castcert` varchar(60) NOT NULL DEFAULT '0',
  `frmup` tinyint(4) NOT NULL DEFAULT 0,
  `update_form` tinyint(4) NOT NULL DEFAULT 0,
  `verify` tinyint(4) NOT NULL DEFAULT 0,
  `vtime` varchar(15) NOT NULL,
  `process` tinyint(4) NOT NULL DEFAULT 0,
  `ptime` int(15) NOT NULL,
  `ready` tinyint(4) NOT NULL DEFAULT 0,
  `rtime` varchar(15) NOT NULL,
  `cert_no` varchar(55) NOT NULL,
  `reject` tinyint(4) NOT NULL DEFAULT 0,
  `reject_reason` text NOT NULL,
  `new_student` tinyint(4) NOT NULL DEFAULT 0,
  `done` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `IP` varchar(300) NOT NULL,
  `date_time` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `ID` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `selector` char(16) DEFAULT NULL,
  `token` char(64) DEFAULT NULL,
  `expires` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `renew_request`
--

CREATE TABLE `renew_request` (
  `id` int(11) NOT NULL,
  `rid` varchar(22) NOT NULL,
  `uid` int(22) NOT NULL,
  `fname` varchar(69) NOT NULL,
  `lname` varchar(69) NOT NULL,
  `year` varchar(40) NOT NULL,
  `prn` int(10) NOT NULL,
  `cast` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `age` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `station` varchar(22) NOT NULL,
  `via` varchar(69) NOT NULL,
  `class` varchar(22) NOT NULL,
  `period` varchar(33) NOT NULL,
  `time_stamp` varchar(25) NOT NULL,
  `frmfill` tinyint(4) NOT NULL DEFAULT 0,
  `clgid` varchar(60) NOT NULL DEFAULT '0',
  `castcert` varchar(60) NOT NULL DEFAULT '0',
  `ppass` varchar(60) NOT NULL DEFAULT '0',
  `frmup` tinyint(4) NOT NULL DEFAULT 0,
  `update_form` tinyint(4) NOT NULL DEFAULT 0,
  `verify` tinyint(4) NOT NULL DEFAULT 0,
  `vtime` varchar(15) NOT NULL,
  `process` tinyint(4) NOT NULL DEFAULT 0,
  `ptime` int(15) NOT NULL,
  `ready` tinyint(4) NOT NULL DEFAULT 0,
  `rtime` varchar(15) NOT NULL,
  `cert_no` varchar(55) NOT NULL,
  `reject` tinyint(4) NOT NULL DEFAULT 0,
  `reject_reason` text NOT NULL,
  `done` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `ID` tinyint(4) NOT NULL DEFAULT 1,
  `body_skin` varchar(50) NOT NULL DEFAULT 'skin-blue',
  `skin_css` varchar(60) NOT NULL DEFAULT 'skin-blue.css',
  `email_status` tinyint(4) NOT NULL,
  `unlink_status` tinyint(4) NOT NULL,
  `admission_season` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`ID`, `body_skin`, `skin_css`, `email_status`, `unlink_status`, `admission_season`) VALUES
(1, 'skin-blue', 'skin-blue.min.css', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `year` varchar(30) NOT NULL,
  `prn` int(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastpassup` varchar(40) NOT NULL,
  `date_joined` varchar(40) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `loggedin` varchar(40) NOT NULL,
  `loggedout` varchar(40) NOT NULL,
  `login_attempt` int(15) NOT NULL DEFAULT 0,
  `block_reason` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `resendcount` tinyint(1) NOT NULL DEFAULT 0,
  `small` varchar(69) NOT NULL,
  `medium` varchar(69) NOT NULL,
  `receipt_doc` varchar(60) NOT NULL DEFAULT '0',
  `clgid` varchar(150) NOT NULL DEFAULT '0',
  `castcert` varchar(150) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `dob`, `gender`, `year`, `prn`, `password`, `lastpassup`, `date_joined`, `hash`, `loggedin`, `loggedout`, `login_attempt`, `block_reason`, `active`, `resendcount`, `small`, `medium`, `receipt_doc`, `clgid`, `castcert`) VALUES
(1, 'Tony', 'Thomas', 'hey@tonythomas.uk', '1996-07-27', 'Male', 'T.E Computer', 163041013, '$2y$10$XjsS8IHHWadmVYw3pvIaE.F3Nu.jZqaEDgbFIoFinnYTg7EPBEyTO', '1547918357', '2018-02-19', '721c3051ea69e1c5fd9f53ca46d8b42c', '10-06-2022 (Fri) 18:40:43', '18-02-2022 (Fri) 21:35:46', 0, '0', 1, 0, './uploades/small/6721571732237.jpg', './uploades/medium/6721571732237.jpg', '0', 'documents/CLGID1571732007433856934.jpg', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activate_ac`
--
ALTER TABLE `activate_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_request`
--
ALTER TABLE `apply_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `renew_request`
--
ALTER TABLE `renew_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activate_ac`
--
ALTER TABLE `activate_ac`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_request`
--
ALTER TABLE `apply_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `renew_request`
--
ALTER TABLE `renew_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
