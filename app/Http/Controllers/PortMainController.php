<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortMainController extends Controller
{
    //
    public function index() {
        return view('data.port_main.index', [
            'title' => 'Port Main'
            // "active" => 'posts',
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString()
        ]);
    }

}
