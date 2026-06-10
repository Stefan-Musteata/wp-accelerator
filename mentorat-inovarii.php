<?php
/**
 * Template Name: Mentorat: Inovații digitale
 * Template Post Type: page
 * Description: Pagină despre prima sesiune de mentorat DigitalAccelerator.
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

<?php get_template_part( 'template-parts/mentorat-inovarii/content' ); ?>

<?php
get_footer();
