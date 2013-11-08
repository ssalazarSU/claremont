<?php 

class Marketing_Three{
      function __construct(){
      	       add_action('customize_register',array($this,'register_marketing_three_options'));
      }

      public function register_marketing_three_options ($wp_customize){
      	     
	     //Define a new section to the Theme Customizer
	       $wp_customize->add_section( 'marketing_options_three',
	        array(
			'title'=> __('Marketing Three Options', 'Claremont Theme'),
			'priority'=> 40, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		));
     	     

	   		   
        //  =============================
        //  = Image                     =
        //  =============================

	  
	   $wp_customize->add_setting('marketing_options_three[marketing_image_three]',
		array(
			'default'=> get_template_directory_uri() . '/images/header/IMG_0932.JPG',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize,
	   	'marketing_image_three_control',//Set a unique ID for the control
		array(
		        
			'label'=> __('Marketing image', 'Claremont Theme'),
			'section'=> 'marketing_options_three',//ID of the section this control renders 
			'settings'=>'marketing_options_three[marketing_image_three]',//ID of the setting
			)					 
	   ));

	     //  =============================
	     //  = Title                     =
	     //  =============================
	   $wp_customize->add_setting('marketing_options_three[marketing_title_three]',
		array(
			'default'=> 'Default Title',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
			  
	   $wp_customize->add_control ( new WP_Customize_Control( $wp_customize,
	   	'marketing_title_three_control',//Set a unique ID for the control
		array(
		        
			'label'=> __('Marketing title', 'Claremont Theme'),
			'type'=>'text',
			'section'=> 'marketing_options_three',//ID of the section this control renders 
			'settings'=>'marketing_options_three[marketing_title_three]',//ID of the setting
			)					 
	   ));

        
        //  =============================
        //  = TextArea                  =
        //  =============================
	   $wp_customize->add_setting('marketing_options_three[marketing_textarea_three]',
		array(
			'default'=> 'Place text here.',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new Example_Customize_Textarea_Control( $wp_customize,
	   	'marketing_textarea_three_control',//Set a unique ID for the control
		array(
		        
			'label'=> __('Marketing textarea', 'Claremont Theme'),
			'section'=>'marketing_options_three',//ID of the section this control renders 
			'settings'=>'marketing_options_three[marketing_textarea_three]',//ID of the setting
			)					 
	   ));
	   
	   
        //  =============================
        //  = Pagelink Dropdown         =
        //  =============================
	   $wp_customize->add_setting('marketing_options_three[marketing_pagelink_three]', 
	   	array(
			'capability'=>'edit_theme_options',
        		'type'=>'option',
		));

	   $wp_customize->add_control('marketing_pagelink_three_control', array(
        	'label'=> __('Marketing page link', 'Claremont Theme'),
        	'section'=> 'marketing_options_three',
        	'type'    => 'dropdown-pages',
        	'settings'   => 'marketing_options_three[marketing_pagelink_three]',
		));
      }
}

$marketingthree = new Marketing_Three();
?>