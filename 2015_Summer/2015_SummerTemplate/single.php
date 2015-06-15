

    <?php get_header(); ?>

    <?php 
        $Maincategory = get_the_category();
        $MaincategoryID = $Maincategory[0]->cat_id;
        $MaincategoryName = $Maincategory[0]->cat_name;
    ?>

 

    <div class="main_container">
    <div class="main_container_int">

        <? if (have_posts()) : while (have_posts()) : the_post();  ?>

        <?php 
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );

            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
            $url = $thumb[0];
        ?>

        <div class="middle">
            <div class="middle__ajax">
                <!-- middle box -->
                 

                <section class="songCover border" id="single">
                    <div class="songCoverInt">

                        <div class="radioPlaylist">
                            <?php if(get_field('soundcloudURL')): ?>
                                <li class='playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                            <?php else: ?>
                                
                            <?php endif; ?>
                        </div> 

                        <div class="songCoverAvatar" style="background-image:url(<?php echo $featuredImage; ?>);" ></div>
                        
                        <h2 class="songCoverSubtitle">
                            <a href="<?php  echo $category_link; ?>" class="category">
                                <?php  echo $category[0]->cat_name; ?>
                            </a>
                        </h2>

                        <h1 class="songCoverTitle">
                            <?php the_title(); ?>
                        </h1>

                        <div class="radioListenBtn">


                            <a onclick="api_addTrack(hap_players[0], 'visible', $('#single .radioPlaylist li') , trackList_soundcloud, 0); return false;">
                               <span class="icon-list"></span> <!-- Añadir icono por css --> 
                                Add playlist
                            </a>

                            <a href="#" class="radioListenBtnRed" onclick="event.preventDefault(); $('#playlist_list #playlist1').prepend( $('#single .radioPlaylist li') ); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist1'}); api_playAudio(hap_players[0]); return false;">
                                <span class="icon-playsong"></span>
                                Listen song
                            </a>

                            <a href="#" onclick="event.preventDefault(); return false;">
                               <span class="icon-share"></span> <!-- Añadir icono por css --> 
                                Share
                            </a>

                            <?php if(get_field('downloadURL')): ?>       
                                <a href="<?php the_field('downloadURL'); ?>" class="downloadButton" target="_blank">
                                    Download
                                </a>
                            <?php endif; ?> 
                        </div>



                        <li class="share">
                            <a href="#" onclick="event.preventDefault();">
                                <span class="icon-share"></span>
                                <span class="text">Share song</span>
                            </a>
                            <div class="BoxShareMenu">
                                <div class="facebookLink" id="<?php echo 'facebook'.$id; ?>" style="display:none;">
                                    <span>https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?></span>
                                </div>
                                <div class="twitterLink" id="<?php echo 'twitter'.$id; ?>" style="display:none;">
                                    <span>https://twitter.com/home?status=Now listeting to <?php echo wp_get_shortlink(); ?> via @music4deejays</span>
                                </div>
                                <a href="#" class="icon-twitter shareTwitter">Twitter</a> 
                                <a href="#" class="icon-facebook shareFacebook">Facebook</a> 
                            </div>
                        </li>

                    </div>

                    <div class="songCoverBG"> 
                        <div style="background-image:url(<?php echo $featuredImage; ?>);" />
                        <div class="songCoverSolid"></div>
                    </div>
                </section>
 
                                

            </div>
        </div>

        <div class="content">
            <div class="content__ajax">
                <!-- Left content -->
                
                <div class="sidebar__chart genericBox">
                    <div class="tags">
                        <?php the_tags('',' ',''); ?> 
                    </div>

                    <?php if($post->post_content != ""): ?>
                        <div class="SongInfo">
                            <?php the_content(); ?>
                        </div>
                    <?php endif; ?>     


                    <div class="comments" id="comments">
                        <h2>Comments</h2>
                        <p>
                            'Comments' are on Beta. If you'd like to get an early access to it, <a href="#"onclick="event.preventDefault(); $('.modal').fadeToggle('fast');"><u>click here</u></a>
                        </p>
                    </div>      

                </div>

                <?php if ( ! is_admin() ) : ?>
 
                <?php endif; ?>
  
  

                <? endwhile; endif; ?>    
                
                
            </div> 
        </div><!-- content ends-->


        <div class="sidebar">
            <div class="sidebar__ajax">

            <?php relatedPosts(); ?>

            </div>
        </div><!-- right sidebars ends -->

    </div><!-- main_container_int ends -->
    </div><!-- main_container ends -->


    <?php get_footer(); ?>