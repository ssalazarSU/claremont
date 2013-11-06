<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/logos/favicon.png"/>

    <title><?php wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" media="screen"/>
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style id="holderjs-style" type="text/css"></style>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<!-- NAVBAR 
    ============================================== -->
<body>
    <div class="navbar-wrapper"> 
      <div class="container"> 
        <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">
	    <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://www.cgu.edu/pages/1.asp">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logos/claremont_logo1.jpg" alt="CGU Logo">  
	      </a>	
            </div>
            <div class="navbar-collapse collapse">
              <?php
		 $args = array(
		  'theme_location' => 'primary',
	          'depth' => 0,
	          'container' => false,
	          'menu_class' => 'nav navbar-nav',
		  'walker' => new BootstrapNavMenuWalker()
		 );
		 wp_nav_menu($args);
	      ?>
            </div>
          </div>
        </div>
      </div>
    </div>
