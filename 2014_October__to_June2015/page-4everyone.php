
    <?php get_header(); ?>
 
    <?php 
        $Maincategory = get_the_category();
        $MaincategoryID = $Maincategory[0]->cat_id;
        $MaincategoryName = $Maincategory[0]->cat_name;
    ?>

    <?php function PostSlide($id, $imageSize) {
        echo ''?> 
        <?php 
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
            $url = $thumb[0];
        ?> 

        <li class="fading" style="background-image:url(<?php echo $url; ?>);">
            <div class="sliderDiaposInfo">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo $category[0]->cat_name; ?></h2>
                <p><a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">Listen song</a></p>
            </div>
            <div class="sliderDiaposLink">
                <a href="<?php the_permalink(); ?>"></a>
            </div>
        </li> 
      <?php ;
    }
    ?>
 
    <?php function PostLarge($id, $imageSize) {
        echo ''?> 
        <?php 
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            
            if ($imageSize == "thumbnail")
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                $url = $thumb[0];
            }
            else
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                $url = $thumb[0];
            }
        ?> 
        <div class="BoxLarge" id="<?php echo $id; ?>">
            <div class="BoxLargeSongUrl" style="display:none;">
                <?php if(get_field('soundcloudURL')): ?>
                        <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                <?php else: ?>
                        
                <?php endif; ?>
            </div>
            <div class="BoxLargeImage" style="background-image:url(<?php echo $url; ?>);">
                
                <div class="BoxLargeImagePlay">
                    <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <?php if ($category[0]->cat_name == 'Mixes') :?>
                <div class="BoxLargeImageMix">
                    <span class="icon-mix"></span>
                </div>
                <?php endif; ?>
                <div class="BoxLargeImageOverlay">
                    <a href="<?php the_permalink(); ?>"></a>
                </div>
            </div>
            <div class="BoxLargeInfo">
                <div class="BoxLargeInfoTop">
                    <a href="<?php the_permalink(); ?>" class="BoxLargeInfoTopTitle">
                        <?php the_title(); ?>
                    </a> 
                    <a href="<?php echo $category_link; ?>" class="BoxLargeInfoTopSubtitle">
                       <?php 
                            echo $category[0]->cat_name;
                        ?>
                    </a>
                </div>
            </div>
        </div>
      <?php ;
    }
    ?>

    <?php function Post($id, $imageSize) {
        echo ''?> 
        <?php 
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            
            if ($imageSize == "thumbnail")
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                $url = $thumb[0];
            }
            else
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                $url = $thumb[0];
            }
        ?> 
        <article class="Box" id="<?php echo $id; ?>">

            <div class="BoxLineVertical"></div>
            <div class="BoxLineHorizontal"></div> 
            <div class="BoxBackgroundOptions"></div> 
            <div class="BoxSongUrl" style="display:none;">
                <?php if(get_field('soundcloudURL')): ?>
                        <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                <?php else: ?>
                        
                <?php endif; ?>
            </div>

            <div class="BoxLeft">

                <div class="BoxPlay">
                    <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxBoxUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
                        <span class="icon-playsong"></span>
                    </a>
                </div> 

                <div class="BoxAvatar" style="background-image:url(<?php echo $url; ?>);">
                    <a href="<?php the_permalink(); ?>"></a>
                </div>

            </div>
            <div class="BoxRight">

                <?php if ($category[0]->cat_name == 'Mixes') :?>
                <?php endif; ?>

                <p class="BoxCategory">
                    <a href="<?php echo $category_link; ?>">
                        <?php 
                            echo $category[0]->cat_name;
                        ?>
                    </a>
                </p>

                <h2 class="BoxTitle">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <div class="BoxOptions">

                    <ul>
                        <li class="comments">
                            <a href="<?php the_permalink(); ?>#comments">
                                <span class="icon-comment"></span>
                                <span class="text">Comment</span>
                            </a>
                        </li>
                        <li class="share">
                            <a href="#" onclick="event.preventDefault();">
                                <span class="icon-share"></span>
                                <span class="text">Share song</span>
                            </a>
                            <div class="BoxShareMenu">
                                <a href="#twitter" class="icon-twitter">Twitter</a>
                                <a href="#facebook" class="icon-facebook">Facebook</a>
                            </div>
                        </li>
                        <li class="like_dislike">
                            <a href="#">
                                <span class="icon-like"></span>
                                <span class="text">I like it</span>
                            </a>
                            <a href="#">
                                <span class="icon-dislike"></span>
                                <span class="text">I dislike it</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </article><!-- Fin Box -->

      <?php ;
    }
    ?>


        <div class="ContainerMiddle">
            <div class="ContainerMiddle">
                <div class="slider" style="height:320px;">
                    <div class="sliderVerticalLine"></div>
                    <ul class="sliderDiapos" id="sliderDiapos">
                        <li class="fading" style="background-image:url(http://music4deejays.com/media/uploads/2015/06/cartelweb_short.jpg);">
                            <div class="sliderDiaposInfo">
                                <h1><a>4every1 Festival</a></h1>
                                <h2>Festivals and events</h2>
                                <!-- <p><a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">Listen song</a></p> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- End Cotainer Middle -->
 
        <div class="ContainerLeft">
        	<style type="text/css">
        	.ContainerLeft h1 {
        		font-size: 2.5em;
        		line-height: 1em;
        		margin: .5em 0; 
        		text-align: justify;
        	}
        	.ContainerLeft h2 {
        		font-size: 1.5em;
        		line-height: 1em;
        		margin-top: 1em;
        		margin-bottom: .5em; 
        		text-align: justify;
        	}
        	.ContainerLeft p {
        		font-size: 1em;
        		margin-bottom: 1em;
        	}
        	</style>
        	<h1>
        		4every1: un cartel de infarto para bailar hasta el amanecer. 
        	</h1>

        	<p>Sábado 27 de Junio, Madrid, un festival para todos los amantes de la electrónica, con artistas de renombre, ¿te lo vas a perder?</p>

        	<p>¡Nosotros claramente no! Y es que 4every1 nos trae locos después de haber sido un éxito con el cartel del año pasado. Vimos a nuestro compatriota Danny Avila, a un Jay Hardway que acompañaba a la bomba recién explotada Garrix y un gran numero de artistas increibles! </p>

        	<p>Este año no va a ser menos: cartel con los mejores artístas a nivel mundial y varios géneros, que harán vibrar a todo amante de la música de baile. Un total de 4 áreas divididas en géneros musicales: EDM,Tech House/Deep, Techno y Hardstyle/Hardcore. Habrá que ir cambiando de stage a stage, porque vamos a tener una cantidad de cracks increíble.</p>

        	<h2>EDM</h2>

        	<p>Este año en el stage de EDM, nos ha encantado la presencia de <b>Headhunterz</b>, que esta vez no tiene pinta de venir a ponernos temazos de Hardstyle, ¡sino que viene a 130bpm! con temas bastantes frescos que hemos visto este año, <u>'Once Again'</u>; su colaboración con Hardwell, <u>'Nothing Can Hold us Down'</u> o el reciente lanzamiento <u>'Live your Life'</u> que ha llegado al top de Beatport como un cohete.</p>
        	<p>¡Como cabeza de cartel de este año contamos con  <b>Dimitri Vegas</b> y <b>Like Mike</b>! Pero ojo que también tendremos el acojonante, porque no tiene otro nombre, sonido de Don Diablo, con esos temazos que ha ido sacando este año. Además, estará <b>Danny Avila</b>, uno de las artistas EDM nacionales que mayor reconocimiento en el extranjero está teniendo. Este año nos ha encantado su set en <u>Pioneer DJ Sounds</u> donde mostró la calidad que tiene apoyado en esos 4 CDJs y el RMX1000 para marcarse un set increible y que seguro que nos impresiona con temazos como su reciente Plastik.</p>

        	<p><b>Wolfpack</b> también estará por aqui, nos dejó flipados su set de este año en Tomorrowland y no esperamos menos en 4every1. Esperamos también mucho de otros DJs que nos tienen locos con sus últimas producciones, y es que <b>Subshock</b> está que se sale últimamente, cada tema que escuchamos suyo es una obra de arte y cada vez que le vemos en Zoo flipamos! Otro al que no quitamos ojo de encima es al señor <b>Alexander Som</b>, le vimos pinchando en la fiesta de despedida del Madrid Music Days y nos encantó la técnica que tiene y que seguro que nos muestra en el festival, junto a esos temazos que suenan en las radios del país como su reciente <u>Lifetime</u> con Carlos Jean!</p>

        	<p>Pero ojo que también tenemos una oleada de DJs que vienen cargados de talento fresco y otros como <b>DJ NANO</b> que llevan demostrando su versatilidad en una larga carrera, manteniendose en el top y creciendo cada vez que sale del estudio! Veremos también a <b>Les Castizos</b>, que estuvieron también en Madrid Music Days pinchando junto a Nano y a Som! Y para finalizar también podremos contar con <b>Abel the Kid</b>, bastante conocido por su técnica a los platos y con <b>Ivan Mg</b>.</p>
     		<p>Pero esto no es todo, porque nos quedan todavía 3 areas llenas de buena música.</p>
           	<h2>Red area: Hardstyle</h2>
        	<p>En el area de hardstyle/hardcore tendremos a nada menos que <b>Noisecontrollers</b> y a <b>Coone</b> encabezando una lista de cracks entre los que podremos escuchar a: <b>Angerfist, <b>Zatox</b>, Korsakoff</b>, <b>Tha Playah</b>, <b>The Prophet</b>...</p>

           	<h2>Green Area: Tech &amp; deep</h2>

        	<p>El Green Area, o también conocida como el area de los b2b, donde sonará el tech house y el deep, encontraremos a Luciano, a Solomun y a Steve Lawler encabezando el cartel, pero también contaremos con Andrea Oliva b2b UNER y con Cristian Varela b2b Marco Hailey que también destacan en la cabecera! Acompañados de otros fieras como Matthias Tanzman entre ellos!</p>
        	
           	<h2>Black Area</h2>

        	<p>Y ya para acabar tendremos en el Black Area la presencia del techno tendremos el privilegio de escuchar a <b>Ben Sims</b>, a <b>Dave Clarke</b> acompañados de presencias españolas como <b>Fatima Hajji</b>, <b>Oscar Mulero</b> o <b>Pet Duo</b>, que seguro que nos dejan con un sabor de boca estupendo!</p>
        	<p>Por nuestra parte esperamos verte el 27 de Junio en The Music Park, El Álamo, Madrid, donde a las 18:00 empezará a sonar el festival que llevamos esperando todo el año</p>
        	
        	<p>¿Suena bien esto de #amanecerbailando verdad?</p> 
        	
            <a href="http://4every1festival.com/" target="_blank"><img src="http://music4deejays.com/media/uploads/2015/06/cartelwebFIN1.jpg" width="100%" /></a>

        	<p style="margin:1.5em 0;"><center><a href="http://4every1festival.com/" target="_blank"><img src="http://3.bp.blogspot.com/-xDo6pPqZSzo/UonjqvJ20_I/AAAAAAACLhA/HYQOsTwHZIk/s1600/Entradas+FC+Barcelona.jpg" /></a></center></p>
            
        </div><!-- Fin container Left -->

    </div>
    </div><!-- Fin ajax left -->


        <div class="ContainerRight"> 


            <div class="uploadTracks">
                <h3>Do you have a track<h3>
                <a href="/send_tracks" class="button button_color">Upload to m4d.com</a>
                <span class="short icon-upload"></span>
                <span class="medium icon-upload"></span>
                <span class="big icon-upload"></span>
            </div>

            <div class="followUs">
                <h3>Follow us!<h3>
                <ul>
                    <li><a href="http://twitter.com/music4deejays" target="_blank" class="icon-twitter"></a></li>
                    <li><a href="http://facebook.com/music4deejays"  target="_blank" class="icon-facebook"></a></li>
                </ul> 
            </div>

            <div class="SectionToptracks">
                <h2>
                    Top tracks
                </h2>
                <ul class="classifyRelated">
                    <li class="selected"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(1)').addClass('selected'); $('#all_featured').show(); return false; " id="openAll">All time</a></li>
                    <li style="display:none;"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(2)').addClass('selected'); $('#week_featured').show(); return false; " id="openMonth">This week</a></li>
                    <li style="display:none;"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(3)').addClass('selected'); $('#month_featured').show(); return false; " id="openMonth">Month</a></li>
                </ul>
                <ul class="songsRelated">
                    <div id="week_featured" style="display:none;">
                    <?php
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=weekly&limit=5&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                    <div id="month_featured" style="display:none;">
                    <?php 
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=monthly&limit=5&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                    <div id="all_featured">
                    <?php
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=all&limit=5&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                </ul>
            </div><!-- Fin SectionToptracks -->

            <?php get_footer(); ?>

