<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>О студии</title>
  <link rel="icon" href="images\content\favicon.svg">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
  <link rel="stylesheet" href="style/_navigation.css">
  <link rel="stylesheet" href="style/slick.css">
  <link rel="stylesheet" href="style/general.css">
  <link rel="stylesheet" href="style/about.css">  
  <link rel="stylesheet" href="style/_footer.css">
  <link rel="stylesheet" href="style/contacts-form.css">
  <link rel="stylesheet" href="style/main__slider.css">
</head>
<body>
  

<nav>
	<div class="nav__content">
		<a href="/">
        <div class="nav__logo">
				<img src="images/content/logo.svg" alt="">
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
				<li class="nav__link nav__link--active"><a href="about.php"> О нас    </a></li>
				<li class="nav__link"><a href="services.php"> Услуги   </a></li>
				<li class="nav__link"><a href="contacts.php"> Контакты </a></li>
				<li class="nav__link nav__phone"><a href="tel:+7 952 246-76-79">+7 952 246-76-79</a></li>
			</ul>
		</div>
	</div>
</nav>



    <section class="about _anim-items">
        <div class="container-about">
            <div class="about__inner">
                <div class="container">
                <div class="general__top _active">
                    <div class="general__category">О студии</div>
                    <div class="title__name">TEREXOV</div>
                </div>
                </div>

                <div class="about__top-wrapper">

                    <div class="about__slider-wrapper">
                    <div class="about__slider">
                        <div class="about__slider-img">
                            <img src="images/content/slider-1.jpg" alt="">
                        </div>

                        <div class="about__slider-img">
                            <img src="images/content/slider-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="about__slider-buttons">
                        <button class="about__arrow about__arrow-left" data-news-pos="0" type="button"><img src="images/arrow-left.svg" alt=""></button>
                        <button class="about__arrow about__arrow-right" data-news-pos="1" type="button"><img src="images/arrow-right.svg" alt=""></button>
                    </div>
                    </div>
                    <div class="about__text-right">
                    <div class="about__text-wrapper">
                    <p class="about__text">
                    IT-компания из Санкт-Петербугра, с 2015 года разрабатываем мобильные и веб-приложения для клиентов из России и Европы.
                    </p>
                    <p class="about__text">
                    Мы берём в работу разные проекты и не концентрируемся на отдельных отраслях. Наша сильная сторона — аналитика на старте проекта, которая позволяет разрабатывать хорошие приложения для любой сферы бизнеса.
                    </p>
                    </div>

                    <div class="about__textstat">
                        <div class="about__textstat-item">
                            <div class="about__textstat-num">11</div>
                            <div class="about__textstat-descr">специалистов</div>
                        </div>

                        <div class="about__textstat-item">
                            <div class="about__textstat-num">>100</div>
                            <div class="about__textstat-descr">успешных проектов</div>
                        </div>

                        <div class="about__textstat-item">
                            <div class="about__textstat-num">с 2015</div>
                            <div class="about__textstat-descr">года работаем в Санкт-Петербурге</div>
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="aboutus">
        <div class="container">
            <div class="aboutus__inner">
                <div class="about__title">
                    <div class="whatcanwedo__title-inner">
                    Почему мы?
                    </div>
                </div>
                <div class="aboutus__right">
                    <div class="aboutus__item">
                        <div class="aboutus__item-name">Честность и открытость</div>
                        <div class="aboutus__item-descr">Мы не продаём и не уговариваем работать с нами. Если посчитаем, что приложение не решит задачу — скажем об этом.</div>
                    </div>

                    <div class="aboutus__item">
                        <div class="aboutus__item-name">Полное погружение в бизнес</div>
                        <div class="aboutus__item-descr">Проанализируем бизнес, найдем лучшее решение и поможем решить задачу.</div>
                    </div>

                    <div class="aboutus__item">
                        <div class="aboutus__item-name">Вместе с клиентом отвечаем за результат</div>
                        <div class="aboutus__item-descr">terexov — надежный партнёр, а не очередной подрядчик. Нам важно создавать работающие продукты и помогать компаниям стать ближе к клиентам, выстраиваем долгие отношения.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about__autoslider">
    <?php require "templates/_main__slider.php"; ?>
    </section>


   <section class="whatcanwedo">
        <div class="container">
            <div class="whatcanwedo__inner">
                <div class="whatcanwedo__title">
                    <div class="whatcanwedo__title-inner">
                    Что Мы можем сделать для вашего бизнеса?
                    </div>
                </div>
                <div class="whatcanwedo__right">
                    <div class="whatcanwedo__item">
                        <div class="whatcanwedo__num">01  /</div>
                        <div class="whatcanwedo__descr">Создаём код, который будет актуален больше 10 лет</div>
                    </div>

                    <div class="whatcanwedo__item">
                        <div class="whatcanwedo__num">02  /</div>
                        <div class="whatcanwedo__descr">Соберём сильную команду для многолетней работы над продуктом</div>
                    </div>

                    <div class="whatcanwedo__item">
                        <div class="whatcanwedo__num">03  /</div>
                        <div class="whatcanwedo__descr">
                        Разработаем сложное решение с обширной бизнес-логикой, интеграциями, высокой нагрузкой
                        </div>
                    </div>

                    <div class="whatcanwedo__item">
                        <div class="whatcanwedo__num">04  /</div>
                        <div class="whatcanwedo__descr">Увеличим продажи, привлечём клиентов</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutproject">
        <div class="container">
            <div class="aboutproject__inner">
                <div class="about__title">
                Под каждый проект уделяем 5-15 человек
                </div>
                <div class="aboutproject__box">
                    <div class="aboutproject__item">
                    Руководитель проекта
                    </div>

                    <div class="aboutproject__item">
                    Backend-разработчик
                    </div>

                    <div class="aboutproject__item">
                    Backend-разработчик
                    </div>

                    <div class="aboutproject__item">
                    Frontend-разработчик
                    </div>

                    <div class="aboutproject__item">
                    Frontend-разработчик
                    </div>

                    <div class="aboutproject__item">
                    Тестировщик
                    </div>

                    <div class="aboutproject__item">
                    Дизайнер
                    </div>

                    <div class="aboutproject__item">
                    Дизайнер
                    </div>

                    <div class="aboutproject__item">
                    Аналитик
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section class="aboutbanner">
        <div class="container-fluid">
            <div class="aboutbanner__inner">
                <div class="aboutbanner__img">
                    <img src="images/content/aboutbanner.jpg" alt="">
                </div>
                <div class="container">
                <a class="aboutbanner__text" href="#">Санкт-Петербург, проспект Медиков, 3</a>
                </div>
            </div>
        </div>
    </section> 

  
    <?php require "templates/_contacts-form.php"; ?>


    <?php require "templates/_footer.php"; ?>

    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/1295a37c31.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>