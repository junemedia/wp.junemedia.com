<section class="about-us" id="aboutus" style="display:none;">	<div class="container">		<!-- SECTION HEADER -->		<div class="section-header row">			<!-- SECTION TITLE -->			<?php 			$zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('About Us','zerif-lite'));						if( !empty($zerif_aboutus_title) ):				echo '<h2 class="white-text">'.__($zerif_aboutus_title,'zerif-lite').'</h2>';			endif;			?>			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->			<?php				$zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Add a subtitle in Customizer, "About us section"','zerif-lite'));				if( !empty($zerif_aboutus_subtitle) ):					echo '<h6 class="white-text">';						echo __($zerif_aboutus_subtitle,'zerif-lite');					echo '</h6>';				endif;			?>		</div><!-- / END SECTION HEADER -->		<!-- 3 COLUMNS OF ABOUT US-->		<div class="row" style="display:none;">			<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->			<?php				$zerif_aboutus_biglefttitle = get_theme_mod('zerif_aboutus_biglefttitle',__('In order to Change the Title here you Need to go to Customizer','zerif-lite'));				if( !empty($zerif_aboutus_biglefttitle) ):					echo '<div class="col-lg-4 col-md-4 column">';						echo '<div class="big-intro" data-scrollreveal="enter left after 0s over 1s">';							echo __($zerif_aboutus_biglefttitle,'zerif-lite');						echo '</div>';					echo '</div>';				endif;				$zerif_aboutus_text = get_theme_mod('zerif_aboutus_text','You can add here a large piece of text. For that, please go in the Admin Area, Customizer, "About us section" <br/> <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque.  <br/> <br/>Maecenas non tellus vitae augue tempor venenatis. Mauris ac tincidunt dolor, id feugiat odio. Mauris egestas ligula sit amet lorem condimentum ultrices');				if( !empty($zerif_aboutus_text) ):					echo '<div class="col-lg-4 col-md-4 column" data-scrollreveal="enter bottom after 0s over 1s">';						echo '<p>';							echo __($zerif_aboutus_text,'zerif-lite');						echo '</p>';					echo '</div>';				endif;			?>		<!-- COLUMN 1 - SKILSS-->		<div class="col-lg-4 col-md-4 column">			<ul class="skills" data-scrollreveal="enter right after 0s over 1s">				<!-- SKILL ONE -->				<li class="skill">					<?php						$zerif_aboutus_feature1_nr = get_theme_mod('zerif_aboutus_feature1_nr','50');						if( !empty($zerif_aboutus_feature1_nr) ):							echo '<div class="skill-count">';								echo '<input type="text" value="'.$zerif_aboutus_feature1_nr.'" data-thickness=".2" class="skill1">';							echo '</div>';						endif;						$zerif_aboutus_feature1_title = get_theme_mod('zerif_aboutus_feature1_title',__('Feature 1','zerif-lite'));						$zerif_aboutus_feature1_text = get_theme_mod('zerif_aboutus_feature1_text');						$zerif_aboutus_feature1_text = get_theme_mod('zerif_aboutus_feature1_text');						if( !empty($zerif_aboutus_feature1_title) ):							echo '<h6>'.__($zerif_aboutus_feature1_title,'zerif-lite').'</h6>';						endif;						if( !empty($zerif_aboutus_feature1_text) ):							echo '<p>'.__($zerif_aboutus_feature1_text,'zerif-lite').'</p>';						endif;					?>				</li>				<!-- SKILL TWO -->				<li class="skill">					<?php						$zerif_aboutus_feature2_nr = get_theme_mod('zerif_aboutus_feature2_nr','70');						if( !empty($zerif_aboutus_feature2_nr) ):							echo '<div class="skill-count">';								echo '<input type="text" value="'.$zerif_aboutus_feature2_nr.'" data-thickness=".2" class="skill2">';							echo '</div>';						endif;						$zerif_aboutus_feature2_title = get_theme_mod('zerif_aboutus_feature2_title',__('Feature 2','zerif-lite'));						$zerif_aboutus_feature2_text = get_theme_mod('zerif_aboutus_feature2_text');						if( !empty($zerif_aboutus_feature2_title) ):							echo '<h6>'.__($zerif_aboutus_feature2_title,'zerif-lite').'</h6>';						endif;						if( !empty($zerif_aboutus_feature2_text) ):							echo '<p>'.__($zerif_aboutus_feature2_text,'zerif-lite').'</p>';						endif;					?>				</li>				<!-- SKILL THREE -->				<li class="skill">					<?php						$zerif_aboutus_feature3_nr = get_theme_mod('zerif_aboutus_feature3_nr','100');						if( !empty($zerif_aboutus_feature3_nr) ):							echo '<div class="skill-count">';								echo '<input type="text" value="'.$zerif_aboutus_feature3_nr.'" data-thickness=".2" class="skill3">';							echo '</div>';						endif;						$zerif_aboutus_feature3_title = get_theme_mod('zerif_aboutus_feature3_title',__('Feature 3','zerif-lite'));						$zerif_aboutus_feature3_text = get_theme_mod('zerif_aboutus_feature3_text');						if( !empty($zerif_aboutus_feature3_title) ):							echo '<h6>'.__($zerif_aboutus_feature3_title,'zerif-lite').'</h6>';						endif;						if( !empty($zerif_aboutus_feature3_text) ):							echo '<p>'.__($zerif_aboutus_feature3_text,'zerif-lite').'</p>';						endif;					?>				</li>				<!-- SKILL FOUR -->				<li class="skill">					<?php						$zerif_aboutus_feature4_nr = get_theme_mod('zerif_aboutus_feature4_nr','10');						if( !empty($zerif_aboutus_feature4_nr) ):							echo '<div class="skill-count">';								echo '<input type="text" value="'.$zerif_aboutus_feature4_nr.'" data-thickness=".2" class="skill4">';							echo '</div>';						endif;						$zerif_aboutus_feature4_title = get_theme_mod('zerif_aboutus_feature4_title',__('Feature 4','zerif-lite'));						$zerif_aboutus_feature4_text = get_theme_mod('zerif_aboutus_feature4_text');						if( !empty($zerif_aboutus_feature4_title) ):							echo '<h6>'.__($zerif_aboutus_feature4_title,'zerif-lite').'</h6>';						endif;						if( !empty($zerif_aboutus_feature4_text) ):							echo '<p>'.__($zerif_aboutus_feature4_text,'zerif-lite').'</p>';						endif;					?>				</li>			</ul>		</div> <!-- / END SKILLS COLUMN-->	</div> <!-- / END 3 COLUMNS OF ABOUT US-->	<!-- CLIENTS -->	<?php		if(is_active_sidebar( 'sidebar-aboutus' )):			echo '<div class="our-clients">';				//echo '<h5><span class="section-footer-title">'.__('OUR HAPPY CLIENTS','zerif-lite').'</span></h5>';			echo '</div>';			echo '<div class="client-list">';				echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';				dynamic_sidebar( 'sidebar-aboutus' );				echo '</div>';			echo '</div> ';		endif;	?></div> <!-- / END CONTAINER --></section> <!-- END ABOUT US SECTION --><!-- Custom Green Section --><section class="separator-one">		<div class="color-overlay">			<div class="container">		<!-- SECTION HEADER -->		<div class="section-header row">			<!-- SECTION TITLE -->			<h2 class="white-text">The 4 F's</h2>			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->		</div><!-- / END SECTION HEADER -->				<div class="row">						<p style="color:#FFFFFF; font-size: 1.3em">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					</div>		<!-- 3 COLUMNS OF ABOUT US-->		<div class="row" style="display:none;">			<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->					<!-- COLUMN 1 - SKILSS-->		<div class="col-lg-4 col-md-4 column">			<ul class="skills" data-scrollreveal="enter right after 0s over 1s" style="-webkit-transform: translatex(60px);-moz-transform: translatex(60px);-ms-transform: translatex(60px);transform: translatex(60px);opacity: 0;" data-sr-init="true">				<!-- SKILL ONE -->				<li class="skill">									</li>				<!-- SKILL TWO -->				<li class="skill">									</li>				<!-- SKILL THREE -->				<li class="skill">									</li>				<!-- SKILL FOUR -->				<li class="skill">									</li>			</ul>		</div> <!-- / END SKILLS COLUMN-->	</div> <!-- / END 3 COLUMNS OF ABOUT US--><style>	.f-item a:link {    color: #FFFFFF;	}	.f-item a:visited {		color: #FFFFFF;	}	.f-item a:hover {		color: #FFB719;	}	.f-item a:active {		color: #FFFFFF;	}</style>		<!-- CLIENTS -->	<div class="our-clients"></div><div class="client-list"><div data-scrollreveal="enter right move 60px after 0.00s over 2.5s" data-sr-init="true" data-sr-complete="true">        <div class="col-lg-3 col-sm-3 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">			            <div class="service-icon">																	<i class="pixeden" style="background:url(http://wp.junemedia.com/wp-content/uploads/2015/05/food.png) no-repeat center;width:100%; height:100%;"></i> <!-- FOCUS ICON-->								            </div>			            <h5 style="color:#FFFFFF" class="red-border-bottom f-item"><a href="http://wp.junemedia.com/index.php/food-2/">Food</a></h5>            <!-- FOCUS HEADING -->			<p style="color:#FFFFFF; background-color:rgba(0, 0, 0, 0.5); padding:1em; font-size:1.1em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>	        </div>                <div class="col-lg-3 col-sm-3 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">			            <div class="service-icon">																	<i class="pixeden" style="background:url(http://wp.junemedia.com/wp-content/uploads/2015/05/fitness.png) no-repeat center;width:100%; height:100%;"></i> <!-- FOCUS ICON-->								            </div>			            <h5 style="color:#FFFFFF" class="red-border-bottom f-item"><a href="http://wp.junemedia.com/index.php/fitness-2/">Fitness</a></h5>            <!-- FOCUS HEADING -->			<p style="color:#FFFFFF; background-color:rgba(0, 0, 0, 0.5); padding:1em; font-size:1.1em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>	        </div>                <div class="col-lg-3 col-sm-3 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">			            <div class="service-icon">																	<i class="pixeden" style="background:url(http://wp.junemedia.com/wp-content/uploads/2015/05/family.png) no-repeat center;width:100%; height:100%;"></i> <!-- FOCUS ICON-->								            </div>			            <h5 style="color:#FFFFFF" class="red-border-bottom f-item"><a href="http://wp.junemedia.com/index.php/family-2/">Family</a></h5>            <!-- FOCUS HEADING -->			<p style="color:#FFFFFF; background-color:rgba(0, 0, 0, 0.5); padding:1em; font-size:1.1em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>	        </div>                <div class="col-lg-3 col-sm-3 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">			            <div class="service-icon">																	<i class="pixeden" style="background:url(http://wp.junemedia.com/wp-content/uploads/2015/05/fun.png) no-repeat center;width:100%; height:100%;"></i> <!-- FOCUS ICON-->								            </div>			            <h5 style="color:#FFFFFF" class="red-border-bottom f-item"><a href="http://wp.junemedia.com/index.php/fun-2/">Fun</a></h5>            <!-- FOCUS HEADING -->			<p style="color:#FFFFFF; background-color:rgba(0, 0, 0, 0.5); padding:1em; font-size:1.1em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>	        </div>        </div></div> </div>		</div></section>