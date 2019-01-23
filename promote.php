<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/top2.php' ?>
<? $slides = [
    [
        'desc' => 'Лидер на рынке электронных книг: Россия, СНГ',
        'goal' => 'Проведение SEO кампании с целью повышения известности и узнаваемости бренда',
        'logo' => '/images/content/promote/logo1.svg',
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
                            <div class="bread"><a class="bread__item" href="./">Главная</a><a
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
                                        <input class="check" type="radio" id="radio0" name="promo" checked>
                                        <label class="check__label" for="radio0">Продвижение в Яндекс
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="radio" id="radio1" name="promo">
                                        <label class="check__label" for="radio1">Продвижение в Google
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="radio" id="radio2" name="promo">
                                        <label class="check__label" for="radio2">Контекстная реклама в Яндекс
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="radio" id="radio3" name="promo">
                                        <label class="check__label" for="radio3">Контекстная реклама в Google
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form__row form__row_2">
                                    <div class="form__field2">
                                        <input class="check" type="radio" id="radio4" name="promo">
                                        <label class="check__label" for="radio4">Реклама в ВКонтакте
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="radio" id="radio5" name="promo">
                                        <label class="check__label" for="radio5">Реклама в Instagram
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="radio" id="radio6" name="promo">
                                        <label class="check__label" for="radio6">Реклама в Одноклассники
                                            <div class="check__fake"></div>
                                        </label>
                                    </div>
                                    <div class="form__field2">
                                        <input class="check" type="radio" id="radio7" name="promo">
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
                                        <select class="select">
                                            <option value="">Регион продвижения</option>
                                            <option>Вариант 1</option>
                                            <option>Вариант 2</option>
                                            <option>Вариант 3</option>
                                        </select>
                                    </div>
                                    <div class="form__field">
                                        <select class="select">
                                            <option value="">Ваша тематика</option>
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
                                <a class="promote-price__block-title" href="/promote/seo.php">Продвижение SEO</a>
                                <div class="promote-price__list">
                                    <a class="promote-price__item" href="/promote/seo/result.php">С оплатой за
                                        результат</a>
                                    <a class="promote-price__item" href="/promote/seo/traffic.php">С оплатой за
                                        трафик</a>
                                    <a class="promote-price__item" href="/promote/seo/ecommerce.php">Продвижение
                                        интеренет-магазина</a>
                                    <a class="promote-price__item" href="/promote/seo/company.php">SEO продвижение
                                        компании</a>
                                    <a class="promote-price__item" href="/promote/seo/yandex.php">Продвижение в
                                        Яндекс</a>
                                    <a class="promote-price__item" href="/promote/seo/google.php">Продвижение в
                                        Google</a>
                                    <a class="promote-price__item" href="/promote/seo/optimization.php">SEO
                                        оптимизация</a>
                                    <a class="promote-price__item" href="/promote/seo/audit.php">SEO аудит</a>
                                </div>
                                <div class="promote-price__price">от 39 920 Р</div>
                            </div>
                        </div>
                        <div class="promote-price__col">
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/thematics.php">Продвижение по
                                    тематике</a>
                                <div class="promote-price__list">
                                    <a class="promote-price__item"
                                       href="/promote/thematics/autoparts.php">Автозапчасти</a>
                                    <a class="promote-price__item" href="/promote/thematics/accountant.php">Бухгалтерские
                                        услуги</a>
                                    <a class="promote-price__item" href="/promote/thematics/medic.php">Мед. клиника</a>
                                    <a class="promote-price__item" href="/promote/thematics/realty.php">Недвижимость</a>
                                    <a class="promote-price__item" href="/promote/thematics/furniture.php">Мебельный
                                        магазин</a>
                                    <a class="promote-price__item" href="/promote/thematics/repair.php">Ремонтные
                                        услуги</a>
                                    <a class="promote-price__item" href="/promote/thematics/building.php">Строительная
                                        компания</a>
                                    <a class="promote-price__item" href="/promote/thematics/another.php">Другое (15)</a>
                                </div>
                                <div class="promote-price__price">от 39 920 Р</div>
                            </div>
                        </div>
                        <div class="promote-price__col">
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/reklama.php">Контекстная
                                    реклама</a>
                                <div class="promote-price__list">
                                    <a class="promote-price__item" href="/promote/reklama/yandex.php">Яндек Директ</a>
                                    <a class="promote-price__item" href="/promote/reklama/google.php">Google Advance</a>
                                </div>
                                <div class="promote-price__price">от 39 920 Р</div>
                            </div>
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/reklama.php">Маркетинговый
                                    аудит</a>
                                <div class="promote-price__list">
                                </div>
                                <div class="promote-price__price">от 39 920 Р</div>
                            </div>
                        </div>
                        <div class="promote-price__col">
                            <div class="promote-price__block">
                                <a class="promote-price__block-title" href="/promote/smm.php">Продвижение в сой.
                                    сетях</a>
                                <div class="promote-price__list">
                                    <a class="promote-price__item" href="/promote/smm/vk.php">Реклама в ВКонтакте</a>
                                    <a class="promote-price__item" href="/promote/smm/fb.php">Реклама в Facebook</a>
                                    <a class="promote-price__item" href="/promote/smm/insta.php">Реклама в Instagram</a>
                                    <a class="promote-price__item" href="/promote/smm/youtube.php">Реклама в Youtube</a>
                                    <a class="promote-price__item" href="/promote/smm/mk.php">Реклама в MK</a>
                                </div>
                                <div class="promote-price__price">от 39 920 Р</div>
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
                                        <button class="promote-result__button button callorderOpen" type="button">
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
                                    <button class="promote-result__button button callorderOpen" type="button">заказать
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
                                    <button class="promote-result__button button callorderOpen" type="button">заказать
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
                                    <button class="promote-result__button button callorderOpen" type="button">заказать
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
                                    <button class="promote-result__button button callorderOpen" type="button">заказать
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
                        <button class="promote-result__button button callorderOpen" type="button">заказать продвижение</button>
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
                                Как сэкономить на создании интернет магазина
                                При создании сайта или интернет-магазина
                                часто возникает желания сэкономить, особенно
                                когда перед глазами много разны ...
                            </div>
                            <div class="edge__col">
                                Как сэкономить на создании интернет магазина
                                При создании сайта или интернет-магазина
                                часто возникает желания сэкономить, особенно
                                когда перед глазами много разны ...
                            </div>
                        </div>
                        <button class="edge__button button button_red callorderOpen" type="button">заказать сайт
                        </button>
                    </div>
                </section>
                <section class="promote-rec">
                    <div class="promote-rec__title">Рекомендации наших клиентов</div>
                    <div class="promote-rec__list"><a class="promote-rec__item" href="/" download>
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <!--img(src='images/content/promote/recImg.svg').promote-rec__pic-->
                                <div class="promote-rec__logo"><img class="promote-rec__logo-img"
                                                                    src="/images/content/promote/recLogo.png"></div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a><a class="promote-rec__item" href="/" download>
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <!--img(src='images/content/promote/recImg.svg').promote-rec__pic-->
                                <div class="promote-rec__logo"><img class="promote-rec__logo-img"
                                                                    src="/images/content/promote/recLogo.png"></div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a><a class="promote-rec__item" href="/" download>
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <!--img(src='images/content/promote/recImg.svg').promote-rec__pic-->
                                <div class="promote-rec__logo"><img class="promote-rec__logo-img"
                                                                    src="/images/content/promote/recLogo.png"></div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a><a class="promote-rec__item" href="/" download>
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <!--img(src='images/content/promote/recImg.svg').promote-rec__pic-->
                                <div class="promote-rec__logo"><img class="promote-rec__logo-img"
                                                                    src="/images/content/promote/recLogo.png"></div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a><a class="promote-rec__item" href="/" download>
                            <div class="promote-rec__img">
                                <svg class="promote-rec__pic">
                                    <use xlink:href="/images/icons/sprite.svg#recImg"></use>
                                </svg>
                                <!--img(src='images/content/promote/recImg.svg').promote-rec__pic-->
                                <div class="promote-rec__logo"><img class="promote-rec__logo-img"
                                                                    src="/images/content/promote/recLogo.png"></div>
                            </div>
                            <div class="promote-rec__name">Рекомендательное письмо</div>
                        </a>
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
                                <div class="why__title">Создание сайта</div>
                                <div class="why__content">
                                    <p>При разработке сайта мы учитываем многочисленные требования поисковых систем
                                        Yandex и Google, благодаря чему все сайты, созданные нами, отлично индексируются
                                        и обладают всеми возможностями эффективно продвигаться в интернете. Цена на
                                        создание сайта демократична и начинается от 49 900 руб. Подход к каждому новому
                                        проекту – индивидуален, мы относимся одинаково внимательно к каждому клиенту,
                                        независимо от размера компании и ее бюджета. На начальной стадии работы над
                                        проектом мы детально изучаем тематику клиента со всех сторон, оцениваем
                                        рентабельность идеи и анализируем конкурентов. Основываясь на полученной
                                        информации, мы даем рекомендации, как по разработке, так и по эффективной
                                        рекламе в интернете.</p>
                                    <p>После сдачи проекта мы осуществляем раскрутку и поддержку сайта, помогая клиенту
                                        привлекать трафик из интернета. Обращайтесь в нашу студию за разработкой веб
                                        сайтов под ключ и вы получите команду специалистов, готовых проконсультировать
                                        по любому вопросу и оказать всестороннюю поддержку вашему бизнесу во всемирной
                                        паутине.</p>
                                    <p>Наша команда состоит из высококвалифицированных кадров, за плечами которых
                                        огромный опыт работы в веб индустрии. Несмотря на уже приобретенный опыт, мы
                                        держим руку на пульсе новых технологий и постоянно совершенствуем наработанные
                                        навыки. Таким образом, вы можете быть уверены, что при сотрудничестве с нами
                                        получите современный продукт, который будет выполнять ваши задачи и достигать
                                        поставленные цели. Основные наши направления: создание сайтов под ключ,
                                        разработка дизайна, написание контента, продвижение сайта и его раскрутка,
                                        работа с социальными сетями, PR-рейтинг, техническая поддержка сайта,
                                        регистрация доменных имен, серверное обслуживание, программирование и настройка
                                        1С.</p>
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
