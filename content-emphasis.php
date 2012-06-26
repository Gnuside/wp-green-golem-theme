<?php
/* prepare content */

//$post = get_post( get_the_ID() );


/* use featured image (thumbnail) if possible
 * or placeholder instead
 */

?>

<article id="post-<?php echo $post->ID; ?>" class='emphasis'>
	<p class='context'><?php echo get_the_date(); ?></p>
  <header>
  <h3><a href='<?php echo post_permalink($post->ID); ?>'><?php the_title(); ?></a></h3>
  </header>
  <aside class='right'>
	<a href='<?php echo post_permalink($post->ID); ?>'><img src='<?php echo get_template_directory_uri(); ?>/images/medium.png' /></a>
  </aside>
  <section>
	<a href='<?php echo post_permalink($post->ID); ?>'>
	<?php the_excerpt(); ?>
	</a>
  </section>
</article><!-- #post-<?php the_ID(); ?> -->

