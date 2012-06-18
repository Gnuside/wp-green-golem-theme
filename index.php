<?php get_header(); ?>

<section id='article-list'>                                                                                   

<header class='heading yellow'>                                                                                       
  <!-- FIXME: get search title ... -->
  <h2>FIXME: <?php single_cat_title(); ?></h2>                                                                                                 
  <!-- FIXME: verify the feed is valid for all searches -->
  <a class='feed' href='<?php echo get_search_feed_link() ?>'>                                                                                           
  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />                                                                                
  </a>                                                                                                                
</header> 


<!--FIXME: insérer la liste des pages -->

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<?php get_template_part( 'content', 'archive' ); ?>
	<?php endwhile; ?>
<?php endif; ?>


<!--FIXME: insérer la liste des pages -->

</section> <!-- #article-list -->

<?php get_footer(); ?>
