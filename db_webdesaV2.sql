-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 03:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` char(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_pegawai` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `judul`, `tanggal`, `isi`, `foto`, `id_pegawai`) VALUES
('AG004', ' SK PERPANJANGAN PPKM KE 2 LEVEL 3 ', '2021-09-02', 'Perpanjangan PPKM serentah di seluruh wilayah kab bogor					', 'agenda09092021113941news1.jpeg', 'PG001'),
('AG005', ' Bebersih Situ Pemda dalam Rangka Bulan Bakti', '2021-02-01', 'Bebersih Situ Pemda dalam Rangka Bulan Bakti Pancakarsa  Situ Pemda					', 'agenda09092021114114news6.jpeg', 'PG001'),
('AG006', ' Konsep Adlibs Sosialisasi Sistem 2 – 1 Jalur Punc', '2021-09-09', 'Konsep Adlibs Sosialisasi Sistem 2 – 1 Jalur Puncak  Jalur Puncak memberikan dampak yang baik bagi masyarakat', 'agenda09092021151049news2.jpeg', 'PG001'),
('AG007', ' Exhibition, Evaluation & Presendential Lecture Ge', '2021-09-02', 'Bupati Bogor hadiri Exhibition, Evaluation & Presendential Lecture Gerakan Menuju 100 Smart City					', 'agenda09092021151252news6.jpeg', 'PG001'),
('AG008', 'Bulan Bakti Pancakarsa', '2021-09-02', 'Bulan Bakti Pancakarsa merupakan upaya pemerintah daerah untuk menumbuhkembangkan dan melestarikan budaya gotong royong masyarakat Kabupaten Bogor.					', 'agenda09092021180328news4.jpeg', 'PG001');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `image`, `created_at`) VALUES
(1, 'Proses Vaksinasi di desa Singabangsa', 'galeri_1631266884galeri4.jpg', '2021-09-10 09:41:24'),
(3, 'Pembelajaran Tatap muka mulai dibuka', 'galeri_1631276068galeri3.jpg', '2021-09-10 12:14:28'),
(4, 'Blusukan ke Desa singabangsa', 'galeri_1631276102galeri5.jpg', '2021-09-10 12:15:03'),
(5, 'Rapat Sosialisasi Vaksinasi', 'galeri_1631276134galeri8.jpg', '2021-09-10 12:15:34'),
(6, 'Pembangunan Posyandu', 'galeri_1631276164galeri6.jpg', '2021-09-10 12:16:04'),
(7, 'Koodinasi Pelaksanaan program PAUD', 'galeri_1631276219galeri9.jpg', '2021-09-10 12:16:59'),
(8, 'Bersih-bersih sungai', 'galeri_1631276250galeri7.jpg', '2021-09-10 12:17:30'),
(9, 'Rapat Koordinasi', 'galeri_1631276273galeri2.jpg', '2021-09-10 12:17:53'),
(10, 'Perbaikan Jalan', 'galeri_1631276412galeri10.jpg', '2021-09-10 12:20:12'),
(11, 'Gotong Royong Jalan Warga', 'galeri_1631276531galeri1.png', '2021-09-10 12:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` char(5) NOT NULL,
  `id_kategori` char(5) NOT NULL,
  `judul` text NOT NULL,
  `headline` text NOT NULL,
  `tgl_post` date NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_pegawai` char(5) DEFAULT NULL,
  `id_jurnalis` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `id_kategori`, `judul`, `headline`, `tgl_post`, `isi`, `status`, `foto`, `id_pegawai`, `id_jurnalis`) VALUES
('BR001', 'KT004', 'Pelaksanaan Vaksinasi Covid-19 di sekolah', '<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; background-color: rgb(255, 255, 255);\"><font color=\"#212529\" face=\"Ubuntu, sans-serif\"><span style=\"font-size: 24px; font-weight: 500;\">Bupati Bogor Dampingi Wapres Tinjau Langsung Pelaksanaan PTM di SMPN 1 CIteureup dan Pelaksanaan Vaksinasi Covid-19 di SMK Kesehatan Annisa Citeureup</span></font></h4>', '2021-09-09', '<div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Program ini sebagai tindak lanjut atas arahan Bupati Bogor saat peletakan batu pertama Taman Pancakarsa pada 30 Agustus 2019 di Cibinong.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Kegiatan ini dilakukan serentak di 40 Kecamatan dengan melibatkan seluruh stakeholder, mulai dari RT, RW, Desa/Kelurahan, Kecamatan, Forkopimda, SKPD, Ormas, Organisasi Pemuda, Komunitas, Pelajar/Mahasiswa, Guru/Dosen, Penyuluh, Pekerja Sosial, Tagana, PKK, dan seluruh elemen masyarakat Kabupaten Bogor.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Apa saja yang dilakukan dalam Bulan Bakti Pancakarsa?</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">1. Program TNI Masuk Membangun Desa (TMMD).</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">2. Pembangunan Rumah Tidak Layak Huni (RUTILAHU).</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">3. Pembangunan dan Pemantapan Jalan Desa dan lingkungan.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">4. Bersih-bersih sungai dan lingkungan sekitar.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">5. Pembuatan TPS (Tempat Pembuangan Sampah) Sementara.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">6. Perbaikan rumah ibadah (Masjid, Gereja, Vihara, Pura, dan Klenteng)</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Kegiatan ini harus dipublikasikan di media sosial masing-masing dengan melampirkan foto Before (Sebelum) dan After (Sesudah).</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Pemerintah Daerah akan memberikan penghargaan khusus kepada Masyarakat yang kreatif dan inovatif.</span></font></div>', 'publish', '09092021181044berita1.jpeg', 'PG001', 'JR001'),
('BR002', 'KT004', 'Ade Yasin Ajak Lembaga Penyiaran Tingkatkan Kualitas Siaran Jadi Lebih Sehat', '<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Ubuntu, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 1.5rem; background-color: rgb(255, 255, 255);\">Ade Yasin Ajak Lembaga Penyiaran Tingkatkan Kualitas Siaran Jadi Lebih Sehat</h4>', '2021-09-05', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Bupati Bogor, Ade Yasin mengajak dunia penyiaran, lembaga Penyiaran Publik Lokal (LPPL), untuk meningkatkan kualitas siaran menjadi lebih sehat dan lebih baik. Hal tersebut dikatakannya pada program dialog “Penyiaran Sehat di Era Digital” Radio Tegar Beriman (Teman) 95,3 FM, Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Bogor, Kamis (9/9/2021). Acara tersebut juga menghadirkan narasumber Dirjen Informasi Komunikasi Publik (IKP) Kementerian Komunikasi dan Informatika (Kominfo) Republik Indonesia dan Ketua Komisi Penyiaran Indonesia Daerah (KPID) Jawa Barat.</span></font>', 'publish', '10092021055907berita2.jpg', 'PG001', 'JR001'),
('BR003', 'KT002', 'Lindungi Anak, Bupati Bogor Minta Para Orang Tua Segera Lakukan Vaksinasi Covid-19', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Lindungi Anak, Bupati Bogor Minta Para Orang Tua Segera Lakukan Vaksinasi Covid-19</span></font>', '2021-09-05', '<font color=\"#444444\" face=\"Ubuntu, sans-serif\"><span style=\"font-size: 14.4px; background-color: rgb(255, 255, 255);\">Bupati Bogor, Ade Yasin meminta agar para orang tua segera melakukan vaksinasi Covid-19, untuk melindungi anak usia SD dan PAUD atau dibawah 12 tahun yang belum diperbolehkan mendapatkan vaksinasi. Itu ditegaskan Ade Yasin Bogor saat mendampingi Wakil Presiden Ma’ruf Amin dalam kegiatan kunjungan kerja untuk meninjau langsung kegiatan PTM di SMPN 1 Citeureup dan kegiatan vaksinasi di Sekolah SMK Kesehatan Annisa Citeureup, Kamis (9/9).</span></font>', 'publish', '10092021060243berita3.jpeg', 'PG001', 'JR001'),
('BR004', 'KT004', 'Menerima Aspirasi Warga, Ade Yasin Minta Pusat Kaji Aturan Secara Komprehensif Untuk Puncak', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Menerima Aspirasi Warga, Ade Yasin Minta Pusat Kaji Aturan Secara Komprehensif Untuk Puncak</span></font>', '2021-09-03', '<span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\">Bupati Bogor, Ade Yasin hari ini, Rabu (8/9/2021) menerima aspirasi perwakilan warga Puncak yakni Puncak Ngahiji terkait evaluasi penerapan sistem ganjil genap untuk kendaraan yang akan masuk ke wilayah Puncak. Direktur Jenderal Perhubungan Darat (Dirjen Hubdat) Kementerian Perhubungan Republik Indonesia, Budi Setiyadi, turut hadir untuk mendengar secara langsung aspirasi warga. Hadir pula pada audiensi tersebut, Wakil Bupati Bogor, Iwan Setiawan, Kapolres Bogor, AKBP Harun dan Dandim 0621 Letkol Inf. Sukur Hermanto, di Aula Pendopo Bupati Bogor.</span>', 'publish', '10092021060843berita4.jpeg', 'PG001', 'JR001'),
('BR005', 'KT005', 'Bupati Bogor : 80% Sekolah di Kabupaten Bogor Sudah Melaksanakan PTM', '<font color=\"#212529\" face=\"Ubuntu, sans-serif\"><span style=\"font-size: 24px;\">Bupati Bogor : 80% Sekolah di Kabupaten Bogor Sudah Melaksanakan PTM</span></font>', '2021-08-12', '<span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\">Bupati Bogor Ade Yasin ungkapkan 80% sekolah tingkat SD, SMP, SMA di Kabupaten Bogor telah melakukan kegiatan Pembelajaran Tatap Muka (PTM), itu diungkapkan Bupati Bogor saat mendampingi Wakil Presiden Ma’ruf Amin dalam kegiatan kunjungan kerja untuk meninjau langsung kegiatan PTM di SMPN 1 Citeureup dan kegiatan vaksinasi di Sekolah SMK Kesehatan Annisa Citeureup, Kamis (9/9).</span>', 'publish', '10092021061113berita5.jpeg', 'PG001', 'JR001'),
('BR006', 'KT006', 'Ade Yasin Luncurkan ATM Pancakarsa Untuk Guru Non PNS dan Pelaku Pembangunan', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Ade Yasin Luncurkan ATM Pancakarsa Untuk Guru Non PNS dan Pelaku Pembangunan</span></font>', '2021-08-10', '<span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\">Bupati Bogor, Ade Yasin meluncurkan insentif bagi guru non PNS dan para pelaku pembangunan melalui ATM Pancakarsa bekerjasama dengan Bank BJB cabang Cibinong. Penyerahan ATM Pancakarsa dilakukan secara simbolis di Aula Pendopo Bupati Bogor, Rabu (18/7). Penyerahan ATM Pancakarsa tersebut demi meningkatkan kesejahteraan serta sebagai motivasi tenaga pendidik dan juga pelaku pembangunan lainnya.</span><div><span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\"><br></span></div><div><span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\">“Ini merupakan bentuk perhatian Pemerintah Kabupaten (Pemkab) Bogor bagi tenaga pendidik dan pelaku pembangunan untuk meningkatkan kesejahteraan serta sebagai motivasi tenaga pendidik dan juga pelaku pembangunan lainnya. Demi meningkatkan kinerja dan memberikan pelayanan yang terbaik untuk masyarakat Kabupaten Bogor.</span></div>', 'publish', '10092021061351berita6.jpg', 'PG001', 'JR001'),
('BR007', 'KT006', 'Maknai HUT Ke-76 Kemerdekaan RI, Bupati Bogor Akan Fokus Perbaiki Sektor Riil Yang Lesu', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Maknai HUT Ke-76 Kemerdekaan RI, Bupati Bogor Akan Fokus Perbaiki Sektor Riil Yang Lesu</span></font>', '2021-08-17', '<span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\">Bupati Bogor Ade Yasin tegaskan akan fokus perbaiki sektor riil yang lesu melalui empat program yakni peningkatan daya beli masyarakat, peningkatan kesempatan kerja, peningkatan produksi dan pemasaran, serta penguatan dunia usaha. Itu diungkapkan saat Upacara Pengibaran Bendera Merah Putih dalam rangka memperingati Hari Ulang Tahun (HUT) ke-76 Kemerdekaan RI di Lapangan Tegar Beriman Kabupaten Bogor, Selasa (17/8).</span>', 'publish', '10092021061616berita7.jpg', 'PG001', 'JR001'),
('BR008', 'KT004', 'Pemkab Bogor Uji Coba Ganjil-Genap Masuk Puncak Pekan Ini', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Pemkab Bogor Uji Coba Ganjil-Genap Masuk Puncak Pekan Ini</span></font>', '2021-09-08', '<span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\">Pemerintah Kabupaten (Pemkab) Bogor melalui Satuan Tugas (Satgas) Covid-19 akan berlakukan uji coba sistem ganjil genap bagi kendaraan bermotor yang akan masuk ke wilayah Puncak. Bupati Bogor, Ade Yasin saat memimpin Rapat Satgas Penanganan Covid-19, di Aula Pendopo Bupati, Cibinong, Senin (30/8/2021) mengatakan, kita sepakat akan berlakukan sistem ganjil genap, namun sementara kita lakukan uji coba dulu sambil kita lakukan sosialisasi kepada masyarakat.</span><div><span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\"><br></span></div><div><span style=\"color: rgb(68, 68, 68); font-family: Ubuntu, sans-serif; font-size: 14.4px; background-color: rgb(255, 255, 255);\">“Uji coba ini rencananya dilakukan selama dua pekan, yakni setiap weekend atau hari Jumat, Sabtu dan Minggu. Kalau memang hasilnya mengarah kepada kebaikan, tentunya akan kita buat payung hukumnya,” tandas Ade Yasin.</span></div>', 'publish', '10092021061940berita7.jpeg', 'PG001', 'JR001'),
('BR009', 'KT006', 'Wakil Bupati Bogor Paparkan Aksi Konvergensi Penurunan Stunting Secara Virtual', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Wakil Bupati Bogor Paparkan Aksi Konvergensi Penurunan Stunting Secara Virtual</span></font>', '2021-09-07', '<div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Wakil Bupati Bogor, Iwan Setiawan mengatakan, sejak tahun 2019 ada 10 desa yang telah ditentukan sebagai lokasi khusus penanganan stunting di Kabupaten Bogor terintegrasi, tahun 2020 ditambah menjadi 34 desa, tahun 2021 bertambah menjadi 68 desa dan tahun 2022 menjadi 104 Desa.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Beberapa inovasi penanganan stunting telah dilakukan yakni, Formula Pekat yaitu kegiatan yang melibatkan para ulama untuk membina pasangan baru menikah dengan mengedukasi persalinan dan kehamilan.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">\"Kemudian Berisik yaitu kegiatan yang mendorong dan mengedukasi ibu hamil dan ibu menyusui agar memberikan ASI eksklusif selama 2 tahun. Kita juga lakukan Kader Asi Sahabat Ibu (KASIHI) yaitu kader yang mengedukasi ibu hamil dan menyusui, serta program Ngaji yakni kelas pintar gizi untuk ibu yang mempunyai balita stunting, balita gizi buruk, kurang gizi maupun ibu yang memiliki anak balita di PAUD,\" jelasnya.</span></font></div>', 'publish', '10092021062140berita8.jpeg', 'PG001', 'JR001'),
('BR010', 'KT005', 'Sekda Ingatkan Tetap Waspada Meski Sekolah Boleh Dibuka', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Sekda Ingatkan Tetap Waspada Meski Sekolah Boleh Dibuka</span></font>', '2021-09-08', '<div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Burhanudin menjelaskan, masih ada beberapa kecamatan yang pertambahan kasus Covid-nya masuk ke dalam 10 besar, maka rencana ini harus dikaji dengan hati-hati. Kalaupun dibuka bagaimana Protokol Kesehatan yang akan dilaksanakan, minimal protokol 5M itu sudah standar. Kemudian jika ada anak diukur suhunya tinggi, langkahnya harus seperti apa, jadi harus paham, karena dalam pelayanan publik keselamatan manusia itu di atas segala-galanya.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">&nbsp;</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">“Hati-hati membuka sekolah di wilayah yang masih tinggi kasusnya. Saya minta ada semacam pemetaan wilayah. Misalnya sekolah A ini masuk kecamatan wilayah mana, kondisinya seperti apa, dan bagaimana cara menerapkan Protokol Kesehatannya,” tandas Burhan.</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">&nbsp;</span></font></div><div style=\"\"><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Burhanudin menambahkan, semua bekerjasama, Kadisdik dengan kepala sekolah, para dewan sekolah, melibatkan juga orang tua siswa. Orang tua harus sama-sama mengontrol anaknya, harus mengetahui berapa jam mereka sekolah, sampai jam berapa harus pulang ke rumah. Bisa saja mereka di sekolah tidak kena, tetapi kena saat berkerumun dengan teman-temannya di luar sekolah atau di jalanan.</span></font></div>', 'publish', '10092021062304berita9.jpeg', 'PG001', 'JR001');

-- --------------------------------------------------------

--
-- Table structure for table `jurnalis`
--

CREATE TABLE `jurnalis` (
  `id_jurnalis` char(5) NOT NULL,
  `nik_jurnalis` varchar(20) NOT NULL,
  `nm_jurnalis` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnalis`
--

INSERT INTO `jurnalis` (`id_jurnalis`, `nik_jurnalis`, `nm_jurnalis`, `alamat`, `no_telp`, `jabatan`, `foto`, `password`) VALUES
('JR001', '1611500032', 'Alvin Ramadhan', 'RT01 RW 09 no.114 Kecamatan Pamulang Kota Tangerang Seelatang -Banten												', '08989860937', 'Programmer', 'updt_jurnalis07022018165954alvin siluet copy .png', 'alvin');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` char(5) NOT NULL,
  `nm_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
('KT002', 'kesehatan'),
('KT003', 'olahraga'),
('KT004', 'sosial'),
('KT005', 'pendidikan'),
('KT006', 'pemerintahan');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) NOT NULL,
  `nm_warga` varchar(20) NOT NULL,
  `id_pegawai` char(5) DEFAULT NULL,
  `id_info` char(5) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `flag` char(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` char(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `bagian` varchar(30) NOT NULL,
  `nm_pegawai` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `bagian`, `nm_pegawai`, `password`) VALUES
('PG001', '1611500032', 'Sekretaris', 'Aldo', 'aldo'),
('PG002', '1611500033', 'Humas', 'Fahri', 'fahri');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` char(20) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `umur` int(3) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `jenkel`, `agama`, `umur`, `pendidikan`, `nama`) VALUES
('1762534517182540', 'laki-laki', 'islam', 20, 'sd', 'ahmad'),
('4377489089365460', 'laki-laki', 'hindu', 5, 'lain-lain', 'dongsu'),
('7364523042676260', 'perempuan', 'konghucu', 4, 'perguruan tinggi', 'lie'),
('86272839477847490', 'laki-laki', 'kristen', 20, 'perguruan tinggi', 'james'),
('9272716520346650', 'perempuan', 'kristen', 34, 'smp', 'john');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` char(11) NOT NULL,
  `nama_masy` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama_masy`, `email`, `notelp`, `isi_saran`, `tanggal`) VALUES
('SR000000001', 'Alvin Ramdhan', 'ramadhan.alvin43@gmail.com', '087878985432', 'Semoga dengan adanya sistem informasi Desa Singabangsa ini, hubungan komuniasi antar masyarakat dengan perangkat desa semakin baik, maju terus ..', ' 26-01-2018 '),
('SR000000002', 'Dzaki Nur Fazri', '1611500032@student.budiluhur.ac.id', '08989876432', 'Tolong kinerja perangkat desa lebih ditingkatkan lagi .', ' 26-01-2018 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_jurnalis` (`id_jurnalis`);

--
-- Indexes for table `jurnalis`
--
ALTER TABLE `jurnalis`
  ADD PRIMARY KEY (`id_jurnalis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`nm_warga`,`id_info`),
  ADD KEY `id_info` (`id_info`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informasi_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informasi_ibfk_3` FOREIGN KEY (`id_jurnalis`) REFERENCES `jurnalis` (`id_jurnalis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_info`) REFERENCES `informasi` (`id_info`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
