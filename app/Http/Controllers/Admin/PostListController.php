<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostListController extends Controller
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

    public function getList(Request $request, $type = 'page')
    {
        $types = app('headless')->types;
        $selectedType = $types->{$type} ?? null;
        
        if(!$selectedType) {
            abort(404);
        }

        return view('admin.post-list', [
            'type' => $selectedType
        ]);
    }

}
