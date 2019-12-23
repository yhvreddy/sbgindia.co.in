-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 03:29 AM
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
(1, 'brochures one', 'uploads/banners/67cc51f7115889ea54c40b26be091eb3.pdf', 'Sample info', 1, '2019-11-06 18:02:24', '2019-11-07 02:42:54'),
(2, 'Two', 'uploads/brochures/a64b2c5bc07a5b8225c457ba5e40d68c.jpg', '', 1, '2019-11-07 02:15:24', '2019-11-07 03:15:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sbgi_brochures`
--
ALTER TABLE `sbgi_brochures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sbgi_brochures`
--
ALTER TABLE `sbgi_brochures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
