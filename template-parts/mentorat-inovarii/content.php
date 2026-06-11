<?php
/**
 * Conținut pagină Mentorat: Inovații digitale & Studii de caz.
 *
 * @package Digital_Accelerator
 */

$tkvg_url  = da_get_page_url_by_template( 'tallina-tkvg.php' );
$pae_url   = da_get_page_url_by_template( 'gimnaziu-pae.php' );
$nissi_url = da_get_page_url_by_template( 'scoala-nissi.php' );
$t21_url   = da_get_page_url_by_template( 'scoala-21-talin.php' );

$session_details = array(
	array(
		'label' => 'Data',
		'value' => '7 martie 2026',
		'icon'  => 'calendar',
	),
	array(
		'label' => 'Locația',
		'value' => 'CNIDE „Clasa Viitorului”, UPS „Ion Creangă”, Chișinău',
		'icon'  => 'location',
	),
	array(
		'label' => 'Participanți',
		'value' => 'Cele 12 Echipe Digitale școlare (60 de mentori locali) și cei 12 Meta-mentori',
		'icon'  => 'people',
	),
	array(
		'label' => 'Focus principal',
		'value' => 'Conceptul de inovație educațională, crearea viziunii inițiale și analiza modelelor de bune practici din Estonia',
		'icon'  => 'focus',
	),
);

$activities = array(
	array(
		'number' => '01',
		'title'  => 'Setarea Cadrului și „Innovation Snapshot”',
		'items'  => array(
			'Ziua a debutat cu prezentarea temelor de acasă și setarea regulilor de lucru pentru următoarele luni. Printr-un icebreaker interactiv, participanții au explorat diverse exemple de inovație din educație și din alte industrii.',
			'Punctul culminant al dimineții a fost atelierul practic în care echipele au colaborat pentru a crea un „Innovation Snapshot” (O radiografie a inovației). Fiecare echipă a elaborat un poster vizual care a capturat modul în care ei percep, în acest moment, potențialul de inovare în propriile instituții.',
		),
	),
	array(
		'number' => '02',
		'title'  => 'Galerie de Postere și Feedback între Egali',
		'items'  => array(
			'Inovația necesită validare și perspective multiple. Prin metoda „Gallery Walk” (Galeria de postere), echipele și-au prezentat conceptele („Innovation Snapshot”) în fața colegilor din alte școli și a meta-mentorilor.',
			'Participanții au oferit și au primit feedback structurat, exersând abilitatea de a evalua critic, dar constructiv, inițiativele educaționale.',
			'La finalul acestei etape, echipele au reușit să identifice și să prioritizeze ideile cu cel mai mare potențial de impact pentru contextul lor specific.',
		),
	),
	array(
		'number' => '03',
		'title'  => 'Studii de Caz: Inovația în Școlile din Estonia',
		'items'  => array(
			'Pentru a duce discuția la un nivel superior, partea a doua a zilei a fost dedicată analizei dovezilor externe. Meta-mentorii care au participat la vizitele de studiu au facilitat o sesiune profundă de analiză a celor 4 studii de caz din Estonia.',
			'Obiectivul analizei: Echipele au extras elementele-cheie ale inovației estoniene — leadership-ul distribuit, deciziile bazate pe date, susținerea oferită de tehnologul educațional și cultura curajului de a experimenta.',
		),
	),
);

$case_studies = array(
	array(
		'slug'  => 'tkvg',
		'name'  => 'TKVG (Tallinna Kesklinna Vene Gümnaasium)',
		'question' => 'Cum se aliniază cultura organizațională și cum devine Inteligența Artificială un asistent personal?',
		'url'   => $tkvg_url,
	),
	array(
		'slug'  => 'pae',
		'name'  => 'Gimnaziul PAE',
		'question' => 'Cum funcționează inovația „de jos în sus” prin implicarea directă a elevilor în Dream Teams?',
		'url'   => $pae_url,
	),
	array(
		'slug'  => 'nissi',
		'name'  => 'Școala din Nissi',
		'question' => 'Cum poate o școală rurală să integreze competențele digitale în toate disciplinele?',
		'url'   => $nissi_url,
	),
	array(
		'slug'  => 't21',
		'name'  => 'Școala 21 din Tallinn',
		'question' => 'Cum treci de la achiziția de hardware la reproiectarea pedagogică prin modelul STEAM, făcând tehnologia „invizibilă”?',
		'url'   => $t21_url,
	),
);
?>

<div class="mentoring-page" id="mentorat-inovarii">

	<section class="mentoring-hero" aria-labelledby="page-title">
		<div class="mentoring-hero__bg" aria-hidden="true"></div>
		<div class="container mentoring-hero__inner">
			<p class="mentoring-hero__lead">
				Prima sesiune de mentorat din cadrul programului DigitalAccelerator a marcat punctul de pornire (Kick-off) în călătoria de transformare digitală a celor 12 școli pilot. Desfășurată sub îndrumarea meta-mentorilor, această sesiune a fost dedicată alinierii vizionarilor din școli.
			</p>
			<div class="mentoring-stats" role="list">
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">Sesiunea 1</span>
					<span class="mentoring-stat__label">Kick-off</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">7 martie 2026</span>
					<span class="mentoring-stat__label">Data</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">72</span>
					<span class="mentoring-stat__label">Participanți</span>
				</div>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-intro">
		<div class="container">
			<div class="mentoring-intro__card">
				<p class="mb-3">
					Ce înseamnă cu adevărat inovația și cum putem învăța din modelele de succes validate internațional?
				</p>
				<p class="mb-0">
					Sesiunea nu a fost un curs teoretic, ci un <strong>laborator de idei</strong>, structurat pe principiile învățării între egali (<em>peer-to-peer learning</em>) și ale analizei bazate pe dovezi.
				</p>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-details" aria-labelledby="mentoring-details-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Detalii</span>
				<h2 class="mentoring-section__title" id="mentoring-details-title">Detaliile Sesiunii 1</h2>
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

	<section class="mentoring-section mentoring-activities" aria-labelledby="mentoring-activities-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Agendă</span>
				<h2 class="mentoring-section__title" id="mentoring-activities-title">Activitățile Principale: De la Idee la Strategie</h2>
				<p class="mentoring-section__subtitle">
					Agenda sesiunii a fost concepută pentru a ghida echipele de la explorarea individuală a inovației către o reflecție structurată, ancorată în realitate.
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
							<?php foreach ( $activity['items'] as $item ) : ?>
								<p><?php echo esc_html( $item ); ?></p>
							<?php endforeach; ?>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-cases" aria-labelledby="mentoring-cases-title">
		<div class="container">
			<header class="mentoring-section__header text-center mx-auto">
				<span class="mentoring-section__badge mentoring-section__badge--purple">Studii de caz</span>
				<h2 class="mentoring-section__title" id="mentoring-cases-title">Inovația în Școlile din Estonia</h2>
				<p class="mentoring-section__subtitle mx-auto">
					Cele 4 studii de caz analizate în cadrul sesiunii, facilitate de meta-mentorii care au participat la vizitele de studiu.
				</p>
			</header>

			<div class="row g-4 mentoring-cases-grid">
				<?php foreach ( $case_studies as $index => $case ) : ?>
					<div class="col-md-6">
						<article class="mentoring-case-card mentoring-case-card--<?php echo esc_attr( $case['slug'] ); ?>">
							<span class="mentoring-case-card__index" aria-hidden="true"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
							<h3 class="mentoring-case-card__name"><?php echo esc_html( $case['name'] ); ?></h3>
							<p class="mentoring-case-card__question"><?php echo esc_html( $case['question'] ); ?></p>
							<a class="mentoring-case-card__link" href="<?php echo esc_url( $case['url'] ); ?>">
								Citește studiul de caz
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</a>
						</article>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-impact" aria-labelledby="mentoring-impact-title">
		<div class="container">
			<div class="mentoring-impact__card">
				<header class="mentoring-impact__header">
					<span class="mentoring-section__badge mentoring-section__badge--light">Impact</span>
					<h2 class="mentoring-impact__title" id="mentoring-impact-title">Impactul primei sesiuni</h2>
				</header>
				<p>
					Această primă întâlnire a setat tonul pentru întregul program. Echipele școlare au plecat nu doar cu inspirație, ci și cu o înțelegere comună a limbajului transformării digitale.
				</p>
				<p class="mb-0">
					Dezbaterea studiilor de caz a clarificat un principiu esențial al DigitalAccelerator: <strong>nu copiem instrumente, ci adaptăm mecanisme de succes</strong>. Radiografiile inovației („Innovation Snapshots”) create în această sesiune vor servi drept punct de referință pentru a măsura evoluția viziunii fiecărei școli pe parcursul programului.
				</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/project-disclaimer' ); ?>

</div>
