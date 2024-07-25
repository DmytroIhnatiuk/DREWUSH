import IMask from "imask";
import modalsEvents from "./modalsEvents.js";
import Modal from "./modal.js";
import {translateFields, lang} from "./base.js";

import {getElement} from "../core/index.js";

let validRegex =
    /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
let maskOptions = {
    mask: "+38 (000) 000 - 0000",
    lazy: false,
};

class Form {
    constructor(form) {
        this.form = document.querySelector(form);
        this.inputs = this.form.querySelectorAll("input");
        this.path = `${path}/services/mailAndTelegram.php`;
        this.telInput = this.form.querySelector("[name='phone']") ? this.form.querySelector("[name='phone']") : this.form.querySelector('.tel')
        this.mask = new IMask(this.telInput, maskOptions);
        this.formData = {
            link: location.href
        };
    }


    checkInputs() {

        this.inputs.forEach((input) => {
            if (input.name === "name") {
                this.checkTextInput(input);
            }
            if (input.name === "phone") {
                this.checkPhoneInput(input);
            }
            if (input.name === "email") {
                this.checkEmailInput(input);
            }
        });
    }


    checkEmailInput(input) {
        let {email} = translateFields;
        let templateEmail = email[lang];
        let isValid = false;
        input.addEventListener("blur", () => {
            if (input.value.match(validRegex)) {
                this.valid(input);
                isValid = true;
            } else {
                this.invalid(input);
            }
            getElement('.form__message', input.closest('.form__item')).innerHTML = isValid ? "" : templateEmail;
        });
        input.addEventListener("input", () => {
            this.valid(input);
            getElement('.form__message', input.closest('.form__item')).innerHTML = "";
        });
    }


    checkPhoneInput(input) {
        let {phone: templateMessage} = translateFields;
        let template = templateMessage[lang];
        let isValid = false;
        this.mask.updateValue()

        input.addEventListener("blur", () => {
            if (input.value.indexOf("_") === -1) {
                this.valid(input);
                isValid = true;
            } else {
                this.invalid(input);
            }
            input.nextElementSibling.innerText = isValid ? "" : template;
        });
        input.addEventListener("input", () => {
            this.valid(input);
            input.nextElementSibling.innerText = "";

        });
    }

    resetForm(btn) {
        this.formData = {
            phone: "",
            name: "",
            selected: "",
            date: '',
            comment: '',
            link: location.href
        };
        const {send} = translateFields;
        btn.dataset.form = '';
        btn.classList.remove("disabled");
        btn.innerHTML = `<span class="txt-upper">${send[lang]}</span>`;
        this.form.reset();
        this.inputs.forEach((input) => {
            input.parentNode.classList.remove('valid');
            input.value = '';
            // if (input.name == 'phone') {
            //     this.mask.updateValue();
            // }
        });
        this.checkInputs();
    }

    valid(input) {
        input.closest('.form__item').classList.add("valid");
        input.closest('.form__item').classList.remove("invalid");
        input.previousElementSibling.classList.remove('hide')
        if (this.form.querySelector('.btn').classList.contains('disabled')) this.form.querySelector('.btn').classList.remove('disabled')
    }

    invalid(input) {
        input.closest('.form__item').classList.add("invalid");
        input.closest('.form__item').classList.remove("valid");
        input.previousElementSibling.classList.add('hide')
        this.form.querySelector('.btn').classList.add('disabled')
    }

    validateEmptyField() {
        let {field} = translateFields;

        let isValid = true;

        let validator = {
            name: null,
            email: null,
            phone: null,

        };
        let validInputs = false;
        this.inputs.forEach((input) => {

            if (input.name === "name" || input.name === "email") {
                if (!input.value.trim()) {
                    this.invalid(input);
                    input.nextElementSibling.innerHTML = `${
                        field[lang]
                    }`;
                    return (isValid = false);
                } else {
                    this.valid(input);
                    input.nextElementSibling.innerText = "";

                    validator[input.name] = true;
                    return (isValid = true);
                }
            }
            if (input.name === "phone") {
                if (input.value.indexOf("_") === -1) {
                    this.valid(input);
                    input.nextElementSibling.innerText = "";
                    validator.phone = true;
                    return (isValid = true);
                } else {
                    this.invalid(input);
                    input.nextElementSibling.innerHTML = `${
                        field[lang]
                    }`;

                    validator.phone = false;
                    return (isValid = false);
                }
            }
        });

        for (let key in validator) {
            if (!validator[key]) return validInputs = false;
            validInputs = true;
        }
        if (validInputs) {
            return isValid;
        }


    }

    async sendToSheet(data) {
        try {
            const sheetsData = new FormData();
            for (let key in data) {
                sheetsData.append(`${key}`, `${data[key]}`);
            }
            const result = await fetch(
                "https://script.google.com/macros/s/AKfycbwFLvu7MShp9xsydD7exK7pLzre6plmHZWocCt94Xzsy_6KCvGWnk37WJqPBgQEzX1E/exec",
                {
                    method: "POST",
                    body: sheetsData,
                }
            );
            console.log(result)
        } catch (e) {
            console.log(e);
        }


    }


    async postData(url, data, btn) {
        this.form.classList.add('none');
        const formAnswer = this.form.nextElementSibling;
        try {
            const response = await fetch(url, {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json",
                },
            });

            if (response.status !== 200) throw new Error('error');
            this.resetForm(btn);
            let {formSuccessTitle, formSuccessText} = translateFields;
            formAnswer.firstElementChild.innerHTML = formSuccessTitle[lang];
            formAnswer.lastElementChild.innerHTML = formSuccessText[lang];
            formAnswer.classList.remove('hide');
            formAnswer.classList.add('show');

        } catch (error) {
            let {formErrorTitle, formErrorText} = translateFields;
            this.resetForm(btn);
            formAnswer.firstElementChild.innerHTML = formErrorTitle[lang];
            formAnswer.lastElementChild.innerHTML = formErrorText[lang];
            formAnswer.classList.remove('hide');
            formAnswer.classList.add('show');
            console.error("Ошибка:", error);
        }

    }

    getUtmParameter(url, object) {
        if (url) {
            let urlValues;
            urlValues = url.substr(1).split("&");

            const values = urlValues.map((value) => value.split("="));
            values.forEach((item) => {
                const regex = /utm_/i;
                let name = item[0].replace(regex, "");
                object[`${name}`] = item[1]
            });
            return true;
        }
        return false;
    };

    checkTextInput(input) {
        let name = translateFields[input.name][lang];
        let isValid = false;
        input.addEventListener("keypress", function (e) {
            if (!e.key.match(/^[a-zA-Zа-яА-ЯЇїІіЄєҐґЁёЭэЪъ\s]/)) {
                e.preventDefault();
            }
        });
        input.addEventListener("blur", () => {
            if (input.value.length >= 2) {
                this.valid(input);
                isValid = true;
            } else {
                this.invalid(input);
            }
            input.nextElementSibling.innerText = isValid ? "" : name;
        });
        input.addEventListener('input', () => {
            this.valid(input);
            input.nextElementSibling.innerText = "";
        });
    }


    init() {


        this.checkInputs();
        this.form.addEventListener("submit", (e) => {
            e.preventDefault();

            if (this.validateEmptyField()) {
                e.submitter.classList.add("disabled");
                e.submitter.innerHTML = `<svg class="icon btn__spinner">
        <use xlink:href="#spinner"></use>
      </svg>`;

                this.inputs.forEach(input => {
                    this.formData[input.name] = input.value;
                })
                this.postData(this.path, this.formData, e.submitter);
            }
        });
    }
}

export default Form;

