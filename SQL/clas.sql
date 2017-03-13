/*
Navicat MySQL Data Transfer

Source Server         : baoming
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : baoming

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-09-07 23:36:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clas
-- ----------------------------
DROP TABLE IF EXISTS `clas`;
CREATE TABLE `clas` (
  `classs_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tea_name` varchar(255) DEFAULT NULL,
  `recommend_year` varchar(255) DEFAULT NULL,
  `credit` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`classs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
