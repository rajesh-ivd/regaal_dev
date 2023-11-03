-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2023 at 11:39 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivdispla_regaal_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutuscontent`
--

CREATE TABLE `tbl_aboutuscontent` (
  `aboutUsHome_id` bigint(200) NOT NULL,
  `aboutUsTitle` longtext NOT NULL,
  `aboutUsHome_content` longtext NOT NULL,
  `aboutUsHomeStatus` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutuscontent`
--

INSERT INTO `tbl_aboutuscontent` (`aboutUsHome_id`, `aboutUsTitle`, `aboutUsHome_content`, `aboutUsHomeStatus`) VALUES
(2, 'The first test in man’s life begins with his family. If you can keep your family \'together\', then only you have the capability to extend the feeling of togetherness to the society. - Late Sagarrmal Kishorepuria', '', 'Active'),
(3, 'ACHIVEMENTS', '<ul>\r\n	<li>Operating at more than 100% of the plant capacity</li>\r\n	<li>Our customers include the top names in Food, Packaged Food &amp; Paper Industry</li>\r\n</ul>\r\n', 'Active'),
(4, 'FUTURE GOALS', '<ul>\r\n	<li>Setup modified starch processes by mid 2021</li>\r\n	<li>Double the production capacity by 2021</li>\r\n	<li>Increase the production capacity by four times in the next four years</li>\r\n</ul>\r\n', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutusimage`
--

CREATE TABLE `tbl_aboutusimage` (
  `aboutUsimage_id` bigint(200) NOT NULL,
  `aboutUsImageTitle` longtext NOT NULL,
  `aboutUsImageContent` longtext NOT NULL,
  `aboutUsImage` longtext NOT NULL,
  `section_content` longtext NOT NULL,
  `aboutUsImageStatus` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutusimage`
--

INSERT INTO `tbl_aboutusimage` (`aboutUsimage_id`, `aboutUsImageTitle`, `aboutUsImageContent`, `aboutUsImage`, `section_content`, `aboutUsImageStatus`) VALUES
(1, '', '<div style=\"text-align:justify\">\r\n<p style=\"text-align:left\">Inspired by Late Sagarmal Kishorepuria, Regaal Resources Private Limited is set up as the trading arm of the Kishorepuria family. Headed by Anil Kishorepuria, his grandson. The family inspiration comes from the words: &quot;We value Togetherness and Together we Create Value&quot;.<br />\r\n<br />\r\nLate S. M. Kishorepuria has inculcated deep family values in his children which have been passed on to younger generation.</p>\r\n</div>\r\n', '1600066670about-us.png', '', 'Active'),
(2, 'About Regaal Resources', '<p>Regaal Resources Pvt. Ltd. is an Agro-Tech company, engaged in the manufacturing of best quality Maize Starch and allied products such as Gluten, Germ and Fibre. Our manufacturing unit is located at Galgalia, Bihar, which is the hub of maize production in India and our Head Office is located in Kolkata, West Bengal.<br />\r\n<br />\r\nOur Plant currently has a capacity of 180 MT of Maize crushing per day and we are in the process of doubling our capacity by 2021.<br />\r\n<br />\r\nWe are shortly setting up Modified Starch Unit to produce Yellow Dextrin, White Dextrin, Cationic Starch, Pre-Gel Starch along with Food Grade starch products such as Baking Powder, Custard Powder, Corn flour and Icing Sugar.</p>\r\n', '1600066726about-1.png', '', 'Active'),
(3, 'Our Mission', '<p>We have four simple values that guide our behaviour and culture of innovation. Our values permeate through everything we do, including our relationships with our clients, our partners, our suppliers and the communities where we work.</p>\r\n\r\n<ul>\r\n	<li>Client focus &ndash; deliver on our promises</li>\r\n	<li>Integrity &ndash; always doing the right thing</li>\r\n	<li>Self-Actualization &ndash; Achieving the best we could.</li>\r\n	<li>Create opportunity &ndash; for our people to excel</li>\r\n</ul>\r\n', '1600066783mission.png', '', 'Active'),
(4, 'Our values', '<p>We champion people, whether as individuals or teams. Our people constantly strive for better and always go that extra mile, inspiring each other and clients to innovate. We challenge convention, apply a can-do attitude and are committed to quality and service excellence.<br />\r\n<br />\r\nWe employ an open and collaborative approach with our partners. This gives us a better perspective on how we can deliver cost-effective and beneficial outcomes for all stakeholders on every project, no matter how complex or challenging it is.<br />\r\n<br />\r\nWe strive to find better ways to deliver for our clients &amp; communities. We constantly challenge the status quo, make the seemingly impossible possible, and will always do so.</p>\r\n', '1600066822value.png', '', 'Active'),
(5, 'Our culture', '<p>We champion people, whether as individuals or teams. Our people constantly strive for better and always go that extra mile, inspiring each other and clients to innovate. We challenge convention, apply a can-do attitude and are committed to quality and service excellence.<br />\r\n<br />\r\nWe employ an open and collaborative approach with our partners. This gives us a better perspective on how we can deliver cost-effective and beneficial outcomes for all stakeholders on every project, no matter how complex or challenging it is.<br />\r\n<br />\r\nWe strive to find better ways to deliver for our clients &amp; communities. We constantly challenge the status quo, make the seemingly impossible possible, and will always do so.</p>\r\n', '1600066863culture.png', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutustimeline`
--

CREATE TABLE `tbl_aboutustimeline` (
  `aboutUsTimeline_id` bigint(200) NOT NULL,
  `timeline_title` longtext NOT NULL,
  `timeline_content` longtext NOT NULL,
  `timeline_month` varchar(600) NOT NULL,
  `timeline_year` longtext NOT NULL,
  `timeline_posted` datetime NOT NULL,
  `timeline_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutustimeline`
--

INSERT INTO `tbl_aboutustimeline` (`aboutUsTimeline_id`, `timeline_title`, `timeline_content`, `timeline_month`, `timeline_year`, `timeline_posted`, `timeline_status`) VALUES
(9, '2012 Year', '<p>Conception of Idea and Company Incorporation.</p>\r\n', 'Dec', '2012', '2020-09-14 13:37:22', 'Active'),
(10, '2015 Year', '<p>Commencement of work for the set-up of Manufacturing Unit</p>\r\n', 'Dec', '2015', '2020-09-14 13:37:29', 'Active'),
(11, '2018 Year', '<p>Commencement of Production</p>\r\n', 'Dec', '2018', '2020-09-14 13:37:38', 'Active'),
(12, '2019 Year', '<p>Consistent plant capacity Utilization at above 100%.</p>\r\n', 'Dec', '2019', '2020-09-14 13:37:45', 'Active'),
(13, '2020 Year', '<p>Plans for capacity expansion and set-up of modified starch unit.</p>\r\n', 'Dec', '2020', '2020-09-14 13:37:53', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` bigint(200) NOT NULL,
  `name` varchar(900) NOT NULL,
  `email` varchar(600) NOT NULL,
  `password` varchar(8000) NOT NULL,
  `admin_created` datetime NOT NULL,
  `admin_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `name`, `email`, `password`, `admin_created`, `admin_status`, `last_login`) VALUES
(1, 'Regaal', 'regaal@gmail.com', '12345', '2017-03-30 11:08:19', 'Active', '2020-09-28 12:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL,
  `menu_id` bigint(200) NOT NULL,
  `submenu_id` bigint(200) NOT NULL,
  `meta_keywrd` text NOT NULL,
  `banner_image` longtext NOT NULL,
  `banner_tag` longtext NOT NULL,
  `banner_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `menu_id`, `submenu_id`, `meta_keywrd`, `banner_image`, `banner_tag`, `banner_status`) VALUES
(3, 4, 13, 'Vehere Events', 'event gallery_header_image.jpg', '', 'Active'),
(11, 6, 0, 'blog,cyber security,communication intelligence', 'blog_insize.jpg', '', 'Active'),
(12, 5, 0, 'career', 'career_page.jpg', '', 'Active'),
(13, 7, 0, 'office,location,sector-v,saket district center,contact us', 'contact_us_new.jpg', '', 'Active'),
(14, 2, 10, 'Vehere,Research,Development,GEN-X TECHNOLOGIES,THE BIG DATA,PROTECTING PRIVACY RIGHTS', 'R&D image.jpg', '', 'Active'),
(16, 4, 12, 'News', 'news_header.jpg', '', 'Active'),
(17, 2, 8, 'about vehere', 'About Us1.jpg', '', 'Active'),
(18, 2, 11, 'Partners', 'partners_page.jpg', '', 'Active'),
(19, 1, 0, 'banner1', 'home_banner3.jpg', '<p><span style=\"font-size:14px\">From <strong>Maize</strong> to <strong>Starch</strong>,</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Quality Personified</span></p>\r\n', 'Active'),
(20, 1, 0, 'banner1', 'home_banner1.jpg', '<p><span style=\"font-size:16px\">Maize <strong>Starch</strong> Simplified</span></p>\r\n', 'Active'),
(24, 2, 9, 'Bigdata', 'leadership_image_21.jpg', '', 'Active'),
(25, 3, 14, 'Communications Intelligence', 'communications intelligence_new.jpg', '', 'Active'),
(27, 3, 15, '', 'Cyber_Defence_3.jpg', '', 'Active'),
(30, 18, 0, '', 'sitemap_view.jpg', '', 'Active'),
(31, 16, 0, 'integrity at vehere', 'integrity_page.jpg', '', 'Active'),
(33, 1, 0, '', 'home_banner2.jpg', '<p>Production</p>\r\n\r\n<p>Process</p>\r\n\r\n<p>Qualified</p>\r\n', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_category` varchar(1000) NOT NULL,
  `blog_image` varchar(4000) NOT NULL,
  `blog_image_des` varchar(3000) NOT NULL,
  `thumb_blog_image` varchar(3000) NOT NULL,
  `blog_thumb_image_des` varchar(3000) NOT NULL,
  `blog_title` varchar(3000) NOT NULL,
  `slug` varchar(2000) NOT NULL,
  `blog_shrtcontent` text NOT NULL,
  `blog_content` text NOT NULL,
  `bloger_name` text NOT NULL,
  `blog_tag` varchar(1000) NOT NULL,
  `blog_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `blog_posted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_category`, `blog_image`, `blog_image_des`, `thumb_blog_image`, `blog_thumb_image_des`, `blog_title`, `slug`, `blog_shrtcontent`, `blog_content`, `bloger_name`, `blog_tag`, `blog_status`, `blog_posted_date`) VALUES
(1, '2', '1492408307about.jpg', 'Lorem Ipsum', '149820984014979707081492408307blog1.jpg', 'Lorem Ipsum', 'What is Lorem Ipsum?', 'What-is-Lorem-Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', 'Ramya Roy', '', 'Inactive', '2017-06-23 14:54:00'),
(2, '8', '1497970708Privacy policy_Header image (1).jpg', '', '1502089176blog.jpg', '', 'The five step framework for data security to ensure businesses don\'t get ransomed by Ransomware', 'The-five-step-framework-for-data-security-to-ensure-businesses-dont-get-ransomed-by-Ransomware', '<p>The frequency and sophistication of cyber-attacks will most assuredly increase in velocity and scope in 2017, with recent news stories revealing that cyber criminals have reaped a thirty-five-fold increase in their earnings from ransomware attacks in 2016. It is high time that businesses pay heed to this growing menace, as ransomware evolves and mutates into an ever-increasing threat to organisations of virtually every shape and size.</p>\r\n', '<p>Vehere, a technology and innovation leader specialising in products and solutions for Homeland Security, Defence and Cyber Security reinforces the cyber defence systems of Government establishments and leading businesses. Vehere&rsquo;s cyber defence solutions focus on early detection, investigation and instant actionable insights to counter cyber-attacks such as ransomware, data breaches and advanced persistent threats.</p>\r\n\r\n<p>Vehere&rsquo;s team of cyber security experts have reviewed the recent spate of cyber-attacks that have happened globally and finds the adoption of NIST&rsquo;s Cyber Security Framework an apt fit for securing enterprises&rsquo; assets. The framework outlines the following functions:</p>\r\n\r\n<p><img alt=\"\" src=\"https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAqwAAAAJDI2Yzk2ZmFhLTYxY2ItNDU4OS05ZmM5LTQwN2Q0NTg5OTgxOA.jpg\" style=\"height:360px; width:584px\" /></p>\r\n\r\n<p><strong>Identify: Develop your understanding to manage the cybersecurity risk to your organisations systems, assets, data, and capabilities.</strong>&nbsp;Ensures understanding of the business context, identification of the resources that support critical functions and their related cybersecurity risks. This step is designed to enable your organisation to focus and prioritise its efforts, consistent with its risk management strategy and business needs.</p>\r\n\r\n<p><strong>Protect: Develop and implement the appropriate safeguards to ensure on-demand accessibility of critical digital data.</strong>&nbsp;Supports the ability to limit or contain the impact of a potential cybersecurity event. This function may include procedures such as Access Control; Awareness and Training; Data Security; Information Protection Processes and Procedures; Maintenance; and Protective Technology.</p>\r\n\r\n<p><strong>Detect: Develop and implement the appropriate activities to identify the occurrence of a cybersecurity event.</strong>&nbsp;Warrants the continuous monitoring of Anomalies and Events.</p>\r\n\r\n<p><strong>Respond: Develop and implement the appropriate activities to take action regarding a detected cybersecurity event.&nbsp;</strong>Supports the ability to contain the impact of a potential cybersecurity event. Outcomes of this function typically includes Response Planning; Communications; Analysis; Mitigation; and Improvements to the system.</p>\r\n\r\n<p><strong>Recover</strong>:&nbsp;<strong>Develop and implement the appropriate activities to maintain plans for resilience and to restore any capabilities or services that were impaired due to a cybersecurity event.</strong>&nbsp;Recovery Planning; Improvements; and Communications form the backbone of this function ensuring timely recovery to normal operations and reducing the impact of the breach.</p>\r\n\r\n<p>Ensuring your organisations&rsquo; data security requires a thorough approach that only an expert in this domain can advise you on.&nbsp;<strong>For more information on designing a fail-safe cyber defence system for your organisation, reach us at&nbsp;</strong><a href=\"http://mailto:info@vehere.com/\" rel=\"nofollow noopener\" target=\"_blank\"><strong>info@vehere.com</strong></a><strong>&nbsp;or call + 91 98308 06801 today.</strong></p>\r\n', 'Suman Mukherjee', '', 'Active', '2017-08-07 12:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_category`
--

CREATE TABLE `tbl_blog_category` (
  `blog_cat_id` bigint(200) NOT NULL,
  `blog_cat_name` varchar(900) NOT NULL,
  `blog_cat_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog_category`
--

INSERT INTO `tbl_blog_category` (`blog_cat_id`, `blog_cat_name`, `blog_cat_status`) VALUES
(1, 'Communication Intelligence', 'Active'),
(2, 'Cryptanalysis', 'Active'),
(3, 'Analytics Platform', 'Active'),
(4, 'Comprehensive Visibility', 'Active'),
(6, 'Ip Encryption', 'Active'),
(8, 'Data Security', 'Active'),
(9, 'Network Situational Awareness', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career`
--

CREATE TABLE `tbl_career` (
  `career_id` bigint(200) NOT NULL,
  `career_position` varchar(2000) NOT NULL,
  `career_positionId` varchar(3000) NOT NULL,
  `career_location` varchar(2000) NOT NULL,
  `career_title` varchar(2000) NOT NULL,
  `career_profile` varchar(1000) NOT NULL,
  `career_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `career_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_career`
--

INSERT INTO `tbl_career` (`career_id`, `career_position`, `career_positionId`, `career_location`, `career_title`, `career_profile`, `career_status`, `career_posted`) VALUES
(9, '1', 'VIPL/Kol/AJS/0118', 'Kolkata', 'UI Developer', '<p>UI Developer with at least 3 years experience in Javascript, AJAX, HTML5/CSS and knowledge of MVC Architecture.</p>\r\n\r\n<p>Preferred Skills:</p>\r\n\r\n<ol>\r\n	<li><span style=\"color:#555555\">Javascript Libraries like JQuery, Bootstrap</span></li>\r\n	<li><span style=\"color:#555555\">Angular JS. v1</span></li>\r\n	<li><span style=\"color:#555555\">NodeJS</span></li>\r\n	<li><span style=\"color:#555555\">Knowledge on REST API &amp; Microservices</span></li>\r\n	<li><span style=\"color:#555555\">Experience with programming language like C, C++, Java</span></li>\r\n	<li><span style=\"color:#555555\">Knowledge of NoSQL DB like MongoDB is a plus</span></li>\r\n	<li><span style=\"color:#555555\">Knowledge of Elastic stack is a plus</span></li>\r\n</ol>\r\n', 'Active', '2020-09-28 12:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(200) NOT NULL,
  `comment_blog_id` int(200) NOT NULL,
  `comment_name` text NOT NULL,
  `comment_email` text NOT NULL,
  `comment_website` text NOT NULL,
  `comment_message` text NOT NULL,
  `comment_status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive',
  `comment_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `comment_blog_id`, `comment_name`, `comment_email`, `comment_website`, `comment_message`, `comment_status`, `comment_posted`) VALUES
(1, 1, 'ramya', 'ramya@ivdisplays.com', '', 'Suspendisse potenti. Mauris vitae feugiat nisl. Cras nisl ante, pellentesque non ornare a, condimentum sit amet quam. Sed tincidunt vestibulum faucibus. Suspendisse potenti. Sed quis mi eu risus semper molestie vitae id nunc. Mauris in aliquam turpis, vitae condimentum lorem. In hac habitasse platea dictumst. Suspendisse dictum nulla risus, et ultrices leo viverra ac. Suspendisse semper urna sem, at maximus ex molestie at. Aliquam luctus lectus leo, ut convallis risus mollis sit amet. Etiam nec molestie augue. Cras vel mattis libero. Pellentesque ac congue diam, sed auctor ante. Sed volutpat justo ut nisl egestas, et dapibus nulla pharetra.', 'Inactive', '2017-04-17 12:32:42'),
(5, 1, 'Ramya', 'ramya@ivdisplays.com', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est elit, porttitor vitae mi et, euismod facilisis purus. Nam id scelerisque ligula. Aenean ut erat dignissim, suscipit libero sit amet, viverra purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse a malesuada elit, sed auctor quam. Nunc ac leo eu purus tristique placerat.', 'Active', '2017-04-17 12:33:21'),
(6, 1, 'ramya', 'ramya@ivdisplays.com', '', 'Pellentesque porta neque in nulla volutpat eleifend. Suspendisse lobortis erat velit, non suscipit ante finibus sed. Praesent nec tincidunt elit. Sed tortor turpis, porttitor ac malesuada eget, facilisis at erat. Donec quis eros tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus non hendrerit ante. Donec eget orci eget quam lacinia blandit ut tempor sem. In ac justo vitae odio semper faucibus vitae nec ante. Quisque eget consequat leo.', 'Inactive', '2017-04-17 12:38:11'),
(7, 1, 'Ramya', 'ramya@ivdisplays.com', '', 'Test comment', 'Active', '2017-07-23 19:13:24'),
(8, 1, 'sadsadsad', 'Ssdsad@g.co', '', 'dsfs', 'Inactive', '2017-08-01 18:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `contact_us_id` int(11) NOT NULL,
  `name` varchar(600) NOT NULL,
  `email` varchar(600) NOT NULL,
  `interest` varchar(600) NOT NULL,
  `message` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `photo_id` int(11) NOT NULL,
  `event_id` bigint(200) NOT NULL,
  `photo_title` longtext NOT NULL,
  `photo_image` longtext NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `photo_type` enum('corporate','events') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`photo_id`, `event_id`, `photo_title`, `photo_image`, `status`, `photo_type`) VALUES
(29, 5, 'Factory Image 1', '1599731140gallery1.JPG', 'Active', 'corporate'),
(30, 5, 'Factory Image 2', '1599731151gallery2.JPG', 'Active', 'corporate'),
(31, 5, 'Factory Image 3', '1599731164gallery3.JPG', 'Active', 'corporate'),
(32, 5, 'Factory Image 4', '1599731178gallery4.JPG', 'Active', 'corporate'),
(33, 5, 'Factory Image 5', '1599731189gallery5.JPG', 'Active', 'corporate'),
(34, 5, 'Factory Image 6', '1599731201gallery6.JPG', 'Active', 'corporate'),
(35, 5, 'Factory Image 7', '1599731215gallery7.JPG', 'Active', 'corporate'),
(36, 5, 'Factory Image 8', '1599731227gallery8.JPG', 'Active', 'corporate');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_events`
--

CREATE TABLE `tbl_gallery_events` (
  `gallery_events_id` bigint(20) NOT NULL,
  `image_events_name` varchar(900) NOT NULL,
  `image_events_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_gallery_events`
--

INSERT INTO `tbl_gallery_events` (`gallery_events_id`, `image_events_name`, `image_events_status`) VALUES
(1, 'Homeland Security', 'Inactive'),
(2, 'India Telecom', 'Inactive'),
(3, 'Middle East', 'Inactive'),
(4, 'Milipol Asia Pacific', 'Inactive'),
(5, 'Factory Images', 'Active'),
(6, 'Gartner Security and Risk Management Summit', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` bigint(150) NOT NULL,
  `home_content_title` varchar(2000) NOT NULL,
  `home_snippet` varchar(2000) NOT NULL,
  `home_description` varchar(2000) NOT NULL,
  `home_files` longtext NOT NULL,
  `home_slider_image1` longtext NOT NULL,
  `meta_keywrd1` longtext NOT NULL,
  `page_link` varchar(3000) NOT NULL,
  `home_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_content_title`, `home_snippet`, `home_description`, `home_files`, `home_slider_image1`, `meta_keywrd1`, `page_link`, `home_status`) VALUES
(2, 'Proactive Communications Intelligence & Cyber Defence', '<h4>Who We Are</h4>\r\n\r\n<p>Vehere, a R&amp;D company, is a technology and innovation leader specializing in homeland security, defence and cyber security</p>\r\n\r\n<p>Established in 2006, Vehere specializes in state-of-the-art communications and cyber intelligence capabilities in the broad communications spectrum and mission control against advanced cyber threats and data breaches. The company is headquartered in Kolkata, India and has been amongst the fastest growing technology firms in India and Asia.</p>\r\n', '', 'https://player.vimeo.com/video/114957708?autoplay=0', '1504769503Proactive Communications Intelligence1.jpg,1504769972Proactive Cyber Defence1.jpg,1504770263Fastest growing technology firm in India and Asia1.jpg', 'Proactive Communications Intelligence,Cyber Defence,Vehere is amongst the fastest growing technology firms in India and Asia!', 'products-communication.php,products-cyber.php,https://www2.deloitte.com/in/en/pages/technology-media-and-telecommunications/articles/technology-fast-50-2015.html', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_integrity`
--

CREATE TABLE `tbl_integrity` (
  `integrity_id` bigint(120) NOT NULL,
  `integrity_banner` varchar(3000) NOT NULL,
  `integrity_quote` longtext NOT NULL,
  `integrity_content` varchar(3000) NOT NULL,
  `integrity_image1` varchar(3000) NOT NULL,
  `integrity_image2` varchar(3000) NOT NULL,
  `integrity_image3` varchar(3000) NOT NULL,
  `integrity_image4` varchar(3000) NOT NULL,
  `integrity_image5` varchar(3000) NOT NULL,
  `integrity_image6` varchar(3000) NOT NULL,
  `integrity_image7` varchar(3000) NOT NULL,
  `integrity_caption1` varchar(3000) NOT NULL,
  `integrity_caption2` varchar(3000) NOT NULL,
  `integrity_caption3` varchar(3000) NOT NULL,
  `integrity_caption4` varchar(3000) NOT NULL,
  `integrity_caption5` varchar(3000) NOT NULL,
  `integrity_caption6` varchar(3000) NOT NULL,
  `integrity_caption7` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_integrity`
--

INSERT INTO `tbl_integrity` (`integrity_id`, `integrity_banner`, `integrity_quote`, `integrity_content`, `integrity_image1`, `integrity_image2`, `integrity_image3`, `integrity_image4`, `integrity_image5`, `integrity_image6`, `integrity_image7`, `integrity_caption1`, `integrity_caption2`, `integrity_caption3`, `integrity_caption4`, `integrity_caption5`, `integrity_caption6`, `integrity_caption7`) VALUES
(2, '1498474423intgrity.jpg', ' Vehere expects its employees to achieve and maintain a high standard of ethics, professional conduct and work performance to ensure that the Company maintains its reputation with all internal and external stakeholders. ', '<p>Together with our Business Principles, they govern the way we work and make choices about people, investments and other resources.</p>\r\n\r\n<p>Our Business Principles set out our responsibilities to customers, employees, business partners and society. They include commitments to fair competition, business integrity and compliance with applicable laws and regulations. They encourage employees to express themselves instinctively with frankness, communicate in a straightforward manner and put forth ideas to stimulate debates, criticize, rip apart and open up in a manner which helps in the development of the organization.</p>\r\n\r\n<h2>Code Of Conduct</h2>\r\n\r\n<p>The Vehere Code of Conduct explains how employees and anyone else acting on behalf of the Company must behave to live up to the Core Values and Business Principles. To ensure understanding of and adherence to the Code of Conduct the Company periodically provides all information to people about its importance.</p>\r\n\r\n<p>Every employee is expected to act in accordance with the highest standards of personal and professional integrity; honesty and ethical conduct not only on Company premises and client locations but also at business and social events where they represent the organization.</p>\r\n\r\n<h2>Compliance</h2>\r\n\r\n<p>We expect everyone in the Company to conduct their activities in compliance with the Code of Conduct. Leaders play an essential role in this, by being uncompromising with respect to compliance, making it clear through their actions and expectations that all business plans and activities must be undertaken in a responsible and ethical manner. Those who engage in conduct that is contrary to the ethical standards set forth may be subject to discipline, up to and including, termination of employment. The Company encourages free and open communication related to its Core Values and Business Principles.</p>\r\n\r\n<p>Those who have questions or concerns regarding compliance are free to address them at any point of time with their managers, Human Resources or company leadership. We are confident that maintaining high integrity standards leads to achievement of business objectives which in turn leads to the success of the Company.</p>\r\n', '1498474423core1.jpg', '1498474423core2.jpg', '1498474423core3.jpg', '1498474423core4.jpg', '1498474423core5.jpg', '1498474423core6.jpg', '1498474423core7.jpg', 'Honesty and Integrity', 'Respect for people', 'Intolerance towards bureaucracy', 'Team Work', 'Boundary-less contribution', 'Search for and application of new ideas and innovations', 'Acceptance of change and seeing the growth opportunities it brings');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leadership`
--

CREATE TABLE `tbl_leadership` (
  `member_id` int(11) NOT NULL,
  `member_category` varchar(1000) NOT NULL,
  `member_name` text NOT NULL,
  `member_designation` text NOT NULL,
  `member_desc` text NOT NULL,
  `member_image` text NOT NULL,
  `member_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leadership`
--

INSERT INTO `tbl_leadership` (`member_id`, `member_category`, `member_name`, `member_designation`, `member_desc`, `member_image`, `member_status`) VALUES
(20, '5', 'Anil Pandey', 'Chief Consultant', '<p><strong>Mr Anil Pandey</strong>&nbsp;a Mechanical engineering graduate, having 32 years&rsquo;<br />\r\nexperience in &nbsp;&nbsp;&nbsp;the starch and food processing industry, he has been<br />\r\ninstrumental in installing and &nbsp;&nbsp;&nbsp;&nbsp;establishing starch &amp; its derivative&nbsp;projects.<br />\r\nGained vast experience in project co-ordination, construction, site selection,<br />\r\nbasic engineering. detailed engineering, operation, maintenance, erection &amp;<br />\r\ncommissioning of major turnkey projects. Besides this he had also&nbsp;been part of<br />\r\nthe organizations such as Sr Technical executive, project co-coordinator, plant in<br />\r\ncharge&nbsp;&amp; Technical Director.</p>\r\n', '1599658507pic1-001.jpg', 'Active'),
(21, '5', 'Rohan Kishorepuria', 'Vice President', '<p><strong>Mr. Rohan Kishorepuria</strong> is the youngest in the family business and is<br />\r\nworking in the organisation for almost 2 years,<br />\r\nHe is a Mechanical engineering graduate and leads the plant operations<br />\r\nin Galgalia, as a young generation he believes in technological<br />\r\nadvancement, Information technology and willing to take the<br />\r\norganisation at new heights.</p>\r\n', '1599658569pic2-001.jpg', 'Active'),
(22, '5', 'Anil Kishorepuria', 'Director', '<p><strong>Mr. Anil Kishorepuria</strong> is the son of Mr. Raj Kumar Kishorepuria and is also a commerce<br />\r\ngraduate. He has a vast experience of handling various business functions such as import and<br />\r\nexport, trading of steel, trading of tractors. Currently he is developing a real estate project at<br />\r\nBhagalpur, Bihar consisting of 318 residential units with most advanced amenities and security<br />\r\nsystem. He is also handling the entire finance of the group.</p>\r\n', '1599719648pic3.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leadership_category`
--

CREATE TABLE `tbl_leadership_category` (
  `leadership_cat_id` bigint(200) NOT NULL,
  `leadership_cat_name` varchar(900) NOT NULL,
  `leadership_cat_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leadership_category`
--

INSERT INTO `tbl_leadership_category` (`leadership_cat_id`, `leadership_cat_name`, `leadership_cat_status`) VALUES
(5, 'Regaal Team', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_managepartnercategory`
--

CREATE TABLE `tbl_managepartnercategory` (
  `managePartnerCategory_id` bigint(100) NOT NULL,
  `managePartnerCategory` longtext NOT NULL,
  `managePartnerStatus` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_managepartnercategory`
--

INSERT INTO `tbl_managepartnercategory` (`managePartnerCategory_id`, `managePartnerCategory`, `managePartnerStatus`) VALUES
(1, 'Partners Program', 'Active'),
(2, 'Sales Alliances', 'Active'),
(4, 'Technology Alliances', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_managepartnerimage`
--

CREATE TABLE `tbl_managepartnerimage` (
  `managePartnerImageId` bigint(200) NOT NULL,
  `managePartnerImageContent` longtext NOT NULL,
  `managePartnerImage` longtext NOT NULL,
  `managePartnerImageStatus` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_managepartnerimage`
--

INSERT INTO `tbl_managepartnerimage` (`managePartnerImageId`, `managePartnerImageContent`, `managePartnerImage`, `managePartnerImageStatus`) VALUES
(1, 'The Alliance Program creates an opportunity for forging powerful relationships with worldwide system integrators & consultants Vehereâ€™s flexible alliance program provides a business environment for selecting an Alliance or Partnership Level that best suits the Partnerâ€™s business needs. The program offered at each Alliance Level is committed to the growth and promotion of partner solutions and services', '1494572237parallax-bg10.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_managepartnertimeline`
--

CREATE TABLE `tbl_managepartnertimeline` (
  `timeline_id` bigint(200) NOT NULL,
  `topic_id` bigint(200) NOT NULL,
  `content` longtext NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_managepartnertimeline`
--

INSERT INTO `tbl_managepartnertimeline` (`timeline_id`, `topic_id`, `content`, `status`, `posted`) VALUES
(2, 1, '<p>The goal of the Vehere Alliance Program is to deliver Products through strategic alliances with other businesses. As part of the program, you benefit from Vehere&rsquo;s business success by harnessing the opportunity to expand your own business and striving to become a solutions provider to the high-profile Government Agencies, Ministry of Interior/Home, Defence, Law Enforcement and Intelligence (LENS) Agencies, Communication Business Owners and Service Providers. For its Alliance Program, Vehere is committed to creating an innovative program by merging the company&rsquo;s expertise in the surveillance &amp; interception technology domain with the alliance partners&rsquo; industry knowledge to provide an integrated alliance model for the joint customers.</p>\r\n', 'Active', '0000-00-00 00:00:00'),
(3, 2, '<p>Vehere Sales Alliance Program is designed to help Solution Integrators and Managed Service Providers expand their businesses. Vehereâ€™s premium technology solutions for the Communications Service Provider & various Government Agencies are designed to enable its alliance partners attract new customers, provide a collaborative platform for alliance partners to leverage each otherâ€™s strengths, and enhance revenue generation from their existing customer base. The primary objective of the Sales Alliance Program is to create a blueprint for joint success by providing extraordinary top and bottom-line growth opportunities to Vehere Alliance Partners.\r\n</p>\r\n<h4 style=\"margin-top:10px\"><strong style=\"color:#3a3a3a; font-weight:500;\">Alliance Levels</strong></h4>\r\n<h4><strong style=\"color:#3a3a3a; font-weight:500\">Associate Partners</strong></h4>\r\n<p>This is the entry level tier of the Vehere Sales Alliance Program. The Program requirements and benefits are suitably structured to boost instant growth.</p>\r\n<h4 style=\"margin-top:10px\"><strong style=\"color:#3a3a3a; font-weight:500;\">Premier Partners</strong></h4>\r\n<p>Are those who have already invested substantial amount of resources in developing Vehereâ€™s solutionsâ€™ expertise, have engaged in attracting large-enterprise prospects, have actively executed marketing programs, and have conducted network reviews and evaluations.\r\n</p>\r\n<h4 style=\"margin-top:10px\"><strong style=\"color:#3a3a3a; font-weight:500;\">Elite Partners</strong></h4>\r\n<p>Are those who have achieved the highest levels of Vehereâ€™s sales and technical expertise and have invested substantial resources in promoting and implementing Vehereâ€™s solutions in large business environments. In order to enlist in this Alliance Partnership Level, the prospective Partners must have multiple branch offices and should be highly committed to partnering with Vehere. </p> ', 'Active', '0000-00-00 00:00:00'),
(4, 4, '<p>Vehereâ€™s Technology Alliance Program offers products and solutions which complement the companyâ€™s technology offerings. The Technology Alliance Partners can benefit from Vehereâ€™s proven track record in the Government and Communication Services sectors. The Technology Alliance partners are presented in a business environment where they can seamlessly integrate their existing applications and solutions with the Vehere platform. From across a range of industries, Technology providers can create and develop innovative solutions for Vehere customers, thus promoting adoption of the Vehere platform.</p>\r\n            <p>The different levels of alliance partnerships offered in the Technology Alliance Partners program are:</p>\r\n            <h4 style=\"margin-top:10px\"><strong style=\"color:#3a3a3a; font-weight:500\">Entry</strong></h4>\r\n            <p>This is the basic level of the Technology Alliance Program. This level helps in making Vehereâ€™s products and services available at a discount in order to support and assist joint solution development. This program is meant primarily for startups or early-stage integration efforts, where hands-on working experience with Vehere technology is mandatory.</p>\r\n              <h4 style=\"margin-top:10px\"><strong style=\"color:#3a3a3a; font-weight:500\">Foundation</strong></h4>\r\n            <p>The Technology Alliance partners at this level have significant experience in developing solutions that utilize Vehere products to create a convincing joint solution offering for customers and sales alliance partners. At this level, the Technology Alliance partners should be capable of aligning with Vehere in at least one geography.</p>\r\n             <h4 style=\"margin-top:10px\"><strong style=\"color:#3a3a3a; font-weight:500\">Affiliate</strong></h4>\r\n            <p>Affiliate Level Technology Alliance Partners are those who possess the maximum amount of sales and technical competency in Vehere products and solutions and have significantly invested in promoting and implementing Vehere solutions that are part of a joint solution offering to customers and channel partners. The Affiliate Level Alliance Partners should be aligned with Vehere in all geographies.</p> ', 'Active', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` bigint(200) NOT NULL,
  `menu_name` varchar(600) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `p_id` bigint(200) NOT NULL,
  `page_link` tinytext NOT NULL,
  `page_title` varchar(3000) NOT NULL,
  `meta_keywords` varchar(2000) NOT NULL,
  `meta_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_name`, `status`, `p_id`, `page_link`, `page_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'HOME', 'Active', 0, '', '', '', ''),
(2, 'ABOUT US', 'Active', 0, '', '', '', ''),
(3, 'PRODUCTS', 'Active', 0, '', '', '', ''),
(4, 'MEDIA', 'Active', 0, '', '', '', ''),
(5, 'CAREER', 'Active', 0, '', '', '', ''),
(6, 'BLOG', 'Active', 0, '', '', '', ''),
(7, 'CONTACT US', 'Active', 0, '', '', '', ''),
(8, 'About Us', 'Active', 2, '', '', '', ''),
(9, 'Leadership', 'Active', 2, '', '', '', ''),
(10, 'R & D', 'Active', 2, '', '', '', ''),
(11, 'Partners', 'Active', 2, '', '', '', ''),
(12, 'News', 'Active', 4, '', '', '', ''),
(13, 'Events gallery', 'Active', 4, '', '', '', ''),
(14, 'Communications Intelligence', 'Active', 3, '', '', '', ''),
(15, 'Cyber Defence', 'Active', 3, '', '', '', ''),
(16, 'Integrity', 'Active', 0, 'integrity.php', 'Integrity At Vehere', 'Integrity,vehere', 'Integrity,vehere'),
(17, 'Privacy Policy', 'Active', 0, '', '', '', ''),
(18, 'Site Map', 'Active', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` bigint(200) NOT NULL,
  `news_title` text NOT NULL,
  `news_slug` longtext NOT NULL,
  `news_content` text NOT NULL,
  `news_image` varchar(2000) NOT NULL,
  `news_month` longtext NOT NULL,
  `news_year` longtext NOT NULL,
  `news_posted` datetime NOT NULL,
  `news_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `news_type` enum('News','Events') NOT NULL DEFAULT 'News'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_slug`, `news_content`, `news_image`, `news_month`, `news_year`, `news_posted`, `news_status`, `news_type`) VALUES
(18, 'Vehere is the Associate Lead Sponsor for ISS World Asia-Malaysia, 2-4 December', 'Vehere-is-the-Associate-Lead-Sponsor-for-ISS-World-Asia-Malaysia-2-4-December', 'Vehere is the Associate Lead Sponsor for ISS World Asia to be held at Kuala Lumpur, MY, from 2-4 December, 2014.  ISS World Asia is the world\'s largest gathering of Asian Law Enforcement, Intelligence and Homeland Security Analysts as well as Telecom Operators responsible for Lawful Interception, Hi-Tech Electronic Investigations and Network Intelligence Gathering.   ISS World Programs present the methodologies and tools for Law Enforcement, Public Safety and Government Intelligence Communities in the fight against drug trafficking, cyber money laundering, human trafficking, terrorism and other criminal activities conducted over today\'s telecommunications network and the Internet.', '1501849133NUTI6VVBG4-20141112-062127.jpg', '11-12', '2014', '2017-08-05 22:24:01', 'Active', ''),
(22, 'Vehere ranked amongst the fastest growing Technology Firm, 2014', 'Vehere-ranked-amongst-the-fastest-growing-Technology-Firm-2014', 'Vehere has bagged 26th position amongst the Fastest growing Technology Firms awarded by Deloitte for the year 2014. Vehere has been ranked consistently amongst the fastest 50 since 2012 and this year the rank stepped up leading us to feature amongst the top 30 in the league. The Technology Fast 50 India program is part of a truly integrated Asia Pacific program recognizing Indiaâ€™s fastest growing and most dynamic technology companies and includes all areas of technology. The program recognizes the fastest growing technology companies in India based on their percentage revenue growth over the past three financial years.  http://www2.deloitte.com/content/dam/Deloitte/in/Documents/technology-media-telecommunications/in-tmt-tech-fast-report-2014-noexp.pdf', '1501919456Y4GMSKTPN5-20141112-234650 copy.jpg', '01-01', '2014', '2017-08-07 14:37:33', 'Active', ''),
(23, 'Vehere is the Associate Lead Sponsor for ISS World Middle East, 16-18 March, Dubai', 'Vehere-is-the-Associate-Lead-Sponsor-for-ISS-World-Middle-East-16-18-March-Dubai', 'Vehere is the Associate Lead Sponsor for ISS World Middle East to be held at Dubai, from 16-18 March, 2015.  ISS World Middle East is the world\'s largest gathering of Middle East Law Enforcement, Intelligence and Homeland Security Analysts as well as Telecom Operators responsible for Lawful Interception, Hi-Tech Electronic Investigations and Network Intelligence Gathering.  ISS World Programs present the methodologies and tools for Law Enforcement, Public Safety and Government Intelligence Communities in the fight against drug trafficking, cyber money laundering, human trafficking, terrorism and other criminal activities conducted over today\'s Telecommunications Networks, the Internet and Social Networks.', '150191965336TFBTQHLR-20150106-002158.jpg', '01-06', '2015', '2017-08-05 22:24:27', 'Active', ''),
(24, 'Vehere ranked amongst the fastest growing technology firms, 2015', 'Vehere-bagged-the-', 'Vehere was awarded ', '1501919788WSA3RRWHCC-20150925-000122.jpg', '09-25', '2015', '2017-08-05 22:24:40', 'Active', ''),
(25, 'Vehere showcased itâ€™s prestigious Intelligent Spectrum Control System at the North Tech Symposium 2015', 'Vehere-showcased-its-prestigious-Intelligent-Spectrum-Control-System-at-the-North-Tech-Symposium-2015', 'The North Tech Symposium 2015 was held on 7th and 8th September 2015 at Udhampur in Jammu and Kashmir, in the premises of Advance Base Workshop under the aegis of HQ Northern Command (EME).The  Symposium was inaugurated by GOC, Northern Command.A number of senior officials from the Army, Air force, Para Military Forces along with officers and troops attended the Symposium- cum-equipment display. This was an event to exhibit and demonstrate a complete range of products relevant to the army field. Vehere displayed it\'s indigenously designed and fabricated ISCS(Intelligent Spectrum Control System).The visiting teams were astonished by its uniqueness and the operational range as compared to the conventional jammers.  The Symposium comprised of a ', '1501920323Untitled-2.jpg', '09-25', '2015', '2017-08-05 22:25:19', 'Active', ''),
(28, 'Vehere ranked amongst the fastest growing technology firms, 2015', 'Vehere-ranked-amongst-the-fastest-growing-technology-firms-2015', 'Vehere has bagged 20th position amongst the Fastest growing Technology Firms awarded by Deloitte for the year 2015. Vehere has been ranked consistently amongst the fastest 50 since 2012 and this year the rank stepped further up leading us to feature amongst the top 20 in the league. The Technology Fast 50 India program is part of a truly integrated Asia Pacific program recognizing Indiaâ€™s fastest growing and most dynamic technology companies and includes all areas of technology. The program recognizes the fastest growing technology companies in India based on their percentage revenue growth over the past three financial years.  http://www2.deloitte.com/in/en/pages/technology-media-and-telecommunications/articles/technology-fast-50-2015.html', '1501921224Y4GMSKTPN5-20141112-234655 copy.jpg', '11-09', '2015', '2017-08-05 22:25:28', 'Active', ''),
(29, 'Vehere participating in Defexpo 2016 as an Exhibitor', 'Vehere-participating-in-Defexpo-2016-as-an-Exhibitor', 'Vehere is participating as one of the Exhibitors in the upcoming Defexpo, 2016 to be held in Goa. Defexpo India is India\'s 9th Land, Naval & Internal Homeland Security Systems Exhibition which is scheduled to be held at the Quitol, South Goa, from 28th to 31st March 2016.', '1501925024E7O339TLI6-20160225-235101.png', '02-22', '2016', '2017-08-05 14:53:44', 'Active', ''),
(30, 'Vehere, the Gold Sponsor for Homeland Security Event by Assocham', 'Vehere-the-Gold-Sponsor-for-Homeland-Security-Event-by-Assocham', 'Vehere was the official Gold Partner for the 5th International Conference and Exhibition on Homeland Security held at New Delhi from 16-17 August; organized by ASSOCHAM. This year\'s theme was Industry\'s role in National Security and was attended by around 200 delegates from Ministry of Home Affairs, top leaders from Homeland Security, Paramilitary forces, State polices and Embassies. This premium event was graced by Shri Rajnath Singh, Honorable Union Minister of Home Affairs, GOI. Vehere also presented on the topic \'Digital Security, Emerging Threats and Solutions\' on the second day of the event. ', '15019220511WYNVMWDP1-20160826-073913.jpg', '08-26', '2016', '2017-08-05 22:25:42', 'Active', ''),
(31, 'A moment of pride at Vehere. Dataquest Magazine covers us on Feb 2017', 'A-moment-of-pride-at-Vehere-Dataquest-Magazine-covers-us-on-Feb-2017', 'Latest edition of Dataquest Feb 2017  Link: http://www.dqindia.com/proactive-communications-intelligence-and-cyber-defense-at-the-heart-of-vehere/', '1501922294JVIFULZDKB-20170213-223943.jpg', '02-13', '2017', '2017-08-05 22:26:07', 'Active', ''),
(33, 'News on Vehere in Ananda Bazaar on 21st Feb 2017', 'News-on-Vehere-in-Ananda-Bazaar-on-21st-Feb-2017', 'Vehere mentioned in Anand Bazaar Business Page  Link: http://www.anandabazar.com/business/nasdaq-may-comes-in-information-security-for-the-city-1.567793', '15019241075KI56MDSY5-20170228-225108.jpg', '02-28', '2017', '2017-08-05 14:38:27', 'Active', ''),
(34, 'Vehere Participates in India Telecom 2017 exhibition', 'Vehere-Participates-in-India-Telecom-2017-exhibition', 'Vehere marked its presence in India Telecom 2017 exhibition attended by prominent ASEAN Region Ministers, Senior Government Officials and Industry Experts', '15019242222WHD31TNNN-20170228-222738.jpg', '02-28', '2017', '2017-08-05 14:41:16', 'Active', ''),
(35, 'Vehere Participates in ISS World middle east 2017', 'Vehere-Participates-in-ISS-World-middle-east-2017', 'Vehere Stall/Exhibits its product range in International Exhibition', '15019243948BVNMJ7XLE-20170315-020713.jpg', '03-15', '2017', '2017-08-05 14:43:14', 'Active', ''),
(36, 'Vehere gets Featured in DataQuest March 2017 Edition again. Good things gets noted often', 'Vehere-gets-Featured-in-DataQuest-March-2017-Edition-again-Good-things-gets-noted-often', 'Vehere gets mentioned in DataQuest March 2017  Link: http://www.dqindia.com/vehere-on-its-path-of-making-a-safer-world/', '1501924660RK6AWGOQDQ-20170317-052703.jpg', '03-17', '2017', '2017-08-05 14:51:24', 'Active', ''),
(37, 'Vehere participates in Milipol Asia-Pacific, Singapore from 4 â€“ 6 April, 2017', 'Vehere-participates-in-Milipol-Asia-Pacific-Singapore-from-4-6-April-2017', 'Vehere generated a lot of interest from potential partners, fellow exhibitors and distinguished delegates at Milipol Asia-Pacific 2017 in Singapore, the Asia-Pacific regions\' most talked about exhibition dedicated to homeland security.', '1501924768DG1FN9PFQT-20170410-002219.jpg', '04-10', '2017', '2017-08-05 14:49:28', 'Active', ''),
(38, 'Vehere gets featured in Hindu Business Line on 15 April 2017', 'Vehere-gets-featured-in-Hindu-Business-Line-on-15-April-2017', 'Link: http://www.thehindubusinessline.com/info-tech/how-gps-tech-firm-vehere-changed-directions-to-fight-cyber-crime/article9640440.ece', '1501924894IVQ8GI97DZ-20170416-234535.jpg', '04-16', '2017', '2017-08-05 14:51:34', 'Active', ''),
(39, 'Vehere gets quoted in Ananda Bazar Patrika on 16 May 2017', 'Vehere-gets-quoted-in-Ananda-Bazar-Patrika-on-16-May-2017', 'Link: http://www.anandabazar.com/national/question-arises-over-the-cyber-security-of-country-1.613396', '1501925187FKRSJUIWHN-20170519-052602.jpg', '05-19', '2017', '2017-08-05 14:56:27', 'Active', ''),
(40, 'Vehere partners FICCI for  Homeland Security 2017 in  New Delhi from 24-25 May, 2017', 'Vehere-partners-FICCI-for-Homeland-Security-2017-in-New-Delhi-from-24-25-May-2017', 'Vehere has been synonymous with technology and product innovations in the niche domain of Homeland Security, Defence and Cyber Security. Proud moment for Vehere to partner FICCI in recognizing and honouring India\'s Internal Security Forces for the most innovative and best practices in policing introduced by them.', '1501925259ERU15NJI4E-20170527-234836.jpg', '05-27', '2017', '2017-08-05 22:27:07', 'Active', ''),
(41, 'Vehere Co-Founder Praveen Jaiswal speaks at FICCI Homeland Security 2017', 'Vehere-Co-Founder-Praveen-Jaiswal-speaks-at-FICCI-Homeland-Security-2017', 'Vehere\'s Co-Founder & Director, Praveen Jaiswal spoke about Encryption being the latest challenge to law enforcement not just in India but around the world. ', '1501925337NXTGTN9G4G-20170527-235120.jpg', '05-27', '2017', '2017-08-05 22:26:46', 'Active', ''),
(42, 'Winner of Growth - IT Product Award 2017 at Nasscom Product Conclave', 'Winner-of-Growth---IT-Product-Award-2017-at-Nasscom-Product-Conclave', 'Vehere wins the NASSCOM Award for Growth-IT Product at the NASSCOM IT Awards tonight. A proud moment for all of us at Vehere.', '1501925434569Z6XC91F-20170706-102634.jpg', '07-06', '2017', '2017-08-05 22:14:13', 'Active', ''),
(43, 'Vehere participated In Milipol Paris 2017, a Leading Event for Homeland Security', 'Vehere-participated-In-Milipol-Paris-2017-a-Leading-Event-for-Homeland-Security', 'Praveen Jaiswal and Mannu Kalra represented Vehere at Milipol Paris 2017, held from 21 - 24 November at Nord Villepinte Exhibition Centre. Our innovative solutions for Satellite, GSM and Fiber Optics Surveillance were the key talking points for all visitors who walked in to our booth.', '1511941473Milipol Paris_header_image.jpg', '01-01', '2017', '2017-12-28 11:57:53', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office`
--

CREATE TABLE `tbl_office` (
  `office_id` bigint(200) NOT NULL,
  `office_name` varchar(900) NOT NULL,
  `office_address` varchar(900) NOT NULL,
  `office_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_office`
--

INSERT INTO `tbl_office` (`office_id`, `office_name`, `office_address`, `office_status`) VALUES
(8, 'FACTORY: AT BHATGAON', '<p>GALGALIA CHECK POST<br />\r\nTHAKURGANJ BLOCK<br />\r\nDIST - KISHANGANJ<br />\r\nBIHAR - 855106<br />\r\nPH: 0659232011</p>\r\n', 'Active'),
(9, 'CITY OFFICE :', '<p>G - 603, 6TH FLOOR<br />\r\nTOWER NO. 4 CITY CENTER<br />\r\nMATIGARA, SILIGURI<br />\r\nPIN - 734010<br />\r\nPH:+91 3532576896</p>\r\n', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `partner_id` int(11) NOT NULL,
  `partner_content` text NOT NULL,
  `partnercontent_type` enum('PARTNERS PROGRAM','SALES ALLIANCES','TECHNOLOGY ALLIANCES') NOT NULL,
  `partner_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_partner`
--

INSERT INTO `tbl_partner` (`partner_id`, `partner_content`, `partnercontent_type`, `partner_status`) VALUES
(2, 'The goal of the Vehere Alliance Program is to deliver Products through strategic alliances with other businesses. As part of the program, you benefit from Vehereâ€™s business success by harnessing the opportunity to expand your own business and striving to become a solutions provider to the high-profile Government Agencies, Ministry of Interior/Home, Defence, Law Enforcement and Intelligence (LENS) Agencies, Communication Business Owners and Service Providers.', 'PARTNERS PROGRAM', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privacy`
--

CREATE TABLE `tbl_privacy` (
  `privacy_id` bigint(20) NOT NULL,
  `privacy_terms` longtext NOT NULL,
  `privacy_banner` longtext NOT NULL,
  `banner_title` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_privacy`
--

INSERT INTO `tbl_privacy` (`privacy_id`, `privacy_terms`, `privacy_banner`, `banner_title`) VALUES
(1, '<p><span style=\"font-size:22px\"><span style=\"background-color:white\"><span style=\"color:#3a3a3a\">Data Privacy Policy</span></span></span></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">&nbsp;Principles for the secure use of personal data</span></span></strong></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#3a3a3a\">1.Respect</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">Principle: VEHERE respects the privacy of beneficiaries and recognises that obtaining and processing their personal data represents a potential threat to that privacy</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#3a3a3a\">2.Protect By Design</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">Principle: VEHERE &quot;protects by design&quot; the personal data it obtains from beneficiaries either for its own use or for use by third parties it initiates or implements</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#3a3a3a\">3.Understand Data Flows And Risks</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">Principle: VEHERE analyses, documents and understands the flow of beneficiaries data it initiates or implements within its own organisation and between its organisation and others and develops risk mitigation strategies which might be required to address any risk arising from these flows</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#3a3a3a\">4. Quality And&nbsp;Accuracy</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">Principle: VEHERE ensures that accuracy of the personal data it collects, stores and uses, including by keeping information up to date, relevant and not excessive in relation to the purpose for which it is processed, and by not keeping data for longer than necessary</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#3a3a3a\">5. Obtain Consent Or Information Beneficiaries As To Use Of Their Data</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">Principle: At the point of data capture, beneficiaries are informed as to the nature of the data being collected, with whom it will be shared, who is responsible for the secure use of their data and be provided with the opportunity to question the use of the data and withdraw from the program should they not wish their personal data to be used for the purpose described</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\"><strong>6. Security</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">Principle: VEHERE implements appropriate technical and operational security standards for each stage of the collection, use and transfer of beneficiary data to prevent unauthorised access, disclosure or loss and in particular any external threats that may be identified and actions are taken to mitigate any risks arising</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#3a3a3a\">7. Disposal</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">Principle: VEHERE does not hold beneficiary data for longer than is required unless we have clear, justifiable and documented reasons for doing so otherwise data geld by the organisation and any relevant third parties is destroyed</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:#3a3a3a\">8. Accountability</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#3a3a3a\">Principle: VEHERE establishes a mechanism whereby a beneficiary can request information about what personal data an organisation holds about them, and mechanisms to receive and respond to any complaints or concerns beneficiaries may have about the use of their personal data</span></span></p>\r\n', '150669132114984599951497968757Privacy policy_Header image copy.jpg', 'vehere-privacy-policy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_title` longtext NOT NULL,
  `product_shrt_desc` longtext NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` longtext NOT NULL,
  `image_title` longtext NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `product_type` enum('ProductsCyber','ProductsCommunication') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_title`, `product_shrt_desc`, `product_desc`, `product_image`, `image_title`, `status`, `product_type`) VALUES
(15, 'MAIZE STARCH', '<p style=\"text-align:justify\">Maize starch also known as Corn starch or flour is a fundamental ingredient in most of the packaged food and industrial products; it is extracted from the corn<br />\r\nkernel and has a distinctive appearance and feed.</p>\r\n\r\n<p style=\"text-align:justify\">Maize starch in natural &amp; modified, forms provides viscosity, texture and other desired properties to:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Food &amp; paper products</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Canned, chilled &amp; frozen products</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Microwaveable goods</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Dry mixes</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\">Extruded snacks.</span></li>\r\n</ul>\r\n', '<p style=\"text-align:justify\">Practically every industry in existence uses starch or its derivatives in one form or another.</p>\r\n\r\n<p style=\"text-align:justify\">Maize Starch exhibits all the properties of native starch with some special features such as non-foaming &amp; non-thinning characteristics of boiling solution. Hence maize starch has a marginal effect on the efficiency in weaving and paper industry. Where high viscosity starch is used, it imparts higher tensile strength to the fibre and thus improves the sizing.</p>\r\n', '1599726131product1.jpg', 'MAIZE STARCH', 'Active', 'ProductsCommunication'),
(16, 'MAIZE GERM', '<p>Germ&nbsp;is one of the ingredients of the&nbsp;maize&nbsp;which is separated in&nbsp;Maize&nbsp;crushing process. Corm&nbsp;Germ&nbsp;is the endosperm of&nbsp;Maize&nbsp;grain; it is a yellow colored seed, pleasantly nutty in taste and rich in oil. It is mainly used for extraction of&nbsp;maize&nbsp;oil and manufacturing of feed supplement.</p>\r\n', '', '1599726358product2-1.jpg', 'MAIZE GERM', 'Active', 'ProductsCommunication'),
(17, 'ENRICHED MAIZE FIBRE', '<p>Maize fiber&nbsp;is a by-product of&nbsp;corn&nbsp;starch processing and&nbsp;is also known as&nbsp;corn fiber. The many advantages of&nbsp;corn fiber&nbsp;include its positive effect on digestive health and prebiotic properties. At about 90% insolubility,&nbsp;corn fiber&nbsp;is a high-content insoluble&nbsp;fiber&nbsp;with low acidity. We produce Enriched Maize fiber which has higher protein content.</p>\r\n', '', '1599726404product3-1.jpg', 'ENRICHED MAIZE FIBRE', 'Active', 'ProductsCommunication'),
(18, 'MAIZE GLUTEN', '<p style=\"text-align:justify\">Maize gluten is derived from the corn-milling process.Corn gluten contains high protein &amp; therefore is used as an important ingredient in the animal feed industry worldwide, mainly for the poultry, aqua, pigs &amp; cattle&rsquo;s.</p>\r\n\r\n<p style=\"text-align:justify\">Originally used as a supplement in hog feed, corn gluten has become a common organic alternative to synthetic chemical herbicides. It can be effective as a pre-emergent herbicide used to control crabgrass and other lawn weeds, and it also has nutritional&nbsp;properties.</p>\r\n', '', '1599726450product4-1.jpg', 'MAIZE GLUTEN', 'Active', 'ProductsCommunication');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_content`
--

CREATE TABLE `tbl_product_content` (
  `product_contentId` bigint(200) NOT NULL,
  `product_contentTitle` longtext NOT NULL,
  `product_contentSnippet` longtext NOT NULL,
  `product_contentLongDes` longtext NOT NULL,
  `product_type` enum('ProductsCyber','ProductsCommunication') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_content`
--

INSERT INTO `tbl_product_content` (`product_contentId`, `product_contentTitle`, `product_contentSnippet`, `product_contentLongDes`, `product_type`) VALUES
(1, 'Sophisticated strategic and tactical solutions in Communications Intelligence', '<p>Our Communications Intelligence Solutions help National Security, Law Enforcement and Defence Agencies to intercept, decipher and visualize massive communication information along with focus on deep analytics. The end-to-end solution embeds world&rsquo;s leading technologies in data acquisition, processing, data mining, meta data analysis and big data analytics.</p>\r\n', '', 'ProductsCommunication'),
(6, 'Cyber Defence', '<p><strong>Helping Government and Enterprises in securing Valuable Assets</strong></p>\r\n', '<p>Vehere has been offering products focused on early detection, investigation and instant actionable insights around activities that have their roots in the Cyber space. Comprehensive lossless data acquisition is capable of converting streams of packets and telemetry data into simple and easy understandable information for prediction, investigation and evidence management. Its capability also extends to automated reasoning for identifying, responding to and management of cyber risks</p>\r\n', 'ProductsCyber');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_referal`
--

CREATE TABLE `tbl_referal` (
  `referal_id` bigint(20) NOT NULL,
  `employee_name` varchar(600) NOT NULL,
  `employee_code` varchar(600) NOT NULL,
  `ref_name` varchar(600) NOT NULL,
  `ref_email` varchar(800) NOT NULL,
  `pos_code` varchar(600) NOT NULL,
  `pos_type` varchar(600) NOT NULL,
  `cont_no` varchar(600) NOT NULL,
  `pref_place` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_referal`
--

INSERT INTO `tbl_referal` (`referal_id`, `employee_name`, `employee_code`, `ref_name`, `ref_email`, `pos_code`, `pos_type`, `cont_no`, `pref_place`) VALUES
(1, 'Ramya Roy', 'Emp0097', 'abcs', 'abs@gmail.com', '5', 'Android Developer', '8987896580', 'Junior Developer'),
(2, '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_research`
--

CREATE TABLE `tbl_research` (
  `research_id` int(11) NOT NULL,
  `research_title` longtext NOT NULL,
  `research_shrt_des` longtext NOT NULL,
  `research_desc` text NOT NULL,
  `research_image` longtext NOT NULL,
  `research_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_research`
--

INSERT INTO `tbl_research` (`research_id`, `research_title`, `research_shrt_des`, `research_desc`, `research_image`, `research_status`) VALUES
(4, '', '<p><strong><u>Vision:</u></strong></p>\r\n\r\n<p><span style=\"font-size:18px\">Our vision is to become the best quality native &amp; modified starch manufacturer and supplier in the country while maintaining the best quality standards for our clients &amp; giving the best value of raw material to our suppliers (farmers).</span></p>\r\n\r\n<p><u><strong>Mission:</strong></u></p>\r\n\r\n<ol>\r\n	<li><span style=\"color:#000000\">To adhere and adopt latest technological innovation in our processes.</span></li>\r\n	<li><span style=\"color:#000000\">To expand our market beyond boundaries with high quality products &amp; services with main focus to delight our interested parties.</span></li>\r\n</ol>\r\n', '', '15066882031502090372genx technology copy.jpg', 'Active'),
(7, 'The Big Data', '<p>The single version of the truth can only be inferred after correlating relevant facts from petabytes of continuous data storm. To investigate any fact or incident, we need to analyze multi format data from multiple sources in different time frames.</p>\r\n\r\n<p>Traditional data sources are very high in volume, complex communication pattern, which are available either in periodic dumps or in a streamed manner. The challenges facing data includes : getting the right information from it, transforming it to make it usable, massive computation to find patterns &amp; executing artificial intelligence, storing information for fast access, managing the workflow and finally, making predictive reports available in almost real time at your finger tips.&nbsp;</p>\r\n\r\n<p>Inspite of great technological advancements, predicting an incident is still a human art which Vehere endorses.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '15066894381494569410bigdata (2) copy.jpg', 'Inactive'),
(8, 'Protecting Privacy Rights', '<p>The regulatory agencies who review the impact of lawful interception on social networking sites on an on-going basis are now facing steam from the privacy activists who seem to question the gradual erosion of privacy from the daily lives of citizens. With millions storming the social networking sites, the challenge remains to effectively protect the Nation without violating privacy rights.</p>\r\n\r\n<p>Vehere believes that it is fundamentally important to collect, decipher and analyze information from varied networks and data sources while protecting an individual&rsquo;s privacy rights.</p>\r\n', '', '15066895301492170913protect copy.jpg', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seo`
--

CREATE TABLE `tbl_seo` (
  `seo_id` bigint(150) NOT NULL,
  `menu_id` bigint(150) NOT NULL,
  `sub_menu_id` bigint(150) NOT NULL,
  `page_title` varchar(3000) NOT NULL,
  `page_keywords` varchar(3000) NOT NULL,
  `page_desc` varchar(3000) NOT NULL,
  `seo_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seo`
--

INSERT INTO `tbl_seo` (`seo_id`, `menu_id`, `sub_menu_id`, `page_title`, `page_keywords`, `page_desc`, `seo_status`) VALUES
(1, 1, 0, 'Regaal :: Home', 'HOME | IP Encryption | Tactical Systems | Cyber Defense | Security', 'REGAAL | HOME | IP Encryption | Tactical Systems | Cyber Defense | Security', 'Active'),
(2, 5, 0, 'Regaal :: Career', 'regaal,career,c,c++,android,.net ,developer,kolkata', 'regaal,career,c,c++,android,.net ,developer,kolkata', 'Active'),
(3, 7, 0, 'Regaal :: Contact us', 'Regaal-Contact,Networking,Android-development,Cyber-Security,IP-Encryption,Tactical-Systems,Cyber-Defense, Security,Internet-Security,Encryption', 'Regaal-Contact,Networking,Android-development,Cyber-Security,IP-Encryption,Tactical-Systems,Cyber-Defense, Security,Internet-Security,Encryption', 'Active'),
(4, 4, 12, 'Regaal :: News', '', '', 'Active'),
(5, 6, 0, 'Regaal :: Blog', 'Regaal,Blog,COMMUNICATIONS INTELLIGENCE,CRYPTANALYSIS,IP ENCRYPTION,COMPREHENSIVE VISIBILITY,ANALYTICS PLATFORM', 'Regaal,Blog,COMMUNICATIONS INTELLIGENCE,CRYPTANALYSIS,IP ENCRYPTION,COMPREHENSIVE VISIBILITY,ANALYTICS PLATFORM', 'Active'),
(6, 2, 11, 'Regaal :: Partners', 'sales,sales alliance,technology alliance', 'sales,sales alliance,technology alliance', 'Active'),
(7, 2, 10, 'Regaal :: Research And Development', 'Research networking,development,ip encryption,cyber defense,internet security', 'Research networking,development,ip encryption,cyber defense,internet security', 'Active'),
(8, 2, 9, 'Regaal :: Leadership', 'regaal,leadership', 'regaal,leadership', 'Active'),
(9, 3, 14, 'Regaal :: Communication Intelligence', 'Communication Intelligence,products,regaal,security,data-security,crypt-analysis', 'Communication Intelligence,products,vehere,security,data-security,crypt-analysis', 'Active'),
(10, 3, 15, 'Regaal :: Cyber Defence', '', '', 'Active'),
(11, 2, 8, 'Regaal :: About Us', '', '', 'Active'),
(12, 4, 13, 'Regaal :: Events Gallery', '', '', 'Active'),
(13, 16, 0, 'Regaal :: Integrity', '', '', 'Active'),
(14, 18, 0, 'Regaal :: Site Map', '', '', 'Active'),
(15, 17, 0, 'Regaal :: Privacy Policy', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_socialmedia`
--

CREATE TABLE `tbl_socialmedia` (
  `socialmedia_id` bigint(120) NOT NULL,
  `link` varchar(2000) NOT NULL,
  `media_name` varchar(2000) NOT NULL,
  `social_mediaicon` varchar(2000) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_socialmedia`
--

INSERT INTO `tbl_socialmedia` (`socialmedia_id`, `link`, `media_name`, `social_mediaicon`, `status`) VALUES
(2, 'https://www.facebook.com/VehereIndia/', 'Facebook', 'fa fa-facebook', 'Active'),
(3, 'https://twitter.com/hashtag/Vehere?src=hash', 'Twitter', 'fa fa-twitter', 'Active'),
(4, 'https://in.linkedin.com/company/vehere-interactive-p-ltd', 'Linkedin', 'fa fa-linkedin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ui`
--

CREATE TABLE `tbl_ui` (
  `ui_id` bigint(200) NOT NULL,
  `ui_code` varchar(600) NOT NULL,
  `ui_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `html_type` enum('footer','body','header') NOT NULL,
  `ui_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ui`
--

INSERT INTO `tbl_ui` (`ui_id`, `ui_code`, `ui_status`, `html_type`, `ui_created`) VALUES
(1, '#f3f3f3', 'Active', 'header', '2020-09-09 18:48:14'),
(2, '#f3f3f3', 'Active', 'footer', '2020-09-09 18:46:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aboutuscontent`
--
ALTER TABLE `tbl_aboutuscontent`
  ADD PRIMARY KEY (`aboutUsHome_id`);

--
-- Indexes for table `tbl_aboutusimage`
--
ALTER TABLE `tbl_aboutusimage`
  ADD PRIMARY KEY (`aboutUsimage_id`);

--
-- Indexes for table `tbl_aboutustimeline`
--
ALTER TABLE `tbl_aboutustimeline`
  ADD PRIMARY KEY (`aboutUsTimeline_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `blog_category` (`blog_category`(767)),
  ADD KEY `blog_image_des` (`blog_image_des`(767)),
  ADD KEY `blog_thumb_image_des` (`blog_thumb_image_des`(767)),
  ADD KEY `blog_tag` (`blog_tag`(767)),
  ADD KEY `blog_status` (`blog_status`),
  ADD KEY `blog_posted_date` (`blog_posted_date`),
  ADD KEY `slug` (`slug`(767)),
  ADD KEY `slug_2` (`slug`(767)),
  ADD KEY `blog_thumb_image_des_2` (`blog_thumb_image_des`(767)),
  ADD KEY `blog_image_des_2` (`blog_image_des`(767)),
  ADD KEY `blog_image` (`blog_image`(767));

--
-- Indexes for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  ADD PRIMARY KEY (`blog_cat_id`),
  ADD KEY `blog_cat_id` (`blog_cat_id`),
  ADD KEY `blog_cat_name` (`blog_cat_name`(767)),
  ADD KEY `blog_cat_status` (`blog_cat_status`);

--
-- Indexes for table `tbl_career`
--
ALTER TABLE `tbl_career`
  ADD PRIMARY KEY (`career_id`),
  ADD KEY `career_id` (`career_id`),
  ADD KEY `career_position` (`career_position`(767)),
  ADD KEY `career_positionId` (`career_positionId`(767)),
  ADD KEY `career_title` (`career_title`(767)),
  ADD KEY `career_profile` (`career_profile`(767)),
  ADD KEY `career_status` (`career_status`),
  ADD KEY `career_posted` (`career_posted`),
  ADD KEY `career_id_2` (`career_id`),
  ADD KEY `career_position_2` (`career_position`(767)),
  ADD KEY `career_positionId_2` (`career_positionId`(767)),
  ADD KEY `career_location` (`career_location`(767)),
  ADD KEY `career_profile_2` (`career_profile`(767)),
  ADD KEY `career_posted_2` (`career_posted`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `comment_blog_id` (`comment_blog_id`),
  ADD KEY `comment_status` (`comment_status`),
  ADD KEY `comment_posted` (`comment_posted`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `photo_id` (`photo_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `status` (`status`),
  ADD KEY `photo_type` (`photo_type`);

--
-- Indexes for table `tbl_gallery_events`
--
ALTER TABLE `tbl_gallery_events`
  ADD PRIMARY KEY (`gallery_events_id`),
  ADD KEY `gallery_events_id` (`gallery_events_id`),
  ADD KEY `image_events_name` (`image_events_name`(767)),
  ADD KEY `image_events_status` (`image_events_status`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`),
  ADD KEY `home_id` (`home_id`),
  ADD KEY `home_content_title` (`home_content_title`(767)),
  ADD KEY `home_snippet` (`home_snippet`(767)),
  ADD KEY `home_description` (`home_description`(767)),
  ADD KEY `page_link` (`page_link`(767)),
  ADD KEY `home_status` (`home_status`);

--
-- Indexes for table `tbl_integrity`
--
ALTER TABLE `tbl_integrity`
  ADD PRIMARY KEY (`integrity_id`),
  ADD KEY `integrity_id` (`integrity_id`),
  ADD KEY `integrity_banner` (`integrity_banner`(767)),
  ADD KEY `integrity_content` (`integrity_content`(767));

--
-- Indexes for table `tbl_leadership`
--
ALTER TABLE `tbl_leadership`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `member_category` (`member_category`(767)),
  ADD KEY `member_status` (`member_status`);

--
-- Indexes for table `tbl_leadership_category`
--
ALTER TABLE `tbl_leadership_category`
  ADD PRIMARY KEY (`leadership_cat_id`);

--
-- Indexes for table `tbl_managepartnercategory`
--
ALTER TABLE `tbl_managepartnercategory`
  ADD PRIMARY KEY (`managePartnerCategory_id`);

--
-- Indexes for table `tbl_managepartnerimage`
--
ALTER TABLE `tbl_managepartnerimage`
  ADD PRIMARY KEY (`managePartnerImageId`);

--
-- Indexes for table `tbl_managepartnertimeline`
--
ALTER TABLE `tbl_managepartnertimeline`
  ADD PRIMARY KEY (`timeline_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_office`
--
ALTER TABLE `tbl_office`
  ADD PRIMARY KEY (`office_id`),
  ADD KEY `office_id` (`office_id`),
  ADD KEY `office_name` (`office_name`(767)),
  ADD KEY `office_address` (`office_address`(767)),
  ADD KEY `office_status` (`office_status`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`partner_id`),
  ADD KEY `partner_id` (`partner_id`),
  ADD KEY `partnercontent_type` (`partnercontent_type`),
  ADD KEY `partner_status` (`partner_status`);

--
-- Indexes for table `tbl_privacy`
--
ALTER TABLE `tbl_privacy`
  ADD PRIMARY KEY (`privacy_id`),
  ADD KEY `privacy_id` (`privacy_id`),
  ADD KEY `banner_title` (`banner_title`(767));

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `status` (`status`),
  ADD KEY `product_type` (`product_type`);

--
-- Indexes for table `tbl_product_content`
--
ALTER TABLE `tbl_product_content`
  ADD PRIMARY KEY (`product_contentId`),
  ADD KEY `product_contentId` (`product_contentId`),
  ADD KEY `product_type` (`product_type`);

--
-- Indexes for table `tbl_referal`
--
ALTER TABLE `tbl_referal`
  ADD PRIMARY KEY (`referal_id`);

--
-- Indexes for table `tbl_research`
--
ALTER TABLE `tbl_research`
  ADD PRIMARY KEY (`research_id`);

--
-- Indexes for table `tbl_seo`
--
ALTER TABLE `tbl_seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `tbl_socialmedia`
--
ALTER TABLE `tbl_socialmedia`
  ADD PRIMARY KEY (`socialmedia_id`);

--
-- Indexes for table `tbl_ui`
--
ALTER TABLE `tbl_ui`
  ADD PRIMARY KEY (`ui_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aboutuscontent`
--
ALTER TABLE `tbl_aboutuscontent`
  MODIFY `aboutUsHome_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_aboutusimage`
--
ALTER TABLE `tbl_aboutusimage`
  MODIFY `aboutUsimage_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_aboutustimeline`
--
ALTER TABLE `tbl_aboutustimeline`
  MODIFY `aboutUsTimeline_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  MODIFY `blog_cat_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_career`
--
ALTER TABLE `tbl_career`
  MODIFY `career_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_gallery_events`
--
ALTER TABLE `tbl_gallery_events`
  MODIFY `gallery_events_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` bigint(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_integrity`
--
ALTER TABLE `tbl_integrity`
  MODIFY `integrity_id` bigint(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_leadership`
--
ALTER TABLE `tbl_leadership`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_leadership_category`
--
ALTER TABLE `tbl_leadership_category`
  MODIFY `leadership_cat_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_managepartnercategory`
--
ALTER TABLE `tbl_managepartnercategory`
  MODIFY `managePartnerCategory_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_managepartnerimage`
--
ALTER TABLE `tbl_managepartnerimage`
  MODIFY `managePartnerImageId` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_managepartnertimeline`
--
ALTER TABLE `tbl_managepartnertimeline`
  MODIFY `timeline_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_office`
--
ALTER TABLE `tbl_office`
  MODIFY `office_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_privacy`
--
ALTER TABLE `tbl_privacy`
  MODIFY `privacy_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_product_content`
--
ALTER TABLE `tbl_product_content`
  MODIFY `product_contentId` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_referal`
--
ALTER TABLE `tbl_referal`
  MODIFY `referal_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_research`
--
ALTER TABLE `tbl_research`
  MODIFY `research_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_seo`
--
ALTER TABLE `tbl_seo`
  MODIFY `seo_id` bigint(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_socialmedia`
--
ALTER TABLE `tbl_socialmedia`
  MODIFY `socialmedia_id` bigint(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_ui`
--
ALTER TABLE `tbl_ui`
  MODIFY `ui_id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
