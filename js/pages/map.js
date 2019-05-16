(function () {

    const button = document.querySelector('.conts-map__button'),
        close = document.querySelector('.conts-map__close'),
        map = document.querySelector('.conts-map__map');

    if (button) {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            map.classList.toggle('open');
        });
        close.addEventListener('click', function (e) {
            e.preventDefault();
            map.classList.remove('open');
        });
    }

    $('.conts-map__button2').on('click', function (e) {
        let $this = $(this),
            id = $this.data('id'),
            maps = $('.conts-map__wrap'),
            map = $('#'+id);

        maps.removeClass('active');
        map.addClass('active');

    });


}());


/*YANDEX*/
$(function () {
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {

        if ($('#map-yandex').length) {
            var center = [55.656679, 37.729768];
            // if ($(window).width() < 576) {
            //     center = [55.609501798660396, 37.61325538360591];
            // }

            myMap = new ymaps.Map("map-yandex", {
                center: center,
                zoom: 15,
                controls: []
            });


            myMap.behaviors.disable(['scrollZoom']);
            // myMap.controls.remove('geolocationControl')
            //     .remove('searchControl')
            //     .remove('trafficControl')
            //     .remove('typeSelector')
            //     .remove('fullscreenControl')
            //     .remove('zoomControl')
            //     .remove('rulerControl');

            myPin = new ymaps.GeoObjectCollection({}, {
                // iconLayout: 'default#image',
                // iconImageHref: '/img/icons/map-marker.svg',
                // iconImageSize: [46, 57],
                // iconImageOffset: [-15, -55]
            });


            myPlacemark1 = new ymaps.Placemark([55.656679, 37.729768], {
                    balloonContentHeader: "Web-comp",
                    balloonContentBody: "Студия веб-дизайна Web-comp",
                    balloonContentFooter: "Россия, 125040, г. Москва, ул. Нижние Поля, 31, 405-407, 4 этаж",
                    hintContent: "Web-comp.ru"
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: '/images/icons/pinY.png',
                    iconImageSize: [110, 110],
                    iconImageOffset: [-55, -55]
                    // preset: 'islands#redGlyphIcon'
                });


            myPin.add(myPlacemark1);
            myMap.geoObjects.add(myPin);
        }
    }
});
/*END YANDEX*/