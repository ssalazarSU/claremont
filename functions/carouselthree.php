<?php
class Carousel_Three{
    
    function __construct(){
        add_action('customize_register', array($this,'register_carousel_three_options'));
    }
    
    public function register_carousel_three_options ( $wp_customize ){

       //Define a new section to the Theme Customizer
	   $wp_customize->add_section( 'mytheme_options_three',
	   	array(
			'title'=> __('Carousel Three Options', 'Claremont Theme'),
			'priority'=> 36, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		)
	   );

	   		   
        //  =============================
        //  = Image                     =
        //  =============================

	  
	   $wp_customize->add_setting('mytheme_options_three[carousel_image_three]',
		array(
			'default'=> get_template_directory_uri() . '/images/header/IMG_0932.JPG',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize,
	   	'mytheme_carousel_control_three',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel image', 'Claremont Theme'),
			'section'=> 'mytheme_options_three',//ID of the section this control renders
			'settings'=>'mytheme_options_three[carousel_image_three]',//ID of the setting
			)					 
	   ));
   
        //  =============================
        //  = Title                     =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_three[carousel_title_three]',
		array(
			'default'=> 'Default Title',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
			  
	   $wp_customize->add_control ( new WP_Customize_Control( $wp_customize,
	   	'mytheme_carousel_title_three',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel title', 'Claremont Theme'),
			'type'=>'text',
			'section'=> 'mytheme_options_three',//ID of the section this control renders
			'settings'=>'mytheme_options_three[carousel_title_three]',//ID of the setting
			)					 
	   ));
        
        //  =============================
        //  = TextArea                  =
        //  =============================
	   $wp_customize->add_setting('mytheme_options_three[carousel_textarea_three]',
		array(
			'default'=> 'Place text here.',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	   $wp_customize->add_control ( new Example_Customize_Textarea_Control( $wp_customize,
	   	'mytheme_carousel_textarea_three',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel textarea', 'Claremont Theme'),
			'section'=>'mytheme_options_three',//ID of the section this control renders
			'settings'=>'mytheme_options_three[carousel_textarea_three]',//ID of the setting
			)					 
	   ));
	   
	   
        //  =============================
        //  = Page Dropdown             =
        //  ============================
	   $wp_customize->add_setting('mytheme_options_three[carousel_pagelink_three]',
	   	array(
			'capability'=>'edit_theme_options',
        		'type'=>'option',
		));

	   $wp_customize->add_control('mytheme_carousel_pagelink_three', array(
        	'label'=> __('Carousel page link', 'Claremont Theme'),
        	'section'=> 'mytheme_options_three',
        	'type'    => 'dropdown-pages',
        	'settings'   => 'mytheme_options_three[carousel_pagelink_three]',
		));
    }
}

$carouselthree = new Carousel_Three();
?>