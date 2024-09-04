<?php
//Не переносити в інші проекти

function getClinicsPageId()
{
    $current_language = pll_current_language();
    $found_element = null;
    foreach (get_field('clinic-pages-repeater', 'option') as $item) {
        if (strcasecmp($item["lang"], $current_language) === 0) {
            $found_element = $item;
            break;
        }
    }
    return $found_element ? $found_element['page-id'] : null;
}

function getServicesPageId()
{
    $current_language = pll_current_language();
    $found_element = null;
    foreach (get_field('services-pages-repeater', 'option') as $item) {
        if (strcasecmp($item["lang"], $current_language) === 0) {
            $found_element = $item;
            break;
        }
    }
    return $found_element ? $found_element['page-id'] : null;
}

function getPageId($acf_field)
{
    $current_language = pll_current_language();
    $found_element = null;
    foreach (get_field($acf_field, 'option') as $item) {
        if ($item['lang']->slug === $current_language) {
            $found_element = $item;
            break;
        }
    }
    return $found_element ? $found_element['page-id'][0] : null;
}

function getPlaceholder()
{
    return 9574;
}

function getImageByThumb($id = false)
{
    $thumb = $id ? get_post_thumbnail_id($id) : get_post_thumbnail_id();
    return $thumb ? $thumb : getPlaceholder();
}

function remove_posts_table_columns( $columns ) {
    unset($columns['author']);
    unset($columns['categories']);
    return $columns;
}
add_filter('manage_posts_columns' , 'remove_posts_table_columns');