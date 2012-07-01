<?php get_header(); ?>

<section id='article-list'>
<header class='heading yellow'>

<?php $search = get_query_var('s'); ?>
  <h2>Résultats pour : <?php echo $search; ?></h2>
  <a class='feed' href='<?php echo get_search_feed_link(); ?>'>
  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
  </a>
</header>

<!--la liste des pages -->
<?php revenudebase_pagination(); ?>

<?php
if(have_posts()) {
	while(have_posts()) {
		the_post();
		$format = get_post_format( $post->ID );
		if ( "" == $format ) {
			$format = "archive";
		}
		get_template_part( 'content', $format );
	}
} else { ?>
Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.
<?php } ?>

<!--la liste des pages -->
<?php revenudebase_pagination(); ?>

</section> <!-- #article-list -->

<?php get_footer(); ?>
