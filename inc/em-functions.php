<?php
add_filter('em_event_save','revenudebase_em_categorize',1,2);
function revenudebase_em_categorize($result,$EM_Event){
	global $wpdb;

	// get the revenudebase event category from options
	
	// preload all options in cache
	wp_load_alloptions();
	// and ONLY THEN ask for what we want
	$options = get_option( 'revenudebase_options_prefix' );

	// syslog(LOG_WARNING, "Options : ".var_export($options, true));

	$cat_ids = array( (int)($options['event_category_id']) );
	$cat_ids = array_unique( $cat_ids );

	// syslog(LOG_WARNING, var_export($EM_Event, true));

	// FIXME set the category to event	
	// syslog(LOG_WARNING, "EM post_id : ".$EM_Event->post_id);
	// syslog(LOG_WARNING, "EM cat_ids : ".var_export($cat_ids,true));

	$res = wp_set_post_terms( $EM_Event->post_id, 
		$cat_ids, 'category' );

	set_post_format( $post->ID, 'event' );

	//$res = wp_set_object_terms( $EM_Event->post_id, 
	//	$cat_ids, 'category' );

	//$res = wp_get_post_terms( $EM_Event->post_id, 
	//	'category');

	// syslog(LOG_WARNING, "taxonomy : ". var_export($res,true));
}
?>
