/**
 * Bootstrap dropdown support for GTranslate menu items.
 * GTranslate injects menu HTML without Bootstrap classes, so we patch at runtime.
 */
(function () {
	'use strict';

	function closeAllGtranslateDropdowns() {
		document.querySelectorAll('.menu-item-gtranslate').forEach(function (item) {
			var menu = item.querySelector(':scope > .dropdown-menu, :scope > .sub-menu');
			var toggle = item.querySelector(':scope > a');

			item.classList.remove('show');
			if (menu) {
				menu.classList.remove('show');
			}
			if (toggle) {
				toggle.classList.remove('show');
				toggle.setAttribute('aria-expanded', 'false');
			}
		});
	}

	function setupGtranslateItem(item) {
		if (item.dataset.daGtranslateInit === '1') {
			return;
		}

		var toggle = item.querySelector(':scope > a');
		var menu = item.querySelector(':scope > .dropdown-menu, :scope > .sub-menu');

		if (!toggle || !menu) {
			return;
		}

		item.classList.add('nav-item', 'dropdown');
		menu.classList.add('dropdown-menu');

		toggle.classList.add('nav-link', 'dropdown-toggle');
		toggle.setAttribute('data-bs-toggle', 'dropdown');
		toggle.setAttribute('role', 'button');
		toggle.setAttribute('aria-expanded', 'false');
		toggle.setAttribute('href', '#');

		item.querySelectorAll('.menu-item-gtranslate-child > a').forEach(function (link) {
			link.classList.add('dropdown-item');
			link.setAttribute('role', 'menuitem');
		});

		toggle.addEventListener(
			'click',
			function (event) {
				event.preventDefault();
				event.stopImmediatePropagation();

				var isOpen = item.classList.contains('show');

				closeAllGtranslateDropdowns();

				if (!isOpen) {
					item.classList.add('show');
					menu.classList.add('show');
					toggle.classList.add('show');
					toggle.setAttribute('aria-expanded', 'true');
				}

				if (typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
					bootstrap.Dropdown.getOrCreateInstance(toggle, { autoClose: true });
				}
			},
			true
		);

		item.dataset.daGtranslateInit = '1';
	}

	function initGtranslateDropdowns() {
		document.querySelectorAll('.menu-item-gtranslate').forEach(setupGtranslateItem);
	}

	document.addEventListener('click', function (event) {
		if (!event.target.closest('.menu-item-gtranslate')) {
			closeAllGtranslateDropdowns();
		}
	});

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initGtranslateDropdowns);
	} else {
		initGtranslateDropdowns();
	}

	window.addEventListener('load', initGtranslateDropdowns);
	setTimeout(initGtranslateDropdowns, 300);
	setTimeout(initGtranslateDropdowns, 1000);

	var primaryMenu = document.getElementById('primary-menu');
	if (primaryMenu && typeof MutationObserver !== 'undefined') {
		var observer = new MutationObserver(function () {
			initGtranslateDropdowns();
		});
		observer.observe(primaryMenu, { childList: true, subtree: true });
	}
})();
