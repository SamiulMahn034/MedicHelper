-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql4.freesqldatabase.com
-- Generation Time: May 29, 2022 at 06:39 AM
-- Server version: 5.5.54-0ubuntu0.12.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql4496064`
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
(5, 'Shakawat', '01304555701', 'Natunbazar', 'Senior  Executive', 'Shk', '1234'),
(36, 'Mr x', '01304555701', '84/c', 'yz', 'adada', '1234'),
(37, '', '', 'Coatchandpur', '', 'mhn', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(100) NOT NULL,
  `doctor_id` int(100) NOT NULL,
  `doctor_name` varchar(500) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `doctor_id`, `doctor_name`, `patient_id`, `patient_name`, `time`, `date`) VALUES
(1, 1, 'Rafiur Rashid', 1, 'Mahin', '8:00pm - 10;00 pm', '2022-05-22'),
(2, 3, 'Rafiur Rashid', 1, 'Mahin', ' 8:00pm - 10;00 pm ', '2022-05-24'),
(3, 3, 'Rafiur Rashid', 2, 'Naba', ' 8:00pm - 10;00 pm ', '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(300) NOT NULL,
  `doctor_number` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `category` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `day` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `authQues` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_name`, `doctor_number`, `address`, `category`, `time`, `day`, `username`, `password`, `authQues`) VALUES
(3, 'Rafiur Rashid', '01304555701', 'Niketon', 'Eye', '8:00pm - 10;00 pm', 'Sun,Mon,Tue', 'rfr', '1234', 'blue'),
(4, 'Salman Shamil', '01686963558', 'Rayerbag', 'Ear', '8:00pm - 10;00 pm', 'SUm,Mon,Tue', 'SHL', '1234', 'Red'),
(5, 'A.K.M Muzahid Islam', '01686963558', 'Mirpur', 'heart', '  8:00pm - 10;00 pm  ', 'Sat, Wed, Tue  ', 'MZHD  ', '1234  ', 'Green'),
(6, 'Suman Ahmed', '01304555701', 'Rayerbag', 'Heart', '8:00pm - 10;00 pm', 'Sat, Wed, Tue', 'SMN', '123', 'Green'),
(8, '', '', '', '', '', '', '', '', '');

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
(2, 'Heart Attack', 'The main heart attack treatments are thrombolytic or clot-busting drugs, aspirin, nitrates and beta blockers. Aspirin is now given to all patients who arrive at the hospital with a suspected heart attack because it helps thin the blood and reduce the size of the clot blocking one of the blood vessels in the heart.'),
(6, 'Asthma', 'Asthma is a long-term inflammatory disease of the airways of the lungs. It is characterized by variable and recurring symptoms, reversible airflow obstruction, and easily triggered bronchospasms.');

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE `login_log` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'Zimax', 'Azithromycin is indicated for infections (caused by susceptible organisms) in lower respiratory tract infections including bronchitis and pneumonia, in upper respiratory tract infections including sin', 250),
(3, 'Pregaba', 'Pregaba 75 Capsule is a medicine used to relieve pain caused by nerve damage (neuropathic pain) due to diabetes, shingles (herpes zoster infection), spinal cord injury, or other conditions. It is also', 100),
(4, 'Monas', 'Montelukast is a selective and orally active leukotriene receptor antagonist that inhibits the cysteinyl leukotriene receptor (CysLT1). The cysteinyl leukotrienes (LTC4, LTD4, LTE4) are products of ar', 50),
(5, 'Fexo', 'Fexo 120 mg Tablet is an effective and potent anti-allergic medicine consists of Fexofenadine. It is used to treat allergic symptoms like runny nose, watery eyes, sneezing, itching, hives, etc., assoc', 80),
(31, 'Torax 10', 'Ketorolac Tromethamine is a drug of pyrrolo-pyrrole group of nonsteroidal anti-inflammatory drug (NSAID). Chemically it is known as 5 benzoyle-2,3-dihydro-1H-pyrroligine-1-carboxylic acid, compound wi', 100),
(42, 'Osartil 25', 'Osartil 25mg Tab contains Losartan, a medicine that lowers increased blood pressure (Angiotensin-II receptor antagonists)', 80);

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

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`id`, `patient_name`, `patient_number`, `address`, `age`, `blood_group`, `user_name`, `password`) VALUES
(1, '1111', '11111', '111111', 1, '11111', '1234', '1234'),
(2, 'Samiul Mahin', '01304555701', 'Coatchandpur', 23, 'B+', 'mhn', '1234');

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

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(100) NOT NULL,
  `doctor_id` int(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `medication` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `doctor_id`, `doctor_name`, `patient_id`, `patient_name`, `time`, `date`, `medication`) VALUES
(3, 3, '', 2, 'Naba', ' 8:00pm - 10;00 pm ', '2022-05-24', 'napa'),
(2, 3, '', 1, 'Mahin', ' 8:00pm - 10;00 pm ', '2022-05-24', 'napa'),
(3, 3, 'Rafiur Rashid', 2, 'Naba', ' 8:00pm - 10;00 pm ', '2022-05-24', 'napa.peracitamol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login_log`
--
ALTER TABLE `login_log`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
