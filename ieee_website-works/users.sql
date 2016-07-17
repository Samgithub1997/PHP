-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2016 at 05:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog` text,
  `user_id` int(11) DEFAULT NULL,
  `user` varchar(255) NOT NULL,
  `time_stamp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `blog`, `user_id`, `user`, `time_stamp`) VALUES
(18, 'This is a test blog', 1, 'Sam', '2016-07-16 20:32:52'),
(19, 'Your test was a success man', 2, 'Manan', '2016-07-16 20:33:31'),
(20, 'Yeah Man!', 1, 'Sam', '2016-07-16 20:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `username`, `password`, `city`) VALUES
(1, 'Samarth', 'Sharma', 'samarthsharma351@gmail.com', 'Sam', 'ican@1997', 'Surat'),
(2, 'Manan', 'Pachchigar', 'mananpachchigar350@gmail.com', 'Manan', 'litele@1997', 'Surat'),
(3, 'Sarth', 'dubey', 'sarthdubey@gmail.com', 'sarth', 'mysticknight', 'Surat'),
(11, 'mahesh', 'sharma', 'msh.anand2010@gmail.com', 'mahesh', 'mahesh@123', 'Surat'),
(12, 'Utkarsh', 'Agarwal', 'Utagarwal@gmail.com', 'utkarsh', 'utkarsh@123', 'Kanpur'),
(13, 'jamie', 'lannister', 'jamielan@gmail.com', 'Jamie', 'lanistersrock', 'Surat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD CONSTRAINT `tbl_blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
