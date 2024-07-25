import {header} from "../core/elementsNodeList.js";
import {enableScrollAndSwipes, getElement, getElements} from "../core/index.js";


let loc = location.origin;
const scrollToAnchor = function () {
    if (header) {
        const links = getElements(".scroll-to");
        const burger = getElement('.burger')
        links.forEach((link) => {
            link.addEventListener("click", function (event) {
                event.preventDefault();

                const blockID = link.getAttribute("href");
                const headerHeight = header.offsetHeight;
                if (
                    burger &&
                    burger.classList.contains("active")
                ) {
                    const scrollPosition = burger.dataset.position
                    enableScrollAndSwipes(scrollPosition);
                    burger.dataset.position = '0';
                    setTimeout(() => {
                        burger.classList.remove("active");
                        header.classList.remove("active");
                    }, 0)
                }

                // scrollToAnotherPage(blockID, "#services");
                window.scrollTo({
                    top: getElement(`${blockID}`).offsetTop - headerHeight,
                    behavior: "smooth",
                });
            });
        });
    }
};

function scrollToAnotherPage(el, target) {
    if (target) {
        if (el === target) {
            location.href = `${loc}${target}`;
        }
    } else {
        return;
    }
}

export {scrollToAnchor};
