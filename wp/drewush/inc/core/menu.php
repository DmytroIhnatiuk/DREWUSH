<?php

class GlobalMedic_Menu_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        // Переопределяем метод start_lvl
        $output .= '<div class="menuItem__content pos-a"><ul>';
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        // Переопределяем метод end_lvl
        $output .= '</ul></div>';
    }


    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        // Переопределяем метод start_el
//        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $classes[] = [];
        // Определяем класс 'menuItem' и 'pos-r'
        if ($depth === 0) {
            $classes[] = 'menuItem pos-r';
            if ($args->walker->has_children) {
                $classes[] = 'flex --dir-col';
            }
        }


        // Создаем строку классов
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));

        $output .= "<li class=\"$class_names\">";


        if ($args->walker->has_children && $depth === 0) {
            $output .= '<div class="flex"><a href="' . esc_url($item->url) . '" >' . esc_html($item->title) . '</a><button class="dropdown__btn"><span class="icon-arrow_S"></span></button></div>';
        } else {
            $output .= '<a href="' . esc_url($item->url) . '" >' . esc_html($item->title) . '</a>';
        }

    }


}