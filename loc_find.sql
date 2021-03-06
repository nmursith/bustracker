-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 06:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loc_find`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `map_points`
--

CREATE TABLE IF NOT EXISTS `map_points` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `speed` varchar(5) NOT NULL,
  `point_date` date NOT NULL,
  `point_time` time NOT NULL,
  `bus_no` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=176 ;

--
-- Dumping data for table `map_points`
--

INSERT INTO `map_points` (`id`, `latitude`, `longitude`, `speed`, `point_date`, `point_time`, `bus_no`) VALUES
(1, '6.077761', '80.192024', '1.06', '2016-11-13', '02:54:30', 'AG-1998'),
(2, '6.077720', '80.192032', '0.11', '2016-11-13', '02:55:12', 'AG-1998'),
(3, '6.077755', '80.192039', '0.02', '2016-11-13', '02:55:53', 'AG-1998'),
(4, '6.077729', '80.192009', '0.13', '2016-11-13', '02:56:34', 'AG-1998'),
(5, '6.077773', '80.192017', '0.09', '2016-11-13', '02:57:15', 'AG-1998'),
(6, '6.077777', '80.192032', '0.07', '2016-11-13', '02:57:56', 'AG-1998'),
(7, '6.077776', '80.192039', '0.22', '2016-11-13', '02:58:37', 'AG-1998'),
(8, '6.077799', '80.192055', '0.30', '2016-11-13', '02:59:18', 'AG-1998'),
(9, '6.077814', '80.192047', '0.26', '2016-11-13', '03:00:10', 'AG-1998'),
(10, '6.077796', '80.192055', '0.02', '2016-11-13', '03:01:12', 'AG-1998'),
(11, '6.077784', '80.192047', '0.50', '2016-11-13', '03:02:04', 'AG-1998'),
(12, '6.077769', '80.192039', '0.50', '2016-11-13', '03:02:46', 'AG-1998'),
(13, '6.077823', '80.192062', '0.50', '2016-11-13', '03:03:27', 'AG-1998'),
(14, '6.077809', '80.192047', '0.09', '2016-11-13', '03:04:08', 'AG-1998'),
(15, '6.077720', '80.192039', '0.26', '2016-11-13', '03:06:14', 'AG-1998'),
(16, '6.077744', '80.192032', '0.26', '2016-11-13', '03:06:56', 'AG-1998'),
(17, '6.077764', '80.192017', '0.26', '2016-11-13', '03:07:37', 'AG-1998'),
(18, '6.077831', '80.192070', '0.91', '2016-11-13', '03:08:18', 'AG-1998'),
(19, '6.077805', '80.192085', '0.65', '2016-11-13', '03:08:59', 'AG-1998'),
(20, '6.077802', '80.192093', '0.65', '2016-11-13', '03:09:40', 'AG-1998'),
(21, '6.077795', '80.192078', '0.19', '2016-11-13', '03:10:21', 'AG-1998'),
(22, '6.077836', '80.192062', '0.19', '2016-11-13', '03:11:03', 'AG-1998'),
(23, '6.077809', '80.192032', '0.19', '2016-11-13', '03:11:44', 'AG-1998'),
(24, '6.077859', '80.192001', '0.13', '2016-11-13', '03:12:26', 'AG-1998'),
(25, '6.077827', '80.191978', '0.13', '2016-11-13', '03:13:08', 'AG-1998'),
(26, '6.077829', '80.191971', '0.13', '2016-11-13', '03:13:49', 'AG-1998'),
(27, '6.077833', '80.191986', '0.06', '2016-11-13', '03:14:30', 'AG-1998'),
(28, '6.077849', '80.191994', '0.06', '2016-11-13', '03:15:12', 'AG-1998'),
(29, '6.077830', '80.191971', '0.06', '2016-11-13', '03:15:53', 'AG-1998'),
(30, '6.077821', '80.191963', '0.07', '2016-11-13', '03:16:47', 'ag1998'),
(31, '6.077818', '80.191971', '0.07', '2016-11-13', '03:17:30', 'AG-1998'),
(32, '6.077825', '80.191963', '0.26', '2016-11-13', '03:18:14', 'AG-1998'),
(33, '6.077832', '80.191971', '0.39', '2016-11-13', '03:19:27', 'AG-1998'),
(34, '6.077809', '80.191963', '0.11', '2016-11-13', '03:20:17', 'AG-1998'),
(35, '6.077789', '80.191956', '0.02', '2016-11-13', '03:21:06', 'AG-1998'),
(36, '6.077796', '80.191971', '0.02', '2016-11-13', '03:21:48', 'AG-1998'),
(37, '6.077830', '80.192001', '0.02', '2016-11-13', '03:22:29', 'AG-1998'),
(38, '6.077794', '80.191971', '0.33', '2016-11-13', '03:23:10', 'AG-1998'),
(39, '6.077832', '80.191994', '0.44', '2016-11-13', '03:23:51', 'AG-1998'),
(40, '6.077839', '80.191978', '0.44', '2016-11-13', '03:24:32', 'AG-1998'),
(41, '6.077812', '80.191971', '0.63', '2016-11-13', '03:25:13', 'AG-1998'),
(42, '6.077777', '80.191978', '0.17', '2016-11-13', '03:26:32', 'AG-1998'),
(43, '6.077801', '80.192001', '0.13', '2016-11-13', '03:27:13', 'AG-1998'),
(44, '6.077808', '80.191986', '0.13', '2016-11-13', '03:27:55', 'AG-1998'),
(45, '6.077796', '80.191994', '0.09', '2016-11-13', '03:29:22', 'AG-1998'),
(46, '6.077983', '80.192093', '18.63', '2016-11-14', '13:04:04', 'AG-1998'),
(47, '6.078227', '80.192162', '0.39', '2016-11-14', '13:04:50', 'AG-1998'),
(48, '6.078428', '80.192253', '0.15', '2016-11-14', '14:02:21', 'AG-1998'),
(49, '6.078079', '80.192116', '0.13', '2016-11-14', '14:03:03', 'AG-1998'),
(50, '6.078104', '80.192131', '0.13', '2016-11-14', '14:03:44', 'AG-1998'),
(51, '6.078181', '80.192215', '2.61', '2016-11-14', '14:04:26', 'AG-1998'),
(52, '6.103000', '80.192986', '17.09', '2016-11-14', '14:12:19', 'AG-1998'),
(53, '6.106375', '80.192223', '17.09', '2016-11-14', '14:13:00', 'AG-1998'),
(54, '6.106255', '80.191208', '17.09', '2016-11-14', '14:13:41', 'AG-1998'),
(55, '6.106078', '80.190414', '2.13', '2016-11-14', '14:14:22', 'AG-1998'),
(56, '6.106022', '80.190262', '1.37', '2016-11-14', '14:15:03', 'AG-1998'),
(57, '6.106013', '80.190224', '0.04', '2016-11-14', '14:15:44', 'AG-1998'),
(58, '6.105930', '80.189758', '6.98', '2016-11-14', '14:16:25', 'AG-1998'),
(59, '6.106236', '80.186951', '42.15', '2016-11-14', '14:17:06', 'AG-1998'),
(60, '6.109502', '80.184158', '42.15', '2016-11-14', '14:17:46', 'AG-1998'),
(61, '6.136344', '80.177238', '31.19', '2016-11-14', '14:22:28', 'AG-1998'),
(62, '6.137348', '80.177315', '31.19', '2016-11-14', '14:23:08', 'AG-1998'),
(63, '6.148101', '80.179024', '39.39', '2016-11-14', '14:25:11', 'AG-1998'),
(64, '6.151243', '80.182678', '45.26', '2016-11-14', '14:25:52', 'AG-1998'),
(65, '6.153996', '80.184471', '5.28', '2016-11-14', '14:26:33', 'AG-1998'),
(66, '6.154612', '80.184685', '4.50', '2016-11-14', '14:27:14', 'AG-1998'),
(67, '6.154320', '80.184052', '35.41', '2016-11-14', '14:27:55', 'AG-1998'),
(68, '6.157953', '80.181976', '46.84', '2016-11-14', '14:28:36', 'AG-1998'),
(69, '6.162329', '80.179512', '49.87', '2016-11-14', '14:29:17', 'AG-1998'),
(70, '6.166437', '80.179688', '21.95', '2016-11-14', '14:29:58', 'AG-1998'),
(71, '6.168807', '80.180183', '37.45', '2016-11-14', '14:30:39', 'AG-1998'),
(72, '6.170865', '80.184258', '44.49', '2016-11-14', '14:31:20', 'AG-1998'),
(73, '6.173154', '80.188034', '57.71', '2016-11-14', '14:32:01', 'AG-1998'),
(74, '6.177030', '80.189041', '58.47', '2016-11-14', '14:32:42', 'AG-1998'),
(75, '6.180772', '80.192474', '45.61', '2016-11-14', '14:33:23', 'AG-1998'),
(76, '6.174592', '80.194191', '76.71', '2016-11-14', '14:34:45', 'AG-1998'),
(77, '6.166208', '80.193642', '82.54', '2016-11-14', '14:35:26', 'AG-1998'),
(78, '6.158192', '80.196304', '82.95', '2016-11-14', '14:36:07', 'AG-1998'),
(79, '6.151140', '80.201065', '83.21', '2016-11-14', '14:36:48', 'AG-1998'),
(80, '6.143647', '80.205772', '84.01', '2016-11-14', '14:37:29', 'AG-1998'),
(81, '6.135289', '80.208229', '84.40', '2016-11-14', '14:38:10', 'AG-1998'),
(82, '6.126495', '80.209213', '88.32', '2016-11-14', '14:38:51', 'AG-1998'),
(83, '6.119334', '80.214615', '89.04', '2016-11-14', '14:39:32', 'AG-1998'),
(84, '6.101572', '80.235168', '88.21', '2016-11-14', '14:41:35', 'AG-1998'),
(85, '6.083157', '80.255455', '88.64', '2016-11-14', '14:43:38', 'AG-1998'),
(86, '6.070209', '80.264923', '48.95', '2016-11-14', '14:45:00', 'AG-1998'),
(87, '6.066038', '80.262344', '42.97', '2016-11-14', '14:45:41', 'AG-1998'),
(88, '6.065341', '80.262077', '0.07', '2016-11-14', '14:46:22', 'AG-1998'),
(89, '6.065261', '80.262054', '0.13', '2016-11-14', '14:47:03', 'AG-1998'),
(90, '6.062776', '80.261536', '47.67', '2016-11-14', '14:47:44', 'AG-1998'),
(91, '6.056939', '80.260483', '65.26', '2016-11-14', '14:48:25', 'AG-1998'),
(92, '6.050798', '80.257248', '53.86', '2016-11-14', '14:49:06', 'AG-1998'),
(93, '6.045334', '80.253616', '68.69', '2016-11-14', '14:49:47', 'AG-1998'),
(94, '6.038837', '80.250275', '50.58', '2016-11-14', '14:50:28', 'AG-1998'),
(95, '6.035172', '80.247536', '64.52', '2016-11-14', '14:51:09', 'AG-1998'),
(99, '6.077826', '80.192024', '0.19', '2016-11-17', '20:14:27', 'AG-1998'),
(100, '6.077791', '80.192039', '1.65', '2016-11-17', '20:15:08', 'AG-1998'),
(101, '6.077862', '80.192078', '0.93', '2016-11-17', '20:15:49', 'AG-1998'),
(102, '6.077911', '80.192070', '0.69', '2016-11-17', '20:16:36', 'AG-1998'),
(103, '6.077942', '80.192085', '0.69', '2016-11-17', '20:17:18', 'AG-1998'),
(104, '6.077935', '80.192101', '1.15', '2016-11-17', '20:20:02', 'AG-1998'),
(105, '6.078123', '80.192467', '0.37', '2016-11-17', '20:26:41', 'AG-1998'),
(106, '6.078061', '80.192345', '0.37', '2016-11-17', '20:27:23', 'AG-1998'),
(107, '6.077809', '80.192085', '1.02', '2016-11-17', '20:28:04', 'AG-1998'),
(108, '6.077901', '80.192139', '1.39', '2016-11-17', '20:28:45', 'AG-1998'),
(109, '6.077988', '80.192146', '1.39', '2016-11-17', '20:29:27', 'AG-1998'),
(110, '6.077946', '80.192139', '0.96', '2016-11-17', '20:30:08', 'AG-1998'),
(111, '6.077939', '80.192162', '3.98', '2016-11-17', '20:30:49', 'AG-1998'),
(112, '6.077924', '80.192154', '2.94', '2016-11-17', '20:31:31', 'AG-1998'),
(113, '6.078591', '80.191986', '2.94', '2016-11-17', '20:32:13', 'AG-1998'),
(114, '6.077902', '80.192078', '0.69', '2016-11-17', '20:32:54', 'AG-1998'),
(115, '6.077981', '80.192238', '0.69', '2016-11-17', '20:33:57', 'AG-1998'),
(116, '6.078035', '80.192253', '0.69', '2016-11-17', '20:34:38', 'AG-1998'),
(117, '6.078036', '80.192162', '0.69', '2016-11-17', '20:35:19', 'AG-1998'),
(118, '6.077983', '80.192116', '0.57', '2016-11-17', '20:36:00', 'AG-1998'),
(119, '6.077949', '80.192192', '0.78', '2016-11-17', '20:36:41', 'AG-1998'),
(120, '6.077921', '80.192162', '0.26', '2016-11-17', '20:37:22', 'AG-1998'),
(121, '6.077891', '80.192192', '1.96', '2016-11-17', '20:38:03', 'AG-1998'),
(122, '6.077952', '80.192200', '0.43', '2016-11-17', '20:38:45', 'AG-1998'),
(123, '6.077878', '80.192078', '1.17', '2016-11-17', '20:50:04', 'AG-1998'),
(124, '6.078047', '80.192200', '1.17', '2016-11-17', '20:50:42', 'AG-1998'),
(125, '6.077815', '80.192192', '1.63', '2016-11-17', '20:51:22', 'AG-1998'),
(126, '6.077942', '80.192047', '5.65', '2016-11-17', '20:52:00', 'AG-1998'),
(127, '6.077653', '80.192169', '2.67', '2016-11-17', '20:52:38', 'AG-1998'),
(128, '6.077934', '80.192047', '2.67', '2016-11-17', '20:53:16', 'AG-1998'),
(129, '6.077965', '80.192093', '1.17', '2016-11-17', '20:53:54', 'AG-1998'),
(130, '6.077776', '80.192032', '1.26', '2016-11-17', '20:54:32', 'AG-1998'),
(131, '6.077907', '80.191933', '1.30', '2016-11-17', '20:55:10', 'AG-1998'),
(132, '6.077949', '80.191940', '1.78', '2016-11-17', '20:55:48', 'AG-1998'),
(133, '6.077956', '80.192154', '1.57', '2016-11-17', '20:57:04', 'AG-1998'),
(134, '6.077911', '80.192062', '1.57', '2016-11-17', '20:57:42', 'AG-1998'),
(135, '6.077754', '80.192101', '2.74', '2016-11-17', '20:58:20', 'AG-1998'),
(136, '6.077775', '80.192139', '2.39', '2016-11-17', '20:58:58', 'AG-1998'),
(137, '6.077729', '80.192261', '0.94', '2016-11-17', '20:59:36', 'AG-1998'),
(138, '6.078020', '80.192162', '1.20', '2016-11-17', '21:41:26', 'AG-1998'),
(139, '6.077869', '80.192093', '0.02', '2016-11-17', '21:42:05', 'AG-1998'),
(140, '', '', '', '1970-01-01', '21:42:44', ''),
(141, '6.077471', '80.191956', '3.82', '2016-11-17', '21:42:58', 'AG-1998'),
(142, '6.077316', '80.191902', '3.82', '2016-11-17', '21:43:32', 'AG-1998'),
(143, '6.077771', '80.191635', '3.35', '2016-11-18', '21:00:45', 'AG-1998'),
(144, '6.077629', '80.191856', '2.87', '2016-11-18', '21:01:23', 'AG-1998'),
(145, '6.077853', '80.191925', '1.96', '2016-11-18', '21:02:01', 'AG-1998'),
(146, '6.077848', '80.192062', '1.96', '2016-11-18', '21:02:39', 'AG-1998'),
(147, '6.077723', '80.191956', '2.24', '2016-11-18', '21:03:17', 'AG-1998'),
(148, '6.077843', '80.191849', '1.80', '2016-11-18', '21:04:23', 'AG-1998'),
(149, '6.077653', '80.191750', '2.57', '2016-11-18', '21:07:00', 'AG-1998'),
(150, '6.077767', '80.191963', '0.74', '2016-11-18', '21:08:03', 'AG-1998'),
(151, '6.077815', '80.192101', '6.76', '2016-11-18', '21:08:41', 'AG-1998'),
(152, '6.078265', '80.192253', '3.17', '2016-11-18', '21:09:19', 'AG-1998'),
(153, '6.077768', '80.191795', '4.43', '2016-11-18', '21:09:57', 'AG-1998'),
(154, '6.077982', '80.192001', '5.00', '2016-11-18', '21:11:04', 'AG-1998'),
(155, '6.077689', '80.192131', '2.30', '2016-11-18', '21:11:42', 'AG-1998'),
(156, '6.077741', '80.191925', '7.13', '2016-11-18', '21:12:20', 'AG-1998'),
(157, '6.077782', '80.192421', '14.87', '2016-11-18', '21:13:01', 'AG-1998'),
(158, '6.077858', '80.192314', '2.11', '2016-11-18', '21:13:39', 'AG-1998'),
(159, '6.077929', '80.191963', '5.59', '2016-11-18', '21:14:17', 'AG-1998'),
(160, '6.077721', '80.192024', '2.78', '2016-11-18', '21:14:55', 'AG-1998'),
(161, '6.077791', '80.192047', '0.44', '2016-11-18', '23:49:21', 'SH-8258'),
(162, '6.077540', '80.192039', '4.19', '2016-11-18', '23:50:05', 'SH-8258'),
(163, '6.077794', '80.192001', '4.19', '2016-11-18', '23:50:47', 'SH-8258'),
(164, '6.078392', '80.192009', '2.96', '2016-11-18', '23:53:53', 'SH-8258'),
(165, '6.077909', '80.192032', '1.78', '2016-11-18', '23:54:47', 'SH-8258'),
(166, '6.077879', '80.192009', '0.19', '2016-11-18', '23:55:28', 'SH-8258'),
(167, '6.077758', '80.192039', '0.59', '2016-11-18', '23:56:09', 'SH-8258'),
(168, '6.077656', '80.192055', '0.59', '2016-11-18', '23:56:51', 'SH-8258'),
(169, '6.077693', '80.192047', '0.59', '2016-11-18', '23:57:32', 'SH-8258'),
(170, '6.077560', '80.191994', '2.98', '2016-11-18', '23:58:13', 'SH-8258'),
(171, '6.077490', '80.192055', '0.59', '2016-11-18', '23:58:54', 'SH-8258'),
(172, '6.077659', '80.192047', '0.59', '2016-11-18', '23:59:36', 'SH-8258'),
(173, '6.077705', '80.192039', '0.59', '2016-11-18', '00:00:17', 'SH-8258'),
(174, '6.077801', '80.192047', '2.20', '2016-11-18', '00:00:58', 'SH-8258'),
(175, '6.077439', '80.191956', '-1.00', '1999-11-30', '00:03:46', 'SH-8258');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nic`, `contact`, `userid`, `password`) VALUES
(2, 'Thanujan', '942092490V', '0756262526', 'Test', '123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleno` varchar(100) NOT NULL,
  `busroute` varchar(100) NOT NULL,
  `drivername` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
