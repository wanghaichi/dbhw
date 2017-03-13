/*
Navicat MySQL Data Transfer

Source Server         : baoming
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : baoming

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-09-07 23:36:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for stud
-- ----------------------------
DROP TABLE IF EXISTS `stud`;
CREATE TABLE `stud` (
  `sno` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `in_age` varchar(255) DEFAULT NULL,
  `in_year` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
