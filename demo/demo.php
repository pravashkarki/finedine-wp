<?php
/**
 * Demo content configuration
 *
 * @package finedine
 */


$config = array(
	'static_page'    => 'home',
	'posts_page'     => 'blog',
	'menu_locations' => array(
		'menu-1' => 'main-menu',
	),
	'ocdi'           => array(
		array(
			'import_file_name'             => esc_html__( 'Theme Demo Content', 'finedine' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/demo-content/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/demo-content/finedine-widget.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/demo-content/finedine-export.dat',
		),
	),
);

Finedine_Demo_Import::init( apply_filters( 'Finedine_Demo_Import_filter', $config ) );