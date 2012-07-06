<article id="post-<?php echo $post->ID; ?>" class='emphasis'>
	<aside>
		<a href='<?php echo post_permalink($post->ID); ?>'><?php echo get_the_post_thumbnail($post->ID); ?></a>
	</aside>
	<header>
		<h3><a href='<?php echo post_permalink($post->ID); ?>'><?php the_title(); ?></a></h3>
	</header>
	<p class='context'><?php echo get_the_date(); ?></p>
	<section>
		<a href='<?php echo post_permalink($post->ID); ?>'><?php the_excerpt(); ?></a>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
