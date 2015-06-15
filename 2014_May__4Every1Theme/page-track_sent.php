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



<div class="slide_cabecera">
  <div class="cab_send_tracks">
    <span></span>
    <div class="info">
      <h1>Together we can do something big</h1>
      <h2>Release your career and bring your music to more people through Music4deejays</h2>
    </div>
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

          <?php

          if(!empty($_POST['nombre_cancion']) AND !empty($_POST['download_link']) AND !empty($_POST['genero_cancion']) AND !empty($_POST['tipo_cancion']) AND !empty($_POST['nombre_artista']) AND !empty($_POST['mail_artista']) AND !empty($_POST['link_artista'])){

              $to ="music4deejays@hotmail.com";
              $to .=", music4deejaysmail@gmail.com";
              $headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
              $headers .= "From: Music4deejays";      
              $tema=" ".$_POST['genero_cancion']." -  ".$_POST['tipo_cancion']."   (".$_POST['nombre_cancion'].") ";
              $mensaje="

                    <div style='width:100%; height:40px; padding-top:15px; padding-bottom:5px; float:left; clear:both; background:#1d91a0;'>
                      <center><img src='http://music4deejays.com/media/themes/music4deejays/go/basic/logo.png' /></center>
                    </div>

                    <div style='width:100%; height:30px; float:left; clear:both; background:#0e646f;'>
                      <center><p style='font:16px arial, helvetiva; color:#fff; font-weight:bold; margin:0; padding:0; padding-top:5px; '>New song form</p></center>
                    </div>

                    <div style='width:100%; height:20px; float:left; clear:both; background:#fff;'>
                    </div>

                    <table border='0' cellspacing='2' cellpadding='10' style='width:100%; float:left; clear:both;'>
                      
                      <h1 style='font:18px arial; color:black;'>Song</h1>

                      <tr>
                        <td width='14%' align='center' bgcolor='#FFFFCC'><strong>Titulo:</strong></td>
                        <td width='80%' align='left'>$_POST[nombre_cancion]</td>
                      </tr>
                 
                      <tr>
                        <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Download link:</strong></td>
                        <td width='80%' align='left'>$_POST[download_link]</td>
                      </tr>

                      <tr>
                        <td width='14%' align='center' bgcolor='#FFFFCC'><strong>Genero:</strong></td>
                        <td width='80%' align='left'>$_POST[genero_cancion]</td>
                      </tr>

                      <tr>
                        <td width='14%' align='center' bgcolor='#FFFFCC'><strong>Tipo:</strong></td>
                        <td width='80%' align='left'>$_POST[tipo_cancion]</td>
                      </tr>
                  

                    </table>



                    <div style='width:100%; height:20px; float:left; clear:both; background:#fff;'>
                    </div>



                    <table border='0' cellspacing='2' cellpadding='10' style='width:100%; float:left; clear:both;'>
                      
                      <h1 style='font:18px arial; color:black;'>Author</h1>

                      <tr>
                        <td width='14%' align='center' bgcolor='#ccfcff'><strong>Artist name:</strong></td>
                        <td width='80%' align='left'>$_POST[nombre_artista]</td>
                      </tr>

                      <tr>
                        <td width='14%' align='center' bgcolor='#ccfcff'><strong>Artist mail:</strong></td>
                        <td width='80%' align='left'>$_POST[mail_artista]</td>
                      </tr>


                      <tr>
                        <td width='20%' align='center' bgcolor='#ccfcff'><strong>Link artista:</strong></td>
                        <td width='80%' align='left'>$_POST[link_artista]</td>
                      </tr>


                    </table>

 
              ";

              @mail($to,$tema,$mensaje,$headers); 

              echo "
 

                  <div class=\"exito\">

                    <h1>Thank you $_POST[nombre_artista]!</h1>
                    <p>We're going to listen your track. If we really love it we'll upload it.</p>
                  </div>

                  <script type=\"text/javascript\">
                  // JavaScript Document
                  $(document).ready(function(){
                      $(\".exito\").delay(\"200\");   
                      $(\".exito\").fadeIn(\"800\"); 
                      $(\".exito\").delay(\"3000\");   
                      $(\".exito\").fadeOut(\"400\");   
                  });
                  </script>
 
                  <div class=\"uploader_wrap\">  
                  <h1>Send another track</h1>

              ";

          } else {
              echo "



                  <script type=\"text/javascript\">
                  // JavaScript Document
                  $(document).ready(function(){
                      $(\".fracaso\").delay(\"200\");   
                      $(\".fracaso\").fadeIn(\"800\"); 
                      $(\".fracaso\").delay(\"3000\");   
                      $(\".fracaso\").fadeOut(\"400\");   
                  });
                  </script>
                  <div class=\"fracaso\">

                    <h1>Opps! Something was wrong. We coudn't send your music.</h1>
                    <p>Please try again or write an email to info@music4deejays.com</p>
                  </div>

                  <div class=\"uploader_wrap\">  
                  <h1>Send your track again</h1>

              ";
          }
          ?>

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




        <?php 
        // load footer.php
        get_footer();
        ?>

</div>
</div>
</div><!-- Fin Derecha -->





</body>    
</html>       



