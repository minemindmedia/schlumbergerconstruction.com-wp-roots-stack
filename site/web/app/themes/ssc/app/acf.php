<?php 

/**
 * Save ACF Fields via Json
 */
add_filter('acf/settings/save_json', function ($path) {
    $targetDir = get_template_directory().'/acf-json';
    return (file_exists($targetDir) && is_dir($targetDir)) ? $targetDir : $path;
});

/**
 * Portfolio Archive Page
 */

if( function_exists('acf_add_options_page') )
{
    acf_add_options_page(array(
        'page_title'    => 'Portfolio Options',
        'menu_title'    => 'Portfolio Options',
        'menu_slug'     => 'options_portfolio',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'edit.php?post_type=portfolio',
        'position'      => false,
        'icon_url'      => 'dashicons-images-alt2',
        'redirect'      => false,
    ));
    
}
