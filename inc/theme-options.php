<?php

add_action('admin_init', 'revenudebase_admin_init');
add_action('admin_menu', 'revenudebase_admin_menu');
add_action('admin_head', 'admin_register_head');

function admin_register_head() { 
	$url = get_bloginfo('template_directory') . '/inc/theme-options.css';  
	echo "<link rel='stylesheet' href='$url' />\n";
}

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

	 <form method="post" action="options.php">
		<?php
		settings_fields( 'revenudebase_options' );
		$options = get_option( 'revenudebase_options_prefix' );
		?>
		<div class="debug">
		<h3 >Debug</h3>
		<pre><code><?php print_r($options); ?></code></pre>
		</div>

		<h3>Social media</h3>
		<label>Twitter URL</label>
		<input type="text" name="revenudebase_options_prefix[layout_social_twitter]" value="<?php echo $options['layout_social_twitter']; ?>"/>
		<br/>

		<label>Facebook URL</label>
		<input type="text" name="revenudebase_options_prefix[layout_social_facebook]" value="<?php echo $options['layout_social_facebook']; ?>"/>
		<br/>

		<label>Google+ URL</label>
		<input type="text" name="revenudebase_options_prefix[layout_social_googleplus]" value="<?php echo $options['layout_social_googleplus']; ?>"/>
		<br/>

		<h3>Homepage Categories</h3>
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
