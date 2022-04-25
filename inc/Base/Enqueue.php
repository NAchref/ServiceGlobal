<?php
/**
 * @package ServiceGlobal
 */

namespace Inc\Base; 

class Enqueue
{
  public function register(){
    add_action('admin_enqueue_scripts', array($this,'enqueue'));
  }

  function enqueue(){
    //enque all our scripts
    wp_enqueue_style('mypluginstyle', PLUGIN_URL .'./assets/style.css' , array(''), false , 'all');
    wp_enqueue_script('mypluginscript', PLUGIN_URL . './assets/myscript.js' , array(''), false , 'all');
  }

}