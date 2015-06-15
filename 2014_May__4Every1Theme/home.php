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

       <li class="seleccionado" id="go_home"><a href="/"><p>Home board</p></a></li><div class="separador"></div>

       <!-- Menu Music -->
       <li id="menu_musica" class="categorias" id="go_categories">

          <a id="sinpulsar" class="pulsada"><p>Discover music</p><span class="flecha_abajo"></span></a>
          <a id="pulsado" class="pulsada"><p>Discover music</p><span class="flecha_abajo"></span></a>

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


     
 

<div class="container_wrap">
    <div class="container">
         

        <div class="main_module_wrap">
            <div class="main_module">
                

            <div class="slide_large">
            <ul id="slideshow">
            <?php query_posts(array('orderby' => 'date', 'showposts' => 5, 'cat' => '13, -14' )); if (have_posts()) : while (have_posts()) : the_post(); ?>

                <li class="fading">
                <div class="diapo" >
                <a href="<?php the_permalink(); ?>">
                    <div class="info">
                      <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="imagen">
                      <div class="blur_image"><img src="static/img/slide/slide.jpg" alt="" /></div>
                      <div class="full_image"><?php echo get_the_post_thumbnail($post_id, array(990,990) ); ?></div>
                    </div>
                </a>
                </div>
                </li>
      
            <? endwhile; endif; ?>
            </ul>  

            <div class="flecha_izquierda"><span></span></div>
            <div class="flecha_derecha"><span></span></div>
            <div class="seleccionar_diapositiva">
                <ul class="slider_selector"></ul>
            </div>

            </div><!-- Fin slider -->

 
        <div class="titulo_grande" style="display:none;">
          <h1 style="text-align:center;"><a>New tracks of the Day</a></h1>
        </div>  
 
        <div class="block_wrap">
        <div class="block">
            
            <div class="titulo_peque">
              <h1><a href="http://music4deejays.com/electro">Electro House <span>newest tracks</span></a></h1>
              <p><a href="http://music4deejays.com/electro">See more tracks</a></p>
            </div>            

        </div>
        </div>

            <div class="canciones">
            <?php query_posts(array('orderby' => 'date', 'showposts' => 5, 'cat' => '3, -13' )); if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="song_box_wrap"><div class="song_box"> 
                  <div class="reproducir">
                    <a href="<?php the_permalink(); ?>"><div class="play"><span></span></div></a>
                  </div>
                  <div class="info">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p><a href="category.html">Electro House</a></p>
                  </div>
                  <?php echo get_the_post_thumbnail($post_id, array(300,300) ); ?>
                </div></div>

            <? endwhile; endif; ?>
            </div><!-- Fin canciones -->



        <div class="separador_central"></div>
 

        <div class="block_wrap">
        <div class="block">
            
            <div class="titulo_peque">
              <h1><a href="http://music4deejays.com/progressive">Progressive House <span>newest tracks</span></a></h1>
              <p><a href="http://music4deejays.com/progressive">See more tracks</a></p>
            </div>            


        </div>
        </div>

            <div class="canciones">
            <?php query_posts(array('orderby' => 'date', 'showposts' => 5, 'cat' => '45' )); if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="song_box_wrap"><div class="song_box"> 
                  <div class="reproducir">
                    <a href="<?php the_permalink(); ?>"><div class="play"><span></span></div></a>
                  </div>
                  <div class="info">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p><a href="category.html">Electro House</a></p>
                  </div>
                  <?php echo get_the_post_thumbnail($post_id, array(300,300) ); ?>
                </div></div>

            <? endwhile; endif; ?>
            </div><!-- Fin canciones -->

        <div class="separador_central"></div>
 

        <div class="block_wrap">
        <div class="block">
            
            <div class="titulo_peque">
              <h1><a href="http://music4deejays.com/dubstep">Dubstep <span>newest tracks</span></a></h1>
              <p><a href="http://music4deejays.com/dubstep">See more tracks</a></p>
            </div>            

            <div class="canciones">
            <?php query_posts(array('orderby' => 'date', 'showposts' => 5, 'cat' => '4, -13' )); if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="song_box_wrap"><div class="song_box"> 
                  <div class="reproducir">
                    <a href="<?php the_permalink(); ?>"><div class="play"><span></span></div></a>
                  </div>
                  <div class="info">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p><a href="category.html">Electro House</a></p>
                  </div>
                  <?php echo get_the_post_thumbnail($post_id, array(300,300) ); ?>
                </div></div>

            <? endwhile; endif; ?>
            
            </div><!-- Fin canciones -->

        </div>
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
 
          <div class="separador_derecha"></div>

          <div class="top_tracks">

            <h1>Top 10 tracks<span style="display:none;"><a href="top_tracks.html">See top 100 &raquo;</a></span></h1>

            <div class="listado">
            <?php $popularpost = new WP_Query( array( 'posts_per_page' => 1, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) );
              while ( $popularpost->have_posts() ) : $popularpost->the_post();  ?>     
                
                <div class="top_largo">
                  <div class="imagen"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id, array(80,80) ); ?></a></div>
                  <div class="info">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p><a href="<?php the_permalink(); ?>">Electro</a></p>
                  </a></div>
                </div>

            <?php endwhile; ?>

            <ul>
            <?php  

            $count = 00; 
            $popularpost = new WP_Query( array( 'posts_per_page' => 10, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) );
            
            while ( $popularpost->have_posts() ) : $popularpost->the_post(); 
            $count = $count + 1; // Increase the counter

            ?>     

                <li>
                  <a href="<?php the_permalink() ?>">
                  <span>
                  <?php 
                    if ($count == 10) {  
                      echo "$count."; }
                    else {  
                      echo "0$count.";  
                    }
                  ?>
                  </span>
                  <p><?php the_title(); ?></p></a>
                </li>
 

            <?php    
            endwhile;
            ?>
            </ul>
            </div>

          </div><!-- Fin top tracks -->


 
          <div class="newsletter" style="display:none;">

              <h1>Don't miss any song!<span></span></h1>
              <p>Join to our newsletter: Receive the best tracks on Music4deejays in your inbox every 15 days.</p>

              <div class="formulario_wrap"><div class="formulario">
              <form role="search" method="get" id="searchform" action="/">
                  <input type="text" value="" id="campo" name="s" id="s" placeholder="Write your mail"   autocomplete="off" />
                  <input type="button" type="submit" value="Subscribe" id="icono" />
              </form>
              </div></div><!-- Fin formulario -->

          </div>
 
 

            <div style="display:none;">
              [Discover by Music4deejays]<br />
              [coming events]
            </div>


            <?php 
            // load footer.php
            get_footer();
            ?>


</div>
</div>
</div><!-- Fin Derecha -->





     
