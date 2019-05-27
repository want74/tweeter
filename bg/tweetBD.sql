-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2019 г., 15:43
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tweetBD`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tweet`
--

CREATE TABLE `tweet` (
  `title` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `text` varchar(355) NOT NULL,
  `logo` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tweet`
--

INSERT INTO `tweet` (`title`, `img`, `text`, `logo`, `id`) VALUES
('ss', 'gymch4b5.jpg', 'От идеи до выхода на рынок: самый подробный чеклист по запуску компании', 'post1.jpg', 23),
('lorem ipsum dolor sit ametasd ', 'habr.jpg', 'lorem ipsum dolor sit ametasd kpslkm', 'post2.png', 27);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
