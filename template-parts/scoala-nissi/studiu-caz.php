<?php
/**
 * Studiu de caz Nissi – secțiunile 5 și 6 (pedagogie + factori).
 *
 * @package Digital_Accelerator
 */
?>
<div class="scoala-nissi-studiu" id="scoala-nissi-studiu">
	<style>
		.scoala-nissi-studiu {
			--bg-main: #F0F7FA;
			--bg-section: #FFFFFF;
			--bg-accent: #E8F4F8;
			--header-section: #6B4C7F;
			--header-light: #9B7CB6;
			--accent-primary: #2DD4BF;
			--accent-light: #5EEAD4;
			--accent-cta: #EC4899;
			--text-secondary: #5A7A8A;
			--text-main: #334155;
			--shadow: rgba(107, 76, 127, 0.06);
			--shadow-hover: rgba(107, 76, 127, 0.12);
			--transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			width: 100%;
			max-width: 100%;
			overflow-x: clip;
			color: var(--text-main);
			line-height: 1.6;
			-webkit-text-size-adjust: 100%;
		}

		.scoala-nissi-studiu * {
			box-sizing: border-box;
		}

		.scoala-nissi-studiu .fade-in {
			opacity: 0;
			transform: translateY(20px);
			transition: opacity 0.6s ease-out, transform 0.6s ease-out;
		}

		.scoala-nissi-studiu .fade-in.visible {
			opacity: 1;
			transform: translateY(0);
		}

		.scoala-nissi-studiu section.nissi-section {
			padding: 3rem 1rem;
			max-width: 1100px;
			margin: 0 auto;
			border-radius: 0;
			box-shadow: none;
			overflow: visible;
			position: static;
		}

		.scoala-nissi-studiu section.nissi-section::before {
			display: none;
		}

		.scoala-nissi-studiu .nissi-section-5 {
			background: var(--bg-section);
		}

		.scoala-nissi-studiu .nissi-section-6 {
			background: var(--bg-main);
			border-top: 1px solid rgba(107, 76, 127, 0.08);
		}

		.scoala-nissi-studiu .section-header {
			margin-bottom: 3rem;
			text-align: center;
		}

		.scoala-nissi-studiu .section-number {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			width: 56px;
			height: 56px;
			background: linear-gradient(135deg, var(--accent-primary), var(--accent-light));
			color: white;
			border-radius: 50%;
			font-weight: 800;
			font-size: 1.5rem;
			margin-bottom: 1.5rem;
			box-shadow: 0 4px 12px rgba(45, 212, 191, 0.3);
		}

		.scoala-nissi-studiu h2.section-title {
			color: var(--header-section);
			font-size: clamp(1.35rem, 1.5vw + 1rem, 2rem);
			font-weight: 700;
			line-height: 1.3;
			margin-bottom: 1rem;
			display: block;
			gap: 0;
		}

		.scoala-nissi-studiu .section-subtitle {
			color: var(--text-secondary);
			font-size: 1.15rem;
			max-width: 650px;
			margin: 0 auto;
		}

		.scoala-nissi-studiu .carousel-container {
			position: relative;
			max-width: 900px;
			margin: 2rem auto;
			background: var(--bg-accent);
			border-radius: 24px;
			padding: 3rem;
			box-shadow: 0 4px 20px var(--shadow);
			overflow: hidden;
		}

		.scoala-nissi-studiu .carousel-wrapper {
			width: 100%;
			overflow: hidden;
			touch-action: pan-y pinch-zoom;
		}

		.scoala-nissi-studiu .carousel-track {
			display: flex;
			width: 100%;
			transition: transform 0.5s ease-in-out;
			will-change: transform;
		}

		.scoala-nissi-studiu .carousel-slide {
			flex: 0 0 100%;
			width: 100%;
			min-width: 0;
			padding: 0;
			display: block !important;
			background: transparent !important;
			color: inherit !important;
			min-height: 0 !important;
			animation: none !important;
		}

		.scoala-nissi-studiu .practice-card-carousel {
			background: white;
			border-radius: 20px;
			padding: 2.5rem;
			box-shadow: 0 2px 12px var(--shadow);
			border: 1px solid rgba(0, 0, 0, 0.04);
		}

		.scoala-nissi-studiu .practice-header-c {
			text-align: center;
			margin-bottom: 2rem;
			padding-bottom: 1.5rem;
			border-bottom: 2px solid var(--bg-accent);
		}

		.scoala-nissi-studiu .practice-number-c {
			display: inline-block;
			background: var(--accent-primary);
			color: white;
			width: 32px;
			height: 32px;
			line-height: 32px;
			border-radius: 50%;
			font-weight: 700;
			font-size: 0.9rem;
			margin-bottom: 0.75rem;
		}

		.scoala-nissi-studiu .practice-title-c {
			color: var(--header-section);
			font-size: clamp(1.15rem, 4vw, 1.75rem);
			font-weight: 700;
			margin-bottom: 0.5rem;
			overflow-wrap: break-word;
			display: block;
		}

		.scoala-nissi-studiu .practice-subtitle-c {
			color: var(--text-secondary);
			font-size: 1rem;
			font-weight: 500;
		}

		.scoala-nissi-studiu .practice-content-c {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(min(100%, 250px), 1fr));
			gap: 1.5rem;
			margin-bottom: 1.5rem;
		}

		.scoala-nissi-studiu .content-block {
			background: var(--bg-main);
			padding: 1.25rem;
			border-radius: 12px;
			border-left: 3px solid var(--accent-primary);
		}

		.scoala-nissi-studiu .content-block:nth-child(2) { border-left-color: var(--accent-cta); }
		.scoala-nissi-studiu .content-block:nth-child(3) { border-left-color: var(--header-light); }
		.scoala-nissi-studiu .content-block:nth-child(4) { border-left-color: var(--text-secondary); }

		.scoala-nissi-studiu .content-label {
			font-size: 0.75rem;
			text-transform: uppercase;
			letter-spacing: 0.5px;
			color: var(--text-secondary);
			font-weight: 700;
			margin-bottom: 0.5rem;
		}

		.scoala-nissi-studiu .content-text {
			font-size: 0.95rem;
			line-height: 1.6;
			color: var(--text-main);
		}

		.scoala-nissi-studiu .content-text strong {
			color: var(--header-section);
		}

		.scoala-nissi-studiu .strategy-box {
			background: linear-gradient(to right, rgba(45, 212, 191, 0.1), rgba(236, 72, 153, 0.05));
			padding: 1.25rem;
			border-radius: 12px;
			margin-top: 1rem;
			text-align: center;
			font-style: italic;
			color: var(--text-secondary);
			font-size: 0.95rem;
		}

		.scoala-nissi-studiu .strategy-box strong {
			color: var(--header-section);
			font-style: normal;
		}

		.scoala-nissi-studiu .carousel-btn {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			background: white;
			border: 2px solid var(--accent-primary);
			color: var(--header-section);
			width: 48px;
			height: 48px;
			border-radius: 50%;
			cursor: pointer;
			font-size: 1.25rem;
			display: flex;
			align-items: center;
			justify-content: center;
			transition: var(--transition);
			box-shadow: 0 2px 8px var(--shadow);
			z-index: 10;
		}

		.scoala-nissi-studiu .carousel-btn:hover {
			background: var(--accent-primary);
			color: white;
		}

		.scoala-nissi-studiu .carousel-btn.prev { left: 1rem; }
		.scoala-nissi-studiu .carousel-btn.next { right: 1rem; }

		.scoala-nissi-studiu .carousel-dots {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
			gap: 0.5rem;
			margin-top: 1.5rem;
		}

		.scoala-nissi-studiu .dot {
			position: relative;
			width: 2.75rem;
			height: 2.75rem;
			border: none;
			padding: 0;
			margin: 0;
			cursor: pointer;
			background: transparent;
			flex-shrink: 0;
		}

		.scoala-nissi-studiu .dot::before {
			content: '';
			position: absolute;
			top: 50%;
			left: 50%;
			width: 10px;
			height: 10px;
			border-radius: 50%;
			background: rgba(107, 76, 127, 0.25);
			transform: translate(-50%, -50%);
			transition: var(--transition);
		}

		.scoala-nissi-studiu .dot.active::before {
			width: 12px;
			height: 12px;
			background: var(--accent-primary);
			box-shadow: 0 0 0 3px rgba(45, 212, 191, 0.3);
		}

		.scoala-nissi-studiu .dot.active {
			width: 2.75rem;
			border-radius: 0;
			background: transparent;
		}

		.scoala-nissi-studiu .carousel-mobile-nav {
			display: none;
			justify-content: center;
			align-items: center;
			gap: 1rem;
			margin-top: 1rem;
		}

		.scoala-nissi-studiu .carousel-mobile-btn {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			min-width: 44px;
			min-height: 44px;
			padding: 0.5rem 1.25rem;
			border: 2px solid var(--accent-primary);
			background: white;
			color: var(--header-section);
			border-radius: 999px;
			font-weight: 600;
			font-size: 0.9rem;
			cursor: pointer;
			transition: var(--transition);
		}

		.scoala-nissi-studiu .carousel-mobile-btn:hover,
		.scoala-nissi-studiu .carousel-mobile-btn:focus-visible {
			background: var(--accent-primary);
			color: white;
			outline: none;
		}

		.scoala-nissi-studiu .carousel-counter {
			font-size: 0.875rem;
			font-weight: 600;
			color: var(--text-secondary);
			min-width: 3.5rem;
			text-align: center;
		}

		.scoala-nissi-studiu .links-section {
			background: white;
			border-radius: 16px;
			padding: 2rem;
			margin-top: 3rem;
			box-shadow: 0 2px 12px var(--shadow);
			border: 1px solid rgba(0, 0, 0, 0.04);
		}

		.scoala-nissi-studiu .links-title {
			color: var(--header-section);
			font-size: 1.25rem;
			font-weight: 700;
			margin-bottom: 1.5rem;
		}

		.scoala-nissi-studiu .links-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(min(100%, 280px), 1fr));
			gap: 1rem;
		}

		.scoala-nissi-studiu .link-card {
			display: flex;
			align-items: flex-start;
			gap: 0.75rem;
			padding: 1rem;
			background: var(--bg-main);
			border-radius: 12px;
			text-decoration: none;
			color: var(--text-main);
			transition: var(--transition);
			border: 1px solid transparent;
			min-width: 0;
		}

		.scoala-nissi-studiu .link-card:hover {
			border-color: var(--accent-primary);
			transform: translateY(-2px);
			box-shadow: 0 4px 12px var(--shadow-hover);
			color: var(--text-main);
		}

		.scoala-nissi-studiu .link-icon {
			width: 40px;
			height: 40px;
			background: var(--accent-primary);
			color: white;
			border-radius: 10px;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 1.25rem;
			flex-shrink: 0;
		}

		.scoala-nissi-studiu .link-content {
			flex: 1;
			min-width: 0;
		}

		.scoala-nissi-studiu .link-content h4 {
			color: var(--header-section);
			font-size: 0.95rem;
			margin-bottom: 0.25rem;
			overflow-wrap: break-word;
		}

		.scoala-nissi-studiu .link-content p {
			font-size: 0.85rem;
			color: var(--text-secondary);
			margin-bottom: 0;
			overflow-wrap: break-word;
		}

		.scoala-nissi-studiu .link-arrow {
			margin-left: auto;
			color: var(--accent-primary);
			font-size: 1.25rem;
			flex-shrink: 0;
			align-self: center;
		}

		.scoala-nissi-studiu .section-divider {
			height: 1px;
			background: linear-gradient(to right, transparent, var(--accent-primary), transparent);
			max-width: 800px;
			margin: 0 auto;
		}

		.scoala-nissi-studiu .factor-category {
			margin-bottom: 3rem;
			background: white;
			border-radius: 20px;
			padding: 2.5rem;
			box-shadow: 0 2px 16px var(--shadow);
			border: 1px solid rgba(0, 0, 0, 0.03);
		}

		.scoala-nissi-studiu .category-header {
			display: flex;
			align-items: center;
			gap: 1rem;
			margin-bottom: 2rem;
			padding-bottom: 1rem;
			border-bottom: 2px solid var(--bg-accent);
		}

		.scoala-nissi-studiu .category-icon {
			width: 48px;
			height: 48px;
			background: linear-gradient(135deg, var(--header-section), var(--header-light));
			color: white;
			border-radius: 12px;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 1.5rem;
			flex-shrink: 0;
		}

		.scoala-nissi-studiu .category-title {
			color: var(--header-section);
			font-size: 1.5rem;
			font-weight: 700;
			margin: 0;
		}

		.scoala-nissi-studiu .factors-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(min(100%, 260px), 1fr));
			gap: 1rem;
			margin-bottom: 1.5rem;
		}

		.scoala-nissi-studiu .factor-item {
			background: var(--bg-main);
			padding: 1.25rem;
			border-radius: 12px;
			border-left: 4px solid var(--accent-primary);
			transition: var(--transition);
		}

		.scoala-nissi-studiu .factor-item:hover {
			transform: translateX(4px);
			box-shadow: 0 4px 12px var(--shadow);
		}

		.scoala-nissi-studiu .factor-item.barrier {
			border-left-color: var(--accent-cta);
		}

		.scoala-nissi-studiu .factor-label {
			font-size: 0.7rem;
			text-transform: uppercase;
			letter-spacing: 0.5px;
			font-weight: 700;
			color: var(--text-secondary);
			margin-bottom: 0.5rem;
		}

		.scoala-nissi-studiu .factor-title {
			font-weight: 700;
			color: var(--header-section);
			margin-bottom: 0.5rem;
			font-size: 1rem;
		}

		.scoala-nissi-studiu .factor-desc {
			font-size: 0.9rem;
			margin-bottom: 0;
		}

		.scoala-nissi-studiu .narrative-block {
			background: linear-gradient(to right, rgba(107, 76, 127, 0.03), rgba(45, 212, 191, 0.03));
			border-left: 4px solid var(--header-light);
			padding: 1.5rem;
			border-radius: 0 12px 12px 0;
			margin-top: 1.5rem;
		}

		.scoala-nissi-studiu .narrative-label {
			color: var(--header-section);
			font-weight: 700;
			font-size: 0.85rem;
			text-transform: uppercase;
			letter-spacing: 0.5px;
			margin-bottom: 0.75rem;
		}

		.scoala-nissi-studiu .narrative-text {
			margin-bottom: 0;
			line-height: 1.8;
			font-size: 0.95rem;
		}

		.scoala-nissi-studiu .narrative-text strong {
			color: var(--header-section);
		}

		.scoala-nissi-studiu em {
			color: var(--text-secondary);
		}

		@media (max-width: 991.98px) {
			.scoala-nissi-studiu .carousel-btn {
				display: none;
			}

			.scoala-nissi-studiu .carousel-mobile-nav {
				display: flex;
			}
		}

		@media (max-width: 767.98px) {
			.scoala-nissi-studiu .nissi-section {
				padding: 2rem 0.75rem;
			}

			.scoala-nissi-studiu .section-header {
				margin-bottom: 2rem;
			}

			.scoala-nissi-studiu h2.section-title {
				font-size: 1.8rem;
				line-height: 1.35;
			}

			.scoala-nissi-studiu .section-subtitle {
				font-size: 1rem;
				padding: 0 0.25rem;
			}

			.scoala-nissi-studiu .carousel-container {
				padding: 1rem 0.75rem 1.25rem;
				margin: 1.5rem 0;
				border-radius: 16px;
			}

			.scoala-nissi-studiu .practice-card-carousel {
				padding: 1.25rem 1rem;
				border-radius: 14px;
			}

			.scoala-nissi-studiu .practice-header-c {
				margin-bottom: 1.25rem;
				padding-bottom: 1rem;
			}

			.scoala-nissi-studiu .practice-subtitle-c {
				font-size: 0.9rem;
			}

			.scoala-nissi-studiu .practice-content-c {
				grid-template-columns: 1fr;
				gap: 1rem;
			}

			.scoala-nissi-studiu .content-block {
				padding: 1rem;
			}

			.scoala-nissi-studiu .strategy-box {
				font-size: 0.875rem;
				text-align: left;
			}

			.scoala-nissi-studiu .links-section {
				padding: 1.25rem 1rem;
				margin-top: 2rem;
				border-radius: 14px;
			}

			.scoala-nissi-studiu .links-grid,
			.scoala-nissi-studiu .factors-grid {
				grid-template-columns: 1fr;
			}

			.scoala-nissi-studiu .link-card {
				flex-wrap: nowrap;
			}

			.scoala-nissi-studiu .factor-category {
				padding: 1.25rem 1rem;
				margin-bottom: 2rem;
				border-radius: 14px;
			}

			.scoala-nissi-studiu .category-header {
				flex-wrap: wrap;
				margin-bottom: 1.25rem;
			}

			.scoala-nissi-studiu .category-title {
				font-size: 1.2rem;
			}

			.scoala-nissi-studiu .factor-item:hover {
				transform: none;
			}

			.scoala-nissi-studiu .narrative-block {
				padding: 1rem;
			}

			.scoala-nissi-studiu .narrative-text {
				font-size: 0.9rem;
				line-height: 1.65;
			}
		}

		@media (max-width: 575.98px) {
			.scoala-nissi-studiu h2.section-title {
				font-size: 1.5rem;
			}

			.scoala-nissi-studiu .section-number {
				width: 48px;
				height: 48px;
				font-size: 1.25rem;
			}

			.scoala-nissi-studiu .carousel-container {
				padding: 0.75rem 0.5rem 1rem;
			}

			.scoala-nissi-studiu .carousel-mobile-btn {
				padding: 0.5rem 1rem;
				font-size: 0.85rem;
			}

			.scoala-nissi-studiu .link-arrow {
				display: none;
			}
		}

		@media (prefers-reduced-motion: reduce) {
			.scoala-nissi-studiu .fade-in {
				opacity: 1;
				transform: none;
				transition: none;
			}

			.scoala-nissi-studiu .carousel-track {
				transition: none;
			}
		}
	</style>

	<section class="nissi-section nissi-section-5" aria-labelledby="nissi-title-5">
		<div class="section-header fade-in">
			<div class="section-number">5</div>
			<h2 id="nissi-title-5" class="section-title">Schimbări Pedagogice</h2>
			<p class="section-subtitle">Practici observate la clasă care redefinesc rolul profesorului și elevului în procesul educațional</p>
		</div>

		<div class="carousel-container fade-in">
			<button type="button" class="carousel-btn prev" data-nissi-carousel-dir="-1" aria-label="Practica anterioară">‹</button>

			<div class="carousel-wrapper" id="nissi-studiu-carousel-wrapper">
				<div class="carousel-track" id="nissi-studiu-carousel-track">
					<div class="carousel-slide">
						<div class="practice-card-carousel">
							<div class="practice-header-c">
								<div class="practice-number-c">1</div>
								<h3 class="practice-title-c">Lucrarea Creativă (Loovtöö)</h3>
								<p class="practice-subtitle-c">Clasa a 8-a • Pilonul autonomiei și managementului de proiect</p>
							</div>
							<div class="practice-content-c">
								<div class="content-block">
									<div class="content-label">Descrierea practicii</div>
									<div class="content-text">Proiect obligatoriu transcurricular (cercetare, artă sau muzică) cu <strong>jurnal/blog</strong> și prezentare publică de 10 minute. Include parte teoretică și practică.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul profesorului</div>
									<div class="content-text"><strong>Mentor și coordonator</strong> — ajută la alegerea temei, monitorizează planul, recomandă surse, oferă feedback continuu, nu doar evaluare finală.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul elevului</div>
									<div class="content-text"><strong>Manager de proiect autonom</strong> — planifică, gestionează timpul, respectă etica informațională (anti-plagiat), creează produse multimedia.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Coerență strategică</div>
									<div class="content-text">Susține viziunea <em>„ennastjuhtivad õpilased"</em> (elevi care se autoconduc) și învățarea pe tot parcursul vieții.</div>
								</div>
							</div>
							<div class="strategy-box"><strong>Impact:</strong> Transformarea evaluării din examen standardizat în demonstrare autentică a competențelor.</div>
						</div>
					</div>

					<div class="carousel-slide">
						<div class="practice-card-carousel">
							<div class="practice-header-c">
								<div class="practice-number-c">2</div>
								<h3 class="practice-title-c">Testarea Prototipurilor (KidsLikeUs)</h3>
								<p class="practice-subtitle-c">Clasele 2-4 • Tehnologie pentru sănătate mintală</p>
							</div>
							<div class="practice-content-c">
								<div class="content-block">
									<div class="content-label">Descrierea practicii</div>
									<div class="content-text">Elevii testează <strong>prototipuri de jocuri tehnologice</strong> pentru starea de bine. Include <strong>Grădina Senzorială</strong> — spațiu cu natură și elemente tehnice pentru atenuarea stresului.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul profesorului</div>
									<div class="content-text">Participant activ la ateliere, observă impactul asupra climatului din clasă, facilitează feedback între elevi și dezvoltatori.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul elevului</div>
									<div class="content-text"><strong>Coproducător și tester</strong> — oferă feedback autentic despre cum tehnologia îi influențează starea emoțională.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Coerență strategică</div>
									<div class="content-text">Aliniată cu valoarea <strong>„Hoolivus"</strong> (grijă) și obiectivul strategic 2025-2027 de îmbunătățire a motivației.</div>
								</div>
							</div>
							<div class="strategy-box"><strong>Inovație:</strong> Copiii ca experți în propria bunăstare, contribuind la designul tehnologiei educaționale.</div>
						</div>
					</div>

					<div class="carousel-slide">
						<div class="practice-card-carousel">
							<div class="practice-header-c">
								<div class="practice-number-c">3</div>
								<h3 class="practice-title-c">Integrarea Transversală a Informaticii</h3>
								<p class="practice-subtitle-c">Clasele 5+ • Competențe digitale în toate disciplinele</p>
							</div>
							<div class="practice-content-c">
								<div class="content-block">
									<div class="content-label">Descrierea practicii</div>
									<div class="content-text"><strong>Excel</strong> la matematică (vizualizare date), <strong>podcast-uri</strong> la muzică, <strong>referate digitale</strong> la limbi, <strong>Canva/Scratch</strong> la arte și științe.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul profesorului</div>
									<div class="content-text"><strong>Designer de sarcini complexe</strong> — integrează MS365, Canva, Scratch în lecții, creează activități cross-curriculare.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul elevului</div>
									<div class="content-text">Utilizator <strong>responsabil, critic și cu scop precis</strong> — trece de la consumator la creator de conținut digital.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Coerență strategică</div>
									<div class="content-text">Moto-ul <em>„Sild sinu tulevikku"</em> (Punte către viitorul tău) — pregătirea pentru societatea digitală prin competențe aplicate.</div>
								</div>
							</div>
							<div class="strategy-box"><strong>Paradigmă:</strong> Informatica nu e materie separată, ci limbaj al tuturor disciplinelor.</div>
						</div>
					</div>

					<div class="carousel-slide">
						<div class="practice-card-carousel">
							<div class="practice-header-c">
								<div class="practice-number-c">4</div>
								<h3 class="practice-title-c">Zilele Învățării Independente</h3>
								<p class="practice-subtitle-c"><em>Iseseisva õppija päevad</em> • Toate ciclurile</p>
							</div>
							<div class="practice-content-c">
								<div class="content-block">
									<div class="content-label">Descrierea practicii</div>
									<div class="content-text">Zile specifice în calendar (ex: 13 nov, 10 apr) cu <strong>sarcini asincrone</strong>, fără prezență fizică obligatorie. Elevul își gestionează propriul timp și ritm.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul profesorului</div>
									<div class="content-text">Planifică activități realizable independent, oferă instrucțiuni clare via <strong>eKool</strong> sau <strong>Teams</strong>, disponibilitate pentru întrebări punctuale.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul elevului</div>
									<div class="content-text">Își <strong>planifică propria zi</strong>, exersează auto-disciplina, accesează resurse conform ritmului propriu, reflectează asupra procesului.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Coerență strategică</div>
									<div class="content-text">Dezvoltarea <em>õpioskused</em> (abilități de învățare) și transformarea elevului în cursant independent (lifelong learning).</div>
								</div>
							</div>
							<div class="strategy-box"><strong>Autonomie:</strong> Trecerea de la supraveghere constantă la responsabilizare și încredere în capacitățile elevului.</div>
						</div>
					</div>

					<div class="carousel-slide">
						<div class="practice-card-carousel">
							<div class="practice-header-c">
								<div class="practice-number-c">5</div>
								<h3 class="practice-title-c">Utilizarea Etică a Inteligenței Artificiale</h3>
								<p class="practice-subtitle-c">Transversal • AI ca asistent, nu înlocuitor</p>
							</div>
							<div class="practice-content-c">
								<div class="content-block">
									<div class="content-label">Descrierea practicii</div>
									<div class="content-text">Abordare deschisă cu reguli clare: AI permis ca suport, dar <strong>menționarea obligatorie</strong> în lucrări. Transparență totală și prevenirea plagiatului.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul profesorului</div>
									<div class="content-text"><strong>Ghid etic</strong> — explorează AI pentru eficientizarea propriei munci, ghidează elevii în evaluarea critică a surselor generate.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Rolul elevului</div>
									<div class="content-text">Utilizare conștientă pentru <strong>organizarea ideilor</strong>, menține integritatea academică, citează utilizarea AI ca sursă asistență.</div>
								</div>
								<div class="content-block">
									<div class="content-label">Coerență strategică</div>
									<div class="content-text">Focus pe <strong>gândirea critică</strong> și alfabetizarea media — pregătirea pentru viitorul digital prin responsabilitate etică.</div>
								</div>
							</div>
							<div class="strategy-box"><strong>Viziune:</strong> AI ca instrument de amplificare a inteligenței umane, nu de înlocuire a ei.</div>
						</div>
					</div>
				</div>
			</div>

			<button type="button" class="carousel-btn next" data-nissi-carousel-dir="1" aria-label="Practica următoare">›</button>

			<div class="carousel-dots" id="nissi-studiu-carousel-dots" role="tablist" aria-label="Navigare practici pedagogice">
				<button type="button" class="dot active" data-nissi-carousel-slide="0" aria-label="Practica 1" aria-selected="true" role="tab"></button>
				<button type="button" class="dot" data-nissi-carousel-slide="1" aria-label="Practica 2" aria-selected="false" role="tab"></button>
				<button type="button" class="dot" data-nissi-carousel-slide="2" aria-label="Practica 3" aria-selected="false" role="tab"></button>
				<button type="button" class="dot" data-nissi-carousel-slide="3" aria-label="Practica 4" aria-selected="false" role="tab"></button>
				<button type="button" class="dot" data-nissi-carousel-slide="4" aria-label="Practica 5" aria-selected="false" role="tab"></button>
			</div>

			<div class="carousel-mobile-nav" aria-hidden="false">
				<button type="button" class="carousel-mobile-btn" data-nissi-carousel-dir="-1" aria-label="Practica anterioară">‹ Anterior</button>
				<span class="carousel-counter" id="nissi-studiu-carousel-counter" aria-live="polite">1 / 5</span>
				<button type="button" class="carousel-mobile-btn" data-nissi-carousel-dir="1" aria-label="Practica următoare">Următor ›</button>
			</div>
		</div>

		<div class="links-section fade-in">
			<h3 class="links-title">🔗 Resurse oficiale Școala Nissi</h3>
			<div class="links-grid">
				<a href="https://nissikool.ee/" target="_blank" class="link-card" rel="noopener noreferrer">
					<div class="link-icon">🏫</div>
					<div class="link-content">
						<h4>Website Oficial Nissi Põhikool</h4>
						<p>nissikool.ee - Portalul oficial al școlii cu motto-ul „Sild sinu tulevikku" (Punte către viitorul tău)</p>
					</div>
					<span class="link-arrow">→</span>
				</a>
				<a href="https://nissikool.edupage.org/" target="_blank" class="link-card" rel="noopener noreferrer">
					<div class="link-icon" style="background: var(--accent-cta);">📋</div>
					<div class="link-content">
						<h4>EduPage Nissi Kool</h4>
						<p>Platforma educatională a școlii: orar, note, comunicări și resurse digitale pentru elevi și părinți</p>
					</div>
					<span class="link-arrow">→</span>
				</a>
				<a href="https://nissikool.ee/meiekool/who-we-are/" target="_blank" class="link-card" rel="noopener noreferrer">
					<div class="link-icon" style="background: var(--header-light);">🌍</div>
					<div class="link-content">
						<h4>Prezentare în Engleză (Who We Are)</h4>
						<p>Informații despre școala mică de la țară cu 152 elevi și 23 profesori, fondată în 1917</p>
					</div>
					<span class="link-arrow">→</span>
				</a>
				<a href="https://et.wikipedia.org/wiki/Nissi_P%C3%B5hikool" target="_blank" class="link-card" rel="noopener noreferrer">
					<div class="link-icon" style="background: #8B5CF6;">📚</div>
					<div class="link-content">
						<h4>Istoricul Școlii (Wikipedia)</h4>
						<p>Istoria completă: înființată în 1917 de Nissi Hariduse Selts, evoluție de la școală primară la gimnaziu</p>
					</div>
					<span class="link-arrow">→</span>
				</a>
				<a href="https://nissikool.ee/meiekool/ajalugu/" target="_blank" class="link-card" rel="noopener noreferrer">
					<div class="link-icon" style="background: #14B8A6;">⏳</div>
					<div class="link-content">
						<h4>Istoricul detaliat (Centenar 2017)</h4>
						<p>Pagina dedicată istoriei școlii și celebrării a 100 de ani de la înființare în 2017</p>
					</div>
					<span class="link-arrow">→</span>
				</a>
				<a href="https://nissikool.ee/koolielu/galerii/videoteek/" target="_blank" class="link-card" rel="noopener noreferrer">
					<div class="link-icon" style="background: #F59E0B;">🎥</div>
					<div class="link-content">
						<h4>Videoteca Școlii</h4>
						<p>Colecție de filmări și materiale video despre viața și activitățile de la Nissi Kool</p>
					</div>
					<span class="link-arrow">→</span>
				</a>
			</div>
		</div>
	</section>

	<div class="section-divider" aria-hidden="true"></div>

	<section class="nissi-section nissi-section-6" aria-labelledby="nissi-title-6">
		<div class="section-header fade-in">
			<div class="section-number" style="background: linear-gradient(135deg, var(--header-section), var(--header-light)); color: white;">6</div>
			<h2 id="nissi-title-6" class="section-title">Factori Facilitatori și Bariere</h2>
			<p class="section-subtitle">Dimensiuni culturale, organizaționale, tehnice și pedagogice care influențează succesul transformării la Nissi Kool</p>
		</div>

		<article class="factor-category fade-in">
			<div class="category-header">
				<div class="category-icon">🎭</div>
				<h3 class="category-title">Dimensiunea Culturală</h3>
			</div>
			<div class="factors-grid">
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Cultura școlii mici</h4>
					<p class="factor-desc">Dimensiunea redusă (~152 elevi) favorizează comunicarea strânsă și schimbul rapid de experiențe între colegi în comunitatea rurală din Riisipere.</p>
				</div>
				<div class="factor-item barrier">
					<div class="factor-label">Barieră</div>
					<h4 class="factor-title">Rezistența la schimbare</h4>
					<p class="factor-desc">Mentalitatea unor profesori confortabili cu metodele tradiționale: <em>„Nu am nevoie de asta, mă simt confortabil"</em>.</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Echilibrul tradiție-inovație</h4>
					<p class="factor-desc">Misiunea „Sild sinu tulevikku" valorizează simultan moștenirea culturală (fondată 1917, centenar 2017) și strategiile moderne.</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Deschiderea internațională</h4>
					<p class="factor-desc">Participarea în programe precum DigiProf-C și KidsLikeUs demonstrează o cultură orientată spre învățare continuă.</p>
				</div>
			</div>
			<div class="narrative-block">
				<div class="narrative-label">📝 Analiză narativă</div>
				<p class="narrative-text">Cultura organizațională la Nissi este definită de un spirit comunitar puternic, unde <strong>„meietunne"</strong> (sentimentul de „noi") este cultivat prin evenimente tradiționale și colaborare strânsă. Totuși, succesul digitalizării a depins de capacitatea conducerii de a explica profesorilor <strong>de ce</strong> este necesară inovația, combaterea scepticismului făcându-se prin pași mici și beneficii imediate.</p>
			</div>
		</article>

		<article class="factor-category fade-in">
			<div class="category-header">
				<div class="category-icon">⚙️</div>
				<h3 class="category-title">Dimensiunea Organizațională</h3>
			</div>
			<div class="factors-grid">
				<div class="factor-item">
					<div class="factor-label">Facilitator Cheie</div>
					<h4 class="factor-title">Rolul Tehnologului Educațional</h4>
					<p class="factor-desc">Specialist cu 0.6 normă care oferă sprijin zilnic, planifică formări și gestionează achizițiile tehnice (inclusiv MS365 și eKool).</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Ghidul Angajatului (Employee Handbook)</h4>
					<p class="factor-desc">Document clar cu rutinele digitale (conturi, comunicare, platforme) care reduce confuzia pentru noii angajați la Nissi Kool.</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Guvernanța bazată pe date</h4>
					<p class="factor-desc">Utilizarea <em>Digipeegel</em> (Oglinda Digitală) pentru evaluarea maturității digitale și planificare strategică la nivelul școlii.</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Management participativ</h4>
					<p class="factor-desc">Cel puțin 25% din personal participă activ la elaborarea planurilor de dezvoltare IT, asigurând asumarea deciziilor.</p>
				</div>
			</div>
			<div class="narrative-block">
				<div class="narrative-label">📝 Analiză narativă</div>
				<p class="narrative-text">Din punct de vedere organizațional, Nissi a trecut de la o înțelegere teoretică a digitalizării (în 2017) la o <strong>implementare sistemică</strong>. Structurile de comunicare, cum ar fi grupul de lucru „Nissi Teachers" în MS Teams și calendarul comun pe EduPage, asigură un flux informațional transparent.</p>
			</div>
		</article>

		<article class="factor-category fade-in">
			<div class="category-header">
				<div class="category-icon">💻</div>
				<h3 class="category-title">Dimensiunea Tehnică</h3>
			</div>
			<div class="factors-grid">
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Infrastructură modernă</h4>
					<p class="factor-desc">Rețea Wi-Fi stabilă în toată școala (Nissi tee 33), cablu optic și laborator de informatică reînnoit periodic.</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Ecosistem Cloud MS365</h4>
					<p class="factor-desc">Cont personal @nissikool.ee pentru fiecare elev și profesor; lucrul în cloud (OneDrive, Teams) este practică cotidiană.</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Hardware diversificat</h4>
					<p class="factor-desc">Tablete mobile, echipamente de robotică (mBot, LEGO EV3) pe lângă laboratorul fix de informatică.</p>
				</div>
				<div class="factor-item barrier">
					<div class="factor-label">Barieră</div>
					<h4 class="factor-title">Abundența de platforme</h4>
					<p class="factor-desc">Variety copleșitoare de soluții estoniene (Eduten, Opiq, eKool) care poate crea confuzie fără selecție critică.</p>
				</div>
			</div>
			<div class="narrative-block">
				<div class="narrative-label">📝 Analiză narativă</div>
				<p class="narrative-text">Deși infrastructura este acum un punct forte, în 2017 școala a identificat bariere tehnice precum <strong>Wi-Fi-ul insuficient</strong> pentru utilizarea simultană în toate sălile. Rezolvarea acestor probleme de bază a fost o precondiție pentru integrarea pedagogică avansată la Nissi.</p>
			</div>
		</article>

		<article class="factor-category fade-in">
			<div class="category-header">
				<div class="category-icon">📚</div>
				<h3 class="category-title">Dimensiunea Pedagogică</h3>
			</div>
			<div class="factors-grid">
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Învățarea bazată pe proiecte (PBL)</h4>
					<p class="factor-desc">Elevii sunt încurajați să fie autonomi, alegându-și temele și instrumentele digitale pentru proiecte (inclusiv Loovtöö).</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Lucrarea Creativă (Loovtöö)</h4>
					<p class="factor-desc">Metodă obligatorie în clasa a 8-a care integrează competențele digitale (cercetare, multimedia) într-un produs finit.</p>
				</div>
				<div class="factor-item">
					<div class="factor-label">Facilitator</div>
					<h4 class="factor-title">Integrare interdisciplinară</h4>
					<p class="factor-desc">Competențele digitale sunt „lăsate" în sarcina tuturor disciplinelor (Excel la matematică, podcast-uri la muzică).</p>
				</div>
				<div class="factor-item barrier">
					<div class="factor-label">Barieră depășită</div>
					<h4 class="factor-title">Eșecuri asumate ca lecții</h4>
					<p class="factor-desc">Abandonarea platformei Padlet după ce s-a constatat că nu este agreată de echipa Nissi — nu se folosește tehnologia doar pentru că este „cool".</p>
				</div>
			</div>
			<div class="narrative-block">
				<div class="narrative-label">📝 Analiză narativă</div>
				<p class="narrative-text">Schimbarea pedagogică la Nissi este vizibilă prin mutarea focusului de la <strong>„dispozitiv"</strong> la <strong>„abilități de învățare"</strong>. O barieră persistentă rămâne dificultatea de a preda eficient „abilitățile de a învăța" (self-directed learning) într-un mediu digital, provocare adresată prin parteneriatul cu Universitatea din Tallinn (Tallinna Ülikool).</p>
			</div>
		</article>
	</section>

	<script>
		(function () {
			const root = document.getElementById('scoala-nissi-studiu');
			if (!root) {
				return;
			}

			let currentSlide = 0;
			const track = root.querySelector('#nissi-studiu-carousel-track');
			const wrapper = root.querySelector('#nissi-studiu-carousel-wrapper');
			const dots = root.querySelectorAll('.dot');
			const counter = root.querySelector('#nissi-studiu-carousel-counter');
			const totalSlides = track ? track.children.length : 0;

			function updateCarousel() {
				if (!track || !totalSlides) {
					return;
				}
				track.style.transform = 'translate3d(-' + (currentSlide * 100) + '%, 0, 0)';
				dots.forEach(function (dot, index) {
					const isActive = index === currentSlide;
					dot.classList.toggle('active', isActive);
					dot.setAttribute('aria-selected', isActive ? 'true' : 'false');
				});
				if (counter) {
					counter.textContent = (currentSlide + 1) + ' / ' + totalSlides;
				}
			}

			function moveCarousel(direction) {
				if (!totalSlides) {
					return;
				}
				currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
				updateCarousel();
			}

			function goToSlide(index) {
				if (index < 0 || index >= totalSlides) {
					return;
				}
				currentSlide = index;
				updateCarousel();
			}

			root.querySelectorAll('[data-nissi-carousel-dir]').forEach(function (button) {
				button.addEventListener('click', function () {
					moveCarousel(parseInt(button.getAttribute('data-nissi-carousel-dir'), 10));
				});
			});

			root.querySelectorAll('[data-nissi-carousel-slide]').forEach(function (button) {
				button.addEventListener('click', function () {
					goToSlide(parseInt(button.getAttribute('data-nissi-carousel-slide'), 10));
				});
			});

			const swipeTarget = wrapper || track;
			if (swipeTarget) {
				let touchStartX = 0;
				let touchStartY = 0;

				swipeTarget.addEventListener('touchstart', function (e) {
					if (!e.changedTouches.length) {
						return;
					}
					touchStartX = e.changedTouches[0].screenX;
					touchStartY = e.changedTouches[0].screenY;
				}, { passive: true });

				swipeTarget.addEventListener('touchend', function (e) {
					if (!e.changedTouches.length) {
						return;
					}
					const touchEndX = e.changedTouches[0].screenX;
					const touchEndY = e.changedTouches[0].screenY;
					const diffX = touchStartX - touchEndX;
					const diffY = touchStartY - touchEndY;

					if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 40) {
						moveCarousel(diffX > 0 ? 1 : -1);
					}
				}, { passive: true });
			}

			updateCarousel();

			window.addEventListener('resize', updateCarousel);

			const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
			const observer = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('visible');
						observer.unobserve(entry.target);
					}
				});
			}, {
				threshold: prefersReducedMotion ? 0 : 0.05,
				rootMargin: '0px 0px 0px 0px'
			});

			root.querySelectorAll('.fade-in').forEach(function (el) {
				if (prefersReducedMotion) {
					el.classList.add('visible');
					return;
				}
				observer.observe(el);
			});
		})();
	</script>
</div>
