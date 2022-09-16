-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2022 at 01:27 AM
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
  `kode_kategori` int(4) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `kode_kategori`, `isi`, `gambar`) VALUES
(63, 'Uniknya Mi Ayam Keranjang Wonogiri, Wadah dan Tangkainya Bisa Dimakan', '2022-09-08', 1001, 'Wonogiri - Tersohornya mi ayam Wonogiri tak membuat sebagian pegadangnya berhenti berinovasi. Beberapa kreasi ditempuh untuk menyajikan mi ayam Wonogiri yang berbeda dari biasanya. Salah satunya adalah mi ayam keranjang di warung Heri Setiawan.\r\nHeri membuat kreasi mi ayam keranjang di warungnya di Desa Bulusulur, Kecamatan Wonogiri Kota, dan di Kaliancar atau barat Terminal Bus Lama Wonogiri. Mi ayam ini disajikan dalam wadah yang terbuat dari pangsit yang bentuknya menyerupai mangkuk atau keranjang.\r\n\r\nPada pangsit keranjang itu, Heri menambahkan \'tangkai\' seperti rotan yang terbuat dari mi yang dikeringkan. &quot;Jadi seluruh sajian, baik mi, mangkuk dan tangkai bisa disantap. Mi yang dibuat tangkai itu terbuat dari mi basah yang dianyam kemudian digoreng,&quot; kata Heri kepada detikJateng, Selasa (30/8/2022) lalu.\r\n\r\n\r\n\r\nRasa Mi Ayam Keranjang tak jauh berbeda dengan mi ayam pada umumnya. Tekstur mi ayamnya lembut. Kuah mi ayam disajikan secara terpisah. Namun mengaduknya harus hati-hati sebab wadahnya terbuat dari pangsit.\r\n\r\nBaca juga:\r\nSurga Tersembunyi di Jawa Tengah, Tiga Lembah Indah di Kaki Gunung\r\nPorsi mi ayam ini tergolong sedang, tidak terlalu banyak. Pembeli bisa menyantap mi ayam sambil memakan pangsitnya. Karena pangsit yang digunakan wadah mi ditaruh di sebuah mangkuk. Pangsitnya gurih dan renyah. Sedangkan mi kering yang digunakan untuk tangkai sedikit keras namun bisa jadi camilan.\r\n\r\nCara membuat mi ayam keranjang ini juga tak jauh berbeda dengan mi ayam pada umumnya. Setelah mi yang direbus matang dan dicampur dengan bumbu, kemudian dimasukkan ke pangsit besar berbentuk mangkuk.\r\n\r\nKemudian di pangsit itu diberi mi ayam kering yang sudah dibentuk seperti tangkai. Terakhir mi ayam diberi topping ayam dan daun bawang. Heri mengaku menambah menu mi ayam keranjang di warungnya baru pada pertengahan Agustus lalu.\r\n\r\nSebelumnya warung mi ayam Heri di Desa Bulusulur Kecamatan Wonogiri Kota menyajikan mi ayam wajan dan aneka mi ayam bakso. Dari mi wajan itu, kata Heri, ada sejumlah komentar di media sosial jika sajian itu tidak bisa dibawa pulang atau dibungkus.\r\n\r\nBaca artikel detikjateng, &quot;Uniknya Mi Ayam Keranjang Wonogiri, Wadah dan Tangkainya Bisa Dimakan&quot; selengkapnya https://www.detik.com/jateng/kuliner/d-6271921/uniknya-mi-ayam-keranjang-wonogiri-wadah-dan-tangkainya-bisa-dimakan.\r\n\r\nDownload Apps Detikcom Sekarang https://apps.detik.com/detik/', '1662648642.png'),
(64, 'Gempa Darat M 2,7 Terjadi di Wonogiri Pagi Ini', '2022-09-02', 1004, 'Solo - Gempa bumi berkekuatan magnitudo 2,7 terjadi di Wonogiri, Jawa Tengah. Gempa ini berpusat di darat.\r\n&quot;Info gempa M 2,7,&quot; tulis BMKG dalam keterangannya, Jumat (2/9/2022).\r\n\r\nBMKG mencatat gempa terjadi pukul 07.04 WIB tadi. Pusat gempa berada di 7,88 Lintang Selatan, dan 111,08 Bujur Timur.\r\n\r\n\r\n\r\nTepatnya di 20 km tenggara Wonogiri, Jawa Tengah. &quot;Kedalaman 129 km,&quot; terangnya.\r\n\r\nHingga saat ini belum diketahui dampak akibat gempa ini.\r\n', '1662648119.png'),
(65, 'Fans Liverpool Bahas \'Kutukan Jake Paul\'', '2022-09-08', 1002, 'Jakarta - Liverpool mengawali kiprahnya di Liga Champions dengan kekalahan, pada saat performanya di Liga Inggris juga belum stabil. Fansnya membahas \'kutukan Jake Paul\'.\r\nKekalahan dengan skor 1-4 dialami si Merah saat melawat ke markas Napoli di matchday pertama Liga Champions. Itu sekaligus menjadi kekalahan kedua Liverpool di seluruh ajang di awal musim ini.\r\n\r\nBahkan Liverpool sejauh ini baru meraih dua kemenangan, yang mereka petik di Liga Inggris. Ini berdampak pada posisi the Reds di klasemen Liga Inggris, dengan bercokol di posisi ketujuh untuk sementara.\r\n\r\n\'Kutukan Jake Paul\' yang dibahas suporter Liverpool itu merujuk pada sebuah momen di bulan April. Pada saat itu Jake Paul, sosok YouTuber yang kini juga eksis sebagai petinju, terlihat memberikan dukungannya kepada si Merah.\r\n', '1662648682.png'),
(66, 'Berapa Usia Matahari? Ini Prediksi Para Ilmuwan', '2022-09-08', 1003, 'Kerap menyinari Bumi saat pagi hingga sore hari, pernahkan detikers berpikir berapa usia Matahari yang sebenarnya? Terlebih, Matahari tak kenal lelah memancarkan cahayanya setiap hari.\r\nDikutip dari Space Place NASA, para ilmuwan menyebut usia Matahari saat ini telah mencapai 4,57 miliar tahun. Mereka memprakirakan Matahari akan redup di usia ke-10 miliar tahun.\r\n\r\nCara Mengetahui Usia Matahari\r\nPara ilmuwan dapat mengetahui umur Matahari dengan melihat seluruh usia tata surya, sebab benda-benda tata surya muncul secara bersamaan.\r\n\r\nDalam kaitannya, mereka mencari benda tertua di tata surya untuk dijadikan sampel. Kala itu, astronaut membawa pulang batu yang ada di bulan untuk diteliti dan dipelajari oleh ilmuwan, sehingga mereka dapat mengetahui usia Matahari melalui benda tersebut.\r\n\r\nPada laman Space dijelaskan bahwa teknik yang digunakan para ilmuwan itu dinamakan dengan nucleo-cosmochronology.\r\n\r\nBerapa Lama Matahari Akan Bersinar?\r\nJika umur Matahari sekarang 4,5 miliar tahun, maka Matahari masih memiliki waktu sebesar 5 miliar tahun lagi. Seperti yang telah dibahas sebelumnya, ilmuwan memprakirakan Matahari akan berhenti bersinar di usia 10 miliar tahun.\r\n\r\nMereka memprakirakan, ketika umur Matahari mencapai 10 miliar tahun maka ia akan berubah menjadi lebih besar layaknya raksasa merah. Bersamaan dengan itu, Matahari juga akan menjadi lebih dingin.\r\n\r\nKetika ukurannya membesar, maka cahaya Matahari akan menjadi terang sekitar 2.000 kali dari sekarang.\r\n\r\nApakah Bumi Juga Ikut Musnah Bersama Matahari?\r\nMengutip dari laman Science ABC, Bumi akan lebih dulu musnah ketimbang Matahari. Ketika Matahari bersinar terang, Bumi akan lebih banyak menyerap energi dari Matahari.\r\n\r\nAkibatnya muncul efek rumah kaca yang parah sehingga planet akan menjadi terlalu panas untuk dihuni oleh makhluk hidup.\r\n\r\nIlmuwan menyebut, lautan akan mendidih, lapisan es akan mencair dan sebagian besar uap air akan hilang ke luar angkasa. Nantinya, planet Bumi akan menjadi kering dan panas.\r\n\r\nItulah prediksi usia Matahari menurut para ilmuwan beserta teknik yang digunakan untuk mengetahuinya. Semoga penjelasan di atas dapat bermanfaat, ya!\r\n', '1662648080.png'),
(67, 'Tandang Lawan PSS Sleman di Maguwoharjo, Persis Solo Dilarang Bawa Suporter  ', '2022-09-06', 1002, 'Sleman - PSS Sleman akan menghadapi Persis Solo pada pekan kesembilan BRI Liga 1 2022/2023, Sabtu (10/9) malam. Pertandingan yang berlangsung di Stadion Maguwoharjo, Sleman ini dipastikan tidak akan dihadiri oleh suporter tim tamu.\r\nKepastian ini didapatkan usai permohonan yang diajukan oleh Polda DIY dikabulkan PT Liga Indonesia Baru (LIB). Adapun Polda DIY telah mengirimkan permohonan kepada PT LIB dalam surat nomor: B/2793/VIII/PAM.3.3/2022/ROOPS yang kemudian dikabulkan PT LIB dalam surat nomor: 437/LIB-KOM/IX/2022 mengenai tidak memberikan kuota tiket penonton kepada suporter Persis Solo.\r\n\r\n&quot;Kami telah menerima surat dari LIB mengenai permohonan Polda DIY yang telah dikabulkan untuk tidak memberikan kuota penonton kepada suporter Persis Solo,&quot; ujar ketua panitia pelaksana (Panpel) PSS, Rangga Rudwino dalam keterangan resmi klub, Selasa (6/9/2022).\r\n\r\n\r\n\r\n&quot;Hal ini dikarenakan untuk mengantisipasi dan memelihara situasi keamanan dan ketertiban masyarakat wilayah DIY,&quot; imbuhnya.\r\n\r\n&quot;PSS juga sudah bersurat kepada tim Persis untuk berkoordinasi mengenai hal ini. Kami sangat berharap kepada seluruh pendukung Persis untuk menerima hal ini dan tidak memaksakan untuk datang ke stadion dan menonton dari rumah,&quot; katanya.\r\n\r\nRangga berharap keputusan ini dapat diterima oleh suporter tim tamu. Sebab hal ini untuk kepentingan dan keselamatan semua orang.\r\n\r\nPasalnya, dalam sebulan terakhir ada dua suporter PSS Sleman yang meninggal akibat dianiaya.\r\n\r\n&quot;Saya berharap semoga hal ini dapat diterima oleh seluruh suporter Persis. Kami juga meminta maaf karena belum bisa menerima suporter Persis karena kondisi yang ada saat ini. Semoga kita semua bisa bersua dalam kondisi yang lebih baik dari sekarang,&quot; pungkasnya.\r\n', '1662686342.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(4) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `kategori`) VALUES
(1001, 'Kuliner'),
(1002, 'Olahraga'),
(1003, 'Edukasi'),
(1004, 'Bencana'),
(1007, 'Hiburan');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komen`, `id_berita`, `id_user`, `komentar`, `tanggal`) VALUES
(2, 67, 2, 'lksldakjdlakdjlaksdjadas', '2022-09-01 14:08:10'),
(4, 67, 2, 'berita nya anjayy', '2022-09-08 00:00:00'),
(5, 66, 2, 'berita nya anjayy', '2022-09-15 14:08:10'),
(6, 66, 6, 'MANTAPPPP', '2022-09-15 15:03:50'),
(7, 66, 6, 'MANTAPPPP', '2022-09-15 15:03:59'),
(8, 66, 6, 'MANTAPPPP', '2022-09-16 08:10:13'),
(9, 66, 6, 'MANTAPPPP', '2022-09-16 08:10:56'),
(10, 66, 6, 'MANTAPPPP', '2022-09-16 08:11:05'),
(11, 66, 6, 'MANTAPPPP', '2022-09-16 08:14:54'),
(12, 67, 6, 'MANTAPPPPasdasda', '2022-09-16 08:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `read_later`
--

CREATE TABLE `read_later` (
  `id_user` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `read_later`
--

INSERT INTO `read_later` (`id_user`, `id_berita`) VALUES
(2, 63),
(2, 64),
(2, 65),
(2, 66);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `profilepicture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `profilepicture`) VALUES
(2, 'fadillarizky', 'fadillarizky294@gmail.com', 'eeedb760af13ddc1fe2a5aa3041ce9a7', NULL),
(6, 'saya', 'akusaya@gmail.com', '93253d7adb53f787b90a8d40bd19b013', NULL);

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
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `read_later`
--
ALTER TABLE `read_later`
  ADD KEY `id_user` (`id_user`,`id_berita`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_user_3` (`id_user`);

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
  MODIFY `id_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `read_later`
--
ALTER TABLE `read_later`
  ADD CONSTRAINT `read_later_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `read_later_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
