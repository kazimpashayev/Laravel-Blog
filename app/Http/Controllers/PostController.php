<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function getData() {
        $data['posts'] = Posts::paginate(3);
        return view('front.posts',$data);
    }
}
