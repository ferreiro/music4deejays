

<!-- Función Post y PostSlide en un mismo sitio, para que se modifiquen a la vez en cualquier lado de la web que lo usemos -->

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
        
        if ($imageSize == "thumbnail") {
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
            $url = $thumb[0];
        }
        else {
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
            $url = $thumb[0];
        }
    ?> 

    <article class="stream__item genericBox"  id="<?php echo $id; ?>">
        <div class="stream__item_songURL" style="display:none;">
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
                        <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist1').prepend( $('#<?php echo $id; ?> .stream__item_songURL li') ); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist1'}); api_playAudio(hap_players[0]); return false;">
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
                    <p class="stream__item_Artist">
                        <?php if(get_field('artist')) : ?>
                            Producer: <?php echo the_field('artist'); ?>
                        <?php endif; ?>
                    </p>
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
    </article><!-- single item ends -->

    <? ;  }  ?>




    <!-- Postss relacionados -->





<?php function relatedPosts() {
    echo ''?> 
    
    <div class="sidebar__chart genericBox">
        <div class="sidebar__chart__content">
            <h3 class="sidebar__chart__title">Related songs</h3>
            <ul>
                <?php query_posts(array('orderby' => 'rand', 'showposts' => 8 )); 
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <?php 
                        $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                    <li class='sidebar__chart__item'> 
                        <div class='sidebar__chart__thumbnail'>
                            <a href='<?php the_permalink(); ?>'>
                                <img src='<?php echo $featuredImage; ?>' title='<?php the_title(); ?>' alt='<?php the_title(); ?>' />
                            </a>
                        </div>
                        <div class='sidebar__chart__info'>
                            <h3 class='sidebar__chart__item_title'><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h3>
                            <p class='sidebar__chart__genre'><a href='category.html'>Genre</a></p>
                        </div>
                    </li>
                <? endwhile; endif; ?> 

            </ul>
        </div>

        <div class="sidebar__chart__seemore">
            <a href="#">See more tracks</a>
        </div> 
    </div>

  <?php ;
}
?>







