<?php

namespace App\Http\Controllers\Employer;

use App\Models\Employer\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(15);
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $post = new Post();
//        $post->user_id = Auth::user()->id;
//        $post->company_id = User::Compay()->id;
        $post->user_id = $input['user_id'];
        $post->company_id = $input['company_id'];

        $post->title = $input['title'];
        $post->description = $input['description'];
        $post->skill = $input['skill'];
        $post->wage = $input['wage'];
        $post->phone_number = $input['phone_number'];
        $post->location = $input['location'];
        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $post = Post::findOrFail($id);
        $post->title = $input['title'];
        $post->description = $input['description'];
        $post->skill = $input['skill'];
        $post->wage = $input['wage'];
        $post->phone_number = $input['phone_number'];
        $post->location = $input['location'];
        $post->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
    }
}
