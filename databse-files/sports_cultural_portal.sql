-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 03:02 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_cultural_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `sports_docs`
--

CREATE TABLE `sports_docs` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_org` varchar(50) NOT NULL,
  `event_level` varchar(50) NOT NULL,
  `awards_participate` text NOT NULL,
  `date` date NOT NULL,
  `doc_name` varchar(50) NOT NULL,
  `photo_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports_docs`
--

INSERT INTO `sports_docs` (`id`, `name`, `rollno`, `event_name`, `event_org`, `event_level`, `awards_participate`, `date`, `doc_name`, `photo_name`) VALUES
(1, '', '18CE1034', '', '', '', '', '0000-00-00', '', ''),
(2, '', '18CE1010', 'SWIMMING', '', 'College Level', 'Participated', '2020-07-03', 'am tut5.pdf', ''),
(3, '', '18CE1010', 'CRICKET', '', 'College Level', 'Participated', '2020-07-02', 'dlda assign 1.pdf', ''),
(4, '', '18CE1025', 'BASKETBALL', '', 'College Level', 'Participated', '2020-07-05', 'am tut5.pdf', ''),
(5, '', '18CE1025', 'SWIMMING', '', 'College Level', 'Participated', '2020-07-03', 'cg assignment 4.pdf', ''),
(6, '', '18CE1025', 'FOOTBALL', '', 'College Level', 'Participated', '2020-07-11', 'coa assignment 2_compressed.pdf', ''),
(7, 'VEDPRAKASH DHARMENDRA PANDEY', '18CE1025', 'CRICKET', '', 'State level', 'Award', '2020-07-04', 'coa assignment 3.pdf', ''),
(8, 'CHETAN SUNIL KHAIRNAR', '18CE1034', '', '', 'National level', '3rd prize', '2020-07-16', '', ''),
(9, 'CHETAN SUNIL KHAIRNAR', '18CE1034', '', '', 'National level', '2nd prize', '2020-07-17', '', ''),
(10, 'CHETAN SUNIL KHAIRNAR', '18CE1034', 'HOCKEY', '', 'State level', 'Appreciation prize', '2020-07-08', '', ''),
(11, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'BASKETBALL', '', 'College Level', 'Appreciation prize', '2020-07-02', 'week 1- case study.pdf', ''),
(12, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'HANDBALL', 'RAIT', 'College Level', 'Appreciation prize', '2020-07-10', 'week 1- case study.pdf', 'image.png'),
(13, 'YASH VINOD GHERKAR', '18CE1038', 'VOLLEYBALL', 'AC PATIL', 'College Level', 'Consolidation prize', '2020-07-11', 'week 1- case study.pdf', 'Chicken Sauasge .jpg'),
(14, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'VOLLEYBALL', 'AC PATIL', 'College Level', 'Consolidation prize', '2020-07-11', 'week 1- case study.pdf', 'la.jpg'),
(15, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'TENNIS', 'AC PATIL', 'College Level', 'Appreciation prize', '2020-07-09', 'week 1- case study.pdf', 'Chicken Manchurian .jfif'),
(16, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'BASKETBALL', 'AC PATIL', 'National level', '3rd prize', '2020-07-09', 'Practical_Evaluation_Sheet_2019_20.pdf', ''),
(17, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'VOLLEYBALL', 'AC PATIL', 'College Level', 'Consolidation prize', '2020-07-11', 'week 1- case study.pdf', ''),
(18, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'BASKETBALL', 'AC PATIL', 'College Level', 'Consolidation prize', '2020-07-17', 'original.pdf', 'IMG_7384.JPG'),
(19, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'HORIZON', 'RAIT', 'College Level', '3rd prize', '2020-07-10', '', 'resize-15888572861350041435instagramPNG11.png'),
(20, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'UDAAN', 'RAIT', 'College Level', 'Appreciation prize', '2020-07-11', 'Array', 'Array'),
(21, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'FOOTBALL', 'RAIT', 'College Level', 'Appreciation prize', '2020-07-14', 'coa assignment 3.pdf', 'IMG_E6370.JPG'),
(22, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'FOOTBALL', 'RAIT', 'College Level', 'Appreciation prize', '2020-07-09', '', 'awesomeone.jpg'),
(23, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'BASKETBALL', 'RAIT', 'College Level', 'Consolidation prize', '2020-07-31', '', 'logo-1-RAIT.png'),
(24, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'CRICKET', 'AC PATIL', 'College Level', '3rd prize', '2020-07-29', 'OSTL final Report-converted-converted new-converte', 'clipart365828.png'),
(25, 'PRANJALI RAJESHWAR ANDHALE', '18CE1010', 'CRICKET', 'AC PATIL', 'College Level', '3rd prize', '2020-07-18', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sports_docs`
--
ALTER TABLE `sports_docs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sports_docs`
--
ALTER TABLE `sports_docs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
