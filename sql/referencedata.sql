-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 07:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savingscalc`
--

-- --------------------------------------------------------

--
-- Table structure for table `referencedata`
--

CREATE TABLE `referencedata` (
  `id` int(11) NOT NULL,
  `customer` varchar(128) NOT NULL,
  `Application` varchar(128) NOT NULL,
  `maxavailable` int(11) NOT NULL,
  `maxinuse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referencedata`
--

INSERT INTO `referencedata` (`id`, `customer`, `Application`, `maxavailable`, `maxinuse`) VALUES
(1, 'Altran', 'Dassault Systems', 38, 30),
(2, 'Altran', 'Autodesk', 4, 3),
(3, 'Altran', 'Ansys', 16, 1),
(4, 'Altran', 'MathWorks', 6, 3),
(5, 'Burns & McDonnell', 'ArcGIS', 60, 40),
(6, 'Burns & McDonnell', 'ArcGIS', 35, 20),
(7, 'Burns & McDonnell', 'mdaxbbwc', 29, 25),
(8, 'Burns & McDonnell', 'MathCad', 40, 40),
(9, 'Chiyoda', 'Autodesk', 60, 42),
(10, 'Chiyoda', 'cec39;adsflex', 27, 16),
(11, 'Chiyoda', 'cphcommon0554;adsflex', 60, 42),
(12, 'Chiyoda', 'pip-cpsb12;adsflex', 10, 10),
(13, 'CREE', 'solidworks', 55, 50),
(14, 'CREE', 'swofficepro', 13, 9),
(15, 'CREE', 'swofficepremium', 23, 9),
(16, 'CREE', 'cae_cosmosfloworkspe', 4, 3),
(17, 'CREE', 'Autodesk', 22, 22),
(18, 'Daikin', 'Ansys', 4096, 2224),
(19, 'DEVON', 'Geophysics_2d_3d', 50, 43),
(20, 'DEVON', 'Goelogy', 35, 35),
(21, 'DEVON', 'synPAK', 20, 6),
(22, 'DEVON', 'VuPAK', 35, 3),
(23, 'DEVON', '24', 6, 1),
(24, 'DEVON', 'Rock_Solid_Attrubutes', 10, 2),
(25, 'DEVON', 'KindomConnect', 5, 1),
(26, 'DowChemical', '3D', 7, 6),
(27, 'DowChemical', '4d', 1, 1),
(28, 'DowChemical', 'cw3', 10, 8),
(29, 'DowChemical', 'fpp', 50, 1),
(30, 'DowChemical', 'inm', 18, 0),
(31, 'DowChemical', 'ins', 121, 88),
(32, 'DowChemical', 'mat', 13, 13),
(33, 'DowChemical', 'pmd', 2, 0),
(34, 'DowChemical', 'rd', 23, 23),
(35, 'DowChemical', 's3d', 296, 294),
(36, 'DowChemical', 'sei', 45, 3),
(37, 'DowChemical', 'dsel', 11, 3),
(38, 'DowChemical', 'spp', 40, 40),
(39, 'DowChemical', 'spr', 46, 41),
(40, 'DowChemical', 'srm', 22, 8),
(41, 'DowChemical', 'srp', 2, 2),
(42, 'DowChemical', 'ssk', 16, 7),
(43, 'DowChemical', 'anshpc', 4608, 800),
(44, 'DowChemical', 'acfd_3', 20, 10),
(45, 'DowChemical', 'acfd_preppost', 8, 8),
(46, 'DowChemical', 'agppi', 11, 8),
(47, 'DowChemical', 'acfd_fluent_solver', 16, 6),
(48, 'DowChemical', 'acfd_fluent', 5, 5),
(49, 'DowChemical', 'MATLAB', 22, 22),
(50, 'Flowserve', 'Ansys', 64, 11),
(51, 'Hess', 'petrel_Fgeoscience', 150, 53),
(52, 'Hess', 'petrel_Fgeoscience', 150, 45),
(53, 'Hess', 'petrel_Fgeoscience', 150, 33),
(54, 'Hess', 'petrel_Fgeoscience', 150, 10),
(55, 'Hess', 'petrel_Fgeoscience', 171, 67),
(56, 'Hess', 'petrel_Fgeoscience', 171, 48),
(57, 'Hess', 'petrel_Fgeoscience', 171, 51),
(58, 'Hess', 'petrel_Fgeoscience', 171, 64),
(59, 'Hess', 'petrel_FFaultAnal', 52, 25),
(60, 'Hess', 'petrel_FFaultAnal', 52, 20),
(61, 'Hess', 'petrel_FFaultAnal', 63, 29),
(62, 'Hess', 'petrel_FFaultAnal', 63, 32),
(63, 'KMG', 'petrel_Combined', 14, 11),
(64, 'LaredoPetroleum', 'WellView', 50, 23),
(65, 'LaredoPetroleum', 'Petra', 10, 10),
(66, 'LaredoPetroleum', 'Viewer', 12, 8),
(67, 'LaredoPetroleum', '2d/3d/pak', 18, 6),
(68, 'LaredoPetroleum', 'essential', 5, 5),
(69, 'LaredoPetroleum', 'GGX_Ares', 10, 5),
(70, 'LaredoPetroleum', 'EarthPak', 6, 4),
(71, 'LaredoPetroleum', 'TGX', 15, 4),
(72, 'LaredoPetroleum', 'engineering', 5, 4),
(73, 'LaredoPetroleum', 'GGX_Ares_economics', 10, 4),
(74, 'Legrandt', 'Autocad Inventor', 9, 6),
(75, 'Legrandt', 'Autocad Mechanical', 19, 8),
(76, 'Legrandt', 'Autocad Mechanical', 7, 4),
(77, 'Legrandt', 'Autocad Mechanical', 32, 13),
(78, 'Legrandt', 'Autocad Mechanical', 26, 6),
(79, 'Legrandt', 'Autodesk Product Design', 8, 5),
(80, 'Legrandt', 'Inventor Series', 9, 6),
(81, 'Mercedez Benz', 'AutoCad', 42, 12),
(82, 'Mercedez Benz', 'AutoDesk building Suite', 49, 12),
(83, 'Mercedez Benz', 'AutoDesk Navis Work', 6, 3),
(84, 'Mercedez Benz', 'AutoDesk Revit', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `referencedata`
--
ALTER TABLE `referencedata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `referencedata`
--
ALTER TABLE `referencedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
