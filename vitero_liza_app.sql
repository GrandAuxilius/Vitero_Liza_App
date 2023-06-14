-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 06:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitero_liza_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `owners_id` int(10) NOT NULL,
  `prev` varchar(20) NOT NULL,
  `pres` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `owners_id`, `prev`, `pres`, `price`, `date`) VALUES
(63, 16, '12134', '54', '-24160', '23/06/14 17:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(10) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mi` varchar(2) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `lname`, `fname`, `mi`, `address`, `contact`) VALUES
(16, 'Vega', 'Tanya', '', 'Brgy. San Pedro', '09735274824'),
(18, 'Sheen', 'Teena', '', 'Brgy. San Pedro', '09364278433'),
(17, 'Ortega', 'Janna', '', 'Earth', '094635244792'),
(11, 'Vitero', 'Randel', '', 'Brgy. San Jose', '09567203821'),
(13, 'Fe', 'Jennifer', '', 'Naval Street', '09634173847'),
(12, 'West', 'Romdeo', '', 'Brgy', '09734623847');

-- --------------------------------------------------------

--
-- Table structure for table `tempo_bill`
--

CREATE TABLE `tempo_bill` (
  `id` int(11) NOT NULL,
  `Prev` varchar(40) NOT NULL,
  `Client` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tempo_bill`
--

INSERT INTO `tempo_bill` (`id`, `Prev`, `Client`) VALUES
(60, '340', 'Randel'),
(61, '340', 'Randel'),
(62, '4353', 'Romdeo'),
(63, '35435', 'Jennifer'),
(64, '12134', 'Tanya'),
(65, '12134', 'Tanya'),
(66, '12134', 'Tanya'),
(67, '23443', 'Janna'),
(68, '3453543', 'Teena');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(14, 'randel', 'randel', 'kokko'),
(19, 'randel', 'randeljj', 'HAKDOG'),
(27, 'edfwe', 'efefew', 'silewdfef'),
(28, 'agag', 'agaga', 'gagg');

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE `user_levels` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`id`, `username`, `password`, `userlevel`) VALUES
(1, 'admin', 'admin', '1'),
(4, 'user4', 'user4', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempo_bill`
--
ALTER TABLE `tempo_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_levels`
--
ALTER TABLE `user_levels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tempo_bill`
--
ALTER TABLE `tempo_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_levels`
--
ALTER TABLE `user_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
