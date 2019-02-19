(function () {

    let confirm = document.querySelector('.banner-send__confirm');

    $('.banner-send__form').validate(
        {
            rules: {
                email: "required"
            },
            messages: {
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
                            typeConfirmText('Ожидайте новостей на указанную почту');
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
            }
        }
    );



    function typeConfirmText(text) {
        let textArr = text.split(''),
            count = 1;

        let confirmInterval = setInterval(function () {
            let symbols = text.slice(0,count);

            if (count<textArr.length+1) {
                confirm.innerText = symbols;
                count++;
            } else {
                clearInterval(confirmInterval);
            }

        }, 200)


    }


}());