-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 07:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anonext`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `msg`, `uid`) VALUES
(11, 'hey buddy remember??', 4),
(12, 'wassup', 4),
(13, 'hey', 3),
(14, 'hi how are you..i am  fine..', 5),
(15, 'ki re chinte parchis ???', 6),
(16, 'ki re bhalo achis???\r\n', 8),
(17, 'hey', 4),
(18, 'ki re', 4),
(19, 'ki re', 4),
(20, 'oiiiii ki reeee\r\n', 4),
(21, 'ki re bhalo achis???\r\n', 8),
(22, 'tanmoyyyyyyy ami', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `email`, `password`) VALUES
(1, 'bob', 'bob@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'piku', 'piku@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'sumi', 'sumi@mail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'subhra', 'subhra@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'subrata kumar saha', 'subratasaha7363@gmail.com', '18085327b86002fc604c323b9a07f997'),
(6, 'Susmita', 'susmita14022000@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'payel', 'debajni@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'tanmoy', 'tanmoy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'abc', 'abc@mail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
