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
  <h3><?php the_title(); ?></h3>
  </header>
  <aside class='right'>
	<img src='<?php echo get_template_directory_uri(); ?>/images/medium.png' />
  </aside>
  <section>
	<p><?php the_excerpt(); ?></p>
  </section>
</article><!-- #post-<?php the_ID(); ?> -->

