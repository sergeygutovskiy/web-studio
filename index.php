<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

	<link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

	<nav>
		<div class="nav__content">
			<div class="nav__logo">
				<a href="">terexov.</a>
			</div>

			<button class="nav__menu">
				<div></div>
				<div></div>
			</button>

			<ul class="nav__links">
				<li class="nav__link"><a href="">о нас</a></li>
				<li class="nav__link"><a href="">услуги</a></li>
				<li class="nav__link"><a href="">цены</a></li>
				<li class="nav__link"><a href="">контакты</a></li>
			</ul>
		</div>
	</nav>

	<section class="header">
		<div class="main-container header__content">
			<div class="header__left">
				<div class="header__title">
					<span>digital</span> <br>
					<span>агенство</span>
				</div>
			
				<button class="header__button">оставить заявку</button>
			</div>
		</div>	
	
		<div class="main-container header__footer">
			<a href="" class="header__prices-link">узнать стоимость</a>
		</div>
	</section>

	<section class="services">
		<div class="main-container services__content">
			<ul class="services__items">
				<li class="services__item">сайты</li>
				<li class="services__item">приложения</li>
				<li class="services__item">брендинг</li>
				<li class="services__item">продвижение</li>
				<li class="services__item">презентации</li>
			</ul>
		</div>
	</section>

	<section class="contacts">
		<div class="main-container contacts__content">
			<h2>хотите сотрудничать с нами?</h2>

			<div class="contacts__containers">
				<div class="contacts__left">
					<h3>свяжитесь с нами:</h3>

					<a class="contacts__link contacts__link--email" href="">info@terexov.agency</a>
					<a class="contacts__link contacts__link--phone" href="">+7 952 246-76-79 </a>				
					<ul class="contacts__social-links">
						<li class="contacts__social-link"><a href="">Telegram</a></li>	
						<li class="contacts__social-link"><a href="">WhatsApp</a></li>	
						<li class="contacts__social-link"><a href="">Viber</a></li>	
					</ul>

					<div class="contacts__info">
						сейчас <span id="contacts__current-time"></span>, мы с вами сразу свяжемся 
					</div>
				</div>
			
				<div class="contacts__right">
					<h3>или оставьте заявку:</h3>
					<form class="contacts__form">
						<input class="contacts__input" type="text" placeholder="Имя">
						<input class="contacts__input" type="text" placeholder="Почта">
						<input class="contacts__input" type="text" placeholder="Телефон">
						<button class="contacts__button">отправить</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<script>
		$(document).ready(function () {
			let date = new Date();

			var minutes = date.getMinutes();
			var hour = date.getHours();

			if (hour    < 10) hour    = "0" + String(hour);
			if (minutes < 10) minutes = "0" + String(minutes);
			$("#contacts__current-time").text(hour + ":" + minutes);
		});
	</script>
</body>
</html>
