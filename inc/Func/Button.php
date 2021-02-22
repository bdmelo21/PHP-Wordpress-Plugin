<?php
namespace Inc\Func;

/**
 *
 */
class Button
{public function register()
    {add_action('admin_bar_menu', array($this, 'add_item'), 99);
}
    public function add_item($adminBar)
    {global $pagenow;
        $args = array(
            'id' => 'my_button',
            'title' => __('Change Title to [title_name]', 'textdomain'),
            'href' => '',
            'meta' => array(
                'class' => 'my_class',
                'onclick' => 'change_title_action_js()',
            ),
        );
        $adminBar->add_node($args);
    }
}
