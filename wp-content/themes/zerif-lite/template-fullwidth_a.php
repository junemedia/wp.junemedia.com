<?php

/*
Template Name: Full Width Page with no header image
*/



get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->




	<div id="content" class="site-content" style="background-image: url(http://wp.junemedia.com/wp-content/uploads/2015/05/homepage_image_c.jpg); background: rgba(50, 158, 217, 0.8);">


<div class="container">



<div class="content-left-wrap col-md-12">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', 'page' ); ?>



				<?php

					// If comments are open or we have at least one comment, load up the comment template

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;

				?>



			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- .content-left-wrap -->




</div><!-- .container -->

<?php get_footer(); ?>