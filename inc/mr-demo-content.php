<?php


function mr_import_files() {
    return [
        [
            'import_file_name'           => 'MR Demo Import',
            'categories'                 => 'MR Demo Content Import',
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . '/demo-data/mr-demo-content-data.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . '/demo-data/mr-widgets.wie',
        ],
    ];
}
add_filter( 'ocdi/import_files', 'mr_import_files' );