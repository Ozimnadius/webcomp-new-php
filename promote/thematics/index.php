<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/top2.php' ?>

<!-- main -->
<main class="page page_second">
    <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/aside.php' ?>
    <main class="main">
        <div class="theme">
            <section class="theme-first">
                <div class="container promote-first__wrapper">
                    <div class="theme-first__bread">
                        <div class="bread"><a class="bread__item" href="/">Создание сайтов</a>
                            <a class="bread__item" href="/promote/">Продвижение</a>
                            <a class="bread__item active">По тематике</a>
                        </div>
                    </div>
                    <h1 class="theme-first__title">Продвинули в топ более 300 проектов<br>по разным тематикам</h1>
                    <div class="theme-first__subtitle">Комплексный подход к интернет-рекламе<br>обеспечем заказами ваш
                        бизнес
                    </div>
                    <button class="theme-first__button promote-first__button" type="button">
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
                                        <option disabled selected>Регион продвижения</option>
                                        <option>Вариант 1</option>
                                        <option>Вариант 2</option>
                                        <option>Вариант 3</option>
                                    </select>
                                </div>
                                <div class="form__field">
                                    <select class="select">
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
                        </form>
                    </div>
                </div>
            </section>
            <div class="container3">
                <section class="theme-iss">
                    <div class="theme-iss__title">Тематики в которых мы уже успели показать результата</div>
                    <? $arr = [
                        'avtosalon' => 'Автосалоны',
                        'avtoservis' => 'Автосервисы',
                        'magazin-avtozapchastei' => 'Автозапчасти',
                        'buhgalteriya' => 'Бухгалтерия',
                        'gostinicj-oteli' => 'Гостиницы и отели',
                        'nedvijimost' => 'Недвижимость',
                        'magazin-igrushek' => 'Игрушки',
                        'znakomstva' => 'Сайт знакомств',
                        'jenskaya-tematika' => 'Женская тематика',
                        'med-centr' => 'Клиники',
                        'knigi' => 'Книги',
                        'magazin-mebeli' => 'Мебельный сайт',
                        'medicinskie-yslygi' => 'Медицинские услуги',
                        'salon-krasotj' => 'Салоны красоты',
                        'svadebnji-salon' => 'Свадебные агентства',
                        'strahovje' => 'Страхование',
                        'stroitelnaya-tematika' => 'Ремонт и стройка',
                        'restoranj-i-kafe' => 'Рестораны',
                        'tyristicheskay-tematika' => 'Туризм',
                        'tyroperator' => 'Турфирмы',
                        'uvelirnaya-tematika' => 'Ювелирные салоны',
                        'magazin-odejdj' => 'Магазин одежды',
                        'elektronika' => 'Электроника',
                        'uridicheskie-yslygi' => 'Юридические услуги',
                        'gryzoperevozki' => 'Грузоперевозоки',
                        'farma' => 'Фармацевтика',
                        'stomatologiya' => 'Стоматология',
                        'fitnes' => 'Фитнес-клубы',
                        'bizness-yslygi' => 'Деловые услуги',
                        'banki' => 'Банки',
                        'magazin-santehnika' => 'Сантехника',
                        'magazin-cvetov' => 'Магазины цветов',
                        'tovarj-dlya-doma' => 'Товары для дома',
                        'stroitelnaya-kompaniya' => 'Строительные материалы',
                        'sport-tovarj' => 'Спортивные товары',
                        'seo-zoomagazin' => 'Зоотовары'
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
                                    $addr = '/promote/thematics/' . $key . '/'
                                    ?>
                                    <a class="theme-iss__item" href="<?= $addr ?>"><?= $val ?></a>
                                <? endforeach; ?>
                            </div>
                        <? endforeach; ?>
                        <? /*
                        <div class="theme-iss__col">
                            <a class="theme-iss__item" href="/promote/thematics/avtosalon/">Автосалоны</a>
                            <a class="theme-iss__item" href="/promote/thematics/avtoservis/">Автосервисы</a>
                            <a class="theme-iss__item"
                               href="/promote/thematics/magazin-avtozapchastei/">Автозапчасти</a>
                            <a class="theme-iss__item" href="/promote/thematics/buhgalteriya/">Бухгалтерия</a>
                            <a class="theme-iss__item" href="/promote/thematics/gostinicj-oteli/">Гостиницы и отели</a>
                            <a class="theme-iss__item" href="/promote/thematics/nedvijimost/">Недвижимость</a>
                            <a class="theme-iss__item" href="/promote/thematics/magazin-igrushek/">Игрушки</a>
                            <a class="theme-iss__item" href="/promote/thematics/znakomstva/">Сайт знакомств</a>
                            <a class="theme-iss__item" href="/promote/thematics/jenskaya-tematika/">Женская тематика</a>
                        </div>
                        <div class="theme-iss__col">
                            <a class="theme-iss__item" href="/promote/thematics/med-centr/">Клиники</a>
                            <a class="theme-iss__item" href="/promote/thematics/knigi/">Книги</a>
                            <a class="theme-iss__item" href="/promote/thematics/magazin-mebeli/">Мебельный сайт</a>
                            <a class="theme-iss__item" href="/promote/thematics/medicinskie-yslygi/">Медицинские
                                услуги</a>
                            <a class="theme-iss__item" href="/promote/thematics/salon-krasotj/">Салоны красоты</a>
                            <a class="theme-iss__item" href="/promote/thematics/svadebnji-salon/">Свадебные
                                агентства</a>
                            <a class="theme-iss__item" href="/promote/thematics/strahovje/">Страхование</a>
                            <a class="theme-iss__item" href="/promote/thematics/stroitelnaya-tematika/">Ремонт и
                                стройка</a>
                            <a class="theme-iss__item" href="/promote/thematics/restoranj-i-kafe/">Рестораны</a>
                        </div>
                        <div class="theme-iss__col">
                            <a class="theme-iss__item" href="/promote/thematics/tyristicheskay-tematika/">Туризм</a>
                            <a class="theme-iss__item" href="/promote/thematics/tyroperator/">Турфирмы</a>
                            <a class="theme-iss__item" href="/promote/thematics/uvelirnaya-tematika/">Ювелирные
                                салоны</a>
                            <a class="theme-iss__item" href="/promote/thematics/magazin-odejdj/">Магазин одежды</a>
                            <a class="theme-iss__item" href="/promote/thematics/elektronika/">Электроника</a>
                            <a class="theme-iss__item" href="/promote/thematics/uridicheskie-yslygi/">Юридические
                                услуги</a>
                            <a class="theme-iss__item" href="/promote/thematics/gryzoperevozki/">Грузоперевозоки</a>
                            <a class="theme-iss__item" href="/promote/thematics/farma/">Фармацевтика</a>
                            <a class="theme-iss__item" href="/promote/thematics/stomatologiya/">Стоматология</a>
                        </div>
                        <div class="theme-iss__col">
                            <a class="theme-iss__item" href="/promote/thematics/fitnes/">Фитнес-клубы</a>
                            <a class="theme-iss__item" href="/promote/thematics/bizness-yslygi/">Деловые услуги</a>
                            <a class="theme-iss__item" href="/promote/thematics/banki/">Банки</a>
                            <a class="theme-iss__item" href="/promote/thematics/magazin-santehnika/">Сантехника</a>
                            <a class="theme-iss__item" href="/promote/thematics/magazin-cvetov/">Магазины цветов</a>
                            <a class="theme-iss__item" href="/promote/thematics/tovarj-dlya-doma/">Товары для дома</a>
                            <a class="theme-iss__item" href="/promote/thematics/stroitelnaya-kompaniya/">Строительные
                                материалы</a>
                            <a class="theme-iss__item" href="/promote/thematics/sport-tovarj/">Спортивные товары</a>
                            <a class="theme-iss__item" href="/promote/thematics/seo-zoomagazin/">Зоотовары</a>
                        </div>
                        */ ?>
                    </div>
                    <!--button.theme-iss__button показать еще-->
                </section>
                <section class="theme-cats">
                    <div class="theme-iss__title">Мы снижаем стоимость рекламы</div>
                    <div class="theme-cats__list"><a class="theme-cats__item" style="background:#103a71;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat1.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">3580 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">450 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Автосалоны</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:url(/images/content/theme/cats/cat2Bg.jpg);">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat2.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">2850 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">350 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Гостиницы и отели</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#ffc601;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat3.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">680 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">150 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Сайты по ремонту</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#ff0a00;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat4.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">1850 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">490 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Агенства недвижимости</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:url(/images/content/theme/cats/cat5Bg.jpg);">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat5.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">4580 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">1120 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Страхования</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#aa0f0f;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat6.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">3200 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">730 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Интернет-магазина сантехники</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#1a5a8c;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat7.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">380 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">89 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Медицинское оборудование</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#ffc9d5;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat8.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">850 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">220 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Салон красоты</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#3f1f44;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat9.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">1500 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">590 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Сайты знакомств</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#ff4200;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat10.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">250 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">70 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Книги</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#70add6;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat11.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">250 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">45 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Отопление</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#c791da;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat12.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">150 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">89 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Психология</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#00968a;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat13.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">2500 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">590 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Ювелирные изделия</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#9edc46;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat14.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">350 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">89 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Флористика</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
                        </a><a class="theme-cats__item" style="background:#f29d30;">
                            <div class="proportion proportion_1x1"></div>
                            <div class="theme-cats__img"><img class="theme-cats__img-img"
                                                              src="/images/content/theme/cats/cat15.png"></div>
                            <div class="theme-cats__line"></div>
                            <div class="theme-cats__fromTo">
                                <div class="theme-cats__from">
                                    <div class="theme-cats__from-name">до</div>
                                    <div class="theme-cats__from-val">1450 Р</div>
                                </div>
                                <div class="theme-cats__to">
                                    <div class="theme-cats__to-name">после</div>
                                    <div class="theme-cats__to-val">700 Р</div>
                                </div>
                            </div>
                            <div class="theme-cats__thematic">Вождение</div>
                            <div class="theme-cats__title">Стоимость заявки</div>
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
                                результат и нетревиальный подход к достижении целей. Для нас нет невыполнимых задач.


                            </div>
                        </div>
                        <button class="edge__button button button_red callorderOpen" type="button">заказать
                            продвижение
                        </button>
                    </div>
                </section>
                <section class="seo-price">
                    <div class="seo-price__title">Стоимость продвижения</div>
                    <div class="seo-price__switches">
                        <div class="seo-price__switches-list">
                            <button class="active seo-price__switch" data-id="1"><span class="seo-price__switch-title">Тариф «Стартап»</span>
                            </button>
                            <button class="seo-price__switch" data-id="2"><span class="seo-price__switch-title">Тариф «Оптимальный»</span>
                            </button>
                            <button class="seo-price__switch" data-id="3"><span class="seo-price__switch-title">Тариф «Прорыв»</span>
                            </button>
                            <button class="seo-price__switch" data-id="4"><span class="seo-price__switch-title">Тариф «Фикс»</span>
                            </button>
                        </div>
                        <div class="seo-price__line">
                            <div class="seo-price__subline"></div>
                        </div>
                    </div>
                    <div class="seo-price__tabs">
                        <div class="active seo-price__tab" data-id="1">
                            <div class="seo-price__list">
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 15 000 знаков</div>
                                        <div class="seo-price__item-text">Написание и размещения текстов в рамках
                                            тарифа
                                        </div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 200</div>
                                        <div class="seo-price__item-text">Ключевых слов в рамках одного проекта</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">400 изображений</div>
                                        <div class="seo-price__item-text">Оптимизация до 400 изображений на сайте</div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 30</div>
                                        <div class="seo-price__item-text">Кол-во продвигаемых разделов сайта</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">10 ч.</div>
                                        <div class="seo-price__item-text">Аналитических работ</div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">56 ч.</div>
                                        <div class="seo-price__item-text">Время SEO-специалистов</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">+</div>
                                        <div class="seo-price__item-list">
                                            <div class="seo-price__item-li">Анализ конкурентов</div>
                                            <div class="seo-price__item-li">Составление ядра запросов</div>
                                            <div class="seo-price__item-li">Полная SEO оптимизация</div>
                                        </div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">+</div>
                                        <div class="seo-price__item-list">
                                            <div class="seo-price__item-li">Статистика и маркетинговый план</div>
                                            <div class="seo-price__item-li">Отчётность 2 раза в месяц</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__price">29 900 Р / мес</div>
                                    </div>
                                    <div class="seo-price__item seo-price__item_bottom">
                                        <div class="seo-price__desc">После 3х месяцев оплата за результат</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="seo-price__tab" data-id="2">
                            <div class="seo-price__list">
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 20 000 знаков</div>
                                        <div class="seo-price__item-text">Написание и размещения текстов в рамках
                                            тарифа
                                        </div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 300</div>
                                        <div class="seo-price__item-text">Ключевых слов в рамках одного проекта</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">500 изображений</div>
                                        <div class="seo-price__item-text">Оптимизация до 500 изображений на сайте</div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 50</div>
                                        <div class="seo-price__item-text">Кол-во продвигаемых разделов сайта</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">15 ч.</div>
                                        <div class="seo-price__item-text">Аналитических работ</div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">86 ч.</div>
                                        <div class="seo-price__item-text">Время SEO-специалистов</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">+</div>
                                        <div class="seo-price__item-list">
                                            <div class="seo-price__item-li">Анализ конкурентов</div>
                                            <div class="seo-price__item-li">Составление ядра запросов</div>
                                            <div class="seo-price__item-li">Полная SEO оптимизация</div>
                                        </div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">+</div>
                                        <div class="seo-price__item-list">
                                            <div class="seo-price__item-li">Статистика и маркетинговый план</div>
                                            <div class="seo-price__item-li">Отчётность 2 раза в месяц</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__price">39 900 Р / мес</div>
                                    </div>
                                    <div class="seo-price__item seo-price__item_bottom">
                                        <div class="seo-price__desc">После 3х месяцев оплата за результат</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="seo-price__tab" data-id="3">
                            <div class="seo-price__list">
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 35 000 знаков</div>
                                        <div class="seo-price__item-text">Написание и размещения текстов в рамках
                                            тарифа
                                        </div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 400</div>
                                        <div class="seo-price__item-text">Ключевых слов в рамках одного проекта</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">700 изображений</div>
                                        <div class="seo-price__item-text">Оптимизация до 700 изображений на сайте</div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 70</div>
                                        <div class="seo-price__item-text">Кол-во продвигаемых разделов сайта</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">20 ч.</div>
                                        <div class="seo-price__item-text">Аналитических работ</div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">112 ч.</div>
                                        <div class="seo-price__item-text">Время SEO-специалистов</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">+</div>
                                        <div class="seo-price__item-list">
                                            <div class="seo-price__item-li">Анализ конкурентов</div>
                                            <div class="seo-price__item-li">Составление ядра запросов</div>
                                            <div class="seo-price__item-li">Полная SEO оптимизация</div>
                                        </div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">+</div>
                                        <div class="seo-price__item-list">
                                            <div class="seo-price__item-li">Статистика и маркетинговый план</div>
                                            <div class="seo-price__item-li">Отчётность 2 раза в месяц</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__price">49 900 Р / мес</div>
                                    </div>
                                    <div class="seo-price__item seo-price__item_bottom">
                                        <div class="seo-price__desc">После 3х месяцев оплата за результат</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="seo-price__tab" data-id="4">
                            <div class="seo-price__list">
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 20 000 знаков</div>
                                        <div class="seo-price__item-text">Написание и размещения текстов в рамках
                                            тарифа
                                        </div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 300</div>
                                        <div class="seo-price__item-text">Ключевых слов в рамках одного проекта</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">500 изображений</div>
                                        <div class="seo-price__item-text">Оптимизация до 500 изображений на сайте</div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">до 50</div>
                                        <div class="seo-price__item-text">Кол-во продвигаемых разделов сайта</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">15 ч.</div>
                                        <div class="seo-price__item-text">Аналитических работ</div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">86 ч.</div>
                                        <div class="seo-price__item-text">Время SEO-специалистов</div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">+</div>
                                        <div class="seo-price__item-list">
                                            <div class="seo-price__item-li">Анализ конкурентов</div>
                                            <div class="seo-price__item-li">Составление ядра запросов</div>
                                            <div class="seo-price__item-li">Полная SEO оптимизация</div>
                                        </div>
                                    </div>
                                    <div class="seo-price__item">
                                        <div class="seo-price__item-title">+</div>
                                        <div class="seo-price__item-list">
                                            <div class="seo-price__item-li">Статистика и маркетинговый план</div>
                                            <div class="seo-price__item-li">Отчётность 2 раза в месяц</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="seo-price__row">
                                    <div class="seo-price__item">
                                        <div class="seo-price__price">34 900 Р / мес</div>
                                    </div>
                                    <div class="seo-price__item seo-price__item_bottom">
                                        <div class="seo-price__desc">После 3х месяцев оплата за результат</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <section class="theme-bottom">
                <div class="bottom">
                    <div class="container2">
                        <div class="bottom__rev">
                            <? require $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/bottom/rev.php' ?>
                        </div>
                        <div class="bottom__send">
                            <? require $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/bottom/send.php' ?>
                        </div>

                        <div class="bottom__footer">
                            <? require $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/bottom/footer.php' ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</main>
<!-- END main -->

<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/bottom.php' ?>
