<?php 

/**
 * Contains methods for customizing the theme customization screen
 *@link http://codex.wordpress.org/Theme_Customization_API
 *@since MyTheme 1.0
 */

if(class_exists('WP_Customize_Control')){
	class Example_Customize_Textarea_Control extends WP_Customize_Control {
    	   public $type = 'textarea';
	   public function render_content() {
           	 ?>
        	 <label>
        	 <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        	 <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        	 </label>
        	 <?php
    		}
	}

}

class MyTheme_Customize {
 /**
    * This hooks into 'customize_register' (available as of WP 3.4) and allows
    * you to add new sections and controls to the Theme Customize screen.
    * 
    * Note: To enable instant preview, we have to actually write a bit of custom
    * javascript. See live_preview() for more.
    *  
    * @see add_action('customize_register',$func)
    * @param \WP_Customize_Manager $wp_customize
    * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
    * @since MyTheme 1.0
    */

    public static function register_carousel_one_options ( $wp_customize ){
    	   

    	   //1. Define a new section to the Theme Customizer
	   $wp_customize->add_section( 'mytheme_options_one',
	   	array(
			'title'=> __('Carousel One  Options', 'Claremont Theme'),
			'priority'=> 35, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		)
	   );


	   //Image. Register new settings to the WP database...
	   $wp_customize->add_setting('mytheme_options_one[carousel_one]',
		array(
			'default'=> get_template_directory_uri() . '/images/header/IMG_0932.JPG',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   

	   //Title. Register new settings to the WP database...
	   $wp_customize->add_setting('mytheme_options_one[carousel_title_one]',
		array(
			'default'=> 'Default Title',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );


	   //Text Area. Register new settings to the WP database...
	   $wp_customize->add_setting('mytheme_options_one[carousel_textarea_one]',
		array(
			'default'=> 'Place text here.',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
	   
	  
	   //Add Image Control. Define the control itself 
	   $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize,
	   	'mytheme_carousel_control_one',//Set a unique ID for the control
		array(
		        
			'label'=> __('Upload carousel image', 'Claremont Theme'),
			'section'=> 'mytheme_options_one',//ID of the section this control renders 
			'settings'=>'mytheme_options_one[carousel_one]',//ID of the setting
			)					 
	   ));

	   //Add Title Control. Define the control itself 
	   $wp_customize->add_control ( new WP_Customize_Control( $wp_customize,
	   	'mytheme_carousel_title_one',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel title', 'Claremont Theme'),
			'type'=>'text',
			'section'=> 'mytheme_options_one',//ID of the section this control renders 
			'settings'=>'mytheme_options_one[carousel_title_one]',//ID of the setting
			)					 
	   ));


	   //Add TextArea Control. Define the control itself 
	   $wp_customize->add_control ( new Example_Customize_Textarea_Control( $wp_customize,
	   	'mytheme_carousel_textarea_one',//Set a unique ID for the control
		array(
		        
			'label'=> __('Carousel textarea', 'Claremont Theme'),
			'section'=> 'mytheme_options_one',//ID of the section this control renders 
			'settings'=>'mytheme_options_one[carousel_textarea_one]',//ID of the setting
			)					 
	   ));

    }


    public static function register_carousel_two_options($wp_customize){
           //1. Define a new section to the Theme Customizer
	   $wp_customize->add_section( 'mytheme_options_two',
	   	array(
			'title'=> __('Carousel Two  Options', 'Claremont Theme'),
			'priority'=> 36, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		)
	   );
    	
	      
	   //2b. Register new settings to the WP database...
	   $wp_customize->add_setting('mytheme_options_two[carousel_two]',
		array(
			'default'=> get_template_directory_uri() . '/images/header/IMG_0932.JPG',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );
   
	     
	   //3b. Define the control itself 
	   $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize,
	   	'mytheme_carousel_control_two',//Set a unique ID for the control
		array(
			'label'=> __('Upload carousel image two', 'Claremont Theme'),
			'section'=> 'mytheme_options_two',//ID of the section this control renders 
			'settings'=>'mytheme_options_two[carousel_two]',//ID of the setting
	 	)
	   ));
	
    }
    
    public static function register_carousel_three_options($wp_customize){
    	   
	    //1. Define a new section to the Theme Customizer
	   $wp_customize->add_section( 'mytheme_options_three',
	   	array(
			'title'=> __('Carousel Three  Options', 'Claremont Theme'),
			'priority'=> 36, //Determines what order this appears in
			'capability'=> 'edit_theme_options', //Capability needed to tweak
			'description'=> __('Allows you to customize some example setting for Claremont Theme', 'Claremont Theme'),
		)
	   );

	   //2c. Register new settings to the WP database...
	   $wp_customize->add_setting('mytheme_options_three[carousel_three]',
		array(
			'default'=> get_template_directory_uri() . '/images/header/IMG_0932.JPG',
			'type' => 'option',
			'capability'=> 'edit_theme_options',
		)
	   );

	   
	    //3c. Define the control itself 
	   $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize,
	   	'mytheme_carousel_control_three',//Set a unique ID for the control
		array(
			'label'=> __('Upload carousel image three', 'Claremont Theme'),
			'section'=> 'mytheme_options_three',//ID of the section this control renders 
			'settings'=>'mytheme_options_three[carousel_three]',//ID of the setting 
	 	)
	   ));
    }
}

add_action('customize_register', array('MyTheme_Customize','register_carousel_one_options'));
add_action('customize_register', array('MyTheme_Customize','register_carousel_two_options'));
add_action('customize_register', array('MyTheme_Customize','register_carousel_three_options'));

function wpbootstrap_scripts()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js',array('jquery'),'3.0',true);
	 wp_register_script('holder-js-script', get_template_directory_uri() . '/docs-assets/js/holder.js',array(),'1.0',true);

	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap-script',true);
	wp_enqueue_script('holder-js-script',true);

}


//Add bootstrap scripts
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts' ); 


?>