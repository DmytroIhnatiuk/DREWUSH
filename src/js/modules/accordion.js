// // const accordion = (itemSelector, buttonSelector, contentSelector) => {
// //   const items = document.querySelectorAll(itemSelector);

// //   if (!items.length) return;
// //   items.forEach((el) => {
// //     const button = el.querySelector(buttonSelector);

// //     const content = el.querySelector(contentSelector);
// //     if (!button || !content) return;
// //     button.addEventListener("click", () => {
// //       if (el.dataset.open !== "true") {
// //         el.dataset.open = "true";
// //         content.style.maxHeight = `${content.scrollHeight / 100}rem`;
// //         button.classList.add("active");
// //       } else {
// //         el.dataset.open = "false";
// //         content.style.maxHeight = "0";
// //         button.classList.remove("active");
// //       }
// //     });
// //     const onResize = () => {
// //       if (el.dataset.open === "true") {
// //         if (parseInt(content.style.maxHeight) !== content.scrollHeight) {
// //           content.style.maxHeight = `${content.scrollHeight / 100}rem`;
// //         }
// //       }
// //     };
// //     window.addEventListener("resize", onResize);
// //   });
// // };

// // export default accordion;

// const accordion = (itemSelector, buttonSelector, contentSelector) => {
// 	const items = document.querySelectorAll(itemSelector)

// 	if (!items.length) return

// 	items.forEach(el => {
// 		const button = el.querySelector(buttonSelector)
// 		const content = el.querySelector(contentSelector)

// 		if (!button || !content) return

// 		button.addEventListener('click', () => {
// 			if (el.dataset.open !== 'true') {
// 				el.dataset.open = 'true'
// 				content.style.maxHeight = `${content.scrollHeight / 100}rem`
// 				button.classList.add('active')
// 				el.classList.add('active') // Добавляем класс active на элемент с классом accordeon
// 			} else {
// 				el.dataset.open = 'false'
// 				content.style.maxHeight = '0'
// 				button.classList.remove('active')
// 				el.classList.remove('active') // Удаляем класс active с элемента с классом accordeon
// 			}
// 		})

// 		const onResize = () => {
// 			if (el.dataset.open === 'true') {
// 				if (parseInt(content.style.maxHeight) !== content.scrollHeight) {
// 					content.style.maxHeight = `${content.scrollHeight / 100}rem`
// 				}
// 			}
// 		}
// 		window.addEventListener('resize', onResize)
// 	})
// }

// export default accordion

const accordion = (itemSelector, buttonSelector, contentSelector) => {
	const items = document.querySelectorAll(itemSelector)

	if (!items.length) return

	items.forEach(el => {
		const button = el.querySelector(buttonSelector)
		const content = el.querySelector(contentSelector)

		if (!button || !content) return

		button.addEventListener('click', () => {
			if (el.dataset.open !== 'true') {
				el.dataset.open = 'true'
				content.style.maxHeight = `${content.scrollHeight}px` // Використання px замість rem
				button.classList.add('active')
				el.classList.add('active') // Добавляем класс active на элемент аккордеона
			} else {
				el.dataset.open = 'false'
				content.style.maxHeight = '0'
				button.classList.remove('active')
				el.classList.remove('active') // Удаляем класс active с элемента аккордеона
			}
		})

		const onResize = () => {
			if (el.dataset.open === 'true') {
				content.style.maxHeight = `${content.scrollHeight}px`
			}
		}
		window.addEventListener('resize', onResize)
	})
}

export default accordion
