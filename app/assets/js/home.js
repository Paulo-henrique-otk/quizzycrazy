$(function () { 
    
    $(".menu img").hide().fadeIn(1000)
    $("main").hide().fadeIn(2000)
    $("button").focus(function () {
        $(this).css("font-size",30)
      })
      $(".conteudo a").focus(function () {
        $(this).css("background-color","black")
        $(this).css("color","darkblue")
        })
     })