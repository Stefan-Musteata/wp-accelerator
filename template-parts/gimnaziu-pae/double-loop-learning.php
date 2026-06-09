<?php
/**
 * Secțiunea 4 – Exemple de învățare dublă (Double-Loop Learning).
 *
 * @package Digital_Accelerator
 */
?>
<section class="card border shadow-sm rounded-4" aria-label="Exemple de învățare dublă (Double-Loop Learning)">
	<div class="card-body p-4 p-lg-5">
		<h3 class="h5 fw-bold mb-4">Exemple de învățare dublă (Double-Loop Learning)</h3>

		<div class="pae-interp-diagram rounded-3 p-3 mb-4" aria-label="Diagramă double-loop learning">
			<div class="pae-interp-svg-wrap overflow-x-auto">
				<svg viewBox="0 0 1200 560" class="pae-interp-svg pae-interp-svg--xwide" role="img" aria-labelledby="pae-dloop-svg-title">
					<title id="pae-dloop-svg-title">Double-loop learning: acțiuni + revizuirea presupunerilor</title>
					<defs>
						<marker id="pae-dloop-arrow" markerWidth="10" markerHeight="10" refX="8" refY="3" orient="auto">
							<path d="M0,0 L10,3 L0,6 Z" fill="rgba(36,82,98,0.55)"></path>
						</marker>
						<marker id="pae-dloop-arrow-pink" markerWidth="10" markerHeight="10" refX="8" refY="3" orient="auto">
							<path d="M0,0 L10,3 L0,6 Z" fill="rgba(229,20,145,0.70)"></path>
						</marker>
						<marker id="pae-dloop-arrow-cyan" markerWidth="10" markerHeight="10" refX="8" refY="3" orient="auto">
							<path d="M0,0 L10,3 L0,6 Z" fill="rgba(16,236,210,0.80)"></path>
						</marker>
					</defs>

					<g class="pae-interp-node">
						<rect x="50" y="30" rx="14" ry="14" width="520" height="56" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="50" y="30" rx="14" ry="14" width="8" height="56" fill="rgba(16,236,210,0.9)"></rect>
						<text x="72" y="66" font-size="18" font-weight="900" fill="#233247">Loop 1: Îmbunătățire în același cadru (single-loop)</text>
					</g>

					<g class="pae-interp-node">
						<rect x="610" y="30" rx="14" ry="14" width="540" height="56" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="610" y="30" rx="14" ry="14" width="8" height="56" fill="rgba(229,20,145,0.9)"></rect>
						<text x="632" y="66" font-size="18" font-weight="900" fill="#233247">Loop 2: Revizuire de politici/presupuneri (double-loop)</text>
					</g>

					<g class="pae-interp-node">
						<rect x="80" y="140" rx="18" ry="18" width="220" height="110" fill="#ffffff" stroke="#e6ecf6"></rect>
						<text x="102" y="178" font-size="16" font-weight="900" fill="#233247">Date / dovezi</text>
						<text x="102" y="205" font-size="12.5" font-weight="600" fill="#607089">note • prezență • feedback</text>
						<text x="102" y="228" font-size="12.5" font-weight="600" fill="#607089">utilizare platforme</text>

						<rect x="340" y="140" rx="18" ry="18" width="220" height="110" fill="#ffffff" stroke="#e6ecf6"></rect>
						<text x="362" y="178" font-size="16" font-weight="900" fill="#233247">Intervenție</text>
						<text x="362" y="205" font-size="12.5" font-weight="600" fill="#607089">ajustări la clasă</text>
						<text x="362" y="228" font-size="12.5" font-weight="600" fill="#607089">sprijin individual</text>

						<rect x="210" y="290" rx="18" ry="18" width="220" height="110" fill="#ffffff" stroke="#e6ecf6"></rect>
						<text x="232" y="328" font-size="16" font-weight="900" fill="#233247">Măsurare din nou</text>
						<text x="232" y="355" font-size="12.5" font-weight="600" fill="#607089">verificare rezultate</text>
						<text x="232" y="378" font-size="12.5" font-weight="600" fill="#607089">indicatori / trend</text>

						<path d="M300 195 C315 195, 325 195, 340 195" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-dloop-arrow)"></path>
						<path d="M450 250 C420 275, 395 290, 340 310" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-dloop-arrow)"></path>
						<path d="M210 310 C160 285, 140 255, 150 220" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-dloop-arrow)"></path>

						<text x="88" y="430" font-size="12" fill="#607089">Single-loop = corectezi acțiuni, fără a schimba regulile/judecățile de bază.</text>
					</g>

					<g class="pae-interp-node">
						<rect x="640" y="140" rx="18" ry="18" width="240" height="110" fill="#ffffff" stroke="#e6ecf6"></rect>
						<text x="662" y="178" font-size="16" font-weight="900" fill="#233247">Semnal / problemă</text>
						<text x="662" y="205" font-size="12.5" font-weight="600" fill="#607089">date arată un tipar</text>
						<text x="662" y="228" font-size="12.5" font-weight="600" fill="#607089">persistă în timp</text>

						<rect x="910" y="140" rx="18" ry="18" width="240" height="110" fill="#ffffff" stroke="#e6ecf6"></rect>
						<text x="932" y="178" font-size="16" font-weight="900" fill="#233247">Întrebări de fond</text>
						<text x="932" y="205" font-size="12.5" font-weight="600" fill="#607089">„de ce se întâmplă?”</text>
						<text x="932" y="228" font-size="12.5" font-weight="600" fill="#607089">„ce presupunem greșit?”</text>

						<rect x="700" y="290" rx="18" ry="18" width="300" height="110" fill="rgba(36,82,98,0.08)" stroke="rgba(36,82,98,0.18)"></rect>
						<text x="722" y="328" font-size="16" font-weight="900" fill="#233247">Schimbare de reguli / politici</text>
						<text x="722" y="355" font-size="12.5" font-weight="600" fill="#607089">modifici proceduri, planuri,</text>
						<text x="722" y="378" font-size="12.5" font-weight="600" fill="#607089">criterii, resurse, formare</text>

						<rect x="1010" y="305" rx="18" ry="18" width="170" height="95" fill="#ffffff" stroke="#e6ecf6"></rect>
						<text x="1032" y="342" font-size="16" font-weight="900" fill="#233247">Aplicare</text>
						<text x="1032" y="368" font-size="12.5" font-weight="600" fill="#607089">implementare +</text>
						<text x="1032" y="391" font-size="12.5" font-weight="600" fill="#607089">monitorizare</text>

						<path d="M880 195 C895 195, 905 195, 910 195" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-dloop-arrow)"></path>
						<path d="M1030 250 C1000 275, 965 290, 920 310" stroke="rgba(229,20,145,0.65)" stroke-width="4" fill="none" marker-end="url(#pae-dloop-arrow-pink)"></path>
						<path d="M1000 345 C1015 345, 1030 345, 1010 345" stroke="rgba(16,236,210,0.75)" stroke-width="4" fill="none" marker-end="url(#pae-dloop-arrow-cyan)"></path>
						<path d="M700 345 C640 335, 610 300, 640 210" stroke="rgba(229,20,145,0.45)" stroke-width="4" fill="none" marker-end="url(#pae-dloop-arrow-pink)"></path>

						<text x="640" y="430" font-size="12" fill="#607089">Double-loop = schimbi cadrul: reguli, criterii, presupuneri, nu doar acțiuni.</text>
					</g>
				</svg>
			</div>

			<div class="pae-date-embed pae-date-embed--tall rounded overflow-hidden border mt-3">
				<iframe
					src="<?php echo esc_url( 'https://drive.google.com/file/d/1ixu2E3LjlZbC29SWpGTOv9fEC8aJxM2a/preview' ); ?>"
					title="Double-loop learning — diagramă procese"
					loading="lazy"
					allow="autoplay"
				></iframe>
			</div>
		</div>

		<div class="table-responsive mb-4">
			<table class="table table-bordered align-middle mb-0 small" aria-label="Exemple double-loop learning pe roluri">
				<thead class="table-light">
					<tr>
						<th scope="col" class="fw-semibold">Rol</th>
						<th scope="col" class="fw-semibold">Semnal (din date)</th>
						<th scope="col" class="fw-semibold">Acțiune single-loop (rapid)</th>
						<th scope="col" class="fw-semibold">Schimbare double-loop (de fond)</th>
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
						<td>Rezultate slabe persistente la un nivel/clasă.</td>
						<td>Ore suplimentare, intervenții punctuale.</td>
						<td>Revizuirea politicii de evaluare / alocării resurselor / planului de sprijin pe termen lung.</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c1" aria-hidden="true"></span>
								Tehnolog educațional
							</span>
						</td>
						<td>Utilizare redusă a platformelor de către profesori.</td>
						<td>Tutoriale rapide, suport individual.</td>
						<td>Schimbarea standardelor digitale + includerea formării obligatorii și a unui model de mentorat.</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c4" aria-hidden="true"></span>
								Profesori / diriginți
							</span>
						</td>
						<td>Prezență scăzută și motivație redusă la anumite activități.</td>
						<td>Comunicare cu părinții, adaptări pe termen scurt.</td>
						<td>Reproiectarea activităților: metode active, evaluare alternativă, proiecte și autonomie sporită elevilor.</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c2" aria-hidden="true"></span>
								Elevi &amp; părinți
							</span>
						</td>
						<td>Feedback: dificultăți repetate la aceeași temă/concept.</td>
						<td>Repetiție, exerciții suplimentare.</td>
						<td>Schimbarea strategiei: învățare prin proiect, resurse personalizate, plan individual de învățare.</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="pae-date-embed pae-date-embed--tall rounded overflow-hidden border">
			<iframe
				src="<?php echo esc_url( 'https://drive.google.com/file/d/1jQLXf0o3cKxNPgA0kiBVdzFYTaJrXh0t/preview' ); ?>"
				title="Double-loop learning — exemple pe roluri"
				loading="lazy"
				allow="autoplay"
			></iframe>
		</div>
	</div>
</section>
