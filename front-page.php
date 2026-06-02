<?php
/**
 * Front page template.
 *
 * @package Digital_Accelerator
 */

get_header();
?>

<?php get_template_part( 'template-parts/home/slider-intro' ); ?>
<?php get_template_part( 'template-parts/home/about' ); ?>
<?php get_template_part( 'template-parts/home/offers' ); ?>
<?php get_template_part( 'template-parts/home/categories' ); ?>
<?php get_template_part( 'template-parts/home/beneficiaries' ); ?>
<?php get_template_part( 'template-parts/home/partners' ); ?>
<?php get_template_part( 'template-parts/home/impact' ); ?>
<?php get_template_part( 'template-parts/home/contact' ); ?>

<?php
get_footer();
