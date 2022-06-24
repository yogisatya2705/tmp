-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 03:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtual`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotspot`
--

CREATE TABLE `hotspot` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `pitch` float NOT NULL,
  `yaw` float NOT NULL,
  `type` enum('informasi','link') NOT NULL,
  `link` text DEFAULT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotspot`
--

INSERT INTO `hotspot` (`id`, `lokasi`, `pitch`, `yaw`, `type`, `link`, `nama`) VALUES
(1, 'lokasi5', -7.945, 19.187, 'informasi', '', ''),
(2, 'lokasi5', -8.46, 36.73, 'informasi', '', ''),
(3, 'lokasi1', -6, -50, 'link', 'pengunjung/lokasi2', ''),
(11, 'lokasi2', -12.757, -58.252, 'link', 'pengunjung', ''),
(12, 'lokasi2', -12.9019, -68.8777, 'link', 'pengunjung/lokasi3', ''),
(13, 'lokasi2', -23.4569, -126.545, 'link', 'pengunjung/lokasi7', ''),
(14, 'lokasi3', -16.9357, -3.5461, 'link', 'pengunjung/lokasi4', ''),
(15, 'lokasi3', -19.0621, 89.7405, 'link', 'pengunjung/lokasi2', ''),
(16, 'lokasi4', -14.5728, -58.2911, 'link', 'pengunjung/lokasi3', ''),
(17, 'lokasi4', -25.377, 32.8373, 'link', 'pengunjung/lokasi6', ''),
(18, 'lokasi4', -26.4741, -117.922, 'link', 'pengunjung/lokasi5', ''),
(19, 'lokasi5', -9.7255, -41.8772, 'link', 'pengunjung/lokasi4', ''),
(20, 'lokasi6', -10.47, -16.685, 'link', 'pengunjung/lokasi4', ''),
(21, 'lokasi7', -15.9478, 77.2795, 'link', 'pengunjung/lokasi2', ''),
(22, 'lokasi7', -16.2719, -89.7039, 'link', 'pengunjung/lokasi8', ''),
(23, 'lokasi8', -18.3192, 110.304, 'link', 'pengunjung/lokasi7', ''),
(24, 'lokasi8', -6.6744, -54.3665, 'link', 'pengunjung/lokasi9', ''),
(25, 'lokasi9', -20.1293, -43.6686, 'link', 'pengunjung/lokasi10', ''),
(26, 'lokasi9', -17.5952, 36.623, 'link', 'pengunjung/lokasi11', ''),
(27, 'lokasi10', -23.5898, 168.023, 'link', 'pengunjung/lokasi9', ''),
(28, 'lokasi11', -16.4898, -138.119, 'link', 'pengunjung/lokasi10', ''),
(29, 'lokasi11', -13.9196, 1.0923, 'link', 'pengunjung/lokasi12', ''),
(30, 'lokasi12', -10.6273, 114.149, 'link', 'pengunjung/lokasi11', ''),
(34, 'lokasi5', -8.285, 58.49, 'informasi', '', 'okokan'),
(35, 'lokasi5', -11.0806, 89.8578, 'informasi', '', 'prasarana irigasi'),
(36, 'lokasi5', -10.5139, 164.021, 'informasi', '', 'sakralisasi air'),
(37, 'lokasi5', -8.7661, -167.345, 'informasi', '', 'kalender'),
(38, 'lokasi5', -7.95767, -148.689, 'informasi', '', 'Pengolahan tanah'),
(39, 'lokasi5', -8.16795, -102.931, 'informasi', '', 'Pembibitan padi'),
(40, 'lokasi6', -5.5579, 30.8734, 'informasi', '', 'menanam padi'),
(41, 'lokasi6', -6.03574, 47.5774, 'informasi', '', 'menyiangi'),
(42, 'lokasi6', -5.97737, 64.4691, 'informasi', '', 'alat menangkap ikan'),
(43, 'lokasi6', -6.77275, 95.0094, 'informasi', '', 'panen'),
(44, 'lokasi6', -5.62, -175, 'informasi', '', 'penumbuk padi'),
(45, 'lokasi6', -7.12087, -152.179, 'informasi', '', 'menakar beras'),
(46, 'lokasi6', -5.98798, -123.869, 'informasi', '', 'alat dapur'),
(47, 'lokasi5', -6.77154, 4.90432, 'informasi', '', 'Gambar Pulau Bali'),
(48, 'lokasi5', -8.03239, 70.4557, 'informasi', '', 'Pembuatan Saluran Irigasi'),
(49, 'lokasi5', -7.08519, -124.408, 'informasi', '', 'Pengolahan lahan'),
(50, 'lokasi1', -5.46727, -45.9685, 'informasi', '', 'informasi kelokasi berikutnya');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_hotspot`
--

CREATE TABLE `informasi_hotspot` (
  `id` int(11) NOT NULL,
  `hotspot_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi_post` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi_hotspot`
--

INSERT INTO `informasi_hotspot` (`id`, `hotspot_id`, `nama`, `isi_post`, `gambar`) VALUES
(2, 1, 'Sejarah Subak', 'Sejarah subak atau sistem irigasi tradiasional di bali sendiri diambil berdasarkan temuan data yang terdapat dalam prasasti yang ditulis di atas daun lontar dan lempengan tembaga yang menunjukkan bahwa pertanian dengan sistem irigasi perladangan dan juga sistem persawahan yang telah ada di Bali sejak tahun 882 masehi. Sejarah subak yang ada di bali sendiri juga disebutkan dalam beberapa lontar atau prasasti kuno yaitu, Purana Sri, Purana Sri Markandya, Prasasti Raja Purana dan lain sebagainya.\r\n', 'IMG_0212.JPG'),
(3, 2, 'Piranti Organisasi Subak', 'Piranti organisasi subak merupakan pembagian setiap kelompok di dalam oraganisasi subak yang  memiliki peraturan (awig-awig) pada masing-masing pengelolaan subak yang salah satunya dengan menggunakan janggi untuk mengukur waktu anggota oraganisasi yang telat datang yang kemudian  diberikan sangsi untuk melihat air di dalam janggi sampai habis yang kemudian di beri sangsi tambahan berupa denda.', 'piranti.jpg'),
(5, 34, 'Pembukaan Lahan Pertanian', 'Pembukaan lahan pertanian dalam sistem subak yang ada di bali pada jaman dulu pada masyarakat  dilakukan dengan menggunkan alat-alat yang sifatnya masih tradisional atau sederhana antara lain menggunakan gergaji penibahan, gergaji pengelang, kandik dan, lain sebagainya.', 'IMG_0197.JPG'),
(6, 35, 'Prasarana Irigasi', 'Prasarana irigasi merupakan sistem jaringan di dalam subak yang mengatur dalam membagi, memberi dan membuang air irigasi di setiap lahan pertanian yang memerlukan air sehingga pembagian air menjadi terkontrol dan merata di setiap lading pertanian di bali. Prasanan irigasi sendiri yang digunakan dalam subak disebut Tembuku untuk mengatur air irigasi, sehingga dalam pemberian atau pengeluaran tidak sembarangan orang bisa menggukana air dengan seenaknya tanpa sepengetahuan Prejuru Subak.', 'IMG_0247.JPG'),
(8, 36, 'Sakralisasi air', 'Sakralisasi air merupakan sebuah upacara tradisional bali yang digunakan  sebagai ungkapan wujud rasa syukur dan bakti kepada Tuhan Yang Maha Esa. Pelaksanaan upacara sakralisai air sendiri di laksanakan setiap tahun sekali dan dalam pelaksanaan upacara secara masal harus melibatkan dengan subak-subak yang ada di sekitar.', 'sakralisasi.jpg'),
(10, 37, 'Kalender', 'Dalam penentuan hari baik dalam awal bercocok tanam disawah, masyarakat bali melihat dari kalender untuk menentukan hari baik untuk bercocok tanan disawah.', 'kalender.jpg'),
(12, 38, 'Pengolahan tanah', 'Masayarakat tradisional bali dalam pengolahan tanah pada jaman dulu, petani terlebih dahulu menggenangi area persawahan dengan air beberapa hari. Kemudia petani melaksanakan ngendong amacul yaitu tanah dicangkul dan digemburkan menggunakan tambah, setelah itu petani meratakan menggunakan tulud/peed.', 'pembersihan_lahan.jpg'),
(14, 40, 'Menanam padi', 'Pada jaman dahulu masyarakat bali mansih menerapkan sistem gotong royong, pekerjaan apapun di kerjakan secara sesama agar lebih mudah. Dalam menanam padi masih juga menerapkan sistem gotong royong yang saling membantu sesama petani dalam menanam padi.', 'menanam.jpg'),
(15, 41, 'Menyianyi dan Memupuk', 'Dalam menanam padi di dalam persawahan pastinya adanya benalu atau guma yang mengganggu dalam pertumbuhan padi tersebut. Petani membersihkan gulma tersebut menggunakan kikis dan pengrondoan agar di sekitar tanaman padi terlihat bersih dan tidak mengganggu dalam pertumbihannya.\r\n', 'mamupuk.jpg'),
(16, 42, 'Alat menangkap ikan', 'Pada jaman dahulu petani setelah menyelsaikan menanam padi, petani mengisi waktu luangnya untuk menangkap ikan yang ada di saluran air di persawahan. Petani  menangkap ikan menggukana sepit untuk menangkap lingdung, seser untuk menangkap siput atau kepiting, dan sungsung yang di gunakan untuk menangkap ikan.', 'penangkap_ikan.jpg'),
(17, 43, 'Panen', 'Pada jaman dahulu masyarakat bali masih menerapkan sistem gotong royong, pekerjaan apapun di kerjakan secara sesama agar lebih mudah. Dalam pemotongan padi masih juga menerapkan sistem gotong royong yang saling membantu sesama petani dalam pemotongan padi. Petani  menggunakan alat berupa anggapan, penatapan dan pengeratan.', 'panen_padi.jpg'),
(18, 44, 'Penumbuk padi', 'Masyarakat bali dahulu dalam pengolahan padi menajadi beras masih tradisional tidak seperti sekrang menggunakan alat moderen. Proses pengolahannya di kerjakan oleh ibu-ibu yang menggunkan lesung atau mortar, myiru, dan sanan', 'penumbuk_beras.jpg'),
(19, 45, 'Menakar beras', 'Masyarakat umum pada jaman sekarang dalam mengukur berat menggunkan alat beruoa timbangan yang menenukan banyaknya. Lain halnya dengan masyarakat bali dahulu untuk mengukur berat beras menggukan batok kelapa sebagai alat untuk mengukur banyaknya beras yang digunakann.', 'IMG_0376.JPG'),
(20, 46, 'Alat dapur', 'Pada zaman dahulu masyarakat bali menggunakan alat-alat dapur tradisional yang bahkan beberapa alat tersebut masih sering digunakan sampai sekarang. Dan alat-alat tersebut tertata lengkap di museum subak', 'alat_masak.jpg'),
(21, 47, 'Gambar Pulau Bali', 'Persebaran subak terlihat pada gambar di tandai dengan titik-titik merah yang menandai berbagai tempat pada gambar pulau Bali. Pulau bali memiliki luas 5.641,16  yang memiliki iklim tropis, memili musim hujan dan kemarau. Bali memiliki 4 sumber air terbesar yang dipetakan secara langsung di museum subak.', 'pulau_bali.jpg'),
(22, 48, 'Pembuatan Jaringan Irigasi', 'Jaringan irogasi merupakan awungan (terowongan air) yang digunakan oleh subak untuk mengairi areal persawahan yang terbilang curam. Prasasti indik empelan memberikan informasi dari langkah awal pembuatan awungan serta menolak tempat keramat untuk dijadikan lokasinya. Alat-alat yang digunakan terpajang langsung dimuseum subak.', 'sarana_irigasi.jpg'),
(23, 49, 'Pengolahan lahan', 'Pengilahan lahan dimulai dengan menggenangi area lahan dengan air, kemudian dlanjutkan dengan ngendag amacul yaitu kegiatan dimana tanah dicangkul dan digemburkan dengan menggunakan tambah (alat tradisional yang juga dipajang di museum subak) kemudian duratakan dengan menggunakan tulud atau disebut juga peed dan membersihkan bagian rumput di teras sawah dengan bantuan alat yang bernama sorok dan penampad.\r\n', 'pembersihan_lahan.jpg'),
(24, 50, 'lokasi berikutnya', 'Lokasi selanjutnya merupakan panorama di depan kantor museum subak', '2.jpg'),
(25, 39, 'Pembibitan padi', 'Hal pertama yang dilakukan sebelum penanaman padi adalah membuat bibit padi. Pembibitan padi dilakukan secara teratur dengan menaburkan benih di salah satu petak sawah yang disusul dengan acara ngurit atau mantenin bulih. Dalam melakukan kegiatas ini, petani biasanya menggunakan alat-alat untuk melindungi diri dari hujan dan teriknya matahari. Alat-alat tersebut bisa dilihat langsung di museum subak.\r\n', 'IMG_0196.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `panor`
--

CREATE TABLE `panor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panor`
--

INSERT INTO `panor` (`id`, `nama`, `gambar`) VALUES
(1, 'Halaman Depan Museum', '1.jpg\r\n'),
(2, 'Halaman Depan Kantor', '2.jpg'),
(3, 'Pintu Masuk Museum', '3.jpg'),
(4, 'Ruang Pameran', '4.jpg'),
(5, 'Ruang Pameran Kiri', '5.jpg'),
(6, 'Ruang Pameran Kanan', '6.jpg'),
(7, 'Depan Miniatur Waduk', '7.jpg'),
(8, 'Depan Miniatur Waduk', '8.jpg'),
(9, 'Depan Rumah Tradisional Bali', '9.jpg'),
(10, 'Rumah Tradisional Bali', '10.jpg'),
(11, 'Depan Pura Subak', '11.jpg'),
(12, 'Persawana Tradisional Bali', '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `informasi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `nama`, `informasi`, `image`) VALUES
(59, 'saya', 'budi', '1651761866-d_u_2.PNG'),
(60, 'okokan', 'Okokan merupakan alat musik bunyi-bunyian yang terbuat dari bahan kayu yang menyerupai keroncongan sapi atau kerbau, tetapi tetua terdahulu membuatnya dengan ukuran yang cukup besar dan didalamnya diisi pemukul yang disebut palit.', '1651763560-d_u_2.PNG'),
(71, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `is_active`, `date_created`) VALUES
(4, 'Herry Susariantha Sandjaya', 'herrysusariantha17@gmail.com', 'default.jpg', '$2y$10$OsgT.ki7VczvMbeLYr.ZFOcWEtNH8z0MfxERN8QN3DmGOBEBJYDLS', 1, 1650913087);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `foto`) VALUES
(39, 'Alat Memasak', 'alat_masak.jpg'),
(40, 'Alat Makan', 'alat_makan.jpg'),
(41, 'Piranti Organisasi', 'piranti.jpg'),
(42, 'Kanlender', 'kalender.jpg'),
(43, 'Pembukaan Jaringan Irigasi', 'jaringan_air.jpg'),
(44, 'Penumbuk padi', 'penumbuk_beras.jpg'),
(45, 'Menyianyi dan Mamupuk', 'mamupuk.jpg'),
(46, 'Alat Menanm Padi', 'menanam.jpg'),
(47, 'Alat Membawa Padi', 'membawa_padi_2.jpg'),
(48, 'Alat Menangkap Ikan', 'penangkap_ikan.jpg'),
(49, 'Sarana Irigasi', 'sarana_irigasi.jpg'),
(50, 'Pulau Bali', 'pulau_bali.jpg'),
(51, 'Sakralisasi Air', 'sakralisasi.jpg'),
(52, 'Pengolahan Tanah', 'pembersihan_lahan.jpg'),
(53, 'Alat Panen Padi', 'panen_padi.jpg'),
(54, 'Alata Panggu Padi', 'penggu_padi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotspot`
--
ALTER TABLE `hotspot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi_hotspot`
--
ALTER TABLE `informasi_hotspot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotspot_id` (`hotspot_id`);

--
-- Indexes for table `panor`
--
ALTER TABLE `panor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `hotspot`
--
ALTER TABLE `hotspot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `informasi_hotspot`
--
ALTER TABLE `informasi_hotspot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `panor`
--
ALTER TABLE `panor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `informasi_hotspot`
--
ALTER TABLE `informasi_hotspot`
  ADD CONSTRAINT `informasi_hotspot_ibfk_1` FOREIGN KEY (`hotspot_id`) REFERENCES `hotspot` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
