-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2015 at 08:00 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Book_name` varchar(50) NOT NULL,
  `Author_name` varchar(30) NOT NULL,
  `Acc_no` int(11) NOT NULL,
  `Section_no` text NOT NULL,
  `Catagory` text NOT NULL,
  `Date` date NOT NULL,
  `Price` decimal(11,2) NOT NULL,
  `Current_user` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL DEFAULT 'allmix.png',
  `Issue_date` text NOT NULL,
  PRIMARY KEY (`Acc_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_name`, `Author_name`, `Acc_no`, `Section_no`, `Catagory`, `Date`, `Price`, `Current_user`, `img_path`, `Issue_date`) VALUES
('Data Structure', 'KSC', 1, 'CS01', 'CS', '2015-08-31', '450.00', 4, 'favicon.png', '14-08-15'),
('Mathamatics-3', 'DSC', 2, 'MAT01', 'MT', '2015-08-18', '300.00', 1, 'favicon.png', '14-08-15'),
('Human Respiratory System', 'Grewal', 3, 'BI01', 'BI', '2015-08-18', '300.00', 3, 'favicon.png', '15-08-15'),
('surface engg.', 'Dr.Srinivasa', 4, 'ME01', 'ME', '2015-08-18', '400.00', 6, 'favicon.png', '26-08-15'),
('ABCD', 'ZX', 5, 'EC01', 'EC', '2015-08-10', '100.00', 0, 'favicon.png', ''),
('Data Communication', 'Robert', 6, 'EC002', 'EC', '2015-08-21', '380.00', 4, 'favicon.png', '14-08-15'),
('Unix Programming system', 'Schildt', 7, 'CS02', 'CS', '2015-08-05', '460.00', 2, 'favicon.png', '15-08-15'),
('Wireless Communication', 'Mike', 8, 'EC003', 'EC', '2015-08-21', '400.00', 0, 'favicon.png', ''),
('Java Programming', 'Schildt', 9, 'CS003', 'CS', '2015-08-12', '500.00', 0, 'favicon.png', ''),
('Operating System', 'Mr.OS', 10, 'CS004', 'CS', '2015-08-27', '340.00', 0, 'favicon.png', ''),
('Operating System', 'Mr.OS', 11, 'CS004', 'CS', '2015-08-27', '340.00', 0, 'favicon.png', ''),
('Python Programming', 'Mr.OS', 12, 'CS004', 'CS', '2015-08-27', '340.00', 12, 'favicon.png', '14-08-15'),
('Building Construction', 'Dr.Basappa', 13, 'CV001', 'CV', '2015-12-31', '300.00', 0, 'favicon.png', ''),
('Cement technology', 'Dr.Chennabasappa', 14, 'CI002', 'CV', '2015-08-27', '500.00', 0, 'favicon.png', ''),
('Materology', 'Dr.Srinivasa', 15, 'BI002', 'BI', '2015-08-19', '600.00', 0, 'favicon.png', ''),
('Cement technology-2', 'Dr.Chennabasappa', 16, 'CI003', 'CV', '2015-08-27', '500.00', 0, 'favicon.png', ''),
('Graph Theory', 'Dr.KSC', 17, 'MT003', 'MT', '2015-06-10', '500.00', 0, 'favicon.png', ''),
('C++ Programing', 'Shildt', 18, 'CS005', 'CS', '2015-08-13', '800.00', 0, 'favicon.png', ''),
('Evaluations of Dinasours', 'Da vinchi', 19, 'BI006', 'BI', '2015-08-22', '800.00', 0, '', ''),
('Regression theory', 'Dr.DSC', 20, 'MT005', 'MT', '2015-08-14', '800.00', 8, 'WP_20150325_10_44_04_Pro.jpg', '26-08-15'),
('Field Theory', 'Bhakshi', 21, 'EC004', 'EC', '0001-11-11', '450.00', 0, 'WP_20150410_14_28_39_Pro.jpg', ''),
('Mechanical forces', 'Dr.srinvasa', 22, 'ME002', 'ME', '2015-08-16', '330.00', 3, '2014_09_02_16_03_40_OneShot.jpg', '14-08-15'),
('Mechanical forces', 'Dr.rajendra', 23, 'ME003', 'ME', '2015-08-16', '330.00', 1, '2014_09_02_16_03_40_OneShot2.jpg', '14-08-15'),
('Mechanical forces', 'Dr.rajendra', 24, 'ME003', 'ME', '2015-08-16', '330.00', 0, '2014_09_02_16_03_40_OneShot4.jpg', ''),
('Mechanical forces', 'Dr.rajendra', 25, 'ME003', 'ME', '2015-08-16', '330.00', 0, '2014_09_02_16_03_40_OneShot6.jpg', ''),
('electronics', 'Dr.Diode', 26, 'EC005', 'EC', '2015-08-25', '110.00', 0, 'allmix.jpeg', ''),
('electronics', 'Dr.Diode', 27, 'EC006', 'EC', '2015-08-25', '110.00', 9, 'favicon.png', '26-08-15'),
('electronics', 'Dr.Diode', 28, 'EC007', 'EC', '2015-08-25', '110.00', 0, 'favicon.png', ''),
('test', 'test', 29, '22', 'CS', '2015-08-22', '11.00', 10, 'favicon.png', '26-08-15'),
('Evaluations of Dinasours-2', 'Da vinchi', 30, 'BI007', 'BI', '2015-08-22', '800.00', 0, 'allmix.png', ''),
('Evaluations of Dinasours-3', 'Da vinchi', 31, 'BI007', 'BI', '2015-08-22', '800.00', 0, 'allmix.png', ''),
('Evaluations of humans-1', 'Da vinchi', 32, 'BI007', 'BI', '2015-08-22', '800.00', 0, ' allmix.png', ''),
('Evaluations of humans-2', 'Da vinchi', 33, 'BI007', 'BI', '2015-08-22', '800.00', 0, 'allmix.png', ''),
('Evaluations of humans-2', 'Da vinchi', 34, 'BI007', 'BI', '2015-08-22', '800.00', 0, '16228_428711593950528_2482271111390774213_n.jpg', ''),
('Data mining', 'dr.miner', 35, 'MT007', 'MT', '2015-08-06', '220.00', 0, '22.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_history`
--

CREATE TABLE IF NOT EXISTS `book_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `acc_no` int(11) NOT NULL,
  `Issue date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `book_history`
--

INSERT INTO `book_history` (`id`, `user_id`, `acc_no`, `Issue date`) VALUES
(1, 3, 19, '0000-00-00 00:00:00'),
(2, 6, 17, '0000-00-00 00:00:00'),
(3, 5, 18, '0000-00-00 00:00:00'),
(4, 6, 4, '0000-00-00 00:00:00'),
(5, 9, 10, '0000-00-00 00:00:00'),
(6, 9, 28, '0000-00-00 00:00:00'),
(7, 10, 27, '0000-00-00 00:00:00'),
(8, 10, 25, '0000-00-00 00:00:00'),
(9, 10, 23, '0000-00-00 00:00:00'),
(10, 1, 1, '0000-00-00 00:00:00'),
(11, 1, 2, '0000-00-00 00:00:00'),
(12, 1, 3, '0000-00-00 00:00:00'),
(13, 1, 4, '0000-00-00 00:00:00'),
(14, 1, 5, '0000-00-00 00:00:00'),
(15, 2, 6, '2015-08-13 10:38:25'),
(16, 12, 7, '2015-08-13 12:58:50'),
(17, 14, 14, '2015-08-13 15:38:00'),
(18, 4, 1, '2015-08-14 15:30:10'),
(19, 1, 2, '2015-08-14 15:34:24'),
(20, 1, 23, '2015-08-14 15:34:30'),
(21, 3, 22, '2015-08-14 15:34:37'),
(22, 4, 6, '2015-08-14 15:34:43'),
(23, 12, 12, '2015-08-14 15:36:26'),
(24, 3, 3, '2015-08-15 14:45:36'),
(25, 2, 7, '2015-08-15 14:46:20'),
(26, 16, 4, '2015-08-15 20:08:26'),
(27, 6, 4, '2015-08-26 14:58:27'),
(28, 8, 20, '2015-08-26 14:59:00'),
(29, 9, 27, '2015-08-26 14:59:18'),
(30, 10, 29, '2015-08-26 14:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'demo', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `book_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `book_count`) VALUES
(1, 'vasant', 2),
(2, 'sumant', 1),
(3, 'mahendra', 2),
(4, 'pujith', 2),
(5, 'navada', 0),
(6, 'vinay', 1),
(7, 'ramesh', 0),
(8, 'ananth bhat', 1),
(9, 'Rama Bhat', 1),
(10, 'Sandheep', 1),
(11, 'Rajesh', 0),
(12, 'vishwas hegde', 1),
(13, 'Harsha', 0),
(14, 'manjunath hegde', 0),
(15, 'raj', 0),
(16, 'vinay hegde', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
