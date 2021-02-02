<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Проект РКМ студии terexov</title>
    <link rel="icon" href="\images\content\favicon.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/font-awesome/css/all.css">
    <link rel="stylesheet" href="/style/_navigation.css">
    <link rel="stylesheet" href="/style/info.css">
    <link rel="stylesheet" href="/style/_footer.css">
    <link rel="stylesheet" href="/style/general.css">


</head>

<body>

    <?php require "../templates/_navigation.php"; ?>

    <section class="info">
        <div class="container">
            <div class="info__inner">
                <div class="general__top">
                    <div class="info__title">РКМ</div>
                    <div class="info__subtitle">Website + Design </div>
                    <a href="https://po-rkm.ru" class="info__link">po-rkm.ru</a>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="container-fluid">
                <div class="info__banner">
                    <img src="/images/content/projects2x/main-rkm.png" alt="">
                </div>
            </div>

            <div class="infotask">
                <div class="infotask__title">Главная</div>
                <div class="infotask__text">Кратко. Четко. Все по делу. Удобный и понятный интерфейс помогает найти все, что надо. На главной есть удобная форма заказа, всегда можно перейти в интересующий вас раздел, быстро узнать стоимость работ</div>
            </div>

            <div class="container-fluid">
                <div class="info__banner">
                    <img src="/images/content/projects2x/catalog-rkm.png" alt="">
                </div>
            </div>

            <div class="infotask">
                <div class="infotask__title">Услуги</div>
                <div class="infotask__text">Разделили больше 100 услуг на 8 разных категорий для удобства пользователей, нарисовали иконки на каждую категорию работ.</div>
            </div>

            <div class="container-fluid">
                <div class="info__banner">
                    <img src="/images/content/projects2x/gallery-rkm.png" alt="">
                </div>
            </div>


          
      



            <div class="info__links">
                <a class="goback" href="/projects.php">Ко всем проектам</a>
            </div>
        </div>
    </section>

    <?php require "../templates/_footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="https://use.fontawesome.com/1295a37c31.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>