<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * MARC P. Added this fucnion to include the parent theme material
 *    this file is in the storefornt-child theme
 */

function storefront_child_enqueue_style() {
    $parent_style = 'storefront-style';
    wp_enqueue_style($parent_style,get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',get_stylesheet_directory_uri() . '/styles.css',
            array($parent_style),
            wp_get_theme()->get('Version'));
}

add_action('wp_enqueue_scripts','storefront_child_enqueue_style');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Marc P. Add ing customisation is OK here becasue this file
 * resides in the storefront-child theme that I forked off the original
 * strefront theme.
 * https://github.com/woocommerce/theme-customisations
 */
function fintecx_widgets_iamnotarobot() {
    echo '<form class="mp_not_robot"><input type="text">I am not a Robot</input>'
    . '<hidden name="hash">hA5H</hidden><submit target=""//http://www.iamnotarobot.com/about/" '
            . 'type="POST">Click here if you are not a robot</submit></form>';
}
// MARC P. calling the adding of the widget to the queued widget handler
add_action("wp_register_widgets",'fintecx_widgets_iamnotarobot');

function storefront_child_fintecx_widgets_init() {
    register_sidebar(array(
        'thing1' => 'fintecx_widgets_iamnotarobot',
        'name' => 'Fintecx Widgets - I am not a robot',
        'id' => 'fintecx_widgets_iamnotarobot',
        'before_widget' => '<div class="mp_small_widget  mp_widgetrobot">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mp_widget_title">',
        'after_title' => '</h3>'
        
    ));
    register_sidebar(array(
        'name' => 'Fintecx Header Column 1',
        'id' => 'fintecx_widgets_header_col_1',
        'before_widget' => '<div class="mp_small_widget mp_widget1">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mp_widget_title">',
        'after_title' => '</h3>'
        
    ));
    register_sidebar(array(
        'name' => 'Fintecx Header Column '2,
        'id' => 'fintecx_widgets_header_col_2',
        'before_widget' => '<div class="mp_small_widget mp_widget2">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mp_widget_title">',
        'after_title' => '</h3>'
        
    ));
    register_sidebar(array(
        'name' => 'Fintecx Header Column 3',
        'id' => 'fintecx_widgets_header_col_3',
        'before_widget' => '<div class="mp_small_widget mp_widget3">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="mp_widget_title">',
        'after_title' => '</h3>'
        
    ));
   
}

add_action('widgets_init','storefront_child_fintecx_widgets_init');
        
function storefront_child_scripts() {
    
    wp_enqueue_script('mp_script_iamnotarobot',get_stylesheet_directory_uri().'js\mp_iamnotarobot.js');
}

add_action('wp_enqueue_scripts','storefront_child_scripts');