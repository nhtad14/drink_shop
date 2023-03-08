-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 08, 2023 lúc 01:47 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `drink_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'FANTA'),
(2, 'COCACOLA'),
(3, 'SPRITE'),
(4, 'PEPSI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `email`, `phone`, `address`, `note`) VALUES
(1, 'lnhat3333@gmail.com', '0971918645', 'Trực Đại- Trực Ninh- Nam Định', 'Tôi không mua được sản phẩm ?'),
(4, 'lnhat3333@gmail.com', '0971928645', 'Trực Đại- Trực Ninh- Nam Định', 'T cần giúp đỡ'),
(5, 'transysang5@gmail.co', '0971928645', 'Trực Đại- Trực Ninh- Nam Định', 'Tôi không mua được sản phẩm ?'),
(7, 'lnhat3333@gmail.com', '0971928645', 'Trực Đại- Trực Ninh- Nam Định', 'Hello '),
(8, 'lnhat3333@gmail.com', '0971928645', 'Trực Đại- Trực Ninh- Nam Định', 'Tôi cần mua số lượng lớn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `name_news` varchar(20) NOT NULL,
  `img_news` varchar(200) NOT NULL,
  `content_news` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`name_news`, `img_news`, `content_news`) VALUES
('Cocacola & Pepsi', 'https://tuha.vn/storage/so-sanh-chien-luoc-marketing-cua-coca-cola-va-pepsi-1.jpg', 'Coca-Cola và Pepsi là hai trong những thương hiệu nước\r\n                            giải khát lớn nhất và được biết đến rộng rãi trên toàn thế giới.\r\n                            Tuy nhiên, hai thương hiệu này cũng đang đối đầu với nhau trong cuộc cạnh tranh này. Sự cạnh\r\n                            tranh giữa Coca-Cola và\r\n                            Pepsi đã diễn ra suốt nhiều năm và trở thành một trong những cuộc đua đầy kịch tính trong\r\n                            lịch sử của ngành công nghiệp\r\n                            nước giải khát.\r\n\r\n                            Để chiếm ưu thế cạnh tranh, Coca-Cola và Pepsi đã đưa ra nhiều chiến lược khác nhau. Một\r\n                            trong những chiến lược quan\r\n                            trọng nhất của hai thương hiệu này là tăng cường thương hiệu. Coca-Cola và Pepsi đều luôn cố\r\n                            gắng xây dựng hình ảnh\r\n                            thương hiệu mạnh mẽ và đáng tin cậy trong mắt người tiêu dùng. Cả hai công ty cũng tạo ra\r\n                            nhiều chiến dịch quảng cáo độc\r\n                            đáo và ấn tượng nhằm tăng cường nhận thức thương hiệu của mình.'),
('Nước uống Fanta', 'https://media.ohay.tv/v1/upload/content/2019-04/20/31574-05030f6254a1457a0f975fd60d3c0077-ohaytv.jpg', 'Fanta đã trở thành một thương hiệu nổi tiếng trên toàn thế giới, với nhiều phiên bản và vị khác nhau như Fanta Lemon, Fanta Grape, Fanta Pineapple, Fanta Strawberry và nhiều hương vị khác. Fanta Orange vẫn là một trong những phiên bản được yêu thích nhất và có mặt tại hầu hết các quốc gia trên thế giới.\r\n\r\nFanta Orange được sản xuất với các nguyên liệu chất lượng cao, bao gồm nước tinh khiết, đường, acid citric, các loại hương liệu tự nhiên và nhân tạo và các chất bảo quản an toàn. Nó được đóng trong các lon, chai nhựa và chai thủy tinh có dung tích khác nhau, từ 250 ml đến 2 lít.\r\n\r\nFanta Orange có hương vị cam đậm đà, ngọt ngào, mát lạnh và rất thích hợp để uống vào mùa hè. Nó cũng có thể được sử dụng để pha chế các loại đồ uống khác như cocktail hoặc smoothie.'),
('Nước uống Sprite', 'https://cdn.tgdd.vn/Products/Images/2443/203163/bhx/files/s2.jpg', 'Sprite là một thương hiệu nước giải khát không cồn được\r\n                            sản xuất và phân phối bởi công ty Coca-Cola. Nước giải khát này\r\n                            có mùi vị chanh thanh, tươi mát và thường được sử dụng để giải khát trong những ngày nóng.\r\n                            Sprite thường được bán trong\r\n                            các lon, chai và bình nhựa với nhiều kích cỡ khác nhau để đáp ứng nhu cầu của khách hàng.\r\n\r\n                            Sprite được tạo ra bởi Coca-Cola Company vào năm 1961 và ban đầu được giới thiệu với tên gọi\r\n                            \"Fanta Klare Zitrone\" tại\r\n                            Đức. Tuy nhiên, tên gọi này khó phát âm và hiểu được ở nhiều quốc gia khác nhau, do đó\r\n                            Coca-Cola đã quyết định đổi tên\r\n                            sản phẩm thành Sprite. Từ đó, Sprite đã trở thành một thương hiệu nước giải khát nổi tiếng\r\n                            và được yêu thích trên toàn\r\n                            thế giới.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `name_notifi` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `notification`
--

INSERT INTO `notification` (`name_notifi`, `img`, `content`) VALUES
('Thông báo mới từ hãng sản xuất Cocacola', 'coca-cola-emblem-768x663.jpg', 'Giảm tất cả sản phẩm 10% cho hóa đơn từ 50k'),
('Thông báo mới từ hãng sản xuất Fanta', 'Fanta-Logo.jpg', 'Mua 1 tặng 1 kèm nhiều ưu đãi khác '),
('Ưu đãi cực sốc từ Pepsi', 'new-pepsi-logo.jpg', 'Miễn phí vận chuyển toàn quốc ! ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id_order` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`id_order`, `account`, `phone`, `address`, `payment`, `order_date`) VALUES
(3, 'Nhật Long', '0971928645', 'Trực Đại- Trực Ninh- Nam Định', 'online', '2023-03-05 13:33:39'),
(4, 'Nhật Long  ', '0971928645', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội  ', 'COD', '2023-03-05 14:43:28'),
(5, 'Nhật Long  ', '0971928645', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội  ', 'online', '2023-03-05 14:44:11'),
(6, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'online', '2023-03-05 15:29:46'),
(7, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'online', '2023-03-05 15:43:39'),
(8, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'online', '2023-03-05 15:47:37'),
(9, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'online', '2023-03-05 16:09:22'),
(10, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'online', '2023-03-05 16:15:58'),
(11, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'COD', '2023-03-05 16:25:02'),
(12, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'online', '2023-03-06 09:07:44'),
(13, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'online', '2023-03-06 09:14:21'),
(14, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'COD', '2023-03-06 09:14:47'),
(15, 'Nhật Long   ', '0359418575', 'Ngõ 91- Cầu Diễn-Bắc Từ Liêm -Hà Nội   ', 'online', '2023-03-06 09:35:02'),
(16, 'Chi', '0359418575', 'Hà Nội', 'online', '2023-03-07 05:05:51'),
(17, 'Trung Kiên ', '0363890328', 'Trực Đại- Trực Ninh- Nam Định', 'online', '2023-03-07 06:47:05'),
(18, 'Trung Kiên ', '0363890328', 'Trực Đại- Trực Ninh- Nam Định', 'online', '2023-03-07 20:10:56'),
(19, 'Trung Kiên ', '0363890328', 'Trực Đại- Trực Ninh- Nam Định', 'COD', '2023-03-07 20:12:30'),
(20, 'Nhật Long', '0363890328', 'Trực Đại- Trực Ninh- Nam Định', 'online', '2023-03-07 22:48:39'),
(24, 'Nhật Long', '0363890328', 'Trực Đại- Trực Ninh- Nam Định', 'online', '2023-03-07 23:14:24'),
(25, 'Nhật Long', '0363890328', 'Trực Đại- Trực Ninh- Nam Định', 'online', '2023-03-07 23:14:27'),
(26, 'Nhật Long', '0363890328', 'Trực Đại- Trực Ninh- Nam Định', 'online', '2023-03-07 23:15:57'),
(27, 'Nhật Long', '0363890328', 'Trực Đại- Trực Ninh- Nam Định', 'online', '2023-03-07 23:22:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `img_product` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `name_product`, `img_product`, `quantity`, `price`) VALUES
(3, 'Coca-Cola Georgia Peach', 'georgia-peach.jpg', 1, 25000),
(3, 'Fanta Peach ', 'Fanta_Peach_20oz.png', 1, 16000),
(3, 'Coca-Cola-original', 'coca-cola-original-20oz.png', 1, 14500),
(3, 'Sprite tropical mix', 'sprite-tropical-mix-pdp-image-20ozbottle-desktop.png', 1, 24000),
(4, 'Coca-Cola Georgia Peach', 'georgia-peach.jpg', 1, 25000),
(4, 'Coca-Cola Vanilla', 'vanilla_12oz_desktop.jpg', 1, 21000),
(4, 'Fanta Peach ', 'Fanta_Peach_20oz.png', 1, 16000),
(5, 'Fanta Peach ', 'Fanta_Peach_20oz.png', 1, 16000),
(5, 'Fanta Pineapple', 'Fanta_Pineapple_20oz@1x.png', 1, 18000),
(5, 'Fanta Strawberry', 'Fanta_Strawberry_20oz@1x.png', 1, 20000),
(6, 'Fanta Strawberry', 'Fanta_Strawberry_20oz@1x.png', 5, 100000),
(7, 'Marshmellos Limited', 'marshmellos-zero-sugar.png', 1, 30000),
(7, 'Fanta Pineapple', 'Fanta_Pineapple_20oz@1x.png', 2, 36000),
(8, 'Fanta Pineapple', 'Fanta_Pineapple_20oz@1x.png', 2, 36000),
(8, 'Marshmellos Limited', 'marshmellos-zero-sugar.png', 1, 30000),
(9, 'Fanta Strawberry', 'Fanta_Strawberry_20oz@1x.png', 2, 40000),
(9, 'Sprite Lymonade', 'sprite-lymonade-pdp-image-12ozcan-desktop.png', 2, 48000),
(9, 'Coca-Cola-original', 'coca-cola-original-20oz.png', 2, 29000),
(10, 'Sprite Zero Sugar', 'sprite-zero-sugar-can.png', 1, 30000),
(10, 'Sprite Lymonade', 'sprite-lymonade-pdp-image-12ozcan-desktop.png', 2, 48000),
(10, 'Pepsi Wild Cherry', 'cd20e5c9-45b9-4f67-955d-5421268ac5d1_1.ffcb6cd200263863d0a7f6b6efb7d72d.jpeg', 1, 22000),
(10, 'Fanta Pina Colada ', 'Fanta_PinaColada_20oz.png', 1, 13500),
(11, 'Coca-Cola Georgia Peach', 'georgia-peach.jpg', 2, 50000),
(11, 'Coca-Cola Caffeine-Free', 'image-cocacolacaffeinefree-desktop.png', 2, 40000),
(12, 'Sprite new', 'sprite-pdp-image-12ozcan-desktop.png', 3, 72000),
(12, 'Sprite Cherry', 'sprite-cherry-pdp-image-12ozcan-desktop.png', 2, 46000),
(13, 'Marshmellos Limited', 'marshmellos-zero-sugar.png', 3, 90000),
(13, 'Sprite Lymonade', 'sprite-lymonade-pdp-image-12ozcan-desktop.png', 2, 48000),
(13, 'Fanta Orange ', 'Fanta_ZeroSugarOrange_20oz@1x.png', 2, 32000),
(14, 'Coca-Cola-original', 'coca-cola-original-20oz.png', 1, 14500),
(14, 'Sprite Zero Sugar', 'sprite-zero-sugar-can.png', 1, 30000),
(14, 'Fanta Pineapple', 'Fanta_Pineapple_20oz@1x.png', 1, 18000),
(15, 'Coca-Cola-original', 'coca-cola-original-20oz.png', 1, 14500),
(16, 'Fanta Orange ', 'Fanta_ZeroSugarOrange_20oz@1x.png', 1, 16000),
(16, 'Pepsi Real Sugar', '6430057690406_2.webp', 4, 66000),
(17, 'Sprite Cherry', 'sprite-cherry-pdp-image-12ozcan-desktop.png', 3, 69000),
(17, 'Coca-Cola Caffeine-Free', 'image-cocacolacaffeinefree-desktop.png', 4, 80000),
(18, 'Fanta Zero Sugar Orange', 'Fanta_ZeroSugarOrange.png', 2, 30000),
(18, 'Marshmellos Limited', 'marshmellos-zero-sugar.png', 1, 30000),
(18, 'Coca-Cola Caffeine-Free', 'image-cocacolacaffeinefree-desktop.png', 1, 20000),
(19, 'Pepsi Wild Cherry', 'cd20e5c9-45b9-4f67-955d-5421268ac5d1_1.ffcb6cd200263863d0a7f6b6efb7d72d.jpeg', 1, 22000),
(19, 'Sprite Lymonade', 'sprite-lymonade-pdp-image-12ozcan-desktop.png', 1, 24000),
(20, 'Sprite Cherry', 'sprite-cherry-pdp-image-12ozcan-desktop.png', 1, 23000),
(26, 'Pepsi Real Sugar', '6430057690406_2.webp', 5, 82500),
(27, 'Fanta Zero Sugar Orange', 'Fanta_ZeroSugarOrange.png', 2, 30000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `img_product` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `describe` varchar(2000) NOT NULL,
  `origin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `id_category`, `name_product`, `img_product`, `price`, `describe`, `origin`) VALUES
(1, 2, 'Coca-Cola Georgia Peach', 'georgia-peach.jpg', 25000, '- Coca-Cola Georgia Peach là một phiên bản đặc biệt của Coca-Cola với vị đào và được bán ra tại một số khu vực ở nước Mỹ. Thông số của Coca-Cola Georgia Peach có thể khác nhau tùy theo quốc gia và khu vực sản xuất, tuy nhiên thông thường, đây là các thông số chung của nó:<br>\r\n\r\n+ Thành phần chính: Nước cất, siro fructose ngô, đường, acid carbonic, màu caramel, hương vị tự nhiên, cafein.<br>\r\n+ Năng lượng: 140 calo mỗi lon 12 fl oz (355 ml).<br>\r\n+ Carbohydrate: 39g mỗi lon 12 fl oz (355 ml).<br>\r\n+ Đường: 39g mỗi lon 12 fl oz (355 ml).<br>\r\n+ Caffein: 34mg mỗi lon 12 fl oz (355 ml).<br>\r\n+ Chất đạm: 0g mỗi lon 12 fl oz (355 ml).<br>\r\n+ Chất béo: 0g mỗi lon 12 fl oz (355 ml).<br>\r\n+ Natri: 45mg mỗi lon 12 fl oz (355 ml).<br>', 'Việt Nam'),
(2, 2, 'Coca-Cola Caffeine-Free', 'image-cocacolacaffeinefree-desktop.png', 20000, '- Coca-Cola Caffeine-Free là loại nước ngọt không chứa caffeine, được sản xuất bởi The Coca-Cola Company. Thông số sản phẩm của Coca-Cola Caffeine-Free bao gồm:<br>\r\n\r\n+ Kích thước chai: 12 fl oz (355 ml)<br>\r\n+ Thành phần chính: Nước tinh khiết, đường, màu caramel, chất tạo độ axit (axit photphoric), chất tạo độ ngọt (xi-rô ngô hàm lượng fructose cao), chất bảo quản (natri benzoat), hương vị tự nhiên và nhân tạo.<br>\r\n+ Dinh dưỡng giá trị (trong một chai 12 fl oz):<br>\r\n+ calo: 140<br>\r\n+ Carbohydrat: 39g<br>\r\n+ Đường kính: 39g<br>\r\n+ Chất béo: 0g<br>\r\n+ Chất đạm: 0g<br>\r\n+ Cafein: 0mg.<br>', 'Việt Nam'),
(3, 2, 'Coca-Cola-original', 'coca-cola-original-20oz.png', 14500, '- Coca-Cola là thương hiệu nước giải khát có hương vị ngọt được sản xuất bởi Công ty Coca-Cola. Tùy thuộc vào địa điểm xuất và phân phối, các thành phần công cụ có thể có sự khác biệt nhỏ. Tuy nhiên, thông thường, Coca-Cola có các thành phần chính sau:<br>\r\n\r\n+ Nước: chất lỏng chính được sử dụng trong sản phẩm.<br>\r\n+ Đường: sử dụng để tạo độ ngọt cho Coca-Cola.<br>\r\n+ Carbon dioxide: là thành phần tạo bọt và nổi của Coca-Cola.<br>\r\n+ Axit photphoric: có tác dụng làm giảm độ ngọt của Coca-Cola, tạo ra hương vị thanh mát.<br>\r\n+ Caffeine: một chất kích thích có mặt trong Coca-Cola với số lượng khác nhau tùy theo địa phương. Có thể có các sản phẩm Coca-Cola không chứa caffeine.<br>\r\n+ Calo: Một lon 12 oz (khoảng 355ml) của Coca-Cola có khoảng 140 calo.<br>\r\n+ Carbohydrate: Một lon 12 oz của Coca-Cola chứa khoảng 39g carbohydrate.<br>\r\n+ Chất béo, cholesterol, protein và chất xơ: Coca-Cola không chứa các chất này.<br>', 'Việt Nam'),
(4, 2, 'Marshmellos Limited', 'marshmellos-zero-sugar.png', 30000, '- Phiên bản giới hạn của Marshmello là phiên bản giới hạn của nước giải khát Mountain Dew được ra mắt vào năm 2021 với sự hợp tác của DJ Marshmello. Thông số sản phẩm của Marshmello\'s Limited Edition bao gồm:<br>\r\n\r\n+ Kích thước chai: 16 fl oz (473 ml)<br>\r\n+ Thành phần chính: Nước tinh khiết, đường, chất tạo độ axit (axit citric, axit malic), caffein, chất làm đặc biệt (gom xanthan), chất tạo màu (E102, E110), hương vị tự nhiên và nhân tạo.<br>\r\n+ Dinh dưỡng giá trị (trong một chai 16 fl oz):\r\ncalo: 230<br>\r\n+ Chất bột đường: 60g<br>\r\n+ Đường: 60g<br>\r\n+ Chất béo: 0g<br>\r\n+ Chất đạm: 0g<br>\r\n+ Cafein: 91mg.<br>', 'Việt Nam'),
(5, 2, 'Coca-Cola Vanilla', 'vanilla_12oz_desktop.jpg', 21000, '- Coca-Cola Vanilla là một phiên bản của Coca-Cola được pha trộn với hương vani. Thông số sản phẩm của Coca-Cola Vanilla bao gồm:<br>\r\n\r\n+ Kích thước chai: 12 fl oz (355 ml)<br>\r\n+ Thành phần chính: Nước tinh khiết, đường, màu caramel, chất tạo độ axit (axit photphoric), cafein, hương vị tự nhiên và nhân tạo, chất làm đặc biệt (gôm xanthan), chất bảo quản (natri benzoat).<br>\r\n+ Dinh dưỡng giá trị (trong một chai 12 fl oz):\r\ncalo: 150<br>\r\n+ Chất bột đường: 42g<br>\r\n+ Đường kính: 42g<br>\r\n+ Chất béo: 0g<br>\r\n+ Chất đạm: 0g<br>\r\n+ Cafein: 34mg.<br>', 'Việt Nam'),
(6, 1, 'Fanta Peach ', 'Fanta_Peach_20oz.png', 16000, 'Xin lỗi, như tôi đã đề cập ở trên, hiện tại The Coca-Cola Company không sản xuất loại Fanta Peach (Fanta đào) trong danh mục sản phẩm của họ trên toàn cầu. Vì vậy, không có thông số chính xác nào được cung cấp cho Fanta Peach từ The Coca-Cola Company. Nếu bạn muốn biết thông số chính xác của một loại Fanta Peach cụ thể, bạn cần xác định quốc gia hoặc vùng sản xuất của sản phẩm và tìm kiếm thông tin từ nguồn đáng tin cậy như nhãn sản phẩm hoặc trang web của nhà sản xuất hoặc nhà phân phối.', 'Việt Nam'),
(7, 1, 'Fanta Pina Colada ', 'Fanta_PinaColada_20oz.png', 13500, '- Fanta Piña Colada là một loại nước giải khát có hương vị trái cây kết hợp giữa dứa và nước cốt dừa. Tùy vào địa điểm sản xuất và phân phối, các thành phần cụ thể có thể có sự khác biệt nhỏ. Tuy nhiên, thông thường, Fanta Piña Colada có các thành phần chính sau:<br>\r\n\r\n- Nước, đường và acid citric: các thành phần này được sử dụng để tạo độ ngọt và hương vị trái cây cho sản phẩm.<br>\r\n- Caffeine-free: Fanta Piña Colada không chứa caffeine.<br>\r\n- Calories: Một lon 355ml của Fanta Piña Colada có khoảng 150 calo.<br>\r\n- Carbohydrates: Một lon 355ml của Fanta Piña Colada chứa khoảng 42g carbohydrate.<br>\r\n- Chất béo, cholesterol, protein và sợi: Fanta Piña Colada không chứa các chất này.<br>', 'Việt Nam'),
(8, 1, 'Fanta Pineapple', 'Fanta_Pineapple_20oz@1x.png', 18000, '- Fanta Pineapple là một loại nước giải khát có vị dứa được sản xuất bởi The Coca-Cola Company. Các thông số chính của sản phẩm này có thể bao gồm:<br>\r\n\r\n+ Thành phần chính: Nước tinh khiết, đường fructose, acid citric, chất điều chỉnh độ axit (sodium citrate), chất tạo ngọt nhân tạo, hương liệu tự nhiên và nhân tạo, chất bảo quản (benzoate natri), màu thực phẩm (vàng cam số 6).<br>\r\n\r\n+ Giá trị dinh dưỡng (mỗi 12 oz hoặc khoảng 355 ml):<br>\r\n\r\n+ Năng lượng: 160 cal<br>\r\n+ Đường: 44g<br>\r\n+ Chất béo: 0g<br>\r\n+ Protein: 0g<br>\r\n+ Natri: 70mg<br>', 'Việt Nam'),
(9, 1, 'Fanta Strawberry', 'Fanta_Strawberry_20oz@1x.png', 20000, '- Fanta Strawberry là một loại nước giải khát có vị dâu được sản xuất bởi The Coca-Cola Company. Các thông số chính của sản phẩm này có thể bao gồm:<br>\r\n\r\n+ Thành phần chính: Nước tinh khiết, đường fructose, acid citric, chất điều chỉnh độ axit (sodium citrate), chất tạo ngọt nhân tạo, hương liệu tự nhiên và nhân tạo, chất bảo quản (benzoate natri), màu thực phẩm (đỏ số 40).<br>\r\n\r\n+ Giá trị dinh dưỡng (mỗi 12 oz hoặc khoảng 355 ml):<br>\r\n\r\n+ Năng lượng: 160 cal<br>\r\n+ Đường: 44g<br>\r\n+ Chất béo: 0g<br>\r\n+ Protein: 0g<br>\r\n+ Natri: 65mg<br>', 'Việt Nam'),
(10, 1, 'Fanta Zero Sugar Orange', 'Fanta_ZeroSugarOrange.png', 15000, '- Fanta Zero Sugar Orange là một loại nước giải khát có vị cam không đường được sản xuất bởi The Coca-Cola Company. Các thông số chính của sản phẩm này có thể bao gồm:<br>\r\n\r\n+ Thành phần chính: Nước tinh khiết, chất tạo ngọt nhân tạo (aspartame, acesulfame potassium), acid citric, chất điều chỉnh độ axit (sodium citrate), chất tạo hương liệu tự nhiên và nhân tạo, chất bảo quản (benzoate natri), màu thực phẩm (vàng cam số 6).<br>\r\n\r\n+ Giá trị dinh dưỡng (mỗi 12 oz hoặc khoảng 355 ml):<br>\r\n\r\n+ Năng lượng: 0 cal<br>\r\n+ Đường: 0g<br>\r\n+ Chất béo: 0g<br>\r\n+ Protein: 0g<br>\r\n+ Natri: 60mg<br>', 'Việt Nam'),
(11, 1, 'Fanta Orange ', 'Fanta_ZeroSugarOrange_20oz@1x.png', 16000, '- Fanta Orange là một loại nước giải khát có vị cam được sản xuất bởi The Coca-Cola Company. Các thông số chính của sản phẩm này có thể bao gồm:<br>\r\n\r\n+ Thành phần chính: Nước tinh khiết, đường fructose, acid citric, chất điều chỉnh độ axit (sodium citrate), chất tạo ngọt nhân tạo, hương liệu tự nhiên và nhân tạo, chất bảo quản (benzoate natri), màu thực phẩm (vàng cam số 6).<br>\r\n\r\n+ Giá trị dinh dưỡng (mỗi 12 oz hoặc khoảng 355 ml):<br>\r\n\r\n+ Năng lượng: 160 cal<br>\r\n+ Đường: 44g<br>\r\n+ Chất béo: 0g<br>\r\n+ Protein: 0g<br>\r\n+ Natri: 55mg<br>', 'Việt Nam'),
(12, 3, 'Sprite Cherry', 'sprite-cherry-pdp-image-12ozcan-desktop.png', 23000, '- Sprite® Cherry là một loại nước giải khát có vị trái cây và hương cherry. Thông số của nó có thể khác nhau tùy vào quốc gia và khu vực sản xuất, tuy nhiên thông thường, đây là các thông số chung của Sprite® Cherry:<br>\r\n\r\n+ Thành phần chính: Nước, siro fructose ngô, đường, acid carbonic, hương vị tự nhiên, caffeine.<br>\r\n+ Năng lượng: 140 calo mỗi lon 12 fl oz (355 ml).<br>\r\n+ Carbohydrate: 38g mỗi lon 12 fl oz (355 ml).<br>\r\n+ Đường: 38g mỗi lon 12 fl oz (355 ml).<br>\r\n+ Caffeine: 0mg mỗi lon 12 fl oz (355 ml).<br>\r\n+ Protein: 0g mỗi lon 12 fl oz (355 ml).<br>\r\n+ Chất béo: 0g mỗi lon 12 fl oz (355 ml).<br>\r\n+ Natri: 65mg mỗi lon 12 fl oz (355 ml).<br>', 'Việt Nam'),
(13, 3, 'Sprite Lymonade', 'sprite-lymonade-pdp-image-12ozcan-desktop.png', 24000, '- Sprite Lymonade là một phiên bản mới của Sprite được giới thiệu vào năm 2021, với hương vị chanh tươi mát. Thông số sản phẩm của Sprite Lymonade bao gồm:<br>\r\n\r\n+ Kích thước chai: 12 fl oz (355 ml)<br>\r\n+ Thành phần chính: Nước tinh khiết, đường, acid citric, chất tạo độ ngọt (high fructose corn syrup), chất làm đặc (gom xanthan), hương vị tự nhiên và nhân tạo, chất bảo quản (benzoate natri), caffeine.<br>\r\n+ Giá trị dinh dưỡng (trong một chai 12 fl oz):<br>\r\n+ Calorie: 170<br>\r\n+ Carbohydrate: 46g<br>\r\n+ Đường: 46g<br>\r\n+ Chất béo: 0g<br>\r\n+ Protein: 0g<br>\r\n+ Caffeine: 57mg.<br>', 'Việt Nam'),
(14, 3, 'Sprite new', 'sprite-pdp-image-12ozcan-desktop.png', 24000, '- SPRITE® là một loại nước ngọt có hương vị chanh, không chứa caffein được sản xuất bởi Công ty Coca-Cola. Nó được giới thiệu lần đầu tiên ở Tây Đức vào năm 1959, và sau đó đến Hoa Kỳ vào năm 1961. Sprite được biết đến với vẻ ngoài rõ ràng, không màu và hương vị giòn, sảng khoái.<br>\r\n\r\n- Sprite được làm bằng nước có ga, xi-rô ngô hàm lượng đường cao, hương vị tự nhiên, axit xitric, natri citrat và natri benzoat. Nó không chứa caffein và được bán trên thị trường như một chất thay thế không chứa caffein cho các loại nước tăng lực và cola khác.<br>', 'Việt Nam'),
(15, 3, 'Sprite tropical mix', 'sprite-tropical-mix-pdp-image-20ozbottle-desktop.png', 24000, '- Thành phần chính: Nước, đường, chất điều chỉnh độ axit (330), chất bảo quản (202, 211), hương liệu tự nhiên và nhân tạo, chất làm đục (414), vitamin C.<br>\r\n+ Giá trị dinh dưỡng (trên 100ml): Calo 42kcal, đường 10,6g, đạm 0g, chất béo 0g, vitamin C 12mg.<br>\r\n+ Dung tích: thường là 330ml hoặc 500ml.<br>\r\n+ Thương hiệu: Sprite, được sản xuất và phân phối bởi The Coca-Cola Company.<br>', 'Việt Nam'),
(16, 3, 'Sprite Zero Sugar', 'sprite-zero-sugar-can.png', 30000, '- Sprite Zero Sugar là một loại nước giải khát không có đường và không có calorie. Thông số sản phẩm của Sprite Zero Sugar bao gồm:<br>\r\n\r\n+ Kích thước chai: 12 fl oz (355 ml)<br>\r\nThành phần chính: Nước tinh khiết, acid citric, chất tạo độ ngọt (aspartame, acesulfame potassium), chất làm đặc (gom xanthan), chất bảo quản (benzoate natri), hương vị tự nhiên và nhân tạo, caffeine.<br>\r\n+ Giá trị dinh dưỡng (trong một chai 12 fl oz):<br>\r\n+ calo: 0<br>\r\n+ Carbohydrat: 0g<br>\r\n+ Đường: 0g<br>\r\n+ Chất béo: 0g<br>\r\n+ Chất đạm: 0g<br>\r\n+ Cafein: 68mg.<br>', 'Việt Nam'),
(17, 4, 'Pepsi Real Sugar', '6430057690406_2.webp', 16500, '- Pepsi Real Sugar là một phiên bản của Pepsi sử dụng đường thật thay vì high fructose corn syrup như các loại Pepsi khác. Thông số sản phẩm của Pepsi Real Sugar bao gồm:<br>\r\n\r\n+ Kích thước chai: 12 fl oz (355 ml)<br>\r\n+ Thành phần chính: Nước tinh khiết, đường, acid phosphoric, chất tạo độ axit (citric acid), chất tạo màu (caramel color), caffeine, hương vị tự nhiên và nhân tạo.<br>\r\n+ Giá trị dinh dưỡng (trong một chai 12 fl oz):<br>\r\n+ calo: 160<br>\r\n+ Chất bột đường: 41g<br>\r\n+ Đường: 41g<br>\r\n+ Chất béo: 0g<br>\r\n+ Chất đạm: 0g<br>\r\n+ Cafein: 38mg.<br>', 'Việt Nam'),
(18, 4, 'Pepsi Wild Cherry', 'cd20e5c9-45b9-4f67-955d-5421268ac5d1_1.ffcb6cd200263863d0a7f6b6efb7d72d.jpeg', 22000, 'Pepsi Wild Cherry là một loại nước ngọt cola của Pepsi với hương vị anh đào hoang dã. Thông số sản phẩm của Pepsi Wild Cherry bao gồm:<br>\r\n\r\nKích thước chai: 12 fl oz (355 ml)<br>\r\nThành phần chính: Nước tinh khiết, đường, acid phosphoric, caffeine, hương vị tự nhiên và nhân tạo, chất tạo màu (caramel color), chất tạo độ axit (citric acid), chất tạo độ ngọt (high fructose corn syrup), chất bảo quản (benzoate natri).<br>\r\nGiá trị dinh dưỡng (trong một chai 12 fl oz):<br>\r\n+ Calorie: 150<br>\r\n+ Carbohydrate: 41g<br>\r\n+ Đường: 41g<br>\r\n+ Chất béo: 0g<br>\r\n+ Protein: 0g<br>\r\n+ Caffeine: 38mg.<br>', 'Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `account`, `email`, `psw`, `phone`, `address`) VALUES
(5, 'Nhật Long', 'lnhat3333@gmail.com', '123456', '0363890328', 'Trực Đại- Trực Ninh- Nam Định');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`name_news`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`name_notifi`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_order` (`id_order`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id`) REFERENCES `oders` (`id_order`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
