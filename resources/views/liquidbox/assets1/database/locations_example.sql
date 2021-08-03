-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 05:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `locations_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `description_list`
--

CREATE TABLE IF NOT EXISTS `description_list` (
  `description_list_id` int(128) NOT NULL AUTO_INCREMENT,
  `item_id` int(128) NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`description_list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `description_list`
--

INSERT INTO `description_list` (`description_list_id`, `item_id`, `title`, `value`) VALUES
(1, 3, 'Bathrooms', '3'),
(2, 3, 'Bedrooms', '3'),
(3, 3, 'Area', '458m<sup>2</sup>'),
(4, 3, 'Garages', '2'),
(5, 3, 'Status', 'Sale');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `image_id` int(128) NOT NULL AUTO_INCREMENT,
  `item_id` int(128) NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;


CREATE TABLE `gallery_photos` (
  `id` int(32) NOT NULL,
  `photo_link` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`image_id`, `item_id`, `image`) VALUES
(1, 1, 'assets/img/items/1.jpg'),
(2, 1, 'assets/img/items/2.jpg'),
(3, 1, 'assets/img/items/3.jpg'),
(4, 2, 'assets/img/items/2.jpg'),
(6, 2, 'assets/img/items/4.jpg'),
(7, 3, 'assets/img/items/4.jpg'),
(8, 3, 'assets/img/items/2.jpg'),
(9, 3, 'assets/img/items/12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(10,8) DEFAULT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `featured` int(1) NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(32) DEFAULT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
   `meal_type` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `meal` text COLLATE utf8_unicode_ci NOT NULL,
  `gallery` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `pinterest` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `marker_image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `additional_info` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `ribbon` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `video2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `marker_color` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;




      

      CREATE TABLE IF NOT EXISTS `items` (
          `id` int(32) NOT NULL AUTO_INCREMENT,
          `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `tags1` text COLLATE utf8_unicode_ci NOT NULL,
          `description` text COLLATE utf8_unicode_ci NOT NULL,
          `event_attend` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `event_attend2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `event_attend3` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `event_attend4` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `event_attend5` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `latitude` decimal(10,8) DEFAULT NULL,
          `longitude` decimal(10,8) DEFAULT NULL,
          `category` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `phone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `gallery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
          `video` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `video2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `facebook` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `instagram` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `twitter` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `pinterest` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          PRIMARY KEY (`id`),
            UNIQUE KEY `id` (`id`)
          ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;




      CREATE TABLE IF NOT EXISTS `artists` (
          `id` int(32) NOT NULL AUTO_INCREMENT,
          `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `gender` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `age` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `town` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `state` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `phone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `originstate` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `lga` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `nationality` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `category` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `spotlightname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `guardianname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `guardianrelationship` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `guardianresidence` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `guardianphone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `gallery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
          `namefortandc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
          PRIMARY KEY (`id`),
            UNIQUE KEY `id` (`id`)
          ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

        


      CREATE TABLE IF NOT EXISTS `homepage` (
          `id` int(32) NOT NULL AUTO_INCREMENT,
          `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `headtext` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

         CREATE TABLE IF NOT EXISTS `overview` (
          `id` int(32) NOT NULL AUTO_INCREMENT,
          `headtext` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
           `text` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `symptoms` (
          `id` int(32) NOT NULL AUTO_INCREMENT,
          `headtext` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
           `text` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;





        CREATE TABLE IF NOT EXISTS `contactform` (
          `id` int(32) NOT NULL AUTO_INCREMENT,
          `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
           `message` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `register` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `firstname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `lastname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `username` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
       `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
       `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `about` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `about_text` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

         CREATE TABLE IF NOT EXISTS `project` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `field` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `field2` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `location` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `flag` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `date` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `about` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
        `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `projectimages` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `project_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `soundcloud` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `link` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `apple` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `link` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `spotify` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `about_text` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `video` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `link` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

         CREATE TABLE IF NOT EXISTS `slider` (
          `id` int(32) NOT NULL AUTO_INCREMENT,
          `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `headtext` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;



     



        CREATE TABLE IF NOT EXISTS `galleryimages` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `album_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
          `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
       `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
       
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `stream` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `live_url` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


      CREATE TABLE IF NOT EXISTS `video` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `video_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
       `video` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

         CREATE TABLE IF NOT EXISTS `advisoryvideo` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `images` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `video_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
       `video` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `news` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `cover_images` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `story_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `date` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `writer_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `news_preview` varchar(966) COLLATE utf8_unicode_ci NOT NULL,
        `news_details` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

        CREATE TABLE IF NOT EXISTS `album` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `album_image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `album_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `about_album` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

         CREATE TABLE IF NOT EXISTS `guidelines` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `guide_image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `guide_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
         `text` varchar(996) COLLATE utf8_unicode_ci NOT NULL,
        `guide_pdf` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


         

         CREATE TABLE IF NOT EXISTS `lga` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `total_cases` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `discharged` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        `deaths` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

 
      CREATE TABLE IF NOT EXISTS `about_details` (
        `id` int(32) NOT NULL AUTO_INCREMENT,
        `abouttext` varchar(956) COLLATE utf8_unicode_ci NOT NULL,
        `abouttext2` varchar(956) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`),
          UNIQUE KEY `id` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;


     

      CREATE TABLE IF NOT EXISTS `gallery_albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gallery` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
   PRIMARY KEY (`id`),
   UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;




   INSERT INTO `national` (`id`, `name`, `total_cases`, `discharged`, `deaths`)
      VALUES (1, 'national', '417', '127', '27');

      INSERT INTO `rivers` (`id`, `name`, `total_cases`, `discharged`, `deaths`)
      VALUES (1, 'rivers', '2', '1', '0');

       INSERT INTO `register` (`id`, `firstname`, `lastname`, `username`, `password`, `email`)
      VALUES (1, 'daniel', 'eche', 'danieleche7', '123456', 'danieleche7@gmail');

      
    INSERT INTO `about_details` (`id`, `abouttext`, `abouttext2`)
      VALUES (1, 'gyth', 'explain');


   INSERT INTO `about_ted` (`id`, `tedabouttext`, `tedabouttext2`)
      VALUES (1, 'gcdjhfk', 'gyudv');



--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `latitude`, `longitude`, `address`, `featured`, `title`, `location`, `phone`, `email`, `website`, `category`, `rating`, `url`, 
 `meal_type`, `meal`, `gallery`, `tags`, `facebook`, `instagram`, `twitter`, `pinterest`, `marker_image`, `additional_info`, `description`, `ribbon`, `video`, `marker_color`) VALUES
(1, '40.72807182', '-73.85735035', '', 1, 'Marky''s Restauranté', '63 Birch Street', '361-492-2356', 'hello@markys.com', 'http://www.markys.com', 'Restaurant', 4, 'detail.html', '', '', '', '', '', '', '', '', 'assets/img/items/1.jpg', 'Average price $30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis, arcu non hendrerit imperdiet, metus odio scelerisque elit, sed lacinia odio est ac felis. Nam ullamcorper hendrerit ullamcorper. Praesent quis arcu quis leo posuere ornare eu in purus. Nulla ornare rutrum condimentum. Praesent eu pulvinar velit. Quisque non finibus purus, eu auctor ipsum.', '', '', '#000000'),
(2, '40.73925841', '-73.85348797', '', 0, 'Ironapple', '4209 Glenview Drive', '989-410-0777', 'hello@ironapple.com', 'http://www.ironapple.com', 'Bar & Grill', 3, 'detail.html', '', '', '', '', '', '', '', '', 'assets/img/items/2.jpg', '', 'Aliquam vel turpis sagittis, semper tellus eget, aliquam turpis. Cras aliquam, arcu"', '50%', '', ''),
(3, NULL, NULL, 'Forest Hills, Queens, NY 11375, USA', 0, 'Food Festival', '23 Hillhaven Drive', '323-843-4729', '', '', 'Event', NULL, 'detail.html', '', '', '', '', '', '', '', '', 'assets/img/items/4.jpg', 'Starts at 19:00', 'Sed ac dolor auctor, elementum lacus vitae, efficitur magna. Quisque sed semper tellus', 'Last Tickets!', '', '#c92e2e'),
(4, NULL, NULL, 'Forest Hills, Queens, NY 11375, USA', 0, 'Ironapple Same Location', '4209 Glenview Drive', '989-410-0777', 'hello@ironapple.com', 'http://www.ironapple.com', 'Bar & Grill', 3, 'detail.html', '', '', '', '', '', '', '', '', 'assets/img/items/2.jpg', 'Same Location', 'Aliquam vel turpis sagittis, semper tellus eget, aliquam turpis. Cras aliquam, arcu"', '50%', '', '');


INSERT INTO `homepage` (`id`, `images`, `head`, `headtext`, `head2`, `headtext2`, `section2cap`)
VALUES (1,'', 'Legacy',  'TEDxEuston: LEGACY - The theme for our 10th anniversary signifies the end of the journey as we know it, and speaks to a future yet to be created by the builders, shapers and revolutionaries in our community. For our final year, we are looking back to look forward. We will be sharing ideas and bridging the gap between the wisdom of our ancestors and the knowledge of our youth. Every journey has an end, and this is the last stop before the train changes direction.
TEDxEuston is the start of something greater. LEGACY is where we discover it. So we hand the flame over to you.', 'Inherit the spirit of TEDxEuston.', 'Embrace the power of African ideas.', 'Watch some of our previous talks from the strategic thinkers,
builders & influencers who are shaping
Africa today');

INSERT INTO `artists` (`id`, `name`,`gender`, `age`, `address`, `town`, `state`, `phone`, `email`, `originstate`, `lga`, `nationality`, `category`, `spotlightname`,  `guardianname`, `guardianrelationship`, `guardianresidence`, `guardianphone`, `gallery`, `namefortandc`) 
VALUES (1, 'example', 'male', '21', 'abacha road', 'port harcourt','rivers state', '08067738683', 'd@example.com', 'rivers state', 'etche', 'nigerian', 'solo act', 'niel', 'godwin', 'father', 'port harcourt', '09865465778', 'images/button.png', 'daniel');



INSERT INTO `items` (`id`, `title`, `tags1`, `description`, `event_attend`, `event_attend2`, `event_attend3`, `event_attend4`, `event_attend5`, `address`, `latitude`, `longitude`, `category`, `phone`, `email`, `gallery`, `video`, `video2`, `facebook`, `instagram`, `twitter`, `pinterest`) 
VALUES (1, 'EMEKA second', 'TEDXPH 2015', 'Art is important in our society to , infrastructural design should be integreted as ART for us to have better cities', 'TEDXPHCITY 2014', 'TEDXPHCITY 2015','TEDXPHCITY 2016', 'TEDXPHCITY 2017', 'TEDXPHCITY 2018', '', '4.74974', '6.82766', 'Attendee', '07059373809', 'emekanew@testing.com', 'assets/img/items/kill.jpg', 'https://www.youtube.com/watch?v=2Z_LAZYCZoY', 'https://player.vimeo.com/video/184360631', 'emeka doe', 'emeka_doe', 'emeka_doe', 'example_man');





-- --------------------------------------------------------

--
-- Table structure for table `opening_hours`
--

CREATE TABLE IF NOT EXISTS `opening_hours` (
  `openin_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(128) NOT NULL,
  `day` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `time_open` time NOT NULL,
  `time_close` time NOT NULL,
  `closed_day` int(11) NOT NULL,
  PRIMARY KEY (`openin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`openin_id`, `item_id`, `day`, `time_open`, `time_close`, `closed_day`) VALUES
(1, 1, 'Monday', '08:00:00', '11:00:00', 0),
(2, 1, 'Tuesday', '08:00:00', '11:00:00', 0),
(3, 1, 'Wednesday', '08:00:00', '11:00:00', 0),
(4, 1, 'Thursday', '08:00:00', '11:00:00', 0),
(5, 1, 'Friday', '08:00:00', '23:00:00', 0),
(6, 1, 'Saturday', '11:00:00', '23:00:00', 0),
(7, 1, 'Sunday', '00:00:00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(128) NOT NULL AUTO_INCREMENT,
  `item_id` int(128) NOT NULL,
  `author_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `author_image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `rating` int(8) NOT NULL,
  `review_text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `item_id`, `author_name`, `author_image`, `date`, `rating`, `review_text`) VALUES
(1, 1, 'Jane Doe', 'assets/img/person-01.jpg', '2016-06-07', 4, 'Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros'),
(2, 1, 'Norma Brown', 'assets/img/person-02.jpg', '2016-06-23', 5, 'Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis'),
(3, 2, 'Catherine Doe', 'assets/img/person-01.jpg', '2016-09-13', 5, 'Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros'),
(4, 2, 'Peter Great', 'assets/img/person-03.jpg', '2016-09-14', 3, 'Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis'),
(5, 1, 'Patrick Jamison', 'assets/img/person-04.jpg', '2016-09-14', 5, 'Nam tincidunt mollis nibh at facilisis. Integer a orci a elit malesuada ultrices. Morbi facilisis, velit non fermentum laoreet, ligula dolor ullamcorper quam, a tristique risus est et ante.'),
(6, 3, 'Pete Jamison', 'assets/img/person-04.jpg', '2016-09-14', 4, 'Nam tincidunt mollis nibh at facilisis. Integer a orci a elit malesuada ultrices. Morbi facilisis, velit non fermentum laoreet, ligula dolor ullamcorper quam, a tristique risus est et ante.'),
(7, 3, 'Suzanne Green', 'assets/img/person-01.jpg', '2016-09-12', 5, 'Integer a orci a elit malesuada ultrices. Morbi facilisis, velit non fermentum laoreet, ligula dolor ullamcorper quam, a tristique risus est et ante.');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `item_id` int(128) NOT NULL,
  `schedule_id` int(128) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `location_address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`item_id`, `schedule_id`, `date`, `time`, `location_title`, `location_address`) VALUES
(3, 1, '2016-12-05', '20:00:00', 'Town Square', '458 Brigth Street London'),
(3, 2, '2016-12-13', '18:00:00', 'Bristol Gallery', '87 Yellow Lane, Manhattan');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `item_id` int(32) NOT NULL,
  `tag` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`item_id`, `tag`) VALUES
(1, 'Wi-Fi'),
(1, 'Parking'),
(1, 'TV'),
(1, 'Vegetarian'),
(2, 'Balcony'),
(2, 'Smoking'),
(2, 'Vine List');

-- --------------------------------------------------------

--
-- Table structure for table `today_menu`
--

CREATE TABLE IF NOT EXISTS `today_menu` (
  `item_id` int(128) NOT NULL,
  `meal_id` int(128) NOT NULL AUTO_INCREMENT,
  `meal_type` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `meal` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`meal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `today_menu`
--

INSERT INTO `today_menu` (`item_id`, `meal_id`, `meal_type`, `meal`) VALUES
(2, 1, 'Starter', 'Smoked Salmon, Classic Condiments, Brioche'),
(2, 2, 'Soup', 'Roasted Golden Beets, Goat Cheese, Hazelnut Granola'),
(2, 3, 'Main course', 'Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree'),
(1, 4, 'Main course', 'Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
