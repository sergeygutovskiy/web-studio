<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Наши работы</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="style/_navigation.css">
  <link rel="stylesheet" href="style/last.css">
  <link rel="stylesheet" href="style/general.css">
  <link rel="stylesheet" href="style/_footer.css">
  <link rel="stylesheet" href="style/main.css">
  
  
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
				<li class="nav__link nav__link--active"><a href="last.php"> Работы  </a></li>
				<li class="nav__link"><a href="about.php"> О нас    </a></li>
				<li class="nav__link"><a href="services.php"> Услуги   </a></li>
				<li class="nav__link"><a href="contacts.php"> Контакты </a></li>
				<li class="nav__link nav__phone"><a href=""> <i class="fas fa-phone"></i></a></li>
			</ul>
		</div>
	</div>
</nav>



<section class="lastprojects">
    <div class="container">
    <div class="container-last">
        <div class="lastprojects__inner">
            <div class="lastprojects__top">
                <div class="general__category">Работы</div>
                <div class="title__name lastprojects-title__name">Последние проекты</div>
            </div>
            <div class="lastprojects__container">
                <div class="lastprojects__item">
                    <div class="lastprojects__left">
                        <div class="lastprojects__title">
                        ЭраСтройМонтаж
                        </div>
                        <div class="lastprojects__subtitle">Website + Design + SEO</div>

                        <a href="" class="lastprojects__link">Посмотреть проект</a>
                    </div>
                    <div class="lastprojects__right">
                        <div class="lastprojects__img-wrapper">
                            <img class="lastprojects__img lastprojects__img-mob lastprojects__img-phone"  src="images/content/ersmmob.png" alt="">
                            <img class="lastprojects__img lastprojects__img-desc" src="images/content/ersmpc.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="lastprojects__item">
                    <div class="lastprojects__left">
                        <div class="lastprojects__title">
                        Личный сайт А. Сотниковой
                        </div>
                        <div class="lastprojects__subtitle">Website + Design </div>

                        <a href="" class="lastprojects__link">Посмотреть проект</a>
                    </div>
                    <div class="lastprojects__right">
                        <div class="lastprojects__img-wrapper">
                        <img class="lastprojects__img lastprojects__img-mob lastprojects__img-phone"  src="images/content/samob.png" alt="">
                            <img class="lastprojects__img lastprojects__img-desc" src="images/content/sapc.png" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="lastprojects__item">
                    <div class="lastprojects__left">
                        <div class="lastprojects__title">
                        СДЕК
                        </div>
                        <div class="lastprojects__subtitle">Website + Design </div>

                        <a href="" class="lastprojects__link">Посмотреть проект</a>
                    </div>
                    <div class="lastprojects__right">
                        <div class="lastprojects__img-wrapper">
                        <img class="lastprojects__img lastprojects__img-mob lastprojects__img-phone"  src="images/content/cdekmob.png" alt="">
                            <img class="lastprojects__img lastprojects__img-desc" src="images/content/cdek.png" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="lastprojects__item">
                    <div class="lastprojects__left">
                        <div class="lastprojects__title">
                        РКМ
                        </div>
                        <div class="lastprojects__subtitle">Website + Design </div>

                        <a href="" class="lastprojects__link">Посмотреть проект</a>
                    </div>
                    <div class="lastprojects__right">
                        <div class="lastprojects__img-wrapper">
                        <img class="lastprojects__img lastprojects__img-mob lastprojects__img-phone"  src="images/content/rkmmob.png" alt="">
                            <img class="lastprojects__img lastprojects__img-desc" src="images/content/rkm.png" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
</section>

<?php require "templates/_footer.php"; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>