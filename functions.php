<?php
/*
 *
 *FUNCTIONS
 *
 */

 function smartPRESS_enqueue()
{
    /*
	 * Init Scripts » ORDER MATTERS AF » last one has the highest priority!
	 */ 
	
				wp_enqueue_style('bootstrapcssmin','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7.', 'all');
    wp_enqueue_style('fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.6.3.', 'all');
    wp_enqueue_style('material-icons','https://fonts.googleapis.com/icon?family=Material+Icons', array(), '', 'all');
    wp_enqueue_style('customstyle',get_template_directory_uri().'/css/smartpress.css' , array(), '1.0.0.', 'all');
    
	/*
	 * Init Scripts » ORDER MATTERS AF
	 */ 
	
				wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), '3.1.1.', true);
    wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7.', false);
    // wp_enqueue_script('typehead__boostrap_js', get_template_directory_uri() . '/js/bootstrap3-typeahead.js', array('jquery'), '', true );
				// wp_enqueue_script('customjs', get_template_directory_uri() . '/js/new-theme.js', array('jquery', 'jquery-ui-datepicker'), '1.0.0.', true);
    
 }
 add_action('wp_enqueue_scripts', 'smartPRESS_enqueue');
	
	/* Theme support - Menus */
	function smartPRESS_setup1()
{
	add_theme_support('menus');
	register_nav_menu('primary','Top navbar menu');
}
add_action('init','smartPRESS_setup1');
 
?>