-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 01:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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

--
-- Dumping data for table `accepted_adds`
--

INSERT INTO `accepted_adds` (`id`, `add_id`, `hosts_id`, `hosts_count`, `required_time`, `time_to_start`, `time_to_end`) VALUES
(9, 29, '35,', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `count_for_A` int(1) NOT NULL,
  `count_for_B` int(11) NOT NULL,
  `count_for_C` int(11) NOT NULL,
  `hosts_id` text NOT NULL DEFAULT ',',
  `rejects_id` text NOT NULL DEFAULT ','
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `post_id`, `pagetype`, `pagename`, `pageurl`, `pagedescription`, `description1`, `image1`, `description2`, `image2`, `description3`, `image3`, `description4`, `image4`, `requiredcat1`, `requiredcat2`, `clicks`, `period`, `price`, `status`, `count_for_A`, `count_for_B`, `count_for_C`, `hosts_id`, `rejects_id`) VALUES
(27, 37, 'INSTAGRAM', 'good', 'goodday', 'gooogyear', 'it will work', '51603173_1353800621427430_1917240089168052224_o.jpg', '', '', '', '', '', '', 'NEWS&POLITICS', 'NEWS&POLITICS', 500, 1, 50, '1', 0, 0, 0, ',', ','),
(28, 37, 'FACEBOOK', 'kkk', 'kkkk', 'kkk', 'kkk', '51603173_1353800621427430_1917240089168052224_o.jpg', 'lllllll', '82770308_2426012477663071_4082070345572417536_o.jpg', 'sllllsl', 'Capture.PNG', 'kdkdkdkdk', 'logo.png', 'AUTOS&VECHICLES', 'Sports', 1000, 1, 50, '1', 0, 0, 0, ',', ',35,'),
(29, 37, 'FACEBOOK', 'kkk', 'kkkk', 'kkk', 'kkk', '51603173_1353800621427430_1917240089168052224_o.jpg', 'lllllll', '82770308_2426012477663071_4082070345572417536_o.jpg', 'sllllsl', 'Capture.PNG', 'kdkdkdkdk', 'logo.png', 'AUTOS&VECHICLES', 'Sports', 1000, 2, 50, '1', 0, 1, 0, ',35,', ',');

-- --------------------------------------------------------

--
-- Table structure for table `clicks`
--

CREATE TABLE `clicks` (
  `id` int(11) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `required` int(11) NOT NULL,
  `part1` int(11) NOT NULL,
  `part2` int(11) NOT NULL,
  `part3` int(11) NOT NULL,
  `part4` int(11) NOT NULL,
  `total` int(11) NOT NULL
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

--
-- Dumping data for table `hostpages`
--

INSERT INTO `hostpages` (`id`, `user_id`, `name`, `url`, `followers`, `followers_cat`, `description`, `category`, `verification`, `status`) VALUES
(1, 35, 'ehab', '', 0, 'A', '', 'Sports', 'bobo', 1),
(2, 47, 'ehab', 'facebook.com/ehabelshamy', 250, 'B', 'ehab', 'SCIENCE&TECHNOLOGY', 'bobos', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lookups`
--

CREATE TABLE `lookups` (
  `id` int(11) NOT NULL,
  `pagetypes` varchar(25) NOT NULL,
  `prices` int(11) NOT NULL,
  `category` varchar(11) NOT NULL
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

--
-- Dumping data for table `rejected_adds`
--

INSERT INTO `rejected_adds` (`id`, `add_id`, `hosts_id`) VALUES
(9, 28, '35,');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `second_name`, `email`, `password`, `country`, `phone`, `type`, `date`, `code`, `active`) VALUES
(35, 'ehab elshamy', 'ehab', 'elshamy', 'ehab.elshamy.101@gmail.com', 'ehabehab', 'Western Sahara', 1141513524, 1, '2020-01-07', 0, 2),
(37, 'ehab', 'ehab', 'ehab', 'ehab_elshamy82@yahoo.com', 'ehabehab', 'Egypt', 1141513524, 2, '2020-01-07', 7427, 2),
(39, 'ehab', 'ehab', 'ehab', 'ehab@ehab.com', 'ehabehab', 'ER', 1141513524, 2, '2020-01-11', 0, 2),
(40, 'ehab', 'ehab', 'ehab', 'ehabm@ehab.com', 'ehabehab', 'EG', 1141513524, 2, '2020-01-14', 2, 1),
(41, 'ehabelshamy', 'ehab', 'ehab', 'Ehab.M168647@te.eg', 'ehabehab', 'EG', 1141513524, 1, '2020-01-14', 0, 1),
(42, 'myasser', 'Mohamed', 'Yasser', 'm.yasser@aseel-group.com', '123456789', 'EG', 1158309246, 1, '2020-02-01', 0, 1),
(43, 'm.yasser', 'Mohamed', '', 'm.yasser@aseel-group.comTEST', '123456789', 'EG', 1158309246, 1, '2020-02-02', 0, 2),
(47, 'ehab', 'ehabehab', 'ehabehab', 'ehabehab@ehab.com', 'ehabehab', 'EG', 1141513524, 1, '2020-03-08', 0, 2);

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
-- Indexes for table `lookups`
--
ALTER TABLE `lookups`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hostpages`
--
ALTER TABLE `hostpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lookups`
--
ALTER TABLE `lookups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lookups_table`
--
ALTER TABLE `lookups_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rejected_adds`
--
ALTER TABLE `rejected_adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userpages`
--
ALTER TABLE `userpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
