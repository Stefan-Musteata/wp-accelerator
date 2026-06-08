(function () {
	const root = document.getElementById('tkvg-studiu');

	if (!root || typeof Swiper === 'undefined') {
		return;
	}

	root.querySelectorAll('.tkvg-carousel .swiper').forEach(function (slider) {
		new Swiper(slider, {
			loop: true,
			speed: 500,
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
