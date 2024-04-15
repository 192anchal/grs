-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2024 at 09:53 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`, `dor`) VALUES
(1, 'admin@gmail.com', 'admin@123', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

DROP TABLE IF EXISTS `tbl_ans`;
CREATE TABLE IF NOT EXISTS `tbl_ans` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`aid`, `uid`, `qid`, `answer`, `date`) VALUES
(1, 14, 1, 'personal home page', '2023-09-15'),
(2, 14, 1, 'Hyper Text Preprocesser ', '2023-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

DROP TABLE IF EXISTS `tbl_college`;
CREATE TABLE IF NOT EXISTS `tbl_college` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `college` varchar(105) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`cid`, `college`, `status`, `dor`) VALUES
(35, 'M. R. M. College, Darbhanga', 'N', '2023-09-12'),
(31, 'C. M. College, Darbhanga', 'N', '2023-09-12'),
(32, 'C. M. Science College, Darbhanga', 'N', '2023-09-12'),
(33, 'C. M. Law College, Darbhanga', 'N', '2023-09-12'),
(34, 'Marwari College, Darbhanga', 'N', '2023-09-12'),
(36, 'K. S. College, Laheriasarai, Darbhanga', 'N', '2023-09-12'),
(37, 'M. K. College, Laheriasarai, Darbhanga', 'N', '2023-09-12'),
(38, 'Millat College, Laheriasarai, Darbhanga', 'N', '2023-09-12'),
(39, 'M. L. S. M. College, Darbhanga', 'N', '2023-09-12'),
(40, 'B. M. A. College, Baheri, Darbhanga', 'N', '2023-09-12'),
(41, 'M. K. S. College, Trimuhan Chandauna, Darbhanga', 'N', '2023-09-12'),
(42, 'J. K. College, Biraul, Darbhanga', 'N', '2023-09-12'),
(43, 'J. N. College, Nehra, Darbhanga', 'N', '2023-09-12'),
(44, 'R. K. College, Madhubani', 'N', '2023-09-12'),
(45, 'J. N. College, Madhubani', 'N', '2023-09-12'),
(46, 'R. N. College, Pandaul, Madhubani', 'N', '2023-09-12'),
(47, 'B. M. College, Rahika, Madhubani', 'N', '2023-09-12'),
(48, 'K. V. Sc. College, Ucchaith, Madhubani', 'N', '2023-09-12'),
(49, ' J. M. D. P. L. Mahila College, Madhubani', 'N', '2023-09-12'),
(50, 'L. N. J. College, Jhanjharupr, Madhubani', 'N', '2023-09-12'),
(51, 'M. L. S. College, Sarisabpahi, Madhubani', 'N', '2023-09-12'),
(52, 'H. P. S. College, Madhepur, Madhubani', 'N', '2023-09-12'),
(53, 'C. M. J. College, Downwarihat, Madhubani', 'N', '2023-09-12'),
(54, 'C. M. B. College, Deorh, Ghoghardiha, Madhubani', 'N', '2023-09-12'),
(55, 'D. B. College, Jaynagar, Madhubani', 'N', '2023-09-12'),
(56, 'V. S. J. College, Rajnagar, Madhubani', 'N', '2023-09-12'),
(57, 'Samastipur College, Samastipur', 'N', '2023-09-12'),
(58, 'R. N. A. R. College, Samastipur', 'N', '2023-09-12'),
(59, 'B. R. B. College, Samastipur', 'N', '2023-09-12'),
(60, 'A. N. D. College, Shahpur Patory, Samastipur', 'N', '2023-09-12'),
(61, 'R. B. S. College, Andaur, Samastipur', 'N', '2023-09-12'),
(62, 'R. B. College, Dalsinghsarai, Samastipur', 'N', '2023-09-12'),
(63, 'U. P. College, Pusa, Samastipur', 'N', '2023-09-12'),
(64, 'Women’s College, Samastipur', 'N', '2023-09-12'),
(65, 'U. R. College, Rosera, Samastipur', 'N', '2023-09-12'),
(66, 'D. B. K. N. College, Narhan, Samastipur', 'N', '2023-09-12'),
(67, 'Dr. L. K. V. D. College, Tajpur, Samastipur', 'N', '2023-09-12'),
(68, 'G. M. R. D. College, Mohanpur, Samastipur', 'N', '2023-09-12'),
(69, 'G. D. College, Begusarai', 'N', '2023-09-12'),
(70, 'S. B. S. S. College, Begusarai', 'N', '2023-09-12'),
(71, 'S. K. M. College, Begusarai', 'N', '2023-09-12'),
(72, 'A. P. S. M. College, Barauni, Begusarai', 'N', '2023-09-12'),
(73, 'R. C. S. College, Manjhaul, Begusarai', 'N', '2023-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

DROP TABLE IF EXISTS `tbl_complain`;
CREATE TABLE IF NOT EXISTS `tbl_complain` (
  `cmpid` int(11) NOT NULL AUTO_INCREMENT,
  `ctid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `complain` varchar(200) NOT NULL,
  `doc` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  `docomplain` varchar(10) NOT NULL,
  PRIMARY KEY (`cmpid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`cmpid`, `ctid`, `uid`, `complain`, `doc`, `status`, `docomplain`) VALUES
(14, 12, 11, 'sir bus prob h', '2023-09-13', 'C', '2023-09-14'),
(9, 12, 11, 'sir bus ka rent bhut jada h sir', '2023-09-13', 'P', ''),
(10, 5, 12, 'sir mess me khana acha nhi aa rha', '2023-09-13', 'C', '2023-09-15'),
(8, 14, 11, 'sir hostal me khana time per nhi aa rha h', '2023-09-13', 'C', '2023-09-17'),
(16, 12, 14, 'sir bus me ac nahi chl rhe h', '2023-09-16', 'N', ''),
(17, 10, 14, 'sir labrary me book nhi mil rha hai', '2023-09-16', 'N', ''),
(18, 14, 11, 'sir hostal me gandgi bhut h', '2023-09-16', 'P', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain_type`
--

DROP TABLE IF EXISTS `tbl_complain_type`;
CREATE TABLE IF NOT EXISTS `tbl_complain_type` (
  `ctid` int(11) NOT NULL AUTO_INCREMENT,
  `complain` varchar(60) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`ctid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complain_type`
--

INSERT INTO `tbl_complain_type` (`ctid`, `complain`, `status`, `dor`) VALUES
(13, 'Fees', 'N', '2023-09-12'),
(14, 'Hostel', 'N', '2023-09-12'),
(5, 'Mess', 'N', '2023-09-09'),
(12, 'Bus Faclity', 'N', '2023-09-11'),
(7, 'Acadmic', 'N', '2023-09-09'),
(9, 'Sanitory', 'N', '2023-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

DROP TABLE IF EXISTS `tbl_ques`;
CREATE TABLE IF NOT EXISTS `tbl_ques` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`qid`, `uid`, `question`, `date`) VALUES
(1, 11, 'what is php', '2023-09-15'),
(5, 14, 'what is HTML', '2023-09-15'),
(7, 11, 'What is CSS ?', '2023-09-15'),
(8, 14, 'What is Java', '2024-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

DROP TABLE IF EXISTS `tbl_session`;
CREATE TABLE IF NOT EXISTS `tbl_session` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`sid`, `session`, `status`, `dor`) VALUES
(26, '2020-2023', 'N', '2023-09-12'),
(16, '2021-2024', 'N', '2023-09-07'),
(24, '2022-2025', 'N', '2023-09-11'),
(25, '2023-2026', 'N', '2023-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(12) NOT NULL,
  `pincode` int(11) NOT NULL,
  `course` varchar(20) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `status` varchar(5) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `dob`, `address`, `city`, `pincode`, `course`, `sid`, `cid`, `profile_pic`, `status`, `dor`) VALUES
(14, 'Trisha', 'Rajesh Kumar Mishra', 'female', 'trishamishrag2020@gmail.com', 'trisha#123', 6393087117, '2005-08-26', 'bihar', 'Muzaffarpur', 234532, 'M.Sc', 16, 36, 'photo1.jpg', 'N', '2023-09-13'),
(11, 'Harsh Mishra', 'Rajesh Kumar Mishra', 'male', 'harshmishra@gmail.com', 'harsh123', 8299188324, '2002-08-07', 'uruwa', 'Prayagraj', 212303, 'B.Com', 16, 39, 'photo2.jpg', 'N', '2023-09-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
