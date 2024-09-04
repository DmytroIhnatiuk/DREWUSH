<?php

require_once 'doctors.php';
require_once 'clinics.php';
require_once 'treatment.php';
add_filter( 'pll_get_post_types', 'add_cpt_to_pll', 10, 2 );
function add_cpt_to_pll( $post_types, $is_settings ) {
    if ( $is_settings ) {
        // unset( $post_types['teachers'] );
    } else {
        $post_types['clinics'] = 'clinics';

    }
    return $post_types;
}
function remove_forms_link( $post_link, $post ) {
    if ( 'forms' === $post->post_type && 'publish' === $post->post_status ) {
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    }
    return $post_link;
}
//function custom_post_type_args( $args, $post_type ) {
//
//    if ( $post_type == 'forms' ) {
//        $args['publicly_queryable'] = false;
//    }
//
//    return $args;
//}
//add_filter( 'register_post_type_args', 'custom_post_type_args', 20, 2 );

?>


