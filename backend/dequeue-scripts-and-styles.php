<?php

// ---------- Dequeue styles ---------- //

add_action( 'wp_enqueue_styles', 'hwc_deregister_scripts', 9999 );
function hwc_deregister_scripts() {
	
	wp_dequeue_style( 'fl-builder-google-fonts' );
	wp_dequeue_style( 'open-sans-css' );
	wp_dequeue_style( 'font-awesome' );

}