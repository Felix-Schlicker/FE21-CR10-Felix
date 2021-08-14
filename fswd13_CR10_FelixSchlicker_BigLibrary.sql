-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2021 at 03:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_CR10_FelixSchlicker_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd13_CR10_FelixSchlicker_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_CR10_FelixSchlicker_BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `short_description` text NOT NULL,
  `type` varchar(12) NOT NULL,
  `author_first_name` varchar(55) NOT NULL,
  `author_last_name` varchar(55) NOT NULL,
  `publisher_name` varchar(55) NOT NULL,
  `publisher_address` varchar(55) NOT NULL,
  `publish_date` date NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `isbn`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(1, 'The Lord of The Rings', 'https://upload.wikimedia.org/wikipedia/en/8/8a/The_Lord_of_the_Rings_The_Fellowship_of_the_Ring_%282001%29.jpg', '19-873-498-46', 'Set in the fictional world of Middle-earth, the films follow the hobbit Frodo Baggins as he and the Fellowship embark on a quest to destroy the One Ring, to ensure the destruction of its maker, the Dark Lord Sauron.', 'DVD', 'J.R.R.', 'Tolkien', 'Allen & Unwin', 'Abbey Road 5, London', '1954-06-29', 'available'),
(2, 'Die Türken vor Wien', 'https://images2.medimops.eu/product/dfa597/M03902475870-large.jpg', '978-3-9024775', '1683 war eines der Schicksalsjahre der europäischen Geschichte. In diesem Jahr spielte sich vor den Toren Wiens eine der dramatischsten Schlachten im Kampf um die Vorherrschaft der Osmanen über das südöstliche Europa ab.', 'Book', 'John ', 'Stoye', 'Ares', 'Karlsplatz 1', '2012-05-10', 'reserved'),
(3, 'The Normandy Diary of Marie-Louise Osmont', 'https://images-eu.ssl-images-amazon.com/images/I/51pjdS3mX9L._SY264_BO1,204,203,200_QL40_ML2_.jpg', '0-679-43438-0', 'The diary of a French woman provides a perceptive, firsthand view of life in occupied France, capturing the horrors, hardships, and banality of World War II against the backdrop of everyday rural life. TV tie-in. 15,000 first printing. First serial, Destination Discovery.', 'Book', 'John', 'Keegan', 'Library of Congress', 'Hollyroad Park 143', '1987-08-13', 'reserved'),
(6, 'Harry Potter  and the Pholosopher Stone', 'https://image.film.at/images/original/2917125/img.jpg', '0-659-479438-0', 'On his 11th birthday, Harry receives a letter inviting him to study magic at the Hogwarts School of Witchcraft and Wizardry. Harry discovers that not only is he a wizard, but he is a famous one. He meets two best friends, Ron Weasley and Hermione Granger, and makes his first enemy, Draco Malfoy.', 'DVD', 'J. K.', 'Rowling', 'Bloomsbury Publishing', 'Bakerstreet 55, London', '1997-06-26', 'available'),
(7, 'Harry Potter 1', 'https://images2.medimops.eu/product/91d6d2/M00747558191-large.jpg', '0-644-4172438-0', 'On his 11th birthday, Harry receives a letter inviting him to study magic at the Hogwarts School of Witchcraft and Wizardry. Harry discovers that not only is he a wizard, but he is a famous one. He meets two best friends, Ron Weasley and Hermione Granger, and makes his first enemy, Draco Malfoy.', 'Book', 'J. K.', 'Rowling', 'Bloomsbury Publishing', 'Bakerstreet 55, London', '1997-06-26', 'available'),
(8, 'Holy Bible', 'https://images2.medimops.eu/product/1b657d/M00007263120-large.jpg', '97800072631270', 'The Bible is the holy scripture of the Christian religion, purporting to tell the history of the Earth from its earliest creation to the spread of Christianity in the first century A.D. Both the Old Testament and the New Testament have undergone changes over the centuries, including the the publication of the King.', 'Book', 'Abraham', 'Jesus', 'Harper Collins Cartographic', 'Heavenstaircase 27', '2000-01-01', 'reserved'),
(9, ' Francesco Carletti Reise um die Welt 1594 Reise um die Welt', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTsWNwMTU51JXcet1FUhWkLxB1EafFu5giM8BdNxJeIGgD8BNvCUGDq3ETYP-ypy4Orpz4YECHrALTsr5PbsmMbRbqcpRrUWy88wxnEe8mXjVAuT1aRVXV9&usqp=CAE', '978-3-7374-0042-8', 'The Bible is the holy scripture of the Christian religion, purporting to tell the history of the Earth from its earliest creation to the spread of Christianity in the first century A.D. Both the Old Testament and the New Testament have undergone changes over the centuries, including the the publication of the King.', 'Book', 'Francesco', 'Carletti', 'Edition Erdmann ein Imprint von Verlagshaus Römerweg', 'Kurfürstendamm 27, Berlin', '1970-03-28', 'reserved'),
(10, 'Mutter', 'https://assets.mmsrg.com/isr/166325/c1/-/pixelboxx-mss-3749518/fee_786_587_png', '0731454963923', 'Mutter ist das dritte Studioalbum der deutschen Band Rammstein. Es wurde am 2. April 2001 veröffentlicht.', 'CD', 'Rammstein', 'Rammstein', 'OTHER INT. GERMANY', 'Königsallee 10, Berlin', '2001-07-15', 'available'),
(11, 'Symphonie Nr. 9', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgoOhLXaKbcUwFMVa5XayDHLpXzJU1DZVCtBxCL6w&usqp=CAE&s', '3-86631-007-2', 'The best to listen to classical music.', 'CD', 'Ludwig ', 'van Beethoven', 'Decca Classics', 'Beethovengasse 1, Köln', '2002-08-03', 'available'),
(12, 'Think Like a Programmer: An Introduction to Creative Problem Solving', 'https://images-na.ssl-images-amazon.com/images/I/511x3v3NcWL._SX376_BO1,204,203,200_.jpg', '1593274246', 'This Book teaches you how to Think Like Programmer. ', 'Book', 'Anton ', 'Spraul', 'No Starch Press', 'Schönbrunnerstraße 22, Wien', '2012-09-01', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
