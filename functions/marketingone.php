<?php 

class Marketing_One{
      function __construct(){
      	       add_action('customize_register',array($this,'register_marketing_one_options'));
      }

      public function register_marketing_one_options ($wp_customize){
      	     
	     //Define a new section to the Theme Customizer
	       $wp_customize->add_section( 'marketing_options_one',
	        array(
			'title'=> __('Marketing One Options', 'Claremont Theme'),
			'priority'=> 38, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		));
     	     

	   		   
        //  =============================
        //  = Image                     =
        //  =============================

	  
	   $wp_customize->add_setting('marketing_options_one[marketing_image_one]',
		array(
			'default'=> get_template_directory_uri() . '/images/header/IMG_0932.JPG',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize,
	   	'marketing_image_one_control',//Set a unique ID for the control
		array(
		        
			'label'=> __('Marketing image', 'Claremont Theme'),
			'section'=> 'marketing_options_one',//ID of the section this control renders 
			'settings'=>'marketing_options_one[marketing_image_one]',//ID of the setting
			)					 
	   ));

	     //  =============================
	     //  = Title                     =
	     //  =============================
	   $wp_customize->add_setting('marketing_options_one[marketing_title_one]',
		array(
			'default'=> 'Default Title',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
			  
	   $wp_customize->add_control ( new WP_Customize_Control( $wp_customize,
	   	'marketing_title_one_control',//Set a unique ID for the control
		array(
		        
			'label'=> __('Marketing title', 'Claremont Theme'),
			'type'=>'text',
			'section'=> 'marketing_options_one',//ID of the section this control renders 
			'settings'=>'marketing_options_one[marketing_title_one]',//ID of the setting
			)					 
	   ));

        
        //  =============================
        //  = TextArea                  =
        //  =============================
	   $wp_customize->add_setting('marketing_options_one[marketing_textarea_one]',
		array(
			'default'=> 'Place text here.',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new Example_Customize_Textarea_Control( $wp_customize,
	   	'marketing_textarea_one_control',//Set a unique ID for the control
		array(
		        
			'label'=> __('Marketing textarea', 'Claremont Theme'),
			'section'=>'marketing_options_one',//ID of the section this control renders 
			'settings'=>'marketing_options_one[marketing_textarea_one]',//ID of the setting
			)					 
	   ));
	   
	   
        //  =============================
        //  = Pagelink Dropdown         =
        //  =============================
	   $wp_customize->add_setting('marketing_options_one[marketing_pagelink_one]', 
	   	array(
			'capability'=>'edit_theme_options',
        		'type'=>'option',
		));

	   $wp_customize->add_control('marketing_pagelink_one_control', array(
        	'label'=> __('Marketing page link', 'Claremont Theme'),
        	'section'=> 'marketing_options_one',
        	'type'    => 'dropdown-pages',
        	'settings'   => 'marketing_options_one[marketing_pagelink_one]',
		));



      }
}

$marketingone = new Marketing_One();
?>