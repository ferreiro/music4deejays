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

       <li><a href="/"><p>Home</p></a></li><div class="separador"></div>

       <!-- Menu Music -->
       <li id="menu_musica" class="categorias">

          <a id="sinpulsar" class="pulsada"><p>Categories</p><span class="flecha_abajo"></span></a>
          <a id="pulsado" class="pulsada"><p>Categories</p><span class="flecha_abajo"></span></a>

             <div class="dropdown" id="dropdown_menu">
               <div class="flecha_top"></div>
               <div class="menu_content">
                  
                  <div class="title"><h1>Genres</h1></div>
                  <div class="m_c_submenu">
                      <div class="link"><a href="http://music4deejays.com/progressive">Progressive</a></div>
                      <div class="link"><a href="http://music4deejays.com/electro">Electro</a></div>
                      <div class="link"><a href="http://music4deejays.com/dubstep">Dubstep</a></div>
                      <div class="separa" style="display:none;"></div>                  
                      <div class="link" style="display:none;"><a href="http://music4deejays.com/trance">Trance</a></div>
                      <div class="link" style="display:none;"><a href="http://music4deejays.com/trap">Trap</a></div>
                      <div class="link" style="display:none;"><a href="http://music4deejays.com/house">House</a></div>
                  </div>
                  
                  <div class="separador_menu_dropdown"></div>      

                  <div class="title"><h1>Categories</h1></div>
                  <div class="m_c_submenu">
                      <div class="link"><a href="http://music4deejays.com/mashup">Mashups</a></div>
                      <div class="link"><a href="http://music4deejays.com/original">Originals</a></div>
                      <div class="link"><a href="http://music4deejays.com/remix">Remixes</a></div>
                      <div class="separa" style="display:none;"></div>                  
                      <div class="link" style="display:none;"><a href="http://music4deejays.com/bootleg">Bootlegs</a></div>
                      <div class="link" style="display:none;"><a href="http://music4deejays.com/pack">Packs</a></div>
                      <div class="link" style="display:none;"><a href="http://music4deejays.com/acapella">Acapella</a></div>
                  </div>

                </div>
              </div>
       </li>

       <div class="separador"></div>

       <li><a href="http://music4deejays.com/events"><p>Events</p></a></li><div class="separador"></div>
       <li style="display:none;"><a href="discover.html"><p>Discover</p></a></li><div class="separador"></div>
       <li class="seleccionado"><a href="http://music4deejays.com/contact"><p>Contact us</p></a></li><div class="separador"></div>

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






</div>
</div>
</div><!-- Fin contenedor -->
 
 



<div class="derecha_wrap">
<div class="derecha_marco">
<div class="derecha">


          <div class="publicidad">
            <h1><a href="http://music4deejays.com/advertise">Adverstisment</a></h1>
            <div class="ad_box">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Music4deejays square -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-7047625688940780"
                 data-ad-slot="3001994266"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
          </div>

          <div class="separador_derecha"></div>
  

          <div class="newsletter">

              <h1>Don't miss any event!<span></span></h1>
              <p>Join to our newsletter: Receive the best tracks on Music4deejays in your inbox every 15 days.</p>

              <div class="formulario_wrap"><div class="formulario">
              <form role="search" method="get" id="searchform" action="/">
                  <input type="text" value="" id="campo" name="s" id="s" placeholder="Write your mail"   autocomplete="off" />
                  <input type="button" type="submit" value="Subscribe" id="icono" />
              </form>
              </div></div><!-- Fin formulario -->

          </div>

          <div class="separador_derecha"></div>

          <div class="send_your_track">
              <h1>Promote your talent</h1>
              <div class="ad_box_wrap"><div class="ad_box">
                <h2>Deejay, producer or want to send us a track you like?</h2> 
                <p>It's your time to send us your music and appears on Music4deejays!</p>
                <div class="upload_b"><a href="send_song.html">Send my song</a></div>
              </div></div>
          </div>



        <?php 
        // load footer.php
        get_footer();
        ?>

</div>
</div>
</div><!-- Fin Derecha -->





</body>    
</html>       
