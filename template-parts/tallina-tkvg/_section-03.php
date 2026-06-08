<?php
/**
 * Secțiunea 03 - leadership și guvernanță.
 *
 * @package Digital_Accelerator
 */

$compare_rows = array(
	array(
		'direction' => 'Planificarea strategică',
		'national'  => array( 'front' => 'Stabilitate pe termen lung', 'back' => 'Planificare multi-anuală, corelată cu politici naționale și indicatori de calitate.' ),
		'tkvg'      => array( 'front' => '„Planificare Beta”', 'back' => 'Plan strategic pe 3 ani, revizuit periodic (anual) pentru integrarea inovațiilor IA.' ),
		'goal'      => array( 'front' => 'Agilitate', 'back' => 'Revizuirea periodică menține relevanța planului în contextul schimbărilor rapide.' ),
	),
	array(
		'direction' => 'Alegerea ecosistemului',
		'national'  => array( 'front' => 'Standardizare / centralizare', 'back' => 'Presiune pentru utilizarea Microsoft la nivel municipal (cadru comun).' ),
		'tkvg'      => array( 'front' => 'Model hibrid (GWS + MS)', 'back' => 'Google Workspace pentru pedagogie; Microsoft utilizat preponderent administrativ.' ),
		'goal'      => array( 'front' => 'Autonomie pedagogică', 'back' => 'Instrumentele sunt alese pentru eficiență didactică, nu doar pentru conformare birocratică.' ),
	),
	array(
		'direction' => 'Pregătirea cadrelor',
		'national'  => array( 'front' => 'Formare externă (HITSA)', 'back' => 'Cursuri periodice și programe naționale pentru dezvoltarea competențelor digitale.' ),
		'tkvg'      => array( 'front' => 'Webinar-uri săptămânale', 'back' => 'Model „Profesorul învață profesorul”; transfer rapid de bune practici în interiorul școlii.' ),
		'goal'      => array( 'front' => 'Difuzia inovației', 'back' => 'Reducerea rezistenței la schimbare prin sprijin orizontal și mentorat între colegi.' ),
	),
	array(
		'direction' => 'Rolul tehnologiei în clasă',
		'national'  => array( 'front' => 'Standarde digitale', 'back' => 'Integrarea transversală a tehnologiei în toate disciplinele și activitățile educaționale.' ),
		'tkvg'      => array( 'front' => 'IA ca mentor individual', 'back' => 'Elevii utilizează IA pentru explorare, înțelegere și creare de conținut educațional.' ),
		'goal'      => array( 'front' => 'Personalizarea învățării', 'back' => 'Profesorul evoluează spre rolul de designer de experiențe de învățare.' ),
	),
	array(
		'direction' => 'Managementul datelor',
		'national'  => array( 'front' => 'Sisteme naționale', 'back' => 'Platforme instituționale utilizate pentru prezență, evaluare și management educațional.' ),
		'tkvg'      => array( 'front' => 'Analitică în timp real', 'back' => 'Feedback instant bazat pe date colectate în timpul procesului didactic.' ),
		'goal'      => array( 'front' => 'Decizii bazate pe date', 'back' => 'Profesorul poate adapta predarea în funcție de progresul real al elevilor.' ),
	),
	array(
		'direction' => 'Contextul lingvistic',
		'national'  => array( 'front' => 'Reforma lingvistică', 'back' => 'Creșterea treptată a ponderii predării în limba oficială a statului.' ),
		'tkvg'      => array( 'front' => 'Instrumente digitale de suport', 'back' => 'Utilizarea traducerii asistate și resurselor multilingve pentru menținerea calității predării.' ),
		'goal'      => array( 'front' => 'Echitate și calitate', 'back' => 'Asigurarea accesului egal la educație și menținerea standardelor academice.' ),
	),
);
?>

<section id="tkvg-actori">
	<div class="tkvg-divider">3. Leadership și guvernanță</div>

	<h3 class="h5 mb-2">3.1. Rolurile actorilor-cheie</h3>
	<p>Leadershipul educațional în cadrul Tallinna Kesklinna Vene Gümnaasium (TKVG) se bazează pe o distribuție clară a responsabilităților și pe funcționarea unui sistem de conducere colaborativ, caracterizat prin deschidere decizională și coerență strategică. Structura de guvernanță reflectă principiile managementului democratic descrise în documentele strategice ale instituției și în cadrul normativ estonian.</p>
	<p><strong>Rolurile actorilor-cheie sunt conturate astfel:</strong></p>
	<ol>
		<li><em><strong>Directorul instituției exercită leadership strategic</strong></em>, având responsabilitatea formulării viziunii de dezvoltare pe termen mediu și lung, precum și a asigurării condițiilor organizaționale și materiale necesare implementării acesteia. Deciziile directorului sunt fundamentate pe date instituționale și pe rezultatele evaluărilor interne.</li>
		<li><strong>Tehnologul educațional (haridustehnoloog)</strong> are un rol de intermediere între nivelul strategic și practica pedagogică. Acesta sprijină cadrele didactice în integrarea tehnologiilor digitale, interpretează indicatorii privind competențele digitale și contribuie la adaptarea soluțiilor tehnice la nevoile reale ale procesului didactic.</li>
		<li><strong>Echipa de management (Juhtkond)</strong> funcționează ca un nucleu decizional colectiv, responsabil de coordonarea proceselor administrative, pedagogice și de dezvoltare instituțională. Activitatea acesteia este caracterizată prin continuitate decizională și cooperare între departamente.</li>
		<li><strong>Șefii de comisii metodice (ainekoondiste juhid)</strong> acționează ca structuri de legătură între cadrele didactice și conducerea școlii. Aceștia colectează propunerile profesorilor, monitorizează implementarea deciziilor pedagogice și contribuie la ajustarea planurilor operaționale.</li>
		<li><strong>Consiliul Școlii (Hoolekogu) și Consiliul Elevilor</strong> participă activ la procesele de aprobare a documentelor strategice și la organizarea vieții școlare, consolidând dimensiunea participativă a guvernanței instituționale.</li>
	</ol>

	<div class="row g-3 align-items-stretch">
		<div class="col-lg-8">
			<figure class="mb-0">
				<img class="tkvg-image" src="<?php echo esc_url( 'https://accelerator.clasaviitorului.md/wp-content/uploads/2026/06/t-13.png' ); ?>" alt="<?php echo esc_attr( 'Figura 3.1 - Rolurile actorilor-cheie TKVG' ); ?>">
				<figcaption class="tkvg-caption">Figura 3.1 Rolurile actorilor-cheie</figcaption>
			</figure>
			<p class="mt-2">Această structură reflectă un model de leadership distribuit, în care responsabilitatea este împărțită între mai mulți actori, iar procesul decizional este susținut prin mecanisme formale de consultare și feedback.</p>
		</div>
		<div class="col-lg-4">
			<aside class="tkvg-business-card">
				<div class="tkvg-business-card__head">
					<div style="font-size:0.75rem;opacity:.9;">Gimnaziul TKVG • Tehnolog digital</div>
					<div style="font-size:1.15rem;font-weight:700;margin-top:0.35rem;">Ludmila Rojdestvenskaya</div>
					<div style="font-size:0.8rem;margin-top:0.35rem;line-height:1.35;">Coordonare digitalizare • suport pentru cadre didactice • implementare instrumente EdTech</div>
				</div>
				<div class="tkvg-business-card__body">
					<img class="tkvg-business-card__photo" src="<?php echo esc_url( 'https://scontent-otp1-1.xx.fbcdn.net/v/t39.30808-1/526357073_10241233689446255_4842591791594364291_n.jpg?stp=c0.133.1061.1061a_dst-jpg_s200x200_tt6&_nc_cat=105&ccb=1-7&_nc_sid=1d2534&_nc_ohc=4MQwKv0OkFMQ7kNvwGrfuzz&_nc_oc=Adn5SG0aB_8_XMDayp6WP08-W3zaow6lLvq3Ktj4rF3GEbpQBDFepmRdvbQ8bEBTlog&_nc_zt=24&_nc_ht=scontent-otp1-1.xx&_nc_gid=zFjroLbeSNRCqsMMILgVwQ&_nc_ss=8&oh=00_Afx0_fYL-6OJR51RojmMULMMqpl_RQQ0FphXcwUx3U2WDg&oe=69B0BC8B' ); ?>" alt="<?php echo esc_attr( 'Ludmila Rojdestvenskaya' ); ?>">
					<div>
						<div style="font-weight:700;font-size:0.9rem;margin-bottom:0.35rem;">Carte de vizită</div>
						<p style="font-size:0.82rem;line-height:1.45;margin-bottom:0.65rem;">Promovează integrarea tehnologiilor digitale în procesele școlare, sprijină planificarea și aplicarea instrumentelor pentru predare, învățare și comunicare.</p>
						<a class="tkvg-btn" href="<?php echo esc_url( 'https://www.facebook.com/ljudmillar?locale=ru_RU' ); ?>" target="_blank" rel="noopener noreferrer">Deschide profilul Facebook</a>
					</div>
				</div>
			</aside>
		</div>
	</div>

	<div class="actor-diagram mt-3" data-actor-diagram>
		<div class="actor-nodes">
			<button type="button" class="actor-node active" data-actor="tehnolog" data-title="Haridustehnoloog" data-text="Tehnologul educațional este nodul central al transformării digitale: traduce direcția strategică în acțiuni pedagogice, sprijină profesorii, clarifică regulile de utilizare a tehnologiilor și conectează școala la ecosisteme externe de inovare.">Haridustehnoloog</button>
			<button type="button" class="actor-node" data-actor="management" data-title="Management / Administrație" data-text="Relația dintre administrație și tehnologul educațional este una de consiliere strategică. Managementul fixează direcția și viziunea, iar tehnologul o transformă în planuri flexibile, experimentale, adaptate contextului real al școlii.">Management</button>
			<button type="button" class="actor-node" data-actor="profesori" data-title="Profesori" data-text="Relația cu profesorii este una de mentorat și suport continuu. Tehnologul educațional ajută la alegerea și crearea resurselor, formarea digitală, integrarea IA, colaborarea între colegi și trecerea de la predare frontală la învățare activă.">Profesori</button>
			<button type="button" class="actor-node" data-actor="it" data-title="Departamentul IT" data-text="Departamentul IT și tehnologul educațional lucrează complementar. IT-ul gestionează infrastructura, accesul și partea tehnică, iar tehnologul se ocupă de sensul pedagogic al platformelor și de modul în care acestea susțin învățarea.">Departament IT</button>
			<button type="button" class="actor-node" data-actor="elevi" data-title="Elevi" data-text="În relația cu elevii, accentul cade pe autonomie, siguranță și utilizare responsabilă a tehnologiei. Tehnologul educațional definește cadrul etic, susține proiecte de cercetare și contribuie la monitorizarea echilibrului dintre activitatea online și starea de bine.">Elevi</button>
			<button type="button" class="actor-node" data-actor="consiliu" data-title="Consiliul Profesoral" data-text="Consiliul Profesoral colaborează cu tehnologul educațional în procesele de evaluare internă și în redefinirea obiectivelor. Accentul cade pe dovezi, reflecție și actualizarea direcției școlii în funcție de progres și nevoi.">Consiliul Profesoral</button>
			<button type="button" class="actor-node" data-actor="autoritati" data-title="Minister / Autorități" data-text="Relația cu autoritățile este una de conformare, dar și de negociere a autonomiei instituționale. Școala respectă cadrul național, însă urmărește să își păstreze flexibilitatea pentru a adapta soluțiile la propriul ecosistem.">Autorități</button>
			<button type="button" class="actor-node" data-actor="parinti" data-title="Părinți" data-text="Părinții oferă feedback extern important pentru reglarea proceselor digitale ale școlii. Datele colectate prin sondaje sau consultări influențează ajustarea sarcinilor, comunicării și volumului de activitate digitală.">Părinți</button>
			<button type="button" class="actor-node" data-actor="retele" data-title="Rețele / Startup-uri" data-text="Rețelele externe și parteneriatele cu startup-uri extind capacitatea de inovare a școlii. Tehnologul educațional aduce în instituție idei, instrumente și practici noi, testate apoi în contexte reale de învățare.">Rețele / Startup-uri</button>
		</div>
		<div class="actor-panel">
			<h4 class="h6 mb-2" data-actor-title>Haridustehnoloog</h4>
			<p class="mb-0" data-actor-text>Tehnologul educațional este nodul central al transformării digitale: traduce direcția strategică în acțiuni pedagogice, sprijină profesorii, clarifică regulile de utilizare a tehnologiilor și conectează școala la ecosisteme externe de inovare.</p>
			<button type="button" class="tkvg-btn mt-2" data-open-modal="haridustehnolog">Haridustehnolog: arhitectul inovării</button>
		</div>
	</div>

	<div class="tkvg-modal" id="tkvg-modal-haridustehnolog" aria-hidden="true">
		<div class="tkvg-modal-content">
			<div class="d-flex justify-content-between align-items-center mb-2">
				<h4 class="h6 mb-0">Haridustehnolog: Arhitectul Inovării în Școală</h4>
				<button type="button" class="tkvg-btn" data-close-modal="haridustehnolog">Închide</button>
			</div>
			<div class="modal-grid">
				<div class="org-card">
					<strong>Competențe &amp; Evaluare</strong>
					<ul class="mb-0 ps-3">
						<li><strong>DigiPeegel:</strong> auto-evaluare pe 5 dimensiuni.</li>
						<li><strong>SELFIE (UE):</strong> percepția profesorilor, elevilor și managerilor.</li>
						<li><strong>DigCompEdu:</strong> alinierea competențelor la cadrul european.</li>
						<li><strong>Analiza de date:</strong> eKool în strategii de intervenție.</li>
					</ul>
				</div>
				<div class="org-card">
					<strong>Suport Pedagogic &amp; Formare</strong>
					<ul class="mb-0 ps-3">
						<li><strong>Webinarii săptămânale:</strong> sesiuni scurte „profesor către profesor”.</li>
						<li><strong>Prompt Engineering:</strong> training pentru utilizarea IA.</li>
						<li><strong>Micro-learning:</strong> resurse video rapide.</li>
						<li><strong>Co-teaching:</strong> asistență la prima lecție cu tehnologie nouă.</li>
					</ul>
				</div>
				<div class="org-card">
					<strong>Managementul Ecosistemului</strong>
					<ul class="mb-0 ps-3">
						<li><strong>Planificare „Beta”:</strong> revizuire anuală a strategiei digitale.</li>
						<li><strong>Autonomie administrativă:</strong> gestionarea conturilor la nivel de școală.</li>
						<li><strong>Interoperabilitate:</strong> conectarea eKool, Oopik, Google Docs.</li>
					</ul>
				</div>
				<div class="org-card">
					<strong>Parteneriat și Etică Digitală</strong>
					<ul class="mb-0 ps-3">
						<li><strong>Mentorat IA:</strong> ghidarea elevilor pentru utilizare etică.</li>
						<li><strong>Siguranță online:</strong> igiena digitală și protecția datelor.</li>
						<li><strong>Proiecte STEAM:</strong> soluții reale coordonate cu elevii.</li>
						<li><strong>Zile digitale:</strong> dezvoltarea autonomiei elevului.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<h3 class="h5 mt-4 mb-2">3.2. Procesele de decizie</h3>
	<p>Sistemul de decizie din cadrul TKVG este organizat într-un cadru formal, dar flexibil, care permite adaptarea continuă la schimbările contextuale și educaționale. Procesele decizionale se bazează pe următoarele mecanisme:</p>
	<ol>
		<li><strong>Managementul calității</strong> – deciziile instituționale sunt fundamentate pe analiza periodică a rezultatelor educaționale și organizaționale, utilizând date colectate în cadrul proceselor de evaluare internă.</li>
		<li><strong>Ciclul anual de planificare</strong> – la sfârșitul fiecărui an școlar, Consiliul Profesoral stabilește prioritățile pentru anul următor, pornind de la concluziile evaluării interne și de la obiectivele strategice stabilite în planul de dezvoltare.</li>
		<li><strong>Colaborarea sistemică</strong> – elaborarea documentelor strategice (de exemplu, Planul de Dezvoltare 2020–2025) este rezultatul unui proces colectiv, care implică profesori, elevi și părinți, conform principiilor participative promovate la nivel național în Estonia.</li>
		<li><strong>Guvernanța bazată pe date</strong> – deciziile administrative și pedagogice (organizarea orarului, distribuirea resurselor, achizițiile de echipamente) sunt susținute de analiza datelor provenite din platformele instituționale (eKool, Google Workspace) și din sondajele de satisfacție.</li>
		<li><strong>Adaptabilitatea strategică</strong> – în contextul accelerării inovațiilor digitale, școala aplică un model de planificare pe termen mediu, revizuit periodic, care permite ajustarea obiectivelor în funcție de evoluțiile tehnologice și pedagogice.</li>
	</ol>
	<p>În acest cadru, <em>conducerea instituției îndeplinește rolul de coordonator</em> al unui ecosistem educațional în dezvoltare, <em>orientat spre eficiență organizațională</em> și coerență pedagogică.</p>

	<h4 class="h6 mt-3 mb-2">Analiză comparativă: Strategie națională vs. măsuri TKVG</h4>
	<p class="small text-muted mb-2">Desktop: treci cu mouse-ul peste celule pentru detalii. Mobil: apasă pe card pentru a vedea explicația.</p>
	<div class="tkvg-compare-grid" aria-label="Comparație strategie națională vs măsuri TKVG">
		<div class="tkvg-compare-head">Direcția strategică</div>
		<div class="tkvg-compare-head">Strategia Națională (Estonia)</div>
		<div class="tkvg-compare-head">Măsura specifică a școlii (TKVG)</div>
		<div class="tkvg-compare-head">Explicație / Obiectiv strategic</div>
		<?php foreach ( $compare_rows as $row ) : ?>
			<div class="flip-card c1">
				<div class="flip-card-inner">
					<div class="flip-front"><strong><?php echo esc_html( $row['direction'] ); ?></strong></div>
					<div class="flip-back"><?php echo esc_html( $row['direction'] ); ?></div>
				</div>
			</div>
			<?php foreach ( array( 'national', 'tkvg', 'goal' ) as $key ) : ?>
				<div class="flip-card <?php echo esc_attr( 'c' . ( array_search( $key, array( 'national', 'tkvg', 'goal' ), true ) + 2 ) ); ?>">
					<div class="flip-card-inner">
						<div class="flip-front"><strong><?php echo esc_html( $row[ $key ]['front'] ); ?></strong></div>
						<div class="flip-back"><?php echo esc_html( $row[ $key ]['back'] ); ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endforeach; ?>
	</div>

	<h3 class="h5 mt-4 mb-2">3.3. Nivelul de participare al cadrelor didactice</h3>
	<p>În studiul de caz TKVG, cadrele didactice apar nu ca executanți pasivi, ci ca actori activi ai transformării digitale: participă la evaluarea internă, contribuie la decizie, învață unii de la alții, proiectează resurse proprii și folosesc datele din platforme pentru ajustări rapide.</p>

	<div class="table-scroll">
		<table class="participation-table">
			<thead>
				<tr>
					<th>Nivel de implicare</th>
					<th>Descrierea activităților</th>
					<th>Impact și rol</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><span class="level-badge level-strategic">Strategic<span>Guvernanță</span></span></td>
					<td>Participarea la procesul de <strong>sisehindamine</strong> (evaluare internă) și definirea obiectivelor anuale în cadrul Consiliului Profesoral; utilizarea datelor și a rezultatelor autoevaluării pentru revizuirea direcției școlii.</td>
					<td>Profesorii devin factori de decizie în planificarea strategică de tip „beta”, contribuind la corectarea anuală a traseului digital al instituției.</td>
				</tr>
				<tr>
					<td><span class="level-badge level-consultativ">Consultativ<span>Leadership</span></span></td>
					<td>Înaintarea propunerilor de îmbunătățire prin comisiile metodice către echipa de management; participarea la interpretarea datelor din platforme pentru ajustări administrative și pedagogice.</td>
					<td>Asigură fluxul de informații de la „baza” sistemului către conducere și susține o abordare <em>bottom-up</em> a schimbării.</td>
				</tr>
				<tr>
					<td><span class="level-badge level-colaborativ">Colaborativ<span>Comunitate</span></span></td>
					<td>Aplicarea modelului „profesorul învață profesorul”, asistențe la ore, webinarii interne săptămânale, ateliere de reflecție și grupuri de învățare profesională.</td>
					<td>Reduce izolarea profesională, accelerează schimbul de bune practici și transformă dezvoltarea digitală într-un proces colectiv și sustenabil.</td>
				</tr>
				<tr>
					<td><span class="level-badge level-pedagogic">Pedagogic<span>Autonomie</span></span></td>
					<td>Crearea de materiale proprii, alegerea autonomă a instrumentelor digitale, proiectarea mediilor e-learning și personalizarea experiențelor de învățare pentru elevi.</td>
					<td>Profesorul devine „arhitect” al mediului de învățare, capabil să adapteze tehnologia la nevoile reale ale clasei și ale fiecărui elev.</td>
				</tr>
				<tr>
					<td><span class="level-badge level-operational">Operațional<span>Inovare</span></span></td>
					<td>Utilizarea sistematică a datelor din platforme precum eKool, Google Classroom, Oopik sau Desmos pentru a monitoriza progresul elevilor și a ajusta în timp real sarcinile, ritmul și sprijinul oferit.</td>
					<td>Eficientizează procesul didactic prin management bazat pe dovezi și transformă profesorul într-un practician reflexiv orientat spre intervenție rapidă și precisă.</td>
				</tr>
			</tbody>
		</table>
	</div>

	<article class="org-card mt-3">
		<h4 class="h6">Leadership și guvernanță: interpretare narativă</h4>
		<p class="mb-0">În cazul TKVG, implicarea cadrelor didactice în leadership și guvernanță este sistemică. Profesorii participă la evaluarea internă, folosesc datele din platforme pentru propuneri administrative, transmit opinii prin comisii metodice și contribuie la stabilirea obiectivelor anuale. În plus, autonomia profesională este apărată activ prin păstrarea unui ecosistem digital funcțional local, iar distribuția inegală a implicării ridică o provocare managerială reală: cum poate fi extins leadership-ul digital fără a supraîncărca minoritatea foarte activă.</p>
	</article>
</section>
