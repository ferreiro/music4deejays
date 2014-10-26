
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

		<div class="PlayerLeft">
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
				<h2>
					<a href="">
					Nick Gardner - Lose You
					</a>
				</h2> 
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

		<div class="PlayerRight">
			
			<div class="PlayerTime" style="display: ;">
				<div class="player_mediaTime_current">00:00</div>
				<div class="player_mediaTime_total">00:00</div>
			</div>
 
			<div class="PlayerShare">
				<div class="controls ">
					<div class="icon-share"></div>
				</div> 
			</div>

			<div class="PlayerVolume">
				<div class="controls player_volume">
					<div class="icon-volume-high"></div>
				</div>
				<div class="volume_seekbar" data-orientation="horizontal" >
					<div class="volume_bg"></div>
					<div class="volume_level"><span></span></div>
					<div class="player_volume_tooltip"><p style="display:none;"></p></div>
				</div>
			</div>
		</div>

		<!-- List of playlists -->
		<div id="playlist_list">
       <!-- local playlist -->
       <ul id='playlist2'>
       </ul>
       <!-- local playlist -->
       <ul id='playlist3'>
       </ul> 

		     <!-- local playlist -->
		     <ul id='playlist1'>

		     	<li class= 'playlistItem' data-type='soundcloud' data-path='http://soundcloud.com/music4deejays'></li>
		     	<li class= 'playlistItem' data-type='soundcloud' data-path='https://soundcloud.com/music4deejays/rampage-home-stefan-dabruck-penelope-aust'></li>

		        <li class= 'playlistItem' data-type='local' data-mp3='player/audio/1.mp3'>
		        	<a class='playlistNonSelected' href='#'>
		        		Wolv - Dyro
		        	</a>
		        	<a class='playlistNonSelected' href='#'>
		        		<img src="" />
		        	</a>
 

                    <a class='dlink' href='#' data-dlink='../media/audio/1/Tim_McMorris_-_A_Bright_And_Hopeful_Future.mp3'><img src='media/data/dlink.png' alt = 'download'/></a>


		        </li>

		        <li class= 'playlistItem' data-type='local' data-mp3='player/audio/2.mp3'></li>

		        <li class= 'playlistItem' data-type='local' data-mp3='player/audio/3.mp3'></li>

		        <li class= 'playlistItem' data-type='local' data-mp3='player/audio/4.mp3'></li>

		        <li class= 'playlistItem' data-type='local' data-mp3='player/audio/5.mp3'></li>

		     </ul>
		 </div>

  	</div>





	<!-- List of playlists -->
	<div id="playlist_list">
	     <!-- local playlist -->
	     <ul id='playlist2'>
	     </ul>
	              
	     <!-- local playlist -->
	     <ul id='playlist3'>

	        <?php 
	            query_posts(array('orderby' => 'date', 'showposts' => 28 , cat =>'-192')); 
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
	(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
	(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
	l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
	ga('send', 'pageview');
	</script>

</body>
</html>

 