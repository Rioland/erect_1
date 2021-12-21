-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2021 at 12:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avpvgymy_erect1`
--

-- --------------------------------------------------------

--
-- Table structure for table `102118268994535035469_messages`
--

CREATE TABLE `102118268994535035469_messages` (
  `MID` int(11) NOT NULL,
  `FID` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `102118268994535035469_request`
--

CREATE TABLE `102118268994535035469_request` (
  `sn` int(11) NOT NULL,
  `FID` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `accept` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `102118268994535035469_request`
--

INSERT INTO `102118268994535035469_request` (`sn`, `FID`, `date`, `accept`) VALUES
(1, '112788816849878806644', '2021-12-01 07:31:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `104752876112185585152_messages`
--

CREATE TABLE `104752876112185585152_messages` (
  `MID` int(11) NOT NULL,
  `FID` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `104752876112185585152_messages`
--

INSERT INTO `104752876112185585152_messages` (`MID`, `FID`, `message`, `date`) VALUES
(1, '104752876112185585152_112788816849878806644', 'hi how are you', '2021-12-01 05:44:50'),
(2, '104752876112185585152_112788816849878806644', 'hi how are you', '2021-12-01 05:59:47'),
(3, '104752876112185585152_112788816849878806644', 'good work', '2021-12-01 06:00:39'),
(4, '104752876112185585152_112788816849878806644', 'good work', '2021-12-01 06:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `104752876112185585152_request`
--

CREATE TABLE `104752876112185585152_request` (
  `sn` int(11) NOT NULL,
  `FID` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `accept` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `104752876112185585152_request`
--

INSERT INTO `104752876112185585152_request` (`sn`, `FID`, `date`, `accept`) VALUES
(1, '112788816849878806644', '2021-11-30 18:54:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `112788816849878806644_messages`
--

CREATE TABLE `112788816849878806644_messages` (
  `MID` int(11) NOT NULL,
  `FID` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `112788816849878806644_messages`
--

INSERT INTO `112788816849878806644_messages` (`MID`, `FID`, `message`, `date`) VALUES
(2, '104752876112185585152_112788816849878806644', 'hi how are you', '2021-12-01 05:44:50'),
(3, '112788816849878806644_104752876112185585152', 'hi how are you', '2021-12-01 05:59:47'),
(4, '112788816849878806644_104752876112185585152', 'good work', '2021-12-01 06:00:39'),
(5, '112788816849878806644_117183156372634757436', 'good work', '2021-12-01 06:01:04'),
(6, '112788816849878806644_117183156372634757436', 'how are you doing', '2021-12-01 06:32:14'),
(7, '112788816849878806644_104752876112185585152', 'good work', '2021-12-01 06:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `112788816849878806644_request`
--

CREATE TABLE `112788816849878806644_request` (
  `sn` int(11) NOT NULL,
  `FID` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `accept` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `112788816849878806644_request`
--

INSERT INTO `112788816849878806644_request` (`sn`, `FID`, `date`, `accept`) VALUES
(1, '104752876112185585152', '2021-11-30 18:54:04', 1),
(2, '117183156372634757436', '2021-11-30 19:15:41', 1),
(3, '102118268994535035469', '2021-12-01 07:31:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `117183156372634757436_messages`
--

CREATE TABLE `117183156372634757436_messages` (
  `MID` int(11) NOT NULL,
  `FID` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `117183156372634757436_messages`
--

INSERT INTO `117183156372634757436_messages` (`MID`, `FID`, `message`, `date`) VALUES
(1, '117183156372634757436_112788816849878806644', 'good work', '2021-12-01 06:01:04'),
(2, '117183156372634757436_112788816849878806644', 'how are you doing', '2021-12-01 06:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `117183156372634757436_request`
--

CREATE TABLE `117183156372634757436_request` (
  `sn` int(11) NOT NULL,
  `FID` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `accept` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `117183156372634757436_request`
--

INSERT INTO `117183156372634757436_request` (`sn`, `FID`, `date`, `accept`) VALUES
(1, '112788816849878806644', '2021-11-30 19:15:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `sn` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `dollar` varchar(50) NOT NULL,
  `euro` varchar(50) NOT NULL,
  `bit` varchar(50) NOT NULL,
  `eth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`sn`, `id`, `dollar`, `euro`, `bit`, `eth`) VALUES
(5, '9621921999', '0.0', '0.0', '0.0', '0.0'),
(7, '112788816849878806644', '0.0', '0.0', '2.300689962969067', '0.0'),
(8, '117183156372634757436', '0.0', '0.0', '0.0', '0.0'),
(9, '2658161195', '0.0', '0.0', '0.0', '0.0'),
(10, '104752876112185585152', '0.0', '0.0', '0.0', '0.0'),
(11, '9310016060', '0.0', '0.0', '0.0', '0.0'),
(12, '9116204368', '0.0', '0.0', '0.0', '0.0'),
(13, '1531660223', '0.0', '0.0', '0.0', '0.0'),
(14, '6108300691', '0.0', '0.0', '0.0', '0.0'),
(15, '100986126757974858575', '0.0', '0.0', '0.0', '0.0'),
(16, '5321131663', '0.0', '0.0', '0.0', '0.0'),
(17, '6337613324', '0.0', '0.0', '0.0', '0.0'),
(18, '2796406361', '0.0', '0.0', '0.0', '0.0'),
(19, '102118268994535035469', '0.0', '0.0', '0.0', '0.0');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `acno` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `activity` text NOT NULL,
  `date` int(11) NOT NULL,
  `share` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Solomon', 'boye', 'boye'),
(3, 'erectone_admin', 'erectone', 'erectoneofficer2021'),
(4, 'Adedamola', 'riolandadedamola@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `apis`
--

CREATE TABLE `apis` (
  `sn` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `public` varchar(1000) DEFAULT NULL,
  `private` varchar(1000) DEFAULT NULL,
  `redirect` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apis`
--

INSERT INTO `apis` (`sn`, `name`, `public`, `private`, `redirect`) VALUES
(1, 'google', '818881695167-96f0chbv1pctnltdcf2n8kunrkctqei3.apps.googleusercontent.com', 'rdquOpaJHjbW3Qkbs-6tM97G', 'https://erect1.org/app/googleapi.php'),
(2, 'facebook', '2d86a2195bf92a7515065c69d1041221', '174465544659598', 'http://localhost/erect1/app/facebook.php'),
(3, 'stripe', NULL, 'sk_test_51JB7jpG61ITNwdfRCiJ1FMnTBU0wxdddK5tmKoE9oWuMI8AqjdFw0RY15h8Grag5sdNVwGHptd9iQM7dtjzfv0LL00TrMyEhXs', NULL),
(4, 'paystack', 'pk_test_99d69caec3f4f9bcf55f1f96a7c89a5653e2d80c', 'sk_test_98da44136d9c75dc67f3124016fdec282daf82bb', NULL),
(5, 'block', NULL, '4d8aqIyt8DLGaVFc0DBvhXQJybJTcaH5DfuXpqP7kk0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bid` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `r_number` varchar(255) NOT NULL,
  `account_type` enum('Savings','Current','Fixed','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bid`, `uid`, `account_number`, `r_number`, `account_type`) VALUES
(1, '112788816849878806644', '3435433455', 'gfhgf', 'Savings'),
(2, '112788816849878806644', '3435433455', 'gfhgf', 'Savings'),
(3, '112788816849878806644', '3435433455', 'gfhgf', 'Savings'),
(4, '112788816849878806644', '3435433455', 'gfhgf', 'Savings'),
(5, '112788816849878806644', '3435433455', 'gfhgf', 'Savings'),
(6, '112788816849878806644', '343543345', 'gfhgf', 'Savings'),
(7, '112788816849878806644', '343543345', 'gfhgf', 'Savings'),
(8, '112788816849878806644', '343543345', 'gfhgf', 'Savings');

-- --------------------------------------------------------

--
-- Table structure for table `campain`
--

CREATE TABLE `campain` (
  `id` int(11) NOT NULL,
  `mode` varchar(69) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campain`
--

INSERT INTO `campain` (`id`, `mode`, `amount`, `date`) VALUES
(1, 'f', '200', '2021-08-01 10:12:31'),
(2, 's', '500', '2021-08-01 10:12:31'),
(3, 't', '1000', '2021-08-01 10:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `sn` int(11) NOT NULL,
  `id` varchar(100) DEFAULT NULL,
  `card_number` varchar(100) DEFAULT NULL,
  `expedite` varchar(100) DEFAULT NULL,
  `ccv` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`sn`, `id`, `card_number`, `expedite`, `ccv`, `name`, `country`, `state`, `city`, `zip`) VALUES
(9, '112788816849878806644', '4544545454545454545', '02/23', '779', '', NULL, NULL, NULL, NULL),
(10, '112788816849878806644', '4544545454545454545', '02/23', '779', '', NULL, NULL, NULL, NULL),
(11, '112788816849878806644', '4544545454545454545', '02/23', 'ooo', '', NULL, NULL, NULL, NULL),
(12, '112788816849878806644', '4544545454545454545', '02/23', 'ooo', '', NULL, NULL, NULL, NULL),
(14, '112788816849878806644', '4544545454545454545', '02/23', '999', '', NULL, NULL, NULL, NULL),
(22, NULL, '5567 4321 1223 4566', '02 / 33', '1234', 'Pupils foundation', 'Nigeria', 'Ekiti', 'Ado', '360211');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `fid` int(11) NOT NULL,
  `reciverid` varchar(255) DEFAULT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `accept` tinyint(1) NOT NULL DEFAULT 0,
  `senderid_recieverid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`fid`, `reciverid`, `sender_id`, `date`, `accept`, `senderid_recieverid`) VALUES
(1, '112788816849878806644', '9310016060', '2021-11-29 12:56:31', 1, NULL),
(2, '112788816849878806644', '9116204368', '2021-11-29 12:56:31', 1, '777'),
(3, '2658161195', '112788816849878806644', '2021-11-29 17:46:19', 0, '112788816849878806644_2658161195');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `value` double NOT NULL,
  `status` int(11) NOT NULL,
  `uid` varchar(256) NOT NULL,
  `ip` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `txt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `address`, `value`, `status`, `uid`, `ip`, `date`, `txt`) VALUES
(1, '14Y3mQdRkyQnhC3t5LqYFomfw76enmqA7L', 0.00041, -1, '112788816849878806644', '105.112.99.35', '0000-00-00 00:00:00', ''),
(2, '15CRHHgyHEyUxBnbjKTjMyeZYdLtzZeFjD', 0.00124, -1, '112788816849878806644', '105.112.99.35', '0000-00-00 00:00:00', ''),
(3, '1K248AbZVmmziJKBi6NdeVGkdFkjpJpskJ', 0.00124, 2, '112788816849878806644', '105.112.102.129', '0000-00-00 00:00:00', ''),
(4, '1PE7ukLEKSkwMxizCtwRBKQRZRjXrzGBd7', 0.03719, -1, '9116204368', '197.210.29.201', '0000-00-00 00:00:00', ''),
(5, '1ENwwGCYPgMARSJNeWyq4hALEEFATXw6BD', 0.01857, -1, '9116204368', '197.210.29.201', '0000-00-00 00:00:00', ''),
(6, '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 0.00002, -1, '3', '129.205.124.82', '0000-00-00 00:00:00', ''),
(7, '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 0.01899, -1, '3', '129.205.124.82', '0000-00-00 00:00:00', ''),
(8, '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 1.568, -1, '2796406361', '129.205.124.82', '0000-00-00 00:00:00', ''),
(9, '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 1.57081, -1, '2796406361', '129.205.124.82', '0000-00-00 00:00:00', ''),
(10, '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 1.57081, -1, '2796406361', '129.205.124.82', '0000-00-00 00:00:00', ''),
(11, '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 1.57081, -1, '2796406361', '129.205.124.82', '0000-00-00 00:00:00', ''),
(12, '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 2147483647, 1, '112788816849878806644', '::1', '2021-11-27 08:12:08', 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(11) NOT NULL,
  `reciver` varchar(255) DEFAULT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `reciverid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `broadcast` text COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('success','warning','danger') COLLATE utf8_unicode_ci NOT NULL,
  `broadcastdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `reciverid`, `broadcast`, `type`, `broadcastdate`) VALUES
(8, '117183156372634757436', 'hi just texting', 'danger', '2021-12-19 06:53:41'),
(12, '112788816849878806644', 'hgjhghjgj', 'danger', '2021-12-19 09:39:39'),
(15, '117183156372634757436', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(16, '2658161195', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(17, '104752876112185585152', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(18, '9310016060', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(19, '9116204368', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(20, '1531660223', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(21, '6108300691', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(22, '100986126757974858575', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(23, '5321131663', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(24, '6337613324', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(25, '2796406361', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(26, '102118268994535035469', 'hjghgh888 84774743iu4rkjwherw', 'success', '2021-12-19 09:51:31'),
(28, '117183156372634757436', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(29, '2658161195', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(30, '104752876112185585152', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(31, '9310016060', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(32, '9116204368', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(33, '1531660223', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(34, '6108300691', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(35, '100986126757974858575', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(36, '5321131663', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(37, '6337613324', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(38, '2796406361', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(39, '102118268994535035469', '6767676767etregdfvcvxcvxcc', 'success', '2021-12-19 10:09:01'),
(40, '112788816849878806644', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(41, '117183156372634757436', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(42, '2658161195', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(43, '104752876112185585152', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(44, '9310016060', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(45, '9116204368', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(46, '1531660223', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(47, '6108300691', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(48, '100986126757974858575', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(49, '5321131663', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(50, '6337613324', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(51, '2796406361', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(52, '102118268994535035469', 'How are you doing clients', 'success', '2021-12-19 10:13:28'),
(53, '112788816849878806644', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(54, '117183156372634757436', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(55, '2658161195', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(56, '104752876112185585152', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(57, '9310016060', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(58, '9116204368', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(59, '1531660223', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(60, '6108300691', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(61, '100986126757974858575', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(62, '5321131663', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(63, '6337613324', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(64, '2796406361', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(65, '102118268994535035469', 'Just texting ooo', 'warning', '2021-12-19 10:13:42'),
(66, '112788816849878806644', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(67, '117183156372634757436', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(68, '2658161195', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(69, '104752876112185585152', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(70, '9310016060', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(71, '9116204368', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(72, '1531660223', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(73, '6108300691', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(74, '100986126757974858575', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(75, '5321131663', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(76, '6337613324', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(77, '2796406361', 'this is danger message', 'danger', '2021-12-19 10:13:55'),
(78, '102118268994535035469', 'this is danger message', 'danger', '2021-12-19 10:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `otpid` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `expiredAt` varchar(225) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `amt` varchar(255) NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT 0,
  `cardnumber` varchar(255) NOT NULL,
  `ccv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`otpid`, `uid`, `fname`, `lname`, `phone`, `expiredAt`, `otp`, `amt`, `verify`, `cardnumber`, `ccv`) VALUES
(1, '112788816849878806644', 'Rioland', 'Adedamola', '12346577839', '2021-12-23', '360211', '676776', 0, '13245665', '233');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sn` int(11) NOT NULL,
  `id` varchar(40) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `country` varchar(1000) NOT NULL,
  `auth_token` varchar(1000) DEFAULT NULL,
  `reset_pass_token` varchar(500) DEFAULT NULL,
  `token_date` varchar(1000) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `picture` varchar(1000) DEFAULT NULL,
  `gender` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `verify` tinyint(1) NOT NULL DEFAULT 0,
  `address` text DEFAULT NULL,
  `referer` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sn`, `id`, `email`, `password`, `country`, `auth_token`, `reset_pass_token`, `token_date`, `name`, `picture`, `gender`, `created_at`, `verify`, `address`, `referer`, `phone`) VALUES
(3, '112788816849878806644', 'riolandadedamola@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Nigeria', '564819', '254876', '2021-12-08 08:37:26', 'Rioland Adedamola', 'https://localhost/app/Apis/userPhoto/briefcase.svg', 'Femail', '2021-08-24 07:55:51', 0, '  no7 okeyimi street Ado Ekiti\r\nOkeyinmi', '1638460449', '(081) 499-1672'),
(4, '117183156372634757436', 'aiibolajohnson@gmail.com', '43f1915c2b8abd7e49062dcbdf34e29b', 'United Kingdom', '6#ac@p3zwegdst7y0ob52hjku81ixmrqvl4fn9', NULL, NULL, 'Aiibola Johnson', 'https://lh3.googleusercontent.com/a/AATXAJxMr0NVhjgv_HgGOb7mpV_-9W354IKNWsLUq6Za=s96-c', NULL, '2021-08-24 18:39:02', 0, NULL, NULL, NULL),
(5, '2658161195', 'jefferystud@protonmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Nigeria', 'abkowtir36c58qpf9e#x0vlgm@dyuj4s21nhz7', NULL, NULL, NULL, NULL, NULL, '2021-08-25 01:40:11', 0, NULL, NULL, NULL),
(6, '104752876112185585152', 'riotech2222@gmail.com', '7386ce9f967e85d9ae206932920045e1', 'Nigeria', 'j4bfkx9lyu6#de83r0thnzg@2vais1pom57wqc', NULL, NULL, 'Rio Tech', 'https://lh3.googleusercontent.com/a/AATXAJytmBsEzdsiWnAmky0xPbw4EMg_135o57T7ziVS=s96-c', NULL, '2021-08-25 21:46:42', 0, NULL, NULL, NULL),
(7, '9310016060', 'ajibobo52@gmail.com', 'c7671082be460c11fad56e07e4cc5b97', 'United States', 'yr794h@amkfwx0t8ig516o2bjpcd#uzesqvnl3', '674835', '2021-08-27 18:38:58', NULL, NULL, NULL, '2021-08-27 23:28:20', 0, NULL, NULL, NULL),
(8, '9116204368', 'Frankrich101@gmail.com', '9651fae69f7552171fed83dd5674cbb1', 'Nigeria', 'ipv8ho#4ug7wmbfzqtcd5r6j3l@a1902keyxsn', '329164', '2021-08-29 10:04:48', NULL, NULL, NULL, '2021-08-29 14:59:28', 0, NULL, NULL, NULL),
(9, '1531660223', 'Frankisrichard101@gmail.com', '9651fae69f7552171fed83dd5674cbb1', 'Nigeria', '931485', NULL, '2021-08-29 10:54:57', NULL, NULL, NULL, '2021-08-29 15:51:56', 0, NULL, NULL, NULL),
(10, '6108300691', '1o8gbyv21y@bestparadize.com', 'adab7aeb178730c86d18f3331ec55fe0', 'Unknown', 's@wl0bqi1hpx#od4g6runm9zfjy5k82c3veta7', NULL, NULL, NULL, NULL, NULL, '2021-09-07 10:01:46', 0, NULL, NULL, NULL),
(11, '100986126757974858575', 'aribigbolakayode@gmail.com', '5b8693f73f160329d2b4bb42f971f21f', 'Nigeria', '481736', NULL, '2021-09-23 10:21:25', 'aribigbola kayode', 'https://lh3.googleusercontent.com/a/AATXAJzh_dTevVy8zsx9IcccvTuxQFQgMsTe5gvBrz8z=s96-c', NULL, '2021-09-23 15:04:46', 0, NULL, NULL, NULL),
(12, '5321131663', 'odinnlol@yahoo.com', 'c42f0a4702347bb830bd39fdcbf594a8', 'Morocco', '4zymukphrt8gnwld53@0xeqs6#1f9bav7jic2o', '246517', '2021-10-01 17:20:16', NULL, NULL, NULL, '2021-10-01 22:15:13', 0, NULL, NULL, NULL),
(13, '6337613324', 'iayomitunde@yahoo.com', '96e79218965eb72c92a549dd5a330112', 'Nigeria', 'fag58xd9r4c#36@qvkw7epmsj10tounhzylb2i', NULL, NULL, NULL, NULL, NULL, '2021-10-20 09:48:56', 0, NULL, NULL, NULL),
(14, '2796406361', 'carminasantoliexo89@gmail.com', 'c7671082be460c11fad56e07e4cc5b97', 'Nigeria', '37xsh4wltym8ojdfvri1penb609ua#cz52gq@k', NULL, NULL, NULL, NULL, NULL, '2021-11-13 09:01:02', 0, NULL, NULL, NULL),
(15, '102118268994535035469', 'frankisrichard101@gmail.com', '9a761767feb460fce09e03a1a51606a5', 'Nigeria', '2z@hv8lbr10w#g4a9m7ks6fceiodjyntqu3p5x', NULL, NULL, 'Frank Richard', 'https://lh3.googleusercontent.com/a/AATXAJzh2zb4w_q-K0h58qXmkp-I7kaNTcUCkD87FYpL=s96-c', NULL, '2021-11-17 08:19:59', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Wallets`
--

CREATE TABLE `Wallets` (
  `sn` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Wallets`
--

INSERT INTO `Wallets` (`sn`, `id`, `address`) VALUES
(1, '112788816849878806644', 'newaddress=14345355fsfdsfs5435gfdgdfdgdgdgdgfdfdgf');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `sn` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `amount_btc` varchar(255) NOT NULL,
  `amount_usd` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`sn`, `id`, `amount_btc`, `amount_usd`, `date`, `status`) VALUES
(1, '112788816849878806644', '0.00023766141170878554', '12', '2021-12-08 23:50:23', 'pending'),
(3, '112788816849878806644', '0.00020920502092050208', '10', '2021-12-17 05:30:31', 'pending'),
(4, '112788816849878806644', '0.0020920502092050207', '100', '2021-12-17 05:31:17', 'Paid'),
(5, '112788816849878806644', '0.0020892092343048154', '100', '2021-12-17 05:34:48', 'Paid'),
(6, '112788816849878806644', '0.02050146585480862', '1000', '2021-12-21 10:28:39', 'pending'),
(7, '112788816849878806644', '0.02050146585480862', '1000', '2021-12-21 10:28:44', 'pending'),
(8, '112788816849878806644', '0.02050146585480862', '1000', '2021-12-21 10:28:53', 'pending'),
(9, '112788816849878806644', '0.0020480471870071887', '100', '2021-12-21 11:10:34', 'pending'),
(10, '112788816849878806644', '0.0020479213598197828', '100', '2021-12-21 11:13:01', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `102118268994535035469_messages`
--
ALTER TABLE `102118268994535035469_messages`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `102118268994535035469_request`
--
ALTER TABLE `102118268994535035469_request`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `FID` (`FID`);

--
-- Indexes for table `104752876112185585152_messages`
--
ALTER TABLE `104752876112185585152_messages`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `104752876112185585152_request`
--
ALTER TABLE `104752876112185585152_request`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `FID` (`FID`);

--
-- Indexes for table `112788816849878806644_messages`
--
ALTER TABLE `112788816849878806644_messages`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `112788816849878806644_request`
--
ALTER TABLE `112788816849878806644_request`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `FID` (`FID`);

--
-- Indexes for table `117183156372634757436_messages`
--
ALTER TABLE `117183156372634757436_messages`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `117183156372634757436_request`
--
ALTER TABLE `117183156372634757436_request`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `FID` (`FID`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`acno`);

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `senderid_recieverid` (`senderid_recieverid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`otpid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `Wallets`
--
ALTER TABLE `Wallets`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `102118268994535035469_messages`
--
ALTER TABLE `102118268994535035469_messages`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `102118268994535035469_request`
--
ALTER TABLE `102118268994535035469_request`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `104752876112185585152_messages`
--
ALTER TABLE `104752876112185585152_messages`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `104752876112185585152_request`
--
ALTER TABLE `104752876112185585152_request`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `112788816849878806644_messages`
--
ALTER TABLE `112788816849878806644_messages`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `112788816849878806644_request`
--
ALTER TABLE `112788816849878806644_request`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `117183156372634757436_messages`
--
ALTER TABLE `117183156372634757436_messages`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `117183156372634757436_request`
--
ALTER TABLE `117183156372634757436_request`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `acno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `otpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Wallets`
--
ALTER TABLE `Wallets`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
