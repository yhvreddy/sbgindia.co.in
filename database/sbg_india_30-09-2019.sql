-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 02:57 PM
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
-- Database: `sbg_india`
--

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_admin_users`
--

CREATE TABLE `sbgi_admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email_id` varchar(350) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_admin_users`
--

INSERT INTO `sbgi_admin_users` (`id`, `name`, `mobile`, `email_id`, `password`, `status`, `created`, `updated`) VALUES
(1, 'Administrator ', 9876543210, 'admin@gmail.com', 'admin@123', 1, '2019-09-11 05:52:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_agent_registrations`
--

CREATE TABLE `sbgi_agent_registrations` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(25) NOT NULL,
  `name` varchar(350) DEFAULT NULL,
  `father_husband` varchar(350) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `qualification` varchar(350) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email_id` varchar(350) NOT NULL,
  `state` varchar(250) DEFAULT 'NULL',
  `city` varchar(250) DEFAULT 'NULL',
  `address` text NOT NULL,
  `pincode` int(11) DEFAULT NULL,
  `card_type` int(11) NOT NULL,
  `card_id` varchar(150) NOT NULL,
  `senior_id` varchar(150) NOT NULL,
  `senior_name` varchar(350) NOT NULL,
  `bank_acc_number` bigint(20) NOT NULL,
  `bank_name` varchar(150) NOT NULL,
  `bank_branch` varchar(200) NOT NULL,
  `bank_ifsc` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_agent_registrations`
--

INSERT INTO `sbgi_agent_registrations` (`id`, `reg_id`, `name`, `father_husband`, `dob`, `gender`, `qualification`, `mobile`, `email_id`, `state`, `city`, `address`, `pincode`, `card_type`, `card_id`, `senior_id`, `senior_name`, `bank_acc_number`, `bank_name`, `bank_branch`, `bank_ifsc`, `position`, `status`, `created`, `updated`) VALUES
(1, 'SBG001', 'Harshavardhan Reddy', 'Bakkireddy', '1994-10-17', 'M', 'Degree Bsc', 9492411708, 'vardhan7794@gmail.com', 'Telanagana', 'Hyderabad', 'sr.nagar', 500038, 6, '124568964859', '125', 'HA', 8465448885, 'SBI', 'SRNAGR', 'SBI251S5410', 4, 0, '2019-09-11 09:41:54', '2019-09-11 14:16:06'),
(2, 'SBG002', 'Ravi kumar', 'Venkat Reddy', '1994-10-17', 'M', 'B-tech', 9632587410, 'ravi@gmail.com', 'Telanagana', 'Hyderabad', 'sr.nagar', 500038, 5, 'PN14BD1458R', '0015', 'Raaa', 85478547856, 'RBL', 'Madhapur', 'RBL01478200', 2, 1, '2019-09-11 12:12:39', '2019-09-11 14:12:39'),
(3, 'SBG003', 'Harshavardhan', 'Bakkireddy', '1994-10-17', 'M', 'Degree Bsc', 8019660099, 'yhvreddyjob@gmail.com', 'Telanagana', 'Hyderabad', 'sr.nagar', 500038, 0, '', '0015', 'ADKDJKLAJ', 0, '', '', '', 2, 1, '2019-09-19 07:08:12', '2019-09-19 09:08:12'),
(4, 'SBG004', 'Harshavardhan Reddy', 'Bakkireddy', '1994-10-17', 'M', 'Degree Bsc', 8885883358, 'yhvreddywork@gmail.com', 'Telanagana', 'Hyderabad', 'sr.nagar', 500038, 0, '', '12534', 'ADKDJKLAJ', 0, '', '', '', 2, 1, '2019-09-19 09:32:35', '2019-09-19 11:32:35'),
(5, 'SBG005', 'Harshavardhan', 'Bakkireddy', '1994-10-18', 'M', 'Degree Bsc', 8142250099, 'vardhan7794@yahoo.com', 'Telanagana', 'Hyderabad', 'sr.nagar', 500038, 0, '', '0015', 'ADKDJKLAJ', 0, '', '', '', 2, 1, '2019-09-20 05:21:44', '2019-09-20 07:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_categories`
--

CREATE TABLE `sbgi_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(350) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_categories`
--

INSERT INTO `sbgi_categories` (`id`, `name`, `image`, `status`, `created`) VALUES
(1, 'Caregory_one', 'uploads/Categories/ddbfc8541e4ef1742def9e96ee91cb97.jpg', 1, '2019-09-11 10:41:45'),
(2, 'Caregory_two', 'uploads/Categories/7e52894f5769932bf930c8e81c78ed9b.jpg', 1, '2019-09-11 12:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_formdata`
--

CREATE TABLE `sbgi_formdata` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `short_name` varchar(150) NOT NULL,
  `type` varchar(25) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_formdata`
--

INSERT INTO `sbgi_formdata` (`id`, `name`, `short_name`, `type`, `status`, `created`) VALUES
(1, 'BDE', 'bde', 'position', 1, '2019-09-11 07:35:08'),
(2, 'BDO', 'bdo', 'position', 1, '2019-09-11 07:35:08'),
(3, 'MM', 'mm', 'position', 1, '2019-09-11 07:35:08'),
(4, 'GM', 'gm', 'position', 1, '2019-09-11 07:35:08'),
(5, 'PANCARD', 'pan', 'govt_ids', 1, '2019-09-11 07:37:29'),
(6, 'AADHAR', 'aadhar', 'govt_ids', 1, '2019-09-11 07:37:29'),
(7, 'Male', 'M', 'gender', 1, '2019-09-11 07:42:45'),
(8, 'Female', 'FM', 'gender', 1, '2019-09-11 07:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_percent`
--

CREATE TABLE `sbgi_percent` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_percent`
--

INSERT INTO `sbgi_percent` (`id`, `zone_id`, `layout_id`, `position_id`, `percent`, `status`, `created`) VALUES
(1, 1, 1, 1, 2, 1, '2019-09-30 07:19:20'),
(2, 1, 1, 2, 1, 1, '2019-09-30 07:30:42'),
(3, 1, 1, 3, 1, 1, '2019-09-30 07:30:51'),
(4, 1, 1, 4, 1, 1, '2019-09-30 07:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_sub_zones`
--

CREATE TABLE `sbgi_sub_zones` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `subzone_name` varchar(350) NOT NULL,
  `image` text DEFAULT NULL,
  `slots` int(11) DEFAULT NULL,
  `slots_details` longtext DEFAULT NULL,
  `information` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_sub_zones`
--

INSERT INTO `sbgi_sub_zones` (`id`, `zone_id`, `subzone_name`, `image`, `slots`, `slots_details`, `information`, `status`, `created`, `updated`) VALUES
(1, 2, 'Bradipat Line 1', 'uploads/subzones_layouts/9853efc700d49a2e156a1b6d4bc283da.jpg', 10, 'a:10:{s:4:\"S101\";a:6:{s:7:\"slot_id\";s:4:\"S101\";s:7:\"details\";s:6:\"jsdfjh\";s:11:\"slot_id_num\";s:1:\"1\";s:11:\"sale_amount\";s:6:\"100000\";s:6:\"status\";s:8:\"Reserved\";s:5:\"color\";s:7:\"#d18e08\";}s:4:\"S102\";a:6:{s:7:\"slot_id\";s:4:\"S102\";s:7:\"details\";s:8:\"skdjfhks\";s:11:\"slot_id_num\";s:1:\"2\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S103\";a:6:{s:7:\"slot_id\";s:4:\"S103\";s:7:\"details\";s:8:\"dsfnkdsn\";s:11:\"slot_id_num\";s:1:\"3\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S104\";a:6:{s:7:\"slot_id\";s:4:\"S104\";s:7:\"details\";s:13:\"sdnf,msn dm,n\";s:11:\"slot_id_num\";s:1:\"4\";s:11:\"sale_amount\";s:6:\"250580\";s:6:\"status\";s:8:\"Reserved\";s:5:\"color\";s:7:\"#d18e08\";}s:4:\"S105\";a:6:{s:7:\"slot_id\";s:4:\"S105\";s:7:\"details\";s:9:\"dsnnds,nk\";s:11:\"slot_id_num\";s:1:\"5\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S106\";a:6:{s:7:\"slot_id\";s:4:\"S106\";s:7:\"details\";s:7:\"sakfnsk\";s:11:\"slot_id_num\";s:1:\"6\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S107\";a:6:{s:7:\"slot_id\";s:4:\"S107\";s:7:\"details\";s:9:\"cd v,msdn\";s:11:\"slot_id_num\";s:1:\"7\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S108\";a:6:{s:7:\"slot_id\";s:4:\"S108\";s:7:\"details\";s:10:\"kdsfjkldsj\";s:11:\"slot_id_num\";s:1:\"8\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S109\";a:6:{s:7:\"slot_id\";s:4:\"S109\";s:7:\"details\";s:11:\"sdkfnsdkjnk\";s:11:\"slot_id_num\";s:1:\"9\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1010\";a:6:{s:7:\"slot_id\";s:5:\"S1010\";s:7:\"details\";s:7:\"skjfnkd\";s:11:\"slot_id_num\";s:2:\"10\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}}', '', 1, '2019-09-30 09:10:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_taxs`
--

CREATE TABLE `sbgi_taxs` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tax` float NOT NULL,
  `amount` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_taxs`
--

INSERT INTO `sbgi_taxs` (`id`, `name`, `tax`, `amount`, `status`, `created`) VALUES
(1, 'TDS', 5, 0, 1, '2019-09-30 11:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_zones`
--

CREATE TABLE `sbgi_zones` (
  `id` int(11) NOT NULL,
  `name` varchar(350) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_zones`
--

INSERT INTO `sbgi_zones` (`id`, `name`, `image`, `status`, `created`) VALUES
(1, 'Guntur - North', '', 1, '2019-09-23 06:03:19'),
(2, 'Guntur - South', '', 1, '2019-09-23 06:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sbgi_admin_users`
--
ALTER TABLE `sbgi_admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `sbgi_agent_registrations`
--
ALTER TABLE `sbgi_agent_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_categories`
--
ALTER TABLE `sbgi_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_formdata`
--
ALTER TABLE `sbgi_formdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_percent`
--
ALTER TABLE `sbgi_percent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_sub_zones`
--
ALTER TABLE `sbgi_sub_zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_taxs`
--
ALTER TABLE `sbgi_taxs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_zones`
--
ALTER TABLE `sbgi_zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sbgi_admin_users`
--
ALTER TABLE `sbgi_admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_agent_registrations`
--
ALTER TABLE `sbgi_agent_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sbgi_categories`
--
ALTER TABLE `sbgi_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sbgi_formdata`
--
ALTER TABLE `sbgi_formdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sbgi_percent`
--
ALTER TABLE `sbgi_percent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sbgi_sub_zones`
--
ALTER TABLE `sbgi_sub_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_taxs`
--
ALTER TABLE `sbgi_taxs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_zones`
--
ALTER TABLE `sbgi_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
