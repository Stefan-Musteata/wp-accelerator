<?php
/**
 * 3.2 – Dinamica procesului decizional.
 *
 * @package Digital_Accelerator
 */
?>
<div class="pae-decizie card border shadow-sm rounded-4 p-4 p-md-5">
	<div class="text-center mb-4 mb-md-5">
		<h3 class="h5 fw-bold text-body mb-2">3.2. Dinamica procesului decizional</h3>
		<p class="text-muted text-uppercase small fw-bold mb-0" style="letter-spacing: 0.2em; font-size: 0.625rem;">Model de agilitate distribuită la Pae Gümnaasium</p>
	</div>

	<svg viewBox="0 0 800 500" class="w-100 h-auto pae-decizie-svg" role="img" aria-labelledby="pae-decizie-svg-title">
		<title id="pae-decizie-svg-title">Dinamica procesului decizional — model de agilitate distribuită</title>

		<circle cx="400" cy="250" r="230" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1" class="pae-decizie-bg-pulse"></circle>
		<text x="400" y="470" text-anchor="middle" fill="#94a3b8" font-size="10" font-weight="bold" letter-spacing="0.2em">CADRUL DE FACILITARE MANAGERIALĂ</text>

		<path d="M400 250 Q 250 150 150 180" class="pae-decizie-pulse pae-decizie-pulse--green" fill="none" stroke="#10b981" stroke-width="2" opacity="0.4"></path>
		<path d="M400 250 Q 400 50 650 150" class="pae-decizie-pulse pae-decizie-pulse--indigo" fill="none" stroke="#6366f1" stroke-width="2" opacity="0.4"></path>
		<path d="M400 250 Q 600 400 550 350" class="pae-decizie-pulse pae-decizie-pulse--rose" fill="none" stroke="#f43f5e" stroke-width="2" opacity="0.4"></path>
		<path d="M400 250 Q 200 400 250 350" class="pae-decizie-pulse pae-decizie-pulse--amber" fill="none" stroke="#f59e0b" stroke-width="2" opacity="0.4"></path>

		<g class="pae-decizie-node">
			<circle cx="400" cy="250" r="65" fill="#1e293b"></circle>
			<text x="400" y="245" text-anchor="middle" fill="white" font-weight="bold" font-size="12">FLUXURI</text>
			<text x="400" y="262" text-anchor="middle" fill="#94a3b8" font-size="10">DE DATE (eKool)</text>
		</g>

		<g class="pae-decizie-node">
			<circle cx="150" cy="180" r="55" fill="#ecfdf5" stroke="#10b981" stroke-width="2"></circle>
			<text x="150" y="175" text-anchor="middle" fill="#065f46" font-weight="bold" font-size="11">ADAPTARE</text>
			<text x="150" y="190" text-anchor="middle" fill="#065f46" font-size="9">PEDAGOGICĂ</text>
			<circle cx="150" cy="210" r="12" fill="#10b981"></circle>
			<text x="150" y="214" text-anchor="middle" fill="white" font-weight="bold" font-size="9">P</text>
		</g>

		<g class="pae-decizie-node">
			<circle cx="650" cy="150" r="60" fill="#eef2ff" stroke="#6366f1" stroke-width="2"></circle>
			<text x="650" y="145" text-anchor="middle" fill="#3730a3" font-weight="bold" font-size="11">ACTUALIZARE</text>
			<text x="650" y="160" text-anchor="middle" fill="#3730a3" font-size="9">CURRICULARĂ</text>
			<circle cx="650" cy="180" r="12" fill="#6366f1"></circle>
			<text x="650" y="184" text-anchor="middle" fill="white" font-weight="bold" font-size="9">C</text>
		</g>

		<g class="pae-decizie-node">
			<circle cx="550" cy="350" r="55" fill="#fff1f2" stroke="#f43f5e" stroke-width="2"></circle>
			<text x="550" y="345" text-anchor="middle" fill="#9f1239" font-weight="bold" font-size="11">INOVARE</text>
			<text x="550" y="360" text-anchor="middle" fill="#9f1239" font-size="9">PARTICIPATIVĂ</text>
			<circle cx="550" cy="380" r="12" fill="#f43f5e"></circle>
			<text x="550" y="384" text-anchor="middle" fill="white" font-weight="bold" font-size="9">E</text>
		</g>

		<g class="pae-decizie-node">
			<circle cx="250" cy="350" r="50" fill="#fffbeb" stroke="#f59e0b" stroke-width="2"></circle>
			<text x="250" y="345" text-anchor="middle" fill="#92400e" font-weight="bold" font-size="11">VALIDARE</text>
			<text x="250" y="360" text-anchor="middle" fill="#92400e" font-size="9">STRATEGICĂ</text>
			<circle cx="250" cy="380" r="12" fill="#f59e0b"></circle>
			<text x="250" y="384" text-anchor="middle" fill="white" font-weight="bold" font-size="9">M</text>
		</g>

		<g transform="translate(40, 420)">
			<text x="0" y="0" fill="#94a3b8" font-size="9" font-weight="bold">LEGENDA COMPETENȚE:</text>
			<text x="0" y="15" fill="#10b981" font-size="8">P - Profesor (Autonomie)</text>
			<text x="0" y="25" fill="#6366f1" font-size="8">C - Comisii (Colaborare)</text>
			<text x="0" y="35" fill="#f43f5e" font-size="8">E - Elevi (Dream Teams)</text>
			<text x="0" y="45" fill="#f59e0b" font-size="8">M - Management (Facilitare)</text>
		</g>
	</svg>

	<div class="pae-decizie-note d-flex gap-3 p-4 rounded-3 mt-4 mb-0">
		<svg class="flex-shrink-0 text-primary" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
		</svg>
		<p class="small text-white fst-italic lh-base mb-0">
			Decizia la Pae Gümnaasium funcționează ca un flux circular, nu liniar. Datele colectate declanșează reacții la nivelul cel mai apropiat de procesul educațional. Managementul nu intervine pentru a bloca, ci pentru a facilita realizarea inițiativelor prin alocarea de resurse.
		</p>
	</div>
</div>
