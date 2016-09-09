<?php
/**
 * Main file
 *
 * Entry point for the restrictr plugin.
 *
 * @package WordPress
 * @subpackage restrictr
 * @since 0.0.0
 */

/*
Plugin Name: Restrictr
Description: Restrict and hide pages under custom conditions
Version:     0.0.1
Author:      Johannes Maas
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Plugin's directory path.
 *
 * @since 0.0.0
 * @var string RTR_PLUGIN_DIRECTORY Path to the plugin's base directory.
 */
define( 'RTR_PLUGIN_DIRECTORY', plugin_dir_path( __FILE__ ) );

/**
 * Provides the metabox on pages.
 */
include( RTR_PLUGIN_DIRECTORY . 'metabox.php' );

/**
 * Provides settings to user.
 */
include( RTR_PLUGIN_DIRECTORY . 'settings.php' );

/**
 * Provides redirection functionality.
 */
include( RTR_PLUGIN_DIRECTORY . 'redirection.php' );