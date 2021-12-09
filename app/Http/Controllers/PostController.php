<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ],[
            'title.required' => 'タイトルは入力必須です。',
            'body.required' => '内容は入力必須です。',
        ]);
        
        if(request('image_file_name')) {
            $filename = request()->file('image_file_name')->getClientOriginalName();
            $inputs['image_file_name'] = request('image_file_name')->storeAs('public/abc', $filename);
        }
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image_file_name = $filename;
        $post->save();

        
        

        return redirect()
            ->route('lists.list');
    }
}
