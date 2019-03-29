-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019-03-29 11:55:51
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `personnel`
--

-- --------------------------------------------------------

--
-- 表的结构 `attence`
--

CREATE TABLE IF NOT EXISTS `attence` (
  `attence_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` text NOT NULL,
  PRIMARY KEY (`attence_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `attence`
--

INSERT INTO `attence` (`attence_id`, `emp_id`, `time`, `remarks`) VALUES
(1, '1', '2019-03-30 06:49:56', ''),
(3, '3', '2019-03-28 07:04:00', '');

-- --------------------------------------------------------

--
-- 表的结构 `dayoff`
--

CREATE TABLE IF NOT EXISTS `dayoff` (
  `dayoff_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) DEFAULT NULL,
  `reason` tinytext COMMENT '请假原因',
  `start` timestamp NOT NULL,
  `end` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dayoff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `dayoff`
--

INSERT INTO `dayoff` (`dayoff_id`, `emp_id`, `reason`, `start`, `end`) VALUES
(1, '1', '6666', '2018-12-31 16:00:00', '2019-03-27 13:33:27'),
(2, '2', '53145', '2000-02-27 16:00:00', '2019-03-18 16:00:00'),
(3, '2', '2', '2019-03-20 12:24:02', '2019-03-20 16:00:00'),
(4, '1', '1', '2019-03-20 12:24:21', '2019-03-27 16:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` varchar(20) NOT NULL DEFAULT '',
  `dept_name` varchar(50) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`, `createdate`) VALUES
('jie001', '技术部', '2019-03-29 09:58:21'),
('jie002', '运营部', '2019-03-05 09:58:21'),
('jie003', '财务部', '2019-03-05 09:58:21'),
('jie004', '行政部', '2019-03-05 09:58:21'),
('jie005', '市场部', '2019-03-05 09:58:21'),
('jie006', '教学部', '2019-03-05 09:58:21'),
('cc31', 'jie1', '2019-03-05 09:58:21'),
('323', '323', '2019-03-06 10:50:32');

-- --------------------------------------------------------

--
-- 表的结构 `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sex` char(2) DEFAULT '男',
  `birthday` char(20) DEFAULT NULL,
  `education` varchar(10) DEFAULT NULL,
  `join_date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `emp`
--

INSERT INTO `emp` (`emp_id`, `dept_id`, `name`, `address`, `tel`, `email`, `sex`, `birthday`, `education`, `join_date`) VALUES
(1, 'jie001', '爱丽丝12', '广州天河', '220-77777777', '251425887@qq.com', '女', '1996', '博士', '2016-03-14 11:35:18'),
(2, 'jie003', '杰克', '43234', '42242', '251425887@qq.com', '女', '1996', '小学', '2016-03-14 11:35:18'),
(3, 'jie004', 'bb', '广州', '020-99999999', '36750064@qq.com', '女', '1977-11-25 00:00:00', '本科', '2016-07-14 09:54:52'),
(10, 'jie001', '博士11', '广州', '134328071', '936416416@ww.com', '女', '1996', '硕士', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` varchar(20) NOT NULL DEFAULT '',
  `dept_id` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `desc` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `job`
--

INSERT INTO `job` (`job_id`, `dept_id`, `name`, `desc`) VALUES
('2', 'jie001', 'Java开发工程师', 'Java开发工程师'),
('3', 'jie001', 'Java中级开发工程师', 'Java中级开发工程师'),
('4', 'jie001', 'Java高级开发工程师', 'Java高级开发工程师'),
('5', 'jie001', '系统管理员', '系统管理员'),
('6', 'jie001', '架构师', '架构师'),
('7', 'jie004', '主管', '主管'),
('8', 'jie004', '经理', '经理'),
('9', 'jie005', '总经理', '总经理');

-- --------------------------------------------------------

--
-- 表的结构 `leaveoff`
--

CREATE TABLE IF NOT EXISTS `leaveoff` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reason` text NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `leaveoff`
--

INSERT INTO `leaveoff` (`leave_id`, `emp_id`, `date`, `reason`) VALUES
(1, '1', '2019-03-04 13:47:11', '123464545'),
(2, '2', '2019-03-04 13:48:03', '232423423'),
(4, '3', '0000-00-00 00:00:00', '5646546654jie');

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `content`, `create_date`) VALUES
(1, '1112', '132323', '2019-03-03 14:32:39'),
(2, '555', 'root@localhost', '2019-03-02 16:00:00'),
(3, '56565', '555546+54', '2019-03-03 14:35:35');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `loginname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `createdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nickname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `loginname` (`loginname`),
  KEY `createdate` (`createdate`),
  KEY `createdate_2` (`createdate`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `loginname`, `password`, `status`, `createdate`, `nickname`) VALUES
(1, 'admin', '123456', 0, '2016-03-12 01:34:28', '超级管理员'),
(17, 'uu', 'uu', 1, '2019-03-06 10:44:17', 'uu'),
(19, 'zj', 'zj', 1, '2019-03-25 08:23:44', ''),
(9, 'jie', 'jie', 1, '2019-03-05 08:33:17', 'jie'),
(10, '111', '111', 0, '2019-03-05 08:33:26', '111'),
(11, '222', '222', 1, '2019-03-05 08:37:22', '222'),
(12, '333', '333', 0, '2019-03-05 08:38:42', '333'),
(15, '444', '444', 1, '2019-03-05 08:41:48', '444'),
(18, 'gg', 'gg', 1, '2019-03-06 10:45:17', 'gg'),
(20, 'zj2', 'zj2', 1, '2019-03-25 08:24:43', 'zj2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
