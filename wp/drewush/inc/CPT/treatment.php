<?php
add_action('init', 'init_treatment_post_type');

function init_treatment_post_type() {
    register_post_type('treatment',
        array(
            'labels' => array(
                'name' => 'Лечение',
                'singular_name' => 'Лечение', // админ панель Добавить->Функцию
                'add_new' => 'Добавить статью',
                'add_new_item' => 'Добавить новую статью', // заголовок тега <title>
                'edit_item' => 'Редактировать статью',
                'new_item' => 'Новая статья',
                'all_items' => 'Все статьи',
                'search_items' => 'Искать статью',
                'not_found' =>  'Статей не найдено.',
                'not_found_in_trash' => 'В корзине нет статей.',
                'menu_name' => 'Лечение',
            ),

            'public' => true,
//            'show_in_rest' => true,
            'has_archive'        => false,
            'hierarchical'       => false,
//            'publicly_queryable' => true,
            'show_ui' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
//            'query_var' => true,
//            'capability_type' => 'post',
            // 'rewrite' => array('slug' => 'treatments/%treatment%'),
            'rewrite' => array('slug' => 'treatments/%treatments%'),
            // 'rewrite' => array('slug' => 'asset/%campaign%'),
//            'hierarchical' => true,
            'menu_position' => null,
            'taxonomies' => array('treatments','post_tag'),
            'supports' => array('title','author', 'custom-fields','thumbnail',),
        )
    );
    register_taxonomy( 'treatments', 'treatment', array(
            'hierarchical' => true,
            'label' => 'Рубрики (Лечение)',
            'query_var' => true,
            'rewrite' => array('slug' => 'treatment'),
        )
    );

}


function wpa_course_post_link( $post_link, $id = 0 ){
    $post = get_post($id);
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'treatments' );
        if( $terms ){
            return str_replace( '%treatments%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_course_post_link', 1, 3 );






?>