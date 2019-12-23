-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 12:33 PM
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
-- Indexes for dumped tables
--

--
-- Indexes for table `sbgi_gallery_details`
--
ALTER TABLE `sbgi_gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sbgi_gallery_details`
--
ALTER TABLE `sbgi_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
