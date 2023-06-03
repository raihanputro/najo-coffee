-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2023 at 01:34 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20167371_najocoffeedb`
--
CREATE DATABASE IF NOT EXISTS `id20167371_najocoffeedb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id20167371_najocoffeedb`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_favorite`
--

CREATE TABLE `tb_favorite` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_favorite`
--

INSERT INTO `tb_favorite` (`id`, `user_id`, `id_menu`) VALUES
(3, 2, 7),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `ekspedisi` varchar(15) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `metode` varchar(100) NOT NULL,
  `bukti` text NOT NULL,
  `ongkir` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending',
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `user_id`, `nama`, `alamat`, `hp`, `ekspedisi`, `kecamatan`, `metode`, `bukti`, `ongkir`, `subtotal`, `status`, `tgl_pesan`, `batas_bayar`) VALUES
(5, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'ANTAR', 'Kemayoran', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', 'Invoice_dana1.jpg', 5000, 2900, 'Selesai', '2023-01-17 22:01:20', '2023-01-18 22:01:20'),
(6, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Kemayoran', 'GOPAY 082122848722 A/N ARYANDI SYAHPUTRA', 'aiueo2.jpg', 0, 12000, 'Selesai', '2023-01-17 22:55:13', '2023-01-18 22:55:13'),
(7, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'ANTAR', 'Kemayoran', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', '', 7000, 20000, 'Gagal', '2023-01-26 05:19:47', '2023-01-27 05:19:47'),
(8, 8, 'Dina', 'Jl. Kemuning', '08123456789', 'ANTAR', 'Menteng', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', 'Screenshot_2023-01-23-20-44-41-03_78ed797590cf9a33dfc5e341b7a9537a.jpg', 6000, 15000, 'Selesai', '2023-01-29 22:39:48', '2023-01-30 22:39:48'),
(9, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Kemayoran', 'BANK BNI 0875784169 A/N ARYANDI SYAHPUTRA', '', 0, 15000, 'Pending', '2023-01-29 22:40:54', '2023-01-30 22:40:54'),
(10, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Kemayoran', 'GOPAY 082122848722 A/N ARYANDI SYAHPUTRA', '', 0, 5000, 'Pending', '2023-01-29 22:41:37', '2023-01-30 22:41:37'),
(11, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Kemayoran', 'BANK BNI 0875784169 A/N ARYANDI SYAHPUTRA', '', 0, 15000, 'Pending', '2023-01-29 22:44:14', '2023-01-30 22:44:14'),
(12, 8, 'Dina', 'Jl. Kemuning', '08123456789', 'AMBIL DI KEDAI', 'Gambir', 'GOPAY 082122848722 A/N ARYANDI SYAHPUTRA', 'Screenshot_2023-01-31_221132.png', 8000, 5000, 'Selesai', '2023-01-30 01:24:01', '2023-01-31 01:24:01'),
(13, 10, 'Akbar', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Gambir', 'GOPAY 082122848722 A/N ARYANDI SYAHPUTRA', '', 0, 15000, 'Pending', '2023-01-30 01:24:55', '2023-01-31 01:24:55'),
(14, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'ANTAR', 'Kemayoran', 'GOPAY 082122848722 A/N ARYANDI SYAHPUTRA', '', 7000, 10000, 'Pending', '2023-01-30 18:59:43', '2023-01-31 18:59:43'),
(15, 11, 'Maulana', 'Jl. Cipedak Raya', '08111111', 'AMBIL DI KEDAI', 'Kemayoran', 'BANK BNI 0875784169 A/N ARYANDI SYAHPUTRA', 'Screenshot_2023-01-23_071431.jpg', 0, 10000, 'Selesai', '2023-01-30 23:12:09', '2023-01-31 23:12:09'),
(16, 14, 'Ahmad Albar', 'Jl. Cemara', '0823456235', 'AMBIL DI KEDAI', 'Tanah Abang', 'GOPAY 082122848722 A/N ARYANDI SYAHPUTRA', 'Screenshot_2023-01-23-19-22-05-620_com_bca.png', 0, 15000, 'Selesai', '2023-01-31 01:31:52', '2023-01-31 02:31:52'),
(17, 15, 'Test 1', 'JL. Kemuning', '1234567890', 'AMBIL DI KEDAI', 'Kemayoran', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', 's-l300.jpg', 0, 10000, 'Selesai', '2023-02-01 08:58:09', '2023-02-01 09:58:09'),
(18, 15, 'Test 1', 'JL. Kemuning', '1234567890', 'AMBIL DI KEDAI', 'Kemayoran', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', '', 0, 10000, 'Pending', '2023-02-01 08:59:26', '2023-02-01 09:59:26'),
(19, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Kemayoran', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', 's-l3001.jpg', 0, 30000, 'Selesai', '2023-02-02 09:13:10', '2023-02-02 10:13:10'),
(20, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Johar Baru', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', '', 0, 10000, 'Pending', '2023-02-10 17:28:23', '2023-02-10 18:28:23'),
(21, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Johar Baru', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', '', 0, 10000, 'Pending', '2023-02-10 19:26:39', '2023-02-10 20:26:39'),
(22, 18, 'Naufal', 'GDC Gardenia', '0837456432', 'AMBIL DI KEDAI', 'Kemayoran', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', '', 0, 40000, 'Pending', '2023-02-10 22:14:53', '2023-02-10 23:14:53'),
(23, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'ANTAR', 'Johar Baru', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', '', 10000, 20000, 'Gagal', '2023-02-16 12:09:17', '2023-02-16 13:09:17'),
(24, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'ANTAR', 'Johar Baru', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', '', 10000, 10000, 'Selesai', '2023-02-16 15:48:27', '2023-02-16 16:48:27'),
(25, 2, 'Aryandi ', 'Jl. Kenari', '08111111', 'AMBIL DI KEDAI', 'Johar Baru', 'DANA 082122848722 A/N ARYANDI SYAHPUTRA', 'Invoice_dana2.jpg', 0, 145000, 'Selesai', '2023-02-19 02:13:49', '2023-02-19 03:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Kopi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  `terjual` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `keterangan`, `kategori_id`, `harga`, `stok`, `gambar`, `terjual`) VALUES
(1, 'Milkshake', 'Indomie terbuat dari tepung terigu berkualitas dengan paduan rempah rempah pilihan terbaik dan diproses dengan higienis menggunakan standar internasional dan teknologi berkualitas tinggi Juga diperkaya tambahan fortifikasi mineral dan vitamin A B1 B6 B12 Niasin Asam Folat dan Mineral Zat Besi', 2, 20000, 5, 'Milkshake.jpg', 8),
(2, 'Es Teh Manis', 'Tes manis dengan es yang menyegarkan.', 2, 5000, 17, 'Teh_Manis.jpg', 5),
(3, 'Cappucino', 'Es capuccino dengan rasa kopi yang nikmat dan mantap.', 3, 15000, 74, 'Cappucino.jpg', 10),
(4, 'Good Day', 'Perpaduan kopi bubuk dengan rasa yang menyegarkan.', 3, 10000, 44, 'Good_Day.jpg', 5),
(5, 'Corn Dog', 'Perpaduan kentang dengan saus yang pedas dan keju yang lumer di mulut', 1, 15000, 65, 'Corn_Dog.jpg', 1),
(6, 'Roti Bakar Coklat', 'Roti bakar dengan isi coklat yang lumer di mulut dan mengenyangkan', 1, 10000, 19, 'bisa-buat-bekal-ngantor-ini-cara-buat-roti-panggang-cokelat-keju-NjZzlk07fz_(1).jpg', 1),
(7, 'Roti Bakar Stroberi', 'Roti bakar dengan selai stroberi yang sangat lembut dan memiliki rasa yang nikmat.', 1, 10000, 4, 'photo_(1)_(1).jpg', 2),
(8, 'Roti Bakar Coklat', 'Roti bakar dengan isi kacang yang renyah di mulut dan mengenyangkan', 1, 10000, 22, 'ROTI-BAKAR-KEJU-COKLAT-KACANG-0-9985d81a99409c5a_(1).jpg', 0),
(9, 'Roti Bakar Kornet', 'Roti bakar dengan isi kornet yang gurih di mulut dan mengenyangkan', 1, 12000, 20, '5fa214626cc28_(1).jpg', 1),
(10, 'Kopi Karamel', 'Kopi dengan paduan rasa caramel yang manis.', 3, 10000, 12, '01cf89ef-14a4-4cd0-ac89-20a64fa92539_(1).jpg', 18),
(11, 'Burger', 'Perpaduan roti yang renyah dengan daging sapi yang lembut dan sayuran yang segar.', 1, 12000, 18, 'Screenshot_2023-01-17_224502_(1).png', 0),
(12, 'Es ovaltine', 'Es ovaltine yang padu dengan crem yang manis dan rasa susu coklat yang lezat.', 2, 10000, 13, 'ovaltine_(1).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_menu`, `nama_menu`, `jumlah`, `harga`) VALUES
(1, 3, 2, 'Teh Manis', 1, 3000),
(2, 4, 3, 'Cappucino', 1, 2900),
(3, 5, 3, 'Cappucino', 1, 2900),
(4, 6, 9, 'Roti Bakar Kornet', 1, 12000),
(5, 7, 1, 'Milkshake', 1, 20000),
(6, 8, 3, 'Cappucino', 1, 15000),
(7, 9, 3, 'Cappucino', 1, 15000),
(8, 10, 2, 'Es Teh Manis', 1, 5000),
(9, 11, 3, 'Cappucino', 1, 15000),
(10, 12, 2, 'Es Teh Manis', 1, 5000),
(11, 13, 3, 'Cappucino', 1, 15000),
(12, 14, 7, 'Roti Bakar Stroberi', 1, 10000),
(13, 15, 7, 'Roti Bakar Stroberi', 1, 10000),
(14, 16, 3, 'Cappucino', 1, 15000),
(15, 17, 6, 'Roti Bakar Coklat', 1, 10000),
(16, 18, 10, 'Kopi Karamel', 1, 10000),
(17, 19, 10, 'Kopi Karamel', 1, 10000),
(18, 19, 1, 'Milkshake', 1, 20000),
(19, 20, 10, 'Kopi Karamel', 1, 10000),
(20, 21, 7, 'Roti Bakar Stroberi', 1, 10000),
(21, 22, 7, 'Roti Bakar Stroberi', 2, 10000),
(22, 22, 1, 'Milkshake', 1, 20000),
(23, 23, 10, 'Kopi Karamel', 2, 10000),
(24, 24, 7, 'Roti Bakar Stroberi', 1, 10000),
(25, 25, 3, 'Cappucino', 5, 15000),
(26, 25, 4, 'Good Day', 3, 10000),
(27, 25, 10, 'Kopi Karamel', 4, 10000);

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
UPDATE tb_menu SET stok = stok-NEW.jumlah WHERE id_menu = NEW.id_menu;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `gambar`) VALUES
(1, 'imgonline-com-ua-resize-Zf6HyWUPLjetdNu.png'),
(2, 'imgonline-com-ua-resize-AnwXHcI0N3_(1).png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `alamat`, `hp`, `kecamatan`, `role_id`, `foto`) VALUES
(1, 'admin', 'admin', '123', 'Jl. Kemuning', '08123456789', 'Menteng', 1, ''),
(2, 'Aryandi ', 'Aryandi', '123', 'Jl. Kenari', '08111111', 'Johar Baru', 2, '62_821-2284-8722_20220622_145631.jpg'),
(3, 'Budi', 'Budii', '123', 'Jl. Cipedak Raya', '12345', 'Cempaka Putih', 2, ''),
(4, 'Mawar', 'mawar123', '123', 'sdfsd', 'sfsd', 'Cempaka Putih', 2, ''),
(5, 'Joni', 'Joni24', '123', 'sfsd', 'sfsdf', 'Johar Baru', 2, ''),
(6, 'Aryandi Syahputra', 'Aryandis', '123', 'Jl. Kemuning', '08123456789', 'Menteng', 2, ''),
(8, 'Ria', 'ria', '123', 'Jl. Kemuning', '08123456789', 'Menteng', 2, ''),
(9, 'bu dina', 'budina123', '123', 'JL. Kemuning', '1234567890', 'Menteng', 2, NULL),
(10, 'Akbar ', 'Akbar552', 'Akbar552', 'Jl. Kenari', '08111111', 'Gambir', 2, NULL),
(11, 'Maulana', 'Maulana4', 'Maulana4', 'Jl. Cipedak Raya', '08111111', 'Kemayoran', 2, NULL),
(12, 'Yandi', 'Yandi', '12345', 'Jl. Kemuning', '08123456789', 'Menteng', 2, '151566859_286389822818732_879449228531622076_n.jpg'),
(13, 'test114', 'test114', '1234567890', 'Jl. Cipedak Raya', '08111111', 'Menteng', 2, '151566859_286389822818732_879449228531622076_n2.jpg'),
(14, 'Ahmad Albar', 'Albar', 'Albar123', 'Jl. Cemara', '0823456235', 'Tanah Abang', 2, '151566859_286389822818732_879449228531622076_n1.jpg'),
(18, 'Naufal', 'Falll', 'aryandiiik', 'GDC Gardenia', '0837456432', 'Menteng', 2, 'guntur.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_favorite`
--
ALTER TABLE `tb_favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_favorite`
--
ALTER TABLE `tb_favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
