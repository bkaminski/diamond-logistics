<?php 
// INIT DEPENDENCIES
require_once(get_template_directory(). '/functions/theme-dependencies.php');

// INIT THEME HELPERS
require_once(get_template_directory(). '/functions/theme-helpers.php');

// INIT BOOTSTRAP NAV WALKER
//require_once(get_template_directory(). '/functions/class-wp-bootstrap-navwalker.php');

// INIT ADVANCED CUSTOM FIELDS PRO
//require_once(get_template_directory(). '/functions/acf-pro.php');


function rollback_jquery() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery-3.5.1','https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60ca248e577cfad837d1b229');
}
add_action('wp_enqueue_scripts','rollback_jquery',100);