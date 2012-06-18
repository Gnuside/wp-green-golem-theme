<?php get_header(); ?>

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
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="post_content">
			<?php the_content(); ?>
		</div>
	</article>
	<?php endwhile; ?>
<?php endif; ?>


<!--FIXME: insérer la liste des pages -->

<?php get_footer(); ?>
