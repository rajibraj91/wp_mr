<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'MR Theme Option',
      'menu_slug'  => 'mr_theme_option',
    ) );

}



// Banner section
CSF::createSection( $prefix, array(
	'title'  => 'Banner Section',
	'fields' => array(
		array(
			'id'      => 'sliders',
			'type'    => 'group',
			'title'   =>'Banner Slider',
			'fields'  => array(
				array(
					'id'    => 'banner_background_image',
					'type'  => 'media',
					'title' => 'Banner Background Image',
					'default' => 'http://localhost/mr/wp-content/uploads/2022/08/banner-1.png',
				),
				array(
					'id'    => 'banner_sub_title',
					'type'  => 'text',
					'title' => 'Banner Sub Title',
					'default' => 'Hello, I am',
				),
				array(
					'id'    => 'banner_title',
					'type'  => 'text',
					'title' => 'Banner title',
					'default' => 'Rajib Raj',
				),
				array(
					'id'    => 'facebook_link',
					'type'  => 'text',
					'title' => 'Facebook Link',
					'default' => '#',
				),
				array(
					'id'    => 'twitter_link',
					'type'  => 'text',
					'title' => 'Twitter Link',
					'default' => '#',
				),
				array(
					'id'    => 'linkedin_link',
					'type'  => 'text',
					'title' => 'Linkedin Link',
					'default' => '#',
				),
				array(
					'id'    => 'instagram_link',
					'type'  => 'text',
					'title' => 'Instagram Link',
					'default' => '#',
				),
				array(
					'id'    => 'pinterest_link',
					'type'  => 'text',
					'title' => 'Pinterest Link',
					'default' => '#',
				),
			),
		),
	),
));


// About section
CSF::createSection( $prefix, array(
	'title'  => 'About Section',
	'fields' => array(
		array(
			'id'    => 'about_title',
			'type'  => 'text',
			'title' => 'About Title',
			'default' => 'ABOUT ME',
		),
		array(
			'id'    => 'about_sub_title',
			'type'  => 'text',
			'title' => 'About Title',
			'default' => 'Professionally harness next-generation internal',
		),
		array(
			'id'    => 'about_img',
			'type'  => 'media',
			'title' => 'About Thumbnails Image',
		),
		array(
			'id'    => 'about_desc',
			'type'  => 'textarea',
			'title' => 'About Descreption',
			'default' => 'Enthusiastically predominate viral paradigms via tactical customer service. Assertive transition resource leveling action items whereas enterprise.',
		),
		array(
			'id'    => 'details_lists',
			'type'  => 'group',
			'title' => 'Info List',
			'fields'  => array(
				array(
					'id'    => 'about_left',
					'type'  => 'text',
					'title' => 'About Left',
					'default' => 'Name',
				),
				array(
					'id'    => 'about_right',
					'type'  => 'text',
					'title' => 'About Right',
					'default' => 'Details',
				),
			),
		),
		array(
			'id'    => 'hoby_titles',
			'type'  => 'text',
			'title' => 'Hoby Title Here',
			'default' => 'HOBBIES & INTERESTS',
		),
		array(
			'id'    => 'hoby_lists',
			'type'  => 'group',
			'title' => 'Hoby List',
			'fields'  => array(
				array(
					'id'    => 'hoby_title',
					'type'  => 'text',
					'title' => 'Hoby Title',
					'default' => 'Hoby Name',
				),
				array(
					'id'    => 'hoby_img',
					'type'  => 'media',
					'title' => 'Hoby Image',
				),
			),
		),
	),
));










// Footer section
CSF::createSection( $prefix, array(
	'title'  => 'Footer Section',
	'fields' => array(
		array(
			'id'    => 'copyright',
			'type'  => 'text',
			'title' => 'Copy Right Text',
			'default' => '© 2017.All rights CodexCoder',
		),
		array(
			'id'      => 'social_lists',
			'type'    => 'group',
			'title'   =>'Footer Social Midea',
			'fields'  => array(
				array(
					'id'    => 'facebook_link',
					'type'  => 'text',
					'title' => 'Facebook Link',
					'default' => '#',
				),
				array(
					'id'    => 'twitter_link',
					'type'  => 'text',
					'title' => 'Twitter Link',
					'default' => '#',
				),
				array(
					'id'    => 'linkedin_link',
					'type'  => 'text',
					'title' => 'Linkedin Link',
					'default' => '#',
				),
				array(
					'id'    => 'instagram_link',
					'type'  => 'text',
					'title' => 'Instagram Link',
					'default' => '#',
				),
				array(
					'id'    => 'pinterest_link',
					'type'  => 'text',
					'title' => 'Pinterest Link',
					'default' => '#',
				),
			),
		),
	),
));


















