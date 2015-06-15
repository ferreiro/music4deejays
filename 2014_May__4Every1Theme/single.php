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




<script type="text/javascript">
$(document).ready(function() {

document.title = "► <?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?>";



$("#reproductor").click(function(){
});


});
</script>



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

              <div class="comentarios"> 
                        
                  <div id="disqus_thread"></div>
                  <script type="text/javascript">
                      /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                      var disqus_shortname = 'music4deejays'; // required: replace example with your forum shortname

                      /* * * DON'T EDIT BELOW THIS LINE * * */
                      (function() {
                          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                          dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                      })();
                  </script>
                  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                  

              </div>

            </div>



            <?php endwhile; ?>
            <?php else: get_constructor_nothing(); endif; ?>



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
 



