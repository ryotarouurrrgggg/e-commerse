-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2024 pada 07.07
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(29) NOT NULL,
  `price` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `name`, `quantity`, `price`, `options`, `image`) VALUES
(28, 'Fifa 24 Ultimate Edition', 3, '66', 'ps5', 'fiffa24.jpg'),
(31, 'Grand Theft Auto V', 1, '50', 'ps4', 'gta.jpg'),
(32, 'Call of Duty®: Black Ops Cold War', 1, '37', 'ps4', 'codopw.jpeg'),
(33, ' Pokémon™ Sword', 1, '44', 'Switch', 'sword3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(150) NOT NULL,
  `city` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  `country` varchar(120) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(2, 'Sahrul', '088844', 'anjayheri8@gmail.com', 'cash on delivery', 'Jawa barat', 'Jawa barat', 'karawang', 'Curug', 'Indonesia', 33333, 'Resident Evil 7 (1) , Resident Evil 4 Remake (1) ', '158'),
(3, 'Sahrul', '088844', 'anjayheri8@gmail.com', 'cash on delivery', 'Jawa barat', 'Jawa barat', 'karawang', 'Curug', 'Indonesia', 33333, 'Resident Evil 7 (1) , Resident Evil 4 Remake (1) , Call of Duty®: Black Ops Cold War (1) ', '195'),
(4, 'Sahrul', '085863610696', 'anjayheri8@gmail.com', 'cash on delivery', 'Jawa barat', 'Jawa barat', 'karawang', 'Curug', 'Indonesia', 33333, 'Resident Evil 7 (1) , Resident Evil 4 Remake (1) , Call of Duty®: Black Ops Cold War (1) , God of War Ragnarök: Valhalla (9) ', '681'),
(5, 'Sahrul', '085863610696', 'anjayheri8@gmail.com', 'cash on delivery', 'Jawa barat', 'Jawa barat', 'karawang', 'Curug', 'Indonesia', 33333, 'Resident Evil 7 (1) , Resident Evil 4 Remake (1) , Call of Duty®: Black Ops Cold War (1) , God of War Ragnarök: Valhalla (9) ', '681'),
(6, 'Sahrul', '085863610696', 'anjayheri8@gmail.com', 'cash on delivery', 'Jawa barat', 'Jawa barat', 'karawang', 'Curug', 'Indonesia', 33333, 'Resident Evil 7 (1) , Resident Evil 4 Remake (1) , God of War Ragnarök: Valhalla (9) ', '644'),
(7, 'Sahrul', '085863610696', 'anjayheri8@gmail.com', 'cash on delivery', 'Jawa barat', 'Jawa barat', 'karawang', 'Curug', 'Indonesia', 33333, 'Resident Evil 7 (11) , Resident Evil 4 Remake (1) , God of War Ragnarök: Valhalla (9) , Fifa 24 Ultimate Edition (1) , Pokemon Scarlet (7) ', '888'),
(8, 'sfsdg', '8785858', 'asdafafafa@gmail.com', 'paypal', 'yfjyfj', 'hjf', '789', 'tfhd', 'ind', 8585, 'Call of Duty®: Black Ops Cold War (1) ', '37'),
(9, 'andi', '08976543245', 'asdafafafa@gmail.com', 'cash on delivery', 'buah batu', 'jln jendarl sudirman', 'bandung', 'gg.supomo', 'Indonesia', 8888, 'Fifa 24 Ultimate Edition (2) , Grand Theft Auto V (1) ', '182'),
(10, 'Sahrul', '6898698', 'anjayheri8@gmail.com', 'cash on delivery', 'Jawa barat', 'Jawa barat', 'karawang', 'Curug', 'Indonesia', 33333, 'Fifa 24 Ultimate Edition (3) , Grand Theft Auto V (1) , Call of Duty®: Black Ops Cold War (1) ,  Pokémon™ Sword (1) ', '329');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_db`
--

CREATE TABLE `product_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `options` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product_db`
--

INSERT INTO `product_db` (`id`, `name`, `price`, `description`, `options`, `image`) VALUES
(18, 'Call of Duty®: Black Ops Cold War', '37', 'Black Ops Cold War drops fans into the depths of the Cold War’s volatile geopolitical battle of the early 1980s.  Come face-to-face with historical figures and hard truths as you battle around the globe in iconic locales like East Berlin, Vietnam, Turkey, Soviet KGB headquarters and more.  As an elite operative, follow the trail of a shadowy figure on a mission to destabilize the global balance of power and change the course of history. Descend into the dark center of a global conspiracy alongsi', 'ps4', 'codopw.jpeg'),
(19, 'God of War Ragnarök: Valhalla', '54', 'Master thyself.  To uncover the mysteries within, Kratos must delve into Valhalla facing challenges of mind and body.  Accompanied only by Mimir, Kratos embarks on a deeply personal and reflective journey that pushes him to master mind and body as he is confronted with the challenges of Valhalla in an unravelling, replayable adventure that blends the beloved combat from God of War Ragnarök with brand new elements inspired by the roguelite genre.', 'ps4', 'godofwar.jpg'),
(20, ' Pokémon™ Sword', '44', 'A new generation of Pokémon is coming to the Nintendo Switch™ system. Begin your adventure as a Pokémon Trainer by choosing one of three new partner Pokémon: Grookey, Scorbunny, or Sobble. Then embark on a journey in the new Galar region, where you’ll challenge the troublemakers of Team Yell, while unraveling the mystery behind the Legendary Pokémon Zacian and Zamazenta! Explore the Wild Area, a vast expanse of land where the player can freely control the camera. Team up with three other players', 'Switch', 'sword3.jpg'),
(23, 'Fifa 24 Ultimate Edition', '66', 'Menampilkan lebih banyak pemain dari masa lalu dan sekarang termasuk sepak bola wanita dan cara-cara baru yang segar untuk menyesuaikan Klub Anda di dalam dan di luar lapangan, Ultimate Team menghubungkan Anda ke dunia sepak bola dengan berbagai konten yang dipengaruhi oleh pertunjukan dan kompetisi dunia nyata termasuk Liga Champions UEFA.', 'ps5', 'fiffa24.jpg'),
(24, 'Pokemon Scarlet', '41', 'Catch, battle, and train Pokémon in the Paldea Region, a vast land filled with lakes, towering peaks, wastelands, small towns, and sprawling cities. Explore a wide-open world at your own pace and traverse land, water, and air by riding on a form-shifting Legendary Pokémon—Koraidon in the Pokémon Scarlet game and Miraidon in the Pokémon Violet game. Choose either Sprigatito, Fuecoco, or Quaxly, to be your first partner Pokémon before setting off on your journey through Paldea.', 'Switch', 'scarlet.jpeg'),
(30, 'Spiderman 2', '20', 'gjgvgv', 'ps4', 'spider.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_db`
--
ALTER TABLE `product_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `product_db`
--
ALTER TABLE `product_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
