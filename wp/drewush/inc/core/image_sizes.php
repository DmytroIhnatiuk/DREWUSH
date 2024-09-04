<?php
add_action('after_setup_theme', 'globalmedic_add_image_size');
function globalmedic_add_image_size()
{
    add_image_size('review_thumb', 100, 100, false);
    add_image_size('about_prev_small', 240, 240, false);
    add_image_size('about_prev', 610, 400, false);
    add_image_size('doctor_prev', 300, 325, false);
    add_image_size('gallery_rooms', 400, 275, false);
    add_image_size('patients', 190, 285, false);
//    add_image_size('threatment_prev_small', 295, 222, false);
//    add_image_size('threatment_prev_big', 295, 464, false);
//    add_image_size('history_prev', 295, 197, false);
//    add_image_size('service_prev', 260, 190, false);
//    add_image_size('about_section_img', 609, 445, false);
//    add_image_size('clinic_page_photos', 295, 202, false);
//    add_image_size('doctor_prev', 280, 360, false);
//    add_image_size('doctor_main', 525, 540, false);
//    add_image_size('price_icon', 32, 32, false);
//    add_image_size('820_350', 820, 350, false);
//    add_image_size('500_530', 500, 530, false);
//    add_image_size('results_image', 408, 496, false);
//    add_image_size('results_thumb', 62, 112, false);
//    add_image_size('partners_thumb', 230, 110, false);
//    add_image_size('promo_project_img', 582, 671, false);
//    add_image_size('goal_project_img', 212, 212, false);
//
}

