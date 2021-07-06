$(document).ready(function(){

    // Efecto Rebote
    $("nav a").on('click', function(){
        var target = $(this).attr('href');
        $(target).animate({paddingTop: '8rem'},1000);
    });
    // Fin Efecto Rebote

    $('.toggle-menu').on('click', function(){
        //$('#small-menu').toggleClass('mostrar');
        myFunction();
    })

    function myFunction() {
        var x = document.getElementById("small-menu");
        if (x.style.display == "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
    }

    $("#congresos li").on('click', function(){
      var text1 =  $(this).attr('alt');
      var text2 =  $(this).attr('title');
      document.getElementById("details1").innerHTML = text1;
      document.getElementById("details2").innerHTML = text2;
      $('#details').removeClass('close');
      $('#details').addClass('mostrar');
    })

    $('#details button').on('click',function(){
      $('#details').addClass('close');
    })


})

