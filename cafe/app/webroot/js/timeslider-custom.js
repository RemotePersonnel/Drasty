               
function slideTime(event, ui){
    var val0 = $("#slider-range").slider("values", 0),
        val1 = $("#slider-range").slider("values", 1),
        minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
    startTime = getTime(hours0, minutes0);
    endTime = getTime(hours1, minutes1);
    $("#time").text(startTime + ' - ' + endTime);
}

function slideTimeSun(event, ui){
    var val0 = $("#slider-range-sun").slider("values", 0),
        val1 = $("#slider-range-sun").slider("values", 1),
        minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
    startTime = getTime(hours0, minutes0);
    endTime = getTime(hours1, minutes1);
    $("#time-sun").val(startTime + ' - ' + endTime);
}


function slideTimeMon(event, ui){
    var val0 = $("#slider-range-mon").slider("values", 0),
        val1 = $("#slider-range-mon").slider("values", 1),
        minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
    startTime = getTime(hours0, minutes0);
    endTime = getTime(hours1, minutes1);
    $("#time-mon").val(startTime + ' - ' + endTime);
}

function slideTimeTues(event, ui){
    var val0 = $("#slider-range-tues").slider("values", 0),
        val1 = $("#slider-range-tues").slider("values", 1),
        minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
    startTime = getTime(hours0, minutes0);
    endTime = getTime(hours1, minutes1);
    $("#time-tues").val(startTime + ' - ' + endTime);
}

function slideTimeWed(event, ui){
    var val0 = $("#slider-range-wed").slider("values", 0),
        val1 = $("#slider-range-wed").slider("values", 1),
        minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
    startTime = getTime(hours0, minutes0);
    endTime = getTime(hours1, minutes1);
    $("#time-wed").val(startTime + ' - ' + endTime);
}

function slideTimeThurs(event, ui){
    var val0 = $("#slider-range-thurs").slider("values", 0),
        val1 = $("#slider-range-thurs").slider("values", 1),
        minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
    startTime = getTime(hours0, minutes0);
    endTime = getTime(hours1, minutes1);
    $("#time-thurs").val(startTime + ' - ' + endTime);
}

function slideTimeFri(event, ui){
    var val0 = $("#slider-range-fri").slider("values", 0),
        val1 = $("#slider-range-fri").slider("values", 1),
        minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
    startTime = getTime(hours0, minutes0);
    endTime = getTime(hours1, minutes1);
    $("#time-fri").val(startTime + ' - ' + endTime);
}

function slideTimeSat(event, ui){
    var val0 = $("#slider-range-sat").slider("values", 0),
        val1 = $("#slider-range-sat").slider("values", 1),
        minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
    startTime = getTime(hours0, minutes0);
    endTime = getTime(hours1, minutes1);
    $("#time-sat").val(startTime + ' - ' + endTime);
}

function getTime(hours, minutes) {
    var time = null;
    minutes = minutes + "";
    if (hours < 12) {
        time = "AM";
    }
    else {
        time = "PM";
    }
    if (hours == 0) {
        hours = 12;
    }
    if (hours > 12) {
        hours = hours - 12;
    }
    if (minutes.length == 1) {
        minutes = "0" + minutes;
    }
    return hours + ":" + minutes + " " + time;
}
slideTime();