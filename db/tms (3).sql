-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 01:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `TITLE`, `DESCRIPTION`) VALUES
(1, 'Welcome to Deshadanam!!!...', 'Since then, our courteous and committed team members have always ensured a pleasant and enjoyable tour for the clients.This arduous effort has enabled Shreya Tour & Travels to be recognized as a dependable Travel Solutions provider with three offices Delhi. We have got packages to suit the discerning traveler\'s budget and savor. Book your dream vacation online. Supported quality and proposals of our travel consultants, we have a tendency to welcome you to decide on from holidays packages and customize them according to your plan.');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(50) NOT NULL,
  `P_ID` varchar(100) NOT NULL,
  `EMAIL` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `P_ID`, `EMAIL`) VALUES
(2, '39', 'rohithsreekumar96@gmail.com'),
(3, '39', 'rohithsreekumar96@gmail.com'),
(4, '39', 'rohithsreekumar96@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `NUMBER` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `ADDRESS`, `NUMBER`, `EMAIL`) VALUES
(1, 'sreesadanam', '9645584806', 'rohithsreekumar96@gmail.com'),
(2, 'kazhakkuttam', '9865321478', 'geethakl1967@gmail.com'),
(3, 'bangalore city kk', '9876543219', 'abhishek@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SUBJECT` varchar(50) NOT NULL,
  `MESSAGE` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`ID`, `NAME`, `EMAIL`, `SUBJECT`, `MESSAGE`) VALUES
(18, 'Akash Verma', 'akash@gmail.com', 'Enquiry About Maldives Tour Package', 'Hi, I am Akash Verma, I saw your website from an advertisement, and in that it showed a tour package of Maldives. I want to know more about that packa'),
(19, 'Vinayak Khaleel', 'vinayak@yahoo.in', 'Enquiry About International Packages.', 'Hello, I am Vinayak Khaleel, I just need some info about your International tour packages. Ping me on this mail. Thank You. '),
(20, 'abhishek', 'rohithsreekumar96@gmail.com', 'vfdv', 'wdff'),
(21, 'abhishek', 'abhishek@gmail.com', 'hello', 'helloo');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `FEEDBACK` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `ID`, `FEEDBACK`) VALUES
(1, 19, 'it was a wonderfull experience thankyou'),
(2, 18, 'hotels are too bad'),
(3, 22, 'twev 333 4t  3t3 '),
(4, 22, 'i love u'),
(5, 21, 'i love u'),
(7, 23, 'trip 22 nice work'),
(10, 24, 'Hi Vishwa,\r\nHow are you doing? Hope you are doing well.\r\nWe had a great trip in India for 6days\r\nAnd my family and I we can say that we have received a great service from your team.\r\nAll the hotels we');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(256) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `EMAIL`, `PASSWORD`, `STATUS`) VALUES
(21, 'rohithsreekumar961@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1'),
(22, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0'),
(23, 'rohithsreekumar96@gmail.com', '7deb2a92e95689fb3bce0a96eca0592f', '1'),
(24, 'krishnanathul2792@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(2000) NOT NULL,
  `TYPE` varchar(2000) NOT NULL,
  `AMOUNT` varchar(2000) NOT NULL,
  `IMAGE` varchar(2000) NOT NULL,
  `LOCATION` varchar(2000) NOT NULL,
  `FEATURES` varchar(2000) NOT NULL,
  `DETAILS` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`ID`, `TITLE`, `TYPE`, `AMOUNT`, `IMAGE`, `LOCATION`, `FEATURES`, `DETAILS`) VALUES
(39, 'goa trip', 'family', '500', '123.jpg', 'alappy,vayanad,kollam,vallikunnam', 'free food  free stay', 'hipe'),
(40, 'madhura', 'family', '20000', 'img.jpg', 'goa', 'free food  free stay', 'Madhura Bachal is a pioneer of Maharashtrian cuisine in the digital world. '),
(41, 'CANADA', 'Couple', '20000', 'im.jpg', 'erappan paara,vallikunnam,punnapra', ' Admire the beauty of Amer Fort by visiting the most authentic Sheesh Mahal where the legendary song ‘Pyaar kiya toh darna kya’ was shot', 'Madhura Bachal is a pioneer of Maharashtrian cuisine in the digital world. dfgfdbg'),
(42, 'hampi', 'Family', '50000', 'img.jpg', 'karnataka', 'free food  free stay', 'heloo');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payer_id` varchar(50) NOT NULL,
  `payer_email` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `USER_EMAIL` varchar(200) NOT NULL,
  `P_ID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `USER_EMAIL`, `P_ID`) VALUES
(1, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '1000.00', 'USD', 'approved', '', ''),
(2, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '500.00', 'USD', 'approved', '', ''),
(3, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '500.00', 'USD', 'approved', '', ''),
(4, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '500.00', 'USD', 'approved', '', ''),
(5, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '500.00', 'USD', 'approved', '', ''),
(6, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '500.00', 'USD', 'approved', '', ''),
(7, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '500.00', 'USD', 'approved', '', ''),
(8, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '20000.00', 'USD', 'approved', '', ''),
(9, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '500.00', 'USD', 'approved', '', ''),
(10, 'UQP333QLUUM7J', 'aiswaryasasidharan1996@gmail.com', '500.00', 'USD', 'approved', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `NUMBER` varchar(50) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `NAME`, `NUMBER`, `ADDRESS`) VALUES
(21, 'abhishek', '9645584806', 'rtgrtehherhe'),
(23, 'rohith s', '9645584806', 'sreesadanam'),
(24, 'Athul Krishnan R', '9747059321', 'Kollam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`,`EMAIL`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
