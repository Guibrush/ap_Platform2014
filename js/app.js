$(document).ready(function(){

  // Menu mobile
  $('#icon-menu').click(function() {
    $('.menu').animate({left: '0px'}, 200);
    $('body').animate({left: '285px'}, 200);            
   });
    
  $('#icon-close').click(function() {
    $('.menu').animate({left: '-285px'}, 200);
    $('body').animate({left: '0px'}, 200);
  });

  // Menu active
  // Identify and show as active the current page in the menu
  // Function copied from http://andornagy.com/active-class-navigation-menu/
  $(function() {
    var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
      $(".menu ul li a").each(function(){
        if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
        $(this).addClass("active");
      })
  });

  //Smoth scroll
  // Code copied from http://css-tricks.com/snippets/jquery/smooth-scrolling/
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  // Anchore scroll

  $(window).scroll(function() {
    $('.anchoreBottom').css("display", "inherit")
    
  });

  //End of Anchore scroll

  // Condiciones de la oferta in main landing section
  $(function() {

    $('.u-condiciones-mobile, .u-condiciones-desk').click(function() {
      $('.u-condiciones-text').slideDown('slow');
    });
    $('.u-iconClose').click(function() {
      $('.u-condiciones-text').slideUp('slow');
    });
    
  })
  // End Condiciones de la oferta in main landing section

  // Parte desplegable del form

  $('.formNegocio-button').click(function() {
    $('.formNegocio-deplegable').slideToggle('slow');
  });

  // End Parte desplegable del form

  // Datos Personales

    $(function() {

    $('.datosPersonales-lopdLink').click(function() {
      $('.datosPersonales-lopdContent').slideDown('slow');
    });
    $('.u-iconClose').click(function() {
      $('.datosPersonales-lopdContent').slideUp('slow');
    });
    
  })

  // End Datos Personales

  // Form hidden fields

  // End Form hidden fields

  // Comunidad Form buttons

  $(function() {
    $('.comunidadApuntate-button-inactive').click(function() {
      $('#formFreelance').css("display", "inherit");
      $('#formPymes').css("display", "none");

    });
    $('.comunidadApuntate-button-active').click(function() {
      $('#formPymes').css("display", "inherit");
      $('#formFreelance').css("display", "none");

    });
  });

  // End Comunidad Forma buttons

  // Pricing Tables

  if ($(window).width() <= 641) {  


    $('#pricingClose1').click(function() {
      $('#pricingOpen1').slideToggle('slow');
    });

    $('#pricingClose2').click(function() {
      $('#pricingOpen2').slideToggle('slow');
    });

    $('#pricingClose3').click(function() {
      $('#pricingOpen3').slideToggle('slow');
    });    

      
    };


  //End Pricing Tables


  // Footer Newsletter

  $('.footerNewsletter-aviso').click(function() {
      $('.footerNewsletter-aviso-content').slideToggle('slow');
    });

  // End Footer Newsletter

  // Comunidad features

    $('.comunidadApuntate-featuresItem').click(function() {
      $('.obscure').css("display", "inherit");
      $('.button-fea').css("visibility", "hidden")
  });

  // End Comunidad features

  // Cookies

  function GetCookie(name) {
    var arg=name+"=";
    var alen=arg.length;
    var clen=document.cookie.length;
    var i=0;
 
    while (i<clen) {
        var j=i+alen;
 
        if (document.cookie.substring(i,j)==arg)
            return "1";
        i=document.cookie.indexOf(" ",i)+1;
        if (i==0)
            break;
    }
 
    return null;
    }
     
    function aceptar_cookies(){
        var expire=new Date();
        expire=new Date(expire.getTime()+7776000000);
        document.cookie="cookies_surestao=aceptada; expires="+expire;
     
        var visit=GetCookie("cookies_surestao");
     
        if (visit==1){
            popbox3();
        }
    }
     
    $(function() {
        var visit=GetCookie("cookies_surestao");
        if (visit==1){ popbox3(); }
    });
     
    function popbox3() {
        $('#overbox3').toggle();
    }


});