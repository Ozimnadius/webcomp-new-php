<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/top2.php' ?>

<!-- main -->
<main class="page page_second">
    <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/aside.php' ?>
    <main class="main">
        <div class="conts">
            <div class="container3">
                <section class="conts-first">
                    <div class="conts-first__addr">109382, г. Москва, ул. Нижние Поля, 31</div>
                    <div class="conts-first__list">
                        <a class="conts-first__item" href="mailto:info@web-comp.ru">info@web-comp.ru</a>
                        <a class="conts-first__item" href="tel:+7(495)150-45-98">+7 (495) 150-45-98</a>
                        <a class="conts-first__item">Пн–Пт с 9:00 до 18:00</a>
                    </div>
                    <div class="conts-first__pins">
                        <button class="conts-first__pin callorderOpen" data-formId="5" type="button">
                            <svg class="conts-first__pin-svg">
                                <use xlink:href="/images/icons/sprite.svg#tel"></use>
                            </svg>
                            <div class="conts-first__pin-title">Заказать звонок</div>
                        </button>
                        <button class="conts-first__pin callorderOpen" data-formId="8" type="button">
                            <svg class="conts-first__pin-svg">
                                <use xlink:href="/images/icons/sprite.svg#question"></use>
                            </svg>
                            <div class="conts-first__pin-title">Задать вопрос</div>
                        </button>
                        <a target="_blank" class="conts-first__pin" href="https://goo.gl/maps/ToWQuJwyTNs">
                            <svg class="conts-first__pin-svg">
                                <use xlink:href="/images/icons/sprite.svg#pin"></use>
                            </svg>
                            <div class="conts-first__pin-title">м. Марьино</div>
                        </a>
                    </div>
                </section>
                <section class="conts-map">
                    <div class="conts-map__container">
                        <button class="conts-map__button button" type="button">показать на карте</button>
                    </div>
                    <div class="conts-map__map open">
                        <h2 class="conts-map__title">Схема проезда</h2>
                        <button class="conts-map__close" type="button"></button>
                        <div class="conts-map__wrap">
                            <!--                            <iframe src="https://snazzymaps.com/embed/120408" width="100%" height="100%" style="border:none;"></iframe>-->
                            <iframe src="https://snazzymaps.com/embed/148718" width="100%" height="100%"
                                    style="border:none;"></iframe>
                        </div>
                    </div>
                </section>

                <div class="conts-det">
                    <h3 class="conts-det__title">Реквизиты</h3>
                    <div class="conts-det__row">
                        <div class="conts-det__col">
                            <ul class="conts-det__ul">
                                <li class="conts-det__li">
                                    <span class="conts-det__name">Юридический адрес: </span><br>
                                    <span class="conts-det__val">109382, г. Москва, ул. Нижние Поля, 31, 4 этаж</span>
                                </li>
                                <li class="conts-det__li">
                                    <span class="conts-det__name">Р/с: </span>
                                    <span class="conts-det__val">40702810419000000002</span>
                                </li>
                                <li class="conts-det__li">
                                    <span class="conts-det__name">Банк: </span>
                                    <span class="conts-det__val">ВТБ (ПАО) г. МОСКВА </span>
                                </li>
                                <li class="conts-det__li">
                                    <span class="conts-det__name">БИК: </span>
                                    <span class="conts-det__val">044525745</span>
                                </li>
                            </ul>
                        </div>
                        <div class="conts-det__col">
                            <ul class="conts-det__ul">
                                <li class="conts-det__li">
                                    <span class="conts-det__name">К/с: </span>
                                    <span class="conts-det__val">30101810345250000745</span>
                                </li>
                                <li class="conts-det__li">
                                    <span class="conts-det__name">ИНН: </span>
                                    <span class="conts-det__val">7723497066</span>
                                </li>
                                <li class="conts-det__li">
                                    <span class="conts-det__name">КПП: </span>
                                    <span class="conts-det__val">772301001</span>
                                </li>
                                <li class="conts-det__li">
                                    <span class="conts-det__name">ОГРН: </span>
                                    <span class="conts-det__val">5167746475969</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <section class="contacts-bottom">
                <div class="bottom">
                    <div class="container2">
                        <div class="bottom__send">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/bottom/send.php' ?>
                        </div>
                        <div class="bottom__footer">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/bottom/footer.php' ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</main>
<!-- END main -->

<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/bottom.php' ?>
