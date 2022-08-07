<?php get_header(); ?>
	<!-- ==========================  Breadcrumb Section Start ================== -->
	<section class="breadcrumb-section">
		<div class="breadcrumb">
			<div class="breadcrumb-overlay">
				<h2>blog single</h2>
				<ul>
					<li><a href="#">Home</a><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>
					<li><a href="#">blog single page</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- ==========================  Breadcrumb Section End ================== -->

	<!-- ==========================  Blog Section Start ================== -->
	<section class="blog-section section">
		<div class="container">
			<div class="row">
				<div class="blog row">
					<div class="col-sm-12 col-md-8">
						<div class="blog-list blog-list2">
							<div class="blog-thumb">
                                <?php the_post_thumbnail(); ?>
							</div>
							<div class="blog-text blog-text1">
                                <ul>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><span><?php the_time('F j, Y');?></span></li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i><span><a href="#"><?php the_author();?></a></span>
                                    </li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i><span><?php comments_popup_link('0 Comment', '1 Comment', '%');?></span></li>
                                </ul>
								<h4><?php the_title(); ?></h4>
                                <?php the_content(); ?>
                                
								<div class="social social4">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="reviews">
								<div class="blog-reviews">
									<?php 
										if ( comments_open() || get_comments_number() ) {
											comments_template();
										}
									?>
								</div>
							</div>
						</div>

					</div>
					<div class="col-sm-12 col-md-4">
						<div class="widget-section">
							<?php dynamic_sidebar('right_sidebar');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==========================  Blog Section End ================== -->



<?php get_footer(); ?>