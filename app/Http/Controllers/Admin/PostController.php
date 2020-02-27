<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Content;
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

    public function edit(Request $request, $type = 'page', $id = null)
    {
        $types = app('headless')->types;
        $selectedType = $types->{$type} ?? null;
        $selectedType->post_key = $type;

        if(!$selectedType) {
            abort(404);
        }

        $data = [
            'type' => $selectedType,
            'title' => "New {$selectedType->name_singular}"
        ];

        $post = new Post();
        $post->type = $type;

        if($id != null) {
            $post = \App\Post::find($id);
            $post->mapContent();
            $data['title'] = "Editing {$post->name}";
            $data['mapped_content'] = $post->mappedContent;
        } else {
            $post->mapContent();
            $data['mapped_content'] = $post->mappedContent;
            $post = (object) [];
        }

        // dd($data);
        $data['post'] = $post;

        return view('admin.post-create-edit', $data);
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
