-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221028.4ba2a88e73
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 11:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibsar`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinned` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `slug`, `summary`, `content`, `seo_title`, `seo_description`, `seo_keywords`, `pinned`, `author`, `img`, `created_at`, `updated_at`) VALUES
(17, 2, 'تصحيح النظر', 'tshyh-alnthr', 'تصحيح النظر: جراحات عمليات تصحيح النظر لها عدة أنواع التي...', '<p>تصحيح النظر: جراحات عمليات تصحيح النظر لها عدة أنواع التي تعمل على إعادة تشكيل القرنية من أجل السماح للضوء بالمرور عبرها وهي تفيد حالات قصر النظر وطول النظر والاستجماتيزم . في الإبصار الطبية نقدم أحدث التقنيات وأعلى دقة في علاج اضطرابات النظر .</p>', 'تصحيح النظر', 'تصحيح النظر', 'تصحيح النظر', '1', 'someone', '1672087278.jpg', '2022-12-26 18:41:18', '2022-12-26 18:41:18'),
(18, 3, 'الماء البيضاء', 'almaaa-albydaaa', 'الماء الأبيض (الساد) ويسمى أيضاً (الكتاراكت) وهو عتامة عدسة العين...', '<p>الماء الأبيض (الساد) ويسمى أيضاً (الكتاراكت) وهو عتامة عدسة العين أي تعكر في عدسة العين السليمة لتصبح الرؤية غير واضحة ؛ حيث تكون الرؤية غائمة تشبه النظر من نافذة ضبابية أو النظر من العدسات الزجاجية الذي يوجد على سطحه بخار ماء. نستخدم في الإبصار الطبية جهاز الفاكو بتقنية الترددات الصوتية أو الليزر لعلاج الماء الأبيض.</p>', 'الماء البيضاء', 'الماء البيضاء', 'الماء البيضاء', '1', 'someone', '1672088815.jpg', '2022-12-26 18:42:53', '2022-12-26 19:06:55'),
(19, 2, 'تصحيح النظر', 'tshyh-alnthr', 'تصحيح النظر: جراحات عمليات تصحيح النظر لها عدة أنواع التي...', '<p>تصحيح النظر: جراحات عمليات تصحيح النظر لها عدة أنواع التي تعمل على إعادة تشكيل القرنية من أجل السماح للضوء بالمرور عبرها وهي تفيد حالات قصر النظر وطول النظر والاستجماتيزم . في الإبصار الطبية نقدم أحدث التقنيات وأعلى دقة في علاج اضطرابات النظر .</p>', 'تصحيح النظر', 'تصحيح النظر', 'تصحيح النظر', '1', 'someone', '1672087278.jpg', '2022-12-26 18:41:18', '2022-12-26 18:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'الاخبار', 'alakhbar', '2022-12-26 18:38:45', '2022-12-26 18:38:45'),
(3, 'المدونة', 'almdon', '2022-12-26 18:38:56', '2022-12-26 18:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_show` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `job_title`, `slider_show`, `twitter`, `img`, `created_at`, `updated_at`) VALUES
(2, 'د.وافي العنزي', 'استشاري طب و جراحة الشبكية والسائل الزجاجي', '1', 'https://twitter.com/dwafialanazi?s=21&t=ZxNyRq1qW0zKZHww48hk1A', '1671915481.jpg', '2022-12-24 18:58:01', '2022-12-24 18:58:01'),
(3, 'د. حسن الكويكبي', 'استشاري طب وجراحة العيون ( إعتام عدسة العين ، الجلوكوما ، زراعة القرنية ، الجراحة الانكسارية ، أمراض سطح العين)', '1', 'https://twitter.com/alkwikbi?s=21&t=ZxNyRq1qW0zKZHww48hk1A', '1671915796.png', '2022-12-24 19:03:16', '2022-12-24 19:03:16'),
(4, 'د.نبيل شلبي', 'استشاري طب وجراحة العيون والماء الابيض وتصحيح النظر', '1', 'https://twitter.com/nabeelshalabi?s=21&t=ZxNyRq1qW0zKZHww48hk1A', '1671915872.jpg', '2022-12-24 19:04:32', '2022-12-24 19:04:32'),
(5, 'د.عبدالله الربيعي', 'استشاري طب وجراحة الشبكية والجسم الزجاجي', '0', NULL, '1671916169.png', '2022-12-24 19:09:29', '2022-12-24 19:09:29'),
(6, 'د.محمد العنزي', 'جراحة القرنية والماء الأبيض و تصحيح النظر بالليزر', '0', 'https://twitter.com/DrMohammedAlen1?t=PYXLNgv51m6jmSg1SHn0EQ&s=08', '1671916247.jpeg', '2022-12-24 19:10:47', '2022-12-24 19:10:47'),
(7, 'د.ماجد الخليفة', 'استشاري طب الأسرة MD.SBFM.ABFM', '0', NULL, '1671916302.png', '2022-12-24 19:11:42', '2022-12-24 19:11:42'),
(8, 'د.محمد نادر', 'أخصائي عام (عيون )', '0', NULL, '1671916371.png', '2022-12-24 19:12:51', '2022-12-24 19:12:51'),
(9, 'د.فهد الرويلى', 'استشاري طب وجراحة الشبكية والسائل الزجاجي والماء الابيض', '0', NULL, '1671916418.png', '2022-12-24 19:13:38', '2022-12-24 19:13:38');

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
(12, '2022_07_18_072633_create_resources_table', 1),
(13, '2022_07_24_120221_create_tax_centers_table', 1),
(17, '2022_07_28_100148_forgien_key', 1),
(118, '2014_10_12_000000_create_users_table', 2),
(119, '2014_10_12_100000_create_password_resets_table', 2),
(120, '2019_08_19_000000_create_failed_jobs_table', 2),
(121, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(122, '2022_07_17_072633_create_categories_table', 2),
(123, '2022_07_18_072633_create_articles_table', 2),
(124, '2022_07_18_072633_create_members_table', 2),
(125, '2022_07_25_083008_create_services_table', 2),
(126, '2022_07_25_102710_create_testimonials_table', 2),
(127, '2022_07_25_134316_create_settings_table', 2),
(128, '2022_07_31_080523_create_newsletters_table', 2),
(129, '2022_07_31_080554_create_subscribers_table', 2),
(130, '2022_08_13_181407_create_appointments_table', 2),
(131, '2022_12_28_100148_forgien_key', 2),
(132, '2022_12_22_074255_create_offers_table', 3),
(133, '2022_12_22_100453_create_orders_table', 3),
(134, '2022_12_26_180609_create_responsibilities_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, 'subject', 'content', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `responsibilities`
--

CREATE TABLE `responsibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responsibilities`
--

INSERT INTO `responsibilities` (`id`, `title`, `slug`, `seo_title`, `seo_description`, `seo_keywords`, `summary`, `content`, `visibility`, `img`, `created_at`, `updated_at`) VALUES
(1, 'حملة إغاثة', 'hml-aghath', 'حملة إغاثة', 'حملة إغاثة', 'حملة إغاثة', 'سعياً منّا لتطبيق قوله صلى الله عليه وسلم...', '<p><a href=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\"><img alt=\"\" src=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\" /></a>سعياً منّا لتطبيق قوله صلى الله عليه وسلم ( يا رسول الله ! أيُّ الناس أحبُّ إلى الله ؟ فقال : أحبُّ الناس إلى الله أنفعهم للناس، وأحبُّ الأعمال إلى الله عز وجل، سرور تدخله على مسلم، تكشف عنه كربة، أو تقضي عنه دينا، أو تطرد عنه جوعا، ولأن أمشي مع أخ في حاجة، أحبُّ إلي من أن أعتكف في هذا المسجد، يعني مسجد المدينة شهرا&hellip;) رواه الطبراني ولأنّ رؤيتنا تنطلق من قناعة راسخة بأن طب وجراحة العيون هو رسالة تؤدى وليست مهنة بمقابل لِتسمو هذه الرسالة بالشراكة مع المجتمع بالداخل و الخارج لتبرز الإنسانية في أجمل صورها و تبلغ تعاليم ديننا الحنيف في أبلغ معانية من خلال شراكات متعددة لرؤية أجمل . ومن جانب أوجه الشراكة المجتمعية لشركة الإبصار الطبية شاركنا مع مؤسسة البصر الخيرية ومركز الملك سلمان للإغاثة من خلال التطوع في علاج المحتاجين في الدول الفقيرة حيث تقام العديد من المخيمات الجراحية والعيادات المجانية لمحاربة العمى ورسم البسمة على المحتاجين وذلك من خلال دعم شركائنا في هذا المجال</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '6519960.jpg', '2022-12-26 17:07:39', '2022-12-26 18:36:44'),
(9, 'حملة إغاثة', 'hml-aghath', 'حملة إغاثة', 'حملة إغاثة', 'حملة إغاثة', 'سعياً منّا لتطبيق قوله صلى الله عليه وسلم...', '<p><a href=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\"><img alt=\"\" src=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\" /></a>سعياً منّا لتطبيق قوله صلى الله عليه وسلم ( يا رسول الله ! أيُّ الناس أحبُّ إلى الله ؟ فقال : أحبُّ الناس إلى الله أنفعهم للناس، وأحبُّ الأعمال إلى الله عز وجل، سرور تدخله على مسلم، تكشف عنه كربة، أو تقضي عنه دينا، أو تطرد عنه جوعا، ولأن أمشي مع أخ في حاجة، أحبُّ إلي من أن أعتكف في هذا المسجد، يعني مسجد المدينة شهرا&hellip;) رواه الطبراني ولأنّ رؤيتنا تنطلق من قناعة راسخة بأن طب وجراحة العيون هو رسالة تؤدى وليست مهنة بمقابل لِتسمو هذه الرسالة بالشراكة مع المجتمع بالداخل و الخارج لتبرز الإنسانية في أجمل صورها و تبلغ تعاليم ديننا الحنيف في أبلغ معانية من خلال شراكات متعددة لرؤية أجمل . ومن جانب أوجه الشراكة المجتمعية لشركة الإبصار الطبية شاركنا مع مؤسسة البصر الخيرية ومركز الملك سلمان للإغاثة من خلال التطوع في علاج المحتاجين في الدول الفقيرة حيث تقام العديد من المخيمات الجراحية والعيادات المجانية لمحاربة العمى ورسم البسمة على المحتاجين وذلك من خلال دعم شركائنا في هذا المجال</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '6519960.jpg', '2022-12-26 17:07:39', '2022-12-26 18:36:44'),
(10, 'حملة إغاثة', 'hml-aghath', 'حملة إغاثة', 'حملة إغاثة', 'حملة إغاثة', 'سعياً منّا لتطبيق قوله صلى الله عليه وسلم...', '<p><a href=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\"><img alt=\"\" src=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\" /></a>سعياً منّا لتطبيق قوله صلى الله عليه وسلم ( يا رسول الله ! أيُّ الناس أحبُّ إلى الله ؟ فقال : أحبُّ الناس إلى الله أنفعهم للناس، وأحبُّ الأعمال إلى الله عز وجل، سرور تدخله على مسلم، تكشف عنه كربة، أو تقضي عنه دينا، أو تطرد عنه جوعا، ولأن أمشي مع أخ في حاجة، أحبُّ إلي من أن أعتكف في هذا المسجد، يعني مسجد المدينة شهرا&hellip;) رواه الطبراني ولأنّ رؤيتنا تنطلق من قناعة راسخة بأن طب وجراحة العيون هو رسالة تؤدى وليست مهنة بمقابل لِتسمو هذه الرسالة بالشراكة مع المجتمع بالداخل و الخارج لتبرز الإنسانية في أجمل صورها و تبلغ تعاليم ديننا الحنيف في أبلغ معانية من خلال شراكات متعددة لرؤية أجمل . ومن جانب أوجه الشراكة المجتمعية لشركة الإبصار الطبية شاركنا مع مؤسسة البصر الخيرية ومركز الملك سلمان للإغاثة من خلال التطوع في علاج المحتاجين في الدول الفقيرة حيث تقام العديد من المخيمات الجراحية والعيادات المجانية لمحاربة العمى ورسم البسمة على المحتاجين وذلك من خلال دعم شركائنا في هذا المجال</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '6519960.jpg', '2022-12-26 17:07:39', '2022-12-26 18:36:44'),
(11, 'حملة إغاثة', 'hml-aghath', 'حملة إغاثة', 'حملة إغاثة', 'حملة إغاثة', 'سعياً منّا لتطبيق قوله صلى الله عليه وسلم...', '<p><a href=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\"><img alt=\"\" src=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\" /></a>سعياً منّا لتطبيق قوله صلى الله عليه وسلم ( يا رسول الله ! أيُّ الناس أحبُّ إلى الله ؟ فقال : أحبُّ الناس إلى الله أنفعهم للناس، وأحبُّ الأعمال إلى الله عز وجل، سرور تدخله على مسلم، تكشف عنه كربة، أو تقضي عنه دينا، أو تطرد عنه جوعا، ولأن أمشي مع أخ في حاجة، أحبُّ إلي من أن أعتكف في هذا المسجد، يعني مسجد المدينة شهرا&hellip;) رواه الطبراني ولأنّ رؤيتنا تنطلق من قناعة راسخة بأن طب وجراحة العيون هو رسالة تؤدى وليست مهنة بمقابل لِتسمو هذه الرسالة بالشراكة مع المجتمع بالداخل و الخارج لتبرز الإنسانية في أجمل صورها و تبلغ تعاليم ديننا الحنيف في أبلغ معانية من خلال شراكات متعددة لرؤية أجمل . ومن جانب أوجه الشراكة المجتمعية لشركة الإبصار الطبية شاركنا مع مؤسسة البصر الخيرية ومركز الملك سلمان للإغاثة من خلال التطوع في علاج المحتاجين في الدول الفقيرة حيث تقام العديد من المخيمات الجراحية والعيادات المجانية لمحاربة العمى ورسم البسمة على المحتاجين وذلك من خلال دعم شركائنا في هذا المجال</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '6519960.jpg', '2022-12-26 17:07:39', '2022-12-26 18:36:44'),
(12, 'حملة إغاثة', 'hml-aghath', 'حملة إغاثة', 'حملة إغاثة', 'حملة إغاثة', 'سعياً منّا لتطبيق قوله صلى الله عليه وسلم...', '<p><a href=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\"><img alt=\"\" src=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\" /></a>سعياً منّا لتطبيق قوله صلى الله عليه وسلم ( يا رسول الله ! أيُّ الناس أحبُّ إلى الله ؟ فقال : أحبُّ الناس إلى الله أنفعهم للناس، وأحبُّ الأعمال إلى الله عز وجل، سرور تدخله على مسلم، تكشف عنه كربة، أو تقضي عنه دينا، أو تطرد عنه جوعا، ولأن أمشي مع أخ في حاجة، أحبُّ إلي من أن أعتكف في هذا المسجد، يعني مسجد المدينة شهرا&hellip;) رواه الطبراني ولأنّ رؤيتنا تنطلق من قناعة راسخة بأن طب وجراحة العيون هو رسالة تؤدى وليست مهنة بمقابل لِتسمو هذه الرسالة بالشراكة مع المجتمع بالداخل و الخارج لتبرز الإنسانية في أجمل صورها و تبلغ تعاليم ديننا الحنيف في أبلغ معانية من خلال شراكات متعددة لرؤية أجمل . ومن جانب أوجه الشراكة المجتمعية لشركة الإبصار الطبية شاركنا مع مؤسسة البصر الخيرية ومركز الملك سلمان للإغاثة من خلال التطوع في علاج المحتاجين في الدول الفقيرة حيث تقام العديد من المخيمات الجراحية والعيادات المجانية لمحاربة العمى ورسم البسمة على المحتاجين وذلك من خلال دعم شركائنا في هذا المجال</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '6519960.jpg', '2022-12-26 17:07:39', '2022-12-26 18:36:44'),
(13, 'حملة إغاثة', 'hml-aghath', 'حملة إغاثة', 'حملة إغاثة', 'حملة إغاثة', 'سعياً منّا لتطبيق قوله صلى الله عليه وسلم...', '<p><a href=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\"><img alt=\"\" src=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\" /></a>سعياً منّا لتطبيق قوله صلى الله عليه وسلم ( يا رسول الله ! أيُّ الناس أحبُّ إلى الله ؟ فقال : أحبُّ الناس إلى الله أنفعهم للناس، وأحبُّ الأعمال إلى الله عز وجل، سرور تدخله على مسلم، تكشف عنه كربة، أو تقضي عنه دينا، أو تطرد عنه جوعا، ولأن أمشي مع أخ في حاجة، أحبُّ إلي من أن أعتكف في هذا المسجد، يعني مسجد المدينة شهرا&hellip;) رواه الطبراني ولأنّ رؤيتنا تنطلق من قناعة راسخة بأن طب وجراحة العيون هو رسالة تؤدى وليست مهنة بمقابل لِتسمو هذه الرسالة بالشراكة مع المجتمع بالداخل و الخارج لتبرز الإنسانية في أجمل صورها و تبلغ تعاليم ديننا الحنيف في أبلغ معانية من خلال شراكات متعددة لرؤية أجمل . ومن جانب أوجه الشراكة المجتمعية لشركة الإبصار الطبية شاركنا مع مؤسسة البصر الخيرية ومركز الملك سلمان للإغاثة من خلال التطوع في علاج المحتاجين في الدول الفقيرة حيث تقام العديد من المخيمات الجراحية والعيادات المجانية لمحاربة العمى ورسم البسمة على المحتاجين وذلك من خلال دعم شركائنا في هذا المجال</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '6519960.jpg', '2022-12-26 17:07:39', '2022-12-26 18:36:44'),
(14, 'حملة إغاثة', 'hml-aghath', 'حملة إغاثة', 'حملة إغاثة', 'حملة إغاثة', 'سعياً منّا لتطبيق قوله صلى الله عليه وسلم...', '<p><a href=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\"><img alt=\"\" src=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\" /></a>سعياً منّا لتطبيق قوله صلى الله عليه وسلم ( يا رسول الله ! أيُّ الناس أحبُّ إلى الله ؟ فقال : أحبُّ الناس إلى الله أنفعهم للناس، وأحبُّ الأعمال إلى الله عز وجل، سرور تدخله على مسلم، تكشف عنه كربة، أو تقضي عنه دينا، أو تطرد عنه جوعا، ولأن أمشي مع أخ في حاجة، أحبُّ إلي من أن أعتكف في هذا المسجد، يعني مسجد المدينة شهرا&hellip;) رواه الطبراني ولأنّ رؤيتنا تنطلق من قناعة راسخة بأن طب وجراحة العيون هو رسالة تؤدى وليست مهنة بمقابل لِتسمو هذه الرسالة بالشراكة مع المجتمع بالداخل و الخارج لتبرز الإنسانية في أجمل صورها و تبلغ تعاليم ديننا الحنيف في أبلغ معانية من خلال شراكات متعددة لرؤية أجمل . ومن جانب أوجه الشراكة المجتمعية لشركة الإبصار الطبية شاركنا مع مؤسسة البصر الخيرية ومركز الملك سلمان للإغاثة من خلال التطوع في علاج المحتاجين في الدول الفقيرة حيث تقام العديد من المخيمات الجراحية والعيادات المجانية لمحاربة العمى ورسم البسمة على المحتاجين وذلك من خلال دعم شركائنا في هذا المجال</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '6519960.jpg', '2022-12-26 17:07:39', '2022-12-26 18:36:44'),
(15, 'حملة إغاثة', 'hml-aghath', 'حملة إغاثة', 'حملة إغاثة', 'حملة إغاثة', 'سعياً منّا لتطبيق قوله صلى الله عليه وسلم...', '<p><a href=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\"><img alt=\"\" src=\"&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/ZAp9eJ5NmDI&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;\" /></a>سعياً منّا لتطبيق قوله صلى الله عليه وسلم ( يا رسول الله ! أيُّ الناس أحبُّ إلى الله ؟ فقال : أحبُّ الناس إلى الله أنفعهم للناس، وأحبُّ الأعمال إلى الله عز وجل، سرور تدخله على مسلم، تكشف عنه كربة، أو تقضي عنه دينا، أو تطرد عنه جوعا، ولأن أمشي مع أخ في حاجة، أحبُّ إلي من أن أعتكف في هذا المسجد، يعني مسجد المدينة شهرا&hellip;) رواه الطبراني ولأنّ رؤيتنا تنطلق من قناعة راسخة بأن طب وجراحة العيون هو رسالة تؤدى وليست مهنة بمقابل لِتسمو هذه الرسالة بالشراكة مع المجتمع بالداخل و الخارج لتبرز الإنسانية في أجمل صورها و تبلغ تعاليم ديننا الحنيف في أبلغ معانية من خلال شراكات متعددة لرؤية أجمل . ومن جانب أوجه الشراكة المجتمعية لشركة الإبصار الطبية شاركنا مع مؤسسة البصر الخيرية ومركز الملك سلمان للإغاثة من خلال التطوع في علاج المحتاجين في الدول الفقيرة حيث تقام العديد من المخيمات الجراحية والعيادات المجانية لمحاربة العمى ورسم البسمة على المحتاجين وذلك من خلال دعم شركائنا في هذا المجال</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '6519960.jpg', '2022-12-26 17:07:39', '2022-12-26 18:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `seo_title`, `seo_description`, `seo_keywords`, `summary`, `content`, `visibility`, `img`, `created_at`, `updated_at`) VALUES
(2, 'تصحيح النظر', 'tshyh-alnthr', 'تصحيح النظر', 'تصحيح النظر', 'تصحيح النظر', 'تصحيح النظر: جراحات عمليات تصحيح النظر لها عدة أنواع التي...', '<p>تصحيح النظر: جراحات عمليات تصحيح النظر لها عدة أنواع التي تعمل على إعادة تشكيل القرنية من أجل السماح للضوء بالمرور عبرها وهي تفيد حالات قصر النظر وطول النظر والاستجماتيزم . في الإبصار الطبية نقدم أحدث التقنيات وأعلى دقة في علاج اضطرابات النظر .</p>\r\n\r\n<ul>\r\n	<li>الفيمتو ليزك (Femto Lasik)</li>\r\n	<li>الليزك (LASIK)</li>\r\n	<li>ترانس إبيثيليوم (TPRK)</li>\r\n	<li>لازيك (Lasik )</li>\r\n	<li>كونتورا ليزك (Contoura LASIK)</li>\r\n	<li>التصحيح ببصمة العين ( Customized Laser)</li>\r\n	<li>زراعة العدسات التصحيحية (ICL)</li>\r\n	<li>حلقات القرنية (Corneal rings)</li>\r\n	<li>تثبيت القرنية المخروطية ( Keratoconus Crosslinking )</li>\r\n</ul>', '1', '8465321.jpg', '2022-12-26 19:15:20', '2022-12-26 19:15:20'),
(3, 'الماء الأبيض', 'almaaa-alabyd', 'الماء الأبيض', 'الماء الأبيض', 'الماء الأبيض', 'الماء الأبيض (الساد) ويسمى أيضاً (الكتاراكت) وهو عتامة عدسة العين و...', '<p>الماء الأبيض (الساد) ويسمى أيضاً (الكتاراكت) وهو عتامة عدسة العين و تعكر في عدسة العين السليمة لتصبح الرؤية غير واضحة ؛ حيث تكون الرؤية غائمة تشبه النظر من نافذة ضبابية أو النظر من العدسات الزجاجية الذي يوجد على سطحها بخار ماء.<br />\r\n<br />\r\nنستخدم في الإبصار الطبية جهاز الفاكو بتقنية الترددات الصوتية أو الليزر لعلاج الماء الأبيض.</p>', '1', '7483906.jpg', '2022-12-26 19:17:56', '2022-12-26 19:17:56'),
(4, 'الماء الأزرق( الجلوكوما)', 'almaaa-alazrk-alglokoma', 'الماء الأزرق( الجلوكوما)', 'الماء الأزرق( الجلوكوما)', 'الماء الأزرق( الجلوكوما)', 'الماء الأزرق (الجلوكوما): المياه الزرقاء أو الجلوكوما هي أحد الأمراض...', '<p>الماء الأزرق (الجلوكوما): المياه الزرقاء أو الجلوكوما هي أحد الأمراض التي تصيب العين التي تحدث نتيجة ارتفاع الضغط داخل العين بصورة غير طبيعية ويتسبب ذلك في تآكل أنسجة العصب البصري ، وهو العصب المسؤول عن حمل المعلومات من العين إلى الدماغ , مما قد يتسبب في إصابة المريض بالعمى أو فقدان البصر التام في غضون بضع سنوات.<br />\r\nنستخدم في الإبصار الطبية علاج الجلوكوما بدون جراحة بتقنية Micropulse Cyclo G6 .</p>', '1', '5274162.jpg', '2022-12-26 19:20:16', '2022-12-26 19:20:16'),
(5, 'الشبكية', 'alshbky', 'الشبكية', 'الشبكية', 'الشبكية', 'الشبكية (Retina) هي طبقة نسيجية شفافة ورقيقة تبطّن قاع العين...', '<p>الشبكية (Retina) هي طبقة نسيجية شفافة ورقيقة تبطّن قاع العين من الداخل، وتقع قريبة من العصب البصري , ودورها تحويل أشعة الضوء المنعكسة إلى إشارات ترسل إلى المخ والذي يفسرها إلى صورة مرئية , وعندما يتسبب أمر ما في الشبكية فقد يؤدي إلى تراجع قدرة النظر وفي بعض الأحيان الإصابة بالعمى .<br />\r\nنعالج في الإبصار الطبية حالات انفصال الشبكية ، إزالة النزيف الدموي ، اعتلال الشبكية الناتج عن مرض السكر و أيضاً الجسم الزجاجي.</p>', '1', '8105479.jpg', '2022-12-26 19:31:56', '2022-12-26 19:31:56'),
(6, 'القرنية', 'alkrny', 'القرنية', 'القرنية', 'القرنية', 'القرنية هي نسيج شفاف مقوس تقع في مقدمة العين من القزحية و الحدق... .', '<p>القرنية هي نسيج شفاف مقوس تقع في مقدمة العين من القزحية و الحدقة ، وبسبب الشفافية لديها قدرة على كسر الضوء .</p>\r\n\r\n<p>تتكون القرنية من خلايا و بروتين و سائل وقد تبدو هشة إلا أنها صلبة ولكنها حساسة للمس .</p>\r\n\r\n<p>نعالج في الإبصار الطبية الحالات التالية:</p>\r\n\r\n<p>● التهاب القرنية</p>\r\n\r\n<p>● خدوش القرنية</p>\r\n\r\n<p>● القرنية المخروطية</p>\r\n\r\n<p>● ندبات القرنية</p>\r\n\r\n<p>● الاجسام الغريبة في القرنية</p>\r\n\r\n<p>● زراعة القرنية</p>', '1', '2536819.jpg', '2022-12-26 19:35:19', '2022-12-26 19:35:19'),
(7, 'أعصاب العيون', 'aaasab-alaayon', 'أعصاب العيون', 'أعصاب العيون', 'أعصاب العيون', 'نقدم الخدمات التشخيصية والعلاجية للأمراض المتعلقة بأعصاب...', '<p>نقدم الخدمات التشخيصية والعلاجية للأمراض المتعلقة بأعصاب العيون و هي أمراض متعلقة بالعصب البصري أو الجهاز العصبي التي تسبب في فقدان البصر إضافة إلى الحالات المرضية التي تكون سبب في اضطراب حركة العين و الرؤية المزدوجة.</p>', '1', '2072242.png', '2022-12-26 19:39:57', '2022-12-26 19:39:57'),
(8, 'تجميل العيون', 'tgmyl-alaayon', 'تجميل العيون', 'تجميل العيون', 'تجميل العيون', 'من الخدمات التي تقدم في قسم جراحة تجميل العيون....', '<p>من الخدمات التي تقدم في قسم جراحة تجميل العيون :<br />\r\n● علاج ارتخاء الجفون<br />\r\n● علاج انقلاب الجفون<br />\r\n● إزالة الأكياس الدهنية<br />\r\n● الحشوات التجميلية</p>', '1', '3261890.jpg', '2022-12-26 19:42:07', '2022-12-26 19:42:07'),
(9, 'عيون الأطفال و الحول', 'aayon-alatfal-o-alhol', 'عيون الأطفال و الحول', 'عيون الأطفال و الحول', 'عيون الأطفال و الحول', 'نوفر التشخيص المبكر لعيوب الإبصار عند الأطفال بأحدث التقنيات....', '<p>نوفر التشخيص المبكر لعيوب الإبصار عند الأطفال بأحدث التقنيات لعلاج :<br />\r\n● حالات كسل العين<br />\r\n● الأمراض الخلقية و الوراثية<br />\r\n● حالات الحول</p>', '1', '2418169.jpg', '2022-12-26 19:46:31', '2022-12-26 19:46:31'),
(10, 'البصريات', 'albsryat', 'البصريات', 'البصريات', 'البصريات', 'متجر الإبصار الطبية للبصريات يضم مجموعة واسعة من النظارات الأنيقة....', '<p>متجر الإبصار الطبية للبصريات يضم مجموعة واسعة من النظارات الأنيقة تلبي مختلف الاحتياجات و ترضي مختلف الأذواق اطلب الآن!</p>', '1', '3558239.png', '2022-12-26 19:47:55', '2022-12-26 19:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `head_title`, `seo_title`, `seo_description`, `seo_keywords`, `address`, `location`, `email`, `phone`, `sms`, `whatsapp`, `linkedin`, `facebook`, `twitter`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'head_title', 'seo_title', 'seo_description', 'seo_keywords', 'address', 'location', 'email', 'phone', 'sms', 'whatsapp', 'linkedin', 'facebook', 'twitter', 'youtube', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'a.ismael@bluskyint.com', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job_title`, `visibility`, `content`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'web developer', '1', 'precision fantastic company', 'img', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdulrahman ismael', 'a.ismael@bluskyint.com', '2022-12-17 18:37:24', '$2y$10$smoObTvQwP.mTz58/alSeuFIncj10ol.rFsTg17EVFpUOJbmQhgnK', '1', 'Wo1Dk6WmMK', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_username_index` (`username`),
  ADD KEY `appointments_member_id_foreign` (`member_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_title_index` (`title`),
  ADD KEY `articles_slug_index` (`slug`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_title_index` (`title`),
  ADD KEY `categories_slug_index` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_name_index` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newsletters_subject_index` (`subject`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_title_index` (`title`),
  ADD KEY `offers_slug_index` (`slug`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_email_index` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `responsibilities`
--
ALTER TABLE `responsibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsibilities_title_index` (`title`),
  ADD KEY `responsibilities_slug_index` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_title_index` (`title`),
  ADD KEY `services_slug_index` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribers_email_index` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_name_index` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsibilities`
--
ALTER TABLE `responsibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
