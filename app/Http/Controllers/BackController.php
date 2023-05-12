<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class BackController extends Controller
{
    public function home() {
        $data['posts'] = Posts::all();
        return view('back.dashboard', $data);
    }

    public function posts() {
        $data['posts'] = Posts::all();
        return view('back.posts.posts', $data);
    }

    public function post_add() {
        return view('back.posts.create');
    }

}
