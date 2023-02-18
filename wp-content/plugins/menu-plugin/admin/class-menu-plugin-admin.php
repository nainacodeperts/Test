<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       tidbitsolutions.com
 * @since      1.0.0
 *
 * @package    Menu_Plugin
 * @subpackage Menu_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Menu_Plugin
 * @subpackage Menu_Plugin/admin
 * @author     naina <naina@tidbitsolutions.com>
 */
class Menu_Plugin_Admin {

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

        add_action('admin_menu', array( $this, 'addPluginAdminMenu' ), 9);  
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
		 * defined in Menu_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Menu_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/menu-plugin-admin.css', array(), $this->version, 'all' );

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
		 * defined in Menu_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Menu_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/menu-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function addPluginAdminMenu() 
	{		
		//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
		add_menu_page(  $this->plugin_name, 'MENUPLUGIN', 'administrator', $this->plugin_name, array( $this, 'displayPluginAdminSettings' ), 'dashicons-chart-area', 26 );
		add_submenu_page($this->plugin_name, 'Menu','Menu', 'administrator', 'menu', array( $this, 'menu_template' ));		
	
		

	}
	
	public function displayPluginAdminSettings() 
	{		
		// set this var to be used in the settings-display view
		$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'general';
		if(isset($_GET['error_message'])){
				add_action('admin_notices', array($this,'settingsPageSettingsMessages'));
				do_action( 'admin_notices', $_GET['error_message'] );
		} 
		require_once 'partials/'.$this->plugin_name.'-admin-display.php';
		
	}
	//Forms Menu//
	function menu_template()
	{
		require_once 'menu/index.php';
	}
	



}
