<?php

/**
 * FinTecX-Widget Main Class
 *
 * @version		2.2.0
 * @package		FinTecX
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
        // MARC P. TODO delete this line
echo('<br>Construction of class-fintecx.php<br>');
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
        $this->load_class('template');
        $this->template = new FinTecX_Template();
        add_filter('template_include', array($this, 'template_loader'));

        do_action('fintecx_init');
                // MARC P. TODO delete this line
echo('<br>Came back from do_action in class-fintecx.php<br>');

    }

    /**
     * Helper method to load other class
     * @param type $class_name
     */
    public function load_class($class_name = '') {
        if ('' != $class_name && '' != $this->token) {
            require_once ( 'class-' . esc_attr($this->token) . '-' . esc_attr($class_name) . '.php' );
            echo('<br> Getting file (in class-fintecx.php) : '. 'class-' . esc_attr($this->token) . '-' . esc_attr($class_name) . '.php<br> ');
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
    /**
     * Load vendor shop page template
     * @param type $template
     * @return type
     */
    function template_loader($template) {
        if (is_tax('dc_vendor_shop')) {
            $template = $this->template->locate_template('taxonomy-dc_vendor_shop.php');
        }
        return $template;
    }

}
