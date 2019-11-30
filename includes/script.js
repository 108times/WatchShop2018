$(document).ready(function(){
    $(".close-button").click(function(){
        $(".modal-content").css("display","none");
    });
    $(".close-button-login").click(function(){
        $("#form1").remove();
        $("#cart").remove();
    });
    $(".close-button-ok").click(function(){
        $(".notification").remove();
        $(".notification1").remove();
        $(".notification2").remove();
    });
    $(".button665").click(function () {

        $("#form1").css("display","flex")
    });

    $(".korzina").click(function () {
      $(".shopbag").css("display","block")
    });
    $(".shopbag-button").click(function () {

    })

})