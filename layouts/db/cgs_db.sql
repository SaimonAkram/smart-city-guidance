-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 09:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(11, 'Sea Beach'),
(12, 'Hospital'),
(14, 'Chittagong'),
(15, 'Park'),
(16, 'Rangamati'),
(17, 'bandorban'),
(18, 'waterfall'),
(19, 'lake');

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `Rank` int(11) DEFAULT NULL,
  `City` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `Area_km2` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `Population_2011` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `District` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `Division` varchar(19) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`Rank`, `City`, `Area_km2`, `Population_2011`, `District`, `Division`) VALUES
(1, 'Bogra', '30.20[6]', '540,000[6]', 'Bogra', 'Rajshahi Division'),
(2, 'Kushtia', '21.32[7]', '238,922[7]', 'Kushtia', 'Khulna Division'),
(3, 'Jessore', '28.56', '237478', 'Jessore', 'Khulna Division'),
(4, 'Cox\'s Bazar', '24.45', '223522', 'Cox\'s Bazar', 'Chittagong Division'),
(5, 'Manikganj', '42.28', '200000', 'Manikganj', 'Dhaka Division'),
(6, 'Brahmanbaria', '22.49', '193814', 'Brahmanbaria', 'Chittagong Division'),
(7, 'Dinajpur', '22', '191329', 'Dinajpur', 'Rangpur Division'),
(8, 'Nawabganj', '32.09', '180731', 'Chapai Nawabganj', 'Rajshahi Division'),
(9, 'Tangail', '33.8', '167412', 'Tangail', 'Dhaka Division'),
(10, 'Sirajganj', '31.27', '167200', 'Sirajganj', 'Rajshahi Division'),
(11, 'Chandpur', '22', '159021', 'Chandpur', 'Chittagong Division'),
(12, 'Feni', '22', '156971', 'Feni', 'Chittagong Division'),
(13, 'Jamalpur', '55.25', '150172', 'Jamalpur', 'Mymensingh Division'),
(14, 'Naogaon', '38.36', '150025', 'Naogaon', 'Rajshahi Division'),
(15, 'Narsingdi', '14.8', '146115', 'Narsingdi', 'Dhaka Division'),
(16, 'Pabna', '27.27', '144442', 'Pabna', 'Rajshahi Division'),
(17, 'Maijdee', '23.79', '130842', 'Noakhali', 'Chittagong Division'),
(18, 'Faridpur', '19.78', '122425', 'Faridpur', 'Dhaka Division'),
(19, 'Jhenaidah', '17.21', '110541', 'Jhenaidah', 'Khulna Division'),
(20, 'Satkhira', '31.1', '110500', 'Satkhira', 'Khulna Division'),
(21, 'Chowmuhani', '36', '132948', 'Noakhali', 'Chittagong Division'),
(22, 'Kishoreganj', '11.3', '103798', 'Kishoreganj', 'Dhaka Division'),
(23, 'Bhairab', '15.71', '118992', 'Kishoreganj', 'Dhaka Division'),
(24, 'Saidpur', '26.5', '127104', 'Nilphamari', 'Rangpur Division'),
(25, 'Savar', '14.08', '296851', 'Dhaka', 'Dhaka Division'),
(26, 'Siddhirganj', '22.71', '256760', 'Narayanganj', 'Dhaka Division'),
(27, 'Tongi', '32.07', '350000', 'Gazipur', 'Dhaka Division'),
(28, 'Kaliakair', '27.16', '213061', 'Gazipur', 'Dhaka Division'),
(29, 'Chuadanga', '69.02', '128865', 'Chuadanga', 'Khulna Division'),
(30, 'Sreepur', '46.9', '132948', 'Gazipur', 'Dhaka Division'),
(1, 'Bogra', '30.20[6]', '540,000[6]', 'Bogra', 'Rajshahi Division'),
(2, 'Kushtia', '21.32[7]', '238,922[7]', 'Kushtia', 'Khulna Division'),
(3, 'Jessore', '28.56', '237478', 'Jessore', 'Khulna Division'),
(4, 'Cox\'s Bazar', '24.45', '223522', 'Cox\'s Bazar', 'Chittagong Division'),
(5, 'Manikganj', '42.28', '200000', 'Manikganj', 'Dhaka Division'),
(6, 'Brahmanbaria', '22.49', '193814', 'Brahmanbaria', 'Chittagong Division'),
(7, 'Dinajpur', '22', '191329', 'Dinajpur', 'Rangpur Division'),
(8, 'Nawabganj', '32.09', '180731', 'Chapai Nawabganj', 'Rajshahi Division'),
(9, 'Tangail', '33.8', '167412', 'Tangail', 'Dhaka Division'),
(10, 'Sirajganj', '31.27', '167200', 'Sirajganj', 'Rajshahi Division'),
(11, 'Chandpur', '22', '159021', 'Chandpur', 'Chittagong Division'),
(12, 'Feni', '22', '156971', 'Feni', 'Chittagong Division'),
(13, 'Jamalpur', '55.25', '150172', 'Jamalpur', 'Mymensingh Division'),
(14, 'Naogaon', '38.36', '150025', 'Naogaon', 'Rajshahi Division'),
(15, 'Narsingdi', '14.8', '146115', 'Narsingdi', 'Dhaka Division'),
(16, 'Pabna', '27.27', '144442', 'Pabna', 'Rajshahi Division'),
(17, 'Maijdee', '23.79', '130842', 'Noakhali', 'Chittagong Division'),
(18, 'Faridpur', '19.78', '122425', 'Faridpur', 'Dhaka Division'),
(19, 'Jhenaidah', '17.21', '110541', 'Jhenaidah', 'Khulna Division'),
(20, 'Satkhira', '31.1', '110500', 'Satkhira', 'Khulna Division'),
(21, 'Chowmuhani', '36', '132948', 'Noakhali', 'Chittagong Division'),
(22, 'Kishoreganj', '11.3', '103798', 'Kishoreganj', 'Dhaka Division'),
(23, 'Bhairab', '15.71', '118992', 'Kishoreganj', 'Dhaka Division'),
(24, 'Saidpur', '26.5', '127104', 'Nilphamari', 'Rangpur Division'),
(25, 'Savar', '14.08', '296851', 'Dhaka', 'Dhaka Division'),
(26, 'Siddhirganj', '22.71', '256760', 'Narayanganj', 'Dhaka Division'),
(27, 'Tongi', '32.07', '350000', 'Gazipur', 'Dhaka Division'),
(28, 'Kaliakair', '27.16', '213061', 'Gazipur', 'Dhaka Division'),
(29, 'Chuadanga', '69.02', '128865', 'Chuadanga', 'Khulna Division'),
(30, 'Sreepur', '46.9', '132948', 'Gazipur', 'Dhaka Division'),
(1, 'Bogra', '30.20[6]', '540,000[6]', 'Bogra', 'Rajshahi Division'),
(2, 'Kushtia', '21.32[7]', '238,922[7]', 'Kushtia', 'Khulna Division'),
(3, 'Jessore', '28.56', '237478', 'Jessore', 'Khulna Division'),
(4, 'Cox\'s Bazar', '24.45', '223522', 'Cox\'s Bazar', 'Chittagong Division'),
(5, 'Manikganj', '42.28', '200000', 'Manikganj', 'Dhaka Division'),
(6, 'Brahmanbaria', '22.49', '193814', 'Brahmanbaria', 'Chittagong Division'),
(7, 'Dinajpur', '22', '191329', 'Dinajpur', 'Rangpur Division'),
(8, 'Nawabganj', '32.09', '180731', 'Chapai Nawabganj', 'Rajshahi Division'),
(9, 'Tangail', '33.8', '167412', 'Tangail', 'Dhaka Division'),
(10, 'Sirajganj', '31.27', '167200', 'Sirajganj', 'Rajshahi Division'),
(11, 'Chandpur', '22', '159021', 'Chandpur', 'Chittagong Division'),
(12, 'Feni', '22', '156971', 'Feni', 'Chittagong Division'),
(13, 'Jamalpur', '55.25', '150172', 'Jamalpur', 'Mymensingh Division'),
(14, 'Naogaon', '38.36', '150025', 'Naogaon', 'Rajshahi Division'),
(15, 'Narsingdi', '14.8', '146115', 'Narsingdi', 'Dhaka Division'),
(16, 'Pabna', '27.27', '144442', 'Pabna', 'Rajshahi Division'),
(17, 'Maijdee', '23.79', '130842', 'Noakhali', 'Chittagong Division'),
(18, 'Faridpur', '19.78', '122425', 'Faridpur', 'Dhaka Division'),
(19, 'Jhenaidah', '17.21', '110541', 'Jhenaidah', 'Khulna Division'),
(20, 'Satkhira', '31.1', '110500', 'Satkhira', 'Khulna Division'),
(21, 'Chowmuhani', '36', '132948', 'Noakhali', 'Chittagong Division'),
(22, 'Kishoreganj', '11.3', '103798', 'Kishoreganj', 'Dhaka Division'),
(23, 'Bhairab', '15.71', '118992', 'Kishoreganj', 'Dhaka Division'),
(24, 'Saidpur', '26.5', '127104', 'Nilphamari', 'Rangpur Division'),
(25, 'Savar', '14.08', '296851', 'Dhaka', 'Dhaka Division'),
(26, 'Siddhirganj', '22.71', '256760', 'Narayanganj', 'Dhaka Division'),
(27, 'Tongi', '32.07', '350000', 'Gazipur', 'Dhaka Division'),
(28, 'Kaliakair', '27.16', '213061', 'Gazipur', 'Dhaka Division'),
(29, 'Chuadanga', '69.02', '128865', 'Chuadanga', 'Khulna Division'),
(30, 'Sreepur', '46.9', '132948', 'Gazipur', 'Dhaka Division'),
(1, 'Bogra', '30.20[6]', '540,000[6]', 'Bogra', 'Rajshahi Division'),
(2, 'Kushtia', '21.32[7]', '238,922[7]', 'Kushtia', 'Khulna Division'),
(3, 'Jessore', '28.56', '237478', 'Jessore', 'Khulna Division'),
(4, 'Cox\'s Bazar', '24.45', '223522', 'Cox\'s Bazar', 'Chittagong Division'),
(5, 'Manikganj', '42.28', '200000', 'Manikganj', 'Dhaka Division'),
(6, 'Brahmanbaria', '22.49', '193814', 'Brahmanbaria', 'Chittagong Division'),
(7, 'Dinajpur', '22', '191329', 'Dinajpur', 'Rangpur Division'),
(8, 'Nawabganj', '32.09', '180731', 'Chapai Nawabganj', 'Rajshahi Division'),
(9, 'Tangail', '33.8', '167412', 'Tangail', 'Dhaka Division'),
(10, 'Sirajganj', '31.27', '167200', 'Sirajganj', 'Rajshahi Division'),
(11, 'Chandpur', '22', '159021', 'Chandpur', 'Chittagong Division'),
(12, 'Feni', '22', '156971', 'Feni', 'Chittagong Division'),
(13, 'Jamalpur', '55.25', '150172', 'Jamalpur', 'Mymensingh Division'),
(14, 'Naogaon', '38.36', '150025', 'Naogaon', 'Rajshahi Division'),
(15, 'Narsingdi', '14.8', '146115', 'Narsingdi', 'Dhaka Division'),
(16, 'Pabna', '27.27', '144442', 'Pabna', 'Rajshahi Division'),
(17, 'Maijdee', '23.79', '130842', 'Noakhali', 'Chittagong Division'),
(18, 'Faridpur', '19.78', '122425', 'Faridpur', 'Dhaka Division'),
(19, 'Jhenaidah', '17.21', '110541', 'Jhenaidah', 'Khulna Division'),
(20, 'Satkhira', '31.1', '110500', 'Satkhira', 'Khulna Division'),
(21, 'Chowmuhani', '36', '132948', 'Noakhali', 'Chittagong Division'),
(22, 'Kishoreganj', '11.3', '103798', 'Kishoreganj', 'Dhaka Division'),
(23, 'Bhairab', '15.71', '118992', 'Kishoreganj', 'Dhaka Division'),
(24, 'Saidpur', '26.5', '127104', 'Nilphamari', 'Rangpur Division'),
(25, 'Savar', '14.08', '296851', 'Dhaka', 'Dhaka Division'),
(26, 'Siddhirganj', '22.71', '256760', 'Narayanganj', 'Dhaka Division'),
(27, 'Tongi', '32.07', '350000', 'Gazipur', 'Dhaka Division'),
(28, 'Kaliakair', '27.16', '213061', 'Gazipur', 'Dhaka Division'),
(29, 'Chuadanga', '69.02', '128865', 'Chuadanga', 'Khulna Division'),
(30, 'Sreepur', '46.9', '132948', 'Gazipur', 'Dhaka Division');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `user_id` int(11) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`user_id`, `cat_id`, `title`, `contents`, `date_posted`) VALUES
(1, 0, 'Best day at park!!', 'The Butterfly Park is the first of its kind in Bangladesh. Nestled within a natural forest area occupying 6 acres of land, this unique getaway comes to offer holiday seekers a distinct experience.', '0000-00-00 00:00:00'),
(1, 16, 'Hill of Rangamati Kaptai lake!!', 'Kaptai Lake is a man made lake in south eastern Bangladesh. It is located in the Kaptai Upazila under Rangamati District of Chittagong Division. The lake was created as a result of building the Kaptai Dam on the Karnaphuli River, as part of the Karnaphuli Hydro electric project. The Kaptai Lake average depth is 100 feet and maximum depth is 490 feet . This lake was developed by inundating valleys and plain lands between lots of hills. This made a beautiful scenario while forested mountains and highland climb from within the water.', '0000-00-00 00:00:00'),
(1, 17, 'Far from Home', 'This is Very great day of my life when I visit 1st time visited in very far from home.', '0000-00-00 00:00:00'),
(1, 14, 'I love Chittagong...', 'Chittagong is the city that i love most. When ever  I visit Bangladesh, i love to visit chittagong most. this is very beautiful city in Bangladesh. i love this city so much.', '0000-00-00 00:00:00'),
(4, 14, 'Chittagong is Best!', 'Chittagong is best for everything. There are lots of places which we can visit. and enjoy.', '0000-00-00 00:00:00'),
(4, 11, 'coxs-bazar beach...', 'we all know that world largest beach is coxsbazar sea beach. This is very beautiful place to visit. Every year lots of people come to visit here.', '0000-00-00 00:00:00'),
(4, 12, 'Chittagong medical college', 'In Chittagong, if we need good and low-cost treatment. we have to go to Chittagong medical college it is the best place for the best treatment.', '0000-00-00 00:00:00'),
(4, 17, 'My Bandarban journey!!', 'I was in love with nature here. I have loved to play with green, blue and white  Awe, thinking!! What are those? Yes, they are my favorite green leaves, bushes, blue sky and white clouds. I really lost myself here with natural waterfalls, river, and mountains. I will recommend all tourists and mainly nature lovers to visit this naturally beautiful destination in Asia. The largest Buddhist Golden Temple, Buddha Dhatu Jadi is also located in the Bandarban district of Bangladesh.\r\n\r\nDuring our Bandarban tour we stayed at Holiday Inn Resort, this resort caught my eyes because of its totally different decors with nature. Some beautiful spots are too near to this resort. There are many popular tourist spots here and some must-visit naturally beautiful spots for all nature lovers are Nilachal, Nilgiri, Shoilo Propat, Sangu River, Rijuk Waterfall, Boka Lake, Nafakhum and Remakri, Keokradong and Meghla Tourist Spot.\r\n\r\nNilachal\r\n\r\nOne of the most charming place and also known as Tiger Hill. This is very near to the Holiday Inn Resort Iâ€™ve stayed at Meghla. Rainy Season is the best time to visit this amazing place which is about 2000 feet above the sea level. Undoubtedly, you can spend more hours here enjoying the amazing landscape, the softness of white clouds and of course the beauty of a sunset. And I was overwhelmed enjoying all. The Nilachal Hill Resort is also located here, so will you not love to stay with clouds here?\r\n\r\n\r\nNilgiri\r\n\r\nThis is another beautiful spot and tallest peak (about 3500 feet high) at Thanchi in Bandarban. This place is maintained by Bangladesh Army. The Nilgiri Hill Resort and one restaurant are also located here. I have loved most the amazing blue sky and clouds here. And was also very lucky to enjoy a sudden rain with dark clouds. What a lovely experience it was!\r\n\r\n\r\nShoilo Propat\r\n\r\nThis lovely natural waterfall we were able to spot on the way to Thanchi. This is very near and located at Milanchari in Bandarban. The water of this fall is purified naturally and so scenic to enjoy its beauty in the Rainy Season. We enjoyed bathing and playing with water and captured all moments and beauties with Lumia720 and Sony DSC-H300 during this tour.', '0000-00-00 00:00:00'),
(10, 11, 'Parki beach', 'Parki beach is one of the virgin beaches. It has unimaginable beauty. Long sandy beach u can enjoy as you like. This beach is opposite of Chittagong port . Road communication is ok . But there are diversions in many parts due to major road construction. There are refreshment corners in a different parts of the beach. Overall very scenic', '0000-00-00 00:00:00'),
(10, 11, 'Sonadia Island', 'One of the greatest place to spend your leisure time in Bangladesh when visiting CoxsBazar. Its just 20 to 30 minutes speedboat visit from Coxsbazar 6 No. Fisheries Ghat. I would suggest to take a reserve boat from Ghat to Sonadia Island. Enjoy the calm natural beauty, the sea, the long white or grey sandy beach, bigger waves then take a walk to main island Moheskhali to enjoy the rest beauty of this great island- The Canals, Mangrove, Fishing Boat, Fishering, Calm road and blue sky over head.', '0000-00-00 00:00:00'),
(10, 11, 'Guliakhali Sea Beach', 'Its the most wonderful one-day visit. Due to mangrove type you will watch a sea beach having grasses in the bank, not the sand. Some people I saw were having their shower too. But definitely you need to consider when the tide comes. Otherwise you will find the waves very far from the grasses. Usually 11 am to 1pm and 5-6 pm is the time when Waves are high. We are in a rush as we needed to visit Chandranath Hill after this. But the 2 hours we spent was worthy enough.', '0000-00-00 00:00:00'),
(10, 15, 'Dulahazra Safari Park', 'Dulahazara Safari Park was developed on an undulating landscape of around 2,224 acres (9.00 km2) of area at Chakaria Upazila in Coxs Bazar District, Bangladesh, some 107 km away from the port city, Chittagong, with an objective to create facilities for eco-tourism, research work and entertainment as well as from conserving wild animals in a natural environment.', '0000-00-00 00:00:00'),
(0, 18, 'n vnjvsjdsjkcn', 'ncjisncnsdinsdinjsn', '0000-00-00 00:00:00'),
(0, 15, 'amazing in kaptai', 'it is the most beautifull place', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `firstname`, `lastname`, `email`, `password`, `gender`, `code`, `status`, `created_on`) VALUES
(0, ' riadul', 'alam', 'riyadulalam51@gmail.com', '$2y$10$zSVbs/mGsXS9R8Xq1TgH9O2oSrkvWw3PalqTjL0iYJeShTJf1exE2', 'Male', '0', '1', '2021-09-29'),
(1, ' saimon', 'akram', 'saymonakram@gmail.com', '$2y$10$UGIlc3dLggXhknoqPgRCq.T8.NozsAzyfDemA8Qfh8QTClAUUZh02', 'Male', '0', '1', '2021-07-10'),
(3, ' Akash', 'Kumar Sushil', '01919496165', '$2y$10$OR20C/KrJNzq195ky2lDYeKzN7QCp6aoy0fFVgpXfCEouPL5/PL02', 'Male', '776840', '0', '2021-07-25'),
(4, ' Minhaj', 'Uddin', 'bossminhajuddin@gmail.com', '$2y$10$S04P3nfpn.0xlFU0LMfwC.cDm8JRl48lc.589rzStvRMVDrQgLuZu', 'Male', '899482', '1', '2021-09-10'),
(10, ' arafatul', 'alam', 'arafatulalam683@gmail.com', '$2y$10$1LDGW/xLXPVioXkvxLGxDeqcIltyrJUlbIzFyUFP0/Ay6InEEew16', 'Male', '0', '1', '2021-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbareadetails`
--

CREATE TABLE `tbareadetails` (
  `id` bigint(20) NOT NULL,
  `Division` varchar(50) NOT NULL,
  `Area` varchar(500) NOT NULL,
  `postOffice` varchar(500) NOT NULL,
  `postCode` varchar(500) NOT NULL,
  `imagePath` varchar(500) NOT NULL,
  `mapurl` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbareadetails`
--

INSERT INTO `tbareadetails` (`id`, `Division`, `Area`, `postOffice`, `postCode`, `imagePath`, `mapurl`, `description`) VALUES
(2, 'Chittagong Division', 'Chittagong Sadar', 'Chawkbazar', '4203', '221332327_2337761826357290_5153672386322265834_n.jpg', 'https://medium.com/@iftikhar.ahmed/form-validation-with-parsleyjs-2079c30bde54', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`name`, `email`, `subject`, `message`, `dateTime`) VALUES
('Akash Kumar Sushil', 'lionaks884@gmail.com', 'add new school ', 'add new school ', '0000-00-00 00:00:00'),
('Nishat Anjum', 'nishat@gmail.com', 'add new school ', 'please add some school which is located in patenga ', '2021-04-28 19:18:12'),
('Akash Kumar Sushil', 'lionaks884@gmail.com', 'asdf', 'asdfasdf', '2021-09-24 07:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbdivision`
--

CREATE TABLE `tbdivision` (
  `Division` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `Capital` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `Est` int(11) DEFAULT NULL,
  `Subdivisions` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `Upazilas` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `Union Councils` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `Area_km2_6` decimal(7,2) DEFAULT NULL,
  `Population_2011_6` int(11) DEFAULT NULL,
  `Density_people` varchar(14) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdivision`
--

INSERT INTO `tbdivision` (`Division`, `Capital`, `Est`, `Subdivisions`, `Upazilas`, `Union Councils`, `Area_km2_6`, `Population_2011_6`, `Density_people`) VALUES
('Barisal Division', 'Barisal', 1993, '6', '39', '333', '13225.20', 8325666, '613'),
('Sylhet Division', 'Sylhet', 1995, '4', '38', '334', '12635.22', 9807000, '779'),
('Mymensingh Division', 'Mymensingh', 2015, '4', '34', '350', '10584.06', 11370000, '1074'),
('Khulna Division', 'Khulna', 1960, '10', '59', '270', '22284.22', 15687759, '699'),
('Rangpur Division', 'Rangpur', 2010, '8', '58', '536', '16184.99', 15787758, '960'),
('Rajshahi Division', 'Rajshahi', 1829, '8', '70', '558', '18153.08', 18485858, '1007'),
('Chittagong Division', 'Chittagong', 1829, '11', '101', '949', '33908.55', 29145000, '831'),
('Dhaka Division', 'Dhaka', 1829, '13', '123', '1248', '20593.74', 36433505, '1751');

-- --------------------------------------------------------

--
-- Table structure for table `tbinstitutions`
--

CREATE TABLE `tbinstitutions` (
  `Id` int(11) NOT NULL,
  `Division` varchar(50) NOT NULL DEFAULT '',
  `AREA` varchar(50) NOT NULL DEFAULT '',
  `postOffice` varchar(50) NOT NULL DEFAULT '',
  `postCode` varchar(50) NOT NULL DEFAULT '',
  `types` varchar(100) NOT NULL DEFAULT '',
  `institution_name` varchar(100) NOT NULL DEFAULT '',
  `Ins_Address` varchar(200) NOT NULL DEFAULT '',
  `Ins_website` varchar(100) NOT NULL DEFAULT '',
  `phone_no` varchar(100) NOT NULL DEFAULT '',
  `Service_Time` varchar(100) NOT NULL DEFAULT '',
  `imagePath` varchar(200) NOT NULL DEFAULT '',
  `mapurl` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbinstitutions`
--

INSERT INTO `tbinstitutions` (`Id`, `Division`, `AREA`, `postOffice`, `postCode`, `types`, `institution_name`, `Ins_Address`, `Ins_website`, `phone_no`, `Service_Time`, `imagePath`, `mapurl`, `description`) VALUES
(10, 'Chittagong Division', 'Chittagong Sadar', 'Chawkbazar', '4203', 'Shopping Mall', 'Bali Arcade', '107,Nabab Sirajuddaula Road, Chattogram', 'http://www.sethgroupbd.com/', '8801872613505', 'Everyday,10AMâ€“8PM (Monday closed)', 'vg2.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.9093196814883!2d91.83783521495567!3d22.357052585294085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad27656c600855%3A0xa4be32d307a83aee!2sBali%20Arcade!5e0!3m2!1sen!2sbd!4v1632377134287!5m2!1sen!2sbd', 'This supermall was inaugurated at Chawkbazar in Chattogram with a unique initiative of Seth Properties for business, shopping, and entertainment, reads a press release. \r\n\r\nThe supermall is built with world-class facilities and it is a signature project of Seth Properties which is a subsidiary company of Seth Group. The Bali Arcade project constructed on Sirajuddaula Road. '),
(2, 'Chittagong Division', 'Chittagong Sadar', 'Chawkbazar', '4203', 'Hospital', 'Chittagong Medical College And Hospital', '57 K.B. Fazlul Kader Rd, Chattogram ', 'https://cmch.gov.bd', '+88031630335', 'Open 24 hours', 'cmch.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.850559145875!2d91.82861581495575!3d22.35927088529299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd882a59437c7%3A0xf99d92fdc17dd741!2z4Kaa4Kaf4KeN4Kaf4KaX4KeN4Kaw4Ka-4KauIOCmruCnh-CmoeCmv-CmleCnh-CmsiDgppXgprLgp4fgppwg4Ka54Ka-4Ka44Kaq4Ka-4Kak4Ka-4Kay!5e0!3m2!1sen!2sbd!4v1630514162226!5m2!1sen!2sbd', 'Chittagong Medical College is situated in the port city of Chittagong, Bangladesh and is the oldest medical college in the south-eastern part of the country. It is affiliated with a tertiary level hospital where clinical students are trained in medicine, surgery, obstetrics and gynaecology and other sub-specialties'),
(3, 'Chittagong Division', 'Chittagong Sadar', 'North Katuli', '4217', 'Hospital', 'Chittagong 250 Bed General Hospital', 'Andarkilla Rd, Chattogram 4000', 'http://facilityregistry.dghs.gov.bd/org_profile.php?org_code=10000753', '01711468326', 'Open 24 hours', 'Chittagong_general_hospital_(3).JPG', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.3426252678883!2d91.83555001495544!3d22.34068818530264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad275bf253558b%3A0xc696353d7346e76c!2sGeneral%20Hospital%2C%20Andarkilla%20Rd%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1630514371658!5m2!1sen!2sbd', 'Chittagong General Hospital, is a public hospital in Chittagong, Bangladesh. It has two hundred and fifty bed facility. It has been an affiliated hospital of Chittagong Medical College since 1959.'),
(4, 'Chittagong Division', 'Chittagong Sadar', 'Pahartoli', '4202', 'Hospital', 'Chittagong Eye Infirmary and Training Complex', 'Foys Lake Approach Rd, Chattogram', 'https://ctgeyeinfirmary.info', '031-659017', 'Open 24 hours', 'eye1.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8188124342055!2d91.79359751495579!3d22.360469285292346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8fcd0159da7%3A0x332790d8b99b825f!2sChittagong%20Eye%20Infirmary%20and%20Training%20Complex!5e0!3m2!1sen!2sbd!4v1630514482267!5m2!1sen!2sbd', 'PROVIDE QUALITY EYE CARE SERVICE.  DEVELOP OPHTHALMIC HUMAN RESOURCES.   DEVELOP AS A CENTRE OF EXCELLENCE.\r\nTO PROVIDE EQUITABLE & EFFICIENT EYE CARE SERVICE. TO REACH EYE CARE SERVICE TO THE UNDERSERVED POPULATION. TO REDUCE NEEDLESSLY BLIND POPULATION IN THE SOCIETY. '),
(5, 'Chittagong Division', 'Chittagong Sadar', 'Chawkbazar', '4203', 'Police Station', 'Chawkbazar Police Station', 'Lal Chand Rd, Chattogram', 'http://www.police.gov.bd', '031-659017', 'Open 24 hours', 'chawkbazar.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.89614453688!2d91.83681561495574!3d22.35754998529393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2764e0651005%3A0xc306c82f40daa61b!2sChawkbazar%20Police%20Station!5e0!3m2!1sen!2sbd!4v1632321725985!5m2!1sen!2sbd', 'Chawkbazar Police Station is a police station in Chittagong Division. Chawkbazar Police Station is situated in Panchlaish Thana, close to Ali Plaza'),
(7, 'Chittagong Division', 'Chittagong Sadar', 'Chittagong Bandar', '4100', 'Police Station', ' Bandar Police Station', 'Chittagong Bandar, Chattagram', 'http://www.police.gov.bd', '031-659017', 'Open 24 hours', 'images.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.050383983365!2d91.80122626495493!3d22.3139341853165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdf303b255571%3A0xc437a37f06e3eb8b!2sBandar%20Police%20Station%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1632329627823!5m2!1sen!2sbd', 'hjvhjvuvuyuy'),
(8, 'Chittagong Division', 'Chittagong Sadar', 'Chandgaon', '4212', 'Police Station', 'Chandgaon Police Station', 'Bahaddar hat,Chadgaon, Chattogram', 'http://www.police.gov.bd', '031-659017', 'Open 24 hours', 'chandgaon-Thana.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.5454375808445!2d91.84564816495597!3d22.370786335286986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad27758ba5fc49%3A0xe118acc0211daa15!2sChandgaon%20Police%20Station%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1632332069423!5m2!1sen!2sbd', 'Chandgaon (Bengali: à¦šà¦¾à¦¨à§à¦¦à¦—à¦¾à¦à¦“) is a thana of Chittagong Metropoliton City in the Division of Chittagong, Bangladesh. It comprises the Chandgoan Residential Area and the Kalurghat Industrial Area'),
(9, 'Chittagong Division', 'Chittagong Sadar', 'North Katuli', '4217', 'Police Station', 'Chittagong Kotwali Police station', 'Kowali, Chattogram', 'http://www.police.gov.bd', '031-659017', 'Open 24 hours', 'index.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29523.018896323396!2d91.81211663015216!3d22.33937580939539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8a71c5c3451%3A0x8145d1408572eb24!2sKotwali%2C%20Chattogram!5e0!3m2!1sen!2sbd!4v1632332462185!5m2!1sen!2sbd', 'Chittagong Kotwali (Bengali: à¦šà¦Ÿà§à¦Ÿà¦—à§à¦°à¦¾à¦® à¦•à§‹à¦¤à§‹à¦¯à¦¼à¦¾à¦²à§€) is a Thana of Chittagong District in the Division of Chittagong, Bangladesh. '),
(11, 'Chittagong Division', 'Chittagong Sadar', 'Chawkbazar', '4203', 'Shopping Mall', 'Keari Elysium Shopping Complex', 'Rashik Hajari Ln, Chattogram', 'http://www.itbazar.net/', '+8801975700755', 'Everyday,10AMâ€“10PM (Friday closed)', '2015-07-24.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.9347104227945!2d91.83787663190935!3d22.35609398140302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad27646029ff79%3A0x59de61bf3845d285!2sKeari%20Elysium%20Shopping%20Complex!5e0!3m2!1sen!2sbd!4v1632377708708!5m2!1sen!2sbd', 'It is a shopping mall located at chawkbazar, Chittagong.. This is especially for Ladys and students. You can get food at a low cost at this mall. A Quality market with a lot of shops of different types including food Shops & libraries.'),
(12, 'Chittagong Division', 'Chittagong Sadar', 'Chawkbazar', '4203', 'Shopping Mall', 'Gulzar Tower', 'Gulzar more, Chatteshwari Rd, Chittagong', 'https://gulzartower.business.site/', '880 181436379', 'Everyday,9AMâ€“10PM (Saturday closed)', 'IMG_20180126_072622.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d727.9445011665686!2d91.8328577728235!3d22.358827772967267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad276490aa5a4f%3A0x8824f17fe9fd9668!2sGulzar%20Tower!5e0!3m2!1sen!2sbd!4v1632379633512!5m2!1sen!2sbd', 'One of the oldest shopping malls in Chattogram. You can buy things at reasonable prices & the goods are best. Teenagers love to shop here for a cheap rate. It is good to have such a mall & if it will renovate then more people will visit for their good services. Good place for men shopping also for ladies.'),
(13, 'Chittagong Division', 'Chittagong Sadar', 'Chawkbazar', '4203', 'Shopping Mall', 'Moti Tower', 'Moti Tower,College Rd, Chattogram', 'http://www.sethgroupbd.com/', '031-659017', 'Everyday,10AMâ€“9PM (Saturday closed)', 'IMG_1687.JPG', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.895553847369!2d91.83474631462244!3d22.35757228529381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad276498fb64d1%3A0x6e1f3144cefb4203!2sMoti%20Tower!5e0!3m2!1sen!2sbd!4v1632379939785!5m2!1sen!2sbd', 'This mall is situated at Chowkbazar, Chittagong. This is one of the most visited places by the student because most of the coaching centers and colleges are situated here. This mall is not well decorated, you can buy dresses for women, shoes are also here but this mall has a very limited items to buy. Everything about women and children with cheap price . Feel comfortable moving around and shopping.'),
(14, 'Chittagong Division', 'Chittagong Sadar', 'Halishahar', '4216', 'Hospital', 'Chattogram Maa-O-Shishu Hospital', 'Agrabad, Chittagong, Bangladesh', 'http://cmoshbd.org/', '+880312520063', 'Open 24 hours', '2020-06-02.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.81681523608!2d91.8040953149551!3d22.322766685311883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdf3338b0f4a5%3A0xeca21f7f879a1ac7!2sChattogram%20Maa-O-Shishu%20Hospital!5e0!3m2!1sen!2sbd!4v1632380753666!5m2!1sen!2sbd', 'Chattogram Maa-O-Shishu Hospital Medical College is a private medical school in Bangladesh, established in 2005. It is located in Agrabad, Chattogram. It is affiliated with Chittagong Medical University. It offers a five-year course of study leading to a Bachelor of Medicine, Bachelor of Surgery degree');

-- --------------------------------------------------------

--
-- Table structure for table `tbinstitution_types`
--

CREATE TABLE `tbinstitution_types` (
  `id` bigint(20) NOT NULL,
  `institutions_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbinstitution_types`
--

INSERT INTO `tbinstitution_types` (`id`, `institutions_type`) VALUES
(1, 'Educational Institution'),
(2, 'School'),
(3, 'Restaurants'),
(4, 'Police Station'),
(5, 'Library'),
(6, 'Hospital'),
(7, 'College'),
(8, 'Temple '),
(9, 'Mosque'),
(10, 'Park'),
(11, 'Hotel'),
(12, 'Shopping Mall');

-- --------------------------------------------------------

--
-- Table structure for table `tbtourist_area`
--

CREATE TABLE `tbtourist_area` (
  `id` bigint(20) NOT NULL,
  `place_name` varchar(500) NOT NULL,
  `Division` varchar(50) NOT NULL,
  `Area` varchar(500) NOT NULL,
  `postOffice` varchar(500) NOT NULL,
  `postCode` varchar(500) NOT NULL,
  `imagePath` varchar(500) NOT NULL,
  `mapurl` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbtourist_area`
--

INSERT INTO `tbtourist_area` (`id`, `place_name`, `Division`, `Area`, `postOffice`, `postCode`, `imagePath`, `mapurl`, `description`) VALUES
(4, 'Coxs Bazar Sea Beach', 'Chittagong Division', 'Satkania', 'Satkania', '4386', 'coxs-bazar-1.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.105849008256!2d91.83505471495556!3d22.34963178529796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad27672f87f473%3A0x72646107d9c7183f!2sDarul%20Ulum%20Alia%20Madrasah!5e0!3m2!1sen!2sbd!4v1619269683871!5m2!1sen!2sbd', 'this is a nice place to visit.');

-- --------------------------------------------------------

--
-- Table structure for table `touristspot`
--

CREATE TABLE `touristspot` (
  `place_id` int(11) NOT NULL,
  `Division` varchar(200) NOT NULL,
  `District` varchar(200) NOT NULL,
  `place_name` varchar(200) NOT NULL,
  `place_address` varchar(200) NOT NULL,
  `place_type` varchar(100) NOT NULL,
  `place_mapurl` varchar(500) NOT NULL,
  `place_img` varchar(500) NOT NULL,
  `place_desription` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `touristspot`
--

INSERT INTO `touristspot` (`place_id`, `Division`, `District`, `place_name`, `place_address`, `place_type`, `place_mapurl`, `place_img`, `place_desription`) VALUES
(1, 'Chittagong Division', 'Bandarban', 'Nilachol', 'Bandarban City', 'Mountain', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6334.658139965843!2d92.20315801233923!3d22.17239236616773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad6bce2a47079f%3A0x7ddfcb86d70fe218!2sNilachal%20Tourist%20Center!5e0!3m2!1sen!2sbd!4v1630773840181!5m2!1sen!2sbd', 'Nilachol1.jpg', ' Nilachal is the nearest tourist spot from Bandarban. It is situated at Tigerpara. It is near about 2000 feet above of sea level and 5 kilometer away from the Bandarban town.'),
(2, 'Chittagong Division', 'Bandarban', 'Nillgiri', 'Chimbuk, Bandarban', 'Mountain', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.6161090099627!2d92.3076546149485!3d21.94930488550699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad7b6b75cb0191%3A0x48ec3135ee88cc54!2sForest%20Hill%20Resort!5e0!3m2!1sen!2sbd!4v1630775638750!5m2!1sen!2sbd', 'Nillgiri.jpg', 'If you want to touch the clouds, you will have to go to Nilgiri, Bandarban. At Nilgiri, the cloud will come to you, even you can catch it with your hands. On the above, the blue sky, and the white cloud are playing in the mountain of Nilgiri. It is a place of spectacular beauty. Due to Nilgiri, Bandarban is called Darjeeling of Bangladesh. For those who love adventure, the best night in your life may be the Nilgiri. On the way to Nilgiri, you can see the beauty of Bandarban. Here the indigenous beautiful girls will welcome you. From here you can buy indigenous hand-made products. The green mountain and the white clouds all around will fascinate you.'),
(3, 'Chittagong Division', 'Bandarban', 'Debota Khum', 'Roangchari Upazila', 'Mountain', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.0799149252744!2d92.36987081495356!3d22.23704648535653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad5d4992d038c3%3A0x3b2b8f5b53007a8f!2zRGVib3Rha3VtICgg4Kam4KeH4Kas4Kak4Ka-IOCmleCngeCmrik!5e0!3m2!1sen!2sbd!4v1630776290076!5m2!1sen!2sbd', 'debota.jpg', 'Debotakhum is located in Roangchhari upazila of Bandarban district. Natural Bandarban is said to be the paradise of Khum and the crown of excellence of this kingdom will undoubtedly go to Devatakhum. According to the locals, this khum is about 50-60 feet deep and 700 feet long which is much bigger than Velakhum and much more wild.'),
(4, 'Chittagong Division', 'Bandarban', 'Meghla', 'Bandarban City', 'Park', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7389.094856567762!2d92.1868261249214!3d22.181292941542022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad6a5150a17a8b%3A0x8499d287fd82bf53!2sMeghla%20Parjatan%20Complex!5e0!3m2!1sen!2sbd!4v1630776845000!5m2!1sen!2sbd', 'Meghla.jpg', 'The place known as Meghla Parjatan Complex, a meghla resort bandarban, is just 4 kilometers from Bandarban town on the road to an area known as Keranihat. By car, baby taxi and jeep Meghalaya Hill Resort can be easily reached from Bandarban town. There are many places in Bandarban to roam around, trek and explore.However what makes Meghla Parjatan Complex unique and different from the other tourists spot of Bandarban is that it has a zoo, a mini safari park, a hanging bridge and the complex itself a wonderful picnic spot. A combination of these four places along with the large area filled with greenery and the gentle breeze which flows through this parjatan complex is a perfect place for a holiday destination in any time of the year.'),
(5, 'Chittagong Division', 'Bandarban', 'Golden Temple', 'Bandarban City', 'Temple', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.4514197302974!2d92.19532371495328!3d22.222944885363756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad6a763d18d6f3%3A0x615a89104c3d1535!2sBandarban%20Golden%20Temple%20-%20Buddha%20Dhatu%20Jadi!5e0!3m2!1sen!2sbd!4v1630777533664!5m2!1sen!2sbd', 'golden_temple.jpg', 'Though the original name of this temple is Buddha Dhatu Jadi, it is commonly known as Bandarban Golden Temple or simply the Golden Temple among visitors. It is regarded as one of the tourist attractions of Bangladesh. Its natural setting attracts travelers and pilgrims all over the year. Its tranquility and green atmosphere allow visitors to spend some quality time in silence in Bangladesh. Without visiting this place, your Bandarban tour will remain incomplete.'),
(6, 'Chittagong Division', 'Bandarban', 'Amiakhum WaterFall', 'Thanchi upazilla', 'Waterfall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d475043.30186377076!2d92.26951935871713!3d21.536068709912406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b27c2545f0c9e7%3A0x2ef133600abb9c32!2sAmiakhum%20WaterFall!5e0!3m2!1sen!2sbd!4v1630777678301!5m2!1sen!2sbd', 'Amiakum-Waterfall-Bandarban-770x420.jpg', 'Amiakhum Waterfall is a magnificent waterfall located in Thanchi upazila of Bandarban district. It is one of the most inaccessible places in Bangladesh. The stream of cold water is coming down at a tremendous speed, spreading milky white foam over the green hills and stone barriers.'),
(7, 'Chittagong Division', 'Bandarban', 'Nafakhum Waterfall', 'Thanchi upazilla', 'Waterfall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.6161090099627!2d92.3076546149485!3d21.94930488550699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad7b6b75cb0191%3A0x48ec3135ee88cc54!2sForest%20Hill%20Resort!5e0!3m2!1sen!2sbd!4v1630775638750!5m2!1sen!2sbd', 'Nafakhumjpg.jpg', 'Nafa-khum is a waterfall in Bangladesh on the Sangu River. It is among the largest waterfalls in the country by volume of water falling. The wild hilly river Sangu suddenly falls down here about 25–30 feet. The word Khum in Marma language means Waterfall. A special type of flying fish, whose local name is nating, is found at the bottom in a small cave as they swim against the stream but cannot jump over the height of the fall.The first thing to remember, when you want to enjoy the beauty of Nafa-Khum, you have to travel a long way. Surely, I can assure, you will like the place and will not be bored. Do you know, Nafakhum is the largest waterfall in Bangladesh if you consider the volume of water falling. People explain it as the Niagara Falls of Bangladesh.You have to take a local guide to reach Nafakhum. Otherwise, it’s not possible to go. As an illustration, I will make a complete guideline which will work as a guide for you. It will surely support for not missing any things or places. If you are an adventure (adventurous) lover, want to trek a long way and don’t miss the opportunity of watching the actual beauty of the hilly tracts and rivers, you should visit Nafakhum at least one time in your life. Let’s see the itinerary for visiting Nafa-Khum.'),
(8, 'Chittagong Division', 'Bandarban', 'Bogalake', 'Thanchi upazilla', 'Lake', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.8077803046954!2d92.46754911494907!3d21.980339235490753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b2827d4f4cd2c1%3A0x7981f6b7e7658d48!2sBoga%20Lake!5e0!3m2!1sen!2sbd!4v1630780981865!5m2!1sen!2sbd', 'bogalake.jpg', 'Boga Lake, which is a natural lake created on the mountain about 2700 feet high above sea level. According to Geologists, this lake was created on the top of the mountain naturally about two thousand years ago. The reason is the eruption of the dead volcano or the fall of the volcanic eruption from space. The lake is located about 70 kilometers away from the town of Keokradang, and about 15 kilometers away from Ruma Upazila. It is formed with around 15 acres of land on the hill. The water of this lake has a blue color from the sky and it also has its own color. You will be impressed with the combination of the sky, mountains and the water. Nature has made this greenish lake with her own touches. The tiredness of passing through hilly areas will be lost when you will watch the beauty of the lake and the surroundings. It seems it is the miracle of nature.'),
(9, 'Chittagong Division', 'Khagrachari', 'Alu tila', 'Matiranga', 'Cave', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.2247252771567!2d91.95423181496902!3d23.08886798491964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3752e5d72190a4cf%3A0x1501bf44433d9f10!2z4KaG4Kay4KeB4Kaf4Ka_4Kay4Ka-IOCml-CngeCmueCmviAoQWx1IFRpbGEgR3VoYSk!5e0!3m2!1sen!2sbd!4v1630781552856!5m2!1sen!2sbd', 'Alutila_Cave_Exit_point.JPG', 'Matiranga about 8 km west of Khagrachari district of the city at the center of a mysterious cave alutila Tourism. Locals called god or cave hakara mothers. Tourists, however, are located in the tourist alutila sugar because it alutila cave. It is a well-known tourist center of Khagrachari.'),
(13, 'Chittagong Division', 'Cox\'s Bazar', 'Cox\'s Bazar Sea-beach', 'Kolatoli Road, Sugandha Beach Sea In point', 'Sea-beach', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29716.3208594201!2d91.97563990762839!3d21.408005540809448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc8875e050add%3A0x7cf298d992b38e3!2sKolatoli%20Beach!5e0!3m2!1sen!2sbd!4v1630782735466!5m2!1sen!2sbd', '31832864593_ddf74ff699_b.jpg', 'Cox\'s Bazar (Bengali: ?????????, pronounced [k?ksbad?a?]) is a city, a fishing port, tourism centre and district headquarters in Bangladesh. The beach in Cox\'s Bazar is an unbroken 120 km (75 mi) sandy sea beach with a gentle slope, making it the second longest sea beach in the world after Praia do Cassino, in Brazil.[2][3][4] It is located 150 km (93 mi) south of the industrial port of Chittagong. Cox\'s Bazar is also known by the name Panowa, whose literal translation means \"yellow flower.\" Its other old name was \"Palongkee\".'),
(14, 'Chittagong Division', 'Cox\'s Bazar', 'St. Martin\'s Island', 'Tecnaf', 'Sea-beach', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59753.03199432007!2d92.2919520831156!3d20.605835174500033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ae2363dee2d61b%3A0xfb3463713589d312!2sSt.%20Martin&#39;s%20Island!5e0!3m2!1sen!2sbd!4v1630783091096!5m2!1sen!2sbd', 'Cent-martin-tourfly.jpg', 'St. Martin is generally known as “Narikel Zinzira” in Bengali, means \'Coconut Island’ and this is the only coral reef island in Bangladesh. It is a small island in the north eastern part of the Bay of Bengal, created the southernmost part of our country. It is about 8 km west of the northwest coast of Myanmar, at the mouth of the Naf River. Blue water, golden beaches fringed with coconut palms, abundant sunshine, and a tiny insignificant dot on the map – that’s, Saint Martin in Bangladesh for you. This is the most beautiful island in Bangladesh, hands down. This is one of the most beautiful places in Bangladesh, too. When you have 160 million people packed in an area equal to Illinois, you cannot expect tranquility in a beautiful place. Saint Martin’s is a rare exception to that because of its remote location. It’s difficult to go there, but once you will be there, you won’t want to leave. This is your ultimate travel guide to Saint Martin in Bangladesh. The only way of reaching Saint Martin’s island is via ship. Our ship arrived there from Teknaf before noon (See below for detailed information). The jetty in Saint Martin’s is unremarkable. Several small to medium passenger vessels were docked there. There was a small bridge made of concrete connecting the island. We took our belongings from the ship and walked less than 50 meters, where a lot of vehicles were waiting to take the tourists to their hotel.'),
(18, 'Chittagong Division', 'Cox\'s Bazar', 'Himchhari View Point', 'Himchari', 'Sea-beach', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.0210988534586!2d92.03982651493807!3d21.349662985825407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc43d15271257%3A0x9fd6f390e381d771!2sHimchari%20National%20Park!5e0!3m2!1sen!2sbd!4v1631204246011!5m2!1sen!2sbd', 'Himcori Island.jpg', 'kjnvjdnvjdnvj'),
(0, 'Dhaka Division', 'Dhaka', 'Ramana Park', 'Moulana Bhasani Rd, Dhaka 1217', 'Park', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2745231193935!2d90.3991013149811!3d23.73758798459569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b84e57e7da4f%3A0x74e25e8dd9557872!2sRamna%20Park!5e0!3m2!1sen!2sbd!4v1632378007614!5m2!1sen!2sbd', 'Raman_Science_Centre_Nagpur.jpg', 'Ramna Park (Bengali: à¦°à¦®à¦¨à¦¾ à¦‰à¦¦à§à¦¯à¦¾à¦¨ RÃ´mna Uddan) is a large park and recreation area situated at the heart of Dhaka, the capital city of Bangladesh. This forested park with pond near its center is one of the most beautiful areas in Dhaka. Islamabads diplomatic district is named Ramna as a tribute to Ramna Park. This dates from when Bangladesh was East Pakistan and the newly established capital of Pakistan, Islamabad, was divided into various sectors named after various provinces such as Shalimar depicting Punjab and Ramna Bengal. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `tbareadetails`
--
ALTER TABLE `tbareadetails`
  ADD PRIMARY KEY (`postOffice`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbinstitutions`
--
ALTER TABLE `tbinstitutions`
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `tbinstitution_types`
--
ALTER TABLE `tbinstitution_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtourist_area`
--
ALTER TABLE `tbtourist_area`
  ADD PRIMARY KEY (`postOffice`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbareadetails`
--
ALTER TABLE `tbareadetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbinstitutions`
--
ALTER TABLE `tbinstitutions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbinstitution_types`
--
ALTER TABLE `tbinstitution_types`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbtourist_area`
--
ALTER TABLE `tbtourist_area`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
