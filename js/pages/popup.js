// (function () {

const popup = document.querySelector('.popup'),
    popupClose = document.querySelector('.popup__close'),
    popupWrapper = popup.querySelector('.popup__wrapper'),
    callorderOpenAll = document.querySelectorAll('.callorderOpen'),
    promotionOpenAll = document.querySelectorAll('.promotionOpen'),
    pushOpenAll = document.querySelectorAll('.pushOpen');

const formFields = {
        '1': [
            [
                {
                    fieldClass: 'form__field',
                    tag: 'input',
                    tagClass: 'input',
                    type: 'text',
                    name: 'name',
                    placeholder: 'Имя'
                },
                {
                    fieldClass: 'form__field',
                    tag: 'input',
                    tagClass: 'input',
                    type: 'tel',
                    name: 'tel',
                    placeholder: 'Телефон'
                },
                {
                    fieldClass: 'form__field',
                    tag: 'input',
                    tagClass: 'input',
                    type: 'email',
                    name: 'email',
                    placeholder: 'E-mail'
                }],
            [
                {
                    fieldClass: 'form__field form__field_3',
                    tag: 'textarea',
                    tagClass: 'input input_area',
                    name: 'description',
                    placeholder: 'Напишите свой вопрос'
                }
            ]
        ]
    },
    formParams = {
        '1': {
            title: 'Закажите сайт',
            subtitle: 'Мы ответим на все интересующие вас вопросы',
            btntitle: 'Получить консультацию',
            fields: formFields['1']
        },
        '2': {
            title: 'Закажите продвижение',
            subtitle: 'Мы ответим на все интересующие вас вопросы',
            btntitle: 'Получить консультацию маркетолога',
            fields: formFields['1']
        },
        '3': {
            title: 'Откликнуться на вакансию',
            subtitle: 'Хотите стать частью команды?',
            btntitle: 'Откликнуться',
            fields: formFields['1']
        },
        '4': {
            title: 'Получить прогноз по бюджету',
            subtitle: 'Произведем индивидуальный расчет с учетом ваших пожеланий',
            btntitle: 'Рассчитать стоимость',
            fields: formFields['1']
        },
        '5': {
            title: 'Закажите звонок',
            subtitle: 'Мы ответим на все интересующие вас вопросы',
            btntitle: 'Получить консультацию',
            fields: formFields['1']
        },
        '6': {
            title: 'Узнаете стоимость продвижения',
            subtitle: 'Мы ответим на все интересующие вас вопросы',
            btntitle: 'Получить консультацию',
            fields: formFields['1']
        },
        '7': {
            title: 'Полный маркетинговый аудит',
            subtitle: 'Мы предоставим полную информацию для развития вашего проекта в интернете',
            btntitle: 'Заказать аудит',
            fields: formFields['1']
        },
        '8': {
            title: 'Ответим на ваши вопросы',
            subtitle: 'Предоставим развернутый ответ на интересующие Вас вопросы',
            btntitle: 'Отправить',
            fields: formFields['1']
        },
        '9': {
            title: 'Обсудить условия',
            subtitle: 'Мы ответим на все интересующие вас вопросы',
            btntitle: 'Получить консультацию',
            fields: formFields['1']
        },
        '10': {
            title: 'Узнать стоимость',
            subtitle: 'Мы ответим на все интересующие вас вопросы',
            btntitle: 'Получить консультацию',
            fields: formFields['1']
        }
    }
    formTemplate = $('.callorderTemplate').find('.callorder');

function generateForm(formId, themeText) {
    let params = formParams[formId],
        form = formTemplate.clone(),
        title = form.find('.callorder__title'),
        subtitle = form.find('.callorder__subtitle'),
        btntitle = form.find('.btn__title'),
        theme = form.find('input[name=theme]'),
        fields = form.find('.form__fields'),
        fieldsArr = params.fields;

    title.text(params.title);
    subtitle.text(params.subtitle);
    btntitle.text(params.btntitle);
    if (themeText){
        theme.val(themeText);
    } else {
        theme.val(params.title);
    }

    fieldsArr.forEach(function (i) {
        let row = $('<div>').addClass('form__row');

        i.forEach(function (item) {
            let field = $('<div>').addClass(item.fieldClass),
                element = $('<' + item.tag + '>').addClass(item.tagClass).attr('name', item.name).attr('placeholder', item.placeholder);

            if (item.type) {
                element.attr('type', item.type);
            }
            field.append(element);
            row.append(field);
        });


        fields.append(row);
    });


    return form;
}

if (callorderOpenAll) {
    for (let i = 0; i < callorderOpenAll.length; i++) {
        let callorderOpen = callorderOpenAll[i];

        callorderOpen.addEventListener('click', function (e) {

            let formId = this.dataset.formid || 1,
                theme = this.dataset.theme || '',
                data = {
                    action: 'callorderForm',
                    formId: formId,
                    theme: theme
                },
                html = generateForm(formId);

            $(popupWrapper).html(html);
            $('input[type=tel]').mask('+7 (999) 999-99-99');
            $(popup).addClass('active').find('.callorder .form').validate(
                {
                    rules: {
                        name: "required",
                        tel: "required",
                        email: "required"
                    },
                    messages: {
                        name: "Введите ваше Имя",
                        tel: "Введите ваш  Телефон",
                        email: "Введите ваш Email"
                    },

                    submitHandler: function (form) {
                        sendCallorderData(form);
                    },
                    invalidHandler: function (event, validator) {
                        // debugger;
                    },
                    errorPlacement: function (error, element) {
                        element[0].placeholder = error[0].innerText;
                    }
                }
            );


            // $.ajax({
            //     dataType: "json",
            //     type: "POST",
            //     url: '/php/ajax.php',
            //     data: data,
            //     success: function (result) {
            //         if (result.status) {
            //
            //             popupWrapper.innerHTML = result.html;
            //             popup.classList.add('active');
            //             // scrollLock.disablePageScroll(document.body);
            //             $(document.querySelector('.callorder .form')).validate(
            //                 {
            //                     rules: {
            //                         name: "required",
            //                         tel: "required",
            //                         email: "required"
            //                     },
            //                     messages: {
            //                         name: "Введите ваше Имя",
            //                         tel: "Введите ваш  Телефон",
            //                         email: "Введите ваш Email"
            //                     },
            //
            //                     submitHandler: function (form) {
            //                         sendCallorderData(form);
            //                     },
            //                     invalidHandler: function (event, validator) {
            //                         // debugger;
            //                     },
            //                     errorPlacement: function (error, element) {
            //                         element[0].placeholder = error[0].innerText;
            //                     }
            //                 }
            //             );
            //
            //         } else {
            //             alert('Что-то пошло не так, попробуйте еще раз!!!');
            //         }
            //     },
            //     error: function (result) {
            //         alert('Что-то пошло не так, попробуйте еще раз!!!');
            //     }
            // });
        });
    }
}

function sendCallorderData(form) {
    let data = $(form).serialize();

    $.ajax({
        dataType: "json",
        type: "POST",
        url: '/php/ajax.php',
        data: data,
        success: function (result) {
            if (result.status) {
                getTimerForm();
                yaCounter37527960.reachGoal('svazatsya');
                return true;
            } else {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        },
        error: function (result) {
            alert('Что-то пошло не так, попробуйте еще раз!!!');
        }
    });
}

if (promotionOpenAll) {
    for (let i = 0; i < promotionOpenAll.length; i++) {
        let promotionOpen = promotionOpenAll[i];

        promotionOpen.addEventListener('click', function (e) {

            let data = {
                action: 'promotionForm'
            };

            $.ajax({
                dataType: "json",
                type: "POST",
                url: '/php/ajax.php',
                data: data,
                success: function (result) {
                    if (result.status) {
                        popupWrapper.innerHTML = result.html;
                        popup.classList.add('active');

                        $(document.querySelector('.promotion .form')).validate(
                            {
                                rules: {
                                    tel: "required",
                                    email: "required"
                                },
                                messages: {
                                    tel: "Введите ваш  Телефон",
                                    email: "Введите ваш Email"
                                },

                                submitHandler: function (form) {
                                    sendCallorderData(form);
                                },
                                invalidHandler: function (event, validator) {
                                    // debugger;
                                },
                                errorPlacement: function (error, element) {
                                    element[0].placeholder = error[0].innerText;
                                }
                            }
                        );

                    } else {
                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                    }
                },
                error: function (result) {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            });
        });
    }
}

if (pushOpenAll) {
    for (let i = 0; i < pushOpenAll.length; i++) {
        let pushOpen = pushOpenAll[i];

        pushOpen.addEventListener('click', function (e) {
            e.preventDefault();
            let data = $(this).closest('form').serialize();

            $.ajax({
                dataType: "json",
                type: "POST",
                url: '/php/ajax.php',
                data: data,
                success: function (result) {
                    if (result.status) {

                        popupWrapper.innerHTML = result.html;
                        popup.classList.add('active');

                        // $(document.querySelector('.callorder .form')).validate(
                        //     {
                        //         rules: {
                        //             name: "required",
                        //             tel: "required",
                        //             email: "required"
                        //         },
                        //         messages: {
                        //             name: "Введите ваше Имя",
                        //             tel: "Введите ваш  Телефон",
                        //             email: "Введите ваш Email"
                        //         },
                        //
                        //         submitHandler: function (form) {
                        //             getTimerForm();
                        //         },
                        //         invalidHandler: function (event, validator) {
                        //             // debugger;
                        //         },
                        //         errorPlacement: function (error, element) {
                        //             element[0].placeholder = error[0].innerText;
                        //         }
                        //     }
                        // );
                        popupWrapper.querySelector('.callorderOpen').addEventListener('click', function () {
                            let formId = this.dataset.formid || 1,
                                data = {
                                    action: 'callorderForm',
                                    formId: formId
                                };


                            $.ajax({
                                dataType: "json",
                                type: "POST",
                                url: '/php/ajax.php',
                                data: data,
                                success: function (result) {
                                    if (result.status) {

                                        popupWrapper.innerHTML = result.html;
                                        popup.classList.add('active');
                                        $(document.querySelector('.callorder .form')).validate(
                                            {
                                                rules: {
                                                    name: "required",
                                                    tel: "required",
                                                    email: "required"
                                                },
                                                messages: {
                                                    name: "Введите ваше Имя",
                                                    tel: "Введите ваш  Телефон",
                                                    email: "Введите ваш Email"
                                                },

                                                submitHandler: function (form) {
                                                    getTimerForm();
                                                },
                                                invalidHandler: function (event, validator) {
                                                    // debugger;
                                                },
                                                errorPlacement: function (error, element) {
                                                    element[0].placeholder = error[0].innerText;
                                                }
                                            }
                                        );

                                    } else {
                                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                                    }
                                },
                                error: function (result) {
                                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                                }
                            });
                        });

                    } else {
                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                    }
                },
                error: function (result) {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            });
        });
    }
}

function getTimerForm(formId) {

    formId = formId || 1;

    let data = {
        formId: formId,
        action: 'timerForm'
    };

    $.ajax({
        dataType: "json",
        type: "POST",
        url: '/php/ajax.php',
        data: data,
        success: function (result) {
            if (result.status) {

                popupWrapper.innerHTML = result.html;
                popup.classList.add('active');

                if (!result.timerOff) {
                    let timer = new Timer({
                        endTime: result.endTime,
                        timer: document.querySelector('.timer')
                    }).init();
                }

            } else {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        },
        error: function (result) {
            alert('Что-то пошло не так, попробуйте еще раз!!!');
        }
    });
}

popup.addEventListener('click', function (e) {
    if (e.target.classList.contains('popup__wrapper') || e.target.classList.contains('popup__close-img')) {
        popup.classList.remove('active');
    }
});

document.addEventListener('keydown', function (e) {
    if (e.keyCode == 27) {
        popup.classList.remove('active');
    }
});

$('body').on('change', '.policy__checkbox', function (e) {
    let $this = $(this),
        form = $this.closest('form'),
        submit = form.find('[type=submit]');
    submit.toggleClass('disabled');
});

const tarifs = document.querySelectorAll('.host-tarifs__item');

if (tarifs) {
    for (let i = 0; i < tarifs.length; i++) {
        tarifs[i].addEventListener('click', function (e) {
            e.preventDefault();


            let data = {
                id: this.dataset.id,
                name: this.dataset.name,
                src: this.dataset.src,
                action: 'tarifForm'
            };

            $.ajax({
                dataType: "json",
                type: "POST",
                url: '/php/ajax.php',
                data: data,
                success: function (result) {
                    if (result.status) {
                        popupWrapper.innerHTML = result.html;
                        popup.classList.add('active');

                        $(document.querySelector('.hosting')).validate(
                            {
                                rules: {
                                    name: "required",
                                    tel: "required",
                                    email: "required"
                                },
                                messages: {
                                    name: "Введите ваше Имя",
                                    tel: "Введите ваш  Телефон",
                                    email: "Введите ваш Email"
                                },

                                submitHandler: function (form) {
                                    sendCallorderData(form);
                                },
                                invalidHandler: function (event, validator) {
                                    // debugger;
                                },
                                errorPlacement: function (error, element) {
                                    element[0].placeholder = error[0].innerText;
                                }
                            }
                        );


                    } else {
                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                    }
                },
                error: function (result) {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            });
        })
    }
}

// }());