			
			<style type="text/css">
			#twitter-widget-2 {
				height: 230px !important;
			}
			</style>
			<a class="twitter-timeline" href="https://twitter.com/Music4deejays" data-widget-id="587675381186035713">Tweets by @Music4deejays</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
			
	        <footer class="footer">
	        <div class="footerContent">
	  				<ul>
	  					<p>music4deejays 2014</p>
	  					<li>
	  						<a href="http://music4deejays.com/#/send_tracks">Upload</a>
	  					</li>
	  					<li>
	  						<a class="pointer ajaxSend" href="http://facebook.com/music4deejays" target="_blank">Facebook</a>
	  					</li> 
	  					<li>
	  						<a class="pointer ajaxSend" href="http://twitter.com/music4deejays" target="_blank">Twitter</a>
	  					</li> 
	  					<li>
	  						<a href="mailto:info@music4deejays.com" class="ajaxSend">Contact us</a>
	  					</li>
	  				</ul>
	        </div>
	  		</footer>

  		</div><!-- Fin sectionRight -->

  	</div>
  	</div><!-- Fin container -->

	<!-- List of playlists -->
	<div id="playlist_list">

	    <ul id='playlist2'>
	    	<!-- Loads the content when pressed the play -->
	    	<?php 
	    		query_posts(array('orderby' => 'random', 'showposts' => 2)); 
	    		if (have_posts()) : while (have_posts()) : the_post(); 
	    	?>
	    	<?php                     
	    		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
	    		$playlistImage = $thumb[0];
	    	?>
	    	<?php if(get_field('soundcloudURL')): ?>
	    		<li class="playlistItem" data-type="soundcloud" data-path="<?php the_field('soundcloudURL'); ?>" data-thumb="<?php echo $playlistImage; ?>"></li>
	    	<?php endif; ?>

	    	<?php endwhile; ?>
	    	<?php endif; ?>
	    </ul>

	    <!-- local playlist -->
	    <ul id='playlist1'>
			<?php 
				query_posts(array('orderby' => 'date', 'showposts' => 3)); 
				if (have_posts()) : while (have_posts()) : the_post(); 
			?>
			<?php                     
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
				$playlistImage = $thumb[0];
			?>
			<?php if(get_field('soundcloudURL')): ?>
				<li class="playlistItem" data-type="soundcloud" data-path="<?php the_field('soundcloudURL'); ?>" data-thumb="<?php echo $playlistImage; ?>"></li>
			<?php endif; ?>

			<?php endwhile; ?>
			<?php endif; ?>	 
	    </ul>

	 </div>
 
 
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver=3.9.2'></script> 
 
	<!-- http://benalman.com/projects/jquery-urlinternal-plugin/ -->
	<script src='<?php echo get_template_directory_uri(); ?>/js/jquery.ba-urlinternal.min.js'></script>
	<!-- http://www.asual.com/jquery/address/ -->
	<script src='<?php echo get_template_directory_uri(); ?>/js/jquery.address-1.4.min.js'></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/player/swfobject.js"></script><!-- flash backup --> 
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script><!-- flash backup --> 

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/player/jquery.ui.touch-punch.min.js"></script><!-- mobile drag/sort -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/player/jquery.apPlaylistManager.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/player/jquery.html5audio.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/player/jquery.html5audio.func.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/player/jquery.html5audio.settings_classic_multiple.js"></script>

	<!-- jQuery easing plugin - VERY IMPORTANT -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<!-- DDSlider jQuery Plugin - VERY IMPORTANT -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
	 
	<script>
	// Warning, global variable =/
	var base = 'http://music4deejays.com';
   	var playFirstTime = 0;
	</script>

	<script src='<?php echo get_template_directory_uri(); ?>/js/a_load.js'></script>
 	 
	<!-- analytics -->
	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-51299955-1']);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

</body>
</html>

 
