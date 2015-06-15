

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
               		<?php echo sprintf( __( '%s songs. ', 'html5blank' ), $wp_query->found_posts );  ?> 
                    Music for <span><?php echo get_search_query(); ?></span> on music for deejays
                </h2>

                <!-- Songs!-->
                <section class="stream">



                	<?php 
                		$total = $wp_query->found_posts;
                		if ($total == 0) :
                	?>
                	<div class="searchNothingFound">

                		<div class="searchBrokenImage"></div>

                	    <h1>Nothing found :-(</h1>
                		<h2><a href="#" onclick="document.getElementByClass('HeaderSearchInput').focus(); return false;" id="try_again">Try again!</a></h2>

                		<div class="searchPageForm">
        	        		<form action="http://music4deejays.com/#/?s=" class="searchform" method="get" role="search" _lpchecked="1">
        	        		    <input type="text" class="HeaderSearchInput" name="s" placeholder="Search..." autocomplete="off">
        	        		    <input type="submit" class="HeaderSearchSubmit" name="submit" id="searchsubmit" value=" ">
        	        		    <span class="HeaderSearchIcon icon-search"></span>
        	        		</form>
                		</div>


                		<div class="searchMeme">
                			<img src="http://3rrm7021tets2frq9o1kfbbh.wpengine.netdna-cdn.com/wp-content/uploads/2014/07/10494532_10152322970863160_3490187042434914531_n.jpg" />
                		</div>

                	</div>
                	<?php
                		else:
                	?>

                		<div class="searchform searchPageForm">
        	        		<form action="http://music4deejays.com/" class="searchform" method="get" role="search" _lpchecked="1">
        	        		    <input type="text" class="HeaderSearchInput" name="s" placeholder="Search..." autocomplete="off">
        	        		    <input type="submit" class="HeaderSearchSubmit" name="submit" id="searchsubmit" value=" ">
        	        		    <span class="HeaderSearchIcon icon-search"></span>
        	        		</form>
                		</div>
                	<?php endif; ?>

 
					<? $i = 0;
						if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php Post($i, "thumbnail"); ?> 
						<?php $i++; ?> 
					<? endwhile; endif; ?>

 
 
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





  