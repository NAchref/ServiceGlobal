<?php

/**
 * @package ServiceGlobal
 */

namespace Inc; 
 
final class Init
{

/**
 * Store all the classes inside an array
 * return array full of classes
 */
public static function get_services(){
  return[
    Pages\Admin::class,
    Base\Enqueue::class,

  ];
}  

/**
 * loop through the classes, initialize them, and call the 
 * register() metho if exists
 */
 public static function register_services()
 {
    foreach( self ::get_services() as $class){
      $service = self :: instantiate($class);
      if( method_exists($service,'register')){
        $service->register();
      }
    }
 }

/**
 * Initialize the class
 * 
 *  */ 
 private static function instantiate( $class ){
   $service = new $class();
   return $service;
 }

}

/* use Inc\Activate;
use Inc\Deactivate;
use Inc\Admin\Admin; 

class ServiceGlobal{


  public $plugin;

  function __construct(){
    $this->plugin = plugin_basename(__FILE__);
  }


  function register(){

    add_action('admin_enqueue_scripts', array($this,'enqueue'));

    add_action('admin_menu', array($this,'add_admin_pages'));


    add_filter("'plugin_action_links_$this->plugin'",array($this,'settings_link'));

  }

  public function settings_link($link){
    //add custom settings link
    $settings_link = '<a href="options-general.php?">Settings</a>';
    array_push($links,$settings_link);
    return $links;
  }

  public function add_admin_pages(){
    add_menu_page('Services Global','Service','manage_options','service_global',array($this,'admin_index'),'dashicons-store',110);
  }

  public function admin_index(){
    //require template
    require_once plugin_dir_path(__FILE__).'templates/admin.php';
  }

  function uninstall(){
    //delete CPT
    //delete the plugin data from the DB
  }

  function custom_post_type(){
    register_post_type('service',['public' => true, 'label'=>'Services']);
  }

  function activate(){
    //require_once plugin_dir_path(__FILE__).'inc/ServiceGlobal_activate.php';
    Activate::activate();

  }

  function deactivate(){
    //require_once plugin_dir_path(__FILE__).'inc/ServiceGlobal_deactivate.php';
    Deactivate::deactivate();
  }

  function enqueue(){
    //enque all our scripts
    wp_enqueue_style('mypluginstyle', plugins_url('/assets/style.css') , array(''), false , 'all');
    wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js') , array(''), false , 'all');
  }
}

if (class_exists('ServiceGlobal')){
  $serviceGlobal = new ServiceGlobal();
  $serviceGlobal->register();
}

//activation
register_activation_hook(__FILE__,array($serviceGlobal,'activate')); 

//deactivation
register_deactivation_hook(__FILE__,array($serviceGlobal,'deactivate')); 

//uninstall
register_uninstall_hook(__FILE__,array($serviceGlobal,'uninstall')); 
 */