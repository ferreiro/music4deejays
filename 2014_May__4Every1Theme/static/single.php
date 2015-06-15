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

       <!-- Menu Music -->
       <li id="go_home"><a href="http://music4deejays.com/discover"><p>Discover new music</p></a></li><div class="separador"></div><div class="separador"></div>
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

 
        <div class="block_wrap">
        <div class="block">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();?>
     
            <div class="s_izquierda">

              <div class="caratula">
                <span></span>
                 <?php echo get_the_post_thumbnail($post_id, 'full'); ?>
              </div>

              <div class="share" style="display:none;">
              <ul>
                <li><a href=""><p>Share on Facebook</p></a></li>
                <li><a href=""><p>Share on Twitter</p></a></li>
                <li><a href=""><p>Send to my email</p></a></li>
              </ul>
              </div>

            </div>


            <div class="s_derecha">
              <h3><?php if (get_constructor_option('content', 'links', 'category') && count( get_the_category() ) ) : ?><?php the_category(', ');?><?php endif; ?></h3>
              <h1><?php the_title(); ?></h1>
              <div id="reproductor">
                  <?php
                    the_content(' ');
                  ?>  
              </div>
              <h2><span>Tags:</span> <?php the_tags(''); ?> </h2>

              <h4>Do you like the song? Show your support to the producer</h4>
              <div class="comentarios"> 
                  <div id="fb-root"></div>
                <script>(function(d, s, id) {
                 var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-colorscheme="light" data-numposts="10" data-width="100%"></div>

              </div>

            </div>



            <?php endwhile; ?>
            <?php else: get_constructor_nothing(); endif; ?>


        </div>
        </div>



        <div class="separador_central"></div>

        <div class="titulo_peque" style="display: ;">
          <h1 style="margin-left:3%;"><a>More music you might like</a></h1>
        </div>            
            
        <div class="canciones" style="display: ;">

            <?php query_posts(array('orderby' => 'rand', 'showposts' => 5, 'cat' => '-13' )); if (have_posts()) : while (have_posts()) : the_post(); ?>

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


</div>
</div>
</div><!-- Fin contenedor -->
 
 





<div class="derecha_wrap">
<div class="derecha_marco">
<div class="derecha">


          <div class="related_tracks">

            <h1>Related tracks<span></span></h1>

            <div class="listado">
            <?php query_posts(array('orderby' => 'rand', 'showposts' => 8));
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
 



