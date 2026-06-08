<?php
/**
 * Bootstrap nav menu helpers.
 *
 * @package Digital_Accelerator
 */

/**
 * Add Bootstrap classes to top-level menu items.
 *
 * @param string[] $classes CSS classes.
 * @param WP_Post  $item    Menu item.
 * @param stdClass $args    Menu args.
 * @param int      $depth   Menu depth.
 * @return string[]
 */
function da_nav_menu_css_class( $classes, $item, $args, $depth = 0 ) {
	if ( ! isset( $args->theme_location ) ) {
		return $classes;
	}

	if ( 'primary' === $args->theme_location ) {
		if ( 0 === (int) $depth ) {
			$classes[] = 'nav-item';

			if ( in_array( 'menu-item-has-children', $classes, true ) ) {
				$classes[] = 'dropdown';
			}
		}
	}

	if ( 'footer' === $args->theme_location ) {
		$classes[] = 'nav-item';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'da_nav_menu_css_class', 10, 4 );

/**
 * Add Bootstrap dropdown-menu class to submenus.
 *
 * @param string[] $classes CSS classes.
 * @param stdClass $args    Menu args.
 * @param int      $depth   Menu depth.
 * @return string[]
 */
function da_nav_menu_submenu_css_class( $classes, $args, $depth ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
		$classes[] = 'dropdown-menu';
	}

	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'da_nav_menu_submenu_css_class', 10, 3 );

/**
 * Add Bootstrap classes to menu links.
 *
 * @param array    $atts Link attributes.
 * @param WP_Post  $item Menu item.
 * @param stdClass $args Menu args.
 * @param int      $depth Menu depth.
 * @return array
 */
function da_nav_menu_link_attributes( $atts, $item, $args, $depth = 0 ) {
	if ( ! isset( $args->theme_location ) ) {
		return $atts;
	}

	if ( 'primary' === $args->theme_location ) {
		if ( 0 === (int) $depth ) {
			$link_class = 'nav-link';

			if ( ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes, true ) ) {
				$link_class .= ' dropdown-toggle';
				$atts['data-bs-toggle'] = 'dropdown';
				$atts['role']           = 'button';
				$atts['aria-expanded']  = 'false';
			}

			$atts['class'] = trim( ( $atts['class'] ?? '' ) . ' ' . $link_class );
		} else {
			$link_class = 'dropdown-item';

			if ( ! empty( $item->current ) ) {
				$link_class .= ' active';
				$atts['aria-current'] = 'page';
			}

			$atts['class'] = trim( ( $atts['class'] ?? '' ) . ' ' . $link_class );
		}
	}

	if ( 'footer' === $args->theme_location ) {
		$atts['class'] = trim( ( $atts['class'] ?? '' ) . ' nav-link px-0' );
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'da_nav_menu_link_attributes', 10, 4 );
