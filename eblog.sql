-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 07:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `C_ID` int(11) NOT NULL,
  `content` varchar(400) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `Post_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`C_ID`, `content`, `author`, `date`, `Post_ID`) VALUES
(20, 'Sikkim', 'roy@gmail.com', '2018-09-27 23:33:54', '28'),
(25, 'Test Comment', 'lightyagami@gmail.com', '2018-09-28 22:32:48', '28'),
(26, 'Test Comment', 'lightyagami@gmail.com', '2018-09-30 13:28:59', '26'),
(41, 'awesome blog', 'ayush@gmail.com', '2021-02-17 22:45:10', '28'),
(42, 'Awesome technology insights!!', 'ayush@gmail.com', '2021-02-18 00:20:18', '24'),
(55, 'comment\r\n', 'ayush@gmail.com', '2021-02-18 14:50:05', '29'),
(57, 'awesome blog', 'admin@gmail.com', '2021-02-18 14:57:58', '29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `featured` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `visitors` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_ID`, `title`, `description`, `featured`, `category`, `author`, `date`, `status`, `visitors`) VALUES
(24, 'CarPlay and Android Auto will soon be available in Jaguar and Land Rover cars', 'Just days after it was reported that Toyota would finally add Android Auto support in its cars, Jaguar Land Rover has announced similar plans to add CarPlay and Android Auto to its vehicles, as reported by MacRumors. A spokesperson confirmed that CarPlay and Android Auto will be available in all 2019 Jaguar and Land Rover vehicles equipped with InControl Touch Pro or Touch Pro Duo infotainment systems, as well as on older models through retroactive updates.\r\n\r\nCarPlay and Android Auto will be available with an optional smartphone connectivity package, which will start at $280 and go up depending on the vehicle model. Thereâ€™s no set date for when these features and retroactive updates will be available in the US, but rollout appears to have started in the UK.\r\n\r\nTHE MORE OPTIONS, THE BETTER\r\nItâ€™s good, if not belated news, and Land Rover and Jaguar owners should be able to get a lot out of their newly equipped infotainment systems. With third-party mapping services added to Appleâ€™s CarPlay in iOS 12, drivers now have the option to use whatever navigation app they prefer, like Google Maps.', 'car.jpg', 'Technology', 'lightyagami@gmail.com', '2021-01-27 15:25:31', 'publish', 23),
(25, 'Bowling Karega Ya Bowler Change Karein MS Dhoni Gives A Mouthful To Kuldeep Yadav', 'Putting their England debacle to rest the Indian cricket team has undoubtedly been in sublime form in the 2018 Asia Cup. The fact that Team India became the first team to secure their berth in the final with one Super Four match still left to playa goes on to show how convincing they have been in the tournament.\r\n\r\nThusa when it came to their last Super Four clash against Afghanistan on 25th Septembera there was no surprise to see India resting as many as five of their regular players which included last gameas centurions Rohit Sharma and Shikhar Dhawan. The game was full surprisesa quite literally.\r\n\r\nFirst upa was the sight of MS Dhoni at the toss as he came out to lead the Indian side for the 200th time in ODIs. Thena there was Mohammad Shahzadas sparkling knock of 124 runsa which was brilliantly followed up with Mohammad Nabis gritty fifty. \r\n\r\nLatera it was KL Rahul and Ambati Rayuduas classy fifty to give India a flying start. And finallya Rashid Khanas brilliance to defend six runs in the final over to snatch a tie for Afghanistan. \r\n\r\nButa amidst all thata there was a rare moment of Dhonias typical inimitable style that was captured on the stump mic. During Afghanistanas inningsa Kuldeep Yadav was getting ready for his run-up when he took a glance at the field. Not happy with the field settinga the Indian chinaman pressed for a change but to no avail.', 'msd.jpg', 'Sports', 'lightyagami@gmail.com', '2021-01-27 00:00:00', 'publish', 22),
(26, 'How To Set Up A Workout Schedule That Isnt Boring And Monotonous', 'Most people have this complaint that their training schedule is too boring or too hard. In fact  one of the major reasons why people discontinue going to the gym is because they do not find their training schedule realistic or sustainable. More often than not  the fault lies with the trainers. They put everyone who walks through the gym door on the same generic one body part a day cookie cutter plan without taking into consideration a client s lifestyle  goals and preferences.\r\nThe first thing that should to be considered when you are charting out your training routine is your schedule and time frame. Everyone starts working out with a goal or a target in mind and your workout schedule be planned in such a way that it helps you achieve that goal. For example  if you are a competitive bodybuilder or a physique athlete and are planning to compete in 12 weeks  your plan should be realistic enough to help you achieve the physique that you would like to present on stage. Even if you go to the gym  just to look good in general or lose some fat and gain muscle  you should still plan ahead. A correctly set up optimum training plan which you can realistically follow in a consistent manner can greatly augment your results and vice versa.\r\n\r\nAlthough this may sound really simple and obvious but most people get it wrong. People look up the internet for a workout schedule and download a generic 8 or 12 week cookie cutter plan. However  this plan does not suit your needs  nor has it taken into account various factors like:\r\n\r\n1. Health Markers\r\n\r\n2. Fitness Goals\r\n\r\n3. Training Preferences\r\n\r\n4. Time Dedicated Towards Fitness\r\n\r\n5. Training Age  \r\n\r\nNow  let me get this very clear. The person you might idolize on IG is a full time fitness professional. You aren t. You have a family and a regular job. That means you can t stay shredded 365 days a year and can work out twice a day. You should be realistic about how much time will you be able to dedicated in the gym on a day to day or week to week basis. Remember that optimal is not necessarily the same thing as realistic. You need to begin with what you can do  before you choose what you ought to do.\r\n', 'body.jpg', 'Health', 'lightyagami@gmail.com', '2021-01-27 12:39:09', 'publish', 47),
(27, 'Here Are 8 Cool On-Screen Dads In Bollywood Who Are The Harbingers Of Feminism In Indian Cinema', 'We have come a long way since the times of Chaudhary Baldev Singh in  Dilwale Dulhania Le Jayenge  to the Bhashkor Banerjee in  Piku . During this time  the father figures of Indian cinema gradually but consistently  underwent subtle transformations that were to change Bollywood s concept of cool dads  that the GenY would be able to appreciate and relate to.\r\n\r\nA lot of this change must be credited to the feminist movement that has been gaining pace and active recognition across the country  over the past few years.\r\n\r\nThe feminist movement  at the very core of its existence  thrives on the need for gender equality for all  as well as equal avenue and exposure for the sexes. \r\n\r\nFeminism s another powerful fight is against the de-humanisation of men  who are carved out as stoic authoritarians  as per patriarchal ideologies.\r\n\r\nOver the past few years  Indian cinema has witnessed a gradual evolution in the father figures. These dads are not authoritarians and dictators but instead  hold the ability to be friendly  nurturing and forthcoming with their feelings towards their children and family. They are everything India is fighting for and its darn good!\r\n\r\n1. Dattatreya -  102 Not Out \r\nHere Are 8 Cool OnScreen Dads In Bollywood Who Are The Harbingers Of Feminism In Indian Cinema\r\nSPE Films India\r\n\r\nDattatreya is the new age super dad who cares for his son s health and welfare like a mother would  while he dons the father s hat. He goes out of his way to watch out for his son and enables him to face the world by his own might. He is fearless  unapologetic and openly expresses his feelings to his son.\r\n\r\n2. Mr. Joshi -  Shubh Mangal Saavdhan \r\nHere Are 8 Cool OnScreen Dads In Bollywood Who Are The Harbingers Of Feminism In Indian Cinema\r\nColour Yellow Procductions', 'amitabh.jpg', 'Entertainment', 'lightyagami@gmail.com', '2021-01-27 12:42:48', 'publish', 146),
(28, 'Yes  You Can Fly To Sikkim. But  Here is 15 More Reasons Why You Should Visit The State', 'Sikkim recently got its first airport which will be operational very soon. This means that you can take a direct flight to Gangtok and explore the wilderness of the state. \r\n\r\nWhether you are looking for a break  taking in the extravaganza of natureâ€™s beauty or seeking a fun-filled adventurous holiday  Sikkim will not disappoint you.\r\nHere are 15 reasons why Sikkim should be your next getaway.\r\n\r\n1. The picturesque landscape and scenery of the state will take your breath away.\r\n\r\nSource: Quora\r\n \r\n\r\nYou can also take a ride on the ropeway. The cable ride starts from the Deorali Market and takes you to highest point of Gangtok  Tashiling. Providing you with the birdâ€™s eye view of the Gangtok city and the surrounding Himalayan peaks\r\n\r\n\r\nSource: STDC\r\n \r\n\r\n\r\nSource: Youtube\r\n \r\n\r\n2. The towering mountains that soar high above the sky will make you feel on the top of the world.\r\n\r\nSource: piyushidhir\r\n \r\n\r\n\r\nSource: International Traveller\r\n \r\n\r\n3. The traditional Sikkimese delicacies cater to the taste buds of any adventurous foodie.\r\nThe cuisine of Northeast is quite different than the rest of the country. From momos and Syabhaleys to steaming bowls of Thukpa and Piro Aloo Dum you will get a wide variety of dishes here.', 'shimla.jpg', 'Travel', 'lightyagami@gmail.com', '2021-01-27 15:25:31', 'publish', 272),
(29, 'How To Start Your Day With Yoga For A Healthy Lifestyle', 'Meditation allows us to clear our mind from all the clutter  reduces stress  and enhances our perception. Chanting Mantra when meditating has a tranquilizing effect on the brain in relation to the endless mental chaos; the nervous system begins to relax while we become aware of our creative potential. This enhanced awareness allows our mind to work at its best.\r\n\r\nYogic Breathing\r\n\r\nYogic breathing is a technique that can make a tremendous difference in the quality of your life. Practicing pranayama (yogic breathing) opens the body channels for smooth flow of prana (vital force). Deep breathing exercises calm the nervous system and decrease anxiety. Also  consistent practice of pranayama enhances focus  uplifts the well-being  supports the yoga poses  and enables the mind to achieve a meditative state.', 'jared-rice-539485-unsplash_2048x2048.jpg', 'Health', 'admin@gmail.com', '2021-01-27 15:25:31', 'publish', 120),
(45, '10 Tips for Starting a Business Blog Thatâ€™s Built to Scale', '<p>No enterprise SEO strategy is complete without plans to build out an engaging and informative blog.</p>\r\n<p>Aside from adding depth to websites, blogs help businesses reach potential customers through organic search, establish expertise, authority, and trust.</p>\r\n<p>However, brands wonâ€™t reap theÂ <a href=\"https://www.searchenginejournal.com/business-benefits-of-blogging/377747/#close\">benefits of business blogging</a>Â unless you invest the required time and resources to develop a blog strategy thatâ€™s sustainable and scalable.</p>\r\n<p>To bring in a consistent stream of traffic and compete with others in your industry, your business needs to publish blog content regularly, address industry trends as they emerge, andÂ <a href=\"https://www.searchenginejournal.com/blog-seo-checklist/285077/\">follow the best practices for SEO</a>Â that evolve along with Googleâ€™s algorithms and guidelines.</p>\r\n<p>While you and your team may start small, long-term planning is the only way to set your new blog up for success.</p>\r\n<p>When setting the foundation for your enterprise blog, always bear in mind longevity and scalability, which you can accomplish with the following tips.</p>\r\n<br>\r\n<h2>1. Determine a Direction to Scale In</h2>\r\n<p>As with any marketing campaign or project, you need to determine clear objectives for your blogâ€™s expansion before strategizing.</p>\r\n<p>First and foremost, you have to define what scalability and scaling up means for your blog and brand.</p>\r\n<p>Choosing a direction of growth for your blog should be a part of big-picture planning, not just a content marketing project.</p>\r\n<p>The companyâ€™s sales objectives, geographic markets, languages, and plans for future marketing campaigns should all inform your blogâ€™s blueprint.</p>\r\n<p>Based on these factors and the resources you have available, you can focus your efforts on scaling your blog in one (or more) of these areas:</p>\r\n<ul>\r\n<li><strong>Post Volume:Â </strong>The number and quality of posts can eat up available team time considerably.</li>\r\n<li><strong>Depth into a Specific Niche or Subtopic:Â </strong>Start with one subject and then expand into others is a critical scale factor. Do you need expert reviewers and how many?</li>\r\n<li><strong>Count of Targeted Audiences:Â </strong>Identify a target demographic and create content that addresses their interests, then expand to the next.</li>\r\n<li><strong>Media Type:Â </strong>The type of media created can impact the amount of time or resources needed. Available resources will determine the content type (e.g. video, written, design, etc.).</li>\r\n<li><strong><a href=\"https://www.searchenginejournal.com/methods-research-analyze-audience/306487/\">Geographic Target:</a>Â </strong>Starting with which city, state, country (or combinations thereof) you want to target can be a factor, but not for all.</li>\r\n<li><strong>Languages:Â </strong>This variable can require interpreting services, and expert interpreters can be costly.</li>\r\n</ul>\r\n<p>Â </p>', 'istockphoto-602309504-612x612.jpg', 'World', 'ayush@gmail.com', '2021-02-20 00:48:35', 'publish', 48),
(51, 'Game of Thrones Receives 12 Emmys', '<p>By Making Game of Thrones Having been nominated for a record 32 categories Game of Thrones&rsquo; visit to the 71st Emmy Awards was a rewarding one with the series taking home 12 of HBO&rsquo;s 34 awards (the most of any network) at the event. The show&rsquo;s eighth and final season walked away with the Outstanding Drama Series award tying it for most Outstanding Drama wins ever. Actor Peter Dinklage also set a record by winning Outstanding Supporting Actor in a Drama Series for his role as Tyrion Lannister for the fourth time. Additional wins were for costumes music composition stunt coordination special visual effects casting for a drama series main title design makeup for a single-camera series (non-prosthetic) single-camera picture editing sound editing and sound mixing.</p>\r\n<p><img src=\"https://images.squarespace-cdn.com/content/v1/52fc05c9e4b08fc45bd99090/1563592051858-9OT8DB914M68LU314YRY/ke17ZwdGBToddI8pDm48kKG6OoQUcDwE6Xrn0CktdYIUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKc7wdBxA2FfWIL_oInLxCuGYBExGLaY8v4Pn7yFeMELUKe4DQXRx1Bu1AnCO9mIfj2/mgot-header-sdcc-2019-panel-1024x576.jpg?format=1500w\" alt=\"mgot-header-sdcc-2019-panel-1024x576.jpg\" width=\"603\" height=\"339\" /></p>\r\n<p class=\"\">By Making Game of Thrones</p>\r\n<p class=\"\">Having been <a href=\"http://www.makinggameofthrones.com/production-diary/2019-emmy-nominations?_ga=2.105276931.1268555601.1569246079-743918193.1557765096\">nominated for a record 32 categories</a><em>, Game of Thrones</em>&rsquo; visit to the 71st Emmy Awards was a rewarding one, with the series taking home 12 of HBO&rsquo;s 34 awards (the most of any network) at the event. The show&rsquo;s eighth and final season walked away with the Outstanding Drama Series award, tying it for most Outstanding Drama wins ever.&nbsp;</p>\r\n<p class=\"\">Actor Peter Dinklage also set a record by winning Outstanding Supporting Actor in a Drama Series for his role as Tyrion Lannister for the fourth time.</p>\r\n<p id=\"yui_3_17_2_1_1613831535720_348\" class=\"\">Additional wins were for costumes, music composition, stunt coordination, special visual effects, casting for a drama series, main title design, makeup for a single-camera series (non-prosthetic), single-camera picture editing, sound editing, and sound mixing.&nbsp;</p>\r\n<p class=\"\">By Making Game of Thrones</p>\r\n<p class=\"\">Having been <a href=\"http://www.makinggameofthrones.com/production-diary/2019-emmy-nominations?_ga=2.105276931.1268555601.1569246079-743918193.1557765096\">nominated for a record 32 categories</a><em>, Game of Thrones</em>&rsquo; visit to the 71st Emmy Awards was a rewarding one, with the series taking home 12 of HBO&rsquo;s 34 awards (the most of any network) at the event. The show&rsquo;s eighth and final season walked away with the Outstanding Drama Series award, tying it for most Outstanding Drama wins ever.&nbsp;</p>\r\n<p class=\"\">Actor Peter Dinklage also set a record by winning Outstanding Supporting Actor in a Drama Series for his role as Tyrion Lannister for the fourth time.</p>\r\n<p id=\"yui_3_17_2_1_1613831535720_348\" class=\"\">Additional wins were for costumes, music composition, stunt coordination, special visual effects, casting for a drama series, main title design, makeup for a single-camera series (non-prosthetic), single-camera picture editing, sound editing, and sound mixing.&nbsp;</p>', 'image-asset.jpeg', 'Entertainment', 'admin@gmail.com', '2021-02-20 00:00:00', 'publish', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `Name`, `Email`, `Password`, `Created`) VALUES
(1, 'John Snow', 'prainfosys@gmail.com', '1824e8e0307cbfdd1993511ab040075c', '2021-01-26'),
(2, 'Light Yagami ', 'lightyagami@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-01-26'),
(3, 'Roy Mustang', 'roy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-26'),
(4, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-01-26'),
(5, 'ayush', 'ayush@gmail.com', '66049c07d9e8546699fe0872fd32d8f6', '2021-02-08'),
(6, 'Ayush Ghanghoria', 'ayushghanghoria1@gmail.com', '66049c07d9e8546699fe0872fd32d8f6', '2021-02-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
