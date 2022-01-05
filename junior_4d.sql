-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jul 2018 pada 12.47
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `junior_4d`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `no` int(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_atm` varchar(20) NOT NULL,
  `nama_rek` varchar(20) NOT NULL,
  `no_rek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no`, `nama`, `username`, `password`, `email`, `nama_atm`, `nama_rek`, `no_rek`) VALUES
(1, 'Junior Futsal', 'admin', 'admin', 'admin@gmail.com', 'BCA', 'Junior Futsal', '12231231243251');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lap_4d`
--

CREATE TABLE `lap_4d` (
  `no` int(8) NOT NULL,
  `id_lap` varchar(10) NOT NULL,
  `nama_lap` varchar(20) NOT NULL,
  `no_lap` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lap_4d`
--

INSERT INTO `lap_4d` (`no`, `id_lap`, `nama_lap`, `no_lap`, `harga`) VALUES
(1, 'LP1', '4D Futsal', 'Lapangan 1', '150000'),
(2, 'LP2', '4D Futsal', 'Lapangan 2', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lap_junior`
--

CREATE TABLE `lap_junior` (
  `no` int(8) NOT NULL,
  `id_lap` varchar(10) NOT NULL,
  `nama_lap` varchar(20) NOT NULL,
  `no_lap` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lap_junior`
--

INSERT INTO `lap_junior` (`no`, `id_lap`, `nama_lap`, `no_lap`, `harga`) VALUES
(1, 'LP1', 'Junior Futsal', 'Lapangan 1', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `no` int(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_lap`
--

CREATE TABLE `order_lap` (
  `no` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_lap` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `id_lap` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `jam_awal` varchar(15) NOT NULL,
  `jam_akhir` varchar(15) NOT NULL,
  `total_jam` varchar(2) NOT NULL,
  `rek_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_lap`
--

INSERT INTO `order_lap` (`no`, `username`, `nama_lap`, `nama`, `no_hp`, `id_lap`, `harga`, `tgl`, `jam_awal`, `jam_akhir`, `total_jam`, `rek_admin`) VALUES
(1, 'user', 'Junior Futsal', 'Farhan Azra', '083122782890', 'LP1', '100000', '2018-06-07', '08:00-09:00', '09:00-10:00', '1', 'BCA - Junior Futsal - 12231231243251'),
(2, 'user', '4D Futsal', 'Aldo', '085270141131', 'LP1', '150000', '2018-06-08', '08:00-09:00', '09:00-10:00', '1', 'BCA - Junior Futsal - 12231231243251'),
(4, 'user', 'Junior Futsal', 'Farhan Azra Hasibuan', '083122782890', 'LP1', '100000', '2018-06-09', '08:00-09:00', '10:00-11:00', '2', 'BCA - Junior Futsal - 12231231243251'),
(5, 'user2', 'Junior Futsal', 'Keren', '085270141131', 'LP1', '100000', '2018-06-13', '11:00-12:00', '13:00-14:00', '2', 'BCA - Junior Futsal - 12231231243251');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `no` int(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `nama`, `no_hp`, `username`, `password`, `email`) VALUES
(1, 'Keren', '083122782890', 'user', 'user', 'user@yahoo.com'),
(2, 'User2', '085270141131', 'user2', 'user2', 'user@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `lap_4d`
--
ALTER TABLE `lap_4d`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `lap_junior`
--
ALTER TABLE `lap_junior`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `order_lap`
--
ALTER TABLE `order_lap`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lap_4d`
--
ALTER TABLE `lap_4d`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lap_junior`
--
ALTER TABLE `lap_junior`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_lap`
--
ALTER TABLE `order_lap`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
