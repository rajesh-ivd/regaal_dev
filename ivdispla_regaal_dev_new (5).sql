-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 11:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivdispla_regaal_dev_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_section_one_data`
--

CREATE TABLE `home_section_one_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_section1_title` varchar(255) NOT NULL,
  `home_section1_text` text NOT NULL,
  `home_section2_videoid` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_section_one_data`
--

INSERT INTO `home_section_one_data` (`id`, `home_section1_title`, `home_section1_text`, `home_section2_videoid`, `created_at`, `updated_at`) VALUES
(1, '1914 translation by H. Rackham', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '9823558986', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `journey`
--

CREATE TABLE `journey` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journey`
--

INSERT INTO `journey` (`id`, `year`, `title`, `created_at`, `updated_at`) VALUES
(1, '2023', 'Our Roadmap ', NULL, NULL),
(2, '2023', 'Title 1', '2023-11-02 10:15:13', '2023-11-02 10:15:13'),
(3, '2024', 'Title 2', '2023-11-02 10:15:13', '2023-11-02 10:15:13'),
(4, '2025', 'Title 3', '2023-11-02 10:15:13', '2023-11-02 10:15:13'),
(5, '2026', 'Title 4', '2023-11-02 10:15:13', '2023-11-02 10:15:13'),
(6, '2027', 'Title 5', '2023-11-02 10:15:13', '2023-11-02 10:15:13'),
(7, '2028', 'Title 6', '2023-11-02 10:15:13', '2023-11-02 10:15:13'),
(8, '2023-11-23', 'qqq', '2023-11-02 05:53:39', '2023-11-02 05:53:39'),
(9, '2023', 'aaaaxxee', '2023-11-02 05:59:04', '2023-11-02 05:59:04'),
(10, '2021', 'lorem ifsum', '2023-11-02 06:01:00', '2023-11-02 06:01:00'),
(11, '2021', 'qqq111', '2023-11-02 06:58:14', '2023-11-02 06:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_11_02_055819_create_section1_data_table', 1),
(17, '2023_11_02_080150_create_journey_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section1_data`
--

CREATE TABLE `section1_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_section1_title` varchar(255) NOT NULL,
  `home_section1_text` text NOT NULL,
  `home_section2_videoid` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_element`
--

CREATE TABLE `tbl_element` (
  `element_id` int(11) NOT NULL,
  `element_section` int(11) NOT NULL,
  `element_title` varchar(50) DEFAULT NULL,
  `element_content` text DEFAULT NULL,
  `element_target` varchar(30) DEFAULT NULL,
  `element_status` enum('active','inactive') DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_element`
--

INSERT INTO `tbl_element` (`element_id`, `element_section`, `element_title`, `element_content`, `element_target`, `element_status`) VALUES
(1, 1, 'home_section1_title', 'Hello, Welcome To Regaal Resources', 'home.php', 'active'),
(2, 1, 'home_section1_text', 'Regaal Resources Private Limited (RRPL) is a corn wet milling agri-tech company engaged in manufacturing of best quality Maize Starch and its derivative products such as Starch, Gluten, Germ and Fiber.\n\nWe started our journey selling under the <b>Lion</b> brand name which emphasizes producing the finest outputs without sacrificing quality. With the best pricing, great customer service, and the highest quality products, we have become an integral supplier to some of the leading organizations in India and South-East Asia.\n\nWe recently added the <b>Glaize</b> brand name under which we sell the finest quality Baking Powder, Custard Powder, Cornflour and Icing Sugar. \n\nWe currently cater to a wide range of industries including but not limited to Paper, Textile, Food, Pharmaceuticals, Feed just to name a few and also export our products outside India.\n\nWe are currently in process of adding a whole range of new products including but not limited to Yellow Dextrin, White Dextrin, Cationic Starch, Pre-Gel Starch. We are currently crushing 375 MTPD on average and are in the process of expanding capacities significantly. \n\nOur production unit is located in Galgalia, Bihar and the Head Office is located in Kolkata, West Bengal.', 'home.php', 'active'),
(3, 2, 'home_section2_title', 'Our Roadmap ', 'home.php', 'active'),
(4, 2, 'home_section2_videoid', '473728939', 'home.php', 'active'),
(5, 3, 'home_section3_title', 'ENVIRONMENT CONSERVATION AS A DRIVING FORCE :', 'home.php', 'active'),
(6, 3, 'home_section3_text', 'We are one of the first plants in India to have a Zero Liquid Discharge (ZLD) unit within our factory premises.\n \nAs a conscious citizen of the world, we are conscious of our impact on the environment. One of the primary ways we tackle the most pressing global environmental issues is via sustainable waste management practices. This includes reducing waste, reducing water consumption and recycling all the water in our plant, which results in zero water discharge.\n \nHaving a water treatment plant in houses is not only cost-effective in the long run but also makes sure there is never a shortage of water for our processes. ', 'home.php', 'active'),
(7, 6, 'careers_section1_title', 'Career at Regaal', 'careers.php', 'active'),
(8, 6, 'careers_section1_text', '<b>a) What we are looking for?</b>\n\nWe aim to attract the best and brightest people, whatever their background, to bring new perspectives to some of the most challenging and inspiring projects around the country.\n\nWe want our employees to thrive and achieve their highest potential. We are passionate about creating an environment that provides opportunities for the most stimulating and fulfilling careers. We encourage innovation and welcome new perspectives by attracting and developing people with diverse talent who inspire our thinking, challenge our solutions and enhance our culture.\n\n<b>b) Why work at Regaal?</b>\n\nWe want our employees to thrive and achieve their highest potential. We are passionate about creating an environment that provides opportunities for the most stimulating and fulfilling careers. We encourage innovation and welcome new perspectives by attracting and developing people with diverse talent who inspire our thinking, challenge our solutions and enhance our culture.\n\nAt Regaal you can deepen your knowledge, expand your skills, and get to work with both inspiring colleagues and influential clients – whatever your passion, we have an opportunity that will bring out the best in you.\n\nIf you are looking for a new role at a fast-growing company with a strong emphasis on growth and culture, please reach out to <b>hr@regaal.in</b> for more details\n\n\n\n', 'careers.php', 'active'),
(9, 7, 'careers_section2_email', 'amit@ivdisplays.com', 'careers.php', 'active'),
(10, 8, 'contact_section1_email', 'amit@ivdisplays.com', 'contact.php', 'active'),
(11, 8, 'contact_section1_address1', 'Convergence Contact Center\nD2/2, Block EP&GP, 7th Floor\nSector 5, Bidhannagar\nSaltlake\nKolkata - 700091\nPH: 7605039041 / 6289292160', 'contact.php', 'active'),
(12, 8, 'contact_section1_address2', 'BHATGAON, GALGALIA CHECK POST\nTHAKURGANJ BLOCK\nDIST - KISHANGANJ\nBIHAR - 855106\nPH: 0659232011', 'contact.php', 'active'),
(13, 8, 'contact_section1_address3', 'G-603, 6TH FLOOR\nTOWER NO. 4 CITY CENTER\nMATIGARA, SILIGURI\nPINCODE - 734010\nPH: +91 3532576896', 'contact.php', 'active'),
(14, 9, 'csr_section1_title', 'CSR ', 'csr.php', 'active'),
(15, 9, 'csr_section1_text', 'At Regaal we recognize that our activities must not only benefit our clients, stakeholders and employees but also benefit those who live in our surrounding areas.\n\nWe are driven not only by a commitment to creating lasting legacies that benefit communities, but we are also clear that the wider pressures of growing populations, urbanization and diminishing resources present opportunities for disruptive change that will benefit our planet and future generations.\n\nWe are committed to keeping Regaal at the forefront of sustainable measures, delivering leading best practices and progressing industry-wide adoption of sustainability.\n\n\n<b>Our Vision:</b>\nUtilize our resources to create a positive impact in the society\n\n<b>Mission:</b>\nTo interact and engage with local communities in order to understand their issues and help improve the quality of life.\n', 'csr.php', 'active'),
(16, 10, 'about_section1_quote1', ' The first test in man’s life begins with his family. If you can keep your family \'together\', then only you have the capability to extend the feeling of togetherness to the society', 'about.php', 'active'),
(17, 10, 'about_section1_quote2', 'We value Togetherness and Together we Create Value.', 'about.php', 'active'),
(18, 10, 'about_section1_boldtext1', 'Inspired by Late Sagarmal Kishorepuria, Regaal Resources Private Limited is set up as the trading arm of the Kishorepuria family. Headed by Anil Kishorepuria, his grandson.', 'about.php', 'active'),
(19, 10, 'about_section1_boldtext2', 'The family inspiration comes from the words:', 'about.php', 'active'),
(20, 10, 'about_section1_boldtext3', 'Late S. M. Kishorepuria has inculcated deep family values in his children which have been passed on to the younger generation.', 'about.php', 'active'),
(21, 10, 'about_section1_mission_text', 'To provide the highest quality products, at best prices, with great customer service while maintaining high ethical standards throughout the company.\n', 'about.php', 'active'),
(22, 10, 'about_section1_vision_text', 'To become the market leader for native/modified starch manufacturing while giving best value to all our stakeholders and positively influencing the society we live/operate in.', 'about.php', 'active'),
(23, 10, 'about_section1_values_text', 'RRPL is a value driven company where we aim that all our team members have the following: ', 'about.php', 'active'),
(24, 10, 'about_section1_value1_title', 'Leadership', 'about.php', 'active'),
(25, 10, 'about_section1_value1_text', 'to be the best in whatever we do', 'about.php', 'active'),
(26, 10, 'about_section1_value2_title', 'Entrepreneurial mindset', 'about.php', 'active'),
(27, 10, 'about_section1_value2_text', 'to be innovative problem solvers', 'about.php', 'active'),
(28, 10, 'about_section1_value3_title', 'Unity ', 'about.php', 'active'),
(29, 10, 'about_section1_value3_text', 'to encourage the spirit of collaboration', 'about.php', 'active'),
(30, 10, 'about_section1_value4_title', 'Continuous learning ', 'about.php', 'active'),
(31, 10, 'about_section1_value4_text', 'learning to always be better', 'about.php', 'active'),
(32, 11, 'culture_section1_title', 'Our Culture', 'culture.php', 'active'),
(33, 11, 'culture_section1_text1', 'We champion people, whether as individuals or teams. Our people constantly strive for better and always go that extra mile, inspiring each other and clients to innovate. We challenge convention, apply a can-do attitude and are committed to quality and service excellence.', 'culture.php', 'active'),
(34, 11, 'culture_section1_text2', 'We employ an open and collaborative approach with our partners. This gives us a better perspective on how we can deliver cost-effective and beneficial outcomes for all stakeholders on every project, no matter how complex or challenging it is.', 'culture.php', 'active'),
(35, 11, 'culture_section1_text3', 'We strive to find better ways to deliver for our clients & communities. We constantly challenge the status quo, make the seemingly impossible possible, and will always do so.', 'culture.php', 'active'),
(36, 12, 'achievements_section1_title', 'Our Achievements', 'achievements.php', 'active'),
(37, 12, 'achievements_section1_text1', 'Operating at more than 100% of the plant capacity.\nOur customers include the top names in Food, Packaged Food & Paper Industry.\nValue Added Products', 'achievements.php', 'active'),
(38, 12, 'achievements_section1_text2', 'Setup modified starch processes by mid-2021\nDouble the production capacity by 2021\nIncrease the production capacity by four times in the next 5 years ', 'achievements.php', 'active'),
(42, 10, 'about_section1_family_text', 'RRPL is run by promoters of the Kishorepuria group having business interest in <b>Steel, Cement, Hospitality, Tractors, Print Media, amongst other businesses.</b>\n\nThe company believes in the saying: <b>\"We value Togetherness and Together we Create Value.\"</b>', 'about.php', 'active'),
(39, 10, 'about_section1_company_title', 'The company', 'about.php', 'active'),
(40, 10, 'about_section1_company_text', 'RRPL is a corn wet milling agri-tech company engaged in manufacturing of best quality Maize Starch, its derivative products and various value adding products.\n\nWe function as a process driven, tech enabled, lean company which believes in providing value to all stakeholders.', 'about.php', 'active'),
(41, 10, 'about_section1_family_title', 'Family', 'about.php', 'active'),
(43, 10, 'about_section1_logo_title', 'Logo', 'about.php', 'active'),
(44, 10, 'about_section1_logo_text', 'The company logo is inspired by strong values that the company is driven by. The yellow in the logo symbolizes <b>positivity and energy</b>, the red in the logo symbolizes <b>spirit and passion.</b> The sleek font symbolizes <b>agility</b> and the bold style symbolizes <b>dynamism.</b> The coming together of the two R’s symbolizes the <b>importance of teamwork,</b> unity and togetherness throughout the company.', 'about.php', 'active'),
(45, 10, 'about_section1_value5_title', 'Integrity', 'about.php', 'active'),
(46, 10, 'about_section1_value5_text', 'To always do the right thing', 'about.php', 'active'),
(47, 10, 'about_section1_value6_title', 'Agility', 'about.php', 'active'),
(48, 10, 'about_section1_value6_text', 'To take advantage of opportunities', 'about.php', 'active'),
(49, 10, 'about_section1_value7_title', 'Spirit', 'about.php', 'active'),
(50, 10, 'about_section1_value7_text', 'To always keep upgrading ourselves', 'about.php', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_future_products`
--

CREATE TABLE `tbl_future_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_text` text DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_future_products`
--

INSERT INTO `tbl_future_products` (`product_id`, `product_name`, `product_text`, `product_image`, `product_status`) VALUES
(1, 'Gums - Hot, Cold and British', NULL, NULL, 'active'),
(2, 'Pregel starch', NULL, NULL, 'active'),
(3, 'Gel starch', NULL, NULL, 'active'),
(4, 'Cationic Starch', NULL, NULL, 'active'),
(5, 'Oxidized starch', NULL, NULL, 'active'),
(6, 'Carboxyl Methyl Starch', NULL, NULL, 'active'),
(7, 'Edible Starch', NULL, NULL, 'active'),
(8, 'IP Grade starch', NULL, NULL, 'active'),
(9, 'Textile 90', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_img_id` int(11) NOT NULL,
  `gallery_cat_id` int(11) NOT NULL,
  `gallery_img_link` varchar(50) NOT NULL,
  `gallery_img_text` varchar(100) DEFAULT NULL,
  `gallery_img_category` varchar(255) DEFAULT NULL,
  `gallery_img_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_img_id`, `gallery_cat_id`, `gallery_img_link`, `gallery_img_text`, `gallery_img_category`, `gallery_img_status`) VALUES
(1, 1, '1604395645.JPG', NULL, NULL, 'inactive'),
(2, 2, '1620726209.jpg', 'Germ Dryer', 'Machines', 'active'),
(3, 1, '1604395880.jpg', NULL, NULL, 'inactive'),
(4, 2, '1604773949.webp', 'Hydrocyclone', 'Machines', 'active'),
(5, 2, '1620726460.jpg', 'PS/GT', 'Machines', 'active'),
(6, 2, '1620729984.jpg', 'Production House', 'Machines', 'active'),
(7, 1, '1620730323.jpg', 'Fiber Washing', 'Machines', 'active'),
(8, 2, '1620730562.jpg', 'RVDF', 'Machines', 'active'),
(9, 2, '1620730624.jpg', 'Pin Mill', 'Machines', 'active'),
(10, 2, '1604396946.jpg', NULL, NULL, 'inactive'),
(11, 2, '1604396955.jpg', NULL, NULL, 'inactive'),
(12, 2, '1604396957.jpg', NULL, NULL, 'inactive'),
(13, 2, '1604396961.jpg', NULL, NULL, 'inactive'),
(14, 2, '1604396965.jpg', NULL, NULL, 'inactive'),
(15, 2, '1604396967.jpg', NULL, NULL, 'inactive'),
(16, 2, '1604396985.jpg', NULL, NULL, 'inactive'),
(17, 2, '1604396988.jpg', NULL, NULL, 'inactive'),
(18, 2, '16043969881.jpg', NULL, NULL, 'inactive'),
(19, 2, '1620731274.jpg', 'ZLD', 'Machines', 'active'),
(20, 2, '1604396994.jpg', NULL, NULL, 'inactive'),
(21, 2, '1604397000.jpg', NULL, NULL, 'inactive'),
(22, 1, '16207314201.jpg', 'Boiler', 'Machines', 'active'),
(23, 1, '1604492735.jpg', NULL, NULL, 'inactive'),
(24, 1, '1604492767.jpg', NULL, NULL, 'inactive'),
(25, 2, '1604492808.jpg', NULL, NULL, 'inactive'),
(26, 1, '1604492842.jpg', NULL, NULL, 'inactive'),
(27, 2, '1604492878.jpg', NULL, NULL, 'inactive'),
(28, 1, '1604492910.jpg', NULL, NULL, 'inactive'),
(29, 1, '1620882229.jpg', 'Process House', 'Machines', 'active'),
(30, 0, '1620722089.jpg', 'Hydrocyclone', NULL, 'inactive'),
(31, 0, '1652870302.jpg', 'trial', 'Machines', 'inactive'),
(32, 0, '1652870362.jpg', 'try', 'People', 'inactive'),
(33, 0, '1652870486.jpg', 'ijijijij', 'People', 'inactive'),
(34, 0, '1652870618.jpg', 'gttt', 'People', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_category`
--

CREATE TABLE `tbl_gallery_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  `cat_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_gallery_category`
--

INSERT INTO `tbl_gallery_category` (`cat_id`, `cat_name`, `cat_status`) VALUES
(1, 'Factory Images', 'active'),
(2, 'Machine Images', 'active'),
(3, 'test', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `img_id` int(11) NOT NULL,
  `img_section` int(11) DEFAULT NULL,
  `img_link` varchar(50) DEFAULT NULL,
  `img_title` varchar(50) DEFAULT NULL,
  `img_text` text DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `linkedin_link` text DEFAULT NULL,
  `img_target_page` varchar(30) DEFAULT NULL,
  `img_status` enum('active','inactive') DEFAULT 'active',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`img_id`, `img_section`, `img_link`, `img_title`, `img_text`, `category`, `linkedin_link`, `img_target_page`, `img_status`, `updated_at`, `created_at`) VALUES
(1, 0, '1604404305.webp', NULL, ' ', NULL, '', 'home_desk.php', 'active', NULL, NULL),
(2, 3, '1648724848.png', NULL, NULL, NULL, NULL, 'home_desk.php', 'active', NULL, NULL),
(3, 0, '1648556978.png', NULL, ' ', NULL, NULL, 'leadership_desk.php', 'active', NULL, NULL),
(4, 4, '1601977869.webp', 'Rajkumar Kishorepuria (Mentor and Director)', 'A 1st-generation entrepreneur with <b>45+ years of experience</b> in the manufacturing, real estate, retail, and trading industry. He started his career in the late 60s with the trading of silk and steel and gradually taking it ahead with import and export. He has also, has been the <b>visionary</b> behind many projects of the Kishorepuria Group', NULL, '', 'leadership.php', 'active', NULL, NULL),
(5, 4, '1648556389.png', 'Anil Kishorepuria (Managing Director)', 'A second-generation entrepreneur with <b>25+ years of experience</b> in the manufacturing, real estate, retail and trading industry. \r\nPreviously, he <b>founded Sriyash Retail</b> in 2003, formerly the <b>largest retail store for all products in Eastern India</b>. He Acted as Channel Partner for Tata Steel in the states of Orissa and Madhya Pradesh. He also <b>Envisaged the first and largest gated residential community in Bihar</b> by the name of Garden Heights. Has been instrumental in setting up the first corn refinery industrial unit in Bihar in RRPL.\r\nHe has done his undergraduate degree from St. Xavier’s College, Kolkata in the field of commerce and is an active part of the Rotary Club of Kolkata\r\n', NULL, 'https://www.linkedin.com/in/anil-kishorepuria-7a9056218/', 'leadership.php', 'active', NULL, NULL),
(6, 4, '1648556408.png', 'Navneet Baheti (Chief Operating Officer)', 'Navneet is an <b>entrepreneurial professional with 21 years of business and corporate experience</b> in the field of Banking, Real Estate & Manufacturing Businesses. He has expertise in <b>Corporate Finance, Strategy, Human Resource Management, Sales Marketing & Distribution</b>\r\nPreviously worked as <b>Zonal Debt Manager (Chief Manager I) in ICICI Bank managing South & East Zone.</b>\r\nQualification: <b>MBA</b> from IISWBM, Calcutta University and <b>CMA (ICMAI), C.S Inter (ICSI).</b>\r\n', NULL, 'https://www.linkedin.com/in/navneet-baheti-a54294194/', 'leadership.php', 'active', NULL, NULL),
(7, 4, '1648556666.png', 'Rohan Kishorepuria (Vice President, Works)', 'Rohan is a <b>young and dynamic Mechanical Engineer</b> graduated from the B.M.S College of Engineering, Bengaluru.He is <b>associated</b> with <b>Indian Society for Advancement for Materials and Process Engineering</b> (ISAMPE) and <b>Fluid Power Society of India</b> (FPSI). \r\nPreviously, he has garnered <b>global experience</b> of working within <b>operationally focused role</b> as operations manager at Monkey: An African Based Adventure Company (Tanzania) as operations managers. He also worked at Sunkonnect Pte - Solar consultancy and EPC Company as <b>Project Manager</b> where he <b>led and finished</b> 2 projects: Bharath McNally - EPC of 500 MW Solar and Tata Solar - Consultancy to increase module efficiency.', NULL, 'https://www.linkedin.com/in/rohan-kishorepuria-8ba432141/', 'leadership.php', 'active', NULL, NULL),
(45, 0, '1610613224.webp', NULL, ' ', NULL, NULL, 'home_mob.php', 'active', NULL, NULL),
(8, 0, '1603864801.webp', NULL, ' ', NULL, NULL, 'products_desk.php', 'active', NULL, NULL),
(9, 5, '1603864610.webp', 'Maize Starch', 'Maize starch is also known as Cornstarch or flour is a fundamental ingredient in most packaged food and industrial products; it is extracted from the corn kernel and has a distinctive appearance and feel.\r\n \r\nMaize starch in natural & modified forms provides viscosity, texture and other desired properties. It is used in the below industries:\r\n \r\n(a) Paper\r\n(b) Food (soups, sauces, gravies, etc.)\r\n(c) Medical industry (medical gloves, diaphragms, etc.)\r\n(d) Textile industry\r\n(e) Color\r\n', 'Primary Product', NULL, 'products.php', 'active', NULL, NULL),
(10, 5, '1603862778.webp', 'Maize Germ', 'Corn Germ is the endosperm of Maize grain; it is a yellow colored seed, pleasantly nutty in taste and rich in oil. It is used in the feed industry for:\r\n \r\na) Extraction of maize oil\r\nb) Manufacturing of feed supplements\r\n', 'Allied Products', NULL, 'products.php', 'active', NULL, NULL),
(11, 5, '1603864178.webp', 'Enriched Maize Fibre', 'Maize fibre is a by-product of corn starch processing and is also known as corn fibre. The many advantages of corn fibre include its positive effect on digestive health and prebiotic properties. At about 90% insolubility, corn fibre is a high-content insoluble fibre with low acidity. We produce Enriched Maize fibre which has higher protein content.\r\n \r\nIt is used in the Poultry industry for cattle feed purposes.', 'Allied Products', NULL, 'products.php', 'active', NULL, NULL),
(12, 5, '1648730912.jpeg', 'Maize Gluten', 'Maize gluten contains high protein and is derived from the corn-milling process. Originally used as a supplement in hog feed, corn gluten has become a common organic alternative to synthetic chemical herbicides. It can be effective as a pre-emergent herbicide used to control crabgrass and other lawn weeds, and it also has nutritional properties.\r\n \r\nIt is used extensively in the Animal and Feed industry.\r\n', 'Allied Products', NULL, 'products.php', 'active', NULL, NULL),
(50, 5, '1648891179.png', 'Corn Flour', 'Yellow powder made from finely ground, dried corn. Used in cooking for thickening gravies and stews.', 'Value added Products', NULL, 'products.php', 'active', NULL, NULL),
(13, 0, '1604406686.webp', NULL, ' ', NULL, NULL, 'home_desk.php', 'active', NULL, NULL),
(14, 0, '1604731600.webp', NULL, ' ', NULL, NULL, 'home_desk.php', 'active', NULL, NULL),
(15, 0, '1604388496.webp', NULL, ' ', NULL, NULL, 'careers_desk.php', 'active', NULL, NULL),
(16, 0, '1604751384.webp', NULL, ' ', NULL, NULL, 'contact_desk.php', 'active', NULL, NULL),
(17, 0, '1604855240.webp', NULL, ' ', NULL, NULL, 'gallery_desk.php', 'active', NULL, NULL),
(18, 0, '1648558614.png', NULL, ' ', NULL, NULL, 'csr_desk.php', 'active', NULL, NULL),
(19, 9, '1620734342.jpg', NULL, 'CSR Activity during the Covid-19 Pandemic ', NULL, NULL, 'csr.php', 'active', NULL, NULL),
(20, 9, '1620734389.jpg', NULL, 'Distribution of Rashan Kits', NULL, NULL, 'csr.php', 'active', NULL, NULL),
(21, 9, '16207344381.jpg', NULL, ' Ration Kits and PPE  Distribution', NULL, NULL, 'csr.php', 'active', NULL, NULL),
(22, 9, '1620734577.jpg', NULL, 'Sponsored football Match', NULL, NULL, 'csr.php', 'active', NULL, NULL),
(23, 0, '1603182617.webp', NULL, 'this is the best it can get', NULL, NULL, 'home_desk.php', 'inactive', NULL, NULL),
(24, 0, '1604748248.webp', NULL, ' ', NULL, NULL, 'about_desk.php', 'active', NULL, NULL),
(25, 10, '1603197704.webp', 'Late Sagarrmal Kishorepuria', NULL, NULL, NULL, 'about.php', 'active', NULL, NULL),
(26, 0, '1604750985.webp', NULL, ' ', NULL, NULL, 'culture_desk.php', 'active', NULL, NULL),
(27, 0, '1604391085.webp', NULL, ' ', NULL, NULL, 'achievements_desk.php', 'active', NULL, NULL),
(28, 0, '1603781085.webp', NULL, 'this is a test image for tutorial', NULL, NULL, 'home_desk.php', 'inactive', NULL, NULL),
(29, 0, '1604731047.webp', NULL, ' ', NULL, NULL, 'home_desk.php', 'active', NULL, NULL),
(30, 0, '1604479698.webp', NULL, ' ', NULL, NULL, 'about_desk.php', 'inactive', NULL, NULL),
(32, 9, '1605703387.webp', NULL, 'Saree Distribution on the Occasion of Chhath', NULL, NULL, 'csr.php', 'inactive', NULL, NULL),
(31, 4, '1648556679.png', 'Anil Pandey (Technical Advisor)', 'A <b>Mechanical Engineer</b> with <b>experience of 32+ years</b> in the <b>starch and food processing industry.</b>\r\nHe has gained vast experience in project coordination, construction, site selection, basic engineering, detailed engineering, operation, maintenance, erection & commissioning of major turnkey projects.\r\nHe possesses the <b>technical abilities to design & implement the starch plant</b> of the capacity from 80 MTPD to 1000 MTPD with software for the material balance.\r\nHe has been an integral part in the <b>managing and setting up for 18+ plants</b> across India.\r\n', NULL, ' ', 'leadership.php', 'active', NULL, NULL),
(47, 4, '1648550892.JPG', NULL, 'Sanjiv is an ex-banker having served at ICICI Bank for the period of 5 years, while holding various positions. He was the Regional Credit Manager – East for SME loans handling 5 States. He has a robust and rich experience of debt management and collection. \r\nPost qualification experience of 20+ years in the field of Corporate / Project financing, debt syndication, Merchant Banking, Credit & Collection, Audit & Assurances and Company Law Compliances\r\nQualification: B.Com. (Hons.), ACS and FCA\r\n', NULL, NULL, 'leadership.php', 'inactive', NULL, NULL),
(33, 9, '1620882302.jpeg', NULL, 'Saree Distribution on Chhath', NULL, NULL, 'csr.php', 'active', NULL, NULL),
(34, 0, '1610613635.webp', NULL, ' ', NULL, NULL, 'home_mob.php', 'active', NULL, NULL),
(35, 3, '1648724878.png', NULL, NULL, NULL, NULL, 'home_mob.php', 'active', NULL, NULL),
(36, 0, '1610615130.webp', NULL, ' ', NULL, NULL, 'about_mob.php', 'active', NULL, NULL),
(37, 0, '1610615268.webp', NULL, ' ', NULL, NULL, 'culture_mob.php', 'active', NULL, NULL),
(38, 0, '1610616589.webp', NULL, ' ', NULL, NULL, 'achievements_mob.php', 'active', NULL, NULL),
(39, 0, '1648556991.png', NULL, ' ', NULL, NULL, 'leadership_mob.php', 'active', NULL, NULL),
(40, 0, '1610618069.webp', NULL, ' ', NULL, NULL, 'products_mob.php', 'active', NULL, NULL),
(41, 0, '1610618014.webp', NULL, ' ', NULL, NULL, 'gallery_mob.php', 'active', NULL, NULL),
(42, 0, '1648558637.png', NULL, ' ', NULL, NULL, 'csr_mob.php', 'active', NULL, NULL),
(43, 0, '1610617477.webp', NULL, ' ', NULL, NULL, 'careers_mob.php', 'active', NULL, NULL),
(44, 0, '1610617045.webp', NULL, ' ', NULL, NULL, 'contact_mob.php', 'active', NULL, NULL),
(46, 0, '1610613383.webp', NULL, ' ', NULL, NULL, 'home_mob.php', 'active', NULL, NULL),
(48, 4, '1648556715.png', 'Sanjiv Agarwal (Chief Financial Officer)', 'Sanjiv is an <b>ex-banker</b> having served at <b>ICICI Bank for the period of 5 years</b>, while holding various positions. He was the <b>Regional Credit Manager – East for SME loans handling 5 States.</b> He has a robust and rich experience of debt management and collection. \r\n<b>Post qualification experience of 20+ years in the field of Corporate / Project financing, debt syndication, Merchant Banking, Credit & Collection, Audit & Assurances and Company Law Compliances\r\n\r\nQualification: B.Com. (Hons.), ACS and FCA</b>\r\n', NULL, ' ', 'leadership.php', 'active', NULL, NULL),
(49, 4, '1648556763.png', 'Karan Kishorepuria (Executive Director)', 'Karan has been educated in 3 continents (America, Europe and India) and graduated from Northeastern University where he specialized in Finance and Nutrition\r\n\r\nPreviously, <b>Led and founding fund team member</b> at NUImpact, the <b>1st undergrad led Impact Investing Fund in America (AUM: $500K). Led</b> venture operations at IDEA, the <b>largest student-run venture accelerator in the world.</b> Oversaw <b>deployment of $500K</b> in educational grants and <b>managed 400+ ventures.</b>\r\n\r\nWork experiences at global asset manager <b>Grantham Mayo Van Otterloo</b>, a boutique investment firm <b>Ratnabali Capital</b> and at <b>Goldman Sachs</b> in their Investment management team based out of NYC.\r\n\r\nHe has achieved the <b>Forbes under 30 scholarship, Huntington 100 award,</b> named in <b>BostonInno’s 25 U 25 list</b> and is recognized as the <b>100 ‘Best and Brightest’ business students in America by Poets and Quants.</b>\r\n\r\nHe is also a former <b>National level squash player</b> and has been a <b>keynote speaker given 50+ talks</b> at schools, colleges and companies across the world. He believes in giving back and is the <b>youngest Partner at SVP India.</b>\r\n', NULL, 'https://www.linkedin.com/in/karan-kishorepuria/', 'leadership.php', 'active', NULL, NULL),
(51, 5, '1648730066.png', 'Custard Powder ', 'An alternative to eggs. It looks a lot like cornflour and the reason is that the base used is corn starch along with salt and flavourings. It is an ingredient that has aided everyone to make custard in a jiffy. The tasty base for many savoury recipes.', 'Value added Products', NULL, 'products.php', 'active', NULL, NULL),
(52, 5, '1648889640.png', 'Baking Powder', 'It is used to increase the volume and lighten the texture of baked goods.', 'Value added Products', NULL, 'products.php', 'active', NULL, NULL),
(53, 5, '1648878606.jpg', 'Icing Sugar', 'Used while making cakes and bakery products. Used for icing and frosting over desserts. For its ability to easily dissolve in water, it comes handy while preparing juices, milkshakes or any cold beverages. During industrial food production, icing sugar is used where there is a need for quick dissolving sugar.\r\n \r\nAll these products (corn flour, custard powder, baking powder, icing sugar) are sold under our Glaize brand name in a B2C and B2B model. The following industries use them:\r\na) Baking\r\nb) Hotels\r\nc) Cafes\r\nd) Other food use cases\r\n', 'Value added Products', NULL, 'products.php', 'active', NULL, NULL),
(54, 5, '1648878677.jpg', 'Yellow dextrin', 'Yellow dextrins are what are known as highly converted products. They are made by heating the starch to relatively high temperatures in the presence of an acid. They are used in the following industries:\r\n \r\na) Adhesives\r\nb) Textiles\r\n', 'Modified Starches', NULL, 'products.php', 'active', NULL, NULL),
(55, 5, '1648878710.PNG', 'White dextrin', 'White dextrins are made by heating the starch at a relatively low temperature in the presence of an acid. They are used in the following industries:\r\n \r\na) Food\r\nb) Textile\r\nc) Paper\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Modified Starches', NULL, 'products.php', 'active', NULL, NULL),
(56, 0, '1688710022.jpg', NULL, 'test', NULL, '', 'home_desk.php', 'inactive', NULL, NULL),
(57, NULL, 'backend/img/banner\\1698648347_2411962.jpg', NULL, 'newww banner1', NULL, NULL, NULL, 'active', '2023-10-30 06:45:47', '2023-10-30 06:45:47'),
(58, NULL, 'backend/img/banner\\1698649079_2411962.jpg', NULL, 'aaa banner1', NULL, NULL, NULL, 'active', '2023-10-30 06:57:59', '2023-10-30 06:57:59'),
(59, NULL, 'backend/img/banner\\1698649342_2387693.jpg', NULL, 'newww banner1', NULL, NULL, NULL, 'active', '2023-10-30 07:02:22', '2023-10-30 07:02:22'),
(60, NULL, 'backend/img/banner\\1698649401_1667709.jpg', NULL, 'aaaa', NULL, NULL, NULL, 'active', '2023-10-30 07:03:21', '2023-10-30 07:03:21'),
(61, NULL, '1698649461_2411962.jpg', NULL, 'aaa banner1', NULL, NULL, NULL, 'active', '2023-10-30 07:04:21', '2023-10-30 07:04:21'),
(62, NULL, '1698649636_2411962.jpg', NULL, 'aaa banner1', NULL, NULL, NULL, 'active', '2023-10-30 07:07:16', '2023-10-30 07:07:16'),
(63, NULL, '1698649799_2411972.jpg', NULL, 'dnjhhhhh', NULL, NULL, NULL, 'active', '2023-10-30 07:09:59', '2023-10-30 07:09:59'),
(69, NULL, '1698666130_2411962.jpg', NULL, 'AAFDGFdnjhhhhh', NULL, NULL, 'home_desk.php', 'active', '2023-10-30 11:42:10', '2023-10-30 11:42:10'),
(65, NULL, '1698651281_2411972.jpg', NULL, 'mobbb111', NULL, NULL, 'home_mob.php', 'active', '2023-10-30 07:34:41', '2023-10-30 07:34:41'),
(67, NULL, '1698651629_2387693.jpg', NULL, 'AAFDGFdnjhhhhh', NULL, NULL, 'home_desk.php', 'active', '2023-10-30 07:40:29', '2023-10-30 07:40:29'),
(68, NULL, '1698651747_2411962.jpg', NULL, 'ssssaaaaqqq', NULL, NULL, 'home_dex.php', 'active', '2023-10-30 07:42:27', '2023-10-30 07:42:27'),
(70, NULL, '1698666180_2411962.jpg', NULL, 'mmmmaaa banner1', NULL, NULL, 'home_desk.php', 'active', '2023-10-30 11:43:00', '2023-10-30 11:43:00'),
(71, NULL, '1698666568_2411962.jpg', NULL, 'mob newww banner1', NULL, NULL, 'home_desk.php', 'active', '2023-10-30 11:49:28', '2023-10-30 11:49:28'),
(72, NULL, '1698667175_2411962.jpg', NULL, 'mobile bannnnf', NULL, NULL, 'home_mob.php', 'active', '2023-10-30 11:59:35', '2023-10-30 11:59:35'),
(73, NULL, '1698744830_pxfuel.jpg', NULL, 'hh', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 09:33:50', '2023-10-31 09:33:50'),
(74, NULL, '1698744878_76250.jpg', NULL, 'ggggff', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 09:34:38', '2023-10-31 09:34:38'),
(75, NULL, '1698745046_2411960.jpg', NULL, 'awsome', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 09:37:26', '2023-10-31 09:37:26'),
(76, NULL, '1698745842_2387693.jpg', NULL, 'Happy', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 09:50:42', '2023-10-31 09:50:42'),
(77, NULL, '1698745908_2027991.jpg', NULL, 'Wow', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 09:51:48', '2023-10-31 09:51:48'),
(78, NULL, '1698746070_649962.jpg', NULL, 'Happyee', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 09:54:30', '2023-10-31 09:54:30'),
(79, NULL, '1698746182_2411980.jpg', NULL, 'hh', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 09:56:22', '2023-10-31 09:56:22'),
(80, NULL, '1698746258_1667709.jpg', NULL, 'ggggff', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 09:57:38', '2023-10-31 09:57:38'),
(81, NULL, '1698746370_rrrrrr.jpg', NULL, 'hh', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 09:59:30', '2023-10-31 09:59:30'),
(82, NULL, '1698746537_pxfuel (2).jpg', NULL, 'Flags', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 10:02:17', '2023-10-31 10:02:17'),
(83, NULL, '1698746627_pxfuel (1).jpg', NULL, 'Happyee', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 10:03:47', '2023-10-31 10:03:47'),
(84, NULL, '1698746731_peakpx.jpg', NULL, 'ggggff', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 10:05:31', '2023-10-31 10:05:31'),
(85, NULL, '1698746781_234864.jpg', NULL, 'Happyee', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 10:06:21', '2023-10-31 10:06:21'),
(86, NULL, '1698831935_rrrrrr.jpg', NULL, 'Happy_hello11', NULL, NULL, 'home_desk.php', 'active', '2023-11-01 11:48:49', '2023-10-31 10:07:17'),
(87, NULL, '1698746920_234864.jpg', NULL, 'awsome', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 10:08:40', '2023-10-31 10:08:40'),
(88, NULL, '1698746964_2411972.jpg', NULL, 'awsome', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 10:09:24', '2023-10-31 10:09:24'),
(89, NULL, '1698747025_234864.jpg', NULL, 'awsome', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 10:10:25', '2023-10-31 10:10:25'),
(90, NULL, '1698747089_2411980.jpg', NULL, 'awsome', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 10:11:29', '2023-10-31 10:11:29'),
(91, NULL, '1698747155_2411980.jpg', NULL, 'hh', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 10:12:35', '2023-10-31 10:12:35'),
(92, NULL, '1698747449_649962.jpg', NULL, 'hh', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 10:17:29', '2023-10-31 10:17:29'),
(93, NULL, '1698839345_419392.jpg', NULL, 'Goalss11', NULL, NULL, 'home_mob.php', 'active', '2023-11-01 11:49:05', '2023-10-31 10:24:57'),
(94, NULL, '1698747928_649962.jpg', NULL, '121gggg', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 10:25:28', '2023-10-31 10:25:28'),
(95, NULL, '1698747962_2411966.jpg', NULL, '121Flags', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 10:26:02', '2023-10-31 10:26:02'),
(96, NULL, '1698754995_2387693.jpg', NULL, 'Hello Doraemon', NULL, NULL, 'home_desk.php', 'active', '2023-10-31 12:23:15', '2023-10-31 12:23:15'),
(97, NULL, '1698755655_419392.jpg', NULL, 'new mobile bannner', NULL, NULL, 'home_mob.php', 'active', '2023-10-31 12:34:15', '2023-10-31 12:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE `tbl_jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `job_text` text DEFAULT NULL,
  `job_target_page` varchar(30) DEFAULT NULL,
  `job_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`job_id`, `job_title`, `job_text`, `job_target_page`, `job_status`) VALUES
(1, 'Production Engineer - Code P001', 'An pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'careers.php', 'inactive'),
(2, 'Assistant Power Plant Manager', 'Job description\n\n•	Manage and oversee daily operations of power plant.\n•	Monitor Operations for efficiency and safety ensuring that all applicable regulations are followed.\n•	Oversee Technical staff such as maintenance or engineering, and training of personnel.\n•	Capable of resolving escalated issues arising from operations and coordinating with all departments\n\nRequired Candidate profile\n\n•	Graduate or Post Graduate Degree in Electrical or Mechanical Engineering.\n•	Around 5 years\' Experience in Power Plant Management.\n\n\nLocation:\nThe job will be based at our plant in Galgalia, Kishanganj, Bihar', 'careers.php', 'active'),
(3, 'DGM - Works - Admin', 'Job Responsibilities:\n\n•	Responsible for coordinating overall unit operations entailing production, maintenance, quality control.\n•	To ensure cost-effective and smooth production as per production targets with optimum utilization of resources.\n•	Preferably from a Starch Plant or Food Processing work experience background.\n•	Safety & security of unit property, machines, goods and personnel.\n•	To develop and execute innovative policies and procedures which result in increasing revenues, streamlining workflow and creating a team environment to increase productivity.\n\n\nWe are looking for a candidate with experience of minimum 10 years \n\nDesired Candidate Profile:\n1. Around 10 years of experience.\n2. Relocating to Siliguri.\n\nEducational Background:\nEngineering background preferably a Mechanical Engineer with a Management degree.\n\nLocation:\nGalgalia,Kishanganj,Bihar', 'careers.php', 'active'),
(4, 'Deputy Manager Mechanical', 'Job description\n\n•	Knowledge and experience in manufacturing processes specially in starch industry\n•	Inspect facilities periodically to determine problems and necessary maintenance\n•	Prepare weekly maintenance schedules and allocate work\n•	Able to work in Autocad & Solidworks\n•	Knowledge on pumps, steam line etc.\n\nRequired Candidate profile\n\n•	B.E./B.Tech in Mechanical Engineering.\n•	Around 5 years of work experience in Mechanical Maintenance.\n\nLocation:\nGalgalia,Kishanganj,Bihar', 'careers.php', 'active'),
(5, 'Agri Business Head', '•	Graduate or Postgraduate from an Agritech background.\n•	Research and analysis for increasing Maize Agricultural Output.\n•	Assisting farmers with model land farming.\n•	Training farmers with modern agri-tech methods to increase the output.\n•	Around 8-15 years of experience.\n•	Relocating to Siliguri.\n\nLocation - Galgalia,Kishanganj,Bihar\n', 'careers.php', 'active'),
(6, 'Sales Head', 'Job description\n•	Own all plans and strategies for developing the business and achieving the company\'s sales goals\n•	Assists in the development of the sales plan. Prepares forecasts and KPI reporting for the sales leaders, CRO, and upper management, for use in organizational planning, financial forecasting, budget setting and strategic planning.\n•	Expand build process and funnel for manual top-down reach out, onboarding, activation, and expansion\n•	Evangelize the product and personally help close the largest deals\n•	Work collaboratively across teams - including Engineering, Product and Marketing\n•	Establish the inbound lead requirements needed to meet your sales objectives\n•	Provide full visibility into the sales pipeline at every stage of development\n•	Establish and foster partnerships and relationships with key customers both externally and internally\n\nRequired Candidate profile\n•	Minimum 10 years of relevant sales experience. Preferably FMCG\n•	Possess extensive knowledge of sales principles and practices, and an ability to coach others on them.\n•	Strong analytical and quantitative skills; ability to use hard data and metrics to back up assumptions, recommendations, and drive actions.\n•	Proven ability to influence cross-functional teams\n•	Strength in problem-solving, issue-resolution, ability to work in a deadline-driven work environment, attention to detail, and ability to multitask.\n•	Strong leadership and team-building skills\n\nLocation - Kolkata\n', 'careers.php', 'active'),
(7, 'Lab Incharge', 'Job Description:\n\n1. Research and prepare industry outlook report on the Maize industry.\n2. Work directly under management to research, prepare and pitch presentations on interesting\nareas for growth either through:\na. Expansion of current product line (B2C)\nb. Vertical integration\nc. Identification of new avenues of growth\n\n3. Work and lead certain tech-driven initiatives within the company (e.g.: Development of AI\nmodel for Maize procurement).\n4. Do extensive competitor research and analysis and present findings to the team.\n\nPerks & Benefits:\n• Regular Mentorship from senior management.\n• Certificate of completion.\n• Opportunity to full-time job post-internship.\n• Stipend of 12-15K per month.\n• Performance Incentive as per the company policy.', 'careers.php', 'active'),
(8, 'DGM Accounts / BS', 'We will update you soon', 'careers.php', 'active'),
(9, 'DGM Bank & Finance', 'We will update you soon', 'careers.php', 'active'),
(10, 'RO Incharge', '•	Operation and maintenance the RO Plant/ VAM Chiller Maintain the treatment plant systems\n•	Inspect the treatment plant systems on a daily basis to ensure effective operations\n•	Maintain a daily log.\n•	Experience in disc membrane RO.\n•	5-10 yrs experience in operating RO/Softener/VAM Chiller in the process/manufacturing industry.\n•	Diploma Mechanical/ITI\n\n Location - Galgalia, Kishanganj, Bihar\n', 'careers.php', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section`
--

CREATE TABLE `tbl_section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(50) DEFAULT NULL,
  `section_target_page` varchar(20) DEFAULT NULL,
  `section_status` enum('active','inactive') DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_section`
--

INSERT INTO `tbl_section` (`section_id`, `section_name`, `section_target_page`, `section_status`) VALUES
(1, 'home_section1', 'home.php', 'active'),
(2, 'home_section2', 'home.php', 'active'),
(3, 'home_section3', 'home.php', 'active'),
(4, 'leadership_section1', 'leadership.php', 'active'),
(5, 'products_section1', 'products.php', 'active'),
(6, 'careers_section1', 'careers.php', 'active'),
(7, 'careers_section2', 'careers.php', 'active'),
(8, 'contact_section1', 'contact.php', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_name` varchar(255) DEFAULT NULL,
  `testimonial_text` text DEFAULT NULL,
  `testimonial_image_link` text DEFAULT NULL,
  `testimonial_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`testimonial_id`, `testimonial_name`, `testimonial_text`, `testimonial_image_link`, `testimonial_status`) VALUES
(1, 'Papia Das', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ante vitae ex tincidunt sollicitudin. Curabitur egestas pellentesque mauris. Donec tristique lacus neque, consequat rutrum sapien posuere ', '1652952519.jpg', 'active'),
(2, 'Abhishek Basu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ante vitae ex tincidunt sollicitudin. Curabitur egestas pellentesque mauris. Donec tristique lacus neque, consequat rutrum sapien posuere nec.', '1652952091.jpg', 'active'),
(3, 'Utkarsh Tripathi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ante vitae ex tincidunt sollicitudin. Curabitur egestas pellentesque mauris. Donec tristique lacus neque, consequat rutrum sapien posuere nec.', '1652952526.jpg', 'active'),
(4, 'sonia chatterjee', 'i am sleepy', '1652951924.png', 'inactive'),
(5, 'Harry Potter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ante vitae ex tincidunt sollicitudin. Curabitur egestas pellentesque mauris. Donec tristique lacus neque, consequat rutrum sapien posuere nec.', '1652955234.jpg', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timeline`
--

CREATE TABLE `tbl_timeline` (
  `timeline_id` int(11) NOT NULL,
  `timeline_section` int(11) NOT NULL,
  `timeline_year` int(20) DEFAULT NULL,
  `timeline_text` text DEFAULT NULL,
  `timeline_target` varchar(10) DEFAULT NULL,
  `timeline_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_timeline`
--

INSERT INTO `tbl_timeline` (`timeline_id`, `timeline_section`, `timeline_year`, `timeline_text`, `timeline_target`, `timeline_status`) VALUES
(1, 2, 2012, 'The Idea Originated and Company Established.', 'home.php', 'active'),
(2, 2, 2016, 'Ideation of having a corn wet milling plant at Galgalia', 'home.php', 'active'),
(3, 2, 2017, 'Commencement of work for set up of unit', 'home.php', 'active'),
(4, 2, 2018, 'Commencement of production', 'home.php', 'active'),
(5, 2, 2019, 'Consistent plant capacity utilization above 100% with expert technical enhancements', 'home.php', 'active'),
(6, 2, 2021, 'I am testing', 'home.php', 'inactive'),
(7, 2, 2021, 'We will be the best starch producer in the eastern india', 'home.php', 'inactive'),
(8, 2, 2021, 'Plant hits 10,000 MT in one month for the first time', 'home.php', 'active'),
(9, 2, 2022, 'Expansion process going on to significantly improve capacity + addition of value-added products', 'home.php', 'active'),
(10, 2, 2023, 'test', 'home.php', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_section_one_data`
--
ALTER TABLE `home_section_one_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journey`
--
ALTER TABLE `journey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `section1_data`
--
ALTER TABLE `section1_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_element`
--
ALTER TABLE `tbl_element`
  ADD PRIMARY KEY (`element_id`);

--
-- Indexes for table `tbl_future_products`
--
ALTER TABLE `tbl_future_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_img_id`);

--
-- Indexes for table `tbl_gallery_category`
--
ALTER TABLE `tbl_gallery_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_section`
--
ALTER TABLE `tbl_section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  ADD PRIMARY KEY (`timeline_id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_section_one_data`
--
ALTER TABLE `home_section_one_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journey`
--
ALTER TABLE `journey`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section1_data`
--
ALTER TABLE `section1_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_element`
--
ALTER TABLE `tbl_element`
  MODIFY `element_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_future_products`
--
ALTER TABLE `tbl_future_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_gallery_category`
--
ALTER TABLE `tbl_gallery_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_section`
--
ALTER TABLE `tbl_section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
