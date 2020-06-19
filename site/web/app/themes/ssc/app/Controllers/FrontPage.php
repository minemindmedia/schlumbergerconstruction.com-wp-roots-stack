<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    protected $acf = true;

    public function gallery() {
        return get_field( 'gallery_slider' );
    }

    public function intro() {
        return get_field( 'intro' );
    }

    public function featured() {
        global $post;
        $data = [];
        $featured = get_field('featured_portfolios');
            foreach ($featured as $f) {
                $post_data = [
                    'thumbnail' => get_the_post_thumbnail($f, 'hero', array('class' => 'lozad')),
                    'permalink' => get_the_permalink($f),
                    'title' => get_the_title($f),
                ];
    
                $field = get_field('portfolio', $f);
                $portfolio_data = [
                    'location'     => $field['location'] ?? null,
                ];
                array_push($data, (object) array_merge($post_data, $portfolio_data));
            }
            return $data;
        }

}
