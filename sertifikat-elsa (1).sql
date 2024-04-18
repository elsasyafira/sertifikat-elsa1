-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2024 pada 12.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikat-elsa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerɵficates`
--

CREATE TABLE `cerɵficates` (
  `certificate_id` int(11) NOT NULL,
  `participant_name` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `certificate_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `organizer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat_assignments`
--

CREATE TABLE `sertifikat_assignments` (
  `assignment_id` int(11) NOT NULL,
  `sertifikat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `assigned_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `full_name`, `email`, `level`) VALUES
('dilla', '$2y$10$REzBrZXB0If7e6cHKRqiiOXBWyQoSjJwH8pri2n/TJNMgtCBg/Da.', 'dillaa', 'dilla@gmail.com', 'user'),
('elsa', '$2y$10$eX9TZjzg4nssZf6UsRlzy.PoN01GBzeETnrva9q2Wb9q3DZ429MGC', 'elsa', 'elsa@gmail.com', 'user'),
('elsa syafira', '$2y$10$eKk0bz0XmPW0nafk99HYVu7AXnEdJHZv6EAslkB3pF5doL9SvkuAK', 'elsa syafira', 'elsa@gmail.com', 'user'),
('yara', '$2y$10$h7BDdbVyt1jh8z6yB8G0cuQrrZsZ02sQJhO55Jn0pWNKcQHttV1H6', 'yara', 'yara@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cerɵficates`
--
ALTER TABLE `cerɵficates`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indeks untuk tabel `sertifikat_assignments`
--
ALTER TABLE `sertifikat_assignments`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `cerƟficate_id` (`sertifikat_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cerɵficates`
--
ALTER TABLE `cerɵficates`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sertifikat_assignments`
--
ALTER TABLE `sertifikat_assignments`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
