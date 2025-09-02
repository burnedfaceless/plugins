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

function ch2_new_nav_menu_items( $sorted_menu_items, $args ) {
  // check to see if user is logged in, continue if not logged in
  if ( !is_user_logged_in() ) {
    // loop through all menu items received
    // place each item's key in $key variable
    foreach ( $sorted_menu_items as $key => $sorted_menu_item  ) {
      // Check if menu item matches search string
      if ( 'Private Area' == $sorted_menu_item->title ) {
        // remove item from menu array if found
        // using item key
        unset( $sorted_menu_items[ $key ] );
      }
    }
  }
  return $sorted_menu_items;
}

add_filter( 'wp_nav_menu_objects', 'ch2_new_nav_menu_items', 10, 2 );