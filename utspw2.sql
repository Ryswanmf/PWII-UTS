-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 03:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `no` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npm` varchar(20) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `angkatan` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `no`, `nama`, `npm`, `jurusan`, `prodi`, `angkatan`) VALUES
(43, 1, 'Agista', '23753002', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(44, 2, 'Allena Zandra Puspita', '237530003', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(45, 3, 'Anastasya Maharani', '237530004', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(46, 4, 'Annisa Afrilia', '237530005', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(47, 5, 'Ari Julianto', '237530006', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(48, 6, 'Atilla Akbar Tawakal', '237530007', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(49, 7, 'Ayu Tri Sary', '237530008', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(50, 8, 'Bayu Pratama', '237530009', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(51, 9, 'Bunga Firstya Luna Ananda', '237530010', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(52, 10, 'Cindy Naysilla Ismail', '237530011', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(53, 11, 'Damar Arif Ghifari', '237530012', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(54, 12, 'Diah Ayu Safitri', '237530013', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(55, 13, 'Diva Triana Murti', '237530014', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(56, 14, 'Dwi Ramadhan', '237530015', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(57, 15, 'Fasni Efwa Juniar', '237530016', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(58, 16, 'Fitri Adi Nugroho', '237530017', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(59, 17, 'Ghaitza Zahira Shofi', '237530018', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(60, 18, 'Herwan Arifal', '237530019', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(61, 19, 'Irfana Dwi Fangga', '237530020', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(62, 20, 'Kresna Abrori', '237530021', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(63, 21, 'M Zidane Andrean', '237530022', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(64, 22, 'Mawan Mahmud', '237530023', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(65, 23, 'Muhammad Arya Fadli', '237530024', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(66, 24, 'Muhammad Riswan Mufid', '237530025', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(67, 25, 'Nadhea Ameylia', '237530026', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(68, 26, 'Naufal Raihan Hanif', '237530027', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(69, 27, 'Ni Komang Yuni Setiari', '237530028', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(70, 28, 'Nyopi Wulandari', '237530029', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(71, 29, 'Putri Anggraeni Safitri', '237530030', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(72, 30, 'Rifa Nabela Putra Sp', '237530031', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(73, 31, 'Ris Larasati', '237530032', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(74, 32, 'Rizka Nabilah Azwa', '237530033', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(75, 33, 'Rizqy Agus Salim', '237530034', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(76, 34, 'Sela Wissi Yani', '237530035', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(77, 35, 'Vina Sahara', '237530036', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(78, 36, 'Wayan Juliana', '237530037', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(79, 37, 'Yoga Pratama', '237530040', 'Teknologi Informasi', 'Manajemen Informatika', '2023'),
(80, 38, 'Zakkya Nurhadi', '237530041', 'Teknologi Informasi', 'Manajemen Informatika', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
