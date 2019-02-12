<? include $_SERVER['DOCUMENT_ROOT'].'/pages/top.php'?>

<!-- main -->
<main class="page">
    <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/aside.php'?>
    <main class="main">
        <div class="index">
            <div class="container">
                <section class="index-first active-page">
                    <div class="index-first__title">
                        <div class="title">
                            <div class="title__line">
                                <div class="title__text">Cоздаем сайты,</div>
                            </div>
                            <div class="title__line"><span class="title__text title__text_small">которые</span><span class="title__text">продают</span></div>
                        </div>
                    </div>
                    <div class="index-first__image">
                        <div class="proportion proportion_1154x1023"></div>
                        <div class="index-first__img"></div>
                        <div class="index-first__we">
                            <div class="we">
                                <div class="we__title">Мы</div>
                                <button class="we__btn callorderOpen">
                                    <div class="btn">
                                        <div class="btn__title">Заказать сайт</div>
                                        <div class="btn__lines">
                                            <div class="btn__line-top"></div>
                                            <div class="btn__line-right"></div>
                                            <div class="btn__line-bottom"></div>
                                            <div class="btn__line-left"></div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="index-first__test"><a class="test" href="./test.php">
                            <div class="test__percent">15%</div>
                            <div class="test__desc">
                                <div class="test__title">Пройдите тест</div>
                                <div class="test__text">и получите скидку</div>
                            </div></a></div>
                    <div class="index-first__menu">
                        <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/menu.php'?>
                    </div>
                </section>
                <section class="index-about">
                    <div class="index-about__title">
                        <div class="title_small title title_small">
                            <div class="title__line">
                                <div class="title__text">Компания, которая</div>
                            </div>
                            <div class="title__line"><span class="title__text title__text_small">отвечает</span><span class="title__text">за результат</span></div>
                        </div>
                    </div>
                    <div class="index-about__content">
                        <p>
                            Веб студия Web-comp специализируется на профессиональном создании уникальных сайтов на заказ.
                            Команда наших специалистов постоянно следит за появлением новых технологий,
                            которые мы не боимся внедрять в веб проекты, делая их современными и высокотехнологичными.
                        </p>
                        <p>
                            Мы создаем только продающие сайты - это достигается путём детального изучения целевой аудитории,
                            отрисовкой дизайна, проработки юзабилити и настройки технической части.


                        </p>
                    </div>
                    <div class="index-about__image">
                        <div class="figure">
                            <div class="figure__block1"><img class="figure__pic" src="/images/content/about1.png"></div>
                            <div class="figure__block2"><img class="figure__pic" src="/images/content/about2.png"></div>
                            <div class="figure__block3"><img class="figure__pic" src="/images/content/about3.png"></div>
                            <div class="figure__block4"><img class="figure__pic" src="/images/content/about4.png"></div>
                        </div>
                        <div class="index-about__we">
                            <div class="we">
                                <div class="we__title">Мы</div>
                                <a href="#2" class="we__btn nextSection" data-id="2">
                                    <div class="btn">
                                        <div class="btn__title">рассчитать стоимость</div>
                                        <div class="btn__lines">
                                            <div class="btn__line-top"></div>
                                            <div class="btn__line-right"></div>
                                            <div class="btn__line-bottom"></div>
                                            <div class="btn__line-left"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="index-about__menu">
                        <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/menuTop.php'?>
                    </div>
                </section>
                <section id="2" class="index-price">
                    <div class="index-price__title">Сколько стоит сайт?</div>
                    <div class="index-price__subtitle">on-line калькулятор расчета стоимости</div>
                    <div class="index-price__calc">
                        <form class="calc" action="#" method="post">
                            <div class="calc__row">
                                <div class="calc__row-title">Вид проекта</div>
                                <div class="calc__fields">
                                    <div class="calc__field">
                                        <input class="calc__radio" type="radio" id="radio0" name="type" checked>
                                        <label class="calc__label" for="radio0" title="Сайт компании для презентации своих услуг с возможностями взаимодействия с целевой аудиторией">Корпоративный сайт
                                            <div class="calc__radio-fake"></div>
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <input class="calc__radio" type="radio" id="radio1" name="type">
                                        <label class="calc__label" for="radio1" title="Сайт компании для создания имиджа в сети">Сайт-визитка
                                            <div class="calc__radio-fake"></div>
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <input class="calc__radio" type="radio" id="radio2" name="type">
                                        <label class="calc__label" for="radio2" title="Многофункциональная площадка для торговли онлайн">Интернет магазин
                                            <div class="calc__radio-fake"></div>
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <input class="calc__radio" type="radio" id="radio3" name="type">
                                        <label class="calc__label" for="radio3" title="Одностраничный сайт нацеленный на одну группу товаров или услугу">Лендинг
                                            <div class="calc__radio-fake"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="calc__row">
                                <div class="calc__row-title">требуется</div>
                                <div class="calc__fields">
                                    <div class="calc__field">
                                        <input class="calc__checkbox" type="checkbox" id="checkbox0" name="needs">
                                        <label class="calc__label" for="checkbox0" title="Создание привлекательной упаковки для вашего проекта, подчеркнет индивидуальность вашей компании или предложения">Уникальный дизайн
                                            <div class="calc__checkbox-fake"></div>
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <input class="calc__checkbox" type="checkbox" id="checkbox1" name="needs" checked>
                                        <label class="calc__label" for="checkbox1" title="Способность проекта работать на всех видах устройств одинаково хорошо">Адаптивная верстка
                                            <div class="calc__checkbox-fake"></div>
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <input class="calc__checkbox" type="checkbox" id="checkbox2" name="needs" checked>
                                        <label class="calc__label" for="checkbox2" title="Комплекс рекламных услуг нацеленных на привлечение целевой аудитории">Продвижение
                                            <div class="calc__checkbox-fake"></div>
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <input class="calc__checkbox" type="checkbox" id="checkbox3" name="needs">
                                        <label class="calc__label" for="checkbox3" title="Поможем составить правильное техническое задание на создание сайта с учётом современных стандартов и ваших требований к проекту">Разработка тех. задания
                                            <div class="calc__checkbox-fake"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="calc__row">
                                <div class="calc__row-title">Наполнение</div>
                                <div class="calc__fields">
                                    <div class="calc__field">
                                        <label class="calc__label" title="Количество страниц на которые необходимо написать уникальный текст, оформить изображением или отформатировать информацию для размещения на сайте">
                                            <div class="calc__label-title">Кол-во стр:</div>
                                            <input class="calc__input" type="text" name="pages" value="0">
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <label class="calc__label" title="Количество карточек товара необходимых для размещения, включая описание к товару, характеристики, фотографии, цены и др.">
                                            <div class="calc__label-title">Кол-во товаров:</div>
                                            <input class="calc__input" type="text" name="products" value="0">
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <label class="calc__label" title="Дополнительная отрисовка баннеров, для рекламных акций или вплывающих окон">
                                            <div class="calc__label-title">Доп. баннеры:</div>
                                            <input class="calc__input" type="text" name="words" value="130">
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <label class="calc__label" title="Обработка изображения для размещения на сайте">
                                            <div class="calc__label-title">Обработка изображений:</div>
                                            <input class="calc__input" type="text" name="photos" value="0">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="calc__row">
                                <div class="calc__row-title calc__row-title_white">Срочность</div>
                                <div class="calc__fields">
                                    <div class="calc__field calc__field_2">
                                        <label class="calc__label calc__label_middle">
                                            <input class="calc__range" type="range" name="range" min="1" max="100" value="12">
                                            <div class="calc__range-title"><span class="calc__range-val">12</span><span class="calc__range-text"> месяцев</span></div>
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <input class="calc__checkbox" type="checkbox" id="urgency1" name="urgency">
                                        <label class="calc__label" for="urgency1">У нас есть фир. стиль
                                            <div class="calc__checkbox-fake"></div>
                                        </label>
                                    </div>
                                    <div class="calc__field">
                                        <input class="calc__checkbox" type="checkbox" id="urgency2" name="urgency">
                                        <label class="calc__label" for="urgency2">Нужно подобрать домен
                                            <div class="calc__checkbox-fake"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="calc__row calc__row_bottom">
                                <div class="calc__fields calc__fields_2">
                                    <div class="calc__field2">
                                        <input class="calc__personal" type="text" name="name" placeholder="Имя">
                                    </div>
                                    <div class="calc__field2">
                                        <input class="calc__personal" type="tel" name="tel" placeholder="Телефон">
                                    </div>
                                    <div class="calc__field2">
                                        <input class="calc__personal" type="email" name="email" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="calc__row">
                                <div class="calc__fields">
                                    <div class="calc__field calc__field_3">
                                        <div class="policy">
                                            <input class="check policy__checkbox" type="checkbox" id="policy" name="promo" checked>
                                            <label class="check__label" for="policy">
                                                <a target="_blank" href="/policy.php" class="policy__link">
                                                    Я даю согласие на обработку моих персональных данный
                                                </a>
                                                <div class="check__fake policy__fake"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="calc__button">
                                <button type="submit">
                                    <div class="btn">
                                        <div class="btn__title">Рассчитать стоимость</div>
                                        <div class="btn__lines">
                                            <div class="btn__line-top"></div>
                                            <div class="btn__line-right"></div>
                                            <div class="btn__line-bottom"></div>
                                            <div class="btn__line-left"></div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="index-price__menu">
                        <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/menuTop.php'?>
                    </div>
                </section>
                <section class="index-cat">
                    <div class="index-cat__title">Нам есть чем гордиться</div>
                    <div class="index-cat__subtitle">Не гонимся за количеством, работаем на результат</div>
                    <div class="index-cat__list">
                        <a class="index-cat__item" href="/portfolio/project.php" title="Промо-сайт" style="background-color:#363471">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img">
                                <img class="index-cat__item-pic" src="/images/content/portfolio/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item" href="/portfolio/blacksmith.php" title="Промо-сайт" style="background-color:#050A15">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic" src="/images/content/portfolio/project2/logo.png"></div></a>
                        <a class="index-cat__item" href="/portfolio/akademi.php" title="Промо-сайт" style="background-color:#353535">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic" src="/images/content/portfolio/project3/logo.png"></div></a>
                        <a class="index-cat__item" href="/portfolio/balconies.php" title="Промо-сайт" style="background-color:#26283D">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic" src="/images/content/portfolio/project4/logo.png"></div></a>
                        <a class="index-cat__item" href="/portfolio/bosh.php" title="Промо-сайт" style="background-color:#2c3e50">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic" src="/images/content/portfolio/project5/logo.png"></div></a>
                        <a class="index-cat__item" href="/portfolio/svda.php" title="Промо-сайт" style="background-color:#252525;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic" src="/images/content/portfolio/project6/logo.png"></div></a>
                        <a class="index-cat__item" href="/portfolio/vita.php" title="Промо-сайт" style="background-color:#f9f9fa">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic" src="/images/content/portfolio/project7/logo.png"></div></a>
                        <a class="index-cat__item" href="/portfolio/kavkaz.php" title="Промо-сайт" style="background-color:#1D1D1D">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic" src="/images/content/portfolio/project8/logo.png"></div></a>

                        <a href="/portfolio.php" class="index-cat__link"></a>
                    </div>
                    <div class="index-cat__menu">
                        <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/menuTop.php'?>
                    </div>
                </section>
                <section class="index-seo">
                    <div class="index-seo__title">
                        <div class="title title_small">
                            <div class="title__line">
                                <div class="title__text">Хотите сайт в топе?</div>
                            </div>
                            <div class="title__line"><span class="title__text title__text_small">мы знаем</span><span class="title__text">как это сделать</span></div>
                        </div>
                    </div>
                    <form class="index-seo__form" action="#" method="#">
                        <div class="index-seo__items">
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="автосервис">
                                    <div class="index-seo__item-title">Автосервис</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="автозапчасти">
                                    <div class="index-seo__item-title">Автозапчасти</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="бухгалтерские услуги">
                                    <div class="index-seo__item-title">Бухгалтерские услуги</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="оргтехника">
                                    <div class="index-seo__item-title">Оргтехника</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="клининговая компания">
                                    <div class="index-seo__item-title">Клининговая компания</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="ювелирный магазин" checked>
                                    <div class="index-seo__item-title">Ювелирный магазин</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="мед. клиника">
                                    <div class="index-seo__item-title">Мед. клиника</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="недвижимость">
                                    <div class="index-seo__item-title">Недвижимость</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="мебельный магазин">
                                    <div class="index-seo__item-title">Мебельный магазин</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="салон красоты">
                                    <div class="index-seo__item-title">Салон красоты</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="ремонтные услуги">
                                    <div class="index-seo__item-title">Ремонтные услуги</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="строительная компания">
                                    <div class="index-seo__item-title">Строительная компания</div>
                                </label>
                            </div>
                            <div class="index-seo__item">
                                <label class="index-seo__label">
                                    <input class="index-seo__input" type="radio" name="seo" value="другое">
                                    <div class="index-seo__item-title">Другое</div>
                                </label>
                            </div>
                        </div>
                        <div class="index-seo__button">
                            <input type="hidden" name="action" value="pushForm">
                            <button class="index-seo__submit pushOpen" type="submit">
                                <div class="btn">
                                    <div class="btn__title">заказать продвижение</div>
                                    <div class="btn__lines">
                                        <div class="btn__line-top"></div>
                                        <div class="btn__line-right"></div>
                                        <div class="btn__line-bottom"></div>
                                        <div class="btn__line-left"></div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </form>
                    <div class="index-seo__menu">
                        <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/menuTop.php'?>
                    </div>
                </section>
                <section class="index-bottom">
                    <div class="index-bottom__menu">
                        <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/menuTop.php'?>
                    </div>
                    <div class="index-bottom__wrapper">
                        <div class="index__best">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/best.php'?>
                        </div>
                        <div class="index__rev">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/rev.php'?>
                        </div>
                        <div class="index__blog">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/blog.php'?>
                        </div>
                        <div class="index__work">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/work.php'?>
                        </div>
                        <div class="index__send">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/send.php'?>
                        </div>
                        <div class="index__why">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/why.php'?>
                        </div>
                        <div class="index__footer">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/footer.php'?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/pagination.php'?>
</main>
<!-- END main -->

<? include $_SERVER['DOCUMENT_ROOT'].'/pages/bottom.php'?>
