/*
Navicat MySQL Data Transfer

Source Server         : baoming
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : baoming

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-09-07 23:36:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for select
-- ----------------------------
DROP TABLE IF EXISTS `select`;
CREATE TABLE `select` (
  `stud_sno` varchar(11) DEFAULT NULL,
  `classs_id` varchar(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
