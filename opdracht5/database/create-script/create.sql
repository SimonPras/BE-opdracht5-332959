USE `backend-opdracht5-laravel`;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `naam` varchar(200) NOT NULL,
  `barcode` bigint(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `countrys`
--

INSERT INTO `products` (`id`, `naam`, `barcode`) VALUES
(1, 'Mintnopjes', 8719587231278),
(2, 'Schoolkrijt', 8719587326713),
(3, 'Honingdrop', 8719587327836),
(4, 'Zure Beren', 8719587321441),
(5, 'Cola Fleshes', 8719587321237),
(6, 'Turtles', 8719587322245),
(7, 'Witte muizen', 8719587328256),
(8, 'Reuzen Slangen', 8719587325641),
(9, 'Zoute Rijen', 8719587322739),
(10, 'Winegums', 8719587327527),
(11, 'Drop Munten', 8719587322345),
(12, 'Kruis Drop', 8719587322265),
(13, 'Zoute Ruitjes', 8719587323256);
--
-- Tabelstructuur voor tabel `country`
--


CREATE TABLE IF NOT EXISTS `magazijns` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `verpakkingsEenheid` varchar(200),
  `aantalAanwezig` int(20),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`product_id`) REFERENCES product(`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `country`
--

INSERT INTO `magazijns` (`id`, `product_id`, `verpakkingsEenheid`, `aantalAanwezig`) VALUES
(1, 1, '5', 453),
(2, 2, '2,5', 400),
(3, 3, '5', 1),
(4, 4, '1', 800),
(5, 5, '3', 234),
(6, 6, '2', 345),
(7, 7, '1', 795),
(8, 8, '10', 233),
(9, 9, '2,5', 345),
(10, 10, '3', NULL),
(11, 11, '2', 367),
(12, 12, '1', 467),
(13, 13, '5', 20);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `countrys`
--



-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fruit`
--


CREATE TABLE IF NOT EXISTS `allergeens` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `naam` varchar(200) NOT NULL,
  `omschrijving` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rollercoaster`
--

INSERT INTO `allergeens` (`id`, `naam`, `omschrijving`) VALUES
(1, 'Gluten', 'Dit product bevat gluten'),
(2, 'Gelatine', 'Dit product bevat gelatine'),
(3, 'AZO-Kleurstof', 'Dit product bevat AZO-Kleurstoffen'),
(4, 'Lactose', 'Dit product bevat lactose'),
(5, 'Soja', 'Dit product bevat soja');


CREATE TABLE IF NOT EXISTS `productPerAllergeens` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `allergeen_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`product_id`) REFERENCES product(`id`),
  FOREIGN KEY (`allergeen_id`) REFERENCES allergeen(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `fruit`
--

INSERT INTO `productPerAllergeens` (`id`, `product_id`, `allergeen_id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 1, 3),
(4, 3, 4),
(5, 6, 5),
(6, 9, 2),
(7, 9, 5),
(8, 10, 2),
(9, 12, 4),
(10, 13, 1),
(11, 13, 4),
(12, 13, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rollercoaster`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `leveranciers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `naam` varchar(200) NOT NULL,
  `contactPersoon` varchar(200) NOT NULL,
  `leverancierNummer` varchar(200) NOT NULL,
  `mobiel` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

INSERT INTO `leveranciers` (`id`, `naam`, `contactPersoon`, `leverancierNummer`, `mobiel`) VALUES
(1, 'Venco', 'Bert van Linge', 'L1029384719', '06-28493827'),
(2, 'Astra Sweets', 'Jasper del Monte', 'L1029284315', '06-28493827'),
(3, 'Haribo', 'Sven Stalman', 'L1029324748', '06-24383291'),
(4, 'Basset', 'Joyce Stelterberg', 'L1023845773', '06-48293823'),
(5, 'De Bron', 'Remco Veenstra', 'L1023857736', '06-34291234');


CREATE TABLE IF NOT EXISTS `productPerLeveranciers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `leverancier_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `datumLevering` date NOT NULL,
  `aantal` int(20) NOT NULL,
  `datumEerstVolgendeLevering` date,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO `productPerLeveranciers` (`id`, `leverancier_id`, `product_id`, `datumLevering`, `aantal`, `datumEerstVolgendeLevering`) VALUES
(1, 1, 1, '2023-04-09', 23, '2023-04-16'),
(2, 1, 1, '2023-04-18', 21, '2023-04-25'),
(3, 1, 2, '2023-04-09', 12, '2023-04-16'),
(4, 1, 3, '2023-04-10', 11, '2023-04-17'),
(5, 2, 4, '2023-04-14', 16, '2023-04-21'),
(6, 2, 4, '2023-04-21', 23, '2023-04-28'),
(7, 2, 5, '2023-04-14', 45, '2023-04-21'),
(8, 2, 6, '2023-04-14', 30, '2023-04-21'),
(9, 3, 7, '2023-04-12', 12, '2023-04-19'),
(10, 3, 7, '2023-04-19', 23, '2023-04-26'),
(11, 3, 8, '2023-04-10', 12, '2023-04-17'),
(12, 3, 9, '2023-04-11', 1, '2023-04-18'),
(13, 4, 10, '2023-04-16', 24, '2023-04-30'),
(14, 5, 11, '2023-04-10', 47, '2023-04-17'),
(15, 5, 12, '2023-04-11', 45, NULL),
(16, 5, 13, '2023-04-12', 23, NULL);
--
-- Gegevens worden geëxporteerd voor tabel `users`
--

