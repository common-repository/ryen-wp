<?php

/**
 * Plugin Name:       Ryen WP
 * Description:       Convert more with conversational forms
 * Version:           3.4.0
 * Author:            Ryen
 * Author URI:        https://ryen.org/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ryen
 * Domain Path:       /languages
 */

if (!defined('WPINC')) {
  die();
}

define('RYEN_VERSION', '3.4.0');

function activate_ryen()
{
  require_once plugin_dir_path(__FILE__) .
    'includes/class-ryen-activator.php';
  Ryen_Activator::activate();
}

function deactivate_ryen()
{
  require_once plugin_dir_path(__FILE__) .
    'includes/class-ryen-deactivator.php';
  Ryen_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_ryen');
register_deactivation_hook(__FILE__, 'deactivate_ryen');

require plugin_dir_path(__FILE__) . 'includes/class-ryen.php';

function run_ryen()
{
  $plugin = new Ryen();
  $plugin->run();
}
run_ryen();
