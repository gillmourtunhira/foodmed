<?php
/**
 * Functions
 * php version 7.3
 *
 * @category Functions
 * @package  Web-Artisans
 * @author   Web-Artisans <projects@webartisans.co.zw>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */

define( 'PLUGINS_DIR_URL', plugin_dir_url( __FILE__ ) );

/**
 * Fetches the custom stylesheet and embed it
 *
 * @return void
 */
function med_loadcss() {
	wp_register_style( 'medcss', get_template_directory_uri() . '/css/foodmed.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'medcss' );
}
add_action( 'wp_enqueue_scripts', 'med_loadcss' );

/**
 * Fetches the custom js file and embed it nQ-buW{e}]^3
 *
 * @return void
 */
function med_loadjs() {
	wp_register_script( 'medjs', get_template_directory_uri() . '/js/foodmed.js', array(), '1.0', true );
	wp_enqueue_script( 'medjs' );
}
add_action( 'wp_enqueue_scripts', 'med_loadjs' );


