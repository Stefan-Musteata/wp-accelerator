<?php
/**
 * Fallback menu when no menu is assigned.
 */
function da_fallback_menu() {
	$items = array(
		array( 'label' => __( 'Despre program', 'digital-accelerator' ), 'url' => '#despre' ),
		array( 'label' => __( 'Ce oferă', 'digital-accelerator' ), 'url' => '#ofera' ),
		array( 'label' => __( 'Resurse', 'digital-accelerator' ), 'url' => home_url( '/resurse/' ) ),
		array( 'label' => __( 'Noutăți', 'digital-accelerator' ), 'url' => home_url( '/noutati/' ) ),
		array( 'label' => __( 'Contact', 'digital-accelerator' ), 'url' => '#contact' ),
	);

	echo '<ul id="primary-menu" class="navbar-nav ms-auto mb-2 mb-lg-0">';
	foreach ( $items as $item ) {
		printf(
			'<li class="nav-item"><a class="nav-link" href="%s">%s</a></li>',
			esc_url( $item['url'] ),
			esc_html( $item['label'] )
		);
	}
	echo '</ul>';
}
