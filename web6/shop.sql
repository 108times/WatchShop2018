-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 03 2019 г., 20:45
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `Id` int(11) NOT NULL,
  `Name` text CHARACTER SET utf8 NOT NULL,
  `Image` text CHARACTER SET utf8 NOT NULL,
  `Description` text CHARACTER SET utf8 NOT NULL,
  `Text` text CHARACTER SET utf8 NOT NULL,
  `Cost` double NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`Id`, `Name`, `Image`, `Description`, `Text`, `Cost`, `Count`) VALUES
(1, 'Rolex Day-Date 40', 'Watches\\rolex.jpg', 'By operating its own exclusive foundry, Rolex has the unrivalled ability to cast the highest quality 18 ct gold alloys. According to the proportion of silver, copper, platinum or palladium added, different types of 18 ct gold are obtained: yellow, pink or white. They are made with only the purest metals and meticulously inspected in an in-house laboratory with state-of-the-art equipment, before the gold is formed and shaped with the same painstaking attention to quality. Rolex\'s commitment to excellence begins at the source.', 'The dial is the distinctive face of a Rolex watch, the feature most responsible for its identity and readability. Characterised by hour markers fashioned from 18 ct gold to prevent tarnishing, every Rolex dial is designed and manufactured in-house, largely by hand to ensure perfection.\r\n\r\nThe design, development and production of Rolex bracelets and clasps, as well as the stringent tests they face, involve advanced high technology. And, as with all the components of the watch, aesthetic controls by the human eye guarantee impeccable beauty. The President bracelet, with its semi-circular three piece links, was created in 1956 for the launch of the Oyster Perpetual Day-Date. It represents the ultimate in refinement and comfort and is always made of carefully selected precious metals.', 9000, 23),
(2, 'CCCP Kashalot 2 Automatic BLack', 'Watches\\CCCP.jpg', 'Having served the Russian Navy for over 25 years, the Akula Submarines continue to make their presence felt in the international political-military arena', 'Mainly developed in the Pacific region, the nuclear powered Kashalot Class submarines stand for the power and supremacy. The name Kashalot, meaning Shark in Russian, also complements this Soviet ballistic missile submarine very well.\r\n\r\nBuilt by the Amur Shipbuilding Plant Joint Stock Company, these submarines were initially commissioned between 1986 abd 1992 with enhancements over the years. The first, Viper, was commissioned in 1995, the second, Nerpa, in December 2000 and the third, Gepard, in August 2001.', 199.99, 10),
(3, 'Suunto Ambit3 Peak (HR)', 'Watches\\suunto.jpg', 'The Suunto, Ambit3 Peak (HR) series features a polyamide 50mm case, with a fixed bezel and a scratch resistant mineral crystal.', 'This beautiful wristwatch, powered by quartz movement supporting: hour, minute, second, calendar, altimeter, compass, gps navigation, weather, alarm, heart rate monitor, bluetooth functions.\r\n\r\nThis watch has a water resistance of up to 330 feet/100 meters, suitable for recreational surfing, swimming, snorkeling, sailing and water sports.', 281.98, 10),
(4, 'Xeric Halograph Chrono Sapphire Silver Navy', 'Watches\\xeric-halograph.jpg', 'Xeric watches are designed in California and produced on an artisanal scale, making high-end mechanical features accessible to a broad cross-section of horological enthusiasts.  Help ensure you\'re wearing the most interesting watch in the room!', 'Love the Halograph Automatic but prefer chronographs?  Introducing the Halograph Chrono Sapphire, powered by a Quartz Japanese Miyota movement. This features the same eye-popping design for this quartz iteration of the Xeric Halograph.\r\n\r\nThe Halograph Chrono looks complicated but is actually quite easy to read. As the halo hands float over the time display arcs, they encircle the numbers to show the time. The inner arcs display the hours, and the outer arcs display the minutes.', 299.99, 7),
(5, 'Xeric Soloscope Automatic Gunmetal Limited Edition', 'Watches\\xeric-halograph.jpg', 'The Soloscope Automatic is mechanical, so the motion of your wrist is all it needs for power. This personal time machine will be right there on your wrist longer than all the forced upgrades of your gadgets. At Xeric Watches, we are taking a step back to classic mechanical watches, affordably priced, so you can move forward in your individuality. We believe our creations focus on what really matters when you\'re the one with most striking watch in the room.', 'We live in a time when everyone has the same stuff, racing for the latest phone, fastest laptop, and most advanced gadget. Every single one of these devices will soon be obsolete. Your watch, on the other hand, is a chance to reflect your value of striking design and timeless mechanics. Let the latest and boldest mechanical watch by Xeric remind you—and everyone around you—that you are making your own mark. It\'s time to go solo!\r\n\r\nThe Soloscope Automatic is mechanical, so the motion of your wrist is all it needs for power. This personal time machine will be right there on your wrist longer than all the forced upgrades of your gadgets. At Xeric Watches, we are taking a step back to classic mechanical watches, affordably priced, so you can move forward in your individuality. We believe our creations focus on what really matters when you\'re the one with most striking watch in the room.\r\n\r\nThe Soloscope Automatic separates display from mechanics. It has a single hand, fusing hours and minutes in a distinctive but simple display balancing function and style. The hand encircles the hour and points to the minutes. The other half of the face exposes twin balance wheels and the mechanics that powers the watch in reaction to motion of your wrist.\r\n\r\nA watch isn\'t complete without a great leather strap. We\'ve proudly teamed up with the historic American Tannery Horween for some undeniably awesome time belts.', 800, 6),
(6, 'Xeric Evergraph Automatic SS Limited Edition Silver', 'Watches\\xeric-evergraph-auto-silver-ss.jpg', 'The Evergraph Automatic from Xeric Watches is a time machine that simultaneously lives in the past, present, and future. Inspired by the architectural designs of the city of San Francisco, the Evergraph maintains a timeless design that could be worn in any generation. And with its Miyota automatic movement, the Evergraph comes in at an amazing price point.', 'The spirit of the Evergraph comes from the city of San Francisco. The watch parallels the city itself, contrasting the world of yesteryear while also being in sync with the modern core of technology & design. Xeric wanted to imagine what a Xeric watch might have looked like if it were designed a hundred years ago, yet also maintain an aesthetic that will look just as timeless a hundred years into the future.\r\n\r\nThe Evergraph Automatic features Xeric’s signature time display with hemicycle dials, double-sided hands, and a spirographic second disc. Each watch is individually numbered in a limited edition run of 999 pieces per color. Xeric uses the finest American-made leather from the historic tannery Horween. All Horween leather is processed at their location on the corner of Elston and Ashland in Chicago, Illinois.', 299.99, 12),
(7, 'Thomas Earnshaw Westminster Skeleton Hand Wind Black', 'Watches\\Thomas-Earnshaw-Westminster-Automatic.jpg', 'The watch features a mechanical hand-winding skeleton movement which is perhaps the truest form of original watchmaking when the wind up of the timepiece was necessary to keep good timing condition for the wearer.', 'This timepiece takes its name from George Stephenson (1781-1848) who was a pioneering railway engineer and inventor of the \'Rocket\', the most famous early railway locomotive.\r\n\r\nThe watch features a mechanical hand-winding skeleton movement which is perhaps the truest form of original watchmaking when the wind up of the timepiece was necessary to keep good timing condition for the wearer.\r\n\r\nWith a guilloche finished outer dial, the inner dial is exposed and overlaid with a wheel construction rotating as the seconds display. Matching hour and minute indicators, blued screws and the inner workings of the mechanical movement create a Victorian inspired Industrial design with the Roman Hour indexes each individually brushed and hand applied – that is still effortless to read from, while still being utterly unique and compelling to view.', 800, 6),
(8, 'Nixon Time Teller Gun Green Oxyde Leather', 'Watches\\Nixon-Timeteller-Leather-Oxyde.jpg', 'An original Nixon design, The Time Teller is a tried and true crowd favorite. The Time Teller\'s clean lines cut through cloudy philosophy, while its simple, high concept design keeps things precise.', '', 59.91, 17),
(9, 'Casio Vintage Digital Black Gold', 'Watches\\casio-vintage-digital.jpg', 'Straight from the Casio Vintage Collection comes a timepiece that never goes out of style. The A159WGEA-1VT combines style with features Casio is known for such as an LED light and a 1/100th second stopwatch. This timepiece is the perfect complement to any outfit.', 'Professional and sleek this Casio timepiece is a must-have for your collection. Stylish with a classic presentation this watch boasts a fashionable vintage case and digital dial. The watch compliments the case with a quality stainless steel band and is powered by a highly-accurate quartz movement. An unforgettable watch for your unforgettable occasion, this sharp timepiece is sure to impress. Additional features include chronograph alarm and water resistance.', 65, 14),
(10, 'Mondaine Evo Automatic Day Date 40MM', 'Watches\\Mondaine.jpg', 'Presenting the EVOlution of a great idea. The EVO features a case made from 100% recycled steel. What\'s more, it encases the reliable quality of a Swiss mechanical movement. Beneath a curved mineral crystal view the bold applied hour markers, wide hour and minute stick hands, and the famous red seconds hand. The official logo of the Swiss Federal Railways is discreetly printed on the dial beneath the Mondaine name.', 'MADE IN SWITZERLAND\r\n\r\nPresenting the EVOlution of a great idea. The EVO features a case made from 100% recycled steel. What\'s more, it encases the reliable quality of a Swiss mechanical movement. Beneath a curved mineral crystal view the bold applied hour markers, wide hour and minute stick hands, and the famous red seconds hand. The official logo of the Swiss Federal Railways is discreetly printed on the dial beneath the Mondaine name.\r\n\r\nGenerous both in terms of design and functionality, the Automatic of the Mondaine Official Swiss Railways Watch unites tradition and design.The rounded case made of polished stainless steel is 40 mm in diameter. The transparent case back allows to see the movement which will delight all watch enthusiasts. A discretely integrated yet easy-to-see date and day display is just one of the features of the model..', 725, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Text` text NOT NULL,
  `Rate` double NOT NULL,
  `Post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`Id`, `Name`, `Text`, `Rate`, `Post_date`) VALUES
(1, 'Shadow_inquisitor123', 'Отличный товар! Копил на эти часы 10 лет. Ни капли не жалею. Правда.', 10, '2018-11-24'),
(2, 'AngryPucKpIckEr444', 'Отлично! Просто отлично! Это невероятно!', 10, '2018-10-25'),
(3, 'ИвановИван99', 'Отличный товар! Соответствует описанию! Ставлю лайк!', 10, '2018-10-24'),
(4, 'FbiNeverSleeps11', 'Очень хороший товар. Рекомендую.', 10, '2018-08-25'),
(5, 'Hunter_991234', 'То что нужно! Отличный товар! Именно то что мне нужно!', 10, '2018-10-22');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `namee` text CHARACTER SET utf8 NOT NULL,
  `Password` text CHARACTER SET utf8 NOT NULL,
  `bag` varchar(255) DEFAULT NULL,
  `Email` text CHARACTER SET utf8 NOT NULL,
  `Adress` text CHARACTER SET utf8 NOT NULL,
  `Birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `namee`, `Password`, `bag`, `Email`, `Adress`, `Birth_date`) VALUES
(1, 'Вася', '12345V', NULL, 'VasyqPhph@mail.ru', 'Проспект Абая 123А, кв.12', '1989-12-03'),
(2, 'Иван', '654321I', NULL, 'IvanVerrry@gmail.com', 'Проспект Сейфулина 123А, кв 56', '1989-06-06'),
(15, 'trewq', '123456', NULL, 'a2@mail.ru', 'Rome, Itlay', '0000-00-00'),
(19, 'teqwe', '123456', NULL, 'awkwe2@mail.ru', 'Rome, Itlay', '0000-00-00'),
(25, '', '', NULL, '', '', '0000-00-00'),
(26, '2332vv', '123456', NULL, 'ee232@rq.yt', '32', '0000-00-00'),
(27, 'Vasya', '123456', NULL, 'vasiliy@trembling.com', 'Rome, Itlay', '0000-00-00'),
(28, 'Vasya', '123456', NULL, 'vasiliy@trembling.com', 'Rome, Itlay', '0000-00-00'),
(29, 'Vasya3333', '2323232', NULL, '123123', '123123', '0000-00-00'),
(30, 'yuiiii', '123333', NULL, '5343', 'Rome, Itlay', '0000-00-00'),
(31, '323', '23', NULL, 'qwe', 'qwe', '0000-00-00'),
(32, 'qwe', '123456', NULL, 'qwe', 'Rome, Itlay', '0000-00-00'),
(33, 'asd', 'asd', NULL, 'asd', 'asd', '0000-00-00'),
(34, '33', '33', NULL, '33', '33', '0000-00-00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
