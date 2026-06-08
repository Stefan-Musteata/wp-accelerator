<?php
/**
 * Template Name: TKVG Tallinn
 * Template Post Type: page
 * Description: Studiu de caz Tallinna Kesklinna Vene Gümnaasium (TKVG).
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

<div class="container page-layout page-layout--scoala-nissi page-layout--tallina-tkvg py-5">
	<?php get_template_part( 'template-parts/tallina-tkvg/studiu-caz' ); ?>
</div>

<?php
get_footer();
