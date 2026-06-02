<?php
$groups = array(
	array(
		'label'       => __( 'Inițiator', 'digital-accelerator' ),
		'color'       => 'teal',
		'icon'        => 'people',
		'description' => __( 'Coordonarea politicilor educaționale naționale.', 'digital-accelerator' ),
		'items'       => array(
			array(
				'name' => __( 'Ministerul Educației și Cercetării al RM', 'digital-accelerator' ),
				'role' => __( 'Inițiator național al programului', 'digital-accelerator' ),
			),
		),
	),
	array(
		'label'       => __( 'Finanțare', 'digital-accelerator' ),
		'color'       => 'purple',
		'icon'        => 'coin',
		'description' => __( 'Sprijin financiar pentru dezvoltarea programului.', 'digital-accelerator' ),
		'items'       => array(
			array(
				'name' => 'Global Partnership for Education',
				'role' => __( 'Finanțare internațională', 'digital-accelerator' ),
			),
			array(
				'name' => 'UNICEF Moldova',
				'role' => __( 'Partener de dezvoltare', 'digital-accelerator' ),
			),
			array(
				'name' => 'EstDev',
				'role' => __( 'Sprijin instituțional', 'digital-accelerator' ),
			),
		),
	),
	array(
		'label'       => __( 'Implementare', 'digital-accelerator' ),
		'color'       => 'blue',
		'icon'        => 'gear',
		'description' => __( 'Execuția activităților pe teren.', 'digital-accelerator' ),
		'items'       => array(
			array(
				'name' => __( 'Universitatea din Tallinn', 'digital-accelerator' ),
				'role' => __( 'Implementare internațională', 'digital-accelerator' ),
			),
			array(
				'name' => __( 'Fundația pentru Avansare din Moldova', 'digital-accelerator' ),
				'role' => __( 'Implementare națională', 'digital-accelerator' ),
			),
			array(
				'name' => __( 'Centrul Național de Inovații Digitale în Educație „Clasa Viitorului”', 'digital-accelerator' ),
				'role' => __( 'Implementare locală', 'digital-accelerator' ),
			),
		),
	),
);
?>

<section class="section section--partners" id="parteneri" aria-labelledby="partners-title">
	<div class="container">
		<header class="header text-center">
			<p class="eyebrow w-100"><?php esc_html_e( 'Parteneri și implementare', 'digital-accelerator' ); ?></p>
			<h2 class="title" id="partners-title"><?php esc_html_e( 'Împreună pentru educație digitală', 'digital-accelerator' ); ?></h2>
		</header>

		<div class="intro">
			<div class="brand">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a class="name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				<?php endif; ?>
				<p class="tagline"><?php esc_html_e( 'Program de educație digitală', 'digital-accelerator' ); ?></p>
			</div>
			<p class="text">
				<?php esc_html_e( 'Digital Accelerator este realizat la inițiativa Ministerului Educației și Cercetării al Republicii Moldova, cu sprijinul partenerilor naționali și internaționali implicați în dezvoltarea educației digitale.', 'digital-accelerator' ); ?>
			</p>
		</div>

		<div class="columns">
			<?php foreach ( $groups as $group ) : ?>
				<article class="column column--<?php echo esc_attr( $group['color'] ); ?>">
					<div class="badge">
						<span class="badge-icon" aria-hidden="true">
							<?php if ( 'people' === $group['icon'] ) : ?>
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" fill="currentColor"/>
								</svg>
							<?php elseif ( 'coin' === $group['icon'] ) : ?>
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.16-1.46-3.27-3.4h1.96c.1 1.05.82 1.87 2.65 1.87 1.96 0 2.4-.98 2.4-1.59 0-.83-.44-1.61-2.67-2.14-2.48-.6-4.18-1.62-4.18-3.67 0-1.72 1.39-2.84 3.11-3.21V4h2.67v1.95c1.86.45 2.79 1.86 2.85 3.39H14.3c-.05-1.11-.64-1.87-2.22-1.87-1.5 0-2.4.68-2.4 1.54 0 .84.65 1.39 2.67 1.91s4.18 1.39 4.18 3.91c-.01 1.83-1.38 2.83-3.12 3.16z" fill="currentColor"/>
								</svg>
							<?php else : ?>
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.14 12.94c.04-.31.06-.63.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.488.488 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z" fill="currentColor"/>
								</svg>
							<?php endif; ?>
						</span>
						<span class="badge-label"><?php echo esc_html( $group['label'] ); ?></span>
					</div>

					<p class="description"><?php echo esc_html( $group['description'] ); ?></p>

					<ul class="list">
						<?php foreach ( $group['items'] as $item ) : ?>
							<?php
							$initial = function_exists( 'mb_substr' )
								? mb_strtoupper( mb_substr( $item['name'], 0, 1 ) )
								: strtoupper( substr( $item['name'], 0, 1 ) );
							?>
							<li class="d-flex p-3 shadow-sm gap-3 rounded-3 border mb-4">
								<span class="avatar" aria-hidden="true"><?php echo esc_html( $initial ); ?></span>
								<div class="info">
									<span class="name"><?php echo esc_html( $item['name'] ); ?></span>
									<span class="role"><?php echo esc_html( $item['role'] ); ?></span>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</article>
			<?php endforeach; ?>
		</div>

		
	</div>
</section>
