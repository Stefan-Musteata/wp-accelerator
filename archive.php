<?php
/**
 * Archive template.
 *
 * @package Digital_Accelerator
 */

get_header();
?>

<div class="page-header">
	<div class="container">
		<h1><?php the_archive_title(); ?></h1>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
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
			<p><?php esc_html_e( 'Nu s-au găsit articole.', 'digital-accelerator' ); ?></p>
		<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>
</div>

<?php
get_footer();
