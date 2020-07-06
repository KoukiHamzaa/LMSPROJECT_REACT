-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 10:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laracourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_photos` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://placehold.jp/230x180.png',
  `view_count` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `categories_photos`, `view_count`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'IOT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec arcu semper, venenatis metus et, interdum eros. Donec vel efficitur sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi eget sapien dui&nbsp;Praesent ultrices urna sed ex consectetur, eu suscipit urna rutrum. Curabitur et nibh sit amet quam venenatis pharetra. Quisque rutrum nulla ut congue pretium. Nam vestibulum lorem semper tellus pellentesque ornare. Curabitur fringilla tortor quis magna blandit suscipit. Curabitur ut pharetra turpis, et feugiat nunc. Suspendisse lectus nibh, vestibulum dignissim lobortis euismod, vehicula ac nisl. Fusce facilisis sem tortor, eget bibendum ipsum fringilla faucibus. Vestibulum vitae ornare tortor. Integer aliquam, ipsum ac tincidunt condimentum, mi lacus vulputate odio, quis consectetur elit nunc id turpis.', 'https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/8/d/8/8d8d2b76cd_79391_ido.jpg', 97, '2020-06-18 08:52:16', '2020-06-02 11:47:29', '2020-06-18 08:52:16'),
(2, 'AI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec arcu semper, venenatis metus et, interdum eros. Donec vel efficitur sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi eget sapien dui. Praesent ultrices urna sed ex consectetur, eu suscipit urna rutrum. Curabitur et nibh sit amet quam venenatis pharetra. Quisque rutrum nulla ut congue pretium. Nam vestibulum lorem semper tellus pellentesque ornare. Curabitur fringilla tortor quis magna blandit suscipit. Curabitur ut pharetra turpis, et feugiat nunc. Suspendisse lectus nibh, vestibulum dignissim lobortis euismod, vehicula ac nisl. Fusce facilisis sem tortor, eget bibendum ipsum fringilla faucibus. Vestibulum vitae ornare tortor. Integer aliquam, ipsum ac tincidunt condimentum, mi lacus vulputate odio, quis consectetur elit nunc id turpis.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR9-VHY9XhhodMKzK7qrLtbGEMCk1qSSBGnzekbznTsU0BNXZq4&usqp=CAU', 8, '2020-06-18 08:52:20', '2020-06-02 11:48:53', '2020-06-18 08:52:20'),
(3, 'Informatique de gestion', '<div><font color=\"#202122\" face=\"sans-serif\">L’informatique de gestion (IDG) est l\'ensemble des connaissances, des technologies, et des outils en rapport avec la gestion de données, c\'est-à-dire la collecte, la vérification et l\'organisation de grandes quantités d\'informations. L\'informatique de gestion a de nombreuses applications pratiques dans les entreprises : listes de clients, de fournisseurs, de produits, comptabilité, etc.</font></div><div><font color=\"#202122\" face=\"sans-serif\"><br></font></div><div><font color=\"#202122\" face=\"sans-serif\">En informatique de gestion, les informations sont souvent placées dans des bases de données et traitées par l\'intermédiaire de logiciels spécialisés que sont les systèmes de gestion de base de données.</font></div>', 'https://www.cfttunis.com/site/wp-content/uploads/2018/08/maxresdefault-1024x379.jpg', 2, '2020-06-18 08:44:25', '2020-06-02 11:50:30', '2020-06-18 08:44:25'),
(4, 'test', 'fghjklm', 'https://image-us.samsung.com/SamsungUS/samsungbusiness/products/computing/20170623/desktop/01_Computing-SSDs_Hero_Image.jpg?$bu-hero-header-jpg$', 0, '2020-06-09 18:30:39', '2020-06-09 18:28:07', '2020-06-09 18:30:39'),
(5, 'Informatique de gestion', '<div>L’informatique de gestion (IDG) est l\'ensemble des connaissances, des technologies, et des outils en rapport avec la gestion de données, c\'est-à-dire la collecte, la vérification et l\'organisation de grandes quantités d\'informations. L\'informatique de gestion a de nombreuses applications pratiques dans les entreprises : listes de clients, de fournisseurs, de produits, comptabilité, etc.</div><div>En informatique de gestion, les informations sont souvent placées dans des bases de données et traitées par l\'intermédiaire de logiciels spécialisés que sont les systèmes de gestion de base de données.<br></div>', 'https://www.cfttunis.com/site/wp-content/uploads/2018/08/maxresdefault-1024x379.jpg', 0, '2020-06-18 08:48:35', '2020-06-18 08:44:29', '2020-06-18 08:48:35'),
(6, 'Informatique de gestion', '<div><div>l\'informatique de gestion (IDG) est l\'ensemble des connaissances, des technologies, et des outils en rapport avec la gestion de données, c\'est-à-dire la collecte, la vérification et l\'organisation de grandes quantités d\'informations. L\'informatique de gestion a de nombreuses applications pratiques dans les entreprises : listes de clients, de fournisseurs, de produits, comptabilité, etc.</div><div><br></div><div>En informatique de gestion, les informations sont souvent placées dans des bases de données et traitées par l\'intermédiaire de logiciels spécialisés que sont les systèmes de gestion de base de données.</div></div>', 'https://www.cfttunis.com/site/wp-content/uploads/2018/08/maxresdefault-1024x379.jpg', 0, '2020-06-18 08:52:23', '2020-06-18 08:49:07', '2020-06-18 08:52:23'),
(7, 'Informatique de gestion', '<div>L’informatique de gestion (IDG) est l\'ensemble des connaissances, des technologies, et des outils en rapport avec la gestion de données, c\'est-à-dire la collecte, la vérification et l\'organisation de grandes quantités d\'informations. L\'informatique de gestion a de nombreuses applications pratiques dans les entreprises : listes de clients, de fournisseurs, de produits, comptabilité, etc.</div><div><br></div><div>En informatique de gestion, les informations sont souvent placées dans des bases de données et traitées par l\'intermédiaire de logiciels spécialisés que sont les systèmes de gestion de base de données.</div>', 'https://www.cfttunis.com/site/wp-content/uploads/2018/08/maxresdefault-1024x379.jpg', 15, NULL, '2020-06-18 08:55:54', '2020-06-18 08:58:49'),
(8, 'Méthodes Quantitatives', 'Les méthodes quantitatives sont des méthodes de recherche, utilisant des outils d\'analyse mathématiques et statistiques, en vue de décrire, d\'expliquer et prédire des phénomènes par le biais de données historiques sous forme de variables mesurables. Elles se distinguent ainsi des méthodes dites qualitatives.<br>', 'https://cegepba.qc.ca/wp-content/uploads/images/cours/cours-methodes-quantitatives-sc-hum.jpg', 0, NULL, '2020-06-18 08:58:39', '2020-06-18 08:58:39'),
(9, 'Management', 'Le management est la mise en œuvre des moyens humains et matériels d\'une entreprise pour atteindre ses objectifs. Il correspond à l\'idée de gestion et de pilotage1 appliquée à une entreprise ou une unité de celle-ci. Lorsqu\'il concerne l\'entreprise tout entière on peut généralement l\'assimiler à la fonction de direction (la « fonction administrative » de H. Fayol). Le management est présenté ici dans sa version prédominante, d\'autres formes existent en particulier dans les approches en gouvernance partagée.<br>', 'https://www.petite-entreprise.net/images-donnees/fiches/articles/images/champ___8/businessplan-2-@w_750.jpg', 0, NULL, '2020-06-18 09:00:48', '2020-06-19 07:43:53'),
(10, 'Finance', 'La finance recouvre un domaine d\'activité — celui du financement — qui consiste à fournir l\'argent nécessaire à la réalisation d\'une opération économique. Ce domaine concerne aussi bien les individus, les ménages que les entreprises publiques ou privées, mais aussi les États.<br>', 'https://www.esgf.com/sites/default/files/styles/news_page/public/esgf-finance-autrement.jpg?itok=lhj01Mdj', 0, NULL, '2020-06-18 09:02:59', '2020-06-18 09:02:59'),
(11, 'comptabilité', '<div>La comptabilité est un ensemble de conventions et de règles qui consistent à recueillir et compiler des données liées aux événements et aux opérations financières, afin de présenter dans une unité monétaire, la situation financière et les activités économiques d\'une entité permettant aux utilisateurs de ce système d\'information de comparer et analyser ces informations comptables et de prendre des décisions.</div><div><br></div><div>Dans le domaine commercial et administratif cette discipline est mise en œuvre par le comptable ou l\'agent-comptable, éventuellement assistés d\'experts comptables et de logiciels, bureaux ou agences spécialisés.</div>', 'data:image/jpeg;base64,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', 0, NULL, '2020-06-18 09:04:52', '2020-06-18 09:04:52'),
(12, 'Les sciences économiques', 'Les sciences économiques (ou la science économique ou encore l\'économie) est une discipline des sciences humaines et sociales qui étudie de façon scientifique le fonctionnement de l\'économie c\'est-à-dire la description et l\'analyse de la production, des échanges et de la consommation des biens et des services .<br>', 'https://thumbs.dreamstime.com/z/%C3%A9tudiant-r%C3%A9ussi-des-sciences-%C3%A9conomiques-108977904.jpg', 0, NULL, '2020-06-18 09:06:56', '2020-06-18 09:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `course_id`, `category_id`, `item_id`, `body`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 5, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mauris neque, molestie congue nunc scelerisque sed. Morbi non urna non tortor porttitor vulputate non sit amet nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse mattis lorem vitae elit faucibus porttitor. Sed posuere id justo rutrum laoreet. Etiam dapibus in diam in molestie. Pellentesque nibh elit, tempus a tellus mollis, blandit dignissim massa. Vestibulum ut magna sem. Cras eu venenatis lacus. Integer nec consectetur nunc. Nunc scelerisque auctor velit, sed congue dolor dapibus vitae. Etiam ut metus sollicitudin, pharetra lorem id, imperdiet tortor. Etiam vel pretium mi. Nunc vulputate lacinia luctus. Nam fermentum volutpat libero et pellentesque. Sed pulvinar luctus condimentum.', '2020-06-18 07:21:25', '2020-06-25 08:37:38', '2020-06-18 07:21:25'),
(3, 3, 5, NULL, NULL, 'test comments', NULL, '2020-06-18 07:21:36', '2020-06-18 07:21:36'),
(4, 3, 10, NULL, NULL, 'la 1er commentaires', '2020-06-19 07:01:53', '2020-06-19 07:01:34', '2020-06-19 07:01:53'),
(5, 3, 10, NULL, NULL, '1', '2020-06-19 07:59:08', '2020-06-19 07:57:07', '2020-06-19 07:59:08'),
(6, 3, 10, NULL, NULL, 'salut', '2020-06-19 08:47:51', '2020-06-19 08:47:42', '2020-06-19 08:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_account_id` int(11) DEFAULT NULL,
  `available_on_course_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'free',
  `price` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `deadline` datetime NOT NULL,
  `count_timer` double(8,2) NOT NULL,
  `total_available` int(11) NOT NULL,
  `total_remaining` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_instructor` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `playlist_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://mdbootstrap.com/img/video/animation-intro.mp4',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator_status` int(11) NOT NULL DEFAULT 0,
  `admin_status` int(11) NOT NULL DEFAULT 0,
  `what_will_student_learn` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_student` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` double(10,2) NOT NULL DEFAULT 0.00,
  `actual_price` double(10,2) NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `subscriber_count` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `category_id`, `title`, `sub_title`, `description`, `about_instructor`, `playlist_url`, `photo`, `promo_video_url`, `tags`, `creator_status`, `admin_status`, `what_will_student_learn`, `target_student`, `requirements`, `discount_price`, `actual_price`, `view_count`, `subscriber_count`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 'how to start  e commerce', 'first step affiliate', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', 'https://www.youtube.com/embed/videoseries?list=PLEmTTOfet46O591glMGzRMoHaIJB-bQiq', 'https://miro.medium.com/max/626/1*5QXnYB61BXuqTzImgrWElg.jpeg', 'https://www.youtube.com/embed/CqlsgjnePmg', 'Lorem Ipsum \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"', 0, 0, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', 0.00, 200.00, 0, 3, NULL, '2020-06-09 18:53:33', '2020-06-18 08:12:10'),
(7, 1, 1, 'data science', 'first step data science', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', 'https://www.youtube.com/embed/videoseries?list=PLLzugMe2NdR-cvHQhHn_cHBLYdqNhSh82', 'https://www.np6.com/wp-content/uploads/2017/03/Data-Science.jpg', 'https://www.youtube.com/embed/_IhFKSV-UQU', 'business money e commerce  freelance', 0, 0, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales dignissim erat ut imperdiet. Sed nec erat vitae ipsum ornare aliquet ac vel ligula. Sed ut mattis mi, sit amet lobortis dui. In maximus fermentum lorem, in volutpat lectus. Pellentesque in purus vitae leo consequat feugiat id a lectus. Proin nulla dolor, iaculis eu diam eget, eleifend lacinia mauris. Vestibulum dictum erat porta, lobortis ante a, placerat velit. Mauris at dolor non odio porta vulputate.</span><br>', 0.00, 200.00, 0, 0, '2020-06-18 08:12:18', '2020-06-10 09:30:48', '2020-06-18 08:12:18'),
(8, 1, 2, 'Algorithme', 'first step Algorithme', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget justo in arcu pellentesque consequat. Quisque sed lorem fringilla leo congue maximus quis a urna. Fusce laoreet neque eget luctus faucibus. Nunc eget dignissim velit, non porttitor est. Pellentesque nulla mi, consectetur vel mattis quis, accumsan at urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam gravida urna at ante auctor dapibus. Suspendisse lacinia dolor nunc, non accumsan turpis viverra at.<br>', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget justo in arcu pellentesque consequat. Quisque sed lorem fringilla leo congue maximus quis a urna. Fusce laoreet neque eget luctus faucibus. Nunc eget dignissim velit, non porttitor est. Pellentesque nulla mi, consectetur vel mattis quis, accumsan at urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam gravida urna at ante auctor dapibus. Suspendisse lacinia dolor nunc, non accumsan turpis viverra at.<br>', 'https://www.youtube.com/embed/videoseries?list=PLU1uhUPH-DQDup76tvg6XnRjkR719AaFA', 'https://i.ytimg.com/vi/pFG2e0MU7no/maxresdefault.jpg', 'https://www.youtube.com/embed/Ps-h8oXIIro', 'algorithme, functional,  programming', 1, 1, 'orem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget justo in arcu pellentesque consequat. Quisque sed lorem fringilla leo congue maximus quis a urna. Fusce laoreet neque eget luctus faucibus. Nunc eget dignissim velit, non porttitor est. Pellentesque nulla mi, consectetur vel mattis quis, accumsan at urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam gravida urna at ante auctor dapibus. Suspendisse lacinia dolor nunc, non accumsan turpis viverra at.<br>', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget justo in arcu pellentesque consequat. Quisque sed lorem fringilla leo congue maximus quis a urna. Fusce laoreet neque eget luctus faucibus. Nunc eget dignissim velit, non porttitor est. Pellentesque nulla mi, consectetur vel mattis quis, accumsan at urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam gravida urna at ante auctor dapibus. Suspendisse lacinia dolor nunc, non accumsan turpis viverra at.<br>', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget justo in arcu pellentesque consequat. Quisque sed lorem fringilla leo congue maximus quis a urna. Fusce laoreet neque eget luctus faucibus. Nunc eget dignissim velit, non porttitor est. Pellentesque nulla mi, consectetur vel mattis quis, accumsan at urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam gravida urna at ante auctor dapibus. Suspendisse lacinia dolor nunc, non accumsan turpis viverra at.<br>', 1.00, 200.00, 0, 0, '2020-06-18 08:12:23', '2020-06-13 12:31:25', '2020-06-18 08:12:23'),
(9, 3, 3, 'test', 'test sub titile', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non convallis ex. Aenean gravida dapibus lacus a auctor. Curabitur id nisi hendrerit, imperdiet lacus id, convallis purus. Nam id efficitur purus, sit amet malesuada nisi. Vivamus commodo consequat pretium. Proin gravida odio gravida, bibendum nisl at, euismod enim. Phasellus consectetur metus ut ultrices pellentesque. Sed at justo neque. Etiam sapien neque, eleifend et placerat eget, hendrerit sed eros. Vestibulum enim tellus, convallis cursus felis quis, tincidunt varius elit. Praesent non pharetra orci, eu malesuada ligula. Ut elementum venenatis felis quis blandit.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non convallis ex. Aenean gravida dapibus lacus a auctor. Curabitur id nisi hendrerit, imperdiet lacus id, convallis purus. Nam id efficitur purus, sit amet malesuada nisi. Vivamus commodo consequat pretium. Proin gravida odio gravida, bibendum nisl at, euismod enim. Phasellus consectetur metus ut ultrices pellentesque. Sed at justo neque. Etiam sapien neque, eleifend et placerat eget, hendrerit sed eros. Vestibulum enim tellus, convallis cursus felis quis, tincidunt varius elit. Praesent non pharetra orci, eu malesuada ligula. Ut elementum venenatis felis quis blandit.</span><br>', 'https://www.youtube.com/embed/videoseries?list=PL0f_3XZ5rQIMU7RrnYCYu7euNSzJgh32V', NULL, 'https://www.youtube.com/embed/_G7U4CcYdyU', NULL, 0, 0, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non convallis ex. Aenean gravida dapibus lacus a auctor. Curabitur id nisi hendrerit, imperdiet lacus id, convallis purus. Nam id efficitur purus, sit amet malesuada nisi. Vivamus commodo consequat pretium. Proin gravida odio gravida, bibendum nisl at, euismod enim. Phasellus consectetur metus ut ultrices pellentesque. Sed at justo neque. Etiam sapien neque, eleifend et placerat eget, hendrerit sed eros. Vestibulum enim tellus, convallis cursus felis quis, tincidunt varius elit. Praesent non pharetra orci, eu malesuada ligula. Ut elementum venenatis felis quis blandit.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non convallis ex. Aenean gravida dapibus lacus a auctor. Curabitur id nisi hendrerit, imperdiet lacus id, convallis purus. Nam id efficitur purus, sit amet malesuada nisi. Vivamus commodo consequat pretium. Proin gravida odio gravida, bibendum nisl at, euismod enim. Phasellus consectetur metus ut ultrices pellentesque. Sed at justo neque. Etiam sapien neque, eleifend et placerat eget, hendrerit sed eros. Vestibulum enim tellus, convallis cursus felis quis, tincidunt varius elit. Praesent non pharetra orci, eu malesuada ligula. Ut elementum venenatis felis quis blandit.</span><br>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non convallis ex. Aenean gravida dapibus lacus a auctor. Curabitur id nisi hendrerit, imperdiet lacus id, convallis purus. Nam id efficitur purus, sit amet malesuada nisi. Vivamus commodo consequat pretium. Proin gravida odio gravida, bibendum nisl at, euismod enim. Phasellus consectetur metus ut ultrices pellentesque. Sed at justo neque. Etiam sapien neque, eleifend et placerat eget, hendrerit sed eros. Vestibulum enim tellus, convallis cursus felis quis, tincidunt varius elit. Praesent non pharetra orci, eu malesuada ligula. Ut elementum venenatis felis quis blandit.</span><br>', 0.00, 100.00, 0, 0, '2020-06-18 08:12:31', '2020-06-18 06:03:37', '2020-06-18 08:12:31'),
(10, 3, 7, 'Programmation mobile', 'Programmation mobile avec android', '<div>Une application mobile est un logiciel applicatif développé pour un appareil électronique mobile, tel qu\'un assistant personnel, un téléphone portable, un smartphone, un baladeur numérique, une tablette tactile, ou encore certains ordinateurs fonctionnant avec le système d\'exploitation Windows Phone ou Chrome OS.</div><div><br></div><div>Elles sont pour la plupart distribuées depuis des plateformes de téléchargement (parfois elles-mêmes contrôlées par les fabricants de smartphones) telles que l\'App Store (plateforme d\'Apple), le Google Play (plateforme de Google / Android), ou encore le Microsoft Store (plateforme de Microsoft pour Windows 10 Mobile). Mais des applications peuvent aussi être installées sur un ordinateur, grâce par exemple au logiciel iTunes distribué par Apple pour ses appareils. Les applications distribuées à partir des magasins d\'applications sont soit payantes, soit gratuites, mais généralement avec des publicités.</div><div><br></div><div>Sur certaines plateformes, les applications peuvent aussi être installées à partir de sources tierces, via un site non affilié au distributeur d\'origine. Sur Android, cela est possible en activant le mode développeur. Sur iOS, cette manipulation est possible soit en étant développeur Apple, soit en possédant un appareil jailbreaké.</div><div><br></div>', 'Docteur khalfi :  est une personne chargée de transmettre des connaissances ou méthodes de raisonnement à autrui dans le cadre d\'une formation générale ou d\'une formation spécifique à une matière, ou un domaine .<br>', 'https://www.youtube.com/embed/videoseries?list=PLBNheBxhHLQxmCCiHGkXBAIsC1VKpZkSe', 'https://fr.yeeply.com/wp-content/uploads/2015/06/cr%C3%A9er-application-android-2.png', 'https://www.youtube.com/embed/b8M7rv-2Ncg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'Programmation', 0, 0, '<p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\">Un développeur web crée principalement des sites internet. Le développeur mobile, quant à lui, va coder des applications mobiles. Les startups aussi bien que les grands groupes et les ESN (Entreprises de Services Numériques) sont de plus en plus besoin de développeurs mobiles. Ces derniers bénéficient de salaires parmi les plus élevés du marché (comme le démontre les récentes études de <a href=\"http://www.silicon.fr/salaire-developpeurs-ruby-python-ios-jobprod-156534.html\" target=\"_blank\" rel=\"noopener\" style=\"font-weight: 600; font-stretch: normal; line-height: 1.39; color: rgb(255, 153, 0); box-shadow: rgb(249, 151, 151) 0px -5px 0px inset; transition: box-shadow 0.3s ease-in-out 0s;\">JobProd</a> et d\'<a href=\"http://start.lesechos.fr/rejoindre-une-entreprise/classements-entreprises/top-8-des-technos-qui-rapportent-le-plus-chez-les-developpeurs-6333.php#xtor=CS2-9\" target=\"_blank\" rel=\"noopener\" style=\"font-weight: 600; font-stretch: normal; line-height: 1.39; color: rgb(255, 153, 0); box-shadow: rgb(249, 151, 151) 0px -5px 0px inset; transition: box-shadow 0.3s ease-in-out 0s;\">Urban Linker</a>).</p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\">Et pour apprendre à coder des applications, il n’y a pas de profil type. Voici 3 raisons d’apprendre à coder, pour trois profils différents. Mais bien évidemment, il y a une multitude d’autres possibilités !</p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\"> </p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\"><strong>Profil entrepreneur</strong></p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\">Choisir d\'apprendre à coder en Java ou Swift (langages de programmation mobiles) plutôt qu\'en Php ou Ruby (langages de programmation web) vous donne la possibilité de développer à terme votre propre application mobile. Il suffit parfois d\'une bonne idée, un bon timing et de solides compétences de code pour développer selon son envie une application dans l\'air du temps.<br>Un peu de lecture <a href=\"https://appsandbiscuits.com/your-first-android-app-edd5f067fb95#.i44pgtgq2\" target=\"_blank\" rel=\"noopener\" style=\"font-weight: 600; font-stretch: normal; line-height: 1.39; color: rgb(255, 153, 0); box-shadow: rgb(249, 151, 151) 0px -5px 0px inset; transition: box-shadow 0.3s ease-in-out 0s;\">par ici</a> pour coder sa première application Android !</p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\"> </p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\"><strong>Profil tech’</strong></p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\">En apprenant à coder des applications mobiles, vous pourrez travailler au sein d\'une startup et/ou une licorne qui ont de très forts besoins de recrutement de développeurs, notamment développeurs mobiles. De nombreuses startups vont souvent d\'abord sortir leur produit sur mobile avant de le décliner sur le web).</p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\">Un peu plus d’informations sur les startups numériques en forte croissance <a href=\"http://www.usine-digitale.fr/editorial/les-start-up-numeriques-francaises-creent-des-emplois-et-pas-qu-en-france.N444657\" target=\"_blank\" rel=\"noopener\" style=\"font-weight: 600; font-stretch: normal; line-height: 1.39; color: rgb(255, 153, 0); box-shadow: rgb(249, 151, 151) 0px -5px 0px inset; transition: box-shadow 0.3s ease-in-out 0s;\">par ici</a>.</p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\"> </p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\"><strong>Profil Développeur</strong></p><p style=\"font-family: Raleway, sans-serif; font-stretch: normal; font-size: 18px; line-height: 1.39; margin-top: 1em; margin-bottom: 1em; color: rgb(57, 66, 78);\">Pour les développeurs, apprendre à coder des applications permet de compléter son panel de connaissances et relever de nouveaux challenges technologiques avec de nouveaux langages de programmation à afficher sur son CV.<br>Découvrez <a href=\"http://www.frenchweb.fr/7-details-qui-font-de-vous-un-bon-developpeur/266200\" target=\"_blank\" rel=\"noopener\" style=\"font-weight: 600; font-stretch: normal; line-height: 1.39; color: rgb(255, 153, 0); box-shadow: rgb(249, 151, 151) 0px -5px 0px inset; transition: box-shadow 0.3s ease-in-out 0s;\">par ici</a> pourquoi le métier de développeur est un métier d\'apprentissage</p>', '<span style=\"color: rgb(55, 58, 60); font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 15px;\">Étudiants inscrits </span><br>', '<div>Créer des applications pour Android vs iOS peut sembler très similaire à l’œil non averti, mais la vérité est que chacun de ces deux systèmes d’exploitation a ses propres particularités. Il existe de nombreuses différences entre le développement d’applications Android et iOS, tant dans les bases techniques du développement d’une application que dans le processus de création d’une application elle-même.</div><div><br></div><div>Et pas seulement au niveau technique du développement d’Android et d’iOS, mais aussi en termes de conception et de stratégie marketing de l’application. En d’autres termes, tout le concept d’une application dépendra du système d’exploitation choisi. Les développeurs qui passent d’un système d’exploitation à un autre, avec un langage de programmation complètement différent, remarqueront les différences.</div>', 53.00, 144.00, 0, 1, NULL, '2020-06-18 10:07:33', '2020-06-29 20:57:50'),
(11, 3, 7, 'Architecture orientée services (SOA)', 'XML', 'L\'architecture orientée services ou AOS est une forme d\'architecture de médiation qui est un modèle d\'interaction applicative qui met en œuvre des services : avec une forte cohérence interne ; des couplages externes « lâches ».<br>', 'Inès KHALFI-BCHINI<br>', 'https://www.youtube.com/embed/videoseries?list=PLjVADrCgi-QBMbhFgotpNOT56Vr69X_YO', 'https://i.vimeocdn.com/video/685478376_640.jpg', 'https://www.youtube.com/embed/jL1oVENiYT8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'XML', 0, 0, '- Une introduction à XML\r\n<div>- DTD\r\n(DOCUMENT TYPE\r\nDEFINITION)</div><div>- <a class=\"\" href=\"https://utm.uvt.tn/mod/resource/view.php?id=123570\" style=\"color: rgb(235, 166, 0); font-family: \"Open Sans\", sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\"><span class=\"instancename\" style=\"color: rgb(85, 85, 85);\">Simple Object Access Protocol (SOAP)</span></a></div>', 'Étudiant inscrit<br>', '<br>', 223.00, 237.00, 0, 0, NULL, '2020-06-19 13:39:23', '2020-06-29 20:58:17'),
(12, 3, 7, 'Sécurité informatique', 'Sécurité', '<div>La sécurité des systèmes d’information (SSI) ou plus simplement sécurité informatique, est l’ensemble des moyens techniques, organisationnels, juridiques et humains nécessaires à la mise en place de moyens visant à empêcher l\'utilisation non autorisée, le mauvais usage, la modification ou le détournement du système d\'information. Assurer la sécurité du système d\'information est une activité du management du système d\'information.</div><div><br></div><div>Aujourd’hui, la sécurité est un enjeu majeur pour les entreprises ainsi que pour l’ensemble des acteurs qui l’entourent. Elle n\'est plus confinée uniquement au rôle de l’informaticien. Sa finalité sur le long terme est de maintenir la confiance des utilisateurs et des clients. La finalité sur le moyen terme est la cohérence de l’ensemble du système d’information. Sur le court terme, l’objectif est que chacun ait accès aux informations dont il a besoin. La norme traitant des systèmes de management de la sécurité de l\'information (SMSI) est l’ISO/CEI 27001 qui insiste sur Confidentiality – Integrity – Availability, c\'est-à-dire en français disponibilité, intégrité et confidentialité.</div>', '<br>', 'https://www.youtube.com/embed/videoseries?list=PLOapGKeH_KhFBC39ltMDhkEx1aI3hlwSK\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'https://www.net4all.ch/wp-content/uploads/sites/4/2017/06/161124_Proteger_attaques-788x433.jpg', 'https://www.youtube.com/embed/PLqJiEMpZfQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'Sécurité informatique', 0, 0, '<div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 1 : Introduction à la Cryptographie</span></font></div><div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 2 : Cryptographie Symétrique</span></font></div><div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 3 : Cryptographie Asymétrique</span></font></div><div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 4 : Cracker des mots de passe</span></font></div><div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 5 : Signatures Digitales</span></font></div><div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 6 : Protocoles Cryptographiques</span></font></div><div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 7 : Man-in-the-Middle Attack</span></font></div><div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 8 : Short Authenticated Strings</span></font></div><div><font face=\"Source Sans Pro, sans-serif\"><span style=\"font-size: 24px;\">Sécurité 9 : Web of Trust + PGP</span></font></div>', 'Étudiant inscrit<br>', '<br>', 408.00, 436.00, 0, 0, NULL, '2020-06-19 13:49:35', '2020-06-19 13:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_account_id` int(11) DEFAULT NULL,
  `paid_date` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `user_id`, `course_id`, `category_id`, `user_account_id`, `paid_date`, `expiry_date`, `plan`, `paid_amount`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, NULL, NULL, NULL, NULL, 200, 1, NULL, '2020-06-29 22:04:27', '2020-06-29 22:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_18_114329_create_courses_table', 1),
(4, '2020_05_18_120504_create_categories_table', 1),
(5, '2020_05_18_121348_create_comments_table', 1),
(6, '2020_05_18_121917_create_items_table', 1),
(7, '2020_05_18_122352_create_payments_table', 1),
(8, '2020_05_18_144628_create_course_user_table', 1),
(9, '2020_05_18_225652_create_views_table', 1),
(10, '2020_05_25_135853_create_roles_table', 1),
(11, '2020_06_03_170137_create_coupons_table', 1),
(12, '2020_06_26_144329_create_notes_table', 1),
(13, '2020_06_26_212431_create_tp_tds_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `note` int(11) NOT NULL,
  `NB` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `user_id`, `course_id`, `category_id`, `note`, `NB`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Programmation mobile', 1, 5, 7, 20, NULL, NULL, '2020-06-26 18:57:54', '2020-06-26 20:10:59'),
(2, 'note d\'examen', 1, 12, 7, 18, NULL, NULL, '2020-06-26 20:15:07', '2020-06-26 20:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `amount` double(10,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'started_payment',
  `mode_of_payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_processor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `course_id`, `category_id`, `amount`, `status`, `mode_of_payment`, `payment_processor`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, 200.00, 'success', 'card', 'paystack', NULL, '2020-06-29 22:04:27', '2020-06-29 22:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, '2020-06-14 08:28:43', '2020-06-14 08:29:50'),
(2, 'Enseignant', NULL, '2020-06-14 08:30:08', '2020-06-14 08:30:08'),
(3, 'Etudiant', NULL, '2020-06-14 08:30:19', '2020-06-14 08:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `tp_tds`
--

CREATE TABLE `tp_tds` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp_td` int(11) NOT NULL DEFAULT 0,
  `file` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://placehold.jp/230x180.png',
  `paystack_authorization_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paystack_customer_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Male',
  `date_of_birth` date DEFAULT NULL,
  `isSubscribed` tinyint(4) DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$ixeLX.r7c6UnYkGOBoIFu.TXIBDtk4GrLQGi0ypdcq2ttMVlI0/uy',
  `view_count` int(11) NOT NULL DEFAULT 0,
  `role_id` int(11) NOT NULL DEFAULT 3,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `image`, `paystack_authorization_code`, `paystack_customer_code`, `gender`, `date_of_birth`, `isSubscribed`, `email`, `password`, `view_count`, `role_id`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hamza', NULL, NULL, 'http://placehold.jp/230x180.png', NULL, NULL, 'Male', NULL, 0, 'hamzakouki33@gmail.com', '$2y$10$sgcyq3J4q3az4HEc.wuSu.KgJwt7V377jrQMoy0Js4hh7mAN7.P76', 0, 3, NULL, NULL, '2020-06-29 22:04:13', '2020-06-29 22:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_account_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_tds`
--
ALTER TABLE `tp_tds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tp_tds`
--
ALTER TABLE `tp_tds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
