<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <link rel="stylesheet" href="fonts/font-awesome/css/all.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    
    <link rel="stylesheet" href="js/carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="js/carousel/dist/assets/owl.theme.default.min.css">



    <link rel="stylesheet" type="text/css" href="css/style.css">


    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>

<body>
    <?php require "templates/_navigation.php"; ?>
    <main>
        <div class="first-block">



            <div class="text">

            </div>
            <div id="particles-js">

            </div>




        </div>

        <div class="second-block">
            <div class="container">
                <div class="row heading">
                    <div class="col-12">
                        <h2>ЧТО МЫ УМЕЕМ</h2>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="servises">

                </div>
                <div class="owl-carousel">

                    <div>
                        <a href="#">
                            <div class="slide-box">
                               <img src="img/web.png">
                                <h3>Сайты</h3>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="slide-box">
                            <img src="img/app.png">
                                <h3>Приложения</h3>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="slide-box">
                            <img src="img/brending.jpg">
                                <h3>Брендинг</h3>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="slide-box">
                            <img src="img/shop.png">
                                <h3>Магазины</h3>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="slide-box">
                            <img src="img/present.png">
                                <h3>Презентации</h3>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="slide-box">
                            <img src="img/dec.png">
                                <h3>Декстопные приложения</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div>
                        <a href="#">
                            <div class="slide-box">
                            <img src="img/dec.png">
                                <h3>Seo</h3>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="slide-box">
                            <img src="img/dec.png">
                                <h3>Фотографии</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <i class="fa fa-fighter-jet" ></i>
        <i class="fas fa-phone fa-rotate-90"></i>
        <i class="fa fa-telegram" ></i>
    </main> 
    <script src="js/jquery-mousewheel-master/jquery.mousewheel.js"></script>
    <script src="js/carousel/dist/owl.carousel.min.js"></script>
    <script>
    var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:0,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },            
        960:{
            items:2
        },
        1200:{
            items:3
        },
        1700:{
            items:4
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('prev.owl');
    } else {
        
        owl.trigger('next.owl');
    }
    e.preventDefault();
});
</script>
    <script src="js/particles.js-master/particles.js"></script>
    <script src="js/js.js"></script>
</body>

</html>