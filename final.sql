-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jan 2020 pada 17.51
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `award`
--

CREATE TABLE IF NOT EXISTS `award` (
  `username` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `award`
--

INSERT INTO `award` (`username`, `description`) VALUES
('60900117034', 'Front-End Mater Certified From Facecook');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `username` varchar(30) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `major` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `gpa` varchar(10) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`username`, `institute`, `major`, `degree`, `gpa`, `year`) VALUES
('60900117034', 'Dharma Wanita Kindergarten ', '-', '-', '-', '2003-2005'),
('60900117034', '2th Elementary School of Bungi', '-', '-', '8.8', '2005-2011'),
('60900117034', '5th Junior High School of Baubau', '-', '-', '9.0', '2011-2014'),
('60900117034', '1th Senior High School of Baubau', '-', '-', '8.0', '2014-2017'),
('60900117034', 'Islamic State University Alauddin Makassar', 'Information System', 'Bachelor of System Information', '3.84', '2017-2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(30) NOT NULL,
  `explanation` text NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`username`, `name`, `position`, `explanation`, `year`) VALUES
('60900117034', 'Junior Web Programming', 'Front End Developer', 'There are two ways of constructing a software design: One way is to make it so simple that there are obviously no deficiencies, and the other way is to make it so complicated that there are no obvious deficiencies. The first method is far more difficult.', 'September 2019 - Now'),
('60900117034', 'Web Developer', 'Front End Master', 'As a designer, its important to think beyond apps and websites. Even if you are working primarily in the digital space, remember that you are literally surrounded by design. From architecture to fashion, right down to the simplest everyday objects like a hairbrush or toothbrush, virtually everything has been designed for human use. Design really is everywhere, so take inspiration from your surroundings.', 'September 2017 - November 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `interest`
--

CREATE TABLE IF NOT EXISTS `interest` (
  `username` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `interest`
--

INSERT INTO `interest` (`username`, `description`) VALUES
('60900117034', 'Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.\r\n\r\nWhen forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `username` varchar(20) NOT NULL,
  `workflow` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`username`, `workflow`) VALUES
('60900117034', 'Web Designing'),
('60900117034', 'Cross Browser Testing & Debugging');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `moto` text NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `images` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `address`, `phone`, `email`, `moto`, `linkedin`, `github`, `twitter`, `facebook`, `username`, `password`, `images`) VALUES
(1, 'Yuliana', 'Isabela', 'Anoa st. 99, Baubau, Southeast Sulawesi', '082293496970', 'belayuliana8@gmail.com', 'Enjoy every line of codes', 'https://www.linkedin.com/in/yuliana-isabela-104a38151/', 'https://github.com/yulianaisabela', 'https://twitter.com/hexadecimalll', 'https://web.facebook.com/yuliana.isabela.50', '60900117034', '60900117034', 'bela.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
