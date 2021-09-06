-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 06, 2021 lúc 08:47 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` bigint(20) UNSIGNED NOT NULL,
  `id_phim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `id_phim`, `id_user`, `noi_dung`, `created_at`, `updated_at`) VALUES
(1, '3', '8', 'Phim hay quá mọi người ơi', '2021-09-15 01:28:08', '2021-09-23 01:28:12'),
(2, '3', '8', 'Phim khá hay', '2021-09-05 20:37:13', '2021-09-05 20:37:13'),
(3, '15', '1', 'Phim khá ổn', '2021-09-05 20:48:09', '2021-09-05 20:48:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_13_145958_category_movie', 2),
(5, '2021_08_13_150831_phim', 3),
(6, '2021_08_13_151525_binhluan', 3),
(7, '2021_08_13_151744_quocgia', 3),
(8, '2021_08_15_120159_role', 4),
(9, '2021_08_20_080256_daodien', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id_phim` bigint(20) UNSIGNED NOT NULL,
  `ten_phim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_phim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dien_vien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thong_tin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_theloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_luong` time NOT NULL,
  `nam_sx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `id_quocgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daodien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_phim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id_phim`, `ten_phim`, `hinh_phim`, `dien_vien`, `thong_tin`, `id_theloai`, `thoi_luong`, `nam_sx`, `rating`, `id_quocgia`, `daodien`, `link_phim`, `link_trailer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SUICIDE SQUAD: BIỆT ĐỘI CẢM TỬ 2', 'suicide-squad-diep-vu-cam-tu.jpg', 'John Cena, Margot Robbie, Pete Davidson, Idris Elba', 'Suicide Squad: Biệt Đội Cảm Tử 2 Theo lệnh của sĩ quan tình báo Amanda Waller , mười ba tù nhân từ trại giam Belle Reve — cựu bác sĩ tâm thần Harley Quinn ; Nanaue lai ăn thịt người ; Thuyền trưởng tên trộm người Úc Boomerang ; sát thủ Bloodsport ; Nhà tạ', '5', '00:00:00', '2020', 5.40, '2', '1', 'https://www.youtube.com/embed/Xh0YQp9odv4', 'https://www.youtube.com/embed/Xh0YQp9odv4', '1', NULL, '2021-08-21 02:55:53'),
(2, 'Gặp gỡ, Yêu đương và Được bên em | Phan Mạnh Quỳnh (Official MV)', 'suicide-squad-diep-vu-cam-tu.jpg', 'Phan Mạnh Quỳnh', 'Lyrics: \r\nNhẹ bước với chiếc váy cưới khăn voan mang trên đầu\r\nEm bên anh như lời cầu, trước những ánh mắt chung vui mọi người từ khi hai ta quen nhau\r\nCó khúc hát viết bao lâu gom hết chờ đợi thành phút diệu vời\r\nVì em người anh thương mến sau bao năm hẹn ước cũng đến hôm nay\r\nKhi anh đang nhìn ngắm dung nhan dưới ánh chiều vàng\r\nNỗi hân hoan như mang anh đi về chốn địa đàng\r\nMuốn thấy nụ cười, muốn bảo bọc người, cho em một đời bình yên\r\nXuân - Thu, Đông - Hạ dẫu vinh quang hay khi bần hàn \r\nNguyện trao em tình nghĩa như biển ngàn\r\nTrải qua bao nhiêu những vui buồn thì vẫn trong anh rất vinh hạnh: gặp gỡ, yêu đương và được bên em.\r\n\r\nChẳng ai xa xôi tương lai khi mới chớm quen một người, chỉ biết cứ nhớ khôn nguôi\r\nĐể rồi từng ngày trao quan tâm, trao nếp sống, trao cả thanh xuân vì yêu \r\nThấm thoát đã quá 5 năm trên bước đường đời không chỉ ngọt bùi\r\nThời gian cùng chung đau thương ta biết rõ người sẽ kết tóc se tơ\r\n\r\nBR: Người thừa biết trái tim anh đầy tia nắng tên em, đem theo tình yêu ấm áp cho anh thêm tin nơi bản thân mình hơn', '1', '00:01:00', '2020', 5.00, '1', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/watch?v=Xh0YQp9odv4', '1', NULL, '2021-08-30 02:41:50'),
(3, 'Chàng Phi Công Của Em', '20210822020739.jpg', 'Diêu Lan, Điền Hôn', '<p>Phim kể về Di&ecirc;u Lan gần 33 tuổi, l&agrave; quản l&yacute; của một cửa h&agrave;ng tiện lợi, cuối c&ugrave;ng cũng tổ chức đ&aacute;m cưới của bản th&acirc;n, nhưng đột nhi&ecirc;n gặp phải bạn g&aacute;i cũ của ch&uacute; rễ Điền Kh&ocirc;n, rất tức giận n&ecirc;n c&ocirc; đ&atilde; hủy bỏ đ&aacute;m cưới v&agrave; bỏ đi. Ai ngờ rằng rắc rối n&agrave;y đ&atilde; tạo ra mối li&ecirc;n kết kh&ocirc;ng h&ograve;a tan giữa Di&ecirc;u Lan v&agrave; cậu b&eacute; to x&aacute;c Lục Tiểu Bối. Họ c&aacute;ch biệt nhau 9 tuổi, sức sống v&agrave; sự l&atilde;ng mạn của Lục Tiểu Bối c&ugrave;ng với sự trưởng th&agrave;nh v&agrave; c&ocirc;ng việc ổn định của Di&ecirc;u Lan khiến cả hai thu h&uacute;t lẫn nhau.</p>', '2', '00:01:00', '2020', 3.10, '1', 'Trung Quốc', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/qv5D2XtcmGk', '1', '2021-08-21 03:55:59', '2021-08-21 04:06:45'),
(7, 'SUICIDE SQUAD: BIỆT ĐỘI CẢM TỬ 2', 'suicide-squad-diep-vu-cam-tu.jpg', 'John Cena, Margot Robbie, Pete Davidson, Idris Elba', 'Suicide Squad: Biệt Đội Cảm Tử 2 Theo lệnh của sĩ quan tình báo Amanda Waller , mười ba tù nhân từ trại giam Belle Reve — cựu bác sĩ tâm thần Harley Quinn ; Nanaue lai ăn thịt người ; Thuyền trưởng tên trộm người Úc Boomerang ; sát thủ Bloodsport ; Nhà tạ', '5', '00:00:00', '2020', 5.40, '2', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/Xh0YQp9odv4', '1', NULL, '2021-08-21 02:55:53'),
(8, 'SUICIDE SQUAD: BIỆT ĐỘI CẢM TỬ 2', 'suicide-squad-diep-vu-cam-tu.jpg', 'John Cena, Margot Robbie, Pete Davidson, Idris Elba', 'Suicide Squad: Biệt Đội Cảm Tử 2 Theo lệnh của sĩ quan tình báo Amanda Waller , mười ba tù nhân từ trại giam Belle Reve — cựu bác sĩ tâm thần Harley Quinn ; Nanaue lai ăn thịt người ; Thuyền trưởng tên trộm người Úc Boomerang ; sát thủ Bloodsport ; Nhà tạ', '5', '00:00:00', '2020', 5.40, '2', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/Xh0YQp9odv4', '1', NULL, '2021-08-21 02:55:53'),
(9, 'Gặp gỡ, Yêu đương và Được bên em | Phan Mạnh Quỳnh (Official MV)', 'suicide-squad-diep-vu-cam-tu.jpg', 'Phan Mạnh Quỳnh', 'Lyrics: \r\nNhẹ bước với chiếc váy cưới khăn voan mang trên đầu\r\nEm bên anh như lời cầu, trước những ánh mắt chung vui mọi người từ khi hai ta quen nhau\r\nCó khúc hát viết bao lâu gom hết chờ đợi thành phút diệu vời\r\nVì em người anh thương mến sau bao năm hẹn ước cũng đến hôm nay\r\nKhi anh đang nhìn ngắm dung nhan dưới ánh chiều vàng\r\nNỗi hân hoan như mang anh đi về chốn địa đàng\r\nMuốn thấy nụ cười, muốn bảo bọc người, cho em một đời bình yên\r\nXuân - Thu, Đông - Hạ dẫu vinh quang hay khi bần hàn \r\nNguyện trao em tình nghĩa như biển ngàn\r\nTrải qua bao nhiêu những vui buồn thì vẫn trong anh rất vinh hạnh: gặp gỡ, yêu đương và được bên em.\r\n\r\nChẳng ai xa xôi tương lai khi mới chớm quen một người, chỉ biết cứ nhớ khôn nguôi\r\nĐể rồi từng ngày trao quan tâm, trao nếp sống, trao cả thanh xuân vì yêu \r\nThấm thoát đã quá 5 năm trên bước đường đời không chỉ ngọt bùi\r\nThời gian cùng chung đau thương ta biết rõ người sẽ kết tóc se tơ\r\n\r\nBR: Người thừa biết trái tim anh đầy tia nắng tên em, đem theo tình yêu ấm áp cho anh thêm tin nơi bản thân mình hơn', '1', '00:01:00', '2020', 5.00, '1', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/watch?v=Xh0YQp9odv4', '1', NULL, '2021-08-30 02:41:50'),
(10, 'SUICIDE SQUAD: BIỆT ĐỘI CẢM TỬ 2', 'suicide-squad-diep-vu-cam-tu.jpg', 'John Cena, Margot Robbie, Pete Davidson, Idris Elba', 'Suicide Squad: Biệt Đội Cảm Tử 2 Theo lệnh của sĩ quan tình báo Amanda Waller , mười ba tù nhân từ trại giam Belle Reve — cựu bác sĩ tâm thần Harley Quinn ; Nanaue lai ăn thịt người ; Thuyền trưởng tên trộm người Úc Boomerang ; sát thủ Bloodsport ; Nhà tạ', '5', '00:00:00', '2020', 5.40, '2', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/Xh0YQp9odv4', '1', NULL, '2021-08-21 02:55:53'),
(11, 'SUICIDE SQUAD: BIỆT ĐỘI CẢM TỬ 2', 'suicide-squad-diep-vu-cam-tu.jpg', 'John Cena, Margot Robbie, Pete Davidson, Idris Elba', 'Suicide Squad: Biệt Đội Cảm Tử 2 Theo lệnh của sĩ quan tình báo Amanda Waller , mười ba tù nhân từ trại giam Belle Reve — cựu bác sĩ tâm thần Harley Quinn ; Nanaue lai ăn thịt người ; Thuyền trưởng tên trộm người Úc Boomerang ; sát thủ Bloodsport ; Nhà tạ', '5', '00:00:00', '2020', 5.40, '2', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/Xh0YQp9odv4', '1', NULL, '2021-08-21 02:55:53'),
(12, 'Chàng Phi Công Của Em', '20210822020739.jpg', 'Diêu Lan, Điền Hôn', '<p>Phim kể về Di&ecirc;u Lan gần 33 tuổi, l&agrave; quản l&yacute; của một cửa h&agrave;ng tiện lợi, cuối c&ugrave;ng cũng tổ chức đ&aacute;m cưới của bản th&acirc;n, nhưng đột nhi&ecirc;n gặp phải bạn g&aacute;i cũ của ch&uacute; rễ Điền Kh&ocirc;n, rất tức giận n&ecirc;n c&ocirc; đ&atilde; hủy bỏ đ&aacute;m cưới v&agrave; bỏ đi. Ai ngờ rằng rắc rối n&agrave;y đ&atilde; tạo ra mối li&ecirc;n kết kh&ocirc;ng h&ograve;a tan giữa Di&ecirc;u Lan v&agrave; cậu b&eacute; to x&aacute;c Lục Tiểu Bối. Họ c&aacute;ch biệt nhau 9 tuổi, sức sống v&agrave; sự l&atilde;ng mạn của Lục Tiểu Bối c&ugrave;ng với sự trưởng th&agrave;nh v&agrave; c&ocirc;ng việc ổn định của Di&ecirc;u Lan khiến cả hai thu h&uacute;t lẫn nhau.</p>', '2', '00:01:00', '2020', 3.10, '1', 'Trung Quốc', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/qv5D2XtcmGk', '1', '2021-08-21 03:55:59', '2021-08-21 04:06:45'),
(13, 'SUICIDE SQUAD: BIỆT ĐỘI CẢM TỬ 2', 'suicide-squad-diep-vu-cam-tu.jpg', 'John Cena, Margot Robbie, Pete Davidson, Idris Elba', 'Suicide Squad: Biệt Đội Cảm Tử 2 Theo lệnh của sĩ quan tình báo Amanda Waller , mười ba tù nhân từ trại giam Belle Reve — cựu bác sĩ tâm thần Harley Quinn ; Nanaue lai ăn thịt người ; Thuyền trưởng tên trộm người Úc Boomerang ; sát thủ Bloodsport ; Nhà tạ', '5', '00:00:00', '2020', 5.40, '2', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/Xh0YQp9odv4', '1', NULL, '2021-08-21 02:55:53'),
(14, 'SUICIDE SQUAD: BIỆT ĐỘI CẢM TỬ 2', 'suicide-squad-diep-vu-cam-tu.jpg', 'John Cena, Margot Robbie, Pete Davidson, Idris Elba', 'Suicide Squad: Biệt Đội Cảm Tử 2 Theo lệnh của sĩ quan tình báo Amanda Waller , mười ba tù nhân từ trại giam Belle Reve — cựu bác sĩ tâm thần Harley Quinn ; Nanaue lai ăn thịt người ; Thuyền trưởng tên trộm người Úc Boomerang ; sát thủ Bloodsport ; Nhà tạ', '5', '00:00:00', '2020', 5.40, '2', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/Xh0YQp9odv4', '1', NULL, '2021-08-21 02:55:53'),
(15, 'Gặp gỡ, Yêu đương và Được bên em | Phan Mạnh Quỳnh (Official MV)', 'suicide-squad-diep-vu-cam-tu.jpg', 'Phan Mạnh Quỳnh', 'Lyrics: \r\nNhẹ bước với chiếc váy cưới khăn voan mang trên đầu\r\nEm bên anh như lời cầu, trước những ánh mắt chung vui mọi người từ khi hai ta quen nhau\r\nCó khúc hát viết bao lâu gom hết chờ đợi thành phút diệu vời\r\nVì em người anh thương mến sau bao năm hẹn ước cũng đến hôm nay\r\nKhi anh đang nhìn ngắm dung nhan dưới ánh chiều vàng\r\nNỗi hân hoan như mang anh đi về chốn địa đàng\r\nMuốn thấy nụ cười, muốn bảo bọc người, cho em một đời bình yên\r\nXuân - Thu, Đông - Hạ dẫu vinh quang hay khi bần hàn \r\nNguyện trao em tình nghĩa như biển ngàn\r\nTrải qua bao nhiêu những vui buồn thì vẫn trong anh rất vinh hạnh: gặp gỡ, yêu đương và được bên em.\r\n\r\nChẳng ai xa xôi tương lai khi mới chớm quen một người, chỉ biết cứ nhớ khôn nguôi\r\nĐể rồi từng ngày trao quan tâm, trao nếp sống, trao cả thanh xuân vì yêu \r\nThấm thoát đã quá 5 năm trên bước đường đời không chỉ ngọt bùi\r\nThời gian cùng chung đau thương ta biết rõ người sẽ kết tóc se tơ\r\n\r\nBR: Người thừa biết trái tim anh đầy tia nắng tên em, đem theo tình yêu ấm áp cho anh thêm tin nơi bản thân mình hơn', '1', '00:01:00', '2020', 5.00, '1', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/watch?v=Xh0YQp9odv4', '1', NULL, '2021-08-30 02:41:50'),
(16, 'SUICIDE SQUAD: BIỆT ĐỘI CẢM TỬ 2', 'suicide-squad-diep-vu-cam-tu.jpg', 'John Cena, Margot Robbie, Pete Davidson, Idris Elba', 'Suicide Squad: Biệt Đội Cảm Tử 2 Theo lệnh của sĩ quan tình báo Amanda Waller , mười ba tù nhân từ trại giam Belle Reve — cựu bác sĩ tâm thần Harley Quinn ; Nanaue lai ăn thịt người ; Thuyền trưởng tên trộm người Úc Boomerang ; sát thủ Bloodsport ; Nhà tạ', '5', '00:00:00', '2020', 5.40, '2', '1', 'https://ok.ru/videoembed/3172671752914', 'https://www.youtube.com/embed/Xh0YQp9odv4', '1', NULL, '2021-08-21 02:55:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

CREATE TABLE `quocgia` (
  `id_quocgia` bigint(20) UNSIGNED NOT NULL,
  `ten_quocgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`id_quocgia`, `ten_quocgia`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', '1', NULL, '2021-08-18 00:51:58'),
(2, 'Mỹ', '1', NULL, '2021-08-18 00:40:41'),
(3, 'Hàn Quốc', '1', NULL, NULL),
(4, 'Trung Quốc', '1', NULL, '2021-08-18 02:09:20'),
(5, 'Nhật Bản', '1', NULL, NULL),
(6, 'Thái Lan', '1', NULL, '2021-08-18 00:41:15'),
(7, 'Lào', '1', '2021-08-18 00:47:30', '2021-08-18 00:47:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name_role`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', NULL, NULL),
(2, 'users', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id_theloai` bigint(20) UNSIGNED NOT NULL,
  `ten_theloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id_theloai`, `ten_theloai`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kinh dị', '1', NULL, NULL),
(2, 'Tình cảm', '1', NULL, NULL),
(3, '18+', '1', NULL, NULL),
(4, 'Hoạt hình', '1', NULL, NULL),
(5, 'Hành động', '1', NULL, NULL),
(6, 'Lãng mạn', '1', NULL, NULL),
(7, 'Trinh thám', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `id_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hoàng', 'hoangdhtnh@gmail.com', NULL, '$2y$10$ZP67D6oiFU.D6W4BHZvOBuvmCpPThruYhUG0Tk4rS2KLXXGHLiyVe', 1, 'B1Tzopo7OA4fUtTeoC4PaUGOjK6hr19mqR8ZOqBywTzx7AeJqe3zMqBHM6PR', '2021-08-13 20:14:17', '2021-08-13 20:14:17'),
(2, 'Hoàng Huy', 'anhvip96xz@gmail.com', NULL, '$2y$10$kco2U8UNzZc3qyyUt41ZfeLjyUe0/yqYgfsnjBu.cbU51QqaNS4G6', 2, NULL, '2021-08-15 05:26:19', '2021-08-15 05:26:19'),
(3, 'Trần Vân', 'anhvip9q6xz@gmail.com', NULL, '$2y$10$NzLw6g5cqyU9qRsIokfOlOgtk/G/TIQWRCTBwIehrHJA2qd4WqR/S', 2, NULL, '2021-08-15 05:28:12', '2021-08-15 05:28:12'),
(4, 'Cẩm Vân', 'dminteast@gmail.com', NULL, '$2y$10$d.iC9zxsSTPSsi1IOhTz1ebfVDkAJRTCd728tA82c8vMTPvJkLmRS', 2, NULL, '2021-08-15 05:29:39', '2021-08-15 05:29:39'),
(6, 'Trần Vân', 'anhvip9aa6xz@gmail.com', NULL, '$2y$10$OiVuK.OLWY5Re.4tvsKNtebej.GS8RPU7wCSaoCFPeKqsD6aR/tVW', 2, NULL, '2021-08-21 19:35:48', '2021-08-21 19:35:48'),
(7, 'Hoang Pham', 'hoangdhtnhaa@gmail.com', NULL, '$2y$10$e.nBFaoAs/rLjmv6VmDlcOQ8KmBr0g9yielKaBUIOoerJzIoDcj46', 2, NULL, '2021-08-31 19:13:07', '2021-08-31 19:13:07'),
(8, 'Sách thiếu nhi', 'admintest@gmail.com', NULL, '$2y$10$Fkm3w8eSNjlZuR21Oh5DU.cwNwtUoFworvUb.bISqZsepHmaiNt1u', 2, NULL, '2021-09-04 19:20:17', '2021-09-05 06:59:13');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id_phim`);

--
-- Chỉ mục cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`id_quocgia`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id_theloai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id_phim` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `id_quocgia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id_theloai` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
