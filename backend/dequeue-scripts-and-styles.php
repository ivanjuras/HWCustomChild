<?php

// ---------- Dequeue styles ---------- //

add_action( 'wp_enqueue_styles', 'hwc_deregister_styles', 9999 );
add_action( 'wp_print_styles', 'hwc_deregister_styles', 9999 );
function hwc_deregister_styles() {

	wp_dequeue_style( 'fl-builder-google-fonts' );
	wp_dequeue_style( 'open-sans-css' );
	wp_dequeue_style( 'font-awesome' );
	wp_dequeue_style( 'headway-storefront-wooc' );

	// Disable Mega Menu CSS
	wp_dequeue_style( 'megamenu' );
	wp_dequeue_style( 'megamenu-fontawesome' );
	wp_dequeue_style( 'megamenu-genericons' );

	// Disable Yoast SEO bar on the front-end
	if ( ! is_admin() ) {
		wp_dequeue_style( 'yoast-seo-adminbar' );
	}

}


// ---------- Dequeue scripts ---------- //

add_action( 'wp_print_scripts', 'hwc_dequeue_scripts', 9999 );
function hwc_dequeue_scripts() {
    wp_dequeue_script( 'responsive-menu-pro-font-awesome' );
}
