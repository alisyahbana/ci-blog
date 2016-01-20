-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2016 at 05:13 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('22430b24317ab40e27bf78fdeacabda47c245fb7', '::1', 1452692278, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323639313938303b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('4e13e4e5115687af32694fb806ad7aaca754e8ef', '::1', 1452692576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323639323238313b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('24bf8d6877293981a7cba88c071e3550ac70a890', '::1', 1452692857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323639323630303b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('451bc332a1844b6522bc9503e257ed4fee9cd38c', '::1', 1452693062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323639323939323b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('7b79bf6e7782cee4d0ac45ebf7374182894ea0d0', '::1', 1452697417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323639373133323b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('b2f943be97071084d26266f28beaa3d959023dc4', '::1', 1452697787, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323639373639353b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('74e9b2d0d8c5d013d8f0badc090e3dd9baa6b3fc', '::1', 1452698570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323639383336333b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('e35a8cab9ceaab990027df2e4888d38bb188273b', '::1', 1452699355, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323639393133373b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('ce922be36d35365aaee5f9f25f83dcd03706ffd4', '::1', 1452700455, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323730303334353b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b6d6573736167657c733a32373a22596f757220506f737420686173206265656e2044656c657465642e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7b56bda30a3dab7ef3b31278cc32622abc37baf9', '::1', 1452700855, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323730303733383b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b),
('b9053312ca45764e01e839047f2f93178d2b1e43', '::1', 1452701606, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323730313432323b757365726e616d657c733a31313a22616c697379616862616e61223b69735f6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `order_time` datetime NOT NULL,
  `shirt_size` varchar(10) NOT NULL,
  `stripe_choice` varchar(20) NOT NULL,
  `free_shipping` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `email`, `order_time`, `shirt_size`, `stripe_choice`, `free_shipping`) VALUES
(2, 'sholahuddin.azulgrana@gmail.com', '2015-12-01 12:07:42', 'large', 'black, red', 1),
(3, 'indotelco@gmail.com', '2015-12-01 12:12:25', 'large', 'blue, red, green', 0),
(4, 'red_light_indicates@hotmail.com', '2015-12-01 12:14:42', 'large', 'black, red', 0),
(5, 'red_light_indicates@hotmail.com', '2015-12-01 12:16:43', 'large', 'black, red', 0),
(6, 'indotelco@bana.com', '2015-12-01 12:16:53', 'large', 'black, red', 0),
(7, 'indotelco@gmail.com', '2015-12-01 12:18:00', 'large', 'black, red', 0),
(8, 'indotelco@gmail.com', '2015-12-01 12:22:29', 'large', 'black, red', 0),
(9, 'indotelco@gmail.com', '2015-12-01 12:23:40', 'large', 'black, red', 0),
(10, 'indotelco@gmail.com', '2015-12-01 12:27:17', 'large', 'black, red', 0),
(11, 'indotelco@gmail.com', '2015-12-01 12:29:04', 'large', 'black, red', 0),
(12, 'indotelco@gmail.com', '2015-12-01 12:30:56', 'large', 'black, blue, red, gr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL,
  `author_id` varchar(255) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, '1', 'Tes', '<p>ini tes</p>', '2016-01-11 16:46:13', '0000-00-00 00:00:00'),
(2, '2', 'Judul ketiga', '<p>Ts Judul</p>', '2016-01-11 16:53:32', '0000-00-00 00:00:00'),
(3, '2', 'Judul keempat', '<p>Tes Untuk Judul Ke empat</p>', '2016-01-11 16:55:52', '0000-00-00 00:00:00'),
(5, '2', 'Sinestesia', '<p>tes judul 6</p>', '2016-01-11 16:58:28', '0000-00-00 00:00:00'),
(9, 'alisyahbana', 'Putih', '<p>Seperti Kata Wiji, di semai biji biji dituai menjadi api</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://titinadablog.files.wordpress.com/2015/12/siaran-pers-erk-sinestesia.jpg?w=723&amp;h=723" alt="album" width="719" height="719" /></p>', '2016-01-13 16:13:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `profpict` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `profpict`) VALUES
(1, 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', 'admin@admin.com', 'Admin', 'istrator', ''),
(2, 'alisyahbana', '28221b7f0c1c69c6d0b4c0cbc5bd3564', 'red_light_indicates@hotmail.com', 'Sholahuddin', 'Alisyahbana', 'alisyahbana.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
