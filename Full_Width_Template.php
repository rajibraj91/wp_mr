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
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php 
				$c = 0;
				foreach($option['sliders'] as $slider ):
				?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $c; ?>" class="<?php echo ($c == 0) ? 'active': ' ' ; ?>"></li>
			<?php $c++; endforeach; ?>
		</ol>

		<!-- Wrapper for slides -->
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
										<li><a href="<?php echo $slider['facebook_link']?>"><i class="fa fa-facebook"></i></a></li>
										<li><a href="<?php echo $slider['twitter_link'] ?>"><i class="fa fa-twitter"></i></a></li>
										<li><a href="<?php echo $slider['linkedin_link'] ?>"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="<?php echo $slider['instagram_link'] ?>"><i class="fa fa-instagram"></i></a></li>
										<li><a href="<?php echo $slider['pinterest_link'] ?>"><i class="fa fa-pinterest"></i></a></li>
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




	<!-- ==========================  Blog Section Start ================== -->
	<section id="blog" class="blog-section section">
        <div class="section-header">
            <h2>blog posts </h2>
            <p>Professionally harness next-generation internal</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="blog row">
					<?php if(have_posts()): while(have_posts()): the_post();?>
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
					<?php endwhile; endif; ?>				
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================  Blog Section End ================== -->













<?php get_footer(); ?>