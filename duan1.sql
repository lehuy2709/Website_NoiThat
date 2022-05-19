-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2021 lúc 02:42 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(1, 'Ghê ngồi êm!', 1, 21, '2021-12-05'),
(2, 'ok', 14, 1, '2021-12-05'),
(3, 'ok', 20, 1, '2021-12-05'),
(4, 'ok', 19, 1, '2021-12-06'),
(5, 'ok', 16, 22, '2021-12-07'),
(6, 'trông khét đấy', 21, 22, '2021-12-07'),
(7, 'tốt', 15, 1, '2021-12-08'),
(8, 'Chắc chắn', 20, 19, '2021-12-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `don_gia` float NOT NULL,
  `anh_hh` varchar(255) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` text NOT NULL,
  `dac_biet` tinyint(1) NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `anh_hh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `luot_xem`, `ma_loai`, `giam_gia`) VALUES
(1, 'Ghế làm việc LOBERGET', 1390000, 'ghe3.jpg', '2021-11-21', 'Thiết kế phù hợp với mọi góc học tập, làm việc.\r\n\r\nGhế ngồi hết sức thoải mái vì có thể điều chỉnh chiều cao và không bị ngả hại sống lưng.\r\nCác bánh xe an toàn có một cơ chế phanh nhạy cảm áp giữ ghế ở đúng vị trí khi bạn đứng lên, và tự động phát hành khi bạn ngồi xuống.\r\n\r\nDễ vệ sinh.\r\n\r\nKích thước:\r\nChiều rộng: 67 cm\r\nChiều sâu: 67 cm\r\nTối đa chiều cao: 90 cm\r\nChiều rộng ghế: 44 cm\r\nChiều sâu ghế: 43 cm\r\nChiều cao ghế tối thiểu: 43 cm\r\nChiều cao ghế tối đa: 54 cm', 0, 6, 3, 0),
(7, 'Bộ bàn ghế Mango', 1090000, 'ban5.jpg', '2021-11-03', 'Bộ bàn ăn mango là sản phẩm thuộc dòng bàn ghế ăn cao cấp.được thiết kế theo phong cách hiện đại giúp không gian nội thất phòng bếp trở lên sang trọng hơn.Được làm 100 % từ gỗ cao su tự nhiên,được tẩm sấy chống mối mọt.\r\nBảo hành:12 tháng \r\nKT: 1200x800x750 mm', 0, 1, 2, 0),
(8, 'Bộ bàn ghế WUDNANO', 3899000, 'ban.jpg', '2021-09-20', 'Bộ bàn ăn WUDNANO được thiết kế và sản xuất theo công nghệ mới nhất 2018.Với kiểu dáng hiện đại không ngại với phong cách.\r\nChất liệu: gỗ cao su tự nhiên\r\nKT: 1m15x800x750\r\nXuất xứ: Hàng VNXK\r\nBảo hành :12 tháng', 0, 0, 2, 0),
(9, 'Bàn học SCOTT', 900000, 'banhoc.JPG', '2021-06-12', 'BÀN LÀM VIỆC ĐA NĂNG di chuyển linh hoạt, có thể nân lên hạ xuống. Bạn có thể ngồi làm việc tại giường, ghế sofa, ban công hay sân thượng - bất kỳ nơi đâu bạn muốn.\r\nBàn có thể dùng để làm việc cho người lớn, bàn học cho trẻ em (thay đổi độ cao), bàn học sinh và nhiều công năng khác. \r\n\r\n🔰 CHẤT LIỆU & KÍCH THƯỚC:\r\n\r\n✔️ Diện tích mặt bàn có 60x40cm, 80x40cm và 100x40cm. Chiều cao có thể điều chỉnh 60-80cm\r\n\r\n✔️ Chân bàn làm từ sắt 1ly có sơn tĩnh điện tăng độ bền, chống gỉ và xước tốt nhất.\r\n\r\n✔️ Mặt kệ là gỗ MDF phủ melamine chống cong vênh, hạn chế xước và thấm nước cực tốt  rất phù hợp với điều kiện thời tiết nóng ẩm ở Việt Nam\r\n\r\n✔️ Bánh xe có thể hãm khi cần cố định 1 vị trí', 0, 0, 4, 0),
(10, 'Bàn học T-table', 259000, 'ban2.jpg', '2021-07-07', '- Khung sắt sơn tĩnh điện chống xước\r\n- Mặt bàn được bo góc an toàn và khoan lỗ định vị, dễ dàng khi lắp đặt nên các bạn nữ hoàn toàn yên tâm, shop cam kết rất dễ lắp, không phải dùng khoan nhé. \r\n- Đầy đủ phụ kiện lắp đặt ốc vít\r\n\r\nKiểu dáng và chất liệu:\r\n✔️ Kích thước: - Mặt bàn dài 1,2m, rộng 55cm,cao 74cm.\r\n                         - Mặt bàn dài 1m, rộng 50cm,cao 74cm.\r\n                         - Mặt bàn dài 1m, rộng 40cm,cao 74cm.\r\n✔️ Chân bàn có thể chịu được trọng tải lớn, có miếng lót cao su không lo khi di chuyển gây trầy mặt sàn nhà.\r\n✔️ Mặt bàn được phủ 1 lớp Melamine đã qua xử lý chống cong vênh, hạn chế xước và thấm nước cực tốt  rất phù hợp với điều kiện thời tiết nóng ẩm ở Việt Nam. \r\n\r\n=>Tùy theo không gian, quý khách có thể chọn lựa màu sắc gỗ phù hợp và hài hòa với các mẫu nội thất khác', 0, 0, 4, 0),
(12, 'Bàn học Zstyle', 699000, 'ban3.jpg', '2021-03-21', 'Bàn học Zstyle trực tiếp xưởng gia công đảm bảo độ chắc chắn cũng như giá thành tận gốc \r\n– Mặt bàn gỗ công nghiệp MDF phủ Melamine.\r\n\r\n– Chân bàn được làm bằng sắt hộp sơn tĩnh điện.\r\n\r\n– Thiết kế tinh tế, hiện đại, dễ setup không gian làm việc.\r\n\r\n– Kết cấu vững chắc, đảm bảo an toàn trong suốt quá trình ngồi.\r\n\r\n– Chất liệu cao cấp, có độ bền cao.\r\n\r\n– Khung chân sắt hộp sơn tĩnh điện bền đẹp, chống gỉ, khả năng chịu lực tốt, thiết kế các đinh ốc xoắn giúp bạn có thể dễ dàng tháo rời từng bộ phận tiện lợi cho việc đóng hộp khi di chuyển.\r\n\r\n– Mặt bàn rộng có thể thoải mái để setup dàn máy tính và các đồ vật trang trí khác.', 0, 0, 4, 0),
(13, 'Đèn LED ZEOCO', 399000, 'den.JPG', '2021-10-23', ' Phong cách hình học tối giản độc đáo, thêm một kiểu trang trí tươi mới cho nơi bạn ở.\r\n Làm bằng chất liệu bền, tiện dụng.\r\n Dễ dàng lắp đặt, không có tia UV hoặc bức xạ hồng ngoại, tiêu thụ điện năng thấp, tuổi thọ cực cao lên đến 50.000 giờ.\r\n Tạo ra hiệu ứng ánh sáng lên / xuống tuyệt đẹp trên các bức tường bên ngoài, phù hợp cho gia đình, quán bar, hiên nhà, quán cà phê và trang trí trong nhà khác.\r\n Hiệu ứng ánh sáng trông rất ấm áp và thoải mái.\r\n Chất liệu: Nhôm\r\n Nguồn sáng: LED 10W\r\n Điện áp định mức: 220V\r\n Kích thước: Như hình ảnh hiển thị.', 0, 0, 5, 0),
(14, 'Đèn tường MOVA', 200000, 'den1.jpg', '2021-12-05', 'Đèn tường MOVA trang trí hành lang, cầu thang, phòng ngủ hiện đại cao cấp kèm bóng LED tiết kiệm điện bảo vệ môi trường\r\n\r\nHÀNG FULL BOX CHUẨN LOẠI 1, ĐƯỢC ĐÓNG TRONG HỘP XỐP CAO CẤP KHÁCH HÀNG CÓ THỂYÊN TÂM TRONG QUÁ TRÌNH VẬN CHUYỂN KHI Ở XA.\r\nSản phẩm được đổi mới trong 7 ngày nếu khách hàng nhận có vấn đề gì.\r\nĐÈN ĐÃ BAO GỒM BÓNG LED CAO CẤP, ĐUI ĐÈN SỬ DỤNG LÀ ĐUI PHỔ THÔNG E27 HIỆN RẤT PHỔ BIẾN TRÊN THỊ TRƯỜNG.\r\nĐÈN ĐƯỢC THIẾT KẾ TINH SẢO TỪ NHỮNG CHẤT LIỆU CAO CẤP NHƯ :THỦY TINH, VÀ KIM LOẠI SƠN TĨNH ĐIỆN\r\nĐường kính chao đèn 13cm\r\n\r\nĐƯỢC SỬ DỤNG VÀ TRANG TRÍ TRONG MỌI KHÔNG GIAN NHÀ BẠN : PHÒNG KHÁCH, CẦU THANG, HÀNH LANG VÀ ĐẶC BIỆT CÓ THỂ TRANG TRÍ LÀM ĐÈN TƯỜNG PHÒNG NGỦ.', 0, 9, 5, 0),
(15, 'Đèn ngủ SLEEPLAMP', 242000, 'den2.jpg', '2021-12-05', 'Đèn vách thiết kế đơn giản, nhỏ gọn chất liệu hợp kim mạ đồng,\r\nĐiểm nhấn của chiếc đèn, tạo nên cảm giác ấm áp cho không gian.\r\nSử dụng bóng LED chanh, mang đến ánh sáng dịu nhẹ cho căn phòng, tiết kiệm điện và không tạo cảm giác chói mắt.\r\nThiết kế này phù hợp bài trí tại cách hành lang, chân cầu thang, phòng ngủ,… những kiến trúc mang phong cách hiện đại, ấm áp.\r\nĐèn tường - đèn ngủ - đèn cầu thang cao cấp hiện đại SLEEPLAMP - TẶNG kèm bóng led  ', 0, 6, 5, 0),
(16, 'Đèn ngoài trời RC05', 349000, 'den3.jpg', '2021-08-08', 'Đèn tường trang trí RC05 là  được thiết kế theo tiêu chuẩn chống nước quốc tế giúp tăng độ bền cho đèn trước điều kiện thời tiết ngoài trời.\r\nThiết kế chiếu hắt một đầu phù hợp với nhiều không gian trang trí ngoài trời, sân vườn như hành lang, cột cửa nhà, sân vườn, ...... với ánh sáng vàng ấm áp xua tan bầu không khí lạnh lẽo bên ngoài cánh cửa.\r\n* Thông số kỹ thuật:\r\n   + Kích thước : 80x80x60mm\r\n   + Chip led: COB\r\n   + Điện áp: Ac85-265V\r\n   + Màu vỏ: đen\r\n   + Màu ánh sáng: vàng ấm\r\n   + Chống nước tiêu chuẩn IP65\r\n   + Công suất: 5w', 0, 5, 5, 0),
(17, 'Bàn gấp FAXER', 149000, 'ban4mini.jpg', '2021-12-05', 'Bàn xếp gỗ thông chân thang\r\n-Kích thước: rộng 40cm x dài 60cm x cao 28cm\r\n-Chất liệu: gỗ cao su tự nhiên đã qua sử lý chống thấm nước, chống mối mọt\r\n-Màu sắc: tự nhiên,vàng', 0, 0, 4, 0),
(18, 'Tủ Vintage', 599000, 'tu.JPG', '2021-11-13', 'Hàng bản dày hơn các shop khác nên khách iu cứ yên tâm về chất lượng. Không cong vênh, không lắc lư theo thời gian.\r\nThông tin sản phẩm: \r\n🔷Chất liệu: gỗ thông Mỹ đã qua sử lý chống mối mọt, chống thấm nước.\r\n🔷 Kích thước: Dài 97 cm x Rộng 39,5 cm x Cao 148 cm\r\n\r\nCông dụng & chế độ bảo hành:\r\n•	Dùng để treo và cất giữ quần áo trong phòng ngủ thay thế tủ đồ\r\n•	Shop thời trang treo các sản phẩm quần áo cho thanh lịch \r\n•	Phơi đồ\r\n•	Cam kết đổi trả sản phẩm lỗi Miễn phí ( 7 ngày từ khi nhận hàng ) & bảo hành 1 năm chất lượng sản phẩm.', 0, 3, 6, 0),
(19, 'Kệ giày dép PINEWUD', 149000, 'gia5.jpg', '2021-11-11', '   Kích thước : 83cm x 24cm x 60cm (dài x rộng x cao)\r\n    Chất liệu : Gỗ công nghiệp với màu sắc tự nhiên bắt mắt\r\n    Màu sắc tự nhiên, bền màu với thời gian, luôn như mới với lớp phủ kháng nước chất lượng cao.\r\n    Bộ dụng cụ đầy đủ được cung cấp sẵn, dễ dàng lắp đặt.\r\n    Số lượng giầy dép có thể để tối đa 6 đôi.', 0, 7, 6, 0),
(20, 'Kệ hoa PUV', 99000, 'ke4.jpg', '2021-10-12', '  -Thông tin sản phẩm :\r\n           * Kích thước gồm 2 size 45x25x16 (DxCxR) và 45x35x16 (DxCxR)    \r\n           * Chất liệu gỗ thông tự nhiên nhập khẩu.\r\n           * Bề mặt được xử lý mịn, để mộc hoặc sơn màu.\r\n           * Hàng được gia công tại Việt Nam từ những thợ có tay  nghề cao nên quý khách yên tâm về chất lượng cũng như độ chi tiết của sản phẩm.\r\n    \r\n    - Công dụng :\r\n           * Sản phẩm được làm rất cẩn thận chi tiết nên phù hợp để trang trí phòng khách, phòng ngủ, decor góc làm việc. \r\n          *Làm kệ đặt bình hoa, để đồ vật trang trí đầy tinh tế.\r\n          * Với chất liệu gỗ thông mang đến cảm giác tự nhiên, nhẹ nhàng cho căn phòng của bạn.', 0, 28, 6, 0),
(21, 'Kệ sách tổ ong IGA', 599000, 'tgk2.jpg', '2021-12-05', '☑️ THÔNG TIN SẢN PHẨM\r\n\r\n- Kích thước: 2 Tầng (30x24x60) 3 Tầng (30x24x90) 4 Tầng (30x24x120)\r\n- Chất liệu: Sản phẩm sản xuât từ gỗ MDF phủ melamin cao cấp chống xước chống nước bề mặt sáng bóng.\r\n- Màu sắc: Nhựa Cao cấp\r\n- Có thể làm giá sách tại phòng đọc, phòng học, phòng làm việc, văn phòng làm việc. Làm kệ để đồ, kệ trưng sản phẩm, kệ trang trí tại cửa hàng...\r\n- Phong cách: Hiện đại\r\n- Bảo hành 12 tháng, đổi trả miễn phí nếu nhận hàng không giống mô tả.', 0, 7, 6, 0),
(27, 'Ghế EAMES', 239000, 'ghe.JPG', '2021-12-12', 'Ghế Eames nổi tiếng thế giới đang được các bạn trẻ Việt Nam săn lùng nhiều nhất hiện nay.\r\nGhế Eames được thiết kế bởi Charles & Ray Eames với chân bằng gỗ, khung thép chắc chắn, phần ghế ngồi được làm từ nhựa PP nguyên sinh dẻo dai bền với thời gian.\r\nGhế có nhiều màu sắc cho các bạn lựa chọn phù hợp với gam màu nhà mình', 0, 0, 3, 0),
(28, 'Ghế xoay ISTAR', 2499000, 'ghe4.png', '2021-12-12', 'Ghế xoay văn phòng ghế làm việc\r\n- Hình thức ưa nhìn, đẹp mắt và độc đáo bởi thiết kế thêm gôi tựa đầu \r\n- Thiết kế đường nét tinh tế theo đúng tư thế ngồi, tạo cảm giác thoải mái nhất khi ngồi làm việc\r\n- Chống ê mỏi cổ, lưng, hạn chế các bênh về xương khớp\r\n- Dễ dàng thay đổi chiều cao ghế, thay đổi chiều cao, góc nghiêng gối tựa đầu\r\n- Cấu tạo chắc khỏe, chịu được tải trọng lên tới 250kg.\r\n- Phù hợp vơi những người thường xuyên ngồi liên tục hàng giờ', 0, 1, 3, 0),
(29, 'Ghê IKEA', 2499000, 'gheIKEA.jpg', '2021-12-12', 'Ghế siêu đẹp có 2 size người lớn và trẻ nhỏ:\r\nGhế ngồi hết sức thoải mái vì có thể điều chỉnh chiều cao và không bị ngả hại sống lưng.\r\nCác bánh xe an toàn có một cơ chế phanh nhạy cảm áp giữ ghế ở đúng vị trí khi bạn đứng lên, và tự động phát hành khi bạn ngồi xuống. ', 0, 0, 3, 0),
(30, 'Bộ bàn ghế CFDecor', 4999000, 'bancafe.jpg', '2021-02-21', 'Bộ bàn ghế decor quán cafe sang trọng\r\n*Ghế da thiết kế độc đáo mới lạ\r\nMàu sắc: gồm 6 màu pastel sang trọng, phù hợp với nhà hàng, quán cafe, quầy bar...\r\nKiểu dáng: Thiết kế giúp ôm trọn cơ thể người ngồi với phần tựa lưng thoải mái, phù hợp với vóc dáng người Việt \r\n                  Nam\r\n                  Chân ghế chắc chắn với lớp sơn tĩnh điện cao cấp, không bong tróc \r\nChất liệu: Da PU cao cấp, mịn lì, dễ dàng vệ sinh', 0, 4, 2, 0),
(31, 'Bộ bàn ghế Xury', 4990000, 'banghehaohan.jpg', '2021-02-01', 'Bộ bàn ghế decor sang trọng, cao cấp\r\n*Ghế da cao cấp\r\nMàu sắc: gồm các màu sắc nhẹ nhàng, tinh tế nhưng không kém phần sang trọng và nổi bật\r\nKiểu dáng: Thiết kế độc đáo, mới lạ lấy cảm hứng từ hình dáng viên kim cương cao cấp tạo điểm nhấn vô cùng mới mẻ và sang trọng cho căn phòng\r\n                 Chân ghế chắc chắn với lớp sơn tĩnh điện màu vàng kim cao cấp, sáng bóng không bong tróc, chắc chắn, không bị trơn trượt\r\n                  Đệm ghế cao cấp, êm ái được thiết kế với những ô hình chữ nhật độc đáo giống như các nếp gấp giấy của Nhật vô cùng cao cấp\r\nChất liệu: Da lộn cao cấp, mịn lì, dễ dàng vệ sinh', 0, 5, 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `ngay_tao` date NOT NULL,
  `thanh_tien` float NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `ma_kh`, `ho_ten`, `ngay_tao`, `thanh_tien`, `trang_thai`, `dia_chi`, `email`) VALUES
(28, 1, 'Huy Admin', '2021-12-06', 99000, 1, 'Thanh Hóa', 'huylvph14795@fpt.edu.vn'),
(29, 22, 'Test', '2021-12-06', 998000, 1, 'ok', 'test2@gmail.com'),
(30, 22, 'Test', '2021-12-06', 699000, 1, '112', 'test2@gmail.com'),
(31, 1, 'Huy Admin', '2021-12-06', 745000, 1, 'Nhà anh', 'huylvph14795@fpt.edu.vn'),
(32, 1, 'Huy Admin', '2021-12-06', 448000, 0, 'Thanh Hóa No 1', 'huylvph14795@fpt.edu.vn'),
(33, 1, 'Huy Admin', '2021-12-06', 399000, 0, 'Nhà Quảng thèo', 'huylvph14795@fpt.edu.vn'),
(36, 22, 'Test', '2021-12-08', 99000, 0, 'Quảng Phú', 'test2@gmail.com'),
(37, 1, 'Huy Admin', '2021-12-08', 3334000, 0, 'Thanh Hóa', 'huylvph14795@fpt.edu.vn'),
(39, 23, 'Hảo caklord', '2021-12-18', 4999000, 1, 'nhà thằng toản', 'cheemwiththegun@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `id` int(11) NOT NULL,
  `ma_hd` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` float NOT NULL,
  `ten_hh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`id`, `ma_hd`, `ma_hh`, `so_luong`, `don_gia`, `ten_hh`) VALUES
(17, 28, 20, 1, 99000, 'Kệ hoa PUV'),
(18, 29, 13, 1, 399000, 'Đèn LED ZEOCO'),
(19, 29, 18, 1, 599000, 'Tủ Vintage'),
(20, 30, 12, 1, 699000, 'Bàn học Zstyle'),
(21, 31, 19, 5, 149000, 'Kệ giày dép PINEWUD'),
(22, 32, 16, 1, 349000, 'Đèn ngoài trời RC05'),
(23, 32, 20, 1, 99000, 'Kệ hoa PUV'),
(24, 33, 13, 1, 399000, 'Đèn LED ZEOCO'),
(27, 36, 20, 1, 99000, 'Kệ hoa PUV'),
(28, 37, 7, 1, 1090000, 'Bộ bàn ghế Mango'),
(29, 37, 19, 3, 149000, 'Kệ giày dép PINEWUD'),
(30, 37, 18, 3, 599000, 'Tủ Vintage'),
(32, 39, 30, 1, 4999000, 'Bộ bàn ghế CFDecor');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ten_tk` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `kich_hoat` tinyint(1) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_tk`, `mat_khau`, `ho_ten`, `email`, `avatar`, `kich_hoat`, `vai_tro`) VALUES
(1, 'lehuy2709', '123456', 'Huy Admin', 'huylvph14795@fpt.edu.vn', 'user.png', 0, 1),
(13, 'quangld12', '123456', 'Lê Duy Quang', 'quehong70@gmail.com', 'user.png', 0, 0),
(19, 'ldquang18', 'ldquang18', 'Quang Admin', 'ldquang18@gmail.com', 'user.png', 0, 1),
(20, 'toanpq', '123456', 'Toản Admin', 'toanpq@gmail.com', 'user.png', 0, 1),
(21, 'August18th', 'ldquang18', 'Duy Quang', 'august18th2002@gmail.com', 'user.png', 0, 0),
(22, 'user', '123456', 'Test', 'test2@gmail.com', 'user.png', 0, 0),
(23, 'duyquang', '123456', 'Hảo caklord', 'cheemwiththegun@gmail.com', 'user.png', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(2, 'Bộ bàn ghế'),
(3, 'Ghế làm việc'),
(4, 'Bàn học'),
(5, 'Đèn trang trí'),
(6, 'Tủ, giá, kệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `ma_slide` int(11) NOT NULL,
  `anh_slide` varchar(255) NOT NULL,
  `duong_dan` varchar(255) NOT NULL,
  `ten_slide` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`ma_slide`, `anh_slide`, `duong_dan`, `ten_slide`) VALUES
(5, 'banner3.jpg', '#', 'banner2'),
(6, 'banner4.jpg', '#', 'banner4'),
(7, 'banner5.jpg', '#', 'banner5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `web_settings`
--

INSERT INTO `web_settings` (`id`, `logo`, `sdt`, `dia_chi`) VALUES
(1, 'HQT Furniture (2).png', 931391358, 'Số 18, đường Hoàng Quốc việt, phường Nghĩa Đô, quận Cầu Giấy, Hà Nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_hd` (`ma_hd`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`ma_slide`);

--
-- Chỉ mục cho bảng `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `ma_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
