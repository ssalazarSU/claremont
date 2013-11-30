<?php
class TextColor{
    
    function __construct(){
        add_action('customize_register', array($this,'register_textcolor_options'));
    }
    
    public function register_textcolor_options ( $wp_customize ){

       //Define a new section to the Theme Customizer
	   $wp_customize->add_section( 'mytheme_textcolor',
	   	array(
			'title'=> __('Carousel Text Color', 'Claremont Theme'),
			'priority'=> 34, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		)
	   );

	   		   
        //  =============================
        //  = Text Color                =
        //  =============================

	  
	   $wp_customize->add_setting('mytheme_textcolor[textcolor_one]',
		array(
			'default'=> '#770000',
			'type' => 'option',
		)
	   );
	   
	   $wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize,
	   	'textcolor_one',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel text color', 'Claremont Theme'),
			'section'=> 'mytheme_textcolor',//ID of the section this control renders 
			'settings'=>'mytheme_textcolor[textcolor_one]',//ID of the setting
			)					 
	   ));
   	  		   
        //  =============================
        //  = Text Button               =
        //  =============================

	  
	 /*  $wp_customize->add_setting('mytheme_textcolor[textcolor_two]',
		array(
			'default'=> '#770000',
			'type'=>'option',
		)
	   );
	   
	   $wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize,
	   	'textcolor_two',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel button color', 'Claremont Theme'),
			'section'=> 'mytheme_textcolor',//ID of the section this control renders 
			'settings'=>'mytheme_textcolor[textcolor_two]',//ID of the setting
			)					 
	   ));*/
   	
    }
}

$textcolor = new TextColor();
?>