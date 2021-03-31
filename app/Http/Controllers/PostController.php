<?php

namespace App\Http\Controllers;
use App\Models\Posts;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    
    function loadView($posts)
{
    return view("post",[Posts::class,'posts'=>$posts]);
}
function store(Request $request){
    $author=Post::create($request()->all());
}
}
