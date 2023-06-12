-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 12:32 PM
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
-- Database: `logic_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `problem_five`
--

CREATE TABLE `problem_five` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_five`
--

INSERT INTO `problem_five` (`id`, `country`, `fullname`, `city`) VALUES
(1, 'China', 'Collin Battson', 'Wupu'),
(2, 'China', 'Collin Battson', 'Wupu'),
(3, 'Poland', 'Muriel Keller', 'Gąsocin'),
(4, 'Indonesia', 'Nealy Gooderick', 'Lakbok'),
(5, 'China', 'Collin Battson', 'Wupu'),
(6, 'Vietnam', 'Yankee Mullineux', 'Sóc Sơn'),
(7, 'Indonesia', 'Nealy Gooderick', 'Lakbok'),
(8, 'China', 'Collin Battson', 'Wupu'),
(9, 'Colombia', 'Jacquelynn Yea', 'Ipiales'),
(10, 'Indonesia', 'Nealy Gooderick', 'Lakbok');

-- --------------------------------------------------------

--
-- Table structure for table `problem_four`
--

CREATE TABLE `problem_four` (
  `id` int(11) NOT NULL,
  `trn_date` date DEFAULT NULL,
  `cre_month` int(11) DEFAULT NULL,
  `cre_year` int(11) DEFAULT NULL,
  `date_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_four`
--

INSERT INTO `problem_four` (`id`, `trn_date`, `cre_month`, `cre_year`, `date_type`) VALUES
(1, NULL, 1, 2020, 'M'),
(2, NULL, 2, 2020, 'M'),
(3, NULL, 3, 2020, 'F'),
(4, NULL, 4, 2020, 'M'),
(5, NULL, 5, 2020, 'M'),
(6, NULL, 6, 2020, 'F'),
(7, NULL, 7, 2020, 'M'),
(8, NULL, 8, 2020, 'F'),
(9, NULL, 9, 2020, 'M'),
(10, NULL, 10, 2020, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `problem_one`
--

CREATE TABLE `problem_one` (
  `id` int(11) NOT NULL,
  `doc_no` int(11) NOT NULL,
  `trn_dte` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `trn_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_one`
--

INSERT INTO `problem_one` (`id`, `doc_no`, `trn_dte`, `customer_name`, `trn_total`) VALUES
(1, 1234, 44605, 'Karita Wannan', 2694),
(2, 1235, 47476, 'Kipper Osgar', 2634),
(3, 1236, 43102, 'Karita Wannan', 958),
(4, 1237, 41685, 'Oralla McClancy', 1381),
(5, 1238, 47455, 'Robinetta Shambroke', 2296),
(6, 1239, 48139, 'Odie Whatham', 2194),
(7, 1240, 41473, 'Derward Trenaman', 2415),
(8, 1241, 40936, 'Anton MacLise', 889),
(9, 1242, 48792, 'Jim Aberhart', 1164),
(10, 1243, 40337, 'Jim Aberhart', 924),
(11, 1244, 43297, 'Jim Aberhart', 1346),
(12, 1245, 46415, 'Jim Aberhart', 1536),
(13, 1246, 46682, 'Bryce Fogarty', 996),
(14, 1247, 49649, 'Karita Wannan', 1782),
(15, 1248, 43971, 'Bryce Fogarty', 2167),
(16, 1249, 42859, 'Bryce Fogarty', 1488),
(17, 1250, 49273, 'Karita Wannan', 911),
(18, 1251, 48040, 'Dollie Kehoe', 1811),
(19, 1252, 43427, 'Dollie Kehoe', 1315),
(20, 1253, 48510, 'Dollie Kehoe', 2429),
(21, 1254, 41526, 'Karita Wannan', 2945),
(22, 1255, 47494, 'Levin Belfitt', 1677),
(23, 1256, 42348, 'Levin Belfitt', 1952),
(24, 1257, 40112, 'Levin Belfitt', 1241),
(25, 1258, 46642, 'Levin Belfitt', 2583),
(26, 1266, 42242, 'Ellwood Fromont', 2821),
(27, 1277, 48305, 'Noll Dickie', 2739),
(28, 1288, 46778, 'Tailor Meatyard', 2186),
(29, 1299, 40282, 'Elvera Mack', 2466),
(30, 1222, 42172, 'Jermaine Emer', 1247),
(31, 3212, 34623, 'Zed Zoe Zac', 2500),
(32, 9952, 80613, 'Zed Zoe Zac', 1350),
(33, 3212, 80613, 'Robinetta Shambroke', 1590),
(34, 9952, 80613, 'Anton MacLise', 3000),
(35, 9412, 36731, 'Zed Zoe Zac', 1125);

-- --------------------------------------------------------

--
-- Table structure for table `problem_three_cusfile`
--

CREATE TABLE `problem_three_cusfile` (
  `id` int(11) NOT NULL,
  `customer_code` int(11) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_three_cusfile`
--

INSERT INTO `problem_three_cusfile` (`id`, `customer_code`, `fullname`) VALUES
(1, 387, 'Randell Luff'),
(2, 560, 'Melinde Cadell'),
(3, 579, 'Price Pinck'),
(4, 181, 'Beatriz O\'Currigan'),
(5, 312, 'Petronilla Braunle');

-- --------------------------------------------------------

--
-- Table structure for table `problem_three_salesfile`
--

CREATE TABLE `problem_three_salesfile` (
  `recid` int(11) NOT NULL,
  `document_no` int(11) DEFAULT NULL,
  `trn_dte` int(11) DEFAULT NULL,
  `customer_code` int(11) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_three_salesfile`
--

INSERT INTO `problem_three_salesfile` (`recid`, `document_no`, `trn_dte`, `customer_code`, `fullname`) VALUES
(1, 83026, 50336, 387, NULL),
(2, 90976, 49122, 560, NULL),
(3, 85391, 61145, 579, NULL),
(4, 82246, 40485, 181, NULL),
(5, 89824, 55554, 312, NULL),
(6, 84089, 43461, 341, NULL),
(7, 92310, 37663, 216, NULL),
(8, 89397, 34143, 294, NULL),
(9, 83713, 37589, 299, NULL),
(10, 87812, 33170, 164, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `problem_two_cityfile`
--

CREATE TABLE `problem_two_cityfile` (
  `id` int(11) NOT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_two_cityfile`
--

INSERT INTO `problem_two_cityfile` (`id`, `city`) VALUES
(1, 'Nantes'),
(2, 'Skärhamn'),
(3, 'Orissaare'),
(4, 'Afogados'),
(5, 'Lebak');

-- --------------------------------------------------------

--
-- Table structure for table `problem_two_cusfile`
--

CREATE TABLE `problem_two_cusfile` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_two_cusfile`
--

INSERT INTO `problem_two_cusfile` (`id`, `customer_name`, `city`) VALUES
(1, 'Cale Pickerin', 'Nantes'),
(2, 'Coretta Breeds', 'Nantes'),
(3, 'Kathlin Downer', 'Lebak'),
(4, 'Oriana Giraudot', 'Orissaare'),
(5, 'Maurie Seemmonds', 'Skarhamn'),
(6, 'Elnora Looney', 'Orissaare'),
(7, 'Bonny Hallbird', 'Lebak'),
(8, 'Mel Linsay', 'Afogados'),
(9, 'Claiborn Newman', 'Skarhamn'),
(10, 'Carol Bennitt', 'Afogados');

-- --------------------------------------------------------

--
-- Table structure for table `problem_two_salesfile`
--

CREATE TABLE `problem_two_salesfile` (
  `id` int(11) NOT NULL,
  `document_num` int(11) DEFAULT NULL,
  `trn_date` int(11) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `trn_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_two_salesfile`
--

INSERT INTO `problem_two_salesfile` (`id`, `document_num`, `trn_date`, `customer_name`, `trn_total`) VALUES
(1, 36454, 92256, 'Cale Pickerin', 3991),
(2, 45979, 74944, 'Carol Bennitt', 2511),
(3, 40140, 82840, 'Cale Pickerin', 3622),
(4, 49990, 80756, 'Carol Bennitt', 2470),
(5, 35913, 91253, 'Cale Pickerin', 2937),
(6, 34132, 73485, 'Coretta Breeds', 3201),
(7, 52788, 78951, 'Claiborn Newman', 3393),
(8, 59347, 83587, 'Coretta Breeds', 2200),
(9, 46446, 86976, 'Claiborn Newman', 2191),
(10, 43425, 74272, 'Claiborn Newman', 1623),
(11, 34258, 75332, 'Claiborn Newman', 1986),
(12, 59958, 78123, 'Claiborn Newman', 2628),
(13, 32418, 81661, 'Kathlin Downer', 2656),
(14, 44181, 77515, 'Kathlin Downer', 3714),
(15, 55434, 76913, 'Bonny Hallbird', 3041),
(16, 34973, 80254, 'Carol Bennitt', 1544),
(17, 51486, 74122, 'Carol Bennitt', 1864),
(18, 46910, 74586, 'Bonny Hallbird', 3007),
(19, 40462, 82484, 'Bonny Hallbird', 2069),
(20, 36457, 82039, 'Bonny Hallbird', 2383),
(21, 59026, 84296, 'Bonny Hallbird', 3679),
(22, 33143, 88635, 'Bonny Hallbird', 2565),
(23, 41534, 79578, 'Oriana Giraudot', 3953),
(24, 36379, 86635, 'Oriana Giraudot', 1542),
(25, 50072, 77624, 'Oriana Giraudot', 3081),
(26, 59880, 84559, 'Mel Linsay', 3067),
(27, 57380, 93239, 'Mel Linsay', 2778),
(28, 53316, 77854, 'Bonny Hallbird', 2833),
(29, 40941, 82497, 'Oriana Giraudot', 3427),
(30, 51996, 92249, 'Mel Linsay', 3146);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `problem_five`
--
ALTER TABLE `problem_five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_four`
--
ALTER TABLE `problem_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_one`
--
ALTER TABLE `problem_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_three_cusfile`
--
ALTER TABLE `problem_three_cusfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_three_salesfile`
--
ALTER TABLE `problem_three_salesfile`
  ADD PRIMARY KEY (`recid`);

--
-- Indexes for table `problem_two_cityfile`
--
ALTER TABLE `problem_two_cityfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_two_cusfile`
--
ALTER TABLE `problem_two_cusfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_two_salesfile`
--
ALTER TABLE `problem_two_salesfile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problem_five`
--
ALTER TABLE `problem_five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `problem_four`
--
ALTER TABLE `problem_four`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `problem_one`
--
ALTER TABLE `problem_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `problem_three_cusfile`
--
ALTER TABLE `problem_three_cusfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `problem_three_salesfile`
--
ALTER TABLE `problem_three_salesfile`
  MODIFY `recid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `problem_two_cityfile`
--
ALTER TABLE `problem_two_cityfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `problem_two_cusfile`
--
ALTER TABLE `problem_two_cusfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `problem_two_salesfile`
--
ALTER TABLE `problem_two_salesfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
