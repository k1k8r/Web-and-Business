<?php
// ! вывод ошибки
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// ! инициализация БД
$host = 'localhost';
$user = 'root';
$pass = '';
$bdName = 'base_progect';

// ! создание подключения к БД
$link = mysqli_connect($host, $user, $pass, $bdName)
  or die(mysqli_error($link));

// ! отправка запроса
mysqli_query($link, "SET NAMES 'utf8'");

// ! запись запроса
$get_users_query = "SELECT * FROM users";
$insert_user_query = "INSERT INTO users SET name='Гена'";

// ! передача запроса в переменную
$result = mysqli_query($link, $get_users_query) or die(mysqli_error($link));

// ! отправка запроса на добавление пользователя
mysqli_query($link, $insert_user_query);

// var_dump($result);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
// var_dump($data);
