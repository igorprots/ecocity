$(function () {

    $('.clients__video-play').click(function () {
        $('.clients__video-play').css("z-index", "0");
        $('.clients__img').css("opacity", "0");
        $('.clients__video-ellipse').css("opacity", "0");
        $('.clients__video-play').css("opacity", "0");
        $('iframe').css("opacity", "1");
        setTimeout(function () {
            player.playVideo();
        }, 1000);
    });


});

