-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 02:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onlearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(300) NOT NULL,
  `course_describe` varchar(300) NOT NULL,
  `qty_lesson` int(11) NOT NULL,
  `less_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_describe`, `qty_lesson`, `less_name`) VALUES
(1, 'Đại số 10: Mệnh đề tập hợp', 'Mệnh đề tập hợp gồm 5 bài học chính và 1 bài ôn tập cuối chương.', 6, 'Bài 1: Mệnh đề\r\nBài 2: Tập hợp\r\nBài 3: Các phép toán tập hợp\r\nBài 4: Các tập hợp số\r\nBài 5: Số gần đúng Sai số\r\nBài 6: Ôn tập chương 1 Mệnh đề tập hợp'),
(2, 'Đại số 10: Hàm số bậc nhất và bậc hai', 'Hàm số bậc nhất và bậc hai gồm 3 bài học và 1 bài ôn tập cuối chương', 4, NULL),
(3, 'Đại số 10: Phương trình và hệ phương trình', 'Phương trình và hệ phương trình gồm 3 bài học chính và 1 bài ôn tập cươi chương', 4, NULL),
(4, 'Đại số 10: Bất đẳng thức và bát phương trình', 'Bất đẳng thức và bất phương trình gồm 5 bài học chính và 1 bài ôn tập cuối chương', 6, NULL),
(5, 'Đại số 10: Thống kê', 'Thống kê gồm 4 bài học chính và 1 bài ôn tập cuối chương', 5, NULL),
(6, 'Đại số 10: Cung và góc lượng giác, công thức lượng giác', 'Cung và góc lượng giác, công thức lượng giác gồm 3 bài học chính và 1 bài ôn tập cuối chương', 4, NULL),
(7, 'Hình học 10: Vec-tơ', 'Vec-tơ gòm 4 bài học chính và 1 bài ôn tập cuối chương.', 5, NULL),
(8, 'Hình học 10: Tích vô hướng của hai vect-tơ và ứng dụng', 'Tích vô hướng của hai vect-tơ và ứng dụng gồm 3 bài học chính và 1 bài ôn tập cuối chương.', 4, NULL),
(9, 'Hình học 10: Phương pháp tọa dộ trong mặt phẳng', 'Phương pháp tọa dộ trong mặt phẳng gồm 3 bài học chính và 1 bài ôn tập cuối chương.', 4, NULL),
(10, 'Vật lý 10: Động học chất điểm', 'Động học chất điểm gồm 8 bài học chính.', 8, NULL),
(11, 'Vật lý 10: Động lực học chất điểm', 'Động lực học chất điểm gồm 8 bài học chính.', 8, NULL),
(12, 'Vật lý 10: Cân bằng và chuyển động của vật rắn', 'Cân bằng và chuyển động của vật rắn gồm 6 bài học chính.', 6, NULL),
(13, 'Vật lý 10: Các định luật bảo toàn', 'Các định luật bảo toàn gồm 5 bài học chính.', 5, NULL),
(14, 'Vật lý 10: Chất khí', 'Chất khí gồm 4 bài học chính.', 4, NULL),
(15, 'Vật lý 10: Cơ sở của nhiệt động lực học', 'Cơ sở của nhiệt động lực học gồm 2 ài học chính.', 2, NULL),
(16, 'Vật lý 10: Chất rắn và chất lỏng. Sự chuyển thể', 'Chất rắn và chất lỏng. Sự chuyển thể gồm 7 bài học chính.', 7, NULL),
(17, 'Hóa học 10: Nguyên tử', 'Nguyên tử gồm 6 bài học chính.', 6, NULL),
(18, 'Hóa học 10: Bảng tuần hoàn các nguyên tố hóa học và định luật tuần hoàn', 'Bảng tuần hoàn các nguyên tố hóa học và định luật tuần hoàn gồm 5 baafi học chính.', 5, NULL),
(19, 'Hóa học 10: Liên kết hóa học', 'Liên kết hóa học gồm 5 bài học chính.', 5, NULL),
(20, 'Hóa học 10: Phản ứng lõi hóa khử', 'Phản ứng õi hóa khử gồm 4 bài học chính.', 4, NULL),
(21, 'Hóa học 10: Nhóm Halogen', 'Nhóm Halogen gồm 8 bài học chính.', 8, NULL),
(22, 'Hóa học 10: Oxi - Lưu huỳnh', 'Oxi - Lưu huỳnh gồm 7 bài học chính.', 7, NULL),
(23, 'Hóa học 10: Tốc độ phản ứng và cân bằng hóa học', 'Tốc độ phản ứng và cân bằng hóa học gồm 4 bài học chính.', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `quiz_name` varchar(300) NOT NULL,
  `quiz_uptime` datetime NOT NULL,
  `quiz_time` varchar(200) NOT NULL,
  `quiz_describe` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `quiz_name`, `quiz_uptime`, `quiz_time`, `quiz_describe`) VALUES
(2, 'Đề kiểm tra Đại số 10', '2020-08-15 18:23:43', '15 phút', NULL),
(3, 'Đề kiểm tra Đại số 10', '2020-08-15 18:26:05', '45 phút', NULL),
(4, 'Đề kiểm tra Đại số 10 ', '2020-08-15 18:35:56', '15 phút', NULL),
(5, 'Đề kiểm tra Đại số 10 ', '2020-08-15 18:23:43', '45 phút', NULL),
(6, 'Đề kiểm tra Đại số 10 ', '2020-08-15 18:37:13', '90 phút', NULL),
(7, 'Đề kiểm tra Đại số 10 ', '2020-08-15 18:38:16', '15 phút', NULL),
(8, 'Đề kiểm tra Đại số 10 ', '2020-08-15 18:38:54', '15 phút', NULL),
(9, 'Đề kiểm tra Đại số 10 ', '2020-08-15 18:39:25', '45 phút', NULL),
(10, 'Đề kiểm tra Đại số 10 ', '2020-08-15 18:39:39', '45 phút', NULL),
(11, 'Đề kiểm tra Đại số 10 ', '2020-08-15 18:23:43', '90 phút', NULL),
(12, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:40:33', '15 phút', NULL),
(13, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:41:00', '45 phút', NULL),
(14, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:41:18', '45 phút', NULL),
(15, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:41:48', '15 phút', NULL),
(16, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:42:04', '15 phút', NULL),
(17, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:42:24', '45 phút', NULL),
(18, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:42:41', '45 phút', NULL),
(19, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:43:45', '90 phút', NULL),
(20, 'Đề kiểm tra Hình học 10 ', '2020-08-15 18:44:04', '90 phút', NULL),
(21, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:44:19', '15 phút', NULL),
(22, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:45:52', '45 phút', NULL),
(23, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:46:48', '45 phút', NULL),
(25, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:48:26', '90 phút', NULL),
(26, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:49:45', '15 phút', NULL),
(27, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:50:19', '15 phút', NULL),
(28, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:51:16', '15 phút', NULL),
(29, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:52:07', '45 phút', NULL),
(30, 'Đề kiểm tra Vật lý 10 ', '2020-08-15 18:52:36', '45 phút', NULL),
(31, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 18:56:21', '15 phút', NULL),
(32, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 18:56:59', '15 phút ', NULL),
(33, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 18:57:54', '45 phút', NULL),
(34, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 19:00:00', '45 phút', NULL),
(35, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 19:00:16', '90 phút', NULL),
(38, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 19:01:35', '15 phút', NULL),
(39, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 19:01:56', '15 phút', NULL),
(41, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 19:02:43', '45 phút', NULL),
(42, 'Đề kiểm tra Hóa học 10 ', '2020-08-15 19:03:43', '45 phút', 'Đề kiểm tra Hóa học 10 45 phút');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(200) NOT NULL,
  `teacher_info` varchar(300) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `images` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_name`, `teacher_info`, `subject`, `images`) VALUES
(1, 'Nguyễn Thị Thanh Hương', 'Giáo viên tốt nghiệp bằng xuất sắc ngành Sư phạm Toán của trường Đại Học Sư phạm Hà Nội', 'Toán 10', 'images/teachers/teacher1.jpg'),
(2, 'Nguyễn Minh Hiếu', 'Giáo viên tốt nghiệp bằng xuất sắc ngành Sư phạm Vật lý của trường Đại Học Sư phạm Hà Nội', 'Vật lý 10', 'images/teachers/teacher2.jpg'),
(3, 'Đặng Văn Hùng', 'Giáo viên tốt nghiệp bằng xuất sắc ngành Sư phạm Vật lý của trường Đại Học Sư phạm Hà Nội', 'Vật lý 10', NULL),
(4, 'Vũ Anh Tú', 'Giáo viên tốt nghiệp bằng xuất sắc ngành Sư phạm Hóa học của trường Đại Học Sư phạm Hà Nội', 'Hóa học 10', NULL),
(5, 'Kiều Văn Tuấn', 'Giáo viên tốt nghiệp bằng xuất sắc ngành Sư phạm Toán của trường Đại Học Sư phạm Hà Nội', 'Toán 10', NULL),
(6, 'Vũ Thị Thu Hòa', 'Giáo viên tốt nghiệp bằng xuất sắc ngành Sư phạm Hóa học (Tiếng Anh) của trường Đại Học Sư phạm Hà Nội', 'Hóa học 10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_teacher` tinyint(1) NOT NULL,
  `is_student` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `is_admin`, `is_teacher`, `is_student`) VALUES
(1, 'admin', 'admin', 1, 1, 1),
(2, 'thuannguyen', 'thuannguyen', 1, 1, 1),
(3, 'duong_dang', '12345', 0, 0, 1),
(6, 'cuong', '123', 0, 1, 0),
(7, 'user2', '123', 0, 0, 1),
(8, 'minhhieu', '123', 0, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
