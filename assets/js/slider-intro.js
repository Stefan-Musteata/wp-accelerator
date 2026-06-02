(function () {
	const slider = document.querySelector('.slider-intro .swiper');

	if (!slider || typeof Swiper === 'undefined') {
		return;
	}

	new Swiper('.slider-intro .swiper', {
		loop: true,
		autoHeight: true,
		speed: 600,
		autoplay: {
			delay: 6000,
			disableOnInteraction: false,
		},
		pagination: {
			el: '.slider-intro .swiper .swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.slider-intro .swiper .swiper-button-next',
			prevEl: '.slider-intro .swiper .swiper-button-prev',
		},
	});
})();
