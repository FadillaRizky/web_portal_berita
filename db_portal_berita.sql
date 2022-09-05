-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2022 at 03:14 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portal_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `kategori`, `isi`, `gambar`) VALUES
(45, 'Festival Agustus Merdeka Meriah, Bupati Wonogiri Foto Bareng Penonton   ', '2022-08-04', 'Sport', 'Memasuki hari keempat, Festival Agustus Merdeka yang digelar terpusat di Alun-alun Giri Krida Bakti, Kabupaten Wonogiri, makin meriah.\r\nDalam gegap gempita penonton yang memadati alun-alun, Kamis (4/8/2022) malam, Bupati Wonogiri, Joko Sutopo, hadir di tengah-tengah kerumunan penonton.\r\nPromosiBorong Penghargaan, Tokopedia Jadi Marketplace Favorit UMKM\r\nSesekali, ia berada di tengah-tengah area yang dipadati penonton. Lalu berpindah ke sisi timur, utara mendekati panggung, dan ke barat.\r\nBupati yang akrab disapa Jekek itu juga tampak menikmati lagu-lagu yang disajikan penampil di atas panggung festival. Terlihat dari tepukan tangan hingga kadang menggerakkan badannya mengikuti alunan musik yang ada.\r\n\r\nMulanya, kehadiran Bupati Wonogiri di tengah kerumunan penonton itu diketahui saat Orkes Musik Pengin Nge-band Saksake (OM PNS) mendapat giliran tampil di panggung Alun-alun Giri Krida Bakti.\r\n\r\nMereka menginformasikan dan mengapresiasi kehadiran Bupati Wonogiri di tengah kerumunan penonton. Lantas, hal itu menyedot perhatian penonton.\r\n\r\nDikonfirmasi di sela-sela berlangsungnya Festival Agustus Merdeka hari keempat, Jekek, panggilan akrab Bupati, mengatakan kehadirannya di tengah-tengah masyarakat yang menonton bermaksud ingin menyapa penonton.\r\n\r\n“Kita hadir sebagai bagian dari masyarakat, menyapa, merangkul, dan mengimbau masyarakat untuk sekaligus menjaga keamanan dan ketertiban. Karena ini dalam rangka festival Agustus, kami berkomitmen menjaga keamanan dalam menyambut HUT [Hari Ulang Tahun] ke-77 Kemerdekaan Indonesia,”  tuturnya kepada wartawan, Kamis malam.\r\nIa juga mengakui antusiasme masyarakat yang menonton Festival Agustus Merdeka hari keempat malam itu luar biasa.\r\nPantauan Solopos.com, tingkat keramaian masyarakat di alun-alun pada hari itu memang lebih tinggi dari hari-hari sebelumnya.\r\nBahkan, jumlah penontonnya lebih banyak dari konser musik deklarasi Classic Rock of Wonogiri (Crown), Minggu (31/7/2022) lalu.\r\n“Cukup banyak antusiasnya. Tadi sampai ada yang minta selfie-selfie [foto bareng] juga saya layani. Tidak apa-apa, tidak masalah,” katanya.\r\nFestival Agustus Merdeka pada Kamis malam tersebut menampilkan beragam grup musik lintas genre.', '1659664682.png'),
(46, 'Prakiraan Cuaca Wonogiri Hari Jumat Ini: Cerah Berawan sejak Pagi ', '2022-08-05', 'Politik', 'Cuaca di Kabupaten Wonogiri diperkirakan berlangsung cerah berawan sejak, Jumat (5/8/2022) pagi. Cuaca di Wonogiri diperkirakan mengalami berawan saat malam hari.\r\nPromosiBorong Penghargaan, Tokopedia Jadi Marketplace Favorit UMKM\r\nMulai pukul 04.00 WIB, cuaca berlangsung berawan dengan suhu 22 derajat celsius dan kecepatan angin 10 km/jam. Sedangkan kelembapan mencapai 95 persen.\r\nPukul 07.00 WIB, cuaca di Wonogiri cerah berawan dengan suhu 26 derajat celsius. Kecepatan angin 20 km/jam dan kelembapan 80 persen.\r\nPukul 10.00 WIB, cuaca diperkirakan cerah berawan dengan suhu 30 derajat celsius. Kecepatan angin 20 km/jam dan kelembapan 65 persen.\r\nMemasuki pukul 13.00 WIB, cuaca di Wonogiri berlangsung cerah berawan dengan suhu udara 33 derajat celsius. Kecepatan angin 20 km/jam dan kelembapan 60 persen.\r\nPada pukul 16.00 WIB, kondisi cuaca di Wonogiri mengalami cerah berawan. Suhu udara 30 derajat celsius. Sedangkan kecepatan angin 20 km/jam dan kelembapan udara 70 persen.\r\nPukul 19.00 WIB, cuaca di Wonogiri berlangsung berawan dengan suhu udara 28 derajat celsius. Kecepatan angin 10 km/jam dan kelembapan udara 75 persen.\r\nPukul 22.00 WIB, kondisi cuaca berawan dengan suhu udara 26 derajat celsius. Kecepatan angin 10 km/jam dan kelembapan udara 90 persen', '1659665563.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
