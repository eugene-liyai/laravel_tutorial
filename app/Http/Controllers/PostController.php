<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\post;

class PostController extends Controller
{
    public function getIndex(Store $session) {
        $post = new post();
        $posts = $post->getPosts($session);
        return view('blog.index', ['posts' => $posts]);
    }
}
