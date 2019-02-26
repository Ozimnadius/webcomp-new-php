$('.form').each(function (indx, elem) {
    $(elem).validate(
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
                form.reset();
            },
            invalidHandler: function (event, validator) {
                // debugger;
            },
            errorPlacement: function (error, element) {
                element[0].placeholder = error[0].innerText;
                // debugger;
            }
        }
    );
});

$('.calc').validate(
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
            let data = $(form).serialize();


            $.ajax({
                dataType: "json",
                type: "POST",
                url: '/php/ajax.php',
                data: data,
                success: function (result) {
                    if (result.status) {
                        form.reset();
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

        },
        invalidHandler: function (event, validator) {
            // debugger;
        },
        errorPlacement: function (error, element) {
            element[0].placeholder = error[0].innerText;
            // debugger;
        }
    }
);

let smmForm = $('.smm-calc__form form');

if (smmForm.length > 0) {
    smmForm.validate().destroy();
    smmForm.validate(
        {
            rules: {
                name: "required",
                tel: "required"
            },
            messages: {
                name: "Введите ваше Имя",
                tel: "Введите ваш  Телефон"
            },

            submitHandler: function (form) {
                sendCallorderData(form);
                form.reset();
            },
            invalidHandler: function (event, validator) {
                // debugger;
            },
            errorPlacement: function (error, element) {
                element[0].placeholder = error[0].innerText;
                // debugger;
            }
        }
    );
}

let siteForm = $('.site-cost__form');

if (siteForm.length > 0) {
    siteForm.validate().destroy();
    siteForm.validate(
        {
            rules: {
                name: "required",
                tel: "required"
            },
            messages: {
                name: "Введите ваше Имя",
                tel: "Введите ваш  Телефон"
            },

            submitHandler: function (form) {

                // let data = $(form).serialize();
                let data = getFormData(form);

                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: '/php/ajax.php',
                    data: data,
                    // cache: false,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        if (result.status) {
                            form.reset();
                            getTimerForm();
                        } else {
                            alert('Что-то пошло не так, попробуйте еще раз!!!');
                        }
                    },
                    error: function (result) {
                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                    }
                });
            },
            invalidHandler: function (event, validator) {
                // debugger;
            },
            errorPlacement: function (error, element) {
                element[0].placeholder = error[0].innerText;
                // debugger;
            }
        }
    );
}

function getFormData(form) {

    let $form = $(form),
        formData = new FormData();

    $.each($form.find('input, textarea, select').not('[type="select-one"]'), function (i, field) {
        let $field = $(field),
            type = field.type,
            name = field.name,
            value = '';
        
        if (type=='file') {
            value = field.files[0];
        } else {
            value = field.value;
        }
        formData.append(name, value);
    });

    return formData;
}

let testForm = $('.testing__form');

if (testForm.length > 0) {

    $('.testing__radio').on('click', function (e) {
        let $this = $(this),
            slide = $this.closest('.testing__slide'),
            nextButton = slide.find('.testing__slide-next'),
            submitButton = slide.find('.testing__slide-submit');
        nextButton.removeClass('disabled');
        submitButton.removeClass('disabled');
    });

    testForm.validate().destroy();
    testForm.validate(
        {
            rules: {
                name: "required",
                tel: "required"
            },
            messages: {
                name: "Введите ваше Имя",
                tel: "Введите ваш  Телефон"
            },

            submitHandler: function (form) {

                let data = $(form).serialize();

                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: '/php/ajax.php',
                    data: data,
                    success: function (result) {
                        if (result.status) {
                            popupWrapper.innerHTML = result.html;
                            popup.classList.add('active');
                            $('.testing__form2').validate(
                                {
                                    rules: {
                                        email: "required"
                                    },
                                    messages: {
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
            },
            invalidHandler: function (event, validator) {
                // debugger;
            },
            errorPlacement: function (error, element) {
                element[0].placeholder = error[0].innerText;
                // debugger;
            }
        }
    );

}



