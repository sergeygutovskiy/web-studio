
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
				<li class="nav__link"><a href="last.php"> Работы  </a></li>
				<li class="nav__link"><a href="about.php"> О нас    </a></li>
				<li class="nav__link"><a href="services.php"> Услуги   </a></li>
				<li class="nav__link"><a href="contacts.php"> Контакты </a></li>
				<li class="nav__link nav__phone"><a href=""> <i class="fas fa-phone"></i></a></li>
			</ul>
		</div>
	</div>
</nav>


<!-- <script>
$(".nav__menu").click(function() {			
	$(".nav__link").each(function(index) {
		let current = $(this);

		setTimeout(function() {
			current.toggleClass("nav__link--active");
		}, 100 + index * 100);		
	});

	$("nav").toggleClass("nav--active");
	$(".nav__menu").toggleClass("nav__menu--active");
});
</script> -->