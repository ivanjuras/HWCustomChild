<?php

add_action( 'wp_enqueue_scripts', 'hwc_enqueue_styles' );
function hwc_enqueue_styles() {

	// Enqueue custom fonts
	wp_enqueue_style(
		'hwc-custom-fonts',
		'GOOGLE_CUSTOM_FONT_URL_HERE',
		array(),
		null
	);

	// Enqueue Font Awesome
	wp_enqueue_style(
		'hwc-custom-icons',
		'//opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css',
		array(),
		null
	);

}