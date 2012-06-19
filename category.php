<?php get_header(); ?>

<section id='article-list'>                                                                                   

<header class='heading yellow'>                                                                                       
  <!-- FIXME: get search title ... -->
  <h2><?php single_cat_title(); ?></h2>                                                                                                 
  <!-- FIXME: verify the feed is valid for all searches -->
  <a class='feed' href='<?php echo get_category_feed_link( ); ?>'>                                                                                           
  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />                                                                                
  </a>                                                                                                                
</header> 


<!--FIXME: insérer la liste des pages -->

<?php 
if(have_posts()) {
	while(have_posts()) { 
		the_post(); 
		echo get_post_format();
		get_template_part( 'content', get_post_format() ); 
	}
} else {
	echo "Apologies, but no results were found for the requested archive. Perhaps searching will help find a rel  ated post.";
}
?>


<!--FIXME: insérer la liste des pages -->

</section> <!-- #article-list -->

<?php get_footer(); ?>
