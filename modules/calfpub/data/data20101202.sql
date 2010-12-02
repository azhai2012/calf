-- phpMyAdmin SQL Dump
-- version 3.3.7deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 12 月 02 日 17:55
-- 服务器版本: 5.1.49
-- PHP 版本: 5.3.3-1ubuntu9.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hhyy`
--

-- --------------------------------------------------------

--
-- 表的结构 `enabled_modules`
--

CREATE TABLE IF NOT EXISTS `enabled_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `enabled_modules_project_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=365 ;

--
-- 转存表中的数据 `enabled_modules`
--

INSERT INTO `enabled_modules` (`id`, `role_id`, `name`) VALUES
(216, 344, 'spsz'),
(217, 344, 'gt'),
(218, 344, 'dy'),
(219, 344, 'ghs'),
(220, 344, 'rk'),
(221, 344, 'th'),
(222, 344, 'pd'),
(223, 344, 'bs'),
(267, 345, 'spsz'),
(268, 345, 'join'),
(269, 345, 'order'),
(270, 345, 'propose'),
(349, 346, 'meetjoin'),
(350, 346, 'meetropose'),
(351, 343, 'spsz'),
(352, 343, 'meet'),
(353, 343, 'meetjoin'),
(354, 343, 'meetorder'),
(355, 343, 'meetropose'),
(356, 343, 'supm'),
(357, 343, 'suporder'),
(358, 343, 'suppropose'),
(359, 343, 'supkc'),
(360, 343, 'suprk'),
(361, 343, 'supotk'),
(362, 343, 'supxs'),
(363, 343, 'ddbb'),
(364, 343, 'xsbb');

-- --------------------------------------------------------

--
-- 表的结构 `meets`
--

CREATE TABLE IF NOT EXISTS `meets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meet_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meet_begin_at` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meet_end_at` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `meet_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `meet_name` (`meet_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `meets`
--

INSERT INTO `meets` (`id`, `meet_name`, `meet_begin_at`, `meet_end_at`, `active`, `meet_description`) VALUES
(17, 'SADF', '2010-11-03', '2010-11-30', 'Y', '大富大贵古典风格   '),
(20, 'dsdsa', '2010-12-01', '2010-12-01', 'N', 'dsadsadsa');

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_code` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_spec` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_unit` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_origin` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_origin_code` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_pic_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_group` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_pzwh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `product_code`, `product_spec`, `product_unit`, `product_origin`, `product_origin_code`, `product_pic_url`, `product_group`, `product_pzwh`) VALUES
(3, '001', '阿莫西林胶囊', 'AMXL', '20g', '盒', '山东鲁抗药业有限公司', 'sdlkyyyxgs', '/media/images/a.jpg', '200', '国药准字20394955'),
(4, '0001', '第三方的四放大', '防盗锁分', '浮动幅度四', '为', '大放送大幅打', '的撒旦', NULL, NULL, '');

-- --------------------------------------------------------

--
-- 表的结构 `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=347 ;

--
-- 转存表中的数据 `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `permissions`) VALUES
(343, '管理员', '管理员（所有权限）', 'add_spsz|del_spsz|find_spsz|ex_spsz|add_meet|del_meet|find_meet|ex_meet|find_meetjoin|find_meetorder|ex_meetorder|find_meetropose|find_supm|find_suporder|ex_suporder|find_suppropose|find_supkc|ex_supkc|find_suprk|ex_suprk|find_supotk|ex_supotk|find_supxs|ex_supxs|find_ddbb|ex_ddbb|find_xsbb|ex_xsbb'),
(344, '用户', '普通用户', 'add_spsz|del_spsz|find_spsz|add_gt|del_gt|find_gt|add_dy|find_dy|add_ghs|find_ghs|add_rk|del_rk|find_rk|add_th|del_th|find_th|find_pd|find_bs|find_xq'),
(345, '一般用户', '一般用户', 'add_gt|find_gt|find_join|find_order|ex_order|find_propose'),
(346, '客户管理', '终端客户管理权限', 'find_meetjoin|find_meetorder|ex_meetorder|find_meetropose');

-- --------------------------------------------------------

--
-- 表的结构 `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `roles_users`
--


-- --------------------------------------------------------

--
-- 表的结构 `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meet_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `suppliers`
--

INSERT INTO `suppliers` (`id`, `sup_id`, `product_id`, `meet_id`) VALUES
(1, '343', '001', 17);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` char(50) NOT NULL,
  `last_login_on` varchar(20) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `create_login_on` varchar(20) NOT NULL,
  `last_login` int(10) unsigned DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `last_login_on`, `logins`, `create_login_on`, `last_login`, `role_id`) VALUES
(9, 'admin@gmail.com', 'admin', '00b7691d86d96aebd21dd9e138f90840', '', 0, '2010-11-29 11:17:42', NULL, 343),
(11, 'user@hhey.cn', 'user', '00b7691d86d96aebd21dd9e138f90840', '', 0, '2010-11-29 11:18:27', NULL, 345),
(12, 'A01@gmail.com', 'A01', '202cb962ac59075b964b07152d234b70', '', 0, '2010-11-30 09:40:34', NULL, 346);

-- --------------------------------------------------------

--
-- 表的结构 `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `user_tokens`
--


--
-- 限制导出的表
--

--
-- 限制表 `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- 限制表 `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
