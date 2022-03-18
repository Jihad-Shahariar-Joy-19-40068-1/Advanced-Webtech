-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 09:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_series`
--

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `id` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Regular'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`id`, `uname`, `password`, `email`, `dob`, `status`) VALUES
(1, 'Jihad Shahariar Joy', '202cb962ac59075b964b07152d234b70', 'jihadshahariarjoy2211@gmail.com', '2000-11-27', 'Regular'),
(2, 'Joy', '202cb962ac59075b964b07152d234b70', 'jihad@gmail.com', '2000-11-27', 'Regular'),
(3, 'ABC', '900150983cd24fb0d6963f7d28e17f72', 'abc@gmail.com', '2000-11-27', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `episode_info`
--

CREATE TABLE `episode_info` (
  `id` int(20) NOT NULL,
  `ep_no` varchar(10) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `summary` text DEFAULT NULL,
  `video` text NOT NULL,
  `from_series` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `episode_info`
--

INSERT INTO `episode_info` (`id`, `ep_no`, `name`, `summary`, `video`, `from_series`) VALUES
(1, '01', 'To Your Eternity Ep-01 \"The Last One\"', 'A mysterious being casts a small white orb unto the Earth. The Orb first takes on the form of a rock that spends an unmeasured amount of time lying there. One day, an injured white wolf collapses on top of the rock. The rock takes on the form of the now-dead wolf and wanders over to an encampment where most of the residents have died except for a cheerful boy. The boy recognizes the wolf and calls out to him as Joann. The boy packs up food and supplies to travel to a \"paradise\" beyond the mountains where he believes the people of his tribe are waiting, after leaving 5 years ago, while making him stay behind to watch the sick and elderly members of the village who eventually died.\r\n\r\nThe two try to follow the trail the tribe left behind, even after the boy suffers an injury to his leg, only to find the remnants of a caravan and multiple gravesites buried in snow. Dejected, the boy heads back home with Joann, only to eventually succumb to his untreated injury. The boy’s final request is for Joann to remember him forever. With the boy now gone and just an empty shell, The orb takes the form of the boy, and continues its journey in search of new stimulation. Going off into the world to experience those things which the boy wished he could’ve experienced.', 'https://www.youtube.com/embed/PsbybOUNaXk?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(2, '02', 'To Your Eternity Ep-02 \"A Rambunctious Girl\"', 'The orb now wanders south in the form of the boy it met earlier. Not knowing how to act as a human, the boy dies multiple times from starvation, injury, and being eaten by a bear, but keeps regenerating itself each time. Meanwhile, a nearby village is about to sacrifice a little girl named March to appease a god named Oniguma. However, as the party carries March up the mountain to the altar, her friend Parona creates a diversion, allowing her to escape. As March runs away, she encounters the boy while he regenerates himself, scaring off her pursuers. March ends up feeding the boy multiple fruits, which he devours like a wolf. As the two rest, March has a nightmare about her friend and her baby sister being sacrificed to Oniguma in her place, and decides to wander back to the main road. However, the boy follows her, and March jokingly calls herself his mother.', 'https://www.youtube.com/embed/9awo9KTfwvM?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(3, '03', 'To Your Eternity Ep-03 \"A Small Evolution\"', 'Parona uses a hidden blade to cut her bonds free and escape as a giant bear mauls the retinue watching her, but tumbles over a cliff while escaping the bear herself. Meanwhile, Hayase and the rest of the party escorting March up the mountain finds March as she tries to teach the boy to eat like a human. Hayase carries March up the rest of the way to the altar after feeding her drugged jelly. After tying March to the altar, the giant bear reappears. Assuming the bear is Oniguma, Hayase and her escorts prepare to leave, when Parona rushes in to free March, joined shortly after by the orb in the form of the boy. Hayase decides to stay and watch the spectacle, as Parona is knocked out by the bear, but the boy transforms into a wolf and manages to bite off the bear\'s face until it bleeds to death. Hayase declares that March, Parona, and the mysterious wolf can be spared if they follow her to the nation of Yanome. The girls accept the offer, while the wolf finally utters the words that March tried to teach the boy earlier, \"Thank You.\"', 'https://www.youtube.com/embed/BnP1sKi6ed4?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(4, '04', 'To Your Eternity Ep-04 \"A Large Vessel\"', 'Hayase escorts March, Parona, and the transforming wolf-boy (who March named Fushi) on a long ride to Yanome. Hayase lets them eat at various food stands, but soon slips them each sleeping drugs. When they wake up, Fushi is attacked by desperate prisoners who soon find that the boy is immortal, and Fushi learns a new phrase, \"it hurts.\" Fushi transforms into a wolf to escape, but is shot by Yanome with a poisoned arrow. March tends to Fushi\'s wounds, and using the arrow stuck inside Fushi, Parona comes up with a plan to take a trophy from the bear\'s hide, escape the prison to Ninnanah, and use it to prove that they no longer need to sacrifice anyone to Oniguma. After Fushi and March are caught digging their way to the bear, Hayase forces March to take care of the bear. Despite her efforts, the bear succumbs to its injuries, while Fushi opens itself up to new stimulation. Meanwhile, Parona is forced to launch her makeshift escape plan after falling into a storage shed and being spotted by a guard.', 'https://www.youtube.com/embed/3soFO0KDt10?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(5, '05', 'To Your Eternity Ep-05 \"Those Who Follow\"', 'Parona escapes with March, Fushi and the elder but is chased by the villagers from Yanome. When Parona is exposed to the enemies\' attack, March sacrifices her life to save Parona. This causes Fushi to transform the bear and take down the enemies. After March dies, Parona gives the news about the death to March\'s parents. With Yanome soldiers wanting to capture Fushi, Parona convinces him to part ways and escape for sake of them both. The Yanome soldier spotted and about to shoot arrow Fushi as he is leaving. However, Parona managed to shoot first at the hand of the archer. Fushi is shown taking on the form of March\'s appearance.', 'https://www.youtube.com/embed/Ew4YzphGymo?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(6, '06', 'To Your Eternity Ep-06 \"Our Goals\"', 'Fushi continues his journey through the forest, where he meets the elder Pioran once again, who teaches him how to speak after he shows interest in writing. After a while, Fushi is able to slowly speak with the elder, and even tells her his story. They later arrive at Takunaha, a territory currently at war with Yanome, aiming to reach the home of Pioran\'s lover. While resting, however, they are attacked by a mysterious creature who steals Fushi\'s memories and, therefore, his forms. Fushi\'s creator, The Beholder, appears and tells him to destroy the creature\'s core in its midsection. After defeating it, The Beholder tells Fushi their mission is to preserve the world and there are creatures who want to impede this objective. In the end, they finally arrive at Pioran\'s lover\'s house.', 'https://www.youtube.com/embed/xrjVYlY6pEw?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(7, '07', 'To Your Eternity Ep-07 \"The Boy Who Wants to Change\"', 'Gugu is a child who works in shops to live but is abandoned by his older brother. Shortly afterwards, Gugu nearly dies in a rail road. However, he is saved by Pioran\'s lover, Booze Man, and is forced to wear a mask to hide his wounded face. It is then that Pioran and Fushi reach their restaurant, with the latter interacting with Gugu several times. However, the young boy is conflicted when his crush, Rean Cropp, becomes attracted to Fushi, and decides to work in order to appeal to her.', 'https://www.youtube.com/embed/gipganQI6OY?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(8, '08', 'To Your Eternity Ep-08 \"Monster Brothers\"', 'After an argument with the Booze Man, Gugu leaves the restaurant and tries working in the city. However, he is often the victim of discrimination upon revealing his deformed face to the point of quitting. Meanwhile, Fushi tries cooking and cleaning the restaurant but upon multiple failures, Pioran convinces him that he needs Gugu\'s help to learn new skills and then properly become an adult. Gugu struggles to obtain easy money with Rean\'s ring she gave him but ultimately gives it up to his missing brother. In the next night, a group of men try to kidnap Gugu to use him as part of a show but Fushi scares the men by transforming into the bear. As Fushi requests Gugu\'s help, the two become friends.', 'https://www.youtube.com/embed/2K19R1vpcLc?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(9, '09', 'To Your Eternity Ep-09 \"Deep Memories\"', 'As Fushi treats a hungry Gugu, the former is taught by the latter about the concept of death and wonder how is it that he can take the form of the dead. Gugu feels relieved when Fushi agrees he will take Gugu\'s form to remember him if he dies in the same fashion Fushi did with March and the nameless villager. Rean finds the two and despite initially arguing with Gugu for not showing his face, the two befriend. As Fushi decides to search for Gugu\'s mask he abandoned to cover his deformed face, the other two decide to return to the restaurant. On their way back, Rean is chased by people hired by her father but she escapes. After Fushi recovers Gugu\'s mask, he is attacked by the unknown silhouette again.', 'https://www.youtube.com/embed/v1srv3N-XJQ?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(10, '10', 'To Your Eternity Ep-10 \"New Family\"', 'Although Fushi is defeated by the Nokkers, Gugu manages to save him thanks to the fire he can through thanks to Booze\'s mask. Afterwards, Gugu returns to the restaurant and teaches Fushi how to cook. Gugu then makes peace with his guardian. Four years later, Fushi becomes glad that he is growing up after his human form grew facial hair. The Beholders reappears to Fushi, telling him to abandon the area but he denied as Fushi claims he needs Gugu.', 'https://www.youtube.com/embed/D5jfDtHczbU?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(11, '11', 'To Your Eternity Ep-11 \"Gift From the Past\"', 'Owing to her sixteenth birthday coming soon, Rean is conflicted about being forced to marry another man as four years ago a drunken Gugu confessed his love for her. Gugu does not remember such a moment due to the extensive amount of alcohol in his stomach. He is then visited by his long-lost elder brother who wants to apologize for abandoning him, but he is rejected. Nevertheless, he gives back Rean\'s ring which Gugu treasured much to Rean\'s shock. As the birthday party comes, Fushi and Gugu visit Rean\'s mansion. Fushi suggests Gugu confessing his longtime romantic feelings for Rean, but he feels inferior to her due to his low status. However, Rean approaches Gugu and both remember the origins of the ring and how Gugu was wounded. The Nokkers then attack the two teenagers and Fushi is informed of this by the Beholder.', 'https://www.youtube.com/embed/mveYGsA4c80?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(12, '12', 'To Your Eternity Ep-12 \"Awakening\"', 'Fushi is able to protect all civilians from the Nokkers but is unable to defeat them and the area is destroyed. Now wounded, the immortal being returns to his late villager\'s youthful form. Gugu and Rean go to the area but it collapses and the former uses his extraordinary strength to protect the latter. This causes Fushi to realize Gugu dies as he takes his appearance and uses all his strength to defeat the enemy which escapes to the West. As she recovers, Rean tries to find Gugu but Fushi takes on his form and lies that Gugu will not ', 'https://www.youtube.com/embed/TTWviWOaP24?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(13, '13', 'To Your Eternity Ep-13 \"Fushi\'s Journey\" & \"Aspiring to Go Higher\"', 'Fushi contacts the Beholder and realizes that he had forgotten young March\'s existence in the previous battle. Pioran finds him and decides to accompany him on his journey despite Fushi\'s early disapproval. The two are captured into an island filled with prisoners and Fushi embarks on a quest to save his good friend and traveling companion Pioran.', 'https://www.youtube.com/embed/maYz1rbQfmg?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(14, '14', 'To Your Eternity Ep-14 \"Jananda, Island of Freedom\"', 'Fushi enters into a competition between criminals to achieve his goal of freeing Pioran. In the first round, Fushi is not able to enter the arena after being tackled by a man. As most warriors kill each other, Fushi enters the arena when there is only one surviving. Fushi\'s regeneration skills when being attacked by his enemy result in him becoming the winner when his rival is scared. In the second round, Fushi keeps reluctant about killing and transforms into Parona to win. However, Fushi is shocked at the this, having realized that Parona must be dead if he became her.', 'https://www.youtube.com/embed/3pUQM4up7r0?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(15, '15', 'To Your Eternity Ep-15 \"A Girl Named Tonari\"', 'As Fushi wonders what caused Parona\'s death, a thirteen-year-old girl named Tonari claims that there are good people who become criminals, having had the same experience when remembering her father. Fushi tries to rescue Pioran but the Beholder is against this and tells him to follow Parona\'s legacy. In the next round, Fushi proves his superiority as a fighter but his rival refuses to give up. This causes the arena to attack the two fighters, disappointed by the lack of deaths. After the battle from which Fushi is once again victorious, he clashes with Tonari as he does not approve the idea of killing. As the villagers become antagonistic with Fushi, the Nokkers appear. This causes a temporary team up between all villagers and Fushi. As the Nokkers are defeated, Fushi is glad to have recovered his memories of March and befriends Tonari for having to tried help him, despite their previous clashes.', 'https://www.youtube.com/embed/6wIcKv6DzkE?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(16, '16', 'To Your Eternity Ep-16 \"The Children\'s Dreams\"', 'Fushi continues bonding with the children though Tonari keeps her ambitions hidden, having been shocked by her father\'s death years ago in the arena. In March\'s form, Fushi is able to sneak in Pioran\'s prison and tells her he will save her. In the final match, Fushi faces none other than Hayase who confesses that it was she who had killed Parona. This enrages Fushi, but he is defeated by her after injecting a drug in his neck that leaves him unconscious, therefore making her the new leader of Janada Island; freely capable of doing what she desires with Fushi.', 'https://www.youtube.com/embed/lPomUAlsUe4?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(17, '17', 'To Your Eternity Ep-17 \"The Defeated\"', 'A victorious and thoroughly obsessed Hayase informs the shocked crowd by fabricating a tale about how she was the one who had \"discovered\" Fushi four years ago in a feral state and that it was from her that he learned human speech as well as autonomy and sentience. She then entrusts the future of Janada Island to Tonari, while she takes Fushi to a hidden bedroom where she begins to rape him. Tonari, Mia, Oopa and the rest come to try and save their immortal friend, but end up being caught by the guards who now follow Hayase. Hayase orders her and her friends to leave or die at her hands. She is surprised and impressed when Fushi, who threatens to kill her at knife-point, tells her that the boy she was assaulting was just an empty shell, having managed to transfer his conscious sense of self into the form of the mole he had attained earlier. He agrees to allow Hayase to do with him as she pleases, only if she releases Tonari and the others. Hayase agrees to his terms and allows Tonari, her friends, and the Jananda children to escape by ship but drugs them unconscious. Tonari awakes and sets off by rowboat to rescue Fushi, who was also drugged and is being held prisoner in a well for Hayase to continue where she had left off.', 'https://www.youtube.com/embed/fVkFSDj_qQs?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(18, '18', 'To Your Eternity Ep-18 \"To Continue On\"', 'Tonari attempts to rescue Fushi from the clutches Hayase alone, but ends up encountering some Nokkers. As the mindless monsters attack all of Janada Island, she and Fushi are forced to fight the monsters who have possessed the dead. Most of Tonari\'s friends try to help their friend but are killed in the process.', 'https://www.youtube.com/embed/yo3EhoEVTZY?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(19, '19', 'To Your Eternity Ep-19 \"Wandering Rage\"', 'The Nokkers now have power over the deceased, and Tonari and Fushi have difficulty in recognizing their dearest departed friends. As Fushi cowers in sorrow and fear, an obsessed Hayase forces him to make decision to save Tonari from the warrior woman\'s lethal wrath to \"negotiate\" with Fushi, who promises to hear her out but only if she releases Tonari. Owing to her unusual resistance to certain toxins and poisons, Tonari prepares herself to die and take Hayase with her. However, Fushi saves both her and Hayase from the burning pit of Nokker-infected corpses and drugs the latter with her own morning glory poison. Fushi then takes Hayase unchained in a boat and bids farewell to Tonari who is now ruling the place. As Hayase wakes up, she proclaims Fushi her devoted love towards him which angers him. Fushi leaves her the boat alone while he takes another one in order to return to civilization.', 'https://www.youtube.com/embed/XjAw2qhbDBY?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(20, '20', 'To Your Eternity Ep-20 \"Echoes\"', 'Although initially hesitant believing that his presence will only cause her pain and eventually death, Fushi decides to rejoin Pioran even though the Beholder warns him that she is nearing death from old age, which Fushi does not understand. Over the span of several months Pioran develops irrational mood swings from dementia to Fushi\'s confusion, though he continues to care for her. Elsewhere, a kind man enters his home hut on a beach, only be attacked by the very person, Hayase, he had saved extends its unusually powerful right arm and presumably kills him, which shows that she has merged with the Nokker that she had let escape her and had later wounded her earlier.\r\n\r\nOne day, the dying Pioran speaks to the Beholder and asks him to have herself be reborn as something that will help Fushi on his everlasting journey. As she enters Paradise, the Beholder takes a hold her vital essence through a white orb that looks similar to Fushi\'s true form. Fushi finds Pioran\'s dead body and mourns his lifelong friend and cherished companion, and how happy he had been with her. Decades later, with nothing for the Beholder to report about his creation, a middle-aged Fushi laughs crazily as he has just overpowered and killed another pursuing Nokker.', 'https://www.youtube.com/embed/NhVYvv73kZA?list=PLxSscENEp7JgxV0mDkMNtd0TczCCvLb-N', 1),
(21, '01', 'Takt Op. Destiny Ep-01 \"Conduct -Creed-\"', 'Conductor Takt Asahina is heading to New York with Anna Schneider and a Musicart called Destiny, but Takt’s obsession to play music attracts D2s, delaying their progress. They encounter a nest of D2s in a remote industrial facility, apparently controlled by a hidden force which impedes their progress. Takt plays an upright piano to draw it out, and they discover that it is a Black Stone D2, attracted by Black Night Siderites. Takt calls forth Destiny and a titanic battles ensues, but she manages to destroy the stone and they continue on their journey.', 'https://www.youtube.com/embed/6gDYjyN1BaY?list=PLxSscENEp7Jgp5-czzbc2NrWBg5g2qz7n', 5),
(22, '02', 'Takt Op. Destiny Ep-02 \"Music -Reincarnation-\"', 'A flashback shows Takt Asahina father\'s funeral and the period later when he was living with Anna and her sister Cosette. For years, Takt spent his time tirelessly mastering the piano in his garage, glossing over his own well being and health, concerning both Anna and Cosette. A month-and-a-half before the events of the first episode, Takt discovers Cosette skillfuly playing the piano, shocking him. She wants him to play publicly at the Symphonica event to be held in town the following month, but he initially refuses. Two weeks before the events of the first episode, the event rolls around, and Takt does show himself in public for the first time. Cosette joins him in a four hands rendition of popular uptempo music, delighting the crowd. However, the town is suddenly attacked by D2s. Takt\'s right arm is damaged and Cosette is fatally injured. As she dies, however, Cosette\'s white stone pendant reincarnates her as Destiny. As she transforms, Destiny bites off Takt\'s damaged arm and presents him with a golden conducting baton.', 'https://www.youtube.com/embed/qPg0l-nJcnc?list=PLxSscENEp7Jgp5-czzbc2NrWBg5g2qz7n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `series_info`
--

CREATE TABLE `series_info` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `ep_count` int(10) DEFAULT NULL,
  `poster` varchar(500) DEFAULT NULL,
  `trailer` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series_info`
--

INSERT INTO `series_info` (`id`, `name`, `type`, `genre`, `description`, `ep_count`, `poster`, `trailer`) VALUES
(1, 'To Your Eternity', 'Animation', 'Fantasy', 'The story is about an immortal being, Fushi, who takes on multiple forms, including that of an abandoned white-haired village boy and his white wolf in order to stimulate as it learns what it is to be truly human. Fushi, who initially is an emotionless stone but gradually develops a self and personality as a result of interacting with humans, young and old alike.', 20, 'https://i.ibb.co/wJ89MXN/MV5-BMWI4-Mj-Nj-Njgt-NWE0-MC00-NThm-LTg0-Yz-Et-MDZl-ODA5-NTJh-Yz-Y3-Xk-Ey-Xk-Fqc-Gde-QXVy-Mzgx-ODM4.jpg', 'https://www.youtube.com/embed/g_fEWbAT2Dc'),
(2, 'Moriarty the Patriot', 'Animation', 'Crime,Mystery', 'William James Moriarty lives as a regular noble while also being a consultant for the common folk to solve their problems. However, deep inside him lies a desire to destroy the current structure that dominates British society. In the late 19th century, the British Empire has become a global power. Due to the strict class stratification, the average citizen has little chance of successfully rising up to the top, where the despicable nobility rules over them all.\nWilliam James Moriarty was the formidable enemy as well as a friend for detective Sherlock Holmes.\n', 24, 'https://i.ibb.co/rwTBzFZ/6382714.webp', 'https://www.youtube.com/embed/fN0et_oxumc'),
(4, 'One Punch Man', 'Animation', 'Action,Comedy,Supernatural', 'It tells the story of Saitama, a superhero who can defeat any opponent with a single punch but seeks to find a worthy opponent after growing bored by a lack of challenge due to his overwhelming strength.', 24, 'https://i.ibb.co/KVkzhdn/OPM.jpg', 'https://www.youtube.com/embed/Poo5lqoWSGw'),
(5, 'Takt Op. Destiny', 'Animation', 'Music,Science fiction,Action', 'Takt Op is set in the year 2047, a future world where music cannot be played freely because it attracts monsters called \"D2s.\" These monsters were produced by a black meteorite containing Black Night Siderites which fell from the sky years ago.', 12, 'https://i.ibb.co/F3GzLhd/E-H6-B5f-Xs-Aohk5-S.jpg', 'https://www.youtube.com/embed/BREAtLIvYks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode_info`
--
ALTER TABLE `episode_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_episode_FK` (`from_series`);

--
-- Indexes for table `series_info`
--
ALTER TABLE `series_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `episode_info`
--
ALTER TABLE `episode_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `series_info`
--
ALTER TABLE `series_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `episode_info`
--
ALTER TABLE `episode_info`
  ADD CONSTRAINT `series_episode_FK` FOREIGN KEY (`from_series`) REFERENCES `series_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
