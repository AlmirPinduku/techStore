-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 10:43 AM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `password`, `user_type`) VALUES
(1, 'Almir', '123456', 'admin'),
(2, 'admin', '12345', 'user\r\n');

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
  `produkt_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`produkt_id`, `produkt_title`, `produkt_qmimi`, `produkt_image`, `produkt_keywords`, `produkt_content`) VALUES
(12, 'Apple iPhone 14 Pro, 128GB, Gold', '1.20€', '14pro.png', 'Bene pjese ne sektorin e perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(13, 'Apple iPhone 14 Pro, 128GB, Gold', '0.70€', '14pro.png', 'Sektori i perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(14, 'Apple iPhone 14 Pro, 128GB, Gold', '0.40€', '14pro.png', 'Sektori i perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(15, 'Apple iPhone 14 Pro, 128GB, Gold', '2.30€', '14pro.png', 'Sektori i perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(21, 'Apple iPhone 14 Pro, 128GB, Gold', '1.20€', '14pro.png', 'Sektori i perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(22, 'Apple iPhone 14 Pro, 128GB, Gold', '1.50€', '14pro.png', 'Sektori i perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(23, 'Apple iPhone 14 Pro, 128GB, Gold', '0.50€', '14pro.png', 'Sektori i perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(24, 'Apple iPhone 14 Pro, 128GB, Gold', '0.35€', '14pro.png', 'Sektori i perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(25, 'Apple iPhone 14 Pro, 128GB, Gold', '1.20€', '14pro.png', 'Sektori i perimeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(26, 'Apple iPhone 14 Pro, 128GB, Gold', '0.50€', '14pro.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(27, 'Apple iPhone 14 Pro, 128GB, Gold', '2.30€', '14pro.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, s'),
(28, 'Apple iPhone 14 Pro, 128GB, Gold', '1.30€', '14pro.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(29, 'Apple iPhone 14 Pro, 128GB, Gold', '1.00€', '14pro.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(30, 'Apple iPhone 14 Pro, 128GB, Gold', '0.70€', '14pro.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(31, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1.20€', '14propurple.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(32, 'Apple iPhone 14 Pro, 128GB, Silver', '1,510.00 €', '14prowhite.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(33, 'Apple iPhone 14 Pro, 128GB, Space Black', '1,510.00 €', '14problack.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(34, 'Apple iPhone 14, 128GB, Midnight', '1,159.00 €', '14problue.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(35, 'Laptop Apple MacBook Pro 14 (2021), 14.2\",', '2,469.50 €', 'macbookwhite.jpg', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(37, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1.25€', '14propurple.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(38, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1.20€', '14propurple.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, \nMbron sytë. - Vitaminat A, C dhe E kanë veprim antioksidativ. Disa hulumtime kanë treguar se si kivi mund të reduktojë rrezikun nga krijimi i degjenerimit makular, të lidhur me moshën dhe atë për 36 për qind. Kivi përmban luteinë dhe zeaksantinë, materiet të cilat në formë natyrale gjenden në syrin njerëzor. Luteina ndihmon te filtrimi i dritës së dëmshme të kaltër, çka ndihmon në parandalimin e sëmundjes së syrit të shkaktuar me plakje.		'),
(39, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1.60€', '14propurple.png', 'Sektori i pemeve', 'Rrushi i bardhë dhe i zi janë të pasur me vitaminat nga grupi B, si dhe vitaminat A dhe C. Për shkak të sasive të mëdha të acidit kafeik, i cili është përbërës i substancës polifenolë (e cila është substancë dezintoksikuese), rrushi ndihmon edhe në mbrojtjen e organizmit nga kanceri. Prova të shumta të kryera në SHBA te persona të moshës së tretë, treguan se stafidhet dhe rrushi lidhen ngushtë me uljen e përqindjes së vdekjeve nga sëmundjet kanceroze.		Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(40, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '1.90€', '14propurple.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, '),
(41, 'Apple iPhone 14 Pro, 128GB, Deep Purple', '0.90€', '14propurple.png', 'Sektori i pemeve', 'Dizajni, qëndrueshmëria, funksionet dhe teknologjia e klasit të parë, e gjithë kjo dhe shumë më tepër fshihen në modelin Apple iPhone 14 Pro. Dynamic Island është një përvojë interaktive dhe tërheqëse e iPhone për të gjitha njoftimet, ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`produkt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `produktet`
  MODIFY `produkt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
