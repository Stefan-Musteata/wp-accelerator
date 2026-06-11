<?php
/**
 * Conținut pagină Mentorat: Inovație pedagogică & cercetare.
 *
 * @package Digital_Accelerator
 */

$session_details = array(
	array(
		'label' => 'Data',
		'value' => '15 aprilie 2026',
		'icon'  => 'calendar',
	),
	array(
		'label' => 'Locația',
		'value' => 'CNIDE „Clasa Viitorului”, UPS „Ion Creangă”, Chișinău',
		'icon'  => 'location',
	),
	array(
		'label' => 'Participanți',
		'value' => 'Echipele Digitale școlare (60 de mentori locali) sub îndrumarea celor 12 Meta-mentori',
		'icon'  => 'people',
	),
	array(
		'label' => 'Focus principal',
		'value' => 'Noile pedagogii (Michael Fullan), conceptul estonian de învățare, integrarea Inteligenței Artificiale, Action Research și comunicarea digitală a succesului',
		'icon'  => 'focus',
	),
);

$estonian_pillars = array(
	array(
		'title' => 'Mai colaborativ',
		'desc'  => 'Elevii lucrează în echipe pentru a rezolva probleme complexe din lumea reală.',
	),
	array(
		'title' => 'Mai creativ',
		'desc'  => 'Utilizarea pedagogiei STEAM pentru a încuraja inovația.',
	),
	array(
		'title' => 'Mai auto-ghidat',
		'desc'  => 'Creșterea autonomiei elevului în propriul parcurs de învățare.',
	),
);

$research_methods = array(
	array(
		'title' => 'Action Research',
		'subtitle' => 'Cercetare-acțiune',
		'desc'  => 'Un proces prin care profesorii își investighează și își îmbunătățesc sistematic propria practică la clasă.',
	),
	array(
		'title' => 'Design-Based Research',
		'subtitle' => 'Cercetare bazată pe design',
		'desc'  => 'Testarea iterativă a unor soluții educaționale. Participanții au dezvoltat planuri clare: ce date vor colecta, cum le vor analiza și care sunt indicatorii de succes.',
	),
);

$speakers = array(
	array(
		'name'  => 'Ionela Titirez',
		'topic' => 'Inovație și dezvoltare organizațională',
		'desc'  => 'A adus perspective valoroase despre factorii care determină succesul inovării: cultura organizațională, leadershipul distribuit și acceptarea eșecului ca parte a experimentării.',
	),
	array(
		'name'  => 'Doru Curoșu',
		'topic' => 'Leadership și schimbare instituțională',
		'desc'  => 'A explorat modul în care școlile pot susține schimbarea și o pot face vizibilă, consolidând cultura inovației în comunitatea educațională.',
	),
);
?>

<div class="mentoring-page mentoring-page--session-3" id="mentorat-inovatie-pedagogica">

	<section class="mentoring-hero" aria-labelledby="page-title">
		<div class="mentoring-hero__bg" aria-hidden="true"></div>
		<div class="container mentoring-hero__inner">
			<p class="mentoring-hero__lead">
				Adevărata transformare digitală a unei școli nu se măsoară în numărul de dispozitive achiziționate, ci în calitatea experienței de învățare. Această sesiune a fost dedicată reproiectării modului în care se predă.
			</p>
			<div class="mentoring-stats" role="list">
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">Sesiunea 3</span>
					<span class="mentoring-stat__label">Pedagogie &amp; cercetare</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">15 aprilie 2026</span>
					<span class="mentoring-stat__label">Data</span>
				</div>
				<div class="mentoring-stat" role="listitem">
					<span class="mentoring-stat__value">Sala de clasă</span>
					<span class="mentoring-stat__label">Nucleul schimbării</span>
				</div>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-intro">
		<div class="container">
			<div class="mentoring-intro__card">
				<p class="mb-3">
					După etapa de diagnoză și planificare, programul DigitalAccelerator a ghidat echipele școlare către nucleul schimbării: sala de clasă. Sesiunea a pus accent pe inovația pedagogică fundamentată pe dovezi, pe cercetare și pe curajul de a experimenta.
				</p>
				<p class="mb-0">
					Sesiunea a marcat tranziția echipelor de la <strong>planificatori strategici</strong> la <strong>cercetători ai propriei practici</strong>, învățând totodată cum să își asume și să comunice public succesul.
				</p>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-details" aria-labelledby="mentoring-s3-details-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Detalii</span>
				<h2 class="mentoring-section__title" id="mentoring-s3-details-title">Detaliile Sesiunii</h2>
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
				<p class="mentoring-guests__names">Doru Curoșu și Ionela Titirez</p>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-activities" aria-labelledby="mentoring-s3-activities-title">
		<div class="container">
			<header class="mentoring-section__header">
				<span class="mentoring-section__badge">Agendă</span>
				<h2 class="mentoring-section__title" id="mentoring-s3-activities-title">Activitățile Principale: De la Teorie la Experiment</h2>
				<p class="mentoring-section__subtitle">
					Agenda a fost structurată ca un laborator de inovație, unde conceptele academice moderne au fost traduse în instrumente practice pentru profesorii din Republica Moldova.
				</p>
			</header>

			<div class="mentoring-timeline">
				<article class="mentoring-timeline__item">
					<div class="mentoring-timeline__marker" aria-hidden="true">
						<span class="mentoring-timeline__number">01</span>
					</div>
					<div class="mentoring-timeline__content">
						<h3 class="mentoring-timeline__title">Noile Pedagogii și Conceptul Estonian de Învățare</h3>
						<p>Un punct central al sesiunii a fost redefinirea rolului tehnologiei în educație, pornind de la abordarea recunoscutului cercetător <strong>Michael Fullan</strong> privind „Noile Pedagogii pentru o Învățare Profundă” (<em>New Pedagogies for Deep Learning</em>). Participanții au înțeles că tehnologia trebuie să accelereze trecerea elevului din rolul de consumator pasiv de informație în cel de creator activ.</p>

						<div class="mentoring-callout">
							<p class="mentoring-callout__label">Conceptul estonian MÕK</p>
							<p class="mb-0">Echipele au explorat modul în care Estonia a redefinit învățarea (<em>Muutunud Õpikäsitus</em>), transformând-o într-un proces:</p>
						</div>

						<div class="row g-3 mentoring-domains-grid">
							<?php foreach ( $estonian_pillars as $index => $pillar ) : ?>
								<div class="col-md-4">
									<div class="mentoring-domain-card mentoring-domain-card--<?php echo esc_attr( (string) ( $index + 1 ) ); ?>">
										<h4 class="mentoring-domain-card__title"><?php echo esc_html( $pillar['title'] ); ?></h4>
										<p class="mentoring-domain-card__examples"><?php echo esc_html( $pillar['desc'] ); ?></p>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="mentoring-result">
							<strong>Inteligența Artificială:</strong> Discuțiile s-au axat pe utilizarea etică și pedagogică a AI-ului nu ca pe o simplă unealtă tehnică, ci ca pe un asistent educațional care sprijină personalizarea învățării și reduce din sarcinile administrative ale profesorului.
						</div>
					</div>
				</article>

				<article class="mentoring-timeline__item">
					<div class="mentoring-timeline__marker" aria-hidden="true">
						<span class="mentoring-timeline__number">02</span>
					</div>
					<div class="mentoring-timeline__content">
						<h3 class="mentoring-timeline__title">Intervenția Măsurată: Action Research și Design-Based Research</h3>
						<p>Inovația educațională nu trebuie să se bazeze pe intuiție, ci pe date. Meta-mentorii au instruit echipele școlare cum să proiecteze un experiment pedagogic digital (de exemplu, o lecție integrată STEAM, un Escape Room educațional sau o activitate bazată pe Realitate Augmentată).</p>

						<div class="row g-3 mentoring-research-grid">
							<?php foreach ( $research_methods as $index => $method ) : ?>
								<div class="col-md-6">
									<article class="mentoring-research-card mentoring-research-card--<?php echo esc_attr( (string) ( $index + 1 ) ); ?>">
										<p class="mentoring-research-card__subtitle"><?php echo esc_html( $method['subtitle'] ); ?></p>
										<h4 class="mentoring-research-card__title"><?php echo esc_html( $method['title'] ); ?></h4>
										<p class="mentoring-research-card__desc"><?php echo esc_html( $method['desc'] ); ?></p>
									</article>
								</div>
							<?php endforeach; ?>
						</div>

						<p class="mb-0">O recomandare esențială a fost implicarea directă a elevilor în acest proces de evaluare și colectare a datelor.</p>
					</div>
				</article>

				<article class="mentoring-timeline__item">
					<div class="mentoring-timeline__marker" aria-hidden="true">
						<span class="mentoring-timeline__number">03</span>
					</div>
					<div class="mentoring-timeline__content">
						<h3 class="mentoring-timeline__title">Lecții de Leadership și Diseminarea Succesului</h3>
						<p>O componentă vitală a schimbării este capacitatea de a o susține și de a o face vizibilă. Partea a doua a sesiunii a fost susținută de doi invitați speciali cu o vastă expertiză în inovație și dezvoltare organizațională.</p>

						<div class="row g-3 mentoring-speakers-grid mentoring-speakers-grid--duo">
							<?php foreach ( $speakers as $speaker ) : ?>
								<div class="col-md-6">
									<article class="mentoring-speaker-card">
										<h4 class="mentoring-speaker-card__name"><?php echo esc_html( $speaker['name'] ); ?></h4>
										<p class="mentoring-speaker-card__topic"><?php echo esc_html( $speaker['topic'] ); ?></p>
										<p class="mentoring-speaker-card__desc"><?php echo esc_html( $speaker['desc'] ); ?></p>
									</article>
								</div>
							<?php endforeach; ?>
						</div>

						<p>Mai mult, echipele au abordat o provocare majoră: școlile inovează, dar rareori știu cum să își promoveze realizările. Participanții au învățat cum să comunice despre succesul lor în social media și în mediul digital.</p>
						<p class="mb-0">Folosind instrumente de tip <em>storytelling</em>, mentorii au exersat transformarea rezultatelor pedagogice în narative de impact, pregătind postări pentru rețelele de socializare și platformele instituționale. Ei au înțeles că o inovație vizibilă atrage susținerea comunității, a părinților și inspiră alte instituții.</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="mentoring-section mentoring-impact" aria-labelledby="mentoring-s3-impact-title">
		<div class="container">
			<div class="mentoring-impact__card">
				<header class="mentoring-impact__header">
					<span class="mentoring-section__badge mentoring-section__badge--light">Impact</span>
					<h2 class="mentoring-impact__title" id="mentoring-s3-impact-title">Impactul Sesiunii</h2>
				</header>
				<p class="mb-0">
					În urma acestei sesiuni, Echipele Digitale au plecat nu doar cu idei teoretice, ci cu <strong>experimente pedagogice concrete</strong>, gata de a fi testate la clasă. Integrarea abordărilor lui Michael Fullan și a modelului estonian le-a oferit o viziune clară asupra învățării moderne, în timp ce rigoarea instrumentelor de Action Research le-a garantat că orice schimbare va fi documentată și validată. Prin abilitățile dobândite de comunicare digitală, școlile din programul DigitalAccelerator sunt acum pregătite să devină adevărate centre de bune practici, capabile să își inspire propriile comunități.
				</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/project-disclaimer' ); ?>

</div>
