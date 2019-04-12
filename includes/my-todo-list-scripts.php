<?php

// Add Scripts
if(is_admin()){

    function mtl_add_admin_scripts(){
        wp_enqueue_style('mtl-admin-style', plugins_url() . '/my-todo-list/css/style-admin.css');
    }
    add_action('admin_init', 'mtl_add_admin_scripts');
}

// add scripts
function mtl_add_scripts(){
    wp_enqueue_style('mtl-main-style', plugins_url() . '/my-todo-list/css/style.css');
    wp_enqueue_script('mtl-main-script', plugins_url() . '/my-todo-list/js/main.js');
}

add_action('wp_enqueue_scripts', 'mtl_add_scripts');
