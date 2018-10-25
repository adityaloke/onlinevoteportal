-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 08:52 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `ooid` int(10) NOT NULL,
  `eid` int(10) NOT NULL,
  `cd` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `edetails`
--

CREATE TABLE `edetails` (
  `ooid` int(10) NOT NULL,
  `et` varchar(255) NOT NULL,
  `eid` int(10) NOT NULL,
  `ed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finalsub`
--

CREATE TABLE `finalsub` (
  `ooid` int(10) NOT NULL,
  `eid` int(10) NOT NULL,
  `start` varchar(20) NOT NULL,
  `end1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finalvotes`
--

CREATE TABLE `finalvotes` (
  `vid` int(10) NOT NULL,
  `eid` int(10) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '0',
  `vote` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ooid` int(10) NOT NULL,
  `eid` int(11) NOT NULL,
  `mem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `org_reg`
--

CREATE TABLE `org_reg` (
  `ooid` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `ooid` int(10) NOT NULL,
  `eid` int(10) NOT NULL,
  `pos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voter_reg`
--

CREATE TABLE `voter_reg` (
  `vid` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `psw` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD UNIQUE KEY `cd` (`cd`);

--
-- Indexes for table `edetails`
--
ALTER TABLE `edetails`
  ADD UNIQUE KEY `eid` (`et`(10));

--
-- Indexes for table `finalvotes`
--
ALTER TABLE `finalvotes`
  ADD UNIQUE KEY `vid` (`vid`,`eid`);

--
-- Indexes for table `org_reg`
--
ALTER TABLE `org_reg`
  ADD PRIMARY KEY (`ooid`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD UNIQUE KEY `ooid` (`ooid`),
  ADD UNIQUE KEY `pos` (`pos`);

--
-- Indexes for table `voter_reg`
--
ALTER TABLE `voter_reg`
  ADD PRIMARY KEY (`vid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
