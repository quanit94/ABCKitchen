-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2015 at 01:12 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_kitchen`
--
CREATE DATABASE IF NOT EXISTS `laravel_kitchen` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `laravel_kitchen`;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `food_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `food_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `food_description` text COLLATE utf8_unicode_ci NOT NULL,
  `food_created_at` date NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `food_name`, `food_price`, `food_image`, `food_description`, `food_created_at`) VALUES
(1, 'Rau muống xào tỏi', 5000, '1.jpg', 'Rau muống giòn, xào cùng với tỏi dậy mùi thơm khiến bữa cơm dường như ngon miệng hơn hẳn', '2015-07-15'),
(2, 'Canh cá', 6000, '2.jpg', 'Canh cá nấu dưa chua dịu vị dưa, béo mềm vị cá và thơm ngào ngạt mùi thì là, hành lá hẳn sẽ là lựa chọn tuyệt vời', '2015-07-15'),
(3, 'Thịt kho tàu', 5000, '3.jpg', 'Miếng thịt mềm rục có cả màu đỏ au của thịt nạc, trong trong của mỡ, nâu nâu của bì hầm nhừ, sóng sánh vàng ươm của nước màu chưng đường, kèm vị bùi của nước dừa xiêm, vị mặn của nước mắm đã được làm thanh đi bằng đường, thi thoảng có thêm vị hắc của chút xì dầu, điểm xuyết thêm mấy hột vịt luộc mà nước thịt ngấm đều từ trong lòng đỏ đến lòng trắng.', '2015-07-15'),
(4, 'Cá kho tiêu', 7000, '4.jpg', 'Món cá trê kho tiêu thơm ngon, ngọt thịt ăn kèm với cơm nóng chắc chắn sẽ khiến cả nhà thích mê', '2015-07-15'),
(5, 'Canh bầu nấu tôm', 7000, '5.jpg', 'Canh bầu nấu tôm rất đưa cơm, chỉ cần chan vài muỗng canh, húp xì xụp, thêm vài quả cà pháo thì chẳng mấy chốc bát cơm sẽ hết veo!', '2015-07-15'),
(6, 'Thịt heo xào dứa', 7000, '6.jpg', 'Thịt lợn xào chua chua, ngòn ngọt thanh nhẹ quyện lẫn trong hương vị thơm ngon của dứa vô cùng hấp dẫn', '2015-07-15'),
(7, 'Bắp cải luộc', 5000, '7.jpg', 'Bắp cải có vị thanh mát, là món ăn yêu thích của nhiều gia đình', '2015-07-15'),
(8, 'Gà rang lá chanh', 6000, '8.jpg', 'Gà rang với lá chanh tươi chính là kết hợp hoàn hảo từ xưa đến nay, thịt gà ngon mềm hòa quyện cùng lá chanh thơm dịu là món vô cùng đưa cơm', '2015-07-15'),
(9, 'Tôm rang me', 8000, '9.jpg', 'Vị me chua hòa quện cùng với mùi tôm thật thơm, làm cho tôm ăn không ngán', '2015-07-15'),
(10, 'Nem rán', 5000, '10.jpg', 'Nem rán ngon có vỏ màu vàng, nhân thịt mềm, thơm, cắn một miếng cảm nhận được vị giòn của bánh đa', '2015-07-15'),
(11, 'Nộm dưa chuột cà rốt', 5000, '11.jpg', 'Nộm dưa chuột cà rốt là sự đơn giản đến gần gũi, thân thuộc, vị ngọt mát tự nhiên từ dưa chuột, cà rốt kết hợp cùng vị bùi bùi của đậu phộng rang cùng màu sắc đẹp mắt sẽ khiến vị giác của gia đình bạn được thư giãn tuyệt đố', '2015-07-15'),
(12, 'Mực xào cần tỏi', 8000, '12.jpg', 'Món mực xào cần tỏi không những ngon miệng mà còn có thể cung cấp đấy đủ chất dinh dưỡng cần thiết cho cơ thể,món ăn với sự kết hợp giữa mùi thơm của cần tây và độ dòn dòn dai dai của mực.', '2015-07-15'),
(13, 'Mướp đắng xào trứng', 6000, '13.jpg', 'Trứng chín vàng xốp bao lấy những miếng mướp xanh mướt, hơi nhần nhận đắng, khi ăn nhai kỹ lại thấy vi ngòn ngọt.', '2015-07-15'),
(14, 'Canh rau ngót', 5000, '14.jpg', 'Trứng chín vàng xốp bao lấy những miếng mướp xanh mướt, hơi nhần nhận đắng, khi ăn nhai kỹ lại thấy vi ngòn ngọt.', '2015-07-15'),
(15, 'Canh cua', 6000, '15.jpg', 'Món canh cua nấu với rau mồng tơi và mướp, ăn với vài quả cà muối vào những ngày hè nóng nực thì thật …mát lòng mát dạ. Chỉ cần húp xụp vài miếng là hết ngay bát cơm ', '2015-07-15'),
(16, 'Chả lá lốt', 5000, '16.jpg', ' Miếng chả lá lốt mềm thơm cùng hương vị cay cay của nước dùng khiến bữa cơm thêm phần hấp dẫn.', '2015-07-15'),
(17, 'Gà rán', 8000, '17.jpg', 'Thịt gà có thể chế biến thành rất nhiều món ăn ngon miệng, trong đó thịt gà chiên giòn là món khoái khẩu của nhiều người', '2015-07-15'),
(18, 'Cá thu sốt cà chua', 9000, '18.jpg', 'Cá sốt cà chua là món ăn quen thuộc trong bữa cơm của các gia đình. Nước sốt cà chua kèm với thịt cá trộn đều ăn với cơm nóng, thêm một chén canh rau nhỏ là đủ dinh dưỡng cho bữa ăn.', '2015-07-15'),
(19, 'Thịt bò sốt vang', 9000, '19.jpg', 'Thịt bò được hầm chín mềm, cùng hương thơm đặc biệt “kêu gọi dạ dày” từ các gia vị như tỏi, hạt tiêu, và nhất là rượu vang sẽ khiến bạn không thể chống lại “cơn thèm”', '2015-07-15'),
(20, 'Mướp đắng nhồi thịt', 6000, '20.jpg', ' Vị thơm ngọt của thịt, vị đắng vừa miệng của mướp đắng không những sẽ làm cho bữa tối của thêm hấp dẫn hơn mà còn giải nhiệt cho bạn', '2015-07-15'),
(21, 'Trứng tráng', 5000, '21.jpg', 'Món ăn cơ bản, lành tính, dễ đưa cơm, lại bổ sung nhiều dưỡng chất cho cơ thể', '2015-07-15'),
(22, 'Canh ngao chua', 6000, '22.jpg', 'Một bát canh ngao nấu chua giúp cơ thể bớt háo nước, bồi bổ sức khỏe nhờ dinh dưỡng có trong ngao, cà chua, dứa…. Vị chua thanh thanh của cà chua và dứa quyện vào nhau tạo nên hương vị khó cưỡng', '2015-07-15'),
(23, 'Canh bí xanh dồn thịt', 6000, '23.jpg', 'Những lúc mệt mệt, chỉ cần có tô canh bí nhồi thịt nóng hổi để mà xì xụp thì mọi mệt mỏi dường như đều tan biến hết.', '2015-07-15'),
(24, 'Vịt nấu măng', 8000, '24.jpg', 'Vịt nấu măng tươi là món ăn truyền thống đã xuấy hiện từ lâu nhưng vẫn quyến rũ rất nhiều người nhờ hương vị thơm ngon, độc đáo.', '2015-07-15'),
(25, 'Nộm tai heo', 9000, '25.jpg', 'Nộm tai heo nổi bật và hấp dẫn nhất là ở vị giòn sựt của tai heo, lại thấm vị chua ngọt đậm đà và mùi thơm của các loại rau thơm thật hấp dẫn.', '2015-07-15'),
(26, 'Tôm rim nước dừa', 8000, '26.jpg', 'Thịt tôm chắc, ngọt lừ và béo nhẹ vị nước dừa xiêm được rim thấm thía là món ngon kích thích vị giác!', '2015-07-15'),
(27, 'Đậu phụ nhồi thịt sốt cà chua', 6000, '27.jpg', 'Đậu phụ nhồi thịt sốt cà chua có màu sắc bắt mắt lại khá ngon miệng. Đậu phụ mềm thơm, thịt ngọt tự nhiên cùng lớp nước sốt cà chua, sánh đặc, đậm đà rưới phía trên, ăn ngon phải biết', '2015-07-15'),
(28, 'Thịt rang cháy cạnh', 5000, '28.jpg', 'Thịt rang cháy cạnh có thể nói là một trong những món mặn "trứ danh" trong mâm cơm các gia đình Việt, đặc biệt là ở miền Bắc.', '2015-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_price` int(11) NOT NULL,
  `menu_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_description` text COLLATE utf8_unicode_ci NOT NULL,
  `menu_created_at` date NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `menu_price`, `menu_image`, `menu_description`, `menu_created_at`) VALUES
(1, 'Rau muống xào tỏi', 0, '1.jpg', 'Rau muống giòn, xào cùng với tỏi dậy mùi thơm khiến bữa cơm dường như ngon miệng hơn hẳn', '2015-06-09'),
(2, 'Canh cá', 0, '2.jpg', 'Canh cá nấu dưa chua dịu vị dưa, béo mềm vị cá và thơm ngào ngạt mùi thì là, hành lá hẳn sẽ là lựa chọn tuyệt vời', '2015-06-07'),
(3, 'Thịt kho tàu', 0, '3.jpg', 'Miếng thịt mềm rục có cả màu đỏ au của thịt nạc, trong trong của mỡ, nâu nâu của bì hầm nhừ, sóng sánh vàng ươm của nước màu chưng đường, kèm vị bùi của nước dừa xiêm, vị mặn của nước mắm đã được làm thanh đi bằng đường, thi thoảng có thêm vị hắc của chút xì dầu, điểm xuyết thêm mấy hột vịt luộc mà nước thịt ngấm đều từ trong lòng đỏ đến lòng trắng.', '2015-06-08'),
(4, 'Cá kho tiêu', 0, '4.jpg', 'Món cá trê kho tiêu thơm ngon, ngọt thịt ăn kèm với cơm nóng chắc chắn sẽ khiến cả nhà thích mê', '2015-06-10'),
(5, 'Canh bầu nấu tôm', 0, '5.jpg', 'Canh bầu nấu tôm rất đưa cơm, chỉ cần chan vài muỗng canh, húp xì xụp, thêm vài quả cà pháo thì chẳng mấy chốc bát cơm sẽ hết veo!', '2015-06-13'),
(6, 'Thịt heo xào dứa', 0, '6.jpg', 'Thịt lợn xào chua chua, ngòn ngọt thanh nhẹ quyện lẫn trong hương vị thơm ngon của dứa vô cùng hấp dẫn', '2015-06-11'),
(7, 'Bắp cải luộc', 0, '7.jpg', 'Bắp cải có vị thanh mát, là món ăn yêu thích của nhiều gia đình', '2015-06-12'),
(8, 'Gà rang lá chanh', 0, '8.jpg', 'Gà rang với lá chanh tươi chính là kết hợp hoàn hảo từ xưa đến nay, thịt gà ngon mềm hòa quyện cùng lá chanh thơm dịu là món vô cùng đưa cơm', '2015-06-06'),
(9, 'Tôm rang me', 0, '9.jpg', 'Vị me chua hòa quện cùng với mùi tôm thật thơm, làm cho tôm ăn không ngán', '2015-06-10'),
(10, 'Nem rán', 0, '8.jpg', 'Nem rán ngon có vỏ màu vàng, nhân thịt mềm, thơm, cắn một miếng cảm nhận được vị giòn của bánh đa', '2015-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `menu_foods`
--

CREATE TABLE IF NOT EXISTS `menu_foods` (
  `menu_food_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL DEFAULT '0',
  `food_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`menu_food_id`),
  KEY `menu_foods_menu_id_foreign` (`menu_id`),
  KEY `menu_foods_food_id_foreign` (`food_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `menu_foods`
--

INSERT INTO `menu_foods` (`menu_food_id`, `menu_id`, `food_id`, `created_at`, `updated_at`) VALUES
(27, 10, 1, '2015-06-05 02:24:17', '0000-00-00 00:00:00'),
(28, 10, 2, '2015-06-05 02:24:25', '0000-00-00 00:00:00'),
(31, 8, 4, '2015-06-06 01:57:08', '0000-00-00 00:00:00'),
(32, 8, 10, '2015-06-06 01:57:12', '0000-00-00 00:00:00'),
(33, 9, 5, '2015-06-06 03:57:24', '0000-00-00 00:00:00'),
(34, 9, 3, '2015-06-06 03:57:32', '0000-00-00 00:00:00'),
(35, 9, 9, '2015-06-06 03:57:51', '0000-00-00 00:00:00'),
(36, 10, 8, '2015-06-06 04:36:22', '0000-00-00 00:00:00'),
(37, 10, 6, '2015-06-06 04:36:45', '0000-00-00 00:00:00'),
(38, 6, 21, '2015-06-06 04:40:23', '0000-00-00 00:00:00'),
(39, 6, 20, '2015-06-06 04:40:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_05_09_072627_create_table_users', 1),
('2015_05_09_072743_create_table_foods', 2),
('2015_05_09_072839_create_table_menus', 3),
('2015_05_09_072928_create_table_menu_foods', 4),
('2015_05_09_073021_create_table_orders', 5),
('2015_05_09_073100_create_table_product_foods', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `menu_id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_menu_id_foreign` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=157 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `menu_id`, `order_date`, `status`) VALUES
(120, 2, 2, '2015-06-05', 1),
(121, 2, 8, '2015-06-07', 1),
(122, 2, 8, '2015-06-10', 0),
(152, 1, 10, '0000-00-00', 0),
(153, 1, 10, '0000-00-00', 0),
(154, 1, 10, '0000-00-00', 0),
(155, 1, 10, '0000-00-00', 0),
(156, 1, 10, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_foods`
--

CREATE TABLE IF NOT EXISTS `product_foods` (
  `product_food_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_food_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_food_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_food_quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_food_description` text COLLATE utf8_unicode_ci NOT NULL,
  `product_food_buy` date NOT NULL,
  PRIMARY KEY (`product_food_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `product_foods`
--

INSERT INTO `product_foods` (`product_food_id`, `product_food_name`, `product_food_price`, `product_food_quantity`, `product_food_description`, `product_food_buy`) VALUES
(1, 'product_food_name1', '101', '11', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(2, 'product_food_name2', '102', '12', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(3, 'product_food_name3', '103', '13', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(4, 'product_food_name4', '104', '14', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(5, 'product_food_name5', '105', '15', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(6, 'product_food_name6', '106', '16', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(7, 'product_food_name7', '107', '17', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(8, 'product_food_name8', '108', '18', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(9, 'product_food_name9', '109', '19', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(10, 'product_food_name10', '1010', '110', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(11, 'product_food_name11', '1011', '111', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(12, 'product_food_name12', '1012', '112', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(13, 'product_food_name13', '1013', '113', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(14, 'product_food_name14', '1014', '114', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(15, 'product_food_name15', '1015', '115', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(16, 'product_food_name16', '1016', '116', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(17, 'product_food_name17', '1017', '117', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(18, 'product_food_name18', '1018', '118', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(19, 'product_food_name19', '1019', '119', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(20, 'product_food_name20', '1020', '120', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(21, 'product_food_name21', '1021', '121', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(22, 'product_food_name22', '1022', '122', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(23, 'product_food_name23', '1023', '123', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(24, 'product_food_name24', '1024', '124', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(25, 'product_food_name25', '1025', '125', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(26, 'product_food_name26', '1026', '126', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(27, 'product_food_name27', '1027', '127', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(28, 'product_food_name28', '1028', '128', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(29, 'product_food_name29', '1029', '129', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(30, 'product_food_name30', '1030', '130', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(31, 'product_food_name31', '1031', '131', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(32, 'product_food_name32', '1032', '132', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(33, 'product_food_name33', '1033', '133', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(34, 'product_food_name34', '1034', '134', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(35, 'product_food_name35', '1035', '135', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(36, 'product_food_name36', '1036', '136', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(37, 'product_food_name37', '1037', '137', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(38, 'product_food_name38', '1038', '138', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(39, 'product_food_name39', '1039', '139', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(40, 'product_food_name40', '1040', '140', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(41, 'product_food_name41', '1041', '141', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(42, 'product_food_name42', '1042', '142', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(43, 'product_food_name43', '1043', '143', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(44, 'product_food_name44', '1044', '144', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(45, 'product_food_name45', '1045', '145', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(46, 'product_food_name46', '1046', '146', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(47, 'product_food_name47', '1047', '147', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(48, 'product_food_name48', '1048', '148', 'A man in Paraguay accused of raping his 10-year-old stepdaughter and getting her pregnant has been arrested. Abortion is banned in the country except when the mother''s life is at risk.', '2015-05-10'),
(51, 'aaa update', '123', '12', 'bbbb', '2015-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `age` int(10) unsigned NOT NULL,
  `gender` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`, `name`, `level`, `age`, `gender`, `phone`, `address`, `remember_token`) VALUES
(1, 'admin', '$2y$10$DUZSHlyTgfW96gFP99aiOuVzguG7NwLkM6myO7jGN7PDWxY7xTLAu', '12345', 'username1@gmail.com', 'Trần Tiến Quân', '1', 20, '1', '11239874', 'Hà Nội', '0ULXeBv34TEojSgJmFN2JhHrtoWjhkef5GQ5HZe52Y9M3Zzc6kaJOHh3BbDS'),
(2, 'username2', '$2y$10$CzBEzkA8vtHigcDSdO7JHuUvls4QVnleUuuKFE7KLKrfqxLUr2qI2', '12345', 'username2@gmail.com', 'name2', '0', 20, '0', '21239874', 'Hà Nội', '7VxLMCE0rChrU6ikNr86483ug4y4DMt9voa3fLCjtHxeWV9AAdf2Bfq5raVu'),
(3, 'username3', '$2y$10$8Ya3tHO/wUAF6y3D/rl35eytER9krIMZtjtw1eLkCLr5dAqAggBVq', '12345', 'username3@gmail.com', 'name3', '0', 20, '1', '31239874', 'Hà Nội', ''),
(4, 'username4', '$2y$10$oCPFvqPr/wOcBLmHrOU8puKpYizVZkMeLRb0Wx76Yenf6v.L1nYju', '12345', 'username4@gmail.com', 'name4', '0', 20, '1', '41239874', 'Hà Nội', ''),
(5, 'username5', '$2y$10$TpTxDTHZxkPXRFHuqpgdpuWJQMuzTjtIJpYYaLPrfabtAvx63h9L6', '12345', 'username5@gmail.com', 'name5', '0', 20, '1', '51239874', 'Hà Nội', ''),
(6, 'username6', '$2y$10$4Z3VHEAm3Xof.uYgg/jcZu12ohB9SNuUSyTpNc.aAB6DQDnffN6cu', '12345', 'username6@gmail.com', 'name6', '0', 20, '1', '61239874', 'Hà Nội', ''),
(7, 'username7', '$2y$10$Gk8EOYpOy9rgdPF3hExKRuMtORB0VtT0H34WvzsJPwukJM7kFpn4e', '12345', 'username7@gmail.com', 'name7', '0', 20, '1', '71239874', 'Hà Nội', ''),
(8, 'username8', '$2y$10$UGHwf7tLFe9qYhI3hGit0eW5d8bAR.srGeH7YKaBQMDcQil1vzZG2', '12345', 'username8@gmail.com', 'name8', '0', 20, '1', '81239874', 'Hà Nội', ''),
(9, 'username9', '$2y$10$uOBnFgx13r6uHxwTpG7EQ./8loc79P55N0CIhEqAWpYLClhQbBvQG', '12345', 'username9@gmail.com', 'name9', '0', 20, '1', '91239874', 'Hà Nội', ''),
(10, 'username10', '$2y$10$HMD3RIniLfNz4IR2jr28r.iw4PprxfOvdk9caNAcCVRm19eesUOqa', '12345', 'username10@gmail.com', 'name10', '0', 20, '1', '101239874', 'Hà Nội', ''),
(11, 'username11', '$2y$10$Wy2XoiFxaYzlyGcaxyhmuOG.cJgCqcAYultRhksDPsEqlBvGZVreG', '12345', 'username11@gmail.com', 'name11', '0', 20, '1', '111239874', 'Hà Nội', ''),
(12, 'username12', '$2y$10$2bpr0yIX57XL1rqB01mecObJeD8MWuEgtmF.4Tg7OmPUdbzcomqkq', '12345', 'username12@gmail.com', 'name12', '0', 20, '1', '121239874', 'Hà Nội', ''),
(13, 'username13', '$2y$10$4KHMwEfXFcLQfMHa1nyaEuge9rSCanHGYjtfSXftwUVKOUSux4A1a', '12345', 'username13@gmail.com', 'name13', '0', 20, '1', '131239874', 'Hà Nội', ''),
(14, 'username14', '$2y$10$6WIAs10SKJwBLre.Car/AOp1QAfPe0C37gE5geEMyU3nM7ZSYSk2a', '12345', 'username14@gmail.com', 'name14', '0', 20, '1', '141239874', 'Hà Nội', ''),
(15, 'username15', '$2y$10$oRuzkCRxDL9Gv4PAuQCLZeliXFXMsZTH7hb2ioK2wLH7ajQ0VRyfK', '12345', 'username15@gmail.com', 'name15', '0', 20, '1', '151239874', 'Hà Nội', ''),
(16, 'username16', '$2y$10$U2ZU.lSBTPKD1k4QEGWzdu2ei1gFAPBxrXNWqYJpq0H0hrHbSbM1K', '12345', 'username16@gmail.com', 'name16', '0', 20, '1', '161239874', 'Hà Nội', ''),
(17, 'username17', '$2y$10$THrUazQCz2Eg0/.nutIyXeb/3BFx2/R7sIvDiHOV5jFwMbsAR4mGq', '12345', 'username17@gmail.com', 'name17', '0', 20, '1', '171239874', 'Hà Nội', ''),
(18, 'username18', '$2y$10$iz9TgP5dKzari7/jP3pTdOfUS6Kxb.FkVcxhl8JKqkgA9EYTntk/K', '12345', 'username18@gmail.com', 'name18', '0', 20, '1', '181239874', 'Hà Nội', ''),
(19, 'username19', '$2y$10$Eyu6b6v7FYwZS8zMdMCkHO4Q..B2OG9ko3J3DDXEQi1RX1LESNK12', '12345', 'username19@gmail.com', 'name19', '0', 20, '1', '191239874', 'Hà Nội', ''),
(20, 'username20', '$2y$10$65cTCzMeDSH2V3Xb5aZtp.7Uht0h.GBTjNRvsBdZ3stmf.5hiVm/C', '12345', 'username20@gmail.com', 'name20', '0', 20, '1', '201239874', 'Hà Nội', ''),
(21, 'username21', '$2y$10$AE.QwqKZS1Vw.uDjRHTQLexvwXaeR.WhobjLCECYXmujnhlQWTzAO', '12345', 'username21@gmail.com', 'name21', '0', 20, '1', '211239874', 'Hà Nội', ''),
(22, 'username22', '$2y$10$BX7gvdkNu2iVnnSTcRvPV.fpJnEQqnxfCV8.OCjXJONKEnRJSMAT.', '12345', 'username22@gmail.com', 'name22', '0', 20, '1', '221239874', 'Hà Nội', ''),
(23, 'username23', '$2y$10$9Pz7yrI3.IIRFqDLCrVADObpeA4OD4PBYWz/WnbrQdNRKWcErohBy', '12345', 'username23@gmail.com', 'name23', '0', 20, '1', '231239874', 'Hà Nội', ''),
(24, 'username24', '$2y$10$ditrB42/YYpTyvQzLHaoU.tMWmnwbIS4gV.eCJ/3npO0LMUKevoK.', '12345', 'username24@gmail.com', 'name24', '0', 20, '1', '241239874', 'Hà Nội', ''),
(25, 'username25', '$2y$10$JKQr9gzs2VB1f/nGgVjCf.uFyl3scH.CT3mta0V1sVPfZ5bOh6o0K', '12345', 'username25@gmail.com', 'name25', '0', 20, '1', '251239874', 'Hà Nội', ''),
(26, 'username26', '$2y$10$QTi/1AkGmt3YGb8js/kxluO2WZ2ef2Eh495jFl1Ie8fDE1OBFClhi', '12345', 'username26@gmail.com', 'name26', '0', 20, '1', '261239874', 'Hà Nội', ''),
(27, 'username27', '$2y$10$obzS575R6JYHFS/c/IW2P.LWb90I5p388hzQKH9K6j5wr./3jaORm', '12345', 'username27@gmail.com', 'name27', '0', 20, '1', '271239874', 'Hà Nội', ''),
(28, 'username28', '$2y$10$hy.rvwpkaqWQGKrVc8SRGexqh8COT8tR3pdbaVDB40svTuI2lvT0e', '12345', 'username28@gmail.com', 'name28', '0', 20, '1', '281239874', 'Hà Nội', ''),
(29, 'username29', '$2y$10$mMYD878kPa7qJFZqMJ953.WB3cxwJJnK4rLRIofuD0A9NdPsJ0UIa', '12345', 'username29@gmail.com', 'name29', '0', 20, '1', '291239874', 'Hà Nội', ''),
(30, 'username30', '$2y$10$d28b8wiIlOvyInP6dTCKguWyAfGAxK/B9c1VffJdWSizCI2HNNjIC', '12345', 'username30@gmail.com', 'name30', '0', 20, '1', '301239874', 'Hà Nội', ''),
(31, 'username31', '$2y$10$KpevC2D42MQb77pccucPtew9o5z8AVI4XS5X.l7aflDrdf05/P5bG', '12345', 'username31@gmail.com', 'name31', '0', 20, '1', '311239874', 'Hà Nội', ''),
(32, 'username32', '$2y$10$aFPLCsBxGm/sCvauTOUu2uauRh6T0WUw3yv7Ef.c/TMd9g6N6e762', '12345', 'username32@gmail.com', 'name32', '0', 20, '1', '321239874', 'Hà Nội', ''),
(33, 'username33', '$2y$10$GpR2WhPxp5BBspcnDrN7WuqPSVJ9wLBufnHnm3njowliqHaDRAiZ.', '12345', 'username33@gmail.com', 'name33', '0', 20, '1', '331239874', 'Hà Nội', ''),
(34, 'username34', '$2y$10$LFba3p.PWp4euJVQPv6il./gVP2brAlG91bn3zlN1sX77RfcGFvGW', '12345', 'username34@gmail.com', 'name34', '0', 20, '1', '341239874', 'Hà Nội', ''),
(35, 'username35', '$2y$10$85Y/X7pOssndSr9ftmJWUuisFrv0.G.4XicxxVzI.heh6yIpOs.zm', '12345', 'username35@gmail.com', 'name35', '0', 20, '1', '351239874', 'Hà Nội', ''),
(36, 'username36', '$2y$10$L.8YKZvwgyhKwA3scMcZWuPIZkTbXPAmaIsXUKOJomWYY/EQZCiEO', '12345', 'username36@gmail.com', 'name36', '0', 20, '1', '361239874', 'Hà Nội', ''),
(37, 'username37', '$2y$10$B0JHLFMN4eHtdI9FxToyfuF9iqgCV40pt1XNCRQ3dzjBVKTd1PIxS', '12345', 'username37@gmail.com', 'name37', '0', 20, '1', '371239874', 'Hà Nội', ''),
(38, 'username38', '$2y$10$q.F5coWxKy7JJQLokNy78erp0dyybhbK2WVY8MCe.rY9kyJDQutLK', '12345', 'username38@gmail.com', 'name38', '0', 20, '1', '381239874', 'Hà Nội', ''),
(39, 'username39', '$2y$10$2XX2dD6XxrQUFPSWGsw.reLYiJTq.r/rg8alcxZW9g2xyr2clWs6e', '12345', 'username39@gmail.com', 'name39', '0', 20, '1', '391239874', 'Hà Nội', ''),
(40, 'username40', '$2y$10$EMTwBvhBVltti3RIF/.afux2CRwToFkf27wBK3ytYughZ53wkMFLu', '12345', 'username40@gmail.com', 'name40', '0', 20, '1', '401239874', 'Hà Nội', ''),
(41, 'username41', '$2y$10$N7vDjF/iv1PnMwspEY257.G5Yf5ZFNpwT5T.RCsp9b8e2PHWWD5Me', '12345', 'username41@gmail.com', 'name41', '0', 20, '1', '411239874', 'Hà Nội', ''),
(42, 'username42', '$2y$10$gQoD8BSkK3NTN1FnY/VbNesP0zBWVZcC24HzwZ/RZTQubSqZCnEZS', '12345', 'username42@gmail.com', 'name42', '0', 20, '1', '421239874', 'Hà Nội', ''),
(43, 'username43', '$2y$10$lq1r3ERgPdNHxMkhJ8y6AeBIdYk3r9AZdaaOkfD/g9HPHdVMBSPa6', '12345', 'username43@gmail.com', 'name43', '0', 20, '1', '431239874', 'Hà Nội', ''),
(44, 'username44', '$2y$10$QHTz7v.AA5YJrQpPH0pj6epPE1B4GHwJ5s05HN6NX00XuST9kn3Ta', '12345', 'username44@gmail.com', 'name44', '0', 20, '1', '441239874', 'Hà Nội', ''),
(45, 'username45', '$2y$10$JcBlga2og1bLKEJ.8EIMw.Tz/5XscpJylIlGbltXcGWNLOI/wOldW', '12345', 'username45@gmail.com', 'name45', '0', 20, '1', '451239874', 'Hà Nội', ''),
(46, 'username46', '$2y$10$AfQ7y6Zl5nDD3EoDamFbUOHXkp6trMrKxlfT6RwWp7K6qPbJDP/rq', '12345', 'username46@gmail.com', 'name46', '0', 20, '1', '461239874', 'Hà Nội', ''),
(47, 'username47', '$2y$10$uVwg1jwt/2LVfKO0HOKeUeq/vru/i4gQHD3TlONlyaU6MaH8naI9u', '12345', 'username47@gmail.com', 'name47', '0', 20, '1', '471239874', 'Hà Nội', ''),
(48, 'username48', '$2y$10$bs2oEMK1vG8LK3VTdAlea.x7JPhUXegG/nhgYgrrLe.usSek.nzeC', '12345', 'username48@gmail.com', 'name48', '0', 20, '1', '481239874', 'Hà Nội', ''),
(49, 'quanit94', '$2y$10$m5oD169H3FEpfIzzUqrpWuyZkx20LNzFHevv1qkEPK.6Lkdw2LRf.', '123456', 'quanbn@gmail.com', 'Quan', '0', 21, '0', '123456', '12312r423fef', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_foods`
--
ALTER TABLE `menu_foods`
  ADD CONSTRAINT `menu_foods_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `foods` (`food_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_foods_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`menu_id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`menu_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
