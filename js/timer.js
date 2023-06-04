// var timer2 = "9:00";
// var interval = setInterval(function() {


//     var timer = timer2.split(':');
//     //by parsing integer, I avoid all extra string processing
//     var minutes = parseInt(timer[0], 10);
//     var seconds = parseInt(timer[1], 10);
//     --seconds;
//     minutes = (seconds < 0) ? --minutes : minutes;
//     if (minutes < 0) clearInterval(interval);
//     seconds = (seconds < 0) ? 59 : seconds;
//     seconds = (seconds < 10) ? '0' + seconds : seconds;
//     $('#worked').html(minutes + ':' + seconds);
//     timer2 = minutes + ':' + seconds;
// }, 1000);
var timer2="9:00",interval=setInterval(function(){var e=timer2.split(":"),r=parseInt(e[0],10),t=parseInt(e[1],10);(r=--t<0?--r:r)<0&&clearInterval(interval),t=(t=t<0?59:t)<10?"0"+t:t,$("#worked").html(r+":"+t),timer2=r+":"+t},1e3);