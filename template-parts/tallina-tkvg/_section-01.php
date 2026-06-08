<?php
/**
 * Secțiunea 01 - context instituțional TKVG.
 *
 * @package Digital_Accelerator
 */

$tkvg_hero_image = 'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-0.jpg';

$tkvg_carousel_images = array(
	'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-4.jpg',
	'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-5.jpg',
	'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-6.jpg',
	'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-7.jpg',
	'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-8.jpg',
);
?>

<section id="tkvg-intro">
	<h2 class="tkvg-section-title">Tallinna Kesklinna Vene Gümnaasium (TKVG)</h2>
	<p class="mb-2"><strong>Scopul studiului:</strong> identificarea tiparelor transferabile, a condițiilor de succes și a limitelor adaptării în contextul școlilor din Republica Moldova, în acord cu principiile DigiProf-C.</p>

	<nav class="tkvg-toc" aria-label="Cuprins TKVG">
		<a href="#tkvg-context">1. Contextul școlii</a>
		<a href="#tkvg-transformare">2. Traiectoria schimbării</a>
		<a href="#tkvg-actori">3. Leadership și participare</a>
		<a href="#tkvg-date">4. Utilizarea datelor</a>
		<a href="#tkvg-pedagogie">5. Schimbări pedagogice</a>
		<a href="#tkvg-factori">6. Factori facilitatori și bariere</a>
		<a href="#tkvg-sectiuni-viitoare">7-8. Secțiuni în completare</a>
	</nav>

	<div class="tkvg-divider">Structura internă</div>
	<div class="tkvg-intro">
		<p class="mb-2">Prezentul studiu de caz este elaborat în cadrul programului DigiProf-C, având rolul de instrument de analiză comparativă și reflecție profesională, nu de prezentare promoțională a unei instituții. <a href="<?php echo esc_url( 'https://www.facebook.com/tkvg1923/posts/pfbid0TngGBvcqzhAHZgAVTKhGMG2WcnwTMsWbmyrQPSGpAoViUwzLfLbGdjT5KFoPJGFRl' ); ?>" target="_blank" rel="noopener noreferrer">Cazul</a> Tallinna Kesklinna Vene Gümnaasium (<a href="<?php echo esc_url( 'https://www.youtube.com/watch?v=uZQ-9YI3whU' ); ?>" target="_blank" rel="noopener noreferrer">TKVG</a>) este analizat ca instanță de transformare digitală sistemică, relevantă prin mecanismele de leadership, guvernanță bazată pe date și învățare organizațională dezvoltate pe parcursul unui ciclu strategic de zece ani (2016–2026).</p>
		<p class="mb-2"><strong>Scopul studiului:</strong> identificarea tiparelor transferabile, a condițiilor de succes și a limitelor adaptării în contextul școlilor din Republica Moldova, în acord cu principiile DigiProf-C.</p>
		<p class="mb-0">Studiul de caz nu urmărește replicarea mecanică a modelului TKVG, ci analiza critică a mecanismelor decizionale, a utilizării sistematice a datelor educaționale și a practicilor de învățare organizațională care au susținut schimbarea pe termen lung.</p>
	</div>

	<a href="<?php echo esc_url( 'https://www.tkvg.ee/et/' ); ?>" target="_blank" rel="noopener noreferrer">
		<img class="tkvg-image" src="<?php echo esc_url( $tkvg_hero_image ); ?>" alt="<?php echo esc_attr( 'Tallinna Kesklinna Vene Gümnaasium - imagine reprezentativă' ); ?>">
	</a>
	<p class="tkvg-caption">Sursa imagine: galeria publică asociată paginii Google Sites a studiului TKVG.</p>
</section>

<section id="tkvg-context">
	<div class="tkvg-divider">1. Contextul școlii</div>
	<p>Studiul de caz nu urmărește replicarea mecanică a modelului TKVG, ci analiza critică a mecanismelor decizionale, a utilizării sistematice a datelor educaționale și a practicilor de învățare organizațională care au susținut schimbarea pe termen lung.</p>
	<p>Prin raportarea acestor procese la realitățile sistemului educațional din Republica Moldova sunt identificate tipare transferabile, condiții de succes și limite de adaptare, în acord cu indicatorii DigiProf-C privind reflecția profesională, sustenabilitatea schimbării și responsabilitatea managerială.</p>

	<div class="row g-3 mb-3">
		<div class="col-md-6">
			<img class="tkvg-image" src="<?php echo esc_url( 'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-1.jpg' ); ?>" alt="<?php echo esc_attr( 'TKVG - context instituțional' ); ?>">
		</div>
		<div class="col-md-6">
			<img class="tkvg-image" src="<?php echo esc_url( 'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-2.jpg' ); ?>" alt="<?php echo esc_attr( 'TKVG - activități școlare' ); ?>">
		</div>
	</div>

	<p>TKVG este o instituție municipală cu ciclu complet (clasele I–XII), fondată în 1923, cu o identitate educațională puternic marcată de predarea în limba rusă și de orientarea tradițională spre disciplinele reale.</p>

	<div class="tkvg-carousel">
		<div class="swiper">
			<div class="swiper-wrapper">
				<?php foreach ( $tkvg_carousel_images as $index => $image_url ) : ?>
					<figure class="swiper-slide">
						<img class="tkvg-image" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( 'TKVG - imagine din context instituțional ' . ( $index + 1 ) ); ?>">
					</figure>
				<?php endforeach; ?>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev" aria-label="<?php esc_attr_e( 'Imagine anterioară', 'digital-accelerator' ); ?>"></div>
			<div class="swiper-button-next" aria-label="<?php esc_attr_e( 'Imagine următoare', 'digital-accelerator' ); ?>"></div>
		</div>
	</div>

	<h3 class="h5 mt-3 mb-2">1.1 Dimensiune, localizare și tip de școală</h3>
	<div class="table-scroll">
		<table class="tkvg-mini" aria-label="Context instituțional și premise ale transformării digitale – TKVG">
			<thead>
				<tr>
					<th>Domeniu</th>
					<th>Elemente-cheie</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Statut și identitate</strong></td>
					<td>Instituție municipală cu ciclu complet (I–XII), fondată în <strong>1923</strong>; tradiție de predare în limba rusă; orientare spre disciplinele reale.</td>
				</tr>
				<tr>
					<td><strong>Moment definitoriu</strong></td>
					<td><strong>Fuziunea (2014)</strong> cu Gimnaziul Juhkentali – apariția a două culturi organizaționale distincte.</td>
				</tr>
				<tr>
					<td><strong>Cultură organizațională duală</strong></td>
					<td>
						<span class="tkvg-tag tkvg-tag--petrol">Cultura tehnologică / LTT</span>
						<ul class="mb-2">
							<li>STEM, robotică, tehnologie</li>
							<li>Digitalizare accelerată</li>
							<li>Accent pe instrumente</li>
						</ul>
						<span class="tkvg-tag tkvg-tag--mov">Cultura umanistă</span>
						<ul class="mb-0">
							<li>Limbi, arte, științe sociale</li>
							<li>Integrare pedagogică graduală</li>
							<li>Accent pe sens și relație</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td><strong>Provocare strategică post-fuziune</strong></td>
					<td>Presiune organizațională: necesitatea coerenței manageriale și pedagogice; aliniere culturală susținută ulterior prin digitalizare.</td>
				</tr>
				<tr>
					<td><strong>Localizare</strong></td>
					<td>Activitatea se desfășoară în două clădiri istorice: <strong>Lenderi</strong> (str. Kreutzwaldi 25) și <strong>Juhkentali</strong> (str. Juhkentali 36).</td>
				</tr>
				<tr>
					<td><strong>Populație școlară</strong></td>
					<td><strong>1265 elevi</strong> (septembrie 2019); prognoză 2020–2025: stabilitate între <strong>1240–1280</strong> elevi.</td>
				</tr>
				<tr>
					<td><strong>Resurse umane</strong></td>
					<td>Aprox. <strong>96–100 profesori</strong>; ≈<strong>60%</strong> cu vârste între <strong>40–59</strong> ani.</td>
				</tr>
				<tr>
					<td><strong>Infrastructură tehnică</strong></td>
					<td>Dotare progresivă; raport <strong>3,7 elevi/calculator</strong> (2019).</td>
				</tr>
				<tr>
					<td><strong>Platforme digitale</strong></td>
					<td><strong>Google Workspace</strong> (100% profesori și elevi), <strong>eKool</strong>, <strong>EIS</strong>.</td>
				</tr>
				<tr>
					<td><strong>Condiție-cheie identificată</strong></td>
					<td><span class="tkvg-highlight">Transformarea digitală nu a pornit din deficit tehnologic, ci din necesitatea <strong>alinierii culturale și organizaționale</strong>.</span></td>
				</tr>
				<tr>
					<td><strong>Sursa</strong></td>
					<td>Date publice instituționale TKVG și statistici educaționale municipale (Tallinn).</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p class="tkvg-caption mb-0">
		Sursa: date publice instituționale TKVG și
		<a href="<?php echo esc_url( 'https://haridussilm.ee/en/node/1660' ); ?>" target="_blank" rel="noopener noreferrer">statistici</a>
		educaționale municipale (Tallinn). Datele prezentate în tabel oferă contextul instituțional necesar pentru interpretarea ulterioară a proceselor de <em>transformare digitală și a deciziilor manageriale analizate în studiul de caz</em>.
	</p>
</section>
