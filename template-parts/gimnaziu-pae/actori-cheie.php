<?php
/**
 * Secțiunea 3.1 – Rolurile actorilor-cheie.
 *
 * @package Digital_Accelerator
 */
?>
<div class="pae-actor">
	<h3 class="pae-actor-title h5 fw-semibold d-flex align-items-center gap-2 mb-4">
		<svg class="pae-actor-title-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
		</svg>
		3.1. Rolurile actorilor-cheie
	</h3>

	<div class="row g-4 mb-5">
		<div class="col-md-6">
			<div class="pae-actor-role pae-actor-role--mgmt h-100">
				<h4 class="h6 fw-bold mb-2">1. Echipa managerială</h4>
				<p class="small text-body-secondary mb-0">Liderii instituției (directorul și adjuncții) acționează ca facilitatori strategici. Aceștia prioritizează investițiile în tehnologie și elimină barierele birocratice, protejând timpul profesorilor pentru activități pedagogice autentice. Deciziile sunt fundamentate pe date (eKool, Digital Mirror), dar sunt implementate cu o flexibilitate ridicată, bazată pe încrederea în profesioniști.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="pae-actor-role pae-actor-role--tech h-100">
				<h4 class="h6 fw-bold mb-2">2. Tehnologul educațional</h4>
				<p class="small text-body-secondary mb-0">Reprezintă liantul dintre viziune și sala de clasă. Identifică nevoile de formare prin dialog direct și observare, oferind mentorat personalizat. Tehnologul coordonează pilotarea inovațiilor (ex. AI, robotică) și acționează ca un motor al schimbării, încurajând cadrele didactice să experimenteze fără teama de eșec.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="pae-actor-role pae-actor-role--it h-100">
				<h4 class="h6 fw-bold mb-2">3. Specialistul IT</h4>
				<p class="small text-body-secondary mb-0">Asigură o „infrastructură invizibilă” și stabilă. Se concentrează pe securitatea cibernetică, gestionarea fluxurilor de date etice (GDPR) și optimizarea sistemelor de gestiune școlară. Prin stabilitatea oferită, acesta elimină barierele tehnice, permițând profesorilor să utilizeze resursele digitale fără grija defecțiunilor sau a breșelor de securitate.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="pae-actor-role pae-actor-role--teachers h-100">
				<h4 class="h6 fw-bold mb-2">4. Comisiile metodice</h4>
				<p class="small text-body-secondary mb-0">Sunt celule de inovare orizontală cu autonomie decizională ridicată. Profesorii decid colectiv software-ul și metodele specifice fiecărei discipline, actualizând curricula în funcție de evoluția tehnologică. Leadershipul este de tip „peer-to-peer”, favorizând partajarea voluntară a lecțiilor digitale și a bunelor practici.</p>
			</div>
		</div>
		<div class="col-12">
			<div class="pae-actor-role pae-actor-role--students">
				<h4 class="h6 fw-bold mb-2">5. Consiliul elevilor</h4>
				<p class="small text-body-secondary mb-0">Elevii participă activ la guvernare ca parteneri în inovație. Prin echipe multidisciplinare („Dream Teams”), aceștia realizează proiecte cu impact real, precum turul virtual 360° sau studiul media. Ei oferă feedback critic managementului, asigurând că direcțiile de dezvoltare ale școlii răspund nevoilor generației lor și provocărilor viitorului.</p>
			</div>
		</div>
	</div>

	<div class="pae-actor-diagram rounded-4 p-3 p-md-4 mb-4" aria-label="Diagramă relațională a actorilor-cheie">
		<svg viewBox="0 0 800 500" class="w-100 h-auto" role="img" aria-labelledby="pae-actor-diagram-title">
			<title id="pae-actor-diagram-title">Relațiile dintre viziunea digitală PAE și actorii instituționali</title>
			<defs>
				<marker id="pae-actor-arrow" markerWidth="10" markerHeight="10" refX="5" refY="5" orient="auto">
					<path d="M0,0 L10,5 L0,10 Z" fill="#bdc1c6"></path>
				</marker>
				<filter id="pae-actor-shadow" x="-20%" y="-20%" width="140%" height="140%">
					<feDropShadow dx="0" dy="2" stdDeviation="3" flood-opacity="0.1"></feDropShadow>
				</filter>
			</defs>

			<path d="M400 250 L180 160" class="pae-actor-connection" marker-end="url(#pae-actor-arrow)"></path>
			<path d="M400 250 L620 160" class="pae-actor-connection" marker-end="url(#pae-actor-arrow)"></path>
			<path d="M400 250 L180 340" class="pae-actor-connection" marker-end="url(#pae-actor-arrow)"></path>
			<path d="M400 250 L620 340" class="pae-actor-connection" marker-end="url(#pae-actor-arrow)"></path>
			<path d="M400 250 L400 120" class="pae-actor-connection" marker-end="url(#pae-actor-arrow)"></path>

			<g class="pae-actor-node">
				<rect x="300" y="215" width="200" height="70" rx="15" fill="#202124" filter="url(#pae-actor-shadow)"></rect>
				<text x="400" y="245" text-anchor="middle" fill="white" font-weight="600" font-size="14">VIZIUNEA DIGITALĂ PAE</text>
				<text x="400" y="265" text-anchor="middle" fill="#9ca3af" font-size="12">Agilitate &amp; Pedagogie</text>
			</g>

			<g class="pae-actor-node">
				<circle cx="150" cy="150" r="45" fill="#1a73e8" filter="url(#pae-actor-shadow)"></circle>
				<text x="150" y="153" text-anchor="middle" fill="white" font-weight="600" font-size="10">MANAGEMENT</text>
			</g>
			<g class="pae-actor-node">
				<circle cx="400" cy="80" r="45" fill="#00897b" filter="url(#pae-actor-shadow)"></circle>
				<text x="400" y="83" text-anchor="middle" fill="white" font-weight="600" font-size="10">TEHNOLOG ED.</text>
			</g>
			<g class="pae-actor-node">
				<circle cx="650" cy="150" r="45" fill="#8e24aa" filter="url(#pae-actor-shadow)"></circle>
				<text x="650" y="153" text-anchor="middle" fill="white" font-weight="600" font-size="10">PROFESORI</text>
			</g>
			<g class="pae-actor-node">
				<circle cx="150" cy="350" r="45" fill="#d93025" filter="url(#pae-actor-shadow)"></circle>
				<text x="150" y="353" text-anchor="middle" fill="white" font-weight="600" font-size="10">ELEVI</text>
			</g>
			<g class="pae-actor-node">
				<circle cx="650" cy="350" r="45" fill="#f9ab00" filter="url(#pae-actor-shadow)"></circle>
				<text x="650" y="353" text-anchor="middle" fill="white" font-weight="600" font-size="10">SPECIALIST IT</text>
			</g>
		</svg>
	</div>

	<div class="pae-actor-conclusion d-flex flex-wrap gap-2 align-items-start p-4 rounded-3 border small text-body-secondary fst-italic mb-0">
		<strong class="text-primary fst-normal">CONCLUZIE:</strong>
		<span>Guvernanța la Pae funcționează ca un flux circular, unde feedback-ul elevilor și profesorilor este integrat rapid de tehnolog în strategia managerială, asigurând o evoluție constantă a mediului digital.</span>
	</div>
</div>
