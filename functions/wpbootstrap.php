<?php

class WPBootstrap{
      
      function __construct(){
      	       //Add bootstrap scripts
	       add_action( 'wp_enqueue_scripts', array($this,'wpbootstrap_scripts'));
      }

      function wpbootstrap_scripts()
      {
	  // Register the script like this for a theme:
       	   wp_register_script( 'bootstrap-script', get_template_directory_uri() .
	   '/bootstrap/js/bootstrap.js',array('jquery'),'3.0',true);
           wp_register_script('holder-js-script', get_template_directory_uri() .
	   '/docs-assets/js/holder.js',array(),'1.0',true);

	   // For either a plugin or a theme, you can then enqueue the script:
           wp_enqueue_script( 'bootstrap-script',true);
           wp_enqueue_script('holder-js-script',true);
	 }
}
$wpbootstrap = new WPBootstrap();
?>