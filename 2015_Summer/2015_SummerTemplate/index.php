
    <?php get_header(); ?>

    <div class="main_container">
    <div class="main_container_int">

        <div class="middle">
            <div class="middle__ajax">
                <!-- middle box -->

                <h2 class="content__title">
                    <span>New tracks</span> on music4deejays
                </h2>

                <div class="slider">

                    <div class="sliderButtonPrev icon-prev"></div>
                    <div class="sliderButtonNext icon-next"></div>
                    <div style="display:none;"><ul class="sliderSelector"></ul></div>
                    
                    <ul class="sliderDiapos" id="sliderDiapos">
                        <?php 
                            $i = 0;
                            query_posts(array('orderby' => 'date', 'showposts' => 3, 'cat' => '-208')); 
                            if (have_posts()) : while (have_posts()) : the_post(); 
                        ?>
                            <?php PostSlide($i, "thumbnail"); ?>    
                            <?php $i++; ?>

                        <? endwhile; endif; ?>
                    </ul>
                </div><!-- End of the slider -->
                
            </div>
        </div>

        <div class="content">
            <div class="content__ajax">
                <!-- Left content -->
                

                <!-- Songs!-->
                <section class="stream">

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
  
                    <div class="content__load_more">
                        <a href="#" class="content__load_moreButton genericBox">
                            Load more
                        </a>
                    </div>

                </section><!-- Stream ends-->
                
            </div> 
        </div><!-- content ends-->


        <div class="sidebar">
            <div class="sidebar__ajax">

                <!-- right sidebar -->

                <div class="sidebar__chart genericBox">
                    <div class="sidebar__chart__content">
                        <h3 class="sidebar__chart__title">Top 6 most listened songs</h3>
                        <ul>
                            <?php
                                 $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                               $categories = get_the_category();
                                $category_id = $categories[0]->cat_ID;
                                wpp_get_mostpopular( "range=monthly&limit=6&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li class='sidebar__chart__item'><div class='sidebar__chart__thumbnail'><a href='{url}'>{thumb}</a></div> <div class='sidebar__chart__info'><h3 class='sidebar__chart__item_title'><a href='{url}'>{text_title}</a></h3> <p class='sidebar__chart__genre'><a href='category.html'>Genre</a></p></h2></div></a></li>\"" );
                            ?>
                            <!--
                            <li class='sidebar__chart__item'> 
                                <div class='sidebar__chart__thumbnail'>
                                    <a href='single.html'>
                                        <img src='http://music4deejays.com/media/uploads/wordpress-popular-posts/292-40x40.jpg' title='Faithless – We Come One [Bumer! Remix]' alt='Faithless – We Come One [Bumer! Remix]' width='40' height='40' class='wpp-thumbnail wpp_cached_thumb wpp_featured' width='100%' />
                                    </a>
                                </div>
                                <div class='sidebar__chart__info'>
                                    <h3 class='sidebar__chart__item_title'><a href='single.html'>Titulo</a></h3>
                                    <p class='sidebar__chart__genre'><a href='category.html'>Genre</a></p>
                                </div>
                            </li>
                            -->
                            
                        </ul>
                    </div>

                </div>


                <?php relatedPosts(); ?>


                <div class="sidebar__chart genericBox">
                Follow us.
                </div>


                <style type="text/css">
                #twitter-widget-2 {
                    height: 230px !important;
                }
                </style>
                <a class="twitter-timeline" href="https://twitter.com/Music4deejays" data-widget-id="587675381186035713">Tweets by @Music4deejays</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 


                <div class="followUs" style="display:none; background:transparent; border-left:0; border-right:0;">
                    <h3>Follow us!<h3>
                    <ul>
                        <a href="https://twitter.com/music4deejays" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @music4deejays</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </ul> 
                </div>

                
            </div> 
        </div><!-- right sidebars ends -->

    </div><!-- main_container_int ends -->
    </div><!-- main_container ends -->


    <?php get_footer(); ?>

