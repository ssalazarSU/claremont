<?php
class Carousel_Two{
    
    function __construct(){
        add_action('customize_register', array($this,'register_carousel_two_options'));
    }
    
    public function register_carousel_two_options ( $wp_customize ){

       //Define a new section to the Theme Customizer
	   $wp_customize->add_section( 'mytheme_options_two',
	   	array(
			'title'=> __('Carousel Two  Options', 'Claremont Theme'),
			'priority'=> 36, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		)
	   );

	   		   
        //  =============================
        //  = Image                     =
        //  =============================

	  
	   $wp_customize->add_setting('mytheme_options_two[carousel_image_two]',
		array(
			'default'=> get_template_directory_uri() . '/images/header/IMG_0932.JPG',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize,
	   	'mytheme_carousel_control_two',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel image', 'Claremont Theme'),
			'section'=> 'mytheme_options_two',//ID of the section this control renders
			'settings'=>'mytheme_options_two[carousel_image_two]',//ID of the setting
			)					 
	   ));
   
        //  =============================
        //  = Title                     =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_two[carousel_title_two]',
		array(
			'default'=> 'Default Title',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
			  
	   $wp_customize->add_control ( new WP_Customize_Control( $wp_customize,
	   	'mytheme_carousel_title_two',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel title', 'Claremont Theme'),
			'type'=>'text',
			'section'=> 'mytheme_options_two',//ID of the section this control renders
			'settings'=>'mytheme_options_two[carousel_title_two]',//ID of the setting
			)					 
	   ));
        
        //  =============================
        //  = TextArea                  =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_two[carousel_textarea_two]',
		array(
			'default'=> 'Place text here.',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new Example_Customize_Textarea_Control( $wp_customize,
	   	'mytheme_carousel_textarea_two',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel textarea', 'Claremont Theme'),
			'section'=>'mytheme_options_two',//ID of the section this control renders
			'settings'=>'mytheme_options_two[carousel_textarea_two]',//ID of the setting
			)					 
	   ));
	   
	   
        //  =============================
        //  = Page Dropdown             =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_two[carousel_pagelink_two]',
	   	array(
			'capability'=>'edit_theme_options',
        		'type'=>'option',
		));

	   $wp_customize->add_control('mytheme_carousel_pagelink_two', array(
        	'label'=> __('Carousel page link', 'Claremont Theme'),
        	'section'=> 'mytheme_options_two',
        	'type'    => 'dropdown-pages',
        	'settings'   => 'mytheme_options_two[carousel_pagelink_two]',
	   ));
	
   
        //  =============================
        //  = Pagelink Title            =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_two[carousel_pagelink_title_two]',
		array(
			'default'=> 'Button Two Title',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );

	   $wp_customize->add_control ( new WP_Customize_Control( $wp_customize,
	   	'mytheme_carousel_pagelinktitle_two',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel page link title', 'Claremont Theme'),
			'type'=>'text',
			'section'=> 'mytheme_options_two',//ID of the section this control renders 
			'settings'=>'mytheme_options_two[carousel_pagelink_title_two]',//ID of the setting
			)					 
	   ));
    
    }
}

$carouseltwo = new Carousel_Two();
?>