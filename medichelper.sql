-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 03:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medichelper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `contact_number` varchar(12) NOT NULL,
  `address` varchar(150) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `employee_name`, `contact_number`, `address`, `job_title`, `user_name`, `password`) VALUES
(1, 'Mahin', '01686963558', 'Dhaka', 'admin', 'mhn034', '1234'),
(2, 'Naba', '01686963558', 'Dhaka', 'Admin', 'mhfz', '1234'),
(3, 'Shuvo', '01686963558', 'Dhanmondi', 'Manager', 'Shv', '1234'),
(4, 'Dihan', '01304555701', 'Dhaka', 'Senior Executive', 'Dhn', '1234'),
(5, 'Shakawat', '01304555701', 'Natunbazar', 'Senior  Executive', 'Shk', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `patient_id` int(5) NOT NULL,
  `booking_date` date NOT NULL DEFAULT current_timestamp(),
  `doctor_id` int(4) NOT NULL,
  `doctor_cat` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(5) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `doctor_number` varchar(12) NOT NULL,
  `address` varchar(150) NOT NULL,
  `category` varchar(150) NOT NULL,
  `time` varchar(12) NOT NULL,
  `day` varchar(12) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_name`, `doctor_number`, `address`, `category`, `time`, `day`, `user_name`, `password`) VALUES
(1, 'Rafiur Rashid', '01XXXXXXXX', 'Niketon', 'Heart', '5pm-8pm', 'SUN,MON,WED', 'rfr', '1234'),
(2, 'Muzahid', '01XXXXXXXX', 'Mirpur', 'Ear', '5PM-8PM', 'SAT,SUN,TUE', 'mzd', '1234'),
(3, 'Salman Shamil', '01XXXXXXXX', 'Dhaka', 'Eye', '5pm-8pm', 'SUN,MON,WED', 'slmn', '1234'),
(4, 'Suman Ahmed', '01XXXXXXXX', 'Dhanmondi', 'Eye', '5PM-8PM', 'SAT,SUN,TUE', 'SMN', '1234'),
(5, 'Shibli Amin', '01XXXXXXXX', 'Dhaka', 'Heart', '8PM-10PM', 'FRI', 'shbl', '1234'),
(6, 'Mohammed Imam Hasan', '01XXXXXXXX', 'Mugda', 'Heart', ' 10AM-12PM ', 'SUN ', 'imam ', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `description`) VALUES
(1, 'Covid 19 ', 'People with mild symptoms who are otherwise healthy should manage their symptoms at home. On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days'),
(2, 'Heart Attack', 'The main heart attack treatments are thrombolytic or clot-busting drugs, aspirin, nitrates and beta blockers. Aspirin is now given to all patients who arrive at the hospital with a suspected heart attack because it helps thin the blood and reduce the size of the clot blocking one of the blood vessels in the heart.');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `short_description`, `price`) VALUES
(2, 'Zimax', 'Azithromycin is an antibiotic medication used for the treatment of a number of bacterial infections. This includes middle ear infections, strep throat, pneumonia, traveler\'s diarrhea, and certain othe', 250),
(3, 'Pregaba', 'Azithromycin is an antibiotic useful for the treatment of bacterial infections. It is an azalide, a subclass of macrolide antibiotic. ', 100),
(4, 'Monas', 'Montelukast is a selective and orally active leukotriene receptor antagonist that inhibits the cysteinyl leukotriene receptor (CysLT1). The cysteinyl leukotrienes (LTC4, LTD4, LTE4) are products of ar', 50),
(5, 'Fexo', 'Fexo 120 mg Tablet is an effective and potent anti-allergic medicine consists of Fexofenadine. It is used to treat allergic symptoms like runny nose, watery eyes, sneezing, itching, hives, etc., assoc', 80),
(31, 'Torax 10', 'Tablet Torax Tablet ; Indications. Ketorolac Tromethamine is indicated for the short-term management of moderate to severe acute post-operative pain.', 10),
(34, 'Osartil 25', 'Osartil 25mg Tab contains Losartan, a medicine that lowers increased blood pressure (Angiotensin-II receptor antagonists)', 90);

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `id` int(5) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `patient_number` varchar(12) NOT NULL,
  `address` varchar(150) NOT NULL,
  `age` int(5) NOT NULL,
  `blood_group` varchar(12) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(7) NOT NULL,
  `cus_id` int(7) NOT NULL,
  `payment_title` varchar(10) NOT NULL,
  `amount` int(4) NOT NULL,
  `payment_status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
