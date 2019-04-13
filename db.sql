-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 13, 2019 at 06:45 PM
-- Server version: 5.7.25
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2-cms-application`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1527335281),
('manager', '4', 1530055800),
('user', '3', 1528115964),
('user', '4', 1531038647);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/block-manage/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/block-manage/block/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/block-manage/block/create', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/block-manage/block/delete', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/block-manage/block/index', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/block-manage/block/pdf', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/block-manage/block/save-as-new', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/block-manage/block/update', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/block-manage/block/view', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/category-manage/*', 2, NULL, NULL, NULL, 1527419169, 1527419169),
('/category-manage/default/*', 2, NULL, NULL, NULL, 1527419169, 1527419169),
('/category-manage/default/index', 2, NULL, NULL, NULL, 1527419169, 1527419169),
('/comment-manage/*', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/*', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/bulk', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/comment-manage/comment/change-status', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/delete', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/index', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/pdf', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/reply', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/save-as-new', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/update', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/comment-manage/comment/view', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/contact-manage/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/contact-manage/contact/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/contact-manage/contact/create', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/contact-manage/contact/delete', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/contact-manage/contact/index', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/contact-manage/contact/pdf', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/contact-manage/contact/save-as-new', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/contact-manage/contact/update', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/contact-manage/contact/view', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/dev-configuration/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/dev-configuration/general/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/dev-configuration/general/index', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/media-manage/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/media-manage/media/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/media-manage/media/bulk', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/media-manage/media/create', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/media-manage/media/create-multiple', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/media-manage/media/delete', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/media-manage/media/index', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/media-manage/media/pdf', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/media-manage/media/save-as-new', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/media-manage/media/update', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/optimize-configuration/*', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/optimize-configuration/view/*', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/optimize-configuration/view/flush-cache', 2, NULL, NULL, NULL, 1532243313, 1532243313),
('/optimize-configuration/view/index', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/order-manage/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/default/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/default/index', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/add-order-item', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/create', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/delete', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/index', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/pdf', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/save-as-new', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/update', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/order-manage/order/view', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/plugin-configuration/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/plugin-configuration/plugin/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/plugin-configuration/plugin/index', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/post-manage/*', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/post-type/*', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post-type/add-post', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post-type/create', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post-type/delete', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post-type/index', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post-type/pdf', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post-type/save-as-new', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post-type/update', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post-type/view', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post/*', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/post/bulk', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post/create', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/post/delete', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/post/index', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/post/pdf', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/post/save-as-new', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/post/save-as-new-language', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/post/update', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/post/view', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/post-manage/term-of-post-type/*', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/term-of-post-type/create', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/term-of-post-type/delete', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/term-of-post-type/index', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/term-of-post-type/pdf', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/term-of-post-type/save-as-new', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/term-of-post-type/update', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/post-manage/term-of-post-type/view', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/*', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/product-type-meta/*', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type-meta/create', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type-meta/delete', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type-meta/index', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type-meta/pdf', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type-meta/save-as-new', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type-meta/update', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type-meta/view', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type/*', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type/add-product', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type/create', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type/delete', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type/index', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type/pdf', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type/save-as-new', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product-type/update', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product/*', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/product/add-cart', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product/add-order-item', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product/bulk', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product/create', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/product/delete', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/product/index', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/product/pdf', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/product/save-as-new', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/product/save-as-new-language', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/product/update', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/product/view', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/product-manage/term-of-product-type/*', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/term-of-product-type/create', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/term-of-product-type/delete', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/term-of-product-type/index', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/term-of-product-type/pdf', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/term-of-product-type/save-as-new', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/product-manage/term-of-product-type/update', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/rbac/*', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/assignment/*', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/assignment/assign', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/assignment/index', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/assignment/remove', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/assignment/view', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/permission/*', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/permission/assign', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/permission/create', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/permission/delete', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/permission/index', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/permission/remove', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/permission/update', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/permission/view', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/role/*', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/role/assign', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/role/create', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/role/delete', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/role/index', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/role/remove', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/role/update', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/role/view', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/route/*', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/route/assign', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/route/index', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/route/refresh', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/route/remove', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/rule/*', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/rule/create', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/rule/delete', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/rule/index', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/rule/update', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/rbac/rule/view', 2, NULL, NULL, NULL, 1527335485, 1527335485),
('/seo-configuration/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/seo-configuration/general/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/seo-configuration/general/index', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/seo-configuration/home-page/*', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/seo-configuration/home-page/index', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/seo-configuration/site-map/*', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/seo-configuration/site-map/index', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/settings/*', 2, NULL, NULL, NULL, 1527527216, 1527527216),
('/settings/default/*', 2, NULL, NULL, NULL, 1527527216, 1527527216),
('/settings/default/create', 2, NULL, NULL, NULL, 1527527216, 1527527216),
('/settings/default/delete', 2, NULL, NULL, NULL, 1527527216, 1527527216),
('/settings/default/edit-setting', 2, NULL, NULL, NULL, 1527527216, 1527527216),
('/settings/default/index', 2, NULL, NULL, NULL, 1527527216, 1527527216),
('/settings/default/update', 2, NULL, NULL, NULL, 1527527216, 1527527216),
('/site-configuration/*', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/google-analytics/*', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/google-analytics/index', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/language/*', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/language/index', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/mailer/*', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/mailer/index', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/media/*', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/media/index', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/optimize/*', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/optimize/index', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/site-identity/*', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/site-identity/index', 2, NULL, NULL, NULL, 1531144972, 1531144972),
('/site-configuration/site-status/*', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/site-configuration/site-status/index', 2, NULL, NULL, NULL, 1536498348, 1536498348),
('/site/flush-cache', 2, NULL, NULL, NULL, 1532243302, 1532243302),
('/site/upload', 2, NULL, NULL, NULL, 1527459811, 1527459811),
('/subscribe-manage/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/subscribe-manage/subscribe/*', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/subscribe-manage/subscribe/create', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/subscribe-manage/subscribe/delete', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/subscribe-manage/subscribe/index', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/subscribe-manage/subscribe/pdf', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/subscribe-manage/subscribe/save-as-new', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/subscribe-manage/subscribe/update', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/subscribe-manage/subscribe/view', 2, NULL, NULL, NULL, 1531145446, 1531145446),
('/template-configuration/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/template-configuration/custom-css/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/template-configuration/custom-css/index', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/template-configuration/custom-script/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/template-configuration/custom-script/index', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/term-manage/*', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term-type/*', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term-type/add-term', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term-type/create', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term-type/delete', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term-type/index', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term-type/pdf', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term-type/save-as-new', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term-type/update', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term-type/view', 2, NULL, NULL, NULL, 1536498717, 1536498717),
('/term-manage/term/*', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term/add-term-relationships', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term/create', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term/delete', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term/index', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term/pdf', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term/save-as-new', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term/update', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/term-manage/term/view', 2, NULL, NULL, NULL, 1531145250, 1531145250),
('/translatemanager/*', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/*', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/change-status', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/create', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/delete', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/delete-source', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/dialog', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/error', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/export', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/import', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/list', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/message', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/optimizer', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/save', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/scan', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/translate', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/update', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/translatemanager/language/view', 2, NULL, NULL, NULL, 1527527151, 1527527151),
('/user-manage/*', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/auth/*', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/add-auth-assignment', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/add-auth-item-child', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/create', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/delete', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/index', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/pdf', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/save-as-new', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/update', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/auth/view', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/default/*', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/default/index', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/*', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/add-block', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/user/add-comment', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/user/add-post', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/add-product', 2, NULL, NULL, NULL, 1531145213, 1531145213),
('/user-manage/user/add-term', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/create', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/delete', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/index', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/pdf', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/save-as-new', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/update', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('/user-manage/user/view', 2, NULL, NULL, NULL, 1528553301, 1528553301),
('admin', 1, 'admin has all available permissions.', NULL, NULL, 1527334712, 1527334712),
('editor', 1, 'editor Roles', NULL, NULL, 1528342240, 1528342240),
('manager', 1, 'Manager Role', NULL, NULL, 1528356155, 1528356155),
('translator', 1, 'translator permissions.', NULL, NULL, 1527334893, 1527334893),
('user', 1, 'user permissions.', NULL, NULL, 1527334893, 1527334893);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/block-manage/*'),
('manager', '/block-manage/*'),
('admin', '/block-manage/block/*'),
('manager', '/block-manage/block/*'),
('admin', '/block-manage/block/create'),
('manager', '/block-manage/block/create'),
('admin', '/block-manage/block/delete'),
('manager', '/block-manage/block/delete'),
('admin', '/block-manage/block/index'),
('manager', '/block-manage/block/index'),
('admin', '/block-manage/block/pdf'),
('manager', '/block-manage/block/pdf'),
('admin', '/block-manage/block/save-as-new'),
('manager', '/block-manage/block/save-as-new'),
('admin', '/block-manage/block/update'),
('manager', '/block-manage/block/update'),
('admin', '/block-manage/block/view'),
('manager', '/block-manage/block/view'),
('admin', '/category-manage/*'),
('manager', '/category-manage/*'),
('admin', '/category-manage/default/*'),
('manager', '/category-manage/default/*'),
('admin', '/category-manage/default/index'),
('manager', '/category-manage/default/index'),
('admin', '/comment-manage/*'),
('manager', '/comment-manage/*'),
('admin', '/comment-manage/comment/*'),
('manager', '/comment-manage/comment/*'),
('admin', '/comment-manage/comment/bulk'),
('manager', '/comment-manage/comment/bulk'),
('admin', '/comment-manage/comment/change-status'),
('manager', '/comment-manage/comment/change-status'),
('admin', '/comment-manage/comment/delete'),
('manager', '/comment-manage/comment/delete'),
('admin', '/comment-manage/comment/index'),
('manager', '/comment-manage/comment/index'),
('admin', '/comment-manage/comment/pdf'),
('manager', '/comment-manage/comment/pdf'),
('admin', '/comment-manage/comment/reply'),
('manager', '/comment-manage/comment/reply'),
('admin', '/comment-manage/comment/save-as-new'),
('manager', '/comment-manage/comment/save-as-new'),
('admin', '/comment-manage/comment/update'),
('manager', '/comment-manage/comment/update'),
('admin', '/comment-manage/comment/view'),
('manager', '/comment-manage/comment/view'),
('admin', '/contact-manage/*'),
('manager', '/contact-manage/*'),
('admin', '/contact-manage/contact/*'),
('manager', '/contact-manage/contact/*'),
('admin', '/contact-manage/contact/create'),
('manager', '/contact-manage/contact/create'),
('admin', '/contact-manage/contact/delete'),
('manager', '/contact-manage/contact/delete'),
('admin', '/contact-manage/contact/index'),
('manager', '/contact-manage/contact/index'),
('admin', '/contact-manage/contact/pdf'),
('manager', '/contact-manage/contact/pdf'),
('admin', '/contact-manage/contact/save-as-new'),
('manager', '/contact-manage/contact/save-as-new'),
('admin', '/contact-manage/contact/update'),
('manager', '/contact-manage/contact/update'),
('admin', '/contact-manage/contact/view'),
('manager', '/contact-manage/contact/view'),
('admin', '/dev-configuration/*'),
('manager', '/dev-configuration/*'),
('admin', '/dev-configuration/general/*'),
('manager', '/dev-configuration/general/*'),
('admin', '/dev-configuration/general/index'),
('manager', '/dev-configuration/general/index'),
('admin', '/media-manage/*'),
('manager', '/media-manage/*'),
('admin', '/media-manage/media/*'),
('manager', '/media-manage/media/*'),
('admin', '/media-manage/media/bulk'),
('manager', '/media-manage/media/bulk'),
('admin', '/media-manage/media/create'),
('manager', '/media-manage/media/create'),
('admin', '/media-manage/media/create-multiple'),
('manager', '/media-manage/media/create-multiple'),
('admin', '/media-manage/media/delete'),
('manager', '/media-manage/media/delete'),
('admin', '/media-manage/media/index'),
('manager', '/media-manage/media/index'),
('admin', '/media-manage/media/pdf'),
('manager', '/media-manage/media/pdf'),
('admin', '/media-manage/media/save-as-new'),
('manager', '/media-manage/media/save-as-new'),
('admin', '/media-manage/media/update'),
('manager', '/media-manage/media/update'),
('admin', '/optimize-configuration/*'),
('manager', '/optimize-configuration/*'),
('admin', '/optimize-configuration/view/*'),
('manager', '/optimize-configuration/view/*'),
('admin', '/optimize-configuration/view/flush-cache'),
('manager', '/optimize-configuration/view/flush-cache'),
('admin', '/optimize-configuration/view/index'),
('manager', '/optimize-configuration/view/index'),
('admin', '/order-manage/*'),
('manager', '/order-manage/*'),
('admin', '/order-manage/default/*'),
('manager', '/order-manage/default/*'),
('admin', '/order-manage/default/index'),
('manager', '/order-manage/default/index'),
('admin', '/order-manage/order/*'),
('manager', '/order-manage/order/*'),
('admin', '/order-manage/order/add-order-item'),
('manager', '/order-manage/order/add-order-item'),
('admin', '/order-manage/order/create'),
('manager', '/order-manage/order/create'),
('admin', '/order-manage/order/delete'),
('manager', '/order-manage/order/delete'),
('admin', '/order-manage/order/index'),
('manager', '/order-manage/order/index'),
('admin', '/order-manage/order/pdf'),
('manager', '/order-manage/order/pdf'),
('admin', '/order-manage/order/save-as-new'),
('manager', '/order-manage/order/save-as-new'),
('admin', '/order-manage/order/update'),
('manager', '/order-manage/order/update'),
('admin', '/order-manage/order/view'),
('manager', '/order-manage/order/view'),
('admin', '/plugin-configuration/*'),
('manager', '/plugin-configuration/*'),
('admin', '/plugin-configuration/plugin/*'),
('manager', '/plugin-configuration/plugin/*'),
('admin', '/plugin-configuration/plugin/index'),
('manager', '/plugin-configuration/plugin/index'),
('admin', '/post-manage/*'),
('manager', '/post-manage/*'),
('admin', '/post-manage/post-type/*'),
('manager', '/post-manage/post-type/*'),
('admin', '/post-manage/post-type/add-post'),
('manager', '/post-manage/post-type/add-post'),
('admin', '/post-manage/post-type/create'),
('manager', '/post-manage/post-type/create'),
('admin', '/post-manage/post-type/delete'),
('manager', '/post-manage/post-type/delete'),
('admin', '/post-manage/post-type/index'),
('manager', '/post-manage/post-type/index'),
('admin', '/post-manage/post-type/pdf'),
('manager', '/post-manage/post-type/pdf'),
('admin', '/post-manage/post-type/save-as-new'),
('manager', '/post-manage/post-type/save-as-new'),
('admin', '/post-manage/post-type/update'),
('manager', '/post-manage/post-type/update'),
('admin', '/post-manage/post-type/view'),
('manager', '/post-manage/post-type/view'),
('admin', '/post-manage/post/*'),
('manager', '/post-manage/post/*'),
('admin', '/post-manage/post/bulk'),
('manager', '/post-manage/post/bulk'),
('admin', '/post-manage/post/create'),
('manager', '/post-manage/post/create'),
('admin', '/post-manage/post/delete'),
('manager', '/post-manage/post/delete'),
('admin', '/post-manage/post/index'),
('manager', '/post-manage/post/index'),
('admin', '/post-manage/post/pdf'),
('manager', '/post-manage/post/pdf'),
('admin', '/post-manage/post/save-as-new'),
('manager', '/post-manage/post/save-as-new'),
('admin', '/post-manage/post/save-as-new-language'),
('manager', '/post-manage/post/save-as-new-language'),
('admin', '/post-manage/post/update'),
('manager', '/post-manage/post/update'),
('admin', '/post-manage/post/view'),
('manager', '/post-manage/post/view'),
('admin', '/post-manage/term-of-post-type/*'),
('manager', '/post-manage/term-of-post-type/*'),
('admin', '/post-manage/term-of-post-type/create'),
('manager', '/post-manage/term-of-post-type/create'),
('admin', '/post-manage/term-of-post-type/delete'),
('manager', '/post-manage/term-of-post-type/delete'),
('admin', '/post-manage/term-of-post-type/index'),
('manager', '/post-manage/term-of-post-type/index'),
('admin', '/post-manage/term-of-post-type/pdf'),
('manager', '/post-manage/term-of-post-type/pdf'),
('admin', '/post-manage/term-of-post-type/save-as-new'),
('manager', '/post-manage/term-of-post-type/save-as-new'),
('admin', '/post-manage/term-of-post-type/update'),
('manager', '/post-manage/term-of-post-type/update'),
('admin', '/post-manage/term-of-post-type/view'),
('manager', '/post-manage/term-of-post-type/view'),
('admin', '/product-manage/*'),
('manager', '/product-manage/*'),
('admin', '/product-manage/product-type-meta/*'),
('manager', '/product-manage/product-type-meta/*'),
('admin', '/product-manage/product-type-meta/create'),
('manager', '/product-manage/product-type-meta/create'),
('admin', '/product-manage/product-type-meta/delete'),
('manager', '/product-manage/product-type-meta/delete'),
('admin', '/product-manage/product-type-meta/index'),
('manager', '/product-manage/product-type-meta/index'),
('admin', '/product-manage/product-type-meta/pdf'),
('manager', '/product-manage/product-type-meta/pdf'),
('admin', '/product-manage/product-type-meta/save-as-new'),
('manager', '/product-manage/product-type-meta/save-as-new'),
('admin', '/product-manage/product-type-meta/update'),
('manager', '/product-manage/product-type-meta/update'),
('admin', '/product-manage/product-type-meta/view'),
('manager', '/product-manage/product-type-meta/view'),
('admin', '/product-manage/product-type/*'),
('manager', '/product-manage/product-type/*'),
('admin', '/product-manage/product-type/add-product'),
('manager', '/product-manage/product-type/add-product'),
('admin', '/product-manage/product-type/create'),
('manager', '/product-manage/product-type/create'),
('admin', '/product-manage/product-type/delete'),
('manager', '/product-manage/product-type/delete'),
('admin', '/product-manage/product-type/index'),
('manager', '/product-manage/product-type/index'),
('admin', '/product-manage/product-type/pdf'),
('manager', '/product-manage/product-type/pdf'),
('admin', '/product-manage/product-type/save-as-new'),
('manager', '/product-manage/product-type/save-as-new'),
('admin', '/product-manage/product-type/update'),
('manager', '/product-manage/product-type/update'),
('admin', '/product-manage/product/*'),
('manager', '/product-manage/product/*'),
('admin', '/product-manage/product/add-cart'),
('manager', '/product-manage/product/add-cart'),
('admin', '/product-manage/product/add-order-item'),
('manager', '/product-manage/product/add-order-item'),
('admin', '/product-manage/product/bulk'),
('manager', '/product-manage/product/bulk'),
('admin', '/product-manage/product/create'),
('manager', '/product-manage/product/create'),
('admin', '/product-manage/product/delete'),
('manager', '/product-manage/product/delete'),
('admin', '/product-manage/product/index'),
('manager', '/product-manage/product/index'),
('admin', '/product-manage/product/pdf'),
('manager', '/product-manage/product/pdf'),
('admin', '/product-manage/product/save-as-new'),
('manager', '/product-manage/product/save-as-new'),
('admin', '/product-manage/product/save-as-new-language'),
('manager', '/product-manage/product/save-as-new-language'),
('admin', '/product-manage/product/update'),
('manager', '/product-manage/product/update'),
('admin', '/product-manage/product/view'),
('manager', '/product-manage/product/view'),
('admin', '/product-manage/term-of-product-type/*'),
('manager', '/product-manage/term-of-product-type/*'),
('admin', '/product-manage/term-of-product-type/create'),
('manager', '/product-manage/term-of-product-type/create'),
('admin', '/product-manage/term-of-product-type/delete'),
('manager', '/product-manage/term-of-product-type/delete'),
('admin', '/product-manage/term-of-product-type/index'),
('manager', '/product-manage/term-of-product-type/index'),
('admin', '/product-manage/term-of-product-type/pdf'),
('manager', '/product-manage/term-of-product-type/pdf'),
('admin', '/product-manage/term-of-product-type/save-as-new'),
('manager', '/product-manage/term-of-product-type/save-as-new'),
('admin', '/product-manage/term-of-product-type/update'),
('manager', '/product-manage/term-of-product-type/update'),
('admin', '/rbac/*'),
('admin', '/rbac/assignment/*'),
('admin', '/rbac/assignment/assign'),
('admin', '/rbac/assignment/index'),
('admin', '/rbac/assignment/remove'),
('admin', '/rbac/assignment/view'),
('admin', '/rbac/permission/*'),
('admin', '/rbac/permission/assign'),
('admin', '/rbac/permission/create'),
('admin', '/rbac/permission/delete'),
('admin', '/rbac/permission/index'),
('admin', '/rbac/permission/remove'),
('admin', '/rbac/permission/update'),
('admin', '/rbac/permission/view'),
('admin', '/rbac/role/*'),
('admin', '/rbac/role/assign'),
('admin', '/rbac/role/create'),
('admin', '/rbac/role/delete'),
('admin', '/rbac/role/index'),
('admin', '/rbac/role/remove'),
('admin', '/rbac/role/update'),
('admin', '/rbac/role/view'),
('admin', '/rbac/route/*'),
('admin', '/rbac/route/assign'),
('admin', '/rbac/route/index'),
('admin', '/rbac/route/refresh'),
('admin', '/rbac/route/remove'),
('admin', '/rbac/rule/*'),
('admin', '/rbac/rule/create'),
('admin', '/rbac/rule/delete'),
('admin', '/rbac/rule/index'),
('admin', '/rbac/rule/update'),
('admin', '/rbac/rule/view'),
('admin', '/seo-configuration/*'),
('manager', '/seo-configuration/*'),
('admin', '/seo-configuration/general/*'),
('manager', '/seo-configuration/general/*'),
('admin', '/seo-configuration/general/index'),
('manager', '/seo-configuration/general/index'),
('admin', '/seo-configuration/home-page/*'),
('manager', '/seo-configuration/home-page/*'),
('admin', '/seo-configuration/home-page/index'),
('manager', '/seo-configuration/home-page/index'),
('admin', '/seo-configuration/site-map/*'),
('manager', '/seo-configuration/site-map/*'),
('admin', '/seo-configuration/site-map/index'),
('manager', '/seo-configuration/site-map/index'),
('admin', '/settings/*'),
('manager', '/settings/*'),
('admin', '/settings/default/*'),
('manager', '/settings/default/*'),
('admin', '/settings/default/create'),
('manager', '/settings/default/create'),
('admin', '/settings/default/delete'),
('manager', '/settings/default/delete'),
('admin', '/settings/default/edit-setting'),
('manager', '/settings/default/edit-setting'),
('admin', '/settings/default/index'),
('manager', '/settings/default/index'),
('admin', '/settings/default/update'),
('manager', '/settings/default/update'),
('admin', '/site-configuration/*'),
('manager', '/site-configuration/*'),
('admin', '/site-configuration/google-analytics/*'),
('manager', '/site-configuration/google-analytics/*'),
('admin', '/site-configuration/google-analytics/index'),
('manager', '/site-configuration/google-analytics/index'),
('admin', '/site-configuration/language/*'),
('manager', '/site-configuration/language/*'),
('admin', '/site-configuration/language/index'),
('manager', '/site-configuration/language/index'),
('admin', '/site-configuration/mailer/*'),
('manager', '/site-configuration/mailer/*'),
('admin', '/site-configuration/mailer/index'),
('manager', '/site-configuration/mailer/index'),
('admin', '/site-configuration/media/*'),
('manager', '/site-configuration/media/*'),
('admin', '/site-configuration/media/index'),
('manager', '/site-configuration/media/index'),
('admin', '/site-configuration/optimize/*'),
('manager', '/site-configuration/optimize/*'),
('admin', '/site-configuration/optimize/index'),
('manager', '/site-configuration/optimize/index'),
('admin', '/site-configuration/site-identity/*'),
('manager', '/site-configuration/site-identity/*'),
('admin', '/site-configuration/site-identity/index'),
('manager', '/site-configuration/site-identity/index'),
('admin', '/site-configuration/site-status/*'),
('manager', '/site-configuration/site-status/*'),
('admin', '/site-configuration/site-status/index'),
('manager', '/site-configuration/site-status/index'),
('admin', '/site/flush-cache'),
('manager', '/site/flush-cache'),
('admin', '/site/upload'),
('manager', '/site/upload'),
('admin', '/subscribe-manage/*'),
('manager', '/subscribe-manage/*'),
('admin', '/subscribe-manage/subscribe/*'),
('manager', '/subscribe-manage/subscribe/*'),
('admin', '/subscribe-manage/subscribe/create'),
('manager', '/subscribe-manage/subscribe/create'),
('admin', '/subscribe-manage/subscribe/delete'),
('manager', '/subscribe-manage/subscribe/delete'),
('admin', '/subscribe-manage/subscribe/index'),
('manager', '/subscribe-manage/subscribe/index'),
('admin', '/subscribe-manage/subscribe/pdf'),
('manager', '/subscribe-manage/subscribe/pdf'),
('admin', '/subscribe-manage/subscribe/save-as-new'),
('manager', '/subscribe-manage/subscribe/save-as-new'),
('admin', '/subscribe-manage/subscribe/update'),
('manager', '/subscribe-manage/subscribe/update'),
('admin', '/subscribe-manage/subscribe/view'),
('manager', '/subscribe-manage/subscribe/view'),
('admin', '/template-configuration/*'),
('manager', '/template-configuration/*'),
('admin', '/template-configuration/custom-css/*'),
('manager', '/template-configuration/custom-css/*'),
('admin', '/template-configuration/custom-css/index'),
('manager', '/template-configuration/custom-css/index'),
('admin', '/template-configuration/custom-script/*'),
('manager', '/template-configuration/custom-script/*'),
('admin', '/template-configuration/custom-script/index'),
('manager', '/template-configuration/custom-script/index'),
('admin', '/term-manage/*'),
('manager', '/term-manage/*'),
('admin', '/term-manage/term-type/*'),
('manager', '/term-manage/term-type/*'),
('admin', '/term-manage/term-type/add-term'),
('manager', '/term-manage/term-type/add-term'),
('admin', '/term-manage/term-type/create'),
('manager', '/term-manage/term-type/create'),
('admin', '/term-manage/term-type/delete'),
('manager', '/term-manage/term-type/delete'),
('admin', '/term-manage/term-type/index'),
('manager', '/term-manage/term-type/index'),
('admin', '/term-manage/term-type/pdf'),
('manager', '/term-manage/term-type/pdf'),
('admin', '/term-manage/term-type/save-as-new'),
('manager', '/term-manage/term-type/save-as-new'),
('admin', '/term-manage/term-type/update'),
('manager', '/term-manage/term-type/update'),
('admin', '/term-manage/term-type/view'),
('manager', '/term-manage/term-type/view'),
('admin', '/term-manage/term/*'),
('manager', '/term-manage/term/*'),
('admin', '/term-manage/term/add-term-relationships'),
('manager', '/term-manage/term/add-term-relationships'),
('admin', '/term-manage/term/create'),
('manager', '/term-manage/term/create'),
('admin', '/term-manage/term/delete'),
('manager', '/term-manage/term/delete'),
('admin', '/term-manage/term/index'),
('manager', '/term-manage/term/index'),
('admin', '/term-manage/term/pdf'),
('manager', '/term-manage/term/pdf'),
('admin', '/term-manage/term/save-as-new'),
('manager', '/term-manage/term/save-as-new'),
('admin', '/term-manage/term/update'),
('manager', '/term-manage/term/update'),
('admin', '/term-manage/term/view'),
('manager', '/term-manage/term/view'),
('admin', '/translatemanager/*'),
('admin', '/translatemanager/language/*'),
('admin', '/translatemanager/language/change-status'),
('admin', '/translatemanager/language/create'),
('admin', '/translatemanager/language/delete'),
('admin', '/translatemanager/language/delete-source'),
('admin', '/translatemanager/language/dialog'),
('admin', '/translatemanager/language/error'),
('admin', '/translatemanager/language/export'),
('admin', '/translatemanager/language/import'),
('admin', '/translatemanager/language/list'),
('admin', '/translatemanager/language/message'),
('admin', '/translatemanager/language/optimizer'),
('admin', '/translatemanager/language/save'),
('admin', '/translatemanager/language/scan'),
('admin', '/translatemanager/language/translate'),
('admin', '/translatemanager/language/update'),
('admin', '/translatemanager/language/view'),
('admin', '/user-manage/*'),
('manager', '/user-manage/*'),
('admin', '/user-manage/auth/*'),
('manager', '/user-manage/auth/*'),
('admin', '/user-manage/auth/add-auth-assignment'),
('manager', '/user-manage/auth/add-auth-assignment'),
('admin', '/user-manage/auth/add-auth-item-child'),
('manager', '/user-manage/auth/add-auth-item-child'),
('admin', '/user-manage/auth/create'),
('manager', '/user-manage/auth/create'),
('admin', '/user-manage/auth/delete'),
('manager', '/user-manage/auth/delete'),
('admin', '/user-manage/auth/index'),
('manager', '/user-manage/auth/index'),
('admin', '/user-manage/auth/pdf'),
('manager', '/user-manage/auth/pdf'),
('admin', '/user-manage/auth/save-as-new'),
('manager', '/user-manage/auth/save-as-new'),
('admin', '/user-manage/auth/update'),
('manager', '/user-manage/auth/update'),
('admin', '/user-manage/auth/view'),
('manager', '/user-manage/auth/view'),
('admin', '/user-manage/default/*'),
('manager', '/user-manage/default/*'),
('admin', '/user-manage/default/index'),
('manager', '/user-manage/default/index'),
('admin', '/user-manage/user/*'),
('manager', '/user-manage/user/*'),
('admin', '/user-manage/user/add-block'),
('manager', '/user-manage/user/add-block'),
('admin', '/user-manage/user/add-comment'),
('manager', '/user-manage/user/add-comment'),
('admin', '/user-manage/user/add-post'),
('manager', '/user-manage/user/add-post'),
('admin', '/user-manage/user/add-product'),
('manager', '/user-manage/user/add-product'),
('admin', '/user-manage/user/add-term'),
('manager', '/user-manage/user/add-term'),
('admin', '/user-manage/user/create'),
('manager', '/user-manage/user/create'),
('admin', '/user-manage/user/delete'),
('manager', '/user-manage/user/delete'),
('admin', '/user-manage/user/index'),
('manager', '/user-manage/user/index'),
('admin', '/user-manage/user/pdf'),
('manager', '/user-manage/user/pdf'),
('admin', '/user-manage/user/save-as-new'),
('manager', '/user-manage/user/save-as-new'),
('admin', '/user-manage/user/update'),
('manager', '/user-manage/user/update'),
('admin', '/user-manage/user/view'),
('manager', '/user-manage/user/view'),
('admin', 'editor'),
('manager', 'editor'),
('admin', 'manager'),
('admin', 'translator'),
('manager', 'translator'),
('admin', 'user'),
('editor', 'user'),
('manager', 'user'),
('translator', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_migration`
--

CREATE TABLE `auth_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_migration`
--

INSERT INTO `auth_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1527334710),
('m180526_113737_create_role_admin', 1527334712),
('m180526_113927_create_role_user', 1527334893),
('m180526_114034_create_role_translator', 1527334893),
('m180526_114228_add_child_admin_user', 1527335149),
('m180526_114325_add_child_admin_translate', 1527335149),
('m180526_114423_add_child_translator_user', 1527335149),
('m180526_114718_assign_admin', 1527335281);

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billing_type`
--

CREATE TABLE `billing_type` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` int(19) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `assign_with` int(19) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `name`, `content`, `author`, `language`, `assign_with`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 'top-head-nav', '<div class=\"col-md-6 col-sm-6 col-xs-12 text-left\">\r\n                    <ul>\r\n                        <li><a href=\"http://contact/index.html\">Liên hệ</a></li>\r\n                        <li><a href=\"http://contact/index.html\">Hỗ trợ</a></li>\r\n                    </ul><!--right-top-bar-->\r\n                </div>', 1, 'vi-VN', 0, '2018-11-17 09:34:57', '2018-11-14 08:50:12', 1, 1),
(4, 'main-nav-menu', '<div class=\"col-md-5 col-sm-4 col-xs-4\">\r\n                <ul class=\"menu\">\r\n                    <li><a href=\"http://index.html\">Trang chủ</a></li>\r\n                    <li class=\"mega-menu-top\">\r\n                        <a href=\"http://index.html#\">Danh mục</a>\r\n                        <div class=\"mega-menu columns-4\">\r\n                            <ul>\r\n                                <li class=\"first\">Fruit &amp; Veg</li>\r\n                                <li><a href=\"shop/index.html\">Set Boxes</a></li>\r\n                                <li><a href=\"shop/index.html\">Fruit</a></li>\r\n                                <li><a href=\"shop/index.html\">Veg</a></li>\r\n                                <li><a href=\"shop/index.html\">Salad</a></li>\r\n                                <li><a href=\"shop/index.html\">Herbs</a></li>\r\n                                <li><a href=\"shop/index.html\">Organic</a></li>\r\n                                <li><a href=\"shop/index.html\">Juice &amp; Smoothies</a></li>\r\n                                <li><a href=\"shop/index.html\">Nuts &amp; Dried Fruit</a></li>\r\n                                <li><a href=\"shop/index.html\">Gourmet Pantry</a></li>\r\n                            </ul>\r\n                            <ul>\r\n                                <li class=\"first\">Dairy</li>\r\n                                <li><a href=\"shop/index.html\">Milk</a></li>\r\n                                <li><a href=\"shop/index.html\">Cheese</a></li>\r\n                                <li><a href=\"shop/index.html\">Specialty Cheese</a></li>\r\n                                <li><a href=\"shop/index.html\">Yoghurt</a></li>\r\n                                <li><a href=\"shop/index.html\">Butter</a></li>\r\n                                <li><a href=\"shop/index.html\">Cream</a></li>\r\n                                <li><a href=\"shop/index.html\">Dips &amp; Antipasto</a></li>\r\n                            </ul>\r\n                            <ul>\r\n                                <li class=\"first\">Frozen</li>\r\n                                <li><a href=\"shop/index.html\">Frozen Vegetables</a></li>\r\n                                <li><a href=\"shop/index.html\">Frozen Desserts &amp; Bakery</a></li>\r\n                                <li><a href=\"shop/index.html\">Frozen Seafood</a></li>\r\n                                <li><a href=\"shop/index.html\">Frozen Breakfast Food</a></li>\r\n                                <li><a href=\"shop/index.html\">Frozen Fruit</a></li>\r\n                                <li><a href=\"shop/index.html\">Ice</a></li>\r\n                                <li><a href=\"shop/index.html\">Frozen Appetizers</a></li>\r\n                            </ul>\r\n                            <ul>\r\n                                <li class=\"first\">Superfoods</li>\r\n                                <li><a href=\"shop/index.html\">Ayurverdic</a></li>\r\n                                <li><a href=\"shop/index.html\">South American</a></li>\r\n                                <li><a href=\"shop/index.html\">Green &amp; Fungi</a></li>\r\n                                <li><a href=\"shop/index.html\">Cacao &amp; Coconut</a></li>\r\n                                <li><a href=\"shop/index.html\">Fruit &amp; Hemp</a></li>\r\n                                <li><a href=\"shop/index.html\">Superfood Teas</a></li>\r\n                                <li><a href=\"shop/index.html\">Superfood Snacks</a></li>\r\n                                <li><a href=\"shop/index.html\">Superfood Juices</a></li></ul></div></li>\r\n                    <li><a href=\"http://blog/index.html\">Công thức</a></li>\r\n                    <li><a href=\"http://journal-blog/index.html\">Blog</a></li>\r\n                    <li class=\"mega-menu-top\">\r\n                        <a href=\"http://#\">Cửa hàng</a>\r\n                        <div class=\"mega-menu columns-3\">\r\n                            <ul>\r\n                                <li class=\"first\">Shop Page</li>\r\n                                <li><a href=\"shop/index.html\">Shop</a></li>\r\n                                <li><a href=\"shop-two/index.html\">Shop v2</a></li>\r\n                                <li><a href=\"shop-column-three/index.html\">Shop Column 3</a></li>\r\n                                <li><a href=\"shop-column-three-v2/index.html\">Shop Column 3 v2</a></li>\r\n                                <li><a href=\"shop-column-three-v3/index.html\">Shop Column 3 v3</a></li>\r\n                            </ul>\r\n                            <ul>\r\n                                <li class=\"first\">Shop Page</li>\r\n                                <li><a href=\"shop-with-sidebar/index.html\">Shop With Sidebar</a></li>\r\n                                <li><a href=\"shop-with-sidebar-v2/index.html\">Shop With Sidebar v2</a></li>\r\n                                <li><a href=\"shop-column-six/index.html\">Shop Column Six</a></li>\r\n                                <li><a href=\"shop-full-width/index.html\">Shop Full Width</a></li>\r\n                                <li><a href=\"shop-categories/index.html\">Shop Categories</a></li>\r\n                            </ul>\r\n                            <ul>\r\n                                <li class=\"first\">Single Product</li>\r\n                                <li><a href=\"single-product-limited/index.html\">Single Product Limited</a></li>\r\n                                <li><a href=\"single-product-sale/index.html\">Single Product Sale</a></li>\r\n                                <li><a href=\"single-product-stock/index.html\">Single Product Stock</a></li>\r\n                                <li><a href=\"single-product-v2/index.html\">Single Product v2</a></li>\r\n                                <li><a href=\"single-product-video/index.html\">Single Product Video</a></li>\r\n                            </ul>\r\n                        </div><!--mega-menu-->\r\n                    </li>\r\n                </ul><!--menu-->\r\n                <button type=\"button\" class=\"menu-button\">\r\n                    <span></span>\r\n                </button>\r\n            </div>', 1, 'vi-VN', 0, '2018-11-17 09:35:01', '2018-11-14 09:10:04', 1, 1),
(6, 'right-social-network-menu', '<ul class=\"social-icon\">\r\n                        <li class=\"facebook\"><a href=\"index.html#\"><i class=\"fa fa-facebook\"></i></a></li>\r\n                        <li class=\"google\"><a href=\"index.html#\"><i class=\"fa fa-google-plus\"></i></a></li>\r\n                        <li class=\"tumblr\"><a href=\"index.html#\"><i class=\"fa fa-tumblr\"></i></a></li>\r\n                        <li class=\"instagram\"><a href=\"index.html#\"><i class=\"fa fa-instagram\"></i></a></li>\r\n                    </ul><!--social-icon-->', 1, 'vi-VN', 0, '2018-11-17 09:35:05', '2018-11-14 09:04:41', 1, 1),
(8, 'slide-1', '<div class=\"base-slider owl-carousel owl-theme\">\r\n  	<div class=\"item\">\r\n        <img src=\"/themes/cinagro/assets/images/slider2.jpg\" alt=\"slider\">\r\n        <div class=\"text-slider\">\r\n            <h2>Đại chiến trái cây<br>ưu đãi tẹt ga</h2><a href=\"journal-blog/index.html\" class=\"custom-btn text-center yellow\">top\r\n                tips</a>\r\n        </div><!--text-slider-->\r\n    </div><!--item-->\r\n    <div class=\"item slide-two\">\r\n        <img src=\"/themes/cinagro/assets/images/slider.jpg\" alt=\"slider\">\r\n        <div class=\"text-slider\">\r\n            <h2>Bạn có biết rằng<br>Trái cây tự nhiên giúp kéo dài tuổi thọ!</h2>\r\n            <a href=\"journal-blog/index.html\" class=\"custom-btn text-center yellow\">top tips</a>\r\n        </div><!--text-slider-->\r\n    </div><!--item-->\r\n    <div class=\"item slide-three\">\r\n        <img src=\"/themes/cinagro/assets/images/slider3.jpg\" alt=\"slider\">\r\n        <div class=\"text-slider last\">\r\n            <h2>Khuyến mãi trong tháng!<br><span class=\"text-pink\">Bơ sáp cực đại chỉ từ 80K 1 Kg</span></h2>\r\n            <a href=\"journal-blog/index.html\" class=\"custom-btn green text-center\">top tips</a>\r\n        </div><!--text-slider-->\r\n    </div><!--item-->\r\n</div>', 1, 'vi-VN', 0, '2018-11-17 09:35:09', '2018-11-15 09:39:45', 1, 1),
(10, 'category-product-1', '<div class=\"container\">\r\n    <div class=\"category-product\">\r\n        <ul>\r\n            <li>\r\n                <a href=\"shop/index.html\"> <img src=\"/themes/cinagro/assets/images/groceries.png\" alt=\"groceries\">\r\n                    <span>Tự nhiên</span> </a>\r\n            </li>\r\n            <li class=\"center\">\r\n                <a href=\"shop/index.html\"> <img src=\"/themes/cinagro/assets/images/pineapple.png\" alt=\"pineapple\">\r\n                    <span>Tươi</span> </a>\r\n            </li>\r\n            <li>\r\n                <a href=\"shop/index.html\"> <img src=\"/themes/cinagro/assets/images/corn.png\" alt=\"corn\">\r\n                    <span>Sạch</span> </a>\r\n            </li>\r\n        </ul>\r\n    </div>\r\n</div>', 1, 'vi-VN', 0, '2018-11-17 09:35:12', '2018-11-14 10:07:28', 1, 1),
(12, 'search-form', '                <input type=\"text\" placeholder=\"Tìm thứ bạn muốn...\">\r\n                <span class=\"close\"><img src=\"/themes/cinagro/assets/images/close2.png\" alt=\"close\"></span>\r\n            ', 1, 'vi-VN', 0, '2018-11-17 09:35:15', '2018-11-15 09:45:52', 1, 1),
(13, 'title-1', '<div class=\"title-head\">\r\n            <h2 class=\"text-black\">Đã xanh, sạch, đẹp </h2><h2 class=\"text-black\">còn ngon nửa</h2>\r\n            <p>Thực phẩm hữu cơ sạch, lành mạnh tốt cho sức khỏe</p>\r\n        </div>', 1, 'vi-VN', 0, '2018-11-16 14:27:16', '2018-11-16 14:27:16', 1, 1),
(15, 'title-2', '<div class=\"title-head\">\r\n            <h2 class=\"text-black\">Dành cả thanh xuân</h2><h2 class=\"text-black\">bán trái cây chất lượng</h2>\r\n            <p>Bạn có biết? Uống nước ép trái cây mỗi ngày, đẹp da sáng mắt ngăn ngừa mụn hơn 42 lần</p>\r\n        </div>', 1, 'vi-VN', 0, '2018-11-16 14:30:50', '2018-11-16 14:30:50', 1, 1),
(18, 'banner-1', '<div class=\"banner-color\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-4\">\r\n                <div class=\"inside text-center bg-yellow\">\r\n                    <h5>Vận chuyển tận nơi</h5>\r\n                    <p>Bạn bận rộn với công việc, hãy tiếp tục, </p><p><br></p><p>chỉ cần mở cửa khi nhân viên giao hàng đến</p>\r\n                </div><!--inside-->\r\n            </div>\r\n            <div class=\"col-md-4\">\r\n                <div class=\"inside text-center bg-yellow\">\r\n                    <h5>Đa dạng mặt hàng</h5>\r\n                    <p>Hơn 400 mặt hàng thông dụng, chất lượng </p><p><br></p><p>đang chờ bạn khám phá</p>\r\n                </div><!--inside-->\r\n            </div>\r\n            <div class=\"col-md-4\">\r\n                <div class=\"inside text-center bg-yellow\">\r\n                    <h5>Săn mã giảm giá</h5>\r\n                    <p>Nhập mã: LOVETRAICAYXANHTUOI</p><p><br></p><p>Giảm ngay 30.000 VND cho đơn hàng đầu tiên</p>\r\n                </div><!--inside-->\r\n            </div>\r\n        </div>\r\n    </div><!--banner-color-->', 1, 'vi-VN', 0, '2018-11-17 09:35:23', '2018-11-17 05:12:05', 1, 1),
(20, 'healthy-daily', '<div class=\"container-large\">\r\n    <div class=\"schedule\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-6 text-center\">\r\n                <div class=\"inside\">\r\n                    <div class=\"title-head\">\r\n                        <h2 class=\"text-black\">Healthy Lunch</h2>\r\n                        <p>Be Healty Organic Food</p>\r\n                    </div>\r\n                    <ul class=\"week nav nav-tabs\">\r\n                        <li><a href=\"index.html#sunday\" data-toggle=\"tab\">S</a></li>\r\n                        <li class=\"active\"><a href=\"index.html#monday\" data-toggle=\"tab\" aria-expanded=\"true\">M</a></li>\r\n                        <li><a href=\"index.html#tuesday\" data-toggle=\"tab\">T</a></li>\r\n                        <li><a href=\"index.html#wednesday\" data-toggle=\"tab\">W</a></li>\r\n                        <li><a href=\"index.html#thursday\" data-toggle=\"tab\">T</a></li>\r\n                        <li><a href=\"index.html#friday\" data-toggle=\"tab\">F</a></li>\r\n                        <li><a href=\"index.html#saturday\" data-toggle=\"tab\">S</a></li>\r\n                    </ul><!--week-->\r\n                    <div class=\"tab-content\">\r\n                        <div class=\"tab-pane fade\" id=\"sunday\">\r\n                            <ul>\r\n                                <li class=\"first\">sunday:</li>\r\n                                <li>4 oz. grilled chicken breast</li>\r\n                                <li>1/2 cup sliced strawberries</li>\r\n                                <li>1/2 cup steamed spinach w/ salt and pepper</li>\r\n                                <li>1/2 cup brown rice, steamed</li>\r\n                            </ul>\r\n                        </div>\r\n                        <div class=\"tab-pane fade in active\" id=\"monday\">\r\n                            <ul>\r\n                                <li class=\"first\">monday:</li>\r\n                                <li>4 oz. grilled chicken breast</li>\r\n                                <li>1/2 cup sliced strawberries</li>\r\n                                <li>1/2 cup steamed spinach w/ salt and pepper</li>\r\n                                <li>1/2 cup brown rice, steamed</li>\r\n                            </ul>\r\n                        </div>\r\n                        <div class=\"tab-pane fade\" id=\"tuesday\">\r\n                            <ul>\r\n                                <li class=\"first\">tuesday:</li>\r\n                                <li>4 oz. grilled chicken breast</li>\r\n                                <li>1/2 cup sliced strawberries</li>\r\n                                <li>1/2 cup steamed spinach w/ salt and pepper</li>\r\n                                <li>1/2 cup brown rice, steamed</li>\r\n                            </ul>\r\n                        </div>\r\n                        <div class=\"tab-pane fade\" id=\"wednesday\">\r\n                            <ul>\r\n                                <li class=\"first\">wednesday:</li>\r\n                                <li>4 oz. grilled chicken breast</li>\r\n                                <li>1/2 cup sliced strawberries</li>\r\n                                <li>1/2 cup steamed spinach w/ salt and pepper</li>\r\n                                <li>1/2 cup brown rice, steamed</li>\r\n                            </ul>\r\n                        </div>\r\n                        <div class=\"tab-pane fade\" id=\"thursday\">\r\n                            <ul>\r\n                                <li class=\"first\">thursday:</li>\r\n                                <li>4 oz. grilled chicken breast</li>\r\n                                <li>1/2 cup sliced strawberries</li>\r\n                                <li>1/2 cup steamed spinach w/ salt and pepper</li>\r\n                                <li>1/2 cup brown rice, steamed</li>\r\n                            </ul>\r\n                        </div>\r\n                        <div class=\"tab-pane fade\" id=\"friday\">\r\n                            <ul>\r\n                                <li class=\"first\">friday:</li>\r\n                                <li>4 oz. grilled chicken breast</li>\r\n                                <li>1/2 cup sliced strawberries</li>\r\n                                <li>1/2 cup steamed spinach w/ salt and pepper</li>\r\n                                <li>1/2 cup brown rice, steamed</li>\r\n                            </ul>\r\n                        </div>\r\n                        <div class=\"tab-pane fade\" id=\"saturday\">\r\n                            <ul>\r\n                                <li class=\"first\">saturday:</li>\r\n                                <li>4 oz. grilled chicken breast</li>\r\n                                <li>1/2 cup sliced strawberries</li>\r\n                                <li>1/2 cup steamed spinach w/ salt and pepper</li>\r\n                                <li>1/2 cup brown rice, steamed</li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                    <a href=\"shop/index.html\" class=\"custom-btn text-center green\">order now</a>\r\n                </div><!--inside-->\r\n            </div>\r\n        </div>\r\n    </div><!--schedule-->\r\n</div>', 1, 'vi-VN', 0, '2018-11-16 14:37:53', '2018-11-16 14:37:53', 1, 1),
(22, 'testimonials', '<div class=\"customers\">\r\n        <div class=\"title-head\">\r\n            <h2 class=\"text-black\">Khách hàng thân thương</h2>\r\n            <p>Đẹp trai, xinh gái những thực khách sành ăn</p>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-md-4\">\r\n                <div class=\"inside\">\r\n                    <img src=\"/themes/cinagro/assets/images/stars.png\" class=\"star\" alt=\"stars\">\r\n                    <p>\"I love your system. Wow what great service, I love it! I will recommend you to<br>my colleagues.<br>I\r\n                        have gotten at least 50 times the value from food.\"</p>\r\n                    <a href=\"index.html#\">\r\n                        <div class=\"user\">\r\n                            <img src=\"/themes/cinagro/assets/images/user1.png\" alt=\"user1\">\r\n                            <div class=\"inside-inside\">\r\n                                <span class=\"name\">Pauline Norman</span> <span>Melbourne, FL</span>\r\n                            </div>\r\n                        </div>\r\n                    </a>\r\n                </div><!--inside-->\r\n            </div>\r\n            <div class=\"col-md-4\">\r\n                <div class=\"inside\">\r\n                    <img src=\"/themes/cinagro/assets/images/stars.png\" class=\"star\" alt=\"stars\">\r\n                    <p>\"Food is worth much more than I paid. I like food more and more each day because it makes my life\r\n                        a lot easier. Thank You! I have gotten at least 50 times the value from food.\"</p>\r\n                    <a href=\"index.html#\">\r\n                        <div class=\"user\">\r\n                            <img src=\"/themes/cinagro/assets/images/user2.png\" alt=\"user1\">\r\n                            <div class=\"inside-inside\">\r\n                                <span class=\"name\">Juana Duncan</span> <span>Orlando, FL</span>\r\n                            </div>\r\n                        </div>\r\n                    </a>\r\n                </div><!--inside-->\r\n            </div>\r\n            <div class=\"col-md-4\">\r\n                <div class=\"inside\">\r\n                    <img src=\"/themes/cinagro/assets/images/stars.png\" class=\"star\" alt=\"stars\">\r\n                    <p>\"Best. Product. Ever! I couldn\'t have asked for more than this. Food is the most valuable\r\n                        business resource we have <br>EVER purchased.<br>I can\'t say enough about food.\"</p>\r\n                    <a href=\"index.html#\">\r\n                        <div class=\"user\">\r\n                            <img src=\"/themes/cinagro/assets/images/user3.png\" alt=\"user1\">\r\n                            <div class=\"inside-inside\">\r\n                                <span class=\"name\">Gail Butler</span> <span>Orlando, FL</span>\r\n                            </div>\r\n                        </div>\r\n                    </a>\r\n                </div><!--inside-->\r\n            </div>\r\n        </div>\r\n    </div>', 1, 'vi-VN', 0, '2018-11-17 09:35:21', '2018-11-16 15:05:23', 1, 1),
(24, 'subscribe-form-title', '<h2>Đăng kí nhận khuyến mãi</h2>', 1, 'vi-VN', 0, '2018-11-17 06:12:40', '2018-11-17 06:12:40', 1, 1),
(25, 'home-blog-section-title', '<div class=\"title-head\">\r\n            <h2 class=\"text-black\">Blog</h2>\r\n            <p>Mẹo hay bảo quản trái cây, chế biến thức uống</p>\r\n        </div>', 1, 'vi-VN', 0, '2018-11-17 06:16:19', '2018-11-17 06:16:19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(19) NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_url` varchar(255) DEFAULT NULL,
  `author_ip` varchar(255) DEFAULT NULL,
  `status` varchar(25) DEFAULT 'pending',
  `type` varchar(25) DEFAULT NULL,
  `obj_type` varchar(255) DEFAULT NULL,
  `obj_id` int(19) DEFAULT NULL,
  `parent` int(19) DEFAULT NULL,
  `author` int(19) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `author_name`, `author_email`, `author_url`, `author_ip`, `status`, `type`, `obj_type`, `obj_id`, `parent`, `author`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod tempor unt ut labore et dolore magna aliquat enim ad minim.', 'thienhung', 'thienhungho@gmail.com', '/', '::1', 'public', 'post-comment', 'post', 3, 0, 1, '2018-10-23 10:44:02', '2018-10-23 10:44:02', 1, 1),
(4, 'reply', 'thienhung', 'thienhungho@gmail.com', '/', '::1', 'public', 'post-comment', 'post', 3, 2, 1, '2018-10-23 10:44:02', '2018-10-23 10:44:02', 1, 1),
(5, 'test', 'thienhung', 'thienhungho@gmail.com', '/', '::1', 'public', 'template-comment', 'template', 5, 0, 1, '2018-08-16 00:11:33', '2018-08-16 00:05:06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(19) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_phone` varchar(255) DEFAULT NULL,
  `author_birth_date` date DEFAULT NULL,
  `author_stress_address` varchar(255) DEFAULT NULL,
  `author_city` varchar(255) DEFAULT NULL,
  `author_zip_code` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(19) NOT NULL,
  `obj_id` int(19) NOT NULL,
  `obj_type` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `obj_id`, `obj_type`, `ip`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(4, 5, 'template', '::1', '2018-08-16 02:11:39', '2018-08-16 02:11:39', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name_ascii` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language`, `country`, `name`, `name_ascii`, `status`) VALUES
('af-ZA', 'af', 'za', 'Afrikaans', 'Afrikaans', 0),
('ar-AR', 'ar', 'ar', '‏العربية‏', 'Arabic', 0),
('az-AZ', 'az', 'az', 'Azərbaycan dili', 'Azerbaijani', 0),
('be-BY', 'be', 'by', 'Беларуская', 'Belarusian', 0),
('bg-BG', 'bg', 'bg', 'Български', 'Bulgarian', 0),
('bn-IN', 'bn', 'in', 'বাংলা', 'Bengali', 0),
('bs-BA', 'bs', 'ba', 'Bosanski', 'Bosnian', 0),
('ca-ES', 'ca', 'es', 'Català', 'Catalan', 0),
('cs-CZ', 'cs', 'cz', 'Čeština', 'Czech', 0),
('cy-GB', 'cy', 'gb', 'Cymraeg', 'Welsh', 0),
('da-DK', 'da', 'dk', 'Dansk', 'Danish', 0),
('de-DE', 'de', 'de', 'Deutsch', 'German', 0),
('el-GR', 'el', 'gr', 'Ελληνικά', 'Greek', 0),
('en-GB', 'en', 'gb', 'English (UK)', 'English (UK)', 0),
('en-PI', 'en', 'pi', 'English (Pirate)', 'English (Pirate)', 0),
('en-UD', 'en', 'ud', 'English (Upside Down)', 'English (Upside Down)', 0),
('en-US', 'en', 'us', 'English (US)', 'English (US)', 1),
('eo-EO', 'eo', 'eo', 'Esperanto', 'Esperanto', 0),
('es-ES', 'es', 'es', 'Español (España)', 'Spanish (Spain)', 0),
('es-LA', 'es', 'la', 'Español', 'Spanish', 0),
('et-EE', 'et', 'ee', 'Eesti', 'Estonian', 0),
('eu-ES', 'eu', 'es', 'Euskara', 'Basque', 0),
('fa-IR', 'fa', 'ir', '‏فارسی‏', 'Persian', 0),
('fb-LT', 'fb', 'lt', 'Leet Speak', 'Leet Speak', 0),
('fi-FI', 'fi', 'fi', 'Suomi', 'Finnish', 0),
('fo-FO', 'fo', 'fo', 'Føroyskt', 'Faroese', 0),
('fr-CA', 'fr', 'ca', 'Français (Canada)', 'French (Canada)', 0),
('fr-FR', 'fr', 'fr', 'Français (France)', 'French (France)', 0),
('fy-NL', 'fy', 'nl', 'Frysk', 'Frisian', 0),
('ga-IE', 'ga', 'ie', 'Gaeilge', 'Irish', 0),
('gl-ES', 'gl', 'es', 'Galego', 'Galician', 0),
('he-IL', 'he', 'il', '‏עברית‏', 'Hebrew', 0),
('hi-IN', 'hi', 'in', 'हिन्दी', 'Hindi', 0),
('hr-HR', 'hr', 'hr', 'Hrvatski', 'Croatian', 0),
('hu-HU', 'hu', 'hu', 'Magyar', 'Hungarian', 0),
('hy-AM', 'hy', 'am', 'Հայերեն', 'Armenian', 0),
('id-ID', 'id', 'id', 'Bahasa Indonesia', 'Indonesian', 0),
('is-IS', 'is', 'is', 'Íslenska', 'Icelandic', 0),
('it-IT', 'it', 'it', 'Italiano', 'Italian', 0),
('ja-JP', 'ja', 'jp', '日本語', 'Japanese', 0),
('ka-GE', 'ka', 'ge', 'ქართული', 'Georgian', 0),
('km-KH', 'km', 'kh', 'ភាសាខ្មែរ', 'Khmer', 0),
('ko-KR', 'ko', 'kr', '한국어', 'Korean', 0),
('ku-TR', 'ku', 'tr', 'Kurdî', 'Kurdish', 0),
('la-VA', 'la', 'va', 'lingua latina', 'Latin', 0),
('lt-LT', 'lt', 'lt', 'Lietuvių', 'Lithuanian', 0),
('lv-LV', 'lv', 'lv', 'Latviešu', 'Latvian', 0),
('mk-MK', 'mk', 'mk', 'Македонски', 'Macedonian', 0),
('ml-IN', 'ml', 'in', 'മലയാളം', 'Malayalam', 0),
('ms-MY', 'ms', 'my', 'Bahasa Melayu', 'Malay', 0),
('nb-NO', 'nb', 'no', 'Norsk (bokmål)', 'Norwegian (bokmal)', 0),
('ne-NP', 'ne', 'np', 'नेपाली', 'Nepali', 0),
('nl-NL', 'nl', 'nl', 'Nederlands', 'Dutch', 0),
('nn-NO', 'nn', 'no', 'Norsk (nynorsk)', 'Norwegian (nynorsk)', 0),
('pa-IN', 'pa', 'in', 'ਪੰਜਾਬੀ', 'Punjabi', 0),
('pl-PL', 'pl', 'pl', 'Polski', 'Polish', 0),
('ps-AF', 'ps', 'af', '‏پښتو‏', 'Pashto', 0),
('pt-BR', 'pt', 'br', 'Português (Brasil)', 'Portuguese (Brazil)', 0),
('pt-PT', 'pt', 'pt', 'Português (Portugal)', 'Portuguese (Portugal)', 0),
('ro-RO', 'ro', 'ro', 'Română', 'Romanian', 0),
('ru-RU', 'ru', 'ru', 'Русский', 'Russian', 0),
('sk-SK', 'sk', 'sk', 'Slovenčina', 'Slovak', 0),
('sl-SI', 'sl', 'si', 'Slovenščina', 'Slovenian', 0),
('sq-AL', 'sq', 'al', 'Shqip', 'Albanian', 0),
('sr-RS', 'sr', 'rs', 'Српски', 'Serbian', 0),
('sv-SE', 'sv', 'se', 'Svenska', 'Swedish', 0),
('sw-KE', 'sw', 'ke', 'Kiswahili', 'Swahili', 0),
('ta-IN', 'ta', 'in', 'தமிழ்', 'Tamil', 0),
('te-IN', 'te', 'in', 'తెలుగు', 'Telugu', 0),
('th-TH', 'th', 'th', 'ภาษาไทย', 'Thai', 0),
('tl-PH', 'tl', 'ph', 'Filipino', 'Filipino', 0),
('tr-TR', 'tr', 'tr', 'Türkçe', 'Turkish', 0),
('uk-UA', 'uk', 'ua', 'Українська', 'Ukrainian', 0),
('vi-VN', 'vi', 'vn', 'Tiếng Việt', 'Vietnamese', 1),
('xx-XX', 'xx', 'xx', 'Fejlesztő', 'Developer', 0),
('zh-CN', 'zh', 'cn', '中文(简体)', 'Simplified Chinese (China)', 0),
('zh-HK', 'zh', 'hk', '中文(香港)', 'Traditional Chinese (Hong Kong)', 0),
('zh-TW', 'zh', 'tw', '中文(台灣)', 'Traditional Chinese (Taiwan)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `language_source`
--

CREATE TABLE `language_source` (
  `id` int(11) NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_source`
--

INSERT INTO `language_source` (`id`, `category`, `message`) VALUES
(1, 'app', 'Dashboard'),
(3, 'app', 'Systems'),
(4, 'app', 'User'),
(5, 'app', 'Settings'),
(6, 'app', 'Logout'),
(7, 'app', 'Actions'),
(8, 'app', 'Invalid request'),
(9, 'app', 'The requested page does not exist.'),
(10, 'app', 'On'),
(11, 'app', 'Off'),
(12, 'app', 'Not set'),
(13, 'app', 'Data is already expired'),
(14, 'yii2mod.rbac', 'Invalid rule \"{value}\"'),
(15, 'yii2mod.rbac', 'Rule \"{value}\" does not exists'),
(16, 'yii2mod.rbac', 'Name'),
(17, 'yii2mod.rbac', 'Type'),
(18, 'yii2mod.rbac', 'Description'),
(19, 'yii2mod.rbac', 'Rule Name'),
(20, 'yii2mod.rbac', 'Data'),
(21, 'yii2mod.rbac', 'Unknown class \'{class}\''),
(22, 'yii2mod.rbac', '\'{class}\' must extend from \'yii\\rbac\\Rule\' or its child class'),
(23, 'yii2mod.rbac', 'Class Name'),
(24, 'yii2mod.rbac', 'Rule'),
(25, 'yii2mod.rbac', 'Rule has been saved.'),
(26, 'yii2mod.rbac', 'Rule has been deleted.'),
(27, 'yii2mod.rbac', 'The requested page does not exist.'),
(28, 'yii2mod.rbac', 'Routes'),
(29, 'yii2mod.rbac', 'Refresh'),
(30, 'yii2mod.rbac', 'Assignments'),
(31, 'yii2mod.rbac', 'Assignment : {0}'),
(32, 'yii2mod.rbac', 'Update Rule : {0}'),
(33, 'yii2mod.rbac', 'Rules'),
(34, 'yii2mod.rbac', 'Update'),
(35, 'yii2mod.rbac', 'Create Rule'),
(36, 'yii2mod.rbac', 'Action'),
(37, 'yii2mod.rbac', 'Rule : {0}'),
(38, 'yii2mod.rbac', 'Delete'),
(39, 'yii2mod.rbac', 'Are you sure to delete this item?'),
(40, 'yii2mod.rbac', 'Create'),
(41, 'yii2mod.rbac', 'Roles'),
(42, 'yii2mod.rbac', 'Permissions'),
(43, 'yii2mod.rbac', 'Update '),
(44, 'yii2mod.rbac', 'Create '),
(45, 'yii2mod.rbac', 'Select Rule'),
(46, 'yii2mod.rbac', 'Search for available'),
(47, 'yii2mod.rbac', 'Assign'),
(48, 'yii2mod.rbac', 'Remove'),
(49, 'yii2mod.rbac', 'Search for assigned'),
(50, 'yii2mod.rbac', 'Item has been saved.'),
(51, 'yii2mod.rbac', 'Item has been removed.'),
(52, 'yii2mod.settings', 'ID'),
(53, 'yii2mod.settings', 'Type'),
(54, 'yii2mod.settings', 'Section'),
(55, 'yii2mod.settings', 'Key'),
(56, 'yii2mod.settings', 'Value'),
(57, 'yii2mod.settings', 'Status'),
(58, 'yii2mod.settings', 'Description'),
(59, 'yii2mod.settings', 'Created Date'),
(60, 'yii2mod.settings', 'Updated Date'),
(61, 'yii2mod.settings', 'Setting has been created.'),
(62, 'yii2mod.settings', 'Setting has been updated.'),
(63, 'yii2mod.settings', 'Setting has been deleted.'),
(64, 'yii2mod.settings', 'The requested page does not exist.'),
(65, 'yii2mod.settings', 'Update Setting: {0} -> {1}'),
(66, 'yii2mod.settings', 'Settings'),
(67, 'yii2mod.settings', 'Update Setting'),
(68, 'yii2mod.settings', 'Create Setting'),
(69, 'yii2mod.settings', 'Select Type'),
(70, 'yii2mod.settings', 'Select Section'),
(71, 'yii2mod.settings', 'Select Status'),
(72, 'yii2mod.settings', 'Actions'),
(73, 'yii2mod.settings', 'Create'),
(74, 'yii2mod.settings', 'Update'),
(75, 'yii2mod.settings', 'Go Back'),
(92, 'mtrelt', 'Data can\'t be deleted because it\'s still used by another data.'),
(93, 'kvselect', 'Select all'),
(94, 'kvselect', 'Unselect all'),
(95, 'kvgrid', 'Invalid or bad editable data'),
(96, 'kvgrid', 'No valid editable model found'),
(97, 'kvgrid', 'Invalid editable index or model form name'),
(98, 'kvgrid', 'Failed to update editable data due to an unknown server error'),
(99, 'kvgrid', 'Add Book'),
(100, 'kvgrid', 'Book Listing'),
(101, 'kvgrid', 'Download Selected'),
(102, 'kvgrid', 'Library'),
(103, 'kvgrid', 'Reset Grid'),
(104, 'kvgrid', 'The page summary displays SUM for first 3 amount columns and AVG for the last.'),
(105, 'kvgrid', 'The table header sticks to the top in this demo as you scroll'),
(106, 'kvgrid', 'Resize table columns just like a spreadsheet by dragging the column edges.'),
(107, 'kvgrid', 'Active'),
(108, 'kvgrid', 'Inactive'),
(109, 'kvgrid', 'Actions'),
(110, 'kvgrid', 'item'),
(111, 'kvgrid', 'Are you sure to delete this {item}?'),
(112, 'kvgrid', 'View'),
(113, 'kvgrid', 'Update'),
(114, 'kvgrid', 'Delete'),
(115, 'kvgrid', 'Clear selection'),
(116, 'kvgrid', 'Expand'),
(117, 'kvgrid', 'Collapse'),
(118, 'kvgrid', 'Expand All'),
(119, 'kvgrid', 'Collapse All'),
(120, 'kvgrid', 'export'),
(121, 'kvgrid', 'No data found'),
(122, 'kvgrid', 'items'),
(123, 'kvgrid', 'items-few'),
(124, 'kvgrid', 'items-many'),
(125, 'kvgrid', 'Showing <b>{begin, number}-{end, number}</b> of <b>{totalCount, number}</b> {totalCount, plural, one{{item}} other{{items}}}.'),
(126, 'kvgrid', 'Total <b>{count, number}</b> {count, plural, one{{item}} other{{items}}}.'),
(127, 'kvgrid', 'Disable any popup blockers in your browser to ensure proper download.'),
(128, 'kvgrid', 'Ok to proceed?'),
(129, 'kvgrid', 'Generating the export file. Please wait...'),
(130, 'kvgrid', 'Request submitted! You may safely close this dialog after saving your downloaded file.'),
(131, 'kvgrid', 'Export'),
(132, 'kvgrid', 'Export Page Data'),
(133, 'kvgrid', 'Export All Data'),
(134, 'kvgrid', 'Grid Export'),
(135, 'kvgrid', 'Yii2 Grid Export (PDF)'),
(136, 'kvgrid', 'Generated'),
(137, 'kvgrid', '© Krajee Yii2 Extensions'),
(138, 'kvgrid', 'HTML'),
(139, 'kvgrid', 'grid-export'),
(140, 'kvgrid', 'The HTML export file will be generated for download.'),
(141, 'kvgrid', 'Hyper Text Markup Language'),
(142, 'kvgrid', 'CSV'),
(143, 'kvgrid', 'The CSV export file will be generated for download.'),
(144, 'kvgrid', 'Comma Separated Values'),
(145, 'kvgrid', 'Text'),
(146, 'kvgrid', 'The TEXT export file will be generated for download.'),
(147, 'kvgrid', 'Tab Delimited Text'),
(148, 'kvgrid', 'Excel'),
(149, 'kvgrid', 'The EXCEL export file will be generated for download.'),
(150, 'kvgrid', 'Microsoft Excel 95+'),
(151, 'kvgrid', 'ExportWorksheet'),
(152, 'kvgrid', 'PDF'),
(153, 'kvgrid', 'The PDF export file will be generated for download.'),
(154, 'kvgrid', 'Portable Document Format'),
(155, 'kvgrid', 'PDF export generated by kartik-v/yii2-grid extension'),
(156, 'kvgrid', 'krajee, grid, export, yii2-grid, pdf'),
(157, 'kvgrid', 'JSON'),
(158, 'kvgrid', 'The JSON export file will be generated for download.'),
(159, 'kvgrid', 'JavaScript Object Notation'),
(160, 'kvgrid', 'There are {totalCount} records. Are you sure you want to display them all?'),
(161, 'kvgrid', 'All'),
(162, 'kvgrid', 'Show all data'),
(163, 'kvgrid', 'Page'),
(164, 'kvgrid', 'Show first page data'),
(165, 'kvdtime', 'Select date & time'),
(166, 'kvdtime', 'Clear field'),
(167, 'kvdynagrid', 'Save / Edit Grid {title}'),
(168, 'kvdynagrid', 'Apply'),
(169, 'kvdynagrid', 'Save grid settings'),
(170, 'kvdynagrid', 'Reset'),
(171, 'kvdynagrid', 'Abort any changes and reset settings'),
(172, 'kvdynagrid', 'Trash'),
(173, 'kvdynagrid', 'Remove saved grid settings'),
(174, 'kvdynagrid', 'Personalize grid settings'),
(175, 'kvdynagrid', 'Save / edit grid {category}'),
(176, 'kvdynagrid', 'Hidden / Fixed Columns'),
(177, 'kvdynagrid', 'Visible Columns'),
(178, 'kvdynagrid', 'Page Size'),
(179, 'kvdynagrid', 'Default Filter'),
(180, 'kvdynagrid', 'Default Sort'),
(181, 'kvdynagrid', 'Grid Theme'),
(182, 'kvdynagrid', 'Filter Name'),
(183, 'kvdynagrid', 'Saved Filters'),
(184, 'kvdynagrid', 'Filter Configuration'),
(185, 'kvdynagrid', 'Sort Name'),
(186, 'kvdynagrid', 'Saved Sorts'),
(187, 'kvdynagrid', 'Sort Configuration'),
(188, 'kvdynagrid', 'descending'),
(189, 'kvdynagrid', 'ascending'),
(190, 'kvdynagrid', 'Operation disallowed! Invalid request signature detected for dynagrid settings. {params}'),
(191, 'kvdynagrid', 'Saving and applying configuration'),
(192, 'kvdynagrid', 'Trashing all personalizations'),
(193, 'kvdynagrid', 'Are you sure you want to delete the setting?'),
(194, 'kvdynagrid', 'Select...'),
(195, 'kvdynagrid', 'Set a name to save the state of your current grid {category}. You can alternatively select a saved {category} from the list below to edit or delete.'),
(196, 'kvdynagrid', 'NOTE: When editing an existing record, only the {category} name will be modified (and not the settings).'),
(197, 'kvdynagrid', 'NOTE: When editing an existing record, both the {category} name and its settings will be modified.'),
(198, 'kvdynagrid', 'Save'),
(199, 'kvdynagrid', 'Delete'),
(200, 'kvdynagrid', 'Personalize Grid Configuration'),
(201, 'kvdynagrid', 'rows per page'),
(202, 'kvdynagrid', 'Integer between {min} to {max}'),
(203, 'kvdynagrid', 'Select a theme...'),
(204, 'kvdynagrid', 'Select theme to style grid'),
(205, 'kvdynagrid', 'Select a filter...'),
(206, 'kvdynagrid', 'Set default grid filter criteria'),
(207, 'kvdynagrid', 'Select a sort...'),
(208, 'kvdynagrid', 'Set default grid sort criteria'),
(209, 'kvdynagrid', 'Configure Order and Display of Grid Columns'),
(210, 'kvdynagrid', 'grid'),
(211, 'kvdynagrid', 'sort'),
(212, 'kvdynagrid', 'filter'),
(213, 'kvenum', 'ago'),
(214, 'kvenum', 'a moment ago'),
(215, 'kvenum', '{n, plural, one{one second} other{# seconds}}'),
(216, 'kvenum', '{n, plural, one{one minute} other{# minutes}}'),
(217, 'kvenum', '{n, plural, one{one hour} other{# hours}}'),
(218, 'kvenum', '{n, plural, one{one day} other{# days}}'),
(219, 'kvenum', '{n, plural, one{one week} other{# weeks}}'),
(220, 'kvenum', '{n, plural, one{one month} other{# months}}'),
(221, 'kvenum', '{n, plural, one{one year} other{# years}}'),
(222, 'kvenum', 'minus'),
(223, 'kvenum', 'zero'),
(224, 'kvenum', 'hundred'),
(225, 'kvenum', 'one'),
(226, 'kvenum', 'two'),
(227, 'kvenum', 'three'),
(228, 'kvenum', 'four'),
(229, 'kvenum', 'five'),
(230, 'kvenum', 'six'),
(231, 'kvenum', 'seven'),
(232, 'kvenum', 'eight'),
(233, 'kvenum', 'nine'),
(234, 'kvenum', 'ten'),
(235, 'kvenum', 'eleven'),
(236, 'kvenum', 'twelve'),
(237, 'kvenum', 'thirteen'),
(238, 'kvenum', 'fourteen'),
(239, 'kvenum', 'fifteen'),
(240, 'kvenum', 'sixteen'),
(241, 'kvenum', 'seventeen'),
(242, 'kvenum', 'eighteen'),
(243, 'kvenum', 'nineteen'),
(244, 'kvenum', 'twenty'),
(245, 'kvenum', 'thirty'),
(246, 'kvenum', 'forty'),
(247, 'kvenum', 'fifty'),
(248, 'kvenum', 'sixty'),
(249, 'kvenum', 'seventy'),
(250, 'kvenum', 'eighty'),
(251, 'kvenum', 'ninety'),
(252, 'kvenum', 'January'),
(253, 'kvenum', 'February'),
(254, 'kvenum', 'March'),
(255, 'kvenum', 'April'),
(256, 'kvenum', 'May'),
(257, 'kvenum', 'June'),
(258, 'kvenum', 'July'),
(259, 'kvenum', 'August'),
(260, 'kvenum', 'September'),
(261, 'kvenum', 'October'),
(262, 'kvenum', 'November'),
(263, 'kvenum', 'December'),
(264, 'kvenum', 'Sunday'),
(265, 'kvenum', 'Monday'),
(266, 'kvenum', 'Tuesday'),
(267, 'kvenum', 'Wednesday'),
(268, 'kvenum', 'Thursday'),
(269, 'kvenum', 'Friday'),
(270, 'kvenum', 'Saturday'),
(271, 'kvenum', 'thousand'),
(272, 'kvenum', 'million'),
(273, 'kvenum', 'billion'),
(274, 'kvenum', 'trillion'),
(275, 'kvenum', 'quadrillion'),
(276, 'kvenum', 'quintillion'),
(277, 'kvenum', 'sextillion'),
(278, 'kvenum', 'septillion'),
(279, 'kvenum', 'octillion'),
(280, 'kvenum', 'nonillion'),
(281, 'kvenum', 'No'),
(282, 'kvenum', 'Yes'),
(283, 'kvenum', 'Opera'),
(284, 'kvenum', 'Google Chrome'),
(285, 'kvenum', 'Safari'),
(286, 'kvenum', 'Mozilla Firefox'),
(287, 'kvenum', 'Microsoft Internet Explorer'),
(288, 'kvenum', 'Mobile Safari'),
(289, 'kvenum', 'Maxthon'),
(290, 'kvenum', 'Mozilla Sea Monkey'),
(291, 'kvenum', 'Arora'),
(292, 'kvenum', 'Avant'),
(293, 'kvenum', 'Omniweb'),
(294, 'kvenum', 'Epiphany'),
(295, 'kvenum', 'Chromium'),
(296, 'kvenum', 'Galeon'),
(297, 'kvenum', 'Puffin'),
(298, 'kvenum', 'Mozilla Firefox Fennec'),
(299, 'kvenum', 'Apple Safari'),
(300, 'kvenum', 'Microsoft Internet Explorer Mobile'),
(301, 'kvenum', 'Konqueror'),
(302, 'kvenum', 'Amaya'),
(303, 'kvenum', 'Netscape'),
(304, 'kvenum', 'Mosaic'),
(305, 'kvenum', 'NetSurf'),
(306, 'kvenum', 'NetFront'),
(307, 'kvenum', 'Minimo'),
(308, 'kvenum', 'Blackberry'),
(309, 'kvenum', 'Other'),
(310, 'kvenum', 'Unknown'),
(311, 'kvenum', 'iOS'),
(312, 'kvenum', 'Unix'),
(313, 'kvenum', 'Android'),
(314, 'kvenum', 'Symbian'),
(315, 'kvenum', 'Maemo'),
(316, 'kvenum', 'Palm'),
(317, 'kvenum', 'Linux'),
(318, 'kvenum', 'Macintosh OSX'),
(319, 'kvenum', 'Windows'),
(320, 'kvenum', 'Phone'),
(321, 'kvenum', 'Email'),
(322, 'kvdate', 'Select date'),
(323, 'kvdate', 'Clear field'),
(324, 'kvtree', 'ID'),
(325, 'kvtree', 'Name'),
(326, 'kvtree', 'Left'),
(327, 'kvtree', 'Right'),
(328, 'kvtree', 'Depth'),
(329, 'kvtree', 'Icon'),
(330, 'kvtree', 'Icon Type'),
(331, 'kvtree', 'Active'),
(332, 'kvtree', 'Selected'),
(333, 'kvtree', 'Disabled'),
(334, 'kvtree', 'Read Only'),
(335, 'kvtree', 'Visible'),
(336, 'kvtree', 'Collapsed'),
(337, 'kvtree', 'Movable Up'),
(338, 'kvtree', 'Movable Down'),
(339, 'kvtree', 'Movable Left'),
(340, 'kvtree', 'Movable Right'),
(341, 'kvtree', 'Removable'),
(342, 'kvtree', 'Removable (with children)'),
(343, 'kvtree', 'Root'),
(344, 'kvtree', 'Clear search results'),
(345, 'kvtree', 'Search...'),
(347, 'kvtree', '(new)'),
(358, 'kvtree', 'Add new'),
(359, 'kvtree', 'Add new root'),
(360, 'kvtree', 'Delete'),
(361, 'kvtree', 'Move Up'),
(362, 'kvtree', 'Move Down'),
(363, 'kvtree', 'Move Left'),
(364, 'kvtree', 'Move Right'),
(365, 'kvtree', 'Refresh'),
(367, 'kvtree', 'Untitled'),
(368, 'kvtree', 'Default'),
(369, 'kvtree', 'This operation is not allowed.'),
(370, 'kvtree', '<h4>Operation Disallowed</h4><hr>Invalid request signature detected during tree data <b>{action}</b> action! Please refresh the page and retry.{params}'),
(381, 'kvtree', 'Reset'),
(382, 'kvtree', 'Save'),
(383, 'kvtree', 'Admin Settings'),
(384, 'kvtree', 'Select...'),
(385, 'kvcolor', 'cancel'),
(386, 'kvcolor', 'choose'),
(387, 'kvcolor', 'Clear Color Selection'),
(388, 'kvcolor', 'No Color Selected'),
(389, 'kvcolor', 'more'),
(390, 'kvcolor', 'less'),
(391, 'kvdialog', 'Ok'),
(392, 'kvdialog', 'Cancel'),
(393, 'kvdialog', 'Information'),
(394, 'kvdialog', 'Confirmation'),
(395, 'kvbase', 'It is recommended you use an upgraded browser to display the {type} control properly.'),
(396, 'fileinput', 'file preview and multiple file upload'),
(397, 'fileinput', 'multiple file upload'),
(398, 'fileinput', 'Note:'),
(399, 'fileinput', 'Your browser does not support {validation}. Try an alternative or more recent browser to access these features.'),
(400, 'kvexport', 'grid-export'),
(401, 'kvexport', 'Export data in selected format'),
(402, 'kvexport', 'Grid export generated by Krajee ExportMenu widget (yii2-export)'),
(403, 'kvexport', 'Select Columns'),
(404, 'kvexport', 'Select columns to export'),
(405, 'kvexport', 'Column'),
(406, 'kvexport', 'HTML'),
(407, 'kvexport', 'Hyper Text Markup Language'),
(408, 'kvexport', 'The HTML export file will be generated for download.'),
(409, 'kvexport', 'CSV'),
(410, 'kvexport', 'Comma Separated Values'),
(411, 'kvexport', 'The CSV export file will be generated for download.'),
(412, 'kvexport', 'Text'),
(413, 'kvexport', 'Tab Delimited Text'),
(414, 'kvexport', 'The TEXT export file will be generated for download.'),
(415, 'kvexport', 'PDF'),
(416, 'kvexport', 'Portable Document Format'),
(417, 'kvexport', 'The PDF export file will be generated for download.'),
(418, 'kvexport', 'Excel 95 +'),
(419, 'kvexport', 'Microsoft Excel 95+ (xls)'),
(420, 'kvexport', 'The EXCEL 95+ (xls) export file will be generated for download.'),
(421, 'kvexport', 'Excel 2007+'),
(422, 'kvexport', 'Microsoft Excel 2007+ (xlsx)'),
(423, 'kvexport', 'The EXCEL 2007+ (xlsx) export file will be generated for download.'),
(424, 'kvexport', 'Disable any popup blockers in your browser to ensure proper download.'),
(425, 'kvexport', 'Ok to proceed?'),
(426, 'kvexport', 'Generating the export file. Please wait...'),
(427, 'kvexport', 'Request submitted! You may safely close this dialog after saving your downloaded file.'),
(428, 'kvexport', 'Toggle All'),
(429, 'kvexport', 'Exported File'),
(430, 'kvexport', 'Download exported file'),
(431, 'model', 'ID'),
(432, 'model', 'Category'),
(433, 'model', 'Message'),
(434, 'model', 'Language'),
(435, 'model', 'Translation'),
(436, 'model', 'Language ID'),
(437, 'model', 'Country'),
(438, 'model', 'Name'),
(439, 'model', 'Name Ascii'),
(440, 'model', 'Status'),
(441, 'language', 'Translation'),
(442, 'language', 'Invalid model \"{model}\":'),
(443, 'language', 'Text not found in database! Please run project scan before translating!'),
(444, 'language', 'translations'),
(445, 'language', 'Successfully imported {fileName}'),
(446, 'language', '{type}: {new} new, {updated} updated'),
(447, 'language', 'Update {modelClass}: '),
(448, 'language', 'Languages'),
(449, 'language', 'Update'),
(450, 'language', 'Import'),
(451, 'language', 'Select all'),
(452, 'language', 'Delete selected'),
(453, 'language', 'Action'),
(454, 'language', 'Delete'),
(455, 'language', 'Export'),
(456, 'language', 'Translation into {language_id}'),
(457, 'language', 'Original'),
(458, 'language', 'Source language'),
(459, 'language', 'Source'),
(460, 'language', 'Enter \"{command}\" to search for empty translations.'),
(461, 'language', 'Save'),
(462, 'language', 'Create {modelClass}'),
(463, 'language', 'List of languages'),
(464, 'language', 'Status'),
(465, 'language', 'Statistic'),
(466, 'language', 'Translate'),
(467, 'language', 'Choosing the language of translation'),
(468, 'language', 'Text to be translated'),
(469, 'language', 'Are you sure you want to delete this item?'),
(470, 'language', 'Translation status'),
(471, 'language', 'Create'),
(472, 'language', 'Optimise database'),
(473, 'language', '{n, plural, =0{No entries} =1{One entry} other{# entries}} were removed!'),
(474, 'language', 'Scanning project'),
(475, 'language', '{n, plural, =0{No new entries} =1{One new entry} other{# new entries}} were added!'),
(476, 'language', '{n, plural, =0{No entries} =1{One entry} other{# entries}} remove!'),
(477, 'language', 'Home'),
(478, 'language', 'Language'),
(479, 'language', 'Scan'),
(480, 'language', 'Optimize'),
(481, 'language', 'Im-/Export'),
(482, 'language', 'Toggle translate'),
(515, 'array', 'Inactive'),
(516, 'array', 'Active'),
(517, 'array', 'Beta'),
(518, 'javascript', 'Translation Language: {name}'),
(519, 'javascript', 'Save'),
(520, 'javascript', 'Close'),
(521, 'javascript', 'Are you sure you want to delete these items?'),
(522, 'javascript', 'Are you sure you want to delete this item?'),
(523, 'app', 'Profile Account'),
(524, 'app', 'Profile Info'),
(525, 'app', 'Change Avatar'),
(526, 'app', 'Change Password'),
(527, 'app', 'ID'),
(528, 'app', 'Username'),
(529, 'app', 'Auth Key'),
(530, 'app', 'Password Hash'),
(531, 'app', 'Password Reset Token'),
(532, 'app', 'Email'),
(533, 'app', 'Full Name'),
(534, 'app', 'Job'),
(535, 'app', 'Bio'),
(536, 'app', 'Company'),
(537, 'app', 'Tax Number'),
(538, 'app', 'Address'),
(539, 'app', 'Avatar'),
(540, 'app', 'Phone'),
(541, 'app', 'Birth Date'),
(542, 'app', 'Facebook Url'),
(543, 'app', 'Status'),
(544, 'app', 'Account Settings'),
(545, 'app', 'About'),
(546, 'app', 'Incorrect password.'),
(547, 'app', 'Confirm new password error.'),
(548, 'app', 'Password'),
(549, 'app', 'New Password'),
(550, 'app', 'Confirm Password'),
(551, 'app', 'RememberMe'),
(552, 'app', 'Cancel'),
(553, 'app', 'Choose Birth Date'),
(554, 'app', 'Change Account Infomation'),
(555, 'app', 'Update {modelClass}: '),
(557, 'app', 'Update'),
(558, 'app', 'Author'),
(559, 'app', 'Term Relationships'),
(561, 'app', 'Advance Search'),
(562, 'app', 'Save As New {modelClass}: '),
(563, 'app', 'Save As New'),
(564, 'app', 'Choose User'),
(565, 'app', 'Search'),
(566, 'app', 'Reset'),
(567, 'app', 'Delete'),
(568, 'app', 'Add Term Relationships'),
(569, 'app', 'PDF'),
(570, 'app', 'Will open the generated PDF file in a new window'),
(571, 'app', 'Are you sure you want to delete this item?'),
(573, 'app', 'Create'),
(574, 'app', 'Name'),
(575, 'app', 'Slug'),
(576, 'app', 'Description'),
(577, 'app', 'Feature Img'),
(578, 'app', 'Term Parent'),
(579, 'app', 'Term Type'),
(580, 'app', 'Language'),
(581, 'app', 'Assign With'),
(582, 'app', 'Term ID'),
(583, 'app', 'Obj ID'),
(584, 'app', 'Obj Type'),
(588, 'app', 'Choose Language'),
(608, 'app', 'Site Configuration'),
(609, 'app', 'Turn on'),
(610, 'app', 'Turn off'),
(612, 'app', 'Save'),
(613, 'app', 'Primary Language'),
(614, 'app', 'Enable Multiple Language'),
(615, 'app', 'Other languages'),
(616, 'app', 'Post'),
(618, 'app', 'Title'),
(619, 'app', 'Content'),
(620, 'app', 'Comment Status'),
(621, 'app', 'Post Parent'),
(622, 'app', 'Post Type'),
(623, 'app', 'Draft'),
(624, 'app', 'Public'),
(625, 'app', 'Pending'),
(626, 'app', 'Enable'),
(627, 'app', 'Disable'),
(628, 'app', 'Created At'),
(629, 'app', 'Updated At'),
(630, 'app', 'Full'),
(631, 'app', 'Export All Data'),
(632, 'app', 'Login Page'),
(633, 'app', 'Welcome to your dashboard. Please login to countinue'),
(635, 'app', 'Login'),
(637, 'app', 'Term'),
(638, 'app', 'Create User'),
(639, 'app', 'Add Post'),
(640, 'app', 'Add Term'),
(641, 'app', 'Active'),
(643, 'app', 'All User'),
(644, 'app', 'This username has already been taken.'),
(645, 'app', 'This email has already been taken.'),
(646, 'app', 'Roles'),
(651, 'app', 'App Name'),
(652, 'app', 'App Description'),
(653, 'app', 'Favicon'),
(654, 'app', 'Choose languages'),
(655, 'app', 'Site Identity'),
(656, 'app', 'Create New'),
(658, 'app', 'post'),
(660, 'app', 'category'),
(661, 'app', 'tag'),
(662, 'app', 'page'),
(664, 'app', 'portfolio'),
(665, 'app', 'Comment'),
(666, 'app', 'Create Comment'),
(667, 'app', 'Post Comment'),
(668, 'app', 'Portfolio Comment'),
(669, 'app', 'Author Name'),
(670, 'app', 'Author Email'),
(671, 'app', 'Author Url'),
(672, 'app', 'Author Ip'),
(673, 'app', 'Type'),
(674, 'app', 'Parent'),
(675, 'app', 'Block'),
(676, 'app', 'Create Block'),
(677, 'app', 'Template'),
(678, 'app', 'Blocks'),
(679, 'app', 'Links'),
(680, 'app', 'Home Page'),
(681, 'app', 'New Post'),
(682, 'app', 'New Page'),
(683, 'app', 'New Portfolio'),
(684, 'app', 'Total Posts'),
(685, 'app', 'Total Portfolios'),
(686, 'app', 'Total Comments'),
(687, 'app', 'Total Users'),
(688, 'app', 'Congratulations!'),
(689, 'app', 'Your setups has been saved'),
(690, 'app', 'An error has occurred!'),
(691, 'app', 'Your setups has not been saved'),
(692, 'app', 'Your content has been saved'),
(693, 'app', 'Your content has not been saved'),
(694, 'app', 'Your content has been removed'),
(695, 'app', 'Your content has not been removed'),
(696, 'app', 'Hi!'),
(697, 'app', 'Title Not Set!'),
(698, 'app', 'Message Not Set!'),
(699, 'app', 'Welcome to your dashboard'),
(700, 'app', 'post-comment'),
(701, 'app', 'portfolio-comment'),
(702, 'app', 'Reply {modelClass}: '),
(703, 'app', 'Reply'),
(704, 'app', 'Subscribes'),
(705, 'app', 'Subscribe'),
(706, 'app', 'Create Subscribe'),
(707, 'app', 'Subscribers'),
(708, 'app', 'Host'),
(709, 'app', 'Port'),
(710, 'app', 'Encryption'),
(711, 'app', 'Admin Email'),
(712, 'app', 'Support Email'),
(713, 'app', 'Mailer'),
(714, 'app', 'Contact'),
(715, 'app', 'Create Contact'),
(716, 'app', 'Choose Author Birth Date'),
(717, 'app', 'Subject'),
(718, 'app', 'Author Phone'),
(719, 'app', 'Author Birth Date'),
(720, 'app', 'Author Stress Address'),
(721, 'app', 'Author City'),
(722, 'app', 'Author Zip Code'),
(723, 'app', 'Google Analytics'),
(724, 'app', 'Tracking Code'),
(725, 'app', 'Debug Status'),
(726, 'app', 'Dev Mode Status'),
(727, 'app', 'Dev Configuration'),
(728, 'app', 'General'),
(729, 'app', 'False'),
(730, 'app', 'True'),
(731, 'app', 'Code'),
(732, 'app', 'Custom Script'),
(733, 'app', 'Template Configuration'),
(734, 'app', 'Custom CSS'),
(735, 'app', 'Product'),
(737, 'app', 'SEO Configuration'),
(738, 'app', 'Allow All'),
(739, 'app', 'Disallow All'),
(740, 'app', 'Disabled'),
(741, 'app', 'Enabled'),
(742, 'app', 'E-Commerce Status'),
(743, 'app', 'E-Commerce'),
(745, 'app', 'Advance'),
(746, 'app', 'Plugin'),
(747, 'app', 'SEO'),
(748, 'app', 'Keyword Research'),
(749, 'app', 'AdWords External'),
(750, 'app', 'Google Trends'),
(751, 'app', 'SEO Book'),
(752, 'app', 'Google Webmasters'),
(753, 'app', 'Tools'),
(754, 'app', 'Support'),
(755, 'app', 'Change log'),
(756, 'app', 'Dev'),
(757, 'app', 'Sku'),
(758, 'app', 'Quantity'),
(759, 'app', 'Rating Status'),
(760, 'app', 'Promotional Price'),
(761, 'app', 'Price'),
(762, 'app', 'Gallery'),
(763, 'app', 'Product Parent'),
(764, 'app', 'Product Type'),
(765, 'app', 'Keyword'),
(766, 'app', 'Social Image'),
(767, 'app', 'Social Title'),
(768, 'app', 'Social Description'),
(769, 'app', 'Is Index'),
(770, 'app', 'Is Follow'),
(771, 'app', 'Unit'),
(772, 'app', 'Order'),
(773, 'app', 'Order Item'),
(774, 'app', 'Choose Product'),
(775, 'app', 'Add Order Item'),
(776, 'app', 'Create Order'),
(777, 'app', 'OrderItem'),
(778, 'app', 'Plugin Configuration'),
(779, 'app', 'Orders'),
(780, 'app', 'Key'),
(781, 'app', 'Payment Method'),
(782, 'app', 'Note'),
(783, 'app', 'Include Vat'),
(784, 'app', 'Customer Username'),
(785, 'app', 'Customer Phone'),
(786, 'app', 'Customer Name'),
(787, 'app', 'Customer Email'),
(788, 'app', 'Customer Address'),
(789, 'app', 'Customer Company'),
(790, 'app', 'Customer Area'),
(791, 'app', 'Customer Tax Number'),
(792, 'app', 'Ref By'),
(793, 'app', 'Product Price'),
(794, 'app', 'Coupon'),
(795, 'kvtree', 'Child Allowed'),
(797, 'app', 'Thumbnail size width'),
(798, 'app', 'Thumbnail size height'),
(799, 'app', 'Medium size width'),
(800, 'app', 'Medium size height'),
(801, 'app', 'Large size width'),
(802, 'app', 'Large size height'),
(803, 'app', 'Quality'),
(804, 'app', 'Media'),
(805, 'app', 'Create Media'),
(806, 'app', 'Path'),
(807, 'app', 'File Size'),
(808, 'app', 'Caption'),
(809, 'app', 'Alt'),
(810, 'app', 'Dimensions'),
(811, 'app', 'Minify CSS'),
(812, 'app', 'Minify JS'),
(813, 'app', 'Minify HTML'),
(814, 'app', 'Concatenate CSS'),
(815, 'app', 'Concatenate JS'),
(816, 'app', 'Optimize'),
(817, 'app', 'Image'),
(818, 'app', 'Get Path'),
(819, 'app', 'You are not allowed to perform this action.'),
(820, 'app', 'Auth Item'),
(821, 'app', 'Rule Name'),
(822, 'app', 'Auth Assignment'),
(823, 'app', 'Auth Item Child'),
(824, 'app', 'Create Auth Item'),
(825, 'app', 'AuthItem'),
(826, 'app', 'Add Auth Assignment'),
(827, 'app', 'Choose Auth rule'),
(828, 'app', 'Choose Auth item'),
(829, 'app', 'Add Auth Item Child'),
(830, 'app', 'AuthAssignment'),
(831, 'app', 'AuthItemChild'),
(832, 'app', 'Add Product'),
(833, 'app', 'Add Comment'),
(834, 'app', 'Add Block'),
(835, 'app', 'Search ...'),
(836, 'app', 'Data'),
(837, 'app', 'Item Name'),
(838, 'app', 'User ID'),
(839, 'app', 'Child'),
(840, 'app', 'Home'),
(841, 'app', 'Posted by:'),
(842, 'app', 'Url'),
(843, 'app', 'Content Type In Site Map'),
(844, 'app', 'Site Map'),
(845, 'app', 'Choose Content Type'),
(846, 'app', 'Interactive'),
(847, 'app', 'View'),
(848, 'app', 'Flush Cache'),
(849, 'app', 'Create Post Type'),
(850, 'app', 'PostType'),
(851, 'app', 'Cart'),
(852, 'app', 'Choose Order'),
(853, 'app', 'Add Cart'),
(854, 'app', 'Create Product Type'),
(855, 'app', 'ProductType'),
(857, 'app', 'Term Of Product Type'),
(858, 'app', 'TermOfProductType'),
(859, 'app', 'Choose Product type'),
(861, 'app', 'Choose Currency Unit'),
(862, 'app', 'Input Type'),
(863, 'app', 'Currency Unit'),
(864, 'app', 'Create Term Type'),
(865, 'app', 'TermType'),
(866, 'app', 'Content Type'),
(867, 'app', 'Term of'),
(868, 'app', 'Create Term of'),
(869, 'app', 'Term Of'),
(870, 'app', 'Term Of Post Type'),
(871, 'app', 'Create Term Of Post Type'),
(872, 'app', 'TermOfPostType'),
(873, 'app', 'Choose Post type'),
(874, 'app', 'This name has already been set.'),
(875, 'app', 'Choose Term Type'),
(876, 'app', 'Choose'),
(877, 'app', 'Create Multiple Media'),
(878, 'app', 'Save As New Language {modelClass}: '),
(879, 'app', 'Save As New Language'),
(880, 'app', 'All'),
(881, 'app', 'Product Type Meta'),
(882, 'app', 'Meta of product type: '),
(883, 'app', 'ProductTypeMeta'),
(884, 'app', 'Create meta for product type:'),
(885, 'app', 'Choose Input Type'),
(886, 'app', 'Meta Of'),
(887, 'kvtree', 'node'),
(888, 'kvtree', 'nodes'),
(889, 'kvtree', 'Cannot create {node}. Parent node is not saved or is invalid.'),
(890, 'kvtree', 'Are you sure you want to remove this {node}?'),
(891, 'kvtree', 'The {node} was removed successfully.'),
(892, 'kvtree', 'Error while removing the {node}. Please try again later.'),
(893, 'kvtree', 'Cannot move this {node} as the {node} details are not saved yet.'),
(894, 'kvtree', 'Already at top-most {node} in the hierarchy.'),
(895, 'kvtree', 'Already at bottom-most {node} in the hierarchy.'),
(896, 'kvtree', 'Already at left-most {node} in the hierarchy.'),
(897, 'kvtree', 'Already at right-most {node} in the hierarchy.'),
(898, 'kvtree', 'The untitled {node} was removed.'),
(899, 'kvtree', 'Select a {node} by clicking on one of the tree items.'),
(900, 'kvtree', 'You cannot add children under this {node}.'),
(901, 'kvtree', 'No valid {nodes} are available for display. Use toolbar buttons to add {nodes}.'),
(902, 'kvtree', 'The {node} was successfully created.'),
(903, 'kvtree', 'Error while creating the {node}. Please try again later.'),
(904, 'kvtree', 'Saved the {node} details successfully.'),
(905, 'kvtree', 'Error while saving the {node}. Please try again later.'),
(906, 'kvtree', '{node} # {id} - \'{name}\': {error}'),
(907, 'kvtree', 'Error while viewing the {node}. Please try again later.'),
(908, 'kvtree', 'Error removing the {node}. Please try again later.'),
(909, 'kvtree', 'Error while moving the {node}. Please try again later.'),
(910, 'kvtree', 'The selected {node} cannot be moved.'),
(911, 'kvtree', 'Cannot move root level {nodes} before or after other root level {nodes}.'),
(912, 'kvtree', 'The {node} was moved successfully.'),
(913, 'app', 'Page'),
(914, 'app', 'comment'),
(915, 'app', 'Product category'),
(916, 'app', 'Category'),
(917, 'app', 'Tag'),
(918, 'app', 'Product tag'),
(919, 'app', 'Layout'),
(920, 'app', 'Browser'),
(921, 'app', 'Color'),
(922, 'app', 'Retina ready'),
(923, 'app', 'Value'),
(924, 'app', 'Categories'),
(925, 'app', 'Tags'),
(926, 'app', 'Read More'),
(927, 'app', 'by'),
(928, 'app', 'By'),
(929, 'app', 'Share this article'),
(930, 'app', 'Leave A Reply'),
(931, 'app', 'Submit Now'),
(932, 'app', 'Templates'),
(933, 'app', 'Search your templates'),
(934, 'app', 'website templates from our creative community'),
(935, 'app', 'Low to High'),
(936, 'app', 'High to Low'),
(937, 'app', 'Items per page'),
(938, 'app', 'New'),
(939, 'app', 'Products'),
(940, 'app', 'Popular'),
(941, 'app', 'New Products'),
(942, 'app', 'Popular Products'),
(943, 'app', 'Use It'),
(944, 'app', 'More Info'),
(945, 'app', 'Live Demo'),
(946, 'app', 'Item Details'),
(947, 'app', 'Live Preview'),
(948, 'app', 'Add To Favorites'),
(949, 'app', 'Purchase Now'),
(950, 'app', 'Add To Cart'),
(951, 'app', 'Product Information'),
(952, 'app', 'Product Author'),
(953, 'app', 'Comments'),
(954, 'app', 'Reviews'),
(955, 'app', 'Item FAQ'),
(956, 'app', 'Favorites'),
(957, 'app', 'Released'),
(958, 'app', 'Updated'),
(959, 'app', 'Version'),
(960, 'app', 'Leave a comment'),
(961, 'app', 'Filter Products'),
(962, 'app', 'Ip'),
(963, 'app', 'Signup'),
(964, 'app', 'Weekly Featured Products'),
(965, 'app', 'Newest Release Products'),
(966, 'app', 'Filter by:'),
(967, 'app', 'Trending items'),
(968, 'app', 'Low price'),
(969, 'app', 'High price'),
(970, 'app', 'Best seller'),
(971, 'app', 'All New Products'),
(972, 'app', 'Can\'t create comment'),
(973, 'app', 'Write your comment...'),
(974, 'app', 'Can\'t create favorite'),
(975, 'app', 'Can\'t delete favorite'),
(976, 'app', 'Welcome Back'),
(977, 'app', 'You can sign in with your username'),
(978, 'app', 'Don\'t have an'),
(979, 'app', 'account'),
(980, 'app', 'Login Now'),
(981, 'app', 'Per Page ...'),
(982, 'app', 'Select ...'),
(983, 'app', 'Submit'),
(984, 'app', 'Items Per Page'),
(985, 'app', 'Unlimited'),
(986, 'app', 'Out of stock'),
(987, 'app', 'Are you want to do this?'),
(988, 'app', 'Bulk Actions ...'),
(989, 'app', 'Apply'),
(990, 'app', 'Post comment'),
(991, 'app', 'Product comment'),
(992, 'app', 'Portfolio comment'),
(993, 'app', 'App Logo'),
(994, 'app', 'Coming soon status'),
(995, 'app', 'Coming soon time release'),
(996, 'app', 'Site Status'),
(997, 'app', 'Get Ready!'),
(998, 'app', 'Something Awesome is Coming Soon!'),
(999, 'app', 'This email was sent to: '),
(1000, 'app', 'Don\'t like these emails?'),
(1001, 'app', 'unsubscribe'),
(1002, 'app', 'Copyright'),
(1003, 'app', 'Powered by'),
(1004, 'app', 'Forgot your password?'),
(1005, 'app', 'It\'s OK! Click on the button below to set a new password for your account.'),
(1006, 'app', 'If you didn\'t ask to reset your password, simply ignore this email.'),
(1007, 'app', 'Yours'),
(1008, 'app', 'Incorrect username or password.'),
(1009, 'app', 'If you forgot your password you can'),
(1010, 'app', 'Request password reset'),
(1011, 'app', 'Go back to '),
(1012, 'app', 'Send'),
(1013, 'app', 'Reset password'),
(1014, 'app', 'Mail Transport'),
(1015, 'app', 'Create Mail Transport'),
(1016, 'app', 'MailTransport'),
(1017, 'app', 'Signature'),
(1018, 'app', 'Section'),
(1019, 'app', 'Email Notification on when user login'),
(1020, 'app', 'reset it'),
(1021, 'app', 'Please fill out your email. A link to reset password will be sent there.'),
(1022, 'app', 'Please choose your new password:'),
(1023, 'app', 'login'),
(1024, 'app', 'Created By'),
(1025, 'app', 'Customer ID'),
(1026, 'app', 'First Name'),
(1027, 'app', 'Last Name'),
(1028, 'app', 'Website'),
(1029, 'app', 'Vat Number'),
(1030, 'app', 'Country'),
(1031, 'app', 'City'),
(1032, 'app', 'State'),
(1033, 'app', 'Zip Code'),
(1034, 'app', 'Currency'),
(1035, 'app', 'Customer'),
(1036, 'app', 'Customer Billing Address'),
(1037, 'app', 'Customer Note'),
(1038, 'app', 'Customer Reminders'),
(1039, 'app', 'Customer Shipping Address'),
(1040, 'app', 'Create Customer'),
(1041, 'app', 'Add Customer Billing Address'),
(1042, 'app', 'Add Customer Note'),
(1043, 'app', 'Add Customer Reminders'),
(1044, 'app', 'Add Customer Shipping Address'),
(1045, 'app', 'Select language. Type a few words to show hints'),
(1046, 'app', 'Select country. Type a few words to show hints'),
(1047, 'app', 'Product Unit'),
(1048, 'app', 'Product Unit Equivalent'),
(1049, 'app', 'Create Product Unit'),
(1050, 'app', 'ProductUnit'),
(1051, 'app', 'Choose Product unit'),
(1052, 'app', 'Add Product Unit Equivalent'),
(1053, 'app', 'Product unit name'),
(1054, 'app', 'Product Unit 1'),
(1055, 'app', 'Product Unit 2'),
(1056, 'app', 'Create Product Unit Equivalent'),
(1057, 'app', 'ProductUnitEquivalent'),
(1058, 'app', 'Select product unit'),
(1059, 'app', 'Input value'),
(1060, 'app', 'Product Unit 1 Value'),
(1061, 'app', 'Product Unit 2 Value'),
(1062, 'app', 'Title should not exceed 255 characters'),
(1063, 'app', 'Content is King'),
(1064, 'app', 'Feature Img, submit your img'),
(1065, 'app', 'The public status, whether the article is displayed on the homepage or not'),
(1066, 'app', 'The comment status, whether the article is enable or disable comment'),
(1067, 'app', 'Choose author for this article'),
(1068, 'app', 'Choose parent article for this article'),
(1069, 'app', 'Choose assign articles'),
(1070, 'app', 'Block\'s id, Each block has a unique id, data type integer'),
(1071, 'app', 'Block\'s name, max length is 255 character'),
(1072, 'app', 'Block\'s content'),
(1073, 'app', 'Block\'s author, select author for block'),
(1074, 'app', 'Block\'s language, select language for block'),
(1075, 'app', 'Block\'s assign with other block different language'),
(1076, 'app', 'Empty'),
(1077, 'kvgrid', 'Krajee Solutions'),
(1078, 'kvgrid', 'Krajee Yii2 Grid Export Extension'),
(1079, 'app', 'Gender'),
(1080, 'app', 'Relationship Status'),
(1081, 'app', 'Date Join'),
(1082, 'app', 'Date Left'),
(1083, 'app', 'Employee'),
(1084, 'app', 'Create Employee'),
(1085, 'app', 'Choose Date Join'),
(1086, 'app', 'Choose Date Left'),
(1087, 'app', 'Full time'),
(1088, 'app', 'Part time'),
(1089, 'app', 'Male'),
(1090, 'app', 'female'),
(1091, 'app', 'Other'),
(1092, 'app', 'Single'),
(1093, 'app', 'Married'),
(1094, 'app', 'Debt'),
(1095, 'app', 'Supplier'),
(1096, 'app', 'Create Supplier'),
(1097, 'app', 'Enterprise'),
(1098, 'app', 'Personal'),
(1099, 'app', 'Warehouse'),
(1100, 'app', 'Create Warehouse'),
(1101, 'app', 'Longitude'),
(1102, 'app', 'Latitude'),
(1103, 'app', 'Warehouse ID'),
(1104, 'app', 'Employee ID'),
(1105, 'app', 'Supplier ID'),
(1106, 'app', 'Date'),
(1107, 'app', 'Is Locked'),
(1108, 'app', 'Warehouse Voucher'),
(1109, 'app', 'Create Warehouse Voucher'),
(1110, 'app', 'WarehouseVoucher'),
(1111, 'app', 'Choose Warehouse'),
(1112, 'app', 'Choose Employee'),
(1113, 'app', 'Choose Supplier'),
(1114, 'app', 'Choose Date'),
(1115, 'app', 'Attachments'),
(1116, 'app', 'Product Unit Price'),
(1117, 'app', 'Warehouse Voucher Items'),
(1118, 'app', 'Create Warehouse Voucher Items'),
(1119, 'app', 'WarehouseVoucherItems'),
(1120, 'app', 'Choose Warehouse voucher'),
(1121, 'app', 'Product unit'),
(1122, 'app', 'Product unit price'),
(1123, 'app', 'Currency unit'),
(1124, 'app', 'Add Warehouse Voucher Items'),
(1125, 'app', 'Warehouse Product'),
(1126, 'app', 'Supplier Total Price'),
(1127, 'app', 'Total Price'),
(1128, 'app', 'Create Warehouse Product'),
(1129, 'app', 'WarehouseProduct'),
(1130, 'app', 'Choose Warehouse product'),
(1131, 'app', 'Locked'),
(1132, 'app', 'Is not Locked'),
(1133, 'app', 'Warehouse product'),
(1134, 'app', 'Choose currency unit'),
(1135, 'app', 'Supplier total price'),
(1136, 'app', 'Yes'),
(1137, 'app', 'No'),
(1138, 'app', 'Input'),
(1139, 'app', 'Output'),
(1140, 'app', 'Is Total Price Is Correct?'),
(1141, 'app', 'Correct'),
(1142, 'app', 'Wrong'),
(1143, 'app', 'Supplier Quantity'),
(1144, 'app', 'Is Total Price Correct?'),
(1145, 'app', 'Not calculated'),
(1146, 'app', 'Is Quantity Correct?'),
(1147, 'app', 'In put'),
(1148, 'app', 'Out put'),
(1149, 'app', 'In Put'),
(1150, 'app', 'Out Put'),
(1151, 'app', 'Paid'),
(1152, 'app', 'Unpaid'),
(1153, 'app', 'Total'),
(1154, 'app', 'Difference Value'),
(1155, 'app', 'Un locked'),
(1156, 'app', 'Smallest Unit'),
(1157, 'kvenum', 'a moment'),
(1158, 'kvexport', 'Key'),
(1159, 'kvexport', 'Value'),
(1160, 'kvexport', 'Input error'),
(1161, 'kvexport', 'Value is not in list.'),
(1162, 'kvexport', 'Pick from list'),
(1163, 'kvexport', 'Please pick a value from the drop-down list.'),
(1164, 'app', 'Real Value'),
(1165, 'app', 'Discount Value'),
(1166, 'app', 'Choose Customer for this order'),
(1167, 'app', 'Choose Ref User for this order'),
(1168, 'app', 'Success'),
(1169, 'app', 'Cash'),
(1170, 'app', 'Online banking'),
(1171, 'app', 'My Orders'),
(1172, 'app', 'Processing'),
(1173, 'app', 'Transport'),
(1174, 'app', 'Delivery Address'),
(1175, 'app', 'Fruit'),
(1176, 'app', 'Total Order'),
(1177, 'app', 'Total Order Price'),
(1178, 'app', 'Total Order Discount'),
(1179, 'app', 'Total Pending Order Price'),
(1180, 'app', 'To Email'),
(1181, 'app', 'Mail Transport Id'),
(1182, 'app', 'Test Mail Transport'),
(1183, 'app', 'Security Settings');

-- --------------------------------------------------------

--
-- Table structure for table `language_translate`
--

CREATE TABLE `language_translate` (
  `id` int(11) NOT NULL,
  `language` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `translation` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_translate`
--

INSERT INTO `language_translate` (`id`, `language`, `translation`) VALUES
(1, 'vi-VN', 'Bảng điều khiển'),
(3, 'vi-VN', 'Hệ thống'),
(4, 'vi-VN', 'Người dùng'),
(5, 'vi-VN', 'Cài đặt'),
(6, 'vi-VN', 'Đăng xuất'),
(7, 'vi-VN', 'Hành động'),
(8, 'vi-VN', 'Yêu cầu không hợp lệ'),
(9, 'vi-VN', 'Trang không tồn tại.'),
(10, 'vi-VN', 'Bật'),
(11, 'vi-VN', 'Tắt'),
(12, 'vi-VN', 'Không thiết lập'),
(13, 'vi-VN', 'Dữ liệu đã hết hạn'),
(16, 'vi-VN', 'Tên'),
(17, 'vi-VN', 'Loại'),
(18, 'vi-VN', 'Mô tả'),
(34, 'vi-VN', 'Cập nhập'),
(35, 'vi-VN', 'Tạo Rule'),
(36, 'vi-VN', 'Hành động'),
(38, 'vi-VN', 'Xóa'),
(39, 'vi-VN', 'Bạn có chắc chắn muốn xóa mục này?'),
(40, 'vi-VN', 'Tạo'),
(41, 'vi-VN', 'Chức vụ'),
(42, 'vi-VN', 'Quyền hạn'),
(43, 'vi-VN', 'Cập nhập'),
(44, 'vi-VN', 'Tạo'),
(48, 'vi-VN', 'Loại bỏ'),
(397, 'vi-VN', 'Tải lên nhiều tệp'),
(398, 'vi-VN', 'Ghi chú:'),
(515, 'vi-VN', 'Không hoạt động'),
(516, 'vi-VN', 'Hoạt động'),
(518, 'vi-VN', 'Dịch ngôn ngữ: {name}'),
(519, 'vi-VN', 'Lưu'),
(520, 'vi-VN', 'Đóng'),
(521, 'vi-VN', 'Bạn chắc chắn muốn xóa những mục này?'),
(522, 'vi-VN', 'Bạn chắc chắn muốn xóa mục này?'),
(523, 'vi-VN', 'Tài khoản'),
(524, 'vi-VN', 'Thông tin tài khoản'),
(525, 'vi-VN', 'Thay đổi ảnh đại diện'),
(526, 'vi-VN', 'Thay đổi mật khẩu'),
(528, 'vi-VN', 'Tên đăng nhập'),
(529, 'vi-VN', 'Mã xác thực'),
(530, 'vi-VN', 'Mật khẩu mã hóa'),
(531, 'vi-VN', 'Mã lấy lại mật khẩu'),
(532, 'vi-VN', 'Địa chỉ Email'),
(533, 'vi-VN', 'Họ và tên'),
(534, 'vi-VN', 'Nghề nghiệp'),
(535, 'vi-VN', 'Giới thiệu'),
(536, 'vi-VN', 'Công ty'),
(537, 'vi-VN', 'Mã số thuế'),
(538, 'vi-VN', 'Địa chỉ'),
(539, 'vi-VN', 'Ảnh đại diện'),
(540, 'vi-VN', 'Số điện thoại'),
(541, 'vi-VN', 'Ngày sinh'),
(542, 'vi-VN', 'Đường dẫn Facebook'),
(543, 'vi-VN', 'Trạng thái'),
(544, 'vi-VN', 'Thiết lập tài khoản'),
(545, 'vi-VN', 'Giới thiệu'),
(546, 'vi-VN', 'Mật khẩu không đúng.'),
(547, 'vi-VN', 'Xác nhận mật khẩu không đúng.'),
(548, 'vi-VN', 'Mật khẩu'),
(549, 'vi-VN', 'Mật khẩu mới'),
(550, 'vi-VN', 'Xác nhận mật khẩu'),
(551, 'vi-VN', 'Ghi nhớ mật khẩu'),
(552, 'vi-VN', 'Hủy bỏ'),
(553, 'vi-VN', 'Chọn ngày sinh'),
(554, 'vi-VN', 'Thay đổi thông tin tài khoản'),
(555, 'vi-VN', 'Cập nhập {modelClass}:'),
(557, 'vi-VN', 'Cập nhập'),
(558, 'vi-VN', 'Tác giả'),
(559, 'vi-VN', 'Term Relationships'),
(561, 'vi-VN', 'Tìm kiếm nâng cao'),
(562, 'vi-VN', 'Lưu mới {modelClass}:'),
(563, 'vi-VN', 'Lưu mới'),
(564, 'vi-VN', 'Chọn người dùng'),
(565, 'vi-VN', 'Tìm kiếm'),
(566, 'vi-VN', 'Tạo lại'),
(567, 'vi-VN', 'Xóa'),
(568, 'vi-VN', 'Add Term Relationships'),
(570, 'vi-VN', 'Tệp PDF sẽ được mở trong cửa sổ mới'),
(571, 'vi-VN', 'Bạn có chắc chắn muốn xóa mục này'),
(573, 'vi-VN', 'Tạo'),
(574, 'vi-VN', 'Tên'),
(575, 'vi-VN', 'Đường dẫn'),
(576, 'vi-VN', 'Mô tả'),
(577, 'vi-VN', 'Ảnh đại diện'),
(578, 'vi-VN', 'Đối tượng cha'),
(579, 'vi-VN', 'Loại phân loại'),
(580, 'vi-VN', 'Ngôn ngữ'),
(581, 'vi-VN', 'Giao với'),
(582, 'vi-VN', 'Lưu trữ ID'),
(583, 'vi-VN', 'Đối tượng ID'),
(584, 'vi-VN', 'Loại đối tượng'),
(588, 'vi-VN', 'Chọn ngôn ngữ'),
(608, 'vi-VN', 'Cài đặt hệ thống'),
(609, 'vi-VN', 'Bật'),
(610, 'vi-VN', 'Tắt'),
(612, 'vi-VN', 'Lưu'),
(613, 'vi-VN', 'Ngôn ngữ chính'),
(614, 'vi-VN', 'Bật tính năng đa ngôn ngữ'),
(615, 'vi-VN', 'Ngôn ngữ khác'),
(616, 'vi-VN', 'Bài viết'),
(618, 'vi-VN', 'Tiêu đề'),
(619, 'vi-VN', 'Nội dung'),
(620, 'vi-VN', 'Trạng thái bình luận'),
(621, 'vi-VN', 'Đối tượng cha'),
(622, 'vi-VN', 'Loại bài viết'),
(623, 'vi-VN', 'Lưu nháp'),
(624, 'vi-VN', 'Công khai'),
(625, 'vi-VN', 'Đang chờ'),
(626, 'vi-VN', 'Bật'),
(627, 'vi-VN', 'Tắt'),
(628, 'vi-VN', 'Khởi tạo lúc'),
(629, 'vi-VN', 'Cập nhập lúc'),
(630, 'vi-VN', 'Đầy đủ'),
(631, 'vi-VN', 'Xuất tất cả dữ liệu'),
(632, 'vi-VN', 'Trang đăng nhập'),
(633, 'vi-VN', 'Chào mừng quay trở lại. Đăng nhập để tiếp tục.'),
(635, 'vi-VN', 'Đăng nhập'),
(637, 'vi-VN', 'Phân loại'),
(638, 'vi-VN', 'Tạo người dùng'),
(639, 'vi-VN', 'Thêm bài viết'),
(640, 'vi-VN', 'Thêm phân loại'),
(641, 'vi-VN', 'Hoạt động'),
(643, 'vi-VN', 'Tất cả người dùng'),
(644, 'vi-VN', 'Tên đăng nhập đã tồn tại.'),
(645, 'vi-VN', 'Email đã tồn tại.'),
(646, 'vi-VN', 'Chức vụ'),
(651, 'vi-VN', 'Tên ứng dụng'),
(652, 'vi-VN', 'Mô tả ngắn'),
(654, 'vi-VN', 'Chọn ngôn ngữ'),
(655, 'vi-VN', 'Nhận diện trang web'),
(656, 'vi-VN', 'Tạo mới'),
(658, 'en-US', 'Post'),
(658, 'vi-VN', 'Bài viết'),
(660, 'en-US', 'Category'),
(660, 'vi-VN', 'Chuyên mục'),
(661, 'en-US', 'Tag'),
(661, 'vi-VN', 'Thẻ'),
(662, 'en-US', 'Page'),
(662, 'vi-VN', 'Trang'),
(664, 'en-US', 'Porfolio'),
(664, 'vi-VN', 'Dự án'),
(665, 'vi-VN', 'Bình luận'),
(666, 'vi-VN', 'Tạo bình luận'),
(667, 'vi-VN', 'Bình luận bài viết'),
(668, 'vi-VN', 'Bình luận dự án'),
(669, 'vi-VN', 'Tên tác giả'),
(670, 'vi-VN', 'Email tác giả'),
(671, 'vi-VN', 'Tác giả Url'),
(672, 'vi-VN', 'Tác giả Ip'),
(673, 'vi-VN', 'Loại'),
(674, 'vi-VN', 'Đối tượng cha'),
(676, 'vi-VN', 'Tạo Block'),
(677, 'vi-VN', 'Giao diện'),
(679, 'vi-VN', 'Liên kết'),
(680, 'vi-VN', 'Trang chủ'),
(681, 'vi-VN', 'Bài viết mới'),
(682, 'vi-VN', 'Trang mới'),
(683, 'vi-VN', 'Dự án mới'),
(684, 'vi-VN', 'Bài viết'),
(685, 'vi-VN', 'Dự án'),
(686, 'vi-VN', 'Bình luận'),
(687, 'vi-VN', 'Người dùng'),
(688, 'vi-VN', 'Chúc mừng!'),
(689, 'vi-VN', 'Cài đặt của bạn đã được lưu'),
(690, 'vi-VN', 'Có lỗi đã xảy ra!'),
(691, 'vi-VN', 'Cài đặt của bạn đã lưu trữ thất bại'),
(692, 'vi-VN', 'Nội dung của bạn đã được lưu'),
(693, 'vi-VN', 'Nội dung của bạn lưu trữ thất bại'),
(694, 'vi-VN', 'Xóa nội dung thành công'),
(695, 'vi-VN', 'Xóa nội dung thất bại'),
(696, 'vi-VN', 'Xin chào!'),
(697, 'vi-VN', 'Tiêu đề không được thiết lập!'),
(698, 'vi-VN', 'Tin nhắn không được thiết lập!'),
(699, 'vi-VN', 'Chào mừng đến trang quản trị'),
(700, 'en-US', 'Post Comment'),
(700, 'vi-VN', 'Bài viết'),
(701, 'en-US', 'Portfolio Comment'),
(701, 'vi-VN', 'Dự án'),
(702, 'vi-VN', 'Trả lời {modelClass}:'),
(703, 'vi-VN', 'Trả lời'),
(704, 'vi-VN', 'Đăng kí tin tức'),
(705, 'vi-VN', 'Đăng kí tin tức'),
(706, 'vi-VN', 'Tạo người đăng kí'),
(707, 'vi-VN', 'Người đăng kí'),
(708, 'vi-VN', 'Máy chủ'),
(709, 'vi-VN', 'Cổng'),
(710, 'vi-VN', 'Mã hóa'),
(714, 'vi-VN', 'Liên hệ'),
(715, 'vi-VN', 'Tạo liên hệ'),
(716, 'vi-VN', 'Chọn sinh nhật tác giả'),
(717, 'vi-VN', 'Tiêu đề'),
(718, 'vi-VN', 'Điện thoại'),
(719, 'vi-VN', 'Sinh nhật'),
(720, 'vi-VN', 'Địa chỉ'),
(721, 'vi-VN', 'Thành phố'),
(722, 'vi-VN', 'Zip Code'),
(724, 'vi-VN', 'Mã theo dõi'),
(725, 'vi-VN', 'Trạng thái bắt lỗi'),
(726, 'vi-VN', 'Chế độ lập trình'),
(727, 'vi-VN', 'Thiết lập lập trình'),
(728, 'vi-VN', 'Chung'),
(729, 'vi-VN', 'Tắt'),
(730, 'vi-VN', 'Bật'),
(732, 'vi-VN', 'Script tùy biến'),
(733, 'vi-VN', 'Thiết lập giao diện'),
(734, 'vi-VN', 'CSS tùy biến'),
(735, 'vi-VN', 'Sản phẩm'),
(737, 'vi-VN', 'SEO cấu hình'),
(738, 'vi-VN', 'Cho phép tất cả'),
(739, 'vi-VN', 'Chặn tất cả'),
(740, 'vi-VN', 'Tắt'),
(741, 'vi-VN', 'Bật'),
(743, 'vi-VN', 'Thương mại điện tử'),
(745, 'vi-VN', 'Nâng cao'),
(746, 'vi-VN', 'Phần mở rộng'),
(748, 'vi-VN', 'Nghiên cứu từ khóa'),
(753, 'vi-VN', 'Công cụ'),
(754, 'vi-VN', 'Trợ giúp'),
(756, 'vi-VN', 'Lập trình viên'),
(757, 'vi-VN', 'SKU'),
(758, 'vi-VN', 'Số lượng'),
(759, 'vi-VN', 'Trạng thái xếp hạng'),
(760, 'vi-VN', 'Giá khuyến mãi'),
(761, 'vi-VN', 'Giá'),
(762, 'vi-VN', 'Thư viện'),
(763, 'vi-VN', 'Sản phẩm cha'),
(764, 'vi-VN', 'Loại sản phẩm'),
(765, 'vi-VN', 'Từ khóa'),
(766, 'vi-VN', 'Mạng xã hội hình ảnh'),
(767, 'vi-VN', 'Mạng xã hội tiêu đề'),
(768, 'vi-VN', 'Mạng xã hội mô tả'),
(769, 'vi-VN', 'Lập chỉ mục'),
(770, 'vi-VN', 'Lập theo dõi'),
(771, 'vi-VN', 'Đơn vị'),
(772, 'vi-VN', 'Đơn hàng'),
(773, 'vi-VN', 'Sản phẩm thuộc đơn hàng'),
(774, 'vi-VN', 'Chọn sản phẩm'),
(775, 'vi-VN', 'Thêm sản phẩm'),
(776, 'vi-VN', 'Tạo đơn hàng'),
(777, 'en-US', 'Order Item'),
(777, 'vi-VN', 'Sản phẩm'),
(778, 'vi-VN', 'Thiết lập phần mở rộng'),
(779, 'vi-VN', 'Đơn hàng'),
(780, 'vi-VN', 'Mã khóa'),
(781, 'vi-VN', 'Phương thức thanh toán'),
(782, 'vi-VN', 'Ghi chú'),
(783, 'vi-VN', 'Xuất hóa đơn VAT'),
(784, 'vi-VN', 'Tên đăng nhập khách hàng'),
(785, 'vi-VN', 'Số điện thoại khách hàng'),
(786, 'vi-VN', 'Tên khách hàng'),
(787, 'vi-VN', 'Email khách hàng'),
(788, 'vi-VN', 'Địa chỉ khách hàng'),
(789, 'vi-VN', 'Công ty khách hàng'),
(790, 'vi-VN', 'Khu vực khách hàng'),
(791, 'vi-VN', 'Mã số thuế khách hàng'),
(792, 'vi-VN', 'Giới thiệu bởi'),
(793, 'vi-VN', 'Giá sản phẩm'),
(794, 'vi-VN', 'Mã giảm giá'),
(797, 'vi-VN', 'Chiều ngang thumbnail'),
(798, 'vi-VN', 'Chiều cao thumbnail'),
(799, 'vi-VN', 'Chiều ngang medium'),
(800, 'vi-VN', 'Chiều cao medium'),
(801, 'vi-VN', 'Chiều ngang large'),
(802, 'vi-VN', 'Chiều cao large'),
(803, 'vi-VN', 'Chất lượng'),
(804, 'vi-VN', 'Thư viện'),
(805, 'vi-VN', 'Tạo Media'),
(806, 'vi-VN', 'Đường dẫn'),
(807, 'vi-VN', 'Kích thước'),
(808, 'vi-VN', 'Chú thích'),
(810, 'vi-VN', ''),
(811, 'vi-VN', 'Nén CSS'),
(812, 'vi-VN', 'Nén JS'),
(813, 'vi-VN', 'Nén HTML'),
(814, 'vi-VN', 'Gộp CSS'),
(815, 'vi-VN', 'Gộp JS'),
(816, 'vi-VN', 'Tối ưu'),
(817, 'vi-VN', 'Hình ảnh'),
(818, 'vi-VN', 'Lấy đường dẫn'),
(819, 'vi-VN', 'Bạn không có quyền thực hiện hành động này.'),
(832, 'vi-VN', 'Thêm sản phẩm'),
(833, 'vi-VN', 'Thêm bình luận'),
(834, 'vi-VN', 'Thêm Block'),
(835, 'vi-VN', 'Tìm kiếm ...'),
(836, 'vi-VN', 'Dữ liệu'),
(837, 'vi-VN', 'Tên mục'),
(838, 'vi-VN', 'ID Người dùng'),
(839, 'vi-VN', 'Thành phần con'),
(840, 'vi-VN', 'Trang chủ'),
(841, 'vi-VN', 'Đăng bởi:'),
(842, 'vi-VN', 'Đường dẫn'),
(843, 'vi-VN', 'Loại nội dung trên Site Map'),
(844, 'vi-VN', 'Site Map'),
(845, 'vi-VN', 'Chọn loại nội dung'),
(846, 'vi-VN', 'Tương tác'),
(847, 'vi-VN', 'Hiển thị'),
(848, 'vi-VN', 'Xóa bộ nhớ đệm'),
(849, 'vi-VN', 'Tạo loại bài viết'),
(850, 'vi-VN', 'Loại bài viết'),
(851, 'vi-VN', 'Giỏ hàng'),
(852, 'vi-VN', 'Chọn đơn hàng'),
(853, 'vi-VN', 'Thêm giỏ hàng'),
(854, 'vi-VN', 'Tạo loại sản phẩm'),
(855, 'vi-VN', 'Loại sản phẩm'),
(857, 'vi-VN', 'Nhãn dán của loại sản phẩm'),
(859, 'vi-VN', 'Chọn loại sản phẩm'),
(861, 'vi-VN', 'Chọn đơn vị tiền tệ'),
(862, 'vi-VN', 'Kiểu nhập liệu'),
(863, 'vi-VN', 'Đơn vị tiền tệ'),
(864, 'vi-VN', 'Tạo loại phân loại'),
(865, 'vi-VN', 'Loại phân loại'),
(866, 'vi-VN', 'Loại nội dung'),
(867, 'vi-VN', 'Phân loại'),
(868, 'vi-VN', 'Tạo phân loại'),
(869, 'vi-VN', 'Phân loại'),
(870, 'vi-VN', 'Phân loại của loại bài viết'),
(871, 'vi-VN', 'Tạo phân loại của loại bài viết'),
(872, 'vi-VN', 'Phân loại của loại bài viết'),
(873, 'vi-VN', 'Chọn loại bài viết'),
(874, 'vi-VN', 'Tên đã được cài đặt'),
(875, 'vi-VN', 'Chọn loại phân loại'),
(876, 'vi-VN', 'Chọn'),
(877, 'vi-VN', 'Tạo nhiều Media'),
(878, 'vi-VN', 'Lưu với ngôn ngữ mới {modelClass}:'),
(879, 'vi-VN', 'Lưu với ngôn ngữ mới'),
(880, 'vi-VN', 'Tất cả'),
(881, 'vi-VN', 'Meta của loại sản phẩm'),
(882, 'vi-VN', 'Meta của loại sản phẩm:'),
(886, 'vi-VN', 'Meta của'),
(913, 'vi-VN', 'Trang'),
(914, 'vi-VN', 'bình luận'),
(915, 'vi-VN', 'Chuyên mục sản phẩm'),
(916, 'vi-VN', 'Chuyên mục'),
(917, 'vi-VN', 'Thẻ'),
(918, 'vi-VN', 'Thẻ sản phẩm'),
(920, 'vi-VN', 'Trình duyệt'),
(921, 'vi-VN', 'Màu sắc'),
(922, 'vi-VN', 'Hỗ trợ Retina'),
(923, 'vi-VN', 'Giá trị'),
(924, 'vi-VN', 'Chuyên mục'),
(925, 'vi-VN', 'Thẻ'),
(926, 'vi-VN', 'Đọc thêm'),
(927, 'vi-VN', 'bởi'),
(928, 'vi-VN', 'Bởi'),
(929, 'vi-VN', 'Chia sẻ bài viết'),
(930, 'vi-VN', 'Để lại lời nhắn'),
(931, 'vi-VN', 'Gửi'),
(932, 'vi-VN', 'Giao diện'),
(933, 'vi-VN', 'Tìm kiếm giao diện'),
(934, 'vi-VN', 'giao diện website đang chờ bạn'),
(935, 'vi-VN', 'Thấp tới cao'),
(936, 'vi-VN', 'Cao tới thấp'),
(937, 'vi-VN', 'mục mỗi trang'),
(938, 'vi-VN', 'Mới'),
(939, 'vi-VN', 'Sản phẩm'),
(940, 'vi-VN', 'Phổ biến'),
(941, 'vi-VN', 'Sản phẩm mới'),
(942, 'vi-VN', 'Sản phẩm phổ biến'),
(943, 'vi-VN', 'Sử dụng'),
(944, 'vi-VN', 'Thông tin'),
(945, 'vi-VN', 'Xem mẫu'),
(946, 'vi-VN', 'Thông tin'),
(947, 'vi-VN', 'Xem trước'),
(948, 'vi-VN', 'Yêu thích'),
(949, 'vi-VN', 'Mua ngay'),
(950, 'vi-VN', 'Thêm vào giỏ hàng'),
(951, 'vi-VN', 'Thông tin'),
(952, 'vi-VN', 'Tác giả'),
(953, 'vi-VN', 'Bình luận'),
(954, 'vi-VN', 'Đánh giá'),
(955, 'vi-VN', 'FAQ'),
(956, 'vi-VN', 'Yêu thích'),
(957, 'vi-VN', 'Phát hành'),
(958, 'vi-VN', 'Cập nhập'),
(959, 'vi-VN', 'Phiên bản'),
(960, 'vi-VN', 'Để lại lời nhắn'),
(961, 'vi-VN', 'Lọc sản phẩm'),
(963, 'vi-VN', 'Đăng ký'),
(964, 'vi-VN', 'Sản phẩm nổi bật'),
(965, 'vi-VN', 'Sản phẩm mới'),
(966, 'vi-VN', 'Bộ lọc:'),
(967, 'vi-VN', 'Xu hướng'),
(968, 'vi-VN', 'Giá thấp'),
(969, 'vi-VN', 'Giá cao'),
(970, 'vi-VN', 'Mua nhiều'),
(971, 'vi-VN', 'Sản phẩm mới'),
(972, 'vi-VN', 'Không thể tạo bình luận'),
(973, 'vi-VN', 'Viết bình luận của bạn...'),
(976, 'vi-VN', 'Chào mừng'),
(977, 'vi-VN', 'Bạn có thể đăng nhập với tài khoản đã được tạo'),
(978, 'vi-VN', 'Chưa có'),
(979, 'vi-VN', 'tài khoản'),
(980, 'vi-VN', 'Đăng nhập'),
(981, 'vi-VN', 'Mỗi trang ...'),
(982, 'vi-VN', 'Chọn ...'),
(983, 'vi-VN', 'Gửi'),
(984, 'vi-VN', 'Mục mỗi trang'),
(985, 'vi-VN', 'Không giới hạn'),
(986, 'vi-VN', 'Hết hàng'),
(987, 'vi-VN', 'Bạn có muốn thực hiện?'),
(988, 'vi-VN', 'Hành động nhanh ...'),
(989, 'vi-VN', 'Thực hiện'),
(990, 'vi-VN', 'Bình luận bài viết'),
(991, 'vi-VN', 'Bình luận sản phẩm'),
(992, 'vi-VN', 'Bình luận portfolio'),
(994, 'vi-VN', 'Trạng thái Coming soon'),
(995, 'vi-VN', 'Coming soon thời gian kết thúc'),
(996, 'vi-VN', 'Trạng thái trang web'),
(997, 'vi-VN', 'Bạn đã sẵn sàng!'),
(998, 'vi-VN', 'Vài thứ thật tuyệt vời sẽ đến sớm thôi!'),
(999, 'vi-VN', 'Nội dung email được gửi đến:'),
(1000, 'vi-VN', 'Không thích nhận email?'),
(1001, 'vi-VN', 'Bỏ theo dõi'),
(1002, 'vi-VN', 'Bản quyền'),
(1003, 'vi-VN', 'Được hỗ trợ bởi'),
(1004, 'vi-VN', 'Quên mật khẩu?'),
(1005, 'vi-VN', 'Không sao! Nhấp vào nút bên dưới để đặt mật khẩu mới cho tài khoản của bạn.'),
(1006, 'vi-VN', 'Nếu bạn không yêu cầu đặt lại mật khẩu, chỉ cần bỏ qua email này.'),
(1008, 'vi-VN', 'Tên đăng nhập hoặc mật khẩu không đúng.'),
(1009, 'vi-VN', 'Nếu quên mật khẩu bạn có thể'),
(1010, 'vi-VN', 'Yêu cầu lấy lại mật khẩu'),
(1011, 'vi-VN', 'Trở lại'),
(1012, 'vi-VN', 'Gửi'),
(1013, 'vi-VN', 'Lấy lại mật khẩu'),
(1015, 'vi-VN', 'Tạo Mail Transport'),
(1016, 'vi-VN', 'Mail Transport'),
(1017, 'vi-VN', 'Chữ kí'),
(1018, 'vi-VN', 'Phần'),
(1019, 'vi-VN', 'Thông báo qua email khi người dùng đăng nhập'),
(1020, 'vi-VN', 'lấy lại'),
(1021, 'vi-VN', 'Vui lòng điền vào email của bạn. Một liên kết để đặt lại mật khẩu sẽ được gửi đến đó.'),
(1022, 'vi-VN', 'Chọn mật khẩu mới:'),
(1023, 'vi-VN', 'Đăng nhập'),
(1024, 'vi-VN', 'Tạo bởi'),
(1025, 'vi-VN', 'ID khách hàng'),
(1026, 'vi-VN', 'Họ'),
(1027, 'vi-VN', 'Tên'),
(1029, 'vi-VN', 'Mã số thuế'),
(1030, 'vi-VN', 'Quốc gia'),
(1031, 'vi-VN', 'Thành phố'),
(1032, 'vi-VN', 'Quận'),
(1034, 'vi-VN', 'Đơn vị tiền tệ'),
(1035, 'vi-VN', 'Khách hàng'),
(1036, 'vi-VN', 'Thông tin thanh toán'),
(1037, 'vi-VN', 'Ghi chú'),
(1038, 'vi-VN', 'Nhắc nhở'),
(1039, 'vi-VN', 'Địa chỉ giao hàng'),
(1040, 'vi-VN', 'Tạo khách hàng'),
(1041, 'vi-VN', 'Thêm địa chỉ thanh toán của khách hàng'),
(1042, 'vi-VN', 'Thêm ghi chú khách hàng'),
(1043, 'vi-VN', 'Thêm lời nhắc khách hàng'),
(1044, 'vi-VN', 'Thêm địa chỉ giao hàng của khách hàng'),
(1045, 'vi-VN', 'Chọn ngôn ngữ. Nhập một vài từ để hiển thị gợi ý'),
(1046, 'vi-VN', 'Chọn quốc gia. Nhập một vài từ để hiển thị gợi ý'),
(1047, 'vi-VN', 'Đơn vị sản phẩm'),
(1048, 'vi-VN', 'Đơn vị sản phẩm tương đương'),
(1049, 'vi-VN', 'Tạo đơn vị sản phẩm'),
(1050, 'vi-VN', 'Đơn vị sản phẩm'),
(1051, 'vi-VN', 'Chọn đơn vị sản phẩm'),
(1052, 'vi-VN', 'Thêm đơn vị sản phẩm tương đương'),
(1053, 'vi-VN', 'Tên đơn vị sản phẩm'),
(1054, 'vi-VN', 'Đơn vị sản phẩm 1'),
(1055, 'vi-VN', 'Đơn vị sản phẩm 2'),
(1056, 'vi-VN', 'Tạo đơn vị sản phẩm tương đương'),
(1057, 'vi-VN', 'Đơn vị sản phẩm tương đương'),
(1058, 'vi-VN', 'Chọn đơn vị sản phẩm'),
(1059, 'vi-VN', 'Giá trị đầu vào'),
(1060, 'vi-VN', 'Giá trị đơn vị sản phẩm 1'),
(1061, 'vi-VN', 'Giá trị đơn vị sản phẩm 2'),
(1062, 'vi-VN', 'Tiêu đề không được vượt quá 255 ký tự'),
(1063, 'vi-VN', 'Nội dung là King'),
(1064, 'vi-VN', 'Ảnh đại diện, gửi ảnh đại diện của bạn'),
(1065, 'vi-VN', 'Trạng thái công khai, quyết định bài viết có được hiển thị trên trang chủ hay không'),
(1066, 'vi-VN', 'Trạng thái nhận xét, quyết định bài viết được bật hay tắt nhận xét'),
(1067, 'vi-VN', 'Chọn tác giả cho bài viết này'),
(1068, 'vi-VN', 'Chọn bài viết gốc cho bài viết này'),
(1069, 'vi-VN', 'Chọn bài viết'),
(1070, 'vi-VN', 'Id của Block, Mỗi khối có một số nguyên duy nhất, kiểu dữ liệu số'),
(1071, 'vi-VN', 'Tên của Block, độ dài tối đa là 255 ký tự'),
(1072, 'vi-VN', 'Nội dung Block'),
(1073, 'vi-VN', 'Tác giả của Block, chọn tác giả cho Block'),
(1074, 'vi-VN', 'Ngôn ngữ của Block, chọn ngôn ngữ cho Block'),
(1075, 'vi-VN', 'Block này là phiên bản ngôn ngữ khác của Block khác'),
(1076, 'vi-VN', 'Trống'),
(1079, 'vi-VN', 'Giới tính'),
(1080, 'vi-VN', 'Tình trạng hôn nhân'),
(1081, 'vi-VN', 'Ngày tham gia'),
(1082, 'vi-VN', 'Ngày kết thúc'),
(1083, 'vi-VN', 'Nhân viên'),
(1084, 'vi-VN', 'Tạo nhân viên'),
(1085, 'vi-VN', 'Chọn ngày tham gia'),
(1086, 'vi-VN', 'Chọn ngày nghỉ việc'),
(1087, 'vi-VN', 'Toàn thời gian'),
(1088, 'vi-VN', 'Bán thời gian'),
(1089, 'vi-VN', 'Nam'),
(1090, 'vi-VN', 'Nữ'),
(1091, 'vi-VN', 'Khác'),
(1092, 'vi-VN', 'Độc thân'),
(1093, 'vi-VN', 'Đã kết hôn'),
(1094, 'vi-VN', 'Nợ'),
(1095, 'vi-VN', 'Nhà cung cấp'),
(1096, 'vi-VN', 'Tạo nhà cung cấp'),
(1097, 'vi-VN', 'Doanh nghiệp'),
(1098, 'vi-VN', 'Cá nhân'),
(1099, 'vi-VN', 'Nhà kho'),
(1100, 'vi-VN', 'Tạo nhà kho'),
(1101, 'vi-VN', 'Kinh độ'),
(1102, 'vi-VN', 'Vĩ độ'),
(1103, 'vi-VN', 'Kho ID'),
(1104, 'vi-VN', 'Nhân viên ID'),
(1105, 'vi-VN', 'Nhà cung cấp ID'),
(1106, 'vi-VN', 'Ngày'),
(1107, 'vi-VN', 'Đã khóa'),
(1108, 'vi-VN', 'Chứng từ kho'),
(1109, 'vi-VN', 'Tạo chứng từ kho'),
(1110, 'vi-VN', 'Chứng từ kho'),
(1111, 'vi-VN', 'Chọn kho'),
(1112, 'vi-VN', 'Chọn nhân viên'),
(1113, 'vi-VN', 'Chọn nhà cung cấp'),
(1114, 'vi-VN', 'Chọn ngày'),
(1115, 'vi-VN', 'Tệp đính kèm'),
(1116, 'vi-VN', 'Giá đơn vị'),
(1117, 'vi-VN', 'Mặt hàng'),
(1118, 'vi-VN', 'Tạo mặt hàng'),
(1119, 'vi-VN', 'Mặt hàng'),
(1120, 'vi-VN', 'Chọn chứng từ'),
(1121, 'vi-VN', 'Đơn vị sản phẩm'),
(1122, 'vi-VN', 'Giá sản phẩm'),
(1123, 'vi-VN', 'Đơn vị tiền tệ'),
(1124, 'vi-VN', 'Thêm mặt hàng'),
(1125, 'vi-VN', 'Sản phẩm'),
(1126, 'vi-VN', 'Nhà cung cấp thành tiền'),
(1127, 'vi-VN', 'Thành tiền'),
(1128, 'vi-VN', 'Tạo sản phẩm'),
(1129, 'vi-VN', 'Sản phẩm'),
(1130, 'vi-VN', 'Chọn sản phẩm'),
(1131, 'vi-VN', 'Đã khóa'),
(1132, 'vi-VN', 'Chưa khóa'),
(1133, 'vi-VN', 'Sản phẩm'),
(1134, 'vi-VN', 'Chọn đơn vị tiền tệ'),
(1135, 'vi-VN', 'Nhà cung cấp thành tiền'),
(1136, 'vi-VN', 'Có'),
(1137, 'vi-VN', 'Không'),
(1138, 'vi-VN', 'Nhập'),
(1139, 'vi-VN', 'Xuất'),
(1140, 'vi-VN', 'Tổng giá đúng hay sai?'),
(1141, 'vi-VN', 'Đúng'),
(1142, 'vi-VN', 'Sai'),
(1143, 'vi-VN', 'Số lượng của nhà cung cấp'),
(1144, 'vi-VN', 'Kiểm tra giá tiền'),
(1145, 'vi-VN', 'Chưa tính'),
(1146, 'vi-VN', 'Kiểm tra số lượng'),
(1147, 'vi-VN', 'Nhập'),
(1148, 'vi-VN', 'Xuất'),
(1149, 'vi-VN', 'Nhập'),
(1150, 'vi-VN', 'Xuất'),
(1151, 'vi-VN', 'Đã thanh toán'),
(1152, 'vi-VN', 'Chưa thanh toán'),
(1153, 'vi-VN', 'Tổng'),
(1154, 'vi-VN', 'Chênh lệch giá'),
(1155, 'vi-VN', 'Mở khóa'),
(1156, 'vi-VN', 'Đơn vị nhỏ nhất'),
(1164, 'vi-VN', 'Giá trị thực'),
(1165, 'vi-VN', 'Chiết khấu'),
(1166, 'vi-VN', 'Chọn khách hàng cho đơn đặt hàng'),
(1167, 'vi-VN', 'Chọn người dùng'),
(1168, 'vi-VN', 'Hoàn thành'),
(1169, 'vi-VN', 'Tiền mặt'),
(1171, 'vi-VN', 'Đơn hàng của tôi'),
(1172, 'vi-VN', 'Đang xử lí'),
(1173, 'vi-VN', 'Đang vận chuyển'),
(1174, 'vi-VN', 'Địa điểm nhận hàng'),
(1175, 'vi-VN', 'Trái cây'),
(1176, 'vi-VN', 'Tổng đơn đặt hàng'),
(1177, 'vi-VN', 'Tổng giá trị đơn hàng'),
(1178, 'vi-VN', 'Tổng giá trị chiết khấu'),
(1179, 'vi-VN', 'Tổng giá trị đơn hàng đang chờ'),
(1180, 'vi-VN', 'Gửi đến email'),
(1183, 'vi-VN', 'Thiết lập bảo mật');

-- --------------------------------------------------------

--
-- Table structure for table `mail_transport`
--

CREATE TABLE `mail_transport` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `host` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL DEFAULT '465',
  `encryption` varchar(255) NOT NULL DEFAULT 'TLS',
  `signature` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mail_transport`
--

INSERT INTO `mail_transport` (`id`, `name`, `host`, `username`, `password`, `port`, `encryption`, `signature`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'no-reply', 'smtp.yandex.com', 'no-reply@thecatdev.com', '0935145970hG', '587', 'TLS', '<p></p><table cellpadding=\"0\" cellspacing=\"0\" class=\" cke_show_border\" style=\"background-color: rgb(255, 255, 255); color: rgb(68, 68, 68); width: 525px; font-size: 10pt; font-family: Arial, sans-serif;\"><tbody><tr><td valign=\"top\" style=\"padding-bottom: 5px; font-size: 18pt; color: rgb(42, 42, 42); width: 326px; vertical-align: top;\"><div><br></div></td></tr><tr><td align=\"justify\" valign=\"top\" colspan=\"2\" style=\"padding-top: 10px; font-size: 10pt; border-top: 1px solid rgb(0, 108, 46); color: rgb(42, 42, 42); text-align: justify; vertical-align: top;\"><span style=\"font-size: 10pt; color: rgb(140, 140, 140);\">IMPORTANT: Please do not reply to this message. Replies to this message are routed to an unmonitored mailbox. If you have questions please go to our website.</span></td></tr></tbody></table>', '2018-09-16 08:12:03', '2018-09-16 08:12:03', 1, 1),
(2, 'admin', 'smtp.yandex.com', 'admin@thecatdev.com', '0935145970hG', '587', 'TLS', NULL, '2018-09-13 10:34:09', '2018-09-13 10:34:09', 1, 1),
(3, 'support', 'smtp.yandex.com', 'support@thecatdev.com', '0935145970hG', '587', 'TLS', NULL, '2018-09-13 10:34:31', '2018-09-13 10:34:31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `caption` varchar(550) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `description` varchar(550) DEFAULT NULL,
  `file_size` int(19) DEFAULT NULL,
  `dimensions` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'image/png',
  `status` varchar(255) DEFAULT 'public',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `path`, `title`, `caption`, `alt`, `description`, `file_size`, `dimensions`, `type`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(10, '1221505.png', 'uploads/2018/07/05/120230-1221505.png', NULL, NULL, NULL, NULL, 16337, '200x200', 'image/png', 'public', '2018-07-05 05:02:30', '2018-07-05 05:02:30', 1, NULL),
(55, '2018/10/25/051802-nho-den-my-2.jpg', 'uploads/2018/10/25/051802-nho-den-my-2.jpg', NULL, NULL, NULL, NULL, 385403, '1600x900', 'image/jpeg', 'public', '2018-10-25 10:18:03', '2018-10-25 10:18:03', 1, NULL),
(56, '2018/10/25/051846-du-du-1500001278208.jpg', 'uploads/2018/10/25/051846-du-du-1500001278208.jpg', NULL, NULL, NULL, NULL, 140433, '800x533', 'image/jpeg', 'public', '2018-10-25 10:18:47', '2018-10-25 10:18:47', 1, NULL),
(57, '2018/10/25/051926-mangcut-600x375.jpg', 'uploads/2018/10/25/051926-mangcut-600x375.jpg', NULL, NULL, NULL, NULL, 79406, '600x375', 'image/jpeg', 'public', '2018-10-25 10:19:26', '2018-10-25 10:19:26', 1, NULL),
(58, '2018/10/25/052012-1_33004.jpg', 'uploads/2018/10/25/052012-1_33004.jpg', NULL, NULL, NULL, NULL, 84097, '700x467', 'image/jpeg', 'public', '2018-10-25 10:20:13', '2018-10-25 10:20:13', 1, NULL),
(59, '2018/10/25/052227-rambutan-rambutans-rambutan-fruit.jpg', 'uploads/2018/10/25/052227-rambutan-rambutans-rambutan-fruit.jpg', NULL, NULL, NULL, NULL, 273566, '700x522', 'image/jpeg', 'public', '2018-10-25 10:22:27', '2018-10-25 10:22:27', 1, NULL),
(60, '2018/10/25/052317-cat-tia-cay-nho-2.jpg', 'uploads/2018/10/25/052317-cat-tia-cay-nho-2.jpg', NULL, NULL, NULL, NULL, 100870, '550x600', 'image/jpeg', 'public', '2018-10-25 10:23:17', '2018-10-25 10:23:17', 1, NULL),
(61, '2018/10/25/052600-photo1532427113348-15324271133491028717479.jpg', 'uploads/2018/10/25/052600-photo1532427113348-15324271133491028717479.jpg', NULL, NULL, NULL, NULL, 113778, '660x410', 'image/jpeg', 'public', '2018-10-25 10:26:00', '2018-10-25 10:26:00', 1, NULL),
(62, '2018/10/25/052649-Anh bai viet Oi Thanh Ha.jpg', 'uploads/2018/10/25/052649-Anh bai viet Oi Thanh Ha.jpg', NULL, NULL, NULL, NULL, 143582, '1024x661', 'image/jpeg', 'public', '2018-10-25 10:26:50', '2018-10-25 10:26:50', 1, NULL),
(63, '2018/10/25/052713-ss.jpg', 'uploads/2018/10/25/052713-ss.jpg', NULL, NULL, NULL, NULL, 143582, '1024x661', 'image/jpeg', 'public', '2018-10-25 10:27:13', '2018-10-25 10:27:13', 1, NULL),
(64, '2018/10/25/052750-quyet-1443480157181.jpg', 'uploads/2018/10/25/052750-quyet-1443480157181.jpg', NULL, NULL, NULL, NULL, 91957, '550x339', 'image/jpeg', 'public', '2018-10-25 10:27:51', '2018-10-25 10:27:51', 1, NULL),
(65, '2018/10/25/053355-qua-le.jpg', 'uploads/2018/10/25/053355-qua-le.jpg', NULL, NULL, NULL, NULL, 67980, '500x383', 'image/jpeg', 'public', '2018-10-25 10:33:55', '2018-10-25 10:33:55', 1, NULL),
(66, '2018/10/25/053435-thanh-long-1-0847000.jpg', 'uploads/2018/10/25/053435-thanh-long-1-0847000.jpg', NULL, NULL, NULL, NULL, 177910, '650x418', 'image/jpeg', 'public', '2018-10-25 10:34:35', '2018-10-25 10:34:35', 1, NULL),
(67, '2018/10/25/053532-mang-cau-tay-ninh.jpg', 'uploads/2018/10/25/053532-mang-cau-tay-ninh.jpg', NULL, NULL, NULL, NULL, 131097, '500x389', 'image/jpeg', 'public', '2018-10-25 10:35:32', '2018-10-25 10:35:32', 1, NULL),
(68, '2018/10/25/053603-saurieng_VQVJ.jpg', 'uploads/2018/10/25/053603-saurieng_VQVJ.jpg', NULL, NULL, NULL, NULL, 97359, '640x429', 'image/jpeg', 'public', '2018-10-25 10:36:04', '2018-10-25 10:36:04', 1, NULL),
(69, '2018/10/25/053652-blu1412095117.jpg', 'uploads/2018/10/25/053652-blu1412095117.jpg', NULL, NULL, NULL, NULL, 393700, '1024x800', 'image/jpeg', 'public', '2018-10-25 10:36:52', '2018-10-25 10:36:52', 1, NULL),
(70, '2018/10/25/074523-tao-tay-45f93.jpg', 'uploads/2018/10/25/074523-tao-tay-45f93.jpg', NULL, NULL, NULL, NULL, 38083, '450x414', 'image/jpeg', 'public', '2018-10-25 12:45:23', '2018-10-25 12:45:23', 1, NULL),
(71, '2018/10/25/075336-bonbonthai_01_grande.jpg', 'uploads/2018/10/25/075336-bonbonthai_01_grande.jpg', NULL, NULL, NULL, NULL, 39625, '600x400', 'image/jpeg', 'public', '2018-10-25 12:53:36', '2018-10-25 12:53:36', 1, NULL),
(72, '2018/10/25/075540-mon-ngon-voi-tao-3.jpg', 'uploads/2018/10/25/075540-mon-ngon-voi-tao-3.jpg', NULL, NULL, NULL, NULL, 593207, '1563x1200', 'image/jpeg', 'public', '2018-10-25 12:55:42', '2018-10-25 12:55:42', 1, NULL),
(73, '2018/10/25/084749-0027142_1_2_master.jpg', 'uploads/2018/10/25/084749-0027142_1_2_master.jpg', NULL, NULL, NULL, NULL, 124560, '700x700', 'image/jpeg', 'public', '2018-10-25 13:47:50', '2018-10-25 13:47:50', 1, NULL),
(74, '2018/10/25/085358-luu.jpeg', 'uploads/2018/10/25/085358-luu.jpeg', NULL, NULL, NULL, NULL, 31976, '253x199', 'image/jpeg', 'public', '2018-10-25 13:53:59', '2018-10-25 13:53:59', 1, NULL),
(75, '2018/10/25/085603-xoaituquy.jpg', 'uploads/2018/10/25/085603-xoaituquy.jpg', NULL, NULL, NULL, NULL, 103074, '500x500', 'image/jpeg', 'public', '2018-10-25 13:56:04', '2018-10-25 13:56:04', 1, NULL),
(76, '2018/10/25/085648-luu.jpeg', 'uploads/2018/10/25/085648-luu.jpeg', NULL, NULL, NULL, NULL, 31976, '253x199', 'image/jpeg', 'public', '2018-10-25 13:56:48', '2018-10-25 13:56:48', 1, NULL),
(77, '2018/10/25/090948-camsanh.jpeg', 'uploads/2018/10/25/090948-camsanh.jpeg', NULL, NULL, NULL, NULL, 15719, '225x225', 'image/jpeg', 'public', '2018-10-25 14:09:48', '2018-10-25 14:09:48', 1, NULL),
(78, '2018/10/25/091014-luu.jpeg', 'uploads/2018/10/25/091014-luu.jpeg', NULL, NULL, NULL, NULL, 31976, '253x199', 'image/jpeg', 'public', '2018-10-25 14:10:14', '2018-10-25 14:10:14', 1, NULL),
(79, '2018/10/25/091033-camsanh.jpeg', 'uploads/2018/10/25/091033-camsanh.jpeg', NULL, NULL, NULL, NULL, 15719, '225x225', 'image/jpeg', 'public', '2018-10-25 14:10:33', '2018-10-25 14:10:33', 1, NULL),
(80, '2018/10/25/094856-oi-ha-noi.jpeg', 'uploads/2018/10/25/094856-oi-ha-noi.jpeg', NULL, NULL, NULL, NULL, 160227, '640x640', 'image/jpeg', 'public', '2018-10-25 14:48:57', '2018-10-25 14:48:57', 1, NULL),
(81, '2018/10/25/110801-xoaichuvang.jpeg', 'uploads/2018/10/25/110801-xoaichuvang.jpeg', NULL, NULL, NULL, NULL, 22018, '275x183', 'image/jpeg', 'public', '2018-10-25 16:08:01', '2018-10-25 16:08:01', 1, NULL),
(82, '2018/10/25/111032-COCCAY.jpg', 'uploads/2018/10/25/111032-COCCAY.jpg', NULL, NULL, NULL, NULL, 158819, '600x600', 'image/jpeg', 'public', '2018-10-25 16:10:32', '2018-10-25 16:10:32', 1, NULL),
(83, '2018/10/25/111129-tao-viet.jpg', 'uploads/2018/10/25/111129-tao-viet.jpg', NULL, NULL, NULL, NULL, 74314, '700x467', 'image/jpeg', 'public', '2018-10-25 16:11:29', '2018-10-25 16:11:29', 1, NULL),
(84, '2018/10/25/111240-NHANTHAI.jpg', 'uploads/2018/10/25/111240-NHANTHAI.jpg', NULL, NULL, NULL, NULL, 133757, '1024x600', 'image/jpeg', 'public', '2018-10-25 16:12:40', '2018-10-25 16:12:40', 1, NULL),
(85, '2018/10/25/111425-mang-cau-tay-ninh.jpg', 'uploads/2018/10/25/111425-mang-cau-tay-ninh.jpg', NULL, NULL, NULL, NULL, 131097, '500x389', 'image/jpeg', 'public', '2018-10-25 16:14:25', '2018-10-25 16:14:25', 1, NULL),
(86, '2018/10/25/112813-CHOMCHOMNHAN.jpg', 'uploads/2018/10/25/112813-CHOMCHOMNHAN.jpg', NULL, NULL, NULL, NULL, 139846, '500x375', 'image/jpeg', 'public', '2018-10-25 16:28:13', '2018-10-25 16:28:13', 1, NULL),
(87, '2018/10/25/112850-chomchomthai.jpg', 'uploads/2018/10/25/112850-chomchomthai.jpg', NULL, NULL, NULL, NULL, 257038, '736x552', 'image/jpeg', 'public', '2018-10-25 16:28:50', '2018-10-25 16:28:50', 1, NULL),
(88, '2018/11/16/040439-1542359079204.png', 'uploads/2018/11/16/040439-1542359079204.png', NULL, NULL, NULL, NULL, 1285105, '675x475', 'image/png', 'public', '2018-11-16 09:04:40', '2018-11-16 09:04:40', 1, NULL),
(89, '2018/11/16/040440-1542359079480.png', 'uploads/2018/11/16/040440-1542359079480.png', NULL, NULL, NULL, NULL, 1285105, '675x475', 'image/png', 'public', '2018-11-16 09:04:40', '2018-11-16 09:04:40', 1, NULL),
(90, '2018/11/16/040441-1542359079662.png', 'uploads/2018/11/16/040441-1542359079662.png', NULL, NULL, NULL, NULL, 1285105, '675x475', 'image/png', 'public', '2018-11-16 09:04:41', '2018-11-16 09:04:41', 1, NULL),
(91, '2018/11/16/041532-cam-my-vang.png', 'uploads/2018/11/16/041532-cam-my-vang.png', NULL, NULL, NULL, NULL, 1502989, '750x500', 'image/png', 'public', '2018-11-16 09:15:32', '2018-11-16 09:15:32', 1, NULL),
(92, '2018/11/16/041532-cam-my-vang.png', 'uploads/2018/11/16/041532-cam-my-vang.png', NULL, NULL, NULL, NULL, 1502989, '750x500', 'image/png', 'public', '2018-11-16 09:15:33', '2018-11-16 09:15:33', 1, NULL),
(93, '2018/11/17/054020-1542451220430.png', 'uploads/2018/11/17/054020-1542451220430.png', NULL, NULL, NULL, NULL, 1082250, '600x450', 'image/png', 'public', '2018-11-17 10:40:21', '2018-11-17 10:40:21', 1, NULL),
(94, '2018/11/17/054256-blog-1.jpg', 'uploads/2018/11/17/054256-blog-1.jpg', NULL, NULL, NULL, NULL, 88777, '600x450', 'image/jpeg', 'public', '2018-11-17 10:42:57', '2018-11-17 10:42:57', 1, NULL),
(95, '2018/11/17/054343-blog-2.jpg', 'uploads/2018/11/17/054343-blog-2.jpg', NULL, NULL, NULL, NULL, 69980, '600x450', 'image/jpeg', 'public', '2018-11-17 10:43:43', '2018-11-17 10:43:43', 1, NULL),
(96, '2018/11/17/054413-blog-3.jpg', 'uploads/2018/11/17/054413-blog-3.jpg', NULL, NULL, NULL, NULL, 116531, '600x450', 'image/jpeg', 'public', '2018-11-17 10:44:13', '2018-11-17 10:44:13', 1, NULL),
(97, '2018/11/17/054451-blog-4.jpg', 'uploads/2018/11/17/054451-blog-4.jpg', NULL, NULL, NULL, NULL, 109125, '600x450', 'image/jpeg', 'public', '2018-11-17 10:44:51', '2018-11-17 10:44:51', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` int(19) NOT NULL,
  `obj_id` int(19) NOT NULL,
  `obj_type` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `obj_id`, `obj_type`, `key`, `value`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(29, 4, 'template', 'live-preview', 'https://www.wix.com/website-template/view/html/1905/?siteId=bf6aeb61-6d03-4b41-9d17-41510aea2db8&metaSiteId=a82e916a-5f83-4c62-ad07-53c98a45a9e6&originUrl=https%3A%2F%2Fwww.wix.com%2Fwebsite%2Ftemplates', '2018-08-16 05:38:30', '2018-08-16 05:38:30', NULL, NULL),
(30, 4, 'template', 'version', '1.0.2', '2018-08-16 05:38:30', '2018-08-16 05:38:30', NULL, NULL),
(31, 5, 'template', 'live-preview', 'https://www.wix.com/website-template/view/html/1732/?siteId=648ae4f3-0bc8-46c6-becc-8bbf3ccc2ab3&metaSiteId=cb21959b-8635-4fa8-9fd7-b85fe6cd7f3c&originUrl=https%3A%2F%2Fwww.wix.com%2Fwebsite%2Ftemplates', '2018-08-16 05:39:17', '2018-08-16 05:39:17', NULL, NULL),
(32, 5, 'template', 'version', '1.0.2', '2018-08-16 05:39:17', '2018-08-16 05:39:17', NULL, NULL),
(39, 6, 'template', 'live-preview', 'https://www.wix.com/website-template/view/html/2257/?siteId=47114304-b6c5-449b-8a17-ee258da0ea5c&metaSiteId=ee270690-ee5f-4e6e-ab47-03370e5d0bec&originUrl=https%3A%2F%2Fwww.wix.com%2Fwebsite%2Ftemplates', '2018-08-24 13:38:34', '2018-08-24 13:38:34', NULL, NULL),
(40, 6, 'template', 'version', '1.0.3', '2018-08-24 13:38:34', '2018-08-24 13:38:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1527333907),
('m130524_201442_init', 1527344403),
('m140506_102106_rbac_init', 1527333924),
('m141002_030233_translate_manager', 1527333996),
('m141129_130551_create_filemanager_mediafile_table', 1527437183),
('m141203_173402_create_filemanager_owners_table', 1527437183),
('m141203_175538_add_filemanager_owners_ref_mediafile_fk', 1527437183),
('m150227_114524_init', 1527526652),
('m160616_000010_add_filemanager_tags', 1527437183),
('m160622_085710_create_ImageManager_table', 1527447960),
('m161109_104201_rename_setting_table', 1527526652),
('m170223_113221_addBlameableBehavior', 1527447960),
('m170323_102933_add_description_column_to_setting_table', 1527526652),
('m170413_125133_rename_date_columns', 1527526652),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1527333924),
('m180526_192602_post', 1527416431),
('m180527_101004_term', 1527416431),
('m180527_101519_term_relationships', 1527416490),
('m180609_175433_comment', 1528568094),
('m180610_120839_block', 1528633045),
('m180617_171832_subcribe', 1529256010),
('m180618_134821_contact', 1529338874),
('m180620_162525_seo', 1529516714),
('m180628_232623_product', 1530327742),
('m180630_005423_cart', 1530327742),
('m180630_030638_order', 1530328481),
('m180630_221049_order_item', 1530405657),
('m180703_084749_media', 1530608314),
('m180703_221010_post_type', 1531565608),
('m180703_221010_product_type', 1531923378),
('m180703_221010_product_type_meta', 1533028294),
('m180703_221010_term_of_post_type', 1532093576),
('m180703_221010_term_of_product_type', 1532093576),
('m180703_221010_term_type', 1532070401),
('m180703_221020_favorites', 1533462054),
('m180703_221020_meta', 1533175669),
('m180703_221020_product_meta', 1533028295),
('m180703_221025_optimize_post_and_product_table', 1536559081),
('m180703_221026_project', 1536574653),
('m180703_221027_mail_transport', 1536829368),
('m180703_221030_user_setting', 1536913633),
('m180703_221040_customer', 1537691110),
('m180703_221040_customer_billing_address', 1537691131),
('m180703_221040_customer_note', 1537694773),
('m180703_221040_customer_reminders', 1537694773),
('m180703_221040_customer_shipping_address', 1537691199),
('m180703_221041_product_unit', 1537950953),
('m180703_221041_product_unit_equivalent', 1537950953),
('m180703_221042_employee', 1538037114),
('m180703_221042_supplier', 1538141648),
('m180703_221043_warehouse', 1538323257),
('m180703_221055_warehouse_voucher', 1538477733),
('m180703_221056_warehouse_voucher_items', 1539603418),
('m180703_221057_warehouse_product', 1539580968),
('m180703_221058_product_price_tracking', 1545227021);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(19) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` int(19) DEFAULT NULL,
  `feature_img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'public',
  `comment_status` varchar(25) DEFAULT 'open',
  `post_parent` int(19) DEFAULT NULL,
  `post_type` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `assign_with` int(19) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `slug`, `content`, `author`, `feature_img`, `status`, `comment_status`, `post_parent`, `post_type`, `language`, `assign_with`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa', 'ket-hop-cac-loai-trai-cay-nay-se-cuc-giau-chat-chong-oxy-hoa-ai-muon-khoe-dep-tu-trong-ra-ngoai-thi-nen-uong-ngay', '<p>C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp nước cho cơ thể hiệu quả trong những ng&agrave;y nắng n&oacute;ng, đồng thời cung cấp nhiều vitamin, kho&aacute;ng chất cần thiết cho cơ thể. Nhưng c&oacute; một thực tế m&agrave; bạn n&ecirc;n biết l&agrave; nước &eacute;p tr&aacute;i c&acirc;y chứa rất nhiều chất chống oxy h&oacute;a, cực c&oacute; lợi cho cơ thể của bạn v&agrave; bảo vệ cơ thể tốt nhất chống lại c&aacute;c gốc tự do g&acirc;y ra nhiều bệnh kh&aacute;c nhau.</p><div type=\"Photo\"><a data-fancybox-group=\"img-lightbox\" href=\"https://kenh14cdn.com/2018/9/28/photo-1-1538108834689879038243.jpg\" target=\"_blank\" title=\"\"><img src=\"/uploads/2018/11/17/054020-1542451220430.png\" alt=\"Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa: Ai muốn khỏe đẹp từ trong ra ngoài thì nên uống ngay - Ảnh 1.\" title=\"Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa: Ai muốn khỏe đẹp từ trong ra ngoài thì nên uống ngay - Ảnh 1.\" rel=\"lightbox\" type=\"photo\" width=\"\" height=\"\" class=\"fr-fic fr-dii\"></a></div><p>Chất chống oxy h&oacute;a l&agrave; những chất bảo vệ c&aacute;c tế b&agrave;o của cơ thể khỏi sự hư hại gốc tự do xảy ra do tiếp x&uacute;c với h&oacute;a chất, h&uacute;t thuốc v&agrave; &ocirc; nhiễm&hellip; Chất chống oxy h&oacute;a cũng l&agrave;m giảm nguy cơ nhiễm tr&ugrave;ng v&agrave; ung thư v&agrave; cũng tốt cho sức khỏe tim mạch của bạn. C&aacute;c chất chống oxy h&oacute;a phổ biến nhất được t&igrave;m thấy trong c&aacute;c loại tr&aacute;i c&acirc;y l&agrave; lycopene, anthocyanin, flavonol, vitamin C, vitamin E, vitamin A, resveratrol v&agrave; tannin.</p><p>V&igrave; vậy, để c&oacute; được một loạt c&aacute;c chất chống oxy h&oacute;a từ chế độ ăn uống, bạn c&oacute; thể thử kết hợp c&aacute;c loại tr&aacute;i c&acirc;y kh&aacute;c nhau trong khi l&agrave;m nước &eacute;p hoặc ăn nhiều loại quả c&ugrave;ng l&uacute;c. Một số bộ đ&ocirc;i tr&aacute;i c&acirc;y kết hợp đem lại khả năng chống oxy h&oacute;a tuyệt vời l&agrave;:</p>', 1, 'uploads/2018/11/17/054256-blog-1.jpg', 'public', 'enable', 0, 'post', 'vi-VN', 0, '2018-11-17 11:03:43', '0000-00-00 00:00:00', NULL, 1),
(2, '9 loại trái cây Low-carb để giảm cân bạn nên thử ngay', '9-loai-trai-cay-low-carb-de-giam-can-ban-nen-thu-ngay', '<p>C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp nước cho cơ thể hiệu quả trong những ng&agrave;y nắng n&oacute;ng, đồng thời cung cấp nhiều vitamin, kho&aacute;ng chất cần thiết cho cơ thể. Nhưng c&oacute; một thực tế m&agrave; bạn n&ecirc;n biết l&agrave; nước &eacute;p tr&aacute;i c&acirc;y chứa rất nhiều chất chống oxy h&oacute;a, cực c&oacute; lợi cho cơ thể của bạn v&agrave; bảo vệ cơ thể tốt nhất chống lại c&aacute;c gốc tự do g&acirc;y ra nhiều bệnh kh&aacute;c nhau.</p><div type=\"Photo\"><a data-fancybox-group=\"img-lightbox\" href=\"https://kenh14cdn.com/2018/9/28/photo-1-1538108834689879038243.jpg\" target=\"_blank\" title=\"\"><img src=\"/uploads/2018/11/17/054020-1542451220430.png\" alt=\"Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa: Ai muốn khỏe đẹp từ trong ra ngoài thì nên uống ngay - Ảnh 1.\" title=\"Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa: Ai muốn khỏe đẹp từ trong ra ngoài thì nên uống ngay - Ảnh 1.\" rel=\"lightbox\" type=\"photo\" width=\"\" height=\"\" class=\"fr-fic fr-dii\"></a></div><p>Chất chống oxy h&oacute;a l&agrave; những chất bảo vệ c&aacute;c tế b&agrave;o của cơ thể khỏi sự hư hại gốc tự do xảy ra do tiếp x&uacute;c với h&oacute;a chất, h&uacute;t thuốc v&agrave; &ocirc; nhiễm&hellip; Chất chống oxy h&oacute;a cũng l&agrave;m giảm nguy cơ nhiễm tr&ugrave;ng v&agrave; ung thư v&agrave; cũng tốt cho sức khỏe tim mạch của bạn. C&aacute;c chất chống oxy h&oacute;a phổ biến nhất được t&igrave;m thấy trong c&aacute;c loại tr&aacute;i c&acirc;y l&agrave; lycopene, anthocyanin, flavonol, vitamin C, vitamin E, vitamin A, resveratrol v&agrave; tannin.</p><p>V&igrave; vậy, để c&oacute; được một loạt c&aacute;c chất chống oxy h&oacute;a từ chế độ ăn uống, bạn c&oacute; thể thử kết hợp c&aacute;c loại tr&aacute;i c&acirc;y kh&aacute;c nhau trong khi l&agrave;m nước &eacute;p hoặc ăn nhiều loại quả c&ugrave;ng l&uacute;c. Một số bộ đ&ocirc;i tr&aacute;i c&acirc;y kết hợp đem lại khả năng chống oxy h&oacute;a tuyệt vời l&agrave;:</p>', 1, 'uploads/2018/11/17/054343-blog-2.jpg', 'public', 'enable', 0, 'post', 'vi-VN', 0, '2018-11-17 10:43:43', '0000-00-00 00:00:00', NULL, 1),
(3, 'Các loại trái cây cực giàu chất xơ, ăn vào chỉ có xuống cân vèo vèo', 'cac-loai-trai-cay-cuc-giau-chat-xo-an-vao-chi-co-xuong-can-veo-veo', '<p>C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp nước cho cơ thể hiệu quả trong những ng&agrave;y nắng n&oacute;ng, đồng thời cung cấp nhiều vitamin, kho&aacute;ng chất cần thiết cho cơ thể. Nhưng c&oacute; một thực tế m&agrave; bạn n&ecirc;n biết l&agrave; nước &eacute;p tr&aacute;i c&acirc;y chứa rất nhiều chất chống oxy h&oacute;a, cực c&oacute; lợi cho cơ thể của bạn v&agrave; bảo vệ cơ thể tốt nhất chống lại c&aacute;c gốc tự do g&acirc;y ra nhiều bệnh kh&aacute;c nhau.</p><div type=\"Photo\"><a data-fancybox-group=\"img-lightbox\" href=\"https://kenh14cdn.com/2018/9/28/photo-1-1538108834689879038243.jpg\" target=\"_blank\" title=\"\"><img src=\"/uploads/2018/11/17/054020-1542451220430.png\" alt=\"Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa: Ai muốn khỏe đẹp từ trong ra ngoài thì nên uống ngay - Ảnh 1.\" title=\"Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa: Ai muốn khỏe đẹp từ trong ra ngoài thì nên uống ngay - Ảnh 1.\" rel=\"lightbox\" type=\"photo\" width=\"\" height=\"\" class=\"fr-fic fr-dii\"></a></div><p>Chất chống oxy h&oacute;a l&agrave; những chất bảo vệ c&aacute;c tế b&agrave;o của cơ thể khỏi sự hư hại gốc tự do xảy ra do tiếp x&uacute;c với h&oacute;a chất, h&uacute;t thuốc v&agrave; &ocirc; nhiễm&hellip; Chất chống oxy h&oacute;a cũng l&agrave;m giảm nguy cơ nhiễm tr&ugrave;ng v&agrave; ung thư v&agrave; cũng tốt cho sức khỏe tim mạch của bạn. C&aacute;c chất chống oxy h&oacute;a phổ biến nhất được t&igrave;m thấy trong c&aacute;c loại tr&aacute;i c&acirc;y l&agrave; lycopene, anthocyanin, flavonol, vitamin C, vitamin E, vitamin A, resveratrol v&agrave; tannin.</p><p>V&igrave; vậy, để c&oacute; được một loạt c&aacute;c chất chống oxy h&oacute;a từ chế độ ăn uống, bạn c&oacute; thể thử kết hợp c&aacute;c loại tr&aacute;i c&acirc;y kh&aacute;c nhau trong khi l&agrave;m nước &eacute;p hoặc ăn nhiều loại quả c&ugrave;ng l&uacute;c. Một số bộ đ&ocirc;i tr&aacute;i c&acirc;y kết hợp đem lại khả năng chống oxy h&oacute;a tuyệt vời l&agrave;:</p>', 1, 'uploads/2018/11/17/054413-blog-3.jpg', 'public', 'enable', 0, 'post', 'vi-VN', 0, '2018-11-17 10:44:13', '0000-00-00 00:00:00', NULL, 1),
(4, 'Táo là loại trái cây \"vàng\" cho sức khỏe nhưng 100% chúng ta đều mắc sai lầm này khi ăn', 'tao-la-loai-trai-cay-vang-cho-suc-khoe-nhung-100-chung-ta-deu-mac-sai-lam-nay-khi-an', '<p>C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp nước cho cơ thể hiệu quả trong những ng&agrave;y nắng n&oacute;ng, đồng thời cung cấp nhiều vitamin, kho&aacute;ng chất cần thiết cho cơ thể. Nhưng c&oacute; một thực tế m&agrave; bạn n&ecirc;n biết l&agrave; nước &eacute;p tr&aacute;i c&acirc;y chứa rất nhiều chất chống oxy h&oacute;a, cực c&oacute; lợi cho cơ thể của bạn v&agrave; bảo vệ cơ thể tốt nhất chống lại c&aacute;c gốc tự do g&acirc;y ra nhiều bệnh kh&aacute;c nhau.</p><div type=\"Photo\"><a data-fancybox-group=\"img-lightbox\" href=\"https://kenh14cdn.com/2018/9/28/photo-1-1538108834689879038243.jpg\" target=\"_blank\" title=\"\"><img src=\"/uploads/2018/11/17/054020-1542451220430.png\" alt=\"Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa: Ai muốn khỏe đẹp từ trong ra ngoài thì nên uống ngay - Ảnh 1.\" title=\"Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa: Ai muốn khỏe đẹp từ trong ra ngoài thì nên uống ngay - Ảnh 1.\" rel=\"lightbox\" type=\"photo\" width=\"\" height=\"\" class=\"fr-fic fr-dii\"></a></div><p>Chất chống oxy h&oacute;a l&agrave; những chất bảo vệ c&aacute;c tế b&agrave;o của cơ thể khỏi sự hư hại gốc tự do xảy ra do tiếp x&uacute;c với h&oacute;a chất, h&uacute;t thuốc v&agrave; &ocirc; nhiễm&hellip; Chất chống oxy h&oacute;a cũng l&agrave;m giảm nguy cơ nhiễm tr&ugrave;ng v&agrave; ung thư v&agrave; cũng tốt cho sức khỏe tim mạch của bạn. C&aacute;c chất chống oxy h&oacute;a phổ biến nhất được t&igrave;m thấy trong c&aacute;c loại tr&aacute;i c&acirc;y l&agrave; lycopene, anthocyanin, flavonol, vitamin C, vitamin E, vitamin A, resveratrol v&agrave; tannin.</p><p>V&igrave; vậy, để c&oacute; được một loạt c&aacute;c chất chống oxy h&oacute;a từ chế độ ăn uống, bạn c&oacute; thể thử kết hợp c&aacute;c loại tr&aacute;i c&acirc;y kh&aacute;c nhau trong khi l&agrave;m nước &eacute;p hoặc ăn nhiều loại quả c&ugrave;ng l&uacute;c. Một số bộ đ&ocirc;i tr&aacute;i c&acirc;y kết hợp đem lại khả năng chống oxy h&oacute;a tuyệt vời l&agrave;:</p>', 1, 'uploads/2018/11/17/054451-blog-4.jpg', 'public', 'enable', 0, 'post', 'vi-VN', 0, '2018-11-17 10:44:51', '0000-00-00 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_type`
--

CREATE TABLE `post_type` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_type`
--

INSERT INTO `post_type` (`id`, `name`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'post', '2018-07-14 10:53:28', '0000-00-00 00:00:00', NULL, NULL),
(2, 'page', '2018-07-14 11:03:49', '0000-00-00 00:00:00', NULL, NULL),
(3, 'portfolio', '2018-07-14 11:04:14', '0000-00-00 00:00:00', NULL, NULL),
(4, 'Recipes', '2018-11-16 09:45:15', '2018-11-16 09:45:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(19) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `author` int(19) DEFAULT NULL,
  `feature_img` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `quantity` float DEFAULT '-1',
  `status` varchar(255) DEFAULT 'Public',
  `comment_status` varchar(25) DEFAULT 'Open',
  `rating_status` varchar(25) DEFAULT 'Open',
  `promotional_price` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `unit` varchar(255) DEFAULT '1 product',
  `smallest_unit` float NOT NULL DEFAULT '1',
  `currency_unit` varchar(255) NOT NULL DEFAULT 'USD',
  `gallery` text,
  `product_parent` int(19) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `assign_with` int(19) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `slug`, `description`, `content`, `author`, `feature_img`, `sku`, `quantity`, `status`, `comment_status`, `rating_status`, `promotional_price`, `price`, `unit`, `smallest_unit`, `currency_unit`, `gallery`, `product_parent`, `product_type`, `language`, `assign_with`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Cam Mỹ Vàng', 'cam-my-vang', 'Xoài dài giống Đài Loan là giống xoài ăn xanh được nhập từ Thái Lan. Vỏ trái có màu xanh đậm và rất dày, trọng lượng trái trung bình 300 – 350gr, khi trái chín  có vị ngọt. Xoài dài giống Đài Loan ăn rất giòn và thơm; do đó bạn có thể dùng ăn liền hoặc chế biến nhiều món ăn khác nhau từ xoài.', '<p><strong>Xo&agrave;i d&agrave;i giống Đ&agrave;i Loan</strong> l&agrave; giống xo&agrave;i ăn xanh được nhập từ Th&aacute;i Lan. Vỏ tr&aacute;i c&oacute; m&agrave;u xanh đậm v&agrave; rất d&agrave;y, trọng lượng tr&aacute;i trung b&igrave;nh 300 &ndash; 350gr, khi tr&aacute;i ch&iacute;n &nbsp;c&oacute; vị ngọt.&nbsp;<strong>Xo&agrave;i d&agrave;i giống Đ&agrave;i Loan</strong> ăn rất gi&ograve;n v&agrave; thơm; do đ&oacute; bạn c&oacute; thể d&ugrave;ng ăn liền hoặc chế biến nhiều m&oacute;n ăn kh&aacute;c nhau từ xo&agrave;i.</p><p>&nbsp;</p><p><img src=\"/uploads/2018/11/16/040441-1542359079662.png\" class=\"fr-fic fr-dii\"></p><p><em>Xo&agrave;i d&agrave;i giống Đ&agrave;i Loan</em></p><p>&nbsp;</p><p><strong>Xo&agrave;i d&agrave;i giống Đ&agrave;i Loan</strong> l&agrave; loại tr&aacute;i c&acirc;y rất gi&agrave;u vitamin A, C v&agrave; D. Với vị ngọt pha ch&uacute;t vị chua đặc trưng, xo&agrave;i keo được nhiều đối tượng người ti&ecirc;u d&ugrave;ng y&ecirc;u th&iacute;ch. Bạn c&oacute; thể chọn <strong>Xo&agrave;i d&agrave;i giống Đ&agrave;i Loan</strong> non, da xanh chưa ngả sang v&agrave;ng để chế biến c&aacute;c m&oacute;n ăn như gỏi xo&agrave;i, xo&agrave;i ng&acirc;m chua&hellip; Nếu người ti&ecirc;u d&ugrave;ng ưa th&iacute;ch ăn <strong>Xo&agrave;i d&agrave;i giống Đ&agrave;i Loan</strong> ch&iacute;n m&agrave; kh&ocirc;ng mua được loại như &yacute; muốn, c&oacute; thể mua xo&agrave;i keo gi&agrave;, bỏ trong t&uacute;i giấy, bảo quản đến khi đạt độ ch&iacute;n t&ugrave;y &yacute; th&iacute;ch đem ra d&ugrave;ng để xay sinh tố hay l&agrave;m ch&egrave;, b&aacute;nh... đều rất thơm ngon.</p><p>&nbsp;</p><hr><p><strong>Gợi &yacute; một số m&oacute;n ăn ngon chế biến từ xo&agrave;i</strong></p><p>Bạn c&oacute; thể sử dụng xo&agrave;i&nbsp;để l&agrave;m m&oacute;n ăn tr&aacute;ng miệng, bổ dưỡng cho cả gia đ&igrave;nh sau những bữa cơm đầm ấm. Ngo&agrave;i ra, xo&agrave;i&nbsp;cũng c&oacute; thể d&ugrave;ng để chế biến những m&oacute;n ăn thơm ngon, tốt cho sức khỏe như:</p><p>&nbsp;</p><p><img src=\"/uploads/2018/11/16/040439-1542359079204.png\" class=\"fr-fic fr-dii\"></p><p><em>Xo&agrave;i dầm</em></p><p>&nbsp;</p><p><img src=\"/uploads/2018/11/16/040440-1542359079480.png\" class=\"fr-fic fr-dii\"></p><p><em>Salad xo&agrave;i</em></p>', 1, 'uploads/2018/11/16/041532-cam-my-vang.png', 'CAMMYVANG01', 1000, 'public', 'enable', 'enable', 50000, 55000, 'Kg', 1, 'VND', '[\"uploads\\/2018\\/11\\/16\\/041532-cam-my-vang.png\"]', 0, 'fruit', 'vi-VN', 0, '2018-11-30 12:55:45', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `slug`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Product', 'product', '2018-10-11 11:19:01', '0000-00-00 00:00:00', 1, 1),
(2, 'Coin', 'coin', '2018-10-11 11:19:06', '0000-00-00 00:00:00', 1, 1),
(6, 'Fruit', 'fruit', '2018-11-16 08:16:23', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `customer_id` int(19) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `dead_line` datetime DEFAULT NULL,
  `date_finish` datetime DEFAULT NULL,
  `billing_type` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `id` int(11) NOT NULL,
  `channel` varchar(255) NOT NULL,
  `job` blob NOT NULL,
  `pushed_at` int(11) NOT NULL,
  `ttr` int(11) NOT NULL,
  `delay` int(11) NOT NULL DEFAULT '0',
  `priority` int(11) UNSIGNED NOT NULL DEFAULT '1024',
  `reserved_at` int(11) DEFAULT NULL,
  `attempt` int(11) DEFAULT NULL,
  `done_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(19) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `keyword` text,
  `social_image` varchar(255) DEFAULT NULL,
  `social_title` varchar(255) DEFAULT NULL,
  `social_description` varchar(255) DEFAULT NULL,
  `is_index` varchar(3) DEFAULT 'yes',
  `is_follow` varchar(3) DEFAULT 'yes',
  `obj_id` int(19) NOT NULL,
  `obj_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `title`, `slug`, `description`, `keyword`, `social_image`, `social_title`, `social_description`, `is_index`, `is_follow`, `obj_id`, `obj_type`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(33, 'Yes', 'yes', '', NULL, 'uploads/default-feature-img.png', 'Yes', '', 'yes', 'yes', 13, 'retina-ready', '2018-07-21 14:40:07', '2018-07-21 14:40:07', 1, 1),
(34, 'No', 'no', '', NULL, 'uploads/default-feature-img.png', 'No', '', 'yes', 'yes', 14, 'retina-ready', '2018-07-21 14:42:28', '2018-07-21 14:42:28', 1, 1),
(54, 'Home Page', '/', 'TheCatDev Home Page', NULL, NULL, 'Home Page', 'TheCatDev Home Page', 'yes', 'yes', 0, 'home_page', '2018-07-30 03:38:43', '2018-07-30 03:38:43', 1, 1),
(57, 'Collection', 'collection', '', NULL, 'uploads/default-feature-img.png', 'Collection', '', 'yes', 'yes', 16, 'category', '2018-08-02 08:22:48', '2018-08-02 08:22:48', 1, 1),
(59, '9 loại trái cây Low-carb để giảm cân bạn nên thử ngay', '9-loai-trai-cay-low-carb-de-giam-can-ban-nen-thu-ngay', 'C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp ', NULL, 'uploads/2018/11/17/054343-blog-2.jpg', '9 loại trái cây Low-carb để giảm cân bạn nên thử ngay', 'C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp ', 'yes', 'yes', 2, 'post', '2018-11-17 10:43:43', '2018-11-17 10:43:43', 1, 1),
(60, 'Các loại trái cây cực giàu chất xơ, ăn vào chỉ có xuống cân vèo vèo', 'cac-loai-trai-cay-cuc-giau-chat-xo-an-vao-chi-co-xuong-can-veo-veo', 'C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp ', NULL, 'uploads/2018/11/17/054413-blog-3.jpg', 'Các loại trái cây cực giàu chất xơ, ăn vào chỉ có xuống cân vèo vèo', 'C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp ', 'yes', 'yes', 3, 'post', '2018-11-17 10:44:13', '2018-11-17 10:44:13', 1, 1),
(61, 'Táo là loại trái cây \"vàng\" cho sức khỏe nhưng 100% chúng ta đều mắc sai lầm này khi ăn', 'tao-la-loai-trai-cay-vang-cho-suc-khoe-nhung-100-chung-ta-deu-mac-sai-lam-nay-khi-an', 'C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp ', NULL, 'uploads/2018/11/17/054451-blog-4.jpg', 'Táo là loại trái cây \"vàng\" cho sức khỏe nhưng 100% chúng ta đều mắc sai lầm này khi ăn', 'C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp ', 'yes', 'yes', 4, 'post', '2018-11-17 10:44:51', '2018-11-17 10:44:51', 1, 1),
(62, 'Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa', 'ket-hop-cac-loai-trai-cay-nay-se-cuc-giau-chat-chong-oxy-hoa-ai-muon-khoe-dep-tu-trong-ra-ngoai-thi-nen-uong-ngay', 'C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp ', NULL, 'uploads/2018/11/17/054256-blog-1.jpg', 'Kết hợp các loại trái cây này sẽ cực giàu chất chống oxy hóa', 'C&oacute; ai lại kh&ocirc;ng th&iacute;ch một ly nước tr&aacute;i c&acirc;y m&aacute;t mẻ? Ch&uacute;ng ta vẫn thường thưởng thức ch&uacute;ng để l&agrave;m dịu cơn kh&aacute;t, đem lại sự sảng kho&aacute;i v&agrave; cấp ', 'yes', 'yes', 1, 'post', '2018-11-17 11:03:44', '2018-11-17 11:03:44', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `type`, `section`, `key`, `value`, `status`, `description`, `created_at`, `updated_at`) VALUES
(2, 'string', 'site_configuration', 'enable_multiple_language', 'off', 1, NULL, 1527766126, 1542447408),
(3, 'string', 'site_configuration', 'app_description', 'Trái Cây Xanh Tươi', 1, NULL, 1528483340, 1545035968),
(4, 'string', 'site_configuration', 'app_favicon', 'uploads/favicon.ico', 1, NULL, 1529070620, 1536069426),
(5, 'string', 'site_configuration', 'mailer_host', 'smtp.yandex.com', 1, NULL, 1529299325, 1536737403),
(6, 'string', 'site_configuration', 'mailer_username', 'no-reply@thecatdev.com', 1, NULL, 1529299325, 1536737403),
(7, 'string', 'site_configuration', 'mailer_password', '0935145970hG', 1, NULL, 1529299325, 1536737403),
(8, 'string', 'site_configuration', 'mailer_port', '587', 1, NULL, 1529299325, 1536758039),
(9, 'string', 'site_configuration', 'mailer_encryption', 'TLS', 1, NULL, 1529299325, 1536758039),
(10, 'string', 'site_configuration', 'admin_email', 'admin@thecatdev.com', 1, NULL, 1529315199, 1536737403),
(11, 'string', 'site_configuration', 'support_email', 'support@thecatdev.com', 1, NULL, 1529315583, 1536737403),
(12, 'string', 'seo_configuration', 'index_status', 'disallow_all', 1, NULL, 1529626911, 1535186885),
(13, 'string', 'dev_configuration', 'debug_status', 'true', 1, NULL, 1529691393, 1543689572),
(14, 'string', 'dev_configuration', 'dev_mode_status', 'true', 1, NULL, 1529691843, 1543689572),
(15, 'string', 'plugin_configuration', 'e_commerce_status', 'enabled', 1, NULL, 1530235636, 1537356607),
(16, 'string', 'media_configuration', 'thumbnail_size_width', '150', 1, NULL, 1530584482, 1530584482),
(17, 'string', 'media_configuration', 'thumbnail_size_height', '150', 1, NULL, 1530584482, 1530585039),
(18, 'string', 'media_configuration', 'medium_size_width', '300', 1, NULL, 1530584482, 1530584482),
(19, 'string', 'media_configuration', 'medium_size_height', '300', 1, NULL, 1530584482, 1530584482),
(20, 'string', 'media_configuration', 'large_size_width', '1024', 1, NULL, 1530584482, 1530584482),
(21, 'string', 'media_configuration', 'large_size_height', '1024', 1, NULL, 1530584482, 1530584482),
(22, 'string', 'media_configuration', 'quality', '99', 1, NULL, 1530586637, 1531906482),
(23, 'string', 'site_configuration', 'google_analytics_tracking_code', '<script><script>', 1, NULL, 1531487714, 1531487714),
(24, 'string', 'seo_configuration', 'content_type_in_site_map', '[\"post\",\"page\",\"portfolio\",\"case-scenarios\"]', 1, NULL, 1531574988, 1531575119),
(25, 'string', 'seo_configuration', 'number_item_per_site_map', '1000', 1, NULL, 1531576669, 1531576669),
(26, 'string', 'site_configuration', 'app_logo', 'uploads/default-logo.png', 1, NULL, 1536069426, 1536069706),
(27, 'string', 'site_status', 'coming_soon_status', 'disable', 1, NULL, 1536081628, 1545734510),
(28, 'string', 'site_status', 'coming_soon_time_release', '01-01-2019 1:0:0', 1, NULL, 1536082700, 1544868545);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(19) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'thienhungho@gmail.com', '2018-06-17 18:09:03', '2018-06-17 18:09:03', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `author` int(19) DEFAULT NULL,
  `feature_img` varchar(255) DEFAULT NULL,
  `term_parent` int(19) DEFAULT NULL,
  `term_type` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `assign_with` int(19) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `name`, `slug`, `description`, `author`, `feature_img`, `term_parent`, `term_type`, `language`, `assign_with`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Mẹo', 'meo', NULL, 1, 'uploads/default-feature-img.png', 0, 'category', 'vi-VN', 0, '2018-11-17 10:42:57', '0000-00-00 00:00:00', 1, 1),
(2, 'Dâu tây', 'dau-tay', NULL, 1, 'uploads/default-feature-img.png', 0, 'tag', 'vi-VN', 0, '2018-11-17 10:42:57', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `term_of_post_type`
--

CREATE TABLE `term_of_post_type` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `input_type` varchar(255) NOT NULL DEFAULT 'text',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term_of_post_type`
--

INSERT INTO `term_of_post_type` (`id`, `name`, `post_type`, `input_type`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'category', 'post', 'text', '2018-07-21 12:42:05', '0000-00-00 00:00:00', NULL, NULL),
(2, 'tag', 'post', 'text', '2018-07-21 12:42:05', '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `term_of_product_type`
--

CREATE TABLE `term_of_product_type` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `input_type` varchar(255) NOT NULL DEFAULT 'text',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term_of_product_type`
--

INSERT INTO `term_of_product_type` (`id`, `name`, `product_type`, `input_type`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'color', 'Product', 'text', '2018-10-11 05:50:43', '2018-10-11 05:50:43', NULL, NULL),
(3, 'size', 'Product', 'text', '2018-10-11 05:50:56', '2018-10-11 05:50:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `term_relationships`
--

CREATE TABLE `term_relationships` (
  `id` int(19) NOT NULL,
  `term_id` int(19) NOT NULL,
  `term_type` varchar(255) NOT NULL,
  `obj_id` int(19) NOT NULL,
  `obj_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term_relationships`
--

INSERT INTO `term_relationships` (`id`, `term_id`, `term_type`, `obj_id`, `obj_type`) VALUES
(3, 1, 'category', 2, 'post'),
(4, 2, 'tag', 2, 'post'),
(5, 1, 'category', 3, 'post'),
(6, 2, 'tag', 3, 'post'),
(7, 1, 'category', 4, 'post'),
(8, 2, 'tag', 4, 'post'),
(9, 1, 'category', 1, 'post'),
(10, 2, 'tag', 1, 'post');

-- --------------------------------------------------------

--
-- Table structure for table `term_type`
--

CREATE TABLE `term_type` (
  `id` int(19) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term_type`
--

INSERT INTO `term_type` (`id`, `name`, `slug`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Category', 'category', '2018-10-11 08:17:26', '0000-00-00 00:00:00', NULL, NULL),
(2, 'Tag', 'tag', '2018-10-11 08:17:35', '0000-00-00 00:00:00', NULL, NULL),
(6, 'Color', 'color', '2018-10-11 08:17:44', '2018-07-21 06:51:33', NULL, NULL),
(7, 'Product category', 'product-category', '2018-10-11 08:17:56', '2018-07-30 12:13:35', NULL, NULL),
(8, 'Product tag', 'product-tag', '2018-10-11 08:18:12', '2018-07-30 12:13:40', NULL, NULL),
(9, 'Size', 'size', '2018-10-11 08:18:22', '2018-10-11 05:50:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `bio` text,
  `company` varchar(255) DEFAULT NULL,
  `tax_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `full_name`, `job`, `bio`, `company`, `tax_number`, `address`, `avatar`, `phone`, `birth_date`, `facebook_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'thienhung', 'lI9d-6MHdoBY8qK64huY8G24EORIK1jJ', '$2y$13$FO7XKkeWTNX4McjBxtL6oOFULoT8CLdOqf/xG2e3/NPNXtV7g9B9q', 'dyl_nVXx68Ij0EueqZ2tOr2T5kiFaOXa_1545733805', 'thienhungho@gmail.com', 'Hồ Thiên Hùng', 'Dev', 'Love Life', 'TheCatDev', '1249203949', 'Danang VietNam', 'uploads/2018/07/05/120230-1221505.png', '0905221416', '1995-05-01', 'http://facebook.com/thienhungho999', 10, 1527344444, 2147483647),
(4, 'boss', 'LdiAS2RWvrLhN7PIQnLhyBZjvSUE4FCH', '$2y$13$d2uUGIMU0Xe9gfbO.xxc3uJI/yj3LzgaIMdusniJ19/HWsIZo4B4i', NULL, 'boss@gmail.com', 'Boss', 'Counting money', 'Love Dev', '', '', '', 'uploads/default-avatar.png', '', NULL, '', 10, 1528565569, 2147483647),
(5, 'banhmicoba111tranphu', '6bITh2rHSzx5fxHYgnohOynIew4D9Sg5', '$2y$13$H74ZVfxvKMCNT99FEEJPN.VQPwUnptKQnOVMLU6Fc3QljlwQE.y3S', NULL, 'youremailaddress@example.com', 'Bánh mì cô Ba', '', '', 'Bánh mì cô Ba', '', '111 Trần Phú', 'uploads/default-avatar.png', '+84905875508', NULL, '', 10, 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_setting`
--

CREATE TABLE `user_setting` (
  `id` int(19) NOT NULL,
  `user_id` int(19) NOT NULL,
  `section` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(19) DEFAULT NULL,
  `updated_by` int(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `auth_assignment_user_id_idx` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_migration`
--
ALTER TABLE `auth_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `billing_type`
--
ALTER TABLE `billing_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_b_author` (`author`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_c_author` (`author`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `language_source`
--
ALTER TABLE `language_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_translate`
--
ALTER TABLE `language_translate`
  ADD PRIMARY KEY (`id`,`language`),
  ADD KEY `language_translate_idx_language` (`language`);

--
-- Indexes for table `mail_transport`
--
ALTER TABLE `mail_transport`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_p_author` (`author`),
  ADD KEY `fk_p_pt` (`post_type`),
  ADD KEY `idx_post_status` (`status`),
  ADD KEY `idx_post_language` (`language`),
  ADD KEY `idx_post_assign_with` (`assign_with`);

--
-- Indexes for table `post_type`
--
ALTER TABLE `post_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_prd_author` (`author`),
  ADD KEY `fk_prod_pt` (`product_type`),
  ADD KEY `idx_product_status` (`status`),
  ADD KEY `idx_product_language` (`language`),
  ADD KEY `idx_product_assign_with` (`assign_with`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_project_customer` (`customer_id`),
  ADD KEY `fk_project_bt` (`billing_type`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `channel` (`channel`),
  ADD KEY `reserved_at` (`reserved_at`),
  ADD KEY `priority` (`priority`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_t_author` (`author`),
  ADD KEY `fk_t_tt` (`term_type`);

--
-- Indexes for table `term_of_post_type`
--
ALTER TABLE `term_of_post_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_topt_post_type` (`post_type`);

--
-- Indexes for table `term_of_product_type`
--
ALTER TABLE `term_of_product_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_topt_pt` (`product_type`);

--
-- Indexes for table `term_relationships`
--
ALTER TABLE `term_relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tr_t` (`term_id`);

--
-- Indexes for table `term_type`
--
ALTER TABLE `term_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `user_setting`
--
ALTER TABLE `user_setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_setting_section` (`section`),
  ADD KEY `idx_user_setting_key` (`key`),
  ADD KEY `fk_ut_u` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_type`
--
ALTER TABLE `billing_type`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `language_source`
--
ALTER TABLE `language_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1184;

--
-- AUTO_INCREMENT for table `mail_transport`
--
ALTER TABLE `mail_transport`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_type`
--
ALTER TABLE `post_type`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `term_of_post_type`
--
ALTER TABLE `term_of_post_type`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `term_of_product_type`
--
ALTER TABLE `term_of_product_type`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `term_relationships`
--
ALTER TABLE `term_relationships`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `term_type`
--
ALTER TABLE `term_type`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_setting`
--
ALTER TABLE `user_setting`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `fk_b_author` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_c_author` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `language_translate`
--
ALTER TABLE `language_translate`
  ADD CONSTRAINT `language_translate_ibfk_1` FOREIGN KEY (`language`) REFERENCES `language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `language_translate_ibfk_2` FOREIGN KEY (`id`) REFERENCES `language_source` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_p_author` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_pt` FOREIGN KEY (`post_type`) REFERENCES `post_type` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_prd_author` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prod_pt` FOREIGN KEY (`product_type`) REFERENCES `product_type` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_project_bt` FOREIGN KEY (`billing_type`) REFERENCES `billing_type` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_project_customer` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `term`
--
ALTER TABLE `term`
  ADD CONSTRAINT `fk_t_author` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_t_tt` FOREIGN KEY (`term_type`) REFERENCES `term_type` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `term_of_post_type`
--
ALTER TABLE `term_of_post_type`
  ADD CONSTRAINT `fk_topt_post_type` FOREIGN KEY (`post_type`) REFERENCES `post_type` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `term_of_product_type`
--
ALTER TABLE `term_of_product_type`
  ADD CONSTRAINT `fk_topt_pt` FOREIGN KEY (`product_type`) REFERENCES `product_type` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `term_relationships`
--
ALTER TABLE `term_relationships`
  ADD CONSTRAINT `fk_tr_t` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_setting`
--
ALTER TABLE `user_setting`
  ADD CONSTRAINT `fk_ut_u` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
