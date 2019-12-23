-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 03:10 PM
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
-- Table structure for table `sbgi_agent_data`
--

CREATE TABLE `sbgi_agent_data` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `slot_id` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_agent_data`
--

INSERT INTO `sbgi_agent_data` (`id`, `zone_id`, `layout_id`, `slot_id`, `details`, `status`, `created`, `updated`) VALUES
(1, 1, 1, 'S101', 'a:4:{i:0;a:8:{s:4:\"name\";s:13:\"Harshavardhan\";s:8:\"agent_id\";s:1:\"1\";s:8:\"position\";s:3:\"BDE\";s:7:\"percent\";s:1:\"1\";s:6:\"amount\";i:1250;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";d:62.5;s:12:\"total_amount\";d:1187.5;}i:1;a:8:{s:4:\"name\";s:10:\"Ravi kumar\";s:8:\"agent_id\";s:1:\"2\";s:8:\"position\";s:3:\"BDO\";s:7:\"percent\";s:1:\"1\";s:6:\"amount\";i:1250;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";d:62.5;s:12:\"total_amount\";d:1187.5;}i:2;a:8:{s:4:\"name\";s:8:\"Gopinath\";s:8:\"agent_id\";s:1:\"3\";s:8:\"position\";s:2:\"MM\";s:7:\"percent\";s:1:\"1\";s:6:\"amount\";i:1250;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";d:62.5;s:12:\"total_amount\";d:1187.5;}i:3;a:8:{s:4:\"name\";s:14:\"Gopinath Reddy\";s:8:\"agent_id\";s:1:\"4\";s:8:\"position\";s:2:\"GM\";s:7:\"percent\";s:1:\"2\";s:6:\"amount\";i:2500;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";i:125;s:12:\"total_amount\";i:2375;}}', 1, '2019-10-01 10:17:37', '2019-10-01 12:17:37');

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
  `password` varchar(250) DEFAULT 'admin@123',
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

INSERT INTO `sbgi_agent_registrations` (`id`, `reg_id`, `name`, `father_husband`, `dob`, `gender`, `qualification`, `mobile`, `email_id`, `password`, `state`, `city`, `address`, `pincode`, `card_type`, `card_id`, `senior_id`, `senior_name`, `bank_acc_number`, `bank_name`, `bank_branch`, `bank_ifsc`, `position`, `status`, `created`, `updated`) VALUES
(1, 'SBG001', 'Gopireddy gaddam', 'laxmareddy', '1980-01-01', 'M', 'ba', 9848410111, 'ahe.gopireddy@gmail.com', 'admin@123', 'TELANGANA', 'K.V.RANGAREDDY', 'BN REDDY NAGAR', 500079, 5, '', '11111', 'gopi', 0, '', '', '', 1, 0, '2019-09-20 07:53:08', '2019-09-20 08:04:31'),
(2, 'SBG002', 'SRI BALAJI BROUP', 'SRI BALAJI', '1980-01-01', 'M', 'BA', 7777979666, 'sbgindia6@gmail.com', 'admin@123', 'TELANGANA', 'HYDERABAD', 'HNO.2--106, SNEHAPURI COLONY, NAGOLE', 500035, 5, '', 'SBG001', 'SRI BALAJI GROUP', 0, '', '', '', 4, 1, '2019-09-21 09:54:29', '2019-09-21 09:54:29'),
(3, 'SBG003', 'ARTHAM SOMESHWAR', 'VENKATESHWARLU', '1981-11-01', 'M', 'INTER', 9912379181, 'someshguptha9@gmail.com', 'admin@123', 'TELANGANA', 'KONDAMALLEPALLY', 'RAGHAVENDRA MOBILES, OPP BUSSTAND, KONDAMALLEPALLY, NALGONDA DIST', 508243, 6, '', 'SBG002', 'SRI BALAJI GROUP', 0, '', '', '', 3, 1, '2019-09-21 10:54:50', '2019-09-21 10:54:50'),
(4, 'SBG004', 'THIRUPATHAIAH BADDULA', 'RAMAIAH', '1987-11-01', 'M', 'BCOM', 9705609183, 'thiru1926@gmail.com', 'admin@123', 'TELANGANA', 'HYDERABAD', 'YASHODA NAGAR, OPP MEDICARE HOSPITAL, SAGAR RING ROAD, HYDERABAD', 500069, 6, '', 'SBG002', 'SRI BALAJI GROUP', 0, '', '', '', 2, 1, '2019-09-21 10:56:59', '2019-09-21 10:56:59');

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
(1, 1, 1, 1, 2, 1, '2019-10-01 10:16:04'),
(2, 1, 1, 2, 2, 1, '2019-10-01 10:16:12'),
(3, 1, 1, 3, 2, 1, '2019-10-01 10:16:20'),
(4, 1, 1, 4, 4, 1, '2019-10-01 10:16:37');

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
(1, 1, 'Bradipat Line 1', 'uploads/subzones_layouts/ed86900bf5a3ae57ba9c5e12ef6c3b1b.jpg', 10, 'a:10:{s:4:\"S101\";a:6:{s:7:\"slot_id\";s:4:\"S101\";s:7:\"details\";s:5:\"hello\";s:11:\"slot_id_num\";s:1:\"1\";s:11:\"sale_amount\";s:6:\"125000\";s:6:\"status\";s:8:\"Reserved\";s:5:\"color\";s:7:\"#d18e08\";}s:4:\"S102\";a:6:{s:7:\"slot_id\";s:4:\"S102\";s:7:\"details\";s:7:\"welcome\";s:11:\"slot_id_num\";s:1:\"2\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S103\";a:6:{s:7:\"slot_id\";s:4:\"S103\";s:7:\"details\";s:3:\"Bye\";s:11:\"slot_id_num\";s:1:\"3\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S104\";a:6:{s:7:\"slot_id\";s:4:\"S104\";s:7:\"details\";s:3:\"Eat\";s:11:\"slot_id_num\";s:1:\"4\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S105\";a:6:{s:7:\"slot_id\";s:4:\"S105\";s:7:\"details\";s:7:\"Godaddy\";s:11:\"slot_id_num\";s:1:\"5\";s:11:\"sale_amount\";s:6:\"582000\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S106\";a:6:{s:7:\"slot_id\";s:4:\"S106\";s:7:\"details\";s:8:\"lenskart\";s:11:\"slot_id_num\";s:1:\"6\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S107\";a:6:{s:7:\"slot_id\";s:4:\"S107\";s:7:\"details\";s:5:\"Nokia\";s:11:\"slot_id_num\";s:1:\"7\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S108\";a:6:{s:7:\"slot_id\";s:4:\"S108\";s:7:\"details\";s:7:\"Samsung\";s:11:\"slot_id_num\";s:1:\"8\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S109\";a:6:{s:7:\"slot_id\";s:4:\"S109\";s:7:\"details\";s:2:\"Lg\";s:11:\"slot_id_num\";s:1:\"9\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1010\";a:6:{s:7:\"slot_id\";s:5:\"S1010\";s:7:\"details\";s:6:\"Busbay\";s:11:\"slot_id_num\";s:2:\"10\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}}', '', 1, '2019-10-01 10:13:04', NULL);

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
(1, 'TDS', 8, 0, 1, '2019-09-30 11:32:24');

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
(1, 'Guntur - 1 ', '', 1, '2019-10-01 10:12:38');

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
-- Indexes for table `sbgi_agent_data`
--
ALTER TABLE `sbgi_agent_data`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `sbgi_agent_data`
--
ALTER TABLE `sbgi_agent_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_agent_registrations`
--
ALTER TABLE `sbgi_agent_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
