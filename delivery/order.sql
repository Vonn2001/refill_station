-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 05:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(8) UNSIGNED NOT NULL,
  `cname` varchar(180) NOT NULL DEFAULT '',
  `typ` varchar(180) NOT NULL DEFAULT '',
  `date_tr` date NOT NULL DEFAULT '0000-00-00',
  `time_tr` time NOT NULL DEFAULT '00:00:00',
  `pr_typ` varchar(180) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `cname`, `typ`, `date_tr`, `time_tr`, `pr_typ`) VALUES
(0, 'Von Estilles', 'Delivery', '2023-04-01', '23:16:56', 'Refill'),
(0, 'Jim Tacolod', 'Walk In', '2023-04-01', '23:17:15', 'Purchase With Bottle'),
(0, 'Kim My', 'Walk In', '2023-04-01', '23:17:26', 'Refill'),
(0, 'Jane June', 'Delivery', '2023-04-01', '23:17:42', 'Purchase With Bottle');

-- --------------------------------------------------------

--
-- Table structure for table `items2`
--

CREATE TABLE `items2` (
  `id` int(8) UNSIGNED NOT NULL,
  `cname` varchar(180) NOT NULL DEFAULT '',
  `typ` varchar(180) NOT NULL DEFAULT '',
  `date_tr` date NOT NULL DEFAULT '0000-00-00',
  `time_tr` time NOT NULL DEFAULT '00:00:00',
  `pr_typ` varchar(180) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `items2`
--

INSERT INTO `items2` (`id`, `cname`, `typ`, `date_tr`, `time_tr`, `pr_typ`) VALUES
(0, 'Hang', 'Walk In', '2023-04-01', '23:18:00', 'Refill'),
(0, 'Jin Kazama', 'Walk In', '2023-04-01', '23:18:16', 'Water Bottle'),
(0, 'Zedd', 'Walk In', '2023-04-01', '23:18:27', 'Refill'),
(0, 'Mira', 'Delivery', '2023-04-01', '23:18:42', 'Water Bottle');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(8) UNSIGNED NOT NULL,
  `user_lastname` varchar(180) NOT NULL DEFAULT '',
  `user_firstname` varchar(180) NOT NULL DEFAULT '',
  `user_email` varchar(180) NOT NULL DEFAULT '',
  `user_password` varchar(180) NOT NULL DEFAULT '',
  `user_date_added` date NOT NULL DEFAULT '0000-00-00',
  `user_time_added` time NOT NULL DEFAULT '00:00:00',
  `user_date_updated` date NOT NULL DEFAULT '0000-00-00',
  `user_time_updated` time NOT NULL DEFAULT '00:00:00',
  `user_status` int(1) NOT NULL DEFAULT 0,
  `user_token` varchar(255) NOT NULL DEFAULT '',
  `user_access` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_lastname`, `user_firstname`, `user_email`, `user_password`, `user_date_added`, `user_time_added`, `user_date_updated`, `user_time_updated`, `user_status`, `user_token`, `user_access`) VALUES
(1, 'Estilles', 'Von', 'a@a', '1', '2023-02-27', '11:08:46', '2023-02-27', '11:08:46', 0, '', ''),
(10000001, 'Tac', 'Jim', 'j@j', '1', '2023-03-14', '20:45:46', '0000-00-00', '00:00:00', 1, '', 'Supervisor'),
(10000002, 'Zzz', 'Zzz', 'h@h', '123', '2023-04-01', '20:54:19', '0000-00-00', '00:00:00', 1, '', 'Supervisor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
