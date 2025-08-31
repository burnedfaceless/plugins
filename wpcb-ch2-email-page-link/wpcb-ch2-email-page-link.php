<?php

/**
 * Plugin Name: Chapter 2 - Email Link Filter
 * Plugin URI: https://news.google.com
 * Description: Illustrates how to use a filter to modify the generated generator meta tag.
 * Version 1.0.0
 * Author: Brian Abbott
 * Author URI: https://brianabbott.com
 * License: GPLv2
 */

function wpcb_ch2_email_page_link_filter( $the_content ) {
  // build url to mail message icon
  $mail_icon_url = plugins_url( 'mailicon.png', __FILE__ );

  // set value of new_content to the_content
  $new_content = $the_content;

  // Append image with mailto link after content
  // including the item title and permament URL

  $new_content .= '<div class="email_link">';
  $new_content .= '<a title="Email article link" ';
  $new_content .= 'href="mailto: '
}