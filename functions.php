<?php

/**
 * Register setup theme
 */
add_action( 'after_setup_theme', 'revenudebase_setup' );
if ( ! function_exists( 'revenudebase_setup' ) ) {
	function revenudebase_setup(){
		// Load up our theme options page and related code.
		require( get_template_directory() . '/inc/theme-options.php' );

		// This theme uses Featured Images for per-post/per-page Custom Header images
		add_theme_support( 'post-thumbnails' );
	}
}

/**
 * Register header manager
 */
add_action('wp_head', 'revenudebase_wp_head');
if ( ! function_exists( 'revenudebase_wp_head' ) ) {
	function revenudebase_wp_head() {
		/* do nothing */
	}
}


/**
 * Register menus
 */
add_action( 'init', 'revenudebase_init_menus' );
if ( ! function_exists( 'revenudebase_init_menus' ) ) {
    function revenudebase_init_menus () {
        register_nav_menus(array(
            'navigation_menu' => 'Navigation',
            'footer_menu_about' => 'Footer menu à propos',
            'footer_menu_partners' => 'Footer menu partenaires',
            'footer_menu_act' => 'Footer menu agir',
            'footer_menu_social' => 'Footer menu réseaux sociaux'
        ));
    }
}

?>
