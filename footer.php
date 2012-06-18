	</div>
	<aside id='widgets'>                                                                                            
		<form>                                                                                                        
		  <input class='search' placeholder='Recherche' type='text' />                                                
		</form>                                                                                                       
		<div class='prepend-top'>                                                                                     
		  <a class='newsletter' href='#'>                                                                             
			<img src='<?php echo get_template_directory_uri(); ?>/images/newsletter.png' />                                                                       
			S'inscrire à la newsletter                                                                                
		  </a>                                                                                                        
		</div>                                                                                                        
		<div class='prepend-top'>                                                                                     
		  <div class='fb-like-box' data-header='true' data-href='http://www.facebook.com/RevenudeBase' data-show-faces='true' data-stream=  'false' data-width='210'></div>
		</div>                                                                                                        
		<div class='prepend-top'>                                                                                     
		  <a class='twitter-follow-button' data-lang='fr' data-show-count='false' data-size='large' href='https://twitter.com/revenudebase  '>Suivre @revenudebase</a>
		</div>                                                                                                        
		<div class='prepend-top' id='twitter-widget'></div>                                                           
	  </aside>
	</section>
      <footer>
        <div class='columns'>
          <div class='column'>
            <h2>À propos</h2>
            <ul>
              <li>
                <a href='#'>Qui sommes-nous</a>
              </li>
              <li>
                <a href='#'>Contact</a>
              </li>
              <li>
                <a href='#'>Mentions légales</a>
              </li>
              <li>
                <a href='#'>Recevoir la newsletter</a>
              </li>
            </ul>
          </div>
          <div class='column'>
            <h2>Partenaires</h2>
            <ul>
              <li>
                <a href='#'>BIEN</a>
              </li>
              <li>
                <a href='#'>Appel pour le revenu de vie</a>
              </li>
              <li>
                <a href='#'>Basic Income News</a>
              </li>
              <li>
                <a href='#'>Initiative citoyenne européenne</a>
              </li>
            </ul>
          </div>
          <div class='column'>
            <h2>Agir</h2>
            <ul>
              <li>
                <a href='#'>Faire un don</a>
              </li>
              <li>
                <a href='#'>Proposer un article</a>
              </li>
              <li>
                <a href='#'>Goodies</a>
              </li>
              <li>
                <a href='#'>Trouver un groupe local</a>
              </li>
            </ul>
          </div>
          <div class='column'>
            <h2>Réseaux sociaux</h2>
            <ul>
              <li>
                <a href='#'>Twitter</a>
              </li>
              <li>
                <a href='#'>Facebook</a>
              </li>
              <li>
                <a href='#'>Google plus</a>
              </li>
              <li>
                <a href='#'>Flickr</a>
              </li>
              <li>
                <a href='#'>Youtube</a>
              </li>
            </ul>
          </div>
        </div>
        <div class='credits'>
          Revenu de Base est propulsé par
          <a href='FIXME'>Wordpress</a>
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
        	height: 300,
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
        		behavior: 'all'
        	}
        }).render().start();
      //]]>
    </script>
  </body>
</html>
