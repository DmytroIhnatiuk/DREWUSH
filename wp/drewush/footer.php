<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drewush
 */

?>

<footer class="footer bg-[#1A1A1A] pt-40 pb-26 relative lg:pt-[.7rem] lg:pb-36">
    <svg
            class="w-full h-[.70rem] sm:h-[1.4rem] lg:h-[2.33rem] lg:-bottom-20 absolute lg:right-[var(--container-gap)] lg:left-[[var(--container-gap)] right-0 bottom-0 left-0 top-auto z-0"
    >
        <use href="#logo-bg"></use>
    </svg>
    <div
            class="relative container flex flex-col justify-center lg:justify-normal z-10 lg:grid lg:grid-cols-[1fr_3.3rem_2.82rem] lg:gap-[.7rem]"
    >
        <a
                href="index.html"
                class="h-32 w-[1.64rem] sm:h-[.58rem] sm:w-[3.08rem] relative mx-auto lg:mx-0 mb-40"
        >
            <svg class="icon">
                <use href="#logo"></use>
            </svg>
        </a>
        <?php wp_nav_menu([
            'theme_location' => 'menu-2',
            'container' => false,
            'menu_class' => 'flex flex-col justify-center items-center mb-40 text-l lg:text-m font-medium lg:grid lg:grid-cols-2 lg:gap-32 h-max lg:w-[3.3rem] lg:mt-[.3rem] lg:ml-auto',

        ]); ?>
        <div
                class="flex flex-col items-center justify-center lg:justify-normal lg:items-start lg:grid lg:grid-cols-[1fr_.55rem] lg:mt-[.3rem]"
        >
            <p
                    class="font-medium text-center mb-32 w-3/4 lg:text-left col-start-1 col-end-3 lg:w-full"
            >
                Для швидкого зв’язку по всім питанням пишіть у зручний для вас месенджер
            </p>

            <div class="flex text-[.4rem] w-max mb-24 col-start-1 col-end-3 lg:mb-50">

                <?php if (get_field('telegram', 'option')): ?>
                    <a
                            class="mr-32 bg-red rounded size-40 lg:hover:bg-dark-grey transition-link__bg last:m-0"
                            href="<?= get_field('telegram', 'option') ?>"
                    ><span class="icon-telegram"></span
                        ></a>
                <?php endif; ?>

                <?php if (get_field('viber', 'option')): ?>

                    <a
                            class="mr-32 bg-red rounded size-40 lg:hover:bg-dark-grey transition-link__bg last:m-0"
                            href="<?= get_field('viber', 'option') ?>"
                    ><span class="icon-viber"></span
                        ></a>
                <?php endif; ?>

                <?php if (get_field('whatsapp', 'option')): ?>
                    <a
                            class="mr-32 bg-red rounded size-40 lg:hover:bg-dark-grey transition-link__bg last:m-0"
                            href="<?= get_field('whatsapp', 'option') ?>"
                    ><span class="icon-whatsapp"></span
                        ></a>
                <?php endif; ?>
            </div>
            <a class="lg:hover:text-grey mb-24 lg:my-auto lg:text-s" href="#"
            >Політика конфіденційності
            </a>
            <a
                    class="size-[.55rem] border border-solid border-white scroll-to rounded lg:hover:text-red"
                    href="#top"
            >
				<span class="text-[.55rem] icon-up"></span
                ></a>
        </div>
    </div>
</footer>

</div>
<?php echo get_template_part('template-parts/svg-icons'); ?>
<div data-fullscreen class="modal hide ">

    <div class="modal__body relative w-full max-w-[8.61rem] flex items-center md:h-[3.5rem] bg-[#444444]">
        <div class="modal__content py-[.56rem] mx-24 md:px-[.64rem] w-full">

        </div>
        <button type="button"
                class="modal__close w-[.32rem] h-[.32rem] flex items-center justify-center top-16  right-16 absolute">
            <svg class="w-16 h-16 stroke-2 stroke-white">
                <use xlink:href="#close"></use>
            </svg>
        </button>
    </div>

</div>
<?php wp_footer(); ?>

</body>
</html>
