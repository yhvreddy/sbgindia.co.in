-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 04:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keyaan_sbgindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_about_us`
--

CREATE TABLE `sbgi_about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(350) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_about_us`
--

INSERT INTO `sbgi_about_us` (`id`, `title`, `information`, `image`, `status`, `created`, `updated`) VALUES
(1, 'About Us', '<blockquote>\r\n<p><small><big><em><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SRI BALAJI GROUP</strong></em></big></small></p>\r\n</blockquote>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor.</p>\r\n', 'uploads/banners/2950d5024807659e2be514c180c83a37.jpg', 1, '2019-10-30 22:38:31', '2019-11-08 10:06:08');

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
(1, 'Administrator ', 9876543210, 'admin@gmail.com', 'admin@123', 1, '2019-09-10 18:52:20', NULL);

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
(1, 1, 1, 'S101', 'a:4:{i:0;a:8:{s:4:\"name\";s:18:\"NAGULAPALLY SUDHIR\";s:8:\"agent_id\";s:1:\"7\";s:8:\"position\";s:3:\"BDE\";s:7:\"percent\";N;s:6:\"amount\";i:0;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";i:0;s:12:\"total_amount\";i:0;}i:1;a:8:{s:4:\"name\";s:21:\"THIRUPATHAIAH BADDULA\";s:8:\"agent_id\";s:1:\"4\";s:8:\"position\";s:3:\"BDO\";s:7:\"percent\";N;s:6:\"amount\";i:0;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";i:0;s:12:\"total_amount\";i:0;}i:2;a:8:{s:4:\"name\";s:16:\"ARTHAM SOMESHWAR\";s:8:\"agent_id\";s:1:\"3\";s:8:\"position\";s:2:\"MM\";s:7:\"percent\";N;s:6:\"amount\";i:0;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";i:0;s:12:\"total_amount\";i:0;}i:3;a:8:{s:4:\"name\";s:20:\"ABBANONI RAMAKRISHNA\";s:8:\"agent_id\";s:1:\"6\";s:8:\"position\";s:2:\"GM\";s:7:\"percent\";N;s:6:\"amount\";i:0;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";i:0;s:12:\"total_amount\";i:0;}}', 1, '2019-11-09 05:43:34', '2019-11-09 11:13:34'),
(2, 1, 1, 'S102', 'a:4:{i:0;a:8:{s:4:\"name\";s:18:\"NAGULAPALLY SUDHIR\";s:8:\"agent_id\";s:1:\"7\";s:8:\"position\";s:3:\"BDE\";s:7:\"percent\";s:1:\"8\";s:6:\"amount\";i:680;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";i:34;s:12:\"total_amount\";i:646;}i:1;a:8:{s:4:\"name\";s:21:\"THIRUPATHAIAH BADDULA\";s:8:\"agent_id\";s:1:\"4\";s:8:\"position\";s:3:\"BDO\";s:7:\"percent\";s:2:\"12\";s:6:\"amount\";i:1020;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";i:51;s:12:\"total_amount\";i:969;}i:2;a:8:{s:4:\"name\";s:16:\"ARTHAM SOMESHWAR\";s:8:\"agent_id\";s:1:\"3\";s:8:\"position\";s:2:\"MM\";s:7:\"percent\";s:2:\"15\";s:6:\"amount\";i:1275;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";d:63.75;s:12:\"total_amount\";d:1211.25;}i:3;a:8:{s:4:\"name\";s:16:\"SRI BALAJI BROUP\";s:8:\"agent_id\";s:1:\"2\";s:8:\"position\";s:2:\"GM\";s:7:\"percent\";s:2:\"20\";s:6:\"amount\";i:1700;s:7:\"tds_tax\";s:1:\"5\";s:10:\"tax_amount\";i:85;s:12:\"total_amount\";i:1615;}}', 1, '2019-11-13 01:26:39', '2019-11-13 06:56:39');

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
(1, 'SBG001', 'Gopireddy gaddam', 'laxmareddy', '1980-01-01', 'M', 'ba', 9848410111, 'ahe.gopireddy@gmail.com', 'admin@123', 'TELANGANA', 'K.V.RANGAREDDY', 'BN REDDY NAGAR', 500079, 5, '', '11111', 'gopi', 0, '', '', '', 4, 1, '2019-09-19 20:53:08', '2019-11-01 10:22:09'),
(2, 'SBG002', 'SRI BALAJI BROUP', 'SRI BALAJI', '1980-01-01', 'M', 'BA', 7777979666, 'sbgindia6@gmail.com', 'admin@123', 'TELANGANA', 'HYDERABAD', 'HNO.2--106, SNEHAPURI COLONY, NAGOLE', 500035, 5, '', 'SBG001', 'SRI BALAJI GROUP', 0, '', '', '', 4, 1, '2019-09-20 22:54:29', '2019-09-21 09:54:29'),
(3, 'SBG003', 'ARTHAM SOMESHWAR', 'VENKATESHWARLU', '1981-11-01', 'M', 'INTER', 9912379181, 'someshguptha9@gmail.com', 'admin@123', 'TELANGANA', 'KONDAMALLEPALLY', 'RAGHAVENDRA MOBILES, OPP BUSSTAND, KONDAMALLEPALLY, NALGONDA DIST', 508243, 6, '', 'SBG002', 'SRI BALAJI GROUP', 0, '', '', '', 3, 1, '2019-09-20 23:54:50', '2019-09-21 10:54:50'),
(4, 'SBG004', 'THIRUPATHAIAH BADDULA', 'RAMAIAH', '1987-11-01', 'M', 'BCOM', 9705609183, 'thiru1926@gmail.com', 'admin@123', 'TELANGANA', 'HYDERABAD', 'YASHODA NAGAR, OPP MEDICARE HOSPITAL, SAGAR RING ROAD, HYDERABAD', 500069, 6, '', 'SBG002', 'SRI BALAJI GROUP', 0, '', '', '', 2, 1, '2019-09-20 23:56:59', '2019-10-26 18:01:23'),
(5, 'SBG005', 'k', 'kk', '2019-10-16', 'M', 'btech', 8885883358, 'kmanigopinath@gmail.com', 'Mani@123', 'Ap', 'hyderabad', 'madhapur', 500081, 5, 'dfgdsfg', '1', '1', 0, '', '', '', 1, 0, '2019-10-29 02:21:51', '2019-10-31 07:37:36'),
(6, 'SBG006', 'ABBANONI RAMAKRISHNA', 'SATHAIAH', '1982-07-20', 'M', 'BA', 9959573292, 'rkservices2020@gmail.com', 'SBG@123', 'TELANGANA', 'HYDERABAD', 'NAGOLE', 500035, 0, '', 'SBG002', 'SRI BALAJI GROUP', 0, '', '', '', 4, 1, '2019-10-31 04:50:54', '2019-10-31 10:20:54'),
(7, 'SBG007', 'NAGULAPALLY SUDHIR', 'JOHN WESLEY BABU', '1992-04-12', 'M', 'SSC', 9030070961, 'sudheer12491@gmail.com', 'SBG@123', 'TELANGANA', 'HYDERABAD', 'HNO.8-77, RAMACHANDRAPURAM, TELLAPUR, MEDAK DIST', 502032, 6, '869633073213', 'SBG005', 'SHUBHA SRI', 0, '', '', '', 1, 1, '2019-11-01 05:15:10', '2019-11-01 10:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_banners`
--

CREATE TABLE `sbgi_banners` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(350) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `information` text DEFAULT NULL,
  `links` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_banners`
--

INSERT INTO `sbgi_banners` (`id`, `banner_title`, `image`, `information`, `links`, `status`, `created`, `updated`) VALUES
(1, 'My Sample', 'uploads/banners/dd3b1436bdaa9dcb64096753a9de4d97.jpg', 'Solo information', '', 0, '2019-10-26 21:13:35', '2019-10-27 03:43:56'),
(2, '', 'uploads/banners/a86c27f39e7f3e5edce7128d57cc397b.png', 'OPEN PLOTS FOR SALE', '', 1, '2019-10-28 21:41:09', '2019-11-09 06:56:36'),
(3, 'SRI BALAJI GROUP', 'uploads/banners/502a1c97e5a0cf1a0aa3450d751cd254.png', 'OPEN PLOTS FOR SALE ', '', 1, '2019-10-28 21:41:31', '2019-11-09 06:43:30'),
(4, 'BANNER THREE', 'uploads/banners/77b30508d46c98a46ed25f73cb2a5979.jpg', 'Open Plots For Sale', '', 0, '2019-10-31 02:12:31', '2019-10-31 07:42:31'),
(5, '', 'uploads/banners/cba1125152537548f400c6e4ae8027e3.jpg', '', '', 0, '2019-10-31 04:27:28', '2019-10-31 09:57:28'),
(6, '', 'uploads/banners/19e5d4836a1af4b3788c6ae34a450824.jpg', 'OPEN PLOTS FOR SALE', '', 1, '2019-10-31 04:30:05', '2019-11-09 06:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_brochures`
--

CREATE TABLE `sbgi_brochures` (
  `id` int(11) NOT NULL,
  `title` varchar(350) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `information` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_brochures`
--

INSERT INTO `sbgi_brochures` (`id`, `title`, `image`, `information`, `status`, `created`, `updated`) VALUES
(1, 'brochures one', 'uploads/banners/67cc51f7115889ea54c40b26be091eb3.pdf', 'Sample info', 0, '2019-11-06 12:32:24', '2019-11-07 02:42:54'),
(2, 'Two', 'uploads/brochures/a64b2c5bc07a5b8225c457ba5e40d68c.jpg', '', 0, '2019-11-06 20:45:24', '2019-11-07 03:15:24'),
(3, 'BALAJI TWONSHIP-1 LAYOUT', 'uploads/banners/baeac51a5188644653dd8d25a416a4e5.jpg', 'BALAJI TWONSHIP-1', 1, '2019-11-07 00:48:53', '2019-11-09 06:21:06'),
(4, 'BALAJI TWONSHIP-3 LAYOUT', 'uploads/brochures/8e72e2e27b8a7f7e440912b11ab4ab0e.jpg', '', 1, '2019-11-07 00:56:20', '2019-11-07 06:26:20'),
(5, 'BALAJI TWONSHIP-2 LAYOUT', 'uploads/brochures/40820a2ea7887b1e214bd2544ca983b5.jpg', '', 1, '2019-11-07 01:06:19', '2019-11-07 06:36:19'),
(6, 'BALAJI TWONSHIP-1 BROUCHER2', 'uploads/banners/20079673a8ee9d082115be5a11625a53.jpg', '', 1, '2019-11-09 00:39:04', '2019-11-09 06:18:10'),
(7, 'BALAJI TWONSHIP-1 BROUCHER1', 'uploads/banners/c00c1b7dbf4555536b8a8bcaae2172d8.jpg', '', 1, '2019-11-09 00:39:25', '2019-11-09 06:18:55'),
(8, 'BALAJI TWONSHIP-3 BROUCHER2', 'uploads/banners/bae1c82df3b3f7574feb14ba46676422.jpg', '', 1, '2019-11-09 00:44:57', '2019-11-09 06:17:02'),
(9, 'BALAJI TWONSHIP-1 BROUCHER1', 'uploads/brochures/955ed4806bd62edf42fdc2e5f33e7f8c.jpg', '', 1, '2019-11-09 00:45:36', '2019-11-09 06:15:36'),
(10, 'YADADRI TEMPLE FORT', 'uploads/brochures/0155bed8bd4ac136fef835c25f3e7b12.jpg', '', 1, '2019-11-09 02:30:41', '2019-11-09 08:00:41'),
(11, 'BALAJI TWONSHIP-1 LAYOUT', 'uploads/brochures/16c88f8de381919ed42032983e862521.png', '', 0, '2019-11-09 02:35:05', '2019-11-09 08:05:05');

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

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_enq_details`
--

CREATE TABLE `sbgi_enq_details` (
  `id` int(11) NOT NULL,
  `layout_id` varchar(25) DEFAULT NULL,
  `flat_id` varchar(25) DEFAULT NULL,
  `flat_details` text DEFAULT NULL,
  `name` varchar(350) DEFAULT NULL,
  `mobile` varchar(35) DEFAULT NULL,
  `mail_id` varchar(300) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `flat_info_details` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_feedback_contact`
--

CREATE TABLE `sbgi_feedback_contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(350) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email_id` varchar(350) NOT NULL,
  `last_name` varchar(350) DEFAULT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'BDE', 'bde', 'position', 1, '2019-09-10 20:35:08'),
(2, 'BDO', 'bdo', 'position', 1, '2019-09-10 20:35:08'),
(3, 'MM', 'mm', 'position', 1, '2019-09-10 20:35:08'),
(4, 'GM', 'gm', 'position', 1, '2019-09-10 20:35:08'),
(5, 'PANCARD', 'pan', 'govt_ids', 1, '2019-09-10 20:37:29'),
(6, 'AADHAR', 'aadhar', 'govt_ids', 1, '2019-09-10 20:37:29'),
(7, 'Male', 'M', 'gender', 1, '2019-09-10 20:42:45'),
(8, 'Female', 'FM', 'gender', 1, '2019-09-10 20:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_gallery_details`
--

CREATE TABLE `sbgi_gallery_details` (
  `id` int(11) NOT NULL,
  `title` varchar(350) DEFAULT NULL,
  `gallery_type` int(11) NOT NULL,
  `plot_id` int(11) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `videos` text DEFAULT NULL,
  `information` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sbgi_gallery_details`
--

INSERT INTO `sbgi_gallery_details` (`id`, `title`, `gallery_type`, `plot_id`, `images`, `videos`, `information`, `status`, `created`, `updated`) VALUES
(2, 'Sample', 2, 7, 'uploads/gallery/images/3bd3cb47719f0092e0914d12a70b0353.png', '', 's', 1, '2019-12-04 11:13:55', '2019-12-04 11:13:55'),
(3, 'Sample', 1, 0, 'uploads/gallery/images/0a142b0a5c0364da877a5aa9ee4eed69.png', '', '', 1, '2019-12-04 11:44:01', '2019-12-04 11:44:01'),
(4, 'sdsae', 1, 0, 'uploads/gallery/images/77ad059dd894b9e69465fcd2b6266359.png', '', '', 1, '2019-12-04 11:44:15', '2019-12-04 11:44:15'),
(5, 'dsfd', 1, 0, 'uploads/gallery/images/95e6db93b56f800ef152eba8522e6895.png', '', '', 1, '2019-12-04 11:44:29', '2019-12-04 11:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_howeare_data`
--

CREATE TABLE `sbgi_howeare_data` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(350) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `information` text DEFAULT NULL,
  `links` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_howeare_data`
--

INSERT INTO `sbgi_howeare_data` (`id`, `banner_title`, `images`, `video`, `information`, `links`, `status`, `created`, `updated`) VALUES
(1, 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. VESTIBULUM NEC ODIO IPSUM.', 'uploads/homepage/slides/fd3366bfc1b761bf1efc613de5737dc2.jpg,uploads/homepage/slides/3ce5ca6e47b34830a6a6a25832469f01.jpg,uploads/homepage/slides/dae1ccbe6ce1cec6bd29dcc4a2c9ef21.jpg,uploads/homepage/slides/69707501141d69bed9a3051dfa02358c.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '', 1, '2019-12-04 04:45:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_howeare_details`
--

CREATE TABLE `sbgi_howeare_details` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(350) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `information` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_howeare_details`
--

INSERT INTO `sbgi_howeare_details` (`id`, `banner_title`, `image`, `information`, `status`, `created`, `updated`) VALUES
(1, 'What we do ?', '', 'Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.', 1, '2019-12-04 03:18:57', '2019-12-04 03:18:57'),
(3, 'WHAT WE OFFER ?', '', 'Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.', 1, '2019-12-04 03:32:03', '2019-12-04 03:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_partners_details`
--

CREATE TABLE `sbgi_partners_details` (
  `id` int(11) NOT NULL,
  `title` varchar(350) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 1, 1, 1, 8, 1, '2019-11-13 01:16:20'),
(2, 1, 1, 2, 12, 1, '2019-11-13 01:16:38'),
(3, 1, 1, 3, 15, 1, '2019-11-13 01:17:22'),
(4, 1, 1, 4, 20, 1, '2019-11-13 01:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `sbgi_site_details`
--

CREATE TABLE `sbgi_site_details` (
  `id` int(11) NOT NULL,
  `site_name` varchar(350) NOT NULL,
  `site_url` varchar(350) NOT NULL,
  `site_logo` text NOT NULL,
  `address` text NOT NULL,
  `state` varchar(350) NOT NULL,
  `city` varchar(350) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email_id` varchar(350) NOT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbgi_site_details`
--

INSERT INTO `sbgi_site_details` (`id`, `site_name`, `site_url`, `site_logo`, `address`, `state`, `city`, `pincode`, `mobile`, `email_id`, `facebook`, `twitter`, `instagram`, `linkedin`, `status`, `created`, `updated`) VALUES
(1, 'Sri Balaji group', 'www.sbgindia.com', 'uploads/sitedetails/17f6c89021415bddddc7ea4d7c44f4f9.png', 'HNo.2-4-106, Snehapuri Colony, nagole', 'Telangana', 'Hyderabad', 500035, '7777979666', 'sbgindia6@gmail.com', 'https://www.facebook.com/profile.php?id=100041321389466', '', '', '', 1, '2019-10-28 06:06:57', '2019-10-31 04:10:02');

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
(1, 1, 'BALAJI TOWNSHIP-1', 'uploads/subzones_layouts/bd44fb12095b991f9eb521bd90bad5c5.jpg', 30, 'a:30:{s:4:\"S101\";a:6:{s:7:\"slot_id\";s:4:\"S101\";s:7:\"details\";s:26:\"PLOT NO 145,  129 SQ YARDS\";s:11:\"slot_id_num\";s:1:\"1\";s:11:\"sale_amount\";s:7:\"1032000\";s:6:\"status\";s:6:\"Booked\";s:5:\"color\";s:7:\"#d41326\";}s:4:\"S102\";a:6:{s:7:\"slot_id\";s:4:\"S102\";s:7:\"details\";s:25:\"PLOT NO 99,  150 SQ YARDS\";s:11:\"slot_id_num\";s:1:\"2\";s:11:\"sale_amount\";s:7:\"1275000\";s:6:\"status\";s:6:\"Booked\";s:5:\"color\";s:7:\"#d41326\";}s:4:\"S103\";a:6:{s:7:\"slot_id\";s:4:\"S103\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"3\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S104\";a:6:{s:7:\"slot_id\";s:4:\"S104\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"4\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S105\";a:6:{s:7:\"slot_id\";s:4:\"S105\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"5\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S106\";a:6:{s:7:\"slot_id\";s:4:\"S106\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"6\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S107\";a:6:{s:7:\"slot_id\";s:4:\"S107\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"7\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S108\";a:6:{s:7:\"slot_id\";s:4:\"S108\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"8\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S109\";a:6:{s:7:\"slot_id\";s:4:\"S109\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"9\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1010\";a:6:{s:7:\"slot_id\";s:5:\"S1010\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"10\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1011\";a:6:{s:7:\"slot_id\";s:5:\"S1011\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"11\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1012\";a:6:{s:7:\"slot_id\";s:5:\"S1012\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"12\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1013\";a:6:{s:7:\"slot_id\";s:5:\"S1013\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"13\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1014\";a:6:{s:7:\"slot_id\";s:5:\"S1014\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"14\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1015\";a:6:{s:7:\"slot_id\";s:5:\"S1015\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"15\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1016\";a:6:{s:7:\"slot_id\";s:5:\"S1016\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"16\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1017\";a:6:{s:7:\"slot_id\";s:5:\"S1017\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"17\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1018\";a:6:{s:7:\"slot_id\";s:5:\"S1018\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"18\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1019\";a:6:{s:7:\"slot_id\";s:5:\"S1019\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"19\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1020\";a:6:{s:7:\"slot_id\";s:5:\"S1020\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"20\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1021\";a:6:{s:7:\"slot_id\";s:5:\"S1021\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"21\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1022\";a:6:{s:7:\"slot_id\";s:5:\"S1022\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"22\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1023\";a:6:{s:7:\"slot_id\";s:5:\"S1023\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"23\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1024\";a:6:{s:7:\"slot_id\";s:5:\"S1024\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"24\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1025\";a:6:{s:7:\"slot_id\";s:5:\"S1025\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"25\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1026\";a:6:{s:7:\"slot_id\";s:5:\"S1026\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"26\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1027\";a:6:{s:7:\"slot_id\";s:5:\"S1027\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"27\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1028\";a:6:{s:7:\"slot_id\";s:5:\"S1028\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"28\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1029\";a:6:{s:7:\"slot_id\";s:5:\"S1029\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"29\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1030\";a:6:{s:7:\"slot_id\";s:5:\"S1030\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"30\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}}', 'WARANGAL HIGHWAY BIT\r\n9000/- PER SQ YARD', 1, '2019-11-08 01:44:29', NULL),
(2, 1, 'BALAJI TOWNSHIP-2', 'uploads/subzones_layouts/34250bee0a3a2564d0b76a524e0a55d4.png', 23, 'a:23:{s:4:\"S201\";a:6:{s:7:\"slot_id\";s:4:\"S201\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"1\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S202\";a:6:{s:7:\"slot_id\";s:4:\"S202\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"2\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S203\";a:6:{s:7:\"slot_id\";s:4:\"S203\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"3\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S204\";a:6:{s:7:\"slot_id\";s:4:\"S204\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"4\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S205\";a:6:{s:7:\"slot_id\";s:4:\"S205\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"5\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S206\";a:6:{s:7:\"slot_id\";s:4:\"S206\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"6\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S207\";a:6:{s:7:\"slot_id\";s:4:\"S207\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"7\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S208\";a:6:{s:7:\"slot_id\";s:4:\"S208\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"8\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S209\";a:6:{s:7:\"slot_id\";s:4:\"S209\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"9\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2010\";a:6:{s:7:\"slot_id\";s:5:\"S2010\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"10\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2011\";a:6:{s:7:\"slot_id\";s:5:\"S2011\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"11\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2012\";a:6:{s:7:\"slot_id\";s:5:\"S2012\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"12\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2013\";a:6:{s:7:\"slot_id\";s:5:\"S2013\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"13\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2014\";a:6:{s:7:\"slot_id\";s:5:\"S2014\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"14\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2015\";a:6:{s:7:\"slot_id\";s:5:\"S2015\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"15\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2016\";a:6:{s:7:\"slot_id\";s:5:\"S2016\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"16\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2017\";a:6:{s:7:\"slot_id\";s:5:\"S2017\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"17\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2018\";a:6:{s:7:\"slot_id\";s:5:\"S2018\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"18\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2019\";a:6:{s:7:\"slot_id\";s:5:\"S2019\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"19\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2020\";a:6:{s:7:\"slot_id\";s:5:\"S2020\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"20\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2021\";a:6:{s:7:\"slot_id\";s:5:\"S2021\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"21\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2022\";a:6:{s:7:\"slot_id\";s:5:\"S2022\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"22\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2023\";a:6:{s:7:\"slot_id\";s:5:\"S2023\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"23\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}}', 'NEAR RAIGIRI VILLAGE\r\n7000/- PER SQ YARD', 1, '2019-11-08 01:47:27', NULL),
(3, 1, 'BALAJI TOWNSHIP-3', '', 90, 'a:90:{s:4:\"S301\";a:6:{s:7:\"slot_id\";s:4:\"S301\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:1;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S302\";a:6:{s:7:\"slot_id\";s:4:\"S302\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:2;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S303\";a:6:{s:7:\"slot_id\";s:4:\"S303\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:3;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S304\";a:6:{s:7:\"slot_id\";s:4:\"S304\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:4;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S305\";a:6:{s:7:\"slot_id\";s:4:\"S305\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:5;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S306\";a:6:{s:7:\"slot_id\";s:4:\"S306\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:6;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S307\";a:6:{s:7:\"slot_id\";s:4:\"S307\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:7;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S308\";a:6:{s:7:\"slot_id\";s:4:\"S308\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:8;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S309\";a:6:{s:7:\"slot_id\";s:4:\"S309\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:9;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3010\";a:6:{s:7:\"slot_id\";s:5:\"S3010\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:10;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3011\";a:6:{s:7:\"slot_id\";s:5:\"S3011\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:11;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3012\";a:6:{s:7:\"slot_id\";s:5:\"S3012\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:12;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3013\";a:6:{s:7:\"slot_id\";s:5:\"S3013\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:13;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3014\";a:6:{s:7:\"slot_id\";s:5:\"S3014\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:14;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3015\";a:6:{s:7:\"slot_id\";s:5:\"S3015\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:15;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3016\";a:6:{s:7:\"slot_id\";s:5:\"S3016\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:16;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3017\";a:6:{s:7:\"slot_id\";s:5:\"S3017\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:17;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3018\";a:6:{s:7:\"slot_id\";s:5:\"S3018\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:18;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3019\";a:6:{s:7:\"slot_id\";s:5:\"S3019\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:19;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3020\";a:6:{s:7:\"slot_id\";s:5:\"S3020\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:20;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3021\";a:6:{s:7:\"slot_id\";s:5:\"S3021\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:21;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3022\";a:6:{s:7:\"slot_id\";s:5:\"S3022\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:22;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3023\";a:6:{s:7:\"slot_id\";s:5:\"S3023\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:23;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3024\";a:6:{s:7:\"slot_id\";s:5:\"S3024\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:24;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3025\";a:6:{s:7:\"slot_id\";s:5:\"S3025\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:25;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3026\";a:6:{s:7:\"slot_id\";s:5:\"S3026\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:26;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3027\";a:6:{s:7:\"slot_id\";s:5:\"S3027\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:27;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3028\";a:6:{s:7:\"slot_id\";s:5:\"S3028\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:28;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3029\";a:6:{s:7:\"slot_id\";s:5:\"S3029\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:29;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3030\";a:6:{s:7:\"slot_id\";s:5:\"S3030\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:30;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3031\";a:6:{s:7:\"slot_id\";s:5:\"S3031\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:31;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3032\";a:6:{s:7:\"slot_id\";s:5:\"S3032\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:32;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3033\";a:6:{s:7:\"slot_id\";s:5:\"S3033\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:33;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3034\";a:6:{s:7:\"slot_id\";s:5:\"S3034\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:34;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3035\";a:6:{s:7:\"slot_id\";s:5:\"S3035\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:35;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3036\";a:6:{s:7:\"slot_id\";s:5:\"S3036\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:36;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3037\";a:6:{s:7:\"slot_id\";s:5:\"S3037\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:37;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3038\";a:6:{s:7:\"slot_id\";s:5:\"S3038\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:38;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3039\";a:6:{s:7:\"slot_id\";s:5:\"S3039\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:39;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3040\";a:6:{s:7:\"slot_id\";s:5:\"S3040\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:40;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3041\";a:6:{s:7:\"slot_id\";s:5:\"S3041\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:41;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3042\";a:6:{s:7:\"slot_id\";s:5:\"S3042\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:42;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3043\";a:6:{s:7:\"slot_id\";s:5:\"S3043\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:43;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3044\";a:6:{s:7:\"slot_id\";s:5:\"S3044\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:44;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3045\";a:6:{s:7:\"slot_id\";s:5:\"S3045\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:45;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3046\";a:6:{s:7:\"slot_id\";s:5:\"S3046\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:46;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3047\";a:6:{s:7:\"slot_id\";s:5:\"S3047\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:47;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3048\";a:6:{s:7:\"slot_id\";s:5:\"S3048\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:48;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3049\";a:6:{s:7:\"slot_id\";s:5:\"S3049\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:49;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3050\";a:6:{s:7:\"slot_id\";s:5:\"S3050\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:50;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3051\";a:6:{s:7:\"slot_id\";s:5:\"S3051\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:51;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3052\";a:6:{s:7:\"slot_id\";s:5:\"S3052\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:52;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3053\";a:6:{s:7:\"slot_id\";s:5:\"S3053\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:53;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3054\";a:6:{s:7:\"slot_id\";s:5:\"S3054\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:54;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3055\";a:6:{s:7:\"slot_id\";s:5:\"S3055\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:55;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3056\";a:6:{s:7:\"slot_id\";s:5:\"S3056\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:56;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3057\";a:6:{s:7:\"slot_id\";s:5:\"S3057\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:57;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3058\";a:6:{s:7:\"slot_id\";s:5:\"S3058\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:58;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3059\";a:6:{s:7:\"slot_id\";s:5:\"S3059\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:59;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3060\";a:6:{s:7:\"slot_id\";s:5:\"S3060\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:60;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3061\";a:6:{s:7:\"slot_id\";s:5:\"S3061\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:61;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3062\";a:6:{s:7:\"slot_id\";s:5:\"S3062\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:62;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3063\";a:6:{s:7:\"slot_id\";s:5:\"S3063\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:63;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3064\";a:6:{s:7:\"slot_id\";s:5:\"S3064\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:64;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3065\";a:6:{s:7:\"slot_id\";s:5:\"S3065\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:65;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3066\";a:6:{s:7:\"slot_id\";s:5:\"S3066\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:66;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3067\";a:6:{s:7:\"slot_id\";s:5:\"S3067\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:67;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3068\";a:6:{s:7:\"slot_id\";s:5:\"S3068\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:68;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3069\";a:6:{s:7:\"slot_id\";s:5:\"S3069\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:69;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3070\";a:6:{s:7:\"slot_id\";s:5:\"S3070\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:70;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3071\";a:6:{s:7:\"slot_id\";s:5:\"S3071\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:71;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3072\";a:6:{s:7:\"slot_id\";s:5:\"S3072\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:72;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3073\";a:6:{s:7:\"slot_id\";s:5:\"S3073\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:73;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3074\";a:6:{s:7:\"slot_id\";s:5:\"S3074\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:74;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3075\";a:6:{s:7:\"slot_id\";s:5:\"S3075\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:75;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3076\";a:6:{s:7:\"slot_id\";s:5:\"S3076\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:76;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3077\";a:6:{s:7:\"slot_id\";s:5:\"S3077\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:77;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3078\";a:6:{s:7:\"slot_id\";s:5:\"S3078\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:78;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3079\";a:6:{s:7:\"slot_id\";s:5:\"S3079\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:79;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3080\";a:6:{s:7:\"slot_id\";s:5:\"S3080\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:80;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3081\";a:6:{s:7:\"slot_id\";s:5:\"S3081\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:81;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3082\";a:6:{s:7:\"slot_id\";s:5:\"S3082\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:82;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3083\";a:6:{s:7:\"slot_id\";s:5:\"S3083\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:83;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3084\";a:6:{s:7:\"slot_id\";s:5:\"S3084\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:84;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3085\";a:6:{s:7:\"slot_id\";s:5:\"S3085\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:85;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3086\";a:6:{s:7:\"slot_id\";s:5:\"S3086\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:86;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3087\";a:6:{s:7:\"slot_id\";s:5:\"S3087\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:87;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3088\";a:6:{s:7:\"slot_id\";s:5:\"S3088\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:88;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3089\";a:6:{s:7:\"slot_id\";s:5:\"S3089\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:89;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S3090\";a:6:{s:7:\"slot_id\";s:5:\"S3090\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:90;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}}', '', 0, '2019-11-09 01:34:27', NULL),
(4, 1, 'BALAJI TOWNSHIP-3', '', 90, 'a:90:{s:4:\"S401\";a:6:{s:7:\"slot_id\";s:4:\"S401\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:1;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S402\";a:6:{s:7:\"slot_id\";s:4:\"S402\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:2;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S403\";a:6:{s:7:\"slot_id\";s:4:\"S403\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:3;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S404\";a:6:{s:7:\"slot_id\";s:4:\"S404\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:4;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S405\";a:6:{s:7:\"slot_id\";s:4:\"S405\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:5;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S406\";a:6:{s:7:\"slot_id\";s:4:\"S406\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:6;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S407\";a:6:{s:7:\"slot_id\";s:4:\"S407\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:7;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S408\";a:6:{s:7:\"slot_id\";s:4:\"S408\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:8;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S409\";a:6:{s:7:\"slot_id\";s:4:\"S409\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:9;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4010\";a:6:{s:7:\"slot_id\";s:5:\"S4010\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:10;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4011\";a:6:{s:7:\"slot_id\";s:5:\"S4011\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:11;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4012\";a:6:{s:7:\"slot_id\";s:5:\"S4012\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:12;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4013\";a:6:{s:7:\"slot_id\";s:5:\"S4013\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:13;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4014\";a:6:{s:7:\"slot_id\";s:5:\"S4014\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:14;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4015\";a:6:{s:7:\"slot_id\";s:5:\"S4015\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:15;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4016\";a:6:{s:7:\"slot_id\";s:5:\"S4016\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:16;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4017\";a:6:{s:7:\"slot_id\";s:5:\"S4017\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:17;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4018\";a:6:{s:7:\"slot_id\";s:5:\"S4018\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:18;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4019\";a:6:{s:7:\"slot_id\";s:5:\"S4019\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:19;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4020\";a:6:{s:7:\"slot_id\";s:5:\"S4020\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:20;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4021\";a:6:{s:7:\"slot_id\";s:5:\"S4021\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:21;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4022\";a:6:{s:7:\"slot_id\";s:5:\"S4022\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:22;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4023\";a:6:{s:7:\"slot_id\";s:5:\"S4023\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:23;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4024\";a:6:{s:7:\"slot_id\";s:5:\"S4024\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:24;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4025\";a:6:{s:7:\"slot_id\";s:5:\"S4025\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:25;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4026\";a:6:{s:7:\"slot_id\";s:5:\"S4026\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:26;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4027\";a:6:{s:7:\"slot_id\";s:5:\"S4027\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:27;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4028\";a:6:{s:7:\"slot_id\";s:5:\"S4028\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:28;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4029\";a:6:{s:7:\"slot_id\";s:5:\"S4029\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:29;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4030\";a:6:{s:7:\"slot_id\";s:5:\"S4030\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:30;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4031\";a:6:{s:7:\"slot_id\";s:5:\"S4031\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:31;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4032\";a:6:{s:7:\"slot_id\";s:5:\"S4032\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:32;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4033\";a:6:{s:7:\"slot_id\";s:5:\"S4033\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:33;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4034\";a:6:{s:7:\"slot_id\";s:5:\"S4034\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:34;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4035\";a:6:{s:7:\"slot_id\";s:5:\"S4035\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:35;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4036\";a:6:{s:7:\"slot_id\";s:5:\"S4036\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:36;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4037\";a:6:{s:7:\"slot_id\";s:5:\"S4037\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:37;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4038\";a:6:{s:7:\"slot_id\";s:5:\"S4038\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:38;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4039\";a:6:{s:7:\"slot_id\";s:5:\"S4039\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:39;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4040\";a:6:{s:7:\"slot_id\";s:5:\"S4040\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:40;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4041\";a:6:{s:7:\"slot_id\";s:5:\"S4041\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:41;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4042\";a:6:{s:7:\"slot_id\";s:5:\"S4042\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:42;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4043\";a:6:{s:7:\"slot_id\";s:5:\"S4043\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:43;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4044\";a:6:{s:7:\"slot_id\";s:5:\"S4044\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:44;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4045\";a:6:{s:7:\"slot_id\";s:5:\"S4045\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:45;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4046\";a:6:{s:7:\"slot_id\";s:5:\"S4046\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:46;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4047\";a:6:{s:7:\"slot_id\";s:5:\"S4047\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:47;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4048\";a:6:{s:7:\"slot_id\";s:5:\"S4048\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:48;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4049\";a:6:{s:7:\"slot_id\";s:5:\"S4049\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:49;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4050\";a:6:{s:7:\"slot_id\";s:5:\"S4050\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:50;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4051\";a:6:{s:7:\"slot_id\";s:5:\"S4051\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:51;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4052\";a:6:{s:7:\"slot_id\";s:5:\"S4052\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:52;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4053\";a:6:{s:7:\"slot_id\";s:5:\"S4053\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:53;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4054\";a:6:{s:7:\"slot_id\";s:5:\"S4054\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:54;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4055\";a:6:{s:7:\"slot_id\";s:5:\"S4055\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:55;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4056\";a:6:{s:7:\"slot_id\";s:5:\"S4056\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:56;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4057\";a:6:{s:7:\"slot_id\";s:5:\"S4057\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:57;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4058\";a:6:{s:7:\"slot_id\";s:5:\"S4058\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:58;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4059\";a:6:{s:7:\"slot_id\";s:5:\"S4059\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:59;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4060\";a:6:{s:7:\"slot_id\";s:5:\"S4060\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:60;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4061\";a:6:{s:7:\"slot_id\";s:5:\"S4061\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:61;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4062\";a:6:{s:7:\"slot_id\";s:5:\"S4062\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:62;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4063\";a:6:{s:7:\"slot_id\";s:5:\"S4063\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:63;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4064\";a:6:{s:7:\"slot_id\";s:5:\"S4064\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:64;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4065\";a:6:{s:7:\"slot_id\";s:5:\"S4065\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:65;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4066\";a:6:{s:7:\"slot_id\";s:5:\"S4066\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:66;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4067\";a:6:{s:7:\"slot_id\";s:5:\"S4067\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:67;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4068\";a:6:{s:7:\"slot_id\";s:5:\"S4068\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:68;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4069\";a:6:{s:7:\"slot_id\";s:5:\"S4069\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:69;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4070\";a:6:{s:7:\"slot_id\";s:5:\"S4070\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:70;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4071\";a:6:{s:7:\"slot_id\";s:5:\"S4071\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:71;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4072\";a:6:{s:7:\"slot_id\";s:5:\"S4072\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:72;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4073\";a:6:{s:7:\"slot_id\";s:5:\"S4073\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:73;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4074\";a:6:{s:7:\"slot_id\";s:5:\"S4074\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:74;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4075\";a:6:{s:7:\"slot_id\";s:5:\"S4075\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:75;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4076\";a:6:{s:7:\"slot_id\";s:5:\"S4076\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:76;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4077\";a:6:{s:7:\"slot_id\";s:5:\"S4077\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:77;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4078\";a:6:{s:7:\"slot_id\";s:5:\"S4078\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:78;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4079\";a:6:{s:7:\"slot_id\";s:5:\"S4079\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:79;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4080\";a:6:{s:7:\"slot_id\";s:5:\"S4080\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:80;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4081\";a:6:{s:7:\"slot_id\";s:5:\"S4081\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:81;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4082\";a:6:{s:7:\"slot_id\";s:5:\"S4082\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:82;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4083\";a:6:{s:7:\"slot_id\";s:5:\"S4083\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:83;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4084\";a:6:{s:7:\"slot_id\";s:5:\"S4084\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:84;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4085\";a:6:{s:7:\"slot_id\";s:5:\"S4085\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:85;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4086\";a:6:{s:7:\"slot_id\";s:5:\"S4086\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:86;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4087\";a:6:{s:7:\"slot_id\";s:5:\"S4087\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:87;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4088\";a:6:{s:7:\"slot_id\";s:5:\"S4088\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:88;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4089\";a:6:{s:7:\"slot_id\";s:5:\"S4089\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:89;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S4090\";a:6:{s:7:\"slot_id\";s:5:\"S4090\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:90;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}}', '', 0, '2019-11-09 01:35:37', NULL),
(5, 1, 'BALAJI TOWNSHIP-3', '', 20, 'a:20:{s:4:\"S501\";a:6:{s:7:\"slot_id\";s:4:\"S501\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:1;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S502\";a:6:{s:7:\"slot_id\";s:4:\"S502\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:2;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S503\";a:6:{s:7:\"slot_id\";s:4:\"S503\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:3;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S504\";a:6:{s:7:\"slot_id\";s:4:\"S504\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:4;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S505\";a:6:{s:7:\"slot_id\";s:4:\"S505\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:5;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S506\";a:6:{s:7:\"slot_id\";s:4:\"S506\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:6;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S507\";a:6:{s:7:\"slot_id\";s:4:\"S507\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:7;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S508\";a:6:{s:7:\"slot_id\";s:4:\"S508\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:8;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:4:\"S509\";a:6:{s:7:\"slot_id\";s:4:\"S509\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:9;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5010\";a:6:{s:7:\"slot_id\";s:5:\"S5010\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:10;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5011\";a:6:{s:7:\"slot_id\";s:5:\"S5011\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:11;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5012\";a:6:{s:7:\"slot_id\";s:5:\"S5012\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:12;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5013\";a:6:{s:7:\"slot_id\";s:5:\"S5013\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:13;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5014\";a:6:{s:7:\"slot_id\";s:5:\"S5014\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:14;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5015\";a:6:{s:7:\"slot_id\";s:5:\"S5015\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:15;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5016\";a:6:{s:7:\"slot_id\";s:5:\"S5016\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:16;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5017\";a:6:{s:7:\"slot_id\";s:5:\"S5017\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:17;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5018\";a:6:{s:7:\"slot_id\";s:5:\"S5018\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:18;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5019\";a:6:{s:7:\"slot_id\";s:5:\"S5019\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:19;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:5:\"S5020\";a:6:{s:7:\"slot_id\";s:5:\"S5020\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";i:20;s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:0:\"\";s:5:\"color\";s:0:\"\";}}', '', 0, '2019-11-09 01:37:05', NULL),
(6, 1, 'BALAJI TOWNSHIP-3', '', 4, 'a:4:{s:4:\"S601\";a:6:{s:7:\"slot_id\";s:4:\"S601\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"1\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S602\";a:6:{s:7:\"slot_id\";s:4:\"S602\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"2\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S603\";a:6:{s:7:\"slot_id\";s:4:\"S603\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"3\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S604\";a:6:{s:7:\"slot_id\";s:4:\"S604\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"4\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}}', '', 0, '2019-11-09 01:41:50', NULL);
INSERT INTO `sbgi_sub_zones` (`id`, `zone_id`, `subzone_name`, `image`, `slots`, `slots_details`, `information`, `status`, `created`, `updated`) VALUES
(7, 1, 'BALAJI TOWNSHIP-3', '', 20, 'a:20:{s:4:\"S701\";a:7:{s:7:\"slot_id\";s:4:\"S701\";s:7:\"plot_id\";s:1:\"1\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"1\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S702\";a:7:{s:7:\"slot_id\";s:4:\"S702\";s:7:\"plot_id\";s:1:\"2\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"2\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S703\";a:7:{s:7:\"slot_id\";s:4:\"S703\";s:7:\"plot_id\";s:1:\"3\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"3\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S704\";a:7:{s:7:\"slot_id\";s:4:\"S704\";s:7:\"plot_id\";s:1:\"4\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"4\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S705\";a:7:{s:7:\"slot_id\";s:4:\"S705\";s:7:\"plot_id\";s:1:\"5\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"5\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S706\";a:7:{s:7:\"slot_id\";s:4:\"S706\";s:7:\"plot_id\";s:1:\"6\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"6\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S707\";a:7:{s:7:\"slot_id\";s:4:\"S707\";s:7:\"plot_id\";s:1:\"7\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"7\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S708\";a:7:{s:7:\"slot_id\";s:4:\"S708\";s:7:\"plot_id\";s:1:\"8\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"8\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S709\";a:7:{s:7:\"slot_id\";s:4:\"S709\";s:7:\"plot_id\";s:1:\"9\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"9\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7010\";a:7:{s:7:\"slot_id\";s:5:\"S7010\";s:7:\"plot_id\";s:2:\"10\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"10\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7011\";a:7:{s:7:\"slot_id\";s:5:\"S7011\";s:7:\"plot_id\";s:2:\"11\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"11\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7012\";a:7:{s:7:\"slot_id\";s:5:\"S7012\";s:7:\"plot_id\";s:2:\"12\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"12\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7013\";a:7:{s:7:\"slot_id\";s:5:\"S7013\";s:7:\"plot_id\";s:2:\"13\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"13\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7014\";a:7:{s:7:\"slot_id\";s:5:\"S7014\";s:7:\"plot_id\";s:2:\"14\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"14\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7015\";a:7:{s:7:\"slot_id\";s:5:\"S7015\";s:7:\"plot_id\";s:2:\"15\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"15\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7016\";a:7:{s:7:\"slot_id\";s:5:\"S7016\";s:7:\"plot_id\";s:2:\"16\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"16\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7017\";a:7:{s:7:\"slot_id\";s:5:\"S7017\";s:7:\"plot_id\";s:2:\"17\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"17\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7018\";a:7:{s:7:\"slot_id\";s:5:\"S7018\";s:7:\"plot_id\";s:2:\"18\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"18\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7019\";a:7:{s:7:\"slot_id\";s:5:\"S7019\";s:7:\"plot_id\";s:2:\"19\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"19\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S7020\";a:7:{s:7:\"slot_id\";s:5:\"S7020\";s:7:\"plot_id\";s:2:\"20\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"20\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}}', '<p></p><ol><li>Free wifi</li><li>CC Servaylence</li><li>Water facility</li><li>Generator</li></ol><p></p>', 1, '2019-11-13 03:00:33', NULL);

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
(1, 'TDS', 5, 0, 1, '2019-09-30 00:32:24');

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
(1, 'YADAGIRIGUTTA', '', 1, '2019-11-08 01:43:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sbgi_about_us`
--
ALTER TABLE `sbgi_about_us`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sbgi_banners`
--
ALTER TABLE `sbgi_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_brochures`
--
ALTER TABLE `sbgi_brochures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_categories`
--
ALTER TABLE `sbgi_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_enq_details`
--
ALTER TABLE `sbgi_enq_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_feedback_contact`
--
ALTER TABLE `sbgi_feedback_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_formdata`
--
ALTER TABLE `sbgi_formdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_gallery_details`
--
ALTER TABLE `sbgi_gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_howeare_data`
--
ALTER TABLE `sbgi_howeare_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_howeare_details`
--
ALTER TABLE `sbgi_howeare_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_partners_details`
--
ALTER TABLE `sbgi_partners_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_percent`
--
ALTER TABLE `sbgi_percent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbgi_site_details`
--
ALTER TABLE `sbgi_site_details`
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
-- AUTO_INCREMENT for table `sbgi_about_us`
--
ALTER TABLE `sbgi_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_admin_users`
--
ALTER TABLE `sbgi_admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_agent_data`
--
ALTER TABLE `sbgi_agent_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sbgi_agent_registrations`
--
ALTER TABLE `sbgi_agent_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sbgi_banners`
--
ALTER TABLE `sbgi_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sbgi_brochures`
--
ALTER TABLE `sbgi_brochures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sbgi_categories`
--
ALTER TABLE `sbgi_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_enq_details`
--
ALTER TABLE `sbgi_enq_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_feedback_contact`
--
ALTER TABLE `sbgi_feedback_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_formdata`
--
ALTER TABLE `sbgi_formdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sbgi_gallery_details`
--
ALTER TABLE `sbgi_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sbgi_howeare_data`
--
ALTER TABLE `sbgi_howeare_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_howeare_details`
--
ALTER TABLE `sbgi_howeare_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sbgi_partners_details`
--
ALTER TABLE `sbgi_partners_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_percent`
--
ALTER TABLE `sbgi_percent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sbgi_site_details`
--
ALTER TABLE `sbgi_site_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_sub_zones`
--
ALTER TABLE `sbgi_sub_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
