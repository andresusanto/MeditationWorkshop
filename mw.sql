-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2013 at 12:06 PM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kmbiborg_mw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `author`, `tanggal`, `title`, `content`) VALUES
(1, 1, 1380379039, 'Teaser Meditation Workshop 2013', '<object width="420" height="315"><param name="movie" value="//www.youtube.com/v/3qZoBbF0Nqc?version=3&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/3qZoBbF0Nqc?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true" wmode="opaque"></embed></object>');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE IF NOT EXISTS `pendaftar` (
  `ID` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Alamat` text NOT NULL,
  `Telp` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Partisipasi` int(11) NOT NULL,
  `Actid` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`ID`, `Nama`, `Alamat`, `Telp`, `Email`, `Partisipasi`, `Actid`) VALUES
(1, 'Andre Susanto', 'Jl ABCD Bandung', '08561234567', 'andre@andresusanto.com', 0, 'a8d02c14240eb4b6db8ed38d9b32a8d3');

-- --------------------------------------------------------

--
-- Table structure for table `sistem`
--

CREATE TABLE IF NOT EXISTS `sistem` (
  `id` int(11) NOT NULL,
  `konten` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sistem`
--

INSERT INTO `sistem` (`id`, `konten`) VALUES
(2, '<p>Pada awalnya, kegiatan ini diberi nama Ceramah Umum dan Bimbingan Meditasi (CUBM). CUBM mulai diadakan pada tahun 1997 dan terus diadakan secara rutin tiap tahunnya oleh Keluarga Mahasiswa Buddhis Dhamma&ntilde;ano ITB. Kegiatan ini bertujuan untuk memperkenalkan dan mengajarkan praktik meditasi kepada masyarakat umum.</p>\r\n<p>Sejak tahun 2006, CUBM berganti nama menjadi Meditation Workshop. Ada beberapa hal lagi yang mendasari terjadinya perubahan ini. Pada dasarnya, MW dibuat untuk mengatasi kelemahan-kelemahan yang terdapat pada CUBM. Debut Meditation Workshop ini dimulai pada tahun 2006, seperti yang dijelaskan di atas, yang pada saat itu diketuai oleh Rudyanto (Teknik Informatika 2004), dan terus berlanjut hingga kini.</p>\r\n<p>Semenjak berganti nama, tujuan MW ini pun semakin dipertegas, yaitu untuk memperkenalkan dan mengajarkan praktik meditasi kepada masyarakat kampus pada khususnya dan masyarakat luar pada umumnya.</p>'),
(4, '<p>KMB Dhamma&ntilde;ano ITB berdiri pertama kali pada tanggal 4 Oktober 1991. Organisasi ini berdiri atas dasar kekeluargaan yang erat antar mahasiswa Buddhis ITB yang saling membutuhkan satu sama lain, baik itu sebagai tempat berdiskusi, berbagi pengalaman, maupun beraktifitas, baik itu di luar ataupun di dalam kampus. Pembentukan KMB Dhamma&ntilde;ano ITB ini dimotori oleh dua orang Mahasiswa Buddhis yaitu Budiman (Teknik Informatika 1988) dan Gunardi (Teknik Informatika 1987). Nama &quot;Dhamma&ntilde;ano&quot; sendiri berarti pengetahuan Dharma.\r\nKepengurusan KMB Dhamma&ntilde;ano ITB sendiri terdiri dari 8 divisi. Di samping kegiatan-kegiatan tiap divisi, KMB juga memiliki berbagai kegiatan akbar seperti PPAB (Panitia Penerimaan Angkatan Baru), Meditation Workshop (Seminar Meditasi), dan juga DDB (Dharmabakti Desa Buddhis).</p>'),
(3, '<img src="http://mw.kmbitb.org/images/Susunan%20Kepanitiaan%201.png" style="width:560px;" />'),
(1, '<p><strong>  Y.M. Bhikkhu Thitayanno</strong> lahir  di Makassar pada bulan November 1960.  Pada tahun 1985, Beliau menyelesaikan kuliahnya di jurusan Kimia ITB, Bandung.  Kemudian Beliau ditahbiskan menjadi samanera oleh B. Jinadhammo Mahathera di  Medan pada tahun 1997. Dua tahun kemudian, Belian ditahbiskan di Wat Bovorn  Bangkok. Pada tahun 2000, Beliau belajar di ITBMU Yangon, Myanmar. Kemudian tahun 2001 hingga 2002  Beliau bermeditasi di Shwe U Min Meditation Centre. Pada tahun berikutnya,  Beliau bermeditasi di Pa-uk Meditation Centre. Di akhir tahun 2003, Beliau  kembali ke Indonesia dan memimpin Indonesia Tipitaka Centre di Medan selama  beberapa bulan. Lalu Beliau pindah ke Jakarta tahun 2004 dan mengajukan  permohonan masuk STI. Tahun 2006 Beliau resmi diterima sebagai anggota STI dan  ditugaskan di Kalimantan Barat sebagai Padesanayaka. Sejak tahun 2011, Beliau  sudah tidak menjabat lagi. Saat ini Beliau aktif memberi ceramah di berbagai  kota di Indonesia, dan memberikan bimbingan mengenai meditasi.<br />\r\n</p><br/>\r\n<p><strong><img src="http://mw.kmbitb.org/images/handaka.jpg" style="float:left; padding-right: 5px;" width="215" height="130" />Handaka Vijjananda </strong>adalah seorang  pendiri Ehipassiko Foundation yang lahir di Temanggung, 22 Juni 1971. Saat ini  Beliau mempunyai seorang istri, 3 orang anak kandung, 54 anak angkat dan 2.200  anak asuh. Beliau menyelesaikan  kuliahnya hingga Apoteker di Universitas Gadjah Mada, Yogyakarta, dan Beliau  melanjutkan kuliah S2 di World Buddhist University, Bangkok. Beliau adalah  pemilik PT. Universall, eksportir farmasi ke Myanmar. Beliau juga merupakan editor Kitab Suci di Indonesia  Tipitaka Centre serta penulis dan penyunting lebih dari 250 buku  moral-spiritual. Beliau pernah mendapatkan Rekor MURI sebagai Penulis Komik  Tipitaka Pertama di Dunia. Selain mendirikan Ehipassiko Foundation, Beliau juga  pendiri Awareness Meditation Centre di Tapos. Beliau merupakan seorang  pembicara nasional dalam kursus dan ceramah Dharma, produser BuddhaVision (Film  Edukasi Buddhis), serta pemandu Retret Meditasi Awareness.</p><br/>\r\n<p><strong><img src="http://mw.kmbitb.org/images/roby.jpg" style="float:left; padding-right: 5px;" width="139" height="207" />Roby Oktober</strong>, adalah bungsu dari tiga  bersaudara, lahir di Jambi pada tanggal 18 Oktober 1979. Ayahnya Andy Irwanto  adalah professional di bidang Teknik Elektro, sedangkan ibunya Tati Sugiharti  adalah seorang ibu rumah tangga. Roby menyelesaikan kuliahnya di Sekolah Tinggi  Ilmu Ekonomi IBil pada tahun 2002. Saat  ini Roby dikaruniai dua orang anak, Danella Beverly February dan Delanno Usagi  December buah pernikahannya dengan Winny Simadibrata.<strong> </strong><br />\r\nHobinya adalah membaca dan basket. Saat kuliah ia mendapatkan  beasiswa basket di STEI Rawamangun dan sempat mengikuti seleksi Pelatda PON DKI  Jakarta. Roby pertama kali diperkenalkan dengan dunia usaha di tahun 2000.  Secara kebetulan, seorang teman mengajaknya menjadi member CNI. Pada tahun  2008, bersama dengan dua orang iparnya, Williem dan Willy Simadibrata, ia  membuka badan usaha pertamanya yang diberi nama PT. Tiga Intan Cemerlang, yang  bergerak di bidang ritel, yaitu menjadi pusat distribusi produk CNI untuk  wilayah Kelapa Gading dan sekitarnya. Di tahun yang sama, ia juga mengambil  lisensi pemasaran produk CNI berkonsep Jaringan Minimarket di Dalam Rumah  dengan merek MM GoDAM. Di bulan Maret 2013, Roby membuka Kantor GPS Super  Spring untuk pemasaran produk GPS Navigasi dan Pelacak di Cikarang. Ia juga  seorang fasilitator untuk topik <em>Public  Speaking</em> dan <em>Human Relations.</em></p><br/>\r\n<table width="675" border="0" cellspacing="0" cellpadding="0">\r\n  <tr>\r\n    <td width="173">Nama</td>\r\n    <td width="502"><b>Upasaka Pandita Dr.Akino W.Azzaro</b></td>\r\n  </tr>\r\n  <tr>\r\n    <td>TTL</td>\r\n    <td>Pkl.Susu 15 Maret 1967</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Pendidikan</td>\r\n    <td>S1 Arsitektur Untar<br />\r\n    S2 Marketing  Untar <br />\r\n    S3 Marketing  UI <br /></td>\r\n  </tr>\r\n  <tr>\r\n    <td>Pekerjaan</td>\r\n    <td>Konsultan bisnis</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Pengalaman</td>\r\n    <td>Pembicara di berbagai vihara Jakarta seperti Ekayana, Bodhiyana,  Sampit vihara Dhammamula,BCA prioritas gathering Medan, BCA prioritas gathering  Jakarta, BCA prioritas gathering Makassar, Danamon Yogya, Danamon Jakarta,  Danamon Medan, Danamon Makassar, KMB ITB &amp;Retreat Pak Auk. Taiwan.Thich  nhat hanh<br />\r\nYang dilakukan Sekarang : Aktif mengajar  meditasi/Buddha Dharma</td>\r\n  </tr>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
