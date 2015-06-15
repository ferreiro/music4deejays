

    <?php get_header(); ?>
 
    <?php 
        $Maincategory = get_the_category();
        $MaincategoryID = $Maincategory[0]->cat_id;
        $MaincategoryName = $Maincategory[0]->cat_name;
    ?>

 
    <div class="main_container">
    <div class="main_container_int">

        <div class="middle">
            <div class="middle__ajax">
                <!-- middle box -->
                
                <h2 class="content__title">
                    Music for <span><?php single_tag_title(); ?></span> on music for deejays
                </h2>

                <!-- Songs!-->
                <section class="stream">

                    <? 
                        $i = 0;
                        if (have_posts()) : while (have_posts()) : the_post(); 
                    ?>     
                        <?php Post($i, "thumbnail"); ?> 
                        <?php $i++; ?> 

                    <? endwhile; endif; ?>
                    </section>
 
                    <?php get_template_part('pagination'); ?>
 
                </section><!-- Stream ends-->

                <?php relatedPosts(); ?>

            </div>
        </div>

        <div class="content">
            <div class="content__ajax">
                <!-- Left content -->

                
            </div> 
        </div><!-- content ends-->


        <div class="sidebar">
            <div class="sidebar__ajax">

                
            </div> 
        </div><!-- right sidebars ends -->

    </div><!-- main_container_int ends -->
    </div><!-- main_container ends -->


    <?php get_footer(); ?>

