<?php
/**
 * Secțiunea 4 – Cum influențează datele deciziile.
 *
 * @package Digital_Accelerator
 */
?>
<section class="card border shadow-sm rounded-4" aria-label="Cum influențează datele deciziile">
	<div class="card-body p-4 p-lg-5">
		<h3 class="h5 fw-bold mb-4">Cum influențează datele deciziile</h3>

		<div class="pae-interp-diagram rounded-3 p-3 mb-4" aria-label="Diagramă flux date → interpretare → decizii">
			<div class="pae-interp-svg-wrap overflow-x-auto">
				<svg viewBox="0 0 1100 520" class="pae-interp-svg pae-interp-svg--wide" role="img" aria-labelledby="pae-influenteaza-svg-title">
					<title id="pae-influenteaza-svg-title">Flux: Date → Interpretare → Decizii</title>
					<defs>
						<marker id="pae-influenteaza-arrow" markerWidth="10" markerHeight="10" refX="8" refY="3" orient="auto">
							<path d="M0,0 L10,3 L0,6 Z" fill="rgba(36,82,98,0.55)"></path>
						</marker>
					</defs>

					<g class="pae-interp-node">
						<rect x="50" y="70" rx="16" ry="16" width="280" height="110" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="50" y="70" rx="16" ry="16" width="8" height="110" fill="rgba(16,236,210,0.9)"></rect>
						<text x="72" y="110" font-size="18" font-weight="800" fill="#233247">Date colectate</text>
						<text x="72" y="140" font-size="12.5" font-weight="600" fill="#607089">academice • participare • utilizare tech</text>
						<text x="72" y="162" font-size="12.5" font-weight="600" fill="#607089">feedback • administrative</text>
					</g>

					<g class="pae-interp-node">
						<rect x="410" y="95" rx="18" ry="18" width="300" height="160" fill="rgba(36,82,98,0.08)" stroke="rgba(36,82,98,0.18)"></rect>
						<text x="432" y="135" font-size="18" font-weight="900" fill="#233247">Interpretare &amp; analiză</text>
						<text x="432" y="160" font-size="12.5" font-weight="600" fill="#607089">rapoarte • indicatori • tendințe</text>
						<text x="432" y="182" font-size="12.5" font-weight="600" fill="#607089">comparare • identificare probleme</text>
						<text x="432" y="204" font-size="12.5" font-weight="600" fill="#607089">prioritizare intervenții</text>
						<rect x="432" y="216" rx="12" ry="12" width="256" height="28" fill="#ffffff" stroke="#e6ecf6"></rect>
						<text x="446" y="235" font-size="12.5" font-weight="800" fill="#233247">Acces pe roluri (RBAC)</text>
					</g>

					<g class="pae-interp-node">
						<rect x="790" y="70" rx="16" ry="16" width="280" height="110" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="790" y="70" rx="16" ry="16" width="8" height="110" fill="rgba(229,20,145,0.9)"></rect>
						<text x="812" y="110" font-size="18" font-weight="900" fill="#233247">Decizii</text>
						<text x="812" y="140" font-size="12.5" font-weight="600" fill="#607089">curriculum • intervenții • resurse</text>
						<text x="812" y="162" font-size="12.5" font-weight="600" fill="#607089">platforme • formare • politici</text>
					</g>

					<g class="pae-interp-node">
						<rect x="90" y="330" rx="16" ry="16" width="240" height="120" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="90" y="330" rx="16" ry="16" width="8" height="120" fill="rgba(54,43,42,0.9)"></rect>
						<text x="112" y="364" font-size="16" font-weight="900" fill="#233247">Administrația</text>
						<text x="112" y="390" font-size="12.5" font-weight="600" fill="#607089">planificare strategică</text>
						<text x="112" y="412" font-size="12.5" font-weight="600" fill="#607089">alocare resurse</text>
					</g>

					<g class="pae-interp-node">
						<rect x="360" y="330" rx="16" ry="16" width="240" height="120" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="360" y="330" rx="16" ry="16" width="8" height="120" fill="rgba(36,82,98,0.9)"></rect>
						<text x="382" y="364" font-size="16" font-weight="900" fill="#233247">Tehnolog educațional</text>
						<text x="382" y="390" font-size="12.5" font-weight="600" fill="#607089">optimizare platforme</text>
						<text x="382" y="412" font-size="12.5" font-weight="600" fill="#607089">suport &amp; standarde</text>
					</g>

					<g class="pae-interp-node">
						<rect x="630" y="330" rx="16" ry="16" width="240" height="120" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="630" y="330" rx="16" ry="16" width="8" height="120" fill="rgba(229,20,145,0.9)"></rect>
						<text x="652" y="364" font-size="16" font-weight="900" fill="#233247">Profesori / diriginți</text>
						<text x="652" y="390" font-size="12.5" font-weight="600" fill="#607089">intervenții la clasă</text>
						<text x="652" y="412" font-size="12.5" font-weight="600" fill="#607089">sprijin individual</text>
					</g>

					<g class="pae-interp-node">
						<rect x="900" y="330" rx="16" ry="16" width="200" height="120" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="900" y="330" rx="16" ry="16" width="8" height="120" fill="rgba(16,236,210,0.9)"></rect>
						<text x="922" y="364" font-size="16" font-weight="900" fill="#233247">Elevi &amp; părinți</text>
						<text x="922" y="390" font-size="12.5" font-weight="600" fill="#607089">autoevaluare</text>
						<text x="922" y="412" font-size="12.5" font-weight="600" fill="#607089">feedback &amp; progres</text>
					</g>

					<path d="M330 125 C370 135, 380 140, 410 160" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-influenteaza-arrow)"></path>
					<path d="M710 170 C750 150, 760 140, 790 125" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-influenteaza-arrow)"></path>
					<path d="M560 255 C500 290, 380 310, 210 330" stroke="rgba(36,82,98,0.40)" stroke-width="3" fill="none" marker-end="url(#pae-influenteaza-arrow)"></path>
					<path d="M560 255 C560 290, 520 305, 480 330" stroke="rgba(36,82,98,0.40)" stroke-width="3" fill="none" marker-end="url(#pae-influenteaza-arrow)"></path>
					<path d="M560 255 C650 290, 700 305, 750 330" stroke="rgba(36,82,98,0.40)" stroke-width="3" fill="none" marker-end="url(#pae-influenteaza-arrow)"></path>
					<path d="M560 255 C720 300, 870 310, 990 330" stroke="rgba(36,82,98,0.40)" stroke-width="3" fill="none" marker-end="url(#pae-influenteaza-arrow)"></path>

					<text x="50" y="500" font-size="12" fill="#607089">Flux: Date colectate → Interpretare &amp; analiză → Decizii (pe roluri)</text>
				</svg>
			</div>
		</div>

		<div class="table-responsive mb-4">
			<table class="table table-bordered align-middle mb-0 small" aria-label="Cum influențează datele deciziile pe roluri">
				<thead class="table-light">
					<tr>
						<th scope="col" class="fw-semibold">Rol</th>
						<th scope="col" class="fw-semibold">Date folosite</th>
						<th scope="col" class="fw-semibold">Decizii influențate</th>
					</tr>
				</thead>
				<tbody class="text-body-secondary">
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c5" aria-hidden="true"></span>
								Administrația
							</span>
						</td>
						<td>Indicatori macro, tendințe, rapoarte comparative, feedback agregat.</td>
						<td>Planificare strategică, alocare resurse, politici interne, priorități instituționale.</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c1" aria-hidden="true"></span>
								Tehnolog educațional
							</span>
						</td>
						<td>Utilizare platforme, acces, fluxuri digitale, date despre infrastructură.</td>
						<td>Optimizare platforme, standarde digitale, instruire, suport tehnic și pedagogic.</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c4" aria-hidden="true"></span>
								Profesori / diriginți
							</span>
						</td>
						<td>Note, progres, prezență, rezultate pe competențe, semnale de risc.</td>
						<td>Intervenții la clasă, sprijin individual, adaptarea metodelor, comunicare cu părinții.</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c2" aria-hidden="true"></span>
								Elevi &amp; părinți
							</span>
						</td>
						<td>Progres personal, feedback, teme, rezultate și recomandări.</td>
						<td>Autoreglare, plan personal de învățare, implicare și comunicare cu școala.</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="pae-date-embed pae-date-embed--tall rounded overflow-hidden border">
			<iframe
				src="<?php echo esc_url( 'https://drive.google.com/file/d/171ZZ-rqG8pWTa-wE1Mc-3tnOy_Y3W2uV/preview' ); ?>"
				title="Cum influențează datele deciziile — document suport"
				loading="lazy"
				allow="autoplay"
			></iframe>
		</div>
	</div>
</section>
