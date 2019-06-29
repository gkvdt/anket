-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Haz 2019, 11:27:45
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `anket`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'sifre'),
(2, 'sultan', 'test');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aktif_anket`
--

CREATE TABLE `aktif_anket` (
  `aktif_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `aktif_anket`
--

INSERT INTO `aktif_anket` (`aktif_id`) VALUES
(4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE `anket` (
  `id` int(11) NOT NULL,
  `baslik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket`
--

INSERT INTO `anket` (`id`, `baslik`) VALUES
(2, '0'),
(3, 'deneme'),
(4, 'full arabic');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket_data`
--

CREATE TABLE `anket_data` (
  `id` int(10) NOT NULL,
  `anketID` int(11) NOT NULL,
  `soruTip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket_data`
--

INSERT INTO `anket_data` (`id`, `anketID`, `soruTip`) VALUES
(1, 0, 1),
(2, 10, 1),
(3, 2, 1),
(4, 2, 1),
(5, 2, 1),
(6, 2, 1),
(7, 2, 3),
(8, 2, 1),
(9, 2, 1),
(10, 2, 2),
(11, 7, 1),
(12, 2, 1),
(13, 2, 1),
(14, 3, 2),
(15, 3, 3),
(16, 3, 1),
(17, 4, 2),
(18, 4, 3),
(19, 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket_sonuc`
--

CREATE TABLE `anket_sonuc` (
  `anket_yesorno_id` int(11) NOT NULL,
  `anket_yesorno_branch` varchar(250) NOT NULL,
  `anket_yesorno_fullname` varchar(500) NOT NULL,
  `anket_yesorno_country` varchar(500) NOT NULL,
  `anket_yesorno_telno` varchar(500) NOT NULL,
  `anket_yesorno_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket_sonuc`
--

INSERT INTO `anket_sonuc` (`anket_yesorno_id`, `anket_yesorno_branch`, `anket_yesorno_fullname`, `anket_yesorno_country`, `anket_yesorno_telno`, `anket_yesorno_email`) VALUES
(135, 'RIYAD', 'sad', 'Afghanistan', 'dwqwd', 'wdqd'),
(136, 'RIYAD', 'memet', 'Afghanistan', '1', '2'),
(137, 'RIYAD', 'memet', 'Afghanistan', '1', '2'),
(138, 'RIYAD', 'vedat güzelkokar', 'Philippines', '05313962251', 'qwd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket_sonuc_cevaplar`
--

CREATE TABLE `anket_sonuc_cevaplar` (
  `sonucID` int(11) NOT NULL,
  `soru` varchar(500) NOT NULL,
  `cevap` varchar(500) NOT NULL,
  `tip` int(11) NOT NULL,
  `aciklama` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket_sonuc_cevaplar`
--

INSERT INTO `anket_sonuc_cevaplar` (`sonucID`, `soru`, `cevap`, `tip`, `aciklama`) VALUES
(0, 'soru', 'YES', 2, ''),
(0, 'soru', '\r\n			asdlşkfjasşdlkfjsd 			', 1, NULL),
(134, 'soru', 'YES', 2, ''),
(134, 'soru', '\r\n			asdlşkfjasşdlkfjsd 			', 1, NULL),
(135, 'soruasdfsdaf', 'YES', 2, ''),
(135, 'soru11', '\r\n			asdlşkfjasşdlkfjsd 			', 1, NULL),
(136, 'soruasdfsdaf', 'NO', 2, 'asfasfasf'),
(136, 'soru11', '\r\n			asdlşkfjasşdlkfjsd 			', 1, NULL),
(136, 'sorustar', '3', 3, NULL),
(137, 'soruasdfsdaf', 'NO', 2, 'asfasfasf'),
(137, 'soru11', '\r\n			asdlşkfjasşdlkfjsd 			', 1, NULL),
(137, 'sorustar', '3', 3, NULL),
(138, 'asd', 'qweqwe', 1, NULL),
(139, 'asd', 'qweqwe', 1, NULL),
(138, 'arabic1', 'YES', 2, ''),
(138, 'arabic2', '5', 3, NULL),
(138, 'arabic3', '\r\n			نعم ام لا			', 1, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket_yesorno_qu`
--

CREATE TABLE `anket_yesorno_qu` (
  `anket_yesorno_no_qid` int(11) NOT NULL,
  `anket_yesorno_questions_qq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket_yesorno_qu`
--

INSERT INTO `anket_yesorno_qu` (`anket_yesorno_no_qid`, `anket_yesorno_questions_qq`) VALUES
(1, 'merhaba bugun nasılsınız ?');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `asik`
--

CREATE TABLE `asik` (
  `soruID` int(11) NOT NULL,
  `val` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `asik`
--

INSERT INTO `asik` (`soruID`, `val`) VALUES
(8, 'ar'),
(8, 'ar'),
(11, 'arap'),
(11, 'arpa'),
(14, 'نعم ام لا'),
(14, 'نعم ام لا'),
(14, 'نعم ام لا');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `asoru`
--

CREATE TABLE `asoru` (
  `id` int(11) NOT NULL,
  `anketID` int(11) NOT NULL,
  `soru` varchar(500) NOT NULL,
  `tip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `asoru`
--

INSERT INTO `asoru` (`id`, `anketID`, `soru`, `tip`) VALUES
(7, 2, 'denemearapca', 1),
(8, 2, 'deneme1ar', 1),
(9, 3, 'مرحبا', 2),
(10, 3, 'ara2', 3),
(11, 3, 'ara3', 1),
(12, 4, 'نعم ام لا', 2),
(13, 4, 'نعم ام لا', 3),
(14, 4, 'نعم ام لا', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sik`
--

CREATE TABLE `sik` (
  `soruID` int(11) NOT NULL,
  `val` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sik`
--

INSERT INTO `sik` (`soruID`, `val`) VALUES
(0, 'asdlşkfjasşdlkfjsd '),
(0, ' asdlkfnşalsdkfj '),
(0, 'asdfkjsdaşlkfjşlsad '),
(0, 'asdflksddajf'),
(0, 'asdlşkfjasşdlkfjsd '),
(0, ' asdlkfnşalsdkfj '),
(0, 'asdfkjsdaşlkfjşlsad '),
(0, 'asdflksddajf'),
(1, 'asdlşkfjasşdlkfjsd '),
(1, ' asdlkfnşalsdkfj '),
(1, 'asdfkjsdaşlkfjşlsad '),
(1, 'asdflksddajf'),
(2, 'asdlşkfjasşdlkfjsd '),
(2, ' asdlkfnşalsdkfj '),
(2, 'asdfkjsdaşlkfjşlsad '),
(2, 'asdflksddajf'),
(3, 'asdlşkfjasşdlkfjsd '),
(3, ' asdlkfnşalsdkfj '),
(3, 'asdfkjsdaşlkfjşlsad '),
(3, 'asdflksddajf'),
(4, ' '),
(6, 'sa'),
(6, 'as'),
(6, 'what upp!!'),
(7, 'YES'),
(7, 'NO'),
(8, '1'),
(8, '2'),
(7, 'eng'),
(7, 'eng'),
(8, 'eng'),
(8, 'eng'),
(9, 'YES'),
(9, 'NO'),
(11, 'eng'),
(11, 'eng'),
(11, 'enngg'),
(12, 'YES'),
(12, 'NO'),
(14, 'arabic '),
(14, 'arabic');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru`
--

CREATE TABLE `soru` (
  `id` int(11) NOT NULL,
  `anketID` int(11) NOT NULL,
  `soru` text NOT NULL,
  `tip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `soru`
--

INSERT INTO `soru` (`id`, `anketID`, `soru`, `tip`) VALUES
(1, 2, 'soruasdfsdaf', 2),
(4, 2, 'weqwe', 3),
(7, 2, 'deneme', 1),
(8, 2, 'deneme1', 1),
(9, 3, 'deneme1', 2),
(10, 3, 'deneme2', 3),
(11, 3, 'deneme3', 1),
(12, 4, 'arabic1', 2),
(13, 4, 'arabic2', 3),
(14, 4, 'arabic3', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_branch1` varchar(250) NOT NULL,
  `user_branch2` varchar(500) NOT NULL,
  `user_fullname` varchar(500) NOT NULL,
  `user_phone` varchar(500) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_branch1`, `user_branch2`, `user_fullname`, `user_phone`, `user_email`, `user_password`, `user_country`) VALUES
(59, '', '', '', '', 'muart', 'muart123', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `anket`
--
ALTER TABLE `anket`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `anket_data`
--
ALTER TABLE `anket_data`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `anket_sonuc`
--
ALTER TABLE `anket_sonuc`
  ADD PRIMARY KEY (`anket_yesorno_id`);

--
-- Tablo için indeksler `anket_yesorno_qu`
--
ALTER TABLE `anket_yesorno_qu`
  ADD PRIMARY KEY (`anket_yesorno_no_qid`);

--
-- Tablo için indeksler `soru`
--
ALTER TABLE `soru`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `anket`
--
ALTER TABLE `anket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `anket_data`
--
ALTER TABLE `anket_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `anket_sonuc`
--
ALTER TABLE `anket_sonuc`
  MODIFY `anket_yesorno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- Tablo için AUTO_INCREMENT değeri `anket_yesorno_qu`
--
ALTER TABLE `anket_yesorno_qu`
  MODIFY `anket_yesorno_no_qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `soru`
--
ALTER TABLE `soru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
