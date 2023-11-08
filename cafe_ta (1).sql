-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 03:08 AM
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
-- Database: `cafe_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(25) NOT NULL,
  `id_menu` int(25) NOT NULL,
  `id_transaksi` int(25) NOT NULL,
  `jumlah_beli` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_menu`, `id_transaksi`, `jumlah_beli`) VALUES
(73, 1, 110, 2),
(79, 1, 113, 1),
(84, 1, 116, 0),
(77, 2, 112, 2),
(80, 2, 114, 3),
(82, 2, 115, 3),
(74, 3, 110, 2),
(76, 4, 112, 5),
(78, 5, 113, 2),
(81, 7, 115, 2),
(75, 8, 111, 3),
(83, 10, 116, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(25) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(50) NOT NULL,
  `category` enum('Makanan','Minuman','Snack') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `deskripsi`, `harga`, `category`, `gambar`) VALUES
(1, 'Cheese Pizza', 'Such a delicious pizza! Stuffed with 4 kind of cheeses so this pizza is a freakin\' masterpiece. Don\'t forget to send this kind of pizza to your grandma so that se loves you more, trust me', 25, 'Makanan', 'f1.png'),
(2, 'Olive Pizza', 'Thin crust pizza with special olives on it. The aromatics of the olives give you such an unforgettable experience with this pizza. Fathers may loves this pizza so that his socks aroma doesn\'t harm you', 25, 'Makanan', 'f3.png'),
(3, 'Beef Stacky Burger', 'Did you ever seen burger this \"thick\"? We stack our burger as high as your expectation! With this enormous beef patty and those tomatoes and cheese oh gosh. This one is unbeatable', 15, 'Makanan', 'f2.png'),
(4, 'Stuffed Macaroni', 'A bowl full of macaroni that can make your day brighter. Stuffed with tomatoes and sausages make this macaroni a masterpiece', 13, 'Makanan', 'f4.png'),
(5, 'French Fries', 'Yeah, potato. Nothing else, that\'s it. But you will bite your tongue if you don\'t try this oriental fries from us', 5, 'Snack', 'f5.png'),
(6, 'Deluxe Pizza', 'ALL TOPPINGS IN ONE BREAD! How come? Yeah because this is our best selling pizza and the best in this city haha', 30, 'Makanan', 'f6.png'),
(8, 'Smoky Chicken Burger', 'Those smoke hit my nose. But of course it\'s so delicious. Oh gosh this is the best chicky sandwich I ever eat', 20, 'Makanan', 'f8.png'),
(9, 'Gnocchi', 'This tiny little dough tickle my mouth. With those cheese and tomato sauce this brand new GNOCCHI is ready to break the market', 30, 'Makanan', 'f9.png'),
(10, 'Cookies and Cream Shake', 'Thick and creamy shake made of oreo, milk, and some whippy cream. This will make your day cause it\'s an adorable drinkable yummy shake!', 5, 'Minuman', 'oreo.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `isi_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_customer` int(25) NOT NULL,
  `id_menu` int(25) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jumlah_beli` int(100) NOT NULL,
  `total` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `id_menu`, `tanggal_transaksi`, `jumlah_beli`, `total`) VALUES
(110, 1, 1, '2023-10-09', 4, 80),
(111, 1, 1, '2023-10-09', 3, 60),
(112, 2, 1, '2023-10-13', 7, 115),
(113, 1, 1, '2023-10-17', 3, 35),
(114, 2, 1, '2023-10-17', 3, 75),
(115, 1, 1, '2023-10-31', 5, 125),
(116, 1, 1, '2023-11-07', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_customer` int(25) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `role` enum('customer','admin') NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_customer`, `nama_customer`, `alamat`, `role`, `email`, `password`) VALUES
(1, 'Dara', 'Blitar', 'customer', 'daradk@gmail.com', '012565fb5e3dca4e61bbfb27a8afa949'),
(2, 'sany', 'kalimantan', 'customer', 'sany@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Tiara', 'Malang', 'customer', 'tiara@gmail.com', '012565fb5e3dca4e61bbfb27a8afa949'),
(5, 'admin', 'none', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'admin', NULL, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_customer` (`id_menu`,`id_transaksi`,`jumlah_beli`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_pegawai` (`jumlah_beli`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`,`id_menu`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_customer` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
