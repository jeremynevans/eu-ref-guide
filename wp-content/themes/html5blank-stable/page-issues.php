<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		The Issues!

		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>


		<div class="layer">
			<nav class="navbar navbar-default slide-tab" role="navigation">
				<div class="container-fluid scroll invisibar">
					<ul class="nav navbar-nav breakscroll">
						<li class="active"><a href="#">The EU and Me</a></li>
						<li><a href="#">The EU and Money</a></li>
						<li><a href="#">The EU and Nature</a></li>
						<li><a href="#">The EU and Power</a></li>
						<li><a href="#">The EU and Migration</a></li>
						<li><a href="#">The EU and The World</a></li>
					</ul>
				</div>
			</nav>
			<div class="hotspot">
				<div class="half slide" data="left">
					<button class="click"></button>
				</div>
				<div class="half slide" data="right">
					<button class="click"></button>
				</div>
			</div>
			<div class="dash scroll invisibar">
				<div class="panes breakscroll">
					<!-- <div class="content">
						<div class='col-md-10 col-md-offset-1 ratio-2:1 inner'> -->
							<?php //get_template_part('loop'); ?>
						<!-- </div>
					</div> -->
					<?php
					for ($x = 0; $x < 6; $x++) {

						$myCats = array(5,3,6,7,8,9);
					?>

						<div class="content">
							<div class='col-md-10 col-md-offset-1 ratio-2:1 inner'>

								<?php
								// The Query
								query_posts( array( 'category__and' => array( $myCats[$x], 4 ) ) );

								// The Loop
								while ( have_posts() ) : the_post();
									the_content();
								endwhile;

								// Reset Query
								wp_reset_query();
							?>

							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

								<?php
								// The Query
								$query = $myCats[$x] . ',-4';
								query_posts( array( 'cat' => $query ) );
								// The Loop
								while ( have_posts() ) : the_post();
								?>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<?php the_title(); ?>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<?php the_content(); ?>
										</div>
									</div>
								</div>

								<?php
								endwhile;
								// Reset Query
								wp_reset_query();
								?>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- <div class="content">
					<div class='col-md-10 col-md-offset-1 ratio-2:1 inner'>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					</div>
				</div>
				<div class="content">
					<div class='col-md-10 col-md-offset-1 ratio-2:1 inner'>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					</div>
				</div>
				<div class="content">
					<div class='col-md-10 col-md-offset-1 ratio-2:1 inner'>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					</div>
				</div>
				<div class="content">
					<div class='col-md-10 col-md-offset-1 ratio-2:1 inner'>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					</div>
				</div>  -->
			</div>
		</div>
	</div>



	<!-- <?php get_template_part('pagination'); ?> -->

</section>
<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
