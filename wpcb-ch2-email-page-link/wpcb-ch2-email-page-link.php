<?php

/**
 * Plugin Name: Chapter 2 - Email Link Filter
 * Plugin URI: https://news.google.com
 * Description: Illustrates how to use a filter to add an email icon to every post.
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

  $new_content .= '
    <div class="email_link">
        <a href="mailto:?subject=Check out this interesting article entitled ' .get_the_title() . '&amp;body=Check out this interesting article entitled ' .get_the_title() . '.">
          <img alt="Email icon" src="' . esc_url( $mail_icon_url  ) . '"/>
        </a>
    </div>
  ';

  return $new_content;
}

add_filter( 'the_content', 'wpcb_ch2_email_page_link_filter' );