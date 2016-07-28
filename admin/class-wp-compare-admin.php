<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       jackdoyle.co
 * @since      1.0.0
 *
 * @package    Wp_Compare
 * @subpackage Wp_Compare/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Compare
 * @subpackage Wp_Compare/admin
 * @author     Jack Doyle <Jdoyle112@gmail.com>
 */
class Wp_Compare_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Compare_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Compare_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-compare-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Compare_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Compare_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-compare-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function add_plugin_admin_menu(){
		// add a settings page for the plugin 
		 add_options_page( 'WP Compare Posts Plugin', 'WP Compare', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page'));
	}

	public function add_action_links( $links ) {
	    /*
	    *  Documentation : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
	    */
	   $settings_link = array(
	    '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
	   );
	   return array_merge(  $settings_link, $links );

	}

	public function display_plugin_setup_page(){
		include_once('partials/wp-compare-admin-display.php');
	}

	// create custom post type
	public function create_custom_post(){
		add_theme_support( 'post-thumbnails' );
		register_post_type('comparables',
			array(
				'labels'=>array(
					'name'=>__('Comparables'),
					'singular_name'=> __('Comparables')
				),
				'public'=>true,
				'has_archive'=>true,
				'supports'=>array('title', 'editor', 'thumbnail', 'custom-fields'),
				'taxonomies'=>array('category')
			)
		);
	}

	public function create_sidebar(){
		register_sidebar(array(
			'name' => __('Compare Sidebar'),
			'id' => 'compare-sidebar',
			'description' => __('Widget for adding a sidebar to comparables post types.'),
		));
	}

	public function form_submit(){
		echo 'hi';
			include('wp-compare-page-display.php');
		
	}

}






