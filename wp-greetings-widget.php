<?php
/**
 * Plugin Name: WP Greetings Widget
 * Plugin URI: https://wordpress.org/plugins/wp-greetings-widget
 * Description: WP Greetings Widget is a simple, easy to install plugin that creates a sidebar widget which displays greetings messages to viewers based on the time of day
 * Version: 1.0
 * Author: Chris Hill, Vimal Ghorecha
 * Author URI: http://www.discovery.uk.com/personal-trainer-courses, http://www.eryushion.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

define('GRTNGS_DIR',substr(plugin_dir_path(__FILE__),0,-1));
define('GRTNGS_URL',plugin_dir_url(__FILE__));

require_once(GRTNGS_DIR.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'scripts.php');
require_once(GRTNGS_DIR.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'widgets'.DIRECTORY_SEPARATOR.'grtngs_widget_class.php');
//require_once(GRTNGS_DIR.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'shortcodes.php');

function GRTNGS_activation()
{
	register_widget( 'grtngs_widget' );	
}

function GRTNGS_deactivation()
{
	unregister_widget( 'grtngs_widget' );	
}

register_activation_hook( __FILE__, 'GRTNGS_activation' );
register_deactivation_hook( __FILE__, 'GRTNGS_deactivation' );
?>
?>