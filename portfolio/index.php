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
                    <div class="theme-first__title">Мы создадим продающий сайт<br>по вашей тематике</div>
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
                <section class="theme-price">
                    <h1 class="theme-price__title">Цены на создание сайтов</h1>
                    <div class="theme-price__switches">
                        <div class="theme-price__switches-list">
                            <button class="active theme-price__switch" data-id="1"><span
                                        class="theme-price__switch-title">Корпоративный сайт</span></button>
                            <button class="theme-price__switch" data-id="2"><span class="theme-price__switch-title">Интернет-магазин</span>
                            </button>
                            <button class="theme-price__switch" data-id="3"><span class="theme-price__switch-title">Лендинг</span>
                            </button>
                            <button class="theme-price__switch" data-id="4"><span class="theme-price__switch-title">Промосайт</span>
                            </button>
                            <button class="theme-price__switch" data-id="5"><span class="theme-price__switch-title">Сайт-визитка</span>
                            </button>
                        </div>
                        <div class="theme-price__line">
                            <div class="theme-price__subline"></div>
                        </div>
                    </div>
                    <div class="theme-price__tabs">
                        <div class="active theme-price__tab" data-id="1">
                            <div class="theme-price__list">
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Креативный сайт</div>
                                        <div class="theme-price__item-price">10 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) страниц — 5
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Типовой сайт</div>
                                        <div class="theme-price__item-price">7 000 Р / 2 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) страниц — 1
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">5 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во простых страниц — 5</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">5 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во простых страниц — 5</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 10 дней</div>
                                        <div class="theme-price__item-text">Верстка страниц — 10</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">3 000 Р / 5 дней</div>
                                        <div class="theme-price__item-text">Верстка страниц — 6</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 10</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 5 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 6</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Анализ конкурентов — <b>Включено</b>
                                            </div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Написание подробного тех.задания — <b>5
                                                    000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>3000 Р</b></div>
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Анализ конкурентов — <b>Включено</b>
                                            </div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Написание подробного тех.задания — <b>2
                                                    000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>3000 Р</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">163 500 Р</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">79 500 Р</div>
                                    </div>
                                </div>
                            </div>
                            <button class="theme-price__button button button_red callorderOpen" type="button">Получить
                                индивидуальный расчет
                            </button>
                        </div>
                        <div class="theme-price__tab" data-id="2">
                            <div class="theme-price__list">
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Креативный сайт</div>
                                        <div class="theme-price__item-price">10 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) страниц — 5
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Типовой сайт</div>
                                        <div class="theme-price__item-price">7 000 Р / 2 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) страниц — 1
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">5 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во простых страниц — 5</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">5 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во простых страниц — 5</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 10 дней</div>
                                        <div class="theme-price__item-text">Верстка страниц — 10</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">3 000 Р / 5 дней</div>
                                        <div class="theme-price__item-text">Верстка страниц — 6</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">6 000 Р / 10 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 10</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">6 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 6</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Анализ конкурентов — <b>Включено</b>
                                            </div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Написание подробного тех.задания — <b>5
                                                    000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>4200 Р</b></div>
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Анализ конкурентов — <b>Включено</b>
                                            </div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Написание подробного тех.задания — <b>5
                                                    000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>4200 Р</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">184 700 Р</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">95 700 Р</div>
                                    </div>
                                </div>
                            </div>
                            <button class="theme-price__button button button_red callorderOpen" type="button">Получить
                                индивидуальный расчет
                            </button>
                        </div>
                        <div class="theme-price__tab" data-id="3">
                            <div class="theme-price__list">
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Продающий лендинг с системой управления
                                        </div>
                                        <div class="theme-price__item-price">35 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) блоков — до 15
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Продающий лендинг</div>
                                        <div class="theme-price__item-price">35 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) блоков — до 15
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">15 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Верстка</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">15 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Верстка</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">20 000 Р / 10 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 10</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price"></div>
                                        <div class="theme-price__item-text"></div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Маркетинговое исследование — <b>10 000
                                                    Р</b></div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Прототипирование — <b>5 000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>2280 Р</b></div>
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Маркетинговое исследование — <b>10 000
                                                    Р</b></div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Прототипирование — <b>5 000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>2280 Р</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">87 780 Р</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">67 780 Р</div>
                                    </div>
                                </div>
                            </div>
                            <button class="theme-price__button button button_red callorderOpen" type="button">Получить
                                индивидуальный расчет
                            </button>
                        </div>
                        <div class="theme-price__tab" data-id="4">
                            <div class="theme-price__list">
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Креативный сайт</div>
                                        <div class="theme-price__item-price">10 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) страниц — 5
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Типовой сайт</div>
                                        <div class="theme-price__item-price">7 000 Р / 2 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) страниц — 1
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во простых страниц — 5</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 4 дней</div>
                                        <div class="theme-price__item-text">Кол-во простых страниц — 4</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 10 дней</div>
                                        <div class="theme-price__item-text">Верстка страниц — 10</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">3 000 Р / 5 дней</div>
                                        <div class="theme-price__item-text">Верстка страниц — 5</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">3 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 10</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">2 000 Р / 5 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 5</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Анализ конкурентов — <b>Включено</b>
                                            </div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Написание подробного тех.задания — <b>5
                                                    000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>3000 Р</b></div>
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Анализ конкурентов — <b>Включено</b>
                                            </div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>2280 Р</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">148 500 Р</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">50 780 Р</div>
                                    </div>
                                </div>
                            </div>
                            <button class="theme-price__button button button_red callorderOpen" type="button">Получить
                                индивидуальный расчет
                            </button>
                        </div>
                        <div class="theme-price__tab" data-id="5">
                            <div class="theme-price__list">
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Креативный сайт</div>
                                        <div class="theme-price__item-price">10 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) страниц — 5
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-title">Типовой сайт</div>
                                        <div class="theme-price__item-price">7 000 Р / 2 дней</div>
                                        <div class="theme-price__item-text">Кол-во креативных (сложных) страниц — 1
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price"></div>
                                        <div class="theme-price__item-text"></div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 7 дней</div>
                                        <div class="theme-price__item-text">Кол-во простых страниц — 3</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">4 000 Р / 5 дней</div>
                                        <div class="theme-price__item-text">Верстка страниц — 5</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">3 000 Р / 3 дней</div>
                                        <div class="theme-price__item-text">Верстка страниц — 4</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">3 000 Р / 5 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 5</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">2 000 Р / 3 дней</div>
                                        <div class="theme-price__item-text">Програмная часть страниц — 4</div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Анализ конкурентов — <b>Включено</b>
                                            </div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Написание подробного тех.задания — <b>5
                                                    000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>3000 Р</b></div>
                                        </div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__item-price">+</div>
                                        <div class="theme-price__item-list">
                                            <div class="theme-price__item-li">Анализ конкурентов — <b>Включено</b>
                                            </div>
                                            <div class="theme-price__item-li">Адаптивная верстка — <b>Включено</b></div>
                                            <div class="theme-price__item-li">Написание подробного тех.задания — <b>5
                                                    000 Р</b></div>
                                            <div class="theme-price__item-li">Регистрация домена — <b>500 Р</b></div>
                                            <div class="theme-price__item-li">Хостинг 12 мес.— <b>2280 Р</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-price__row">
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">93 500 Р</div>
                                    </div>
                                    <div class="theme-price__item">
                                        <div class="theme-price__price">46 780 Р</div>
                                    </div>
                                </div>
                            </div>
                            <button class="theme-price__button button button_red callorderOpen" type="button">Получить
                                индивидуальный расчет
                            </button>
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
                                <div class="why__title"><h2 style="font-size: 57px;font-weight: 300;">Цены на создание сайтов</h2></div>
                                <div class="why__content">
                                    <p>Создание представительства своей фирмы в сети – неизбежный шаг, с которым сегодня сталкивается любая развивающаяся компания и многих будущих заказчиков, интересуют цены на создание собственного ресурса и сроки реализации проекта.</p>
                                    <p>Цена на создание сайта зависит от множества параметров, таких как: структура сайта, дизайн главной и отдельных страниц, функционал, объем размещаемой информации. Все детали необходимо обсудить перед началом создания сайта, если вам необходима качественная разработка по приемлемым ценам, тогда студия WEB-COMP – это ваш выбор.</p>
									<h2>Из чего складывает цена разработки</h2>
									<p>В сети часто встречаются предложения от независимых разработчиков, которые обещают за небольшую сумму в 30 - 50 тысяч рублей реализовать проект. Если дело касается шаблонного сайта, то такие предложения могут иметь место. Шаблонные сайты могут подойти только тем компаниям, которые не планируют привлекать рекламный трафик из поиска. Связанно это с тем, что поисковые системе крайне негативно относятся к высокому ранжированию шаблонных сайтов. Задача поисковых систем, сделать результаты выдачи разнообразной, ввиду этого нет смысла показывать ресурс, который повторяет уже существующий. И поэтому продвижение шаблонного сайта всегда долго и требует больших затрат.</p>
									<p>Мы рекомендуем разрабатывать индивидуальный проекты, и реализовывать на сайте свою идею бизнеса. Такие проекты не будут похожи на другие сайты и будет выделять вашу компанию среди остальных. Следует понимать, что для такого подхода к делу, нужна целая команда специалистов, соответственно, стоить это будет никак не 20-30 тысяч рублей. Особенно если специалисты имеют большой опыт и уже имеют понимание nxj нужно сделать для получения результата. Поэтому, когда речь идёт о низкобюджетных сайтах, вы можете сами предположить, какой результат вы получите в итоге. В нашей студии идёт чёткое соответствие цена-качество без лишних переплат.</p>
									<h3>Проекты различной сложности</h3>
									<p>Стоимость создания сайта зависит от множества параметров, в число которых входит:</p>
									<ul>
										<li>Разработка индивидуального дизайна;</li>
										<li>Использование многофункциональной CMS (системы управления контентом), подходящего для вашего ресурса;</li>
										<li>Набор программных блоков;</li>
										<li>Наполнение сайта;</li>
										<li>Адаптация под мобильные устройства;</li>
										<li>SEO оптимизация и многое другое.</li>
									</ul>
									<p>Специалисты нашей компании готовы разработать функциональный и красивый интернет-ресурс стоимостью от 100 000 рублей. При этом цена может, как повыситься, так и снизиться в зависимости от требований заказчика.</p>
									<p>Крупные проекты, требующие тщательной проработки и индивидуальных решений, обговариваются отдельно. Как правило, такие порталы предусматривают большое количество уникальных страниц и разработку яркого и оригинального дизайна.</p>
									<h3>Достоинства WEB-COMP</h3>
									<p>В нашей команде работают сертифицированные специалисты с большим опытом работы в разных нишах и тематиках. Мы одна из самых честных компании, которая делает взаимодействие максимально прозрачным. Мы сознательно не завышаем цены на наши услуги и при этом готовы работать на результат. Если вас интересует стоимость создания сайта под ключ, ознакомиться с предварительными расценками на этой станице и обратитесь к нам в студию для индивидуального расчёта. Разработчики нашей студии ориентированы на удовлетворение требований заказчика и мы всегда стремимся качественно выполнить свою работу. Все заказы реализуются точно в срок.</p>
									<p>Предлагаем познакомиться с нашим портфолио, чтобы убедиться в профессионализме нашей команды. Звоните нам по телефону или оставляйте сообщение на сайте через форму обратной связи. Мы с радостью ответят на ваши вопросы! </p>
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
