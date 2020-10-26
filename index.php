<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

	<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<link rel="stylesheet" href="fonts/font-awesome/css/all.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/_navigation.css">
	<link rel="stylesheet" type="text/css" href="css/_footer.css">
</head>

<body>
	<?php require "templates/_navigation.php"; ?>

	<section class="header">
		<div class="main-container header__content">
			<div class="header__left">
				<div class="header__title">
					<span>digital</span> <br>
					<span>агентство</span>
				</div>
			
				<button class="header__button">оставить заявку</button>
			</div>
		</div>	
	
		<div class="main-container header__footer">
			<a href="" class="header__prices-link">узнать стоимость</a>
		</div>
	</section>

	<section class="services">
		<div class="services__content">
			<ul class="services__items services__items--right">
				<li class="services__item">сайты</li>
				<li class="services__item">приложения</li>
				<li class="services__item">брендинг</li>
				<li class="services__item">продвижение</li>
				<li class="services__item">презентации</li>
			</ul>
		</div>
	</section>

	<section class="main-container project" id="ersm">
		<div class="project__content">
			<div class="project__left">
				<div>
					<span class="project__tag">Многостраничный сайт</span>
					<span class="project__tag">Продвижение</span>
				</div>

				<h3 class="project__name">ЭраСтройМонтаж</h3>
				<a href="https://ersm-spb.ru" class="project__link">
					<i class="fal fa-link"></i>
					<span>ersm-spb.ru<span>
				</a>

				<p class="project__desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</p>

				<div class="project__gallery">
					<div class="project__buttons">
						<button class="project__button project__button--prev">
							<i class="fas fa-caret-left"></i>
						</button>
						<button class="project__button project__button--next">
							<i class="fas fa-caret-right"></i>
						</button>
					</div>
					<div class="project__images-previews">
						<div class="swiper-wrapper">
							<div class="swiper-slide project__slide">
								<img class="project__images-preview" src="imgs/3.png">
							</div>
							<div class="swiper-slide project__slide">
								<img class="project__images-preview" src="imgs/2.png">
							</div>
							<div class="swiper-slide project__slide">
								<img class="project__images-preview" src="imgs/3.png">
							</div>
							<div class="swiper-slide project__slide">
								<img class="project__images-preview" src="imgs/2.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="project__images">
					<div class="swiper-wrapper">
						<div class="swiper-slide project__slide">
							<img class="project__image" src="imgs/3.png">
						</div>
						<div class="swiper-slide project__slide">
							<img class="project__image" src="imgs/2.png">
						</div>
						<div class="swiper-slide project__slide">
							<img class="project__image" src="imgs/3.png">
						</div>
						<div class="swiper-slide project__slide">
							<img class="project__image" src="imgs/2.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="main-container project project--right" id="eva">
		<div class="project__content">
			<div>
				<div class="project__images">
					<div class="swiper-wrapper">
						<div class="swiper-slide project__slide">
							<img class="project__image" src="imgs/1.png">
						</div>
						<div class="swiper-slide project__slide">
							<img class="project__image" src="imgs/2.png">
						</div>
						<div class="swiper-slide project__slide">
							<img class="project__image" src="imgs/1.png">
						</div>
						<div class="swiper-slide project__slide">
							<img class="project__image" src="imgs/2.png">
						</div>
					</div>
				</div>
			</div>
			<div class="project__right">
				<div>
					<span class="project__tag">Многостраничный сайт</span>
					<span class="project__tag">Продвижение</span>
				</div>

				<h3 class="project__name">Ева Борисова</h3>
				<a href="https://evaborisova.ru" class="project__link">
					<i class="fal fa-link"></i>
					<span>evaborisova.ru<span>
				</a>

				<p class="project__desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</p>

				<div class="project__gallery">
					<div class="project__buttons">
						<button class="project__button project__button--prev">
							<i class="fas fa-caret-left"></i>
						</button>
						<button class="project__button project__button--next">
							<i class="fas fa-caret-right"></i>
						</button>
					</div>
					<div class="project__images-previews">
						<div class="swiper-wrapper">
							<div class="swiper-slide project__slide">
								<img class="project__images-preview" src="imgs/1.png">
							</div>
							<div class="swiper-slide project__slide">
								<img class="project__images-preview" src="imgs/2.png">
							</div>
							<div class="swiper-slide project__slide">
								<img class="project__images-preview" src="imgs/1.png">
							</div>
							<div class="swiper-slide project__slide">
								<img class="project__images-preview" src="imgs/2.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="work">
		<h2 class="work__title">КАК МЫ РАБОТАЕМ?</h2>

		<div class="work__timeline">
			<div class="work__timeline-row">
				<div class="work__timeline-col">
					<div class="work__timeline-number">01</div>
					<div class="work__timeline-title">ОБСУЖДЕНИЕ <br> РАБОТ</div>
				</div>
				<div class="work__timeline-col">
					<div class="work__timeline-number">02</div>
					<div class="work__timeline-title">ПРОЕКТИРОВАНИЕ <br> СТРУКТУРЫ</div>
				</div>
				<div class="work__timeline-col">
					<div class="work__timeline-number">03</div>
					<div class="work__timeline-title">ВИЗУАЛИЗАЦИЯ <br> ПРОТОТИПА</div>
				</div>
			</div>
			<div class="work__timeline-line"></div>
			<div class="work__timeline-row">
				<div class="work__timeline-col">
					<div class="work__timeline-number">04</div>
					<div class="work__timeline-title">ВЁРСТКА <br> СТРАНИЦ</div>
				</div>
				<div class="work__timeline-col">
					<div class="work__timeline-number">05</div>
					<div class="work__timeline-title">ДОБАВЛЕНИЕ <br >КОНТЕНТА</div>
				</div>
				<div class="work__timeline-col">
					<div class="work__timeline-number">06</div>
					<div class="work__timeline-title">ТЕСТИРОВАНИЕ <br> И ЗАПУСК В РЕЛИЗ</div>
				</div>
			</div>
		</div>
	</section>

	<section class="office main-container">
		<div class="office__images-container">
			<div class="office__buttons">
				<button class="office__button office__button--prev">
					<i class="far fa-long-arrow-left"></i>
				</button>
				<button class="office__button office__button--next">
					<i class="far fa-long-arrow-right"></i>
				</button>
			</div>
			<div class="office__images">
				<div class="swiper-wrapper">
					<div class="swiper-slide office__slide">
						<img class="office__image" src="imgs/3.png">
					</div>
					<div class="swiper-slide office__slide">
						<img class="office__image" src="imgs/2.png">
					</div>
					<div class="swiper-slide office__slide">
						<img class="office__image" src="imgs/1.png">
					</div>
					<div class="swiper-slide office__slide">
						<img class="office__image" src="imgs/2.png">
					</div>
				</div>
			</div>
		</div>
		<div class="office__text-container">
			<div class="office__text">
				Сегодня в TEREXOV работает 11 человек. <br>  
				Все они сосредоточены в офисе на Петроградке
			<div>
		</div>
	</section>

	<section class="stats main-container">
		<div class="stats__row">
			<div class="stats__item">
				<div>>100</div>
				<div>проектов</div>
			</div>
			<div class="stats__item">
				<div>4</div>
				<div>место в среднем по выдаче сайтов</div>
			</div>
		</div>
		<div class="stats__row">
			<div class="stats__item">
				<div>215%</div>
				<div>в среднем увеличение прибыли</div>
			</div>
			<div class="stats__item">
				<div>5</div>
				<div>Лет опыта <br> в IT-индустрии</div>
			</div>
			<div class="stats__item">
				<div>11</div>
				<div>КРУТЫХ <br> СОТРУДНИКОВ</div>
			</div>
		</div>
		<div class="stats__row">
			<div class="stats__item">
				<div>3350</div>
				<div>Страниц в ТОП-5</div>
			</div>
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
						<input class="contacts__input" type="text" id="name-input" placeholder="Имя">
						<input class="contacts__input" type="text" id="email-input" placeholder="Почта">
						<input class="contacts__input" type="text" id="phone-input" placeholder="Телефон">
						<div class="dropdown">
							<input type="checkbox" class="dropdown__switch" id="filter-switch" hidden />
							<label for="filter-switch" class="dropdown__options-filter">
								<ul class="dropdown__filter" role="listbox" tabindex="-1">
									<li class="dropdown__filter-selected" aria-selected="true">
										Как с вами связаться?
									</li>
									<li>
										<ul class="dropdown__select">
											<li class="dropdown__select-option" role="option">
												Позвоните по телефону
											</li>
											<li class="dropdown__select-option" role="option">
												Напишите на почту
											</li>
											<li class="dropdown__select-option" role="option">
												WhatsApp
											</li>
											<li class="dropdown__select-option" role="option">
												Telegram
											</li>
											<li class="dropdown__select-option" role="option">
												Viber
											</li>
										</ul>
									</li>
									<i class="fas fa-caret-down"></i>
								</ul>			
							</label>
						</div>
						<button class="contacts__button">отправить</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php require "templates/_footer.php"; ?>

	<script>
		let first_project_manager  = null;
		let second_project_manager = null;

		let project_gallery_preview = {
			slidesPerView: 1,
			spaceBetween: 12,
			autoHeight: true,

			breakpoints: {
				0: { slidesPerView: 1 },
				768: { slidesPerView: 3 }
			}
		};

		let project_gallery = {
			slidesPerView: 1,
			spaceBetween: 12,
			effect: "fade",
			autoHeight: true,
		};

		class ProjectImagesManager 
		{
			constructor(id_prefix, preview_swiper_params, main_swiper_params) 
			{
				this.prefix = id_prefix;
				this.index = 0;

				this.preview_swiper = new Swiper(
					this.prefix + " .project__images-previews", preview_swiper_params
				); 
				this.swiper = new Swiper(
					this.prefix + " .project__images", main_swiper_params
				);
			
				$(this.prefix + " .project__button--prev").click(() => this.slidePrev());
				$(this.prefix + " .project__button--next").click(() => this.slideNext());
				$(this.prefix + " .project__images-previews .swiper-slide")
					.eq(this.index)
					.addClass("project__slide--active");
			} 

			slideNext()
			{
				if (this.preview_swiper.slides.length != this.index + 1)
				{
					this.index++;

					$(this.prefix + " .project__images-previews .swiper-slide")
						.eq(this.index - 1)
						.removeClass("project__slide--active");
					$(this.prefix + " .project__images-previews .swiper-slide")
						.eq(this.index)
						.addClass("project__slide--active");

					this.preview_swiper.slideNext();
					this.swiper.slideNext();
				}
			} 

			slidePrev()
			{
				if (this.index > 0)
				{
					this.index--;

					$(this.prefix + " .project__images-previews .swiper-slide")
						.eq(this.index + 1)
						.removeClass("project__slide--active");
					$(this.prefix + " .project__images-previews .swiper-slide")
						.eq(this.index)
						.addClass("project__slide--active");

					this.preview_swiper.slidePrev();
					this.swiper.slidePrev();
				}
			}
		}

		$(document).ready(function () {
			updateTimeSpan();
			setInterval(updateTimeSpan, 1000 * 10)

			first_project_manager  = new ProjectImagesManager(
				"#ersm", project_gallery_preview, project_gallery
			);
			second_project_manager = new ProjectImagesManager(
				"#eva", project_gallery_preview, project_gallery
			);

			let office_swiper = new Swiper(".office__images", { 
				slidesPerView: 1, 
				effect: "fade",
				autoHeight: true,
				navigation: {
					nextEl: '.office__button--next',
					prevEl: '.office__button--prev'
				}
			});

			$("#email-input").focusout(function() {
				if (!validateEmail( $(this).val() )) 
				{
					console.log( $(this).val() );
					$(this).addClass("contacts__input--error");
				}
			});

			// Change option selected
			const label = document.querySelector('.dropdown__filter-selected');
			const options = Array.from(document.querySelectorAll('.dropdown__select-option'));

			options.forEach(option => {
				option.addEventListener('click', () => {
					label.textContent = option.textContent;
					$(".dropdown__filter").addClass("dropdown__filter--success");
				});
			});

			// Close dropdown onclick outside
			document.addEventListener('click', e => {
				const toggle = document.querySelector('.dropdown__switch');
				const element = e.target;

				if (element == toggle) return;

				const isDropdownChild = element.closest('.dropdown__filter');

				if (!isDropdownChild) {
					toggle.checked = false;
				}
			});
		});

		function updateTimeSpan() {
			let date = new Date();

			let minutes = date.getMinutes();
			let hour    = date.getHours();

			if (hour    < 10) hour    = "0" + String(hour);
			if (minutes < 10) minutes = "0" + String(minutes);
			$("#contacts__current-time").text(hour + ":" + minutes);			
		}

		function validateEmail(email)
		{
			return /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
				.test(email);
		}
	</script>
</body>
</html>
