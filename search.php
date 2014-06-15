 <?php get_header(); ?>

<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

				<?php
					
					while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile;
					
					echo'<h1 align="center">';the_title();echo"</h1>";
				echo'<h4 align="center">';the_content();echo'</h4>';
				echo'<br/><br/>';

				else :
					echo'<h3 align="center">Not Found.</h3>';
					get_template_part( 'content', 'none' );

				endif;
			?>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();