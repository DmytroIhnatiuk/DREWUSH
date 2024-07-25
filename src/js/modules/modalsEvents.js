import {modalBody, modal} from "../core/elementsNodeList.js";
import Form from "./Form.js";
import {translateFields, lang} from "./base.js";
import {getElement, getElements} from "../core/index.js";
import {copyText} from "./helpers.js";


export default function modalsEvents(target) {
    if (target.dataset.target === 'size') {
        modal.classList.add('modal-size');
        modalBody.firstElementChild.innerHTML = renderSizeModal();
    }

}

function renderDonateModal(target) {
    const selected = target.dataset.services ? 'Послуга' : 'Лікар';


    return `<div class="content">
<div class="content__header">
<div class="h4 f-weight_500 border_bottom">Місія</div>
</div>
      <div class="f-size_s text-color_grey">BENEFICIARY</div>
      <div data-copy  class="text-uppercase f-size_l f-weight_400 mb_22"><span>National Bank of Ukraine</span><button class="icon-copy ml_18"></button></div>
      
           <div class="f-size_s text-color_grey">BENEFICIARY BIC</div>
      <div data-copy  class="text-uppercase f-size_l f-weight_400 mb_22"><span>NBUAUAUX</span><button class="icon-copy ml_18"></button></div>
      
             <div class="f-size_s text-color_grey">BENEFICIARY ADDRESS</div>
      <div data-copy  class=" f-size_l f-weight_400 mb_22"><span>9 Instytutska St, Kyiv, 01601, Ukraine</span><button class="icon-copy ml_18"></button></div>
    
             <div class="f-size_s text-color_grey">ACCOUNT NUMBER</div>
      <div  data-copy class="text-uppercase f-size_l f-weight_400 mb_22"><span>804790258</span><button class="icon-copy ml_18"></button></div>
    
             <div class="f-size_s text-color_grey">BENEFICIARY BANK NAME </div>
      <div data-copy  class=" f-size_l f-weight_400 mb_22"><span>JP MORGAN CHASE BANK, New York</span><button class="icon-copy ml_18"></button></div>
    
             <div class="f-size_s text-color_grey">BENEFICIARY BANK BIC</div>
      <div data-copy  class="text-uppercase f-size_l f-weight_400 mb_22"><span>CHASUS33</span><button class="icon-copy ml_18"></button></div>
    

      <div data-copy  class="text-uppercase f-size_l f-weight_400 mb_22"><span>ABA 0210 0002 1</span><button class="icon-copy ml_18"></button></div>
    
       <div class="f-size_s text-color_grey">BENEFICIARY BANK ADDRESS</div>
      <div  data-copy class=" f-size_l f-weight_400 mb_22"><span>383 Madison Avenue, New&nbsp;York, NY 10017, USA</span><button class="icon-copy ml_18"></button></div>
    
       <div class="f-size_s text-color_grey">PURPOSE OF PAYMENT</div>
      <div data-copy  class="text-uppercase f-size_l f-weight_400 mb_22"><span>for ac 47330992708</span><button class="icon-copy ml_18"></button></div>
    

    </div>`
}

function renderSizeModal() {


    return `<h2 class="text-uppercase mb_32-22">Розмірна сітка</h2>
                <div class="image mb_32-22">
                </div>
                <div class="f-size_m f-weight_500 mb_24-16">
                    Якщо у вас не вийшло підібрати розмір, наші менеджери допоможуть вам!
                </div>
                <a href="#" class="btn btn__outline">
                    Написати
                </a>`
}


function renderFormAnswer(target) {
    modal.classList.add('modal__form-answer');
    modalBody.className = 'form-answer modal__body text-center';
    const {formSuccessText, formErrorText, formSuccessTitle, formErrorTitle} = translateFields;
    let title, subtitle;
    if (target.dataset.form == 'success') {
        title = formSuccessTitle[lang];
        subtitle = formSuccessText[lang];
        modalBody.parentElement.classList.add('success');
    } else {
        title = formErrorTitle[lang];
        subtitle = formErrorText[lang];
    }
    return `

            <div class="modal__title">
                   <h2 class="text-uppercase">${title}</h2>
            </div>
<div class="modal__subtitle h3">
 ${subtitle}
</div> `
}



