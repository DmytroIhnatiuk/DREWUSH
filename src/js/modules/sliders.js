import Swiper from 'swiper'
import { FreeMode, Navigation, Pagination, Thumbs } from 'swiper/modules'
import { getElement, getElements } from '../core/index.js'

function production() {
	if (!getElement('[data-swiper="production"]')) return
	new Swiper('[data-swiper="production"]', {
		slidesPerView: 'auto',
		spaceBetween: 20,
		loop: true,
		speed: 700,
		// navigation: {
		// 	nextEl: '.hotel-next',
		// 	prevEl: '.hotel-prev',
		// },
		// watchOverflow: true,
	})
}

function response() {
	if (!getElement('[data-swiper="response"]')) return
	new Swiper('[data-swiper="response"]', {
		slidesPerView: '3',
		spaceBetween: 20,
		loop: true,
		speed: 700,
		// navigation: {
		// 	nextEl: '.hotel-next',
		// 	prevEl: '.hotel-prev',
		// },
		// watchOverflow: true,
	})
}

export { production, response }
