<?php

/**
 * FinTecX Widget Init Class
 *
 * @version		1.1.0
 * @package		FinTecX
 * @author 		Marc Petroff
 */
class FinTecX_Widget_Init {

    public function __construct() {
        add_action('widgets_init', array($this, 'fintecx_register_widgets'));
        add_action('wp_dashboard_setup', array($this, 'wcmp_rm_meta_boxes'));
    }

    /**
     * Add fintecx widgets
     */
    public function fintecx_register_widgets() {
        include_once ('widgets/class-fintecx-widget-iamnotarobot.php');
       // require_once ('widgets/class-wcmp-widget-vendor-list.php');
        register_widget('fintecx-iamnotarobot');
    }

}
