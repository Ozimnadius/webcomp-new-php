<? include $_SERVER['DOCUMENT_ROOT'].'/pages/top2.php'?>

<!-- main -->
<main class="page page_second">
    <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/aside.php'?>
    <main class="main">
        <div class="conts">
            <div class="container3">
                <section class="conts-first">
                    <div class="conts-first__addr">109382, г. Москва, ул. Нижние Поля, 3</div>
                    <div class="conts-first__list"><a class="conts-first__item" href="tel:8(800)333-45-98">8 (800) 333-45-98</a><a class="conts-first__item" href="tel:+7(495)150-45-98">+7 (495) 150-45-98</a><a class="conts-first__item">Пн–Пт с 10:00 до 19:00</a>
                    </div>
                    <div class="conts-first__pins">
                        <button class="conts-first__pin" type="button">
                            <svg class="conts-first__pin-svg">
                                <use xlink:href="/images/icons/sprite.svg#tel"></use>
                            </svg>
                            <div class="conts-first__pin-title">Заказать звонок</div>
                        </button>
                        <button class="conts-first__pin" type="button">
                            <svg class="conts-first__pin-svg">
                                <use xlink:href="/images/icons/sprite.svg#question"></use>
                            </svg>
                            <div class="conts-first__pin-title">Задать вопрос</div>
                        </button><a class="conts-first__pin" href="#">
                            <svg class="conts-first__pin-svg">
                                <use xlink:href="/images/icons/sprite.svg#pin"></use>
                            </svg>
                            <div class="conts-first__pin-title">м. Марьино</div></a>
                    </div>
                </section>
                <section class="conts-map">
                    <div class="conts-map__container">
                        <button class="conts-map__button button" type="button">показать на карте</button>
                    </div>
                    <div class="conts-map__map">
                        <button class="conts-map__close" type="button"></button>
                        <div class="conts-map__wrap">
                            <iframe src="https://snazzymaps.com/embed/120408" width="100%" height="100%" style="border:none;"></iframe>
                        </div>
                    </div>
                </section>
            </div>
            <section class="contacts-bottom">
                <div class="bottom">
                    <div class="container2">
                        <div class="bottom__send">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/send.php'?>
                        </div>
                        <div class="bottom__footer">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/footer.php'?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</main>
<!-- END main -->

<? include $_SERVER['DOCUMENT_ROOT'].'/pages/bottom.php'?>
