-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 04:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopsach`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adv`
--

CREATE TABLE `tbl_adv` (
  `pk_adv_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_adv`
--

INSERT INTO `tbl_adv` (`pk_adv_id`, `c_name`, `c_img`, `c_url`) VALUES
(1, 'adv 1', 'public/images/quangcao-01.jpg', 'http://dantri.com.vn'),
(2, 'adv 2', 'public/images/quangcao-02.jpg', 'http://ngoisao.net');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `pk_book_id` int(11) NOT NULL,
  `fk_category_book_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(4000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_sapxuatban` int(11) NOT NULL DEFAULT '0',
  `c_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`pk_book_id`, `fk_category_book_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_sapxuatban`, `c_price`) VALUES
(6, 1, 'Áo khoác mùa hè hà nội', '<p>Nếu từng bị m&ecirc; hoặc bởi c&aacute;c loại tarlet ngọt th&igrave; chắn chắn bạn kh&ocirc;ng thể bỏ qua những loại tarlet mặn. Ngo&agrave;i h&igrave;nh d&aacute;ng bắt mắt, lớp vở b&aacute;nh gi&ograve;n gi&ograve;n c&ugrave;ng với nh&acirc;n mặn như thịt g&agrave;, nấm, thị heo ,&hellip; của b&aacute;nh sẽ chinh phục bất cứ ai d&ugrave;ng thử.</p>\r\n', '', 'public/upload/product/1494866967product12.jpg', 1, 532000),
(8, 2, 'Áo khoác choàng lót lông AK-36212', '<p>ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học</p>\r\n', '', 'public/upload/product/1494773083product12.jpg', 1, 6000000),
(9, 6, 'Áo khoác kaki lót lông AK-31112', '<p>ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học</p>\r\n', '', 'public/upload/product/1494772946product10.jpg', 0, 7000000),
(10, 8, 'Áo khoác kaki lót lông AK-31112', '<p>ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học</p>\r\n', '', 'public/upload/product/1494772936product12.jpg', 1, 90000),
(11, 7, 'Áo phông mới 2015', '<p>ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học</p>\r\n', '', 'public/upload/product/1494772985product9.jpg', 0, 20000),
(12, 1, 'Áo phông mới 2016', '', '', 'public/upload/product/1494597944product7.jpg', 1, 120000),
(13, 2, 'Áo khoác AK-223', '', '<p>Mới đ&acirc;y, Vietlott c&ocirc;ng bố th&ocirc;ng tin cho biết, trong qu&yacute; đầu ti&ecirc;n của năm 2017, c&ocirc;ng ty n&agrave;y đ&atilde; đạt mức doanh thu 1.037,8 tỷ đồng. Trong đ&oacute;, thị trường lớn nhất vẫn l&agrave; TPHCM với 544 tỷ đồng, H&agrave; Nội với 121,9 tỷ đồng; doanh thu từ c&aacute;c thị trường kh&aacute;c cơ bản dao động từ mức 20 tỷ đồng đến hơn 60 tỷ đồng.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'public/upload/product/1494773072product11.jpg', 1, 300000),
(14, 5, 'Áo khoác AK', '<p>Mới đ&acirc;y, Vietlott c&ocirc;ng bố th&ocirc;ng tin cho biết, trong qu&yacute; đầu ti&ecirc;n của năm 2017, c&ocirc;ng ty n&agrave;y đ&atilde; đạt mức doanh thu 1.037,8 tỷ đồng. Trong đ&oacute;, thị trường lớn nhất vẫn l&agrave; TPHCM với 544 tỷ đồng, H&agrave; Nội với 121,9 tỷ đồng; doanh thu từ c&aacute;c thị trường kh&aacute;c cơ bản dao động từ mức 20 tỷ đồng đến hơn 60 tỷ đồng.</p>\r\n\r\n<p>Cũng trong qu&yacute; vừa rồi, sản phẩm Mega 6/45 c&oacute; 2.374.105 trường hợp tr&uacute;ng thưởng với 13 giải Jackpot được trao thưởng, tổng gi&aacute; trị 425,2 tỷ đồng.</p>\r\n\r\n<p>Hiện nay, Vietlott đang kinh doanh tr&ecirc;n 12 địa b&agrave;n tỉnh, th&agrave;nh phố: TPHCM, Cần Thơ, An Giang, B&igrave;nh Dương, Đồng Nai, B&agrave; Rịa &ndash; Vũng T&agrave;u, Kh&aacute;nh H&ograve;a, Đắk Lắk, Đ&agrave; Nẵng, H&agrave; Nội, Hải Ph&ograve;ng v&agrave; Quảng Ninh</p>\r\n', '', 'public/upload/product/1494773217product8.jpg', 1, 300000),
(15, 4, 'sơ mi bò', '<p>Mới đ&acirc;y, Vietlott c&ocirc;ng bố th&ocirc;ng tin cho biết, trong qu&yacute; đầu ti&ecirc;n của năm 2017, c&ocirc;ng ty n&agrave;y đ&atilde; đạt mức doanh thu 1.037,8 tỷ đồng. Trong đ&oacute;, thị trường lớn nhất vẫn l&agrave; TPHCM với 544 tỷ đồng, H&agrave; Nội với 121,9 tỷ đồng; doanh thu từ c&aacute;c thị trường kh&aacute;c cơ bản dao động từ mức 20 tỷ đồng đến hơn 60 tỷ đồng.</p>\r\n\r\n<p>Cũng trong qu&yacute; vừa rồi, sản phẩm Mega 6/45 c&oacute; 2.374.105 trường hợp tr&uacute;ng thưởng với 13 giải Jackpot được trao thưởng, tổng gi&aacute; trị 425,2 tỷ đồng.</p>\r\n\r\n<p>Hiện nay, Vietlott đang kinh doanh tr&ecirc;n 12 địa b&agrave;n tỉnh, th&agrave;nh phố: TPHCM, Cần Thơ, An Giang, B&igrave;nh Dương, Đồng Nai, B&agrave; Rịa &ndash; Vũng T&agrave;u, Kh&aacute;nh H&ograve;a, Đắk Lắk, Đ&agrave; Nẵng, H&agrave; Nội, Hải Ph&ograve;ng v&agrave; Quảng Ninh</p>\r\n', '<p>Mới đ&acirc;y, Vietlott c&ocirc;ng bố th&ocirc;ng tin cho biết, trong qu&yacute; đầu ti&ecirc;n của năm 2017, c&ocirc;ng ty n&agrave;y đ&atilde; đạt mức doanh thu 1.037,8 tỷ đồng. Trong đ&oacute;, thị trường lớn nhất vẫn l&agrave; TPHCM với 544 tỷ đồng, H&agrave; Nội với 121,9 tỷ đồng; doanh thu từ c&aacute;c thị trường kh&aacute;c cơ bản dao động từ mức 20 tỷ đồng đến hơn 60 tỷ đồng.</p>\r\n\r\n<p>Cũng trong qu&yacute; vừa rồi, sản phẩm Mega 6/45 c&oacute; 2.374.105 trường hợp tr&uacute;ng thưởng với 13 giải Jackpot được trao thưởng, tổng gi&aacute; trị 425,2 tỷ đồng.</p>\r\n\r\n<p>Hiện nay, Vietlott đang kinh doanh tr&ecirc;n 12 địa b&agrave;n tỉnh, th&agrave;nh phố: TPHCM, Cần Thơ, An Giang, B&igrave;nh Dương, Đồng Nai, B&agrave; Rịa &ndash; Vũng T&agrave;u, Kh&aacute;nh H&ograve;a, Đắk Lắk, Đ&agrave; Nẵng, H&agrave; Nội, Hải Ph&ograve;ng v&agrave; Quảng Ninh</p>\r\n', 'public/upload/product/1494773300product10.jpg', 0, 3000000),
(20, 1, 'sơ mi bò2', '<p>ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học&nbsp;ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học&nbsp;ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học</p>\r\n', '<p>ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học&nbsp;ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học&nbsp;ĐTTS ghi: Viện Khoa học x&atilde; hội Việt Nam. Viện Từ điển học v&agrave; B&aacute;ch khoa thư Việt Nam. Từ kh&oacute;a: 1. Tiếng Việt 2. Ng&ocirc;n ngữ học 3. T&aacute;c phẩm 4. T&aacute;c giả 5. Từ điển học</p>\r\n', 'public/upload/product/1494773324product10.jpg', 1, 1000000),
(21, 2, 'sơ mi bò3', '<ul>\r\n	<li>&Aacute;o sơ mi d&agrave;i tay m&agrave;u trơn, form rộng.</li>\r\n	<li>D&aacute;ng &aacute;o phổ th&ocirc;ng, rộng, vải tốt, mặc m&aacute;t v&agrave; thoải m&aacute;i.</li>\r\n</ul>\r\n\r\n<p>- Ph&ugrave; hợp với người th&iacute;ch mặc đồ thoải m&aacute;i, những người c&oacute; bụng.<br />\r\n- Mặc đi l&agrave;m, đi chơi, dự tiệc.... đều rất hợp</p>\r\n', '', 'public/upload/product/1494773722product9.jpg', 1, 300000),
(22, 6, 'Ao Sơ MI2', '<ul>\r\n	<li>&Aacute;o sơ mi d&agrave;i tay m&agrave;u trơn, form rộng.</li>\r\n	<li>D&aacute;ng &aacute;o phổ th&ocirc;ng, rộng, vải tốt, mặc m&aacute;t v&agrave; thoải m&aacute;i.<br />\r\n	- Ph&ugrave; hợp với người th&iacute;ch mặc đồ thoải m&aacute;i, những người c&oacute; bụng.<br />\r\n	- Mặc đi l&agrave;m, đi chơi, dự tiệc.... đều rất hợp</li>\r\n</ul>\r\n', '', 'public/upload/product/1494773806product7.jpg', 1, 35000),
(23, 3, 'Quần Bò2', '<ul>\r\n	<li>&Aacute;o sơ mi d&agrave;i tay m&agrave;u trơn, form rộng.</li>\r\n	<li>D&aacute;ng &aacute;o phổ th&ocirc;ng, rộng, vải tốt, mặc m&aacute;t v&agrave; thoải m&aacute;i.<br />\r\n	- Ph&ugrave; hợp với người th&iacute;ch mặc đồ thoải m&aacute;i, những người c&oacute; bụng.<br />\r\n	- Mặc đi l&agrave;m, đi chơi, dự tiệc.... đều rất hợp</li>\r\n</ul>\r\n', '', 'public/upload/product/1494773981gallery2.jpg', 0, 20000),
(24, 1, 'Ao Sơ MI', '<p><a id="âs" name="âs"></a></p>\r\n', '<p>Nếu từng bị m&ecirc; hoặc bởi c&aacute;c loại tarlet ngọt th&igrave; chắn chắn bạn kh&ocirc;ng thể bỏ qua những loại tarlet mặn. Ngo&agrave;i h&igrave;nh d&aacute;ng bắt mắt, lớp vở b&aacute;nh gi&ograve;n gi&ograve;n c&ugrave;ng với nh&acirc;n mặn như thịt g&agrave;, nấm, thị heo ,&hellip; của b&aacute;nh sẽ chinh phục bất cứ ai d&ugrave;ng thử.</p>\r\n', 'public/upload/product/1494775628girl3.jpg', 1, 25000),
(25, 1, 'Ao Sơ MI3', '<p>Nếu từng bị m&ecirc; hoặc bởi c&aacute;c loại tarlet ngọt th&igrave; chắn chắn bạn kh&ocirc;ng thể bỏ qua những loại tarlet mặn. Ngo&agrave;i h&igrave;nh d&aacute;ng bắt mắt, lớp vở b&aacute;nh gi&ograve;n gi&ograve;n c&ugrave;ng với nh&acirc;n mặn như thịt g&agrave;, nấm, thị heo ,&hellip; của b&aacute;nh sẽ chinh phục bất cứ ai d&ugrave;ng thử.</p>\r\n', '', 'public/upload/product/1494775658product3.jpg', 1, 10000),
(26, 3, 'Quần Bò56', '<p>Nếu từng bị m&ecirc; hoặc bởi c&aacute;c loại tarlet ngọt th&igrave; chắn chắn bạn kh&ocirc;ng thể bỏ qua những loại tarlet mặn. Ngo&agrave;i h&igrave;nh d&aacute;ng bắt mắt, lớp vở b&aacute;nh gi&ograve;n gi&ograve;n c&ugrave;ng với nh&acirc;n mặn như thịt g&agrave;, nấm, thị heo ,&hellip; của b&aacute;nh sẽ chinh phục bất cứ ai d&ugrave;ng thử.</p>\r\n', '', 'public/upload/product/1494775687product1.jpg', 1, 12000),
(27, 5, 'Quần Bò', '<p>Nếu từng bị m&ecirc; hoặc bởi c&aacute;c loại tarlet ngọt th&igrave; chắn chắn bạn kh&ocirc;ng thể bỏ qua những loại tarlet mặn. Ngo&agrave;i h&igrave;nh d&aacute;ng bắt mắt, lớp vở b&aacute;nh gi&ograve;n gi&ograve;n c&ugrave;ng với nh&acirc;n mặn như thịt g&agrave;, nấm, thị heo ,&hellip; của b&aacute;nh sẽ chinh phục bất cứ ai d&ugrave;ng thử.</p>\r\n', '', 'public/upload/product/1494775714product1.jpg', 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_book`
--

CREATE TABLE `tbl_category_book` (
  `pk_category_book_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_book`
--

INSERT INTO `tbl_category_book` (`pk_category_book_id`, `c_name`) VALUES
(1, 'Áo Sơ Mi'),
(2, 'Áo Phông'),
(3, 'Quần Bò'),
(4, 'Quần Kaki'),
(5, 'Sơ Mi Dài Tay'),
(6, 'Vải Giả Bò'),
(7, 'Áo Thể Thao'),
(8, 'Áo Gió');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counter`
--

CREATE TABLE `tbl_counter` (
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_counter`
--

INSERT INTO `tbl_counter` (`counter`) VALUES
(30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_admin`
--

CREATE TABLE `tbl_menu_admin` (
  `pk_menu_admin_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_url` varchar(500) NOT NULL,
  `c_controller_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu_admin`
--

INSERT INTO `tbl_menu_admin` (`pk_menu_admin_id`, `c_name`, `c_url`, `c_controller_name`) VALUES
(2, 'Danh mục sách', 'index.php?controller=category_book', 'category_book'),
(3, 'Danh sách các sách', 'index.php?controller=book', 'book'),
(4, 'Tin tức', 'index.php?controller=news', 'news'),
(5, 'Đơn hàng', 'index.php?controller=bill', 'bill'),
(6, 'User', 'index.php?controller=user', 'user'),
(7, 'Quản lý menu', 'index.php?controller=menu', 'menu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `pk_news_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` text NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_hotnews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`pk_news_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_hotnews`) VALUES
(1, 'Chính phủ: Chấn chỉnh, xử lý vi phạm việc lạm thu, gian lận phí BOT', '<p>(D&acirc;n tr&iacute;) - Đ&acirc;y l&agrave; nhiệm vụ được Ch&iacute;nh phủ giao cho Bộ Giao th&ocirc;ng Vận tải phải thực hiện tại Nghị quyết phi&ecirc;n họp Ch&iacute;nh phủ thường kỳ th&aacute;ng 7. Bộ GTVT sẽ đề xuất giải ph&aacute;p giảm g&aacute;nh nặng chi ph&iacute; vận tải nội địa cho người d&acirc;n v&agrave; doanh nghiệp, b&aacute;o c&aacute;o Thủ tướng Ch&iacute;nh phủ trong th&aacute;ng 8/2016.</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Đ&acirc;y l&agrave; nhiệm vụ được Ch&iacute;nh phủ giao cho Bộ Giao th&ocirc;ng Vận tải phải thực hiện tại Nghị quyết phi&ecirc;n họp Ch&iacute;nh phủ thường kỳ th&aacute;ng 7. Bộ GTVT sẽ đề xuất giải ph&aacute;p giảm g&aacute;nh nặng chi ph&iacute; vận tải nội địa cho người d&acirc;n v&agrave; doanh nghiệp, b&aacute;o c&aacute;o Thủ tướng Ch&iacute;nh phủ trong th&aacute;ng 8/2016.&nbsp;(D&acirc;n tr&iacute;) - Đ&acirc;y l&agrave; nhiệm vụ được Ch&iacute;nh phủ giao cho Bộ Giao th&ocirc;ng Vận tải phải thực hiện tại Nghị quyết phi&ecirc;n họp Ch&iacute;nh phủ thường kỳ th&aacute;ng 7. Bộ GTVT sẽ đề xuất giải ph&aacute;p giảm g&aacute;nh nặng chi ph&iacute; vận tải nội địa cho người d&acirc;n v&agrave; doanh nghiệp, b&aacute;o c&aacute;o Thủ tướng Ch&iacute;nh phủ trong th&aacute;ng 8/2016.&nbsp;(D&acirc;n tr&iacute;) - Đ&acirc;y l&agrave; nhiệm vụ được Ch&iacute;nh phủ giao cho Bộ Giao th&ocirc;ng Vận tải phải thực hiện tại Nghị quyết phi&ecirc;n họp Ch&iacute;nh phủ thường kỳ th&aacute;ng 7. Bộ GTVT sẽ đề xuất giải ph&aacute;p giảm g&aacute;nh nặng chi ph&iacute; vận tải nội địa cho người d&acirc;n v&agrave; doanh nghiệp, b&aacute;o c&aacute;o Thủ tướng Ch&iacute;nh phủ trong th&aacute;ng 8/2016.&nbsp;(D&acirc;n tr&iacute;) - Đ&acirc;y l&agrave; nhiệm vụ được Ch&iacute;nh phủ giao cho Bộ Giao th&ocirc;ng Vận tải phải thực hiện tại Nghị quyết phi&ecirc;n họp Ch&iacute;nh phủ thường kỳ th&aacute;ng 7. Bộ GTVT sẽ đề xuất giải ph&aacute;p giảm g&aacute;nh nặng chi ph&iacute; vận tải nội địa cho người d&acirc;n v&agrave; doanh nghiệp, b&aacute;o c&aacute;o Thủ tướng Ch&iacute;nh phủ trong th&aacute;ng 8/2016.&nbsp;(D&acirc;n tr&iacute;) - Đ&acirc;y l&agrave; nhiệm vụ được Ch&iacute;nh phủ giao cho Bộ Giao th&ocirc;ng Vận tải phải thực hiện tại Nghị quyết phi&ecirc;n họp Ch&iacute;nh phủ thường kỳ th&aacute;ng 7. Bộ GTVT sẽ đề xuất giải ph&aacute;p giảm g&aacute;nh nặng chi ph&iacute; vận tải nội địa cho người d&acirc;n v&agrave; doanh nghiệp, b&aacute;o c&aacute;o Thủ tướng Ch&iacute;nh phủ trong th&aacute;ng 8/2016.</p>\r\n', 'public/upload/news/1494599608blog-two.jpg', 0),
(2, 'Nhật Bản nhắc nhở Trung Quốc không leo thang căng thẳng ở Hoa Đông', '<p>(D&acirc;n tr&iacute;) - Nhật Bản ng&agrave;y 7/8 tuy&ecirc;n bố sẽ c&oacute; phản ứng quyết liệt sau khi c&aacute;c t&agrave;u Trung Quốc li&ecirc;n tục c&oacute; h&agrave;nh vi x&acirc;m phạm l&atilde;nh hải của Tokyo tr&ecirc;n biển Hoa Đ&ocirc;ng, đồng thời nhắc nhở Bắc Kinh kh&ocirc;ng leo thang căng thẳng tại v&ugrave;ng biển n&agrave;y.</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Nhật Bản ng&agrave;y 7/8 tuy&ecirc;n bố sẽ c&oacute; phản ứng quyết liệt sau khi c&aacute;c t&agrave;u Trung Quốc li&ecirc;n tục c&oacute; h&agrave;nh vi x&acirc;m phạm l&atilde;nh hải của Tokyo tr&ecirc;n biển Hoa Đ&ocirc;ng, đồng thời nhắc nhở Bắc Kinh kh&ocirc;ng leo thang căng thẳng tại v&ugrave;ng biển n&agrave;y.&nbsp;(D&acirc;n tr&iacute;) - Nhật Bản ng&agrave;y 7/8 tuy&ecirc;n bố sẽ c&oacute; phản ứng quyết liệt sau khi c&aacute;c t&agrave;u Trung Quốc li&ecirc;n tục c&oacute; h&agrave;nh vi x&acirc;m phạm l&atilde;nh hải của Tokyo tr&ecirc;n biển Hoa Đ&ocirc;ng, đồng thời nhắc nhở Bắc Kinh kh&ocirc;ng leo thang căng thẳng tại v&ugrave;ng biển n&agrave;y.&nbsp;(D&acirc;n tr&iacute;) - Nhật Bản ng&agrave;y 7/8 tuy&ecirc;n bố sẽ c&oacute; phản ứng quyết liệt sau khi c&aacute;c t&agrave;u Trung Quốc li&ecirc;n tục c&oacute; h&agrave;nh vi x&acirc;m phạm l&atilde;nh hải của Tokyo tr&ecirc;n biển Hoa Đ&ocirc;ng, đồng thời nhắc nhở Bắc Kinh kh&ocirc;ng leo thang căng thẳng tại v&ugrave;ng biển n&agrave;y.&nbsp;(D&acirc;n tr&iacute;) - Nhật Bản ng&agrave;y 7/8 tuy&ecirc;n bố sẽ c&oacute; phản ứng quyết liệt sau khi c&aacute;c t&agrave;u Trung Quốc li&ecirc;n tục c&oacute; h&agrave;nh vi x&acirc;m phạm l&atilde;nh hải của Tokyo tr&ecirc;n biển Hoa Đ&ocirc;ng, đồng thời nhắc nhở Bắc Kinh kh&ocirc;ng leo thang căng thẳng tại v&ugrave;ng biển n&agrave;y.&nbsp;(D&acirc;n tr&iacute;) - Nhật Bản ng&agrave;y 7/8 tuy&ecirc;n bố sẽ c&oacute; phản ứng quyết liệt sau khi c&aacute;c t&agrave;u Trung Quốc li&ecirc;n tục c&oacute; h&agrave;nh vi x&acirc;m phạm l&atilde;nh hải của Tokyo tr&ecirc;n biển Hoa Đ&ocirc;ng, đồng thời nhắc nhở Bắc Kinh kh&ocirc;ng leo thang căng thẳng tại v&ugrave;ng biển n&agrave;y.</p>\r\n', 'public/upload/news/1494436144blog-two.jpg', 1),
(3, 'Những sự kiện công nghệ nổi bật trong tuần đầu tháng 8', '<p>(D&acirc;n tr&iacute;) - Samsung ch&iacute;nh thức tr&igrave;nh l&agrave;ng smartphone cao cấp Galaxy Note7 l&agrave; điểm nhấn c&ocirc;ng nghệ lớn nhất tuần qua. Ngo&agrave;i ra c&ograve;n điểm nhấn n&agrave;o đ&aacute;ng ch&uacute; &yacute;, mời bạn tham gia trắc nghiệm dưới đ&acirc;y.</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Samsung ch&iacute;nh thức tr&igrave;nh l&agrave;ng smartphone cao cấp Galaxy Note7 l&agrave; điểm nhấn c&ocirc;ng nghệ lớn nhất tuần qua. Ngo&agrave;i ra c&ograve;n điểm nhấn n&agrave;o đ&aacute;ng ch&uacute; &yacute;, mời bạn tham gia trắc nghiệm dưới đ&acirc;y.&nbsp;(D&acirc;n tr&iacute;) - Samsung ch&iacute;nh thức tr&igrave;nh l&agrave;ng smartphone cao cấp Galaxy Note7 l&agrave; điểm nhấn c&ocirc;ng nghệ lớn nhất tuần qua. Ngo&agrave;i ra c&ograve;n điểm nhấn n&agrave;o đ&aacute;ng ch&uacute; &yacute;, mời bạn tham gia trắc nghiệm dưới đ&acirc;y.&nbsp;(D&acirc;n tr&iacute;) - Samsung ch&iacute;nh thức tr&igrave;nh l&agrave;ng smartphone cao cấp Galaxy Note7 l&agrave; điểm nhấn c&ocirc;ng nghệ lớn nhất tuần qua. Ngo&agrave;i ra c&ograve;n điểm nhấn n&agrave;o đ&aacute;ng ch&uacute; &yacute;, mời bạn tham gia trắc nghiệm dưới đ&acirc;y.&nbsp;(D&acirc;n tr&iacute;) - Samsung ch&iacute;nh thức tr&igrave;nh l&agrave;ng smartphone cao cấp Galaxy Note7 l&agrave; điểm nhấn c&ocirc;ng nghệ lớn nhất tuần qua. Ngo&agrave;i ra c&ograve;n điểm nhấn n&agrave;o đ&aacute;ng ch&uacute; &yacute;, mời bạn tham gia trắc nghiệm dưới đ&acirc;y.&nbsp;(D&acirc;n tr&iacute;) - Samsung ch&iacute;nh thức tr&igrave;nh l&agrave;ng smartphone cao cấp Galaxy Note7 l&agrave; điểm nhấn c&ocirc;ng nghệ lớn nhất tuần qua. Ngo&agrave;i ra c&ograve;n điểm nhấn n&agrave;o đ&aacute;ng ch&uacute; &yacute;, mời bạn tham gia trắc nghiệm dưới đ&acirc;y.&nbsp;(D&acirc;n tr&iacute;) - Samsung ch&iacute;nh thức tr&igrave;nh l&agrave;ng smartphone cao cấp Galaxy Note7 l&agrave; điểm nhấn c&ocirc;ng nghệ lớn nhất tuần qua. Ngo&agrave;i ra c&ograve;n điểm nhấn n&agrave;o đ&aacute;ng ch&uacute; &yacute;, mời bạn tham gia trắc nghiệm dưới đ&acirc;y.</p>\r\n', 'public/upload/news/1494436135blog-three.jpg', 0),
(4, 'Apple chi thưởng tới 200.000 USD cho hacker tìm thấy lỗ hổng trong sản phẩm', '<p>(D&acirc;n tr&iacute;) - Apple vừa treo giải thưởng l&ecirc;n đến 200.000USD cho ai ph&aacute;t hiện ra lỗ hổng bảo mật nghi&ecirc;m trọng tr&ecirc;n c&aacute;c hệ thống của h&atilde;ng, bao gồm nền tảng di động iOS. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n Apple k&ecirc;u gọi c&aacute;c hacker hợp t&aacute;c để n&acirc;ng cao bảo mật cho sản phẩm của m&igrave;nh.</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Apple vừa treo giải thưởng l&ecirc;n đến 200.000USD cho ai ph&aacute;t hiện ra lỗ hổng bảo mật nghi&ecirc;m trọng tr&ecirc;n c&aacute;c hệ thống của h&atilde;ng, bao gồm nền tảng di động iOS. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n Apple k&ecirc;u gọi c&aacute;c hacker hợp t&aacute;c để n&acirc;ng cao bảo mật cho sản phẩm của m&igrave;nh.&nbsp;(D&acirc;n tr&iacute;) - Apple vừa treo giải thưởng l&ecirc;n đến 200.000USD cho ai ph&aacute;t hiện ra lỗ hổng bảo mật nghi&ecirc;m trọng tr&ecirc;n c&aacute;c hệ thống của h&atilde;ng, bao gồm nền tảng di động iOS. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n Apple k&ecirc;u gọi c&aacute;c hacker hợp t&aacute;c để n&acirc;ng cao bảo mật cho sản phẩm của m&igrave;nh.&nbsp;(D&acirc;n tr&iacute;) - Apple vừa treo giải thưởng l&ecirc;n đến 200.000USD cho ai ph&aacute;t hiện ra lỗ hổng bảo mật nghi&ecirc;m trọng tr&ecirc;n c&aacute;c hệ thống của h&atilde;ng, bao gồm nền tảng di động iOS. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n Apple k&ecirc;u gọi c&aacute;c hacker hợp t&aacute;c để n&acirc;ng cao bảo mật cho sản phẩm của m&igrave;nh.&nbsp;(D&acirc;n tr&iacute;) - Apple vừa treo giải thưởng l&ecirc;n đến 200.000USD cho ai ph&aacute;t hiện ra lỗ hổng bảo mật nghi&ecirc;m trọng tr&ecirc;n c&aacute;c hệ thống của h&atilde;ng, bao gồm nền tảng di động iOS. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n Apple k&ecirc;u gọi c&aacute;c hacker hợp t&aacute;c để n&acirc;ng cao bảo mật cho sản phẩm của m&igrave;nh.&nbsp;(D&acirc;n tr&iacute;) - Apple vừa treo giải thưởng l&ecirc;n đến 200.000USD cho ai ph&aacute;t hiện ra lỗ hổng bảo mật nghi&ecirc;m trọng tr&ecirc;n c&aacute;c hệ thống của h&atilde;ng, bao gồm nền tảng di động iOS. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n Apple k&ecirc;u gọi c&aacute;c hacker hợp t&aacute;c để n&acirc;ng cao bảo mật cho sản phẩm của m&igrave;nh.</p>\r\n', 'public/upload/news/1494436082blog-three.jpg', 1),
(5, '1Mã độc tấn công Vietnam Airlines đang', '', '<p><strong>(D&acirc;n tr&iacute;) - Dựa tr&ecirc;n kết quả ph&acirc;n t&iacute;ch m&atilde; độc tấn c&ocirc;</strong>ng Vietnam Airlines, Bkav cảnh b&aacute;o đến nhiều cơ quan, doanh nghiệp kh&aacute;c bao gồm cả c&aacute;c cơ quan Ch&iacute;nh phủ, c&aacute;c tập đo&agrave;n, ng&acirc;n h&agrave;ng, viện nghi&ecirc;n cứu, trường đại học... m&atilde; độc n&agrave;y cũng đ&atilde; xuất hiện tại những đơn vị tr&ecirc;n, đề nghị kiểm tra v&agrave; triệt ti&ecirc;u ngay.&nbsp;(D&acirc;n tr&iacute;) - Dựa tr&ecirc;n kết quả ph&acirc;n t&iacute;ch m&atilde; độc tấn c&ocirc;ng Vietnam Airlines, Bkav cảnh b&aacute;o đến nhiều cơ quan, doanh nghiệp kh&aacute;c bao gồm cả c&aacute;c cơ quan Ch&iacute;nh phủ, c&aacute;c tập đo&agrave;n, ng&acirc;n h&agrave;ng, viện nghi&ecirc;n cứu, trường đại học... m&atilde; độc n&agrave;y cũng đ&atilde; xuất hiện tại những đơn vị tr&ecirc;n, đề nghị kiểm tra v&agrave; triệt ti&ecirc;u ngay.&nbsp;(D&acirc;n tr&iacute;) - Dựa tr&ecirc;n kết quả ph&acirc;n t&iacute;ch m&atilde; độc tấn c&ocirc;ng Vietnam Airlines, Bkav cảnh b&aacute;o đến nhiều cơ quan, doanh nghiệp kh&aacute;c bao gồm cả c&aacute;c cơ quan Ch&iacute;nh phủ, c&aacute;c tập đo&agrave;n, ng&acirc;n h&agrave;ng, viện nghi&ecirc;n cứu, trường đại học... m&atilde; độc n&agrave;y cũng đ&atilde; xuất hiện tại những đơn vị tr&ecirc;n, đề nghị kiểm tra v&agrave; triệt ti&ecirc;u ngay.&nbsp;(D&acirc;n tr&iacute;) - Dựa tr&ecirc;n kết quả ph&acirc;n t&iacute;ch m&atilde; độc tấn c&ocirc;ng Vietnam Airlines, Bkav cảnh b&aacute;o đến nhiều cơ quan, doanh nghiệp kh&aacute;c bao gồm cả c&aacute;c cơ quan Ch&iacute;nh phủ, c&aacute;c tập đo&agrave;n, ng&acirc;n h&agrave;ng, viện nghi&ecirc;n cứu, trường đại học... m&atilde; độc n&agrave;y cũng đ&atilde; xuất hiện tại những đơn vị tr&ecirc;n, đề nghị kiểm tra v&agrave; triệt ti&ecirc;u ngay.&nbsp;(D&acirc;n tr&iacute;) - Dựa tr&ecirc;n kết quả ph&acirc;n t&iacute;ch m&atilde; độc tấn c&ocirc;ng Vietnam Airlines, Bkav cảnh b&aacute;o đến nhiều cơ quan, doanh nghiệp kh&aacute;c bao gồm cả c&aacute;c cơ quan Ch&iacute;nh phủ, c&aacute;c tập đo&agrave;n, ng&acirc;n h&agrave;ng, viện nghi&ecirc;n cứu, trường đại học... m&atilde; độc n&agrave;y cũng đ&atilde; xuất hiện tại những đơn vị tr&ecirc;n, đề nghị kiểm tra v&agrave; triệt ti&ecirc;u ngay.</p>\r\n', 'public/upload/news/1494436071blog-three.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `pk_order_id` int(11) NOT NULL,
  `c_fullname` varchar(500) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_phone` varchar(500) NOT NULL,
  `c_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`pk_order_id`, `c_fullname`, `c_address`, `c_phone`, `c_create`) VALUES
(1, 'Nguyễn Văn A', 'Hà nội', '0123456', '2016-08-18'),
(2, 'Nguyễn Văn B', 'TP HCM', '0123456789', '2016-08-18'),
(3, 'anh luu', 'as', '121212', '2017-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `pk_order_detail_id` int(11) NOT NULL,
  `fk_order_id` int(11) NOT NULL,
  `fk_book_id` int(11) NOT NULL,
  `c_number` int(11) NOT NULL,
  `c_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`pk_order_detail_id`, `fk_order_id`, `fk_book_id`, `c_number`, `c_price`) VALUES
(1, 1, 8, 1, 6000000),
(2, 1, 11, 1, 2000000),
(3, 2, 8, 1, 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `pk_permission_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_menu_admin_id` int(11) NOT NULL,
  `c_add` int(11) NOT NULL DEFAULT '0',
  `c_edit` int(11) NOT NULL DEFAULT '0',
  `c_delete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`pk_permission_id`, `fk_user_id`, `fk_menu_admin_id`, `c_add`, `c_edit`, `c_delete`) VALUES
(147, 1, 2, 1, 0, 0),
(148, 1, 3, 0, 1, 0),
(149, 1, 4, 1, 1, 1),
(150, 1, 5, 0, 1, 0),
(151, 1, 6, 0, 1, 0),
(152, 1, 7, 1, 0, 1),
(153, 3, 2, 0, 0, 0),
(154, 3, 3, 0, 0, 0),
(155, 3, 4, 0, 0, 0),
(156, 3, 5, 0, 0, 0),
(157, 3, 6, 0, 0, 0),
(158, 3, 7, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_username` varchar(200) NOT NULL,
  `c_password` varchar(500) NOT NULL,
  `c_fullname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_username`, `c_password`, `c_fullname`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn b'),
(3, 'admin1', 'd41d8cd98f00b204e9800998ecf8427e', 'Nguyễn Văn a'),
(5, 'admin2', '202cb962ac59075b964b07152d234b70', 'Name'),
(7, 'test', '202cb962ac59075b964b07152d234b70', 'tesc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `pk_users_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`pk_users_id`, `username`, `password`, `full_name`, `email`) VALUES
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 'nguyễn huy lưu', 'huyluu241196@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_online`
--

CREATE TABLE `tbl_user_online` (
  `pk_user_online_id` int(11) NOT NULL,
  `session_id` varchar(500) NOT NULL,
  `thoi_diem_truy_cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_weblink`
--

CREATE TABLE `tbl_weblink` (
  `pk_weblink_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_weblink`
--

INSERT INTO `tbl_weblink` (`pk_weblink_id`, `c_name`, `c_url`) VALUES
(1, 'Website dân trí', 'http://dantri.com.vn'),
(2, 'Website vnexpress', 'http://vnexpress.net');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adv`
--
ALTER TABLE `tbl_adv`
  ADD PRIMARY KEY (`pk_adv_id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`pk_book_id`);

--
-- Indexes for table `tbl_category_book`
--
ALTER TABLE `tbl_category_book`
  ADD PRIMARY KEY (`pk_category_book_id`);

--
-- Indexes for table `tbl_menu_admin`
--
ALTER TABLE `tbl_menu_admin`
  ADD PRIMARY KEY (`pk_menu_admin_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`pk_news_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`pk_order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`pk_order_detail_id`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`pk_permission_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`pk_users_id`);

--
-- Indexes for table `tbl_user_online`
--
ALTER TABLE `tbl_user_online`
  ADD PRIMARY KEY (`pk_user_online_id`);

--
-- Indexes for table `tbl_weblink`
--
ALTER TABLE `tbl_weblink`
  ADD PRIMARY KEY (`pk_weblink_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adv`
--
ALTER TABLE `tbl_adv`
  MODIFY `pk_adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `pk_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_category_book`
--
ALTER TABLE `tbl_category_book`
  MODIFY `pk_category_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_menu_admin`
--
ALTER TABLE `tbl_menu_admin`
  MODIFY `pk_menu_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `pk_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `pk_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `pk_order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  MODIFY `pk_permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `pk_users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user_online`
--
ALTER TABLE `tbl_user_online`
  MODIFY `pk_user_online_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_weblink`
--
ALTER TABLE `tbl_weblink`
  MODIFY `pk_weblink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
