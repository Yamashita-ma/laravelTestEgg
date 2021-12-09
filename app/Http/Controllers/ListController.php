<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ListController extends Controller
{
    public function list(){
        $posts = Post::latest()->get();

        return view('lists.list')
            ->with(['posts' => $posts]);
        
        // $posts = Post::all();

        // return view('lists.list')
        //     ->with(['posts' => $posts]);
    }

}
