<?php

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails');


function eventoz_scripts() {
    // css link here
	wp_enqueue_style( 'style', get_stylesheet_uri(), array());
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array());
    wp_enqueue_style('swiper_css', get_template_directory_uri().'/assets/css/swiper.min.css', array());
    wp_enqueue_style('fontawesome_css', get_template_directory_uri().'/assets/css/font-awesome.min.css', array());
    wp_enqueue_style('main_css', get_template_directory_uri().'/assets/css/style.css', array());
    wp_enqueue_style('responsive_css', get_template_directory_uri().'/assets/css/responsive.css', array());

    // js link here
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('swiper_js', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), false, true);
    wp_enqueue_script('counterup_js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), false, true);
    wp_enqueue_script('easing_js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), false, true);
    wp_enqueue_script('waypoints_js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), false, true);
    wp_enqueue_script('isotope_js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script('masonry_js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script('easingmin_js', get_template_directory_uri() . '/assets/js/easing-min.js', array('jquery'), false, true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);

	
}
add_action( 'wp_enqueue_scripts', 'eventoz_scripts' );



function mr_theme_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'mr' ),
    ) );
}
add_action( 'after_setup_theme', 'mr_theme_register_nav_menu' );

//extra widget side remove==========================
function mr_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'mr_support' );


// register_widget register
function mr_register_widget(){
    register_sidebar(array(
        'name' => 'Register widget sidebar area',
        'id' => 'right_sidebar',
        'before_widget' => '<div class="blog-widget blog-widget-post">',
        'after_widget' => ' </div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init','mr_register_widget');



//====category part start here================
class Category_widget extends WP_Widget{
    function __construct(){
        parent::__construct(
            'category_widget',
            __('Category Widget', 'mr'),
            array('description' => __('this is our category widget', 'mr'))
        );
    }
   
    public function form($instance){
        $title = $instance['title'];
    ?>
        <p>
           <label for="<?php echo $this->get_field_id('title');?>"><?php esc_html_e('Catagory Title', 'mr');?></label>
           <input type="text" class="widefat" 
           name="<?php echo $this->get_field_name('title');?>" 
           id="<?php echo $this->get_field_id('title');?>"
            value="<?php echo esc_attr($title);?>">
        </p>
        <?php
    }

    public function widget($args, $instance){
        $title = $instance['title'];
        ?>
            <div class="blog-widget blog-categorie">
                <h4><?php echo $title;?></h4>
                <ul>
                    <?php
                       $cats = get_categories();
                       foreach($cats as $cat):
                    ?>
                    <li>
                      <a href="<?php the_permalink();?>"><?php echo esc_html($cat->name);?></a>
                      <span><?php echo esc_html($cat->count); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php
    }
    public function update( $new_instance, $old_instance ) {
        $instance['title'] = $new_instance['title'];
      
        return $instance;
    }
}


// recent post
class Recent_Post extends WP_Widget {
	function __construct(){
		parent::__construct(
			'recent_post',
			__('Recent Post','mr'),
			array('description' => __('This is the custom widget for displaying recent post in sidebar area.','mr'))
		);
	}
	
	public function form($instance){
			$title = $instance['title'];
			$limit = $instance['limit'];
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title');?>">Title:</label>
			<input id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" class="widefat" type="text" value="<?php echo $title;?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('limit');?>">Post Limit:</label>
			<input id="<?php echo $this->get_field_id('limit');?>" name="<?php echo $this->get_field_name('limit');?>" class="widefat" type="number" value="<?php echo $limit;?>">
		</p>
		
		
		<?php
	}
	
	public function widget($args, $instance){
		$title = $instance['title'];
		$limit = $instance['limit'];
	?>
		<div class="blog-widget blog-widget-post">
            <h4><?php echo $title;?></h4>
            <ul>
                <?php 
                $recent_post = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $limit
                ));
                if($recent_post->have_posts()): while($recent_post->have_posts()): $recent_post->the_post();?>
                <li>
                    <div class="blog-thumb">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    </div>
                    <div class="blog-text">
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h5>
                        <p><i class="fa fa-clock-o"></i><?php the_time('F j, Y');?></p>
                    </div>
                </li>
                <?php endwhile; endif; ?>
            </ul>
		</div>
	<?php
	}
	
	public function update($new_instance, $old_instance){
		$instance['title'] = $new_instance['title'];
		$instance['limit'] = $new_instance['limit'];
		return $instance; 
	}
}


// Add Banner
class Add_Banner extends WP_Widget {
	function __construct(){
		parent::__construct(
			'Add_Banner',
			__('Add Banner','mr'),
			array('description' => __('This is the Add banner widget for displaying recent post in sidebar area.','mr'))
		);
	}
	
	public function form($instance){
			$title = $instance['title'];
			$img = $instance['img'];
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title');?>">Title:</label>
			<input id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" class="widefat" type="text" value="<?php echo $title;?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('img');?>">Add Images:</label>
			<input id="<?php echo $this->get_field_id('img');?>" name="<?php echo $this->get_field_name('img');?>" class="widefat" type="file" value="<?php echo $img;?>">
		</p>
		
		
		<?php
	}
	
	public function widget($args, $instance){
		$title = $instance['title'];
		$img = $instance['img'];
	?>
		<div class="blog-widget">
            <h4><?php echo $title;?></h4>
            <div class="blog-banner">
                <a href="#"><img src="<?php echo $img ?>" alt="add banner"></a>
            </div>
		</div>
	<?php
	}
	
	public function update($new_instance, $old_instance){
		$instance['title'] = $new_instance['title'];
		$instance['img'] = $new_instance['img'];
		return $instance; 
	}
}


// search
function Search_Widget( $form ) {
    ob_start(); ?>
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <label>
                <span class="screen-reader-text">Search For</span>
                <input type="search" class="search-field" placeholder="Search..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
            </label>
            <?php
                $swp_cat_dropdown_args = array(
                    'show_option_all'  => __( 'Any Category' ),
                    'name'             => 'swp_category_limiter',
                );
                wp_dropdown_categories( $swp_cat_dropdown_args );
            ?>
            <input type="submit" class="search-submit" value="Search" />
        </form>
    <?php return ob_get_clean();
}
 
add_filter( 'get_search_form', 'Search_Widget' );

function register_widgets(){
	register_widget('Category_widget');
	register_widget('Recent_Post');
	register_widget('Add_Banner');
}
add_action('widgets_init','register_widgets');