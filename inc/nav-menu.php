<?php
/**
 * Bootstrap nav menu helpers.
 *
 * @package Digital_Accelerator
 */

/**
 * Add Bootstrap classes to menu items.
 *
 * @param string[] $classes CSS classes.
 * @param WP_Post  $item    Menu item.
 * @param stdClass $args    Menu args.
 * @return string[]
 */
function da_nav_menu_css_class( $classes, $item, $args ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
		$classes[] = 'nav-item';
	}

	if ( isset( $args->theme_location ) && 'footer' === $args->theme_location ) {
		$classes[] = 'nav-item';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'da_nav_menu_css_class', 10, 3 );

/**
 * Add Bootstrap classes to menu links.
 *
 * @param array    $atts Link attributes.
 * @param WP_Post  $item Menu item.
 * @param stdClass $args Menu args.
 * @return array
 */
function da_nav_menu_link_attributes( $atts, $item, $args ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
		$atts['class'] = trim( ( $atts['class'] ?? '' ) . ' nav-link' );
	}

	if ( isset( $args->theme_location ) && 'footer' === $args->theme_location ) {
		$atts['class'] = trim( ( $atts['class'] ?? '' ) . ' nav-link px-0' );
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'da_nav_menu_link_attributes', 10, 3 );
