<?php

// Add Scripts

function PREFIX_add_scripts(){
    wp_enqueue_style('PREFIX-main-style', plugins_url() . '/wordpress-plugin-boilerplate/css/style.css');
    wp_enqueue_script('PREFIX-main-script', plugins_url() . '/wordpress-plugin-boilerplate/js/main.js');
}

add_action('wp_enqueue_scripts', 'PREFIX_add_scripts');