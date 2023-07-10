<?php
/*
 * Plugin Name: Add table price
 * Plugin URI:  
 * Description: Опис плагiна
 * Version: 1.1.1
 * Author: 
 * Author URI:
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: truemisha
 * Domain Path: /languages
 *
 * Network: true
 */

global $jal_db_version;
$jal_db_version = "1.0";

function jal_install () {
   global $wpdb;
   global $jal_db_version;

   $table_name = $wpdb->prefix . "price_custom";
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  sku bigint(11) DEFAULT '0' NOT NULL,
	  price decimal(19,4) DEFAULT '0.0000' NOT NULL,
	  UNIQUE KEY id (id)
	);";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      dbDelta($sql);

      $rows_affected = $wpdb->insert( $table_name, array( 'time' => current_time('mysql'), 'name' => $welcome_name, 'text' => $welcome_text ) );
 
      add_option("jal_db_version", $jal_db_version);

   }
}

function jal_get_data() {
	global $wpdb;
	
	$table_name = $wpdb->prefix . "price_custom";
	
	$data = $wpdb->get_results( "SELECT * FROM $table_name" );
	
	return $data;
}


/**
 * at_rest_testing_endpoint
 * @return WP_REST_Response
 */
function at_rest_testing_endpoint()
{
    return new WP_REST_Response(jal_get_data());
}

/**
 * at_rest_init
 */
function at_rest_init()
{
    // route url: domain.com/wp-json/$namespace/$route
    $namespace = 'api-test/v1';
    $route     = 'testing';

    register_rest_route($namespace, $route, array(
        'methods'   => WP_REST_Server::READABLE,
        'callback'  => 'at_rest_testing_endpoint'
    ));
}

add_action('rest_api_init', 'at_rest_init');


register_activation_hook(__FILE__,'jal_install');

function delete_plugin_database_table(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'price_custom';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
    delete_option("devnote_plugin_db_version");
}



register_deactivation_hook(__FILE__, 'delete_plugin_database_table');


?>