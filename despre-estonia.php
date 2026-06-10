<?php
/**
 * Template Name: Despre Estonia
 * Template Post Type: page
 * Description: Pagină despre experiența estoniană și misiunea meta-mentorilor.
 *
 * @package Digital_Accelerator
 */

get_header();
?>

<div class="page-header page-header--scoala-nissi py-4 mb-0">
	<div class="container">
		<h1 class="mb-0"><?php the_title(); ?></h1>
	</div>
</div>

<?php get_template_part( 'template-parts/despre-estonia/content' ); ?>

<?php
get_footer();
