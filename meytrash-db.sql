-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Feb 2024 pada 03.41
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meytrash-db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasis`
--

CREATE TABLE `donasis` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `foto_makanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_makanan` int NOT NULL,
  `jenis_donasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `donasis`
--

INSERT INTO `donasis` (`id`, `user_id`, `foto_makanan`, `deskripsi`, `berat_makanan`, `jenis_donasi`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ikan goreng.jpg', 'masih dalam keadaan baik, baru digoreng tadi siang, didonasikan karna gorengnya kebanyakan', 1, 'makanan', 'terverifikasi', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(2, 2, 'sayur tumis.jpg', 'masih dalam keadaan baik, baru ditumis tadi siang, didonasikan untuk saudara yang membutuhkan', 3, 'makanan', 'terverifikasi', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(3, 3, 'tomat.jpg', '-', 1, 'bahan makanan', 'ditolak', '2024-02-10 09:00:15', '2024-02-10 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edukasis`
--

CREATE TABLE `edukasis` (
  `id` bigint UNSIGNED NOT NULL,
  `sampul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `edukasis`
--

INSERT INTO `edukasis` (`id`, `sampul`, `link_url`, `deskripsi`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'artikel kkn undipo.jpg', 'http://kkn.undip.ac.id/?p=305408', 'Maraknya fenomena food waste yang terjadi di Indonesia merupakan salah satu indikasi kurangnya pengetahuan warga akan food waste dan bagaimana cara mengatasinya. Food waste sendiri merupakan salah satu istilah dalam bahasa Inggris yang memiliki pengertian makanan siap saji yang terbuang begitu saja dan akhirnya menumpuk di TPA. Sangat disayangkan fenomena food waste ini lah yang menjadi penyumbang terbesar pada permasalahan sampah di Indonesia. Melihat banyaknya fenomena yang terjadi terkait dengan sampah limbah makanan, tim KKN II UNDIP melakukan sosialisasi tentang apa itu food waste dan bagaimana cara mengurangi atau pun menanggulanginya. Sasaran dari sosialisasi yang dilakukan ini adalah ibu-ibu yang tinggal di RW 5 pada kelurahan Muktiharjo Lor', '[\"food waste\",\"sampah makanan\",\"indonesia\",\"semarang\",\"kkn\",\"mahasiswa\"]', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(2, 'artikel kompas.jpg', 'https://lestari.kompas.com/read/2023/05/16/190000086/indonesia-peringkat-4-food-waste-terbanyak-di-dunia', 'Indonesia menempati peringkat keempat di dunia dengan food waste atau mubazir makanan paling banyak di dunia pada 2020. Food waste atau mubazir makanan adalah makanan yang siap disantap tapi terbuang begitu saja dan menjadi sampah. Dilansir dari Statista, food waste atau mubazir makanan yang dihasilkan sektor rumah tangga di Indonesia pada 2020 mencapai 20,94 juta metrik ton. Secara berurutan, total mubazir makanan Indonesia berada di bawah China dengan 91,65 juta metrik ton, India dengan 68,76 juta metrik ton, dan Nigeria dengan 37,94 juta metrik ton.', '[\"food waste\",\"sampah makanan\",\"indonesia\",\"food waste dunia\",\"food waste indonesia\",\"posisi food waste indonesia\"]', '2024-02-10 09:00:15', '2024-02-10 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_20_045802_create_sampahs_table', 1),
(7, '2024_01_20_051016_create_donasis_table', 1),
(8, '2024_01_20_051539_create_edukasis_table', 1),
(9, '2024_01_23_073619_create_proses_sampahs_table', 1),
(10, '2024_01_23_073637_create_riwayat_sampahs_table', 1),
(11, '2024_01_23_112622_create_proses_donasis_table', 1),
(12, '2024_01_23_112634_create_riwayat_donasis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_donasis`
--

CREATE TABLE `proses_donasis` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `donasi_id` bigint NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'In Progres',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `proses_donasis`
--

INSERT INTO `proses_donasis` (`id`, `user_id`, `donasi_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'In Proses', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(2, 2, 8, 'In Proses', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(3, 3, 12, 'In Proses', '2024-02-10 09:00:15', '2024-02-10 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_sampahs`
--

CREATE TABLE `proses_sampahs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `sampah_id` bigint NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'In Progres',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `proses_sampahs`
--

INSERT INTO `proses_sampahs` (`id`, `user_id`, `sampah_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'In Proses', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(2, 3, 9, 'In Proses', '2024-02-10 09:00:15', '2024-02-10 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_donasis`
--

CREATE TABLE `riwayat_donasis` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `donasi_id` bigint NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `riwayat_donasis`
--

INSERT INTO `riwayat_donasis` (`id`, `user_id`, `donasi_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Selesai', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(2, 2, 3, 'Selesai', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(3, 3, 6, 'Ditolak', '2024-02-10 09:00:15', '2024-02-10 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_sampahs`
--

CREATE TABLE `riwayat_sampahs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `sampah_id` bigint NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `riwayat_sampahs`
--

INSERT INTO `riwayat_sampahs` (`id`, `user_id`, `sampah_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'In Proses', '2024-02-10 09:00:15', '2024-02-10 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampahs`
--

CREATE TABLE `sampahs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `foto_sampah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_sampah` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sampahs`
--

INSERT INTO `sampahs` (`id`, `user_id`, `foto_sampah`, `deskripsi`, `berat_sampah`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'sampah1.jpg', 'sampah sudah 3 hari pak', 3, 'terverifikasi', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(2, 5, 'sampah2.jpg', 'sampah sudah 2 hari pak', 2, 'terverifikasi', '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(3, 8, 'sampah3.jpg', 'sampah baru saja kemarin', 2, 'terverifikasi', '2024-02-10 09:00:15', '2024-02-10 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `foto_profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `poin` int UNSIGNED NOT NULL DEFAULT '0',
  `rupiah` decimal(10,3) NOT NULL DEFAULT '0.000',
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `foto_profil`, `name`, `no_hp`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `poin`, `rupiah`, `alamat`, `rekening`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'boby wibowo.jpg', 'Boby Wibowo', '628823454568', 'bobywib@gmail.com', NULL, '$2y$12$VMLg7gtgzRal1jYxXGqTZuhBwD.YK9eMhstdliPcXpt6p883/6D4K', NULL, NULL, NULL, 143, 12.000, 'https://maps.app.goo.gl/M1E1V8W1xADKwpqQ7', '2134876830987', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(2, 'agnes cristi.jpg', 'Agnes Cristi', '6281345876996', 'Acit28@gmail.com', NULL, '$2y$12$nH6b8zgNUpQgbPQ2PI4VtOwEk0K8xI7FffMaQJr4UQLSdJGspToEq', NULL, NULL, NULL, 100, 8.000, 'https://maps.app.goo.gl/NrhNviXHvsN3CvZU9', '2342876983015', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(3, 'lukman suhardi.jpg', 'Lukman Suhardi', '6287345876971', 'Lukmanpunya@gmail.com', NULL, '$2y$12$idJ3bCkPEU/SeXqJrjDxSuQzVJSHa45YVMsfpOP.Q7fZSvjrQlapi', NULL, NULL, NULL, 10, 17.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '7896031763983', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(4, 'agung podomoro.jpg', 'agung', '628732543', 'podomoroagung@gmail.com', NULL, '$2y$12$jqyCnRHFLtu3DP38VD48BOZGcqpGD3r16vfqlI4Y9BSoQyzmy3Ufi', NULL, NULL, NULL, 12, 12.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '7896031723212324', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(5, 'nowela enzy.jpg', 'enzy', '6223412986', 'nowela1234@gmail.com', NULL, '$2y$12$D57vyU5XH7fFwcvTkBdDu.ZD7p4RzdIn6yFMLJ/hPzZweL9p1gSky', NULL, NULL, NULL, 100, 26.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '78960317289982324', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(6, 'niko.jpg', 'niko', '62897564324', 'niko2332@gmail.com', NULL, '$2y$12$0cmqbE2htppuss3A0pD4DOSW9v.1BqTUoF6f.R.nV3o0Ecng.mNUi', NULL, NULL, NULL, 32, 2.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '7893455613282324', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(7, 'felix.jpg', 'felix', '629876533445', 'felixonetwo@gmail.com', NULL, '$2y$12$FknepPiT3PhwZzI55onvx.oSZusZ0khMxTfxc5Wn0KvhGWb56xZGi', NULL, NULL, NULL, 10, 4.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '7893423568582324', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(8, 'admin.jpg', 'Admin Riski', '6298778973', 'rizkymantako@gmail.com', NULL, '$2y$12$9yd5IKw8rTqQ5WWjo2cVTu5pBPp8h6vFV.Z8bIhSfbo.7yLldNnz.', NULL, NULL, NULL, 18, 3.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '78344345678845', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(9, 'putri.jpg', 'putri aryani', '6298762323445', 'putriaja@gmail.com', NULL, '$2y$12$x2LkaCAomyV0yzJZ/Clhx.pMNvJaGQTeUw6678tYHmeJaYU2WB8Qa', NULL, NULL, NULL, 15, 14.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '78344556677845', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(10, 'yanto.jpg', 'yanto saputra', '62987621545', 'yantoaja@gmail.com', NULL, '$2y$12$IZzZDsXXXhSHnXrmAzoHdOgnEw2qpl7THKrH9ZqBw4kbaVqHm0SOq', NULL, NULL, NULL, 18, 19.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '783441234567845', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(11, 'natasya.jpg', 'natashya putri', '6298762323', 'natasyatasya@gmail.com', NULL, '$2y$12$1i4BiVqj8Hk3wWb6lEDg4Ol/dJRZzTff7UoDOha0UUp4LDmluPdKu', NULL, NULL, NULL, 28, 9.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '7834412907845', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(12, 'reza.jpg', 'reza aryani', '6298778973', 'rezakita@gmail.com', NULL, '$2y$12$U2MfBdLGR0Ueg/M4bc7O9e21Z2CqLh5iDk0E/TBRlkrI34XyDyoWO', NULL, NULL, NULL, 18, 3.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '78344345678845', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15'),
(13, 'yani.jpg', 'i yani', '62985665973', 'yaniiv@gmail.com', NULL, '$2y$12$dvuoab5Z8dRIiF/OLqJ3vOECrhTXjYF.9s1qV39rhrT2PccAv/XQy', NULL, NULL, NULL, 19, 9.000, 'https://maps.app.goo.gl/Bzoe7rSkAYQUBZGo8', '78900745678845', NULL, '2024-02-10 09:00:15', '2024-02-10 09:00:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `donasis`
--
ALTER TABLE `donasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edukasis`
--
ALTER TABLE `edukasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `proses_donasis`
--
ALTER TABLE `proses_donasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proses_sampahs`
--
ALTER TABLE `proses_sampahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_donasis`
--
ALTER TABLE `riwayat_donasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_sampahs`
--
ALTER TABLE `riwayat_sampahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sampahs`
--
ALTER TABLE `sampahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `donasis`
--
ALTER TABLE `donasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `edukasis`
--
ALTER TABLE `edukasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `proses_donasis`
--
ALTER TABLE `proses_donasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `proses_sampahs`
--
ALTER TABLE `proses_sampahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_donasis`
--
ALTER TABLE `riwayat_donasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `riwayat_sampahs`
--
ALTER TABLE `riwayat_sampahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sampahs`
--
ALTER TABLE `sampahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
