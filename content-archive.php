<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	<img class='illustration' src='<?php echo get_template_directory_uri(); ?>/images/placeholder_mib.png' /> 
	<!-- / article title --> 
	<header> 
	<h2 class='title'><?php the_title(); ?></h2> 
	 <span class='category'><?php the_category(',','single'); ?></span> 
	 <span class='creation-date'><?php the_date(); ?></span> 
	 <span class='author'><?php the_author_posts_link(); ?></span> 
	</header> 
	<section>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
