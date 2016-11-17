-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 11 朁E17 日 04:59
-- サーバのバージョン： 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `newsid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `newsid`, `email`, `comment`, `file`, `created_at`) VALUES
(19, 3, '321@qqcom', 'dsadada', '38844a1e985466651f07286afea469c0.jpg', '2016-11-02 07:48:43'),
(20, 1, 'qingxin2016@gmail.com', 'dsadadddddddddddddddddddddddd', '861bcc7b2e87d2d535407646cdddf8eb.jpg', '2016-11-02 08:27:12'),
(21, 8, 'miyashitatohru@gmail.com', 'hhhhhhhhhh', '783936fd05d1b4aa4ad63617a3b87dbf.jpg', '2016-11-02 09:33:54'),
(22, 1, '826955835@qq.com', 'yyyyyyyyy', '0ea9b17f1e3a94d335532d3ae6a528c3.jpg', '2016-11-02 09:54:49'),
(23, 6, 'fff@qq.com', 'fdsf', 'fe51be6fc7a2a1ed2dc1726b74eb28ee.jpg', '2016-11-02 10:13:09'),
(24, 6, '321@qqcom', '//////////////////////////////', 'de06002b891588e2e95ac39dfdd230a8.jpg', '2016-11-02 10:13:22'),
(25, 6, 'qingxin2016@gmail.com', '222222222222', '3926c9acd7e06a5690647e5a18e796bc.jpg', '2016-11-02 10:15:00'),
(26, 1, 'qingxin2016@gmail.com', 'fffffffffff', '', '2016-11-02 10:26:16'),
(27, 7, 'miyashitatohru@gmail.com', 'tttttttttttt', 'e6a27239f7cfe9bd7ee8178cd494c1ca.jpg', '2016-11-02 10:36:12'),
(28, 7, 'qingxin2016@gmail.com', 'Images in Bootstrap 3 can be made responsive-friendly via the addition of the .img-responsive class. This applies max-width: 100%;, height: auto; and display: block; to the image so that it scales nicely to the parent element.', '240a18a6e88efe93ffe8119185a0aacb.jpg', '2016-11-02 10:36:38'),
(29, 8, 'qingxin2016@gmail.com', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', '11af8bd7e4c9d3cd64bc516499bbb8b8.jpg', '2016-11-02 10:39:51'),
(30, 1, 'qingxin2016@gmail.com', 'To make the jumbotron full width, and without rounded corners, place it outside all .containers and instead add a .container within.', '', '2016-11-02 10:48:27'),
(31, 1, '', '', '', '2016-11-04 09:59:37'),
(32, 1, 'miyashitatohru@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchange', '274b80a510694cbc4022dc23544a826c.jpg', '2016-11-04 10:30:00'),
(33, 1, 'yyyy@cc', 'yyyyyyyyyyyy', 'aa02156ced819ac7dc298334c0993b01.jpg', '2016-11-08 15:14:16'),
(34, 1, 'qingxin2016@gmail.com', 'yyy', '6e4cce679ad6b6313d2330dfe9146906.jpg', '2016-11-08 15:14:38'),
(35, 1, 'miyashitatohru@gmail.com', '', 'ce4fb8c537296a969338c4647e6e0039.jpg', '2016-11-08 15:14:47'),
(36, 1, 'qingxin2016@gmail.com', '', '54fc1f1da9bbe55656334a1d56397576.jpg', '2016-11-08 15:14:55'),
(37, 6, 'qingxin2016@gmail.com', '', '23a1bc9c7d697e5c6043ded5144608e5.jpg', '2016-11-08 15:15:12'),
(38, 6, 'miyashitatohru@gmail.com', '', 'fb56ad95a587237808ca9f84372d031d.jpg', '2016-11-08 15:15:30'),
(39, 6, 'sho@mieux.co.jp', '', 'a67bf6388356d5585cc433f359309797.jpg', '2016-11-08 15:15:40'),
(40, 6, 'miyashitatohru@gmail.com', '', '041bbd66ad9de5eda00915d4b0c8af36.JPG', '2016-11-08 15:15:57'),
(41, 6, '826955835@qq.com', '', '', '2016-11-08 15:16:48');

-- --------------------------------------------------------

--
-- テーブルの構造 `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `commentid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `files`
--

INSERT INTO `files` (`id`, `commentid`, `path`, `created_at`) VALUES
(9, 16, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 07:41:50'),
(10, 17, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 07:42:15'),
(11, 18, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 07:46:52'),
(12, 19, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 07:48:43'),
(13, 20, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 08:27:12'),
(14, 21, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 09:33:54'),
(15, 22, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 09:54:49'),
(16, 23, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 10:13:09'),
(17, 24, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 10:13:22'),
(18, 25, 'C:\\xampp\\tmp\\php2662.tmp', '2016-11-02 10:15:01'),
(19, 27, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 10:36:12'),
(20, 28, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 10:36:38'),
(21, 29, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-02 10:39:51'),
(22, 32, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-04 10:30:00'),
(23, 33, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-08 15:14:16'),
(24, 34, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-08 15:14:38'),
(25, 35, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-08 15:14:47'),
(26, 36, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-08 15:14:55'),
(27, 37, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-08 15:15:12'),
(28, 38, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-08 15:15:30'),
(29, 39, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-08 15:15:40'),
(30, 40, 'C:\\xampp\\htdocs\\myblog\\public\\files\\', '2016-11-08 15:15:57');

-- --------------------------------------------------------

--
-- テーブルの構造 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `created_at`) VALUES
(1, 'What is Lorem Ipsum!?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2016-11-02 10:26:07'),
(2, 'Why do we use it?', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', '2016-10-31 17:45:39'),
(3, 'What is Lorem Ipsum?', 'ustry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not on', '2016-11-01 07:09:54'),
(5, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2016-11-01 07:11:10'),
(6, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2016-11-02 09:57:36'),
(7, '1914 translation by H. Rackham', '"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"', '2016-11-01 07:12:36'),
(8, 'Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC', '"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."', '2016-11-01 07:12:59'),
(9, 'Why do we use it?', 'Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?Why do we use it?', '2016-11-16 14:16:09');

-- --------------------------------------------------------

--
-- テーブルの構造 `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `uploads`
--

INSERT INTO `uploads` (`id`, `pid`, `title`, `price`, `number`, `created_at`) VALUES
(100, 1, 'test21355', 6, 963, '2016-11-04 18:02:26'),
(101, 2, 'good325', 11, 2, '2016-11-04 16:08:47'),
(102, 3, 'nice', 3, 2, '2016-11-04 16:08:47'),
(103, 4, 'qqqq', 3565, 4, '2016-11-04 16:08:47'),
(108, 5, 'tttttt', 654, 555, '2016-11-04 17:53:21'),
(109, 6, 'pid6', 667, 556, '2016-11-04 18:36:15'),
(110, 7, 'pid7', 668, 557, '2016-11-07 12:19:43'),
(111, 8, 'pid8', 669, 558, '2016-11-07 12:20:19'),
(112, 9, 'pid9', 670, 559, '2016-11-07 12:20:19'),
(113, 10, 'pid10', 671, 560, '2016-11-07 12:20:19'),
(114, 11, 'pid11', 672, 561, '2016-11-07 12:20:19'),
(115, 12, 'pid12', 673, 562, '2016-11-07 12:20:19'),
(116, 13, 'pid13', 674, 563, '2016-11-07 12:20:19'),
(117, 14, 'pid14', 675, 564, '2016-11-07 12:20:19'),
(118, 15, 'pid15', 676, 565, '2016-11-07 12:20:19'),
(119, 16, 'pid16', 677, 566, '2016-11-07 12:20:19'),
(120, 17, 'pid17', 678, 567, '2016-11-07 12:20:19'),
(121, 18, 'pid18', 679, 568, '2016-11-07 12:20:19'),
(122, 19, 'pid19', 680, 569, '2016-11-07 12:20:19'),
(123, 20, 'pid20', 681, 570, '2016-11-07 12:20:19'),
(124, 21, 'pid21', 682, 571, '2016-11-07 12:20:19'),
(125, 22, 'pid22', 683, 572, '2016-11-07 12:20:19'),
(126, 23, 'pid23', 684, 573, '2016-11-07 12:20:19'),
(127, 24, 'pid24', 685, 574, '2016-11-07 12:20:19'),
(128, 25, 'pid25', 686, 575, '2016-11-07 12:20:19'),
(129, 26, 'pid26', 687, 576, '2016-11-07 12:20:19'),
(130, 27, 'pid27', 688, 577, '2016-11-07 12:20:19'),
(131, 28, 'pid28', 689, 578, '2016-11-07 12:20:19'),
(132, 29, 'pid29', 690, 579, '2016-11-07 12:20:19'),
(133, 30, 'pid30', 691, 580, '2016-11-07 12:20:19'),
(134, 31, 'pid31', 692, 581, '2016-11-07 12:20:19'),
(135, 32, 'pid32', 693, 582, '2016-11-07 12:20:19'),
(136, 33, 'pid33', 694, 583, '2016-11-07 12:20:19'),
(137, 34, 'pid34', 695, 584, '2016-11-07 12:20:19'),
(138, 35, 'pid35', 696, 585, '2016-11-07 12:20:19'),
(139, 36, 'pid36', 697, 586, '2016-11-07 12:20:19'),
(140, 37, 'pid37', 698, 587, '2016-11-07 12:20:19'),
(141, 38, 'pid38', 699, 588, '2016-11-07 12:20:19'),
(142, 39, 'pid39', 700, 589, '2016-11-07 12:20:19'),
(143, 40, 'pid40', 701, 590, '2016-11-07 12:20:19'),
(144, 41, 'pid41', 702, 591, '2016-11-07 12:20:19'),
(145, 42, 'pid42', 703, 592, '2016-11-07 12:20:19'),
(146, 43, 'pid43', 704, 593, '2016-11-07 12:20:19'),
(147, 44, 'pid44', 705, 594, '2016-11-07 12:20:19'),
(148, 45, 'pid45', 706, 595, '2016-11-07 12:20:19'),
(149, 46, 'pid46', 707, 596, '2016-11-07 12:20:19'),
(150, 47, 'pid47', 708, 597, '2016-11-07 12:20:19'),
(151, 48, 'pid48', 709, 598, '2016-11-07 12:20:19'),
(152, 49, 'pid49', 710, 599, '2016-11-07 12:20:19'),
(153, 50, 'pid50', 711, 600, '2016-11-07 12:20:19'),
(154, 51, 'pid51', 712, 601, '2016-11-07 12:20:19'),
(155, 52, 'pid52', 713, 602, '2016-11-07 12:20:19'),
(156, 53, 'pid53', 714, 603, '2016-11-07 12:20:19'),
(157, 54, 'pid54', 715, 604, '2016-11-07 12:20:19'),
(158, 55, 'pid55', 716, 605, '2016-11-07 12:20:19'),
(159, 56, 'pid56', 717, 606, '2016-11-07 12:20:19'),
(160, 57, 'pid57', 718, 607, '2016-11-07 12:20:19'),
(161, 58, 'pid58', 719, 608, '2016-11-07 12:20:19'),
(162, 59, 'pid59', 720, 609, '2016-11-07 12:20:19'),
(163, 60, 'pid60', 721, 610, '2016-11-07 12:20:19'),
(164, 61, 'pid61', 722, 611, '2016-11-07 12:20:19'),
(165, 62, 'pid62', 723, 612, '2016-11-07 12:20:19'),
(166, 63, 'pid63', 724, 613, '2016-11-07 12:20:19'),
(167, 64, 'pid64', 725, 614, '2016-11-07 12:20:19'),
(168, 65, 'pid65', 726, 615, '2016-11-07 12:20:19'),
(169, 66, 'pid66', 727, 616, '2016-11-07 12:20:19'),
(170, 67, 'pid67', 728, 617, '2016-11-07 12:20:19'),
(171, 68, 'pid68', 729, 618, '2016-11-07 12:20:19'),
(172, 69, 'pid69', 730, 619, '2016-11-07 12:20:19'),
(173, 70, 'pid70', 731, 620, '2016-11-07 12:20:19'),
(174, 71, 'pid71', 732, 621, '2016-11-07 12:20:19'),
(175, 72, 'pid72', 733, 622, '2016-11-07 12:20:19'),
(176, 73, 'pid73', 734, 623, '2016-11-07 12:20:19'),
(177, 74, 'pid74', 735, 624, '2016-11-07 12:20:19'),
(178, 75, 'pid75', 736, 625, '2016-11-07 12:20:19'),
(179, 76, 'pid76', 737, 626, '2016-11-07 12:20:19'),
(180, 77, 'pid77', 738, 627, '2016-11-07 12:20:19'),
(181, 78, 'pid78', 739, 628, '2016-11-07 12:20:19'),
(182, 79, 'pid79', 740, 629, '2016-11-07 12:20:19'),
(183, 80, 'pid80', 741, 630, '2016-11-07 12:20:19'),
(184, 81, 'pid81', 742, 631, '2016-11-07 12:20:19'),
(185, 82, 'pid82', 743, 632, '2016-11-07 12:20:19'),
(186, 83, 'pid83', 744, 633, '2016-11-07 12:20:19'),
(187, 84, 'pid84', 745, 634, '2016-11-07 12:20:19'),
(188, 85, 'pid85', 746, 635, '2016-11-07 12:20:19'),
(189, 86, 'pid86', 747, 636, '2016-11-07 12:20:19'),
(190, 87, 'pid87', 748, 637, '2016-11-07 12:20:19'),
(191, 88, 'pid88', 749, 638, '2016-11-07 12:20:19'),
(192, 89, 'pid89', 750, 639, '2016-11-07 12:20:19');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `group` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profile_fields` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`) VALUES
(1, 'admin', 'JlrhzICFNoBXTH7U3K2PYg1poWRUJfH1q9AOsoi3P3s=', 1, 'test@example.com', '1478771387', '79bae6679ea4a61b875b9311cbcb456db697eed8', 'a:0:{}', 1478503991),
(7, '1', 'VySakfMofpcJLWbLICINZy9PcnGJUCn+37//agygLN4=', 1, 'qingxin2016@gmail.com', '1479346350', 'addad6d974107c0b3b696559f66e1805700457e5', 'a:0:{}', 1478581240),
(8, '2', 'lg4XC74azfiqzo4VPJhuu1ldQFdbMFKCVBebow0v750=', 2, '826955835@qq.com', '1478769026', '22dac9b322f1f96d474ee619f111461d4b13848b', 'a:0:{}', 1478581250),
(9, '3', 'AXv4dtXoU1G8j8QEps//pPdYwwu/gotto79uL2FnLUU=', 3, 'miyashitatohru@gmail.com', '1479273207', '140760c3d9d301349b654e7b0aa54d5b231d9fab', 'a:0:{}', 1478581258),
(10, '4', 'IgTdwGFLboBNNN0G7xWexy/oCyujyB5l4E+tK3/hNRE=', 2, 'sho@mieux.co.jp', '1479273256', '1c1c3c478db1c651b272be3459d736758085ccd1', 'a:0:{}', 1478581269);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
