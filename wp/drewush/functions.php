<?php
/**
 * drewush functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package drewush
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function drewush_setup()
{
    load_theme_textdomain('drewush', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');


    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Header', 'drewush'),
            'menu-2' => esc_html__('Footer', 'drewush'),
        )
    );
    function custom_menu_item_classes($classes, $item, $args)
    {
        $classes = array_diff($classes, [
            'menu-item', 'menu-item-type-custom', 'menu-item-object-custom'
        ]);
        if ($args->theme_location == 'menu-1') {
            $classes[] = 'lg:mr-32';
            $classes[] = 'lg:hover:text-grey';
        } elseif ($args->theme_location == 'menu-2') {

            $classes[] = 'mb-32';
            $classes[] = 'max-w-max block';
            $classes[] = 'last:m-0';
            $classes[] = 'lg:hover:text-grey h-max lg:m-0';
        }
        return $classes;
    }

    add_filter('nav_menu_css_class', 'custom_menu_item_classes', 10, 3);

    function custom_menu_link_attributes($atts, $item, $args)
    {
        $atts['class'] = 'scroll-to';

        return $atts;
    }

    add_filter('nav_menu_link_attributes', 'custom_menu_link_attributes', 10, 3);


    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'drewush_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'drewush_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function drewush_content_width()
{
    $GLOBALS['content_width'] = apply_filters('drewush_content_width', 640);
}

add_action('after_setup_theme', 'drewush_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
require_once('inc/core/javascript.php');
require_once('inc/core/styles.php');


require_once('inc/core/core.php');
require_once('inc/project-functions/index.php');

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

