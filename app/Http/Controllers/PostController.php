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

    public function getAdminIndex(Store $session) {
        $post = new Post();
        $posts = $post -> getPosts($session);
        return view('admin.index', ['posts' => $posts]);
    }

    public function getPost(Store $session, $id) {
        $post = new Post();
        $post = $post -> getPosts($session, $id);
        return view('blog.post', ['posts' => $post]);
    }

    public function getAdminCreate() {
        return view('admin.create');
    }

    public function getAdminEdit(Store $session, $id) {
        $post = new Post();
        $post = $post->($session, $id);
        return view('admin.edit', ['post' => $post, 'postId' => $id]);
    }

    public function postAdminCreate(Store $session, Request $request) {
        $post = new Post();
        $post -> addPost($session, $request -> input('title'), $request -> input('content'));
        return redirect() -> route('admin.index')
            -> with('info', 'Post created, Title is: '. $request -> input('title'));
    }

    public function postAdminUpdate(Store $session, Request $request) {
        $post = new Post();
        $post -> editPost($session,
            $request -> input('id'),
            $request -> input('title'),
            $request -> input('content'));
        return redirect() -> route('admin.index')
            -> with('info', 'Post edited, new Title is: '. $request -> input('title'));
    }
}
