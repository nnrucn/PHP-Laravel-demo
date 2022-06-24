-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-06-23 12:00:00
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `demo-1`
--

-- --------------------------------------------------------

--
-- 表的结构 `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站标题',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站摘要',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网站内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '英文名称',
  `title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '中文名称',
  `config` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '配置信息',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `configs`
--

INSERT INTO `configs` (`id`, `name`, `title`, `config`, `created_at`, `updated_at`) VALUES
(2, 'siteconfig', '网站配置', '{\"Webtitle\":\"\\u817e\\u8baf\\u516c\\u53f8\",\"keywords\":\"\\u817e\\u8baf\\u662f\\u4e00\\u5bb6\\u4e16\\u754c\\u9886\\u5148\\u7684\\u4e92\\u8054\\u7f51\\u79d1\\u6280\\u516c\\u53f8\",\"Describe\":\"\\u516c\\u53f8\\u4e00\\u76f4\\u79c9\\u627f\\u79d1\\u6280\\u5411\\u5584\\u7684\\u5b97\\u65e8,<br><br>\\r\\n\\u6211\\u4eec\\u7684\\u901a\\u4fe1\\u548c\\u793e\\u4ea4\\u670d\\u52a1\\u8fde\\u63a5\\u5168\\u7403\\u903e10\\u4ebf\\u4eba\\u3002\"}', NULL, NULL),
(4, 'Information', '基本配置', '{\"Class\":\"16\\u8f6f\\u4ef6\\u5f00\\u53d13\\u73ed\",\"StudentName\":\"\\u51b6\\u90e1\\u79cb\",\"StudentID\":\"16020767355975\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_10_14_032252_create_configs_table', 1),
(17, '2021_10_29_112431_create_news_table', 2),
(18, '2021_12_17_202339_create_shop_table', 3),
(19, '2021_12_18_180427_create_about_table', 4);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新闻标题',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新闻摘要',
  `clicked` int(11) NOT NULL COMMENT '浏览次数',
  `ImagePath` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '缩略图路径',
  `Content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新闻内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `clicked`, `ImagePath`, `Content`, `created_at`, `updated_at`) VALUES
(60, '李商隐', '沁阳', 174, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '游龙当归海，海不迎我自来也。', '2021-12-14 09:47:37', '2021-12-15 09:47:37'),
(59, '欧燕', '潮州', 93, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '黄河捧土尚可塞，北风雨雪恨难裁。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(51, '柯建国', '郑州', 169, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '沧海月明珠有泪，蓝田日暖玉生烟。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(58, '竺俊', '合肥', 181, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '戏马台南追两谢，驰射，风流犹拍古人肩。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(57, '花淑华', '郑州', 170, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '斜阳废苑朱门闭，吊兴亡、遗恨泪痕里。', '2021-11-04 03:38:09', '2021-12-19 12:16:27'),
(56, '翁敏静', '广州', 97, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '铁马红旗寒日暮，使君犹寄边城。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(55, '薄林', '福州', 181, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '浮云游子意，落日故人情。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(54, '廖红梅', '呼和浩特', 127, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '春风对青冢，白日落梁州。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(53, '焦成', '西宁', 191, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '竹枝三唱，为君凄断，东日西边雨。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(52, '黄子安', '乌鲁木齐', 184, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '悄无人、桐阴转午，晚凉新浴。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(36, '韩秀英', '济南', 162, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '日暮秋风起，萧萧枫树林。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(35, '孙刚', '重庆', 92, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '雪暗凋旗画，风多杂鼓声。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(34, '马瑶', '天津', 178, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '满堤芳草不成归，斜日画桥烟水冷。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(33, '阳飞', '福州', 196, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '长风萧萧渡水来，归雁连连映天没。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(37, '唐桂芬', '成都', 120, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '渐霜风凄紧，关河冷落，残照当楼。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(39, '高静', '西安', 67, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '便是有情当落日，只应无伴送斜晖。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(38, '左子安', '兰州', 100, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '斜阳草树，寻常巷陌，人道寄奴曾住。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(40, '方健', '西宁', 111, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '东风吹水日衔山，春来长是闲。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(41, '甄燕', '银川', 144, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '荆江日落阵云低，横戈跃马今何时。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(42, '于莉', '香港', 110, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '深秋帘幕千家雨，落日楼台一笛风。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(43, '马祥', '长春', 86, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '萧萧山路穷秋雨，淅淅溪风一岸蒲。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(44, '向玲', '澳门', 160, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '人言落日是天涯，望极天涯不见家。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(45, '席斌', '北京', 27, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '异方时节三巵酒，残岁风烟一惨颜。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(46, '毕晨', '福州', 108, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '翻风适自乱，照水复成妍。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(47, '邸小红', '哈尔滨', 134, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '白日丽飞甍，参差皆可见。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(48, '顾建军', '西宁', 98, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '愿君留得长妖韶，莫逐东风还荡摇。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(50, '揭磊', '澳门', 155, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '更远树斜阳，风景怎生图画。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(49, '伏毅', '武汉', 163, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '江上形容吾独老，天边风俗自相亲。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(32, '苑静', '广州', 53, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '不知细叶谁裁出，二月春风似剪刀。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(31, '纪秀梅', '西宁', 153, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '关城榆叶早疏黄，日暮云沙古战场。', '2021-11-04 03:38:09', '2021-11-04 03:38:09'),
(30, '俞宇', '拉萨', 35, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '曾伴浮云归晚翠，犹陪落日泛秋声。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(29, '梁腊梅', '重庆', 33, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '有藤娄络之，春华夏阴敷。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(28, '翟博涛', '福州', 87, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '犹恨东风无意思，更吹烟雨暗黄昏。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(27, '卞华', '合肥', 65, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '落日塞尘起，胡骑猎清秋。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(26, '樊华', '福州', 107, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '十二玉阑干，风动灯明灭。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(24, '佟金凤', '上海', 21, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '朝看水东流，暮看日西坠。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(23, '靳华', '郑州', 21, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '萧萧落木不胜秋，莫回首、斜阳下。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(22, '边爱华', '海口', 122, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '日落君山云气，春到沅湘草木，远思渺难收。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(21, '林洁', '拉萨', 98, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '想雁空、北落冬深，澹墨晚天云阔。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(20, '崔宁', '济南', 78, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '惊飙掠地冬将半，解鞍正值昏鸦乱。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(19, '龚飞', '广州', 159, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '歌起处，斜日半江红。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(18, '蒋致远', '天津', 50, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '一种可怜生，落日和烟雨。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(17, '韩东', '西安', 75, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '几度因风残絮，照花斜阳。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(16, '冯文君', '郑州', 147, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '落日醉醒问，一春无此寒。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(15, '胡伦', '太原', 31, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '移舟泊烟渚，日暮客愁新。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(14, '官旭', '合肥', 80, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '不知白日暮，欢赏夜方归。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(13, '晋志明', '郑州', 142, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '金带连环束战袍，马头冲雪度临洮。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(12, '穆晨', '哈尔滨', 93, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '牧羊边地苦，落日归心绝。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(11, '僧超', '拉萨', 63, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '可怜日暮嫣香落，嫁与春风不用媒。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(10, '习倩', '太原', 181, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '一杯且贾明朝事，送了斜阳月又生。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(9, '鞠玉', '长沙', 60, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '落日无人松径里，鬼火高低明灭。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(8, '僧琳', '杭州', 199, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '四面边声连角起，千嶂里，长烟落日孤城闭。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(7, '褚敏', '广州', 82, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '游人日暮相将去，醒醉喧哗。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(6, '颜建华', '郑州', 36, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '可堪孤馆闭春寒，杜鹃声里斜阳暮。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(5, '梁君', '沈阳', 81, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '波神留我看斜阳，放起鳞鳞细浪。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(4, '梁兰英', '哈尔滨', 171, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '秋风起兮白云飞，草木黄落兮雁南归。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(3, '葛林', '武汉', 177, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '渭北春天树，江东日暮云。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(2, '孔亮', '郑州', 138, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '日暮诗成天又雪，与梅并作十分春。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(1, '翟博涛', '福州', 87, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '两个黄鹂鸣翠柳，一行白鹭上青天。', '2021-11-08 15:21:22', '2021-12-10 02:43:09');

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@qq.com', '$2y$10$.FE/CtJ0dldKLOYF0ezdUeCpo0VuITjbO/oPtxu3Xgi9nTQ1Bzzre', '2021-12-02 02:48:33');

-- --------------------------------------------------------

--
-- 表的结构 `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新闻标题',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新闻摘要',
  `clicked` int(11) NOT NULL COMMENT '浏览次数',
  `ImagePath` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '缩略图路径',
  `Content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新闻内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `shops`
--

INSERT INTO `shops` (`id`, `title`, `description`, `clicked`, `ImagePath`, `Content`, `created_at`, `updated_at`) VALUES
(2, '纳兰性德', '萧萧落木不胜秋，莫回首、斜阳下。', 21, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '萧萧落木不胜秋，<br>莫回首<br>斜阳下。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(3, '张孝祥', '日落君山云气，春到沅湘草木，远思渺难收。', 122, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '日落君山云气，<br>春到沅湘草木，<br>远思渺难收。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(4, '吴文英', '想雁空、北落冬深，澹墨晚天云阔。', 98, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '想雁空、<br>北落冬深，<br>澹墨晚天云阔。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(5, '唐彦谦', '绊惹春风别有情，世间谁敢斗轻盈。\r\n楚王江畔无端种，饿损纤腰学不成。', 78, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '绊惹春风别有情，<br>世间谁敢斗轻盈。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(6, '李隆基', '甲之蜜糖，乙之砒霜。', 159, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '甲之蜜糖，<br>乙之砒霜。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(7, '纳兰性德', '一种可怜生，落日和烟雨。', 50, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '一种可怜生，<br>落日和烟雨。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(8, '史达祖', '几度因风残絮，照花斜阳。', 75, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '几度因风残絮，<br>照花斜阳。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(9, '沈蔚', '落日醉醒问，一春无此寒。', 147, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '落日醉醒问，<br>一春无此寒。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(10, '孟浩然', '移舟泊烟渚，日暮客愁新。', 31, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '移舟泊烟渚，<br>日暮客愁新。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(11, '李白', '不知白日暮，欢赏夜方归。', 80, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '不知白日暮，<br>欢赏夜方归。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(12, '马戴', '金带连环束战袍，马头冲雪度临洮。', 142, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '金带连环束战袍，<br>马头冲雪度临洮。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(13, '李白', '牧羊边地苦，落日归心绝。', 93, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '牧羊边地苦，<br>落日归心绝。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(14, '李贺', '可怜日暮嫣香落，嫁与春风不用媒。', 63, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '可怜日暮嫣香落，<br>嫁与春风不用媒。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(15, '胡适', '生命本没有意义，你要能给它什么意义，它就有什么意义。', 181, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '生命本没有意义，<br>你要能给它什么意义，<br>它就有什么意义。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(16, '钟离', '欲买桂花同载酒，只可惜故人，何日再见啊。', 60, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '欲买桂花同载酒，<br>只可惜故人，<br>何日再见啊。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(17, '苏轼', '长恨此身非我有，何时忘却营营。', 199, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '长恨此身非我有，<br>何时忘却营营。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(18, '陶渊明', '盛年不重来，一日难再晨。', 82, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '盛年不重来，<br>一日难再晨。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(19, '元稹', '取次花丛懒回顾，半缘修道半缘君。', 36, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '取次花丛懒回顾，<br>半缘修道半缘君。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(20, '李玉刚', '台下人走过，不见旧颜色。', 81, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '台下人走过，<br>不见旧颜色。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(21, '无名氏', '日出而作，日入而息。', 171, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '日出而作，<br>日入而息。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(22, '张仲素', '丁丁漏水夜何长，漫漫轻云露月光。', 177, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '丁丁漏水夜何长，<br>漫漫轻云露月光。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(23, '辛弃疾', '肠已断，泪难收。相思重上小红楼。', 1200, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '肠已断，<br>泪难收。<br>相思重上小红楼。', '2021-11-08 15:21:22', '2021-11-08 15:21:22'),
(24, '曹魏康', '人于浮世，独来独往，独生独死，苦乐自当，无有代者。', 1000, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '人于浮世，<br>独来独往，<br>独生独死，<br>苦乐自当，<br>无有代者。', '2021-11-08 15:21:22', '2021-12-10 02:43:09'),
(1, '李白', '浮云游子意，落日故人情。', 21, '/upload/img/pSWI0X6m23PGITtNjYoyiLW28k2F9Nfy.png', '浮云游子意，<br>落日故人情。', '2021-11-08 15:21:22', '2021-11-08 15:21:22');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '超级管理员', 'admin@qq.com', NULL, '$2y$10$BrGKLR0lnzgQO/DopE6TdOE1/bWKLtxEMOwvOOeV7pTDYfFvrxJ9.', NULL, '2021-12-02 02:44:13', '2021-12-02 02:44:13'),
(2, '非管理员', 'user@qq.com', NULL, '$2y$10$ucrvoY9DIH2JkF6iwdl31.N3KbitZXA9ird2zln9a.Ut96aRqgs7y', NULL, '2021-12-09 02:28:32', '2021-12-09 02:28:32');

--
-- 转储表的索引
--

--
-- 表的索引 `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `configs_name_unique` (`name`),
  ADD UNIQUE KEY `configs_title_unique` (`title`);

--
-- 表的索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 表的索引 `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- 使用表AUTO_INCREMENT `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- 使用表AUTO_INCREMENT `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
