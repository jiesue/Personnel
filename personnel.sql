-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019-03-08 12:35:28
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
-- 表的结构 `dayoff`
--

CREATE TABLE IF NOT EXISTS `dayoff` (
  `dayoff_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) DEFAULT NULL,
  `start` timestamp NOT NULL,
  `end` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dayoff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `dayoff`
--

INSERT INTO `dayoff` (`dayoff_id`, `emp_id`, `start`, `end`) VALUES
(1, '1', '2019-03-04 13:34:27', '2019-03-27 13:33:27'),
(2, '2', '2019-03-04 13:34:50', '2019-03-18 16:00:00');

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
('1', '技术部', '2019-03-05 09:58:21'),
('2', '运营部', '2019-03-05 09:58:21'),
('3', '财务部', '2019-03-05 09:58:21'),
('5', '总公办', '2019-03-05 09:58:21'),
('6', '市场部', '2019-03-05 09:58:21'),
('7', '教学部', '2019-03-05 09:58:21'),
('cc31', 'jie1', '2019-03-05 09:58:21'),
('323', '323', '2019-03-06 10:50:32'),
('34234', '234', '2019-03-06 10:52:11');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `emp`
--

INSERT INTO `emp` (`emp_id`, `dept_id`, `name`, `address`, `tel`, `email`, `sex`, `birthday`, `education`, `join_date`) VALUES
(1, '1', '爱丽丝', '广州天河', '020-77777777', '251425887@qq.com', '男', '1980-01-01 00:00:00', '本科', '2016-03-14 11:35:18'),
(2, '3', '杰克', '43234', '42242', '251425887@qq.com', '女', NULL, '1', '2016-03-14 11:35:18'),
(3, '1', 'bb', '广州', '020-99999999', '36750064@qq.com', '女', '1977-11-25 00:00:00', '本科', '2016-07-14 09:54:52'),
(5, '1', '1', '1', NULL, '1', '女', NULL, '1', NULL);

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
('1', '0', '职员1', '职员'),
('2', '0', 'Java开发工程师', 'Java开发工程师'),
('3', '0', 'Java中级开发工程师', 'Java中级开发工程师'),
('4', '0', 'Java高级开发工程师', 'Java高级开发工程师'),
('5', '0', '系统管理员', '系统管理员'),
('6', '0', '架构师', '架构师'),
('7', '0', '主管', '主管'),
('8', '0', '经理', '经理'),
('9', '0', '总经理', '总经理'),
('10', '0', '2', '2'),
('11', '0', '1', '2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- 表的结构 `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reason` text NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `leave`
--

INSERT INTO `leave` (`leave_id`, `emp_id`, `date`, `reason`) VALUES
(1, '1', '2019-03-04 13:47:11', '123464545'),
(2, '2', '2019-03-04 13:48:03', '232423423'),
(3, '3', '2019-03-19 16:00:00', 'ewrwerwerwer');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `loginname`, `password`, `status`, `createdate`, `nickname`) VALUES
(1, 'admin', '123456', 0, '2016-03-12 01:34:28', '超级管理员'),
(17, 'uu', 'uu', 1, '2019-03-06 10:44:17', 'uu'),
(9, 'jie', 'jie', 1, '2019-03-05 08:33:17', 'jie'),
(10, '111', '111', 0, '2019-03-05 08:33:26', '111'),
(11, '222', '222', 1, '2019-03-05 08:37:22', '222'),
(12, '333', '333', 0, '2019-03-05 08:38:42', '333'),
(15, '444', '444', 1, '2019-03-05 08:41:48', '444'),
(18, 'gg', 'gg', 1, '2019-03-06 10:45:17', 'gg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
