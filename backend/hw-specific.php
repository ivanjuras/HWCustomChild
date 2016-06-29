<?php

// Remove from Headway theme
add_action( 'headway_setup_child_theme', 'hwc_remove_theme_support' ); 
function hwc_remove_theme_support() {

	//remove_theme_support( 'headway-block-basics-css' );
	remove_theme_support( 'headway-content-styling-css' );
	remove_theme_support( 'headway-design-editor' );
	remove_theme_support( 'headway-dynamic-block-css' );
	remove_theme_support( 'headway-structure-css' );
	remove_theme_support( 'headway-live-css' );

}

// Remove SEO support
add_filter( 'headway_seo_disabled', '__return_true' );

// Remove "View full site" link
add_filter( 'headway_responsive_disable_link', 'hwc_view_full_site' );
function hwc_view_full_site() {
	return false;
}