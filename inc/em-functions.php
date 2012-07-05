<?php
add_filter('em_event_save','revenudebase_em_categorize',1,2);
function revenudebase_em_categorize($result,$EM_Event){
	global $wpdb;
	// FIXME get the revenudebase event category from options
	$options = get_option( 'revenudebase_options_prefix' );
	$cat_id = $options['event_category_id'];

	// FIXME set the category to event	
	wp_set_object_terms( $EM_Event->post_id, $cat_id, 'category' );
}
?>
