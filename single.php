<?php 
get_header(); ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				while ( have_posts() ) : the_post();
				echo'<h1 align="center">';the_title();echo"</h1>";
				echo'<h4 align="center">';the_content();echo'</h4>';
				echo'<br/><br/>';
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
