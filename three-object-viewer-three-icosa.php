<?php
                

/**
* Plugin Name: three-object-viewer-three-icosa
* Plugin URI: https://3ov.xyz
* Description: A companion plugin for the Three Object Viewer Plugin to enable three-icosa Openbrush support
* Version: 0.0.1
* Requires at least: 6.0
* Requires PHP:      7.1.0
* Author:            antpb
* Author URI:        https://3ov.xyz
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       three-object-viewer-three-icosa
* Domain Path:       /languages
*/

/**
* Include the autoloader
*/
add_action( 'plugins_loaded', function () {
    if ( file_exists(__DIR__ . '/vendor/autoload.php' ) ) {
        include __DIR__ . '/vendor/autoload.php';
    }
}, 1 );

include_once dirname( __FILE__ ). '/inc/functions.php';
include_once dirname( __FILE__ ). '/inc/hooks.php';