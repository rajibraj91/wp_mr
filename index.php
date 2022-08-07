<?php get_header(); ?>
	<!-- ==========================  Breadcrumb Section Start ================== -->
	<section class="breadcrumb-section">
		<div class="breadcrumb">
			<div class="breadcrumb-overlay">
				<h2>blog page</h2>
				<ul>
					<li><a href="#">Home</a><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>
					<li><a href="#">blog page</a></li>
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
                        <?php 
                            if(have_posts()) {
                                while(have_posts()) {
                                    the_post();
                                    ?>
                                        <div class="blog-list">
                                            <div class="blog-thumb">
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
                                    <?php
                                }
                            }
                        ?>
						<div class="blog-pagination">
							<div class="pagination-list">
								<div class="pagination">
									<?php the_posts_pagination( '' );?>
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