-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--

-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 02:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `anh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acc`
--

CREATE TABLE `acc` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `acc`
--

INSERT INTO `acc` (`id`, `username`, `password`, `email`, `full_name`, `role`) VALUES
(2, '2', '2', 'hl@gmail.com', '2', 'User'),
(10, 'hanhluu', '123456', 'hl@gmail.com', '1', 'User'),
(23, '3', '3', '3@3', '3', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhhh`
--

CREATE TABLE `anhhh` (
  `id_phong` int(11) NOT NULL,
  `loaiphong` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `anhphong` varchar(255) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL,
  `diadiem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anhhh`
--

INSERT INTO `anhhh` (`id_phong`, `loaiphong`, `price`, `description`, `anhphong`, `tinhtrang`, `diadiem`) VALUES
(99, 'VIP', 1500000, 'Đẹp rẻ', '23_09_17_05h_09m_09sz4198326103433_5d25951e6947574972ed4bd636ee6218.jpg', 'Đã đặt', 'Hà Nội'),
(100, 'VIP', 1000000, 'Vừa', '23_09_17_05h_09m_23sz4198326090229_51f6b04b6e6a867cc2c4c6375dfa18ce.jpg', 'Đã đặt', 'Hà Nội'),
(101, 'VIP', 100000, 'Vừa vừa', '23_09_17_05h_09m_41sz4198326087687_8f277628ae5a84e80993fa43db6892e6.jpg', 'Còn trống', 'Hà Nội'),
(102, 'VIP', 2500000, 'Luxury', '23_09_17_05h_09m_09sz4198326082349_f43d4ce05cf490e869cf52171fa06fcd.jpg', 'Còn trống', 'Hà Nội'),
(103, 'Bình dân', 500000, 'Bình dân', '23_09_17_05h_09m_30sz4198326082349_f43d4ce05cf490e869cf52171fa06fcd.jpg', 'Đã đặt', 'Hà Nội'),
(105, 'Bình dân', 23456, '<p>ykjhgf</p>\r\n', '23_09_21_11h_09m_54sz4198326076154_85731bdf79af7e8ee8f3f2d99b49b568.jpg', 'Còn trống', 'Tuyên Quang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyendi`
--

CREATE TABLE `chuyendi` (
  `id` int(11) NOT NULL,
  `phuongTien` int(11) NOT NULL,
  `diemKhoiHanh` varchar(255) NOT NULL,
  `diemDen` varchar(255) NOT NULL,
  `ngayDi` varchar(255) NOT NULL,
  `soHanhKhach` int(11) NOT NULL,
  `giaVe` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyendi`
--

INSERT INTO `chuyendi` (`id`, `phuongTien`, `diemKhoiHanh`, `diemDen`, `ngayDi`, `soHanhKhach`, `giaVe`) VALUES
(40, 1, 'Hà Nội', 'Hạ Long', '2023-09-19', 100, 1000000),
(48, 3, 'Cao Bằng', 'Sài Gòn', '', 100, 500000),
(53, 3, 'Cao Bằng', 'Sài Gòn', '', 100, 500000),
(55, 2, '2', '2', '', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datphong`
--

CREATE TABLE `datphong` (
  `id` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tenkhach` varchar(255) NOT NULL,
  `ngayden` varchar(255) NOT NULL,
  `ngaydi` varchar(255) NOT NULL,
  `diadiem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `datphong`
--

INSERT INTO `datphong` (`id`, `id_phong`, `username`, `tenkhach`, `ngayden`, `ngaydi`, `diadiem`) VALUES
(32, 100, 'cuongll', 'mnc', '2023-09-16', '2023-09-17', ''),
(35, 99, 'cuongll', 'mnc', '2023-09-16', '2023-09-16', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiemdulich`
--

CREATE TABLE `diadiemdulich` (
  `id` int(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `theloai` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `dacdiem` text NOT NULL,
  `gioithieu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `diadiemdulich`
--

INSERT INTO `diadiemdulich` (`id`, `ten`, `diachi`, `theloai`, `giatien`, `anh`, `dacdiem`, `gioithieu`) VALUES
(1, 'Sun World Bà Nà Hills', 'Đà Nẵng', 'Công viên giải trí', 165000, 'SunWorld1.png', 'Khám phá Bà Nà thật dễ dàng với vé Bà Nà Hills. Trải nghiệm hệ thống cáp treo được CNN bình chọn là 1 trong những cáp treo ấn tượng nhất thế giới. Vui hết mình ở khu vui chơi Fantasy Park nằm ở độ cao 1.489 m. Ngắm cảnh trên Cầu Vàng, nơi được tạp chí TIME bình chọn vào năm 2018 là 1 trong 100 địa điểm tuyệt vời nhất trên thế giới', 'Ai đến Đà Nẵng mà không đi du lịch Bà Nà Hills thì thật là thiếu sót đấy! Bạn hãy cầm trên tay vé Bà Nà Hills và dành nguyên 1 ngày để khám phá điểm đến ấn tượng này nhé. Với vé Bà Nà Hills này, bạn sẽ có cơ hội chiêm ngưỡng quang cảnh hùng vĩ xung quanh khi hệ thống cáp treo dần đưa bạn lên đỉnh núi.\r\nLên đến Bà Nà Hills, bạn tha hồ bung lựa với hơn 105 trò chơi ở công viên giải trí Fantasy Park mà không mất phí. Chưa hết, khu làng Pháp là địa điểm vô cùng lý tưởng để sống ảo. À mà nhớ hãy dành thời gian ngắm cảnh trên Cầu Vàng, nơi được tạp chí TIME bình chọn vào năm 2018 là 1 trong 100 địa điểm tuyệt vời nhất trên thế giới. Bạn đã sẵn sàng bắt đầu chuyến đi du lịch Bà Nà Hills hứa hẹn nhiều bất ngờ chưa?'),
(2, 'Asia Park', 'Đà Nẵng', 'Công viên giải trí', 95000, 'AsiaPark1.png', 'Trải nghiệm châu Á thu nhỏ được thể hiện qua những công trình kiến trúc đặc trưng. Cuốn hút đến nghẹt thở với các trò chơi trong nhà và ngoài trời như tháp rơi tự do Golden Sky Tower và tàu lượn dạng treo Queen Cobra. Thích thú với không gian mua sắm và thế giới ẩm thực đa dạng. Tận hưởng cuối tuần cùng gia đình và bạn bè trong không gian xanh mướt tại Sun World Đà Nẵng Wonders. Tham gia các hoạt động cuối tuần cuốn hút, mỗi thứ Bảy và Chủ Nhật, từ 19:30 – 20:00', 'Bạn đang tìm kiếm một nơi kết hợp trò chơi và chương trình giải trí đẳng cấp thế giới với sự pha trộn hài hoà của văn hoá Á Đông, thì Asia Park Đà Nẵng quả là điểm đến cực kì phù hợp với bạn. Bạn sẽ có cảm giác như đi qua một châu Á thu nhỏ qua những công trình kiến trúc đến từ 10 quốc gia châu Á.\r\nKhông những thế, bạn sẽ được tham gia các trò chơi hấp dẫn như vòng đu quay Sun Wheel, một trong những vòng đu quay cao nhất thế giới, và các trò chơi cảm giác mạnh như tháp rơi tự do Golden Sky Tower và tàu lượn dạng treo Queen Cobra. Cuối cùng, hãy cùng gia đình và bạn bè tận hưởng không gian mua sắm và thế giới ẩm thực đa dạng trong không gian xanh mướt tại Asia Park Đà Nẵng!'),
(3, 'Công viên nước Mikazuki Water Park 365', 'Đà Nẵng', 'Công viên nước', 200000, 'WaterPark3651.jpg', 'Trải nghiệm công viên nước phong cách Nhật Bản cùng bạn bè và gia đình tại Đà Nẵng Mikazuki Water Park 365. Thỏa sức vui chơi trong các bể tạo sóng trong nhà, trượt nước và tắm khoáng nóng onsen cả ngày, bất kể điều kiện thời tiết!. Khám phá khu vui chơi giải trí tích hợp với các dịch vụ chăm sóc sức khỏe và sắc đẹp có tại công viên nước. Thưởng thức bữa trưa buffet hảo hạng và các bữa ăn set menu, tiếp thêm năng lượng cho bạn để khám phá toàn bộ công viên', 'Trải nghiệm công viên nước nóng trong nhà theo phong cách Nhật Bản hot nhất Đà Nẵng—Mikazuki Water Park 365. Với rất nhiều hồ bơi rộng rãi, hệ thống nước nóng quanh năm, khách có thể vui chơi mà bất chấp thời tiết nắng mưa, rét hay nóng.\r\nTrải nghiệm bể bơi ngoài trời, bể bơi bậc thang và hồ tạo sóng, thả mình lên phao nhẹ nhàng trôi trên dòng sông lười ngoài trời dạo quanh khu nghỉ dưỡng, hay check in tại mô hình núi Phú Sỹ cùng nhiều góc kỳ diệu khác tại Mikazuki. '),
(4, 'VinWonders', 'Nha Trang', 'Công viên giải trí', 543200, 'VinWonders1.jpg', 'Khám phá một trong những công viên vui chơi giải trí lớn nhất Việt Nam. Trải nghiệm cáp treo vượt biển dài nhất thế giới qua một trong những vịnh đẹp nhất thế giới. Thử sức với các trò chơi cảm giác mạnh như đu quay nhào lộn, đu quay dây văng, và tàu siêu tốc xuyên hầm mỏ. Thư giãn bên bờ biển xanh mát, phóng tầm mắt ngắm thành phố Nha Trang xinh đẹp. Thưởng thức màn trình diễn 3D mapping ấn tượng và sáng tạo cùng hệ thống âm thanh hiện đại với sự góp mặt của hàng trăm vũ công quốc tế, diễn ra vào 19:30', 'Bạn muốn có một tuần trăng mật lãng mạn? Bạn thích chơi các trò cảm giác mạnh? Hay đang tìm một nơi thư giãn cho cả gia đình? VinWonders Nha Trang sẽ đáp ứng mọi nhu cầu của bạn. Cầm vé VinWonders Nha Trang trên tay và bắt đầu chuyến đi bằng việc ngồi cáp treo vượt biển dài nhất thế giới, ngắm trọn nét thơ mộng của vịnh Nha Trang, một trong 29 vịnh biển đẹp nhất thế giới.\r\nĐến VinWonders Nha Trang, bạn có thể tự do lựa chọn tham gia các trò chơi cảm giác mạnh như đu quay nhào lộn, đu quay dây văng, tàu lượn siêu tốc, hoặc đường zipline dài 880 m, một trong những đường zipline dài nhất Việt Nam, hoặc các trò chơi dưới nước siêu phấn khích như máng trượt Boomerang, đường trượt Kamikaze, và hố đen vũ trụ. Sau khi thỏa sức vui đùa ở khu trò chơi VinWonders Nha Trang, hãy thả mình dưới làn nước mát lạnh bên bờ biển, lắng nghe tiếng sóng vỗ rì rào rồi phóng tầm mắt ngắm thành phố Nha Trang xinh đẹp. Thiên đường là đây chứ đâu nữa!'),
(5, 'Dịch vụ tắm bùn khoáng và spa tại I-Resort', 'Nha Trang', 'Địa điểm nổi tiếng', 160000, 'I-Resort1.jpg', 'Trải nghiệm cảm giác tắm bùn khoáng trong bồn ngâm dành riêng cho bạn. Thư giãn cơ thể dưới thác khoáng. Tận hưởng một ngày tràn ngập niềm vui tại công viên nước I-Resort. Thả lỏng cơ thể khi đằm mình trong trong hồ nước khoáng', 'Đi chơi cuối tuần chẳng cần hầm hố. Đi chơi cuối tuần chẳng cần lịch trình dày đặc. Cuối tuần đôi khi chỉ là ngồi xuống, thở thật sâu, và kết nối với nội tâm của mình. \r\nTại I-Resort Spa, bạn sẽ có một trải nghiệm cực chill, cực thư giãn. Bạn sẽ được tận hưởng cảm giác thư gịãn tuyệt vời khi ngâm mình trong bùn khoáng trong bồn tắm dành riêng cho bạn. Sau đó, hãy thả lỏng mọi giác quan của bạn dưới thác khoáng nóng, trước khi xoa bóp lòng bàn chân của bạn trên đài phun nước. Đừng quên tận dụng các tiện ích khác như hồ bơi, hồ jacuzzi, và hệ thống ôn tuyền thuỷ liệu pháp để có một trải nghiệm hoàn hảo nhé. Chưa hết, bạn còn được vào cửa công viên nước nơi có những máng trượt cực kỳ vui nhộn, hồ bơi khoáng nóng, và hồ jacuzzi để bạn đắm mình thư giãn nữa đấy!'),
(6, 'Tắm Bùn Khoáng Hòn Tằm', 'Nha Trang', 'Địa điểm nổi tiếng', 400000, 'Tắm Bùn Khoáng Hòn Tằm1.jpg', 'Ngỡ ngàng trước cảnh quan tuyệt đẹp của Hòn Tằm. Nuông chiều bản thân với các dịch vụ tiện lợi tàu cao tốc khứ hồi, đồ uống chào mừng, bữa trưa tự chọn và tất cả các loại tiện ích để biến một ngày ở bãi biển trở nên hoàn hảo. Vui chơi thỏa thích tại Công viên nổi, chèo thuyền kayak, thuyền thúng, vv . Nạp năng lượng với bữa trưa buffet hảo hạng', 'Tự thưởng cho mình một ngày thư giãn tại MerPerle Hòn Tằm Resort! Cảm thấy được nuông chiều khi bạn tận hưởng dịch vụ tàu cao tốc khứ hồi, đồ uống chào mừng và tất cả các loại tiện ích để biến một ngày đi biển trở nên hoàn hảo. Bạn sẽ có một chuyến đi thú vị trên thuyền thúng hoặc thuyền kayak, thư giãn trên một chiếc phao đầy màu sắc và nhiều hơn thế nữa. \r\nVà đừng quên nạp năng lượng cho bản thân bằng bữa trưa buffet thịnh soạn và chờ đón màn trình diễn khiêu vũ sôi động. Hãy tận hưởng một ngày tuyệt vời cùng bạn bè và gia đình tại MerPerle Hon Tam Resort!'),
(7, 'ZooDoo', 'Đà Lạt', 'Thiên đường thiên nhiên', 130000, 'ZooDoo1.jpg', 'Khám phá một sở thú kiêm cà phê độc đáo tại Đà Lạt nơi bạn có thể làm bạn và tự tay cho các bé động vật đáng yêu ăn. Thoả thích vui chơi trong môi trường sống tự nhiên rộng đến 16 ha của các loài động vật như thỏ, lạc đà cừu, ngựa non, gấu mèo, và cừu đầu đen. Tận hưởng những giây phút bình yên và thư giãn với một tách cà phê nóng tại sở thú kiểu Úc này. Khách vui lòng đeo khẩu trang mọi lúc mọi nơi khi tham quan tại ZooDoo. Vào cửa nhanh hơn bằng cánh xuất trình phiếu thanh toán điện tử tại quầy dành riêng cho khách hàng Traveloka', 'Nằm trong khu rừng xanh rờn của núi Lạc Dương, vườn thú ZooDoo rộng 16 ha này tạo nên một không gian nơi nơi con người và động vật có thể tự do tương tác với nhau trong thiên nhiên độc đáo của Đà Lạt với cây thông, hoa, và không khí trong lành.\r\nTheo chân của người quản lí sở thú ZooDoo Đà Lạt thân thiện, bạn sẽ khám phá môi trường sống tự nhiên của các loài hữu nhũ đến từ khắp nơi trên thế giới, từ thỏ, lạc đà cừu, ngựa non, gấu mèo, cừu đầu đen và nhiều loài động vật thân thiện khác. Tại ZooDoo Đà Lạt, bạn thậm chí còn được cho chúng ăn bằng tay nữa đấy, cho nên đừng ngần ngại kết bạn mới nhé. Sau khi vui chơi thoả thích, bạn có thể thư giãn với một tách cà phê nóng trong khu cảnh yên bình của khuôn viên. '),
(8, 'Vườn Ánh Sáng - Lumiere', 'Đà Lạt', 'Công viên giải trí', 135000, 'Lumiere1.jpg', 'Trải nghiệm các phòng giải trí tương tác, bao gồm phòng Thiên hà vô tận, Thực tế ảo, Không gian nhiệm màu và đặc biệt phòng Mê cung ánh sáng. Tận hưởng không gian được thiết kế trong nhà với ánh sáng tuyệt đẹp dẫu nắng hay mưa. Chụp những bức ảnh sống áo đầy nghệ thuật!. Bước qua 10 phòng với 10 chủ đề riêng biệt, đem bạn đến những \"thế giới thu nhỏ\" khác nhau', 'Trải nghiệm nghệ thuật ánh sáng ứng dụng kỹ thuật cao đầu tiên tại Việt Nam và khám phá địa điểm sống ảo mới tinh của Đà Lạt tại Vườn ánh sáng Lumiere! \r\nVới các phòng giải trí tương tác đa dạng, bước qua những chủ đề khác nhau, bao gồm phòng Đền Mặt Trang, Tổ kén, Khu vô cực và nhiều hơn thế nữa, bạn sẽ lạc vào những thế giới thu nhỏ đầy thú vị và màu sắc, tận hưởng một không gian mở nhưng vẫn rất gần gũi, và quan trọng nhất là chụp được những bức ảnh chân dung đầy nghệ thuật. '),
(9, 'Vinpearl Safari', 'Phú Quốc', 'Thiên Đường Thiên Nhiên', 194000, 'Vinpearl Safari1.jpg', 'Khám phá một trong những công viên động vật hoang dã lớn nhất Việt Nam theo chuẩn mô hình safari thế giới. Cùng lên xe buýt để trải nghiệm cảm giác quan sát các chú động vật hoang dã từ cự ly gần. Đừng bỏ quan dịch vụ chụp ảnh miễn phí cùng các chú vẹt Rio dễ thương đến từ Nam Mỹ nhé!. Thưởng thức màn trình diễn động vật', 'Công viên Vinpearl Safari Phú Quốc được coi là ngôi nhà chung của hàng nghìn cá thể. Trong đó, có rất nhiều các loài động vật quý hiếm trên khắp thế giới như: linh dương sừng kiếm Ả Rập, hạc, thiên nga trắng cổ đen… Động vật ở đây cùng chung sống hạnh phúc, được nuôi dưỡng trong điều kiện tốt nhất theo tiêu chuẩn quốc tế.\r\nVinpearl Safari Phú Quốc là vườn thú đầu tiên tại Việt Nam nhận được chứng chỉ của Hiệp hội SEAZA trong công tác bảo tồn và cải thiện phúc trạng động vật. Vườn thú được cộng đồng quốc tế ghi nhận hội tụ đầy đủ các điều kiện tự nhiên, cơ sở vật chất, điều kiện môi trường sống… để các loài thú hoang dã có thể bảo tồn và sinh sản nhằm nhân giống, tạo đàn.'),
(10, 'Múa rối nước tại nhà hát Rồng Vàng', 'TP Hồ Chí Minh', 'Chương trình biểu diễn', 349398, 'Múa rối nước tại nhà hát Rồng Vàng1.jpg', 'Thưởng thức một loại hình biểu diễn nghệ thuật truyền thống với chương trình múa rối nước. Nghe những câu chuyện thú vị và kịch tích qua âm nhạc và lời dẫn chuyện của các nghệ sĩ múa rối. Tìm hiểu thêm về đời sống tinh thần của người Việt Nam. Nhận thấy giá trị cống hiến bảo tồn văn hóa múa rối tại Việt Nam', 'Bạn sẽ có cơ hội thưởng thức nghệ thuật múa rối nước hấp dẫn, gắn bó với đời sống tinh thần của người Việt Nam, đặc biệt là ở các vùng quê. Sân khấu được chọn cho loại hình nghệ thuật này là một hồ nước. Các nghệ sĩ múa rối sẽ thể hiện kỹ năng khéo léo của mình trong việc điều khiển các con rối bằng các thanh tre dài và cơ cấu dây dưới bề mặt. Dàn nhạc truyền thống Việt Nam là một dàn nhạc đệm xuất sắc dẫn khách đi qua những câu chuyện thu hút, kịch tính. \r\nCác con rối mô tả câu chuyện từ các bài hát trong chương trình, phản ánh cuộc sống yên bình của vùng quê Việt Nam, vì vậy đây là một hoạt động lý tưởng cho gia đình có các trẻ nhỏ. '),
(11, 'Show múa rối nước Thăng Long', 'Hà Nội', 'Chương trình biểu diễn', 135000, 'show múa rối nước Thăng Long1.png', 'Thưởng thức một trong những loại hình nghệ thuật lâu đời được hình thành trên đồng bằng sông Hồng. Hiểu hơn về đời sống văn hóa của người nông dân Bắc Bộ qua các tiết mục múa rối nước. Tiện lợi với loại vé giao ngay đến khách sạn ở Hà Nội. Vào cửa dễ dàng mà không phải xếp hàng', 'Đến với múa rối nước Thăng Long, bạn sẽ có cơ hội hiểu hơn về một trong những loại hình nghệ thuật lâu đời được hình thành trên đồng bằng sông Hồng cách đây hơn 1.000 năm. Đảm bảo bạn sẽ không thể rời mắt khi xem những vở múa rối tái hiện lại những câu chuyện cổ tích và các sinh hoạt đời thường của người nông dân Bắc Bộ ngày xưa.\r\nNgoài ra, vé này còn mang lại các tiện ích khác cho bạn như không cần phải xếp hàng và giao vé đến ngay khách sạn bạn ở tại Hà Nội luôn đấy. Thật tuyệt phải không nào?'),
(44, '4455', '44', '44', 44, 'AsiaPark2.jpg', '44', '44'),
(1111, '6666', '99911', ' 99911', 99911, 'AsiaPark1.png', '99911', '99911');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongtien`
--

CREATE TABLE `phuongtien` (
  `id` int(11) NOT NULL,
  `phuongtien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongtien`
--

INSERT INTO `phuongtien` (`id`, `phuongtien`) VALUES
(1, 'Máy bay'),
(2, 'Tàu hỏa'),
(3, 'Xe khách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `id_tinh` int(11) NOT NULL,
  `tinhthanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhthanh`
--

INSERT INTO `tinhthanh` (`id_tinh`, `tinhthanh`) VALUES
(1, 'Hà Nội'),
(2, 'Hồ Chí Minh'),
(3, 'Hà Giang'),
(4, 'Cao Bằng'),
(5, 'Lai Châu'),
(6, 'Lào Cai'),
(7, 'Tuyên Quang'),
(8, 'Lạng Sơn'),
(9, 'Bắc Kạn'),
(10, 'Thái Nguyên'),
(11, 'Yên Bái'),
(12, 'Sơn La'),
(13, 'Phú Thọ'),
(14, 'Vĩnh Phúc'),
(15, 'Quảng Ninh'),
(16, 'Bắc Giang'),
(17, 'Bắc Ninh'),
(18, 'Hải Dương'),
(19, 'Hải Phòng'),
(20, 'Hưng Yên'),
(21, 'Nam Định'),
(22, 'Ninh Bình'),
(23, 'Thanh Hóa'),
(24, 'Nghệ An'),
(25, 'Hà Tĩnh'),
(26, 'Quảng Bình'),
(27, 'Quảng Trị'),
(28, 'Thừa Thiên-Huế'),
(29, 'Đà Nẵng'),
(30, 'Quảng Nam'),
(31, 'Quảng Ngãi'),
(32, 'Bình Định'),
(33, 'Phú Yên'),
(34, 'Khánh Hòa'),
(35, 'Ninh Thuận'),
(36, 'Bình Thuận'),
(37, 'Kon Tum'),
(38, 'Gia Lai'),
(39, 'Đắk Lắk'),
(40, 'Đắk Nông'),
(41, 'Lâm Đồng'),
(42, 'Bình Phước'),
(43, 'Bình Dương'),
(44, 'Đồng Nai'),
(45, 'Tây Ninh'),
(46, 'Bà Rịa-Vũng Tàu'),
(47, 'Long An'),
(48, 'Tiền Giang'),
(49, 'Bến Tre'),
(50, 'Trà Vinh'),
(51, 'Vĩnh Long'),
(52, 'Đồng Tháp'),
(53, 'An Giang'),
(54, 'Kiên Giang'),
(55, 'Cần Thơ'),
(56, 'Hậu Giang'),
(57, 'Sóc Trăng'),
(58, 'Bạc Liêu'),
(59, 'Cà Mau');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourdulich`
--

CREATE TABLE `tourdulich` (
  `id` int(11) NOT NULL,
  `diadiem` varchar(255) NOT NULL,
  `tinhthanh` varchar(255) NOT NULL,
  `theloai` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL,
  `thoigian` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `dacdiem` text NOT NULL,
  `gioithieu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tourdulich`
--

INSERT INTO `tourdulich` (`id`, `diadiem`, `tinhthanh`, `theloai`, `giatien`, `thoigian`, `anh`, `dacdiem`, `gioithieu`) VALUES
(1, 'Tour 4 đảo Nam Phú Quốc', 'Phú Quốc', 'Tour biển', 645000, '8h30p', 'Tour 4 đảo Nam Phú Quốc1.jpg', 'Tận hưởng vẻ đẹp của biển xanh và cát trắng tại Phú Quốc. Khám phá Hòn Móng Tay, Hòm Gầm Ghì, Hòn Mây Rút, và Hòn Thơm. Thư giãn trên bãi biển cát mịn và lặn ống thở khám phá thế giới dưới nước đầy màu sắc. Trải nghiệm bữa trưa hải sản ngon tuyệt và video clip quay bằng flycam cùng ảnh chụp miễn phí khi đi tour', 'Với cát trắng nguyên sơ và nước màu ngọc lam, khung cảnh của Phú Quốc thực sự là một bữa tiệc cho các giác quan. Bạn sẽ đến với thiên đường Hòn Móng Tay để phơi nắng trên bãi biển xinh đẹp dưới bóng mát của hàng trăm cây cọ. Sau đó, bạn sẽ được khám phá thế giới dưới nước đầy màu sắc khi lặn tại Hòm Gầm Ghì. Sau bữa trưa ngon miệng được chuẩn bị bởi thuỷ thủ đoàn, bạn sẽ được cảm nhận bãi biển cát ngọc ngút ngàn và lặn ống thở trong làn nước trong vắt tại điểm đến cuối cùng, đó chính là Hòn Mây Rút.\r\nChưa hết đâu nhé, vì hãy sẵn sàng cho hoạt động câu cá thú vị tại Hòn Thơm. Chắc chắc bạn sẽ bị mê hoặc bởi không khí biển và không gian cực \"chill\" tại Nam Phú Quốc đấy!'),
(2, 'Show Kiss The Stars', 'Phú Quốc', 'Tour thăm quan', 231000, '10h', 'Show Kiss The Stars1.jpg', 'Công nghệ trình diễn Vortex, công nghệ hàng đầu thế giới hiện nay với sự kết hợp giữa nghệ thuật, nước, âm thanh và ánh sáng . Sân khấu chính hoành tráng được Sun Group dàn dựng công phu với thiết kế tâm huyết của Marco Casamonti. Trước show diễn, đừng bở lỡ trải nghiệm ngắm nhìn đảo ngọc trên hệ thống cáp treo qua biển dài nhất thế giới Vé Sun World Phú Quốc (Hòn Thơm). Xin lưu ý, từ 2/8 - 15/8/2023: show trình diễn bắn pháo hoa sẽ diễn ra vào lúc 20:30 (áp dụng cả tuần trừ các ngày thứ Ba)', 'Buổi biểu diễn ngoài trời đầu tiên kết hợp giữa nhạc nước và nghệ thuật đa phương tiện với công nghệ quy mô chưa từng có trên toàn thế giới. Vượt xa khái niệm về trải nghiệm rạp hát truyền thống, sân khấu Kiss The Stars mang lại trải nghiệm được thăng hoa vượt qua những giới hạn hình ảnh thông thường theo cả chiều dọc và chiều ngang, sẽ khiến khán giả đắm chìm trong những hiệu ứng hình ảnh không giới hạn.\r\nĐược tổ chức trên một sân khấu hoành tráng – công trình nghệ thuật mới trên mặt nước mang tên “Cầu Hôn”, chương trình sẽ để lại những ấn tượng khó phai trong lòng mỗi du khách và sẽ là biểu tượng du lịch tiếp theo tại phía Nam của đảo Ngọc Phú Quốc.'),
(3, 'Tour 3 đảo VIP Nha Trang - Hòn Tằm', 'Nha Trang', 'Tour biển', 750000, '8h', 'Tour 3 đảo VIP Nha Trang - Hòn Tằm1.jpg', 'Tham quan Hòn Mun hoặc Vịnh San Hô (dựa vào điều kiện thời tiết), và khám phá thế giới dưới nước với vô vàn sinh vật biển và san hô đầy màu sắc. Ghé thăm làng chài nổi trên biển và thưởng thức bữa trưa hải sản thịnh soạn. Ngất ngây trước khung cảnh lãng mạn ở MerPerle Hòn Tằm Resort, một trong những resort sang trọng nhất Nha Trang. Bao gồm cả dịch vụ đón khách và trả khách, mang lại cho bạn trải nghiệm tốt nhất', 'Với tour này, bạn sẽ khám phá Hòn Mun hoặc Vịnh San Hô (dựa vào điều kiện thời tiết), làng chài nổi trên biển, và MerPerle Hòn Tằm Resort trong nửa ngày. Bạn sẽ thấy cực kỳ phấn khích khi đặt chân đến Vịnh San Hô xinh đẹp, nơi bạn sẽ được khám phá những rạn san hô nhiều màu sắc và chơi đùa với những đàn cá đang tung tăng bơi lội. Để rồi đến với làng chài nổi trên biển và thưởng thức bữa trưa hải sản thịnh soạn.\r\nTiếp theo, bạn sẽ tham quan MerPerle Hòn Tằm Resort, một trong những resort sang trọng nhất Nha Trang. Chưa hết, bạn còn có thể tham gia các trò chơi nước như chèo thuyền kayak, đá bóng, bóng chuyền bãi biển, hay đơn giản là ngắm cảnh và thư giãn. Bạn đã sẵn sàng để bắt đầu chuyến đi ngay bây giờ chưa nào?'),
(4, 'Tour thuyền 5 sao Sea Coral ngắm hoàng hôn tại Vịnh Nha Trang', 'Nha Trang', 'Tour thăm quan', 1069000, '3h30p', 'Tour thuyền 5 sao Sea Coral ngắm hoàng hôn tại Vịnh Nha Trang1.jpg', 'Du lịch với phong cách riêng và trải nghiệm tour du thuyền luxury Sea Coral. Ngắm cảnh mặt trời lặn tuyệt đẹp trên đường chân trời của vùng biển xanh ngọc Vịnh Nha Trang. Tận hưởng cuộc sống du ngoạn ngọt ngào khi ngắm hoàng hôn trên boong và thưởng thức những bữa ăn đẳng cấp thế giới được chuẩn bị kỹ lưỡng. Tự thưởng cho mình những ly cocktail và bữa ăn tối thịnh soạn và đặc biệt', 'Tận hưởng hương vị phiêu lưu, nghỉ dưỡng và luxury, tất cả được gói gọn vào trong tour du thuyền 5 sao Sea Coral tham quan vịnh Nha Trang tráng lệ trong một buổi chiều tối. \r\nĐắm mình trong ánh nắng chiều vàng ươm, đung đưa theo điệu nhạc khi thưởng thức những món ăn canepé trên sundeck, ngắm nhìn thành phố trở mình thức giấc khi màn đêm buông, và thở ra một hơi dài nhẹ nhõm vì cuối cùng thì bạn cũng đã có một kỳ nghỉ thật xứng đáng.'),
(5, 'Tour khám phá Bà Nà Hills (Cầu Vàng Đà Nẵng)', 'Đà Nẵng', 'Tour thăm quan', 722500, '9h30p', 'Tour khám phá Bà Nà Hills (Cầu Vàng Đà Nẵng)1.png', 'Tận hưởng khung cảnh tuyệt vời của đỉnh Bà Nà đứng trên cầu Vàng, một trong những chiếc cầu đẹp nhất thế giới. Ngắm nhìn vẻ đẹp hùng vĩ của núi Chúa từ buồng cáp treo. Ghé thăm làng Pháp với những khu vườn theo kiến trúc Pháp tinh tế. Vui chơi thoả thích tại công viên Fantasy Park', 'Bà Nà Hills là khu phức hợp giải trí và resort lớn nhất tại Việt Nam. Cùng nhau đi tour và xả láng cả ngày tại Bà Nà Hills ngay nào! Tận hưởng không khí mát lạnh cùng phong cảnh tuyệt vời, ăn hết mình với đủ loại ẩm thực và chơi hết sức với những lễ hội và các hoạt động giải trí đa dạng diễn ra hằng ngày, tất cả đều ngay tại đây!'),
(6, 'Tour lặn ống thở tại đảo Cù Lao Chàm - 1 ngày', 'Đà Nẵng', 'Tour thiên nhiên', 1200000, '6h30p', 'Tour lặn ống thở tại đảo Cù Lao Chàm - 1 ngày1.jpg', 'Trở thành thợ lặn cừ khôi với trải nghiệm lặn ống thở độc đáo tại Hòn Nhờn. Tận mắt ngắm nhìn san hô và các sinh vật biển tại cự ly gần nhất. Thưởng thức hải sản tươi ngon tại nhà hàng Chăm trên đảo Cù Lao Chàm. Đong đưa trên võng và tận hưởng nét bình yên khi chiều xuống tại đảo Cù Lao Chàm', 'Bạn yêu thích thế giới đại dương tuy nhiên vẫn còn e ngại khi tham gia vào các hoạt động dưới đáy biển. Đừng lo vì đã có tour lặn ống thở trên đảo Cù Lao Chàm rồi đây! Bạn sẽ có dịp trở thành thợ lặn cừ khôi với trải nghiệm lặn ống thở độc đáo tại Hòn Nhờn. Và tha hồ tận mắt ngắm nhìn san hô và các sinh vật biển ở cự ly cực gần nữa đó! Khi quay trở lại bờ, hãy dành thời gian để thưởng thức hải sản tươi ngon và đong đưa trên võng tại đảo Cù Lao Chàm nhé!'),
(7, 'Tour săn mây và đón bình minh tại Đà Lạt', 'Đà Lạt', 'Tour thiên nhiên', 435000, '8h', 'Tour săn mây và đón bình minh tại Đà Lạt1.jpg', 'Check in những địa điểm được tìm kiếm nhiều nhất tại Đà Lạt. Ghé thăm đồi chè Cầu Đất Farm và ngắm những ngọn đồi tít tắp một màu xanh. Lạc vào vẻ đẹp lấp lánh của không khí trong lành và những rặng cây xanh tươi của núi rừng Tây Nguyên. Ngắm thành phố trở mình thức giấc khi mặt trời dần lên cao và những đám mây lặng lẽ trôi dưới chân bạn', 'Chẳng gì có thể miêu tả được cảm giác bâng khuâng khi một người được chứng kiến thời khắc bình minh \"vỡ\" ra trên bầu trời đầy những vệt màu tối. Bình minh đến, làm bầu trời rực sáng lên với những tia nắng ấm áp và mời gọi mà nó mang theo.\r\nĐã đến lúc bạn tham gia tour du lịch nửa ngày này và trải nghiệm Đà Lạt ở một ánh sáng khác rồi. Chuyến tham quan sẽ đưa bạn đến những địa điểm được tìm kiếm nhiều nhất ở thành phố này. Ghé thăm một nơi cực đặc biệt mà từ đó bạn có thể thấy Đà Lạt trở mình thức dậy, thấy mặt trời mọc và những đám mây đang nhảy múa dưới chân, thăm những ngọn đồi chè trải dài tít tắp tại Cầu Đất Farm và lạc lối trong vẻ đẹp rực rỡ của bầu không khí lạnh tan và những tán cây xanh ngắt của núi rừng Tây Nguyên. '),
(8, 'Tour khám phá địa điểm mới tại Đà Lạt', 'Đà Lạt', 'Tour thiên nhiên', 550000, '8h', 'Tour khám phá địa điểm mới tại Đà Lạt1.jpg', 'Đến những khu du lịch mới toanh mà bạn chưa biết đến với tour trong ngày này. Ghé thăm những quán cà phê mới nhất với view tuyệt đỉnh và muôn vàn góc chụp ảnh hoàn hảo. Thả hồn vào những ngọn đồi chè ngút ngát tại Cầu Đất Farm. Tham quan và yên tâm rằng bạn sẽ có một trải nghiệm tuyệt vời với hướng dẫn viên chuyên nghiệp', 'Đi đến những quán cà phê bạn chưa biết đến, đặt chân đến những khu du lịch bạn chưa nghe qua, và trải nghiệm Đà Lạt mới toanh dù đây là lần đầu bạn đến vùng đất cao nguyên đáng mến này, hay là lần thứ rất nhiều rồi! \r\nĐánh thức tâm thức ngái ngủ và cùng nhau khám phá những điều mới trong cuộc sống tưởng chừng luôn cũ, bạn nhé. '),
(9, 'Tour Hoa Lư, Tràng An, và Hang Múa', 'Ninh Bình', 'Tour thăm quan', 823000, '12h', 'Tour Hoa Lư, Tràng An, và Hang Múa1.jpg', 'Tham quan Quần thể danh thắng Tràng An, di sản văn hóa và thiên nhiên thế giới do UNESCO công nhận. Tìm hiểu các di tích lịch sử của cố đô Hoa Lư. Thăm đền thờ vua Đinh Tiên Hoàng và vua Lê Đại Hành. Thưởng ngoạn quang cảnh hùng vĩ và hoang sơ từ đỉnh Hang Múa', 'Chuyến thăm đầu tiên của bạn là di tích Hoa Lư. Từng là thủ đô của Việt Nam, Hoa Lư mang theo một quá khứ huy hoàng và một cảm giác hoài niệm đầy chất thơ. Đạp xe qua Hoa Lư và tìm hiểu về các di tích lịch sử, ghé thăm đền thờ vua Đinh Tiên Hoàng và Lê Đại Hạnh, và tận hưởng sự yên tĩnh của vùng đồng quê.\r\nKhám phá Quần thể danh thắng Tràng An, di sản văn hóa và thiên nhiên thế giới do UNESCO công nhận. Ngồi trên thuyền và hãy nhìn lên và xung quanh bạn, bởi vì bạn sẽ được bao quanh với những cánh đồng lúa tuyệt đẹp, những ngọn núi đá vôi hùng vĩ và một bầu trời xanh ngắt. Kết thúc một ngày đáng nhớ với một chuyến leo bậc thang lên đỉnh Hang Múa, nơi bạn có thể có tầm nhìn 360 độ của một Tràng An hoang sơ và đẹp đến nao lòng.'),
(10, 'Tour Bái Đính và Tràng An', 'Ninh Bình', 'Tour thiên nhiên', 690000, '11h', 'Tour Bái Đính và Tràng An1.jpg', 'Chạy trốn Hà Nội vội vã và đến với bức tranh thiên nhiên tuyệt đẹp của Tràng An và chốn tâm linh yên bình của Bái Đính. Chiêm ngưỡng kiến trúc ấn tượng của chùa Bái Đính, quần thể Phật giáo lớn nhất Việt Nam. Tham quan Quần thể danh thắng Tràng An, di sản văn hóa và thiên nhiên thế giới do UNESCO công nhận. Dành cho bản thân mình một chút yên tĩnh khi thuyền đưa bạn qua sông để đến những cảnh quan tuyệt vời', 'Được người dân Việt Nam thân thương gọi là \"Hạ Long trên cạn,\" Ninh Bình có thể được gọi là người em gái hiền lành nhưng không kém phần quyến rũ của người chị là vịnh Hạ Long. Nổi tiếng với rừng quốc gia, hang động, dòng sông yên bình và các di tích lịch sử, đã đến lúc Ninh Bình có được sự công nhận tương xứng với vẻ đẹp của nơi này.\r\nĐiểm dừng chân đầu tiên của bạn trong ngày là quần thể chùa Bái Đính ấn tượng trên ngọn núi cùng tên. Tại đây, ạn sẽ có thể khám phá thiết kế truyền thống của Việt Nam, được thể hiện qua kiến trúc của ngôi đền và các tác phẩm nghệ thuật từ các làng nghề thủ công địa phương được trưng bày ở khắp quần thể. \r\nKhám phá Quần thể danh thắng Tràng An, di sản văn hóa và thiên nhiên thế giới do UNESCO công nhận. Ngồi trên thuyền và hãy nhìn lên và xung quanh bạn, bởi vì bạn sẽ được bao quanh với những cánh đồng lúa tuyệt đẹp, những ngọn núi đá vôi hùng vĩ và một bầu trời xanh ngắt.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `anhhh`
--
ALTER TABLE `anhhh`
  ADD PRIMARY KEY (`id_phong`);

--
-- Chỉ mục cho bảng `chuyendi`
--
ALTER TABLE `chuyendi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chuyendi_ibfk_1` (`phuongTien`);

--
-- Chỉ mục cho bảng `datphong`
--
ALTER TABLE `datphong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phong` (`id_phong`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `diadiemdulich`
--
ALTER TABLE `diadiemdulich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`id_tinh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acc`
--
ALTER TABLE `acc`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `anhhh`
--
ALTER TABLE `anhhh`
  MODIFY `id_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `chuyendi`
--
ALTER TABLE `chuyendi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `datphong`
--
ALTER TABLE `datphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  MODIFY `id_tinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chuyendi`
--
ALTER TABLE `chuyendi`
  ADD CONSTRAINT `chuyendi_ibfk_1` FOREIGN KEY (`phuongTien`) REFERENCES `phuongtien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
