<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package zerif

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->

<?php wp_head(); ?>

<script>

var imageCount = 1;

var image_a = 'http://wp.junemedia.com/wp-content/uploads/2015/05/homepage_image_b.jpg';
var image_b = 'http://wp.junemedia.com/wp-content/uploads/2015/05/homepage_image_c.jpg';
var image_c = 'http://wp.junemedia.com/wp-content/uploads/2015/05/homepage_image_a.jpg';

function changeImage()
{

	jQuery(function($) {
		
		imageCount++;	
	
		if ( imageCount === 1 ){
			$('body').css('background-image', 'url(' + image_a + ')');
			//$('body').animate({background-image: 'url(' + image_a + ')'});
		}
		
		if ( imageCount === 2 ){
			$('body').css('background-image', 'url(' + image_b + ')');
			//$('body').animate({background-image: 'url(' + image_b + ')'});
		}
		
		if ( imageCount === 3 ){
			$('body').css('background-image', 'url(' + image_c + ')');
			//$('body').animate({background-image: 'url(' + image_c + ')'});
			
			imageCount = 0;
		}

	});
	
}

setInterval("changeImage()", 10000);

</script>

</head>



<?php if(isset($_POST['scrollPosition'])): ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">

<?php else: ?>

	<body <?php body_class(); ?> >

<?php endif; ?>




<!-- =========================

   PRE LOADER

============================== -->
<?php
	
 global $wp_customize;

 if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ): 
 
	$zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');
	
	if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):
		 
		echo '<div class="preloader">';
			echo '<div class="status">&nbsp;</div>';
		echo '</div>';
		
	endif;	

endif; ?>

<style>
@font-face {
  font-family: 'Pier';
  font-style: normal;
  font-weight: normal;
  src: local('Pier'), url('http://wp.junemedia.com/wp-content/themes/zerif-lite/fonts/pier-regular.otf') format('opentype');
}


#menu-menu-1 a:link {
    color: #FFFFFF;
}


#menu-menu-1 a:visited {
    color: #FFFFFF;
}


#menu-menu-1 a:hover {
    color: #FFB719;
}


#menu-menu-1 a:active {
    color: #FFFFFF;
}

</style>

<header id="home" class="header">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner" style="background-color: #272727; font-family: 'Pier', 'sans-serif'; text-transform: uppercase;">

		<div class="container">

			<div class="navbar-header responsive-logo">

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e('Toggle navigation','zerif-lite'); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>



				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.$zerif_logo.'" alt="'.get_bloginfo('title').'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

						echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';

						echo '</a>';

					endif;

				?>



			</div>

			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation"   id="site-navigation" style="background-color: #272727;">

				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb'     => 'zerif_wp_page_menu')); ?>

			</nav>

		</div>

	</div>

	<!-- / END TOP BAR -->
