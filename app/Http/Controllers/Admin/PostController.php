<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new(Request $request, $type = 'page', $id = null)
    {
        $types = app('headless')->types;
        $selectedType = $types->{$type} ?? null;
        $selectedType->post_key = $type;

        if(!$selectedType) {
            abort(404);
        }

        $title = '';

        if($id == null) {
            $title = "New {$selectedType->name_singular}"; 
            $post = new Post();
        }

        if($id == null) {
            $post = (object) [];
        }

        return view('admin.post-create-edit', [
            'type' => $selectedType,
            'title' => $title,
            'post' => $post
        ]);
    }

    public function update(Request $request, $type = 'page', $id = null) {

        $post = new Post();

        $post->type = $type;
        $post->name = $request->input('name');
        $post->key = $request->input('key');

        $post->published_at = now();

        $post->save();

        return $post;
    }

}
