(function () {
    let costSwithes = document.querySelector('.site-cost__switches-list');
    if (costSwithes) {

        let switches = new Switches({
            sws: '.site-cost__switches-list',
            sw: '.site-cost__switch',
            line: '.site-cost__subline',
            tab: '.site-cost__tab',
            switchActive: false
        });
    }

    let formNextAll = document.querySelectorAll('.site-cost .form__button');
    if (formNextAll) {
        for (let i = 0; i < formNextAll.length; i++) {
            formNextAll[i].addEventListener('click', function (e) {
                document.querySelector('.site-cost__switch.active').nextElementSibling.click();
            });
        }

    }

    let siteCostTabs = document.querySelector('.site-cost__tabs');
    if (siteCostTabs) {
        let tabs = siteCostTabs.querySelectorAll('.site-cost__tab'),
            maxHeight = 0;

        for (let i = 0; i < tabs.length; i++) {
            let tab = tabs[i],
                wrap = tab.querySelector('.form__wrapper'),
                height = wrap.offsetHeight;


            if (maxHeight < height) {
                maxHeight = height;
            }
        }

        for (let i = 0; i < tabs.length; i++) {
            tabs[i].style.height = maxHeight + 'px';

        }

        siteCostTabs.style.height = maxHeight + 'px';
    }

}());