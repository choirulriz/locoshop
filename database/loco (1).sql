-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 06:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loco`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stock` int(4) DEFAULT NULL,
  `deskripsi` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `nama`, `foto`, `jenis`, `harga`, `stock`, `deskripsi`) VALUES
(303, 'Baju Koko Batik', 'kokobatik.jpg', 'Pakaian', 70000, 3, 'Koko Batik by Toko Primajasa, selalu memberikan kualitas terbaik. Baju terbuat dari bahan yang lembut dan tidak gerah (adem). Cocok untuk bekerja ataupun bepergian'),
(304, 'Rendang Padang 125 g', 'rendang.jpg', 'Makanan', 80000, 60, 'Rendang Padang asli dari Bukittinggi. Tahan lama hingga 1 minggu lebih. Rendang yang berbeda pada umumnya, karena rasa rempah & pedasnya lebih berasa. Tidak ada Toko lain yang menjualnya, kecuali di beberapa mitra kami yang hanya ada di Jabodetabek'),
(305, 'Bika Ambon Zulaikha', 'bikaambon.jpg', 'Makanan', 60000, 20, 'Bika Ambon Zulaikha - Bika Ambon manis dengan harga ekonomis. Terima pesanan borongan apabila stock ada'),
(306, 'Dodol Garut', 'dodol.jpg', 'Makanan', 30000, 10, 'DODOL GARUT ASLI MHANX YOGAS - PIKNIK. Varian rasa yang bermacam - macam menjadi oleh2 favorit bagi para wisatawan garut. Kini, tidak perlu jauh - jauh ke garut, anda bisa memesan online juga dan tanpa perlu mengantri. Stock selalu update setiap 1-2 minggu sekali'),
(307, 'Gado Gado', 'gado2.jpg', 'Makanan', 20000, 5, 'Gado - Gado kini bisa dibeli online! Gado gado ini sudah dibekukan terlebih dahulu, jadi pembeli hanya tinggal menghangatkannya dengan microwave/dikukus dengan kompor, atau rice cooker. Bumbu dipisah, dan awet hingga 1 minggu'),
(309, '', 'wadezig.jpg', 'Pakaian', 120000, 10, 'WADEZIG! T-Shirt Cotton Combed 30s. Stock diperbarui setiap 1 bulan sekali. Ukuran tersedia: S, M, L, XL, XXL '),
(310, 'Erigo T-shirt', 'erigo.jpg', 'Pakaian', 90000, 10, 'ERIGO Limited T-SHIRT. Stock sisa 10 lagi! harga asli Rp 120.000, kami hanya menjual Rp 90.000 saja karena penghabisan stock.'),
(311, 'This Time Brand T-sh', 'thistimebrand.jpg', 'Pakaian', 80000, 20, 'THIS TIME T-Shirt. Cotton Combed 30s 100% local product. Tidak cepat luntur, sablon kuat'),
(312, 'Baju Sunday sunday c', 'sunday2co.jpg', 'Pakaian', 60000, 20, 'SUNDAY co. T-SHIRT. 100% produk indonesia dengan stock terbatas. pakaian yang dicantumkan tidak akan di re-stock kembali apabila sudah habis. Ukuran Tersedia: S-M-L-XL-XXL'),
(313, 'Pempek Palembang', 'pempek.jpg', 'Makanan', 20000, 20, 'Pempek Ampera asli Palembang. 100% ikan tenggiri, bukan ikan abal abal. Hanya dijual di Palembang. 1 Kotak berisi 3 jenis pempek (Telor, Kapal Selam, Ikan) dengan jumlah 10 pcs'),
(314, 'Soto Banjar', 'sotobanjar.jpg', 'Makanan', 20000, 5, 'SOTO BANJAR ASLI, bukan soto biasa. Soto sudah dibekukan sebelum dikirim, dan sudah ada di berbagai outlet di pulau Suamtera, Jawa, dan Bali. Jadi, tidak perlu khawatir akan basi atau tidak. Awet hingga 3 hari karena kemasan yang kami kirim menggunakan cool box mini untuk menjaga suhu tetap dingin'),
(315, 'Kepiting Soka Medan', 'kepiting.png', 'Makanan', 120000, 10, 'Kepiting Soka Medan asli! ukuran besar dan dagingnya padat. Tidak perlu lagi kelaut, anda hanya tinggal duduk santai dirumah dan memesan dari kami. Bonus resep pembuatan kepiting saos padang'),
(316, 'Kue Bagea Papua', 'kuebagea.jpg', 'Makanan', 30000, 50, 'Limited Stock - Kue Bagea Papua, asli dari Sorong. Stock terbatas'),
(320, 'Baju Starcross', 'starcross.jpg', 'Pakaian', 70000, 10, '[LIMITED STOCK] Promo Outlet Baru - Starcross T-Shirt, hanya 70ribu anda bisa mendapatkan T-Shirt berkualitas ini! '),
(319, 'Kaos Thanksinsomnia', 'thanksinsomnia.jpg', 'Pakaian', 100000, 20, 'Thanks, INSOMNIA! T-Shirt. 100% Original Distro Lokal dan bahan cotton combed 20s yang cukup nyaman digunakan untuk beraktivitas sehari2. Tersedia di semua ukuran!'),
(321, 'T-shirt Crooz', 'crooz.jpg', 'Pakaian', 110000, 20, 'CROOZ T-Shirt 2019 Cotton Combed 30s. Bahan nyaman untuk berpergian. Walaupun tebal, tetap adem ketika digunakan. Tersedia di semua ukuran'),
(322, 'Kaos Dreambirds', 'dreambirds.jpg', 'Pakaian', 90000, 20, 'DREAMBIRDS - TShirt. Produk kualitas export dengan harga lokal! Model setiap bulannya akan berbeda - beda. Tersedia di semua ukuran (kecuali XXXL)'),
(323, 'Mie Aceh Mentah', 'mieaceh.jpg', 'Makanan', 10000, 50, 'Siap Kirim Mie Aceh asli dari Bandar Aceh & Tanpa bahan pengawet. cocok untuk bagi anda yang ingin memulai usaha Mie aceh dengan Mie Asli dari daerah kami'),
(324, 'Kain Tenun Timor', 'kaintenun.jpg', 'Kerajinan ', 150000, 20, 'Kain Tenun khas Pulau NTT/NTB/Timor. Terbatas, dan belum ada yg jual selain toko kami'),
(325, 'T-shirt unkl347', 'unkl347.jpg', 'Pakaian', 80000, 20, 'T-SHIRT UNKL347 Termurah! dibawah harga retail. Stock sangat terbatas. Tersisa ukuran M, L, XL'),
(326, 'Kaos Wellborn', 'wellborn.jpg', 'Pakaian', 120000, 30, 'AUTHENTIC WELLBORN T-Shirt. Hanya ada 50 Pcs di Indonesia, 20 dijual di Offline Store, 30 Dijual di Online Store. Produk asli anak bangsa yang sudah diekspor ke berbagai negara asia '),
(327, 'Kemeja Monstore', 'monstore.jpg', 'Pakaian', 100000, 40, 'MONSTORE - Kemeja Dengan kualitas terbaik, asli distro lokal. Bahan tidak bau, dan awet hingga 5 Tahun lebih'),
(328, 'Locale Revolution T-', 'locale.jpg', 'Pakaian', 120000, 10, 'SIMPLICITY - LOCALE REVOLUTIN T-Shirt. Dapatkan baju ini dengan harga termurah hanya di Locoshop! barang yang kami jual merupakan asli buatan putra daerah, dengan harga yang dibawah dari harga retail. Semua ukuran selalu ada'),
(329, 'Kemeja Original Quzz', 'originalquzzy.jpg', 'Pakaian', 90000, 20, 'QUZZY - Limited Stock. Barang sudah jarang beredar di toko, hanya kami yang memiliki stock terbanyak kemeja Quzzy. Ukuran tersisa M, L, XL, XXL'),
(330, 'Kain Tenun Toraja', 'tenuntoraja.jpg', 'Kerajinan ', 120000, 5, 'Kain Tenun asli Toraja - Handmade. Kualitas sangat bagus dan menjadi kain incaran turis mancanegara'),
(331, 'Kain Songket Padang', 'songketpadang.jpg', 'Kerajinan ', 150000, 8, 'Kain Songket Padang hasil dari pengrajin kota Padang. Cocok untuk membuat baju adat,atau untuk baju formal'),
(332, 'Tas Rajutan', 'tasrajutan.jpg', 'Kerajinan ', 70000, 50, 'Tas Rajutan asli Pekalongan. Jarang ada yang jual karena menggunakan teknik rajutan turun temurun, dan hanya ada di Pekalongan. Siap kirim luar pulau jawa. Stok sangat terbatas karena peminat cukup tinggi'),
(333, 'Jam Kayu Yogyakarta', 'jamkayu.jpg', 'Kerajinan ', 50000, 20, 'Jam Kayu asli Yogyakarta - Terbuat dari 90% Kayu asli. Water resistance, dan sangat awet! harga lebih terjangkau. Cocok untuk hadiah, ataupun digunakan untuk menemani aktivitas sehari - hari. Gratis baterai dan kotak kayu'),
(334, 'Tas Anyaman', 'tasanyaman.jpg', 'Kerajinan ', 40000, 30, 'Tas Anyaman khas Banten - Ready stock. Terbuat dari kain baduy dengan beberapa serat kain lainnya. Awet hingga bertahun - tahun  '),
(335, 'Baju Shining Bright', 'shining.jpg', 'Pakaian', 80000, 20, 'SHINING BRIGHT Co. T-Shirt. Hanya ada di Distro \"SHINING BRIGHT Co\" Cikarang Barat. Bahan baju dengan kualitas import namun harga lokal!'),
(336, 'T-shirt RSCH', 'rsch.png', 'Pakaian', 90000, 30, 'RSCH// T-Shirt. Ready stock! Selalu dukung karya anak bangsa dalam memajukan perekonomian lokal. RSCH bekerja sama dengan pengrajin baju dan beberapa pencetakan baju lokal dalam pembuatan setiap bajunya. Kualitas lokal yang sudah diakui dunia Internasional. Tersedia dalam berbagai macam ukuran. Mode'),
(337, 'Kaos Screamous', 'screamous.jpg', 'Pakaian', 100000, 50, 'SCREAMOUS - SUPPORT YOUR LOCAL. Kaos Limited Edition dari Screamous yang dijual sangat terbatas. Tersedia dalam ukuran ALL SIZE'),
(338, 'Baju Cosmic Original', 'cosmic.jpg', 'Pakaian', 110000, 20, 'Original Cosmic T-Shirt. Hanya ada 20 pembeli beruntung yang membeli kaos ini. Karena, Gratis tote bag!'),
(339, 'Kaos Bloods', 'bloods.jpg', 'Pakaian', 50000, 50, 'BLOODS T-Shirt. Cotton Combed 30s Ukuran tersedia XS, S, M, L, XL, XXL'),
(340, 'Kemeja 17seven', '17seven.jpg', 'Pakaian', 130000, 20, 'Original 17Seven product: kemeja dengan kualitas luar negeri, buatan anak bangsa. Tidak dijual langsung, hanya melalui Online Store dengan stock terbatas'),
(341, 'T-shirt Dominate Jak', 'dominate.jpg', 'Pakaian', 100000, 20, 'Support our local brand with buy \"DOMINATE JAKARTA\" T-Shirt! Pembeli beruntung akan mendapatkan voucher Rp 100.000 untuk belanja di LOCOSHOP. Ukuran tersedia S, M, L, XL'),
(342, 'Devadata Devastate', 'devastate.jpg', 'Pakaian', 90000, 30, 'DEVASTATE LIMITED PRODUCT - Dijual khusus di locoshop, tidak ada di offline store kami. Ukuran tersedia S, M, L, XL, XXL. Langsung dipesan sebelum kehabisan!'),
(343, 'Kaos Pleasure', 'pleasure.jpg', 'Pakaian', 70000, 30, 'PLEASURE Shirt - Produk distro lokal dengan kualitas import! tersedia di berbagai macam ukuran. Khusus 5 pembeli pertama akan kami beri voucher belanja sebesar Rp 100.000!'),
(344, 'Kemeja Failure', 'failure.jpg', 'Pakaian', 90000, 30, 'FAILURE Co. - Kemeja Anti Jomblo! beli sekarang, dapetin kesempatan dinner gratis bersama pasangan kalian di Restoran Bintang 5, Jakarta! Tersedia dalam berbagai macam ukuran'),
(345, 'Baju Baseball Erigo', 'baseballerigo.jpg', 'Pakaian', 150000, 15, 'LIMITED BASEBALL ERIGO TSHIRT- dijual perdana di online store! barang yang dijual merupakan produk terbaru kami, dan tersedia dalam stock yang sedikit karena bahan yang berkualitas premium. Ukuran Tersedia S, M, L, XL'),
(346, 'Tas Kulit Batam', 'taskulit.jpg', 'Kerajinan ', 100000, 10, 'Tas Kulit asli batam, bukan barang black market! - Tas Kulit asli dari pengrajin kulit batam. Hanya dijual di kota batam, dan sudah di import ke beberapa negara tetangga. Kualitas sudah pasti terbaik. Stok terbatas!'),
(347, 'Kaos Distro Peter Sa', 'petersaydenim.jpg', 'Pakaian', 120000, 20, 'PETER SAYS DENIM - SUPPORT OUR LOCAL STORE! Mangga dipesan kaos distro peter says denim - support our local store. Hanya tersedia di locoshop! khusus untuk pembeli locoshop, setiap pembelian produk kami akan mendapatkan merchandise GRATIS. Ukuran tersedia S, M, L, XL'),
(348, 'Bakpia Jogya', 'bakpia.jpg', 'Makanan', 20000, 100, 'Bakpia Oleh Oleh khas Yogyakarta - Jogya. Bakpia asli jogja dan hanya ada di toko oleh2 jogja, kini bisa dipesan secara online! 1 kotak berisi 10 pcs dengan varian rasa Coklat, Kacang Ijo, dan Keju'),
(349, 'Kuebolu Khas Padang', 'kuebolu.jpg', 'Makanan', 30000, 30, 'Bolupadang khas Padang Pariaman - Ready stock dan siap kirim hingga pulau sulawesi. Bolu awet hingga 1 minggu! terima pesanan khusus untuk ulang tahun. Silahkan hubungi 081294928821. Untuk pembelian satuan, hanya bisa melalui Locoshop'),
(350, 'Sandal Pelepah Pisan', 'sandal.jpg', 'Kerajinan ', 20000, 50, 'Sendal pelepah pisang - sandal ini merupakan karya pengrajin pelepah pisang, yang sangat jarang ditemui. Sendal ini sangat kuat, dan tidak mudah putus. stok selalu tersedia & sudah dipercaya oleh negara tetangga');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `idBeli` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `idBarang` int(11) DEFAULT NULL,
  `jumlahBeli` int(16) NOT NULL,
  `jasaPengiriman` varchar(24) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tanggalTransaksi` varchar(256) NOT NULL,
  `totalHarga` int(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`idBeli`, `id`, `idBarang`, `jumlahBeli`, `jasaPengiriman`, `kota`, `alamat`, `tanggalTransaksi`, `totalHarga`) VALUES
(409, 130, 304, 3, 'JNE OKE', 'gresik', 'jakarta barat', '14-05-2019 12:31:22 AM', 240000),
(407, 130, 309, 5, 'JNE OKE', 'probolinggo', 'adhyaksa', '13-05-2019', 600000),
(408, 130, 305, 12, 'JNE OKE', 'akljf', 'jalan stiabudi', '14-05-2019 00:30', 720000),
(411, 130, 307, 1, 'JNE OKE', 'gresik', 'adhyaksa', '2019-05-14 00:35:59', 20000),
(412, 130, 308, 4, 'JNE REG', 'gresik', 'jalan', '14-05-2019', 280000),
(413, 130, 309, 10, 'JNE OKE', 'gresik', 'jalan stiabudi', '14-05-2019', 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `namaPembeli` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kota` varchar(15) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `noTelepon` char(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `namaPembeli`, `password`, `email`, `kota`, `alamat`, `noTelepon`) VALUES
(130, 'Rizal', '$2y$10$GD2m5CfBJcyhLGgGLQFOb.TE4RpGuHwzLNOSFU1VrqGWeJaf2n.bu', 'rizal@gmail.com', '', 'Jalan adhyaksa', '08123213123'),
(128, 'Kevin DIAGA UNO', 'kevin', 'oKE@GMAIL.COM', 'jakarta', 'jakarta', '121341231413'),
(129, 'anita resky', '$2y$10$rQJhD.XUFsMtKss5kmy4FefmdWEHqJOZor3Qyg69D7wwB4rDRPdwa', 'anita@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `idPengiriman` int(11) NOT NULL,
  `tglKirim` date DEFAULT NULL,
  `jenisPengiriman` varchar(20) DEFAULT NULL,
  `biayaPengiriman` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`idPengiriman`, `tglKirim`, `jenisPengiriman`, `biayaPengiriman`) VALUES
(200, '2019-03-11', 'JNE YES', 25000),
(201, '2019-03-11', 'JNE OKE', 15000),
(202, '2019-03-11', 'JNE REG', 20000),
(203, '2019-03-12', 'JNE OKE', 15000),
(204, '2019-03-12', 'JNE YES', 25000),
(205, '2019-03-12', 'JNE REG', 20000),
(206, '2019-03-13', 'JNE REG', 20000),
(207, '2019-03-13', 'JNE OKE', 15000),
(208, '2019-03-13', 'JNE YES', 25000),
(209, '2019-03-14', 'JNE YES', 25000),
(210, '2019-03-14', 'JNE REG', 20000),
(211, '2019-03-14', 'JNE OKE', 15000),
(212, '2019-03-15', 'JNE OKE', 15000),
(213, '2019-03-15', 'JNE YES', 25000),
(214, '2019-03-15', 'JNE REG', 20000),
(215, '2019-03-16', 'JNE YES', 25000),
(216, '2019-03-16', 'JNE REG', 20000),
(217, '2019-03-16', 'JNE OKE', 15000),
(218, '2019-03-17', 'JNE YES', 25000),
(219, '2019-03-17', 'JNE REG', 20000),
(220, '2019-03-17', 'JNE OKE', 15000),
(221, '2019-03-18', 'JNE YES', 25000),
(222, '2019-03-18', 'JNE REG', 20000),
(223, '2019-03-19', 'JNE YES', 25000),
(224, '2019-03-19', 'JNE OKE', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `tglTransaksi` date DEFAULT NULL,
  `totalHarga` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`idBeli`),
  ADD KEY `id` (`jumlahBeli`),
  ADD KEY `idBarang` (`jasaPengiriman`),
  ADD KEY `idPengiriman` (`kota`),
  ADD KEY `idTransaksi` (`alamat`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`idPengiriman`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `idBeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `idPengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
