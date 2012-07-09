<?php $options = get_option( 'revenudebase_options_prefix' ); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta content='Revenu De Base - Javascript &amp; JQuery' name='description' />
    <meta content='Gnuside' name='author' />
    <link href='//fonts.googleapis.com/css?family=Concert+One:400|Parisienne:400|Karla:700,400|Dosis:400,500,600,700' rel='stylesheet' type='text/css' />
    <link href='<?php echo get_template_directory_uri(); ?>/css/blueprint/screen.css' media='screen, projection' rel='stylesheet' />
    <!--[if IE]>
      <link href='<?php echo get_template_directory_uri(); ?>/css/blueprint/ie.css' media='screen, projection' rel='stylesheet' />
    <![endif]-->
    <link href='<?php echo get_template_directory_uri(); ?>/css/blueprint/print.css' media='print' rel='stylesheet' />
    <link href='<?php echo get_template_directory_uri(); ?>/css/common.css' rel='stylesheet' />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

	<title>
		<?php 
		$title = bloginfo('name');
		if ( is_404() ){ 
			$title .= "&raquo;" .  _e('Not Found');
		} elseif ( is_home() ) {
			$title .= "&raquo;" . bloginfo('description');
		} else {
			$title .= "&raquo;" . wp_title();
		}
		?>
	</title>


	<?php wp_head(); ?>
  </head>

  <body>
	<div id="beforehead"></div>
    <div class='container'>
      <!-- / header with logo & stuff -->
	  <header class='top-header'>
	  <div class='logo'><a href="<?php bloginfo('wpurl'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/></a>
        </div>
	  <h1 class='name'><!-- TODO: replace with site title / handle linebreak --><a href="<?php bloginfo('wpurl'); ?>">Revenu
          <br />
		  de Base</a></h1>
		<div class='baseline'><!-- TODO: replace with description / handle linebreak -->
            Et vous, que feriez-vous
            <br />
            si votre revenu était garanti ?
          </div>
        <div class='socialmedia'>
<?php if (!empty($options['layout_social_facebook'])): ?>
          <div class='social'>
		  <a href='<?php echo $options['layout_social_facebook']; ?>'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/facebook.png' />
            </a>
          </div>
<?php endif; ?>
<?php if (!empty($options['layout_social_twitter'])): ?>
          <div class='social'>
            <a href='<?php echo $options['layout_social_twitter']; ?>'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/twitter.png' />
            </a>
          </div>
<?php endif; ?>
<?php if (!empty($options['layout_social_googleplus'])): ?>
          <div class='social'>
            <a href='<?php echo $options['layout_social_googleplus']; ?>'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/googleplus.png' />
            </a>
          </div>
<?php endif; ?>
          <div class='social'>
			  <a href='<?php bloginfo('rss2_url'); ?>'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/rss.png' />
            </a>
          </div>
        </div>
      </header>
      <nav>
        <?php
            if ( has_nav_menu( 'navigation_menu' ) ) {
                wp_nav_menu(array(
                    'container' => '',
                    'menu_class' => 'major',
                    'theme_location' => 'navigation_menu'
                ));
            }
        ?>
      </nav>
      <section class='content-container'>
        <div id='definition'>
          Le revenu de base est un revenu
          <span>inconditionnel,</span>
          versé
          <span>dès la naissance</span>
          et
          <span>cumulable</span>
          avec tout autre revenu.
        </div>
        <div id='content'>
