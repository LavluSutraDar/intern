<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$posts = Post::with('users')->latest('id')->get();
        $posts = DB::table('users')->latest('id')->get();
        //dd($posts);
        return view('welcome', compact('posts'));
    }
}

