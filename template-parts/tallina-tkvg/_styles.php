<style>
	.tkvg-studiu {
		--tkvg-petrol: #245262;
		--tkvg-cyan: #10ECD2;
		--tkvg-purple: #4C1C57;
		--tkvg-magenta: #E51491;
		--tkvg-dark: #362B2A;
		--tkvg-bg: #f6fbfc;
		--tkvg-card: #ffffff;
		--tkvg-border: rgba(36, 82, 98, 0.16);
		--tkvg-shadow: 0 10px 26px rgba(36, 82, 98, 0.09);
		color: var(--tkvg-dark);
		line-height: 1.65;
	}

	.tkvg-studiu * {
		box-sizing: border-box;
	}

	.tkvg-studiu a {
		color: var(--tkvg-petrol);
	}

	.tkvg-studiu .tkvg-intro {
		background: linear-gradient(130deg, rgba(36, 82, 98, 0.07), rgba(16, 236, 210, 0.08));
		border: 1px solid var(--tkvg-border);
		border-radius: 18px;
		padding: 1.5rem;
		margin-bottom: 2rem;
	}

	.tkvg-studiu .tkvg-divider {
        text-align: center;
		margin: 2.75rem auto 1.75rem;
		padding-top: 0.6rem;
		border-top: 2px solid rgba(76, 28, 87, 0.18);
		font-size: 1.9rem;
		text-transform: uppercase;
		letter-spacing: 0.08em;
		color: var(--tkvg-purple);
		font-weight: 700;
	}

	.tkvg-studiu .tkvg-section-title {
		font-size: clamp(1.35rem, 1vw + 1rem, 2rem);
		color: var(--tkvg-purple);
		margin-bottom: 0.7rem;
	}

	.tkvg-studiu h3.h5 {
		font-size: 1.4rem;
		font-weight: 700;
		color: #306d82;
	}

	.tkvg-studiu .tkvg-image {
		width: 100%;
		border-radius: 14px;
		box-shadow: var(--tkvg-shadow);
		object-fit: cover;
	}

	.tkvg-studiu .tkvg-caption {
		margin-top: 0.45rem;
		font-size: 0.85rem;
		color: rgba(54, 43, 42, 0.76);
	}

	.tkvg-studiu .tkvg-tag {
		display: inline-block;
		padding: 0.35rem 0.85rem;
		border-radius: 999px;
		font-weight: 600;
		font-size: 0.82rem;
		margin: 0.15rem 0.5rem 0.5rem 0;
	}

	.tkvg-studiu .tkvg-tag--petrol {
		background: rgba(36, 82, 98, 0.16);
		color: var(--tkvg-petrol);
		border: 1px solid rgba(36, 82, 98, 0.25);
	}

	.tkvg-studiu .tkvg-tag--mov {
		background: rgba(76, 28, 87, 0.16);
		color: var(--tkvg-purple);
		border: 1px solid rgba(76, 28, 87, 0.25);
	}

	.tkvg-studiu .tkvg-tag--impact {
		background: rgba(229, 20, 145, 0.08);
		color: var(--tkvg-magenta);
		border: 1px solid rgba(229, 20, 145, 0.2);
	}

	.tkvg-studiu .tkvg-chip {
		display: inline-block;
		padding: 0.35rem 0.7rem;
		border-radius: 10px;
		font-size: 0.75rem;
		font-weight: 700;
		color: var(--tkvg-petrol);
		background: rgba(36, 82, 98, 0.08);
		border: 1px solid rgba(36, 82, 98, 0.15);
		margin-bottom: 0.45rem;
	}

	.tkvg-studiu .tkvg-diagrama-wrap {
		width: 100%;
		overflow-x: auto;
		padding: 0.35rem 0;
	}

	.tkvg-studiu .tkvg-diagrama {
		width: 100%;
		height: auto;
		min-width: 720px;
	}

	.tkvg-studiu .tkvg-mini.tkvg-fit thead th:nth-child(1),
	.tkvg-studiu .tkvg-mini.tkvg-fit tbody td:nth-child(1) {
		width: 18%;
	}

	.tkvg-studiu .tkvg-mini.tkvg-fit thead th:nth-child(2),
	.tkvg-studiu .tkvg-mini.tkvg-fit tbody td:nth-child(2) {
		width: 26%;
	}

	.tkvg-studiu .tkvg-mini.tkvg-fit thead th:nth-child(3),
	.tkvg-studiu .tkvg-mini.tkvg-fit tbody td:nth-child(3) {
		width: 26%;
	}

	.tkvg-studiu .tkvg-mini.tkvg-fit thead th:nth-child(4),
	.tkvg-studiu .tkvg-mini.tkvg-fit tbody td:nth-child(4) {
		width: 30%;
	}

	.tkvg-studiu .tkvg-mini.tkvg-fit--3col thead th:nth-child(1),
	.tkvg-studiu .tkvg-mini.tkvg-fit--3col tbody td:nth-child(1) {
		width: 18%;
	}

	.tkvg-studiu .tkvg-mini.tkvg-fit--3col thead th:nth-child(2),
	.tkvg-studiu .tkvg-mini.tkvg-fit--3col tbody td:nth-child(2) {
		width: 38%;
	}

	.tkvg-studiu .tkvg-mini.tkvg-fit--3col thead th:nth-child(3),
	.tkvg-studiu .tkvg-mini.tkvg-fit--3col tbody td:nth-child(3) {
		width: 44%;
	}

	.tkvg-studiu .c-petrol { color: var(--tkvg-petrol); }
	.tkvg-studiu .c-cyan { color: #0ebfa9; }
	.tkvg-studiu .c-mov { color: var(--tkvg-purple); }
	.tkvg-studiu .c-magenta { color: var(--tkvg-magenta); }

	.tkvg-studiu .t-turcoaz { color: #0ebfa9; }
	.tkvg-studiu .t-mov { color: var(--tkvg-purple); }
	.tkvg-studiu .t-pink { color: var(--tkvg-magenta); }
	.tkvg-studiu .t-petrol { color: var(--tkvg-petrol); }

	.tkvg-studiu .tkvg-priority-arrow {
		color: var(--tkvg-petrol);
		font-size: 1.1rem;
		line-height: 1;
	}

	.tkvg-studiu .tkvg-highlight {
		display: inline-block;
		padding: 0.65rem 0.75rem;
		border-radius: 12px;
		background: rgba(229, 20, 145, 0.04);
		border: 1px solid rgba(229, 20, 145, 0.12);
	}

	.tkvg-studiu .tkvg-toc {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
		gap: 0.65rem;
		margin: 1rem 0 1.5rem;
	}

	.tkvg-studiu .tkvg-toc a {
        display: flex;
		align-items: center;
		justify-content: center;
		text-decoration: none;
		background: var(--tkvg-card);
		border: 1px solid var(--tkvg-border);
		padding: 7px 17px;
		border-radius: 10px;
		font-size: 0.92rem;
		font-weight: 600;
	}

	.tkvg-studiu .tkvg-carousel {
		position: relative;
		background: var(--tkvg-card);
		border-radius: 16px;
		padding: 1rem;
		border: 1px solid var(--tkvg-border);
		box-shadow: var(--tkvg-shadow);
		margin: 1.5rem 0;
	}

	.tkvg-studiu .tkvg-carousel .swiper {
		width: 100%;
		padding-bottom: 2.5rem;
	}

	.tkvg-studiu .tkvg-carousel .swiper-slide {
		margin: 0;
	}

	.tkvg-studiu .tkvg-carousel .swiper-slide figure,
	.tkvg-studiu .tkvg-carousel figure.swiper-slide {
		margin: 0;
		height: clamp(220px, 42vw, 480px);
		overflow: hidden;
		border-radius: 12px;
	}

	.tkvg-studiu .tkvg-carousel .swiper-slide .tkvg-image {
		width: 100%;
		height: 100%;
		display: block;
		object-fit: cover;
		border-radius: 12px;
	}

	.tkvg-studiu .tkvg-carousel .swiper-button-prev,
	.tkvg-studiu .tkvg-carousel .swiper-button-next {
		color: var(--tkvg-petrol);
	}

	.tkvg-studiu .tkvg-carousel .swiper-pagination-bullet {
		background: rgba(36, 82, 98, 0.35);
		opacity: 1;
	}

	.tkvg-studiu .tkvg-carousel .swiper-pagination-bullet-active {
		background: var(--tkvg-petrol);
	}

	.tkvg-studiu .tkvg-btn {
		border: 1px solid var(--tkvg-petrol);
		background: #fff;
		color: var(--tkvg-petrol);
		border-radius: 999px;
		padding: 0.35rem 0.95rem;
		font-size: 0.9rem;
		font-weight: 600;
		cursor: pointer;
	}

	.tkvg-studiu .tkvg-mini,
	.tkvg-studiu .tkvg-compact,
	.tkvg-studiu .tkvg-table,
	.tkvg-studiu .participation-table {
		width: 100%;
		border-collapse: collapse;
		background: #fff;
		border: 1px solid var(--tkvg-border);
		border-radius: 12px;
		overflow: hidden;
	}

	.tkvg-studiu .tkvg-mini th,
	.tkvg-studiu .tkvg-mini td,
	.tkvg-studiu .tkvg-compact th,
	.tkvg-studiu .tkvg-compact td,
	.tkvg-studiu .tkvg-table th,
	.tkvg-studiu .tkvg-table td,
	.tkvg-studiu .participation-table th,
	.tkvg-studiu .participation-table td {
		border: 1px solid rgba(36, 82, 98, 0.12);
		padding: 0.58rem 0.65rem;
		vertical-align: top;
		font-size: 0.92rem;
	}

	.tkvg-studiu .tkvg-mini th,
	.tkvg-studiu .tkvg-compact th,
	.tkvg-studiu .tkvg-table th,
	.tkvg-studiu .participation-table th {
		background: rgba(36, 82, 98, 0.08);
		color: var(--tkvg-purple);
	}

	.tkvg-studiu .table-scroll {
		overflow-x: auto;
		margin: 1rem 0;
	}

	.tkvg-studiu .org-compact {
		display: grid;
		grid-template-columns: repeat(4, minmax(0, 1fr));
		gap: 0.8rem;
		margin: 1rem 0;
	}

	.tkvg-studiu .org-compact--governance {
		grid-template-columns: 1fr;
		max-width: 520px;
	}

	.tkvg-studiu .org-master {
		background: var(--tkvg-petrol);
		color: #fff;
		padding: 0.9rem 1rem;
		border-radius: 12px;
		text-align: center;
		margin-bottom: 0.5rem;
	}

	.tkvg-studiu .org-card {
		background: #fff;
		border: 1px solid var(--tkvg-border);
		border-left: 4px solid var(--tkvg-cyan);
		border-radius: 12px;
		padding: 0.8rem;
		box-shadow: var(--tkvg-shadow);
	}

	.tkvg-studiu .org-card--mov { border-left-color: var(--tkvg-purple); }
	.tkvg-studiu .org-card--petrol { border-left-color: var(--tkvg-petrol); }
	.tkvg-studiu .org-card--cyan { border-left-color: var(--tkvg-cyan); }
	.tkvg-studiu .org-card--magenta { border-left-color: var(--tkvg-magenta); }

	.tkvg-studiu .tkvg-digipeegel-links {
		display: flex;
		flex-wrap: wrap;
		gap: 0.5rem;
		align-items: center;
	}

	.tkvg-studiu .tkvg-panel {
		display: grid;
		grid-template-columns: repeat(3, minmax(0, 1fr));
		gap: 0.9rem;
	}

	.tkvg-studiu .tkvg-panel--vision {
		grid-template-columns: repeat(4, minmax(0, 1fr));
		text-align: center;
	}

	.tkvg-studiu .tkvg-panel--stages {
		grid-template-columns: 1fr;
	}

	.tkvg-studiu .tkvg-panel-card {
		background: #fff;
		border-radius: 12px;
		padding: 0.95rem;
		border: 1px solid var(--tkvg-border);
	}

	.tkvg-studiu .tkvg-panel-card--center {
		text-align: center;
		max-width: 640px;
		margin-left: auto;
		margin-right: auto;
	}

	.tkvg-studiu .tkvg-business-card {
		border: 1px solid var(--tkvg-border);
		border-radius: 14px;
		overflow: hidden;
		box-shadow: var(--tkvg-shadow);
	}

	.tkvg-studiu .tkvg-business-card__head {
		background: linear-gradient(135deg, #0b5fff, #00b3ff);
		color: #fff;
		padding: 1rem;
	}

	.tkvg-studiu .tkvg-business-card__body {
		display: flex;
		gap: 0.85rem;
		padding: 0.85rem 1rem;
		align-items: flex-start;
	}

	.tkvg-studiu .tkvg-business-card__photo {
		width: 86px;
		height: 86px;
		border-radius: 14px;
		object-fit: cover;
		flex-shrink: 0;
		border: 1px solid var(--tkvg-border);
	}

	.tkvg-studiu .tkvg-cycle-grid {
		display: grid;
		grid-template-columns: repeat(2, minmax(0, 1fr));
		gap: 0.75rem;
		margin: 1rem 0;
	}

	.tkvg-studiu .tkvg-cycle-step {
		background: #f9f9f9;
		border: 1px solid var(--tkvg-border);
		border-radius: 12px;
		padding: 0.85rem;
		text-align: center;
	}

	.tkvg-studiu .tkvg-cycle-step .step-title {
		font-weight: 700;
		font-size: 0.85rem;
		text-transform: uppercase;
		margin-bottom: 0.35rem;
	}

	.tkvg-studiu .tkvg-evolution-list {
		list-style: none;
		padding: 0;
		margin: 1rem 0;
		border-left: 2px solid rgba(36, 82, 98, 0.25);
		padding-left: 1.25rem;
	}

	.tkvg-studiu .tkvg-evolution-list li {
		margin-bottom: 1.25rem;
		padding-left: 0.5rem;
	}

	.tkvg-studiu .tkvg-priorities-stack {
		display: flex;
		flex-direction: column;
		align-items: center;
		gap: 0.35rem;
		margin: 1rem 0;
	}

	.tkvg-studiu .tkvg-priority-node {
		padding: 0.75rem 1.25rem;
		border-radius: 12px;
		font-weight: 700;
		width: 90%;
		text-align: center;
		color: #fff;
	}

	.tkvg-studiu .tkvg-priority-node--tehnic { background: var(--tkvg-purple); }
	.tkvg-studiu .tkvg-priority-node--prof { background: var(--tkvg-magenta); }
	.tkvg-studiu .tkvg-priority-node--elevi { background: var(--tkvg-cyan); color: var(--tkvg-petrol); }

	.tkvg-studiu .tkvg-facilitator-grid {
		display: grid;
		grid-template-columns: repeat(2, minmax(0, 1fr));
		gap: 0.9rem;
	}

	.tkvg-studiu .tkvg-facilitator-card {
		background: #fff;
		border: 1px solid var(--tkvg-border);
		border-radius: 14px;
		padding: 1rem;
		box-shadow: var(--tkvg-shadow);
	}

	.tkvg-studiu .tkvg-facilitator-card h4 {
		font-size: 0.95rem;
		margin-bottom: 0.5rem;
	}

	.tkvg-studiu .tkvg-facilitator-card p {
		font-size: 0.82rem;
		line-height: 1.45;
		margin-bottom: 0;
	}

	.tkvg-studiu .tkvg-facilitator-card--purple { border-top: 3px solid rgba(76, 28, 87, 0.7); }
	.tkvg-studiu .tkvg-facilitator-card--cyan { border-top: 3px solid rgba(16, 236, 210, 0.7); }
	.tkvg-studiu .tkvg-facilitator-card--petrol { border-top: 3px solid rgba(36, 82, 98, 0.78); }
	.tkvg-studiu .tkvg-facilitator-card--magenta { border-top: 3px solid rgba(229, 20, 145, 0.7); }

	.tkvg-studiu .level-badge {
		display: inline-block;
		padding: 0.5rem 0.75rem;
		border-radius: 12px;
		color: #fff;
		font-weight: 700;
		font-size: 0.82rem;
		line-height: 1.2;
	}

	.tkvg-studiu .level-badge span {
		display: block;
		font-size: 0.68rem;
		font-weight: 600;
		opacity: 0.92;
		text-transform: uppercase;
		margin-top: 0.2rem;
	}

	.tkvg-studiu .level-strategic { background: linear-gradient(135deg, #5C2A77, #106F8B); }
	.tkvg-studiu .level-consultativ { background: linear-gradient(135deg, #106F8B, #2b8aa6); }
	.tkvg-studiu .level-colaborativ { background: linear-gradient(135deg, #5C2A77, #7a4095); }
	.tkvg-studiu .level-pedagogic { background: linear-gradient(135deg, #106F8B, #5C2A77); }
	.tkvg-studiu .level-operational { background: linear-gradient(135deg, #2c8c89, #106F8B); }

	.tkvg-studiu .tkvg-compare-grid {
		display: grid;
		grid-template-columns: 1.05fr 1.15fr 1.15fr 1.25fr;
		gap: 0.55rem;
		margin: 1rem 0;
	}

	.tkvg-studiu .tkvg-compare-head {
		font-weight: 800;
		font-size: 0.8rem;
		padding: 0.55rem;
		border: 1px solid var(--tkvg-border);
		border-radius: 10px;
		background: linear-gradient(90deg, rgba(36, 82, 98, 0.08), rgba(16, 236, 210, 0.08));
		text-align: center;
	}

	.tkvg-studiu .tkvg-strategic {
		display: grid;
		grid-template-columns: repeat(3, minmax(0, 1fr));
		gap: 1rem;
	}

	.tkvg-studiu .tkvg-strategic article {
		background: #fff;
		border: 1px solid var(--tkvg-border);
		border-top: 4px solid var(--tkvg-magenta);
		border-radius: 12px;
		padding: 1rem;
	}

	.tkvg-studiu .actor-diagram {
		display: grid;
		grid-template-columns: 1fr 280px;
		gap: 1rem;
		background: #fff;
		border: 1px solid var(--tkvg-border);
		border-radius: 14px;
		padding: 1rem;
	}

	.tkvg-studiu .actor-nodes {
		display: grid;
		grid-template-columns: repeat(3, minmax(0, 1fr));
		gap: 0.7rem;
	}

	.tkvg-studiu .actor-node {
		padding: 0.7rem;
		border: 1px solid rgba(36, 82, 98, 0.2);
		border-radius: 10px;
		background: rgba(16, 236, 210, 0.12);
		cursor: pointer;
		font-weight: 600;
		text-align: center;
	}

	.tkvg-studiu .actor-node.active {
		background: rgba(229, 20, 145, 0.15);
		border-color: var(--tkvg-magenta);
	}

	.tkvg-studiu .actor-panel {
		border: 1px solid var(--tkvg-border);
		border-radius: 10px;
		padding: 0.75rem;
		background: rgba(76, 28, 87, 0.06);
	}

	.tkvg-studiu .flip-grid {
		display: grid;
		grid-template-columns: repeat(4, minmax(0, 1fr));
		gap: 0.65rem;
		margin-top: 1rem;
	}

	.tkvg-studiu .flip-card {
		perspective: 900px;
		min-height: 120px;
	}

	.tkvg-studiu .flip-card-inner {
		position: relative;
		height: 100%;
		min-height: 120px;
		transition: transform 0.5s ease;
		transform-style: preserve-3d;
	}

	.tkvg-studiu .flip-card.is-flipped .flip-card-inner,
	.tkvg-studiu .flip-card:hover .flip-card-inner {
		transform: rotateY(180deg);
	}

	.tkvg-studiu .flip-front,
	.tkvg-studiu .flip-back {
		position: absolute;
		inset: 0;
		backface-visibility: hidden;
		border: 1px solid var(--tkvg-border);
		border-radius: 10px;
		padding: 0.65rem;
		background: #fff;
	}

	.tkvg-studiu .flip-front {
		font-weight: 700;
		font-size: 0.88rem;
	}

	.tkvg-studiu .flip-back {
		transform: rotateY(180deg);
		font-size: 0.85rem;
		background: rgba(36, 82, 98, 0.08);
	}

	.tkvg-studiu .flip-card.c1 .flip-front { border-color: rgba(36, 82, 98, 0.35); }
	.tkvg-studiu .flip-card.c2 .flip-front { border-color: rgba(16, 236, 210, 0.55); }
	.tkvg-studiu .flip-card.c3 .flip-front { border-color: rgba(76, 28, 87, 0.35); }
	.tkvg-studiu .flip-card.c4 .flip-front { border-color: rgba(229, 20, 145, 0.35); }

	.tkvg-studiu .flip-card.c1 .flip-back { background: var(--tkvg-petrol); color: #fff; }
	.tkvg-studiu .flip-card.c2 .flip-back { background: var(--tkvg-cyan); color: #0b2a27; }
	.tkvg-studiu .flip-card.c3 .flip-back { background: var(--tkvg-purple); color: #fff; }
	.tkvg-studiu .flip-card.c4 .flip-back { background: var(--tkvg-magenta); color: #fff; }

	.tkvg-studiu .tkvg-wrap {
		background: #fff;
		border: 1px solid var(--tkvg-border);
		border-radius: 14px;
		padding: 1rem;
	}

	.tkvg-studiu .tkvg-wrap-nav {
		display: flex;
		flex-wrap: wrap;
		gap: 0.45rem;
		margin-bottom: 0.8rem;
	}

	.tkvg-studiu .tkvg-tab-btn {
		border: 1px solid var(--tkvg-border);
		background: #fff;
		color: var(--tkvg-petrol);
		border-radius: 999px;
		padding: 0.32rem 0.75rem;
		font-size: 0.85rem;
		cursor: pointer;
	}

	.tkvg-studiu .tkvg-tab-btn.active {
		background: var(--tkvg-petrol);
		color: #fff;
		border-color: var(--tkvg-petrol);
	}

	.tkvg-studiu .tkvg-tab-panel {
		display: none;
		border: 1px solid var(--tkvg-border);
		border-radius: 10px;
		padding: 0.9rem;
		background: rgba(16, 236, 210, 0.08);
	}

	.tkvg-studiu .tkvg-tab-panel.active {
		display: block;
	}

	.tkvg-studiu .timeline-list {
		list-style: none;
		padding-left: 0;
		margin: 0;
	}

	.tkvg-studiu .timeline-list li {
		position: relative;
		padding: 0.6rem 0 0.6rem 1.05rem;
		border-left: 2px solid rgba(36, 82, 98, 0.2);
		margin-left: 0.35rem;
	}

	.tkvg-studiu .timeline-list li::before {
		content: "";
		position: absolute;
		left: -0.43rem;
		top: 0.95rem;
		width: 0.7rem;
		height: 0.7rem;
		border-radius: 50%;
		background: var(--tkvg-magenta);
	}

	.tkvg-studiu .tkvg-modal {
		display: none;
		position: fixed;
		inset: 0;
		background: rgba(0, 0, 0, 0.58);
		z-index: 9999;
		padding: 1rem;
	}

	.tkvg-studiu .tkvg-modal.active {
		display: block;
	}

	.tkvg-studiu .tkvg-modal-content {
		background: #fff;
		max-width: 820px;
		margin: 2rem auto;
		border-radius: 14px;
		padding: 1rem;
	}

	.tkvg-studiu .modal-grid {
		display: grid;
		grid-template-columns: repeat(2, minmax(0, 1fr));
		gap: 0.7rem;
	}

	@media (max-width: 991.98px) {
		.tkvg-studiu .org-compact,
		.tkvg-studiu .tkvg-panel,
		.tkvg-studiu .tkvg-panel--vision,
		.tkvg-studiu .tkvg-strategic,
		.tkvg-studiu .tkvg-facilitator-grid,
		.tkvg-studiu .tkvg-compare-grid {
			grid-template-columns: repeat(2, minmax(0, 1fr));
		}

		.tkvg-studiu .actor-diagram {
			grid-template-columns: 1fr;
		}

		.tkvg-studiu .flip-grid {
			grid-template-columns: repeat(2, minmax(0, 1fr));
		}
	}

	@media (max-width: 767.98px) {
		.tkvg-studiu .org-compact,
		.tkvg-studiu .tkvg-panel,
		.tkvg-studiu .tkvg-panel--vision,
		.tkvg-studiu .tkvg-strategic,
		.tkvg-studiu .tkvg-facilitator-grid,
		.tkvg-studiu .tkvg-compare-grid,
		.tkvg-studiu .tkvg-cycle-grid,
		.tkvg-studiu .modal-grid,
		.tkvg-studiu .actor-nodes {
			grid-template-columns: 1fr;
		}

		.tkvg-studiu .flip-grid {
			grid-template-columns: 1fr;
		}
	}
</style>
