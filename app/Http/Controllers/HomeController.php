<?php

namespace App\Http\Controllers;

use App\Models\AccessToken;
use App\Models\Employer\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite;

class HomeController extends Controller
{
    /**
     * @return $this
     */
    public function index()
    {
//        $posts = Post::getAllPost();
        $post = Post::find(3);
        dd($post->tags()->orderBy('name')->get());
//        return view('home')->with('posts', $posts);
    }
}
