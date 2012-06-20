<?php get_header(); ?>

<?php

$options = get_option( 'revenudebase_options_prefix' ); 

// FIXME: get featured posts
// $column_featured_posts = get_posts( array() );

$column_featured_posts = query_posts( array(
	'meta_key' => 'is_featured',
	'meta_value' =>  'yes',
	'numberposts' => 5
));
$top_featured_post = array_pop( $column_featured_posts );

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
	<a class='feed' href='#FIXME'>
	  <img src='images/rss-black.png' />
	</a>
  </header>

  <section>

	<?php $post = $top_featured_post ; setup_postdata($post); ?>
	<article class='span-11 extended emphasis first halfcolborder'>
	  <img src='<?php echo revenudebase_get_thumbnail_url( $post->ID ); ?>' width='100%' />
	  <header>
		<p class='context'><?php echo get_the_date(); ?></p>
		<h3 class='context'><?php the_title(); ?></h3>
	  </header>
	  <section>
		<p><?php the_excerpt(); ?></p>
	  </section>
	</article>

	<section class='span-5 extended last'>
		<?php foreach( $column_featured_posts as $post ): setup_postdata($post); ?>
		<article class='emphasis'>
			<p class='context'><?php echo get_the_date(); ?></p>
		  <header>
		  <h3><?php the_title(); ?></h3>
		  </header>
		  <!--
		  <aside class='right'>
			<img src='<?php echo get_template_directory_uri(); ?>/images/medium.png' />
		  </aside>
		 <section>
			<p><?php the_excerpt(); ?></p>
		  </section> -->
		</article>
		<?php endforeach; ?>
	</section>
  </section>
</section>

<div class='prepend-top span-17 extended last'>
  <section class='span-5 extended halfcolborder'>
	<header class='heading yellow'>
	<h2><?php echo $column_left_catname; ?></h2>
	  <a class='feed' href='#FIXME'>
	  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
	  </a>
	</header>

	<?php foreach( $column_left_posts as $post ): setup_postdata($post); ?>
	<article class='emphasis'>
		<p class='context'><?php echo get_the_date(); ?></p>
	  <header>
	  <h3><?php the_title(); ?></h3>
	  </header>
	  <aside class='right'>
		<img src='<?php echo get_template_directory_uri(); ?>/images/medium.png' />
	  </aside>
	  <section>
		<p><?php the_excerpt(); ?></p>
	  </section>
	</article>
	<?php endforeach; ?>

	<div class='prepend-top right'>
	  <p>
	    <a href='<?php echo get_category_link( $column_left_catid ); ?>'>En savoir plus…</a>
	  </p>
	</div>
  </section>


  <section class='span-5 extended halfcolborder'>
	<header class='heading orange'>
	<h2><?php echo $column_center_catname; ?></h2>
	  <a class='feed' href='#FIXME'>
	  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
	  </a>
	</header>

	<?php foreach( $column_center_posts as $post ): setup_postdata($post); ?>
	<article class='emphasis'>
		<p class='context'><?php echo get_the_date(); ?></p>
	  <header>
	  <h3><?php the_title(); ?></h3>
	  </header>
	  <aside class='right'>
		<img src='<?php echo get_template_directory_uri(); ?>/images/medium.png' />
	  </aside>
	  <section>
		<p><?php the_excerpt(); ?></p>
	  </section>
	</article>
	<?php endforeach; ?>

	<div class='prepend-top right'>
	  <p>
	    <a href='<?php echo get_category_link( $column_center_catid ); ?>'>En savoir plus…</a>
	  </p>
	</div>
  </section>

  <section class='span-5 extended last'>
	<header class='heading red'>
	<h2><?php echo $column_right_catname; ?></h2>
	  <a class='feed' href='#FIXME'>
	  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
	  </a>
	</header>

	<?php foreach( $column_right_posts as $post ): setup_postdata($post); ?>
	<article class='emphasis'>
		<p class='context'><?php echo get_the_date(); ?></p>
	  <header>
	  <h3><?php the_title(); ?></h3>
	  </header>
	  <aside class='right'>
		<img src='<?php echo get_template_directory_uri(); ?>/images/medium.png' />
	  </aside>
	  <section>
		<p><?php the_excerpt(); ?></p>
	  </section>
	</article>
	<?php endforeach; ?>

	<div class='prepend-top right'>
	  <p>
	  <a href='<?php echo get_category_link( $column_right_catid ); ?>'>En savoir plus…</a>
	  </p>
	</div>
  </section>
</div>

<?php get_footer(); ?>