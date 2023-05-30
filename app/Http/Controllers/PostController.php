<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){
        $popular = Post::orderBy('like', 'DESC')->take(1)->get();
        $posts = Post::all();
        $latest = Post::orderBy('latest_review', 'DESC')->take(4)->get();

        return view('home', compact('popular', 'posts', 'latest'));
    }

    public function detail($id){
        $post = Post::find($id);
        return view('detail', compact('post'));
    }
}
