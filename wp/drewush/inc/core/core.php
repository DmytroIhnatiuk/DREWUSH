<?php
require_once('helpers.php');
require_once('image_sizes.php');
require_once('favicon.php');
function custom_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Загальні налаштування',
            'menu_title' => 'Загальні налаштування',
            'menu_slug' => 'custom-options',
            'capability' => 'manage_options',
            'position' => 60,
            'icon_url' => 'dashicons-admin-generic',
        ));
    }

}
add_action('acf/init', 'custom_options_page');








