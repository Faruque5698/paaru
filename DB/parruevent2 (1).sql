-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 07:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parruevent2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_bls` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `publication_status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `name`, `slogan`, `about_bls`, `image`, `activity_name`, `activity_message`, `created_by`, `updated_by`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Our Story', 'The name of the association shall be PHYSICS ALUMNI ASSOCIATION, RAJSHAHI UNIVERSITY (PAARU).', '<p>The objectives of this alumni association are to build active communication network among all the present and ex-students of the Department of Physics through various programs and to contribute in the academic development of the Physics Department and economic development of the country through the dissemination of new concepts in the relevant field.</p>', '1575791115.jpg', 'Our Activity', '<p>To make a platform for strengthening social and professional contact among the Alumnus and the Department by mutual exchange of knowledge and experience&nbsp;in any academic activities.</p>', 1, 8, 1, '2019-12-07 05:08:09', '2020-02-22 19:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` date DEFAULT NULL,
  `activity_type` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `date_time`, `activity_type`, `image`, `publication_status`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'demo', '<p>llhjlhklhl</p>', '2019-11-04', 1, '1575524092.jpg', 0, 1, 1, 1, '2019-12-07 04:32:36', '2019-12-05 05:34:53', '2019-12-07 04:32:36'),
(2, 'This is a Titlehjhfj', '<p>hkhjkhkjhkhjkh</p>', '2019-11-25', 1, '1575693122.jpg', 0, 1, 1, 1, '2019-12-07 04:32:42', '2019-12-07 04:32:03', '2019-12-07 04:32:42'),
(3, 'Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis et augue.', '<h3>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et dolore magna aliqua. Ut enim asan minim veniam, quis nostrud &nbsp; Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et dolore magna aliqua. Ut enim asan minim veniam, quis nostrud</h3>', '2019-11-25', 1, '1575792136.jpg', 0, 1, 6, 8, '2020-02-22 18:29:48', '2019-12-08 08:02:16', '2020-02-22 18:29:48'),
(4, 'Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis et augue.', '<p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et dolore magna aliqua. Ut enim asan minim veniam, quis nostrud&nbsp; Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et dolore magna aliqua. Ut enim asan minim veniam, quis nostrud</p>', '2019-11-04', 1, '1575792161.jpg', 1, 1, NULL, 8, '2020-02-24 00:36:06', '2019-12-08 08:02:41', '2020-02-24 00:36:06'),
(5, 'Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis et augue.', '<p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et dolore magna aliqua. Ut enim asan minim veniam, quis nostrud&nbsp; Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt loren labore et dolore magna aliqua. Ut enim asan minim veniam, quis nostrud</p>', '2019-11-30', 1, '1575792185.jpg', 1, 1, NULL, 8, '2020-02-24 01:03:47', '2019-12-08 08:03:05', '2020-02-24 01:03:47'),
(6, 'Scholarship Award Ceremony', '<p>A scholarship giving ceremony was held recently at Ahmed Hossain Gallery&nbsp;for the students of the department of Physics. Mr. Md. Abdul Wadud, President, Physics Alumni Association Rajshahi University (PAARU), Prof. Md. Rafiqul Ahsan, General Secretary, PAARU&nbsp;and the other members of the&nbsp;executive committee of PAARU were&nbsp;present. The 55 students were selected for this award by the selection committee. Every selected&nbsp;students&nbsp;get 1000 tk per month.</p>', '2019-10-03', 3, '1582367364.jpg', 1, 6, 8, NULL, NULL, '2019-12-23 05:57:05', '2020-02-22 22:29:24'),
(7, '2nd Executive Committee Meeting', '<p>The Second Meeting of the Physics Alumni Association, Rajshahi University (PAARU) was&nbsp;held on 5 May 2018 at 10 am in room No. 201 Department of Physics, Rajshahi University. All the members of PAARU executive Committee were present.</p>', '2018-05-05', 4, '1582461737.jpg', 1, 8, 8, NULL, NULL, '2020-02-24 00:42:17', '2020-02-24 00:59:44'),
(8, '3rd Executive Committee Meeting', '<p>The 3rd Meeting of the Physics Alumni Association, Rajshahi University (PAARU) was held on 7 October 2018 at 10:30 am in room No. 201 at the Department of Physics, Rajshahi University. All the members of PAARU executive Committee were present.</p>', '2018-10-07', 4, '1582461980.jpg', 1, 8, 8, NULL, NULL, '2020-02-24 00:46:20', '2020-02-24 01:00:24'),
(9, '4th Executive Committee Meeting', '<p>The 4th Meeting of the Physics Alumni Association, Rajshahi University (PAARU) was held on 8 Feb 2019 at 7 pm at Dhaka club. Most of the members of PAARU executive Committee were present.</p>\r\n\r\n<p>&nbsp;</p>', '2019-02-08', 4, '1582462221.jpg', 1, 8, 8, NULL, NULL, '2020-02-24 00:50:21', '2020-02-24 01:01:15'),
(10, '5th Executive Committee Meeting', '<p>The 5th Meeting of the Physics Alumni Association, Rajshahi University (PAARU) was held on 3 October 2019 at 10:30 am in room No. 201 at the Department of Physics, Rajshahi University. Most of the members of PAARU executive Committee were present.</p>', '2019-10-03', 4, '1582462396.jpg', 1, 8, 8, NULL, NULL, '2020-02-24 00:53:16', '2020-02-24 01:01:53'),
(11, '6th Executive Committee Meeting', '<p>The 6th Meeting of the Physics Alumni Association, Rajshahi University (PAARU) was held on 5 March&nbsp; 2020 at 7 pm at Dhaka club. Most of the members of PAARU executive Committee were present.</p>', '2020-03-05', 4, '1583575618.jpg', 1, 9, NULL, NULL, NULL, '2020-03-07 22:06:58', '2020-03-07 22:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'posts', 'created', 1, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Dolore quia ut sed fuga molestiae.\",\"intro\":\"Ea ea consequatur aut. Et blanditiis quia quo quos facere eius veritatis. Et sit veritatis illo maiores qui sed omnis.\",\"content\":\"Fugit repellat qui aut. Est neque qui facilis consequuntur in dolore sint. Velit nam voluptas in quaerat consequatur sapiente. Voluptatem et ea dolorem omnis voluptatibus.\\n\\nMaxime consectetur incidunt eligendi eum. Vero labore impedit quas aspernatur. Temporibus est aliquid id esse aut autem nemo sit.\\n\\nDicta perspiciatis ut sint quia voluptas officiis. Ipsum nesciunt necessitatibus ab.\\n\\nRerum similique ut animi nam. Molestiae inventore quos qui ipsum. Nihil in aut ut. Tempora qui eveniet quia et.\\n\\nTempora consequatur totam pariatur harum similique. Ipsam numquam vel magnam possimus eligendi harum. Nulla explicabo neque aspernatur architecto ea. Enim dolorem atque quam quos.\",\"type\":\"Article\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"No\",\"meta_title\":\"Dolore Quia Ut Sed Fuga Molestiae.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(2, 'posts', 'created', 2, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Est veritatis animi accusantium non non.\",\"intro\":\"Delectus et est facere cupiditate vitae omnis dolorem aut. Magnam saepe nulla nisi cum doloremque. Debitis vero nostrum in rerum. Inventore voluptas hic amet voluptatum ut id.\",\"content\":\"Cupiditate earum mollitia ratione et. Exercitationem a dolor dicta iusto quia nesciunt. Possimus omnis saepe ipsum commodi aut. Praesentium suscipit sit laboriosam corporis. Veritatis qui et vel accusamus maiores ut odit.\\n\\nQui eius mollitia deserunt hic quis. Quia repellat dolor velit. Est officiis at similique ipsa dolorum quas est.\\n\\nOccaecati minus sed ipsum. Consequatur qui quaerat beatae tempore officiis et. Ut dolore omnis repellat quis quod.\\n\\nAperiam ut omnis qui accusantium asperiores nisi ducimus eius. Omnis quis provident fugit quis. Cum modi rerum non ad. Non hic distinctio rerum in modi sed.\\n\\nDolore tempora quis maxime voluptates est. Est soluta minima quis velit ex. Mollitia facilis qui sit magni veniam adipisci.\",\"type\":\"News\",\"category_id\":1,\"category_name\":\"Nihil non.\",\"is_featured\":\"No\",\"meta_title\":\"Est Veritatis Animi Accusantium Non Non.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(3, 'posts', 'created', 3, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Omnis maiores expedita et est.\",\"intro\":\"Qui ad labore et non non sit. Aut quidem architecto ut aut dolore doloremque autem provident. Deleniti recusandae hic sed totam cumque laboriosam ut. Nobis est optio ea expedita ipsa.\",\"content\":\"Vitae qui placeat est enim dolorem omnis. Ipsum excepturi est quibusdam omnis et mollitia. Enim quis sed molestias occaecati quia doloribus.\\n\\nEaque voluptatem iusto laboriosam blanditiis. Et consectetur cupiditate placeat voluptatem mollitia aut. Adipisci saepe blanditiis recusandae autem minima architecto magni facilis.\\n\\nNumquam architecto consectetur est enim consequatur praesentium qui. Voluptatum veniam dignissimos eaque vel blanditiis tempore ad. Consectetur ducimus laboriosam omnis consequatur.\\n\\nDeserunt autem et aut aut consequatur modi maiores. Illo ut explicabo ut modi aliquam. Molestiae aspernatur quas dolores quia eligendi maxime iusto.\\n\\nQuos id ut dolor quis reiciendis sunt. Placeat rerum expedita sunt saepe earum nostrum. Id culpa quisquam velit eum eligendi nulla et.\\n\\nEx voluptates et libero magni consequatur quidem. Et nemo distinctio praesentium hic est dolorem cumque. Dolor facilis iste maxime facere.\",\"type\":\"Article\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"No\",\"meta_title\":\"Omnis Maiores Expedita Et Est.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(4, 'posts', 'created', 4, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Alias voluptas ea voluptatem quibusdam.\",\"intro\":\"Sequi modi totam qui autem laudantium id veritatis sint. Voluptates consequatur voluptatibus alias corporis. Molestias qui voluptatem provident nostrum repellat nobis et facilis. Aperiam esse et necessitatibus impedit quos nisi molestiae rem.\",\"content\":\"Perspiciatis id nostrum nam sequi iste molestiae et assumenda. Quisquam cumque quis voluptate dolor. Necessitatibus porro velit eaque consequatur omnis neque explicabo recusandae. Praesentium dolor sed deserunt accusamus.\\n\\nEt fugiat autem minus et qui. Velit voluptatem optio consequuntur facilis. Quos quae sit iure laudantium sit hic magni sed. Ea in rerum illum labore voluptatum nulla nihil eligendi.\\n\\nMaiores excepturi rerum ratione iure nihil non. Magnam rerum est repellat ea repellendus quam. Ab explicabo assumenda ea sequi.\\n\\nVoluptas quasi quis rem dignissimos vero. Culpa ut eaque distinctio impedit atque eum. Mollitia impedit aut aut adipisci omnis voluptatem officiis nihil.\\n\\nDebitis repellendus fuga voluptas est ut laborum aut. Nesciunt est quidem et qui.\\n\\nNisi laboriosam rerum ipsam. Recusandae voluptas et ut non eum necessitatibus. Similique nulla natus omnis quia quod maxime dolorum sed. Ut dolores et ex mollitia cupiditate quia. Vitae cumque tempora est ducimus consequatur doloremque.\",\"type\":\"Blog\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"Yes\",\"meta_title\":\"Alias Voluptas Ea Voluptatem Quibusdam.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(5, 'posts', 'created', 5, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Quam et id sed laudantium dolor.\",\"intro\":\"Illum quibusdam voluptatem iste. Enim aspernatur voluptas eos in amet rerum.\",\"content\":\"Omnis esse harum ipsum suscipit dolores eius qui rem. Vel ratione consequatur vitae est harum aut. Minus quisquam porro deleniti eveniet cumque error adipisci ut.\\n\\nImpedit qui voluptatem suscipit dolores quo qui saepe. Itaque dolor ipsam quos dolores recusandae magnam. Quos quas quae qui. Quia expedita ea quo veniam voluptates aut et suscipit. Esse voluptas ut dicta harum recusandae.\\n\\nEius molestias voluptatem est ratione ipsum. Quia ullam et veniam officiis. Non maxime excepturi pariatur cum minus perferendis. Quam id id at ipsa.\\n\\nMagnam quae est explicabo ad accusantium. Impedit nesciunt sequi et quidem maxime tempore. Autem voluptatum voluptate possimus iste possimus asperiores.\\n\\nIpsam adipisci nemo id. Velit laboriosam quae dolorum sequi labore pariatur cupiditate.\\n\\nSapiente beatae inventore eos consectetur eius magnam. Quae reprehenderit et iste harum totam ea consequatur. Quae sed quos laudantium dolorum et culpa dolores. Magni doloribus voluptate autem.\",\"type\":\"News\",\"category_id\":3,\"category_name\":\"Hic et ut.\",\"is_featured\":\"Yes\",\"meta_title\":\"Quam Et Id Sed Laudantium Dolor.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(6, 'posts', 'created', 6, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Eum repellendus quia officia accusantium voluptate.\",\"intro\":\"Rem iste unde veniam dignissimos mollitia vitae doloribus sed. Dolor unde ipsam voluptates. Est culpa reiciendis molestias nemo. Quis officiis ex et vero in cumque odit ut.\",\"content\":\"Eaque velit qui sit saepe. Iusto aliquam omnis porro ab quo. Rerum eaque doloribus nobis aliquam culpa consequatur et facilis. Autem dolores veniam provident molestias architecto dicta.\\n\\nVeniam ea et error repellat autem ut voluptatem. Recusandae dicta totam est iusto. Cumque quas modi fuga voluptatem id. Excepturi optio voluptas consequuntur accusamus.\\n\\nCommodi officiis at corrupti nisi ea qui amet soluta. Repellendus aperiam aut et qui. Voluptas natus aut molestias sit est. Numquam ullam saepe error cumque voluptatibus tempore cumque.\\n\\nDolore magnam voluptatem eum excepturi laboriosam ut aut. Facilis non quidem veritatis labore qui voluptas iure. Nemo a occaecati adipisci nobis aliquam id.\\n\\nEt eos ea et. Qui in nam aut debitis. Beatae delectus reprehenderit sed non perspiciatis unde. Nam cum voluptatum animi.\",\"type\":\"Blog\",\"category_id\":3,\"category_name\":\"Hic et ut.\",\"is_featured\":\"No\",\"meta_title\":\"Eum Repellendus Quia Officia Accusantium Voluptate.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(7, 'posts', 'created', 7, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Velit rerum non animi et.\",\"intro\":\"Nihil perspiciatis itaque nisi. Eligendi incidunt beatae qui quae molestiae repellendus. Quas laborum et et eveniet autem.\",\"content\":\"Ullam odit expedita perferendis labore aut aperiam qui. Et at nulla ea laboriosam amet et. Debitis ut recusandae explicabo qui officiis. Aspernatur aut eligendi ex.\\n\\nEt voluptatem voluptas officiis est et expedita quo. Ipsa repellat assumenda sunt et fugit et. Id dolor porro aut pariatur. Provident qui et et minima. Ut aut sunt repudiandae fuga voluptatem numquam.\\n\\nQuos sunt excepturi velit nisi. Hic distinctio ratione velit dolorem magnam quisquam quo quasi. Deserunt suscipit sit quia illum. Voluptatem sint molestiae aspernatur autem eveniet.\\n\\nDeserunt cumque hic nemo laudantium et. Sapiente aut ut nulla vel sed.\\n\\nRerum quis quis non quisquam cumque. Placeat quaerat omnis voluptatem. Quae temporibus ut saepe. Dolor aspernatur asperiores sit autem reiciendis velit sit.\",\"type\":\"Article\",\"category_id\":1,\"category_name\":\"Nihil non.\",\"is_featured\":\"No\",\"meta_title\":\"Velit Rerum Non Animi Et.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(8, 'posts', 'created', 8, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Occaecati ea nihil cupiditate sit.\",\"intro\":\"Numquam praesentium quia dolor aut iste recusandae nisi. Natus tempore eaque quia iure est. Ab molestias eveniet culpa voluptatem explicabo et.\",\"content\":\"Tempora quasi minima aut adipisci numquam. Enim omnis fuga explicabo enim. Qui sunt placeat et impedit cupiditate. Reiciendis consequuntur dignissimos vitae et delectus aut omnis. Suscipit quos odit cumque qui.\\n\\nQui fugit veritatis tempore aut id velit sed maiores. Quas excepturi inventore quis consectetur voluptatum nemo ut dolores. Rerum quos eveniet quo sapiente. Iure consequatur et et.\\n\\nEt omnis labore voluptatem et eum. Earum itaque voluptas fuga assumenda sint. Qui molestiae aperiam nam deserunt. Nobis est maxime dolores impedit similique aliquid.\\n\\nVoluptatem et molestiae ut rem qui. Et quasi quae id fuga.\\n\\nNihil eaque id non unde vero blanditiis. Quod sunt blanditiis excepturi nesciunt cumque. Recusandae fuga sed illo eos saepe aut asperiores. Voluptates praesentium est numquam ut qui et.\",\"type\":\"News\",\"category_id\":3,\"category_name\":\"Hic et ut.\",\"is_featured\":\"No\",\"meta_title\":\"Occaecati Ea Nihil Cupiditate Sit.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(9, 'posts', 'created', 9, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Natus et a asperiores vel cupiditate laudantium praesentium.\",\"intro\":\"Qui ut aut dolor rerum commodi vel. Perferendis ea cumque odio vero. Est laborum consequatur est repellat. Neque sed et totam et.\",\"content\":\"Nobis unde atque autem beatae. Voluptatem et magni voluptas nihil. Voluptate ad reprehenderit quidem aspernatur natus autem.\\n\\nQuas unde suscipit est autem qui. Quae quod vero eveniet repellat. Error maiores fuga sit similique accusamus ut harum.\\n\\nUllam et corrupti et. Consequuntur hic provident harum voluptatem ab laborum ab quasi. Quisquam mollitia natus et quia.\\n\\nAut beatae nemo quam veritatis. Pariatur perferendis eligendi dolor omnis quibusdam maiores aut. Et dolor aliquid facilis qui sunt dolor. Minima asperiores aut rerum et consequatur consequatur qui.\\n\\nVitae ipsa vero ipsa. Magni fuga eaque corrupti facere est. Est esse dolorum et iste dolorum magnam itaque adipisci.\\n\\nAnimi quia explicabo necessitatibus veritatis. Distinctio et nisi magnam nesciunt sed repellat non. Modi sunt eius facilis exercitationem. Consequatur et non aut architecto fugiat dolore accusamus. Quo fugiat omnis eligendi sed.\\n\\nAtque quia et aut ut aut corporis dolor. Optio non iusto voluptas. Reiciendis at molestiae qui nobis iste. Et sequi distinctio animi officia porro libero et sint.\",\"type\":\"News\",\"category_id\":5,\"category_name\":\"Nostrum eaque.\",\"is_featured\":\"Yes\",\"meta_title\":\"Natus Et A Asperiores Vel Cupiditate Laudantium Praesentium.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(10, 'posts', 'created', 10, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Laudantium officiis ad numquam ut et.\",\"intro\":\"Voluptate eveniet officiis explicabo magnam praesentium. Sed eos recusandae sequi qui quia et neque. Distinctio ipsa in ratione sint eveniet quod qui unde. Dolores soluta voluptas velit similique sed sint commodi.\",\"content\":\"Iusto similique laborum qui aut iure sunt vel. Consequatur eveniet unde nesciunt qui sint quaerat consequatur.\\n\\nOmnis dignissimos illo qui sequi earum similique. Sunt harum sed qui cupiditate laudantium officia. Autem ducimus distinctio ea harum et ipsa eum. Vel et repudiandae vel est.\\n\\nExcepturi eum sequi provident. Error quis mollitia consequatur non voluptatem ipsum consequatur. Et vel dicta fuga quo. Voluptas ea magni qui eos quo ullam corrupti.\\n\\nAmet pariatur sit dolor quis omnis omnis. Consequuntur nemo vel fugit voluptas qui. Et aut voluptatem iure repellendus. Libero ipsum rerum et vel nihil suscipit.\\n\\nRerum facilis dignissimos dolorem sint ipsum veniam ipsam odit. Illo odit repudiandae ducimus qui vitae voluptas temporibus. Et aut amet et aperiam. Tenetur ut tempora rem adipisci in.\\n\\nEst cupiditate totam esse odio blanditiis. Unde qui non quo repellat. Aut quo quis maiores. Sunt ipsa suscipit reiciendis dolorem.\\n\\nPossimus ad in perspiciatis sint eos optio adipisci. Eos autem voluptatem odio alias. Quam illum sunt et.\",\"type\":\"Blog\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"Yes\",\"meta_title\":\"Laudantium Officiis Ad Numquam Ut Et.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(11, 'posts', 'created', 11, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"In voluptatum aperiam amet totam ut.\",\"intro\":\"Facilis in illum cumque voluptatem. Distinctio officiis provident magnam doloribus. Sed fugiat iusto iure amet id.\",\"content\":\"Sint ex ipsa placeat earum quibusdam non rerum laudantium. Aliquam possimus et doloribus molestiae ex eum mollitia. Earum commodi omnis dolore eaque quibusdam exercitationem. Inventore error est sit modi.\\n\\nHic deleniti ut nam sed et. Culpa vero est eos praesentium soluta eum saepe odio. Eius reprehenderit ut reiciendis iure.\\n\\nQuia exercitationem et enim eligendi. Sed velit quis minima ea. Repellat sunt inventore tenetur eum velit consequatur consequatur sapiente. Placeat provident nisi omnis et et.\\n\\nNon laudantium maxime accusantium exercitationem quia omnis praesentium assumenda. Et rerum quod cupiditate iure temporibus at. Sit distinctio recusandae necessitatibus.\\n\\nVel molestias perferendis repellendus cum sit quae. Laborum cupiditate esse qui non natus et. Dolorem quibusdam quis sed saepe. Ab sit cumque sed minus reiciendis voluptas.\\n\\nConsequuntur explicabo dolorem eum voluptas. Ex ex eum sapiente dicta. Autem id eos aut et cumque illo. Velit vero optio similique culpa suscipit minus aut.\\n\\nIpsam inventore dolores accusantium dolorem mollitia voluptatem ad. Molestiae accusamus omnis autem voluptatem hic. Qui est aut quo est.\",\"type\":\"News\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"Yes\",\"meta_title\":\"In Voluptatum Aperiam Amet Totam Ut.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(12, 'posts', 'created', 12, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Optio dicta aut sed dolore quos.\",\"intro\":\"Placeat ipsa ducimus dolor molestiae consequatur. Sunt et fugiat ea voluptas ut est. Enim ut est accusantium et et temporibus et rem. Recusandae ut itaque vel dolorem voluptatum eaque enim.\",\"content\":\"Vel vel minus quasi fugit eligendi veniam. Ad cupiditate aut ad. Ut ea placeat eos officia dolorum quibusdam est.\\n\\nNecessitatibus voluptatem est molestiae earum. Sed facere pariatur rerum. Aperiam cumque impedit quidem odit architecto doloremque ipsa debitis.\\n\\nEsse explicabo consequatur eum natus animi. Dolore et error ut et sint animi sit. Consequatur repellat est nesciunt est qui possimus. Adipisci voluptatibus dolorum magnam recusandae.\\n\\nQuibusdam hic veniam magni autem est voluptatem. Perferendis error porro repellat aut pariatur omnis. Vel itaque ut modi adipisci. Qui inventore rerum iste rem quia aut.\\n\\nReiciendis earum praesentium non consequatur sint nesciunt architecto. Inventore voluptatem aut libero vel. Quia fugiat alias eaque blanditiis.\\n\\nAutem dolorem aut explicabo officiis adipisci eos cum. Id fuga reiciendis laboriosam necessitatibus nemo et. Minus blanditiis enim sint quae.\\n\\nVoluptas ea est omnis doloribus nobis necessitatibus. Dolorem doloremque magnam consectetur ad aspernatur. Quo eum perferendis quam nemo eos ipsum.\",\"type\":\"Blog\",\"category_id\":5,\"category_name\":\"Nostrum eaque.\",\"is_featured\":\"No\",\"meta_title\":\"Optio Dicta Aut Sed Dolore Quos.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(13, 'posts', 'created', 13, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Assumenda illo quia eligendi deleniti cum distinctio.\",\"intro\":\"Sed inventore pariatur aperiam soluta expedita impedit. Provident molestias est esse velit deleniti sequi temporibus. Quaerat sunt eum consequatur est soluta impedit et asperiores.\",\"content\":\"Qui est pariatur sunt aut. Dolores odio nesciunt quod ducimus. Quas praesentium facere saepe pariatur dolorum.\\n\\nPerspiciatis consequatur dolor suscipit consequatur nostrum et voluptatem. Expedita quia ipsam ut laboriosam at quisquam ex. Eveniet quia et necessitatibus recusandae autem. Quo rem qui nobis porro veniam iure.\\n\\nSint quia voluptas voluptate neque corporis optio voluptatem. Sit aliquam odio occaecati nihil. Sapiente optio corporis eos laudantium.\\n\\nMolestias fugit unde tenetur exercitationem voluptatibus. Nisi dolor et recusandae non sed odio ut. In consectetur tempora non dolor laudantium. Ducimus enim voluptas vero quis.\\n\\nOfficia odit eos sit voluptatibus nostrum. Autem neque accusantium est sapiente aut placeat.\",\"type\":\"News\",\"category_id\":1,\"category_name\":\"Nihil non.\",\"is_featured\":\"Yes\",\"meta_title\":\"Assumenda Illo Quia Eligendi Deleniti Cum Distinctio.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(14, 'posts', 'created', 14, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Sint nesciunt libero velit dolorem vero rerum nemo.\",\"intro\":\"Placeat debitis repellat commodi quia qui. Est vero animi non asperiores quod pariatur mollitia. Doloribus sunt perspiciatis ea possimus dolor laboriosam.\",\"content\":\"Quibusdam adipisci ab dolores commodi quisquam nesciunt quo. Pariatur adipisci aspernatur rerum ut animi. Sed qui vel officiis provident similique omnis quidem. Fugit consequatur cumque debitis voluptate qui odit.\\n\\nQui necessitatibus eveniet ducimus nostrum perspiciatis qui. Ea hic omnis debitis ullam rerum porro ipsa sunt. Omnis ea quo modi.\\n\\nSint modi voluptatibus et. Saepe corrupti fugiat dicta. Nesciunt odio dolores tempore similique minima. Similique labore ad beatae vel ea ipsum velit. Dolor accusantium aliquam officiis excepturi.\\n\\nOccaecati non incidunt dolorum dolores rerum distinctio corrupti illum. Laudantium est facilis inventore voluptas. Suscipit dolorem ut sequi et molestiae eius quis. Error sint ipsa aut fugiat.\\n\\nConsequatur tempora officia consequatur rerum facilis id voluptates. Temporibus et quis odit harum doloremque eveniet. Autem quia neque perspiciatis. Autem magnam et et facere.\\n\\nEveniet facere voluptas fugit natus ipsum et. Itaque delectus reiciendis in nemo nostrum architecto. Corporis ad voluptates possimus. Voluptatem aut veniam dolor eos rerum.\",\"type\":\"News\",\"category_id\":2,\"category_name\":\"Beatae iusto.\",\"is_featured\":\"Yes\",\"meta_title\":\"Sint Nesciunt Libero Velit Dolorem Vero Rerum Nemo.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(15, 'posts', 'created', 15, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Itaque ullam eligendi nesciunt dicta quis nesciunt et.\",\"intro\":\"Sunt eos nulla labore nisi ipsam. Eaque alias nulla optio a. Error quos qui alias sapiente fugit enim modi inventore. Et veritatis molestiae debitis a vel eaque.\",\"content\":\"Autem et maxime voluptates. Quia exercitationem necessitatibus ut natus magnam rerum asperiores sint. Nihil est sint vel sed facilis molestias.\\n\\nQuis totam voluptatem qui. Eos architecto sunt maxime consequatur qui ipsa qui. Quis animi qui reiciendis sit magnam. Et voluptatem facilis vitae possimus omnis libero commodi.\\n\\nEst debitis delectus eligendi. Temporibus ullam maiores necessitatibus. Error iure voluptate suscipit qui voluptatem veritatis vero.\\n\\nVoluptas non beatae totam facere iure molestias tempora sapiente. Ab consequatur soluta pariatur aut quibusdam quia quibusdam. Rerum qui quia voluptas quod. Iste iure cupiditate ut iusto.\\n\\nMagni maxime ullam est incidunt qui mollitia perferendis voluptas. Aut aut nam ratione ipsam reiciendis. Non quis quas voluptatem est reprehenderit in at. Illum repellat eos numquam non ut hic esse.\\n\\nTempore laudantium enim optio sint odit iusto. Temporibus assumenda omnis voluptate beatae sed id. Nesciunt et aut voluptatem sit enim rerum quidem laborum.\",\"type\":\"Article\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"Yes\",\"meta_title\":\"Itaque Ullam Eligendi Nesciunt Dicta Quis Nesciunt Et.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(16, 'posts', 'created', 16, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Esse reprehenderit veniam numquam sunt a.\",\"intro\":\"Sequi asperiores est eveniet fugit dolore et nam eveniet. Et et sed rerum impedit. Distinctio dolores magni totam voluptas voluptatem rerum perferendis culpa. Est aut aut qui voluptates. Provident architecto ea similique maxime molestiae inventore vero aut.\",\"content\":\"Maxime molestiae et asperiores non dolore praesentium aut blanditiis. Id quibusdam quam nulla enim. Et unde rerum fugit tempore ut nihil cumque. Aut odio qui debitis officia quasi iusto cupiditate. Velit et quae ut sit fuga veritatis.\\n\\nSint est ut commodi consequatur distinctio sunt. Ducimus ratione libero dolore quis quos dolorem cumque. Incidunt odio quasi consequatur. Ex natus rem repudiandae odit velit.\\n\\nEnim consequatur sed vel consectetur expedita quia. Amet nulla consequuntur fugit aliquid quaerat facilis. Iste est accusamus asperiores totam explicabo magnam suscipit autem.\\n\\nSimilique fugiat in non quibusdam. Ut laborum ea aut consequatur. In iste corporis et optio et ipsam eos necessitatibus. Et et placeat perspiciatis dolor iste.\\n\\nTemporibus fugit sit maxime. Pariatur sapiente at reiciendis cumque alias enim. Voluptatem in repellendus aut non.\\n\\nSed veritatis architecto aut iusto. Accusamus totam et numquam ut debitis. Ut aut doloremque illo veritatis velit. Voluptatem ut repellat dolores voluptatem dolores non rerum.\",\"type\":\"Article\",\"category_id\":2,\"category_name\":\"Beatae iusto.\",\"is_featured\":\"Yes\",\"meta_title\":\"Esse Reprehenderit Veniam Numquam Sunt A.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(17, 'posts', 'created', 17, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"In aperiam tenetur nulla est esse.\",\"intro\":\"Placeat corrupti ducimus dignissimos alias soluta dolorem. In voluptatem tenetur tempora consequatur blanditiis occaecati nobis voluptas.\",\"content\":\"Ratione vel culpa est tempora. Ea odit illo omnis repudiandae aut quisquam nulla ab. Est facilis deleniti et dolorem soluta fugiat quis. Reiciendis et odio nulla voluptas possimus. Rerum error tempore fugit quam quo commodi.\\n\\nRatione voluptatem odio laborum ad repellendus soluta possimus. Ea modi accusantium est aut reiciendis. Autem nihil ut modi enim sint. Occaecati cum consequatur et incidunt praesentium nemo est. Et ratione commodi omnis impedit consequuntur quibusdam modi.\\n\\nVel excepturi a libero repudiandae culpa. Ducimus excepturi ut sed animi. Neque et qui ad qui architecto laudantium.\\n\\nAt animi nisi eligendi non quibusdam consequatur facere. Voluptatem tenetur magni sint dolores asperiores. Perferendis est vel et. Necessitatibus adipisci temporibus est sit minus sit et dolore. Consequatur doloremque enim et quae dolorum minus.\\n\\nEt nesciunt incidunt architecto enim voluptas culpa. Veritatis repellat consequatur modi eaque. Illo ut ut tempora error ut. Illum reprehenderit non asperiores accusantium earum itaque.\\n\\nEt omnis modi et rerum nemo. Maxime omnis rem est nobis.\\n\\nRerum inventore magni debitis dicta consequuntur. Commodi mollitia iste eum et tenetur consectetur. Sit saepe dolores minima expedita quis itaque est. Quasi asperiores expedita dolores sint fugiat. Corrupti tempore est neque repellendus fugiat non repudiandae fugiat.\",\"type\":\"Article\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"No\",\"meta_title\":\"In Aperiam Tenetur Nulla Est Esse.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(18, 'posts', 'created', 18, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Aliquid minus ducimus aliquam aspernatur qui est voluptatum.\",\"intro\":\"Ex ut corporis voluptate incidunt enim. Tempore possimus id quia repellat cum nulla temporibus. Qui pariatur quibusdam sed consectetur. Ipsum voluptas sit excepturi aut quis qui cum qui.\",\"content\":\"Ut ea dolorem hic quia provident quasi deserunt quo. Harum porro velit qui maxime odio. Porro velit deserunt repudiandae rem corporis ipsam.\\n\\nEst mollitia inventore reiciendis odio nam consequatur ullam. Nesciunt voluptas dicta quia nihil architecto expedita. Tenetur vel tenetur dolorem. Sed quasi voluptas asperiores aspernatur sit. Accusantium voluptatem delectus consequatur sunt.\\n\\nIn sint sunt dolorem id ipsam. Eius saepe doloremque distinctio in ex dignissimos. Et iusto velit reprehenderit fuga temporibus. Deleniti possimus ad reprehenderit numquam.\\n\\nEos eligendi officiis officiis nobis. Ullam quae fuga rerum earum nostrum quasi. Cumque quae accusantium est ut non ea. Et et voluptas repellendus accusantium.\\n\\nAut dolor quae est. Inventore nesciunt quia eaque. Consequatur exercitationem esse similique qui.\",\"type\":\"Blog\",\"category_id\":1,\"category_name\":\"Nihil non.\",\"is_featured\":\"Yes\",\"meta_title\":\"Aliquid Minus Ducimus Aliquam Aspernatur Qui Est Voluptatum.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(19, 'posts', 'created', 19, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Labore corrupti voluptatibus ipsum voluptatem sit.\",\"intro\":\"Voluptas quia earum sed. Illum quod nisi qui voluptatem eum aspernatur ut autem. Deserunt velit nulla quibusdam odit libero. Ipsam impedit eligendi est aliquid ut magni labore. Aut culpa omnis earum doloribus enim sit est.\",\"content\":\"Consequatur molestiae voluptates qui alias ut ut aspernatur. Porro eos consectetur quo delectus fugiat natus. Consequuntur nostrum exercitationem labore corrupti consequuntur. Recusandae non nemo consectetur totam et quos mollitia eius. At qui odio aut.\\n\\nAut repudiandae at eaque perferendis iste. Incidunt iure et possimus. Mollitia eum amet saepe soluta ullam.\\n\\nDebitis repellat id laudantium laboriosam. Aut ipsam distinctio ducimus aliquam. Qui quasi corrupti ipsum maiores est vero odio eum. Sit velit omnis ut qui cupiditate aut dolor. Ipsam animi esse dolore quia voluptatibus sit est.\\n\\nQuia voluptates illo adipisci voluptas et. Sed eaque voluptatem velit eaque est. Quisquam qui velit non doloribus. Omnis quo nihil odio vero accusamus ex voluptatem.\\n\\nVoluptatum necessitatibus omnis sint dolore sit. Et fuga fugiat omnis voluptate cum laudantium soluta. Quam quo omnis tenetur aut sequi beatae. Sit accusantium repudiandae provident totam. Sint recusandae aliquid illo animi eius.\\n\\nEt quia cupiditate cupiditate excepturi saepe est. Deserunt deserunt vero unde facilis. Ad perspiciatis vero aut. Suscipit ipsum quo atque tempore.\\n\\nDucimus voluptatem consequuntur suscipit quaerat aliquid soluta qui. Enim sapiente eius modi quia tempore. Tenetur est explicabo earum id. Quae vero sed officia non eveniet autem est sint.\",\"type\":\"Blog\",\"category_id\":2,\"category_name\":\"Beatae iusto.\",\"is_featured\":\"No\",\"meta_title\":\"Labore Corrupti Voluptatibus Ipsum Voluptatem Sit.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(20, 'posts', 'created', 20, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Est quam totam qui ab ut eos ut qui.\",\"intro\":\"Aut corrupti maxime est dolore similique voluptate officia. Dolorum voluptatibus nostrum voluptates quos dolores ullam non soluta. Quam est sunt nostrum ut esse molestiae asperiores.\",\"content\":\"Qui vitae ut rerum voluptatibus. Voluptatibus inventore reiciendis velit adipisci. Dolore aut tempora nihil consequuntur in. Id magni quis rerum quaerat optio.\\n\\nEst aliquam earum qui id rerum voluptas ipsam. Rerum ullam maxime omnis fugit iste nemo aut. Aut autem illum culpa iste aut sit.\\n\\nAutem ut doloribus ad sunt repudiandae praesentium recusandae. Saepe asperiores esse laborum pariatur et quasi. Ipsam quisquam quo modi ipsam. Quis consectetur eos rerum aut doloremque iste et.\\n\\nNeque non quia eum dolorem aspernatur odit ea. Omnis deleniti voluptatem excepturi omnis illum est. Fuga omnis et accusamus repudiandae. Est dolor soluta officiis deserunt ut dolore eum.\\n\\nAccusamus ullam magnam aut excepturi dignissimos. Facere nihil dolore aut animi. Ipsum eum qui reiciendis qui necessitatibus omnis commodi aut.\",\"type\":\"Article\",\"category_id\":2,\"category_name\":\"Beatae iusto.\",\"is_featured\":\"Yes\",\"meta_title\":\"Est Quam Totam Qui Ab Ut Eos Ut Qui.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(21, 'posts', 'created', 21, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Debitis omnis sint quis facilis.\",\"intro\":\"Animi doloribus rerum ex non aut. Magni iste sit inventore enim. Labore et cum est enim ut.\",\"content\":\"Culpa suscipit reiciendis qui cumque. Vero quis quis culpa pariatur odio esse maxime ab. Quas asperiores perferendis est nemo unde minus. Sit fuga porro sit sunt pariatur. Et rerum laborum nobis et.\\n\\nMolestiae velit reprehenderit optio vel necessitatibus. Sint in suscipit eum non dolores enim soluta. Veritatis distinctio non eaque non. Quia quas et et esse.\\n\\nMolestias aliquid delectus ea voluptatum nihil officia. Saepe rerum et vero id et est qui. Voluptas eveniet consectetur nisi aliquid fugit minima ut.\\n\\nFuga voluptas cumque facilis est laboriosam et. Tempore animi cum non asperiores velit. Voluptatem dolorem excepturi distinctio rerum dolor. Autem quos distinctio officiis unde vel sit.\\n\\nA voluptatum libero dicta. Sunt consequuntur maiores qui a sed non voluptas. Est ratione nobis repellat molestiae illum optio voluptatem occaecati.\",\"type\":\"Article\",\"category_id\":2,\"category_name\":\"Beatae iusto.\",\"is_featured\":\"Yes\",\"meta_title\":\"Debitis Omnis Sint Quis Facilis.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(22, 'posts', 'created', 22, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Id unde eos ullam ratione.\",\"intro\":\"Vero ab est incidunt accusamus tempore officia. Maiores incidunt dolorem aut rem voluptatem aut. Dolorem assumenda molestias recusandae molestiae omnis.\",\"content\":\"Blanditiis nihil accusantium nulla. Reprehenderit debitis modi recusandae aperiam veritatis. Quia possimus eum quas.\\n\\nEst eveniet autem et eveniet magni est. Eius possimus dolor cum veritatis. Eum nesciunt sit ut ad est deleniti blanditiis. Itaque est vel id ad.\\n\\nQuia est doloribus qui sunt sed. Qui sit ratione illo qui. Autem eaque maiores velit ipsam assumenda. Ut quo facilis impedit sapiente sunt.\\n\\nMagnam rerum dolorem consequatur fuga. Occaecati eligendi id et sunt eum. Illo doloribus fugiat autem quia.\\n\\nCumque sint possimus quidem eaque quo itaque. Commodi quia libero sit repellendus. Sed soluta tempora ad aut animi ipsum. Voluptatibus commodi saepe rem voluptatem libero saepe.\\n\\nItaque qui nihil rerum sunt. Quis omnis repellendus animi ipsum eum quam. Qui iure illum sequi et incidunt quia. Quaerat minima nam esse officiis quas.\",\"type\":\"Blog\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"Yes\",\"meta_title\":\"Id Unde Eos Ullam Ratione.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:50', '2019-09-25 09:03:50'),
(23, 'posts', 'created', 23, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Quia harum repellat et inventore eaque.\",\"intro\":\"Sed et adipisci autem nihil sint voluptatem quibusdam. Inventore et ducimus explicabo tenetur id. Soluta magni eum incidunt et et.\",\"content\":\"Similique illo ullam aut dignissimos. Dolore eum maiores quidem maiores assumenda. Facilis in culpa dolores doloremque amet necessitatibus.\\n\\nConsequatur officia temporibus aliquid quisquam perspiciatis. Nisi consequatur voluptatem ad voluptas eligendi. Voluptatem nam beatae earum vel amet qui. Molestiae ullam tempora esse officiis et vero qui est.\\n\\nAliquam unde debitis nulla cumque quas eaque. Voluptas itaque ut non iusto sed et officia. Illo vel officiis velit. Quia consequuntur praesentium cupiditate non consequatur consequatur.\\n\\nDebitis tempore sint nesciunt aliquid eaque. Sapiente magni sed molestiae. Voluptatem error non quaerat omnis sint tenetur dolores.\\n\\nNostrum incidunt repellat quam id debitis blanditiis aut. Est ipsam qui omnis consequuntur est quis assumenda. Minus sit voluptates rem iusto impedit autem. Illum neque tempore omnis omnis ex molestiae laudantium.\\n\\nTempora nobis nemo quam ut corporis sunt. Est consequuntur pariatur ullam. Blanditiis eum explicabo quisquam corrupti officia ut aliquam adipisci.\\n\\nLaboriosam ipsam nisi quo molestiae. Labore debitis et temporibus velit mollitia aut soluta quis. Rem laudantium qui aut corporis.\",\"type\":\"Article\",\"category_id\":5,\"category_name\":\"Nostrum eaque.\",\"is_featured\":\"No\",\"meta_title\":\"Quia Harum Repellat Et Inventore Eaque.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(24, 'posts', 'created', 24, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Accusamus eum nisi praesentium sed nobis aut.\",\"intro\":\"Perspiciatis eum aspernatur explicabo sunt at. Perferendis et harum cum dolorem modi placeat voluptas eum. Aperiam facere doloribus quibusdam sapiente aut delectus illum.\",\"content\":\"Nobis aliquid perferendis quia eos minima sequi. Culpa qui ipsa dolor numquam velit pariatur. Illo quidem praesentium debitis.\\n\\nMaiores voluptas culpa reiciendis et doloremque blanditiis dolore. Perspiciatis qui rerum sit quisquam aut eveniet. Sit sequi aut laboriosam suscipit vel.\\n\\nUt libero commodi molestiae voluptatem dolor et architecto qui. Odio sit corporis in enim delectus at.\\n\\nQuo quia accusantium quasi labore aspernatur optio. Saepe fuga quisquam excepturi et non. Sunt autem distinctio et nesciunt id. Nihil libero corporis quis inventore enim.\\n\\nAliquam qui quibusdam provident labore. Dolorum unde et eius praesentium.\",\"type\":\"News\",\"category_id\":4,\"category_name\":\"Officiis cum.\",\"is_featured\":\"No\",\"meta_title\":\"Accusamus Eum Nisi Praesentium Sed Nobis Aut.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(25, 'posts', 'created', 25, 'Modules\\Article\\Entities\\Post', 1, 'App\\Models\\User', '{\"attributes\":{\"name\":\"Nam asperiores inventore exercitationem.\",\"intro\":\"Nihil in ipsum et at. Quam nostrum et autem molestias quod commodi corrupti. Sint accusantium hic illo inventore iusto velit. Eius sit vitae iste eum et.\",\"content\":\"Placeat eos ex consequatur sequi voluptatem. Rerum iure impedit id sit. Delectus labore rerum quae qui. Sit et enim est porro qui dicta unde.\\n\\nPerspiciatis tenetur beatae doloribus repellendus cupiditate iste architecto inventore. Labore veritatis fugit non id. Illo est omnis veniam sit iusto possimus.\\n\\nOptio harum accusamus pariatur eligendi quo voluptates. Id rerum nihil et velit. Corrupti fugiat est ducimus maiores autem vel. Omnis dolorem autem aut saepe rerum delectus.\\n\\nRepellat fugiat dolor sit asperiores. Et earum rem odit fugit eaque ut similique. Nobis repudiandae molestias voluptatem animi possimus delectus sint.\\n\\nRem doloremque totam dicta aut. Odit reiciendis qui quo nostrum corrupti dolorum. In saepe enim repellat quae natus provident.\",\"type\":\"Blog\",\"category_id\":2,\"category_name\":\"Beatae iusto.\",\"is_featured\":\"No\",\"meta_title\":\"Nam Asperiores Inventore Exercitationem.\",\"meta_keywords\":\"\",\"meta_description\":null,\"published_at\":\"2019-09-25 15:03:50\",\"moderated_at\":null,\"moderated_by\":null,\"status\":1,\"created_by_alias\":null}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(26, 'comments', 'created', 1, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":4,\"user_id\":3,\"name\":\"Est officiis.\",\"comment\":\"<p>Similique minima architecto occaecati similique. Est perspiciatis sunt quis saepe et delectus maxime. Voluptatum eos dolorem ipsa aut laudantium est aut.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(27, 'comments', 'created', 2, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":10,\"user_id\":2,\"name\":\"Necessitatibus quis cupiditate.\",\"comment\":\"<p>Voluptatem minus eos excepturi ut possimus labore. Eum suscipit perferendis recusandae sapiente. Qui labore quia fugiat et et eos.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(28, 'comments', 'created', 3, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":3,\"user_id\":2,\"name\":\"Soluta ab.\",\"comment\":\"<p>Commodi in molestiae quis fugit repellat qui minus optio. Ea in eum velit odio provident est. In porro sed rem porro.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(29, 'comments', 'created', 4, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":19,\"user_id\":3,\"name\":\"Temporibus necessitatibus perspiciatis.\",\"comment\":\"<p>Dolore eum delectus libero libero. Est quae sapiente quia aut sequi hic. Exercitationem eaque voluptas illum provident alias excepturi deleniti.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(30, 'comments', 'created', 5, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":17,\"user_id\":4,\"name\":\"Est sunt.\",\"comment\":\"<p>A dolorum libero earum earum consequuntur natus fugit. Soluta eligendi nostrum officiis culpa non. Autem debitis facere dolores quisquam qui aut ut.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(31, 'comments', 'created', 6, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":18,\"user_id\":3,\"name\":\"Eum et officia.\",\"comment\":\"<p>Nostrum iusto iusto corporis aliquid repellendus nobis qui. Culpa esse ipsum ipsum voluptatem totam et. Voluptatem repellendus optio officiis enim rerum. Qui laborum culpa quos explicabo molestiae. Eligendi quod aperiam non qui aut dignissimos.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(32, 'comments', 'created', 7, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":1,\"user_id\":2,\"name\":\"Corrupti veritatis.\",\"comment\":\"<p>Praesentium voluptas quaerat quo ipsam ab. Illum dolores provident reprehenderit sint modi cupiditate. Voluptatibus animi quae omnis ea omnis.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(33, 'comments', 'created', 8, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":3,\"user_id\":2,\"name\":\"Doloribus sit voluptas.\",\"comment\":\"<p>Quis dolor odio et adipisci. Enim ut omnis earum.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(34, 'comments', 'created', 9, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":4,\"user_id\":1,\"name\":\"Amet et.\",\"comment\":\"<p>Ipsum delectus laboriosam rerum rerum. Nemo rerum error eveniet maxime dolores maxime quia. Numquam debitis dolore facilis ipsum occaecati blanditiis. Distinctio qui ullam quidem hic accusamus modi voluptatum laudantium.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(35, 'comments', 'created', 10, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":8,\"user_id\":1,\"name\":\"Voluptatibus quisquam.\",\"comment\":\"<p>Eius magni consectetur laboriosam voluptate et voluptatibus rerum. Sunt eos ea qui aliquid aut aliquid nemo.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(36, 'comments', 'created', 11, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":14,\"user_id\":3,\"name\":\"Vel ea.\",\"comment\":\"<p>Cum ex labore harum sit voluptate quo. Quidem qui culpa occaecati quia sit. Et quia recusandae ullam. Aut illo est facere provident.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(37, 'comments', 'created', 12, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":17,\"user_id\":2,\"name\":\"Esse rerum quo.\",\"comment\":\"<p>Neque corporis sit non voluptatum itaque temporibus. Doloremque eum soluta adipisci esse ducimus exercitationem. Et aut beatae a beatae odio.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(38, 'comments', 'created', 13, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":12,\"user_id\":3,\"name\":\"Quo recusandae est.\",\"comment\":\"<p>Earum accusantium non veniam ut. Soluta quos itaque quae architecto.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(39, 'comments', 'created', 14, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":19,\"user_id\":1,\"name\":\"Dolor animi.\",\"comment\":\"<p>Quis eaque velit corporis asperiores inventore delectus tenetur error. Pariatur quisquam ex et earum.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(40, 'comments', 'created', 15, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":14,\"user_id\":3,\"name\":\"Quas architecto.\",\"comment\":\"<p>Ipsum ducimus explicabo omnis aut architecto eius. Quibusdam sint aliquam quos qui unde mollitia vitae. Et architecto blanditiis deleniti est facilis.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(41, 'comments', 'created', 16, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":21,\"user_id\":4,\"name\":\"Soluta animi eum.\",\"comment\":\"<p>Soluta nulla inventore debitis sit a distinctio incidunt distinctio. Amet reprehenderit repellendus sed quibusdam quas necessitatibus. Quia sapiente et et minima ut molestiae amet repellat. Odit atque et ea ipsam qui.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(42, 'comments', 'created', 17, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":9,\"user_id\":3,\"name\":\"Rerum culpa vitae.\",\"comment\":\"<p>Aliquid dolores neque et culpa. Ad iure eaque cumque beatae suscipit velit numquam et. Fugiat eaque qui quos voluptate ipsa. Eos voluptatem omnis assumenda non dolor.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(43, 'comments', 'created', 18, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":1,\"user_id\":3,\"name\":\"Quibusdam ut repudiandae.\",\"comment\":\"<p>Dolores enim velit ut sed corrupti. Unde dolores aut repellat labore vero occaecati. In sed autem laboriosam magnam sed quia et.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(44, 'comments', 'created', 19, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":5,\"user_id\":2,\"name\":\"Laudantium eaque.\",\"comment\":\"<p>Fuga ut cupiditate aut. Quidem velit sed doloribus minima quod est est. Voluptas autem excepturi voluptatibus molestiae voluptate et et. Dicta id commodi nobis deserunt molestias.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(45, 'comments', 'created', 20, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":10,\"user_id\":4,\"name\":\"Est aut.\",\"comment\":\"<p>Earum quo animi praesentium esse voluptatem sunt. Est sed facilis sit fugiat mollitia molestiae non recusandae. Doloremque corrupti optio officia qui ducimus.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(46, 'comments', 'created', 21, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":25,\"user_id\":3,\"name\":\"Fugiat est id.\",\"comment\":\"<p>Ut non illum blanditiis voluptas reiciendis. Repudiandae deserunt aperiam aut. Quia hic labore aliquid.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(47, 'comments', 'created', 22, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":23,\"user_id\":4,\"name\":\"Aspernatur commodi vitae.\",\"comment\":\"<p>Deserunt aperiam nobis ratione harum nemo. Facilis voluptatem dolores consectetur modi numquam. Voluptate quis aspernatur explicabo beatae iure. Sit excepturi iusto quia voluptatibus.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(48, 'comments', 'created', 23, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":1,\"user_id\":1,\"name\":\"Nesciunt voluptatem.\",\"comment\":\"<p>Iste necessitatibus est voluptatem beatae. Dolorem ut et omnis voluptatem. Harum omnis odit possimus. Laudantium ea repudiandae ea dolor blanditiis.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(49, 'comments', 'created', 24, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":25,\"user_id\":3,\"name\":\"Eligendi aut.\",\"comment\":\"<p>Et velit autem repudiandae cumque rem. Culpa consequatur delectus minus libero quidem a earum. Quas sapiente quia quis possimus. Id sed modi soluta. Soluta odio consectetur neque corrupti numquam et.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(50, 'comments', 'created', 25, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":22,\"user_id\":4,\"name\":\"Quo sint.\",\"comment\":\"<p>Sit id labore dolor impedit adipisci. Iusto at iusto minima sunt. Et et enim occaecati sed.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(51, 'comments', 'created', 26, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":18,\"user_id\":1,\"name\":\"Dolores minima nisi.\",\"comment\":\"<p>Eveniet omnis qui animi optio dolor amet quasi. Sunt non perferendis minima ut. Praesentium suscipit dolorem rerum aliquam qui.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(52, 'comments', 'created', 27, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":10,\"user_id\":1,\"name\":\"Pariatur nihil.\",\"comment\":\"<p>Perferendis quaerat iste eligendi ipsam consequatur similique eaque. Explicabo a ab ipsum eos minima voluptatem vel. Sit adipisci sit dolore et aliquam repudiandae hic. Ab fugit iusto qui similique ut libero totam. Nulla animi ut deserunt saepe quia aut.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(53, 'comments', 'created', 28, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":15,\"user_id\":4,\"name\":\"Vel beatae.\",\"comment\":\"<p>Vitae sunt harum aperiam aliquam eligendi pariatur et. Voluptas expedita rem qui nihil veniam id. Perferendis dolor laudantium sed vel consequatur. Aliquid iusto nihil molestias nemo aut rerum.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(54, 'comments', 'created', 29, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":11,\"user_id\":4,\"name\":\"Facilis ipsum sed.\",\"comment\":\"<p>Rerum neque dolorum qui corporis est est. Possimus tempore explicabo ipsam doloremque. Dolorem repellat eos repudiandae.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(55, 'comments', 'created', 30, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":20,\"user_id\":1,\"name\":\"Voluptas delectus.\",\"comment\":\"<p>Rerum doloribus beatae velit soluta qui sed. Ipsa facere dolorum et vel cum. Ab ab rerum tempore aut. Accusamus aut illum eos ducimus laboriosam.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(56, 'comments', 'created', 31, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":19,\"user_id\":4,\"name\":\"Culpa est in.\",\"comment\":\"<p>Et veritatis itaque voluptatem esse. Qui tempora rerum officiis officiis excepturi quae eum. Reprehenderit quibusdam repellat cum aliquid.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(57, 'comments', 'created', 32, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":12,\"user_id\":3,\"name\":\"Aut quisquam hic.\",\"comment\":\"<p>Sed accusamus sunt ut aut natus. Omnis minus voluptatem sunt enim est voluptate odio.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(58, 'comments', 'created', 33, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":2,\"user_id\":1,\"name\":\"Dolor nulla.\",\"comment\":\"<p>Eos quibusdam quos reprehenderit eos ducimus dolor. Quo dolor sunt laborum aut numquam. Cumque quos laudantium tenetur. Possimus autem beatae eaque et libero molestiae non.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(59, 'comments', 'created', 34, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":11,\"user_id\":3,\"name\":\"Recusandae consequuntur.\",\"comment\":\"<p>Beatae voluptas aut placeat autem sunt. Sequi veritatis ab doloribus sapiente nemo autem ut. Qui architecto est provident ad ullam.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(60, 'comments', 'created', 35, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":14,\"user_id\":2,\"name\":\"Eos architecto deleniti.\",\"comment\":\"<p>Qui reiciendis quia ut id consectetur. Vitae eius illo vel omnis. Est impedit ut quod mollitia distinctio beatae. Debitis in officia explicabo error non cupiditate possimus.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(61, 'comments', 'created', 36, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":24,\"user_id\":2,\"name\":\"Nihil corrupti.\",\"comment\":\"<p>Praesentium error eaque quo consequuntur ut ut. Et eaque quo maxime quidem dignissimos deleniti modi corporis. Optio quas occaecati nemo ipsa quos.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(62, 'comments', 'created', 37, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":11,\"user_id\":1,\"name\":\"Temporibus est provident.\",\"comment\":\"<p>Qui autem numquam fugiat voluptatem. Dolores officiis tempore debitis error. Eius error asperiores exercitationem aperiam numquam est ut. Totam et id incidunt delectus dolor blanditiis sint.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(63, 'comments', 'created', 38, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":18,\"user_id\":3,\"name\":\"Ut dolorem.\",\"comment\":\"<p>Quam ducimus illum corporis ut placeat. Recusandae est aut sed quaerat. Voluptatem voluptatem et aliquid a.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(64, 'comments', 'created', 39, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":20,\"user_id\":3,\"name\":\"Ullam non laboriosam.\",\"comment\":\"<p>Quo quidem perferendis modi sit mollitia. Et et dolor sit omnis fuga. Nobis repellendus consequatur debitis corporis. Ratione eos dolor sunt et quaerat quia consequatur.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(65, 'comments', 'created', 40, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":13,\"user_id\":3,\"name\":\"Quo perferendis.\",\"comment\":\"<p>Rerum ipsa consectetur ea. Ipsa et eos rem voluptatum voluptatem praesentium autem.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(66, 'comments', 'created', 41, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":6,\"user_id\":2,\"name\":\"Labore est.\",\"comment\":\"<p>Provident quo accusantium beatae voluptatibus voluptatem. Rerum ducimus eum modi vel id inventore repudiandae quod. Officiis beatae consequatur fuga dicta perspiciatis.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(67, 'comments', 'created', 42, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":12,\"user_id\":4,\"name\":\"Blanditiis maiores saepe.\",\"comment\":\"<p>Consequatur hic enim illum et quis. Et necessitatibus a dolores enim repellendus sint itaque. Et eum et ratione autem consequatur pariatur numquam aut. Voluptatem maiores sed id officiis vel dolor excepturi.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(68, 'comments', 'created', 43, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":20,\"user_id\":3,\"name\":\"Voluptates laborum error.\",\"comment\":\"<p>Repudiandae molestiae dolores dicta quo dolor. Deserunt non veniam hic officiis consequatur beatae velit. Vel itaque eius sint quo et earum eos. Quo dolores quis consequatur commodi qui laborum eum non. Magni et ipsa quas quod aliquid quis maiores voluptatem.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(69, 'comments', 'created', 44, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":13,\"user_id\":1,\"name\":\"Quam sit.\",\"comment\":\"<p>Nulla sit optio et magnam necessitatibus. Laudantium ut aut et. Consequatur sint officia ut est. Non officiis optio dignissimos laboriosam soluta aut.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(70, 'comments', 'created', 45, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":22,\"user_id\":4,\"name\":\"Nisi totam iste.\",\"comment\":\"<p>Explicabo perferendis nostrum voluptatum magni minus ut dicta. Aliquid inventore in quidem nostrum dolorem omnis. Iusto voluptatem aut aspernatur officiis incidunt.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(71, 'comments', 'created', 46, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":3,\"user_id\":3,\"name\":\"Eum quo.\",\"comment\":\"<p>Vitae laborum dicta est blanditiis consequatur officia. Quibusdam omnis alias blanditiis aut. Asperiores aliquid magni placeat pariatur velit autem voluptas. Cum quae in ipsa quidem.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":1}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(72, 'comments', 'created', 47, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":2,\"user_id\":1,\"name\":\"Maiores et sunt.\",\"comment\":\"<p>Sunt facilis asperiores doloremque quibusdam debitis aut aut. Eum ipsa voluptas ut quos commodi commodi qui. Reprehenderit saepe quia ea recusandae ducimus voluptatibus quibusdam voluptatem.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(73, 'comments', 'created', 48, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":19,\"user_id\":4,\"name\":\"Adipisci omnis.\",\"comment\":\"<p>Nihil a iste atque voluptates et sint. Voluptas consequuntur inventore unde nostrum.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(74, 'comments', 'created', 49, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":19,\"user_id\":4,\"name\":\"Iure nulla.\",\"comment\":\"<p>Eum qui magnam error rem repudiandae pariatur quia. Omnis recusandae et quisquam incidunt alias ut. Fugit earum dicta dolorum sint aut. Voluptatem autem ut impedit dolorem saepe.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":1,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51'),
(75, 'comments', 'created', 50, 'Modules\\Article\\Entities\\Comment', 1, 'App\\Models\\User', '{\"attributes\":{\"post_id\":11,\"user_id\":1,\"name\":\"Ut consequuntur recusandae.\",\"comment\":\"<p>Ducimus et excepturi praesentium accusantium quia. Ipsam consequatur aut fugiat ex reiciendis ab. Quis dicta commodi placeat vero et enim vitae.<\\/p>\",\"published_at\":\"2019-09-25 15:03:51\",\"moderated_at\":\"2019-09-25 15:03:51\",\"moderated_by\":2,\"status\":0}}', '2019-09-25 09:03:51', '2019-09-25 09:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `activity_types`
--

CREATE TABLE `activity_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_types`
--

INSERT INTO `activity_types` (`id`, `name`, `name_bn`, `publication_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Seminar', 'Seminar', 1, 1, 6, '2019-12-05 05:33:58', '2020-01-02 10:01:33'),
(3, 'Scholarship Awards', 'বৃত্তিপ্রদান', 1, 8, 8, '2020-02-22 18:29:18', '2020-02-22 18:29:33'),
(4, 'Executive Committee Meetings', 'সাধারন সভা', 1, 8, 8, '2020-02-24 00:37:30', '2020-02-24 00:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `advisory_committees`
--

CREATE TABLE `advisory_committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `order` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advisory_committees`
--

INSERT INTO `advisory_committees` (`id`, `member_id`, `order`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(11, 60, NULL, 8, 0, '2020-01-30 18:58:03', '2020-01-30 18:58:03'),
(10, 61, NULL, 8, 0, '2020-01-30 18:57:41', '2020-01-30 18:57:41'),
(12, 32, NULL, 8, 0, '2020-01-30 18:58:28', '2020-01-30 18:58:28'),
(13, 216, NULL, 8, 0, '2020-02-22 19:22:57', '2020-02-22 19:22:57'),
(14, 227, NULL, 8, 0, '2020-02-27 01:09:06', '2020-02-27 01:09:06'),
(15, 226, NULL, 8, 0, '2020-02-27 01:09:41', '2020-02-27 01:09:41'),
(16, 229, NULL, 8, 0, '2020-02-27 01:10:24', '2020-02-27 01:10:24'),
(17, 228, NULL, 8, 0, '2020-02-27 01:10:41', '2020-02-27 01:10:41'),
(18, 231, NULL, 8, 0, '2020-02-27 01:11:59', '2020-02-27 01:11:59'),
(19, 197, NULL, 8, 0, '2020-02-27 01:21:00', '2020-02-27 01:21:00'),
(20, 275, NULL, 8, 0, '2020-02-28 00:44:14', '2020-02-28 00:44:14'),
(21, 279, NULL, 8, 0, '2020-02-28 00:45:00', '2020-02-28 00:45:00'),
(22, 278, NULL, 8, 0, '2020-02-28 00:45:20', '2020-02-28 00:45:20'),
(23, 276, NULL, 8, 0, '2020-02-28 00:46:02', '2020-02-28 00:46:02'),
(24, 277, NULL, 8, 0, '2020-02-28 00:47:12', '2020-02-28 00:47:12'),
(25, 268, NULL, 8, 0, '2020-02-28 01:06:22', '2020-02-28 01:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `order`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nihil non.', 'nihil-non.', 'Alias quas modi facilis laborum in omnis ducimus. Hic occaecati tempore distinctio dolorem quis adipisci. Ut occaecati ut possimus autem aut aut. Sequi doloribus quia odio magnam perspiciatis commodi maxime.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(2, 'Beatae iusto.', 'beatae-iusto.', 'Autem vitae impedit delectus veritatis culpa praesentium. Qui unde quod aut tempora. Consequatur ea tenetur nesciunt sint dolorum ut. Totam et eos recusandae autem.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(3, 'Hic et ut.', 'hic-et-ut.', 'Et aut aut quis labore eos sint dolorem. Aut eum ut provident saepe velit omnis et. Est iusto necessitatibus dolores beatae aut. Et nihil maiores libero.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(4, 'Officiis cum.', 'officiis-cum.', 'Et quis quasi optio quidem. Itaque iure beatae sit quisquam dolores consequatur illum. Ipsa at tempora quod rerum eaque iste ut. Ut ratione et ab beatae.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(5, 'Nostrum eaque.', 'nostrum-eaque.', 'Dignissimos voluptas eveniet eum. Ut consectetur dolor dolor. Vero nemo itaque perspiciatis assumenda deleniti id deleniti. Aut culpa aut veniam fugit pariatur dolorum non.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `post_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `moderated_by` int(10) UNSIGNED DEFAULT NULL,
  `moderated_at` datetime DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `slug`, `comment`, `post_id`, `post_name`, `user_id`, `user_name`, `order`, `status`, `moderated_by`, `moderated_at`, `published_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Est officiis.', 'est-officiis.', '<p>Similique minima architecto occaecati similique. Est perspiciatis sunt quis saepe et delectus maxime. Voluptatum eos dolorem ipsa aut laudantium est aut.</p>', 4, 'Alias voluptas ea voluptatem quibusdam.', 3, 'Manager', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(2, 'Necessitatibus quis cupiditate.', 'necessitatibus-quis-cupiditate.', '<p>Voluptatem minus eos excepturi ut possimus labore. Eum suscipit perferendis recusandae sapiente. Qui labore quia fugiat et et eos.</p>', 10, 'Laudantium officiis ad numquam ut et.', 2, 'Admin Istrator', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(3, 'Soluta ab.', 'soluta-ab.', '<p>Commodi in molestiae quis fugit repellat qui minus optio. Ea in eum velit odio provident est. In porro sed rem porro.</p>', 3, 'Omnis maiores expedita et est.', 2, 'Admin Istrator', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(4, 'Temporibus necessitatibus perspiciatis.', 'temporibus-necessitatibus-perspiciatis.', '<p>Dolore eum delectus libero libero. Est quae sapiente quia aut sequi hic. Exercitationem eaque voluptas illum provident alias excepturi deleniti.</p>', 19, 'Labore corrupti voluptatibus ipsum voluptatem sit.', 3, 'Manager', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(5, 'Est sunt.', 'est-sunt.', '<p>A dolorum libero earum earum consequuntur natus fugit. Soluta eligendi nostrum officiis culpa non. Autem debitis facere dolores quisquam qui aut ut.</p>', 17, 'In aperiam tenetur nulla est esse.', 4, 'Executive User', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(6, 'Eum et officia.', 'eum-et-officia.', '<p>Nostrum iusto iusto corporis aliquid repellendus nobis qui. Culpa esse ipsum ipsum voluptatem totam et. Voluptatem repellendus optio officiis enim rerum. Qui laborum culpa quos explicabo molestiae. Eligendi quod aperiam non qui aut dignissimos.</p>', 18, 'Aliquid minus ducimus aliquam aspernatur qui est voluptatum.', 3, 'Manager', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(7, 'Corrupti veritatis.', 'corrupti-veritatis.', '<p>Praesentium voluptas quaerat quo ipsam ab. Illum dolores provident reprehenderit sint modi cupiditate. Voluptatibus animi quae omnis ea omnis.</p>', 1, 'Dolore quia ut sed fuga molestiae.', 2, 'Admin Istrator', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(8, 'Doloribus sit voluptas.', 'doloribus-sit-voluptas.', '<p>Quis dolor odio et adipisci. Enim ut omnis earum.</p>', 3, 'Omnis maiores expedita et est.', 2, 'Admin Istrator', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(9, 'Amet et.', 'amet-et.', '<p>Ipsum delectus laboriosam rerum rerum. Nemo rerum error eveniet maxime dolores maxime quia. Numquam debitis dolore facilis ipsum occaecati blanditiis. Distinctio qui ullam quidem hic accusamus modi voluptatum laudantium.</p>', 4, 'Alias voluptas ea voluptatem quibusdam.', 1, 'Super Admin', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(10, 'Voluptatibus quisquam.', 'voluptatibus-quisquam.', '<p>Eius magni consectetur laboriosam voluptate et voluptatibus rerum. Sunt eos ea qui aliquid aut aliquid nemo.</p>', 8, 'Occaecati ea nihil cupiditate sit.', 1, 'Super Admin', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(11, 'Vel ea.', 'vel-ea.', '<p>Cum ex labore harum sit voluptate quo. Quidem qui culpa occaecati quia sit. Et quia recusandae ullam. Aut illo est facere provident.</p>', 14, 'Sint nesciunt libero velit dolorem vero rerum nemo.', 3, 'Manager', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(12, 'Esse rerum quo.', 'esse-rerum-quo.', '<p>Neque corporis sit non voluptatum itaque temporibus. Doloremque eum soluta adipisci esse ducimus exercitationem. Et aut beatae a beatae odio.</p>', 17, 'In aperiam tenetur nulla est esse.', 2, 'Admin Istrator', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(13, 'Quo recusandae est.', 'quo-recusandae-est.', '<p>Earum accusantium non veniam ut. Soluta quos itaque quae architecto.</p>', 12, 'Optio dicta aut sed dolore quos.', 3, 'Manager', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(14, 'Dolor animi.', 'dolor-animi.', '<p>Quis eaque velit corporis asperiores inventore delectus tenetur error. Pariatur quisquam ex et earum.</p>', 19, 'Labore corrupti voluptatibus ipsum voluptatem sit.', 1, 'Super Admin', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(15, 'Quas architecto.', 'quas-architecto.', '<p>Ipsum ducimus explicabo omnis aut architecto eius. Quibusdam sint aliquam quos qui unde mollitia vitae. Et architecto blanditiis deleniti est facilis.</p>', 14, 'Sint nesciunt libero velit dolorem vero rerum nemo.', 3, 'Manager', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(16, 'Soluta animi eum.', 'soluta-animi-eum.', '<p>Soluta nulla inventore debitis sit a distinctio incidunt distinctio. Amet reprehenderit repellendus sed quibusdam quas necessitatibus. Quia sapiente et et minima ut molestiae amet repellat. Odit atque et ea ipsam qui.</p>', 21, 'Debitis omnis sint quis facilis.', 4, 'Executive User', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(17, 'Rerum culpa vitae.', 'rerum-culpa-vitae.', '<p>Aliquid dolores neque et culpa. Ad iure eaque cumque beatae suscipit velit numquam et. Fugiat eaque qui quos voluptate ipsa. Eos voluptatem omnis assumenda non dolor.</p>', 9, 'Natus et a asperiores vel cupiditate laudantium praesentium.', 3, 'Manager', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(18, 'Quibusdam ut repudiandae.', 'quibusdam-ut-repudiandae.', '<p>Dolores enim velit ut sed corrupti. Unde dolores aut repellat labore vero occaecati. In sed autem laboriosam magnam sed quia et.</p>', 1, 'Dolore quia ut sed fuga molestiae.', 3, 'Manager', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(19, 'Laudantium eaque.', 'laudantium-eaque.', '<p>Fuga ut cupiditate aut. Quidem velit sed doloribus minima quod est est. Voluptas autem excepturi voluptatibus molestiae voluptate et et. Dicta id commodi nobis deserunt molestias.</p>', 5, 'Quam et id sed laudantium dolor.', 2, 'Admin Istrator', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(20, 'Est aut.', 'est-aut.', '<p>Earum quo animi praesentium esse voluptatem sunt. Est sed facilis sit fugiat mollitia molestiae non recusandae. Doloremque corrupti optio officia qui ducimus.</p>', 10, 'Laudantium officiis ad numquam ut et.', 4, 'Executive User', NULL, 0, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(21, 'Fugiat est id.', 'fugiat-est-id.', '<p>Ut non illum blanditiis voluptas reiciendis. Repudiandae deserunt aperiam aut. Quia hic labore aliquid.</p>', 25, 'Nam asperiores inventore exercitationem.', 3, 'Manager', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(22, 'Aspernatur commodi vitae.', 'aspernatur-commodi-vitae.', '<p>Deserunt aperiam nobis ratione harum nemo. Facilis voluptatem dolores consectetur modi numquam. Voluptate quis aspernatur explicabo beatae iure. Sit excepturi iusto quia voluptatibus.</p>', 23, 'Quia harum repellat et inventore eaque.', 4, 'Executive User', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(23, 'Nesciunt voluptatem.', 'nesciunt-voluptatem.', '<p>Iste necessitatibus est voluptatem beatae. Dolorem ut et omnis voluptatem. Harum omnis odit possimus. Laudantium ea repudiandae ea dolor blanditiis.</p>', 1, 'Dolore quia ut sed fuga molestiae.', 1, 'Super Admin', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(24, 'Eligendi aut.', 'eligendi-aut.', '<p>Et velit autem repudiandae cumque rem. Culpa consequatur delectus minus libero quidem a earum. Quas sapiente quia quis possimus. Id sed modi soluta. Soluta odio consectetur neque corrupti numquam et.</p>', 25, 'Nam asperiores inventore exercitationem.', 3, 'Manager', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(25, 'Quo sint.', 'quo-sint.', '<p>Sit id labore dolor impedit adipisci. Iusto at iusto minima sunt. Et et enim occaecati sed.</p>', 22, 'Id unde eos ullam ratione.', 4, 'Executive User', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(26, 'Dolores minima nisi.', 'dolores-minima-nisi.', '<p>Eveniet omnis qui animi optio dolor amet quasi. Sunt non perferendis minima ut. Praesentium suscipit dolorem rerum aliquam qui.</p>', 18, 'Aliquid minus ducimus aliquam aspernatur qui est voluptatum.', 1, 'Super Admin', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(27, 'Pariatur nihil.', 'pariatur-nihil.', '<p>Perferendis quaerat iste eligendi ipsam consequatur similique eaque. Explicabo a ab ipsum eos minima voluptatem vel. Sit adipisci sit dolore et aliquam repudiandae hic. Ab fugit iusto qui similique ut libero totam. Nulla animi ut deserunt saepe quia aut.</p>', 10, 'Laudantium officiis ad numquam ut et.', 1, 'Super Admin', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(28, 'Vel beatae.', 'vel-beatae.', '<p>Vitae sunt harum aperiam aliquam eligendi pariatur et. Voluptas expedita rem qui nihil veniam id. Perferendis dolor laudantium sed vel consequatur. Aliquid iusto nihil molestias nemo aut rerum.</p>', 15, 'Itaque ullam eligendi nesciunt dicta quis nesciunt et.', 4, 'Executive User', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(29, 'Facilis ipsum sed.', 'facilis-ipsum-sed.', '<p>Rerum neque dolorum qui corporis est est. Possimus tempore explicabo ipsam doloremque. Dolorem repellat eos repudiandae.</p>', 11, 'In voluptatum aperiam amet totam ut.', 4, 'Executive User', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(30, 'Voluptas delectus.', 'voluptas-delectus.', '<p>Rerum doloribus beatae velit soluta qui sed. Ipsa facere dolorum et vel cum. Ab ab rerum tempore aut. Accusamus aut illum eos ducimus laboriosam.</p>', 20, 'Est quam totam qui ab ut eos ut qui.', 1, 'Super Admin', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(31, 'Culpa est in.', 'culpa-est-in.', '<p>Et veritatis itaque voluptatem esse. Qui tempora rerum officiis officiis excepturi quae eum. Reprehenderit quibusdam repellat cum aliquid.</p>', 19, 'Labore corrupti voluptatibus ipsum voluptatem sit.', 4, 'Executive User', NULL, 0, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(32, 'Aut quisquam hic.', 'aut-quisquam-hic.', '<p>Sed accusamus sunt ut aut natus. Omnis minus voluptatem sunt enim est voluptate odio.</p>', 12, 'Optio dicta aut sed dolore quos.', 3, 'Manager', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(33, 'Dolor nulla.', 'dolor-nulla.', '<p>Eos quibusdam quos reprehenderit eos ducimus dolor. Quo dolor sunt laborum aut numquam. Cumque quos laudantium tenetur. Possimus autem beatae eaque et libero molestiae non.</p>', 2, 'Est veritatis animi accusantium non non.', 1, 'Super Admin', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(34, 'Recusandae consequuntur.', 'recusandae-consequuntur.', '<p>Beatae voluptas aut placeat autem sunt. Sequi veritatis ab doloribus sapiente nemo autem ut. Qui architecto est provident ad ullam.</p>', 11, 'In voluptatum aperiam amet totam ut.', 3, 'Manager', NULL, 0, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(35, 'Eos architecto deleniti.', 'eos-architecto-deleniti.', '<p>Qui reiciendis quia ut id consectetur. Vitae eius illo vel omnis. Est impedit ut quod mollitia distinctio beatae. Debitis in officia explicabo error non cupiditate possimus.</p>', 14, 'Sint nesciunt libero velit dolorem vero rerum nemo.', 2, 'Admin Istrator', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(36, 'Nihil corrupti.', 'nihil-corrupti.', '<p>Praesentium error eaque quo consequuntur ut ut. Et eaque quo maxime quidem dignissimos deleniti modi corporis. Optio quas occaecati nemo ipsa quos.</p>', 24, 'Accusamus eum nisi praesentium sed nobis aut.', 2, 'Admin Istrator', NULL, 1, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(37, 'Temporibus est provident.', 'temporibus-est-provident.', '<p>Qui autem numquam fugiat voluptatem. Dolores officiis tempore debitis error. Eius error asperiores exercitationem aperiam numquam est ut. Totam et id incidunt delectus dolor blanditiis sint.</p>', 11, 'In voluptatum aperiam amet totam ut.', 1, 'Super Admin', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(38, 'Ut dolorem.', 'ut-dolorem.', '<p>Quam ducimus illum corporis ut placeat. Recusandae est aut sed quaerat. Voluptatem voluptatem et aliquid a.</p>', 18, 'Aliquid minus ducimus aliquam aspernatur qui est voluptatum.', 3, 'Manager', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(39, 'Ullam non laboriosam.', 'ullam-non-laboriosam.', '<p>Quo quidem perferendis modi sit mollitia. Et et dolor sit omnis fuga. Nobis repellendus consequatur debitis corporis. Ratione eos dolor sunt et quaerat quia consequatur.</p>', 20, 'Est quam totam qui ab ut eos ut qui.', 3, 'Manager', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(40, 'Quo perferendis.', 'quo-perferendis.', '<p>Rerum ipsa consectetur ea. Ipsa et eos rem voluptatum voluptatem praesentium autem.</p>', 13, 'Assumenda illo quia eligendi deleniti cum distinctio.', 3, 'Manager', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(41, 'Labore est.', 'labore-est.', '<p>Provident quo accusantium beatae voluptatibus voluptatem. Rerum ducimus eum modi vel id inventore repudiandae quod. Officiis beatae consequatur fuga dicta perspiciatis.</p>', 6, 'Eum repellendus quia officia accusantium voluptate.', 2, 'Admin Istrator', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(42, 'Blanditiis maiores saepe.', 'blanditiis-maiores-saepe.', '<p>Consequatur hic enim illum et quis. Et necessitatibus a dolores enim repellendus sint itaque. Et eum et ratione autem consequatur pariatur numquam aut. Voluptatem maiores sed id officiis vel dolor excepturi.</p>', 12, 'Optio dicta aut sed dolore quos.', 4, 'Executive User', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(43, 'Voluptates laborum error.', 'voluptates-laborum-error.', '<p>Repudiandae molestiae dolores dicta quo dolor. Deserunt non veniam hic officiis consequatur beatae velit. Vel itaque eius sint quo et earum eos. Quo dolores quis consequatur commodi qui laborum eum non. Magni et ipsa quas quod aliquid quis maiores voluptatem.</p>', 20, 'Est quam totam qui ab ut eos ut qui.', 3, 'Manager', NULL, 0, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(44, 'Quam sit.', 'quam-sit.', '<p>Nulla sit optio et magnam necessitatibus. Laudantium ut aut et. Consequatur sint officia ut est. Non officiis optio dignissimos laboriosam soluta aut.</p>', 13, 'Assumenda illo quia eligendi deleniti cum distinctio.', 1, 'Super Admin', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(45, 'Nisi totam iste.', 'nisi-totam-iste.', '<p>Explicabo perferendis nostrum voluptatum magni minus ut dicta. Aliquid inventore in quidem nostrum dolorem omnis. Iusto voluptatem aut aspernatur officiis incidunt.</p>', 22, 'Id unde eos ullam ratione.', 4, 'Executive User', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(46, 'Eum quo.', 'eum-quo.', '<p>Vitae laborum dicta est blanditiis consequatur officia. Quibusdam omnis alias blanditiis aut. Asperiores aliquid magni placeat pariatur velit autem voluptas. Cum quae in ipsa quidem.</p>', 3, 'Omnis maiores expedita et est.', 3, 'Manager', NULL, 1, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(47, 'Maiores et sunt.', 'maiores-et-sunt.', '<p>Sunt facilis asperiores doloremque quibusdam debitis aut aut. Eum ipsa voluptas ut quos commodi commodi qui. Reprehenderit saepe quia ea recusandae ducimus voluptatibus quibusdam voluptatem.</p>', 2, 'Est veritatis animi accusantium non non.', 1, 'Super Admin', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(48, 'Adipisci omnis.', 'adipisci-omnis.', '<p>Nihil a iste atque voluptates et sint. Voluptas consequuntur inventore unde nostrum.</p>', 19, 'Labore corrupti voluptatibus ipsum voluptatem sit.', 4, 'Executive User', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(49, 'Iure nulla.', 'iure-nulla.', '<p>Eum qui magnam error rem repudiandae pariatur quia. Omnis recusandae et quisquam incidunt alias ut. Fugit earum dicta dolorum sint aut. Voluptatem autem ut impedit dolorem saepe.</p>', 19, 'Labore corrupti voluptatibus ipsum voluptatem sit.', 4, 'Executive User', NULL, 0, 1, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL),
(50, 'Ut consequuntur recusandae.', 'ut-consequuntur-recusandae.', '<p>Ducimus et excepturi praesentium accusantium quia. Ipsam consequatur aut fugiat ex reiciendis ab. Quis dicta commodi placeat vero et enim vitae.</p>', 11, 'In voluptatum aperiam amet totam ut.', 1, 'Super Admin', NULL, 0, 2, '2019-09-25 15:03:51', '2019-09-25 09:03:51', 1, 1, NULL, '2019-09-25 09:03:51', '2019-09-25 09:03:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `order` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`id`, `type_id`, `member_id`, `order`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(22, 6, 37, NULL, 8, 0, '2020-01-16 20:54:30', '2020-01-16 20:54:30'),
(20, 6, 39, NULL, 8, 0, '2020-01-16 20:52:50', '2020-01-16 20:52:50'),
(19, 3, 28, NULL, 8, 0, '2020-01-06 00:53:00', '2020-01-06 00:53:00'),
(18, 6, 30, NULL, 8, 0, '2020-01-06 00:52:33', '2020-01-06 00:52:33'),
(16, 6, 26, NULL, 8, 0, '2020-01-05 18:46:16', '2020-01-05 18:46:16'),
(17, 1, 29, NULL, 8, 0, '2020-01-06 00:52:08', '2020-01-06 00:52:08'),
(23, 6, 36, NULL, 8, 0, '2020-01-16 20:54:58', '2020-01-16 20:54:58'),
(24, 6, 35, NULL, 8, 0, '2020-01-16 20:55:15', '2020-01-16 20:55:15'),
(25, 6, 34, NULL, 8, 0, '2020-01-16 20:55:36', '2020-01-16 20:55:36'),
(43, 2, 33, NULL, 8, 0, '2020-01-26 19:17:21', '2020-01-26 19:17:21'),
(27, 6, 40, NULL, 8, 0, '2020-01-16 20:56:30', '2020-01-16 20:56:30'),
(28, 6, 41, NULL, 8, 0, '2020-01-16 20:56:46', '2020-01-16 20:56:46'),
(29, 6, 43, NULL, 8, 0, '2020-01-16 20:57:12', '2020-01-16 20:57:12'),
(30, 6, 44, NULL, 8, 0, '2020-01-16 20:57:31', '2020-01-16 20:57:31'),
(31, 6, 45, NULL, 8, 0, '2020-01-16 20:57:49', '2020-01-16 20:57:49'),
(32, 6, 47, NULL, 8, 0, '2020-01-16 20:58:07', '2020-01-16 20:58:07'),
(34, 6, 49, NULL, 8, 0, '2020-01-16 20:58:42', '2020-01-16 20:58:42'),
(35, 6, 50, NULL, 8, 0, '2020-01-16 20:59:01', '2020-01-16 20:59:01'),
(36, 6, 51, NULL, 8, 0, '2020-01-16 20:59:14', '2020-01-16 20:59:14'),
(37, 6, 52, NULL, 8, 0, '2020-01-16 20:59:28', '2020-01-16 20:59:28'),
(38, 2, 53, NULL, 8, 0, '2020-01-16 20:59:44', '2020-01-16 20:59:44'),
(39, 6, 54, NULL, 8, 0, '2020-01-16 20:59:55', '2020-01-16 20:59:55'),
(40, 6, 57, NULL, 8, 0, '2020-01-16 21:00:15', '2020-01-16 21:00:15'),
(41, 5, 79, NULL, 8, 0, '2020-01-26 18:59:16', '2020-01-26 18:59:16'),
(42, 2, 68, NULL, 8, 0, '2020-01-26 19:04:34', '2020-01-26 19:04:34'),
(44, 6, 59, NULL, 8, 0, '2020-01-26 19:27:24', '2020-01-26 19:27:24'),
(45, 6, 66, NULL, 8, 0, '2020-01-26 19:27:56', '2020-01-26 19:27:56'),
(49, 4, 81, NULL, 8, 0, '2020-01-26 20:09:48', '2020-01-26 20:09:48'),
(47, 6, 78, NULL, 8, 0, '2020-01-26 19:29:14', '2020-01-26 19:29:14'),
(48, 6, 80, NULL, 8, 0, '2020-01-26 19:29:33', '2020-01-26 19:29:33'),
(50, 6, 82, NULL, 8, 0, '2020-01-27 18:24:34', '2020-01-27 18:24:34'),
(51, 6, 83, NULL, 8, 0, '2020-01-27 18:25:03', '2020-01-27 18:25:03'),
(52, 6, 84, NULL, 8, 0, '2020-01-27 18:28:10', '2020-01-27 18:28:10'),
(53, 6, 85, NULL, 8, 0, '2020-01-27 18:28:32', '2020-01-27 18:28:32'),
(54, 6, 86, NULL, 8, 0, '2020-01-27 18:28:56', '2020-01-27 18:28:56'),
(55, 6, 87, NULL, 8, 0, '2020-01-27 18:29:19', '2020-01-27 18:29:19'),
(56, 6, 88, NULL, 8, 0, '2020-01-27 18:29:39', '2020-01-27 18:29:39'),
(57, 6, 89, NULL, 8, 0, '2020-01-27 18:29:57', '2020-01-27 18:29:57'),
(58, 6, 90, NULL, 8, 0, '2020-01-27 18:30:22', '2020-01-27 18:30:22'),
(59, 6, 91, NULL, 8, 0, '2020-01-27 18:30:36', '2020-01-27 18:30:36'),
(60, 6, 92, NULL, 8, 0, '2020-01-27 18:30:55', '2020-01-27 18:30:55'),
(61, 6, 93, NULL, 8, 0, '2020-01-27 18:31:22', '2020-01-27 18:31:22'),
(62, 6, 94, NULL, 8, 0, '2020-01-27 18:31:40', '2020-01-27 18:31:40'),
(63, 6, 95, NULL, 8, 0, '2020-01-27 18:31:59', '2020-01-27 18:31:59'),
(64, 6, 97, NULL, 8, 0, '2020-01-28 17:19:17', '2020-01-28 17:19:17'),
(65, 4, 62, NULL, 8, 0, '2020-01-28 21:31:33', '2020-01-28 21:31:33'),
(66, 6, 98, NULL, 8, 0, '2020-01-28 22:51:43', '2020-01-28 22:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `committee_types`
--

CREATE TABLE `committee_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `committee_types`
--

INSERT INTO `committee_types` (`id`, `name`, `publication_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'President', 1, 1, 1, '2019-12-07 10:38:38', '2019-12-07 10:38:49'),
(2, 'Vice President', 1, 1, 1, '2019-12-07 10:39:13', '2019-12-07 10:44:02'),
(3, 'General Secretary', 1, 1, 7, '2019-12-07 10:39:31', '2019-12-17 11:12:45'),
(4, 'Joint Secretary', 1, 1, 1, '2019-12-07 10:39:53', '2019-12-07 10:44:24'),
(5, 'Treasurer', 1, 1, 1, '2019-12-07 10:40:09', '2019-12-07 10:44:37'),
(6, 'Executive Members', 1, 1, 1, '2019-12-07 10:42:19', '2019-12-08 04:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `geo_location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `mobile`, `phone`, `email`, `mail`, `place`, `location`, `geo_location`, `publication_status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '+ 880 1718 822065', '+ 880 1718 822065', 'ahsanphy@ru.ac.bd', 'paaru@ru.ac.bd', 'Department of Physics', 'Satyendra Nath Bose Academic Building, Rajshahi University', 'https://goo.gl/maps/VmUL2P8B2kANVFkx5', 1, 1, 8, NULL, '2019-12-09 10:24:44', '2020-03-15 22:46:14', NULL),
(2, '01684279998', '01684279998', 'super@admin.com', 'sanwar.desktopit@gmail.com', 'University of Rajshahiuy', '1st Science Building, Rajshahi University', NULL, 0, 7, 7, NULL, '2019-12-17 10:43:04', '2019-12-17 10:43:21', '2019-12-17 10:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd', NULL, NULL),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd', NULL, NULL),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd', NULL, NULL),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL, 'www.rangamati.gov.bd', NULL, NULL),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd', NULL, NULL),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd', NULL, NULL),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd', NULL, NULL),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd', NULL, NULL),
(9, 1, 'Coxsbazar', 'কক্সবাজার', NULL, NULL, 'www.coxsbazar.gov.bd', NULL, NULL),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd', NULL, NULL),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd', NULL, NULL),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd', NULL, NULL),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd', NULL, NULL),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd', NULL, NULL),
(15, 2, 'Rajshahi', 'রাজশাহী', NULL, NULL, 'www.rajshahi.gov.bd', NULL, NULL),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd', NULL, NULL),
(17, 2, 'Joypurhat', 'জয়পুরহাট', NULL, NULL, 'www.joypurhat.gov.bd', NULL, NULL),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd', NULL, NULL),
(19, 2, 'Naogaon', 'নওগাঁ', NULL, NULL, 'www.naogaon.gov.bd', NULL, NULL),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd', NULL, NULL),
(21, 3, 'Satkhira', 'সাতক্ষীরা', NULL, NULL, 'www.satkhira.gov.bd', NULL, NULL),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd', NULL, NULL),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd', NULL, NULL),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd', NULL, NULL),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd', NULL, NULL),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd', NULL, NULL),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd', NULL, NULL),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd', NULL, NULL),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd', NULL, NULL),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', NULL, NULL, 'www.jhalakathi.gov.bd', NULL, NULL),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd', NULL, NULL),
(32, 4, 'Pirojpur', 'পিরোজপুর', NULL, NULL, 'www.pirojpur.gov.bd', NULL, NULL),
(33, 4, 'Barisal', 'বরিশাল', NULL, NULL, 'www.barisal.gov.bd', NULL, NULL),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd', NULL, NULL),
(35, 4, 'Barguna', 'বরগুনা', NULL, NULL, 'www.barguna.gov.bd', NULL, NULL),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd', NULL, NULL),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd', NULL, NULL),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd', NULL, NULL),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd', NULL, NULL),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd', NULL, NULL),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd', NULL, NULL),
(42, 6, 'Shariatpur', 'শরীয়তপুর', NULL, NULL, 'www.shariatpur.gov.bd', NULL, NULL),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd', NULL, NULL),
(44, 6, 'Tangail', 'টাঙ্গাইল', NULL, NULL, 'www.tangail.gov.bd', NULL, NULL),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd', NULL, NULL),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL, 'www.manikganj.gov.bd', NULL, NULL),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd', NULL, NULL),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', NULL, NULL, 'www.munshiganj.gov.bd', NULL, NULL),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd', NULL, NULL),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd', NULL, NULL),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd', NULL, NULL),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd', NULL, NULL),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd', NULL, NULL),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd', NULL, NULL),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL, 'www.lalmonirhat.gov.bd', NULL, NULL),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd', NULL, NULL),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd', NULL, NULL),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd', NULL, NULL),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd', NULL, NULL),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd', NULL, NULL),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd', NULL, NULL),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', NULL, NULL, 'www.mymensingh.gov.bd', NULL, NULL),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd', NULL, NULL),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Chattagram', 'চট্টগ্রাম', 'www.chittagongdiv.gov.bd', NULL, NULL),
(2, 'Rajshahi', 'রাজশাহী', 'www.rajshahidiv.gov.bd', NULL, NULL),
(3, 'Khulna', 'খুলনা', 'www.khulnadiv.gov.bd', NULL, NULL),
(4, 'Barisal', 'বরিশাল', 'www.barisaldiv.gov.bd', NULL, NULL),
(5, 'Sylhet', 'সিলেট', 'www.sylhetdiv.gov.bd', NULL, NULL),
(6, 'Dhaka', 'ঢাকা', 'www.dhakadiv.gov.bd', NULL, NULL),
(7, 'Rangpur', 'রংপুর', 'www.rangpurdiv.gov.bd', NULL, NULL),
(8, 'Mymensingh', 'ময়মনসিংহ', 'www.mymensinghdiv.gov.bd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_time` timestamp NULL DEFAULT NULL,
  `ending_time` timestamp NULL DEFAULT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `ticket_book` tinyint(3) UNSIGNED DEFAULT 0,
  `ticket_money` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date_time`, `description`, `starting_time`, `ending_time`, `place`, `location`, `image`, `publication_status`, `ticket_book`, `ticket_money`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '2nd Alumni Reunion, PAARU', '2022-11-15 02:00:00', '<p>2nd Alumni Reunion will be held on -- -- --.</p>', '2019-12-19 18:00:00', '2019-12-19 18:00:00', 'Department of Physics, University of Rajshahi', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14537.309589762008!2d88.6383399!3d24.3699116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd4a06f437e70d2e8!2s1st%20Science%20Building%2C%20Rajshahi%20University!5e0!3m2!1sen!2sbd!4v1582359573163!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '1582357558.JPG', 1, NULL, 1000, 6, 8, NULL, '2019-12-21 07:47:21', '2022-08-17 21:46:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_payments`
--

CREATE TABLE `event_payments` (
  `id` bigint(20) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `present_affiliation` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passing_type` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `paaru_type` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `child_number_10` int(11) DEFAULT 0,
  `child_10_total_amount` float DEFAULT NULL,
  `child_number_5_to_10` int(11) DEFAULT NULL,
  `child_5_to_10_total_amount` float DEFAULT NULL,
  `child_number_5` int(11) DEFAULT NULL,
  `child_5_total_amount` float DEFAULT NULL,
  `existing_life_fee` int(11) DEFAULT NULL,
  `annual_member_fee` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `payment_type` tinyint(4) DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_payments`
--

INSERT INTO `event_payments` (`id`, `event_id`, `name`, `father_name`, `present_affiliation`, `address`, `phone`, `email`, `passing_type`, `year`, `session`, `paaru_type`, `spouse_name`, `child_number_10`, `child_10_total_amount`, `child_number_5_to_10`, `child_5_to_10_total_amount`, `child_number_5`, `child_5_total_amount`, `existing_life_fee`, `annual_member_fee`, `total`, `payment_type`, `status`) VALUES
(1, NULL, 'Md. Ashaduzzaman Faruque', 'Habibur Rahman', 'Dhaka', 'Sabdin Vogobotipur', NULL, 'ashaduzzaman5698@gmail.com', 'bsc', '2001', NULL, 'new_annual', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0),
(2, NULL, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', NULL, 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', NULL, 2, 2000, 3, 1500, 0, 0, 0, 0, 6500, NULL, 0),
(3, NULL, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', NULL, 'ashaduzzaman5698@gmail.com', 'bsc', '2019', NULL, 'existing_life', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(4, NULL, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', NULL, 'ashaduzzaman5698@gmail.com', 'bsc', '2001', NULL, 'existing_life', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 4000, NULL, 0),
(5, NULL, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', NULL, 'ashaduzzaman5698@gmail.com', 'bsc', '2020', NULL, 'existing_life', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 4000, NULL, 0),
(6, NULL, 'frwerfd', 'Siraj oddin', 'Dhaka', 'Muriala ruhigao sultanpur bochagonj', NULL, 'ashaduzzaman5698@gmail.com', 'bsc', '2001', NULL, 'existing_life', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 4000, NULL, 0),
(7, NULL, 'Md. Ashaduzzaman Faruque', 'Habibur Rahman', 'Dhaka', 'Sabdin Vogobotipur', NULL, 'ashaduzzaman5698@gmail.com', 'bsc', '2001', NULL, 'existing_life', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 4000, NULL, 0),
(8, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(9, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(10, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(11, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(12, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(13, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 3000, NULL, 0),
(14, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 3000, NULL, 0),
(15, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 3000, NULL, 0),
(16, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(17, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(18, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(19, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 3000, NULL, 0),
(20, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', NULL, 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 3000, NULL, 0),
(21, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', '+8801684208275', 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', 'Hena', 0, 0, 0, 0, 0, 0, 3000, 0, 1500, NULL, 0),
(22, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', '+8801684208275', 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', 'Hena', 0, 0, 0, 0, 0, 0, 3000, 0, 1500, NULL, 0),
(23, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', '+8801684208275', 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', 'Hena', 0, 0, 0, 0, 0, 0, 3000, 0, 3000, NULL, 0),
(24, NULL, 'Habibur Rahman Haib', 'Habibur Rahman', 'Dhaka', 't/23 Nurjahan Road Mohammodpur', '+8801684208275', 'mhrhabib39@gmail.com', 'msc', '2001', NULL, 'new_life', 'Hena', 0, 0, 0, 0, 0, 0, 3000, 0, 7000, NULL, 0),
(25, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(26, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(27, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(28, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(29, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(30, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(31, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(32, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(33, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(34, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(35, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(36, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(37, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(38, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(39, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(40, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(41, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(42, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(43, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(44, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(45, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(46, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(47, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(48, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(49, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(50, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(51, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(52, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(53, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(54, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(55, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(56, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(57, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(58, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(59, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(60, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(61, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(62, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(63, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(64, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(65, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(66, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(67, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(68, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(69, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(70, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, NULL, 0),
(71, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, 0, 0),
(72, 3, 'Md. Ashaduzzaman Faruque', 'Siraj oddin', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', '2017', NULL, 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 3000, 1, 1),
(73, 3, 'Md. Ashaduzzaman Faruque', 'Habibur Rahman', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'bsc', NULL, NULL, 'existing_life', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 2500, 0, 0),
(74, 3, 'Habibur Rahman', 'Siraj oddin', 'Dhaka', 'Muriala ruhigao sultanpur bochagonj', '01774050226', 'mhrhabib39@gmail.com', 'bsc', '2017', NULL, 'new_life', 'Hena', 1, 1000, 2, 1000, 0, 0, 3000, 0, 8000, 0, 0),
(75, 3, 'Habibur Rahman', 'Siraj oddin', 'Dhaka', 'Muriala ruhigao sultanpur bochagonj', '01774050226', 'mhrhabib39@gmail.com', 'bsc', '2017', NULL, 'new_life', 'Hena', 1, 1000, 2, 1000, 0, 0, 3000, 0, 8000, 0, 0),
(76, 3, 'Md. Ashaduzzaman Faruque', 'Md. Bozzlar Rahman', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'existing', NULL, '2001', 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 200, 0, 0),
(77, 3, 'Md. Ashaduzzaman Faruque', 'Md. Bozzlar Rahman', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'existing', NULL, '2001', 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 200, 0, 0),
(78, 3, 'Md. Ashaduzzaman Faruque', 'Md. Bozzlar Rahman', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'existing', NULL, '2001', 'existing_life', 'Hena', 0, 0, 0, 0, 0, 0, 0, 0, 200, 0, 0),
(79, 3, 'Habibur Rahman', 'Md. Bozzlar Rahman', 'Dhaka', 'Muriala ruhigao sultanpur bochagonj', '01774050226', 'ashaduzzaman5698@gmail.com', 'existing', NULL, '250', 'new_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 200, 0, 0),
(80, 3, 'Md. Ashaduzzaman Faruque', 'Habibur Rahman', 'Dhaka', 'Sabdin Vogobotipur', '01648583443', 'ashaduzzaman5698@gmail.com', 'existing', NULL, '2001', 'existing_life', NULL, 0, 0, 0, 0, 0, 0, 3000, 0, 200, 0, 0),
(81, 3, 'Habibur Rahman', 'Habibur Rahman', 'Dhaka', 'Muriala ruhigao sultanpur bochagonj', '01774050226', 'ashaduzzaman5698@gmail.com', 'existing', NULL, '250', 'new_annual', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 200, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `future_planes`
--

CREATE TABLE `future_planes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_name`, `cover_img`, `description`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 'Reminiscences', '1582196874.png', '<p>Reminiscence at Kazi Nazrul Islam Auditorium on 22 March 2018</p>', 1, 1, '2019-12-09 05:09:47', '2020-02-20 23:07:54'),
(6, 'Cultural Program', '1582523039.jpg', 'Cultural evening on 22 March 2018 at 1st reunion of PAARU.', 1, 8, '2020-02-24 17:43:59', '2020-02-24 17:43:59'),
(4, 'Rally', '1582196341.png', '<p>Rally</p>', 1, 1, '2019-12-11 06:49:50', '2020-02-20 22:59:01'),
(5, 'Inauguration Ceremony', '1582196107.png', '<p>Diamond Jubilee and 1st Alumni Reunion</p>', 1, 7, '2019-12-17 06:28:35', '2020-02-20 22:55:07'),
(8, 'Lunch&Dinner', '1584536306.jpg', '<p>Moment for Lunch and Dinner at the 1st reunion on 22 March 2018&nbsp;</p>', 1, 8, '2020-03-18 23:58:26', '2020-03-19 00:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `image_path`, `created_at`, `updated_at`) VALUES
(169, 6, '1582525097.2.jpg', '2020-02-24 18:18:17', '2020-02-24 18:18:17'),
(3, 3, '1575868208.1575781150.jpg', '2019-12-09 05:10:08', '2019-12-09 05:10:08'),
(166, 4, '1582287224.51.jpg', '2020-02-22 00:13:44', '2020-02-22 00:13:44'),
(167, 6, '1582525096.3.jpg', '2020-02-24 18:18:16', '2020-02-24 18:18:16'),
(96, 3, '1582266604.4.jpg', '2020-02-21 18:30:04', '2020-02-21 18:30:04'),
(95, 3, '1582266604.2.jpg', '2020-02-21 18:30:04', '2020-02-21 18:30:04'),
(94, 3, '1582266604.1.jpg', '2020-02-21 18:30:04', '2020-02-21 18:30:04'),
(20, 5, '1582257392.1.jpg', '2020-02-21 15:56:32', '2020-02-21 15:56:32'),
(45, 4, '1582263681.3.jpg', '2020-02-21 17:41:21', '2020-02-21 17:41:21'),
(44, 4, '1582263681.1.jpg', '2020-02-21 17:41:21', '2020-02-21 17:41:21'),
(21, 5, '1582257392.6.jpg', '2020-02-21 15:56:32', '2020-02-21 15:56:32'),
(22, 5, '1582257392.3.jpg', '2020-02-21 15:56:32', '2020-02-21 15:56:32'),
(23, 5, '1582257393.7.jpg', '2020-02-21 15:56:33', '2020-02-21 15:56:33'),
(24, 5, '1582257393.4.jpg', '2020-02-21 15:56:33', '2020-02-21 15:56:33'),
(25, 5, '1582257393.5.jpg', '2020-02-21 15:56:33', '2020-02-21 15:56:33'),
(26, 5, '1582257393.8.jpg', '2020-02-21 15:56:33', '2020-02-21 15:56:33'),
(27, 5, '1582257393.9.jpg', '2020-02-21 15:56:33', '2020-02-21 15:56:33'),
(28, 5, '1582257393.2.jpg', '2020-02-21 15:56:33', '2020-02-21 15:56:33'),
(29, 5, '1582257393.10.jpg', '2020-02-21 15:56:33', '2020-02-21 15:56:33'),
(30, 5, '1582257393.13.jpg', '2020-02-21 15:56:33', '2020-02-21 15:56:33'),
(31, 5, '1582257394.14.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(32, 5, '1582257394.12.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(33, 5, '1582257394.11.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(34, 5, '1582257394.16.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(35, 5, '1582257394.15.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(36, 5, '1582257394.17.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(37, 5, '1582257394.18.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(38, 5, '1582257394.19.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(39, 5, '1582257394.21.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(40, 5, '1582257394.20.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(41, 5, '1582257394.22.jpg', '2020-02-21 15:56:34', '2020-02-21 15:56:34'),
(42, 5, '1582257395.23.jpg', '2020-02-21 15:56:35', '2020-02-21 15:56:35'),
(43, 5, '1582257395.24.jpg', '2020-02-21 15:56:35', '2020-02-21 15:56:35'),
(46, 4, '1582263681.2.jpg', '2020-02-21 17:41:21', '2020-02-21 17:41:21'),
(47, 4, '1582263681.4.jpg', '2020-02-21 17:41:21', '2020-02-21 17:41:21'),
(48, 4, '1582263681.5.jpg', '2020-02-21 17:41:21', '2020-02-21 17:41:21'),
(49, 4, '1582263682.8.jpg', '2020-02-21 17:41:22', '2020-02-21 17:41:22'),
(50, 4, '1582263682.7.jpg', '2020-02-21 17:41:22', '2020-02-21 17:41:22'),
(51, 4, '1582263682.6.jpg', '2020-02-21 17:41:22', '2020-02-21 17:41:22'),
(52, 4, '1582263682.9.jpg', '2020-02-21 17:41:22', '2020-02-21 17:41:22'),
(53, 4, '1582263682.10.jpg', '2020-02-21 17:41:22', '2020-02-21 17:41:22'),
(54, 4, '1582263682.12.jpg', '2020-02-21 17:41:22', '2020-02-21 17:41:22'),
(55, 4, '1582263682.11.jpg', '2020-02-21 17:41:22', '2020-02-21 17:41:22'),
(56, 4, '1582263682.13.jpg', '2020-02-21 17:41:22', '2020-02-21 17:41:22'),
(57, 4, '1582263683.15.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(58, 4, '1582263683.16.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(59, 4, '1582263683.17.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(60, 4, '1582263683.14.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(61, 4, '1582263683.18.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(62, 4, '1582263683.19.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(63, 4, '1582263683.20.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(64, 4, '1582263683.21.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(65, 4, '1582263683.22.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(66, 4, '1582263683.23.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(67, 4, '1582263683.24.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(68, 4, '1582263683.26.jpg', '2020-02-21 17:41:23', '2020-02-21 17:41:23'),
(69, 4, '1582263684.25.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(70, 4, '1582263684.27.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(71, 4, '1582263684.28.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(72, 4, '1582263684.29.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(73, 4, '1582263684.30.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(74, 4, '1582263684.31.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(75, 4, '1582263684.32.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(76, 4, '1582263684.33.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(77, 4, '1582263684.34.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(78, 4, '1582263684.35.jpg', '2020-02-21 17:41:24', '2020-02-21 17:41:24'),
(79, 4, '1582263685.36.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(80, 4, '1582263685.37.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(81, 4, '1582263685.38.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(82, 4, '1582263685.39.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(83, 4, '1582263685.40.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(84, 4, '1582263685.41.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(85, 4, '1582263685.42.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(86, 4, '1582263685.43.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(87, 4, '1582263685.44.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(88, 4, '1582263685.45.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(89, 4, '1582263685.46.jpg', '2020-02-21 17:41:25', '2020-02-21 17:41:25'),
(90, 4, '1582263686.48.jpg', '2020-02-21 17:41:26', '2020-02-21 17:41:26'),
(91, 4, '1582263686.47.jpg', '2020-02-21 17:41:26', '2020-02-21 17:41:26'),
(92, 4, '1582263686.49.jpg', '2020-02-21 17:41:26', '2020-02-21 17:41:26'),
(93, 4, '1582263686.50.jpg', '2020-02-21 17:41:26', '2020-02-21 17:41:26'),
(168, 6, '1582525097.5.jpg', '2020-02-24 18:18:17', '2020-02-24 18:18:17'),
(98, 3, '1582266604.5.jpg', '2020-02-21 18:30:04', '2020-02-21 18:30:04'),
(99, 3, '1582266605.6.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(100, 3, '1582266605.7.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(101, 3, '1582266605.11.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(102, 3, '1582266605.9.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(103, 3, '1582266605.10.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(104, 3, '1582266605.8.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(105, 3, '1582266605.13.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(106, 3, '1582266605.14.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(107, 3, '1582266605.15.jpg', '2020-02-21 18:30:05', '2020-02-21 18:30:05'),
(108, 3, '1582266606.16.jpg', '2020-02-21 18:30:06', '2020-02-21 18:30:06'),
(109, 3, '1582266606.17.jpg', '2020-02-21 18:30:06', '2020-02-21 18:30:06'),
(110, 3, '1582266606.12.jpg', '2020-02-21 18:30:06', '2020-02-21 18:30:06'),
(111, 3, '1582266606.18.jpg', '2020-02-21 18:30:06', '2020-02-21 18:30:06'),
(112, 3, '1582266606.19.jpg', '2020-02-21 18:30:06', '2020-02-21 18:30:06'),
(113, 3, '1582266606.20.jpg', '2020-02-21 18:30:06', '2020-02-21 18:30:06'),
(114, 3, '1582266606.21.jpg', '2020-02-21 18:30:06', '2020-02-21 18:30:06'),
(115, 3, '1582266606.22.jpg', '2020-02-21 18:30:06', '2020-02-21 18:30:06'),
(116, 3, '1582266607.24.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(117, 3, '1582266607.25.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(118, 3, '1582266607.26.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(119, 3, '1582266607.27.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(120, 3, '1582266607.23.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(121, 3, '1582266607.28.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(122, 3, '1582266607.29.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(123, 3, '1582266607.30.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(124, 3, '1582266607.31.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(125, 3, '1582266607.32.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(126, 3, '1582266607.33.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(127, 3, '1582266607.34.jpg', '2020-02-21 18:30:07', '2020-02-21 18:30:07'),
(128, 3, '1582266608.35.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(129, 3, '1582266608.36.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(130, 3, '1582266608.37.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(131, 3, '1582266608.38.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(132, 3, '1582266608.39.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(133, 3, '1582266608.40.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(134, 3, '1582266608.41.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(135, 3, '1582266608.42.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(136, 3, '1582266608.43.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(137, 3, '1582266608.44.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(138, 3, '1582266608.45.jpg', '2020-02-21 18:30:08', '2020-02-21 18:30:08'),
(139, 3, '1582266609.46.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(140, 3, '1582266609.47.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(141, 3, '1582266609.48.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(142, 3, '1582266609.49.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(143, 3, '1582266609.50.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(144, 3, '1582266609.51.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(145, 3, '1582266609.53.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(146, 3, '1582266609.52.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(147, 3, '1582266609.54.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(148, 3, '1582266609.55.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(149, 3, '1582266609.56.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(150, 3, '1582266609.57.jpg', '2020-02-21 18:30:09', '2020-02-21 18:30:09'),
(151, 3, '1582266610.58.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(152, 3, '1582266610.60.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(153, 3, '1582266610.59.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(154, 3, '1582266610.61.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(155, 3, '1582266610.62.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(156, 3, '1582266610.63.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(157, 3, '1582266610.64.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(158, 3, '1582266610.65.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(159, 3, '1582266610.66.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(160, 3, '1582266610.67.jpg', '2020-02-21 18:30:10', '2020-02-21 18:30:10'),
(161, 3, '1582266611.68.jpg', '2020-02-21 18:30:11', '2020-02-21 18:30:11'),
(162, 3, '1582266611.69.jpg', '2020-02-21 18:30:11', '2020-02-21 18:30:11'),
(163, 3, '1582266611.70.jpg', '2020-02-21 18:30:11', '2020-02-21 18:30:11'),
(170, 6, '1582525097.1.jpg', '2020-02-24 18:18:17', '2020-02-24 18:18:17'),
(171, 6, '1582525097.7.jpg', '2020-02-24 18:18:17', '2020-02-24 18:18:17'),
(172, 6, '1582525097.8.jpg', '2020-02-24 18:18:17', '2020-02-24 18:18:17'),
(173, 6, '1582525097.9.jpg', '2020-02-24 18:18:17', '2020-02-24 18:18:17'),
(174, 6, '1582525097.6.jpg', '2020-02-24 18:18:17', '2020-02-24 18:18:17'),
(175, 6, '1582525097.10.jpg', '2020-02-24 18:18:17', '2020-02-24 18:18:17'),
(176, 6, '1582525098.11.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(177, 6, '1582525098.12.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(178, 6, '1582525098.4.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(179, 6, '1582525098.13.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(180, 6, '1582525098.15.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(181, 6, '1582525098.14.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(182, 6, '1582525098.16.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(183, 6, '1582525098.17.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(184, 6, '1582525098.19.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(185, 6, '1582525098.20.jpg', '2020-02-24 18:18:18', '2020-02-24 18:18:18'),
(186, 6, '1582525099.18.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(187, 6, '1582525099.21.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(188, 6, '1582525099.23.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(189, 6, '1582525099.22.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(190, 6, '1582525099.24.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(191, 6, '1582525099.25.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(192, 6, '1582525099.26.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(193, 6, '1582525099.27.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(194, 6, '1582525099.28.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(195, 6, '1582525099.29.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(196, 6, '1582525099.30.jpg', '2020-02-24 18:18:19', '2020-02-24 18:18:19'),
(197, 6, '1582525100.31.jpg', '2020-02-24 18:18:20', '2020-02-24 18:18:20'),
(198, 6, '1582525100.32.jpg', '2020-02-24 18:18:20', '2020-02-24 18:18:20'),
(199, 6, '1582525100.34.jpg', '2020-02-24 18:18:20', '2020-02-24 18:18:20'),
(200, 6, '1582525100.33.jpg', '2020-02-24 18:18:20', '2020-02-24 18:18:20'),
(201, 6, '1582525100.35.jpg', '2020-02-24 18:18:20', '2020-02-24 18:18:20'),
(202, 7, '1584532059.3.jpg', '2020-03-18 22:47:39', '2020-03-18 22:47:39'),
(203, 7, '1584532059.2.jpg', '2020-03-18 22:47:39', '2020-03-18 22:47:39'),
(204, 7, '1584532060.5.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(205, 7, '1584532060.7.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(206, 7, '1584532060.4.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(207, 7, '1584532060.6.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(208, 7, '1584532060.12.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(209, 7, '1584532060.9.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(210, 7, '1584532060.8.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(211, 7, '1584532060.10.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(212, 7, '1584532060.11.jpg', '2020-03-18 22:47:40', '2020-03-18 22:47:40'),
(213, 7, '1584532061.16.jpg', '2020-03-18 22:47:41', '2020-03-18 22:47:41'),
(214, 7, '1584532061.14.jpg', '2020-03-18 22:47:41', '2020-03-18 22:47:41'),
(215, 7, '1584532061.15.jpg', '2020-03-18 22:47:41', '2020-03-18 22:47:41'),
(216, 7, '1584532061.13.jpg', '2020-03-18 22:47:41', '2020-03-18 22:47:41'),
(217, 7, '1584532061.17.jpg', '2020-03-18 22:47:41', '2020-03-18 22:47:41'),
(218, 7, '1584532061.18.jpg', '2020-03-18 22:47:41', '2020-03-18 22:47:41'),
(219, 7, '1584532061.22.jpg', '2020-03-18 22:47:41', '2020-03-18 22:47:41'),
(220, 7, '1584532250.20.jpg', '2020-03-18 22:50:50', '2020-03-18 22:50:50'),
(221, 7, '1584532250.23.jpg', '2020-03-18 22:50:50', '2020-03-18 22:50:50'),
(222, 7, '1584532251.24.jpg', '2020-03-18 22:50:51', '2020-03-18 22:50:51'),
(223, 7, '1584532251.21.jpg', '2020-03-18 22:50:51', '2020-03-18 22:50:51'),
(224, 7, '1584532251.26.jpg', '2020-03-18 22:50:51', '2020-03-18 22:50:51'),
(225, 7, '1584532251.27.jpg', '2020-03-18 22:50:51', '2020-03-18 22:50:51'),
(226, 7, '1584532251.28.jpg', '2020-03-18 22:50:51', '2020-03-18 22:50:51'),
(227, 7, '1584532367.19.jpg', '2020-03-18 22:52:47', '2020-03-18 22:52:47'),
(228, 7, '1584535078.33.jpg', '2020-03-18 23:37:58', '2020-03-18 23:37:58'),
(229, 7, '1584535078.34.jpg', '2020-03-18 23:37:58', '2020-03-18 23:37:58'),
(230, 7, '1584535078.35.jpg', '2020-03-18 23:37:58', '2020-03-18 23:37:58'),
(231, 7, '1584535078.31.jpg', '2020-03-18 23:37:58', '2020-03-18 23:37:58'),
(232, 7, '1584535079.37.jpg', '2020-03-18 23:37:59', '2020-03-18 23:37:59'),
(233, 7, '1584535079.32.jpg', '2020-03-18 23:37:59', '2020-03-18 23:37:59'),
(234, 7, '1584535079.36.jpg', '2020-03-18 23:37:59', '2020-03-18 23:37:59'),
(235, 7, '1584535079.30.jpg', '2020-03-18 23:37:59', '2020-03-18 23:37:59'),
(236, 7, '1584535079.38.jpg', '2020-03-18 23:37:59', '2020-03-18 23:37:59'),
(237, 7, '1584535079.39.jpg', '2020-03-18 23:37:59', '2020-03-18 23:37:59'),
(238, 7, '1584535080.40.jpg', '2020-03-18 23:38:00', '2020-03-18 23:38:00'),
(239, 7, '1584535080.41.jpg', '2020-03-18 23:38:00', '2020-03-18 23:38:00'),
(240, 7, '1584535080.42.jpg', '2020-03-18 23:38:00', '2020-03-18 23:38:00'),
(241, 7, '1584535080.43.jpg', '2020-03-18 23:38:00', '2020-03-18 23:38:00'),
(242, 7, '1584535080.46.jpg', '2020-03-18 23:38:00', '2020-03-18 23:38:00'),
(243, 7, '1584535081.50.jpg', '2020-03-18 23:38:01', '2020-03-18 23:38:01'),
(244, 7, '1584535081.58.jpg', '2020-03-18 23:38:01', '2020-03-18 23:38:01'),
(245, 7, '1584535082.65.jpg', '2020-03-18 23:38:02', '2020-03-18 23:38:02'),
(246, 7, '1584535096.48.jpg', '2020-03-18 23:38:16', '2020-03-18 23:38:16'),
(247, 7, '1584535096.47.jpg', '2020-03-18 23:38:16', '2020-03-18 23:38:16'),
(248, 7, '1584535096.49.jpg', '2020-03-18 23:38:16', '2020-03-18 23:38:16'),
(249, 7, '1584535096.44.jpg', '2020-03-18 23:38:16', '2020-03-18 23:38:16'),
(250, 7, '1584535096.51.jpg', '2020-03-18 23:38:16', '2020-03-18 23:38:16'),
(251, 7, '1584535097.45.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(252, 7, '1584535097.53.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(253, 7, '1584535097.52.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(254, 7, '1584535097.54.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(255, 7, '1584535097.55.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(256, 7, '1584535097.56.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(257, 7, '1584535097.59.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(258, 7, '1584535097.61.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(259, 7, '1584535097.63.jpg', '2020-03-18 23:38:17', '2020-03-18 23:38:17'),
(260, 7, '1584535098.57.jpg', '2020-03-18 23:38:18', '2020-03-18 23:38:18'),
(261, 7, '1584535098.73.jpg', '2020-03-18 23:38:18', '2020-03-18 23:38:18'),
(262, 7, '1584535099.79.jpg', '2020-03-18 23:38:19', '2020-03-18 23:38:19'),
(263, 7, '1584535099.85.jpg', '2020-03-18 23:38:19', '2020-03-18 23:38:19'),
(264, 7, '1584535202.67.jpg', '2020-03-18 23:40:02', '2020-03-18 23:40:02'),
(265, 7, '1584535202.60.jpg', '2020-03-18 23:40:02', '2020-03-18 23:40:02'),
(266, 7, '1584535202.68.jpg', '2020-03-18 23:40:02', '2020-03-18 23:40:02'),
(267, 7, '1584535202.64.jpg', '2020-03-18 23:40:02', '2020-03-18 23:40:02'),
(268, 7, '1584535202.70.jpg', '2020-03-18 23:40:02', '2020-03-18 23:40:02'),
(269, 7, '1584535202.72.jpg', '2020-03-18 23:40:02', '2020-03-18 23:40:02'),
(270, 7, '1584535202.75.jpg', '2020-03-18 23:40:02', '2020-03-18 23:40:02'),
(271, 7, '1584535203.69.jpg', '2020-03-18 23:40:03', '2020-03-18 23:40:03'),
(272, 7, '1584535203.76.jpg', '2020-03-18 23:40:03', '2020-03-18 23:40:03'),
(273, 7, '1584535203.74.jpg', '2020-03-18 23:40:03', '2020-03-18 23:40:03'),
(274, 7, '1584535203.78.jpg', '2020-03-18 23:40:03', '2020-03-18 23:40:03'),
(275, 7, '1584535203.77.jpg', '2020-03-18 23:40:03', '2020-03-18 23:40:03'),
(276, 7, '1584535203.81.jpg', '2020-03-18 23:40:03', '2020-03-18 23:40:03'),
(277, 7, '1584535203.86.jpg', '2020-03-18 23:40:03', '2020-03-18 23:40:03'),
(370, 8, '1584536365.11.jpg', '2020-03-18 23:59:25', '2020-03-18 23:59:25'),
(369, 8, '1584536365.9.jpg', '2020-03-18 23:59:25', '2020-03-18 23:59:25'),
(367, 8, '1584536365.8.jpg', '2020-03-18 23:59:25', '2020-03-18 23:59:25'),
(368, 8, '1584536365.10.jpg', '2020-03-18 23:59:25', '2020-03-18 23:59:25'),
(366, 8, '1584536365.7.jpg', '2020-03-18 23:59:25', '2020-03-18 23:59:25'),
(365, 8, '1584536364.5.jpg', '2020-03-18 23:59:24', '2020-03-18 23:59:24'),
(364, 8, '1584536364.3.jpg', '2020-03-18 23:59:24', '2020-03-18 23:59:24'),
(363, 8, '1584536364.4.jpg', '2020-03-18 23:59:24', '2020-03-18 23:59:24'),
(362, 8, '1584536364.2.jpg', '2020-03-18 23:59:24', '2020-03-18 23:59:24'),
(361, 8, '1584536364.6.jpg', '2020-03-18 23:59:24', '2020-03-18 23:59:24'),
(289, 7, '1584535249.41.jpg', '2020-03-18 23:40:49', '2020-03-18 23:40:49'),
(290, 7, '1584535249.43.jpg', '2020-03-18 23:40:49', '2020-03-18 23:40:49'),
(291, 7, '1584535249.46.jpg', '2020-03-18 23:40:49', '2020-03-18 23:40:49'),
(292, 7, '1584535249.44.jpg', '2020-03-18 23:40:49', '2020-03-18 23:40:49'),
(293, 7, '1584535249.49.jpg', '2020-03-18 23:40:49', '2020-03-18 23:40:49'),
(294, 7, '1584535250.51.jpg', '2020-03-18 23:40:50', '2020-03-18 23:40:50'),
(295, 7, '1584535250.54.jpg', '2020-03-18 23:40:50', '2020-03-18 23:40:50'),
(296, 7, '1584535250.55.jpg', '2020-03-18 23:40:50', '2020-03-18 23:40:50'),
(297, 7, '1584535250.59.jpg', '2020-03-18 23:40:50', '2020-03-18 23:40:50'),
(298, 7, '1584535250.60.jpg', '2020-03-18 23:40:50', '2020-03-18 23:40:50'),
(299, 7, '1584535310.31.jpg', '2020-03-18 23:41:50', '2020-03-18 23:41:50'),
(300, 7, '1584535310.33.jpg', '2020-03-18 23:41:50', '2020-03-18 23:41:50'),
(301, 7, '1584535310.34.jpg', '2020-03-18 23:41:50', '2020-03-18 23:41:50'),
(302, 7, '1584535310.30.jpg', '2020-03-18 23:41:50', '2020-03-18 23:41:50'),
(303, 7, '1584535310.32.jpg', '2020-03-18 23:41:50', '2020-03-18 23:41:50'),
(304, 7, '1584535310.39.jpg', '2020-03-18 23:41:50', '2020-03-18 23:41:50'),
(305, 7, '1584535311.38.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(306, 7, '1584535311.37.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(307, 7, '1584535311.36.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(308, 7, '1584535311.35.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(309, 7, '1584535311.40.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(310, 7, '1584535311.41.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(311, 7, '1584535311.46.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(312, 7, '1584535311.43.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(313, 7, '1584535311.45.jpg', '2020-03-18 23:41:51', '2020-03-18 23:41:51'),
(314, 7, '1584535312.50.jpg', '2020-03-18 23:41:52', '2020-03-18 23:41:52'),
(315, 7, '1584535312.51.jpg', '2020-03-18 23:41:52', '2020-03-18 23:41:52'),
(316, 7, '1584535312.54.jpg', '2020-03-18 23:41:52', '2020-03-18 23:41:52'),
(317, 7, '1584535312.57.jpg', '2020-03-18 23:41:52', '2020-03-18 23:41:52'),
(318, 7, '1584535312.56.jpg', '2020-03-18 23:41:52', '2020-03-18 23:41:52'),
(319, 7, '1584535323.48.jpg', '2020-03-18 23:42:03', '2020-03-18 23:42:03'),
(320, 7, '1584535323.44.jpg', '2020-03-18 23:42:03', '2020-03-18 23:42:03'),
(321, 7, '1584535323.42.jpg', '2020-03-18 23:42:03', '2020-03-18 23:42:03'),
(322, 7, '1584535323.49.jpg', '2020-03-18 23:42:03', '2020-03-18 23:42:03'),
(323, 7, '1584535323.47.jpg', '2020-03-18 23:42:03', '2020-03-18 23:42:03'),
(324, 7, '1584535323.58.jpg', '2020-03-18 23:42:03', '2020-03-18 23:42:03'),
(325, 7, '1584535324.53.jpg', '2020-03-18 23:42:04', '2020-03-18 23:42:04'),
(326, 7, '1584535324.55.jpg', '2020-03-18 23:42:04', '2020-03-18 23:42:04'),
(327, 7, '1584535324.52.jpg', '2020-03-18 23:42:04', '2020-03-18 23:42:04'),
(328, 7, '1584535383.65.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(329, 7, '1584535383.59.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(330, 7, '1584535383.61.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(331, 7, '1584535383.64.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(332, 7, '1584535383.60.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(333, 7, '1584535383.63.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(334, 7, '1584535383.67.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(335, 7, '1584535383.69.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(336, 7, '1584535383.72.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(337, 7, '1584535383.70.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(338, 7, '1584535383.68.jpg', '2020-03-18 23:43:03', '2020-03-18 23:43:03'),
(339, 7, '1584535384.74.jpg', '2020-03-18 23:43:04', '2020-03-18 23:43:04'),
(340, 7, '1584535384.75.jpg', '2020-03-18 23:43:04', '2020-03-18 23:43:04'),
(341, 7, '1584535384.76.jpg', '2020-03-18 23:43:04', '2020-03-18 23:43:04'),
(342, 7, '1584535384.73.jpg', '2020-03-18 23:43:04', '2020-03-18 23:43:04'),
(343, 7, '1584535384.77.jpg', '2020-03-18 23:43:04', '2020-03-18 23:43:04'),
(344, 7, '1584535384.80.jpg', '2020-03-18 23:43:04', '2020-03-18 23:43:04'),
(345, 7, '1584535385.86.jpg', '2020-03-18 23:43:05', '2020-03-18 23:43:05'),
(346, 7, '1584535398.81.jpg', '2020-03-18 23:43:18', '2020-03-18 23:43:18'),
(347, 7, '1584535398.83.jpg', '2020-03-18 23:43:18', '2020-03-18 23:43:18'),
(348, 7, '1584535398.79.jpg', '2020-03-18 23:43:18', '2020-03-18 23:43:18'),
(349, 7, '1584535398.78.jpg', '2020-03-18 23:43:18', '2020-03-18 23:43:18'),
(350, 7, '1584535398.84.jpg', '2020-03-18 23:43:18', '2020-03-18 23:43:18'),
(351, 7, '1584535399.82.jpg', '2020-03-18 23:43:19', '2020-03-18 23:43:19'),
(352, 7, '1584535399.88.jpg', '2020-03-18 23:43:19', '2020-03-18 23:43:19'),
(353, 7, '1584535399.89.jpg', '2020-03-18 23:43:19', '2020-03-18 23:43:19'),
(354, 7, '1584535399.87.jpg', '2020-03-18 23:43:19', '2020-03-18 23:43:19'),
(355, 7, '1584535399.90.jpg', '2020-03-18 23:43:19', '2020-03-18 23:43:19'),
(356, 7, '1584535399.85.jpg', '2020-03-18 23:43:19', '2020-03-18 23:43:19'),
(357, 7, '1584535399.93.jpg', '2020-03-18 23:43:19', '2020-03-18 23:43:19'),
(358, 7, '1584535399.92.jpg', '2020-03-18 23:43:19', '2020-03-18 23:43:19'),
(359, 7, '1584535400.91.jpg', '2020-03-18 23:43:20', '2020-03-18 23:43:20'),
(360, 7, '1584535400.94.jpg', '2020-03-18 23:43:20', '2020-03-18 23:43:20'),
(371, 8, '1584536365.12.jpg', '2020-03-18 23:59:25', '2020-03-18 23:59:25'),
(372, 8, '1584536365.14.jpg', '2020-03-18 23:59:25', '2020-03-18 23:59:25'),
(373, 8, '1584536365.15.jpg', '2020-03-18 23:59:25', '2020-03-18 23:59:25'),
(374, 8, '1584536366.13.jpg', '2020-03-18 23:59:26', '2020-03-18 23:59:26'),
(375, 8, '1584536366.18.jpg', '2020-03-18 23:59:26', '2020-03-18 23:59:26'),
(376, 8, '1584536366.16.jpg', '2020-03-18 23:59:26', '2020-03-18 23:59:26'),
(377, 8, '1584536366.17.jpg', '2020-03-18 23:59:26', '2020-03-18 23:59:26'),
(378, 8, '1584536366.19.jpg', '2020-03-18 23:59:26', '2020-03-18 23:59:26'),
(379, 8, '1584536366.21.jpg', '2020-03-18 23:59:26', '2020-03-18 23:59:26'),
(380, 8, '1584536366.22.jpg', '2020-03-18 23:59:26', '2020-03-18 23:59:26'),
(381, 8, '1584536366.26.jpg', '2020-03-18 23:59:26', '2020-03-18 23:59:26'),
(382, 8, '1584536367.31.jpg', '2020-03-18 23:59:27', '2020-03-18 23:59:27'),
(383, 8, '1584536989.23.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(384, 8, '1584536989.24.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(385, 8, '1584536989.28.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(386, 8, '1584536989.30.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(387, 8, '1584536989.33.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(388, 8, '1584536989.34.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(389, 8, '1584536989.32.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(390, 8, '1584536989.35.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(391, 8, '1584536989.27.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(392, 8, '1584536989.20.jpg', '2020-03-19 00:09:49', '2020-03-19 00:09:49'),
(393, 8, '1584536990.36.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(394, 8, '1584536990.37.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(395, 8, '1584536990.39.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(396, 8, '1584536990.38.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(397, 8, '1584536990.43.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(398, 8, '1584536990.42.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(399, 8, '1584536990.40.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(400, 8, '1584536990.41.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(401, 8, '1584536990.44.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(402, 8, '1584536990.45.jpg', '2020-03-19 00:09:50', '2020-03-19 00:09:50'),
(403, 8, '1584536991.47.jpg', '2020-03-19 00:09:51', '2020-03-19 00:09:51'),
(404, 8, '1584536991.46.jpg', '2020-03-19 00:09:51', '2020-03-19 00:09:51'),
(405, 8, '1584537067.48.jpg', '2020-03-19 00:11:07', '2020-03-19 00:11:07'),
(406, 8, '1584537067.49.jpg', '2020-03-19 00:11:07', '2020-03-19 00:11:07'),
(407, 8, '1584537067.50.jpg', '2020-03-19 00:11:07', '2020-03-19 00:11:07'),
(408, 8, '1584537067.51.jpg', '2020-03-19 00:11:07', '2020-03-19 00:11:07'),
(409, 8, '1584537110.52.jpg', '2020-03-19 00:11:50', '2020-03-19 00:11:50'),
(410, 8, '1584537110.53.jpg', '2020-03-19 00:11:50', '2020-03-19 00:11:50'),
(411, 8, '1584537110.54.jpg', '2020-03-19 00:11:50', '2020-03-19 00:11:50'),
(412, 8, '1584537110.56.jpg', '2020-03-19 00:11:50', '2020-03-19 00:11:50'),
(413, 8, '1584537110.55.jpg', '2020-03-19 00:11:50', '2020-03-19 00:11:50'),
(414, 8, '1584537111.57.jpg', '2020-03-19 00:11:51', '2020-03-19 00:11:51'),
(415, 8, '1584537111.58.jpg', '2020-03-19 00:11:51', '2020-03-19 00:11:51'),
(416, 8, '1584537111.59.jpg', '2020-03-19 00:11:51', '2020-03-19 00:11:51'),
(417, 8, '1584537111.60.jpg', '2020-03-19 00:11:51', '2020-03-19 00:11:51'),
(418, 8, '1584537111.63.jpg', '2020-03-19 00:11:51', '2020-03-19 00:11:51'),
(419, 8, '1584537111.61.jpg', '2020-03-19 00:11:51', '2020-03-19 00:11:51'),
(420, 8, '1584537173.64.jpg', '2020-03-19 00:12:53', '2020-03-19 00:12:53'),
(421, 8, '1584537174.70.jpg', '2020-03-19 00:12:54', '2020-03-19 00:12:54'),
(422, 8, '1584537174.69.jpg', '2020-03-19 00:12:54', '2020-03-19 00:12:54'),
(423, 8, '1584537174.67.jpg', '2020-03-19 00:12:54', '2020-03-19 00:12:54'),
(424, 8, '1584537174.68.jpg', '2020-03-19 00:12:54', '2020-03-19 00:12:54'),
(425, 8, '1584537174.65.jpg', '2020-03-19 00:12:54', '2020-03-19 00:12:54'),
(426, 8, '1584537232.72.jpg', '2020-03-19 00:13:52', '2020-03-19 00:13:52'),
(427, 8, '1584537232.73.jpg', '2020-03-19 00:13:52', '2020-03-19 00:13:52'),
(428, 8, '1584537232.76.jpg', '2020-03-19 00:13:52', '2020-03-19 00:13:52'),
(429, 8, '1584537232.74.jpg', '2020-03-19 00:13:52', '2020-03-19 00:13:52'),
(430, 8, '1584537232.75.jpg', '2020-03-19 00:13:52', '2020-03-19 00:13:52'),
(431, 8, '1584537233.77.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(432, 8, '1584537233.79.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(433, 8, '1584537233.78.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(434, 8, '1584537233.81.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(435, 8, '1584537233.82.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(436, 8, '1584537233.80.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(437, 8, '1584537233.83.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(438, 8, '1584537233.84.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(439, 8, '1584537233.85.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(440, 8, '1584537233.86.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(441, 8, '1584537233.87.jpg', '2020-03-19 00:13:53', '2020-03-19 00:13:53'),
(442, 8, '1584537234.88.jpg', '2020-03-19 00:13:54', '2020-03-19 00:13:54'),
(443, 8, '1584537234.89.jpg', '2020-03-19 00:13:54', '2020-03-19 00:13:54'),
(444, 8, '1584537234.90.jpg', '2020-03-19 00:13:54', '2020-03-19 00:13:54'),
(445, 8, '1584537234.91.jpg', '2020-03-19 00:13:54', '2020-03-19 00:13:54'),
(446, 8, '1584537234.92.jpg', '2020-03-19 00:13:54', '2020-03-19 00:13:54'),
(447, 8, '1584537261.93.jpg', '2020-03-19 00:14:21', '2020-03-19 00:14:21'),
(448, 8, '1584537261.94.jpg', '2020-03-19 00:14:21', '2020-03-19 00:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `important_links`
--

CREATE TABLE `important_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `publication_status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `important_links`
--

INSERT INTO `important_links` (`id`, `title`, `url`, `created_by`, `updated_by`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Department of Physics, RU', 'http://dept.ru.ac.bd/physics/', 6, NULL, 1, '2020-02-02 10:20:18', '2020-02-02 10:20:18'),
(2, 'DUPHAA', 'http://duphaa.net/', 6, NULL, 1, '2020-02-02 10:26:35', '2020-02-02 10:26:35'),
(3, 'Department of Physics, DU', 'https://www.du.ac.bd/academic/department_item/PHY', 6, NULL, 1, '2020-02-02 10:27:10', '2020-02-02 10:27:10'),
(4, 'Department of Physics, CU', 'https://physics.cu.ac.bd/category/physics/', 6, NULL, 1, '2020-02-02 10:27:40', '2020-02-02 10:27:40'),
(5, 'Department of Physics, Oxford', 'https://www2.physics.ox.ac.uk/', 6, NULL, 1, '2020-02-02 10:28:25', '2020-02-02 10:28:25'),
(6, 'Department of Physics, Cambridge', 'https://www.phy.cam.ac.uk/', 6, NULL, 1, '2020-02-02 10:28:52', '2020-02-02 10:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authors` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` timestamp NULL DEFAULT NULL,
  `publication_status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `authors`, `title`, `keywords`, `abstract`, `pdf_file`, `year`, `publication_date`, `publication_status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, '<p>Muhammad</p>', 'Laravel Review', 'PHP,LARAVEL,MySql', '<p>The objectives of this alumni association are to build active communication network among all the present and ex-students of the Department of Physics through various programs and to contribute in the academic development of the Physics Department and economic development of the country through the dissemination of new concepts in the relevant field.</p>\r\n\r\n<p>To build up relationship among the members of the organization through educational, cultural, social and welfare programs.</p>', '1575970174.pdf', '2009', '2009-02-17 18:00:00', 1, 1, 1, NULL, '2019-12-10 09:29:34', '2019-12-21 08:23:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `bachelor_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bachelor_roll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_roll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mphil_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mphil_roll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phd_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phd_roll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_district` int(11) DEFAULT NULL,
  `m_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_district` int(11) DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_spouse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_son` int(11) DEFAULT NULL,
  `no_of_daughter` int(11) DEFAULT NULL,
  `cat_of_member` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`cat_of_member`)),
  `amount` int(11) DEFAULT NULL,
  `mode_of_payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `title`, `name`, `date_of_birth`, `bachelor_year`, `bachelor_roll`, `masters_year`, `masters_roll`, `mphil_year`, `mphil_roll`, `phd_year`, `phd_roll`, `m_location`, `m_country`, `m_post_code`, `m_district`, `m_email`, `m_phone`, `p_location`, `p_country`, `p_post_code`, `p_district`, `occupation`, `designation`, `name_of_spouse`, `no_of_son`, `no_of_daughter`, `cat_of_member`, `amount`, `mode_of_payment`, `payment_date`, `transaction_id`, `bank_name`, `branch_name`, `image`, `signature`, `publication_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(39, 'Dr', 'Md. Anwarul Kabir Bhuiya', '1979-05-27', '2002', NULL, '2003', '', '', '', '2013', '', 'Department of Materials Science & Engg., University of Rajshahi, Rajshahi-6205', NULL, '6205', 15, 'mkabir@ru.ac.bd', '01715616840', '', NULL, '', NULL, 'Teaching & Research', 'Professor', 'Fathama Tuz Zohora Surovi', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1579769206.jpg', '', 1, 8, 8, '2020-01-16 16:21:10', '2021-06-03 07:43:44'),
(97, 'Mr', 'K. M. Masum', '1959-01-01', '1981', NULL, '', '', '', '', '', '', 'Flat No.- H, Sheltech Garden, 42/3/A, Indira Road', NULL, '1215', 47, 'bgicinsurance@yahoo.com', '01715009345', 'Flat No.- H, Sheltech Garden, 42/3/A, Indira Road', NULL, '1215', 47, 'Business', '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1583061162.jpg', '', 1, 8, 8, '2020-01-28 17:15:30', '2022-04-06 05:14:29'),
(37, 'Dr', 'Md. Mijanur Rahaman', '1982-12-31', '2006', '02094354', '2007', '02094354', '', '', '2016', '', 'Department of Materials Science and Engineering, University of Rajshahi', NULL, '6205', 15, 'mijan_mse@ru.ac.bd', '+8801728171446', 'Village: Sonadah, Post office: Sonadah, Thana: Bagha, District: Rajshahi', NULL, '6280', 15, 'Teaching at University', 'Associate Professor', 'Mst. Nahida Aktar', NULL, 1, '[\"3\"]', 3000, 'Cash', '2020-01-16 06:00:00', '', '', '', '1579109008.jpg', '1579109008.jpg', 1, NULL, 8, '2020-01-16 05:23:28', '2021-06-03 07:43:44'),
(36, 'Prof', 'Md. Mozibur Rahman', '1959-09-21', '1980', NULL, '1981', '', '', '', '1994', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'mozibur2000@yahoo.com', '01556303210', '291/1, Baliapukur, Ghuramara', NULL, '6100', 15, 'Teaching and Research', 'Professor', '', 1, NULL, '[\"3\", \"9\", \"12\"]', 3000, 'Cash', '2018-02-15 18:00:00', '', '', '', '1579082329.jpg', '', 1, 8, 8, '2020-01-15 21:58:49', '2021-06-03 11:59:09'),
(35, 'Dr', 'Md. Rezaur Rahim', '1957-06-23', '1979', NULL, '1980', '', '', '', '', '', 'Dept. of Physics, University of Rajshahi', NULL, '6205', 15, 'mrrahim@ru.ac.bd', '01711451501', '79, H.S.S. Road', NULL, '7300', 29, 'Teaching at University', 'Associate Professor', 'Rebecca Sultana Rahim', 1, 1, '[\"3\", \"9\"]', 3000, 'Cash', '2018-02-14 18:00:00', '', '', '', '1579080063.jpg', '', 1, 8, 8, '2020-01-15 21:21:03', '2021-06-03 11:13:09'),
(34, 'Dr', 'Md. Nure Alam Abdullah', '1971-01-01', '1993', NULL, '1994', '', '', '', '', '', 'Professor, Department of Physics, Jagannath University, Dhaka', NULL, '1100', 47, 'mnaa05@gmail.com', '01713228640', 'Professor, Department of Physics, Jagannath University, Dhaka', NULL, '1100', 47, 'Teaching and Research', 'Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-01 06:00:00', '', '', '', '1579772821.jpg', '', 1, 8, 8, '2020-01-15 21:07:00', '2021-06-03 07:43:44'),
(32, 'Prof', 'A. K. M. Azharul Islam', '1946-11-02', '1966', NULL, '1967', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'azi46@ru.ac.bd', '01711726026', 'Jahangir Sharoni, Talaimari, Post- Kajla, Thana- Motihar', NULL, '6204', 15, 'Teaching and Research', 'Professor (Rtd.)', 'Prof. Dr. Shamsunnahar Islam', NULL, 2, '[\"3\", \"10\", \"12\"]', 3000, 'Cash', '2018-03-03 18:00:00', '', '', '', '1578228337.png', '1578228337.png', 1, 8, 8, '2020-01-06 00:20:57', '2021-06-03 12:33:14'),
(28, 'Prof', 'Md. Rafiqul Ahsan', '1960-01-01', '1981', NULL, '1982', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'mrahsanphy@gmail.com', '01718822065', '117/01-Bihas, Rajshahi.', NULL, '6206', 15, 'Teaching at University', 'Professor', 'Nirmin Fouzia', 1, 1, '[\"3\", \"9\"]', 3000, 'Cash', '2017-12-31 18:00:00', '', '', '', '1578213322.jpg', '', 1, 8, 8, '2020-01-05 19:00:34', '2021-06-03 10:56:03'),
(30, 'Mr', 'Md. Monowarul Haque', '1956-01-01', '1979', NULL, '1980', '', '', '', '', '', 'C-4, Century Tower, Magbazar', NULL, '1217', 47, 'monowarulhoque@yahoo.com', '01819213303', 'C-4, Century Tower, Magbazar', NULL, '1217', 47, 'Business', 'MD', 'Akbari Akhtar Nagma', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-04 18:00:00', '', '', '', '1578212970.jpg', '', 1, 8, 8, '2020-01-05 20:29:30', '2021-06-05 10:49:40'),
(26, 'Dr', 'Md. Saiful Islam', '1984-06-01', '2007', '04054331', '2008', '04054331', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'sislamphy@ru.ac.bd', '+8801790638886', 'Vill.: Dhorbona, P. O.: Ranihati, Upa: Shibganj', NULL, '6340', 18, 'Teaching and Research', 'Associate Professor', 'Dr. Monira Jannatul Kobra', NULL, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2017-12-31 18:00:00', '', '', '', '1578204890.jpg', '1578227388.jpg', 1, 8, 8, '2020-01-05 18:14:50', '2021-06-03 11:33:41'),
(29, 'Mr', 'Md. Abdul Wadud', '1960-01-05', '1983', NULL, '1984', '', '', '', '', '', 'House No.-31, Road No.-7, Block-F, Banani', NULL, '1213', 47, 'waduddara@gmail.com', '01787686503', '', NULL, '', NULL, 'Business', 'Ex-Member of the Parliament', 'Mst. Monowara Begum', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-01-05 06:00:00', '', '', '', '1582632597.jpg', '', 1, 8, 8, '2020-01-05 20:09:29', '2021-06-03 07:43:44'),
(31, 'Prof', 'Arun Kumar Basak', '1941-10-17', '1961', '2286', '1963', '23', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'akbasak@gmail.com', '01715519667', 'Rubyvilla, 399 Sagarpara, P. O.: Ghoramara', NULL, '6100', 15, 'Teaching and Research', 'Professor Emeritus', 'Mrs Devika Basak', NULL, NULL, '[\"3\", \"9\", \"12\"]', 3000, 'Cash', '2013-03-26 18:00:00', '', '', '', '1578228596.png', '1578228596.png', 1, 8, 8, '2020-01-06 00:11:48', '2021-06-03 13:00:27'),
(33, 'Mr', 'Md. Abu Aslam Parvez', '1961-01-01', '1983', NULL, '1984', '', '', '', '', '', '132 Crescent Road, Dhanmondi, Dhaka-1205', NULL, '1205', 47, 'aslamparvez334@gmail.com', '01819438694', '', NULL, '1205', 47, NULL, '', '', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-03 06:00:00', '', '', '', '1579769415.jpg', '', 1, 8, 8, '2020-01-15 20:50:07', '2021-06-03 07:43:44'),
(40, 'Dr', 'Mirza Humaun Kabir Rubel', '1983-12-31', '2005', NULL, '2006', '', '', '', '', '', 'Dept. of Materials Science and Engineering, University of Rajshahi, Rajshahi-6205', NULL, '6205', 15, 'mhk_mse@ru.ac.bd', '01714657365', 'Vill-Kaitola, Post-Koitola, P.S.- Bera, Pabna-6681', NULL, '6681', 13, 'Teaching And Research', 'Associate Professor', 'Shadia Sharmin', 2, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1579770136.jpg', '', 1, 8, 8, '2020-01-16 16:28:01', '2021-06-03 07:43:44'),
(41, 'Dr', 'Md. Abdul Halim', '1983-09-02', '2006', NULL, '2007', '', '', '', '2016', '', 'Materials Science & Engineering, University of rajshahi, Rajshahi-6205', NULL, '6205', 15, 'mah_mse@ru.ac,bd', '01762576926', 'Vill-Shingher Gong, P.O.- Ashujia, Thana- Kendua, Netrokona', NULL, '', NULL, 'Teaching & Research', 'Associate Professor', 'Tahmina Akter', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1579770421.jpg', '', 1, 8, 8, '2020-01-16 16:33:38', '2021-06-03 07:43:44'),
(43, 'Dr', 'Md. Abdus Sattar', '1980-02-02', '2003', NULL, '2004', '', '', '', '', '', 'Materials Science & Engineering, University of rajshahi, Rajshahi-6205', NULL, '6205', 15, 'sattarjaist@gmail.com', '01759592192', 'Vill- Mosidpur, Post- Ramgaon, P.S. Manda, Dist- Naogoan, 6520', NULL, '6520', 19, 'Teaching & Research', 'Associate Professor', 'Shamima Sultana', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-03 06:00:00', '', '', '', '1579770507.jpg', '', 1, 8, 8, '2020-01-16 16:39:58', '2021-06-03 07:43:44'),
(44, 'Mr', 'Abu Taher Mohammad Shafiul Azam', '1983-01-01', '2005', NULL, '2006', '', '', '', '', '', 'Department of Physics, BUET, Dhaka', NULL, '1213', 47, 'atmshafi@phy.buet.ac.bd', '01718784750', 'Department of Physics, BUET, Dhaka', NULL, '1213', NULL, 'Teaching & Research', 'Assistant Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-08 06:00:00', '', '', '', '1579770625.jpg', '', 1, 8, 8, '2020-01-16 16:46:24', '2021-06-03 07:43:44'),
(45, 'Mr', 'Ehsan Uddin Ahmad', '1985-01-01', '2006', NULL, '2007', '', '', '', '', '', 'SOS Hermann Gmeiner College, Mirpur-13, Dhaka', NULL, '1216', 47, 'ehsanrubd@gmail.com', '01720827774', 'SOS Hermann Gmeiner College, Mirpur-13, Dhaka', NULL, '1216', NULL, 'Teaching', 'Teacher', '', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-01-01 06:00:00', '', '', '', '1579770703.jpg', '', 1, 8, 8, '2020-01-16 16:51:30', '2021-06-03 07:43:44'),
(58, 'Prof', 'Md. Abdur Razzaque Sarker', '1978-09-15', '2001', NULL, '2002', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'razzaque_phy@ru.ac.bd', '01558472609', 'Department of Physics, University of Rajshahi', NULL, '6205', NULL, 'Teaching & Research', 'Professor', '', NULL, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579490540.jpg', '', 1, 8, 8, '2020-01-20 15:22:20', '2021-06-03 12:16:48'),
(47, 'Mr', 'Md. Maruf Hossain Khan', '1982-01-01', '2002', NULL, '2003', '', '', '', '', '', 'House No-283, Word No-10, Road-J.M. Hilali (by lane), Vill- Dhanbandi, Post-Sirajganj Sadar', NULL, '6700', 12, 'dmmhk@yahoo.com', '01711075096', 'House No-283, Word No-10, Road-J.M. Hilali (by lane), Vill- Dhanbandi, Post-Sirajganj Sadar', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-01-01 06:00:00', '', '', '', '1579770803.jpg', '', 1, 8, 8, '2020-01-16 17:11:31', '2021-06-03 07:43:44'),
(98, 'Mr', 'Md. Abdul Hakim', '1962-01-01', '1984', NULL, '1985', '', '', '', '', '', 'Flat-2F, House no.-50, Road-15/A, Dhanmondi', NULL, '1209', 47, 'khokon01@yahoo.com', '01819777723', 'Flat-2F, House no.-50, Road-15/A, Dhanmondi', NULL, '1209', 47, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-08-08 05:00:00', '', '', '', '1582810202.jpg', '', 1, 8, 8, '2020-01-28 22:49:58', '2021-06-03 07:43:44'),
(49, 'Dr', 'Abu Talib Md Kaosar Jamil', '1968-01-01', '1989', NULL, '', '', '', '', '', '', 'Department of Physics, Dhaka University of Engineering and Technololgy (DUET)', NULL, '1700', 41, 'atmkjamil@yaoo.com', '01552376586', 'Department of Physics, Dhaka University of Engineering and Technololgy (DUET)', NULL, '1700', 41, 'Teaching and Research', 'Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579770990.jpg', '', 1, 8, 8, '2020-01-16 17:59:14', '2021-06-03 07:43:44'),
(50, 'Mr', 'Md. Abdul Kader Zilani', '1968-01-01', '1991', NULL, '1992', '', '', '', '', '', 'Dept. of Physics, Rajshai University of Engineering & Technology, Rajshahi', NULL, '6204', 15, 'zilani03@gmail.com', '01718670228', 'Dept. of Physics, Rajshai University of Engineering & Technology, Rajshahi', NULL, '6204', 15, 'Teaching & Research', 'Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-01-01 06:00:00', '', '', '', '1579771074.jpg', '', 1, 8, 8, '2020-01-16 18:03:29', '2021-06-03 07:43:44'),
(51, 'Mr', 'Shishir Kumar Dhar', '1976-01-01', '1998', NULL, '1999', '', '', '', '', '', 'Attached Officer, Direcxtorate of Technical Education, F-4/B, Administrative Area, Aqarqaon, Shere-E-Banglanagar, Dhaka', NULL, '1207', 47, 'skd2021@gmail.com', '01711196694', 'Attached Officer, Direcxtorate of Technical Education, F-4/B, Administrative Area, Aqarqaon, Shere-E-Banglanagar, Dhaka', NULL, '1207', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1579771281.jpg', '', 1, 8, 8, '2020-01-16 18:12:23', '2021-06-03 07:43:44'),
(52, 'Mr', 'Eashanul Kabir', '1960-01-01', '1980', NULL, '1981', '', '', '', '', '', 'Flat-B2, House#20/7, Road-1, Mahamhadia Housing Ltd. Mohammadpur, Dhaka-1207', NULL, '1207', 47, 'eshanulk@gmail.com', '01732875020', 'Flat-B2, House#20/7, Road-1, Mahamhadia Housing Ltd. Mohammadpur, Dhaka-1207', NULL, '1207', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-01-01 06:00:00', '', '', '', '1579771376.jpg', '', 1, 8, 8, '2020-01-16 18:15:32', '2021-06-03 07:43:44'),
(53, 'Mr', 'Md. Enam Elahi', '1958-01-01', '1980', NULL, '1981', '', '', '', '', '', 'Flat-5E, House#23 (Suvastu Kunjan), Road#6, Dhaka-1207', NULL, '1207', 47, 'enamelahii@gmail.com', '01711548384', 'Flat-5E, House#23 (Suvastu Kunjan), Road#6, Dhaka-1207', NULL, '1207', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-01-01 06:00:00', '', '', '', '1579771474.jpg', '', 1, 8, 8, '2020-01-16 18:18:00', '2021-06-03 07:43:44'),
(54, 'Dr', 'Md. Shahjahan', '1971-01-01', '1993', NULL, '1994', '', '', '', '', '', 'Dept. of Electgronics and Communication Engineering, Bangabandhu Sheikh Mujibur Rahman Science and Technology University, Gopalganj', NULL, '8100', 51, 'shahjaphys@yahoo.com', '01716113968', '', NULL, '8100', NULL, 'Teaching & Research', 'Vice-Chancellor & Professor, BSMRSTU', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-08 06:00:00', '', '', '', '1600942533.jpg', '', 1, 9, 9, '2020-01-16 18:22:09', '2021-06-03 07:43:44'),
(57, 'Dr', 'Md. Manjurul Haque', '1968-01-01', '1989', NULL, '1990', '', '', '', '', '', 'Dept. of Electrical and Electronic Engineering, Islamic University', NULL, '7001', 25, 'manju_iu@yahoo.com', '01715157526', 'Dept. of Electrical and Electronic Engineering, Islamic University', NULL, '7001', 25, 'Teaching & Research', 'Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1579771573.jpg', '', 1, 8, 8, '2020-01-16 18:27:43', '2021-06-03 07:43:44'),
(59, 'Prof', 'Abdullah Shams Bin Tariq', '1974-11-27', '1995', NULL, '1996', '', '', '', '', '', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'asbtariq@ru.ac.bd', '01718140063', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Professor', '', 1, 2, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579495495.jpg', '', 1, 8, 8, '2020-01-20 16:44:55', '2021-06-03 12:08:12'),
(60, 'Prof', 'Md. Alfaz Uddin', '1950-03-22', '1973', NULL, '1974', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'uddnmda@yahoo.com', '01718595223', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'Teaching & Research', 'Professor (Rtd.)', '', 1, NULL, '[\"3\", \"10\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579772784.jpg', '', 1, 8, 8, '2020-01-20 16:50:33', '2021-06-03 12:42:22'),
(61, 'Mr', 'AFM Abdul Wahed', '1953-01-01', '1975', NULL, '1976', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'afmaw@yahoo.com', '01739542283', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'Teaching at University', 'Associate Professor (Rtd.)', '', NULL, NULL, '[\"3\", \"10\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579496088.jpg', '', 1, 8, 8, '2020-01-20 16:54:48', '2021-06-05 10:12:12'),
(62, 'Mr', 'Mir Murtoza Ali', '1960-03-22', '1981', NULL, '', '', '', '', '', '', 'Gono Bishwabidyalay, Savar, Dhaka', NULL, '1344', 47, 'murtozababu1960@gmail.com', '01711678327', 'Mir Bari, Kumarkhali, Kushtia', NULL, '7010', 25, 'Service', 'Controller of Examinations, Gono Bishwabidyalay', 'Hasina Banu Rubi', 1, 1, '[\"3\"]', 3000, 'Cash', '2020-01-19 18:00:00', '', '', '', '1579509860.JPG', '', 1, 8, 8, '2020-01-20 20:44:20', '2022-04-06 05:56:51'),
(63, 'Prof', 'Md. Qamruzzaman', '1961-08-09', '1981', NULL, '1982', '', '', '', '', '', 'chuadanga', NULL, '7200', 24, 'qzamanphysics61@gmail.com', '01721734078', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Bank Deposit', '2020-01-22 06:00:00', '121', 'DBBL', 'chuadanga', '1579674798.jpg', '1579674798.jpg', 1, 8, 8, '2020-01-22 18:33:18', '2021-06-03 07:43:44'),
(64, 'Prof', 'Dilruba Akhter Banu', '1956-03-01', '1977', NULL, '1978', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'dab_deya@yahoo.com', '01706363096', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Professor (Rtd.)', 'Prof. Md. Lutfor Rahman', 1, 2, '[\"3\", \"10\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579758171.jpg', '', 1, 8, 8, '2020-01-23 17:42:16', '2021-06-05 10:28:54'),
(65, 'Prof', 'Abul Kalam Fazlul Haque', '1964-03-14', '1985', NULL, '1986', '', '', '', '', '', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'fahque2001@ru.ac.bd', '01717905611', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Professor', '', NULL, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579772757.jpg', '', 1, 8, 8, '2020-01-23 17:51:34', '2021-06-03 12:02:03'),
(66, 'Prof', 'F Nazrul Islam', '1966-01-01', '1987', NULL, '1988', '', '', '', '', '', 'W/9/C RU Campus, Rajshahi University', NULL, '6205', 15, 'fnislam@ru.ac.bd', '01914254272', 'W/9/C RU Campus, Rajshahi University', NULL, '6205', 15, 'Teaching & Research', 'Professor', '', 1, 1, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579758992.jpg', '', 1, 8, 8, '2020-01-23 17:56:32', '2021-06-03 12:03:47'),
(67, 'Prof', 'Fahmida Parvin', '1978-12-16', '1999', NULL, '2000', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'fparvin@ru.ac.bd', '01716288441', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Professor', 'Md. Nagib Hasan', 2, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579759211.jpg', '', 1, 8, 8, '2020-01-23 18:00:11', '2021-06-03 12:10:11'),
(68, 'Prof', 'Irine Banu Lucy', '1966-01-01', '1987', NULL, '1988', '', '', '', '', '', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'lucy@ru.ac.bd', '01914254274', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Professor', 'Prof. Abdus Salam', 1, 2, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579759683.jpg', '', 1, 8, 8, '2020-01-23 18:08:03', '2021-06-03 12:02:37'),
(69, 'Mr', 'Khandker Md. Mahmudul Hasan', '1979-12-31', '2003', NULL, '2004', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'astomito@yahoo.com', '01715519470', 'Department of Physics, University of Rajshahi', NULL, '6205', NULL, 'Teaching & Research', 'Assistant Professor', '', 1, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1579759947.jpg', '', 1, 8, 8, '2020-01-23 18:12:27', '2021-06-03 12:18:30'),
(70, 'Prof', 'Md. Khalilur Rahman Khan', '1962-01-01', '1984', NULL, '1985', '', '', '', '', '', 'Deparment of Physics, University of Rajshahi', 'Bangladesh', '6205', 15, 'ykrkhan@yahoo.com', '01716175566', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Professor', '', 1, 1, '[\"3\", \"9\", \"12\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579760135.jpg', '', 1, 8, 8, '2020-01-23 18:15:35', '2022-09-05 10:46:07'),
(71, 'Dr', 'Laila Arjumand Banu', '1955-01-03', '1974', NULL, '1975', '', '', '', '', '', 'Deparment of Physics, University of Rajshahi-6205', NULL, '6205', 15, 'labanu.phys.ru.db@', '01721750594', 'Deparment of Physics, University of Rajshahi-6205', NULL, '6205', 15, 'Teaching & Research', 'Associate Professor (Rtd.)', '', NULL, 1, '[\"3\", \"10\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '', '', 1, 8, 8, '2020-01-23 18:18:32', '2021-06-03 13:04:25'),
(72, 'Mr', 'Md. Leaket Ali', '1981-01-01', '2006', NULL, '2007', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'leaketphy@ru.ac.bd', '01818380619', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Assistant Professor', 'Mst. Mousumi Khatun', 2, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579760578.jpg', '', 1, 8, 8, '2020-01-23 18:22:58', '2021-06-03 12:20:25'),
(73, 'Mr', 'Md. Masum Billah', '1980-12-31', '2002', NULL, '2003', '', '', '', '', '', 'Department of Physics, University of Rajshahi', 'Bangladesh', '6205', 15, 'masumphy@yahoo.com', '01719133853', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Associate Professor', '', NULL, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579760818.jpg', '', 1, 8, 8, '2020-01-23 18:26:58', '2022-08-17 20:53:13'),
(74, 'Prof', 'Md. Golam Mortuza', '1955-03-14', '1979', NULL, '1980', '', '', '', '', '', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'mgmortuza786@yahoo.com', '01721750942', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Professor (Rtd.)', '', NULL, NULL, '[\"3\", \"10\", \"12\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1579761312.jpg', '', 1, 8, 8, '2020-01-23 18:35:12', '2021-06-03 13:02:23'),
(76, 'Prof', 'Raihana Shams Islam', '1974-06-22', '1995', NULL, '', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'rsislam@ru.ac.bd', '01715181644', 'Jahangir Sharoni, Talaimari', NULL, '6204', 15, 'Teaching & Research', 'Professor', 'Prof. Saleh Hasan Naqib', NULL, 2, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579762026.jpg', '', 1, 8, 8, '2020-01-23 18:47:06', '2021-06-03 12:07:13'),
(77, 'Prof', 'Somnath Bhattacharjee', '1952-07-13', '1972', NULL, '1973', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'somnathru@gmail.com', '01914254281', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'Teaching & Research', 'Professor (Rtd.)', '', NULL, 2, '[\"3\", \"10\", \"12\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579762321.jpg', '', 1, 8, 8, '2020-01-23 18:52:01', '2021-06-03 12:41:23'),
(78, 'Prof', 'Saleh Hasan Naqib', '1970-03-08', '1992', NULL, '1993', '', '', '', '', '', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'salehnaqib@yahoo.com', '01715049589', 'Deparment of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching & Research', 'Professor', 'Prof. Raihana Shams Islam', NULL, 2, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1579763149.jpg', '', 1, 8, 8, '2020-01-23 19:05:49', '2021-06-03 12:04:55'),
(81, 'Prof', 'M Atiqur Rahman Patoary', '1980-01-01', '2001', NULL, '2002', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'atiqur_physics@ru.ac.bd', '01718279653', 'Vill-MirarBari, Post- MirarBari, P.S.- Razarhat', NULL, '5610', 60, 'Teaching & Research', 'Professor', 'Sumi Susmita Saifa', 2, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1580025934.jpg', '', 1, 8, 8, '2020-01-26 20:05:34', '2021-06-03 12:15:55'),
(79, 'Prof', 'Md. Monirul Haque', '1976-12-12', '1997', NULL, '1998', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'mhaque_phy@ru.ac.bd', '01716346268', 'Holding-06, Word-30, Binodpur Bazar, Motihar', NULL, '6206', 15, 'Teaching & Research', 'Professor', 'Mst. Ayasha Siddika', 1, 1, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1580014167.jpg', '', 1, 8, 8, '2020-01-26 16:49:27', '2021-06-03 12:09:12'),
(80, 'Dr', 'Monira Jannatul Kobra', '1984-10-02', '2007', NULL, '2008', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'mjkobra@ru.ac.bd', '01720488244', 'Vill- Lakhiarpara, Post-Kashim Bazar, P.S.-Sundarganj', NULL, '5631', 57, 'Teaching & Research', 'Associate Professor', 'Dr. Md. Saiful Islam', NULL, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1580022623.jpg', '', 1, 8, 8, '2020-01-26 18:57:52', '2021-06-03 12:21:39'),
(82, 'Mr', 'Md. Jahangir Alam', '1961-01-01', '1983', NULL, '', '', '', '', '', '', 'Department of Physics, Govt. Azizul Haque College, Bogura.', NULL, '5800', 14, 'jahangir101263@gmail.com', '01761862520', '', NULL, '', NULL, 'Teaching at College', 'Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1580105903.jpg', '', 1, 8, 8, '2020-01-26 22:12:50', '2021-06-03 07:43:44'),
(83, 'Prof', 'Md. Abdus Salam Azad', '1961-01-01', '1986', NULL, '1987', '', '', '', '', '', 'Department of Physics, Dinazpur Govt. College', NULL, '5200', 54, 'salamphy64@gmail.com', '01915508472', '', NULL, '', NULL, 'Teaching at College', 'Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1582809905.jpg', '', 1, 8, 8, '2020-01-26 22:17:30', '2021-06-03 07:43:44'),
(84, 'Mr', 'Md. Abdul Hye', '1981-01-01', '1984', NULL, '1985', '', '', '', '', '', 'Road No-5, House-47-A, Flat-B2, Dhanmondi R/A', NULL, '1209', 47, 'mdahye1@yahoo.com', '01713310499', 'Road No-5, House-47-A, Flat-B2, Dhanmondi R/A', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1580105825.jpg', '', 1, 8, 8, '2020-01-26 22:20:20', '2021-06-03 07:43:44'),
(85, 'Mr', 'Samir Kumar Deb', '1965-01-01', '1987', NULL, '', '', '', '', '', '', 'Department of Physics, Gov.BL College. Khulna.', NULL, '9201', 27, 'samirdev.2k@gmail.com', '01715008444', 'Department of Physics, Gov.BL College. Khulna.', NULL, '9201', NULL, 'Teaching', '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1580105790.jpg', '', 1, 8, 8, '2020-01-27 15:13:27', '2021-06-03 07:43:44'),
(86, 'Mr', 'Md. Mosharraf Hossain Musa', '1962-01-01', '1987', NULL, '', '', '', '', '', '', '1398/10B, Riazbug, KhilGaon Taltola', NULL, '1219', 47, 'musa67bd@yahoo.com', '01715026556', '1398/10B, Riazbug, KhilGaon Taltola', NULL, '1219', 47, 'ICT Professional', '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1580105757.jpg', '', 1, 8, 8, '2020-01-27 15:20:42', '2022-04-06 05:46:52'),
(87, 'Mr', 'M. Abdul Hannan Khan', '1963-01-01', '1988', NULL, '', '', '', '', '', '', 'Team Leader and Secretary HISP Bangladesh Foundation, 3rd Floor, House- 495, Road- 32, DOHS Mohakhali', NULL, '1206', 47, 'hannank@gmail.com', '01819239241', 'Flat- D3, House- 34, Road- 28(Old), Dhanmondi R/A', NULL, '1209', 47, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1580105728.jpg', '', 1, 8, 8, '2020-01-27 15:30:04', '2022-04-06 05:23:20'),
(88, 'Dr', 'Md. Khairul Alam', '1964-01-01', '1988', NULL, '1989', '', '', '', '', '', 'Department of Physics, Pabna University of Science & Technology', NULL, '6600', 13, 'khairulahc@yahoo.com', '01712659746', '', NULL, '', NULL, 'Teaching at University', 'Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1580105662.jpg', '', 1, 8, 8, '2020-01-27 15:33:37', '2021-06-03 07:43:44'),
(89, 'Ms', 'Ishrat Ara Keka', '1975-03-08', '1989', NULL, '', '', '', '', '', '', '196/1 Sultanabad, Ghoramara, Rajshahi', NULL, '6100', 15, 'ishrat_keka@yahoo.com', '01711934100', '', NULL, '', NULL, 'Teaching', 'Teacher', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1580105627.jpg', '', 1, 8, 8, '2020-01-27 15:38:56', '2021-06-03 07:43:44'),
(90, 'Ms', 'Shafaly Khatun', '1972-01-01', '1994', NULL, '', '', '', '', '', '', 'Rajshahi', NULL, '6201', 15, 'parvinshefaly@yahoo.com', '01710441697', '', NULL, '', NULL, 'Service', 'Principal Scientific Officer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1580105602.jpg', '', 1, 8, 8, '2020-01-27 15:42:31', '2022-04-06 07:56:29'),
(91, 'Mr', 'Selim Mahmud', '1974-01-01', '1996', NULL, '', '', '', '', '', '', 'Instructor, Bangladesh Politechnic Institute, Hetemkhan, Rajshahi.', NULL, '6000', 15, 'selimmahmud@hotmail.com', '01680504686', 'Instructor, Bangladesh Politechnic Institute, Hetemkhan, Rajshahi.', NULL, '6000', 15, 'Teaching', 'Instructor', '', NULL, 1, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1583218817.jpg', '', 1, 9, 9, '2020-01-27 15:46:14', '2021-06-03 07:43:44'),
(92, 'Mr', 'Pankaz Chandra Roy', '1974-01-01', '1996', NULL, '', '', '', '', '', '', 'Superintendent of Police (SP) , Bagherhat', NULL, '9300', 28, 'pankajroy74@gmail.com', '01718510037', '', NULL, '', NULL, 'Govt. Service', 'Superintendent of Police (SP)', '', 1, 1, '[\"3\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1583218844.jpg', '', 1, 8, 8, '2020-01-27 15:48:57', '2022-04-06 08:16:10'),
(93, 'Mr', 'M. Rakibul Hasan Sarkar', '1982-12-15', '2004', NULL, '2005', '', '', '', '', '', 'Bangladesh Naval Academy, Patenga', NULL, '1206', 8, 'mrhs1987@gmail.com', '01718785494', '', NULL, '', NULL, 'Bangladesh NAVY', 'Lieutenant Commander', 'Najnin Akhtar', 2, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1580105525.jpg', '', 1, 8, 8, '2020-01-27 15:51:23', '2021-06-03 07:43:44'),
(94, 'Mr', 'Md. Monjur Rana', '1985-06-30', '2007', '04064329', '2008', '04064329', '', '', '', '', 'P&A Department, Power Grid Company of Bangladesh Ltd., PGCB Bhaban, Level-3, Jahurul Islam City, Aftabnagar, Badda', NULL, '1212', 47, 'monjur4329@yahoo.com', '01720966133', 'Vill.: Garadaha, P. O.: Garadaha, Upa: Shahjadpur', NULL, '6770', 12, 'Service', 'Assistant Manager (HRM-2)', 'Jannatul Ferdaus Tasmia', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-07 18:00:00', '', '', '', '1580105424.jpg', '', 1, 8, 8, '2020-01-27 15:53:51', '2022-04-06 05:26:08'),
(95, 'Mr', 'Md. Rezaul Karim', '1991-01-01', '2013', NULL, '', '', '', '', '', '', 'Rajshahi University School, Rajshahi University', NULL, '6205', 15, 'rezaulphy09@gmail.com', '01723286277', 'Rajshahi University School, Rajshahi University', NULL, '6205', 15, 'Teaching', 'Lecturer', '', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1580105401.jpg', '', 1, 8, 8, '2020-01-27 15:56:48', '2021-06-03 07:43:44'),
(96, 'Mr', 'Md. Barik Mridha', '1983-12-31', '2007', '04024303', '2008', '04024303', '', '', '', '', 'Rajshahi College Teachers\' Quarter, Rajshahi College', 'Bangladesh', '6000', 15, 'barikrubd@gmail.com', '+8801712789817', 'Vill.: Pushinda, P.O.: Shaol, Upa.: Adamdighi', NULL, '5852', 14, 'Teaching', 'Assistant Professor', 'MST. SOBNOM MOSTARI', 2, NULL, '[\"3\"]', 3000, 'Cash', '2020-01-26 18:00:00', '', '', '', '1580111363.jpg', '1580111363.jpg', 1, 8, 8, '2020-01-27 19:49:23', '2022-08-10 07:52:30'),
(99, 'Mr', 'MD.ISMAIL HOSSEN', '2015-11-19', '2018', '14024425', '', '', '', '', '', '', 'CHAK JAMIRA, JAMIRA,PUTHIA', NULL, '6271', 15, NULL, '01739764330', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 1, NULL, 8, '2020-02-20 17:14:56', '2021-06-03 07:43:44'),
(100, 'Ms', 'Ayesha Tasnim', '1997-06-08', '2018', '15121221522', '', '', '', '', '', '', 'House-640, Sector-1, Uposhahar', NULL, '6203', 15, 'tasnimayesharu@gmail.com', '01701009273', 'House-640, Sector-1, Uposhahar', NULL, '6203', 15, 'Student', '', '', NULL, NULL, '[\"2\"]', NULL, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 1, NULL, 8, '2020-02-20 17:16:04', '2021-06-03 07:43:44'),
(101, 'Mr', 'Raziul Islam', '2031-08-19', '2019', '1510122147', '', '', '', '', '', '', 'Aguniatair khanpara, Sonatola', NULL, '5826', 14, 'aurnobphyru@gmail.com', '+8801728764337', 'Aguniatair Khanpara', NULL, '5826', 14, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:16:14', '2021-06-03 07:43:44'),
(102, 'Ms', 'Ayesha Tasnim', '1997-06-08', '2018', '15121221522', '', '', '', '', '', '', 'House-640, Sector-1, Uposhahar', NULL, '6203', 15, 'tasnimayesharu@gmail.com', '01701009273', 'House-640, Sector-1, Uposhahar', NULL, '6203', 15, 'Student', '', '', NULL, NULL, '[\"2\"]', NULL, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:17:22', '2021-06-03 07:43:44'),
(103, 'Mr', 'MD.MAHUMUDUL HASSAN MUKTAR', '1996-01-01', '2018', '1511122171', '', '', '', '', '', '', 'Kaligram Kayapara,Guata,Raninagur,Naogaon.', NULL, '6590', 19, 'muktarruphy@gmail.com', '01729958208', 'Kaligram Kayapara,Guata,Raninagur,Naogaon.', NULL, '6590', 19, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:17:59', '2021-06-03 07:43:44'),
(104, 'Mr', 'MD. MAHAMUDUJJAMAN', '1995-10-25', '2018', '1510822203', '', '', '', '', '', '', 'Dumurgacha, ward#07, post: Nakaihat', NULL, '5740', 57, 'mahamudujjamanr@gmail.com', '01750404087', 'Dumurgacha, ward#07, post:Nakaihat', NULL, '5740', 57, 'Student', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:19:31', '2021-06-03 07:43:44'),
(105, 'Mr', 'ISTIAK AHMED', '2025-12-19', '2018', '13034310', '', '', '', '', '', '', 'Vill : Muladuli, Post : Muladuli, Thana : Ishwardi', NULL, '6623', 13, 'istiak.ru@gmail.com', '01750454545', 'Vill : Muladuli, Post : Muladuli, Thana : Ishwardi', NULL, '6623', 13, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:20:22', '2021-06-03 07:43:44'),
(106, 'Mr', 'Naimul Islam', '2020-02-19', '2018', '1511122183', '2019', '1511122183', '', '', '', '', 'Natunhat Shekhpara, Joypurhat Sadar, Joypurhat', NULL, '5900', 17, 'naimulru@gmail.com', '01717600535', 'Natunhat Shekhpara, Joypurhat Sadar, Joypurhat', NULL, '5900', 17, 'Student', '', 'Mst. Sheren Akter', NULL, 1, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:20:41', '2021-06-03 07:43:44'),
(107, 'Mr', 'Ahsan Kobir', '1994-08-21', '2018', '1510522135', '', '', '', '', '', '', 'Senerhuda, Uthali', NULL, '7221', 24, 'ahsankobir.ru@gmail.com', '01960937629', 'Senerhuda, Uthali', NULL, '7221', 24, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-03-20 05:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:21:05', '2021-06-03 07:43:44'),
(108, 'Mr', 'ASISH KUMER MONDAL', '1995-12-20', '2018', '1510622167', '', '', '', '', '', '', 'Village: Nakipur,Post:Nakipur-9450,Thans:Shyamnagar,District:Satkhira', NULL, '9450', 21, 'asish.k.ru@gmail.com', '01751478575', 'Village: Nakipur,Post:Nakipur-9450,Thans:Shyamnagar,District:Satkhira', NULL, '9450', 21, 'Student', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:21:08', '2021-06-03 07:43:44'),
(109, 'Mr', 'RUBEL ALAMIN', '1995-12-05', '2018', '1510622176', '', '', '', '', '', '', 'Village: Puthia, Post Office: Purnimaganti, Thana/Upazila: Ullapara', NULL, '6760', 12, 'Rubelalaminphy@gmail.com', '+8801751759170', 'Village: Puthia, Post Office: Purnimaganti, Thana/Upazila: Ullapara', NULL, '6760', 12, 'Student', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:21:54', '2021-06-03 07:43:44'),
(110, 'Mr', 'MD.MAHUMUDUL HASSAN MUKTAR', '1996-01-01', '2018', '1511122171', '', '', '', '', '', '', 'kaligram Kayapara,Guata,Raninagur', NULL, '6590', 19, 'muktarruphy@gmail.com', '01729958208', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:23:28', '2021-06-03 07:43:44'),
(111, 'Mr', 'MD.HUMAUN KABIR', '2010-08-19', '2018', '14114415', '', '', '', '', '', '', 'Vill:Garabaria,P.O.:Kathuli,Upazila:Gangni,District:Meherpur', NULL, '7100', 22, 'ihkabirru@gmail.com', '01780997554', 'Vill:Garabaria,P.O.:Kathuli,Upazila:Gangni,District:Meherpur', NULL, '7100', 22, 'Students', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:23:32', '2021-06-03 07:43:44'),
(112, 'Mr', 'MD. SHAHID HOSSAIN', '2007-08-19', '2018', '1510622187', '', '', '', '', '', '', 'Purba Sindurna,Hatibanda', NULL, '5530', 55, 'Desultory.shahid@gmail.com', '01755185099', 'Purba Sindurna,Hatibanda', NULL, '5530', 55, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:23:42', '2021-06-03 07:43:44'),
(113, 'Ms', 'Nishat Rumman', '1995-12-22', '2018', '1512022137', '', '', '', '', '', '', 'Ukilpara(eidgahpara), naogaon sadar, naogaon', NULL, '6500', 19, 'nishatrummanruphy15@gmail.com', '01677452240', 'Ukilpara(eidgahpara), naogaon sadar, naogaon', NULL, '6500', 19, 'student', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:24:13', '2021-06-03 07:43:44'),
(114, 'Mr', 'MD PIAUS UDDIN', '1996-01-01', '2018', '1510622178', '', '', '', '', '', '', 'Rangamatia,kalikapur,jamnagor,bagatipara,natore.', NULL, '6410', 16, 'mdpiash144@gmail.com', '01767515854', 'rangamatia,kalikapur,jamnagor,bagatipara,natore.', NULL, '6410', 16, 'student', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:24:46', '2021-06-03 07:43:44'),
(115, 'Mr', 'MD. SHAKIBUL ISLAM', '1995-09-15', '2018', '1511022174', '', '', '', '', '', '', 'Mollapara, Kafuria, Dastanabad', NULL, '6260', 16, 'shakib15110@gmail.com', NULL, 'Mollapara, Kafuria, Dastanabad', NULL, '6260', 16, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:24:56', '2021-06-03 07:43:44'),
(116, 'Mr', 'Md.Nomanul Islam', '1995-10-17', '2018', '1510622146', '', '', '', '', '', '', 'vill: Hossainpur. Post: Ashrafpur.', NULL, '3632', 6, NULL, '01623583869', 'Vill: Hossainpur. Post: Ashrafpur', NULL, '3632', 6, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2018-05-06 05:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:25:16', '2021-06-03 07:43:44'),
(117, 'Ms', 'MST. FATEMA KHATUN RAJONI', '1995-02-13', '2018', '1512322165', '', '', '', '', '', '', 'Village: DEAR DHAN GORA, Post Office:SIRAJGONJ SADAR, Word:02', NULL, '6700', 12, 'fatemarajoni246@gmail.com', '01740730464', 'Village:DEAR DHAN GORA ,Post Office:SIRAJGONJ SADAR, Word:02', NULL, '6700', 12, 'Student', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '-', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:25:34', '2021-06-03 07:43:44'),
(118, 'Mr', 'Md. Shahidul Islam', '1980-11-19', '2002', NULL, '2003', '', '', '', '', '', 'BAGDUARPARA, ROHANPUR', NULL, '3456', 18, NULL, '01782969495', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582978273.jpg', '', 1, 8, 8, '2020-02-20 17:27:34', '2022-04-06 09:01:31'),
(119, 'Mr', 'SHAHJADA AL FAYSAL', '1996-12-25', '2018', '14094410', '', '', '', '', '', '', 'narindi', NULL, '2326', 45, 'faysal896@gmail.com', '01787378050', 'NARINDI', NULL, '2326', 45, 'STDUENT', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:27:42', '2021-06-03 07:43:44'),
(120, 'Ms', 'AJMERA KHANDOKER', '1997-05-03', '2018', '1512322172', '', '', '', '', '', '', 'KUMARGARA,KUSHTIA', NULL, '7002', 25, NULL, '01744925393', 'KUMARGARA,KUSHTIA', NULL, '7002', 25, 'STUDENT', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:27:51', '2021-06-03 07:43:44'),
(121, 'Ms', 'Nowshin  Anjum', '1997-01-01', '2018', '1512022110', '', '', '', '', '', '', 'Village+Post - Sonadaha , Thana -  Bagha ,  District-  Rajshahi.', NULL, '6203', 15, NULL, '01521105039', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"2\"]', NULL, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:28:29', '2021-06-03 07:43:44'),
(122, 'Ms', 'Mst. Parvin Akhter', '1966-06-14', '1987', '3229/87', '1988', '', '', '', '', '', 'Baneswar, Puthia', NULL, '6205', 15, NULL, '01788123925', 'Baneswar, Puthia', NULL, '6205', 15, 'Teacher', 'Ast. Teacher', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '', '', 1, 8, 8, '2020-02-20 17:28:35', '2022-04-06 08:40:20'),
(123, 'Ms', 'Shamima Khatun', '1996-11-02', '2018', '1512322112', '', '', '', '', '', '', 'Vill:Nowhata,Post:Nowhata,Thana:Paba,Rajshahi', NULL, '6210', 15, NULL, '01737028613', 'Vill:Nowhata,Post:Nowhata,Thana:Paba', NULL, '6210', 15, NULL, '', '', NULL, NULL, '[\"2\"]', 0, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:29:49', '2021-06-03 07:43:44'),
(124, 'Mr', 'Md. Jahangir Alam', '1986-05-14', '2007', NULL, '2008', '', '', '', '', '', 'House-1096, Road-6D, Avenue-8, Mirpur DOHS', NULL, '1216', 47, 'jahangirruphy@gmail.com', '0171797915', '', NULL, '', NULL, 'Teaching', 'Assistant Teacher', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582210361.jpg', '', 1, 8, 8, '2020-02-20 17:29:53', '2022-04-06 09:29:10'),
(125, 'Mr', 'Suzauddulah', '1997-12-05', '2018', '1511022215', '2019', '1511022215', '', '', '', '', 'Village: Khanchapara Post office: Kakilakura', NULL, '2130', 61, 'suzauddulah@gmail.com', '01777875985', 'Village: Khanchapara Post office: Kakilakura', NULL, '2130', 61, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:30:15', '2021-06-03 07:43:44'),
(126, 'Ms', 'Mst. Afsana Azam', '1989-05-19', '2011', NULL, '2012', '', '', '', '', '', 'DUET DORMITORY, DUET', NULL, '1234', 41, NULL, '01710002281', '', NULL, '', NULL, 'Teaching at University', 'Assistant Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582550177.jpg', '', 1, 8, 8, '2020-02-20 17:31:12', '2022-04-06 09:38:20'),
(127, 'Mr', 'MD. SHAKIBUL ISLAM', '1995-09-15', '2018', '1511022174', '', '', '', '', '', '', 'Mollapara, Kafuria, Dastanabad', NULL, '6260', 16, 'shakib15110@gmail.com', '01796069779', 'Mollapara, Kafuria, Dastanabad', NULL, '6260', 16, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:31:25', '2021-06-03 07:43:44'),
(128, 'Mr', 'Md. Emran Hossain', '1985-01-02', '2008', NULL, '2009', '', '', '', '', '', 'Dept. of Physics, Khulna University', NULL, '9208', 27, 'emranrubd@gmail.com', '01710440612', '', NULL, '', NULL, 'Teaching at University', 'Assistant Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582550574.jpg', '', 1, 8, 8, '2020-02-20 17:31:51', '2022-04-06 09:32:09'),
(129, 'Ms', 'Nirmin Fouzia', '1965-01-01', '1986', '2786', '1987', '3241', '', '', '', '', '117/01, Bihash, Binodpur bazar', NULL, '6206', 15, 'nirminshimel@gmail.com', '01673272933', '117/01, Bihash, Binodpur bazar', NULL, '6206', 15, 'Teaching', 'Asst. Teacher', 'Prof. Dr. Md. Rafiqul Ahsan', 1, 1, '[\"3\"]', 3000, 'Cash', '2013-03-29 18:00:00', '', '', '', '1582978039.jpg', '', 1, 8, 8, '2020-02-20 17:32:01', '2022-04-06 08:35:58'),
(130, 'Mr', 'Mahmudun Nabi Khan', '1964-02-20', '1981', NULL, '1982', '', '', '', '', '', 'Shenjuti, K.K. Roy Sharak, Rangamati Shadar', NULL, '4500', 4, 'mnk@gmail.com', '01811693093', '', NULL, '', NULL, NULL, '', 'Raihana Akhter', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582977923.jpg', '', 1, 8, 8, '2020-02-20 17:32:09', '2022-04-06 08:28:26'),
(133, 'Mr', 'MD.HUMAUN KABIR', '2010-08-19', '2018', '14114415', '', '', '', '', '', '', 'Vill:Garabaria,P.O.:Kathuli,Upazila:Gangni,District:Meherpur', NULL, '7100', 22, 'shrphyru@gmail.com', '01780997554', 'Vill:Garabaria,P.O.:Kathuli,Upazila:Gangni,District:Meherpur', NULL, '7100', 22, 'Students', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '1582176841.jpg', '1582176841.jpg', 0, NULL, NULL, '2020-02-20 17:34:01', '2021-06-03 07:43:44'),
(134, 'Mr', 'Samesh Chandra Mazumder', '2013-05-19', '1989', NULL, '1990', '', '', '', '', '', 'DPEO Office NILPHAMARI', NULL, '3456', 56, NULL, '01716872896', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582976989.jpg', '', 1, 8, 8, '2020-02-20 17:34:18', '2022-04-06 08:43:31'),
(135, 'Ms', 'Hasnat Rezia Sultana', '1967-04-25', '1990', NULL, '1991', '', '', '', '', '', 'Jahangirnagar University, Savar', NULL, '1342', 47, 'fahmed_ju@yahoo.com', '01818435564', 'Jahangirnagar University, Savar', NULL, '1342', 47, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2019-12-11 18:00:00', '', '', '', '1582976829.jpg', '', 1, 8, 8, '2020-02-20 17:35:12', '2022-04-06 08:45:58'),
(136, 'Mr', 'Mahafuzure Rhaman', '1986-01-01', '2007', NULL, '2008', '', '', '', '', '', 'House #43 Arjita para , Mohakhali', NULL, '1212', 47, 'rmahafuzure@yahoo.com', '01717865763', 'House# 43 Arjita para, Mohakhali', NULL, '1212', 47, 'Teaching', 'Teacher', 'Most. Sumaiya Akter', 1, 1, '[\"3\"]', 3000, 'Cash', '2018-07-11 18:00:00', '', '', '', '1582210699.jpg', '', 1, 8, 8, '2020-02-20 17:36:09', '2022-04-06 09:27:52'),
(137, 'Mr', 'A.N.M. Mahbubul Haque', '1958-02-14', '1981', NULL, '', '', '', '', '', '', 'Ka-86/1A, Al-hera Tower, Flat-6/D', NULL, '1229', 47, 'mahbubul666@gmail.com', '01711624650', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582976800.jpg', '', 1, 8, 8, '2020-02-20 17:36:24', '2022-04-06 08:27:23'),
(138, 'Mr', 'Abdul Qayum Mohammad Kibriya', '1956-05-19', '1980', NULL, '1981', '', '', '', '', '', 'LALMATIA LOTUS DHAKA', NULL, '3456', 47, NULL, '01711595466', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1583042754.jpg', '', 1, 8, 8, '2020-02-20 17:36:53', '2022-04-06 08:22:57'),
(139, 'Mr', 'Md. Abdul Jalil', '1986-01-01', '2006', NULL, '2007', '', '', '', '', '', 'RAJSHAHI', NULL, '6500', 15, NULL, '01717591955', '', NULL, '', NULL, 'TEACHER', '', 'MST.PAPIA NASRIN', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582976310.jpg', '', 1, 8, 8, '2020-02-20 17:38:03', '2022-04-06 09:19:00'),
(140, 'Mr', 'Md. Azizar Rahman', '1983-09-12', '2005', '02104391', '2006', '02104391', '2011', '02104391', '', '', 'Department Of Physics, BUET, Dhaka', NULL, '1000', 47, 'azizar@phy.buet.ac.bd', '01714658898', 'Village: Vimpur, Post Office: Vimpur, Thana/Upazila: Mohadevpur', NULL, '6500', 19, 'Teaching at University', 'Assistant Professor', 'Urfi Tabassum Rahman', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2013-07-02 18:00:00', '', '', '', '1582976272.jpg', '', 1, 8, 8, '2020-02-20 17:38:41', '2022-04-06 09:17:22'),
(141, 'Mr', 'Al Momin Md. Tanveer Karim', '1985-02-14', '2008', NULL, '2009', '', '', '', '', '', 'Dept. of Physics, RUET', NULL, '6204', 15, 'tanveerruphy@gmail.com', '01723006746', 'Dept. of Physics, RUET', NULL, '6204', 15, 'Teaching at University', 'Assistant Professor', '', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582550522.jpg', '', 1, 8, 8, '2020-02-20 17:38:48', '2022-04-06 09:31:24'),
(142, 'Mr', 'Md. Abdul Jalil', '1980-02-20', '2002', NULL, '2003', '', '', '', '', '', 'Chakvarunia', NULL, '5900', 17, 'jalilsrdar11@gamil.com', '01712487395', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-19 18:00:00', '', '', '', '1582976200.jpg', '', 1, 8, 8, '2020-02-20 17:38:56', '2022-04-06 09:00:40'),
(261, 'Mr', 'Biprodash Paul', '1965-02-26', '1999', NULL, '2000', '', '', '', '', '', 'Dhaka', NULL, '1205', NULL, NULL, '01738398560', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1582974641.jpg', '', 1, 8, 8, '2020-02-25 18:41:11', '2021-06-03 07:43:44'),
(145, 'Mr', 'KAUSHIK SAMADDER', '1999-08-25', '1989', NULL, '1995', '', '', '', '', '', 'kaushiknapartment dhaka', NULL, '3458', 62, NULL, NULL, '', NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:40:01', '2020-02-20 17:40:01'),
(146, 'Mr', 'A. N. M. Ariful Haque', '1973-02-20', '1996', NULL, '1997', '', '', '', '', '', 'NARAIL GOVT. VICTORIA COLLEGE', NULL, '7500', 23, 'anmarifulhaque@gmail.com', '01712508037', '', NULL, '', NULL, 'Teaching', 'Asst. Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582976160.jpg', '', 1, 8, 8, '2020-02-20 17:40:13', '2022-04-06 08:51:37'),
(147, 'Mr', 'Nasim Mohammad Raihen', '1970-01-01', '1994', '14658', '1996', '105', '', '', '', '', 'TEROKHADIA, RAJSHAHI CANTONMENT', NULL, '6000', 15, NULL, '01673990416', 'TEROKHADIA, RAJSHAHI CANTONMENT', NULL, '6000', 15, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582976125.jpg', '', 1, 8, 8, '2020-02-20 17:40:16', '2022-04-06 08:48:56'),
(149, 'Mr', 'Md. Jubair', '1985-02-20', '2010', NULL, '2011', '', '', '', '', '', 'Holding-88, Ward-20, Sultanabad Post: Ghoramara, Thana: Boalia', NULL, '6205', 15, 'jubair016@gmail.com', '01719404266', 'Holding-88, Ward-20, Sultanabad, Post: Ghoramara, Thana: Boalia', NULL, '6205', 15, 'Teaching at University', 'Assistant Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2012-12-24 18:00:00', '', '', '', '1582976086.png', '', 1, 8, 8, '2020-02-20 17:40:53', '2022-04-06 09:37:44'),
(150, 'Mr', 'S M Moniruzzaman', '1994-12-09', '2018', '14114392', '', '', '', '', '', '', 'Gonoir, Nachol, Chapainawabgonj', NULL, '6310', 18, 'smsujon0708@gmail.com', '017101368593', 'Gonoir, Nachol, Chapainawabgonj', NULL, '6310', 18, 'student', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '1582177341.jpg', '1582177341.jpg', 0, NULL, NULL, '2020-02-20 17:42:21', '2021-06-03 07:43:44');
INSERT INTO `members` (`id`, `title`, `name`, `date_of_birth`, `bachelor_year`, `bachelor_roll`, `masters_year`, `masters_roll`, `mphil_year`, `mphil_roll`, `phd_year`, `phd_roll`, `m_location`, `m_country`, `m_post_code`, `m_district`, `m_email`, `m_phone`, `p_location`, `p_country`, `p_post_code`, `p_district`, `occupation`, `designation`, `name_of_spouse`, `no_of_son`, `no_of_daughter`, `cat_of_member`, `amount`, `mode_of_payment`, `payment_date`, `transaction_id`, `bank_name`, `branch_name`, `image`, `signature`, `publication_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(151, 'Mr', 'Md. Aminul Islam', '1987-02-11', '2010', NULL, '2011', '', '', '', '', '', 'West Merul Badda', NULL, '2478', 13, NULL, '01717427516', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582976019.jpg', '', 1, 8, 8, '2020-02-20 17:42:28', '2022-04-06 09:36:46'),
(152, 'Ms', 'Soheli Parveen', '1980-01-01', '1998', NULL, '1999', '', '', '', '', '', 'RAJSHAHI', NULL, '6500', 15, 'soheliparveen@gmail.com', '01719977454', '', NULL, '', NULL, NULL, '', 'MD.Abdus Salam', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975988.jpg', '', 1, 8, 8, '2020-02-20 17:42:37', '2022-04-06 08:55:03'),
(153, 'Mr', 'Md. Atikul Islam', '1980-02-20', '2004', NULL, '2005', '', '', '', '', '', 'House No: 91/D/1, Road No: 7/A, Dhanmondi', NULL, '1209', 47, 'anondo.atik@gmail.com', '01755645181', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-19 18:00:00', '', '', '', '1582975956.jpg', '', 1, 8, 8, '2020-02-20 17:42:38', '2022-04-06 09:04:48'),
(155, 'Mr', 'Mosammat Rokhsana Hyder', '1965-01-01', '1989', NULL, '1990', '', '', '', '', '', 'House no.64(Shimui),Flat No.10.Road no.6/A ,Dhanmondi', NULL, '7221', 47, 'rokhsanahyder@gmail.com', '01552455066', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-07-11 05:00:00', '', '', '', '1582975923.jpg', '', 1, 8, 8, '2020-02-20 17:43:18', '2021-06-03 07:43:44'),
(157, 'Mr', 'Md. Masum Billah Azad', '1984-01-01', '2007', NULL, '2008', '', '', '', '', '', 'Rajshahi University of Engineering and Technology', NULL, '6204', 15, 'masum.billahazad@gmail.com', '01717591923', 'Rajshahi University of Engineering and Technology', NULL, '6204', 15, 'Service', 'Section Officer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582210757.jpg', '', 1, 8, 8, '2020-02-20 17:44:05', '2022-04-06 09:25:10'),
(158, 'Mr', 'Md. Zahurul Haque', '1963-02-20', '1986', NULL, '1987', '', '', '', '', '', 'Kalihati', NULL, '1976', 44, 'zhaquephy@gmail.com', '01716962746', 'Kalihati', NULL, '1976', 44, 'Teaching', 'Asst.Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975888.jpg', '', 1, 8, 8, '2020-02-20 17:44:17', '2022-04-06 08:34:56'),
(159, 'Mr', 'md.ashiqur rahman', '2005-10-19', '2018', '13044318', '', '', '', '', '', '', 'minapara,manikdia', NULL, '7110', 22, 'rahmanashiq330@gmail.com', '01773148473', 'minapara ,manikdia', NULL, '7110', 22, NULL, '', '', NULL, NULL, '[\"2\"]', 100, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:44:29', '2021-06-03 07:43:44'),
(275, 'Prof', 'S Q G Mahtabwally', '1940-02-27', '1960', NULL, '1962', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, NULL, '01711301331', 'Ashiana, Binodpur, Motihar', NULL, '6206', 15, 'Teaching and Research', 'Professor (Rtd.)', '', NULL, NULL, '[\"2\", \"10\", \"12\"]', 0, 'Cash', NULL, '', '', '', '1582783673.jpg', '', 1, 8, 8, '2020-02-27 16:39:26', '2021-06-05 10:10:55'),
(162, 'Mr', 'jamil uddin', '2020-02-02', '1998', NULL, '1999', '', '', '', '', '', 'khulna', NULL, '5676', 27, NULL, NULL, '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:44:51', '2021-06-03 07:43:44'),
(276, 'Prof', 'Khorshed Banu', '1940-01-01', '1960', NULL, '', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'khorshedbanu@yahoo.com', NULL, 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'Teaching and Research', 'Professor (Rtd.)', '', NULL, NULL, '[\"2\", \"10\", \"12\"]', 0, 'Cash', NULL, '', '', '', '1623049014.jpg', '', 1, 8, 8, '2020-02-27 16:40:57', '2021-06-07 06:56:54'),
(164, 'Mr', 'Ikbal Ahammod', '1985-01-01', '2007', '04094400', '2008', '04094400', '', '', '', '', 'Baharchara Sadar', NULL, '4700', 9, 'ikbalahammod@gmail.com', '01718386002', 'Vill.: Debipur, P. O.: Bamundi, Upa: Gangni', NULL, '7110', 22, 'Govt. Service', 'Officer (BSTI)', 'Shormina Yeasmin Luna', NULL, 1, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582698054.jpg', '', 1, 8, 8, '2020-02-20 17:45:37', '2022-04-06 09:24:11'),
(165, 'Mr', 'Md. Azadul Hoque', '1960-02-20', '1981', NULL, '1982', '', '', '', '', '', 'RAJSHAHI', NULL, '6500', 15, 'azadul 570@yahoo.com', '01711244570', '', NULL, '', NULL, 'Banker', 'DGM (Sonali Bank)', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975839.jpg', '', 1, 8, 8, '2020-02-20 17:45:38', '2022-04-06 08:25:34'),
(166, 'Mr', 'Md. Ashikur Rahman', '1985-01-01', '2009', NULL, '2010', '', '', '', '', '', 'INMP, AERE, GONOKBARI, ASHULIA, SAVAR', NULL, '1349', 47, NULL, '01717046779', '', NULL, '', NULL, 'Govt. Service', 'Scientific Officer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582550335.jpg', '', 1, 8, 8, '2020-02-20 17:45:59', '2022-04-06 09:35:25'),
(167, 'Mr', 'Md. Moshrakul Alam', '1985-11-02', '1997', '143276', '1998', '143276', '2000', '', '', '', 'Assistant Director, ROSC Project Director of Primary Education, Mirpur-2', NULL, '1205', 47, NULL, '01711262001', 'Assistant Director, ROSC Project Director of Primary Education, Mirpur-2', NULL, '', 47, 'Assistant Director,ROSE', '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975801.jpg', '', 1, 8, 8, '2020-02-20 17:47:17', '2022-04-06 08:54:14'),
(168, 'Mr', 'MD. MASUD RANA', '1994-12-12', '2018', '1510622180', '2019', '1510622180', '', '', '', '', 'DOGACHE, LO0LITNAGOR.', NULL, '0574', 15, 'masudrana271053@gmail.com', '01722905587', 'DOGACHE, LOLITNAGOR.', NULL, '0574', 15, 'STUDENT', '', '', NULL, NULL, '[\"2\"]', 200, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:47:19', '2021-06-03 07:43:44'),
(169, 'Mr', 'Md. Shahajahan Ali', '1995-12-01', '2009', '06064316', '2010', '06064316', '', '', '', '', 'Dept. of Physics, PUST', NULL, '6600', 13, 'shahajan199@yahoo.com', '01557349694', 'Village: Khudichoighaty, Post Office: Bagha', NULL, '6280', 15, 'Teaching at University', 'Assistant Professor', '', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582612553.jpg', '', 1, 8, 8, '2020-02-20 17:48:01', '2022-04-06 09:34:43'),
(170, 'Ms', 'Shampa Rani Das', '1966-04-05', '1989', NULL, '1990', '', '', '', '', '', '48/2, Miapara Main Road', NULL, '9000', 27, 'thegreatestsamarpan@gmail.com', '01712515307', '48/2, Miapara Main Road', NULL, '9000', 27, NULL, '', 'Dr. VIVEKANAND BISWAS', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2019-04-03 18:00:00', '', '', '', '1582975752.jpg', '', 1, 8, 8, '2020-02-20 17:51:15', '2022-04-06 08:42:30'),
(171, 'Mr', 'Md. Mufti Mahmud', '1971-02-20', '1995', NULL, '1996', '', '', '', '', '', 'UTTAR MILIK BAGHA, BAGHA BAZAR, BAGHA', NULL, '6280', 15, 'nafizmahamud@yahoo.com', '01733138845', '', NULL, '', NULL, 'Service', '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2012-02-19 18:00:00', '', '', '', '1582975711.jpg', '', 1, 8, 8, '2020-02-20 17:53:05', '2022-04-06 08:50:35'),
(172, 'Mr', 'Nibaran Chandra Das', '1965-04-12', '1987', NULL, '', '', '', '', '', '', 'SEUJAGARI PALPARA', NULL, '5800', 14, NULL, '01718864232', 'SEUJAGARI PALPARA', NULL, '5800', 14, 'Teaching', 'Lecturer', 'MUKTI RANI NANDI', 2, NULL, '[\"3\"]', 3000, 'Cash', '2013-02-19 18:00:00', '', '', '', '1583042977.jpg', '', 1, 8, 8, '2020-02-20 17:53:43', '2022-04-06 08:39:02'),
(173, 'Mr', 'md.ashiqur rahman', '2005-10-19', '2018', '13044318', '', '', '', '', '', '', 'minapara,manikdia', NULL, '7110', 22, 'rahmanashiq330@gmail.com', '01773148473', 'minapara ,manikdia', NULL, '7110', 22, NULL, '', '', NULL, NULL, '[\"2\"]', 0, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 17:54:31', '2021-06-03 07:43:44'),
(174, 'Mr', 'Md. Rafikul Islam', '1982-01-01', '2005', NULL, '2006', '', '', '', '', '', 'SAVAR', NULL, '3030', 47, NULL, '01729321240', 'SAME', NULL, '3030', 47, 'Govt. Service', 'Scientific Officer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582634126.jpg', '', 1, 8, 8, '2020-02-20 17:56:12', '2022-04-06 09:16:35'),
(175, 'Mr', 'Md. Shahinul Islam', '1979-04-04', '2002', NULL, '2003', '', '', '', '', '', 'KARMYKAL ROAD, SEUJGARI, BOGURA SADAR', NULL, '5800', 14, 'shahin.bcpsc@gmail.com', '01913018057', 'KARMYKAL ROAD, SEUJGARI, BOGURA SADAR', NULL, '5800', 14, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2019-12-11 18:00:00', '', '', '', '1582975561.jpg', '', 1, 8, 8, '2020-02-20 17:56:44', '2022-04-06 08:59:56'),
(176, 'Mr', 'Md. Atiqur Rahman', '1987-12-19', '2005', NULL, '2006SO', '', '', '', '', '', 'Sontospur, Alinagar, Gomastapur', NULL, '6300', 18, 'atiqurphysics90@gmail.com', '01719751390', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2022-06-19 18:00:00', '', '', '', '', '', 1, 8, 8, '2020-02-20 17:57:31', '2022-04-06 09:15:27'),
(177, 'Mr', 'Quazi Aminul Haque', '1961-01-01', '1981', NULL, '1982', '', '', '', '', '', 'Bunglow No.8, Port Officers Colony, Saltgola, Bandar', NULL, '4100', 8, 'aminul007008@yahoo.com', '01552425877', 'Bunglow No.8, Port Officers Colony, Saltgola, Bandar', NULL, '4100', 8, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975462.jpg', '', 1, 8, 8, '2020-02-20 17:59:09', '2022-04-06 08:24:33'),
(178, 'Ms', 'Nazia Sharmin Jenny', '1985-01-15', '2007', '04224394', '2008', '04224394', '', '', '', '', 'PHYSICAL INSTRUCTOR, DEPT. OF PHYSICAL EDUCATION, SYLHET AGRICULTURAL UNIVERSITY', NULL, '3100', 36, 'jenny-phy@gmal.com', '01731730022', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582210725.jpg', '', 1, 8, 8, '2020-02-20 18:00:27', '2022-04-06 09:23:33'),
(179, 'Mr', 'Shekhar Kumar Saha', '1960-02-20', '1981', NULL, '1982', '', '', '', '', '', 'STATION BAZAR,NOAPARA,ABHAYNAGAR,JESSORE', NULL, '7401', 20, 'shailygraphic@gmail.com', '01711299070', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975428.jpg', '', 1, 8, 8, '2020-02-20 18:02:03', '2022-04-06 08:23:51'),
(180, 'Mr', 'Md. Tawfiqur Rahman', '1965-08-19', '1989', NULL, '1991', '', '', '', '', '', 'UTTARA', NULL, '4567', 47, NULL, '01742371379', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975378.jpg', '', 1, 8, 8, '2020-02-20 18:02:35', '2022-04-06 08:41:41'),
(182, 'Mr', 'Md. Ebrahim Hossain', '1986-11-28', '2009', '06064383', '2010', '06064383', '', '', '', '', 'BENODPUR, SHIBGANG', NULL, '6342', 18, 'ebuphy@gmail.com', '01721663757', '', NULL, '', NULL, 'Banker', 'Senior Officer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2015-01-18 18:00:00', '', '', '', '1582550375.jpg', '', 1, 8, 8, '2020-02-20 18:03:14', '2022-04-06 09:33:55'),
(183, 'Mr', 'A T M Mostafa Kamal', '1966-01-01', '1986', '12876', '1987', '12876', '1988', '', '', '', 'Jalkor', NULL, '5402', 59, NULL, '01796244106', 'Jalkor', NULL, '5402', 59, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975343.jpg', '', 1, 8, 8, '2020-02-20 18:03:45', '2022-04-06 08:34:17'),
(184, 'Mr', 'Md. Jahangir Alam', '1992-01-01', '2003', NULL, '2004', '', '', '', '', '', 'HOUSE #02, ROAD #16, SECTOR #11, UTTARA', NULL, '1230', 47, NULL, '01715540487', 'HOUSE #02, ROAD #16, SECTOR #11, UTTARA', NULL, '1230', 47, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975310.jpg', '', 1, 8, 8, '2020-02-20 18:04:15', '2022-04-06 09:03:42'),
(185, 'Mr', 'Md. Harun-Or-Rashid', '1970-02-19', '1997', NULL, '1998', '', '', '', '', '', 'KURMITOLA', NULL, '6543', 47, NULL, '01716695103', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '', '', 1, 8, 8, '2020-02-20 18:06:30', '2022-04-06 08:52:43'),
(188, 'Ms', 'Mst. Mousumi Khatun', '1995-01-01', '2018', '1512222179', '', '', '', '', '', '', 'Taposhi Rabeya Hall', NULL, '6205', 15, 'mousumikhatun994@gmail.com', '01783009399', 'Sonkorpur, Chandonkotha, Tanore, Rajshahi', NULL, '6203', 15, NULL, '', '', NULL, NULL, '[\"2\"]', 0, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 0, NULL, NULL, '2020-02-20 18:08:05', '2021-06-03 07:43:44'),
(189, 'Mr', 'Md. Borhan Uddin', '1983-12-22', '2007', '03094398', '2008', '03094398', '', '', '', '', 'Department of CSE, International Islamic University, Chattogram, 154/A College Road, ,Chawkbazar', NULL, '4203', 8, 'borhan_phy@yahoo.com', '01718408788', 'Vill: Bhalatoir, Post: Bhabiuca, PS: Niamatpur', NULL, '6520', 19, 'Teaching', 'Assistant Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582210644.jpg', '', 1, 8, 8, '2020-02-20 18:08:19', '2022-04-06 09:22:59'),
(190, 'Mr', 'Md. Shams-ul Alam', '2012-03-19', '1995', NULL, '1996', '', '', '', '', '', 'PABNA', NULL, '7654', 13, NULL, '01716007016', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975220.jpg', '', 1, 8, 8, '2020-02-20 18:08:43', '2022-04-06 08:49:46'),
(191, 'Mr', 'Md. Rakibul Islam Talukder', '1964-01-01', '1986', NULL, '1987', '', '', '', '', '', 'Talukder Lodge, Muslim Para', NULL, '5000', 44, NULL, '01717363256', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975194.jpg', '', 1, 8, 8, '2020-02-20 18:09:08', '2022-04-06 08:32:58'),
(192, 'Mr', 'Md. Nazrul Islam', '1971-01-01', '1991', NULL, '1992', '', '', '', '', '', 'House #83, Road #6, Shekertek, Mohammadpur', NULL, '1207', 47, 'srdc.ceo@gmail.com', '01730700135', 'House #83, Road #6, Shekertek, Mohammadpur', NULL, '1207', 47, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975162.jpg', '', 1, 8, 8, '2020-02-20 18:10:04', '2022-04-06 08:47:28'),
(193, 'Mr', 'Bidhan Chandra Satiar', '1986-11-20', '2007', '04044350', '2008', '04044350', '', '', '', '', 'HAZINAGOR, NIAMATPUR', NULL, '6530', 19, 'biclhanph50@gmail.com', '01717807007', '', NULL, '', NULL, 'Teaching at College', 'Lecturer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2016-02-13 18:00:00', '', '', '', '1582210671.jpg', '', 1, 8, 8, '2020-02-20 18:10:06', '2022-04-06 09:22:03'),
(194, 'Mr', 'Md. Altab Hossain', '1960-09-19', '1986', NULL, '1987', '', '', '', '', '', 'Mirpur', NULL, '3456', 47, NULL, '01715260942', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975130.jpg', '', 1, 8, 8, '2020-02-20 18:10:20', '2022-04-06 08:31:25'),
(196, 'Mr', 'Md. Zehadul Islam', '1985-11-02', '2006', '124567', '2007', '1224567', '2008', '', '', '', 'Manager, Janata Bank Limited, Sherpur', NULL, '5880', 14, NULL, '01748582232', 'Manager, Janata Bank Limited, Sherpur', NULL, '5880', 14, 'Banker', 'Manager (Janata Bank)', 'NAZMEEN SULTANA', NULL, NULL, '[\"3\"]', 4500, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582975098.jpg', '', 1, 8, 8, '2020-02-20 18:14:02', '2022-04-06 09:18:30'),
(197, 'Dr', 'Sadiqur Rahman Malik', '1944-07-11', '1963', NULL, '1965', '', '', '', '', '', 'House no: 19, Road #14, Sector #6, Uttara', NULL, '1230', 47, 'smalik51@hotmail.com', '01749466998', 'House no: 19, Road #14, Sector #6, Uttara', NULL, '1230', 47, 'Radiation Oncology Physicist', 'Chief and Head of the Radiation Oncology Physicist', 'REHANA MALIK', 1, 1, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582723224.jpg', '', 1, 8, 8, '2020-02-20 18:14:34', '2022-04-06 08:20:20'),
(199, 'Mr', 'Sharif Md. Sharafuddin', '1969-05-25', '1990', NULL, '1991', '', '', '', '', '', 'Dept. of Physics, Shahjalal University of Science & Technology, Kumargaon', NULL, '3114', 36, 'sharif-phy@sust.edu', '01716308849', '', NULL, '', NULL, 'Teaching and Research', 'Professor', 'SHAKILA IMROZ', 1, 1, '[\"3\"]', 3000, 'Cash', '2019-12-22 18:00:00', '', '', '', '1582975025.jpg', '', 1, 8, 8, '2020-02-20 18:17:58', '2022-04-06 08:44:51'),
(200, 'Mr', 'Md. Rezaur Rahaman Tarafdar', '1984-01-01', '2005', NULL, '2006', '', '', '', '', '', 'Flat#6A, House#21, Road#09, Block#H, Section#02, Mirpur', NULL, '1216', 47, 'rezaur.dt@gmail.com', '01717256584', 'Flat#6A, House#21, Road#09, Block#H, Section#02, Mirpur', NULL, '1216', 47, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582974995.jpg', '', 1, 8, 8, '2020-02-20 18:18:01', '2022-04-06 09:14:22'),
(221, 'Mr', 'Md. Sarwar Jahan', '1984-03-03', '2007', NULL, '2008', '', '', '', '', '', 'Shibganj Sadar', 'Bangladesh', '6340', 18, NULL, '01712414260', '', NULL, '', NULL, 'Teaching', 'Head Teacher', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582209459.jpg', '', 1, 8, 8, '2020-02-21 02:37:39', '2022-08-10 08:08:13'),
(222, 'Mr', 'Nazmul hossain', '2006-11-19', '2018', '1510822120', '', '', '', '', '', '', 'Chamta, Naria, Naria, Shariatpur 8020', NULL, '8020', 42, 'nazmul.tasin2592@gmail.com', '01676176657', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"2\"]', 0, 'Cash', '2020-12-20 06:00:00', '', '', '', '', '', 1, NULL, 8, '2020-02-21 06:14:19', '2021-06-03 07:43:44'),
(202, 'Mr', 'Atiqul Islam', '1995-02-10', '2018', '14114419', '', '', '', '', '', '', 'village:char khar char post:tebir char Thana: sherpur zilla:sherpur', NULL, '2100', 61, 'atikphy.gmail.com', '01742500544', 'village:char khar char post:tebir char Thana: sherpur zilla:sherpur', NULL, '', NULL, 'student', 'no', '', NULL, NULL, '[\"2\"]', 0, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 1, NULL, 8, '2020-02-20 18:22:24', '2021-06-03 07:43:44'),
(203, 'Mr', 'Md. Nurul Alam', '1983-12-25', '2005', '02064358', '2006', '02064358', '', '', '', '', 'Vill: Firojabad, Post: Sopura, Boalia', NULL, '6203', 15, NULL, '01911065141', 'Vill: Firojabad, Post: Sopura, Boalia', NULL, '6203', 15, 'lecturer', '', 'Mrs. Fahimida Aktar', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2013-03-30 18:00:00', '', '', '', '1582974960.jpg', '', 1, 8, 8, '2020-02-20 18:24:34', '2022-04-06 09:13:32'),
(223, 'Mr', 'Md. Osman Goni', '1985-07-26', '2007', '04084342', '2008', '04084342', '', '', '', '', 'Vill.: Patulipara, P.O.: Bhangura, Thana: Bhangura', NULL, '6640', 13, NULL, '01722302255', 'Vill.: Patulipara, P.O.: Bhangura, Thana: Bhangura', NULL, '6640', 13, 'Banker', 'Senior Officer', 'Mahmuda Khatun', NULL, 2, '[\"3\"]', 3000, 'Cash', '2020-01-22 18:00:00', '', 'Dutch Bangla Bank', 'Dashuria', '1582290702.jpg', '', 1, 8, 8, '2020-02-22 01:11:42', '2022-04-06 09:20:47'),
(224, 'Mr', 'Mohidul islam', '1997-01-03', '2018', '1510822192', '', '', '', '', '', '', 'village:kota,Post office: Pairahat, Thana:abhaynagar', NULL, '7440', 20, 'mohidulislam5558@gmail.com', '01517123287', 'village:kota,Post office: Pairahat, Thana:abhaynagar', NULL, '7440', 20, NULL, '', '', NULL, NULL, '[\"2\"]', 0, 'Cash', '2020-02-02 06:00:00', '', '', '', '1582359191.jpg', '', 1, NULL, 8, '2020-02-22 20:13:11', '2021-06-03 07:43:44'),
(225, 'Mr', 'RAIHAN KABIR', '1995-03-13', '2018', '1510822128', '', '', '', '', '', '', 'Village: Rangtair, Post: Khajur, Upozilla: Mohadevpur, Zilla: Naogaon', NULL, '6530', 19, 'r.kabir01@pm.me', '01521116643', 'Village: Rangtair, Post: Khajur, Upozilla: Mohadevpur, Zilla: Naogaon', NULL, '6530', 19, NULL, '', '', NULL, NULL, '[\"2\"]', 0, 'Cash', '2020-02-12 06:00:00', '', '', '', '1582360789.jpg', '', 1, NULL, 8, '2020-02-22 20:39:49', '2021-06-03 07:43:44'),
(226, 'Prof', 'Shamsunnahar Islam', '1947-01-03', '1967', NULL, '1968', '', '', '', '1973', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, NULL, '01711079565', 'Jahangir Sharoni, Talaimari, Post- Kajla, Thana- Motihar', NULL, '6204', 15, 'Teaching and Research', 'Professor (Rtd.)', 'Prof. AKM Azharul Islam', NULL, 2, '[\"3\", \"10\", \"12\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582431794.jpg', '', 1, 8, 8, '2020-02-23 16:23:14', '2021-06-03 12:32:01'),
(227, 'Prof', 'Md. Obaidul Hakim', '1952-01-03', '1971', NULL, '1972', '', '', '', '1987', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'mohakimbd@yahoo.com', '01914254277', '239, Motihar Thana Road, Kazla, Motihar', NULL, '6204', 15, 'Teaching and Research', 'Professor (Rtd.)', '', NULL, NULL, '[\"3\", \"10\", \"12\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582432177.jpg', '', 1, 8, 8, '2020-02-23 16:29:37', '2021-06-03 12:40:33'),
(228, 'Prof', 'Md. Shafiqul Islam', '1951-01-01', '1971', NULL, '1972', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'shafiqulphyru@yahoo.com', '01714461428', 'Nusrona, 599, Samser Mollah Sarak, Kazla, Motihar', NULL, '6204', 15, 'Teaching and Research', 'Professor (Rtd.)', '', 1, 2, '[\"3\", \"10\", \"12\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582436211.jpg', '', 1, 8, 8, '2020-02-23 17:36:51', '2021-06-03 12:39:14'),
(212, 'Mr', 'Syed Shoaib Ahmed', '1960-05-10', '1984', NULL, '1985', '', '', '', '', '', 'H #44, Road #16, Dhanmondi', NULL, '1209', 47, 'shoaib.ahmed@gemcongroup.com', '01730351497', 'H #44, Road #16, Dhanmondi', NULL, '1209', 47, NULL, '', 'RAFFAT JAHAN', 2, NULL, '[\"3\"]', 3000, 'Cash', '2014-02-01 18:00:00', '', '', '', '1582974915.png', '', 1, 8, 8, '2020-02-20 18:34:38', '2022-04-06 08:30:23'),
(213, 'Mr', 'Md. Tarikul Nasir', '1987-02-20', '2010', NULL, '2011', '', '', '', '', '', 'BAUST Saidpur Canonment', NULL, '5310', 56, 'tarekphy@yahoo.com', '01710438243', '', NULL, '', NULL, 'Teaching at University', 'Lecturer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1582550234.jpg', '', 1, 8, 8, '2020-02-20 18:37:21', '2022-04-06 09:35:58'),
(214, 'Dr', 'Abu Abdullah Ziauddin Ahmad', '1938-11-24', '1958', NULL, '1960', '', '', '', '', '', 'Home 3, Road 9a, Dhanmondi', NULL, '1209', 47, 'aaz@bracu.ac.bd', '01199805434', 'Home 3, Road 9a, Dhanmondi', NULL, '1209', 47, 'Teaching and Research', 'Professor (Deceased)', 'MRS. SHAMIMA ZIAUDDIN', 2, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-20 18:00:00', '', '', '', '1583122235.jpg', '', 1, 8, 8, '2020-02-20 18:40:50', '2022-04-06 08:19:25'),
(215, 'Mr', 'Md. Sadikur Rahman', '1978-02-20', '1999', NULL, '2000', '', '', '', '', '', 'Urban Social Service Ofiice, Govt. College Road, Ukiler More', NULL, '5300', 56, 'sadikur02@gmail.com', '01833643520', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-02-19 18:00:00', '', '', '', '1582974859.jpg', '', 1, 8, 8, '2020-02-20 18:43:36', '2022-04-06 08:56:21'),
(216, 'Prof', 'Muhammad Nazrul Islam', '1945-05-02', '1966', '275', '1967', '387', '', '', '', '', '528, Manik Mia Road, Talimary, Post- Kajla, Thana- Motihar', NULL, '6204', 15, 'nazrul190@yahoo.com', '01732062170', '528, Manik Mia Road, Talimary, Post- Kajla, Thana- Motihar', NULL, '6204', 15, 'Teaching and Research', 'Professor (Rtd.)', '', NULL, NULL, '[\"3\", \"10\", \"12\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582181503.jpg', '', 1, 8, 8, '2020-02-20 18:51:43', '2021-06-03 12:28:47'),
(217, 'Mr', 'Atiqul Islam', '1995-02-10', '2018', '14114419', '', '', '', '', '', '', 'village:char khar char post:tebir char Thana: sherpur zilla:sherpur', NULL, '2100', 61, 'atikphy.gmail.com', '01742500544', 'village:char khar char post:tebir char Thana: sherpur zilla:sherpur', NULL, '', NULL, 'student', 'no', '', NULL, NULL, '[\"2\"]', 0, 'Cash', '2020-02-20 06:00:00', '', '', '', '', '', 1, NULL, 8, '2020-02-20 19:00:15', '2021-06-03 07:43:44'),
(218, 'Mr', 'Golam Maleque Dulal', '2019-12-22', '1987', NULL, '1988', '', '', '', '', '', '193/1, Bhuiapara, Meradia, Khilgaon', NULL, '1219', 47, 'gmmaleque@gmail.com', '01552414473', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-12-19 18:00:00', '', '', '', '1582974821.jpg', '', 1, 8, 8, '2020-02-20 19:06:21', '2022-04-06 08:37:50'),
(219, 'Mr', 'Md. Abdul Matin', '1985-12-19', '2002', NULL, '2003', '', '', '', '', '', 'RC4C+JMF, Dhaka-Jessore-Khulna Rd, Dumuria Zonal Office, Palli Bidyut Samity, Dumuria', 'Bangladesh', '9250', 27, 'mdmatinbabu@gmail.com', '01711953254', 'Vill.: Kripalpur, P.O.: Kumiradha, Upa.: Shailkupa', 'Bangladesh', '7320', 29, 'Service (PBS)', 'Deputy General Manager', 'MST SHAMSUNNAHAR TONU', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-10-19 18:00:00', '', '', '', '1582974791.jpg', '', 1, 8, 8, '2020-02-20 19:12:22', '2022-08-17 21:14:57'),
(229, 'Prof', 'Md. Aminul Islam', '1950-02-04', '1969', NULL, '1970', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'maislam2009@yahoo.com', '01713457109', '29, Lake Drive, Lake Horizon, Sector-7, Uttara', NULL, '1230', 47, 'Teaching & Research', 'Professor (Rtd.)', '', NULL, 1, '[\"3\", \"10\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582441610.jpg', '', 1, 8, 8, '2020-02-23 17:51:38', '2021-06-03 12:36:33'),
(230, 'Prof', 'Md. Mushfiqur Rahman', '1958-01-17', '1979', NULL, '1980', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'mrphy.ru.@gmail.com', '01818320400', '539, Dorikhorbona, Uposhohor More, Boalia', NULL, '6203', 15, 'Teaching & Research', 'Professor (Deceased)', '', 2, 1, '[\"3\", \"10\", \"12\"]', 3000, 'Cash', '2013-02-22 18:00:00', '', '', '', '1582437656.jpg', '', 1, 8, 8, '2020-02-23 18:00:56', '2021-06-03 12:52:45'),
(231, 'Prof', 'Md. Jamshed Ali Sarkar', '1958-01-17', '1970', NULL, '1971', '', '', '', '1998', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, NULL, '01733682448', 'Mohishbathan Uttarpara', NULL, '6201', 15, 'Teaching & Research', 'Professor (Rtd.)', '', 2, 2, '[\"3\", \"10\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582441583.jpg', '', 1, 8, 8, '2020-02-23 18:05:49', '2021-06-03 12:37:55'),
(232, 'Prof', 'Md. Samiul islam Sarker', '1979-01-06', '1999', NULL, '2000', '', '', '', '', '', 'Department of Physics, University of Rajshahi.', NULL, '6205', 15, 'samiul-phy@ru.ac.bd', '01716243620', 'Department of Physics, University of Rajshahi.', NULL, '6205', 15, 'Teaching & Research', 'Professor', '', 1, 1, '[\"3\", \"9\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582438415.JPG', '', 1, 8, 8, '2020-02-23 18:13:35', '2021-06-03 11:19:21'),
(233, 'Dr', 'Md. Alamgir Hossain', '1982-01-06', '2005', NULL, '2006', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'alamgir-ru07@yahoo.com', '01717291871', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'Teaching & Research', 'Asistant Professor', '', NULL, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582438783.JPG', '', 1, 8, 8, '2020-02-23 18:19:43', '2021-06-03 12:19:53'),
(234, 'Dr', 'Md. Ismail Hossain', '1983-10-22', '2005', '02054317', '2006', '02054317', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'ismail.phyru@yahoo.com', '01714557056', 'C/O. Md. Ayub Ali, Village+Post. Baigochha, Thana. Bagmora', NULL, '6250', NULL, 'Teaching & Research', 'Associate Professor', 'Dr. Naima Sultana', NULL, 1, '[\"3\", \"9\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582439954.jpg', '', 1, 8, 8, '2020-02-23 18:39:14', '2022-04-06 07:57:00'),
(235, 'Mr', 'Md. Abdur Rashid', '1982-08-13', '2005', NULL, '2006', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'rashidphysics18@ru.ac.bd', '01721336740', 'Bhimolpur, Rajarampur, Fulbari', NULL, '5260', 54, 'Teaching & Research', 'lecturer', '', NULL, 2, '[\"3\", \"9\"]', 3000, 'Cash', '2018-02-07 18:00:00', '', '', '', '1582441553.jpg', '', 1, 8, 8, '2020-02-23 18:46:33', '2021-06-03 11:29:22'),
(236, 'Mr', 'Md. Saifur Rahman', '1993-07-23', '2015', NULL, '2016', '', '', '', '', '', 'Department of Physics, Rajshahi University', NULL, '6205', 15, 'saifur.phy12@gimail.com', '01710437961', '40 Shahajipara, Rajshahi Court, Rajpara', NULL, '6201', 15, 'Teaching & Research', 'Lecturer', '', NULL, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2019-12-27 18:00:00', '', '', '', '1582441534.jpg', '', 1, 8, 8, '2020-02-23 18:49:34', '2022-04-06 09:39:45'),
(237, 'Ms', 'Mst. Dilara Pervin', '1986-10-10', '2008', NULL, '2009', '', '', '', '', '', 'Aerodrome Officer, Hazrat Shahmukhdum Airport, Poba, Rajshahi.', NULL, '6270', 15, 'mousumephy39@gmail.com', '01556648233', 'Rustummpur, Charghat, 6270, Rajshahi', NULL, '6270', NULL, 'Govt. Service', 'Aerodrome Officer (CAAB)', 'Md. Leaket Ali', 2, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-08 06:00:00', '', '', '', '1582442571.jpg', '', 1, 8, 8, '2020-02-23 19:20:18', '2021-06-03 07:43:44'),
(238, 'Ms', 'Mst. Nina', '1969-12-21', '1993', NULL, '1994', '', '', '', '', '', '3. Umesh Datta Road, Bakshibazar, Lalbagh, Dhaka', NULL, '1211', NULL, 'ninahossain69@gmail.com', '01715053367', 'Noor-Nagar, Khulna GPO, Khulna', NULL, '', NULL, 'Banker', 'Excutive Officer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-18 06:00:00', '', '', '', '1582538221.jpg', '', 1, 8, 8, '2020-02-23 19:28:37', '2021-06-03 07:43:44'),
(239, 'Mr', 'Md. Shakwat Hossain', '1984-06-06', '2007', '04094335', '2008', '04094335', '', '', '', '', 'Bogra Coronation Institution and College', NULL, '5880', 14, 'shakhwat_phy@yahoo.com', '01717514882', 'Vill.: Darail, Upa: Gabtali', NULL, '5820', 14, 'Teaching at College', 'Lecturer', 'Mst. Rojina Khatun', NULL, 1, '[\"3\"]', 3000, 'Cash', '2020-02-21 18:00:00', '', '', '', '1582457566.jpg', '', 1, 8, 8, '2020-02-23 23:32:46', '2022-04-06 09:20:00'),
(281, 'Dr', 'Kh Rezaul Karim', '1948-02-26', '1970', NULL, '', '', '', '', '', '', 'Department of Physics, Illinois State University, USA', NULL, '4100', 47, 'karim@ilstu.edu', '(309) 438-5070', '', NULL, '', NULL, 'Teaching and Research', 'Professor Emeritus', '', NULL, NULL, '[\"2\"]', 0, '', NULL, '', '', '', '1582980757.png', '', 0, NULL, NULL, '2020-03-01 00:52:37', '2021-06-03 07:43:44'),
(241, 'Mr', 'Md. Alauddin Al Azad', '1969-02-25', '1989', NULL, '', '', '', '', '', '', 'Associate Professor, Department of Physics Govt. Debendra Collecge Manikganj', NULL, '1804', 47, 'maalad@gmail.com', '01711325229', 'Associate Professor, Department of Physics Govt. Debendra Collecge Manikganj', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538537.jpg', '', 1, 8, 8, '2020-02-24 18:45:23', '2021-06-03 07:43:44'),
(242, 'Mr', 'Md. Shahnowaz', '1984-01-02', '2005', NULL, '2006', '', '', '', '', '', 'Khathal Baria, Puthia', NULL, '6260', 15, 'nowaz_phy_07@yahoo.com', '01722374750', 'Khathal Baria, Puthia', NULL, '6260', 15, 'Teaching at College', 'Lecturer', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538381.jpg', '', 1, 8, 8, '2020-02-24 18:57:19', '2021-06-03 07:43:44'),
(243, 'Mr', 'Md. Fatih Ul Hasan', '1986-10-10', '2009', NULL, '2010', '', '', '', '', '', 'Holding N. 400,  Gopalhathi, Puthia, 6260, Rajshahi', NULL, '6260', 15, 'rubel.phy.ru@gmail.com', '01744559514', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538338.jpg', '', 1, 8, 8, '2020-02-24 19:01:31', '2021-06-03 07:43:44'),
(244, 'Mr', 'Md. Toihidur Rahman', '1982-01-26', '2004', '10781', '2005', '10781', '', '', '', '', 'House#87, Laxmipur, GPO 6000, Rajshahi', 'Bangladesh', '6000', NULL, 'jaurnalisttawhid@gmail.com', '01712118547', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-24 18:00:00', '', '', '', '', '', 1, 8, 8, '2020-02-24 19:16:45', '2022-08-06 09:19:54'),
(245, 'Mr', 'Subhasish Sardar', '1979-02-25', '1999', NULL, '', '', '', '', '', '', 'Rooppur NPP Bhaban, 4 Kazi Nazrul Islam Avenue, Dhaka 1000.', NULL, '1000', 47, 'subha_baec@yahoo.com', '01558607409', 'Rooppur NPP Bhaban, 4 Kazi Nazrul Islam Avenue, Dhaka 1000.', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538780.jpg', '', 1, 8, 8, '2020-02-24 19:19:58', '2021-06-03 07:43:44'),
(246, 'Ms', 'Marium Farhana', '1980-03-28', '2001', NULL, '2003', '', '', '', '', '', 'C/O Manzur Murshed, House no. 196/A, Kazla, Motihar, 6205, Rajshahi.', NULL, '6205', 15, 'mariumfarhana@yahoo.com', '01717136252', '', NULL, '', NULL, 'Teaching', '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538503.jpg', '', 1, 8, 8, '2020-02-24 19:23:14', '2021-06-03 07:43:44'),
(247, 'Mr', 'Ataul Goni Md. Ramjan Ali', '1974-01-07', '1994', NULL, '1996', '', '', '', '', '', 'H/N# 244, Pathanpara, Boalia, Rajshahi, 6000', NULL, '6000', 15, 'ataulgoni@gmail.com', '01718309626', 'H/N# 244, Pathanpara, Boalia, Rajshahi, 6000', NULL, '', NULL, 'Teaching', '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538470.jpg', '', 1, 8, 8, '2020-02-24 19:29:16', '2021-06-03 07:43:44'),
(249, 'Ms', 'Monowara Begum', '1970-02-25', '1983', NULL, '1984', '', '', '', '', '', 'House No.-31, Road No.-7, Block-F, Banani', NULL, '1213', 47, NULL, '01713007259', '', NULL, '', NULL, NULL, '', 'Md. Abdul Wadud', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582809188.jpg', '', 1, 8, 8, '2020-02-24 19:31:59', '2021-06-03 07:43:44'),
(250, 'Mr', 'Prodip Kumar Mohonta', '1975-02-19', '1997', NULL, '1998', '', '', '', '', '', '118/2 Rani Pukur Sagor Para, Boalia, Rajshahi, Ghoramara 6200', NULL, '6200', NULL, 'pkmohonta@gmail.com', '01716961489', '118/2 Rani Pukur Sagor Para, Boalia, Rajshahi, Ghoramara 6200', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538439.jpg', '', 1, 8, 8, '2020-02-24 19:34:57', '2021-06-03 07:43:44'),
(251, 'Ms', 'Tamanna Sultana', '1981-01-01', '2004', '10797', '2005', '10797', '', '', '', '', 'Orbit, Flat 301, Road-02, Block-Ka, Pisciculture Housing, Mohammadpur, Dhaka', 'Bangladesh', '1208', 47, 'tamanna.sultana@ucb.com.bd', '01718442557', 'Orbit, Flat 301, Road-02, Block-Ka, Pisciculture Housing, Mohammadpur, Dhaka', NULL, '', NULL, 'Banker', '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-24 18:00:00', '', '', '', '1582538410.jpg', '', 1, 8, 8, '2020-02-24 19:38:22', '2022-08-06 09:14:47'),
(252, 'Mr', 'Mollah Md Abdul Hamid', '1980-02-25', '2006', NULL, '2007', '', '', '', '', '', 'Akij Collegiate School Navaron. Jhikorgacha, Jessore', NULL, '7400', 20, 'hamid123.ru.ac.bd@gmail.com', '01717591925', 'Akij Collegiate School Navaron. Jhikorgacha, Jessore', NULL, '', 20, 'Teaching', 'Lecturer in Physics', '', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-24 18:00:00', '', '', '', '1582538617.jpg', '', 1, 8, 8, '2020-02-24 20:18:29', '2022-05-24 22:12:07'),
(253, 'Mr', 'Sheikh Md Hafizul Bari', '1980-02-25', '1995', NULL, '1996', '', '', '', '', '', 'Assistant Professor, Physics Varendra Govt. College, Rajshahi.', NULL, '6200', 15, 'smhbari@yahoo.com', '01716311484', 'Assistant Professor, Physics Varendra Govt. College, Rajshahi.', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538845.jpg', '', 1, 8, 8, '2020-02-24 20:21:15', '2021-06-03 07:43:44'),
(254, 'Mr', 'Mohammad Mahmud Hasan', '1980-02-25', '1993', NULL, '1994', '', '', '', '', '', 'H/N#F/11, Extension Pallabi, Section 12, Miprur, Dhaka', NULL, '1216', 47, 'mh011524@gmail.com', '01819279743', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538812.jpg', '', 1, 8, 8, '2020-02-24 20:24:29', '2021-06-03 07:43:44'),
(255, 'Mr', 'Md. Tohurul Islam', '1985-02-25', '2009', NULL, '2010', '', '', '', '', '', 'Singair, Manikganj', NULL, '1804', 47, 'tohurulaueo@gmail.com', '01717725534', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538903.jpg', '', 1, 8, 8, '2020-02-24 20:27:31', '2021-06-03 07:43:44'),
(256, 'Ms', 'Shahin Ara Shapla', '1985-02-25', '2009', NULL, '2010', '', '', '', '', '', 'Swan Pride, 49/1 Toyenbee Circular Road, Wari, Dhaka', NULL, '1203', 47, 'shahin.ara.shapla@gmail.com', '01511402060', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538866.jpg', '', 1, 8, 8, '2020-02-24 20:30:02', '2021-06-03 07:43:44'),
(257, 'Mr', 'Md. Safiul Islam Sarker', '1970-02-25', '1998', NULL, '1999', '', '', '', '', '', 'Rangpur Govt. Technical School & College', NULL, '5402', 59, 'safiul_phy@yahoo.com', '01718506101', 'Rangpur Govt. Technical School & College', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582974698.jpg', '', 1, 8, 8, '2020-02-24 20:32:31', '2021-06-03 07:43:44'),
(258, 'Mr', 'Md. Selim Zaved Mia', '1970-02-25', '1998', NULL, '1999', '', '', '', '', '', 'Mofiz Paglar More, Jaleswaritola, Bogra-5800, Bogra', NULL, '5800', 14, 'shakil.bogra@gmail.com', '01710145181', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582977511.jpg', '', 1, 8, 8, '2020-02-24 20:35:38', '2021-06-03 07:43:44'),
(259, 'Mr', 'Kaushik Samadder', '1965-02-25', '1989', NULL, '1990', '', '', '', '', '', 'Kaushik Samadder Apartment # 5C, 2/2 Dilu Road, New Eskaton, Dhaka -1000', NULL, '1000', 47, 'kaushik.Samaddeer@gmail.com', '01713364001', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538696.jpg', '', 1, 8, 8, '2020-02-24 20:38:42', '2021-06-03 07:43:44'),
(260, 'Mr', 'Md. Jamal Uddin', '1965-02-25', '1998', NULL, '1999', '', '', '', '', '', '30/3, Karim Nagar Mosque Lane, Choto Boyra, Sonadanga, Khulna', NULL, '5880', 14, 'mjamaluddin100678@gmail.com', '01712138977', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-25 06:00:00', '', '', '', '1582538719.jpg', '', 1, 8, 8, '2020-02-24 20:41:08', '2021-06-03 07:43:44'),
(262, 'Dr', 'Md. Nuruzzaman', '1978-02-26', '2002', NULL, '2003', '', '', '', '', '', 'Dept of Physics, RUET', NULL, '6204', 15, NULL, '01713226648', '', NULL, '', NULL, 'Teaching at University', 'Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-03-08 06:00:00', '', '', '', '1582629139.jpg', '', 1, 8, 8, '2020-02-25 18:44:17', '2021-06-03 07:43:44'),
(263, 'Mr', 'Md. Shaiful Alam', '1960-02-26', '1983', NULL, '1984', '', '', '', '', '', 'Dhaka', NULL, '1207', NULL, NULL, '01712832679', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1582974556.jpg', '', 1, 8, 8, '2020-02-25 18:48:03', '2021-06-03 07:43:44'),
(264, 'Mr', 'Md. Abul Bashar', '1955-02-26', '1980', NULL, '1981', '', '', '', '', '', 'Dhaka', NULL, '1207', NULL, NULL, '01710806480', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1582974439.jpg', '', 1, 8, 8, '2020-02-25 18:51:20', '2021-06-03 07:43:44'),
(265, 'Dr', 'Md. Rasadujjaman', '1982-02-26', '2008', NULL, '2009', '', '', '', '', '', 'DUET Residential Area', NULL, '1207', 47, NULL, '01768851877', '', NULL, '', NULL, 'Teaching and Research', 'Associate Professor', '', 1, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1582628159.jpg', '', 1, 8, 8, '2020-02-25 18:53:06', '2021-06-03 07:43:44'),
(266, 'Mr', 'Md. Shah Azom', '1960-02-26', '1985', NULL, '1986', '', '', '', '', '', 'Dhaka', NULL, '1207', NULL, NULL, '01711246138', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1582974411.jpg', '', 1, 8, 8, '2020-02-25 18:57:31', '2021-06-03 07:43:44'),
(267, 'Ms', 'Amatuzzohra Khan', '1965-02-26', '1991', NULL, '1992', '', '', '', '', '', 'Dhaka', NULL, '1207', 47, NULL, '01552365383', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1583035797.jpg', '', 1, 8, 8, '2020-02-25 18:59:20', '2021-06-03 07:43:44'),
(268, 'Mr', 'Md. Ekramul Haque', '1945-02-26', '1970', NULL, '1971', '', '', '', '', '', 'Dhaka', NULL, '1207', NULL, NULL, '01711723186', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1583042640.jpg', '', 1, 8, 8, '2020-02-25 19:00:56', '2021-06-03 07:43:44'),
(269, 'Mr', 'Syed Shahriar Hossain', '1980-02-26', '2004', NULL, '2005', '', '', '', '', '', 'Dhaka', NULL, '1207', NULL, NULL, '01913845857', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '', '', 1, 8, 8, '2020-02-25 19:03:03', '2021-06-03 07:43:44'),
(270, 'Mr', 'Md. Ashraf Hossain', '1961-04-14', '1981', '2383', '1982', '2589', '', '', '', '', 'Jamuna Fertilizer Co. Ltd., Tarakandi, Sarishabari', NULL, '2055', 63, 'ashrafjfcl@gmail.com', '01710847421', 'Vill.-Atabari, P.O.-Shahbazpur, Upazila-Jamalpur Sadar', NULL, '2000', 63, 'Service', 'System Analyst', 'Kazi Kafia Zaman', 1, 1, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1583825230.jpg', '1583825230.jpg', 1, 8, 8, '2020-02-25 19:04:17', '2021-06-03 07:43:44'),
(271, 'Mr', 'Haridas Ghosh', '1958-02-26', '1981', NULL, '', '', '', '', '', '', 'Dhaka', NULL, '1207', NULL, NULL, '01719487115', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1582973590.jpg', '', 1, 8, 8, '2020-02-25 19:05:27', '2021-06-03 07:43:44'),
(272, 'Mr', 'SM Golam Faruque', '1958-02-26', '1988', NULL, '1989', '', '', '', '', '', 'Dhaka', NULL, '1207', NULL, 'smfaruque871@gmail.com', '01715251704', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1582973559.jpg', '', 1, 8, 8, '2020-02-25 19:06:40', '2021-06-03 07:43:44'),
(273, 'Mr', 'Md. Mozaharul Islam', '1957-02-26', '1980', NULL, '', '', '', '', '', '', 'Dhaka', NULL, '1207', NULL, NULL, '01715452682', '', NULL, '', NULL, NULL, '', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2018-02-26 06:00:00', '', '', '', '1582973518.jpg', '', 1, 8, 8, '2020-02-25 19:07:52', '2021-06-03 07:43:44'),
(274, 'Mr', 'Md. Riju Khandaker', '1992-02-20', '2015', NULL, '2016', '', '', '', '', '', 'Department of Physics, R.U.', NULL, '6205', 15, 'rkhandaker@ru.ac.bd', '01744978189', 'Monglakuti, Monglakuti, Pirgachha', NULL, '5721', 59, 'Teaching & Research', 'Lecturer', '', NULL, NULL, '[\"3\", \"9\"]', 3000, 'Cash', '2019-12-25 18:00:00', '', '', '', '1582623710.jpg', '', 1, 8, 8, '2020-02-25 21:41:50', '2021-06-03 11:27:31'),
(277, 'Prof', 'Md. Golam Mowla Choudhury', '1942-01-01', '1965', NULL, '1966', '', '', '', '', '', 'Department of Electronics and Telecommunication Engineering, Faculty of Engineering, Daffodil International University, 102, Shukrabad, Mirpur Road, Dhanmondi', NULL, '1207', 47, 'gmcw9f@yahoo.co.in', '01713493017', '', NULL, '', 47, 'Teaching & Research', 'Professor (Rtd.)', '', NULL, NULL, '[\"2\", \"10\"]', 0, 'Cash', NULL, '', '', '', '1582805997.jpg', '', 1, 8, 8, '2020-02-27 16:43:23', '2021-06-07 07:19:43'),
(278, 'Mr', 'Md. Nurul Islam', '1945-02-27', '1963', NULL, '1965', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, NULL, '01751630098', 'Ashiana, Binodpur, Motihar', NULL, '6206', 15, 'Teaching at University', 'Associate Professor (Rtd.)', '', 1, 1, '[\"2\", \"10\"]', 0, 'Cash', NULL, '', '', '', '1582803110.jpg', '', 1, 8, 8, '2020-02-27 16:45:12', '2021-06-05 10:11:25'),
(279, 'Prof', 'Md. Enamul Haque', '1950-02-27', '1972', NULL, '1973', '', '', '', '', '', 'Department of Physics, University of Rajshahi', NULL, '6205', 15, 'enamulphy@yahoo.com', '01711710161', 'Kajla, Motihar', NULL, '6204', 15, 'Teaching and Research', 'Professor (Rtd.)', '', NULL, NULL, '[\"2\", \"10\"]', 0, 'Cash', NULL, '', '', '', '1582802696.jpg', '', 1, 8, 8, '2020-02-27 16:47:09', '2021-06-03 13:10:13'),
(280, 'Mr', 'Md. Motiur Rahman', '1984-12-19', '2007', '04014345', '2008', '04014345', '', '', '', '', 'Village: Bashgari, P. O.: Narchi, P. S.: Sariakandi', NULL, '5830', 14, 'motiur025906@gmail.com', '01710459247', 'Village: Bashgari, P. O.: Narchi, P. S.: Sariakandi', NULL, '5830', 14, 'Teaching at College', 'Lecturer', 'Mst. Nurunnahar', 1, NULL, '[\"3\"]', 3000, 'Cash', '2020-03-03 06:00:00', '', '', '', '1582785712.jpg', '', 1, 8, 8, '2020-02-27 18:41:52', '2021-06-03 07:43:44'),
(282, 'Prof', 'Adel Miah', '1953-01-05', '1971', NULL, '1972', '', '', '', '', '', '5907 South Plum Street, Pine Bluff, Arkansas, USA', 'Bangladesh', '71603', 15, 'adelm@uapb.edu', '(870) 267-4278', '5907 South Plum Street, Pine Bluff, Arkansas, USA', NULL, '71603', NULL, 'Teaching and Research', 'Executive Vice President for Research, Humane Water', 'Marufa Adel', 2, 1, '[\"3\", \"11\"]', 8800, 'Cash', '2022-06-29 18:00:00', '', '', '', '1582981811.jpg', '1656584857.png', 1, 8, 8, '2020-03-01 01:10:11', '2022-09-05 11:00:28'),
(283, 'Dr', 'Ayesha Munim', '1945-02-26', '1970', NULL, '', '', '', '', '', '', 'Department of Physics, University of Dhaka', NULL, '1205', 47, NULL, NULL, '', NULL, '', NULL, 'Teaching and Research', 'Professor (Rtd.)', 'M. A. Munim', NULL, NULL, '[\"2\"]', 0, 'Cash', NULL, '', '', '', '', '', 0, 8, 8, '2020-03-01 01:23:59', '2021-06-03 07:43:44'),
(502, 'Mr', 'Minhajul Islam', '1995-01-01', '2015', '12064399', '2016', '12064399', '', '', '', '', 'Village: Komorgram (Uttarpara)\r\nPost: Baniapara-5900\r\nThana: Joypurhat Sadar\r\nUpazila: Joypurhat Sadar\r\nDistrict: Joypurhat', 'Bangladesh', '5900', 17, 'm.islam4399@gmail.com', '+8801758617641', 'Village: Komorgram (Uttarpara)\r\nPost: Baniapara-5900\r\nThana: Joypurhat Sadar\r\nUpazila: Joypurhat Sadar\r\nDistrict: Joypurhat', 'Bangladesh', '5900', 17, 'Government Service', 'Scientific Officer (SO)', 'Rumman Sultana Sony', NULL, NULL, '2', 0, '', NULL, '', '', '', '1663659242.jpg', '1663659242.jpg', 0, NULL, NULL, '2022-09-20 07:34:02', '2022-09-20 07:34:02'),
(286, 'Dr', 'Md. Kamruzzaman', '1981-08-10', '2003', '001714', '2004', '040911', '', '', '', '', 'Associate Professor, Department of Physics, Begum Rokeya University', NULL, '5400', 59, 'kzaman.phy11@gmail.com', '01771034439', 'Vill: Mithar Para, P.O.: Bagduar, Thana: Pirgonj', NULL, '5470', 59, 'Teaching and Research', 'Associate Professor', '', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2020-03-05 18:00:00', '', '', '', '1583757503.jpg', '1583757503.jpg', 1, 8, 8, '2020-03-09 23:38:23', '2022-04-06 09:02:41'),
(289, 'Mr', 'Md. Anwar Hossain Rasel', '1984-01-05', '2005', '02094433', '', '', '', '', '', '', '114, Laxmipur', NULL, '6000', 15, 'anwar.rasel.wd@gmail.com', '01716884686', '114, Laxmipur', NULL, '6000', 15, 'Business', 'SaReRa Corporation Owner', 'Farzana Tanzania Flora', NULL, 1, '[\"3\"]', 3000, 'Cash', '2021-02-09 18:00:00', '', '', '', '1612437424.jpg', '', 1, 8, 8, '2021-01-30 12:35:38', '2021-06-03 07:43:44'),
(296, 'Mr', 'Md. Abdul Hadi', '1972-12-01', '1992', '904171', '1993', '790', '2015', '10214', 'Ongoing', '1713022501', 'Daizy cottage, 246 Kazihata, GPO', NULL, '6000', 15, 'hadipab@gmail.com', '01716200042', '1233, Lepu Shipahi Road, Radhanagar', NULL, '6600', 13, 'Teaching', 'Associate Professor', 'Mahafuja Khatun', NULL, 1, '[\"3\"]', 3000, 'Bank Deposit', '2021-02-21 18:00:00', '00015788', 'Dutch-Bangla Bank Ltd', 'ATM both', '1614020802.jpg', '1614020802.jpg', 1, 8, 8, '2021-02-22 19:06:42', '2021-06-03 13:15:03'),
(292, 'Mr', 'Md. Shahidur Rahman', '1982-01-15', '2005', '0204-4407', '2006', '0204-4407', '', '', '', '', 'SHANGHAI UNITED INTERNATIONAL U.S SCHOOL, 599, pingji road,Minhang, Shanghai, China', NULL, '700200', 15, 'shahid.bisd@gmail.com', '+8613262815812', 'holding-92, house-55', NULL, '6203', 15, 'Teaching', 'Lecturer', 'Jannatul Ferdous', 1, 2, '[\"2\"]', 0, 'Cash', NULL, '', '', '', '1612836334.jpg', '1612836334.png', 0, 8, 8, '2021-02-09 02:05:34', '2021-06-03 07:43:44'),
(299, 'Dr', 'Ashim Kumar Bain', '1964-02-18', '1984', NULL, '1985', '', '', '', '1994', '', '101 Cyril Road Small Heath, Birmingham, UK', NULL, 'B10 0ST', NULL, 'akbain@yahoo.com', '07965219589', '101 Cyril Road Small Heath, Birmingham, UK', NULL, 'B10 0ST', NULL, 'Freelance Physicist', 'Ph.D, CPhys MInstP', '', NULL, NULL, '[\"2\"]', 0, 'Bank Deposit', NULL, '', '', '', '1615910373.jpg', '', 1, 8, 8, '2021-03-16 15:59:33', '2022-09-05 10:57:02'),
(480, 'Mr', 'Md. Abdul Monnaf', '1984-12-01', '2007', '04114352', '2008', '04114352', '', '', '', '', 'Maltinagar, Bogura Sadar', 'Bangladesh', '5800', 14, 'monnaf33351@gmail.com', '+8801722261912', 'Vill.: Bhaira, P.O.: Khordogojail, Upa.: Ullapara', 'Bangladesh', '6762', 12, 'Bangladesh Police', 'Inspector (Police)', 'Aliza Kakon', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2022-08-10 18:00:00', '', '', '', '1660143825.png', '', 1, 8, 8, '2022-08-10 15:03:45', '2022-08-11 04:50:25'),
(481, 'Dr', 'Sumal Chandra', '1982-02-01', '2007', '04044392', '2008', '04044392', '', '', '', '', 'Department of Physics, Mawlana Bhashani Science and Technology University, Santosh', 'Bangladesh', '1902', 44, 'sumalchandra@yahoo.com', '+8801773366801', 'Vill.: Dokhin Deb Khondo, P.O.: Jamgram, Upa.: Kahaloo', 'Bangladesh', '5881', 14, 'Teaching and Research', 'Assistant Professor', 'Ashru Rani Sarker', 1, 1, '[\"3\"]', 3000, 'Cash', NULL, '', '', '', '1660192641.jpg', '1660192641.png', 1, 8, 8, '2022-08-11 04:37:21', '2022-08-11 10:43:18');
INSERT INTO `members` (`id`, `title`, `name`, `date_of_birth`, `bachelor_year`, `bachelor_roll`, `masters_year`, `masters_roll`, `mphil_year`, `mphil_roll`, `phd_year`, `phd_roll`, `m_location`, `m_country`, `m_post_code`, `m_district`, `m_email`, `m_phone`, `p_location`, `p_country`, `p_post_code`, `p_district`, `occupation`, `designation`, `name_of_spouse`, `no_of_son`, `no_of_daughter`, `cat_of_member`, `amount`, `mode_of_payment`, `payment_date`, `transaction_id`, `bank_name`, `branch_name`, `image`, `signature`, `publication_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(303, 'Mr', 'Md. Kamrul Hasan', '1984-03-01', '2007', '04054386', '2008', '04054386', '', '', '', '', 'House 29 Shahibag', NULL, '6300', 18, 'kamrul.phy@gmail.com', '01713764838', 'House 29 Shahibag', NULL, '6300', 18, 'Service (Banker)', 'Principal Officer', 'Most. Masrura Akhtar', NULL, NULL, '2', 0, '', NULL, '', '', '', '1623857051.jpg', '', 0, NULL, 8, '2021-06-16 15:24:11', '2021-06-28 05:18:45'),
(425, 'Mr', 'dsfsdfsdf', '2022-04-08', NULL, NULL, '', '', '', '', '', '', 'dfsdfsdfdsfsdf', NULL, '1600', NULL, NULL, NULL, 'fdsdf', NULL, '1600', 2, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', '1650509250.png', '', 0, NULL, NULL, '2022-04-21 02:47:30', '2022-04-21 02:47:30'),
(392, 'Mr', 'Md. Nazmul Hamid Reza', '1986-06-02', '2008', '05034306', '2009', '05034306', '', '', '', '', 'H-267,W-15 Kadirganj Darikhorbona', NULL, '6202', 15, 'nazmulhamid@gmail.com', '01717291691', 'H-267,W-15 Kadirganj Darikhorbona', NULL, '6202', 15, 'BCS(Administration)', 'Senior Assistant Secretary', 'Nahid Hasan Tisha', 1, NULL, '[\"3\"]', 3000, 'Cash', '2022-01-18 18:00:00', '', '', '', '1642593079.jpg', '1642593079.jpg', 1, 8, 8, '2022-01-19 11:51:19', '2022-01-27 13:03:53'),
(479, 'Dr', 'Nusrat Jahan', '1983-12-31', '2005', '02204319', '2006', '02204319', '', '', '', '', 'Associate Professor, Department of Physics, Chittagong University of Engineering and Technology (CUET)', 'Bangladesh', '4349', 8, 'nusrat83@cuet.ac.bd', '+8801744273653', 'House-82, Sheroil shantibag, Ghoramara, Boalia', 'Bangladesh', '6100', 15, 'Teaching (CUET)', 'Associate Professor', 'Professor Quazi Delwar Hossain', 1, NULL, '[\"3\"]', 3000, 'Cash', '2022-08-09 18:00:00', '', '', '', '1660108492.jpg', '1660108492.jpg', 1, 8, 8, '2022-08-10 05:14:52', '2022-08-10 06:31:51'),
(478, 'Mr', 'Mohammad Abu Taher', '1984-01-15', '2007', '04094327', '2008', '04094327', '', '', '', '', 'Deputy Director (Administration), Khulna Power Station, Bangladesh Power Development Board, Khulna', 'Bangladesh', '9000', 27, 'tuhin15khan@gmail.com', '+8801716853005', 'Vill.: Kripalpur, P.O.: Kumiradha, Upa.: Shailkupa', 'Bangladesh', '7320', 29, 'Govt. Service (PDB)', 'Deputy Director (Administration)', 'Jasmin Khanam', 1, NULL, '[\"3\"]', 3000, 'Cash', '2022-08-07 18:00:00', '', '', '', '1659883908.jpeg', '', 1, 8, 8, '2022-08-07 14:51:48', '2022-08-17 21:14:15'),
(477, 'Dr', 'Md. Ashraf Ali', '1986-11-16', '2008', '05084331', '2009', '05084331', '', '', '', '', 'Associate Professor,\r\nDepartment of Physics,\r\nChittagong University of Engineering and Technology (CUET)', 'Bangladesh', '4349', 8, 'ashrafphy31@cuet.ac.bd', '+8801710244220', 'Associate Professor,\r\nDepartment of Physics,\r\nChittagong University of Engineering and Technology (CUET)', 'Bangladesh', '4349', 8, 'Teaching and Research', 'Associate Professor', 'Nazma Khatun', 1, 112, '[\"3\"]', 3000, 'Cash', '2022-08-06 18:00:00', '', '', '', '1659862344.jpg', '1659862344.jpg', 1, 8, 8, '2022-08-07 08:52:24', '2022-08-08 20:41:26'),
(314, 'Prof', 'Ahmad Husain', '1935-01-01', '1954', NULL, '', '', '', '', '', '', 'Dhaka', NULL, '6300', 47, NULL, NULL, '', NULL, '', NULL, 'Teaching and Research', 'Professor (Rtd.) (Deceased)', '', NULL, NULL, '[\"10\", \"12\"]', 0, 'Cash', NULL, '', '', '', '1629639797.jpg', '', 0, 8, 8, '2021-08-22 13:43:17', '2021-11-29 12:45:10'),
(498, 'Ms', 'DominicNoropypefleme', '1977-11-11', '1992', NULL, '1995', '', '1997', '', '1988', '', 'loveplanet.gq', NULL, '145152', 18, 'defltorch@yandex.com', '89229831654', 'loveplanet.gq', '', '143414', 64, 'loveplanet.gq', '', 'DominicNoropypefleme', 3309, 9320, '10', 131121, 'TT', '1978-11-11 18:00:00', '', 'DominicNoropypefleme', 'DominicNoropypefleme', '', '', 0, NULL, NULL, '2022-09-18 03:07:03', '2022-09-18 03:07:03'),
(497, 'Dr', 'ilysawqeewvBem', '1978-10-12', '1997', NULL, '1989', '', '1987', '', '1980', '', 'Россия', NULL, '141225', 57, 'pasaxcmaev@yandex.ru', '89548152565', 'Россия', '', '151332', 50, 'Media', '', 'ilysawqeewvBem', 5568, 196, '10', 114411, 'Bank Deposit', '1976-12-11 18:00:00', '', 'ilysawqeewvBem', 'ilysawqeewvBem', '1662820617.gif', '', 0, NULL, NULL, '2022-09-10 14:36:57', '2022-09-10 14:36:57'),
(485, 'Mr', 'Md. Abdul Hadi Shah', '1983-06-10', '2006', '03014306', '2007', '03014306', '', '', '', '', 'Assistant Professor, Dept. of Physics, Rajshahi University of Engineering and Technology', 'Bangladesh', '6204', 15, 'hadiphys@gmail.com', '01717591950', 'Village: Chakbhabani, P.O.: Napitpara, Upazilla: Manda', 'Bangladesh', '6510', 19, 'Teaching at RUET', 'Assistant Professor', 'Sharmin Afrozz', NULL, 1, '[\"3\"]', 3000, 'Cash', '2018-03-21 18:00:00', '', '', '', '1661267560.jpg', '1661267560.jpg', 1, 8, 8, '2022-08-23 15:12:40', '2022-08-24 10:52:36'),
(499, 'Mr', 'Test', '1996-10-10', NULL, NULL, '', '', '', '', '', '', 'Check Address', 'Bangladesh', '6330', 18, 'morshalinislam61@gmail.com', '+8801792747486', '', '', '', NULL, NULL, '', '', NULL, NULL, '2', 0, '', NULL, '', '', '', '', '', 1, NULL, 8, '2022-09-19 15:29:52', '2022-09-20 04:48:36'),
(436, 'Mr', 'Md. Abu Jafar', '1982-10-08', '2006', '02044420', '2007', '02044420', '', '', '', '', 'Flat- 2A, House- 2/1, Road- 02, South Mollartek, Dakshinkhan, Uttara', NULL, '1230', 47, 'Jafarphy50@gmail.com', '+8801722777503', 'Vill- Nepal Para, PO- Darusha, PS- Kornahar (RMP), Upazilla- Paba', NULL, '6210', 15, 'Teaching at Armed Police Battalion College', 'Lecturer in Physics', 'Ishita Rubaiyat Akhtar', 1, NULL, '[\"3\"]', 3000, 'Bank Deposit', '2022-05-18 18:00:00', 'TXN21794', 'Community Bank', 'Uttara, Dhaka', '1653321096.jpg', '1653321096.jpg', 1, 8, 8, '2022-05-23 15:51:36', '2022-05-24 22:10:06'),
(423, 'Mr', 'krishi-library', '2012-02-12', NULL, NULL, '', '', '', '', '', '', 'wafaq,fsadv', NULL, '6400', NULL, NULL, '+8801735595997', '', NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', '', '', 0, NULL, NULL, '2022-03-28 06:03:01', '2022-03-28 06:03:01'),
(496, 'Ms', 'Kennethfaf', '1978-12-10', '1997', NULL, '1984', '', '1995', '', '1996', '', 'Papua New Guinea', NULL, '115245', 49, 'k.a.ren.av.e.ti.san455.@gmail.com', '84715735938', 'Papua New Guinea', '', '135451', 42, 'Customer', '', 'Kennethfaf', 5997, 1414, '9', 154352, 'Bank Deposit', '1976-12-10 18:00:00', '', 'Kennethfaf', 'Kennethfaf', '', '', 0, NULL, NULL, '2022-09-09 14:34:26', '2022-09-09 14:34:26'),
(492, 'Mr', 'Md. Abul Kalam Azad', '1987-01-06', '2007', '04094312', '2007', '04094312', '', '', '', '', 'Chhianir Alaka, Ward-20, Bogura Pauroshova', 'Bangladesh', '5800', 14, 'azadphysicsru111@gmail.com', '+8801714546111', 'Chhianir Alaka, Ward-20, Bogura Pauroshova', 'Bangladesh', '5800', 14, 'Banker (JBL)', 'Principal Officer (JBL)', 'Mst. Shahnaz Sharmin', NULL, 2, '[\"3\"]', 3000, 'Cash', '2022-09-05 18:00:00', '', '', '', '1662369389.png', '', 1, 8, 8, '2022-08-31 10:10:38', '2022-09-05 09:17:14'),
(472, 'Dr', 'Pretam Kumar Das', '1986-08-06', '2008', '05104349', '2009', '05104349', '', '', '', '', 'Department of Physics, Pabna University of Science and Technology (PUST), Pabna.', 'Bangladesh', '6600', 13, 'pretam_phy@pust.ac.bd', '+8801744356879', 'Flat No. 6C, Swapno Bari, Radhanagar, Pabna Sadar, Pabna.', 'Bangladesh', '6600', 13, 'Teaching and Research', 'Associate Professor', 'Shethe Deb', NULL, NULL, '[\"3\"]', 3000, 'Cash', '2022-07-22 18:00:00', '', '', '', '1658568983.JPG', '', 1, 8, 8, '2022-07-23 09:36:23', '2022-08-07 07:52:35'),
(501, 'Mr', 'Minhajul Islam', '1995-01-01', '2015', '12064399', '2016', '12064399', '', '', '', '', 'Village: Komorgram (Uttarpara)\r\nPost: Baniapara-5900\r\nThana: Joypurhat Sadar\r\nUpazila: Joypurhat Sadar\r\nDistrict: Joypurhat', 'Bangladesh', '5900', 17, 'm.islam4399@gmail.com', '+8801758617641', 'Village: Komorgram (Uttarpara)\r\nPost: Baniapara-5900\r\nThana: Joypurhat Sadar\r\nUpazila: Joypurhat Sadar\r\nDistrict: Joypurhat', 'Bangladesh', '5900', 17, 'Government Service', 'Scientific Officer (SO)', 'Rumman Sultana Sony', NULL, NULL, '2', 0, '', NULL, '', '', '', '1663657590.jpg', '1663657590.jpg', 0, NULL, NULL, '2022-09-20 07:06:30', '2022-09-20 07:06:30'),
(495, 'Dr', 'Japlump', '1976-10-12', '1994', NULL, '1998', '', '1982', '', '1993', '', 'Россия', NULL, '132252', 42, 'kiraseevitch@yandex.ru', '82954524512', 'Россия', '', '124522', 55, 'Масштаб в Автокад', '', 'Japlump', 4154, 5304, '3', 114545, 'TT', '1977-11-09 18:00:00', '', 'Japlump', 'Japlump', '', '', 0, NULL, NULL, '2022-09-07 21:05:51', '2022-09-07 21:05:51'),
(503, 'Mr', 'Minhajul Islam', '1995-01-01', '2015', '12064399', '2016', '12064399', '', '', '', '', 'Bangladesh Atomic Energy Regulatory Authority (BAERA),\r\nE-12/A, Shahid Shahabuddin Shorok, Agargaon, PO Box Number-240', 'Bangladesh', '1207', 47, 'minhaj@baera.gov.bd', '+8801758617641', 'Village: Komorgram (Uttarpara), Post: Baniapara-5900, Thana/Upazila: Joypurhat Sadar', 'Bangladesh', '5900', 17, 'Government Service', 'Scientific Officer (SO)', 'Rumman Sultana Sony', NULL, NULL, '3', 3000, 'Cash', '2022-09-24 18:00:00', '', '', '', '1664073510.jpg', '1664073510.jpg', 0, NULL, NULL, '2022-09-25 02:38:30', '2022-09-25 02:38:30'),
(504, 'Prof', 'Frankiezoomy', '1977-12-12', '1980', NULL, '1992', '', '1990', '', '1995', '', 'Greenland', NULL, '123432', 47, 'mariusz.rosa2022@wp.pl', '84246865174', 'Greenland', '', '125455', 32, 'Relations', '', 'Frankiezoomy', 4655, 5829, '12', 113455, 'TT', '1977-12-09 18:00:00', '', 'Frankiezoomy', 'Frankiezoomy', '', '', 0, NULL, NULL, '2022-10-12 00:06:36', '2022-10-12 00:06:36'),
(505, 'Ms', 'DanielWasse', '1975-10-10', '1987', NULL, '1998', '', '1988', '', '1987', '', 'Brazil', NULL, '135552', 2, 'mokoean971@gmail.com', '88823533797', 'Brazil', '', '142411', 40, 'Service', '', 'DanielWasse', 4650, 5628, '6', 122232, 'Check DD', '1975-10-10 18:00:00', '', 'DanielWasse', 'DanielWasse', '', '', 0, NULL, NULL, '2022-10-12 14:15:22', '2022-10-12 14:15:22'),
(506, 'Prof', 'Darrellunore', '1976-11-10', '1982', NULL, '1980', '', '1982', '', '1983', '', 'Lithuania', NULL, '144123', 21, 'dom@leow.ru', '81964949885', 'Lithuania', '', '154433', 20, 'Estate', '', 'Darrellunore', 8546, 5454, '3', 131325, 'TT', '1979-12-09 18:00:00', '', 'Darrellunore', 'Darrellunore', '', '', 0, NULL, NULL, '2022-10-12 23:41:13', '2022-10-12 23:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `member_images`
--

CREATE TABLE `member_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `member_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

CREATE TABLE `member_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcription_fee` int(11) DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_types`
--

INSERT INTO `member_types` (`id`, `name`, `subcription_fee`, `publication_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Alumni', 0, 1, 1, 6, '2019-12-05 11:28:10', '2020-02-20 17:44:28'),
(3, 'Life Member', 3000, 1, 1, 6, '2019-12-07 04:14:27', '2020-01-05 20:45:44'),
(6, 'Associate Member', 3000, 1, 6, 6, '2020-01-02 10:15:45', '2020-01-02 10:15:56'),
(9, 'Teachers (Present)', 0, 1, 8, 8, '2021-01-09 17:03:35', '2021-01-09 17:11:43'),
(10, 'Teachers (Serve Full Time)', 0, 1, 8, 8, '2021-01-09 17:05:39', '2021-06-03 08:22:33'),
(11, 'Teachers (Left Early)', 0, 1, 8, 8, '2021-01-09 17:06:32', '2021-06-03 08:22:40'),
(12, 'Teachers (Chairman\'s List)', 0, 1, 8, 8, '2021-01-09 17:10:40', '2021-06-03 08:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_02_073639_create_permission_tables', 1),
(4, '2017_10_02_084247_create_user_providers_table', 1),
(5, '2018_03_11_062135_create_posts_table', 1),
(6, '2018_03_12_062135_create_categories_table', 1),
(7, '2018_05_03_223112_create_tags_table', 1),
(8, '2018_05_03_225004_create_pivot_post_tag', 1),
(9, '2018_07_03_162452_create_settings_table', 1),
(10, '2018_07_07_114911_create_newsletters_table', 1),
(11, '2018_10_04_151956_create_userprofiles_table', 1),
(12, '2018_10_06_115742_create_media_table', 1),
(13, '2018_10_13_150617_create_notifications_table', 1),
(14, '2018_10_21_105059_create_comments_table', 1),
(15, '2019_06_19_175519_create_activity_log_table', 1),
(16, '2019_07_08_104305_create_failed_jobs_table', 1),
(23, '2019_11_04_165053_create_notices_table', 5),
(24, '2019_11_02_125843_create_activity_types_table', 6),
(25, '2019_11_02_154518_create_activities_table', 6),
(26, '2019_10_23_172056_create_journals_table', 7),
(29, '2019_09_30_145229_create_sliders_table', 9),
(34, '2019_11_27_040657_create_divisions_table', 11),
(35, '2019_11_27_040723_create_districts_table', 11),
(36, '2019_11_27_040803_create_upazilas_table', 11),
(37, '2019_12_04_142241_create_students_table', 11),
(41, '2019_12_05_170705_create_member_types_table', 12),
(43, '2019_11_06_123438_create_about_us_table', 13),
(44, '2019_11_09_110812_create_p_messages_table', 13),
(45, '2019_10_29_145256_create_committee_types_table', 14),
(46, '2019_10_29_163219_create_committees_table', 14),
(47, '2019_11_03_115309_create_events_table', 15),
(48, '2019_12_08_133850_create_advisory_committees_table', 16),
(53, '2019_11_25_130653_create_galleries_table', 17),
(54, '2019_11_25_130710_create_gallery_images_table', 17),
(57, '2019_11_03_142030_create_contact_us_table', 18),
(58, '2019_12_09_155424_create_contacts_table', 18),
(59, '2019_09_28_145915_create_members_table', 19),
(60, '2019_12_07_114355_create_future_planes_table', 20),
(61, '2019_11_26_120906_create_send_sms_table', 21),
(62, '2019_12_18_110555_create_renowned_alumni_members_table', 22),
(63, '2019_12_31_120210_create_member_images_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 7),
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `delivered_at` datetime DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `name`, `code`, `content`, `type`, `image`, `order`, `status`, `created_by`, `updated_by`, `deleted_by`, `published_at`, `delivered_at`, `role_id`, `role_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Eius omnis qui et sequi quam enim sit ab.', 'eius-omnis-qui-et-sequi-quam-enim-sit-ab', 'Facilis distinctio asperiores molestias distinctio. Iure ab rem neque quis perferendis corrupti et vitae. Facere et et aut perferendis velit.', 'Monthly', 'https://lorempixel.com/1200/630/?21921', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(2, 'Molestias autem quas dicta exercitationem.', 'molestias-autem-quas-dicta-exercitationem', 'Adipisci aut esse autem nobis neque. Molestiae vitae aliquam quibusdam nihil. Animi quod et nulla architecto fugit ad ut fugiat. Eius odio quia omnis optio facere. Quisquam esse fugit blanditiis sapiente dolore accusamus.', 'Monthly', 'https://lorempixel.com/1200/630/?18656', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(3, 'Beatae aspernatur tenetur sunt.', 'beatae-aspernatur-tenetur-sunt', 'Voluptatum quia alias amet ut voluptate velit. Ut sit facilis ad. Quos laudantium ipsam id dignissimos ut.', 'Weekly', 'https://lorempixel.com/1200/630/?85311', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(4, 'Similique qui eligendi eos quasi aut ipsam ipsum.', 'similique-qui-eligendi-eos-quasi-aut-ipsam-ipsum', 'Quibusdam ipsam aperiam nihil voluptas. Harum assumenda neque distinctio quos. Dicta enim reiciendis quod. Ut sit id libero minima.', 'Monthly', 'https://lorempixel.com/1200/630/?96415', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(5, 'Necessitatibus ut corrupti quia laudantium laudantium maiores est deserunt.', 'necessitatibus-ut-corrupti-quia-laudantium-laudantium-maiores-est-deserunt', 'Perferendis voluptatum optio maxime magnam. Omnis repellendus doloribus ex sint dolor.', 'Weekly', 'https://lorempixel.com/1200/630/?85725', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(6, 'Ut vitae veritatis voluptatem facilis tempore non quam.', 'ut-vitae-veritatis-voluptatem-facilis-tempore-non-quam', 'Vero culpa eum ut iste debitis. Nesciunt non sunt odio harum dignissimos aperiam repellat. Vitae expedita delectus laborum reprehenderit ad cumque qui. Architecto esse tempora suscipit aut illo sit officiis.', 'Monthly', 'https://lorempixel.com/1200/630/?34962', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(7, 'Et assumenda voluptatem laboriosam.', 'et-assumenda-voluptatem-laboriosam', 'Laudantium quia sed et. Sint nihil modi necessitatibus earum eveniet. Est atque sit ut architecto.', 'Monthly', 'https://lorempixel.com/1200/630/?43830', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(8, 'Sed non recusandae enim et.', 'sed-non-recusandae-enim-et', 'Aperiam et vel asperiores. Delectus quidem totam sit enim. Aut nisi error qui quia ut exercitationem. Velit rerum nam eum voluptatem possimus cupiditate nisi.', 'Weekly', 'https://lorempixel.com/1200/630/?89005', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(9, 'Similique numquam maiores quas exercitationem.', 'similique-numquam-maiores-quas-exercitationem', 'Aut qui et nihil id natus. Voluptas quia cum quidem dolorem odio fugit est. Iusto aut adipisci et quod neque. Nihil ea aut ullam at sapiente amet.', 'Weekly', 'https://lorempixel.com/1200/630/?14194', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL),
(10, 'Illo nihil atque velit quibusdam quibusdam earum.', 'illo-nihil-atque-velit-quibusdam-quibusdam-earum', 'Atque aut qui aliquam quidem aliquam repellat. Et ut quos quibusdam quia eaque. Aut facilis reiciendis dignissimos ut. Ut ipsum impedit provident vel consequatur consequuntur.', 'Weekly', 'https://lorempixel.com/1200/630/?81395', NULL, 1, NULL, NULL, NULL, '2019-09-25 15:04:04', NULL, NULL, NULL, '2019-09-25 09:04:04', '2019-09-25 09:04:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` date DEFAULT NULL,
  `pdf_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `date_time`, `pdf_file`, `publication_status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ubuntu', '2019-11-26', '1576318188.pdf', 1, 1, 7, NULL, '2019-12-05 05:31:29', '2020-01-05 18:30:12', '2020-01-05 18:30:12'),
(2, 'ubuntu', '2019-11-25', '1575694375.pdf', 0, 1, 1, NULL, '2019-12-07 04:52:55', '2019-12-07 04:53:30', '2019-12-07 04:53:30'),
(3, 'Paaru Executive Committee', '2019-12-18', '1576558819.pdf', 1, 7, 7, NULL, '2019-12-17 05:00:19', '2020-02-02 18:46:13', '2020-02-02 18:46:13'),
(4, 'demogfhg', '2019-12-16', '1576559735.pdf', 1, 7, 7, NULL, '2019-12-17 05:15:35', '2019-12-17 05:39:53', '2019-12-17 05:39:53'),
(5, 'demogfhg', '2019-12-16', '1576559768.pdf', 0, 7, 7, NULL, '2019-12-17 05:16:08', '2019-12-17 05:39:46', '2019-12-17 05:39:46'),
(6, 'This is a Titlehjhfj', '2019-11-25', '1576560319.pdf', 0, 7, NULL, NULL, '2019-12-17 05:25:19', '2019-12-17 05:39:39', '2019-12-17 05:39:39'),
(7, 'Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis et augue.', '2019-11-04', '1576560368.pdf', 0, 7, NULL, NULL, '2019-12-17 05:26:08', '2019-12-17 05:39:32', '2019-12-17 05:39:32'),
(8, 'Aliquam in ex dolor. Maecenas velit dui, fringilla nec ornare et, mollis et augue.', '2019-11-25', '1576560450.pdf', 0, 7, NULL, NULL, '2019-12-17 05:27:30', '2019-12-17 05:39:24', '2019-12-17 05:39:24'),
(9, 'Testing Tender Title', '2019-12-23', '1577081139.pdf', 1, 6, 6, NULL, '2019-12-23 06:05:18', '2019-12-23 06:05:49', '2019-12-23 06:05:49'),
(10, 'fdgfh', '2020-01-02', '1577961043.pdf', 0, 6, 6, NULL, '2020-01-02 10:30:43', '2020-01-04 23:28:01', '2020-01-04 23:28:01'),
(11, '6th executive committee meeting', '2020-03-05', '1580626781.pdf', 0, 6, 8, NULL, '2020-01-05 18:32:00', '2020-02-02 19:00:52', '2020-02-02 19:00:52'),
(12, '6th executive committee meeting', '2020-03-05', '1580626873.pdf', 1, 8, 8, NULL, '2020-02-02 19:01:13', '2020-02-05 15:10:54', NULL),
(13, 'Sub-committee list of 1st re-union', '2018-03-22', '1663828511.pdf', 1, 8, 8, NULL, '2022-09-22 06:35:11', '2022-09-22 06:35:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('selimmahmud@hotmail.com', '$2y$10$x2akBCwWng7HWexhgZktMuej3DEVcWTPdmfg9kmoLVCoq7F3tUOKm', '2021-02-08 09:51:34'),
('rokon.desktopit@gmail.com', '$2y$10$4wT5X8ZwuNps1fa/5EXZbeDrW6dpm1l0pqWCu2FluEXI9Yl0X7YTO', '2021-02-13 06:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_backend', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(2, 'edit_settings', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(3, 'view_logs', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(4, 'view_users', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(5, 'add_users', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(6, 'edit_users', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(7, 'delete_users', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(8, 'restore_users', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(9, 'block_users', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(10, 'view_roles', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(11, 'add_roles', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(12, 'edit_roles', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(13, 'delete_roles', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(14, 'restore_roles', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(15, 'view_backups', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(16, 'add_backups', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(17, 'create_backups', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(18, 'download_backups', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(19, 'delete_backups', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(20, 'view_posts', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(21, 'add_posts', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(22, 'edit_posts', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(23, 'delete_posts', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(24, 'restore_posts', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(25, 'view_categories', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(26, 'add_categories', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(27, 'edit_categories', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(28, 'delete_categories', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(29, 'restore_categories', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(30, 'view_tags', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(31, 'add_tags', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(32, 'edit_tags', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(33, 'delete_tags', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(34, 'restore_tags', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(35, 'view_comments', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(36, 'add_comments', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(37, 'edit_comments', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(38, 'delete_comments', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(39, 'restore_comments', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(40, 'view_newsletters', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(41, 'add_newsletters', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(42, 'edit_newsletters', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(43, 'delete_newsletters', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(44, 'restore_newsletters', 'web', '2019-09-25 08:56:08', '2019-09-25 08:56:08'),
(54, 'view_permissions', 'web', '2019-09-28 05:30:47', '2019-09-28 05:30:47'),
(55, 'view_members', 'web', '2019-09-28 09:28:08', '2019-09-28 09:28:08'),
(56, 'view_sliders', 'web', '2019-09-30 06:17:08', '2019-09-30 06:17:08'),
(57, 'view_about', 'web', '2019-12-05 04:41:16', '2019-12-05 04:41:16'),
(58, 'view_committee', 'web', '2019-12-07 10:36:00', '2019-12-07 10:36:00'),
(59, 'view_contact', 'web', '2019-12-09 10:00:26', '2019-12-09 10:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_og_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_og_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `moderated_by` int(10) UNSIGNED DEFAULT NULL,
  `moderated_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_by_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_alias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `intro`, `content`, `type`, `category_id`, `category_name`, `is_featured`, `featured_image`, `meta_title`, `meta_keywords`, `meta_description`, `meta_og_image`, `meta_og_url`, `order`, `status`, `moderated_by`, `moderated_at`, `created_by`, `created_by_name`, `created_by_alias`, `updated_by`, `deleted_by`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dolore quia ut sed fuga molestiae.', 'dolore-quia-ut-sed-fuga-molestiae.', 'Ea ea consequatur aut. Et blanditiis quia quo quos facere eius veritatis. Et sit veritatis illo maiores qui sed omnis.', 'Fugit repellat qui aut. Est neque qui facilis consequuntur in dolore sint. Velit nam voluptas in quaerat consequatur sapiente. Voluptatem et ea dolorem omnis voluptatibus.\n\nMaxime consectetur incidunt eligendi eum. Vero labore impedit quas aspernatur. Temporibus est aliquid id esse aut autem nemo sit.\n\nDicta perspiciatis ut sint quia voluptas officiis. Ipsum nesciunt necessitatibus ab.\n\nRerum similique ut animi nam. Molestiae inventore quos qui ipsum. Nihil in aut ut. Tempora qui eveniet quia et.\n\nTempora consequatur totam pariatur harum similique. Ipsam numquam vel magnam possimus eligendi harum. Nulla explicabo neque aspernatur architecto ea. Enim dolorem atque quam quos.', 'Article', 4, 'Officiis cum.', 'No', 'https://lorempixel.com/1200/630/?93582', 'Dolore Quia Ut Sed Fuga Molestiae.', '', NULL, 'https://lorempixel.com/1200/630/?93582', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(2, 'Est veritatis animi accusantium non non.', 'est-veritatis-animi-accusantium-non-non.', 'Delectus et est facere cupiditate vitae omnis dolorem aut. Magnam saepe nulla nisi cum doloremque. Debitis vero nostrum in rerum. Inventore voluptas hic amet voluptatum ut id.', 'Cupiditate earum mollitia ratione et. Exercitationem a dolor dicta iusto quia nesciunt. Possimus omnis saepe ipsum commodi aut. Praesentium suscipit sit laboriosam corporis. Veritatis qui et vel accusamus maiores ut odit.\n\nQui eius mollitia deserunt hic quis. Quia repellat dolor velit. Est officiis at similique ipsa dolorum quas est.\n\nOccaecati minus sed ipsum. Consequatur qui quaerat beatae tempore officiis et. Ut dolore omnis repellat quis quod.\n\nAperiam ut omnis qui accusantium asperiores nisi ducimus eius. Omnis quis provident fugit quis. Cum modi rerum non ad. Non hic distinctio rerum in modi sed.\n\nDolore tempora quis maxime voluptates est. Est soluta minima quis velit ex. Mollitia facilis qui sit magni veniam adipisci.', 'News', 1, 'Nihil non.', 'No', 'https://lorempixel.com/1200/630/?48204', 'Est Veritatis Animi Accusantium Non Non.', '', NULL, 'https://lorempixel.com/1200/630/?48204', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(3, 'Omnis maiores expedita et est.', 'omnis-maiores-expedita-et-est.', 'Qui ad labore et non non sit. Aut quidem architecto ut aut dolore doloremque autem provident. Deleniti recusandae hic sed totam cumque laboriosam ut. Nobis est optio ea expedita ipsa.', 'Vitae qui placeat est enim dolorem omnis. Ipsum excepturi est quibusdam omnis et mollitia. Enim quis sed molestias occaecati quia doloribus.\n\nEaque voluptatem iusto laboriosam blanditiis. Et consectetur cupiditate placeat voluptatem mollitia aut. Adipisci saepe blanditiis recusandae autem minima architecto magni facilis.\n\nNumquam architecto consectetur est enim consequatur praesentium qui. Voluptatum veniam dignissimos eaque vel blanditiis tempore ad. Consectetur ducimus laboriosam omnis consequatur.\n\nDeserunt autem et aut aut consequatur modi maiores. Illo ut explicabo ut modi aliquam. Molestiae aspernatur quas dolores quia eligendi maxime iusto.\n\nQuos id ut dolor quis reiciendis sunt. Placeat rerum expedita sunt saepe earum nostrum. Id culpa quisquam velit eum eligendi nulla et.\n\nEx voluptates et libero magni consequatur quidem. Et nemo distinctio praesentium hic est dolorem cumque. Dolor facilis iste maxime facere.', 'Article', 4, 'Officiis cum.', 'No', 'https://lorempixel.com/1200/630/?39548', 'Omnis Maiores Expedita Et Est.', '', NULL, 'https://lorempixel.com/1200/630/?39548', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(4, 'Alias voluptas ea voluptatem quibusdam.', 'alias-voluptas-ea-voluptatem-quibusdam.', 'Sequi modi totam qui autem laudantium id veritatis sint. Voluptates consequatur voluptatibus alias corporis. Molestias qui voluptatem provident nostrum repellat nobis et facilis. Aperiam esse et necessitatibus impedit quos nisi molestiae rem.', 'Perspiciatis id nostrum nam sequi iste molestiae et assumenda. Quisquam cumque quis voluptate dolor. Necessitatibus porro velit eaque consequatur omnis neque explicabo recusandae. Praesentium dolor sed deserunt accusamus.\n\nEt fugiat autem minus et qui. Velit voluptatem optio consequuntur facilis. Quos quae sit iure laudantium sit hic magni sed. Ea in rerum illum labore voluptatum nulla nihil eligendi.\n\nMaiores excepturi rerum ratione iure nihil non. Magnam rerum est repellat ea repellendus quam. Ab explicabo assumenda ea sequi.\n\nVoluptas quasi quis rem dignissimos vero. Culpa ut eaque distinctio impedit atque eum. Mollitia impedit aut aut adipisci omnis voluptatem officiis nihil.\n\nDebitis repellendus fuga voluptas est ut laborum aut. Nesciunt est quidem et qui.\n\nNisi laboriosam rerum ipsam. Recusandae voluptas et ut non eum necessitatibus. Similique nulla natus omnis quia quod maxime dolorum sed. Ut dolores et ex mollitia cupiditate quia. Vitae cumque tempora est ducimus consequatur doloremque.', 'Blog', 4, 'Officiis cum.', 'Yes', 'https://lorempixel.com/1200/630/?68904', 'Alias Voluptas Ea Voluptatem Quibusdam.', '', NULL, 'https://lorempixel.com/1200/630/?68904', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(5, 'Quam et id sed laudantium dolor.', 'quam-et-id-sed-laudantium-dolor.', 'Illum quibusdam voluptatem iste. Enim aspernatur voluptas eos in amet rerum.', 'Omnis esse harum ipsum suscipit dolores eius qui rem. Vel ratione consequatur vitae est harum aut. Minus quisquam porro deleniti eveniet cumque error adipisci ut.\n\nImpedit qui voluptatem suscipit dolores quo qui saepe. Itaque dolor ipsam quos dolores recusandae magnam. Quos quas quae qui. Quia expedita ea quo veniam voluptates aut et suscipit. Esse voluptas ut dicta harum recusandae.\n\nEius molestias voluptatem est ratione ipsum. Quia ullam et veniam officiis. Non maxime excepturi pariatur cum minus perferendis. Quam id id at ipsa.\n\nMagnam quae est explicabo ad accusantium. Impedit nesciunt sequi et quidem maxime tempore. Autem voluptatum voluptate possimus iste possimus asperiores.\n\nIpsam adipisci nemo id. Velit laboriosam quae dolorum sequi labore pariatur cupiditate.\n\nSapiente beatae inventore eos consectetur eius magnam. Quae reprehenderit et iste harum totam ea consequatur. Quae sed quos laudantium dolorum et culpa dolores. Magni doloribus voluptate autem.', 'News', 3, 'Hic et ut.', 'Yes', 'https://lorempixel.com/1200/630/?17945', 'Quam Et Id Sed Laudantium Dolor.', '', NULL, 'https://lorempixel.com/1200/630/?17945', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(6, 'Eum repellendus quia officia accusantium voluptate.', 'eum-repellendus-quia-officia-accusantium-voluptate.', 'Rem iste unde veniam dignissimos mollitia vitae doloribus sed. Dolor unde ipsam voluptates. Est culpa reiciendis molestias nemo. Quis officiis ex et vero in cumque odit ut.', 'Eaque velit qui sit saepe. Iusto aliquam omnis porro ab quo. Rerum eaque doloribus nobis aliquam culpa consequatur et facilis. Autem dolores veniam provident molestias architecto dicta.\n\nVeniam ea et error repellat autem ut voluptatem. Recusandae dicta totam est iusto. Cumque quas modi fuga voluptatem id. Excepturi optio voluptas consequuntur accusamus.\n\nCommodi officiis at corrupti nisi ea qui amet soluta. Repellendus aperiam aut et qui. Voluptas natus aut molestias sit est. Numquam ullam saepe error cumque voluptatibus tempore cumque.\n\nDolore magnam voluptatem eum excepturi laboriosam ut aut. Facilis non quidem veritatis labore qui voluptas iure. Nemo a occaecati adipisci nobis aliquam id.\n\nEt eos ea et. Qui in nam aut debitis. Beatae delectus reprehenderit sed non perspiciatis unde. Nam cum voluptatum animi.', 'Blog', 3, 'Hic et ut.', 'No', 'https://lorempixel.com/1200/630/?77714', 'Eum Repellendus Quia Officia Accusantium Voluptate.', '', NULL, 'https://lorempixel.com/1200/630/?77714', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(7, 'Velit rerum non animi et.', 'velit-rerum-non-animi-et.', 'Nihil perspiciatis itaque nisi. Eligendi incidunt beatae qui quae molestiae repellendus. Quas laborum et et eveniet autem.', 'Ullam odit expedita perferendis labore aut aperiam qui. Et at nulla ea laboriosam amet et. Debitis ut recusandae explicabo qui officiis. Aspernatur aut eligendi ex.\n\nEt voluptatem voluptas officiis est et expedita quo. Ipsa repellat assumenda sunt et fugit et. Id dolor porro aut pariatur. Provident qui et et minima. Ut aut sunt repudiandae fuga voluptatem numquam.\n\nQuos sunt excepturi velit nisi. Hic distinctio ratione velit dolorem magnam quisquam quo quasi. Deserunt suscipit sit quia illum. Voluptatem sint molestiae aspernatur autem eveniet.\n\nDeserunt cumque hic nemo laudantium et. Sapiente aut ut nulla vel sed.\n\nRerum quis quis non quisquam cumque. Placeat quaerat omnis voluptatem. Quae temporibus ut saepe. Dolor aspernatur asperiores sit autem reiciendis velit sit.', 'Article', 1, 'Nihil non.', 'No', 'https://lorempixel.com/1200/630/?33334', 'Velit Rerum Non Animi Et.', '', NULL, 'https://lorempixel.com/1200/630/?33334', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(8, 'Occaecati ea nihil cupiditate sit.', 'occaecati-ea-nihil-cupiditate-sit.', 'Numquam praesentium quia dolor aut iste recusandae nisi. Natus tempore eaque quia iure est. Ab molestias eveniet culpa voluptatem explicabo et.', 'Tempora quasi minima aut adipisci numquam. Enim omnis fuga explicabo enim. Qui sunt placeat et impedit cupiditate. Reiciendis consequuntur dignissimos vitae et delectus aut omnis. Suscipit quos odit cumque qui.\n\nQui fugit veritatis tempore aut id velit sed maiores. Quas excepturi inventore quis consectetur voluptatum nemo ut dolores. Rerum quos eveniet quo sapiente. Iure consequatur et et.\n\nEt omnis labore voluptatem et eum. Earum itaque voluptas fuga assumenda sint. Qui molestiae aperiam nam deserunt. Nobis est maxime dolores impedit similique aliquid.\n\nVoluptatem et molestiae ut rem qui. Et quasi quae id fuga.\n\nNihil eaque id non unde vero blanditiis. Quod sunt blanditiis excepturi nesciunt cumque. Recusandae fuga sed illo eos saepe aut asperiores. Voluptates praesentium est numquam ut qui et.', 'News', 3, 'Hic et ut.', 'No', 'https://lorempixel.com/1200/630/?81509', 'Occaecati Ea Nihil Cupiditate Sit.', '', NULL, 'https://lorempixel.com/1200/630/?81509', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(9, 'Natus et a asperiores vel cupiditate laudantium praesentium.', 'natus-et-a-asperiores-vel-cupiditate-laudantium-praesentium.', 'Qui ut aut dolor rerum commodi vel. Perferendis ea cumque odio vero. Est laborum consequatur est repellat. Neque sed et totam et.', 'Nobis unde atque autem beatae. Voluptatem et magni voluptas nihil. Voluptate ad reprehenderit quidem aspernatur natus autem.\n\nQuas unde suscipit est autem qui. Quae quod vero eveniet repellat. Error maiores fuga sit similique accusamus ut harum.\n\nUllam et corrupti et. Consequuntur hic provident harum voluptatem ab laborum ab quasi. Quisquam mollitia natus et quia.\n\nAut beatae nemo quam veritatis. Pariatur perferendis eligendi dolor omnis quibusdam maiores aut. Et dolor aliquid facilis qui sunt dolor. Minima asperiores aut rerum et consequatur consequatur qui.\n\nVitae ipsa vero ipsa. Magni fuga eaque corrupti facere est. Est esse dolorum et iste dolorum magnam itaque adipisci.\n\nAnimi quia explicabo necessitatibus veritatis. Distinctio et nisi magnam nesciunt sed repellat non. Modi sunt eius facilis exercitationem. Consequatur et non aut architecto fugiat dolore accusamus. Quo fugiat omnis eligendi sed.\n\nAtque quia et aut ut aut corporis dolor. Optio non iusto voluptas. Reiciendis at molestiae qui nobis iste. Et sequi distinctio animi officia porro libero et sint.', 'News', 5, 'Nostrum eaque.', 'Yes', 'https://lorempixel.com/1200/630/?97476', 'Natus Et A Asperiores Vel Cupiditate Laudantium Praesentium.', '', NULL, 'https://lorempixel.com/1200/630/?97476', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(10, 'Laudantium officiis ad numquam ut et.', 'laudantium-officiis-ad-numquam-ut-et.', 'Voluptate eveniet officiis explicabo magnam praesentium. Sed eos recusandae sequi qui quia et neque. Distinctio ipsa in ratione sint eveniet quod qui unde. Dolores soluta voluptas velit similique sed sint commodi.', 'Iusto similique laborum qui aut iure sunt vel. Consequatur eveniet unde nesciunt qui sint quaerat consequatur.\n\nOmnis dignissimos illo qui sequi earum similique. Sunt harum sed qui cupiditate laudantium officia. Autem ducimus distinctio ea harum et ipsa eum. Vel et repudiandae vel est.\n\nExcepturi eum sequi provident. Error quis mollitia consequatur non voluptatem ipsum consequatur. Et vel dicta fuga quo. Voluptas ea magni qui eos quo ullam corrupti.\n\nAmet pariatur sit dolor quis omnis omnis. Consequuntur nemo vel fugit voluptas qui. Et aut voluptatem iure repellendus. Libero ipsum rerum et vel nihil suscipit.\n\nRerum facilis dignissimos dolorem sint ipsum veniam ipsam odit. Illo odit repudiandae ducimus qui vitae voluptas temporibus. Et aut amet et aperiam. Tenetur ut tempora rem adipisci in.\n\nEst cupiditate totam esse odio blanditiis. Unde qui non quo repellat. Aut quo quis maiores. Sunt ipsa suscipit reiciendis dolorem.\n\nPossimus ad in perspiciatis sint eos optio adipisci. Eos autem voluptatem odio alias. Quam illum sunt et.', 'Blog', 4, 'Officiis cum.', 'Yes', 'https://lorempixel.com/1200/630/?27011', 'Laudantium Officiis Ad Numquam Ut Et.', '', NULL, 'https://lorempixel.com/1200/630/?27011', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(11, 'In voluptatum aperiam amet totam ut.', 'in-voluptatum-aperiam-amet-totam-ut.', 'Facilis in illum cumque voluptatem. Distinctio officiis provident magnam doloribus. Sed fugiat iusto iure amet id.', 'Sint ex ipsa placeat earum quibusdam non rerum laudantium. Aliquam possimus et doloribus molestiae ex eum mollitia. Earum commodi omnis dolore eaque quibusdam exercitationem. Inventore error est sit modi.\n\nHic deleniti ut nam sed et. Culpa vero est eos praesentium soluta eum saepe odio. Eius reprehenderit ut reiciendis iure.\n\nQuia exercitationem et enim eligendi. Sed velit quis minima ea. Repellat sunt inventore tenetur eum velit consequatur consequatur sapiente. Placeat provident nisi omnis et et.\n\nNon laudantium maxime accusantium exercitationem quia omnis praesentium assumenda. Et rerum quod cupiditate iure temporibus at. Sit distinctio recusandae necessitatibus.\n\nVel molestias perferendis repellendus cum sit quae. Laborum cupiditate esse qui non natus et. Dolorem quibusdam quis sed saepe. Ab sit cumque sed minus reiciendis voluptas.\n\nConsequuntur explicabo dolorem eum voluptas. Ex ex eum sapiente dicta. Autem id eos aut et cumque illo. Velit vero optio similique culpa suscipit minus aut.\n\nIpsam inventore dolores accusantium dolorem mollitia voluptatem ad. Molestiae accusamus omnis autem voluptatem hic. Qui est aut quo est.', 'News', 4, 'Officiis cum.', 'Yes', 'https://lorempixel.com/1200/630/?85486', 'In Voluptatum Aperiam Amet Totam Ut.', '', NULL, 'https://lorempixel.com/1200/630/?85486', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(12, 'Optio dicta aut sed dolore quos.', 'optio-dicta-aut-sed-dolore-quos.', 'Placeat ipsa ducimus dolor molestiae consequatur. Sunt et fugiat ea voluptas ut est. Enim ut est accusantium et et temporibus et rem. Recusandae ut itaque vel dolorem voluptatum eaque enim.', 'Vel vel minus quasi fugit eligendi veniam. Ad cupiditate aut ad. Ut ea placeat eos officia dolorum quibusdam est.\n\nNecessitatibus voluptatem est molestiae earum. Sed facere pariatur rerum. Aperiam cumque impedit quidem odit architecto doloremque ipsa debitis.\n\nEsse explicabo consequatur eum natus animi. Dolore et error ut et sint animi sit. Consequatur repellat est nesciunt est qui possimus. Adipisci voluptatibus dolorum magnam recusandae.\n\nQuibusdam hic veniam magni autem est voluptatem. Perferendis error porro repellat aut pariatur omnis. Vel itaque ut modi adipisci. Qui inventore rerum iste rem quia aut.\n\nReiciendis earum praesentium non consequatur sint nesciunt architecto. Inventore voluptatem aut libero vel. Quia fugiat alias eaque blanditiis.\n\nAutem dolorem aut explicabo officiis adipisci eos cum. Id fuga reiciendis laboriosam necessitatibus nemo et. Minus blanditiis enim sint quae.\n\nVoluptas ea est omnis doloribus nobis necessitatibus. Dolorem doloremque magnam consectetur ad aspernatur. Quo eum perferendis quam nemo eos ipsum.', 'Blog', 5, 'Nostrum eaque.', 'No', 'https://lorempixel.com/1200/630/?57781', 'Optio Dicta Aut Sed Dolore Quos.', '', NULL, 'https://lorempixel.com/1200/630/?57781', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(13, 'Assumenda illo quia eligendi deleniti cum distinctio.', 'assumenda-illo-quia-eligendi-deleniti-cum-distinctio.', 'Sed inventore pariatur aperiam soluta expedita impedit. Provident molestias est esse velit deleniti sequi temporibus. Quaerat sunt eum consequatur est soluta impedit et asperiores.', 'Qui est pariatur sunt aut. Dolores odio nesciunt quod ducimus. Quas praesentium facere saepe pariatur dolorum.\n\nPerspiciatis consequatur dolor suscipit consequatur nostrum et voluptatem. Expedita quia ipsam ut laboriosam at quisquam ex. Eveniet quia et necessitatibus recusandae autem. Quo rem qui nobis porro veniam iure.\n\nSint quia voluptas voluptate neque corporis optio voluptatem. Sit aliquam odio occaecati nihil. Sapiente optio corporis eos laudantium.\n\nMolestias fugit unde tenetur exercitationem voluptatibus. Nisi dolor et recusandae non sed odio ut. In consectetur tempora non dolor laudantium. Ducimus enim voluptas vero quis.\n\nOfficia odit eos sit voluptatibus nostrum. Autem neque accusantium est sapiente aut placeat.', 'News', 1, 'Nihil non.', 'Yes', 'https://lorempixel.com/1200/630/?23349', 'Assumenda Illo Quia Eligendi Deleniti Cum Distinctio.', '', NULL, 'https://lorempixel.com/1200/630/?23349', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(14, 'Sint nesciunt libero velit dolorem vero rerum nemo.', 'sint-nesciunt-libero-velit-dolorem-vero-rerum-nemo.', 'Placeat debitis repellat commodi quia qui. Est vero animi non asperiores quod pariatur mollitia. Doloribus sunt perspiciatis ea possimus dolor laboriosam.', 'Quibusdam adipisci ab dolores commodi quisquam nesciunt quo. Pariatur adipisci aspernatur rerum ut animi. Sed qui vel officiis provident similique omnis quidem. Fugit consequatur cumque debitis voluptate qui odit.\n\nQui necessitatibus eveniet ducimus nostrum perspiciatis qui. Ea hic omnis debitis ullam rerum porro ipsa sunt. Omnis ea quo modi.\n\nSint modi voluptatibus et. Saepe corrupti fugiat dicta. Nesciunt odio dolores tempore similique minima. Similique labore ad beatae vel ea ipsum velit. Dolor accusantium aliquam officiis excepturi.\n\nOccaecati non incidunt dolorum dolores rerum distinctio corrupti illum. Laudantium est facilis inventore voluptas. Suscipit dolorem ut sequi et molestiae eius quis. Error sint ipsa aut fugiat.\n\nConsequatur tempora officia consequatur rerum facilis id voluptates. Temporibus et quis odit harum doloremque eveniet. Autem quia neque perspiciatis. Autem magnam et et facere.\n\nEveniet facere voluptas fugit natus ipsum et. Itaque delectus reiciendis in nemo nostrum architecto. Corporis ad voluptates possimus. Voluptatem aut veniam dolor eos rerum.', 'News', 2, 'Beatae iusto.', 'Yes', 'https://lorempixel.com/1200/630/?58559', 'Sint Nesciunt Libero Velit Dolorem Vero Rerum Nemo.', '', NULL, 'https://lorempixel.com/1200/630/?58559', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(15, 'Itaque ullam eligendi nesciunt dicta quis nesciunt et.', 'itaque-ullam-eligendi-nesciunt-dicta-quis-nesciunt-et.', 'Sunt eos nulla labore nisi ipsam. Eaque alias nulla optio a. Error quos qui alias sapiente fugit enim modi inventore. Et veritatis molestiae debitis a vel eaque.', 'Autem et maxime voluptates. Quia exercitationem necessitatibus ut natus magnam rerum asperiores sint. Nihil est sint vel sed facilis molestias.\n\nQuis totam voluptatem qui. Eos architecto sunt maxime consequatur qui ipsa qui. Quis animi qui reiciendis sit magnam. Et voluptatem facilis vitae possimus omnis libero commodi.\n\nEst debitis delectus eligendi. Temporibus ullam maiores necessitatibus. Error iure voluptate suscipit qui voluptatem veritatis vero.\n\nVoluptas non beatae totam facere iure molestias tempora sapiente. Ab consequatur soluta pariatur aut quibusdam quia quibusdam. Rerum qui quia voluptas quod. Iste iure cupiditate ut iusto.\n\nMagni maxime ullam est incidunt qui mollitia perferendis voluptas. Aut aut nam ratione ipsam reiciendis. Non quis quas voluptatem est reprehenderit in at. Illum repellat eos numquam non ut hic esse.\n\nTempore laudantium enim optio sint odit iusto. Temporibus assumenda omnis voluptate beatae sed id. Nesciunt et aut voluptatem sit enim rerum quidem laborum.', 'Article', 4, 'Officiis cum.', 'Yes', 'https://lorempixel.com/1200/630/?99639', 'Itaque Ullam Eligendi Nesciunt Dicta Quis Nesciunt Et.', '', NULL, 'https://lorempixel.com/1200/630/?99639', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(16, 'Esse reprehenderit veniam numquam sunt a.', 'esse-reprehenderit-veniam-numquam-sunt-a.', 'Sequi asperiores est eveniet fugit dolore et nam eveniet. Et et sed rerum impedit. Distinctio dolores magni totam voluptas voluptatem rerum perferendis culpa. Est aut aut qui voluptates. Provident architecto ea similique maxime molestiae inventore vero aut.', 'Maxime molestiae et asperiores non dolore praesentium aut blanditiis. Id quibusdam quam nulla enim. Et unde rerum fugit tempore ut nihil cumque. Aut odio qui debitis officia quasi iusto cupiditate. Velit et quae ut sit fuga veritatis.\n\nSint est ut commodi consequatur distinctio sunt. Ducimus ratione libero dolore quis quos dolorem cumque. Incidunt odio quasi consequatur. Ex natus rem repudiandae odit velit.\n\nEnim consequatur sed vel consectetur expedita quia. Amet nulla consequuntur fugit aliquid quaerat facilis. Iste est accusamus asperiores totam explicabo magnam suscipit autem.\n\nSimilique fugiat in non quibusdam. Ut laborum ea aut consequatur. In iste corporis et optio et ipsam eos necessitatibus. Et et placeat perspiciatis dolor iste.\n\nTemporibus fugit sit maxime. Pariatur sapiente at reiciendis cumque alias enim. Voluptatem in repellendus aut non.\n\nSed veritatis architecto aut iusto. Accusamus totam et numquam ut debitis. Ut aut doloremque illo veritatis velit. Voluptatem ut repellat dolores voluptatem dolores non rerum.', 'Article', 2, 'Beatae iusto.', 'Yes', 'https://lorempixel.com/1200/630/?54581', 'Esse Reprehenderit Veniam Numquam Sunt A.', '', NULL, 'https://lorempixel.com/1200/630/?54581', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(17, 'In aperiam tenetur nulla est esse.', 'in-aperiam-tenetur-nulla-est-esse.', 'Placeat corrupti ducimus dignissimos alias soluta dolorem. In voluptatem tenetur tempora consequatur blanditiis occaecati nobis voluptas.', 'Ratione vel culpa est tempora. Ea odit illo omnis repudiandae aut quisquam nulla ab. Est facilis deleniti et dolorem soluta fugiat quis. Reiciendis et odio nulla voluptas possimus. Rerum error tempore fugit quam quo commodi.\n\nRatione voluptatem odio laborum ad repellendus soluta possimus. Ea modi accusantium est aut reiciendis. Autem nihil ut modi enim sint. Occaecati cum consequatur et incidunt praesentium nemo est. Et ratione commodi omnis impedit consequuntur quibusdam modi.\n\nVel excepturi a libero repudiandae culpa. Ducimus excepturi ut sed animi. Neque et qui ad qui architecto laudantium.\n\nAt animi nisi eligendi non quibusdam consequatur facere. Voluptatem tenetur magni sint dolores asperiores. Perferendis est vel et. Necessitatibus adipisci temporibus est sit minus sit et dolore. Consequatur doloremque enim et quae dolorum minus.\n\nEt nesciunt incidunt architecto enim voluptas culpa. Veritatis repellat consequatur modi eaque. Illo ut ut tempora error ut. Illum reprehenderit non asperiores accusantium earum itaque.\n\nEt omnis modi et rerum nemo. Maxime omnis rem est nobis.\n\nRerum inventore magni debitis dicta consequuntur. Commodi mollitia iste eum et tenetur consectetur. Sit saepe dolores minima expedita quis itaque est. Quasi asperiores expedita dolores sint fugiat. Corrupti tempore est neque repellendus fugiat non repudiandae fugiat.', 'Article', 4, 'Officiis cum.', 'No', 'https://lorempixel.com/1200/630/?86228', 'In Aperiam Tenetur Nulla Est Esse.', '', NULL, 'https://lorempixel.com/1200/630/?86228', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(18, 'Aliquid minus ducimus aliquam aspernatur qui est voluptatum.', 'aliquid-minus-ducimus-aliquam-aspernatur-qui-est-voluptatum.', 'Ex ut corporis voluptate incidunt enim. Tempore possimus id quia repellat cum nulla temporibus. Qui pariatur quibusdam sed consectetur. Ipsum voluptas sit excepturi aut quis qui cum qui.', 'Ut ea dolorem hic quia provident quasi deserunt quo. Harum porro velit qui maxime odio. Porro velit deserunt repudiandae rem corporis ipsam.\n\nEst mollitia inventore reiciendis odio nam consequatur ullam. Nesciunt voluptas dicta quia nihil architecto expedita. Tenetur vel tenetur dolorem. Sed quasi voluptas asperiores aspernatur sit. Accusantium voluptatem delectus consequatur sunt.\n\nIn sint sunt dolorem id ipsam. Eius saepe doloremque distinctio in ex dignissimos. Et iusto velit reprehenderit fuga temporibus. Deleniti possimus ad reprehenderit numquam.\n\nEos eligendi officiis officiis nobis. Ullam quae fuga rerum earum nostrum quasi. Cumque quae accusantium est ut non ea. Et et voluptas repellendus accusantium.\n\nAut dolor quae est. Inventore nesciunt quia eaque. Consequatur exercitationem esse similique qui.', 'Blog', 1, 'Nihil non.', 'Yes', 'https://lorempixel.com/1200/630/?56246', 'Aliquid Minus Ducimus Aliquam Aspernatur Qui Est Voluptatum.', '', NULL, 'https://lorempixel.com/1200/630/?56246', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(19, 'Labore corrupti voluptatibus ipsum voluptatem sit.', 'labore-corrupti-voluptatibus-ipsum-voluptatem-sit.', 'Voluptas quia earum sed. Illum quod nisi qui voluptatem eum aspernatur ut autem. Deserunt velit nulla quibusdam odit libero. Ipsam impedit eligendi est aliquid ut magni labore. Aut culpa omnis earum doloribus enim sit est.', 'Consequatur molestiae voluptates qui alias ut ut aspernatur. Porro eos consectetur quo delectus fugiat natus. Consequuntur nostrum exercitationem labore corrupti consequuntur. Recusandae non nemo consectetur totam et quos mollitia eius. At qui odio aut.\n\nAut repudiandae at eaque perferendis iste. Incidunt iure et possimus. Mollitia eum amet saepe soluta ullam.\n\nDebitis repellat id laudantium laboriosam. Aut ipsam distinctio ducimus aliquam. Qui quasi corrupti ipsum maiores est vero odio eum. Sit velit omnis ut qui cupiditate aut dolor. Ipsam animi esse dolore quia voluptatibus sit est.\n\nQuia voluptates illo adipisci voluptas et. Sed eaque voluptatem velit eaque est. Quisquam qui velit non doloribus. Omnis quo nihil odio vero accusamus ex voluptatem.\n\nVoluptatum necessitatibus omnis sint dolore sit. Et fuga fugiat omnis voluptate cum laudantium soluta. Quam quo omnis tenetur aut sequi beatae. Sit accusantium repudiandae provident totam. Sint recusandae aliquid illo animi eius.\n\nEt quia cupiditate cupiditate excepturi saepe est. Deserunt deserunt vero unde facilis. Ad perspiciatis vero aut. Suscipit ipsum quo atque tempore.\n\nDucimus voluptatem consequuntur suscipit quaerat aliquid soluta qui. Enim sapiente eius modi quia tempore. Tenetur est explicabo earum id. Quae vero sed officia non eveniet autem est sint.', 'Blog', 2, 'Beatae iusto.', 'No', 'https://lorempixel.com/1200/630/?35548', 'Labore Corrupti Voluptatibus Ipsum Voluptatem Sit.', '', NULL, 'https://lorempixel.com/1200/630/?35548', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(20, 'Est quam totam qui ab ut eos ut qui.', 'est-quam-totam-qui-ab-ut-eos-ut-qui.', 'Aut corrupti maxime est dolore similique voluptate officia. Dolorum voluptatibus nostrum voluptates quos dolores ullam non soluta. Quam est sunt nostrum ut esse molestiae asperiores.', 'Qui vitae ut rerum voluptatibus. Voluptatibus inventore reiciendis velit adipisci. Dolore aut tempora nihil consequuntur in. Id magni quis rerum quaerat optio.\n\nEst aliquam earum qui id rerum voluptas ipsam. Rerum ullam maxime omnis fugit iste nemo aut. Aut autem illum culpa iste aut sit.\n\nAutem ut doloribus ad sunt repudiandae praesentium recusandae. Saepe asperiores esse laborum pariatur et quasi. Ipsam quisquam quo modi ipsam. Quis consectetur eos rerum aut doloremque iste et.\n\nNeque non quia eum dolorem aspernatur odit ea. Omnis deleniti voluptatem excepturi omnis illum est. Fuga omnis et accusamus repudiandae. Est dolor soluta officiis deserunt ut dolore eum.\n\nAccusamus ullam magnam aut excepturi dignissimos. Facere nihil dolore aut animi. Ipsum eum qui reiciendis qui necessitatibus omnis commodi aut.', 'Article', 2, 'Beatae iusto.', 'Yes', 'https://lorempixel.com/1200/630/?47168', 'Est Quam Totam Qui Ab Ut Eos Ut Qui.', '', NULL, 'https://lorempixel.com/1200/630/?47168', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(21, 'Debitis omnis sint quis facilis.', 'debitis-omnis-sint-quis-facilis.', 'Animi doloribus rerum ex non aut. Magni iste sit inventore enim. Labore et cum est enim ut.', 'Culpa suscipit reiciendis qui cumque. Vero quis quis culpa pariatur odio esse maxime ab. Quas asperiores perferendis est nemo unde minus. Sit fuga porro sit sunt pariatur. Et rerum laborum nobis et.\n\nMolestiae velit reprehenderit optio vel necessitatibus. Sint in suscipit eum non dolores enim soluta. Veritatis distinctio non eaque non. Quia quas et et esse.\n\nMolestias aliquid delectus ea voluptatum nihil officia. Saepe rerum et vero id et est qui. Voluptas eveniet consectetur nisi aliquid fugit minima ut.\n\nFuga voluptas cumque facilis est laboriosam et. Tempore animi cum non asperiores velit. Voluptatem dolorem excepturi distinctio rerum dolor. Autem quos distinctio officiis unde vel sit.\n\nA voluptatum libero dicta. Sunt consequuntur maiores qui a sed non voluptas. Est ratione nobis repellat molestiae illum optio voluptatem occaecati.', 'Article', 2, 'Beatae iusto.', 'Yes', 'https://lorempixel.com/1200/630/?73388', 'Debitis Omnis Sint Quis Facilis.', '', NULL, 'https://lorempixel.com/1200/630/?73388', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(22, 'Id unde eos ullam ratione.', 'id-unde-eos-ullam-ratione.', 'Vero ab est incidunt accusamus tempore officia. Maiores incidunt dolorem aut rem voluptatem aut. Dolorem assumenda molestias recusandae molestiae omnis.', 'Blanditiis nihil accusantium nulla. Reprehenderit debitis modi recusandae aperiam veritatis. Quia possimus eum quas.\n\nEst eveniet autem et eveniet magni est. Eius possimus dolor cum veritatis. Eum nesciunt sit ut ad est deleniti blanditiis. Itaque est vel id ad.\n\nQuia est doloribus qui sunt sed. Qui sit ratione illo qui. Autem eaque maiores velit ipsam assumenda. Ut quo facilis impedit sapiente sunt.\n\nMagnam rerum dolorem consequatur fuga. Occaecati eligendi id et sunt eum. Illo doloribus fugiat autem quia.\n\nCumque sint possimus quidem eaque quo itaque. Commodi quia libero sit repellendus. Sed soluta tempora ad aut animi ipsum. Voluptatibus commodi saepe rem voluptatem libero saepe.\n\nItaque qui nihil rerum sunt. Quis omnis repellendus animi ipsum eum quam. Qui iure illum sequi et incidunt quia. Quaerat minima nam esse officiis quas.', 'Blog', 4, 'Officiis cum.', 'Yes', 'https://lorempixel.com/1200/630/?23971', 'Id Unde Eos Ullam Ratione.', '', NULL, 'https://lorempixel.com/1200/630/?23971', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(23, 'Quia harum repellat et inventore eaque.', 'quia-harum-repellat-et-inventore-eaque.', 'Sed et adipisci autem nihil sint voluptatem quibusdam. Inventore et ducimus explicabo tenetur id. Soluta magni eum incidunt et et.', 'Similique illo ullam aut dignissimos. Dolore eum maiores quidem maiores assumenda. Facilis in culpa dolores doloremque amet necessitatibus.\n\nConsequatur officia temporibus aliquid quisquam perspiciatis. Nisi consequatur voluptatem ad voluptas eligendi. Voluptatem nam beatae earum vel amet qui. Molestiae ullam tempora esse officiis et vero qui est.\n\nAliquam unde debitis nulla cumque quas eaque. Voluptas itaque ut non iusto sed et officia. Illo vel officiis velit. Quia consequuntur praesentium cupiditate non consequatur consequatur.\n\nDebitis tempore sint nesciunt aliquid eaque. Sapiente magni sed molestiae. Voluptatem error non quaerat omnis sint tenetur dolores.\n\nNostrum incidunt repellat quam id debitis blanditiis aut. Est ipsam qui omnis consequuntur est quis assumenda. Minus sit voluptates rem iusto impedit autem. Illum neque tempore omnis omnis ex molestiae laudantium.\n\nTempora nobis nemo quam ut corporis sunt. Est consequuntur pariatur ullam. Blanditiis eum explicabo quisquam corrupti officia ut aliquam adipisci.\n\nLaboriosam ipsam nisi quo molestiae. Labore debitis et temporibus velit mollitia aut soluta quis. Rem laudantium qui aut corporis.', 'Article', 5, 'Nostrum eaque.', 'No', 'https://lorempixel.com/1200/630/?38906', 'Quia Harum Repellat Et Inventore Eaque.', '', NULL, 'https://lorempixel.com/1200/630/?38906', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:51', '2019-09-25 09:03:50', NULL),
(24, 'Accusamus eum nisi praesentium sed nobis aut.', 'accusamus-eum-nisi-praesentium-sed-nobis-aut.', 'Perspiciatis eum aspernatur explicabo sunt at. Perferendis et harum cum dolorem modi placeat voluptas eum. Aperiam facere doloribus quibusdam sapiente aut delectus illum.', 'Nobis aliquid perferendis quia eos minima sequi. Culpa qui ipsa dolor numquam velit pariatur. Illo quidem praesentium debitis.\n\nMaiores voluptas culpa reiciendis et doloremque blanditiis dolore. Perspiciatis qui rerum sit quisquam aut eveniet. Sit sequi aut laboriosam suscipit vel.\n\nUt libero commodi molestiae voluptatem dolor et architecto qui. Odio sit corporis in enim delectus at.\n\nQuo quia accusantium quasi labore aspernatur optio. Saepe fuga quisquam excepturi et non. Sunt autem distinctio et nesciunt id. Nihil libero corporis quis inventore enim.\n\nAliquam qui quibusdam provident labore. Dolorum unde et eius praesentium.', 'News', 4, 'Officiis cum.', 'No', 'https://lorempixel.com/1200/630/?33648', 'Accusamus Eum Nisi Praesentium Sed Nobis Aut.', '', NULL, 'https://lorempixel.com/1200/630/?33648', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:51', '2019-09-25 09:03:50', NULL),
(25, 'Nam asperiores inventore exercitationem.', 'nam-asperiores-inventore-exercitationem.', 'Nihil in ipsum et at. Quam nostrum et autem molestias quod commodi corrupti. Sint accusantium hic illo inventore iusto velit. Eius sit vitae iste eum et.', 'Placeat eos ex consequatur sequi voluptatem. Rerum iure impedit id sit. Delectus labore rerum quae qui. Sit et enim est porro qui dicta unde.\n\nPerspiciatis tenetur beatae doloribus repellendus cupiditate iste architecto inventore. Labore veritatis fugit non id. Illo est omnis veniam sit iusto possimus.\n\nOptio harum accusamus pariatur eligendi quo voluptates. Id rerum nihil et velit. Corrupti fugiat est ducimus maiores autem vel. Omnis dolorem autem aut saepe rerum delectus.\n\nRepellat fugiat dolor sit asperiores. Et earum rem odit fugit eaque ut similique. Nobis repudiandae molestias voluptatem animi possimus delectus sint.\n\nRem doloremque totam dicta aut. Odit reiciendis qui quo nostrum corrupti dolorum. In saepe enim repellat quae natus provident.', 'Blog', 2, 'Beatae iusto.', 'No', 'https://lorempixel.com/1200/630/?38064', 'Nam Asperiores Inventore Exercitationem.', '', NULL, 'https://lorempixel.com/1200/630/?38064', '', NULL, 1, NULL, NULL, 1, 'Super Admin', NULL, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:51', '2019-09-25 09:03:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 6, NULL, NULL),
(2, 2, NULL, NULL),
(2, 3, NULL, NULL),
(3, 6, NULL, NULL),
(3, 9, NULL, NULL),
(4, 8, NULL, NULL),
(5, 3, NULL, NULL),
(6, 2, NULL, NULL),
(6, 10, NULL, NULL),
(7, 1, NULL, NULL),
(7, 3, NULL, NULL),
(8, 3, NULL, NULL),
(8, 4, NULL, NULL),
(8, 9, NULL, NULL),
(9, 6, NULL, NULL),
(10, 1, NULL, NULL),
(11, 1, NULL, NULL),
(11, 7, NULL, NULL),
(12, 1, NULL, NULL),
(13, 2, NULL, NULL),
(13, 3, NULL, NULL),
(13, 8, NULL, NULL),
(14, 4, NULL, NULL),
(14, 6, NULL, NULL),
(14, 9, NULL, NULL),
(15, 8, NULL, NULL),
(16, 3, NULL, NULL),
(16, 4, NULL, NULL),
(16, 7, NULL, NULL),
(17, 7, NULL, NULL),
(18, 6, NULL, NULL),
(18, 8, NULL, NULL),
(19, 2, NULL, NULL),
(19, 4, NULL, NULL),
(19, 10, NULL, NULL),
(20, 6, NULL, NULL),
(20, 9, NULL, NULL),
(21, 10, NULL, NULL),
(22, 9, NULL, NULL),
(23, 2, NULL, NULL),
(24, 6, NULL, NULL),
(25, 4, NULL, NULL),
(25, 8, NULL, NULL),
(25, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_messages`
--

CREATE TABLE `p_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_messages`
--

INSERT INTO `p_messages` (`id`, `message`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec orci commodo, interdum diam ac, molestie augue. Proin non ligula sit amet quam fermentum placerat nec vitae velit. Fusce varius consectetur viverra. Quisque eu consectetur justo, vitae porta erat. Vivamus eu venenatis lorem, et laoreet nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam placerat rhoncus tortor in bibendum. Pellentesque sagittis sit amet diam convallis rhoncus. Quisque pretium pellentesque libero in eleifend. Praesent condimentum hendrerit feugiat. Donec quis pretium risus. Nam iaculis, neque non accumsan pharetra, sem sapien lacinia diam, eu convallis felis dolor eget augue. Integer sed maximus lacus, nec lacinia quam.</p>\r\n\r\n<p>Phasellus nec orci commodo, interdum diam ac, molestie augue. Proin non ligula sit amet quam fermentum placerat nec vitae velit. Fusce varius consectetur viverra. Quisque eu consectetur justo, vitae porta erat. Vivamus eu venenatis lorem, et laoreet nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam placerat rhoncus tortor in bibendum.</p>\r\n\r\n<p>Proin non ligula sit amet quam fermentum placerat nec vitae velit. Fusce varius consectetur viverra. Quisque eu consectetur justo, vitae porta erat. Vivamus eu venenatis lorem, et laoreet nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam placerat rhoncus tortor in bibendum. Pellentesque sagittis sit amet diam convallis rhoncus. Quisque pretium pellentesque libero in eleifend. Praesent condimentum hendrerit feugiat. Donec quis pretium risus. Nam iaculis, neque non accumsan pharetra, sem sapien lacinia diam, eu convallis felis dolor eget augue. Integer sed maximus lacus, nec lacinia quam.</p>\r\n\r\n<p>Fusce varius consectetur viverra. Quisque eu consectetur justo, vitae porta erat. Vivamus eu venenatis lorem, et laoreet nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam placerat rhoncus tortor in bibendum. Pellentesque sagittis sit amet diam convallis rhoncus. Quisque pretium pellentesque libero in eleifend. Praesent condimentum hendrerit feugiat. Donec quis pretium risus. Nam iaculis, neque non accumsan pharetra, sem sapien lacinia diam, eu convallis felis dolor eget augue. Integer sed maximus lacus, nec lacinia quam.</p>\r\n\r\n<p>Vivamus eu venenatis lorem, et laoreet nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam placerat rhoncus tortor in bibendum. Pellentesque sagittis sit amet diam convallis rhoncus. Quisque pretium pellentesque libero in eleifend. Praesent condimentum hendrerit feugiat. Donec quis pretium risus. Nam iaculis, neque non accumsan pharetra, sem sapien lacinia diam, eu convallis felis dolor eget augue. Integer sed maximus lacus, nec lacinia quam. Juyel</p>', NULL, '2020-01-04 22:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `renowned_alumni_members`
--

CREATE TABLE `renowned_alumni_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `re_al_member_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `re_al_member_msg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `renowned_alumni_members_more_images`
--

CREATE TABLE `renowned_alumni_members_more_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `re_alumni_member_id` int(10) UNSIGNED NOT NULL,
  `re_members_more_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `renowned_alumni_members_more_images`
--

INSERT INTO `renowned_alumni_members_more_images` (`id`, `re_alumni_member_id`, `re_members_more_image`, `created_at`, `updated_at`) VALUES
(17, 1, '1577872158.sp-rrf.jpg', '2020-01-01 09:49:18', '2020-01-01 09:49:18'),
(16, 1, '1577872157.sohel vai.png', '2020-01-01 09:49:17', '2020-01-01 09:49:17'),
(15, 1, '1577854545.myimage.jpg', '2020-01-01 04:55:45', '2020-01-01 04:55:45'),
(14, 1, '1577854545.arman.png', '2020-01-01 04:55:45', '2020-01-01 04:55:45'),
(18, 7, '1578384803.Screenshot _7_.png', '2020-01-07 20:13:23', '2020-01-07 20:13:23'),
(19, 7, '1578384807.Screenshot _8_.png', '2020-01-07 20:13:28', '2020-01-07 20:13:28'),
(20, 8, '1578384968.Screenshot _7_.png', '2020-01-07 20:16:08', '2020-01-07 20:16:08'),
(21, 8, '1578384972.Screenshot _8_.png', '2020-01-07 20:16:12', '2020-01-07 20:16:12'),
(22, 10, '1579348641.Screenshot _7_.png', '2020-01-18 23:57:21', '2020-01-18 23:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(2, 'administrator', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(3, 'manager', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(4, 'executive', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(5, 'user', 'web', '2019-09-25 08:56:07', '2019-09-25 08:56:07'),
(6, 'newsletter_adimn', 'web', '2019-09-25 09:16:51', '2019-09-25 09:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(40, 6),
(41, 2),
(41, 6),
(42, 2),
(42, 6),
(43, 2),
(43, 6),
(44, 2),
(44, 6);

-- --------------------------------------------------------

--
-- Table structure for table `send_sms`
--

CREATE TABLE `send_sms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_sms`
--

INSERT INTO `send_sms` (`id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, '6th Executive Committee Meeting', 'The 6th Meeting of the Physics Alumni Association, Rajshahi University (PAARU) will be held on 5 March 2020 at 7 pm at Dhaka club. All the members of PAARU executive Committee are requested to attend the meeting.\r\nGeneral Secretary, PAARU', '2019-12-17 07:41:43', '2020-02-05 20:06:57'),
(3, '7th Executive Committee Meeting', 'The 7th meeting of the Physics Alumni Association, Rajshahi University (PAARU) will be held on 26 December 2020 at 6 pm by zoom. All the members of PAARU executive Committee are requested to join the online meeting.\r\nID: 62074833136\r\nPassword: 12345\r\nGeneral Secretary, PAARU', '2020-12-25 15:18:09', '2020-12-25 15:18:09'),
(4, 'general meeting', 'The general meeting of the Physics Alumni Association, Rajshahi University (PAARU) will be held on 12 February 2021 at 6:45 pm by Zoom. All the life members of PAARU are requested to join the online meeting.\r\nMeeting ID: 66117098409\r\nPassword: 12345\r\nGS, PAARU', '2021-02-08 10:03:40', '2021-02-08 10:03:40'),
(5, 'প্রফেসর সালেহ্ হাসান নকীবের সংবর্ধনা অনুষ্ঠান', 'সম্মানিত PAARU সদস্যবৃন্দ,\r\nঅত্যন্ত আনন্দের সাথে জানাচ্ছি যে আমাদের একজন সদস্য প্রফেসর সালেহ্ হাসান নকীব TWAS Fellow নির্বাচিত হওয়ায় পদার্থবিজ্ঞান বিভাগের পক্ষ থেকে আগামী ১১/১১/২১ সকাল ১১:০০ টায় এক সংবর্ধনা অনুষ্ঠানের আয়োজন করা হয়েছে।\r\nআপনার উপস্থিতি একান্তভাবে কামনা করছি। GS PAARU\r\n\r\nনিম্নের লিংক বা আইডি ও পাসওয়ার্ড দিয়ে অনলাইনে যুক্ত হতে পারবেন  \r\nhttps://bdren.zoom.us/j/66443040300?pwd=TGxnZW5JRmhuUzUxeTBvVTVSVmpsZz09\r\nMeeting ID: 664 4304 0300\r\nPassword: 11112021', '2021-11-09 09:57:52', '2021-11-09 09:57:52'),
(7, 'PAARU Meeting', 'আগামী ২৩/০৯/২২ বিকেল ৬:৩০ টায় PAARU Exe. Com. লাইফ মেম্বারদের নিয়ে সভার আয়োজন করেছে। \r\nZoom ID: 62800871953 এবং Pass.: 1234\r\nGS PAARU', '2022-09-19 12:00:52', '2022-09-20 04:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'string',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `val`, `type`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'app_name', 'Paaru', 'string', 1, 6, NULL, '2019-09-25 09:35:00', '2020-02-01 21:03:39', NULL),
(2, 'footer_text', '<a href=\"http://desktopit.com.bd/\">Developed by Desktop it.</a>', 'string', 1, 6, NULL, '2019-09-25 09:35:00', '2019-12-21 09:41:14', NULL),
(3, 'email', 'info@paaru.org', 'string', 1, 6, NULL, '2019-09-25 09:35:00', '2020-02-01 21:03:39', NULL),
(4, 'facebook_url', '#https://www.facebook.com/desktopit.com.bd/', 'string', 1, 6, NULL, '2019-09-25 09:35:00', '2020-02-01 21:03:39', NULL),
(5, 'twitter_url', '#https://twitter.com/lezarasha', 'string', 1, 6, NULL, '2019-09-25 09:35:00', '2020-02-01 21:03:39', NULL),
(6, 'linkedin_url', '#', 'string', 1, 6, NULL, '2019-09-25 09:35:01', '2019-12-21 09:41:14', NULL),
(7, 'youtube_url', '#https://www.youtube.com/channel/UCEUCbMul3dDFzRAT1OZa2cA', 'string', 1, 6, NULL, '2019-09-25 09:35:01', '2020-02-01 21:03:39', NULL),
(8, 'meta_site_name', 'PHYSICS ALUMNI ASSOCIATION, RAJSHAHI UNIVERSITY (PAARU)', 'text', 1, 6, NULL, '2019-09-25 09:35:01', '2019-12-21 09:41:14', NULL),
(9, 'meta_description', 'Name: The name of the association shall be PHYSICS ALUMNI ASSOCIATION, RAJSHAHI UNIVERSITY (PAARU). Registered Office and Seal: The Head Office of the organization shall be situated at the Department of Physics, University of Rajshahi, Rajshahi 6205, Bangladesh. The Physics Alumni Association shall be an organization of perpetual succession with an official seal. Objectives: The objectives of this alumni association are to build active communication network among all the present and ex-students of the Department of Physics through various programs and to contribute in the academic development of the Physics Department and economic development of the country through the dissemination of new concepts in the relevant field. Specific Goals To build up relationship among the members of the organization through educational, cultural, social and welfare programs. To help foster a global perspective in teaching-learning of the department of Physics RU and prepare students for the global job market. To highlight the problems and prospects of the Physics academics and professionals through different media, journals, publications, etc. To unite the members of the organization in the bonds of friendship, fellowship and mutual understanding through arranging reunion, picnic, tour, sports etc. To encourage efficiency and promote high ethical standard in Physics profession. To make liaison with other Physics Associations in home and abroad and exchange views and ideas, to take up various projects jointly and arrange exchange programs. Functions: To arrange programs for existing and new Physics educators and professionals and for the new Physics graduates and to take various training programs for the benefit of the unemployed members of the organization To arrange reunions and other events to facilitate interaction among alumni once every three years. To publish magazines and/or newsletters for the publicity and dissemination of information. To take strong steps for literary and cultural developments To offer stipend, scholarship and fellowship in order to broaden the ways of higher education for the poor and meritorious students. To formulate policies and necessary by-laws for proper operation and management of the organization. Where necessary and if required, to take donation in the forms of movable and immovable properties. Eligibility of Membership: All membership shall be subject to approval by the office bearers of the Association. Membership is open to the following: Any person holding an Honours and/or Masters or M.Phil. or Ph.D. degree from the Department of Physics, University of Rajshahi through a hall of residence but presently not attached to the university as a ‘student’ (except for M.Phil & Ph.D. students), shall be eligible to be a Member of PAARU who shall undertake to abide by the rules and regulations as laid down in its constitution. Any faculty members of the Department of Physics, RU, whether he/she has degree in Physics or not, will be eligible to be a member of PAARU. Any person who have served the Dept. of Physics and willing to serve the Dept. can be an associate member. Associate members have no right to vote and hold the position of office bearer. The Registration fee and yearly subscription payable for the members shall be as follows:', 'text', 1, 6, NULL, '2019-09-25 09:35:01', '2020-02-01 21:03:39', NULL),
(10, 'meta_keyword', 'PAARU, DesktopIt, Physics, Physics Alumni Association, Rajshahi, Rajshahi University, Bangladesh, DreamBd', 'text', 1, 6, NULL, '2019-09-25 09:35:01', '2020-02-01 21:03:39', NULL),
(11, 'meta_image', 'img/default_banner.jpg', 'text', 1, 6, NULL, '2019-09-25 09:35:01', '2019-12-21 09:41:14', NULL),
(12, 'meta_fb_app_id', '@desktopit.com.bd', 'text', 1, 6, NULL, '2019-09-25 09:35:01', '2020-02-01 21:03:39', NULL),
(13, 'meta_twitter_site', '@lezarasha', 'text', 1, 6, NULL, '2019-09-25 09:35:01', '2020-02-01 21:03:39', NULL),
(14, 'meta_twitter_creator', '@lezarasha', 'text', 1, 6, NULL, '2019-09-25 09:35:01', '2020-02-01 21:03:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `photo`, `first_slogan`, `second_slogan`, `link`, `created_by`, `updated_by`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Inauguration Ceremony', '1583636907.jpg', 'PAARU', 'Moving ahead with Physics', NULL, 1, 9, 1, '2019-12-05 05:46:20', '2020-03-08 14:08:28'),
(2, 'Inauguration Ceremony', '1582194933.png', 'PAARU', 'Moving ahead with Physics', NULL, 1, 8, 1, '2019-12-05 06:07:18', '2020-02-20 22:49:20'),
(7, 'PAARU Executive Committee', '1583637151.jpg', 'PAARU', 'Moving ahead with Physics', NULL, 8, 9, 1, '2020-02-20 22:43:41', '2020-03-08 14:12:31'),
(6, 'Rally', '1582195209.png', 'PAARU', 'Moving ahead with Physics', NULL, 8, 8, 1, '2020-02-20 22:40:11', '2020-02-20 22:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `description`, `order`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'In voluptas.', 'in-voluptas.', 'Eaque doloribus est nihil aspernatur eligendi fugit qui. Tempore perferendis autem eum animi quia. Temporibus sint non libero minima magni sapiente numquam. Dolorum nostrum laboriosam nihil ut rerum illo laboriosam. Cupiditate reiciendis accusantium ipsum similique.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(2, 'Rem qui.', 'rem-qui.', 'Esse dolorem quidem porro. Officiis minima quo debitis et. Ipsum sunt quam cumque earum ut unde voluptas id.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(3, 'Incidunt alias.', 'incidunt-alias.', 'Optio facere accusantium fugiat cupiditate quae ipsa omnis. Dignissimos enim libero ipsa distinctio culpa fuga provident. Odio quas natus explicabo aut. Doloremque voluptates ut omnis est nulla accusamus quasi. Facere consequuntur fugiat laborum dolores dolor.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(4, 'Placeat officia.', 'placeat-officia.', 'Illo esse enim iusto fugit dolor fuga. Sed sequi eum consequuntur commodi tempore magnam. Sit molestias id voluptatem cumque qui nesciunt ipsam.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(5, 'Ut delectus.', 'ut-delectus.', 'Dolor perferendis nulla dolor perferendis. Et recusandae doloribus quod. Sunt est nihil nam occaecati odit possimus eos laboriosam. Vel dolor repudiandae non laborum et molestiae.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(6, 'Odit asperiores.', 'odit-asperiores.', 'Est quam eveniet alias voluptate voluptatem autem. Aperiam vel blanditiis voluptas sint est ab. Quo aspernatur corrupti ipsum reprehenderit nam ratione. Maiores et amet ea iste non incidunt amet.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(7, 'Voluptatem omnis.', 'voluptatem-omnis.', 'Esse est repudiandae beatae. Sequi id ipsam sit eveniet. Quaerat voluptas perspiciatis sequi dolor. Qui sit fugiat dolor occaecati necessitatibus.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(8, 'Animi minima aut.', 'animi-minima-aut.', 'Sed sunt quisquam quidem. Libero veniam eum quo.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(9, 'Dolores reiciendis.', 'dolores-reiciendis.', 'Modi officia quis natus quaerat officia sed. Ducimus voluptatibus enim occaecati voluptatibus. Qui adipisci nostrum necessitatibus molestias officia consequatur reprehenderit.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL),
(10, 'Et laudantium excepturi.', 'et-laudantium-excepturi.', 'Adipisci ut ut temporibus tempore laudantium voluptatem adipisci. Minima quo magnam qui non et. Dolore voluptatem tenetur voluptate et aut.', NULL, 1, 1, 1, NULL, '2019-09-25 09:03:50', '2019-09-25 09:03:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', 'debidwar.comilla.gov.bd', NULL, NULL),
(2, 1, 'Barura', 'বরুড়া', 'barura.comilla.gov.bd', NULL, NULL),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', 'brahmanpara.comilla.gov.bd', NULL, NULL),
(4, 1, 'Chandina', 'চান্দিনা', 'chandina.comilla.gov.bd', NULL, NULL),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', 'chauddagram.comilla.gov.bd', NULL, NULL),
(6, 1, 'Daudkandi', 'দাউদকান্দি', 'daudkandi.comilla.gov.bd', NULL, NULL),
(7, 1, 'Homna', 'হোমনা', 'homna.comilla.gov.bd', NULL, NULL),
(8, 1, 'Laksam', 'লাকসাম', 'laksam.comilla.gov.bd', NULL, NULL),
(9, 1, 'Muradnagar', 'মুরাদনগর', 'muradnagar.comilla.gov.bd', NULL, NULL),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', 'nangalkot.comilla.gov.bd', NULL, NULL),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', 'comillasadar.comilla.gov.bd', NULL, NULL),
(12, 1, 'Meghna', 'মেঘনা', 'meghna.comilla.gov.bd', NULL, NULL),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', 'monohargonj.comilla.gov.bd', NULL, NULL),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', 'sadarsouth.comilla.gov.bd', NULL, NULL),
(15, 1, 'Titas', 'তিতাস', 'titas.comilla.gov.bd', NULL, NULL),
(16, 1, 'Burichang', 'বুড়িচং', 'burichang.comilla.gov.bd', NULL, NULL),
(17, 1, 'Lalmai', 'লালমাই', 'lalmai.comilla.gov.bd', NULL, NULL),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', 'chhagalnaiya.feni.gov.bd', NULL, NULL),
(19, 2, 'Feni Sadar', 'ফেনী সদর', 'sadar.feni.gov.bd', NULL, NULL),
(20, 2, 'Sonagazi', 'সোনাগাজী', 'sonagazi.feni.gov.bd', NULL, NULL),
(21, 2, 'Fulgazi', 'ফুলগাজী', 'fulgazi.feni.gov.bd', NULL, NULL),
(22, 2, 'Parshuram', 'পরশুরাম', 'parshuram.feni.gov.bd', NULL, NULL),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', 'daganbhuiyan.feni.gov.bd', NULL, NULL),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 'sadar.brahmanbaria.gov.bd', NULL, NULL),
(25, 3, 'Kasba', 'কসবা', 'kasba.brahmanbaria.gov.bd', NULL, NULL),
(26, 3, 'Nasirnagar', 'নাসিরনগর', 'nasirnagar.brahmanbaria.gov.bd', NULL, NULL),
(27, 3, 'Sarail', 'সরাইল', 'sarail.brahmanbaria.gov.bd', NULL, NULL),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', 'ashuganj.brahmanbaria.gov.bd', NULL, NULL),
(29, 3, 'Akhaura', 'আখাউড়া', 'akhaura.brahmanbaria.gov.bd', NULL, NULL),
(30, 3, 'Nabinagar', 'নবীনগর', 'nabinagar.brahmanbaria.gov.bd', NULL, NULL),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', 'bancharampur.brahmanbaria.gov.bd', NULL, NULL),
(32, 3, 'Bijoynagar', 'বিজয়নগর', 'bijoynagar.brahmanbaria.gov.bd    ', NULL, NULL),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 'sadar.rangamati.gov.bd', NULL, NULL),
(34, 4, 'Kaptai', 'কাপ্তাই', 'kaptai.rangamati.gov.bd', NULL, NULL),
(35, 4, 'Kawkhali', 'কাউখালী', 'kawkhali.rangamati.gov.bd', NULL, NULL),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', 'baghaichari.rangamati.gov.bd', NULL, NULL),
(37, 4, 'Barkal', 'বরকল', 'barkal.rangamati.gov.bd', NULL, NULL),
(38, 4, 'Langadu', 'লংগদু', 'langadu.rangamati.gov.bd', NULL, NULL),
(39, 4, 'Rajasthali', 'রাজস্থলী', 'rajasthali.rangamati.gov.bd', NULL, NULL),
(40, 4, 'Belaichari', 'বিলাইছড়ি', 'belaichari.rangamati.gov.bd', NULL, NULL),
(41, 4, 'Juraichari', 'জুরাছড়ি', 'juraichari.rangamati.gov.bd', NULL, NULL),
(42, 4, 'Naniarchar', 'নানিয়ারচর', 'naniarchar.rangamati.gov.bd', NULL, NULL),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', 'sadar.noakhali.gov.bd', NULL, NULL),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.noakhali.gov.bd', NULL, NULL),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', 'begumganj.noakhali.gov.bd', NULL, NULL),
(46, 5, 'Hatia', 'হাতিয়া', 'hatia.noakhali.gov.bd', NULL, NULL),
(47, 5, 'Subarnachar', 'সুবর্ণচর', 'subarnachar.noakhali.gov.bd', NULL, NULL),
(48, 5, 'Kabirhat', 'কবিরহাট', 'kabirhat.noakhali.gov.bd', NULL, NULL),
(49, 5, 'Senbug', 'সেনবাগ', 'senbug.noakhali.gov.bd', NULL, NULL),
(50, 5, 'Chatkhil', 'চাটখিল', 'chatkhil.noakhali.gov.bd', NULL, NULL),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', 'sonaimori.noakhali.gov.bd', NULL, NULL),
(52, 6, 'Haimchar', 'হাইমচর', 'haimchar.chandpur.gov.bd', NULL, NULL),
(53, 6, 'Kachua', 'কচুয়া', 'kachua.chandpur.gov.bd', NULL, NULL),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', 'shahrasti.chandpur.gov.bd', NULL, NULL),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', 'sadar.chandpur.gov.bd', NULL, NULL),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', 'matlabsouth.chandpur.gov.bd', NULL, NULL),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', 'hajiganj.chandpur.gov.bd', NULL, NULL),
(58, 6, 'Matlab North', 'মতলব উত্তর', 'matlabnorth.chandpur.gov.bd', NULL, NULL),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', 'faridgonj.chandpur.gov.bd', NULL, NULL),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 'sadar.lakshmipur.gov.bd', NULL, NULL),
(61, 7, 'Kamalnagar', 'কমলনগর', 'kamalnagar.lakshmipur.gov.bd', NULL, NULL),
(62, 7, 'Raipur', 'রায়পুর', 'raipur.lakshmipur.gov.bd', NULL, NULL),
(63, 7, 'Ramgati', 'রামগতি', 'ramgati.lakshmipur.gov.bd', NULL, NULL),
(64, 7, 'Ramganj', 'রামগঞ্জ', 'ramganj.lakshmipur.gov.bd', NULL, NULL),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', 'rangunia.chittagong.gov.bd', NULL, NULL),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', 'sitakunda.chittagong.gov.bd', NULL, NULL),
(67, 8, 'Mirsharai', 'মীরসরাই', 'mirsharai.chittagong.gov.bd', NULL, NULL),
(68, 8, 'Patiya', 'পটিয়া', 'patiya.chittagong.gov.bd', NULL, NULL),
(69, 8, 'Sandwip', 'সন্দ্বীপ', 'sandwip.chittagong.gov.bd', NULL, NULL),
(70, 8, 'Banshkhali', 'বাঁশখালী', 'banshkhali.chittagong.gov.bd', NULL, NULL),
(71, 8, 'Boalkhali', 'বোয়ালখালী', 'boalkhali.chittagong.gov.bd', NULL, NULL),
(72, 8, 'Anwara', 'আনোয়ারা', 'anwara.chittagong.gov.bd', NULL, NULL),
(73, 8, 'Chandanaish', 'চন্দনাইশ', 'chandanaish.chittagong.gov.bd', NULL, NULL),
(74, 8, 'Satkania', 'সাতকানিয়া', 'satkania.chittagong.gov.bd', NULL, NULL),
(75, 8, 'Lohagara', 'লোহাগাড়া', 'lohagara.chittagong.gov.bd', NULL, NULL),
(76, 8, 'Hathazari', 'হাটহাজারী', 'hathazari.chittagong.gov.bd', NULL, NULL),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', 'fatikchhari.chittagong.gov.bd', NULL, NULL),
(78, 8, 'Raozan', 'রাউজান', 'raozan.chittagong.gov.bd', NULL, NULL),
(79, 8, 'Karnafuli', 'কর্ণফুলী', 'karnafuli.chittagong.gov.bd', NULL, NULL),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', 'sadar.coxsbazar.gov.bd', NULL, NULL),
(81, 9, 'Chakaria', 'চকরিয়া', 'chakaria.coxsbazar.gov.bd', NULL, NULL),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', 'kutubdia.coxsbazar.gov.bd', NULL, NULL),
(83, 9, 'Ukhiya', 'উখিয়া', 'ukhiya.coxsbazar.gov.bd', NULL, NULL),
(84, 9, 'Moheshkhali', 'মহেশখালী', 'moheshkhali.coxsbazar.gov.bd', NULL, NULL),
(85, 9, 'Pekua', 'পেকুয়া', 'pekua.coxsbazar.gov.bd', NULL, NULL),
(86, 9, 'Ramu', 'রামু', 'ramu.coxsbazar.gov.bd', NULL, NULL),
(87, 9, 'Teknaf', 'টেকনাফ', 'teknaf.coxsbazar.gov.bd', NULL, NULL),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', 'sadar.khagrachhari.gov.bd', NULL, NULL),
(89, 10, 'Dighinala', 'দিঘীনালা', 'dighinala.khagrachhari.gov.bd', NULL, NULL),
(90, 10, 'Panchari', 'পানছড়ি', 'panchari.khagrachhari.gov.bd', NULL, NULL),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', 'laxmichhari.khagrachhari.gov.bd', NULL, NULL),
(92, 10, 'Mohalchari', 'মহালছড়ি', 'mohalchari.khagrachhari.gov.bd', NULL, NULL),
(93, 10, 'Manikchari', 'মানিকছড়ি', 'manikchari.khagrachhari.gov.bd', NULL, NULL),
(94, 10, 'Ramgarh', 'রামগড়', 'ramgarh.khagrachhari.gov.bd', NULL, NULL),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', 'matiranga.khagrachhari.gov.bd', NULL, NULL),
(96, 10, 'Guimara', 'গুইমারা', 'guimara.khagrachhari.gov.bd', NULL, NULL),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', 'sadar.bandarban.gov.bd', NULL, NULL),
(98, 11, 'Alikadam', 'আলীকদম', 'alikadam.bandarban.gov.bd', NULL, NULL),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', 'naikhongchhari.bandarban.gov.bd', NULL, NULL),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', 'rowangchhari.bandarban.gov.bd', NULL, NULL),
(101, 11, 'Lama', 'লামা', 'lama.bandarban.gov.bd', NULL, NULL),
(102, 11, 'Ruma', 'রুমা', 'ruma.bandarban.gov.bd', NULL, NULL),
(103, 11, 'Thanchi', 'থানচি', 'thanchi.bandarban.gov.bd', NULL, NULL),
(104, 12, 'Belkuchi', 'বেলকুচি', 'belkuchi.sirajganj.gov.bd', NULL, NULL),
(105, 12, 'Chauhali', 'চৌহালি', 'chauhali.sirajganj.gov.bd', NULL, NULL),
(106, 12, 'Kamarkhand', 'কামারখন্দ', 'kamarkhand.sirajganj.gov.bd', NULL, NULL),
(107, 12, 'Kazipur', 'কাজীপুর', 'kazipur.sirajganj.gov.bd', NULL, NULL),
(108, 12, 'Raigonj', 'রায়গঞ্জ', 'raigonj.sirajganj.gov.bd', NULL, NULL),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', 'shahjadpur.sirajganj.gov.bd', NULL, NULL),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', 'sirajganjsadar.sirajganj.gov.bd', NULL, NULL),
(111, 12, 'Tarash', 'তাড়াশ', 'tarash.sirajganj.gov.bd', NULL, NULL),
(112, 12, 'Ullapara', 'উল্লাপাড়া', 'ullapara.sirajganj.gov.bd', NULL, NULL),
(113, 13, 'Sujanagar', 'সুজানগর', 'sujanagar.pabna.gov.bd', NULL, NULL),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', 'ishurdi.pabna.gov.bd', NULL, NULL),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', 'bhangura.pabna.gov.bd', NULL, NULL),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', 'pabnasadar.pabna.gov.bd', NULL, NULL),
(117, 13, 'Bera', 'বেড়া', 'bera.pabna.gov.bd', NULL, NULL),
(118, 13, 'Atghoria', 'আটঘরিয়া', 'atghoria.pabna.gov.bd', NULL, NULL),
(119, 13, 'Chatmohar', 'চাটমোহর', 'chatmohar.pabna.gov.bd', NULL, NULL),
(120, 13, 'Santhia', 'সাঁথিয়া', 'santhia.pabna.gov.bd', NULL, NULL),
(121, 13, 'Faridpur', 'ফরিদপুর', 'faridpur.pabna.gov.bd', NULL, NULL),
(122, 14, 'Kahaloo', 'কাহালু', 'kahaloo.bogra.gov.bd', NULL, NULL),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', 'sadar.bogra.gov.bd', NULL, NULL),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', 'shariakandi.bogra.gov.bd', NULL, NULL),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', 'shajahanpur.bogra.gov.bd', NULL, NULL),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', 'dupchanchia.bogra.gov.bd', NULL, NULL),
(127, 14, 'Adamdighi', 'আদমদিঘি', 'adamdighi.bogra.gov.bd', NULL, NULL),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', 'nondigram.bogra.gov.bd', NULL, NULL),
(129, 14, 'Sonatala', 'সোনাতলা', 'sonatala.bogra.gov.bd', NULL, NULL),
(130, 14, 'Dhunot', 'ধুনট', 'dhunot.bogra.gov.bd', NULL, NULL),
(131, 14, 'Gabtali', 'গাবতলী', 'gabtali.bogra.gov.bd', NULL, NULL),
(132, 14, 'Sherpur', 'শেরপুর', 'sherpur.bogra.gov.bd', NULL, NULL),
(133, 14, 'Shibganj', 'শিবগঞ্জ', 'shibganj.bogra.gov.bd', NULL, NULL),
(134, 15, 'Paba', 'পবা', 'paba.rajshahi.gov.bd', NULL, NULL),
(135, 15, 'Durgapur', 'দুর্গাপুর', 'durgapur.rajshahi.gov.bd', NULL, NULL),
(136, 15, 'Mohonpur', 'মোহনপুর', 'mohonpur.rajshahi.gov.bd', NULL, NULL),
(137, 15, 'Charghat', 'চারঘাট', 'charghat.rajshahi.gov.bd', NULL, NULL),
(138, 15, 'Puthia', 'পুঠিয়া', 'puthia.rajshahi.gov.bd', NULL, NULL),
(139, 15, 'Bagha', 'বাঘা', 'bagha.rajshahi.gov.bd', NULL, NULL),
(140, 15, 'Godagari', 'গোদাগাড়ী', 'godagari.rajshahi.gov.bd', NULL, NULL),
(141, 15, 'Tanore', 'তানোর', 'tanore.rajshahi.gov.bd', NULL, NULL),
(142, 15, 'Bagmara', 'বাগমারা', 'bagmara.rajshahi.gov.bd', NULL, NULL),
(143, 16, 'Natore Sadar', 'নাটোর সদর', 'natoresadar.natore.gov.bd', NULL, NULL),
(144, 16, 'Singra', 'সিংড়া', 'singra.natore.gov.bd', NULL, NULL),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', 'baraigram.natore.gov.bd', NULL, NULL),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', 'bagatipara.natore.gov.bd', NULL, NULL),
(147, 16, 'Lalpur', 'লালপুর', 'lalpur.natore.gov.bd', NULL, NULL),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', 'gurudaspur.natore.gov.bd', NULL, NULL),
(149, 16, 'Naldanga', 'নলডাঙ্গা', 'naldanga.natore.gov.bd', NULL, NULL),
(150, 17, 'Akkelpur', 'আক্কেলপুর', 'akkelpur.joypurhat.gov.bd', NULL, NULL),
(151, 17, 'Kalai', 'কালাই', 'kalai.joypurhat.gov.bd', NULL, NULL),
(152, 17, 'Khetlal', 'ক্ষেতলাল', 'khetlal.joypurhat.gov.bd', NULL, NULL),
(153, 17, 'Panchbibi', 'পাঁচবিবি', 'panchbibi.joypurhat.gov.bd', NULL, NULL),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 'joypurhatsadar.joypurhat.gov.bd', NULL, NULL),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', 'chapainawabganjsadar.chapainawabganj.gov.bd', NULL, NULL),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', 'gomostapur.chapainawabganj.gov.bd', NULL, NULL),
(157, 18, 'Nachol', 'নাচোল', 'nachol.chapainawabganj.gov.bd', NULL, NULL),
(158, 18, 'Bholahat', 'ভোলাহাট', 'bholahat.chapainawabganj.gov.bd', NULL, NULL),
(159, 18, 'Shibganj', 'শিবগঞ্জ', 'shibganj.chapainawabganj.gov.bd', NULL, NULL),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', 'mohadevpur.naogaon.gov.bd', NULL, NULL),
(161, 19, 'Badalgachi', 'বদলগাছী', 'badalgachi.naogaon.gov.bd', NULL, NULL),
(162, 19, 'Patnitala', 'পত্নিতলা', 'patnitala.naogaon.gov.bd', NULL, NULL),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', 'dhamoirhat.naogaon.gov.bd', NULL, NULL),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', 'niamatpur.naogaon.gov.bd', NULL, NULL),
(165, 19, 'Manda', 'মান্দা', 'manda.naogaon.gov.bd', NULL, NULL),
(166, 19, 'Atrai', 'আত্রাই', 'atrai.naogaon.gov.bd', NULL, NULL),
(167, 19, 'Raninagar', 'রাণীনগর', 'raninagar.naogaon.gov.bd', NULL, NULL),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', 'naogaonsadar.naogaon.gov.bd', NULL, NULL),
(169, 19, 'Porsha', 'পোরশা', 'porsha.naogaon.gov.bd', NULL, NULL),
(170, 19, 'Sapahar', 'সাপাহার', 'sapahar.naogaon.gov.bd', NULL, NULL),
(171, 20, 'Manirampur', 'মণিরামপুর', 'manirampur.jessore.gov.bd', NULL, NULL),
(172, 20, 'Abhaynagar', 'অভয়নগর', 'abhaynagar.jessore.gov.bd', NULL, NULL),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', 'bagherpara.jessore.gov.bd', NULL, NULL),
(174, 20, 'Chougachha', 'চৌগাছা', 'chougachha.jessore.gov.bd', NULL, NULL),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', 'jhikargacha.jessore.gov.bd', NULL, NULL),
(176, 20, 'Keshabpur', 'কেশবপুর', 'keshabpur.jessore.gov.bd', NULL, NULL),
(177, 20, 'Jessore Sadar', 'যশোর সদর', 'sadar.jessore.gov.bd', NULL, NULL),
(178, 20, 'Sharsha', 'শার্শা', 'sharsha.jessore.gov.bd', NULL, NULL),
(179, 21, 'Assasuni', 'আশাশুনি', 'assasuni.satkhira.gov.bd', NULL, NULL),
(180, 21, 'Debhata', 'দেবহাটা', 'debhata.satkhira.gov.bd', NULL, NULL),
(181, 21, 'Kalaroa', 'কলারোয়া', 'kalaroa.satkhira.gov.bd', NULL, NULL),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 'satkhirasadar.satkhira.gov.bd', NULL, NULL),
(183, 21, 'Shyamnagar', 'শ্যামনগর', 'shyamnagar.satkhira.gov.bd', NULL, NULL),
(184, 21, 'Tala', 'তালা', 'tala.satkhira.gov.bd', NULL, NULL),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', 'kaliganj.satkhira.gov.bd', NULL, NULL),
(186, 22, 'Mujibnagar', 'মুজিবনগর', 'mujibnagar.meherpur.gov.bd', NULL, NULL),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', 'meherpursadar.meherpur.gov.bd', NULL, NULL),
(188, 22, 'Gangni', 'গাংনী', 'gangni.meherpur.gov.bd', NULL, NULL),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', 'narailsadar.narail.gov.bd', NULL, NULL),
(190, 23, 'Lohagara', 'লোহাগড়া', 'lohagara.narail.gov.bd', NULL, NULL),
(191, 23, 'Kalia', 'কালিয়া', 'kalia.narail.gov.bd', NULL, NULL),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', 'chuadangasadar.chuadanga.gov.bd', NULL, NULL),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', 'alamdanga.chuadanga.gov.bd', NULL, NULL),
(194, 24, 'Damurhuda', 'দামুড়হুদা', 'damurhuda.chuadanga.gov.bd', NULL, NULL),
(195, 24, 'Jibannagar', 'জীবননগর', 'jibannagar.chuadanga.gov.bd', NULL, NULL),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 'kushtiasadar.kushtia.gov.bd', NULL, NULL),
(197, 25, 'Kumarkhali', 'কুমারখালী', 'kumarkhali.kushtia.gov.bd', NULL, NULL),
(198, 25, 'Khoksa', 'খোকসা', 'khoksa.kushtia.gov.bd', NULL, NULL),
(199, 25, 'Mirpur', 'মিরপুর', 'mirpurkushtia.kushtia.gov.bd', NULL, NULL),
(200, 25, 'Daulatpur', 'দৌলতপুর', 'daulatpur.kushtia.gov.bd', NULL, NULL),
(201, 25, 'Bheramara', 'ভেড়ামারা', 'bheramara.kushtia.gov.bd', NULL, NULL),
(202, 26, 'Shalikha', 'শালিখা', 'shalikha.magura.gov.bd', NULL, NULL),
(203, 26, 'Sreepur', 'শ্রীপুর', 'sreepur.magura.gov.bd', NULL, NULL),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', 'magurasadar.magura.gov.bd', NULL, NULL),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', 'mohammadpur.magura.gov.bd', NULL, NULL),
(206, 27, 'Paikgasa', 'পাইকগাছা', 'paikgasa.khulna.gov.bd', NULL, NULL),
(207, 27, 'Fultola', 'ফুলতলা', 'fultola.khulna.gov.bd', NULL, NULL),
(208, 27, 'Digholia', 'দিঘলিয়া', 'digholia.khulna.gov.bd', NULL, NULL),
(209, 27, 'Rupsha', 'রূপসা', 'rupsha.khulna.gov.bd', NULL, NULL),
(210, 27, 'Terokhada', 'তেরখাদা', 'terokhada.khulna.gov.bd', NULL, NULL),
(211, 27, 'Dumuria', 'ডুমুরিয়া', 'dumuria.khulna.gov.bd', NULL, NULL),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', 'botiaghata.khulna.gov.bd', NULL, NULL),
(213, 27, 'Dakop', 'দাকোপ', 'dakop.khulna.gov.bd', NULL, NULL),
(214, 27, 'Koyra', 'কয়রা', 'koyra.khulna.gov.bd', NULL, NULL),
(215, 28, 'Fakirhat', 'ফকিরহাট', 'fakirhat.bagerhat.gov.bd', NULL, NULL),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', 'sadar.bagerhat.gov.bd', NULL, NULL),
(217, 28, 'Mollahat', 'মোল্লাহাট', 'mollahat.bagerhat.gov.bd', NULL, NULL),
(218, 28, 'Sarankhola', 'শরণখোলা', 'sarankhola.bagerhat.gov.bd', NULL, NULL),
(219, 28, 'Rampal', 'রামপাল', 'rampal.bagerhat.gov.bd', NULL, NULL),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', 'morrelganj.bagerhat.gov.bd', NULL, NULL),
(221, 28, 'Kachua', 'কচুয়া', 'kachua.bagerhat.gov.bd', NULL, NULL),
(222, 28, 'Mongla', 'মোংলা', 'mongla.bagerhat.gov.bd', NULL, NULL),
(223, 28, 'Chitalmari', 'চিতলমারী', 'chitalmari.bagerhat.gov.bd', NULL, NULL),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 'sadar.jhenaidah.gov.bd', NULL, NULL),
(225, 29, 'Shailkupa', 'শৈলকুপা', 'shailkupa.jhenaidah.gov.bd', NULL, NULL),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', 'harinakundu.jhenaidah.gov.bd', NULL, NULL),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.jhenaidah.gov.bd', NULL, NULL),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', 'kotchandpur.jhenaidah.gov.bd', NULL, NULL),
(229, 29, 'Moheshpur', 'মহেশপুর', 'moheshpur.jhenaidah.gov.bd', NULL, NULL),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', 'sadar.jhalakathi.gov.bd', NULL, NULL),
(231, 30, 'Kathalia', 'কাঠালিয়া', 'kathalia.jhalakathi.gov.bd', NULL, NULL),
(232, 30, 'Nalchity', 'নলছিটি', 'nalchity.jhalakathi.gov.bd', NULL, NULL),
(233, 30, 'Rajapur', 'রাজাপুর', 'rajapur.jhalakathi.gov.bd', NULL, NULL),
(234, 31, 'Bauphal', 'বাউফল', 'bauphal.patuakhali.gov.bd', NULL, NULL),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 'sadar.patuakhali.gov.bd', NULL, NULL),
(236, 31, 'Dumki', 'দুমকি', 'dumki.patuakhali.gov.bd', NULL, NULL),
(237, 31, 'Dashmina', 'দশমিনা', 'dashmina.patuakhali.gov.bd', NULL, NULL),
(238, 31, 'Kalapara', 'কলাপাড়া', 'kalapara.patuakhali.gov.bd', NULL, NULL),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', 'mirzaganj.patuakhali.gov.bd', NULL, NULL),
(240, 31, 'Galachipa', 'গলাচিপা', 'galachipa.patuakhali.gov.bd', NULL, NULL),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', 'rangabali.patuakhali.gov.bd', NULL, NULL),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', 'sadar.pirojpur.gov.bd', NULL, NULL),
(243, 32, 'Nazirpur', 'নাজিরপুর', 'nazirpur.pirojpur.gov.bd', NULL, NULL),
(244, 32, 'Kawkhali', 'কাউখালী', 'kawkhali.pirojpur.gov.bd', NULL, NULL),
(245, 32, 'Zianagar', 'জিয়ানগর', 'zianagar.pirojpur.gov.bd', NULL, NULL),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', 'bhandaria.pirojpur.gov.bd', NULL, NULL),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', 'mathbaria.pirojpur.gov.bd', NULL, NULL),
(248, 32, 'Nesarabad', 'নেছারাবাদ', 'nesarabad.pirojpur.gov.bd', NULL, NULL),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', 'barisalsadar.barisal.gov.bd', NULL, NULL),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', 'bakerganj.barisal.gov.bd', NULL, NULL),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', 'babuganj.barisal.gov.bd', NULL, NULL),
(252, 33, 'Wazirpur', 'উজিরপুর', 'wazirpur.barisal.gov.bd', NULL, NULL),
(253, 33, 'Banaripara', 'বানারীপাড়া', 'banaripara.barisal.gov.bd', NULL, NULL),
(254, 33, 'Gournadi', 'গৌরনদী', 'gournadi.barisal.gov.bd', NULL, NULL),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', 'agailjhara.barisal.gov.bd', NULL, NULL),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', 'mehendiganj.barisal.gov.bd', NULL, NULL),
(257, 33, 'Muladi', 'মুলাদী', 'muladi.barisal.gov.bd', NULL, NULL),
(258, 33, 'Hizla', 'হিজলা', 'hizla.barisal.gov.bd', NULL, NULL),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', 'sadar.bhola.gov.bd', NULL, NULL),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', 'borhanuddin.bhola.gov.bd', NULL, NULL),
(261, 34, 'Charfesson', 'চরফ্যাশন', 'charfesson.bhola.gov.bd', NULL, NULL),
(262, 34, 'Doulatkhan', 'দৌলতখান', 'doulatkhan.bhola.gov.bd', NULL, NULL),
(263, 34, 'Monpura', 'মনপুরা', 'monpura.bhola.gov.bd', NULL, NULL),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', 'tazumuddin.bhola.gov.bd', NULL, NULL),
(265, 34, 'Lalmohan', 'লালমোহন', 'lalmohan.bhola.gov.bd', NULL, NULL),
(266, 35, 'Amtali', 'আমতলী', 'amtali.barguna.gov.bd', NULL, NULL),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', 'sadar.barguna.gov.bd', NULL, NULL),
(268, 35, 'Betagi', 'বেতাগী', 'betagi.barguna.gov.bd', NULL, NULL),
(269, 35, 'Bamna', 'বামনা', 'bamna.barguna.gov.bd', NULL, NULL),
(270, 35, 'Pathorghata', 'পাথরঘাটা', 'pathorghata.barguna.gov.bd', NULL, NULL),
(271, 35, 'Taltali', 'তালতলি', 'taltali.barguna.gov.bd', NULL, NULL),
(272, 36, 'Balaganj', 'বালাগঞ্জ', 'balaganj.sylhet.gov.bd', NULL, NULL),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', 'beanibazar.sylhet.gov.bd', NULL, NULL),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', 'bishwanath.sylhet.gov.bd', NULL, NULL),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.sylhet.gov.bd', NULL, NULL),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 'fenchuganj.sylhet.gov.bd', NULL, NULL),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', 'golapganj.sylhet.gov.bd', NULL, NULL),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', 'gowainghat.sylhet.gov.bd', NULL, NULL),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', 'jaintiapur.sylhet.gov.bd', NULL, NULL),
(280, 36, 'Kanaighat', 'কানাইঘাট', 'kanaighat.sylhet.gov.bd', NULL, NULL),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', 'sylhetsadar.sylhet.gov.bd', NULL, NULL),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', 'zakiganj.sylhet.gov.bd', NULL, NULL),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', 'dakshinsurma.sylhet.gov.bd', NULL, NULL),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', 'osmaninagar.sylhet.gov.bd', NULL, NULL),
(285, 37, 'Barlekha', 'বড়লেখা', 'barlekha.moulvibazar.gov.bd', NULL, NULL),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', 'kamolganj.moulvibazar.gov.bd', NULL, NULL),
(287, 37, 'Kulaura', 'কুলাউড়া', 'kulaura.moulvibazar.gov.bd', NULL, NULL),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', 'moulvibazarsadar.moulvibazar.gov.bd', NULL, NULL),
(289, 37, 'Rajnagar', 'রাজনগর', 'rajnagar.moulvibazar.gov.bd', NULL, NULL),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', 'sreemangal.moulvibazar.gov.bd', NULL, NULL),
(291, 37, 'Juri', 'জুড়ী', 'juri.moulvibazar.gov.bd', NULL, NULL),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', 'nabiganj.habiganj.gov.bd', NULL, NULL),
(293, 38, 'Bahubal', 'বাহুবল', 'bahubal.habiganj.gov.bd', NULL, NULL),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', 'ajmiriganj.habiganj.gov.bd', NULL, NULL),
(295, 38, 'Baniachong', 'বানিয়াচং', 'baniachong.habiganj.gov.bd', NULL, NULL),
(296, 38, 'Lakhai', 'লাখাই', 'lakhai.habiganj.gov.bd', NULL, NULL),
(297, 38, 'Chunarughat', 'চুনারুঘাট', 'chunarughat.habiganj.gov.bd', NULL, NULL),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 'habiganjsadar.habiganj.gov.bd', NULL, NULL),
(299, 38, 'Madhabpur', 'মাধবপুর', 'madhabpur.habiganj.gov.bd', NULL, NULL),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 'sadar.sunamganj.gov.bd', NULL, NULL),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', 'southsunamganj.sunamganj.gov.bd', NULL, NULL),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', 'bishwambarpur.sunamganj.gov.bd', NULL, NULL),
(303, 39, 'Chhatak', 'ছাতক', 'chhatak.sunamganj.gov.bd', NULL, NULL),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', 'jagannathpur.sunamganj.gov.bd', NULL, NULL),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', 'dowarabazar.sunamganj.gov.bd', NULL, NULL),
(306, 39, 'Tahirpur', 'তাহিরপুর', 'tahirpur.sunamganj.gov.bd', NULL, NULL),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', 'dharmapasha.sunamganj.gov.bd', NULL, NULL),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', 'jamalganj.sunamganj.gov.bd', NULL, NULL),
(309, 39, 'Shalla', 'শাল্লা', 'shalla.sunamganj.gov.bd', NULL, NULL),
(310, 39, 'Derai', 'দিরাই', 'derai.sunamganj.gov.bd', NULL, NULL),
(311, 40, 'Belabo', 'বেলাবো', 'belabo.narsingdi.gov.bd', NULL, NULL),
(312, 40, 'Monohardi', 'মনোহরদী', 'monohardi.narsingdi.gov.bd', NULL, NULL),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর', 'narsingdisadar.narsingdi.gov.bd', NULL, NULL),
(314, 40, 'Palash', 'পলাশ', 'palash.narsingdi.gov.bd', NULL, NULL),
(315, 40, 'Raipura', 'রায়পুরা', 'raipura.narsingdi.gov.bd', NULL, NULL),
(316, 40, 'Shibpur', 'শিবপুর', 'shibpur.narsingdi.gov.bd', NULL, NULL),
(317, 41, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.gazipur.gov.bd', NULL, NULL),
(318, 41, 'Kaliakair', 'কালিয়াকৈর', 'kaliakair.gazipur.gov.bd', NULL, NULL),
(319, 41, 'Kapasia', 'কাপাসিয়া', 'kapasia.gazipur.gov.bd', NULL, NULL),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর', 'sadar.gazipur.gov.bd', NULL, NULL),
(321, 41, 'Sreepur', 'শ্রীপুর', 'sreepur.gazipur.gov.bd', NULL, NULL),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর', 'sadar.shariatpur.gov.bd', NULL, NULL),
(323, 42, 'Naria', 'নড়িয়া', 'naria.shariatpur.gov.bd', NULL, NULL),
(324, 42, 'Zajira', 'জাজিরা', 'zajira.shariatpur.gov.bd', NULL, NULL),
(325, 42, 'Gosairhat', 'গোসাইরহাট', 'gosairhat.shariatpur.gov.bd', NULL, NULL),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ', 'bhedarganj.shariatpur.gov.bd', NULL, NULL),
(327, 42, 'Damudya', 'ডামুড্যা', 'damudya.shariatpur.gov.bd', NULL, NULL),
(328, 43, 'Araihazar', 'আড়াইহাজার', 'araihazar.narayanganj.gov.bd', NULL, NULL),
(329, 43, 'Bandar', 'বন্দর', 'bandar.narayanganj.gov.bd', NULL, NULL),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', 'narayanganjsadar.narayanganj.gov.bd', NULL, NULL),
(331, 43, 'Rupganj', 'রূপগঞ্জ', 'rupganj.narayanganj.gov.bd', NULL, NULL),
(332, 43, 'Sonargaon', 'সোনারগাঁ', 'sonargaon.narayanganj.gov.bd', NULL, NULL),
(333, 44, 'Basail', 'বাসাইল', 'basail.tangail.gov.bd', NULL, NULL),
(334, 44, 'Bhuapur', 'ভুয়াপুর', 'bhuapur.tangail.gov.bd', NULL, NULL),
(335, 44, 'Delduar', 'দেলদুয়ার', 'delduar.tangail.gov.bd', NULL, NULL),
(336, 44, 'Ghatail', 'ঘাটাইল', 'ghatail.tangail.gov.bd', NULL, NULL),
(337, 44, 'Gopalpur', 'গোপালপুর', 'gopalpur.tangail.gov.bd', NULL, NULL),
(338, 44, 'Madhupur', 'মধুপুর', 'madhupur.tangail.gov.bd', NULL, NULL),
(339, 44, 'Mirzapur', 'মির্জাপুর', 'mirzapur.tangail.gov.bd', NULL, NULL),
(340, 44, 'Nagarpur', 'নাগরপুর', 'nagarpur.tangail.gov.bd', NULL, NULL),
(341, 44, 'Sakhipur', 'সখিপুর', 'sakhipur.tangail.gov.bd', NULL, NULL),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর', 'tangailsadar.tangail.gov.bd', NULL, NULL),
(343, 44, 'Kalihati', 'কালিহাতী', 'kalihati.tangail.gov.bd', NULL, NULL),
(344, 44, 'Dhanbari', 'ধনবাড়ী', 'dhanbari.tangail.gov.bd', NULL, NULL),
(345, 45, 'Itna', 'ইটনা', 'itna.kishoreganj.gov.bd', NULL, NULL),
(346, 45, 'Katiadi', 'কটিয়াদী', 'katiadi.kishoreganj.gov.bd', NULL, NULL),
(347, 45, 'Bhairab', 'ভৈরব', 'bhairab.kishoreganj.gov.bd', NULL, NULL),
(348, 45, 'Tarail', 'তাড়াইল', 'tarail.kishoreganj.gov.bd', NULL, NULL),
(349, 45, 'Hossainpur', 'হোসেনপুর', 'hossainpur.kishoreganj.gov.bd', NULL, NULL),
(350, 45, 'Pakundia', 'পাকুন্দিয়া', 'pakundia.kishoreganj.gov.bd', NULL, NULL),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর', 'kuliarchar.kishoreganj.gov.bd', NULL, NULL),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 'kishoreganjsadar.kishoreganj.gov.bd', NULL, NULL),
(353, 45, 'Karimgonj', 'করিমগঞ্জ', 'karimgonj.kishoreganj.gov.bd', NULL, NULL),
(354, 45, 'Bajitpur', 'বাজিতপুর', 'bajitpur.kishoreganj.gov.bd', NULL, NULL),
(355, 45, 'Austagram', 'অষ্টগ্রাম', 'austagram.kishoreganj.gov.bd', NULL, NULL),
(356, 45, 'Mithamoin', 'মিঠামইন', 'mithamoin.kishoreganj.gov.bd', NULL, NULL),
(357, 45, 'Nikli', 'নিকলী', 'nikli.kishoreganj.gov.bd', NULL, NULL),
(358, 46, 'Harirampur', 'হরিরামপুর', 'harirampur.manikganj.gov.bd', NULL, NULL),
(359, 46, 'Saturia', 'সাটুরিয়া', 'saturia.manikganj.gov.bd', NULL, NULL),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 'sadar.manikganj.gov.bd', NULL, NULL),
(361, 46, 'Gior', 'ঘিওর', 'gior.manikganj.gov.bd', NULL, NULL),
(362, 46, 'Shibaloy', 'শিবালয়', 'shibaloy.manikganj.gov.bd', NULL, NULL),
(363, 46, 'Doulatpur', 'দৌলতপুর', 'doulatpur.manikganj.gov.bd', NULL, NULL),
(364, 46, 'Singiar', 'সিংগাইর', 'singiar.manikganj.gov.bd', NULL, NULL),
(365, 47, 'Savar', 'সাভার', 'savar.dhaka.gov.bd', NULL, NULL),
(366, 47, 'Dhamrai', 'ধামরাই', 'dhamrai.dhaka.gov.bd', NULL, NULL),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ', 'keraniganj.dhaka.gov.bd', NULL, NULL),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dhaka.gov.bd', NULL, NULL),
(369, 47, 'Dohar', 'দোহার', 'dohar.dhaka.gov.bd', NULL, NULL),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 'sadar.munshiganj.gov.bd', NULL, NULL),
(371, 48, 'Sreenagar', 'শ্রীনগর', 'sreenagar.munshiganj.gov.bd', NULL, NULL),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান', 'sirajdikhan.munshiganj.gov.bd', NULL, NULL),
(373, 48, 'Louhajanj', 'লৌহজং', 'louhajanj.munshiganj.gov.bd', NULL, NULL),
(374, 48, 'Gajaria', 'গজারিয়া', 'gajaria.munshiganj.gov.bd', NULL, NULL),
(375, 48, 'Tongibari', 'টংগীবাড়ি', 'tongibari.munshiganj.gov.bd', NULL, NULL),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর', 'sadar.rajbari.gov.bd', NULL, NULL),
(377, 49, 'Goalanda', 'গোয়ালন্দ', 'goalanda.rajbari.gov.bd', NULL, NULL),
(378, 49, 'Pangsa', 'পাংশা', 'pangsa.rajbari.gov.bd', NULL, NULL),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি', 'baliakandi.rajbari.gov.bd', NULL, NULL),
(380, 49, 'Kalukhali', 'কালুখালী', 'kalukhali.rajbari.gov.bd', NULL, NULL),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর', 'sadar.madaripur.gov.bd', NULL, NULL),
(382, 50, 'Shibchar', 'শিবচর', 'shibchar.madaripur.gov.bd', NULL, NULL),
(383, 50, 'Kalkini', 'কালকিনি', 'kalkini.madaripur.gov.bd', NULL, NULL),
(384, 50, 'Rajoir', 'রাজৈর', 'rajoir.madaripur.gov.bd', NULL, NULL),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 'sadar.gopalganj.gov.bd', NULL, NULL),
(386, 51, 'Kashiani', 'কাশিয়ানী', 'kashiani.gopalganj.gov.bd', NULL, NULL),
(387, 51, 'Tungipara', 'টুংগীপাড়া', 'tungipara.gopalganj.gov.bd', NULL, NULL),
(388, 51, 'Kotalipara', 'কোটালীপাড়া', 'kotalipara.gopalganj.gov.bd', NULL, NULL),
(389, 51, 'Muksudpur', 'মুকসুদপুর', 'muksudpur.gopalganj.gov.bd', NULL, NULL),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর', 'sadar.faridpur.gov.bd', NULL, NULL),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা', 'alfadanga.faridpur.gov.bd', NULL, NULL),
(392, 52, 'Boalmari', 'বোয়ালমারী', 'boalmari.faridpur.gov.bd', NULL, NULL),
(393, 52, 'Sadarpur', 'সদরপুর', 'sadarpur.faridpur.gov.bd', NULL, NULL),
(394, 52, 'Nagarkanda', 'নগরকান্দা', 'nagarkanda.faridpur.gov.bd', NULL, NULL),
(395, 52, 'Bhanga', 'ভাঙ্গা', 'bhanga.faridpur.gov.bd', NULL, NULL),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন', 'charbhadrasan.faridpur.gov.bd', NULL, NULL),
(397, 52, 'Madhukhali', 'মধুখালী', 'madhukhali.faridpur.gov.bd', NULL, NULL),
(398, 52, 'Saltha', 'সালথা', 'saltha.faridpur.gov.bd', NULL, NULL),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 'panchagarhsadar.panchagarh.gov.bd', NULL, NULL),
(400, 53, 'Debiganj', 'দেবীগঞ্জ', 'debiganj.panchagarh.gov.bd', NULL, NULL),
(401, 53, 'Boda', 'বোদা', 'boda.panchagarh.gov.bd', NULL, NULL),
(402, 53, 'Atwari', 'আটোয়ারী', 'atwari.panchagarh.gov.bd', NULL, NULL),
(403, 53, 'Tetulia', 'তেতুলিয়া', 'tetulia.panchagarh.gov.bd', NULL, NULL),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dinajpur.gov.bd', NULL, NULL),
(405, 54, 'Birganj', 'বীরগঞ্জ', 'birganj.dinajpur.gov.bd', NULL, NULL),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট', 'ghoraghat.dinajpur.gov.bd', NULL, NULL),
(407, 54, 'Birampur', 'বিরামপুর', 'birampur.dinajpur.gov.bd', NULL, NULL),
(408, 54, 'Parbatipur', 'পার্বতীপুর', 'parbatipur.dinajpur.gov.bd', NULL, NULL),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ', 'bochaganj.dinajpur.gov.bd', NULL, NULL),
(410, 54, 'Kaharol', 'কাহারোল', 'kaharol.dinajpur.gov.bd', NULL, NULL),
(411, 54, 'Fulbari', 'ফুলবাড়ী', 'fulbari.dinajpur.gov.bd', NULL, NULL),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর', 'dinajpursadar.dinajpur.gov.bd', NULL, NULL),
(413, 54, 'Hakimpur', 'হাকিমপুর', 'hakimpur.dinajpur.gov.bd', NULL, NULL),
(414, 54, 'Khansama', 'খানসামা', 'khansama.dinajpur.gov.bd', NULL, NULL),
(415, 54, 'Birol', 'বিরল', 'birol.dinajpur.gov.bd', NULL, NULL),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর', 'chirirbandar.dinajpur.gov.bd', NULL, NULL),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', 'sadar.lalmonirhat.gov.bd', NULL, NULL),
(418, 55, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.lalmonirhat.gov.bd', NULL, NULL),
(419, 55, 'Hatibandha', 'হাতীবান্ধা', 'hatibandha.lalmonirhat.gov.bd', NULL, NULL),
(420, 55, 'Patgram', 'পাটগ্রাম', 'patgram.lalmonirhat.gov.bd', NULL, NULL),
(421, 55, 'Aditmari', 'আদিতমারী', 'aditmari.lalmonirhat.gov.bd', NULL, NULL),
(422, 56, 'Syedpur', 'সৈয়দপুর', 'syedpur.nilphamari.gov.bd', NULL, NULL),
(423, 56, 'Domar', 'ডোমার', 'domar.nilphamari.gov.bd', NULL, NULL),
(424, 56, 'Dimla', 'ডিমলা', 'dimla.nilphamari.gov.bd', NULL, NULL),
(425, 56, 'Jaldhaka', 'জলঢাকা', 'jaldhaka.nilphamari.gov.bd', NULL, NULL),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ', 'kishorganj.nilphamari.gov.bd', NULL, NULL),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর', 'nilphamarisadar.nilphamari.gov.bd', NULL, NULL),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর', 'sadullapur.gaibandha.gov.bd', NULL, NULL),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর', 'gaibandhasadar.gaibandha.gov.bd', NULL, NULL),
(430, 57, 'Palashbari', 'পলাশবাড়ী', 'palashbari.gaibandha.gov.bd', NULL, NULL),
(431, 57, 'Saghata', 'সাঘাটা', 'saghata.gaibandha.gov.bd', NULL, NULL),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ', 'gobindaganj.gaibandha.gov.bd', NULL, NULL),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ', 'sundarganj.gaibandha.gov.bd', NULL, NULL),
(434, 57, 'Phulchari', 'ফুলছড়ি', 'phulchari.gaibandha.gov.bd', NULL, NULL),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 'thakurgaonsadar.thakurgaon.gov.bd', NULL, NULL),
(436, 58, 'Pirganj', 'পীরগঞ্জ', 'pirganj.thakurgaon.gov.bd', NULL, NULL),
(437, 58, 'Ranisankail', 'রাণীশংকৈল', 'ranisankail.thakurgaon.gov.bd', NULL, NULL),
(438, 58, 'Haripur', 'হরিপুর', 'haripur.thakurgaon.gov.bd', NULL, NULL),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী', 'baliadangi.thakurgaon.gov.bd', NULL, NULL),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর', 'rangpursadar.rangpur.gov.bd', NULL, NULL),
(441, 59, 'Gangachara', 'গংগাচড়া', 'gangachara.rangpur.gov.bd', NULL, NULL),
(442, 59, 'Taragonj', 'তারাগঞ্জ', 'taragonj.rangpur.gov.bd', NULL, NULL),
(443, 59, 'Badargonj', 'বদরগঞ্জ', 'badargonj.rangpur.gov.bd', NULL, NULL),
(444, 59, 'Mithapukur', 'মিঠাপুকুর', 'mithapukur.rangpur.gov.bd', NULL, NULL),
(445, 59, 'Pirgonj', 'পীরগঞ্জ', 'pirgonj.rangpur.gov.bd', NULL, NULL),
(446, 59, 'Kaunia', 'কাউনিয়া', 'kaunia.rangpur.gov.bd', NULL, NULL),
(447, 59, 'Pirgacha', 'পীরগাছা', 'pirgacha.rangpur.gov.bd', NULL, NULL),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 'kurigramsadar.kurigram.gov.bd', NULL, NULL),
(449, 60, 'Nageshwari', 'নাগেশ্বরী', 'nageshwari.kurigram.gov.bd', NULL, NULL),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী', 'bhurungamari.kurigram.gov.bd', NULL, NULL),
(451, 60, 'Phulbari', 'ফুলবাড়ী', 'phulbari.kurigram.gov.bd', NULL, NULL),
(452, 60, 'Rajarhat', 'রাজারহাট', 'rajarhat.kurigram.gov.bd', NULL, NULL),
(453, 60, 'Ulipur', 'উলিপুর', 'ulipur.kurigram.gov.bd', NULL, NULL),
(454, 60, 'Chilmari', 'চিলমারী', 'chilmari.kurigram.gov.bd', NULL, NULL),
(455, 60, 'Rowmari', 'রৌমারী', 'rowmari.kurigram.gov.bd', NULL, NULL),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর', 'charrajibpur.kurigram.gov.bd', NULL, NULL),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর', 'sherpursadar.sherpur.gov.bd', NULL, NULL),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী', 'nalitabari.sherpur.gov.bd', NULL, NULL),
(459, 61, 'Sreebordi', 'শ্রীবরদী', 'sreebordi.sherpur.gov.bd', NULL, NULL),
(460, 61, 'Nokla', 'নকলা', 'nokla.sherpur.gov.bd', NULL, NULL),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী', 'jhenaigati.sherpur.gov.bd', NULL, NULL),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া', 'fulbaria.mymensingh.gov.bd', NULL, NULL),
(463, 62, 'Trishal', 'ত্রিশাল', 'trishal.mymensingh.gov.bd', NULL, NULL),
(464, 62, 'Bhaluka', 'ভালুকা', 'bhaluka.mymensingh.gov.bd', NULL, NULL),
(465, 62, 'Muktagacha', 'মুক্তাগাছা', 'muktagacha.mymensingh.gov.bd', NULL, NULL),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', 'mymensinghsadar.mymensingh.gov.bd', NULL, NULL),
(467, 62, 'Dhobaura', 'ধোবাউড়া', 'dhobaura.mymensingh.gov.bd', NULL, NULL),
(468, 62, 'Phulpur', 'ফুলপুর', 'phulpur.mymensingh.gov.bd', NULL, NULL),
(469, 62, 'Haluaghat', 'হালুয়াঘাট', 'haluaghat.mymensingh.gov.bd', NULL, NULL),
(470, 62, 'Gouripur', 'গৌরীপুর', 'gouripur.mymensingh.gov.bd', NULL, NULL),
(471, 62, 'Gafargaon', 'গফরগাঁও', 'gafargaon.mymensingh.gov.bd', NULL, NULL),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ', 'iswarganj.mymensingh.gov.bd', NULL, NULL),
(473, 62, 'Nandail', 'নান্দাইল', 'nandail.mymensingh.gov.bd', NULL, NULL),
(474, 62, 'Tarakanda', 'তারাকান্দা', 'tarakanda.mymensingh.gov.bd', NULL, NULL),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর', 'jamalpursadar.jamalpur.gov.bd', NULL, NULL),
(476, 63, 'Melandah', 'মেলান্দহ', 'melandah.jamalpur.gov.bd', NULL, NULL),
(477, 63, 'Islampur', 'ইসলামপুর', 'islampur.jamalpur.gov.bd', NULL, NULL),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ', 'dewangonj.jamalpur.gov.bd', NULL, NULL),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী', 'sarishabari.jamalpur.gov.bd', NULL, NULL),
(480, 63, 'Madarganj', 'মাদারগঞ্জ', 'madarganj.jamalpur.gov.bd', NULL, NULL),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ', 'bokshiganj.jamalpur.gov.bd', NULL, NULL),
(482, 64, 'Barhatta', 'বারহাট্টা', 'barhatta.netrokona.gov.bd', NULL, NULL),
(483, 64, 'Durgapur', 'দুর্গাপুর', 'durgapur.netrokona.gov.bd', NULL, NULL),
(484, 64, 'Kendua', 'কেন্দুয়া', 'kendua.netrokona.gov.bd', NULL, NULL),
(485, 64, 'Atpara', 'আটপাড়া', 'atpara.netrokona.gov.bd', NULL, NULL),
(486, 64, 'Madan', 'মদন', 'madan.netrokona.gov.bd', NULL, NULL),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী', 'khaliajuri.netrokona.gov.bd', NULL, NULL),
(488, 64, 'Kalmakanda', 'কলমাকান্দা', 'kalmakanda.netrokona.gov.bd', NULL, NULL),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ', 'mohongonj.netrokona.gov.bd', NULL, NULL),
(490, 64, 'Purbadhala', 'পূর্বধলা', 'purbadhala.netrokona.gov.bd', NULL, NULL),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর', 'netrokonasadar.netrokona.gov.bd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_privecy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_metadata` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_count` int(11) NOT NULL DEFAULT 0,
  `last_login` timestamp NULL DEFAULT NULL,
  `confirmed_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `user_id`, `name`, `first_name`, `last_name`, `email`, `mobile`, `gender`, `url_website`, `url_facebook`, `url_twitter`, `url_linkedin`, `url_1`, `url_2`, `url_3`, `profile_privecy`, `date_of_birth`, `address`, `bio`, `avatar`, `user_metadata`, `last_ip`, `login_count`, `last_login`, `confirmed_at`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Super Admin', 'Super', 'Admin', 'super@admin.com', '+1.784.580.8111', 'Man', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1987-12-06', NULL, NULL, 'img/1000px-blue-cube-logo.jpg', NULL, '162.158.162.171', 48, '2022-10-13 06:38:57', NULL, 1, NULL, 1, NULL, '2019-09-25 08:56:07', '2022-10-13 06:38:57', NULL),
(2, 2, 'Admin Istrator', 'Admin', 'Istrator', 'admin@admin.com', '+1-367-412-5879', 'Man', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1987-07-16', NULL, NULL, 'img/1000px-blue-cube-logo.jpg', NULL, '162.158.167.28', 2, '2021-02-15 05:00:24', NULL, 1, NULL, 2, NULL, '2019-09-25 08:56:07', '2021-02-15 05:00:24', NULL),
(3, 3, 'Manager', 'Manager', 'User User', 'manager@manager.com', '(760) 336-2323', 'Woman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2009-02-27', NULL, NULL, 'img/1000px-blue-cube-logo.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2019-09-25 08:56:07', '2019-09-25 08:56:07', NULL),
(4, 4, 'Executive User', 'Executive', 'User', 'executive@executive.com', '1-943-241-0095 x9399', 'Man', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1991-03-07', NULL, NULL, 'img/1000px-blue-cube-logo.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2019-09-25 08:56:07', '2019-09-25 08:56:07', NULL),
(5, 5, 'General User', 'General', 'User', 'user@user.com', '(490) 208-7831 x90876', 'Other', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1978-10-25', NULL, NULL, 'img/1000px-blue-cube-logo.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2019-09-25 08:56:07', '2019-09-25 08:56:07', NULL),
(6, 6, 'Juyel Rana', 'Juyel', 'Rana', 'mjuyelrana@gmail.com', NULL, 'Man', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Private', NULL, NULL, NULL, 'img/default-avatar.jpg', NULL, '162.158.167.78', 109, '2021-02-11 18:24:41', NULL, 1, 1, 6, NULL, '2019-09-25 09:17:45', '2021-02-11 18:24:41', NULL),
(7, 7, 'muhammad Islam', 'muhammad', 'Islam', 'sanwar.desktopit@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1576062860.png', NULL, '172.68.144.5', 79, '2021-06-06 10:34:59', NULL, 1, 1, 7, NULL, '2019-12-11 11:14:21', '2021-06-06 10:34:59', NULL),
(8, 8, 'Physics Alumni Association Rajshahi University', 'Physics Alumni Association', 'Rajshahi University', 'paaru@ru.ac.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1578206457.png', NULL, '::1', 167, '2022-11-23 03:48:00', NULL, 1, 6, 8, NULL, '2020-01-05 18:40:57', '2022-11-23 03:48:00', NULL),
(9, 9, 'Md Selim Mahmud', 'Md Selim', 'Mahmud', 'selimmahmud@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1583151219.png', NULL, '162.158.166.41', 11, '2021-02-08 10:00:22', NULL, 1, 6, 9, NULL, '2020-03-03 00:13:39', '2021-02-08 10:00:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'img/default-avatar.jpg',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `mobile`, `gender`, `date_of_birth`, `password`, `avatar`, `status`, `confirmation_code`, `confirmed_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', 'Super', 'Admin', 'super@admin.com', '+1.784.580.8111', 'Man', '1987-12-06', '$2a$12$oTO2ps3OkgDajeOH7bq3A.Gt92KBJPDSOvvr5n9ptugKC6kARRKF2', '1576058012.png', 1, 'e0539366e9eac659fcbd3e2629587099', '2019-09-25 08:56:07', 'ho9pwfuFOpFsgb6kQiSnhZQEFD7EvJKWNl1OUWfg6u9GzPkjDZvBxYlgtneG', '2019-09-25 08:56:07', '2019-12-11 09:53:32', NULL),
(2, 'Admin Istrator', 'Admin', 'Istrator', 'admin@admin.com', '+1-367-412-5879', 'Man', '1987-07-16', '$2y$10$3ZPB87zn4ksj22Vf9pGjKeNZ4A2P9ATYXUisfyFfnw91XiKdDPXGm', 'img/1000px-blue-cube-logo.jpg', 1, 'e09a83c1401b553d12f7de8cf3d03e76', '2019-09-25 08:56:07', NULL, '2019-09-25 08:56:07', '2021-02-15 04:56:37', NULL),
(3, 'Manager', 'Manager', 'User User', 'manager@manager.com', '(760) 336-2323', 'Woman', '2009-02-27', '$2y$10$Cxl4yiB6KiymwrXZx3intOUcxLJkC360xOZT.fNOpWos/1VsL7Wqm', 'img/1000px-blue-cube-logo.jpg', 1, '0fc8195bafef78c1707d1919aac15924', '2019-09-25 08:56:07', NULL, '2019-09-25 08:56:07', '2019-12-26 07:08:46', NULL),
(4, 'Executive User', 'Executive', 'User', 'executive@executive.com', '1-943-241-0095 x9399', 'Man', '1991-03-07', '$2y$10$wKUP/E3BIkWAomcj/qGbx.tuddi8/hXCNc32oqEigswhu1xUCrx1a', 'img/1000px-blue-cube-logo.jpg', 1, 'df9e100a345fc5632793a7b027bd39f6', '2019-09-25 08:56:07', NULL, '2019-09-25 08:56:07', '2019-09-25 08:56:07', NULL),
(5, 'General User', 'General', 'User', 'user@user.com', '(490) 208-7831 x90876', 'Other', '1978-10-25', '$2y$10$V2afmQwEXZMYDymSF.a3/esAbUiQP23GQQoL..EKSEg2UHuZ9dr9.', 'img/1000px-blue-cube-logo.jpg', 1, '0b0140477637aa62b6ef726ef323efdc', '2019-09-25 08:56:07', NULL, '2019-09-25 08:56:07', '2019-09-25 08:56:07', NULL),
(6, 'Juyel Rana', 'Juyel', 'Rana', 'mjuyelrana@gmail.com', NULL, 'Man', NULL, '$2y$10$YhsSQXZu6dUBB3r0N2V5Uuq.J4XspfFvDfUzzVhggkU0lQDY4iZwW', '1578407231.png', 1, '0e8ae5ed768192e06cded5a8e182225f', '2019-09-25 09:17:45', 'L619pGQGB0Gv5y3SXOHL6WacrlMWj7g1b6jAXVPxWQzNYw46ZOVgdlHvBpXo', '2019-09-25 09:17:45', '2020-02-01 22:06:02', NULL),
(7, 'muhammad Islam', 'muhammad', 'Islam', 'rokon.desktopit@gmail.com', NULL, NULL, NULL, '$2y$10$QWA091hDJRhSzKbqi3jS0eCSLDva3McNBAnJmTxM8JibatCHUXde.', '1576318345.png', 1, '71c6a4ceb777fd15ede7da1a940f832e', '2019-12-11 11:14:20', NULL, '2019-12-11 11:14:20', '2021-02-08 05:27:22', NULL),
(8, 'Physics Alumni Association Rajshahi University', 'Physics Alumni Association', 'Rajshahi University', 'superadmin@gmail.com', NULL, NULL, NULL, '$2a$12$oTO2ps3OkgDajeOH7bq3A.Gt92KBJPDSOvvr5n9ptugKC6kARRKF2', '1578206457.png', 1, '1c3beabf2749623d7b1f3c39a8dceed3', '2020-01-05 18:40:57', NULL, '2020-01-05 18:40:57', '2020-01-05 18:40:57', NULL),
(9, 'Md Selim Mahmud', 'Md Selim', 'Mahmud', 'selimmahmud@hotmail.com', NULL, NULL, NULL, '$2y$10$kiaeJ1rxVz0X5OoKyPtetedZ5SwfpSD7JO8WJDToEa2Zm4YkDa9We', '1583151219.png', 1, '4853cd2ccaa9481bc2f6857e30729347', '2020-03-03 00:13:39', NULL, '2020-03-03 00:13:39', '2021-02-08 10:01:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_providers`
--

CREATE TABLE `user_providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `activity_types`
--
ALTER TABLE `activity_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advisory_committees`
--
ALTER TABLE `advisory_committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee_types`
--
ALTER TABLE `committee_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_payments`
--
ALTER TABLE `event_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `future_planes`
--
ALTER TABLE `future_planes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_links`
--
ALTER TABLE `important_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_images`
--
ALTER TABLE `member_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_types`
--
ALTER TABLE `member_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD KEY `post_tag_post_id_index` (`post_id`),
  ADD KEY `post_tag_tag_id_index` (`tag_id`);

--
-- Indexes for table `p_messages`
--
ALTER TABLE `p_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renowned_alumni_members`
--
ALTER TABLE `renowned_alumni_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renowned_alumni_members_more_images`
--
ALTER TABLE `renowned_alumni_members_more_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `send_sms`
--
ALTER TABLE `send_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userprofiles_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_providers`
--
ALTER TABLE `user_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_providers_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `activity_types`
--
ALTER TABLE `activity_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advisory_committees`
--
ALTER TABLE `advisory_committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `committee_types`
--
ALTER TABLE `committee_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_payments`
--
ALTER TABLE `event_payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `future_planes`
--
ALTER TABLE `future_planes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;

--
-- AUTO_INCREMENT for table `important_links`
--
ALTER TABLE `important_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- AUTO_INCREMENT for table `member_images`
--
ALTER TABLE `member_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_types`
--
ALTER TABLE `member_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `p_messages`
--
ALTER TABLE `p_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `renowned_alumni_members`
--
ALTER TABLE `renowned_alumni_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `renowned_alumni_members_more_images`
--
ALTER TABLE `renowned_alumni_members_more_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `send_sms`
--
ALTER TABLE `send_sms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_providers`
--
ALTER TABLE `user_providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_providers`
--
ALTER TABLE `user_providers`
  ADD CONSTRAINT `user_providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
