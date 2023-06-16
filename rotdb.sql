-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 16, 2023 la 11:26 AM
-- Versiune server: 10.4.28-MariaDB
-- Versiune PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `rotdb`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `mesaj` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `feedback`
--

INSERT INTO `feedback` (`id`, `id_user`, `mesaj`, `created_at`, `rating`) VALUES
(1, 6, 'Cel mai misto site, nota 1000', '2023-06-16 12:14:14', 5),
(2, 7, 'mafia', '2023-06-16 12:15:19', 4),
(6, 7, 'aa', '2023-06-16 12:25:01', 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `punctaje`
--

CREATE TABLE `punctaje` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `punctaj_quiz` int(11) NOT NULL,
  `punctaj_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `punctaje`
--

INSERT INTO `punctaje` (`id`, `id_user`, `categorie`, `punctaj_quiz`, `punctaj_categorie`) VALUES
(1, 1, 'Avertizare', 0, 0),
(2, 1, 'Interzicere', 0, 0),
(3, 1, 'Prioritate', 0, 0),
(4, 1, 'Obligare', 0, 0),
(5, 1, 'Informare', 0, 0),
(6, 1, 'Orientare', 0, 0),
(7, 1, 'InformareTuristica', 0, 0),
(8, 1, 'Aditionale', 0, 0),
(9, 1, 'SemnaleLuminoase', 0, 0),
(10, 1, 'CaleFerata', 0, 0),
(11, 1, 'Kilometrice', 0, 0),
(12, 1, 'Auxiliare', 0, 0),
(13, 1, 'BenziReversibile', 0, 0),
(14, 1, 'MarcajeLongitudinale', 0, 0),
(15, 1, 'MarcajeTransversale', 0, 0),
(16, 1, 'MarcajeDiverse', 0, 0),
(17, 1, 'MarcajeLaterale', 0, 0),
(18, 1, 'Temporare', 0, 0),
(19, 1, 'Level1', 0, 0),
(20, 1, 'Level2', 0, 0),
(21, 1, 'Level3', 0, 0),
(22, 1, 'Level4', 0, 0),
(23, 1, 'Level5', 0, 0),
(24, 1, 'Level6', 0, 0),
(25, 1, 'Level7', 0, 0),
(26, 1, 'Level8', 0, 0),
(27, 1, 'Level9', 0, 0),
(28, 1, 'Level10', 0, 0),
(29, 1, 'Level11', 0, 0),
(30, 1, 'Level12', 0, 0),
(31, 2, 'Avertizare', 0, 0),
(32, 2, 'Interzicere', 0, 0),
(33, 2, 'Prioritate', 0, 0),
(34, 2, 'Obligare', 0, 0),
(35, 2, 'Informare', 0, 0),
(36, 2, 'Orientare', 0, 0),
(37, 2, 'InformareTuristica', 0, 0),
(38, 2, 'Aditionale', 0, 0),
(39, 2, 'SemnaleLuminoase', 0, 0),
(40, 2, 'CaleFerata', 0, 0),
(41, 2, 'Kilometrice', 0, 0),
(42, 2, 'Auxiliare', 0, 0),
(43, 2, 'BenziReversibile', 0, 0),
(44, 2, 'MarcajeLongitudinale', 0, 0),
(45, 2, 'MarcajeTransversale', 0, 0),
(46, 2, 'MarcajeDiverse', 0, 0),
(47, 2, 'MarcajeLaterale', 0, 0),
(48, 2, 'Temporare', 0, 0),
(49, 2, 'Level1', 0, 0),
(50, 2, 'Level2', 0, 0),
(51, 2, 'Level3', 0, 0),
(52, 2, 'Level4', 0, 0),
(53, 2, 'Level5', 0, 0),
(54, 2, 'Level6', 0, 0),
(55, 2, 'Level7', 0, 0),
(56, 2, 'Level8', 0, 0),
(57, 2, 'Level9', 0, 0),
(58, 2, 'Level10', 0, 0),
(59, 2, 'Level11', 0, 0),
(60, 2, 'Level12', 0, 0),
(61, 3, 'Avertizare', 0, 0),
(62, 3, 'Interzicere', 0, 0),
(63, 3, 'Prioritate', 0, 0),
(64, 3, 'Obligare', 0, 0),
(65, 3, 'Informare', 0, 0),
(66, 3, 'Orientare', 0, 0),
(67, 3, 'InformareTuristica', 0, 0),
(68, 3, 'Aditionale', 0, 0),
(69, 3, 'SemnaleLuminoase', 0, 0),
(70, 3, 'CaleFerata', 0, 0),
(71, 3, 'Kilometrice', 0, 0),
(72, 3, 'Auxiliare', 0, 0),
(73, 3, 'BenziReversibile', 0, 0),
(74, 3, 'MarcajeLongitudinale', 0, 0),
(75, 3, 'MarcajeTransversale', 0, 0),
(76, 3, 'MarcajeDiverse', 0, 0),
(77, 3, 'MarcajeLaterale', 0, 0),
(78, 3, 'Temporare', 0, 0),
(79, 3, 'Level1', 0, 0),
(80, 3, 'Level2', 0, 0),
(81, 3, 'Level3', 0, 0),
(82, 3, 'Level4', 0, 0),
(83, 3, 'Level5', 0, 0),
(84, 3, 'Level6', 0, 0),
(85, 3, 'Level7', 0, 0),
(86, 3, 'Level8', 0, 0),
(87, 3, 'Level9', 0, 0),
(88, 3, 'Level10', 0, 0),
(89, 3, 'Level11', 0, 0),
(90, 3, 'Level12', 0, 0),
(91, 4, 'Avertizare', 0, 0),
(92, 4, 'Interzicere', 0, 0),
(93, 4, 'Prioritate', 0, 0),
(94, 4, 'Obligare', 0, 0),
(95, 4, 'Informare', 0, 0),
(96, 4, 'Orientare', 0, 0),
(97, 4, 'InformareTuristica', 0, 0),
(98, 4, 'Aditionale', 0, 0),
(99, 4, 'SemnaleLuminoase', 0, 0),
(100, 4, 'CaleFerata', 0, 0),
(101, 4, 'Kilometrice', 0, 0),
(102, 4, 'Auxiliare', 0, 0),
(103, 4, 'BenziReversibile', 0, 0),
(104, 4, 'MarcajeLongitudinale', 0, 0),
(105, 4, 'MarcajeTransversale', 0, 0),
(106, 4, 'MarcajeDiverse', 0, 0),
(107, 4, 'MarcajeLaterale', 0, 0),
(108, 4, 'Temporare', 0, 0),
(109, 4, 'Level1', 0, 0),
(110, 4, 'Level2', 0, 0),
(111, 4, 'Level3', 0, 0),
(112, 4, 'Level4', 0, 0),
(113, 4, 'Level5', 0, 0),
(114, 4, 'Level6', 0, 0),
(115, 4, 'Level7', 0, 0),
(116, 4, 'Level8', 0, 0),
(117, 4, 'Level9', 0, 0),
(118, 4, 'Level10', 0, 0),
(119, 4, 'Level11', 0, 0),
(120, 4, 'Level12', 0, 0),
(121, 5, 'Avertizare', 0, 0),
(122, 5, 'Interzicere', 0, 0),
(123, 5, 'Prioritate', 0, 0),
(124, 5, 'Obligare', 0, 0),
(125, 5, 'Informare', 0, 0),
(126, 5, 'Orientare', 0, 0),
(127, 5, 'InformareTuristica', 0, 0),
(128, 5, 'Aditionale', 0, 0),
(129, 5, 'SemnaleLuminoase', 0, 0),
(130, 5, 'CaleFerata', 0, 0),
(131, 5, 'Kilometrice', 0, 0),
(132, 5, 'Auxiliare', 0, 0),
(133, 5, 'BenziReversibile', 0, 0),
(134, 5, 'MarcajeLongitudinale', 0, 0),
(135, 5, 'MarcajeTransversale', 0, 0),
(136, 5, 'MarcajeDiverse', 0, 0),
(137, 5, 'MarcajeLaterale', 0, 0),
(138, 5, 'Temporare', 0, 0),
(139, 5, 'Level1', 0, 0),
(140, 5, 'Level2', 0, 0),
(141, 5, 'Level3', 0, 0),
(142, 5, 'Level4', 0, 0),
(143, 5, 'Level5', 0, 0),
(144, 5, 'Level6', 0, 0),
(145, 5, 'Level7', 0, 0),
(146, 5, 'Level8', 0, 0),
(147, 5, 'Level9', 0, 0),
(148, 5, 'Level10', 0, 0),
(149, 5, 'Level11', 0, 0),
(150, 5, 'Level12', 0, 0),
(151, 6, 'Avertizare', 56, 0),
(152, 6, 'Interzicere', 0, 0),
(153, 6, 'Prioritate', 0, 0),
(154, 6, 'Obligare', 0, 0),
(155, 6, 'Informare', 0, 0),
(156, 6, 'Orientare', 0, 10),
(157, 6, 'InformareTuristica', 0, 0),
(158, 6, 'Aditionale', 0, 0),
(159, 6, 'SemnaleLuminoase', 0, 0),
(160, 6, 'CaleFerata', 0, 0),
(161, 6, 'Kilometrice', 0, 0),
(162, 6, 'Auxiliare', 0, 0),
(163, 6, 'BenziReversibile', 0, 0),
(164, 6, 'MarcajeLongitudinale', 0, 0),
(165, 6, 'MarcajeTransversale', 0, 0),
(166, 6, 'MarcajeDiverse', 0, 0),
(167, 6, 'MarcajeLaterale', 0, 0),
(168, 6, 'Temporare', 0, 0),
(169, 6, 'Level1', 0, 0),
(170, 6, 'Level2', 0, 0),
(171, 6, 'Level3', 0, 0),
(172, 6, 'Level4', 0, 0),
(173, 6, 'Level5', 0, 0),
(174, 6, 'Level6', 0, 0),
(175, 6, 'Level7', 0, 0),
(176, 6, 'Level8', 0, 0),
(177, 6, 'Level9', 0, 0),
(178, 6, 'Level10', 0, 0),
(179, 6, 'Level11', 0, 0),
(180, 6, 'Level12', 0, 0),
(181, 7, 'Avertizare', 0, 0),
(182, 7, 'Interzicere', 0, 0),
(183, 7, 'Prioritate', 0, 0),
(184, 7, 'Obligare', 0, 0),
(185, 7, 'Informare', 0, 0),
(186, 7, 'Orientare', 0, 0),
(187, 7, 'InformareTuristica', 0, 0),
(188, 7, 'Aditionale', 0, 0),
(189, 7, 'SemnaleLuminoase', 0, 0),
(190, 7, 'CaleFerata', 0, 0),
(191, 7, 'Kilometrice', 0, 0),
(192, 7, 'Auxiliare', 0, 0),
(193, 7, 'BenziReversibile', 0, 0),
(194, 7, 'MarcajeLongitudinale', 0, 0),
(195, 7, 'MarcajeTransversale', 0, 0),
(196, 7, 'MarcajeDiverse', 0, 0),
(197, 7, 'MarcajeLaterale', 0, 0),
(198, 7, 'Temporare', 0, 0),
(199, 7, 'Level1', 0, 0),
(200, 7, 'Level2', 0, 0),
(201, 7, 'Level3', 0, 0),
(202, 7, 'Level4', 0, 0),
(203, 7, 'Level5', 0, 0),
(204, 7, 'Level6', 0, 0),
(205, 7, 'Level7', 0, 0),
(206, 7, 'Level8', 0, 0),
(207, 7, 'Level9', 0, 0),
(208, 7, 'Level10', 0, 0),
(209, 7, 'Level11', 0, 0),
(210, 7, 'Level12', 0, 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `nume`, `email`, `parola`, `created_at`) VALUES
(1, 'Test', 'test1@gmail.com', '$2y$10$I2hwdUpG8AE1cZgzg4bvXu1dW7EBf6zqD/mPE3FN.MLQjr4r14MIG', '2023-06-15 19:06:36'),
(2, 'Test2', 'test2@gmail.com', '$2y$10$aRl8bbjGUx8FCU.qA65b3.Vc5ztkUeP7Ws2m33YFjgbZNQ7yNfCx2', '2023-06-15 19:07:05'),
(3, 'Test3', 'test3@gmail.com', '$2y$10$Xk31.4T1MtcDv.QHTtqi7e.f6LhI9w28.0pMrjYjZUj.6xXLPe7N2', '2023-06-15 19:07:09'),
(4, 'Test4', 'test4@gmail.com', '$2y$10$.0ceyBTYHACcPmYtNd191e6vATYp75D1.Qrs9SkxdJEdnOT5Y7wjO', '2023-06-15 19:07:15'),
(5, 'Test5', 'test5@gmail.com', '$2y$10$.5uhm2V5BNihT4noIxF1peBASs5kKl2CsExgd1/zrJD4263yRNmGG', '2023-06-15 19:07:21'),
(6, 'Test6', 'test6@gmail.com', '$2y$10$FgFyAvKgMWmw74Tn2zZ5EOw9lNp4ASwODeU8E1Wwtjv3TkKeDLcKW', '2023-06-15 19:07:26'),
(7, 'Mafia', 'mafia@gmail.com', '$2y$10$Qii.rUSAv6i4RQm5C7fWfuPWduomLHtNs.lwf40nlenhy9TOXIyaC', '2023-06-16 12:14:50');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `punctaje`
--
ALTER TABLE `punctaje`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `punctaje`
--
ALTER TABLE `punctaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
