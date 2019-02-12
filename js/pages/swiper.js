window.onload = function () {
    // initialize swiper when document ready
    let swiperReviews = new Swiper('.rev__container', {
        // Optional parameters
        direction: 'vertical',
        loop: true,
        speed: 300,
        slidesPerView: 3,
        spaceBetween: 8,
        initialSlide: 1,
        centeredSlides: true,
        slideToClickedSlide: true,
        grabCursor: true,
        on: {
            slideChange: function () {
                let index = this.activeIndex;


                for (let i = 0; i < this.slides.length; i++) {
                    this.slides[i].classList.add('inactive');
                }

                this.slides[index].classList.remove('inactive');

            },
        }
    });

    let devSwiper = new Swiper('.site-dev__container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        // Navigation arrows
        navigation: {
            nextEl: '.site-dev__next',
            prevEl: '.site-dev__prev',
        },
        on: {
            init: function () {
                setDevDesc(this.slides[this.activeIndex]);
            },
            slideChange: function (e) {
                setDevDesc(this.slides[this.activeIndex]);
            }
        }


    });

    function setDevDesc(slide) {
        let logoObj = document.querySelector('.site-dev__img');
        if (logoObj) {
            let descObj = document.querySelectorAll('.site-dev__desc-item')[0].querySelector('.site-dev__desc-val'),
                goalObj = document.querySelectorAll('.site-dev__desc-item')[1].querySelector('.site-dev__desc-val'),
                logo = slide.dataset.logo,
                desc = slide.dataset.desc,
                goal = slide.dataset.goal;

            logoObj.src = logo;
            descObj.innerText = desc;
            goalObj.innerText = goal;
        }
    }

    let seoCatsSwiper = new Swiper('.slider__container', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 2,
        grabCursor: true,
        scrollbar: {
            el: '.slider__scrollbar .swiper-scrollbar',
            dragSize: 'auto'
        },
        breakpoints: {
            // when window width is <= 320px
            479.99: {
                slidesPerView: 1,
                spaceBetween: 2
            },
            // when window width is <= 320px
            767.99: {
                slidesPerView: 1,
                spaceBetween: 2
            },
            // when window width is <= 320px
            991.99: {
                slidesPerView: 2,
                spaceBetween: 2
            },
            // when window width is <= 480px
            1439.99: {
                slidesPerView: 2,
                spaceBetween: 2
            },
            // when window width is <= 640px
            1899.99: {
                slidesPerView: 2,
                spaceBetween: 2
            }
        }
    });

    let slider2Swiper = new Swiper('.slider2__container', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 2,
        grabCursor: true,
        scrollbar: {
            el: '.slider2__scrollbar .swiper-scrollbar',
            dragSize: 'auto'
        },
        breakpoints: {
            // when window width is <= 320px
            479.99: {
                slidesPerView: 1,
                spaceBetween: 2
            },
            // when window width is <= 320px
            767.99: {
                slidesPerView: 1,
                spaceBetween: 2
            },
            // when window width is <= 320px
            991.99: {
                slidesPerView: 2,
                spaceBetween: 2
            },
            // when window width is <= 480px
            1439.99: {
                slidesPerView: 2,
                spaceBetween: 2
            },
            // when window width is <= 640px
            1899.99: {
                slidesPerView: 2,
                spaceBetween: 2
            }
        }
    });

    let portSliderSwiper = new Swiper('.port-slider__container', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 'auto',
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: '.port-slider__pagination',
            type: 'fraction',
            renderFraction: function (currentClass, totalClass) {
                return '<span class="' + currentClass + '"></span>' +
                    '<span class="swiper-pagination-seporator"></span>' +
                    '<span class="' + totalClass + '"></span>';
            }
        },

        navigation: {
            nextEl: '.port-slider__next',
            prevEl: '.port-slider__prev',
        },
    });

    let articleSwiper = new Swiper('.art-desc__swiper', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.art-desc__next',
            prevEl: '.art-desc__prev',
        }
    });

    let textSwiper = new Swiper('.text-desc__swiper', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.text-desc__next',
            prevEl: '.text-desc__prev',
        }
    });

    let testingSwiper = new Swiper('.testing__swiper', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 1,
        simulateTouch: false,
        navigation: {
            nextEl: '.testing__slide-next',
            prevEl: '.testing__slide-prev',
        },
        pagination: {
            el: '.testing__pag .swiper-pagination',
            type: 'progressbar',
        },
        on: {
            init: function () {
                let activeIndex = this.activeIndex + 1,
                    allSlides = this.slides.length,
                    percents = document.querySelector('.testing__pag-percents');

                percents.innerHTML = (activeIndex / allSlides) * 100 + ' %';
                // debugger;
                // console.log('swiper initialized');
            },
            slideChange: function () {
                let activeIndex = this.activeIndex + 1,
                    allSlides = this.slides.length,
                    percents = document.querySelector('.testing__pag-percents');

                percents.innerHTML = Math.round((activeIndex / allSlides) * 100) + ' %';
            }
        },
    });

    let promoteSwiper = new Swiper('.promote-slider', {
        // Optional parameters
        direction: 'horizontal',
        // Navigation arrows
        navigation: {
            nextEl: '.promote-slider__next',
            prevEl: '.promote-slider__prev',
        },
        on: {
            init: function () {
            },
            slideChange: function (e) {
                // activePromoteSlide = this.slides[this.activeIndex];
                // resetPromoteSlides();
                // animateNumbersGraphs();
                let slide = this.slides[this.activeIndex],
                    numbers = slide.querySelector('.numbers'),
                    numbersObj = new NumbersCounting(numbers, {
                        item: '.number'
                    }),
                    graphs = {
                        graph1: slide.querySelector('.promote-result__graph-img1'),
                        graph2: slide.querySelector('.promote-result__graph-img2')
                    },
                    graphsObj = new Graphs(graphs);
                numbersObj.clearValues();
                graphsObj.clear();

                setTimeout(function () {
                    // graphsObj.animate();
                    numbersObj.animateNumbers();
                }, 10);



            }
        }
    });
};