-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 04:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_adds`
--

CREATE TABLE `accepted_adds` (
  `id` int(11) NOT NULL,
  `add_id` int(11) NOT NULL,
  `hosts_id` text NOT NULL,
  `hosts_count` int(11) NOT NULL,
  `required_time` int(11) NOT NULL,
  `time_to_start` datetime NOT NULL,
  `time_to_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(150) NOT NULL,
  `type` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '$2y$10$aTIVamBYDu5ErryWqNL31efE4JxF2tGdZz8kgYMh84IiiYi63RGQS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `pagetype` varchar(25) NOT NULL,
  `pagename` varchar(50) NOT NULL,
  `pageurl` varchar(100) NOT NULL,
  `pagedescription` varchar(200) NOT NULL,
  `description1` varchar(100) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `description2` varchar(100) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `description3` varchar(100) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `description4` varchar(100) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `requiredcat1` varchar(50) NOT NULL,
  `requiredcat2` varchar(50) NOT NULL,
  `clicks` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `count_for_A` int(1) NOT NULL DEFAULT 0,
  `count_for_B` int(11) NOT NULL DEFAULT 0,
  `count_for_C` int(11) NOT NULL DEFAULT 0,
  `hosts_id` text NOT NULL DEFAULT ',',
  `rejects_id` text NOT NULL DEFAULT ','
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clicks`
--

CREATE TABLE `clicks` (
  `id` int(11) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `parts` int(11) NOT NULL DEFAULT 2,
  `hosts` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hostpages`
--

CREATE TABLE `hostpages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(150) NOT NULL,
  `followers` int(11) NOT NULL,
  `followers_cat` varchar(1) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `verification` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lookups_table`
--

CREATE TABLE `lookups_table` (
  `ID` int(11) NOT NULL,
  `LOOKUP_TYPE` varchar(50) DEFAULT NULL,
  `LOOKUP_LABEL` varchar(50) DEFAULT NULL,
  `LOOKUP_VALUE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lookups_table`
--

INSERT INTO `lookups_table` (`ID`, `LOOKUP_TYPE`, `LOOKUP_LABEL`, `LOOKUP_VALUE`) VALUES
(1, 'PAGE_TYPE', 'Facebook Page', 'FACEBOOK'),
(2, 'PAGE_TYPE', 'Youtube Channel', 'YOUTUBE'),
(3, 'PAGE_TYPE', 'Instagram Account', 'INSTAGRAM'),
(4, 'PAGE_TYPE', 'Website', 'WEBSITE'),
(5, 'CLICK_COUNTS', '500', '500'),
(6, 'CLICK_COUNTS', '1000', '1000'),
(7, 'CLICK_COUNTS', '2000', '2000'),
(8, 'CLICK_COUNTS', '5000', '5000'),
(9, 'ADS_DURATION', '1', '1'),
(10, 'ADS_DURATION', '2', '2'),
(11, 'PAGE_CATEGORIES', 'Autos & Vechicles', 'AUTOS&VECHICLES'),
(12, 'PAGE_CATEGORIES', 'Pets & Animals', 'PETS&ANIMALS'),
(13, 'PAGE_CATEGORIES', 'Sports', 'SPORTS'),
(14, 'PAGE_CATEGORIES', 'Travel & Events', 'TRAVEL&EVENTS'),
(15, 'PAGE_CATEGORIES', 'Gaming', 'GAMING'),
(16, 'PAGE_CATEGORIES', 'People & Blogs', 'PEOPLE & BLOGS'),
(17, 'PAGE_CATEGORIES', 'Comedy', 'COMEDY'),
(18, 'PAGE_CATEGORIES', 'Business & Brands', 'BUSINESS&BRANDS'),
(19, 'PAGE_CATEGORIES', 'Entertainment', 'ENTERTAINMENT'),
(20, 'PAGE_CATEGORIES', 'News & Politics', 'NEWS&POLITICS'),
(21, 'PAGE_CATEGORIES', 'Howto & Style', 'HOWTO&STYLE'),
(22, 'PAGE_CATEGORIES', 'Education', 'EDUCATION'),
(23, 'PAGE_CATEGORIES', 'Science & Technology', 'SCIENCE&TECHNOLOGY'),
(24, 'PAGE_CATEGORIES', 'Nonprofits & Activism', 'NONPROFITS&ACTIVISM'),
(25, 'CLICK_PRICE', '50$', '50'),
(26, 'CLICK_PRICE', '90$', '90'),
(27, 'CLICK_PRICE', '160$', '160'),
(28, 'CLICK_PRICE', '200$', '200'),
(30, 'FOLLOWERS', '100K - 250K', 'A'),
(31, 'FOLLOWERS', '250K - 500K', 'B'),
(32, 'FOLLOWERS', '500K - 750K', 'C'),
(33, 'FOLLOWERS', '750K-1M', 'D'),
(34, 'FOLLOWERS', '1M - ', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `rejected_adds`
--

CREATE TABLE `rejected_adds` (
  `id` int(11) NOT NULL,
  `add_id` int(11) NOT NULL,
  `hosts_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userpages`
--

CREATE TABLE `userpages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `followers` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `generatedurl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `second_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `date` date NOT NULL,
  `code` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_adds`
--
ALTER TABLE `accepted_adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clicks`
--
ALTER TABLE `clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostpages`
--
ALTER TABLE `hostpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookups_table`
--
ALTER TABLE `lookups_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rejected_adds`
--
ALTER TABLE `rejected_adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpages`
--
ALTER TABLE `userpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_adds`
--
ALTER TABLE `accepted_adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hostpages`
--
ALTER TABLE `hostpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lookups_table`
--
ALTER TABLE `lookups_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rejected_adds`
--
ALTER TABLE `rejected_adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userpages`
--
ALTER TABLE `userpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
