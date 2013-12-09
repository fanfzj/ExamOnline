-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-12-07 23:50:39
-- 服务器版本: 5.5.34
-- PHP 版本: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `examonline`
--
CREATE DATABASE IF NOT EXISTS `examonline` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `examonline`;

DELIMITER $$
--
-- 存储过程
--
DROP PROCEDURE IF EXISTS `score`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `score`(IN `sno` INT)
    NO SQL
begin
   set @tk=(select tk from exam_score where sno=@sno);
   set @xz=(select xz from exam_score where sno=@sno);
   set @dx=(select dx from exam_score where sno=@sno);
   set @px=(select px from exam_score where sno=@sno);
   set @pd=(select pd from exam_score where sno=@sno);
   set @jd=(select jd from exam_score where sno=@sno);
   set @score=@tk+@xz+@dx+@px+@pd+@jd;
   update exam_score set score=@score where sno=@sno;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `db_bj`
--

DROP TABLE IF EXISTS `db_bj`;
CREATE TABLE IF NOT EXISTS `db_bj` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `bjid` int(11) NOT NULL COMMENT '班级id',
  `biname` varchar(255) NOT NULL COMMENT '班级名字',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='班级表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `db_xy`
--

DROP TABLE IF EXISTS `db_xy`;
CREATE TABLE IF NOT EXISTS `db_xy` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `xyid` int(11) NOT NULL COMMENT '学院id',
  `xyname` varchar(255) NOT NULL COMMENT '学院名字',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='专业表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `db_zy`
--

DROP TABLE IF EXISTS `db_zy`;
CREATE TABLE IF NOT EXISTS `db_zy` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `zyid` int(11) NOT NULL COMMENT '专业id',
  `zyname` varchar(255) NOT NULL COMMENT '专业名字',
  `xyid` int(11) NOT NULL COMMENT '学院id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='专业表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `exam_score`
--

DROP TABLE IF EXISTS `exam_score`;
CREATE TABLE IF NOT EXISTS `exam_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `sno` int(11) NOT NULL COMMENT '学号',
  `km` varchar(255) NOT NULL COMMENT '科目',
  `tk` int(11) NOT NULL COMMENT '填空题',
  `xz` int(11) NOT NULL COMMENT '选择题',
  `dx` int(11) NOT NULL COMMENT '多选题',
  `px` int(11) NOT NULL COMMENT '排序题',
  `pd` int(11) NOT NULL COMMENT '判断题',
  `jd` int(11) NOT NULL COMMENT '简答题',
  `score` int(11) NOT NULL COMMENT '总分',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='考试成绩表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `stu_user`
--

DROP TABLE IF EXISTS `stu_user`;
CREATE TABLE IF NOT EXISTS `stu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `user` varchar(50) NOT NULL COMMENT '用户名',
  `pwd` varchar(50) NOT NULL COMMENT '密码',
  `truepwd` varchar(50) NOT NULL COMMENT '真实密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tea_user`
--

DROP TABLE IF EXISTS `tea_user`;
CREATE TABLE IF NOT EXISTS `tea_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `user` varchar(50) NOT NULL COMMENT '用户名',
  `pwd` varchar(50) NOT NULL COMMENT '密码',
  `truepwd` varchar(50) NOT NULL COMMENT '真实密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='教师表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `sno` int(255) NOT NULL COMMENT '学号',
  `name` varchar(255) NOT NULL COMMENT '姓名',
  `sex` varchar(2) NOT NULL COMMENT '性别',
  `birthday` date NOT NULL COMMENT '出生日期',
  `nation` varchar(255) NOT NULL COMMENT '民族',
  `xyid` int(11) NOT NULL COMMENT '学院id',
  `zyid` int(11) NOT NULL COMMENT '专业id',
  `bjid` int(11) NOT NULL COMMENT '班级id',
  `ID_number` varchar(19) CHARACTER SET utf32 NOT NULL COMMENT '身份证号',
  `photo` varchar(255) CHARACTER SET utf32 NOT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='学生信息表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
