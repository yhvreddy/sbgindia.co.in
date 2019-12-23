-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:44 AM
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
(1, 1, 1, 'S101', 'a:1:{i:0;a:8:{s:4:\"name\";s:14:\"Harsha Vardhan\";s:8:\"agent_id\";s:1:\"1\";s:8:\"position\";s:2:\"GM\";s:7:\"percent\";s:1:\"4\";s:6:\"amount\";i:600;s:7:\"tds_tax\";s:1:\"8\";s:10:\"tax_amount\";i:48;s:12:\"total_amount\";i:552;}}', 1, '2019-12-05 05:30:59', '2019-12-05 06:34:04');

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
(1, 'SBG001', 'Harsha Vardhan', 'Bakkireddy', '2019-12-11', 'M', 'Degree Bsc', 9876543210, 'vardhan7794@gmail.com', 'admin@123', 'Andhra pradesh', 'Gurazala', 'jm.puram', 522415, 6, '458585845896', 'SBG01458S', 'SBGINDIA', 0, '', '', '', 4, 1, '2019-12-05 04:21:12', '2019-12-05 05:21:12');

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
(1, '', 'uploads/banners/8cd0283c3ebf66c543275e74bdf6293b.jpg', '', '', 1, '2019-12-05 04:13:03', '2019-12-05 05:13:03'),
(2, '', 'uploads/banners/8fa3d6e815ebc32f6d102f6bf0562b94.jpg', '', '', 1, '2019-12-05 04:13:27', '2019-12-05 05:13:27'),
(3, '', 'uploads/banners/0febcc5634a6054000330faae8dbac0b.png', '', '', 1, '2019-12-05 04:13:36', '2019-12-05 05:13:36');

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
(1, '', 1, 0, 'uploads/gallery/images/be330e23fe6aef5b8162a5690b2316db.jpg', '', '', 1, '2019-12-05 04:16:17', '2019-12-05 04:16:17'),
(2, '', 1, 0, 'uploads/gallery/images/bbaf83fb81c5dfd6978ad099549e380a.jpg', '', '', 1, '2019-12-05 04:16:26', '2019-12-05 04:16:26'),
(3, '', 1, 0, 'uploads/gallery/images/f997e15f9f7ff5af12467ac8c10a479f.jpg', '', '', 1, '2019-12-05 04:16:33', '2019-12-05 04:16:33'),
(4, '', 1, 0, 'uploads/gallery/images/e2247f9328e5f8f63fd896d8a643def0.jpg', '', '', 1, '2019-12-05 04:16:51', '2019-12-05 04:16:51'),
(5, '', 1, 0, 'uploads/gallery/images/fd7606f20162ddb6fe2f203f08be1044.jpg', '', '', 1, '2019-12-05 04:17:07', '2019-12-05 04:17:07');

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
(1, 1, 1, 4, 4, 1, '2019-12-05 05:07:41'),
(2, 1, 1, 3, 2, 1, '2019-12-05 05:08:05'),
(3, 1, 1, 2, 2, 1, '2019-12-05 05:08:14'),
(4, 1, 1, 1, 2, 1, '2019-12-05 05:08:31');

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
(1, 1, 'Sr.Nagar - Grand Park ', '', 10, 'a:10:{s:4:\"S101\";a:7:{s:7:\"slot_id\";s:4:\"S101\";s:7:\"plot_id\";s:2:\"01\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"1\";s:11:\"sale_amount\";s:5:\"15000\";s:6:\"status\";s:6:\"Booked\";s:5:\"color\";s:7:\"#d41326\";}s:4:\"S102\";a:7:{s:7:\"slot_id\";s:4:\"S102\";s:7:\"plot_id\";s:2:\"02\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"2\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S103\";a:7:{s:7:\"slot_id\";s:4:\"S103\";s:7:\"plot_id\";s:2:\"03\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"3\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S104\";a:7:{s:7:\"slot_id\";s:4:\"S104\";s:7:\"plot_id\";s:2:\"04\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"4\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S105\";a:7:{s:7:\"slot_id\";s:4:\"S105\";s:7:\"plot_id\";s:2:\"05\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"5\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S106\";a:7:{s:7:\"slot_id\";s:4:\"S106\";s:7:\"plot_id\";s:2:\"06\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"6\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S107\";a:7:{s:7:\"slot_id\";s:4:\"S107\";s:7:\"plot_id\";s:2:\"07\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"7\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S108\";a:7:{s:7:\"slot_id\";s:4:\"S108\";s:7:\"plot_id\";s:2:\"08\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"8\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S109\";a:7:{s:7:\"slot_id\";s:4:\"S109\";s:7:\"plot_id\";s:2:\"09\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"9\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S1010\";a:7:{s:7:\"slot_id\";s:5:\"S1010\";s:7:\"plot_id\";s:2:\"10\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"10\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}}', '<h3>Sr.Nagar - Grand Park <br></h3><blockquote><p><b>Features of Layouts</b> :</p><p></p><ol><li>Free wifi</li><li>24*7 Security Services</li><li>More</li></ol><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.\r\n\r\n<br></p><p></p></blockquote>', 1, '2019-12-05 04:33:11', '2019-12-05 05:59:37'),
(2, 1, 'Kondapur - Dog Park', 'uploads/subzones_layouts/bb27665bce4bb2f839e6e01570251c74.jpg', 15, 'a:15:{s:4:\"S201\";a:7:{s:7:\"slot_id\";s:4:\"S201\";s:7:\"plot_id\";s:3:\"001\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"1\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S202\";a:7:{s:7:\"slot_id\";s:4:\"S202\";s:7:\"plot_id\";s:3:\"002\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"2\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S203\";a:7:{s:7:\"slot_id\";s:4:\"S203\";s:7:\"plot_id\";s:3:\"003\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"3\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S204\";a:7:{s:7:\"slot_id\";s:4:\"S204\";s:7:\"plot_id\";s:3:\"004\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"4\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S205\";a:7:{s:7:\"slot_id\";s:4:\"S205\";s:7:\"plot_id\";s:3:\"005\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"5\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S206\";a:7:{s:7:\"slot_id\";s:4:\"S206\";s:7:\"plot_id\";s:3:\"006\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"6\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S207\";a:7:{s:7:\"slot_id\";s:4:\"S207\";s:7:\"plot_id\";s:3:\"007\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"7\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S208\";a:7:{s:7:\"slot_id\";s:4:\"S208\";s:7:\"plot_id\";s:3:\"008\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"8\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:4:\"S209\";a:7:{s:7:\"slot_id\";s:4:\"S209\";s:7:\"plot_id\";s:3:\"009\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:1:\"9\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2010\";a:7:{s:7:\"slot_id\";s:5:\"S2010\";s:7:\"plot_id\";s:3:\"010\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"10\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2011\";a:7:{s:7:\"slot_id\";s:5:\"S2011\";s:7:\"plot_id\";s:3:\"011\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"11\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2012\";a:7:{s:7:\"slot_id\";s:5:\"S2012\";s:7:\"plot_id\";s:3:\"012\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"12\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2013\";a:7:{s:7:\"slot_id\";s:5:\"S2013\";s:7:\"plot_id\";s:3:\"013\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"13\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2014\";a:7:{s:7:\"slot_id\";s:5:\"S2014\";s:7:\"plot_id\";s:3:\"014\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"14\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}s:5:\"S2015\";a:7:{s:7:\"slot_id\";s:5:\"S2015\";s:7:\"plot_id\";s:3:\"015\";s:7:\"details\";s:0:\"\";s:11:\"slot_id_num\";s:2:\"15\";s:11:\"sale_amount\";s:0:\"\";s:6:\"status\";s:9:\"Avaliable\";s:5:\"color\";s:7:\"#3db818\";}}', '<p>\r\n\r\n</p><h3>Sr.Nagar - Grand Park <br></h3><blockquote><p><b>Features of Layouts</b> :</p><p></p><ol><li>Free wifi</li><li>24*7 Security Services</li><li>More</li></ol><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.\r\n</p></blockquote>\r\n\r\n<br><p></p>', 1, '2019-12-05 04:42:01', NULL);

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
(1, 'TDS', 8, 0, 1, '2019-12-05 04:55:32');

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
(1, 'Hyderabad', 'uploads/zones/0c8b758a46e50e8ebd11bba36b90e0e2.jpg', 1, '2019-12-05 04:27:22');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_banners`
--
ALTER TABLE `sbgi_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sbgi_brochures`
--
ALTER TABLE `sbgi_brochures`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_howeare_details`
--
ALTER TABLE `sbgi_howeare_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
