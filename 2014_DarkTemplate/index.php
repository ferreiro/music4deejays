
    <? get_header(); ?>
 
                     <? 
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
                    <?php function Post($id, $imageSize) {
                        echo ''?> 
                    <?php 
                        $category = get_the_category(); 
                        $category_id = get_cat_ID( $category[0]->cat_name );
                        $category_link = get_category_link( $category_id );
                        $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        
                        if ($imageSize == "thumbnail") {
                            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                            $url = $thumb[0];
                        }
                        else {
                            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                            $url = $thumb[0];
                        }
                    ?> 


                    <li class="stream__item genericBox"  id="<?php echo $id; ?>">
                        <div class="BoxSongUrl" style="display:none;">
                            <?php if(get_field('soundcloudURL')): ?>
                                    <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                            <?php else: ?>
                                    
                            <?php endif; ?>
                        </div>
                        <div class="stream__item_thumbnail">
                            <span class="stream__item_thumbnail_Mask" class="effect">
                                <a href="<?php the_permalink(); ?>"></a>
                            </span>
                            <img src="<?php echo $url; ?>" width="100%" />
                        </div>
                        <div class="stream__item_right">
                            <div class="stream__item_content">

                                <h3 class="stream__item_title">
                                    <span class="stream__item_Play">
                                        <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
                                            <span class="icon-controller-play2"></span>
                                        </a>
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <div class="stream__item_info">
                                    <p class="stream__item_Genre">
                                        <a href="<?php echo $category_link; ?>" class="border"><? echo $category[0]->cat_name; ?></a>
                                    </p>
                                    <p>Artist name</p>
                                </div>

                                <div class="stream__item_separator"></div>

                                <ul class="stream__item_options">
                                    <li class="options_comments border">
                                        <a href="#">
                                            <span class="icon-bubbles2"></span> <!-- Añadir icono por css -->  
                                        </a>
                                    </li>
                                    <li class=" border">
                                        <a href="#">
                                            <span class="icon-list"></span> <!-- Añadir icono por css --> 
                                            Add playlist
                                        </a>
                                    </li>
                                    <li class=" border">
                                        <a href="#">
                                            <span class="icon-share"></span> <!-- Añadir icono por css --> 
                                            Share
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- single item ends -->

                    <? ;  }  ?>

                    

    <div class="main_container">
    <div class="main_container_int">

        <div class="middle">
            <div class="middle_ajax">
                <!-- middle box -->

                Used on home, for the initial advise and single. 

                <h2 class="content__title">
                    <span>Electro House</span> songs for deejays
                </h2>
                
            </div>
        </div>

        <div class="content">
            <div class="content__ajax">
                <!-- Left content -->

                <?  $i = 0;  query_posts(array('orderby' => 'date', 'showposts' => 13, 'cat' => '-208')); 
                    if (have_posts()) : while (have_posts()) : the_post();  ?>

                        <? if($i == 0): ?> 
                        <div class="slider">
                            <div class="sliderButtonPrev icon-prev"></div>
                            <div class="sliderButtonNext icon-next"></div>
                            <div style="display:none;"> <ul class="sliderSelector"></ul> </div>
                            
                            <ul class="sliderDiapos" id="sliderDiapos">        
                        <?php elseif($i == 3): ?> 
                            </ul>
                        </div><!-- END OF SLIDER -->                

                        <!-- Abrimos el iniciio para la música del stream-->
                        <!-- Stream -->

                        <ul class="stream">
                        <?php endif; ?>

                        <?php if($i == 0 || $i == 1 || $i == 2): ?>
                            <?php PostSlide($i, "thumbnail"); ?> 
                        <?php else: ?>
                            <?php Post($i, "thumbnail"); ?> 
                        <?php endif; ?>
                        
                        <? $i++;  ?><!-- Incrementamos contador -->

                <? endwhile; endif; ?>

                    <div class="content__load_more">
                        <a href="#" class="content__load_moreButton genericBox">
                            Load more
                        </a>
                    </div>

                </ul><!-- Stream ends-->

                  
                
            </div> 
        </div><!-- content ends-->




        <div class="sidebar">
            <div class="sidebar__ajax">

                <!-- right sidebar -->
                
                <div class="sidebar__chart genericBox">
                    <div class="sidebar__chart__content">
                        <h3 class="sidebar__chart__title">Top 10</h3>
                        <ul>
                            <?  $categories = get_the_category();
                                $category_id = $categories[0]->cat_ID;
                                wpp_get_mostpopular( "range=weekly&limit=10&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"< class='sidebar__chart__item'>{thumb} <a href='{url}' class='sidebar__chart__info'>{text_title}</a> </li>\"" ); ?>
                        </ul>
                    </div>

                    <div class="sidebar__chart__seemore">
                        <a href="#">See more tracks</a>
                    </div> 
                </div>
                
            </div> 
        </div><!-- right sidebars ends -->

    </div><!-- main_container_int ends -->
    </div><!-- main_container ends -->

 
    <?php get_footer(); ?>
  
