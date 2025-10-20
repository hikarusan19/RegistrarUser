-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2025 at 11:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis_registrar`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'BS Computer Engineering'),
(2, 'BS Information Technology'),
(3, 'BS Criminology'),
(4, 'BS Business Administration'),
(5, 'BS Office Administration'),
(6, 'Bachelor of Elementary Education'),
(7, 'Bachelor of Secondary Education');

-- --------------------------------------------------------

--
-- Table structure for table `document_requests`
--

CREATE TABLE `document_requests` (
  `request_id` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `request_type` varchar(50) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `status` enum('Pending','Approved','Released') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_requests`
--

INSERT INTO `document_requests` (`request_id`, `Student_ID`, `request_type`, `request_date`, `status`) VALUES
(1, 25001, 'Good Moral Certificate', '2025-01-12', 'Approved'),
(2, 25002, 'Form 137', '2025-02-03', 'Pending'),
(3, 25003, 'Transcript of Records', '2025-02-14', 'Released'),
(4, 25004, 'Enrollment Certificate', '2025-03-01', 'Pending'),
(5, 25005, 'Good Moral Certificate', '2025-03-22', 'Released'),
(6, 25006, 'Transcript of Records', '2025-04-10', 'Approved'),
(7, 25007, 'Form 138', '2025-04-20', 'Pending'),
(8, 25008, 'Enrollment Certificate', '2025-05-05', 'Released'),
(9, 25009, 'Good Moral Certificate', '2025-05-20', 'Pending'),
(10, 25010, 'Form 137', '2025-06-15', 'Approved'),
(11, 25011, 'Transcript of Records', '2025-06-30', 'Released'),
(12, 25012, 'Good Moral Certificate', '2025-07-10', 'Pending'),
(13, 25013, 'Enrollment Certificate', '2025-07-25', 'Approved'),
(14, 25014, 'Form 137', '2025-08-12', 'Released'),
(15, 25015, 'Transcript of Records', '2025-09-01', 'Pending'),
(16, 25016, 'Good Moral Certificate', '2025-09-20', 'Approved'),
(17, 25017, 'Form 138', '2025-09-30', 'Released'),
(18, 25018, 'Enrollment Certificate', '2025-10-05', 'Pending'),
(19, 25019, 'Transcript of Records', '2025-10-10', 'Approved'),
(20, 25020, 'Good Moral Certificate', '2025-10-12', 'Released');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `academic_year` varchar(9) DEFAULT NULL,
  `semester` enum('1st Semester','2nd Semester','Summer') DEFAULT NULL,
  `status` enum('Enrolled','Not Enrolled','Graduated','Dropped') DEFAULT 'Enrolled',
  `date_enrolled` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment_id`, `Student_ID`, `academic_year`, `semester`, `status`, `date_enrolled`) VALUES
(1, 25001, '2020-2021', '1st Semester', 'Enrolled', '2020-08-15'),
(2, 25002, '2020-2021', '1st Semester', 'Enrolled', '2020-08-18'),
(3, 25003, '2020-2021', '1st Semester', 'Enrolled', '2020-08-22'),
(4, 25004, '2020-2021', '2nd Semester', 'Enrolled', '2021-01-10'),
(5, 25005, '2020-2021', '2nd Semester', 'Enrolled', '2021-01-12'),
(6, 25006, '2021-2022', '1st Semester', 'Enrolled', '2021-08-20'),
(7, 25007, '2021-2022', '1st Semester', 'Enrolled', '2021-08-21'),
(8, 25008, '2021-2022', '2nd Semester', 'Enrolled', '2022-01-11'),
(9, 25009, '2021-2022', '2nd Semester', 'Enrolled', '2022-01-18'),
(10, 25010, '2021-2022', '2nd Semester', 'Enrolled', '2022-01-22'),
(11, 25011, '2022-2023', '1st Semester', 'Enrolled', '2022-08-10'),
(12, 25012, '2022-2023', '1st Semester', 'Enrolled', '2022-08-15'),
(13, 25013, '2022-2023', '2nd Semester', 'Enrolled', '2023-01-08'),
(14, 25014, '2022-2023', '2nd Semester', 'Enrolled', '2023-01-12'),
(15, 25015, '2022-2023', 'Summer', 'Enrolled', '2023-05-15'),
(16, 25016, '2023-2024', '1st Semester', 'Enrolled', '2023-08-10'),
(17, 25017, '2023-2024', '1st Semester', 'Enrolled', '2023-08-18'),
(18, 25018, '2023-2024', '2nd Semester', 'Enrolled', '2024-01-09'),
(19, 25019, '2023-2024', '2nd Semester', 'Enrolled', '2024-01-20'),
(20, 25020, '2023-2024', 'Summer', 'Enrolled', '2024-05-10'),
(21, 25021, '2024-2025', '1st Semester', 'Enrolled', '2024-08-12'),
(22, 25022, '2024-2025', '1st Semester', 'Enrolled', '2024-08-14'),
(23, 25023, '2024-2025', '2nd Semester', 'Enrolled', '2025-01-07'),
(24, 25024, '2024-2025', '2nd Semester', 'Enrolled', '2025-01-10'),
(25, 25025, '2024-2025', 'Summer', 'Enrolled', '2025-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL,
  `section` varchar(20) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Student_ID`, `full_name`, `section`, `department_id`) VALUES
(1, 25001, 'John Perez', 'CPE-1A', 1),
(2, 25002, 'Maria Santos', 'CPE-1A', 1),
(3, 25003, 'Alex Rivera', 'CPE-1B', 1),
(4, 25004, 'Ella Cruz', 'CPE-2A', 1),
(5, 25005, 'James Tan', 'CPE-2A', 1),
(6, 25006, 'Kyle Torres', 'IT-1A', 2),
(7, 25007, 'Patricia Dela Cruz', 'IT-1A', 2),
(8, 25008, 'Rico Gonzales', 'IT-1B', 2),
(9, 25009, 'Karen Villanueva', 'IT-2A', 2),
(10, 25010, 'Leo Mendoza', 'IT-3A', 2),
(11, 25011, 'Jose Ramos', 'CRIM-1A', 3),
(12, 25012, 'Mico Dizon', 'CRIM-1A', 3),
(13, 25013, 'Randy Flores', 'CRIM-1B', 3),
(14, 25014, 'Nina Bautista', 'CRIM-2A', 3),
(15, 25015, 'Angelina Lopez', 'CRIM-2B', 3),
(16, 25016, 'Claire Garcia', 'BA-1A', 4),
(17, 25017, 'Vincent Lim', 'BA-1B', 4),
(18, 25018, 'Diana Ong', 'BA-2A', 4),
(19, 25019, 'Henry Castillo', 'BA-2B', 4),
(20, 25020, 'Jessa Ramos', 'BA-3A', 4),
(21, 25021, 'Marlon Chan', 'OA-1A', 5),
(22, 25022, 'Bianca Cruz', 'OA-1A', 5),
(23, 25023, 'Ella Mendoza', 'OA-2A', 5),
(24, 25024, 'Chris Santos', 'OA-3A', 5),
(25, 25025, 'Nicole Uy', 'OA-3B', 5),
(26, 25026, 'Ruth Evangelista', 'BEED-1A', 6),
(27, 25027, 'Harold Manalo', 'BEED-1B', 6),
(28, 25028, 'Faith Domingo', 'BEED-2A', 6),
(29, 25029, 'Grace Dela Torre', 'BEED-3A', 6),
(30, 25030, 'Justin Bautista', 'BEED-4A', 6),
(31, 25031, 'Aaron Reyes', 'BSED-1A', 7),
(32, 25032, 'Kyla Fernandez', 'BSED-1B', 7),
(33, 25033, 'Trisha Gomez', 'BSED-2A', 7),
(34, 25034, 'Ronald Aquino', 'BSED-2B', 7),
(35, 25035, 'Jem Reyes', 'BSED-3A', 7),
(36, 25036, 'Lara Morales', 'CPE-3A', 1),
(37, 25037, 'Ian Cruz', 'CPE-3A', 1),
(38, 25038, 'Catherine Yu', 'CPE-4A', 1),
(39, 25039, 'Franz Castillo', 'CPE-4A', 1),
(40, 25040, 'Samantha Cruz', 'CPE-4B', 1),
(41, 25041, 'Victor Santos', 'IT-4A', 2),
(42, 25042, 'Bea Rivera', 'IT-4A', 2),
(43, 25043, 'Michael Chua', 'IT-4B', 2),
(44, 25044, 'Liam Javier', 'IT-4B', 2),
(45, 25045, 'Erica Flores', 'CRIM-4A', 3),
(46, 25046, 'Ryan Ramos', 'BA-4A', 4),
(47, 25047, 'Paula Ong', 'OA-4A', 5),
(48, 25048, 'Ella Caballero', 'BEED-4B', 6),
(49, 25049, 'Dan Morales', 'BSED-4A', 7),
(50, 25050, 'Sofia Lim', 'BSED-4B', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `document_requests`
--
ALTER TABLE `document_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Student_ID` (`Student_ID`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `document_requests`
--
ALTER TABLE `document_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document_requests`
--
ALTER TABLE `document_requests`
  ADD CONSTRAINT `document_requests_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`Student_ID`);

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`Student_ID`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
