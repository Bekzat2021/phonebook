-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2020 г., 10:50
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phone_book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abonents`
--

CREATE TABLE `abonents` (
  `abonent_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `abonents`
--

INSERT INTO `abonents` (`abonent_id`, `name`, `lastname`) VALUES
(1, 'Sarene', 'Pavlasek'),
(2, 'Nicola', 'Thackston'),
(3, 'Aloysia', 'Jankovic'),
(4, 'Janina', 'Keesman'),
(5, 'Petr', 'Gridley'),
(6, 'Priscella', 'Bensusan'),
(7, 'Glyn', 'Granham'),
(8, 'Nada', 'Hathway'),
(9, 'Arleyne', 'Fassbindler'),
(10, 'Madalyn', 'McCurtain');

-- --------------------------------------------------------

--
-- Структура таблицы `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `city` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `house` varchar(10) NOT NULL,
  `addresses_abonent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `addresses`
--

INSERT INTO `addresses` (`address_id`, `city`, `street`, `house`, `addresses_abonent_id`) VALUES
(1, 'Paço', 'Kropf', '87', 7),
(2, 'Kadupinang', 'Montana', '94', 9),
(3, 'Calachuchi', 'Sundown', '64', 2),
(4, 'Songculan', 'Moose', '81', 9),
(5, 'Farasān', '5th', '25', 4),
(6, 'Xiangyang', 'Spaight', '21', 5),
(7, 'Vila Nova', 'Pepper Wood', '94', 10),
(8, 'Bugko', 'Kennedy', '7', 1),
(9, 'Dīla', 'David', '31', 2),
(10, 'Pulilan', 'Monument', '18', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `phone`
--

CREATE TABLE `phone` (
  `idphone` int(11) NOT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `phone_abonent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `phone`
--

INSERT INTO `phone` (`idphone`, `phone_number`, `phone_abonent_id`) VALUES
(1, '+86 (493) 861-8372', 7),
(2, '+359 (308) 180-1038', 1),
(3, '+380 (116) 938-8003', 10),
(4, '+62 (409) 674-3152', 8),
(5, '+86 (352) 564-3394', 4),
(6, '+62 (312) 521-6537', 6),
(7, '+54 (158) 662-9097', 9),
(8, '+221 (370) 102-6772', 4),
(9, '+62 (786) 487-4264', 8),
(10, '+994 (202) 169-4363', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abonents`
--
ALTER TABLE `abonents`
  ADD PRIMARY KEY (`abonent_id`);

--
-- Индексы таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `fk_addresses_abonents1_idx` (`addresses_abonent_id`);

--
-- Индексы таблицы `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`idphone`),
  ADD KEY `fk_phone_abonents_idx` (`phone_abonent_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abonents`
--
ALTER TABLE `abonents`
  MODIFY `abonent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `phone`
--
ALTER TABLE `phone`
  MODIFY `idphone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `fk_addresses_abonents1` FOREIGN KEY (`addresses_abonent_id`) REFERENCES `abonents` (`abonent_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `fk_phone_abonents` FOREIGN KEY (`phone_abonent_id`) REFERENCES `abonents` (`abonent_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
