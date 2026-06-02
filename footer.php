</main><!-- #main-content -->

<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="top">
			<div class="brand">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a class="name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				<?php endif; ?>
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description ) :
					?>
					<p class="tagline"><?php echo esc_html( $description ); ?></p>
				<?php endif; ?>
			</div>

			<div class="partners">
				<p class="label"><?php esc_html_e( 'Finanțat de', 'digital-accelerator' ); ?></p>
				<ul class="list">
					<li>Global Partnership for Education</li>
					<li>UNICEF Moldova</li>
					<li>EstDev</li>
				</ul>
			</div>
		</div>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="nav" aria-label="<?php esc_attr_e( 'Navigare footer', 'digital-accelerator' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'menu',
						'container'      => false,
						'depth'          => 1,
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
		<?php endif; ?>

		<div class="disclaimer">
			<p>
				<?php
				esc_html_e(
					'Acest proiect este finanțat de Global Partnership for Education, UNICEF Moldova și EstDev, la inițiativa Ministerului Educației și Cercetării al Republicii Moldova, și este implementat de Universitatea din Tallinn, Fundația pentru Avansare din Moldova și Centrul Național de Inovații Digitale în Educație „Clasa Viitorului”.',
					'digital-accelerator'
				);
				?>
			</p>
			<p>
				<?php
				esc_html_e(
					'Conținutul acestui website reflectă activitățile și rezultatele proiectului Digital Accelerator și nu reprezintă în mod necesar poziția oficială a finanțatorilor sau a partenerilor implicați.',
					'digital-accelerator'
				);
				?>
			</p>
		</div>

		<div class="bottom">
			<p class="copy">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
