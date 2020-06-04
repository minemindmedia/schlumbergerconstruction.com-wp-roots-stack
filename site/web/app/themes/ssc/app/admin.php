<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
    // Rename 'Site Title & Tagline' to ‘Branding'
    $wp_customize->get_section('title_tagline')->title = __('Branding', 'sage');
    $wp_customize->get_section('title_tagline')->priority = 1;

    // Contact Section
    $wp_customize->add_section('ssc_contact', [
        'title' => __('Contact Info'),
        'description' => __('Settings for address and phone'),
        'priority' => 25,
    ]);

    // Setting
    $wp_customize->add_setting('ssc_title');
    $wp_customize->add_setting('ssc_subtitle');
    $wp_customize->add_setting('ssc_address');
    $wp_customize->add_setting('ssc_city');
    $wp_customize->add_setting('ssc_state');
    $wp_customize->add_setting('ssc_zip');
    $wp_customize->add_setting('ssc_phone');
    $wp_customize->add_setting('ssc_fax');

    // Control
    $wp_customize->add_control('ssc_title',  [
        'label' => __( 'Title'),
        'section' => 'ssc_contact',
        'type' => 'text',
        'priority' => 10
    ]);
    $wp_customize->add_control('ssc_subtitle',  [
        'label' => __( 'Subtitle'),
        'section' => 'ssc_contact',
        'type' => 'text',
        'priority' => 10
    ]);
    $wp_customize->add_control('ssc_address',  [
        'label' => __( 'Address'),
        'section' => 'ssc_contact',
        'type' => 'text',
        'priority' => 10
    ]);
    $wp_customize->add_control('ssc_city',  [
        'label' => __( 'City'),
        'section' => 'ssc_contact',
        'type' => 'text',
        'priority' => 10
    ]);
    $wp_customize->add_control('ssc_state',  [
        'label' => __( 'State'),
        'section' => 'ssc_contact',
        'type' => 'text',
        'priority' => 10
    ]);
    $wp_customize->add_control('ssc_zip',  [
        'label' => __( 'Zip'),
        'section' => 'ssc_contact',
        'type' => 'text',
        'priority' => 10
    ]);
    $wp_customize->add_control('ssc_phone',  [
        'label' => __( 'Phone Number'),
        'section' => 'ssc_contact',
        'type' => 'tel',
        'priority' => 10
    ]);
    $wp_customize->add_control('ssc_fax',  [
        'label' => __( 'Fax Number'),
        'section' => 'ssc_contact',
        'type' => 'tel',
        'priority' => 10
    ]);

});


/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

