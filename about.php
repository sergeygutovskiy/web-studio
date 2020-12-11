<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>О студии</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="style/_navigation.css">
  <link rel="stylesheet" href="style/slick.css">
  <link rel="stylesheet" href="style/general.css">
  <link rel="stylesheet" href="style/about.css">
  <link rel="stylesheet" href="style/_footer.css">
  <link rel="stylesheet" href="style/main.css">
  
</head>
<body>
  
<?php require "templates/_navigation.php"; ?>

    <section class="about">
        <div class="container-about">
            <div class="about__inner">
                <div class="container">
                <div class="general__top">
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
                    <div class="about__text">
                    Клиенты обращаются к нам за экспертизой и за производственными мощностями. Они просят помочь в создании нового или серьезной переработке существующего продукта. К нам обращаются, когда нуждаются в команде, которая поможет развить проект, ориентируясь на историю взаимодействия пользователей с ним и на задачах бизнеса.  Нас выбирают, когда нужно увеличить прибыль. Cправляемся с задачами которые не под силу основной массе подрядчиков.
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <section class="aboutwork">
        <div class="container">
            <div class="general__top general__top-about">
                <div class="general__category">О студии</div>
                <div class="title__name">Как мы работаем?</div>
            </div>
            <div class="aboutwork__inner">
               
                <div class="aboutwork__row">
                    <div class="aboutwork__item">
                        <div class="aboutwork__num">01</div>
                        <span class="aboutwork__descr">ОБСУЖДЕНИЕ РАБОТ</span>
                    </div>
                    <div class="aboutwork__item">
                        <div class="aboutwork__num">02</div>
                        <span class="aboutwork__descr">ПРОЕКТИРОВАНИЕ СТРУКТУРЫ</span>
                    </div>
                    <div class="aboutwork__item">
                        <div class="aboutwork__num">03</div>
                        <span class="aboutwork__descr">ВИЗУАЛИЗАЦИЯ ПРОТОТИПА</span>
                    </div>
                </div>
                
                <div class="aboutwork__row">
                    <div class="aboutwork__item">
                        <div class="aboutwork__num">04</div>
                        <span class="aboutwork__descr">ВЁРСТКА СТРАНИЦ</span>
                    </div>
                    <div class="aboutwork__item">
                        <div class="aboutwork__num">05</div>
                        <span class="aboutwork__descr">ДОБАВЛЕНИЕ КОНТЕНТА</span>
                    </div>
                    <div class="aboutwork__item">
                        <div class="aboutwork__num">06</div>
                        <span class="aboutwork__descr aboutwork__descr-last">ТЕСТИРОВАНИЕ 
                            И ЗАПУСК В РЕЛИЗ</span>
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

    <?php require "templates/_footer.php"; ?>

    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/1295a37c31.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/slick.min.js"></script>
</body>
</html>