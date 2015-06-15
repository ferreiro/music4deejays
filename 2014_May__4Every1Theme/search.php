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




<div class="cont_wrap">
<div class="cont_marco">
<div class="contenedor">




		<script type="text/javascript">
		    // focus on search field after it has loaded
		    document.getElementById('s') && document.getElementById('s').focus();
		</script>

	    <div class="campo_busca">
 		<form role="search" method="get" id="searchform" action="http://www.music4deejays.com/">
	    	<input type="search" placeholder="Search something..." autocomplete="off" value="<?php printf( __( '%s', 'twentyeleven' ), get_search_query()  ); ?>" name="s" id="s" />
		</form>
	    </div>


        <div class="block_wrap">
        <div class="block">

  	    <?php if ( have_posts() ) : ?>
  	    <?php while ( have_posts() ) : the_post(); ?>

  	        <div class="result">
  	            <div class="link"><a href="<?php the_permalink(); ?>"></a></div>
  	            <div class="imagen"><?php echo get_the_post_thumbnail($post_id, array(88,88) ); ?></div>
  	            <div class="info"><h1><?php the_title(); ?></h1> <h2><?php $category = get_the_category();  echo $category[0]->cat_name; ?></h2>  </div>
  	              
  	        </div>    

  	    <?php endwhile; ?>
  	    <?php else : ?>

  	        <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
  	        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>

  	        <script type="text/javascript">
  	            // focus on search field after it has loaded
  	            document.getElementById('s') && document.getElementById('s').focus();
  	        </script>
  	 
  	    <?php endif; ?> 
        </div>
        </div> 


        <div class="separador_derecha"></div>

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

          <div class="related_tracks">

            <h1>Related tracks<span></span></h1>

            <div class="listado">
            <?php query_posts(array('orderby' => 'rand', 'showposts' => 5));
            if (have_posts()) : while (have_posts()) : the_post(); ?>

              <div class="top_largo">
                <div class="imagen"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, array(120,120) ); ?></a></div>
                <div class="info">
                  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <p><a><?php $category = get_the_category( $custompost ); echo $category[0]->cat_name; ?></a></p>
                </a></div>
              </div>

            <? endwhile; endif; ?>
            </div>

          </div><!-- Fin top tracks -->

 
          <div class="separador_derecha"></div>

 
        <?php 
        // load footer.php
        get_footer();
        ?>
		  

</div>
</div>
</div><!-- Fin Derecha -->










</body>
 





