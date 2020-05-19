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

}
