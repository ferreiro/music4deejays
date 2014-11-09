
    <?php get_header(); ?>
 
    <?php 
        $Maincategory = get_the_category();
        $MaincategoryID = $Maincategory[0]->cat_id;
        $MaincategoryName = $Maincategory[0]->cat_name;
    ?>

    <?php  
        if (have_posts()) : while (have_posts()) : the_post(); 
    ?>

        <div class="ContainerLeft">

            <?php 
                $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>
            <div class="SongHero" style="background-image:url(<?php echo $featuredImage; ?>);">
                
                <div class="BoxSongUrl" style="display:none;">
                    <?php if(get_field('soundcloudURL')): ?>
                            <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                    <?php else: ?>
                            
                    <?php endif; ?>
                </div>

                <div class="SongHeroVerticalLine" style="display:none;"></div>
                <div class="SongHeroGradient"></div>
                <div class="SongHeroInfo">

                    <div class="PlayButton">
                        <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
                          <span class="icon-playsong"></span>
                        </a>
                    </div>  
                    <h1><a><?php the_title(); ?></a></h1>
                </div>
                <div class="SongHeroOptions"> 
                    <div class="BoxOptions">

                      <ul>
                        <li class="comments">
                          <a>
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
            </div>   

            <div class="SongTags">
                <div class="LineVertical"></div>
                <a href="" class="category">Electro House</a>
                <?php the_tags('',' ',''); ?>
            </div>

            <?php if($post->post_content != ""): ?>
                <div class="SongInfo">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>   

            <?php if(the_field('downloadURL')): ?>
                <a href="<?php the_field('downloadURL'); ?>">Exclusive Download</a>
            <?php endif; ?>            

            <div class="SongComments" id="comments">
                <h2>Comments</h2>
                <p>
                    'Comments' are on Beta. If you'd like to get an early access to it, <a href="#"onclick="event.preventDefault(); $('.modal').fadeToggle('fast');"><u>click here</u></a>
                </p>
            </div>      

            <? endwhile; endif; ?>    

            <div class="SongRelated">
                <h2>Related songs</h2>
                <ul>
                    <?php query_posts(array('orderby' => 'rand', 'showposts' => 4 )); 
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php 
                            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>
                        <li style="background-image:url(<?php echo $featuredImage; ?>);">
                            <a href="<?php the_permalink(); ?>"></a>
                        </li>
                    <? endwhile; endif; ?> 
                </ul>
            </div>           

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





