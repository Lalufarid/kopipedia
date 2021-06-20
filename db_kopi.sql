-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 09:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `notelpon` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `notelpon`, `alamat`) VALUES
(1, 'Agil Trieanto', '087765054511', 'jl.sunan kalijaga 2 no 9');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `isi_artikel` longtext NOT NULL,
  `gambar_artikel` text NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `gambar_artikel`, `id_admin`) VALUES
(1, 'Perbedaan Single Origin dan House Blend Yang Perlu Kamu Ketahui', 'Ketika pergi ke kedai kopi, tentu saja tidak hanya ke kedai kopi terdekat, hal yang seringkali ditemui pada umumnya adalah tulisan single origin dan house blend pada menu yang disuguhkan. Tentu Anda pernah mendengar istilah tersebut bukan? Dua istilah tersebut masih menjadi sebuah pertanyaan bagi beberapa orang yang baru mulai menikmati kopi.\r\n<br><br>\r\n<b>Apa itu single origin? Apa saya yang menjadi pembeda antara single origin dengan house blend?” </b>\r\n<br><br>\r\nJika Gordian mengunjungi kedai kopi, coba perhatikan di coffee bar. Di sana Anda akan melihat wadah biji kopi yang diberi nama beberapa daerah, seperti Aceh, Sidikalang, Lintong, Kintamani, Toraja, Wamena, dan beberapa daerah lainnya. Hal ini erat kaitannya dengan single origin. Umumnya, single origin adalah kopi yang berasal dari suatu wilayah atau daerah tertentu yang lebih spesifik. Hal ini akan memudahkan para penikmat kopi untuk mengetahui informasi kopi yang diminumnya.\r\n<br><br>\r\n<b>Single origin</b><br><br>\r\nDi era third wave ini, penikmat kopi tidak sekadar menikmati dan menilai kopi tersebut enak atau tidak saja, melainkan juga keingintahuan tentang daerah dan proses penanaman hingga pascapanen. Melalui single origin, daerah asal penanaman kopi pun dapat teridentifikasi. Masing-masing kopi single origin memiliki cita rasa khas tersendiri.\r\n<br><br>\r\nHal yang perlu diketahui bahwa single origin dan varietas adalah dua hal yang berbeda. Istilah single origin digunakan untuk memudahkan dalam mengidentifikasi kopi dengan menyebutkan daerah asal perkebunan kopi tersebut. Sedangkan, varietas merupakan klasifikasi tanaman kopi untuk menyebutkan subspecies dari bibit kopi yang ditanam. Rupanya, penamaan varietas beberapa ada yang menggunakan daerah asal kopi tersebut ditanam. Sehingga, hal ini menimbulkan kekeliruan.\r\nSelain single origin, kopi yang seringkali ditemukan di kedai kopi favorit atau kedai kopi terdekat adalah house blend. House blend ini merupakan kombinasi dari beberapa single origin yang berbeda. Kombinasi yang dilakukan bisa dua atau lebih. Salah satu rasa kopi house blend yang kerap diminum adalah rasa berries, seperti kopi yang dijual di website Kopipedia.\r\n<br><br>\r\n<b>House blend</b><br><br>\r\nBanyaknya kedai kopi di berbagai penjuru dunia maupun kedai kopi terdekat, umumnya memiliki menu house blend. House blend adalah kopi yang diracik dari berbagai jenis kopi, baik dari sisi daerah tertentu atau varietas. Namun, racikan house blend-nya tidak sama. Masing-masing kedai kopi memiliki resep tersendiri sebagai ciri khas.', 'artikel4.jpg', 1),
(2, 'Chemex dan V60, Sebuah Selera dalam Manual Brew', 'Ketika melakukan penyeduhan, Gordian bisa memulainya dengan mencium aroma yang dihasilkan dari kedua alat ini. Hasilnya, Chemex dapat menjaga aroma dan dapat berdampak pada ketebalan body dan tekstur yang jauh lebih halus jika dibandingkan dengan V60, karena memiliki diameter yang jauh lebih kecil. Sedangkan, hasil yang diberikan pada V60 yang harus menggunakan decanter atau coffee server secara terpisah, aromanya akan lebih banyak memuai dan hasil seduhannya lebih light.\r\n<br><br>\r\n<b>Apa saja kekurangan dari kedua alat tersebut?</b>\r\n<br><br>\r\nBegini, seperti yang Gordian ketahui bahwa Chemex memiliki desain yang jauh lebih fancy. Namun, perlu diketahui bahwa material yang digunakan terbuat dari kaca (full of glass), tentu saja berpotensi mudah pecah jika terjadi benturan keras. Maka dari itu, sangat dianjurkan untuk berhati-hati dalam menggunakan dan menyimpannya.\r\n<br><br>\r\nSedangkan, material yang digunakan oleh V60 ini memiliki 2 material. Ada yang terbuat dari keramik, dan ada yang terbuat dari plastik. V60 yang terbuat dari bahan keramik memiliki ketebalan yang jauh lebih tebal dari Chemex. Namun, hasil seduhan yang diperoleh tidak jauh lebih konsisten dari V60 yang terbuat dari plastik. Meski demikian, V60 yang terbuat dari bahan plastik ini kelamaan akan timbul stretch mark pada bagian kerucut. Tentu saja secara visual tidak lebih baik dari V60 berbahan keramik.\r\n<br><br>\r\n<b>Bagaimana dengan keunggulan masing-masing dripper?</b>\r\n<br><br>\r\nChemex memiliki keunggulan dari sisi praktis. Artinya, Gordian tidak perlu membeli decanter. Karena, bentuknya sengaja dirancang menyatu antara decanter dengan dripper. Ekstraksinya dapat menghasilkan sekitar 3-4 cangkir.\r\n<br><br>\r\nKemudian, untuk V60 memang harus menggunakan decanter yang bisa didapatkan secara terpisah. Ekstraksinya dapat menghasilkan 2-3 cangkir, tergantung ukurannya. Jika ukurannya kecil, akan menghasilkan 1-2 cangkir saja. Meski demikian, penggunaan V60 berbahan plastik akan jauh lebih konsisten.\r\n<br><br>\r\nMelihat perbandingan dari penggunaan kedua dripper tersebut, kira-kira alat apa yang akan Gordian pilih? Chemex atau V60? Atau bahkan keduanya? Semua kembali pada selera masing-masing. Karena, setiap alat memiliki proses seduh dan hasil yang berbeda.', 'artikel2.jpg', 1),
(3, 'Cara Menikmati Kopi Saat Mudik', 'Memasuki minggu terakhir puasa, kini masyarakat sibuk untuk mempersiapkan pulang ke kampung halaman masing-masing. Ya, mudik lebaran merupakan salah satu tradisi yang dilakukan setiap tahunnya. Maka, tidak heran jika arus mudik selalu ramai dibanjiri para pemudik, baik itu menggunakan transportasi darat, udara dan laut.\r\n<br><br>\r\nNamun, hal itu tidak menghalangi masyarakat untuk tetap meneruskan perjalanan mudiknya demi menikmati kehangatan bersama keluarga.  Kemacetan dan padatnya arus mudik lebaran memang dapat menimbulkan rasa jenuh bagi para pemudik. Bagaimana dengan para pecandu kafein yang sedang dalam perjalanan pulang ke kampung halaman?\r\n<br><br>\r\n<b>1.Menyeduh kopi filter di rest area</b><br><br>\r\nMembawa alat seduh kopi tidak selalu merepotkan. Kami sependapat dengan beberapa anggota grup Home Brewers Indonesia yang memilih membawa alat seduh kopi. Anda masih bisa menikmati kopi tanpa ampas ketika singgah di area, asalkan membawa kettle listrik, hand grinder dan biji kopi pilihan Anda. Akan lebih mudah lagi jika sudah menyiapkan stok kopi yang sudah digiling sesuai dengan takaran.\r\n<br><br>\r\n<b>2.Menikmati sensasi kopi tubruk</b><br><br>\r\nSelain kopi filter, Gordian juga bisa membuat kopi tubruk di rest area. Hal ini juga disebutkan oleh salah satu penikmat kopi yang tergabung dalam grup Home Brewers Indonesia bahwa menurutnya cukup untuk membawa biji kopi dan hand grinder.\r\n<br><br>\r\nDengan tools tersebut dan menuangkan air panas yang bisa Anda beli di warung sekitar rest area, maka Gordian dapat menyeduh kopi tubruk di rest area. Membuat kopi tubruk menjadi salah satu cara yang lebih sederhana dari membuat kopi filter seperti yang telah kami jelaskan sebelumnya. Perlengkapan yang dibutuhkan juga tidak sebanyak ketika membuat kopi filter menggunakan dripper.\r\n<br><br>\r\n<b>3.Melipir ke kedai kopi terdekat</b><br><br>\r\nTidak semua penikmat kopi yang kami tanyakan memilih untuk membawa alat seduh kopi ketika melakukan perjalanan pulang ke kampung halaman. Sebagian memilih untuk mampir ke kedai kopi terdekat yang dilewati selama perjalanan. Hal ini bisa dilakukan oleh siapapun tanpa harus melakukan persiapan menyeduh.\r\n<br><br>\r\nMenikmati secangkir kopi hitam dalam perjalanan adalah pilihan yang tepat. Sebuah penelitian yang dilakukan oleh Jaringan Hotel & Resort Le Meridien di Paris disebutkan bahwa kopi menjadi kebutuhan perjalanan seorang wisatawan. Alasannya, rata-rata seorang wisatawan mengkonsumsi kopi ketika berada di luar rumah. Kandungan kafein dalam secangkir kopi hitam dapat mempengaruhi aktivitas seseorang yang melakukan perjalanan.\r\n<br><br>\r\nSelanjutnya, masih dalam penelitian yang sama menunjukkan bahwa sebanyak 63 persen para penikmat kopi yang sedang melakukan perjalanan akan bereksperimen terhadap kopi lokal ketimbang mengonsumsi alkohol. Kopi yang berasal dari setiap daerah memiliki karakteristik rasa yang berbeda. Tak heran jika para penikmat kopi yang sedang melakukan perjalanan mampir sejenak ke kedai kopi terdekat yang dilewati.', 'artikel5.jpg', 1),
(4, 'Secangkir Kopi Kawa Daun Meninggalkan Kisah', 'Pernahkah Anda mendengar sajian kopi, namun bukan berasal dari kopi? Ya, sekilas terdengar aneh, namun ini dirasakan oleh masyarakat Minangkabau. Kopi tersebut dikenal sebagai kopi daun atau kawa daun. Bagi mereka, kopi kawa daun bukanlah wedang biasa. Tak hanya biji kopi pada umumnya, kopi kawa daun ini juga memiliki cerita tersendiri. Masyarakat Minangkabau tidak sekadar menikmati kopi dalam tiap seruputannya, melainkan mengingat kilas balik cerita dari kopi kawa daun.\r\n<br><br>\r\nCerita ini berkaitan erat dengan masa kolonial Belanda. Kala itu, Sumatera Barat merupakan salah satu wilayah yang memiliki perkebunan kopi yang luas. Seluruh biji kopi yang ditanam oleh para petani lokal di tanah Sumatera kala itu dikirim ke Belanda.\r\n<br><br>\r\nApakah para petani lokal mendapatkan bagian? Semua biji kopi hasil panen diserahkan ke Belanda. Mereka hanya melakukan sesuai yang diperintahkan kolonial Belanda yang mana pada waktu itu merupakan sistem tanam paksa, namun masyarakat kelas bawah tidak mendapat bagian kopi. Keinginan masyarakat Minangkabau saat itu untuk menikmati secangkir kopi harus dipendam. Namun, akhirnya mereka menemukan cara untuk menyiasatinya, penduduk meracik secangkir kopi dengan menggunakan daun kopi. Sehingga, dari kurun waktu ke waktu, minum kopi dari daun kopi adalah budaya yang kerap dijaga hingga saat ini. Dulu, hampir seluruh masyarakat di Minangkabau memiliki kebun kopi hingga 3 hektar per keluarga.\r\n<br><br>\r\nUntuk menikmati secangkir kopi kawa daun, petani kopi memilih daun kopi yang terbaik. Daun kopi kemudian diseduh dengan ditambahkan gula tebu. Dalam keadaan panas, kopi dituang ke dalam wadah yang dibuat dari batok kelapa yang dibelah menjadi dua bagian, kemudian ditambahkan potongan bambu sebagai tatakan wadah. Ini menjadi salah satu cara menikmati kopi daun. Hal tersebut pun atas dasar filosofi kehidupan masyarakat Minangkabau saat itu yang kehidupannya serba susah, tidak ada gelas kaca, maupun gula pasir. Warung kopi kawa daun saat ini mudah ditemui di area Kota Padang, tepatnya di sepanjang perjalanan dari Batusangkar menuju Kota Bukittinggi.\r\n<br><br>\r\n<b>Bagaimana Cara Meraciknya?</b>\r\n<br><br>\r\nTidak seperti kopi pada umumnya yang perlu dilakukan pengolahan pasca panen, kopi kawa daun ini memiliki cara pengolahan yang berbeda. Untuk menyeduh kopi tersebut, dibutuhkan daun kopi berwarna kekuning-kuningan (hampir gugur). Setelah melalui proses pemetikan daun, maka dilakukan pengeringan di bawah sinar matahari sekitar 1 jam. Setelah itu, daun kopi yang sudah dikeringkan tersebut dapat dikeringkan di atas tungku perapian.\r\n<br><br>\r\n<i>“Lho, kok dikeringkan lagi? Apakah tidak cukup sekali saja?”</i><br><br>\r\nTidak, karena jika daun kopi tersebut langsung dikeringkan di atas perapian, maka cita rasa yang dihasilkan akan berbeda. Ketika daun kopi dikeringkan di atas tungku perapian, diharapkan tidak dilakukan begitu lama. Hal tersebut dilakukan agar daun kopi dapat disimpan untuk beberapa hari kedepan. Ketika ingin diseduh, daun kopi tersebut harus dalam keadaan kering seperti bubuk teh.\r\n<br><br>\r\nCara penyajian kopi kawa daun ini juga terbilang unik. Kala itu penduduk lokal yang ingin menikmati kopi kawa daun layaknya menikmati secangkir soju Korea. Bagaimana tidak, kopi yang baru saja dituang ke dalam wadah batok harus habis dalam satu tegukan. Jika Anda kurang suka dengan rasa original, Anda dapat meminta tambahan susu kepada penjaja kopi kawa daun.', 'artikel3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(20) NOT NULL,
  `nama_brand` varchar(50) NOT NULL,
  `deskripsi_brand` longtext NOT NULL,
  `gambar_brand` varchar(255) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `nama_brand`, `deskripsi_brand`, `gambar_brand`, `id_admin`) VALUES
(1, 'Anomali', 'Berdiri sejak 2007 sebagai perusahaan roaster kopi spesial yang menandakan kualitas kopi premium dalam tiap seduhannya. Anomali Coffee menawarkan berbagai biji kopi dari seluruh Indonesia, seperti Aceh Gayo; Toraja; Sumatera; Flores; Bali; serta Java Gunung Halu. Dengan setia, Anomali Coffee tetap menjaga konsistensinya untuk mempromosikan biji kopi Indonesia, serta berbagi pengalaman dan pendidikan cara mengolah kopi spesialisasi Indonesia sebagai salah satu warisan Indonesia.', 'anomalia.jpg', 1),
(2, 'Dua Coffee', 'Dua coffee didirikan oleh dua teman lama yang melihat kesempatan untuk membangun sebuah kedai kopi khusus berdasarkan kecintaan mereka pada kopi, mereka mulai belajar lebih banyak tentang kopi dan juga mengenal petani. ', 'dua-coffee.png', 1),
(3, 'HaloKoffi', 'Halokoffi roastery adalah sebuah coffee roaster yang memiliki misi kualitas dan konsistensi roasting adalah hal yang utama. Selalu menggunakan biji kopi segar berkualitas dan dengan grade biji kopi terbaik yang membuat roasted bean yang diproduksi akan optimal.', 'halokoffi.jpg', 1),
(4, 'Hungry Bird', 'Didirikan pada tahun 2013, roastery yang terletak di Canggu ini mengintegrasikan keindahan alam pulau Bali dengan hasrat untuk memberikan kualitas kopi terbaik kepada seluruh pecinta kopi baik di Bali maupun diseluruh Indonesia. Hungry Bird Coffee Roaster bekerja bersama petani-petani lokal untuk memastikan bahwa sistem Fair Trade terus disupport bersama.', 'hungry-bird-logo.png', 1),
(5, 'Northsider', 'Northsider adalah sebuah artisan coffee roaster yang memiliki misi kualitas dan konsistensi roasting adalah hal yang utama. Selalu menggunakan biji kopi segar berkualitas dan dengan grade biji kopi paling tinggi yang biasa disebut  specialty membuat roasted bean yang diproduksi akan optimal.', 'northsider.png', 1),
(6, 'Otten', 'Perjalanan Otten Coffee bermula pada 2008 yang didukung dari kecintaan kami terhadap kopi. Kami gemar bereksperimen mengenai kopi dan mengoleksi beragam alat kopi untuk hobi. Berdasarkan minat dan kecintaan yang besar ini akhirnya kami memutuskan untuk membuka toko kopi offline untuk memenuhi kebutuhan para pecinta kopi pada 2012.\r\nOtten Coffee telah berdiri sebagai toko yang menjual kopi dan alat kopi. Tak puas sampai di sana kami pun mulai menyangrai sendiri biji kopi yang kami dapatkan dari rekan-rekan petani di seluruh Indonesia. Untuk kami kualitas biji kopi adalah kunci utama dari sebuah kenikmatan. Oleh karena itu, kami sangat berhati-hati dalam memilih biji kopi, menyangrainya dengan ketelitian penuh dan dengan segar menghadirkannya untuk semua penikmat kopi', 'otten.jpg', 1),
(7, 'Sentra Kopi', 'Sentra Kopi adalah toko kopi online, supplier cafe untuk coffee shop, dan distributor dari Kopi Nusantara Indonesia yang menjual berbagai produk kopi terbaik nusantara secara eceran dengan harga grosir dan murah. Berbagai jenis kopi, aksesoris, dan peralatan mesin kopi (coffee machine) juga ada disini dengan harga termurah.', 'sentra-kopi.png', 1),
(9, 'Summerfield', 'Summerfield coffee roastery adalah produk kopi premium dari amygold organics manufacturing yang berpusat di daerah industri Namorambe, Medan Sumatera Utara. Summerfield coffee roastery menyediakan berbagai jenis kopi Indonesia kualitas internasional, dan disangrai oleh roaster profesional.', 'summerfield.jpg', 1),
(10, 'Sunset Lotus Coffee', 'Sunset Lotus Coffee merupakan Industrial Coffee Roaster yang menyediakan kopi domestik premium high-end. Melalui proses roasting yang sangat merata dan sempurna sehingga menghasilkan aroma dan rasa yang maksimal.', 'sunset-lotus-coffee.png', 1),
(11, 'Two Hands Full', 'Two Hands Full Coffee (THF) hadir di tengah meriahnya perkembangan kopi di Bandung. THF ingin mendeskripsikan kopi melalui secarik kartu berisikan catatan rasa kopi di setiap cangkir kopi. Berlokasi di Jalan Sukajadi No. 206, Bandung Utara.', 'thf.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `id_kopi` int(11) NOT NULL,
  `nama_kopi` varchar(100) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `harga_kopi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `invoice`
--
DELIMITER $$
CREATE TRIGGER `pesanan_kopi` AFTER INSERT ON `invoice` FOR EACH ROW BEGIN 
	UPDATE kopi SET stock_kopi = stock_kopi-NEW.jumlah
    WHERE id_kopi = NEW.id_kopi;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id_kopi` int(100) NOT NULL,
  `nama_kopi` varchar(100) NOT NULL,
  `berat_kopi` int(100) NOT NULL,
  `variasi_kopi` varchar(100) NOT NULL,
  `rekomendasi_seduh` varchar(100) NOT NULL,
  `karakter_rasa` text NOT NULL,
  `tingkat_roasting` varchar(100) NOT NULL,
  `stock_kopi` int(10) NOT NULL,
  `harga_kopi` int(100) NOT NULL,
  `gambar_kopi` varchar(255) NOT NULL,
  `id_brand` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id_kopi`, `nama_kopi`, `berat_kopi`, `variasi_kopi`, `rekomendasi_seduh`, `karakter_rasa`, `tingkat_roasting`, `stock_kopi`, `harga_kopi`, `gambar_kopi`, `id_brand`) VALUES
(1, 'Jawa Ijen', 100, 'Biji', 'Cafflano Kompact/Dripper/Plunger', 'Fruity Apple,Brown Sugar,Hints of Caramel', 'Medium Roast', 5, 55000, 'jawa ijen100.jpg', 1),
(2, 'Toraja', 100, 'Biji', 'Aeropress/Cafflano Kompact/Plunger', 'floral aroma rasa jeruk, herbal dan choco.', 'Medium Roast', 5, 55000, 'toraja100.jpg', 1),
(3, 'Sumatra Kerinci', 100, 'Biji', 'Cafflano Kompact/Plunger', 'Fruity Melon,Dark Chocolate,Hints of Sweet Candy', 'Light Roast', 5, 55000, 'sumatra kerinci coffee100.jpg', 1),
(4, 'Aceh Gayo Coffee', 200, 'Biji', 'Aeropress/Cafflano Kompact/Dripper/Plunger', 'spicy aroma and dark choco flavor with sugar cane, full body with acid light.', 'Medium Roast', 5, 110000, 'aceh gayo coffe200.jpg', 1),
(5, 'Bali Kintamani Coffee', 200, 'Biji', 'Cafflano Kompact/Dripper/Plunger', 'Orange,Vanilla,Dark Chocolate', 'Light Roast', 5, 110000, 'bali kintamani200.jpg', 1),
(6, 'Black Pearl', 200, 'Biji', 'Dripper/Plunger/Cafflano Kompact ', 'Fruity Apple,Brown Sugar,Hints of Caramel', 'Medium Roast', 5, 110000, 'blackpearl200.jpg', 1),
(7, 'Jawa Cikuray Coffee', 200, 'Biji ', 'Pour Over/ Dripper', 'Honey, Peach, and hints of blueberry', 'Medium Roast', 5, 110000, 'jawa cikuray200.jpg', 1),
(8, 'Arabica Ethiopia Guji Shakiso Washed', 200, 'Biji', 'Filter/Cold brew/tubruk', 'Peach,Lime,Floral,Tea like,Smooth Body with Mid Acidity and Sweet', 'Light Roast', 5, 120000, 'BIJI KOPI ARABICA ETHIOPIA GUJI SHAKISO WASHED - 200GR1.jpg', 5),
(9, 'Arabica Ethiopia Sidamo Natural', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Fruity,Sweet Citrus,Floral Tunes,Berry like.', 'Medium Roast', 5, 120000, 'BIJI KOPI ARABICA ETHIOPIA SIDAMO NATURAL - 200GR1.jpg', 5),
(10, 'Arabica Kenya Blackcurrant', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Blackcurrant,Blueberry,Blackberry,Dark Chocolate,Floral', 'Medium Light Roast', 5, 120000, 'BIJI KOPI ARABICA KENYA AA BLACKCURRANT - 200GR1.jpg', 5),
(11, 'Arabica Aceh Gayo Semiwashed', 200, 'Biji', 'Filter/Cold brew/Espresso/Blend/Tubruk', 'Dry Fruit,Spicy,Grape', 'Medium Roast', 5, 120000, 'BIJI KOPI ARABIKA ACEH GAYO SEMIWASHED - 250GR1.jpg', 5),
(13, 'Bali Kintamani', 200, 'Biji', 'Filter/Cold brew/manual brew', 'JackFruit, Fruity,Citrus,Nutty', 'Light Roast', 5, 120000, 'BIJI KOPI ARABIKA BALI KINTAMANI NATURAL - 250GR1.jpg', 5),
(14, 'Arabica Taneuh Sunda', 200, 'Biji', 'Filter/Cold brew', 'Mango Taste, Fruity, Sweetness', 'Light Roast', 5, 120000, 'BIJI KOPI ARABIKA AROMANIS NATURAL - 200GR1.jpg', 5),
(15, 'Arabica Aceh Gayo Atu Lintang', 200, 'Bubuk', 'Filter/Manual Brew /Cold brew', 'Syrupy Body, Low Acidity with Chocolate, Black Cherry, Earthy', 'Medium Roast', 5, 65000, 'Otten Coffee Arabica Aceh Gayo Atu Lintang 200g.jpg', 6),
(16, 'Arabica Aceh Gayo Honey', 200, 'Bubuk', 'Filter/Manual Brew /Cold brew', 'Syrupy Body, Fruity, Chocolate Flavor, Black Cherry', 'Light Roast', 5, 65000, 'Otten Coffee Arabica Aceh Gayo Honey Process 200g.jpg', 6),
(17, 'Arabica Bali Natural', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Cherry, chocolate, brown-sugar sweetness, floral aroma and medium bodied', 'Medium light roast', 5, 65000, 'Otten Coffee Arabica Bali Natural Process 200g.jpg', 6),
(18, 'Arabica Flores Bajawa', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Full intense body, Low acid, Sweet caramel flavours, cherry and blueberry in aroma and cup', 'Light Roast', 5, 65000, 'Otten Coffee Arabica Flores Bajawa 200g.jpg', 6),
(19, 'Arabica Flores Bajawa Honey ', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Medium Body, Orange, Nutty', 'Light Roast', 5, 65000, 'Otten Coffee Arabica Flores Bajawa Honey Process 200g.jpg', 6),
(20, 'Arabica Flores Manggarai Honey', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Intense sweetness (palm sugar), mango.', 'Light Roast', 5, 65000, 'Otten Coffee Arabica Flores Manggarai Honey Process 200g.jpg', 6),
(21, 'Arabica Garut Natural', 200, 'Baji', 'Filter/Manual Brew /Cold brew', 'Chocolate, Blueberry, Clean Flavours, Grapefruit, Grenadine, Tropical Fruit, Fresh Tobacco', 'Light Roast', 5, 65000, 'Otten Coffee Arabica Garut Natural Process 200g.jpg', 6),
(22, 'Aceh Gayo Arabica ', 200, 'Biji', 'Filter/Cold brew/Espresso/Blend/Tubruk', 'Red Rubby Grapefruit, Sweet floral, winey acidity', 'Medium Dark Roast', 5, 65000, 'Aceh Gayo Arabica 200 Gram.jpg', 7),
(23, 'Arabika Gayo Wine', 200, 'Biji', 'Filter/Cold brew/Espresso/Blend/Tubruk', 'Red Rubby Grapefruit, Sweet floral, winey acidity', 'Medium Roast', 5, 65000, 'Arabika Gayo Wine 200 Gr.jpg', 7),
(24, 'Arabika Malabar Natural', 200, 'Biji', 'Filter/Cold brew/Espresso/Blend/Tubruk', 'Jackfruit, chocolaty, sweet', 'Medium Roast', 5, 65000, 'Arabika Malabar Natural 200 Gr.jpg', 7),
(25, 'Arabika Sidikalang', 200, 'Biji', 'Filter/Cold brew/Espresso/Blend/Tubruk', 'Chocolaty, Mild, Nutty', 'Medium Roast', 5, 65000, 'Arabika Sidikalang 200 Gram.jpg', 7),
(26, 'Bali Kintamani Arabica', 200, 'Biji', 'Filter/Cold brew/Espresso/Blend/Tubruk', 'Medium Body, Orange, Nutty', 'Medium Dark Roast', 5, 65000, 'Bali Kintamani Arabica 200 Gram.jpg', 7),
(27, 'Arabika Flores Bajawa', 200, 'Biji', 'Filter/Cold brew/Espresso/Blend/Tubruk', 'nutty, chocolaty, floral, citrus', 'Medium Roast', 5, 65000, 'Kopi Arabika Flores Bajawa 200 Gram.jpg', 7),
(28, 'Kopi Arabika Papua Wamena', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Honey, Herbal, Mild Floral', 'Medium', 5, 70000, 'Kopi Arabika Papua Wamena.jpg', 9),
(29, 'Kopi Flores Bajawa', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Bittersweet Chocolate, Caramel, Mild Blueberry', 'Medium Roast', 5, 70000, 'Kopi Flores Bajawa.jpg', 9),
(30, 'Kopi Gayo Arabika', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Sweet Nutty, Light Spicy, Black Cherry', 'Medium Roast', 5, 70000, 'Kopi Gayo Arabika.jpg', 9),
(31, 'Kopi Lintong Arabika', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Fresh Earthy, Medium Acidity, Dark Chocolate', 'Medium Roast', 5, 70000, 'Kopi Lintong Arabika.jpg', 9),
(32, 'Kopi Mandailing Arabika', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Earthy, Nutty, Herbal, Sweet Chocolaty', 'Medium Roast', 5, 70000, 'Kopi Mandailing Arabika.jpg', 9),
(33, 'Kopi Robusta Solok', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Cedar Wood, Nutty, Mild Earthy', 'Medium Roast', 5, 70000, 'Kopi Robusta Solok.jpg', 9),
(34, 'Kopi Peaberry', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Sweet, Rich Aromatic, Nutty, Light Spicy, Black Cherry', 'Medium Roast', 5, 70000, 'peaberry.jpg', 9),
(35, 'Kopi Toraja', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Sweet Spicy, Light Citrus, Dark Chocolaty, Fruity', 'Medium Roast', 5, 70000, 'toraja.jpg', 9),
(36, 'Kopi Arabika Aceh Gayo ', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Black Cherry, Chocolatey, Mild Spicy', 'Medium Roast', 5, 55000, 'Kopi Arabika Aceh Gayo 250g.jpg', 10),
(37, 'Kopi Arabika Flores Bajawa', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Dark Chocolatey, Mild Earthy, Mild Blueberry', 'Medium Roast', 5, 55000, 'Kopi Arabika Flores Bajawa 250g.jpg', 10),
(38, 'Kopi Arabika Gayo Longberry', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Black Cherry, Blueberry, Mild Spicy', 'Medium Roast', 5, 55000, 'Kopi Arabika Gayo Longberry 250g.jpg', 10),
(39, 'Kopi Arabika Gayo Peaberry', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Black Cherry, Chocolatey, Mild Spicy', 'Medium Roast', 5, 55000, 'Kopi Arabika Gayo Peaberry 250g.jpg', 10),
(40, 'Kopi Arabika Gayo Wine', 200, 'Biji', 'Filter/Manual Brew /Cold brew', ' Red Winey, Sweet Grapey, Mild Plum', 'Medium Roast', 5, 55000, 'Kopi Arabika Gayo Wine 250g.jpg', 10),
(41, 'Kopi Arabika Lintong ', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Herby, Mild Spicy', 'Medium Roast', 5, 55000, 'Kopi Arabika Lintong 250g.jpg', 10),
(42, 'Kopi Arabika Mandailing', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Earthy, Mild Spicy, Chocolatey', 'Medium Roast', 5, 55000, 'Kopi Arabika Mandailing 250g.jpg', 10),
(43, 'Ethiopia Qore Warqee', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Apricot, Peach, Chocolate', 'Light Roast', 5, 135000, 'Ethiopia Qore Warqee.png', 11),
(44, 'Honduras Caballero La Isabel', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Dark Red Fruits, Almond, Molasses', 'Light Roast', 5, 135000, 'Honduras Caballero La Isabel.png', 11),
(45, 'Honduras Caballero La Pedro', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Dark Red Fruits, Almond, Molasses', 'Light Roast', 5, 135000, 'Honduras Caballero La Pedro.png', 11),
(46, 'Java Frinsa Ateng Super Washed', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'White Peony, Tamarind, Sugar Cane', 'Light Roast', 5, 135000, 'Java Frinsa Ateng Super Washed.png', 11),
(47, 'Java Frinsa Sigararutang Lactic', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Pineapple, Chocolate, Dark Cherry', 'Light Roast', 5, 135000, 'Java Frinsa Sigararutang Lactic.png', 11),
(48, 'Kerinci Semurup Natural Wet Hulled', 200, 'Biji', 'Filter/Manual Brew /Cold brew', 'Coconut Sugar, Lime, Red Fruits', 'Light Roast', 5, 135000, 'Kerinci Semurup Natural Wet Hulled.png', 11);

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

CREATE TABLE `panduan` (
  `id_panduan` int(11) NOT NULL,
  `judul_panduan` text NOT NULL,
  `isi_panduan` longtext NOT NULL,
  `gambar_panduan` text NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panduan`
--

INSERT INTO `panduan` (`id_panduan`, `judul_panduan`, `isi_panduan`, `gambar_panduan`, `id_admin`) VALUES
(1, 'Cara Seduh Kopi V60', 'Metode ini termasuk manual brew karena seluruh proses penyeduhan kopi dilakukan dengan tenaga atau tangan manusia. Teknik manual brew sendiri memiliki bermacam-macam tipe berdasarkan proses ekstrak kopinya. V60 ini termasuk dalam kategori pour over, yaitu penyeduhan dengan mengalirkan air panas pada bubuk kopi di atas filter.\r\n<br>\r\nCara seduh kopi V60 sebenarnya lahir karena diciptakannya alat seduh atau biasa disebut dripper pada tahun 2004 silam. Penciptanya adalah perusahaan asal Tokyo, Jepang bernama Hario. Nama V60 dipilih karena bentuknya menyerupai huruf <i> “v”</i> dengan sudut 60°.\r\n<br>\r\nMetode seduh kopi ini berpangkal pada tetes demi tetes bubuk kopi yang diseduh perlahan. Untuk itu, V60 membutuhkan kertas penyaring atau filter.\r\n<br>\r\nOleh karena cara membuat kopi V60 mengandalkan seduhan yang perlahan, gunakan ketel leher angsa atau gooseneck kettle agar penuangan air bisa konstan. Jika Anda tidak memilikinya, bisa gunakan ketel lain asalkan lehernya menyempit sehingga air dapat tertuang secara konstan dan perlahan.\r\n<br>\r\nSatu lagi yang tak kalah penting adalah timbangan. Alat ini bisa memberikan takaran lebih akurat daripada hanya mengira-ngira saja.\r\n<br>\r\nPertama, siapkan dahulu 15 gram biji kopi dan giling ukuran kasar. Siapkan pula air panas bersuhu kira-kira 90 °C. Jika Anda tidak punya termometer, diamkan air yang telah mendidih selama kurang lebih dua menit.\r\n<br>\r\nBerikut cara membuat kopi V60 yang enak:\r\n<br>\r\n<b>\r\n1.Siapkan gelas dengan V60 dripper dan filter di atasnya.\r\n<br>\r\n2.Basahi filter dengan air panas, dan buang air bekasnya.\r\n<br>\r\n3.Masukkan bubuk kopi pada dripper.\r\n<br>\r\n4.Seduh dengan gerakan memutar secara konstan dan perlahan.\r\n<br>\r\n5.Tuangan pertama untuk blooming, proses mengeluarkan karbondioksida. Tuang \r\n hingga timbangan menunjukkan 30 ml, tunggu 45 detik.\r\n<br>\r\n6.Tuangan kedua untuk mendapatkan keasaman. Tuang hingga 80 ml, tunggu 45 detik.\r\n<br>\r\n7.Tuangan ketiga untuk mendapat body. Tuang hingga 150 ml, tunggu 30 detik.\r\n<br>\r\n8.Tuangan terakhir, hingga 195 ml.\r\n<br>\r\n9.Sebelum tetesan berhenti, angkat agar seduhan yang terakhir tidak ikut tercampur.</b>', 'v60.jpg', 1),
(2, 'Cara Cupping Kopi Di Rumah', 'Mencoba cupping sebenarnya tidak sesulit yang selama ini dibayangkan. Penggemar kopi awam pun bisa mencobanya sendiri di rumah.\r\n<br>\r\nApa rahasia para cupper professional bisa memiliki kemampuan menyelidiki rasa sedemikian mengagumkannya? Bukan pada cupping bowls atau sendok cupping mahal yang mereka miliki, tapi pada frekuensi latihan demi latihan yang telah mereka lakukan. Para awalnya para cupper atau taster kopi ini pun mungkin saja pernah salah menganalisa, tapi berbagai percobaan dan proses menjadikan mereka ahli. Seperti kata pepatah lawas, “Practice makes perfect”. Kita pun bisa mencoba tasting atau cupping sendiri di rumah, kuncinya hanya fokus dan “berkonsentrasi dengan apa dirasakan”.\r\n<br><br>\r\nSimak 7 langkah mencoba cupping di rumah berikut ini:\r\n<br>\r\n<b>1. Menyiapkan single origin</b>\r\n<br>\r\nSebaiknya membeli 2 atau 3 kopi single origin yang berbeda. Sebelumnya kami sudah pernah membahas konsep tentang single origin di sini. Dan akan lebih baik pula untuk bertanya kepada roaster kopi lokal atau specialty shop tempat Anda membeli kopi jika ingin mendapatkan semacam “pencerahan” tentang ini. Membeli lebih dari satu single origin adalah perlu untuk membuat perbandingan rasa. Kita tidak bisa membedakan rasa jika tidak ada komponen untuk dibedakan, ‘kan?\r\n<br><br>\r\n<b>2. Menyiapkan wadahnya</b>\r\n<br>\r\nTidak perlu menyiapkan jauh sampai ke alat-alat cupper professional dulu—kecuali Anda memang memiliki budget khusus untuk ini. Namun, cara sederhananya, kita bisa memulainya dengan French press. Anda bisa membeli 2-3 French press. Bisa yang berukuran kecil saja untuk menghindari banyaknya kopi yang mungkin terbuang dan mencegah kamu meminum terlalu banyak kopi. :p\r\n<br><br>\r\n<b>3. Menyeduh</b>\r\n<br>\r\nSeduh kopi dengan French press. Biarkan kopi dingin sejenak karena akan lebih mudah mengenali rasa pada kopi yang hangat ketimbang panas.\r\n<br><br>\r\n<b>4. Mulailah mengobservasi rasa</b>\r\n<br>\r\nSetelahnya coba rasakan kopi-kopi yang diseduh itu secara bergantian. Sesap sekali atau dua kali pada satu kopi sebelum beralih ke kopi yang lain. Pada saat disesap, coba pikirkan apa rasa kopi itu jika dibandingkan dengan yang lain.\r\n<br><br>\r\n<b>5. Fokus</b>\r\n<br>\r\nFokuslah pada tekturnya dulu. Misalnya apakah kopi yang satu lebih kerasa lebih ‘penuh’ dibandingkan kopi yang lainnya? Apakah yang satu lagi lebih kerasa sweetness-nya dibandingkan yang lain, dan seterusnya. Jangan lihat label atau flavor notes yang ada di kemasan kopi dulu, tapi cobalah untuk menulis karakter dan rasa yang Anda dapatkan berdasarkan pengalaman personal tadi.\r\n<br><br>\r\n<b>6. Nggak usah <i>‘khawatir’</i>  sama flavor-nya</b>\r\n<br>\r\nFlavor atau rasa kopi konon merupakan hal yang paling mengintimidasi dalam proses tasting sekaligus yang paling bikin frustasi. Seorang Roaster umumnya menggunakan unsur flavors ini untuk menjelaskan bukan hanya karakter yang paling dominan saja (seperti ‘nutty’ atau ‘floral’), tapi juga untuk menguraikan rentang rasanya yang beragam. Misalnya, jika ada catatan tentang ‘ripe apple’ pada sebuah single origin maka harusnya itu sudah bisa memberi gambaran bahwa kopi itu juga memiliki sweetness dan acidity sekaligus. Agak rumit memang. Tapi tidak apa-apa, hal ini bisa dipelajari seiring dengan semakin banyaknya latihan. Jika sudah merasakan kedua single origin kopi yang dicoba tadi, coba tuliskan karakter yang Anda rasakan dalam catatan khusus sendiri. Tidak usah khawatir soal benar atau salahnya. Apa pun karakter yang terpikirkan saat itu, cobalah untuk menuliskannya.\r\n<br><br>\r\n<b>7. Bandingkan</b>\r\n<br>\r\nSetelah selesai, bandingkan apa yang telah Anda tulis dengan deskripsi yang ada dalam paket single origin yang dibeli. Sesuai atau tidak? Kalau pada langkah sebelumnya tadi, Anda mungkin kebingungan bagaimana mendeskripsikannya secara tepat. Dengan membaca flavor notes yang ada dalam paket single origin itu sedikitnya mungkin akan membantu. Sekaligus menambah daftar rasa pada kamus Anda.\r\n<br><br>\r\n<strong><center>Selamat mencoba cupping di rumah.</center></strong>', 'cupping.jpg', 1),
(3, 'Cara Seduh Kopi Dengan Menggunakan Kalita Wave', 'Kalita Wave adalah salah satu alat seduh kopi yang cukup hits di Jepang. Jika anda penggemar metode seduh pour over, anda wajib mencobanya. Kalita Wave diproduksi oleh Kalita Co., sebuah perusahaan milik keluarga asal Jepang yang telah turun temurun membuat peralatan kopi sejak tahun 1950.\r\n<br><br>\r\nAlat seduh kopi Kalita Wave terbuat dari beberapa material antara lain kaca, stainless, dan keramik.  Kalita Wave mengambil bentuk dasar bulat dengan adanya tiga lubang sekitar 2mm yang memiliki formasi segitiga. Menurut para pengamat kopi, bentuk lingkaran dan jumlah lubang tersebut akan lebih meratakan ekstraksi.\r\n<br><br>\r\nDripper Kalita Wave digunakan dengan cara menuangkan atau meneteskan air di atasnya, mirip dengan Chemex atau Hario V60. Namun Kalita Wave memiliki konfigurasi ekstraksi yang sangat berbeda. Alih-alih air menetes melalui lubang tunggal, ia memiliki dasar datar dengan tiga lubang ekstraksi. Alat ini mengeluarkan air dari semua saluran dasarnya, menghasilkan secangkir kopi yang sangat tajam. Dripper juga sedikit bersentuhan dengan saringan membuat suhu lebih konsisten dan bahkan mendistribusikan air lebih merata.\r\n<br><br>\r\nCara menggunakan alat seduh kopi Kalita Wave mirip dengan alat seduh kopi V60. Alat ini memakai kertas filter untuk menyaring ampas kopi. Namun bentuk kertas filter-nya berbeda yakni bergelombang seperti bolu kukus. Bedanya dengan V60, Kalita Wave sedikit lebih lambat dalam proses penyeduhan karena pengaruh bentuk dasarnya. Jadi anda harus sedikit bersabar ketika ingin menikmati kopi.\r\n<br><br>\r\nAlat seduh kopi asal Jepang ini memang cukup populer bahkan sampai di Indonesia. Di antara beberapa alat seduh kopi yang ada, Kalita Wave untuk saat ini menjadi salah satu alat seduh yang filter-nya mahal. Tapi bagi para penikmat kopi tentu saja rela mengelurkan biaya demi kesenangan dan kenikmatan yang tercipta dari alat seduh kopi Kalita Wave.\r\n<br><br>\r\nKalita Wave ini mudah ditemukan di kedai-kedai di Indonesia. Anda tinggal meminta pada barista untuk metode seduh menggunakan alat ini. Anda pun bisa membawanya pulang ke rumah karena tidak sulit membelinya di toko-toko penyedia alat kopi. Alat seduh ini sangat cocok untuk minum kopi di mana pun Anda berada. Anda dapat mengulik Kalita Wave untuk mendapatkan ekstraksi yang tepat sesuai keinginan Anda. Anda bisa memainkan grind size, panas air, dan rasionya. Kemudian mencicipi hasil kopi buatan Anda bersama orang terdekat.\r\n<br><br>\r\n<b>Alat dan Bahan</b>\r\n<br>\r\n1. Kalita Wave dan filter ukuran 155<br>\r\n2. Penggiling kopi<br>\r\n3. Timbangan<br>\r\n4. Termometer<br>\r\n5. Teko leher angsa<br>\r\n6. Stopwatch<br>\r\n7. 20 gram kopi<br>\r\n8. 350 ml air panas\r\n<br><br>\r\n<b>Cara Membuat Kopi dengan Menggunakan Kalita Wave Dripper</b>\r\n<br><br>\r\n1. Letakkan kalita wave filter 185 di atas kalita wave dripper 185.\r\n<br><br>\r\n2. Bentuk filter yang bergelombang memaksimalkan tekanan pada bubuk kopi namun mengurangi sentuhan dengan dinding drippersehingga suhu akan lebih terjaga.\r\n<br><br>\r\n3. Timbang kopi sebanyak 20-22 gram. Disarankan untuk menimbang kopi lebih banyak 1-2 gram dari yang akan digunakan, karena seringkali berat kopi berkurang setelah digiling.\r\n<br><br>\r\n4. Penyeduh pour overapa pun bekerja di titik optimal saat volume kopi mencapai setengah sampai duapertiga kapasitas maksimalnya. Jika kopi terlalu sedikit penyeduhan akan cenderung under-extracted karena kurangnya tekanan. Jika kopi terlalu banyak, air akan mudah meluap saat proses seduh.\r\n<br><br>\r\n5. Giling kopi. Dengan konsistensi seperti pasir pantai halus. Sambil menggiling mulailah memanaskan air.\r\n<br><br>\r\n6. Alas Kalita Wave yang rata cenderung mengendapkan air lebih lama. Hal ini dapat diimbangi dengan tingkat gilingan kopi yang agak kasar agar hasil akhir tidak over-extracted.\r\n<br><br>\r\n7. Bilas filter dengan air panas untuk menghilangkan bau dan aroma kertas. Pembilasan juga membantu menghangatkan drippersehingga proses seduh lebih maksimal. Bilas perlahan agar bentuk gelombang filter tidak rusak.\r\n<br><br>\r\n8. Masukkan kopi yang sudah digiling sebanyak 20 gram ke dalam filter dan dripper yang sudah dibilas. Timbang ulang untuk memastikan beratnya sudah tepat. Ratakan gundukan kopi dengan menepuk-nepuk dripper.\r\n<br><br>\r\n9. Nyalakan stopwatch dan kucurkan air bersuhu 85°C sebanyak 50 ml secara perlahan dan merata ke gundukan kopi lalu tunggu 45 detik agar proses blooming Usahakan agar tetesan air tidak langsung terkena dinding filter.\r\n<br><br>\r\n10. Setelah blooming45 detik, kucurkan air secara perlahan dengan dengan gerakan melingkar dari dalam ke luar seperti obat nyamuk. Kucurkan air sebanyak 30 ml dan tunggu sampai permukaan air telah turun sebelum mengucurkan 30 ml berikutnya.\r\n<br><br>\r\n11. Kucurkan air di gundukan yang terlihat gelap dan kering agar proses ektraksi merata.\r\n<br><br>\r\n12. Tuang air sampai 200ml dan usahakan untuk menyelesaikan penyeduhan dalam 3-4 menit.\r\n<br><br>\r\n13. Desain flat bottom dan 3 lubang Kalita Wave membuat alat ini mempunyai toleransi tinggi terhadap kesalahan. Cocok bagi mereka yang baru mempelajari teknik pour over.\r\n<br><br>\r\n14. Kopi anda telah selesai diseduh. Buang filter dan ampas kopi lalu bilas dripperdengan sisa air panas. Hal ini bertujuan agar dripper tidak berwarna keruh karena minyak kopi yang menempel.\r\n<br><br>\r\n15. Sajikan dengan susu dan snack', 'kalita wave.jpg', 1),
(4, 'Cara Menggunakan French Press Coffee Maker', 'Minuman kopi yang kita nikmati sebenarnya adalah hasil ekstraksi dari biji kopi yang sudah dipanggang dan digiling. Salah satu cara ekstraksinya dengan merendam kopi atau immersing menggunakan french press.\r\n<br><br>\r\nSayangnya, rasa yang tidak enak sering muncul pada hasil seduhan menggunakan alat ini. Padahal alat french press kopi termasuk alat yang mudah digunakan pemula karena tidak perlu keterampilan tangan khusus. Bubuk hanya dimasukkan ke dalam tabung, diberi air panas, lalu ditekan ke bawah dengan plunger.\r\n<br><br>\r\nMasalah pertama yang sering terjadi adalah rasa minuman yang terlalu asam. Rasa ini muncul karena ekstraksi yang tidak maksimal atau under extracted. Ada beberapa sebab mengapa hal ini terjadi, yaitu ukuran giling kopi yang terlalu kasar (extra coarse), waktu immersing yang terlalu singkat, atau suhu air yang kurang panas.\r\n<br><br>\r\nMasalah kedua adalah rasa minuman yang terlalu pahit dan aftertaste getir. Rasa yang terlalu pahit ini muncul karena ekstraksi berlebihan atau over extracted. Penyebab terjadinya over extraction pada alat french press kopi adalah bubuk yang terlalu halus (medium atau fine) atau perendaman yang terlalu lama.\r\n<br><br>\r\nKopi french press idealnya direndam selama kurang lebih tiga sampai empat menit sebelum ditekan dengan plunger. Suhu air yang digunakan untuk menyeduh adalah sekitar 90 °C. Takaran kopi dibandingkan air untuk french press kopi secara umum mengikuti rasio 1:10, gunakan bubuk dengan tekstur yang mirip garam laut (coarse).\r\n<br><br>\r\n<b>Menyeduh Kopi Dengan French Press</b>\r\n<br>\r\nSaat menggunakan french press coffee maker pastikan jangan over atau under extracted. Berikut adalah cara membuat kopi french press:\r\n<br>\r\n1. Bilas chamber dengan air panas.\r\n<br>\r\n2. Pastikan plunger bersih.\r\n<br>\r\n3. Giling biji di ukuran yang kasar (coarse)\r\n<br>\r\n4. Masukkan bubuk ke chamber.\r\n<br>\r\n5. Tuang air panas dengan rasio kopi dengan air yang ideal, yaitu 1:10.\r\n<br>\r\n6. Tunggu sekitar 3 menit lalu tekan plunger.\r\n<br>\r\n7. French press kopi siap dinikmati.\r\n<br><br>\r\nJika Anda suka ngopi, ada baiknya memiliki alat ini karena simpel dan memiliki banyak fungsi. Dengan ukuran giling dan metode seduh yang berbeda, Anda juga dapat membuat cold brew coffee dengan french press.', 'french preess.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `namadepan` varchar(100) NOT NULL,
  `namabelakang` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `gambar_user` varchar(100) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `alamat_user`, `gambar_user`, `role_id`) VALUES
(1, 'Agil Trieanto', 'agil2406', 'agilganteng1', 'jln.sunan kalijaga 2 no 9', 'agil.jpg', 1),
(2, 'Lalu Risman ', 'risman1', '123', 'Unram', 'agil1.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `artikel_admin` (`id_admin`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`),
  ADD KEY `brand_admin` (`id_admin`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id_kopi`),
  ADD KEY `kopi_brand` (`id_brand`);

--
-- Indexes for table `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id_panduan`),
  ADD KEY `panduan_admin` (`id_admin`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id_kopi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `panduan`
--
ALTER TABLE `panduan`
  MODIFY `id_panduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kopi`
--
ALTER TABLE `kopi`
  ADD CONSTRAINT `kopi_brand` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `panduan`
--
ALTER TABLE `panduan`
  ADD CONSTRAINT `panduan_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
