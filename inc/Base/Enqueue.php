<?php
/**
 * @package  titlenamechange Plugin
 */
namespace Inc\Base;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {
        wp_enqueue_script('mypluginscript', plugins_url('../../assets/button_script.js', __FILE__), array('jquery'));
        wp_localize_script('mypluginscript', 'ajax_object',
            array('ajax_url' => admin_url('admin-ajax.php'), 'we_value' => 1));
    }
}
