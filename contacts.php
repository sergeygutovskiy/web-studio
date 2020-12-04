<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Как связаться с нами</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="style/_navigation.css">
  <link rel="stylesheet" href="style/slick.css">
  <link rel="stylesheet" href="style/_footer.css">
  <link rel="stylesheet" href="style/general.css">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/contacts.css">

  
  
</head>
<body>
  
<?php require "templates/_navigation.php"; ?>
  


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
                    <div class="contacts__link-wrapper">
                    <a href="#" class="contacts__prompt-link">Телефон</a>
                    <a href="#" class="contacts__prompt-link">Почта </a>
                    <a href="#" class="contacts__prompt-link">WhatsApp</a>
                    <a href="#" class="contacts__prompt-link">Telegram</a>
                    <a href="#" class="contacts__prompt-link">Viber</a>
                    </div>
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
  <script src="js/main.js"></script>
</body>
</html>