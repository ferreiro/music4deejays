
	<footer class="footer">
	<div class="footerContent">
		<ul>
			<p>music4deejays &copy; 2014-2015</p>
			<p class="aboutFooter">La forma más efectiva para crecer como deejay. way to promote your music and talent.</p>

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
	  		
	<!-- List of playlists -->
	<div id="playlist_list">

	    <ul id='playlist2'>
	    	<!-- Loads the content when pressed the play -->
	    	<?php 
	    		query_posts(array('orderby' => 'date', 'showposts' => 2)); 
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
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-51299955-1', 'auto');
	  ga('send', 'pageview');

	</script>

</body>
</html>

 
