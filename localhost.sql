-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2021 at 08:18 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crm`
--
CREATE DATABASE IF NOT EXISTS `crm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crm`;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `incharge` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `name`, `address`, `incharge`, `mobile`) VALUES
(2, 'trivandrum', 'gghhj hhjjh hhj', 'amala', 2222),
(3, 'calicut', 'gfgbgv ghgh', 'drisya', 5456656),
(4, 'chennai', 'gfgbgv ghgh', 'divya', 5456656),
(5, 'kollam', 'ghgh hh', 'lilli', 655665),
(6, 'chennai', 'dsefrd fdfdf', 'angel', 555832266),
(7, 'chennai', 'dsefrd fdfdf', 'angel', 555832266);

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE IF NOT EXISTS `checklist` (
  `chid` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(80) NOT NULL,
  `checklist` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  PRIMARY KEY (`chid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`chid`, `product`, `checklist`, `code`) VALUES
(3, 'hp', 'ghghhjhj', '565');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `address`, `phone1`, `phone2`, `email`, `dob`, `username`, `password`) VALUES
(3, 'drisya', 'sreeragam', 54656565, 2147483647, 'drisya@gmail.com', '2018-04-12', 'customer1', 'customer1'),
(7, 'sree', 'vddcdsc scdc', 55556, 255255, 'sree@gmail.com', '2018-04-25', 'sree', 'sree'),
(8, 'divya', '  rtgdtg', 56576567, 5675756, 'retgrg@fgbdsfgfdg', '2021-06-03', ' divya', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `age`, `branch`, `address`, `usertype`, `email`, `phone`, `username`, `password`) VALUES
(7, 'ammu', 24, 'kollam', 'sreeragam', 'technician', 'divya@gmail.com', 2147483647, 'technician', 'technician'),
(8, 'achu', 32, 'kollam', 'fvfccddfvf', 'technician', 'dfcddfdfs', 56565665, 'technician1', 'technician2'),
(9, 'archa', 22, 'tvm', 'bnbnnmjmn', 'employee', 'vcdsdssd', 55452, 'employee1', 'employee1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'divya', 'divya', 'employee'),
(3, 'drisya', 'drisya', 'employee'),
(6, 'technician', 'technician', 'technician'),
(7, '', '', 'employee'),
(8, '', '', 'employee'),
(9, 'drisya', 'drisya', 'Employee'),
(10, 'drisya', 'drisya', 'Employee'),
(11, ' divya', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(30) NOT NULL,
  `code` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `pmperiod` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `product`, `code`, `warranty`, `price`, `tax`, `pmperiod`) VALUES
(2, 'samsung mobile', '1000', '2', 13000, 5, '6'),
(4, 'hp', '565', '12', 28000, 23, '2');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `billno` int(11) NOT NULL,
  `customer` varchar(30) NOT NULL,
  `product` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `gross` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `salesdate` date NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `billno`, `customer`, `product`, `code`, `quantity`, `gross`, `tax`, `total`, `salesdate`, `eid`) VALUES
(1, 1500, '2', 'samsung mobile', '2', 2, 26000, 5, 27300, '2018-03-17', 4),
(5, 532, '3', 'hp', '4', 5, 140000, 23, 172200, '2018-04-18', 4),
(9, 21332, '3', 'samsung mobile', '2', 10, 130000, 5, 136500, '2018-04-18', 4),
(12, 122, '2', 'samsung mobile', '2', 32, 416000, 5, 436800, '2018-04-18', 4),
(14, 1300, '3', 'samsung mobile', '2', 2, 26000, 5, 27300, '2018-04-18', 4),
(16, 121233, '2', 'samsung mobile', '2', 25, 325000, 5, 341250, '2018-04-18', 4),
(17, 545656, '6', 'samsung mobile', '2', 565, 7345000, 5, 7712250, '2018-04-18', 4),
(18, 5454, '7', 'samsung mobile', '2', 2, 26000, 5, 27300, '2018-04-19', 4),
(19, 65556, '3', 'hp', '4', 2, 56000, 23, 68880, '2018-08-02', 4);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(30) NOT NULL,
  `attendby` varchar(30) NOT NULL,
  `complaint` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `transfer` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `rootcause` varchar(80) NOT NULL,
  `correctiveaction` varchar(50) NOT NULL,
  `correctivedate` date NOT NULL,
  `addeddate` date NOT NULL,
  `sid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`tid`, `customer`, `attendby`, `complaint`, `description`, `transfer`, `status`, `rootcause`, `correctiveaction`, `correctivedate`, `addeddate`, `sid`, `price`) VALUES
(8, '2', 'ammu', 'screen', 'detggrrdggvef', '', 'alloted', '', '', '2018-04-17', '2018-04-18', 0, 0),
(11, '3', 'ammu', 'brightness', 'dfdsdsds', '', 'paymentpending', '', '', '2018-04-03', '2018-04-18', 0, 0),
(12, '3', 'ammu', 'hinge complaint', 'dfcsdcs scsdcdsds', '', 'paymentpending', '', '', '2018-08-05', '2018-04-19', 5, 0),
(13, '7', 'achu', 'screen', 'sdcscs', '', 'completed', 'sdzczsc', 'cszdcszc', '2018-04-19', '2018-04-19', 18, 2500),
(14, '2', '', 'nbbnnh', 'hghjhj', '', 'pending', '', '', '0000-00-00', '2018-08-05', 1, 0),
(15, '2', '', 'hjhjhj', 'hjhjj', '', 'pending', '', '', '0000-00-00', '2018-08-05', 1, 0),
(16, '3', '', 'hinge ', 'hinge complaint', '', 'pending', '', '', '0000-00-00', '2021-06-19', 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
