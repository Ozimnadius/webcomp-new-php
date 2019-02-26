<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/top2.php' ?>
<? $slides = [
    [
        'desc' => 'Лидер на рынке электронных книг: Россия, СНГ',
        'goal' => 'Проведение SEO кампании с целью повышения известности и узнаваемости бренда',
        'logo' => '/images/content/promote/logo1.png',
        'time' => 2000,
        'numbers' => [
            'Рост целевых посетителей' => ['val' => 48, 'type' => '%'],
            'Рост заявок за 12 месяцев' => ['val' => 32, 'type' => '%'],
            'Запросов в ТОП-3' => ['val' => 50, 'type' => '%'],
            'Увеличение дохода за 12 месяцев' => ['val' => 32, 'type' => '%']
        ]
    ],
    [
        'desc' => 'Розничная и оптовая продажа кондитерских аксессуаров ',
        'goal' => 'Поиск дополнительных источников продаж в интернете, увеличение заявок по SEO направлению, усиление потока клиентов в офлайн точки',
        'logo' => '/images/content/promote/logo2.png',
        'time' => 2000,
        'numbers' => [
            'Рост целевых посетителей' => ['val' => 74, 'type' => '%'],
            'Рост заявок за 12 месяцев' => ['val' => 160, 'type' => '%'],
            'Запросов в ТОП-3' => ['val' => 62, 'type' => '%'],
            'Увеличение дохода за 12 месяцев' => ['val' => 58, 'type' => '%']
        ]
    ],
    [
        'desc' => 'Продажа запчастей для снегоходов по всей России',
        'goal' => 'Увеличение объёма продаж по Москве на 30 % за 6 месяцев. Расширение рекламы в регионах. Тестирование дополнительных источников трафика',
        'logo' => '/images/content/promote/logo3.png',
        'time' => 2000,
        'numbers' => [
            'Рост целевых посетителей' => ['val' => 68, 'type' => '%'],
            'Рост заявок за 6 месяцев' => ['val' => 42, 'type' => '%'],
            'Запросов в ТОП-3' => ['val' => 57, 'type' => '%'],
            'Увеличение дохода за 12 месяцев' => ['val' => 38, 'type' => '%']
        ]
    ],
    [
        'desc' => 'Гипермаркет одежды больших размеров',
        'goal' => 'Увеличения объёма продаж по розничному направлению в интернете. Тестирование источников трафика с выявлением наиболее результативных',
        'logo' => '/images/content/promote/logo4.png',
        'time' => 2000,
        'numbers' => [
            'Рост целевых посетителей' => ['val' => 84, 'type' => '%'],
            'Рост заявок за 6 месяцев' => ['val' => 35, 'type' => '%'],
            'Запросов в ТОП-3' => ['val' => 74, 'type' => '%'],
            'Увеличение дохода за 12 месяцев' => ['val' => 23, 'type' => '%']
        ]
    ],
    [
        'desc' => 'Поставка и продаже продуктов из кедрового ореха',
        'goal' => 'Выход на рынок интернета, поиск партнёров, расширение базы клиентов, увеличение продаж',
        'logo' => '/images/content/promote/logo5.png',
        'time' => 2000,
        'numbers' => [
            'Рост целевых посетителей' => ['val' => 57, 'type' => '%'],
            'Рост заявок за 6 месяцев' => ['val' => 39, 'type' => '%'],
            'Запросов в ТОП-3' => ['val' => 85, 'type' => '%'],
            'Увеличение дохода за 12 месяцев' => ['val' => 62, 'type' => '%']
        ]
    ]
] ?>

<!-- main -->
<main class="page page_second">
    <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/aside.php' ?>
    <main class="main">
        <div class="promote">
            <section class="promote-first">
                <div class="container">
                    <div class="promote-first__wrapper">
                        <div class="promote-first__bread">
                            <div class="bread"><a class="bread__item" href="/">Создание сайтов</a><a
                                        class="bread__item active">Продвижение</a>
                            </div>
                        </div>
                        <div class="promote-first__title">
                            <div class="title_small title_small2 title title_small">
                                <div class="title__line">
                                    <div class="title__text">Хотите сайт в топ?</div>
                                </div>
                                <div class="title__line"><span
                                            class="title__text title__text_small">мы знаем</span><span
                                            class="title__text">как это сделать</span></div>
                            </div>
                        </div>
                        <div class="promote-first__subtitle">Увеличим Ваши продажи, количество звонков, заявок<br>и
                            заказов с сайта за счет роста целевого трафика и вывода Вашего сайта<br>в ТОП-10 Яндекса и
                            Google
                        </div>
                        <button class="promote-first__button" type="button">
                            <div class="btn3">
                                <div class="btn3__title">Узнать стоимость продвижения</div>
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
                    <div class="promote-first__calc">
                        <div class="promote-calc__close"></div>
                        <div class="promote-calc__title">сколько стоит<br>продвижение вашего сайта</div>
                        <div class="promote-calc__subtitle">Выберите способ продвижения</div>
                        <div class="promote-calc__form">
                            <form class="form" action="#" method="post">
                                <div class="form__row form__row_2">
                                    <div class="form__field2">
                                        <input class="check" type="checkbox" id="radio0" name="promo[]" checked value="Продвижение в Яндекс">
                                        <label class="check__label" for="radio0">Продвижение в Яндекс
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="checkbox" id="radio1" name="promo[]" value="Продвижение в Google">
                                        <label class="check__label" for="radio1">Продвижение в Google
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="checkbox" id="radio2" name="promo[]" value="Контекстная реклама в Яндекс">
                                        <label class="check__label" for="radio2">Контекстная реклама в Яндекс
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="checkbox" id="radio3" name="promo[]" value="Контекстная реклама в Google">
                                        <label class="check__label" for="radio3">Контекстная реклама в Google
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form__row form__row_2">
                                    <div class="form__field2">
                                        <input class="check" type="checkbox" id="radio4" name="promo[]" value="Реклама в ВКонтакте">
                                        <label class="check__label" for="radio4">Реклама в ВКонтакте
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="checkbox" id="radio5" name="promo[]" value="Реклама в Instagram">
                                        <label class="check__label" for="radio5">Реклама в Instagram
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="checkbox" id="radio6" name="promo[]" value="Реклама в Одноклассники">
                                        <label class="check__label" for="radio6">Реклама в Одноклассники
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="checkbox" id="radio7" name="promo[]" value="Реклама в Facebook">
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
                </div>
            </section>
            <div class="container3">
                <section class="promote-price">
                    <div class="promote-price__title">Стоимость продвижения сайта</div>
                    <div class="promote-price__row">
                        <div class="promote-price__col">
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/seo/">Продвижение SEO</a>
                                <div class="promote-price__list">
                                    <a class="promote-price__item" href="/promote/seo/result/">С оплатой за
                                        результат</a>
                                    <a class="promote-price__item" href="/promote/seo/traffic/">С оплатой за
                                        трафик</a>
                                    <a class="promote-price__item" href="/promote/seo/ecommerce/">Продвижение
                                        магазина</a>
                                    <a class="promote-price__item" href="/promote/seo/yandex/">Продвижение в
                                        Яндекс</a>
                                    <a class="promote-price__item" href="/promote/seo/google/">Продвижение в
                                        Google</a>
                                    <a class="promote-price__item" href="/promote/seo/company/">SEO продвижение
                                        компании</a>
                                    <a class="promote-price__item" href="/promote/seo/optimization/">SEO
                                        оптимизация</a>
                                    <a class="promote-price__item" href="/promote/seo/audit/">SEO аудит</a>
                                </div>
                                <div class="promote-price__price">от 29 990 Р</div>
                            </div>
                        </div>
                        <div class="promote-price__col">
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/thematics/">Направления
                                </a>
                                <div class="promote-price__list">
                                    <a class="promote-price__item"
                                       href="/promote/thematics/magazin-avtozapchastei/">Автозапчасти</a>
                                    <a class="promote-price__item" href="/promote/thematics/buhgalteriya/">Бухгалтерские
                                        услуги</a>
                                    <a class="promote-price__item" href="/promote/thematics/med-centr/">Мед.
                                        клиника</a>
                                    <a class="promote-price__item" href="/promote/thematics/nedvijimost/">Недвижимость</a>
                                    <a class="promote-price__item" href="/promote/thematics/magazin-mebeli/">Мебельный
                                        магазин</a>
                                    <a class="promote-price__item" href="/promote/thematics/stroitelnaya-tematika/">Ремонтные
                                        услуги</a>
                                    <a class="promote-price__item" href="/promote/thematics/stroitelnaya-kompaniya/">Строительная
                                        компания</a>
                                    <a class="promote-price__item" href="/promote/thematics/">Другое (15)</a>
                                </div>
                                <div class="promote-price__price">от 29 990 Р</div>
                            </div>
                        </div>
                        <div class="promote-price__col">
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/reklama/">Контекстная
                                    реклама</a>
                                <div class="promote-price__list">
                                    <a class="promote-price__item" href="/promote/reklama/yandex/">Яндек Директ</a>
                                    <a class="promote-price__item" href="/promote/reklama/google/">Google Adwords</a>
                                </div>
                                <div class="promote-price__price">от 9 990 Р</div>
                            </div>
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/audit/">Маркетинговый
                                    аудит</a>
                                <div class="promote-price__list">
                                </div>
                                <div class="promote-price__price">от 39 920 Р</div>
                            </div>
                        </div>
                        <div class="promote-price__col">
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/smm/">Продвижение SMM
                                </a>
                                <div class="promote-price__list">
                                    <a class="promote-price__item" href="/promote/smm/vk/">Реклама ВКонтакте</a>
                                    <a class="promote-price__item" href="/promote/smm/fb/">Реклама Facebook</a>
                                    <a class="promote-price__item" href="/promote/smm/insta/">Реклама Instagram</a>
                                    <a class="promote-price__item" href="/promote/smm/youtube/">Реклама Youtube</a>
                                    
                                </div>
                                <div class="promote-price__price">от 30 000 Р</div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="promote-slider swiper-container">
                    <div class="swiper-wrapper">
                        <? foreach ($slides as $slide): ?>
                            <div class="swiper-slide promote-slide">
                                <section class="promote-result">
                                    <div class="promote-result__logo">
                                        <img src="<?= $slide['logo'] ?>" alt="<?= $slide['desc'] ?>"
                                             class="promote-result__logo-img">
                                    </div>
                                    <div class="promote-result__desc">
                                        <div class="promote-result__desc-item">
                                            <span class="promote-result__desc-name">Описание:</span>
                                            <span class="promote-result__desc-text"> <?= $slide['desc'] ?></span>
                                        </div>
                                        <div class="promote-result__desc-item">
                                            <span class="promote-result__desc-name">Цель:</span>
                                            <span class="promote-result__desc-text"> <?= $slide['goal'] ?></span>
                                        </div>
                                    </div>
                                    <div class="promote-result__result">
                                        <div class="promote-result__list numbers" data-timer="<?= $slide['time'] ?>">
                                            <? foreach ($slide['numbers'] as $key => $val): ?>
                                                <div class="promote-result__item number">
                                                    <div class="promote-result__percent">
                                                        <div class="number__val promote-result__percent-val"
                                                             data-from="0"
                                                             data-to="<?= $val['val'] ?>">0
                                                        </div>
                                                        <div class="promote-result__percent-type"><?= $val['type'] ?></div>
                                                    </div>
                                                    <div class="promote-result__text"><?= $key ?></div>
                                                </div>
                                            <? endforeach; ?>
                                            <? /*
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="32">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост заявок за 12 месяцев</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="50">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Запросов в ТОП-3 в Google</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="32">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Увеличение дохода за 12 месяцев</div>
                                        </div>
                                        */ ?>
                                        </div>
                                        <button class="promote-result__button button callorderOpen" data-formId="2" type="button">
                                            заказать
                                            продвижение
                                        </button>
                                    </div>
                                    <div class="promote-result__graph">
                                        <div class="promote-result__graph-img1">
                                            <img src="/images/content/promote/graph1.png" alt=""
                                                 class="promote-result__graph-pic">
                                        </div>
                                        <div class="promote-result__graph-img2">
                                            <img src="/images/content/promote/graph2.png" alt=""
                                                 class="promote-result__graph-pic">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        <? endforeach; ?>

                        <? /*
                        <div class="swiper-slide promote-slide">
                            <section class="promote-result">
                                <div class="promote-result__logo">
                                    <img src="/images/content/promote/logo2.png" alt=""
                                         class="promote-result__logo-img">
                                </div>
                                <div class="promote-result__desc">
                                    <div class="promote-result__desc-item">
                                        <span class="promote-result__desc-name">Описание:</span>
                                        <span class="promote-result__desc-text"> Розничная и оптовая продажа кондитерских аксессуаров </span>
                                    </div>
                                    <div class="promote-result__desc-item">
                                        <span class="promote-result__desc-name">Цель:</span>
                                        <span class="promote-result__desc-text"> Поиск дополнительных источников продаж в интернете, увеличение заявок по SEO направлению, усиление потока клиентов в офлайн точки</span>
                                    </div>
                                </div>
                                <div class="promote-result__result">
                                    <div class="promote-result__list numbers" data-timer="2000">
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="74">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост целевых посетителей</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="160">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост заявок за 12 месяцев</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="62">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Запросов в ТОП-3 в Google</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="40">0
                                                </div>
                                                <div class="promote-result__percent-type">МЛН. Р</div>
                                            </div>
                                            <div class="promote-result__text">Прибль за 9 месяцев</div>
                                        </div>
                                    </div>
                                    <button class="promote-result__button button callorderOpen" data-formId="2" type="button">заказать
                                        продвижение
                                    </button>
                                </div>
                                <div class="promote-result__graph">
                                    <div class="promote-result__graph-img1">
                                        <img src="/images/content/promote/graph1.png" alt=""
                                             class="promote-result__graph-pic">
                                    </div>
                                    <div class="promote-result__graph-img2">
                                        <img src="/images/content/promote/graph2.png" alt=""
                                             class="promote-result__graph-pic">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="swiper-slide promote-slide">
                            <section class="promote-result">
                                <div class="promote-result__logo">
                                    <img src="/images/content/promote/logo3.png" alt=""
                                         class="promote-result__logo-img">
                                </div>
                                <div class="promote-result__desc">
                                    <div class="promote-result__desc-item"><span class="promote-result__desc-name">Описание:</span><span
                                                class="promote-result__desc-text"> Лидер на рынке электронных книг: Россия, СНГ</span>
                                    </div>
                                    <div class="promote-result__desc-item"><span
                                                class="promote-result__desc-name">Цель:</span><span
                                                class="promote-result__desc-text"> Проведение SEO кампании с целью повышения известности и узнаваемости бренда</span>
                                    </div>
                                </div>
                                <div class="promote-result__result">
                                    <div class="promote-result__list numbers" data-timer="2000">
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="48">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост целевых посетителей</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="32">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост заявок за 9 месяцев</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="50">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Запросов в ТОП-3 в Google</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="40">0
                                                </div>
                                                <div class="promote-result__percent-type">МЛН. Р</div>
                                            </div>
                                            <div class="promote-result__text">Прибль за 9 месяцев</div>
                                        </div>
                                    </div>
                                    <button class="promote-result__button button callorderOpen" data-formId="2" type="button">заказать
                                        продвижение
                                    </button>
                                </div>
                                <div class="promote-result__graph">
                                    <div class="promote-result__graph-img1">
                                        <img src="/images/content/promote/graph1.png" alt=""
                                             class="promote-result__graph-pic">
                                    </div>
                                    <div class="promote-result__graph-img2">
                                        <img src="/images/content/promote/graph2.png" alt=""
                                             class="promote-result__graph-pic">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="swiper-slide promote-slide">
                            <section class="promote-result">
                                <div class="promote-result__logo">
                                    <img src="/images/content/promote/logo3.png" alt=""
                                         class="promote-result__logo-img">
                                </div>
                                <div class="promote-result__desc">
                                    <div class="promote-result__desc-item"><span class="promote-result__desc-name">Описание:</span><span
                                                class="promote-result__desc-text"> Лидер на рынке электронных книг: Россия, СНГ</span>
                                    </div>
                                    <div class="promote-result__desc-item"><span
                                                class="promote-result__desc-name">Цель:</span><span
                                                class="promote-result__desc-text"> Проведение SEO кампании с целью повышения известности и узнаваемости бренда</span>
                                    </div>
                                </div>
                                <div class="promote-result__result">
                                    <div class="promote-result__list numbers" data-timer="2000">
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="48">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост целевых посетителей</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="32">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост заявок за 9 месяцев</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="50">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Запросов в ТОП-3 в Google</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="40">0
                                                </div>
                                                <div class="promote-result__percent-type">МЛН. Р</div>
                                            </div>
                                            <div class="promote-result__text">Прибль за 9 месяцев</div>
                                        </div>
                                    </div>
                                    <button class="promote-result__button button callorderOpen" data-formId="2" type="button">заказать
                                        продвижение
                                    </button>
                                </div>
                                <div class="promote-result__graph">
                                    <div class="promote-result__graph-img1">
                                        <img src="/images/content/promote/graph1.png" alt=""
                                             class="promote-result__graph-pic">
                                    </div>
                                    <div class="promote-result__graph-img2">
                                        <img src="/images/content/promote/graph2.png" alt=""
                                             class="promote-result__graph-pic">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="swiper-slide promote-slide">
                            <section class="promote-result">
                                <div class="promote-result__logo">
                                    <img src="/images/content/promote/logo3.png" alt=""
                                         class="promote-result__logo-img">
                                </div>
                                <div class="promote-result__desc">
                                    <div class="promote-result__desc-item"><span class="promote-result__desc-name">Описание:</span><span
                                                class="promote-result__desc-text"> Лидер на рынке электронных книг: Россия, СНГ</span>
                                    </div>
                                    <div class="promote-result__desc-item"><span
                                                class="promote-result__desc-name">Цель:</span><span
                                                class="promote-result__desc-text"> Проведение SEO кампании с целью повышения известности и узнаваемости бренда</span>
                                    </div>
                                </div>
                                <div class="promote-result__result">
                                    <div class="promote-result__list numbers" data-timer="2000">
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="48">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост целевых посетителей</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="32">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Рост заявок за 9 месяцев</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="50">0
                                                </div>
                                                <div class="promote-result__percent-type">%</div>
                                            </div>
                                            <div class="promote-result__text">Запросов в ТОП-3 в Google</div>
                                        </div>
                                        <div class="promote-result__item number">
                                            <div class="promote-result__percent">
                                                <div class="number__val promote-result__percent-val" data-from="0"
                                                     data-to="40">0
                                                </div>
                                                <div class="promote-result__percent-type">МЛН. Р</div>
                                            </div>
                                            <div class="promote-result__text">Прибль за 9 месяцев</div>
                                        </div>
                                    </div>
                                    <button class="promote-result__button button callorderOpen" data-formId="2" type="button">заказать
                                        продвижение
                                    </button>
                                </div>
                                <div class="promote-result__graph">
                                    <div class="promote-result__graph-img1">
                                        <img src="/images/content/promote/graph1.png" alt=""
                                             class="promote-result__graph-pic">
                                    </div>
                                    <div class="promote-result__graph-img2">
                                        <img src="/images/content/promote/graph2.png" alt=""
                                             class="promote-result__graph-pic">
                                    </div>
                                </div>
                            </section>
                        </div>
                        */ ?>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="promote-slider__prev ">
                        <div class="seporator seporator_prev">
                            <div class="seporator__triangle"></div>
                            <div class="seporator__line"></div>
                        </div>
                    </div>
                    <div class="promote-slider__next">
                        <div class="seporator">
                            <div class="seporator__line"></div>
                            <div class="seporator__triangle"></div>
                        </div>
                    </div>

                </div>

                <? /*
                <section class="promote-result">
                    <div class="promote-result__title">ЛитРес:</div>
                    <div class="promote-result__desc">
                        <div class="promote-result__desc-item"><span class="promote-result__desc-name">Описание:</span><span class="promote-result__desc-text"> Лидер на рынке электронных книг: Россия, СНГ</span></div>
                        <div class="promote-result__desc-item"><span class="promote-result__desc-name">Цель:</span><span class="promote-result__desc-text"> Проведение SEO кампании с целью повышения известности и узнаваемости бренда</span></div>
                    </div>
                    <div class="promote-result__result">
                        <div class="promote-result__list numbers" data-timer="2000">
                            <div class="promote-result__item number">
                                <div class="promote-result__percent">
                                    <div class="number__val promote-result__percent-val" data-from="0" data-to="48">0</div>
                                    <div class="promote-result__percent-type">%</div>
                                </div>
                                <div class="promote-result__text">Рост целевых посетителей</div>
                            </div>
                            <div class="promote-result__item number">
                                <div class="promote-result__percent">
                                    <div class="number__val promote-result__percent-val" data-from="0" data-to="32">0</div>
                                    <div class="promote-result__percent-type">%</div>
                                </div>
                                <div class="promote-result__text">Рост заявок за 9 месяцев</div>
                            </div>
                            <div class="promote-result__item number">
                                <div class="promote-result__percent">
                                    <div class="number__val promote-result__percent-val" data-from="0" data-to="50">0</div>
                                    <div class="promote-result__percent-type">%</div>
                                </div>
                                <div class="promote-result__text">Запросов в ТОП-3 в Google</div>
                            </div>
                            <div class="promote-result__item number">
                                <div class="promote-result__percent">
                                    <div class="number__val promote-result__percent-val" data-from="0" data-to="40">0</div>
                                    <div class="promote-result__percent-type">МЛН. Р</div>
                                </div>
                                <div class="promote-result__text">Прибль за 9 месяцев</div>
                            </div>
                        </div>
                        <button class="promote-result__button button callorderOpen" data-formId="2" type="button">заказать продвижение</button>
                    </div>
                    <div class="promote-result__graph">
                        <div class="promote-result__graph-img1">
                            <img src="/images/content/promote/graph1.png" alt="" class="promote-result__graph-pic">
                        </div>
                        <div class="promote-result__graph-img2">
                            <img src="/images/content/promote/graph2.png" alt="" class="promote-result__graph-pic">
                        </div>
                    </div>
                </section>
                */ ?>
                <section class="promote-work">
                    <div class="promote-work__title"><img class="promote-work__title-img"
                                                          src="/images/content/promoteWork.png"></div>
                    <div class="promote-work__wrapper">
                        <div class="promote-work__list">
                            <div class="promote-work__item">
                                <div class="promote-work__number">
                                    <div class="promote-work__number-val">01</div>
                                    <img class="promote-work__number-img" src="/images/content/promote/pWork1.svg">
                                </div>
                                <div class="promote-work__desc">
                                    <div class="promote-work__desc-text">Первичный анализ сайта
                                        и конкурентов
                                    </div>
                                    <div class="promote-work__desc-arrow">
                                        <div class="arrow">
                                            <div class="arrow__line"></div>
                                            <div class="arrow__triangle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="promote-work__item">
                                <div class="promote-work__number">
                                    <div class="promote-work__number-val">02</div>
                                    <img class="promote-work__number-img" src="/images/content/promote/pWork2.svg">
                                </div>
                                <div class="promote-work__desc">
                                    <div class="promote-work__desc-text">Разработка стратегии
                                        продвижения сайта
                                    </div>
                                    <div class="promote-work__desc-arrow">
                                        <div class="arrow">
                                            <div class="arrow__line"></div>
                                            <div class="arrow__triangle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="promote-work__item">
                                <div class="promote-work__number">
                                    <div class="promote-work__number-val">03</div>
                                    <img class="promote-work__number-img" src="/images/content/promote/pWork3.svg">
                                </div>
                                <div class="promote-work__desc">
                                    <div class="promote-work__desc-text">Анализ результата
                                        проделанных работ
                                    </div>
                                    <div class="promote-work__desc-arrow">
                                        <div class="arrow">
                                            <div class="arrow__line"></div>
                                            <div class="arrow__triangle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="promote-work__item">
                                <div class="promote-work__number">
                                    <div class="promote-work__number-val">04</div>
                                    <img class="promote-work__number-img" src="/images/content/promote/pWork4.svg">
                                </div>
                                <div class="promote-work__desc">
                                    <div class="promote-work__desc-text">Внесение корректировок
                                        и достижение результата
                                    </div>
                                    <div class="promote-work__desc-arrow">
                                        <div class="arrow">
                                            <div class="arrow__line"></div>
                                            <div class="arrow__triangle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="promote-edge">
                    <div class="edge">
                        <div class="edge__title">Наши преимущества</div>
                        <div class="edge__list">
                            <div class="edge__row">
                                <div class="edge__item">
                                    <div class="edge__desc">
                                        <div class="edge__name">Лидируем в<br>SEO-рейтингах
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
                                        <div class="edge__name">Знаем о продвижении<br>сайта все
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
                                Следуем трендам и алгоритмам поисковых систем. Используем иновационные подходы в
                                привличении трафика на сайты. Работаем на результат и выстраиваем долгосрочные отношения
                                с клиентами.
                            </div>
                            <div class="edge__col">
                                В штате работают сертифицированные специалисты Яндекса. Сможем показать быстрый
                                результат и нетревиальный подход к достижении целей. Для нас не существует невыполнимых
                                задач.
                            </div>
                        </div>
                        <button class="edge__button button button_red callorderOpen" data-formId="2" type="button">заказать продвижение
                        </button>
                    </div>
                </section>
                <section class="promote-rec">
                    <div class="promote-rec__title">
                        Рекомендации наших клиентов
                        <div class="promote-rec__nav">
                            <div class="promote-rec__prev">
                                <div class="arrow_black arrow_prev arrow">
                                    <div class="arrow__line"></div>
                                    <div class="arrow__triangle"></div>
                                </div>
                            </div>
                            <div class="promote-rec__next">
                                <div class="arrow_black arrow">
                                    <div class="arrow__line"></div>
                                    <div class="arrow__triangle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? /*
                    <div class="promote-rec__list">
                        <a class="promote-rec__item" href="/images/content/promote/letter1.jpg"
                           data-fancybox="recImages" data-caption="Рекомендательное письмо">
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <!--img(src='images/content/promote/recImg.svg').promote-rec__pic-->
                                <div class="promote-rec__thumb">
                                    <img src="/images/content/promote/letter1.jpg" alt="">
                                </div>
                                <div class="promote-rec__logo">
                                    <img class="promote-rec__logo-img" src="/images/content/promote/recLogo1.png">
                                </div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a>
                        <a class="promote-rec__item" href="/images/content/promote/letter2.jpg"
                           data-fancybox="recImages" data-caption="Рекомендательное письмо">
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <div class="promote-rec__thumb">
                                    <img src="/images/content/promote/letter2.jpg" alt="">
                                </div>
                                <div class="promote-rec__logo">
                                    <img class="promote-rec__logo-img"
                                         src="/images/content/promote/recLogo2.png">
                                </div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a>
                        <a class="promote-rec__item" href="/images/content/promote/letter3.jpg"
                           data-fancybox="recImages" data-caption="Рекомендательное письмо">
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <div class="promote-rec__thumb">
                                    <img src="/images/content/promote/letter3.jpg" alt="">
                                </div>
                                <div class="promote-rec__logo">
                                    <img class="promote-rec__logo-img" src="/images/content/promote/recLogo3.png">
                                </div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a>
                        <a class="promote-rec__item" href="/images/content/promote/letter4.jpg"
                           data-fancybox="recImages" data-caption="Рекомендательное письмо">
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <div class="promote-rec__thumb">
                                    <img src="/images/content/promote/letter4.jpg" alt="">
                                </div>
                                <div class="promote-rec__logo">
                                    <img class="promote-rec__logo-img" src="/images/content/promote/recLogo4.png">
                                </div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a>
                        <a class="promote-rec__item" href="/images/content/promote/letter5.jpg"
                           data-fancybox="recImages" data-caption="Рекомендательное письмо">
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <div class="promote-rec__thumb">
                                    <img src="/images/content/promote/letter5.jpg" alt="">
                                </div>
                                <div class="promote-rec__logo">
                                    <img class="promote-rec__logo-img" src="/images/content/promote/recLogo5.png">
                                </div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a>
                    </div>
                    */ ?>
                    <div class="swiper-container promote-rec__container">
                        <div class="swiper-wrapper  promote-rec__wrapper">
                            <div class="swiper-slide promote-rec__slide">
                                <a class="promote-rec__item" href="/images/content/promote/letter1.jpg"
                                   data-fancybox="recImages" data-caption="Рекомендательное письмо">
                                    <div class="promote-rec__img">
                                        <svg class="promote-rec__pic">
                                            <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                        </svg>
                                        <!--img(src='images/content/promote/recImg.svg').promote-rec__pic-->
                                        <div class="promote-rec__thumb">
                                            <img src="/images/content/promote/letter1.jpg" alt="">
                                        </div>
                                        <div class="promote-rec__logo">
                                            <img class="promote-rec__logo-img"
                                                 src="/images/content/promote/recLogo1.png">
                                        </div>
                                    </div>
                                    <div class="promote-rec__name">Рекомендательное письмо</div>
                                </a>
                            </div>
                            <div class="swiper-slide promote-rec__slide">
                                <a class="promote-rec__item" href="/images/content/promote/letter2.jpg"
                                   data-fancybox="recImages" data-caption="Рекомендательное письмо">
                                    <div class="promote-rec__img">
                                        <svg class="promote-rec__pic">
                                            <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                        </svg>
                                        <div class="promote-rec__thumb">
                                            <img src="/images/content/promote/letter2.jpg" alt="">
                                        </div>
                                        <div class="promote-rec__logo">
                                            <img class="promote-rec__logo-img"
                                                 src="/images/content/promote/recLogo2.png">
                                        </div>
                                    </div>
                                    <div class="promote-rec__name">Рекомендательное письмо</div>
                                </a>
                            </div>
                            <div class="swiper-slide promote-rec__slide">
                                <a class="promote-rec__item" href="/images/content/promote/letter3.jpg"
                                   data-fancybox="recImages" data-caption="Рекомендательное письмо">
                                    <div class="promote-rec__img">
                                        <svg class="promote-rec__pic">
                                            <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                        </svg>
                                        <div class="promote-rec__thumb">
                                            <img src="/images/content/promote/letter3.jpg" alt="">
                                        </div>
                                        <div class="promote-rec__logo">
                                            <img class="promote-rec__logo-img"
                                                 src="/images/content/promote/recLogo3.png">
                                        </div>
                                    </div>
                                    <div class="promote-rec__name">Рекомендательное письмо</div>
                                </a>
                            </div>
                            <div class="swiper-slide promote-rec__slide">
                                <a class="promote-rec__item" href="/images/content/promote/letter4.jpg"
                                   data-fancybox="recImages" data-caption="Рекомендательное письмо">
                                    <div class="promote-rec__img">
                                        <svg class="promote-rec__pic">
                                            <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                        </svg>
                                        <div class="promote-rec__thumb">
                                            <img src="/images/content/promote/letter4.jpg" alt="">
                                        </div>
                                        <div class="promote-rec__logo">
                                            <img class="promote-rec__logo-img"
                                                 src="/images/content/promote/recLogo4.png">
                                        </div>
                                    </div>
                                    <div class="promote-rec__name">Рекомендательное письмо</div>
                                </a>
                            </div>
                            <div class="swiper-slide promote-rec__slide">
                                <a class="promote-rec__item" href="/images/content/promote/letter5.jpg"
                                   data-fancybox="recImages" data-caption="Рекомендательное письмо">
                                    <div class="promote-rec__img">
                                        <svg class="promote-rec__pic">
                                            <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                        </svg>
                                        <div class="promote-rec__thumb">
                                            <img src="/images/content/promote/letter5.jpg" alt="">
                                        </div>
                                        <div class="promote-rec__logo">
                                            <img class="promote-rec__logo-img"
                                                 src="/images/content/promote/recLogo5.png">
                                        </div>
                                    </div>
                                    <div class="promote-rec__name">Рекомендательное письмо</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <section class="promote-bottom">
                <div class="bottom">
                    <div class="container2">
                        <div class="bottom__rev">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/bottom/rev.php' ?>
                        </div>
                        <div class="bottom__send">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/bottom/send.php' ?>
                        </div>
                        <div class="bottom__why">
                            <div class="why">
                                <div class="why__img"><img class="why__img-img" src="/images/content/why.png"></div>
                                <h1><div class="why__title">Продвижение сайтов</div></h1>
                                <div class="why__content">
                                    <p>Ключевые позиции в поисковых системах приносят площадке престиж, владельцу – увеличение дохода. 
									Самостоятельно заниматься продвижением сайта – не лучшая идея, так как это может привести к ухудшению репутации домена, 
									что в последствии может негативно отразится на результате. Обратитесь в Web-Comp - мы гарантируем быструю, эффективную раскрутку ресурса, 
									его вывод в ТОП с сохранением существующих позиций. При грамотной стратегии продвижения, все сделанные вложения окупятся и сайт начнёт приносить прибыль.
                                    </p>
                                    <p>За качество услуг веб-студии лучше всего говорят результаты проектов, которыми мы занимаемся и отзывы наших довольных клиентов. 
									Используем белые методы продвижения, гарантированно выводим запросы в ТОП-10. По итогам выполненных работ заказчик 2 раза в месяц или по запросу получает отчет. 
									В ходе раскрутки, Включено даем рекомендации по развитию, корректируем стратегию привлечения аудитории. Финансовые условия сотрудничества прозрачные – заказчик будет знать,
									за что платит, какие результаты достигнуты и что нужно предпринять для дальнейшего роста.</p>
                                    <h2>Что мы делаем</h2>
									<p>Продвижение и раскрутка сайта «под ключ» – задача для профессионалов. Мы решаем широкий перечень задач:</p>
									<ul>
										<li>Подбираем гибкий список рекламируемых ключевых запросов – его можно изменять в ходе компании.</li>
										<li>Повышаем эффективность площадки по максимуму – проводим анализ, даем рекомендации по функциональной, технической модернизации, работаем с юзабилити.</li>
									</ul>
									<ul>
										<li>Разрабатываем индивидуальную стратегию продвижения с применением более 30 инструментов привлечения трафика.</li>
										<li>Помогаем экономить – вы платите только за результат.</li>
									</ul>
									<p>Каждый заказчик получает личного менеджера, который будет курировать проект. Это удобно – к ответственному специалисту можно обращаться в любые рабочие часы, по любым вопросам, связанным с интернет-маркетингом.</p>
									<h3>Особенности комплексных услуг</h3>
									<p>Комплексное продвижение – перечень маркетинговых мероприятий, которые направлены на анализ работы онлайн-ресурса, выявления возможных ошибок и их устранение, 
									применения технологий по улучшению видимости и узнаваемости. Обязательно проводится внешняя и внутренняя оптимизация, детально анализируется юзабилити. 
									Специалисты студии изучают конкурентов на топовых позициях по целевым запросам, делают все возможное для стремительного наращивания трафика, повышения продаж через сайт.</p>
									<p>Комплексная раскрутка работает с тремя «китами» – это ТОП в поисковых системах, посетители из контекстной рекламы, узнаваемость бренда в социальных сетях. Площадка заказчика не только выходит в лидеры, 
									но и начинает приносить реальный доход. А первое без второго просто не имеет смысла. Услуги «под ключ» будут интересны тем, кто:</p>
									<ul>
										<li>На личном опыте понял, что только выхода в ТОП недостаточно для достижения максимальных результатов, нужно больше. </li>
										<li>Готов следовать экспертным советам и делать все для повышения позиций ресурса (рекомендации предоставляются).</li>
										<li>Хочет окупить сделанные в создание сайта вложения и настроен на максимальные продажи в долгосрочной перспективе. </li>
									</ul>									
									<p>Стоимость продвижения сайтов «под ключ» рассчитывается индивидуально, клиент получает на руки договор, в котором прописываются все работы с ценами. Запаситесь терпением – и Web-Comp поможет вам зарабатывать в разы больше, чем раньше.</p>
									<h3>Этапы проведения работ по продвижению сайта</h3>
									<p>Этапы, соблюдение которых позволяет добиваться оптимальных результатов:</p>
									<ul>
									<li>Поисковый аудит – показывает проблемы, которые на первый взгляд незаметны. Если ресурс новый, красивый, наполнен уникальным контентом, но не работает, анализ нужен обязательно.</li>
									<li>Проверка юзабилити – ориентироваться нужно на пользователя, смотреть на площадку так, как смотрит он. Аудит юзабилити покажет продуманность функционала, понятность архитектуры сайта. Это важно и во многом определяет показатели продаж.</li>
									<li>Составление семантики – подбор ядра, работа с низко-, средне-, высокочастотными запросами. Важно правильно выбрать ключи и грамотно вписать их в тексты. Чем выше ранжируемость запроса, тем дороже обойдется вывод в ТОП.</li>
									</ul>
									<ul>
									<li>Оптимизация – внутренняя и внешняя. Сначала делается внутренняя – она предполагает подготовку тегов, картинок, статей, проверку кодов, создание перелинковки. Если раскручивается магазин, нужно будет выполнить оптимизацию каталогов, товарных карточек. Внешняя – это ссылки и пресс-релизы, выбор ранжируемых площадок, проработка бирж, каталогов.</li>
									<li>Настройка и подключение контекстной рекламы – задействование быстрых источников привлечения трафика, размещение баннеров и догоняющей рекламы на посещаемых ресурсах. Используем уникальный разработки собора целевой аудитории.</li>
									<li>Продвижение сайта в социальных сетях – создание группы и настройка таргетированной рекламы, поможет сделать бренд узнаваемым и наладить живое взаимодействие с аудиторией.</li>
									</ul>
									<p>Заказать продвижение сайта в веб-студии можно и с учётом особых требований, например с результатом достижения отдельных показателей KPI. 
									Команда профессионалов своего дела знает, что каждый проект требует индивидуального, продуманного подхода. Шаблонные подходы к решению маркетинговых задач – 
									залог растраты средств при сомнительных результатах, поэтому важно проработать свою стратегию рекламы ресурса. Продвигаем ресурсы всех типов, индивидуально подходим 
									к решению каждой задачи. Качественно – это не дорого, качественно – означает правильно.</p>
									<h2>Стоимость продвижения сайтов</h2>
									<p>Цены на продвижение сайтов зависят от конкурентности в нише, используемых площадок и инструментов, количества контента, который придётся создать для достижения результата, 
									желаемых позиций KPI, числа ключевых запросов, объемов ссылочной массы. Рассматривается текущий ресурс, анализируются необходимые доработки, их стоимость. 
									Онлайн-площадка в условиях постоянной глобализации – главный канал продаж. Покупателю проще искать цены и информацию о товарах, услугах онлайн, а не бегать по городу. 
									Поэтому ресурс должен быть продуман и раскручен – это позволит выйти на шаг вперед конкурентов, мы закладываем в стоимость работ по продвижению, время программистов и 
									дизайнеров на доработку сайта. Если сайт у заказчика уже есть, но он недостаточно эффективен, мы делаем поисковый аудит, который также включён в цену тарифного плана. 
									Такой анализ показывает слабые места и позволяет определить оптимальные способы для их исправления, подбирать правильные инструмент.</p>
									<p>Web-Comp – это сотни успешно сданных проектов. Преимущества сотрудничества со студией:</p>
										<ul>
											<li>Комплексный подход к решению задач клиента – вы получите все, что нужно, в одном месте, платить за лишние услуги не придется.</li>
											<li>Профессиональные специалисты – у нас работают грамотные дизайнеры, контентщики и другие мастера, обладающие сертификатами Яндекса и Google.</li>
											<li>Адекватные цены – будет не дешево, но разумно. Даем гарантию результатов – это вывод в ТОП и рост продаж.</li>
										</ul>
										<ul>
										<li>Отличные отзывы – веб-студию рекомендуют коллегам, друзьям, знакомым, что обо много говорит.</li>
										<li>Прозрачные условия – по итогам выполненных работ клиент получает отчеты, он точно знает, за что и когда платит. План раскрутки корректируется в согласовании с заказчиком, студия в одностороннем порядке этого не делает.</li>
										</ul>
									<p>Для просчета стоимости проекта, уточнения сроков его реализации, выяснения других вопросов оставьте онлайн-заявку. С Web-Comp сотрудничать просто, выгодно, надежно – убедитесь в этом сами. 
									Гарантируем рост дохода, расширение целевой аудитории, долговременный эффект от раскрутки.</p>	
								</div>
                            </div>
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
