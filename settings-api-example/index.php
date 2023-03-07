<?php
/**
 * Plugin Name: Settings API Example
 * Plugin URI: https://brianabbott.com
 * Author: Brian Abbott
 * Description: A complete and practical example of the WordPress Settings API
 */

add_action( 'admin_menu', 'pdev_create_menu' );

function pdev_create_menu() {
    // create custom top-level menu
    add_menu_page( 'PDEV Settings Page', 'PDEV Settings', 'manage_options', 'pdev_options', 'pdev_settings_page', 'dashicons-smiley', 99);
    // create submenu items
    add_submenu_page( 'pdev_options', 'About the PDEV Plugin', 'About', 'manage_options', 'pdev-about', 'pdev_about_page' );
    add_submenu_page( 'pdev_options', 'Help with the PDEV Plugin', 'Help', 'manage_options', 'pdev-help', 'pdev_help_page' );
    add_submenu_page( 'pdev_options', 'Uninstall the PDEV Plugin', 'Uninstall', 'manage_options', 'pdev-uninstall', 'pdev_uninstall_page' );
}

function pdev_create_submenu() {
    add_options_page( 'PDEV Plugin Settings', 'PDEV Settings', 'manage_options', 'pdev_plugin', 'pdev_plugin_option_page' );
}

add_action( 'admin_menu', 'pdev_create_submenu' );

add_option( 'pdev_plugin_color', 'red' );

$options = array(
    'color' => 'red',
    'fontsize' => '120%',
    'border' => '2px solid red'
);

update_option( 'pdev_plugin_options', $options );