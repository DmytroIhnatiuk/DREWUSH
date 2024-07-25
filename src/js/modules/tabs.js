import {getElement, getElements} from "../core/index.js";
import {removeActive} from "../core/classesEvents.js";
import PerfectScrollbar from 'perfect-scrollbar';

export default function initTabs() {
    if (!getElement('.tabs-container')) return;
    getElements('.tabs-container').forEach((tabItem) => {
        const tabButtons = getElements('.tab__button', tabItem);
        const tabContents = getElements('.tab__content', tabItem);
        const tabButtonArray = Array.from(tabButtons);
        tabContents.forEach((contentItem) => {
            const content = getElement('.content', contentItem)
            new PerfectScrollbar(content, {
                suppressScrollX: true,
                wheelPropagation: true,

            });
        })

        tabButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const tabIndex = tabButtonArray.indexOf(button);
                if (!tabContents[tabIndex]) return;
                showTab(tabIndex);


            });
        });
        showTab(0);

        function showTab(tabIndex) {
            removeActive(tabContents)
            removeActive(tabButtons)
            tabButtons[tabIndex].classList.add('active')
            tabContents[tabIndex].classList.add('active')
        }
    });
}

