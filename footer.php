
	        <footer class="footer">
	        <div class="footerContent">
	  				<ul>
	  					<strong>music4deejays 2014</strong>
	  					<li>
	  						<a href="#">Upload</a>
	  					</li>
	  					<li>
	  						<a class="pointer ajaxSend" href="#" target="_blank">Facebook</a>
	  					</li> 
	  					<li>
	  						<a class="pointer ajaxSend" href="#" target="_blank">Twitter</a>
	  					</li> 
	  					<li>
	  						<a href="#" class="ajaxSend">Contact us</a>
	  					</li>
	  				</ul>
	        </div>
	  		</footer>

  		</div><!-- Fin sectionRight -->

  	</div>
  	</div><!-- Fin container -->


	<div class="Player" id="Player">

		<div class="player_progress">
			<div class="progress_bg"></div>
			<div class="load_progress"></div>
			<div class="play_progress">
				<span></span>
			</div>
			<div class="player_progress_tooltip">
				<span></span>
				<p></p>
			</div>
		</div>

		<div class="PlayerContent">

			<div class="PlayerMiddle">
				<div class="PlayerImage">
					<div class="thumb"></div>
				</div>
				<div class="PlayerInfo">
					<h1>
						<a href="">
							<div class="player_mediaName_Mask">
							  <div class="player_mediaName"></div>
							</div>
						</a>
					</h1>
				</div>
			</div>

			<div class="PlayerCenter">
				
				<div class="PlayerControllers">

					<!-- Controls_prev and control son las clases
					que hacen que funcionen estos botones. Controls 
					es un estilo que he puesto yo -->

					<div class="controls controls_prev icon-first">
						<div class="go_prev"></div>
					</div>

					<div class="controls controls_toggle ">
						<div class="icon-playsong"></div>
	 				</div>

					<div class="controls controls_next icon-last">
						<div class="go_next"></div>
					</div> 

				</div>
				
			</div>

			<div class="PlayerLeft">
				<div class="PlayerTime" style="display: ;">
					<div class="player_mediaTime_current">00:00</div>
					<div class="player_mediaTime_total">00:00</div>
				</div>
			</div>
			<div class="PlayerRight">
				
				<div class="PlayerVolume">
					<div class="volume_seekbar" data-orientation="horizontal" >
						<div class="volume_bg"></div>
						<div class="volume_level"><span></span></div>
						<div class="player_volume_tooltip"><p style="display:none;"></p></div>
					</div>
				</div>
			</div>
	  	</div>

	</div>


	<!-- List of playlists -->
	<div id="playlist_list">
	    <!-- local playlist -->
	    <ul id='playlist2'>

	     	<?php 
	     		query_posts(array('orderby' => 'date', 'showposts' => 3 , cat =>'-192')); 
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
				query_posts(array('orderby' => 'date', 'showposts' => 5)); 
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

	<script src='<?php echo get_template_directory_uri(); ?>/js/ajax.js'></script>
 	 
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

 