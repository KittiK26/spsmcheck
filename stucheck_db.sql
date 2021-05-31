-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2021 at 02:13 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stucheck_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `stucheck`
--

CREATE TABLE `stucheck` (
  `stuid` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuid`, `name`, `surname`, `grade`, `class`) VALUES
(20487, 'ลานนา', 'พจนามธุรส', '4', 'SGS'),
(20507, 'อรรณนิกาแก้ว', 'ภู่ทอง', '4', 'SGS'),
(20523, 'ภิญญาพัชญ์', 'เรืองพีระกุล', '4', 'SGS'),
(20531, 'ปวรุตม์', 'ปิยะชน', '4', 'SGS'),
(20546, 'สาริศา', 'ห้วยอำพันธ์', '4', 'SGS'),
(20556, 'กนกกร', 'ตระกูลวารี', '4', 'SGS'),
(20582, 'ดนิตา', 'ชินเจริญกิจ', '4', 'SGS'),
(20597, 'ปริยากร', 'วารีสดใส', '4', 'SGS'),
(20617, 'สุฐิตา', 'ลิมะเสถียร', '4', 'SGS'),
(20627, 'สุชานรี', 'กาญจนโอภาส', '4', 'SGS'),
(20647, 'ปัญญพร', 'หาญณรงค์กุล', '4', 'SGS'),
(20649, 'พิชญรินทร์', 'ไตรพรกนกรัตน์', '4', 'SGS'),
(20712, 'อชิระ', 'โรจน์วิศิษฐ์', '4', 'SGS'),
(20724, 'เกษลดา', 'ลือนาม', '4', 'SGS'),
(20727, 'ญาณิศา', 'กาบตุ้ม', '4', 'SGS'),
(20758, 'สุทธินีย์', 'กลิ่นภู่', '4', 'SGS'),
(20764, 'วริสรา', 'จิตถาวร', '4', 'SGS'),
(20774, 'ฉัตริน', 'ปิ่นโอฬารรัตนกุล', '4', 'SGS'),
(21093, 'ปริยากร', 'กิตินันทวัฒน์', '4', 'SGS'),
(22378, 'ศดานันท์', 'รุ่งกระจ่าง', '4', 'SGS'),
(24043, 'พฤฒภณ', 'อนุกูล', '4', 'SGS'),
(24044, 'พิชญาวี', 'นิลกิจ', '4', 'SGS'),
(24045, 'ธัญชนก', 'สักกามาตย์', '4', 'SGS'),
(24046, 'อาจรีย์', 'บำรุงเมือง', '4', 'SGS'),
(24047, 'ณัฐวรา', 'ตรีสรณาคม', '4', 'SGS'),
(24048, 'ฐิติรัตน์', 'ศรีสุวรรณ', '4', 'SGS'),
(24049, 'อรปรียา', 'เข็มทอง', '4', 'SGS'),
(24050, 'วริญฑรา', 'พัฒนศิริมงคล', '4', 'SGS'),
(24051, 'ปภาวรินทร์', 'ปี่แก้ว', '4', 'SGS'),
(24052, 'มณฑิตา', 'ศักดารัตน์', '4', 'SGS'),
(24053, 'พิชญาภัค', 'นฤทุกข์', '4', 'SGS'),
(24054, 'ภัณฑิรา', 'นิพันธ์ไพศาล', '4', 'SGS'),
(24055, 'จิดาภา', 'บัณฑิตมหากุล', '4', 'SGS'),
(24056, 'วันคริตส์', 'กุลนาถโกสีย์', '4', 'SGS'),
(24057, 'สุพิชชา', 'อวัสดาพร', '4', 'SGS'),
(24058, 'ณภัทรา', 'จารุพานิช', '4', 'SGS'),
(24059, 'ชวันรัตน์', 'รัตนชัยพรพันธ์', '4', 'SGS'),
(24060, 'สิริพันธุ์', 'เส็งสมวงศ์', '4', 'SGS'),
(24061, 'มนธีร์', 'จิตศิริ', '4', 'SGS'),
(24062, 'จิรภัทร', 'เดโชศิลป์', '4', 'SGS'),
(24063, 'ชุนทาโร่', 'เมกาตะ', '4', 'SGS'),
(24064, 'วัสย์ศร', 'นุชจาวิทยาพร', '4', 'SGS');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `name`, `surname`, `grade`, `class`) VALUES
('t131', 'กิตติกร', 'แสวงกาญจน์', '4', 'SGS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
