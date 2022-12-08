<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://profly/deimel
 * @since      1.0.0
 *
 * @package    Profly_Pg_Questionnaire
 * @subpackage Profly_Pg_Questionnaire/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Profly_Pg_Questionnaire
 * @subpackage Profly_Pg_Questionnaire/admin
 * @author     Augustinus Deimel <Augustinus.Deimel@t-online.de>
 */
class Profly_Pg_Questionnaire_Admin {

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
		 * defined in Profly_Pg_Questionnaire_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Profly_Pg_Questionnaire_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/profly-pg-questionnaire-admin.css', array(), $this->version, 'all' );

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
		 * defined in Profly_Pg_Questionnaire_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Profly_Pg_Questionnaire_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/profly-pg-questionnaire-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function cptui_register_my_cpts() {

		/**
		 * Post Type: Kunden.
		 */
	
		$labels = [
			"name" => esc_html__( "Kunden", "twentytwentythree" ),
			"singular_name" => esc_html__( "Kunde", "twentytwentythree" ),
			"menu_name" => esc_html__( "My xxxx", "twentytwentythree" ),
			"all_items" => esc_html__( "All xxxx", "twentytwentythree" ),
			"add_new" => esc_html__( "Add new", "twentytwentythree" ),
			"add_new_item" => esc_html__( "Add new xxxx", "twentytwentythree" ),
			"edit_item" => esc_html__( "Edit xxxx", "twentytwentythree" ),
			"new_item" => esc_html__( "New xxxx", "twentytwentythree" ),
			"view_item" => esc_html__( "View xxxx", "twentytwentythree" ),
			"view_items" => esc_html__( "View xxxx", "twentytwentythree" ),
			"search_items" => esc_html__( "Search xxxx", "twentytwentythree" ),
			"not_found" => esc_html__( "No xxxx found", "twentytwentythree" ),
			"not_found_in_trash" => esc_html__( "No xxxx found in trash", "twentytwentythree" ),
			"parent" => esc_html__( "Parent xxxx:", "twentytwentythree" ),
			"featured_image" => esc_html__( "Featured image for this xxxx", "twentytwentythree" ),
			"set_featured_image" => esc_html__( "Set featured image for this xxxx", "twentytwentythree" ),
			"remove_featured_image" => esc_html__( "Remove featured image for this xxxx", "twentytwentythree" ),
			"use_featured_image" => esc_html__( "Use as featured image for this xxxx", "twentytwentythree" ),
			"archives" => esc_html__( "xxxx archives", "twentytwentythree" ),
			"insert_into_item" => esc_html__( "Insert into xxxx", "twentytwentythree" ),
			"uploaded_to_this_item" => esc_html__( "Upload to this xxxx", "twentytwentythree" ),
			"filter_items_list" => esc_html__( "Filter xxxx list", "twentytwentythree" ),
			"items_list_navigation" => esc_html__( "xxxx list navigation", "twentytwentythree" ),
			"items_list" => esc_html__( "xxxx list", "twentytwentythree" ),
			"attributes" => esc_html__( "xxxx attributes", "twentytwentythree" ),
			"name_admin_bar" => esc_html__( "xxxx", "twentytwentythree" ),
			"item_published" => esc_html__( "xxxx published", "twentytwentythree" ),
			"item_published_privately" => esc_html__( "xxxx published privately.", "twentytwentythree" ),
			"item_reverted_to_draft" => esc_html__( "xxxx reverted to draft.", "twentytwentythree" ),
			"item_scheduled" => esc_html__( "xxxx scheduled", "twentytwentythree" ),
			"item_updated" => esc_html__( "xxxx updated.", "twentytwentythree" ),
			"parent_item_colon" => esc_html__( "Parent xxxx:", "twentytwentythree" ),
		];
	
		$args = [
			"label" => esc_html__( "Kunden", "twentytwentythree" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"rest_namespace" => "wp/v2",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => true,
			"can_export" => false,
			"rewrite" => [ "slug" => "kunde", "with_front" => true ],
			"query_var" => true,
			"supports" => [ "title", "editor", "thumbnail", "custom-fields", "page-attributes" ],
			"show_in_graphql" => false,
		];
	
		register_post_type( "kunde", $args );
	}

}
