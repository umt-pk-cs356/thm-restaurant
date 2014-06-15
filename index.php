<?php get_header(); ?>
<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				
				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;
				
				twentyfourteen_paging_nav();

			else :

				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
	       <!--start-image-slider---->
			    <div class="slider">					     
					<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">									           
						<div data-src="<?php bloginfo('template_directory'); ?>/images/slider1.jpg">  </div> 
						<div data-src="<?php bloginfo('template_directory'); ?>/images/slider2.jpg">  </div>
						<div data-src="<?php bloginfo('template_directory'); ?>/images/slider3.jpg">  </div>
						<div data-src="<?php bloginfo('template_directory'); ?>/images/slider4.jpg">  </div>
					</div>
					<div class="clear"> </div>					       
			</div><br/><br/><br/>
         <!--End-image-slider---->
		 <!---start-content---->
		 <div class="content">
		 	<div class="top-grids">
		 		<div class="wrap">
			 		<div class="top-grid">
			 			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icon1.png" title="icon-name"></a>
			 			<h3>Success Story</h3>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
			 			<a class="button" href="about.html">Read More</a>
			 		</div>
			 		<div class="top-grid">
			 			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icon2.png" title="icon-name"></a>
			 			<h3>Our Services</h3>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
			 			<a class="button" href="services.html">Read More</a>
			 		</div>
			 		<div class="top-grid last-topgrid">
			 			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icon3.png" title="icon-name"></a>
			 			<h3>Location</h3>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
			 			<a class="button" href="contact.html">Read More</a>
			 		</div>
			 		<div class="clear"> </div>
		 		</div>
		 	</div>
		 	<div class="mid-grid">
		 		<div class="wrap">
			 		<h1>Welcome to our site!</h1>
			 		<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
			 		<p>" consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat "</p>
			 		<a class="button1" href="#">Read More</a>
		 		</div>
		 	</div>
		 	<div class="bottom-grids">
							<div class="wrap">
								<div class="bottom-grid1">
									<h3>POPULAR INFO</h3>
									<span>consectetur adipisicing elit, sed do eiusmod tempor</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li><a href="#">Consectetur adipisicing elit</a></li>
										<li><a href="#">Sed do eiusmod tempor incididunt</a></li>
										<li><a href="#">Labore et dolore magna aliqua.</a></li>
										<li><a href="#">Sed do eiusmod tempor</a></li>
										<li><a href="#">Abore et dolore magna</a></li>
										<li><a href="#">Incididunt ut labore et dolore</a></li>
										<li><a href="#">Dolore magna aliqua</a></li>
										<li><a href="#">Adipisicing elit, sed do eiusmod</a></li>
									</ul>
									<a class="button" href="contact.html">Read More</a>
								</div>
								<div class="bottom-grid2 bottom-mid">
									<h3>Today Special</h3>
									<span>consectetur adipisicing elit, sed do eiusmod tempor</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<div class="gallery">
										<ul>
												<li><a href="<?php bloginfo('template_directory'); ?>/images/slider1.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/slider1.jpg" alt=""></a></li>
												<li><a href="<?php bloginfo('template_directory'); ?>/images/slider2.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/slider2.jpg" alt=""></a></li>
												<li><a href="<?php bloginfo('template_directory'); ?>/images/slider3.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/slider3.jpg" alt=""></a></li>
												<li><a href="<?php bloginfo('template_directory'); ?>/images/slider4.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/slider4.jpg" alt=""></a></li>
												<li><a href="<?php bloginfo('template_directory'); ?>/images/slider1.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/slider1.jpg" alt=""></a></li>
												<li><a href="<?php bloginfo('template_directory'); ?>/images/slider2.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/slider2.jpg" alt=""></a></li>											
											<div class="clear"> </div>
										</ul>										
								 </div>
								 <a class="button" href="gallery.html">Read More</a>
							</div>
							<div class="bottom-grid1 bottom-last">
									<h3>Latest INFO</h3>
									<span>consectetur adipisicing elit, sed do eiusmod tempor</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a class="button" href="#">Read More</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="clear"> </div>
	<!--end-wrap--->
	 </div>
		 </div>
		 <!---End-content---->
<?php 
get_footer();
