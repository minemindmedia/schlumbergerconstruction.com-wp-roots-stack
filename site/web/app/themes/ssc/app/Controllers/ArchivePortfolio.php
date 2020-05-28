<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchivePortfolio extends Controller
{
    
    public function pageHeader()
    {
        $field = get_field('page_header', 'options');
        return (object) [
            'hero'     => $field['hero_image'] ?? null,
            'intro'        => $field['page_intro'] ?? null,
        ];
    }

    public function portfolioLoop()
    {
        $portfolio_items = get_posts([
            'post_type' => 'portfolio',
            'posts_per_page'=>'10',
        ]);

        return array_map(function ($post) {
            return apply_filters('the_content', $post->post_content);
        }, $portfolio_items);
    }

    public function portfolioDetails()
    {
        $field = get_field('portfolio');
        return (object) [
            'location'        => $field['location'] ?? null,
            'bedrooms'     => $field['bedrooms'] ?? null,
        ];
    }

}
