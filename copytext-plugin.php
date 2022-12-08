<?php
/**
 * Plugin Name :  Copy Text Plugin
 * Description : Copy text in the website
 * Author : Bili Plugins
 * Text Domain: Copy-Text-Plugin
 * Domain Path: /languages
 * Version: 1.0.0
 * 
 * @package Copy_Text_Plugin
 */

 /**
 * Main file, contains the plugin metadata and activation processes
 *
 * @package    Copy_Text_Plugin
 * @subpackage Main
 */
if ( ! defined( ' CopyText_VERSION' ) ) {
	/**
	 * The version of the plugin.
	 */
	define( 'CopyText_VERSION', '1.0.0' );
}
if ( ! defined( 'CopyText_PATH' ) ) {
	/**
	 *  The server file system path to the plugin directory.
	 */
	define( 'CopyText_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'CopyText_URL' ) ) {
	/**
	 * The url to the plugin directory.
	 */
	define( 'CopyText_URL', plugin_dir_url( __FILE__ ) );
}
if ( ! defined( 'CopyText_NAME' ) ) {
	/**
	 * The url to the plugin directory.
	 */
	define( 'CopyText_NAME', plugin_basename( __FILE__ ) );
}
