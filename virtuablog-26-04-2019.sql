-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 02:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtuablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(10) NOT NULL,
  `btitle` varchar(150) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `country` varchar(75) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `category` varchar(100) NOT NULL,
  `bbody` text NOT NULL,
  `bpa` varchar(50) NOT NULL,
  `bpb` varchar(50) NOT NULL,
  `dbc` varchar(50) NOT NULL,
  `posted_at` varchar(30) NOT NULL,
  `approved` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `btitle`, `fullname`, `phone`, `email`, `country`, `state`, `city`, `category`, `bbody`, `bpa`, `bpb`, `dbc`, `posted_at`, `approved`) VALUES
(10, 'Priyanka Chopra, Kareena Kapoor ', 'test', '9872778144', 'test@test.com', '', '', 'Ludhiana', 'bollywood', 'On Friday evening, Kareena Kapoor drove down all the way from Pune to Mumbai for shooting her televised act for an award ceremony. What should have ended in a few hours took them forever, thanks to Priyanka Chopra.\r\n\r\nBebo finished with her make-up and hair and arrived on the stage to see that it was already occupied by Priyanka Chopra. She had to wait for four hours before she could actually shoot her performance.\r\n\r\nA source present at the awards revealed, â€œKareena landed at Yash Raj Studios around midnight; she found that the stage was occupied by Priyanka. She waited patiently for sometime. On spotting her, PC came down from the stage and told her that she could not give the stage until 1 am (although Kareena was assigned the stage at 12 am).â€\r\n\r\nPC continued to rehearse till 4 am, by that time, the exhausted Kareena had left for home.\r\n\r\nThe next morning, Kareena asked her manager Zahid to cancel the shooting (with Salman for Bodyguard), which was scheduled on Saturday in Pune and then came back to the studio to finish her song.\r\n\r\nNormally, the fiery Bebo would have flared up because she was kept waiting for more than four hours. Although, she was smarting with humiliation, she maintained her cool. Later, she gave a call to the organizers and gave her piece.\r\n\r\nThey explained it to her that because of some technical problems, Priyankaâ€™s act took a longer time.\r\n\r\nPCâ€™s spokesperson said, â€œPriyanka was not aware that Bebo had to wait for hours. Not that I am aware of. Priyanka had a long act with many changes.â€\r\n\r\nBebo remained unavailable for comment.', 'uploads/436611priyanka-and-kareena.jpg', 'uploads/424298', 'uploads/11573', 'undefined', 'approve'),
(11, 'Rimi Sen Likes Irfan Khan A Lot', 'raman', '9872778144', 'y@gmail.com', '', '', 'Lucknow', 'bollywood', 'Very recently we read somewhere that actress Rimi Sen had said in an interview that she was not keen on doing multi-starrers. However, contrary to her statement, in todayâ€™s release, Rimi Sen will be seen in a multistarrer, the Anees Bazmee directed THANK YOU, featuring Akshay Kumar, Suneil Shetty, Irrfan Khan, Sonam Kapoor and of course Rimi herself. \r\n\r\nWhen we clarified the same from Rimi, the straight forward actress, without batting an eyelid, accepted that she had indeed made such a statement. She told us, â€œActually most muti-starrers donâ€™t have much role for actresses.\r\n\r\nThat is why I am not very keen on them.â€ So, why did she decide to do THANK YOU? And Rimi replied, â€œI really like Irrfan Khan, both as an actor and as a person and thatâ€™s why I wanted to act with him. Another reason is that I like the way Anees Bazmee makes his films and thatâ€™s why I chose to do THANK YOU.â€ About the duration of her shoot she said, â€œI shot for about a month.', 'uploads/290108rimi-sen-hot-phoot-shoot-278x300.jpg', 'uploads/432461', 'uploads/419529', 'undefined', 'approve'),
(12, 'Ranbir Kapoor - The New Face Of Tata Docomo', 'madi', '', '', '', '', 'Adoni', 'bollywood', 'Bollywood actor Ranbir Kapoor has added Tata Docomo to his endorsement kitty. Telecom company Tata DOCOMO has launched its new brand campaign â€˜Keep It Simpleâ€™ that will be endorsed by Kapoor.\r\n\r\nâ€˜With impactful rendition of many an act(s) that mark our daily experiences in life and with our mobile phones, Ranbir will drive home the Keep It Simple message through the April and May months of the IPL series,â€™ said a company spokesperson. \r\n\r\nSpeaking on the occasion, S Ramakrishna, Regional Head - South East, TATA Docomo, said: â€˜As a youth icon, Ranbir is a trend-setter and appeals to young audience-he is professional, dynamic and youthful. This is a perfect match with Tata Docomo, and we welcome him to the family and look forward to a long and meaningful association.â€™\r\n\r\nâ€˜I have always believed in being different and doing things in a unique and new way-which is what made me jump at the chance to associate with Tata DOCOMO, which is such a close replica of my own persona,â€™ said Kapoor, expressing his excitement at this new connection in his life.', 'uploads/54310rk.jpg', 'uploads/125186', 'uploads/277113', 'undefined', 'approve'),
(13, 'Hrithik Roshan Bleeds On The Sets Of Agneepath', 'madi', '', '', '', '', 'Alibag', 'bollywood', 'We all know that Hrithik Roshan is starring in the remake of â€˜Agneepathâ€™ â€“  the cult bollywood gangster acted by the magnificent Amitabh Bachchan. Produced by Dharma productions, the movie fetched the national award for the best actor to Amitabh Bachchan and best supporting actor to Mithun Da ( Mithun Chakraborty) in 1990.\r\n\r\nThe cult in his 2011 version is said to have the slick and the â€˜inâ€™ look where the B-town handsome hunk Hrithik will play the role of Vijay Dinanath Chauhan and dreaded Kaacha Chhena wil be enacted by none other than Sanju baba who returns to his good bad ways with a punch.\r\n\r\nWhile shooting for the film in Versova, Hrithik Roshan got injured.  The scene required Hrithik to break a coconut on the ground.', 'uploads/392109hr.jpg', 'uploads/46091', 'uploads/456359', 'undefined', 'approve'),
(14, 'Mahendra Singh Dhoni Becomes Trendsetter Once more with His Hair, or rather No Hair', 'madi', '9872778144', '', '', '', 'Adilabad', 'cricket', 'One of the most talked about issues since India won the ICC Cricket World Cup 2011 was about Gurujis of the cricketers as well as Yuvraj Singhâ€™s mystery dedication and also, Mahendra Singh Dhoniâ€™s changing hair styles.\r\nThe pictures of the Indian captain over the years tells a story of how the Indian cricketer has set trends over the years that have been emulated by several since.\r\n\r\nDhoni looks bald in the pictures released with the ICC Cricket World Cup 2011. But no, the Indian skipper has not suffered hair loss en route to Indiaâ€™s glory. Rather the decision to clean shave his pate had apparently to do with a religious vow he took and the fulfillment of his wish, Indian winning the World Cup, meant that he would keep his vow.\r\n\r\nOne would have to say that the look sits rather well with the captain known to experiment a lot. Besides, not many can argue that it is the right look for the summer as the heat will well and truly descend upon India in the course of the IPL 4 season. ', 'uploads/213144mahendra-singh-dhoni-shaved_pRsRf_17', 'uploads/29927', 'uploads/394493', 'undefined', 'terminate'),
(15, 'Akshay Kumarâ€™s â€˜Thank Youâ€™ To Hit The Theatres Today', 'Raman', '', '', '', '', 'Almora', 'bollywood', 'The sole release of the week is â€˜Thank Youâ€™ and it has everything going in itâ€™s favour as far as release timing and positioning amongst the audience is concerned. There is no competition due to absence of any newer releases, from the earlier releases there is only F.A.L.T.U. to contend with and that too basically has a restricted market for itself. Next week too there is just one small film arriving in theaters - â€˜Teen Thay Bhaiâ€™. Though IPL is kick starting, it is no threat as viewers have had enough of cricket and they would rather step into theaters to watch a film.\r\n \r\nAll of this means that the sole requirement for â€˜Thank Youâ€™ to earn mega bucks for itself is to be a good film. Period. The cast is huge, the director has a great track record and the promos are giving an impression of a fun watch. All of this means that it is a given that â€˜Thank Youâ€™ would take one of the better starts for Akshay Kumar in the recent months. While â€˜Patiala Houseâ€™ opening would comfortably be left behind, it now has to be seen whether Akshay can surpass the weekend opening of â€˜Tees Maar Khanâ€™ and â€˜Housefullâ€™, both of which had crossed the 30 crores mark.\r\n \r\nAs things stand today, both Akshay Kumar as well as the makers would be happy if â€˜Thank Youâ€™ indeed manages over 25 crores opening for itself, something which is on the cards. Once such an opening is accomplished and the film finds decent to good word of mouth for itself, it would be a winning situation for â€˜Thank Youâ€™ as it could then benefit out of an open fortnight ahead.', 'uploads/273504akshay-kumar12.jpg', 'uploads/197613', 'uploads/492276', 'undefined', 'approve'),
(16, 'Hrithikâ€™s Mind Blowing Abs In His Upcoming Film', 'raman', '', '', '', '', 'Aizawl', 'bollywood', 'Director Zoya Akhtarâ€™s Zindagi Na Milegi Dobara has been creating a lot of pomp in the recent times. With its multi-starrer cast and an uncommon name, the film has managed to grab the audience attention from day one. The filmmakers have finally launched the first look (poster) of the film.\r\n\r\nThe poster features, the three male lead of the film, namely Farhan Akhtar, Hrithik Roshan and Abhay Deol. The poster tries to fill a curiosity among the viewers, by only showing a portion of the actors face and by hiding the eyes and forehead. Hrithik Roshan is seen flaunting his chiseled body, while Farhan and Abhay are donning a cool look. The pictures shows the actors on a road trip.\r\n\r\nApart from Farhan, Hrithik and Abhay Zindagi Na Milegi Dobara also stars Katrina Kaif, Kalki Koechlin and Ariadna Cabrol as its female lead. The film is being produced by Riteish Sidhwani and Farhan Akhtar and is being directed by Zoya Akhtar. The music for Zindagi Na Milegi Dobara has been composed by Shankar Ehsaan Loy.', 'uploads/205649zindagi-na-milegi-b-070411-207x300.j', 'uploads/51611', 'uploads/294472', 'undefined', 'terminate'),
(17, 'Is Shahrukh Khan Performing At The IPL Ceremony Today ?', 'raman', '', '', '', '', 'Alwaye', 'bollywood', 'The fourth season of Indian Premier League just got bigger! According to sources, Bollywood superstar Shah Rukh Khan is most likely to perform at the opening ceremony of IPL on Friday.\r\n\r\nThe actor is all set to inaugurate the ceremony with a rocking performance. The actorâ€™s team Kolkata Knight Riders would be playing the first match against Chennai Super Kings on the same day.\r\n\r\nConfirming the news, N Srinivasan of Team Chennai told a leading daily, â€œYes, he`s performing at the event.â€ So Badshah Khan will be seen dancing on the tunes of hit hindi film numbers.\r\n\r\nAccording to a source, â€œThe actor is rehearsing in Mumbai at the moment for the big event. He will land in the city this afternoon.â€\r\n\r\nCaptain of Chennai Super Kings, M S Dhoni, is looking forward to the match and joked â€œI simply cut my hair after the World Cup win,â€ he said, â€œBut, considering the heat in Chennai, I think it`s a good decision!â€', 'uploads/120521shahrukh_khan_ipl_20080616-300x233.j', 'uploads/11223', 'uploads/121632', 'undefined', 'terminate'),
(18, 'Amitabh Bachchan To Turn Action Hero Again', 'Madi', '', '', '', '', 'Bahraich', 'bollywood', 'Megastar Amitabh Bachchan will be seen doing action sequences in his home production Bbuddah-Hoga Tera Baap, with the actor admitting that he missed the thrill of punching and kicking.\r\n\r\nâ€œI had not punched, kicked or walloped a guy in ages! At least not in the past 15 years or so. But finding myself in those climes for Bbuddah-Hoga Tera Baap, I must admit I was really missing something,â€ he wrote on his blog bigb.bigadda.com.\r\n\r\nâ€œIts nostalgic to be in the presence of action directors againâ€¦had not been there for yearsâ€¦homesick for it!!â€ he said.\r\n\r\nâ€œThe stride has been firmer, the heart pumping the blood through the veins as rapidly as one would imagine and that strange feel of having conquered all, fills me up with enthusiasm, hope and a brighter tomorrow. There is a strange connect in this and I sometimes wonder why the earlier films got the kind of attention they did when they did,â€ he said.', 'uploads/153366amitabh-bachchan.jpg', 'uploads/227601', 'uploads/266396', 'undefined', 'approve'),
(19, 'Shahid Kapoor On His Role In Mausam', 'madi', '', '', '', '', 'Adilabad', 'bollywood', 'Shahid Kapoor will be seen rocking four different looks in the love story â€˜Mausamâ€™, having Sonam Kapoor as his love interest. Their characters are Rohan and Aayat respectively.\r\n\r\nShahid tells to the journalists, â€œI have four different looks in the film and my first look of an air force pilot is just one of them. It will be wrong if I say that I cannot surpass any of my previous performances, especially Kaminey. All characters I portray in films are different and cannot be compared. There are lot of films Iâ€™ve done and some performances that are very close to my heart. Mausam is again a special film for meâ€\r\n\r\nThe movie is being directed by his father Pankaj Kapoor.\r\n\r\nCurrently, every look has logic behind it. It represents the four seasons in a year, moving from Summer to Winter, Autumn to Spring. Mausam is slated to be one of the actorâ€™s most romantic movies so far in his career.', 'uploads/360406mausam.jpg', 'uploads/148133', 'uploads/191352', 'undefined', 'approve'),
(20, 'BMCK', 'BMCK', 'BMCK', 'BMCK', '', '', 'Ludhiana', 'cricket', 'Finally it took a \'badshah\' to publicly tell Sunny bhai to shut his trap. Whether the 4 captain theory put forward by John Buchanan works or not, Gavaskar\'s smugness was getting more than irritating.\r\n\r\nWhile there is no doubting Gavaskar\'s greatness in his playing days, once he hung up his boots, his contribution to Indian cricket or any cricket for that matter has been zilch. For that reason itself, the smug righteousness with which he makes his comments gets my goat.\r\n\r\nOne of his big arguments is that John Buchanan is a failed cricketer? Maybe that is true but I would politely suggest that 99.9% of the Indian population is a failed cricketer. Who in our country wouldn\'t be a world class cricketer if he had the choice? I would, for one. If Sunny bhai feels that to be a factor, then first he should tell the Indian public to shut up with their thoughts on how cricket should be run and who the captain and the playing eleven should be for every match. Would he dare?\r\n\r\nGavaskar\'s article brings forward a stalemate with its suggestion that a failed cricketer shouldn\'t go about telling players what to do. The successful cricketers, a la Gavaskar himself, would never put themselves in such a position of accountability as that of a coach. So who does that leave? Madan Lals, Gaekwads, Rajputs and other sundry names which keep popping up every now and then whenever the foreigner vs Indian debate comes up? Give me a break! When a franchise, KKR or any other, has money to hire good people, why would they even look at these non-entities? SRK\'s idea is really good in that way; maybe Gavaskar can buy one of the franchises and appoint the Gaekwads as coach?\r\n\r\nGavaskar\'s diatribe against Buchanan loading up the KKR support staff with his friends and family - with the team owners, \'poor souls\', having no clue of being milked - is again a bit over the top. For someone who has been on thousands of committees, sub-committees, panels and advisory teams, his notable contributions to cricket after retirement are notable by their absence. Sunny also is not someone who would just be on some committee or other for the betterment of the game; like they say \'it takes a milker to know one\'. I also wonder if Gavaskar knows what these pals, including Buchanan\'s son, does at KKR? Sunny\'s son not being so good at what he does doesn\'t really mean Buchanan\'s son isn\'t good at whatever he is supposed to be doing.', 'uploads/113391', 'uploads/15123', 'uploads/23062', 'undefined', 'terminate'),
(21, ' The curious case of will power', 'madi', '', '', '', '', 'Ajmer', 'cricket', 'I\'ve seen this happen several times before and yet never quite understood it. Cricket is a game that is played between two opposing sides, where generally the side that executes better on the day ends up winning. On a more macro level the same is fundamental to any sport. Even those played between individuals, like tennis or golf. The individual or the team that executes the skill or set of skills which are on display, better than the opposition, generally comes up trumps.\r\n\r\nHowever, sometimes this is not necessarily the case. Teams or individuals who are better placed to win at the start of the game and/or may also display a better performance during the course of the game are stalled in their march to victory by an intangible element. This intangible may on some occasions delay the onset of victory for the opposition, if not completely deny it.\r\n\r\nIn the game between Kolkata Knight Riders and Rajasthan Royals, this past Thursday, this latent intangible manifested itself yet again. It once again donned the guise of a champion sportsman\'s will power, his tenacity not to give in without a fight, his ability to inspire his team from a seemingly hopeless position. Since the time Shane Warne came out to bat in the penultimate over of the Royals innings, he had a tonic like effect on the fortunes of his side. The little known Abhishek Raut looked to be feeding off Warne\'s energy and played a cameo late in the Royals innings that proved to be invaluable in the overall scheme of things.', 'uploads/106347rajsthan_225.jpg', 'uploads/35349', 'uploads/414233', 'undefined', 'approve'),
(22, 'Happy Birthday Sachin', 'raman', '', '', '', '', 'Jaipur', 'cricket', 'Sachin Ramesh Tendulkar â€“ the name that elicits genuine admiration and awe the world over. Today Sachin celebrates his 36th birthday and while there are so many things about Tendulkar that endear him to each and every one of us, here is my list of TEN reasons that put Tendulkar ahead of every other cricketer. So without further ado, here goes:\r\n\r\n1. Because in 1989, at the tender age of sixteen he tore into a thirty four year old veteran - Abdul Qadir with gusto and made the world take note of his precocious talent.\r\n\r\n2. Because on witnessing his innings of 114 at the WACA in the fifth test of 1991-1992 series against Australia, the eminent cricket journalist John Woodcock stood up, put out his hands and called for silence. \"Gentlemen,\" Woodcock declared, \"he is the best batsman I have seen in my life.\" A pause later: \"And unlike most of you, I have seen Bradman.\"\r\n\r\n3. Because he gave a whole new meaning to the \'desert storm\' that preceded his innings of 143 when he took India to the finals of the Coca Cola cup in Sharjah on the 22nd of April in 1998.', 'uploads/343574sachin_birthday.jpg', 'uploads/175485', 'uploads/308246', 'undefined', 'approve'),
(23, 'IPL - Preview 2', 'madi', '', '', '', '', 'Bapatla', 'cricket', 'In my last blog on this forum (http://cricketblog.aol.in/2009/04/14/ipl-preview-1/ ), I had previewed the chances of the Punjab Kings XI, the Delhi Daredevils, and the Rajasthan Royals in the upcoming edition of the IPL. Of the lot, I had bet only on the Daredevils making it through to the semifinals. In this blog, I shall preview the remaining teams in the tournament.\r\n\r\nThe Bangalore Royal Challengers made news in last year\'s tournament with the sacking of their CEO Charu Sharma for the team\'s disastrous performance. This year also there is already a buzz about the team given that the Royal Challenger\'s made history by buying Kevin Pietersen at USD 1.55 million. However, this does not necessarily translate into more wins for the Royal Challengers since Pietersen will not be available for more than 50% of the league stage (on international duty for the series against West Indies in early May 09).\r\n\r\nJesse Ryder is a good acquisition given his recent scores in international cricket and this would add to the batting strength of the side (Dravid, Kallis, Uthappa & Vira Kohli) even in Pietersen\'s absence. But with Zaheer Khan moving to the Mumbai Indians in exchange for Robin Uthappa, the bowling department will be largely dependent on Dale Steyn. This and how they will field their four best foreign players with Pietersen and Chanderpaul around, adds to their problems.\r\n\r\nThe losing finalists from last year â€“ the Chennai Super Kings should continue their good run into this year\'s tournament. Their acquisition of Andrew Flintoff (also at USD 1.55 million) should pay rich dividends till the time he is available (off on international duty for the series against West Indies in early May 09). Also with Mathew Hayden, Mahendra Singh Dhoni and Suresh Raina expected to bludgeon bowling attacks into submission, it would be difficult to stop the Super Kings from winning the second edition of the tournament. The presence of Makhaya Ntini, Manpreet Gony, Albie Morkel and Muttiah Muralitharan also gives a well rounded feel to their bowling attack. It would be a huge disappointment if this side underperforms and crashes out after the league stages of the tournament.', 'uploads/372197cheerleaders.jpg', 'uploads/108577', 'uploads/24073', 'undefined', 'terminate'),
(24, 'IPL - Preview 1', 'madi', '', '', '', '', 'Bhimavaram', 'cricket', 'The IPL in its second edition shall kickoff in less than a week in South Africa. Eight teams shall traverse the length and breadth of this vibrant nation to do battle with bat and ball. With the experience of the last season in India counting for nothing and the absence of home ground advantage in this edition, it will clearly be a case of which team adapts quickly to the different conditions on offer at each venue in South Africa. This makes previewing the fortunes of each team even more interesting, something akin to taking a shot in the dark. In this post, I hope to shed some light on the three teams from the north which include the defending champions.\r\n\r\nThe Kings XI Punjab, were one of the firebrand franchisees from the last edition with a strong batting lineup that boasted of names like Shaun Marsh, Yuvraj Singh, Kumara Sangakkara and Mahela Jayawardene. Had they played to their potential in last year\'s semi final they should have beaten the Chennai Super Kings, but their batting let them down on that day. Even so they finished the 2008 edition as the team with the second most wins in the league stage (10 wins) of the competition, just next to the Rajathan Royals (11 wins). ', 'uploads/35317620_cheerleaders_ipl_1304_40.jpg', 'uploads/264499', 'uploads/401555', 'undefined', 'approve'),
(25, 'Yuvraj Singh - An enigma unravelled', 'madi', '', '', '', '', 'Khopoli', 'cricket', 'Yuvraj Singh could well be facing a quarter life crisis. For at 27 years and 115 days old, Yuvraj is having to play a constant game of catch with the promise he had shown in the early days of his career. What would leave many of his fans nonplussed is how someone so prodigious in the one day format of the game, can more often than not, look so woefully at sea when confronted by the tide of test cricket.\r\n\r\nIt must be conceded in Yuvraj\'s favour, that at the start of his test career, he always played with the pressure of knowing that his inclusion in the side was always an arrangement for the short term. But then history has waxed eloquent of folks who have challenged the odds. In Yuvraj\'s case, other than for a superb century in the second test of the historic Indian tour to Pakistan in early 2004, he has hardly ever been guilty of such an assault. And so a poor showing at home against Australia in late 2004 brought the curtains down on scene one of Yuvraj\'s first act in test cricket.\r\n\r\nAct two also proved to be short-lived, as Yuvraj struggled to cope with the rigours of test cricket, both at home against England and on tour to the West Indies in 2006. Once Sourav Ganguly made his way back into the test side in late 2006, it was always going to be a waiting game for the talented southpaw. Meanwhile a consistent showing in one day cricket and some spectacular performances in 20:20 meant that Yuvraj would always have another throw of the dice at the number six position in tests. With Ganguly\'s eventual retirement in 2008, one would have hoped for a seamless transition between the two left handed batsmen. ', 'uploads/177242yuvraj.jpg', 'uploads/362323', 'uploads/464331', 'undefined', 'approve'),
(26, 'Ritesh Deshmukh Is A Producer Now', 'Raman', '', '', '', '', 'Allahabad', 'bollywood', 'Actors turning into producers is a usual sight in Bollywood now-a-days. While recently, it was actress Lara Dutta, who launched her home production house with her upcoming film Chalo Dilli, it news one to join the league is actor Riteish Deshmukh.\r\n\r\nActor Riteish Deshmukh will soon be turning into a producer. His first home production will be a Marathi film. All the Maharashtrain artistes will be given first preference in his film. Presently, Riteish is still looking for good scripts to go ahead with the film. The actor however, plans to release the film by next year.\r\n\r\nThe actor was last seen in Vashu Bhagnaniâ€™s comedy flick, Faltu, which turned out to be a money spinner for the makers.', 'uploads/405377ritesh_deshmukh.jpg', 'uploads/5529', 'uploads/465215', 'undefined', 'approve'),
(52, 'Celina Jaitleyâ€™s Role Been Cropped In â€˜Thank Youâ€™', 'madi', '', '', '', '', 'Agartala', 'bollywood', 'Celina Jaitly got a raw deal with Thank You but the actress is putting on a brave front. She was cast opposite Sunil Shetty. This is her second film with director Anees Bazmee after 2005â€™s No Entry. She was surprised to know that she is missing from most of the second half, only to pop up during the climax.\r\n\r\nInterestingly enough, co-stars Sonam and Rimi enjoy more screen time by comparison.\r\n\r\nAlso, CJâ€™s absence from the filmâ€™s premiere on Thursday night raised eyebrows. While Sonam was unwell, Celina was in Dubai on â€œa personal breakâ€.\r\n\r\nSays a source, â€œSheâ€™s got a raw deal despite working with Bazmee before this and sharing a great rapport with him.â€\r\n\r\nThe source adds, â€œThe film suffered due to lack of coordination of the castâ€™s dates. Most of the scenes were rushed because Akshay and Sonam had other commitments.', 'uploads/299118celina.jpg', 'uploads/2965', 'uploads/347243', 'undefined', 'terminate'),
(53, 'New Test Post', 'Happy', '456455', '1233', '', '', '', '', '', 'uploads/247240', 'uploads/377566', 'uploads/154471', 'undefined', 'no'),
(54, 'Test', 'happy', 'ggg', '2454', '', '', 'Ludhiana', 'others', 'Heloooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', 'uploads/97647student-zone.jpg', 'uploads/276571travel-n-tourism.jpg', 'uploads/458206', 'undefined', 'no'),
(55, 'hola', 'ramandeep', '1515', 's.ramaninfinite@live.com', '1', '4', '3', 'politics', '', 'uploads/244599Tulips.jpg', 'uploads/244599', 'uploads/244599', '2011-08-22 09:54:57', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_edit_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_status` varchar(10) COLLATE utf8_bin NOT NULL,
  `cat_priority` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `cat_desc`, `cat_slug`, `cat_date`, `cat_edit_date`, `cat_status`, `cat_priority`) VALUES
(59, 'Hardware', 'This is category for hardware', 'hardware', '', '', '1', '2'),
(60, 'Software', 'This is category for software', 'software', '', '16/04/2019', '1', '1'),
(61, 'Games', 'This is category for games', 'games', '16/04/2019', '16/04/2019', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `comm_autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `comm_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `comm_text` text COLLATE utf8_bin NOT NULL,
  `comm_status` varchar(50) COLLATE utf8_bin NOT NULL,
  `comm_date` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `postid`, `comm_autor`, `comm_email`, `comm_text`, `comm_status`, `comm_date`) VALUES
(1, 17, 'Mustafa', 'necko@gmail.com', 'This is  best way to secure your online data for just $9.99/mo.', '1', '26/04/2019'),
(2, 17, 'Nedžad Mešić', 'necko@gmail.com', 'This is  best way to secure your online data for just $9.99/mo.', '1', '26/04/2019'),
(3, 17, 'Nedžad Mešić', 'necko@gmail.com', 'This is  best way to secure your online data for just $9.99/mo.', '1', '26/04/2019'),
(4, 17, 'Nedžad Mešić', 'necko@gmail.com', 'This is  best way to secure your online data for just $9.99/mo.', '1', '26/04/2019'),
(5, 17, 'Nedžad Mešić', 'necko@gmail.com', 'test', '0', '26/04/2019'),
(6, 17, 'Nedžad Mešić', 'necko@gmail.com', 'test1', '0', '26/04/2019'),
(7, 17, 'Nedžad Mešić', 'necko@gmail.com', 'test3', '0', '26/04/2019'),
(8, 17, 'Nedžad Mešić', 'necko@gmail.com', 'test4', '1', '26/04/2019'),
(9, 17, 'Nedžad Mešić', 'necko@gmail.com', 'test5', '1', '26/04/2019'),
(11, 17, 'Nedžad Mešić', 'necko@gmail.com', 'Commenter ', '1', '26/04/2019'),
(12, 17, 'Nedžad Mešić', 'necko@gmail.com', 'sad', '1', '26/04/2019'),
(13, 17, 'Nedžad Mešić', 'necko@gmail.com', 'asdsa', '0', '26/04/2019'),
(14, 17, 'Nedžad Mešić', 'necko@gmail.com', '55', '0', '26/04/2019'),
(15, 14, 'Nedžad Mešić', 'necko@gmail.com', 'gouut', '0', '26/04/2019'),
(16, 17, 'Nedžad Mešić', 'necko@gmail.com', '789654', '0', '26/04/2019'),
(17, 15, 'Nedžad Mešić', 'necko@gmail.com', 'sad', '0', '26/04/2019'),
(18, 17, 'sad', 'necko@gmail.com', 'asd', '0', '26/04/2019'),
(19, 17, 'Nedžad Mešić', 'necko@gmail.com', 'ads', '0', '26/04/2019');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `post_category` varchar(10) COLLATE utf8_bin NOT NULL,
  `post_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_edit_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_image` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_text` text COLLATE utf8_bin NOT NULL,
  `post_tag` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_visit_counter` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_status` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_priority` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_category`, `post_title`, `post_autor`, `post_date`, `post_edit_date`, `post_image`, `post_text`, `post_tag`, `post_visit_counter`, `post_status`, `post_priority`) VALUES
(14, '59', 'Charge up to 4 devices at once for $45 with the GOSPACE SuperCharger', 'Nedžad Mešić', '17/04/2019', '17/04/2019', '1.jpg', '<p>No tech enthusiast can live without their gadgets. Smartphone. Laptop. Tablet. Smartwatch. You probably own them all, but they all need to be charged eventually, and you won&rsquo;t always be near a wall plug to charge them. That&rsquo;s why you need a portable power bank, and the GOSPACE SuperCharger is everything you need in a power bank and more for $44.99.</p>\r\n\r\n<p>The GOSPACE SuperCharger is a 10,000 mAh power bank sporting four charging options. You can charge your devices the traditional way with either the two USB ports or the USB Type-C port, but the SuperCharger also features a Qi wireless charging pad. Additionally, the Type-C charging port uses fast charging, which is ideal if your laptop or phone has a dangerously low battery percentage. On top of that, the SuperCharger has a built-in wall charger, so you can charge it while it&rsquo;s charging connected devices. Finally, GOSPACE includes multiple interchangeable socket adaptors so that you can charge your devices no matter where you travel.</p>\r\n\r\n<p>If you&rsquo;re a tech junkie with demanding power needs or if you frequently travel to foreign countries, the GOSPACE SuperCharger is a must-have, and it&rsquo;s currently on sale for $44.99, or 54% off.</p>\r\n\r\n<p><strong>Like this deal? Check out Vault, the best way to secure your online data for just $9.99/mo.</strong></p>\r\n', 'Consumer Electronics, Deals', '1', '1', '1'),
(15, '60', 'Get a lifetime of Excel training for $49', 'Nedžad Mešić', '17/04/2019', '17/04/2019', 'excel2.jpg', '<p>When most people think of Microsoft Excel, their minds likely turn to spreadsheets and dull charts. Or perhaps they think back on those dreadful hours spent crafting presentations for an underwhelmed boss.</p>\r\n\r\n<p>But, Excel is used for much more than these boring applications, and it&rsquo;s becoming an increasingly important and powerful tool as the world relies more and more on gathering and analyzing massive sets of complex data.</p>\r\n\r\n<p>The Excel Data Analyst Certification School will teach you how to make the most of this incredibly valuable program, and a lifetime membership is currently available for over 95% off at just $49.</p>\r\n\r\n<p>Whether you&rsquo;re trying to work independently or for a major data-hungry company like Google, this training will teach you everything from the fundamental elements of this powerful program to its most advanced tricks and tools.</p>\r\n\r\n<p>You&rsquo;ll learn how to gain important insights from complex data sets&mdash;all through instruction that utilizes real-word examples and hands-on exercises so you don&rsquo;t get lost along the way. You&rsquo;ll even earn an accredited certification after you complete your training.</p>\r\n\r\n<p>Learn how to succeed in an increasingly data-driven world with a lifetime membership to the Excel Data Analyst Certification School for just $49&mdash;over 95% off its usual price for a limited time.</p>\r\n', 'Software, Deals', '1', '1', '1'),
(16, '59', '1Charge up to 4 devices at once for $45 with the GOSPACE SuperCharger1', 'Nedžad Mešić', '17/04/2019', '17/04/2019', 'excel2.jpg', '<p>1No tech enthusiast can live without their gadgets. Smartphone. Laptop. Tablet. Smartwatch. You probably own them all, but they all need to be charged eventually, and you won&rsquo;t always be near a wall plug to charge them. That&rsquo;s why you need a portable power bank, and the GOSPACE SuperCharger is everything you need in a power bank and more for $44.99.</p>\r\n\r\n<p>The GOSPACE SuperCharger is a 10,000 mAh power bank sporting four charging options. You can charge your devices the traditional way with either the two USB ports or the USB Type-C port, but the SuperCharger also features a Qi wireless charging pad. Additionally, the Type-C charging port uses fast charging, which is ideal if your laptop or phone has a dangerously low battery percentage. On top of that, the SuperCharger has a built-in wall charger, so you can charge it while it&rsquo;s charging connected devices. Finally, GOSPACE includes multiple interchangeable socket adaptors so that you can charge your devices no matter where you travel.1</p>\r\n\r\n<p>If you&rsquo;re a tech junkie with demanding power needs or if you frequently travel to foreign countries, the GOSPACE SuperCharger is a must-have, and it&rsquo;s currently on sale for $44.99, or 54% off.</p>\r\n\r\n<p><strong>Like this deal? Check out Vault, the best way to secure your online data for just $9.99/mo.</strong></p>\r\n', '1Consumer Electronics, Deals1', '111', '0', '111'),
(17, '60', 'Convert your DVD collection to video files for $15 with MacX DVD Ripper Pro', 'Nedžad Mešić', '17/04/2019', '17/04/2019', 'sale1.jpg', '<p>With streaming services like Netflix and Hulu dominating the video market, physical media like DVDs are all but obsolete. That doesn&rsquo;t mean you should throw out your DVD player, but the bad news is that tablets and new laptops won&rsquo;t include anything to play DVDs on. If you want to cherish your extensive library of DVDs, MacX will rip your library for as low as $14.99.</p>\r\n\r\n<p>MacX DVD Ripper Pro is an app that makes DVD ripping easy. It allows you to convert DVDs to popular video formats such as MP4, H.264, MOV, and more in just 5 minutes. It even lets you decrypt copy-protected DVDs, so any movie in your library is fair game. Additionally, you can edit ripped videos by cutting video segments, adding subtitles, or even combining separate movies into a single video file.</p>\r\n\r\n<p>The days of DVDs are long past, but with MacX, you can enjoy your library on any device for years to come. You can buy a single MacX DVD Ripper Pro license for $14.99, or pay just $5 more for a family license.</p>\r\n\r\n<p>Like this deal? Check out Vault, the best way to secure your online data for just $9.99/mo.</p>\r\n', 'Macs, Deals', '1', '1', '1'),
(18, '60', 'naslov posta55', 'NEDŽAD MEŠIĆ', '26/04/2019', '26/04/2019', 'nophoto-default.jpg', '<p>d</p>\r\n', 'd', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` varchar(10) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(10) COLLATE utf8_bin NOT NULL,
  `type` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `gender`, `image`, `code`, `status`, `type`) VALUES
(25, 'Nedžad Mešić', 'necko', '2@r.com', '1sss5', '2', 'user.png', '', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
