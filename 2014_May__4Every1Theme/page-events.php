<?php
/**
 * @package WordPress
 * @subpackage constructor
 */

// load header.php
get_header();

?>

 <div class="cab_wrap"><div class="cab">

    <div class="logotipo">
      <div class="link"><a href="/"></a></div>
    </div>
    <div class="menu_wrap">
    <div class="menu">
    <ul> 

       <li id="go_home"><a href="/"><p>Home board</p></a></li><div class="separador"></div>
       <li id="go_categoria"><a href="http://music4deejays.com/discover"><p>Discover new music</p></a></li><div class="separador"></div><div class="separador"></div>
       <li class="seleccionado" id="go_festival"><a href="http://music4deejays.com/events"><p>Festivals &amp; Events</p></a></li><div class="separador"></div>
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




<div class="cont_wrap">
<div class="cont_marco">
<div class="contenedor">

        <div class="titulo_enorme">
          <h1><a>Festival's reportages</a></h1>
        </div>
        
        <div class="eventos">

            <div class="evento">
            <a href="http://music4deejays.com/4everyone/">
                <div class="fecha">
                <p><span>28</span><br />June</p>
                </div>

                <div class="titulo">
                <h1>4everyone Festival</h1>
                <h2>Photos and event reportage coming soon</h2>
                </div>
                <div class="protect_wallpaper"></div>
                <img src="http://music4deejays.com/wp-content/uploads/2014/05/4everyone.png" />
            </a>
            </div>

            <div class="separador_central" style="margin-top:25px;"></div>


            <div class="evento">
                
                <div class="fecha">
                <p><span>19</span><br />July</p>
                </div>

                <div class="titulo">
                <h1>Monegros 2014</h1>
                <h2>Photos and event reportage coming soon</h2>
                </div>
                <div class="protect_wallpaper"></div>
                <img src="http://music4deejays.com/wp-content/uploads/2014/05/monegros.jpg" />
                 
            </div>

            <div class="separador_central" style="margin-top:25px;"></div>

            <div class="evento">
                
                <div class="fecha">
                <p><span>1 / 2</span><br />August</p>
                </div>

                <div class="titulo">
                <h1>Electrobeach 2014</h1>
                <h2>Photos and event reportage coming soon</h2>
                </div>
                <div class="protect_wallpaper"></div>
                <img src="http://music4deejays.com/wp-content/uploads/2014/05/electroBeach.jpg" />
                
            </div>

        </div>     
  
        <div class="separador_central"></div>
        <div class="separador_central"></div>
 
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

          <div class="separador_derecha" style="display:none;"></div>
  

          <div class="newsletter" style="display:none;">

              <h1>Don't miss any event!<span></span></h1>
              <p>Join to our newsletter: Receive the best tracks on Music4deejays in your inbox every 15 days.</p>

              <div class="formulario_wrap"><div class="formulario">
              <form role="search" method="get" id="searchform" action="/">
                  <input type="text" value="" id="campo" name="s" id="s" placeholder="Write your mail"   autocomplete="off" />
                  <input type="button" type="submit" value="Subscribe" id="icono" />
              </form>
              </div></div><!-- Fin formulario -->

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
