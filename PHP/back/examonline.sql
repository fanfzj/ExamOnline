# Host: localhost  (Version: 5.5.34)
# Date: 2013-12-19 22:57:28
# Generator: MySQL-Front 5.3  (Build 4.43)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "db_bj"
#

DROP TABLE IF EXISTS `db_bj`;
CREATE TABLE `db_bj` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `bjid` int(11) NOT NULL COMMENT '班级id',
  `bjname` varchar(255) NOT NULL COMMENT '班级名字',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='班级表';

#
# Data for table "db_bj"
#

/*!40000 ALTER TABLE `db_bj` DISABLE KEYS */;
INSERT INTO `db_bj` VALUES (1,1,'1班'),(2,2,'2班');
/*!40000 ALTER TABLE `db_bj` ENABLE KEYS */;

#
# Structure for table "db_xy"
#

DROP TABLE IF EXISTS `db_xy`;
CREATE TABLE `db_xy` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `xyid` int(11) NOT NULL COMMENT '学院id',
  `xyname` varchar(255) NOT NULL COMMENT '学院名字',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='专业表';

#
# Data for table "db_xy"
#

/*!40000 ALTER TABLE `db_xy` DISABLE KEYS */;
INSERT INTO `db_xy` VALUES (1,1,'计算机科学与控制工程学院'),(2,2,'理学院');
/*!40000 ALTER TABLE `db_xy` ENABLE KEYS */;

#
# Structure for table "db_zy"
#

DROP TABLE IF EXISTS `db_zy`;
CREATE TABLE `db_zy` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `zyid` int(11) NOT NULL COMMENT '专业id',
  `zyname` varchar(255) NOT NULL COMMENT '专业名字',
  `xyid` int(11) NOT NULL COMMENT '学院id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='专业表';

#
# Data for table "db_zy"
#

/*!40000 ALTER TABLE `db_zy` DISABLE KEYS */;
INSERT INTO `db_zy` VALUES (1,1,'计算机科学与技术',1),(2,2,'软件工程',1);
/*!40000 ALTER TABLE `db_zy` ENABLE KEYS */;

#
# Structure for table "exam_pd"
#

DROP TABLE IF EXISTS `exam_pd`;
CREATE TABLE `exam_pd` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动变量',
  `pdid` int(11) NOT NULL DEFAULT '0' COMMENT '判断题题号',
  `pd` varchar(255) NOT NULL DEFAULT '' COMMENT '判断题题干',
  `answer` varchar(255) NOT NULL DEFAULT '' COMMENT '判断题答案',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='判断题';

#
# Data for table "exam_pd"
#

/*!40000 ALTER TABLE `exam_pd` DISABLE KEYS */;
INSERT INTO `exam_pd` VALUES (1,1,'对与错','T'),(2,1,'好与坏','T');
/*!40000 ALTER TABLE `exam_pd` ENABLE KEYS */;

#
# Structure for table "exam_score"
#

DROP TABLE IF EXISTS `exam_score`;
CREATE TABLE `exam_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `sno` int(11) NOT NULL COMMENT '学号',
  `km` varchar(255) NOT NULL COMMENT '科目',
  `tk` int(11) NOT NULL COMMENT '填空题',
  `xz` int(11) NOT NULL COMMENT '选择题',
  `dx` int(11) NOT NULL COMMENT '多选题',
  `px` int(11) NOT NULL COMMENT '排序题',
  `pd` int(11) NOT NULL COMMENT '判断题',
  `jd` int(11) NOT NULL COMMENT '简答题',
  `score` int(11) DEFAULT NULL COMMENT '总分',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='考试成绩表';

#
# Data for table "exam_score"
#

/*!40000 ALTER TABLE `exam_score` DISABLE KEYS */;
INSERT INTO `exam_score` VALUES (1,2012021039,'JAVA',10,10,10,10,20,20,80),(2,2012021039,'英语',5,5,5,20,10,20,65),(3,2012021039,'c++',5,20,10,30,10,20,95);
/*!40000 ALTER TABLE `exam_score` ENABLE KEYS */;

#
# Structure for table "stu_user"
#

DROP TABLE IF EXISTS `stu_user`;
CREATE TABLE `stu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `user` varchar(50) NOT NULL COMMENT '用户名',
  `pwd` varchar(50) NOT NULL COMMENT '密码',
  `truepwd` varchar(50) NOT NULL COMMENT '真实密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='学生表';

#
# Data for table "stu_user"
#

/*!40000 ALTER TABLE `stu_user` DISABLE KEYS */;
INSERT INTO `stu_user` VALUES (1,'fanfzj','6400dd70fbe6646e53834320cc6c1ac1','you123123');
/*!40000 ALTER TABLE `stu_user` ENABLE KEYS */;

#
# Structure for table "tea_user"
#

DROP TABLE IF EXISTS `tea_user`;
CREATE TABLE `tea_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `user` varchar(50) NOT NULL COMMENT '用户名',
  `pwd` varchar(50) NOT NULL COMMENT '密码',
  `truepwd` varchar(50) NOT NULL COMMENT '真实密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='教师表';

#
# Data for table "tea_user"
#

/*!40000 ALTER TABLE `tea_user` DISABLE KEYS */;
INSERT INTO `tea_user` VALUES (1,'root','63a9f0ea7bb98050796b649e85481845','root');
/*!40000 ALTER TABLE `tea_user` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `user` varchar(255) NOT NULL DEFAULT '',
  `sno` int(11) NOT NULL COMMENT '学号',
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='学生信息表';

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'fanfzj',2012021039,'范志俊','男','1992-11-28','汉族',1,1,2,'310102199211284413','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

#
# Procedure "Grade"
#

DROP PROCEDURE IF EXISTS `Grade`;
CREATE PROCEDURE `Grade`(IN `no` INT)
    NO SQL
update exam_score set score=tk+xz+dx+px+pd+jd where sno=no;
