-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 21 Haz 2019, 12:51:45
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Tablo için tablo yapısı `anket_yesorno`
--

CREATE TABLE `anket_yesorno` (
  `anket_yesorno_id` int(11) NOT NULL,
  `anket_yesorno_branch` varchar(250) NOT NULL,
  `anket_yesorno_fullname` varchar(500) NOT NULL,
  `anket_yesorno_country` varchar(500) NOT NULL,
  `anket_yesorno_telno` varchar(500) NOT NULL,
  `anket_yesorno_email` varchar(500) NOT NULL,
  `anket_yesorno_question` text NOT NULL,
  `anket_yesorno_answer` varchar(250) NOT NULL,
  `anket_yesorno_no_answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket_yesorno`
--

INSERT INTO `anket_yesorno` (`anket_yesorno_id`, `anket_yesorno_branch`, `anket_yesorno_fullname`, `anket_yesorno_country`, `anket_yesorno_telno`, `anket_yesorno_email`, `anket_yesorno_question`, `anket_yesorno_answer`, `anket_yesorno_no_answer`) VALUES
(125, 'JADDAH', 'Mehmet Küçük', 'Hong Kong', '05396609154', 'kckmmt31@gmail.com', '', 'YES', ''),
(126, 'RIYAD', 'Ceylan Can', 'Kuwait', '00905435532', 'eccemavi.98@gmail.com', '', 'NO', 'because its have soo salt'),
(127, 'JADDAH', 'muhammed salah', 'American Samoa', '09987878778', 'murat@muart.net', '', 'YES', ''),
(128, 'JADDAH', 'murat bekfilavioğlu', 'Turkey', '05357074737', 'murat@muart.net', '', 'YES', ''),
(129, 'RIYAD', 'ece mavi', 'Germany', '05392374642', 'eccemavi.98@gmail.com', '', 'NO', 'because its have soo salt'),
(130, 'JADDAH', 'dede canovs', 'Andorra', '09987878778', 'dwdwd@mail.com', '', 'YES', ''),
(131, 'JADDAH', 'dede canovs', 'Andorra', '09987878778', 'dwdwd@mail.com', '', 'YES', ''),
(132, 'RIYAD', 'metin can', 'Anguilla', '05357074737', 'tttt@titanic.com', '', 'YES', ''),
(133, 'JADDAH', 'muhammed salah', 'Egypt', '00906654334', 'deneme@mail.com', '', 'NO', 'because its have soo salt');

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
-- Tablo için indeksler `anket_yesorno`
--
ALTER TABLE `anket_yesorno`
  ADD PRIMARY KEY (`anket_yesorno_id`);

--
-- Tablo için indeksler `anket_yesorno_qu`
--
ALTER TABLE `anket_yesorno_qu`
  ADD PRIMARY KEY (`anket_yesorno_no_qid`);

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
-- Tablo için AUTO_INCREMENT değeri `anket_yesorno`
--
ALTER TABLE `anket_yesorno`
  MODIFY `anket_yesorno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- Tablo için AUTO_INCREMENT değeri `anket_yesorno_qu`
--
ALTER TABLE `anket_yesorno_qu`
  MODIFY `anket_yesorno_no_qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
