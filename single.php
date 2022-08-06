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
									<h3>03 comments</h3>
									<ul>
										<li>
											<div class="reviews-list">
												<div class="reviews-thumb">
													<img src="assets/images/blog/comment1.png" alt="blog-image">
												</div>
												<div class="reviews-content">
													<div class="reviews-title">
														<h4><a href="#">Tom harry</a></h4>
														<h6> - 03days ago Ago 10:30pm</h6>
														<a href="#"><i class="fa fa-reply"
																aria-hidden="true"></i><span>reply</span></a>
													</div>
													<p>
														Monotonectal initiate focused synergy without best-of-breed
														action items. Interactive target strategic
														expertise via cutting-edge markets.
													</p>
												</div>
											</div>
										</li>
										<li class="reviews-list-comment">
											<div class="reviews-list">
												<div class="reviews-thumb">
													<img src="assets/images/blog/comment2.png" alt="blog-image">
												</div>
												<div class="reviews-content">
													<div class="reviews-title">
														<h4><a href="#">alissa</a></h4>
														<h6> - 02days Ago at 10:30pm</h6>
														<a href="#"><i class="fa fa-reply"
																aria-hidden="true"></i><span>reply</span></a>
													</div>
													<p>
														Monotonectal initiate focused synergy without best-of-breed
														action items. Interactive target strategic
														expertise via cutting-edge markets.
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="reviews-list">
												<div class="reviews-thumb">
													<img src="assets/images/blog/comment3.png" alt="blog-image">
												</div>
												<div class="reviews-content">
													<div class="reviews-title">
														<h4><a href="#">jogn harry</a></h4>
														<h6> - 02days Ago at 10:30pm</h6>
														<a href="#"><i class="fa fa-reply"
																aria-hidden="true"></i><span>reply</span></a>
													</div>
													<p>
														Monotonectal initiate focused synergy without best-of-breed
														action items. Interactive target strategic
														expertise via cutting-edge markets.

													</p>
												</div>
											</div>
										</li>
									</ul>
									<?php 
										if ( comments_open() || get_comments_number() ) {
											comments_template();
										}
									?>
								</div>
								<div class=" blog-add-review">
									<h3>leave a replay</h3>
									<div class="contact-form">
										<form action="" method="post">
											<div class="row">
												<div class="col-md-4">
													<input type="email" name="fname" placeholder="Email">
												</div>
												<div class="col-md-4">
													<input type="text" name="name" placeholder="Name">
												</div>
												<div class="col-md-4">
													<input type="text" name="website" placeholder="Website">
												</div>
											</div>
											<textarea>Type here Message</textarea>
											<input type="submit" name="submit" placeholder="Send Message">
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-sm-12 col-md-4">
						<div class="widget-section">
							<div class="widget-search">
								<input type="search" name="search" placeholder="Search">
								<i class="fa fa-search"></i>
							</div>
							<div class="blog-widget blog-categorie">
								<h4>category</h4>
								<ul>
									<li>
										<a href="#">Art</a>
										<span>(05)</span>
									</li>
									<li>
										<a href="#">Music</a>
										<span>(05)</span>
									</li>
									<li>
										<a href="#">Photography</a>
										<span>(10)</span>
									</li>
									<li>
										<a href="#">Fashion</a>
										<span>(05)</span>
									</li>
									<li>
										<a href="#">Design</a>
										<span>(07)</span>
									</li>
								</ul>
							</div>
							<div class="blog-widget blog-widget-post">
								<h4>popular posts</h4>
								<ul>
									<li>
										<div class="blog-thumb">
											<img src="assets/images/blog/mini1.png" alt="blog-mini">
										</div>
										<div class="blog-text">
											<h5><a href="#">Uniquely envisioneer end-to-end web services</a> </h5>
											<p><i class="fa fa-clock-o"></i>24 May 2017</p>
										</div>
									</li>
									<li>
										<div class="blog-thumb">
											<img src="assets/images/blog/mini2.png" alt="blog-mini">
										</div>
										<div class="blog-text">
											<h5><a href="#">Uniquely envisioneer end-to-end web services</a> </h5>
											<p><i class="fa fa-clock-o"></i>17 May 2017</p>
										</div>
									</li>
									<li>
										<div class="blog-thumb">
											<img src="assets/images/blog/mini3.png" alt="blog-mini">
										</div>
										<div class="blog-text">
											<h5><a href="#">Uniquely envisioneer end-to-end web services</a> </h5>
											<p><i class="fa fa-clock-o"></i>17 May 2017</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="blog-widget">
								<h4>advertisement</h4>
								<div class="blog-banner">
									<a href="#"><img src="assets/images/blog/banner.png" alt="advertisement"></a>
								</div>
							</div>
							<div class="blog-widget blog-widget-tags">
								<h4>tags</h4>
								<ul>
									<li><a href="#">business</a></li>
									<li><a href="#">art</a></li>
									<li><a href="#">ux</a></li>
									<li><a href="#">design</a></li>
									<li><a href="#">fashion</a></li>
									<li><a href="#">event</a></li>
									<li><a href="#">sport</a></li>
									<li><a href="#">meeting</a></li>
									<li><a href="#">ui</a></li>
									<li><a href="#">seminer</a></li>
									<li><a href="#">speakers</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==========================  Blog Section End ================== -->

	<!-- ==========================  Footer Section Start ================== -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<p>&copy; 2017.All rights <a href="#">CodexCoder</a></p>
				<div class="social social3">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div id="back-to-top" class="scroll-top back-to-top">
					<i class="fa fa-angle-up"></i>
				</div>
			</div>
		</div>
	</footer>


<?php get_footer(); ?>