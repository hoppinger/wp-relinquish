<?php
/*
Plugin Name: WP Relinquish
Version: 0.0.1-alpha
Description: With this plugin WordPress can <em>relinquish</em> content serving to an external system, for instance a Rails application with the <a href="https://github.com/hoppinger/wp-connector">wp-connector gem</a>.
Author: Hoppinger
Author URI: http://www.hoppinger.com
Plugin URI: https://github.com/hoppinger/wp-relinquish
Text Domain: wp-relinquish
Domain Path: /languages
*/

load_textdomain( 'wp-relinquis', __DIR__ . '/languages/' . WPLANG . '.mo' );

// instantiate loader and register namespaces
$loader = new \Aura\Autoload\Loader;
$loader->register();
$loader->addPrefix( 'Hoppinger\WordPress\Relinquish', __DIR__ . '/src/' );

// instantiate this plugin
$relinquish_plugin = new \Hoppinger\WordPress\Relinquish\Plugin;

// set properties for the plugin
$relinquish_plugin->textdomain = 'wp-relinquis';