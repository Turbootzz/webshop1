-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 apr 2021 om 21:18
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_user_id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_token` varchar(255) DEFAULT NULL,
  `password_changed` timestamp NULL DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `admin_user`
--

INSERT INTO `admin_user` (`admin_user_id`, `email`, `password`, `password_token`, `password_changed`, `datetime`) VALUES
(1, 'test@test.nl', '$2y$10$3eJXM2NBYpOH8opTNAHVye/uRtxMhWNLS0NX9qpp1WqygPBnX4vjS', '', '2021-02-18 16:06:05', '2021-02-17 15:32:17');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `active`) VALUES
(1, 'Apple', 'Phones from Apple', 1),
(2, 'Samsung', 'Phones from Samsung.', 1),
(3, 'Huawei', 'Phones from Huawei', 1),
(4, 'OnePlus', 'Phones from OnePlus', 1),
(5, 'Google', 'Phones from Google', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category_image`
--

CREATE TABLE `category_image` (
  `category_image_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `category_image`
--

INSERT INTO `category_image` (`category_image_id`, `category_id`, `category_image`, `active`) VALUES
(1, 1, 'apple.png', 1),
(2, 2, 'samsung.png', 1),
(3, 3, 'huawei.png', 1),
(4, 4, 'oneplus.png', 1),
(5, 5, 'google.png', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `house_number` int(11) NOT NULL,
  `house_number_addon` int(11) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `emailadres` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `newsletter_subscription` tinyint(1) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `color` varchar(30) NOT NULL,
  `weight` decimal(6,2) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `category_id`, `price`, `color`, `weight`, `active`) VALUES
(1, 'IPhone 12', 'For the apple users. With the newest features.', 1, '900.00', 'OceanBlue', '164.00', 1),
(2, 'IPhone SE', 'The brains of IPhone 8 but smaller and cheaper', 1, '448.00', 'Black', '113.00', 1),
(3, 'Samsung S20', 'In-screen fingerprint, good camera and more!', 2, '600.00', 'black', '163.00', 1),
(4, 'Samsung S10', 'In screen Fingerprint and face ID triple lens camera', 2, '360.00', 'black', '157.00', 1),
(5, 'Huawei P20 Pro', 'The chinese phone thats really good', 3, '174.00', 'cyan', '165.00', 1),
(6, 'Huawei P40 Pro', 'The newest version of Huawei', 3, '240.00', 'cyan', '175.00', 1),
(7, 'OnePlus 9', 'The OnePlus 9 that just released with de nicest and best features!', 4, '750.00', 'Purple', '192.00', 1),
(8, 'OnePlus 6T', 'High resolution screen with Fingerprint', 4, '300.00', 'red', '185.00', 1),
(9, 'Pixel 5', 'Stock Android, Good camera and newest features.', 5, '720.00', 'black', '151.00', 1),
(10, 'Pixel 4', 'Nice good camera with stock Android', 5, '600.00', 'black', '162.00', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_image`
--

CREATE TABLE `product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `product_image`
--

INSERT INTO `product_image` (`product_image_id`, `product_id`, `image`, `active`) VALUES
(1, 1, 'iphone12.png', 1),
(2, 2, 'iphonese.png', 1),
(3, 3, 'samsungs20.png', 1),
(4, 4, 'samsungs10.png', 1),
(5, 5, 'huaweip20pro.png', 1),
(6, 6, 'huaweip40pro.png', 1),
(7, 7, 'oneplus9.png', 1),
(8, 8, 'oneplus6t.png', 1),
(9, 9, 'pixel5.png', 1),
(10, 10, 'pixel4.png', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_user_id`);

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexen voor tabel `category_image`
--
ALTER TABLE `category_image`
  ADD PRIMARY KEY (`category_image_id`);

--
-- Indexen voor tabel `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexen voor tabel `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `category_image`
--
ALTER TABLE `category_image`
  MODIFY `category_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `product_image`
--
ALTER TABLE `product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
