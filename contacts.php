<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Как связаться с нами</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="style/_navigation.css">
  <link rel="stylesheet" href="style/slick.css">
  <link rel="stylesheet" href="style/animate.css">
  <link rel="stylesheet" href="style/_footer.css">
  <link rel="stylesheet" href="style/general.css">
  <link rel="stylesheet" href="style/_footer.css">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/contacts.css">

  
  
</head>
<body>
  

<nav>
	<div class="nav__content">
		<a href="/">
			<div class="nav__logo">
			</div>
		</a>
		<div class="nav__radius">
			<button class="nav__menu">
				<div></div>
				<div></div>
			</button>
		</div>

		<div class="nav__links-container">
			<ul class="nav__links">
				<li class="nav__link"><a href="projects.php"> Работы  </a></li>
				<li class="nav__link"><a href="about.php"> О нас    </a></li>
				<li class="nav__link"><a href="services.php"> Услуги   </a></li>
				<li class="nav__link nav__link--active"><a href="contacts.php"> Контакты </a></li>
				<li class="nav__link nav__phone"><a href="tel:+7 952 246-76-79">+7 952 246-76-79</a></li>
			</ul>
		</div>
	</div>
</nav>


  


<section class="contacts contacts__properties">
    <div class="container">
        <div class="title__name">
        Контакты
        </div>

        <div class="contacts__inner">
            <div class="contacts__left">
                <div class="contact__left-item">
                <div class="contact__title">email</div>
                <a class="contact__link" href="mailto:info@terexov.agency">info@terexov.agency</a>
                </div>

                <div class="contact__left-item">
                <div class="contact__title">Телефон</div>
                <a class="contact__link" href="tel:+79522467679">8 (952) 246-76-79 </a>
                </div>

                <div class="contact__left-item">
                <div class="contact__title">Адрес</div>
                <a class="contact__link" href="#">Россия, г. Санкт-Петербург, проспект Медиков, 3</a>
                </div>
            </div>

            <div class="contacts__right">
                
                <form class="contacts__form">
                    <div class="input__wrapper">
                    <input class="contacts__input" type="text" autocomplete="off" required>
                    <label for="name" class="input__label">
                    <span class="input__placeholder">Ваше имя</span>
                    </label>
                    </div>
                    <div class="input__wrapper">
                    <input class="contacts__input" type="text" required>
                    <label class="input__label">
                    <span class="input__placeholder">Почта</span>
                    </label>
                    </div>
                    <div class="input__wrapper">
                    <input class="contacts__input" type="text" required>
                    <label class="input__label">
                    <span class="input__placeholder">Телефон</span>
                    </label>
                    </div>
                </form>
                <div class="contacts__prompt-wrapper">
                    <p class="contacts__prompt">Как с вами связаться?</p>
                    <ul class="contacts__link-wrapper">
                    <li class="contact__link-item">
                    <a href="#" class="contacts__prompt-link wow fadeInDown" data-wow-delay=".7s" data-wow-offset="150">Телефон</a>
                    </li>
                    <li class="contact__link-item">
                    <a href="#" class="contacts__prompt-link wow fadeInDown" data-wow-delay=".9s" data-wow-offset="150">Почта </a>
                     </li>                    
                    <li class="contact__link-item">
                    <a href="#" class="contacts__prompt-link wow fadeInDown" data-wow-delay="1.1s" data-wow-offset="150">WhatsApp</a>
                     </li>
                    <li class="contact__link-item">
                    <a href="#" class="contacts__prompt-link wow fadeInDown" data-wow-delay="1.3s" data-wow-offset="150">Telegram</a>
                     </li>
                    <li class="contact__link-item">
                    <a href="#" class="contacts__prompt-link wow fadeInDown" data-wow-delay="1.5s" data-wow-offset="150">Viber</a>
                     </li>
                    </ul>
                </div>

                <button class="contacts__btn price__link">Отправить</button>
            </div>
        </div>
    </div>
    
</section>


   <?php require "templates/_footer.php"; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="https://use.fontawesome.com/1295a37c31.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>