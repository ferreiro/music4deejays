<?php get_header(); ?>

<!-- Cabecera wrap -->

<div class="cab_wrap">
<div class="cab">

	<div class="logo_wrap">
	<div class="logo">
	<a href="<?php echo home_url(); ?>">
	    <div class="logo"></div>
	    <div class="texto"></div>    
    </a>
	</div>
	</div>

    <div class="menu_wrap">
    <div class="menu">
    <ul>
      <li><a href="<?php echo home_url(); ?>"><p>Novedades</p></a></li>
      <li style="width:30%;"><a href="<?php echo home_url(); ?>/nosotros/"><p>Sobre Nosotros</p></a></li>
      <li style="width:23%;"><a href="<?php echo home_url(); ?>/portfolio/"><p>Trabajos</p></a></li>
      <li class="pulsado" style="width:22%;" class="ultimo"><a href="<?php echo home_url(); ?>/contacto/"><p>Contacto</p></a></li>
    </ul> 
    </div>
    </div>

    <div class="presupuesto">
      <a href="<?php echo home_url(); ?>/tu_proyecto"><p>Cu&eacute;ntanos tu proyecto</p></a>
    </div>
    
    <!-- IDIOMAS -->
    <div class="idiomas_cab"> <div class="actual"><p>ES</p><span></span></div> <div class="cambiar_idioma"> 
    <ul> 
      <li><a href="<?php echo home_url(); ?>"><p>Espa&ntilde;ol<p></a></li> 
      <li><a href="http://landcreativa.com/en/"><p>English<p></a></li> 
    </ul> 
    </div></div>

    <!-- Botón menú desplegable -->
    <div class="boton_menu_desplegable" id="desplegar_menu"></div>
    
</div>
</div><!-- Fin cab -->



<div class="contenedor_wrap">
<div class="contenedor_marco">
 	

      <div class="contenedor">
      
      <div class="contacto">

        <div class="imagen_contacto">
          <p>Imagen</p>
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
                <input type="text" name="nombre" id="nombre"  onFocus="if(this.value == 'Motivo del mensaje'){this.value='';}" onBlur="if(this.value == ''){this.value='Motivo del mensaje';}" value="Motivo del mensaje"/>
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
</div><!-- Fin contenedor home -->






<?php get_footer(); ?>


