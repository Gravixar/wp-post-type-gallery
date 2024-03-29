<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.fahdmurtaza.com/
 * @since             1.0.0
 * @package           Post_Type_Gallery
 *
 * @wordpress-plugin
 * Plugin Name:       Post  Type Gallery
 * Plugin URI:        https://www.fahdmurtaza.com/post-type-gallery
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Fahad Murtaza
 * Author URI:        https://www.fahdmurtaza.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       post-type-gallery
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'POST_TYPE_GALLERY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-post-type-gallery-activator.php
 */
function activate_post_type_gallery() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-post-type-gallery-activator.php';
	Post_Type_Gallery_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-post-type-gallery-deactivator.php
 */
function deactivate_post_type_gallery() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-post-type-gallery-deactivator.php';
	Post_Type_Gallery_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_post_type_gallery' );
register_deactivation_hook( __FILE__, 'deactivate_post_type_gallery' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-post-type-gallery.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_post_type_gallery() {

	$plugin = new Post_Type_Gallery();
	$plugin->run();

}
run_post_type_gallery();
