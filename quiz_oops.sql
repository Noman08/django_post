-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 09:46 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_oops`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('nomanpc13@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(2) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Web Engineering'),
(2, 'C program'),
(3, 'DATA BASE');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(150) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(23, 'hiku', 'kuh', 'jkh', 'jkj', 'l', 3, 1),
(24, 'lygujk', 'jhgxsg', 'gv', 'hvj', 'jh', 1, 1),
(25, 'jhgk', 'jh', 'kug', 'kjuh', 'u', 3, 1),
(26, 'klkdlf', 'd', 'f', 'a', 'e', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `st_id` varchar(11) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `cat_id` int(2) NOT NULL,
  `total_ques` int(3) NOT NULL,
  `right_ans` int(2) NOT NULL,
  `wrong_ans` int(2) NOT NULL,
  `res` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`st_id`, `st_name`, `cat_id`, `total_ques`, `right_ans`, `wrong_ans`, `res`) VALUES
('1208001', 'Noman', 1, 3, 1, 2, '33.888880%'),
('1208002', 'jkjg', 1, 3, 2, 1, '66.66%'),
('1208003', 'borhan', 1, 3, 3, 0, '100%');

-- --------------------------------------------------------

--
-- Table structure for table `set_time`
--

CREATE TABLE IF NOT EXISTS `set_time` (
  `cat_id` int(2) NOT NULL,
  `time` int(3) NOT NULL,
  `rel_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_time`
--

INSERT INTO `set_time` (`cat_id`, `time`, `rel_time`) VALUES
(1, 7, '2018-06-02 23:56:00'),
(2, 8, '0000-00-00 00:00:00'),
(3, 0, '2018-06-03 02:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `st_id` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`st_id`, `name`, `email`, `pass`, `img`) VALUES
('1208001', 'Noman', 'nomanpc13@gmail.com', '12345678', 'Hydrangeas.jpg'),
('1208002', 'jkjg', 'nomanpc12@gmail.com', '12345678', 'Koala.jpg'),
('1208003', 'borhan', 'nomanpc14@gmail.com', '12345678', 'Jellyfish.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question` (`question`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`st_id`,`cat_id`);

--
-- Indexes for table `set_time`
--
ALTER TABLE `set_time`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `set_time`
--
ALTER TABLE `set_time`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
