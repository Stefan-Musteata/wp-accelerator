(function () {
	const root = document.getElementById('talin-studiu');

	if (!root || typeof Swiper === 'undefined') {
		return;
	}

	root.querySelectorAll('.talin-carousel .swiper').forEach(function (slider) {
		new Swiper(slider, {
			loop: true,
			speed: 1800,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			pagination: {
				el: slider.querySelector('.swiper-pagination'),
				clickable: true,
			},
			navigation: {
				nextEl: slider.querySelector('.swiper-button-next'),
				prevEl: slider.querySelector('.swiper-button-prev'),
			},
		});
	});
})();
