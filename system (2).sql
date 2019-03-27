-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 01:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `id` int(11) NOT NULL,
  `aduitDate` varchar(20) NOT NULL,
  `auditor` varchar(60) NOT NULL,
  `competency` varchar(40) NOT NULL,
  `Customer` varchar(60) NOT NULL,
  `Lead` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `projectManager` varchar(40) NOT NULL,
  `projectName` varchar(60) NOT NULL,
  `qaLead` varchar(40) NOT NULL,
  `remarks` text NOT NULL,
  `Total_NC` int(11) NOT NULL,
  `tracks` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`id`, `aduitDate`, `auditor`, `competency`, `Customer`, `Lead`, `location`, `projectManager`, `projectName`, `qaLead`, `remarks`, `Total_NC`, `tracks`) VALUES
(1, '3', 'Arsalan Rashid', 'Digital Framework', 'Higher Education Commission', 'Muhammad Aqib', 'karachi', 'Umer Imtiaz', 'BPAS', 'Faizan Junani', '', 4, 'BPM'),
(2, '2019-03-07', 'Arsalan Rashid', 'Digital', 'Higher Education Commission', 'Muhammad Aqib', 'karachi', 'Umer Imtiaz', 'BPAS', 'Faizan Junani', '', 2, 'BPM');

-- --------------------------------------------------------

--
-- Table structure for table `check_list`
--

CREATE TABLE `check_list` (
  `checklist_id` int(11) NOT NULL,
  `Evidence` text,
  `Verified` varchar(11) DEFAULT NULL,
  `Total_Points` int(11) DEFAULT NULL,
  `Points_Attained` int(11) DEFAULT NULL,
  `Exception_Deviation` text,
  `NC` int(11) DEFAULT NULL,
  `Observation` text,
  `report_id` int(11) DEFAULT NULL,
  `question` text,
  `sumtotal_points` int(11) DEFAULT NULL,
  `sumattain_points` int(11) DEFAULT NULL,
  `project_total` int(11) DEFAULT NULL,
  `stage_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_list`
--

INSERT INTO `check_list` (`checklist_id`, `Evidence`, `Verified`, `Total_Points`, `Points_Attained`, `Exception_Deviation`, `NC`, `Observation`, `report_id`, `question`, `sumtotal_points`, `sumattain_points`, `project_total`, `stage_id`) VALUES
(127, 'Updated High Level Estimation Sheet', 'yes', 2, 2, '', 0, 'Estimation sheet ', 1, 'Did the PM validated the size and cost of the project on the basis of available information at high level?', 95, 74, 78, 2),
(128, 'PDD, sending email', 'yes', 1, 1, '', 0, 'PDD Present ', 1, 'After signing the contract/work order, did PM develop the Project Definition Document and send it to organizational CC/ CM Lead.', 95, 74, 78, 2),
(129, 'IMS', 'yes', 1, 1, '', 0, '', 1, 'Was project created in Issue Management System by the IMS admin.', 95, 74, 78, 2),
(130, 'Email to Distribution List', 'yes', 1, 1, '', 0, 'IMS present', 1, 'Was email for commencement of the project sent by the Manager Projects/Competency Lead/Competency Director to the relevant stakeholders (QA Competency, Shared Services, Project Team,etc).', 95, 74, 78, 2),
(131, 'PMP', 'no', 4, 0, '', 0, '', 1, 'Did the PM document following in PMP?:Scope, Milestones, artifacts, Constraints and assumptions, formal decision on Exceptions (if required)', 95, 74, 78, 3),
(132, 'Detailed Estimation sheet', 'yes', 2, 2, '', 0, '', 1, 'Did the PM prepare a detailed Estimation Sheet with the help of Dev Lead & QA Lead?', 95, 74, 78, 3),
(133, 'PS', 'yes', 2, 2, '', 0, 'handle in JIRA', 1, 'Did the PM  prepare Project/Sprint Schedule in coordination with QA Lead and Dev Lead?', 95, 74, 78, 3),
(134, 'Review email, any comments', 'no', 2, 0, '', 0, '', 1, 'Was Project/Sprint Schedule approved by management/customer', 95, 74, 78, 3),
(135, 'Weekly Status Report', 'yes', 9, 9, '', 0, 'Daily Status report shared.', 1, 'Did the PM Published weekly status report covering the anticipated risk, on-hand issues, planned vs actual progress and plan for next reporting period?', 95, 74, 78, 4),
(136, 'MOMs, Updated Weekly Status report', 'yes', 3, 3, '', 0, 'Monthly status report shared with Customer.', 1, 'Did the Project Manger conduct a project/Sprint status review meeting with Project Team to discuss the status report on a weekly basis?', 95, 74, 78, 4),
(137, 'FSD/FDD/User Story', 'yes', 7, 7, '', 0, 'Documents present in JIRA', 1, 'Were the FS/User Stories created to cover the whole scope of project/ Project Back log?', 95, 74, 78, 5),
(138, 'Review comments, approval email', 'yes', 5, 5, '', 0, 'Customer signed copy present', 1, 'Was FS/User Stories reviewed & approved by client?', 95, 74, 78, 5),
(139, 'Review comments, Approval email', 'yes', 3, 3, '', 0, '', 1, 'UX is reviewed and approved by the Client?', 95, 74, 78, 5),
(140, 'IMS, any other report/ document', 'yes', 8, 8, '', 0, '', 1, 'Were all changes proposed by client went through the formal review/ impact analysis cycle before implementation?', 95, 74, 78, 6),
(141, 'Review comments, Approval email', 'no', 8, 0, '', 0, '', 1, 'Did Technical Design reviewed and approved by architecture group?', 95, 74, 78, 7),
(142, 'Tool Reports', 'n/a', 0, 0, '', 0, '', 1, 'Did the PM/ Dev TL used the Static code analysis tool for the project?', 95, 74, 78, 13),
(143, 'Development environment', 'yes', 3, 3, '', 0, '', 1, 'Did the Dev TL set up the Build Pipeline?', 95, 74, 78, 13),
(144, 'Code Review Comments', 'yes', 4, 4, '', 0, 'Static code review done.', 1, 'Was logic reviewed in code review process?', 95, 74, 78, 13),
(145, 'Unit test cases', 'yes', 10, 10, '', 0, 'Unit testcases present', 1, 'Did each member of the development team write unit tests?', 95, 74, 78, 14),
(146, 'Release Management Plan', 'no', 3, 0, '', 0, '', 1, 'Is Release Management Plan is Published and being followed?', 95, 74, 78, 15),
(147, 'Internal Release Notes/ Internal Release email', 'yes', 2, 2, '', 0, '', 1, 'Did the Dev team prepare build for the start of testing that includes code? If yes, did it contain DB scripts and installation instructions to deploy the code?', 95, 74, 78, 15),
(148, 'Internal shipment package, Notification email', 'yes', 2, 2, '', 0, '', 1, 'Did the Dev Team prepares the initial internal shipment package and notify the QA to process the shipment?', 95, 74, 78, 15),
(149, 'Test Plan', 'n/a', 0, 0, '', 0, '', 1, 'Is Test Plan Created?', 95, 74, 78, 16),
(150, 'Communication email', 'no', 1, 0, '', 0, 'No acceptance criteria', 1, 'Did QA share Release Acceptance Criteria with relevant stakeholders?', 95, 74, 78, 16),
(151, 'Defect Tracking Tool', 'yes', 1, 1, '', 0, 'JIRA used for defect tracking', 1, 'Was the project created in defect tracking tool by QA TL?', 95, 74, 78, 16),
(152, 'Test Cases', 'yes', 1, 1, '', 0, '', 1, 'Did QA team prepared test cases?', 95, 74, 78, 16),
(153, 'Test Cases', 'no', 1, 0, '', 0, '', 1, 'Was mandatory test data prepared and documented in test cases?', 95, 74, 78, 16),
(154, 'Testing Environment', 'yes', 2, 2, '', 0, '', 1, 'Is QA provided separate Environment for Testing?', 95, 74, 78, 17),
(155, 'Execution Log, Updated AAC, acceptance/closure email', 'no', 2, 0, '', 0, '', 1, 'Was Acceptance Testing performed? ', 95, 74, 78, 17),
(156, 'Execution Log, Defects in Defect tracking tool', 'yes', 2, 2, '', 0, '', 1, 'Was System Testing performed?', 95, 74, 78, 17),
(157, 'Test Case Execution log', 'yes', 2, 2, '', 0, '', 1, 'Were all test cases executed?', 95, 74, 78, 17),
(158, 'Defects status in Defect tracking tool', 'yes', 1, 1, '', 0, '', 1, 'Were defects tracked to closure? (Defect Resolution Life cycle)', 95, 74, 78, 17),
(159, 'Updated High Level Estimation Sheet', 'yes', 2, 2, '', 0, '', 2, 'Did the PM validated the size and cost of the project on the basis of available information at high level?', 99, 98, 99, 2),
(160, '', 'no', 1, 0, '', 0, '', 2, 'After signing the contract/work order, did PM develop the Project Definition Document and send it to organizational CC/ CM Lead.', 99, 98, 99, 2),
(161, '', 'n/a', 0, 0, '', 0, '', 2, 'Was project created in Issue Management System by the IMS admin.', 99, 98, 99, 2),
(162, '', 'yes', 1, 1, '', 0, '', 2, 'Was email for commencement of the project sent by the Manager Projects/Competency Lead/Competency Director to the relevant stakeholders (QA Competency, Shared Services, Project Team,etc).', 99, 98, 99, 2),
(163, '', 'yes', 4, 4, '', 0, '', 2, 'Did the PM document following in PMP?:Scope, Milestones, artifacts, Constraints and assumptions, formal decision on Exceptions (if required)', 99, 98, 99, 3),
(164, '', 'yes', 2, 2, '', 0, '', 2, 'Did the PM prepare a detailed Estimation Sheet with the help of Dev Lead & QA Lead?', 99, 98, 99, 3),
(165, '', 'yes', 2, 2, '', 0, '', 2, 'Did the PM  prepare Project/Sprint Schedule in coordination with QA Lead and Dev Lead?', 99, 98, 99, 3),
(166, '', 'yes', 2, 2, '', 0, '', 2, 'Was Project/Sprint Schedule approved by management/customer', 99, 98, 99, 3),
(167, '', 'yes', 9, 9, '', 0, '', 2, 'Did the PM Published weekly status report covering the anticipated risk, on-hand issues, planned vs actual progress and plan for next reporting period?', 99, 98, 99, 4),
(168, '', 'yes', 3, 3, '', 0, '', 2, 'Did the Project Manger conduct a project/Sprint status review meeting with Project Team to discuss the status report on a weekly basis?', 99, 98, 99, 4),
(169, '', 'yes', 7, 7, '', 0, '', 2, 'Were the FS/User Stories created to cover the whole scope of project/ Project Back log?', 99, 98, 99, 5),
(170, '', 'yes', 5, 5, '', 0, '', 2, 'Was FS/User Stories reviewed & approved by client?', 99, 98, 99, 5),
(171, '', 'yes', 3, 3, '', 0, '', 2, 'UX is reviewed and approved by the Client?', 99, 98, 99, 5),
(172, '', 'yes', 8, 8, '', 0, '', 2, 'Were all changes proposed by client went through the formal review/ impact analysis cycle before implementation?', 99, 98, 99, 6),
(173, '', 'yes', 8, 8, '', 0, '', 2, 'Did Technical Design reviewed and approved by architecture group?', 99, 98, 99, 7),
(174, '', 'yes', 3, 3, '', 0, '', 2, 'Did the PM/ Dev TL used the Static code analysis tool for the project?', 99, 98, 99, 13),
(175, '', 'yes', 3, 3, '', 0, '', 2, 'Did the Dev TL set up the Build Pipeline?', 99, 98, 99, 13),
(176, '', 'yes', 4, 4, '', 0, '', 2, 'Was logic reviewed in code review process?', 99, 98, 99, 13),
(177, '', 'yes', 10, 10, '', 0, '', 2, 'Did each member of the development team write unit tests?', 99, 98, 99, 14),
(178, '', 'yes', 3, 3, '', 0, '', 2, 'Is Release Management Plan is Published and being followed?', 99, 98, 99, 15),
(179, '', 'yes', 2, 2, '', 0, '', 2, 'Did the Dev team prepare build for the start of testing that includes code? If yes, did it contain DB scripts and installation instructions to deploy the code?', 99, 98, 99, 15),
(180, '', 'yes', 2, 2, '', 0, '', 2, 'Did the Dev Team prepares the initial internal shipment package and notify the QA to process the shipment?', 99, 98, 99, 15),
(181, '', 'yes', 2, 2, '', 0, '', 2, 'Is Test Plan Created?', 99, 98, 99, 16),
(182, '', 'yes', 1, 1, '', 0, '', 2, 'Did QA share Release Acceptance Criteria with relevant stakeholders?', 99, 98, 99, 16),
(183, '', 'yes', 1, 1, '', 0, '', 2, 'Was the project created in defect tracking tool by QA TL?', 99, 98, 99, 16),
(184, '', 'yes', 1, 1, '', 0, '', 2, 'Did QA team prepared test cases?', 99, 98, 99, 16),
(185, '', 'yes', 1, 1, '', 0, '', 2, 'Was mandatory test data prepared and documented in test cases?', 99, 98, 99, 16),
(186, '', 'yes', 2, 2, '', 0, '', 2, 'Is QA provided separate Environment for Testing?', 99, 98, 99, 17),
(187, '', 'yes', 2, 2, '', 0, '', 2, 'Was Acceptance Testing performed? ', 99, 98, 99, 17),
(188, '', 'yes', 2, 2, '', 0, '', 2, 'Was System Testing performed?', 99, 98, 99, 17),
(189, '', 'yes', 2, 2, '', 0, '', 2, 'Were all test cases executed?', 99, 98, 99, 17),
(190, '', 'yes', 1, 1, '', 0, '', 2, 'Were defects tracked to closure? (Defect Resolution Life cycle)', 99, 98, 99, 17);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `Total_Points` int(11) NOT NULL,
  `stage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `Total_Points`, `stage_id`) VALUES
(1, 'Did the PM validated the size and cost of the project on the basis of available information at high level?', 1, 2),
(2, 'After signing the contract/work order, did PM develop the Project Definition Document and send it to organizational CC/ CM Lead.', 1, 2),
(3, 'Was project created in Issue Management System by the IMS admin.', 1, 2),
(4, 'Was email for commencement of the project sent by the Manager Projects/Competency Lead/Competency Director to the relevant stakeholders (QA Competency, Shared Services, Project Team,etc).', 1, 2),
(5, 'Did the PM document following in PMP?:\r\nScope, Milestones, artifacts, Constraints and assumptions, formal decision on Exceptions (if required)', 4, 3),
(6, 'Did the PM prepare a detailed Estimation Sheet with the help of Dev Lead & QA Lead?', 2, 3),
(7, 'Did the PM  prepare Project/Sprint Schedule in coordination with QA Lead and Dev Lead?', 2, 3),
(8, 'Was Project/Sprint Schedule approved by management/customer', 2, 3),
(9, 'Did the PM Published weekly status report covering the anticipated risk, on-hand issues, planned vs actual progress and plan for next reporting period?', 9, 4),
(10, 'Did the Project Manger conduct a project/Sprint status review meeting with Project Team to discuss the status report on a weekly basis?', 3, 4),
(11, 'Were the FS/User Stories created to cover the whole scope of project/ Project Back log?', 7, 5),
(12, 'Was FS/User Stories reviewed & approved by client?', 5, 5),
(13, 'UX is reviewed and approved by the Client?', 3, 5),
(14, 'Were all changes proposed by client went through the formal review/ impact analysis cycle before implementation?', 8, 6),
(15, 'Did Technical Design reviewed and approved by architecture group?', 8, 7),
(33, 'Did the PM/ Dev TL used the Static code analysis tool for the project?', 3, 13),
(34, 'Did the Dev TL set up the Build Pipeline?', 3, 13),
(35, 'Was logic reviewed in code review process?', 4, 13),
(36, 'Did each member of the development team write unit tests?', 10, 14),
(37, 'Is Release Management Plan is Published and being followed?', 3, 15),
(38, 'Did the Dev team prepare build for the start of testing that includes code? If yes, did it contain DB scripts and installation instructions to deploy the code?', 2, 15),
(39, 'Did the Dev Team prepares the initial internal shipment package and notify the QA to process the shipment?', 2, 15),
(40, 'Is Test Plan Created?', 2, 16),
(41, 'Did QA share Release Acceptance Criteria with relevant stakeholders?', 1, 16),
(42, 'Was the project created in defect tracking tool by QA TL?', 1, 16),
(43, 'Did QA team prepared test cases?', 1, 16),
(44, 'Was mandatory test data prepared and documented in test cases?', 1, 16),
(45, 'Is QA provided separate Environment for Testing?', 2, 17),
(46, 'Was Acceptance Testing performed? ', 2, 17),
(47, 'Was System Testing performed?', 2, 17),
(48, 'Were all test cases executed?', 2, 17),
(49, 'Were defects tracked to closure? (Defect Resolution Life cycle)', 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Project Management'),
(2, 'Software-Engineering'),
(3, 'Development'),
(4, 'Assurance');

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE `stages` (
  `stage_id` int(11) NOT NULL,
  `stage_name` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`stage_id`, `stage_name`, `role_id`) VALUES
(2, 'Project Initiation', 1),
(3, 'Project Plannining', 1),
(4, 'Project Motitoring', 1),
(5, 'Requirement Analysis', 2),
(6, 'Change Management', 2),
(7, 'Technical Design', 2),
(13, 'Code Writing', 3),
(14, 'Unit Testing', 3),
(15, 'Internal Release', 3),
(16, 'Test Planning & Designing', 4),
(17, 'QA Acceptance & System Testing', 4);

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `summary_id` int(11) NOT NULL,
  `NonConformanceSummary` text NOT NULL,
  `type` varchar(60) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `phase` varchar(60) NOT NULL,
  `report_id` int(11) DEFAULT NULL,
  `Observations` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`summary_id`, `NonConformanceSummary`, `type`, `owner`, `phase`, `report_id`, `Observations`) VALUES
(33, 'No technical design /review practice in place', 'Major', 'Technical Lead/Architect', 'Technical Design', 1, 'Test data should be prepere for detail testing'),
(34, 'No technical design /review practice in place', 'Major', 'Technical Lead/Architect', 'Technical Design', 1, 'Code review should be done by senior dev'),
(35, 'No technical design /review practice in place', 'Major', 'Technical Lead/Architect', 'Technical Design', 1, 'Test case review practice should be introduce'),
(36, 'No technical design /review practice in place', 'abc', 'aba', 'Requirement Analysis', 2, 'alsad'),
(37, 'No technical design /review practice in place', 'abc', 'aba', 'Requirement Analysis', 2, 'asd,lasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL,
  `designation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `fname`, `lname`, `email`, `password`, `designation`) VALUES
(1, 'AnasRasheed57', 'Anas', 'Rasheed', 'syed-anas@hotmail.my', '123', 'Internee'),
(2, 'AnasRasheed76', 'Anas', 'Rasheed', 'syed-anas@hotmail.com', '123', 'Internee'),
(12, 'MuhammadUmer95', 'Muhammad', 'Umer', 'muhammadumer526@gmail.com', 'Umer123', 'Internee'),
(13, 'AnasRasheed52', 'Anas', 'Rasheed', 'anas.rasheed@systemsltd.c', 'Test123', 'Internee'),
(17, 'admin', 'Anas', 'Rasheed', 'anas.rasheed@systemsltd.com', 'admin', 'Admin'),
(19, 'TestUser67', 'Test', 'User', 'test@hotmail.com', 'Racespeed2312', 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_list`
--
ALTER TABLE `check_list`
  ADD PRIMARY KEY (`checklist_id`),
  ADD KEY `report_id` (`report_id`),
  ADD KEY `stage_id` (`stage_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `stage` (`stage_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`stage_id`),
  ADD KEY `role` (`role_id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`summary_id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `check_list`
--
ALTER TABLE `check_list`
  MODIFY `checklist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
  MODIFY `stage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `summary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `check_list`
--
ALTER TABLE `check_list`
  ADD CONSTRAINT `check_list_ibfk_3` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`stage_id`),
  ADD CONSTRAINT `check_list_ibfk_4` FOREIGN KEY (`report_id`) REFERENCES `audit` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `stage` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`stage_id`);

--
-- Constraints for table `stages`
--
ALTER TABLE `stages`
  ADD CONSTRAINT `role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `summary`
--
ALTER TABLE `summary`
  ADD CONSTRAINT `summary_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `audit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
