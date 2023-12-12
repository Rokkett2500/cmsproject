-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsmk`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `title`, `image`) VALUES
(7, 'Sidang BPUPKI', '20231202081337.jpg'),
(8, 'Francesco Bagnaia', '20231202082641.jpg'),
(9, 'SMK Negeri 2 Karanganyar', '20231202093101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(4, 'Sejarah'),
(5, 'Bahasa Jawa'),
(7, 'Kuliner'),
(8, 'Lainnya'),
(9, 'Olah Raga');

-- --------------------------------------------------------

--
-- Table structure for table `configtab`
--

CREATE TABLE `configtab` (
  `id` int(11) NOT NULL,
  `website_title` varchar(60) NOT NULL,
  `website_profile` text NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `tiktok` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `configtab`
--

INSERT INTO `configtab` (`id`, `website_title`, `website_profile`, `instagram`, `facebook`, `tiktok`, `address`, `email`) VALUES
(1, 'RokkettGz', 'CMS Website by Rokkett', '@22gzofficial', '22Gz', '@sniperblixky22', 'Brooklyn, New York City', 'subedjohendra@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `category_id` varchar(30) NOT NULL,
  `content_details` text NOT NULL,
  `date` date NOT NULL,
  `username` varchar(60) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `category_id`, `content_details`, `date`, `username`, `image`) VALUES
(13, 'Peristiwa Rengasdengklok', '4', '<div class=\"flex flex-grow flex-col max-w-full\">\r\n<div class=\"min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" data-message-author-role=\"assistant\" data-message-id=\"8d550d4f-d83e-44d5-a734-2e1f3bc7caa8\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Peristiwa Rengasdengklok adalah penculikan yang dilakukan oleh sejumlah pemuda, termasuk Soekarni, Wikana, Aidit, dan Chaerul Saleh, terhadap Soekarno dan Hatta dari perkumpulan \"Menteng 31\". Pada 16 Agustus 1945, pukul 03.00 WIB, mereka dibawa ke Rengasdengklok, Karawang, untuk mempercepat proklamasi kemerdekaan RI. Soekarno dan Hatta tetap pada pendiriannya meskipun dihadapkan pada desakan.</p>\r\n<p>Rencananya, proklamasi akan dibacakan pada 17 Agustus 1945, dipilih di rumah Bung Karno di Jl. Pegangsaan Timur No. 56 untuk menghindari kericuhan dengan tentara Jepang di Lapangan IKADA. Teks proklamasi disusun di Rengasdengklok, di rumah saudagar Tionghoa Djiaw Kie Siong, yang lebih layak.</p>\r\n<p>Pada 16 Agustus, Bendera Merah Putih dikibarkan di Rengasdengklok sebagai persiapan. Karena tidak ada berita dari Jakarta, Jusuf Kunto dikirim untuk berunding, tetapi hanya menemui Wikana dan Achmad Soebardjo. Mereka ke Rengasdengklok untuk menjemput Soekarno, Hatta, Fatmawati, dan Guntur. Bung Karno dan Hatta diundang ke Jakarta oleh Achmad Soebardjo untuk membacakan proklamasi di rumah Bung Karno.</p>\r\n<p>Pada 17 Agustus 1945, proklamasi kemerdekaan diumumkan di Jakarta dengan teks proklamasi yang telah diketik oleh Sayuti Melik, menggunakan mesin ketik yang \"dipinjam\" dari kantor Kepala Perwakilan Kriegsmarine, Mayor Dr. Hermann Kandeler.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><sup id=\"cite_ref-1\" class=\"reference\"></sup></p>', '2023-12-02', 'rin', '20231202025424.jpg'),
(14, 'Rendang', '7', '<p><strong>Rendang</strong> adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan&nbsp;aneka rempah-rempah dan santan. Proses memasaknya memakan waktu berjam-jam (biasanya sekitar empat jam) hingga yang tinggal hanyalah potongan daging berwarna hitam pekat dan dedak. Dalam suhu ruangan, rendang dapat bertahan hingga berminggu-minggu. Rendang yang dimasak dalam waktu yang lebih singkat dan santannya belum mengering disebut kalio, berwarna cokelat terang keemasan.</p>\r\n<p>Rendang dapat dijumpai di Rumah Makan Padang di seluruh dunia. Masakan ini populer di Indonesia dan negara-negara Asia Tenggara lainnya, seperti Malaysia, Singapura, Brunei, Filipina, dan Thailand. Di daerah asalnya, Minangkabau, rendang disajikan di berbagai upacara adat dan perhelatan istimewa. Meskipun rendang merupakan masakan tradisional Minangkabau, teknik memasak serta pilihan dan penggunaan bumbu rendang berbeda-beda menurut daerah.</p>', '2023-12-02', 'miku', '20231202080223.jpg'),
(15, 'Bagnaia Puas dengan Motor Baru Ducati, tapi Bisa Lebih Oke Lagi', '9', '<p>Francesco Bagnaia mengaku puas dengan motor baru Ducati. Pecco menegaskan bahwa Desmosedici GP24 masih bisa lebih baik lagi.</p>\r\n<p>Dalam tes pascamusim MotoGP 2023, Bagnaia belum menuai hasil maksimal. Juara dunia MotoGP 2023 itu menempati posisi ke-11.</p>\r\n<p>Bagnaia mencatatkan waktu terbaik satu menit 29,970 detik. Dia melahap sebanyak 51 putaran dalam tes di Sirkuit Ricardo Tormo, Valencia, Spanyol.</p>\r\n<p>Catatan waktu Bagnaia itu masih berjarak 0,717 dari Maverick Vinales yang menjadi rider tercepat. Pebalap Aprilia itu membukukan waktu satu menit 29,253 detik.</p>\r\n<p>\"Rasanya bagus dan mesin baru bekerja dengan baik. Jelas, ada area yang harus ditingkatkan tapi saat ini saya senang,\" kata Bagnaia di Crash.</p>\r\n<p>\"Saya merasa luar biasa dan di beberapa area saya sudah merasa lebih baik dibandingkan tahun lalu. Masih ada ruang besar untuk lebih baik lagi,\" kata dia menambahkan.</p>\r\n<p>Bagnaia dan Ducati masih mempunyai waktu untuk meningkatkan performa Desmosedici GP24. Race MotoGP 2024 baru akan dimulai pada Maret 2024, seri MotoGP Qatar yang akan menjadi balapan pembukanya.</p>\r\n<p>Pada MotoGP 2023, Bagnaia cukup dominan bersama Ducati. Dia memetik kemenangan di balapan utama MotoGP sebanyak tujuh kali hingga mampu mempertahankan gelar juara dunia bersama Ducati.</p>', '2023-12-02', 'miku', '20231202090216.jpg'),
(16, 'Walangan', '5', '<p>Walangan digawe saka ubi utawa singkong. Panganan iki nduweni rasa manis, gurih lan renyah. Werna coklat kuning lan ungu amarga digawe saka ubi ungu. Dipun wastani Walangan, amargi saderengipun dipunolah utawi dipuncetak bahan dasar ubi jalar utawi singkong dipuncukur alus lan dawa kados mi ingkang lajeng dipungoreng. Dawane kaya mie iki padha karo untune walang. Sawise digoreng banjur dimasak nganggo gula jawa. Cara gawene kaya gawe gula kacang. Kaping pisanan, masak gula jawa sing dicampur karo banyu sithik nganti godhok lan rada kenthel, banjur ditambahake ubi utawa singkong sing digoreng, banjur diaduk-aduk sawise kentele suda lan dibentuk bunder.</p>', '2023-12-02', 'rin', '20231202092643.jpg'),
(17, 'Redmi 4X', '8', '<div class=\"flex flex-grow flex-col max-w-full\">\r\n<div class=\"min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" data-message-author-role=\"assistant\" data-message-id=\"49e55965-68ed-499f-9d9d-ec283fd2dcfb\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Redmi 4X adalah smartphone yang diproduksi oleh Xiaomi, menawarkan desain kompak dan layar IPS LCD 5.0 inci dengan resolusi 720 x 1280 piksel. Ditenagai oleh prosesor Octa-core Snapdragon 435, Redmi 4X memiliki pilihan RAM dan penyimpanan internal, seperti 2GB/16GB dan 3GB/32GB. Kamera belakangnya memiliki resolusi sekitar 13 MP, sementara kamera depannya cocok untuk swafoto. Smartphone ini menjalankan sistem operasi Android dengan antarmuka MIUI khas Xiaomi, dilengkapi dengan sensor sidik jari untuk keamanan tambahan. Dengan baterai berkapasitas besar, dual SIM, dan harga terjangkau, Redmi 4X merupakan pilihan yang menarik bagi pengguna yang mencari perangkat dengan kinerja baik dan nilai ekonomis.</p>\r\n</div>\r\n</div>\r\n</div>', '2023-12-02', 'miku', '20231202095812.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(3, 'Ahmad_1995', 'Bisa diperbaiki lagi bagian tampilannya, menurut saya kurang menarik'),
(4, 'Gamer8080', 'I think you should add more contents');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `gallery_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `gallery_name`) VALUES
(2, '20231204155049.jpg', 'Sekaten'),
(3, '20231204155110.jpg', 'Nonton Bola'),
(4, '20231204155128.jpg', 'Jalanan di Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` enum('Admin','Contributor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(8, 'rin', '26d1ebd4ec8c55cc69f190d0d37f6dac', 'Kagamine Rin', 'Admin'),
(9, 'miku', 'dda9d52e8e58a3dc6f54daba1cc2ccb8', 'Hatsune Miku', 'Contributor'),
(10, 'seele', 'c8bf343d53bd526b0aefd62b5a151a78', 'Seele Vollerei', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `configtab`
--
ALTER TABLE `configtab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `configtab`
--
ALTER TABLE `configtab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
