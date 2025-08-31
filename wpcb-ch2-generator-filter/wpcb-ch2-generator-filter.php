<?php

/**
 * Plugin Name: Chapter 2 - Generator Filter
 * Plugin URI: https://news.google.com
 * Description: Illustrates how to use a filter to modify the generated generator meta tag.
 * Version 1.0.0
 * Author: Brian Abbott
 * Author URI: https://brianabbott.com
 * License: GPLv2
 */

function ch2gf_generator_filter( $html, $type ) {
  if ( $type == 'xhtml' ) {
    $html = preg_replace('("WordPress.*?")', '"Brian"', $html );
  }
  return $html;
}

add_filter( 'the_generator', 'ch2gf_generator_filter', 10, 2 );