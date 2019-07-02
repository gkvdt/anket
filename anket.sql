-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Tem 2019, 22:21:17
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
-- Tablo için tablo yapısı `aemployee`
--

CREATE TABLE `aemployee` (
  `id` int(11) NOT NULL,
  `employee_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `aemployee`
--

INSERT INTO `aemployee` (`id`, `employee_name`) VALUES
(3, 'arap1'),
(4, 'arap2'),
(5, 'arap3'),
(6, 'arap4');

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
(6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE `anket` (
  `id` int(11) NOT NULL,
  `baslik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(19, 4, 1),
(20, 3, 4),
(21, 3, 2),
(22, 6, 2),
(23, 6, 3),
(24, 6, 4),
(25, 6, 1),
(26, 6, 2),
(27, 6, 3),
(28, 6, 4),
(29, 6, 1);

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
  `anket_yesorno_email` varchar(500) NOT NULL,
  `anket_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(14, 'نعم ام لا'),
(24, 'arap'),
(24, 'arap'),
(24, 'arap'),
(24, 'arapasdasd');

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
(12, 4, 'نعم ام لا', 2),
(13, 4, 'نعم ام لا', 3),
(14, 4, 'نعم ام لا', 1),
(15, 4, 'asdasd', 5),
(20, 6, 'deneme1arap', 2),
(21, 6, 'deneme2arap', 3),
(22, 6, 'deneme3arap', 4),
(24, 6, 'deneme5arap', 1),
(23, 6, 'deneme4arap', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(14, 'arabic'),
(18, 'YES'),
(18, 'NO'),
(20, 'YES'),
(20, 'NO'),
(24, '1'),
(24, '2'),
(24, '3'),
(24, '4'),
(25, 'YES'),
(25, 'NO'),
(29, '1'),
(29, '2'),
(29, '3'),
(29, '4'),
(29, '5');

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
(12, 4, 'arabic1', 2),
(13, 4, 'arabic2', 3),
(14, 4, 'arabic3', 1),
(15, 4, 'asd', 5),
(16, 3, 'text', 4),
(17, 3, 'employee', 5),
(18, 3, 'ef', 2),
(20, 6, 'deneme1', 2),
(21, 6, 'deneme2', 3),
(22, 6, 'deneme3', 4),
(23, 6, 'deneme4', 5),
(24, 6, 'deneme5', 1),
(25, 6, 'deneme6', 2),
(26, 6, 'deneme7', 3),
(27, 6, 'deneme8', 4),
(28, 6, 'deneme9', 5),
(29, 6, 'deneme10', 1);

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
-- Tablo için indeksler `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `anket_data`
--
ALTER TABLE `anket_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `anket_sonuc`
--
ALTER TABLE `anket_sonuc`
  MODIFY `anket_yesorno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `anket_yesorno_qu`
--
ALTER TABLE `anket_yesorno_qu`
  MODIFY `anket_yesorno_no_qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `soru`
--
ALTER TABLE `soru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
