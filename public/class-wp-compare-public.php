<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       jackdoyle.co
 * @since      1.0.0
 *
 * @package    Wp_Compare
 * @subpackage Wp_Compare/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Compare
 * @subpackage Wp_Compare/public
 * @author     Jack Doyle <Jdoyle112@gmail.com>
 */
class Wp_Compare_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-compare-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-compare-public.js', array( 'jquery' ), $this->version, false );

	}


	// apply custom post type template
	public function custom_template($template){
		global $wp_query, $post;

		$plugin_path = plugin_dir_path( __FILE__ );
		$template_name = 'wp-compare-single-display.php';

	    if ($post->post_type == "comparables"){
	        if(file_exists($plugin_path . 'partials/' . $template_name)){
	            return $plugin_path . 'partials/' . $template_name;
	        }
	        return $template;
	    }
	}	

	// apply custom post type template
	public function custom_archive_template($template){
		global $wp_query, $post;

		$plugin_path = plugin_dir_path( __FILE__ );
		$template_name = 'wp-compare-page-display.php';

	    if ($post->post_type == "comparables"){
	        if(file_exists($plugin_path . 'partials/' . $template_name)){
	            return $plugin_path . 'partials/' . $template_name;
	        }
	        return $template;
	    }
	}		

}
