<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchOdcController extends Controller
{
    public function index() {
        return view('search.index', [
            'title' => 'Maincore ODC'
            // "active" => 'posts',
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString()
        ]);
    }
   
}
