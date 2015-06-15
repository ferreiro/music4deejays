<?php
/**
 * @package WordPress
 * @subpackage constructor
 */

// load header.php
get_header();

?>


<script type="text/javascript" src="http://music4deejays.com/wp-content/themes/music4deejays_theme/static/js/jquery.selectbox-0.2.js"></script>
<script type="text/javascript">
$(function () {
    $("#tipo_cancion").selectbox();
    $("#genero_cancion").selectbox();
});



</script>


<div class="cab_wrap"><div class="cab">

    <div class="logotipo">
      <div class="link"><a href="/"></a></div>
    </div>

    <div class="menu_wrap">
    <div class="menu">
    <ul> 

       <li id="go_home"><a href="/"><p>Home board</p></a></li><div class="separador"></div>
       <li id="go_categoria"><a href="http://music4deejays.com/discover"><p>Discover new music</p></a></li><div class="separador"></div><div class="separador"></div>
       <li id="go_festival"><a href="http://music4deejays.com/events"><p>Festivals &amp; Events</p></a></li><div class="separador"></div>
       <li id="go_discover" style="display:none;"><a href="discover.html"><p>Discover</p></a></li><div class="separador"></div>
       <li id="go_send"><a href="http://music4deejays.com/send_track"><p>Send your song</p></a></li><div class="separador"></div>

     </ul>  
    </div>
    </div>

    <!-- BOTONES PARA EL MENÚ DESPLEGABLE -->
    <div class="boton_menu_desplegable" id="desplegar_menu"></div>
    
    <div class="cabecera_derecha">

        <div class="top_search" id="top_search">
          <div class="close" id="close_search"></div>
          <form role="search" method="get" class="search-form" action="http://music4deejays.com/">
             <input type="text" value="" id="campo" name="s" id="s" placeholder="Search something" autocomplete="off" />
             <input type="button" type="submit" value="" id="icono" />
          </form>
        </div>

        <div class="buscador" id="open_search">
        <a><span></span><p>Search</p></a>
        </div>

        <div class="send_song" id="open_search">
        <a href="http://music4deejays.com/send_track"><span></span><p>Send your song</p></a>
        </div>

    </div>
 
</div></div><!-- Fin cabecera-->




<div class="error_wrap"><div class="error">

  <div class="imagen_wave_error"></div>
  <div class="info_error">
      <h1>Upss! File not found</h1>
      <p>Document or file requested were not found, or the whole darn hit and now it will not work :-(</p>
      <p><a href="/">Try to go back to the home page - Home ></a></p>
  </div>

</div></div>

 
 
<div class="footer_reducido_wrap"><div class="footer_reducido">
 
  <ul>
     <li><a href="http://music4deejays.com/newsletter"><p>Newsletter</p></a></li> <div class="separador"></div>
     <li><a href="http://www.music4deejays.com/feedback/"><p>Feedback</p></a></li> <div class="separador"></div>
     <li><a href="http://music4deejays.com/advertise"><p>Advertise</p></a></li> <div class="separador"></div>
     <li style="margin-right:0;"><a href="http://www.music4deejays.com/contact/"><p>Contact</p></a></li>  
  </ul>  

</div></div>






