-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 02:22 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhelping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'Hi Admin', 'admin@gmail.com', 'admin', 'santosh.jpg'),
(2, 'Anvith Kateel', 'anvith@gmail.com', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_email` varchar(255) NOT NULL,
  `d_phone` varchar(50) NOT NULL,
  `d_amount` bigint(20) NOT NULL,
  `d_purpose` varchar(255) NOT NULL,
  `d_payid` varchar(255) NOT NULL,
  `d_date` date NOT NULL,
  `d_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`d_id`, `d_name`, `d_email`, `d_phone`, `d_amount`, `d_purpose`, `d_payid`, `d_date`, `d_status`) VALUES
(3, 'Santosh Sah', 'sb.santosh.sah@gmail.com', '+918861920664', 200, 'Food & Hunger', 'MOJO9b03L05A64367586', '2019-11-03', 'Completed'),
(4, 'Santosh Sah', 'info.techs.csoys@gmail.com', '+918861920664', 200, 'Community', 'MOJO9b03905A64367588', '2019-11-03', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(11) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_image` varchar(255) NOT NULL,
  `e_date` date NOT NULL,
  `e_start_time` time NOT NULL,
  `e_end_time` time NOT NULL,
  `e_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `e_title`, `e_image`, `e_date`, `e_start_time`, `e_end_time`, `e_location`) VALUES
(1, 'Orphans Visit', 'e1.jpg', '2019-11-02', '06:00:00', '10:00:00', 'Bejai Mangalore'),
(3, 'Support Oprhans Children', 'e2.jpg', '2019-11-12', '07:00:00', '12:00:00', 'Konchadi Mangalore'),
(4, 'Meeting Street Children', 'e3.jpg', '2019-11-12', '07:00:00', '12:00:00', 'Konchadi Mangalore'),
(5, 'Youth Against Rape', 'e4.jpg', '2019-11-11', '05:00:00', '09:00:00', 'Kateel, Mangalore'),
(6, 'Help Girls To Get Education', 'e5.jpg', '2019-11-11', '05:00:00', '09:00:00', 'Kateel, Mangalore'),
(7, 'Women Empowerment', 'e6.jpg', '2019-11-19', '09:00:00', '14:00:00', 'Mangalore, India');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `whatsaap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `names`, `designation`, `image`, `facebook`, `instagram`, `whatsaap`) VALUES
(1, 'Anvith kateel', 'Events Manager', 'anvith.jpeg', '', '', ''),
(3, 'Sumanth A.S', 'Funds Manager', 'sumanth.jpeg', '', '', ''),
(4, 'Pooja R Bangera', 'Events Promoter', 'b1.jpg', '', '', ''),
(5, 'Mokshith ', 'Marketting Head', 'e51.jpg', '', '', ''),
(6, 'Sourabh Kotian', 'Events Planner', 'e51.jpg', '', '', ''),
(7, 'Swathi ', 'Logistics Head', 'b5.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `message_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`message_id`, `name`, `email`, `subject`, `phone`, `message`) VALUES
(2, 'Krishna ', 'santoshsahsays@gmail.com', 'Events', '918660367461', 'HI i want to go for events'),
(8, 'santosh sah', 'info.techs.csoys@gmail.com', 'ALI', '08861920664', 'happy diwali'),
(13, 'santosh sah', 'info.techs.csoys@gmail.com', 'Helps', '08861920664', 'hey are u there');

-- --------------------------------------------------------

--
-- Table structure for table `volunter`
--

CREATE TABLE `volunter` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunter`
--

INSERT INTO `volunter` (`id`, `name`, `email`, `mobile`, `address`, `image`) VALUES
(19, 'santosh', 'info.techs.csoys@gmail.com', '+918861920664', 'banglaore', 'santosh.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `volunter`
--
ALTER TABLE `volunter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `volunter`
--
ALTER TABLE `volunter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
