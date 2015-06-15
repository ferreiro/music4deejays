<?php
/**
 * @package WordPress
 * @subpackage Constructor
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="user-scalable=no">
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Social tags -->  

    <link rel="publisher" href="https://plus.google.com/111550500858280094116"/>
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MUSIC4DEEJAYS The best place to discover music and promote your talent – Electro Songs / House Music / Trance / Dubstep" />
    <meta property="og:url" content="http://www.landcreativa.com/" />
    <meta property="og:site_name" content="LANDCREATIVA" />
    <meta property="article:publisher" content="https://www.facebook.com/landcreativa" />
    <meta property="fb:admins" content="112448292181585" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/static/img/fav/fav.gif" />

    <!-- Favicons --> 
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/static/img/fav/fav.png" type="image/png"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/static/img/fav/fav.gif" type="image/" />
    <link href="<?php echo get_template_directory_uri(); ?>/static/img/fav/fav.gif" rel="apple-touch-icon" />
    <link href="<?php echo get_template_directory_uri(); ?>/static/img/fav/fav.gif" rel="shortcut icon" />
    <link href="<?php echo get_template_directory_uri(); ?>/static/img/fav/fav.gif" rel="fluid-icon" />


    <title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php wp_head(); ?>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!-- jQuery easing plugin - VERY IMPORTANT -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/static/js/jquery.easing.1.3.js"></script>
    <!-- DDSlider jQuery Plugin - VERY IMPORTANT -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/static/js/jquery.DDSlider.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/static/js/animaciones.js"></script>
 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/subsecciones.css" type="text/css" media="all">
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     
      ga('create', 'UA-51037534-1', 'music4deejays.com');
      ga('send', 'pageview');

    </script>

</head>
<body> 

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&appId=208624035890567&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 


<!-- Aviso no script -->
<noscript>
    <div class="aviso_no_script"><div class="aviso_no_script_int">
    <p>Oh no! Music4deejays doesn't work unless you <a href="http://enable-javascript.com/" rel="nofollow">turn on JavaScript.</a></p>
    </div></div>
</noscript>

<!-- Scroll to top -->
<div class="scrollup" href="#" style="display:none;">
    <span><p>Subir</p></span>
</div>

   
<div class="mobile_ad_wrap">
    <div class="mobile_ad">
      <div class="ad_box">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Music4deejays rectangulo abajo -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:320px;height:50px"
               data-ad-client="ca-pub-7047625688940780"
               data-ad-slot="8826371862"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
      </div>
    </div>
</div>

     
<!-- Menú lateral derecha -->
 
<div class="capa_menu_desplegado" id="capa_menu_desplegado"></div>
<div class="menu_lateral" id="menu">
    
    <div class="opciones_top_wrap">
      <div class="opciones_top">
        <h1>Men&uacute;</h1>
        <div class="boton_cerrar_menu" id="cerra_menu"></div>
      </div>
    </div>
    
    <div class="menu_wrap">
      <div class="menu">
        <ul>
          <!-- Separador --><div class="separador"></div>
          <li><a href="/"><p>Home board</p></a></li>
          <li><a href="<?php get_home_url(); ?>/progressive/"><p>Progressive House</p></a></li>
          <li><a href="<?php get_home_url(); ?>/electro/"><p>Electro House</p></a></li>
          <li><a href="<?php get_home_url(); ?>/dubstep/"><p>Dubstep</p></a></li>
          <li><a href="<?php get_home_url(); ?>/events/"><p>Festivals &amp; Events</p></a></li>
          <li><a href="<?php get_home_url(); ?>/send_tracks/"><p>Send your track</p></a></li>
          <li><a href="mailto:info@music4deejays.com"><p>Contact</p></a></li>
        </ul>
      </div>
    </div>
  
    <div class="redes_sociales"> 
      <ul> <!-- Change the language --> 
        <li class="facebook" target="_blank"><a href="http://facebook.com/landcreativa"><span></span></a></li> 
        <li class="twitter" target="_blank"><a href="http://twitter.com/landcreativa"><span></span></a></li> 
        <li class="gplus" target="_blank"><a href="http://youtube.com/landcreativa"><span></span></a></li> 
        <li class="instagram" target="_blank"><a href="http://instagram.com/landcreativa"><span></span></a></li> 
      </ul> 
    </div> 
       
    
</div>



