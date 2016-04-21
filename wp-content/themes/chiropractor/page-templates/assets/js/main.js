$(document).ready(function () {
    $('.testimonial-carousel').owlCarousel({
        margin:10,
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:10000,
        autoplayHoverPause:true
    });
    $(".btn-open-menu").click(function () {
        $(this).toggleClass("active");
        if($(this).hasClass("active")){
            $(this).find("i").removeClass("fa-bars").addClass("fa-times");
            $(".main-menu").fadeIn(300);
            $(this).css("border-right","none");
            $(".hamburger").find(".open-menu").css("display","none");
        }
        else{
            $(this).css("border-right","2px solid white");
            $(this).find("i").removeClass("fa-times").addClass("fa-bars");
            $(".main-menu").css("display","none");
            $(".hamburger").find(".open-menu").css("display","block")
        }
    });

    $(".dropdown-menu li>a").hover(function () {
        var google = $(this).attr("datatype");
        $("#"+google).attr('id',google).fadeIn("slow");
    },
    function () {
        var google = $(this).attr("datatype");
        $("#"+google).attr('id',google).fadeOut("slow");
    }
    )
});