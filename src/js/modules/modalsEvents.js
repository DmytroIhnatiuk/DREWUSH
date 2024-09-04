import {modalBody, modal} from "../core/elementsNodeList.js";
import Form from "./Form.js";
import {translateFields, lang} from "./base.js";
import {getElement, getElements} from "../core/index.js";
import {copyText} from "./helpers.js";


export default function modalsEvents(target) {
    if (target === 'modal') {
        modal.classList.add('modal-size');
        modalBody.firstElementChild.innerHTML = renderModal();
    }

}



function renderModal() {


    return ` <h2 class="uppercase text-center md:text-left font-header font-medium mb-24">Залиште заявку </h2>
            <h4 class="max-w-[5.04rem] text-center md:text-left  mb-24 font-medium">Наші менеджери проконсультують вас по всім питанням і
                допоможуть зробити замовлення</h4>
            <form
            data-form="callback"
                    class="md:grid-cols-3 gap-y-20 gap-x-20 grid"

            >
                <div class="flex form-item flex-col font-medium mb-16 sm:m-0">
                    <label for="name-modal" class="mb-8 text-s font-normal"
                    >Ім’я
                    </label>
                    <input
                            type="text"
                            id="name-modal"
                            name="name"
                            class="bg-transparent border-1 border-solid border-white h-[.52rem] text-m p-12"
                    />
                    <div class="form-item__message absolute" ></div>
                </div>
                <div class="flex form-item flex-col font-medium mb-16 sm:m-0">
                    <label for="phone-modal" class="mb-8 text-s font-normal"
                    >Телефон
                    </label>
                    <input
                            type="text"
                            id="phone-modal"
                            name="phone"
                            class="bg-transparent border-1 border-solid border-white h-[.52rem] text-m p-12"
                    />
                    <div class="form-item__message absolute"></div>
                </div>
                <button type="submit" class=" mt-auto h-[.52rem] w-full px-4">
                    <span class="relative z-10">Відправити</span>
                </button>
            </form>`
}





