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
/**
 * Whether a menu item belongs to the GTranslate language switcher.
 *
 * @param WP_Post $item Menu item.
 * @return bool
 */
function da_is_gtranslate_menu_item( $item ) {
	return ! empty( $item->classes ) && in_array( 'menu-item-gtranslate', $item->classes, true );
}

/**
 * Whether a menu item is a GTranslate language option.
 *
 * @param WP_Post $item Menu item.
 * @return bool
 */
function da_is_gtranslate_menu_child( $item ) {
	return ! empty( $item->classes ) && in_array( 'menu-item-gtranslate-child', $item->classes, true );
}

function da_nav_menu_css_class( $classes, $item, $args, $depth = 0 ) {
	if ( ! isset( $args->theme_location ) ) {
		return $classes;
	}

	if ( 'primary' === $args->theme_location ) {
		if ( 0 === (int) $depth ) {
			$classes[] = 'nav-item';

			if ( in_array( 'menu-item-has-children', $classes, true ) || da_is_gtranslate_menu_item( $item ) ) {
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
			$is_parent  = ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes, true );

			if ( $is_parent || da_is_gtranslate_menu_item( $item ) ) {
				$link_class            .= ' dropdown-toggle';
				$atts['data-bs-toggle'] = 'dropdown';
				$atts['role']           = 'button';
				$atts['aria-expanded']  = 'false';

				if ( da_is_gtranslate_menu_item( $item ) ) {
					$atts['href'] = '#';
				}
			}

			$atts['class'] = trim( ( $atts['class'] ?? '' ) . ' ' . $link_class );
		} else {
			$link_class = 'dropdown-item';

			if ( da_is_gtranslate_menu_child( $item ) ) {
				$atts['role'] = 'menuitem';
			}

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
add_filter( 'nav_menu_link_attributes', 'da_nav_menu_link_attributes', 99, 4 );

/**
 * GTranslate injects menu markup as raw HTML; patch Bootstrap classes after the plugin.
 *
 * @param string   $items Menu HTML.
 * @param stdClass $args  Menu args.
 * @return string
 */
function da_fix_gtranslate_menu_items_html( $items, $args ) {
	if ( empty( $args->theme_location ) || 'primary' !== $args->theme_location ) {
		return $items;
	}

	if ( false === strpos( $items, 'menu-item-gtranslate' ) ) {
		return $items;
	}

	if ( false === strpos( $items, 'nav-item' ) ) {
		$items = preg_replace(
			'/(class="[^"]*menu-item-gtranslate[^"]*)"/',
			'$1 nav-item dropdown"',
			$items,
			1
		);
	}

	return $items;
}
add_filter( 'wp_nav_menu_items', 'da_fix_gtranslate_menu_items_html', 999, 2 );
