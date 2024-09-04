import Swiper from 'swiper/bundle'

// import styles bundle
import 'swiper/css/bundle'
import {getElement, getElements} from '../core/index.js'

function updateCustomPagination(swiper) {
    const currentSlide = swiper.el.nextElementSibling.querySelector('.current-slide')
    const totalSlides = swiper.el.nextElementSibling.querySelector('.total-slides')
    if (!currentSlide || !totalSlides) {
        console.error('Pagination elements not found')
        return
    }

    const total = swiper.slides.filter(
        slide => !slide.classList.contains('swiper-slide-duplicate')
    ).length
    let current = swiper.realIndex + 1 // Для автоматичного підрахунку поточного слайду

    currentSlide.textContent = current
    totalSlides.textContent = total

    // Вплив на прогресбар тільки для десктопів
    if (window.innerWidth > 1024) {
        const progressBarFill = document.querySelector(
            '.swiper-pagination-progressbar-fill'
        )
        if (progressBarFill) {
            const progress = (swiper.realIndex + 1) / total // Оновлений розрахунок прогресу
            progressBarFill.style.transform = `scaleX(${progress})`
            progressBarFill.style.transformOrigin = 'left'
        } else {
            console.error('Progress bar fill element not found')
        }
    }
}

function initSwiper(swiperSelector, nextSelector, prevSelector, paginationSelector) {
    const swiperElement = getElement(swiperSelector)
    if (!swiperElement) {
        console.error('Swiper element not found')
        return
    }

    const swiper = new Swiper(swiperElement, {
        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 16,
            },
            992: {
                slidesPerView: 'auto', // Автоматичне визначення кількості слайдів
                spaceBetween: 21,
            },
        },
        loop: true,
        speed: 700,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: nextSelector,
            prevEl: prevSelector,
        },
        pagination: {
            el: paginationSelector,
            type: 'progressbar',
        },
        on: {
            init: function () {
                updateCustomPagination(this)
            },
            slideChange: function () {
                updateCustomPagination(this)
            },
        },
    })

    updateCustomPagination(swiper)
    window.addEventListener('resize', function () {
        updateCustomPagination(swiper)
    })
}

function productionSwiper() {
    initSwiper(
        '[data-swiper="production"]',
        '.production-next',
        '.production-prev',
        '.progressbar-pagination-production'
    )
}

function response() {
    if (!getElement('[data-swiper="response"]')) return
    const swiper = new Swiper('[data-swiper="response"]', {
        breakpoints: {
            640: {
                slidesPerView: '2',
            },
            1024: {
                slidesPerView: '3',
            },
        },
        slidesPerView: '1',

        spaceBetween: 20,
        loop: true,
        speed: 700,
        navigation: {
            nextEl: '.response-next',
            prevEl: '.response-prev',
        },
        pagination: {
            el: '.progressbar-pagination-reviews',
            type: 'progressbar',
        },
        on: {
            init: function () {
                updateCustomPagination(this)
            },
            slideChange: function () {
                updateCustomPagination(this)
            },
        },
        // navigation: {
        // 	nextEl: '.hotel-next',
        // 	prevEl: '.hotel-prev',
        // },
    })
    updateCustomPagination(swiper)
    window.addEventListener('resize', function () {
        updateCustomPagination(swiper)
    })
}

let tabNavSwiper // Оголошуємо змінну для зберігання екземпляра Swiper

function tabNav() {
    const element = getElement('[data-swiper="tabNav"]')
    if (!element) return
    tabNavSwiper = new Swiper(element, {
        spaceBetween: 16,
        slidesPerView: 'auto',
        breakpoints: {
            640: {
                spaceBetween: 56,
            },
        },
    })
    return tabNavSwiper
}

function tabSlide() {
    const element = getElement('[data-swiper="tabSlide"]')
    if (!element) return
    if (!tabNavSwiper) {
        console.warn('tabNavSwiper is not initialized')
        tabNav() // Спробуйте ініціалізувати tabNavSwiper, якщо він ще не ініціалізований
    }
    return new Swiper(element, {
        spaceBetween: 300,
        speed: 700,
        thumbs: {
            swiper: tabNavSwiper, // Використовуємо екземпляр Swiper
        },
    })
}

export {productionSwiper, response, tabNav, tabSlide}
