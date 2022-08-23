-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2022 at 09:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nidcard_222`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(2) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `front_img` varchar(1000) NOT NULL DEFAULT '1',
  `back_img` varchar(1000) NOT NULL DEFAULT '1',
  `text_color` varchar(100) NOT NULL DEFAULT 'black',
  `mt_img` varchar(100) NOT NULL DEFAULT '114',
  `ml_img` varchar(100) NOT NULL DEFAULT '88',
  `mr_img` varchar(100) NOT NULL DEFAULT '0',
  `mb_img` varchar(100) NOT NULL DEFAULT '0',
  `mt_name` varchar(100) NOT NULL DEFAULT '15',
  `mb_name` varchar(100) NOT NULL DEFAULT '0',
  `mt_qr` varchar(100) NOT NULL DEFAULT '30',
  `ml_qr` varchar(100) NOT NULL DEFAULT '100',
  `mr_qr` varchar(100) NOT NULL DEFAULT '0',
  `mb_qr` varchar(100) NOT NULL DEFAULT '0',
  `mt_info` varchar(100) NOT NULL DEFAULT '150',
  `ml_info` varchar(100) NOT NULL DEFAULT '10',
  `mr_info` varchar(100) NOT NULL DEFAULT '0',
  `mb_info` varchar(100) NOT NULL DEFAULT '0',
  `type` enum('vertical','horizontal') NOT NULL DEFAULT 'vertical'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `card_name`, `front_img`, `back_img`, `text_color`, `mt_img`, `ml_img`, `mr_img`, `mb_img`, `mt_name`, `mb_name`, `mt_qr`, `ml_qr`, `mr_qr`, `mb_qr`, `mt_info`, `ml_info`, `mr_info`, `mb_info`, `type`) VALUES
(1, 'Sanmarg', 'Sanmarg_Front-1.jpg', 'Sanmarg_BACK-2a.jpg', 'black', '114', '80', '0', '0', '2', '0', '30', '88', '0', '0', '150', '21', '0', '0', 'vertical'),
(2, 'Saraswati Print Factory Pvt. Ltd.', 'Press Card Front_spf.jpg', 'Press Card Back_spf.jpg', 'maroon', '118', '79', '0', '0', '13', '0', '30', '87', '0', '0', '148', '19', '0', '0', 'vertical'),
(3, 'Cei Print Pack Pvt. Ltd.', 'Press Card Front.jpg', 'Press Card Back.jpg', 'black', '118', '79', '0', '0', '12', '0', '30', '87', '0', '0', '137', '17', '0', '0', 'vertical'),
(4, 'Tehelka.com Pvt.Ltd.', 'Tehelka-front2.jpg', 'Tehelka-back2.jpg', 'maroon', '32', '304', '0', '0', '113', '0', '138', '338', '0', '0', '172', '40', '0', '0', 'horizontal'),
(5, 'id_card01', 'manoj_id4.jfif', 'manoj_id_back2.jpg', 'maroon', '85', '83', '0', '0', '52', '0', '91', '92', '0', '0', '214', '27', '0', '0', 'vertical'),
(6, 'id_card012', 'manoj_id2.jpg', 'manoj_id_back.jfif', 'crimson', '87', '78', '0', '0', '44', '0', '121', '87', '0', '0', '271', '23', '0', '0', 'vertical'),
(7, 'Test1', 'card1.jpg', 'card2bk.jpg', 'green', '114', '79', '0', '0', '15', '0', '30', '97', '0', '0', '150', '36', '0', '0', 'vertical'),
(8, 'gggggggggggg_card', 'manoj_id4.jfif', 'manoj_id_back2.jpg', 'maroon', '84', '82', '0', '0', '67', '0', '91', '95', '0', '0', '228', '30', '0', '0', 'vertical');

-- --------------------------------------------------------

--
-- Table structure for table `card_design`
--

CREATE TABLE `card_design` (
  `card_id` int(2) NOT NULL,
  `card_company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_design`
--

INSERT INTO `card_design` (`card_id`, `card_company`) VALUES
(5, '	 Sanmarg'),
(6, 'Tehelka.com Pvt.Ltd.'),
(7, 'Cei Print Pack Pvt. Ltd.'),
(8, 'Art Printing House Pvt. Ltd.'),
(9, 'Newzstreet Broadcasting Services Pvt. Ltd.'),
(10, 'Ragp 2021 Student Identity Card'),
(11, 'Saraswati Print Factory Pvt. Ltd.'),
(12, 'new card');

-- --------------------------------------------------------

--
-- Table structure for table `department_table`
--

CREATE TABLE `department_table` (
  `department_id` int(2) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_table`
--

INSERT INTO `department_table` (`department_id`, `department_name`) VALUES
(6, 'It Department'),
(15, 'Graphics Department'),
(16, 'Service Department'),
(19, 'Printing Department'),
(22, 'Editing Department'),
(28, 'Content Department'),
(35, 'Editorial'),
(36, 'Sales'),
(37, 'Reporter'),
(38, 'Marketing'),
(39, 'Reporting'),
(44, 'IT'),
(45, 'Events'),
(46, 'Accounts'),
(47, 'Sales &Marketing'),
(48, 'Sales & Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `designation_table`
--

CREATE TABLE `designation_table` (
  `designation_id` int(2) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `department_id` varchar(100) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation_table`
--

INSERT INTO `designation_table` (`designation_id`, `designation_name`, `department_id`) VALUES
(3, 'System Adminstration', '0'),
(9, 'Senior Graphics Designer', '0'),
(10, 'Web Developer', '0'),
(13, 'Graphics Designer', '0'),
(21, 'HR Manager', '0'),
(26, 'Sub-Editor', 'none'),
(27, 'Sr.Sub-Editor', 'none'),
(28, 'Sales Executive', 'none'),
(29, 'Consulting Editor', 'none'),
(30, 'Reporter', 'none'),
(31, 'Marketing', 'none'),
(32, 'Special Correspondent', 'none'),
(35, 'Sr.IT Executive', 'none'),
(36, 'Brand & Events coordinator', 'none'),
(37, 'GM Events', 'none'),
(38, 'GM', 'none'),
(39, 'Bill Collector', 'none'),
(40, 'Bureau Chief North', 'none'),
(41, 'DGM Sales', 'none'),
(42, 'Sales Director ', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table2`
--

CREATE TABLE `employee_table2` (
  `id` int(2) NOT NULL,
  `name` varchar(111) NOT NULL,
  `mobile` varchar(111) NOT NULL,
  `emargency` varchar(111) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(111) NOT NULL,
  `image` varchar(111) NOT NULL,
  `date_of_birth` varchar(111) NOT NULL,
  `blood_group` varchar(111) NOT NULL,
  `joining_date` varchar(50) NOT NULL,
  `emp_id` varchar(111) NOT NULL,
  `department` varchar(111) NOT NULL,
  `designation` varchar(111) NOT NULL,
  `date_of_issue` varchar(111) NOT NULL,
  `date_of_expiry` varchar(111) NOT NULL,
  `qr` varchar(111) NOT NULL DEFAULT '1',
  `is_resign` enum('no','yes') NOT NULL DEFAULT 'no',
  `status` enum('active','unactive') NOT NULL DEFAULT 'active',
  `add_by` enum('admin','superadmin','hr','user') NOT NULL DEFAULT 'hr',
  `status_id` varchar(100) NOT NULL DEFAULT '1',
  `printed` enum('1','0') NOT NULL DEFAULT '0',
  `print_no` varchar(111) NOT NULL DEFAULT '0',
  `emp_data_id` varchar(111) NOT NULL DEFAULT '1',
  `company_id` varchar(111) NOT NULL,
  `qr_generated` enum('1','0') NOT NULL DEFAULT '0',
  `approved` enum('1','0') NOT NULL DEFAULT '0',
  `printed_date` varchar(100) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reason_for_duplicate` varchar(111) NOT NULL DEFAULT 'test',
  `duplicate_by_snapshot` varchar(1000) NOT NULL DEFAULT '1',
  `card_status` enum('delivered','not delivered','on way','cancel') NOT NULL DEFAULT 'on way',
  `card_status_position_date_time` varchar(100) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `card_status_position_chang_by` varchar(100) NOT NULL DEFAULT 'none',
  `password` varchar(100) NOT NULL DEFAULT 'user',
  `emp_type` enum('admin','user','superadmin','hr') NOT NULL DEFAULT 'user',
  `update_by_name` varchar(100) NOT NULL DEFAULT 'none',
  `update_reason` varchar(500) NOT NULL DEFAULT 'none',
  `update_by_type` varchar(100) NOT NULL DEFAULT 'none',
  `update_date` varchar(100) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_day` varchar(50) NOT NULL DEFAULT 'none',
  `img_Update_by` varchar(1000) NOT NULL DEFAULT 'none',
  `card_status_position_change_by_name` varchar(100) NOT NULL DEFAULT 'none',
  `card_status_position_change_by_emp_id` varchar(100) NOT NULL DEFAULT 'none',
  `update_by_person_emp_id` varchar(100) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table2`
--

INSERT INTO `employee_table2` (`id`, `name`, `mobile`, `emargency`, `email`, `address`, `image`, `date_of_birth`, `blood_group`, `joining_date`, `emp_id`, `department`, `designation`, `date_of_issue`, `date_of_expiry`, `qr`, `is_resign`, `status`, `add_by`, `status_id`, `printed`, `print_no`, `emp_data_id`, `company_id`, `qr_generated`, `approved`, `printed_date`, `reason_for_duplicate`, `duplicate_by_snapshot`, `card_status`, `card_status_position_date_time`, `card_status_position_chang_by`, `password`, `emp_type`, `update_by_name`, `update_reason`, `update_by_type`, `update_date`, `update_day`, `img_Update_by`, `card_status_position_change_by_name`, `card_status_position_change_by_emp_id`, `update_by_person_emp_id`) VALUES
(1, 'superadmin22', '99999999990', '99999999990', 'superadmin@gmail.com', 'baruipur,kolkata', 'im2.jfif', '1996-12-06', 'AB+', '2022-03-01', 'SA000', 'It Department', 'Web Developer', '2022-03-02', '2023-03-03', 'superadmin22.png', 'no', 'active', 'superadmin', '1', '1', '18', '1', 'Sanmarg', '1', '0', '2022-05-03 12:35:32', 'ertert', '', 'on way', '2022-05-03 12:35:32', 'admin', 'superadmin192', 'superadmin', 'superadmin22', 'test', 'superadmin', '2022-04-19 16:15:45', 'Tuesday', 'none', 'Admin', 'AD000', 'SA000'),
(2, 'hr', '9999999999', '9999999999', 'hr@gmail.com', 'superadmin address', 'img3.jfif', '1997-01-01', 'AB+', '2022-03-01', 'HR100', 'It Department', 'System Adminstration', '2022-03-02', '2025-01-01', 'hr.png', 'no', 'active', 'superadmin', '1', '1', '5', '1', 'Sanmarg', '1', '0', '2022-03-29 15:15:04', 'test', '', 'on way', '2022-03-29 15:15:04', 'superadmin', 'hr192', 'hr', 'manoj', 'test', 'superadmin', '2022-04-09 18:42:15', 'Saturday', 'none', 'superadmin', 'SA155', '155'),
(8, 'Jyoti Narayan', '9432435506', '9831071920', 'xxx@gmail.com', '3A, Amiya Hazra Lane KOL - 16', 'Jyoti Narayan.jpeg', '1995-03-06', 'B+', '0001-01-01', '107', 'Editorial', 'Sr.Sub-Editor', '2022-04-01', '2023-03-31', 'Jyoti Narayan.png', 'no', 'active', 'superadmin', '1', '1', '7', '1', 'Sanmarg', '1', '0', '2022-04-06 14:47:14', 'test', '', 'delivered', '2022-04-06 14:47:14', 'superadmin', 'user', 'user', 'Admin', 'for  card deliverd', 'admin', '2022-04-16 12:22:20', 'Saturday', 'none', 'superadmin', 'SA155', 'AD000'),
(9, 'Piyush Nath Tiwari', '8910442586', '8777375056', 'xxx@gmail.com', ' 6/1 shiv gopal banerjee lane salkia. Pin - 711106', 'Piyush Nath Tiwari.jpeg', '1997-04-29', '', '0001-01-01', '76', 'Sales ', 'Sales Executive ', '2022-04-01', '2023-03-31', 'Piyush Nath Tiwari.png', 'no', 'active', 'superadmin', '1', '1', '13', '1', 'Sanmarg', '1', '0', '2022-04-06 17:14:23', 'test', '', 'delivered', '2022-04-06 17:14:23', 'superadmin', 'user', 'user', 'Admin', 'for  card deliverd', 'admin', '2022-04-16 12:21:39', 'Saturday', 'none', 'superadmin', 'SA155', 'AD000'),
(10, 'Priyanka Shaw', '8584042649', '9874225609', 'xxx@gmail.com', '44/3 sanatan mistry lane oriya para ,Howrah 711106', 'Priyanka Shaw.jpeg', '1998-01-30', ' B+', '0001-01-01', '176', 'Sales ', 'Sales Executive ', '2022-04-01', '2023-03-31', 'Priyanka Shaw.png', 'no', 'active', 'superadmin', '1', '1', '7', '1', 'Sanmarg', '1', '0', '2022-03-30 16:56:02', 'test', '', 'delivered', '2022-03-30 16:56:02', 'superadmin', 'user', 'user', 'Admin', 'for  card deliverd', 'admin', '2022-04-16 12:21:10', 'Saturday', 'none', 'superadmin', 'SA155', 'AD000'),
(11, 'Jamshed Khan', '9811994147', '9899588127', 'xxx@gmail.com', '786D, Ganesh Nagar part 2, Shakarpur Delhi -92', 'Jamshed Khan Pic.jpeg', '1969-07-14', 'O+', '0001-01-01', '47', 'Editorial', 'Consulting Editor', '2022-04-01', '2023-03-31', 'Jamshed Khan.png', 'no', 'active', 'superadmin', '1', '1', '3', '1', 'Sanmarg', '1', '0', '2022-03-30 16:59:37', 'test', '', 'delivered', '2022-03-30 16:59:37', 'superadmin', 'user', 'user', 'Admin', 'for  card deliverd', 'admin', '2022-04-16 12:23:01', 'Saturday', 'none', 'superadmin', 'SA155', 'AD000'),
(15, 'Kanchan', '7678436087', '7838605254', 'xx@gmail.com', '51-A, Arjun Nagar, Safdarjung Enclave, New Delhi 110029.', 'kanchan_Delhi.png', '1990-04-19', 'B+', '0001-01-01', '43', 'Reporting', 'Reporter', '2022-04-01', '2023-03-31', 'Kanchan.png', 'no', 'active', 'superadmin', '1', '1', '25', '1', 'Tehelka.com Pvt.Ltd.', '1', '0', '2022-04-06 18:48:27', 'gfgdg', '1', 'delivered', '2022-04-06 18:48:27', 'superadmin', 'user', 'user', 'Admin', 'for  card deliverd', 'admin', '2022-04-16 12:22:03', 'Saturday', 'none', 'superadmin', 'SA155', 'AD000'),
(16, 'Isha Kumari ', '8910557750', '8583905880', 'xx@gmail.com', 'Sarkarpool, Shibrampur Rd, kolkata 700143', 'isha kumari.jpeg', '1998-12-13', 'B+', '0001-01-01', '149', 'Marketing', 'Sales Executive', '2022-04-01', '2023-03-31', 'Isha Kumari .png', 'no', 'active', 'superadmin', '1', '1', '7', '1', 'Sanmarg', '1', '0', '2022-03-30 18:22:04', 'test', '1', 'delivered', '2022-03-30 18:22:04', 'superadmin', 'user', 'user', 'Admin', 'for  card deliverd', 'admin', '2022-04-16 12:23:22', 'Saturday', 'none', 'superadmin', 'SA155', 'AD000'),
(104, 'VIndhya Vasini Tripathi', '9911788522', '7982760157', 'xx@gmail.com', 'B-51A,Pandav Nagar,delhi-92', 'vv tripathi.jpeg', '1972-08-15', 'O+', '0001-01-01', '21', 'Editorial', 'Special Correspondent', '2022-04-01', '2023-03-31', 'VIndhya Vasini Tripathi.png', 'no', 'active', 'superadmin', '1', '1', '39', '1', 'Sanmarg', '1', '0', '2022-04-09 21:04:51', 'rwgew', '1', 'delivered', '2022-04-09 21:04:51', 'superadmin', 'user', 'user', 'Admin', 'test', 'admin', '2022-04-16 12:04:01', 'Saturday', 'none', 'superadmin', 'SA155', 'AD000'),
(105, 'Jyoti Kumari', '7980869825', '6289934396', 'xx@gmail.com', 'PailanHat, Numens Park (Near IIM Joka, Kol- 700104.', 'Jyoti Kumari.jpeg', '1994-11-15', 'B+', '0001-01-01', '66', 'Editorial', 'Sub-Editor', '2022-04-01', '2023-03-31', 'Jyoti Kumari.png', 'no', 'active', 'superadmin', '1', '1', '3', '1', 'Sanmarg', '1', '0', '2022-03-30 16:59:02', 'test', '1', 'delivered', '2022-03-30 16:59:02', 'superadmin', 'user', 'user', 'Admin', 'for  card deliverd', 'admin', '2022-04-16 12:22:37', 'Saturday', 'none', 'superadmin', 'SA155', 'AD000'),
(112, 'Pranav Sharma', '9830549100', '9830329214', 'pranav.sharma@sanmarg.in', '79/10 Palm Avenue', 'Andriod_Virus.PNG', '1970-01-01', 'AB+', '1970-01-01', '003', 'It Department', 'Sr.Sub-Editor', '1970-01-01', '1970-01-01', 'Pranav Sharma.png', 'no', 'active', 'superadmin', '1', '1', '10', '1', 'Sanmarg', '1', '0', '2022-04-07 15:26:44', 'test', '1', 'on way', '2022-04-07 15:26:44', 'superadmin', 'admin', 'admin', 'manoj', 'test', 'superadmin', '2022-04-09 18:35:39', 'Saturday', 'none', 'superadmin', 'SA155', '155'),
(113, 'Nishchaya', '7838214305', '9868840969', 'editorial@sanmarg.in', 'Flat No.57, Hewo Apartments, Near Sai Baba Mandir Sector - 16A, Kheri Kalan (113), Faridabad, Haryana-121002', 'nichay.JPG', '1995-04-29', 'A+', '2022-04-01', '022', 'Editorial', 'Special Correspondent', '2022-04-01', '2023-03-31', 'Nishchaya.png', 'no', 'active', 'superadmin', '1', '1', '7', '1', 'Sanmarg Pvt Ltd', '1', '0', '2022-04-12 19:40:41', 'test', '1', 'on way', '2022-04-12 19:40:41', 'hr', 'user', 'user', 'superadmin', 'eg', 'superadmin', '2022-04-09 20:59:21', 'Saturday', 'none', 'hr', 'HR100', 'SA155'),
(114, 'Admin', '99999999999', '999999999999', 'admin@gmail.com', 'admin address', 'im1.jfif', '0001-01-01', 'O', '0001-01-01', 'AD000', 'It Department', 'Web Developer', '0001-01-01', '0001-01-01', 'Admin.png', 'no', 'active', 'superadmin', '1', '1', '1', '1', 'Sanmarg', '1', '0', '2022-04-14 18:48:00', 'test', '1', 'on way', '2022-04-14 18:48:00', 'admin', 'admin192', 'admin', 'superadmin', 'test', 'superadmin', '2022-04-13 12:01:59', 'Wednesday', 'none', 'Admin', 'AD000', 'SA155'),
(115, 'user', '89678454545', '89678454545', 'user@gmail.com', 'address', 'im1.jfif', '0001-01-01', 'AB+', '0001-01-01', 'US000', 'Graphics Department', 'Senior Graphics Designer', '0001-01-01', '0001-01-01', 'user.png', 'no', 'active', 'superadmin', '1', '1', '5', '1', 'Sanmarg Pvt Ltd', '1', '0', '2022-04-14 19:11:27', 'test', '1', 'on way', '2022-04-14 19:11:27', 'admin', 'user', 'user', 'user', 'test', 'user', '2022-04-13 15:21:04', 'Wednesday', 'none', 'Admin', 'AD000', 'US000'),
(125, 'Neha Daga', '9830675203', '9330322212', 'neha@gmail.com', '79, GT Road Salkia North 4th Floor  Howrah 6', 'Neha Daga_id_card_img.jpg', '1983-09-07', 'A+', '0001-01-01', '56', 'Events', 'GM', '2022-04-01', '2023-03-31', 'Neha Daga.png', 'no', 'active', 'admin', '1', '1', '4', '1', 'Sanmarg', '1', '0', '2022-05-20 19:15:55', 'Designation Changed', '1', 'on way', '2022-05-20 19:15:55', 'admin', 'user', 'user', 'Admin', 'Designation To be Updated', 'admin', '2022-05-20 19:14:00', 'Friday', 'none', 'Admin', 'AD000', 'AD000'),
(126, 'Sayanti Das', '8536047388', '8777400478', 'xx@gmail.com', 'Malipukur Math, Dumdum Road, Kolkata-700074', 'emp_img/data_sanmarg_Sayanti Das.jpg', '34985', 'B+', '0000-00-00', '86', 'Marketing', 'Sales & Marketing Executive', '44166', '44651', 'Sayanti Das.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(127, 'Suchinta Ghosh', '9064560093', '9836647222', 'xx@gmail.com', 'Vill- Amraberia, Canning, South 24 Parganas, Pin- 743376', 'emp_img/data_sanmarg_suchinta ghosh.png', '34875', 'B+', '0000-00-00', '153', 'Marketing', 'Sales & Marketing Executive', '44166', '44651', 'Suchinta Ghosh.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(128, 'Prosenjit Paul', '9038292232', '9073510004', 'xx@gmail.com', 'Sodepur, L/4, Purbasha, P.O. - Natagarh, Dist. 24 Parganas North, Kolkata-700113', 'emp_img/data_sanmarg_prosenjit-paul.PNG', '30973', 'A+', '0000-00-00', '152', 'IT Dept', 'System Executive ', '15.01.2021', '31.03.22', 'Prosenjit Paul.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(129, 'Sanjib Swarnakar', '9163853761', '8420997649', 'xx@gmail.com', '125/A, Bakar Mahal Sadar Bazar, Barrackpore, Kolkata-700120', 'emp_img/data_sanmarg_sanjib-swarnakar.PNG', '34635', 'O+', '0000-00-00', '108', 'Events', 'Graphics Designer', '18.01.2021', '31.03.22', 'Sanjib Swarnakar.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(130, 'Subhradeep Saha', '7685018942', '7278023036', 'xx@gmail.com', 'Pl. 77, 1No. Airport gate, Motilal Colony, Dumdum, Kolkata-700028', 'emp_img/data_sanmarg_subhradeep-saha.PNG', '33366', 'B+', '0000-00-00', '102', 'Marketing', 'Executive - Sales', '18.01.2021', '31.03.22', 'Subhradeep Saha.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(131, 'Dipchand Bairagi', '9933996029', '9831929423', 'xx@gmail.com', 'South Barasat, Dakhin Kalikapur,Dakhin Barasat P.O, South 24 Parganas,P.S -Joynagar, Pin code- 743372', 'baragi(2).JPG', '1953-08-07', 'O+', '0001-01-01', '138', 'Accounts', 'Bill Collector', '2022-04-01', '2023-03-31', 'Dipchand Bairagi.png', 'no', 'active', 'admin', '1', '1', '2', '1', 'Sanmarg', '1', '0', '2022-07-27 13:31:49', 'for development testing', '1', 'delivered', '2022-07-27 13:31:49', 'admin', 'user', 'user', 'Admin', 'for print new id card', 'admin', '2022-06-30 19:10:10', 'Thursday', '37Monday.png', 'Admin', 'AD000', 'AD000'),
(132, 'Rahul Shaw', '8981587041', '9804203121', 'xx@gmail.com', '85, New Station Road, Hindmotor, Hooghly-712232', 'emp_img/data_sanmarg_rahul-shaw.PNG', '35874', '-', '0000-00-00', '144', 'Scheduling', 'Executive', '15.01.2021', '31.03.22', 'Rahul Shaw.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', '0', '0'),
(133, 'Pawan Kumar Mishra', '8140787842', '8961702273', 'xx@gmail.com', '694, Jessore Road, Kazipara More, Dumdum Kolkata-700028', 'emp_img/data_sanmarg_pawan-kumar-mishra.PNG', '32509', 'A+', '0000-00-00', '147', 'Scheduling', 'Executive', '15.01.2021', '31.03.22', 'Pawan Kumar Mishra.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(134, 'Vinay Kumar Prasad', '9836303516', '8777273755', 'xx@gmail.com', '18/21, RNRC Ghat Road, Shibpur, Howrah-711102', 'emp_img/data_sanmarg_Vinay Kumar Prasad.jpg', '32948', 'B+', '0000-00-00', '171', 'Editorial', 'Sub Editor', '44287', '44651', 'Vinay Kumar Prasad.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'for Update', 'admin', '2022-06-04 12:45:40', 'Saturday', '37Monday.png', 'Admin', '0', 'AD000'),
(135, 'Aakanksha Pathak', '9123397814', '9123397814', 'xx@gmail.com', '100, Mahatma Gandhi Road, Kolkata-700007', 'emp_img/Akanksha Pathak.JPG', '35367', 'O+', '0000-00-00', '102', 'Reporting ', 'Staff reporter ', '44166', '44651', 'Aakanksha Pathak.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(136, 'Abhishek Shaw', '7003279303', '7003252098', 'xx@gmail.com', '19, Guha Road, Ghusuri, Howrah-711107', 'emp_img/Abhishek Shaw.jpg', '33771', 'O+', '0000-00-00', '123', 'IT', 'IT Executive', '44166', '44651', 'Abhishek Shaw.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(137, 'Akash Tiwari', '9836411555', '9163216697', 'xx@gmail.com', '17/2,S. N Banerjee lane, Salkia, Howrah-711106', 'emp_img/Akash Tiwari.jpg', '33725', 'AB +', '0000-00-00', '20', 'IT', 'IT Executive', '44166', '44651', 'Akash Tiwari.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(138, 'Anand Kumar Choudhary', '9883352160', '9903499937', 'xx@gmail.com', '4, Tiljala Road, Kolkata-700039', 'emp_img/anand choudhary.jpg', '32045', 'B+', '0000-00-00', '146', 'Editorial', 'DTP operator ', '44166', '44651', 'Anand Kumar Choudhary.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(139, 'Anand Mohan Singh', '9903626701', '6290052136', 'xx@gmail.com', '51/2, Rabindra Sarani, Liluah, Howrah-711204', 'emp_img/Anand Mohan Singh.jpg', '29688', 'Ab+', '0000-00-00', '58', 'Reporting', 'Correspondent', '44166', '44651', 'Anand Mohan Singh.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', '0', '0'),
(140, 'Arindam Sarkar', '9007094762', '8777836172', 'xx@gmail.com', '10 No. Anandashree 2nd lane, Garia, Kolkata-700084', 'emp_img/Arindam Sarkar.jpg', '29911', 'AB+', '0000-00-00', '175', 'IT', 'IT Executive', '44166', '44651', 'Arindam Sarkar.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(141, 'Arvind Saigal', '9163371078', '9831313525', 'xx@gmail.com', 'Heera Apartment,Fl-102,34, Ekbaalpore Road, Khidderpore, Kolkata-700023', 'emp_img/arvind saigal.jpeg', '21497', 'B+ ', '0000-00-00', '174', 'Sales & Marketing', 'General Manager', '44166', '44651', 'Arvind Saigal.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(142, 'DEBASIS SARKAR', '9830471960', '9830991960', 'xx@gmail.com', '12/9  Padmpukur Road, Kiran Kunja, Flat No. - A2, 1st floorKolkata-700092', 'emp_img/Debasis Sarkar.jpg', '21920', 'O+', '0000-00-00', '168', 'Sales & Marketing', 'Dy. General Manager', '44166', '44651', 'DEBASIS SARKAR.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(143, 'Debpriya chakraborty ', '6290624906', '8822202226', 'xx@gmail.com', '93, Moore Avenue, Flat No. - B2, Excelsior, Kolkata-700040', 'emp_img/debpriya chakraborty.jpg', '34159', 'B-', '0000-00-00', '173', 'Sales & Marketing', 'Executive ', '44166', '44651', 'Debpriya chakraborty .png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(144, 'Indrasen Shahi', '9004973350', '9007864055', 'xx@gmail.com', 'J-345, Baishnabghata Patuli Township, Kolkata-700094', 'emp_img/Indrasen Shahi.jpeg', '29200', 'O+', '0000-00-00', '99', 'Sales & Marketing', 'Assistant General Manager', '44166', '44651', 'Indrasen Shahi.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(145, 'Isha Agarwal ', '7980387587', '6291789939', 'xx@gmail.com', '21/1, Rose Mary Lane, New Building, Howrah-711101', 'emp_img/ISHA AGARWAL.jpg', '34767', 'O+', '0000-00-00', '31', 'Accounts', 'Accounts Assistant', '44166', '44651', 'Isha Agarwal .png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(146, 'Ishawer kumar shriwastva', '9903025994', '9088348456', 'xx@gmail.com', '14, Tagore Castle Street, Kolkata-700006', 'emp_img/Ishawer Sriwastva.jpg', '26677', 'Ab+', '0000-00-00', '126', 'Reporting', 'Paginator', '44166', '44651', 'Ishawer kumar shriwastva.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', '0', '0'),
(147, 'Jokhan Prasad Tripathi', '9073115638', '9875565454', 'xx@gmail.com', '3,MSTC, 1st bye lane, Jagadgatri Apartment, Howrah-711101', 'emp_img/Jokhan Prasad Tripathi.jpg', '24988', 'B+', '0000-00-00', '35', 'Reporting ', 'Senior Paginator', '44166', '44651', 'Jokhan Prasad Tripathi.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(148, 'Jyoti Pandey', '8240532511', '9163172345', 'xx@gmail.com', '6/1, Gopi Mondal Road, Cossipore, Kolkata-700002', 'emp_img/jyoti pandey.jpeg', '31814', 'A+', '0000-00-00', '22', 'Secretarial', 'Assistant Company Secretary', '44166', '44651', 'Jyoti Pandey.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(149, 'Kalpana Singh ', '9038841021', '9830910113', 'xx@gmail.com', '2/4, B  B Sengupta Road, Kolkata-700034', 'emp_img/Kalpana Singh.jpg', '34686', 'O+', '0000-00-00', '13', 'Editorial ', 'Senior Sub Editor ', '44166', '44651', 'Kalpana Singh .png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(150, 'Kaushal Naudiyal', '9930047424', '9819726796', 'xx@gmail.com', '304, Bhagwati Bhavan, Mahatma Phule Nagar, Behind ESIC Hospital, Thane, Mumbai-400606', 'emp_img/kaushal naudiyal.jpg', '28637', 'O+', '0000-00-00', '0', 'Sales & Marketing ', 'Manager ', '44166', '44651', 'Kaushal Naudiyal.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(151, 'Kritika Gourisaria', '8910278044', '9681615217', 'xx@gmail.com', '67/45 Strand Road,Gourisaria Bhawan,Kolkata-700007', 'emp_img/Kritika Gourisaria.jpg', '34059', 'B positive', '0000-00-00', '34', 'Accounts', 'Accounts Coordinator', '44166', '44651', 'Kritika Gourisaria.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(152, 'Mukta Sharma', '9831802454', '9831692492', 'xx@gmail.com', 'BD-39, Neelkamal Apartment, 3rd floor, Flat-301/A, Rabindrapally, Kestopur, Kolkata-700101', 'emp_img/mukta sharma.jpeg', '36370', 'B+', '0000-00-00', '151', 'Admin', 'Back Office Executive', '44166', '44651', 'Mukta Sharma.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(153, 'Padma Maheshwari', '8420761119', '9830244801', 'xx@gmail.com', '6, Tansukh Lane, Burrabazar, Kolkata-700007', 'emp_img/padma maheshwari.jpeg', '34370', 'B+', '0000-00-00', '149', 'Admin', 'Back Office Executive', '44166', '44651', 'Padma Maheshwari.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', '0', '0'),
(154, 'Payel Das', '9804847884', '9339950214', 'xx@gmail.com', '36 H/9, Harish Neogi Road, Kolkata-700067', 'emp_img/Payel Das.jpg', '33958', 'A+', '0000-00-00', '67', 'IT', 'Web Developer', '44166', '44651', 'Payel Das.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(155, 'Poonam Biswas', '7044083776', '9007084010', 'xx@gmail.com', 'Sandhyadeep, 71/65, Bose Para Road, Kolkata-700008', 'emp_img/poonam biswas.jpeg', '34524', 'O+', '0000-00-00', '117', 'Public Relations', 'General Manager', '44166', '44651', 'Poonam Biswas.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(156, 'Prerna Bothra', '8981247370', '8017022505', 'xx@gmail.com', '2/5A, Chittaranjan Colony, Kolkata-700092', 'emp_img/Prerna Bothra.jpg', '33563', 'O+', '0000-00-00', '145', 'Accounts', 'Accountant', '44166', '44651', 'Prerna Bothra.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(157, 'Pritam Sankhari', '8013285834', '9831623207', 'xx@gmail.com', '11, Ramlal Bazar Road, Kolkata-700078', 'emp_img/Pritam Sankhari.jpg', '35914', 'B+', '0000-00-00', '116', 'IT', 'Web Developer', '44166', '44651', 'Pritam Sankhari.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(158, 'Priti Jhawar', '8274844918', '9903065256', 'xx@gmail.com', '3A, Darpa Narayan Tagore Street, Kolkata-700006', 'emp_img/Priti Jhawar.jpg', '35058', 'A+', '0000-00-00', '39', 'Accounts', 'Accounts Assistant', '44166', '44651', 'Priti Jhawar.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(159, 'Puja agarwal', '9163878552', '9681503016', 'xx@gmail.com', '1A, Chatterjee Lane, Kolkata-700012', 'emp_img/puja agarwal.jpg', '33672', 'A+', '0000-00-00', '32', 'Admin', 'Data entry operator', '44166', '44651', 'Puja agarwal.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(160, 'Rajiv Kumar shrivastawa ', '8902676158', '9830961106', 'xx@gmail.com', '346/3, S K Nagar Rishra, Hooghly-712249', 'emp_img/Rajiv Shrivastawa.jpg', '29992', 'O+', '0000-00-00', '139', 'Editorial ', 'Trainee Paginator', '44166', '44651', 'Rajiv Kumar shrivastawa .png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', '0', '0'),
(161, 'Rini Chakraborty ', '7003252391', '9836608621', 'xx@gmail.com', 'Madhyamgram, Abdalpur, North 24 pgns,Kolkata-700155', 'emp_img/rini chakraborty.jpg', '35792', 'O+', '0000-00-00', '110', 'Public Relations', 'Trainee - PR', '44166', '44651', 'Rini Chakraborty .png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(162, 'Saroj Kumar Singh', '9681988716', '9681988715', 'xx@gmail.com', '5/1/1A, Durga Charan Mitra Street,1st floor, Kolkata-700006', 'emp_img/Saroj kumar Singh.jpg', '30310', 'B+', '0000-00-00', '57', 'Reporting', 'Senior Paginator', '44166', '44651', 'Saroj Kumar Singh.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(163, 'Sonu Kumar Keshav', '9716306003', '9311596133', 'xx@gmail.com', 'Q-26, 2nd floor, Mohan Garden, Uttam Nagar, New Delhi-110059', 'emp_img/Sonu keshav.jpg', '28738', 'O+ positive', '0000-00-00', '0', 'Accounts', 'Accounts Coordinator', '44166', '44651', 'Sonu Kumar Keshav.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(164, 'Subhajeet Das', '8017305087', '9051816923', 'xx@gmail.com', '20,Nayapally Road, Belghoria-700056', 'emp_img/Subhajeet Das.jpg', '32479', 'O+', '0000-00-00', '131', 'Reporting', 'Graphic Designer', '44166', '44651', 'Subhajeet Das.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(165, 'Tulika Goswami Kanrar', '9674623297', '9830400730', 'xx@gmail.com', 'Sankrail Champatala,Opp. SBI ATM Howrah-711313', 'emp_img/Tulika Goswami.jpg', '32472', 'o+', '0000-00-00', '172', 'Admin', 'Assistant to Managing Director', '44166', '44651', 'Tulika Goswami Kanrar.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(166, 'Urvashi Mundhra ', '8100370163', '8820091055', 'xx@gmail.com', '68,Kashinath Chatterjee Lane, Shibpur, Howrah-711102', 'emp_img/urvashi mundhra.jpeg', '34976', 'A+', '0000-00-00', '150', 'San ', 'Event Coordinator', '44166', '44651', 'Urvashi Mundhra .png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(167, 'Vishnupriya Taparia', '9830459558', '9830512558', 'xx@gmail.com', '9b, New Tangra Road, PS Palm Spring, Flat-5A, Kolkata-700046', 'emp_img/vishnupriya.jpeg', '1989-12-08', 'B+', '0001-01-01', '109', 'San Entertainment LLP', 'Event Head', '2022-04-01', '2023-03-31', 'Vishnupriya Taparia.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'for Update', 'admin', '2022-06-04 12:39:00', 'Saturday', '37Monday.png', 'Admin', '0', 'AD000'),
(168, 'Preeti Prasad', '8240293930', '9903834711', 'xx@gmail.com', '59, K C Ghosh Road, Binayak Enclave, Kolkata-700059', 'emp_img/preeti-prasad.jpg', '33556', 'B+', '0000-00-00', '104', 'Classified', 'Executive', '44166', '44651', 'Preeti Prasad.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(169, 'Alok Pathak', '9051602500', '9830597843', 'xx@gmail.com', ' ', 'emp_img/data_sanmarg_alok-pathak.PNG', '33797', 'O+', '0000-00-00', '69', 'Media Marketing ', 'Assistant Manger', '44166', '44651', 'Alok Pathak.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(170, 'Ravi Shankar Singh', '8902477770', '8902477770', 'xx@gmail.com', 'ASMI ABASAN, 3RD FLOOR, 18, SARAT BOSE ROAD,Dist Darjeeling', 'emp_img/emp_img/RAVISHANKAR SINGH.jpg', '10.03.1973', 'B+', '0000-00-00', '51', 'Reporting', 'Bureau chief ', '44287', '44651', 'Ravi Shankar Singh.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(171, 'Vishal Goswami', '6297740074', '6297740074', 'xx@gmail.com', 'DURGA NAGAR SILIGURI, PS- BHAKTINAGAR DIST- JALPAIGURI 734001', 'emp_img/emp_img/VISHAL GOSWAMI.jpg', '1995-05-02', 'B-', '0001-01-01', '52', 'Reporting', 'Sr. Reporter', '2022-04-01', '2023-03-31', 'Vishal Goswami.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'for Update', 'admin', '2022-06-04 12:42:39', 'Saturday', '37Monday.png', 'Admin', '0', 'AD000'),
(172, 'Abhijit Dey', '9733046320', '9733046320', 'xx@gmail.com', '31/A, GREEN AVENUE SARANI EAST VIVEKANANDA PALLY', 'emp_img/emp_img/ABHIJIT DEY.jpg', '14.04.1983', 'B-', '0000-00-00', '53', 'Reporting', 'Paginator', '44287', '44651', 'Abhijit Dey.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(173, 'Rakesh Pandey', '8910554519', '8910554519', 'xx@gmail.com', ' Satdal appartment, Haiderpada, Silliguri', 'emp_img/emp_img/RAKESH PANDEY.jpg', '01.08.1982', 'B+', '0000-00-00', '54', 'Reporting', 'Special Correspondent', '44287', '44651', 'Rakesh Pandey.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(174, 'Kajal Das', '9832087506', '9832087506', 'xx@gmail.com', 'AROBINDA PALLY, SILIGURI, P.S. RABINDRA SARANI, DIST. DARJEELING', 'emp_img/emp_img/KAJAL DAS.jpg', '04.01.1976', 'A+', '0000-00-00', '55', 'Reporting', 'Circulation Executive ', '44287', '44651', 'Kajal Das.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', '0', '0'),
(175, 'Tanmoy Mukherjee', '9832062484', '9832062484', 'xx@gmail.com', 'CHAYAN PARA BAZAR, GHOGOMALI,  WARD NO. 37, SILIGURI', 'emp_img/emp_img/TONMAY MUKHERJEE.jpg', '14.11.1981', 'O+', '0000-00-00', '56', 'Reporting', 'Circulation Executive ', '44287', '44651', 'Tanmoy Mukherjee.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(176, 'Jayjit Acharjee', '9475303242', '9475303242', 'xx@gmail.com', 'Hakimpara,rash Behari saroni,Po.Ps Siliguri, Dist Darjeeling', 'emp_img/emp_img/JAIJIT ACHARIYA.jpg', '01.07.1975', 'O+', '0000-00-00', '57', 'Reporting', 'Photographer', '44287', '44651', 'Jayjit Acharjee.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(177, 'Dibesh Jha', '9775186279', '9775186279', 'xx@gmail.com', 'HIMALAYA RESIDENY, HIGH FLAT  B3/1, BABUPARA, SILIGURI', 'emp_img/emp_img/JAIJIT ACHARIYA.jpg', '10.01.1990', 'O+', '0000-00-00', '58', 'Reporting', 'Adv. Executive ', '44287', '44651', 'Dibesh Jha.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(178, 'Khokan Saha', '9832427946', '9832427946', 'xx@gmail.com', 'MAJHABARI, GHOGOMALI, SILIGURI', 'emp_img/emp_img/KHOKAN SAHA.jpg', '13.01.1990', 'O+', '0000-00-00', '59', 'Reporting', 'Clerk', '44287', '44651', 'Khokan Saha.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(179, 'Laxmi  Sharma ', '9475226451', '9475226451', 'xx@gmail.com', 'MIddile  Santi nagar, Siliguri', 'emp_img/emp_img/LAXMI SHARMA.jpg', '11.02.1976', 'O+', '0000-00-00', '60', 'Reporting', 'Sr. Reporter', '44287', '44651', 'Laxmi  Sharma .png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(180, 'Ravi Shankar Singh', '8902477770', '8902477770', 'xx@gmail.com', 'ASMI ABASAN, 3RD FLOOR, 18, SARAT BOSE ROAD,Dist Darjeeling', 'emp_img/emp_img/RAVISHANKAR SINGH.jpg', '10.03.1973', 'B+', '0000-00-00', '51', 'Reporting', 'Bureau chief ', '44287', '44651', 'Ravi Shankar Singh.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(181, 'Vishal Goswami', '6297740074', '6297740074', 'xx@gmail.com', 'DURGA NAGAR SILIGURI, PS- BHAKTINAGAR DIST- JALPAIGURI 734001', 'emp_img/emp_img/VISHAL GOSWAMI.jpg', '02.05.1995', 'B-', '0000-00-00', '52', 'Reporting', 'Sr. Reporter', '44287', '44651', 'Vishal Goswami.png', 'no', 'active', 'admin', '1', '1', '1', '1', 'Sanmarg', '1', '0', '2022-07-13 16:03:21', 'testing', '1', 'delivered', '2022-07-13 16:03:21', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', 'AD000', '0'),
(182, 'Rakesh Pandey', '8910554519', '8910554519', 'xx@gmail.com', ' Satdal appartment, Haiderpada, Silliguri', 'emp_img/emp_img/RAKESH PANDEY.jpg', '01.08.1982', 'B+', '0000-00-00', '54', 'Reporting', 'Special Correspondent', '44287', '44651', 'Rakesh Pandey.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(183, 'Kajal Das', '9832087506', '9832087506', 'xx@gmail.com', 'AROBINDA PALLY, SILIGURI, P.S. RABINDRA SARANI, DIST. DARJEELING', 'emp_img/emp_img/KAJAL DAS.jpg', '04.01.1976', 'A+', '0000-00-00', '55', 'Reporting', 'Circulation Executive ', '44287', '44651', 'Kajal Das.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(184, 'Tanmoy Mukherjee', '9832062484', '9832062484', 'xx@gmail.com', 'CHAYAN PARA BAZAR, GHOGOMALI,  WARD NO. 37, SILIGURI', 'emp_img/emp_img/TONMAY MUKHERJEE.jpg', '14.11.1981', 'O+', '0000-00-00', '56', 'Reporting', 'Circulation Executive ', '44287', '44651', 'Tanmoy Mukherjee.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(185, 'Jayjit Acharjee', '9475303242', '9475303242', 'xx@gmail.com', 'Hakimpara,rash Behari saroni,Po.Ps Siliguri, Dist Darjeeling', 'emp_img/emp_img/JAIJIT ACHARIYA.jpg', '01.07.1975', 'O+', '0000-00-00', '57', 'Reporting', 'Photographer', '44287', '44651', 'Jayjit Acharjee.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(186, 'Dibesh Jha', '9775186279', '9775186279', 'xx@gmail.com', 'HIMALAYA RESIDENY, HIGH FLAT  B3/1, BABUPARA, SILIGURI', 'emp_img/emp_img/JAIJIT ACHARIYA.jpg', '10.01.1990', 'O+', '0000-00-00', '58', 'Reporting', 'Adv. Executive ', '44287', '44651', 'Dibesh Jha.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(187, 'Khokan Saha', '9832427946', '9832427946', 'xx@gmail.com', 'MAJHABARI, GHOGOMALI, SILIGURI', 'emp_img/emp_img/KHOKAN SAHA.jpg', '13.01.1990', 'O+', '0000-00-00', '59', 'Reporting', 'Clerk', '44287', '44651', 'Khokan Saha.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(188, 'Laxmi  Sharma ', '9475226451', '9475226451', 'xx@gmail.com', 'MIddile  Santi nagar, Siliguri', 'emp_img/emp_img/LAXMI SHARMA.jpg', '11.02.1976', 'O+', '0000-00-00', '60', 'Reporting', 'Sr. Reporter', '44287', '44651', 'Laxmi  Sharma .png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', '0', '0'),
(189, 'Sujoy  Kumar Dey', '9830302169', '6290926103', 'xx@gmail.com', '9/15 Kasundia 2nd Bye Lane, Howrah-711104', 'emp_img/data_sanmarg_sujay dey.jpg', '10.08.1974', 'A+', '0000-00-00', '78', 'Accounts', 'Accounts - Bill Collector ', '44287', '44651', 'Sujoy  Kumar Dey.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(190, 'Ruchika Gupta', '9830336200', '9830447600', 'xx@gmail.com', '160 C R Avenue , Kolkata 700007', 'emp_img/data_sanmarg-925-RuchikaGupta-RG PHOTO.JPEG', '', '', '0000-00-00', '11', 'Sanmarg Pvt Ltd ', 'Director ', '44287', '', 'Ruchika Gupta.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(191, 'Arijit Khan', '9874324252', '8697665514', 'xx@gmail.com', 'Chamrail,Howrah,ps-Liluah, pin-711114', 'emp_img/data_sanmarg-128-ArijitKhan-Arijit Khan.jpg', '32049', 'A+ve', '0000-00-00', '132', 'Reporting', 'Photo  Journalist', '44287', '44651', 'Arijit Khan.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(192, 'GOPAL KUMAR  SINGH', '9836674800', '8617849109', 'xx@gmail.com', 'Bograchati , G.M Banglow Campus, PO - Devchand Nagar Pin - 713332, Paschim Burdwan (W.B)', 'emp_img/data_sanmarg-1000-GOPALKUMARSINGH-Gopal Kumar Singh.jpeg', '10.05.1977', 'O + ', '0000-00-00', '1', 'Editorial ', 'Bureau Chief ', '44287', '44651', 'GOPAL KUMAR  SINGH.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(193, 'BIJOY SHANKAR BIKUJ', '7430915414', '9239032120', 'xx@gmail.com', 'ADDRESS : R.K. ROY ROAD, WEST ISMILE, ASANSOL - 713301 (W.B.)', 'emp_img/data_sanmarg-710-BIJOYSHANKARBIKUJ-Bijoy Shankar Bikuj.jpeg', '12.09.1957', 'A + ', '0000-00-00', '2', 'Editorial ', 'Sub-Editor ', '44287', '44651', 'BIJOY SHANKAR BIKUJ.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(194, 'Binod Kumar Jaiswal', '9832166512', '9332185842', 'xx@gmail.com', 'DR.  R. R. Road Rajbari , Raniganj , Pin - 713358', 'emp_img/data_sanmarg-375-BinodKumarJaiswal-Binod kr jaiswal.jpeg', '16.09.1978', 'O + ', '0000-00-00', '3', 'Editorial ', 'District Correspondent', '44287', '44651', 'Binod Kumar Jaiswal.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Thursday', '37Monday.png', 'Admin', '0', '0'),
(195, 'Satish prasad  Gupta', '9064059495', '8250203990', 'xx@gmail.com', 's/o Lt B P Gupta . ShivLal Dangal, south Dhadka_x000D_\n Asansol- 2 paschim Burdwan West Bengal ', 'emp_img/data_sanmarg-768-SatishprasadGupta-SAtish Prasad Gupta.jpeg', '01.05.1965', 'O + ', '0000-00-00', '4', 'Editorial ', 'Correspondent', '44287', '44651', 'Satish prasad  Gupta.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Friday', '37Monday.png', 'Admin', '0', '0'),
(196, 'Amlesh Kumar  Prasad', '9851892290', '9333100575', 'xx@gmail.com', 'Ushagaram, pureasha colony, Prantik apartment f/n 16, Asansol.', 'emp_img/data_sanmarg-103-AmleshKumarPrasad-Amlesh Kumar Prasad.jpg', '05.07.1978', 'AB+', '0000-00-00', '5', 'Editorial ', 'Correspondent', '44287', '44651', 'Amlesh Kumar  Prasad.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Saturday', '37Monday.png', 'Admin', '0', '0'),
(197, 'BHARAT   PASWAN', '8798299967', '8617540184', 'xx@gmail.com', 'SANTA DANGAL, NIMTALLA, BURNPUR,_x000D_\n PASCHIM BURDWAN, PIN : 713325', 'emp_img/data_sanmarg-920-BHARATPASWAN-Bharat Paswan.jpeg', '10.03.1984', 'B + ', '0000-00-00', '6', 'Editorial ', 'Correspondent', '44287', '44651', 'BHARAT   PASWAN.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Sunday', '37Monday.png', 'Admin', '0', '0'),
(198, 'Abhay  Giri', '7908099781', '6295170787', 'xx@gmail.com', 'South Dhadka Road, Near Sugam Park, _x000D_\nAsansol, Pin - 713302, Dist- Paschim Bardhaman, (W.B).', 'emp_img/data_sanmarg-645-AbhayGiri-abhay giri.jpg', '01.11.1991', 'B + ', '0000-00-00', '7', 'Editorial ', 'Correspondent', '44287', '44651', 'Abhay  Giri.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Monday', '37Monday.png', 'Admin', '0', '0'),
(199, 'Md. Kalamuddin', '8101388042', '9002113910', 'xx@gmail.com', 'Officer Colony, PO : Kanyapur, Dist. Paschim Bardhaman 713341', 'emp_img/data_sanmarg-918-Md.Kalamuddin-Md. Kalamuddin.jpg', '02.12.1976', 'O + ', '0000-00-00', '8', 'Editorial ', 'Pagenator', '44287', '44651', 'Md. Kalamuddin.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0'),
(200, 'Anwesa Putatunda', '6289736673', '8697718094', 'xx@gmail.com', 'East Ukilpara,Baruipur, South 24 Pgs Kol-700144', 'emp_img/data_sanmarg-877-AnwesaPutatunda-anwesa photo.jpg', '33789', 'AB+', '0000-00-00', '118', 'Sales & Marketing ', 'Sales Executive', '44562', '44651', 'Anwesa Putatunda.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Tuesday', '37Monday.png', 'Admin', '0', '0');
INSERT INTO `employee_table2` (`id`, `name`, `mobile`, `emargency`, `email`, `address`, `image`, `date_of_birth`, `blood_group`, `joining_date`, `emp_id`, `department`, `designation`, `date_of_issue`, `date_of_expiry`, `qr`, `is_resign`, `status`, `add_by`, `status_id`, `printed`, `print_no`, `emp_data_id`, `company_id`, `qr_generated`, `approved`, `printed_date`, `reason_for_duplicate`, `duplicate_by_snapshot`, `card_status`, `card_status_position_date_time`, `card_status_position_chang_by`, `password`, `emp_type`, `update_by_name`, `update_reason`, `update_by_type`, `update_date`, `update_day`, `img_Update_by`, `card_status_position_change_by_name`, `card_status_position_change_by_emp_id`, `update_by_person_emp_id`) VALUES
(201, 'Nikita Sharma', '8697718095', '7278154534', 'xx@gmail.com', 'Subhas Nagar Housing Complex A/3 306 Rishra,Hooghly-712249', 'emp_img/data_sanmarg-740-NikitaSharma-nikita photo.jpg', '36016', 'B- ', '0000-00-00', '100', 'Sales & Marketing ', 'Sales Executive', '44562', '44651', 'Nikita Sharma.png', 'no', 'active', 'admin', '1', '0', '0', '1', 'Sanmarg', '1', '0', '0000-00-00 00:00:00 ', 'testing', '1', 'delivered', ' 0000-00-00 00:00:00 ', 'admin', 'user', 'user', 'Admin', 'testing', 'admin', ' 0000-00-00 00:00:00 ', 'Wednesday', '37Monday.png', 'Admin', '0', '0'),
(202, 'Sarjana Sharma', '8383015285', '9811602201', 'xx@gmail.com', '165 Damodar View Apartments , Arun Vihar , Sector 37 ,Noida-201301', 'Sarjana Photo2.jpg', '1959-03-18', 'A+', '0001-01-01', '410', 'Editorial', 'Bureau Chief North', '2022-04-01', '2023-03-31', 'Sarjana Sharma.png', 'no', 'active', 'admin', '1', '1', '1', '1', 'Sanmarg', '1', '0', '2022-06-30 19:32:45', 'test', '1', 'on way', '2022-06-30 19:32:45', 'admin', 'user', 'user', 'Admin', 'for print new id card', 'admin', '2022-06-30 19:24:41', 'Thursday', 'none', 'Admin', 'AD000', 'AD000'),
(203, 'Aditi Sharma', '9830713400', '749125258', 'xx@gmail.com', '30/A/156/A,Dr.P T Laha Street,Rishra (Hoogly)-712248', 'Aditi Photo.jpg', '1999-05-22', 'O+', '0001-01-01', '151', 'Sales &Marketing', 'Sales Executive', '2022-04-01', '2023-03-31', 'Aditi Sharma.png', 'no', 'active', 'admin', '1', '1', '1', '1', 'Sanmarg', '1', '0', '2022-06-30 19:29:39', 'test', '1', 'on way', '2022-06-30 19:29:39', 'admin', 'user', 'user', 'Admin', 'for print new id card', 'admin', '2022-06-30 19:12:04', 'Thursday', 'none', 'Admin', 'AD000', 'AD000'),
(204, 'Mithu Sinha', '8697718002', '9331273643', 'xx@gmail.com', '31/2 Sahapur Colony(West), Plot 84,Second floor Flat#05,Block J ,New Alipur, Kolkata - 700053.', 'Mithu Sinha.jpg', '1975-10-09', 'O+', '2022-07-13', '114', 'Sales & Marketing', 'Sales Director ', '2022-07-13', '2023-07-13', 'Mithu Sinha.png', 'no', 'active', 'admin', '1', '1', '1', '1', 'Sanmarg Pvt Ltd', '1', '0', '2022-07-13 16:04:50', 'test', '1', 'delivered', '2022-07-13 16:04:50', 'admin', 'user', 'user', 'Admin', 'for data error', 'admin', '2022-07-13 15:56:20', 'Wednesday', 'none', 'Admin', 'AD000', 'AD000'),
(205, 'Sabuj Biplab Maity', '8697718058', '9874676346', 'xxx@gmail.com', 'Sarojini Pally , Nabapally ,Barasat Kolkata - 700126 (opp. Aditya Residency).', 'Sabuj Maity.jpg', '1980-07-13', 'A+', '2022-07-01', '140', 'Sales & Marketing', 'DGM Sales', '2022-07-13', '2023-07-13', 'Sabuj Biplab Maity.png', 'no', 'active', 'admin', '1', '1', '1', '1', 'Sanmarg Pvt Ltd', '1', '0', '2022-07-13 16:27:23', 'test', '1', 'on way', '2022-07-13 16:27:23', 'admin', 'user', 'user', 'none', 'none', 'none', '0000-00-00 00:00:00', 'none', 'none', 'Admin', 'AD000', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_list`
--

CREATE TABLE `holiday_list` (
  `id` int(2) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `massage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holiday_list`
--

INSERT INTO `holiday_list` (`id`, `date`, `reason`, `massage`) VALUES
(7, '2022-04-29', 'For Holi', 'happy Holi'),
(9, '2022-04-28', 'for dewali', 'happy dewali'),
(15, '2022-04-15', 'Bengali New Year', 'hgfhfhf');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `leave_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_mobile` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(500) NOT NULL,
  `emp_id` int(2) NOT NULL,
  `leave_status` enum('approved','not approved') NOT NULL DEFAULT 'not approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`leave_id`, `emp_name`, `emp_mobile`, `date`, `reason`, `emp_id`, `leave_status`) VALUES
(11, 'Shubhabarata Ghosh', '8420982238', '2022-03-17', 'Due to exa', 37, 'approved'),
(12, 'Mohit', '89678454545', '2022-04-20', 'ueryery', 1, 'approved'),
(16, 'shubabrata', '96969696', '2022-04-20', 'For College exam', 120, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `manage_company`
--

CREATE TABLE `manage_company` (
  `company_id` int(2) NOT NULL,
  `company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_company`
--

INSERT INTO `manage_company` (`company_id`, `company_name`) VALUES
(7, 'Sanmarg'),
(9, 'Tehelka.com Pvt.Ltd.'),
(10, 'Cei Print Pack Pvt. Ltd.'),
(11, 'Art Printing House Pvt. Ltd.'),
(12, 'Newzstreet Broadcasting Services Pvt. Ltd.'),
(13, 'Ragp 2021 Student Identity Card'),
(22, 'Saraswati Print Factory Pvt. Ltd.'),
(25, 'Sanmarg Pvt Ltd');

-- --------------------------------------------------------

--
-- Table structure for table `print_application`
--

CREATE TABLE `print_application` (
  `id` int(2) NOT NULL,
  `emp_name` varchar(111) NOT NULL,
  `emp_id` varchar(111) NOT NULL,
  `printedby_id` varchar(111) NOT NULL,
  `printedby_name` varchar(111) NOT NULL,
  `application_date` varchar(111) NOT NULL,
  `reason_to_print_again` varchar(111) NOT NULL,
  `application_status` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `print_application`
--

INSERT INTO `print_application` (`id`, `emp_name`, `emp_id`, `printedby_id`, `printedby_name`, `application_date`, `reason_to_print_again`, `application_status`) VALUES
(2, 'superadmin', '1', 'HR100', 'hr', '2022-04-12 19:37:22', 'for test', 'yes'),
(4, 'VIndhya Vasini Tripathi', '104', 'SA155', 'superadmin', '2022-04-12 19:45:10', 'for test', 'no'),
(18, 'Neha Daga', '125', 'AD000', 'Admin', '2022-05-07 16:38:05', 'First One Is Error', 'yes'),
(19, 'Neha Daga', '125', 'AD000', 'Admin', '2022-05-20 19:14:41', 'Designation Changed', 'yes'),
(20, 'VIndhya Vasini Tripathi', '104', 'AD000', 'Admin', '2022-06-08 18:28:54', 'new', 'no'),
(21, 'VIndhya Vasini Tripathi', '104', 'AD000', 'Admin', '2022-06-08 18:29:01', 'new', 'no'),
(22, 'Dipchand Bairagi', '131', 'AD000', 'Admin', '2022-06-30 19:10:50', 'for first one is expire', 'yes'),
(23, 'Sarjana Sharma', '202', 'AD000', 'Admin', '2022-06-30 19:27:32', 'for first one is expire', 'yes'),
(24, 'Aditi Sharma', '203', 'AD000', 'Admin', '2022-06-30 19:28:09', 'for first one is expire', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_design`
--
ALTER TABLE `card_design`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `department_table`
--
ALTER TABLE `department_table`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation_table`
--
ALTER TABLE `designation_table`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_table2`
--
ALTER TABLE `employee_table2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_list`
--
ALTER TABLE `holiday_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `manage_company`
--
ALTER TABLE `manage_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `print_application`
--
ALTER TABLE `print_application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `card_design`
--
ALTER TABLE `card_design`
  MODIFY `card_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department_table`
--
ALTER TABLE `department_table`
  MODIFY `department_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `designation_table`
--
ALTER TABLE `designation_table`
  MODIFY `designation_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `employee_table2`
--
ALTER TABLE `employee_table2`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `holiday_list`
--
ALTER TABLE `holiday_list`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `leave_application`
--
ALTER TABLE `leave_application`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `manage_company`
--
ALTER TABLE `manage_company`
  MODIFY `company_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `print_application`
--
ALTER TABLE `print_application`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
