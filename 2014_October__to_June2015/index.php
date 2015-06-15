
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
                <!-- <p><a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">Listen song</a></p> -->
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
             $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
             $url = $thumb[0];
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
                    <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend( $('#<?php echo $id; ?> .BoxSongUrl') ); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
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
                            <a href="<?php the_permalink(); ?>">
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
                        <li class="like_dislike">
                            <a href="#" onclick="event.preventDefault();">
                                <span class="icon-like"></span>
                                <span class="text">I like it</span>
                            </a>
                            <a href="#" onclick="event.preventDefault();">
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
            <div class="slider" style="height:320px;">
                <div class="sliderVerticalLine"></div>

                <div class="sliderButtonPrev icon-prev"></div>
                <div class="sliderButtonNext icon-next"></div>
                <ul class="sliderSelector"></ul>
                <ul class="sliderDiapos" id="sliderDiapos">
                    <li class="fading" style="background-image:url(http://music4deejays.com/media/uploads/2015/06/cartelweb_short.jpg);">
                        <div class="sliderDiaposInfo">
                            <h1><a href="http://music4deejays.com/4everyone">4every1 Festival</a></h1>
                            <h2>Festivals and events</h2>
                            <!-- <p><a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">Listen song</a></p> -->
                        </div>
                        <div class="sliderDiaposLink">
                            <a href="http://music4deejays.com/4everyone"></a>
                        </div>
                    </li> 
                    <?php 
                        $i = 0;
                        query_posts(array('orderby' => 'date', 'showposts' => 2, 'cat' => '-208')); 
                        if (have_posts()) : while (have_posts()) : the_post(); 
                    ?>
                        <?php PostSlide($i, "thumbnail"); ?>    
                        <?php $i++; ?>

                    <? endwhile; endif; ?>
                </ul>
            </div><!-- End of the slider -->

        </div><!-- End of the slider -->
        <div class="ContainerLeft">

            <section class="all_posts">

                <h1 class="leftTitle">
                    New tracks <span>on music4deejays</span>
                </h1>
            <? 
                $i = 0;
                query_posts(array('orderby' => 'date', 'showposts' => 9, 'cat' => '-208')); 
                if (have_posts()) : while (have_posts()) : the_post(); 
            ?>  
                <?php if($i < 3): ?>
                    <?php $i++; ?>
                <?php else: ?>
 
                    <?php Post($i, "thumbnail"); ?> 
                    <?php $i++; ?>
                <?php endif; ?>

            <? endwhile; endif; ?>
            </section>

            <div class="load_more">
                <a href="/electro" class="button">
                    Load more songs
                </a>
            </div>

            <style type="text/css">
            .ContainerRight
            {
                margin-top: 20px;
            }
            </style>


        </div><!-- Fin container Left -->

    </div>
    </div><!-- Fin ajax left -->


        <div class="ContainerRight"> 

            <div class="uploadTracks" style="display: none;">
                <h3>Do you have a track?<h3>
                <a href="/send_tracks" class="button button_color">Upload to m4d.com</a>
                <span class="short icon-upload"></span>
                <span class="medium icon-upload"></span>
                <span class="big icon-upload"></span>
            </div>

            <div class="SectionToptracks"  style="margin-top:0;">
                <h2 class="ContainerRightTitle">
                    Top 5 monthly tracks
                </h2>
                <ul class="classifyRelated" style="display:none;">
                    <li class="selected"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(1)').addClass('selected'); $('#month_featured').show(); return false; " id="openMonth">This Month</a></li>
                    <li style="display:none;"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(1)').addClass('selected'); $('#all_featured').show(); return false; " id="openAll">All time</a></li>
                    <li style="display:none;"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(2)').addClass('selected'); $('#week_featured').show(); return false; " id="openMonth">This week</a></li>
                </ul>
                <ul class="songsRelated">
                    <div id="week_featured" style="display: ;">
                    <?php
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=monthly&limit=5&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div> 
                </ul>
            </div><!-- Fin SectionToptracks -->
 
            <div class="SectionToptracks"  style="margin-top:0;">
                <h2 class="ContainerRightTitle">
                    Random pics
                </h2>
                <ul class="classifyRelated" style="display:none;">
                    <li class="selected"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(1)').addClass('selected'); $('#month_featured').show(); return false; " id="openMonth">This Month</a></li>
                    <li style="display:none;"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(1)').addClass('selected'); $('#all_featured').show(); return false; " id="openAll">All time</a></li>
                    <li style="display:none;"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(2)').addClass('selected'); $('#week_featured').show(); return false; " id="openMonth">This week</a></li>
                </ul>
                <ul class="songsRelated">
                    <?php query_posts(array('orderby' => 'rand', 'showposts' => 5 )); 
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        <?php 
                            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>
                        <li>
                            <span class="songsRelatedCover">
                                <a href="http://music4deejays.com/we-found-aciiid-chrisc-bootleg-calvin-harris-ft-rihanna-vs-moguai/" target="_self">
                                    <img src="<?php echo $featuredImage; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="40" height="40" class="wpp-thumbnail wpp_cached_thumb wpp_featured">
                                </a>
                            </span>
                            <span class="songsRelatedInfo">
                                <h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </span>
                        </li> 
                    <? endwhile; endif; ?> 
                </ul>  
            </div><!-- Fin SectionToptracks -->


            <div class="followUs" style="display:none; background:transparent; border-left:0; border-right:0;">
                <h3>Follow us!<h3>
                <ul>
                    <a href="https://twitter.com/music4deejays" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @music4deejays</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </ul> 
            </div>

            <div class="followUs" style="background:transparent; border-left:0; border-right:0;">
            </div>

            <div class="uploadTracks" style="display:none;">

                <h3>Do you have a track?<h3>
                <a href="/send_tracks" class="button button_color">Upload to m4d.com</a>
                <span class="short icon-upload"></span>
                <span class="medium icon-upload"></span>
                <span class="big icon-upload"></span>
            </div>

            <?php get_footer(); ?>

