import {getElement} from "./index.js";


const html = document.documentElement;
const body = document.body;
const header = document.querySelector('header');
const footer = document.querySelector('footer');
const modal = getElement('.modal');
const modalBody = getElement('.modal__body', modal || document);


export {
    html,
    body,
    header,
    modal,
    modalBody,
    footer,
};