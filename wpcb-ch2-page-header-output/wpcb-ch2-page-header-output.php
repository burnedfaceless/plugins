<?php

/**
 * Plugin Name: Chapter 2 - Page Header Output
 * Plugin URI: https://news.google.com
 * Description: Outputs Google Analytics Code to the page header
 * Version 1.0.0
 * Author: Brian Abbott
 * Author URI: https://brianabbott.com
 * License: GPLv2
 */

add_action( 'wp_head', 'ch2pho_page_header_output' );

function ch2pho_page_header_output() { ?>

  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;
          i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
          a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;
          m.parentNode.insertBefore(a,m)})(window,document,'script',
          'https://www.google-analytics.com/analytics.js','ga');


      ga( 'create', 'UA-0000000-0', 'auto' );
      ga( 'send', 'pageview' );
  </script>

<?php }

function ch2_link_filter_analytics( $the_content ) {
    $new_content = str_replace( 'href',
    'onClick="recordOutBoundLink( this ); return false;" href',
    $the_content );
    return $new_content;
}

add_filter( 'the_content', 'ch2_link_filter_analytics', );

function ch2_footer_analytics_code() { ?>
    <script type="text/javascript">
        function recordOutBound( link ) {
            ga( 'send', 'event', 'Outbound Links',
                'Click',
                link.href, {
                    'transport': 'beacon',
                    'hitCallBack': function() {
                        document.location = link.href;
                    }
                })
        }
    </script>
<?php
}

add_action( 'wp_footer', 'ch2_footer_analytics_code' );