const translateFields = {
    field: {
        en: "This field is required",
        ua: "Поле обов'язкове для заповнення",
    },
    template: {
        en: "Fill in according to the template",
        ua: "Заповніть відповідно до шаблону",
    },

    send: {
        en: "Submit",
        ua: "Записатися",
    },

    name: {
        en: "Your name",
        ua: `Ім'я обов'язкове для заповнення*`,
    },
    email: {
        en: "Your name",
        ua: `E-mail введено некоректно*`,
    },
    phone: {
        en: "Tel",
        ua: `Ваш номер телефону обов'язковий для заповнення* `,
    },


    formSuccessTitle: {
        en: "Thank you!",
        ua: 'Дякуємо!',
    },
    formSuccessText: {
        en: "We will contact you soon",
        ua: `Ми зв\'яжемося з вами\nякнайшвидше.`,
    },
    formErrorTitle: {
        en: "Oops...",
        ua: 'Упс...',
    },
    formErrorText: {
        en: "An error occurred! Try it later!",
        ua: 'Виникла помилка!\nСпробуйте пізніше!',
    },


};
let lang = 'ua';
if (document.documentElement.lang.includes('en')) {
    lang = 'en';
}
export {translateFields, lang}