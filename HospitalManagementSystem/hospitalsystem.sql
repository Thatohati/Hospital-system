-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 02:37 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patId` int(13) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patId`, `firstname`, `email`, `username`, `address`, `password`) VALUES
(2147483647, 'mpho', 'sarah@gmail.com', 'mphoza', '792 block jj pretoria', '0709');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminID`, `username`, `password`) VALUES
(1, 'mpho', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblassistance`
--

CREATE TABLE IF NOT EXISTS `tblassistance` (
  `assId` int(4) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `acontact` varchar(255) NOT NULL,
  `alocation` varchar(255) NOT NULL,
  `amessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblassistance`
--

INSERT INTO `tblassistance` (`assId`, `aname`, `aemail`, `acontact`, `alocation`, `amessage`) VALUES
(0, 'sarah', 'rah@gmail.com', '0215896332', 'soshanguve', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

CREATE TABLE IF NOT EXISTS `tblbook` (
  `bookno` int(2) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pnum` int(13) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pcontact` varchar(255) NOT NULL,
  `deptc` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`bookno`, `pname`, `pnum`, `pemail`, `pcontact`, `deptc`, `month`, `day`, `year`, `time`) VALUES
(0, 'hlolo', 2147483647, 'hoza@gmail.com', '0135296654', 'ear,nose & throat', 'november', '11', '08:00', ''),
(0, 'hlolo', 2147483647, 'hoza@gmail.com', '0135296654', 'ear,nose & throat', 'november', '11', '2019', '08:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoc`
--

CREATE TABLE IF NOT EXISTS `tbldoc` (
  `idNum` int(11) NOT NULL,
  `docId` int(13) NOT NULL,
  `docname` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `docaddress` varchar(255) NOT NULL,
  `docusername` varchar(255) NOT NULL,
  `doccontact` varchar(255) NOT NULL,
  `docemail` varchar(255) NOT NULL,
  `docpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldoc`
--

INSERT INTO `tbldoc` (`idNum`, `docId`, `docname`, `dept`, `docaddress`, `docusername`, `doccontact`, `docemail`, `docpassword`) VALUES
(0, 0, '8902130272085', 'clinical surgery', '0128649227', '345 pinewine 0001', 'gau@gmail.com', 'getswe', '0709');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `tblassistance`
--
ALTER TABLE `tblassistance`
  ADD PRIMARY KEY (`assId`);

--
-- Indexes for table `tbldoc`
--
ALTER TABLE `tbldoc`
  ADD PRIMARY KEY (`idNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
