<?php

class RevenuDeBase_Newsletter_Widget extends WP_Widget {

	//Constructor
	function RevenuDeBase_Newsletter_Widget() {
		$widget_ops = array(
			'description' => 'Un lien vers la page newsletter' );
		$this->WP_Widget(
			'revenudebase_newsletter_widget', 
			'RevenuDeBase Newsletter', 
			$widget_ops);
	}

	// prints the widget
	function widget($args, $instance) {
		extract( $args );
		echo $before_widget;
		echo "<a class='newsletter' href='"
			. get_page_link((int)($instance['newsletter_page']))
			."'>";
		echo "S'inscrire à la newsletter";
		echo "</a>";
		echo $after_widget;
	}

	//save the widget
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		// update instance with new data
		$instance['newsletter_page'] = 
			strip_tags($new_instance['newsletter_page']);
		return $instance;
	}

	//widgetform in backend
	function form($instance) {
		// FIXME: the page for newsletter
		$instance = wp_parse_args( (array) $instance, 
			array( 
				'newsletter_page' => ''
			) 
		);
		$newsletter_page = strip_tags($instance['newsletter_page']);

		echo "<p>";
		echo "<label for='" 
			. $this->get_field_id('newsletter_page')
			. "'>Page for newsletter link</label>";

		// attribute_escape($newsletter_page);
		$args = array(
			'depth'    => 0,
			'child_of' => 0,
			'selected' => $newsletter_page,
			'echo'     => 1,
			'name'     => $this->get_field_name('newsletter_page'),
			'id'	   => $this->get_field_id('newsletter_page')
		);
		wp_dropdown_pages( $args ); 
		echo "</p>";
	}
}

register_widget('RevenuDeBase_Newsletter_Widget');

?>
