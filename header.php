<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content">
	<?php esc_html_e( 'Sari la conținut', 'digital-accelerator' ); ?>
</a>

<header class="site-header" role="banner">
	<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top" aria-label="<?php esc_attr_e( 'Navigare principală', 'digital-accelerator' ); ?>">
		<div class="container">
			<div class="branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a class="navbar-brand fw-bold text-primary-emphasis" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) :
						?>
						<p class="description small text-muted mb-0"><?php echo esc_html( $description ); ?></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>

			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#primaryNav"
				aria-controls="primaryNav"
				aria-expanded="false"
				aria-label="<?php esc_attr_e( 'Deschide meniul', 'digital-accelerator' ); ?>"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="primaryNav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
						'container'      => false,
						'fallback_cb'    => 'da_fallback_menu',
					)
				);
				?>
			</div>
		</div>
	</nav>
</header>

<main id="main-content" class="site-main">
