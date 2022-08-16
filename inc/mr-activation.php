<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function mr_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => 'Codestar Framework',
			'slug'               => 'codestar-framework',
			'source'             => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip',
			'required'           => true, 
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form',
			'source'      => 'https://downloads.wordpress.org/plugin/contact-form-7.5.6.2.zip',
			'required'  => true,
		),
		array(
			'name'      => 'One Click Demo',
			'slug'      => 'one-click-demo',
			'source'      => 'https://downloads.wordpress.org/plugin/one-click-demo-import.3.1.2.zip',
			'required'  => true,
		),
		array(
			'name'      => 'Widget Importer & Exporter',
			'slug'      => 'widget-importer-and-exporter',
			'source'      => 'https://downloads.wordpress.org/plugin/widget-importer-exporter.1.6.zip',
			'required'  => true,
		),
	);

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '', 
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php', 
		'capability'   => 'edit_theme_options', 
		'has_notices'  => true, 
		'dismissable'  => true, 
		'dismiss_msg'  => '', 
		'is_automatic' => false,
		'message'      => '', 
	);

	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'mr_register_required_plugins' );