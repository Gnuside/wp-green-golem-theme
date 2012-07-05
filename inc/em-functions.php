<?php
add_filter('em_event_save','revenudebase_em_categorize',1,2);
function revenudebase_em_categorize($result,$EM_Event){
	global $wpdb;

	// get the revenudebase event category from options
	$options = get_option( 'revenudebase_options_prefix' );

	$cat_ids = array( $options['event_category_id'] );
	$cat_ids = array_map('intval', $cat_ids);

	//$cat_ids = array_unique( $cat_ids );
	// print_r($EM_Event);
	// print_r($cat_ids);
	// die();
	

	// FIXME set the category to event	
	wp_set_object_terms( $EM_Event->post_id, $cat_ids, 'category' );
}
?>
