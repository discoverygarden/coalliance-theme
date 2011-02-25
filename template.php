<?php
// $Id: template.php,v 1.2.2.2 2009/04/25 06:19:22 hswong3i Exp $

/**
 * Return a themed mission trail.
 *
 * @return
 *   a string containing the mission output, or execute PHP code snippet if
 *   mission is enclosed with <?php ?>.
 */
function phptemplate_mission() {
  $mission = theme_get_setting('mission');
  if (preg_match('/^<\?php/', $mission)) {
    $mission = drupal_eval($mission);
  }
  else {
    $mission = filter_xss_admin($mission);
  }
  return isset($mission) ? $mission : '';
}

/**
 * Generates IE CSS links for LTR and RTL languages.
 */
function phptemplate_get_ie_styles() {
  global $language;

  $iecss = '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/fix-ie.css" />';
  if (defined('LANGUAGE_RTL') && $language->direction == LANGUAGE_RTL) {
    $iecss .= '<style type="text/css" media="all">@import "'. base_path() . path_to_theme() .'/fix-ie-rtl.css";</style>';
  }

  return $iecss;
}

function phptemplate_preprocess_page(&$vars) {
    global $user;
//     var_dump($vars['primary_links']); exit();
    $primary_links = array();
    
    if ($user->uid != 0) {
      // code for the account and logout button
      $primary_links['logout'] = array('attributes'=>array('class'=>'logout'), 'href'=>'logout','title'=>t('Logout'));
      $primary_links['collections'] = array('href'=>'user','title'=>t('My Collections'));
    }
    else {
      // code for the login button
      $primary_links['login'] = array('attributes'=>array('class'=>'login'),'href'=>'user','title'=>t('Login'));
    }	
    
    $vars['primary_links']=array_merge($primary_links,$vars['primary_links']);

    
}


