-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 01:54 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `stack_room_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `year`, `isbn`, `publisher_id`, `department_id`, `stack_room_id`, `status_id`) VALUES
(1, 'Accounting for Dummies', 'John.A.Tracy', 1997, '9780043345789', 1, 1, 1, 1),
(2, 'Java for Beginners', 'Jamie Chan', 200, '98000032233', 4, 2, 2, 1),
(3, 'Mechanices ', 'Sarah Monica', 2008, '9780046879', 2, 4, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'Accounts'),
(2, 'Computer Science'),
(3, 'History'),
(4, 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `name`, `department_id`) VALUES
(1, 'Certicate in  IT', 2),
(2, 'Certificate in Marketing', 1),
(3, 'Diploma in IT', 2),
(4, 'Diploma in Finance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`) VALUES
(1, 'Macmillan'),
(2, 'HarperCollins'),
(3, 'Pearson Education'),
(4, 'Oxford '),
(5, 'Penguins');

-- --------------------------------------------------------

--
-- Table structure for table `stack_rooms`
--

CREATE TABLE `stack_rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `floor` varchar(10) NOT NULL DEFAULT 'Ground'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stack_rooms`
--

INSERT INTO `stack_rooms` (`id`, `name`, `floor`) VALUES
(1, 'D', 'Groud '),
(2, 'Q', 'First'),
(3, 'N', 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`) VALUES
(1, 'Available'),
(2, 'Out'),
(3, 'Damaged');

-- --------------------------------------------------------

--
-- Table structure for table `student_borrowings`
--

CREATE TABLE `student_borrowings` (
  `id` int(11) NOT NULL,
  `student_detail_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `date_returned` varchar(255) NOT NULL,
  `book_overdue` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_borrowings`
--

INSERT INTO `student_borrowings` (`id`, `student_detail_id`, `book_id`, `date_from`, `date_to`, `date_returned`, `book_overdue`, `created`, `created_by`) VALUES
(1, 1, 1, '12-12-2019', '26-12-2019', '13-12-2019', 0, '2019-12-12 22:30:59', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `reg_number` varchar(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `programme_id` int(11) NOT NULL,
  `level_of_study` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `suspended` varchar(5) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `reg_number`, `firstname`, `lastname`, `programme_id`, `level_of_study`, `dob`, `address`, `email_address`, `mobile`, `suspended`) VALUES
(1, 'R190010', 'Blessing', 'Zenda', 3, 3, '2019-10-10', '3244 Mbare,Harare', 'tshons@gmail.com', 9977744, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `suspended_students`
--

CREATE TABLE `suspended_students` (
  `id` int(11) NOT NULL,
  `student_detail_id` int(11) NOT NULL,
  `suspension_reason_id` int(11) NOT NULL,
  `active` varchar(10) NOT NULL DEFAULT 'No',
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suspended_students`
--

INSERT INTO `suspended_students` (`id`, `student_detail_id`, `suspension_reason_id`, `active`, `created`) VALUES
(1, 1, 1, 'No', '2019-10-11 00:13:23'),
(2, 1, 2, 'No', '2019-10-11 00:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `suspension_reasons`
--

CREATE TABLE `suspension_reasons` (
  `id` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suspension_reasons`
--

INSERT INTO `suspension_reasons` (`id`, `reason`) VALUES
(1, 'Returned books late three(3) consecutive times'),
(2, 'Student under disciplinary hearing');

-- --------------------------------------------------------

--
-- Table structure for table `system_groups`
--

CREATE TABLE `system_groups` (
  `id` int(11) NOT NULL,
  `account_type_name` varchar(200) NOT NULL,
  `internal_account` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `create_ip` varchar(60) NOT NULL,
  `modify_ip` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_groups`
--

INSERT INTO `system_groups` (`id`, `account_type_name`, `internal_account`, `created`, `modified`, `created_by`, `modified_by`, `create_ip`, `modify_ip`) VALUES
(1, 'Librarian', 1, NULL, NULL, '', '', '', ''),
(2, 'Library Assistant', 1, NULL, NULL, '', '', '', ''),
(3, 'Student', 1, NULL, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` tinyint(4) NOT NULL DEFAULT '0',
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `system_group_id` int(3) NOT NULL,
  `password_expiry_date` date DEFAULT NULL,
  `expiry_warning_date` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `create_ip` varchar(255) DEFAULT NULL,
  `modify_ip` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_address`, `password`, `account_status`, `firstname`, `lastname`, `address`, `system_group_id`, `password_expiry_date`, `expiry_warning_date`, `created_by`, `modified_by`, `created`, `modified`, `username`, `create_ip`, `modify_ip`) VALUES
(5, 'admin@hrelibray.ac.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 0, 'Misheck', 'Moyo', '', 1, '0000-00-00', '0000-00-00', '', '', '2017-05-04 10:55:04', '2019-04-15 22:11:32', 'admin', '', ''),
(43, 'assistant@hrelibrary.ac.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 0, 'Shamiso', 'Dube', '', 2, '0000-00-00', '0000-00-00', NULL, NULL, '2018-11-13 15:34:23', '2019-04-16 09:03:48', 'library_assistant', '::1', ''),
(63, 'libass@hreploy.ac.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 0, 'Blessing', 'Bee', '23339', 2, NULL, NULL, 'admin', NULL, '2019-10-10 20:01:30', '2019-10-10 20:01:30', 'lib_assistant2', '::1', NULL),
(65, 'tshons@gmail.com', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 1, 'Blessing', 'Zenda', '', 3, NULL, NULL, NULL, NULL, '2019-10-10 20:23:47', '2019-10-10 20:23:47', 'R190010', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `system_group_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `stack_rooms`
--
ALTER TABLE `stack_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_borrowings`
--
ALTER TABLE `student_borrowings`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `suspended_students`
--
ALTER TABLE `suspended_students`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `suspension_reasons`
--
ALTER TABLE `suspension_reasons`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `system_groups`
--
ALTER TABLE `system_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_type_name` (`account_type_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stack_rooms`
--
ALTER TABLE `stack_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_borrowings`
--
ALTER TABLE `student_borrowings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suspended_students`
--
ALTER TABLE `suspended_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suspension_reasons`
--
ALTER TABLE `suspension_reasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_groups`
--
ALTER TABLE `system_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
