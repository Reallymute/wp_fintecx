<?php
/**
 * @package GPS_MAP_Widget
 * @version 1.9
 */
/*
Plugin Name: GPS MAP Widget
Plugin URI: http://plugins.funsite.eu/gps-map-widget/
Description: Shows a static google map with the GPS location of the featured image.
Author: Gerhard Hoogterp
Version: 1.9
Author URI: http://plugins.funsite.eu/gps-map-widget/
*/
if ( ! defined( 'ABSPATH' ) ) exit;

if (!class_exists('basic_plugin_class')):
	require(plugin_dir_path(__FILE__).'basics/basic_plugin.class');
endif;

include_once('GPS_MAP_Widget-plugin.php');
$gps_map_box = new gps_map_box_class();
$gps_map_box->currentPlugin = __FILE__;  // bit of a hack to find the plugin info in getPlugins
?>