$(function(){
    $(function(){
        $(".text_area").css("display","none");
        $(".botton_img").attr("src","./image/button-plus.png");
    });

    $(".smallTitle_area").on("click", function () {
        $(this).next().slideToggle(500);
        var img =$($(this).children("img")).attr('src');
        

        if (img=="./image/button-minus.png") {

            $(this).children("img").attr("src","./image/button-plus.png");
        }
        else{
            $(this).children("img").attr("src","./image/button-minus.png");
        }
    });
});