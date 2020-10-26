<nav>
	<div class="nav__content">
		<div class="nav__logo">
			<a href="">terexov.</a>
		</div>

		<button class="nav__menu">
			<div></div>
			<div></div>
		</button>

		<div class="nav__links-container">
			<ul class="nav__links">
				<li class="nav__link"><a href=""> главная  </a></li>
				<li class="nav__link"><a href=""> о нас    </a></li>
				<li class="nav__link"><a href=""> услуги   </a></li>
				<li class="nav__link"><a href=""> цены     </a></li>
				<li class="nav__link"><a href=""> контакты </a></li>
			</ul>
		</div>
	</div>
</nav>

<script>
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
</script>