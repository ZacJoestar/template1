$(document).ready( function () {

    var d = new Date();
    d.setDate(d.getDate() + 263);

    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        words: {
            days: 'jour',
            hours: 'heure',
            seconds: 'seconde'
        }
    });

});