import {getElements} from "../core/index.js";
import {removeActive} from "../core/classesEvents.js";

const customPagination = (paginationElementsParent, swiper) => {
    if (!paginationElementsParent) return;
    for (let i = 0; i < swiper.slides.length; i++) {
        let index = i + 1;
        paginationElementsParent.insertAdjacentHTML('beforeend', `<button class="pagination__item">${index < 10 ? '0' + index : index}</button>`);
    }
    const paginationButtons = getElements('button', paginationElementsParent);

    paginationButtons.forEach(function (item, index) {
        paginationButtons[0].classList.add('active');
        item.addEventListener('click', function () {
            removeActive(paginationButtons);
            swiper.slideTo(index);
            item.classList.add('active')
        });
    });

    swiper.on('slideChange', function () {
        paginationButtons.forEach(function (item, index) {
            item.classList.remove('active');
            if (index === swiper.activeIndex) {
                item.classList.add('active');
            }
        });
    });
}

function copyText(el) {
    const textElement = el;
    const tempTextArea = document.createElement('textarea');
    tempTextArea.value = textElement.textContent;


    document.body.appendChild(tempTextArea);

    tempTextArea.select();
    tempTextArea.setSelectionRange(0, 99999);
    document.execCommand('copy');
    document.body.removeChild(tempTextArea);
    textElement.parentElement.classList.add('copied');
    setTimeout(() => {
        textElement.parentElement.classList.remove('copied');
    }, 1000);
}

function appendArrayToFormData(formData, array, name) {
    array.forEach((item) => {
        formData.append(`${name}[]`, item);
    });
}

export {customPagination, copyText, appendArrayToFormData};