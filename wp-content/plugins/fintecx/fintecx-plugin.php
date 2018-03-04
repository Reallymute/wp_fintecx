<?php
/**
 * Plugin Name: FintecX
 * Plugin URI: http://www.axerex.fr/
 * Description: Un Plugin écrit par Pancho pour FintecX.
 * Author: Marc Petroff
 * Author URI: http://www.axerex.fr/
 * Version: 0.0.1
 * Stable tag: 0.0.1
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 require_once( 'classes/class-fintecx.php' );
 //require_once( 'classes/woosocio_widget.php' );
//  MARC P. adapted this to fintecx
 global $fintecxPlugin;
 $fintecxPlugin = new FinTecXPlugin( __FILE__ );
 $fintecxPlugin->version = '0.0.1';
 $fintecxPlugin->init();
         // MARC P. TODO delete this line
echo('<br>Creates Plugin of fintecx-plugin.php<br>');

?>