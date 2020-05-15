<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePortfolio extends Controller
{
    public function portfolio()
    {
        $field = get_field('portfolio');
        return (object) [
            'slider'     => $field['slider'] ?? null,
            'name'        => $field['name'] ?? null,
            'location'     => $field['location'] ?? null,
            'description'     => $field['description'] ?? null,
            'awards'     => $field['awards'] ?? null,
            'photos'     => $field['photos'] ?? null,
        ];
    }
}
