
<article id='article-full' class="post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <!-- / article title -->
  <h2>
    <span class='title'><?php the_title(); ?></span>
    <!-- <span class='category'> </span> -->
	 <?php if ( 'post' == get_post_type() ) : ?>
    <span class='creation-date'>
	<?php the_date(); ?>
          </span><!-- .creation-date -->
          <?php endif; ?>
  </h2>
  <hr style='clear:both; visibility:hidden' />
  <?php echo get_the_post_thumbnail($post->ID, array(450,450), array('class'=>'right last')); ?>

  <?php the_content(); ?>

  <?php comments_template(); ?>
</article>
