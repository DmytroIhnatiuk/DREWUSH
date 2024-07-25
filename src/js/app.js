window['FLS'] = true
// Підключення основного файлу стилів
import '../scss/style.scss'
import 'swiper/css/bundle'
import accordion from './modules/accordion.js'
import * as flsFunctions from './core/functions.js'
import { scrollToAnchor } from './modules/scrollToAnchor.js'
import { headerFixed } from './modules/index.js'
import burger from './modules/burger.js'
import { production, response } from './modules/sliders.js'
import HeaderComponent from './modules/HeaderComponent.js'

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
accordion('.accordion', '.accordion__header', '.accordion__content')

accordion('.accordion-tab', '.accordion__header', '.accordion__content')

document.addEventListener('DOMContentLoaded', () => {
	const tabs = document.querySelectorAll('.tab')
	const contents = document.querySelectorAll('.tab-content')

	tabs.forEach(tab => {
		tab.addEventListener('click', () => {
			const tabId = tab.getAttribute('data-tab')

			// Видалення активного класу з усіх вкладок та контенту
			tabs.forEach(tab => tab.classList.remove('active'))
			contents.forEach(content => content.classList.remove('active'))

			// Додавання активного класу до вибраної вкладки та контенту
			tab.classList.add('active')
			document
				.querySelector(`.tab-content[data-content="${tabId}"]`)
				.classList.add('active')
		})
	})
})

window.addEventListener('DOMContentLoaded', () => {
	try {
		HeaderComponent()
		production()
		response()
		scrollToAnchor()
		headerFixed()
		burger()
	} catch (e) {
		console.log(e)
	}
})
