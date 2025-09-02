<?php

/**
 * Plugin Name: Chapter 2 - Nav Menu Filter
 * Plugin URI: https://news.google.com
 * Description: Sort menu items / test syntax error
 * Version 1.0.0
 * Author: Brian Abbott
 * Author URI: https://brianabbott.com
 * License: GPLv2
 */

functio ch2_new_nav_menu_items( $sorted_menu_items, $args ) {
  print_r( $sorted_menu_items );
  return $sorted_menu_items;
}

add_filter( 'wp_nav_menu_objects', 'ch2_new_nav_menu_items', 10, 2 );