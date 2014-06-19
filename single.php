<?php 
get_header(); ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				while ( have_posts() ) : the_post();
				echo '<h5 align="center">Category: ';
				echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) );
				echo' <br/>';the_tags();
				echo '</h5>';
				echo'<h1 align="center">';the_title();echo"</h1>";
				echo'<h5 align="center">';twentyfourteen_posted_on();echo'</h5>';
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
