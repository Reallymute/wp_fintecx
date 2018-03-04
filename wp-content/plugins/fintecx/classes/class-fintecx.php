<?php

/**
 * FinTecX-Widget Main Class
 *
 * @version		2.2.0
 * @package		WCMp
 * @author 		WC Marketplace
 */
if (!defined('ABSPATH')) {
    exit;
}

final class FinTecXPlugin {

    public $plugin_url;
    public $plugin_path;
    public $version;
    public $token;
    public $text_domain;
    public $library;
    public $shortcode;
    public $admin;
    public $endpoints;
    public $frontend;
    public $vendor_hooks;
    public $template;
    public $ajax;
    public $taxonomy;
    public $product;
    private $file;
    public $settings;
    public $wcmp_wp_fields;
    public $user;
    public $vendor_caps;
    public $vendor_dashboard;
    public $transaction;
    public $email;
    public $review_rating;
    public $coupon;
    public $more_product_array = array();
    public $payment_gateway;

    /**
     * Class construct
     * @param object $file
     */
    public function __construct($file) {
        $this->file = $file;
        $this->plugin_url = trailingslashit(plugins_url('', $plugin = $file));
        $this->plugin_path = trailingslashit(dirname($file));
        $this->token = 'fintecx';
        $this->text_domain = 'fintecx';
        $this->version = '0.0.1';
        $time_zone = get_option('timezone_string');
        if (!empty($time_zone)) {
            date_default_timezone_set($time_zone);
        }
        // Intialize WCMp Widgets
        $this->init_custom_widgets();
                
        // Intialize WCMp
        add_action('init', array(&$this, 'init'));

    }

    /**
     * Initialize plugin on WP init
     */
    function init() {

        /*
        // Init ajax
        if (defined('DOING_AJAX')) {
            $this->load_class('ajax');
            $this->ajax = new WCMp_Ajax();
        } */

        do_action('fintecx_init');
    }

    /**
     * Helper method to load other class
     * @param type $class_name
     */
    public function load_class($class_name = '') {
        if ('' != $class_name && '' != $this->token) {
            require_once ( 'class-' . esc_attr($this->token) . '-' . esc_attr($class_name) . '.php' );
        }
    }

    /**
     * MARC P. adapted this method to Fintecx
     * Init WCMp vendor widgets.
     *
     * @access public
     * @return void
     */
    function init_custom_widgets() {
        $this->load_class('widget-init');
        new FinTecX_Widget_Init();
    }

}
