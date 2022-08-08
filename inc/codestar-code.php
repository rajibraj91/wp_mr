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
			),
		),
		array(
			'id'      => 'social_lists',
			'type'    => 'group',
			'title'   =>'Banner Social Midea Lists',
			'fields'  => array(
				array(
					'id'    => 'icon_name',
					'type'  => 'icon',
					'title' => 'Select Icon',
				),
				array(
					'id'    => 'site_link',
					'type'  => 'text',
					'title' => 'Visited Your Site Link Here',
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

// Counter section
CSF::createSection( $prefix, array(
	'title'  => 'Counter Section',
	'fields' => array(
		array(
			'id'    => 'counter_lists',
			'type'  => 'group',
			'title' => 'Counter Lists Area',
			'fields'  => array(
				array(
					'id'    => 'counter_icon',
					'type'  => 'icon',
					'title' => 'Counter Icon',
				),
				array(
					'id'    => 'counter_count',
					'type'  => 'text',
					'title' => 'Counter Count Number',
					'default' => '100',
				),
				array(
					'id'    => 'counter_text',
					'type'  => 'text',
					'title' => 'Counter Count Text',
					'default' => 'Text Here',
				),
			),
		),
	),
));



// Work Process
CSF::createSection( $prefix, array(
	'title'  => 'Working Process',
	'fields' => array(
		array(
			'id'    => 'working_lists',
			'type'  => 'group',
			'title' => 'My Working Process',
			'fields'  => array(
				array(
					'id'    => 'working_text',
					'type'  => 'text',
					'title' => 'working Count Text',
					'default' => 'Text',
				),
				array(
					'id'    => 'working_img',
					'type'  => 'media',
					'title' => 'working Icon',
				),
				array(
					'id'    => 'working_icon',
					'type'  => 'icon',
					'title' => 'working Icon',
				),
			),
		),
	),
));


// Contact Process
CSF::createSection( $prefix, array(
	'title'  => 'Contact Us',
	'fields' => array(
		array(
			'id'    => 'info_lists',
			'type'  => 'group',
			'title' => 'Contact Information Area',
			'fields'  => array(
				array(
					'id'    => 'info_text',
					'type'  => 'text',
					'title' => 'Info Text',
					'default' => 'Text',
				),
				array(
					'id'    => 'info_icon',
					'type'  => 'icon',
					'title' => 'Info Icon',
				),
			),
		),
		array(
			'id'    => 'con_social_lists',
			'type'  => 'group',
			'title' => 'Contact Social Area',
			'fields'  => array(
				array(
					'id'    => 'social_icon',
					'type'  => 'icon',
					'title' => 'Social Icon',
				),
				array(
					'id'    => 'site_link',
					'type'  => 'text',
					'title' => 'Visite Site Link Here',
					'default' => '#',
				),
			),
		),
	),
));



// Google Map
CSF::createSection( $prefix, array(
	'title'  => 'Google Map',
	'fields' => array(
		array(
			'id'    => 'google_map',
			'type'  => 'text',
			'title' => 'Google Map API Link Here',
			'default' => 'http://maps.googleapis.com/maps/api/js?key=AIzaSyDkA3g92_4G-b4SpzUPA41QCL_r9naN1mM',
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
					'id'    => 'icon_name',
					'type'  => 'icon',
					'title' => 'Select Icon',
				),
				array(
					'id'    => 'site_link',
					'type'  => 'text',
					'title' => 'Visited Your Site Link Here',
					'default' => '#',
				),
			),
		),
	),
));


















