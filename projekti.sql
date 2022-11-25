-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Pritësi (host): 127.0.0.1
-- Koha e gjenerimit: Nën 25, 2022 në 05:33 MD
-- Versioni i serverit: 10.4.25-MariaDB
-- PHP Versioni: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databaza: `projekti`
--

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zbraz të dhënat për tabelën `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `email`, `type`, `password`) VALUES
(1, 'almir', 'pinduk', 'admin@admin.com', 'admin', '123'),
(4, 'user', 'user', 'user@user.com', 'user', '321');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `produktet`
--

CREATE TABLE `produktet` (
  `produkt_id` int(10) NOT NULL,
  `produkt_title` varchar(100) NOT NULL,
  `produkt_qmimi` varchar(50) NOT NULL,
  `produkt_image` text NOT NULL,
  `produkt_keywords` text NOT NULL,
  `produkt_content` text NOT NULL,
  `viberNumber` varchar(255) DEFAULT NULL,
  `wpNumber` varchar(255) DEFAULT NULL,
  `qyteti` varchar(255) DEFAULT NULL,
  `emriUser` varchar(255) DEFAULT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zbraz të dhënat për tabelën `produktet`
--

INSERT INTO `produktet` (`produkt_id`, `produkt_title`, `produkt_qmimi`, `produkt_image`, `produkt_keywords`, `produkt_content`, `viberNumber`, `wpNumber`, `qyteti`, `emriUser`, `data`) VALUES
(12, 'Apple iPhone 14 Pro, 128GB, Gold', '1,210.00 €', '14pro.png', 'Dell', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', '+38304512345', '+38304512345', 'Prizren', 'Albani', '2022-10-10'),
(13, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Lenovo', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', '+38304512343', '+38304512343', 'Gjakov', 'Hasni', '2022-10-12'),
(14, 'Apple MacBook Air 13.6\", M2 8-core, 8GB, 512GB, 10-core GPU, Midnight', '1,510.00 €', 'macbookwhite.jpg', 'Lenovo', 'Apple ka përmirësuar performancën, videon dhe zërin gjatë gjeneratës së ardhshme me çipin M1. MacBook Air 13 (M2) është më i hollë, më i lehtë dhe ka ende qëndrueshmëri të madhe dhe funksionim krejtësisht të qetë. Me MacBook Air të ri (M2), ju merrni edhe më shumë performancë për aplikacione kërkuese, të tilla si redaktimi i videos me definicion të lartë, dizajni grafik dhe aplikacione të tjera krijuese. Baza e këtij versioni të veçantë të Apple MacBook Air 13 (M2) është një procesor Apple M2 me 8 bërthama me një 8-core GPU dhe një 16-core Neural Engine. Procesori përfshin gjithashtu 8 GB RAM. Ekrani 13.6 \"Liquid Retina IPS ka një rezolucion prej 2560 × 1664 piksele.', '+3830451234734', '+3830451234734', 'Prishtin', 'Klejdi', '2022-10-10'),
(15, 'Apple MacBook Air 13.6\", M2 8-core, 8GB, 512GB, 10-core GPU, Midnight', '950.00€', 'macbookwhite.jpg', 'Apple', 'Apple ka përmirësuar performancën, videon dhe zërin gjatë gjeneratës së ardhshme me çipin M1. MacBook Air 13 (M2) është më i hollë, më i lehtë dhe ka ende qëndrueshmëri të madhe dhe funksionim krejtësisht të qetë. Me MacBook Air të ri (M2), ju merrni edhe më shumë performancë për aplikacione kërkuese, të tilla si redaktimi i videos me definicion të lartë, dizajni grafik dhe aplikacione të tjera krijuese. Baza e këtij versioni të veçantë të Apple MacBook Air 13 (M2) është një procesor Apple M2 me 8 bërthama me një 8-core GPU dhe një 16-core Neural Engine. Procesori përfshin gjithashtu 8 GB RAM. Ekrani 13.6 \"Liquid Retina IPS ka një rezolucion prej 2560 × 1664 piksele.', '+3830451233456', '+3830451233456', 'Prizren', 'Olis', '2022-10-13'),
(21, 'Apple iPhone 14 Pro, 128GB, Gold', '1,910.00 €', '14propurple.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', '+3830451265478', '+3830451265478', 'Kovsov', NULL, '2022-10-14'),
(22, 'Monitor Dell UltraSharp U3219Q - LED 32\" (81cm), 4K UHD, i zi / argjendë', '1,105.30 €', 'dell.jpg', 'Dell', 'Ky ekran 31.5 inch me rezolucion 4K nga kompania DELL mbështet teknologjinë IPS me kënd të gjerë. Kompania Dell nuk siguron vetëm besueshmërinë por edhe kualitetin më të lartë në produktet e veta, me dizajnet e shkëlqyera. Ky ekran mbështet të gjitha standardet e nevojshme. Ekrani ka rezolucion 840x2160 piksela 4K, 16: 9 , 1,300. Këndi i shikimit është 178 shkallë. Ka drita LED, shkëlqim 400cd / m2, kohë tëpërgjegjjes 8ms. Ai përmban edhe porte HDMI, DP, Lidhës për audio, USB 4x USB dhe USB-C.', '+3830451261555', '+3830451261555', 'Gjilan', 'Albani123', '2022-10-15'),
(23, 'Apple iPhone 14 Pro, 128GB, Gold', '1,210.00 €', '14pro.png', 'Dell', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', '+3830451245563', '+3830451245563', 'Kosov', 'Kosova', '2022-10-11'),
(24, 'Lenovo ThinkPad T14 Gen 3 (Intel), 14\", Intel Core i7, 32GB RAM,', '2,251.02 €\n', 'lenovo.jpg', 'Lenovo', 'Shënim: Tastiera te pjesa numerike ka disa simbole çeke. Ndërsa, Microsoft Office është në verzion provues ose nuk është i instaluar fare. Ky laptop është i pajisur me karakteristika të shkëlqyeshme. Ai mundësohet nga një procesor 12-core Intel Core i7 1260P që funksionon me një frekuencë 2.1 GHz deri në 4.7 GHz. Procesori plotësohet me 32 GB DDR4 SODIMM (slot), LPDDR4 (në pllakë). Hard disku 1024 GB SSD M.2 PCIe NVMe shërben për të dhënat. Disku optik mungon.', '+38304512445', '+38304512445', 'Prizren', 'Prizren', '2022-10-11'),
(25, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14propurple.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', '+383045546445', '+383045546445', 'Albania', 'Albania', '2022-10-11'),
(26, 'Apple iPhone 14 Pro, 128GB, Gold', '1,500.00 €', '14pro.png', 'Dell', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', '+38304567765', '+38304567765', 'Prizren', 'Rustem', '2022-10-11'),
(27, 'Lenovo NB IdeaPad 3 15ALC6, 15.6\" AMD Ryzen 5 5500U, 8GB RAM, 256GB SSD M.2 PCIe', '459.50 €', 'lenovo1.jpg', 'Lenovo', 'Laptopi i hollë dhe i fuqishëm Lenovo IdeaPad 3 15ALC6 ju lejon të shijoni fuqinë përpunuese që plotëson nevojat tuaja për shumë detyra dhe përdorim të përditshëm të rehatshëm. I pajisur me procesor të arkitekturës Ryzen 5 5500U Zen 2 me orë bazë në 2,1 GHz dhe orë maksimale të rritjes deri në 4,0 GHz. Ka 3MB L2 Cache dhe 8MB L3 Cache, 6 bërthama dhe 12 threads.', '+383045674543', '+383045674543', 'Kosov', 'Kleonis', '2022-10-11'),
(28, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', '+383045671235', '+383045671235', 'Prishtine', 'Albanian', '2022-10-11'),
(29, 'Apple MacBook Air 13.6\", M2 8-core, 8GB, 512GB, 10-core GPU, Midnight', '1,510.00 €', 'macbookwhite.jpg', 'Apple', 'Apple ka përmirësuar performancën, videon dhe zërin gjatë gjeneratës së ardhshme me çipin M1. MacBook Air 13 (M2) është më i hollë, më i lehtë dhe ka ende qëndrueshmëri të madhe dhe funksionim krejtësisht të qetë. Me MacBook Air të ri (M2), ju merrni edhe më shumë performancë për aplikacione kërkuese, të tilla si redaktimi i videos me definicion të lartë, dizajni grafik dhe aplikacione të tjera krijuese. Baza e këtij versioni të veçantë të Apple MacBook Air 13 (M2) është një procesor Apple M2 me 8 bërthama me një 8-core GPU dhe një 16-core Neural Engine. Procesori përfshin gjithashtu 8 GB RAM. Ekrani 13.6 \"Liquid Retina IPS ka një rezolucion prej 2560 × 1664 piksele.', '+383045675544', '+383045675544', 'asd', 'asd', '2022-10-11');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `emri` varchar(255) DEFAULT NULL,
  `mbiemri` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zbraz të dhënat për tabelën `requests`
--

INSERT INTO `requests` (`id`, `firstname`, `lastname`, `email`, `password`, `message`, `date`) VALUES
(3, 'almir', 'almir', 'almirpinduk@gmail.com', '123', 'almir almir would like to request an account.', '2022-11-22 13:37:35');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tabelë `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indekset për tabelë `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`produkt_id`);

--
-- Indekset për tabelë `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT për tabelat e hedhura
--

--
-- AUTO_INCREMENT për tabelë `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT për tabelë `produktet`
--
ALTER TABLE `produktet`
  MODIFY `produkt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT për tabelë `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
