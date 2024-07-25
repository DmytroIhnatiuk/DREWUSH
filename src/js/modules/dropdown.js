import {removeActive} from "../core/classesEvents.js";
import {getElement, getElements} from "../core/index.js";


export default function dropdown() {
    if (!getElement('.dropdown')) return;
    getElements('.dropdown').forEach(dropdown => {
            if (screen.availWidth <= 1024) {
                dropdown.querySelector('.dropdown__btn').addEventListener('click', () => {
                    dropdown.classList.toggle('active')
                })
            }
            const activeItem = dropdown.querySelector('.dropdown__active')
            dropdown.querySelectorAll('.dropdown__item').forEach(dropdownItem => {
                dropdownItem.addEventListener('click', () => {
                    removeActive(dropdown.querySelectorAll('.dropdown__item'));
                    dropdownItem.classList.add('active');
                    activeItem.innerHTML = dropdownItem.innerHTML;
                    activeItem.dataset.selected = dropdownItem.innerHTML;
                    if (dropdown.classList.contains('active')) dropdown.classList.remove('active')
                })
            })
        }
    )
}