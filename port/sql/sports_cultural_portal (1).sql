-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 04:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `phone_no` bigint(12) NOT NULL,
  `OTP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`username`, `password`, `Email_id`, `phone_no`, `OTP`) VALUES
('admin', '123', '', 919930938699, 'e23GEN');

-- --------------------------------------------------------

--
-- Table structure for table `cultural_docs`
--

CREATE TABLE `cultural_docs` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_org` varchar(50) NOT NULL,
  `event_level` varchar(50) NOT NULL,
  `awards_participate` text NOT NULL,
  `date` date NOT NULL,
  `doc_name` varchar(500) NOT NULL,
  `photo_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cultural_docs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cultural_list`
--

CREATE TABLE `cultural_list` (
  `id` int(255) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `activity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cultural_list`
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
  `doc_name` varchar(500) NOT NULL,
  `photo_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports_docs`
--

-- --------------------------------------------------------

--
-- Table structure for table `sports_list`
--

CREATE TABLE `sports_list` (
  `id` int(255) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `activity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports_list`
--

INSERT INTO `sports_list` (`id`, `event_name`, `date`, `activity`) VALUES
(1, 'Cricket', '2020-07-06', 'NO'),
(3, 'football', '2020-07-07', 'NO'),
(4, 'football2020', '2020-07-01', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `stu_record`
--

CREATE TABLE `stu_record` (
  `Roll_no` varchar(12) NOT NULL,
  `Serial_no` int(11) NOT NULL,
  `Last_name` varchar(12) DEFAULT NULL,
  `First_name` varchar(25) DEFAULT NULL,
  `Middle_name` varchar(25) DEFAULT NULL,
  `Year` varchar(5) DEFAULT NULL,
  `Division` varchar(5) DEFAULT NULL,
  `Batch` varchar(5) DEFAULT NULL,
  `Password` int(11) NOT NULL DEFAULT 12345,
  `Phone_no` bigint(12) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `OTP` varchar(20) NOT NULL,
  `EL_1` varchar(20) NOT NULL,
  `EL_2` varchar(15) NOT NULL,
  `sem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_record`
--

INSERT INTO `stu_record` (`Roll_no`, `Serial_no`, `Last_name`, `First_name`, `Middle_name`, `Year`, `Division`, `Batch`, `Password`, `Phone_no`, `emailid`, `OTP`, `EL_1`, `EL_2`, `sem`) VALUES
('00CE0000', 0, 'Only', 'Demo', NULL, 'TE', 'A', 'A2', 123, 0, '', '', '', '', 5),
('10CE1075', 20, 'FALE', 'ANIKET', 'DEOKANTH', 'TE', 'A', 'A1', 0, 7666092254, 'ANIDEV1992@GMAIL.COM', '', 'CSDLO5011', '', 0),
('10CE2027', 18, 'GHOSH', 'ABHISHEK', 'SUNAND', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('12CE1095', 19, 'HARNE ', 'SIDDHESH ', 'GANESH	', 'BE', 'A', 'A1', 123, 8888369822, 'siddheshharne9@gmail.com', '', 'CSDLO7032', 'ILO7013', 7),
('13CE2004', 18, 'DESHMUKH', 'SWAPNIL', 'SAMBHAJI', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('13CE2013', 3, 'INGOLE', 'YASH', 'SUDHIR', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('13CE2023', 19, 'SOHROT', 'ANJESH', 'BRAJESH', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('13CE8013', 3, 'MOHITE', 'SHUBHAM', '', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('13CE8014', 11, 'RAUT', 'NIKHIL', 'MANOHAR', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('14CE1035', 13, 'DUBHALKAR', 'PRIYANKA', 'SHIVPRASAD', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('14CE1088', 17, 'AGRAWAL', 'DIPESH', 'DINESH', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('14CE1093', 16, 'WALDE', 'AMANKIRTI', 'KAVIND', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('14CE2020', 2, 'KALYANKAR', 'SAGARIKA', 'SURESH', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('14CE7035', 1, 'PATIL', 'BHUSHAN', 'RAJENDRA', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('14CE7043', 8, 'MANTRI', 'NIRAJ', 'KAMALKISHOR', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('14CE8011', 15, 'PATIL', 'SWARAJ', 'VISHAL', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('14CE8014', 20, 'SHIRVALKAR', 'PRANAV', 'DEEPAK', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('15CE1014', 6, 'NADEKAR', 'PRATIKSHA', 'RAMESH', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('15CE1028', 8, 'MAHAJAN', 'DUSHYANT', 'UDHAV', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7031', 'ILO7013', 7),
('15CE1033', 2, 'BHURE', 'VAIBHAV', 'MANOHAR', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('15CE1035', 17, 'PILLAI', 'ANANDU', 'SASIKUMAR', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('15CE1043', 3, 'BIRADAR', 'VAIBHAV', 'BALAJI', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('15CE1056', 6, 'JADHAV', 'DIPESH', 'RAVINDRA', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('15CE1067', 18, 'BHURBUDA', 'HARSHADNARAYAN', '', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5013', '', 5),
('15CE1071', 14, 'WAVHULE', 'KUNAL', 'SANJAY', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('15CE2001', 15, 'DESHPANDE', 'OJAS', 'PRASAD', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('15CE2004', 7, 'KIMBAHUNE', 'ATHARVA', 'SANJAY', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7031', 'ILO7013', 7),
('15CE2005', 18, 'VICHARE', 'ADITYA', 'CHANDRASHEKHAR', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('15CE2017', 4, 'GUPTA', 'ANMOL', 'ASHISH', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('15CE2019', 18, 'SHRIVASTAVA', 'MOHIT', 'MANISH', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('15CE2020', 18, 'SHARMA', 'ANUSHKA', 'AVDHESH', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('15CE2021', 18, 'BHARDWAJ', 'ANURAG', 'SURAJ', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('15CE5017', 20, 'TARALEKAR', 'PRAJAKTA', 'RAJARAM', 'BE', 'A', 'A4', 0, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('15CE7022', 9, 'GHULE', 'SHUBHAM', 'BAPURAO', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('15CE7041', 12, 'MAKAR', 'SAMIR', 'SANJAY', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('15CE8001', 5, 'CHAMOLI', 'PIYUSH', '', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1001', 3, 'DESHPANDE', 'TANVI', 'VIJAY', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1002', 12, 'KHEDEKAR', 'SNEHAL', 'RAVINDRA', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1003', 7, 'NARANGIKAR', 'AISHWARYA', 'PRAKASH', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1005', 8, 'NIKAM', 'DARSHANA', 'KAILAS', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1006', 18, 'CHATUR', 'PRACHI', '', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1007', 13, 'PAWAR', 'ANUJA', 'VIJAY', 'BE', 'B', 'B2', 123, 8655805354, 'anujapawar04@gmail.com', '160435', 'CSDLO7031', 'ILO7016', 7),
('16CE1008', 11, 'PAWAR', 'SUYOG', 'MOHAN', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1010', 8, 'MHATRE', 'HRISHIKESH', 'AVINASH', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1011', 8, 'SANTIAGO', 'REHA', 'STANLEY', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1012', 16, 'DEVGHARE', 'PRAVIN', 'DATTATRAY', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1013', 4, 'DHARMIK', 'KAUSTUBH', 'RAJU', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1014', 6, 'GHODE', 'MRUNAL', 'ASHOK', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1015', 19, 'GAJAKOS', 'ANUJA', '', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1016', 1, 'LAL', 'PRANEYA', 'NIMESH', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1017', 20, 'MHATRE', 'NIKHIL', 'PRAKASH', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('16CE1018', 4, 'YADAV', 'PRADEEP', 'KUMAR', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1020', 2, 'WARTAK', 'SAMIKSHA', 'SUBHASH', 'BE', 'B', 'B4', 123, 9594800868, 'samikshawartak@gmail.com', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1021', 6, 'CHAUDHARI', 'NIRAJ', '', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1022', 17, 'RATHOD', 'DHEERAJ', 'UTTAM', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('16CE1023', 14, 'CHIPPA', 'AAKANKSHA', '', 'BE', 'A', 'A4', 123, 7709888275, 'aakankshachippa@gmail.com', '794036', 'CSDLO7032', 'ILO7013', 7),
('16CE1024', 13, 'KOTA', 'SHRAVANTHI', 'SANDEEP', 'BE', 'A', 'A4', 123, 7066908508, 'shravanthi3367@gmail.com', 'TKaRew', 'CSDLO7032', 'ILO7013', 7),
('16CE1025', 5, 'GAIKWAD', 'BHAGYASHREE', '', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1026', 11, 'KALOKHE', 'ESHA', 'SHANKAR', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1027', 14, 'JADHAV', 'SHUBHAM', 'PRADEEP', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1028', 7, 'GITE', 'SUPRIYA', 'SANJAY', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1029', 19, 'GARANDE', 'RAJU', 'RAVSAHABE', 'TE', 'A', 'A3', 123, 9921418611, 'raj.garande@gmail.com', '', 'CSDLO5013', '', 5),
('16CE1030', 6, 'SAHRAWAT', 'ANANT', 'PRAMOD', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1031', 14, 'SABALE', 'AKSHAY', 'SUNIL', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1032', 6, 'MENON', 'AISHWARYA', 'V', 'BE', 'B', 'B2', 123, 8433750076, 'aishwaryam.2906@gmail.com', 'qyYUj9', 'CSDLO7031', 'ILO7016', 7),
('16CE1033', 2, 'LOKHANDE', 'JAYESH', 'SHRIRANG', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1034', 11, 'SINGH', 'SHUBHAM', 'MANOJ', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1035', 20, 'SINGH', 'NIRAJKUMAR', 'YOGENDRAASHA', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1036', 5, 'YADAV', 'SAURABH', 'RAJENDRAPRASAD', 'BE', 'B', 'B4', 123, 8169073873, 'saurabhsac1999@gmail.com', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1037', 9, 'SAPROO', 'SAKSHAM', 'KANWAL', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1038', 3, 'KAJI', 'ARSHAD', 'SIKANDAR', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1042', 17, 'RAUT', 'SAHIL', 'ANIL', 'SE', 'A', 'A1', 123, 0, '', '', '', '', 3),
('16CE1043', 15, 'SONI', 'VIJAY', 'SATYANARAYAN', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7013', 7),
('16CE1044', 4, 'MHAPARLE', 'ADITYA', 'SUBHASH', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1045', 16, 'LAWANDE', 'NIKITA', '', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1046', 16, 'SHELATKAR', 'TEJAS', 'DHANAJI', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1047', 9, 'DABKE', 'BHARGAVI', 'MILIND', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1048', 19, 'SALVI', 'TRUNAL', 'SACHIN', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('16CE1049', 1, 'BAMBLE', 'BHUSHAN', '', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1050', 4, 'KAPADI', 'ABID', 'FAIROJ', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1051', 10, 'DALVI', 'OMKAR', 'SUNIL', 'BE', 'A', 'A4', 123, 9769038259, 'omkar661998@gmail.com', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1052', 14, 'MAlLEWADIKAR', 'SANKET', 'DIGAMBAR', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('16CE1053', 15, 'PATIL', 'MRUNAL', 'JAGADISH', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1054', 10, 'SAWARATKAR', 'RUGVED', 'DATTATRAY', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1055', 2, 'POTE', 'SHREYAS', 'ANAND', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1056', 12, 'PHADATARE', 'ROHAN', 'BAJARANG', 'BE', 'B', 'B4', 123, 7045738507, 'rohanphadatare08@gmail.com', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1057', 10, 'DAHAT', 'PRAKARSHA', '', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1058 ', 14, 'WAGHMARE', 'RUCHITA', 'PRALHAD', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1059', 19, 'TONDALE', 'STEPHEN', 'PRABHAKAR', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1060', 2, 'RANE', 'MUKUL', 'PARAG', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1061', 11, 'PARAB', 'SAHIL', 'VISHWANATH', 'BE', 'B', 'B1', 123, 919930615540, 'sahilparab2609@gmail.com', '8uOBAb', 'CSDLO7032', 'ILO7016', 7),
('16CE1062', 9, 'PATIL', 'PARIKSHIT', 'SUNIL', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1063', 4, 'BHOLE', 'SNEHAL', 'SUDHIR', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1064', 7, 'CHAUDHARI', 'SAMRUDDHI', '', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1065', 14, 'PATIL', 'HITESH', 'SUDAM', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1066', 5, 'MONDKAR', 'SHAMALI', 'DATTAPRASAD', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1067', 13, 'UGALMUGLE', 'PRAJAKTA', 'BHAGWAT', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1069', 19, 'SHENDE', 'ANSHUL', 'SANJAY', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1070', 5, 'JERIN', 'THOMAS', '', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1071', 20, 'WARKE', 'VEDANT', 'DEVIDAS', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1072', 10, 'KADWE', 'SHIVANSH', 'RAJESH', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1073', 16, 'PATIL', 'NIBHA', 'KIRTI', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1075', 6, 'MALGAONKAR', 'PRASAD', '', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1076', 7, 'KADAM', 'ANKIT', 'DILIP', 'BE', 'A', 'A1', 123, 8097149454, 'kadm.ankit1999@gmail.com', '234159', 'CSDLO7032', 'ILO7013', 7),
('16CE1078', 17, 'SHINDE', 'SHREEYA', 'RAMDAS', 'BE', 'B', 'B4', 123, 9702848869, 'shreeya171098@gmail.com', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1079', 8, 'DEOLALKAR', 'SHUBHAM', '', 'BE', 'A', 'A1', 123, 919769298671, 'deolalkar.shubham@gmail.com', 'bHp459', 'CSDLO7032', 'ILO7013', 7),
('16CE1081', 8, 'CHAVAN', 'NINAD', 'SHIVAJI', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1082', 1, 'RAGESH', 'NATARAJAN', 'PUNITHA', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1083', 5, 'RUPNE', 'LAUKIK', 'BALASAHEB', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1085', 9, 'KAMATH', 'SACHIN', 'RAMESH', 'BE', 'A', 'A1', 123, 9769602270, 'sachinrkamath18@gmail.com', '071934', 'CSDLO7032', 'ILO7013', 7),
('16CE1086', 21, 'SINGH', 'SHIVAM', 'VIJAY', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1087', 22, 'SONAWANE', 'PRANITA', 'MADHUKAR', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1088', 15, 'SAWANT', 'MITESH', 'MILIND', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1089', 10, 'KUDE', 'SHREYAS', 'RAJENDRA', 'BE', 'A', 'A1', 123, 918452884280, 'kude.shreyas.16ce1089@gmail.com', '691037', 'CSDLO7032', 'ILO7013', 7),
('16CE1090', 8, 'GUPTA', 'SHAGUN', 'SANYOG', 'BE', 'A', 'A3', 123, 9764845680, 'shagungupta1410@gmail.com', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1091', 11, 'MANDKE', 'CHINMAY', 'SANDEEP', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1093', 12, 'JADHAV', 'SUCHIT', 'VIJAY', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1094', 13, 'KAVIMANDAN', 'CHINMAY', 'RAM', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE1095', 19, 'KHOBRAGADE', 'NIKITA', 'YOGIRAJ', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('16CE1096', 7, 'SAHU', 'NITIN', 'SURJYANARAYAN', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE1097', 12, 'PATEL', 'MOHIT', 'AMRUTLAL', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE1098', 10, 'PATIL', 'PRATHAMESH', 'SUNIL', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2001', 14, 'AGARWAL', 'ANKUSH', '', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2002', 12, 'KHALFAY', 'AMAN', 'MOHASIN', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2003', 1, 'BELGAONKAR', 'SHUBHAM', '', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE2004', 2, 'BERA', 'SOUBIK', 'SUJIT', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2005', 2, 'DESHPANDE', 'HARSHAL', 'PRASHANT', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2006', 15, 'MAHESHWARI', 'VINAY', 'ANUJ', 'BE', 'A', 'A1', 123, 9930606590, 'maheshwari.vinay.16ce2006@gmail.com', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2007', 9, 'GUPTA', 'SUMEET', 'SATYADEV', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2008', 18, 'SINGH', 'ROHAN', 'VINAY', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2009', 3, 'YADAV', 'ANUSHKA', 'RAMBRIKSHA', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2010', 21, 'YADAV', 'SWARAJ', 'SAMBHAJI', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2011', 18, 'RATHOD', 'PIYUSH', 'ANIL', 'BE', 'B', 'B1', 123, 9820572514, 'piyushr269@gmail.com', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2012', 11, 'PAI', 'PARICHAY', 'VISHWANATH', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2015', 1, 'VADWALKAR', 'SALONI', 'SANJAY', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2016', 8, 'NASSA', 'BHAVESH', 'SATISH', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2017', 13, 'PRAJAPATI', 'SHASHIKANT', 'SHYAM', 'TE', 'B', 'B2', 123, 9920595479, 'shashikantprajapati291198@gmail.com', '106325', 'CSDLO5013', '', 5),
('16CE2018', 9, 'PANDEY', 'APOORVA', 'ATUL', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2019', 11, 'DESHMUKH', 'PRIYANKA', '', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2020', 9, 'PAINJANE', 'VEDIKA', 'VISHWANATH', 'BE', 'B', 'B2', 123, 9702405251, 'vedikapainjane@gmail.com', '073192', 'CSDLO7031', 'ILO7016', 7),
('16CE2021', 3, 'BHAKE', 'SIMRAN', 'RANJIT', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2023', 5, 'BOHRA', 'MANAN', 'LALIT', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2025', 17, 'THAKUR', 'RIYA', 'YESHWANT', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2026', 9, 'CHOUDHARY', 'TWISHA', '', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2027', 17, 'PREETI', 'SWATI', 'VISHWA', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2028', 16, 'BHAGWAT', 'TANMAY', 'VIKAS', 'BE', 'A', 'A1', 123, 9920361298, 'bhagwat.tanmay.16ce2028@gmail.com', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2029', 10, 'PARAB', 'JATIN', 'KISHOR', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2030', 1, 'GUPTA', 'SHUBHAM', 'SARVESH', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE2031', 6, 'APSHINGE', 'ADITYA', 'VIJAY', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2032', 7, 'GHANATE', 'YASH', 'GAUTAM', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE2033', 3, 'KHAN', 'HUDA', 'GHULAM', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE5023', 19, 'GULDAGAD', 'VIDYA', 'RAVASAHEB', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE5507', 20, 'ALTE', 'NIRAJKUMAR', 'DASHRATHRAO', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE5510', 20, 'BHOIR', 'PANKAJ', 'ASHOK', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE5511', 20, 'PARDESHI', 'AKSHAY', 'PRADEEP', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE6101', 13, 'PATIL', 'DURGESH', 'ARUN', 'BE', 'B', 'B1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE6152', 17, 'SHAH', 'DHRUPAL', 'PARESH', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE6202', 22, 'Patil', 'Ruchita', 'Ram', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE7001', 14, 'SHAH', 'TANVI', 'DHARMESH', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7002', 15, 'UNDE', 'NILESH', 'PANDURANG', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7003', 6, 'MAHAJAN', 'YASH', 'VIJAY', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7004', 12, 'RAJPUT', 'SAGAR', 'GANESHSINGH', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7005', 17, 'UPADHYAY', 'ANAND', 'SURESH', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7006', 5, 'GUJARE', 'RITURAJ', 'RAJENDRA', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7007', 10, 'KAPKAR', 'SAYLEE', '', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('16CE7008', 9, 'KAMTAM', 'AISHWARYA', 'RAMESH', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7009', 5, 'MENON', 'ANKITA', 'MURALEEDHARAN', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE7010', 5, 'BHERE', 'PRADIP', 'ASHOK', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7012', 10, 'KANCHAN', 'SAURAV', 'NAVEENCHANDRA', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7013', 13, 'MALI', 'SHRADDHA', 'SANJAY', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7014', 13, 'KEDARE', 'AKHIL', 'SURYAKANT', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7015', 6, 'GAIKWAD', 'PRATIK', 'SUDHIR', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('16CE7016', 10, 'RAJPUT', 'SATWEEK', 'RAJENDRASING', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE7017', 12, 'JAIN', 'AKSHAY', 'RAJESH', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE7018', 8, 'SHENDE', 'MRUNAL', 'KEWALRAM', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE7019', 2, 'NIMJE', 'ROHAN', 'CHANDRAKANT', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE7020', 6, 'PAWAR', 'OMKAR', 'SUHAS', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE7021', 16, 'LENGARE', 'GAURAV', 'MADHUKAR', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7022', 11, 'RAJPUT', 'NAVJOT', 'SINGH', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7023', 3, 'PATIL', 'MANSVI', 'RAJENDRA', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE7024', 9, 'MORE', 'SWAPNIL', 'SANJAY', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7025', 8, 'CHORGHE', 'NIKITA', 'MARUTI', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7027', 9, 'MUNOT', 'SIMRAN', 'DEEPAK', 'BE', 'C', 'C4', 123, 8291184957, 'simranm3636@gmail.com', '', 'CSDLO7031', 'ILO7016', 7),
('16CE7028', 18, 'WAYKAR', 'JINAL', 'SUNIL', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7029', 11, 'KULKARNI', 'ABHISHEK', 'SANJAY', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7030', 3, 'SWAMI', 'SIDDHESH', 'GANPAT', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE7031', 17, 'MAGOO', 'ANKIT', 'ASHOK', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7032', 12, 'MAKANDAR', 'ARBAAZ', 'AYUB', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7033', 13, 'VADDKKEPURAK', 'PRASANNA', '', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7034', 16, 'RATHOD', 'MAYANK', 'ASHISH', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('16CE7035', 14, 'KHARADE', 'TEJASWI', 'SAMPAT', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7036', 7, 'MAHITHA', 'B', 'S', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7037', 7, 'RAJULU', 'SRITEJ', 'GOVINDA', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE7038', 18, 'WORLIKAR', 'NIKET', 'MADAN', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7039', 15, 'LADDHA', 'PUNIT', 'VINOD', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7040', 6, 'GURAV', 'SHUBHAM', 'SUDHIR', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7041', 19, 'KOTAMBE', 'NIKITA', 'MAHADEO', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE7042', 1, 'PATEL', 'SAHIR', 'MUZAMMIL', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE7043', 4, 'DEORE', 'SWAPNIL', 'SHALIGRAM', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8001', 19, 'SHINDE', 'DHARMRAJ', 'MALOJI', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('16CE8002', 2, 'MAHENDRA', 'SPARSH', 'PRAVEEN', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('16CE8003', 8, 'GULHANE', 'ANURAG', 'NITIN', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('16CE8005', 12, 'KASHIV', 'KRISHNA', 'ANUPAM', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8006', 6, 'BHOPE', 'HARSHAL', 'HEMANT', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8007', 17, 'WARAICH', 'HARMAN', 'SINGH', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8008', 7, 'CHAUDHARI', 'KETAN', 'DINESH', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8009', 11, 'KAPIL', 'DIVYA', 'HARISH', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8010', 14, 'MITTAL', 'SHRISTI', 'VIRENDRA', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8011', 11, 'KIRGAT', 'SAURABH', 'MAHADEV', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('16CE8012', 18, 'SHARMA', 'MANMOHAN', 'PAWANKUMAR', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8013', 19, 'YEVALE', 'MITALI', 'JALANDAR', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('16CE8014', 4, 'NISHA', 'RAMAKRISHNAN', 'SEETHA', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('16CE8015', 1, 'ADHALGE', 'ANIKET', 'LAXMAN', 'TE', 'C', 'C4', 123, 9833610894, 'aniketadhalge98@gmail.com', '421076', 'CSDLO5011', '', 5),
('16CE8017', 10, 'MUNDHRA', 'MEET', 'SHIV', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE1001', 7, 'MORE', 'VIVEK', 'CHANDRAKANT', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1002', 10, 'SHIRSATH', 'NILESH', 'ADINATH', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1003', 5, 'NAVLE', 'DIKSHITA', 'ANKUSH', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1004', 12, 'KHACHANE', 'SAGAR', 'JAYANT', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE1005', 17, 'KSHIRSAGAR', 'AJINKYA', 'PRAVIN', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1006', 18, 'KOLI', 'VIREN', 'SUDHAKAR', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1007', 5, 'JADHAV', 'ATHARVA', 'VIDYADHAR', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1008', 2, 'HABIBKAR', 'JATIN', 'KRISHNA', 'TE', 'A', 'A3', 123, 918433686604, 'jatinkrishnahabibkar@gmail.com', '034957', 'CSDLO5013', '', 5),
('17CE1009', 9, 'RENGE', 'ABHIJEET', 'RAMESHWAR', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1010', 3, 'BORSE', 'PRANJAL', 'ANIL', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1011', 13, 'YEOLE', 'VISHAL', 'DATTATRAY', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1012', 13, 'DABHADE', 'NACHIKET', 'SHYAM', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1013', 1, 'GAMBHIR', 'BALVINDER', 'GURMEET', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1014', 1, 'AHER', 'PRATIK', 'SANJAY', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE1015', 11, 'SINGH', 'AKASH', 'AJAYKUMAR', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1016', 13, 'MALPURE', 'TANMAY', 'ANIL', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1017', 10, 'GUPTA', 'PRIYA', 'RAM', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1018', 12, 'BHAT', 'MOHIT', 'DEVENDER', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1019', 2, 'BADGUJAR', 'LOKESH', 'MAHESH', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE1020', 10, 'PATEL', 'YASH', 'DHIRAJBHAI', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1021', 2, 'MHATRE', 'NIKHIL', 'NANDKUMAR', 'TE', 'A', 'A4', 123, 917045220061, 'mhatrenikhil36@gmail.com', 'KFHt6e', 'CSDLO5013', '', 5),
('17CE1022', 7, 'RATHOR', 'PRATIK', 'ANILSINGH', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1023', 14, 'WADEKAR', 'SNEHA', 'ANIL', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1024', 6, 'KADAM', 'SIDDHI', 'PANDURANG', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1025', 10, 'SALIAN', 'BEENAA', 'MOTIRAM', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1026', 8, 'THAKARE', 'ABHISHEK', 'SANJAY', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1028', 15, 'KELKAR', 'SHREERAM', 'SUHAS', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1029', 13, 'KULKARNI', 'PRANAV', 'BHIMRAO', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE1030', 13, 'VELANKAR', 'ANIRUDDHA', 'ANANT', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1031', 7, 'GHARAT', 'SHUBHAM', 'ARVIND', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1032', 11, 'LAKRA', 'SHALINI', 'BINAY', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1033', 6, 'GHANWAT', 'KOMAL', 'VITTHAL', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1034', 12, 'JAWARE', 'HITESH', 'SHANTARAM', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1035', 3, 'GAIKWAD', 'HARSHALI', 'VASANT', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1036', 12, 'PATIL', 'KAJAL', 'PRAMOD', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1037', 17, 'MADKE', 'SHWETA', 'HARIBHAU', 'SE', 'A', 'A2', 123, 0, '', '', '', '', 3),
('17CE1038', 11, 'SAYALE', 'KIRAN', 'TRYAMBAK', 'TE', 'B', 'B2', 123, 9892466757, 'kiransayale56@gmail.com', '209564', 'CSDLO5013', '', 5),
('17CE1039', 1, 'PANDEY', 'ASHUTOSH', 'SURENDRA', 'SE', 'B', 'B1', 123, 0, '', '', '', '', 3),
('17CE1040', 5, 'PATIL', 'VIRAJ', 'PRAKASH', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1041', 6, 'NIKAM', 'ROHAN', 'ANIL', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1042', 17, 'KUMTHEKAR', 'AARYA', 'SANJAY', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1043', 16, 'FULZELE', 'ADITYA', 'NITINCHANDRA', 'SE', 'A', 'A2', 123, 0, '', '', '', '', 3),
('17CE1044', 1, 'CHAUDHARI', 'POOJA', 'GIRISH', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1045', 11, 'CHAUDHARI', 'POOJA', 'HARISHCHANDRA', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1046', 2, 'ALEKAR', 'SADIYA', 'LIYAKAT', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1047', 1, 'RAJ', 'AKASH', 'RAJKUMAR', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1048', 12, 'WAYKOLE', 'YOGINI', 'NARESH', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1049', 8, 'SAYYED', 'EJAAZ', 'QUADRI', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1050', 9, 'PARTE', 'RIYA', 'SANTOSH', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1051', 16, 'JUNGHARE', 'SHUBHAM', 'DNYANDEO', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1052', 4, 'GHARAT', 'ANURAG', 'ARAVIND', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1053', 3, 'PATIL', 'RANJEET', 'ASHOK', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1055', 7, 'CHAVAN', 'SWARAJ', 'BALU', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1056', 3, 'GAIKWAD', 'ANOUSHKA', 'RAMESH', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1057', 9, 'VAJAREKAR', 'SIDDHI', 'SURESH', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1058', 8, 'PARDESHI', 'RITESH', 'RATILAL', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1059', 1, 'MUTHE', 'MADHURI', 'RAJESH', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1060', 9, 'SHERLEKAR', 'SAMPADA', 'DASHARATH', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1061', 7, 'ROKADE', 'SUJAY', 'SUDHIR', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1063', 14, 'CHAUDHARI', 'PUNIT', 'ARUN', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1064', 9, 'GOUNDER', 'VIGNESH', 'GNANASEKARAN', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE1065', 6, 'BHAT', 'ANIRUDH', 'BHAGWAN', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1066', 4, 'NARVADE', 'OMKAR', 'YUVRAJ', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1067', 6, 'GAJAKOS', 'MEHUL', 'SUDHAKAR', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE1068', 13, 'PATIL', 'MAYURI', 'NIWAS', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1070', 10, 'AMBULGEKAR', 'SOURABH', 'SUBHASH', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1071', 5, 'DEY', 'RUPAK', 'SAMIR', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1072', 11, 'VIRANI', 'PAKSHAL', 'PARAS', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1073 ', 20, 'KULKARNI', 'YASH', 'RAJEEV', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1074', 7, 'PANTHI', 'AMIT', 'TOPLAL', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1076', 12, 'GADHE', 'VISHAKHA', 'VIRENDRA', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1077', 11, 'PATIL', 'AMULYA', 'ATULYA', 'TE', 'B', 'B1', 123, 9833871094, 'avengeramulya@gmail.com', '460159', 'CSDLO5013', '', 5),
('17CE1078', 6, 'RAJA', 'SIDDHARTH', 'R.C', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1080', 9, 'BHOSALE', 'SANJEEL', 'SANDEEP', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1081', 1, 'HARIHAR', 'SRIUJAN', 'SMRUTIN', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1082', 4, 'PAWAR', 'KSHITIJ', 'VIJAYKUMAR', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1083', 3, 'CHAUHAN', 'MOHAMMED', 'KASHIF', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE1084', 3, 'ONKAR', 'RUNDAN', 'RAVIKUMAR', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1085', 8, 'BHANUSHALI', 'PAVAN', 'MOHANBHAI', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1086', 2, 'MUTHE', 'ABHISHEK', 'SHANKAR', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1089', 7, 'SINGH', 'TANMAY', 'ASHOK', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1092', 14, 'KALE', 'HARSHAL', 'BAJIRAO', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1093', 19, 'MISHRA', 'SIDDHARTH', 'VIVEK', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1094', 10, 'DESHMUKH', 'TANMAY', 'SHIRISH', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1095', 17, 'GUPTA', 'PRAJJWAL', 'ANAND', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE1096', 4, 'SHRIVASTAVA', 'AMANKUMAR', 'ANJANIKUMAR', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2001', 10, 'JAIN', 'SANDARSH', 'MOHIT', 'TE', 'A', 'A1', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE2002', 8, 'RAY', 'VISHWAROOP', 'GANESH', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2003', 13, 'DESHPANDE', 'REWA', 'SANCHIT', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2004', 18, 'DIVEKAR', 'SHRUTI', 'DATTATRAY', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2006', 8, 'MATHUR', 'SHIVIKA', 'SHARAT', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2007', 1, 'TAMHANE', 'SOHAM', 'NIKET', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2008', 3, 'NAIK', 'SHREEYA', 'MILIND', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2010', 4, 'AGARWAL', 'NEIL', 'SANJAY', 'TE', 'A', 'A2', 123, 0, 'regalstreak@gmail.com', 'uSM7y8', 'CSDLO5013', '', 5),
('17CE2011', 8, 'BIRAJDAR', 'SANYUKTA', 'SIDDHESHWAR', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2012', 16, 'WAGLE', 'SACHIT', 'UDAY', 'SE', 'B', 'B3', 123, 0, '', '', '', '', 3),
('17CE2015', 12, 'TIWARI', 'KRITIKA', 'LOKNATH', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2016', 2, 'NAGARE', 'RUCHITA', 'SHIVAJI', 'TE', 'B', 'B1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2017', 9, 'GAIKWAD', 'AISHWARYA', 'DNYANESHWAR', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2018', 17, 'PAWAR', 'AARYAK', 'MILIND', 'SE', 'B', 'B3', 123, 0, '', '', '', '', 3),
('17CE2019', 6, 'POTNIS', 'ANEESH', 'PRADEEP', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2020', 18, 'POTE', 'SHREYASH', 'PRAVIN', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('17CE2021', 5, 'SINGH', 'ABHIPREET', 'ABHAY', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2023', 6, 'SINGH', 'RAGINEE', 'JITENDRAKUMAR', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2024', 4, 'PATIL', 'ANIKET', 'PRAVEEN', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2025', 5, 'LIKHITE', 'ARYAN', 'SHEKHAR', 'TE', 'A', 'A2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2026 ', 9, 'DONGRE', 'RUTUJA', 'MADHUMILIND', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2027', 4, 'HOLANI', 'RISHI', 'MANOJ', 'TE', 'A', 'A3', 123, 919594539766, 'holani.rishi@gmail.com', '360179', 'CSDLO5013', '', 5),
('17CE2030', 2, 'GORE', 'ADWAIT', 'MADHUKAR', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2031', 2, 'DAFE', 'UTKARSH', 'DEVENDRA', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2032', 10, 'VARADE', 'SAURABH', 'NITIN', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2033', 16, 'KOLI', 'SOMESH', 'MALESH', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2034', 1, 'KOYANDE', 'SHREYA', 'VIJAY', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2035', 5, 'PRASAD', 'ABHISHEK', 'SHASHIKANT', 'TE', 'B', 'B3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2036', 3, 'NAGTODE', 'VAIBHAVI', 'BHALCHANDRA', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2037', 12, 'TAMBEWAGH', 'RUJUTA', 'AVINASH', 'TE', 'B', 'B2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE2038', 17, 'ARJUN', 'PRATAP', '', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('17CE2039', 15, 'VIGNESH', 'VIJAYKUMAR', 'LAKSHMI', 'TE', 'A', 'A3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE3001', 15, 'BONDE', 'NAMRATA', 'PRADIP', 'TE', 'A', 'A4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE3002', 14, 'JAGTAP', 'SIDDHI', 'SHRIKANT', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE3003', 15, 'DESHMUKH', 'RASIKA', 'RAVINDRA', 'TE', 'B', 'B4', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE3501', 6, 'DEORE', 'ANURAG', 'RAVINDRA', 'TE', 'C', 'C1', 123, 7506656227, 'anuragdeore125@gmail.com', '', 'CSDLO5013', '', 5),
('17CE5001', 13, 'SALAVI', 'ANKITA', 'SAYAJI', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5002', 15, 'SRIVASTAV', 'ROHIT', 'SUSHIL', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5003', 18, 'SAWANT', 'TANUJA', 'NAGESH', 'BE', 'A', 'A1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5004', 14, 'PIMPALE', 'VIRESH', 'PRAVIN', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5005', 4, 'KAZI', 'RUKHSAR', 'IRFAN', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5006', 1, 'BHALERAO', 'SAYALI', 'DHANANJAY', 'BE', 'B', 'B2', 123, 8080318151, 'sayalidbhalerao@gmail.com', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5007', 3, 'RATHOD', 'PRIYANKA', 'JITENDRASINGH', 'BE', 'B', 'B3', 123, 8104127445, 'priyankarathod28.pr@gmail.com', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5008', 11, 'PATIL', 'POONAM', 'DWARKANATH', 'BE', 'B', 'B2', 123, 8390014605, 'poonamdwarkanathpatil@gmail.com', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5009', 18, 'THALKAR', 'SAIRAJ', 'ANIL', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5010', 15, 'KAWALE', 'TEJAL', 'GOPAL', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5011', 7, 'NAGARE', 'SHUBHAM', 'SHANTARAM', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5012', 15, 'SONAWANE', 'KOMAL', 'MARUTI', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5013', 12, 'PATIL', 'UMESH', 'NAMDEV', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5014 ', 12, 'DESHMUKH', 'MANJIRI', 'PRALHAD', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5015', 5, 'SHAH', 'MANAN', 'VINOD', 'BE', 'A', 'A4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5016', 12, 'DUBEY', 'RACHANA', 'SUDHIR', 'BE', 'A', 'A2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5017', 13, 'REDEKAR', 'DIGVIJAY', 'SURYAKANT', 'BE', 'B', 'B4', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5018', 10, 'PATEL', 'POOJA', 'JAYANTI', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5019', 16, 'SONTAKKE', 'SMITA', '', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5020', 14, 'SONAR', 'HITESH', 'PRAKASH', 'BE', 'A', 'A3', 123, 9004285483, 'shitesh039@gmail.com', '047693', 'CSDLO7032', 'ILO7013', 7),
('17CE5021', 1, 'BHOIR', 'PRASAD', 'BHUSHAN', 'BE', 'A', 'A3', 123, 9870842704, 'prasadbhoir6786@gmail.com', 'jrYbW7', 'CSDLO7032', 'ILO7013', 7),
('17CE5022', 17, 'TARMALE', 'SHWETA', 'SITARAM', 'BE', 'A', 'A3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5023', 5, 'MANE', 'SATYAM', 'SUNIL', 'BE', 'B', 'B2', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5024', 4, 'RATHOD', 'SANGEETA', '', 'BE', 'B', 'B3', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5501', 2, 'SARAF', 'CHITRA', 'RAMESH', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('17CE5502', 10, 'KULAT', 'RUSHIKESH', 'DATTATRAYA', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5503', 8, 'JAISWAL', 'SAPNA', 'RAMESH', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5504', 4, 'WANI', 'MRUNALI', 'ANIL', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('17CE5505', 16, 'SATPUTE', 'RHUTUJA', 'RAJESH', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5506', 19, 'NARA', 'RAVINA', 'PARMANAND', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5507', 16, 'WAGHMARE', 'SHWETA', 'SIDDHARTH', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5508', 4, 'KHAN', 'FARAZ', 'RAFIQUE', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5509', 3, 'PANIGRAHI', 'SUSHANT', 'MAHESWAR', 'BE', 'C', 'C4', 123, 0, '', '', 'CSDLO7031', 'ILO7016', 7),
('17CE5510', 2, 'MANE', 'HARSHA', 'RAGHUNATH', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('17CE5511', 15, 'MOKAL', 'DEEPALI', 'JAGANNATH', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE5512', 1, 'DABHOLKAR', 'ADITYA', 'PRAMOD', 'BE', 'C', 'C1', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('17CE5513', 1, 'KHAN', 'OWAIS', 'BADRUDDIN', 'BE', 'C', 'C3', 123, 0, '', '', 'CSDLO7032', 'ILO7016', 7),
('17CE5514', 7, 'SHAIKH', 'ZAHIR', 'ZAKIR', 'BE', 'C', 'C2', 123, 0, '', '', 'CSDLO7032', 'ILO7013', 7),
('17CE7001', 15, 'PABLE', 'MANSI', 'MADHUKAR', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7002', 8, 'KANCHAN', 'KARAN', 'HARISHCHANDRA', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7003', 10, 'PAWAR', 'YASH', 'PRAKASH', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7004', 14, 'NANDREKAR', 'SEJAL', 'SUBODH', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE7005', 11, 'KALEKAR', 'KAUSTUBH', 'KAILAS', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7006', 12, 'RATHOD', 'SHUBHAM', 'DATTA', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7008', 8, 'DHARANI.M', 'MEENAKSHISUNDARAM', 'UMA', 'TE', 'C', 'C1', 123, 9920849959, 'dharani2699@gmail.com', '', 'CSDLO5013', '', 5),
('17CE7009', 3, 'BHADKE', 'SIDDHANT', 'VIJAY', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE7010', 14, 'SAIGAONKAR', 'RUTUJA', 'PRAVIN', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7011', 5, 'BHUJBAL', 'SAKSHI', 'RAHUL', 'TE', 'C', 'C4', 123, 9960263573, 'sakshi.bhujbalsb@gmail.com', '', 'CSDLO5011', '', 5),
('17CE7012', 16, 'PAWAR', 'VARAD', 'SUDHIR', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7013', 5, 'DASPUTE', 'SHUBHAM', 'SANJAY', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7014', 1, 'BADKUL', 'SOUMYA', 'MANOJ', 'TE', 'C', 'C1', 123, 9049655223, 'badkulsoumya@gmail.com', '', 'CSDLO5013', '', 5),
('17CE7015', 10, 'KHADKIKAR', 'SEJAL', 'SANJEEV', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7016', 16, 'PARKHI', 'CHINMAY', 'JAYADATTARAJ', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7017', 7, 'DEVADIGA', 'NIDHI', 'RAMA', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7018', 13, 'RAWAT', 'ADITYA', 'RAJENDRA', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7019', 18, 'UTEKAR', 'MANISH', 'RAJESH', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7020', 17, 'PRASADE', 'RIYA', 'VINAY', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7021', 2, 'BHIWANDE', 'OMKAR', 'DATTARAM', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7022', 12, 'KAMBLE', 'ANIKET', 'SANJAY', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7023', 9, 'KAPGATE', 'RAJAT', 'HEMANT', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7024', 16, 'TAMBE', 'PRAJAKTA', 'DNYANDEV', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7025', 16, 'BAVKAR', 'ABHISHEK', 'RAGHOBA', 'SE', 'C', 'C2', 123, 0, '', '', '', '', 3),
('17CE7026', 22, 'WAKADE', 'SAURABH', 'RAJENDRA', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE7027', 4, 'CHOUDHARI', 'JEET', 'NITIN', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7028', 19, 'SINGH', 'SIDDHARTH', 'SANJAY', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7029', 7, 'PATIL', 'JUILEE', 'MAHENDRAKUMAR', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7031', 10, 'GHUTE', 'TEJAS', 'DINESH', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7032', 9, 'GHARAT', 'KIMAYA', 'PRASHANT', 'TE', 'C', 'C1', 123, 7045032321, 'gharat.kimaya410@gmail.com', '', 'CSDLO5013', '', 5),
('17CE7033', 15, 'SHELAR', 'ROHIT', 'ARUN', 'SE', 'C', 'C2', 123, 0, '', '', '', '', 3),
('17CE7035', 17, 'SALGAR', 'SAMARTH', 'DATTATRAY', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE7036', 7, 'GHUTAKE', 'ISHITA', 'VIJAY', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE7037', 9, 'PATKAR', 'SHIVAM', 'RAJESH', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7039', 3, 'KANCHWALA', 'ABBAS', 'MOHAMMEDHUSAIN', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7040', 5, 'MATHURKAR', 'GAURAV', 'MUKUND', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7041', 15, 'SHIRUDE', 'POOJA', 'SOMNATH', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7042', 4, 'KHAN', 'MOHD', 'ASHRAF', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7043', 2, 'KAMBLI', 'ADVAIT', 'VILAS', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7044', 8, 'PATIL', 'SNEHAL', 'DASHARATH', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7045', 17, 'RATHOD', 'RAHUL', 'CHANDU', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE7046', 3, 'CHAUDHARI', 'ROHIT', 'SANJAY', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8001', 18, 'SAHU', 'AKSHAY', 'KUMAR', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8002', 13, 'MANDVE', 'RUCHI', 'RAVINDRA', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8003', 1, 'BHAIRNALLYKA', 'PREETI', 'TUKARAM', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8004', 17, 'TAYADE', 'OM', 'CHANDRAKANT', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8005', 6, 'MORE', 'RISHIKESH', 'PANDHARINATH', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8006', 6, 'J', 'S', 'KANISHQ', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8007', 12, 'LASNE', 'KRUTUJA', 'SUNIL', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE8008', 14, 'NEHETE', 'SHITAL', 'VIRENDRA', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8009', 11, 'POOJARY', 'SHRENIK', 'SADANAND', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8010', 5, 'GORKHE', 'SUMIT', 'NARESH', 'TE', 'C', 'C2', 123, 9757145789, 'sumitgorkhe62@gmail.com', '', 'CSDLO5013', '', 5),
('17CE8011', 2, 'BONDE', 'PRAJAKTA', 'VIKAS', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8012', 21, 'VERMA', 'RITESH', 'SATYA', 'TE', 'C', 'C4', 123, 0, '', '', 'CSDLO5011', '', 5),
('17CE8013', 16, 'AGNANI', 'DIVYANSH', 'KUMAR', 'SE', 'C', 'C1', 123, 0, '', '', '', '', 3),
('17CE8014', 17, 'RATHOR', 'AARYAMAN', 'SHAILENDRA', 'SE', 'C', 'C2', 123, 0, '', '', '', '', 3),
('17CE8015', 1, 'KAKADE', 'SAILI', 'RAVINDRA', 'TE', 'C', 'C3', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8016', 7, 'JOSHI', 'ADWAIT', 'MAKARAND', 'TE', 'C', 'C2', 123, 0, '', '', 'CSDLO5013', '', 5),
('17CE8017', 3, 'CHAVAN', 'MEENAL', 'MILIND', 'TE', 'C', 'C1', 123, 0, '', '', 'CSDLO5013', '', 5),
('18CE1001', 5, 'DESHMUKH', 'OJASWI', 'SANDEEP', 'SE', 'A', 'A2', 123, 0, '', '', '', '', 3),
('18CE1002', 6, 'PENDAM', 'RITIKA', 'RAJESH', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('18CE1003', 6, 'GAMARE', 'VRUSHABH', 'MANGESH', 'SE', 'A', 'A2', 123, 0, '', '', '', '', 3),
('18CE1004', 7, 'JADHAV', 'HEMANT', 'BHARAT', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('18CE1005', 12, 'VISHE', 'JAYKRISHNA', 'SANJAY', 'SE', 'B', 'B3', 123, 0, '', '', '', '', 3),
('18CE1006', 2, 'NAIK', 'ONKAR', 'SANJAY', 'SE', 'B', 'B1', 123, 9867615882, 'naiksonkar@gmail.com', '', '', '', 3),
('18CE1007', 1, 'BHOIR', 'MANISH', 'MOHAN', 'SE', 'A', 'A1', 123, 0, '', '', '', '', 3),
('18CE1008', 13, 'SINGH', 'HEENA', 'REENA', 'SE', 'B', 'B3', 123, 0, '', '', '', '', 3),
('18CE1009', 10, 'KENDRE', 'SHIVAM', 'BALAJI', 'SE', 'A', 'A3', 123, 0, '', '', '', '', 3),
('18CE1010', 2, 'ANDHALE', 'PRANJALI', 'RAJESHWAR', 'SE', 'A', 'A1', 123, 0, '', '', '', '', 3),
('18CE1011', 3, 'PADALKAR', 'MRUNAL', 'VILAS', 'SE', 'B', 'B1', 123, 0, '', '', '', '', 3),
('18CE1012', 8, 'PURUJIT', 'SRINIVASAN', 'SUBASHINI', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('18CE1013', 9, 'SANSARE', 'MIHIR', 'MAHESH', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('18CE1014', 4, 'MHADALEKAR', 'SATYAM', 'SUJIT', 'SE', 'B', 'B1', 123, 0, '', '', '', '', 3),
('18CE1015', 14, 'UIKE', 'SHRADDHA', 'UMESH', 'SE', 'B', 'B3', 123, 0, '', '', '', '', 3),
('18CE1016', 10, 'RAI', 'GAURAV', 'RAKESH', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('18CE1017', 11, 'SHARMA', 'SAGAR', 'AKASH', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('18CE1018', 11, 'KORE', 'MRUNALEE', 'BHASKAR', 'SE', 'A', 'A3', 123, 0, '', '', '', '', 3),
('18CE1019', 5, 'MUJAGE', 'VAIBHAV', 'PANDIT', 'SE', 'B', 'B1', 123, 0, '', '', '', '', 3),
('18CE1020', 15, 'THAKUR', 'GAYATRI', 'SUBHASH', 'SE', 'B', 'B3', 123, 0, '', '', '', '', 3),
('18CE1021', 12, 'PAWAR', 'MIHIR', 'ANAND', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('18CE1022', 6, 'NALE', 'RUTUJA', 'DILIP', 'SE', 'B', 'B1', 123, 0, '', '', '', '', 3),
('18CE1023', 6, 'RAMTEKE', 'PRATIKSHA', 'SANJAY', 'SE', 'B', 'B3', 123, 0, '', '', '', '', 3),
('18CE1024', 14, 'POL', 'SIDDHANT', 'ARUNKUMAR', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3),
('18CE1025', 7, 'PANDEY', 'VEDPRAKASH', 'DHARMENDRA', 'SE', 'B', 'B1', 123, 0, '', '', '', '', 3),
('18CE1026', 3, 'BOROLE', 'SHREYASH', 'SANJAY', 'SE', 'A', 'A1', 123, 0, '', '', '', '', 3),
('18CE1027', 8, 'NANDESHWAR', 'ADVAIT', 'YATISH', 'SE', 'B', 'B1', 123, 8446568170, 'advait.nandeshwar@gmail.com', 'xvoyEd', '', '', 3),
('18CE1028', 7, 'SHIRSAT', 'TEJAL', 'RAHUL', 'SE', 'B', 'B3', 123, 0, '', '', '', '', 3),
('18CE1029', 9, 'PATIL', 'LOKESH', 'JITENDRA', 'SE', 'B', 'B1', 123, 0, '', '', '', '', 3),
('18CE1030', 1, 'ZOPE', 'URVI', 'RAJESH', 'SE', 'B', 'B4', 123, 0, '', '', '', '', 3),
('18CE1031', 12, 'MALLICK', 'DEVJANI', 'RANJIT', 'SE', 'A', 'A3', 123, 0, '', '', '', '', 3),
('18CE1032', 2, 'TAMBOLI', 'PRATIK', 'DEEPAK', 'SE', 'B', 'B4', 123, 0, '', '', '', '', 3),
('18CE1033', 13, 'JHA', 'ANIKET', 'BAIDYANATH', 'SE', 'A', 'A3', 123, 0, '', '', '', '', 3),
('18CE1034', 14, 'KHAIRNAR', 'CHETAN', 'SUNIL', 'SE', 'A', 'A3', 123, 0, '', '', '', '', 3),
('18CE1036', 15, 'JAISWAR', 'AMITKUMAR', 'SURESHKUMAR', 'SE', 'A', 'A3', 123, 0, '', '', '', '', 3),
('18CE1037', 4, 'BAMBLE', 'KARTIK', 'MAHESH', 'SE', 'A', 'A1', 123, 0, '', '', '', '', 3),
('18CE1038', 7, 'GHERKAR', 'YASH', 'VINOD', 'SE', 'A', 'A2', 123, 0, '', '', '', '', 3),
('18CE1039', 15, 'SHELAR', 'VINAY', 'BABAN', 'SE', 'B', 'B2', 123, 0, '', '', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stu_record1`
--

CREATE TABLE `stu_record1` (
  `Roll_no` varchar(9) DEFAULT NULL,
  `Password` varchar(18) DEFAULT '123'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stu_record1`
--

INSERT INTO `stu_record1` (`Roll_no`, `Password`) VALUES
('18CE1007', '123'),
('18CE1010', '123'),
('18CE1026', '123'),
('18CE1037', '123'),
('18CE1041', '123'),
('18CE1042', '123'),
('18CE1052', '123'),
('18CE1055', '123'),
('18CE1058', '123'),
('18CE1067', '123'),
('18CE1068', '123'),
('18CE1073', '123'),
('18CE1074', '123'),
('18CE1078', '123'),
('18CE1079', '123'),
('18CE1081', '123'),
('16CE1042', '123'),
('18CE8013', '123'),
('18CE2005', '123'),
('18CE2015', '123'),
('18CE2023', 'sahil2000'),
('18CE2034', '123'),
('18CE1001', '123'),
('18CE1003', '123'),
('18CE1038', '123'),
('18CE1045', '123'),
('18CE1046', '123'),
('18CE1054', '123'),
('18CE1059', '123'),
('18CE1062', '123'),
('18CE1063', '123'),
('18CE1086', '123'),
('18CE1096', '123'),
('17CE1043', '123'),
('17CE1037', '123'),
('18CE1100', '123'),
('18CE1098', '123'),
('18CE2004', '123'),
('18CE2007', '123'),
('18CE2011', '123'),
('18CE2013', '123'),
('18CE2019', '123'),
('18CE2021', '123'),
('18CE2024', '123'),
('18CE2030', '123'),
('18CE1009', '123'),
('18CE1018', '123'),
('18CE1031', '123'),
('18CE1033', '123'),
('18CE1034', '123'),
('18CE1036', '123'),
('18CE1044', '123'),
('18CE2020', '123'),
('18CE1048', '123'),
('18CE1049', '123'),
('18CE1050', '123'),
('18CE1064', '123'),
('18CE1065', '123'),
('18CE1066', '123'),
('18CE1071', '123'),
('18CE1088', '123'),
('18CE1094', '123'),
('18CE1095', '123'),
('18CE1097', '123'),
('18CE2002', '123'),
('18CE2009', '123'),
('18CE2027', '123'),
('18CE2032', '123'),
('17CE1039', '123'),
('18CE1006', '123'),
('18CE1011', '123'),
('18CE1014', '123'),
('18CE1019', '123'),
('18CE1022', '123'),
('18CE1025', '123'),
('18CE1027', '123'),
('18CE1029', '123'),
('18CE1061', '123'),
('18CE1087', '123'),
('18CE1089', '123'),
('18CE1091', '123'),
('18CE2001', '123'),
('18CE2008', '123'),
('18CE2010', '123'),
('18CE2014', '123'),
('18CE2016', '123'),
('18CE2018', '123'),
('18CE2022', '123'),
('18CE2028', '123'),
('18CE1002', '123'),
('18CE1004', '123'),
('18CE1012', '123'),
('18CE1013', '123'),
('18CE1016', '123'),
('18CE1017', '123'),
('18CE1021', '123'),
('18CE2006', '123'),
('18CE1024', '123'),
('18CE1039', '123'),
('18CE1040', '123'),
('17CE2038', '123'),
('17CE2020', '123'),
('18CE1043', '123'),
('18CE1051', '123'),
('18CE1069', '123'),
('18CE1070', '123'),
('18CE1075', '123'),
('18CE1023', '123'),
('18CE1028', '123'),
('18CE2025', '123'),
('18CE2026', '123'),
('18CE2029', '123'),
('18CE2033', '123'),
('18CE1005', '123'),
('18CE1008', '123'),
('18CE1015', '123'),
('18CE1020', '123'),
('17CE2012', '123'),
('17CE2018', '123'),
('18CE1030', '123'),
('18CE1032', '123'),
('18CE1047', '123'),
('18CE1053', '123'),
('18CE1057', '123'),
('18CE1060', '123'),
('18CE1072', '123'),
('18CE1076', '123'),
('18CE1077', '123'),
('18CE1080', '123'),
('18CE1082', '123'),
('18CE1093', '123'),
('18CE2003', '123'),
('18CE2012', '123'),
('18CE2017', '123'),
('18CE2031', '123'),
('18CE7002', '123'),
('18CE7003', '123'),
('18CE7008', '123'),
('18CE7014', '123'),
('18CE7025', '123'),
('18CE7027', '123'),
('18CE7028', '123'),
('18CE7032', '123'),
('18CE7034', '123'),
('18CE7035', '123'),
('18CE7037', '123'),
('18CE7038', '123'),
('18CE8003', '123'),
('18CE8005', '123'),
('18CE8006', '123'),
('17CE8013', '123'),
('18CE8007', '123'),
('18CE8014', '123'),
('18CE8020', '123'),
('18CE7004', '123'),
('18CE7005', '123'),
('18CE7006', '123'),
('18CE7007', '123'),
('18CE7010', '123'),
('18CE7012', '123'),
('18CE7015', '123'),
('18CE7019', '123'),
('18CE7021', '123'),
('18CE7024', '123'),
('18CE7026', '123'),
('17CE7033', '123'),
('17CE7025', '123'),
('17CE8014', '123'),
('18CE7029', '123'),
('18CE7033', '123'),
('18CE7040', '123'),
('18CE8001', '123'),
('18CE8004', '123'),
('18CE8008', '123'),
('18CE8010', '123'),
('18CE8016', '123'),
('18CE8017', '123'),
('18CE8019', '123'),
('18CE8021', '123'),
('18CE7001', '123'),
('18CE7009', '123'),
('18CE7011', 'RIYA1234'),
('18CE7013', '123'),
('18CE7016', '123'),
('18CE7017', '123'),
('18CE7018', '123'),
('18CE7020', '123'),
('18CE7022', '123'),
('18CE7030', '123'),
('18CE7031', '123'),
('18CE7036', '123'),
('18CE7041', '123'),
('18CE8002', '123'),
('18CE8011', '123'),
('18CE8012', '123'),
('18CE8015', '123'),
('18CE8022', '123'),
('18CE8023', '123'),
('17CE1014', '123'),
('17CE1019', '123'),
('17CE1083', '123'),
('18CE5012', '123'),
('18CE5010', '123'),
('17CE1067', '123'),
('18CE5021', '123'),
('18CE5020', '123'),
('17CE1064', '123'),
('17CE2001', '123'),
('18CE5002', '123'),
('17CE1004', '123'),
('17CE1029', '123'),
('18CE5023', '123'),
('18CE5019', '123'),
('18CE5011', '123'),
('17CE1095', '123'),
('15CE1067', '123'),
('13CE2023', '123'),
('17CE1044', '123'),
('17CE1046', '123'),
('17CE1010', '123'),
('17CE2010', '123'),
('17CE2025', '123'),
('17CE1065', '123'),
('17CE1055', '123'),
('17CE2011', '123'),
('17CE2017', '123'),
('17CE1070', '123'),
('17CE1045', '123'),
('17CE1018', '123'),
('17CE1012', '123'),
('17CE1063', '123'),
('17CE1028', '123'),
('17CE1051', '123'),
('17CE1042', '123'),
('17CE1006', '123'),
('17CE1093', '123'),
('17CE1073 ', '123'),
('17CE1013', '123'),
('17CE1008', '123'),
('17CE1035', '123'),
('17CE2027', 'peeyaiu3'),
('17CE1007', '123'),
('17CE1033', '123'),
('17CE1031', '123'),
('17CE1085', '123'),
('17CE1080', '123'),
('17CE1017', '123'),
('18CE5003', '123'),
('17CE1076', '123'),
('17CE2003', '123'),
('16CE1052', '123'),
('17CE2039', '123'),
('18CE5014', '123'),
('18CE5024', '123'),
('17CE2004', '123'),
('17CE1081', '123'),
('17CE1021', '123'),
('17CE1056', '123'),
('17CE1052', '123'),
('17CE1071', '123'),
('17CE1024', '123'),
('00CE0000', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cultural_docs`
--
ALTER TABLE `cultural_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultural_list`
--
ALTER TABLE `cultural_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_docs`
--
ALTER TABLE `sports_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_list`
--
ALTER TABLE `sports_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cultural_docs`
--
ALTER TABLE `cultural_docs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `cultural_list`
--
ALTER TABLE `cultural_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sports_docs`
--
ALTER TABLE `sports_docs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `sports_list`
--
ALTER TABLE `sports_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
