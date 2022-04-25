<?php
/**
 * 
 * @package ServiceGlobal
 * 
 * Plugin Name: Global Courtier Services
 * A specfic wordpress plugin created for personal site Global Courtier
 * by awebi-it to manage services create, update and delete ...
 * Version: 1.0
 * Author: Nachref
 * Author URI: https://globalcourtier.awebi-lab.com
 */



defined('ABSPATH') or die('Hey, you cant access here! ');

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
  require_once dirname(__FILE__).'/vendor/autoload.php';
}


define('PLUGIN_PATH',plugin_dir_path( __FILE__ ));
define('PLUGIN_URL',plugin_dir_url(__FILE__));

if ( class_exists('Inc\\Init')){

  Inc\Init::register_services();
}