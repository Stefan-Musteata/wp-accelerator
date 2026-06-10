<?php
/**
 * Conținut pagină Mentori & Meta-mentori.
 *
 * @package Digital_Accelerator
 */

$meta_mentori = array(
	array(
		'name'     => 'Calistru Victoria',
		'role'     => 'Meta-Coordonator',
		'school'   => 'LT „Petru Zadnipru”, mun. Chișinău',
		'lead'     => true,
	),
	array(
		'name'     => 'Lapp Tudor',
		'role'     => 'Meta-Coordonator',
		'school'   => 'LT „Onisifor Ghibu”, or. Orhei',
		'lead'     => true,
	),
	array(
		'name'     => 'Băbălău Ion',
		'role'     => '',
		'school'   => 'LT „Ion Creangă”, or. Fălești',
		'lead'     => false,
	),
	array(
		'name'     => 'Juc Viorica',
		'role'     => '',
		'school'   => 'LT „Mihail Sadoveanu”, or. Ocnița',
		'lead'     => false,
	),
	array(
		'name'     => 'Leahu Alexandru',
		'role'     => '',
		'school'   => 'LT „Mihai Eminescu”, or. Drochia',
		'lead'     => false,
	),
	array(
		'name'     => 'Beleac Liliana',
		'role'     => '',
		'school'   => 'LT „Grigore Vieru”, or. Briceni',
		'lead'     => false,
	),
	array(
		'name'     => 'Obadă Alexandru',
		'role'     => '',
		'school'   => 'LT „Mihail Ciachir”, or. Ceadîr-Lunga',
		'lead'     => false,
	),
	array(
		'name'     => 'Chistol Elena',
		'role'     => '',
		'school'   => 'LT „Miron Costin”, or. Florești',
		'lead'     => false,
	),
	array(
		'name'     => 'Donos Inna',
		'role'     => '',
		'school'   => 'LT „B. P. Hașdeu”, mun. Bălți',
		'lead'     => false,
	),
	array(
		'name'     => 'Guriță Elena',
		'role'     => '',
		'school'   => 'LT „Boris Dînga”, or. Criuleni',
		'lead'     => false,
	),
	array(
		'name'     => 'Băț Iulia',
		'role'     => '',
		'school'   => 'LT „Alexei Mateevici”, or. Căinari, Căușeni',
		'lead'     => false,
	),
	array(
		'name'     => 'Godovaniuc Sergiu',
		'role'     => '',
		'school'   => 'LT „Alexei Mateevici”, or. Dondușeni',
		'lead'     => false,
	),
);

$meta_roles = array(
	array(
		'title' => 'Ghidaj în Autoevaluare',
		'text'  => 'Facilitează procesul prin care școala își evaluează maturitatea digitală folosind instrumentul DigitalMirror (Oglinda Digitală).',
		'icon'  => 'mirror',
	),
	array(
		'title' => 'Decizii Bazate pe Date',
		'text'  => 'Ajută conducerea școlii să interpreteze rezultatele, să identifice problemele reale și să ia decizii bazate pe dovezi (<em>data-informed decision making</em>).',
		'icon'  => 'chart',
	),
	array(
		'title' => 'Dezvoltare Strategică',
		'text'  => 'Oferă suport în elaborarea și implementarea Planului de Dezvoltare Digitală pe 2 ani al instituției.',
		'icon'  => 'plan',
	),
	array(
		'title' => 'Transfer de Bune Practici',
		'text'  => 'Participă la vizitele de studiu din Estonia, documentează succesul celor 4 școli estoniene (TKVG, PAE, Nissi, Școala 21) și transferă modele de leadership agil în contextul moldovenesc.',
		'icon'  => 'transfer',
	),
	array(
		'title' => 'Cercetare-Acțiune',
		'text'  => 'Documentează și analizează procesul de schimbare, ajustând intervențiile în timp real.',
		'icon'  => 'research',
	),
);

$mentor_roles = array(
	array(
		'title' => 'Proprietarii Schimbării',
		'text'  => 'Sunt responsabili direct de transformarea propriei școli. Nu sunt simpli executanți, ci co-creatori ai viziunii instituționale.',
	),
	array(
		'title' => 'Implementarea Autoevaluării',
		'text'  => 'Organizează colectarea de date la nivelul școlii, implicând colegii de cancelarie, elevii și părinții în completarea sondajelor și instrumentelor de diagnoză.',
	),
	array(
		'title' => 'Redactarea Planului de Acțiune',
		'text'  => 'Traduc datele într-un plan de acțiune fezabil, stabilind priorități clare de dezvoltare pentru următorii ani.',
	),
	array(
		'title' => 'Inovația Pedagogică la Clasă',
		'text'  => 'Pilotează noi strategii didactice (ex. pedagogia STEAM, utilizarea responsabilă a Inteligenței Artificiale, instrumente de evaluare formativă) și le demonstrează eficiența în practică.',
	),
	array(
		'title' => 'Difuzia Inovației',
		'text'  => 'Acționează după principiul estonian „profesorul învață profesorul”. Oferă sprijin direct colegilor, reducând rezistența la schimbare și izolarea profesională.',
	),
);
?>

<div class="mentors-page" id="mentori-meta-mentori">

	<section class="mentors-hero" aria-labelledby="mentors-hero-title">
		<div class="mentors-hero__bg" aria-hidden="true"></div>
		<div class="container mentors-hero__inner">
			<h2 class="mentors-hero__title" id="mentors-hero-title">
				Mentori și Meta-mentori: Arhitecții Transformării Digitale în Școlile din Moldova
			</h2>
			<p class="mentors-hero__lead">
				În cadrul programului DigitalAccelerator, credem cu tărie că transformarea digitală a educației nu se rezumă la achiziția de echipamente. Adevărata schimbare este condusă de oameni: lideri educaționali capabili să schimbe mentalități, să interpreteze date și să ghideze comunitățile școlare spre inovație.
			</p>
			<div class="mentors-stats" role="list">
				<div class="mentors-stat" role="listitem">
					<span class="mentors-stat__value">12</span>
					<span class="mentors-stat__label">Meta-mentori</span>
				</div>
				<div class="mentors-stat" role="listitem">
					<span class="mentors-stat__value">60</span>
					<span class="mentors-stat__label">Mentori școlari</span>
				</div>
				<div class="mentors-stat" role="listitem">
					<span class="mentors-stat__value">2</span>
					<span class="mentors-stat__label">Niveluri de expertiză</span>
				</div>
			</div>
		</div>
	</section>

	<section class="mentors-section mentors-intro">
		<div class="container">
			<div class="mentors-intro__card">
				<p>
					Pentru a asigura o schimbare profundă și sustenabilă, am dezvoltat un model de guvernanță și suport bazat pe două niveluri de expertiză: <strong>12 Meta-mentori</strong> și <strong>60 de Mentori școlari</strong>.
				</p>
				<p class="mb-0">
					Acest ecosistem de mentorat funcționează ca un parteneriat strategic. Nu impunem soluții de sus în jos, ci sprijinim fiecare școală să își dezvolte propria viziune digitală printr-un proces riguros de cercetare-acțiune (<em>action research</em>).
				</p>
			</div>
		</div>
	</section>

	<section class="mentors-section mentors-level mentors-level--meta" aria-labelledby="mentors-meta-title">
		<div class="container">
			<header class="mentors-section__header">
				<span class="mentors-section__badge mentors-section__badge--purple">Nivel strategic</span>
				<h2 class="mentors-section__title" id="mentors-meta-title">Cei 12 Meta-Mentori: Liderii Strategici și Experții DigiProf-C</h2>
				<p class="mentors-section__subtitle">
					Cei 12 Meta-mentori sunt agenții de schimbare ai programului. Selecționați dintre cei mai buni experți, formatori și coordonatori în tehnologie educațională din Republica Moldova, aceștia sunt înrolați în programul de excelență DigiProf-C (pentru atingerea nivelului C2 de competență digitală conform cadrului european DigCompEdu).
				</p>
			</header>

			<p class="mentors-level__note">
				Fiecărui meta-mentor îi este alocată o școală pilot din cadrul DigitalAccelerator, unde acționează ca un „antrenor” (<em>coach</em>) și cercetător pentru echipa locală.
			</p>

			<h3 class="mentors-roles-heading">Rolul Meta-mentorilor</h3>
			<div class="row g-4 mentors-roles-grid">
				<?php foreach ( $meta_roles as $index => $role ) : ?>
					<div class="col-md-6 col-lg-4<?php echo ( 4 === $index ) ? ' col-lg-6' : ''; ?>">
						<article class="mentors-role-card mentors-role-card--meta">
							<span class="mentors-role-card__index" aria-hidden="true"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
							<h4 class="mentors-role-card__title"><?php echo esc_html( $role['title'] ); ?></h4>
							<p class="mentors-role-card__text"><?php echo wp_kses_post( $role['text'] ); ?></p>
						</article>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="mentors-team">
				<h3 class="mentors-team__heading">Echipa celor 12 Meta-Mentori DigitalAccelerator</h3>
				<div class="row g-3 mentors-team-grid">
					<?php foreach ( $meta_mentori as $mentor ) : ?>
						<div class="col-sm-6 col-lg-4">
							<article class="mentors-person-card<?php echo $mentor['lead'] ? ' mentors-person-card--lead' : ''; ?>">
								<?php if ( $mentor['lead'] ) : ?>
									<span class="mentors-person-card__badge"><?php echo esc_html( $mentor['role'] ); ?></span>
								<?php endif; ?>
								<h4 class="mentors-person-card__name"><?php echo esc_html( $mentor['name'] ); ?></h4>
								<p class="mentors-person-card__school"><?php echo esc_html( $mentor['school'] ); ?></p>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="mentors-section mentors-level mentors-level--local" aria-labelledby="mentors-local-title">
		<div class="container">
			<header class="mentors-section__header">
				<span class="mentors-section__badge">Nivel local</span>
				<h2 class="mentors-section__title" id="mentors-local-title">Cei 60 de Mentori: Echipele Digitale din Școli</h2>
				<p class="mentors-section__subtitle">
					Pentru ca inovația să prindă rădăcini, ea trebuie asumată din interior. În fiecare dintre cele 12 școli incluse în program, a fost formată o echipă de 5 mentori locali (în total 60 de persoane la nivel național).
				</p>
			</header>

			<div class="mentors-local-highlight">
				<p class="mb-0">
					Aceste <strong>„Echipe Digitale”</strong> (<em>Digital Teams</em>) sunt formate, de regulă, din directorul sau directorul adjunct al instituției și patru profesori inovatori, pasionați de tehnologie și pedagogie.
				</p>
			</div>

			<h3 class="mentors-roles-heading">Rolul celor 60 de Mentori Școlari</h3>
			<div class="row g-4 mentors-roles-grid">
				<?php foreach ( $mentor_roles as $index => $role ) : ?>
					<div class="col-md-6">
						<article class="mentors-role-card mentors-role-card--local">
							<span class="mentors-role-card__index" aria-hidden="true"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
							<h4 class="mentors-role-card__title"><?php echo esc_html( $role['title'] ); ?></h4>
							<p class="mentors-role-card__text"><?php echo esc_html( $role['text'] ); ?></p>
						</article>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="mentors-section mentors-synergy" aria-labelledby="mentors-synergy-title">
		<div class="container">
			<header class="mentors-section__header text-center mx-auto">
				<span class="mentors-section__badge">Sinergie</span>
				<h2 class="mentors-section__title" id="mentors-synergy-title">Cum funcționează sinergia?</h2>
				<p class="mentors-section__subtitle mx-auto">
					Modelul DigitalAccelerator se bazează pe principiul „învățării organizaționale cu buclă dublă” (<em>double-loop learning</em>).
				</p>
			</header>

			<div class="row g-4 mentors-synergy-grid">
				<div class="col-lg-6">
					<article class="mentors-synergy-card mentors-synergy-card--meta">
						<div class="mentors-synergy-card__icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M6 20v-1a6 6 0 0 1 12 0v1"/></svg>
						</div>
						<h3 class="mentors-synergy-card__title">Meta-mentorul</h3>
						<p>Aduce perspectiva externă, rigoarea metodologică și bunele practici internaționale. El provoacă presupunerile existente și ghidează prin întrebări dificile.</p>
					</article>
				</div>
				<div class="col-lg-6">
					<article class="mentors-synergy-card mentors-synergy-card--local">
						<div class="mentors-synergy-card__icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						</div>
						<h3 class="mentors-synergy-card__title">Echipa de 5 mentori</h3>
						<p>Aduce cunoașterea profundă a contextului local, conexiunea cu elevii și puterea de execuție de zi cu zi.</p>
					</article>
				</div>
			</div>

			<p class="mentors-synergy__closing">
				Împreună, ei nu schimbă doar tehnologia pe care o folosește școala, ci cultura, viziunea și pedagogia care stau la baza învățării.
			</p>
		</div>
	</section>

	<blockquote class="mentors-quote" cite="https://michaelfullan.ca/">
		<div class="container">
			<p class="mentors-quote__text">
				„Schimbarea reală nu este ceva ce poți impune la început, ci un rezultat pe care îl construiești printr-un proces de calitate.”
			</p>
			<cite class="mentors-quote__author">— Michael Fullan</cite>
		</div>
	</blockquote>

	<footer class="mentors-disclaimer">
		<div class="container">
			<p>
				Acest proiect este finanțat de Global Partnership for Education, UNICEF Moldova și EstDev, la inițiativa Ministerului Educației și Cercetării al Republicii Moldova, și este implementat de Universitatea din Tallinn, Fundația pentru Dezvoltare din Republica Moldova și Centrul Național de Inovații Digitale în Educație „Clasa Viitorului”. Conținutul acestui website reflectă activitățile și rezultatele proiectului Digital Accelerator și nu reprezintă în mod necesar poziția oficială a finanțatorilor sau a partenerilor implicați.
			</p>
		</div>
	</footer>

</div>
