$(document).ready(function(){
    $(".close-button-login").click(function(){
        $("#form1,#form").remove();
    });

    $(".button665").click(function () {

        $("#form1").css("display","block")
    });
    $(".close-button-ok").click(function(){
        $(".notification, .notification1, .notification2").remove();
    });

})