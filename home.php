<?php
/**
 * Blog posts index.
 *
 * @package Digital_Accelerator
 */

get_header();
?>

<div class="page-header">
	<div class="container">
		<h1><?php esc_html_e( 'Noutăți și evenimente', 'digital-accelerator' ); ?></h1>
		<p><?php esc_html_e( 'Anunțuri, activități și rezultate ale programului Digital Accelerator.', 'digital-accelerator' ); ?></p>
	</div>
</div>

<div class="container page-layout">
	<div class="main">
		<?php if ( have_posts() ) : ?>
			<div class="cards cards--list">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'card' );
				endwhile;
				?>
			</div>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'Nu există articole publicate.', 'digital-accelerator' ); ?></p>
		<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>
</div>

<?php
get_footer();
