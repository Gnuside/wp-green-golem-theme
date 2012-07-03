<?php get_header(); ?>

<?php

$options = get_option( 'revenudebase_options_prefix' );

$column_featured_posts = query_posts( array(
	'meta_key' => 'is_featured',
	'meta_value' =>  'yes',
	'numberposts' => 4
));
//$top_featured_post = array_pop( $column_featured_posts );

$column_left_catid = $options['homepage_cat_left'];
$column_left_catname = get_the_category_by_ID( $column_left_catid );
$column_left_posts = get_posts( array(
	'category' => $column_left_catid,
	'numberposts' => 3
) );

$column_center_catid = $options['homepage_cat_center'];
$column_center_catname = get_the_category_by_ID( $column_center_catid );
$column_center_posts = get_posts( array(
	'category' => $column_center_catid,
	'numberposts' => 3
) );

$column_right_catid = $options['homepage_cat_right'];
$column_right_catname = get_the_category_by_ID( $column_right_catid );
$column_right_posts = get_posts( array(
	'category' => $column_right_catid,
	'numberposts' => 3
) );

?>

<section class='span-17 extended last'>
  <header class='heading yellow'>
	<h2>À la une</h2>
	<!-- <a class='feed' href='<?php echo get_category_feed_link(
$column_left_catid ); ?>'> -->
	  <img src='images/rss-black.png' />
	</a>
  </header>

  <section class="span-11 extended first halfcolborder">
	<?php 
	$column_top_posts = array();
	array_push($column_top_posts, array_pop( $column_featured_posts));
	array_push($column_top_posts, array_pop( $column_featured_posts));

	foreach( $column_top_posts as $post ){
		setup_postdata($post); 
		$format = get_post_format( $post->ID );
		if ( "" == $format ) {
			$format = "emphasis-first";
		}
		get_template_part( 'content', $format );
	}
	?>
</section>

	<section class='span-5 extended last'>
	<?php
	foreach( $column_featured_posts as $post ){
		setup_postdata($post);
		$format = get_post_format( $post->ID );
		if ( "" == $format ) {
			$format = "emphasis";
		}
		get_template_part( 'content', $format );
	}
	?>
  </section>
</section>

<div class='prepend-top span-17 extended last'>
  <section class='span-5 extended halfcolborder'>
	<header class='heading yellow'>
	<h2><?php echo $column_left_catname; ?></h2>
	  <a class='feed' href='<?php echo get_category_feed_link(
$column_left_catid ); ?>'>
	  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
	  </a>
	</header>

<?php
foreach( $column_left_posts as $post ){
	setup_postdata($post);
	$format = get_post_format( $post->ID );
	if ( "" == $format ) {
		$format = "emphasis";
	}
	get_template_part( 'content', $format );
}
?>

	<div class='prepend-top right'>
	  <p>
	    <a href='<?php echo get_category_link( $column_left_catid ); ?>'>Voir tous les articles…</a>
	  </p>
	</div>
  </section>


  <section class='span-5 extended halfcolborder'>
	<header class='heading orange'>
	<h2><?php echo $column_center_catname; ?></h2>
	  <a class='feed' href='<?php echo get_category_feed_link(
$column_center_catid ); ?>'>
	  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
	  </a>
	</header>

<?php
foreach( $column_center_posts as $post ){
	setup_postdata($post);
	$format = get_post_format( $post->ID );
	if ( "" == $format ) {
		$format = "emphasis";
	}
	get_template_part( 'content', $format );
}
?>

	<div class='prepend-top right'>
	  <p>
	    <a href='<?php echo get_category_link( $column_center_catid ); ?>'>Voir tous les articles…</a>
	  </p>
	</div>
  </section>

  <section class='span-5 extended last'>
	<header class='heading red'>
	<h2><?php echo $column_right_catname; ?></h2>
	  <a class='feed' href='<?php echo get_category_feed_link(
$column_right_catid ); ?>'>
	  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
	  </a>
	</header>

<?php
foreach( $column_right_posts as $post ){
	setup_postdata($post);
	$format = get_post_format( $post->ID );
	if ( "" == $format ) {
		$format = "emphasis";
	}
	get_template_part( 'content', $format );
}
?>

	<div class='prepend-top right'>
	  <p>
	  <a href='<?php echo get_category_link( $column_right_catid ); ?>'>Voir tous les articles…</a>
	  </p>
	</div>
  </section>
</div>

<?php get_footer(); ?>
