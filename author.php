<?php get_header(); ?>

<section id='article-list'>
<header class='heading yellow'>

<?php $author_id = get_query_var('author'); ?>
  <h2>Auteur : <?php the_author_meta('display_name', $author_id); ?></h2>
  <a class='feed' href='<?php echo get_author_feed_link( 
$author_id ); ?>'>
  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
  </a>
</header>

<!-- liste des pages -->
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

<!-- liste des pages -->
<?php revenudebase_pagination(); ?>

</section> <!-- #article-list -->

<?php get_footer(); ?>
