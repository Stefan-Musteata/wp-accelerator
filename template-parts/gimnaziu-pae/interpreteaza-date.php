<?php
/**
 * Secțiunea 4 – Cine interpretează datele.
 *
 * @package Digital_Accelerator
 */
?>
<section class="card border shadow-sm rounded-4 pae-interp" aria-label="Cine interpretează datele">
	<div class="card-body p-4 p-lg-5">
		<h3 class="h5 fw-bold mb-4">Cine interpretează datele</h3>

		<div class="pae-interp-diagram rounded-3 p-3 mb-4" aria-label="Diagramă interpretare date">
			<div class="pae-interp-svg-wrap overflow-x-auto">
				<svg viewBox="0 0 920 520" class="pae-interp-svg" role="img" aria-labelledby="pae-interp-svg-title">
					<title id="pae-interp-svg-title">Interpretarea datelor pe niveluri (RBAC)</title>
					<defs>
						<marker id="pae-interp-arrow" markerWidth="10" markerHeight="10" refX="8" refY="3" orient="auto">
							<path d="M0,0 L10,3 L0,6 Z" fill="rgba(36,82,98,0.55)"></path>
						</marker>
					</defs>

					<g class="pae-interp-node">
						<rect x="40" y="60" rx="16" ry="16" width="250" height="90" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="40" y="60" rx="16" ry="16" width="8" height="90" fill="rgba(16,236,210,0.9)"></rect>
						<text x="62" y="95" font-size="16" font-weight="800" fill="#233247">Surse de date</text>
						<text x="62" y="120" font-size="12" font-weight="600" fill="#607089">eKool • EIS • Opiq • HaridusSilm</text>
					</g>

					<g class="pae-interp-node">
						<rect x="40" y="170" rx="16" ry="16" width="250" height="90" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="40" y="170" rx="16" ry="16" width="8" height="90" fill="rgba(229,20,145,0.9)"></rect>
						<text x="62" y="205" font-size="16" font-weight="800" fill="#233247">Feedback / sondaje</text>
						<text x="62" y="230" font-size="12" font-weight="600" fill="#607089">elevi • părinți • profesori</text>
					</g>

					<g class="pae-interp-node">
						<rect x="40" y="280" rx="16" ry="16" width="250" height="90" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="40" y="280" rx="16" ry="16" width="8" height="90" fill="rgba(76,28,87,0.9)"></rect>
						<text x="62" y="315" font-size="16" font-weight="800" fill="#233247">Date operaționale</text>
						<text x="62" y="340" font-size="12" font-weight="600" fill="#607089">infrastructură • utilizare dispozitive</text>
					</g>

					<g class="pae-interp-node">
						<rect x="350" y="190" rx="18" ry="18" width="220" height="120" fill="rgba(36,82,98,0.08)" stroke="rgba(36,82,98,0.18)"></rect>
						<text x="372" y="225" font-size="16" font-weight="800" fill="#233247">Acces pe roluri</text>
						<text x="372" y="250" font-size="12" font-weight="600" fill="#607089">Role Based Access Control</text>
						<text x="372" y="275" font-size="12" font-weight="600" fill="#607089">„fiecare vede ce-i trebuie”</text>
					</g>

					<g class="pae-interp-node">
						<rect x="640" y="60" rx="16" ry="16" width="240" height="90" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="640" y="60" rx="16" ry="16" width="8" height="90" fill="rgba(54,43,42,0.9)"></rect>
						<text x="662" y="95" font-size="16" font-weight="800" fill="#233247">Administrația</text>
						<text x="662" y="120" font-size="12" font-weight="600" fill="#607089">director • directori adjuncți</text>
					</g>

					<g class="pae-interp-node">
						<rect x="640" y="170" rx="16" ry="16" width="240" height="90" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="640" y="170" rx="16" ry="16" width="8" height="90" fill="rgba(36,82,98,0.9)"></rect>
						<text x="662" y="205" font-size="16" font-weight="800" fill="#233247">Tehnolog educațional</text>
						<text x="662" y="230" font-size="12" font-weight="600" fill="#607089">date digitale • platforme</text>
					</g>

					<g class="pae-interp-node">
						<rect x="640" y="280" rx="16" ry="16" width="240" height="90" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="640" y="280" rx="16" ry="16" width="8" height="90" fill="rgba(229,20,145,0.9)"></rect>
						<text x="662" y="315" font-size="16" font-weight="800" fill="#233247">Profesori / diriginți</text>
						<text x="662" y="340" font-size="12" font-weight="600" fill="#607089">clasă • elevi proprii</text>
					</g>

					<g class="pae-interp-node">
						<rect x="640" y="390" rx="16" ry="16" width="240" height="90" fill="#ffffff" stroke="#e6ecf6"></rect>
						<rect x="640" y="390" rx="16" ry="16" width="8" height="90" fill="rgba(16,236,210,0.9)"></rect>
						<text x="662" y="425" font-size="16" font-weight="800" fill="#233247">Elevi &amp; părinți</text>
						<text x="662" y="450" font-size="12" font-weight="600" fill="#607089">propriile date • progres</text>
					</g>

					<path d="M290 105 C330 110, 330 210, 350 240" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-interp-arrow)"></path>
					<path d="M290 215 C330 220, 330 240, 350 250" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-interp-arrow)"></path>
					<path d="M290 325 C330 320, 330 275, 350 265" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-interp-arrow)"></path>
					<path d="M570 230 C605 210, 615 150, 640 105" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-interp-arrow)"></path>
					<path d="M570 250 C610 250, 610 215, 640 215" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-interp-arrow)"></path>
					<path d="M570 270 C610 290, 610 320, 640 325" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-interp-arrow)"></path>
					<path d="M540 310 C610 360, 610 420, 640 435" stroke="rgba(36,82,98,0.55)" stroke-width="3" fill="none" marker-end="url(#pae-interp-arrow)"></path>

					<text x="40" y="500" font-size="12" fill="#607089">Flux: Surse de date → Acces pe roluri → Interpretare pe niveluri</text>
				</svg>
			</div>
		</div>

		<div class="table-responsive mb-4">
			<table class="table table-bordered align-middle mb-0 small" aria-label="Roluri care interpretează datele">
				<thead class="table-light">
					<tr>
						<th scope="col" class="fw-semibold">Rol</th>
						<th scope="col" class="fw-semibold">Ce interpretează</th>
						<th scope="col" class="fw-semibold">Instrumente / acces</th>
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
						<td>Tendințe, rezultate comparative, indicatori macro, rapoarte de autoevaluare.</td>
						<td>eKool / EIS / HaridusSilm + rapoarte interne (acces extins pe rol).</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c1" aria-hidden="true"></span>
								Tehnolog educațional
							</span>
						</td>
						<td>Date digitale: utilizare platforme, fluxuri, indicatori de digitalizare și acces.</td>
						<td>Administrare platforme + date digitale (acces pe roluri / RBAC).</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c4" aria-hidden="true"></span>
								Profesori / diriginți
							</span>
						</td>
						<td>Rezultate la clasă/elev, prezență, progres, semnale pentru intervenție.</td>
						<td>eKool / rapoarte clasă / date elevi proprii (acces limitat pe rol).</td>
					</tr>
					<tr>
						<td>
							<span class="pae-interp-role">
								<span class="pae-interp-chip pae-interp-chip--c2" aria-hidden="true"></span>
								Elevi &amp; părinți
							</span>
						</td>
						<td>Propriul progres: note, teme, observații, autoevaluare.</td>
						<td>eKool + Opiq (acces la date personale).</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="row g-3">
			<div class="col-md-4">
				<div class="pae-date-embed pae-date-embed--sm ratio ratio-4x3 rounded overflow-hidden border">
					<iframe
						src="<?php echo esc_url( 'https://drive.google.com/file/d/19WS4l5AYLDW7mkLIDUq8gRGSvyaZX2Ep/preview' ); ?>"
						title="Diagramă management"
						loading="lazy"
						allow="autoplay"
					></iframe>
				</div>
			</div>
			<div class="col-md-4">
				<div class="pae-date-embed pae-date-embed--sm ratio ratio-4x3 rounded overflow-hidden border">
					<iframe
						src="<?php echo esc_url( 'https://drive.google.com/file/d/1kpbpTn1VQ-HwXGTFd-jjnCMzeN_V_Y_j/preview' ); ?>"
						title="Obiective strategice"
						loading="lazy"
						allow="autoplay"
					></iframe>
				</div>
			</div>
			<div class="col-md-4">
				<div class="pae-date-embed pae-date-embed--sm ratio ratio-4x3 rounded overflow-hidden border">
					<iframe
						src="<?php echo esc_url( 'https://drive.google.com/file/d/1mZvzv051lzwoKZ2kljXlF13mbVfFWnZf/preview' ); ?>"
						title="Plan digital — Abordare"
						loading="lazy"
						allow="autoplay"
					></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
