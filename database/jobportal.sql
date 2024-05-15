-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 11:28 AM
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
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `a_id` int(4) NOT NULL,
  `a_ee_id` int(4) NOT NULL,
  `a_j_id` varchar(30) NOT NULL,
  `a_er_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(4) NOT NULL,
  `cont_fnm` varchar(30) NOT NULL,
  `cont_email` varchar(64) NOT NULL,
  `cont_query` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ee_id` int(4) NOT NULL,
  `ee_email` varchar(64) NOT NULL,
  `ee_password` varchar(64) NOT NULL,
  `ee_fname` varchar(30) NOT NULL,
  `ee_lname` varchar(30) NOT NULL,
  `ee_day` varchar(10) NOT NULL,
  `ee_month` varchar(10) NOT NULL,
  `ee_year` varchar(10) NOT NULL,
  `ee_gender` varchar(30) NOT NULL,
  `ee_country` varchar(130) NOT NULL,
  `ee_city` varchar(30) NOT NULL,
  `ee_education` varchar(20) NOT NULL,
  `ee_master` varchar(20) NOT NULL,
  `ee_mcode` varchar(10) NOT NULL,
  `ee_mnumber` varchar(30) NOT NULL,
  `ee_experience` varchar(30) NOT NULL,
  `ee_skills` varchar(130) NOT NULL,
  `ee_industry` varchar(130) NOT NULL,
  `ee_certification` varchar(130) NOT NULL,
  `ee_path` varchar(130) NOT NULL,
  `confirm_code` varchar(65) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ee_id`, `ee_email`, `ee_password`, `ee_fname`, `ee_lname`, `ee_day`, `ee_month`, `ee_year`, `ee_gender`, `ee_country`, `ee_city`, `ee_education`, `ee_master`, `ee_mcode`, `ee_mnumber`, `ee_experience`, `ee_skills`, `ee_industry`, `ee_certification`, `ee_path`, `confirm_code`) VALUES
(1, 'john@example.com', 'password123', 'John', 'Mwangi', '15', '03', '1990', 'Male', 'Kenya', 'Nairobi', 'Bachelor', 'Computer Science', 'CS101', '+254712345678', '5 years', 'Java, Python', 'Information Technology', 'Cisco Certified Network Associate (CCNA)', '/path/to/resume', 'ABC123'),
(2, 'jane@example.com', 'password456', 'Jane', 'Wambui', '22', '07', '1985', 'Female', 'Kenya', 'Mombasa', 'Bachelor', 'Economics', 'EC101', '+254723456789', '8 years', 'Data Analysis, Statistics', 'Finance', 'Certified Financial Analyst (CFA)', '/path/to/resume', 'DEF456'),
(3, 'peter@example.com', 'password789', 'Peter', 'Kamau', '10', '11', '1982', 'Male', 'Kenya', 'Kisumu', 'Bachelor', 'Mechanical Engineeri', 'ME101', '+254734567890', '10 years', 'CAD, SolidWorks', 'Engineering', 'Professional Engineer (PE)', '/path/to/resume', 'GHI789'),
(4, 'mary@example.com', 'passwordabc', 'Mary', 'Njeri', '05', '05', '1988', 'Female', 'Kenya', 'Eldoret', 'Bachelor', 'Medicine', 'MED101', '+254745678901', '7 years', 'Surgery, Pediatrics', 'Healthcare', 'Medical Doctor (MD)', '/path/to/resume', 'JKL012'),
(6, 'grace@example.com', 'passwordegf', 'Grace', 'Achieng', '12', '12', '1995', 'Female', 'Kenya', 'Nyeri', 'Bachelor', 'Education', 'ED101', '+254767890123', '4 years', 'Curriculum Development, Classroom Management', 'Education', 'Teaching Certificate', '/path/to/resume', 'PQR678'),
(7, 'samuel@example.com', 'passwordghi', 'Samuel', 'Maina', '25', '04', '1980', 'Male', 'Kenya', 'Thika', 'Bachelor', 'Business Administrat', 'BA101', '+254778901234', '9 years', 'Marketing, Sales', 'Marketing', 'Google Analytics Certification', '/path/to/resume', 'STU901'),
(9, 'charles@example.com', 'passwordmno', 'Charles', 'Ogutu', '30', '01', '1984', 'Male', 'Kenya', 'Kericho', 'Bachelor', 'Agriculture', 'AG101', '+254790123456', '8 years', 'Crop Management, Agribusiness', 'Agriculture', 'Certified Crop Advisor (CCA)', '/path/to/resume', 'YZA567'),
(10, 'alice@example.com', 'passwordpqr', 'Alice', 'Muthoni', '17', '06', '1991', 'Female', 'Kenya', 'Kitale', 'Bachelor', 'Environmental Scienc', 'ES101', '+254701234567', '6 years', 'Environmental Impact Assessment, Conservation Biology', 'Environmental Science', 'LEED Green Associate', '/path/to/resume', 'BCD890'),
(100, 'felix@felix.com', '1234567', 'Felix', 'Nyakundi', '1', '2', '24', 'Male', 'Botswana', 'Molo', 'B.Tech/B.E.', 'M.A', '254', '0712050004', '10+', '44', 'kivcg', 'vgfv', 'uploads/', 'd2d071c46e16b9230cfce29002be4741');

-- --------------------------------------------------------

--
-- Table structure for table `employeesapproved`
--

CREATE TABLE `employeesapproved` (
  `ee_id` int(4) NOT NULL,
  `ee_email` varchar(64) NOT NULL,
  `ee_password` varchar(64) NOT NULL,
  `ee_fname` varchar(30) NOT NULL,
  `ee_lname` varchar(30) NOT NULL,
  `ee_day` varchar(10) NOT NULL,
  `ee_month` varchar(10) NOT NULL,
  `ee_year` varchar(10) NOT NULL,
  `ee_gender` varchar(30) NOT NULL,
  `ee_address` varchar(256) NOT NULL,
  `ee_country` varchar(130) NOT NULL,
  `ee_city` varchar(30) NOT NULL,
  `ee_education` varchar(20) NOT NULL,
  `ee_master` varchar(20) NOT NULL,
  `ee_mcode` varchar(10) NOT NULL,
  `ee_mnumber` varchar(30) NOT NULL,
  `ee_experience` varchar(30) NOT NULL,
  `ee_skills` varchar(130) NOT NULL,
  `ee_industry` varchar(130) NOT NULL,
  `ee_certification` varchar(130) NOT NULL,
  `ee_path` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `er_id` int(6) NOT NULL,
  `er_company` varchar(128) NOT NULL,
  `er_companytype` varchar(128) NOT NULL,
  `er_sector` varchar(128) NOT NULL,
  `er_category` varchar(128) NOT NULL,
  `er_companyemail` varchar(64) NOT NULL,
  `er_password` varchar(64) NOT NULL,
  `er_address` varchar(255) NOT NULL,
  `er_city` varchar(128) NOT NULL,
  `er_state` varchar(64) NOT NULL,
  `er_country` varchar(128) NOT NULL,
  `er_website` varchar(128) NOT NULL,
  `er_TCCode` varchar(64) NOT NULL,
  `er_TACode` varchar(64) NOT NULL,
  `er_TNumber` varchar(64) NOT NULL,
  `er_title` varchar(64) NOT NULL,
  `er_fname` varchar(64) NOT NULL,
  `er_lname` varchar(64) NOT NULL,
  `er_designation` varchar(64) NOT NULL,
  `er_contactemail` varchar(64) NOT NULL,
  `er_MCCode` varchar(64) NOT NULL,
  `er_MNumber` varchar(64) NOT NULL,
  `er_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`er_id`, `er_company`, `er_companytype`, `er_sector`, `er_category`, `er_companyemail`, `er_password`, `er_address`, `er_city`, `er_state`, `er_country`, `er_website`, `er_TCCode`, `er_TACode`, `er_TNumber`, `er_title`, `er_fname`, `er_lname`, `er_designation`, `er_contactemail`, `er_MCCode`, `er_MNumber`, `er_active`) VALUES
(1, 'google', 'agency', 'corporate', 'IT', 'employer@mail.com', 'employer', 'American city,new york,pb no:56', 'new york', 'america', 'USA', 'www.google.com', '000', '132', '66339955', 'Mr.', 'Dileep', 'B', 'CEO', 'dileep@gmail.com', '91', '9496097335', 1),
(2, 'Safaricom', 'Public', 'Telecommunications', 'Telecom', 'info@safaricom.co.ke', 'safaripassword', '456 Telecom Avenue', 'Nairobi', 'Nairobi', 'Kenya', 'www.safaricom.co.ke', '654321', 'DEF456', '+254987654321', 'Recruitment Manager', 'Jane', 'Smith', 'Recruitment Manager', 'recruitment@safaricom.co.ke', '123456', '+254123456789', 1),
(3, 'KenGen', 'Public', 'Energy', 'Power', 'info@kengen.co.ke', 'kengen123', '789 Power Street', 'Nairobi', 'Nairobi', 'Kenya', 'www.kengen.co.ke', '789123', 'GHI789', '+254789123456', 'Head of HR', 'Alice', 'Johnson', 'Head of HR', 'hr@kengen.co.ke', '987654', '+254987654321', 1),
(4, 'KCB Group', 'Public', 'Finance', 'Banking', 'info@kcbgroup.co.ke', 'kcb123', '101 Banking Road', 'Nairobi', 'Nairobi', 'Kenya', 'www.kcbgroup.co.ke', '101010', 'JKL101', '+254101010101', 'HR Director', 'Michael', 'Williams', 'HR Director', 'hr@kcbgroup.co.ke', '101010', '+254101010101', 1),
(5, 'Bidco Africa', 'Private', 'Manufacturing', 'Consumer Goods', 'info@bidcoafrica.co.ke', 'bidcopassword', '456 Manufacturing Boulevard', 'Thika', 'Kiambu', 'Kenya', 'www.bidcoafrica.co.ke', '456789', 'MNO456', '+254456789123', 'Recruiter', 'Emily', 'Brown', 'Recruiter', 'recruitment@bidcoafrica.co.ke', '789123', '+254789123456', 1),
(6, 'Equity Group', 'Public', 'Finance', 'Banking', 'info@equitygroup.co.ke', 'equity123', '789 Banking Avenue', 'Nairobi', 'Nairobi', 'Kenya', 'www.equitygroup.co.ke', '333444', 'PQR333', '+254333444555', 'Head of Recruitment', 'David', 'Wilson', 'Head of Recruitment', 'recruitment@equitygroup.co.ke', '222555', '+254222555666', 1),
(7, 'Kenya Airways', 'Public', 'Transportation', 'Aviation', 'info@kenyaairways.co.ke', 'kqpassword', '101 Aviation Street', 'Nairobi', 'Nairobi', 'Kenya', 'www.kenyaairways.co.ke', '777888', 'STU777', '+254777888999', 'Talent Acquisition Manager', 'Sarah', 'Martinez', 'Talent Acquisition Manager', 'talent@kenyaairways.co.ke', '666999', '+254666999888', 1),
(17, 'Acacia Mining', 'Private', 'Mining', 'Mining', 'info@acaciamining.co.ke', 'password123', '123 Mining Street', 'Nairobi', 'Nairobi', 'Kenya', 'www.acaciamining.co.ke', '123456', 'ABC123', '+254123456789', 'HR Manager', 'John', 'Doe', 'HR Manager', 'hr@acaciamining.co.ke', '654321', '+254987654321', 1),
(100, 'Hello', 'Company', 'Banking/FinancialServices/Broking', 'Corporate Planning / Consulting', 'felix@felix.com', '1234567', '292', 'Molo', 'dj', 'Botswana', 'dc', '11211', '44', '4', 'Prof', 'Felix', 'Nyakundi', 's', 'theluckylix@gmail.com', '4', '4546', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `j_id` int(4) NOT NULL,
  `j_er_id` int(30) NOT NULL,
  `j_category` varchar(128) NOT NULL,
  `j_owner_name` varchar(128) NOT NULL,
  `j_title` varchar(128) NOT NULL,
  `j_hours` float(3,1) NOT NULL,
  `j_salary` int(64) NOT NULL,
  `j_date` date NOT NULL,
  `j_sector` varchar(128) NOT NULL,
  `j_type` varchar(128) NOT NULL,
  `j_country` varchar(128) NOT NULL,
  `j_vacancy` int(10) NOT NULL,
  `j_company` varchar(128) NOT NULL,
  `j_experience` int(7) NOT NULL,
  `j_description` varchar(300) NOT NULL,
  `j_city` varchar(128) NOT NULL,
  `j_active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`j_id`, `j_er_id`, `j_category`, `j_owner_name`, `j_title`, `j_hours`, `j_salary`, `j_date`, `j_sector`, `j_type`, `j_country`, `j_vacancy`, `j_company`, `j_experience`, `j_description`, `j_city`, `j_active`) VALUES
(1, 1, 'Engineering', 'John Doe', 'Software Engineer', 40.0, 80000, '2024-05-04', 'Technology', 'Full-time', 'USA', 3, 'ABC Tech', 2, 'We are looking for a skilled software engineer...', 'San Francisco', 1),
(2, 2, 'Marketing', 'Jane Smith', 'Marketing Manager', 35.0, 70000, '2024-05-05', 'Business', 'Full-time', 'USA', 1, 'XYZ Corp', 3, 'XYZ Corp is seeking a Marketing Manager...', 'New York', 1),
(3, 3, 'Finance', 'Alice Johnson', 'Financial Analyst', 40.0, 75000, '2024-05-06', 'Finance', 'Full-time', 'USA', 2, 'Finance Solutions', 1, 'Finance Solutions is hiring a Financial Analyst...', 'Chicago', 1),
(4, 4, 'Healthcare', 'Michael Williams', 'Registered Nurse', 36.0, 65000, '2024-05-07', 'Healthcare', 'Full-time', 'USA', 5, 'City Hospital', 3, 'City Hospital is seeking Registered Nurses...', 'Los Angeles', 1),
(5, 5, 'Education', 'Emily Brown', 'Elementary Teacher', 30.0, 55000, '2024-05-08', 'Education', 'Full-time', 'USA', 3, 'Oak Elementary', 2, 'Oak Elementary School is looking for an Elementary Teacher...', 'Boston', 1),
(6, 6, 'Engineering', 'David Wilson', 'Civil Engineer', 40.0, 85000, '2024-05-09', 'Technology', 'Full-time', 'USA', 1, 'BuildWell Construction', 4, 'BuildWell Construction seeks a Civil Engineer...', 'Seattle', 1),
(7, 7, 'Sales', 'Sarah Martinez', 'Sales Representative', 40.0, 60000, '2024-05-10', 'Business', 'Full-time', 'USA', 2, 'Tech Solutions', 2, 'Tech Solutions is hiring Sales Representatives...', 'Austin', 1),
(8, 8, 'IT', 'Daniel Garcia', 'IT Technician', 40.0, 60000, '2024-05-11', 'Technology', 'Full-time', 'USA', 3, 'IT Services Inc.', 1, 'IT Services Inc. is looking for an IT Technician...', 'Houston', 1),
(9, 9, 'Hospitality', 'Olivia Rodriguez', 'Hotel Manager', 45.0, 75000, '2024-05-12', 'Hospitality', 'Full-time', 'USA', 1, 'Grand Hotel', 5, 'Grand Hotel is seeking a Hotel Manager...', 'Miami', 1),
(10, 10, 'Engineering', 'James Lee', 'Electrical Engineer', 40.0, 90000, '2024-05-13', 'Technology', 'Full-time', 'USA', 2, 'Electricity Inc.', 3, 'Electricity Inc. seeks an Electrical Engineer...', 'San Jose', 1),
(23, 100, 'IT Software - Application Programming / Maintenance', 'Hello', 'r4r43', 0.0, 11, '2024-04-28', 'Consumer FMCG/Foods/Beverages', 'Part Time', 'Bahamas', 43, 'Hello', 0, '3r3', 'Molo', 0),
(24, 100, 'IT Software - Application Programming / Maintenance', 'Hello', 'r4r43', 0.0, 11, '2024-04-28', 'Consumer FMCG/Foods/Beverages', 'Part Time', 'Bahamas', 43, 'Hello', 0, '3r3', 'Molo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `validity`
--

CREATE TABLE `validity` (
  `employer_id` int(4) NOT NULL,
  `plan` varchar(30) NOT NULL,
  `number` int(4) NOT NULL,
  `validity1` int(4) NOT NULL,
  `downloads` int(4) NOT NULL,
  `validity2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `validity`
--

INSERT INTO `validity` (`employer_id`, `plan`, `number`, `validity1`, `downloads`, `validity2`) VALUES
(100, '5 Job', 38, 30, 40, '2024-04-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ee_id`);

--
-- Indexes for table `employeesapproved`
--
ALTER TABLE `employeesapproved`
  ADD PRIMARY KEY (`ee_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`er_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `validity`
--
ALTER TABLE `validity`
  ADD PRIMARY KEY (`employer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ee_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `employeesapproved`
--
ALTER TABLE `employeesapproved`
  MODIFY `ee_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `er_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `j_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `validity`
--
ALTER TABLE `validity`
  MODIFY `employer_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
