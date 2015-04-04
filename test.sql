-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 11:07 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `locid` int(11) NOT NULL,
  `multicitypro` varchar(30) NOT NULL,
  `multicityproid` int(3) NOT NULL,
  `counreg` varchar(30) NOT NULL,
  `counregid` int(3) NOT NULL,
  `provstate` varchar(30) NOT NULL,
  `provstateid` int(3) NOT NULL,
  `coun` varchar(30) NOT NULL,
  `counid` int(3) NOT NULL,
  `con` varchar(30) NOT NULL,
  `conid` int(3) NOT NULL,
  PRIMARY KEY (`locid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locid`, `multicitypro`, `multicityproid`, `counreg`, `counregid`, `provstate`, `provstateid`, `coun`, `counid`, `con`, `conid`) VALUES
(1, 'Portland', 1, 'Multnomah', 1, 'Oregon', 1, 'USA', 1, 'NorthAmerica', 1),
(2, 'Portland', 1, 'Washington', 2, 'Oregon', 1, 'USA', 1, 'NorthAmerica', 1),
(3, 'Portland', 1, 'Clark/Cowlitz', 3, 'Oregon', 1, 'USA', 1, 'NorthAmerica', 1),
(4, 'Portland', 1, 'Clackamas', 4, 'Oregon', 1, 'USA', 1, 'NorthAmerica', 1),
(5, 'Portland', 1, 'NorthCoast', 5, 'Oregon', 1, 'USA', 1, 'NorthAmerica', 1),
(6, 'Portland', 1, 'YamhillCo', 6, 'Oregon', 1, 'USA', 1, 'NorthAmerica', 1),
(7, 'Portland', 1, 'ColumbiaGorge', 7, 'Oregon', 1, 'USA', 1, 'NorthAmerica', 1),
(8, 'Portland', 1, 'Seattle', 8, 'Washington', 1, 'USA', 1, 'NorthAmerica', 1),
(9, 'Portland', 1, 'Olympia', 9, 'Washington', 1, 'USA', 1, 'NorthAmerica', 1),
(10, 'Portland', 1, 'Sequim', 10, 'Washington', 1, 'USA', 1, 'NorthAmerica', 1),
(11, 'Portland', 1, 'Vancouver', 11, 'Washington', 1, 'USA', 1, 'NorthAmerica', 1);

-- --------------------------------------------------------

--
-- Table structure for table `maincategory`
--

CREATE TABLE IF NOT EXISTS `maincategory` (
  `mainid` int(2) NOT NULL,
  `maincategory` varchar(30) NOT NULL,
  `catsort` int(1) NOT NULL,
  `catabr` varchar(5) NOT NULL,
  `catmatch` varchar(3) NOT NULL,
  PRIMARY KEY (`mainid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincategory`
--

INSERT INTO `maincategory` (`mainid`, `maincategory`, `catsort`, `catabr`, `catmatch`) VALUES
(1, 'Creativity', 1, 'CRE', '2'),
(2, 'Environment', 1, 'ENV', '3'),
(3, 'Animals', 1, 'AML', '4'),
(4, 'Education', 1, 'EDU', '5'),
(5, 'Community', 1, 'COM', '6'),
(6, 'Health', 1, 'HTH', '7'),
(7, 'Personal', 1, 'HUS', '8'),
(8, 'International', 1, 'ITL', '9'),
(9, 'History', 2, 'HIS', 'CRE'),
(10, 'Culture', 2, 'CUL', 'CRE'),
(11, 'Heritage', 2, 'HER', 'CRE'),
(12, 'Landmarks', 2, 'LAN', 'CRE'),
(13, 'Art', 2, 'ART', 'CRE'),
(14, 'Music', 2, 'MUS', 'CRE'),
(15, 'Museums', 2, 'MUE', 'CRE'),
(16, 'Theater', 2, 'THR', 'CRE'),
(17, 'PBS', 2, 'PBS', 'CRE'),
(18, 'Media', 2, 'MDA', 'CRE'),
(19, 'Protection', 3, 'PRO', 'ENV'),
(20, 'Energy', 3, 'ENE', 'ENV'),
(21, 'Recycling', 3, 'RCY', 'ENV'),
(22, 'Gardens', 3, 'GAR', 'ENV'),
(23, 'Parks', 3, 'PAK', 'ENV'),
(24, 'Agriculture', 3, 'AGR', 'ENV'),
(25, 'Wilderness', 3, 'WDS', 'ENV'),
(26, 'Beautification', 3, 'BEA', 'ENV'),
(27, 'Horticulture', 3, 'HOR', 'ENV'),
(28, 'Pollution', 3, 'POL', 'ENV'),
(29, 'Rights', 4, 'RIG', 'AML'),
(30, 'Welfare', 4, 'WEL', 'AML'),
(31, 'Conservation', 4, 'CON', 'AML'),
(32, 'Zoos', 4, 'ZOO', 'AML'),
(33, 'Aquariums', 4, 'AQU', 'AML'),
(34, 'Perserves', 4, 'PER', 'AML'),
(35, 'Universities', 5, 'UNI', 'EDU'),
(36, 'Public', 5, 'PSL', 'EDU'),
(37, 'Private', 5, 'PRS', 'EDU'),
(38, 'Vocational', 5, 'VOC', 'EDU'),
(39, 'Libraries', 5, 'LIB', 'EDU'),
(40, 'Science', 5, 'SCI', 'EDU'),
(41, 'Rights', 6, 'RTS', 'COM'),
(42, 'Policy', 6, 'PCY', 'COM'),
(43, 'Safety', 6, 'PST', 'SAF'),
(44, 'Disaster', 6, 'DRF', 'COM'),
(45, 'Social', 6, 'SOC', 'COM'),
(47, 'Housing', 6, 'HDT', 'COM'),
(48, 'Philanthropy', 6, 'PHI', 'COM'),
(49, 'Voluntarism', 6, 'VOL', 'COM'),
(50, 'Physical', 7, 'PHY', 'HTH'),
(51, 'Patients', 7, 'PAT', 'HTH'),
(52, 'Prevention', 7, 'PRE', 'HTH'),
(53, 'Research', 7, 'RES', 'HTH'),
(54, 'Suicide', 7, 'SPR', 'HTH'),
(55, 'Rape', 7, 'RAS', 'HTH'),
(56, 'Addiction', 7, 'ADD', 'HTH'),
(57, 'Abuse', 7, 'ABU', 'HTH'),
(58, 'Mental', 7, 'MEH', 'HTH'),
(59, 'Crisis', 7, 'CSS', 'HTH'),
(60, 'Clinics', 7, 'FRC', 'HTH'),
(61, 'Children', 8, 'CHD', 'HUS'),
(62, 'Families', 8, 'FAM', 'HUS'),
(63, 'Men', 8, 'MEN', 'HUS'),
(64, 'Woman', 8, 'WMN', 'HUS'),
(65, 'Parents', 8, 'PAR', 'HUS'),
(66, 'Seniors', 8, 'SEN', 'HUS'),
(67, 'Veterans', 8, 'VET', 'HUS'),
(68, 'Soldiers', 8, 'SOL', 'HUS'),
(69, 'Food', 8, 'FOO', 'HUS'),
(70, 'Clothing', 8, 'CLO', 'HUS'),
(71, 'Homeless', 8, 'HOM', 'HUS'),
(72, 'Firefighters', 8, 'FIR', 'HUS'),
(73, 'Police', 8, 'PLC', 'HUS'),
(74, 'Nutrition', 8, 'NUT', 'HUS'),
(75, 'Legal', 8, 'LEG', 'HUS'),
(76, 'Employment', 8, 'EMP', 'HUS'),
(78, 'Financial', 8, 'FIN', 'HUS'),
(79, 'Transportation', 8, 'TRA', 'HUS'),
(80, 'Recreation', 8, 'REC', 'HUS'),
(81, 'Sports', 8, 'SPT', 'HUS'),
(82, 'Technology', 8, 'TEC', 'HUS'),
(83, 'Development', 9, 'DEV', 'ITL'),
(84, 'Peace', 9, 'PEA', 'ITL'),
(85, 'Relief', 9, 'RSS', 'REL'),
(87, 'Humanity', 9, 'HTY', 'ITL'),
(88, 'Immigration', 9, 'IMM', 'ITL'),
(89, 'Citizenship', 9, 'CZN', 'ITL'),
(90, 'Understanding', 9, 'UND', 'INL'),
(91, 'Trafficking', 9, 'HTS', 'ITL'),
(92, 'Slavery', 9, 'SLA', 'ITL'),
(100, 'Minorities', 7, 'MIN', 'PER');

-- --------------------------------------------------------

--
-- Table structure for table `need`
--

CREATE TABLE IF NOT EXISTS `need` (
  `needid` bigint(20) NOT NULL AUTO_INCREMENT,
  `needname` varchar(65) NOT NULL,
  `needdescription` blob NOT NULL,
  `datetime` date NOT NULL,
  `maincat` char(25) NOT NULL,
  `subcat` varchar(50) NOT NULL,
  `local` varchar(25) NOT NULL,
  `photo1` varchar(60) NOT NULL,
  `photo2` varchar(60) NOT NULL,
  `photo3` varchar(60) NOT NULL,
  `photo4` varchar(60) NOT NULL,
  `prohibited` int(1) NOT NULL,
  `mislabeled` int(1) NOT NULL,
  `spam` int(1) NOT NULL,
  PRIMARY KEY (`needid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
