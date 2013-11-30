<?php

class DynamicStyle{
      
      function __construct(){
      	       //Add bootstrap scripts
	       add_action( 'wp_head', array($this,'dynamic_css'));
      }

      function dynamic_css()
      {
	# get theme options
	?>
		<style type='text/css'>
		.carousel-caption {
  	  		color: <?php $result = get_option('mytheme_textcolor'); echo($result['textcolor_one']); ?>;
		}	
		
		</style>
 	<?php
      }
}

$dynamicstyle = new DynamicStyle();
?>