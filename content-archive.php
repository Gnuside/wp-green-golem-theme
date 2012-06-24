<?php
/* prepare content */

//$post = get_post( get_the_ID() );


/* use featured image (thumbnail) if possible
 * or placeholder instead
 */

?>

<article id="post-<?php echo $post->ID; ?>" <?php post_class(); ?>> 
<a href='<?php echo post_permalink($post->ID); ?>'>
		<img class='illustration' src='<?php echo revenudebase_get_thumbnail_url( $post->ID ); ?>' /> 
	</a>
	<!-- / article title --> 
	<header> 
	<h2 class='title'>
		<a href="<?php echo post_permalink( $post->ID ); ?>"><?php the_title(); ?></a>
	</h2> 
	 <span class='category'><?php the_category(',','single'); ?></span> 
	 <span class='creation-date'><?php echo get_the_date(); ?></span> 
	 <span class='author'><?php the_author_posts_link(); ?></span> 
	</header> 
	<section class='excerpt'>
		<a href='<?php echo post_permalink($post->ID); ?>'>
		<?php the_excerpt(); ?>
		</a>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
