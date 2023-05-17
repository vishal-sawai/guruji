-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 09:40 AM
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
-- Database: `guruji`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `district` text NOT NULL,
  `taluka` text NOT NULL,
  `samagri` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `address` text NOT NULL,
  `pujaname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`fname`, `lname`, `phone`, `email`, `district`, `taluka`, `samagri`, `date`, `time`, `address`, `pujaname`) VALUES
('Vishal', 'Sawai', 2147483647, 'vishalsawai17252@gmail.com', 'Auragabad', 'Auragabad', 'WithSamagri', '2022-05-20', '10:42:00', 'Vitkheda, Kannad Subdistrict', 'Ganesh Puja'),
('Rupesh', 'Rawate', 1234567890, '', 'Auragabad', 'Sillod', 'WithoutSamagri', '2022-05-18', '23:32:00', 'At vitkhed ', 'Durga puja');

-- --------------------------------------------------------

--
-- Table structure for table `guruji_profile`
--

CREATE TABLE `guruji_profile` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `district` text NOT NULL,
  `talukas` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guruji_profile`
--

INSERT INTO `guruji_profile` (`fname`, `lname`, `phone`, `Email`, `photo`, `district`, `talukas`, `address`) VALUES
('NARESH', 'JOSHI', 2147483647, 'nareshj02233@gmail.com', 'guruji1.png', 'Auragabad', 'Auragabad', 'pratap nagar, aurangabad'),
('Ganesh', 'Mapare', 1234567890, 'sawaivishal9623@gmail.com', 'ganesh guru.jpg', 'Auragabad', 'Kannad', 'Vitkheda, Kannad, Aurangabad 431115'),
('vishal', 'sawai', 2147483647, 'vishal@gmail.com', 'guruji2.png', 'Auragabad', 'Auragabad', 'vitkhea,deogaon, kannad, aurangabad');

-- --------------------------------------------------------

--
-- Table structure for table `puja`
--

CREATE TABLE `puja` (
  `puja_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `samagri` varchar(1000) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puja`
--

INSERT INTO `puja` (`puja_name`, `description`, `samagri`, `photo`) VALUES
('Ganesh Puja', 'Ganapati puja is performed before any venture is started. Ganesha is revered as the son of the Shiva and Parvati, and is always honored first in most worship services and rituals. Ganesha is also known as Vigneswara, Vinayaka, Gajamukha and Ainkaran. Ganpathy is the presiding deity of \'Mooladhara Chakra\' which is one of the seven major energy centers in human body. He is worshipped for siddhi (success in undertakings), and buddhi (intelligence). He is also the God of education, knowledge and wisdom, literature and the fine arts. Ganpati puja is performed to remove obstacles, to improve knowledge and wisdom. ', 'red_hibiscus_flowers Durva 11_Modak Kheer yellow_c', 'ganesh_puja.jpg'),
('Durga puja', 'In Sanskrit, Durga means She who is incomprehensible or difficult to reach. Durga represents the Divine Mother and she is the energy aspect of the Lord. Durga Puja is the greatest Hindu festival celebrated in various parts of India in different styles in which God is adored as Mother. The beginning of summer and the beginning of winter are two very important junctions of climatic and solar influence. These two periods are taken as sacred  opportunities for the worship of the Divine Mother. They are indicated respectively by the Rama Navaratri (April-May) and the Durga Navaratri (September-October). The bodies and minds of people undergo a considerable change on account of the changes in Nature. Worshiping the divine as a mother brings auspiciousness, prosperity, knowledge, to overcome fears and all other potent powers in our life.', 'Gangajal Janeu Dhoop Agarbatti cotton Camphor Chandan Kumkum haldi 1_Coconut Fruits(five) 10_Paan_leaves Ghee Milk Honey Sugar Yogurt Dry_Fruits Sweet Flowers Red _Cloth Rice', 'durga_puja.jpg'),
('Lakhmi Puja', 'Maha Lakshmi puja is  performed to Goddess Lakshmi. Maha Lakshmi is the bestower of wealth, fortune, purity, divinity, friends, marriage, children, food, beauty, health and happiness in family. Lakshmi  puja when performed in a place bestows prosperity and tremendous positive energy  and attracts fortune with wisdom.', 'Gangajal Janeu Dhoop Agarbatti cotton Camphor Chandan Kumkum haldi 1_Coconut Fruits(five) 10_Paan_leaves Ghee Milk Honey Sugar Yogurt Dry_Fruits Sweet Flowers Red _Cloth Rice', 'laxmi puja.jfif'),
('Navagraha Puja', 'Navagraha Puja is performed traditionally for nine planets which produces tremendous positive energy, and  helps us to gain courage to face any situation in our lives. According to Vedic Astrology, the position of planet at the time of human birth will have influence on actions and reaction to different situations in life. Improper planetary alignment at the time of birth for an individual is called as a dosha or negative influence. Nava graha puja helps to dilute the  negative influences and infuses peace and prosperity. ', 'Gangajal Janeu Dhoop Agarbatti cotton Camphor Chandan Kumkum haldi 1_Coconut Fruits(five) 10_Paan_leaves Ghee Milk Honey Sugar Yogurt Dry_Fruits Sweet Flowers Red _Cloth Rice', 'navgraha puja.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `phone`, `Email`, `password`, `dob`, `address`) VALUES
('Joshi', 'joshi', 2147483647, 'naresh@gmail.com', 'naresh', '2022-04-03', 'DATTA NAGAR, PARTUR'),
('Joshi', 'joshi', 2147483647, 'nareshj02233@gmail.com', '1234', '2022-04-01', 'DATTA NAGAR, PARTUR'),
('Joshi', '', 2147483647, 'nareshj@gmail.com', 'naresh1234', '2022-04-23', 'DATTA NAGAR, PARTUR\r\n'),
('vishal', 'sawai', 2147483647, 'sv@gmail.com', '12345', '2022-05-25', 'xyz'),
('vishal', 'sawai', 2147483647, 'vishal@gmail.com', 'vishal@1234', '2022-04-01', 'xyz'),
('Vishal', 'Sawai', 2147483647, 'vishalsawai17252@gmail.com', 'vs@12345', '2022-09-07', 'Vitkheda, Kannad Subdistrict'),
('vishal', 'sawai', 2147483647, 'vs@gmail.com', '1234', '2001-07-05', 'at vitkheda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guruji_profile`
--
ALTER TABLE `guruji_profile`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
