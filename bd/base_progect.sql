-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 16 2021 г., 15:58
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `base_progect`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `pass` int(10) NOT NULL,
  `name` varchar(20) NOT NULL COMMENT 'ФИО',
  `address` varchar(50) NOT NULL COMMENT 'адрес',
  `tel` int(11) NOT NULL COMMENT 'телефон',
  `passport` int(10) NOT NULL COMMENT 'номер паспорта',
  `purpose` varchar(20) NOT NULL COMMENT 'цель кредита',
  `sum` int(10) DEFAULT NULL COMMENT 'запрашиваемая сумма',
  `term` int(10) DEFAULT NULL COMMENT 'срок кредита',
  `income` int(11) DEFAULT NULL COMMENT 'ежемесячный доход',
  `cardDate` date DEFAULT NULL,
  `cardCVV` int(3) NOT NULL,
  `cardNum` int(16) NOT NULL,
  `percent` int(10) NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
