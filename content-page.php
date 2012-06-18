<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                                                                                                           
	<img class='illustration' src='images/placeholder_mib.png' />                                                     
	<!-- / article title -->                                                                                          
	<header>                                                                                                          
	<h2 class='title'><?php the_title(); ?></h2>                                                                                                           
	  <span class='category'>Paris</span>                                                                             
	  <span class='creation-date'>Samedi 19 mai  2012</span>                                                          
	  <span class='author'>Auteur</span>                                                                              
	</header>                                                                                                         
	<section>                                                                                                         
		<?php the_content(); ?>
	</section>                                                                                                        
</article><!-- #post-<?php the_ID(); ?> -->
