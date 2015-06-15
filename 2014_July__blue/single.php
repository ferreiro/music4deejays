
<?php get_header(); ?>


<div class="header_wrap"><div class="header">

      <div class="logotipo">
        <div class="link"><a href="<?php echo home_url(); ?>"></a></div>
      </div>

      <div class="menu">
      <ul> 
         <div class="separador"></div>
         <li><a href="<?php echo home_url(); ?>"><p>Home</p></a></li><div class="separador"></div>
         <li class="seleccionado"><a href="<?php echo home_url(); ?>/discover"><p>Discover music</p></a></li><div class="separador"></div>
         <li><a href="<?php echo home_url(); ?>/events"><p>Events</p></a></li><div class="separador"></div>
         <li><a href="<?php echo home_url(); ?>/artists"><p>Artists</p></a></li> 
       </ul>  
      </div>

      <div class="cabecera_derecha">

         <div class="separador"></div>

         <div class="panel_conectado">
            
            <div class="buscador">
            <form role="search" method="get" id="searchform" action="/">
               <input type="text" value="" id="campo" name="s" id="s" placeholder="Search" autocomplete="off" />
            </form>
            </div>

            <div class="separador" style="margin-left:5px;"></div>

            <div class="upload">
            <a href="upload.html">
                <span></span>
                <p>Upload</p>
            </a>
            </div>

            <div class="separador" style="background:#2372b0; margin-left:15px;"></div>

            <div class="opciones">
 
                <div class="title sin_pulsar">
                    <span></span>
                </div>

                <div class="title pulsado">
                    <span></span>
                </div>

                <div class="menu_opciones">
                    <div class="flecha_top"></div>
                    <div class="opciones_lista">
                        <ul>
                            <li><a href="edit_profile.html"><p>About us</p></a></li>
                            <li><a href="settings.html"><p>Send your feedback</p></a></li>
                            <li><a href="index.html"><p>Send your song</p></a></li>
                            <li class="ultimo"><a href="index.html"><p>Contact us</p></a></li>
                        </ul>
                    </div>
                </div>

            </div>

         </div><!-- Fin panel_no conectado -->
      </div>
 
</div></div><!-- Fin cabecera -->



<script type="text/javascript">
$(document).ready(function() {

document.title = "► <?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?>";



$("#reproductor").click(function(){
});


});
</script>



 
<div class="container_wrap" >
  <div class="container">
     
    
    <div class="main_module_wrap">
      <div class="main_module">
        
  
      	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="middle_box_wrap" style="margin-top:-20px; margin-bottom:0;">
          <div class="middle_box">
 

                <div class="box"><div class="box_int">
                  

                  <div class="caratula_track">
                    <?php echo get_the_post_thumbnail($post_id, array(1040,1040) ); ?>
                  </div>

                  <div class="info_track">


                    <h1 class="titulo_medio"><?php the_title(); ?></h1>


                    <div class="opciones_song">
                    <ul>
                      <li class="reproducir"><a href="#"><span></span>Play the song</a></li>
                      <li class="download"><a href="#"><span></span>Info &amp; Download</a></li>
                      <li><a href="#"><span></span>Save to favorites</a></li>
                      <li><a href="#"><span></span>Share track</a></li>
                    </ul>
                    </div>


                    <div class="reproductor">
						
						          <?php the_content(); // Dynamic Content ?>

                    </div>

                    </div>

                  </div>

                </div></div>
          </div>
        </div>
  


        <div class="left_box_wrap">
          <div class="left_box">
            
 


                <div class="box"><div class="box_int">
                      

                    <div class="comentarios">

                    	<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

						<div class="titulo">
						<span></span>
						<h1>Comments <b>(200)</b></h1>
						<a href="">Ver todos</a>
						</div>

				        <?php comments_template(); ?>

						<?php endwhile; ?>
						<?php else: get_constructor_nothing(); endif; ?>



                    </div><!-- Fin comentarios -->
 	

                </div></div>

            
          </div>
        </div><!-- Left box -->
 

        <div class="right_box_wrap">
          <div class="right_box">

              <div class="box"><div class="box_int">
                <div class="mini_chart">

                  <div class="titulo">
                  <h1>Related songs</h1>
                  <a href="#">See top 100</a>
                  </div>

                  <ul>      
                  <?php query_posts(array('showposts'=> 6, 'orderby' => 'rand','post__not_in' => array($thePostID))); 
                  if (have_posts()) : while (have_posts()) : the_post(); ?> 
                  <li>
                    <div class="cover">
                      <span><a href="<?php the_permalink(); ?>"></a></span>
                      <?php echo get_the_post_thumbnail($post_id, array(120,120) ); ?>
                    </div>
                    <div class="info">
                      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                      <p><a href="<?php the_permalink(); ?>" class="escuchar">Listen it</a></p>
                    </div>
                  </li><!-- Fin box -->       
                  <? endwhile; endif; ?>
                  </ul>

                </div><!-- Fin mini tabla -->
              </div></div><!-- Fin box -->

          </div>
        </div><!-- Right box -->
        
               
      </div>
    </div>
      
  </div>
</div>










<?php get_footer(); ?>
