<script>
	(function () {
		const root = document.getElementById('tkvg-studiu');
		if (!root) {
			return;
		}

		// Flip cards: toggle pe click (util pe mobil).
		root.querySelectorAll('.flip-card').forEach(function (card) {
			card.addEventListener('click', function () {
				card.classList.toggle('is-flipped');
			});
		});

		// Actor diagram interactiv.
		root.querySelectorAll('[data-actor-diagram]').forEach(function (diagram) {
			const nodes = diagram.querySelectorAll('.actor-node');
			const title = diagram.querySelector('[data-actor-title]');
			const text = diagram.querySelector('[data-actor-text]');

			nodes.forEach(function (node) {
				node.addEventListener('click', function () {
					nodes.forEach(function (item) {
						item.classList.remove('active');
					});
					node.classList.add('active');
					if (title) {
						title.textContent = node.getAttribute('data-title') || '';
					}
					if (text) {
						text.textContent = node.getAttribute('data-text') || '';
					}
				});
			});
		});

		// Modal haridustehnoloog.
		root.querySelectorAll('[data-open-modal]').forEach(function (button) {
			button.addEventListener('click', function () {
				const modalId = button.getAttribute('data-open-modal');
				const modal = document.getElementById('tkvg-modal-' + modalId);
				if (!modal) {
					return;
				}
				modal.classList.add('active');
				modal.setAttribute('aria-hidden', 'false');
			});
		});

		root.querySelectorAll('[data-close-modal]').forEach(function (button) {
			button.addEventListener('click', function () {
				const modalId = button.getAttribute('data-close-modal');
				const modal = document.getElementById('tkvg-modal-' + modalId);
				if (!modal) {
					return;
				}
				modal.classList.remove('active');
				modal.setAttribute('aria-hidden', 'true');
			});
		});

		root.querySelectorAll('.tkvg-modal').forEach(function (modal) {
			modal.addEventListener('click', function (event) {
				if (event.target === modal) {
					modal.classList.remove('active');
					modal.setAttribute('aria-hidden', 'true');
				}
			});
		});

		// Tabs secțiunea 5.
		root.querySelectorAll('[data-tkvg-tabs]').forEach(function (tabsRoot) {
			const buttons = tabsRoot.querySelectorAll('.tkvg-tab-btn');
			const panels = tabsRoot.querySelectorAll('.tkvg-tab-panel');

			buttons.forEach(function (button) {
				button.addEventListener('click', function () {
					const target = button.getAttribute('data-tab-target');
					buttons.forEach(function (item) {
						item.classList.remove('active');
					});
					panels.forEach(function (panel) {
						panel.classList.remove('active');
					});
					button.classList.add('active');
					const activePanel = tabsRoot.querySelector('#' + target);
					if (activePanel) {
						activePanel.classList.add('active');
					}
				});
			});
		});
	})();
</script>
