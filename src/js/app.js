import timer from "./modules/timer.js";

window['FLS'] = true
// Підключення основного файлу стилів
import '../scss/style.scss'
import 'swiper/css/bundle'
import accordion from './modules/accordion.js'
import * as flsFunctions from './core/functions.js'
import {scrollToAnchor} from './modules/scrollToAnchor.js'
import {headerFixed} from './modules/index.js'
import burger from './modules/burger.js'
import {
    tabNav,
    tabSlide,
    productionSwiper,
    response,
} from './modules/sliders.js'
import HeaderComponent from './modules/HeaderComponent.js'
import Form from "./modules/Form.js";
import {getElements} from "./core/index.js";
import modalsEvents from "./modules/modalsEvents.js";
import Modal from "./modules/modal.js";

/* Перевірка підтримки webp, додавання класу webp або no-webp для HTML */
/* (i) необхідно для коректного відображення webp із css */
flsFunctions.isWebp()
/* Додавання класу touch для HTML якщо браузер мобільний */
flsFunctions.addTouchClass()
/* Додавання loaded для HTML після повного завантаження сторінки */
// flsFunctions.addLoadedClass();

/* Враховування плаваючої панелі на мобільних пристроях при 100vh */
flsFunctions.fullVHfix()

// Ліниве (відкладене) завантаження картинок
// Документація по роботі у шаблоні: https://template.fls.guru/template-docs/modul-lenivaya-podgruzka-lazy-loading.html
// Документація плагіна: https://github.com/verlok/vanilla-lazyload
// Сніппет(HTML):
// import './files/scroll/lazyload.js';

window.addEventListener('DOMContentLoaded', () => {
    try {
        accordion('.accordion', '.accordion__header', '.accordion__content')

        accordion('.accordion-tab', '.accordion__header', '.accordion__content')

        HeaderComponent()
        productionSwiper()
        scrollToAnchor()
        response()
        headerFixed()
        burger()
        tabNav()
        tabSlide()
        timer()
        getElements('[data-target]').forEach(item => {
            item.addEventListener('click', () => {
                modalsEvents(item.dataset.target);
                new Modal('.modal').openModal();
                new Form('[data-form="callback"]').init();
            })
        })
        new Form('[data-form="free"]').init();
        new Form('[data-form="request"]').init();
    } catch (e) {
        console.log(e)
    }
})


