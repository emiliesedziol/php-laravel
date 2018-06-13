<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /*  $posts = [
        1, 2, 3, 4
      ]; */
      $posts = Post::all();

        return view('posts/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $title = $request->title;
      $content = $request->content;
      $category_id = 1;

    /*  DB::insert('insert into posts (title, content, category_id)
        values (?, ?, ?)', [$title, $content, $category_id]);  is the same as below
      DB::insert('insert into posts (title, content, category_id)
          values (:title, :content, :category_id)',
          ["title" => $title, "content" => $content, "category_id" => $category_id]);
          */

          $post = Post::create([
            "title" => $title,
            "content" => $content,
            "category_id" => $category_id
          ]);
/*
// the following expects created_at and updated_at to be sent
      $post = new Post;
      $post->title = $request->title;
      $post->content = $request->content;
      $post->category = $request->category_id;

      $post->save();  */
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
      $post = Post::where('id', $id)->first();

      // dd($post);  cleaner than what var_dump displays
    //  var_dump($post);
        return view('posts/show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
      $post = Post::where('id', $id)->first();
      // dd($post); content has all, why isn't it in edit??
        return view('posts/edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, $id)
    {

      Post::where('id', $id)
          ->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => 1
          ]);

        return 'update page, PostController';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
      Post::destroy($id);
        return 'delete page, destroy, PostController';
    }
}
