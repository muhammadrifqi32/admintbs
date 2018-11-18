-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 12:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malasngoding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`, `alamat`, `telpon`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Muhammad Rifqi', 'rifqi15ti@mahasiswa.pcr.ac.id', 'JL. Sukajaya Ujung No.4', '+6281364277238');

-- --------------------------------------------------------

--
-- Table structure for table `datatraining`
--

CREATE TABLE `datatraining` (
  `ID` int(255) NOT NULL,
  `namafile` varchar(255) NOT NULL,
  `r` int(255) NOT NULL,
  `g` int(255) NOT NULL,
  `b` int(255) NOT NULL,
  `Label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datatraining`
--

INSERT INTO `datatraining` (`ID`, `namafile`, `r`, `g`, `b`, `Label`) VALUES
(1064, 'layakangkut/IMG_20181009_153002.jpg', 126, 116, 127, 'Layak'),
(1065, 'layakangkut/IMG_20181009_153004.jpg', 171, 48, 66, 'Layak'),
(1066, 'layakangkut/IMG_20181009_153005.jpg', 160, 132, 144, 'Layak'),
(1067, 'layakangkut/IMG_20181009_153010.jpg', 208, 174, 190, 'Layak'),
(1068, 'layakangkut/IMG_20181009_153042.jpg', 160, 132, 144, 'Layak'),
(1069, 'layakangkut/IMG_20181009_153043.jpg', 161, 129, 142, 'Layak'),
(1070, 'layakangkut/IMG_20181009_153044.jpg', 209, 175, 192, 'Layak'),
(1071, 'layakangkut/IMG_20181009_154007.jpg', 138, 67, 71, 'Layak'),
(1072, 'layakangkut/IMG_20181009_154008.jpg', 134, 72, 75, 'Layak'),
(1073, 'layakangkut/IMG_20181009_154046.jpg', 138, 67, 71, 'Layak'),
(1074, 'layakangkut/IMG_20181009_154048.jpg', 196, 157, 178, 'Layak'),
(1075, 'layakangkut/IMG_20181009_154050.jpg', 175, 124, 133, 'Layak'),
(1076, 'layakangkut/IMG_20181009_155052.jpg', 121, 110, 108, 'Layak'),
(1077, 'layakangkut/IMG_20181009_155054.jpg', 179, 52, 69, 'Layak'),
(1078, 'layakangkut/IMG_20181009_155055.jpg', 174, 52, 67, 'Layak'),
(1079, 'layakangkut/IMG_20181009_155057.jpg', 236, 164, 116, 'Layak'),
(1080, 'layakangkut/IMG_20181009_155059.jpg', 202, 99, 116, 'Layak'),
(1081, 'layakangkut/IMG_20181009_155060.jpg', 63, 21, 22, 'Layak'),
(1082, 'layakangkut/IMG_20181009_155062.jpg', 178, 76, 53, 'Layak'),
(1083, 'layakangkut/IMG_20181009_160064.jpg', 138, 29, 22, 'Layak'),
(1084, 'layakangkut/IMG_20181009_160065.jpg', 140, 33, 23, 'Layak'),
(1085, 'layakangkut/IMG_20181009_160067.jpg', 200, 58, 57, 'Layak'),
(1086, 'layakangkut/IMG_20181009_160069.jpg', 170, 82, 58, 'Layak'),
(1087, 'layakangkut/IMG_20181009_160071.jpg', 119, 40, 43, 'Layak'),
(1088, 'layakangkut/IMG_20181009_160073.jpg', 225, 151, 124, 'Layak'),
(1089, 'layakangkut/IMG_20181009_161075.jpg', 255, 185, 97, 'Layak'),
(1090, 'layakangkut/IMG_20181009_161076.jpg', 153, 141, 143, 'Layak'),
(1091, 'layakangkut/IMG_20181009_161078.jpg', 209, 92, 74, 'Layak'),
(1092, 'layakangkut/IMG_20181009_161079.jpg', 209, 89, 73, 'Layak'),
(1093, 'layakangkut/IMG_20181009_161081.jpg', 255, 174, 144, 'Layak'),
(1094, 'layakangkut/IMG_20181009_161082.jpg', 177, 63, 39, 'Layak'),
(1095, 'layakangkut/IMG_20181009_162036.jpg', 95, 26, 31, 'Layak'),
(1096, 'layakangkut/IMG_20181009_162038.jpg', 114, 52, 55, 'Layak'),
(1097, 'layakangkut/IMG_20181009_162039.jpg', 117, 51, 53, 'Layak'),
(1098, 'layakangkut/IMG_20181009_162041.jpg', 200, 124, 46, 'Layak'),
(1099, 'layakangkut/IMG_20181009_164033.jpg', 250, 81, 112, 'Layak'),
(1100, 'layakangkut/IMG_20181009_170014.jpg', 110, 53, 42, 'Layak'),
(1101, 'layakangkut/IMG_20181009_170015.jpg', 132, 138, 154, 'Layak'),
(1102, 'layakangkut/IMG_20181009_170017.jpg', 128, 19, 25, 'Layak'),
(1103, 'layakangkut/IMG_20181009_170018.jpg', 130, 24, 28, 'Layak'),
(1104, 'layakangkut/IMG_20181009_170020.jpg', 95, 23, 34, 'Layak'),
(1105, 'layakangkut/IMG_20181009_170021.jpg', 222, 144, 95, 'Layak'),
(1106, 'layakangkut/IMG_20181009_170022.jpg', 221, 145, 85, 'Layak'),
(1107, 'layakangkut/IMG_20181009_170024.jpg', 218, 225, 241, 'Layak'),
(1108, 'layakangkut/IMG_20181009_170026.jpg', 167, 103, 68, 'Layak'),
(1109, 'layakangkut/IMG_20181009_170027.jpg', 126, 60, 70, 'Layak'),
(1110, 'layakangkut/IMG_20181009_170029.jpg', 143, 117, 126, 'Layak'),
(1111, 'layakangkut/IMG_20181009_170030.jpg', 128, 103, 109, 'Layak'),
(1112, 'layakangkut/IMG_20181009_170031.jpg', 160, 69, 86, 'Layak'),
(1113, 'layakangkut/IMG_20181009_171012.jpg', 170, 87, 95, 'Layak'),
(1114, 'tidaklayakangkut/IMG_20181009_163001.jpg', 122, 41, 48, 'Tidak Layak'),
(1115, 'tidaklayakangkut/IMG_20181009_163002.jpg', 119, 34, 39, 'Tidak Layak'),
(1116, 'tidaklayakangkut/IMG_20181009_163003.jpg', 79, 45, 46, 'Tidak Layak'),
(1117, 'tidaklayakangkut/IMG_20181009_163004.jpg', 74, 40, 38, 'Tidak Layak'),
(1118, 'tidaklayakangkut/IMG_20181009_165005.jpg', 64, 55, 56, 'Tidak Layak'),
(1119, 'tidaklayakangkut/IMG_20181009_165006.jpg', 61, 50, 54, 'Tidak Layak'),
(1120, 'tidaklayakangkut/IMG_20181009_165007.jpg', 39, 17, 20, 'Tidak Layak'),
(1121, 'tidaklayakangkut/IMG_20181009_165008.jpg', 41, 21, 23, 'Tidak Layak'),
(1122, 'tidaklayakangkut/IMG_20181009_174035.jpg', 26, 16, 15, 'Tidak Layak'),
(1123, 'tidaklayakangkut/IMG_20181009_174036.jpg', 28, 18, 16, 'Tidak Layak'),
(1124, 'tidaklayakangkut/IMG_20181009_174037.jpg', 13, 8, 5, 'Tidak Layak'),
(1125, 'tidaklayakangkut/IMG_20181009_174038.jpg', 16, 10, 10, 'Tidak Layak'),
(1126, 'tidaklayakangkut/IMG_20181009_174039.jpg', 28, 18, 17, 'Tidak Layak'),
(1127, 'tidaklayakangkut/IMG_20181009_174040.jpg', 24, 14, 13, 'Tidak Layak'),
(1128, 'tidaklayakangkut/IMG_20181009_174041.jpg', 127, 88, 93, 'Tidak Layak'),
(1129, 'tidaklayakangkut/IMG_20181009_174042.jpg', 127, 84, 91, 'Tidak Layak'),
(1130, 'tidaklayakangkut/IMG_20181009_174043.jpg', 52, 31, 30, 'Tidak Layak'),
(1131, 'tidaklayakangkut/IMG_20181009_174044.jpg', 56, 32, 32, 'Tidak Layak'),
(1132, 'tidaklayakangkut/IMG_20181009_174045.jpg', 42, 33, 38, 'Tidak Layak'),
(1133, 'tidaklayakangkut/IMG_20181009_174046.jpg', 38, 32, 34, 'Tidak Layak'),
(1134, 'tidaklayakangkut/IMG_20181009_174047.jpg', 54, 34, 35, 'Tidak Layak'),
(1135, 'tidaklayakangkut/IMG_20181009_174048.jpg', 54, 34, 35, 'Tidak Layak'),
(1136, 'tidaklayakangkut/IMG_20181009_174049.jpg', 24, 13, 9, 'Tidak Layak'),
(1137, 'tidaklayakangkut/IMG_20181009_174050.jpg', 24, 13, 9, 'Tidak Layak'),
(1138, 'tidaklayakangkut/IMG_20181009_175009.jpg', 46, 37, 38, 'Tidak Layak'),
(1139, 'tidaklayakangkut/IMG_20181009_175010.jpg', 42, 36, 36, 'Tidak Layak'),
(1140, 'tidaklayakangkut/IMG_20181009_175011.jpg', 32, 25, 32, 'Tidak Layak'),
(1141, 'tidaklayakangkut/IMG_20181009_175012.jpg', 32, 22, 31, 'Tidak Layak'),
(1142, 'tidaklayakangkut/IMG_20181009_175013.jpg', 21, 16, 20, 'Tidak Layak'),
(1143, 'tidaklayakangkut/IMG_20181009_175014.jpg', 23, 19, 20, 'Tidak Layak'),
(1144, 'tidaklayakangkut/IMG_20181009_175015.jpg', 25, 19, 19, 'Tidak Layak'),
(1145, 'tidaklayakangkut/IMG_20181009_175016.jpg', 25, 20, 17, 'Tidak Layak'),
(1146, 'tidaklayakangkut/IMG_20181009_175017.jpg', 35, 25, 24, 'Tidak Layak'),
(1147, 'tidaklayakangkut/IMG_20181009_175018.jpg', 33, 23, 22, 'Tidak Layak'),
(1148, 'tidaklayakangkut/IMG_20181009_175019.jpg', 21, 13, 11, 'Tidak Layak'),
(1149, 'tidaklayakangkut/IMG_20181009_175020.jpg', 20, 10, 8, 'Tidak Layak'),
(1150, 'tidaklayakangkut/IMG_20181009_175021.jpg', 38, 34, 33, 'Tidak Layak'),
(1151, 'tidaklayakangkut/IMG_20181009_175022.jpg', 37, 33, 34, 'Tidak Layak'),
(1152, 'tidaklayakangkut/IMG_20181009_175023.jpg', 25, 20, 24, 'Tidak Layak'),
(1153, 'tidaklayakangkut/IMG_20181009_175024.jpg', 23, 18, 22, 'Tidak Layak'),
(1154, 'tidaklayakangkut/IMG_20181009_175025.jpg', 28, 23, 29, 'Tidak Layak'),
(1155, 'tidaklayakangkut/IMG_20181009_175026.jpg', 28, 26, 31, 'Tidak Layak'),
(1156, 'tidaklayakangkut/IMG_20181009_175027.jpg', 38, 29, 32, 'Tidak Layak'),
(1157, 'tidaklayakangkut/IMG_20181009_175028.jpg', 33, 24, 27, 'Tidak Layak'),
(1158, 'tidaklayakangkut/IMG_20181009_175029.jpg', 34, 19, 22, 'Tidak Layak'),
(1159, 'tidaklayakangkut/IMG_20181009_175030.jpg', 33, 19, 19, 'Tidak Layak'),
(1160, 'tidaklayakangkut/IMG_20181009_175031.jpg', 28, 22, 26, 'Tidak Layak'),
(1161, 'tidaklayakangkut/IMG_20181009_175032.jpg', 30, 21, 26, 'Tidak Layak'),
(1162, 'tidaklayakangkut/IMG_20181009_175033.jpg', 135, 134, 148, 'Tidak Layak'),
(1163, 'tidaklayakangkut/IMG_20181009_175034.jpg', 119, 119, 131, 'Tidak Layak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datatraining`
--
ALTER TABLE `datatraining`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datatraining`
--
ALTER TABLE `datatraining`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
