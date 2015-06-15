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
      <li class="pulsado" style="width:30%;"><a href="<?php echo home_url(); ?>/nosotros/"><p>Sobre Nosotros</p></a></li>
      <li style="width:23%;"><a href="<?php echo home_url(); ?>/portfolio/"><p>Trabajos</p></a></li>
      <li style="width:22%;" class="ultimo"><a href="<?php echo home_url(); ?>/contacto/"><p>Contacto</p></a></li>
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
 	


      <div class="pre_contenedor">

        <div class="info_cabecera_wrap">
        
          <div class="imagen_fondo">
            <div class="logo_informacion"><span></span></div>
          </div>
        
          <div id="start_fijar_menu_top"></div>
          <div id="start_end_fijar_menu_top"></div>

          <div class="menu_informacion_wrap ">
            <div class="menu_informacion ">  
            <ul>
              <li><a href="#nosotros"><p>Presentaci&oacute;n</p></a></li>
              <li><a href="#diseno_web"><p>Dise&ntilde;o Web</p></a></li>
              <li style="margin-right:0;"><a href="#diseno_grafico"><p>Dise&ntilde;o Gr&aacute;fico</p></a></li>
            </ul>
            </div>
          </div>
          
            
          <div class="info_cabecera">
            
          </div>
          
           
          
        </div>

    </div><!-- Fin pre contenedor -->


      <div class="contenedor" style="margin-bottom:0;">

 
        <div class="sobre_nosotros_wrap">
        
          <div id="nosotros" class="key_point_nosotros"></div>

          <div class="sobre_nosotros">
            
            <h1>Mucho m&aacute;s que una agencia creativa</h1>
            
            <div class="texto">
              <p>Somos gente <b>comprometida, din&aacute;mica y creativa</b>. Siempre a la cabeza de la innovaci&oacute;n y nuevas tecnolog&iacute;as, que implementamos en todos nuestros proyectos con resultados excepcionales.</p>
              <p style="margin-bottom:0;">Calidad, puntualidad y eficiencia, as&iacute; es como trabajamos. De esta forma, siempre cumplimos con las fechas acordadas.</p>
            </div>
            
            <div class="texto derecha">
              <p>Disponemos de un excelente equipo de profesionales de diversos sectores que trabajan juntos para lograr su completa satisfacci&oacute;n.</p>
              <p>Eficacia, creatividad y calidad. Un equipo multidisciplinar, comprometidos con el cliente y con el trabajo realizado</p> 
            </div>

          </div>
        </div>
        
        
        
        
        <div class="diseno_web_grap">
        
          <div id="diseno_web" class="key_point_diseno"></div>

          <div class="diseno_web">
            
            <div class="titulo">
              <h1>Dise&ntilde;o web exclusivo y personalizado</h1>
            </div>
            
            <div class="izquierda">
              <p >Nuestra misi&oacute;n es crear sitios <b>visuales, din&aacute;micos y creativos</b> centrados en potenciar su imagen de marca y divulgar su trabajo. De este modo, crear puentes entre usted y su audiencia.</p>
              <p>Desarrollamos todo tipo de sitios web: corporativos (empresas, pymes), personales, tiendas online y mucho m&aacute;s.</p>
              <p>Resultados <b>espectaculares</b> y satisfactorios para nuestros clientes. En cada trabajo dejamos plasmados todos los a&ntilde;os de experiencia que tenemos a nuestras espaldas y no paramos hasta que nuestro cliente est&eacute; cien por cien satisfecho</p>
              
              <div class="abrir_portfolio">
                <a href="<?php echo home_url(); ?>/portfolio"><p>Ver trabajos realizados</p></a>
              </div>

            </div>
            
            <div class="derecha">
              <div class="ordenador">
                <span></span>
                <img src="<?php echo get_template_directory_uri(); ?>/source/img/informacion/info_ordenadores.png" />
              </div><!-- Fin -->
            </div>

          </div>
        </div>
        
        
        
        
        
        
        <div class="diseno_grafico_wrap">
        
          <div id="diseno_grafico" class="key_point_diseno"></div>

          <div class="diseno_grafico">
            
            <div class="titulo">
              <h1>Creatividad &amp; dise&ntilde;o en su m&aacute;xima expresi&oacute;n</h1>
            </div>
            
            <div class="izquierda">
              <div class="mural">
                <span></span>
                <img src="<?php echo get_template_directory_uri(); ?>/source/img/informacion/mural.png" />
              </div><!-- Fin -->
            </div>
            
            <div class="derecha">
              <p>En Landcreativa ponemos a su disposici&oacute;n <b>todo lo necesario</b> para hacer que su marca sea competitiva, creativa y se adapte al mercado mediante un servicio completo.</p>
              <p>Todo aquello relacionado con la <b>creatividad</b> y el <b>arte</b> es nuestra especialidad: Imagen corporativa, dise&ntilde;o de logotipos, book fotogr&aacute;ficos, retoque digital, ilustraci&oacute;n, d&iacute;pticos, maquetaci&oacute;n...</p>
              <p>Ya sabes algunos de los servicios que ofrecemos en Landcreativa, pero no son los &uacute;nicos, siempre estamos dispuestos a <b>escuchar</b> cualquier propuesta de <b>nuestros clientes</b> &iexcl;Nos encantar&aacute; oir la tuya!</p>
              
              <div class="abrir_portfolio">
                <a href="<?php echo home_url(); ?>/portfolio"><p>Ver trabajos realizados</p></a>
              </div>

            </div>
            

          </div>
        </div>
         

    </div><!-- Fin contenedor -->


      <div class="pre_contenedor" >


        <div class="que_hacer_wrap">
          <div class="que_hacer">
          
            <h1 class="titulo_largo">&iquest;Te hemos convencido?</h1>
            <div class="links">
            <ul>
              <li class="contacto"><a href="<?php echo home_url(); ?>/contacto"><p>Cuentanos tu proyecto</p></a></li>
            </ul>
            </div>
            <h2>Si necesitas m&aacute;s razones...</h2>
            <div class="links">
            <ul>
              <li class="trabajos"><a href="<?php echo home_url(); ?>/contacto/"><p>Mira nuestros proyectos</p></a></li>
            </ul>
            </div>
          
          </div>
        </div>

    </div><!-- Fin pre contenedor -->


</div>
</div><!-- Fin contenedor home -->






<?php get_footer(); ?>


