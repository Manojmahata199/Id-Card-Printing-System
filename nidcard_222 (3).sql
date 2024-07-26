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

(115, 'user', '89678454545', '89678454545', 'user@gmail.com', 'address', 'im1.jfif', '0001-01-01', 'AB+', '0001-01-01', 'US000', 'Graphics Department', 'Senior Graphics Designer', '0001-01-01', '0001-01-01', 'user.png', 'no', 'active', 'superadmin', '1', '1', '5', '1', 'Sanmarg Pvt Ltd', '1', '0', '2022-04-14 19:11:27', 'test', '1', 'on way', '2022-04-14 19:11:27', 'admin', 'user', 'user', 'user', 'test', 'user', '2022-04-13 15:21:04', 'Wednesday', 'none', 'Admin', 'AD000', 'US000');

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
