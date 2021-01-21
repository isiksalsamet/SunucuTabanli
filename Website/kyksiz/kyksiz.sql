-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Nis 2020, 00:28:14
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kyksiz`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `apartyurt`
--

CREATE TABLE `apartyurt` (
  `apartyurt_id` int(11) NOT NULL,
  `apartyurt_isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_tur` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_foto` varchar(2500) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_foto1` varchar(2500) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_foto2` varchar(2500) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_foto3` varchar(2500) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_foto4` varchar(2500) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_bilgi` text COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_yorum` text COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_puan` int(2) NOT NULL,
  `apartyurt_kayit` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `apartyurt_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `apartyurt_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `apartyurt`
--

INSERT INTO `apartyurt` (`apartyurt_id`, `apartyurt_isim`, `apartyurt_tur`, `apartyurt_foto`, `apartyurt_foto1`, `apartyurt_foto2`, `apartyurt_foto3`, `apartyurt_foto4`, `apartyurt_adres`, `apartyurt_gsm`, `apartyurt_bilgi`, `apartyurt_email`, `apartyurt_il`, `apartyurt_ilce`, `apartyurt_yorum`, `apartyurt_puan`, `apartyurt_kayit`, `apartyurt_bakim`, `apartyurt_durum`) VALUES
(2, 'emre apart', 'Erkek öğrenci Apartı', 'yurt1.jpg', 'yurt2.jpg', 'yurt3.jpg', 'yurt4.jpg', 'yurt5.jpg', 'Emek Mah.', '5123125115', 'aadaqwdqdasdada', 'emek@gmail.com', 'BURDUR', 'MERKEZ', '', 0, '2020-04-24 22:25:13', '', '1'),
(7, 'emre aparts', 'Erkek Öğrenci Yurdu', 'apartlar/31590', '', '', '', '', 'sadasdasdas', '05234559434', 'asdadasd', 'aparts@gmail.com', 'BURDUR', 'MERKEZ', '', 0, '2020-04-24 21:39:32', '0', '1'),
(9, 'emre aparts', 'Erkek Öğrenci Yurdu', 'apartlar/27413', '', '', '', '', 'Emek Mahellesi', 'adasd12dasd', 'asdadsa', '123sdad@gmail.com', 'BURDUR', 'MERKEZ', '', 0, '2020-04-24 21:39:42', '0', '1'),
(10, 'emre aparts', 'Erkek Öğrenci Yurdu', 'apartlar/29544', 'yurt1.jpg', 'yurt4.jpg', 'yurt5.jpg', 'yurt6.jpg', 'Emek Mahallesi 15 Nolu Cadde Elmadağ Konutları Arkası', '05555555555', 'Yurt 300 Yataklı Bir Yurttur', 'aparts@gmail.com', 'ANKARA', 'ELMADAĞ', '', 0, '2020-04-24 23:10:58', '0', '1'),
(11, 'Devran Aparts', 'Erkek Öğrenci Yurdu', 'apartlar/29544', 'yurt4.jpg', 'yurt4.jpg', 'yurt5.jpg', 'yurt6.jpg', 'Emek Mahallesi 15 Nolu Cadde Elmadağ Konutları Arkası', '05555555555', 'Yurt 200 Yataklı Bir Yurttur', 'aparts@gmail.com', 'ANKARA', 'ELMADAĞ', '', 0, '2020-04-24 23:13:51', '0', '1'),
(12, 'Falan Filan Aparts', 'Erkek Öğrenci Yurdu', 'apartlar/29544', 'yurt5.jpg', 'yurt4.jpg', 'yurt5.jpg', 'yurt6.jpg', 'Emek Mahallesi 15 Nolu Cadde Elmadağ Konutları Arkası', '05555555555', 'Yurt 200 Yataklı Bir Yurttur', 'aparts@gmail.com', 'ANKARA', 'ELMADAĞ', '', 0, '2020-04-24 23:10:58', '0', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(2500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_il`, `ayar_ilce`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'images/20574logo2.png', '', 'Kyksiz', 'Makü lisans tezi', 'apart,özel yurt', 'Kyksiz', '0538 913 86 83', '0534 668 93 02', '', 'kkyksiz@gmail.com', 'BURDUR', 'MERKEZ', 'Mehmet Akif Ersoy Üniversitesi', '7/24 açık kyksiz.com', 'Maps_Api', 'Analystic_Api', 'Zopim_Api', 'https://www.facebook.com/kyksiz.kyksiz.7', 'https://twitter.com/kyksiz', 'https://instagram.com', 'https://kkyksiz@gmail.com', 'www.youtube.com', 'mail.alanadi.com', 'kullanıcı adı', '123456', '555', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evine_arkadas_ilan`
--

CREATE TABLE `evine_arkadas_ilan` (
  `ilan_id` int(11) NOT NULL,
  `ad_soyad` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `il` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ilce` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meslek` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ev_bilgi` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kriter` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tariih` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `evine_arkadas_ilan`
--

INSERT INTO `evine_arkadas_ilan` (`ilan_id`, `ad_soyad`, `mail`, `il`, `ilce`, `adres`, `meslek`, `ev_bilgi`, `kriter`, `tariih`) VALUES
(4, 'DEVRAN ATA', 'bilisimdevran@gmail.com', 'ADIYAMAN', 'ADIYAMAN MERKEZ', 'asd', 'Öğrenci', 'asd', 'asd', '25.04.2020 00:52:14'),
(5, 'DEVRAN ATA', 'bilisimdevran@gmail.com', 'ADIYAMAN', 'ADIYAMAN MERKEZ', 'asd', 'Öğrenci', 'asd', 'asd', '25.04.2020 00:52:14'),
(6, 'DEVRAN ATA', 'bilisimdevran@gmail.com', 'ADIYAMAN', 'ADIYAMAN MERKEZ', 'asd', 'Öğrenci', 'asd', 'asd', '25.04.2020 00:52:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_vizyonbaslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyonbaslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerikbaslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_vizyonbaslik`, `hakkimizda_misyonbaslik`, `hakkimizda_icerikbaslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Vizyonumuz', 'Misyonumuz', 'İçeriğimiz', '<p>Content Marketing yani i&ccedil;erik pazarlaması ; markaların, şirketlerin &ccedil;evrimi&ccedil;i platformlar &uuml;zerinden yazı, ses, fotoğraf, video, grafik ve inografikler ile hazırlanan i&ccedil;eriklerle hedef kitlenin dikkatini &ccedil;ekerek, marka ve şirketler ile t&uuml;ketici arasında bağ kurulmasını, bilinirliği ve satışları arttırmayı ama&ccedil;layan yeni nesil pazarlama t&uuml;r&uuml;d&uuml;r.</p>\r\n', '4_jY3kYMxYo', 'Müşterilerin çevrim içi ortamda satın almak isteyebilecekleri her şeyi bulabilecekleri ve keşfedebilecekleri, Dünyanın en müşteri merkezli şirketi olmak.', ' Müşterilerimize mümkün olan en düşük fiyatlar, mevcut en iyi seçimler ve azami derecede bir kolaylık sunmak için çalışıyoruz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanlar`
--

CREATE TABLE `ilanlar` (
  `ilan_id` int(11) NOT NULL,
  `ilan_il_id` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_ilce_id` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_veren_adi` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_veren_tel` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `bilgi` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_tarihi` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilanlar`
--

INSERT INTO `ilanlar` (`ilan_id`, `ilan_il_id`, `ilan_ilce_id`, `ilan_veren_adi`, `ilan_veren_tel`, `bilgi`, `ilan_tarihi`) VALUES
(7, '15', '182', 'devran ata', '05445097474', 'dsadsa sad ', '19.04.2020 21:41:23'),
(8, '6', '74', 'devran ata', '05445097474', 'sadsad', '19.04.2020 21:41:44'),
(9, '2', '14', 'devran ata', '05445097474', 'wqesadas', '19.04.2020 22:26:42'),
(10, '3', '26', 'devran ata', '05445097474', 'dasd sad ', '24.04.2020 23:23:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilceler`
--

CREATE TABLE `ilceler` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ilid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilceler`
--

INSERT INTO `ilceler` (`id`, `name`, `ilid`) VALUES
(1, 'SEYHAN', 1),
(2, 'CEYHAN', 1),
(3, 'FEKE', 1),
(4, 'KARAİSALI', 1),
(5, 'KARATAŞ', 1),
(6, 'KOZAN', 1),
(7, 'POZANTI', 1),
(8, 'SAİMBEYLİ', 1),
(9, 'TUFANBEYLİ', 1),
(10, 'YUMURTALIK', 1),
(11, 'YÜREĞİR', 1),
(12, 'ALADAĞ', 1),
(13, 'İMAMOĞLU', 1),
(14, 'ADIYAMAN MERKEZ', 2),
(15, 'BESNİ', 2),
(16, 'ÇELİKHAN', 2),
(17, 'GERGER', 2),
(18, 'GÖLBAŞI', 2),
(19, 'KAHTA', 2),
(20, 'SAMSAT', 2),
(21, 'SİNCİK', 2),
(22, 'TUT', 2),
(23, 'AFYONMERKEZ', 3),
(24, 'BOLVADİN', 3),
(25, 'ÇAY', 3),
(26, 'DAZKIRI', 3),
(27, 'DİNAR', 3),
(28, 'EMİRDAĞ', 3),
(29, 'İHSANİYE', 3),
(30, 'SANDIKLI', 3),
(31, 'SİNANPAŞA', 3),
(32, 'SULDANDAĞI', 3),
(33, 'ŞUHUT', 3),
(34, 'BAŞMAKÇI', 3),
(35, 'BAYAT', 3),
(36, 'İŞCEHİSAR', 3),
(37, 'ÇOBANLAR', 3),
(38, 'EVCİLER', 3),
(39, 'HOCALAR', 3),
(40, 'KIZILÖREN', 3),
(41, 'AKSARAY MERKEZ', 68),
(42, 'ORTAKÖY', 68),
(43, 'AĞAÇÖREN', 68),
(44, 'GÜZELYURT', 68),
(45, 'SARIYAHŞİ', 68),
(46, 'ESKİL', 68),
(47, 'GÜLAĞAÇ', 68),
(48, 'AMASYA MERKEZ', 5),
(49, 'GÖYNÜÇEK', 5),
(50, 'GÜMÜŞHACIKÖYÜ', 5),
(51, 'MERZİFON', 5),
(52, 'SULUOVA', 5),
(53, 'TAŞOVA', 5),
(54, 'HAMAMÖZÜ', 5),
(55, 'ALTINDAĞ', 6),
(56, 'AYAS', 6),
(57, 'BALA', 6),
(58, 'BEYPAZARI', 6),
(59, 'ÇAMLIDERE', 6),
(60, 'ÇANKAYA', 6),
(61, 'ÇUBUK', 6),
(62, 'ELMADAĞ', 6),
(63, 'GÜDÜL', 6),
(64, 'HAYMANA', 6),
(65, 'KALECİK', 6),
(66, 'KIZILCAHAMAM', 6),
(67, 'NALLIHAN', 6),
(68, 'POLATLI', 6),
(69, 'ŞEREFLİKOÇHİSAR', 6),
(70, 'YENİMAHALLE', 6),
(71, 'GÖLBAŞI', 6),
(72, 'KEÇİÖREN', 6),
(73, 'MAMAK', 6),
(74, 'SİNCAN', 6),
(75, 'KAZAN', 6),
(76, 'AKYURT', 6),
(77, 'ETİMESGUT', 6),
(78, 'EVREN', 6),
(79, 'ANSEKİ', 7),
(80, 'ALANYA', 7),
(81, 'ANTALYA MERKEZİ', 7),
(82, 'ELMALI', 7),
(83, 'FİNİKE', 7),
(84, 'GAZİPAŞA', 7),
(85, 'GÜNDOĞMUŞ', 7),
(86, 'KAŞ', 7),
(87, 'KORKUTELİ', 7),
(88, 'KUMLUCA', 7),
(89, 'MANAVGAT', 7),
(90, 'SERİK', 7),
(91, 'DEMRE', 7),
(92, 'İBRADI', 7),
(93, 'KEMER', 7),
(94, 'ARDAHAN MERKEZ', 75),
(95, 'GÖLE', 75),
(96, 'ÇILDIR', 75),
(97, 'HANAK', 75),
(98, 'POSOF', 75),
(99, 'DAMAL', 75),
(100, 'ARDANUÇ', 8),
(101, 'ARHAVİ', 8),
(102, 'ARTVİN MERKEZ', 8),
(103, 'BORÇKA', 8),
(104, 'HOPA', 8),
(105, 'ŞAVŞAT', 8),
(106, 'YUSUFELİ', 8),
(107, 'MURGUL', 8),
(108, 'AYDIN MERKEZ', 9),
(109, 'BOZDOĞAN', 9),
(110, 'ÇİNE', 9),
(111, 'GERMENCİK', 9),
(112, 'KARACASU', 9),
(113, 'KOÇARLI', 9),
(114, 'KUŞADASI', 9),
(115, 'KUYUCAK', 9),
(116, 'NAZİLLİ', 9),
(117, 'SÖKE', 9),
(118, 'SULTANHİSAR', 9),
(119, 'YENİPAZAR', 9),
(120, 'BUHARKENT', 9),
(121, 'İNCİRLİOVA', 9),
(122, 'KARPUZLU', 9),
(123, 'KÖŞK', 9),
(124, 'DİDİM', 9),
(125, 'AĞRI MERKEZ', 4),
(126, 'DİYADİN', 4),
(127, 'DOĞUBEYAZIT', 4),
(128, 'ELEŞKİRT', 4),
(129, 'HAMUR', 4),
(130, 'PATNOS', 4),
(131, 'TAŞLIÇAY', 4),
(132, 'TUTAK', 4),
(133, 'AYVALIK', 10),
(134, 'BALIKESİR MERKEZ', 10),
(135, 'BALYA', 10),
(136, 'BANDIRMA', 10),
(137, 'BİGADİÇ', 10),
(138, 'BURHANİYE', 10),
(139, 'DURSUNBEY', 10),
(140, 'EDREMİT', 10),
(141, 'ERDEK', 10),
(142, 'GÖNEN', 10),
(143, 'HAVRAN', 10),
(144, 'İVRİNDİ', 10),
(145, 'KEPSUT', 10),
(146, 'MANYAS', 10),
(147, 'SAVAŞTEPE', 10),
(148, 'SINDIRGI', 10),
(149, 'SUSURLUK', 10),
(150, 'MARMARA', 10),
(151, 'GÖMEÇ', 10),
(152, 'BARTIN MERKEZ', 74),
(153, 'KURUCAŞİLE', 74),
(154, 'ULUS', 74),
(155, 'AMASRA', 74),
(156, 'BATMAN MERKEZ', 72),
(157, 'BEŞİRİ', 72),
(158, 'GERCÜŞ', 72),
(159, 'KOZLUK', 72),
(160, 'SASON', 72),
(161, 'HASANKEYF', 72),
(162, 'BAYBURT MERKEZ', 69),
(163, 'AYDINTEPE', 69),
(164, 'DEMİRÖZÜ', 69),
(165, 'BOLU MERKEZ', 14),
(166, 'GEREDE', 14),
(167, 'GÖYNÜK', 14),
(168, 'KIBRISCIK', 14),
(169, 'MENGEN', 14),
(170, 'MUDURNU', 14),
(171, 'SEBEN', 14),
(172, 'DÖRTDİVAN', 14),
(173, 'YENİÇAĞA', 14),
(174, 'AĞLASUN', 15),
(175, 'BUCAK', 15),
(176, 'BURDUR MERKEZ', 15),
(177, 'GÖLHİSAR', 15),
(178, 'TEFENNİ', 15),
(179, 'YEŞİLOVA', 15),
(180, 'KARAMANLI', 15),
(181, 'KEMER', 15),
(182, 'ALTINYAYLA', 15),
(183, 'ÇAVDIR', 15),
(184, 'ÇELTİKÇİ', 15),
(185, 'GEMLİK', 16),
(186, 'İNEGÖL', 16),
(187, 'İZNİK', 16),
(188, 'KARACABEY', 16),
(189, 'KELES', 16),
(190, 'MUDANYA', 16),
(191, 'MUSTAFA K. PAŞA', 16),
(192, 'ORHANELİ', 16),
(193, 'ORHANGAZİ', 16),
(194, 'YENİŞEHİR', 16),
(195, 'BÜYÜK ORHAN', 16),
(196, 'HARMANCIK', 16),
(197, 'NÜLİFER', 16),
(198, 'OSMAN GAZİ', 16),
(199, 'YILDIRIM', 16),
(200, 'GÜRSU', 16),
(201, 'KESTEL', 16),
(202, 'BİLECİK MERKEZ', 11),
(203, 'BOZÜYÜK', 11),
(204, 'GÖLPAZARI', 11),
(205, 'OSMANELİ', 11),
(206, 'PAZARYERİ', 11),
(207, 'SÖĞÜT', 11),
(208, 'YENİPAZAR', 11),
(209, 'İNHİSAR', 11),
(210, 'BİNGÖL MERKEZ', 12),
(211, 'GENÇ', 12),
(212, 'KARLIOVA', 12),
(213, 'KİGI', 12),
(214, 'SOLHAN', 12),
(215, 'ADAKLI', 12),
(216, 'YAYLADERE', 12),
(217, 'YEDİSU', 12),
(218, 'ADİLCEVAZ', 13),
(219, 'AHLAT', 13),
(220, 'BİTLİS MERKEZ', 13),
(221, 'HİZAN', 13),
(222, 'MUTKİ', 13),
(223, 'TATVAN', 13),
(224, 'GÜROYMAK', 13),
(225, 'DENİZLİ MERKEZ', 20),
(226, 'ACIPAYAM', 20),
(227, 'BULDAN', 20),
(228, 'ÇAL', 20),
(229, 'ÇAMELİ', 20),
(230, 'ÇARDAK', 20),
(231, 'ÇİVRİL', 20),
(232, 'GÜNEY', 20),
(233, 'KALE', 20),
(234, 'SARAYKÖY', 20),
(235, 'TAVAS', 20),
(236, 'BABADAĞ', 20),
(237, 'BEKİLLİ', 20),
(238, 'HONAZ', 20),
(239, 'SERİNHİSAR', 20),
(240, 'AKKÖY', 20),
(241, 'BAKLAN', 20),
(242, 'BEYAĞAÇ', 20),
(243, 'BOZKURT', 20),
(244, 'DÜZCE MERKEZ', 81),
(245, 'AKÇAKOCA', 81),
(246, 'YIĞILCA', 81),
(247, 'CUMAYERİ', 81),
(248, 'GÖLYAKA', 81),
(249, 'ÇİLİMLİ', 81),
(250, 'GÜMÜŞOVA', 81),
(251, 'KAYNAŞLI', 81),
(252, 'DİYARBAKIR MERKEZ', 21),
(253, 'BİSMİL', 21),
(254, 'ÇERMİK', 21),
(255, 'ÇINAR', 21),
(256, 'ÇÜNGÜŞ', 21),
(257, 'DİCLE', 21),
(258, 'ERGANİ', 21),
(259, 'HANİ', 21),
(260, 'HAZRO', 21),
(261, 'KULP', 21),
(262, 'LİCE', 21),
(263, 'SİLVAN', 21),
(264, 'EĞİL', 21),
(265, 'KOCAKÖY', 21),
(266, 'EDİRNE MERKEZ', 22),
(267, 'ENEZ', 22),
(268, 'HAVSA', 22),
(269, 'İPSALA', 22),
(270, 'KEŞAN', 22),
(271, 'LALAPAŞA', 22),
(272, 'MERİÇ', 22),
(273, 'UZUNKÖPRÜ', 22),
(274, 'SÜLOĞLU', 22),
(275, 'ELAZIĞ MERKEZ', 23),
(276, 'AĞIN', 23),
(277, 'BASKİL', 23),
(278, 'KARAKOÇAN', 23),
(279, 'KEBAN', 23),
(280, 'MADEN', 23),
(281, 'PALU', 23),
(282, 'SİVRİCE', 23),
(283, 'ARICAK', 23),
(284, 'KOVANCILAR', 23),
(285, 'ALACAKAYA', 23),
(286, 'ERZURUM MERKEZ', 25),
(287, 'PALANDÖKEN', 25),
(288, 'AŞKALE', 25),
(289, 'ÇAT', 25),
(290, 'HINIS', 25),
(291, 'HORASAN', 25),
(292, 'OLTU', 25),
(293, 'İSPİR', 25),
(294, 'KARAYAZI', 25),
(295, 'NARMAN', 25),
(296, 'OLUR', 25),
(297, 'PASİNLER', 25),
(298, 'ŞENKAYA', 25),
(299, 'TEKMAN', 25),
(300, 'TORTUM', 25),
(301, 'KARAÇOBAN', 25),
(302, 'UZUNDERE', 25),
(303, 'PAZARYOLU', 25),
(304, 'ILICA', 25),
(305, 'KÖPRÜKÖY', 25),
(306, 'ÇAYIRLI', 24),
(307, 'ERZİNCAN MERKEZ', 24),
(308, 'İLİÇ', 24),
(309, 'KEMAH', 24),
(310, 'KEMALİYE', 24),
(311, 'REFAHİYE', 24),
(312, 'TERCAN', 24),
(313, 'OTLUKBELİ', 24),
(314, 'ESKİŞEHİR MERKEZ', 26),
(315, 'ÇİFTELER', 26),
(316, 'MAHMUDİYE', 26),
(317, 'MİHALIÇLIK', 26),
(318, 'SARICAKAYA', 26),
(319, 'SEYİTGAZİ', 26),
(320, 'SİVRİHİSAR', 26),
(321, 'ALPU', 26),
(322, 'BEYLİKOVA', 26),
(323, 'İNÖNÜ', 26),
(324, 'GÜNYÜZÜ', 26),
(325, 'HAN', 26),
(326, 'MİHALGAZİ', 26),
(327, 'ARABAN', 27),
(328, 'İSLAHİYE', 27),
(329, 'NİZİP', 27),
(330, 'OĞUZELİ', 27),
(331, 'YAVUZELİ', 27),
(332, 'ŞAHİNBEY', 27),
(333, 'ŞEHİT KAMİL', 27),
(334, 'KARKAMIŞ', 27),
(335, 'NURDAĞI', 27),
(336, 'GÜMÜŞHANE MERKEZ', 29),
(337, 'KELKİT', 29),
(338, 'ŞİRAN', 29),
(339, 'TORUL', 29),
(340, 'KÖSE', 29),
(341, 'KÜRTÜN', 29),
(342, 'ALUCRA', 28),
(343, 'BULANCAK', 28),
(344, 'DERELİ', 28),
(345, 'ESPİYE', 28),
(346, 'EYNESİL', 28),
(347, 'GİRESUN MERKEZ', 28),
(348, 'GÖRELE', 28),
(349, 'KEŞAP', 28),
(350, 'ŞEBİNKARAHİSAR', 28),
(351, 'TİREBOLU', 28),
(352, 'PİPAZİZ', 28),
(353, 'YAĞLIDERE', 28),
(354, 'ÇAMOLUK', 28),
(355, 'ÇANAKÇI', 28),
(356, 'DOĞANKENT', 28),
(357, 'GÜCE', 28),
(358, 'HAKKARİ MERKEZ', 30),
(359, 'ÇUKURCA', 30),
(360, 'ŞEMDİNLİ', 30),
(361, 'YÜKSEKOVA', 30),
(362, 'ALTINÖZÜ', 31),
(363, 'DÖRTYOL', 31),
(364, 'HATAY MERKEZ', 31),
(365, 'HASSA', 31),
(366, 'İSKENDERUN', 31),
(367, 'KIRIKHAN', 31),
(368, 'REYHANLI', 31),
(369, 'SAMANDAĞ', 31),
(370, 'YAYLADAĞ', 31),
(371, 'ERZİN', 31),
(372, 'BELEN', 31),
(373, 'KUMLU', 31),
(374, 'ISPARTA MERKEZ', 32),
(375, 'ATABEY', 32),
(376, 'KEÇİBORLU', 32),
(377, 'EĞİRDİR', 32),
(378, 'GELENDOST', 32),
(379, 'SİNİRKENT', 32),
(380, 'ULUBORLU', 32),
(381, 'YALVAÇ', 32),
(382, 'AKSU', 32),
(383, 'GÖNEN', 32),
(384, 'YENİŞAR BADEMLİ', 32),
(385, 'IĞDIR MERKEZ', 76),
(386, 'ARALIK', 76),
(387, 'TUZLUCA', 76),
(388, 'KARAKOYUNLU', 76),
(389, 'AFŞİN', 46),
(390, 'ANDIRIN', 46),
(391, 'ELBİSTAN', 46),
(392, 'GÖKSUN', 46),
(393, 'KAHRAMANMARAŞ MERKEZ', 46),
(394, 'PAZARCIK', 46),
(395, 'TÜRKOĞLU', 46),
(396, 'ÇAĞLAYANCERİT', 46),
(397, 'EKİNÖZÜ', 46),
(398, 'NURHAK', 46),
(399, 'EFLANİ', 78),
(400, 'ESKİPAZAR', 78),
(401, 'KARABÜK MERKEZ', 78),
(402, 'OVACIK', 78),
(403, 'SAFRANBOLU', 78),
(404, 'YENİCE', 78),
(405, 'ERMENEK', 70),
(406, 'KARAMAN MERKEZ', 70),
(407, 'AYRANCI', 70),
(408, 'KAZIMKARABEKİR', 70),
(409, 'BAŞYAYLA', 70),
(410, 'SARIVELİLER', 70),
(411, 'KARS MERKEZ', 36),
(412, 'ARPAÇAY', 36),
(413, 'DİGOR', 36),
(414, 'KAĞIZMAN', 36),
(415, 'SARIKAMIŞ', 36),
(416, 'SELİM', 36),
(417, 'SUSUZ', 36),
(418, 'AKYAKA', 36),
(419, 'ABANA', 37),
(420, 'KASTAMONU MERKEZ', 37),
(421, 'ARAÇ', 37),
(422, 'AZDAVAY', 37),
(423, 'BOZKURT', 37),
(424, 'CİDE', 37),
(425, 'ÇATALZEYTİN', 37),
(426, 'DADAY', 37),
(427, 'DEVREKANİ', 37),
(428, 'İNEBOLU', 37),
(429, 'KÜRE', 37),
(430, 'TAŞKÖPRÜ', 37),
(431, 'TOSYA', 37),
(432, 'İHSANGAZİ', 37),
(433, 'PINARBAŞI', 37),
(434, 'ŞENPAZAR', 37),
(435, 'AĞLI', 37),
(436, 'DOĞANYURT', 37),
(437, 'HANÖNÜ', 37),
(438, 'SEYDİLER', 37),
(439, 'BÜNYAN', 38),
(440, 'DEVELİ', 38),
(441, 'FELAHİYE', 38),
(442, 'İNCESU', 38),
(443, 'PINARBAŞI', 38),
(444, 'SARIOĞLAN', 38),
(445, 'SARIZ', 38),
(446, 'TOMARZA', 38),
(447, 'YAHYALI', 38),
(448, 'YEŞİLHİSAR', 38),
(449, 'AKKIŞLA', 38),
(450, 'TALAS', 38),
(451, 'KOCASİNAN', 38),
(452, 'MELİKGAZİ', 38),
(453, 'HACILAR', 38),
(454, 'ÖZVATAN', 38),
(455, 'DERİCE', 71),
(456, 'KESKİN', 71),
(457, 'KIRIKKALE MERKEZ', 71),
(458, 'SALAK YURT', 71),
(459, 'BAHŞİLİ', 71),
(460, 'BALIŞEYH', 71),
(461, 'ÇELEBİ', 71),
(462, 'KARAKEÇİLİ', 71),
(463, 'YAHŞİHAN', 71),
(464, 'KIRKKLARELİ MERKEZ', 39),
(465, 'BABAESKİ', 39),
(466, 'DEMİRKÖY', 39),
(467, 'KOFÇAY', 39),
(468, 'LÜLEBURGAZ', 39),
(469, 'VİZE', 39),
(470, 'KIRŞEHİR MERKEZ', 40),
(471, 'ÇİÇEKDAĞI', 40),
(472, 'KAMAN', 40),
(473, 'MUCUR', 40),
(474, 'AKPINAR', 40),
(475, 'AKÇAKENT', 40),
(476, 'BOZTEPE', 40),
(477, 'KOCAELİ MERKEZ', 41),
(478, 'GEBZE', 41),
(479, 'GÖLCÜK', 41),
(480, 'KANDIRA', 41),
(481, 'KARAMÜRSEL', 41),
(482, 'KÖRFEZ', 41),
(483, 'DERİNCE', 41),
(484, 'KONYA MERKEZ', 42),
(485, 'AKŞEHİR', 42),
(486, 'BEYŞEHİR', 42),
(487, 'BOZKIR', 42),
(488, 'CİHANBEYLİ', 42),
(489, 'ÇUMRA', 42),
(490, 'DOĞANHİSAR', 42),
(491, 'EREĞLİ', 42),
(492, 'HADİM', 42),
(493, 'ILGIN', 42),
(494, 'KADINHANI', 42),
(495, 'KARAPINAR', 42),
(496, 'KULU', 42),
(497, 'SARAYÖNÜ', 42),
(498, 'SEYDİŞEHİR', 42),
(499, 'YUNAK', 42),
(500, 'AKÖREN', 42),
(501, 'ALTINEKİN', 42),
(502, 'DEREBUCAK', 42),
(503, 'HÜYÜK', 42),
(504, 'KARATAY', 42),
(505, 'MERAM', 42),
(506, 'SELÇUKLU', 42),
(507, 'TAŞKENT', 42),
(508, 'AHIRLI', 42),
(509, 'ÇELTİK', 42),
(510, 'DERBENT', 42),
(511, 'EMİRGAZİ', 42),
(512, 'GÜNEYSINIR', 42),
(513, 'HALKAPINAR', 42),
(514, 'TUZLUKÇU', 42),
(515, 'YALIHÜYÜK', 42),
(516, 'KÜTAHYA  MERKEZ', 43),
(517, 'ALTINTAŞ', 43),
(518, 'DOMANİÇ', 43),
(519, 'EMET', 43),
(520, 'GEDİZ', 43),
(521, 'SİMAV', 43),
(522, 'TAVŞANLI', 43),
(523, 'ASLANAPA', 43),
(524, 'DUMLUPINAR', 43),
(525, 'HİSARCIK', 43),
(526, 'ŞAPHANE', 43),
(527, 'ÇAVDARHİSAR', 43),
(528, 'PAZARLAR', 43),
(529, 'KİLİS MERKEZ', 79),
(530, 'ELBEYLİ', 79),
(531, 'MUSABEYLİ', 79),
(532, 'POLATELİ', 79),
(533, 'MALATYA MERKEZ', 44),
(534, 'AKÇADAĞ', 44),
(535, 'ARAPGİR', 44),
(536, 'ARGUVAN', 44),
(537, 'DARENDE', 44),
(538, 'DOĞANŞEHİR', 44),
(539, 'HEKİMHAN', 44),
(540, 'PÜTÜRGE', 44),
(541, 'YEŞİLYURT', 44),
(542, 'BATTALGAZİ', 44),
(543, 'DOĞANYOL', 44),
(544, 'KALE', 44),
(545, 'KULUNCAK', 44),
(546, 'YAZIHAN', 44),
(547, 'AKHİSAR', 45),
(548, 'ALAŞEHİR', 45),
(549, 'DEMİRCİ', 45),
(550, 'GÖRDES', 45),
(551, 'KIRKAĞAÇ', 45),
(552, 'KULA', 45),
(553, 'MANİSA MERKEZ', 45),
(554, 'SALİHLİ', 45),
(555, 'SARIGÖL', 45),
(556, 'SARUHANLI', 45),
(557, 'SELENDİ', 45),
(558, 'SOMA', 45),
(559, 'TURGUTLU', 45),
(560, 'AHMETLİ', 45),
(561, 'GÖLMARMARA', 45),
(562, 'KÖPRÜBAŞI', 45),
(563, 'DERİK', 47),
(564, 'KIZILTEPE', 47),
(565, 'MARDİN MERKEZ', 47),
(566, 'MAZIDAĞI', 47),
(567, 'MİDYAT', 47),
(568, 'NUSAYBİN', 47),
(569, 'ÖMERLİ', 47),
(570, 'SAVUR', 47),
(571, 'YEŞİLLİ', 47),
(572, 'MERSİN MERKEZ', 33),
(573, 'ANAMUR', 33),
(574, 'ERDEMLİ', 33),
(575, 'GÜLNAR', 33),
(576, 'MUT', 33),
(577, 'SİLİFKE', 33),
(578, 'TARSUS', 33),
(579, 'AYDINCIK', 33),
(580, 'BOZYAZI', 33),
(581, 'ÇAMLIYAYLA', 33),
(582, 'BODRUM', 48),
(583, 'DATÇA', 48),
(584, 'FETHİYE', 48),
(585, 'KÖYCEĞİZ', 48),
(586, 'MARMARİS', 48),
(587, 'MİLAS', 48),
(588, 'MUĞLA MERKEZ', 48),
(589, 'ULA', 48),
(590, 'YATAĞAN', 48),
(591, 'DALAMAN', 48),
(592, 'KAVAKLI DERE', 48),
(593, 'ORTACA', 48),
(594, 'BULANIK', 49),
(595, 'MALAZGİRT', 49),
(596, 'MUŞ MERKEZ', 49),
(597, 'VARTO', 49),
(598, 'HASKÖY', 49),
(599, 'KORKUT', 49),
(600, 'NEVŞEHİR MERKEZ', 50),
(601, 'AVANOS', 50),
(602, 'DERİNKUYU', 50),
(603, 'GÜLŞEHİR', 50),
(604, 'HACIBEKTAŞ', 50),
(605, 'KOZAKLI', 50),
(606, 'ÜRGÜP', 50),
(607, 'ACIGÖL', 50),
(608, 'NİĞDE MERKEZ', 51),
(609, 'BOR', 51),
(610, 'ÇAMARDI', 51),
(611, 'ULUKIŞLA', 51),
(612, 'ALTUNHİSAR', 51),
(613, 'ÇİFTLİK', 51),
(614, 'AKKUŞ', 52),
(615, 'AYBASTI', 52),
(616, 'FATSA', 52),
(617, 'GÖLKÖY', 52),
(618, 'KORGAN', 52),
(619, 'KUMRU', 52),
(620, 'MESUDİYE', 52),
(621, 'ORDU MERKEZ', 52),
(622, 'PERŞEMBE', 52),
(623, 'ULUBEY', 52),
(624, 'ÜNYE', 52),
(625, 'GÜLYALI', 52),
(626, 'GÜRGENTEPE', 52),
(627, 'ÇAMAŞ', 52),
(628, 'ÇATALPINAR', 52),
(629, 'ÇAYBAŞI', 52),
(630, 'İKİZCE', 52),
(631, 'KABADÜZ', 52),
(632, 'KABATAŞ', 52),
(633, 'BAHÇE', 80),
(634, 'KADİRLİ', 80),
(635, 'OSMANİYE MERKEZ', 80),
(636, 'DÜZİÇİ', 80),
(637, 'HASANBEYLİ', 80),
(638, 'SUMBAŞ', 80),
(639, 'TOPRAKKALE', 80),
(640, 'RİZE MERKEZ', 53),
(641, 'ARDEŞEN', 53),
(642, 'ÇAMLIHEMŞİN', 53),
(643, 'ÇAYELİ', 53),
(644, 'FINDIKLI', 53),
(645, 'İKİZDERE', 53),
(646, 'KALKANDERE', 53),
(647, 'PAZAR', 53),
(648, 'GÜNEYSU', 53),
(649, 'DEREPAZARI', 53),
(650, 'HEMŞİN', 53),
(651, 'İYİDERE', 53),
(652, 'AKYAZI', 54),
(653, 'GEYVE', 54),
(654, 'HENDEK', 54),
(655, 'KARASU', 54),
(656, 'KAYNARCA', 54),
(657, 'SAKARYA MERKEZ', 54),
(658, 'PAMUKOVA', 54),
(659, 'TARAKLI', 54),
(660, 'FERİZLİ', 54),
(661, 'KARAPÜRÇEK', 54),
(662, 'SÖĞÜTLÜ', 54),
(663, 'ALAÇAM', 55),
(664, 'BAFRA', 55),
(665, 'ÇARŞAMBA', 55),
(666, 'HAVZA', 55),
(667, 'KAVAK', 55),
(668, 'LADİK', 55),
(669, 'SAMSUN MERKEZ', 55),
(670, 'TERME', 55),
(671, 'VEZİRKÖPRÜ', 55),
(672, 'ASARCIK', 55),
(673, 'ONDOKUZMAYIS', 55),
(674, 'SALIPAZARI', 55),
(675, 'TEKKEKÖY', 55),
(676, 'AYVACIK', 55),
(677, 'YAKAKENT', 55),
(678, 'AYANCIK', 57),
(679, 'BOYABAT', 57),
(680, 'SİNOP MERKEZ', 57),
(681, 'DURAĞAN', 57),
(682, 'ERGELEK', 57),
(683, 'GERZE', 57),
(684, 'TÜRKELİ', 57),
(685, 'DİKMEN', 57),
(686, 'SARAYDÜZÜ', 57),
(687, 'DİVRİĞİ', 58),
(688, 'GEMEREK', 58),
(689, 'GÜRÜN', 58),
(690, 'HAFİK', 58),
(691, 'İMRANLI', 58),
(692, 'KANGAL', 58),
(693, 'KOYUL HİSAR', 58),
(694, 'SİVAS MERKEZ', 58),
(695, 'SU ŞEHRİ', 58),
(696, 'ŞARKIŞLA', 58),
(697, 'YILDIZELİ', 58),
(698, 'ZARA', 58),
(699, 'AKINCILAR', 58),
(700, 'ALTINYAYLA', 58),
(701, 'DOĞANŞAR', 58),
(702, 'GÜLOVA', 58),
(703, 'ULAŞ', 58),
(704, 'BAYKAN', 56),
(705, 'ERUH', 56),
(706, 'KURTALAN', 56),
(707, 'PERVARİ', 56),
(708, 'SİİRT MERKEZ', 56),
(709, 'ŞİRVARİ', 56),
(710, 'AYDINLAR', 56),
(711, 'TEKİRDAĞ MERKEZ', 59),
(712, 'ÇERKEZKÖY', 59),
(713, 'ÇORLU', 59),
(714, 'HAYRABOLU', 59),
(715, 'MALKARA', 59),
(716, 'MURATLI', 59),
(717, 'SARAY', 59),
(718, 'ŞARKÖY', 59),
(719, 'MARAMARAEREĞLİSİ', 59),
(720, 'ALMUS', 60),
(721, 'ARTOVA', 60),
(722, 'TOKAT MERKEZ', 60),
(723, 'ERBAA', 60),
(724, 'NİKSAR', 60),
(725, 'REŞADİYE', 60),
(726, 'TURHAL', 60),
(727, 'ZİLE', 60),
(728, 'PAZAR', 60),
(729, 'YEŞİLYURT', 60),
(730, 'BAŞÇİFTLİK', 60),
(731, 'SULUSARAY', 60),
(732, 'TRABZON MERKEZ', 61),
(733, 'AKÇAABAT', 61),
(734, 'ARAKLI', 61),
(735, 'ARŞİN', 61),
(736, 'ÇAYKARA', 61),
(737, 'MAÇKA', 61),
(738, 'OF', 61),
(739, 'SÜRMENE', 61),
(740, 'TONYA', 61),
(741, 'VAKFIKEBİR', 61),
(742, 'YOMRA', 61),
(743, 'BEŞİKDÜZÜ', 61),
(744, 'ŞALPAZARI', 61),
(745, 'ÇARŞIBAŞI', 61),
(746, 'DERNEKPAZARI', 61),
(747, 'DÜZKÖY', 61),
(748, 'HAYRAT', 61),
(749, 'KÖPRÜBAŞI', 61),
(750, 'TUNCELİ MERKEZ', 62),
(751, 'ÇEMİŞGEZEK', 62),
(752, 'HOZAT', 62),
(753, 'MAZGİRT', 62),
(754, 'NAZİMİYE', 62),
(755, 'OVACIK', 62),
(756, 'PERTEK', 62),
(757, 'PÜLÜMÜR', 62),
(758, 'BANAZ', 64),
(759, 'EŞME', 64),
(760, 'KARAHALLI', 64),
(761, 'SİVASLI', 64),
(762, 'ULUBEY', 64),
(763, 'UŞAK MERKEZ', 64),
(764, 'BAŞKALE', 65),
(765, 'VAN MERKEZ', 65),
(766, 'EDREMİT', 65),
(767, 'ÇATAK', 65),
(768, 'ERCİŞ', 65),
(769, 'GEVAŞ', 65),
(770, 'GÜRPINAR', 65),
(771, 'MURADİYE', 65),
(772, 'ÖZALP', 65),
(773, 'BAHÇESARAY', 65),
(774, 'ÇALDIRAN', 65),
(775, 'SARAY', 65),
(776, 'YALOVA MERKEZ', 77),
(777, 'ALTINOVA', 77),
(778, 'ARMUTLU', 77),
(779, 'ÇINARCIK', 77),
(780, 'ÇİFTLİKKÖY', 77),
(781, 'TERMAL', 77),
(782, 'AKDAĞMADENİ', 66),
(783, 'BOĞAZLIYAN', 66),
(784, 'YOZGAT MERKEZ', 66),
(785, 'ÇAYIRALAN', 66),
(786, 'ÇEKEREK', 66),
(787, 'SARIKAYA', 66),
(788, 'SORGUN', 66),
(789, 'ŞEFAATLI', 66),
(790, 'YERKÖY', 66),
(791, 'KADIŞEHRİ', 66),
(792, 'SARAYKENT', 66),
(793, 'YENİFAKILI', 66),
(794, 'ÇAYCUMA', 67),
(795, 'DEVREK', 67),
(796, 'ZONGULDAK MERKEZ', 67),
(797, 'EREĞLİ', 67),
(798, 'ALAPLI', 67),
(799, 'GÖKÇEBEY', 67),
(800, 'ÇANAKKALE MERKEZ', 17),
(801, 'AYVACIK', 17),
(802, 'BAYRAMİÇ', 17),
(803, 'BİGA', 17),
(804, 'BOZCAADA', 17),
(805, 'ÇAN', 17),
(806, 'ECEABAT', 17),
(807, 'EZİNE', 17),
(808, 'LAPSEKİ', 17),
(809, 'YENİCE', 17),
(810, 'ÇANKIRI MERKEZ', 18),
(811, 'ÇERKEŞ', 18),
(812, 'ELDİVAN', 18),
(813, 'ILGAZ', 18),
(814, 'KURŞUNLU', 18),
(815, 'ORTA', 18),
(816, 'ŞABANÖZÜ', 18),
(817, 'YAPRAKLI', 18),
(818, 'ATKARACALAR', 18),
(819, 'KIZILIRMAK', 18),
(820, 'BAYRAMÖREN', 18),
(821, 'KORGUN', 18),
(822, 'ALACA', 19),
(823, 'BAYAT', 19),
(824, 'ÇORUM MERKEZ', 19),
(825, 'İKSİPLİ', 19),
(826, 'KARGI', 19),
(827, 'MECİTÖZÜ', 19),
(828, 'ORTAKÖY', 19),
(829, 'OSMANCIK', 19),
(830, 'SUNGURLU', 19),
(831, 'DODURGA', 19),
(832, 'LAÇİN', 19),
(833, 'OĞUZLAR', 19),
(834, 'ADALAR', 34),
(835, 'BAKIRKÖY', 34),
(836, 'BEŞİKTAŞ', 34),
(837, 'BEYKOZ', 34),
(838, 'BEYOĞLU', 34),
(839, 'ÇATALCA', 34),
(840, 'EMİNÖNÜ', 34),
(841, 'EYÜP', 34),
(842, 'FATİH', 34),
(843, 'GAZİOSMANPAŞA', 34),
(844, 'KADIKÖY', 34),
(845, 'KARTAL', 34),
(846, 'SARIYER', 34),
(847, 'SİLİVRİ', 34),
(848, 'ŞİLE', 34),
(849, 'ŞİŞLİ', 34),
(850, 'ÜSKÜDAR', 34),
(851, 'ZEYTİNBURNU', 34),
(852, 'BÜYÜKÇEKMECE', 34),
(853, 'KAĞITHANE', 34),
(854, 'KÜÇÜKÇEKMECE', 34),
(855, 'PENDİK', 34),
(856, 'ÜMRANİYE', 34),
(857, 'BAYRAMPAŞA', 34),
(858, 'AVCILAR', 34),
(859, 'BAĞCILAR', 34),
(860, 'BAHÇELİEVLER', 34),
(861, 'GÜNGÖREN', 34),
(862, 'MALTEPE', 34),
(863, 'SULTANBEYLİ', 34),
(864, 'TUZLA', 34),
(865, 'ESENLER', 34),
(866, 'ALİAĞA', 35),
(867, 'BAYINDIR', 35),
(868, 'BERGAMA', 35),
(869, 'BORNOVA', 35),
(870, 'ÇEŞME', 35),
(871, 'DİKİLİ', 35),
(872, 'FOÇA', 35),
(873, 'KARABURUN', 35),
(874, 'KARŞIYAKA', 35),
(875, 'KEMALPAŞA', 35),
(876, 'KINIK', 35),
(877, 'KİRAZ', 35),
(878, 'MENEMEN', 35),
(879, 'ÖDEMİŞ', 35),
(880, 'SEFERİHİSAR', 35),
(881, 'SELÇUK', 35),
(882, 'TİRE', 35),
(883, 'TORBALI', 35),
(884, 'URLA', 35),
(885, 'BEYDAĞ', 35),
(886, 'BUCA', 35),
(887, 'KONAK', 35),
(888, 'MENDERES', 35),
(889, 'BALÇOVA', 35),
(890, 'ÇİGLİ', 35),
(891, 'GAZİEMİR', 35),
(892, 'NARLIDERE', 35),
(893, 'GÜZELBAHÇE', 35),
(894, 'ŞANLIURFA MERKEZ', 63),
(895, 'AKÇAKALE', 63),
(896, 'BİRECİK', 63),
(897, 'BOZOVA', 63),
(898, 'CEYLANPINAR', 63),
(899, 'HALFETİ', 63),
(900, 'HİLVAN', 63),
(901, 'SİVEREK', 63),
(902, 'SURUÇ', 63),
(903, 'VİRANŞEHİR', 63),
(904, 'HARRAN', 63),
(905, 'BEYTÜŞŞEBAP', 73),
(906, 'ŞIRNAK MERKEZ', 73),
(907, 'CİZRE', 73),
(908, 'İDİL', 73),
(909, 'SİLOPİ', 73),
(910, 'ULUDERE', 73),
(911, 'GÜÇLÜKONAK', 73);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_tarih` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_ad`, `iletisim_soyad`, `iletisim_gsm`, `iletisim_email`, `iletisim_mesaj`, `iletisim_tarih`) VALUES
(1, 'Samet', 'Işıksal', '05389138683', 'sametisiksal@gmail.com', 'deneme', '2019-12-23 15:18:07'),
(3, 'Mustafa', 'Karaca', '0546689302', 'mstffkrc57@gmail.com', '', '2019-12-30 16:00:17'),
(6, 'asdasdasdas', 'dasdasdas', '12321312312', 'asdsadasdsa@sadasdas', 'sasdasd', '2019-12-31 17:25:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

CREATE TABLE `iller` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`id`, `name`) VALUES
(1, 'ADANA'),
(2, 'ADIYAMAN'),
(3, 'AFYON'),
(4, 'AĞRI'),
(5, 'AMASYA'),
(6, 'ANKARA'),
(7, 'ANTALYA'),
(8, 'ARTVİN'),
(9, 'AYDIN'),
(10, 'BALIKESİR'),
(11, 'BİLECİK'),
(12, 'BİNGÖL'),
(13, 'BİTLİS'),
(14, 'BOLU'),
(15, 'BURDUR'),
(16, 'BURSA'),
(17, 'ÇANAKKALE'),
(18, 'ÇANKIRI'),
(19, 'ÇORUM'),
(20, 'DENİZLİ'),
(21, 'DİYARBAKIR'),
(22, 'EDİRNE'),
(23, 'ELAZIĞ'),
(24, 'ERZİNCAN'),
(25, 'ERZURUM'),
(26, 'ESKİŞEHİR'),
(27, 'GAZİANTEP'),
(28, 'GİRESUN'),
(29, 'GÜMÜŞHANE'),
(30, 'HAKKARİ'),
(31, 'HATAY'),
(32, 'ISPARTA'),
(33, 'İÇEL'),
(34, 'İSTANBUL'),
(35, 'İZMİR'),
(36, 'KARS'),
(37, 'KASTAMONU'),
(38, 'KAYSERİ'),
(39, 'KIRKLARELİ'),
(40, 'KIRŞEHİR'),
(41, 'KOCAELİ'),
(42, 'KONYA'),
(43, 'KÜTAHYA'),
(44, 'MALATYA'),
(45, 'MANİSA'),
(46, 'KAHRAMANMARAŞ'),
(47, 'MARDİN'),
(48, 'MUĞLA'),
(49, 'MUŞ'),
(50, 'NEVŞEHİR'),
(51, 'NİĞDE'),
(52, 'ORDU'),
(53, 'RİZE'),
(54, 'SAKARYA'),
(55, 'SAMSUN'),
(56, 'SİİRT'),
(57, 'SİNOP'),
(58, 'SİVAS'),
(59, 'TEKİRDAĞ'),
(60, 'TOKAT'),
(61, 'TRABZON'),
(62, 'TUNCELİ'),
(63, 'ŞANLIURFA'),
(64, 'UŞAK'),
(65, 'VAN'),
(66, 'YOZGAT'),
(67, 'ZONGULDAK'),
(68, 'AKSARAY'),
(69, 'BAYBURT'),
(70, 'KARAMA'),
(71, 'KIRIKKALE'),
(72, 'BATMAN'),
(73, 'ŞIRNAK'),
(74, 'BARTIN'),
(75, 'ARDAHAN'),
(76, 'IĞDIR'),
(77, 'YALOVA'),
(78, 'KARABÜK'),
(79, 'KİLİS'),
(80, 'OSMANİYE'),
(81, 'DÜZCE');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(6, '2019-12-31 18:06:55', '', '213213', 'Samet Işıksal', 'sametisiksal10@gmail.com', '05389138683', 'e10adc3949ba59abbe56e057f20f883e', 'Samet Işıksal', 'Defne', 'Hatay', 'Antakya', '', '5', 1),
(7, '2020-04-08 22:39:21', '', '1234567', 'Mustafa Karaca', 'karaca@gmail.com', '05346689302', 'e10adc3949ba59abbe56e057f20f883e', 'Mustafa Karaca', '', 'İstanbul', 'Ümraniye', '', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(1, '0', 'Hakkımızda', '', 'hakkimizda.php', 2, '1', 'hakkimizda'),
(5, '', 'İletişim', '', 'iletisim.php', 3, '1', ''),
(6, '', 'Ev Arkadaşı Bul', '', 'arkadasbul.php', 1, '1', ''),
(7, '', 'Tüm İlanlar', '', 'tum-ilanlar.php', 4, '1', 'tum-ilanlar'),
(8, '', 'Evine Arkadaş Bul', '', 'evine-arkadas-bul.php', 5, '1', 'evine-arkadas-bul');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `uye_foto` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `uye_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_dogum` date NOT NULL,
  `uye_kayit` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uye_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_yetki` int(11) NOT NULL,
  `uye_durum` enum('1','0') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_foto`, `uye_ad`, `uye_soyad`, `uye_tc`, `uye_gsm`, `uye_email`, `uye_dogum`, `uye_kayit`, `uye_sifre`, `uye_yetki`, `uye_durum`) VALUES
(4, '', 'samet', 'ışıksal', '123415123123', '912312012', 'samet@gmail.com', '2019-12-17', '2019-12-21 17:16:20', '9368894d6cff4304a09f463e40bbbcbb', 1, '1'),
(5, '', 'mustafa', 'karaca', '098762131', '129319319', 'karaca@gmail.com', '2019-12-18', '2019-12-31 19:22:04', 'e10adc3949ba59abbe56e057f20f883e', 1, '1'),
(6, '', 'samet', 'ışıksal', '112312321', '213213213', 'isiksal@gmail.com', '2019-12-11', '2019-12-31 21:56:21', 'e10adc3949ba59abbe56e057f20f883e', 1, '1'),
(7, '', 'mustafa', 'adasdasd', '12341512311', '0589138683', 'karaca@gmail.com', '2019-12-05', '2019-12-21 17:16:20', 'e10adc3949ba59abbe56e057f20f883e', 1, '1'),
(9, '', 'dada', 'dada', '3333333333', '3243423423', 'mstfkrc57@gmail.com', '1995-05-11', '2020-04-14 21:09:45', '827ccb0eea8a706c4c34a16891f84e7b', 1, '1'),
(10, '', 'devran', 'ata', '111111111111', '05445097474', 'bilisimdevran@gmail.com', '2020-12-12', '2020-04-19 20:46:39', 'e10adc3949ba59abbe56e057f20f883e', 1, '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `apartyurt`
--
ALTER TABLE `apartyurt`
  ADD PRIMARY KEY (`apartyurt_id`);

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `evine_arkadas_ilan`
--
ALTER TABLE `evine_arkadas_ilan`
  ADD PRIMARY KEY (`ilan_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `ilanlar`
--
ALTER TABLE `ilanlar`
  ADD PRIMARY KEY (`ilan_id`);

--
-- Tablo için indeksler `ilceler`
--
ALTER TABLE `ilceler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_il_no` (`ilid`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `iller`
--
ALTER TABLE `iller`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `apartyurt`
--
ALTER TABLE `apartyurt`
  MODIFY `apartyurt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `evine_arkadas_ilan`
--
ALTER TABLE `evine_arkadas_ilan`
  MODIFY `ilan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `ilanlar`
--
ALTER TABLE `ilanlar`
  MODIFY `ilan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `ilceler`
--
ALTER TABLE `ilceler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=912;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `ilceler`
--
ALTER TABLE `ilceler`
  ADD CONSTRAINT `fk_il_no` FOREIGN KEY (`ilid`) REFERENCES `iller` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
