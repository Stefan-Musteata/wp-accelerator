<?php
/**
 * Latest news section on homepage.
 *
 * @package Digital_Accelerator
 */

$news_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	)
);
?>

<section class="section section--news" id="noutati">
	<div class="container">
		<header class="header mb-4 pb-2 text-center row">
			<div>
				<h2 class="title"><?php esc_html_e( 'Noutăți și evenimente', 'digital-accelerator' ); ?></h2>
				<p><?php esc_html_e( 'Ultimele anunțuri și activități ale programului.', 'digital-accelerator' ); ?></p>
			</div>
			<a class="btn btn-outline-primary" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/noutati/' ) ); ?>">
				<?php esc_html_e( 'Toate noutățile', 'digital-accelerator' ); ?>
			</a>
		</header>

		<?php if ( $news_query->have_posts() ) : ?>
			<div class="cards cards--3">
				<?php
				while ( $news_query->have_posts() ) :
					$news_query->the_post();
					get_template_part( 'template-parts/content', 'card' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		<?php else : ?>
			<p class="empty-state">
				<?php esc_html_e( 'Nu există încă articole publicate. Adaugă noutăți din panoul WordPress.', 'digital-accelerator' ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>
