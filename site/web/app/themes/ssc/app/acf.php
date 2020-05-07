<?php 

/**
 * Save ACF Fields via Json
 */
add_filter('acf/settings/save_json', function ($path) {
    $targetDir = get_template_directory().'/acf-json';
    return (file_exists($targetDir) && is_dir($targetDir)) ? $targetDir : $path;
});
