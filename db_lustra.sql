-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 12 2017 г., 23:32
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_lustra`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_id_product` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_count` int(11) NOT NULL,
  `cart_datetime` datetime NOT NULL,
  `cart_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `type` varchar(80) NOT NULL,
  `brand` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `type`, `brand`) VALUES
(1, 'lustra', 'Люстры для кухни'),
(2, 'lustra', 'Люстры в прихожую'),
(3, 'lustra', 'Люстры в спальню'),
(4, 'lustra', 'Люстры в гостиную'),
(5, 'lustra', 'Люстры в ванную'),
(6, 'lustra', 'Детские люстры'),
(7, 'lustra', 'Люстры для зала'),
(8, 'lustra', 'Другое'),
(9, 'lamps', 'Светодиодные лампы'),
(10, 'lamps', 'Энергосберегающие лампы'),
(11, 'lamps', 'Галогенные лампы'),
(12, 'lamps', 'Рефлекторные лампы'),
(13, 'lamps', 'Металлогалогенные лампы'),
(14, 'inners', 'Светодиодные светильники'),
(15, 'inners', 'Светодиодные люстры'),
(16, 'outs', 'Светодиодные прожекторы'),
(17, 'outs', 'Алюминиевые пылевлагозащищенные светильники'),
(18, 'outs', 'Уличные фонари'),
(19, 'outs', 'Садово-парковые светильники'),
(20, 'decorative', 'Светильники подсветки картин и зеркал'),
(21, 'decorative', 'Светодиодные полосы'),
(22, 'deskLamps', 'Настольные Лампы'),
(23, 'komponents', 'Пульт дистанционного управления'),
(24, 'aksesuars', 'Патроны'),
(25, 'tehnicOsn', 'Коннекторы'),
(26, 'other', 'Звонки'),
(27, 'other', 'Датчики'),
(28, 'other', 'Датчики Light Control'),
(29, 'other', 'Вытяжные вентиляторы');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`) VALUES
(1, 'Вышла новая люстра...', 'Новая люстра сделано из дерево в форме куба. Имеющийся цвета белый, серый, черный.', '2017-01-10'),
(2, 'У нас новая акция!', 'Если закажете товар до 2000 сомов, то доставка по городу Бишкек Бесплатно!', '2017-01-25'),
(3, 'Новый раздел на сайте!', 'Мы открыли новый раздел на сайте, который называется Портфолио. Вы можете посетить этот раздел прямо сейчас!', '2017-01-20');

-- --------------------------------------------------------

--
-- Структура таблицы `table_products`
--

CREATE TABLE `table_products` (
  `product_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `seo_words` text NOT NULL,
  `seo_description` text NOT NULL,
  `mini_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mini_features` text NOT NULL,
  `features` text NOT NULL,
  `datetime` datetime NOT NULL,
  `new` int(11) NOT NULL DEFAULT '0',
  `leader` int(11) NOT NULL,
  `sale` int(11) NOT NULL DEFAULT '0',
  `visible` int(11) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '0',
  `type_tovara` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `votes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_products`
--

INSERT INTO `table_products` (`product_id`, `title`, `price`, `brand`, `seo_words`, `seo_description`, `mini_description`, `image`, `description`, `mini_features`, `features`, `datetime`, `new`, `leader`, `sale`, `visible`, `count`, `type_tovara`, `brand_id`, `vote`, `votes`) VALUES
(1, 'Люстра в прихожую 1', 750, 'Люстры в прихожую', '', '', '', 'prihoj1.jpg', '', '', '', '2017-01-25 00:00:00', 1, 0, 0, 1, 0, 'lustra', 2, 0, 0),
(2, 'Люстра в прихожую 2', 750, 'Люстры в прихожую', '', '', '', 'prihoj2.jpg', '', '', '', '2016-04-05 12:17:23', 0, 0, 0, 1, 0, 'lustra', 2, 2, 1),
(3, 'Люстра в прихожую 3', 750, 'Люстры в прихожую', '', '', '', 'prihoj3.jpg', '', '', '', '2015-10-12 15:40:45', 0, 0, 0, 0, 0, 'lustra', 2, 1, 0),
(4, 'Люстра в прихожую 4', 450, 'Люстры в прихожую', '', '', '', 'prihoj4.jpg', '', '', '', '2016-05-05 12:17:23', 0, 0, 0, 0, 0, 'lustra', 2, 0, 0),
(5, 'Люстра в прихожую 5', 650, 'Люстры в прихожую', '', '', '', 'prihoj5.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 1, 1, 0, 'lustra', 2, 0, 0),
(6, 'Детская люстра 1', 850, 'Детские люстры', '', '', '', 'kids1.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 3, 'lustra', 6, 0, 0),
(7, 'Детская люстра 2', 950, 'Детские люстры', '', '', '', 'kids2.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 2, 'lustra', 6, 0, 0),
(8, 'Люстра в прихожую 6', 1200, 'Люстры в прихожую', '', '', '', 'prihoj6.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 1, 0, 3, 'lustra', 2, 0, 0),
(9, 'Люстра в прихожую 7', 1200, 'Люстры в прихожую', '', '', '', 'prihoj7.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 0, 0, 'lustra', 2, 0, 0),
(10, 'Люстра в прихожую 8', 1200, 'Люстры в прихожую', '', '', '', 'prihoj8.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 1, 0, 1, 'lustra', 2, 0, 0),
(11, 'Люстра для кухни 1', 750, 'Люстры для кухни', '', '', '', 'kitchen1.jpg', '', '', '', '2016-06-04 16:23:00', 0, 1, 0, 1, 1, 'lustra', 1, 0, 0),
(12, 'Люстра для кухни 2', 2300, 'Люстры для кухни', '', '', '', 'kitchen2.jpg', '', '', '', '2016-06-04 16:23:00', 0, 1, 0, 1, 27, 'lustra', 1, 0, 0),
(13, 'Люстра для кухни 3', 850, 'Люстры для кухни', '', '', '', 'kitchen3.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lustra', 1, 0, 0),
(14, 'Люстра для кухни 4', 1200, 'Люстры для кухни', '', '', '', 'kitchen4.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 1, 1, 0, 'lustra', 1, 0, 0),
(15, 'Люстра для кухни 5', 1200, 'Люстры для кухни', '', '', '', 'kitchen5.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lustra', 1, 0, 0),
(17, 'Люстра для кухни 6', 1200, 'Люстры для кухни', '', '', '', 'kitchen6.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 0, 'lustra', 1, 0, 0),
(18, 'Люстра кружка 1', 500, 'Люстры для кухни', '', '', '', 'kitchen12.jpg', '', '', '', '2016-06-04 16:23:00', 1, 0, 0, 1, 0, 'lustra', 1, 0, 0),
(19, 'Люстра кружка 2', 500, 'Люстры для кухни', '', '', '', 'kitchen13.jpg', '', '', '', '2016-06-04 16:23:00', 1, 0, 0, 1, 0, 'lustra', 1, 0, 0),
(50, 'Светодиодная лампа 1', 200, 'Светодиодные лампы', '', '', '', 'led1.1.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 0, 'lamps', 9, 0, 0),
(51, 'Светодиодная лампа 2', 200, 'Светодиодные лампы', '', '', '', 'led1.2.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 0, 'lamps', 9, 0, 0),
(52, 'Светодиодная лампа 3', 200, 'Светодиодные лампы', '', '', '', 'led1.3.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 0, 'lamps', 9, 0, 0),
(53, 'Светодиодная лампа 4', 200, 'Светодиодные лампы', '', '', '', 'led1.4.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lamps', 9, 0, 0),
(54, 'Люстра в прихожую 9', 150, 'Люстры в прихожую', '', '', '', 'prihoj9.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 1, 1, 0, 'lustra', 2, 0, 0),
(55, 'Люстра в прихожую 10', 350, 'Люстры в прихожую', '', '', '', 'prihoj10.jpg', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 3, 'lustra', 2, 0, 0),
(56, 'Люстра в спальню 1', 3500, 'Люстры в спальню', '', '', '', 's2.jpg', '', '', '', '2016-06-04 16:23:00', 0, 1, 0, 1, 0, 'lustra', 1, 0, 0),
(57, 'Люстра в спальню 2', 1800, 'Люстры в спальню', '', '', '', 's4.jpg', '', '', '', '2016-06-04 16:23:00', 0, 1, 0, 1, 0, 'lustra', 1, 0, 0),
(58, 'Люстра в гостиную 1', 1200, 'Люстры в гостиную', '', '', '', 's3.jpg', '', '', '', '2016-06-04 16:23:00', 0, 1, 0, 1, 0, 'lustra', 1, 0, 0),
(60, 'Люстра для зала ', 8500, 'Люстры для зала', '', '', '', 'z1.jpg', '', '', '', '2016-06-04 16:23:00', 0, 1, 0, 1, 0, 'lustra', 1, 0, 0),
(61, 'Люстра в гостиную 2', 4500, 'Люстры в гостиную', '', '', '', 'g2.jpg', '', '', '', '2016-06-04 16:23:00', 0, 1, 0, 1, 0, 'lustra', 1, 0, 0),
(62, 'Другое', 850, 'Другое', '', '', '', 'o1.jpg', '', '', '', '2016-06-04 16:23:00', 1, 0, 0, 1, 0, 'lustra', 1, 0, 0),
(63, 'Другое 2', 1500, 'Другое', '', '', '', 'o2.jpg', '', '', '', '2016-06-04 16:23:00', 1, 0, 0, 1, 0, 'lustra', 1, 0, 0),
(64, 'Другое 3', 1500, 'Другое', '', '', '', 'o3.jpg', '', '', '', '2016-06-04 16:23:00', 0, 1, 0, 1, 0, 'lustra', 1, 0, 0),
(65, 'Светодиодная лампа 5', 200, 'Светодиодные лампы', '', '', '', 'led3.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lamps', 9, 0, 0),
(66, 'Светодиодная лампа 6', 230, 'Светодиодные лампы', '', '', '', 'led4.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lamps', 9, 0, 0),
(67, 'Светодиодная лампа 7', 180, 'Светодиодные лампы', '', '', '', 'led5.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lamps', 9, 0, 0),
(68, 'Светодиодная лампа 8', 150, 'Светодиодные лампы', '', '', '', 'led6.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lamps', 9, 0, 0),
(69, 'Светодиодная лампа 9', 220, 'Светодиодные лампы', '', '', '', 'led7.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lamps', 9, 0, 0),
(70, 'Светодиодная лампа 10', 250, 'Светодиодные лампы', '', '', '', 'led9.png', '', '', '', '2016-06-04 16:23:00', 0, 0, 0, 1, 1, 'lamps', 9, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `table_products`
--
ALTER TABLE `table_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;