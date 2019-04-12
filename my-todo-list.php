<?php 
/*
Plugin Name: My Todo List
Description: Simple Todo List Plugin using custom post types and custom fields
Version: 1.0
Author: Adam Champagne
Auther URI: https://adamchampagne.com/
*/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
    exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/my-todo-list-scripts.php');
 
// Load Custom Post Types
require_once(plugin_dir_path(__FILE__) . '/includes/my-todo-list-cpt.php');

// Load Custum Fields
require_once(plugin_dir_path(__FILE__) . '/includes/my-todo-list-fields.php');

// Load Shortcodes
require_once(plugin_dir_path(__FILE__) . '/includes/my-todo-list-shortcodes.php');

