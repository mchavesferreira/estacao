$(document).ready(function(){

    var prevScrollpos = $(window).scrollTop();

    $(window).scroll(function(){
        var currentScrollPos = $(window).scrollTop();
        if (prevScrollpos > currentScrollPos) {
            $(".jsMenu").stop().animate({top: 0}, 300);
        } else {
            $(".jsMenu").stop().animate({top: -100}, 300);
        }
        prevScrollpos = currentScrollPos;
    });

});