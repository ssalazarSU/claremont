<?php
class Carousel_One{
    
    function __construct(){
        add_action('customize_register', array($this,'register_carousel_one_options'));
    }
    
    public function register_carousel_one_options ( $wp_customize ){

       //Define a new section to the Theme Customizer
	   $wp_customize->add_section( 'mytheme_options_one',
	   	array(
			'title'=> __('Carousel One  Options', 'Claremont Theme'),
			'priority'=> 35, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		)
	   );

	   		   
        //  =============================
        //  = Image                     =
        //  =============================

	  
	   $wp_customize->add_setting('mytheme_options_one[carousel_image_one]',
		array(
			'default'=> get_template_directory_uri() . '/images/header/IMG_0932.JPG',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize,
	   	'mytheme_carousel_control_one',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel image', 'Claremont Theme'),
			'section'=> 'mytheme_options_one',//ID of the section this control renders 
			'settings'=>'mytheme_options_one[carousel_image_one]',//ID of the setting
			)					 
	   ));
   
        //  =============================
        //  = Title                     =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_one[carousel_title_one]',
		array(
			'default'=> 'Default Title',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
			  
	   $wp_customize->add_control ( new WP_Customize_Control( $wp_customize,
	   	'mytheme_carousel_title_one',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel title', 'Claremont Theme'),
			'type'=>'text',
			'section'=> 'mytheme_options_one',//ID of the section this control renders 
			'settings'=>'mytheme_options_one[carousel_title_one]',//ID of the setting
			)					 
	   ));
        
        //  =============================
        //  = TextArea                  =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_one[carousel_textarea_one]',
		array(
			'default'=> 'Place text here.',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new Example_Customize_Textarea_Control( $wp_customize,
	   	'mytheme_carousel_textarea_one',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel textarea', 'Claremont Theme'),
			'section'=>'mytheme_options_one',//ID of the section this control renders 
			'settings'=>'mytheme_options_one[carousel_textarea_one]',//ID of the setting
			)					 
	   ));
	   
	   
        //  =============================
        //  = Pagelink Dropdown         =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_one[carousel_pagelink_one]', 
	   	array(
			'capability'=>'edit_theme_options',
        		'type'=>'option',
		));

	   $wp_customize->add_control('mytheme_carousel_pagelink_one', array(
        	'label'=> __('Carousel page link', 'Claremont Theme'),
        	'section'=> 'mytheme_options_one',
        	'type'    => 'dropdown-pages',
        	'settings'   => 'mytheme_options_one[carousel_pagelink_one]',
		));

   	
        //  =============================
        //  = Pagelink Title            =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_one[carousel_pagelink_title_one]',
		array(
			'default'=> 'Button One Title',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );

	   $wp_customize->add_control ( new WP_Customize_Control( $wp_customize,
	   	'mytheme_carousel_pagelinktitle_one',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel page link title', 'Claremont Theme'),
			'type'=>'text',
			'section'=> 'mytheme_options_one',//ID of the section this control renders 
			'settings'=>'mytheme_options_one[carousel_pagelink_title_one]',//ID of the setting
			)					 
	   ));
    
    }
}

$carouselone = new Carousel_One();
?>