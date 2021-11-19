<?php
/** 
* Plugin Name: Optionen menu Plugin
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Azmi Ghis
* Author URI: http://yourwebsiteurl.com/
**/

function azmi_admin_menu(){
    add_menu_page('Optionen', 'Optionen', 'manage_options', 'azmi_admin_menu', 'azmi_admin_menu_main','dashicons-screenoptions',4);
     }
           
add_action('admin_menu','azmi_admin_menu');
// REGISTER CUSTOM POST TYPES
// You can register more, just duplicate the register_post_type code inside of the function and change the values. You are set!

  function create_post_type() {
    
    // You'll want to replace the values below with your own.
    register_post_type( 'movie', // change the name
      array(
        'labels' => array(
          'name' => __( 'Movies' ), // change the name
          'singular_name' => __( 'Movie' ), // change the name
        ),
        'public' => true,
        'supports' => array ( 'title', 'editor', 'custom-fields', 'page-attributes', 'thumbnail' ), // do you need all of these options?
        'taxonomies' => array( 'category', 'post_tag' ), // do you need categories and tags?
        'hierarchical' => true,
        'menu_icon' => get_bloginfo( 'template_directory' ) . "/images/icon.png",
        'rewrite' => array ( 'slug' => __( 'movies' ) ) // change the name
      )
    );
  }/*
  add_action( 'init', 'create_post_type' );
  function Custom_fields(){
    add_meta_box('cars_cf',
  'Cars details',
  'CF',
  'Movies',
  'low'
  
  );
  }
  function CF ()
  {
  echo 'Hello world';
  
  
  
  }  

  add_action( 'init', 'Custom_fields' );  */
function azmi_admin_menu_main()
      {
         //Here add your html or php content
        echo "Welcome To Admin Menu"; 
      }
      function my_plugin_create_db() {

        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        $table_name = $wpdb->prefix . 'ecommerce_mitarbeiter';
      
        $sql = "CREATE TABLE $table_name (
          id mediumint(9) NOT NULL AUTO_INCREMENT,
          time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
          name text,
              vorname text,
              telephon text,
              mail text,
              text text,
              link text, 
              bildurl text, 
          UNIQUE KEY id (id)
        ) $charset_collate;";
      
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
      }
      register_activation_hook( __FILE__, 'my_plugin_create_db' );
     
?>