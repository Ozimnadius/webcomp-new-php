<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/top2.php' ?>

<!-- main -->
<main class="page page_second">
    <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/aside.php' ?>
    <main class="main">
        <div class="conts">
            <div class="container">
                <div class="conts__bread">
                    <div class="bread">
                        <a class="bread__item" href="/">Создание сайтов</a>
                        <h1 class="bread__item active">Контакты</h1>
                    </div>
                </div>
            </div>

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
                        <div class="conts-map__buttons">
                            <button type="button" class="conts-map__button2" data-id="map-google">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                                        c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                                        C103.821,274.792,107.225,292.797,113.47,309.408z"/>
                                    <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                                        c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                                        c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
                                    <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                                        c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                                        c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
                                    <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                                        c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                                        C318.115,0,375.068,22.126,419.404,58.936z"/>
                                </svg>
                            </button>
                            <button type="button" class="conts-map__button2" data-id="map-yandex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path style="fill:#D7143A;" d="M363.493,0h-72.744C217.05,0,142.684,54.422,142.684,176.006c0,62.978,26.691,112.027,75.619,139.922
                                    l-89.552,162.091c-4.246,7.666-4.357,16.354-0.298,23.24c3.963,6.725,11.21,10.741,19.378,10.741h45.301
                                    c10.291,0,18.315-4.974,22.163-13.688L299.26,334.08h6.128v157.451c0,11.096,9.363,20.469,20.446,20.469h39.574
                                    c12.429,0,21.106-8.678,21.106-21.104V22.403C386.516,9.213,377.05,0,363.493,0z M305.388,261.126h-10.81
                                    c-41.915,0-66.938-34.214-66.938-91.523c0-71.259,31.61-96.648,61.194-96.648h16.554V261.126z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="conts-map__wraps">
                            <div id="map-google" class="conts-map__wrap active">
                                <!--                            <iframe src="https://snazzymaps.com/embed/120408" width="100%" height="100%" style="border:none;"></iframe>-->
                                <iframe src="https://snazzymaps.com/embed/148718" width="100%" height="100%"
                                        style="border:none;"></iframe>
                            </div>
                            <div class="conts-map__wrap" id="map-yandex">

                            </div>
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
