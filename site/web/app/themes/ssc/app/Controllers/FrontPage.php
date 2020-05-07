<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function gallery() {
        return get_field( 'gallery_slider' );
    }
}
