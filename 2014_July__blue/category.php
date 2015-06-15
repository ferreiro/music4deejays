
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





<div class="container_wrap">
    <div class="container">

        <div class="main_module_wrap">
            <div class="main_module">
 
        <div class="left_box_wrap">
        <div class="left_box">



                <div class="box" style="margin-top:-20px;"><div class="box_int">
    
                    <h1 class="titulo_medio" style="width:100%; text-align:center; margin-top:10px;">Discover new music</h1>

                  <div class="clasificar" style="display:none;">
                  <ul>
                      <li class="pulsado"><a href="">Newest tracks</a></li>
                      <li><a href="#">Most listened</a></li>
                      <li><a href="#">Popular artists</a></li>
                      <li><a href="#">Most commented tracks</a></li>
                  </ul>
                  </div> 
                
                </div></div>



                        <div class="box"><div class="box_int">
                                   
							<div class="category_content">
																									
                <?php query_posts(array('orderby' => 'date', 'showposts' => 48, 'cat' => '3, -13' ));
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="song_box_wrap"><div class="song_box"> 
                    <a href="<?php the_permalink(); ?>">
                      <div class="cover">
                           <div class="info">
                              <h1><?php the_title(); ?></h1>
                              <p>Otras opciones...</p>
                           </div>
                            <div class="box_trans"><div class="play"><span></span></div></div><!-- transparent  -->
                            <img src="<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>" alt="">
                         </div>
                    </a>
                </div></div>
                <? endwhile; endif; ?>


				 			<!-- End Category Content --></div> 
								 

			            </div></div><!-- Fin box -->


		            </div>
		        </div><!-- Left box -->
		           


                <div class="right_box_wrap">
                    <div class="right_box">
                        

                                <div class="box"><div class="box_int">
                                    <div class="mini_chart">
                                        

                                    <div class="titulo">
                                        <h1>Top 6 songs</h1>
                                        <a href="#">See top 100</a>
                                    </div>
                                    
                                    <ul>

						            <?php $popularpost = new WP_Query( array( 'posts_per_page' => 6, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) );
						              while ( $popularpost->have_posts() ) : $popularpost->the_post();  ?>     
										<li>
                                            <div class="cover">
                                                <span><a href="<?php the_permalink(); ?>"></a></span>
                                               	<img src="<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>" alt="">
                                             </div>
                                             <div class="info">
                                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                                <p><a href="<?php the_permalink(); ?>" class="escuchar">Listen the song</a></p>
                                             </div>
                                        </li><!-- Fin box -->     
		                            <? endwhile; ?>
                                    </ul>
                                    </div><!-- Fin mini tabla -->
                                </div></div><!-- Fin box -->
 
 
					            <div class="box"><div class="box_int">
					                <div class="panel_acceso">                           

		                                    <h1>Promote your talent</h1>
		                                    <div class="ad_box_wrap"><div class="ad_box">
		                                      <h2>Deejay, producer or want to send us a track you like?</h2> 
		                                      <p>It's your time to send us your music and appears on Music4deejays!</p>
		                                      <div class="upload_b"><a href="send_song.html">Send my song</a></div>
		                                    </div></div>                       

					                     <h1><b>Nombre</b> es más increible aún si te creas una cuenta:</h1>
					                     <p>Añadir botones con gráficos: Sube tu musica a la nube, comparte canciones con otros usuarios, descarga temas ineditos, music cloud..</p>
					                     <div class="acceso">
					                            <a href="create_account.html">Create an account</a>
					                     </div>
					                 
					                     <div class="registro">
					                            <p>Have an account?</p>
					                            <a href="login.html">Login</a>
					                    </div>
					                    
					                </div>
					            </div></div><!-- Fin box -->
                                
 
					            <div class="box"><div class="box_int">
 									<a href="https://twitter.com/Music4deejays" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @Music4deejays</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					            </div></div><!-- Fin box -->



                    </div>
                </div><!-- Right box -->
                
                
            </div>
        </div>
            
    </div>
</div>








<?php get_footer(); ?>
 