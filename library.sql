-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 02:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `the-library`
--

CREATE TABLE `the-library` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `picture` varchar(2000) DEFAULT NULL,
  `Isbncode` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `author_ first_name` varchar(100) DEFAULT NULL,
  `author_last_name` varchar(100) DEFAULT NULL,
  `publisher_name` varchar(100) DEFAULT NULL,
  `publisher_address` varchar(300) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the-library`
--

INSERT INTO `the-library` (`id`, `title`, `picture`, `Isbncode`, `description`, `type`, `author_ first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(1, 'Harry Potter and the Sorcerer\'s Stone', 'img1.jpg', '123-456789', 'Harry Potter has no idea how famous he is. That\'s because he\'s being raised by his miserable aunt and uncle who are terrified Harry will learn that he\'s really a wizard, just as his parents were. But everything changes when Harry is summoned to attend an infamous school for wizards, and he begins to discover some clues about his illustrious birthright. From the surprising way he is greeted by a lovable giant, to the unique curriculum and colorful faculty at his unusual school, Harry finds himself drawn deep inside a mystical world he never knew existed and closer to his own noble destiny.', 'DVD', 'J.K. Rowling', 'J.K. Rowling', 'J.K. Rowling', 'wien', '2012-11-01', 'Available'),
(2, 'Hamlet', 'img2.jpg', '12-345987', 'Among Shakespeare\'s plays, \"Hamlet\" is considered by many his masterpiece. Among actors, the role of Hamlet, Prince of Denmark, is considered the jewel in the crown of a triumphant theatrical career. Now Kenneth Branagh plays the leading role and co-directs a brillant ensemble performance. Three generations of legendary leading actors, many of whom first assembled for the Oscar-winning film \"Henry V\", gather here to perform the rarely heard complete version of the play. This clear, subtly nuanced, stunning dramatization, presented by The Renaissance Theatre Company in association with \"Bbc\" Broadcasting, features such luminaries as Sir John Gielgud, Derek Jacobi, Emma Thompson and Christopher Ravenscroft. It combines a full cast with stirring music and sound effects to bring this magnificent Shakespearen classic vividly to life. Revealing new riches with each listening, this production of \"Hamlet\" is an invaluable aid for students, teachers and all true lovers of Shakespeare - a recording to be treasured for decades to come.', 'Filme', 'William Shakespeare', 'William Shakespeare', 'William Shakespeare', 'austria', '2010-03-10', 'Reserved'),
(3, 'Macbeth', 'img3.jpg', '987-123654789', 'One night on the heath, the brave and respected general Macbeth encounters three witches who foretell that he will become king of Scotland. At first sceptical, he’s urged on by the ruthless, single-minded ambitions of Lady Macbeth, who suffers none of her husband’s doubt. But seeing the prophecy through to the bloody end leads them both spiralling into paranoia, tyranny, madness, and murder.\r\n\r\nThis shocking tragedy - a violent caution to those seeking power for its own sake - is, to this day, one of Shakespeare’s most popular and influential masterpieces. ', '', 'William Shakespeare', 'William Shakespeare', 'William Shakespeare', 'new york', '2009-03-11', 'Available'),
(4, 'Tess of the D’Urbervilles', 'img4.jpg', '654-96548762', 'When Tess Durbeyfield is driven by family poverty to claim kinship with the wealthy D\'Urbervilles and seek a portion of their family fortune, meeting her \'cousin\' Alec proves to be her downfall. A very different man, Angel Clare, seems to offer her love and salvation, but Tess must choose whether to reveal her past or remain silent in the hope of a peaceful future. ', 'Book', 'J.K. Rowling', 'J.K. Rowling', 'J.K. Rowling', 'america', '2011-07-13', 'Available'),
(5, 'Jude the Obscure', 'img5.jpg', '489-3576266', 'Jude Fawley\'s hopes of a university education are lost when he is trapped into marrying the earthy Arabella, who later abandons him. Moving to the town of Christminster where he finds work as a stonemason, Jude meets and falls in love with his cousin Sue Bridehead, a sensitive, freethinking \'New Woman\'. ', 'Book', 'Thomas Hardy', 'Thomas Hardy', 'Thomas Hardy', 'wien', '2012-04-12', 'Available'),
(6, 'Jonathan Strange & Mr Norrell', 'img6.jpg', '1565-6422004', 'The year is 1806. England is beleaguered by the long war with Napoleon, and centuries have passed since practical magicians faded into the nation\'s past. But scholars of this glorious history discover that one remains: the reclusive Mr Norrell, whose displays of magic send a thrill through the country.\r\n\r\nProceeding to London, he raises a beautiful woman from the dead and summons an army of ghostly ships to terrify the French. Yet the cautious, fussy Norrell is challenged by the emergence of another magician: the brilliant novice Jonathan Strange.\r\n\r\nYoung, handsome and daring, Strange is the very antithesis of Norrel. So begins a dangerous battle between these two great men which overwhelms that between England and France. And their own obsessions and secret dabblings with the dark arts are going to cause more trouble than they can imagine.', '', 'Thomas Hardy', 'Thomas Hardy', 'Thomas Hardy', 'new york', '2017-11-09', 'Available'),
(7, 'Pippi Longstocking', 'img7.jpg', '765-0015488', 'Tommy and his sister Annika have a new neighbor, and her name is Pippi Longstocking. She has crazy red pigtails, no parents to tell her what to do, a horse that lives on her porch, and a flair for the outrageous that seems to lead to one adventure after another!', 'Book', 'Thomas Hardy', 'Thomas Hardy', 'Thomas Hardy', 'wien', '2007-11-07', 'reserved'),
(8, 'Mary Poppins', 'img8.jpg', '879548465', 'By P.L. Travers, the author featured in the major motion picture, Saving Mr. Banks. From the moment Mary Poppins arrives at Number Seventeen Cherry-Tree Lane, everyday life at the Banks house is forever changed.\r\n\r\nIt all starts when Mary Poppins is blown by the east wind onto the doorstep of the Banks house. She becomes a most unusual nanny to Jane, Michael, and the twins. Who else but Mary Poppins can slide up banisters, pull an entire armchair out of an empty carpetbag, and make a dose of medicine taste like delicious lime-juice cordial? A day with Mary Poppins is a day of magic and make-believe come to life!', 'Book', 'P.L. Travers', 'P.L. Travers', 'P.L. Travers', ' Travers', '2014-11-17', 'available'),
(9, 'Silas Marner', 'img9.jpg', '3035600003', 'Silas Marner: The Weaver of Raveloe is the third novel by George Eliot, published in 1861. An outwardly simple tale of a linen weaver, it is notable for its strong realism and its sophisticated treatment of a variety of issues ranging from religion to industrialisation to community.', 'DVD', 'P.L. Travers', 'P.L. Travers', 'P.L. Travers', 'PTravers', '2018-11-21', 'reserved'),
(10, 'Maisie Dobbs\r\n', 'img10.jpg', '00046626656', 'Maisie Dobbs, Psychologist and Investigator, began her working life at the age of thirteen as a servant in a Belgravia mansion, only to be discovered reading in the library by her employer, Lady Rowan Compton. Fearing dismissal, Maisie is shocked when she discovers that her thirst for education is to be supported by Lady Rowan and a family friend, Dr. Maurice Blanche. But The Great War intervenes in Maisie’s plans, and soon after commencement of her studies at Girton College, Cambridge, Maisie enlists for nursing service overseas.\r\nYears later, in 1929, having apprenticed to the renowned Maurice Blanche, a man revered for his work with Scotland Yard, Maisie sets up her own business. Her first assignment, a seemingly tedious inquiry involving a case of suspected infidelity, takes her not only on the trail of a killer, but back to the war she had tried so hard to forget. ', '', 'William Shakespeare', 'William Shakespeare', 'William Shakespeare', 'William Shakespeare', '2013-11-06', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `the-library`
--
ALTER TABLE `the-library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `the-library`
--
ALTER TABLE `the-library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
