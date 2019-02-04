function Graph(settings) {
    this.time = settings.time || 5000;
    this.graph = settings.graph;
    this.list = settings.list;

    let coords = [],
        that = this;

    this.setCoords = function () {
        for (let i = 0; i < this.list.length; i++) {
            let item = this.list[i],
                arrow = item.querySelector('.arrow__line'),
                offsetTop = arrow.getBoundingClientRect().top + pageYOffset;


            item.offsetGraph = offsetTop;

            coords.push(
                item
            );
        }

        coords.reverse();
    };

    this.checkItem = function () {
        if (coords.length) {
            let graphOffset = that.graph.getBoundingClientRect().top + pageYOffset,
                item = coords[0];
            if (graphOffset < item.offsetGraph) {
                item.classList.add('active');
                coords.shift();
            }
        }
    };

    this.animateGraph = function () {
        let height = parseInt(this.graph.style.height) || 0;
        interv = setInterval(function () {
            // debugger;
            if (height < 100) {
                height++;
                that.graph.style.height = height + '%';
                that.checkItem();
            } else {
                clearInterval(interv)
            }
        }, 70);

    };

    this.init = function () {
        that.setCoords();
        that.animateGraph();
    }
}

