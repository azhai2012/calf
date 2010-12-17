-- phpMyAdmin SQL Dump
-- version 3.3.7deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 12 月 16 日 08:40
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=433 ;

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
(388, 346, 'custmt'),
(389, 346, 'custorder'),
(390, 346, 'custropose'),
(419, 343, 'spsz'),
(420, 343, 'meet'),
(421, 343, 'custmt'),
(422, 343, 'custorder'),
(423, 343, 'custropose'),
(424, 343, 'supm'),
(425, 343, 'suporder'),
(426, 343, 'suppropose'),
(427, 343, 'supkc'),
(428, 343, 'suprk'),
(429, 343, 'supotk'),
(430, 343, 'supxs'),
(431, 343, 'ddbb'),
(432, 343, 'xsbb');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8  COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `meets`
--

INSERT INTO `meets` (`id`, `meet_name`, `meet_begin_at`, `meet_end_at`, `active`, `meet_description`) VALUES
(17, 'SADF', '2010-11-03', '2010-11-30', 'Y', '大富大贵古典风格   '),
(20, 'dsdsa', '2010-12-20', '2010-12-20', 'Y', 'dsadsadsa'),
(21, '2132132', '2010-12-16', '2010-12-16', 'N', '');

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
  `sup_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `product_code`, `product_spec`, `product_unit`, `product_origin`, `product_origin_code`, `product_pic_url`, `product_group`, `product_pzwh`, `sup_id`) VALUES
(3, '001', '阿莫西林胶囊阿莫西林胶囊', 'AMXL', '20g', '盒', '山东鲁抗药业有限公司', 'sdlkyyyxgs', '/media/images/a.jpg', '200', '国药准字20394955', '0001'),
(4, '0001', '第三方的四放大', '防盗锁分', '浮动幅度四', '为', '大放送大幅打', '的撒旦', NULL, NULL, '', '0001'),
(5, '111', '3323', '32323', '3232', '323', '23', '23', '454', '54', '54', '0001'),
(6, '', '复方酮康唑发用洗剂（康王)', NULL, '5ml', NULL, '昆明滇虹', NULL, NULL, NULL, '', '0001'),
(7, '1', '复方酮康唑发用洗剂（康王)', NULL, '5ml', NULL, '昆明滇虹', NULL, NULL, NULL, '', '0001'),
(8, '2', '复方酮康唑软膏(皮康王)', NULL, '10g', NULL, '昆明滇虹', NULL, NULL, NULL, '', '0001'),
(9, '3', '跌打损伤贴', NULL, '7cm*10cm*2贴*2袋', NULL, '黄石济德', NULL, NULL, NULL, '', '0001'),
(10, '4', '盐酸雷尼替丁胶囊', NULL, '0.15g*30s', NULL, '白云山东泰', NULL, NULL, NULL, '', '0001'),
(11, '5', '骨质增生贴', NULL, '7cm*10cm*2贴*2袋', NULL, '黄石济德', NULL, NULL, NULL, '', '0001'),
(12, '6', '合生元儿童益生菌冲剂', NULL, '1.5g*26袋', NULL, '广州合生元', NULL, NULL, NULL, '', '0001'),
(13, '7', '合生元儿童益生菌冲剂', NULL, '1.5g*5袋', NULL, '广州合生元', NULL, NULL, NULL, '', '0001'),
(14, '8', '加味逍遥丸', NULL, '6g*10袋', NULL, '株洲千金', NULL, NULL, NULL, '', '0001'),
(15, '9', '妇科千金胶囊', NULL, '36s', NULL, '株洲千金', NULL, NULL, NULL, '', '0001'),
(16, '10', '更年舒片', NULL, '0.38g*36s', NULL, '株洲千金', NULL, NULL, NULL, '', '0001'),
(17, '11', '益母颗粒', NULL, '14g*10袋', NULL, '株洲千金', NULL, NULL, NULL, '', '0001'),
(18, '12', '注射用氨曲南', NULL, '0.5g', NULL, '山西仟源', NULL, NULL, NULL, '', '0001'),
(19, '13', '复方氨酚烷胺胶囊', NULL, '10s', NULL, '白云山东泰', NULL, NULL, NULL, '', '0001'),
(20, '14', '冰王鳄油冻疮消', NULL, '30g', NULL, '上海冰王', NULL, NULL, NULL, '', '0001'),
(21, '15', '冰王鳄油冻裂消', NULL, '20g', NULL, '上海冰王', NULL, NULL, NULL, '', '0001'),
(22, '16', '鲨油冻疮膏(虎镖)', NULL, '30g', NULL, '平舆冰王', NULL, NULL, NULL, '', '0001'),
(23, '17', '硫酸庆大霉素碳酸铋胶囊', NULL, '10s', NULL, '葫芦岛国帝', NULL, NULL, NULL, '', '0001'),
(24, '18', '双唑泰栓', NULL, '7枚', NULL, '葫芦岛国帝', NULL, NULL, NULL, '', '0001'),
(25, '19', '复方醋酸氟轻松酊(皮炎宁酊)', NULL, '20ml', NULL, '葫芦岛国帝', NULL, NULL, NULL, '', '0001'),
(26, '20', '复方氯已定含漱液', NULL, '200ml', NULL, '江苏晨牌', NULL, NULL, NULL, '', '0001'),
(27, '21', '口腔溃疡散', NULL, '3g', NULL, '贵州瑞和', NULL, NULL, NULL, '', '0001'),
(28, '22', '多潘立酮片(宝泰理通)', NULL, '10mg*18s', NULL, '山西宝泰', NULL, NULL, NULL, '', '0001'),
(29, '23', '罗红霉素分散片', NULL, '0.15g*10s', NULL, '苏州俞氏', NULL, NULL, NULL, '', '0001'),
(30, '24', '醉中醒胶囊', NULL, '0.5g*12s', NULL, '贵阳浩宇', NULL, NULL, NULL, '', '0001'),
(31, '25', '止咳枇杷颗粒', NULL, '10g*10袋', NULL, '山东孔府', NULL, NULL, NULL, '', '0001'),
(32, '26', '小儿感冒颗粒', NULL, '6g*10袋', NULL, '山东孔府', NULL, NULL, NULL, '', '0001'),
(33, '27', '小儿肺热咳喘颗粒', NULL, '3g*10袋', NULL, '青岛国风', NULL, NULL, NULL, '', '0001'),
(34, '28', '橘红颗粒', NULL, '11g*10袋', NULL, '江西民康', NULL, NULL, NULL, '', '0001'),
(35, '29', '心脑康胶囊', NULL, '0.25g*40粒', NULL, '济南三株', NULL, NULL, NULL, '', '0001'),
(36, '30', '消糜栓(金妇康)', NULL, '3g*3粒', NULL, '通化茂祥', NULL, NULL, NULL, '', '0001'),
(37, '31', '格列吡嗪片', NULL, '2.5mg*20s*4板', NULL, '天津药物', NULL, NULL, NULL, '', '0001'),
(38, '32', '四季感冒片', NULL, '0.36g*36s', NULL, '黑龙江天宏', NULL, NULL, NULL, '', '0001'),
(39, '33', '炎热清片', NULL, '0.36g*24s', NULL, '武汉长江', NULL, NULL, NULL, '', '0001'),
(40, '34', '硝酸益康唑栓', NULL, '0.15g*6枚', NULL, '哈尔滨欧替', NULL, NULL, NULL, '', '0001'),
(41, '35', '肤痒颗粒', NULL, '9g*6袋', NULL, '北京亚东', NULL, NULL, NULL, '', '0001'),
(42, '36', '香菊感冒颗粒', NULL, '15g*9袋', NULL, '西安仁仁', NULL, NULL, NULL, '', '0001'),
(43, '37', '头孢克洛干混悬剂', NULL, '0.125g*3袋', NULL, '珠海金鸿', NULL, NULL, NULL, '', '0001'),
(44, '38', '复方桔梗止咳片', NULL, '0.25g*36s', NULL, '重庆格瑞林', NULL, NULL, NULL, '', '0001'),
(45, '39', '盆炎净胶囊', NULL, '0.4g*12s*2板', NULL, '吉林利华', NULL, NULL, NULL, '', '0001'),
(46, '40', '冻疮膏', NULL, '8g', NULL, '德胜药业', NULL, NULL, NULL, '', '0001'),
(47, '41', '氨金黄敏颗粒', NULL, '6g*10袋', NULL, '三精儿童', NULL, NULL, NULL, '', '0001'),
(48, '42', '复方氨酚烷胺胶囊', NULL, '12粒', NULL, '海口奇力', NULL, NULL, NULL, '', '0001'),
(49, '43', '六味安消胶囊  ', NULL, '0.5x24粒', NULL, '贵州信邦', NULL, NULL, NULL, '', '0001'),
(50, '44', '头孢克洛胶囊', NULL, '0.25gX6粒', NULL, '苏州中化', NULL, NULL, NULL, '', '0001'),
(51, '45', '头孢拉定胶囊', NULL, '0.25gX20粒', NULL, '山西澳迩', NULL, NULL, NULL, '', '0001'),
(52, '46', '辛芳鼻炎胶囊', NULL, '0.25gX10粒*3板', NULL, '吉林道君', NULL, NULL, NULL, '', '0001'),
(53, '47', '咽炎片', NULL, '0.25gX30片', NULL, '长春海外', NULL, NULL, NULL, '', '0001'),
(54, '48', '盐酸氟桂利嗪胶囊 ', NULL, '5mgX30粒', NULL, '山西亚宝', NULL, NULL, NULL, '', '0001'),
(55, '49', '盐酸克林霉素胶囊', NULL, '0.15gX12粒', NULL, '扬州星斗', NULL, NULL, NULL, '', '0001'),
(56, '50', '氧氟沙星胶囊', NULL, '0.1gX12粒X2板', NULL, '浙江医药', NULL, NULL, NULL, '', '0001'),
(57, '51', '腰息痛胶囊', NULL, '36粒', NULL, '吉林辉南', NULL, NULL, NULL, '', '0001'),
(58, '52', '银杏叶片', NULL, '24片', NULL, '湖南华纳', NULL, NULL, NULL, '', '0001'),
(59, '53', '氨酚伪麻那敏片', NULL, '9片', NULL, '新疆华康', NULL, NULL, NULL, '', '0001'),
(60, '54', '奥硝唑胶囊', NULL, '0.25gX12粒', NULL, '西安万隆', NULL, NULL, NULL, '', '0001'),
(61, '55', '独一味软胶囊', NULL, '0.55gX24粒', NULL, '江苏万高', NULL, NULL, NULL, '', '0001'),
(62, '56', '活血止痛片', NULL, '0.4gX30片', NULL, '江苏万高', NULL, NULL, NULL, '', '0001'),
(63, '57', '尼美舒利颗粒', NULL, '50mgX10袋', NULL, '苏州俞氏', NULL, NULL, NULL, '', '0001'),
(64, '58', '头孢克肟分散片(舍尔)', NULL, '0.1gX6片', NULL, '丹东医创', NULL, NULL, NULL, '', '0001'),
(65, '59', '头孢克肟胶囊', NULL, '0.1gX6粒', NULL, '天津医药', NULL, NULL, NULL, '', '0001'),
(66, '60', '心脑康胶囊', NULL, '0.25gX36粒', NULL, '长春银诺克', NULL, NULL, NULL, '', '0001'),
(67, '61', '盐酸二甲双胍缓释片', NULL, '0.5gX24片', NULL, '河南天方', NULL, NULL, NULL, '', '0001'),
(68, '62', '银杏叶片', NULL, '9.6mgX24片(薄膜衣)', NULL, '唐山容大', NULL, NULL, NULL, '', '0001');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=347 ;

--
-- 转存表中的数据 `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `permissions`) VALUES
(343, '管理员', '管理员（所有权限）', 'add_spsz|del_spsz|find_spsz|ex_spsz|add_meet|del_meet|find_meet|ex_meet|find_custmt|find_custorder|ex_custorder|find_custropose|find_supm|find_suporder|ex_suporder|find_suppropose|find_supkc|ex_supkc|find_suprk|ex_suprk|find_supotk|ex_supotk|find_supxs|ex_supxs|find_ddbb|ex_ddbb|find_xsbb|ex_xsbb'),
(344, '用户', '普通用户', 'add_spsz|del_spsz|find_spsz|add_gt|del_gt|find_gt|add_dy|find_dy|add_ghs|find_ghs|add_rk|del_rk|find_rk|add_th|del_th|find_th|find_pd|find_bs|find_xq'),
(345, '一般用户', '一般用户', 'add_gt|find_gt|find_join|find_order|ex_order|find_propose'),
(346, '客户管理', '终端客户管理权限', 'find_custmt|find_custorder|ex_custorder|find_custropose');

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
-- 表的结构 `suporders`
--

CREATE TABLE IF NOT EXISTS `suporders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sup_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prod_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `meet_id` int(11) NOT NULL,
  `order_at` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8  COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `suporders`
--

INSERT INTO `suporders` (`id`, `cus_id`, `sup_id`, `prod_id`, `num`, `price`, `amount`, `meet_id`, `order_at`, `active`) VALUES
(11, '0001', '0001', '24', 11, 10.6, NULL, 17, '2010-12-15 18:01', 0),
(10, '0001', '0001', '111', 1, 10.34, NULL, 17, '2010-12-15 16:57', 0),
(8, '0001', '0001', '001', 56, 3.45, NULL, 17, '2010-12-14 11:10', 0),
(9, '0001', '0001', '0001', 95, 2.03, NULL, 17, '2010-12-15 11:23', 0),
(12, '0001', '0001', '4', 1, 20.78, NULL, 17, '2010-12-15 18:01', 0),
(13, '0001', '0001', '11', 1, 9.8, NULL, 17, '2010-12-15 18:01', 0),
(14, '0001', '0001', '12', 2, 7, NULL, 17, '2010-12-15 18:01', 0);

-- --------------------------------------------------------

--
-- 表的结构 `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `limit_number` float NOT NULL,
  `price` float NOT NULL,
  `meet_id` int(11) NOT NULL,
  `picname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `picsize` int(11) NOT NULL,
  `favorable` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8  COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- 转存表中的数据 `suppliers`
--

INSERT INTO `suppliers` (`id`, `sup_id`, `product_id`, `limit_number`, `price`, `meet_id`, `picname`, `picsize`, `favorable`) VALUES
(18, '0001', '001', 0, 2.67, 20, '', 0, 'dsaasdasd'),
(26, '0001', '0001', 0, 2.03, 17, '', 0, '个放大个粉碎个粉碎个粉碎个佛塑股份的广泛的四广泛的四个防盗'),
(22, '0001', '0001', 0, 12.5, 20, '', 0, 'fddsfds'),
(27, '0001', '001', 0, 3.45, 17, '', 0, ''),
(43, '0001', '12', 0, 7, 17, '', 0, ''),
(41, '0001', '10', 0, 0, 17, '', 0, ''),
(42, '0001', '8', 0, 0, 17, '', 0, ''),
(40, '0001', '11', 0, 9.8, 17, '', 0, ''),
(39, '0001', '9', 0, 0, 17, '', 0, ''),
(38, '0001', '7', 0, 0, 17, '', 0, ''),
(49, '0001', '24', 0, 10.6, 17, '', 0, ''),
(44, '0001', '1', 0, 0, 17, '', 0, ''),
(45, '0001', '3', 0, 0, 17, '', 0, ''),
(46, '0001', '4', 0, 20.78, 17, '', 0, ''),
(47, '0001', '26', 0, 0, 17, '', 0, ''),
(48, '0001', '25', 0, 0, 17, '', 0, ''),
(50, '0001', '23', 0, 0, 17, '', 0, ''),
(51, '0001', '5', 0, 0, 17, '', 0, ''),
(52, '0001', '6', 0, 0, 17, '', 0, ''),
(53, '0001', '16', 0, 0, 17, '', 0, ''),
(54, '0001', '15', 0, 0, 17, '', 0, ''),
(55, '0001', '40', 0, 0, 17, '', 0, ''),
(56, '0001', '32', 0, 0, 17, '', 0, ''),
(57, '0002', '33', 0, 0, 17, '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `suppliers_favs`
--

CREATE TABLE IF NOT EXISTS `suppliers_favs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meet_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `favorables` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8  COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `suppliers_favs`
--

INSERT INTO `suppliers_favs` (`id`, `sup_id`, `meet_id`, `location`, `favorables`) VALUES
(1, '0001', '17', 'bottom', ''),
(2, '0001', '20', 'bottom', '分vdsafdafdafffdfdffd防盗锁放大<div>fdsfsd防盗锁放大搜索的</div><div>防盗锁发送到</div><div>防盗锁分</div><div>fdsfdsfsd防盗锁放大四</div><div><br></div>');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login_on` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `create_login_on` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login` int(10) unsigned DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `email`, `userid`, `username`, `password`, `last_login_on`, `logins`, `create_login_on`, `last_login`, `role_id`) VALUES
(9, 'admin@gmail.com', '0001', 'admin', '00b7691d86d96aebd21dd9e138f90840', '', 0, '2010-11-29 11:17:42', NULL, 343),
(11, 'user@hhey.cn', '0002', 'user', '00b7691d86d96aebd21dd9e138f90840', '', 0, '2010-11-29 11:18:27', NULL, 345),
(12, 'A01@gmail.com', '0003', 'A01', '202cb962ac59075b964b07152d234b70', '', 0, '2010-11-30 09:40:34', NULL, 346);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `user_tokens`
--


-- --------------------------------------------------------

--
-- 表的结构 `报纸1`
--

CREATE TABLE IF NOT EXISTS `报纸1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `A` varchar(55) DEFAULT NULL,
  `B` varchar(22) DEFAULT NULL,
  `C` varchar(15) DEFAULT NULL,
  `D` varchar(12) DEFAULT NULL,
  `E` varchar(267) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `报纸1`
--

INSERT INTO `报纸1` (`id`, `A`, `B`, `C`, `D`, `E`) VALUES
(1, '复方酮康唑发用洗剂（康王)', '5ml', '昆明滇虹', '省内终端', '购10袋送1袋滇红防干护肤霜10g。'),
(2, '复方酮康唑软膏(皮康王)', '10g', '昆明滇虹', NULL, '购3支送1袋滇红防干袋护肤霜10g。'),
(3, '跌打损伤贴', '7cm*10cm*2贴*2袋', '黄石济德', '终端客户', '购10盒送黄石膏药1盒。'),
(4, '盐酸雷尼替丁胶囊', '0.15g*30s', '白云山东泰', NULL, '购100瓶送雕牌透明皂1块，400瓶送毛巾1条。'),
(5, '骨质增生贴', '7cm*10cm*2贴*2袋', '黄石济德', NULL, '购10盒送黄石膏药1盒。'),
(6, '合生元儿童益生菌冲剂', '1.5g*26袋', '广州合生元', NULL, '购2盒送合生元护理手册1本。'),
(7, '合生元儿童益生菌冲剂', '1.5g*5袋', '广州合生元', NULL, '购2盒送合生元孩子杂志1本。'),
(8, '加味逍遥丸', '6g*10袋', '株洲千金', NULL, '购10盒赠2盒。'),
(9, '妇科千金胶囊', '36s', '株洲千金', NULL, '购10盒赠1盒。'),
(10, '更年舒片', '0.38g*36s', '株洲千金', NULL, '购5盒赠2盒。'),
(11, '益母颗粒', '14g*10袋', '株洲千金', NULL, '购10盒赠2盒。'),
(12, '注射用氨曲南', '0.5g', '山西仟源', NULL, '购10支赠一次性水杯20个，购30支赠洗发沐浴套装1套，购50支赠900ml油1桶，购100支赠不锈钢蒸锅一个。'),
(13, '复方氨酚烷胺胶囊', '10s', '白云山东泰', NULL, '购20盒送毛巾1条，100盒送被罩1床，400盒送100元充值卡1张。'),
(14, '冰王鳄油冻疮消', '30g', '上海冰王', '所有客户', '购10支赠1袋508g汰渍洗衣粉，购40支赠1桶1.8升金龙鱼油，购80支赠2桶1.8升金龙鱼油。'),
(15, '冰王鳄油冻裂消', '20g', '上海冰王', NULL, '购18支赠1袋508g汰渍洗衣粉，购72支赠1桶1.8升金龙鱼油，购144支赠2桶1.8升金龙鱼油。'),
(16, '鲨油冻疮膏(虎镖)', '30g', '平舆冰王', NULL, '购10支赠1袋508g汰渍洗衣粉，购40支赠1桶1.8升金龙鱼油，购80支赠2桶1.8升金龙鱼油（另在享受10支赠1支）。'),
(17, '硫酸庆大霉素碳酸铋胶囊', '10s', '葫芦岛国帝', NULL, '购20盒赠汰渍洗衣皂1块，30盒赠508g汰渍洗衣粉1袋，50盒赠飘柔洗发水200ml1瓶。'),
(18, '双唑泰栓', '7枚', '葫芦岛国帝', NULL, '购20盒赠汰渍洗衣皂1块，30盒赠508g汰渍洗衣粉1袋，50盒赠飘柔洗发水200ml1瓶。'),
(19, '复方醋酸氟轻松酊(皮炎宁酊)', '20ml', '葫芦岛国帝', NULL, '购20盒赠汰渍洗衣皂1块，30盒赠508g汰渍洗衣粉1袋，50盒赠飘柔洗发水200ml1瓶。'),
(20, '复方氯已定含漱液', '200ml', '江苏晨牌', NULL, '购10盒赠手套一副，购20盒赠围巾一条，购50盒赠1.8升金龙鱼油1桶或暖手宝1个。'),
(21, '口腔溃疡散', '3g', '贵州瑞和', NULL, '购10盒赠手套一副，购40盒赠围巾一条，购120盒赠1.8升金龙鱼油1桶或暖手宝1个。'),
(22, '多潘立酮片(宝泰理通)', '10mg*18s', '山西宝泰', NULL, '购20盒赠手套一副，购80盒赠围巾一条，购150盒赠1.8升金龙鱼油1桶或暖手宝1个。'),
(23, '罗红霉素分散片', '0.15g*10s', '苏州俞氏', NULL, '购10盒赠手套一副，购30盒赠围巾一条，购80盒赠1.8升金龙鱼油1桶或暖手宝1个。'),
(24, '醉中醒胶囊', '0.5g*12s', '贵阳浩宇', NULL, '购5盒赠手套一副，购15盒赠围巾一条，购30盒赠1.8升金龙鱼油1桶或暖手宝1个。'),
(25, '止咳枇杷颗粒', '10g*10袋', '山东孔府', NULL, '购3盒赠1袋260g汰渍洗衣粉。'),
(26, '小儿感冒颗粒', '6g*10袋', '山东孔府', NULL, '购5盒赠1袋260g汰渍洗衣粉。'),
(27, '小儿肺热咳喘颗粒', '3g*10袋', '青岛国风', NULL, '购10盒赠雨伞1把，20盒赠1.8升金龙鱼油1桶。'),
(28, '橘红颗粒', '11g*10袋', '江西民康', NULL, '购20盒赠汰渍洗衣粉1袋，50盒赠雨伞1把，100盒赠1.8升金龙鱼油1桶。'),
(29, '心脑康胶囊', '0.25g*40粒', '济南三株', NULL, '购20盒赠汰渍洗衣粉1袋，40盒赠雨伞1把，100盒赠1.8升金龙鱼油1桶。'),
(30, '消糜栓(金妇康)', '3g*3粒', '通化茂祥', NULL, '购10盒赠汰渍洗衣粉1袋。'),
(31, '格列吡嗪片', '2.5mg*20s*4板', '天津药物', NULL, '购10盒赠雨伞1把，20盒赠1.8升金龙鱼油1桶。'),
(32, '四季感冒片', '0.36g*36s', '黑龙江天宏', NULL, '购5盒赠1盒（另5盒赠强生香皂1盒）。'),
(33, '炎热清片', '0.36g*24s', '武汉长江', NULL, '购5盒赠1盒（另5盒赠强生香皂1盒）。'),
(34, '硝酸益康唑栓', '0.15g*6枚', '哈尔滨欧替', NULL, '购5盒赠1盒（另5盒赠强生香皂1盒）。'),
(35, '肤痒颗粒', '9g*6袋', '北京亚东', NULL, '购5盒赠1盒（另5盒赠强生香皂1盒）。'),
(36, '香菊感冒颗粒', '15g*9袋', '西安仁仁', NULL, '购5盒赠1盒（另5盒赠强生香皂1盒）。'),
(37, '头孢克洛干混悬剂', '0.125g*3袋', '珠海金鸿', NULL, '购5盒赠1盒（另5盒赠强生香皂1盒）。'),
(38, '复方桔梗止咳片', '0.25g*36s', '重庆格瑞林', NULL, '购5盒赠2盒 咽炎片 0.26g*30片 伊春药业 批号090803（赠品为近效期）不予退货(赠品效期到2011.1.1)。'),
(39, '盆炎净胶囊', '0.4g*12s*2板', '吉林利华', NULL, '购5盒赠2盒胃康灵胶囊0.4g*48s河北兆康 批号091001（赠品为近效期）不予退货(赠品效期到2011.2.28)。'),
(40, '冻疮膏', '8g', '德胜药业', NULL, '购10盒赠1盒跌打红药片0.26g*24片天津中新 批号0909002（赠品为近效期）不予退货。'),
(41, '氨金黄敏颗粒', '6g*10袋', '三精儿童', NULL, '购10盒赠自发手电筒1个，购20盒赠自排气暖手宝1个，购50盒赠飞科剃须刀1个。'),
(42, '复方氨酚烷胺胶囊', '12粒', '海口奇力', NULL, '购10盒赠1盒。'),
(43, '六味安消胶囊  ', '0.5x24粒', '贵州信邦', NULL, '购10盒赠1盒。'),
(44, '头孢克洛胶囊', '0.25gX6粒', '苏州中化', '所有客户', '所有客户累计购30盒赠一次性水杯20个，累计购60盒赠隆力奇牙膏1个，累计购80盒赠东洋之花护手霜1个，累计购100盒赠田七洗洁精1瓶，累计购150盒赠508g汰渍洗衣粉1袋，累计购200盒赠400ml东洋之花洗发水。'),
(45, '头孢拉定胶囊', '0.25gX20粒', '山西澳迩', NULL, NULL),
(46, '辛芳鼻炎胶囊', '0.25gX10粒*3板', '吉林道君', NULL, NULL),
(47, '咽炎片', '0.25gX30片', '长春海外', NULL, NULL),
(48, '盐酸氟桂利嗪胶囊 ', '5mgX30粒', '山西亚宝', NULL, NULL),
(49, '盐酸克林霉素胶囊', '0.15gX12粒', '扬州星斗', NULL, NULL),
(50, '氧氟沙星胶囊', '0.1gX12粒X2板', '浙江医药', NULL, NULL),
(51, '腰息痛胶囊', '36粒', '吉林辉南', NULL, NULL),
(52, '银杏叶片', '24片', '湖南华纳', NULL, NULL),
(53, '氨酚伪麻那敏片', '9片', '新疆华康', NULL, NULL),
(54, '奥硝唑胶囊', '0.25gX12粒', '西安万隆', NULL, NULL),
(55, '独一味软胶囊', '0.55gX24粒', '江苏万高', NULL, NULL),
(56, '活血止痛片', '0.4gX30片', '江苏万高', NULL, NULL),
(57, '尼美舒利颗粒', '50mgX10袋', '苏州俞氏', NULL, NULL),
(58, '头孢克肟分散片(舍尔)', '0.1gX6片', '丹东医创', NULL, NULL),
(59, '头孢克肟胶囊', '0.1gX6粒', '天津医药', NULL, NULL),
(60, '心脑康胶囊', '0.25gX36粒', '长春银诺克', NULL, NULL),
(61, '盐酸二甲双胍缓释片', '0.5gX24片', '河南天方', NULL, NULL),
(62, '银杏叶片', '9.6mgX24片(薄膜衣)', '唐山容大', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `报纸2`
--

CREATE TABLE IF NOT EXISTS `报纸2` (
  `A` varchar(55) DEFAULT NULL,
  `B` varchar(16) DEFAULT NULL,
  `C` varchar(15) DEFAULT NULL,
  `D` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `报纸2`
--

INSERT INTO `报纸2` (`A`, `B`, `C`, `D`) VALUES
('订购热线：05169695598  活动日期：12.15--12.31', NULL, NULL, NULL),
('药品名称', '规格', '产地', '销售价格'),
('脉通胶丸  复方亚油酸乙酯胶丸', '100s', '上海信谊', '7.46'),
('柳氮磺吡啶肠溶片', '0.25g*60s', '上海信谊', '11.5'),
('复方酮康唑软膏', '10g', '上海朝晖', '1.64'),
('潘高寿蜜炼川贝枇杷膏', '138g', '广州潘高寿', '9.30000000000000'),
('格列吡嗪片(迪沙)', '2.5mg*20s*4板', '迪沙药业', '17.8'),
('伤痛宁胶囊', '0.35g*36s', '湖南德康', '18.8'),
('阿魏酸钠片', '50mg*24s', '江苏苏南', '4.76'),
('洛伐他汀胶囊', '20mg*12s', '江苏飞马', '4.48'),
('后定诺', '10mg*1', '浙江仙居', '6.88'),
('枯草杆菌 二联活菌颗粒', '1.0g*10袋', '北京韩美', '16.96'),
('优卡丹', '6g*10袋', '江西铜鼓', '5.46'),
('可立克', '10s', '江西药都', '5.2'),
('维C银翘片', '12s*2板', '贵州百花', '1.08'),
('注射用头孢呋辛钠', '1g', '苏州二叶', '2.46'),
('妇炎洁', '380ml', '江西仁和', '6.8'),
('血塞通分散片 ', '20s', '湖南方盛 ', '5.88'),
('玻璃体温计（天一） ', '1支  ', '宁波 ', '1.64'),
('快速秀早早孕检测试纸 ', '1条', '润和生物 ', '0.33'),
('地奥心血康胶囊', '100mg*10粒*2板', '成都地奥', '7.5'),
('氨溴特罗口服液', '60ml', '北京韩美', '17.5'),
('血脂康胶囊', '0.3g*12s', '北大维信', '11.84'),
('毓婷(左炔诺孕酮片)', '0.75mg*2片', '北京紫竹', '5.82'),
('六味地黄丸', '200丸', '兰州佛慈', '9.18'),
('药用炭片(爱西特)', '0.3g*100s', '河北长天', '25.22'),
('阿莫灵', '24s', '香港澳美', '11.69'),
('尿毒清颗粒', '15代', '广东康臣', '51.66'),
('维生素E软胶囊', '100mg*30s', '厦门星鲨', '2.98'),
('维C银翘片', '18s', '贵州百灵', '0.92'),
('维C银翘片', '12s*40袋', '贵州百灵', '23.78');

-- --------------------------------------------------------

--
-- 表的结构 `首页`
--

CREATE TABLE IF NOT EXISTS `首页` (
  `A` varchar(186) DEFAULT NULL,
  `B` varchar(10) DEFAULT NULL,
  `C` varchar(12) DEFAULT NULL,
  `D` varchar(114) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `首页`
--

INSERT INTO `首页` (`A`, `B`, `C`, `D`) VALUES
('阿莫西林胶囊', '0.25g*50s', '华北制药', '所有客户购10盒赠强生香皂1盒 购50盒赠508g汰渍洗衣粉1袋 购100盒赠400ml东洋之花洗发水 '),
('妇科千金片', '18片*4板', '株洲千金', '终端客户购10盒赠1盒'),
('妇科千金胶囊', '24s', '株洲千金', '终端客户购20盒折让30元  购50盒折让100元   购1件折让248元'),
('鲨油冻疮膏(虎镖)', '20g', '平舆冰王', '所有客户购18支赠1袋508g汰渍洗衣粉，购144支赠1桶1.8升金龙鱼油'),
('日舒安洗液', '100ml', '贵州汉方', '所有客户购10盒赠手套一副，购30盒赠围巾一条，购50盒赠1.8升金龙鱼油1桶或暖手宝1个'),
('小儿肺热咳喘颗粒', '3g*10袋', '青岛国风', '所有客户购10盒赠雨伞1把，20盒赠1.8升金龙鱼油1桶'),
(NULL, NULL, NULL, NULL),
('优惠天长地久；服务天长地久；淮海的忠诚就是将最好的商品，最低的价格，最优的服务提供给您；关注淮海，低价先锋，更多惊喜等着您。', NULL, NULL, NULL);

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
