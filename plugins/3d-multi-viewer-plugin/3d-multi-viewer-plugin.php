<?php
/**
 * Plugin Name: 3D Multi-Viewer Plugin
 * Description: A WordPress plugin to embed Spline and Sketchfab models with user-friendly admin options.
 * Version: 1.2
 * Author: Your Name
 */

// Define plugin path
define('MV_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Enqueue scripts and styles
function multi_viewer_enqueue_assets() {
    wp_enqueue_style('multi-viewer-style', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'multi_viewer_enqueue_assets');

// Include the shortcode and admin functionality
require_once MV_PLUGIN_PATH . 'includes/shortcode.php';
require_once MV_PLUGIN_PATH . 'includes/admin.php';