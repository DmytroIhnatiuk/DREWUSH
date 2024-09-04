<?php

add_action( 'init', 'init_clinics_post_type' ); // Использовать функцию только внутри хука init

function init_clinics_post_type() {



    register_taxonomy('clinic_category', array('clinics'), array(
        'label'                 => 'Категория',
        'labels'                => array(
            'name'              => 'Категории',
            'singular_name'     => 'Категория',
            'search_items'      => 'Поиск категорий',
            'all_items'         => 'Все категории',
            'parent_item'       => 'Родительская категория',
            'parent_item_colon' => 'Родительская категория:',
            'edit_item'         => 'Изменить категорию',
            'update_item'       => 'Обновить категорию',
            'add_new_item'      => 'Добавить категорию',
            'new_item_name'     => 'Новая категория',
            'menu_name'         => 'Категории',
        ),
        'description'           => 'Категории для клиник',
        'public'                => true,
        'show_in_nav_menus'     => true,
        'show_ui'               => true,
        'show_tagcloud'         => true,
        'hierarchical'          => true,
        'show_admin_column'     => true,

    ) );


    $labels = array(
        'name' => 'Клиники',
        'singular_name' => 'Клиника', // админ панель Добавить->Функцию
        'add_new' => 'Добавить клинику',
        'add_new_item' => 'Добавить новую клинику', // заголовок тега <title>
        'edit_item' => 'Редактировать клинику',
        'new_item' => 'Новая клиника',
        'all_items' => 'Все клиники',
        // 'view_item' => 'Просмотр продукта на сайте',
        'search_items' => 'Искать клинику',
        'not_found' =>  'Клиник не найдено.',
        'not_found_in_trash' => 'В корзине нет клиник.',
        'menu_name' => 'Клиники' // ссылка в меню в админке
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
//        'exclude_from_search' => false,
        //'rewrite' => array('slug' => 'health/%health%'),
//        'rewrite' => array('slug' => 'medicinskie-centry'),
//        'rewrite' => array('slug' => 'clinics'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-admin-multisite', // иконка корзины
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title',  'author', 'thumbnail', 'revisions', )
    );
    register_post_type('clinics', $args);
}
function custom_paginate_links($link) {
    // Замените 'medicinskie-centry' на ваш желаемый слаг
    return str_replace('medicinskie-centry', 'clinics', $link);
}

add_filter('paginate_links', 'custom_paginate_links');

//add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies()
{
    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Tags' ),
        'popular_items' => __( 'Popular Tags' ),
        'all_items' => __( 'All Tags' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Tag' ),
        'update_item' => __( 'Update Tag' ),
        'add_new_item' => __( 'Add New Tag' ),
        'new_item_name' => __( 'New Tag Name' ),
        'separate_items_with_commas' => __( 'Separate tags with commas' ),
        'add_or_remove_items' => __( 'Add or remove tags' ),
        'choose_from_most_used' => __( 'Choose from the most used tags' ),
        'menu_name' => __( 'Tags' ),
    );

    register_taxonomy('tags','clinics',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tags' ),
    ));
}
function add_acf_to_doctors_post( $post_id ) {

    if ( wp_is_post_revision( $post_id ) ) {
        return;
    }

    if ( get_post_type( $post_id ) == 'clinics' ) {

        $doctors = get_field( 'clinic-doctors', $post_id );

        if ( $doctors ) {

            foreach ( $doctors as $doctor_id ) {

                update_field( 'clinic_id', $post_id, $doctor_id );
            }
        }
    }
}

add_action( 'acf/save_post', 'add_acf_to_doctors_post', 20 );
function update_doctors_with_clinic_id() {
    // Запросить все клиники
    $clinics_query = new WP_Query( [
        'post_type'      => 'clinics',
        'posts_per_page' => -1
    ] );

    if ( $clinics_query->have_posts() ) {
        while ( $clinics_query->have_posts() ) {
            $clinics_query->the_post();
            $clinic_id = get_the_ID();

            // Получить выбранных докторов
            $doctors = get_field('clinic-doctors', $clinic_id);

            if ($doctors) {
                foreach ( $doctors as $doctor_id ) {

                    // Обновить поле clinic_id для доктора
                    update_field('clinic_id', $clinic_id, $doctor_id);
                }
            }
        }

        wp_reset_postdata();
    }
}

// update_doctors_with_clinic_id();

















