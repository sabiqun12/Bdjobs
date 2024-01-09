-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 01:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `area__infos`
--

CREATE TABLE `area__infos` (
  `area_id` int(11) NOT NULL,
  `area_nm` varchar(120) DEFAULT NULL,
  `pare_id` int(11) DEFAULT NULL,
  `area_type` tinyint(4) DEFAULT NULL COMMENT '1 = Division, 2 = District, 3 = Sub-district',
  `area_nm_ban` varchar(480) DEFAULT NULL,
  `nid_area_code` int(11) DEFAULT NULL,
  `sb_dist_code` int(11) DEFAULT NULL,
  `soundex_nm` varchar(150) DEFAULT NULL,
  `rjsc_id` int(11) DEFAULT NULL,
  `rjsc_name` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `area__infos`
--

INSERT INTO `area__infos` (`area_id`, `area_nm`, `pare_id`, `area_type`, `area_nm_ban`, `nid_area_code`, `sb_dist_code`, `soundex_nm`, `rjsc_id`, `rjsc_name`) VALUES
(1, 'Bagerhat', 5, 2, 'বাগেরহাট', 1, 33, 'B263', 45, 'Bagerhat'),
(2, 'Dhaka', 0, 1, 'ঢাকা', NULL, NULL, 'D200', 1, 'Dhaka'),
(3, 'Bandarban', 14, 2, 'বান্দরবান', 3, 23, 'B53615', 18, 'Bandarban'),
(4, 'Barguna', 11, 2, 'বরগুনা', 4, 64, 'B625', 59, 'Barguna'),
(5, 'Khulna', 0, 1, 'খুলনা মেট্রো', NULL, NULL, 'K4536', NULL, NULL),
(6, 'Barishal', 11, 2, 'বরিশাল', 6, 59, 'B624', 60, 'Barisal'),
(7, 'Rajshahi', 0, 1, 'রাজশাহী', NULL, NULL, 'R200', 41, 'Rajshahi'),
(8, 'Sylhet', 0, 1, 'সিলেট', NULL, NULL, 'S430', 58, 'Sylhet'),
(9, 'Bhola', 11, 2, 'ভোলা', 9, 80, 'B400', 61, 'Bhola'),
(10, 'Bogura', 7, 2, 'বগুড়া', 10, 57, 'B260', 29, 'Bogra'),
(11, 'Barishal', 0, 1, 'বরিশাল', NULL, NULL, 'B624', 60, 'Barisal'),
(12, 'Brahmanbaria', 14, 2, 'ব্রাহ্মণবাড়িয়া', 12, 27, 'B6516', 19, 'Brahmanbaria'),
(13, 'Chandpur', 14, 2, 'চাঁদপুর', 13, 26, 'C5316', 20, 'Chandpur'),
(14, 'Chattogram', 0, 1, 'চট্টগ্রাম', NULL, NULL, 'C3252', 21, 'Chittagong'),
(15, 'Chattogram', 14, 2, 'চট্টগ্রাম', 15, 20, 'C3252', 21, 'Chittagong'),
(16, 'Rangpur', 0, 1, 'রংপুর', NULL, NULL, 'R5216', 42, 'Rangpur'),
(18, 'Chuadanga', 5, 2, 'চুয়াডাঙ্গা', 18, 40, 'C352', 46, 'Chuadanga'),
(19, 'Cumilla', 14, 2, 'কুমিল্লা', 19, 25, 'C540', 22, 'Comilla'),
(22, 'Cox\'s Bazar', 14, 2, 'কক্সবাজার', 22, 21, 'C126', 23, 'Coxs Bazar'),
(26, 'Dhaka', 2, 2, 'ঢাকা', 26, 2, 'D200', 1, 'Dhaka'),
(27, 'Dinajpur', 16, 2, 'দিনাজপুর', 27, 52, 'D5216', 30, 'Dinajpur'),
(29, 'Faridpur', 2, 2, 'ফরিদপুর', 29, 15, 'F6316', 2, 'Faridpur'),
(30, 'Feni', 14, 2, 'ফেনী', 30, 30, 'F500', 24, 'Feni'),
(32, 'Gaibandha', 16, 2, 'গাইবান্ধা', 32, 48, 'G153', 31, 'Gaibandha'),
(33, 'Gazipur', 2, 2, 'গাজীপুর', 33, 4, 'G160', 3, 'Gazipur'),
(35, 'Gopalganj', 2, 2, 'গোপালগঞ্জ', 35, 16, 'G14252', 4, 'Gopalganj'),
(36, 'Habiganj', 8, 2, 'হবিগঞ্জ', 36, 66, 'H1252', 55, 'Habiganj'),
(38, 'Joypurhat', 7, 2, 'জয়পুরহাট', 38, 58, 'J163', 32, 'Joypurhat'),
(39, 'Jamalpur', 2, 2, 'জামালপুর', 39, 14, 'J5416', 5, 'Jamalpur'),
(41, 'Jashore', 5, 2, 'যশোর', 41, 35, 'J600', 47, 'Jessore'),
(42, 'Jhalokati', 11, 2, 'ঝালকাঠী', 42, 60, 'J423', 62, 'Jhalokati'),
(44, 'Jhenaidah', 5, 2, 'ঝিনাইদহ', 44, 37, 'J530', 48, 'Jhenaidah'),
(46, 'Khagrachhari', 14, 2, 'খাগড়াছড়ি', 46, 24, 'K626', 25, 'Khagrachhari'),
(47, 'Khulna', 5, 2, 'খুলনা', 47, 32, 'K450', 49, 'Khulna'),
(48, 'Kishoregonj', 2, 2, 'কিশোরগঞ্জ', 48, 11, 'K6252', NULL, NULL),
(49, 'Kurigram', 16, 2, 'কুড়িগ্রাম', 49, 50, 'K6265', 33, 'Kurigram'),
(50, 'Kushtia', 5, 2, 'কুষ্টিয়া', 50, 39, 'K300', 50, 'Kushtia'),
(51, 'Lakshmipur', 14, 2, 'লক্ষ্মীপুর', 51, 29, 'L2516', 26, 'Lakshmipur'),
(52, 'Lalmonirhat', 16, 2, 'লালমনিরহাট', 52, 51, 'L563', 34, 'Lalmonirhat'),
(54, 'Madaripur', 2, 2, 'মাদারীপুর', 54, 17, 'M3616', 7, 'Madaripur'),
(55, 'Magura', 5, 2, 'মাগুরা', 55, 36, 'M260', 51, 'Magura'),
(56, 'Manikganj', 2, 2, 'মানিকগঞ্জ', 56, 5, 'M252', 8, 'Manikganj'),
(57, 'Meherpur', 5, 2, 'মেহেরপুর', 57, 41, 'M616', 52, 'Meherpur'),
(58, 'Maulvibazar', 8, 2, 'মৌলভীবাজার', 58, 68, 'M4126', 56, 'Maulvibazar'),
(59, 'Munshiganj', 2, 2, 'মুন্সীগঞ্জ', 59, 6, 'M252', 9, 'Munshiganj'),
(61, 'Mymensingh', 2, 2, 'ময়মনসিংহ', 61, 8, 'M252', 10, 'Mymensingh'),
(64, 'Naogaon', 7, 2, 'নওগাঁ', 64, 45, 'N250', 35, 'Naogaon'),
(65, 'Narail', 5, 2, 'নড়াইল', 65, 38, 'N640', 53, 'Narail'),
(67, 'Narayanganj', 2, 2, 'নারায়ণগঞ্জ', 67, 3, 'N65252', 11, 'Narayanganj'),
(68, 'Narsingdi', 2, 2, 'নরসিংদী', 68, 7, 'N62523', 12, 'Narsingdi'),
(69, 'Natore', 7, 2, 'নাটোর', 69, 46, 'N360', 36, 'Natore'),
(70, 'Chapainababganj', 7, 2, 'চাঁপাইনবাবগঞ্জ', 70, 44, 'C151252', 66, 'Chapai Nawabganj'),
(72, 'Netrakona', 2, 2, 'নেত্রকোনা', 72, 12, 'N3625', 13, 'Netrakona'),
(73, 'Nilphamari Zila', 16, 2, 'নীলফামারী', 73, 49, 'N415624', 38, 'Nilphamari'),
(75, 'Noakhali', 14, 2, 'নোয়াখালী', 75, 28, 'N240', 27, 'Noakhali'),
(76, 'Pabna', 7, 2, 'পাবনা', 76, 55, 'P500', 39, 'Pabna'),
(77, 'Panchagarh', 16, 2, 'পঞ্চগড়', 77, 54, 'P526', 40, 'Panchagarh'),
(78, 'Patuakhali', 11, 2, 'পটুয়াখালী', 78, 62, 'P324', 63, 'Patuakhali'),
(79, 'Pirojpur', 11, 2, 'পিরোজপুর', 79, 63, 'P6216', 64, 'Pirojpur'),
(81, 'Rajshahi', 7, 2, 'রাজশাহী', 81, 43, 'R200', 41, 'Rajshahi'),
(82, 'Rajbari', 2, 2, 'রাজবাড়ী', 82, 18, 'R216', 14, 'Rajbari'),
(84, 'Rangamati', 14, 2, 'রাঙ্গামাটি', 84, 22, 'R5253', 28, 'Rangamati'),
(85, 'Rangpur', 16, 2, 'রংপুর', 85, 47, 'R5216', 42, 'Rangpur'),
(86, 'Shariatpur', 2, 2, 'শরিয়তপুর', 86, 9, 'S6316', 15, 'Shariatpur'),
(87, 'Satkhira', 5, 2, 'সাতক্ষীরা', 87, 34, 'S326', 54, 'Satkhira'),
(88, 'Sirajganj', 7, 2, 'সিরাজগঞ্জ', 88, 56, 'S6252', 43, 'Sirajganj'),
(89, 'Sherpur', 2, 2, 'শেরপুর', 89, 13, 'S616', 16, 'Sherpur'),
(90, 'Sunamganj', 8, 2, 'সুনামগঞ্জ', 90, 67, 'S5252', 57, 'Sunamganj'),
(91, 'Sylhet', 8, 2, 'সিলেট', 91, 65, 'S430', 58, 'Sylhet'),
(93, 'Tangail', 2, 2, 'টাঙ্গাইল', 93, 10, 'T524', 17, 'Tangail'),
(94, 'Thakurgaon', 16, 2, 'ঠাকুরগাঁও', 94, 53, 'T2625', 44, 'Thakurgaon'),
(95, 'Bagerhat Sadar', 1, 3, 'বাগেরহাট সদর', 8, NULL, 'B263236', NULL, NULL),
(96, 'Chitalmari', 1, 3, 'চিতলমারী', 14, NULL, 'C3456', NULL, NULL),
(97, 'Fakirhat', 1, 3, 'ফকিরহাট', 34, NULL, 'F263', NULL, NULL),
(98, 'Kachua', 1, 3, 'কচুয়া', 38, NULL, 'K000', NULL, NULL),
(99, 'Mollahat', 1, 3, 'মোল্লাহাট', 56, NULL, 'M430', NULL, NULL),
(100, 'Mongla', 1, 3, 'মোংলা', 58, NULL, 'M240', NULL, NULL),
(101, 'Morrelganj', 1, 3, 'মোড়লগঞ্জ', 60, NULL, 'M64252', NULL, NULL),
(102, 'Rampal', 1, 3, 'রামপাল', 73, NULL, 'R514', NULL, NULL),
(103, 'Sarankhola', 1, 3, 'শরণখোলা', 77, NULL, 'S6524', NULL, NULL),
(104, 'Alikadam', 3, 3, 'আলীকদম', 4, NULL, 'A4235', NULL, NULL),
(105, 'Bandarban Sadar', 3, 3, 'বান্দরবান সদর', 14, NULL, 'B53615236', NULL, NULL),
(106, 'Lama', 3, 3, 'লামা', 51, NULL, 'L500', NULL, NULL),
(107, 'Naikhongchhari', 3, 3, 'নাইক্ষ্যংছড়ি', 73, NULL, 'N2526', NULL, NULL),
(108, 'Rowangchhari', 3, 3, 'রোয়াংছড়ি', 89, NULL, 'R526', NULL, NULL),
(109, 'Ruma', 3, 3, 'রুমা', 91, NULL, 'R500', NULL, NULL),
(110, 'Thanchi', 3, 3, 'থান্‌চি', 95, NULL, 'T520', NULL, NULL),
(111, 'Amtali', 4, 3, 'আমতলী', 9, NULL, 'A534', NULL, NULL),
(112, 'Bamna', 4, 3, 'বামনা', 19, NULL, 'B500', NULL, NULL),
(113, 'Barguna Sadar', 4, 3, 'বরগুনা সদর', 28, NULL, 'B625236', NULL, NULL),
(114, 'Betagi', 4, 3, 'বেতাগী', 47, NULL, 'B320', NULL, NULL),
(115, 'Patharghata', 4, 3, 'পাথরঘাটা', 85, NULL, 'P3623', NULL, NULL),
(116, 'Taltoli', 4, 3, 'তালতলী', 92, NULL, 'T434', NULL, NULL),
(117, 'Agailjhara', 6, 3, 'আগৈলঝাড়া', 2, NULL, 'A2426', NULL, NULL),
(118, 'Babuganj', 6, 3, 'বাবুগঞ্জ', 3, NULL, 'B252', NULL, NULL),
(119, 'Bakerganj', 6, 3, 'বাকেরগঞ্জ', 7, NULL, 'B26252', NULL, NULL),
(120, 'Banari Para', 6, 3, 'বানারী পাড়া', 10, NULL, 'B5616', NULL, NULL),
(121, 'Gaurnadi', 6, 3, 'গৌরনদী', 32, NULL, 'G653', NULL, NULL),
(122, 'Hizla', 6, 3, 'হিজলা', 36, NULL, 'H240', NULL, NULL),
(123, 'Barisal Sadar', 6, 3, 'বরিশাল সদর', 51, NULL, 'B624236', NULL, NULL),
(124, 'Mhendiganj', 6, 3, 'মেহেন্দীগঞ্জ', 62, NULL, 'M3252', NULL, NULL),
(125, 'Muladi', 6, 3, 'মুলাদী', 69, NULL, 'M430', NULL, NULL),
(126, 'Wazirpur', 6, 3, 'উজিরপুর', 94, NULL, 'W2616', NULL, NULL),
(127, 'Bhola Sadar', 9, 3, 'ভোলা সদর', 18, NULL, 'B4236', NULL, NULL),
(128, 'Burhanuddin', 9, 3, 'বোরহানউদ্দীন', 21, NULL, 'B6535', NULL, NULL),
(129, 'Char Fasson', 9, 3, 'চর ফ্যাশন', 25, NULL, 'C6125', NULL, NULL),
(130, 'Daulat Khan', 9, 3, 'দৌলত খান', 29, NULL, 'D4325', NULL, NULL),
(131, 'Lalmohan', 9, 3, 'লালমোহন', 54, NULL, 'L500', NULL, NULL),
(132, 'Manpura', 9, 3, 'মনপুরা', 65, NULL, 'M160', NULL, NULL),
(133, 'Tazumuddin', 9, 3, 'তজুমুদ্দিন', 91, NULL, 'T2535', NULL, NULL),
(134, 'Adamdighi', 10, 3, 'আদমদিঘী', 6, NULL, 'A3532', NULL, NULL),
(135, 'Bogra Sadar', 10, 3, 'বগুড়া সদর', 20, NULL, 'B26236', NULL, NULL),
(136, 'Dhunat', 10, 3, 'ধুনট', 27, NULL, 'D530', NULL, NULL),
(137, 'Dhupchanchia', 10, 3, 'ধুপচাঁচিয়া', 33, NULL, 'D1252', NULL, NULL),
(138, 'Gabtali', 10, 3, 'গাবতলী', 40, NULL, 'G134', NULL, NULL),
(139, 'Kahaloo', 10, 3, 'কাহালু', 54, NULL, 'K400', NULL, NULL),
(140, 'Nandigram', 10, 3, 'নন্দীগ্রাম', 67, NULL, 'N3265', NULL, NULL),
(141, 'Sariakandi', 10, 3, 'সারিয়াকান্দি', 81, NULL, 'S6253', NULL, NULL),
(142, 'Shajahanpur', 10, 3, 'শাজাহানপুর', 85, NULL, 'S516', NULL, NULL),
(143, 'Sherpur', 10, 3, 'শেরপুর', 88, NULL, 'S616', 16, 'Sherpur'),
(144, 'Shibganj', 10, 3, 'শিব্‌গঞ্জ', 94, NULL, 'S1252', NULL, NULL),
(145, 'Sonatola', 10, 3, 'সোনাতলা', 95, NULL, 'S534', NULL, NULL),
(146, 'Akhaura', 12, 3, 'আখাউড়া', 2, NULL, 'A260', NULL, NULL),
(147, 'Banchharampur', 12, 3, 'বাঞ্ছারামপুর', 4, NULL, 'B526516', NULL, NULL),
(148, 'Bijoynagar', 12, 3, 'বিজয়নগর', 7, NULL, 'B2526', NULL, NULL),
(149, 'Brahmanbaria Sadar', 12, 3, 'ব্রাক্ষ্মণবাড়িয়া সদর', 13, NULL, 'B6516236', NULL, NULL),
(150, 'Ashuganj', 12, 3, 'আশুগঞ্জ', 33, NULL, 'A252', NULL, NULL),
(151, 'Kasba', 12, 3, 'কস্‌বা', 63, NULL, 'K100', NULL, NULL),
(152, 'Nabinagar', 12, 3, 'নবীনগর', 85, NULL, 'N1526', NULL, NULL),
(153, 'Nasirnagar', 12, 3, 'নাসিরনগর', 90, NULL, 'N26526', NULL, NULL),
(154, 'Sarail', 12, 3, 'সরাইল', 94, NULL, 'S640', NULL, NULL),
(155, 'Chandpur Sadar', 13, 3, 'চাঁদপুর সদর', 22, NULL, 'C5316236', NULL, NULL),
(156, 'Faridganj', 13, 3, 'ফরিদগঞ্জ', 45, NULL, 'F63252', NULL, NULL),
(157, 'Haim Char', 13, 3, 'হাইমচর', 47, NULL, 'H526', NULL, NULL),
(158, 'Hajiganj', 13, 3, 'হাজীগঞ্জ', 49, NULL, 'H252', NULL, NULL),
(159, 'Kachua', 13, 3, 'কচুয়া', 58, NULL, 'K000', NULL, NULL),
(160, 'Matlab Dakshin', 13, 3, 'মতলব দক্ষিণ', 76, NULL, 'M341325', NULL, NULL),
(161, 'Matlab Uttar', 13, 3, 'মতলব উত্তর', 79, NULL, 'M34136', NULL, NULL),
(162, 'Shahrasti', 13, 3, 'শাহরাস্তি', 95, NULL, 'S623', NULL, NULL),
(163, 'Anowara', 15, 3, 'আনোয়ারা', 4, NULL, 'A560', NULL, NULL),
(164, 'Bayejid Bostami', 15, 3, 'বায়জিদ বোস্তামী', 6, NULL, 'B231235', NULL, NULL),
(165, 'Banshkhali', 15, 3, 'বাঁশখালী', 8, NULL, 'B524', NULL, NULL),
(166, 'Bakalia', 15, 3, 'বাকলীয়া', 10, NULL, 'B240', NULL, NULL),
(167, 'Boalkhali', 15, 3, 'বোয়ালখালী', 12, NULL, 'B424', NULL, NULL),
(168, 'Chandanaish', 15, 3, 'চন্দনাইশ', 18, NULL, 'C5352', NULL, NULL),
(169, 'Chandgaon', 15, 3, 'চাঁদগাও', 19, NULL, 'C5325', NULL, NULL),
(170, 'Chittagong Port', 15, 3, 'চট্টগ্রাম পোর্ট', 20, NULL, 'C3252163', NULL, NULL),
(171, 'Double Mooring', 15, 3, 'ডবলমুরিং', 28, NULL, 'D145652', NULL, NULL),
(172, 'Fatikchhari', 15, 3, 'ফটিকছড়ি', 33, NULL, 'F326', NULL, NULL),
(173, 'Halishahar', 15, 3, 'হালিশহর', 35, NULL, 'H426', NULL, NULL),
(174, 'Hathazari', 15, 3, 'হাটহাজারী', 37, NULL, 'H326', NULL, NULL),
(175, 'Karnafuli (police Station)', 15, 3, 'কর্ণফুলী (পুলিশ ষ্টেশন)', 39, NULL, 'K651414235', NULL, NULL),
(176, 'Kotwali', 15, 3, 'কোতয়ালী', 41, NULL, 'K340', NULL, NULL),
(177, 'Khulshi', 15, 3, 'খুল্‌শী', 43, NULL, 'K420', NULL, NULL),
(178, 'Lohagara', 15, 3, 'লোহাগড়া', 47, NULL, 'L260', NULL, NULL),
(179, 'Mirsharai', 15, 3, 'মিরশরাই', 53, NULL, 'M626', NULL, NULL),
(180, 'Pahartali', 15, 3, 'পাহাড়তলী', 55, NULL, 'P634', NULL, NULL),
(181, 'Panchlaish', 15, 3, 'পাঁচলাইশ', 57, NULL, 'P5242', NULL, NULL),
(182, 'Patiya', 15, 3, 'পটিয়া', 61, NULL, 'P300', NULL, NULL),
(183, 'Patenga', 15, 3, 'পতেঙ্গা', 65, NULL, 'P352', NULL, NULL),
(184, 'Rangunia', 15, 3, 'রাংগুনীয়া', 70, NULL, 'R525', NULL, NULL),
(185, 'Raozan', 15, 3, 'রাউজান', 74, NULL, 'R250', NULL, NULL),
(186, 'Sandwip', 15, 3, 'সন্দ্বীপ', 78, NULL, 'S531', NULL, NULL),
(187, 'Satkania', 15, 3, 'সাতকানিয়া', 82, NULL, 'S325', NULL, NULL),
(188, 'Sitakunda', 15, 3, 'সীতাকুন্ড', 86, NULL, 'S3253', NULL, NULL),
(189, 'Alamdanga', 18, 3, 'আলমডাংগা', 7, NULL, 'A45352', NULL, NULL),
(190, 'Chuadanga Sadar', 18, 3, 'চুয়াডাঙ্গা সদর', 23, NULL, 'C35236', NULL, NULL),
(191, 'Damurhuda', 18, 3, 'দামুরহুদা', 31, NULL, 'D563', NULL, NULL),
(192, 'Jiban Nagar', 18, 3, 'জীবন নগর', 55, NULL, 'J1526', NULL, NULL),
(193, 'Barura', 19, 3, 'বরুড়া', 9, NULL, 'B600', NULL, NULL),
(194, 'Brahman Para', 19, 3, 'ব্রাক্ষ্মণ পাড়া', 15, NULL, 'B6516', NULL, NULL),
(195, 'Burichang', 19, 3, 'বুড়িচং', 18, NULL, 'B6252', NULL, NULL),
(196, 'Chandina', 19, 3, 'চন্দিনা', 27, NULL, 'C535', NULL, NULL),
(197, 'Chauddagram', 19, 3, 'চৌদ্দগ্রাম', 31, NULL, 'C3265', NULL, NULL),
(198, 'Comilla Sadar Dakshin', 19, 3, 'কুমিল্লা সদর দক্ষিণ', 33, NULL, 'C54236325', NULL, NULL),
(199, 'Daudkandi', 19, 3, 'দাউদকান্দি', 36, NULL, 'D253', NULL, NULL),
(200, 'Debidwar', 19, 3, 'দেবিদ্বার', 40, NULL, 'D136', NULL, NULL),
(201, 'Homna', 19, 3, 'হোমনা', 54, NULL, 'H500', NULL, NULL),
(202, 'Comilla Adarsha Sadar', 19, 3, 'কুমিল্লা আদর্শ সদর', 67, NULL, 'C5436236', NULL, NULL),
(203, 'Laksam', 19, 3, 'লাকসাম', 72, NULL, 'L250', NULL, NULL),
(204, 'Manoharganj', 19, 3, 'মনোহরগঞ্জ', 74, NULL, 'M6252', NULL, NULL),
(205, 'Meghna', 19, 3, 'মেঘনা', 75, NULL, 'M250', NULL, NULL),
(206, 'Muradnagar', 19, 3, 'মুরাদনগর', 81, NULL, 'M63526', NULL, NULL),
(207, 'Nangalkot', 19, 3, 'নাঙ্গলকোট', 87, NULL, 'N2423', NULL, NULL),
(208, 'Titas', 19, 3, 'তিতাস', 94, NULL, 'T200', NULL, NULL),
(209, 'Chakaria', 22, 3, 'চকরিয়া', 16, NULL, 'C600', NULL, NULL),
(210, 'Cox\'s Bazar Sadar', 22, 3, 'কক্সবাজার সদর', 24, NULL, 'C126236', NULL, NULL),
(211, 'Kutubdia', 22, 3, 'কুতুবদিয়া', 45, NULL, 'K313', NULL, NULL),
(212, 'Maheshkhali', 22, 3, 'মহেশখালী', 49, NULL, 'M240', NULL, NULL),
(213, 'Pekua', 22, 3, 'পেকুয়া', 56, NULL, 'P200', NULL, NULL),
(214, 'Ramu', 22, 3, 'রামু', 66, NULL, 'R500', NULL, NULL),
(215, 'Teknaf', 22, 3, 'টেক্‌নাফ', 90, NULL, 'T251', NULL, NULL),
(216, 'Ukhia', 22, 3, 'উখিয়া', 94, NULL, 'U200', NULL, NULL),
(217, 'Adabor', 26, 3, 'আদাবর', 2, NULL, 'A316', NULL, NULL),
(218, 'Badda', 26, 3, 'বাড্ডা', 4, NULL, 'B300', NULL, NULL),
(219, 'Biman Bandar', 26, 3, 'বিমান বন্দর', 6, NULL, 'B51536', NULL, NULL),
(220, 'Cantonment', 26, 3, 'ক্যান্টনমেন্ট', 8, NULL, 'C5353', NULL, NULL),
(221, 'Dakshinkhan', 26, 3, 'দক্ষিণখান', 10, NULL, 'D2525', NULL, NULL),
(222, 'Demra', 26, 3, 'ডেমরা', 12, NULL, 'D560', NULL, NULL),
(223, 'Dhamrai', 26, 3, 'ধামরাই', 14, NULL, 'D560', NULL, NULL),
(224, 'Dhanmondi', 26, 3, 'ধানমন্ডি', 16, NULL, 'D530', NULL, NULL),
(225, 'Dohar', 26, 3, 'দোহার', 18, NULL, 'D600', NULL, NULL),
(226, 'Gandaria', 26, 3, 'গেন্ডারিয়া', 24, NULL, 'G536', NULL, NULL),
(227, 'Gulshan', 26, 3, 'গুলশান', 26, NULL, 'G425', NULL, NULL),
(228, 'Hazaribagh', 26, 3, 'হাজারীবাগ', 28, NULL, 'H2612', NULL, NULL),
(229, 'Jatrabari', 26, 3, 'যাত্রাবাড়ী', 29, NULL, 'J3616', NULL, NULL),
(230, 'Kafrul', 26, 3, 'কাফরুল', 30, NULL, 'K164', NULL, NULL),
(231, 'Kadamtali', 26, 3, 'কদমতলী', 32, NULL, 'K3534', NULL, NULL),
(232, 'Kamrangir Char', 26, 3, 'কামরাঙ্গীর চর', 34, NULL, 'K5652626', NULL, NULL),
(233, 'Khilgaon', 26, 3, 'খিলগাও', 36, NULL, 'K425', NULL, NULL),
(234, 'Khilkhet', 26, 3, 'খিলক্ষেত', 37, NULL, 'K423', NULL, NULL),
(235, 'Keraniganj', 26, 3, 'কেরানীগঞ্জ', 38, NULL, 'K65252', NULL, NULL),
(236, 'Kotwali', 26, 3, 'কোতয়ালী', 40, NULL, 'K340', NULL, NULL),
(237, 'Lalbagh', 26, 3, 'লালবাগ', 42, NULL, 'L120', NULL, NULL),
(238, 'Mirpur', 26, 3, 'মিরপুর', 48, NULL, 'M616', NULL, NULL),
(239, 'Mohammadpur', 26, 3, 'মোহাম্মদপুর', 50, NULL, 'M316', NULL, NULL),
(240, 'Motijheel', 26, 3, 'মতিঝিল', 54, NULL, 'M324', NULL, NULL),
(241, 'Nawabganj', 26, 3, 'নবাবগঞ্জ', 62, NULL, 'N1252', 37, 'Nawabganj'),
(242, 'New Market', 26, 3, 'নিউ মার্কেট', 63, NULL, 'N623', NULL, NULL),
(243, 'Pallabi', 26, 3, 'পল্লবী', 64, NULL, 'P410', NULL, NULL),
(244, 'Paltan', 26, 3, 'পল্টন', 65, NULL, 'P435', NULL, NULL),
(245, 'Ramna', 26, 3, 'রমনা', 66, NULL, 'R500', NULL, NULL),
(246, 'Sabujbagh', 26, 3, 'সবুজবাগ', 68, NULL, 'S1212', NULL, NULL),
(247, 'Savar', 26, 3, 'সাভার', 72, NULL, 'S160', NULL, NULL),
(248, 'Shah Ali', 26, 3, 'শাহ্‌ আলী', 74, NULL, 'S400', NULL, NULL),
(249, 'Shahbagh', 26, 3, 'শাহবাগ', 75, NULL, 'S120', NULL, NULL),
(250, 'Shyampur', 26, 3, 'শ্যামপুর', 76, NULL, 'S516', NULL, NULL),
(251, 'Sutrapur', 26, 3, 'সুত্রাপুর', 88, NULL, 'S3616', NULL, NULL),
(252, 'Tejgaon', 26, 3, 'তেজগাঁও', 90, NULL, 'T250', NULL, NULL),
(253, 'Tejgaon Ind. Area', 26, 3, 'তেজগাঁও শিল্প এলাকা', 92, NULL, 'T2536', NULL, NULL),
(254, 'Turag', 26, 3, 'তুরাগ', 93, NULL, 'T620', NULL, NULL),
(255, 'Uttara', 26, 3, 'উত্তরা', 95, NULL, 'U360', NULL, NULL),
(256, 'Uttar Khan', 26, 3, 'উত্তর খান', 96, NULL, 'U3625', NULL, NULL),
(257, 'Birampur', 27, 3, 'বিরামপুর', 10, NULL, 'B6516', NULL, NULL),
(258, 'Birganj', 27, 3, 'বীরগঞ্জ', 12, NULL, 'B6252', NULL, NULL),
(259, 'Biral', 27, 3, 'বিরল', 17, NULL, 'B640', NULL, NULL),
(260, 'Bochaganj', 27, 3, 'বোচাগঞ্জ', 21, NULL, 'B252', NULL, NULL),
(261, 'Chirirbandar', 27, 3, 'চিরিরবন্দর', 30, NULL, 'C61536', NULL, NULL),
(262, 'Fulbari', 27, 3, 'ফুলবাড়ী', 38, NULL, 'F416', NULL, NULL),
(263, 'Ghoraghat', 27, 3, 'ঘোড়াঘাট', 43, NULL, 'G623', NULL, NULL),
(264, 'Hakimpur', 27, 3, 'হাকিমপুর', 47, NULL, 'H2516', NULL, NULL),
(265, 'Kaharole', 27, 3, 'কাহারোল', 56, NULL, 'K640', NULL, NULL),
(266, 'Khansama', 27, 3, 'খান্‌সামা', 60, NULL, 'K525', NULL, NULL),
(267, 'Dinajpur Sadar', 27, 3, 'দিনাজপুর সদর', 64, NULL, 'D5216236', NULL, NULL),
(268, 'Nawabganj', 27, 3, 'নবাবগঞ্জ', 69, NULL, 'N1252', 37, 'Nawabganj'),
(269, 'Parbatipur', 27, 3, 'পার্বতীপুর', 77, NULL, 'P61316', NULL, NULL),
(270, 'Alfadanga', 29, 3, 'আল্‌ফাডাঙ্গাvc', 3, NULL, 'A41352', NULL, NULL),
(271, 'Bhanga', 29, 3, 'ভাংগা', 10, NULL, 'B520', NULL, NULL),
(272, 'Boalmari', 29, 3, 'বোয়ালমারী', 18, NULL, 'B456', NULL, NULL),
(273, 'Char Bhadrasan', 29, 3, 'চর ভদ্রাশন', 21, NULL, 'C613625', NULL, NULL),
(274, 'Faridpur Sadar', 29, 3, 'ফরিদপুর সদর', 47, NULL, 'F6316236', NULL, NULL),
(275, 'Madhukhali', 29, 3, 'মধুখালী', 56, NULL, 'M324', NULL, NULL),
(276, 'Nagarkanda', 29, 3, 'নগরকান্দা', 62, NULL, 'N26253', NULL, NULL),
(277, 'Sadarpur', 29, 3, 'সদরপুর', 84, NULL, 'S3616', NULL, NULL),
(278, 'Saltha', 29, 3, 'সালথা', 90, NULL, 'S430', NULL, NULL),
(279, 'Chhagalnaiya', 30, 3, 'ছাগলনাইয়া', 14, NULL, 'C450', NULL, NULL),
(280, 'Daganbhuiyan', 30, 3, 'দাগনভূঁঞা', 25, NULL, 'D2515', NULL, NULL),
(281, 'Feni Sadar', 30, 3, 'ফেনী সদর', 29, NULL, 'F5236', NULL, NULL),
(282, 'Fulgazi', 30, 3, 'ফুলগাজী', 41, NULL, 'F420', NULL, NULL),
(283, 'Parshuram', 30, 3, 'পরশুরাম', 51, NULL, 'P6265', NULL, NULL),
(284, 'Sonagazi', 30, 3, 'সোনাগাজী', 94, NULL, 'S520', NULL, NULL),
(285, 'Fulchhari', 32, 3, 'ফুলছড়ি', 21, NULL, 'F426', NULL, NULL),
(286, 'Gaibandha Sadar', 32, 3, 'গাইবান্ধা সদর', 24, NULL, 'G153236', NULL, NULL),
(287, 'Gobindaganj', 32, 3, 'গোবিন্দগঞ্জ', 30, NULL, 'G153252', NULL, NULL),
(288, 'Palashbari', 32, 3, 'পলাশবাড়ী', 67, NULL, 'P4216', NULL, NULL),
(289, 'Sadullapur', 32, 3, 'সাদুল্লাপুর', 82, NULL, 'S3416', NULL, NULL),
(290, 'Saghata', 32, 3, 'সাঘাটা', 88, NULL, 'S300', NULL, NULL),
(291, 'Sundarganj', 32, 3, 'সুন্দরগঞ্জ', 91, NULL, 'S536252', NULL, NULL),
(292, 'Gazipur Sadar', 33, 3, 'গাজীপুর সদর', 30, NULL, 'G16236', NULL, NULL),
(293, 'Kaliakair', 33, 3, 'কালিয়াকৈর', 32, NULL, 'K426', NULL, NULL),
(294, 'Kaliganj', 33, 3, 'কালিগঞ্জ', 34, NULL, 'K4252', NULL, NULL),
(295, 'Kapasia', 33, 3, 'কাপাসিয়া', 36, NULL, 'K120', NULL, NULL),
(296, 'Sreepur', 33, 3, 'শ্রীপুর', 86, NULL, 'S616', NULL, NULL),
(297, 'Gopalganj Sadar', 35, 3, 'গোপালগঞ্জ সদর', 32, NULL, 'G1425236', NULL, NULL),
(298, 'Kashiani', 35, 3, 'কাশিয়ানী', 43, NULL, 'K500', NULL, NULL),
(299, 'Kotalipara', 35, 3, 'কোটালিপাড়া', 51, NULL, 'K3416', NULL, NULL),
(300, 'Muksudpur', 35, 3, 'মুকসুদপুর', 58, NULL, 'M2316', NULL, NULL),
(301, 'Tungipara', 35, 3, 'টংগীপাড়া', 91, NULL, 'T5216', NULL, NULL),
(302, 'Ajmiriganj', 36, 3, 'আজমিরিগঞ্জ', 2, NULL, 'A256252', NULL, NULL),
(303, 'Bahubal', 36, 3, 'বাহুবল', 5, NULL, 'B400', NULL, NULL),
(304, 'Baniachong', 36, 3, 'বানিয়াচং', 11, NULL, 'B5252', NULL, NULL),
(305, 'Chunarughat', 36, 3, 'চুনারুঘাট', 26, NULL, 'C5623', NULL, NULL),
(306, 'Habiganj Sadar', 36, 3, 'হবিগঞ্জ সদর', 44, NULL, 'H125236', NULL, NULL),
(307, 'Lakhai', 36, 3, 'লাখাই', 68, NULL, 'L200', NULL, NULL),
(308, 'Madhabpur', 36, 3, 'মাধবপুর', 71, NULL, 'M316', NULL, NULL),
(309, 'Nabiganj', 36, 3, 'নবীগঞ্জ', 77, NULL, 'N1252', NULL, NULL),
(310, 'Akkelpur', 38, 3, 'আক্কেলপুর', 13, NULL, 'A2416', NULL, NULL),
(311, 'Joypurhat Sadar', 38, 3, 'জয়পুরহাট সদর', 47, NULL, 'J163236', NULL, NULL),
(312, 'Kalai', 38, 3, 'কালাই', 58, NULL, 'K400', NULL, NULL),
(313, 'Khetlal', 38, 3, 'ক্ষেতলাল', 61, NULL, 'K340', NULL, NULL),
(314, 'Panchbibi', 38, 3, 'পাঁচবিবি', 74, NULL, 'P521', NULL, NULL),
(315, 'Bakshiganj', 39, 3, 'বকশিগঞ্জ', 7, NULL, 'B252', NULL, NULL),
(316, 'Dewanganj', 39, 3, 'দেওয়ানগঞ্জ', 15, NULL, 'D5252', NULL, NULL),
(317, 'Islampur', 39, 3, 'ইসলামপুর', 29, NULL, 'I24516', NULL, NULL),
(318, 'Jamalpur Sadar', 39, 3, 'জামালপুর সদর', 36, NULL, 'J5416236', NULL, NULL),
(319, 'Madarganj', 39, 3, 'মাদারগঞ্জ', 58, NULL, 'M36252', NULL, NULL),
(320, 'Melandaha', 39, 3, 'মেলান্দহ', 61, NULL, 'M453', NULL, NULL),
(321, 'Sarishabari', 39, 3, 'সরিষাবাড়ী', 85, NULL, 'S6216', NULL, NULL),
(322, 'Abhaynagar', 41, 3, 'অভয়নগর', 4, NULL, 'A1526', NULL, NULL),
(323, 'Bagher Para', 41, 3, 'বাঘারপাড়া', 9, NULL, 'B2616', NULL, NULL),
(324, 'Chaugachha', 41, 3, 'চৌগাছা', 11, NULL, 'C000', NULL, NULL),
(325, 'Jhikargachha', 41, 3, 'ঝিকরগাছা', 23, NULL, 'J620', NULL, NULL),
(326, 'Keshabpur', 41, 3, 'কেশবপুর', 38, NULL, 'K160', NULL, NULL),
(327, 'Jessor Sadar', 41, 3, 'যশোর সদর', 47, NULL, 'J6236', NULL, NULL),
(328, 'Manirampur', 41, 3, 'মনিরামপুর', 61, NULL, 'M6516', NULL, NULL),
(329, 'Sharsha', 41, 3, 'শার্শা', 90, NULL, 'S620', NULL, NULL),
(330, 'Jhalokati Sadar', 42, 3, 'ঝালকাঠী সদর', 40, NULL, 'J423236', NULL, NULL),
(331, 'Kanthalia', 42, 3, 'কাঠালিয়া', 43, NULL, 'K534', NULL, NULL),
(332, 'Nalchity', 42, 3, 'নলছিটি', 73, NULL, 'N423', NULL, NULL),
(333, 'Rajapur', 42, 3, 'রাজাপুর', 84, NULL, 'R216', NULL, NULL),
(334, 'Harinakunda', 44, 3, 'হরিনাকুন্ডু', 14, NULL, 'H65253', NULL, NULL),
(335, 'Jhenaidah Sadar', 44, 3, 'ঝিনাইদহ সদর', 19, NULL, 'J53236', NULL, NULL),
(336, 'Kaliganj', 44, 3, 'কালীগঞ্জ', 33, NULL, 'K4252', NULL, NULL),
(337, 'Kotchandpur', 44, 3, 'কোটচাঁদপুর', 42, NULL, 'K325316', NULL, NULL),
(338, 'Maheshpur', 44, 3, 'মহেশপুর', 71, NULL, 'M216', NULL, NULL),
(339, 'Shailkupa', 44, 3, 'শৈলকুপা', 80, NULL, 'S421', NULL, NULL),
(340, 'Dighinala', 46, 3, 'দিঘিনালা', 43, NULL, 'D254', NULL, NULL),
(341, 'Khagrachhari Sadar', 46, 3, 'খাগরাছড়ি সদর', 49, NULL, 'K626236', NULL, NULL),
(342, 'Lakshmichhari', 46, 3, 'লক্ষীছড়ি', 61, NULL, 'L2526', NULL, NULL),
(343, 'Mahalchhari', 46, 3, 'মহালছড়ি', 65, NULL, 'M426', NULL, NULL),
(344, 'Manikchhari', 46, 3, 'মানিকছড়ি', 67, NULL, 'M260', NULL, NULL),
(345, 'Matiranga', 46, 3, 'মাটিরাংগা', 70, NULL, 'M3652', NULL, NULL),
(346, 'Panchhari', 46, 3, 'পানছড়ি', 77, NULL, 'P526', NULL, NULL),
(347, 'Ramgarh', 46, 3, 'রামগর', 80, NULL, 'R526', NULL, NULL),
(348, 'Batiaghata', 47, 3, 'বটিয়াঘাটা', 12, NULL, 'B323', NULL, NULL),
(349, 'Dacope', 47, 3, 'দাকোপ', 17, NULL, 'D210', NULL, NULL),
(350, 'Daulatpur', 47, 3, 'দৌলতপুর', 21, NULL, 'D4316', NULL, NULL),
(351, 'Dumuria', 47, 3, 'ডুমুরিয়া', 30, NULL, 'D560', NULL, NULL),
(352, 'Dighalia', 47, 3, 'দিঘলিয়া', 40, NULL, 'D240', NULL, NULL),
(353, 'Khalishpur', 47, 3, 'খালিসপুর', 45, NULL, 'K4216', NULL, NULL),
(354, 'Khan Jahan Ali', 47, 3, 'খান জাহান আলী', 48, NULL, 'K5254', NULL, NULL),
(355, 'Khulna Sadar', 47, 3, 'খুলনা সদর', 51, NULL, 'K45236', NULL, NULL),
(356, 'Koyra', 47, 3, 'কয়রা', 53, NULL, 'K600', NULL, NULL),
(357, 'Paikgachha', 47, 3, 'পাইকগাছা', 64, NULL, 'P200', NULL, NULL),
(358, 'Phultala', 47, 3, 'ফুলতলা', 69, NULL, 'P434', NULL, NULL),
(359, 'Rupsa', 47, 3, 'রূপসা', 75, NULL, 'R120', NULL, NULL),
(360, 'Sonadanga', 47, 3, 'সোনাডাঙ্গা', 85, NULL, 'S5352', NULL, NULL),
(361, 'Terokhada', 47, 3, 'তেরখাদা', 94, NULL, 'T623', NULL, NULL),
(362, 'Austagram', 48, 3, 'অষ্টগ্রাম', 2, NULL, 'A23265', NULL, NULL),
(363, 'Bajitpur', 48, 3, 'বাজিতপুর', 6, NULL, 'B2316', NULL, NULL),
(364, 'Bhairab', 48, 3, 'ভৈরব', 11, NULL, 'B610', NULL, NULL),
(365, 'Hossainpur', 48, 3, 'হোসেনপুর', 27, NULL, 'H2516', NULL, NULL),
(366, 'Itna', 48, 3, 'ইটনা', 33, NULL, 'I350', NULL, NULL),
(367, 'Karimganj', 48, 3, 'করিমগঞ্জ', 42, NULL, 'K65252', NULL, NULL),
(368, 'Katiadi', 48, 3, 'কটিয়াদী', 45, NULL, 'K300', NULL, NULL),
(369, 'Kishoreganj Sadar', 48, 3, 'কিশোরগঞ্জ সদর', 49, NULL, 'K625236', NULL, NULL),
(370, 'Kuliarchar', 48, 3, 'কুলিয়ারচর', 54, NULL, 'K4626', NULL, NULL),
(371, 'Mithamain', 48, 3, 'মিঠামইন', 59, NULL, 'M350', NULL, NULL),
(372, 'Nikli', 48, 3, 'নিক্‌লী', 76, NULL, 'N240', NULL, NULL),
(373, 'Pakundia', 48, 3, 'পাকুন্দিয়া', 79, NULL, 'P253', NULL, NULL),
(374, 'Tarail', 48, 3, 'তারাইল', 92, NULL, 'T640', NULL, NULL),
(375, 'Bhurungamari', 49, 3, 'ভুরুংগামারী', 6, NULL, 'B65256', NULL, NULL),
(376, 'Char Rajibpur', 49, 3, 'রাজিবপুর', 8, NULL, 'C6216', NULL, NULL),
(377, 'Chilmari', 49, 3, 'চিলমারী', 9, NULL, 'C456', NULL, NULL),
(378, 'Phulbari', 49, 3, 'ফুলবাড়ী', 18, NULL, 'P416', NULL, NULL),
(379, 'Kurigram Sadar', 49, 3, 'কুড়িগ্রাম সদর', 52, NULL, 'K6265236', NULL, NULL),
(380, 'Nageshwari', 49, 3, 'নাগেশ্বরী', 61, NULL, 'N260', NULL, NULL),
(381, 'Rajarhat', 49, 3, 'রাজারহাট', 77, NULL, 'R263', NULL, NULL),
(382, 'Raumari', 49, 3, 'রৌমারী', 79, NULL, 'R560', NULL, NULL),
(383, 'Ulipur', 49, 3, 'উলিপুর', 94, NULL, 'U416', NULL, NULL),
(384, 'Bheramara', 50, 3, 'ভেড়ামারা', 15, NULL, 'B656', NULL, NULL),
(385, 'Daulatpur', 50, 3, 'দৌলতপুর', 39, NULL, 'D4316', NULL, NULL),
(386, 'Khoksa', 50, 3, 'খোক্‌সা', 63, NULL, 'K000', NULL, NULL),
(387, 'Kumarkhali', 50, 3, 'কুমারখালী', 71, NULL, 'K5624', NULL, NULL),
(388, 'Kushtia Sadar', 50, 3, 'কুষ্টিয়া সদর', 79, NULL, 'K3236', NULL, NULL),
(389, 'Mirpur', 50, 3, 'মিরপুর', 94, NULL, 'M616', NULL, NULL),
(390, 'Kamalnagar', 51, 3, 'কমলনগর', 33, NULL, 'K54526', NULL, NULL),
(391, 'Lakshmipur Sadar', 51, 3, 'লক্ষ্ণীপুর সদর', 43, NULL, 'L2516236', NULL, NULL),
(392, 'Roypur', 51, 3, 'রায়পুর', 58, NULL, 'R160', NULL, NULL),
(393, 'Ramganj', 51, 3, 'রামগঞ্জ', 65, NULL, 'R5252', NULL, NULL),
(394, 'Ramgati', 51, 3, 'রামগতী', 73, NULL, 'R523', NULL, NULL),
(395, 'Aditmari', 52, 3, 'আদিতমারী', 2, NULL, 'A356', NULL, NULL),
(396, 'Hatibandha', 52, 3, 'হাতীবান্ধা', 33, NULL, 'H3153', NULL, NULL),
(397, 'Kaliganj', 52, 3, 'কালীগঞ্জ', 39, NULL, 'K4252', NULL, NULL),
(398, 'Lalmonirhat Sadar', 52, 3, 'লালমনিরহাট সদর', 55, NULL, 'L563236', NULL, NULL),
(399, 'Patgram', 52, 3, 'পাটগ্রাম', 70, NULL, 'P3265', NULL, NULL),
(400, 'Kalkini', 54, 3, 'কালকিনী', 40, NULL, 'K425', NULL, NULL),
(401, 'Madaripur Sadar', 54, 3, 'মাদারিপুর সদর', 54, NULL, 'M3616236', NULL, NULL),
(402, 'Rajoir', 54, 3, 'রাজৈর', 80, NULL, 'R260', NULL, NULL),
(403, 'Shib Char', 54, 3, 'শিব্‌ চর', 87, NULL, 'S126', NULL, NULL),
(404, 'Magura Sadar', 55, 3, 'মাগুরা সদর', 57, NULL, 'M26236', NULL, NULL),
(405, 'Mohammadpur', 55, 3, 'মোহাম্মদপুর', 66, NULL, 'M316', NULL, NULL),
(406, 'Shalikha', 55, 3, 'শালিখা', 85, NULL, 'S420', NULL, NULL),
(407, 'Sreepur', 55, 3, 'শ্রীপুর', 95, NULL, 'S616', NULL, NULL),
(408, 'Daulatpur', 56, 3, 'দৌলতপুর', 10, NULL, 'D4316', NULL, NULL),
(409, 'Ghior', 56, 3, 'ঘিওর', 22, NULL, 'G600', NULL, NULL),
(410, 'Harirampur', 56, 3, 'হরিরামপুর', 28, NULL, 'H6516', NULL, NULL),
(411, 'Manikganj Sadar', 56, 3, 'মানিকগঞ্জ সদর', 46, NULL, 'M25236', NULL, NULL),
(412, 'Saturia', 56, 3, 'সাটুরিয়া', 70, NULL, 'S360', NULL, NULL),
(413, 'Shibalaya', 56, 3, 'শিবালয়', 78, NULL, 'S140', NULL, NULL),
(414, 'Singair', 56, 3, 'শিংগাইর', 82, NULL, 'S526', NULL, NULL),
(415, 'Gangni', 57, 3, 'গাংনী', 47, NULL, 'G525', NULL, NULL),
(416, 'Mujib Nagar', 57, 3, 'মজিব নগর', 60, NULL, 'M21526', NULL, NULL),
(417, 'Meherpur Sadar', 57, 3, 'মেহেরপুর সদর', 87, NULL, 'M616236', NULL, NULL),
(418, 'Barlekha', 58, 3, 'বড়লেখা', 14, NULL, 'B642', NULL, NULL),
(419, 'Juri', 58, 3, 'জুড়ী', 35, NULL, 'J600', NULL, NULL),
(420, 'Kamalganj', 58, 3, 'কমলগঞ্জ', 56, NULL, 'K54252', NULL, NULL),
(421, 'Kulaura', 58, 3, 'কুলাউড়া', 65, NULL, 'K460', NULL, NULL),
(422, 'Maulvibazar Sadar', 58, 3, 'মৌলভীবাজার সদর', 74, NULL, 'M4126236', NULL, NULL),
(423, 'Rajnagar', 58, 3, 'রাজনগর', 80, NULL, 'R2526', NULL, NULL),
(424, 'Sreemangal', 58, 3, 'শ্রীমঙ্গল', 83, NULL, 'S6524', NULL, NULL),
(425, 'Gazaria', 59, 3, 'গজারিয়া', 24, NULL, 'G600', NULL, NULL),
(426, 'Lohajang', 59, 3, 'লৌহজং', 44, NULL, 'L252', NULL, NULL),
(427, 'Munshiganj Sadar', 59, 3, 'মুন্সীগঞ্জ সদর', 56, NULL, 'M25236', NULL, NULL),
(428, 'Serajdikhan', 59, 3, 'সিরাজদিখান', 74, NULL, 'S62325', NULL, NULL),
(429, 'Sreenagar', 59, 3, 'শ্রীনগর', 84, NULL, 'S6526', NULL, NULL),
(430, 'Tongibari', 59, 3, 'টুঙ্গিবাড়ী', 94, NULL, 'T5216', NULL, NULL),
(431, 'Bhaluka', 61, 3, 'ভালুকা', 13, NULL, 'B420', NULL, NULL),
(432, 'Dhobaura', 61, 3, 'ধোবাউড়া', 16, NULL, 'D160', NULL, NULL),
(433, 'Fulbaria', 61, 3, 'ফুলবাড়ীয়া', 20, NULL, 'F416', NULL, NULL),
(434, 'Gaffargaon', 61, 3, 'গফরগাঁও', 22, NULL, 'G1625', NULL, NULL),
(435, 'Gauripur', 61, 3, 'গৌরীপুর', 23, NULL, 'G616', NULL, NULL),
(436, 'Haluaghat', 61, 3, 'হালুয়াঘাট', 24, NULL, 'H423', NULL, NULL),
(437, 'Ishwarganj', 61, 3, 'ঈশ্বরগঞ্জ', 31, NULL, 'I26252', NULL, NULL),
(438, 'Mymensingh Sadar', 61, 3, 'ময়মনসিংহ সদর', 52, NULL, 'M25236', NULL, NULL),
(439, 'Muktagachha', 61, 3, 'মুক্তাগাছা', 65, NULL, 'M232', NULL, NULL),
(440, 'Nandail', 61, 3, 'নান্দাইল', 72, NULL, 'N340', NULL, NULL),
(441, 'Phulpur', 61, 3, 'ফুলপুর', 81, NULL, 'P416', NULL, NULL),
(442, 'Trishal', 61, 3, 'ত্রিশাল', 94, NULL, 'T624', NULL, NULL),
(443, 'Atrai', 64, 3, 'আত্রাই', 3, NULL, 'A360', NULL, NULL),
(444, 'Badalgachhi', 64, 3, 'বদলগাছী', 6, NULL, 'B342', NULL, NULL),
(445, 'Dhamoirhat', 64, 3, 'ধামুইরহাট', 28, NULL, 'D563', NULL, NULL),
(446, 'Manda', 64, 3, 'মান্দা', 47, NULL, 'M300', NULL, NULL),
(447, 'Mahadebpur', 64, 3, 'মহাদেবপুর', 50, NULL, 'M316', NULL, NULL),
(448, 'Naogaon Sadar', 64, 3, 'নওগাঁ সদর', 60, NULL, 'N25236', NULL, NULL),
(449, 'Niamatpur', 64, 3, 'নিয়ামতপুর', 69, NULL, 'N316', NULL, NULL),
(450, 'Patnitala', 64, 3, 'পত্নীতলা', 75, NULL, 'P3534', NULL, NULL),
(451, 'Porsha', 64, 3, 'পোরশা', 79, NULL, 'P620', NULL, NULL),
(452, 'Raninagar', 64, 3, 'রাণীনগর', 85, NULL, 'R526', NULL, NULL),
(453, 'Sapahar', 64, 3, 'সাপাহার', 86, NULL, 'S160', NULL, NULL),
(454, 'Kalia', 65, 3, 'কালিয়া', 28, NULL, 'K400', NULL, NULL),
(455, 'Lohagara', 65, 3, 'লোহাগড়া', 52, NULL, 'L260', NULL, NULL),
(456, 'Narail Sadar', 65, 3, 'নড়াইল সদর', 76, NULL, 'N64236', NULL, NULL),
(457, 'Araihazar', 67, 3, 'আড়াইহাজার', 2, NULL, 'A626', NULL, NULL),
(458, 'Sonargaon', 67, 3, 'সোনারগাঁও', 4, NULL, 'S5625', NULL, NULL),
(459, 'Bandar', 67, 3, 'বন্দর', 6, NULL, 'B536', NULL, NULL),
(460, 'Narayanganj Sadar', 67, 3, 'নারায়নগঞ্জ সদর', 58, NULL, 'N6525236', NULL, NULL),
(461, 'Rupganj', 67, 3, 'রূপগঞ্জ', 68, NULL, 'R1252', NULL, NULL),
(462, 'Belabo', 68, 3, 'বেলাবো', 7, NULL, 'B410', NULL, NULL),
(463, 'Manohardi', 68, 3, 'মনোহরদী', 52, NULL, 'M630', NULL, NULL),
(464, 'Narsingdi Sadar', 68, 3, 'নরসিংদী সদর', 60, NULL, 'N62523236', NULL, NULL),
(465, 'Palash', 68, 3, 'পলাশ', 63, NULL, 'P420', NULL, NULL),
(466, 'Roypura', 68, 3, 'রায়পুরা', 64, NULL, 'R160', NULL, NULL),
(467, 'Shibpur', 68, 3, 'শিবপুর', 76, NULL, 'S160', NULL, NULL),
(468, 'Bagatipara', 69, 3, 'বাগাতিপাড়া', 9, NULL, 'B2316', NULL, NULL),
(469, 'Baraigram', 69, 3, 'বড়ইগ্রাম', 15, NULL, 'B6265', NULL, NULL),
(470, 'Gurudaspur', 69, 3, 'গুরুদাসপুর', 41, NULL, 'G63216', NULL, NULL),
(471, 'Lalpur', 69, 3, 'লালপুর', 44, NULL, 'L160', NULL, NULL),
(472, 'Naldanga', 69, 3, 'নলডাঙ্গা', 55, NULL, 'N4352', NULL, NULL),
(473, 'Natore Sadar', 69, 3, 'নাটোর সদর', 63, NULL, 'N36236', NULL, NULL),
(474, 'Singra', 69, 3, 'সিংড়া', 91, NULL, 'S526', NULL, NULL),
(475, 'Bholahat', 70, 3, 'ভোলাহাট', 18, NULL, 'B430', NULL, NULL),
(476, 'Gomastapur', 70, 3, 'গোমস্তাপুর', 37, NULL, 'G52316', NULL, NULL),
(477, 'Nachole', 70, 3, 'নাচোল', 56, NULL, 'N240', NULL, NULL),
(478, 'Chapai Nababganj Sadar', 70, 3, 'চাঁপাই নবাবগঞ্জ সদর', 66, NULL, 'C15125236', NULL, NULL),
(479, 'Shibganj', 70, 3, 'শিবগঞ্জ', 88, NULL, 'S1252', NULL, NULL),
(480, 'Atpara', 72, 3, 'আটপাড়া', 4, NULL, 'A316', NULL, NULL),
(481, 'Barhatta', 72, 3, 'বারহাট্টা', 9, NULL, 'B630', NULL, NULL),
(482, 'Durgapur', 72, 3, 'দূর্গাপুর', 18, NULL, 'D6216', NULL, NULL),
(483, 'Khaliajuri', 72, 3, 'খলিয়াজুরী', 38, NULL, 'K426', NULL, NULL),
(484, 'Kalmakanda', 72, 3, 'কলমাকান্দা', 40, NULL, 'K45253', NULL, NULL),
(485, 'Kendua', 72, 3, 'কেন্দুয়া', 47, NULL, 'K530', NULL, NULL),
(486, 'Madan', 72, 3, 'মদন ', 56, NULL, 'M350', NULL, NULL),
(487, 'Mohanganj', 72, 3, 'মোহনগঞ্জ', 63, NULL, 'M252', NULL, NULL),
(488, 'Netrokona Sadar', 72, 3, 'নেত্রকোনা সদর', 74, NULL, 'N3625236', NULL, NULL),
(489, 'Purbadhala', 72, 3, 'পূর্বধলা', 83, NULL, 'P6134', NULL, NULL),
(490, 'Dimla', 73, 3, 'ডিমলা', 12, NULL, 'D540', NULL, NULL),
(491, 'Domar', 73, 3, 'ডোমার', 15, NULL, 'D560', NULL, NULL),
(492, 'Jaldhaka', 73, 3, 'জলঢাকা', 36, NULL, 'J432', NULL, NULL),
(493, 'Kishoreganj', 73, 3, 'কিশোরগঞ্জ', 45, NULL, 'K6252', 6, 'Kishoreganj'),
(494, 'Nilphamari Sadar', 73, 3, 'নীলফামারী সদর', 64, NULL, 'N4156236', NULL, NULL),
(495, 'Saidpur', 73, 3, 'সৈয়দপুর', 85, NULL, 'S316', NULL, NULL),
(496, 'Begumganj', 75, 3, 'বেগমগঞ্জ', 7, NULL, 'B25252', NULL, NULL),
(497, 'Chatkhil', 75, 3, 'চাট্‌খিল', 10, NULL, 'C324', NULL, NULL),
(498, 'Companiganj', 75, 3, 'কোম্পানীগঞ্জ', 21, NULL, 'C515252', NULL, NULL),
(499, 'Hatiya', 75, 3, 'হাতিয়া', 36, NULL, 'H300', NULL, NULL),
(500, 'Kabirhat', 75, 3, 'কবিরহাট', 47, NULL, 'K163', NULL, NULL),
(501, 'Senbagh', 75, 3, 'সেনবাগ', 80, NULL, 'S512', NULL, NULL),
(502, 'Sonaimuri', 75, 3, 'সোনাইমুড়ি', 83, NULL, 'S560', NULL, NULL),
(503, 'Subarnachar', 75, 3, 'সুবর্ণচর', 85, NULL, 'S16526', NULL, NULL),
(504, 'Noakhali Sadar', 75, 3, 'নোয়াখালী সদর', 87, NULL, 'N24236', NULL, NULL),
(505, 'Atgharia', 76, 3, 'আটঘরিয়া', 5, NULL, 'A326', NULL, NULL),
(506, 'Bera', 76, 3, 'বেড়া', 16, NULL, 'B600', NULL, NULL),
(507, 'Bhangura', 76, 3, 'ভাংগুড়া', 19, NULL, 'B526', NULL, NULL),
(508, 'Chatmohar', 76, 3, 'চাট্‌মোহর', 22, NULL, 'C356', NULL, NULL),
(509, 'Faridpur', 76, 3, 'ফরিদপুর', 33, NULL, 'F6316', 2, 'Faridpur'),
(510, 'Ishwardi', 76, 3, 'ঈশ্বরদী', 39, NULL, 'I263', NULL, NULL),
(511, 'Pabna Sadar', 76, 3, 'পাবনা সদর', 55, NULL, 'P5236', NULL, NULL),
(512, 'Santhia', 76, 3, 'সাঁথিয়া', 72, NULL, 'S530', NULL, NULL),
(513, 'Sujanagar', 76, 3, 'সুজানগর', 83, NULL, 'S526', NULL, NULL),
(514, 'Atwari', 77, 3, 'আটোয়ারী', 4, NULL, 'A360', NULL, NULL),
(515, 'Boda', 77, 3, 'বোদা', 25, NULL, 'B300', NULL, NULL),
(516, 'Debiganj', 77, 3, 'দেবীগঞ্জ', 34, NULL, 'D1252', NULL, NULL),
(517, 'Panchagarh Sadar', 77, 3, 'পঞ্চগড় সদর', 73, NULL, 'P526236', NULL, NULL),
(518, 'Tentulia', 77, 3, 'তেঁতুলিয়া', 90, NULL, 'T534', NULL, NULL),
(519, 'Bauphal', 78, 3, 'বাউফল', 38, NULL, 'B400', NULL, NULL),
(520, 'Dashmina', 78, 3, 'দশমিনা', 52, NULL, 'D250', NULL, NULL),
(521, 'Dumki', 78, 3, 'দুম্‌কী', 55, NULL, 'D520', NULL, NULL),
(522, 'Galachipa', 78, 3, 'গলাচিপা', 57, NULL, 'G421', NULL, NULL),
(523, 'Kala Para', 78, 3, 'কলাপাড়া', 66, NULL, 'K416', NULL, NULL),
(524, 'Mirzaganj', 78, 3, 'মির্জাগঞ্জ', 76, NULL, 'M6252', NULL, NULL),
(525, 'Patuakhali Sadar', 78, 3, 'পটুয়াখালী সদর', 95, NULL, 'P324236', NULL, NULL),
(526, 'Rangabali', 78, 3, 'রাংগাবালী', 97, NULL, 'R5214', NULL, NULL),
(527, 'Bhandaria', 79, 3, 'ভান্ডারিয়া', 14, NULL, 'B536', NULL, NULL),
(528, 'Kawkhali', 79, 3, 'কাউখালী', 47, NULL, 'K400', NULL, NULL),
(529, 'Mathbaria', 79, 3, 'মঠবাড়ীয়া', 58, NULL, 'M316', NULL, NULL),
(530, 'Nazirpur Upazila', 79, 3, 'নাজিরপুর', 76, NULL, 'N2616124', NULL, NULL),
(531, 'Pirojpur Sadar', 79, 3, 'পিরোজপুর সদর', 80, NULL, 'P6216236', NULL, NULL),
(532, 'Nesarabad (swarupkati)', 79, 3, 'নেছারাবাদ(স্বরূপকাঠী)', 87, NULL, 'N261326123', NULL, NULL),
(533, 'Zianagar', 79, 3, 'জিয়ানগর', 90, NULL, 'Z526', NULL, NULL),
(534, 'Bagha', 81, 3, 'বাঘা', 10, NULL, 'B200', NULL, NULL),
(535, 'Baghmara', 81, 3, 'বাগমারা', 12, NULL, 'B256', NULL, NULL),
(536, 'Boalia', 81, 3, 'বোয়ালিয়া', 22, NULL, 'B400', NULL, NULL),
(537, 'Charghat', 81, 3, 'চারঘাট', 25, NULL, 'C623', NULL, NULL),
(538, 'Durgapur', 81, 3, 'দূর্গাপুর', 31, NULL, 'D6216', NULL, NULL),
(539, 'Godagari', 81, 3, 'গোদাগাড়ী', 34, NULL, 'G326', NULL, NULL),
(540, 'Matihar', 81, 3, 'মতিহার', 40, NULL, 'M360', NULL, NULL),
(541, 'Mohanpur', 81, 3, 'মোহনপুর', 53, NULL, 'M160', NULL, NULL),
(542, 'Paba', 81, 3, 'পবা', 72, NULL, 'P000', NULL, NULL),
(543, 'Puthia', 81, 3, 'পুঠিয়া', 82, NULL, 'P300', NULL, NULL),
(544, 'Rajpara', 81, 3, 'রাজপাড়া', 85, NULL, 'R216', NULL, NULL),
(545, 'Shah Makhdum', 81, 3, 'শাহ্‌ মখদুম', 90, NULL, 'S5235', NULL, NULL),
(546, 'Tanore', 81, 3, 'তানোর', 94, NULL, 'T560', NULL, NULL),
(547, 'Baliakandi', 82, 3, 'বালিয়াকান্দি', 7, NULL, 'B4253', NULL, NULL),
(548, 'Goalanda', 82, 3, 'গোয়ালন্দ', 29, NULL, 'G453', NULL, NULL),
(549, 'Kalukhali', 82, 3, 'কালুখালী', 47, NULL, 'K424', NULL, NULL),
(550, 'Pangsha', 82, 3, 'পাংশা', 73, NULL, 'P520', NULL, NULL),
(551, 'Rajbari Sadar', 82, 3, 'রাজবাড়ী সদর', 76, NULL, 'R216236', NULL, NULL),
(552, 'Baghaichhari', 84, 3, 'বাঘাইছড়ি', 7, NULL, 'B260', NULL, NULL),
(553, 'Barkal', 84, 3, 'বরকল', 21, NULL, 'B624', NULL, NULL),
(554, 'Kawkhali', 84, 3, 'কাউখালী', 25, NULL, 'K400', NULL, NULL),
(555, 'Belai Chhari', 84, 3, 'বিলাইছড়ি', 29, NULL, 'B426', NULL, NULL),
(556, 'Kaptai', 84, 3, 'কাপ্তাই', 36, NULL, 'K130', NULL, NULL),
(557, 'Jurai Chhari', 84, 3, 'জুরাইছড়ি', 47, NULL, 'J626', NULL, NULL),
(558, 'Langadu', 84, 3, 'লংগদু', 58, NULL, 'L523', NULL, NULL),
(559, 'Naniarchar', 84, 3, 'নানিয়ারচর', 75, NULL, 'N626', NULL, NULL),
(560, 'Rajasthali', 84, 3, 'রাজস্থালী', 78, NULL, 'R234', NULL, NULL),
(561, 'Rangamati Sadar', 84, 3, 'রাঙ্গামাটি সদর', 87, NULL, 'R5253236', NULL, NULL),
(562, 'Badarganj', 85, 3, 'বদরগঞ্জ', 3, NULL, 'B36252', NULL, NULL),
(563, 'Gangachara', 85, 3, 'গংগাচড়া', 27, NULL, 'G526', NULL, NULL),
(564, 'Kaunia', 85, 3, 'কাউনিয়া', 42, NULL, 'K500', NULL, NULL),
(565, 'Rangpur Sadar', 85, 3, 'রংপুর সদর', 49, NULL, 'R5216236', NULL, NULL),
(566, 'Mitha Pukur', 85, 3, 'মিঠাপুকুর', 58, NULL, 'M3126', NULL, NULL),
(567, 'Pirgachha', 85, 3, 'পীরগাছা', 73, NULL, 'P620', NULL, NULL),
(568, 'Pirganj', 85, 3, 'পীরগঞ্জ', 76, NULL, 'P6252', NULL, NULL),
(569, 'Taraganj', 85, 3, 'তারাগঞ্জ', 92, NULL, 'T6252', NULL, NULL),
(570, 'Bhedarganj', 86, 3, 'ভেদরগঞ্জ', 14, NULL, 'B36252', NULL, NULL),
(571, 'Damudya', 86, 3, 'ডামুড্যা', 25, NULL, 'D530', NULL, NULL),
(572, 'Gosairhat', 86, 3, 'গোসাইরহাট', 36, NULL, 'G630', NULL, NULL),
(573, 'Naria', 86, 3, 'নড়িয়া', 65, NULL, 'N600', NULL, NULL),
(574, 'Shariatpur Sadar', 86, 3, 'শরিয়তপুর সদর', 69, NULL, 'S6316236', NULL, NULL),
(575, 'Zanjira', 86, 3, 'জাজিরা', 94, NULL, 'Z526', NULL, NULL),
(576, 'Assasuni', 87, 3, 'আশাশুনি', 4, NULL, 'A250', NULL, NULL),
(577, 'Debhata', 87, 3, 'দেবহাটা', 25, NULL, 'D130', NULL, NULL),
(578, 'Kalaroa', 87, 3, 'কলারোয়া', 43, NULL, 'K460', NULL, NULL),
(579, 'Kaliganj', 87, 3, 'কালিগঞ্জ', 47, NULL, 'K4252', NULL, NULL),
(580, 'Satkhira Sadar', 87, 3, 'সাতক্ষিরা সদর', 82, NULL, 'S326236', NULL, NULL),
(581, 'Shyamnagar', 87, 3, 'শ্যামনগর', 86, NULL, 'S526', NULL, NULL),
(582, 'Tala', 87, 3, 'তালা', 90, NULL, 'T400', NULL, NULL),
(583, 'Belkuchi', 88, 3, 'বেলকুচি', 11, NULL, 'B420', NULL, NULL),
(584, 'Chauhali', 88, 3, 'চৌহালী', 27, NULL, 'C400', NULL, NULL),
(585, 'Kamarkhanda', 88, 3, 'কামারখন্দ', 44, NULL, 'K56253', NULL, NULL),
(586, 'Kazipur', 88, 3, 'কাজীপুর', 50, NULL, 'K160', NULL, NULL),
(587, 'Royganj', 88, 3, 'রায়গঞ্জ', 61, NULL, 'R252', NULL, NULL),
(588, 'Shahjadpur', 88, 3, 'শাহাজাদপুর', 67, NULL, 'S316', NULL, NULL),
(589, 'Sirajganj Sadar', 88, 3, 'সিরাজগঞ্জ সদর', 78, NULL, 'S625236', NULL, NULL),
(590, 'Tarash', 88, 3, 'তাড়াশ', 89, NULL, 'T620', NULL, NULL),
(591, 'Ullah Para', 88, 3, 'উল্লা পাড়া', 94, NULL, 'U416', NULL, NULL),
(592, 'Jhenaigati', 89, 3, 'ঝিনাইঘাতি', 37, NULL, 'J523', NULL, NULL),
(593, 'Nakla', 89, 3, 'নকলা', 67, NULL, 'N240', NULL, NULL),
(594, 'Nalitabari', 89, 3, 'নালিতাবাড়ী', 70, NULL, 'N4316', NULL, NULL),
(595, 'Sherpur Sadar', 89, 3, 'শেরপুর সদর', 88, NULL, 'S616236', NULL, NULL),
(596, 'Sreebardi', 89, 3, 'শ্রীবর্দি', 90, NULL, 'S6163', NULL, NULL),
(597, 'Bishwambarpur', 90, 3, 'বিশ্বম্ভরপুর', 18, NULL, 'B251616', NULL, NULL),
(598, 'Chhatak', 90, 3, 'ছাতক', 23, NULL, 'C320', NULL, NULL),
(599, 'Dakshin Sunamganj', 90, 3, 'দক্ষিন সুনামগঞ্জ', 27, NULL, 'D2525252', NULL, NULL),
(600, 'Derai', 90, 3, 'দিরাই', 29, NULL, 'D600', NULL, NULL),
(601, 'Dharampasha', 90, 3, 'ধর্মপাশা', 32, NULL, 'D6512', NULL, NULL),
(602, 'Dowarabazar', 90, 3, 'দোয়ারাবাজার', 33, NULL, 'D6126', NULL, NULL),
(603, 'Jagannathpur', 90, 3, 'জগন্নাথপুর', 47, NULL, 'J5316', NULL, NULL),
(604, 'Jamalganj', 90, 3, 'জামালগঞ্জ', 50, NULL, 'J54252', NULL, NULL),
(605, 'Sulla', 90, 3, 'শুল্লা', 86, NULL, 'S400', NULL, NULL),
(606, 'Sunamganj Sadar', 90, 3, 'সুনামগঞ্জ সদর', 89, NULL, 'S525236', NULL, NULL),
(607, 'Tahirpur', 90, 3, 'তাহিরপুর', 92, NULL, 'T616', NULL, NULL),
(608, 'Balaganj', 91, 3, 'বালাগঞ্জ', 8, NULL, 'B4252', NULL, NULL),
(609, 'Beani Bazar', 91, 3, 'বিয়ানী বাজার', 17, NULL, 'B5126', NULL, NULL),
(610, 'Bishwanath', 91, 3, 'বিশ্বনাথ', 20, NULL, 'B253', NULL, NULL),
(611, 'Companiganj', 91, 3, 'কোম্পানীগঞ্জ', 27, NULL, 'C515252', NULL, NULL),
(612, 'Dakshin Surma', 91, 3, 'দক্ষিণ সুরমা', 31, NULL, 'D25265', NULL, NULL),
(613, 'Fenchuganj', 91, 3, 'ফেঞ্চুগঞ্জ', 35, NULL, 'F5252', NULL, NULL),
(614, 'Golapganj', 91, 3, 'গোলাপগঞ্জ', 38, NULL, 'G41252', NULL, NULL),
(615, 'Gowainghat', 91, 3, 'গোয়াইনঘাট', 41, NULL, 'G523', NULL, NULL),
(616, 'Jaintiapur', 91, 3, 'জৈন্তাপুর', 53, NULL, 'J5316', NULL, NULL),
(617, 'Kanaighat', 91, 3, 'কানাইঘাট', 59, NULL, 'K523', NULL, NULL),
(618, 'Sylhet Sadar', 91, 3, 'সিলেট সদর', 62, NULL, 'S43236', NULL, NULL),
(619, 'Zakiganj', 91, 3, 'জকিগঞ্জ', 94, NULL, 'Z520', NULL, NULL),
(620, 'Basail', 93, 3, 'বাসাইল', 9, NULL, 'B240', NULL, NULL),
(621, 'Bhuapur', 93, 3, 'ভূঞাপুর', 19, NULL, 'B600', NULL, NULL),
(622, 'Delduar', 93, 3, 'দেলদুয়ার', 23, NULL, 'D436', NULL, NULL),
(623, 'Dhanbari', 93, 3, 'ধনবাড়ী', 25, NULL, 'D516', NULL, NULL),
(624, 'Ghatail', 93, 3, 'ঘাটাইল', 28, NULL, 'G340', NULL, NULL),
(625, 'Gopalpur', 93, 3, 'গোপালপুর', 38, NULL, 'G1416', NULL, NULL),
(626, 'Kalihati', 93, 3, 'কালিহাতি', 47, NULL, 'K430', NULL, NULL),
(627, 'Madhupur', 93, 3, 'মধুপুর', 57, NULL, 'M316', NULL, NULL),
(628, 'Mirzapur', 93, 3, 'মির্জাপুর', 66, NULL, 'M6216', NULL, NULL),
(629, 'Nagarpur', 93, 3, 'নাগরপুর', 76, NULL, 'N2616', NULL, NULL),
(630, 'Sakhipur', 93, 3, 'সখিপুর', 85, NULL, 'S160', NULL, NULL),
(631, 'Tangail Sadar', 93, 3, 'টাঙ্গাইল সদর', 95, NULL, 'T524236', NULL, NULL),
(632, 'Baliadangi', 94, 3, 'বালিয়াডাংগী', 8, NULL, 'B4352', NULL, NULL),
(633, 'Haripur', 94, 3, 'হরিপুর', 51, NULL, 'H616', NULL, NULL),
(634, 'Pirganj', 94, 3, 'পীরগঞ্জ', 82, NULL, 'P6252', NULL, NULL),
(635, 'Ranisankail', 94, 3, 'রানীশংকাইল', 86, NULL, 'R52524', NULL, NULL),
(636, 'Thakurgaon Sadar', 94, 3, 'ঠাকুরগাঁও সদর', 94, NULL, 'T2625236', NULL, NULL),
(638, 'Wari', 26, 3, 'ওয়ারী', NULL, NULL, 'W600', NULL, NULL),
(640, 'Sher-e-bangla Nagor ', 26, 3, 'শেরেই-বাংলা নগর', NULL, NULL, 'S61524526', NULL, NULL),
(644, 'Darusalam', 26, 3, 'দারুস সালাম', NULL, NULL, 'D6245', NULL, NULL),
(646, 'Osmani Nagar', 91, 3, 'ওসমানী নগর', NULL, NULL, 'O2526', NULL, NULL),
(650, 'Shibganj', 70, 3, 'শিবগঞ্জ', NULL, NULL, 'S1252', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `result` double(8,2) NOT NULL,
  `p_year` varchar(255) NOT NULL,
  `t_tile` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `t_cover` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Personal_ID` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `Group` varchar(255) NOT NULL,
  `I_Name` varchar(255) NOT NULL,
  `Board` varchar(255) NOT NULL,
  `Result` double(8,2) NOT NULL,
  `Passing_Year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `Personal_ID`, `Education`, `Group`, `I_Name`, `Board`, `Result`, `Passing_Year`, `created_at`, `updated_at`) VALUES
(1, '1', 'SSC', 'Science', 'Pabna', 'Pabna', 4.00, '2016', '2024-01-02 02:43:09', '2024-01-02 02:43:09'),
(2, '1', 'HSC', 'Science', 'Rajshahi', 'Rajshahi', 5.00, '2018', '2024-01-02 02:43:09', '2024-01-02 02:43:09'),
(3, '1', 'BSC', 'CSE', 'Dhaka', 'Dhaka', 3.20, '2023', '2024-01-02 02:43:09', '2024-01-02 02:43:09'),
(4, '2', 'B.SC', 'CSE', 'City', 'Dhaka', 3.20, '2016', '2024-01-02 05:53:36', '2024-01-02 05:53:36'),
(5, '2', 'HSC', 'Arts', 'City college', 'Dhaka', 2.50, '2014', '2024-01-02 05:53:36', '2024-01-02 05:53:36'),
(6, '2', 'SSC', 'Arts', 'DEE', 'Dhaka', 3.29, '2012', '2024-01-02 05:53:37', '2024-01-02 05:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_13_074719_create_user_forms_table', 1),
(7, '2023_12_20_054720_create_customers_table', 1),
(8, '2023_12_24_051849_create_personal_forms_table', 1),
(9, '2023_12_26_094153_create_education_table', 1),
(10, '2024_01_02_053118_create_country_state_city_tables', 1),
(11, '2024_01_02_082240_create_area__infos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_forms`
--

CREATE TABLE `personal_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `T_title` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `t_year` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_forms`
--

INSERT INTO `personal_forms` (`id`, `first_name`, `last_name`, `gender`, `religion`, `address`, `phone`, `T_title`, `country`, `topic`, `t_year`, `institute`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'Shima', 'Khan', 'Female', 'Christan', 'Mirpur', '01687452199', 'Front-end', 'Bangladesh', 'HTML, CSS', '2020', 'DIIT', '6 Months', '2024-01-02 02:43:09', '2024-01-02 02:43:09'),
(2, 'Arafat', 'rahman', 'Male', 'Islam', 'India', '01784596544', 'Web', 'Bangladesh', 'Laravel, PHP, HTML, CSS', '2014', 'NIT', '6 Months', '2024-01-02 05:53:36', '2024-01-02 05:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_forms`
--

CREATE TABLE `user_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `p_year` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_institute` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area__infos`
--
ALTER TABLE `area__infos`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_forms`
--
ALTER TABLE `personal_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_forms`
--
ALTER TABLE `user_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_forms_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area__infos`
--
ALTER TABLE `area__infos`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_forms`
--
ALTER TABLE `personal_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_forms`
--
ALTER TABLE `user_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
