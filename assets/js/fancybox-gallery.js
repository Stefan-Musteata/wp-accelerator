(function () {
	'use strict';

	if (typeof Fancybox === 'undefined') {
		return;
	}

	var galleryRoots = [
		{ selector: '#talin-studiu', name: 'talin-gallery' },
		{ selector: '#pae-studiu', name: 'pae-gallery' },
		{ selector: '#tkvg-studiu', name: 'tkvg-gallery' },
		{ selector: '#scoala-nissi-studiu', name: 'nissi-gallery' },
	];

	function getCaption(img) {
		var figure = img.closest('figure');

		if (figure) {
			var figcaption = figure.querySelector('figcaption');

			if (figcaption && figcaption.textContent.trim()) {
				return figcaption.textContent.trim();
			}
		}

		return img.getAttribute('alt') || '';
	}

	function isInsideExternalLink(img) {
		var link = img.closest('a');

		if (!link) {
			return false;
		}

		var href = link.getAttribute('href') || '';

		return href.length > 0 && href.indexOf('/wp-content/uploads/') === -1;
	}

	function prepareGallery(root, galleryName) {
		root.querySelectorAll('img[src*="/wp-content/uploads/"]').forEach(function (img) {
			if (isInsideExternalLink(img) || img.closest('[data-fancybox]')) {
				return;
			}

			var link = document.createElement('a');

			link.href = img.currentSrc || img.src;
			link.className = 'da-fancybox-link';
			link.setAttribute('data-fancybox', galleryName);

			var caption = getCaption(img);

			if (caption) {
				link.setAttribute('data-caption', caption);
			}

			img.parentNode.insertBefore(link, img);
			link.appendChild(img);
		});
	}

	galleryRoots.forEach(function (config) {
		var root = document.querySelector(config.selector);

		if (root) {
			prepareGallery(root, config.name);
		}
	});

	Fancybox.bind('[data-fancybox]', {
		Carousel: {
			infinite: true,
		},
		Images: {
			zoom: true,
		},
	});
})();
