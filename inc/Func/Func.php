<?php
namespace Inc\Func;

/**
 * @package  titlenamechange Plugin
 */
class Func
{public function register()
    {
    add_action('wp_ajax_my_action', array($this, 'my_action'));
}
    public function my_action()
    {global $wpdb;
        $numbercheck = intval($_POST['numbercheck']);
        if ($numbercheck == 1) {
            $args = array(
                'post_type' => 'post');
            $result = new \WP_Query($args);
            $counter = false;
            $this->verifyTitle($result);
        }
    }
    public function verifyTitle($result)
    {
        if ($result->have_posts()) {
            while ($result->have_posts()) {
                $result->the_post();
                $title = get_the_title();
                $content = get_the_content();
                if (strpos(' ' . $content . ' ', $title)) {
                    $counter = true;
                    $post_id = get_the_ID();
                    $replace = str_replace($title, "title_name", $content);
                    $my_post = [
                        'ID' => $post_id,
                        'post_content' => $replace,
                    ];
                    wp_update_post($my_post);
                }
            }}
        if ($counter === true) {
            echo true;
        } else {
            echo false;
        }
        wp_reset_postdata();
    }
}
