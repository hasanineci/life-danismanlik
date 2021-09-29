-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Eyl 2021, 22:50:53
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `teslimproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `history` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `history`, `mission`, `vision`, `created_at`, `updated_at`) VALUES
(1, '<p>Şirket kurucularımız Fatma Ece Ateş ve Şükrü Ötkün AB Bölgesel Kalkınma Hibe Programları kapsamında desteklenen FON, ELÇİLİK ve PCM projelerinde koordinatörlük görevleri ile iş hayatlarına başlamıştır.</p><p>Proje döngü yönetimi konusunda elde edilen deneyim sonrasında LİFELİNE Danışmanlık adıyla hibe teşvik programları, proje yazımı ve proje yönetimi gibi alanlarda işletmelerin ihtiyaç duyduğu profesyonel bakış açısını gidermek üzere Fatma&nbsp; Ece Ateş ve Şükrü Ötkün tarafından 2021 yılında kurulmuştur.</p><p>Aile danışmanlığı ve rehberlik hizmeti (mülteci ailelerde dahil), lise ve üniversite öğrencilerine eğitim ve meslek danışmanlığı hizmeti sunmaktadır. Aynı zaman da kurumsal şirketlerin, yönetici kadrosu ile çalışan kadrosunu psikolojik, fiziksel ve ekonomik açıdan inceleyen aynı zaman da bu şirketlerin büyümesi ve gelişmesi için onlara insan kaynakları desteği sağlamaktadır. Kurum içi start-up şeklinde yapılandırmış ve müşterilerinin ihtiyaçlarına doğrudan katkı sunacak özel bir iş modeli ile hizmet vermeye başlamıştır. Globalleşmeye yönelik başta Kuzey Kıbrıs Türk Cumhuriyeti olmak üzere birçok farklı ülkeye yatırım yapılmıştır.</p><p>Lifeline Danışmanlık kadrosuyla yurt içi ve yurt dışı yapılanmalarıyla müşterilerin ihtiyaç duyduğu katma değerli çözümleri kendi geliştirdiği metotlarla uygulayan LİFELİNE DANIŞMANLIK globale açılan en büyük danışmanlık şirketi olmayı hedeflemiştir.</p>', '<p>Mart 2021 tarihinde kurulmuş olan LİFELİNE eğitim ve proje danışmanlık merkezimiz toplum ve çevre adına her kesimini doğrudan veya dolaylı olarak etkileyen avantajlı ve dezavantajlı durumlara karşı eşit bir şekilde fayda sağlamayı amaçlamaktadır. Toplumu bilinçlendiren eğitim ve proje çalışmaları, mesleki çalışmalara katkı sunmak ve mülteci ailelerin rehberlik ve eğitim süreçleriyle ilgilenmek temel hedeflerimiz arasındadır. LİFELİNE eğitim ve proje danışmanlık merkezi olarak bulunduğumuz İl ve Ülkemiz genelinde uluslararası eğitim ve proje danışmalığı yapmaktayız.&nbsp;</p>', '<p>Kuruluş ilkelerimiz doğrultusunda kanun ve etik kurallarımız çerçevesinde tüzel kişilerle proje düzenleyen toplumun genelini veya bir kısmını etkileyecek çalışmalar yapan ve mesleki eğitimleri disiplinli bir şekilde sunmayı amaçlıyoruz. Bunun yanında mültecilere yönelik aile danışmalığı rehberlik, eğitim danışmanlığı hizmeti sunuyoruz.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `watsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `email`, `second_email`, `phone_number`, `second_phone_number`, `watsapp`, `address`, `created_at`, `updated_at`) VALUES
(1, 'info@lifelinetr.com', NULL, '+90 (536) 572 14 88', NULL, '+90 (536) 572 14 88', 'Paşabağı, 765. Sk. No: 6 D:11, 63040 Haliliye/Şanlıurfa', NULL, '2021-09-26 22:01:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `courses`
--

INSERT INTO `courses` (`id`, `name`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Test Eğitim', '<p>Test Eğitim Açıklaması Test Eğitim Açıklaması Test Eğitim Açıklaması</p>', '1-16326860236150cfc73efa5.png', NULL, NULL),
(2, 'Deneme Eğitim2', '<p>Test Eğitim Açıklaması Test Eğitim Açıklaması Test Eğitim Açıklaması</p>', '2-16326939626150eeca85b6e.png', NULL, NULL),
(3, 'Test Etkinlik 3', '<p>Yenilikçi hizmet anlayışımız ile danışmanlık sektöründe takip eden değil, takip edilen bir firma olmayı hedefliyoruz.Yenilikçi hizmet anlayışımız ile danışmanlık sektöründe takip eden değil, takip edilen bir firma olmayı hedefliyoruz.</p>', '3-16326940476150ef1fb897d.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `content` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `time`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Test Etkinlik', '2021-09-25', '00:53:00', 'sadfasdfasdf', '1-16326858686150cf2c9cbaa.png', '2021-09-26 19:51:08', '2021-09-26 19:51:08'),
(2, 'Test Etkinlik', '2021-09-11', '23:52:00', 'asdasdsadasdasdasd', '2-16326859086150cf54c5132.png', '2021-09-26 19:51:48', '2021-09-26 19:51:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(21) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `readed` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `text`, `readed`, `created_at`, `updated_at`) VALUES
(3, 'FURKAN AKGÜN', 'erselhekim@gmail.com', '02128633132', 'asda', '12312asdasdasdsad', NULL, 1, '2021-09-26 22:01:57', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_02_160819_create_events_table', 1),
(6, '2021_09_07_214955_create_projects_table', 1),
(7, '2021_09_08_181910_create_about_table', 1),
(8, '2021_09_08_182009_create_contact_table', 1),
(9, '2021_09_08_182025_create_courses_table', 1),
(10, '2021_09_08_182044_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Deneme Proje', '<p>Test Eğitim AçıklamasıTest Eğitim AçıklamasıTest Eğitim AçıklamasıTest Eğitim AçıklamasıTest Eğitim Açıklaması</p>', '1-16326862516150d0ab3b5e6.png', NULL, NULL),
(2, 'Test2 Proje', '<p>Test Eğitim AçıklamasıTest Eğitim AçıklamasıTest Eğitim AçıklamasıTest Eğitim AçıklamasıTest Eğitim AçıklamasıTest Eğitim AçıklamasıTest Eğitim Açıklaması</p>', '2-16326862776150d0c515e9d.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'info@lifelinetr.com', NULL, '$2y$10$kqj4GL/Wfvg9V0ixmowRkuyZVT4FaMve1yZQ937vabI/8ujeIidbO', NULL, NULL, '2021-09-26 21:56:13'),
(4, NULL, 'deneme@gmail.com', NULL, '$2y$10$CRYbDpDoR4ntV56X4efDtuPMgO9Hw.P1dLpInDmCihR43c01b86ze', NULL, '2021-09-26 21:10:31', '2021-09-26 21:56:47'),
(5, NULL, 'asdas@hotmail.com', NULL, '$2y$10$O1wmAoBVKvlXGkyYLlTatOw.ssQIFSiaBcb.pCVElNnruHvhZU01C', NULL, '2021-09-26 21:27:06', '2021-09-26 21:27:06'),
(7, NULL, 'hasan22', NULL, '$2y$10$f3vNam1Ovq9JfQspPss5cutts5siwOAHSDioGS.e4Uoiu145zyYgK', NULL, '2021-09-27 20:44:54', '2021-09-27 20:44:54');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
