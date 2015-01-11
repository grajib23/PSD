-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2015 at 10:41 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infsys_pub`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_qualifications`
--

CREATE TABLE IF NOT EXISTS `additional_qualifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qua_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `additional_qualification_historys`
--

CREATE TABLE IF NOT EXISTS `additional_qualification_historys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addi_qua_id` int(11) NOT NULL,
  `history_desc` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `history_date` date NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cadres`
--

CREATE TABLE IF NOT EXISTS `cadres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cardre_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cadres`
--

INSERT INTO `cadres` (`id`, `cardre_title`, `create_ip`, `update_ip`, `create_by_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'cadre_title', '', '', 0, '2015-01-04 15:19:13', '2015-01-04 15:19:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `child_infos`
--

CREATE TABLE IF NOT EXISTS `child_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upzilla_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `division_id` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `phone_num` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `address_extra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `counrty_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `counrty_name`, `create_ip`, `update_ip`, `create_by_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'bangladesh', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE IF NOT EXISTS `degrees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discipline_actions`
--

CREATE TABLE IF NOT EXISTS `discipline_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `dis_cat_id` int(11) NOT NULL,
  `description` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `judgment` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `final_judgment` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discipline_catagories`
--

CREATE TABLE IF NOT EXISTS `discipline_catagories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dis_cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discipline_status`
--

CREATE TABLE IF NOT EXISTS `discipline_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dis_status_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(20) NOT NULL,
  `division_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_ip` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_ip` varchar(255) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_division_id` (`division_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `division_id`, `created_at`, `created_ip`, `created_by`, `updated_at`, `updated_ip`, `updated_by`) VALUES
(2, 'Barguna', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Barisal', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Bhola', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Jhalokati', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Patuakhali', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Pirojpur', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Bandarban', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Brahmanbaria', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Chandpur', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Chittagong', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Comilla', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Feni', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Khagrachhari', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Lakshmipur', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Noakhali', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Rangamati', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Dhaka', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Faridpur', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Gazipur', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Gopalganj', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Jamalpur', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Kishorganj', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Madaripur', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Manikganj', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Munshiganj', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Mymensingh', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Narayanganj', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Netrokona', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Rajbari', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Shariatpur', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Sherpur', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Tangail', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Narsingdi', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Bagerhat', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Chuadanga', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Jessore', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Jhenaida', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Khulna', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Kushtia', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Magura', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Meherpur', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Narail', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Satkhira', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Bogra', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Joypurhat', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Naogaon', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Natore', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Nawabganj', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Pabna', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Rajshahi', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Sirajganj', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Dinajpur', 6, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Gaibandha', 6, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Kurigram', 6, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Lalmonirhat', 6, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Nilphamari', 6, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'Panchagarh', 6, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Rangpur', 6, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Thakurgaon', 6, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Habiganj', 7, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Moulvibazar', 7, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Sunamganj', 7, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Sylhet', 7, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `division_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_name` varchar(20) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_ip` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_ip` varchar(255) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`division_id`),
  KEY `fk_country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`, `country_id`, `created_at`, `created_ip`, `created_by`, `updated_ip`, `updated_by`) VALUES
(2, 'BARISAL', 1, NULL, NULL, NULL, NULL, NULL),
(3, 'CHITTAGONG', 1, NULL, NULL, NULL, NULL, NULL),
(4, 'DHAKA', 1, NULL, NULL, NULL, NULL, NULL),
(5, 'KHULNA', 1, NULL, NULL, NULL, NULL, NULL),
(6, 'RANGPUR', 1, NULL, NULL, NULL, NULL, NULL),
(7, 'SYLET', 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `educational_qualifications`
--

CREATE TABLE IF NOT EXISTS `educational_qualifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution_id` int(11) NOT NULL,
  `institution_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `degree_id` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `degree_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result_id` int(11) NOT NULL,
  `passing_year` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `gpa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distinction` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grounds`
--

CREATE TABLE IF NOT EXISTS `grounds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ground_name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `honours_and_awards`
--

CREATE TABLE IF NOT EXISTS `honours_and_awards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_of_awards` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `instituations`
--

CREATE TABLE IF NOT EXISTS `instituations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `institution_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_id` int(11) NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `languages_infos`
--

CREATE TABLE IF NOT EXISTS `languages_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `read` int(11) NOT NULL,
  `write` int(11) NOT NULL,
  `speak` int(11) NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `leave_histories`
--

CREATE TABLE IF NOT EXISTS `leave_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `leave_type_id` int(11) NOT NULL,
  `leave_form_date` date NOT NULL,
  `leave_to_date` date NOT NULL,
  `govt_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE IF NOT EXISTS `leave_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `leave_duration_days` int(11) NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_09_17_145004_create_tokens_table', 1),
('2014_12_30_184957_create_users', 1),
('2014_12_30_193135_create_users_personal_infos', 1),
('2015_01_02_102633_create_address', 1),
('2015_01_02_103651_create_additional_qualification', 1),
('2015_01_02_104055_create_additional_qualification_history', 1),
('2015_01_02_104920_create_cadre', 1),
('2015_01_02_105405_children_info', 1),
('2015_01_02_111045_create_countries', 1),
('2015_01_02_111527_create_courses', 1),
('2015_01_02_111714_create_degrees', 1),
('2015_01_02_111905_create_dicipline_actions', 1),
('2015_01_02_112359_create_discipline_catagories', 1),
('2015_01_02_112613_create_dicipline_status', 1),
('2015_01_02_112917_create_educational_qualifications', 1),
('2015_01_02_113948_create_grounds', 1),
('2015_01_02_114203_create_honours_and_awards', 1),
('2015_01_02_114749_create_institutions', 1),
('2015_01_02_115231_create_languages', 1),
('2015_01_02_115519_create_language_infos', 1),
('2015_01_02_120328_create_leave_histories', 1),
('2015_01_02_122246_create_leave_types', 1),
('2015_01_02_123225_create_national_senioritys', 1),
('2015_01_02_123524_create_organizations', 1),
('2015_01_02_123826_create_pay_scale', 1),
('2015_01_04_080219_create_positions', 1),
('2015_01_04_080931_create_posts', 1),
('2015_01_04_081517_create_posting_records', 1),
('2015_01_04_083033_create_posting_types', 1),
('2015_01_04_083335_create_principle_subjects', 1),
('2015_01_04_083750_create_promotion_particulars', 1),
('2015_01_04_084405_create_promotion_types', 1),
('2015_01_04_084642_create_publications', 1),
('2015_01_04_085313_create_publication_types', 1),
('2015_01_04_090029_create_purposes', 1),
('2015_01_04_090555_create_ranks', 1),
('2015_01_04_090741_create_results', 1),
('2015_01_04_090935_create_service_histories', 1),
('2015_01_04_101417_create_spouse_infos', 1),
('2015_01_04_102225_create_tarining_histories', 1),
('2015_01_04_103418_create_travel_histories', 1),
('2015_01_04_103848_create_service_types', 1);

-- --------------------------------------------------------

--
-- Table structure for table `national_seniorities`
--

CREATE TABLE IF NOT EXISTS `national_seniorities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `senior_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `organizatios`
--

CREATE TABLE IF NOT EXISTS `organizatios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pay_scales`
--

CREATE TABLE IF NOT EXISTS `pay_scales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scale_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `perposes`
--

CREATE TABLE IF NOT EXISTS `perposes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `perpose_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posting_records`
--

CREATE TABLE IF NOT EXISTS `posting_records` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `posting_type_id` int(11) NOT NULL,
  `pay_scale_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `leave_date` date NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posting_types`
--

CREATE TABLE IF NOT EXISTS `posting_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posting_types`
--

INSERT INTO `posting_types` (`id`, `type_name`, `create_ip`, `update_ip`, `create_by_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Emergency', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'force posting', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `principle_subjects`
--

CREATE TABLE IF NOT EXISTS `principle_subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `promotion_particulars`
--

CREATE TABLE IF NOT EXISTS `promotion_particulars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank_id` int(11) NOT NULL,
  `promotion_type_id` int(11) NOT NULL,
  `promotion_start` date NOT NULL,
  `promotion_end` date NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `promotion_types`
--

CREATE TABLE IF NOT EXISTS `promotion_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `promotion_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pub_type_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `govt_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name_of_publication` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pub_date` date NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publication_types`
--

CREATE TABLE IF NOT EXISTS `publication_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pub_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE IF NOT EXISTS `ranks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `rank_name`, `create_ip`, `update_ip`, `create_by_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Director General', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'Director', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Joint Director (JD)', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'Deputy Director (DD)', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'Deputy Project Director (DPD)', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(6, 'Assistant Director (AD)', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 'Upazila Rural Dev.Officer (URDO)', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(8, 'Manager', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(9, 'Librarian', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(10, 'Artist', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(11, 'Assistant Rural DevELOMENT Officer (ARDO)', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(12, 'Research Officer', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(13, 'Administrative-cum-Accounts Officer', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(14, 'Research Assistant', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(15, 'Sub Assistant Engineer', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(16, 'Cameraman', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(17, 'Accountant', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(18, 'Assistant Artist', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(19, 'Head Trainer', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(20, 'Care Taker', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(21, 'UDA/Office Assistant', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(22, 'Auditor', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(23, 'Stenographer/PA', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(24, 'Research Investigator', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(25, 'Statistical Assistant', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(26, 'Accounts Asstt.', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(27, 'Cashier', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(28, 'Library Asstt.', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(29, 'Hostel Supper', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(30, 'Organiser', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(31, 'Steno-Typist (Com. Op.)', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(32, 'Offset Printing Operator', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(33, 'Sound Technician', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(34, 'Draftsman', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(35, 'Trainer', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(36, 'Proof Reader', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(37, 'Computer Operator (LD)', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(38, 'Data Entry Operator', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(39, 'Store Keeper', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(40, 'Cash Sarker', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(41, 'Telephone Operator', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(42, 'Electrician', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(43, 'Screen Printing Asstt.', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(44, 'Cafeteria Manager', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(45, 'Pump Operator', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(46, 'Driver', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(47, 'Dark Room Assistant', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(48, 'Duplicating Machine Operator', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(49, 'Daftari', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(50, 'Head Cook', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(51, 'MLSS', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(52, 'Guard/Night Guard', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(53, 'Hostel Attendant', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(54, 'Library Attendant', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(55, 'Assistant Cook', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(56, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(57, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(58, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `result_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service_histories`
--

CREATE TABLE IF NOT EXISTS `service_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name_of_emp` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `address_id` int(11) NOT NULL,
  `type_of_service_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `cadre_id` int(11) NOT NULL,
  `national_seniority_id` int(11) NOT NULL,
  `date_of_govt_service` date NOT NULL,
  `date_of_gazetted` date NOT NULL,
  `encaderment_date` date NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE IF NOT EXISTS `service_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ser_types_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `spouse_infos`
--

CREATE TABLE IF NOT EXISTS `spouse_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_in_bangla` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `name_in_english` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  `occupation` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `api_token` varchar(96) COLLATE utf8_unicode_ci NOT NULL,
  `expires_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `client` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `training_histories`
--

CREATE TABLE IF NOT EXISTS `training_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `govt_id` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `institution_id` int(11) NOT NULL,
  `period_form` date NOT NULL,
  `period_to` date NOT NULL,
  `grade` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL,
  `training_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `travel_histories`
--

CREATE TABLE IF NOT EXISTS `travel_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `govt_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `purpose_id` int(11) NOT NULL,
  `period_form` date NOT NULL,
  `period_to` date NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `upzilla`
--

CREATE TABLE IF NOT EXISTS `upzilla` (
  `upzilla_id` int(11) NOT NULL AUTO_INCREMENT,
  `upzilla_name` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_ip` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`upzilla_id`),
  KEY `fk_district_id` (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=492 ;

--
-- Dumping data for table `upzilla`
--

INSERT INTO `upzilla` (`upzilla_id`, `upzilla_name`, `district_id`, `created_at`, `created_ip`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 'Amtali Upazila\r', 2, NULL, NULL, NULL, NULL, NULL),
(3, 'Bamna Upazila\r', 2, NULL, NULL, NULL, NULL, NULL),
(4, 'Barguna Sadar', 2, NULL, NULL, NULL, NULL, NULL),
(5, 'Betagi Upazila\r', 2, NULL, NULL, NULL, NULL, NULL),
(6, 'Patharghata Upazila\r', 2, NULL, NULL, NULL, NULL, NULL),
(7, 'Taltoli Upazila\r', 2, NULL, NULL, NULL, NULL, NULL),
(8, 'Agailjhara Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(9, 'Babuganj Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(10, 'Bakerganj Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(11, 'Banaripara Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(12, 'Gaurnadi Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(13, 'Hizla Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(14, 'Barisal Sadar', 3, NULL, NULL, NULL, NULL, NULL),
(15, 'Mehendiganj Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(16, 'Muladi Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(17, 'Wazirpur Upazila\r', 3, NULL, NULL, NULL, NULL, NULL),
(18, 'Bhola Sadar', 4, NULL, NULL, NULL, NULL, NULL),
(19, 'Burhanuddin Upazila\r', 4, NULL, NULL, NULL, NULL, NULL),
(20, 'Char Fasson', 4, NULL, NULL, NULL, NULL, NULL),
(21, 'Daulatkhan Upazila\r', 4, NULL, NULL, NULL, NULL, NULL),
(22, 'Lalmohan Upazila\r', 4, NULL, NULL, NULL, NULL, NULL),
(23, 'Manpura Upazila\r', 4, NULL, NULL, NULL, NULL, NULL),
(24, 'Tazumuddin Upazila\r', 4, NULL, NULL, NULL, NULL, NULL),
(25, 'Jhalokati Sadar', 5, NULL, NULL, NULL, NULL, NULL),
(26, 'Kathalia Upazila\r', 5, NULL, NULL, NULL, NULL, NULL),
(27, 'Nalchity Upazila\r', 5, NULL, NULL, NULL, NULL, NULL),
(28, 'Rajapur Upazila\r', 5, NULL, NULL, NULL, NULL, NULL),
(29, 'Bauphal Upazila\r', 6, NULL, NULL, NULL, NULL, NULL),
(30, 'Dashmina Upazila\r', 6, NULL, NULL, NULL, NULL, NULL),
(31, 'Galachipa Upazila\r', 6, NULL, NULL, NULL, NULL, NULL),
(32, 'Kalapara Upazila\r', 6, NULL, NULL, NULL, NULL, NULL),
(33, 'Mirzaganj Upazila\r', 6, NULL, NULL, NULL, NULL, NULL),
(34, 'Patuakhali Sadar', 6, NULL, NULL, NULL, NULL, NULL),
(35, 'Rangabali Upazila\r', 6, NULL, NULL, NULL, NULL, NULL),
(36, 'Dumki Upazila\r', 6, NULL, NULL, NULL, NULL, NULL),
(37, 'Bhandaria Upazila\r', 7, NULL, NULL, NULL, NULL, NULL),
(38, 'Kawkhali Upazila\r', 7, NULL, NULL, NULL, NULL, NULL),
(39, 'Mathbaria Upazila\r', 7, NULL, NULL, NULL, NULL, NULL),
(40, 'Nazirpur Upazila\r', 7, NULL, NULL, NULL, NULL, NULL),
(41, 'Pirojpur Sadar', 7, NULL, NULL, NULL, NULL, NULL),
(42, 'Nesarabad (Swarupkati)', 7, NULL, NULL, NULL, NULL, NULL),
(43, 'Zianagor Upazila\r', 7, NULL, NULL, NULL, NULL, NULL),
(44, 'Ali Kadam', 8, NULL, NULL, NULL, NULL, NULL),
(45, 'Bandarban Sadar', 8, NULL, NULL, NULL, NULL, NULL),
(46, 'Lama Upazila\r', 8, NULL, NULL, NULL, NULL, NULL),
(47, 'Naikhongchhari Upazila\r', 8, NULL, NULL, NULL, NULL, NULL),
(48, 'Rowangchhari Upazila\r', 8, NULL, NULL, NULL, NULL, NULL),
(49, 'Ruma Upazila\r', 8, NULL, NULL, NULL, NULL, NULL),
(50, 'Thanchi Upazila\r', 8, NULL, NULL, NULL, NULL, NULL),
(51, 'Akhaura Upazila\r', 9, NULL, NULL, NULL, NULL, NULL),
(52, 'Bancharampur Upazila\r', 9, NULL, NULL, NULL, NULL, NULL),
(53, 'Brahmanbaria Sadar', 9, NULL, NULL, NULL, NULL, NULL),
(54, 'Kasba Upazila\r', 9, NULL, NULL, NULL, NULL, NULL),
(55, 'Nabinagar Upazila\r', 9, NULL, NULL, NULL, NULL, NULL),
(56, 'Nasirnagar Upazila\r', 9, NULL, NULL, NULL, NULL, NULL),
(57, 'Sarail Upazila\r', 9, NULL, NULL, NULL, NULL, NULL),
(58, 'Ashuganj Upazila\r', 9, NULL, NULL, NULL, NULL, NULL),
(59, 'Bijoynagar Upazila\r', 9, NULL, NULL, NULL, NULL, NULL),
(60, 'Chandpur Sadar', 10, NULL, NULL, NULL, NULL, NULL),
(61, 'Faridganj Upazila\r', 10, NULL, NULL, NULL, NULL, NULL),
(62, 'Haimchar Upazila\r', 10, NULL, NULL, NULL, NULL, NULL),
(63, 'Haziganj Upazila\r', 10, NULL, NULL, NULL, NULL, NULL),
(64, 'Kachua Upazila\r', 10, NULL, NULL, NULL, NULL, NULL),
(65, 'Matlab Dakshin', 10, NULL, NULL, NULL, NULL, NULL),
(66, 'Matlab Uttar', 10, NULL, NULL, NULL, NULL, NULL),
(67, 'Shahrasti Upazila\r', 10, NULL, NULL, NULL, NULL, NULL),
(68, 'Anwara Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(69, 'Banshkhali Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(70, 'Boalkhali Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(71, 'Chandanaish Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(72, 'Fatikchhari Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(73, 'Hathazari Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(74, 'Lohagara Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(75, 'Mirsharai Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(76, 'Patiya Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(77, 'Rangunia Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(78, 'Raozan Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(79, 'Sandwip Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(80, 'Satkania Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(81, 'Sitakunda Upazila\r', 11, NULL, NULL, NULL, NULL, NULL),
(82, 'Barura Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(83, 'Brahmanpara Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(84, 'Burichang Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(85, 'Chandina Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(86, 'Chauddagram Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(87, 'Daudkandi Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(88, 'Debidwar Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(89, 'Homna Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(90, 'Laksam Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(91, 'Muradnagar Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(92, 'Nangalkot Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(93, 'Comilla Sadar', 12, NULL, NULL, NULL, NULL, NULL),
(94, 'Meghna Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(95, 'Titas Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(96, 'Monohargonj Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(97, 'Sadar South', 12, NULL, NULL, NULL, NULL, NULL),
(98, 'Chakaria Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(99, 'Kutubdia Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(100, 'Maheshkhali Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(101, 'Ramu Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(102, 'Teknaf Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(103, 'Ukhia Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(104, 'Pekua Upazila\r', 12, NULL, NULL, NULL, NULL, NULL),
(105, 'Chhagalnaiya Upazila\r', 13, NULL, NULL, NULL, NULL, NULL),
(106, 'Daganbhuiyan Upazila\r', 13, NULL, NULL, NULL, NULL, NULL),
(107, 'Feni Sadar', 13, NULL, NULL, NULL, NULL, NULL),
(108, 'Parshuram Upazila\r', 13, NULL, NULL, NULL, NULL, NULL),
(109, 'Sonagazi Upazila\r', 13, NULL, NULL, NULL, NULL, NULL),
(110, 'Fulgazi Upazila\r', 13, NULL, NULL, NULL, NULL, NULL),
(111, 'Dighinala Upazila\r', 14, NULL, NULL, NULL, NULL, NULL),
(112, 'Khagrachhari Upazila\r', 14, NULL, NULL, NULL, NULL, NULL),
(113, 'Lakshmichhari Upazila\r', 14, NULL, NULL, NULL, NULL, NULL),
(114, 'Mahalchhari Upazila\r', 14, NULL, NULL, NULL, NULL, NULL),
(115, 'Manikchhari Upazila\r', 14, NULL, NULL, NULL, NULL, NULL),
(116, 'Matiranga Upazila\r', 14, NULL, NULL, NULL, NULL, NULL),
(117, 'Panchhari Upazila\r', 14, NULL, NULL, NULL, NULL, NULL),
(118, 'Ramgarh Upazila\r', 14, NULL, NULL, NULL, NULL, NULL),
(119, 'Lakshmipur Sadar', 15, NULL, NULL, NULL, NULL, NULL),
(120, 'Raipur Upazila\r', 15, NULL, NULL, NULL, NULL, NULL),
(121, 'Ramganj Upazila\r', 15, NULL, NULL, NULL, NULL, NULL),
(122, 'Ramgati Upazila\r', 15, NULL, NULL, NULL, NULL, NULL),
(123, 'Kamalnagar Upazila\r', 15, NULL, NULL, NULL, NULL, NULL),
(124, 'Begumganj Upazila\r', 16, NULL, NULL, NULL, NULL, NULL),
(125, 'Noakhali Sadar', 16, NULL, NULL, NULL, NULL, NULL),
(126, 'Chatkhil Upazila\r', 16, NULL, NULL, NULL, NULL, NULL),
(127, 'Companiganj Upazila\r', 16, NULL, NULL, NULL, NULL, NULL),
(128, 'Hatiya Upazila\r', 16, NULL, NULL, NULL, NULL, NULL),
(129, 'Senbagh Upazila\r', 16, NULL, NULL, NULL, NULL, NULL),
(130, 'Sonaimuri Upazila\r', 16, NULL, NULL, NULL, NULL, NULL),
(131, 'Subarnachar Upazila\r', 16, NULL, NULL, NULL, NULL, NULL),
(132, 'Kabirhat Upazila\r', 16, NULL, NULL, NULL, NULL, NULL),
(133, 'Bagaichhari Upazila\r', 17, NULL, NULL, NULL, NULL, NULL),
(134, 'Barkal Upazila\r', 17, NULL, NULL, NULL, NULL, NULL),
(135, 'Kawkhali (Betbunia)', 17, NULL, NULL, NULL, NULL, NULL),
(136, 'Belaichhari Upazila\r', 17, NULL, NULL, NULL, NULL, NULL),
(137, 'Kaptai Upazila\r', 17, NULL, NULL, NULL, NULL, NULL),
(138, 'Juraichhari Upazila\r', 17, NULL, NULL, NULL, NULL, NULL),
(139, 'Langadu Upazila\r', 17, NULL, NULL, NULL, NULL, NULL),
(140, 'Naniyachar Upazila\r', 17, NULL, NULL, NULL, NULL, NULL),
(141, 'Rajasthali Upazila\r', 17, NULL, NULL, NULL, NULL, NULL),
(142, 'Rangamati Sadar', 17, NULL, NULL, NULL, NULL, NULL),
(143, 'Dhamrai Upazila\r', 18, NULL, NULL, NULL, NULL, NULL),
(144, 'Dohar Upazila\r', 18, NULL, NULL, NULL, NULL, NULL),
(145, 'Keraniganj Upazila\r', 18, NULL, NULL, NULL, NULL, NULL),
(146, 'Nawabganj Upazila\r', 18, NULL, NULL, NULL, NULL, NULL),
(147, 'Savar Upazila\r', 18, NULL, NULL, NULL, NULL, NULL),
(148, 'Alfadanga Upazila\r', 19, NULL, NULL, NULL, NULL, NULL),
(149, 'Bhanga Upazila\r', 19, NULL, NULL, NULL, NULL, NULL),
(150, 'Boalmari Upazila\r', 19, NULL, NULL, NULL, NULL, NULL),
(151, 'Charbhadrasan Upazila\r', 19, NULL, NULL, NULL, NULL, NULL),
(152, 'Faridpur Sadar', 19, NULL, NULL, NULL, NULL, NULL),
(153, 'Madhukhali Upazila\r', 19, NULL, NULL, NULL, NULL, NULL),
(154, 'Nagarkanda Upazila\r', 19, NULL, NULL, NULL, NULL, NULL),
(155, 'Sadarpur Upazila\r', 19, NULL, NULL, NULL, NULL, NULL),
(156, 'Gazipur Sadar', 20, NULL, NULL, NULL, NULL, NULL),
(157, 'Kaliakair Upazila\r', 20, NULL, NULL, NULL, NULL, NULL),
(158, 'Kaliganj Upazila\r', 20, NULL, NULL, NULL, NULL, NULL),
(159, 'Kapasia Upazila\r', 20, NULL, NULL, NULL, NULL, NULL),
(160, 'Sreepur Upazila\r', 20, NULL, NULL, NULL, NULL, NULL),
(161, 'Gopalganj Sadar', 21, NULL, NULL, NULL, NULL, NULL),
(162, 'Kashiani Upazila\r', 21, NULL, NULL, NULL, NULL, NULL),
(163, 'Kotalipara Upazila\r', 21, NULL, NULL, NULL, NULL, NULL),
(164, 'Muksudpur Upazila\r', 21, NULL, NULL, NULL, NULL, NULL),
(165, 'Tungipara Upazila\r', 21, NULL, NULL, NULL, NULL, NULL),
(166, 'Baksiganj Upazila\r', 22, NULL, NULL, NULL, NULL, NULL),
(167, 'Dewanganj Upazila\r', 22, NULL, NULL, NULL, NULL, NULL),
(168, 'Islampur Upazila\r', 22, NULL, NULL, NULL, NULL, NULL),
(169, 'Jamalpur Sadar', 22, NULL, NULL, NULL, NULL, NULL),
(170, 'Madarganj Upazila\r', 22, NULL, NULL, NULL, NULL, NULL),
(171, 'Melandaha Upazila\r', 22, NULL, NULL, NULL, NULL, NULL),
(172, 'Sarishabari Upazila\r', 22, NULL, NULL, NULL, NULL, NULL),
(173, 'Astagram Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(174, 'Bajitpur Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(175, 'Bhairab Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(176, 'Hossainpur Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(177, 'Itna Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(178, 'Karimganj Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(179, 'Katiadi Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(180, 'Kishoreganj Sadar', 23, NULL, NULL, NULL, NULL, NULL),
(181, 'Kuliarchar Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(182, 'Mithamain Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(183, 'Nikli Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(184, 'Pakundia Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(185, 'Tarail Upazila\r', 23, NULL, NULL, NULL, NULL, NULL),
(186, 'Rajoir Upazila\r', 24, NULL, NULL, NULL, NULL, NULL),
(187, 'Madaripur Sadar', 24, NULL, NULL, NULL, NULL, NULL),
(188, 'Kalkini Upazila\r', 24, NULL, NULL, NULL, NULL, NULL),
(189, 'Shibchar Upazila\r', 24, NULL, NULL, NULL, NULL, NULL),
(190, 'Daulatpur Upazila\r', 25, NULL, NULL, NULL, NULL, NULL),
(191, 'Ghior Upazila\r', 25, NULL, NULL, NULL, NULL, NULL),
(192, 'Harirampur Upazila\r', 25, NULL, NULL, NULL, NULL, NULL),
(193, 'Manikgonj Sadar', 25, NULL, NULL, NULL, NULL, NULL),
(194, 'Saturia Upazila\r', 25, NULL, NULL, NULL, NULL, NULL),
(195, 'Shivalaya Upazila\r', 25, NULL, NULL, NULL, NULL, NULL),
(196, 'Singair Upazila\r', 25, NULL, NULL, NULL, NULL, NULL),
(197, 'Gazaria Upazila\r', 26, NULL, NULL, NULL, NULL, NULL),
(198, 'Lohajang Upazila\r', 26, NULL, NULL, NULL, NULL, NULL),
(199, 'Munshiganj Sadar', 26, NULL, NULL, NULL, NULL, NULL),
(200, 'Sirajdikhan Upazila\r', 26, NULL, NULL, NULL, NULL, NULL),
(201, 'Sreenagar Upazila\r', 26, NULL, NULL, NULL, NULL, NULL),
(202, 'Tongibari Upazila\r', 26, NULL, NULL, NULL, NULL, NULL),
(203, 'Bhaluka Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(204, 'Dhobaura Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(205, 'Fulbaria Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(206, 'Gaffargaon Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(207, 'Gauripur Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(208, 'Haluaghat Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(209, 'Ishwarganj Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(210, 'Mymensingh Sadar', 27, NULL, NULL, NULL, NULL, NULL),
(211, 'Muktagachha Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(212, 'Nandail Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(213, 'Phulpur Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(214, 'Trishal Upazila\r', 27, NULL, NULL, NULL, NULL, NULL),
(215, 'Tara Khanda', 27, NULL, NULL, NULL, NULL, NULL),
(216, 'Araihazar Upazila\r', 28, NULL, NULL, NULL, NULL, NULL),
(217, 'Bandar Upazila\r', 28, NULL, NULL, NULL, NULL, NULL),
(218, 'Narayanganj Sadar', 28, NULL, NULL, NULL, NULL, NULL),
(219, 'Rupganj Upazila\r', 28, NULL, NULL, NULL, NULL, NULL),
(220, 'Sonargaon Upazila\r', 28, NULL, NULL, NULL, NULL, NULL),
(221, 'Fatullah Upazila\r', 28, NULL, NULL, NULL, NULL, NULL),
(222, 'Siddhirganj Upazila\r', 28, NULL, NULL, NULL, NULL, NULL),
(223, 'Atpara Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(224, 'Barhatta Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(225, 'Durgapur Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(226, 'Khaliajuri Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(227, 'Kalmakanda Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(228, 'Kendua Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(229, 'Madan Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(230, 'Mohanganj Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(231, 'Netrokona Sadar', 29, NULL, NULL, NULL, NULL, NULL),
(232, 'Purbadhala Upazila\r', 29, NULL, NULL, NULL, NULL, NULL),
(233, 'Baliakandi Upazila\r', 30, NULL, NULL, NULL, NULL, NULL),
(234, 'Goalandaghat Upazila\r', 30, NULL, NULL, NULL, NULL, NULL),
(235, 'Pangsha Upazila\r', 30, NULL, NULL, NULL, NULL, NULL),
(236, 'Rajbari Sadar', 30, NULL, NULL, NULL, NULL, NULL),
(237, 'Kalukhali Upazila\r', 30, NULL, NULL, NULL, NULL, NULL),
(238, 'Bhedarganj Upazila\r', 31, NULL, NULL, NULL, NULL, NULL),
(239, 'Damudya Upazila\r', 31, NULL, NULL, NULL, NULL, NULL),
(240, 'Gosairhat Upazila\r', 31, NULL, NULL, NULL, NULL, NULL),
(241, 'Naria Upazila\r', 31, NULL, NULL, NULL, NULL, NULL),
(242, 'Shariatpur Sadar', 31, NULL, NULL, NULL, NULL, NULL),
(243, 'Zanjira Upazila\r', 31, NULL, NULL, NULL, NULL, NULL),
(244, 'Shakhipur Upazila\r', 31, NULL, NULL, NULL, NULL, NULL),
(245, 'Jhenaigati Upazila\r', 32, NULL, NULL, NULL, NULL, NULL),
(246, 'Nakla Upazila\r', 32, NULL, NULL, NULL, NULL, NULL),
(247, 'Nalitabari Upazila\r', 32, NULL, NULL, NULL, NULL, NULL),
(248, 'Sherpur Sadar', 32, NULL, NULL, NULL, NULL, NULL),
(249, 'Sreebardi Upazila\r', 32, NULL, NULL, NULL, NULL, NULL),
(250, 'Gopalpur Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(251, 'Basail Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(252, 'Bhuapur Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(253, 'Delduar Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(254, 'Ghatail Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(255, 'Kalihati Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(256, 'Madhupur Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(257, 'Mirzapur Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(258, 'Nagarpur Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(259, 'Sakhipur Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(260, 'Dhanbari Upazila\r', 33, NULL, NULL, NULL, NULL, NULL),
(261, 'Tangail Sadar', 33, NULL, NULL, NULL, NULL, NULL),
(262, 'Narsingdi Sadar', 34, NULL, NULL, NULL, NULL, NULL),
(263, 'Belabo Upazila\r', 34, NULL, NULL, NULL, NULL, NULL),
(264, 'Monohardi Upazila\r', 34, NULL, NULL, NULL, NULL, NULL),
(265, 'Palash Upazila\r', 34, NULL, NULL, NULL, NULL, NULL),
(266, 'Raipura Upazila\r', 34, NULL, NULL, NULL, NULL, NULL),
(267, 'Shibpur Upazila\r', 34, NULL, NULL, NULL, NULL, NULL),
(268, 'Bagerhat Sadar', 35, NULL, NULL, NULL, NULL, NULL),
(269, 'Chitalmari Upazila\r', 35, NULL, NULL, NULL, NULL, NULL),
(270, 'Fakirhat Upazila\r', 35, NULL, NULL, NULL, NULL, NULL),
(271, 'Kachua Upazila\r', 35, NULL, NULL, NULL, NULL, NULL),
(272, 'Mollahat Upazila\r', 35, NULL, NULL, NULL, NULL, NULL),
(273, 'Mongla Upazila\r', 35, NULL, NULL, NULL, NULL, NULL),
(274, 'Morrelganj Upazila\r', 35, NULL, NULL, NULL, NULL, NULL),
(275, 'Rampal Upazila\r', 35, NULL, NULL, NULL, NULL, NULL),
(276, 'Sarankhola Upazila\r', 35, NULL, NULL, NULL, NULL, NULL),
(277, 'Alamdanga Upazila\r', 36, NULL, NULL, NULL, NULL, NULL),
(278, 'Chuadanga Sadar', 36, NULL, NULL, NULL, NULL, NULL),
(279, 'Damurhuda Upazila\r', 36, NULL, NULL, NULL, NULL, NULL),
(280, 'Jibannagar Upazila\r', 36, NULL, NULL, NULL, NULL, NULL),
(281, 'Abhaynagar Upazila\r', 37, NULL, NULL, NULL, NULL, NULL),
(282, 'Bagherpara Upazila\r', 37, NULL, NULL, NULL, NULL, NULL),
(283, 'Chaugachha Upazila\r', 37, NULL, NULL, NULL, NULL, NULL),
(284, 'Jhikargachha Upazila\r', 37, NULL, NULL, NULL, NULL, NULL),
(285, 'Keshabpur Upazila\r', 37, NULL, NULL, NULL, NULL, NULL),
(286, 'Jessore Sadar', 37, NULL, NULL, NULL, NULL, NULL),
(287, 'Manirampur Upazila\r', 37, NULL, NULL, NULL, NULL, NULL),
(288, 'Sharsha Upazila\r', 37, NULL, NULL, NULL, NULL, NULL),
(289, 'Harinakunda Upazila\r', 38, NULL, NULL, NULL, NULL, NULL),
(290, 'Jhenaidah Sadar', 38, NULL, NULL, NULL, NULL, NULL),
(291, 'Kaliganj Upazila\r', 38, NULL, NULL, NULL, NULL, NULL),
(292, 'Kotchandpur Upazila\r', 38, NULL, NULL, NULL, NULL, NULL),
(293, 'Maheshpur Upazila\r', 38, NULL, NULL, NULL, NULL, NULL),
(294, 'Shailkupa Upazila\r', 38, NULL, NULL, NULL, NULL, NULL),
(295, 'Batiaghata Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(296, 'Dacope Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(297, 'Dumuria Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(298, 'Dighalia Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(299, 'Koyra Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(300, 'Paikgachha Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(301, 'Phultala Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(302, 'Rupsha Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(303, 'Terokhada Upazila\r', 39, NULL, NULL, NULL, NULL, NULL),
(304, 'Bheramara Upazila\r', 40, NULL, NULL, NULL, NULL, NULL),
(305, 'Daulatpur Upazila\r', 40, NULL, NULL, NULL, NULL, NULL),
(306, 'Khoksa Upazila\r', 40, NULL, NULL, NULL, NULL, NULL),
(307, 'Kumarkhali Upazila\r', 40, NULL, NULL, NULL, NULL, NULL),
(308, 'Kushtia Sadar', 40, NULL, NULL, NULL, NULL, NULL),
(309, 'Mirpur Upazila\r', 40, NULL, NULL, NULL, NULL, NULL),
(310, 'Shekhpara Upazila\r', 40, NULL, NULL, NULL, NULL, NULL),
(311, 'Magura Sadar', 41, NULL, NULL, NULL, NULL, NULL),
(312, 'Mohammadpur Upazila\r', 41, NULL, NULL, NULL, NULL, NULL),
(313, 'Shalikha Upazila\r', 41, NULL, NULL, NULL, NULL, NULL),
(314, 'Sreepur Upazila\r', 41, NULL, NULL, NULL, NULL, NULL),
(315, 'Gangni Upazila\r', 42, NULL, NULL, NULL, NULL, NULL),
(316, 'Meherpur Sadar', 42, NULL, NULL, NULL, NULL, NULL),
(317, 'Mujibnagar Upazila\r', 42, NULL, NULL, NULL, NULL, NULL),
(318, 'Kalia Upazila\r', 43, NULL, NULL, NULL, NULL, NULL),
(319, 'Lohagara Upazila\r', 43, NULL, NULL, NULL, NULL, NULL),
(320, 'Narail Sadar', 43, NULL, NULL, NULL, NULL, NULL),
(321, 'Assasuni Upazila\r', 44, NULL, NULL, NULL, NULL, NULL),
(322, 'Debhata Upazila\r', 44, NULL, NULL, NULL, NULL, NULL),
(323, 'Kalaroa Upazila\r', 44, NULL, NULL, NULL, NULL, NULL),
(324, 'Kaliganj Upazila\r', 44, NULL, NULL, NULL, NULL, NULL),
(325, 'Satkhira Sadar', 44, NULL, NULL, NULL, NULL, NULL),
(326, 'Shyamnagar Upazila\r', 44, NULL, NULL, NULL, NULL, NULL),
(327, 'Tala Upazila\r', 44, NULL, NULL, NULL, NULL, NULL),
(328, 'Adamdighi Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(329, 'Bogra Sadar', 45, NULL, NULL, NULL, NULL, NULL),
(330, 'Dhunat Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(331, 'Dhupchanchia Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(332, 'Gabtali Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(333, 'Kahaloo Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(334, 'Nandigram Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(335, 'Sariakandi Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(336, 'Shajahanpur Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(337, 'Sherpur Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(338, 'Shibganj Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(339, 'Sonatola Upazila\r', 45, NULL, NULL, NULL, NULL, NULL),
(340, 'Akkelpur Upazila\r', 46, NULL, NULL, NULL, NULL, NULL),
(341, 'Joypurhat Sadar', 46, NULL, NULL, NULL, NULL, NULL),
(342, 'Kalai Upazila\r', 46, NULL, NULL, NULL, NULL, NULL),
(343, 'Khetlal Upazila\r', 46, NULL, NULL, NULL, NULL, NULL),
(344, 'Panchbibi Upazila\r', 46, NULL, NULL, NULL, NULL, NULL),
(345, 'Atrai Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(346, 'Badalgachhi Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(347, 'Manda Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(348, 'Dhamoirhat Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(349, 'Mohadevpur Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(350, 'Naogaon Sadar', 47, NULL, NULL, NULL, NULL, NULL),
(351, 'Niamatpur Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(352, 'Patnitala Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(353, 'Porsha Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(354, 'Raninagar Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(355, 'Sapahar Upazila\r', 47, NULL, NULL, NULL, NULL, NULL),
(356, 'Bagatipara Upazila\r', 48, NULL, NULL, NULL, NULL, NULL),
(357, 'Baraigram Upazila\r', 48, NULL, NULL, NULL, NULL, NULL),
(358, 'Gurudaspur Upazila\r', 48, NULL, NULL, NULL, NULL, NULL),
(359, 'Lalpur Upazila\r', 48, NULL, NULL, NULL, NULL, NULL),
(360, 'Natore Sadar', 48, NULL, NULL, NULL, NULL, NULL),
(361, 'Singra Upazila\r', 48, NULL, NULL, NULL, NULL, NULL),
(362, 'Naldanga Upazila\r', 48, NULL, NULL, NULL, NULL, NULL),
(363, 'Bholahat Upazila\r', 49, NULL, NULL, NULL, NULL, NULL),
(364, 'Gomastapur Upazila\r', 49, NULL, NULL, NULL, NULL, NULL),
(365, 'Nachole Upazila\r', 49, NULL, NULL, NULL, NULL, NULL),
(366, 'Nawabganj Sadar', 49, NULL, NULL, NULL, NULL, NULL),
(367, 'Shibganj Upazila\r', 49, NULL, NULL, NULL, NULL, NULL),
(368, 'Ataikula Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(369, 'Atgharia Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(370, 'Bera Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(371, 'Bhangura Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(372, 'Chatmohar Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(373, 'Faridpur Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(374, 'Ishwardi Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(375, 'Pabna Sadar', 50, NULL, NULL, NULL, NULL, NULL),
(376, 'Santhia Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(377, 'Sujanagar Upazila\r', 50, NULL, NULL, NULL, NULL, NULL),
(378, 'Bagha Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(379, 'Bagmara Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(380, 'Charghat Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(381, 'Durgapur Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(382, 'Godagari Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(383, 'Mohanpur Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(384, 'Paba Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(385, 'Puthia Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(386, 'Tanore Upazila\r', 51, NULL, NULL, NULL, NULL, NULL),
(387, 'Belkuchi Upazila\r', 52, NULL, NULL, NULL, NULL, NULL),
(388, 'Chauhali Upazila\r', 52, NULL, NULL, NULL, NULL, NULL),
(389, 'Kamarkhanda Upazila\r', 52, NULL, NULL, NULL, NULL, NULL),
(390, 'Kazipur Upazila\r', 52, NULL, NULL, NULL, NULL, NULL),
(391, 'Raiganj Upazila\r', 52, NULL, NULL, NULL, NULL, NULL),
(392, 'Shahjadpur Upazila\r', 52, NULL, NULL, NULL, NULL, NULL),
(393, 'Sirajganj Sadar', 52, NULL, NULL, NULL, NULL, NULL),
(394, 'Tarash Upazila\r', 52, NULL, NULL, NULL, NULL, NULL),
(395, 'Ullahpara Upazila\r', 52, NULL, NULL, NULL, NULL, NULL),
(396, 'Birampur Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(397, 'Birganj Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(398, 'Biral Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(399, 'Bochaganj Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(400, 'Chirirbandar Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(401, 'Phulbari Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(402, 'Ghoraghat Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(403, 'Hakimpur Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(404, 'Kaharole Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(405, 'Khansama Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(406, 'Dinajpur Sadar', 53, NULL, NULL, NULL, NULL, NULL),
(407, 'Nawabganj Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(408, 'Parbatipur Upazila\r', 53, NULL, NULL, NULL, NULL, NULL),
(409, 'Phulchhari Upazila\r', 54, NULL, NULL, NULL, NULL, NULL),
(410, 'Gaibandha Sadar', 54, NULL, NULL, NULL, NULL, NULL),
(411, 'Gobindaganj Upazila\r', 54, NULL, NULL, NULL, NULL, NULL),
(412, 'Palashbari Upazila\r', 54, NULL, NULL, NULL, NULL, NULL),
(413, 'Sadullapur Upazila\r', 54, NULL, NULL, NULL, NULL, NULL),
(414, 'Sughatta Upazila\r', 54, NULL, NULL, NULL, NULL, NULL),
(415, 'Sundarganj Upazila\r', 54, NULL, NULL, NULL, NULL, NULL),
(416, 'Bhurungamari Upazila\r', 55, NULL, NULL, NULL, NULL, NULL),
(417, 'Char Rajibpur', 55, NULL, NULL, NULL, NULL, NULL),
(418, 'Chilmari Upazila\r', 55, NULL, NULL, NULL, NULL, NULL),
(419, 'Phulbari Upazila\r', 55, NULL, NULL, NULL, NULL, NULL),
(420, 'Kurigram Sadar', 55, NULL, NULL, NULL, NULL, NULL),
(421, 'Nageshwari Upazila\r', 55, NULL, NULL, NULL, NULL, NULL),
(422, 'Rajarhat Upazila\r', 55, NULL, NULL, NULL, NULL, NULL),
(423, 'Raomari Upazila\r', 55, NULL, NULL, NULL, NULL, NULL),
(424, 'Ulipur Upazila\r', 55, NULL, NULL, NULL, NULL, NULL),
(425, 'Aditmari Upazila\r', 56, NULL, NULL, NULL, NULL, NULL),
(426, 'Hatibandha Upazila\r', 56, NULL, NULL, NULL, NULL, NULL),
(427, 'Kaliganj Upazila\r', 56, NULL, NULL, NULL, NULL, NULL),
(428, 'Lalmonirhat Sadar', 56, NULL, NULL, NULL, NULL, NULL),
(429, 'Patgram Upazila\r', 56, NULL, NULL, NULL, NULL, NULL),
(430, 'Dimla Upazila\r', 57, NULL, NULL, NULL, NULL, NULL),
(431, 'Domar Upazila\r', 57, NULL, NULL, NULL, NULL, NULL),
(432, 'Jaldhaka Upazila\r', 57, NULL, NULL, NULL, NULL, NULL),
(433, 'Kishoreganj Upazila\r', 57, NULL, NULL, NULL, NULL, NULL),
(434, 'Nilphamari Sadar', 57, NULL, NULL, NULL, NULL, NULL),
(435, 'Saidpur Upazila\r', 57, NULL, NULL, NULL, NULL, NULL),
(436, 'Atwari Upazila\r', 58, NULL, NULL, NULL, NULL, NULL),
(437, 'Boda Upazila\r', 58, NULL, NULL, NULL, NULL, NULL),
(438, 'Debiganj Upazila\r', 58, NULL, NULL, NULL, NULL, NULL),
(439, 'Panchagarh Sadar', 58, NULL, NULL, NULL, NULL, NULL),
(440, 'Tetulia Upazila\r', 58, NULL, NULL, NULL, NULL, NULL),
(441, 'Badarganj Upazila\r', 59, NULL, NULL, NULL, NULL, NULL),
(442, 'Gangachhara Upazila\r', 59, NULL, NULL, NULL, NULL, NULL),
(443, 'Kaunia Upazila\r', 59, NULL, NULL, NULL, NULL, NULL),
(444, 'Rangpur Sadar', 59, NULL, NULL, NULL, NULL, NULL),
(445, 'Mithapukur Upazila\r', 59, NULL, NULL, NULL, NULL, NULL),
(446, 'Pirgachha Upazila\r', 59, NULL, NULL, NULL, NULL, NULL),
(447, 'Pirganj Upazila\r', 59, NULL, NULL, NULL, NULL, NULL),
(448, 'Taraganj Upazila\r', 59, NULL, NULL, NULL, NULL, NULL),
(449, 'Baliadangi Upazila\r', 60, NULL, NULL, NULL, NULL, NULL),
(450, 'Haripur Upazila\r', 60, NULL, NULL, NULL, NULL, NULL),
(451, 'Pirganj Upazila\r', 60, NULL, NULL, NULL, NULL, NULL),
(452, 'Ranisankail Upazila\r', 60, NULL, NULL, NULL, NULL, NULL),
(453, 'Thakurgaon Sadar', 60, NULL, NULL, NULL, NULL, NULL),
(454, 'Ajmiriganj Upazila\r', 61, NULL, NULL, NULL, NULL, NULL),
(455, 'Bahubal Upazila\r', 61, NULL, NULL, NULL, NULL, NULL),
(456, 'Baniyachong Upazila\r', 61, NULL, NULL, NULL, NULL, NULL),
(457, 'Chunarughat Upazila\r', 61, NULL, NULL, NULL, NULL, NULL),
(458, 'Habiganj Sadar', 61, NULL, NULL, NULL, NULL, NULL),
(459, 'Lakhai Upazila\r', 61, NULL, NULL, NULL, NULL, NULL),
(460, 'Madhabpur Upazila\r', 61, NULL, NULL, NULL, NULL, NULL),
(461, 'Nabiganj Upazila\r', 61, NULL, NULL, NULL, NULL, NULL),
(462, 'Barlekha Upazila\r', 62, NULL, NULL, NULL, NULL, NULL),
(463, 'Kamalganj Upazila\r', 62, NULL, NULL, NULL, NULL, NULL),
(464, 'Kulaura Upazila\r', 62, NULL, NULL, NULL, NULL, NULL),
(465, 'Moulvibazar Sadar', 62, NULL, NULL, NULL, NULL, NULL),
(466, 'Rajnagar Upazila\r', 62, NULL, NULL, NULL, NULL, NULL),
(467, 'Sreemangal Upazila\r', 62, NULL, NULL, NULL, NULL, NULL),
(468, 'Juri Upazila\r', 62, NULL, NULL, NULL, NULL, NULL),
(469, 'Bishwamvarpur Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(470, 'Chhatak Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(471, 'Derai Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(472, 'Dharampasha Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(473, 'Dowarabazar Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(474, 'Jagannathpur Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(475, 'Jamalganj Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(476, 'Sullah Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(477, 'Sunamganj Sadar', 63, NULL, NULL, NULL, NULL, NULL),
(478, 'Tahirpur Upazila\r', 63, NULL, NULL, NULL, NULL, NULL),
(479, 'South Sunamganj', 63, NULL, NULL, NULL, NULL, NULL),
(480, 'Balaganj Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(481, 'Beanibazar Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(482, 'Bishwanath Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(483, 'Companigonj Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(484, 'Fenchuganj Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(485, 'Golapganj Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(486, 'Gowainghat Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(487, 'Jaintiapur Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(488, 'Kanaighat Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(489, 'Sylhet Sadar', 64, NULL, NULL, NULL, NULL, NULL),
(490, 'Zakiganj Upazila\r', 64, NULL, NULL, NULL, NULL, NULL),
(491, 'South Shurma', 64, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `national_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `is_confirm` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `user_role` int(11) NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `perfrom_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`),
  UNIQUE KEY `user_national_id_unique` (`national_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_address`
--

CREATE TABLE IF NOT EXISTS `users_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upzilla_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `division_id` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `phone_num` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `address_extra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_personal_infos`
--

CREATE TABLE IF NOT EXISTS `users_personal_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `govt_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `national_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name_in_bangla` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `name_in_english` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `fname_in_bangla` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `mname_in_bangla` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `mname_in_english` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `sex` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `join_date` date NOT NULL,
  `religion` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_go_date` datetime NOT NULL,
  `lpr_date` datetime NOT NULL,
  `permanet_add_id` int(11) NOT NULL,
  `present_add_id` int(11) NOT NULL,
  `current_posting_id` int(11) NOT NULL,
  `marital_stat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_freedom_fighter` tinyint(4) NOT NULL,
  `is_child_or_grand_child_of_freedom_fighter` tinyint(4) NOT NULL,
  `service_history_id` int(11) NOT NULL,
  `batch` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `rank_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `create_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `update_ip` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `perfrom_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
