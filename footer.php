	</div>
	<aside id='widgets'>
		<?php get_search_form( true ); ?>
		<div class='prepend-top'>
		  <a class='newsletter' href='#'>
			<img src='<?php echo get_template_directory_uri(); ?>/images/newsletter.png' />
			S'inscrire à la newsletter
		  </a>
		</div>
		<div class='prepend-top'>
		  <div class='fb-like-box' data-header='true' data-href='<?php echo $options['layout_social_facebook']; ?>' data-show-faces='true' data-stream=  'false' data-width='210'></div>
		</div>
		<div class='prepend-top'>
		  <a class='twitter-follow-button' data-lang='fr' data-show-count='false' data-size='large' href='<?php echo $options['layout_social_twitter']; ?>'>Suivre @revenuDeBaseFr</a>
		</div>
		<div class='prepend-top' id='twitter-widget'></div>
	  </aside>
	</section>
      <footer>
        <div class='columns'>
          <?php
            $footerMenus = array(
                'footer_menu_left',
                'footer_menu_center_left',
                'footer_menu_center_right',
                'footer_menu_right'
            );

            foreach ( $footerMenus as $footerMenu ) :
                if ( has_nav_menu( $footerMenu ) ) :
          ?>
          <div class='column'>
          <h2><?php wp_nav_menu_title( $footerMenu ); ?></h2>
          <?php
            wp_nav_menu( array(
                'container' => '',
                'theme_location' => $footerMenu
            ));
          ?>
          </div>
          <?php
                endif;
            endforeach;
          ?>
        </div>
        <div class='credits'>
          Revenu de Base est propulsé par
          <a href='http://wordpress.org'>Wordpress</a>
          sur un thème de
          <a href=''>Gnuside</a>
          et un design de
          <a href=''>Guillaume Argence</a>
          .
          <br />
          Tous les contenus sauf exceptions signalées sont sous
          licence
          <a href=''>CREATIVE COMMONS BY SA</a>
          .
        </div>
      </footer>
    </div>
    <div id='fb-root'></div>
    <script type='text/javascript'>
      //<![CDATA[
        (function(d, s, id) {
        	var js, fjs = d.getElementsByTagName(s)[0];
        	if (d.getElementById(id)) return;
        	js = d.createElement(s); js.id = id;
        	js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
        	fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      //]]>
    </script>
    <script charset='utf-8' src='//widgets.twimg.com/j/2/widget.js'></script>
    <script type='text/javascript'>
      //<![CDATA[
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        new TWTR.Widget({
        	version: 2,
        	id: 'twitter-widget',
        	type: 'search',
        	search: 'from:revenudebase OR revenudebase OR basicincome', // here is our query!
        	title: 'À propos du RevenuDeBase',
        	interval: 6000,
        	rpp: 4,
        	width: 210,
        	height: 400,
        	theme: {
        		shell: {
        			background: '#44654a',
        			color: '#ffffff'
        		},
        		tweets: {
        			background: '#ffffff',
        			color: '#000000',
        			links: '#267386'
        		}
        	},
        	features: {
        		scrollbar: false,
        		loop: false,
        		live: true,
				avatars: false,
        		behavior: 'all'
        	}
        }).render().start();
      //]]>
    </script>
        <?php wp_footer(); ?>
  </body>
</html>
