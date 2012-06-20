<?php
/* prepare content */

$post = get_post( get_the_ID() );


/* use featured image (thumbnail) if possible
 * or placeholder instead
 */

?>
<article id="post-<?php echo $post->id; ?>" <?php post_class(); ?>> 
<a href='<?php post_permalink($post->id); ?>'>
		<img class='illustration' src='<?php echo $post_thumbnail_url; ?>' /> 
	</a>
	<!-- / article title --> 
	<header> 
	<h2 class='title'>
		<a href=""><?php $post->title; ?></a>
	</h2> 
	 <span class='category'><?php the_category(',','single'); ?></span> 
	 <span class='creation-date'><?php the_date(); ?></span> 
	 <span class='author'><?php the_author_posts_link(); ?></span> 
	</header> 
	<section>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
