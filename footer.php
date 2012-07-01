	</div>
	<aside id='widgets'>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('revenudebase_sidebar') ) : ?>
<?php endif; ?>
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
        <?php wp_footer(); ?>
  </body>
</html>
