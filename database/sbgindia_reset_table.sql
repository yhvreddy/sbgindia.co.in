-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 04:24 AM
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_agent_registrations`
--
ALTER TABLE `sbgi_agent_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_banners`
--
ALTER TABLE `sbgi_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_site_details`
--
ALTER TABLE `sbgi_site_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sbgi_sub_zones`
--
ALTER TABLE `sbgi_sub_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_taxs`
--
ALTER TABLE `sbgi_taxs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sbgi_zones`
--
ALTER TABLE `sbgi_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
