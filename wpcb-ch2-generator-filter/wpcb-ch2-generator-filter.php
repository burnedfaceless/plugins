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

/**
 * Notes - this uses preg_replace and checks the type. It seems like if you are going to check the type, you should
 * just return a xhtml or html tag. If you use pregreplace, there shouldn't be a need to check for html or xhtml.
 */

function ch2gf_generator_filter( $html, $type ) {
  if ( $type == 'xhtml' ) {
    $html = preg_replace('("WordPress.*?")', '"Brian"', $html );
  }
  return $html;
}

add_filter( 'the_generator', 'ch2gf_generator_filter', 10, 2 );