-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2018 at 10:33 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

DROP TABLE IF EXISTS `county`;
CREATE TABLE IF NOT EXISTS `county` (
  `shetlerID` int(2) NOT NULL,
  `County` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`shetlerID`, `County`) VALUES
(1, 'Dekalb'),
(2, 'Dekalb'),
(3, 'Fulton'),
(4, 'Fulton'),
(5, 'Fulton'),
(6, 'Fulton'),
(7, 'Fulton'),
(8, 'Fulton'),
(9, 'Dekalb'),
(10, 'Fulton'),
(11, 'fulton'),
(12, 'Dekalb'),
(13, 'fulton'),
(14, 'Fulton'),
(15, 'Dekalb');

-- --------------------------------------------------------

--
-- Table structure for table `dissability`
--

DROP TABLE IF EXISTS `dissability`;
CREATE TABLE IF NOT EXISTS `dissability` (
  `shetlerID` int(11) NOT NULL,
  `diss_ans` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `dissability`
--

INSERT INTO `dissability` (`shetlerID`, `diss_ans`) VALUES
(1, 'yes'),
(2, 'no'),
(3, 'no'),
(4, 'no'),
(5, 'no'),
(6, 'no'),
(7, 'no'),
(8, 'yes'),
(9, 'no'),
(10, 'no'),
(11, 'no'),
(12, 'yes'),
(13, 'no'),
(14, 'no'),
(15, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `location` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`ID`, `name`, `location`) VALUES
(1, 'Aldersgate Homes\r\n', '4105 Briarcliff Road Ne, Atlanta, GA 30345\r\n'),
(2, 'All Empowered Inc.\r\n', '219 Solomon Dr. Ellenwood, GA 30294\r\n'),
(3, 'Atlanta City Baptist Rescue Mission\r\n', '316 Peters St SW, Atlanta, GA 30313 \r\n'),
(4, 'The Atlanta Day Shelter for Women and Children\r\n', '655 Ethel Street NW, Atlanta, GA, 30318\r\n'),
(5, 'Atlanta Mission: My Sister\'s House\r\n', ' 921 Howell Mill Road, Atlanta, GA, 30318\r\n'),
(6, 'Atlanta Mission: Shepherd\'s Inn\r\n', '165 Ivan Allen Blvd. NW, Atlanta, Georgia 30313\r\n'),
(7, 'Covenant House Georgia\r\n', '1559 Johnson Rd. NW, Atlanta, GA 30318\r\n'),
(8, 'Crossroads Community Ministries\r\n', '420 Courtland St, Atlanta, GA 30308\r\n'),
(9, 'Decatur Cooperative Minestry\r\n', '115 Church St, Decatur, GA 30030\r\n'),
(10, 'Drake House\r\n', '10500 Clara Drive, Roswell, GA 30075\r\n'),
(11, 'Gateway\r\n', '275 Pryor St. SW Atlanta, GA, 30303\r\n'),
(12, 'Laquintas Place\r\n', '3598 Larkspur Terrace, Decatur, GA 30032\r\n'),
(13, 'Nicholas House Atlanta\r\n', '830 Boulevard SE, Atlanta, GA 30312\r\n'),
(14, 'Peachtree-Pine Overflow Shelter\r\n', '477 Peachtree Street, Atlanta, GA 30308\r\n'),
(15, 'Serenity House of Atlanta Ministries\r\n', '600 Main St, Atlanta, GA 30058\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `resource_ID` int(3) NOT NULL,
  `resource_item` varchar(30) NOT NULL,
  PRIMARY KEY (`resource_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_ID`, `resource_item`) VALUES
(101, 'charitable organization'),
(102, 'male-only shelter'),
(103, 'women-only shelter'),
(104, 'family shelter'),
(105, 'youth shelter'),
(106, 'emergency shelter');

-- --------------------------------------------------------

--
-- Table structure for table `shelter_resources`
--

DROP TABLE IF EXISTS `shelter_resources`;
CREATE TABLE IF NOT EXISTS `shelter_resources` (
  `shetlerID` int(2) NOT NULL,
  `resource_item` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `shelter_resources`
--

INSERT INTO `shelter_resources` (`shetlerID`, `resource_item`) VALUES
(1, 101),
(2, 101),
(3, 102),
(4, 103),
(4, 104),
(5, 103),
(5, 104),
(6, 102),
(6, 101),
(7, 105),
(7, 101),
(8, 104),
(9, 104),
(9, 106),
(9, 103),
(10, 103),
(10, 106),
(11, 102),
(11, 101),
(12, 106),
(13, 104),
(14, 106),
(15, 106),
(15, 101);

-- --------------------------------------------------------

--
-- Table structure for table `veteran`
--

DROP TABLE IF EXISTS `veteran`;
CREATE TABLE IF NOT EXISTS `veteran` (
  `shetlerID` int(11) NOT NULL,
  `vet_ans` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `veteran`
--

INSERT INTO `veteran` (`shetlerID`, `vet_ans`) VALUES
(1, 'no'),
(2, 'no'),
(3, 'no'),
(4, 'no'),
(5, 'no'),
(6, 'no'),
(7, 'no'),
(8, 'no'),
(9, 'yes'),
(10, 'no'),
(11, 'yes'),
(12, 'no'),
(13, 'no'),
(14, 'no'),
(15, 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
