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



<div class="contenedor_wrap">
    <div class="contenedor_marco">

 
      <div class="contenedor">
      
      <div class="contacto">

        <div class="imagen_contacto">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3037.635889960114!2d-3.702426999999999!3d40.41691629999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422880a3224907%3A0x88dbd8c85ff3d16a!2sPuerta+del+Sol!5e0!3m2!1ses!2ses!4v1398993458589" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
        </div>
        
        <div class="formulario" >
          <form id="formulario" action="enviar_mensaje.php" method="post" onsubmit="return false;" >

            <div class="capa_individual">

              <div class="izq">
                <h1>Cu&eacute;ntanos tu proyecto</h1>
              </div>

              <div class="der">

              <div class="pestana_input">
                <input type="text" name="nombre" id="nombre"  onFocus="if(this.value == 'Escriba su nombre'){this.value='';}" onBlur="if(this.value == ''){this.value='Escriba su nombre';}" value="Escriba su nombre"/>
              </div>
              
              <div class="pestana_input">
                <input type="text" name="nombre" id="nombre" onFocus="if(this.value == 'Correo electr&oacute;nico de contacto'){this.value='';}" onBlur="if(this.value == ''){this.value='Correo electr&oacute;nico de contacto';}" value="Correo electr&oacute;nico de contacto"/>
              </div>
              
            </div>
     
            </div>



            <div class="capa_individual">
     
              <div class="der">

              <div class="pestana_input">
                <input type="text" name="nombre" id="nombre"  onFocus="if(this.value == 'Escriba su nombre'){this.value='';}" onBlur="if(this.value == ''){this.value='Motivo del mensaje';}" value="Motivo del mensaje"/>
              </div>
              
              <div class="pestana_input">
                <textarea ></textarea>
              </div>
              
              <div class="pestana_input">
                Deseo recibir boletines informativos de Landcreativa
              </div>          
              
              <div class="pestana_input">
                <input id="enviar" type="button" value="Enviar formulario" id="submitir" />
              </div>
              

            </div>

            </div>
     
        </form>
        </div> 

      </div> 
           

    </div><!-- Fin contenedor -->


    </div>
</div>
 
 
 
<?php get_footer(); ?>



 
 






