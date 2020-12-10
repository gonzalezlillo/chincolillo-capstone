$(document).ready(function(){
    $("#carouselButton").click(function(){
        if ($("#carouselButton").children("span").hasClass('fa-pause')) {
            $("#mycarousel01").carousel('pause');
            $("#carouselButton").children("span").removeClass('fa-pause');
            $("#carouselButton").children("span").addClass('fa-play');
        }
        else if ($("#carouselButton").children("span").hasClass('fa-play')){
            $("#mycarousel01").carousel('cycle');
            $("#carouselButton").children("span").removeClass('fa-play');
            $("#carouselButton").children("span").addClass('fa-pause');
        }
    });
});

function addVideo(ave) {
    let altura = $(ave).children("div").children("img").height();
    $(ave).children("div").children("img").css("display","none");
    $(ave).children("div").children("video").css("display","block");
    $(ave).children("div").children("video").height(altura);
    $(ave).children("div").children("video").trigger('play');
}

function restoreImg(ave) {
    $(ave).children("div").children("img").css("display","block");
    $(ave).children("div").children("video").css("display","none");
    $(ave).children("div").children("video").trigger('pause');
}