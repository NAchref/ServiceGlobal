<?php
/**
 * @package ServiceGlobal
 */

namespace Inc\Base; 

class SettingsLinks
{

 public function register(){
 add_filter("plugin_action_links_". PLUGIN, array($this,'settings_link'));
}

public function settings_link($links){
 
  $settings_link = '<a href="options-general.php?">Settings</a>';
  array_push($links,$settings_link);
  return $links;
}

}