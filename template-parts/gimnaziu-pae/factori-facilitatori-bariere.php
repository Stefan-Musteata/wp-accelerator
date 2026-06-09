<?php
/**
 * Secțiunea 6 – Factori facilitatori și bariere.
 *
 * @package Digital_Accelerator
 */

$factori = array(
	array(
		'title'         => 'Culturale',
		'color'         => 'c2',
		'subtitle'      => 'Aspecte legate de valori, mentalități, norme și modul în care comunitatea școlară acceptă schimbarea.',
		'facilitatori'  => array(
			'Atitudine pozitivă față de inovație și digitalizare.',
			'Cultură a colaborării (profesori–elevi–părinți) și comunicare deschisă.',
			'Încredere în experimente și învățare din greșeli (îmbunătățire continuă).',
			'Multiculturalitate și deschidere spre bune practici internaționale.',
		),
		'bariere'       => array(
			'Rezistență la schimbare la unii actori (frica de „nou” sau de evaluare).',
			'Diferențe de ritm între profesori/elevi în adoptarea tehnologiei.',
			'Percepția că digitalul „înlocuiește” rolul profesorului (confuzie de roluri).',
			'Distrageri (ex.: utilizarea necontrolată a telefonului) dacă nu există reguli clare.',
		),
		'narativ'       => 'Factorii culturali accelerează transformarea atunci când comunitatea școlară vede tehnologia ca un sprijin pentru învățare, nu ca un scop în sine. O cultură a colaborării și a îmbunătățirii continue facilitează încercarea de practici noi (platforme digitale, feedback rapid, proiecte creative). Barierele apar mai ales când schimbarea este percepută ca presiune sau când nu există norme comune privind utilizarea tehnologiei (ex.: atenție, etică, responsabilitate).',
		'embed'         => array(
			'type'  => 'grid',
			'items' => array(
				array(
					'url'   => 'https://drive.google.com/file/d/1VvJB-q6ET28qrFO_xNFhMpB48zqM4tYs/preview',
					'title' => 'Factori culturali — exemplu 1',
				),
				array(
					'url'   => 'https://drive.google.com/file/d/10ryd_szZj8iJFUPS-SebiGGmxSq0O5wz/preview',
					'title' => 'Factori culturali — exemplu 2',
				),
				array(
					'url'   => 'https://drive.google.com/file/d/1fUx-Z5wSS--QTiRY6HvLeHvcg_3xNiOB/preview',
					'title' => 'Factori culturali — exemplu 3',
				),
			),
		),
	),
	array(
		'title'         => 'Organizaționale',
		'color'         => 'c1',
		'subtitle'      => 'Structuri, procese, leadership, politici interne și modul de organizare a resurselor.',
		'facilitatori'  => array(
			'Leadership distribuit și responsabilități clare (cine decide / cine implementează).',
			'Planificare și monitorizare sistematică (model tip PDCA).',
			'Acces organizat la resurse (rezervare dispozitive, programare laboratoare).',
			'Formare și suport intern (tehnolog educațional / mentori / echipe).',
		),
		'bariere'       => array(
			'Supraîncărcare administrativă și timp limitat pentru proiectarea lecțiilor digitale.',
			'Diferențe în standardizare (nu toate clasele/profesorii aplică aceleași proceduri).',
			'Dependință de câteva persoane-cheie (riscul de „single point of failure”).',
			'Schimbări frecvente de priorități care pot fragmenta continuitatea.',
		),
		'narativ'       => 'Organizațional, schimbarea devine sustenabilă când există procese clare (planificare–execuție–evaluare–corecție), roluri definite și mecanisme de suport. Facilitator este și managementul resurselor: dispozitivele pot fi folosite eficient dacă există o rutină de rezervare și un minim de standardizare. Barierele apar din lipsa timpului, din inconsistență între practici și din dependența de câteva persoane care „țin” digitalizarea.',
		'embed'         => array(
			'type'  => 'tall',
			'url'   => 'https://drive.google.com/file/d/1wed5-2xiPFgraduEiSSzr_TEyh2YUOtU/preview',
			'title' => 'Factori organizaționali — document suport',
		),
	),
	array(
		'title'         => 'Tehnice',
		'color'         => 'c3',
		'subtitle'      => 'Infrastructură, echipamente, conectivitate, platforme și interoperabilitate.',
		'facilitatori'  => array(
			'Infrastructură digitală funcțională (Wi-Fi, dispozitive, table inteligente).',
			'Platforme educaționale utilizate constant (manuale digitale, management școlar, rapoarte).',
			'Acces pe roluri (RBAC) și trasabilitate (cine vede ce și când).',
			'Instrumente pentru creativitate (ex.: modelare 3D, resurse interactive).',
		),
		'bariere'       => array(
			'Probleme de conectivitate / viteză sau acoperire neuniformă în școală.',
			'Număr limitat de dispozitive la orele de vârf (necesită planificare).',
			'Compatibilități / conturi / parole / acces – pot bloca lecția dacă nu există suport rapid.',
			'Calitatea variabilă a unor funcții (ex.: auto-corectare) fără validare umană.',
		),
		'narativ'       => 'Tehnologia facilitează schimbarea când este „invizibilă”: funcționează predictibil, accesul este simplu, iar platformele sunt integrate în rutina școlii. În schimb, orice întrerupere tehnică poate eroda încrederea profesorilor și reduce dorința de a experimenta. De aceea, suportul rapid și procedurile de rezervă (plan B fără tehnologie) sunt esențiale.',
		'embed'         => array(
			'type'  => 'grid',
			'items' => array(
				array(
					'url'   => 'https://drive.google.com/file/d/1lEfTKHWbjbizKBk09F3E-w-21tHAaC-L/preview',
					'title' => 'Factori tehnici — exemplu 1',
				),
				array(
					'url'   => 'https://drive.google.com/file/d/13AKlSQyFDQYh_Lye8w76qXGF9cgpzwbd/preview',
					'title' => 'Factori tehnici — exemplu 2',
				),
				array(
					'url'   => 'https://drive.google.com/file/d/1VCe7jNt_191XM6cyC3sjP4T8UTQ5tQuE/preview',
					'title' => 'Factori tehnici — exemplu 3',
				),
			),
		),
	),
	array(
		'title'         => 'Pedagogice',
		'color'         => 'c4',
		'subtitle'      => 'Metode de predare-învățare-evaluare, roluri, feedback, diferențiere și managementul clasei.',
		'facilitatori'  => array(
			'Orientare spre învățare activă: proiecte, colaborare, produse digitale.',
			'Feedback rapid și monitorizarea progresului (date + reflecție).',
			'Diferențiere: sprijin pentru elevi, ritm personalizat (clase mici / intervenții).',
			'Integrarea creativității și a competențelor de viitor (ex.: 3D, STEAM, AI).',
		),
		'bariere'       => array(
			'Risc de „digitalizare superficială” (doar mutarea fișelor pe ecran, fără schimbare de metodă).',
			'Evaluare dificilă la sarcini complexe (proiecte, AI) fără rubrici clare.',
			'Distrageri și scăderea atenției dacă nu există reguli și design didactic bun.',
			'Necesitatea dezvoltării competențelor didactice digitale pentru toți profesorii.',
		),
		'narativ'       => 'Pedagogic, transformarea este reală când tehnologia schimbă dinamica lecției: elevul devine mai activ, iar profesorul proiectează experiențe de învățare (nu doar transmite conținut). Practicile precum proiectele (ex.: Tinkercad), feedback-ul rapid și diferențierea cresc calitatea. Barierele apar când tehnologia este folosită fără design didactic, când evaluarea nu are criterii clare sau când lipsește un cadru comun pentru utilizarea AI.',
		'embed'         => array(
			'type'  => 'tall',
			'url'   => 'https://drive.google.com/file/d/1S2HS_kZrIPngj2Kq3pyXVRN6Gs-_-xM3/preview',
			'title' => 'Factori pedagogici — document suport',
		),
	),
);
?>
<div class="pae-factor" aria-label="Factori facilitatori și bariere">
	<?php foreach ( $factori as $factor ) : ?>
		<section class="card border shadow-sm rounded-4 mb-4" aria-label="<?php echo esc_attr( $factor['title'] ); ?>">
			<div class="card-body p-4 p-lg-5">
				<h3 class="h5 fw-bold d-flex align-items-center gap-2 mb-2">
					<span class="pae-factor-chip pae-factor-chip--<?php echo esc_attr( $factor['color'] ); ?>" aria-hidden="true"></span>
					<?php echo esc_html( $factor['title'] ); ?>
				</h3>
				<p class="text-body-secondary small mb-4"><?php echo esc_html( $factor['subtitle'] ); ?></p>

				<div class="row g-3 mb-3">
					<div class="col-lg-6">
						<div class="pae-factor-panel h-100">
							<h4 class="pae-factor-panel__heading">
								<span class="pae-factor-pill">Facilitatori</span>
							</h4>
							<ul class="text-body-secondary small mb-0 ps-3">
								<?php foreach ( $factor['facilitatori'] as $item ) : ?>
									<li class="mb-2"><?php echo esc_html( $item ); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="pae-factor-panel h-100">
							<h4 class="pae-factor-panel__heading">
								<span class="pae-factor-pill pae-factor-pill--bariera">Bariere</span>
							</h4>
							<ul class="text-body-secondary small mb-0 ps-3">
								<?php foreach ( $factor['bariere'] as $item ) : ?>
									<li class="mb-2"><?php echo esc_html( $item ); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="pae-factor-panel mb-4">
					<h4 class="pae-factor-panel__heading">
						<span class="pae-factor-pill">Narativ</span>
					</h4>
					<p class="text-body-secondary small mb-0 lh-base"><?php echo esc_html( $factor['narativ'] ); ?></p>
				</div>

				<?php if ( 'grid' === $factor['embed']['type'] ) : ?>
					<div class="row g-3">
						<?php foreach ( $factor['embed']['items'] as $item ) : ?>
							<div class="col-md-4">
								<div class="pae-date-embed pae-date-embed--sm rounded overflow-hidden border">
									<iframe
										src="<?php echo esc_url( $item['url'] ); ?>"
										title="<?php echo esc_attr( $item['title'] ); ?>"
										loading="lazy"
										allow="autoplay"
									></iframe>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php else : ?>
					<div class="pae-date-embed pae-date-embed--tall rounded overflow-hidden border">
						<iframe
							src="<?php echo esc_url( $factor['embed']['url'] ); ?>"
							title="<?php echo esc_attr( $factor['embed']['title'] ); ?>"
							loading="lazy"
							allow="autoplay"
						></iframe>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endforeach; ?>
</div>
