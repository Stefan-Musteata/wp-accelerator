<?php
/**
 * Conținut pagină Mentorat: Competență digitală & Capacitate profesională.
 *
 * @package Digital_Accelerator
 */

$session_details = array(
	array(
		'label' => 'Data',
		'value' => '4 aprilie 2026',
		'icon'  => 'calendar',
	),
	array(
		'label' => 'Locația',
		'value' => 'CNIDE „Clasa Viitorului”, UPS „Ion Creangă”, Chișinău',
		'icon'  => 'location',
	),
	array(
		'label' => 'Participanți',
		'value' => 'Echipele Digitale școlare (60 de mentori locali) și cei 12 Meta-mentori',
		'icon'  => 'people',
	),
	array(
		'label' => 'Focus principal',
		'value' => 'Măsurarea, analiza și planificarea dezvoltării competențelor digitale folosind modelele europene DigComp (pentru elevi) și DigCompEdu (pentru profesori)',
		'icon'  => 'focus',
	),
);

$digcomp_areas = array(
	'Alfabetizarea informațională și de date',
	'Comunicarea și colaborarea',
	'Crearea de conținut digital',
	'Siguranța',
	'Rezolvarea problemelor',
);

$digcomp_steps = array(
	array(
		'title' => 'Măsurare și colectare de date',
		'desc'  => 'Cum poate o școală să afle nivelul real al elevilor? Echipele au identificat indicatori, instrumente (chestionare, teste practice) și surse de date relevante.',
	),
	array(
		'title' => 'Analiză și prioritizare',
		'desc'  => 'Odată datele colectate, mentorii au simulat procesul de extragere a priorităților pentru a planifica intervenții directe.',
	),
	array(
		'title' => 'De la consum la creație',
		'desc'  => 'Scopul este trecerea elevilor din rolul de simpli consumatori de tehnologie în cel de creatori de conținut și rezolvatori de probleme.',
	),
);

$digcompedu_areas = array(
	'Implicarea profesională',
	'Resursele digitale',
	'Predarea și învățarea',
	'Evaluarea',
	'Abilitarea elevilor',
	'Facilitarea competenței digitale a elevilor',
);

$digcompedu_focus = array(
	array(
		'title' => 'Măsurare fără intimidare',
		'desc'  => 'Meta-mentorii au ghidat echipele în identificarea instrumentelor de autoevaluare și a tipurilor de evidențe care sprijină o creștere organică, nu una punitivă.',
	),
	array(
		'title' => 'Decizii bazate pe date',
		'desc'  => 'Dacă datele arată o lacună în „Evaluarea digitală”, școala va ști exact ce tip de cursuri de formare continuă trebuie să solicite sau să organizeze intern.',
	),
);
?>

<div class="mentoring-page mentoring-page--session-digcomp" id="mentorat-competenta-digitala">

	<section class="mentoring-hero" aria-labelledby="page-title">
		<div class="mentoring-hero__bg" aria-hidden="true"></div>
		<div class="container mentoring-hero__inner">
			<p class="mentoring-hero__lead">
				Infrastructura digitală modernă și o viziune strategică excelentă nu pot produce o schimbare reală în absența unei resurse umane capabile să le valorifice. Această sesiune a adus în prim-plan cel mai important „motor” al transformării.
			</p>
			<div class="mentoring-stats" role="list">
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">Sesiunea 3</span>
					<span class="mentoring-stat__label">DigComp &amp; DigCompEdu</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">4 aprilie 2026</span>
					<span class="mentoring-stat__label">Data</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">2 cadre</span>
					<span class="mentoring-stat__label">Standarde europene</span>
				</div>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-intro">
		<div class="container">
			<div class="mentoring-intro__card mentoring-intro__card--frameworks">
				<p class="mb-3">
					Pentru a construi un plan de dezvoltare eficient, școlile trebuie să aibă un limbaj comun privind competențele și să folosească standarde validate internațional.
				</p>
				<p class="mb-0">
					Sesiunea s-a axat pe aprofundarea și operaționalizarea a două cadre europene fundamentale: <strong>DigComp</strong> (pentru elevi) și <strong>DigCompEdu</strong> (pentru profesori).
				</p>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-details" aria-labelledby="mentoring-digcomp-details-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Detalii</span>
				<h2 class="mentoring-section__title" id="mentoring-digcomp-details-title">Detaliile Sesiunii 3</h2>
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

	<section class="mentoring-section mentoring-activities" aria-labelledby="mentoring-digcomp-activities-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Agendă</span>
				<h2 class="mentoring-section__title" id="mentoring-digcomp-activities-title">Activitățile Principale: De la Cadre Europene la Realitatea Școlară</h2>
				<p class="mentoring-section__subtitle">
					Sesiunea a fost împărțită în două blocuri majore, fiecare dedicat unuia dintre principalii actori ai procesului educațional: elevul și profesorul.
				</p>
			</header>

			<div class="mentoring-timeline">
				<article class="mentoring-timeline__item">
					<div class="mentoring-timeline__marker" aria-hidden="true">
						<span class="mentoring-timeline__number">01</span>
					</div>
					<div class="mentoring-timeline__content">
						<div class="mentoring-framework-badge mentoring-framework-badge--digcomp">DigComp 3.0</div>
						<h3 class="mentoring-timeline__title">Competența Digitală a Elevilor: Modelul DigComp</h3>
						<p>Prima parte a zilei a fost dedicată integrării Cadrului European pentru Competențe Digitale (<strong>DigComp 3.0</strong>) în activitatea școlară. Acest cadru definește ceea ce înseamnă să fii un cetățean capabil și responsabil în era digitală, depășind simpla utilizare a dispozitivelor.</p>

						<p class="mentoring-subheading">Cele 5 arii de competență</p>
						<div class="row g-2 mentoring-competency-grid">
							<?php foreach ( $digcomp_areas as $index => $area ) : ?>
								<div class="col-sm-6 col-lg-4<?php echo ( 4 === $index ) ? ' col-lg-8' : ''; ?>">
									<div class="mentoring-competency-card mentoring-competency-card--digcomp">
										<span class="mentoring-competency-card__index"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
										<span class="mentoring-competency-card__label"><?php echo esc_html( $area ); ?></span>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="row g-3 mentoring-steps-grid">
							<?php foreach ( $digcomp_steps as $step ) : ?>
								<div class="col-md-4">
									<article class="mentoring-step-card">
										<h4 class="mentoring-step-card__title"><?php echo esc_html( $step['title'] ); ?></h4>
										<p class="mentoring-step-card__desc"><?php echo esc_html( $step['desc'] ); ?></p>
									</article>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</article>

				<article class="mentoring-timeline__item">
					<div class="mentoring-timeline__marker" aria-hidden="true">
						<span class="mentoring-timeline__number">02</span>
					</div>
					<div class="mentoring-timeline__content">
						<div class="mentoring-framework-badge mentoring-framework-badge--digcompedu">DigCompEdu</div>
						<h3 class="mentoring-timeline__title">Capacitatea Profesională a Profesorilor: Modelul DigCompEdu</h3>
						<p>Nicio inovație pedagogică nu poate depăși nivelul de pregătire al profesorului. Partea a doua a zilei s-a axat pe Cadrul European pentru Competența Digitală a Cadrelor Didactice (<strong>DigCompEdu</strong>). Acest model măsoară capacitatea pedagogică de a utiliza tehnologia, nu abilitățile IT generale.</p>

						<p class="mentoring-subheading">Cele 6 arii specifice profesiei didactice</p>
						<div class="row g-2 mentoring-competency-grid">
							<?php foreach ( $digcompedu_areas as $index => $area ) : ?>
								<div class="col-sm-6 col-lg-4">
									<div class="mentoring-competency-card mentoring-competency-card--digcompedu">
										<span class="mentoring-competency-card__index"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
										<span class="mentoring-competency-card__label"><?php echo esc_html( $area ); ?></span>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="row g-3 mentoring-research-grid">
							<?php foreach ( $digcompedu_focus as $index => $item ) : ?>
								<div class="col-md-6">
									<article class="mentoring-research-card mentoring-research-card--<?php echo esc_attr( (string) ( $index + 1 ) ); ?>">
										<h4 class="mentoring-research-card__title"><?php echo esc_html( $item['title'] ); ?></h4>
										<p class="mentoring-research-card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
									</article>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="mentoring-result">
							Sesiunea s-a încheiat cu exerciții de integrare a nevoilor de formare identificate în <strong>Planul de Dezvoltare Instituțională</strong>.
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-impact" aria-labelledby="mentoring-digcomp-impact-title">
		<div class="container">
			<div class="mentoring-impact__card">
				<header class="mentoring-impact__header">
					<span class="mentoring-section__badge mentoring-section__badge--light">Impact</span>
					<h2 class="mentoring-impact__title" id="mentoring-digcomp-impact-title">Impactul celei de-a treia sesiuni</h2>
				</header>
				<p>
					Prin aprofundarea DigComp și DigCompEdu, Echipele Digitale au dobândit o hartă clară a destinației lor. Ei au înțeles că o școală matură digital nu este cea care are cele mai multe table interactive, ci cea care are un plan coerent și intenționat de a crește nivelul competențelor digitale pentru toți membrii comunității sale.
				</p>
				<p class="mb-0">
					Această sesiune a oferit școlilor instrumentarul necesar pentru a asigura un aliniament perfect între echipamentele deținute, obiectivele educaționale setate și nevoile reale de formare ale profesorilor și elevilor.
				</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/project-disclaimer' ); ?>

</div>
