<?php
/**
 * @package WordPress
 * @subpackage codep29Badminton
 */

add_theme_support('automatic-feed-links');

/**
 * Add/Remove some scripts
 */

function wpbuild_scripts(){
	$template_url = get_template_directory_uri();
	if(is_admin()){ return; }
	
	// Remove WP jQuery version
	wp_deregister_script('jquery');
	// add bootstrap css
	// wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'bootstrap-style', $template_url . '/inc/css/bootstrap.min.css');
	wp_enqueue_script( 'jquery', $template_url . '/inc/js/libs/jquery-1.9.1.min.js');
	wp_enqueue_script( 'popper', $template_url . '/inc/js/libs/popper.min.js');
	wp_enqueue_script( 'bootstrap-script', $template_url . '/inc/js/libs/bootstrap.min.js', array( 'jquery', 'popper' ), null, true  );
	wp_enqueue_script( 'app-script', $template_url . '/inc/js/app.min.js', array( 'bootstrap-script' ), null, true  );
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'bootstrap' ),
) );

/**
 * Load custom WordPress nav walker.
 */
 require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

add_action('init', 'wpbuild_scripts');