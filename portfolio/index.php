<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/top2.php' ?>

<!-- main -->
<main class="page page_second">
    <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/aside.php' ?>
    <main class="main">
        <div class="theme">
            <section class="theme-first">
                <div class="container promote-first__wrapper">
                    <div class="theme-first__bread">
                        <div class="bread"><a class="bread__item" href="/">Создание сайтов</a><a
                                    class="bread__item active">Портфолио</a>
                        </div>
                    </div>
                    <h1 class="theme-first__title">СОЗДАДИМ ПРОДАЮЩИЙ САЙТ <br> ПО ВАШЕЙ ТЕМАТИКЕ</h1>
                    <div class="theme-first__subtitle">Комплексный подход к проектированию прототипов и программной<br>разработке,
                        учитывающий особенности Вашего бизнеса
                    </div>
                    <button class="theme-first__button callorderOpen" data-formId="1" type="button">
                        <div class="btn3">
                            <div class="btn3__title">Узнать стоимость создания</div>
                            <div class="btn3__lines">
                                <div class="btn3__line-topRight"></div>
                                <div class="btn3__line-right"></div>
                                <div class="btn3__line-bottomLeft"></div>
                                <div class="btn3__line-left"></div>
                                <div class="btn3__line-topLeft"></div>
                            </div>
                        </div>
                    </button>
                </div>

                <? /*
                <div class="promote-first__calc">
                    <div class="promote-calc__close"></div>
                    <div class="promote-calc__title">сколько стоит<br>продвижение вашего сайта</div>
                    <div class="promote-calc__subtitle">Выберите способ продвижения</div>
                    <div class="promote-calc__form">
                        <form class="form" action="#" method="post">
                            <div class="form__row form__row_2">
                                <div class="form__field2">
                                    <input class="check" type="radio" id="radio0" name="promo" checked value="Продвижение в Яндекс">
                                    <label class="check__label" for="radio0">Продвижение в Яндекс
                                        <div class="check__fake"></div>
                                    </label>
                                </div>
                                <div class="form__field2">
                                    <input class="check" type="radio" id="radio1" name="promo" value="Продвижение в Google">
                                    <label class="check__label" for="radio1">Продвижение в Google
                                        <div class="check__fake"></div>
                                    </label>
                                </div>
                                <div class="form__field2">
                                    <input class="check" type="radio" id="radio2" name="promo" value="Контекстная реклама в Яндекс">
                                    <label class="check__label" for="radio2">Контекстная реклама в Яндекс
                                        <div class="check__fake"></div>
                                    </label>
                                </div>
                                <div class="form__field2">
                                    <input class="check" type="radio" id="radio3" name="promo" value="Контекстная реклама в Google">
                                    <label class="check__label" for="radio3">Контекстная реклама в Google
                                        <div class="check__fake"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="form__row form__row_2">
                                <div class="form__field2">
                                    <input class="check" type="radio" id="radio4" name="promo" value="Реклама в ВКонтакте">
                                    <label class="check__label" for="radio4">Реклама в ВКонтакте
                                        <div class="check__fake"></div>
                                    </label>
                                </div>
                                <div class="form__field2">
                                    <input class="check" type="radio" id="radio5" name="promo" value="Реклама в Instagram">
                                    <label class="check__label" for="radio5">Реклама в Instagram
                                        <div class="check__fake"></div>
                                    </label>
                                </div>
                                <div class="form__field2">
                                    <input class="check" type="radio" id="radio6" name="promo" value="Реклама в Одноклассники">
                                    <label class="check__label" for="radio6">Реклама в Одноклассники
                                        <div class="check__fake"></div>
                                    </label>
                                </div>
                                <div class="form__field2">
                                    <input class="check" type="radio" id="radio7" name="promo" value="Реклама в Facebook">
                                    <label class="check__label" for="radio7">Реклама в Facebook
                                        <div class="check__fake"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="form__field">
                                    <input class="input" type="text" name="words"
                                           placeholder="Кол-во продвигаемых слов">
                                </div>
                                <div class="form__field">
                                    <select class="select" name="region">
                                        <option disabled selected>Регион продвижения</option>
                                        <option>Вариант 1</option>
                                        <option>Вариант 2</option>
                                        <option>Вариант 3</option>
                                    </select>
                                </div>
                                <div class="form__field">
                                    <select class="select" name="thematics">
                                        <option disabled selected>Ваша тематика</option>
                                        <option>Вариант 1</option>
                                        <option>Вариант 2</option>
                                        <option>Вариант 3</option>
                                    </select>
                                </div>
                            </div>
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
                            <button class="form__submit" type="submit">
                                <div class="btn">
                                    <div class="btn__title">Узнать стоимость</div>
                                    <div class="btn__lines">
                                        <div class="btn__line-top"></div>
                                        <div class="btn__line-right"></div>
                                        <div class="btn__line-bottom"></div>
                                        <div class="btn__line-left"></div>
                                    </div>
                                </div>
                            </button>
                            <input type="hidden" name="action" value="calcCostSend">
                        </form>
                    </div>
                </div>
                */ ?>
            </section>
            <div class="container3">
                <section class="theme-iss">
                    <div class="theme-iss__title">Направления в которых у нас есть опыт создания сайтов</div>

                    <? $arr = [
                        'subject' => 'Автосалоны',
                        'avtoservis' => 'Автосервисы',
                        'avtozapchasti' => 'Автозапчасти',
                        'byhgalteriya' => 'Бухгалтерия',
                        'gostinicj-oteli' => 'Гостиницы и отели',
                        'nedvijimost' => 'Недвижимость',
                        'detskie-igrushki' => 'Игрушки',
                        'znakomstva' => 'Сайт знакомств',
                        'jenskaya-tematika' => 'Женская тематика',
                        'clinik' => 'Клиники',
                        'cnigi' => 'Книги',
                        'mebelnji-magazin' => 'Мебельный сайт',
                        'medecinskih-yslyg' => 'Медицинские услуги',
                        'salon-krasotj' => 'Салоны красоты',
                        'svadebnji-salon' => 'Свадебные агентства',
                        'strahovanie' => 'Страхование',
                        'stroitelnaya-tematika' => 'Ремонт квартир',
                        'restoranj' => 'Рестораны',
                        'tyrizm' => 'Туризм',
                        'tyrfirmj' => 'Турфирмы',
                        'uvelirnji-salon' => 'Ювелирные салоны',
                        'magazin-odejdj' => 'Магазин одежда',
                        'orgtehnika' => 'Оргтехника',
                        'uridicheskih-yslyg' => 'Юридические услуги',
                        'gryzoperevozki' => 'Грузоперевозоки',
                        'farmateptika' => 'Фармацевтика',
                        'stomatologiya' => 'Стоматология',
                        'fitnes' => 'Фитнес-клубы',
                        'treningi' => 'Деловые услуги',
                        'banki' => 'Банки',
                        'santehnika' => 'Сантехника',
                        'cvetj' => 'Магазины цветов',
                        'tovarj-dlya-doma' => 'Товары для дома',
                        'stroitelnje' => 'Строительные материалы',
                        'sport-tovarj' => 'Спортивные товары',
                        'zootovarj' => 'Зоотовары'
                    ];

                    asort($arr);
                    $res = array_chunk($arr, 9);

                    ?>

                    <div class="theme-iss__list">
                        <? foreach ($res as $col): ?>
                            <div class="theme-iss__col">
                                <? foreach ($col as $key => $val): ?>
                                    <?
                                    $key = array_search($val, $arr);
                                    $addr = '/portfolio/thematics/' . $key . '/'
                                    ?>
                                    <a class="theme-iss__item" href="<?= $addr ?>"><?= $val ?></a>
                                <? endforeach; ?>
                            </div>
                        <? endforeach; ?>
                        <? /*
                        <div class="theme-iss__col">
                            <a class="theme-iss__item" href="/portfolio/thematics/subject/">Автосалоны</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/avtoservis/">Автосервисы</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/avtozapchasti/">Автозапчасти</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/byhgalteriya/">Бухгалтерия</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/gostinicj-oteli/">Гостиницы и отели</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/nedvijimost/">Недвижимость</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/detskie-igrushki/">Игрушки</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/znakomstva/">Сайт знакомств</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/jenskaya-tematika/">Женская тематика</a>
                        </div>
                        <div class="theme-iss__col">
                            <a class="theme-iss__item" href="/portfolio/thematics/clinik/">Клиники</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/cnigi/">Книги</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/mebelnji-magazin/">Мебельный сайт</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/medecinskih-yslyg/">Медицинские услуги</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/salon-krasotj/">Салоны красоты</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/svadebnji-salon/">Свадебные агентства</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/strahovanie/">Страхование</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/stroitelnaya-tematika/">Ремонт квартир</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/restoranj/">Рестораны</a>
                        </div>
                        <div class="theme-iss__col">
                            <a class="theme-iss__item" href="/portfolio/thematics/tyrizm/">Туризм</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/tyrfirmj/">Турфирмы</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/uvelirnji-salon/">Ювелирные салоны</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/magazin-odejdj/">Магазин одежда</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/orgtehnika/">Оргтехника</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/uridicheskih-yslyg/">Юридические услуги</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/gryzoperevozki/">Грузоперевозоки</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/farmateptika/">Фармацевтика</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/stomatologiya/">Стоматология</a>
                        </div>
                        <div class="theme-iss__col">
                            <a class="theme-iss__item" href="/portfolio/thematics/fitnes/">Фитнес-клубы</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/treningi/">Деловые услуги</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/banki/">Банки</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/santehnika/">Сантехника</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/cvetj/">Магазины цветов</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/tovarj-dlya-doma/">Товары для дома</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/stroitelnje/">Строительные
                                материалы</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/sport-tovarj/">Спортивные товары</a>
                            <a class="theme-iss__item" href="/portfolio/thematics/zootovarj/">Зоотовары</a>
                        </div>
                        */ ?>
                    </div>
                    <!--button.theme-iss__button показать еще-->
                </section>
                <section class="theme-cats">
                    <div class="theme-iss__title">Нам есть чем гордиться</div>
                    <div class="theme-cats__list">
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/project/" title="Интернет-магазин"
                           style="background-color:#363471">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Интернет-магазин</div>
                            <div class="index-cat__item-img">
                                <img class="index-cat__item-pic" src="/images/content/portfolio/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/blacksmith/" title="Корпоративный сайт"
                           style="background-color:#ec3e3e">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Корпоративный сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project2/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/animals/" title="Корпоративный сайт"
                           style="background: #2b7de0">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Корпоративный сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project10/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/balconies/" title="Корпоративный сайт"
                           style="background-color:#26283D">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Корпоративный сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project4/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/bosh/" title="Интернет-магазин"
                           style="background-color:#2c3e50;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Интернет-магазин</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project5/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/vita/" title="Интернет-магазин"
                           style="background-color:#be76dc;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Интернет-магазин</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project7/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/svda/" title="Корпоративный сайт"
                           style="background-color:#21d2d2;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Корпоративный сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project6/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/santehnika/" title="Интернет-магазин"
                           style="background-color: #f8f9fb">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Интернет-магазин</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project9/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/kavkaz/" title="Интернет-магазин"
                           style="background-color:#51e88b;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Интернет-магазин</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project8/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/wood/" title="Корпоративный сайт"
                           style="background-color: #f76904eb;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Корпоративный сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project15/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/invision/" title="Промо-сайт"
                           style="background-color: #232323;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project11/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/gazon/" title="Корпоративный сайт"
                           style="background-color: #009b97">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Корпоративный сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project12/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/biofollica/" title="Промо-сайт"
                           style="background-color: #ffb200">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project13/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/clinic/" title="Корпоративный сайт"
                           style="background-color: #07f507c7">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Корпоративный сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project14/logo.png">
                            </div>
                        </a>
                        <a class="index-cat__item index-cat__item_5" href="/portfolio/akademi/" title="Промо-сайт"
                           style="background-color:#ffdb4d">
                            <div class="proportion proportion_1x1"></div>
                            <div class="index-cat__item-title">Промо-сайт</div>
                            <div class="index-cat__item-img"><img class="index-cat__item-pic"
                                                                  src="/images/content/portfolio/project3/logo.png">
                            </div>
                        </a>
                    </div>
                </section>
                <section class="rek-edge">
                    <div class="edge">
                        <div class="edge__title">Наши преимущества</div>
                        <div class="edge__list">
                            <div class="edge__row">
                                <div class="edge__item">
                                    <div class="edge__desc">
                                        <div class="edge__name">Лидируем в рейтингах<br>надежных исполнителей
                                            <div class="edge__img">
                                                <svg class="promote-edge__svg">
                                                    <use xlink:href="/images/icons/sprite.svg#edge1"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="edge__arrow">
                                            <div class="arrow_black arrow">
                                                <div class="arrow__line"></div>
                                                <div class="arrow__triangle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="edge__item">
                                    <div class="edge__desc">
                                        <div class="edge__name">Имеем опыт в<br>более 350 нишах
                                            <div class="edge__img">
                                                <svg class="promote-edge__svg">
                                                    <use xlink:href="/images/icons/sprite.svg#edge2"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="edge__arrow">
                                            <div class="arrow_black arrow_prev arrow">
                                                <div class="arrow__line"></div>
                                                <div class="arrow__triangle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edge__row">
                                <div class="edge__item">
                                    <div class="edge__desc">
                                        <div class="edge__name">Даем результат<br>быстрее
                                            <div class="edge__img">
                                                <svg class="promote-edge__svg">
                                                    <use xlink:href="/images/icons/sprite.svg#edge3"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="edge__arrow">
                                            <div class="arrow_black arrow">
                                                <div class="arrow__line"></div>
                                                <div class="arrow__triangle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="edge__item">
                                    <div class="edge__desc">
                                        <div class="edge__name">Применяем уникальные<br>технологии
                                            <div class="edge__img">
                                                <svg class="promote-edge__svg">
                                                    <use xlink:href="/images/icons/sprite.svg#edge4"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="edge__arrow">
                                            <div class="arrow_black arrow_prev arrow">
                                                <div class="arrow__line"></div>
                                                <div class="arrow__triangle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="edge__content">
                            <div class="edge__col">
                                Для нас разработка сайта это творческий процесс к которому мы подходим детально и
                                скрупулёзно изучаем
                                нишу клиента. Это очень важный этап в бизнесе любой компании, который позволяет избежать
                                лишнего расхода
                                средств в дальнейшем.
                            </div>
                            <div class="edge__col">
                                Мы не только разрабатываем продающий дизайн, а закладываем функционал для
                                масштабирования проекта в перспективе. Закажите разработку у нас и мы выведем ваш бизнес
                                в интернете на новый уровень.

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <section class="theme-bottom">
                <div class="bottom">
                    <div class="container2">
                        <div class="bottom__rev">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/rev.php'?>
                        </div>
                        <div class="bottom__send">
                            <? include $_SERVER['DOCUMENT_ROOT'].'/pages/blocks/bottom/send.php'?>
                        </div>
                        <div class="bottom__why">
                            <div class="why">
                                <div class="why__img"><img class="why__img-img" src="/images/content/why.png"></div>
                                <div class="why__title"><h2 style="font-size: 57px;font-weight: 300;">Не гонимся за количеством, работаем на результат</h2></div>
                                <div class="why__content">
                                	<p>Мы представляем собой команду специалистов со сложившейся историей и приличным опытом. Наше портфолио выполненных работ содержит проекты из разных сфер деятельности. Мы давно осознали, что настоящий адреналин или удовольствие – это не взять с клиента как можно больше денег, а создать интернет продукт, который действительно будет запоминающимся и выполнять поставленные цели наших клиентов. </p>
                                	<p>Остановиться на достигнутом – это не про нас. Постоянное развитие, усовершенствование навыков и умений, посещение тренингов, конференций и выставок - это наша жизнь.  Все на свете знать нельзя, но мы пытаемся узнать все в сфере Web индустрии и продолжать держать высокую планку качества и результатов. За нашими плечами десятки успешных сайтов абсолютно разной направленности, начиная от простых интернет-магазинов и заканчивая сайтами для крупных корпораций. </p>
                                	<p>Обратившись к нам, вы получите:</p>
                                	<ul>
                                		<li>Индивидуальный подход. Мы не веб студия массового производства сайта. Попросите художника рисовать картины каждый день и это будут уже не творения, которыми будут восхищаться, это будут рядовые работы, которые не оставят следа в памяти. С сайтами аналогично. </li>
                                		<li>Для нас даже недорогой заказ имеет ценность. Выжмем максимум от бюджета. Потому что это интересно с профессиональной точки зрения.</li>
                                		<li>Абсолютно прозрачное ценообразование. Каждая копейка, потраченная вами, отражается в калькуляции.</li>
                                	</ul>
                                	<ul>
                                		<li>У нас свой штат постоянных сотрудников. Дизайнеры, верстальщики, разработчики, SEO оптимизаторы и контент менеджеры. Мы никогда не работали и не работаем с посредниками. Только так мы уверены в качестве наших услуг.</li>
                                		<li>Полностью соблюдаем сроки, прописанные в договоре. Возможно сделать раньше, но не позднее срока, оговоренного с клиентом. </li>
                                	</ul>
									<p>Если вы ещё не знаете, какое именно решение подойдёт для вашей сферы, обратитесь к нам за помощью и мы поможем сориентироваться вам в многообразии Web индустрии.</p>
								</div>
                            </div>
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

<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/bottom.php' ?>
