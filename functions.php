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
				wp_enqueue_script('customjs', get_template_directory_uri() . '/js/smartpress.js', array('jquery', 'jquery-ui-datepicker'), '1.0.0.', true);
    
 }
 add_action('wp_enqueue_scripts', 'smartPRESS_enqueue');
	
	/* Theme support - Menus */
	function smartPRESS_setup1()
{
	add_theme_support('menus');
	register_nav_menu('primary','Top navbar menu');
}
add_action('init','smartPRESS_setup1');

function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');

function lorem()
{
	echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
 
}
?>