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
		set_post_thumbnail_size( 210 );
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
			'footer_menu_left' => 'Footer menu gauche',
			'footer_menu_center_left' => 'Footer menu centre gauche',
			'footer_menu_center_right' => 'Footer menu centre droite',
			'footer_menu_right' => 'Footer menu droite'
		));
	}
}


/*
 * Return pagination links (FIXME! to be tested!)
 */
function revenudebase_pagination()
{
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => false,
		'end_size'     => 1,
		'mid_size'     => 2,
		'type' => 'list',
		'next_text' => '»',
		'prev_text' => '«'
	);

	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );

	echo str_replace('page/1/','', paginate_links( $pagination ));
}

/**
 * Display menu title
 */
function wp_nav_menu_title( $theme_location ) {
	$title = '';
	if ( $theme_location && ( $locations = get_nav_menu_locations() ) && isset( $locations[ $theme_location ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $theme_location ] );

		if( $menu && $menu->name ) {
			$title = $menu->name;
		}
	}

	echo apply_filters( 'wp_nav_menu_title', $title, $theme_location );
}

/**
 * Excerpt length
 */
add_filter( 'excerpt_length', 'revenudebase_excerpt_length' );
if ( !function_exists( 'revenudebase_excerpt_length' ) ) {
	function revenudebase_excerpt_length ( $length ) {
		return 45;
	}
}
?>
