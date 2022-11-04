<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OdcMainController extends Controller
{
    //
    public function index() {
        return view('data.odc_main.index', [
            'title' => 'ODC Main'
            // "active" => 'posts',
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString()
        ]);
    }


}
