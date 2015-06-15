	  
	
	// JavaScript Document
  $(document).ready(function(){

 
    // Slideshow
        
    $('#slideshow').DDSlider({
    
    nextSlide: '.flecha_izquierda',
    prevSlide: '.flecha_derecha',
    selector: '.seleccionar_diapositiva'
    
    });
 

    $(".slide_large").mouseenter(function() {
        $(".slide_large .flecha_izquierda").fadeIn("slow");   // Boton pulsado
        $(".slide_large .flecha_derecha").fadeIn("slow");   // Boton pulsado
    });

    $(".slide_large").mouseleave(function() {
        $(".slide_large .flecha_izquierda").fadeOut("slow");   // Boton pulsado
        $(".slide_large .flecha_derecha").fadeOut("slow");   // Boton pulsado
    });

   


   
    $("#open_search").click(function() {

        $("#top_search").delay(100);   
        $("#top_search").slideDown("fast");   
 

    });

   
    $("#close_search").click(function() {

        $("#top_search").delay(100);   
        $("#top_search").slideUp("fast");   
 

    });


   
    $(".cont_wrap").click(function() {
  

        $(".dropdown").delay(100);   
        $(".dropdown").hide(0);   

        $(".cloud").delay(100);   
        $(".cloud").hide(0);  

        $(".menu_opciones").delay(100);   
        $(".menu_opciones").hide(0);  

        $("#pulsado").hide(0);   // Boton pulsado
        $("#sinpulsar").show(0);  // Boton sin pulsar

    });
   
    // Menu 
    $("#menu_musica #sinpulsar").click(function(event) {
        $("#menu_musica #sinpulsar").hide(0);   
        $("#menu_musica #pulsado").show(0);   
        $(".header .menu ul li div").hide(0);   
        $("#dropdown_menu").delay("50"); 
        $("#dropdown_menu").show(0);   
    });      
     
    $("#menu_musica #pulsado").click(function(event) {  
        $("#pulsado").hide(0);   
        $("#sinpulsar").show(0);          
        $(".header .menu ul li div").hide(0);   
        $("#dropdown_menu").hide(0);  
    });    

 


    // Menu 
    $(".opciones .sin_pulsar").click(function(event) {
        $(".opciones .sin_pulsar").hide(0); 
        $(".opciones .pulsado").show(0); 
        $(".menu_opciones").delay("100"); 
        $(".menu_opciones").show("fast");   
    });      
       
    $(".opciones .pulsado").click(function(event) {
        $(".opciones .sin_pulsar").show(0); 
        $(".opciones .pulsado").hide(0); 
        $(".menu_opciones").delay("100"); 
        $(".menu_opciones").slideUp("fast");   
    });      
     








  if($(window).width() <= 1120) {

    $( "#desplegar_menu" ).click(function() {
      $("body").css('overflow', 'hidden');

      $("#menu").animate({width: 'toggle'}, 300);
      $("#capa_menu_desplegado").fadeIn("medium");
        $(".cab_wrap").animate({ marginLeft: "-300px" }, 300 );
        $(".container").animate({ marginLeft: "-300px" }, 300 );
        $(".container_subpagina").animate({ marginLeft: "-240px" }, 300 );

    });  

    
    
    $( "#cerra_menu" ).click(function() {

      $("body").css('overflow', 'inherit');

      $("#menu").animate({width: 'toggle'}, 300);
      $(".container_margin").animate({ marginRight: "30px" }, 300 );
      $(".capa_menu_desplegado").fadeOut( "medium");

      $(".cab_wrap").animate({ marginLeft: "0" }, 300 );
      $(".container").animate({ marginLeft: "0" }, 300 );
      $(".container_subpagina").animate({ marginLeft: "0" }, 300 );

    });  
     
    $( ".capa_menu_desplegado" ).click(function() {

      $("body").css('overflow', 'inherit');

      $("#menu").animate({width: 'toggle'}, 300);
      $(".container_margin").animate({ marginRight: "30px" }, 300 );
      $(".capa_menu_desplegado").fadeOut( "medium");

      $(".cab_wrap").animate({ marginLeft: "0" }, 300 );
      $(".container").animate({ marginLeft: "0" }, 300 );

    });  
   
  }
  else {
    if($(window).width() >= 1000) {

      $(".logo a").mouseenter(function() {
        $( ".regresar_home" ).delay("100");
        $( ".regresar_home" ).fadeIn("fast");
      }).mouseleave(function() {
        $( ".regresar_home" ).delay("100");
        $( ".regresar_home" ).hide(0);  
      });
   
          
      /********* SCROLL TO TOP ************/
      
      // scroll-to-top button show and hide
      jQuery(document).ready(function(){
        jQuery(window).scroll(function(){
          if (jQuery(this).scrollTop() > 300) {
            jQuery('.scrollup').fadeIn();
          } else {
            jQuery('.scrollup').fadeOut();
        }
      });
      // scroll-to-top animate
      jQuery('.scrollup').click(function(){
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
          return false;
        });
      });


      /********* FIJA POSTS RELACIONES ************/


      $(function () {
      var msie6 = $.browser == 'msie' && $.browser.version < 7;

      if (!msie6) {
        var top = $('#guia_proyecto').offset().top - parseFloat($('#guia_proyecto').css('margin-top').replace(/auto/, 0));
        $(window).scroll(function (event) {
          // what the y position of the scroll is
          var y = $(this).scrollTop();
          
          // whether that's below the form
          if (y >= top) {
            // if so, ad the fixed class
            $('.relacionados').addClass("fijar_proyecto"); 
          } else {
            // otherwise remove it 
            $('.relacionados').removeClass("fijar_proyecto"); 
          }
        });
      }  
      });
         



      /********* FIJA MENU DE INFORMACIÃ“N ************/

      $(function () {
      var msie6 = $.browser == 'msie' && $.browser.version < 7;

      if (!msie6) {
      
        var top = $('#start_fijar_menu_top').offset().top - parseFloat($('#start_fijar_menu_top').css('margin-top').replace(/auto/, 0));


        $(window).scroll(function (event) {
        // what the y position of the scroll is
        var elemento_arriba = $(this).scrollTop();
        
        // whether that's below the form
        if (elemento_arriba >= top) {
          // if so, ad the fixed class
          $(".menu_informacion_wrap").addClass("menu_fijado_wrap");
          $(".menu_informacion").addClass("menu_fijado");
        } 
        else {
          $(".menu_informacion_wrap").removeClass("menu_fijado_wrap");
          $(".menu_informacion").removeClass("menu_fijado");
        }
        
        });

      }  
      });

      

    }
    
    
  }


 


      /***** SEND TRACKS *****/

      function revisar(elemento) {
          if (elemento.value==""){
              elemento.className='error';
          } else {
              elemento.className='form-input';
          }
      }

      function revisaremail(elemento) {
          if (elemento.value!=""){
              var dato = elemento.value;
              var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
              if (!expresion.test(dato)) {
                  elemento.className='error';
              } else {
              elemento.className='form-input';
              }
        }
      }


      function validar(form) {
        if(form.nombre_cancion.value=="") { //Si este campo está vacío
          alert('Write a song title'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }
        
        if(form.song_tags.value=="") { //Si este campo está vacío
          alert('Write some tags'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }
        
        if(form.song_tags.value=="") { //Si este campo está vacío
          alert('Write some tags'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }
        
        if(form.download_link.value=="") { //Si este campo está vacío
          alert('Write a download link'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }
        
        if(form.genero_cancion.value=="") { //Si este campo está vacío
          alert('Choose a genre'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }
        
        if(form.tipo_cancion.value=="") { //Si este campo está vacío
          alert('Choose a type'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }

        if(form.nombre_artista.value=="") { //Si este campo está vacío
          alert('Write your artistic name'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }
        
        if(form.mail_artista.value=="") { //Si este campo está vacío
          alert('Write your mail'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }
         
        if(form.link_artista.value=="") { //Si este campo está vacío
          alert('Write a link'); // Mensaje a mostrar
          return false; //devolvemos un valor negativo
        }
         
       
        return true; // Si esta todo bien, devolvemos Ok, positivo
      }



    
 

  });