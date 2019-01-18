<? include 'pages/top2.php'?>

<!-- main -->
<main class="page">
    <? include 'pages/blocks/aside.php'?>
    <main class="main">
        <div class="testing">
            <div class="container3">
                <div class="testing-start active">
                    <div class="testing-start__title">
                        <div class="testing-start__title-left">
                            <div class="title_big title title_small">
                                <div class="title__line">
                                    <div class="title__text">Пройдите тест</div>
                                </div>
                                <div class="title__line"><span class="title__text title__text_small">получите</span><span class="title__text">скидку</span></div>
                            </div>
                        </div>
                        <div class="testing-start__title-right">
                            <div class="testing-start__percents">
                                <div class="testing-start__percents-val">15</div>
                                <div class="testing-start__percents-type">%</div>
                            </div>
                        </div>
                    </div>
                    <div class="testing-start__subtitle">Узнайте, на сколько хорошо вы знакомы с интернет-маркетингом<br>чтобы начать бизнес в сети самостоятельно</div>
                    <button class="testing-start__button">
                        <div class="btn">
                            <div class="btn__title">Начать тест</div>
                            <div class="btn__lines">
                                <div class="btn__line-top"></div>
                                <div class="btn__line-right"></div>
                                <div class="btn__line-bottom"></div>
                                <div class="btn__line-left"></div>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- -SLIDER-->
                <div class="testing-slider">
                    <form class="testing__form form" action="#" method="post">
                        <div class="swiper-container testing__swiper">
                            <div class="swiper-wrapper testing__wrapper">
                                <div class="swiper-slide">
                                    <div class="testing__number">1</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Какие метрики не относятся к поведенческим факторам?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="factors" value="Средняя продолжительность просмотра страницы сайта">
                                                        <div class="testing__radio-label">Средняя продолжительность просмотра страницы сайта
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="factors" value="Число просмотров за сеанс">
                                                        <div class="testing__radio-label">Число просмотров за сеанс
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="factors" value="Количество уникальных посетителей">
                                                        <div class="testing__radio-label">Количество уникальных посетителей
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="factors" value="Показатель отказов">
                                                        <div class="testing__radio-label">Показатель отказов
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">2</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Open rate, применительно к email-маркетингу, – это метрика, которая показывает...</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="openRate" value="Какой процент людей кликнул по ссылке в письме">
                                                        <div class="testing__radio-label">Какой процент людей кликнул по ссылке в письме
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="openRate" value="Какой процент людей отписался">
                                                        <div class="testing__radio-label">Какой процент людей отписался
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="openRate" value="Какой процент людей открыл письмо">
                                                        <div class="testing__radio-label">Какой процент людей открыл письмо
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="openRate" value="Какой процент людей отметил письмо как спам">
                                                        <div class="testing__radio-label">Какой процент людей отметил письмо как спам
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">3</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">От чего зависит показатель качества рекламных объявлений в Google Adwords?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="googleAdwords" value="CTR объявления">
                                                        <div class="testing__radio-label">CTR объявления
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="googleAdwords" value="Релевантность объявления">
                                                        <div class="testing__radio-label">Релевантность объявления
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="googleAdwords" value="Качество лендинга">
                                                        <div class="testing__radio-label">Качество лендинга
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="googleAdwords" value="Все вышеперечисленное">
                                                        <div class="testing__radio-label">Все вышеперечисленное
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">4</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Что такое CTA в лидогенерации? </div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="leadGeneration" value="Click through action">
                                                        <div class="testing__radio-label">Click through action
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="leadGeneration" value="Call to action">
                                                        <div class="testing__radio-label">Call to action
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="leadGeneration" value="Cost to action">
                                                        <div class="testing__radio-label">Cost to action
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="leadGeneration" value="Come to action">
                                                        <div class="testing__radio-label">Come to action
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">5</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Поддерживает ли Twitter gif-анимацию?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="twitterGif" value="Да">
                                                        <div class="testing__radio-label">Да
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="twitterGif" value="Нет">
                                                        <div class="testing__radio-label">Нет
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="twitterGif" value="Возможно">
                                                        <div class="testing__radio-label">Возможно
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="twitterGif" value="Что такое gif?">
                                                        <div class="testing__radio-label">Что такое gif?
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">6</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Какой из следующих типов формата рекламы на Youtube не существует?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="advYoutube" value="Медийная">
                                                        <div class="testing__radio-label">Медийная
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="advYoutube" value="Пропускаемая">
                                                        <div class="testing__radio-label">Пропускаемая
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="advYoutube" value="Статичная">
                                                        <div class="testing__radio-label">Статичная
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="advYoutube" value="Оверлей">
                                                        <div class="testing__radio-label">Оверлей
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">7</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Если CTR рекламной кампании равен 4%, а количество показов равно 1000, то сколько человек кликнули по объявлению?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="ctr" value="4">
                                                        <div class="testing__radio-label">4
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="ctr" value="200">
                                                        <div class="testing__radio-label">200
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="ctr" value="40">
                                                        <div class="testing__radio-label">40
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="ctr" value="20">
                                                        <div class="testing__radio-label">20
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">8</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Зачем нужен файл robots.txt?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="robots" value="Чтобы указать поисковым системам, какие страницы не нужно индексировать">
                                                        <div class="testing__radio-label">Чтобы указать поисковым системам, какие страницы не нужно индексировать
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="robots" value="Чтобы прописать в нем главное зеркало сайта">
                                                        <div class="testing__radio-label">Чтобы прописать в нем главное зеркало сайта
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="robots" value="Чтобы указать поисковому боту, как часто нужно индексировать ваш сайт">
                                                        <div class="testing__radio-label">Чтобы указать поисковому боту, как часто нужно индексировать ваш сайт
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="robots" value="Все вышеперечисленное">
                                                        <div class="testing__radio-label">Все вышеперечисленное
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">9</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Что такое ЧПУ в тематике SEO?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="sef" value="Чистая Поисковая Уникальность">
                                                        <div class="testing__radio-label">Чистая Поисковая Уникальность
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="sef" value="Числовое Программное Управление">
                                                        <div class="testing__radio-label">Числовое Программное Управление
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="sef" value="ЧеловекоПонятный URL">
                                                        <div class="testing__radio-label">ЧеловекоПонятный URL
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="sef" value="Черный Поисковый Уровень">
                                                        <div class="testing__radio-label">Черный Поисковый Уровень
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">10</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Какой из следующих форматов не является словарем семантической разметки?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="formatSeo" value="Open Graph">
                                                        <div class="testing__radio-label">Open Graph
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="formatSeo" value="Schema.org">
                                                        <div class="testing__radio-label">Schema.org
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="formatSeo" value="FOAF">
                                                        <div class="testing__radio-label">FOAF
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="formatSeo" value="RDFA">
                                                        <div class="testing__radio-label">RDFA
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">11</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Какой из перечисленных элементов не влияет на скорость загрузки страницы?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="speedLoad" value="Большие изображения">
                                                        <div class="testing__radio-label">Большие изображения
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="speedLoad" value="Большое количество кодов JavaScript или CSS">
                                                        <div class="testing__radio-label">Большое количество кодов JavaScript или CSS
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="speedLoad" value="Выключенный CDN">
                                                        <div class="testing__radio-label">Выключенный CDN
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="speedLoad" value="Длина url страницы">
                                                        <div class="testing__radio-label">Длина url страницы
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">12</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">От чего зависит цена клика в Google Adwords?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="priceGoogle" value="Показателя качества объявления">
                                                        <div class="testing__radio-label">Показателя качества объявления
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="priceGoogle" value="Тематики">
                                                        <div class="testing__radio-label">Тематики
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="priceGoogle" value="Оба варианта">
                                                        <div class="testing__radio-label">Оба варианта
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="priceGoogle" value="Ни один из перечисленных">
                                                        <div class="testing__radio-label">Ни один из перечисленных
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">13</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Одно рекламное объявление сконвертило 5% от 500 кликнувших по объявлению, а второе – 20% от 100. Какое объявление оказалось более успешным?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="bestAdv" value="Первое">
                                                        <div class="testing__radio-label">Первое
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="bestAdv" value="Второе">
                                                        <div class="testing__radio-label">Второе
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="bestAdv" value="Они одинаково успешны">
                                                        <div class="testing__radio-label">Они одинаково успешны
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">14</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Какова средняя конверсия на лендингах?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="landingConversion" value="30%">
                                                        <div class="testing__radio-label">30%
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="landingConversion" value="5%">
                                                        <div class="testing__radio-label">5%
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="landingConversion" value="1%">
                                                        <div class="testing__radio-label">1%
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="landingConversion" value="Средней конверсии не существует">
                                                        <div class="testing__radio-label">Средней конверсии не существует
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">15</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Какая из следующих практик не считается черным SEO?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="blackSeo" value="Накрутка поведенческих факторов">
                                                        <div class="testing__radio-label">Накрутка поведенческих факторов
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="blackSeo" value="Вписывание в текст страницы чрезмерно большого количества ключей">
                                                        <div class="testing__radio-label">Вписывание в текст страницы чрезмерно большого количества ключей
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="blackSeo" value="Изменение даты публикации материала">
                                                        <div class="testing__radio-label">Изменение даты публикации материала
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="blackSeo" value="Клоакинг">
                                                        <div class="testing__radio-label">Клоакинг
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">16</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">К какому из следующих форматов необходимо прописывать alt-текст?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="altText" value=".pdf">
                                                        <div class="testing__radio-label">.pdf
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="altText" value=".doc">
                                                        <div class="testing__radio-label">.doc
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="altText" value=".gif">
                                                        <div class="testing__radio-label">.gif
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="altText" value=".swf">
                                                        <div class="testing__radio-label">.swf
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">17</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">На сайте 1000 страниц, но в индекс Google попали только 100. В чем может быть причина?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="1000Page" value="Вы случайно закрыли от индексации 900 страниц в файле robots.txt">
                                                        <div class="testing__radio-label">Вы случайно закрыли от индексации 900 страниц в файле robots.txt
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="1000Page" value="Эти страницы имеют катастрофически низкое качество">
                                                        <div class="testing__radio-label">Эти страницы имеют катастрофически низкое качество
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="1000Page" value="На ваш сайт наложен фильтр Google">
                                                        <div class="testing__radio-label">На ваш сайт наложен фильтр Google
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="1000Page" value="Все вышеперечисленное">
                                                        <div class="testing__radio-label">Все вышеперечисленное
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">18</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Зачем нужна микроразметка?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="dataMarkup" value="Чтобы получить красивые расширенные сниппеты">
                                                        <div class="testing__radio-label">Чтобы получить красивые расширенные сниппеты
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="dataMarkup" value="Чтобы поисковые роботы лучше понимали смысл контента страницы">
                                                        <div class="testing__radio-label">Чтобы поисковые роботы лучше понимали смысл контента страницы
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="dataMarkup" value="Чтобы был более высокий CTR страницы в выдаче">
                                                        <div class="testing__radio-label">Чтобы был более высокий CTR страницы в выдаче
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="dataMarkup" value="Все вышеперечисленное">
                                                        <div class="testing__radio-label">Все вышеперечисленное
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">19</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Какие из следующих признаков говорят о том, что ваш сайт получил бан от Google?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="banGoogle" value="В индексе более 500 страниц, но трафик с Google равен нулю">
                                                        <div class="testing__radio-label">В индексе более 500 страниц, но трафик с Google равен нулю
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="banGoogle" value="Вы не сможете найти свой сайт даже по брендированным запросам">
                                                        <div class="testing__radio-label">Вы не сможете найти свой сайт даже по брендированным запросам
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="banGoogle" value="Вам пришло сообщение в панели вебмастера Google с уведомлением о том, что ваш сайт попал под фильтр">
                                                        <div class="testing__radio-label">Вам пришло сообщение в панели вебмастера Google с уведомлением о том, что ваш сайт попал под фильтр
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="banGoogle" value="Все вышеперечисленное">
                                                        <div class="testing__radio-label">Все вышеперечисленное
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-next disabled" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Следующий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testing__number">20</div>
                                    <div class="testing__slide">
                                        <div class="testing__slide-title">Главная причина наложения фильтра АГС?</div>
                                        <div class="testing__fields">
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="filterAgc" value="Некачественные беклинки">
                                                        <div class="testing__radio-label">Некачественные беклинки
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="filterAgc" value="Накрутка поведенческих факторов">
                                                        <div class="testing__radio-label">Накрутка поведенческих факторов
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="testing__row">
                                                <div class="testing__field">
                                                    <label class="testing__radio">
                                                        <input class="testing__radio-input" type="radio" name="filterAgc" value="Отсутствие добавочной ценности в контенте сайта">
                                                        <div class="testing__radio-label">Отсутствие добавочной ценности в контенте сайта
                                                            <div class="testing__radio-fake"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testing__buttons">
                                            <button class="testing__slide-prev" type="button">
                                                <div class="btn">
                                                    <div class="btn__title">Предыдущий вопрос</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                            <button class="testing__slide-submit disabled" type="submit">
                                                <div class="btn">
                                                    <div class="btn__title">Завершить тест</div>
                                                    <div class="btn__lines">
                                                        <div class="btn__line-top"></div>
                                                        <div class="btn__line-right"></div>
                                                        <div class="btn__line-bottom"></div>
                                                        <div class="btn__line-left"></div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="action" value="testForm">
                                    </div>
                                </div>
                            </div>
                            <div class="testing__pag">
                                <div class="swiper-pagination"></div>
                                <div class="testing__pag-bottom">
                                    <div class="testing__pag-percents">0 %</div>
                                    <div class="testing__pag-title"><span class="testing__peg-text">Ваша скидка</span><span class="testing__pag-perc"> 15 %</span></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</main>
<!-- END main -->

<? include 'pages/bottom.php'?>
