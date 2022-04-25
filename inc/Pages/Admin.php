<?php
/**
 * @package ServiceGlobal
 */

namespace Inc\Pages ;


/**
 * 
 */

 class Admin
 {
   public function register(){
    add_action('admin_menu', array($this,'add_admin_pages'));
   }

   public function add_admin_pages(){
    add_menu_page('Services Global','Service','manage_options','service_global',array($this,'admin_index'),'dashicons-store',110);
  }

  public function admin_index(){
    //require template
    require_once PLUGIN_PATH .'./templates/admin.php';
  }


 }