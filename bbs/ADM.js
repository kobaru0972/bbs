$(function(){
    $(".password_checkbox").on("click",function(){
        if ($(".password_checkbox").prop("checked") === true) {
            $(".password_box").attr("type","text");    
        }
        else{
            $(".password_box").attr("type","password");
        }

    });
});