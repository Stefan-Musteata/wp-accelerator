(function () {
	const root = document.getElementById('pae-studiu');

	if (!root || typeof Swiper === 'undefined') {
		return;
	}

	root.querySelectorAll('.pae-carousel .swiper').forEach(function (slider) {
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

	root.querySelectorAll('.pae-practici-carousel .swiper').forEach(function (slider) {
		new Swiper(slider, {
			speed: 500,
			slidesPerView: 1.05,
			spaceBetween: 14,
			pagination: {
				el: slider.querySelector('.swiper-pagination'),
				clickable: true,
			},
			navigation: {
				nextEl: slider.querySelector('.swiper-button-next'),
				prevEl: slider.querySelector('.swiper-button-prev'),
			},
			breakpoints: {
				980: {
					slidesPerView: 1.2,
				},
			},
		});
	});
})();
