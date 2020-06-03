<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageMisc extends Controller
{

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
