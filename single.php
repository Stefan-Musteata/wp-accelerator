<?php
/**
 * Single post template.
 *
 * @package Digital_Accelerator
 */

get_header();
?>

<div class="page-header">
	<div class="container">
		<p class="back">
			<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/noutati/' ) ); ?>">
				&larr; <?php esc_html_e( 'Înapoi la noutăți', 'digital-accelerator' ); ?>
			</a>
		</p>
	</div>
</div>

<div class="container page-layout page-layout--single">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', get_post_type() );
	endwhile;
	?>
</div>

<?php
get_footer();
