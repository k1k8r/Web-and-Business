<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="build/css/style.css">
	<title>LevoИнвестCalc</title>
</head>

<body>
	<?php include 'src/php/base.php'; ?>

	<header class="header">
		<div class="header-container">
			<a href="#">
				<div class="header__logo">
					<img src="build/img/header/header-logo.svg" alt="Logo">
					<div class="header__info">
						<h1 class="header__title">LevoИнвестCalc</h1>
						<p class="header__subtitle">Калькулятор кредита <br> для Наших задач</p>
					</div>
				</div>
			</a>
			<nav class="header__menu">
				<ul class="header__list">
					<li><a href="#" class="header__link">Наша цель</a></li>
					<li><a href="#" class="header__link">Контракт</a></li>
					<li><a href="#" class="header__link">Культисты</a></li>
				</ul>
				<button class="header__button">Войти</button>
			</nav>
		</div>
	</header>

	<main class="purpose">
		<div class="purpose-container">
			<div class="purpose-template-1">
				<p class="purpose__description">Вы обожглись на кредитах, не в силах расчитать процент <br>самостоятельно?
				</p>
				<p class="purpose__description">Вам очень нужны деньги, но вы не хотите опять продавать <br>почку товарища?
				</p>
				<h3 class="purpose__title">Специальное предложение</h3>
				<p class="purpose__description">Только сегодня и только сейчас мы готовы <br>обсчитать вас так, что вы и не
					догадаетесь, как <br>попали в долговую Кабалу!
				</p>
			</div>
			<div class="purpose-template-2">
				<form class="purpose__form" action="#">
					<div class="purpose-wrapper">
						<div class="purpose-block">
							<input class="purpose__input" type="text" placeholder="ФИО">
							<input class="purpose__input" type="number" placeholder="Сумма кредита">
						</div>
						<div class="purpose-block">
							<input class="purpose__input" type="number" placeholder="Доход">
							<input class="purpose__input" type="text" placeholder="Цель кредита">
						</div>
					</div>
					<div class="purpose__send"><button class="purpose__button">Рассчитать кабалу</button></div>
				</form>

			</div>
		</div>
	</main>

	<section class="calc">
		<div class="calc-container">
			<h1 class="calc__title">Калькулятор рабства</h1>
			<div class="calc-block">
				<div class="calc-wrapper">
					<div class="calc-block-2">
						<input id="userName" type="text" class="calc__input" placeholder="ФИО">
						<input id="userWage" type="number" class="calc__input" placeholder="Доход">
						<input id="kreditValue" type="number" class="calc__input" placeholder="Сумма кредита">
						<input id="mounthCount" type="number" class="calc__input" placeholder="Кол-во месяцев">
					</div>
					<div class="calc-block-2">
						<input id="userRegion" type="text" class="calc__input" placeholder="Регион">
						<input id="kreditGoal" type="text" class="calc__input" placeholder="Цель кредита">
						<input id="kreditRate" type="number" class="calc__input" placeholder="Ставка">
						<input id="isKreditAgree" type="number" class="calc__input" placeholder="Ваш кредит: ">
					</div>
				</div>
				<div class="calc-wrapper">
					<div class="calc-send"><button id="get" class="calc__button">Рассчет вашей кабалы</button></div>
					<div class="calc-send"><button id="clear" class="calc__button">Обнулить вашу кабалу</button></div>
				</div>
			</div>
			<!-- //! Одобрено / Не одобрено -->
			<div class="calc-block__result">

			</div>
		</div>
	</section>

	<section class="stock">
		<div class="stock-container">
			<h1 class="stock__title">Временная акция</h1>
			<div class="stock__timer">
				<script src="//megatimer.ru/get/9bfa0002d92cc30c22fb50095b44ec55.js"></script>
			</div>
			<h2 class="stock__description">Оставьте данные своей карты(с обоих сторон)<br> и мы уменьшим ваш процент</h2>
			<form class="stock__form" action="#">
				<div class="stock-wrapper">
					<div class="stock-block">
						<input type="text" class="stock__input" placeholder="ФИО">
						<input type="number" class="stock__input" placeholder="Действительна до">
					</div>
					<div class="stock-block">
						<input type="number" class="stock__input" placeholder="Номер карты">
						<input type="number" class="stock__input" placeholder="Код CVV">
					</div>
				</div>
				<div class="stock-send"><button class="stock__button">Отдать евреям</button></div>
			</form>
		</div>
	</section>

	<footer class="footer">
		<div class="footer-container">
			<h2 class="footer__workers">Front-end разработка:<br>Задонский Андрей<br>
				Группа ПИ-31</h2>
			<h2 class="footer__workers">Back-end разработка:<br>Лаврухин Артем<br> Группа ПИ-31</h2>
			<h2 class="footer__workers">SEO и продвижение:<br>Гулай Александр<br> Группа ИБА-34</h2>
			<h2 class="footer__workers">Аналитика:<br>Попов Павел<br> Группа ИБТ-31</h2>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="build/js/script.js"></script>

</body>

</html>