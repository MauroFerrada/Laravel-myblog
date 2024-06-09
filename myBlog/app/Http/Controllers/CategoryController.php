<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex() {
        $posts = post::all();
        return view('category/index', compact('posts'));
    }

    public function getShow($id) {
        $post= post::find($id);
        return view('category/show', compact('post'));
    }

    public function getCreate() {
        return view('category/create');
    }

    public function store(Request $request) {
        $post = new post();

        $post->title=$request->title;
        $post->content=$request->content;
        $post->poster=$request->poster;

        $post->save();

        return redirect("/category");
    }

    public function getEdit($id) {
        return view('category/edit') .$id;
    }
}
