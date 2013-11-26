<?php

/* Helper function to return the theme option value. If no value has been saved, it returns $default */
if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
    }
}


function optionscheck_options_menu_params( $menu ) {
	
	$menu['page_title'] = __( 'Options Panel', 'textdomain');
	$menu['menu_title'] = __( 'Options Panel', 'textdomain');
	$menu['menu_slug'] = 'options-panel';
	return $menu;
}

add_filter( 'optionsframework_menu', 'optionscheck_options_menu_params' );