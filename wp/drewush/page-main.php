<?php /* Template Name: Home page */

get_header();
?>
<main>
    <section id="top" class="pt-[calc(var(--header-height)+.15rem)] min-h-[7.25rem] relative">
        <div class="container">
            <picture

                    class="absolute lg:-right-[2.8rem] lg:-top-[calc(var(--header-height)+.6rem)] -right-[2.6rem] top-[1.61rem] w-[6.17rem] h-[6.66rem] lg:w-[10.72rem] lg:h-[7.8rem] z-0 sm:-right-[1.5rem]">
                <source srcset="<?= get_img_link('foto-promo') ?>.webp" media="(min-width: 640px)"/>
                <img src="<?= get_img_link('foto-promo-sm') ?>.webp" alt="fire"/>
            </picture>
            <div class="img w-[1.94rem] h-[4.14rem] lg:h-[5.33rem] lg:w-[2.5rem] absolute lg:right-[1.5rem] sm:right-14 -right-[.46rem] sm:top-[1.25rem] top-[2.5rem]">
                <img src="<?= get_img_link('product') ?>.webp" alt="product"/>
            </div>

            <h1 class="font-header font-medium uppercase z-10 relative mb-26 sm:mb-36 sm:w-3/4 lg:w-[6.34rem] lg:mt-100">
                <?= get_field('title'); ?>
            </h1>
            <div class="w-[1.85rem] sm:w-[3.2rem] lg:w-auto relative z-10 lg:flex mb-36">
                <?php if (have_rows('benefits')):
                    while (have_rows('benefits')) : the_row(); ?>

                        <div class="flex mb-16 last:m-0 lg:w-[2.68rem] lg:mr-40">
                            <span class="icon-fire_light sm:min-w-40 sm:size-40 min-w-32 size-32 bg-red rounded sm:text-[.32rem] text-[.24rem] flex justify-center items-center mr-8 sm:mr-12"></span>
                            <p class="text-s font-medium sm:text-m">
                                <?= get_sub_field('item'); ?>
                            </p>
                        </div>


                    <?php endwhile;
                endif;
                ?>
            </div>
            <button data-target="modal" class="w-[2.02rem] h-[.52rem] px-4 sm:w-[2.86rem] sm:h-[.62rem]">
                <span class="relative z-10">Замовити консультацію</span>
            </button>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">
            <div class="overflow-hidden relative before:absolute before:top-0 before:right-0 before:bottom-0 before:left-0 before:bg-dark-grey px-14 py-50 before:-z-10 z-10">
                <h2 class="uppercase font-header max-w-[7rem] font-medium text-center mx-auto mb-40 lg:mb-32">
                    <span class="text__gradient mb-40">Безкоштовний розрахунок</span><br/>
                    встановлення тільки протягом 24 годин
                </h2>
                <div class="flex justify-center mb-[.6rem] sm:mb-[.47rem] relative z-10">
                    <div>
                        <div id="hours"
                             class="font-medium relative h1 border border-solid border-white min-w-[.48rem] sm:min-w-[.71rem] sm:min-h-[.74rem] min-h-50 mr-[.44rem] timer timer__description flex items-center justify-center">
                            23

                        </div>
                        <span id="hours-label" class="text-s sm:text-m">години</span>
                    </div>
                    <div>
                        <div class="font-medium relative h1 border border-solid border-white min-w-[.48rem] sm:min-w-[.71rem] sm:min-h-[.74rem] min-h-50 mr-[.44rem] timer timer__description flex items-center justify-center"
                             id="minutes">
                            59

                        </div>
                        <div id="minutes-label" class="text-s sm:text-m ">хвилини</div>
                    </div>
                    <div>
                        <div id="seconds"
                             class="font-medium relative h1 border border-solid border-white min-w-[.48rem] sm:min-w-[.71rem] sm:min-h-[.74rem] min-h-50 timer__description flex items-center justify-center">
                            59

                        </div>
                        <span id="seconds-label" class="text-s sm:text-m">секунди</span>
                    </div>

                </div>
                <button data-target="modal" class="w-full h-[.52rem] px-4 sm:w-[3.03rem] sm:h-[.62rem] mx-auto">
                    <span class="relative z-10">Замовити </span>
                </button>
                <div class="w-[4.7rem] h-[2.1rem] absolute -bottom-4 left-1/2 -translate-x-1/2 sm:w-[9.6rem] sm:h-[3.43rem] z-0">

                    <img class="w-full h-full" src="<?= get_img_link('timer_fire') ?>.webp" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <h2 class="h2">
                особливості котлів <span class="text-red">DREWUSH</span>
            </h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12 sm:gap-x-20 sm:gap-y-24 mb-24">
                <?php if (have_rows('features')):
                    while (have_rows('features')) : the_row(); ?>
                        <div class="border border-solid border-white p-12 flex">
                            <span class="text-[.32rem] min-w-40 size-40 rounded bg-red mr-8 <?= get_sub_field('icon'); ?> flex justify-center items-center"></span>
                            <div>
                                <div class="h3 font-medium mb-8">
                                    <?= get_sub_field('title'); ?>
                                </div>
                                <p class="text-grey">
                                    <?= get_sub_field('item'); ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container relative before:w-[2.78rem] before:h-[2.57rem] before:border before:border-solid before:border-white before:absolute sm:before:top-[.74rem] before:top-[.54rem] before:block lg:before:right-[5rem] before:right-[var(--container-gap)]">
            <div class="absolute sm:left-0 sm:right-auto bottom-[.75rem] sm:bottom-0 w-[4.78rem] h-[3.28rem] right-0 sm:w-[6.22rem] sm:h-[4.27rem]">
                <img class="size-full" src="<?= get_img_link('swiper-decor') ?>.webp" alt="decor"/>
            </div>
            <h2 class="h2 lg:mb-[.3rem]">
                Котли <span class="text-red">drewush</span>
            </h2>
            <div class="swiper ml_0_i lg:max-w-[8.3rem] h-[2.6rem] sm:max-w-[6.55rem] relative z-30 max-w-full overflow_visible sm-overflow_hidden"
                 data-swiper="production">
                <div class="swiper-wrapper">
                    <?php foreach (get_field('description-gallery') as $image): ?>
                        <div class="swiper-slide max-w-[2.93rem] max-h-[2.36rem] sm:max-w-[5.05rem]">
                            <?= dn_get_image_attachment($image, 'full', 'Фото', 'size-full') ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="flex items-center justify-between w-full lg:w-[8.3rem] mb-24">
                <div class="w-full flex justify-start">
                    <div class="swiper-pagination progressbar-pagination progressbar-pagination-production w-full"></div>
                </div>
                <div class="flex items-center ml-16">
                    <button class="production-prev btn-nav size-32 text-[.32rem] rotate-180">
                        <span class="icon-shevrone"> </span>
                    </button>
                    <div class="fraction-pagination mx-16 text-l font-medium min-w-max">
                        <span class="current-slide">1</span>-<span class="total-slides">6</span>
                    </div>
                    <button class="production-next btn-nav size-32 text-[.32rem] mr-10">
                        <span class="icon-shevrone"> </span>
                    </button>
                </div>
            </div>
            <div class="lg:w-[7.15rem] lg:ml-auto relative">
                <p class="sm:text-l mb-24">
                    <?= get_field('description'); ?>
                </p>
                <button data-target="modal" class="h-[.52rem] w-full px-4 sm:w-[2.86rem] sm:h-[.62rem]">
                    <span class="relative z-10">Замовити</span>
                </button>
            </div>
        </div>
    </section>
    <section id="types" class="relative">
        <div class="container">
            <h2 class="h2 text-center">оберіть свій котел</h2>
            <div class="swiper tab__naw lg:max-w-[4.22rem] sm:max-w-[3.7rem] max-w-[3.3rem]" data-swiper="tabNav">
                <div class="swiper-wrapper">
                    <div class="swiper-slide max-w-max">
                        <div class="font-header font-bold uppercase mb-32 h3 p-8 border-b-[2px] border-solid border-transparent lg:hover:border-white transition-all duration-300 ease-linear cursor-pointer w-max">
                            DREWUSH ECO
                        </div>
                    </div>
                    <div class="swiper-slide max-w-max">
                        <div class="font-header font-bold uppercase mb-32 h3 p-8 border-b-[2px] border-solid border-transparent lg:hover:border-white transition-all duration-300 ease-linear cursor-pointer w-max">
                            DREWUSH premium
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper overflow_visible" data-swiper="tabSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="relative before:w-[1.5rem] before:h-[4rem] before:bg-grey before:blur-[1rem] before:absolute before:-z-10 before:lg:left-1/2 before:-translate-x-1/2 before:sm:left-[1.5rem] before:left-1/2">
                            <!-- вогник -->
                            <div class="absolute w-[4.9rem] h-[6rem] lg:w-[6rem] lg:h-[5rem] lg:left-auto sm:-left-[1.23rem] sm:translate-x-0 sm:right-auto translate-x-1/2 lg:translate-x-1/2 right-1/2 lg:right-1/2 bg-cover bg-no-repeat bg-center tab-fire -z-10 lg:top-[1.15rem] sm:top-[.65rem] top-26"></div>
                            <!-- котел -->
                            <div class="image w-[1.84rem] sm:w-[2rem] h-[3.64rem] sm:h-[4rem] relative mx-auto sm:ml-50 lg:mx-auto mb-32 z-30">
                                <img class="size-full" src="<?= get_img_link('product_2') ?>.webp" alt="product"/>
                            </div>
                            <!-- опис -->
                            <div class="accordion-tab sm:absolute sm:bg-transparent w-full sm:top-0 sm:right-0 lg:top-50 shadow">
                                <!-- хедер акордеона працює тільки в мобільці -->
                                <div class="accordion__header z-20 px-16 py-12 bg-dark-grey flex items-center justify-between sm:hidden h-[.56rem]">
                                    Особливості<span></span>
                                </div>
                                <!-- контент -->
                                <div class="accordion__content overflow-hidden sm:w-full bg-dark-grey sm:bg-transparent max-h-0 sm:max-h-max z-20 sm:before:size-full sm:before:bg-dark-grey sm:before:block sm:before:absolute sm:before:-z-30">
                                    <div class="py-12 px-16 lg:py-50 lg:px-40 border-t border-solid border-white sm:border-transparent sm:w-[4.1rem] lg:w-full sm:ml-auto lg:flex justify-between">
                                        <ul class="lg:w-[3.6rem]">
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Потужність:
                                                16, 20, 25, 30, 40 - кВт
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Орієнтовна
                                                площа обігріву: від 160м2 до 400м2
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Масса
                                                котла: Від 204кг до 272кг, в залежності від
                                                потужності
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Жаростійка
                                                листова сталь 6мм  та водяні колосники
                                                - яка витримує до 1200 градусів
                                            </li>
                                        </ul>
                                        <ul class="lg:w-[4.1rem]">
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Тип
                                                палива - дрова, вугілля, брикети
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Безшовний
                                                теплообмінник - найслабше місце в
                                                твердопалевних котлах це шви. Безшовний
                                                теплообмінник дає гарантію що він є надійнішим ніж
                                                інші
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>ККД
                                                - 86% (В інших твердопалевних котлах від 65
                                                до 80%)
                                            </li>
                                            <li class="flex items-center mb-12 lg:mb-0">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Вихід
                                                димохода під 90 градусів
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button data-target="modal"
                                    class="lg:mx-auto w-full h-[.52rem] px-4 sm:w-[2.86rem] sm:h-[.62rem] mt-24 sm:mt-0">
                                <span class="relative z-10">Замовити</span>
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative before:w-[1.5rem] before:h-[4rem] before:bg-grey before:blur-[1rem] before:absolute before:-z-10 before:lg:left-1/2 before:-translate-x-1/2 before:sm:left-[1.5rem] before:left-1/2">
                            <!-- вогник -->
                            <div class="absolute w-[4.9rem] h-[6rem] lg:w-[6rem] lg:h-[5rem] lg:left-auto sm:-left-[1.23rem] sm:translate-x-0 sm:right-auto translate-x-1/2 lg:translate-x-1/2 right-1/2 lg:right-1/2 bg-cover bg-no-repeat bg-center tab-fire -z-10 lg:top-[1.15rem] sm:top-[.65rem] top-26"></div>
                            <!-- котел -->
                            <div class="image w-[1.84rem] sm:w-[2rem] h-[3.64rem] sm:h-[4rem] relative mx-auto sm:ml-50 lg:mx-auto mb-32 z-30">
                                <img class="size-full" src="<?= get_img_link('webp_1') ?>.webp" alt="product"/>
                            </div>
                            <!-- опис -->
                            <div class="accordion-tab sm:absolute sm:bg-transparent w-full sm:top-0 sm:right-0 lg:top-50 shadow">
                                <!-- хедер акордеона працює тільки в мобільці -->
                                <div class="accordion__header z-20 px-16 py-12 bg-dark-grey flex items-center justify-between sm:hidden h-[.56rem]">
                                    Особливості<span></span>
                                </div>
                                <!-- контент -->
                                <div class="accordion__content overflow-hidden sm:w-full bg-dark-grey sm:bg-transparent max-h-0 sm:max-h-max z-20 sm:before:size-full sm:before:bg-dark-grey sm:before:block sm:before:absolute sm:before:-z-30">
                                    <div class="py-12 px-16 lg:py-50 lg:px-40 border-t border-solid border-white sm:border-transparent sm:w-[4.1rem] lg:w-full sm:ml-auto lg:flex justify-between">
                                        <ul class="lg:w-[3.6rem]">
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Потужність:
                                                16, 20, 25, 30, 40 - кВт
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Орієнтовна
                                                площа обігріву: від 160м2 до 400м2
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Масса
                                                котла: Від 204кг до 272кг, в залежності від
                                                потужності
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Жаростійка
                                                листова сталь 6мм  та водяні колосники
                                                - яка витримує до 1200 градусів
                                            </li>
                                        </ul>
                                        <ul class="lg:w-[4.1rem]">
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Тип
                                                палива - дрова, вугілля, брикети
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Безшовний
                                                теплообмінник - найслабше місце в
                                                твердопалевних котлах це шви. Безшовний
                                                теплообмінник дає гарантію що він є надійнішим ніж
                                                інші
                                            </li>
                                            <li class="flex items-center mb-12">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>ККД
                                                - 86% (В інших твердопалевних котлах від 65
                                                до 80%)
                                            </li>
                                            <li class="flex items-center mb-12 lg:mb-0">
                                                <span class="icon-check size-24 min-w-24 rounded bg-red flex justify-center items-center mr-12"></span>Вихід
                                                димохода під 90 градусів
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button data-target="modal"
                                    class="lg:mx-auto w-full h-[.52rem] px-4 sm:w-[2.86rem] sm:h-[.62rem] mt-24 sm:mt-0">
                                <span class="relative z-10">Замовити</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="lg:flex">
                <div class="relative mb-40 lg:mb-0 lg:mr-[1.6rem]">
                    <h2 class="h2 mb-[.42rem] sm:mb-[.75rem] z-10 relative">
                        в чому перевага
                        <span class="text-red">твердопаливних котлів?</span>
                    </h2>

                    <div class="relative w-[3.17rem] h-[2.36rem] sm:w-[5.06rem] sm:h-[3.07rem] before:w-[2.78rem] before:h-[2.57rem] sm:before:w-[4.49rem] sm:before:h-[3.53rem] before:border before:border-solid before:border-white before:absolute sm:before:-top-[.22rem] before:-top-[.1rem] before:block before:-right-26 before:z-10">
                        <img class="min-w-[4.1rem] h-[1.33rem] sm:min-w-[6.12rem] sm:h-[2rem] sm:left-[1.54rem] sm:-top-36 absolute left-16 -top-[.64rem] rotate-[24deg] z-0"
                             src="<?= get_img_link('boiler-fire') ?>.webp" alt="fire"/>
                        <img class="relative z-20 sm:w-[5.06rem] sm:h-[3.07rem]"
                             src="<?= get_img_link('boiler') ?>.webp" alt="boiler"/>
                    </div>
                </div>
                <div class="relative before:w-[1.82rem] before:min-h-[4.75rem] before:rounded before:bg-grey before:hidden before:sm:block before:absolute before:-z-10 before:blur-[1.2rem] before:left-32 before:-rotate-[18deg] before:opacity-60">
                    <div class="flex mb-24 sm:mb-32 z-10 relative">
                        <span class="h1 font-header uppercase text-red font-bold mr-12">01</span>
                        <div class="mt-8 lg:mt-[.18rem] z-10 relative">
                            <div class="h3 font-bold font-header uppercase mb-8">
                                Надійність
                            </div>
                            <p class="text-grey block z-10 relative">
                                Обираючи твердопаливний котел “DREWUSH”, ви обираєте
                                найбільш довговічний твердопаливний котел в Україні,
                                завдяки використанню сучасних технологій виготовлення та
                                обміну досвіду з польськими інженерами
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-24 sm:mb-32">
                        <span class="h1 font-header uppercase text-red font-bold mr-12">02</span>
                        <div class="mt-8 lg:mt-[.18rem]">
                            <div class="h3 font-bold font-header uppercase mb-8">
                                Універсальність
                            </div>
                            <p class="text-grey">
                                Твердопаливний котел "DREWUSH" – ідеальний вибір як для
                                основного, так і для додаткового джерела опалення вашої
                                оселі. В умовах дефіциту газу та електрики, він стане
                                незамінним помічником, забезпечуючи тепло та комфорт у
                                будь-якій ситуації.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-24 sm:mb-32">
                        <span class="h1 font-header uppercase text-red font-bold mr-12">03</span>
                        <div class="mt-8 lg:mt-[.18rem]">
                            <div class="h3 font-bold font-header uppercase mb-8">
                                Довговічність
                            </div>
                            <p class="text-grey">
                                Котел "DREWUSH" розрахований на безперебійну роботу до 30
                                років! Ця надзвичайна довговічність забезпечується завдяки
                                товстій сталі, відсутності зварних швів на теплообміннику
                                та унікальному проектуванню та конструкції котла.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <span class="h1 font-header uppercase text-red font-bold mr-12">04</span>
                        <div class="mt-8 lg:mt-[.18rem]">
                            <div class="h3 font-bold font-header uppercase mb-8">
                                Автономність
                            </div>
                            <p class="text-grey">
                                Твердопаливний котел не залежить від постачання газу чи
                                електрики, що може бути критично важливо в умовах дефіциту
                                або перебоїв у постачанні енергоносіїв.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sm:pt-100">
        <div class="container">
            <div class="relative bg-dark-grey pt-[.35rem] pb-50 px-24 lg:px-[.85rem] lg:pb-[.82rem] lg:pt-[.6rem] overflow-hidden">
                <img class="absolute -left-40" src="<?= get_img_link('Ellipse') ?>.webp" alt="Ellipse"/>
                <img class="absolute top-26 sm:top-0 lg:left-0 h-[3.05rem] w-[3.16rem] sm:h-[4.54rem] sm:w-[4.38rem] -left-[.6rem]"
                     src="<?= get_img_link('car') ?>.webp" alt="car"/>
                <h2 class="h2 text-right mb-[1.6rem] lg:mb-26 lg:text-center lg:w-max lg:ml-[1.55rem]">
                    Отримай <span class="text__gradient"> безкоштовну доставку</span><br/>прямо додому
                </h2>
                <p class="h4 font-medium mb-14 sm:mb-40 sm:w-[3.06rem] lg:w-[7.33rem] ml-auto">
                    Залиште заявку і наші менеджери проконсультують вас по всім
                    питанням
                </p>
                <form data-form="free"
                      class="sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-8 lg:w-[7.33rem] items-end ml-auto">
                    <div class="flex form-item flex-col font-medium mb-16 sm:m-0">
                        <label for="name" class="mb-4 text-s">Ім’я </label>
                        <input type="text" id="name" name="name"
                               class="bg-transparent border-1 border-solid border-white h-[.52rem] text-m p-12"/>
                        <div class="form-item__message absolute"></div>
                    </div>
                    <div class="flex form-item flex-col font-medium mb-16 sm:m-0">
                        <label for="phone" class="mb-4 text-s">Телефон </label>
                        <input type="text" id="phone" name="phone"
                               class="bg-transparent border-1 border-solid border-white h-[.52rem] text-m p-12"/>
                        <div class="form-item__message absolute"></div>
                    </div>
                    <button type="submit" class="h-[.52rem] w-full px-4">
                        <span class="relative z-10">Відправити</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section id="reviews">
        <div class="container">
            <h2 class="h2">
                про нас <span class="text-red">говорять клієнти</span>
            </h2>

            <div class="swiper" data-swiper="response">
                <div class="swiper-wrapper mb-32">
                    <?php

                    foreach (dn_get_items('reviews') as $review):?>
                        <div class="swiper-slide">
                            <div class="border border-solid border-white p-16 lg:p-24">
                                <?php if (get_post_thumbnail_id($review->ID)): ?>
                                    <div class="rounded overflow-hidden size-100 mb-16">
                                        <?= dn_get_image_attachment(get_post_thumbnail_id($review->ID), 'review_thumb', 'Фото - ' . $review->post_title, 'size-full');
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <div class="h4 font-medium mb-4"><?= $review->post_title; ?></div>
                                <p class="text-s text-grey mb-16 lg:text-white">
                                    <?= $review->post_content; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach;
                    ?>
                </div>
            </div>
            <div class="flex items-center justify-between w-full lg:w-[8.3rem] mb-24">
                <div class="w-full flex justify-start">
                    <div class="swiper-pagination progressbar-pagination progressbar-pagination-reviews w-full"></div>
                </div>
                <div class="flex items-center ml-16">
                    <button class="response-prev btn-nav size-32 text-[.32rem] rotate-180">
                        <span class="icon-shevrone"> </span>
                    </button>
                    <div class="fraction-pagination mx-16 text-l font-medium min-w-max">
                        <span class="current-slide">1</span>-<span class="total-slides">6</span>
                    </div>
                    <button class="response-next btn-nav size-32 text-[.32rem] mr-10">
                        <span class="icon-shevrone"> </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <h2 class="h2">часті <span class="text-red">питання</span></h2>
            <?php if (have_rows('faq')):
                while (have_rows('faq')) : the_row(); ?>

                    <div class="accordion relative">
                        <div class="decor absolute left-4 sm:left-24 top-10 sm:top-16 font-header font-medium text-[.58rem] sm:text-[0.92rem] text-red rotate-[-10deg] max-w-max leading-none before:size-[.58rem] sm:before:size-[.83rem] before:bg-soft-grey before:blur-[.25rem] before:opacity-30 z-10 before:-z-10 before:block before:absolute before:rounded before:-left-16 opacity-0">
                            ?
                        </div>
                        <div class="accordion__header py-16 border-b border-solid border-white flex items-end justify-between h4 font-bold">
                            <?= get_sub_field('question'); ?> <span></span>
                        </div>
                        <div class="accordion__content max-h-0 overflow-hidden text-s sm:text-m text-grey">
                            <p class="pt-16 pb-32">
                                <?= get_sub_field('answer'); ?>
                            </p>
                        </div>
                    </div>


                <?php endwhile;
            endif;
            ?>


        </div>
    </section>
    <section>
        <div class="container">
            <div class="bg-dark-grey pt-32 pb-40 px-16 lg:pt-[.58rem] lg:pb-[.8rem] lg:px-[1.04rem] sm:px-[.64 rem] relative overflow-hidden">
                <div class="decor absolute bottom-0 -right-50 sm:right-0 form-fire bg-no-repeat bg-left bg-contain w-[1.6rem] h-[3.4rem] lg:w-[3.08rem] lg:h-[5.45rem]"></div>
                <h2 class="h2 relative before:left-1/3 before:w-[.85rem] before:h-[1.66rem] z-10 before:sm:w-[1.5rem] before:sm:h-[3rem] before:absolute before:top-0 sm:before:left-0 before:bg-grey before:blur-[1.5rem] before:block before:rotate-[60deg] before:-z-10">
                    Залиште заявку і наші менеджери проконсультують Bас
                    <span class="text__gradient">по всім питанням</span>
                </h2>
                <div class="lg:flex relative z-10">
                    <form data-form="request"
                          class="sm:grid sm:grid-cols-2 sm:gap-20 lg:w-[5rem] items-end mb-50 lg:mb-0 lg:mr-[1.3rem]">
                        <div class="flex form-item flex-col font-medium mb-16 sm:m-0">
                            <label for="name-request" class="mb-8 text-s font-normal">Ім’я
                            </label>
                            <input type="text" id="name-request" name="name"
                                   class="bg-transparent border-1 border-solid border-white h-[.52rem] text-m p-12"/>
                            <div class="form-item__message absolute"></div>
                        </div>
                        <div class="flex  form-item flex-col font-medium mb-16 sm:m-0">
                            <label for="phone-request" class="mb-8 text-s font-normal">Телефон
                            </label>
                            <input type="text" id="phone-request" name="phone"
                                   class="bg-transparent border-1 border-solid border-white h-[.52rem] text-m p-12"/>
                            <div class="form-item__message absolute"></div>
                        </div>
                        <div class="flex form-item flex-col font-medium mb-16 sm:m-0 sm:col-start-1 sm:col-end-3">
                            <label for="message-request" class="mb-8 text-s font-normal">Коментар</label>
                            <textarea id="message-request" name="message"
                                      class="bg-transparent border border-solid border-white h-[.8rem] text-m p-12"
                                      placeholder="Залишити заявку"></textarea>
                            <div class="form-item__message"></div>
                        </div>
                        <button type="submit" class="h-[.52rem] w-full px-4">
                            <span class="relative z-10">Відправити</span>
                        </button>
                    </form>
                    <div class="text-l font-medium lg:pt-16">
                        <a class="lg:hover:text-grey mb-20 block max-w-max" href="#">
                            76000 Івано-Франківськ, Черніїв, вулиця Надвірнянська, 2б
                        </a>
                        <a class="lg:hover:text-grey mb-6 block max-w-max" href="tel:+380 00 000 0000">+380 00 000
                            0000</a>
                        <a class="lg:hover:text-grey mb-32 block max-w-max" href="#">example@gmail.com</a>
                        <div class="mb-14">Підписуйтесь на наші соцмережі:</div>
                        <div class="flex text-[.3rem] text-red">
                            <a href="#" class="icon-youtube mr-20 last:mr-0 lg:hover:text-soft-grey"></a>
                            <a href="#" class="icon-instagram mr-20 last:mr-0 lg:hover:text-soft-grey"></a>
                            <a href="#" class="icon-facebook mr-20 last:mr-0 lg:hover:text-soft-grey"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
