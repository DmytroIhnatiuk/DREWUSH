import {html, header, modal, body} from '../core/elementsNodeList.js';
import {getElement} from "../core/index.js";


function isWebp() {
    // Проверка поддержки webp
    const testWebp = (callback) => {
        const webP = new Image();

        webP.onload = webP.onerror = () => callback(webP.height === 2);
        webP.src =
            'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
    };

    // Добавление класса _webp или _no-webp для HTML
    testWebp((support) => {
        const className = support ? 'webp' : 'no-webp';
        html.classList.add(className);
    });
}

/* Проверка мобильного браузера */
const isMobile = {
    Android: () => navigator.userAgent.match(/Android/i),
    BlackBerry: () => navigator.userAgent.match(/BlackBerry/i),
    iOS: () => navigator.userAgent.match(/iPhone|iPad|iPod/i),
    Opera: () => navigator.userAgent.match(/Opera Mini/i),
    Windows: () => navigator.userAgent.match(/IEMobile/i),
    any: () =>
        isMobile.Android() ||
        isMobile.BlackBerry() ||
        isMobile.iOS() ||
        isMobile.Opera() ||
        isMobile.Windows(),
};

/* Добавление класса touch для HTML если браузер мобильный */
function addTouchClass() {
    // Добавление класса _touch для HTML если браузер мобильный
    if (isMobile.any()) {
        html.classList.add('touch');
    }
}


// Получение хеша в адресе сайта
const getHash = () => location.hash?.replace('#', '');

// Указание хеша в адресе сайта
function setHash(hash) {
    hash = hash ? `#${hash}` : location.href.split('#')[0];
    history.pushState('', '', hash);
}

function headerFixed() {
    if (header) {
        let lastScrollPosition = 0;
        if (scrollY >= header.clientHeight) {
            header.classList.add("fixed");
        }
        const sections = document.querySelectorAll('section');
        window.addEventListener("scroll", () => {
            let currentScrollPosition = scrollY || document.documentElement.scrollTop;

            try {

                // console.log(contentBackgroundColor, headerBottom, getElement('section'))
                if (!header.classList.contains('active')) {
                    if (scrollY >= (header.clientHeight / 2.5)) {
                        header.classList.add("fixed");
                    } else {
                        header.classList.remove("fixed");
                    }
                }

                if (scrollY >= header.clientHeight + 60) {
                    if (currentScrollPosition > lastScrollPosition) {
                        header.classList.add("header-hidden");
                    } else {
                        header.classList.remove("header-hidden");
                    }
                    lastScrollPosition = currentScrollPosition;
                }
            } catch (e) {
                console.log(e);
            }
        });

    }
}

export {
    isWebp,
    isMobile,
    addTouchClass,
    headerFixed,
    getHash,
    setHash,

};