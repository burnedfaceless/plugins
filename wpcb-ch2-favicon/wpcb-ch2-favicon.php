<?php

/**
 * Plugin Name: Chapter 2 - Favicon
 * Plugin URI: https://news.google.com
 * Description: Adds a favicon to a WP site
 * Version 1.0.0
 * Author: Brian Abbott
 * Author URI: https://brianabbott.com
 * License: GPLv2
 */

function ch2fi_page_header_output(): void {
  $site_icon_url = get_site_icon_url();
  if ( !empty( $site_icon_url ) ) {
    wp_site_icon();
  } else {
    $icon = plugins_url( '/res/favicon.ico', __FILE__  );
    ?>

  <link rel="shortcut icon" href="<?php echo esc_url( $icon ); ?>"  />
 <?php }
}

add_action( 'wp_head', 'ch2fi_page_header_output' );