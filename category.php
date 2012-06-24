<?php get_header(); ?>

<section id='article-list'>
<header class='heading yellow'>
<?php $category = get_category(get_query_var('cat'),false); ?>
  <h2><?php echo $category->name;  ?></h2>
  <a class='feed' href='<?php echo get_category_feed_link( 
$category->cat_ID ); ?>'>
  <img src='<?php echo get_template_directory_uri(); ?>/images/rss-black.png' />
  </a>
</header>

<!--FIXME: insérer la liste des pages -->
<?php revenudebase_pagination(); ?>

<?php
if(have_posts()) {
	while(have_posts()) {
		the_post();
		$format = get_post_format( $post->ID );
		if ( "" == $format ) {
			$format = "archive";
		}
		echo "content-$format<br/>";
		get_template_part( 'content', $format );
	}
} else {
	echo "Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.";
}
?>


<!--FIXME: insérer la liste des pages -->
<?php revenudebase_pagination(); ?>

</section> <!-- #article-list -->

<?php get_footer(); ?>
