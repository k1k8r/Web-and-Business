<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$bdName = 'base_progect';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$bdName;charset=$charset";

$opt = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

// ! запись в БД
if (isset($_POST['name_calc']) && isset($_POST['income_calc'])) {
  $name = $_POST['name_calc'];
  $income = $_POST['income_calc'];

  $pdo = new PDO($dsn, $user, $pass, $opt);

  $sql = "INSERT INTO `users` (`name`, `income`) VALUES ('$name', '$income')";
  $pdo->exec($sql);
}

if (isset($_POST['name_stock']) && isset($_POST['cardCVV_stock'])) {
  $name = $_POST['name_stock'];
  $cardCVV = $_POST['cardCVV_stock'];
  $pdo = new PDO($dsn, $user, $pass, $opt);

  $sql = "SELECT name FROM users WHERE `name` = ? and `cardCVV` = ?";
  $result = $pdo->prepare($sql);
  $result->execute([$name, $cardCVV]);

  print_r($result->fetchAll());
}
