<?php
/**
 * Trigger this file on Plugin uninstall
 * @package titlenameChange Plugin
 */

global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELEECT if FROM wp_posts)");
