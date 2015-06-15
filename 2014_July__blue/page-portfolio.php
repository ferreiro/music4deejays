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
      <li class="pulsado" style="width:23%;"><a href="<?php echo home_url(); ?>/portfolio/"><p>Trabajos</p></a></li>
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
 	

	<div class="clasificar_trabajos">

	<ul>
		<li class="pulsado"><a href="<?php echo home_url(); ?>/portfolio/"><p>Todos los proyectos</p></a></li>
		<li><a href="<?php echo home_url(); ?>/diseno_web"><p>P&aacute;ginas web</p></a></li>
		<li><a href="<?php echo home_url(); ?>/diseno_grafico"><p>Dise&ntilde;o Gr&aacute;fico</p></a></li>
	</ul>
	</div>

    <?php query_posts(array('orderby' => 'date', 'showposts' => 18, 'cat' => '4' ));
      if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="box_tablon_home">
	  <div class="caja"><div class="interior">
	  
	    <div class="ilustracion">
	      <span class="protected"><a href="<?php the_permalink(); ?>"></a></span>
	      <img src="<?php  
	        $thumb_id = get_post_thumbnail_id();
	        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
	        echo $thumb_url[0];
	      ?>" />
	    </div>
	    <div class="info">
	      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	    </div>
	  </div></div>
	</div><!-- Fin box -->
	<? endwhile; endif; ?>

	<div class="tu_proyecto_ad">
		<div class="box">
			<a href=""></a>
		</div>
	</div>

</div>
</div><!-- Fin contenedor home -->






<?php get_footer(); ?>


