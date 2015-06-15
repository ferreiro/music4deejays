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
       <li  class="seleccionado" id="go_send"><a href="http://music4deejays.com/send_track"><p>Send your song</p></a></li><div class="separador"></div>

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

       <div class="cab_send_tracks">
        <span></span>
        <div class="info">
          <h1>Together we can do something big</h1>
          <h2>Release your career and bring your music to more people through Music4deejays</h2>
        </div>
      </div>


      <div class="menu_support_wrap">
        <div class="menu_support">
        <ul> 

           <li class="seleccionado" id="go_home"><a href="index.php"><p>Send your tracks</p></a></li><div class="separador"></div>
           <li id="go_home"><a href="feedback.php"><p>Feedback</p></a></li><div class="separador"></div>
           <li id="go_home"><a href="advert.php"><p>Advertisement</p></a></li><div class="separador"></div>
           <li id="go_home"><a href="contact.php"><p>Contact us</p></a></li><div class="separador"></div>
        </div>
      </div>


      <div class="uploader_wrap">  

          <h1>Send your tracks</h1>
 
          <div class="uploader">  
          <form action="http://music4deejays.com/track_sent/" method="post"  onsubmit="return validar(this);"  enctype="multipart/form-data" >             


              <div class="campo"><input type="text" name="nombre_cancion" autocomplete="off" onFocus="if(this.value == 'What is the title of the song?'){this.value='';}" onBlur="if(this.value == ''){this.value='What is the title of the song?';}" value="What is the title of the song?" /></div>
              <div class="campo"><input type="text" name="download_link" autocomplete="off" onFocus="if(this.value == 'Dropbox or Zippyshare song link'){this.value='';}" onBlur="if(this.value == ''){this.value='Dropbox or Zippyshare song link';}" value="Dropbox or Zippyshare song link"  /></div>

              <div class="desplegable">
              <select name="genero_cancion" id="genero_cancion" tabindex="1">
                  <option value="">Choose Genre</option>
                  <option value="Progressive">Progressive House</option>
                  <option value="Electro">Electro House</option>
                  <option value="Dubstep">Dubstep</option>
                  <!-- <option value="Deep">Deep House</option> -->
                  <!-- <option value="Trance">Trance</option> -->
                  <!-- <option value="Tech">Tech House</option> -->
                  <!-- <option value="Trap">Trap</option> -->
                  <!-- <option value="Tecno">Tecno</option> -->
                  <option value="Other">Other Genre</option>
              </select>
              </div>
              

              <div class="desplegable" style="float:right;">
              <select name="tipo_cancion" id="tipo_cancion" tabindex="1" onblur="revisar(this);" >
                  <option value="">Song Type</option>
                  <option value="Mashup">Mashup</option>
                  <option value="Original">Original Song</option>
                  <option value="Remix">Remix</option>
                  <option value="Bootleg">Bootleg</option>
                  <option value="Pack">Pack</option>
                  <option value="Other">Other</option>
               </select>
              </div>

              <div class="campo"><input type="text" id="artistic_name" name="nombre_artista" onFocus="if(this.value == 'Your name as an artist'){this.value='';}" onBlur="if(this.value == ''){this.value='Your name as an artist';}" value="Your name as an artist" /></div>
              <div class="campo"><input type="text" id="contact_mail" name="mail_artista"  onFocus="if(this.value == 'Contact email'){this.value='';}" onBlur="if(this.value == ''){this.value='Contact email';}" value="Contact email"  /></div>
              <div class="campo"><input type="text" id="link" name="link_artista"  onFocus="if(this.value == 'Your website or soundcloud'){this.value='';}" onBlur="if(this.value == ''){this.value='Your website or soundcloud';}" value="Your website or soundcloud"  /></div>
              <div class="enviar_campo"><input type="submit" id="enviar" value="Send message" /></div>
          
          </div> 
      </div><!-- Fin formulario-->


 

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

 
          <div class="send_your_track" style="display:none;">
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



