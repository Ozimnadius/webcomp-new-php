(function () {
    let costSwithes = document.querySelector('.rek-price__switches-list');
    if (costSwithes) {

        let switches = new Switches({
            sws: '.rek-price__switches-list',
            sw: '.rek-price__switch',
            line: '.rek-price__subline',
            tab: '.rek-price__tab',
            autoWidth: true
        });
    }

    let checboxes = document.querySelectorAll('.rek-bud__check-input');
    if (checboxes.length) {
        let numbers = document.querySelector('.rek-bud__list'),
            numberAll = numbers.querySelectorAll('.number'),
            time = numbers.dataset.timer;

        for (let i = 0; i < checboxes.length; i++) {
            let input = checboxes[i];

            input.addEventListener('change', function (e) {
                let checked = this.checked,
                    number = numberAll[parseInt(this.dataset.number)],
                    numberObj = new NumberCounting(number, time);



                if (checked) {
                    numberObj.counting();
                } else {
                    numberObj.clear();
                }
            });
        }
    }


}());