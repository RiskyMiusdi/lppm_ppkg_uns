-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 11:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppkg_uns`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel_kerjasama`
--

CREATE TABLE `tbl_artikel_kerjasama` (
  `id_artikel_kerjasama` int(10) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `paragraf1` text NOT NULL,
  `tanggal_publikasi` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_penulis` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel_kerjasama`
--

INSERT INTO `tbl_artikel_kerjasama` (`id_artikel_kerjasama`, `judul_artikel`, `penulis`, `paragraf1`, `tanggal_publikasi`, `avatar`, `status`, `id_penulis`) VALUES
(14, 'Prof Ismi Dwi Astuti Nurhaeni (Peer Group PPKG) menjadi Narasumber dalam Kegiatan Diskusi Publik “Pencegahan Perkawinan Usia Anak”', 'Administrator PPKG UNS', 'Pada hari Kamis tanggal 5 Desember 2019 bertempat di MG Setos Hotel Semarang, Jateng Pos mengadakan kegiatan diskusi publik mengenai Pencegahan Perkawinan Usia Anak. Prof Ismi Dwi Astuti Nurhaeni yang merupakan salah satu Peer Group PPKG menjadi narasumber dalam kegiatan diskusi tersebut. Selain itu dr. Setya Dipayana Sp.A (youtuber dan pakar kesehatan anak) juga turut menjadi speaker dan Indra Gunawan, SKM, MA (Deputi Bidang Partisipasi Masyarakat Kementrian PPPA) menjadi keynote speaker.<br />\r\n<br />\r\nKegiatan diskusi dihadiri Heverita Gunaryati Rahayu selaku wakil walikota semarang dan Dra. Retno Sudewi, APT, M.Si selaku Kepala Dinas Pemberdayaan Perempuan Perlindungan Anak Pengendalian Penduduk Keluarga Berencana Provinsi Jawa Tengah.<br />\r\nProf Ismi menjelaskan materi mengenai perkawinan usia anak,penyebab perkawinan usia anak, dampak dan resiko, peran keluarga, negara dan masyarakat, serta inovasi pencegahan perkawinan usia anak.', '2019-12-05', 'narasumber5.jpg', 'Publis', 1),
(16, 'Perkenalkan Kegiatan Olahraga dan Sarana Rekreasi, Kerjasama Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS Paguyuban SACHAROMA dan KJNI Jogyakarta Mengadakan Sosialisasi Manfaat Jalan Nordic bagi Kesehatan', 'Administrator PPKG UNS', 'Tes paragraf Tes paragraf Tes paragraf', '2023-10-17', 'kegiatan_olahraga2.jpg', 'Publis', 104),
(17, 'PPKG LPPM UNS : DIALOG WANITA DAN INSPIRASINYA', 'Administrator PPKG UNS', 'Tes paragraf Tes paragraf Tes paragraf', '2023-10-10', 'wanita3.jpg', 'Publis', 104),
(18, '“PPKG-LPPM Universitas Sebelas Maret bersama BKKBN Jawa Tengah Gelar Uji Coba Bahan Ajar dan Buku Bacaan Pendidikan Kependudukan bagi Masyarakat Jawa Tengah di Hotel Red Chilles”', 'Administrator PPKG UNS', 'Tes paragraf Tes paragraf Tes paragraf', '2023-10-08', 'uji_coba4.jpg', 'Publis', 104);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel_pendidikan`
--

CREATE TABLE `tbl_artikel_pendidikan` (
  `id_artikel_pendidikan` int(10) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `paragraf1` text NOT NULL,
  `tanggal_publikasi` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_penulis` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel_pendidikan`
--

INSERT INTO `tbl_artikel_pendidikan` (`id_artikel_pendidikan`, `judul_artikel`, `penulis`, `paragraf1`, `tanggal_publikasi`, `avatar`, `status`, `id_penulis`) VALUES
(1, 'MONEV STRATEGI NASIONAL AKPSH DI JAWA TENGAH', 'Administrator PPKG UNS', '           Uji Coba Monitoring dan Evaluasi Program Percepatan Strategi Nasional AKPSH(Administrasi Kependudukan bagi Pengembangan Stratistik Hayati) oleh Bappenas dan Unicef, melibatkan peneliti PPKG – Pusat Penelitian Kependudukan dan Gender (PPKG) Lembaga Penelitian dan Pengabdian Masyarakat (LPPM) Universitas Sebelas Maret Surakarta. Monev AKPSH dimaksud untuk mengetahui capaian Strategi Nasional AKPSH pada tahun 2020, guna pengembangan Instrumen Nonitoring Evaluasi guna percepatan tercapainya Administrasi Kependudukan bagi Pengembangan Statistik Hayati , dalam wujud Instrumen Monev yang akan diberlakukan secara Nasional.<br /><br />\r\n<br /><br />\r\nSembilan  Indikator dan Target Strategi nasional  AKPSH pada tahun 2024 adalah: 1).99 persen Cakupan Kepemilikan NIK(Nomer Induk Kependudukan ) pada   anak   Warga Negara   Indonesia usia   0-5  tahun, 2). 99 persen Cakupan kepemilikan  NIK pada   Penduduk Warga   Negara Indonesia   0-17 tahun, 3). 99 persen Cakupan kepemilikan  NIK pada   semua Penduduk   Warga Negara   Indonesia, 4). 100 persen Cakupan kepemilikan   akta kelahiran   pada anak   usia   0-5 tahun, 5). 100 persen Cakupan kepemilikan   akta kelahiran   pada Penduduk   0-17 tahun, 6). 100 persen Cakupan kepemilikan   buku nikah   dan  akta perkawinan   pada semua   pasangan yang  menikah, 7). 100 persen Cakupan kepemilikan akta perceraian   pada semua    individu yang   sudah    bercerai, 8). 100 persen Cakupan kepemilikan akta kematian   pada seluruh    peristiwa kematian  dalam satu  tahun    terakhir , 9). 100 persen Cakupan peristiwa kematian yang diidentifikasikan penyebabnya berdasarkan International Classification  of Diseases- IO (ICD-10) dalam   satu tahun terakhir.<br /><br />\r\n<br /><br />\r\nUji coba Monev Stranas AKPSH dilakukan di Empat Provinsi: di Provinsi NAD, Sulawesi Selatan, Jawa Timur dan Jawa Tengah. Monev Stranas AKPH di Jawa Tengah dilakukan di Kab Klaten. Analisis data sekunder mendapatkan capaian kepemilikan Akta Lahir di Kabupaten Klaten mencapai 91, 6 persen, Kepemilikan KIA( Kartu Identitas Anak) sebesar 39 persen. Permasalahan Kepemilikan Dokumen Statistik Hayati penduduk belum cukup menggembirakan, mengingat banyak penduduk masih belum update Kartu Keluarga, Status Pernikahan dan sebagainya. Permasalahan yang perlu mendapatkan perhatian dan pendekatan khusus pada Kelompok Penduduk Rentan yakni: Penduduk Korban Bencana Alam, Penduduk Terlantar, Komunitas Terpencil, Masyarakat Adat, Penghayat Kepecayaan , Masyarakat Suku Nomaden( hidup berpindah), Penduduk Gelandangan ,Pekerja Migran Indonesia yang bermasalah, Anak dari perkawinan campur pekerja migran Indonesia, anak perkawinan pengungsi dan pencari suaka di Indonesia, dan kelompok khusus lainnya seperti Narapidana teroris. Temuan lapang mendapatkan Kelompok Rentan inilah bermasalah dengan pemilikan dokumen AKPSH .<br /><br />\r\n<br /><br />\r\nRekomendasi penelitian sebagai berikut:<br /><br />\r\n<br /><br />\r\nPelaksanaan Percepatan Stranas AKPSH ditingkat  Nasional telah  memiliki Instrumen hukum , sebaiknya Instrumen Hukum ini diturunkan dalam Instrumen hukum di masing masing OPD sebagai stakeholder teknis pelaksana  .<br /><br />\r\nKebijakan dikawal sampai pada kebijakan implementatif agar memudahkan dalam monitoring dan evaluasi. Dalam hal ini konsep AKPSH benar-benar masuk (cross cuting) dengan bidang-bidang pembangunan, sehingga interseksionalitasnya menjadi nampak dan menjadi sumber dalam pembuatan kebijakan dan program.<br /><br />\r\nImplementasi Percepatan AKPSH memiliki korelasi dengan kapasitas sumberdaya manusia dan Komitmen. Oleh karena itu dibutuhkan Peningkatan kapasitas dari Vocal point di pusat sampai daerah agar memiliki perpspektif yang sama dalam upaya mengawal dan memastikan pencapaian Percepatan AKPSH<br /><br />\r\nPerlu identifikasi dan melibatkan mitra potensial yang lebih luas dalam proses proses perencanaan, implementasi, monitoring dan evaluasi secara berkelanjutan guna pencapaian Percepatan AKPSH<br /><br />\r\nKearifan Lokal sangat strategis pada penanganan kasus kasus khusus dengan mengoptimalisasikan modal sosial / kearifan lokal untuk penguatan solidaritas berbasis kelembagaan lokal.<br /><br />\r\nPemerintah Pusat hingga Daerah perlu meningkatkan sosialisasi Percepatan AKPSH<br /><br />\r\n', '2020-12-11', 'monev_strategi2.jpg', 'Publis', 1),
(2, 'PPKG LPPM UNS : DIALOG WANITA DAN INSPIRASINYA', 'Administrator PPKG UNS', 'Sebagai sebuah Pusat Penelitian , Puslit Kependudukan dan Gender LPPM UNS yang beranggotakan 23 akademisi sekaligus peneliti bidang kependudukan, gender dan anak di Universitas Sebelas Maret terus berusaha memberi manfaat kepada masyarakat dan menjalin kerjasama dengan berbagai kalangan sesuai bidang keilmuan. Bidang garapan selain Penelitian, Pengabdian, Pelatihan, Penulisan Buku, Penulisan artikel jurnal, juga jasa konsultasi bidang pembangunan terkait Kependudukan, Gender dan Anak.  Pelatihan Kesehatan Reproduksi bagi Remaja Kota Surakarta atas kerjasama ddngan DPPKB Kota Surakarta dengan pelatih pakar Kespro dr. Istar Yuliadi, M.Si FIAS dan Dr.Ir.Retno Setyowati MS.<br />\r\n<br />\r\nRiset yang sedang digarap antara lain  “Sinergitas Pelayanan Lansia” kerjasama dengan Badan Riset Nasional dan LPDP RI, diharapkan menghasilkan sebuah Model Pelayanan Ramah Lansia yang dapat diterapkan guna mendukung terciptanya Lansia Tangguh pada 7 dimensinya.<br />\r\n<br />\r\nDiskusi Interaktif dengan masyarakat yang dikemas dalam program Dialog Wanita dan Inspirasi, merupakan kerjasama dengan Radio Republik Indonesia(RRI) Kota Surakarta, yang diselenggarakan rutin setiap minggu pertama setiap bulan.  Dr. Rina Herlina Haryanti SSos, MS, pada tanggal 4 Februari 2021 pukul 10.00 – 11.00 WIB menjadi nara sumber Dialog Wanita dan Inspirasi dengan topic “Daya Lenting Perempuan Difabel di Era Pandemi Covid 19”. Kegiatan dialog yang hangat dengan pertanyaan2 yang diajukan  khalayak masyarakat para pendengar, dilaksanakan secara live streaming melalui RRI Pro 2 Surakarta.<br />\r\n<br />\r\nPada kesempatan tersebut, Dr Rina Herlina Haryanti menjelaskan bagaimana kondisi umum perempuan disabilitas di Indonesia, ciri khas feminisasi kemiskinan, hasil survey jaringan difabel pada masa covid 19, kerentanan difabel pada masa pandemic dan  apa yang harus dilakukan perempuan difabel agar survive di masa Pandemi Covid 19 yang masih berlangsung saat ini. Dialog Perempuan dan Inspirasi bulan Maret  2021 dengan  Nara Sumber  Mujahidatul Musfiroh, S.Kep, Ns, Msi.Med dengan topik bahasan “Peran Ibu dalam Memerangi Stunting” .', '2021-02-04', 'PPKG_LPPM_UNS_DIALOG_WANITA_DAN_INSPIRASINYA3.jpg', 'Publis', 1),
(3, 'INHOUSE TRAINING PPKG LPPM UNS DAN PENYERAHAN DANA BANTUAN PENULISAN SKRIPSI', 'Administrator PPKG UNS', 'Pada hari Senin, 3 Februari 2020 Pusat Penelitian Kependudukan dan Gender(PPKG) – LPPM – UNS, melaksanakan pelatihan teknis Penulisan Artikel dan Teknik akses ke sumber sumber Jurnal Internasional dan Jurnal terskopus. Pelatihan dilaksanakan dalam rangka menciptakan iklim kondusif bagi peneliti PPKG terkait persyaratan persyaratan yang harus dipenuhi pada Ajuan dan Pelaksanaan Penelitian dan Pengabdian kepada masyarakat sesuai Panduan Penelitian dan Pengabdian Kepada Masyarakat versi VII yang telah disosialisasikan ketua dan tim LPPM pada januari 2020. Inhouse training dalam rangka peningkatan kualitas peneliti PPKG LPPM UNS ini dilakukan dalam 3  tahap:  Materi meliputi how to write the article(Introduction, Method, Result, Discussion and Conclusion),  Asistensi Penulisan Draft Artikel Jurnal dan Presentasi Artikel Jurnal terpilih. Pelatihan dilakukan dengan pendekatan lebih pada praktek tidak teoritis, karena tujuan pelatihan ini bagaimana menghasilkan artikel jurnal dan operasionalisasi memilih dan akses ke data base berbagai Journal berkualitas melalui  internet melalui  laptop peserta pelatihan. Sebagai Technical Advisor Pelatihan adalah Dr. Argyo Demartoto MS dengan pengalaman pada Riset Kolaborasi Internasional dan karya-karya artikel di Jurnal Internasional bereputasi dan terskopus.<br />\r\n<br />\r\nDr. Argyo Demartoto MS pada pelatihan Penulisan Jurnal bagi Peneliti PPKG- LPPM UNS<br />\r\nPada hari yang sama dilaksanakan pula Pemberian Bantuan Dana Penulisan Skripsi dan Tesis kepada 5 mahasiswa UNS (3 mhsw/i S1 dan 2 mhswi S2) dengan kajian Skripsi/Tesis terkait Bidang Kependudukan dan Gender. Program kerjasama pemberian bantuan dana penulisan karya ilmiah antara PPKG dengan BKKBN Jawa Tengah telah berlangsung dua tahun,  pada tahun 2019 delapan mahasiswa/i UNS telah mendapatkan bantuan dana penulisan skripsi. Dr. Ir. Retno Setyowati MS memberikan bantuan dana penulisan Skipsi dari BKKBN Perwakilan Jawa Tengah kepada Mahasiswa FIB UNS', '2020-02-03', 'inhouse_training2.jpg', 'Publis', 1),
(4, 'Peringatan Hari Aids Sedunia, 1 Desember 2019 di CFD Jln Slamet Riyadi Kota Solo', 'Administrator PPKG UNS', 'Pagi tadi tanggal 1 Desember 2019 adalah Hari Peringatan Aids Sedunia. Pusat Studi Kependudukan dan Gender bersama UKM PIK-M Cakra UNS mengadakan acara peringatan hari Aids Sedunia yang dikemas dalam kegiatan Car Free Day Kota Surakarta yang berlangsung di Jalan Slamet Riyadi. Kegiatan tersebut bertujuan untuk mengajak masyarakat luas pentingnya mengetahui dan mencegah terjadinya penyakit menular HIV/AIDS. Acara berupa sosialisasi tentang Pencegahan, Penularan, dan bahaya Virus HIV Aids. Dampak bagi kesehatan tubuh dan kematian. Disamping itu dampak yg berupa hukuman sosial, penderita selalu dikaitkan dengan perilaku sex bebas ataupun stigma negatif. Dua duta Genre kota Surakarta tampil sebagai pengisi acara dan hiburan musik. Pembagian bunga mawar merah dan juga stiker bagi pengunjung CFD.', '2019-12-01', 'cfd11.jpg', 'Publis', 1),
(5, 'X', 'tes', 'C', '2023-10-18', 'Fernandou_Restiav25.jpg', 'Publis', 1),
(6, 'X', 'tes', 'V', '2023-10-12', '', 'Menunggu', 1),
(7, 'm', 'Orlanx Sintiax', 'n', '2023-10-28', 'Kiraning_Xuring16.jpg', 'Menunggu', 104),
(8, 'c', 'tes', 'c', '2023-10-05', 'Injins_Sundo10.jpg', 'Publis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel_penelitian`
--

CREATE TABLE `tbl_artikel_penelitian` (
  `id_artikel_penelitian` int(10) NOT NULL,
  `judul_artikel` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `paragraf1` text NOT NULL,
  `tanggal_publikasi` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_penulis` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel_penelitian`
--

INSERT INTO `tbl_artikel_penelitian` (`id_artikel_penelitian`, `judul_artikel`, `penulis`, `paragraf1`, `tanggal_publikasi`, `avatar`, `status`, `id_penulis`) VALUES
(8, 'Sosialisasi Hasil Analisis Data SDKI Jawa Tengah 2017', 'Administrator PPKG UNS', 'Bertempat di hotel Getz , jl. MT Haryono Semarang tanggal 13 sd 14 November 2019 berlangsung kegiatan “Sosialisasi Hasil Analisis Data SDKI Jawa Tengah 2017”. Pertemuan dibuka oleh Drs. Wagino MSi Perwakilan BKKBN Jateng dan pengarahan oleh Deputy Penelitian dan Pengembangan BKKBN RI Prof. Rizal Damanik MRepSc, PhD serta hadir pula seluruh Kepala Dinas Kependudukan dan KB se Jawa Tengah dan mitra kerja BKKBN se Jawa Tengah. Presentasi oleh kepala Pusat Penelitian Kependudukan dan Gender LPPM UNS, Dr. Ir. Retno Setyowati MS adalah Peluang dan Tantangan Provinsi Jawa Tengah dalam mewujudkan Generasi Emas 2045, yang merupakan satu diantara sepuluh kajian berbasis data SDKI Jawa Tengah 2017 oleh berbagai Perguruan Tinggi di Jawa Tengah, antara lain UNDIP, UNNES, UNWIDHA.', '2019-11-13', 'Sosialisasi_Hasil_Analisis_Data3.jpg', 'Publis', 1),
(10, 'MONEV STRATEGI NASIONAL AKPSH DI JAWA TENGAH', 'Administrator PPKG UNS', 'Uji Coba Monitoring dan Evaluasi Program Percepatan Strategi Nasional AKPSH(Administrasi Kependudukan bagi Pengembangan Stratistik Hayati) oleh Bappenas dan Unicef, melibatkan peneliti PPKG – Pusat Penelitian Kependudukan dan Gender (PPKG) Lembaga Penelitian dan Pengabdian Masyarakat (LPPM) Universitas Sebelas Maret Surakarta. Monev AKPSH dimaksud untuk mengetahui capaian Strategi Nasional AKPSH pada tahun 2020, guna pengembangan Instrumen Nonitoring Evaluasi guna percepatan tercapainya Administrasi Kependudukan bagi Pengembangan Statistik Hayati , dalam wujud Instrumen Monev yang akan diberlakukan secara Nasional.<br />\r\n<br />\r\nSembilan  Indikator dan Target Strategi nasional  AKPSH pada tahun 2024 adalah: 1).99 persen Cakupan Kepemilikan NIK(Nomer Induk Kependudukan ) pada   anak   Warga Negara   Indonesia usia   0-5  tahun, 2). 99 persen Cakupan kepemilikan  NIK pada   Penduduk Warga   Negara Indonesia   0-17 tahun, 3). 99 persen Cakupan kepemilikan  NIK pada   semua Penduduk   Warga Negara   Indonesia, 4). 100 persen Cakupan kepemilikan   akta kelahiran   pada anak   usia   0-5 tahun, 5). 100 persen Cakupan kepemilikan   akta kelahiran   pada Penduduk   0-17 tahun, 6). 100 persen Cakupan kepemilikan   buku nikah   dan  akta perkawinan   pada semua   pasangan yang  menikah, 7). 100 persen Cakupan kepemilikan akta perceraian   pada semua    individu yang   sudah    bercerai, 8). 100 persen Cakupan kepemilikan akta kematian   pada seluruh    peristiwa kematian  dalam satu  tahun    terakhir , 9). 100 persen Cakupan peristiwa kematian yang diidentifikasikan penyebabnya berdasarkan International Classification  of Diseases- IO (ICD-10) dalam   satu tahun terakhir.<br />\r\n<br />\r\nUji coba Monev Stranas AKPSH dilakukan di Empat Provinsi: di Provinsi NAD, Sulawesi Selatan, Jawa Timur dan Jawa Tengah. Monev Stranas AKPH di Jawa Tengah dilakukan di Kab Klaten. Analisis data sekunder mendapatkan capaian kepemilikan Akta Lahir di Kabupaten Klaten mencapai 91, 6 persen, Kepemilikan KIA( Kartu Identitas Anak) sebesar 39 persen. Permasalahan Kepemilikan Dokumen Statistik Hayati penduduk belum cukup menggembirakan, mengingat banyak penduduk masih belum update Kartu Keluarga, Status Pernikahan dan sebagainya. Permasalahan yang perlu mendapatkan perhatian dan pendekatan khusus pada Kelompok Penduduk Rentan yakni: Penduduk Korban Bencana Alam, Penduduk Terlantar, Komunitas Terpencil, Masyarakat Adat, Penghayat Kepecayaan , Masyarakat Suku Nomaden( hidup berpindah), Penduduk Gelandangan ,Pekerja Migran Indonesia yang bermasalah, Anak dari perkawinan campur pekerja migran Indonesia, anak perkawinan pengungsi dan pencari suaka di Indonesia, dan kelompok khusus lainnya seperti Narapidana teroris. Temuan lapang mendapatkan Kelompok Rentan inilah bermasalah dengan pemilikan dokumen AKPSH .<br />\r\n<br />\r\nRekomendasi penelitian sebagai berikut:<br />\r\n<br />\r\nPelaksanaan Percepatan Stranas AKPSH ditingkat  Nasional telah  memiliki Instrumen hukum , sebaiknya Instrumen Hukum ini diturunkan dalam Instrumen hukum di masing masing OPD sebagai stakeholder teknis pelaksana  .<br />\r\nKebijakan dikawal sampai pada kebijakan implementatif agar memudahkan dalam monitoring dan evaluasi. Dalam hal ini konsep AKPSH benar-benar masuk (cross cuting) dengan bidang-bidang pembangunan, sehingga interseksionalitasnya menjadi nampak dan menjadi sumber dalam pembuatan kebijakan dan program.<br />\r\nImplementasi Percepatan AKPSH memiliki korelasi dengan kapasitas sumberdaya manusia dan Komitmen. Oleh karena itu dibutuhkan Peningkatan kapasitas dari Vocal point di pusat sampai daerah agar memiliki perpspektif yang sama dalam upaya mengawal dan memastikan pencapaian Percepatan AKPSH<br />\r\nPerlu identifikasi dan melibatkan mitra potensial yang lebih luas dalam proses proses perencanaan, implementasi, monitoring dan evaluasi secara berkelanjutan guna pencapaian Percepatan AKPSH<br />\r\nKearifan Lokal sangat strategis pada penanganan kasus kasus khusus dengan mengoptimalisasikan modal sosial / kearifan lokal untuk penguatan solidaritas berbasis kelembagaan lokal.<br />\r\nPemerintah Pusat hingga Daerah perlu meningkatkan sosialisasi Percepatan AKPSH', '2020-12-11', 'monev_strategi4.jpg', 'Publis', 1),
(11, 'Dr. SUMARDIYONO, S.KM, M.Kes MELAKUKAN DESIMINASI HASIL PENGABDIAN KEPADA MASYARAKAT TIM PENGABDI PPKG LPPM UNS PADA SEMINAR NASONAL DAN CALL FOR PAPER PKM CENTER UNIVERSITAS SEBELAS MARET SURAKARTA', 'Administrator PPKG UNS', 'Dalam rangka deseminasi hasil Pengabdian Kepada Masyarakat, tim pengabdi Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS berpartisipasi pada Seminar Nasional dan Call for Paper dengan tema “Riset untuk Mendukung Pengabdian Masyarakat” yang diselenggarakan oleh PKM Center Universitas Sebelas Maret Surakarta pada tanggal22 Desember 2020 secara daring dilaksanakan dari jam 08.00 s.d 14.00 WIB. Acara dibuka oleh Rektor Universitas Sebelas Maret Prof. Dr. Jamal Wiwoho, S.H., M.Hum. Peserta terdiri dari para dosen peneliti dan pengabdi, serta mahasiswa dari berbagai Perguruan Tinggi di Indonesia. Pada sesi Call for Paper telah dipresentasikan makalah berjumlah 150an judul. Presentasi dibagi menjadi 10 ruang.<br />\r\n<br />\r\nPada Seminar Nasional ini tim pengabdi PPKG LPPM UNS yang terdiri dari Dr. Sumardiyono, S.KM, M.Kes, dr. Istar Yuliadi, M.Si, Mujahidatul Musfiroh, S.Kep, Ns, M.Si.Med, Dr. Ir. Retno Setyowati, MS, Dr. Guntur Riyanto, M.Si, Tri Mulyaningsih, S.E., M.Si., Ph.D, Dra. Sri Kusumo Habsari, M.Hum., Ph.D,  Dr. Dra. Trisni Utami, M.Si, dan Dr. Desiderius Priyo Sudibyo, M.Si. diwakili oleh Dr. Sumardiyono, S.KM, M.Kes mempresentasikan artikel hasil pengabdian kepada masyarakat yang berjudul “Edukasi Kualitas Hidup Bagi Lansia”.Pada akhir acara, panitia memberikan penghargaan kepada Presenter Terbaik masing-masing ruang. Pada ruang 5, Dr. Sumardiyono, S.KM, M.Kes terpilih dan diberikan penghargaan sebagai PresenterTerbaik. Pengumuman Presenter Terbaik disampaikan oleh Wakil Rektor Bidang Kemahasiswaan dan Alumni Universitas Sebelas Maret Prof. Dr. Kuncoro Diharjo, S.T., M.T.', '2020-12-22', 'Dr__Sumardiyono6.jpg', 'Publis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel_pengabdian`
--

CREATE TABLE `tbl_artikel_pengabdian` (
  `id_artikel_pengabdian` int(10) NOT NULL,
  `judul_artikel` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `paragraf1` text NOT NULL,
  `tanggal_publikasi` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_penulis` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel_pengabdian`
--

INSERT INTO `tbl_artikel_pengabdian` (`id_artikel_pengabdian`, `judul_artikel`, `penulis`, `paragraf1`, `tanggal_publikasi`, `avatar`, `status`, `id_penulis`) VALUES
(12, 'Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS mengadakan Pengabdian kepada Masyarakat tentang Senam lansia dalam menghambat proses penuaan dini di Panti Jompo Aisyiyah Surakarta', 'Administrator PPKG UNS', 'Pada hari Sabtu tanggal 16 Juli 2022, tim Pengabdi Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS mengadakan pengabdian kepada masyarakat di Panti Jompo Aisyiyah Surakarta. Pengabdian kepada masyarakat ini diketuai oleh Dr. Guntur Riyanto, M.Si. Kegiatan pengabdian kepada masyarakat ini dibuka oleh Ketua Tim Pengabdi dilanjutkan dengan Senam lansia yang dipandu oleh instrutur senam yang sangat berpengalaman yaitu Haory Setiantoko. Selain senam, dilakukan kegiatan kedua yaitu pemeriksaan kesehatan berupa pengukuran tekanan darah, kolesterol, gula darah dan asam urat oleh Mujahidatul Musfiroh, S.Kep., Ns., M.Si.Med., dan pengukuran kualitas hidup menggunakan European Quality of Life 5 Dimensions (EQ5D) Questionnaire oleh Dr. Sumardiyono, S.KM, M.Kes, serta dibantu pendokumentasian kegiatan oleh Dr. Desiderius Priyo Sudibyo, M.Si.<br />\r\nPada saat dilakukan senam lansia, instruktur senam sekaligus memberikan motivasi kepada para lansia tentang cara mencegah penuaan dini melalui gerakan-gerakan senam dari gerakan kaki, badan, tangan, dan yang paling menarik adalah gerakan disekitar mulut dan pipi agar kulit wajah dapat dipertahankan tetap kencang. Kegiatan pengabdian kepada masyarakat diakhiri dengan informasi tindak lanjut dari kegiatan pengabdian ini oleh ketua tim pengabdi.', '2022-07-16', 'senamlansia5.png', 'Publis', 1),
(13, 'KEGIATAN PENGABDIAN MASYARAKAT PPKG LPPM UNS', 'Administrator PPKG UNS', 'SOSIALISASI KESEHATAN REPRODUKSI REMAJA (KRR) BAGI PELAJAR SEKOLAH MENENGAH ATAS (SMA) DI KOTA SURAKARTA<br />\r\n<br />\r\nPada hari Rabu/23 September 2020 diadakan salah satu kegiatan pengabdian masyarakat yaitu sosialisasi kesehatan reproduksi remaja bagi pelajar sekolah menengah atas. Kegiatan ini sebagai salah satu bentuk pengabdian kepada masyarakat yang dilaksanakan oleh tim dosen yang tergabung dalam grup riset Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS. Kegiatan yang baru pertama kali diadakan di salah satu SMA Swasta di kota Surakarta ini dilaksanakan ole tim PPKG yang diketuai oleh Dr. Vinc Hadi Wiyono WS M.A dengan anggota tim yaitu Istar Yuliadi, dr., M. Si sekaligus sebagai narasumber, Dr. Desiderius Priyo Sudibyo, M.Si, dan Yeremia Rante Ada’, S. Sos.,M,Kes.<br />\r\n<br />\r\nKegiatan dalam bentuk sosialisasi ini dilaksanakan di Aula SMA St. Yosef Surakarta, diikuti hanya terbatas pada pengurus OSIS saja berjumlah 26 siswa dari targer semula yaitu 36 siswa. Kegiatan ini dilaksanakan dengan mengikuti protokol Kesehatan yang ketat yang diatur bersama antara pihak sekolah dengan tim karena diadakan masih dalam kondisi pandemi covid-19.<br />\r\n<br />\r\nKegiatan pengabdian masyarakat yang dikemas dalam bentuk sosialisasi ini mengambil judul Mengulik”bagian Dalam” Remaja. Materi ini disampaikan oleh Istar Yuliadi, dr., M.Si sebagai salah satu tim ahli tentang kesehatan reproduksi Universitas Sebelas Maret. Kegiatan sosialisasi kesehatan reproduksi remaja ini juga turut didampingi oleh tiga orang guru dari sekolah St. Yosef. Kegiatan ini berlangsung dengan lancar sesuai dengan harapan. Kegiatan ini didahului dengan sambutan singkat dari ketua tim pengabdian masyarakat PPKG LPPM UNS, Dr. Vinc Hadi Wiyono WS M.A. Dalam sambutannya dijelaskan gambaran singkat mengenai maksud dan tujuan kegiatan ini diadakan, kemudian disusul sambutan dari pihak sekolah yang diwakili oleh guru pembimbing Osis. Setelah itu dilanjutkan dengan penyampaian materi. Dalam penyempaian materi siswa dengan sangat antusias mengikuti dan menyimak dengan baik. Berdasarkan hasil pengsian kuesioner evaluasi, diperoleh tanggapan bahwa kegiatan ini 100 % dirasakan siswa sangat bermanfaat. Pada sesi diskusi, siswa dengan antusias memberikan pertanyaan seputar kesehatan reproduksi remaja. Kegiatan yang berlangsung kurang lebih 2 jam ini kemudian ditutup bersama tim dan pihak sekolah SMA ST. Yosef. Mewakili sekolah Bruder Stefanus Ngadenan, FIC. sangat berterimakasih atas kedatangan tim PPKG LPPM UNS mengadakan kegiatan pengabdian masyarakat di SMA St. Yosef dan sangat terbuka apabila pihak UNS mengadakan kegiatan-kegiatan selanjutnya.<br />\r\n<br />\r\nTim kegiatan pengabdiam masyarakat PPKG LPPM UNS yang diwakili Dr. Vinc Hadi Wiyono WS M.A juga sangat berterimakasih atas sambutan dan penerimaan sekolah yang sangat “welcome” dan memohon maaf atas segala kekuarangan yang ada. Semoga selanjutnya kegiatan-kegiatan lain dapat dilaksanakan bersama dengan SMA St. Yosef Surakatra.', '2020-09-23', 'KEGIATAN_PENGABDIAN3.jpg', 'Menunggu', 1),
(14, 'Sosialisasi Kesehatan Reproduksi Remaja Bagi Pelajar SMP Marsudirini St. Theresia Surakarta', 'Administrator PPKG UNS', 'Kegiatan yang dilaksanakan oleh Desiderius Priyo Sudibyo, Sudarsana, Yeremia Rante Ada’, Vinc. Hadi Wiyono, WS., Argyo Demartoto, Agusniar Rizka Luthfia ini bertujuan untuk memberikan informasi secara komprehensif tentang pentingnya para pelajar SMP memahami secara sungguh-sungguh perihal kesehatan reproduksi remaja. Berpijak dari tingkat pemahanan (knowledge) yang baik dan benar, diharapkan para peserta (siswa SMP Marsudirini St. Theresia Surakarta) memiliki sikap (attitude) yang baik dan positif pula terhadap kesehatan reproduksinya, sehingga mereka naantinya berperilaku positif terhadap alat reproduksinya, dan terhindar dari berbagai resiko berkenaan dengan fungsi reproduksinya. Metode yang digunakan dalam pelaksanaan kegiatan P2M ini adalah ceramah dan diskusi. Digunakannya metode ini sangat dimungkinkan tercapainya tujuan kegiatan, yakni pemahaman (kognitif) para peserta (siswa) perihal kesehatan reproduksi secara komprehensif, sehingga sangat diharapkan mereka memiliki sikap yang positif terhadap kesehatan reproduksinya, yang pada gilirannya akan berperilaku positif pula berkenaan reproduksinya.<br />\r\n<br />\r\nKegiatan sosialisasi kesehatan reproduksi remaja pelajar dengan peserta seluruh pengurus Organisasi Siswa Intra Sekolah (OSIS) SMP Marsudirini St. Theresia telah dilaksanakan dengan baik dan lancar pada hari Sabtu, 12 Oktober 2019. Adapun materi sosialisasi adalah sebagai berikut: (a) Definisi Remaja, (b) Karakteristik Remaja, (c) Manfaat Pengetahuan Kesehatan Reproduksi bagi Remaja, (d) Pengertian Kesehatan Reproduksi Remaja, (e) Hal-hal yang Mempengaruhi Kesehatan Reproduksi Remaja, (f) Permasalahan Reproduksi Remaja, (g) Ciri-ciri Remaja Produktif, (h) Peran Remaja dalam Kesehatan Reproduksi, dan (i) Upaya Remaja dalam Menjaga Kesehatan Reproduksi<br />\r\n<br />\r\nSecara umum pelaksanaan kegiatan P2M berjalan dengan lancar dan berhasil dengan baik. Selama pelaksanaan kegiatan antusiasme paserta sangat tinggi, hal ini terlihat dari banyaknya pertanyaan yang diajukan kepada nara sumber, sehingga terjadi diskusi yang bagus. Perlu dikemukakan disini bahwa sebelum kegiatan dimulai, kepada seluruh peserta dilakukan Pre-test, dan sesudah kegiatan dilakukan Post-test yang berisikan sepuluh butir soal tentang kesehatan reproduksi remaja (hasil pre & post test pada lampiran). Kemudian Setelah pelaksanaan kegiatan P2M “Sosialisasi Kesehatan Reproduksi Remaja” selesai, maka segera dilakukan evaluasi terhadap pelaksanaannya sehingga dapat diperoleh informasi terutama mengenai kekurangan-kekurangan baik yang bersifat substansial maupun teknis operasional. Hasil evaluasi tentu saja sangat bermanfaat sebagai masukan bagi tim P2M untuk kegiatan-kegiatan sejenis dimasa mendatang, sehingga aktivitas selanjutnya dapat berjalan lebih baik dan memberi manfaat positif secara optimal bagi semua, baik tim P2M maupun target grup, bahkan sampai dengan penerima manfaat (beneficiaries). Adapun hasil evaluasi kegiatan P2M adalah perlunya tindak lanjut kegiatan berikutnya dengan materi “Konsultasi Kesehatan Reproduksi Remaja”.', '2019-09-20', 'sosialisasi_pengabdian2.jpg', 'Publis', 1),
(15, 'Tim Dosen Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS diketuai Dr. Sumardiyono, S.KM, M.Kes. mengadakan Pengabdian Kepada Masyarakat kepada Lansia di Panti Wredha Nursing Home Aisyiyah Surakarta', 'Administrator PPKG UNS', 'Pada tanggal 30 September 2020, tim Pengabdi Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS mengadakan Pengabdian Kepada Masyarakat khususnya kepada para Lansia di Panti Wredha Nursing Home Aisyiyah yang terletak di Jl. Pajajaran Utara III No. 7, Sumber, Banjarsari, Surakarta. Hadir dalam kegiatan pengabdian kepada masyarakat tersebut Ketua Tim Pengabdi Dr. Sumardiyono, S.KM, M.Kes, Kepala PPKG LPPM UNS Dr. Ir. Retno Setyowati, MS, Pembicara penyuluhan kesehatan, dr. Istar Yuliadi, M.Si, pemeriksa kesehatan lansia Mujahidatul Musfiroh, S.Kep, Ns, MSi.Med, dan pendumentasi kegiatan Dr. Guntur Riyanto, MSi. dan Rizki Andriyani, S.P. Sebelum acara dimulai, para tim pengabdi berfoto bersama dengan pengurus panti, para lansia, dan perawat lansia.<br />\r\n<br />\r\nKegiatan pengabdian kepada masyarakat pada lansia ini ada dua, yaitu pemeriksaan kesehatan berupa pemeriksaan kadar gula darah, kolesterol, asam urat, dan tekanan darah dilaksanakan pagi jam 07.00-09.00 WIB, dilanjutkan dengan penyuluhan kesehatan berjudul Menuju Lansia Bahagia dari jam 09.00-10.30 WIB. Kegiatan tersebut disambut gembira oleh ketua pengelola panti Ibu Ratmi Sumedi, yang berharap kegiatan seperti ini tidak berlangsung satu kali saja tetapi bisa secara rutin dilaksanakan di panti wredha Nursing Home Aisyiyah Surakarta. <br />\r\n<br />\r\nData hasil pemeriksaan kesehatan berupa pemeriksaan kadar gula darah, kolesterol, asam urat, dan tekanan darah digunakan sebagai bahan evaluasi kesehatan lansia yang tinggal di panti. Penyuluhan kesehatan tentang Menuju Lansia Bahagia telah memberikan wawasan kepada para lansia, bahwa untuk mempertahankan kualitas hidup seharusnya tidak boleh marah, harus sabar, selalu berolahraga, rajin sholat, makan makanan bergizi secara teratur dan menjaga hubungan baik antar lansia untuk selalu menyemangati satu-sama lain dalam meniti kehidupan.<br />\r\n<br />\r\nKegiatan ini ditutup oleh ketua Tim Pengabdi Dr. Sumardiyono, S.KM, M.Kes, dengan pesan bahwa selain menjaga kesehatan secara pribadi, juga harus menjaga keselamatan secara pribadi seperti misalnya berhati-hati agar tidak terpeleset supaya tidak mengalami cedera yang menyebabkan tubuh menjadi sakit. ', '2020-09-30', 'pengabdian9.jpg', 'Publis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel_seminar`
--

CREATE TABLE `tbl_artikel_seminar` (
  `id_artikel_seminar` int(10) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `paragraf1` text NOT NULL,
  `tanggal_publikasi` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_penulis` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel_seminar`
--

INSERT INTO `tbl_artikel_seminar` (`id_artikel_seminar`, `judul_artikel`, `penulis`, `paragraf1`, `tanggal_publikasi`, `avatar`, `status`, `id_penulis`) VALUES
(8, 'Sosialisasi Hasil Analisis Data SDKI Jawa Tengah 2017', 'Administrator PPKG UNS', 'Bertempat di hotel Getz , jl. MT Haryono Semarang tanggal 13 sd 14 November 2019 berlangsung kegiatan “Sosialisasi Hasil Analisis Data SDKI Jawa Tengah 2017”. Pertemuan dibuka oleh Drs. Wagino MSi Perwakilan BKKBN Jateng dan pengarahan oleh Deputy Penelitian dan Pengembangan BKKBN RI Prof. Rizal Damanik MRepSc, PhD serta hadir pula seluruh Kepala Dinas Kependudukan dan KB se Jawa Tengah dan mitra kerja BKKBN se Jawa Tengah. Presentasi oleh kepala Pusat Penelitian Kependudukan dan Gender LPPM UNS, Dr. Ir. Retno Setyowati MS adalah Peluang dan Tantangan Provinsi Jawa Tengah dalam mewujudkan Generasi Emas 2045, yang merupakan satu diantara sepuluh kajian berbasis data SDKI Jawa Tengah 2017 oleh berbagai Perguruan Tinggi di Jawa Tengah, antara lain UNDIP, UNNES, UNWIDHA.', '2023-08-22', 'Sosialisasi_Hasil_Analisis_Data4.jpg', 'Publis', 1),
(10, 'KKI Surakarta Peringati Harganas 2021', 'Administrator PPKG UNS', 'KKI(Koalisi Kependudukan Indonesia) Kota Surakarta bekerja sama dengan IPADI ( Ikatan Praktisi dan Ahli Demografi) Nasional dan Tim Penggerak PKK Kota Surakarta pada hari Kamis, 1 Juli 2021 menyelenggarakan Webinar dalam rangka memperingati Hari Keluarga Nasional ke 28, dengan Tema Ketahanan Keluarga di Masa Pandemi Covid 19.<br />\r\n<br />\r\nHarganas pertama kali ditetapkan oleh Presiden Suharto pada tanggal 29 Juli 1993 di Way Kambas , Lampung. Penetapan 29 Juni sebagai Harganas terinspirasi dari bersatunya TNI dan  para pejuang Kemerdekaan RI di Kota Yogyakarta pada tanggal 29 Juni 1949 dalam mempertahankan Kemerdekaan Negara Republik Indonesia.<br />\r\n<br />\r\nHarganas ditetapkan dengan tujuan untuk Memperkuat tekat dalam Mewujudkan Keluarga Kecil, Bahagia dan Sejahtera. Setiap tahun diingatkan kembali akan semangat mewujudkan Keluarga Kecil Bahagia Sejahtera. Dengan berjalannya waktu, maka dinamika pembangunan kependudukan pun terus bergerak.  Pada Nawacita, atau 9 prioritas pembangunan hingga tahun 2024, tertera nawacita ke lima mengenai Peningkatan Kualitas Hidup Manusia dan Peningkatan Kesejahteraan Masyarakat.<br />\r\nWebinar ini akan mengantarkan pesertanya akan 1). Kebijakan Pemerintah dalam Program Bangga Kencana( Pembangunan Keluarga , Kependudukan dan Keluarga Berencana) disampaikan oleh Ibu Purwanti SKM, MKes, Kepala DPPKB Kota Surakarta, 2). Permasalahan dan Dinamika Kependudukan dalam Masa Pandemi Covid 19 disampaikan Dr. Soedibyo Alimoeso MA , ketua IPADI Nasional, dan 3). Family Resilience/ Ketahanan Keluarga disampaikan oleh dr. Istar Yuliadi Msi, FIAS. Diharapkan Webinar ini merupakan upaya sosialisasi bagi Peserta yang berasal dari berbagai unsur: Kader Posyandu, PLKB, Tim Penggerak PKK, Mahasiswa, Akademisi, LSM, Stakeholder Pemerintah dan masyarakat luas. Untuk mewujudkan Keluarga Bahagia Sejahtera guna tercapainya  Indonesia Emas tahun 2045 sangat krusial pemahaman posisi Keluarga sebagai unit masyarakat terkecil dalam mempersembahkan/ memproduksi SDM berkualitas sebagai subyek dalam Pembangunan di negeri tercinta Indonesia', '2021-07-01', 'WEBINAR-kki-7-724x10243.png', 'Publis', 1),
(11, 'Mini Talk Show VOCATION 2.0', 'Administrator PPKG UNS', 'Surakarta, 2 Desember 2020. Panitia Vocation 2.0 mengadakan acara mini talk show dengan dr. Istar Yuliadi, M.Si, FIAS (Peer group PPKG LPPM UNS) sebagai narasumber pada acara Vocation 2.0 secara daring. Topik yang dibicarakan pada kesempatan kali ini mengangkat tema Express Your Mind : Perspektif Masyarakat terhadap Pelecehan Seksual dan Pendidikan Seksual.<br />\r\nPada kesempatan kali ini Tim Vocation 2.0 menyoroti beberapa kasus pelecehan seksual yang terjadi di dalam masyarakat untuk diperbincangkan dengan dr. Istar yang merupakan dosen di Fakultas Kedokteran Universitas Sebelas Maret Surakarta yang concern pada bidang seksologi. Poin-poin yang menjadi pembahasan di mini talk show kali ini adalah pentingnya pendidikan seksual di semua kalangan usia, hal apa saja yang dapat dilakukan setelah mendapatkan pendidikan seksual guna mencegah pelecehan seksual, apa saja bentuk dan penyebab pelecehan seksual, serta hal-hal yang harus kita ketahui dan pelajari dalam penanganan kasus pelecehan seksual.<br />\r\n“Don’t trust to anyone, saya itu mempunyai satu pedoman, sometime, someday, we have to say don’t trust to anyone… Jangan mudah percaya pada siapapun, karena ada juga beberapa hal yang pelecehan-pelecehan itu justru pada orang-orang dekat yang kita anggap percaya dalam tanda kutip…”, sekilas perkataan dari dr. Istar yang dikutip dari perbincangan di mini talk show VOCATION 2.0, yang diadakan dengan suasana yang santai tapi serius.<br />\r\n<br />\r\nDiharapkan dengan adanya mini talk show yang mengangkat tema pelecehan dan pendidikan seksual ini dapat memberi kesadaran dan wawasan bagi masyarakat bahwa banyak terjadi pelecehan seksual di sekitar kita tanpa kita sadari yang memberikan dampak negatif secara psikis, sosial, dan materi korban serta bagaimana masyarakat sebagai agen publik dapat mencegah dan bertindak dalam menghadapi kasus pelecehan seksual.<br />\r\n<br />\r\n###<br />\r\n<br />\r\nVOCATION 2.0 merupakan event yang diselenggarakan Prodi D3 Komunikasi Terapan Peminatan Hubungan Masyarakat dalam rangka membranding Sekolah Vokasi dan Prodi D3 Komunikasi Terapan serta guna melaksanakan tugas Ujian Akhir Semester. VOCATION 2.0 mengangkat tema Express Your Mind : Perspektif Masyarakat Terhadap Pendidikan Seksual dan Pelecehan Seksual.<br />\r\n<br />\r\nHasil mini talk show ini dapat diakses di akun instagram @vocationuns.<br />\r\n<br />\r\nContact Person         <br />\r\n<br />\r\nRizky Febri<br />\r\n<br />\r\n(Humas Vocation 2.0)<br />\r\n<br />\r\nVocationuns@gmail.com', '2020-12-02', 'mini_talk9.jpg', 'Publis', 1),
(12, 'Dr. SUMARDIYONO, S.KM, M.Kes MELAKUKAN DESIMINASI HASIL PENGABDIAN KEPADA MASYARAKAT TIM PENGABDI PPKG LPPM UNS PADA SEMINAR NASONAL DAN CALL FOR PAPER PKM CENTER UNIVERSITAS SEBELAS MARET SURAKARTA', 'Administrator PPKG UNS', 'Tes', '2023-10-02', 'Dr__Sumardiyono7.jpg', 'Publis', 105);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_kerjasama`
--

CREATE TABLE `tbl_event_kerjasama` (
  `id_kerjasama` int(11) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `avatar` varchar(32) NOT NULL,
  `deskripsi_agenda` text NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `peserta` varchar(12) NOT NULL,
  `kuota` int(3) NOT NULL,
  `batas_waktu_pendaftaran` date NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event_kerjasama`
--

INSERT INTO `tbl_event_kerjasama` (`id_kerjasama`, `nama_agenda`, `tanggal_pelaksanaan`, `avatar`, `deskripsi_agenda`, `tempat`, `peserta`, `kuota`, `batas_waktu_pendaftaran`, `id_peserta`) VALUES
(6, 'Perkenalkan Kegiatan Olahraga dan Sarana Rekreasi, Kerjasama Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS Paguyuban SACHAROMA dan KJNI Jogyakarta Mengadakan Sosialisasi Manfaat Jalan Nordic bagi Kesehatan', '2022-11-01', 'kegiatan_olahraga2.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'auditorium UNS', 'Umum', 60, '2022-10-24', 1),
(8, 'PPKG LPPM UNS : DIALOG WANITA DAN INSPIRASINYA', '2023-08-29', 'wanita3.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'RRI Surakarta', 'Umum', 20, '2023-08-16', 1),
(9, 'MONEV STRATEGI NASIONAL AKPSH DI JAWA TENGAH', '2020-12-11', 'monev8.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'Kantor', 'PPKG', 15, '2020-11-30', 1),
(10, '“PPKG-LPPM Universitas Sebelas Maret bersama BKKBN Jawa Tengah Gelar Uji Coba Bahan Ajar dan Buku Bacaan Pendidikan Kependudukan bagi Masyarakat Jawa Tengah di Hotel Red Chilles”', '2020-09-22', 'uji_coba4.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'Hotel Red Chilles', 'Umum', 50, '2020-09-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_pendidikan`
--

CREATE TABLE `tbl_event_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `deskripsi_agenda` text NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `peserta` varchar(12) NOT NULL,
  `kuota` int(3) NOT NULL,
  `batas_waktu_pendaftaran` date NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event_pendidikan`
--

INSERT INTO `tbl_event_pendidikan` (`id_pendidikan`, `nama_agenda`, `tanggal_pelaksanaan`, `avatar`, `deskripsi_agenda`, `tempat`, `peserta`, `kuota`, `batas_waktu_pendaftaran`, `id_peserta`) VALUES
(1, '', '2021-08-16', 'SARASEHAN_BULANAN1.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br /><br /><br />\r\n<br /><br /><br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. ', 'Zoom', 'PPKG', 100, '2021-08-02', 1),
(2, 'Mini Talk Show VOCATION 2.0', '2020-12-02', 'mini_talk7.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. ', 'Zoom', 'PPKG', 35, '2020-11-30', 1),
(3, 'Dr. SUMARDIYONO, S.KM, M.Kes MELAKUKAN DESIMINASI HASIL PENGABDIAN KEPADA MASYARAKAT TIM PENGABDI PPKG LPPM UNS PADA SEMINAR NASONAL DAN CALL FOR PAPER PKM CENTER UNIVERSITAS SEBELAS MARET SURAKARTA', '2022-12-22', 'Dr__Sumardiyono3.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br /><br />\r\n<br /><br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. ', 'Zoom', 'PPKG', 100, '2022-12-05', 1),
(4, 'C', '2023-10-18', 'Kiraning_Xuring13.jpg', 'FD', 'C', 'PPKG', 1, '2023-10-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_penelitian`
--

CREATE TABLE `tbl_event_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `nama_agenda` text NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `deskripsi_agenda` text NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `peserta` varchar(12) NOT NULL,
  `kuota` int(3) NOT NULL,
  `batas_waktu_pendaftaran` date NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event_penelitian`
--

INSERT INTO `tbl_event_penelitian` (`id_penelitian`, `nama_agenda`, `tanggal_pelaksanaan`, `avatar`, `deskripsi_agenda`, `tempat`, `peserta`, `kuota`, `batas_waktu_pendaftaran`, `id_peserta`) VALUES
(8, 'Dr. SUMARDIYONO, S.KM, M.Kes MELAKUKAN DESIMINASI HASIL PENGABDIAN KEPADA MASYARAKAT TIM PENGABDI PPKG LPPM UNS PADA SEMINAR NASONAL DAN CALL FOR PAPER PKM CENTER UNIVERSITAS SEBELAS MARET SURAKARTA', '2020-12-22', 'Dr__Sumardiyono5.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. ', 'Zoom', 'PPKG', 50, '2020-11-23', 1),
(9, 'Dr. Rina Herlina Haryanti, S.Sos, M.Si (Peergroup PPKG) mengikuti Diskusi Kelompok Terarah (FGD) Penelitian “IN-FORMASI PEREMPUAN”', '2020-02-13', 'Dr__Rina_Herlina_Haryanti,_S_Sos,_M_Si3.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br /><br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br /><br />\r\n<br /><br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br /><br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'The Royal Surakarta Heritage Slamet Riyadi St No.6', 'Umum', 25, '2020-02-03', 1),
(10, 'Sosialisasi Hasil Analisis Data SDKI Jawa Tengah 2017', '2019-11-13', 'Sosialisasi_Hasil_Analisis_Data2.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', ' Hotel Getz , jl. MT Haryono Semarang', 'Umum', 50, '2019-10-28', 1),
(11, 'MONEV STRATEGI NASIONAL AKPSH DI JAWA TENGAH', '2020-12-11', 'monev_strategi3.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'Kantor', 'PPKG', 15, '2020-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_pengabdian`
--

CREATE TABLE `tbl_event_pengabdian` (
  `id_pengabdian` int(11) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `avatar` varchar(32) NOT NULL,
  `deskripsi_agenda` text NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `peserta` varchar(12) NOT NULL,
  `kuota` int(3) NOT NULL,
  `batas_waktu_pendaftaran` date NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event_pengabdian`
--

INSERT INTO `tbl_event_pengabdian` (`id_pengabdian`, `nama_agenda`, `tanggal_pelaksanaan`, `avatar`, `deskripsi_agenda`, `tempat`, `peserta`, `kuota`, `batas_waktu_pendaftaran`, `id_peserta`) VALUES
(14, 'PENGABDIAN MASYARAKAT UNTUK MENINGKATKAN KUALITAS HIDUP DAN KEMANDIRIAN LANSIA', '2021-06-21', 'PENGABDIAN_MASYARAKAT4.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. ', 'Nursing Home (Pusat Kegiatan Usia Lanjut) Aisyiyah Surakarta', 'Umum', 50, '2021-06-01', 1),
(15, 'Peer Group PPKG UNS Tekankan Bahwa Riset Berperspektif Gender Tidak Hanya Kaji Tentang Perempuan di Seminar Online UNISRI', '2020-10-16', 'Peer_Group_PPKG_UNS1.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'Microsoft Teams', 'PPKG', 25, '2020-09-30', 1),
(16, 'Dr. SUMARDIYONO, S.KM, M.Kes MELAKUKAN DESIMINASI HASIL PENGABDIAN KEPADA MASYARAKAT TIM PENGABDI PPKG LPPM UNS PADA SEMINAR NASONAL DAN CALL FOR PAPER PKM CENTER UNIVERSITAS SEBELAS MARET SURAKARTA', '2020-12-22', 'Dr__Sumardiyono4.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br /><br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br /><br />\r\n<br /><br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. ', 'Zoom', 'PPKG', 50, '2020-12-02', 1),
(17, 'Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS mengadakan Pengabdian kepada Masyarakat tentang Senam lansia dalam menghambat proses penuaan dini di Panti Jompo Aisyiyah Surakarta', '2022-07-16', 'senamlansia6.png', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. <br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. ', 'Panti Jompo Aisyiyah Surakarta', 'Umum', 15, '2022-06-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_seminar`
--

CREATE TABLE `tbl_event_seminar` (
  `id_seminar` int(11) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `deskripsi_agenda` text NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `peserta` varchar(12) NOT NULL,
  `kuota` int(3) NOT NULL,
  `batas_waktu_pendaftaran` date NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event_seminar`
--

INSERT INTO `tbl_event_seminar` (`id_seminar`, `nama_agenda`, `tanggal_pelaksanaan`, `avatar`, `deskripsi_agenda`, `tempat`, `peserta`, `kuota`, `batas_waktu_pendaftaran`, `id_peserta`) VALUES
(7, 'SARASEHAN BULANAN PPKG LPPM UNS', '2021-08-16', 'SARASEHAN_BULANAN2.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'Zoom', 'Umum', 67, '2021-08-02', 1),
(8, 'KKI Surakarta Peringati Harganas 2021', '2021-07-01', 'WEBINAR-kki-7-724x10242.png', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'Zoom', 'Umum', 67, '2021-06-21', 1),
(9, 'Dr. SUMARDIYONO, S.KM, M.Kes MELAKUKAN DESIMINASI HASIL PENGABDIAN KEPADA MASYARAKAT TIM PENGABDI PPKG LPPM UNS PADA SEMINAR NASONAL DAN CALL FOR PAPER PKM CENTER UNIVERSITAS SEBELAS MARET SURAKARTA', '2020-12-22', 'Dr__Sumardiyono7.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'Zoom', 'PPKG', 20, '2020-12-01', 1),
(10, 'Mini Talk Show VOCATION 2.0', '2020-12-02', 'mini_talk8.jpg', 'Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\n<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.<br />\r\nDeskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event. Deskripsi event.', 'Zoom', 'PPKG', 25, '2020-11-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi_event_kerjasama`
--

CREATE TABLE `tbl_registrasi_event_kerjasama` (
  `id_registrasi` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `status_anggota` varchar(15) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(32) NOT NULL,
  `id_peserta` int(32) NOT NULL,
  `id_kerjasama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrasi_event_kerjasama`
--

INSERT INTO `tbl_registrasi_event_kerjasama` (`id_registrasi`, `nama_lengkap`, `nama_agenda`, `status_anggota`, `no_hp`, `email`, `tanggal_registrasi`, `avatar`, `id_peserta`, `id_kerjasama`) VALUES
(4, 'Administrator PPKG UNS', 'Perkenalkan Kegiatan Olahraga dan Sarana Rekreasi, Kerjasama Pusat Penelitian Kependudukan dan Gender (PPKG) LPPM UNS Paguyuban SACHAROMA dan KJNI Jogyakarta Mengadakan Sosialisasi Manfaat Jalan Nordic bagi Kesehatan\r\n', 'Non-PPKG', '08767312122', 'SdawewewewS@GMAIL.COM', '2023-09-13 04:15:40', 'admin14.jpg', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi_event_pendidikan`
--

CREATE TABLE `tbl_registrasi_event_pendidikan` (
  `id_registrasi` int(15) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `status_anggota` varchar(15) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(32) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrasi_event_pendidikan`
--

INSERT INTO `tbl_registrasi_event_pendidikan` (`id_registrasi`, `nama_lengkap`, `nama_agenda`, `status_anggota`, `no_hp`, `email`, `tanggal_registrasi`, `avatar`, `id_pendidikan`, `id_peserta`) VALUES
(3, 'Administrator PPKG UNS', ' wkjljkncv', 'Non-PPKG', '08767318898', 'xcxcx@GMAIL.COM', '2023-08-29 09:42:59', 'admin15.jpg', 6, 1),
(4, 'tes', ' SARASEHAN BULANAN PPKG LPPM UNS', 'PPKG', '0123498974', 'Afsalcxx@gmail.com', '2023-09-08 01:09:26', 'Parnox_Multadix2.jpg', 1, 1),
(5, 'tes', ' ', 'PPKG', '17542', 'SSDFSD@GMAIL.COM', '2023-10-25 00:10:37', 'Injins_Sundo9.jpg', 1, 1),
(6, 'tes akun', ' ', 'PPKG', '17542', 'SSDFSD@GMAIL.COM', '2023-10-25 06:05:25', 'Kiraning_Xuring14.jpg', 1, 104);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi_event_penelitian`
--

CREATE TABLE `tbl_registrasi_event_penelitian` (
  `id_registrasi` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `status_anggota` varchar(15) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(32) NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrasi_event_penelitian`
--

INSERT INTO `tbl_registrasi_event_penelitian` (`id_registrasi`, `nama_lengkap`, `nama_agenda`, `status_anggota`, `no_hp`, `email`, `tanggal_registrasi`, `avatar`, `id_penelitian`, `id_peserta`) VALUES
(5, 'Administrator PPKG UNS', ' dfdfdfdfd', 'PPKG', '08567631111', 'SzxzaSZ@GMAIL.COM', '2023-08-29 10:39:35', 'admin19.jpg', 6, 1),
(6, 'tes', ' Dr. SUMARDIYONO, S.KM, M.Kes MELAKUKAN DESIMINASI HASIL PENGABDIAN KEPADA MASYARAKAT TIM PENGABDI PPKG LPPM UNS PADA SEMINAR NASONAL DAN CALL FOR PAPER PKM CENTER UNIVERSITAS SEBELAS MARET SURAKARTA', 'PPKG', '12167683', 'kikomio@gmail.com', '2023-09-13 03:36:26', 'admin35.jpg', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi_event_pengabdian`
--

CREATE TABLE `tbl_registrasi_event_pengabdian` (
  `id_registrasi` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `status_anggota` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(32) NOT NULL,
  `id_pengabdian` int(11) NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrasi_event_pengabdian`
--

INSERT INTO `tbl_registrasi_event_pengabdian` (`id_registrasi`, `nama_lengkap`, `nama_agenda`, `status_anggota`, `no_hp`, `email`, `tanggal_registrasi`, `avatar`, `id_pengabdian`, `id_peserta`) VALUES
(3, 'Administrator PPKG UNS', '\r\nPENGABDIAN MASYARAKAT UNTUK MENINGKATKAN KUALITAS HIDUP DAN KEMANDIRIAN LANSIA', 'PPKG', '085676312323', 'SwewewdS@GMAIL.COM', '2023-09-13 03:09:50', 'admin-with-cogwheels1.png', 14, 1),
(4, 'Orlanx Sintiax', ' PENGABDIAN MASYARAKAT UNTUK MENINGKATKAN KUALITAS HIDUP DAN KEMANDIRIAN LANSIA', 'Non-PPKG', '17542', 'SSDFSD@GMAIL.COM', '2023-10-25 07:35:52', 'Kiraning_Xuring15.jpg', 14, 104);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi_event_seminar`
--

CREATE TABLE `tbl_registrasi_event_seminar` (
  `id_registrasi` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `status_anggota` varchar(15) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(32) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `id_peserta` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrasi_event_seminar`
--

INSERT INTO `tbl_registrasi_event_seminar` (`id_registrasi`, `nama_lengkap`, `nama_agenda`, `status_anggota`, `no_hp`, `email`, `tanggal_registrasi`, `avatar`, `id_seminar`, `id_peserta`) VALUES
(3, 'Administrator PPKG UNS', ' seriusdsn', 'Non-PPKG', '34343', 'sddsdsd@GMAIL.COM', '2023-08-29 10:51:45', 'admin24.jpg', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `role` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nia` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `username`, `password`, `avatar`, `role`, `jenis_kelamin`, `no_hp`, `nia`) VALUES
(1, 'tes', 'admin@gmail.com', 'Administrator', '123', 'admin5.jpg', 'Admin', 'Pria', '085647549321', 'M3118078ASAS'),
(104, 'Orlanx Sintiax', 'Orlanx@gmail.com', 'Kiraninx', '123', 'Orlanx_Sintiax.jpg', 'PPKG', 'Wanita', '0854231122', 'J343213X'),
(105, 'AWAWAW', 'Parnox@gmail.com', 'Parnovx', '123', 'Parnox_Multadix1.jpg', 'PPKG', 'Pria', '0123498909', 'R311807X'),
(106, 'Q', 'SSDFSD@GMAIL.COM', 'AdmDF', '1', 'Fernandou_Restiav24.jpg', 'Non-PPKG', 'Pria', '17542', 'W'),
(107, 'tes akun', 'tes_akun@gmail.com', 'tes_akun', '123', 'default.png', 'Non-PPKG', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel_kerjasama`
--
ALTER TABLE `tbl_artikel_kerjasama`
  ADD PRIMARY KEY (`id_artikel_kerjasama`),
  ADD KEY `penulis_ibfk_1` (`id_penulis`);

--
-- Indexes for table `tbl_artikel_pendidikan`
--
ALTER TABLE `tbl_artikel_pendidikan`
  ADD PRIMARY KEY (`id_artikel_pendidikan`),
  ADD KEY `penulis_ibfk_2` (`id_penulis`);

--
-- Indexes for table `tbl_artikel_penelitian`
--
ALTER TABLE `tbl_artikel_penelitian`
  ADD PRIMARY KEY (`id_artikel_penelitian`),
  ADD KEY `penulis_ibfk_3` (`id_penulis`);

--
-- Indexes for table `tbl_artikel_pengabdian`
--
ALTER TABLE `tbl_artikel_pengabdian`
  ADD PRIMARY KEY (`id_artikel_pengabdian`),
  ADD KEY `penulis_ibfk_4` (`id_penulis`);

--
-- Indexes for table `tbl_artikel_seminar`
--
ALTER TABLE `tbl_artikel_seminar`
  ADD PRIMARY KEY (`id_artikel_seminar`),
  ADD KEY `penulis_ibfk_5` (`id_penulis`);

--
-- Indexes for table `tbl_event_kerjasama`
--
ALTER TABLE `tbl_event_kerjasama`
  ADD PRIMARY KEY (`id_kerjasama`),
  ADD KEY `peserta_ibfk_1` (`id_peserta`);

--
-- Indexes for table `tbl_event_pendidikan`
--
ALTER TABLE `tbl_event_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `peserta_ibfk_3` (`id_peserta`);

--
-- Indexes for table `tbl_event_penelitian`
--
ALTER TABLE `tbl_event_penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `peserta_ibfk_5` (`id_peserta`);

--
-- Indexes for table `tbl_event_pengabdian`
--
ALTER TABLE `tbl_event_pengabdian`
  ADD PRIMARY KEY (`id_pengabdian`),
  ADD KEY `peserta_ibfk_4` (`id_peserta`);

--
-- Indexes for table `tbl_event_seminar`
--
ALTER TABLE `tbl_event_seminar`
  ADD PRIMARY KEY (`id_seminar`),
  ADD KEY `peserta_ibfk_6` (`id_peserta`);

--
-- Indexes for table `tbl_registrasi_event_kerjasama`
--
ALTER TABLE `tbl_registrasi_event_kerjasama`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `peserta_agenda_ibfk_1` (`id_peserta`);

--
-- Indexes for table `tbl_registrasi_event_pendidikan`
--
ALTER TABLE `tbl_registrasi_event_pendidikan`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `peserta_agenda_ibfk_2` (`id_peserta`);

--
-- Indexes for table `tbl_registrasi_event_penelitian`
--
ALTER TABLE `tbl_registrasi_event_penelitian`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `peserta_agenda_ibfk_5` (`id_peserta`);

--
-- Indexes for table `tbl_registrasi_event_pengabdian`
--
ALTER TABLE `tbl_registrasi_event_pengabdian`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `peserta_agenda_ibfk_3` (`id_peserta`);

--
-- Indexes for table `tbl_registrasi_event_seminar`
--
ALTER TABLE `tbl_registrasi_event_seminar`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `peserta_agenda_ibfk_6` (`id_peserta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel_kerjasama`
--
ALTER TABLE `tbl_artikel_kerjasama`
  MODIFY `id_artikel_kerjasama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_artikel_pendidikan`
--
ALTER TABLE `tbl_artikel_pendidikan`
  MODIFY `id_artikel_pendidikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_artikel_penelitian`
--
ALTER TABLE `tbl_artikel_penelitian`
  MODIFY `id_artikel_penelitian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_artikel_pengabdian`
--
ALTER TABLE `tbl_artikel_pengabdian`
  MODIFY `id_artikel_pengabdian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_artikel_seminar`
--
ALTER TABLE `tbl_artikel_seminar`
  MODIFY `id_artikel_seminar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_event_kerjasama`
--
ALTER TABLE `tbl_event_kerjasama`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_event_pendidikan`
--
ALTER TABLE `tbl_event_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_event_penelitian`
--
ALTER TABLE `tbl_event_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_event_pengabdian`
--
ALTER TABLE `tbl_event_pengabdian`
  MODIFY `id_pengabdian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_event_seminar`
--
ALTER TABLE `tbl_event_seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_registrasi_event_kerjasama`
--
ALTER TABLE `tbl_registrasi_event_kerjasama`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_registrasi_event_pendidikan`
--
ALTER TABLE `tbl_registrasi_event_pendidikan`
  MODIFY `id_registrasi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_registrasi_event_penelitian`
--
ALTER TABLE `tbl_registrasi_event_penelitian`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_registrasi_event_pengabdian`
--
ALTER TABLE `tbl_registrasi_event_pengabdian`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_registrasi_event_seminar`
--
ALTER TABLE `tbl_registrasi_event_seminar`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_artikel_kerjasama`
--
ALTER TABLE `tbl_artikel_kerjasama`
  ADD CONSTRAINT `penulis_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_artikel_pendidikan`
--
ALTER TABLE `tbl_artikel_pendidikan`
  ADD CONSTRAINT `penulis_ibfk_2` FOREIGN KEY (`id_penulis`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_artikel_penelitian`
--
ALTER TABLE `tbl_artikel_penelitian`
  ADD CONSTRAINT `penulis_ibfk_3` FOREIGN KEY (`id_penulis`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_artikel_pengabdian`
--
ALTER TABLE `tbl_artikel_pengabdian`
  ADD CONSTRAINT `penulis_ibfk_4` FOREIGN KEY (`id_penulis`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_artikel_seminar`
--
ALTER TABLE `tbl_artikel_seminar`
  ADD CONSTRAINT `penulis_ibfk_5` FOREIGN KEY (`id_penulis`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_event_kerjasama`
--
ALTER TABLE `tbl_event_kerjasama`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_event_pendidikan`
--
ALTER TABLE `tbl_event_pendidikan`
  ADD CONSTRAINT `peserta_ibfk_3` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_event_penelitian`
--
ALTER TABLE `tbl_event_penelitian`
  ADD CONSTRAINT `peserta_ibfk_5` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_event_pengabdian`
--
ALTER TABLE `tbl_event_pengabdian`
  ADD CONSTRAINT `peserta_ibfk_4` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_event_seminar`
--
ALTER TABLE `tbl_event_seminar`
  ADD CONSTRAINT `peserta_ibfk_6` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_registrasi_event_kerjasama`
--
ALTER TABLE `tbl_registrasi_event_kerjasama`
  ADD CONSTRAINT `peserta_agenda_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_registrasi_event_pendidikan`
--
ALTER TABLE `tbl_registrasi_event_pendidikan`
  ADD CONSTRAINT `peserta_agenda_ibfk_2` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_registrasi_event_penelitian`
--
ALTER TABLE `tbl_registrasi_event_penelitian`
  ADD CONSTRAINT `peserta_agenda_ibfk_5` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_registrasi_event_pengabdian`
--
ALTER TABLE `tbl_registrasi_event_pengabdian`
  ADD CONSTRAINT `peserta_agenda_ibfk_3` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_registrasi_event_seminar`
--
ALTER TABLE `tbl_registrasi_event_seminar`
  ADD CONSTRAINT `peserta_agenda_ibfk_6` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
