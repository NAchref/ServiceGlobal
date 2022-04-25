<?php
/**
 * Trigger this file plugin uninstall
 * 
 * 
 * @package ServiceGlobal
 */


if(!defined('WP_UNINSTALL_PLUGIN')){
  die;
} 

//Clear the database stored data
$services = get_posts(array('post_type' => 'service','numberposts' => -1 ));

foreach($services as $value){
  wp_delete_post($value->ID, true );
}

//Access the database via SQL
global $wpdb;
$wpdb->query("DELETE FROM wp-posts WHERE post_type = 'service'
");