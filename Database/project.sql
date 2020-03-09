-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2020 at 08:59 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

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

DROP TABLE IF EXISTS `accepted_adds`;
CREATE TABLE IF NOT EXISTS `accepted_adds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add_id` int(11) NOT NULL,
  `hosts_id` text NOT NULL,
  `hosts_count` int(11) NOT NULL,
  `required_time` int(11) NOT NULL,
  `time_to_start` datetime NOT NULL,
  `time_to_end` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accepted_adds`
--

INSERT INTO `accepted_adds` (`id`, `add_id`, `hosts_id`, `hosts_count`, `required_time`, `time_to_start`, `time_to_end`) VALUES
(9, 29, '35,', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(150) NOT NULL,
  `type` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '$2y$10$aTIVamBYDu5ErryWqNL31efE4JxF2tGdZz8kgYMh84IiiYi63RGQS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

DROP TABLE IF EXISTS `advertise`;
CREATE TABLE IF NOT EXISTS `advertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `rejects_id` text NOT NULL DEFAULT ',',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `post_id`, `pagetype`, `pagename`, `pageurl`, `pagedescription`, `description1`, `image1`, `description2`, `image2`, `description3`, `image3`, `description4`, `image4`, `requiredcat1`, `requiredcat2`, `clicks`, `period`, `price`, `status`, `count_for_A`, `count_for_B`, `count_for_C`, `hosts_id`, `rejects_id`) VALUES
(27, 37, 'INSTAGRAM', 'good', 'goodday', 'gooogyear', 'it will work', '51603173_1353800621427430_1917240089168052224_o.jpg', '', '', '', '', '', '', 'NEWS&POLITICS', 'NEWS&POLITICS', 500, 1, 50, '1', 0, 0, 0, ',', ','),
(28, 37, 'FACEBOOK', 'kkk', 'kkkk', 'kkk', 'kkk', '51603173_1353800621427430_1917240089168052224_o.jpg', 'lllllll', '82770308_2426012477663071_4082070345572417536_o.jpg', 'sllllsl', 'Capture.PNG', 'kdkdkdkdk', 'logo.png', 'AUTOS&VECHICLES', 'Sports', 1000, 1, 50, '1', 0, 0, 0, ',', ',35,'),
(29, 37, 'FACEBOOK', 'kkk', 'kkkk', 'kkk', 'kkk', '51603173_1353800621427430_1917240089168052224_o.jpg', 'lllllll', '82770308_2426012477663071_4082070345572417536_o.jpg', 'sllllsl', 'Capture.PNG', 'kdkdkdkdk', 'logo.png', 'AUTOS&VECHICLES', 'Sports', 1000, 2, 50, '1', 0, 1, 0, ',35,', ','),
(30, 43, 'YOUTUBE', 'fffgfg', 'fgfgfg', 'gfgfg', 'fgfg', 'iiiiiiiiiiiiiiiiiiiiiiiillllllllllllll.PNG', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 50, '1', 0, 0, 0, ',', ','),
(31, 43, 'YOUTUBE', 'fffgfg', 'fgfgfg', 'gfgfg', 'fgfg', 'iiiiiiiiiiiiiiiiiiiiiiiillllllllllllll.PNG', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 50, '1', 0, 0, 0, ',', ','),
(32, 43, 'YOUTUBE', 'بب', 'ب', 'ب', 'ب', '57-512.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 1000, 1, 50, '1', 0, 0, 0, ',', ','),
(33, 43, 'FACEBOOK', 'kniobioiod', 'https://meet.google.com/ija-fivd-dqe', 'jsbsbskjs', 'jsskjbskbsk', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(34, 43, 'FACEBOOK', 'jbdjkdnkj', 'https://meet.google.com/ija-fivd-dqe', 'akjbssjbkj', 'lkznon', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(35, 43, 'FACEBOOK', 'lonzls', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'msakjsnkl', 'ksnaks', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(36, 43, 'FACEBOOK', 'knsonsoi', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'ansos', 'klNOI', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 1000, 1, 0, '1', 0, 0, 0, ',', ','),
(37, 43, 'FACEBOOK', 'JASBUSI', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'KNIONOIN', 'KJNINO', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(38, 43, 'FACEBOOK', 'nsnsoia', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'kNOIAN', 'anoisoa', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(39, 43, 'YOUTUBE', 'oiniozsni', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'kznodnsod', 'skdndsindo', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(40, 43, 'YOUTUBE', 'KLNins', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'kanionosi', 'zknionsoi', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(41, 43, 'FACEBOOK', 'jbzbzi', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'zmpozmo', 'lzkszonz', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(42, 43, 'FACEBOOK', 'jbzbzi', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'zmpozmo', 'lzkszonz', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(43, 43, 'FACEBOOK', 'jbzbzi', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'zmpozmo', 'lzkszonz', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(44, 43, 'FACEBOOK', 'jbzbzi', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'zmpozmo', 'lzkszonz', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(45, 43, 'FACEBOOK', 'ndknd', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'znizsnozi', 'akniosnoi', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(46, 43, 'FACEBOOK', 'knzoizno', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'knaoinsoai', 'akjbnoisnasi', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(47, 43, 'FACEBOOK', 'ksnsn', 'asmposmos', 'KLSNosn', 'ksamoasm', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(48, 43, 'FACEBOOK', 'SHDNOSI', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'KZNONDOI', 'SNOSIOJDOI', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(49, 43, 'FACEBOOK', 'knioh', 'lknoino', 'kznoio', 'KNoi', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(50, 43, 'YOUTUBE', 'asknasio', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'klnaOSA', 'AKSNSAO', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(51, 43, 'YOUTUBE', 'asknasio', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'klnaOSA', 'AKSNSAO', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(52, 43, 'YOUTUBE', 'asknasio', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'klnaOSA', 'AKSNSAO', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(53, 43, 'YOUTUBE', 'asknasio', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'klnaOSA', 'AKSNSAO', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(54, 43, 'FACEBOOK', 'asass', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'sknoasosa', 'knoinoie', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 0, '1', 0, 0, 0, ',', ','),
(55, 43, 'FACEBOOK', 'nidjsdoi', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'AJBSNUSIAB', 'SJNIOSINAO', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 500, '1', 0, 0, 0, ',', ','),
(56, 43, 'FACEBOOK', 'niNosi', 'https://developer.paypal.com/docs/integration/direct/payments/paypal-payments/', 'asknao', 'kasnosnasi', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 500, '1', 0, 0, 0, ',', ','),
(57, 43, 'FACEBOOK', 'knozi', 'SKNoisa', 'KNSoasn', 'kNOI', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 1000, 1, 0, '1', 0, 0, 0, ',', ','),
(58, 43, 'YOUTUBE', 'noISIs', 'SKnsoszi', 'Noiasais', 'ajbasiiu', 'Admission System.png', '', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 500, '1', 0, 0, 0, ',', ','),
(59, 37, 'FACEBOOK', 'bubibiu', 'https://www.php.net/manual/en/function.dirname.php', 'bjiubiu', 'knioinoi', 'Admission System.png', 'jninoinio', '', '', '', '', '', 'PETS&ANIMALS', 'PETS&ANIMALS', 500, 1, 500, '1', 0, 0, 0, ',', ',');

-- --------------------------------------------------------

--
-- Table structure for table `clicks`
--

DROP TABLE IF EXISTS `clicks`;
CREATE TABLE IF NOT EXISTS `clicks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adv_id` int(11) NOT NULL,
  `parts` int(11) NOT NULL DEFAULT 2,
  `hosts` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`hosts`)),
  `required` int(11) DEFAULT NULL,
  `part1` int(11) DEFAULT NULL,
  `part2` int(11) DEFAULT NULL,
  `part3` int(11) DEFAULT NULL,
  `part4` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clicks`
--

INSERT INTO `clicks` (`id`, `adv_id`, `parts`, `hosts`, `required`, `part1`, `part2`, `part3`, `part4`, `total`) VALUES
(13, 51, 1, '{\"22\":2}', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hostpages`
--

DROP TABLE IF EXISTS `hostpages`;
CREATE TABLE IF NOT EXISTS `hostpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(150) NOT NULL,
  `followers` int(11) NOT NULL,
  `followers_cat` varchar(1) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `verification` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hostpages`
--

INSERT INTO `hostpages` (`id`, `user_id`, `name`, `url`, `followers`, `followers_cat`, `description`, `category`, `verification`, `status`) VALUES
(1, 35, 'ehab', '', 0, 'A', '', 'Sports', 'ehab', 0),
(2, 43, '', '', 0, 'A', '', 'Sports', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lookups`
--

DROP TABLE IF EXISTS `lookups`;
CREATE TABLE IF NOT EXISTS `lookups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagetypes` varchar(25) NOT NULL,
  `prices` int(11) NOT NULL,
  `category` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lookups_table`
--

DROP TABLE IF EXISTS `lookups_table`;
CREATE TABLE IF NOT EXISTS `lookups_table` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOOKUP_TYPE` varchar(50) DEFAULT NULL,
  `LOOKUP_LABEL` varchar(50) DEFAULT NULL,
  `LOOKUP_VALUE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

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
(28, 'CLICK_PRICE', '200$', '200');

-- --------------------------------------------------------

--
-- Table structure for table `rejected_adds`
--

DROP TABLE IF EXISTS `rejected_adds`;
CREATE TABLE IF NOT EXISTS `rejected_adds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add_id` int(11) NOT NULL,
  `hosts_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rejected_adds`
--

INSERT INTO `rejected_adds` (`id`, `add_id`, `hosts_id`) VALUES
(9, 28, '35,');

-- --------------------------------------------------------

--
-- Table structure for table `userpages`
--

DROP TABLE IF EXISTS `userpages`;
CREATE TABLE IF NOT EXISTS `userpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `followers` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `generatedurl` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `active` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `second_name`, `email`, `password`, `country`, `phone`, `type`, `date`, `code`, `active`) VALUES
(35, 'ehab elshamy', 'ehab', 'elshamy', 'ehab.elshamy.101@gmail.com', 'ehabehab', 'Western Sahara', 1141513524, 1, '2020-01-07', 0, 2),
(37, 'ehab', 'ehab', 'ehab', 'ehab_elshamy82@yahoo.com', 'ehabehab', 'Egypt', 1141513524, 2, '2020-01-07', 7427, 2),
(39, 'ehab', 'ehab', 'ehab', 'ehab@ehab.com', 'ehabehab', 'ER', 1141513524, 1, '2020-01-11', 0, 1),
(40, 'ehab', 'ehab', 'ehab', 'ehabm@ehab.com', 'ehabehab', 'EG', 1141513524, 2, '2020-01-14', 2, 1),
(41, 'ehabelshamy', 'ehab', 'ehab', 'Ehab.M168647@te.eg', 'ehabehab', 'EG', 1141513524, 1, '2020-01-14', 0, 1),
(42, 'myasser', 'Mohamed', 'Yasser', 'm.yasser@aseel-group.com', '123456789', 'EG', 1158309246, 1, '2020-02-01', 0, 1),
(43, 'm.yasser', 'Mohamed', '', 'm.yasser@aseel-group.comTEST', '123456789', 'EG', 1158309246, 2, '2020-02-02', 0, 2),
(44, 'qqq', 'qqq', 'qqq', 'm.yasser@aseel', '123456789', 'EG', 1158309246, 1, '2020-03-05', 0, 0),
(45, 'qqqqqeeerr', 'Mohamed', '', 'm.yasser@aseel-group.comgggggg', '123456789', 'EG', 1158309246, 1, '2020-03-07', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
