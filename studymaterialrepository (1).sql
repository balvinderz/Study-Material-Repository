-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 04:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studymaterialrepository`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `srdno` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`srdno`, `name`, `subject`, `email`, `password`) VALUES
('', 'balvinder', '', 'balvi', ''),
('123', 'shubham', '', 'shubham123@gmail.com', 'shubham'),
('21', 'balvinder', '', 'balvindersi2@gmail.com', 'mani1234'),
('44', 'pavan', 'WDL', 'pavanbhanushalip009@gmail.com', 'mani1234'),
('55', 'balvinder singh gambhir', 'WDL', 'balvindersi2@gmail.com', 'mani1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `branch`, `sem`, `email`, `password`) VALUES
('', '', '', '', '', ''),
('1111', 'sanjeel', 'CE', 'V', 'sanjel@gmail.com', '1234'),
('17ce1013', 'balvinder singh', 'CE', 'V', 'balvindersi2@gmail.com', 'mani1234'),
('17CE1015', 'balvinder singh gambhir', 'CE', 'V', 'balvindersi2@gmail.com', 'mani1234'),
('17ce202', 'pavan', 'ce', 'iv', 'pavanbhanushalip009@gmail.com', '123'),
('1ej1e', 'xyz', 'akd', 'sadk', 'sadd', 'mkasdk');

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `id` int(11) NOT NULL,
  `srdno` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `path` varchar(300) NOT NULL,
  `filename` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studymaterial`
--

INSERT INTO `studymaterial` (`id`, `srdno`, `title`, `description`, `subject`, `sem`, `path`, `filename`) VALUES
(7, '55', 'sojao marjao', 'fdskofko', 'ADA', 'V', '../documents/ADA_WEEK1.ppt', 'ADA_WEEK1.ppt'),
(8, '55', 'adskmsdkm', 'kmdsaksdmk', 'ADA', 'V', '../documents/ajax.docx', 'ajax.docx');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subjectname`, `branch`, `sem`) VALUES
(1, 'ADA', 'CE', 'V'),
(2, 'WDL', 'CE', 'V'),
(3, 'CN', 'CE', 'V'),
(4, 'MP', 'CE', 'V'),
(5, 'DBMS', 'CE', 'V'),
(6, 'TCS', 'CE', 'V'),
(7, 'BCE', 'CE', 'V');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`srdno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
