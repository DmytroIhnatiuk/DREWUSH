<?php
add_action( 'init', 'init_doctors_post_type' ); // Использовать функцию только внутри хука init

function init_doctors_post_type() {
    $labels = array(
        'name' => 'Доктора',
        'singular_name' => 'Доктор', // админ панель Добавить->Функцию
        'add_new' => 'Добавить доктора',
        'add_new_item' => 'Добавить нового доктора', // заголовок тега <title>
        'edit_item' => 'Редактировать доктора',
        'new_item' => 'Новый доктор',
        'all_items' => 'Все доктора',
        // 'view_item' => 'Просмотр продукта на сайте',
        'search_items' => 'Искать доктора',
        'not_found' =>  'Докторов не найдено.',
        'not_found_in_trash' => 'В корзине нет докторов.',
        'menu_name' => 'Доктора' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
//        'publicly_queryable' => true,
        //'rewrite' => array('slug' => 'health/%health%'),
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-businessman', // иконка корзины
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'revisions')
    );
    register_post_type('doctors', $args);
}







//add_filter( 'pll_get_post_types', 'add_cpt_to_pll_doctors', 10, 2 );
function add_cpt_to_pll_doctors( $post_types, $is_settings ) {
    if ( $is_settings ) {
        // unset( $post_types['teachers'] );
    } else {
        $post_types['doctors'] = 'doctors';
    }
    return $post_types;
}




?>