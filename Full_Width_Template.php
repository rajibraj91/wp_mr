<?php
/*
Template Name: Home
*/
get_header();
?>

<?php
	$option = get_option('my_framework');
?>

<!-- ==========================  Banner Section Start ================== -->
<section class="banner-section">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php 
				$c = 0;
				foreach($option['sliders'] as $slider ):
				?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $c; ?>" class="<?php echo ($c == 0) ? 'active': ' ' ; ?>"></li>
			<?php $c++; endforeach; ?>
		</ol>

		<div class="carousel-inner" role="listbox">
			<?php 
				$s = 1;
				foreach($option['sliders'] as $slider):
			?>    
			<div class="item <?php echo ($s == 1) ? 'active': '' ; ?>">
				<div class="banner"  style="background-image: url(<?php echo $slider['banner_background_image']['url'];?>)" >
					<div class="header-text">
						<div class="container">
							<div class="row">
								<p><?php echo $slider['banner_sub_title']; ?></p>
								<h1><?php echo $slider['banner_title']; ?></h1>
								<div class="social">
									<ul>
										<?php  foreach($option['social_lists'] as $social_list): ?>  
											<li><a href="<?php echo $social_list['site_link']?>"><i class="<?php echo $social_list['icon_name']?>"></i></a></li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $s++; endforeach; ?>
		</div>
	</div>
</section>
<!-- ==========================  Banner Section End ================== -->


<!-- ==========================  About Section Start ================== -->

<section id="about" class="about-section section">
	<div class="section-header">
		<h2><?php echo $option['about_title']; ?></h2>
		<p><?php echo $option['about_sub_title']; ?></p>
	</div>
	<div class="container">
		<div class="row">
			<div class="about row">
				<div class="col-md-4">
					<div class="about-thumb">
						<img src="<?php echo esc_url($option['about_img']['url']);?>" alt="rajib">
					</div>
				</div>
				<div class="col-md-4">
					<div class="about-text">
						<P><?php echo $option['about_desc']; ?></P>
						<ul>
							<?php 
								foreach($option['details_lists'] as $details_list ):
							?>
							<li><strong><?php echo $details_list['about_left']?><span>:</span></strong>
								<p><?php echo $details_list['about_right']?></p>
							</li>
							<?php endforeach; ?>
						</ul>
						<a class="link-button" href="#">download resume</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hobbies">
						<p><?php echo $option['hoby_titles']; ?></p>
						<ul>
							<?php 
								foreach($option['hoby_lists'] as $hoby_list ):
							?>
							<li>
								<div class="hobbies-thumb">
									<img src="<?php echo esc_url($hoby_list['hoby_img']['url']);?>" alt="travel">
								</div>
								<div class="hobbies-text">
									<p><?php echo $hoby_list['hoby_title'];?></p>
								</div>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==========================  About Section End ================== -->



<!-- ==========================  Counter Section Start ================== -->
<section class="counter-section ">
	<div class="counter-overlay section">
		<div class="container">
			<div class="row">
				<div class="counter-group row">
					<?php foreach($option['counter_lists'] as $counter_list) : ?>
						<div class="col-md-3 col-sm-6">
							<div class="counter-list">
								<div class="counter-thumb">
									<i class="<?php echo $counter_list['counter_icon']; ?>"></i>
								</div>
								<div class="counter-time">
									<h3 class="counter"><?php echo $counter_list['counter_count']; ?></h3>
								</div>
								<div class="counter-text">
									<p><?php echo $counter_list['counter_text']; ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==========================  Counter Section End ================== -->


<!-- ==========================  Service Section Start ================== -->
<section id="service" class="service-section second-section">
	<div class="section-header">
		<h2>my service</h2>
		<p>Professionally harness next-generation internal</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="service row">
				<?php 
					$service = array(
						'post_type' => 'services',
						'posts_per_page' => 6
					);
					$query = new WP_Query($service);
					while($query -> have_posts()) {
					$query -> the_post();
				?>
					<div class="col-md-4 col-sm-6">
						<div class="service-list">
							<div class="service-thumb">
								<?php echo the_post_thumbnail(); ?>
							</div>
							<h4><?php echo the_title(); ?></h4>
							<?php echo the_content(); ?>
						</div>
					</div>
				<?php
					}
					wp_reset_postdata();
				?>	
			</div>
		</div>
	</div>
</section>
<!-- ==========================  Service Section End ================== -->


<!-- ==========================  Testimonial Section Start ================== -->
<section id="testimonial" class="testimonial-section second-section">
	<div class="section-header">
		<h2>my testimonial</h2>
		<p>Professionally harness next-generation internal</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="testimonial">
				<div class="swiper-container testimonial-wrapper">
					<div class="swiper-wrapper">
						<?php 
							$testi = array(
								'post_type' => 'testimonials',
								'posts_per_page' => -1
							);
							$query = new WP_Query($testi);
							while($query -> have_posts()) {
							$query -> the_post();
							$degi = get_post_meta(get_the_id(), 'degi', true);
						?>
							<div class="swiper-slide">
								<div class="testimonial-list">
									<div class="testimonial-thumb">
										<?php echo the_post_thumbnail(); ?>
									</div>
									<div class="testimonial-text">
										<?php echo the_content(); ?>
										<h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
										<h6><?php echo $degi; ?></h6>
									</div>
								</div>
							</div>
						<?php
							}
							wp_reset_postdata();
						?>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==========================  Testimonial Section End ================== -->



<!-- ==========================  Blog Section Start ================== -->
<section id="blog" class="blog-section section">
	<div class="section-header">
		<h2>blog posts </h2>
		<p>Professionally harness next-generation internal</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="blog row">
				<?php 
					$post = array(
						'post_type' => 'post',
						'posts_per_page' => 3
					);
					$query = new WP_Query($post);
					while($query -> have_posts()) {
						$query -> the_post();
				?>
					<div class="col-sm-6 col-md-4">
						<div class="blog-list">
							<div class="blog-thumb">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="blog-text">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i><span><?php the_time('F j, Y');?></span></li>
									<li><i class="fa fa-user" aria-hidden="true"></i><span><a href="#"><?php the_author();?></a></span>
									</li>
									<li><i class="fa fa-comment" aria-hidden="true"></i><span><?php comments_popup_link('0 Comment', '1 Comment', '%');?></span></li>
								</ul>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<?php the_excerpt(); ?>
								<a class="button-link" href="<?php the_permalink(); ?>"><?php echo esc_attr__('read more', 'mr')?></a>
							</div>
						</div>
					</div>
				<?php
						
					}
					wp_reset_postdata();
				?>			
			</div>
		</div>
	</div>
</section>
<!-- ==========================  Blog Section End ================== -->


<!-- ==========================  Process Section Start ================== -->
<section id="workingprocess" class="process-section section">
	<div class="section-header">
		<h2>my working process</h2>
		<p>Efficiently develop optimal growth strategies through economically sound.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="process">
				<ul>
					<?php foreach($option['working_lists'] as $working_list) : ?>
					<li>
						<div class="process-list">
							<div class="process-thumb">
								<img src="<?php echo esc_url($working_list['working_img']['url']); ?>" alt="rajibraj">
							</div>
							<div class="process-text">
								<h5><?php echo $working_list['working_text']; ?></h5>
							</div>
						</div>
						<div class="process-direction">
							<span>
								<i class="<?php echo $working_list['working_icon']; ?>"></i>
							</span>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ==========================  Process Section End ================== -->


<!-- ==========================  Contact Section End ================== -->
<section id="contactus" class="contact-section section">
	<div class="section-header">
		<h2>contact</h2>
		<p>Efficiently develop optimal growth strategies through economically sound.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="contact row">
				<div class="col-sm-12 col-md-8">
					<div class="contact-form">
						<h3>get in touch</h3>
						<?php echo do_shortcode('[contact-form-7 id="74" title="Untitled]'); ?>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="contact-info">
						<h3>Contact info</h3>
						<ul>
							<?php foreach($option['info_lists'] as $info_list) : ?>
								<li>
									<div class="contact-thumb">
										<i class="<?php echo $info_list['info_icon']; ?>"></i>
									</div>
									<div class="contact-text">
										<P><?php echo $info_list['info_text']; ?></P>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
						<div class="social social2">
							<ul>
								<?php foreach($option['con_social_lists'] as $con_social_list) : ?>
									<li><a href="<?php echo $con_social_list['site_link']; ?>"><i class="<?php echo $con_social_list['social_icon']; ?>"></i></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==========================  Contact Section End ================== -->


<!-- ==========================  Map Section Start ================== -->
<section class="map-section">
	<div id="home-map">

	</div>
</section>
<!-- ==========================  Map Section End ================== -->













<?php get_footer(); ?>