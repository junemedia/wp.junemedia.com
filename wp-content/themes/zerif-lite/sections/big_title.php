<style>#intro_text{	color: #FFFFFF;	font-size:2.3em;	line-height: 1.3em;}#intro_text_sub_a{	color: #FFFFFF;	font-size:1.9em;}.orange_txt{	font-size:1em;	line-height: 1.3em;	color:#ffb719;}</style><?php	echo '<div class="header-content-wrap">';		echo '<div class="container">';		$zerif_bigtitle_title = get_theme_mod('zerif_bigtitle_title',__('To add a title here please go to Customizer','zerif-lite'));		if( !empty($zerif_bigtitle_title) ):			//echo '<h1 class="intro-text">'.__($zerif_bigtitle_title,'zerif-lite').'</h1>';						echo '<h1 id="intro_text">At <span class="orange_txt">June Media</span>, we operate some of the world’s most popular Internet properties devoted to food, <br />fitness, family and fun.</h1>';						echo '<h1 id="intro_text">Our sites engage loyal audiences with content that is uplifting, smart, and approachable. <br />Content that inspires.</h1>';		endif;		$zerif_bigtitle_redbutton_label = get_theme_mod('zerif_bigtitle_redbutton_label',__('One button','zerif-lite'));		$zerif_bigtitle_redbutton_url = get_theme_mod('zerif_bigtitle_redbutton_url','#');		$zerif_bigtitle_greenbutton_label = get_theme_mod('zerif_bigtitle_greenbutton_label',__('Another button','zerif-lite'));		$zerif_bigtitle_greenbutton_url = get_theme_mod('zerif_bigtitle_greenbutton_url','#');		if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) ||		(!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):			echo '<div class="buttons">';				if ( !empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url) ):					echo '<a href="'.$zerif_bigtitle_redbutton_url.'" class="btn btn-primary custom-button red-btn">'.__($zerif_bigtitle_redbutton_label,'zerif-lite').'</a>';				endif;				if ( !empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url) ):					echo '<a href="'.$zerif_bigtitle_greenbutton_url.'" class="btn btn-primary custom-button green-btn">'.__($zerif_bigtitle_greenbutton_label,'zerif-lite').'</a>';				endif;			echo '</div>';		endif;		echo '</div>';	echo '</div><!-- .header-content-wrap -->';			echo '<div class="clear"></div>';?>