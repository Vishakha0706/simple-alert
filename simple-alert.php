<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/vishakha07/
 * @since             1.0.0
 * @package           Simple_Alert
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Alert
 * Plugin URI:        https://github.com/vishakha070/
 * Description:       This plugin provides functionality to add simple alert for pages, posts & custom post types.
 * Version:           1.0.0
 * Author:            Vishakha Gupta
 * Author URI:        https://profiles.wordpress.org/vishakha07/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simple-alert
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
if ( ! defined( 'SIMPLE_ALERT_VERSION' ) ) {
	define( 'SIMPLE_ALERT_VERSION', '1.0.0' );
}

if ( ! defined( 'SIMPLE_ALERT_PLUGIN_BASENAME' ) ) {
	define( 'SIMPLE_ALERT_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-simple-alert-activator.php
 */
function activate_simple_alert() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-alert-activator.php';
	Simple_Alert_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-simple-alert-deactivator.php
 */
function deactivate_simple_alert() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-alert-deactivator.php';
	Simple_Alert_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_simple_alert' );
register_deactivation_hook( __FILE__, 'deactivate_simple_alert' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-simple-alert.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_simple_alert() {

	$plugin = new Simple_Alert();
	$plugin->run();

}
run_simple_alert();
