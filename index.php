<!DOCTYPE html>
<html>

<head>

    <title>Digital-агентство terexov</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style/_navigation.css">
    <link rel="stylesheet" href="style/slick.css">
    <link rel="stylesheet" href="style/animate.css">
    <link rel="stylesheet" href="style/_footer.css">
    <link rel="stylesheet" href="style/general.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/contacts-form.css">
    <link rel="stylesheet" href="style/main__slider.css">

</head>

<body>
    <?php require "templates/_navigation.php"; ?>

    <section class="main">
        <div id="live-bg" class="live-bg__wrapper">
            <div class="live-bg"></div>
            <div class="container-main">

                <div class="main__inner">
                    <div class="main__section-top">
                        <div class="main__top main__top1">
                            <div class="main__title-wrapper">
                                <div class="general__category general__category-main">Digital-агентство</div>
                                <div class="title__name wow slideInLeft" data-wow-offset="250">
                                    Разрабатываем <span>сайты</span>, <span>мобильные приложения</span>, <span>дизайн</span> и помогаем бизнесу развиваться
                                </div>
                            </div>
                            <div class="general__button-wrapper">
                                <a class="general__button">
                                    Узнать стоимость
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main__bottom main__bottom1  fadeInDown" data-wow-delay=".5s" data-wow-offset="100" wow>

                        <div class="main__links">
                            <a href="#" class="main__link-item">
                                <img class="main__link-img" src="images/viber.svg" alt="">
                            </a>
                            <a href="#" class="main__link-item">
                                <img class="main__link-img" src="images/whatsapp.svg" alt="">
                            </a>
                            <a href="#" class="main__link-item">
                                <img class="main__link-img" src="images/telegram.svg" alt="">
                            </a>
                        </div>
                        <div class="main__links-wrapper">
                            <div class="main__link-container">
                                <a href="" class="main__link">Наше портфолио</a>
                                <p class="main__link-descr">Реализовали более 100 проектов</p>
                            </div>

                            <div class="main__link-container">
                                <a href="" class="main__link">Услуги</a>
                                <p class="main__link-descr">Предложим лучшее решение для вас</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-main">

                <div class="main__section-top">
                    <div class="main__top main__top2">
                        <div class="general__category general__category-main">Наши работы</div>
                        <div class="title__name">
                            Мы погружаемся в бизнес клиента, хорошо понимаем его цели, берем на себя целые направления
                        </div>
                    </div>
                </div>
                <div class="main__examples">
                    <div class="main__examples-container">
                        <div class="main__example-item wow slideInDown" data-wow-delay="0.1s" data-wow-offset="100">
                            <img src="images/content/sapc.png" alt="">
                            <p class="main__example-descr">Личный сайт А.А.</p>
                        </div>

                        <div class="main__example-item wow slideInDown" data-wow-delay="0.3s" data-wow-offset="100">
                            <img src="images/content/cdek.png" alt="">
                            <p class="main__example-descr">Сайт для СДЕК</p>
                        </div>

                        <div class="main__example-item wow slideInDown" data-wow-delay="0.5s" data-wow-offset="100">
                            <img src="images/content/ersmpc.png" alt="">
                            <p class="main__example-descr">ЭраСтройМонтаж</p>
                        </div>

                    </div>

                    <div class="mainlink__all-wrapper">
                        <a href="projects.php" class="mainlink__all">Посмотреть все работы</a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="main__about">
        <div class="container">
            <div class="main__top main__top-about">
                <div class="main-about__left">
                    <div class="general__category general__category-main">
                        О нас
                    </div>
                    <div class="title__name title__name-main">
                        Увеличиваем продажи и анализируем результаты
                    </div>
                    <a href="#" class="main__about-link">Больше о нас</a>
                </div>

                <div class="main-about__right">
                    Клиенты обращаются к нам за экспертизой и за производственными мощностями. Они просят помочь в создании нового или серьезной переработке существующего продукта. К нам обращаются, когда нуждаются в команде, которая поможет развить проект, ориентируясь на историю взаимодействия пользователей с ним и на задачах бизнеса. Нас выбирают, когда нужно увеличить прибыль. Cправляемся с задачами которые не под силу основной массе подрядчиков.
                </div>
            </div>
        </div>

        <?php require "templates/_main__slider.php"; ?>
    </section>

    <section class="statistic">
        <div class="container">
            <div class="statistic__inner">
                <div class="statistic__row-top">
                    <div class="statistic__item wow fadeInLeft" data-wow-delay=".1s" data-wow-offset="100">
                        <div class="statistic__number-wrapper statistic__number-big">
                            <span>></span>
                            <div class="statistic__number count">100</div>
                        </div>
                        <span class="statistic__descr statistic__descr-big">Проектов</span>
                    </div>

                    <div class="statistic__item wow fadeInLeft" data-wow-delay=".3s" data-wow-offset="100">
                        <div class="statistic__number-wrapper statistic__number-small">
                            <div class="statistic__number count">4</div>
                        </div>
                        <span class="statistic__descr statistic__descr-small">место в среднем по выдаче сайтов</span>
                    </div>

                    <div class="statistic__item wow fadeInLeft" data-wow-delay=".5s" data-wow-offset="100">
                        <div class="statistic__number-wrapper">
                            <div class="statistic__number count">215</div>
                        </div>
                        <span class="statistic__descr">% в среднем увеличение прибыли</span>
                    </div>
                </div>
                <div class="statistic__row-bottom">
                    <div class="statistic__item wow fadeInLeft" data-wow-delay=".7s" data-wow-offset="100">
                        <div class="statistic__number-wrapper statistic__number-small">
                            <div class="statistic__number count">5</div>
                        </div>
                        <span class="statistic__descr statistic__descr-it">Лет опыта в IT-индустрии</span>
                    </div>

                    <div class="statistic__item wow fadeInLeft" data-wow-delay=".9s" data-wow-offset="100">
                        <div class="statistic__number-wrapper statistic__number-small">
                            <div class="statistic__number count">11</div>
                        </div>
                        <span class="statistic__descr">КРУТЫХ СОТРУДНИКОВ</span>
                    </div>

                    <div class="statistic__item wow fadeInLeft" data-wow-delay="1.1s" data-wow-offset="100">
                        <div class="statistic__number-wrapper">
                            <div class="statistic__number count">3350</div>
                        </div>
                        <span class="statistic__descr statistic__descr-last">Страниц в ТОП-5</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php require "templates/_contacts-form.php"; ?>

    <?php require "templates/_footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/three.r119.min.js"></script>
    <script src="js/vanta.halo.min.js"></script>

    <script>
        if (window.innerWidth > 910) {
            VANTA.HALO({
                el: "#live-bg",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                backgroundColor: 0x22272A,
                amplitudeFactor: 1.70,
                size: 0.6,
                xOffset: 0.17,
                yOffset: 0.2,
            })
        }
    </script>
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>

</body>

</html>