-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2021 at 09:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jtat2_mugallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `mugallery`
--

CREATE TABLE `mugallery` (
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `author_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mugallery`
--

INSERT INTO `mugallery` (`title`, `description`, `filename`, `timedate`, `author_id`, `id`) VALUES
('Cat', 'This is my cat.', 'baby.jpg', '2021-01-29 01:20:01', 1, 3),
('This is me', 'Cucumber the Cat', 'meo.jpg', '2021-01-29 02:01:12', 4, 5),
('Flower Cat', 'Cat with flowers on head', 'flowercat.jpg', '2021-01-29 02:04:13', 4, 6),
('Cat Lying Down', 'A pretty cat', 'cat-breeds.jpg', '2021-01-29 02:05:49', 4, 7),
('Ragdoll', 'A ragdoll cat', 'Ragdoll-Cat-min-scaled.jpg', '2021-01-29 02:06:52', 4, 8),
('Doll Face Persian', 'A persian kitty.', 'doll-face-persian.jpg', '2021-01-29 02:07:59', 4, 9),
('The League', 'The Justice League', 'justiceleague_wb.jpg', '2021-01-29 02:09:21', 2, 10),
('Metropolis', 'The city of Metropolis', 'metropolis_.jpg', '2021-01-29 02:11:49', 2, 12),
('DC', 'DC Characters', 'dc.jpg', '2021-01-29 02:14:43', 2, 13),
('Lex Luthor', 'Not a good guy.', 'lex.jpg', '2021-01-29 02:18:11', 2, 14),
('Edmonton View', 'View from the south side of the river', 'view-from-south.jpg', '2021-01-29 02:20:11', 1, 15),
('View from home', 'My view from home.', 'view-from-home.jpg', '2021-01-29 02:23:21', 1, 16),
('Cute Cat', 'A Cute cat', '98b3e8fb3b97570c0b46799cde5bb500.jpg', '2021-01-29 02:25:11', 1, 17),
('Kirara', 'Cat demon from Inuyasha', 'kirara3.jpg', '2021-01-29 02:25:41', 1, 18),
('The Batcave', 'My hideout.', 'batcave.jpg', '2021-01-29 15:58:47', 3, 20),
('The Batman', 'The Dark Knight', 'batman.jpg', '2021-01-29 16:00:43', 3, 21),
('The Joker', 'Not just a Joker...', 'joker.jpg', '2021-01-29 16:01:28', 3, 22),
('Gotham City', 'The city protected by the Dark Knight', 'gotham-city.jpg', '2021-01-29 16:02:37', 3, 23),
('The Batman vs Superman', 'Who will win?', 'batman-vs-superman.jpg', '2021-01-29 16:04:31', 2, 24),
('Alfred', 'This is Alfred', 'c1xblh3qgviprbu44apq.jpg', '2021-01-29 16:07:39', 3, 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) NOT NULL COMMENT 'user''s email, unique'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`) VALUES
(1, 'jtat2', '$2y$10$laIuZPFStdmzBQUFAjl88et0czHJuCfaZkoz1NqPz3adQg6wZLaWC', 'jtat2@nait.ca'),
(2, 'superman', '$2y$10$RbSaJxiewXmSAnBUPLIusuIeET2KykjnZ1IHp5Mr2tXfyU/s0qIQi', 'superman@hotmail.com'),
(3, 'batman', '$2y$10$niBIS0pNHFRZfzVhHSuP..CkK4vByooP5jgZjOJydKVNdnSVz0JcK', 'batman@hotmail.com'),
(4, 'cucumberthecat', '$2y$10$aYqMGwQAlE/eWumsJ2IKcu7rAlQXfvzHEoV6ZMlS.DU3HbMHlEgUC', 'cucumber@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mugallery`
--
ALTER TABLE `mugallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mugallery`
--
ALTER TABLE `mugallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
