-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 01:08 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caravansites`
--

-- --------------------------------------------------------

--
-- Table structure for table `siteaddress`
--

CREATE TABLE `siteaddress` (
  `add1` varchar(30) DEFAULT NULL,
  `add2` varchar(30) DEFAULT NULL,
  `add3` varchar(30) DEFAULT NULL,
  `town` varchar(30) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `siteid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteaddress`
--

INSERT INTO `siteaddress` (`add1`, `add2`, `add3`, `town`, `postcode`, `siteid`) VALUES
('Lenacre Road', NULL, 'Whitfield', 'Dover', 'CT16 3HL', 1),
('Landview Cottage', 'Main Road', 'Shatterling', 'Canterbury', 'CT11 1DY', 2),
('Stourmouth Road', 'Preston', NULL, 'Canterbury', 'CT3 1HP', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sitefacilities`
--

CREATE TABLE `sitefacilities` (
  `EHU` varchar(30) DEFAULT NULL,
  `units_accepted` varchar(30) DEFAULT NULL,
  `drinking_water` varchar(30) DEFAULT NULL,
  `waste_water` varchar(30) DEFAULT NULL,
  `access` varchar(30) DEFAULT NULL,
  `pitch_type` varchar(30) DEFAULT NULL,
  `siteid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitefacilities`
--

INSERT INTO `sitefacilities` (`EHU`, `units_accepted`, `drinking_water`, `waste_water`, `access`, `pitch_type`, `siteid`) VALUES
('5 pitches have 16 amp supply', 'Caravans Only', 'One tap', 'Dispose in hedgerows', 'Easy Access from Main road', 'Grass', 2),
('7 pitches with 10 amp', 'Caravans and Motorhomes', 'Each pitch has a tap', 'Drain at pitch', 'Narrow enterence', 'Grass and Hard standing', 1),
('No EHU', 'Caravans and Tents', 'One tap in field', 'Dispose in hedgerows', 'Tight turning', 'Grass', 3);

-- --------------------------------------------------------

--
-- Table structure for table `siteindex`
--

CREATE TABLE `siteindex` (
  `shortname` varchar(10) NOT NULL,
  `longname` varchar(30) NOT NULL,
  `siteid` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteindex`
--

INSERT INTO `siteindex` (`shortname`, `longname`, `siteid`) VALUES
('Lenacre', 'Lenacre Court Farm', 1),
('shatter', 'Shatterlings CL', 2),
('Appletree', 'Appletree Farm ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `siteinfo`
--

CREATE TABLE `siteinfo` (
  `main_info` varchar(1000) NOT NULL,
  `hilight_text` varchar(100) NOT NULL,
  `aside_text` varchar(500) NOT NULL,
  `siteid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteinfo`
--

INSERT INTO `siteinfo` (`main_info`, `hilight_text`, `aside_text`, `siteid`) VALUES
('The Caravan Club CL is a quiet site set on a family run smallholding (seasonal vegetables available to buy) in the midst of hop gardens and orchards. The site itself is a 0.25 acre flat lawned field with electric hook ups and space for awnings. \n\nThe drive is wide and easily accessible. Adults, children and pets are all welcome. \n\nThere is a country pub next door (sorry no food) and garden centre within half a mile, and Wingham Wildlife Park only a mile away. Canterbury offers supermarkets, shopping, restaurants, three park and rides and river trips as well as a magnificent cathedral and lots of historic places. Day trips to France by boat are only 30 minutes or by tunnel 45 minutes away. \n', 'Don\'t forget your passports! ', 'The site is an excellent base for exploring the surrounding area with coarse fishing 3 miles away, pay and play golf 6 miles and top class golf courses within easy reach. There are 4 castles within 30 mins. Public transport with bus stop nearby is available direct to Canterbury, Deal and Sandwich, change at Sandwich for Dover and the Isle of Thanet, ie Margate, Ramsgate etc. all with sandy beaches. The new Turner centre is now open in Margate. ', 2),
('Second Site - Lenacre', 'Some hi-lighted text', 'Some Aside Text', 1),
('Deep in the heart of Kent, the Garden of England, Appletree Farm, (formally White Post) receives some of the best weather in the UK and is perfect for holiday makers, especially in spring when the fruit trees are in full blossom!\nSituated just 300 yards outside of the Village of Preston, which has a general store and a family butchers as well as dog friendly public house and restaurant. Appletree farm is perfect for walking, cycling and exploring the Kent Countryside.', 'Convenient for Dover Ferry.\n', 'Stodmarsh Nature Reserve\nPerfect for bird lovers with regular sightings of Heron, Marsh Harrier, Sparrow Hawk, Hoopoe, Egrets, and a Blue Winged Teal.\nCanterbury - Only 8 miles from the site and home to the oldest cathedral in the UK as well as St Augustines Abbey, the Norman Castle, St Johns and the Westgate Gardens. Shoppers and theatre goers are well catered for and there are numerous tourist attractions including historic river tours and The Canterbury Tales.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sitepictures`
--

CREATE TABLE `sitepictures` (
  `siteid` int(10) NOT NULL,
  `main` enum('T','F') DEFAULT 'F',
  `path` varchar(45) DEFAULT NULL,
  `picture_name` varchar(45) DEFAULT NULL,
  `picture_desc` varchar(45) DEFAULT NULL,
  `picture_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitepictures`
--

INSERT INTO `sitepictures` (`siteid`, `main`, `path`, `picture_name`, `picture_desc`, `picture_id`) VALUES
(2, 'F', '.\\pictures\\', '2_CaravanSitePic3.jpg', 'View 1', 1),
(2, 'T', '.\\pictures\\', '2_CaravanSitePic1.jpg', 'Main', 2),
(2, 'F', '.\\pictures\\', '2_CaravanSitePic4.jpg', 'View 2', 3),
(3, 'T', '.\\pictures\\', '3_Appletree-Farm000.jpg', 'Main', 4),
(3, 'F', '.\\pictures\\', '3_Appletree-Farm003.jpg', 'Barn', 5),
(3, 'F', '.\\pictures\\', '3_Appletree-Farm004.jpg', 'Field', 6),
(3, 'F', '.\\pictures\\', '3_Appletree-Farm005.jpg', 'House', 7),
(2, 'F', '.\\pictures\\', '2_CaravanSitePic2.jpg', 'Pitch', 8),
(1, 'T', '.\\pictures\\', '1_Lenacre1.jpg', 'Main', 9),
(1, 'F', '.\\pictures\\', '1_Lenacre2.jpg', 'Pitch', 10),
(1, 'F', '.\\pictures\\', '1_Lenacre3.jpg', 'Field', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siteaddress`
--
ALTER TABLE `siteaddress`
  ADD PRIMARY KEY (`siteid`),
  ADD UNIQUE KEY `siteid_UNIQUE` (`siteid`);

--
-- Indexes for table `sitefacilities`
--
ALTER TABLE `sitefacilities`
  ADD PRIMARY KEY (`siteid`),
  ADD UNIQUE KEY `siteid_UNIQUE` (`siteid`);

--
-- Indexes for table `siteindex`
--
ALTER TABLE `siteindex`
  ADD PRIMARY KEY (`siteid`);

--
-- Indexes for table `siteinfo`
--
ALTER TABLE `siteinfo`
  ADD UNIQUE KEY `siteid` (`siteid`);

--
-- Indexes for table `sitepictures`
--
ALTER TABLE `sitepictures`
  ADD PRIMARY KEY (`picture_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siteindex`
--
ALTER TABLE `siteindex`
  MODIFY `siteid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sitepictures`
--
ALTER TABLE `sitepictures`
  MODIFY `picture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
