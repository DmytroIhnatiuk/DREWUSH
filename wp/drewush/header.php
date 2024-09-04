<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drewush
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class("font-body text-m bg-black text-white "); ?>>
<?php wp_body_open(); ?>
<div class="page-container flex flex-col">
    <header class="header h-[var(--header-height)] pt-36 sm:pt-40">
        <div class="container flex justify-between items-center">
            <a
                    href="index.html"
                    class="h-24 w-[1.27rem] sm:h-40 sm:w-[2.07rem] relative -z-10"
            >
                <svg class="icon">
                    <use href="#logo"></use>
                </svg>
            </a>
            <div class="flex lg:hidden">
                <?php if (get_field('phone', 'option')): ?>
                    <a
                            class="rounded size-32 border-[1px] border-solid border-white flex items-center mr-8"
                            href="tel:<?= get_field('phone', 'option'); ?>"
                    >
                        <span class="icon-phone text-[.32rem]"></span>
                    </a>
                <?php endif; ?>

                <div
                        class="burger rounded size-32 border-[1px] border-solid border-white flex items-center p-8 relative"
                >
                    <span class="block w-12 h-[1px] rounded-[1px] bg-white"></span>
                </div>
            </div>
            <div class="menu absolute lg:relative lg:flex lg:items-center">
                <?php wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'container' => 'nav',
                    'container_class' => 'mb-100 mt-[1.4rem] lg:my-0',
                    'menu_class' => 'lg:flex z-10 relative',

                ]); ?>
                <?php if (get_field('phone', 'option')): ?>
                    <a
                            class="hidden lg:block mr-32 lg:hover:text-grey"
                            href="tel:<?= get_field('phone', 'option') ?>"
                    ><?= get_field('phone', 'option') ?></a
                    >
                <?php endif; ?>
                <div
                        class="flex lg:text-black text-[.4rem] lg:text-[.24rem] z-10 relative"
                >
                    <?php if (get_field('telegram', 'option')): ?>
                        <a
                                class="mr-32 lg:mr-12 bg-red rounded size-40 lg:size-24 lg:hover:bg-white transition-link__bg"
                                href="<?= get_field('telegram', 'option') ?>"
                        ><span class="icon-telegram"></span
                            ></a>
                    <?php endif; ?>
                    
                    <?php if (get_field('viber', 'option')): ?>

                        <a
                                class="mr-32 lg:mr-12 bg-red rounded size-40 lg:size-24 lg:hover:bg-white transition-link__bg"
                                href="<?= get_field('viber', 'option') ?>"
                        ><span class="icon-viber"></span
                            ></a>
                    <?php endif; ?>

                    <?php if (get_field('whatsapp', 'option')): ?>
                        <a
                                class="bg-red rounded size-40 lg:size-24 lg:hover:bg-white transition-link__bg"
                                href="<?= get_field('whatsapp', 'option') ?>"
                        ><span class="icon-whatsapp"></span
                            ></a>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </header>