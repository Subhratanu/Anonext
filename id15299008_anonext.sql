-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2021 at 06:44 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15299008_anonext`
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
(19, 'Hey its payel', 12),
(20, 'Kukul', 12),
(21, 'Kukul', 12),
(22, 'Kukul', 12),
(23, 'Hi message', 12),
(24, 'Mone pore sei din r kotha', 12),
(25, 'Bobbo', 12),
(26, 'Tumi amake ager moto e bhalobasho ? ', 12),
(27, 'Khali onno meye r kotha bhaba taina.  ', 12),
(28, 'Chokh gele debo tomar osobhyo chele', 12),
(29, 'Ei j amk dekhoo', 12),
(30, 'ogooooooo', 13),
(32, 'Hi', 16),
(33, 'pagla khabi ki jhaje more jabi', 16),
(34, 'Hiii\r\n', 16),
(35, 'Trt de birthday er', 16),
(36, 'Hiii dada', 16),
(37, 'Bonjour, je mapple Kapo. Et toi?', 16),
(38, 'hii', 17),
(39, 'qwertyuiopasdfghjklzxcvbnm', 17),
(40, 'yo', 16),
(41, '1234', 1),
(42, 'Jor kore matha thukie pronam koras !!! :(', 19),
(43, 'Ghumoooooooo', 19),
(44, 'Random', 20),
(45, 'ae vaiiiii bhalo achis??', 21);

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
(12, 'Piku', 'subhratanusaha100@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'sumi2000', 'sumi2000@gmail.com', '39167f9a048443a5f4d757fe20e5eb16'),
(16, 'Sneha', 'sneha@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'abc123', 'abc@abc.com', '79cfeb94595de33b3326c06ab1c7dbda'),
(18, 'Mousumi', 'mou.pramanick@gmail.com', '886478ac5719b90ef11c86975c6289c6'),
(19, 'Mousumi', 'mou.pramanick@outlook.com', '3a2aed78e42bd4aa52499edd9914e918'),
(20, 'Swara@12', 'swarnalibanerjeesodepur@gmail.com', 'c37ac88835b77be6b36845f7bc0e7789'),
(21, 'abcd', 'abcd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

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
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
