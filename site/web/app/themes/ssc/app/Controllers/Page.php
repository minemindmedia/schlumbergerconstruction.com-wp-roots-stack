<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller
{
    
    public function pageHeader()
    {
        $field = get_field('page_header');
        return (object) [
            'hero'     => $field['hero_image'] ?? null,
            'intro'        => $field['page_intro'] ?? null,
        ];
    }

    public function misc()
    {
        return array_map(function($m) {
            return [
                'name' => $m['name'] ?? null,
                'location' => $m['location'] ?? null,
                'photo' => $m['photo'] ?? null,
            ];
        }, get_field('misc_gallery') ?? []);
    }

}
