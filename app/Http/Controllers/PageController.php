<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $pages = [
            'about' => 'Witaj',
            'contact' => 'Kontakt'
        ];
        dd($pages);
    
}

    public function show($slug) {
        $pages = [
            'about' => 'Witaj',
            'contact' => 'Kontakt'
        ];
        return $pages[$slug];
    }
}

