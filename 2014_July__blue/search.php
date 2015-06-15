
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
            
            <div class="profile_view">
            [Audio player]
            </div>

            <div class="separador" style="margin-left:8px;"></div>

            <div class="upload">
            <a href="upload.html">
                <span></span>
                <p>Upload</p>
            </a>
            </div>

            <div class="separador" style="background:#2372b0; margin-left:8px;"></div>

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



<div class="container_wrap" style="margin-top:50px; padding-top:0; ">
    <div class="container">

        <div class="main_module_wrap">
            <div class="main_module">

				<div class="middle_box_wrap" style="margin:0;">
					<div class="middle_box">

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

						</form>
					    </div>
					    </div> 
 
					</div>
				</div>

  
            </div>
        </div>
            
    </div>
</div>



	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


