<?php
/**
 * Plugin Name: My First Elementor Hello World Addon
 * Description: This is My First Elementor Hello WOrld Addon.
 * Version:     1.0.0
 * Author:      Md Shijan Ali
 * Author URI:  https://my-portfolio-md-shijan-ali.netlify.app/
 * Text Domain: elementor-addon
 */

function shijan_tt_one_child_widgets( $widgets_manager ) {

	require_once( __DIR__ . '/widgets.php' );


	$widgets_manager->register( new \Shijan_Team_Members() );

	

}
add_action( 'elementor/widgets/register', 'shijan_tt_one_child_widgets' );