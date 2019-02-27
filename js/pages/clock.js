function Clock(settings) {
    this.hour = settings.hour || 0;
    this.minute = settings.minute || 0;
    this.second = settings.second || 0;

    this.hourObj = settings.hourObj;
    this.minuteObj = settings.minuteObj;
    this.secondObj = settings.secondObj;
    
    let that = this,
        seconds = 60,
        minutes = 60,
        hours = 12;

    this.getTime = function () {
        let date = new Date();
        that.hour = date.getHours() % hours;
        that.minute = date.getMinutes();
        that.second = date.getSeconds();
    };

    function getPosition (val, devider) {
        return val/devider*360;
    };

    this.tick = function () {
        that.getTime();
        that.secondObj.style.transform = 'rotate(' + getPosition(that.second, seconds) + 'deg)';
        that.minuteObj.style.transform = 'rotate(' + getPosition(that.minute, minutes) + 'deg)';
        that.hourObj.style.transform = 'rotate(' + getPosition(that.hour, hours) + 'deg)';
    };

    this.start = function () {
        let intervalClock = setInterval(that.tick, 1000);
    }


}