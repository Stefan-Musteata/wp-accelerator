<?php
/**
 * Conținut pagină Mentorat: Schimb de experiență.
 *
 * @package Digital_Accelerator
 */

$session_details = array(
	array(
		'label' => 'Data',
		'value' => '10 mai 2026',
		'icon'  => 'calendar',
	),
	array(
		'label' => 'Locația',
		'value' => 'Edu Digital Hub, UPS „Ion Creangă”, Chișinău',
		'icon'  => 'location',
	),
	array(
		'label' => 'Participanți',
		'value' => 'Cele 12 Echipe Digitale școlare (60 de mentori locali) și cei 12 Meta-mentori',
		'icon'  => 'people',
	),
	array(
		'label' => 'Focus principal',
		'value' => 'Prezentarea progresului instituțional, validarea cadrelor de lucru naționale, evaluarea rezultatelor și planificarea pașilor următori pentru replicarea inovației',
		'icon'  => 'focus',
	),
);

$speakers = array(
	array(
		'name'  => 'Doru Curoșu',
		'topic' => 'Dinamica schimbărilor organizaționale',
		'desc'  => 'A explorat importanța leadershipului distribuit și a culturii instituționale în acceptarea noilor paradigme și depășirea rezistenței.',
	),
	array(
		'name'  => 'Mariana Gurghiș',
		'topic' => 'Inovație și digitalizare',
		'desc'  => 'A demonstrat cum tehnologia poate sprijini un proces educațional modern, echitabil și adaptabil.',
	),
	array(
		'name'  => 'Dumitru Juraveli',
		'topic' => 'Evaluare obiectivă și maturitate digitală',
		'desc'  => 'A detaliat creșterea maturității digitale a școlilor și impactul instrumentului Digital Mirror ca fundament pentru deciziile strategice.',
	),
);

$activities = array(
	array(
		'number' => '01',
		'title'  => 'Dialog Profesional: Perspective asupra Transformării',
		'intro'  => 'Un moment central al evenimentului a fost panelul de discuții susținut de cei trei experți invitați, care au abordat transformarea educațională din perspective complementare.',
		'speakers' => true,
		'items'  => array(),
	),
	array(
		'number' => '02',
		'title'  => 'Prezentarea Progresului și Reflecția de Grup',
		'intro'  => 'O componentă esențială a zilei a fost sesiunea de prezentări finale. Fiecare dintre cele 12 școli a urcat pe scenă pentru a-și expune parcursul în cadrul DigitalAccelerator.',
		'items'  => array(
			'Echipele nu au prezentat simple rapoarte de activitate, ci adevărate narative ale schimbării organizaționale. Au discutat deschis despre provocările întâmpinate în colectarea datelor cu Oglinda Digitală, despre cum au depășit rezistența colegilor folosind tactici din Diffusion Game și despre impactul experimentelor pedagogice realizate la clasă.',
			'Reflecția de grup și feedback-ul oferit de la egal la egal au transformat aceste prezentări într-un exercițiu profund de învățare colectivă. Adevăratul schimb de experiență s-a produs atunci când o școală a recunoscut propriile dificultăți în soluția inovatoare prezentată de o altă instituție.',
		),
	),
	array(
		'number' => '03',
		'title'  => 'Validarea Instrumentelor și Învățarea Organizațională',
		'intro'  => 'Pentru a ancora experiența practică a școlilor în politicile educaționale naționale, sesiunea a inclus și o dezbatere pe marginea Moldova Digital School Framework (Cadrul Școlilor Digitale din Moldova).',
		'items'  => array(
			'S-a subliniat o idee centrală a managementului schimbării: maturitatea digitală a unei școli este intrinsec legată de capacitatea instituției de a învăța din propriile greșeli.',
			'La finalul programului, echipele au adunat toate experiențele, instrumentele de diagnoză și procesele de lucru de care au nevoie pentru a replica intern, în mod iterativ, ciclul DigitalAccelerator. Ele nu mai depind de asistență externă pentru a relua procesul de la diagnoză la intervenție.',
		),
	),
	array(
		'number' => '04',
		'title'  => 'Comunitatea DigitalAccelerator: Inspirând Următorul Val',
		'intro'  => 'Programul nu se încheie aici. Prin finalizarea acestui parcurs, cele 12 instituții pilot au devenit oficial nucleul Comunității DigitalAccelerator.',
		'items'  => array(
			'Școlile au fost încurajate să mențină legăturile formate, să organizeze vizite inter-instituționale și să facă schimb de bune practici în mod regulat.',
			'Această rețea de profesioniști servește acum drept plasă de siguranță, sursă continuă de inspirație și platformă de suport reciproc. Devenind centre de bune practici, aceste școli sunt acum pregătite să disemineze inovația și să mentoreze, la rândul lor, alte instituții educaționale din Republica Moldova care vor intra în valurile viitoare ale acceleratorului.',
		),
	),
);
?>

<div class="mentoring-page mentoring-page--session-final" id="mentorat-schimb-experienta">

	<section class="mentoring-hero" aria-labelledby="page-title">
		<div class="mentoring-hero__bg" aria-hidden="true"></div>
		<div class="container mentoring-hero__inner">
			<p class="mentoring-hero__lead">
				Transformarea digitală autentică nu se încheie odată cu redactarea unui document strategic, ci devine un mod de viață pentru instituție. Ultima sesiune a marcat punctul culminant al acestui parcurs intensiv.
			</p>
			<div class="mentoring-stats" role="list">
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">Sesiune finală</span>
					<span class="mentoring-stat__label">Încheiere program</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">10 mai 2026</span>
					<span class="mentoring-stat__label">Data</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">12 școli</span>
					<span class="mentoring-stat__label">Comunitate pilot</span>
				</div>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-intro">
		<div class="container">
			<div class="mentoring-intro__card mentoring-intro__card--celebration">
				<p class="mb-3">
					Ultima sesiune s-a transformat dintr-o simplă întâlnire de final într-o platformă efervescentă pentru schimbul de experiență, celebrarea rezultatelor și consolidarea unei noi comunități de practică.
				</p>
				<p class="mb-0">
					După luni de autoevaluare, cercetare-acțiune și experimente pedagogice la clasă, echipele au revenit pentru a-și împărtăși lecțiile învățate, demonstrând că inovația capătă sens doar atunci când este făcută vizibilă și analizată critic.
				</p>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-details" aria-labelledby="mentoring-final-details-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Detalii</span>
				<h2 class="mentoring-section__title" id="mentoring-final-details-title">Detaliile Sesiunii de Încheiere</h2>
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

			<div class="mentoring-guests">
				<h3 class="mentoring-guests__heading">Invitați speciali</h3>
				<p class="mentoring-guests__names">Doru Curoșu, Dumitru Juraveli și Mariana Gurghiș</p>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-activities" aria-labelledby="mentoring-final-activities-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Agendă</span>
				<h2 class="mentoring-section__title" id="mentoring-final-activities-title">Activitățile Principale: De la Implementare la Comunitate</h2>
				<p class="mentoring-section__subtitle">
					Agenda ultimei întâlniri a fost proiectată nu ca un punct final, ci ca o tranziție către o inovație sustenabilă, condusă autonom de către școli.
				</p>
			</header>

			<div class="mentoring-timeline">
				<?php foreach ( $activities as $activity ) : ?>
					<article class="mentoring-timeline__item">
						<div class="mentoring-timeline__marker" aria-hidden="true">
							<span class="mentoring-timeline__number"><?php echo esc_html( $activity['number'] ); ?></span>
						</div>
						<div class="mentoring-timeline__content">
							<h3 class="mentoring-timeline__title"><?php echo esc_html( $activity['title'] ); ?></h3>
							<?php if ( ! empty( $activity['intro'] ) ) : ?>
								<p><?php echo esc_html( $activity['intro'] ); ?></p>
							<?php endif; ?>

							<?php if ( ! empty( $activity['speakers'] ) ) : ?>
								<div class="row g-3 mentoring-speakers-grid">
									<?php foreach ( $speakers as $speaker ) : ?>
										<div class="col-md-4">
											<article class="mentoring-speaker-card">
												<h4 class="mentoring-speaker-card__name"><?php echo esc_html( $speaker['name'] ); ?></h4>
												<p class="mentoring-speaker-card__topic"><?php echo esc_html( $speaker['topic'] ); ?></p>
												<p class="mentoring-speaker-card__desc"><?php echo esc_html( $speaker['desc'] ); ?></p>
											</article>
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

							<?php foreach ( $activity['items'] as $item ) : ?>
								<p><?php echo esc_html( $item ); ?></p>
							<?php endforeach; ?>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-impact" aria-labelledby="mentoring-final-impact-title">
		<div class="container">
			<div class="mentoring-impact__card mentoring-impact__card--final">
				<header class="mentoring-impact__header">
					<span class="mentoring-section__badge mentoring-section__badge--light">Impact</span>
					<h2 class="mentoring-impact__title" id="mentoring-final-impact-title">Impactul Final</h2>
				</header>
				<p class="mb-0">
					Participanții au intrat în programul DigitalAccelerator căutând soluții tehnologice, dar au finalizat programul descoperind că <strong>ei înșiși sunt soluția</strong>. Cu o mentalitate orientată spre cercetare, cu instrumente clare pentru decizii bazate pe date și susținuți de o comunitate puternică, liderii școlari sunt gata să continue, pas cu pas, transformarea educației.
				</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/project-disclaimer' ); ?>

</div>
