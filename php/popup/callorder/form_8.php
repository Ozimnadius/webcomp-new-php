<div class="callorder">
    <form class="callorder__form form" action="#" method="post">
        <div class="callorder__title">Ответим на ваши вопросы</div>
        <div class="callorder__subtitle">Предоставим развернутый ответ на интересующие Вас вопросы</div>
        <div class="form__row">
            <div class="form__field">
                <input class="input" type="text" name="name" placeholder="Имя">
            </div>
            <div class="form__field">
                <input class="input" type="tel" name="tel" placeholder="Телефон">
            </div>
            <div class="form__field">
                <input class="input" type="email" name="email" placeholder="E-mail">
            </div>
        </div>
        <div class="form__row">
            <div class="form__field form__field_3">
                <textarea name="description" class="input input_area" placeholder="Напишите свой вопрос"></textarea>
            </div>
        </div>
        <div class="form__row">
            <div class="form__field form__field_3">
                <div class="policy">
                    <input class="check policy__checkbox" type="checkbox" id="policy" name="promo" checked>
                    <label class="check__label" for="policy">
                        <a target="_blank" href="/policy/" class="policy__link">
                            Я даю согласие на обработку моих персональных данный
                        </a>
                        <div class="check__fake policy__fake"></div>
                    </label>
                </div>
            </div>
        </div>
        <input type="hidden" name="action" value="callorderDataSend">
        <button class="form__submit callorder__submit" type="submit">
            <div class="btn">
                <div class="btn__title">Отправить</div>
                <div class="btn__lines">
                    <div class="btn__line-top"></div>
                    <div class="btn__line-right"></div>
                    <div class="btn__line-bottom"></div>
                    <div class="btn__line-left"></div>
                </div>
            </div>
        </button>
    </form>
</div>