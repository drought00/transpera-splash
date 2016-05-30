$(document).ready(function(){
    var deadline = '2016-06-03';

    initializeClock('clockdiv', deadline);

});

function getTimeRemaining(endtime){
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor( (t/1000) % 60 );
    var minutes = Math.floor( (t/1000/60) % 60 );
    var hours = Math.floor( (t/(1000*60*60)) % 24 );
    var days = Math.floor( t/(1000*60*60*24) );
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime){
    var timeinterval = setInterval(function(){
        var t = getTimeRemaining(endtime);

        $('#days').html(t.days < 10 ? '0'+t.days : t.days);
        $('#hour').html(t.hours < 10 ? '0'+t.hours : t.hours);
        $('#mins').html(t.minutes < 10 ? '0'+t.minutes : t.minutes);
        $('#secs').html(t.seconds < 10 ? '0'+t.seconds : t.seconds);
        if(t.total<=0){
            clearInterval(timeinterval);
        }
    },1000);
}
