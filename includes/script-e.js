$(document).ready(function(){
    $(".close-button").click(function(){
        $(".modal-content").remove();
    });
    $(".close-button-login").click(function(){
        $("#form1").remove();
    });
    $(".close-button-ok").click(function(){
        $(".notification").remove();
        $(".notification1").remove();
        $(".notification2").remove();
    });
})