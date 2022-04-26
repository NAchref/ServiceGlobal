<?php
/**
 * @package ServiceGlobal
 */

namespace Inc\Pages ;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

 class Admin extends BaseController
 {
  
  public $settings;
  public $pages = array();
  public $subpages = array();

  public function __construct()
   {
     $this->settings = new SettingsApi();
   }
   public function register(){

    $pages = [
      [
      'page_title' =>'Services Global',
      'menu_title' => 'Service',
      'capability' => 'manage_options',
      'menu_slug' => 'Service_global',
      'callback' => function(){
        echo '<h1>Service Global Courtier</h1>';
      },
      'icon_url' => 'dashicons-store',
      'position' => 110
      ]

    ];

    $subpages = [
      [
      'parent_slug' =>'Service_global',  
      'page_title' =>'Custom Post Types',
      'menu_title' => 'CPT',
      'capability' => 'manage_options',
      'menu_slug' => 'service_cpt',
      'callback' => function(){
        echo '<h1>CPT Manager</h1>';
      },
    ],
    [
      'parent_slug' =>'Service_global',  
      'page_title' =>'Taxonomies',
      'menu_title' => 'Taxonomies',
      'capability' => 'manage_options',
      'menu_slug' => 'service_taxonomi',
      'callback' => function(){
        echo '<h1>Taxonomies Manager</h1>';
      },
      ]


    ];
    //add_action('admin_menu', array($this,'add_admin_pages'));
    $this->settings->addPages($pages)->withSubPage('Dashbored')->addSubPages($subpages)->register();

   }

 /*   public function add_admin_pages(){
    add_menu_page('Services Global','Service','manage_options','service_global',array($this,'admin_index'),'dashicons-store',110);
  }

  public function admin_index(){
    //require template
    require_once PLUGIN_PATH .'./templates/admin.php';
  } */


 }