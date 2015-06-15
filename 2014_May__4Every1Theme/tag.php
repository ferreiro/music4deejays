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
       <li id="go_home"><a href="/"><p>Discover new music</p></a></li><div class="separador"></div>
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
 

        <div class="slide_large" style="display:none;">
        <ul id="slideshow">

            <li class="fading">
            <div class="diapo" >
                
                <div class="info">
                  <h1><?php the_title(); ?></h1>
                </div>
                <div class="imagen">
                  <div class="blur_image"><img src="static/img/slide/slide.jpg" alt="" /></div>
                  <div class="full_image"><?php echo get_the_post_thumbnail($post_id, array(990,990) ); ?></div>
                </div>

            </div>
            </li>
  
        </ul>  
 

        </div><!-- Fin slider -->
 
        <div class="titulo_enorme">
          <?php $cat_name = single_cat_title( '', false ); ?>
          <h1><a><?php  echo $cat_name; ?></a></h1>
        </div>            
              

        <div class="canciones">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="song_box_wrap"><div class="song_box"> 
              <div class="reproducir">
                <a href="<?php the_permalink(); ?>"><div class="play"><span></span></div></a>
              </div>
              <div class="info">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p><a href="<?php the_permalink(); ?>">Electro House</a></p>
              </div>
              <?php echo get_the_post_thumbnail($post_id, array(300,300) ); ?>
            </div></div>

        <? endwhile;?>
        <? endif; ?>
        
        <div style="display:none;">
        <?php

        $counter = 0;
        while ($counter < 20) {
          
        echo "            <div class=\"song_box_wrap\"><div class=\"song_box\">";
        echo "              <div class=\"reproducir\">\n";
        echo "                <a href=\"http://music4deejays.com/test/\"><div class=\"play\"><span></span></div></a>\n";
        echo "              </div>\n";
        echo "              <div class=\"info\">\n";
        echo "                <h1><a href=\"http://music4deejays.com/test/\">Test</a></h1>\n";
        echo "                <p><a href=\"http://music4deejays.com/test/\">Electro House</a></p>\n";
        echo "              </div>\n";
        echo "              <img width=\"300\" height=\"300\" src=\"http://music4deejays.com/wp-content/uploads/2014/05/just_grey_light_grey-300x300.jpg\" class=\"attachment-300x300 wp-post-image\" alt=\"just_grey_light_grey\" />            </div></div>";
 

        $counter++;
        }
 
        ?> 
        </div>

        </div><!-- Fin canciones -->

        <?php get_constructor_navigation(); ?>
 

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
 
          <div class="send_your_track" style="display:none;">
              <h1>Promote your talent</h1>
              <div class="ad_box_wrap"><div class="ad_box">
                <h2>Deejay, producer or want to send us a track you like?</h2> 
                <p>It's your time to send us your music and appears on Music4deejays!</p>
                <div class="upload_b"><a href="send_song.html">Send my song</a></div>
              </div></div>
          </div>
            <p style="display:none;">Music4deejays is The best place to discover music and promote your talent. So if you don't want to miss a selection of the best tracks of the week in your mail, join to our newsletter.</p>


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





</body>    
</html>       


