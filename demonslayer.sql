-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 12:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demonslayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `idartikel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`idartikel`, `judul`, `isi`) VALUES
(1, 'Hashira vs Crescent Moon', 'Baru - baru ini telah terjadi pertempuran sengit antara demon slayer dan demon di daerah kota purbalingga. Pada kejadian kemarin ini cukup menggemparkan karena serangan dari demon yang tidak terduga. Hashira ketujuh yang kebetulan sedang berada di Purbalingga berhasil menangani krisis disana dengan sangat cermat. Tetapi sayangnya kedatangan protagonis kita yaitu Tanjidor agak sedikit terlambat mengakibatkan Hashira Ke-Tujuh tewas terbunuh di tangan demon Bulan.'),
(2, 'IKAN RAKSASA DI BLATER MENGAMUK', 'Baru - baru ini telah terjadi pertempuran sengit antara demon slayer dan demon di daerah kota purbalingga. Pada kejadian kemarin ini cukup menggemparkan karena serangan dari demon yang tidak terduga. Hashira ketujuh yang kebetulan sedang berada di Purbalingga berhasil menangani krisis disana dengan sangat cermat. Tetapi sayangnya kedatangan protagonis kita yaitu Tanjidor agak sedikit terlambat mengakibatkan Hashira Ke-Tujuh tewas terbunuh di tangan demon Bulan.'),
(9, 'Muzan Telah Mati Selamanya', 'Muzan akhirnya telah berhasil dikalahkan oleh korps Demon Slayer dan Mentari telah terbit.'),
(10, 'Hashira Baru Telah Lahir Lagi', 'Manga ini diadaptasi menjadi sebuah seri anime yang diproduksi oleh Ufotable dan ditayangkan sejak bulan April hingga September 2019. Sekuel berupa film layar lebar diumumkan ketika episode terakhir disiarkan dan dijadwalkan untuk dirilis pada bulan Oktober 2020.'),
(11, 'Manga Demon Slayer Terbaru Laris!!', 'Per bulan Mei 2020, manga ini telah terjual sebanyak lebih dari 80 juta cetak dalam peredaran—termasuk versi digitalnya, dan membuatnya menjadi salah satu seri manga terlaris. Sementara itu, seri anime-nya telah menerima banyak penghargaan dan dianggap sebagai salah satu anime terbaik pada dekade 2010–an.');

-- --------------------------------------------------------

--
-- Table structure for table `karakter`
--

CREATE TABLE `karakter` (
  `idkarakter` int(11) NOT NULL,
  `namakarakter` varchar(50) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `biodata` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karakter`
--

INSERT INTO `karakter` (`idkarakter`, `namakarakter`, `cover`, `biodata`) VALUES
(1, 'Tanjiro  Kamado ', '1.png', 'Biodata\r\nUmur: 13 tahun (15 tahun pada episode 3) \r\nTanggal lahir: 14 Juli \r\nTinggi badan: 165 cm \r\n\r\nHidup Tanjiro berubah menjadi mimpi buruk ketika seorang iblis membantai seluruh keluarganya dan mengubah adiknya, Nezuko, ke sisi gelap. Terdorong amarah dan kasih sayangnya kepada saudara-saudaranya, Tanjiro bergabung Demon Slayer Corps untuk memberantas iblis. Dia juga berharap bisa mengembalikan Nezuko menjadi manusia lagi. \r\n\r\nTanjiro dikenal sebagai seorang yang hangat dan baik. Tapi, dia '),
(2, 'Nezuko Kamado', '2.png', 'Biodata\r\nUmur: 12 tahun (14 tahun pada episode 3) \r\nTanggal lahir: 28 Desember \r\nTinggi badan: 153 cm \r\n\r\nNezuko adalah salah satu karakter termuda di Demon Slayer. Dia baru berusia 12 tahun di awal cerita ketika dia berubah menjadi iblis. Beberapa episode kemudian, dia berusia 14 tahun. Tapi, secara fisik, dia tidak tumbuh besar setelah hari tragis itu. Itu adalah sesuatu yang tidak akan berubah sampai Tanjiro menemukan penawarnya. \r\n\r\nPerubahannya menjadi iblis secara alamiah mengubah kepribad'),
(3, 'Zenitsu Agatsuma', '3.png', 'Biodata\r\nUmur: 16 tahun \r\nTanggal lahir: 3 September \r\nTinggi badan: 164,5 cm \r\n\r\nZenitsu memang sedikit lebih tua ketimbang Tanjiro. Tapi, secara umum, Zenitsu tidak terlihat seperti itu karena disposisi alamiahnya adalah kabur. Meskipun tidak selalu memperlihatkannya, Zenitsu bukannya tidak mampu menggunakan senjata. Dia justru akrab dengan senjata sejak menjadi murid Jigoro Kuwajima. Zenitsu punya kulit cerah dan mata emas. Rambutnya kuning cerah—akibat tersambar petir—dengan potongan model m'),
(4, 'Inosuke Hashihira', '4.png', 'Biodata\r\nUmur: 15 tahun\r\nTanggal lahir: 22 April \r\nTinggi badan: 164 cm\r\n\r\nInosuke biasanya masuk pertarungan tanpa berpikir panjang. Meskipun sangat mampu merawat dirinya sendiri, kebiasaannya menilai kelebihan dirinya terlalu berlebihan biasanya membuatnya terlibat masalah. Khususnya, karena dia selalu ingin menantang siapa saja yang mungkin bisa mengunggulinya di pertarungan. \r\n\r\nInosuke dibesarkan babi hutan. Ini terefleksikan dengan pemilihan topeng yang dia kenakan. Latar belakang ini meng'),
(5, 'Kanao Tsuyuri', '5.png', 'Biodata\r\nUmur : 16 tahun\r\nTanggal lahir : 19 Mei\r\nTinggi badan : 156 cm\r\n\r\nKanao punya mata pink yang lebar dan rambut hitam tipis yang dikuncir ekor kuda. Kulitnya pucat. Masa kanak-kanak yang keras mengajari Kanao untuk benar-benar dekat dengan dirinya sendiri sebagai metode pertahanan diri. Untuk beberapa lama, Kanao tidak menunjukkan emosi.\r\n\r\nDia juga menolak untuk membuat keputusan untuk dirinya sendiri. Dia memilih meninggalkan masalah seperti itu kepada orang lain atau peluang. Di antara'),
(6, 'Genya Shinazugawa', '6.png', '#Biodata\r\nUmur: 16 tahun \r\nTanggal lahir: 7 Januari \r\nTinggi badan: 180 cm \r\n\r\nKarakter lain yang punya cerita latar tragis adalah Genya. Dia menyaksikan saudara-saudaranya dibunuh ibunya yang berubah menjadi iblis. Dia juga melihat satu-satunya kakaknya yang jadi penyintas, Sanemi, membunuh ibunya. \r\n\r\nMeskipun dia tidak bisa menggunakan Teknik Pernapasan, Genya adalah petarung kuat yang punya talenta menyerap kemampuan iblis. Sifat cepat marah Genya tidak membuatnya menjadi Demon Slayer termud'),
(7, 'Giyu Tomioka', '7.png', '#Biodata\r\nUmur: 19 tahun (21 tahun di episode 15) \r\nTanggal lahir: 8 Februari \r\nTinggi badan: 176 cm \r\n\r\nBukan orang yang banyak bicara, Giyu menjaga semuanya dekat dengan dadanya. Dia percaya kalau yang lain akan mengikutinya. Saat masih kecil, Giyu diselamatkan dari seorang iblis oleh kakaknya. Sayang, sang kakak tewas dan itu membuat Giyu frustrasi. Usaha Giyu untuk memberitahu orang-orang tentang apa yang terjadi, hanya membuatnya dikucilkan. Sebagai anggota senior Demon Slayer Corps, Giyu m'),
(8, 'Shinobu Kocho', '8.png', '#Biodata\r\nUmur: 18 tahun \r\nTanggal lahir: 24 Februari\r\nTinggi badan: 151 cm \r\n\r\nPada pandangan pertama, Shinobu terlihat seperti anggota Demon Slayer Corps yang paling ramah dan disukai. Dia selalu tersenyum dan sepertinya suka lelucon yang bagus. Tapi, ini hanya mekanisme pertahanan dirinya untuk menahan kebencian terhadap iblis akibat kematian kakaknya, Kanae Kocho. \r\n\r\nShinobu bisa kejam, baik dengan pedang dan kata-kata. Karakter Demon Slayer ini bisa turun dari prajurit terkuat menjadi lump'),
(9, 'Rengoku Kyojuro', '9.png', '#Biodata\r\nUmur: 20 tahun \r\nTanggal lahir: 10 Mei \r\nTinggi badan: 177 cm \r\n\r\nMenjadi pusat Demon Slayer: Kimetsu no Yaiba the Movie: Mugen Train, Kyojuro meledak ke adegan itu seperti bola api. Energik, menawan dan bersifat baik, Kyojuro punya kejujuran yang kurang dipunyai sebagian besar karakter di anime itu, selain Tanjiro. Optimisme Kyojuro bukanlah topeng untuk menutupi gejolak jiwanya atau cara untuk memikat orang masuk ke rasa aman yang salah. Dia adalah tipe orang yang mencari sisi positi'),
(10, 'Kagaya Ubuyashiki', '10.png', '#Biodata\r\nUmur: 23 tahun\r\nTanggal lahir: Tidak diketahui\r\nTinggi badan: Tidak diketahui\r\n\r\nKagaya Ubuyashiki adalah orang yang paling dihormati dan penting dalam Demon Slayer Corps karena dia adalah pemimpin korps tersebut saat ini. Bawahannya sangat menghormatinya dan memanggilnya dengan sebutan “Oyakata-sama”.\r\n\r\nDia juga menjadi kepala keluarga Ubuyashiki. Meskipun saat ini kondisinya lemah, dia pernah dikenal sebagai orang yang sangat kuat yang ditakuti. Saat ini Kagaya menjadi lemah karena '),
(11, 'Muzan Kibutsuji', '11.png', '#Biodata\r\nUmur: 10.000+ tahun \r\nTanggal lahir: Tidak diketahui \r\nTinggi badan: 179 cm\r\n\r\n Tokoh antagonis di Demon Slayer ini adalah salah satu karakter paling menarik di seluruh serial ini. Muzan mungkin tidak banyak tampil di anime ini. Tapi, sikap dinginnya seperti ketika dia menghancurkan sebagian besar letnan kuatnya cukup mengerikan untuk dilihat. \r\n\r\nKekuatan Muzan sepertinya sangat besar. Tidak ada yang benar-benar paham bagaimana Tanjiro dan anggota lain Demon Slayer punya kesempatan me'),
(12, 'Sakonji Urokodachi', '12.png', '#Biodata\r\nUmur:  52 tahun\r\nTanggal lahir: Tidak diketahui\r\nTinggi badan: 173 cm\r\n\r\nUrokodaki adalah salah satu hashira pertama yang kita kenal di serial anime Demon Slayer Kimetsu no Yaiba. Ia adalah sosok yang pernah menduduki posisi Hashira dengan teknik pernapasan air. Dia juga termasuk guru dari beberapa Pendekar Pedang seperti Giyu Tomioka, Sabito, Makomo dan Tanjiro, dan banyak murid lainnya\r\n\r\nTubuh Urokodaki sendiri terlihat tidak terlalu tinggi, dengan rambut yang berwarna putih seperti'),
(13, 'Tengen Uzui', '13.png', '#Biodata\r\nUmur: 23 tahun\r\nTanggal lahir: 31 October\r\nTinggi badan: 198 cm\r\n\r\nTengen Uzui adalah karakter Demon Slayer: Kimetsu no Yaiba yang menjadi karakter pendukung utamanya dan juga menjadi karakter utama di Arc Entertainment District. Karakter pria ini mempunyai tinggi badan 198 cm dan lahir pada tanggal 31 Oktober.\r\n\r\nTengen adalah mantan anggota Korps Demon Slayer, yang sebelumnya menjabat sebagai Hashira Suara. Pernapasan Suara adalah gaya pernapasan yang diciptakan sendiri oleh Tengen. '),
(14, 'Mitsuri Kanroji', '14.png', '#Biodata\r\nUmur: 19 tahun\r\nTanggal lahir: 1 Juni\r\nTinggi badan: 167 cm\r\n\r\nHashira Cinta dari Demon Slayer Corps ini memiliki sifat yang pemalu, lembut, dan ceria, tetapi sangat kuat karena memiliki otot yang lebih kuat dari manusia normal meski tubuhnya kurus.\r\n\r\nSebagai pengguna teknik Breath of Love, Kanroji menggunakan pedang unik yang hanya bisa ia gunakan. Pedangnya sangat tipis dan lembut, sehingga dirinya menggunakan pedangnya sebagai semacam cambuk.\r\n\r\n#Teknik Pernafasan\r\nTeknik Pernafasa'),
(15, 'Muichiro Tokito', '15.png', '#Biodata\r\nUmur: 14 tahun\r\nTanggal lahir: 8 Agustus\r\nTinggi badan: 160 cm\r\n\r\nMuichiro Tokito merupakan Hashira Kabut yang menggunakan gaya pernafasan Breath of Mist, yang merupakan variasi dari Breath of Wind. Karena telah menguasai gaya pernafasannya tersebut, ia bisa mengalahkan para iblis Upper Moon dengan mudah.\r\n\r\nMuichiro Tokito terlihat seperti orang yang dingin dan tidak peduli dengan keadaan di sekitarnya, tapi ternyata ia merupakan salah satu karakter terkuat dalam seri anime Kimetsu no'),
(16, 'Gyomei Himejima', '16.png', '#Biodata\r\nUmur:  26 tahun\r\nTanggal lahir: 23 Agustus\r\nTinggi badan: 203 cm\r\n\r\nHashira Batu, Gyomei Himejima ini merupakan karakter yang terlihat lemah tetapi ternyata sangatlah kuat. Jika Demon Slayer pada umumnya menggunakan pedang Nichirin, Gyomei malah menggunakan kapak tangan. Meskipun ia buta, Gyomei bisa mengkombinasikan kekuatannya dengan Breath of Stone. Sudah tidak diragukan lagi kalau Gyomei ini merupakan Hashira terkuat.\r\n\r\nBahkan Tanjiro dan Inosuke juga menganggap bahwa Gyomei adala'),
(17, 'Sanemi Shinazugawa', '17.png', '#Biodata\r\nUmur: 21 tahun\r\nTanggal lahir: 19 November\r\nTinggi badan: 179 cm\r\n\r\nSanemi Shinazugawa merupakan Hashira Angin yang sudah menguasai gaya pernafasan Breath of Wind. Bahkan iblis Upper Moon One yang telah hidup selama ratusan tahun juga terkesan dengan kekuatan yang dimiliki oleh Sanemi. Pastinya kekuatan yang dimiliki Sanemi ini sudah tidak bisa diragukan lagi.\r\n\r\nSanemi Shinazugawa merupakan karakter yang terlihat seperti berandalan karena cepat marah. Bahkan ketika pertama kali bertem'),
(18, 'Obanai Iguro', '18.png', '#Biodata\r\nUmur: 21 tahun\r\nTanggal lahir: 15 September\r\nTinggi badan: 162 cm\r\n\r\nObanai Iguro merupakan seorang Hashira Ular yang menggunakan kemampuan Serpent Breathing Style, sebuah teknik yang dikembangkan dari Water Breathing Style. Dirinya menggunakan senjata seperti keris untuk melancarkan serangannya.\r\n\r\nSebagai seorang Hashira, pastinya Obanai merupakan pendekar yang sangat terampil. Bahkan dirinya juga dapat bersaing dengan Muzan Kibutsuji karena teknik berpedangnya yang luar biasa.\r\n\r\n#T');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `level`) VALUES
(1, 'Achmad Aulia Difiputra', 'achmad29', 'achmad123', 'achmad@gmail.com', 'admin'),
(8, 'Rifqi Alrasid', 'Rifqi87', 'rifqi123', 'rifqi@gmail.com', 'admin'),
(9, 'Luthfi Emillulfata', 'fata', 'fata123', 'luthfi@gmail.com', 'admin'),
(10, 'Mutia Nandhika', 'nandhi', '78', 'nandhi@gmail.com', 'user'),
(11, 'Firda Salya Mutiara', 'alya', '12345', 'alya@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`idartikel`);

--
-- Indexes for table `karakter`
--
ALTER TABLE `karakter`
  ADD PRIMARY KEY (`idkarakter`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `idartikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `karakter`
--
ALTER TABLE `karakter`
  MODIFY `idkarakter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
