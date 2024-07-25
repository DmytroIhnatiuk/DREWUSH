import { header } from '../core/elementsNodeList.js'
import { disableScrollAndSwipes, enableScrollAndSwipes } from '../core/index.js'

const burger = () => {
	if (header) {
		const burger = header.querySelector('.burger')
		const menu = document.querySelector('header') // Изменено на тег header
		const body = document.body

		if (burger && menu && body) {
			burger.addEventListener('click', () => {
				const scrollPosition =
					burger.dataset.position && burger.dataset.position !== '0'
						? burger.dataset.position
						: scrollY || document.documentElement.scrollTop
				if (burger.classList.contains('active')) {
					enableScrollAndSwipes(scrollPosition)
					burger.dataset.position = '0'
					setTimeout(() => {
						burger.classList.remove('active')
						menu.classList.remove('active')
						body.classList.remove('active')
					}, 100)
				} else {
					burger.dataset.position = scrollPosition
					disableScrollAndSwipes(scrollPosition)
					burger.classList.add('active')
					menu.classList.add('active')
					body.classList.add('active')
				}
			})
		} else {
			console.error('Element not found: burger, menu, or body')
		}
	} else {
		console.error('Element not found: header')
	}
}

export default burger
