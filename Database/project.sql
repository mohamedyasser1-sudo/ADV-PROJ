-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 01:19 PM
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
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `post_id`, `pagetype`, `pagename`, `pageurl`, `pagedescription`, `description1`, `image1`, `description2`, `image2`, `description3`, `image3`, `description4`, `image4`, `requiredcat1`, `requiredcat2`, `clicks`, `period`, `price`, `status`) VALUES
(1, 0, 'hide', '', '', '', '', 'C:xampp	mpphp27D0.tmp', '', '', '', '', '', '', 'd', '', 0, 0, 50, 1),
(2, 0, 'hide', 'sjsj', '', '', '', 'C:xampp	mpphp9856.tmp', '', '', '', '', '', '', 'wedfdlsklfl;s', '', 0, 0, 50, 1),
(3, 37, 'Facebook', 'ehab', 'ehab', 'ehab', 'ehab', '', 'ehab', '', 'ehab', '', 'ehab', '', 'ehab', 'ehab', 500, 2, 50, 1),
(4, 37, 'Facebook', 'ehab', 'ehab', 'ehab', 'ehab', '', 'ehab', '', 'ehab', '', 'ehab', '', 'ehab', 'ehab', 500, 2, 50, 1),
(5, 37, 'Facebook', 'ehab', 'ehab', 'ehab', 'ehab', '', 'ehab', '', 'ehab', '', 'ehab', '', 'ehab', 'ehab', 500, 2, 50, 1),
(6, 37, 'Facebook', 'ehab', 'ehab', 'ehab', 'ehab', '', 'ehab', 'C:xampp	mpphp5621.tmp', 'ehab', '', 'ehab', '', 'ehab', 'ehab', 500, 2, 50, 1),
(7, 37, 'YouTube', 'ehab', 'mohamed', 'ehab', 'ehab', 'C:xampp	mpphp6CE9.tmp', 'bob', 'C:xampp	mpphp6CEA.tmp', 'bob', 'C:xampp	mpphp6CFB.tmp', 'ehab', 'C:xampp	mpphp6CFC.tmp', 'ehabelshamy', 'ehabelshamy', 300, 2, 50, 1),
(10, 42, 'Facebook', 'eeeeYASSER', 'eee', 'ee', 'ee', 'C:xampp	mpphp535B.tmp', 'ee', 'C:xampp	mpphp535C.tmp', 'ee', 'C:xampp	mpphp535D.tmp', 'ee', 'C:xampp	mpphp536E.tmp', 'wwww', 'wwww', 1000000, 55, 50, 1),
(11, 43, 'Facebook', 'qq', 'qq', 'qq', 'qq', 'C:xampp	mpphpAE5D.tmp', 'rr', 'C:xampp	mpphpAE5E.tmp', 'rr', 'C:xampp	mpphpAE5F.tmp', 'rr', 'C:xampp	mpphpAE6F.tmp', 't', 'wwww', 1000000, 55, 50, 1);

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
  `description` varchar(200) NOT NULL,
  `category` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hostpages`
--

INSERT INTO `hostpages` (`id`, `user_id`, `name`, `url`, `followers`, `description`, `category`) VALUES
(1, 42, '', '', 0, '', 't');

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
(35, 'ehab', 'ehab', 'ehab', 'ehab.elshamy.101@gmail.com', 'ehabehab', 'Western Sahara', 1141513524, 1, '2020-01-07', 0, 0),
(37, 'ehab', 'ehab', 'ehab', 'ehab_elshamy82@yahoo.com', 'ehabehab', 'Egypt', 1141513524, 1, '2020-01-07', 7427, 0),
(39, 'ehab', 'ehab', 'ehab', 'ehab@ehab.com', 'ehabehab', 'ER', 1141513524, 1, '2020-01-11', 0, 0),
(40, 'ehab', 'ehab', 'ehab', 'ehabm@ehab.com', 'ehabehab', 'EG', 1141513524, 1, '2020-01-14', 2, 0),
(41, 'ehabelshamy', 'ehab', 'ehab', 'Ehab.M168647@te.eg', 'ehabehab', 'EG', 1141513524, 1, '2020-01-14', 0, 0),
(42, 'myasser', 'Mohamed', 'Yasser', 'm.yasser@aseel-group.com', '123456789', 'EG', 1158309246, 1, '2020-02-01', 0, 0),
(43, 'm.yasser@aseel-group.com', 'Mohamed', '', 'm.yasser@aseel-group.comTEST', '123456789', 'EG', 1158309246, 2, '2020-02-02', 0, 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hostpages`
--
ALTER TABLE `hostpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lookups`
--
ALTER TABLE `lookups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userpages`
--
ALTER TABLE `userpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
