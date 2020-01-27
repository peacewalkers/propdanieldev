<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        if(Auth::user()->hasRole('admin')){
            $posts = Posts::all();
        } else {
            $posts = Posts::where('user_id', Auth::user()->get());
        }
    }
}
