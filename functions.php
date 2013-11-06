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
    	   //  = Page Dropdown             =
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
			'priority'=> 37, //Determines what order this appears in
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
                 

//Navigation
/**
 * Extended Walker class for use with the
 * Twitter Bootstrap toolkit Dropdown menus in Wordpress.
 * Edited to support n-levels submenu.
 * @author johnmegahan https://gist.github.com/1597994, Emanuele 'Tex' Tessore https://gist.github.com/3765640
 */
class BootstrapNavMenuWalker extends Walker_Nav_Menu {


	function start_lvl( &$output, $depth ) {

		$indent = str_repeat( "\t", $depth );
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output	   .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";

	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {


		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		
		// managing divider: add divider class to an element to get a divider before it.
		$divider_class_position = array_search('divider', $classes);
		if($divider_class_position !== false){
			$output .= "<li class=\"divider\"></li>\n";
			unset($classes[$divider_class_position]);
		}
		
		$classes[] = ($args->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if($depth && $args->has_children){
			$classes[] = 'dropdown-submenu';
		}


		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($args->has_children) 	    ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($depth == 0 && $args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
		$item_output .= $args->after;


		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		//v($element);
		if ( !$element )
			return;

		$id_field = $this->db_fields['id'];

		//display this element
		if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);

		$id = $element->$id_field;

		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

			foreach( $children_elements[ $id ] as $child ){

				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
			unset( $children_elements[ $id ] );
		}

		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}

		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);

	}

}

if(function_exists('register_nav_menus')){
	register_nav_menu('primary',__('Primary Menu'));
}

?>