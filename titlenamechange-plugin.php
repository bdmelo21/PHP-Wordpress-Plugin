<?php
/**
 * @package titleNameChange
 */
/*
Plugin Name: titleName Change
Plugin URI:https://github.com/bdmelo21
Description: Title -> [title_name] Plugin
Version: 1.0.0
Author: Bernardo de Melo
Author URI: http://github.com/bmdelo21
License: GPLv2 or later
Text Domain: bernardo-plugin
 */
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_bernardo_plugin()
{
    Activate::activate();
}

function deactivate_bernardo_plugin()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_bernardo_plugin');
register_deactivation_hook(__FILE__, 'deactivate_bernardo_plugin');
if (class_exists('Inc\\Init')) {

    Inc\Init::register_services();
}
