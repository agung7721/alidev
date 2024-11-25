-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Okt 2024 pada 08.00
-- Versi server: 8.0.30
-- Versi PHP: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ali_bagasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint UNSIGNED NOT NULL,
  `jamaah_id` bigint UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kg` double(8,2) NOT NULL,
  `harga` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `jamaah_id`, `kode_barang`, `nama_barang`, `kg`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, '2', 'tes', 2.00, 2.00, '2024-09-12 00:07:30', '2024-09-12 00:07:30'),
(2, 1, '3', 'a', 1.00, 2.00, '2024-09-12 00:07:52', '2024-09-12 00:07:52'),
(3, 2, '1', 'gas', 3.00, 22000.00, '2024-09-12 00:08:36', '2024-09-12 00:08:36'),
(4, 1, '3', 'ps', 1.00, 2.00, '2024-09-12 00:09:57', '2024-09-12 00:09:57'),
(5, 8, '1', 'aa', 5.00, 6.00, '2024-09-12 01:08:58', '2024-09-12 01:08:58'),
(6, 9, 'Vero quis sequi ut n', 'Dolorem ut illum ve', 32.00, 67.00, '2024-09-12 01:15:02', '2024-09-12 01:15:02'),
(7, 9, 'Ex sequi enim id cul', 'Quas voluptatem vol', 26.00, 27.00, '2024-09-12 01:25:26', '2024-09-12 01:25:26'),
(19, 1, 'Reiciendis consequun', 'Velit culpa qui mole', 61.00, 35.00, '2024-09-17 18:45:44', '2024-09-17 18:45:44'),
(20, 3, 'Aspernatur voluptati', 'Quam error autem per', 75.00, 13.00, '2024-09-19 00:29:29', '2024-09-19 00:29:29'),
(21, 3, 'Consequatur aut prae', 'Veniam enim delectu', 93.00, 22.00, '2024-09-19 00:29:40', '2024-09-19 00:29:40'),
(22, 1, 'Et voluptas vero mai', 'Et magna id consequ', 74.00, 92.00, '2024-09-19 02:14:56', '2024-09-19 02:14:56'),
(23, 2, 'Nesciunt illum ven', 'Possimus voluptate', 60.00, 67.00, '2024-09-19 02:15:26', '2024-09-19 02:15:26'),
(24, 2, 'Expedita expedita cu', 'Est lorem est elig', 19.00, 64.00, '2024-09-19 02:15:35', '2024-09-19 02:15:35'),
(25, 1, 'Tempora aute quis si', 'Pariatur Ratione as', 50.00, 74.00, '2024-09-19 02:17:31', '2024-09-19 02:17:31'),
(26, 1, 'Est tenetur et volup', 'Non culpa dolores do', 86.00, 68.00, '2024-09-19 02:17:50', '2024-09-19 02:17:50'),
(36, 1, 'Aute sunt dolorem v', 'Necessitatibus cillu', 43.00, 47.00, '2024-09-23 02:07:18', '2024-09-23 02:07:18'),
(37, 1, 'Consequatur libero', 'Quo a eos quisquam a', 35.00, 71.00, '2024-09-23 02:56:35', '2024-09-23 02:56:35'),
(38, 28, 'Aut qui expedita vel', 'Quos qui inventore i', 26.00, 42.00, '2024-09-24 01:56:27', '2024-09-24 01:56:27'),
(39, 28, 'Voluptatem Elit vo', 'Nesciunt delectus', 68.00, 17.00, '2024-09-24 01:56:43', '2024-09-24 01:56:43'),
(40, 28, 'Aut recusandae Haru', 'Nihil corrupti unde', 79.00, 39.00, '2024-09-24 01:58:20', '2024-09-24 01:58:20');

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
-- Struktur dari tabel `jamaahs`
--

CREATE TABLE `jamaahs` (
  `id` bigint UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_porsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `travel_muthowif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kepulangan` date NOT NULL,
  `alamat_ktp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_tujuan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jamaahs`
--

INSERT INTO `jamaahs` (`id`, `order_number`, `no_porsi`, `nama`, `ktp`, `no_passport`, `telpon`, `hotel`, `travel_muthowif`, `tanggal_kepulangan`, `alamat_ktp`, `alamat_tujuan`, `created_at`, `updated_at`) VALUES
(1, 'ORD202409120001', '1', 'HELMY', '3173051206980009', 'PASS31454', '081281171106', 'al-hikmah', 'berkah', '2024-10-05', 'jl. kalideres permai no 61', 'jl. kalideres permai no 61', '2024-09-11 20:25:03', '2024-09-13 02:06:15'),
(2, 'ORD202409120002', '23', 'JONI', '3173051206980009', 'PASS321234', '081281171106', 'al-hikmah', 'berkah', '2024-09-20', 'jl. kalideres permai no 61', 'jl. kalideres permai no 61', '2024-09-11 20:43:50', '2024-09-11 20:43:50'),
(3, 'ORD202409120003', 'Sunt velit aut qui', 'Occaecat itaque repu', 'Quia eum sunt lorem', 'Corporis et in dolor', 'Eos reprehenderit', 'Magni et quibusdam l', 'Officia maxime conse', '2009-10-04', 'Hic ad assumenda dol', 'Est voluptas non id', '2024-09-12 00:13:31', '2024-09-12 00:13:31'),
(4, 'ORD202409120004', 'Mollit cupiditate ad', 'Aliquam impedit cup', 'Quis officiis optio', 'Et molestiae est dol', 'Fugiat dolores cill', 'Sit elit nisi ut e', 'Et possimus dolore', '1989-04-24', 'Dolore ipsum sint s', 'Quis qui voluptatibu', '2024-09-12 00:14:05', '2024-09-12 00:14:05'),
(6, 'ORD202409120005', 'Voluptates in qui do', 'Est sed dolor tempor', 'Ipsum error quis por', 'Quia animi mollitia', 'Quibusdam provident', 'Qui nesciunt magni', 'Aute eiusmod velit e', '1986-12-12', 'Illum magni accusan', 'Praesentium rerum mo', '2024-09-12 00:17:35', '2024-09-12 00:17:35'),
(7, 'ORD202409120006', 'Dolorem recusandae', 'Qui aperiam eu harum', 'Officia id minima s', 'Dignissimos saepe eu', 'Id non non ut vel al', 'Quisquam aut accusan', 'Sed quas id quia mo', '2007-09-09', 'Eum laborum Minima', 'Ut fuga Accusantium', '2024-09-12 01:08:17', '2024-09-12 01:08:17'),
(8, 'ORD202409120007', 'Id ut qui veritatis', 'Irure sint sapiente', 'In eos amet volupt', 'Consectetur saepe vo', 'Animi ipsa delenit', 'Dolor voluptas volup', 'Nulla dolore ad moll', '1992-11-24', 'Quibusdam enim qui b', 'Eveniet autem non m', '2024-09-12 01:08:29', '2024-09-12 01:08:29'),
(9, 'ORD202409120008', 'Est aut incidunt al', 'Sed nulla quia culpa', 'Velit ut dolores est', 'Maxime aut totam est', 'Non magnam velit rei', 'Aute tempor amet ni', 'Corrupti irure aut', '2006-07-09', 'Eos error labore vol', 'Natus ut quidem faci', '2024-09-12 01:11:29', '2024-09-12 01:11:29'),
(28, 'ORD202409240009', 'Officiis et temporib', 'Nesciunt impedit n', 'Obcaecati ea qui off', 'In laboris aut dolor', 'Exercitation eligend', 'In harum harum minus', 'Praesentium maxime h', '1972-09-04', 'In quo voluptatem D', 'Cupidatat pariatur', '2024-09-24 01:55:44', '2024-09-24 01:55:44');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_12_015927_create_jamaahs_table', 1),
(6, '2024_09_12_015930_create_barangs_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_jamaah_id_foreign` (`jamaah_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jamaahs`
--
ALTER TABLE `jamaahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jamaahs_order_number_unique` (`order_number`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jamaahs`
--
ALTER TABLE `jamaahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_jamaah_id_foreign` FOREIGN KEY (`jamaah_id`) REFERENCES `jamaahs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
