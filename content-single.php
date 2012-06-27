
<article id='article-full' class="post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <!-- / author box -->
<?php if ( get_the_author_meta( 'description' )) :
// If a user has filled out their description
?>
  <aside class='author'>
    <div class='thumbnail right'>
		<?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
    </div>
	<div class='name'><?php the_author(); ?></div>
    <div class='bio'><?php the_author_meta( 'description' ); ?></div>
  </aside>
<?php endif; ?>
  <!-- / article title -->
  <h2>
    <span class='title'><?php the_title(); ?></span>
    <span class='category'>
      Paris
    </span>
	 <?php if ( 'post' == get_post_type() ) : ?>
    <span class='creation-date'>
	<?php the_date(); ?>
          </span><!-- .creation-date -->
          <?php endif; ?>
  </h2>
  <hr style='clear:both; visibility:hidden' />
  <img align='right' class='right last' height='200' src='http://www.mutinerie.org/wp-content/uploads/2012/02/Fernand_Leger.jpg' width='450px' />

<?php the_content(); ?>

  <ul class='tags'>
	<?php the_tags('<li>','</li><li>','</li>'); ?>
  </ul>
  <div id='sharebox'>
    <div class='addthis_toolbox addthis_default_style '>
      <a class='addthis_button_facebook_like' fb:like:layout='button_count'></a>
      <a class='addthis_button_tweet' tw:related='revenudebase' tw:via='revenudebase'></a>
      <a class='addthis_button_google_plusone' g:plusone:size='medium'></a>
      <!-- /%a{ :class=>"addthis_counter addthis_pill_style" } -->
      <script src='http://s7.addthis.com/js/250/addthis_widget.js' type='text/javascript'></script>
    </div>
  </div>
<?php comments_template(); ?>
<ul id='page-list'>
  <li>
    <a class='begin' href='#'>|&lt;</a>
  </li>
  <li>
    <a class='prev' href='#'>&lt;&lt;</a>
  </li>
  <li>
    <a class='active' href='#'>1</a>
  </li>
  <li>
    <a href='#'>2</a>
  </li>
  <li>
    <a href='#'>3</a>
  </li>
  <li>
    <a class='empty' href='#'>...</a>
  </li>
  <li>
    <a href='#'>40</a>
  </li>
  <li>
    <a href='#'>41</a>
  </li>
  <li>
    <a href='#'>42</a>
  </li>
  <li>
    <a class='next' href='#'>&gt;&gt;</a>
  </li>
  <li>
    <a class='end' href='#'>&gt;|</a>
  </li>
</ul>
</article>
