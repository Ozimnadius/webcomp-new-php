$.fn.hyphenate = function () {
    var all = "[абвгдеёжзийклмнопрстуфхцчшщъыьэюя]",
        glas = "[аеёиоуыэю\я]",
        sogl = "[бвгджзклмнпрстфхцчшщ]",
        zn = "[йъь]",
        shy = "\xAD",
        re = [];

    re[1] = new RegExp("(" + zn + ")(" + all + all + ")", "ig");
    re[2] = new RegExp("(" + glas + ")(" + glas + all + ")", "ig");
    re[3] = new RegExp("(" + glas + sogl + ")(" + sogl + glas + ")", "ig");
    re[4] = new RegExp("(" + sogl + glas + ")(" + sogl + glas + ")", "ig");
    re[5] = new RegExp("(" + glas + sogl + ")(" + sogl + sogl + glas + ")", "ig");
    re[6] = new RegExp("(" + glas + sogl + sogl + ")(" + sogl + sogl + glas + ")", "ig");
    return this.each(function () {
        var text = $(this).html();
        for (var i = 1; i < 7; ++i) {
            text = text.replace(re[i], "$1" + shy + "$2");
        }
        $(this).html(text);
    });
};

function getComputedTranslateY(obj) {
    if (!window.getComputedStyle) return;
    var style = getComputedStyle(obj),
        transform = style.transform || style.webkitTransform || style.mozTransform;
    var mat = transform.match(/^matrix3d\((.+)\)$/);
    if (mat) return parseFloat(mat[1].split(', ')[13]);
    mat = transform.match(/^matrix\((.+)\)$/);
    return mat ? parseFloat(mat[1].split(', ')[5]) : 0;
}

function getCssValuePrefix() {
    var rtrnVal = '';//default to standard syntax
    var prefixes = ['-o-', '-ms-', '-moz-', '-webkit-'];

    // Create a temporary DOM object for testing
    var dom = document.createElement('div');

    for (var i = 0; i < prefixes.length; i++) {
        // Attempt to set the style
        dom.style.background = prefixes[i] + 'linear-gradient(#000000, #ffffff)';

        // Detect if the style was successfully set
        if (dom.style.background) {
            rtrnVal = prefixes[i];
        }
    }

    dom = null;
    delete dom;

    return rtrnVal;
}

function GetNoun(number, one, two, five) {
    number = Math.abs(number);
    number %= 100;
    if (number >= 5 && number <= 20) {
        return five;
    }
    number %= 10;
    if (number == 1) {
        return one;
    }
    if (number >= 2 && number <= 4) {
        return two;
    }
    return five;
}

function index(list, item) {
    return Array.prototype.indexOf.call(list, item);
}

function Switches(prop) {
    this.sws = document.querySelector(prop.sws);
    this.width = this.sws.offsetWidth;
    this.swsList = document.querySelectorAll(prop.sw);
    this.line = document.querySelector(prop.line);
    this.tabs = document.querySelectorAll(prop.tab);
    this.tabSelector = prop.tab;
    this.autoWidth = prop.autoWidth || false;
    // this.scrollbar = prop.scrollbar || true;

    if (prop.switchActive === false) {
        this.switchActive = false
    } else {
        this.switchActive = true;
    }

    if (prop.scrollbar === false) {
        this.scrollbar = false;
    } else {
        this.scrollbar = true;
    }

    let that = this;

    for (let i = 0; i < that.swsList.length; i++) {
        that.swsList[i].addEventListener('click', function (e) {

            let percent = (this.offsetLeft / that.width) * 100,
                id = this.dataset.id,
                tab = document.querySelector(that.tabSelector + '[data-id="' + id + '"]');


            for (let i = 0; i < that.swsList.length; i++) {
                that.swsList[i].classList.remove('active');
            }

            for (let i = 0; i < that.tabs.length; i++) {
                that.tabs[i].classList.remove('active');
            }

            tab.classList.add('active');
            this.classList.add('active');

            if (that.scrollbar) {
                that.line.style.left = percent + '%';

                if (that.autoWidth) {
                    let lineWidth = this.offsetWidth + 'px';
                    that.line.style.width = lineWidth;
                }
            }

        });
    }
}

function NumberCounting(num, time) {
    this.number = num;
    this.val = this.number.querySelector('.number__val');
    this.from = parseInt(this.val.dataset.from);
    this.to = parseInt(this.val.dataset.to);
    this.time = time;
    let that = this;

    this.counting = function () {
        let i = that.from,
            frame = that.time / that.to;

        let numInterval = setInterval(function (e) {

            if (i <= that.to) {

                that.val.innerHTML = i;
                i++;
            } else {
                clearInterval(numInterval);
            }

        }, frame)

    };
    this.clear = function () {
        this.val.innerHTML = 0;
    }
}

function NumbersCounting(object, settings) {
    this.numbers = object;
    this.itemClass = settings.item || '.number';
    this.time = this.numbers.dataset.timer || '2000';

    this.animateNumbers = function () {
        let numbers = this.numbers,
            numberAll = numbers.querySelectorAll(this.itemClass);

        for (let i = 0; i < numberAll.length; i++) {
            let number = numberAll[i];

            if (number.classList.contains('active')) {
                continue;
            }

            number.classList.add('active');
            let numberObj = new NumberCounting(number, this.time).counting();
        }
    };
    this.clearValues = function () {
        let numbers = this.numbers,
            numberAll = numbers.querySelectorAll(this.itemClass);

        for (let i = 0; i < numberAll.length; i++) {
            let number = numberAll[i];

            number.classList.remove('active');
            let numberObj = new NumberCounting(number, this.time).clear();
        }
    }

}

function ScrollTo(object, f) {
    this.isScrolling = false;
    this.object = object;
    let that = this;
    let callback = f || function(){};

    window.addEventListener('scroll', throttleScroll, false);

    this.scrolling = function () {
        if (that.isFullyVisible(that.object)) {
            callback();
        }
    };

    function throttleScroll(e) {
        if (that.isScrolling == false) {
            window.requestAnimationFrame(function () {
                that.scrolling();
                that.isScrolling = false;
            });
        }
        that.isScrolling = true;
    }

    this.isFullyVisible = function () {
        var elementBoundary = that.object.getBoundingClientRect();

        var top = elementBoundary.top;
        var bottom = elementBoundary.bottom;

        return ((top >= 0) && (bottom <= window.innerHeight));
    };
    this.isPartiallyVisible = function () {
        var elementBoundary = that.object.getBoundingClientRect();

        var top = elementBoundary.top;
        var bottom = elementBoundary.bottom;
        var height = elementBoundary.height;

        return ((top + height >= 0) && (height + window.innerHeight >= bottom));
    };


}

let numbersAll = document.querySelectorAll('.numbers');

if (numbersAll.length) {
    for (let i = 0; i < numbersAll.length; i++) {
        let numbers = numbersAll[i];
        let numbersObj = new NumbersCounting(numbers, {
            item: '.number'
        });
        let scroll = new ScrollTo(numbers, function () {
            numbersObj.animateNumbers();
        }).scrolling();
    }
}


// let isScrolling = false;
// window.addEventListener('scroll', throttleScroll, false);
//
// function throttleScroll(e) {
//     if (isScrolling == false) {
//         window.requestAnimationFrame(function () {
//             scrolling(e);
//             isScrolling = false;
//         });
//     }
//     isScrolling = true;
// }
//
// document.addEventListener("DOMContentLoaded", scrolling, false);
//
// let promoSlides = document.querySelectorAll('.promote-slide'),
//     activePromoteSlide = document.querySelector('.promote-slide');
// if (!activePromoteSlide) {
//     activePromoteSlide = document;
// }
//
// function scrolling(e) {
//     animateNumbersGraphs();
// }
//
// function animateNumbers() {
//     let numberAll = activePromoteSlide.querySelectorAll('.number'),
//         numbers = activePromoteSlide.querySelector('.numbers');
//
//     for (let i = 0; i < numberAll.length; i++) {
//         let number = numberAll[i],
//             val = number.querySelector('.number__val'),
//             from = parseInt(val.dataset.from),
//             to = parseInt(val.dataset.to),
//             time = 2000;
//         if (numbers) {
//             time = numbers.dataset.timer;
//         }
//
//
//         if (number.classList.contains('active')) {
//             continue;
//         }
//
//
//         number.classList.add('active');
//         counting(val, from, to, time);
//     }
// }
//
// function animateNumbersGraphs() {
//     let numberAll = activePromoteSlide.querySelectorAll('.number'),
//         numbers = activePromoteSlide.querySelector('.numbers'),
//         graphImg1 = activePromoteSlide.querySelector('.promote-result__graph-img1'),
//         graphImg2 = activePromoteSlide.querySelector('.promote-result__graph-img2');
//
//     for (let i = 0; i < numberAll.length; i++) {
//         let number = numberAll[i],
//             val = number.querySelector('.number__val'),
//             from = parseInt(val.dataset.from),
//             to = parseInt(val.dataset.to),
//             time = 2000;
//         if (numbers) {
//             time = numbers.dataset.timer;
//         }
//
//
//         if (number.classList.contains('active')) {
//             continue;
//         }
//
//
//         if (isFullyVisible(number)) {
//             number.classList.add('active');
//             counting(val, from, to, time);
//
//             if (graphImg1) {
//                 graphImg1.classList.add('active');
//             }
//             if (graphImg2) {
//                 graphImg2.classList.add('active');
//             }
//         }
//     }
// }
//
// function resetPromoteSlides() {
//     for (let i = 0; i < promoSlides.length; i++) {
//         let slide = promoSlides[i],
//             numberAll = slide.querySelectorAll('.number'),
//             numbers = slide.querySelector('.numbers'),
//             graphImg1 = slide.querySelector('.promote-result__graph-img1'),
//             graphImg2 = slide.querySelector('.promote-result__graph-img2');
//
//         for (let j = 0; j < numberAll.length; j++) {
//             let number = numberAll[j],
//                 val = number.querySelector('.number__val');
//             val.innerHTML = 0;
//             number.classList.remove('active');
//             graphImg1.classList.remove('active');
//             graphImg2.classList.remove('active');
//         }
//     }
// }
//
// function counting(val, from, to, time) {
//     let i = from,
//         frame = time / to;
//
//     let numInterval = setInterval(function (e) {
//         if (i <= to) {
//             val.innerHTML = i;
//             i++;
//         } else {
//             clearInterval(numInterval);
//         }
//
//     }, frame)
//
// }
//
// function isPartiallyVisible(el) {
//     var elementBoundary = el.getBoundingClientRect();
//
//     var top = elementBoundary.top;
//     var bottom = elementBoundary.bottom;
//     var height = elementBoundary.height;
//
//     return ((top + height >= 0) && (height + window.innerHeight >= bottom));
// }
//
// function isFullyVisible(el) {
//     var elementBoundary = el.getBoundingClientRect();
//
//     var top = elementBoundary.top;
//     var bottom = elementBoundary.bottom;
//
//     return ((top >= 0) && (bottom <= window.innerHeight));
// }

$('select').selectize();



