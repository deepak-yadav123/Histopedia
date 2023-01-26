-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 09:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `historypedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `_district`
--

CREATE TABLE `_district` (
  `_id` int(50) NOT NULL,
  `_districtname` varchar(50) NOT NULL,
  `_stateid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_district`
--

INSERT INTO `_district` (`_id`, `_districtname`, `_stateid`) VALUES
(2, 'Chatrapati Shambhaji Nagar', 1),
(3, 'Pune', 1),
(6, 'Mysore', 2);

-- --------------------------------------------------------

--
-- Table structure for table `_heritage`
--

CREATE TABLE `_heritage` (
  `_id` int(50) NOT NULL,
  `_historytype` varchar(50) NOT NULL,
  `_heritagename` varchar(100) NOT NULL,
  `_heritagestate` varchar(50) NOT NULL,
  `_heritagedistrict` varchar(50) NOT NULL,
  `_heritageaddress` varchar(100) NOT NULL,
  `_heritagelatitude` varchar(20) NOT NULL,
  `_heritagelongitude` varchar(20) NOT NULL,
  `_heritageolocationfeature` varchar(200) NOT NULL,
  `_heritagebuiltin` varchar(20) NOT NULL,
  `_heritagebuiltby` varchar(20) NOT NULL,
  `_heritageruledby` varchar(20) NOT NULL,
  `_heritagepurpose` varchar(500) NOT NULL,
  `_heritagetechnology` varchar(500) NOT NULL,
  `_heritagehistory` varchar(500) NOT NULL,
  `_heritagefeatures` varchar(200) NOT NULL,
  `_heritagespeciality` varchar(300) NOT NULL,
  `_refrences` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_heritage`
--

INSERT INTO `_heritage` (`_id`, `_historytype`, `_heritagename`, `_heritagestate`, `_heritagedistrict`, `_heritageaddress`, `_heritagelatitude`, `_heritagelongitude`, `_heritageolocationfeature`, `_heritagebuiltin`, `_heritagebuiltby`, `_heritageruledby`, `_heritagepurpose`, `_heritagetechnology`, `_heritagehistory`, `_heritagefeatures`, `_heritagespeciality`, `_refrences`) VALUES
(1, 'Type', 'ElloraCaves', 'Select', 'Select', 'Verul , Shambhaji Nagar , Maharashtra .', '20.0258', '75.1780', '<p>The Ellora caves are situated in state of Maharashtra about 29 kilometres (18 miles) northwest of the city of&nbsp;</p>', '600–1000 CE', 'Rashtrkuta king, Kri', 'Rashtrkuta king, Kri', '<p>These caves&nbsp;<strong>mark the development of the Vajrayana form of Buddhism and represent a host of Buddhist deities</strong>.</p>\r\n<p>The invaluable ensemble of 34 caves at Ellora in the Charanandri hills of western India&rsquo;s Maharashtra State showcases a spirit of co-existence and religious tolerance through the outstanding architectural activities carried out by the followers of three prominent religions: Buddhism, Brahmanism, and Jainism. The rock-cut activity was carried out in t', '<p class=\"rtejustify\">When you look at Ellora in the context of Indian cave temple architecture, it is very significant since it is a kind of culmination&mdash;the zenith of cave architecture in India. As we know, cave architecture in India began with the Lomas Rishi cave in Bihar. Then you have all the activity in western India. It started from Bhaja, Kondavite and Karla. &nbsp;Caves were continuously being carved from say 100 BC to almost the third century AD, especially during the Hinayana ph', '<p>Ellora, also called Verul or Elura, is the short form of the ancient name&nbsp;<strong>Elloorpuram</strong>.<sup id=\"cite_ref-10\" class=\"reference\"></sup> The older form of the name has been found in ancient references such as the Baroda inscription of 812 CE which mentions \"the greatness of this edifice\" and that \"this great edifice was built on a hill by Krishnaraja at Elapura, the edifice in the inscription being the Kailasa temple.<sup id=\"cite_ref-asiintro_3-2\" class=\"reference\"></sup>&a', '<p>These 34 monasteries and temples, extending over more than 2 km, were&nbsp;<strong>dug side by side in the wall of a high basalt cliff</strong>, not far from Aurangabad, in Maharashtra. Ellora, wit', '<p>These 34 monasteries and temples, extending over more than 2 km, were&nbsp;<strong>dug side by side in the wall of a high basalt cliff</strong>, not far from Aurangabad, in Maharashtra. Ellora, with its uninterrupted sequence of monuments dating from A.D. 600 to 1000, brings the civilization of a', '                                            \r\n\r\nWikipedia , Google     ,youtube                       \r\n                                            '),
(2, '3', 'name', '2', '3', 'address', '20.0258', '75.1780', '<p>Locatoion Feature</p>', '600–1000 CE', 'Rashtrkuta king, Kri', 'Rashtrkuta king, Kri', '<p>Purpose</p>', '<p>Technology Used</p>', '<p>History</p>', '<p>Heritage Feature</p>', '<p>Speciality</p>', '<p>Refrences</p>');

-- --------------------------------------------------------

--
-- Table structure for table `_heritagegallery`
--

CREATE TABLE `_heritagegallery` (
  `_id` int(50) NOT NULL,
  `_heritageimg` varchar(100) NOT NULL,
  `_currentimgid` int(50) NOT NULL,
  `_heritagename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_heritagegallery`
--

INSERT INTO `_heritagegallery` (`_id`, `_heritageimg`, `_currentimgid`, `_heritagename`) VALUES
(1, 'img1.jpg', 0, 'ElloraCaves'),
(2, 'img2.jpg', 1, 'ElloraCaves'),
(3, 'img3.jpg', 2, 'ElloraCaves'),
(4, '530243.jpg', 0, 'name'),
(5, '3349617.jpg', 1, 'name'),
(6, '3349644.jpg', 2, 'name'),
(7, '4648196.jpg', 3, 'name');

-- --------------------------------------------------------

--
-- Table structure for table `_heritagetype`
--

CREATE TABLE `_heritagetype` (
  `_id` int(50) NOT NULL,
  `_heritagetypename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_heritagetype`
--

INSERT INTO `_heritagetype` (`_id`, `_heritagetypename`) VALUES
(1, 'Forts'),
(2, 'Monuments'),
(3, 'Artecrafts');

-- --------------------------------------------------------

--
-- Table structure for table `_state`
--

CREATE TABLE `_state` (
  `_id` int(50) NOT NULL,
  `_statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_state`
--

INSERT INTO `_state` (`_id`, `_statename`) VALUES
(1, 'Maharashtra'),
(2, 'Karnataka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_district`
--
ALTER TABLE `_district`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_heritage`
--
ALTER TABLE `_heritage`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_heritagegallery`
--
ALTER TABLE `_heritagegallery`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_heritagetype`
--
ALTER TABLE `_heritagetype`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_state`
--
ALTER TABLE `_state`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_district`
--
ALTER TABLE `_district`
  MODIFY `_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `_heritage`
--
ALTER TABLE `_heritage`
  MODIFY `_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_heritagegallery`
--
ALTER TABLE `_heritagegallery`
  MODIFY `_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `_heritagetype`
--
ALTER TABLE `_heritagetype`
  MODIFY `_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_state`
--
ALTER TABLE `_state`
  MODIFY `_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
