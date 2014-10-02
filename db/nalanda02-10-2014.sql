-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2014 at 07:31 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nalanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE IF NOT EXISTS `alumnis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `college_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_of_passing` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stream` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `description`, `is_enabled`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '<p><br></p><h2>Infrastructure </h2><p><span style="font-family: Arial;"><span style="color: rgb(66, 66, 66);">This Institution have the following infrastructure:-<br><br>Total Land Area(in Sqfeet) - 87120(Sqfeet)<br><br>Built Up Area(in Sqfeet) - 19425(Sqfeet)</span><br><br><span style="color: rgb(66, 66, 66);">(A) Classrooms -04<br><br>(B) Multipurpose Hall -01<br><br>(C) Library Cum-Reading Room-01<br><br>(D) ICT Resource Center -01<br><br>(E) Psychology Resource Center-01<br><br>(F) Art and Craft Resource Center-01<br><br>(G) Health and Physical Education Resource Center-01<br><br>(H) Science and Mathematics Resource Center-01<br><br>(I) Principals Office -01<br><br>(J) Staff Room -01<br><br>(K) Administrative Office -01<br><br>(L) Visitors Room -01<br><br>(M) Girls Common Room -01<br><br>(N) Seminar Room -01<br><br>(O) Canteen -01<br><br>(P) Separate Toilet facility for Boys and girls-02<br><br>(Q) Parking Space-30(Meter)<br><br>(R) Store Room -01<br><br>(S) Multipurpose Playfield.<br><br>(T) Open space for Additional Accommodation.</span></span></p>', 1, '2014-09-30 04:15:49', '2014-09-29 22:45:49'),
(2, 'Library', '<span style="background-color: inherit;"><span style="color: rgb(231, 99, 99);">LIBRARY:-</span></span><br>A library is a collection of information, sources, resources, books, and services, designed to encourage intellectual growth and artistic expression.. It is organized for use and maintained by an institution.<br><br>Libraries have materials arranged in a specified order according to a library classification system, so that items may be located quickly and collections may be browsed efficiently. Some libraries have additional galleries beyond the public ones, where reference materials are stored.<br><br><span style="background-color: inherit;"><span style="color: rgb(231, 99, 99);">LIBRARY SERVICES:-</span></span><br>The Library offers an array of services to help students and faculty find and use educational resources regardless of location or format. Our goal is to teach users information seeking skills and to provide access to information content.<br><br><span style="background-color: inherit;"><span style="color: rgb(231, 99, 99);">LIBRARY TIMING:-</span></span><br>8:00 am to 5:00 pm<br><br><span style="background-color: inherit;"><span style="color: rgb(231, 99, 99);">LIBRARY RULES:-</span></span><br>1.Every person who enters the library will sign the visitor register.<br>2.Use of library will strictly reserved for reader possessing a library card.<br>3.In case of of lost of books/library card , it should be reported immediately to the librarian.<br>4.switch off mobile phones or keep n silent mode in library.<br>', 1, '2014-09-22 04:15:12', '2014-09-21 22:45:12'),
(3, 'Computer Lab', '<p><span style="font-family: Arial;"><span style="color: rgb(231, 99, 99);">COMPUTER LAB:-</span></span></p><p><span style="font-family: Arial;">A computer lab,is typically a room which contains many networked computers for student use.These labs are used for scheduled lab work for courses and also support for students, faculty and staff.<br><br><span style="color: rgb(231, 99, 99);">COMPUTER LAB RULES:-</span></span></p><p><span style="font-family: Arial;">1.All computer users (staff, students, and others) are expected to be responsible for their own behaviour on the computer system. Users are reminded that their actions can represent the entire college community. This includes materials they choose to access, language they use, ideas they express, and other actions which they take.<br>2.If you are unsure of what to do, for instance in the case of an error message, a web site offer, a strange e-mail, a hardware malfunction, etc., ask a lab supervisor. It is better to wait and ask, than to take an action which will endanger yourself, the computer, or the network.<br>3.No Noise,So that everyone can concentrate.<br>4.Please do not let your phone ring, have conversations, or listen to music without headphones in the lab. <br>5.Students are not allowed in the open access lab when they have scheduled classes.<br><br><span style="color: rgb(231, 99, 99);">AVAILABILITY:-</span></span></p><p><span style="font-family: Arial;">1.Support for labs is 9 a.m. - 5 p.m. Monday to Friday, excluding University holidays. 2.Alternate arrangements can be requested for special functions/events.</span></p>', 1, '2014-09-22 04:16:58', '2014-09-21 22:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `programme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `seat` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `admission_norms` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eligibility` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `programme`, `branch`, `seat`, `admission_norms`, `eligibility`, `is_enabled`, `created_at`, `updated_at`) VALUES
(1, 'B.Com', 'Computer', '60', 'Accordding to College Merit basis', 'Higher Secondary Pass,With Math''s,Bio and Commerce Subject', 1, '2014-09-22 22:51:22', '2014-09-22 22:51:22'),
(2, 'MCA', 'IT', '60', 'IGNOU', 'BSc, BCom.', 1, '2014-09-29 21:38:36', '2014-09-29 21:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `is_enabled`, `created_at`, `updated_at`) VALUES
(1, 'Rangoli Competition on 11 November 2011', '<p><span style="color: rgb(162, 97, 9); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">Rangoli Competition on 11 November 2011</span></p>', 1, '2014-09-22 23:00:50', '2014-09-22 23:00:50'),
(2, 'sdf', '<p>sdfsd<br></p>', 1, '2014-09-25 13:22:16', '2014-09-25 13:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE IF NOT EXISTS `gallaries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` tinyint(1) NOT NULL COMMENT '1=> portfolio, 2=>culture, 3=> sports',
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `link_category_id`, `title`, `link`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Google', 'https://www.google.co.in', 1, '2014-09-21 10:06:14', '2014-09-21 10:06:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `link_categories`
--

CREATE TABLE IF NOT EXISTS `link_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `link_categories`
--

INSERT INTO `link_categories` (`id`, `title`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Educational ', 1, '2014-09-21 10:00:33', '2014-09-21 10:00:33', NULL),
(3, 'Others', 1, '2014-09-21 10:00:42', '2014-09-21 10:00:42', NULL),
(4, 'fsdfsdf', 1, '2014-09-21 10:04:07', '2014-09-21 10:04:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `profile_picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `designation` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>principle, 2=> Director',
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `profile_picture`, `name`, `designation`, `message`, `is_enabled`, `created_at`, `updated_at`) VALUES
(1, 'RTfBtz_mam.jpg', 'Dr. Sandhya khare', 1, '&nbsp;&nbsp;&nbsp; I am extremely Happy to Welcome you to <span style="font-weight: bold;">Nalanda Science and Commerce College Katni</span> Madhya Pradesh India.<br>&nbsp;&nbsp;&nbsp; Its Started in 2008-09 with an objective to provide quality education and excellence In ever changing field of technical &amp; Professional education.I expect my students to be sincere, responsible and committed to their work.<br>', 1, '2014-09-21 17:13:21', '2014-09-21 11:43:21'),
(2, 'N5xc9z_sir.jpg', 'Hansmukh Bhai Patel', 1, '<span style="background-color: inherit;"><span style="font-family: Arial;"><span style="color: rgb(66, 66, 66);"><span style="font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;">"The search of an ideal college which provides a holific environment for your wards ends here.Nalanda college is situated amidst the lap of nature ,is a mentor institution with a vision in excellence in all arenas established in june 2008 is providing to be a trendsetter in all aspects.The campus is neat well maintained by the dedicated college staff.The thrustof the institution is to groom and project excellence and brilliance through the professor and thought the .The well qualified and committed Professor are not only good at imparting knowledge to the students but are also quite kind and considerate.They are very caring and pay individual attention to the student".</span></span></span></span><p style="font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px;"><span style="background-color: inherit;"><span style="font-family: Arial;"><span style="color: rgb(66, 66, 66);">"We remain indebted to all well wishers parents and readers. We hope to receive your continued support and cooperation."</span></span></span></p>', 1, '2014-09-28 05:00:44', '2014-09-27 23:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `recent_news`
--

CREATE TABLE IF NOT EXISTS `recent_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `recent_news`
--

INSERT INTO `recent_news` (`id`, `title`, `description`, `is_enabled`, `created_at`, `updated_at`) VALUES
(1, 'test news', 'Test News<br><p><br></p>', 1, '2014-09-22 23:08:50', '2014-09-22 23:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `profile_picture` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `joining_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `department` tinyint(1) DEFAULT '3' COMMENT '1=> account, 2=>BCA, 3=> Bcom, 4=> BEd',
  `contact_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `profile_picture`, `first_name`, `last_name`, `birth_date`, `joining_date`, `department`, `contact_no`, `email`, `address`, `is_enabled`, `created_at`, `updated_at`) VALUES
(1, 'NGRf0i_mam.jpg', 'Shandya', 'Khare', '1980-09-02 18:30:00', '2010-08-31 18:30:00', 2, '9300726905', 'bvikasvburman@gmail.com', 'ace ', 1, '2014-09-21 23:19:15', '2014-09-21 23:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `is_enabled`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'admin', '$2y$10$wD1/5L1eWUvjqZ7bcG/n/OgvLk8114EC8tXGGrjn8pSvnf/m8TLKa', 'bvikasvburman@gmail.com', 1, '2014-09-21 15:16:11', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
