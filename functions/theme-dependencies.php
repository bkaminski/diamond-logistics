<?php 
//LOAD SCRIPTS
function enqueue_dmi_scripts() {
    //wp_enqueue_script('Bootstrap-5.0', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    //wp_enqueue_script('font-awesome-5', 'https://kit.fontawesome.com/42219cbebc.js', false, null, null, false);
    wp_enqueue_script('dmi-scripts', get_template_directory_uri() . '/assets/js/webflow.js' , array(), false, true );
}
add_action('wp_enqueue_scripts', 'enqueue_dmi_scripts');

//LOAD CSS
function enqueue_dmi_styles() {
    //wp_enqueue_style('bootstrap-5.0', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('webflow', get_template_directory_uri() . '/assets/styles/webflow.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/styles/normalize.css');
    wp_enqueue_style('dmi-styles', get_template_directory_uri() . '/assets/styles/diamond-state-logistics.webflow.css');
   
}
add_action('wp_enqueue_scripts', 'enqueue_dmi_styles');



