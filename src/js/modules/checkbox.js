import {getElement, getElements} from "../core/index.js";

export default function initCheckBox(){
    if (!getElement('.checkbox')) return;
    getElements('.checkbox').forEach((item) => {
        item.addEventListener('click', () => {
            item.classList.toggle('active')
            getElement('input', item).checked = !getElement('input', item).checked;
        })
    })
}