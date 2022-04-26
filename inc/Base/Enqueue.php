<?php
/**
 * @package ServiceGlobal
 */

namespace Inc\Base; 

use Inc\Base\BaseController;

class Enqueue extends BaseController
{
  public function register(){
    add_action('admin_enqueue_scripts', array($this,'enqueue'));
  }

  function enqueue(){
    //enque all our scripts
    wp_enqueue_style('mypluginstyle', $this->plugin_url .'./assets/style.css' , array(''), false , 'all');
    wp_enqueue_script('mypluginscript', $this->plugin_url . './assets/myscript.js' , array(''), false , 'all');
  }

}