-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 12:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
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
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `email`, `type`, `password`) VALUES
(1, 'almir', 'pinduk', 'admin@admin.com', 'admin', '123'),
(4, 'user', 'user', 'user@user.com', 'user', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
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
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`produkt_id`, `produkt_title`, `produkt_qmimi`, `produkt_image`, `produkt_keywords`, `produkt_content`, `viberNumber`, `wpNumber`, `qyteti`, `emriUser`, `data`) VALUES
(12, 'Apple iPhone 14 Pro, 128GB, Gold', '', '14pro.png', '', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(13, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(14, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(15, 'Apple iPhone 14 Pro, 128GB, Gold', '950.00€', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(21, 'Apple iPhone 14 Pro, 128GB, Gold', '1,910.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(22, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(23, 'Apple iPhone 14 Pro, 128GB, Gold', '1,210.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(24, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(25, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(26, 'Apple iPhone 14 Pro, 128GB, Gold', '1,500.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(27, 'Apple iPhone 14 Pro, 128GB, Gold', '1,560.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s', NULL, NULL, NULL, NULL, '0000-00-00'),
(28, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(29, 'Apple iPhone 14 Pro, 128GB, Gold', '1,510.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(30, 'Apple iPhone 14 Pro, 128GB, Gold', '820.00 €', '14pro.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(31, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1,590.00 €', '14propurple.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(32, 'Apple iPhone 14 Pro, 128GB, Silver', '1,510.00 €', '14prowhite.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(33, 'Apple iPhone 14 Pro, 128GB, Space Black', '1,510.00 €', '14problack.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(34, 'Apple iPhone 14, 128GB, Midnight', '1,159.00 €', '14problue.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(35, 'Laptop Apple MacBook Pro 14 (2021), 14.2\",', '2,469.50 €', 'macbookwhite.jpg', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(37, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '999 €', '14propurple.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(38, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1,000.00 €', '14propurple.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, \nMbron sytë. - Vitaminat A, C dhe E kanë veprim antioksidativ. Disa hulumtime kanë treguar se si kivi mund të reduktojë rrezikun nga krijimi i degjenerimit makular, të lidhur me moshën dhe atë për 36 për qind. Kivi përmban luteinë dhe zeaksantinë, materiet të cilat në formë natyrale gjenden në syrin njerëzor. Luteina ndihmon te filtrimi i dritës së dëmshme të kaltër, çka ndihmon në parandalimin e sëmundjes së syrit të shkaktuar me plakje.		', NULL, NULL, NULL, NULL, '0000-00-00'),
(39, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1,100.00 €', '14propurple.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, \nMbron sytë. - Vitaminat A, C dhe E kanë veprim antioksidativ. Disa hulumtime kanë treguar se si kivi mund të reduktojë rrezikun nga krijimi i degjenerimit makular, të lidhur me moshën dhe atë për 36 për qind. Kivi përmban luteinë dhe zeaksantinë, materiet të cilat në formë natyrale gjenden në syrin njerëzor. Luteina ndihmon te filtrimi i dritës së dëmshme të kaltër, çka ndihmon në parandalimin e sëmundjes së syrit të shkaktuar me plakje.		', NULL, NULL, NULL, NULL, '0000-00-00'),
(40, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1,510.00 €', '14propurple.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(41, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1,510.00 €', '14propurple.png', 'Apple', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ', NULL, NULL, NULL, NULL, '0000-00-00'),
(48, '235234523', '411', '14problack.png', 'Lenovo', 'SAJhdfgaghjrdfjAGHFDHAGFSDAGHSDGFSAFGDSFGHAFGHDSAFGHSAJhdfgaghjrdfjAGHFDHAGFSDAGHSDGFSAFGDSFGHAFGHDSAFGH12441353qsaqdfadfsasfasfasdfsdfgsdDHAGFSDAGHSDGFSAFGDSFGHAFGHDSAFGH12441353qsaqdfadfsasfasfasdfsdfgsdDHAGFSDAGHSDGFSAFGDSFGHAFGHDSAFGH12441353qsaqdfadfsasfasfasdfsdfgsd', '045895551', '045895551', 'Prizren', 'Almir', '2022-11-01'),
(49, 'APPLELEE', '411', 'banner.png', 'Dell', '234sdkhfgakhsdahkmfsdaqkuyewrgjgkaejrgakhj234sdkhfgakhsdahkmfsdaqkuyewrgjgkaejrgakhj234sdkhfgakhsdahkmfsdaqkuyewrgjgkaejrgakhj', '045895551', '045895551', 'Gjakov', 'AlmirPinduk', '2022-11-01'),
(50, 'APPLLLEEE', '1241', '14prowhite.png', 'Lenovo', 'ASDHJASFDGAJFGHSDFGJAJFGHSDAFGHDSFGHAJFGHASDHJASFDGAJFGHSDFGJAJFGHSDAFGHDSFGHAJFGHASDHJASFDGAJFGHSDFGJAJFGHSDAFGHDSFGHAJFGHASDHJASFDGAJFGHSDFGJAJFGHSDAFGHDSFGHAJFGHASDHJASFDGAJFGHSDFGJAJFGHSDAFGHDSFGHAJFGHASDHJASFDGAJFGHSDFGJAJFGHSDAFGHDSFGHAJFGH', '045895551', '045895551', 'Prizren', 'AlmirPinduk', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
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
-- Table structure for table `requests`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`produkt_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `produktet`
  MODIFY `produkt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
