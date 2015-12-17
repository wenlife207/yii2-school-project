-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-11-27 10:04:38
-- 服务器版本： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii2`
--

-- --------------------------------------------------------

--
-- 表的结构 `charge`
--

CREATE TABLE IF NOT EXISTS `charge` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mac` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `period` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'state_normal',
  `note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `charge`
--

INSERT INTO `charge` (`id`, `ip`, `mac`, `name`, `date`, `period`, `state`, `note`) VALUES
(4, '192.168.1.233', NULL, NULL, '2015-11-04', '1', 'state_normal', ''),
(5, '192.168.1.116', NULL, NULL, '2012-12-12', '2', 'state_normal', ''),
(6, '192.168.0.247', NULL, NULL, '2015-11-04', '1', 'state_normal', ''),
(8, '192.168.0.12', NULL, NULL, '2015-11-27', '1', 'state_normal', ''),
(9, '192.168.4.12', NULL, NULL, '2015-09-01', '2', 'state_normal', '');

-- --------------------------------------------------------

--
-- 表的结构 `ip`
--

CREATE TABLE IF NOT EXISTS `ip` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mac` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `device` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `ip`
--

INSERT INTO `ip` (`id`, `ip`, `mac`, `name`, `type`, `device`, `note`) VALUES
(1, '192.168.0.10', '940c-6d41-8789', '刘玄德', '1', '2', '备注'),
(2, '192.168.0.101', 'b8ff-1340-2357', '张小欸', '1', '1', ''),
(13, '192.168.1.233', '90E6-BA55-0D76', '监控维修人员', '3', '2', '临时绑定'),
(14, '192.168.1.116', 'b8ff-1340-2320', '监控维修人员', '3', '1', '维修'),
(15, '192.168.1.236', '4419-b6af-f84c', '宿舍报警主机', '1', '1', '学生宿舍'),
(16, '192.168.0.247', '90E6-BA55-0D76', '监控维修人员', '3', '1', ''),
(18, '192.168.4.13', 'e069-95f1-65e9', '蔡顺碧', '3', '1', ''),
(19, '192.168.4.32', 'f46a-9242-79fd', '兰英', '3', '1', ''),
(20, '192.168.4.35', '0025-864c-02f9', '周富光', '2', '1', ''),
(21, '192.168.4.72', '4433-4cfe-015f', '周雪林', '3', '1', ''),
(26, '192.168.0.12', '0020-ed35-eecc', '马文林', '3', '1', ''),
(27, '192.168.4.10', '0c72-2cc3-7da1', '未知', '3', '1', ''),
(28, '192.168.4.11', '0c72-2c88-454d', '谢子明', '2', '2', ''),
(29, '192.168.4.12', '00e0-1c3c-d383', '明月轮', '3', '1', ''),
(30, '192.168.4.14', 'bc5f-f459-80e6', '唐庭贵', '3', '1', ''),
(31, '192.168.4.33', '001e-372b-fb05', '尹健川', '2', '1', ''),
(32, '192.168.4.34', '485b-39b3-85db', '兰英', '3', '1', ''),
(33, '192.168.4.60', '0014-49bb-8fe1', '尹健川', '2', '3', ''),
(34, '192.168.4.61', '00e0-b0ec-d130', '李春妮', '3', '2', ''),
(35, '192.168.4.62', '00e0-4c0b-db0b', '罗伟', '2', '1', ''),
(36, '192.168.4.63', '0012-3f6a-e558', '黄纲', '3', '1', ''),
(37, '192.168.4.64', 'a857-4ee5-b455', '尹健川', '2', '2', ''),
(38, '192.168.4.65', '001a-4d18-f46d', '曾健', '3', '1', ''),
(39, '192.168.4.66', '0016-ec9e-b853', '谢子明', '2', '1', ''),
(40, '192.168.4.67', 'f4ec-3836-bf6d', '刘自伦', '2', '1', ''),
(41, '192.168.4.68', '000b-6ad4-0c37', '刘自伦', '2', '1', ''),
(42, '192.168.4.70', 'a815-4db4-11b3', '朱旭春', '3', '1', ''),
(43, '192.168.4.71', 'd85d-4c51-a4f6', '陈辉', '2', '2', ''),
(44, '192.168.4.73', '0026-1871-9c95', '陈辉', '2', '1', ''),
(45, '192.168.4.75', '1cfa-68de-87cf', '彭红', '2', '2', ''),
(46, '192.168.4.76', '0021-9760-f743', '冯荣贵', '3', '1', ''),
(47, '192.168.4.77', '5404-a6b7-bbc7', '曹琪', '3', '1', ''),
(48, '192.168.4.79', 'e89a-8f7b-de57', '刘大富', '3', '1', ''),
(49, '192.168.4.80', '50e5-4984-22ec', '龙果', '2', '1', ''),
(50, '192.168.4.81', '0025-864c-030f', '冯帆', '2', '2', ''),
(51, '192.168.4.82', '6cf0-49a7-33b2', '冯帆', '2', '1', ''),
(52, '192.168.4.84', '6c62-6de4-db53', '陈丽', '2', '1', ''),
(53, '192.168.4.85', '6409-801d-3f4c', '黄冈', '3', '2', ''),
(54, '192.168.4.87', '0024-1d2e-bdcc', '马书敏', '2', '1', ''),
(55, '192.168.4.89', '0040-0515-0f70', '宋真贵', '3', '1', ''),
(56, '192.168.4.90', '201a-0642-e591', '黄纲', '3', '1', ''),
(57, '192.168.4.93', '0000-4a00-0751', '王亚菲', '3', '1', ''),
(58, '192.168.4.94', '101f-74e5-6ea4', '黄健华', '3', '1', ''),
(59, '192.168.4.95', '0022-15d1-a3e1', '陈峰', '3', '1', ''),
(60, '192.168.4.96', 'bcd1-77f0-dfb5', '鲜芬', '3', '1', ''),
(61, '192.168.4.97', '8c21-0ac4-09f9', '刘燕', '2', '1', ''),
(62, '192.168.4.98', 'bcae-c58c-a940', '鲜芬', '2', '1', ''),
(63, '192.168.4.100', 'b8ff-1340-2344', '监控摄像头', '4', '1', ''),
(64, '192.168.4.101', 'b8ff-1341-1781', '监控摄像头', '4', '1', ''),
(65, '192.168.4.102', 'b8ff-1340-2493', '监控摄像头', '4', '1', ''),
(66, '192.168.4.117', '0013-77d6-98c1', '蒋燕琴', '2', '1', ''),
(67, '192.168.4.124', 'fcd7-3369-8ccb', '李昌红', '2', '1', ''),
(68, '192.168.4.201', '00e0-4c21-ee35', '刘天贵', '3', '1', ''),
(69, '192.168.4.215', 'c89c-dc22-2e87', '未知', '3', '1', ''),
(70, '192.168.4.216', '4437-e645-f781', '未知', '3', '1', ''),
(71, '192.168.4.217', 'c89c-dc21-93eb', '未知', '3', '1', ''),
(72, '192.168.4.245', '0c72-2c99-b203', '未知', '3', '1', ''),
(73, '192.168.4.246', '8ca9-8213-8680', '马书敏', '2', '1', ''),
(75, '192.168.4.69', '0024-1d01-b477', '李仕琼', '2', '1', ''),
(76, '192.168.5.10', '282c-b24b-1111', '周子林', '3', '2', ''),
(77, '192.168.5.11', 'a45d-36bc-03d0', '周--', '3', '2', ''),
(78, '192.168.5.12', '20cf-3092-3c88', '严中润', '2', '1', ''),
(79, '192.168.5.13', 'c80a-a994-faae', '雷迎莲', '3', '1', ''),
(80, '192.168.5.14', '68f7-289c-84e8', '唐锦华', '3', '1', ''),
(81, '192.168.5.15', '28d2-44f5-34a0', '蒲静秋', '3', '1', ''),
(82, '192.168.5.26', 'ec17-2f84-08bb', '张惠珍', '3', '1', ''),
(83, '192.168.5.29', '206a-8a0b-0027', '吴昕', '2', '1', ''),
(84, '192.168.5.30', '50e5-4932-1f1c', '吴小川', '2', '1', ''),
(85, '192.168.5.31', '3c97-0e63-ed7e', '汪睿', '2', '1', ''),
(86, '192.168.5.37', '0027-193a-927d', '冯冬梅', '2', '2', ''),
(87, '192.168.5.58', '00e0-4c05-6f3d', '朱沛东', '3', '1', ''),
(88, '192.168.5.95', 'cc34-2927-2bd9', '朱乾林', '2', '1', ''),
(89, '192.168.5.98', '485b-3917-a41e', '苏林云', '3', '1', ''),
(90, '192.168.5.100', '00e0-4c2a-69af', '刘明', '3', '1', ''),
(91, '192.168.5.101', '000a-e6f4-aca5', '王静野', '2', '1', ''),
(92, '192.168.5.102', '20f4-1b9d-d8e9', '雷迎莲', '2', '1', ''),
(93, '192.168.5.105', '000b-2f76-9776', '黄富国', '2', '1', ''),
(94, '192.168.5.106', '0040-ca7d-352e', '苏勤业', '3', '1', ''),
(95, '192.168.5.108', 'ac16-2d05-c47b', '石明德', '3', '1', ''),
(96, '192.168.5.109', '8434-9794-1231', '葛明刚', '2', '1', ''),
(97, '192.168.5.110', '00e0-4c3a-4a8c', '杨志军', '2', '1', ''),
(98, '192.168.5.111', '8c89-a578-ce02', '赵忠明', '3', '1', '魏详兵'),
(99, '192.168.5.112', '6ce8-7343-1507', '石明德', '3', '1', ''),
(100, '192.168.5.118', '00e0-1c3c-0fcc', '李春燕', '3', '1', ''),
(101, '192.168.5.121', '78a1-06f8-d5eb', '冯华', '3', '1', ''),
(102, '192.168.5.122', '6cf0-497f-7215', '冯川', '3', '1', ''),
(103, '192.168.5.123', '90e6-ba55-0d76', '报警系统笔记本临时', '3', '1', ''),
(104, '192.168.5.129', 'e803-9a26-614f', '田霞', '2', '1', ''),
(105, '192.168.5.131', '0022-1576-466a', '孙志刚', '2', '1', ''),
(106, '192.168.5.132', '0001-e800-c337', '未知', '3', '1', ''),
(107, '192.168.5.138', '0014-85d8-3f60', '孙志刚', '2', '1', ''),
(108, '192.168.5.166', '14e6-e464-f013', '李焜', '3', '1', '徐开平'),
(109, '192.168.5.167', 'a815-4deb-e0f9', '李焜', '3', '2', ''),
(110, '192.168.5.168', '78a1-069d-3edb', '邱婷', '2', '1', ''),
(111, '192.168.5.223', '3883-45ee-14bf', '王琬珶', '2', '1', ''),
(112, '192.168.5.234', 'f8bc-126d-3fa2', '未知', '3', '1', ''),
(113, '192.168.5.237', '3c97-0e22-05d1', '李慧明', '3', '1', '');

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1435573077),
('m130524_201442_init', 1435573089);

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '通知标题',
  `publisher` varchar(50) NOT NULL COMMENT '发布者',
  `importance` varchar(20) NOT NULL COMMENT '重要级别',
  `begindate` varchar(20) NOT NULL COMMENT '开始时间',
  `enddate` varchar(20) NOT NULL COMMENT '结束时间',
  `content` text NOT NULL COMMENT '内容',
  `publishdate` varchar(20) NOT NULL COMMENT '发布时间',
  `category` varchar(50) NOT NULL COMMENT '栏目'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `notice`
--

INSERT INTO `notice` (`id`, `title`, `publisher`, `importance`, `begindate`, `enddate`, `content`, `publishdate`, `category`) VALUES
(5, '京东拍拍的“一拍两散”', 'wenlife207', '7', '2015-07-01', '2015-07-16', '<p>\r\n	<img src="/upload/image/20150702/20150702040457_11708.jpg" width="500" align="left" alt="" />这两天京东在一天内宣布了两起新的人事任命——原京东市场部负责人徐雷出任京东无线事业部老大；拍拍网总裁蒉莺春则卸任，转做国际品牌招商首席代表，接任者是原拍拍公关市场负责人宋旸暂代。如果说徐雷的离开是现任京东商城CEO沈皓瑜成功完成了对京东商城市场体系的洗牌，那么蒉莺春的卸任则代表了刘强东对拍拍的放弃，从一年前的蒉春莺的高调出任，再到一年后的低调离场，从一个侧面暗示了拍拍未来的命运转折，从东哥眼中的“红孩子”变成了姥姥不疼舅舅不爱的“遗腹子”。\r\n</p>\r\n<p>\r\n	今年刚好是拍拍10周年，2005年9月15日诞生，2006年3月13日上线，比淘宝的创立是时间仅仅晚了2年（淘宝网在2003年5月创立），十年后的淘宝在国内电商C2C领域可谓是一骑绝尘，是当之无愧的NO.1，而拍拍的这十年应该说都是走得不尴不尬，始终都是处在一个鸡肋的状态。\r\n</p>\r\n<p>\r\n	肥猫一直保留这样一个观点——一个企业的创始基因决定了这个企业的未来，拍拍诞生在腾讯，腾讯的立身之本是社交平台，马化腾在“社交”领域的技术投入以及技术创新也是有目共睹，腾讯是当今国内最大的线上社交平台毋庸置疑，但腾讯在商业领域的缺失也是不争的事实。应该说，从拍拍的诞生起，腾讯就没有想花大力气把拍拍打造成一个什么样的C2C平台，我们看到的拍拍的发展就是顺水推舟式的自生自灭，腾讯没有在拍拍进行过大的资本投入，也没有利用自身的社交优势进行深度的传播推广，拍拍就在QQ的页面上鸡肋般的存在着。\r\n</p>\r\n<p>\r\n	马化腾的确是一个耐得住性子的商人。因为不赚钱，百度砍掉了自身的C2C平台——有啊，而在在拍拍一直不温不火尴尬生存的年月里，他没有直接砍掉拍拍，而是宽容的让它活着，这在腾讯内部一直被看做奇迹，要知道，腾讯每年砍掉的部门以及业务都不是小数，大家都不知道拍拍能活到什么时候，也不知道拍拍的历史使命是什么，因为对于C2C市场而言，淘宝已经成为了不可追赶的巨无霸。直到2014年年初，腾讯宣布入股京东，作为协议的一部分，腾讯将QQ网购、拍拍、易迅等业务甩给了京东。\r\n</p>\r\n<p>\r\n	对于腾讯扔给自己的三块烫手山药，东哥也拿出了自己的解决方案，易迅很好办，因为和京东商城的业务重合，直接并入就OK；QQ网购和拍拍也让东哥找到了和阿里叫板的支撑，尤其是拍拍，京东不就缺的是C2C么？想睡觉就送来了枕头，东哥磨拳擦掌的准备大干了！当即派出了京东副总裁蒉春莺出任拍拍总裁，要知道蒉在京东内部都是名副其实的“当红炸子鸡”，深得东哥信任，在出任拍拍总裁之前，她一直负责京东的POP平台。东哥将自己最看重的POP平台的负责人安插到了拍拍，可见当时东哥要与淘宝一决雌雄的决心有多大了。\r\n</p>\r\n<p>\r\n	蒉春莺出任拍拍总裁之后，应该说也推出了不少让人眼前一亮的产品以及运营形态，比如拍拍团购、拍拍抢购等等，在京东的拍拍比在腾讯时期的拍拍明显活跃了很多，无论在市场运营还是在公关推广上，都有可圈可点的表现。根据京东最新的财报显示，京东营收增长为61.71%，GMV增长为99.1%。这一数字很不错。与之对应的是，京东活跃用户同比增长90%，订单数增长76%。\r\n</p>\r\n<p>\r\n	尽管在今年的6.18中，相比去年同期的销售数据，拍拍的增长是236%，但去年的销售数据是多少？京东并没有披露，假设去年是0的话，今年取得这样的业绩的确值得表扬，但并不值得庆祝。\r\n</p>\r\n<p>\r\n	这组数字背后，我们可以看出，腾讯对京东的意义所在，拍拍对京东的意义所在。但这远远低于京东对此的预期，东哥最看重的微信以及手Q，并没有给拍拍带来显赫的流量和令人欣慰的用户数增长，这与腾讯的保留以及拍拍先天在品牌以及品类上缺失有关，这些都难以在短期之内得到提升，当"上淘宝"已经成为大众的一种生活方式之后，拍拍存在的地位，的确让人感到尴尬。\r\n</p>\r\n<p>\r\n	一年前拍拍气势汹汹要做C2C搅局者，一年后，我们发现拍拍对于京东，还是鸡肋。留着，不会挣大钱，放弃，则意味着与阿里巴巴在C2C领域的竞争始终缺失。两难之下，最终，东哥的选择和当年的马化腾如出一辙，蒉春莺的离开应该说从一个侧面说明了京东对拍拍的某种放弃，将蒉调到国际招商部的用心也很明显，跨境电商才是东哥下一步最看重的一步大棋，好刀要用到刀刃上，想必东哥很明白这一点。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '15151515-JulJul-0303', 'sc'),
(6, '测试通知', 'wenlife207', '6', '2015-07-01', '2015-07-10', '<p>\r\n	顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶\r\n</p>\r\n<p>\r\n	<img src="/upload/image/20150702/20150702040457_11708.jpg" width="700" height="500" alt="" />\r\n</p>', '15151515-JulJul-0303', 'sc'),
(7, '我们的祖国是花园', 'wenlife207', '5', '2015-07-08', '2015-07-07', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊&nbsp;', '15151515-JulJul-0303', 'dp'),
(8, '关于降工资的通知', 'wenlife207', '5', '2015-07-08', '2015-07-09', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊', '15151515-JulJul-0303', 'sc'),
(12, '测试通知', 'wenlife207', '5', '2015-07-07', '2015-07-09', 'afafaf', '15151515-JulJul-0303', 'ps'),
(20, '支付账户跨行转账将被叫停 免费转账时代或终结', 'wenlife207', '6', '2015-08-05', '2015-08-21', '<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>最严新规规定了啥？</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	1 根据央行《非银行支付机构网络支付业务管理办法（征求意见稿）》，用支付账户转账，无论转入还是转出，都只能在支付账户与自己的同名银行借记账户之间操作\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	2 限制转账支付金额：拥有综合类支付账户的个人，支付账户的余额付款交易年累计不得超过20万元；拥有消费类支付账户的个人，所有支付账户的余额付款交易年累计不得超过10万元\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	3 支付机构不得为金融机构，以及从事信贷、融资、理财、担保、货币兑换等金融业务的其他机构开立支付账户。这意味着此前第三方支付争抢的P2P网贷资金托管业务或被禁止\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	上周五，央行发布《非银行支付机构网络支付业务管理办法（征求意见稿）》（下简称意见稿），在刚刚过去的周末引发了轩然大波。有网友质疑，若对网络支付设置每日5000元额度的限制，连苹果手机都买不了。随后央行紧急作出解释，5000元限额仅针对第三方支付余额，超过5000元可以用银行卡快捷支付，不影响网友的正常网购。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	不过，央行的解释并未对意见稿中对于支付账户开立、单笔支付、转账等方面的限制做出说明，引发了不少用户的担忧和猜测。截至昨日记者发稿，支付宝、财付通等第三方支付未对“意见稿”做公开表态，只表示还在研究文件。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	意见稿一旦通过并实施，未来究竟会对用户的开户、网购、消费、转账带来哪些影响？华西都市报记者昨日就此采访了支付宝、财付通等相关第三方支付企业。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>开通支付账户难度大增</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>发红包需要开5个证明</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	意见稿规定用户在开设网上账户时，需要用5种方式来验证身份。也就是说，未来用户如果要发微信红包，需要先向微信提交5个机构的证明来验证自己身份才可以。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	根据意见稿的第十六条，支付机构给个人开户，如果是消费类账户，需要三个机构为用户做身份验证。如果是具备理财、转账功能的综合账户，则需要五个机构来验证。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	而目前的支付宝、微信支付等主流的支付机构，都还达不到央行的规定，而且，这一规定对非银行类支付机构来说，几乎是一个不可能完成的任务。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	据业内人士介绍，这里的身份认证指的不是密码等安全手段，而是公安、税务、工商、银行、教育机构、居委会等能证明个人身份的机构。举个例子，用户上传身份证，支付机构可以通过公安网校验，来证明你是你；又比如，用户绑定银行卡，由于银行卡是实名制的，所以校验银行卡信息也可以证明你是你。而目前，像支付宝、微信支付等都是只用了这两种外部渠道来证明你是你。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	但是，央行认为，这两种外部渠道并不足以证明用户身份，用户需要找到更多外部渠道来证明“你是你”方可开户。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	换言之，今后用户开设支付账号，可能还要上传文凭学历、纳税证明、户口本、护照等一系列东西。打个比方，未来用户如果要给朋友发个微信红包，发之前先要向微信证明“你是你”：上传文凭、纳税证明、户口本、护照等资料，或者跑工商、居委会各种地方开证明。只有经过5种身份验证后，才可以发微信红包。这无疑将极大地影响用户使用微信红包的体验。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>告别免费转账时代</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>AA收款功能或成摆设</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	无论是支付宝钱包还是微信支付，都有一个AA收款功能，七八个人聚餐，一人买单发起AA收款，填上聚餐人数，系统就会自动算出每人支付费用发出收款信息，其他人凭此打款到买单人账上，这其实利用的就是第三方支付账户的转账功能。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	但如果意见稿实施，今后大家聚餐可能还得回归中国人的传统，一人买单轮着请客。根据意见稿第十七条的规定，支付机构为客户办理银行账户向支付账户转账的，转出账户应仅限于支付账户客户本人同名银行借记账户；办理支付账户向银行借记账户转账的，转入账户应仅限于客户预先指定的一个本人同名银行借记账户。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	这也就是说，你的支付宝账户只能给自己的银行卡转账，不仅不能AA打款，想给老家的父母孝敬点生活费，可能也要去银行排队；老板给员工发工资或许也只能一家家银行去倒腾了。假如意见稿得以实施，城市用户可去营业厅柜台、ATM机、手机银行或者通过网银进行转账，但很多农村地区只支持邮局和农村信用合作社，有些地方小银行也没有网银，无法使用手机银行转账，若第三方支付转账被叫停，就只能去银行汇款了。而银行的跨行转账一般要收取一定手续费，这意味着通过支付宝、财付通等支付工具免费转账的午餐没了。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>“快捷支付”超200元</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>或需登录银行网银验证</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	虽然央行在8月1日发表的解释中表示，网购超过每日5000元的限额不要紧，还可以通过银行卡快捷支付来付款，这个没有限制。但意见稿规定，支付机构根据客户授权，向客户开户银行发送支付指令，扣划客户银行账户资金的，支付机构、客户和银行在事先或者首笔交易时，单笔金额200元以上，支付机构不得代替银行进行客户身份及交易验证。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	对此规定，有网友提出疑问：如果交易超过200元，是不是输完网络支付账号的密码后，还要跳到银行的APP或需要银行短信验证才能支付成功呢？\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	央行对此的解释是，200元以上的支付，具体银行验还是支付机构验，必须是客户授权同意银行与支付机构按约定做的。如果他们约定由机构验，那么一旦发生资金欺诈或盗窃，银行必须承担资金安全责任，不允许推责给支付机构。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	过去银行给支付机构的单日限额在2万至5万元不等，而快捷支付（即无需跳转网银）方式可以最大限度提升用户支付效率。业内人士认为，明确银行与支付机构的责任是好，但对于用户来说，银行对支付机构的快捷支付限额将缩水。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>新规目的/</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>规范“类存款”业务</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>规避盗刷、欺诈乱象</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	观意见稿全文，核心在于规范第三方支付的“类存款”业务，提高账户的安全性。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	中央财经大学金融法学院教授黄震认为，“盗刷、欺诈、套现等乱象频发，网络支付安全越来越受到监管部门重视。”他表示，意见稿是想让非银行支付机构回归当初发牌照时的初衷，服务于电商做小额、快捷的支付业务，不希望非银行支付机构的业务边界无限扩张。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	“此次《意见稿》区分了支付机构与银行机构的差异，防止支付机构出现银行化、银联化，实质上积极巩固了银行体系在金融行业中坚不可摧的信用交易地位，鼓励支付机构可大力开展通道业务。利于维护金融行业稳定、长期健康发展。”华泰证券金融业分析师罗毅认为。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	互联网咨询机构易观国际分析师马韬表示，意见稿对于账户管理做出的种种规定，实际上是强调第三方支付的“中介性”，淡化“吸存”“转账”功能，对百姓的支付体验影响不大。大部分人仍将第三方支付作为小额支付工具，如金额过高，可通过网银支付。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	艾瑞咨询分析师李超表示，意见稿客观上有利于保障客户资金安全，因为支付账户所记录的资金余额相当于“预付款”，不受《存款保险条例》保护。近年来，第三方支付账户沉淀资金被盗取、挪用的事件时有发生。意见稿中对于第三方支付的功能限制，一定程度上避免了风险积聚。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>行业影响/资金离开第三方账户</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	<b>行业两极分化将加剧</b>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	目前我国取得第三方支付牌照的公司约270家，2014年第三方互联网支付交易规模超8万亿，同比增长50%。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	从意见稿来看，第三方支付机构的业务受到了较多限制。例如，支付机构不得为金融机构以及从事信贷、融资、理财、担保、货币兑换等金融业务的其他机构开立支付账户，这意味着第三方支付为大宗商品交易市场、P2P网贷、众筹平台进行资金托管的业务将受到极大约束，甚至被禁止。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	此外，大额消费将不能走网络清算通道，需要回归银联，直接减少支付机构的资金沉淀；同时意见稿要求每个账户的开立需采用3-5种以上方式进行交叉验证，将使支付机构丧失大量潜在用户。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	意见稿一旦实施，将对数万亿市场产生影响。业内人士预见，新规之下，大公司仍将延续多元化经营的路径，而小公司可能因竞争压力退出市场。零壹财经分析师赵飞表示，未来大公司将开展对多家小公司的收购，提升支付通道规模。\r\n</p>', '2015-08-03 12:08:33', 'sc'),
(21, '全国4千万公职人员涨薪已完成 基本工资两年一调', 'wenlife207', '5', '2015-08-03', '2015-08-20', '<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	据人社部通报，按照国务院部署，机关事业单位调整基本工资标准工作7月底前已全面如期完成，按照规定，人均基本工资调整约300元。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	“这次工资调整，不是简单的提高工资水平，而是一次完善工资制度的改革，重在‘建机制、调结构’。”人社部负责人介绍说，这次调资工作中，主要体现了三个特点。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	一是调结构。为了进一步优化工资结构，将部分规范津贴补贴或绩效工资纳入基本工资，提高了基本工资占工资的比重。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	据21世纪经济报道了解，调整后，机关单位（含参公管理的单位）工作人员参加养老保险的个人缴费工资基数，包括本人上年度工资收入中的四部分：基本工资；国家统一的津贴补贴；规范后的津贴补贴；年终一次性奖金。事业单位员工个人缴费工资基数则由本人上年度工资收入中的三分部分构成，分别是基本工资；国家统一的津贴补贴；绩效工资。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	二是重基层。根据近年来对各地公务员工资的调查，基层公务员工资水平普遍偏低，“向基层倾斜”是本次工资调整的突出特点之一。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	具体来说，这次调整基本工资标准主要是增加级别工资，基层资历较长的公务员虽然职务较低，但级别和级别档次相对较高，可以拿到较高的工资。对乡镇机关事业单位人员还建立了乡镇工作补贴制度，在乡镇工作时享受，离开时取消。在县以下机关建立公务员职务与职级并行制度，基层公务员在不晋升职务的条件下，可以通过职级晋升提高工资待遇。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	目前，中国机关事业单位近4000万在职人员，有近800万人在乡镇工作。以云南的调整幅度为例，该省乡镇机关事业单位工作人员每月增加500元的乡镇工作岗位补贴，要高于普通标准。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	三是建机制。此次调整，进一步明确了建立基本工资标准正常调整机制，近期要每两年调整一次基本工资标准。依据工资调查比较结果，综合考虑国民经济发展、财政状况和物价变动等因素，确定调整幅度，逐步提高基本工资占工资的比重。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	“这次调整基本工资标准，所有人员的基本工资都是增加的。”人社部负责人表示，由于调资工作结合养老保险制度改革同步推进，且养老保险个人缴费因个人缴费工资的高低差异较大，具体到个人，扣除养老保险个人缴费后实际增加的工资有多有少。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	工资涨幅的程度差异，在不同行业、不同地区都有体现。以北京为例，该市月人均净涨100元。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	以陕西为例，该省一位在岗24年的高级教师告诉21世纪经济报道记者，几天前上月工资到账了，工资卡里增加了607元。但她也并不清楚，这笔到手的工资是否已扣除社保缴费，并且，增加的工资是月度增额，还是补发的自去年10月以来的增加额。如果是后者的话，其每月工资增幅大概在60元。而她与她基本拥有同样工龄、在政府机关就职的丈夫，上月工资增加了387元，仅为其一半。\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#252525;font-family:宋体, sans-serif;text-align:justify;background-color:#FFFFFF;">\r\n	“在收入水平较高的地区，部分参加工作晚、职务较低的人员，增加的工资不足以完全弥补养老金保险个人缴费，出现‘增不抵缴’的现象。”人社部负责人表示，相关地区和部门将采取有力措施，确保所有机关事业单位工作人员个人按规定缴纳养老保险后当期工资都能增加\r\n</p>', '2015-08-03 12:08:34', 'sc'),
(22, '释永信被举报 警方到寺“给方丈做了3页笔录”', 'wenlife207', '5', '2015-08-03', '2015-08-06', '<h1 style="text-indent:2em;">\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">少林寺相关负责人日前告诉澎湃新闻（www.thepaper.cn），“释正义”发帖举报后，少林寺到登封市公安局报案（注：控告释正义侮辱、诽谤），后登封市公安局少林派出所一个副所长带队到少林寺，给释永信做了笔录，“做了三页”。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">“以前方丈也遇到多次风波，但没有像这次这样。”该负责人说，虽说方丈比较淡定，但心情不受一点影响也是不可能的，方丈原话是“这次要做一个了断，我一定会给社会各界人士、方方面面一个交代”。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">据新华国际客户端8月3日报道，正在泰国的少林寺首座释永福说，释永信是8月1日临时决定不去泰国的，其他方面情况，他“不清楚”，“方丈临时有点事，我先行，方丈随后就到”。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">不过，当记者追问是否已购买机票及具体赴泰日期时，释永福表示均未确定。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">8月2日，知情人士向澎湃新闻透露，释永信未去泰国，行程推迟，“重大活动在5日，他应该4日晚去”。就释永信是否4日晚去泰国，澎湃新闻8月3日致电正在泰国的少林寺官网负责人邹相，电话被挂断。少林寺方丈室等部门工作人员的电话，拨打均无人接听。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">新华国际客户端记者在2日晚的活动现场看到，嘉宾名单上位列第三位的仍然是“释永信方丈”，现场播放的少林寺简介录像片中，也仍数次出现释永信的画面。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">据少林寺官网7月10日公布的“少林文化丝路行”之泰国文化交流活动安排，活动从8月2日上午拜访泰国现任代僧王颂德•帕•摩诃拉查曼克拉赞长老（Somdet Phra Maha Rachamangkalajarn）开始，8月5日上午是：返程曼谷金佛寺，参加泰国王室组织的“北少林寺佛像迎请法会”，结缘纪念开光佛像，参加人包括“永信方丈及少林寺僧团代表及少林都市禅堂禅行护法团”。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">对于释永信未准时出行的原因，据新京报8月2日报道，少林无形资产管理有限公司总经理钱大梁称，释永信正在少林寺内接受宗教局的调查；日前，登封市宗教局派驻的调查组已经来到少林寺，对释永信被举报事件的当事人进行调查。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">不料，钱大梁随后发布声明称，新京报上述报道中“释永信正在少林寺内接受宗教局的调查”为不实报道，严重误导读者。</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:SimSun;font-size:14px;">新京报公布采访录音显示，钱大梁说，登封市宗教局的调查组在少林寺，释永信要接待，“调查组来，所有当事人，都在做调查嘛。来了他肯定要接待，要接受调查嘛。”</span> \r\n	</p>\r\n</h1>', '2015-08-03 12:08:36', 'sc'),
(23, '台湾导游呼吁抵制顶新 康师傅:恶意中伤 已报警', 'wenlife207', '5', '2015-08-03', '2015-08-05', '<p>\r\n	成都商报【康师傅：已就“台湾#导游呼吁抵制康师傅#”一事报警】近日微博热传一视频：台湾导游告诉大陆游客，康师傅在台湾的馊水油事件，台湾人民正进行“灭顶行动”，呼吁大陆游客一同抵制。康师傅控股有限公司今日发表声明，称该名导游恶意中伤，已报案。\r\n</p>\r\n<p>\r\n	中国经济网北京8月3日讯 针对近日网络中流传的“某台湾导游恶意中伤康师傅”的视频，今日康师傅官网发表声明表示，康师傅在中国内地生产与销售的产品从未涉及台湾近年来的油品事件，从未进口并使用台湾相关油品。\r\n</p>\r\n<p>\r\n	据了解，自2014年开始，康师傅已多次通过官方及媒体渠道进行事实澄清，国家质量监督检验检疫总局和国台办也分别于2014年10月22日和2014年10月29日正式发布澄清消息，证实康师傅在中国内地生产所使用的油品安全无虞。\r\n</p>\r\n<p>\r\n	声明表示，康师傅在生产经营各环节均严格遵守国家相关法律法规和各项标准，严守食品安全底线。针对相关视频中的恶意中伤行为，康师傅已于第一时间向相关媒体平台进行举报，并已向所在地区警方报案，提请司法介入调查。\r\n</p>\r\n<p>\r\n	此外，针对个别自媒体社交账户持续煽动及散播谣言的行为，康师傅也表示将按照国家针对“散播网络谣言”的法律规定，严肃追究其法律责任，坚决维护企业品牌名誉及合法权益。 声明称：“在此，康师傅强烈呼吁，社交媒体平台应加强对涉及食品安全信息的管理，勿使社交媒体成为造谣的利器、传谣的温床，并期盼社会各界共同维护健康和谐的网络环境。”\r\n</p>\r\n<p>\r\n	据中国经济网记者了解，2014年10月22日，国家质检总局官方网站信息显示，台湾方面调查发现，台湾顶新集团从越南大幸福公司进口饲料用油用于生产食用油。有媒体报道称越南大幸福公司的主力市场是大陆，其销往大陆的油脂数量是销往台湾的数倍以上。质检总局对此高度重视，立即组织核查有关信息。经查询进口检验检疫记录，2013年至今，我国未进口过越南大幸福公司生产的食用和饲用油脂。质检总局已向台湾方面进一步核实有关信息，并与越南有关方面取得联系，了解有关具体情况。质检总局将继续密切关注此事件，并根据事态发展情况及时采取措施，确保进口食用油质量安全。\r\n</p>\r\n<p>\r\n	此外，在2014年10月29日，国台办新闻发言人范丽青在例行新闻发布会上回答记者提问时表示，“所谓越南饲料油大量进入大陆，不符合事实。10月22日，国家质量监督检验检疫总局发布消息说，经查询进口检验检疫记录，从2013年至今，大陆没有进口过越南大幸福公司生产的食用和饲料用油脂。对于台湾食用油弊案，自从9月初爆发以来，大陆质检部门对于台湾方面所公布涉及问题猪油企业的产品采取了暂停进口措施；对台湾方面公布我们已经进口的问题产品，也要求进口商实施预防性召回。对食品安全问题大陆方面一直高度重视。有关部门将会继续密切与台湾方面联系，关注事件进展，根据事态发展采取相应措施，以保障消费者权益。\r\n</p>', '2015-08-03 12:08:16', 'sc'),
(24, '人民日报五问收费公路改革:收费期限为何延长', 'wenlife207', '5', '2015-08-03', '2015-08-13', '<p>\r\n	从1988年第一条高速公路通车到如今总里程居世界第一，“借钱修路、收费还贷”的收费公路政策使我国快速将高速公路总规模做大。与此同时，也积累下债务高企、亏损加剧等诸多矛盾。按2004年11月1日起施行的现行《收费公路管理条例》（下简称《条例》），一些高速公路已经收费到期乃至超期，未来是继续收费还是停止收费？\r\n</p>\r\n<p>\r\n	7月21日，交通运输部发布《收费公路管理条例》修订稿（下简称《修订稿》），向社会公开征求意见。《修订稿》提出，政府收费的高速公路实行统借统还（即在一省范围内实行“统一举债、统一收费、统一还款”），收费期限以路网实际偿债期确定，不再受具体年限限制；偿债期、经营期届满后，实行养护管理收费。\r\n</p>\r\n<p>\r\n	这样一来，收费公路改革迅速成为社会关注的热点：现行《条例》规定，政府还贷公路和经营性公路的收费期限分别为最长不得超过15年和25年，中西部最长不得超过20年和30年。根据这一规定，收费还有期限，为何现在要改成“直至偿清债务”？养护期还要收费的依据何在？为何实行统借统还，将一省之内的高速公路打包处理？\r\n</p>\r\n<p>\r\n	要认识改革初衷，还得冷静而理性地审视发展现状：高速公路为什么会债务高企、巨额亏损？高速公路是否建得过多过快了？近日，本报记者采访了交通运输部相关负责人及专家学者，试图深入剖析这些问题。\r\n</p>\r\n<p>\r\n	一问：\r\n</p>\r\n<p>\r\n	巨额亏损从何而来？\r\n</p>\r\n<p>\r\n	资金需求巨大，银行贷款成为主要资金来源，加之建设速度加快，积累了高额债务\r\n</p>\r\n<p>\r\n	“印钞机”“车轮一响，黄金万两”……有人说收费公路是一本万利的暴利行业，事实果真如此吗？\r\n</p>\r\n<p>\r\n	“确实有一些建成较早、成本较低、位置较好的高速公路是盈利的，且利润率较高，但高速公路‘贫富不均’，整体上肯定是亏损的。”交通部管理干部学院教授张柱庭说。数据显示，2014年我国收费公路收支缺口高达1571.1亿元，此前三年分别为323亿元、566亿元、661亿元。\r\n</p>\r\n<p>\r\n	巨额亏损从何而来？交通运输部公路局副局长王太认为，原因包括正常还债阶段还本付息支出增长，以及债务规模的不断增加：到去年底，全国收费公路债务余额高达3.8万多亿元。而债务规模大，则与收费公路资金需求巨大及“贷款修路”的资金筹集方式密不可分。\r\n</p>\r\n<p>\r\n	——公路特别是高速路成本高，资金需求大。\r\n</p>\r\n<p>\r\n	去年，我国四车道高速公路平均造价为7700万元/公里，是2000年的2.4倍、2004年的1.83倍。“上世纪90年代，一些路段成本仅需1000多万元/公里，前不久新建的京台高速，成本高达3.6亿元/公里。”交通部规划院战略所所长徐丽说，高速路成本升高除因原材料、人工成本上涨外，还受征地拆迁费用上升，以及因地形所限需修大量桥梁、隧道、高架桥等因素影响。\r\n</p>\r\n<p>\r\n	——高速公路建设资金大头来自银行贷款。\r\n</p>\r\n<p>\r\n	据统计，现有16.26万公里收费公路累计建设投资为6.15万亿元，以银行贷款为主的债务性资金占七成，且银行商业贷款对高速路这样的基础设施建设一般无利率优惠。“日本通过发债筹集资金，有的利息只有0.78%，而我们的融资成本一般在6%—7%。”国家行政学院教授王伟说。\r\n</p>\r\n<p>\r\n	——公路建设加快。\r\n</p>\r\n<p>\r\n	王太认为，债务规模大也由于我国加快了公路建设：2010年，收费公路收支基本平衡；2011年至2014年，新增收费高速公路里程占总里程的31.1%，债务余额占债务总余额的45.6%。\r\n</p>\r\n<p>\r\n	收费公路亏损，除债务规模大这一主因外，也不能忽视其他因素：个别企业严重超编，推高了用人成本、降低了运营效率；有的企业发放高额福利，甚至将资金建设楼堂馆所；有的高速路建设环节层层转包，或控制成本不力，导致超支等。“未来，应加强对收费公路机构编制、财务支出的控制，并引入第三方评价评估机构，对其技术状况、服务质量等作出客观独立的结论。”交通部公路研究院党委书记杨文银说。\r\n</p>\r\n<p>\r\n	二问：\r\n</p>\r\n<p>\r\n	高速公路是否建得过多过快？\r\n</p>\r\n<p>\r\n	部分地方高速路存在规划随意调整、过度建设问题\r\n</p>\r\n<p>\r\n	债务高企，亏损扩大，自然会带来这样的疑问：欠了这么多债，为何还要修高速？高速路建得过多过快了吗？\r\n</p>\r\n<p>\r\n	根据《国家公路网规划》，到2030年，我国将建成约13.6万公里国家高速公路网。“目前已完成8.7万公里，一些大通道还未完全贯通，另有一些早期通车路段急需扩容。”交通运输部规划司副司长任锦雄表示，该规划综合考虑了全国的政治、经济、文化、社会、军事等因素，“尽管近几年建设速度有所加快，但推进还算稳步。”\r\n</p>\r\n<p>\r\n	值得注意的是，除国家高速公路网外，各省也有各自的地方高速公路网规划。“国高”有序推进，一些“地高”却可能存在过度建设。\r\n</p>\r\n<p>\r\n	“过去，一些省份片面追求GDP，把修建高速路作为推动经济发展乃至提高政绩的手段，而不管有无车流，更不考虑如何还本付息。”北京交通大学教授赵坚表示，一些省份在错误理念的指导下，“编制过于宏伟的规划，有的甚至不切实际地提出‘县县通高速’。”在赵坚看来，若某地长期内出行需求不足，完全可以修成低等级的普通公路，成本能低至少一半。\r\n</p>\r\n<p>\r\n	“有些路段修成一级、二级就够了，但却修成了高速。”徐丽分析，其背后原因主要在于融资模式：修建一级、二级公路，需地方财政全部埋单；而修建高速，地方只需出一部分资本金，大头为银行贷款。\r\n</p>\r\n<p>\r\n	徐丽建议，未来必须增强规划的严肃性，将建设与财政能力、资金解决方案统筹考虑，不然就可能埋下债务风险的隐患。\r\n</p>', '2015-08-03 12:08:54', 'sc');

-- --------------------------------------------------------

--
-- 表的结构 `reqduty`
--

CREATE TABLE IF NOT EXISTS `reqduty` (
`id` int(10) unsigned NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `duty` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '职责',
  `scope` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '作用范围',
  `param` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '参数',
  `addon` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '附加'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `reqduty`
--

INSERT INTO `reqduty` (`id`, `role`, `duty`, `scope`, `param`, `addon`) VALUES
(1, 'wenlife207', 'xzb', '0-1', '1', ''),
(2, 'wenlife207', 'xzb', '0-1', '0', ''),
(3, 'wenlife207', 'xzb', '0-2-3', '0', ''),
(4, 'yiciyuan', 'bgs', '0-1-5', '4', ''),
(5, 'wenlife207', 'jwc', '1-2-3', '0', ''),
(6, 'wenlife207', 'xzb', '0-1-2', '0', '');

-- --------------------------------------------------------

--
-- 表的结构 `reqform`
--

CREATE TABLE IF NOT EXISTS `reqform` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '申请标题',
  `type` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '申请类型',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '申请内容',
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '申请用户名',
  `userdepart` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '所在部门',
  `createtime` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '创建时间',
  `begindate` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enddate` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handledepart` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '处理部门',
  `state` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '状态'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `reqform`
--

INSERT INTO `reqform` (`id`, `title`, `type`, `content`, `user`, `userdepart`, `createtime`, `begindate`, `enddate`, `handledepart`, `state`) VALUES
(1, '购买电脑', 'req_purchase', '购买电脑用于机房建设，好吧', 'wenlife207', '高一年级组', '2015-09-20', NULL, NULL, 'xzb', '2'),
(2, '申请买车', 'req_purchase', '公务用车，价格实惠，爱买不买', 'wenlife207', NULL, '2015-09-22', NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- 表的结构 `reqhandlerecord`
--

CREATE TABLE IF NOT EXISTS `reqhandlerecord` (
`id` int(10) unsigned NOT NULL,
  `reqform` int(11) NOT NULL COMMENT '申请单ID',
  `result` varchar(2) COLLATE utf8_unicode_ci NOT NULL COMMENT '处理结果',
  `note` text COLLATE utf8_unicode_ci COMMENT '处理意见',
  `handler` int(11) NOT NULL COMMENT '处理人',
  `createtime` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '处理时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `reqitem`
--

CREATE TABLE IF NOT EXISTS `reqitem` (
`id` int(11) NOT NULL,
  `reqform_id` int(11) unsigned NOT NULL COMMENT '申请单ID',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '名称',
  `amount` int(11) NOT NULL COMMENT '数量',
  `price` int(11) DEFAULT NULL COMMENT '单价'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `reqitem`
--

INSERT INTO `reqitem` (`id`, `reqform_id`, `name`, `amount`, `price`) VALUES
(1, 1, '电脑', 451, NULL),
(2, 1, '服务器', 1, NULL),
(3, 2, '机车', 1, NULL),
(4, 2, '轮胎', 2, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'wenlife207', 'hBMqzH6mXgAF9ERi59Iw2sVm8kj6aYlX', '$2y$13$KQo/eGFDN61AG5g/pcH5mOTfApkmxTyydm91aUkNJymKQz6.0y.vy', NULL, 'mawl146@qq.com', 10, 1435648605, 1439215186),
(2, 'wenlife206', 'eNvJqmcdq2zw6EKHPmKFYPP5zRVO-ipF', '$2y$13$bHi7Ayqi0wgwkxhxO.2IM.HN.milSwcI0HIO/Nn4QeekVdxGtZccK', NULL, 'mawl111@qq.com', 10, 1439041697, 1439293589),
(19, 'yiciyuan', '8c7wHCxl-eMqwnTqm2xTMVAZnhl4_PLU', '$2y$13$Tz6cHE0aXLbcczNFQNWPiul59kZ56ET/N2NoXQRlZiCby6g96Rz02', NULL, 'mawl@qq.com', 10, 1439291281, 1439291281),
(22, 'mawe', '5Tky5xeBJUw-Go4b4E1CvCFHez7qeBud', '$2y$13$w6mmg0a8HyPci3zDDrgC9ehoV1mprMzHTMVY.2Gmr2Id7UGhcHLSa', NULL, 'f@qq.com', 10, 1439292304, 1439293136);

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名 外键',
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `idcard` varchar(18) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL COMMENT '职称',
  `graduation` varchar(20) DEFAULT NULL COMMENT '学历',
  `degree` varchar(20) DEFAULT NULL COMMENT '学位',
  `intro` text COMMENT '个人简介',
  `status` tinyint(1) DEFAULT NULL COMMENT '锁定'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `name`, `phone`, `idcard`, `level`, `graduation`, `degree`, `intro`, `status`) VALUES
(3, 'wenlife207', '马文林', '18508126876', '510824198810228113', '0', '研究生', '0', '我是一个信息技术教师', 1),
(9, 'wenlife206', '马文鸿', '3', '2510216411', '3', '研究生', '3', 'afafaf', NULL),
(14, 'yiciyuan', '张惠美', '518956231', '51052154612', NULL, NULL, NULL, NULL, NULL),
(16, 'mawe', 'mawenlin', 'malin23', 'faef2', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- 转存表中的数据 `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charge`
--
ALTER TABLE `charge`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reqduty`
--
ALTER TABLE `reqduty`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reqform`
--
ALTER TABLE `reqform`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reqhandlerecord`
--
ALTER TABLE `reqhandlerecord`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reqitem`
--
ALTER TABLE `reqitem`
 ADD PRIMARY KEY (`id`), ADD KEY `reqform_id` (`reqform_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `idcard` (`idcard`);

--
-- Indexes for table `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `reqduty`
--
ALTER TABLE `reqduty`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reqform`
--
ALTER TABLE `reqform`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reqhandlerecord`
--
ALTER TABLE `reqhandlerecord`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reqitem`
--
ALTER TABLE `reqitem`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- 限制导出的表
--

--
-- 限制表 `reqitem`
--
ALTER TABLE `reqitem`
ADD CONSTRAINT `reqitem_ibfk_1` FOREIGN KEY (`reqform_id`) REFERENCES `reqform` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `user_info`
--
ALTER TABLE `user_info`
ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
