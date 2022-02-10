<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRquest;
use App\Models\Post;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use function redirect;
use function view;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang) {
        App::setLocale($lang);

        $posts = Post::all();
        return view('Post.index', [
           'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        App::setLocale($lang);
        
        return view('Post.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRquest $request)
    {
         Post::create($request->all());
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
