<?php
/**
 * Digital Accelerator theme functions.
 *
 * @package Digital_Accelerator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DA_THEME_VERSION', '1.0.0' );
define( 'DA_BOOTSTRAP_VERSION', '5.3.6' );
define( 'DA_SWIPER_VERSION', '11.2.6' );
define( 'DA_THEME_DIR', get_template_directory() );
define( 'DA_THEME_URI', get_template_directory_uri() );

require_once DA_THEME_DIR . '/inc/fallback-menu.php';
require_once DA_THEME_DIR . '/inc/nav-menu.php';

/**
 * Theme setup.
 */
function da_setup() {
	load_theme_textdomain( 'digital-accelerator', DA_THEME_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 280,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Meniu principal', 'digital-accelerator' ),
			'footer'  => __( 'Meniu footer', 'digital-accelerator' ),
		)
	);
}
add_action( 'after_setup_theme', 'da_setup' );

/**
 * Enqueue scripts and styles.
 */
function da_enqueue_assets() {
	wp_enqueue_style(
		'bootstrap',
		DA_THEME_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css',
		array(),
		DA_BOOTSTRAP_VERSION
	);

	wp_enqueue_style(
		'digital-accelerator-main',
		DA_THEME_URI . '/assets/css/main.css',
		array( 'bootstrap' ),
		DA_THEME_VERSION
	);

	$custom_css_path = DA_THEME_DIR . '/assets/css/custom.css';
	if ( file_exists( $custom_css_path ) ) {
		wp_enqueue_style(
			'digital-accelerator-custom',
			DA_THEME_URI . '/assets/css/custom.css',
			array( 'digital-accelerator-main' ),
			(string) filemtime( $custom_css_path )
		);
	}

	wp_enqueue_script(
		'bootstrap',
		DA_THEME_URI . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
		array(),
		DA_BOOTSTRAP_VERSION,
		true
	);

	wp_enqueue_script(
		'digital-accelerator-header-scroll',
		DA_THEME_URI . '/assets/js/header-scroll.js',
		array(),
		DA_THEME_VERSION,
		true
	);

	$needs_swiper = is_front_page() || is_page_template( 'tallina-tkvg.php' ) || is_page_template( 'gimnaziu-pae.php' ) || is_page_template( 'scoala-21-talin.php' );

	if ( $needs_swiper ) {
		wp_enqueue_style(
			'swiper',
			DA_THEME_URI . '/assets/vendor/swiper/swiper-bundle.min.css',
			array(),
			DA_SWIPER_VERSION
		);

		wp_enqueue_script(
			'swiper',
			DA_THEME_URI . '/assets/vendor/swiper/swiper-bundle.min.js',
			array(),
			DA_SWIPER_VERSION,
			true
		);
	}

	if ( is_front_page() ) {
		wp_enqueue_script(
			'digital-accelerator-slider-intro',
			DA_THEME_URI . '/assets/js/slider-intro.js',
			array( 'swiper' ),
			DA_THEME_VERSION,
			true
		);
	}

	if ( is_page_template( 'tallina-tkvg.php' ) ) {
		wp_enqueue_script(
			'digital-accelerator-tkvg-swiper',
			DA_THEME_URI . '/assets/js/tkvg-swiper.js',
			array( 'swiper' ),
			DA_THEME_VERSION,
			true
		);
	}

	if ( is_page_template( 'gimnaziu-pae.php' ) ) {
		wp_enqueue_script(
			'digital-accelerator-pae-swiper',
			DA_THEME_URI . '/assets/js/pae-swiper.js',
			array( 'swiper' ),
			DA_THEME_VERSION,
			true
		);
	}

	if ( is_page_template( 'scoala-21-talin.php' ) ) {
		wp_enqueue_script(
			'digital-accelerator-talin-swiper',
			DA_THEME_URI . '/assets/js/talin-swiper.js',
			array( 'swiper' ),
			DA_THEME_VERSION,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'da_enqueue_assets' );

/**
 * Register widget areas (sidebar optional for blog).
 */
function da_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar blog', 'digital-accelerator' ),
			'id'            => 'sidebar-blog',
			'description'   => __( 'Apare pe articole și arhive.', 'digital-accelerator' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'da_widgets_init' );

/**
 * Excerpt length for blog cards.
 *
 * @param int $length Default length.
 * @return int
 */
function da_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'da_excerpt_length' );

/**
 * Theme contact defaults (override via Customizer later if needed).
 *
 * @return array<string, string>
 */
function da_get_contact_defaults() {
	return array(
		'email'     => '',
		'website'   => home_url( '/' ),
		'facebook'  => '',
		'institution' => __( 'Centrul Național de Inovații Digitale în Educație „Clasa Viitorului”', 'digital-accelerator' ),
	);
}
