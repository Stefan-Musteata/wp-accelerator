<?php
/**
 * Static page template.
 *
 * @package Digital_Accelerator
 */

get_header();
?>

<div class="page-header">
	<div class="container">
		<h1><?php the_title(); ?></h1>
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
