<?php

add_action('admin_init', 'revenudebase_admin_init');
add_action('admin_menu', 'revenudebase_admin_menu');

register_nav_menus(array(
    'footer_menu_about' => 'Footer menu à propos',
    'footer_menu_partners' => 'Footer menu partenaires',
    'footer_menu_act' => 'Footer menu agir',
    'footer_menu_social' => 'Footer menu réseaux sociaux'
));

$categories = array();

function revenudebase_admin_init() {
	register_setting( 'revenudebase_options', // option group
		'revenudebase_options_prefix', // option name (future array)
		'revenudebase_option_validate' // sanitize callback
	);
}

function revenudebase_admin_menu() {
	add_theme_page(
		__( 'RevenuDeBase Options', 'revenudebase'), // page title
		__('RevenuDeBase Options', 'revenudebase'), // menu title
		'edit_theme_options',  // capability
		'theme_options', // menu slug (FIXME: what is that?)
		'revenudebase_option_page' // callback function
	);
}

function revenudebase_option_page() {
	global $revenudebase_categories;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
	<?php
		screen_icon();
		echo sprintf("<h2>%s - %s</h2>",
			get_current_theme(),
			__( 'Theme Options', 'themeoptions' )
		);
	?>

	<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
	<div class="updated fade">
		<p><strong><?php _e( 'Options saved', 'sampletheme' ); ?></strong></p>
	</div>
	<?php endif; ?>

	 <h3>Homepage Categories</h3>
	 <form method="post" action="options.php">
		<?php
		settings_fields( 'revenudebase_options' );
		$options = get_option( 'revenudebase_options_prefix' );
		?>
		<p>Debug:
		<pre><code>
		<?php print_r($options); ?>
		</code></pre>
		</p>
		<label>Left column</label>
		<?php wp_dropdown_categories( array(
			'name' => 'revenudebase_options_prefix[homepage_cat_left]',
			'selected'  => $options['homepage_cat_left'],
			'hide_empty' => 0,
			'show_count' => 1,
			'hierarchical' => 1
		)); ?>
		<br/>

		<label>Center column</label>
		<?php wp_dropdown_categories( array(
			'name' => 'revenudebase_options_prefix[homepage_cat_center]',
			'selected'  => $options['homepage_cat_center'],
			'hide_empty' => 0,
			'show_count' => 1,
			'hierarchical' => 1
		)); ?>
		<br/>

		<label>Right column</label>
		<?php wp_dropdown_categories( array(
			'name' => 'revenudebase_options_prefix[homepage_cat_right]',
			'selected'  => $options['homepage_cat_right'],
			'hide_empty' => 0,
			'show_count' => 1,
			'hierarchical' => 1
		)); ?>
		<br/>

		<p class="submit">
			<input type="submit" class="button-primary" value="  <?php _e( 'Save Options', 'sampletheme' ); ?>" />
		</p>
	</form>
	</div>

<?

}

// validation function
function revenudebase_option_validate( $input ) {
	return $input;
}

//
?>
