<?php
/**
 * Conținut pagină Mentorat: Maturitate digitală & Difuzia inovației.
 *
 * @package Digital_Accelerator
 */

$session_details = array(
	array(
		'label' => 'Data',
		'value' => '21 martie 2026',
		'icon'  => 'calendar',
	),
	array(
		'label' => 'Locația',
		'value' => 'CNIDE „Clasa Viitorului”, UPS „Ion Creangă”, Chișinău',
		'icon'  => 'location',
	),
	array(
		'label' => 'Participanți',
		'value' => 'Echipele Digitale școlare (60 de mentori locali) sub ghidajul celor 12 Meta-mentori',
		'icon'  => 'people',
	),
	array(
		'label' => 'Focus principal',
		'value' => 'Luarea deciziilor bazate pe date, instrumentul „Oglinda Digitală” (Digital Mirror) și managementul strategic al schimbării organizaționale',
		'icon'  => 'focus',
	),
);

$mirror_domains = array(
	array(
		'title' => 'Inovația pedagogică',
		'examples' => 'educație STEAM, metode de predare',
	),
	array(
		'title' => 'Managementul schimbării',
		'examples' => 'viziune, dezvoltare profesională',
	),
	array(
		'title' => 'Inovația digitală / Infrastructura',
		'examples' => 'servicii digitale, echipamente',
	),
);

$team_activities = array(
	'Echipele au analizat calitatea datelor colectate de ei înșiși ca temă pentru acasă (relevanță, acuratețe, utilitate).',
	'Au folosit rapoartele generate de platformă pentru a identifica discrepanțele (<em>gaps</em>) dintre nivelul actual al școlii și nivelul dorit.',
);

$game_mechanics = array(
	'<strong>Provocarea:</strong> Participanții au avut la dispoziție un „buget de timp” limitat pentru a convinge un personal virtual să adopte noua practică.',
	'<strong>Mecanica:</strong> Echipele au trebuit să testeze diverse strategii: să organizeze ateliere, să discute individual cu liderii de opinie, să trimită emailuri sau să confrunte rezistența.',
	'<strong>Învățare:</strong> Au observat în timp real cum unii „colegi” adoptă inovația rapid (inovatorii), în timp ce alții au nevoie de dovezi solide sau se opun direct.',
);

$debrief_questions = array(
	'„Ce strategii funcționează pentru a convinge un profesor sceptic?”',
	'„Cum identificăm și mobilizăm liderii informali (de opinie) dintr-o cancelarie?”',
	'„De ce simpla prezentare a unei inovații nu garantează adoptarea ei?”',
);
?>

<div class="mentoring-page mentoring-page--session-2" id="mentorat-maturitate-digitala">

	<section class="mentoring-hero" aria-labelledby="page-title">
		<div class="mentoring-hero__bg" aria-hidden="true"></div>
		<div class="container mentoring-hero__inner">
			<p class="mentoring-hero__lead">
				Dacă prima sesiune s-a concentrat pe definirea viziunii și a inovației, a doua sesiune a adus participanții față în față cu realitatea instituțiilor lor, prin prisma datelor. Pentru a transforma o școală, entuziasmul nu este suficient.
			</p>
			<div class="mentoring-stats" role="list">
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">Sesiunea 2</span>
					<span class="mentoring-stat__label">Maturitate &amp; difuzie</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">21 martie 2026</span>
					<span class="mentoring-stat__label">Data</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">Date + Simulare</span>
					<span class="mentoring-stat__label">Format</span>
				</div>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-intro">
		<div class="container">
			<div class="mentoring-intro__card mentoring-intro__card--purple">
				<p class="mb-3">
					Este nevoie de o evaluare obiectivă a maturității digitale și de o înțelegere profundă a modului în care oamenii adoptă schimbarea.
				</p>
				<p class="mb-0">
					Sesiunea a doua a propus un mix intens între <strong>analiza riguroasă a datelor instituționale</strong> și <strong>experimentarea practică a strategiilor de leadership</strong> printr-un joc de simulare a managementului schimbării.
				</p>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-details" aria-labelledby="mentoring-s2-details-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Detalii</span>
				<h2 class="mentoring-section__title" id="mentoring-s2-details-title">Detaliile Sesiunii 2</h2>
			</header>

			<div class="row g-4 mentoring-details-grid">
				<?php foreach ( $session_details as $detail ) : ?>
					<div class="col-md-6">
						<article class="mentoring-detail-card mentoring-detail-card--<?php echo esc_attr( $detail['icon'] ); ?>">
							<span class="mentoring-detail-card__label"><?php echo esc_html( $detail['label'] ); ?></span>
							<p class="mentoring-detail-card__value"><?php echo esc_html( $detail['value'] ); ?></p>
						</article>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-activities" aria-labelledby="mentoring-s2-activities-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Agendă</span>
				<h2 class="mentoring-section__title" id="mentoring-s2-activities-title">Activitățile Principale: De la Date la Acțiune</h2>
				<p class="mentoring-section__subtitle">
					Sesiunea a fost structurată pentru a ghida echipele prin procesul de la diagnoză la planificarea strategică, oferindu-le atât instrumente analitice, cât și experiențe imersive.
				</p>
			</header>

			<div class="mentoring-timeline">
				<article class="mentoring-timeline__item">
					<div class="mentoring-timeline__marker" aria-hidden="true">
						<span class="mentoring-timeline__number">01</span>
					</div>
					<div class="mentoring-timeline__content">
						<h3 class="mentoring-timeline__title">Diagnoza Instituțională: Oglinda Digitală</h3>
						<p>Prima parte a zilei a fost dedicată analizei profunde a datelor colectate de școli folosind instrumentul de autoevaluare <strong>Digital Mirror</strong> (Oglinda Digitală).</p>

						<div class="mentoring-callout">
							<p class="mentoring-callout__label">Ce este Oglinda Digitală?</p>
							<p class="mb-0">Dezvoltat de cercetătorii de la Universitatea din Tallinn (în frunte cu Dr. Mart Laanpere), acest instrument permite școlilor să își evalueze nivelul de maturitate digitală pe baza a <strong>15 metrici</strong> structurate în trei domenii cheie:</p>
						</div>

						<div class="row g-3 mentoring-domains-grid">
							<?php foreach ( $mirror_domains as $index => $domain ) : ?>
								<div class="col-md-4">
									<div class="mentoring-domain-card mentoring-domain-card--<?php echo esc_attr( (string) ( $index + 1 ) ); ?>">
										<h4 class="mentoring-domain-card__title"><?php echo esc_html( $domain['title'] ); ?></h4>
										<p class="mentoring-domain-card__examples">ex: <?php echo esc_html( $domain['examples'] ); ?></p>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<p class="mentoring-subheading">Activitatea echipelor</p>
						<ul class="mentoring-checklist">
							<?php foreach ( $team_activities as $item ) : ?>
								<li><?php echo wp_kses_post( $item ); ?></li>
							<?php endforeach; ?>
						</ul>

						<div class="mentoring-result">
							<strong>Rezultat:</strong> Echipele au formulat primele direcții de schimbare, bazându-se nu pe intuiție, ci pe dovezi clare (<em>data-informed decision making</em>).
						</div>
					</div>
				</article>

				<article class="mentoring-timeline__item">
					<div class="mentoring-timeline__marker" aria-hidden="true">
						<span class="mentoring-timeline__number">02</span>
					</div>
					<div class="mentoring-timeline__content">
						<h3 class="mentoring-timeline__title">Managementul Schimbării: Jocul „Diffusion Simulation Game”</h3>
						<p>Să știi ce trebuie schimbat este doar primul pas; să convingi o întreagă școală să adopte acea schimbare este adevărata provocare. Pentru a exersa acest aspect, sesiunea a continuat cu <strong>Diffusion Simulation Game</strong> (Jocul de simulare a difuziei inovației).</p>

						<div class="mentoring-callout mentoring-callout--purple">
							<p class="mentoring-callout__label">Cum funcționează simularea?</p>
							<p class="mb-0">Jocul are la bază celebra <strong>Teorie a Difuziei Inovațiilor</strong> a lui Everett Rogers. Fiecare echipă de mentori a intrat în rolul unui „agent al schimbării” care trebuie să introducă o inovație majoră în organizația sa.</p>
						</div>

						<ul class="mentoring-mechanics-list">
							<?php foreach ( $game_mechanics as $item ) : ?>
								<li><?php echo wp_kses_post( $item ); ?></li>
							<?php endforeach; ?>
						</ul>

						<p class="mentoring-subheading">Debriefing și Lecții învățate</p>
						<p>Partea cea mai importantă a jocului a fost sesiunea de debriefing. Meta-mentorii au ghidat discuțiile pentru a trage paralele cu realitatea școlară:</p>

						<ul class="mentoring-questions-list">
							<?php foreach ( $debrief_questions as $question ) : ?>
								<li><?php echo esc_html( $question ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-impact" aria-labelledby="mentoring-s2-impact-title">
		<div class="container">
			<div class="mentoring-impact__card">
				<header class="mentoring-impact__header">
					<span class="mentoring-section__badge mentoring-section__badge--light">Impact</span>
					<h2 class="mentoring-impact__title" id="mentoring-s2-impact-title">Impactul celei de-a doua sesiuni</h2>
				</header>
				<p>
					Această sesiune a marcat trecerea de la „a visa la o școală inovatoare” la „a audita și a planifica o școală inovatoare”.
				</p>
				<p class="mb-0">
					Folosind rapoartele din Oglinda Digitală, mentorii au acum o bază de referință științifică pentru elaborarea strategiilor lor. În același timp, prin Diffusion Game, au dobândit abilitățile sociale și empatice necesare pentru a gestiona rezistența naturală a colegilor, realizând că transformarea digitală este un proces profund uman, ghidat de rețele sociale și încredere.
				</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/project-disclaimer' ); ?>

</div>
