-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 26, 2024 lúc 04:25 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `major`
--

CREATE TABLE `major` (
  `id` varchar(5) NOT NULL,
  `name_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `major`
--

INSERT INTO `major` (`id`, `name_id`) VALUES
('TN001', 'Hệ thống thông tin'),
('TN002', 'Công nghệ thông tin'),
('TN003', 'Khoa học máy tính'),
('TN005', 'Kỹ thuật phần mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(6) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `major_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `fullname`, `email`, `Birthday`, `reg_date`, `major_id`) VALUES
(1, 'Nguyen Van A', 'a1@ctu.edu.vn', '2002-02-08', '2024-01-26 12:55:31', 'TN001'),
(2, 'Tran Thi B', 'a2@ctu.edu.vn', '2002-02-08', '2024-01-26 12:53:40', 'TN001'),
(3, 'huyen', 'huyen@student', '0000-00-00', '2024-01-26 12:53:40', 'TN002'),
(4, 'huyen', 'huyenb2110013@student.ctu.edu.vn', '0000-00-00', '2024-01-26 12:55:31', 'TN003'),
(5, 'huyen', 'huyenb2110013@student.ctu.edu.vn', '2024-01-21', '2024-01-26 12:55:31', 'TN003'),
(6, 'huyen123', 'huyen.com', '2024-01-21', '2024-01-26 12:55:31', 'TN005'),
(7, 'vohuyen', 'vohuyen@.student', '2024-01-21', '2024-01-26 12:55:31', 'TN005'),
(10, 'huyen', 'huyenb2110013@student.ctu.edu.vn', '2003-01-22', '2024-01-26 12:55:31', 'TN002'),
(11, 'Võ Ngọc Huyền', 'huyenb2110013@student.edu.vn', '2024-01-21', '2024-01-26 12:55:31', 'TN001');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `major_id` (`major_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `major` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
