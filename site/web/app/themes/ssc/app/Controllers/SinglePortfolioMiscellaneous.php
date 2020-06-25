<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePortfolioMiscellaneous extends Controller
{

    public function pageHeader() {
        return get_field( 'miscellaneous_header' );
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
