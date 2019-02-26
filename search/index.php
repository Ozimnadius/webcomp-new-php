<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/top2.php' ?>

<!-- main -->
<main class="page page_second">
    <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/aside.php' ?>
    <main class="main">
        <div class="search-result">
            <div class="container3">
                <div class="search-result__title">
                    Результаты поиска
                </div>
                <form action="#" method="post" class="search-result__form">
                    <input placeholder="Поиск...." type="text" name="search" class="search-result__input">
                    <button type="submit" class="search-result__submit">
                        Найти
                    </button>
                </form>
                <div class="search-result__list">
                    <? for ($i = 0; $i < 6; $i++): ?>
                        <a href="/" class="search-result__item">
                            <div class="search-result__item-title">
                                Пункт 1
                            </div>
                            <div class="search-result__item-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam cididunt ut labore
                                et dolore.
                            </div>
                        </a>
                    <? endfor; ?>
                </div>
                <div class="search-result__pag">
                    <a href="/search-result/" class="search-result__pag-start" title="В начало">
                        <svg class="search-result__pag-svg">
                            <use xlink:href="/images/icons/sprite.svg#start"></use>
                        </svg>
                    </a>
                    <a href="/search-result/" class="search-result__pag-prev" title="Предыдущая">
                        <svg class="search-result__pag-svg">
                            <use xlink:href="/images/icons/sprite.svg#prev"></use>
                        </svg>
                    </a>
                    <a href="/search-result/" class="search-result__pag-item">
                        3
                    </a>
                    <a href="/search-result/" class="search-result__pag-item active">
                        4
                    </a>
                    <a href="/search-result/" class="search-result__pag-item">
                        5
                    </a>
                    <a href="/search-result/" class="search-result__pag-next" title="Следующая">
                        <svg class="search-result__pag-svg">
                            <use xlink:href="/images/icons/sprite.svg#next"></use>
                        </svg>
                    </a>
                    <a href="/search-result/" class="search-result__pag-end" title="В конец">
                        <svg class="search-result__pag-svg">
                            <use xlink:href="/images/icons/sprite.svg#end"></use>
                        </svg>
                    </a>

                </div>
            </div>
            <div class="search-result__bottom">
                <div class="bottom">
                    <div class="container2">
                        <div class="bottom__footer">
                            <? include $_SERVER['DOCUMENT_ROOT'] . '/pages/blocks/bottom/footer.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</main>
<!-- END main -->

<? include $_SERVER['DOCUMENT_ROOT'] . '/pages/bottom.php' ?>
