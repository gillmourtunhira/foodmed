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
 * <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.15/tailwind.css">
 */
function med_loadcss() {
	wp_register_style( 'medcss', get_template_directory_uri() . '/css/foodmed.css', array(), '1.0', 'all' );
	wp_register_style( 'tailwindcss', 'https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css', array(), '2.2.19', 'all' );
	wp_enqueue_style( 'medcss' );
	wp_enqueue_style( 'tailwindcss' );
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


